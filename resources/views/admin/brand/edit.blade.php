@extends('admin.admin_master')
@section('admin')
  <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  Edit Brand  </div>
                <div class="card-body">
                        
                   {{-- Brand Edit Successfully message --}}
                   @if(session('success'))
                       <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
                   @endif
                    <form action="{{url('brand/update/'.$editbrand->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image" value="{{$editbrand->brand_image}}">
                        <div class="form-group">
                          <label for="exampleFormControlInput1" class="form-label">Update Brand Name</label>
                      
                                <input
                                type="text" 
                                name="brand_name" 
                                class="form-control" 
                                id="exampleinput" 
                                value="{{$editbrand->brand_name}}"
                                aria-describedby="emailhelp"
                                value="{{$editbrand ? $editbrand->brand_name : ' '}}"
                                placeholder="{{$editbrand == '' ?? 'Empty'}}"
                                 >
                                @error('brand_name')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                        </div>

                        <div class="form-group">
                             <label for="exampleFormControlInput1" class="form-label">update Brand Image</label>
                              <input
                              type="file" 
                              name="brand_image" 
                              class="form-control" 
                              id="brand_image" 
                              aria-describedby="brand_image"
                              value="{{$editbrand ? $editbrand->brand_image : ' '}}"
                              placeholder="{{$editbrand == '' ?? 'Empty'}}"
                               >
                              @error('brand_image')
                              <span class="text-danger"> {{$message}} </span>
                              @enderror
                      </div>
                      <div class="form-group">
                
                          <img
                            src={{asset($editbrand->brand_image ? $editbrand->brand_image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/    No-Image-Placeholder.svg/495px-No-Image-Placeholder.svg.png?20200912122019' )}}
                            title="{{$editbrand->brand_name}}"
                            alt="{{$editbrand->brand_name.'image'}}"
                            style="height:400px; width:400px"> 
                      </div>
                          <button type="submit" class="btn btn-primary"> Update  Brand </button>
                          <button type="submit" class="btn btn-dark" onclick="history.back()"> Back </button>
                        </form>
                </div>
              </div>


         
        </div> 
  </div>
@endsection