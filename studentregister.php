<!-- Start registration Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								For enquiry & Admission<br>
								Be in touch with Us!
							</h1>
							<p>
								We prove the delima of education with talents and excellence results.ITM stands for its standard education and prove
								itself among the best institute of the Purvanchal.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Expert Faculties</h4></a>		
									<p>
										We have a circle of excellent teachers & Proffesors who always enlighten form the best they carry. 
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification & Association</h4></a>		
									<p>
										<ul>
										    <li>Affiliated to Aktu ,Lucknow</li>
											<li>Affiliated to DDU,Gorakhpur</li>
											<li>Affiliated to BTE, Lucknow</li>
										</ul>
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="" method="POST" >
								<h4 class="text-white pb-20 text-center mb-30">Apply for Available Course</h4>		
								<input type="text" class="form-control"  name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control"  name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<div class="form-select" id="service-select" >
									<select id ="course" name="course">
										<option datd-display="">Choose Course</option>
										<option value="B.tech">Bachelor of Technology</option>
										<option value="B.tech CSE">B.Tech (Computer Science & Engineering)</option>
										<option value="B.tech CE">B.Tech (Civil Engineering)</option>
										<option value="B.tech IT">B.Tech (Information Technology)</option>
										<option value="Btech ME">B.Tech (Mechanical Engineering)</option>
										<option value="Btech EC">B.Tech (Electronics & Communication Engineering)</option>
										<option value="BCA">BCA </option>
										<option value="MBA">MBA</option>
										<option value="BBA">BBA</option>
										<option value="B.Pharama">Bachelor of Pharmacy</option>
										<option value="D.Phram">Diploma in Pharmacy	</option>
										<option value="DHP">Diploma in Homeopathy Pharmacy</option>
										<option value="DME(prod)">Diploma in Mechanical Engineering (Production)</option>
										<option value="DME(Auto)">Diploma in Mechanical Engineering (Automobile)</option>
										<option value="DCE">Diploma in Civil Engineering</option>
										<option value="DEE">Diploma in Electrical Engineering</option>
									    
									</select>
								</div>									
								<button class="primary-btn text-uppercase" name="submit">Submit</button>
							</form>
								<?php
									if(isset($_POST['submit']))
									{
										$name=$_POST['name'];
										$email=$_POST['email'];
										$phone=$_POST['phone'];
										$course=$_POST['course'];
										$ip=$_SERVER['REMOTE_ADDR'];
										include("connect.php");
									     mysqli_query($con,"insert into register(name,email,phone,course,ip) values('$name','$email','$phone','$course','$ip')");
								    }
								?>		
						</div>
					</div>
				</div>	
			</section>
			