<?php

namespace App\Http\Controllers;
use App\Events\PostEvent;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PhpParser\Node\Stmt\Return_;


class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function notificationsx(){
        //$postNotifications = auth()->user()->unreadNotifications;
        return view('post.notificationsx');
        //,compact('postNotifications')
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $post = Post::create($data);
        return 'ok';
        
        // auth()->user()->notify(new PostNotification($post));

        // User::all()
        //     ->except($post->user_id)
        //     ->each(function(User $user) use ($post){
        //         $user->notify(new PostNotification($post));
        //     });
        //event(new PostEvent($post));

        //return redirect()->back()->with('message', 'Post created sucessfully');
        
    }
    public function markNotification(Request $request){
        auth()->user()->unreadNotifications
                ->when($request->input('id'),function($query) use ($request){
                    return $query->where('id', $request->input('id'));
                })->markAsRead();
        return response()->noContent();
    }

    
}
