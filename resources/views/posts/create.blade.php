<x-layouts.app 
     title="Crear nuevo post" 
     meta-description="Formulario para crear un nuevo blog post"
     >

    <h1>Create new post</h1>
        
    {{-- @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}
    <form action="{{ route('posts.store')}}" method="POST">
        @csrf
        <label for="" >
            Title <br>
            <input type="text" name="title" value={{ old('title')}}>
            <br>
            @error('title')
                <small style="color:rgb(255, 0, 0)">{{ $message }}</small>
            @enderror
        </label>
        <br>

        <label for="">
            Body <br>
            <textarea name="body" >{{old('body')}}</textarea>
            <br>
            @error('body')
                <small style="color:rgb(255, 0, 0)">{{ $message }}</small>
             @enderror
             <br>
        </label>
        <br>
            <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{ route ('posts.index')}}">Regresar</a>   


</x-layouts.app>