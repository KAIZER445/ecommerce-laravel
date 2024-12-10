<?php

namespace Database\Seeders;

use App\Models\AccountType\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountTypeData=[
            [
                'types' => 'admin'
            ],
            [
                'types' => 'vendor'
            ],
            [
                'types' => 'customer'
            ],
        ];

        foreach ($accountTypeData as $data){
            $total = AccountType::where('types',$data['types'])->count();
            if($total==0){
                AccountType::create($data);
            }
        }
    }
}
