<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        Customer::insert([
            [
                'full_name' => 'Sumayang Kyle Christian',
                'email' => 'SumayangKyleChristian@email.com',
                'phone' => '09171234567',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'full_name' => 'Sumayang Kyle Christopher',
                'email' => 'SumayangKyleChristopher@email.com',
                'phone' => '09181234567',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'full_name' => 'Sumayang Kylie Christine',
                'email' => 'SumayangKylieChristine@email.com',
                'phone' => '09191234567',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'full_name' => 'Sumayang Jonila',
                'email' => 'SumayangJonila@email.com',
                'phone' => '09201234567',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'full_name' => 'Sumayang Edgardo',
                'email' => 'SumayangEdgardo.garcia@email.com',
                'phone' => '09211234567',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        User::insert([
            [
                'username' => 'admin',
                'full_name' => 'Christian',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Christopher',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Christine',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Jonila',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'staff02',
                'full_name' => 'Edgardo',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}