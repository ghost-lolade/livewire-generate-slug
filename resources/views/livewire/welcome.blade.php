<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Implement Slug in Laravel Livewire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    @livewireStyles
</head>

<body>
    <div class="container mt-3">
        @if (session()->has('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
            
        @endif
        @livewire('blog-component')
    </div>
    @livewireScripts
    
</body>
</html>