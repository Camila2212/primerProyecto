<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-{{ $title ?? ''}}</title> 
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}"> 
</head>
<body>

   <x-layouts.navigation />

    @if (session('mensaje'))   
        <div>{{session('mensaje')}}</div>
    @endif
   

   {{ $slot}}
   
</body>
</html>