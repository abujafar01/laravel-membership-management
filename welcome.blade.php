<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Membershiop Management</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>
    </head>
    <body>
        <h2>Welcome to Laravel Membership Management project</h2>

        <a href=" {{ route('posts') }} ">Show Posts</a>
        <a href=" {{ route('posts.view') }} ">Show Posts with View</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <form action="{{ route('test-post') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="username"/>
            <input type="text" name="password" placeholder="password"/>
            <button type="submit">Submit</button>
        </form>
        <br>
        <br>
        <br>

        <form action="{{ route('test-post-update', 15) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="username" placeholder="username"/>
            <input type="text" name="password" placeholder="password"/>
            <button type="submit">Update</button>
        </form>
        <br>
        <br>
        <br>

        <form action="{{ route('test-post-delete', 15) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </body>
</html>
