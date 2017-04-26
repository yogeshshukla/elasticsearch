<?php
use Illuminate\Support\Facades\Input;
use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', ['as' => 'search', 'uses' => function() {

  // Check if user has sent a search query
  if($query = Input::get('query', false)) {
    // Use the Elasticquent search method to search ElasticSearch
    $posts = Post::search($query);
    echo $posts->count();
    //exit;
  } else {
  	// Show all posts if no query is set
    $posts = Post::paginate(1000);
    //echo $posts->count();
    //exit; 
  }

  return View::make('welcome', compact('posts'));

}]);

