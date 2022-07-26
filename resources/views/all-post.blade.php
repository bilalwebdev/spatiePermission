@extends('layouts.post-layout')
@section('content')
<div class="mx-20 ">
    <div class="w-full  mt-6 px-6 py-4  overflow-hidden sm:rounded-lg">
        <div class="flex justify-between flex-row mb-2">
            <div class="font-bold text-xl">
                All Posts
            </div>
            @role('writer|admin')
            <a href="{{ route('post') }}"><button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Add New</button></a>
            @endrole
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        @foreach ($posts as $post)
        <div class="w-full  mt-2 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-between flex-row mt-4">
            <div>
                {{ $post->body }}
            </div>
            @can('edit post')
            <div>
                <a href="{{ route('edit-post', ['id' => $post->id]) }}"><button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Edit</button></a>
            </div>
            @endcan
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
