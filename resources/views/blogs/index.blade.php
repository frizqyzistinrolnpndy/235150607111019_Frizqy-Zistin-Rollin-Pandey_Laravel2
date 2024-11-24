@extends('layouts.app')

@section('title', 'List Blogs')

@section('content')
    <h1>List Blogs</h1>
    @if(session('success'))
        <div style="color: green; text-align: center;">{{ session('success') }}</div>
    @endif

    @if($blogs->isEmpty())
        <div class="empty-message">
            Blogs is still empty 😔 <br>
            Try to <a href="{{ route('blogs.create') }}">make one</a>
        </div>
    @else
        @foreach($blogs as $blog)
            <div>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->description }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}">Read More</a>
                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    @endif
@endsection
