@if (Route::has('login'))                    
@auth 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>WEBM1</title>
		<!-- Tell the browser to be responsive to screen width -->  
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="/ALTEtemplate/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="/ALTEtemplate/bower_components/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="/ALTEtemplate/bower_components/Ionicons/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="/ALTEtemplate/dist/css/AdminLTE.min.css">
		  <!-- AdminLTE Skins. Choose a skin from the css/skins
	  	folder instead of downloading all of them to reduce the load. -->
	  	<link rel="stylesheet" href="/ALTEtemplate/dist/css/skins/_all-skins.min.css">
	  	<!-- Morris chart -->
	  	<link rel="stylesheet" href="/ALTEtemplate/bower_components/morris.js/morris.css">
	  	<!-- jvectormap -->
	  	<link rel="stylesheet" href="/ALTEtemplate/bower_components/jvectormap/jquery-jvectormap.css">
	  	<!-- Date Picker -->
	  	<link rel="stylesheet" href="/ALTEtemplate/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	  	<!-- Bootstrap time Picker -->
	  	<link rel="stylesheet" href="/ALTEtemplate/plugins/timepicker/bootstrap-timepicker.min.css">
	  	<!-- Daterange picker -->
	  	<link rel="stylesheet" href="/ALTEtemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	  	<!-- bootstrap wysihtml5 - text editor -->
	  	<link rel="stylesheet" href="/ALTEtemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">  
	  	  <!-- DataTables -->
	  	<link rel="stylesheet" href="/ALTEtemplate/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">  

  	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
	        <header class="main-header">
	            <!-- Logo -->
	            <a href="../../index2.html" class="logo">
	            	<!-- mini logo for sidebar mini 50x50 pixels -->
	            	<span class="logo-mini"><b>A</b>LT</span>
	            	<!-- logo for regular state and mobile devices -->
	            	<span class="logo-lg"><b>MORESCO</b>-1</span>
	          	</a>
	          	<nav class="navbar navbar-static-top">
	              	<!-- Sidebar toggle button-->
	              	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	              	  <span class="sr-only">Toggle navigation</span>
	              	  <span class="icon-bar"></span>
	              	  <span class="icon-bar"></span>
	              	  <span class="icon-bar"></span>
	           		</a>
		           	<div class="navbar-custom-menu">
		                <ul class="nav navbar-nav">
		                    <!-- User Account: style can be found in dropdown.less -->
		                    <li class="dropdown user user-menu">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                          <img src="/images/default.jpg" class="user-image" alt="User Image">
		                          <span class="hidden-xs">{{ Auth::user()->userfullname }}</span>
		                      	</a>
		                      	<ul class="dropdown-menu">
		                       		 <!-- User image -->
			                        <li class="user-header">
			                            <img src="/images/default.jpg" class="img-circle" alt="User Image">
			                            <p>
			                              {{ Auth::user()->userfullname }} 
			                          </p>
			                      	</li>
		                     		 <!-- Menu Body -->
		                      		<li class="user-body">
			                        	<div class="row">
				                            <div class="col-xs-4 text-center">
				                                <a href="#">Followers</a>
				                            </div>
				                            <div class="col-xs-4 text-center">
				                                <a href="#">Sales</a>
				                            </div>
				                            <div class="col-xs-4 text-center">
				                                <a href="#">Friends</a>
				                            </div>
			                        	</div>
			                    	</li>
				                    <!-- Menu Footer-->
				                    <li class="user-footer">
				                        <div class="pull-left">
				                            <a href="#" class="btn btn-default btn-flat">Profile</a>
				                        </div>
				                        <div class="pull-right">
				                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
				                        </div>
				                    </li>
		                		</ul>
		            		</li>
		        		</ul>
	    			</div>
				</nav>	
			</header>	
			<!-- =============================================== -->
			<!-- Left side column. contains the sidebar -->
			<aside class="main-sidebar">
			    <!-- sidebar: style can be found in sidebar.less -->
			    <section class="sidebar">
			        <!-- Sidebar user panel -->
			        <div class="user-panel">
			            <div class="pull-left image">
			              <img src="/images/default.jpg" class="img-circle" alt="User Image">
			          </div>
			          <div class="pull-left info">
			              <p>{{ Auth::user()->userfullname }} </p>
			              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			          </div>
			      </div>
			      <ul class="sidebar-menu" data-widget="tree">
			        <li class="header">MAIN NAVIGATION</li>
			        	<li class=" treeview <?=(Request::is('workorders') || Request::is('workorders/create') )? 'active menu-open' : '' ?> ">
		  					<a href="#">
		  						<i class="fa fa-folder"></i> <span>WORK ORDER LOGS</span>
		  						<span class="pull-right-container">
		  							<i class="fa fa-angle-left pull-right"></i>
		  						</span>
		  					</a>
		  					<ul class="treeview-menu">
		  						<li class="<?=(Request::is('workorders'))? 'active' : '' ?>"  ><a href="/workorders"><i class="fa fa-circle-o"></i>Work Orders</a></li>
		  						<li class="<?=(Request::is('workorders/create'))? 'active' : '' ?>" ><a href="/workorders/create"><i class="fa fa-circle-o"></i>Create work order</a></li>
		  					</ul>
		  				</li>
		  				<li class=" treeview ">
		  					<a href="#">
		  						<i class="fa fa-dashboard"></i> <span>M1BLASTER</span>
		  						<span class="pull-right-container">
		  							<i class="fa fa-angle-left pull-right"></i>
		  						</span>
		  					</a>
		  					<ul class="treeview-menu">
		  						<li ><a href="/sms"><i class="fa fa-circle-o"></i>Messages</a></li>
		  						<li><a href="/workorders/create"><i class="fa fa-circle-o"></i>CREATE</a></li>
		  					</ul>
		  				</li>
		  				<li class="treeview <?=(Request::is('mailbox') || Request::is('mailbox/create') )? 'active menu-open' : '' ?>">
		  					<a href="#">
		  						<i class="fa fa-envelope"></i> <span>Mailbox</span>
		  						<span class="pull-right-container">
		  							<i class="fa fa-angle-left pull-right"></i>
		  						</span>
		  					</a>
		  					<ul class="treeview-menu">
		  						<li class="<?=(Request::is('mailbox'))? 'active' : '' ?>" ><a href="/mailbox"><i class="fa fa-circle-o"></i>Inbox</a></li>
		  						<li class="<?=(Request::is('mailbox/create'))? 'active' : '' ?>" ><a href="/mailbox/create"><i class="fa fa-circle-o"></i>Create Email</a></li>
		  					</ul>
		  				</li>
		  				<li class="nav-item">
			  				<a class="nav-link " href="{{ route('logout') }}"
			  					onclick="event.preventDefault();
			  					document.getElementById('logout-form').submit();">
			  					{{ __('Logout') }}
			  				</a>

			  				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			  					@csrf
			  				</form>
			  			</li>	
			        </ul>
			    </section>
			</aside>
		<!-- Place content here -->
		<div class="content-wrapper">
			@yield('content')	
		</div>
		<!-- Place content here -->

		<!-- Main Menu -->
		<!-- Main Menu -->

		<!-- jQuery 3 -->
		<script src="/ALTEtemplate/bower_components/jquery/dist/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="/ALTEtemplate/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.7 -->

		<script src="/ALTEtemplate/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Morris.js charts -->
		<script src="/ALTEtemplate/bower_components/raphael/raphael.min.js"></script>
		<script src="/ALTEtemplate/bower_components/morris.js/morris.min.js"></script>
		<!-- Sparkline -->
		<script src="/ALTEtemplate/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="/ALTEtemplate/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="/ALTEtemplate/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="/ALTEtemplate/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="/ALTEtemplate/bower_components/moment/min/moment.min.js"></script>
		<script src="/ALTEtemplate/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- datepicker -->
		<script src="/ALTEtemplate/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<!-- timepicker -->
		<script src="/ALTEtemplate/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="/ALTEtemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Slimscroll -->
		<script src="/ALTEtemplate/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="/ALTEtemplate/bower_components/fastclick/lib/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="/ALTEtemplate/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="/ALTEtemplate/dist/js/pages/dashboard.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="/ALTEtemplate/dist/js/demo.js"></script>
		<!-- DataTables -->
		<script src="/ALTEtemplate/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="/ALTEtemplate/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	  	<script>
		  	$(function () {
				/*//Initialize Select2 Elements
				$('.select2').select2()
				//Datemask dd/mm/yyyy
				$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
				//Datemask2 mm/dd/yyyy
				$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
				//Money Euro
				$('[data-mask]').inputmask()
				*/
				//Date picker
				$('#datepicker').datepicker({
					autoclose: true
				});

				//Timepicker
				$('#timepicker').timepicker({
					showInputs: false,
					showMeridian: false
				});

				$('#datepicker2').datepicker({
					autoclose: true
				});

				//Timepicker
				$('#timepicker2').timepicker({
					showInputs: false,
					showMeridian: false
				});

				 $('#example1').DataTable({
				 	scrollY:        '150vh',
        			scrollCollapse: true
				 });
				 
				 $(function () {    //Add text editor
					$("#compose-textarea").wysihtml5();
				  });
			})
		</script>
	</body>
</html>
@else
@php
header("Location: " . URL::to('/login'), true, 302);
exit();
@endphp
@endauth
@endif