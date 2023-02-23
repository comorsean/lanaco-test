<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    public function index() {

        $posts = null;
        $response = Http::withHeaders([
            'Cookie' => env('WORDPRESS_COOKIE')
        ])->get('http://lanaco-test.42web.io/wp-json/wp/v2/posts');

        $blogs = [];

        if($response->successful()){
            $posts = json_decode($response);
            
            foreach ($posts as $post) {
                $blogs[] = [
                    'id' => $post->id,
                    'title' => $post->title,
                    'excerpt' => $post->excerpt,
                    'link' => $post->link
                ];
            }
        }

        //dd($blogs);
        return view('homepage', ['blogs' => $blogs]);
    }

    public function delete($postId) {
        Http::withHeaders([
            'Cookie' => env('WORDPRESS_COOKIE'),
            'X-HTTP-Method-Override' => 'DELETE'
        ])->post('http://lanaco-test.42web.io/wp-json/wp/v2/posts/' . $postId);
        //dd($response);
        return to_route('homepage');
    }
 
}
