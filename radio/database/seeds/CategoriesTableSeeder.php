<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        self::seedCategory();
  		$this->command->info('Tabla Categories inicializada con datos!');


    }

     private function seedCategory(){
    	DB::table('categories')->delete();
    	Category::create(array('descripcion'=>'C1', 'slug'=>'c1'));
    	Category::create(array('descripcion'=>'C2', 'slug'=>'c2'));
    }
}
