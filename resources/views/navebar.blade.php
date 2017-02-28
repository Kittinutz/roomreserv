
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{url('/')}}">ROOMRESERVATION</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="{{url('/')}}">Home</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/custormerlist')}}">Custormer list</a></li>
                   <li><a href="{{url('/countrylist')}}">Countrycode</a></li>
                  <li><a href="{{url('/agency')}}">Agency list</a></li>
                  <li><a href="#">Orderdetaill</a></li>

                  <li role="separator" class="divider"></li>

                  <li class="dropdown-header">Income</li>
                  
                  <li><a href="#">Total income</a></li>
                </ul>
              </li>
				</li>
				<li>
					<a href="#">Reservation list</a>
				</li>
			</ul>
		</div>
	</nav>
	
