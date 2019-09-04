<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::create(array(
            'name'=>"Sigue subiendo el dolar",
            'content'=>"El dolar alcanzo los 3600 pesos colombianos",
            'user_id'=>2,
            'category_id'=>1
        ));
        Articles::create(array(
            'name'=>"El matrimonio del año",
            'content'=>"Higuita se vuelve a casar en cartagena con esperanza",
            'user_id'=>2,
            'category_id'=>2
        ));
    }
}
