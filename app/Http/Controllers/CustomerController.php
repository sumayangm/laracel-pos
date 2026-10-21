<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Sumayang Kyle Christian',
                'email' => 'SumayangKyleChristian@email.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Sumayang Kyle Christopher',
                'email' => 'SumayangKyleChristopher@email.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Sumayang Kylie Christine',
                'email' => 'SumayangKylieChristine@email.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Sumayang Jonila',
                'email' => 'SumayangJonila@email.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Sumayang Edgardo',
                'email' => 'SumayangEdgardo.garcia@email.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', compact('customers'));
    }
}