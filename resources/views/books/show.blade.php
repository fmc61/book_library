@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold">Book Details</h1>
        <div>
            <a href="{{ route('books.edit', $book) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                Edit
            </a>
            <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <h3 class="text-gray-600 text-sm font-bold mb-2">Title</h3>
            <p class="text-gray-900">{{ $book->title }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-gray-600 text-sm font-bold mb-2">Author</h3>
            <p class="text-gray-900">{{ $book->author }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-gray-600 text-sm font-bold mb-2">Published Year</h3>
            <p class="text-gray-900">{{ $book->published_year }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-gray-600 text-sm font-bold mb-2">Description</h3>
            <p class="text-gray-900">{{ $book->description }}</p>
        </div>

        <div class="mt-6 pt-4 border-t">
            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this book?')">
                    Delete Book
                </button>
            </form>
        </div>
    </div>
@endsection 