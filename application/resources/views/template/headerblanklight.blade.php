<!DOCTYPE html>
<html lang="en">
<head>
<title>CATCH</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('public') }}/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="{{ asset('public') }}/webfont/webfont.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/matrix-style.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/matrix-media.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/iziModal.css" />
<link href="{{ asset('public') }}/font-awesome/css/font-awesome.css" rel="stylesheet" />
<script src="{{ asset('public') }}/js/jquery.min.js"></script> 
<script src="{{ asset('public') }}/js/jquery.ui.custom.js"></script>
<script src="{{ asset('public') }}/plugins/bootbox/bootbox.min.js"></script>
<script src="{{ asset('public') }}/plugins/bootbox/bootbox.locales.min.js"></script>
<script src="{{ asset('public') }}/js/iziModal.min.js"></script>
<script src="{{ asset('public') }}/js/jquery.bootstrap-growl.js"></script> 
<style>
.widget-box {
	margin-top: 16px !important;
}
</style>
</head>
<body style="background-color: #eeeeee !important">


<div id="modal-iframe"> <!-- data-iziModal-fullscreen="true"  data-iziModal-title="Welcome"  data-iziModal-subtitle="Subtitle"  data-iziModal-icon="icon-home" -->
  <!-- Modal content -->
</div>

<div id="content_blank">
    @yield('content')
</div>
<script src="{{ asset('public') }}/js/bootstrap.min.js"></script> 
<script src="{{ asset('public') }}/js/matrix.js"></script>
<script>
    @if(Session::has('notif')) 
        $.bootstrapGrowl("{{ Session::get('notif')['notification'] }}", {
            type: "{{ Session::get('notif')['type'] }}"
        });
    @endif   
</script>
</body>
</html>
