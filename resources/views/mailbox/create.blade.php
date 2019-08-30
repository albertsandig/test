@extends('../master')

@section('content')
		<h3 align="left">Add Work Order</h3>
		<br />
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li> {{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
			</div>
		@endif
<div class="row" >
<div class="col-md-6">
	<div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post" action = "{{url('workorders')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label">Work Order Number</label>
					<input type="text" class="form-control" name="wo_num" id="wo_num">
				</div>
				<div class="form-group">			
					<label class="control-label">Customer</label>
					<input type="text" class="form-control" name="c_name" id="c_name">
				</div>
				<div class="form-group">	
					<label class="control-label">Address</label>
					<input type="text" class="form-control" name="address" id="address">
				</div>
				<div class="bootstrap-timepicker">
					<div class="row" >
						<div class="col-md-6">
							<label class="control-label">Creation Date/Time</label>
							<div class='input-group date' id='datepicker'>
								<input type='text' class="form-control" name='creation_date' id='creation_date' />
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label>Time picker:</label>
							  <div class="input-group">
								<input type="text" class="form-control" name="timepicker" id="timepicker">

								<div class="input-group-addon">
								  <i class="fa fa-clock-o"></i>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">				
					<label class="control-label">Contact No.</label>
					<input type="text" class="form-control" name="contact" id="contact">
				</div>
				<div class="bootstrap-timepicker">
					<div class="row" >
						<div class="col-md-6">
							<label class="control-label">Relay Date/Time</label>
							<div class='input-group date' id='datepicker2'>
								<input type='text' class="form-control" name='relay' id='relay' />
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label>Time picker:</label>
							  <div class="input-group">
								<input type="text" class="form-control" name="timepicker2" id="timepicker2">

								<div class="input-group-addon">
								  <i class="fa fa-clock-o"></i>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">	
					<label class="control-label">Relayed to</label>
					<input type="text"  class="form-control" name="relayed2" id="relayed2" /> 
				</div>	
				<div class="form-group">	
					<input type="submit" class="btn btn-primary" value="Submit">			   
					</form>	
				</div>
	</div>
</div>
</div>
<div class="row" >
<div class="col-md-6">
</div>
</div>
@endsection
