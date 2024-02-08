<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            'Bagerhat', 'Bandarban', 'Barguna', 'Barisal', 'Bhola', 'Bogura', 'Brahmanbaria', 'Chandpur',
            'Chapainawabganj', 'Chattogram', 'Chuadanga', 'Comilla', 'Cox\'s Bazar', 'Dhaka', 'Dinajpur',
            'Faridpur', 'Gaibandha', 'Gazipur', 'Gopalganj', 'Habiganj', 'Jamalpur', 'Jessore', 'Jhalokathi',
            'Jhalokathi', 'Jhenaidah', 'Joypurhat', 'Khagrachari', 'Khulna', 'Kurigram', 'Kushtia',
            'Lakshmipur', 'Lalmonirhat', 'Magura', 'Manikganj', 'Madaripur', 'Meherpur', 'Moulvibazar',
            'Munshiganj', 'Mymensingh', 'Nakhon Nayok', 'Narail', 'Narayanganj', 'Narsingdi', 'Nakhon Nayok',
            'Netrokona', 'Nilphamari', 'Noakhali', 'Pabna', 'Panchagarh', 'Patuakhali', 'Rajbari', 'Rajshahi',
            'Rangamati', 'Rangpur', 'Satkhira', 'Satkhira', 'Sherpur', 'Shariatpur', 'Sirajganj', 'Sylhet',
            'Sunamganj', 'Tangail', 'Thakurgaon'
        ];


        foreach ($districts as $district) {
            DB::table('districts')->insert([
                'name' => $district,
            ]);
        }
    }
}
