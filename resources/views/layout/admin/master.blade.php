<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		@include('layouts.head')
		@livewireStyles

		<!-- CSS du CDN SweetAlert2 -->
		<style>
			.colored-toast.swal2-icon-success {
				background-color: rgba(7, 133, 7, 0.789) !important;
			}

			.colored-toast.swal2-icon-error {
				background-color: #d11717db !important;

			}

			.colored-toast .swal2-title {
				color: white;
			}

			.colored-toast .swal2-close {
				color: white;
			}

			.colored-toast .swal2-html-container {
				color: white;
			}
		</style>
		
	</head>

	<body class="app sidebar-mini {{ Auth::user()->theme }}">
		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- End Global-loader-->
		<!-- Page -->
		<div class="page">
			<div class="page-main">
				@include('layouts.aside-menu')
				<!-- App-Content -->			
				<div class="app-content main-content">
					<div class="side-app">
						@include('layouts.header')
						@yield('page-header')
						@yield('content')
						@include('layouts.footer')
					</div>
				</div>
			</div>
		</div><!-- End Page -->
			@include('layouts.footer-scripts')
			@livewireScripts
			<!-- Appel du CDN de SweetAlert 2 -->
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</body>
</html>






		