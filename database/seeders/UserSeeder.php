<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::insert([
            [
                'first_name' => 'John',
                'last_name' => 'Smith',
                'gender_id' => 1,
                'role_id' => 2,
                'email' => 'john_smith@gmail.com',
                'display_picture_link' => 'accounts/john-smith-user.jpg',
                'password' => bcrypt("password123"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'first_name' => 'Maria',
                'last_name' => 'Smith',
                'gender_id' => 2,
                'role_id' => 2,
                'email' => 'maria_smith@gmail.com',
                'display_picture_link' => 'accounts/maria-smith-user.jpg',
                'password' => bcrypt("password123"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'first_name' => 'Hu',
                'last_name' => 'Tao',
                'gender_id' => 2,
                'role_id' => 1,
                'email' => 'hu_tao@gmail.com',
                'display_picture_link' => 'accounts/hu-tao-user.jpg',
                'password' => bcrypt("password123"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'first_name' => 'Mike',
                'last_name' => 'Martine',
                'gender_id' => 1,
                'role_id' => 2,
                'email' => 'mike_martine@gmail.com',
                'display_picture_link' => 'accounts/mike-martine-user.jpg',
                'password' => bcrypt("password123"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'first_name' => 'Kaedehara',
                'last_name' => 'Kazuha',
                'gender_id' => 1,
                'role_id' => 1,
                'email' => 'kazuha@gmail.com',
                'display_picture_link' => 'accounts/kaedehara-kazuha-user.jpg',
                'password' => bcrypt("password123"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
