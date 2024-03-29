@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nueva publicación</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Crear publicación', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 250px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@stop
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    {{-- CKEDITOR --}}
    <script src="{{ asset('vendor/ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }


        ClassicEditor
            .create(document.querySelector('#extract'),{
                // Placeholder
                placeholder: 'Ingresa tu texto aquí.',
                simpleUpload:{
                    uploadUrl: "{{ route('image.upload') }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#body'),{
                // Placeholder
                placeholder: 'Ingresa tu texto aquí.',
                simpleUpload:{
                    uploadUrl: "{{ route('image.upload') }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
