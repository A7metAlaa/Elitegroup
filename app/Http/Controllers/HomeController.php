<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  
    public function __construct()
    {
        Auth::check();
        $this->middleware('auth');
    }


    
    public function HomeSlider(){
        $sliders = DB::table('sliders')->orderBy('id', 'DESC')->get();
 
  
        return view('admin.slider.index',compact('sliders'));
    }

    public function AddSlider(){
         return view('admin.slider.create');
    }
    public function StoreSlider(Request $request){ 
     
        $request->validate([
            'title' =>'required|unique:sliders|max:255|min:5',
            'description' =>'required|max:255|min:5',
            'sliderimage' =>'required|mimes:jpg,jpeg,png', 
         ],[
            'description.max' =>'Description must be less than 255 characters'
        ],
        
        );
     
       
         $Slider_image= $request->file('sliderimage');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($Slider_image->getClientOriginalExtension());
            $img_name = $name_gen .'.' . $img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $Slider_image->move($up_location,$img_name);
     
        Slider::insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=> $last_img,
            'Created_at' => Carbon::now()
    
        ]);
    
        return redirect()->route('home.slider')->with('success' , 'Slider Added Succesffully');
    
    }

    public function edit(string $id , Request $request)
    { 
        
        $editslider = Slider::find($id);
        return view('admin.slider.edit' , compact('editslider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   

         $request->validate([
            'title' =>'required|max:255|min:4',
            'description'=>'max:255'
         ], 
        
        );
           
        $old_image = $request->old_image; 
        $slider_image= $request->file('slider_image'); 
        if(!file_exists($old_image))
        { 
        return redirect()->back()->with('danger' , 'its and old Slider and doesn`t exist please go back now please remove it '); 
        };

        if($slider_image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen .'.' . $img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $slider_image->move($up_location,$img_name);
             
            unlink($old_image); 
         
            Slider::find($id)->update([
                'title'=>$request->title,
                'image'=> $last_img,
                'description'=>$request->description,
                'Created_at' => Carbon::now() 
            ]);
         
            return redirect()->route('home.slider')->with('success' , 'Slider Edited Succesffully'); 
        }else {
            Slider::find($id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'Created_at' => Carbon::now() 
            ]); 
            return redirect()->route('home.slider')->with('success' , 'Slider Edited Succesffully'); 
        }
        
    }


    public function destroy(string $id)
    {
        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Slider::find($id)->delete();
        return redirect()->back()->with('success' , 'Slider Deleted Succesffully');
    }



    
}
