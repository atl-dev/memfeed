@include('head')
@include('header')

<div class='container' style='padding-top:15%;'>
	<div class='row'>

		<div class='col-xs-6 col-xs-offest-4' style='padding-left:15%;'>
			<form action="/auth/login" method="post">
			 {!! csrf_field() !!}
				<div>
			        Email
			        <input type="email" class='form-control' name="email" value="{{ old('email') }}">
			    </div>

			    <div>
			        Password
			        <input type="password" class='form-control' name="password" id="password">
			    </div>

			    <div>
			        <input type="checkbox" class='form-control' name="remember"> Remember Me
			    </div>

			    <div>
			        <button type="submit" class='btn btn-xs btn-default'>Login</button>
			    </div>
			</form>
		</div>
	</div>

</div>
