

	
<!--content-->

<?php $currentPage = 'contact';
include('Header.php');?>

<div class="contact">
			

			<div class="container">
				<h1>Contact</h1>
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form method="post" action="<?php echo base_url();?>index.php/Crud/saran">
						<input type="text" name="nama" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" name="email" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						
						
						<textarea cols="77" rows="6" value=" " name="pesan" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="form-group">
				        <label ><?php echo $status;?></label>
				       </div>
						<div class="send">
							<input type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Address</h4>
							<p>Catering BUAM</p>
							<p>Lorem ipsum dolor,</p>
							<p>Glasglow Dr 40 Fe 72. </p>
						</div>
						<div class="address-more">
						<h4>Address1</h4>
							<p>Tel:1115550001</p>
							<p>Fax:190-4509-494</p>
							<p>Email:<a href="mailto:contact@example.com"> contact@example.com</a></p>
						</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
		
	</div>
