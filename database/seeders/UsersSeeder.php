<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batman = new User;
        $batman->name = "Batman";
        $batman->email = "batman@dcexample.com";
        $batman->password = "Batman123";
        $batman->save();

    
        $spiderman = new User;
        $spiderman->name = "Spiderman";
        $spiderman->email = "spidermann@marvelexample.com";
        $spiderman->password = "Spidey123";
        $spiderman->save();
    }
}
