<x-app-layout>
<x-slot name="header">

</x-slot> <br>

<div class="container">
<div class="row">
<div class="col-md-12">
@if(session()->has('message'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="bg-red-500 text-white py-2 px-4 rounded">
{{ session('message') }}
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
<div class="row">
<div class="col-md-10">
Posts
</div>
<div class="col-md-2">
<a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-sm">Create New Post</a>
</div>
</div>
</div>

<div class="panel-body">
<table class="table">
<thead>
<tr>
<th>Title</th>
<th>Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>{{ $post->title }}</td>
<td>{{ $post->created_at }}</td>
<td>
<a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
<form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" style="display: inline-block">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>