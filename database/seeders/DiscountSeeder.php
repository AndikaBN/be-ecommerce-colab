<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        //manual input
        \App\Models\Discount::create([
            'name' => 'Welcome Restoran Nursalih',
            'description' => 'Member baru Restoran Nursalih',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2025-04-14'
        ]);

        \App\Models\Discount::create([
            'name' => 'New Year',
            'description' => 'Discount New Year',
            'type' => 'percentage',
            'value' => 20,
            'status' => 'active',
            'expired_date' => '2025-01-02'
        ]);

        \App\Models\Discount::create([
            'name' => 'Ramadhan',
            'description' => 'Discount Ramadhan',
            'type' => 'percentage',
            'value' => 15,
            'status' => 'active',
            'expired_date' => '2025-04-12'
        ]);
    }
}
