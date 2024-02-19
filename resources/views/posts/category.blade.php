<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-2">
        <div class="px-8  py-2  justify-center">
            @foreach ($etiquetas as $tag)
            <a href="{{ route('posts.tag',$tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2" >
                {{ $tag->name }}
            </a>
        @endforeach   

        <h1 class="uppercase text-center text-3xl font-bold mt-5">
                Categoría: {{ $category->name }}
        </h1>
        @foreach ($posts as $post)
            <x-card-post :post="$post" />
        @endforeach
    </div>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-app-layout>