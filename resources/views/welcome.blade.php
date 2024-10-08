<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
    @livewireStyles
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ route('web.perfil') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Profile') }}</a>
                {{--<a href="{{ route('chat.directo') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                   target="_blank">Chat Directo</a>--}}
                <a href="{{ url('/dashboard') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">{{ __('Log in') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            {{--<svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                      fill="#FF2D20"/>
            </svg>--}}
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="450px" height="250px" viewBox="0 0 450 250" enable-background="new 0 0 450 250" xml:space="preserve">  <image id="image0" width="450" height="250" x="0" y="0"
                                                                                                                                                                                                                                                               href="data:image/png;base64,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" />
</svg>

        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center gap-4">
                    <a href="https://morros-devops.xyz/" target="_blank"
                       class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        Desarrollado por Morros Devops
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                {{ mb_strtoupper(env('APP_NAME', 'Laravel')) }}
            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-center">
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
</body>
</html>
