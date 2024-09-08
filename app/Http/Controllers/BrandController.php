<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;

class BrandController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
 
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $Brands = Brand::latest()->paginate(5);
        return view('admin.brand.index',compact('Brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
     $validatedData = $request->validate([
        'brand_name' =>'required|unique:brands|max:255|min:3',
        'brand_image' =>'required|mimes:jpg,jpeg,png', 
     ],
     [
        'brand_name.required' =>'Please Input Brand Name',
        'brand_name.max' =>'Brand must be  less than 255 Chars',
        'brand_name.min' =>'Brand must  more than 2 Chars',
      ]
    
    );
 
   
     $brand_image= $request->file('brand_image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen .'.' . $img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);


    //  $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
    //   $last_img = 'image/brand/'.$name_gen;

    Brand::insert([
        'brand_name'=>$request->brand_name,
        'brand_image'=> $last_img,
        'Created_at' => Carbon::now()

    ]);

    return redirect()->back()->with('success' , 'Brand Added Succesffully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editbrand = Brand::find($id);
        return view('admin.brand.edit' , compact('editbrand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'brand_name' =>'required|max:255|min:2',
     
         ],
         [
            'brand_name.required' =>'Please Input Brand Name',
            'brand_name.max' =>'Brand must be  less than 255 Chars',
            'brand_name.min' =>'Brand must  more than 4 Chars',
          ]
        
        );

        $old_image = $request->old_image;
        $brand_image= $request->file('brand_image');
            
        if(!file_exists($old_image))
        {
            return redirect()->to('brand/all')->with('danger' , 'its and old brand and doesn`t exist now please remove it '); 



        };

        if($brand_image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen .'.' . $img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location,$img_name);
             
            unlink($old_image); 
         
            Brand::find($id)->update([
                'brand_name'=>$request->brand_name,
                'brand_image'=> $last_img,
                'Created_at' => Carbon::now() 
            ]);
         
            return redirect()->to('brand/all')->with('success' , 'Brand Edit Succesffully'); 
        }else {
            Brand::find($id)->update([
                 'brand_name'=>$request->brand_name,
                 'Created_at' => Carbon::now()
        
            ]);
        
            return redirect()->back()->with('success' , 'Brand Edit Succesffully');
            
        }
        
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Brand::find($id)->delete();
        return redirect()->back()->with('success' , 'Brand Deleted Succesffully');
    }

    //Multi Image All methods

    public function Multipic()
    {
  
       $multipicimages= Multipic::all();
        return view('admin.multipic.index' , compact('multipicimages'));
    }


    public function Storemultiimage(Request  $request)
    {
        $image = $request->file('image');
        foreach($image as $multi_img ){
            $name_gen = hexdec(uniqid()). '.'.$multi_img->getClientOriginalExtension();
            Image::read($multi_img )->resize(300,300)->save('image/multi/'.$name_gen);
            $last_img = 'image/multi/'.$name_gen;
            Multipic::insert([
                'image'=>$last_img,
                'created_at'=>Carbon::now()
            ]);
           
            
        }  //end of foreach
        return redirect()->back()->with('success' , 'Image added  Succesffully');

    }


    public function Logout(Request $request):RedirectResponse{
 
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('login')->with('success' , 'User Logout');
    }

}
