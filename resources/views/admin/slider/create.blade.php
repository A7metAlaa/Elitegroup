 @extends('admin.admin_master')
 @section('admin')
             
   
    <div class="col-lg-12">
        <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.slider')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slider Title</label>
                    <input 
                        type="text"
                        value="{{old('title')}}"
                         class="form-control @error('title') is-invalid @enderror" 
                         name="title"
                         id="slidertitle" 
                         placeholder="Slider Title"
                         autocomplete="on" >
                         @error('title')    
                         <span class="alert alert-danger"> {{$message }}</span>
                         @enderror
                </div>
             
           
                <div class="form-group mt-5">
                    <label for="exampleFormControlTextarea1">Slider Description</label>
                    <textarea
                          class="form-control @error('description') is-invalid @enderror" 
                         id="exampleFormControlTextarea1" 
                         rows="3"
                         autocomplete="on"
                         name="description"
                         placeholder="Describe your slider"
                         value="{{old('description')}}">
                        </textarea>
                        @error('description')    
                        <span class="alert alert-danger"> {{$message }}</span>
                        @enderror
                </div>
                <div class="form-group mt-5">
                    <label >Slider Image </label>
                    <input 
                        type="file" 
                        class="form-control-file @error('sliderimage') is-invalid @enderror" 
                        autocomplete="on" 
                        placeholder="insert Slider Image"
                        name="sliderimage"
                        >
                        @error('sliderimage')    
                        <span class="alert alert-danger"> {{$message }}</span>
                        @enderror
                </div>
                <div class="form-footer  pt-5 mt-4 border-top  mt-3 ">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button   class="btn btn-secondary btn-default" onclick="history.back()">Back</button>
                </div>
            </form>
        </div>
        </div>
    </div>
                       
@endsection