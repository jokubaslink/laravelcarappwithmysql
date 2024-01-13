<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&displahttp://127.0.0.1:8000/carsy=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')

    <!-- Styles -->

</head>

<body class="max-w-[1400px] m-auto antialiased min-h-screen">
    <div class="w-full min-h-screen z-0">
        <nav class="p-8 border-b-2 border-gray-800 flex items-center justify-between">
            <a href="/">
                <h3 class="md:text-start text-3xl font-medium">Car App</h3>
            </a>
            <ul class="flex gap-4 text-lg font-light uppercase">
                <li class="hover:border-b-2 hover:border-yellow-600">
                    <a href="/about">About us</a>
                </li>
                <li class="hover:border-b-2 hover:border-yellow-600">
                    <a href="/cars">Cars</a>
                </li>
            </ul>
        </nav>

        @yield('content')

        <footer class="bg-white  max-w-[1400px] w-full p-8 border-t-2 border-gray-800 flex items-center">
            <p class="text-lg font-light w-full"> &#169; Car App </p>
        </footer>

    </div>
</body>

</html>
