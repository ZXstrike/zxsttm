<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ $title ?? 'ZXSTTM' }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
            user-select: none;
        }
        body::-webkit-scrollbar {
            display: none;
        }
        div::-webkit-scrollbar {
            display: none;
        }
        .content-container {
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .project-card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .mainsect {
            mask-image: linear-gradient(rgba(20,20,20,1), rgba(0,0,0,0));
            -webkit-mask-image: linear-gradient(rgba(20,20,20,1) 85%, rgba(20,20,20,0));
        }
        .frontsect {
            filter: drop-shadow(0px 0px 5px #FFFFFF);
            -webkit-filter: drop-shadow(0px 0px 5px #FFFFFF);
        }
    </style>
</head>
<body class="flex flex-col w-screen bg-zinc-900 overflow-x-hidden" >
    {{ $slot }}

    <footer class="foot flex flex-col items-center py-6">
        <hr class="h-[1px] w-[90%] my-5 bg-white border-0 ">
        <p class="text-sm text-white">© 2024 ZXSTTM. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/func/scrollManager.js') }}" defer></script>
</body>
</html>
