<x-app-layout>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 col-md-offset-2">
@if(session()->has('message'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="bg-green-500 text-white py-2 px-4 rounded">
{{ session('message') }}
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">Create New Post</div>
<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
<label for="title" class="col-md-4 control-label">Title</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

@if ($errors->has('title'))
<span class="help-block">
<strong>{{ $errors->first('title') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group">
<label for="image">Image</label>
<input type="file" class="form-control-file" id="image" name="image">
</div>


<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
<label for="body" class="col-md-4 control-label">Body</label>

<div class="col-md-6">
<textarea id="body" class="form-control" name="body" rows="5" required>{{ old('body') }}</textarea>

@if ($errors->has('body'))
<span class="help-block">
<strong>{{ $errors->first('body') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Create
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>