<x-app-layout>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Edit Post</div>

<div class="panel-body">
<form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('patch')
<div class="form-group">
<label for="title">Title</label>
<input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
</div>
<div class="form-group">
<label for="body">Body</label>
<textarea class="form-control" name="body" id="body" rows="5">{{ $post->body }}</textarea>
</div>
<div class="form-group">
<label for="image">Image</label>
<input type="file" class="form-control-file" name="image" id="image">
</div>

<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>