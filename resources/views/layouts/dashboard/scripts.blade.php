<!-- external javascript -->

<script src="{{asset('dashboard_assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- library for cookie management -->
<!-- <script src="{{asset('dashboard_assets/js/jquery.cookie.js')}}"></script> -->
<!-- calender plugin -->
<script src="{{asset('dashboard_assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('dashboard_assets/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<!-- data table plugin -->
<script src="{{asset('dashboard_assets/js/jquery.dataTables.min.js')}}"></script>

<!-- select or dropdown enhancer -->
<script src="{{asset('dashboard_assets/bower_components/chosen/chosen.jquery.min.js')}}"></script>
<!-- plugin for gallery image view -->
<script src="{{asset('dashboard_assets/bower_components/colorbox/jquery.colorbox-min.js')}}"></script>
<!-- notification plugin -->
<script src="{{asset('dashboard_assets/js/jquery.noty.js')}}"></script>
<!-- library for making tables responsive -->
<script src="{{asset('dashboard_assets/bower_components/responsive-tables/responsive-tables.js')}}"></script>
<!-- tour plugin -->
<script src="{{asset('dashboard_assets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
<!-- star rating plugin -->
<script src="{{asset('dashboard_assets/js/jquery.raty.min.js')}}"></script>
<!-- for iOS style toggle switch -->
<script src="{{asset('dashboard_assets/js/jquery.iphone.toggle.js')}}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{asset('dashboard_assets/js/jquery.autogrow-textarea.js')}}"></script>
<!-- multiple file upload plugin -->
<script src="{{asset('dashboard_assets/js/jquery.uploadify-3.1.min.js')}}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{asset('dashboard_assets/js/jquery.history.js')}}"></script>
<!-- application script for Charisma demo -->
<script src="{{asset('dashboard_assets/js/charisma.js')}}"></script>


<!-- editor start -->
<script src="http://cdn.tinymce.com/4.3/tinymce.min.js"></script> 
  <script>
    tinymce.init({
  selector: 'textarea',
  height: 300,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code noneditable'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_style: '.collapse {display: block !important;}',
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css',
    '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'
  ]
});
  
  </script>
 <!-- editor end -->