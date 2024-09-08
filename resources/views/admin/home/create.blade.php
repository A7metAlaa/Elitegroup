@extends('admin.admin_master')
@section('admin')
            
  
   <div class="col-lg-12">
       <div class="card card-default">
       <div class="card-header card-header-border-bottom">
           <h2>Create About info</h2>
       </div>
       <div class="card-body">
           <form action="{{route('store.about')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="exampleFormControlInput1">About Title</label>
                   <input 
                       type="text"
                       value="{{old('title')}}"
                        class="form-control" 
                        name="title"
                        id="abouttitle" 
                        placeholder="About Title"
                        autocomplete="on" >
                        @error('title')    
                        <span class="alert alert-danger"> {{$message }}</span>
                        @enderror
               </div>
            
          
               <div class="form-group">
                   <label for="exampleFormControlTextarea1">short Description</label>
                   <textarea
                        class="form-control" 
                        id="exampleFormControlTextarea1" 
                        rows="3"
                        autocomplete="on"
                        name="short_dis"
                        value="{{old('short_dis')}}">
                       </textarea>
                       @error('short_dis')    
                       <span class="alert alert-danger"> {{$message }}</span>
                       @enderror
               </div>
               <div class="form-group">
                   <label for="exampleFormControlTextarea1">Long Description</label>
                   <textarea
                        class="form-control" 
                        id="exampleFormControlTextarea2" 
                        rows="3"
                        autocomplete="on"
                        name="long_dis"
                        value={{old('long_dis')}}>
                       </textarea>
                       @error('long_dis')    
                       <span class="alert alert-danger"> {{$message }}</span>
                       @enderror
               </div>
              
               <div class="form-footer  pt-5 mt-4 border-top">
                   <button type="submit" class="btn btn-primary btn-default">Submit</button>
                   <button   class="btn btn-secondary btn-default" onclick="history.back()">Back</button>
               </div>
           </form>
       </div>
       </div>
   </div>
                      
@endsection