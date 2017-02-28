
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Agency id</th>
				
				<th>Agency</th>
			</tr>
		</thead>

		<tbody>

		
		@foreach($agencys as $agencys )
		

			<tr>
			
				<td>{{$agencys->agencyid}}</td>
	
				<td>{{$agencys->nameagency}}</td>
				<td>
				<form action="{{url('/deleteagency')}}" method="post" accept-charset="utf-8">
				{{csrf_field()}}
				<input type="hidden" name='countrycode' value="{{$agencys->agencyid}}">
				<input type="submit" class="btn btn-success pull-right" value="DELETE"></td>
				</form>
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>

</div>
