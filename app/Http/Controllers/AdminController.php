<?php

namespace App\Http\Controllers;

use App\Models\Job;

use App\Models\User;
use App\Models\Career;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Partner;
use App\Models\University;
use App\Models\Registration;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Middleware\AdminMiddleware;


class AdminController extends Controller
{
    public function index(){

        $reg = Registration::count();
        
        $postgraduate = Job::where('education', 'LIKE', 'Postgraduate')->count();
        $graduate = Job::where('education', 'LIKE', 'Undergraduate')->count();
        $college = Job::where('education', 'LIKE', 'College')->count();
        $vocational = Job::where('education', 'LIKE', 'Cocational')->count();
        $kcse = Job::where('education', 'LIKE', 'Secondary')->count();
    
        return view('backend.admin', [
            'reg' => $reg,
          
            'postgraduate' => $postgraduate,
            'graduate' => $graduate,
            'college' => $college,
            'vocational' => $vocational,
            'kcse' => $kcse
        ]);
    }
    public function userhome(){

        $reg = Registration::get();
    
    
        return view('backend.home', compact('reg'));
    }
 
    public function create(){
        return view('backend.career.create');
    }

    //Registration Page

        public function store(Request $request) {

            $job = new Career();
            $job->title = $request->input('title');
            $job->tmode = $request->input('tmode');
            $job->start_date = $request->input('startdate');
            $job->end_date = $request->input('enddate');
            $job->description = $request->input('description');
            
            
            if ($request->hasfile('image')) {
                $avatar = $request->file('image');
                $filename = time().'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
                $avatar->move('public/uploads/image_files/', $filename);
                $job->image = $filename;
            }
    
            $job->save();

        return redirect('/admin/opportunities/view')->with('status', 'record added successfully');
        }
       
        public function profile(Request $request,$id)
        {
            $job = Job::findOrFail($id);
            // dd($property);
    
            return view('backend.career.profile')->with('Job', $job);
        }

        public function groupview(Request $request,$id)
        {
            $register = Registration::findOrFail($id);
            // dd($property);
    
            return view('backend.career.group')->with('Registration', $register);
        }


        public function cv(Request $request,$id)
        {
            $reg = Registration::findOrFail($id);
            // dd($property);
            return view('backend.career.applicant')->with('Registration', $reg);
            
        }


        public function view(){

            $jobs= Career::get();
            return view('backend.career.index', compact('jobs'));
        }

        public function adduser(){

            $users= User::get();
            return view('backend.users.create', compact('users'));
        }

        public function viewuser(){

            $users= User::get();
            return view('backend.users.index', compact('users'));
        }

        public function userstore(Request $request){

            $users = new User();
            $users->name = $request->input('fullname');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            
    
            $users->save();

        return redirect('/users')->with('status', 'record added successfully');
        }

        public function youthregistration(){
            $reg = Registration::get();
            
            return view('backend.reports.employment', compact('reg'));
        }
        public function postg(){
            $reg = Registration::where('education','Postgraduate')->get();
            
            return view('backend.reports.postgraduate', compact('reg'));
        }
        public function underg(){
            $reg = Registration::where('education','Undergraduate')->get();
            
            return view('backend.reports.graduate', compact('reg'));
        }
        public function college(){
            $reg = Registration::where('education','College')->get();
            
            return view('backend.reports.college', compact('reg'));
        }
        public function vocational(){
            $reg = Registration::where('education','Vocational')->get();
            
            return view('backend.reports.vocational', compact('reg'));
        }
        public function kcse(){
            $reg = Registration::where('education','secondary')->get();
            
            return view('backend.reports.secondary', compact('reg'));
        }
        public function kcpe(){
            $reg = Registration::where('education','primary')->get();
            
            return view('backend.reports.primary', compact('reg'));
        }
        public function madarasa(){
            $reg = Registration::get();
            
            return view('backend.reports.madarasa', compact('reg'));
        }


        public function contact(){
            $msg = Message::where('status',0)->get();
            
            return view('backend.messages', compact('msg'));
        }

        public function galleryadd(){
            $gal = Gallery::get();
            
            return view('backend.gallery.create', compact('gal'));
        }
        public function galleryview(){
            $gal = Gallery::get();
            
            return view('backend.gallery.index', compact('gal'));
        }

        public function userview(Request $request,$id)
        {
            $user = User::findOrFail($id);
            // dd($property);
    
            return view('backend.users.edit')->with('User', $user);
        }

        public function usersupdate(Request $request,$id){

            $users = User::find($id);
            $users->name = $request->input('fullname');
            $users->email = $request->input('email');
            $users->role = $request->input('role');
            
    
            $users->save();

        return redirect('/users')->with('status', 'User record updated successfully');
        }


