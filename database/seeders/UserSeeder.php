<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $faker = Faker::create();

        $users = [];

        $users[] = [
            'npm' => '5520121000',
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Perpus',
            'email' => 'admin@unsur.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        for ($i = 1; $i <= 50; $i++) {
            $kodeJurusan = '55201';
            $angkatan = $faker->numberBetween(21, 25);
            $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);
            $npm = $kodeJurusan . $angkatan . $urutan;

            $users[] = [
                'npm'               => $npm,
                'username'          => $faker->userName(),
                'first_name'        => $faker->firstName(),
                'last_name'         => $faker->lastName(),
                'email'             => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password'          => Hash::make('123'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ];
        }
        DB::table('users')->insert($users);
    }
}
