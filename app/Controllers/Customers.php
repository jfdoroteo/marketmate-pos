<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'John Henrich Doroteo',
                'email'     => 'johnhenrichdoroteo@gmail.com',
                'phone'     => '0917-123-4567',
            ],
            [
                'full_name' => 'Lay Gonzales',
                'email'     => 'laygonzales@gmail.com',
                'phone'     => '0918-234-5678',
            ],
            [
                'full_name' => 'Jp Morgan Chase',
                'email'     => 'JpMorganChase@gmail.com',
                'phone'     => '0919-345-6789',
            ],
            [
                'full_name' => 'Elon Musk',
                'email'     => 'elonmusk@gmail.com',
                'phone'     => '0920-456-7890',
            ],
            [
                'full_name' => 'Mr.Beast',
                'email'     => 'mrbeast@gmail.com',
                'phone'     => '0921-567-8901',
            ],
        ];

        $data = [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}
