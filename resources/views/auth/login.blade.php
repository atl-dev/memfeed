@include('head')
@include('header')

<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <article class="mem-content">
                <div class="col-sm-6">
                <h4>Sign in</h4>
			<form action="/auth/login" method="post">
			 {!! csrf_field() !!}
				<div>
			        
			        <input type="email" placeholder="E-mail" class='form-control' name="email" value="{{ old('email') }}">
			    </div>
			    <input type='hidden' name="remember" value="false">
			    <div>
			       
			        <input type="password" placeholder="Password" class='form-control' name="password" id="password">
			    </div>

			   
			    <div>
			        <button type="submit" class='btn btn-xs btn-primary nextPageBtn' >Sign in</button>
			    </div>
			</form>
		</div>
		<div class='col-sm-6'>
			<h4> Sign up</h4>
			<form action="/auth/register" method="post">
			 {!! csrf_field() !!}

			    <div>
			       
			        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
			    </div>
				<div>
			        
			        <input type="email" placeholder="E-mail" class='form-control' name="email" value="{{ old('email') }}">
			    </div>

			    <div>
			        
			        <input type="password" placeholder="Password" class='form-control' name="password" id="password">
			    </div>
			     <div>
			        
			        <input type="password" placeholder="Confirm password" class='form-control' name="password_confirmation" id="password">
			    </div>

			    <div>
			        <button type="submit" class='btn btn-xs btn-primary nextPageBtn' >Sign up</button>
			    </div>
			</form>
		</div>
		</article>
	</div>

</div>


