<!DOCTYPE html>
<html>
<head>
    @include('head');
</head>
<body>
<br>
<br>
<br>
    @include('header')
    {{--@include('content')--}}
<div class='container'>

	
    @if(isset($mems))
    	@foreach($mems as $mem)
    	<div class='row'>
    		<div class='col-xs-6 col-xs-offset-3'>
    			<div class='panel panel-default'>
    				<div class='panel-heading'>
    				<a href="/view/mem/{{$mem->id}}">
    				{{$mem->title}}
    				</a>
    				</div>
    				<div class='panel-body'>
    					<a href="/view/mem/{{$mem->id}}">
    					<img class='img-responsive' src="{{$mem->img_path}}"/>
    					</a>
    				</div>
    			</div>
    		</div>
    	</div>
    	
    	@endforeach
    	<div class='row'>
    		<div class='col-xs-6 col-xs-offset-3'>
    			{!! $mems->render()!!}
    		</div>
    	</div>
    @endif

</div>

    {{--@include('footer')--}}

</body>
</html>
