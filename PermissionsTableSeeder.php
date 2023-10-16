<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [
            ['name' => 'create-product'],
            ['name' => 'edit-product'],
            ['name' => 'delete-product'],
            ['name' => 'view-product'],
            ['name' => 'view-appointments'],
            ['name' => 'view-quotes'],
            ['name' => 'update-appointments'],
            ['name' => 'reply-to-clients'],
            // Add more permissions as needed
        ];

        DB::table('permissions')->insert($permissions);
    }
}