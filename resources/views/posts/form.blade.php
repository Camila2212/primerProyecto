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
<br>
