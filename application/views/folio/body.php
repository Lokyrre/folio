<div class="container-fluid">
	<div id="bb-bookblock" class="bb-bookblock row">
		<div id="firstpage" class="bb-item">
			<div class="col-sm-6 col-sm-offset-6 col-xs-12 firstpage page">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6">
							<img src="<?php echo base_url("assets/images/me.jpg"); ?>" alt="me" class="img-circle">
						</div>
						<div class="col-xs-6" id="name">
							PAROUX<br/>Jérémy
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12" id="desc">
							<?php echo $desc;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="secondpage" class="bb-item">
			<div class="col-sm-6 col-xs-12 page pageleft">
				<div class="center"><?php echo $projects;?></div>
				<div class="container-fluid">
					<div class="row">
						<div class="controls">
							<div class="col-xs-12">
								<br/>								
								<a><button class="filter" data-filter="all" class="white-border filter" data-filter=".category-8" ><?php echo $all;?></button></a>
								<a><button class="white-border filter" data-filter=".category-1">Web</button></a>
								<a><button class="white-border filter" data-filter=".category-2">Mobile</button></a>
								<a><button class="white-border filter" data-filter=".category-3"><?php echo $other;?></button></a>
							</div>
						  
						  
						</div>
						<div id="product-grid" class="product-grid">
						  	<div class="mix category-1 col-md-4 col-xs-6" data-myorder="1">
						  		<img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/>
						  	</div>
						  	<div class="mix category-2 col-md-4 col-xs-6" data-myorder="2">
						  		<img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/>
						  	</div>
						 	 <div class="mix category-3 col-md-4 col-xs-6" data-myorder="3">
						  		<img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/>
						  	</div>
						  	<div class="mix category-1 col-md-4 col-xs-6" data-myorder="4">
						  		<img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/>
						  	</div>
						  	<div class="mix category-2 col-md-4 col-xs-6" data-myorder="5">
						  		<img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/>
						  	</div>

						  <div class="gap"></div>
						  <div class="gap"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 page pageright">
				<div class="center"><?php echo $skill;?></div>
				<div class="row">
					
				</div>
			</div>
		</div>
		<div id="lastpage" class="bb-item">
			<div class="col-sm-6 col-xs-12 page lastpage">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6">
							<h3><?php echo $mail; ?></h3>
							<?php echo form_open('folio/sendform', ['class' => 'form-signin']); ?>
							<div class="form-group">
								<label for="lastname"><?php echo $formName;?></label>
								<?php echo form_input(['name' => 'lastname', 'id' => 'lastname', 'class' => 'form-control']); ?>	
							</div>
							<div class="form-group">			
								<label for="firstname"><?php echo $formFirstName;?> </label>
								<?php echo form_input(['name' => 'firstname', 'id' => 'firstname', 'class' => 'form-control']); ?>	
							</div>
							<div class="form-group">		
								<label for="email"><?php echo $formEmail;?> </label>
								<?php echo form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control']); ?>	
							</div>
							<div class="form-group">		
								<label for="message"><?php echo $formMessage;?> </label>
								<?php echo form_textarea(['name' => 'message', 'id' => 'message', 'class' => 'form-control']); ?>
							</div>
							<div class="form-group">
								<button class="btn btn-primary pull-right" type="submit"><?php echo $formSend;?></button>
							</div>
						</div>
						<div class="col-xs-6">
							<h3><?php echo $sociaux; ?></h3>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-4">
										<h4>linkedin</h4>
									</div>
									<div class="col-xs-8">
										<a href="#" class="navbar-brand menu pull-right">
									    	<img alt="linkedin" alt="linkedin" class="reseau" src="<?php echo base_url("assets/images/reseau1.png"); ?>" class="img-circle">
									    </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-1">		
			<button type="button" class="btn btn-default arrow" id="bb-nav-prev" aria-label="Left Align">
			  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
			</button>
		</div>
		<div class="col-xs-1 col-xs-offset-10">		
			<button type="button" class="btn btn-default arrow arrow-right" id="bb-nav-next" aria-label="Left Align">
			  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
			</button>
		</div>
	</div>
</div>