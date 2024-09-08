<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <x-nav-link href="{{route('all.category')}}" > All Categories </x-nav-link>
            <x-nav-link href="{{route('dashboard')}}">Dashboard </x-nav-link>
            <x-nav-link href="{{url('movies')}}">Movies </x-nav-link>
          </li>

        </ul>
   
      </div>
    </div>
  </nav>
  <div class="container">

        <div class="col-md-8">

            <div class="card">
                <div class="card-header">  Edit category  </div>
                <div class="card-body">
                        
                   {{-- category Edit Successfully message --}}
                   @if(session('success'))
                       <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
                   @endif
                    <form action="{{url('category/update/'.$editcategory->id )}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleinput">update Category Name <label>
                             
                              @error('category_name')
                              <span class="text-danger"> {{$message}} </span>
                              @enderror
                            <input
                                type="text" 
                                name="category_name" 
                                class="form-control" 
                                id="exampleinput" 
                                aria-describedby="emailhelp"
                                value="{{$editcategory ? $editcategory->category_name : ' '}}"
                                placeholder="{{$editcategory == '' ?? 'Empty'}}" >
                              </div>
                              <button type="submit" class="btn btn-primary"> Update  Category </button>
                            <button type="submit" class="btn btn-dark" onclick="history.back()"> Back </button>
                        </form>
                </div>
              </div>


         
        </div> 
  </div>
</body>
</html>