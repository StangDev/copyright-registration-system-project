<footer class="site-footer">
  <div class="mr-auto">
  </div>
  <div> </div>
</footer>
<!-- /.site-footer -->
</main>
<!-- /.site-main -->
</div>

<!-- core plugins -->
<?php
echo js_asset('vendor/bower_components/jquery/dist/jquery.min.js');
echo js_asset('vendor/bower_components/popper.js/dist/umd/popper.min.js');
echo js_asset('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js');
echo js_asset('vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');
echo js_asset('vendor/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js');
echo js_asset('vendor/bower_components/switchery/dist/switchery.min.js');
echo js_asset('vendor/bower_components/waypoints/lib/jquery.waypoints.min.js');
echo js_asset('vendor/bower_components/waypoints/lib/shortcuts/sticky.min.js');
echo js_asset('vendor/bower_components/counterup/jquery.counterup.min.js');
echo js_asset('vendor/bower_components/sweetalert/dist/sweetalert.min.js');
echo js_asset('vendor/bower_components/jquery-validation/dist/jquery.validate.min.js');
echo js_asset('vendor/bower_components/sweetalert/dist/sweetalert.min.js');
echo js_asset('vendor/js/jquery.sparkline.min.js');
echo js_asset('global/js/plugins/dropdown-caret.js');
echo js_asset('global/js/plugins/firstlitter.js');
echo js_asset('global/js/plugins/video-modal.js');
?>
<!-- plugins for the current page -->
<?php
echo js_asset('vendor/bower_components/summernote/dist/summernote.min.js');
?>
<!-- site-wide scripts -->
<?php
echo js_asset('global/js/main.js');
echo js_asset('admin/site.js');
echo js_asset('admin/navbar.js');
echo js_asset('admin/menubar.js');
?>
<!-- current page scripts -->
