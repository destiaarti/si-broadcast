<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'super name',
            'password'=>bcrypt('admin123'),
            'email' => 'super@gmail.com',
            'telp' => '0893748556',
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin name',
            'password'=>bcrypt('admin123'),
            'email' => 'admin@gmail.com',
            'telp' => '089374855684',
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Member name',
            'password'=>bcrypt('admin123'),
            'email' => 'member@gmail.com',
            'telp' => '089374855684',
            'role' => 'Member'
        ]);
    }
}
