<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'email'=>"admin@admin.com",
            'name'=>'Admin',
            'password'=>Hash::make("password"),
            'role'=>User::ADMIN_ROLE
        ]);
    }
}
