<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comentarios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        $this->authorize('published', $post);

        $similares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();

        $comentarios = DB::select('select  comentarios.post_id,comentarios.user_id,
                                           comentarios.comentario,comentarios.created_at,
                                           users.name from blog.comentarios
                                     inner join blog.users on  comentarios.user_id = users.id
                                     where comentarios.post_id= ?  order by comentarios.id desc', [$post->id]);

        return view('posts.show', compact('post', 'similares', 'comentarios'));
    }
    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(8);

        $etiquetas =  Tag::all();
        /*        $tags = DB::select('select distinct tags.* from blog.tags
                            inner join blog.post_tag on post_tag.tag_id = tags.id
                            inner join blog.posts on  post_tag.post_id = posts.id
                            inner join blog.categories on posts.category_id  = categories.id
                            where categories.id = ?',[$category->id]);   */

        return view('posts.category', compact('posts', 'category', 'etiquetas'));
    }
    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
        return view('posts.tag', compact('posts', 'tag'));
    }

    public function comment(Request $request)
    {
        $guardar = request()->except('_token');
        Comentarios::create([
            'post_id' => $request->post_id,
            'user_id' => $request->user_id,
            'comentario' => $request->comentario,
            'status' => "1"
        ]);

        $post = Post::where('id', $request->post_id)->get();
        /* $this->authorize('published',$post);   */

        $similares = Post::where('category_id', $post[0]->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post[0]->id)
            ->latest('id')
            ->take(4)
            ->get();

        $comentarios = DB::select('select  comentarios.post_id,comentarios.user_id,
                                    comentarios.comentario,comentarios.created_at,
                                    users.name from blog.comentarios
                                    inner join blog.users on  comentarios.user_id = users.id
                                    where comentarios.post_id= ? order by comentarios.id desc', [$post[0]->id]);


        $post = $post[0];
        return view('posts.show', compact('post', 'similares', 'comentarios'));
    }
}
