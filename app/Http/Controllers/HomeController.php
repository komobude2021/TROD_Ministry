<?php

namespace App\Http\Controllers;

use App\Helper\Volunteer;
use Illuminate\Http\Request;
use App\Mail\ContactFormEmail;
use App\Http\Requests\AdminLogin;
use Illuminate\Support\Facades\DB;
use App\Mail\VolunteerRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\VolunteerRequest;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $lastestEvent = DB::table('events')->where('deleted_at', null)->orderBy('created_at', 'desc')->limit(1)->get();
        return view('index', compact('lastestEvent'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactsubmit(ContactRequest $req)
    {
        $validated = $req->validated();
        try {
            Mail::to('contact@therootofdavid.co.uk')->send(new ContactFormEmail($validated));
        } catch (\Exception $e) {
            Alert::error('Message Sending Failed', 'Unable To Send Contact Message | Please Try Again')->persistent('Close')->autoclose('4500');
            return back();
        }
        Alert::success('Successful', 'Contact Info Message Successfully Delivered')->persistent('Close')->autoclose('4500');
        return back();
    }

    public function event()
    {
        $events = DB::table('events')->where('deleted_at', null)->orderBy('created_at', 'desc')->limit(8)->get();
        return view('event', compact('events'));
    }

    public function live()
    {
        $live = DB::table('live_view')->where('id', '1')->get();
        return view('live', compact('live'));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function volunteer()
    {
        return view('volunteer');
    }

    public function volunteersubmit(VolunteerRequest $req, Volunteer $volunteer)
    {
        $validated = $req->validated();

        if($volunteer->checkIfEmailExist($validated['email']) == true){
            return back()->with(['errmsg'=>'Volunteer Email Record Already Exist | Duplicate Record Not Allowed'])->withInput();
        }

        if($volunteer->checkIfPhoneNumberExist($validated['full_number']) == true){
            return back()->with(['errmsg'=>'Volunteer Phone Number Details Already Exist | Duplicate Record Not Allowed'])->withInput();
        }
        $volunteer->addNewVolunteer($validated);

        try {
            Mail::to($validated['email'])->send(new VolunteerRegistration($validated));
        } catch (\Exception $e) {
            return back()->with(['success'=>'Volunteer Information Successfully Created']);
        }
        return back()->with(['success'=>'Volunteer Information Successfully Created']);
    }
    
    public function admin()
    {
        return view('admin');
    }

    public function adminsubmit(AdminLogin $req)
    {
        $credentials = $req->validated();
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('admin/index');
        }
        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
    
}