        public function gallery(Request $request) {

            $gal = new Gallery();
           
            $gal->title = $request->input('title');
            $gal->description = $request->input('description');
            if ($request->hasfile('image')) {
                $avatar = $request->file('image');
                $filename = time().'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->save(public_path('uploads/image_files/'.$filename));
                $avatar->move('public/uploads/image_files/', $filename);
                $gal->image = $filename;
            }
            $gal->save();
            $request->session()->flash('success', 'Data submitted successfully.');
        
        return redirect('/gallery');
        }
        public function __construct()
        {
            $this->middleware('auth');
        }
// opportunities edit
public function jobedit(Request $request,$id)
{
    $user = Career::findOrFail($id);
    // dd($property);

    return view('backend.career.edit')->with('Career', $user);
}


/// opportunity update
public function jobupdate(Request $request,$id){

    $users = Career::find($id);
    $users->type = $request->input('type');
    $users->title = $request->input('title');
    $users->description = $request->input('description');
    $users->status = $request->input('status');
    $users->venue = $request->input('venue');
    $users->vacancy = $request->input('vacancy');
    if ($request->hasfile('image')) {
        $avatar = $request->file('image');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $users->image = $filename;
    }
    

    $users->save();

return redirect('/view-opportunities')->with('status', 'User record updated successfully');
}

public function partneradd(){
    $gal = Partner::get();
    
    return view('backend.partner.create', compact('gal'));
}
public function partner(){
    $gal = Partner::get();
    
    return view('backend.partner.index', compact('gal'));
}
public function partnerstore(Request $request) {

    $gal = new Partner();
   
    $gal->partner = $request->input('partner');
    if ($request->hasfile('image')) {
        $avatar = $request->file('image');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $gal->image = $filename;
    }
    $gal->save();
    $request->session()->flash('success', 'Data submitted successfully.');

return redirect('/partner');
}

public function application(){
    // $applications = Application::orderBy('created_at','desc')->paginate(15);
    return view('backend.applications.create');

}
public function appstore(Request $request) {
    $user = auth()->user();
    $reg = new Registration();
    $reg->user_id = $user->id;
    $reg->idno = $request->input('idno');
    $reg->mobile = $request->input('phone');
    $reg->education = $request->input('education');
    $reg->qualification = $request->input('qualification');
    $reg->ward = $request->input('ward');
    $reg->subcounty = $request->input('subcounty');
    $reg->gender = $request->input('gender');
    $reg->pwd = $request->input('pwd');
    $reg->passport = $request->input('passport');
    $reg->passport_no = $request->input('passportno');
    $reg->employer = $request->input('employer');
    $reg->position = $request->input('job');
    $reg->work = $request->input('duties');
    $reg->exp_year = $request->input('experience');
    $reg->grade = $request->input('grade');
    $reg->skills = $request->input('skills');
    $reg->parent_name = $request->input('parentname');
    $reg->parent_no = $request->input('pphone');
    $reg->passport_date = $request->input('passdate');
    $reg->birth_date = $request->input('dob');
    $reg->career_type = $request->input('career');
    if ($request->hasfile('image')) {
        $avatar = $request->file('image');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $reg->image = $filename;
    }
    if ($request->hasfile('id_copy')) {
        $avatar = $request->file('id_copy');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $reg->id_copy = $filename;
    }
    $reg->save();
    $request->session()->flash('success', 'Data saved successfully.');

   return redirect('/user/home');
}

public function appview(Request $request,$id)
{
    $reg = Registration::findOrFail($id);
    // dd($property);

    return view('backend.applications.show')->with('Registration', $reg);
}
public function appupdate(Request $request,$id){

    $user = auth()->user();
    $reg =Registration::find($id);;
    $reg->user_id = $user->id;
    $reg->idno = $request->input('idno');
    $reg->mobile = $request->input('phone');
    $reg->education = $request->input('education');
    $reg->qualification = $request->input('qualification');
    $reg->ward = $request->input('ward');
    $reg->subcounty = $request->input('subcounty');
    $reg->gender = $request->input('gender');
    $reg->pwd = $request->input('pwd');
    $reg->passport = $request->input('passport');
    $reg->passport_no = $request->input('passportno');
    $reg->employer = $request->input('employer');
    $reg->position = $request->input('job');
    $reg->work = $request->input('duties');
    $reg->exp_year = $request->input('experience');
    $reg->grade = $request->input('grade');
    $reg->skills = $request->input('skills');
    $reg->parent_name = $request->input('parentname');
    $reg->parent_no = $request->input('pphone');
    $reg->passport_date = $request->input('passdate');
    $reg->birth_date = $request->input('dob');
    $reg->career_type = $request->input('career');
    if ($request->hasfile('image')) {
        $avatar = $request->file('image');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $reg->image = $filename;
    }
    if ($request->hasfile('id_copy')) {
        $avatar = $request->file('id_copy');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $reg->id_copy = $filename;
    }
    $reg->save();
    $request->session()->flash('success', 'Data updated successfully.');

   return redirect('/user/home');
}

public function fetchCareers()
{
    $careers = Career::all(); 
    return response()->json($careers);
}



}