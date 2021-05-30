<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
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
        $roles = Role::where('id', 2)->get();
        User::all()->each(function ($user) use ($roles){
            $user->roles()->attach(
                $roles[0]->id
            );
        });
    }
}
