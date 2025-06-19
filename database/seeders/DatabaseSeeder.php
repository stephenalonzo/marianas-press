<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
           [
            'name' => 'Thomas Manglona III',
            'password' => bcrypt('password'),
            'email' => 'thomas.manglona@marianaspress.com'
           ],
           [
            'name' => 'Mark Rabago',
            'password' => bcrypt('password'),
            'email' => 'mark.rabago@marianaspress.com'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $reports = [
            'title' => 'Department of Finance Announces Rollout of 2024 Tax Refund Disbursements',
            'slug' => str_replace(' ', '-', strtolower('Department of Finance Announces Rollout of 2024 Tax Refund Disbursements')),
            'user_id' => 1,
            'author' => 'Thomas Manglona III',
            'tags' => ['Finance', 2024, 'Tax Refund'],
            'description' => '(Saipan, MP) - The Department of Finance is pleased to announce that tax refund disbursements for the 2024 tax year have officially begun. Starting this week, $4.5 million in refunds will be released. While last year’s refunds began in May, this year’s distribution comes a month later due to the launch of our new automated tax system. DRT conducted rigorous testing of the tax system and was able to clear the first batch of refunds with error-free returns. What Taxpayers Need to Know: Refunds are underway: Taxpayers will receive their refunds on a rolling batch basis as tax returns are cleared for disbursement. Phased distribution: To maintain system stability, refunds will be processed in controlled batches Enhanced reliability: The new system ensures better tracking of errors and faster processing in upcoming tax seasons.Future benefits: As transitions complete, the full capabilities of the automated system will ensure that refunds are issued earlier and more consistently in future cycles. For questions or updates on the status of your refund, please contact the Department of Finance at (670) 664-1040.  (PRESS RELEASE)'
        ];

        Report::create($reports);
    }
}
