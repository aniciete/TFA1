<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin.reyes',
                'full_name' => 'Carlos Reyes',
                'role'      => 'Store Administrator',
            ],
            [
                'username'  => 'mgr.castro',
                'full_name' => 'Beatriz Castro',
                'role'      => 'Shift Supervisor',
            ],
            [
                'username'  => 'cashier.valdez',
                'full_name' => 'Daniel Valdez',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier.santos',
                'full_name' => 'Camille Santos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'inv.navarro',
                'full_name' => 'Leo Navarro',
                'role'      => 'Inventory Clerk',
            ],
        ];

        return view('users/index', [
            'title'      => 'User Accounts | POS Foundations',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
