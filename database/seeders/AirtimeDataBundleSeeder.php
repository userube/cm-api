<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AirtimeDataBundles;

class AirtimeDataBundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AirtimeDataBundles::create([
            'service_id' => 1, // AIRTIME
            'code' => 'MTN-AIRTIME',
            'description' => 'Airtime recharge for MTN ',
            'price' => 100.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 1, // AIRTIME
            'code' => 'GLO-AIRTIME',
            'description' => 'Airtime recharge for GLO ',
            'price' => 100.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 1, // AIRTIME
            'code' => 'AIRTEL-AIRTIME',
            'description' => 'Airtime recharge for AIRTEL ',
            'price' => 100.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 1, // AIRTIME
            'code' => 'ETISALAT-AIRTIME',
            'description' => 'Airtime recharge for ETISALAT ',
            'price' => 100.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'ETISALAT-DATA-100GB',
            'description' => '100GB Data recharge for ETISALAT ',
            'price' => 10000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'ETISALAT-DATA-10GB',
            'description' => '10GB Data recharge for ETISALAT ',
            'price' => 1000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'MTN-DATA-100GB',
            'description' => '100GB Data recharge for MTN ',
            'price' => 10000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'MTN-DATA-10GB',
            'description' => '10GB Data recharge for MTN ',
            'price' => 1000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'GLO-DATA-100GB',
            'description' => '100GB Data recharge for GLO ',
            'price' => 10000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'GLO-DATA-10GB',
            'description' => '10GB Data recharge for GLO ',
            'price' => 1000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'ETISALAT-DATA-100GB',
            'description' => '100GB Data recharge for ETISALAT ',
            'price' => 10000.00,
        ]);
        AirtimeDataBundles::create([
            'service_id' => 2, // DATA
            'code' => 'ETISALAT-DATA-10GB',
            'description' => '10GB Data recharge for ETISALAT ',
            'price' => 1000.00,
        ]);
    }
}
