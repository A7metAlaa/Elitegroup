<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function Allcat(){
        // $categories =  DB::table('categories')
        //             //table        //column
        //     ->join('users','categories.user_id','users.id')
        //     ->select('categories.*' , 'users.name')->orderBy('id','ASC')
        //     ->latest()->paginate(5);


        //Pagination with ORM 
        $categories = Category::first()->paginate(5);
        //Pagination with DB facade
        // $categories = DB::table('categories')->paginate(5);
 
        $trashcategory = Category::onlyTrashed()->latest()->paginate(3);


        return view('admin.category.index',compact('categories','trashcategory'));
    }
    public function AddCat(Request $request){

        $validatedData = $request->validate([
            'category_name'=>'required|unique:categories|max:24',
            // 'body'=>'required'
        ],
    
        [   
            //For showing custom error
            'category_name.required'=>'plase Input category name',
            'category_name.max'=>'category must be less than 25 charactsers'
        ]);

        //Method 1
        Category::insert([
            'category_name'=>$request->category_name,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now()

        ]);
        return redirect()->back()->with('success','category Created successfully');
        //Method 2
        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->user_id = Auth::user()->id;
        // $category->save();

     }


     public function Edit($id){

        // $editcategory = Category::find($id);

        //edit with Query Builder
        $editcategory = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('editcategory'));

     }


     public function Update(Request $request ,$id){
        if(Auth::user() !== null ){

            $this->validate($request,[
                'category_name' => 'required|unique:categories|min:3|max:25'
            ]);
            
        
            $data = array();
            $data['category_name'] =  $request->category_name;
            $data['user_id'] =  Auth::user()->id;
            Db::table('categories')->where('id',$id)->update($data);

            return redirect()->route('all.category')->with('success','Category update successfully');
        }else{
            return redirect()->to('login')->with('warning' ,'please sign in ');
        }

 
     }

     
     public function Softdelete( $id){
        $deleteCategory = Category::find($id);
        if($deleteCategory ){
            $deleteCategory->delete();
        }
        return Redirect()->back()->with('success','category Deleted successfully');
 
     }
     
     public function Restore( $id){
        $deleteCategory = Category::withTrashed()->find($id)->restore();
      
        return Redirect()->back()->with('success','category Restored successfully');
 
     }
     
     public function Pdelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
      
        return Redirect()->back()->with('success','category permanet  deleted');

     }


    }

