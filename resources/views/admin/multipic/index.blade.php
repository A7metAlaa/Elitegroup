@extends('admin.admin_master')
@section('admin')

  <div class="portfolio-container mt-3">
      <div class="row">   
              {{-- All Images uploaded --}}
            @if(empty($multipicimages)) 
            <h2> No images found </h2>
            @else
          <div class="col-md-9">
              <div class="card-group">
                  @foreach($multipicimages as $multi) 
                      <div class="d-flex ">
                        <div class="card" style="width: 17rem;">
                            <img 
                                class="card-img-top"
                                 src="{{asset($multi->image)}}"
                                  alt="Image not found "
                                   title="">
                           </div>
                       </div>
                  @endforeach
                  @endif
              </div>
          </div>
 
          <div class="col-md-3"> 
  
                <div class="card" style="width: 18rem;">
                    <div class="card-header"> Multi Images </div>
                    <div class="card-body">
                        <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                        <label for="Image">multi Image </label>
                        <input type="file"
                                value="{{old('image')}}" 
                                name="image[]" 
                                class="form-control" 
                                id="image" 
                                aria-describedby="image"
                                multiple=""
                                > 
                        @error('image')
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