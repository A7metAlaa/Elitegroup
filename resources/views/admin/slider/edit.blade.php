@extends('admin.admin_master')
@section('admin')
  <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">  Edit Slider  </div>
                <div class="card-body">
                        
                   {{-- Brand Edit Successfully message --}}
                   @if(session('success'))
                       <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
                   @endif
                    <form action="{{url('slider/update/'.$editslider->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"
                               name="old_image" 
                              value="{{$editslider->image}}">
                        <div class="form-group">
                          <label for="exampleFormControlInput1" class="form-label">Update Slider title</label> 
 
                                <input
                                type="text" 
                                name="title" 
                                class="form-control" 
                                id="exampleinput"
                                value="{{$editslider?->title}}"
                                placeholder="{{$editslider?->title}}"
                                 >
                                @error('title')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                        </div>
                        <div class="form-group">
                          <label >Slider Description</label>
 
                          <textarea
                                name="description" 
                                class="form-control" 
                                rows="3" 
                               placeholder="{{$editslider->description}}"
                               autocomplete="true">
                               {{trim($editslider->description)}} </textarea>
                              @error('description')    
                              <span class="alert alert-danger"> {{$message }}</span>
                              @enderror
                      </div>


                        <div class="form-group">
                             <label for="exampleFormControlInput1" class="form-label">update Slider Image</label>
                              <input
                              type="file" 
                              name="slider_image" 
                              class="form-control"  
                              aria-describedby="slider_image"
                              value="{{$editslider?->image}}"
                              placeholder="{{$editslider?->title}}"
                               >
                              @error('slider_image')
                              <span class="text-danger"> {{$message}} </span>
                              @enderror
                      </div>
                      <div class="form-group">
              
                          <img
                            src={{asset($editslider->image ? $editslider->image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/    No-Image-Placeholder.svg/495px-No-Image-Placeholder.svg.png?20200912122019' )}}
                            title="{{$editslider->title}}"
                            alt="{{$editslider->title.' image'}}"
                            style="height:400px; width:300px;"> 
                      </div>
                          <button type="submit" class="btn btn-primary"> Update  Slider </button>
                   <button type="submit" class="btn btn-dark" onclick="history.back()"> Back </button>
                        </form>
                </div>
              </div>


         
        </div> 
  </div>
@endsection