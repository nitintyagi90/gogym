<?php

include 'header.php';
?>

<div class="wrapper">
	<div class="container-fluid">

		<!-- Page-Title -->
		<div class="row paddtp5">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group m-0 pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">GoGyms</a></li>
							<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
							<li class="breadcrumb-item active">Profession</li>
						</ol>
					</div>
					<h4 class="page-title">Profession</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->


		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					<div class="card-body">
						<h4 class="mt-0 header-title"><a data-toggle="modal" data-target=".bd-example-modal-form" class="btn btn-primary">Add Profession</a></h4>

						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Action</th>
								</tr>
								</thead>

								<tbody>
								<?php $i=1; foreach ($message as  $value) {

									?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?=$value['profession_name']?></td>
										<td>
											<a href="<?php echo site_url('Admin/delete_profession/'.$value['profession_id']);?>" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o "></i></a>
											<a href="<?php echo site_url('Admin/editprofession/'.$value['profession_id']);?>" class="btn btn-danger btn-sm" title="Edit"><i class="fa fa-pencil "></i></a>
											<!--<button type="button" id="<?/*=$value['profession_id']*/?>" class="btn btn-info btn-sm update_aminities"><i class="fa fa-pencil"</button>-->
										</td>
									</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->

	</div> <!-- end container -->
</div>
<!-- end wrapper -->
<?php

include 'footer.php';
?>
<div class="modal fade bd-example-modal-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<form class="form-horizontal" action="<?php echo base_url('Admin/insert_profession');?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalform">Profession Add</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" class="control-label">Profession Name</label>
								<input type="text" name="profession_name" required class="form-control" id="field-1" placeholder="Enter Profession Name">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-raised btn-primary ml-2" value="Submit">
				</div>
			</div>
		</form>
	</div>
</div>


