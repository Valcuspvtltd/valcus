<?php 
$title = 'Valcus : Contact Us'; 
include_once("header.php"); 
?>

<section class="page-title-custom">
  <div class="container">
    <div class="row">
    	<h1 class="font-weight-8 text-center color-white">Contact Us</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end page title -->


<section class="sec-padding">
  <div class="container">
   <div class="row">
		<div class="col-md-8">
		<h2 class="uppercase"><strong>Get in Touch</strong></h2>
            <br/>
            <div class="text-box white">
				<div class="smartforms-modal-body">
                    <div class="smart-wrap">
                        <div class="smart-forms smart-container transparent wrap-full">
                            <div class="form-body no-padd">
                             <form method="post">
									<div class="section_custom">
										<label class="field prepend-icon">
											<input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name" required>
											<span class="field-icon"><i class="fa fa-user"></i></span>  
										</label>
									</div><!-- end section -->
									<div class="section_custom">
										<label class="field prepend-icon">
											<input type="text" name="telephone" id="telephone" class="gui-input" placeholder="Enter Mobile Number..." required  onkeyup="one()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  min="10" max="12" />
											<span class="field-icon"><i class="fa fa-phone-square"></i></span>  
										</label>
											
									</div><!-- end section -->
									<p id="pmsg"></p>
									<div class="section_custom">
										<label class="field prepend-icon">
											<input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address" required>
											<span class="field-icon"><i class="fa fa-envelope"></i></span>
										</label>
									</div><!-- end section -->
									<div class="section_custom">
									<label class="field prepend-icon">
									<select name="select" class="gui-input" type="text" placeholder="Select">
										<option value="SELECT"><p style=" color: #AAAAAA;">SELECT</p></option>
										<option value="COMPANY REGISTRATION">COMPANY REGISTRATION</option>
										<option value="NGO REGISTRATION">NGO REGISTRATION</option>
										<option value="Trademark REGISTRATION">Trademark REGISTRATION</option>
										<option value="GST REGISTRATION">GST REGISTRATION</option>
										<option value="FSSAI REGISTRATION">FSSAI Registration</option>
										<option value="MSME REGISTRATION">MSME Registration</option>
										<option value="IE CODE REGISTRATIONS">IE CODE REGISTRATION</option>
										<option value="ITR FILING">ITR FILING</option>
										<option value="OTHER">OTHER</option>
									</select>
									<span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
									</label>
									</div><!-- end section -->

								<div class="section_custom">
									<label class="field prepend-icon">
										<textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message" required></textarea>
										<span class="field-icon"><i class="fa fa-comments"></i></span>
									</label>
								</div><!-- end section -->
													
								<!-- end .form-body section -->
								<div class="form-footer text-left">
									<button type="submit" class="button btn-primary" name="submit">Submit</button>
									<button type="reset" class="button"> Cancel </button>
								</div><!-- end .form-footer section -->
							</form>                                                                                   
                            </div><!-- end .form-body section -->
                        </div><!-- end .smart-forms section -->
                    </div><!-- end .smart-wrap section -->            
                </div>
			  </div><!-- end .smart-wrap section -->
            <!-- end .smart-forms section --> 
          </div>
          <!--end item-->
          
          <div class="col-md-4 text-left">
            <h2 class="uppercase"><strong>Valcus Private Limited</strong></h2>
            <p>Address: Rz-I/82, Second Floor, Near Shakuntala Hospital, West Sagarpur, New Delhi, Delhi 110046</p>
			<p>Telephone: <a href="tel:011-25394965">011-25394965</a></p>
			<p>Mobile phone: <a href="tel:9999763322">9999763322</a></p>
            <p>E-mail: <a href="mailto:valcuspvtltd@gmail.com">valcuspvtltd@gmail.com</a></p>
            <p>Website: www.valcus.in</p>
			
			<br/>
			<br/>
			<h2 class="uppercase"><strong>Company Legal Information</strong></h2>
			<p>CIN: U74999DL2018PTC330382</p>
			<p>GSTIN: 07AAGCV3142H1ZE</p>
          </div>
          <!--end item--> 
  
		</div>
	</div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
    

<section>
  <div class="container-fluid">
	<div class="row">
	  <div class="gmaps-holder-2">
		<div class="col-md-12 nopadding"> <br/>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.7139666655303!2d77.09311111455901!3d28.60835654192664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b93637df2e1%3A0x70f7fbdba92f183a!2sValcus%20Private%20Limited!5e0!3m2!1sen!2sin!4v1580715926773!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen=""></iframe>
		</div>
	  </div>
	  <!--end item--> 
	  
	</div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->
   
<?php include_once("footer.php"); ?>