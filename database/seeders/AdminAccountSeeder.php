<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Admin',
            'lastName' =>   'Admin',
            'userName' => 'admin',
            'phonNumber' => '+963946193518',
            'fc_Token' => 'anflknflasnflksnfklansknflasfnaklnflanskfnlananfanfl',
            'gender' => 'Male',
            'dateOfBirth' => '04-07-2000',
            'acountState' => true,
            'lastOnline' => 'today',
            'email' => 'admin@gmail.com',
            'password' => '12345'
        ]);
    }
}
