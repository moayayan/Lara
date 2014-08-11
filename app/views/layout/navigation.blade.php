
<!-- Payment Navigation -->
 <header class="navbar navbar-static-top navbar-inverse" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{ URL::route('home') }}" class="navbar-brand">Saint Vincent College of Cabuyao</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav pull-right">
		@if(Auth::check())
			<li><a href=" {{ URL::route('account-sign-out') }} ">Sign Out</a></li>

		@else
			<li><a href="{{ URL::route('account-sign-in') }}">Sign In</a></li>
			<li><a href="{{ URL::route('account-create') }}">Create an account</a></li>
		@endif
      </ul>
    </nav>
  </div>
</header>