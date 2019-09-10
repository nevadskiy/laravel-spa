<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@mail.com',
            'password' => 'secret',
            'api_token' => Str::random(80),
        ]);
    }
}
