
<div class="container-fluid" style="padding: 0;">

<div class="form-head">
<h3><span>Basic detail</span></h3>
</div>

<div class="form-group"> 
<input type="text" name="school_name" placeholder="Collage Name">
</div>

<div class="form-group"> 
<input type="text"  name="other_name" placeholder="other Name">
</div>

<div class="form-group"> 
<textarea   name="address" placeholder="address"></textarea>
</div>

<div class="form-group"> 
<input type="text"name="location" placeholder="Landmark">
</div>

<div class="form-group"> 
<input type="text" name="zip_code" placeholder="Zipcode">
</div>

<div class="form-group"> 
<input type="text"name="district" placeholder="District">
</div>

<div class="form-group"> 
<input type="text" name="state" placeholder="State">
</div>

<div class="form-group"> 
<input type="workingdays" name="workingdays" placeholder="Working Days &Time">
</div>

<div class="form-group"> 
<input type="text" name="year_established" placeholder="Year established">
</div>

<div class="form-group"> 
<input type="text"name="days_open" placeholder="Days Open">
</div>

<div class="form-group"> 
<select name="board">
<option value="select board">select board</option>
<option value="state">UGC</option>
<option value="CBSE">AICTE</option>
<option value="ICSE">NAAC</option>
<option value="IGCSE">DEB</option>
<option value="Others (if any)">Others (if any)</option>
</select>
</div>

<div class="form-group"> 
<label>Logo</label><br>
<input type="file" name="logo" >
</div>

<div class="form-group"> 
<label>Image for profile</label><br>
<input type="file" name="profile_image" >
</div>

<div class="form-group"> 
<label>prospectus</label><br>
<input type="file" name="prospectus" accept="image/*">
</div>

<div class="form-group"> 
<label>website</label><br>
<input type="text" name="website" placeholder="website">
</div>

<div class="form-group"> 
<label>about_Collage</label><br>
<textarea  name="about_school" placeholder="About Collage"></textarea>
</div>

<div class="form-group"> 
<label>ownership type</label><br>
<select  name="ownership_type">
<option value="">select ownership type</option>
<option value="Public">Public</option>
<option value="Private">Private</option>
<option value="Public Private Partnership">Public Private Partnership</option></select>  
</div>

<div>
<label>BOARD ASSOCIATED WITH</label>
<input type="text" name="uni_associated_with" placeholder="BOARD ASSOCIATED WITH" >
</input>	
</div>







<div class="form-group">
<label>select organization</label> <br>
<select name="organization_type">
<option value="select_orgnization">select organization</option>
<option value="Affiliated_uni">Affiliated College</option>
<option value="Autonomous_uni">Autonomous College</option>
<option value="State_uni">State University</option>
<option value="Central_uni">Central university</option>
<option value="Private_uni">Private university</option>
<option value="Deemed_uni">Deemed University</option>
<option value="Others">Others(mention if any other type)</option> 
</select>
</div>



<div class="form-group"> 
<label>select organization 2</label> <br>
<select name="organization_type2">
<option value="">select organization</option>
<option value="Co-Ed">Co-Ed</option>
<option value="Only Girls">Only Girls</option>
<option value="only Boys">only Boys</option></select>   
</div>

<div class="form-group">
<label>Rating</label> <br>
<input type="text" name="rating" placeholder="OVERALL_RATING" ></input>
<input type="text" name="nameofuser" placeholder="NAME_OF_USER"></input>
</div>


<div class="form-group"> 
<label>Facilities</label> <br>
<textarea  name="facilities_available" placeholder="transportation,sports,library,medical help" cols="50"></textarea>
</div>

<label>social media link</label>
<div class="form-group"> 
<input type="text" name="facebook_link" placeholder="facbook link">
</div>

<div class="form-group"> 
<input type="text" name="twitter_link" placeholder="twitter link">
</div>

<div class="form-group"> 
<input type="text" name="google_plus_link" placeholder="google plus link">
</div>



<!--===============================COURCES / CLASSES===============================-->


<div class="form-head">
<h3><span>Courses</span></h3>
</div>

<div class="form-group"> 

<select  name="modofteaching">
<option value="Regular">Regular</option>
<option value="Part time">Part time</option>
<option value="Evening collage">Evening collage</option>
<option value="Distance Online">Distance Online</option></select>  

</div>

<div class="form-group"> 
<label for="file">Course Duration</label>
<input type="text" name="courseduration" placeholder="Course">	
</div>

<div class="form-group"> 
<label>medium of teaching</label>
<input type="text" name="medium_of_teaching" placeholder="mod_of_teaching">
</div>

<div class="form-group"> 
<label>approval</label>
<input type="text" name="approval" placeholder="approval">
</div>

<div class="form-group"> 
<label for="file">accriditation</label>

<div class="form-group"> 
<input type="accridation" name="accridation" placeholder="accriditation">
</div>

<div class="form-group"> 
<label for="file">Total admission intake</label>
<input type="text" name="total_admissionin_take"  placeholder="total_admissionin_take">
</div>

