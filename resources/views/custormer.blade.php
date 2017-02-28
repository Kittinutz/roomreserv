<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
<form action="{{url('/custormerinput')}}" method="POST" role="form">
{{csrf_field()}}
	<legend>Add custormer</legend>

	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="Name field" name="name">
		<label for="">Surname</label>
		<input type="text" class="form-control" id="" placeholder="Surname field" name="surname">
		<label for="">Countrycode</label>
		<select name="countrycode" id="input" class="form-control">
		<!--foreach-->@foreach($get as $getlist)

			<option value="{{$getlist->countrycode}}">{{$getlist->countrycode}}</option>
			@endforeach
		</select>
		<label for="">Brithday</label>
		<input type="date" class="form-control" id="" placeholder="Brithday field" name="brithday">
		<label for="">email</label>
		<input type="text" class="form-control" id="" placeholder="Email field" name="email">
		<label for="">passport NO.</label>
		<input type="text" class="form-control" id="" placeholder="Passport field" name="passport">
		<label for="">Note</label>
		<input type="text" class="form-control" id="" placeholder="Note field" name="note">

	</div>



	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>