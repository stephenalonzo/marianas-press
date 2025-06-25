<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Report;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create([
            'name' => 'writer'
        ]);

        $permissions = [
            [
                'name' => 'create articles',
            ],
            [
                'name' => 'edit articles',
            ],
            [
                'name' => 'delete articles',
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
            $role->givePermissionTo($permission);
        }

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
            ],
            [
                'name' => 'Leigh Gases',
                'password' => bcrypt('password'),
                'email' => 'leigh.gases@marianaspress.com'
            ],
        ];

        foreach ($users as $user) {
            User::create($user)->assignRole($role);
        }

        // $reports = [];

        // foreach ($reports as $report) {
        //     Report::create($report);
        // }
    }
}
