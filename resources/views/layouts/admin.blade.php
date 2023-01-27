<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Vite -->
    @vite(['resources/js/app.js'])

    <title>MyBlog - Admin</title>
</head>

<body>
    {{-- Header --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /Header --}}

    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-2 bg-dark text-light">
                <div class="continer">
                    <ul>
                        <li>ciao</li>
                        <li>ciao</li>
                        <li>ciao</li>
                        <li>ciao</li>
                        <li>ciao</li>
                    </ul>
                </div>
            </div>
            {{-- Sidebar --}}

            <div class="col-10">
                {{-- Main --}}
                @yield('content')
                {{-- /Main --}}
            </div>
        </div>
    </div>
</body>
