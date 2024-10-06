<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/logo.webp" />
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">
    <title>@yield('title')</title>
    @yield('assets')
</head>

<body class="overflow-x-hidden">
    <style>.loadng{position:fixed;top:0;left:0;width:100%;height:100%;background:#fff;z-index:9999}.hidein{opacity:0;transition-property:opacity;transition-duration:.5s;transition-timing-function:ease-in-out;pointer-events:none}.loadng-text{position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;text-align:center;width:100%;height:100px;line-height:100px}.loadng-text span{display:inline-block;margin:0 5px;color:#000;font-family:Quattrocento Sans,sans-serif}.loadng-text span:nth-child(1){filter:blur(0px);animation:blur-text 1.5s 0s infinite linear alternate}.loadng-text span:nth-child(2){filter:blur(0px);animation:blur-text 1.5s .2s infinite linear alternate}.loadng-text span:nth-child(3){filter:blur(0px);animation:blur-text 1.5s .4s infinite linear alternate}.loadng-text span:nth-child(4){filter:blur(0px);animation:blur-text 1.5s .6s infinite linear alternate}.loadng-text span:nth-child(5){filter:blur(0px);animation:blur-text 1.5s .8s infinite linear alternate}.loadng-text span:nth-child(6){filter:blur(0px);animation:blur-text 1.5s 1s infinite linear alternate}.loadng-text span:nth-child(7){filter:blur(0px);animation:blur-text 1.5s 1.2s infinite linear alternate}@keyframes blur-text{0%{filter:blur(0px)}to{filter:blur(4px)}}</style>
    <header>
        <nav
            class="navbar top-0 bg-base-100 shadow-lg fixed z-10 rounded-b-3xl bg-gradient-to-bl from-[#FF9153] to-[#FFD143] border-gray-200">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/@lang('messages.lang')/about_us">@lang('messages.menu_about')</a></li>
                        <li><a href="/@lang('messages.lang')/contact_us">@lang('messages.menu_contact')</a></li>
                        <li>
                            <details>
                                <summary>@lang('messages.menu_shop')</summary>
                                <ul class="p-2">
                                    <li><a href="/@lang('messages.lang')/indoor">Indoor</a></li>
                                    <li><a href="/@lang('messages.lang')/outdoor">Outdoor</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a href="/@lang('messages.lang')/">@lang('messages.menu_home')</a></li>
                    </ul>
                </div>
                <a href="/@lang('messages.lang')" class="rounded-full btn btn-ghost text-xl">
                    <img src="/logo.webp" class="w-16 " alt="wpcpersian Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black"></span>
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/@lang('messages.lang')/about_us">@lang('messages.menu_about')</a></li>
                    <li><a href="/@lang('messages.lang')/contact_us">@lang('messages.menu_contact')</a></li>
                    <li>
                        <details>
                            <summary>@lang('messages.menu_shop')</summary>
                            <ul class="p-2">
                                <li><a href="/@lang('messages.lang')/indoor">Indoor</a></li>
                                <li><a href="/@lang('messages.lang')/outdoor">Outdoor</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href="/@lang('messages.lang')/">@lang('messages.menu_home')</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <div
                    class="dropdown dropdown-end flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                    <div tabindex="0" role="button" class="btn glass m-1 flex flex-row justify-center items-center">
                        <img src="@lang('messages.flag')" class="w-5 h-5 rounded-full" alt="">
                        <div>@lang('messages.language')</div>

                    </div>
                    <ul tabindex="0" class="dropdown-content z-50 menu mt-28 p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a href="/en" class="flex flex-row justify-center items-center">
                                <img src="/img/uk.webp" class="w-5 h-5 rounded-full" alt="">
                                <div>
                                    English
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/ar" class="flex flex-row justify-center items-center">
                                <img src="/img/ar.webp" class="w-5 h-5 rounded-full" alt="">
                                <div>
                                    العربیه
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/tr" class="flex flex-row justify-center items-center">
                                <img src="/img/tr.webp" class="w-5 h-5 rounded-full" alt="">
                                <div>
                                    Türkçe
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/ru" class="flex flex-row justify-center items-center">
                                <img src="/img/ru.webp" class="w-5 h-5 rounded-full" alt="">
                                <div>
                                    русский язык
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fa" class="flex flex-row justify-center items-center">
                                <img src="/img/fa.webp" class="w-5 h-5 rounded-full" alt="">
                                <div>
                                    فارسی
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div></div>
    <div id="cursor"></div>
    <div class="loadng" id="loader">
        <div class="loadng-text">
            <span class="loadng-text-words">L</span>
            <span class="loadng-text-words">O</span>
            <span class="loadng-text-words">A</span>
            <span class="loadng-text-words">D</span>
            <span class="loadng-text-words">I</span>
            <span class="loadng-text-words">N</span>
            <span class="loadng-text-words">G</span>
        </div>
    </div>
    <div class="w-full min-h-30 z-30"> </div>
    <div id="mute" class="fixed btn h-14 blue-background bg-white btn-outline hover:bg-white rounded-full right-5 mt-20">
        <svg id="sound-off" style="display: none;" width="24" height="24" xmlns="http://www.w3.org/2000/svg"
            fill-rule="evenodd" clip-rule="evenodd">
            <path
                d="M18 23l-9.305-5.998.835-.651 7.47 4.815v-10.65l1-.781v13.265zm0-15.794l5.384-4.206.616.788-23.384 18.264-.616-.788 5.46-4.264h-2.46v-10h5.691l9.309-6v6.206zm-11.26 8.794l1.26-.984v-7.016h-4v8h2.74zm10.26-8.013v-5.153l-8 5.157v6.244l8-6.248z" />
        </svg>
        <svg id="sound-on" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
            clip-rule="evenodd">
            <path
                d="M15 23l-9.309-6h-5.691v-10h5.691l9.309-6v22zm-9-15.009v8.018l8 5.157v-18.332l-8 5.157zm14.228-4.219c2.327 1.989 3.772 4.942 3.772 8.229 0 3.288-1.445 6.241-3.77 8.229l-.708-.708c2.136-1.791 3.478-4.501 3.478-7.522s-1.342-5.731-3.478-7.522l.706-.706zm-2.929 2.929c1.521 1.257 2.476 3.167 2.476 5.299 0 2.132-.955 4.042-2.476 5.299l-.706-.706c1.331-1.063 2.182-2.729 2.182-4.591 0-1.863-.851-3.529-2.184-4.593l.708-.708zm-12.299 1.299h-4v8h4v-8z" />
        </svg>
    </div>
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>

        function clickEffect(e) {
            var d = document.createElement("div");
            d.className = "clickEffect";
            d.style.top = e.clientY + "px"; d.style.left = e.clientX + "px";
            document.body.appendChild(d);
            d.addEventListener('animationend', function () { d.parentElement.removeChild(d); }.bind(this));
        }
        document.addEventListener('click', clickEffect);
        let whatisthedevice = navigator.userAgent
        const cursor = document.getElementById('cursor');
        if (whatisthedevice.match(/Android/i)
            || whatisthedevice.match(/webOS/i)
            || whatisthedevice.match(/iPhone/i)
            || whatisthedevice.match(/iPad/i)
            || whatisthedevice.match(/iPod/i)
            || whatisthedevice.match(/BlackBerry/i)
            || whatisthedevice.match(/Windows Phone/i)) {
            cursor.style.visibility = 'hidden'
        } else {
            const body = document.body;
            // Update circle position on mouse movement
            body.addEventListener('mousemove', (event) => {
                cursor.style.left = event.clientX + 'px';
                cursor.style.top = event.clientY + 'px';
            });
        }

        // toggling mute Button
        const svgOne = document.getElementById('sound-on')
        const svgTwo = document.getElementById('sound-off')

        function toggleSVGs(clickedSVG) {
            if (clickedSVG === svgOne) {
                svgOne.style.display = 'none';
                svgTwo.style.display = 'block';
            } else {
                svgOne.style.display = 'block';
                svgTwo.style.display = 'none';
            }
        }

        svgOne.addEventListener('click', () => toggleSVGs(svgOne));
        svgTwo.addEventListener('click', () => toggleSVGs(svgTwo));

        const loadingScreen = document.getElementById('loader');


        document.addEventListener('DOMContentLoaded', () => {
            loadingScreen.classList.add('hidein')
        })
    </script>
</body>

</html>