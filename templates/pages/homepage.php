<div class="layout-homepage">
		
		<nav class="site-category-submenu">
			<div class="trow trow-full trow-fixed">
				<div><i class="fa fa-question-circle-o" aria-hidden="true"></i> <a href="/">Kaip prisijungti?</a></div>
				<div><i class="fa fa-cubes" aria-hidden="true"></i> <a href="/">Paslaugos</a></div>
				<div><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="/">Kontaktai</a></div>
			</div>
		</nav>
		
		<article class="site-article">
			
			<div class="site-article-wide-image">
				<img src="/css/images/slide-image-1.jpg" alt="" />
			</div>
			
		</article>
		
	</div>
	
	
	<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog"  aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Registracija</h4>
		  </div>
		  <div class="modal-body">

				<form class="site-form-registration" autocomplete="off">

				  <fieldset class="form-group">
					<label class="radio-inline"><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Fizinis asmuo</label>
					<label class="radio-inline"><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Juridinis asmuo</label>
				  </fieldset>
				  
				  <fieldset class="form-group">
					<label for="field1">Abonento numeris <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="field1" placeholder="">
				  </fieldset>
				  
				  <fieldset class="form-group">
					<label for="field2">Vardas <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="field2" placeholder="">
				  </fieldset>
				  
				  
				  <fieldset class="form-group">
					<label for="field3">Pavardė <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="field3" placeholder="">
				  </fieldset>
				  
				  <fieldset class="form-group">
					<label for="field4">Asmens kodo paskutiniai 4 skaitmenys <span class="text-danger">*</span></label>
					<input type="text" style="max-width: 60px" class="form-control" id="field4" placeholder="">
				  </fieldset>
				  
				  <fieldset class="form-group">
					<label for="exampleInputEmail1">El. pašto adresas <span class="text-danger">*</span></label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
				  </fieldset>
				  
				  
				  <fieldset class="form-group">
					<label for="field5">Telefono numeris <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="field5" placeholder="+370 000 00000">
				  </fieldset>
				  
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Su portalo <a target="_blank" class="link-underline" href="/">naudojimo taisyklėmis</a> susipažinau
					</label>
				  </div>
				  
				</form>
		
		  </div>
		  
		  <div class="modal-footer text-xs-left">
			<button type="button" class="btn btn-lg btn-primary">Registruotis</button>
		  </div>
		  
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
	
	
	
	
	<?php if (isset($_GET['change-pass'])) { ?>
	
		
		<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog"  aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Pakeisti slaptažodį</h4>
			  </div>
			  <div class="modal-body">

					<p>Prašome pakeisti laikiną slaptažodį:</p>
					<br />
					
					<form class="site-form-registration" autocomplete="off">

					<div class="form-group row">
						<label for="inputNewPass" class="col-sm-6 form-control-label">Naujas slaptažodis</label>
						<div class="col-xs-6">
							<input type="password" class="form-control" id="inputNewPass" placeholder="">
						</div>
					</div>

					<div class="form-group row">
						<label for="inputNewPass" class="col-sm-6 form-control-label">Pakartokite naują slaptažodį</label>
						<div class="col-xs-6">
							<input type="password" class="form-control" id="inputNewPass" placeholder="">
						</div>
					</div>
			  
					</form>
			
			  </div>
			  
			  <div class="modal-footer text-xs-left">
				<button type="button" class="btn btn-lg btn-alt">Pakeisti slaptažodį</button>
			  </div>
			  
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<script>
			
			$(document).ready(function(){
				
				$('#changePasswordModal').modal('show')
				
			});
			
		</script>
	
	<?php } ?>
	
</div>