<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'John Henrich Doroteo',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Rey Ramos',
                'role'      => 'Store Manager',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Elisha Cancino',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Joby Miranda',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'inventory01',
                'full_name' => 'Elisha Cancino',
                'role'      => 'Inventory Staff',
            ],
        ];

        $data = [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}
