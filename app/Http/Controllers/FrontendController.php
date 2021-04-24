<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\SocialMedia;
use DB;
 
use Carbon\Carbon;
use Validator;
use Session;
 


class FrontendController extends Controller
{
    
    
    public function adminlogin()
	{

		return view('auth.login');
	}



	public function adminLogindeshboard(Request $request)

	{

		$input = $request->all();
  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    
	} 
    
    
    
	public function index() 
	{ 
		return view('frontend.pages.index');
	}



	public function onlinepharmacy()
	{
		return view('frontend.pages.onlinepharmacy');
	}

	public function homecare()
	{
		return view('frontend.pages.homecare');
	}
 
	
	public function telemedicine()
	{
		return view('frontend.pages.telemedicine');
	}
 
	
	public function medicaltourism()
	{
		return view('frontend.pages.medicaltourism');
	}
 
	 
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 
	

}
