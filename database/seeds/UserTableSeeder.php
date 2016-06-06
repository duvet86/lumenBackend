<?php

# database/seeds/UserTableSeeder.php

use App\Models\User;  
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder  {
    
    public function run() {
        User::create([
            'email'    => 'duvet86@gmail.com',
            'password' => Hash::make('duvet86')
        ]);
    }
    
}