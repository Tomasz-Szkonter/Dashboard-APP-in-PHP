	<!-- Just to distinguishe PHP from Hack in github repo, since both languages use that extension. -->
	<?php $thisIsFileInformation = "It is PHP"?>
	<!-- Modal -->
	<div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			
			<form id="brand_form" onsubmit="return false">
			<div class="form-group">
				<label>Brand Name</label>
				<input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter brand">
				<small id="brand_error" class="form-text text-muted"></small>
			</div>
			<div class="form-group">
				<label>Parent Category</label>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
			</form>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
	</div>