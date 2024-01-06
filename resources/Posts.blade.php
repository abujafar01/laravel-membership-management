<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Laravel Membershiop Management</title>

    </head>
    <body>
       <h2>Posts</h2>
       <hr>
           {{-- <h4>Name:{{  $name }}<h4>
            <h5>Age: {{ $age }}</h5> --}}


            {{-- <h4>Name: {{ $user->name }}<h4>
            <h5>Age: {{ $user->age }}</h5>
            <h6>Age: {{ $user->gender }}</h6> --}}

            @foreach ($posts as $post)
                <h2>{{ $post->title }}<span>{{ $post->total_view }}</span><h2>
                <div>
                    {!! $post->description !!}
                </div>
                <a href="{{ route('posts.show', $post->id) }}">View More......</a>
            @endforeach
    </body>
</html>
