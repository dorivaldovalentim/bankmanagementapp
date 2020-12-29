<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new App\Models\Bank())->create(['name' => 'BAI', 'color' => 'blue']);
        (new App\Models\Bank())->create(['name' => 'SOL', 'color' => 'yellow']);
    }
}
