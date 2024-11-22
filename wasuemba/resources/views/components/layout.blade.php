<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="{{ asset('img/logowasuemba.png') }}">
    <title>Website Desa Wasuemba</title>
</head>

<body class="h-full">
    <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-gray-100">
    <body class="h-full">
    ```
    -->
    <div class="min-h-full">
        <x-navbar></x-navbar>

        {{-- <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </header> --}}

        <main class="min-h-full">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        <div class="container">
            <footer class="row d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-6 d-flex align-items-center">
                    <img width="30" height="24" src="{{ asset('img/logo_bps.png') }}" alt="Logo Desa Wasuemba">
                    <img width="30" height="24" src="{{ asset('img/Logo_DESCAN_1_002.png') }}"
                        alt="Logo Desa Wasuemba">
                    <span class="mb-3 mb-md-0 text-body-secondary">© Tim Desa Cantik (Cinta Statistik) BPS Kabupaten Buton</span>
                </div>

                <ul class="nav col-md-6 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"
                                width="30" height="30"></i></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"
                                width="30" height="30"></i></a></li>
                </ul>
            </footer>
        </div>




    </div>

    <script src="{{ mix('resources/js/chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
