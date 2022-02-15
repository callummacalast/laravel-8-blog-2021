<x-layout>
    <section class="px-6 py-8">
        <h1 class="m-auto mb-10 text-xl max-w-md font-bold">Publish New Post</h1>
        <div class="border shadow-xl p-2 rounded max-w-md m-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="p-2">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>

                    <input type="text" class="border border-gray-400 p-2 w-full rounded shadow-xl" type="text" name="title" id="title" value="{{ old('title') }}" required>

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">slug</label>

                    <input type="text" class="border border-gray-400 p-2 w-full rounded shadow-xl" type="text" name="slug" id="slug" value="{{ old('slug') }}" required>

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>

                    <input type="file" class=" p-2 w-full rounded   " type="text" name="thumbnail" id="thumbnail">

                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>




                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>

                    <textarea type="text" class="border border-gray-400 p-2 w-full rounded shadow-xl" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>

                    <textarea type="text" rows="5" class="border border-gray-400 p-2 w-full rounded shadow-xl" name="body" id="body" required>{{ old('body') }}</textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Select a category</label>

                    <select name="category_id" id="category_id">

                        @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="text-white bg-blue-500 py-3 px-12 rounded shadow hover:bg-blue-400">Publish</button>

            </form>
        </div>

    </section>
</x-layout>