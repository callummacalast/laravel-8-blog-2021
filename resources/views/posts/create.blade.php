<x-layout>
    <section class="px-6 py-8">
        <h1 class="m-auto mb-10 text-xl max-w-md font-bold">Publish New Post</h1>
        <div class="border shadow-xl p-2 rounded max-w-md m-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="p-2">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />





                <div class="mb-6">
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />
                </div>

                <button type="submit" class="text-white bg-blue-500 py-3 px-12 rounded shadow hover:bg-blue-400">Publish</button>

            </form>
        </div>

    </section>
</x-layout>