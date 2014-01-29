master page 

	@if( Auth::user() )
		<a href="{{URL::to('/')}}">Home</a>
		<a href="{{URL::to('profile')}}">Profile</a>
	@endif


@yield('content')