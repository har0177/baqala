<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

	@livewireStyles
	@stack('head')
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
@include('layouts.navigation')

<!-- Page Heading -->
	@if (isset($header))
		<header class="bg-white shadow">
			<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
				{{ $header }}
			</div>
		</header>
@endif
<!-- Page sdsdsContent -->
	<main>
		{{ $slot }}
	</main>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script>
	$(document).ready(function () {
		ui.init()
		$('[data-popup="tooltip"]').tooltip()
	})

	let delay = (function () {
		let timer = 0
		return function (callback, ms) {
			clearTimeout(timer)
			timer = setTimeout(callback, ms)
		}
	})()
</script>
@stack('footer')
@livewireScripts

</html>
