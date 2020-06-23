<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h3>Forms About</h3>
			</div>
			<div class="module-body">				
			<form class="form-horizontal row-fluid" method="post" nctype='multipart/form-data' action="<?php echo base_url('backend/about_update');?>">
				<input type="hidden" name='id_about' id="id_about" value="<?php echo $id_about;?>"> 
				<div class="control-group">
					<label class="control-label" for="basicinput">Title :  </label>
						<div class="controls">
							<input type="text" id="title" name="title" value="<?php echo $title;?>" class="span4">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="basicinput">Deskripsi : </label>
						<div class="controls">
							<textarea class="span8" rows="10" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi;?>" ><?php echo $deskripsi;?></textarea>
						</div>
				</div>

				
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn">Update</button>
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