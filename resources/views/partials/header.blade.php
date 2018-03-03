<nav id="menu" style="" class="navbar {{-- navbar-fixed-top --}}">
	<div class="navbar-header">
		@if (Auth::check())
			<a class="navbar-brand user navLink" {{-- href="{{action('UsersController@show' , Auth::id())}}" --}} >
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				{{Auth::user()->name}}
			</a>
		@else
			<a class="navbar-brand user navLink" {{-- href="{{action('Auth\AuthController@getLogin')}}" --}}><span class="navLink">Login / Register</span>
			</a>	
		@endif
		<button style="border:1px solid #337ab7" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
			<span style="background-color: #337ab7;color:#337ab7" class="icon-bar"></span>
			<span style="background-color: #337ab7;color:#337ab7" class="icon-bar"></span>
			<span style="background-color: #337ab7;color:#337ab7" class="icon-bar"></span> 
		</button>
	</div>
	<div class="collapse navbar-collapse justify-content-end" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li class="headLinks">
				<a {{-- href="{{action('RafflesController@index')}}" --}}>
					<span class="glyphicon glyphicon-king" aria-hidden="true"></span>
					<span class="navLink">Todays Icons</span>
				</a>
			</li>
			<li id="navSpecialHoverLink" class="headLinks">
				<a  {{-- href="{{action('TheWorldLotterysController@selectNumbers')}}" --}}>
			  		<span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
			  		<span class="navLink">Rising Stars</span>
				</a>
			</li>
			<li class="headLinks">
				<a {{-- href="{{action('SuggestionsController@index')}}" --}}>
					<span class="glyphicon glyphicon-pawn" aria-hidden="true"></span>
					<span class="navLink">The Hopefulls</span>
				</a>
			</li>
			<li class="headLinks" style="margin-right:1em;">
				<a {{-- href="{{action('AboutUsController@index')}}" --}}>
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
					<span id="navSuggMobile" class="navLink">About Us</span>
				</a>
			</li>
		</ul>        
	</div>
</nav>