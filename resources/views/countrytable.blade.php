{{$i = 1}}
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Number</th>
				<th>Countrycode</th>
				<th>Countryname</th>
			</tr>
		</thead>

		<tbody>

		
		@foreach($get as $countrycode )
		

			<tr>
			
				<td>{{$i++}}</td>
				<td>{{$countrycode->countrycode}}</td>
				<td>{{$countrycode->countryname}}</td>
				<td>
				<form action="{{url('/deletecountry')}}" method="post" accept-charset="utf-8">
				{{csrf_field()}}
				<input type="hidden" name='countrycode' value="{{$countrycode->countrycode}}">
				<input type="submit" class="btn btn-success pull-right" value="DELETE"> Delete</td>
				</form>
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>

</div>
