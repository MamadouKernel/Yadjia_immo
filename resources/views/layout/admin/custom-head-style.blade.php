		<!-- Title -->
		<title>Robuse</title>
		
		<!--Favicon -->
		@php
			$parametrage = App\Models\Admin\Parametrage::where('id', App\Models\Admin\Parametrage::PARAMETRAGE_FAVICON_ID)->first();
		@endphp
		@if ($parametrage->photo)
			<link rel="icon" href="{{URL::asset("storage/parametrage/".$parametrage->photo)}}" type="image/x-icon"/>
		@else
			<link rel="icon" href="{{URL::asset("images/cover.png")}}" type="image/x-icon"/>
		@endif
		
		<!--Bootstrap css -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/dark.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{URL::asset('assets/css/animated.css')}}" rel="stylesheet" />
		
		<!---Icons css-->
		<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" />
		
		@yield('css')
		
		<!-- Color Skin css -->
		<link id="theme" href="{{URL::asset('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

	
		