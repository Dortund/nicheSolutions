<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        self::addUserIfNotExists('admin', 'admin@nichesolutions.nl', 'admin');
    }
    
    public static function addUserIfNotExists($name, $email, $pass) {
        if (!User::where('name', $name)->exists()) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($pass),
            ]);
        }
    }
}
