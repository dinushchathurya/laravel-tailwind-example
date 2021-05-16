<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="md:flex container border p-4">
            <div class="md:flex-shrink-0">
                <img class="rounded-lg md:w-56" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Woman paying for a purchase">
            </div>
            <div class="mt-4 md:mt-0 md:ml-6">
                <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Marketing</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Scout APM</a>
                <p class="mt-2 text-gray-600">Use Scout APM for better performance tracking.</p>
            </div>
        </div>
    </body>
</html>
