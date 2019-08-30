@extends('../master')
@section('content')
<!--
@foreach($workorders as $workorder)						
							<tr role="row" class="odd">
								  <td class="sorting_1">{{ $workorder['id'] }}</td>
								  <td>{{ $workorder['creation_timestamp'] }}</td>
								  <td>{{ $workorder['workordertype_id'] }}</td>
								  <td>{{ $workorder['customer_name'] }}</td>
								  <td>{{ $workorder['customer_address'] }}</td>
								  <td>{{ $workorder['customer_contact'] }}</td>
								  <td>{{ $workorder['relay_timestamp'] }}</td>
								  <td>{{ $workorder['recipient'] }}</td>
								  <td>{{ $workorder['execution_timestamp'] }}</td>
								  <td>{{ $workorder['executed_by'] }}</td>
								  <td>{{ $workorder['updater'] }}</td>
							</tr></tbody>
							@endforeach
-->
							
<section class="content-header">
      <h1>
        Work Order Logs
        <small>work orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Work Order Logs</a></li>
        <li class="active">Work Orders</li>
      </ol>
    </section>	

<section class="content">
      <div class="row">
        <div class="col-xs-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="min-height: 750px;">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Creation At</th>
                  <th>Work Order Type</th>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Customer Contact</th>
                  <th>Relayed At</th>
                  <th>Recepient</th>
                  <th>Execution Date</th>
                  <th>Executed By</th>
                  <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                   
                  @foreach($workorders as $workorder)           
                    <tr>
                        <td>{{ $workorder['id'] }}</td>
                        <td>{{ $workorder['creation_timestamp'] }}</td>
                        <td>{{ $workorder['workordertype_id']->getWorderName()->name }}</td>
                        <td>{{ $workorder['customer_name'] }}</td>
                        <td>{{ $workorder['customer_address'] }}</td>
                        <td>{{ $workorder['customer_contact'] }}</td>
                        <td>{{ $workorder['relay_timestamp'] }}</td>
                        <td>{{ $workorder['recipient'] }}</td>
                        <td>{{ $workorder['execution_timestamp'] }}</td>
                        <td>{{ $workorder['executed_by'] }}</td>
                        <td>{{ $workorder['updater'] }}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                 <tr>
                  <th>ID</th>
                  <th>Creation At</th>
                  <th>Work Order Type</th>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Customer Contact</th>
                  <th>Relayed At</th>
                  <th>Recepient</th>
                  <th>Execution Date</th>
                  <th>Executed By</th>
                  <th>Updated At</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

   
@endsection
