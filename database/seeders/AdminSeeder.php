<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@mydevice.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Panel',
                'email' => 'admin@mydevice.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('ADMIN12PASS'),
            ]);
        }
    }


}
