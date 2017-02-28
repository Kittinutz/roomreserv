
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Custormer id</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Countrycode</th>
				<th>Birthday</th>
				<th>Email</th>
				<th>Passport NO.</th>
				<th>Note</th>
			</tr>
		</thead>

		<tbody>

		
		@foreach($list as $list )
			<tr>
				<td>{{$list->cusid}}</td>
				<td>{{$list->name}}</td>
				<td>{{$list->surname}}</td>
				<td>{{$list->countrycode}}</td>
				<td>{{$list->brithday}}</td>
				<td>{{$list->email}}</td>
				<td>{{$list->passportno}}</td>
				<td>{{$list->note}}</td>
				<td>
				<form action="{{url('/deletecustormer')}}" method="post" accept-charset="utf-8">
				{{csrf_field()}}
				<input type="hidden" name='cusid' value="{{$list->cusid}}">
				<input type="submit"  class="btn btn-success pull-right" value="DELETE" onclick="return confirm('Are you sure?')" ></td>
				</form>
				</td>
			</tr>
			@endforeach



		</tbody>
	</table>

</div>
