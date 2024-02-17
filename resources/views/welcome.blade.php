<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WhatsApp Web</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <style>
                /* For WebKit browsers (Chrome, Safari) */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background-color: #fff;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #D3D3D3;
            border-radius: 5px;
        }

        /* For Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: #D3D3D3;
        }

        /* For Microsoft Edge and Internet Explorer */
        body {
            scrollbar-face-color: #D3D3D3;
            scrollbar-track-color: #D3D3D3;
        }

    </style>
    <body class="antialiased flex h-screen">
        <livewire:chat.chat-list />
        <livewire:chat.chat-window />

        
    </body>
</html>