<?php 
$title = 'Valcus: We offer all range of accounting services from small to large enterprises.'; 
include_once("header.php"); 
?>


<section class="page-title-custom">
  <div class="container">
    <div class="row">
    	<h1 class="font-weight-8 text-center color-white">Accounting</h1>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end page title -->

<section class="sec-padding">
    <div class="container">
      <div class="row">
      
      <div class="col-md-4 col-sm-12 col-xs-12 section-white">
              
          <div class="pages-sidebar-item">
		   <div class="sec-title-container less-padding-3 text-center">
              <h2 class="font-weight-5 less-mar-3">GET A SUPPORT TO START</h2>
             </div>
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
           <!--end item holder-->
		</div>
           <!--end column--> 
      
        <div class="col-md-8 col-sm-12 col-xs-12">
         <div class="col-md-12 nopadding">
          <div class="text-justify">
		  </div>
          </div><!---col-md-12 end--->
			 
			 
	      </div><!--end right col-->
         </div>
        </div>
  </section>
  <!--end item -->
  <div class="clearfix"></div>
 
<?php include_once("footer.php"); ?>