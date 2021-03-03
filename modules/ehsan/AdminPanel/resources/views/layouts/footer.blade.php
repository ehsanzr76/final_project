<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 footer-copyright">
        <p class="mb-0">کپی رایت 2018 © اندلس همه حقوق محفوظ است.</p>
      </div>
      <div class="col-md-6">
        <p class="pull-right mb-0">دست ساز و ساخته شده با<i class="fa fa-heart"></i></p>
      </div>
    </div>
  </div>
</footer>
</div>
</div>


<!-- jQuery Modal -->

<!-- latest jquery-->
<script src="{{url('back/assets/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{url('back/assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{url('back/assets/js/bootstrap/bootstrap.js')}}"></script>
<!-- feather icon js-->
<script src="{{url('back/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{url('back/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{url('back/assets/js/sidebar-menu.js')}}"></script>
<script src="{{url('back/assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{url('back/assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{url('back/assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{url('back/assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{url('back/assets/js/prism/prism.min.js')}}"></script>
<script src="{{url('back/assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{url('back/assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{url('back/assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{url('back/assets/js/counter/counter-custom.js')}}"></script>
<script src="{{url('back/assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{url('back/assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{url('back/assets/js/dashboard/default.js')}}"></script>
{{-- <script src="{{url('/assets/js/notify/index.js')}}"></script> --}}
<script src="{{url('back/assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{url('back/assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{url('back/assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{url('back/assets/js/chat-menu.js')}}"></script>
<script src="{{url('back/assets/js/height-equal.js')}}"></script>
<script src="{{url('back/assets/js/tooltip-init.js')}}"></script>
<script src="{{url('back/assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{url('back/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{url('back/assets/js/script.js')}}"></script>
<script src="{{url('back/assets/js/theme-customizer/customizer.js')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#editor",
directionality :"rtl",
    plugins: [
      "directionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | ltr rtl",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

<!-- Plugin used-->
</body>

</html>