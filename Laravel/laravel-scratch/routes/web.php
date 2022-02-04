<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

   
    $document = YamlFrontMatter::parseFile(resource_path('posts/my-fourth-post.html'));
    
    // $document = LibYamlFrontMatterParser::parseFile(
    //     resource_path('posts/my-fourth-post.html')
    // );

    ddd($document);
    
    // ddd($document);
    
    // return view('posts', [
    //     'posts' => Post::all()
    // ]);

    
});

Route::get('posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::find($slug)
    ]);

    // Restricciones (expresiones regulares)
})->where('post', '[A-z_\-]+');
