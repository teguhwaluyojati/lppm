<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Role::create([
            'name' => 'dosen',
            'description' => 'Dosen / Peneliti LPPM',
        ]);

        \App\Models\Role::create([
            'name' => 'rektor_1',
            'description' => 'Rektor 1',
        ]);

        \App\Models\Role::create([
            'name' => 'rektor_2',
            'description' => 'Rektor 2',
        ]);

        \App\Models\Role::create([
            'name' => 'wakil_rektor_1',
            'description' => 'Wakil Rektor 1',
        ]);

        \App\Models\Role::create([
            'name' => 'wakil_rektor_2',
            'description' => 'Wakil Rektor 2',
        ]);

        \App\Models\Role::create([
            'name' => 'kepala_lppm',
            'description' => 'Kepala LPPM',
        ]);
    }
}
