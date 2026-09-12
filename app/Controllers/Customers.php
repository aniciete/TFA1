<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Elena Rostova',
                'email'     => 'elena.rostova@example.com',
                'phone'     => '+1 (555) 234-5678',
            ],
            [
                'full_name' => 'Marcus Vance',
                'email'     => 'marcus.vance@example.com',
                'phone'     => '+1 (555) 345-6789',
            ],
            [
                'full_name' => 'Aria Thorne',
                'email'     => 'aria.thorne@example.com',
                'phone'     => '+1 (555) 456-7890',
            ],
            [
                'full_name' => 'Julian Mercer',
                'email'     => 'julian.mercer@example.com',
                'phone'     => '+1 (555) 567-8901',
            ],
            [
                'full_name' => 'Sophia Lin',
                'email'     => 'sophia.lin@example.com',
                'phone'     => '+1 (555) 678-9012',
            ],
        ];

        return view('customers/index', [
            'title'      => 'Customer Accounts | POS Foundations',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
