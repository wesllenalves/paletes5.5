<!-- Bootstrap and necessary plugins -->
<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/pace.min.js') }}"></script>
<!-- Plugins and scripts required by all views -->
<script src="{{ asset('js/vendor/Chart.min.js') }}"></script>
<!-- CoreUI main scripts -->
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('js/jquery.mask.min.js')}}"></script>
<script src="{{ asset('node_modules/select2/dist/js/select2.min.js')}}"></script>

	<script>
		$(document).ready(function() {
			$('.js-select2-multiple').select2();
		});
	</script>
