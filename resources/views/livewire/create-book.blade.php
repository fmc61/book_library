<div>
    <div class="mb-6">
        <h1 class="text-3xl font-bold">Add New Book</h1>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        @if ($success)
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                Book created successfully!
            </div>
        @endif

        <form wire:submit.prevent="save">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                    Title
                </label>
                <input type="text" wire:model.debounce.300ms="title" id="title"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 text-sm font-bold mb-2">
                    Author
                </label>
                <input type="text" wire:model.debounce.300ms="author" id="author"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('author') border-red-500 @enderror">
                @error('author')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="published_year" class="block text-gray-700 text-sm font-bold mb-2">
                    Published Year
                </label>
                <input type="number" wire:model.debounce.300ms="published_year" id="published_year"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('published_year') border-red-500 @enderror">
                @error('published_year')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                    Description
                </label>
                <textarea wire:model.debounce.300ms="description" id="description" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"></textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline relative" wire:loading.class="opacity-75 cursor-not-allowed" wire:loading.attr="disabled">
                    <span wire:loading.remove>Create Book</span>
                    <span wire:loading>Creating...</span>
                </button>
                <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
            </div>
        </form>
    </div>

    @if($title)
        <div class="mt-4 p-4 bg-gray-100 rounded-lg">
            <p class="text-gray-700">Preview:</p>
            <h3 class="text-xl font-bold text-gray-800">{{ $title }}</h3>
        </div>
    @endif
</div>
