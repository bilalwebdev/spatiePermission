@extends('layouts.post-layout')
@section('content')
<div class="mx-20 ">
    <div class="w-full  mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="card-header">
            <form action="{{ route('add-post') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="" class="block font-medium text-sm text-gray-700">Title</label>
                    <input type="text" name="title"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                </div>
                <div class="mb-2">
                    <label for="" class="block font-medium text-sm text-gray-700">Body</label>
                    <textarea type="text" name="body"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" rows="7"></textarea>
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection


