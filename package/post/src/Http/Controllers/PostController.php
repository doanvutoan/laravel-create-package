<?php
namespace Mallcode\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use Mallcode\Post\Models\Post;
use Mallcode\Post\Traits\LoadDataTrait;

class PostController extends Controller
{
    use LoadDataTrait;
    public function index() {
        $posts = Post::all();

        echo $this->DemoTrait();

        return view("post::index",compact('posts'));
    }
}