<div class="form-group"> 
<label for="file">Eligibility</label>
<input type="Cafeteria" name="eligibility"  placeholder="Eligibility">
</div>

<div class="form-group"> 
<label>Entrance exams considered if any</label><br>
<select  name="any_enter_exams"><br>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option></select>
</div>

<div class="form-group"> 
<label>Fees</label>
<input type="text" name="fees"  placeholder="Fees">
</div> 


<div class="form-group"> 
<label for="file">last admission cut-off rankings</label>
<input type="text" name="cut_off"  placeholder="percentage">
</div> 


<label for="file">Admission status</label>
<div class="form-group"> 
<input type="text" name="admission_open"  placeholder=" admission open">     
</div>

<div class="form-group"> 
<label for="file"></label>
<input type="text" name="admission_closed"   placeholder="admission closed">
</div> 


<!--=====================GALLERY DETAILS=====================-->

<div class="form-head">
<h3><span>Gallery Details</span></h3>
</div>

<div class="form-group"> 
<label for="file">Image</label>
<input type="file" name="images" id="file">
</div>

<div class="form-group"> 
<label for="file">Campus</label>
<input type="file" name="campus" id="file">	
</div>

<div class="form-group"> 
<label for="file">Classrooms</label>
<input type="file" name="classrooms" id="file">
</div>

<div class="form-group"> 
<label for="file">Lab</label>
<input type="file" name="Lab" id="file">
</div>

<div class="form-group"> 
<label for="file">Auditorium</label>
<input type="file" name="Auditorium" id="file">
</div>

<div class="form-group"> 
<label for="file">sports</label>
<input type="text" name="sports"  placeholder="sports">
</div>

<div class="form-group"> 
<label for="file">Cafeteria</label>
<input type="Cafeteria" name="Cafeteria"  placeholder="Cafeteria">
</div>

<div class="form-group"> 
<label for="file">Transportation</label>
<input type="text" name="Transportation"  placeholder="Transportation">
</div> 


<div class="form-group"> 
<label for="file">Hostels</label>
<input type="text" name="Hostels"  placeholder="Hosstels">
</div> 


<div class="form-head">
<h3><span>Events Calender</span></h3>
</div>

<label for="file">Past</label>
<div class="form-group"> 
<input type="text" name="past_name"  placeholder="name">
</div> 

<label for="file">Upcoming</label>
<div class="form-group"> 
</div> 

<div class="form-group"> 
<input type="text" name="upcoming_name" placeholder="name">
</div> 

<div class="form-group"> 
<input type="text" name="upcoming_date"  placeholder="date">
</div>

<!--=====================GALLERY DETAILS ENDS HERE=====================-->




<!--=====================CONTACT DETAILS=====================-->


<div class="form-head">
<h3><span>Contact detail</span></h3>
</div>

<div class="form-group"> 
<input type="text" name="contact_number" placeholder="College_cont_num">
</div>

<div class="form-group"> 
<input type="text" name="contact_mail_id" placeholder="Collage mail id">
</div>
<label>Other Contact Details</label>
<div class="form-group"> 

<div class="form-group"> 
<input type="text" name="director_name" placeholder="Director Name">
</div>

<div class="form-group"> 
<input type="text" name="director_number" placeholder="Director Number">
</div>

<div class="form-group"> 
<input type="text" name="director_mail_id" placeholder="Director mail id">
</div>

<div class="form-group"> 
<input type="text" name="coordinator_name" placeholder="coordinator Support Name">
</div>

<div class="form-group"> 
<input type="text" name="coordinator_number" placeholder="coordinator support number">
</div>

<div class="form-group"> 
<input type="text" name="coordinator_mail_id" placeholder="coordinator Support mail id">
</div>

<!--=====================CONTACT DETAILS ENDS=====================-->


<!--=====================PLACEMENT DETAILS=====================-->

<label>Placement</label>
<div class="form-group"> 
<label for="file">COMPANIES VISITED</label>
<input type="text" name="company_name" placeholder="Name/ID">
</div> 

<div class="form-group"> 
<label for="file">COMPANIES VISITED NAME</label>
<input type="text" name="course"  placeholder="Course">
</div> 

<div class="form-group"> 
<label for="file">AVERAGE PACKAGE OFFERD</label>
<input type="text" name="avg_package"  placeholder="Batch">
</div>

</div>


<!--=====================PLACEMENT DETAILS ENDS=====================-->


<!--=====================REVIEW DETAILS ENDS=====================-->



<div class="form-head">
<h3><span>Reviews</span></h3>
</div>
<label>Student reviews</label>
<div class="form-group"> 
<input type="text" name="name" placeholder="Name/ID">
</div> 

<div class="form-group"> 
<input type="text" name="course"  placeholder="Course">
</div> 

<div class="form-group"> 
<input type="text" name="batch"  placeholder="Batch">
</div>

<div class="form-group"> 
<input type="text" name="review_title" placeholder="Review title">
</div>

<div class="form-group"> 
<input type="text" name="review_content" placeholder="Review content">
</div>

<div class="form-group"> 
<input type="date" name="date" placeholder="Date and time reviewed">
</div>



</div>























