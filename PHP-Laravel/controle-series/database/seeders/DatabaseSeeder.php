<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Evita criar usuário duplicado
        if (!User::where('email', 'felippe@gmail.com')->exists()) {
            User::create([
                'name' => 'Felippe',
                'email' => 'felippe@gmail.com',
                'password' => Hash::make('123456'),
            ]);
            
        }
    }
}
