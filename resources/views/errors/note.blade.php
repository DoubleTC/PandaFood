@if(Session::has('error'))
    <div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<i class="material-icons">close</i>
		</button>
		<span>
			<b> Lỗi - </b> {{Session::get('error')}}
		</span>
	</div>
@endif

@foreach($errors->All() as $error)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<i class="material-icons">close</i>
		</button>
		<span>
			<b> Lỗi - </b> {{$error}}
		</span>
	</div>
@endforeach

	