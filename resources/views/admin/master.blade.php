<!DOCTYPE html>
<html>
@include('admin.include.header')

<title>AdminLTE 3 | @yield('title')</title>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  {{-- <!-- Navbar --> --}}
 @include('admin.include.nav')
  {{-- <!-- /.navbar --> --}}

  {{-- <!-- Main Sidebar Container --> --}}
 @include('admin.include.sidebar')

  {{-- <!-- Content Wrapper. Contains page content --> --}}
<div class="col-md-8 offset-3 text-center ">
@include('messages.message')
</div>
 @yield('content')

  {{-- <!-- /.content-wrapper --> --}}
 @include('admin.include.footer')

  {{-- <!-- Control Sidebar --> --}}
 @include('admin.include.aside')
  {{-- <!-- /.control-sidebar --> --}}
</div>
{{-- <!-- ./wrapper --> --}}

{{-- <!-- jQuery --> --}}
@include('admin.include.scripts')

</body>
</html>
