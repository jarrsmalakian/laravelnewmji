<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,gif|max2048',
        ]);

        $imagePath = request('image')->store('public/images');

        $post = new Posts;
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->image = str_replace('public/','', $imagePath);
        $post->user_id = auth()->user()->id;
        $post->save();
        
        return redirect()->route('admin.posts.index')->with('message', 'Berita sudah di buat');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,gif|max2048',
        ]);

        $post->title = $request->title;
        $post->body = $request->body;
if($request->hasFile('image')){
    // hapus gambar lama
    if($post->image && Storage::exists($post->image)) {
        Storagae::delet(post->image);
    }

    //store gambar baru dan set ke post image
    $imagePath = $request->file('image')->store('public/images');
    $post->image = str_replace('public/','', $imagePath); //set the image path to the posts image field
}

    $post->save();
        
        return redirect()->route('admin.posts.index')->with('message', 'Berita sudah di ubah');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('admin.posts.index')->with('message', 'Berita sudah di hapus');
    }
}
