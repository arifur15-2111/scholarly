<?php
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/admin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a class="navbar-brand" href="index.html"><i class="fab fa-leanpub"></i>SCHOLARLY</a>
				</div>
				<div class="col-md-6" style=" text-align: right;"> 
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	</header>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Registration student <b>Details</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employess</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>					
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>#</th>
                        <th>Name</th>
                        <th>mobile</th>
						<th>date_birth</th>
						<th>address</th>
                        <th>father</th>
						<th>district</th>
						<th>gender</th>
                        <th>state</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM crud");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["mobile"]; ?></td>
					<td><?php echo $row["date_birth"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
					<td><?php echo $row["father"]; ?></td>
					<td><?php echo $row["district"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["state"]; ?></td>
					<td>
						<a href=""><i class="fa fa-eye"></i></a>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["name"]; ?>"
							data-mobile="<?php echo $row["mobile"]; ?>"
							data-date_birth="<?php echo $row["date_birth"]; ?>"
							data-address="<?php echo $row["address"]; ?>"
							data-father="<?php echo $row["father"]; ?>"
							data-district="<?php echo $row["district"]; ?>"
							data-gender="<?php echo $row["gender"]; ?>"
							data-state="<?php echo $row["state"]; ?>"
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="email" id="mobile" name="mobile" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Date of birth</label>
							<input type="phone" id="date_birth" name="date_birth" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="phone" id="address" name="address" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Father</label>
							<input type="phone" id="father" name="father" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>District</label>
							<input type="phone" id="district" name="district" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Gender</label>
							<input type="phone" id="gender" name="gender" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>State</label>
							<input type="phone" id="state" name="state" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="email" id="mobile_u" name="mobile" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Date of birth</label>
							<input type="phone" id="date_birth_u" name="date_birth" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="phone" id="address_u" name="address" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Father</label>
							<input type="phone" id="father_u" name="father" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>District</label>
							<input type="phone" id="district_u" name="district" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Gender</label>
							<input type="phone" id="gender_u" name="gender" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>State</label>
							<input type="phone" id="state_u" name="state" class="form-control" required>
						</div>						
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>                                		                            