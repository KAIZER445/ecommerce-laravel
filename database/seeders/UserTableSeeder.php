<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData=[
            [
                'account_type_id'=>1,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('admin123'),
                'gender'=>'male'
            ],
            [
                'account_type_id'=>2,
                'name'=>'vendor',
                'email'=>'vendor@gmail.com',
                'password'=> Hash::make('vendor123'),
                'gender'=>'male'
            ],
            [
                'account_type_id'=>3,
                'name'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=> Hash::make('customer123'),
                'gender'=>'male'
            ],
        ];

        foreach ($userData as $user){
            $totalUser = User::where('email',$user['email'])->count();
            if ($totalUser == 0) {
                User::create($user);
            }
        }
    }
}
