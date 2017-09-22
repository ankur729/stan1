<?php 
$body_class ="";
$meta_title ="Stanza Living : My Account";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
//print_r($results);die;

//echo "Student Session ID==>".$value = session('student_id');
//dd(session()->all());
//print_r($results);die;

?>


@extends('layouts.master.front.index')

@section('styles')

@endsection

@section('content')


	<div class="container">
		<div class="work-body">

			<div class="widget-coloum student-profile-page">
				<div class="row">
					<div class="col-md-100 left">
						<div class="col-md-50 left  border-right">
						<h4 class="title">Personal Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Photo</span>
									<div class="data"><span class="thumb"><img src="{{ URL::asset('front/images/icon/profile.jpg') }}"></span></div>
								</li>
								<li class="list">
									<span class="label">Stanza UID</span>
									<span class="data">SL-002501</span>
								</li>
								<li class="list">
									<span class="label">ID Proof&nbsp;<span class="student-browse">*</span></span>
									<div class="data"><input type="file" name=""></div>
								</li>
								<li class="list">
									<span class="label">Guardian’s Name</span>
									<span class="data"><input type="text" name="name"  placeholder="Guardian’s Name.."></span>
									
									<!-- <span class="data">Father Name</span> -->
								</li>
								<li class="list">
									<span class="label">Email ID</span>
									<span class="data"><input type="text" name="emailid"  placeholder="Email ID.."></span>
								</li>
								<li class="list">
									<span class="label">Mobile Number</span>
									<span class="data"><input type="text" name="phone number"  placeholder="Mobile Number.."></span>
								</li>
								<li class="list">
									<span class="label">Date Of Birth</span>
									<span class="data"><input type="text" name="date of birth"  placeholder="Date Of Birth.."></span>
								</li>
								<li class="list">
									<span class="label">Gender</span>
									<span class="data"><input type="text" name="date of birth"  placeholder="Gender.."></span>
								</li>
					</ul>
					</div>
					</div>
					<div class="col-md-50 left  border-right">
						<h4 class="title">Collage Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
							<span class="label">College of Study</span>
							<span class="data"><input type="text" name="College"  placeholder="College of Study.."></span>
						</li>
						<li class="list">
							<span class="label">Course of Study</span>
							<span class="data"><input type="text" name="Course"  placeholder="Course of Study.."></span>
						</li>
						<li class="list">
							<span class="label">Year of study</span>
							<span class="data"><input type="text" name="Year of study"  placeholder="Year of study.."></span>
						</li>
						<li class="list">
							<span class="label">Country</span>
							<span class="data"><input type="text" name="Country"  placeholder="Country.."></span>
						</li>
						<li class="list">
							<span class="label">Blood Group</span>
							<span class="data"><input type="text" name="Blood Group"  placeholder="Blood Group.."></span>
						</li>
						<li class="list">
							<span class="label">Date of Joining</span>
							<span class="data"><input type="text" name="Joining date"  placeholder="Date of Joining.."></span>
						</li>
					</ul>
					</div>
					</div>

				</div>
				<div class="col-md-100 left">
				<div class="col-md-33 left  border-add-right">
						<h4 class="title">Others Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Blood Group</span>
									<span class="data"><input type="text" name="blood group"  placeholder="Blood Group.."></span>
								</li>
								<li class="list">
									<span class="label">Reg. No :</span>
									<span class="data"><input type="text" name="Registered number"  placeholder="Registered Number.."></span>
								</li>
								<li class="list">
									<label class="update-page">Any Medical History / Allergies</label><br>
										<textarea class="text"  rows="4" cols="10" placeholder="Type medical History..."></textarea>
									<!-- <input type="text" name="medical history"  placeholder="Any Medical History.."> -->
								</li>
					</ul>
					</div>
					</div>
						<div class="col-md-33 left  border-add-right">
						<h4 class="title">Address Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Address</span>
									<span class="data"><input type="text" name="Address"  placeholder="Address.."></span>
								</li>
								<li class="list">
									<span class="label">Street</span>
									<span class="data"><input type="text" name="Street"  placeholder="Street.."></span>
								</li>
								<li class="list">
									<span class="label">Landmark</span>
									<span class="data"><input type="text" name="Landmark"  placeholder="Landmark.."></span>
								</li>
								<li class="list">
									<span class="label">City</span>
									<span class="data"><input type="text" name="City"  placeholder="City.."></span>
								</li>
								<li class="list">
									<span class="label">State</span>
									<span class="data"><input type="text" name="State"  placeholder="State.."></span>
								</li>
								<li class="list">
									<span class="label">Country</span>
									<span class="data"><input type="text" name="India"  placeholder="Country.."></span>
								</li>
								<li class="list">
									<span class="label">Pin Code</span>
									<span class="data"><input type="text" name="110092"  placeholder="Pin Code.."></span>
								</li>
					</ul>
					</div>
					</div>
					
					<div class="col-md-33 left  border-add-right">
						<h4 class="title">Emergency Contact Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Name</span>
									<span class="data"><input type="text" name="name"  placeholder="Name.."></span>
								</li>
								<li class="list">
									<span class="label">Address</span>
									<span class="data"><input type="text" name="Preet Vihar"  placeholder="Address.."></span>
								</li>
								<li class="list">
									<span class="label">Email Id </span>
									<span class="data"><input type="text" name="email"  placeholder="Email Id.."></span>
								</li>
								<li class="list">
									<span class="label">Phone Number</span>
									<span class="data"><input type="text" name="Phone number"  placeholder="Phone Number.."></span>
								</li>
					</ul>
					</div>
					</div>
			
					
				</div>
				</div>
			</div>
		<div class="coloum-div">
			<button name="" class="submit-button  pull-right" type="submit">Save</button>
		</div>

		</div>			


  </div>

@endsection	
	