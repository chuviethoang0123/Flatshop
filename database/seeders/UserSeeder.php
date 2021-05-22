<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::where('is_admin', 1)->delete();
       User::create([
           'name' => 'admin',
           'email' =>'admin@gmail.com',
           'email_verified_at' => null,
           "current_team_id" => 1,
            "profile_photo_path" => null,
            'is_admin' => 1,
            "password" => bcrypt('12345678'),
       ]);
    }
}
