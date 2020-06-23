<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Menu Work</h3>
			</div>
			<div class="module-body">
				<br>
				<p>
					<a href="<?php echo base_url();?>backend/add_work" class="btn btn-mini btn-success">New Add</a>
					    -
					<small>Silahkan klik tombol Add untuk input data baru.</small>
				</p>
					<table class="table table-striped table-bordered table-condensed">
					  <thead>
						<tr>
							<th>No</th>
							<th>Title</th>
							<th>Deskripsi</th>
							<th>Picture</th>
							<th>Action</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	$no=1;
					  	if ($work->num_rows()>0) 
					  	{
					  		foreach ($work->result_array() as $key) 
					  		{?>
					  		<tr>
						       <td><?php echo $no;?></td>
							   <td><?php echo $key['title'];?></td>
							   <td class="span6"><?php echo $key['deskripsi'];?></td>
							   <td class="span2">
							   		<button type="button" class="btn btn-warning btn-small" data-toggle="modal" data-target="#myModal">View Picture</button>
							   		<!-- menampilkan gambar-->
							   		<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- konten modal-->
											<div class="modal-content">												
												<!-- body modal -->
												<div class="modal-body">
													<center>
													<img src="<?php echo base_url()?>assets/images/work/thumb/<?php echo $key['gambar'];?>"></center>
												</div>
												<!-- footer modal -->
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
							   	</td>
							   </div>
							   <td><a class="btn btn-small btn-info" href="<?php echo base_url();?>backend/edit_work/<?php echo $key['id_work'];?>" >Edit</a> 
							       <a class="btn btn-small btn-danger" href="<?php echo base_url();?>backend/delete_work/<?php echo $key['id_work'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $key['title'];?>?')">Delete</a>
							   </td>
							</tr>
							<?php
							$no++;
					  		}
					  	}
					  	else
					  	{
					  		?>
					  		<tr>
								<td colspan="5">No Result Data</td>
							</tr>
						<?php
					  	}
						?>
					  </tbody>
					</table>
				</div>
		</div>
	</div>
</div>

