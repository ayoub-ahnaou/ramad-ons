<x-layout>
    <main class="max-w-4xl mx-auto px-4 py-8 my-12">
        <form class="space-y-6 bg-white p-6 rounded-lg shadow" action="{{ route('publications.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">
                    Title
                </label>
                <input type="text" id="title" name="title"
                    class="text-gray-700 mt-1 block bg-gray-50 p-1 px-2 w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    placeholder="Enter publication title" value="{{ old('title') }}" />
                @error('title')
                    <p class="text-red-600 bg-red-50 px-1">Title field is required</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">
                    Content
                </label>
                <textarea id="content" rows="3" name="content"
                    class="text-gray-700 mt-1 block bg-gray-50 p-1 px-2 w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                    placeholder="Write your publication content...">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-600 bg-red-50 px-1">Description field is required</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">
                    Upload Images
                </label>
                <div
                    class="mt-1 flex justify-center px-6 bg-gray-50 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                strokeWidth={2} strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-gray-600 hover:text-gray-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                                <span>Upload a file</span>
                                <input id="file-upload" id="image" name="image" type="file" class="sr-only"
                                    multiple />
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
                @error('image')
                    <p class="text-red-600 bg-red-50 px-1">Something went wrong while uploading image, try again</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-4">
                <button type="reset"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700">
                    Publish
                </button>
            </div>
        </form>
    </main>
</x-layout>
