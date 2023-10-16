<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;


class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin1 = [
            'firstname' => 'Rania',
            'lastname' => 'harrabi',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'admin',
            'login-at' => date('Y-m-d H:i:s'),
        ];
        Admin::create($admin1);

        $admin = [
            'firstname' => 'Dharmesh',
            'lastname' => 'chauhan',
            'email' => 'secrt@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'secrt',
            'login-at' => date('Y-m-d H:i:s'),
        ];
        Admin::create($admin);

        $client = [
            'firstname' => 'client1',
            'lastname' => 'CL',
            'email' => 'client1@gmail.com',
            'password' => bcrypt('1234'),
            'login-at' => date('Y-m-d H:i:s'),
        ];
        Clients::create($client);

    }
}