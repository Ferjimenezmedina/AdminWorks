@if(Session::get('message'))
	<div class="message">
		<a href="#!" class="white-text btn-close-mensaje">
			<i class="material-icons right">highlight_off</i>
		</a>
		<p>
			<strong>{{ Session::get('message') }}</strong>
		</p>
	</div>
@elseif(Session::get('becareful'))
	<div class="message-becareful">
		<a href="#!" class="white-text btn-close-mensaje">
			<i class="material-icons right">highlight_off</i>
		</a>
		<p>
			<strong>{{ Session::get('becareful') }}</strong>
		</p>
	</div>
@endif
@if (session('status'))
	<div class="message">
		<a href="#!" class="white-text btn-close-mensaje">
			<i class="material-icons right">highlight_off</i>
		</a>
		<p>
			<strong>Bien!</strong> {{ session('status') }}
		</p>
	</div>
@endif
@if (count($errors) > 0)
	<div class="message-danger">
		<a href="#!" class="white-text btn-close-mensaje">
			<i class="material-icons right">highlight_off</i>
		</a>
		@foreach ($errors->all() as $error)
			<p><strong>Whoops!</strong> {{ $error }}</p>
		@endforeach
	</div>
@endif
