<x-layouts.app 
     :title="$post->title" 
     :meta-description="$post->body"
     >
     <h1>Formulario de edición</h1>
     
     <form action="{{ route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        <label for="" >
            Title <br>
            <input type="text" name="title" value={{ old('title', $post->title)}}>
            <br>
            @error('title')
                <small style="color:rgb(255, 0, 0)">{{ $message }}</small>
            @enderror
        </label>
        <br>

        <label for="">
            Body <br>
            <textarea name="body" >{{old('body', $post->body)}}</textarea>
            <br>
            @error('body')
                <small style="color:rgb(255, 0, 0)">{{ $message }}</small>
             @enderror
             <br>
        </label>
        
            <button type="submit">Enviar</button>
    </form>
        <a href="{{ route ('posts.index')}}">Regresar</a>   

</x-layouts.app>