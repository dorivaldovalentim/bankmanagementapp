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
        (new App\Models\Bank())->create([
            'name' => 'Atlantico',
            'color' => 'linear-gradient(rgba(0, 0,0, .5), rgba(0, 0, 0, .5)), url("images/banks/atlantico.png")'
        ]);

        (new App\Models\Bank())->create([
            'name' => 'BAI',
            'color' => 'linear-gradient(rgba(0, 0,0, .5), rgba(0, 0, 0, .5)), url("images/banks/bai.png")'
        ]);

        (new App\Models\Bank())->create([
            'name' => 'SOL',
            'color' => 'linear-gradient(rgba(0, 0,0, .5), rgba(0, 0, 0, .5)), url("images/banks/sol.jpeg")'
        ]);
    }
}
