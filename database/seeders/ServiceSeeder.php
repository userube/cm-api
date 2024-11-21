<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Airtime',
            'code' => 'AIRTIME',
            'type' => 'Top-up'
        ]);
        Service::create([
            'name' => 'Data',
            'code' => 'DATA',
            'type' => 'Bundle'
        ]);
    }
}
