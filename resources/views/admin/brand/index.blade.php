 @extends('admin.admin_master')
 @section('admin')
 <div class="container">
  <div class="row">   
    {{-- Brand Add Successfully  --}} 
    <div class="col-md-9">
      <div class="card">
          <div class="card-header "> <span class="font-weight-bold"> All Partners </span>
           <h2 class="text-center">  Welcome Mr  {{Auth::user() == null ?  '' : Auth::user()->name}}</h2>
           @if(session('success'))
           <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
          @endif  
      
      {{--  Info! No Brand Found add now .   --}} 
          @if(session('danger'))
          <div class="alert alert-danger text-primary text-center" role="alert">
               <span class="text-center text-dark fw-bold"> {{session('danger')}} </span> 
          </div>
          @endif  
           <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Partner Name</th>
                <th scope="col">Brand Image</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
    
           @if(count($Brands) ==0)
      
        
              <!-- Info Alert -->
            <div class="alert alert-info text-center alert-dismissible fade show">
              <strong class=" text-danger fw-bold">Info!</strong> No Brand  add now .
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
     
           @endif
      
           @foreach($Brands as $Brand)
           <tr>
                 <td scope="row">{{$Brand->id}}</td> 
                 <td value={{old($Brand->brand_name)}}>{{$Brand->brand_name ?? 'Not Data set'}}</td>
                   <td > 
                    <img
                   src={{  asset($Brand->brand_image ? $Brand->brand_image : '../image/imagenotofound.webp' )}}
                    title="{{$Brand->brand_name}}"
                      alt='no image found'
                    style="height:30px; width:30px" > 
         
                  </td> 
   
                   <td>{{Carbon\Carbon::parse($Brand->created_at)->diffForHumans()}}</td>
   
                  <td class="d-flex"> 
                    <a href="{{url('/brand/edit/'.$Brand->id)}}" class="btn btn-info"> Edit</a>
                    <a href="{{url('brand/delete/'.$Brand->id)}}" class="btn btn-danger mx-2"
                      onclick="return confirm('Are sure you want to delete')"> Delete</a>
                  </td>
               </tr>
       
             </tbody>

         
             @endforeach
          
           </table>
           <div class="d-flex justify-content-center font-weight-bold"> {{$Brands->links()}}  </div>
          </div>
        </div>
      </div>
      
    <div class="col-md-3">  
      <div class="card" style="width: 18rem;">
        <div class="card-header"> Add Brand </div>
        <div class="card-body">
          <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Brand Name</label>
              <input value="{{old('brand_name')}}" name="brand_name" type="text" class="form-control" id="exampleInputcategoryname"   placeholder="Enter Brand name">
              
              @error('brand_name')    
              <span class="alert alert-danger"> {{$message }}</span>
              @enderror
            </div>
            
            <label for="Brand Image">Brand Image </label>
            <input type="file" value="{{old('brand_image')}}"  name="brand_image"  class="form-control" id="Brand Image" aria-describedby="Brand Image">
            @error('brand_image')
            <span class="text-danger"> {{$message}} </span>
            @enderror
                <button type="submit" class="btn btn-primary">Add Brand</button>
            </div>
          </form>
            
        </div>

      </div>
  </div> 
</div>

 @endsection