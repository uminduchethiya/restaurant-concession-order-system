<?php

namespace Database\Seeders;

use App\Consts\UserRoleConst;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name'=>'resturentstaff',
            'email'=>'r@g.c',
            'password' => bcrypt(config('app.RESTURENTSTAFF_DEFAULT_PASSWORD')),
            'role_id' => UserRoleConst::RESTAURANTSTAFF,
            

        ]);

        User::create([
            'name' => 'kitchenstaff',
            'email' => 'k@g.c',
            'password' => bcrypt(config('app.KITCHENSTAFF_DEFAULT_PASSWORD')),
            'role_id' => UserRoleConst::KITCHENSTAFF,
        ]);
    }
}
