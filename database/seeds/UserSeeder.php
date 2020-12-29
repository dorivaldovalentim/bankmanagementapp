<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new App\User())->create([
            'name' => 'Dorivaldo Valentim',
            'email' => 'dorivaldovalentim@gmail.com',
            'password' => Hash::make('qwerty')
        ]);
    }
}
