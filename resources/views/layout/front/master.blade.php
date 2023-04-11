
<!doctype html>
<html lang="fr">
    <head>
		@include('layout.front.header-styles')
		{{-- @livewireStyles --}}

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
    <body>
        <div class="page">
            <div class="page-main">
                <!-- App-Content -->
                <div class="app-content main-content">
                    <div class="side-app">
                        @include('layout.front.header')
                        @yield('page-header')
                        @yield('content')
                        @include('layout.front.footer')
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        @include('layout.front.footer-scripts')
        {{-- @livewireScripts --}}
        <!-- Appel du CDN de SweetAlert 2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>


