<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cat= new Categories;
        $Cat->name= "Economica";
        $Cat->description="Esta categoria muestra articulos economicos";
        $Cat->save();

        Categories::create(array(
            'name'=>'Social',
            'description'=>'Esta categoria muestra articulos sociales'
        ));
        Categories::create(array(
            'name'=>'Deportes',
            'description'=>'Esta categoria muestra articulos deportivos'
        ));
    }
}
