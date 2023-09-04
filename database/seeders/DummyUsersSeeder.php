<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'calonpengurus_id' => '0',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345678')
            ],
            [
                // 'name' => 'Hakim',
                // 'calonpengurus_id' => '2',
                // 'email' => 'hakim@gmail.com',
                // 'role' => 'applicant',
                // 'password' => bcrypt('12345678'),

            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
