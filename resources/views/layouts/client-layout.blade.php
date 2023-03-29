<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@stack('page_title')</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" id="bootstrap-css" media="all">
    <link href="{{ asset('css/scroll-hider.css') }}" rel="stylesheet" id="bootstrap-css" media="all">
    <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet" id="bootstrap-css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    @stack('music-player')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo_jauleji3.png') }}">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none;
        }

        .music-list ul::-webkit-scrollbar {
            width: 0px;
        }

        .playing {
            background: rgb(165, 49, 243);
            border-radius: 13px;
            color: white !important;
        }

        .playing span {
            color: white !important;
        }
    </style>

    <script>
        // themeButton
        let themeButton = document.querySelector('html');

        // setTheme
        if (localStorage.getItem('theme') == null) {
            themeButton.classList.add("dark");
            localStorage.setItem('theme', 'dark');
        } else if (localStorage.getItem('theme') == 'dark') {
            themeButton.classList.add("dark");
        }

        function check() {
            if (themeButton.classList.contains('dark')) {
                themeButton.classList.remove("dark");
                localStorage.setItem('theme', 'white');
            } else {
                themeButton.classList.add("dark");
                localStorage.setItem('theme', 'dark');
            }
        };
    </script>
</head>

<body x-data class="overflow-hidden">

    <div x-data="{ openSideMenu: false }" class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': openSideMenu }">
        {{-- Navbar --}}
        <livewire:partials.client-navbar />

        <div class="flex flex-col flex-1">
            {{-- Header --}}
            <livewire:partials.client-header />

            <main class="scrollbar h-full px-20 lg:px-10 md:px-8 sm:px-4 xs:px-2 xsm:px-0 pb-16 overflow-y-auto scroll">
                <!-- Remove everything INSIDE this div to a really blank page -->
                <div class="container px-6 mx-auto grid">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @livewireScripts

    @stack('list-or-grid')
    @stack('show-readmore')
    @stack('music-script')

    <script>
        function download(url, name = 'file', id) {

            const a = document.createElement('a')
            a.href = url
            // a.download = url.split('/').pop()
            a.download = name
            document.body.appendChild(a)
            a.click()
            document.body.removeChild(a)

            Livewire.emit('downloaded', id);
        };

        Livewire.on('created', function(e) {
            Swal.fire({
                title: e.title,
                icon: e.icon,
                iconColor: e.iconColor,
                timer: 1000,
                toast: true,
                position: 'top-right',
                // timerProgressBar: true,
                showConfirmButton: false,
            });
        });
    </script>
    <script src="{{ asset('js/flowbite.js') }}" defer></script>
</body>

</html>
