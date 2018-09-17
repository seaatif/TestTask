<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Laravel Test Task</title>
	
	<link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}"/>
	
	<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset("jsoneditor/jsoneditor.css")}}"/>
	<script type="application/javascript" src="{{ asset('jsoneditor/jsoneditor.js') }}"></script>
</head>
<body>
	<div class="page-wrap" id="app">
		<header class="">
			@include('inc.nav')
		</header>
		<main class="container py-4">
			<div class="content">
				<div class="messages">
					@include('inc.messages')
				</div>
				@yield('content')
			</div>
		</main>
		<footer class="footer">
			@include('inc.footer')
		</footer>
		<div class="lazy-load">
		
		</div>
	</div>
</body>
</html>
