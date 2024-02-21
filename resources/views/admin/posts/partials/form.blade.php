<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el nombre de la publicación',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug de la publicación', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wapper">
            @isset($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}">
            @else
                <img id="picture" src="{{ Storage::url('surco.jpg') }}">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en la publicación') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <p>
            Una imagen vale más que mil palabras, y si, además, conseguimos que esa imagen sea capaz de reforzar los
            mensajes que queremos transmitir de una forma única y original, no solo conseguiremos explicar de manera
            visual la publicación, sino que además, conseguiremos reforzar la toma de decisiones en nuestros de negocio.
        </p>
    </div>
</div>


<div class="form-group">
    {!! Form::label('extract', 'Resumen') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    <!-- <textarea name="extract" class="form-control" id="extract" cols="30" rows="10" style="height: 350px !important;"></textarea> -->
    @error('extract')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('body', 'Detalle') !!}
    <!-- <textarea name="body" class="form-control" id="body" cols="30" rows="10" style="height: 350px !important;"></textarea> -->
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
