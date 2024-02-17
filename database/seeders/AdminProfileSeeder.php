<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();

        $vendor =  new Vendor();
        $vendor->banner = 'uploads/123.jpg';
        $vendor->phone = '123456789';
        $vendor->email = 'admin@gmail.com';
        $vendor->address = 'usa';
        $vendor->description = 'shop description';
        $vendor->user_id = $user->id;
       $vendor->save();
    }
}
