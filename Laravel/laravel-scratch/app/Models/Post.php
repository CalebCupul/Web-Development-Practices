<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post {

    public static function all(){

        // Lee todo el directorio de posts y se los pasa como array
        // a la variable $files
        $files = File::files(resource_path("posts/"));

        // array_map manda cada elemento del array a una funcion
        // y devuelve un nuevo array con nuevos valores
        // getContents extrae el contenido de cada elemento ($file)

        return array_map(fn($file) => $file->getContents(), $files);


        // return array_map(function ($file){
        //     
        //     return $file->getContents();
        // }, $files);

        

    }
    
    public static function find($slug){
        // Busca el nombre dentro de la carpeta posts
        // Si no lo encuentra, devuelve a la home page
        if (! file_exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        // la funcion cache remember guarda la pagina en el
        // cache para no consultar a la carpeta cada vez que
        // se realice la peticion
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

    }

}
