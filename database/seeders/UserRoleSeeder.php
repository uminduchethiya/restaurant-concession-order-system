<?php

namespace Database\Seeders;

use App\Consts\UserRoleConst;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create(['id'=>UserRoleConst::RESTAURANTSTAFF,'name'=>'resturentstaff']);
        UserRole::create(['id'=>UserRoleConst::KITCHENSTAFF,'name'=>'kitchenstaff']);
    }
}
