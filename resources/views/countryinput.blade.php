<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
<form action="{{url('/countryinput')}}" method="POST" role="form">
	<legend>Add custormer</legend>

	<div class="form-group">
	{{csrf_field()}}
		<label for="">Countrycode</label>
		<input type="text" class="form-control" id="" placeholder="Countrycode" name="countrycode">
		<label for="">Countryname</label>
		<input type="text" class="form-control" id="" placeholder="Countryname" name="countryname">
		

	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>