<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
public function authorize()
{
return true; // allow all users to use this request
}

public function rules()
{
   return [ 
  'title' => 'required|max:255',
  'body' => 'required',
  'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // add validation rules for the image
  ];
}

public function store(CreatePostRequest $request)
{
   $data = $request->validated();

  // Create new blog post using $data['title'] and $data['body']

$imagePath = $request->file('image')->store('public/images'); // store the image in the "public/images" folder

$post = new Post;
$post->title = $data['title'];
$post->body = $data['body'];
$post->image = str_replace('public/', '', $imagePath); // set the image path to the post's image field
$post->user_id = auth()->user()->id;
$post->save();

return redirect()->route('admin.posts.index')->with('message', 'Your post has been updated!');

}
}
