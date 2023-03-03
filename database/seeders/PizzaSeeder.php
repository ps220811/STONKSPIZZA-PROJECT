<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Abdullah Murzaev',
            'email' => 'zib@summa.nl',
            'password'=>'zibbie48kar'
        ]);

        DB::table('pizzas')->insert([

            'name' => 'Margherita',
            'price' => '10',
            'description' => 'Kaas en pepers met saus naar keuze!',
        ]);
        DB::table('pizzas')->insert([
            'name' => 'Sakami',
            'price' => '12',
            'description' => 'Kaas met tomatensaus en salami (Haram). NIET HALAL. PAS OP.',
        ]);
        DB::table('pizzas')->insert([

            'name' => 'Doner',
            'price' => '14',
            'description' => 'mss Halal',
        ]);
        DB::table('pizzas')->insert([

            'name' => 'Naakt',
            'price' => '8',
            'description' => 'Alleen tomatensaus soms kaas',
        ]);

    }
}
