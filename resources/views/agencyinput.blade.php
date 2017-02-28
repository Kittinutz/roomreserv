<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
<form action="{{url('/agencyinput')}}" method="POST" role="form">
	<legend>Add Agency</legend>

	<div class="form-group">
	{{csrf_field()}}
		
		<label for="">Agencyname</label>
		<input type="text" class="form-control" id="" placeholder="agencyname" name="agencyname">
		

	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>