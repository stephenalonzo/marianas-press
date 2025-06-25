<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->whereNot(
            function ($query) {
                $query->where('tags', 'like', '%sports%');
            }
        )->limit(6)->get();

        return view('index', [
            'latest' => Report::orderBy('created_at', 'desc')->first(),
            'reports' => $reports,
            'sports' => Report::where('tags', 'like', '%sports%')->latest()->get()
        ]);
    }

    public function allReports()
    {
        $reports = Report::orderBy('updated_at', 'desc')->whereNot(
            function ($query) {
                $query->where('tags', 'like', '%sports%');
            }
        )->latest()->filter(request(['search']))->get();

        return view('news.index', [
            'reports' => $reports
        ]);
    }

    public function allSports()
    {
        return view('news.sports', [
            'sports' => Report::where('tags', 'like', '%sports%')->latest()->filter(request(['search']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ReportRequest $request)
    {
        $validated = $request->validated();

        $validated['description'] = e($validated['description']);
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['title']));
        $validated['user_id'] = auth()->user()->id;
        $validated['author'] = auth()->user()->name;
        $validated['tags'] = explode(", ", $validated['tags']);

        Report::create($validated);

        return redirect('/news/' . $validated['slug']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        $seconds_ago = (time() - strtotime($report->created_at));

        if ($seconds_ago >= 31536000) {
            $days_ago = "Updated " . intval($seconds_ago / 31536000) . " years ago";
        } elseif ($seconds_ago >= 2419200) {
            $days_ago = "Updated " . intval($seconds_ago / 2419200) . " months ago";
        } elseif ($seconds_ago >= 86400) {
            $days_ago = "Updated " . intval($seconds_ago / 86400) . " days ago";
        } elseif ($seconds_ago >= 3600) {
            $days_ago = "Updated " . intval($seconds_ago / 3600) . " hours ago";
        } elseif ($seconds_ago >= 120) {
            $days_ago = "Updated " . intval($seconds_ago / 60) . " minutes ago";
        } elseif ($seconds_ago >= 60) {
            $days_ago = "Updated a minute ago";
        } else {
            $days_ago = "Updated less than a minute ago";
        }

        $title = $report->title;

        return view('news.show', [
            'report' => $report,
            'days_ago' => $days_ago,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReportRequest $request, Report $report)
    {
        $validated = $request->validated();

        $validated['description'] = e($validated['description']);
        $validated['slug'] = str_replace(' ', '-', strtolower($validated['title']));
        $validated['user_id'] = auth()->user()->id;
        $validated['author'] = auth()->user()->name;
        $validated['tags'] = explode(", ", $validated['tags']);

        $report->update($validated);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
