<div>
    <div class="py-2">
        {{-- <input class="w-full" wire:model="search" type="search" placeholder="Busca una publicación ...">         --}}
        <x-jet-input class="w-full" type="text" wire:model="search" placeholder="Busca una publicación ..."/>
    </div>
    @if ($posts->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                    style="background-image: url(@if($post->image) {{ Storage::url($post->image->url) }} @else {{ Storage::url('public/surco.png') }} @endif);">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag',$tag) }}" class="inline-block px-3 h-6 text-white rounded-full" style="background-color: {{ $tag->color }}">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2" style="text-shadow: 1px 1px 2px black;" >
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <div>
            0 publicaciones encontradas
        </div>        
    @endif
</div>
