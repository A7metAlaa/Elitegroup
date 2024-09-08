<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function HomeAbout(){
        $homeabout  =HomeAbout::latest()->get();
         return view ('admin.home.index',compact('homeabout'));
     }
    public function AddAbout(){
 
        return view ('admin.home.create');
    }
    public function StoreAbout(Request $request){
      
        $validatedData = $request->validate([
            'title' =>'required|unique:home_abouts|max:255|min:4',
            'short_dis' =>'required|min:3|max:500', 
            'long_dis' =>'required|min:3|max:500', 
          ],
         [
            'title.required' =>'Please Type the title',
            'long_dis.required' =>'Please type long description',
            'short_dis.required' =>'Please type short description',
            'long_dis.min' =>'please more than  4 Chars',
            'short_dis.min' =>'please more than  4 Chars',
            'long_dis.max' =>'please type less than  500 Chars',
            'short_dis.max' =>'please type less than  500 Chars',
            ]
        
        );
     
        HomeAbout::insert([
            'title'=>$request->title,
            'short_dis'=>$request->short_dis,
            'long_dis'=>$request->long_dis,
            'Created_at' => Carbon::now()
    
        ]);
        
        toastr()->success('About added successfully');

        return redirect()->route('home.about');


 
    }
    public function EditAbout($id){
        $homeabout = HomeAbout::find($id);
        return view('admin.home.edit',compact('homeabout'));
    }
    public function UpdateAbout(Request  $request ,$id){
        $updateabout= HomeAbout::find($id)->update([
            'title'=>$request->title,
            'short_dis'=>$request->short_dis,
            'long_dis'=>$request->long_dis,
            'Created_at' => Carbon::now()
    
        ]);
        
        toastr()->success('About Editeded successfully');

        return redirect()->route('home.about');

    }

    public function DeleteAbout($id){
        HomeAbout::find($id)->Delete();
        toastr()->error('About Deleted Successfully');
        return redirect()->back();
        // return redirect()->back()->with('success','About Deleted Successfully');
    }
    public function Portfolio(){
         $images = Multipic::all();
        return view('pages.portfolio',compact('images'));
    }
}   
