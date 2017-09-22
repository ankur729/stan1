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
									<span class="data">Father Name</span>
								</li>
								<li class="list">
									<span class="label">Email ID</span>
									<span class="data">info@otrclub.com</span>
								</li>
								<li class="list">
									<span class="label">Mobile Number</span>
									<span class="data">9898989989</span>
								</li>
								<li class="list">
									<span class="label">Date Of Birth</span>
									<span class="data">12/06/1990</span>
								</li>
								<li class="list">
									<span class="label">Gender</span>
									<span class="data">Male</span>
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
							<span class="data">D.U.</span>
						</li>
						<li class="list">
							<span class="label">Course of Study</span>
							<span class="data">B.Com</span>
						</li>
						<li class="list">
							<span class="label">Year of study</span>
							<span class="data">2015</span>
						</li>
						<li class="list">
							<span class="label">Nationality</span>
							<span class="data">Hindu</span>
						</li>
						<li class="list">
							<span class="label">Blood Group</span>
							<span class="data">Any Medical History / Allergies</span>
						</li>
						<li class="list">
							<span class="label">Date of Joining</span>
							<span class="data">27-7-2017</span>
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
									<span class="data">A +ve</span>
								</li>
								<li class="list">
									<span class="label">Any Medical History / Allergies </span>
									<span class="data"> Name of the Allergy</span>
								</li>
								<li class="list">
									<span class="label">Registered Number Details for Late-Night/Night-Out<br> Requests</span>
									<span class="data">7838383838</span>
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
									<span class="data">G11 Preet Vihar</span>
								</li>
								<li class="list">
									<span class="label">Street</span>
									<span class="data"> Preet Vihar</span>
								</li>
								<li class="list">
									<span class="label">Landmark</span>
									<span class="data"> India</span>
								</li>
								<li class="list">
									<span class="label">City</span>
									<span class="data">New Delhi</span>
								</li>
								<li class="list">
									<span class="label">State</span>
									<span class="data">New Delhi</span>
								</li>
								<li class="list">
									<span class="label">Country</span>
									<span class="data"> India</span>
								</li>
								<li class="list">
									<span class="label">Pin Code</span>
									<span class="data">110092</span>
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
									<span class="data">G11 Preet Vihar</span>
								</li>
								<li class="list">
									<span class="label">Address</span>
									<span class="data"> Preet Vihar</span>
								</li>
								<li class="list">
									<span class="label">Email Id </span>
									<span class="data">abc@gmail.com</span>
								</li>
								<li class="list">
									<span class="label">Phone Number</span>
									<span class="data">+91-9999878888</span>
								</li>
					</ul>
					</div>
					</div>
			
					
				</div>
				</div>
		</div>

			</div>
</div>



@endsection
