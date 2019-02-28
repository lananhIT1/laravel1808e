{{-- ke thua layout --}}
@extends('layout')
@push('css')
<style type="text/css">
	h2{
		color:green;
	}
</style>
@endpush
{{-- truyen ca view content sang layout view --}}
@section('content')
<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="container">
			<div class="content" style="min-height:500px;">
				<h2>This is content</h2>
				<p>my name: {{ $name }}</p>{{-- //$name: key của mảng--}}
				<p>my age: {{ $age }}</p>
				<h4>Thông tin sinh viên</h4>
				<table class="table">
					<thead>
						<tr>
							<th>STT</th>
							<th>MSV</th>
							<th>HT</th>
							<th>Tuoi</th>
							<th>Email</th>
							<th>Gioi tinh</th>
							<th>Hoc bong</th>
						</tr>
					</thead>
					<tbody>
							@php
							//khai báo biến
								$total=0;
							@endphp
							@foreach($infoST as $key=>$item)
								@php
									$total+=$item['money'];
					            @endphp
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $item['msv'] }}</td>
								<td>{{ $item['name'] }}</td>
								<td>{{ $item['age'] }}</td>
								<td>{{ $item['email'] }}</td>
								{{-- @if($item['gender']==1){
									<td>Nam</td>
								}@else{
									<td>Nữ</td>
							} --}}
							{{-- @endif --}}
							<td>{{ $item['gender']==1?'Nam':'Nữ' }}</td>
								<td>{{ $item['money'] }}</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6">Tổng học bổng</td>
								<td>
									{{ number_format($total) }}
								</td>
							</tr>
						</tfoot>
					</table>
					<form method="POST" action="{{ route('loginForm') }}">
						@csrf {{-- cung cấp chp token gửi lên --}}
						<div class="form-group">
							<label for="user">User</label>
							<input type="text" class="form-control" name="user" id="user">
						</div>
						<div class="form-group">
							<label for="pass">password</label>
							<input type="password" class="form-control" name="pass" id="pass">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
{{-- se day toan bo code js ra ngoai layout view --}}
@push('js')
	<script type="text/javascript">
		console.log('ABC');
	</script>
@endpush
		

	
	