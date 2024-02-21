<x-app-layout>
    <div>
        <div class="container py-2">
            <a href="{{ route('posts.category',$post->category->slug) }}" class="inline-block px-3 h-6 text-white rounded-full text-base" style="background-color:gray">
                {{ $post->category->name }}
            </a>
        </div>
        <div class="container py-2">
            <h1 class="text-4xl font-bold text-gray-600">
                {{ $post->name }}
            </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>
        <div class="btn-sm text-gray">
            <span class="mr-2">
               Publicado por <strong>{{ $post->user->name }}</strong>
            </span>
            <span style ="font-size: small">{{ $post->created_at->diffForHumans() }}</span>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="md:col-span-2">
                <figure>
                    @if($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url('public/surco.png') }}">
                    @endif

                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
                <p>
                    <div class="card">
                          <div class="card-header">
                                <h1>DEJANOS TU CALIFICACIÓN</h1>
                            </div>
                            <div class="card-body">
                                <div class="bt-4">
                                    <i class="fas fa-star"  style="color:orange"></i>
                                    <i class="fas fa-star"  style="color:orange"></i>
                                    <i class="fas fa-star-half" style="color:orange"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                   {{--  <span class="small">({{ $rating }})</span> --}}
                                </div>

                            </div>
                        </div>

                    {{-- <div class="overlay" style="position: relative;top: -22px;"> --}}

        {{--                 @while($rating>0)
                            @if($rating >0.5)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="fas fa-star-half"></i>
                            @endif
                            @php $rating--; @endphp
                        @endwhile
                  </div>
         --}}
                </p>



            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold  text-gray-600 mb-4">Más en {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                @if($similar->image)
                                    <img class="w-36 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="" >
                                @else
                                    <img class="w-36 object-cover object-center" src="{{ Storage::url('public/surco.png') }}" alt="" >
                                @endif

                                <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                            </a>
                        </li>

                    @endforeach
                </ul>
            </aside>

            {{-- comentarios --}}
             <div class="containerc md:col-span-2 justify-content-center border-left border-right">
                <div  class="inline-block pt-3 pb-2 ml-2  color">
                    <h1 class="inline-flex text-2xl font-bold text-gray-600">Comentarios</h1>
                     @isset(auth()->user()->id)
                        <div class="inline-block mt-4 color">

                            <form action="{{ route('comentar') }}" method="POST"  enctype="multipart/form-data" class="flex">
                                @csrf
                                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />
                                <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}" />
                                <input type="text" id="comentario" name="comentario" placeholder="Agrega un comentario" class="inline-block form-control addtxt mr-2 text-left" required>

                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Comentar</button>
                            </form>

                        </div>
                    @endisset

                </div>

                 @foreach ($comentarios as $comentario)
                    <div class="d-flex justify-content-center ml-2 mb-3">
                        <div class="second py-2 px-2 pb-4">
                            <div class="py-1 pt-2">
                                <div class="flex">
                                    <img src="{{ Storage::url('public/quote.png') }}" width="20" height="15" class="mr-2">
                                    <strong>{{ $comentario->name }}</strong>
                                    <div class="ml-6">
                                        <span style="font-size: small">{{ $comentario->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <span class="text1">
                                {{ $comentario->comentario }}
                            </span>

                        </div>
                    </div>
                @endforeach

             </div>
            {{-- fin de comentarios --}}
        </div>


        </div>
    </div>
    </x-app-layout>
