<?php

use Illuminate\Database\Seeder;

use App\Imagen;

class ImagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedImagen();
  		$this->command->info('Tabla Imagenes inicializada con datos!');
    }

     private function seedImagen(){

    	DB::table('Imagens')->delete();

    	Imagen::create(array('descripcion' => 'cabecera', 'url' => 'http://localhost:8000/public/img/ATaWKfzowR7zCjpt1lqCQsdYk2fMQstf5LeQVWdw.jpeg'));
    	Imagen::create(array('descripcion' => 'logounne', 'url' => 'http://localhost:8000/public/img/NOPe6JZM6HWveaJnWY6ljLcepj7RUKu76pfD9bks.jpeg'));
    	Imagen::create(array('descripcion' => 'faceicono', 'url' => 'http://localhost:8000/public/img/fhbaRcNlt4q2O3LJDM9p4atfKZsBxql2E52WiXDp.png'));
      Imagen::create(array('descripcion' => 'twittericono', 'url' => 'http://localhost:8000/public/img/07Iu0H9nBGo0qW6ttAeunmoo1sqBOZMVIu36yIpO.png'));
    	Imagen::create(array('descripcion' => 'instaicono', 'url' => 'http://localhost:8000/public/img/2TOlzwdlZJRDGQh9wOyARjddqZViIrypq7jDIXGi.png'));
    	
    	Imagen::create(array('descripcion' => 'youtubeicono', 'url' => 'http://localhost:8000/public/img/BfbqFeDU44424DDveCJc3P64j0CcpV0WKgqrMkn3.png'));
      Imagen::create(array('descripcion' => 'googleeicono', 'url' => 'http://localhost:8000/public/img/fItxuK6CQvOBGaSJApJpswSv9DvQwykk43ILAOPJ.png'));
      Imagen::create(array('descripcion' => 'latardenosunne', 'url' => 'http://localhost:8000/public/img/1A1SbHgqIG9ws99Qo1dYHStczwA0au6A5PCXmfs0.jpeg'));      
      
      Imagen::create(array('descripcion' => 'tecparaelcambio', 'url' => 'http://localhost:8000/public/img/yf5eY7cjyh0GFOFERadcbDV337j2GIOvnPq6nJYu.jpeg'));

      Imagen::create(array('descripcion' => 'alas6', 'url' => 'http://localhost:8000/public/img/dB4kSm9dYQ9NoOysRmiecJ70qGK1k5x13OGvhcIv.jpeg'));
      Imagen::create(array('descripcion' => 'cafecortado', 'url' => 'http://localhost:8000/public/img/Fc3qcn09OMgo61ei6LfcCD7d3iJxUdeKnaIXCfKQ.jpeg'));
      Imagen::create(array('descripcion' => 'ciudadinvisible', 'url' => 'http://localhost:8000/public/img/Op8PLwwZAvPQMTwoqWdZz0ETWltJnD5XY7IE0hte.jpeg'));
      Imagen::create(array('descripcion' => 'eraporabajo', 'url' => 'http://localhost:8000/public/img/ADwRN3olyd92IlA1JdnizgmAVe82yjRlgb7dlNkr.jpeg'));
      Imagen::create(array('descripcion' => 'partedeldia', 'url' => 'http://localhost:8000/public/img/BUnBJpViLD3qUc8vxBrVp9YWRLAt3mAW8dGIa647.jpeg'));
      Imagen::create(array('descripcion' => 'elclubdelasalud', 'url' => 'http://localhost:8000/public/img/jdOj7cddOIHyQGhETCIUSDl1vWChpHgHXs3Cfe8a.jpeg'));
      Imagen::create(array('descripcion' => 'vocesdelaAF', 'url' => 'http://localhost:8000/public/img/BAXgCOtup4L9n8Z3FmNvQRu7qkj9r5jAvvVZH8sI.jpeg'));
      Imagen::create(array('descripcion' => 'INTAconvoz', 'url' => 'http://localhost:8000/public/img/ny69K9L9R2bXJ5lEym6WSzbP8QUXxO5Hykk0H9qX.jpeg'));
      Imagen::create(array('descripcion' => 'larevista', 'url' => 'http://localhost:8000/public/img/WTmwEBzVzQuPM70bwvvtaIejf9E3Toeu7moD271r.jpeg'));
      Imagen::create(array('descripcion' => 'llegalatarde', 'url' => 'http://localhost:8000/public/img/vUHUzG1fY18qsyzkzAKZuicAysASos4LFRIjAxr5.jpeg'));
      Imagen::create(array('descripcion' => 'startup', 'url' => 'http://localhost:8000/public/img/Gwl7InCEIjUWLYJzFDFjGSp2ZslflVK6U9pm6scN.jpeg'));
      Imagen::create(array('descripcion' => 'raices', 'url' => 'http://localhost:8000/public/img/3RzHnWZUBgzrsgSwfkneuQvsn4a3FvcbuW6XNlI6.jpeg'));
      Imagen::create(array('descripcion' => 'todoslosvientos', 'url' => 'http://localhost:8000/public/img/2CnefnqJmbtuZV46k3b2TyJOHWSsQfIjl6JHvAsg.jpeg'));
      Imagen::create(array('descripcion' => 'santosypec', 'url' => 'http://localhost:8000/public/img/WcnCmOpaU7HOhkQz4AL0lgXxEPTXCCtlzAgu2wUe.jpeg'));
      Imagen::create(array('descripcion' => 'malditacostumbre', 'url' => 'http://localhost:8000/public/img/OYYKWm6oApnGosWQWsbovQ0UVGylEQ58KHrAjgZs.jpeg'));
      Imagen::create(array('descripcion' => 'folklore', 'url' => 'http://localhost:8000/public/img/T7PHr1xFLWpjTRSE38cdZrInN0AS9NsQIasgDqnC.jpeg'));
      Imagen::create(array('descripcion' => 'lahoradelAgro', 'url' => 'http://localhost:8000/public/img/JsFHP3NJnKImD9M2qYAwfmeer09jpTJ80u9xfv9Y.jpeg'));
      Imagen::create(array('descripcion' => 'desdeadentro', 'url' => 'http://localhost:8000/public/img/1D6yXTaqGp3CNRAjGLv5SK0zeMZaYWnp7yj2n6v6.jpeg'));
      Imagen::create(array('descripcion' => 'elbaul', 'url' => 'http://localhost:8000/public/img/8GOO5tqjSrMViwUQD4XwAb2l4t7cdLEzyIFBmW8B.jpeg'));

      Imagen::create(array('descripcion' => 'gifradio', 'url' => 'http://localhost:8000/public/img/fzxMDWWZjtN0aEaPAEw66DRgSTjuvxrOV1Cu9My2.gif'));

    }
}
