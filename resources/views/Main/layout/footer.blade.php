		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 single-footer-widget">
						<h4>Alamat</h4>
						<ul>{{-- 
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li> --}}
							@foreach (infoFooter('alamat') as $element)
							<li>{{$element->judul_info}}</li>
							@endforeach
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 single-footer-widget">
						<h4>Tautan</h4>
						<ul>
							@foreach (infoFooter('tautan') as $element)
							<li><a href="{{$element->link_info}}"><span class="fa fa-caret-right"></span> {{$element->judul_info}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 single-footer-widget">
						<h4>Lokasi</h4>
						<div id="tempat_peta" style="width:100%; height:150px; background:white;">

						</div>
					</div>{{-- 
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Link Terkait</h4>
						<ul>
							<li><a href="#">LINK</a></li>
							<li><a href="#">LINK</a></li>
							<li><a href="#">LINK</a></li>
							<li><a href="#">LINK</a></li>
							<li><a href="#">LINK</a></li>
						</ul>
					</div> --}}
				</div>
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-md-8"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; Stikes Dirgahayu Samarinda {{date('Y')}}
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="row align-items-center">
						<div class="col-md-4 google-translate">
							<div id="google_translate_element"></div>
						</div>
						<div class="col-md-8 footer-social">
							@foreach (infoFooter('sosmed') as $element)
							<a href="{{$element->link_info}}"><i class="fa {{$element->judul_info}}"></i></a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
	</body>
</html>
<script src="{{asset('backend-assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('frontend-assets/js/vendor/bootstrap.min.js')}}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> --}}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBSw-BRPQ5YqDu-T8t1wauoalRPV0iMBxw"></script>
<script src="{{asset('frontend-assets/js/easing.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/hoverIntent.js')}}"></script>
<script src="{{asset('frontend-assets/js/superfish.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend-assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend-assets/slick-1.8.1/slick/slick.js')}}"></script>
<script src="{{asset('backend-assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend-assets/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('frontend-assets/js/main.js')}}"></script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id',includedLanguages:'en,id',layout: google.translate.TranslateElement.InlineLayout.SIMPLE,multilanguagePage:true}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
	function maps() {
		lats = -0.4985931;
		longs = 117.1346667;
		var mapProp = {
			center:new google.maps.LatLng(lats,longs),
			zoom:17,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('tempat_peta'),mapProp);
	}
	maps();
</script>