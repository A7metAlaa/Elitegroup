@extends('admin.admin_master')
@section('admin')
  <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  Edit About  </div>
                <div class="card-body">
                        
                   {{-- Brand Edit Successfully message --}}
                   @if(session('success'))
                       <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
                   @endif
 
                    <form action="{{url('update/homeabout/'.$homeabout->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label for="exampleFormControlInput1">About Title</label>
                          <input 
                              type="text"
                              value="{{$homeabout->title}}"
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
                        <label for="exampleFormControlTextarea2">short Description</label>
                        <textarea
                        class="form-control" 
                        id="shortdis" 
                        rows="3"
                        autocomplete="on"
                        name="short_dis">  {{$homeabout->short_dis}}   </textarea>
                       @error('short_dis')    
                       <span class="alert alert-danger"> {{$message }}</span>
                       @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">long Description</label>
                        <textarea
                        class="form-control" 
                        id="shortdis" 
                        rows="3"
                        autocomplete="on"
                        name="long_dis"> {{$homeabout->long_dis}} </textarea>

                       @error('short_dis')    
                       <span class="alert alert-danger"> {{$message }}</span>
                       @enderror
                      </div>
                       
                       
                          <button type="submit" class="btn btn-primary"> Update  About </button>
                          <button type="submit" class="btn btn-dark" > <a href="{{route('home.about')}}" class="text-white">  Back </a> </button>
                        </form>
                </div>
              </div>


         
        </div> 
  </div>
@endsection