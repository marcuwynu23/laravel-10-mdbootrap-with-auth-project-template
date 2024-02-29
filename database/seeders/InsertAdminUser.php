<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsertAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // insert one user data
        $admin = new \App\Models\User();
        $admin->firstName = "Mark Wayne";
        $admin->middleName = "Buncaras";
        $admin->lastName = "Menorca";
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt("admin");
        $admin->save();
    }
}
