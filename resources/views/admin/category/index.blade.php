<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
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
            <x-nav-link href="{{url('brand/all')}}">Brand </x-nav-link>
          </li>

        </ul>
   
      </div>
    </div>
  </nav>


        <!-- Navigation Links -->
        {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link href="{{route('all.category')}}" > All Category </x-nav-link>
        </div> --}}
        <div class="container">
         <div class="row">   
          
              <div class="col-md-9">
                <div class="card">
                    <div class="card-header "> <span class="font-weight-bold"> All Categories </span>
                     <h2 class="text-center">  Welcome Mr  {{Auth::user() == null ?  '' : Auth::user()->name}}</h2>
                    
                    
                    {{-- category Added Successfully message --}}
                    @if(session('success'))
                        <div class="alert alert-success" role="alert"> <span class="text-center"> {{session('success')}} </span> </div>
                    @endif

                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">user</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">updated_at</th>
                            <th scope="col">deleted_at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $category)
                            <tr>
                                <td scope="row">{{$category->id}}</td>
                            
                                <td>{{$category->category_name ?? 'Not Data set'}}</td>
                              
                                  {{-- <td >{{$category->user->name ?? 'No Data set'}}</td> --}}
                                  <td >{{$category->name ?? 'No Data set'}}</td>
                                
                                 <td>{{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</td>
                              
                                 <td>{{$category->updated_at ?? 'Not Data set'}}</td>
                            
                               <td 
                                  class="{{$category->deleted_at ?? 'text-danger'}}">   {{$category->deleted_at ?? 'Not Data set'}}
                            </td>
                            
                                <td class="d-flex"> 
                                  <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-info"> Edit</a>
                          
                                  <a href="{{url('softdelete/category/update/'.$category->id)}}"  class="btn btn-danger mx-2"> Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{$categories->links()}}
                </div>
              </div>

          </div>
            <div class="col-md-3"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-header"> Add Category </div>
                    <div class="card-body">
                        <form action="{{route('store.category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Category Name</label>
                              <input name="category_name" type="text" class="form-control" id="exampleInputcategoryname"   placeholder="Enter category name">
                              @error('category_name')    
                              <span class="alert alert-danger"> {{$message }}</span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add CATEGORY</button>
                          </form>
                    </div>
                  </div>
            </div>
        </div>
 
        {{-- Tash  --}}  
        <div class="container">
          <div class="row">
            <div class="card">
              <div class="card-header">Tash list  </div>
              <div class="card-body">  
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL</th>
                      <th scope="col">Category name</th>
                      <th scope="col">User</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tbody>
                      @foreach($trashcategory as $trashCat)
                      <tr>
                        <td scope="row">{{$trashCat->id}}</td>
                        <td>{{$trashCat->category_name ?? 'Not Data set'}}</td>
                        <td >{{$trashCat->name ?? 'No Data set'}}</td>
                         <td>
                          {{Carbon\Carbon::parse($trashCat->created_at)->diffForHumans()}}
                         </td>
                         
                         <td class="d-flex"> 
                          <a href="{{url('/category/restore/'.$trashCat->id)}}" class="btn btn-info"> Restore</a>
                  
                          <a href="{{url('pdelete/category/'.$trashCat->id)}}"  class="btn btn-danger mx-2">P Delete</a>
                        </td>
                       </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$trashcategory->links()}}
 
              </div>
            </div>
          </div>
        </div> 
</body>
</html>