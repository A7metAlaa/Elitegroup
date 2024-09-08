@extends('admin.admin_master')
@section('admin')
            
  
   <div class="col-lg-12">
       <div class="card card-default">
       <div class="card-header card-header-border-bottom">
           <h2>Create Contact</h2>
       </div>
       <div class="card-body">
           <form action="{{route('store.contact')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="exampleFormControlInput1">Name</label>
                   <input 
                       type="text"
                       value="{{old('name')}}"
                        class="form-control" 
                        name="name"
                        id="name" 
                        placeholder="Alex"
                        autocomplete="on"
                        required
                         >
                        @error('name')    
                        <span class="alert alert-danger"> {{$message }}</span>
                        @enderror
               </div>
               <div class="form-group">
                   <label for="exampleFormControlInput1">Contact Email</label>
                   <input 
                       type="email"
                       value="{{old('email')}}"
                        class="form-control" 
                        name="email"
                        id="email" 
                        placeholder="info@example.com"
                        autocomplete="on"
                        required >
                        @error('email')    
                        <span class="alert alert-danger"> {{$message }}</span>
                        @enderror
               </div>
            
          
            
               <div class="form-group">
                   <label for="contactaddress">Contact Address</label>
                   <input 
                   type="text"
                   value="{{old('address')}}"
                    class="form-control" 
                    name="address"
                    id="address" 
                    placeholder="A108 Adam Street New York, NY 535022."
                    autocomplete="on" 
                    required
                    >
                    @error('address')    
                    <span class="alert alert-danger"> {{$message }}</span>
                    @enderror
               </div>
               <div class="form-group">
                   <label for="exampleFormControcontactphone">Contact phone</label>
                   <input 
                    type="text"
                    value="{{old('phone')}}"
                        class="form-control" 
                        name="phone"
                        id="phone" 
                        placeholder=" +1 5589 55488 51"
                        autocomplete="on"
                        required >
                    @error('phone')    
                    <span class="alert alert-danger"> {{$message }}</span>
                    @enderror
               </div>
              
               <div class="form-footer  pt-5 mt-4 border-top">
                   <button type="submit" class="btn btn-primary btn-default">Submit</button>
                   <a href="{{route('admin.contact')}}" class="text-white">
                     <button   class="btn btn-secondary btn-default" >   
              Back 
                    </button>  </a>
                  
               </div>
           </form>
       </div>
       </div>
   </div>
                      
@endsection