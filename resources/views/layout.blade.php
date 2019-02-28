<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo laravel</title>
	<link rel="stylesheet" href="{{ asset('css/test/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/test/test.css') }}">

</head>
<body>
	<div class="container-fluid">
		{{-- nhúng file header view --}}
		@include('common.header')
		{{-- nhúng file menu --}}
		@include('common.menu')
		{{-- nhận dữ liệu từ các file view truyền sang --}}
		@yield('content')
		{{-- nhúng footer --}}
		@include('common.footer')
	</div>

	
	{{-- cú pháp comment của laravel --}}
	<script src="{{ asset('js/test/jquery-3.3.1.min.js') }}" type="text/javascript" ></script>
	<script src="{{ asset('js/test/bootstrap.js') }}" type="text/javascript" ></script>
	{{-- nghia la sau nay file js dc viet trong cac file view xon thi se duoc hien hi o day
	@push('js') --}}
	@stack('js')
	{{-- nhung doan code css nam trong file view con se hien thi o day --}}
	@stack('css')
	
</body>
</html>