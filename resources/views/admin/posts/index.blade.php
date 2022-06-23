@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>All Posts</h1>
    <div><a href="{{route('admin.posts.create')}}" class="btn btn-primary text-white">Add Post</a></div>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td><img width="150px" src="{{ $post->cover_image }}" alt="" srcset=""></td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary text-white">View</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>

                @empty 
                <tr>
                    <td scope="row">Create your first post</td>
                </tr>
                @endforelse
            </tbody>
    </table>
    
</div>
@endsection