<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller{
    
    public function index($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){
			
			return view('pages.front.my-account');
		}else{
			return view('layouts.master.front.index');			
		}
		
    }
	
public function studentcomplaint($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.student-complaint');
		}else{
			return view('layouts.master.front.index');			
		}
		
}

public function foodmenu($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.food-menu');
		}else{
			return view('layouts.master.front.index');			
		}
		
}

public function invoice($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.invoice');
		}else{
			return view('layouts.master.front.index');			
		}
		
}

public function studentprofile($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.student-profile');
		}else{
			return view('layouts.master.front.index');			
		}
		
}
 
public function voxpopuli($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.vox-populi');
		}else{
			return view('layouts.master.front.index');			
		}
		
}
  
public function latenightout($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.late-night-out');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function stanzasocial($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.stanza-social');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function stanzaboard($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.stanza-board');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function download($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.download');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function studentprofileupdate($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.student-profile-update');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 




   
}
