@extends('layouts.app')
     @section('meta-description','Blog meta description')
         
    @section('title','Blog')
        
    @section('content')

        
        <h1>Blog</h1>
        <a href={{ route('posts.create')}}>Create new post</a>
        @foreach ($posts as $item)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href={{ route('posts.show', $item)}}>
                    {{ $item->title}}
                </a>
            </h2> &nbsp;
            <a href={{ route('posts.edit', $item)}}>Edit</a>
        </div>     
        @endforeach
    @endsection

{{-- <x-layouts.app title="Blog" meta-description="Blog meta description">
   
    <a href="/blog/{{$item->id}}">
                {{ $item->title}}
            </a>

    <h1>Blog</h1>    
    Este es el Blog
</x-layouts.app>
     --}}