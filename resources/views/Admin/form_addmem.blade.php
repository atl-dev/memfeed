@include('head')
@include('Admin.navbar')
@if($errors->any())
<script type="text/javascript">
	alert('{{$errors->first()}}');
</script>
@endif
<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <article class="mem-content">
                <div class="col-sm-6">
                <h4>Sign in</h4>
			<form action="/admin/add/mem" method="post"  enctype="multipart/form-data">
			 {!! csrf_field() !!}
				<div class="form-group">
					<input type='text' name='title' placeholder="Title" class="form-control"/>
				</div>
				<div class='form-group'>
					<input type='file' name='image' >
				</div>

			   
			    <div class='form-group'>
			        <button type="submit" class='btn btn-xs btn-primary nextPageBtn' >Add Mem</button>
			    </div>
			</form>
		</div>
		<div class='col-sm-6'>
			
		</div>
		</article>
	</div>

</div>


