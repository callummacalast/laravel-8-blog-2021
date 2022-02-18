@props(['heading'])
<section class="px-6 py-8 max-w-4xl mx-auto">
    <h1 class="mb-6 pb-3 text-xl font-bold border-b">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-3">Links</h4>
            <ul>
                <li class="mb-4">
                    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-white mb-3 bg-blue-400 p-2 rounded' : '' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-white bg-blue-400 p-2 rounded' : '' }}">New Post</a>
                </li>
                <li class="mt-2 mb-2">
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-white bg-blue-400 p-2 rounded' : '' }}">All Posts</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="border shadow-xl p-2 rounded  m-auto">
                {{ $slot }}

            </div>
        </main>
    </div>


</section>