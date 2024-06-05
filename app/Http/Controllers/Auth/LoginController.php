<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Bg_image;
use Auth;


class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    public function logout(Request $request)
    {
        auth('vendor')->logout();

        return redirect('/');
    }
    public function customerLogout(){

        auth('customer')->logout();

        return redirect('/');
    }

    public function adminLogout(){

        Auth::logout();

        return redirect('/login');
    }


    //admin login


    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('/admin/home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    /////

     public function showVendorLoginForm()
    {
        
        $url = "vendor";
        $data['banner_image'] = Bg_image::find(1);
        $auth = Auth::guard('vendor');
        if ($auth->check()) {
            return redirect((route('vendor')));
        }
        else
        return view('auth.VendorLogin',compact('data'),['url' => $url]);
    }

    public function vendorLogin(Request $request)
    {
        // print_r($request->all());die();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $find_active = Vendor::where('email' , '=', $request->email )->get();

        foreach($find_active as $find){

        if($find->account_status == "1"){

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/vendor-home')->with('success','Login successfully!');
        }
        return back()->with('success','Login Failed!');

    }
    }
    // flash('Your Not allowed to login until admin action')->success();

    return redirect()->back()->with('SuccessMsg', 'Your Not allowed to login until admin action');
    
}

     public function showCustomerLoginForm()
    {

      
        
        $auth = Auth::guard('customer');
        if ($auth->check()) {
            return redirect((route('customer')));
        }
        else
        $data['banner_image'] = Bg_image::find(1);
        return view('auth.customerLogin',compact('data'), ['url' => 'customer']);
    }

    public function customerLogin(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/customer-home')->with('success','Login successfully!');
        }
        return back()->withInput($request->only('email', 'remember'))->with('success','Login Failed!');
    }


}