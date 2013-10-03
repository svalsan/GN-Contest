<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Name - Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />

<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" href="css/custom.css" />
</head>

<body>

<div class="container">

<h3><align="justify">GREEN NINJA Contest!!</align></h3>
	<br>
	
	<div class="panel panel-primary">
		<div class="panel-heading"><h3 class="panel-title">Welcome Sanya!</h3></div>
			<div class="panel body">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					<li><a href="#action" data-toggle="tab">Activities/Action</a></li>
				</ul>
					<div class="tab-content">
						<div id="home" class="tab-pane active">
							<p>Home</p>
						</div>

						<div id="action" class="tab-pane">
						<br>
						Click on one of the following options.
						<br><br>
						<div class="list-group">
							<a data-toggle="modal" href="#createclass" class="list-group-item">Create a class</a>
							<a data-toggle="modal" href="#activateclass" class="list-group-item">Activate/Deactivate class</a>
							<a href="#" class="list-group-item">Start a contest</a>
							<a href="#" class="list-group-item">Delete a contest</a>
							<a href="#" class="list-group-item">View activity of contest</a>
						</div>
						
						
						<!--Create a class-->
							<div class="modal fade" id="createclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									  <h4 class="modal-title">Creating a class</h4>
									</div>
									<div class="modal-body">
										<h5> Enter the following details in order to create a class </h5><br>
										<form class="form-horizontal" role="form">
											<!--School-->
											<div class="form group row">
												<label for="school" class="col-lg-3 control-label">School Name</label>
												<div class="col-lg-5">
												<input type="school" class="form-control" id="school" placeholder="School Name">
												</div>
											</div><!--End of school-->
											<br>
											<!--Grade level-->
											<div class="form group row">
												<label for="grade" class="col-lg-3 control-label">Grade Level</label>
												<div class="col-lg-5">
												<input type="grade" class="form-control" id="grade" placeholder="Grade Level">
												</div>
											</div><!--End of grade-->
											<br>
											<!--Class Name-->
											<div class="form group row">
												<label for="classname" class="col-lg-3 control-label">Class Name</label>
												<div class="col-lg-5">
												<input type="classname" class="form-control" id="classname" placeholder="Class Name">
												</div>
											</div><!--End of class name-->										
										</form>	
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									  <button type="button" class="btn btn-primary">Save and Generate Code</button>
									</div>
								  </div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						<!--End of creating class-->
						
						<!--activate/deactivate class-->
							<div class="modal fade" id="activateclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									  <h4 class="modal-title">Search Class</h4>
									</div>
									<div class="modal-body">
									<h5>Search the class you want to activate/deactivate.</h5>	
									  <br>
									  <form class="form-horizontal" role="search">
										
										<div class="form group row">
											<label for="" class="col-lg-1 control-label"></label>
											<div class="col-lg-5">
												<input type="search" class="form-control" id="search" placeholder="Search">
												<br>
											</div>
										</div>
										
									  </form>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									  <button type="button" class="btn btn-primary">Submit</button>
									</div>
								  </div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						<!--End of activating class-->						
					</div>
			</div>	
		</div>	
	</div>
</div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>