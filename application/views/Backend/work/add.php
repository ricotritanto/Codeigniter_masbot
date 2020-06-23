<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Forms Work</h3>
			</div>
			<div class="module-body">				
			<form class="form-horizontal row-fluid" name="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('backend/save_work');?>">
				<!-- <input type="hidden" name='id_work' id="id_work"> -->
				<div class="control-group">
					<label class="control-label" for="basicinput">Title :  </label>
						<div class="controls">
							<input type="text" id="title" name="title" required class="span4">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="basicinput">Deskripsi : </label>
						<div class="controls">
							<textarea class="span8" rows="8" id="deskripsi" name="deskripsi"></textarea>
						</div>
				</div>

				<div class="control-group">
					<label class="control-label">Gambar : </label>
						<div class="controls">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
									<div class="uneditable-input">
										<i class="icon-file fileupload-exists"></i> 
										<span class="fileupload-preview"></span>
									</div>
										<span class="btn btn-file">
										<span class="fileupload-new">Select file</span>
										<span class="fileupload-exists">Change</span>
									<input type="file" name="userfile" class="default" />
										</span>
								</div>
							</div>
						</div>
							<span class="label label-important">NOTE!</span>
							<span>File hanya dalam format gif,jpg,png,jpeg dengan resolusi 90PX x 180PX dan ukuran maksimal file sebesar 3 MB</span>
				</div>

				
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-mini btn-inverse">Simpan</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
			tinymce.init({         
			        selector: "textarea#deskripsi",
			        plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
                ],
 
                toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
                toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
 
                menubar: false,
                toolbar_items_size: 'small',
 
                style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
 
                templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                ]

			    });
			</script>