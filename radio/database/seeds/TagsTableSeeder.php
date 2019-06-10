<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

       self::seedTags();
  		$this->command->info('Tabla tags inicializada con datos!');
    }

     private function seedTags(){
    	DB::table('tags')->delete();
    	Tag::create(array('descripcion'=>'T1', 'slug'=>'t1'));
    	Tag::create(array('descripcion'=>'T2', 'slug'=>'t2'));
    }
}
