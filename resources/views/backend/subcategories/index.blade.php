@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">SubCategory List</h1>
		<a href="{{route('subcategories.create')}}" class="btn btn-success">ADD NEW</a>
	</div>

	<div class="row">
		<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">SubCategory Name</th>
      <th scope="col">Category ID</th>
      
      
      
      <th scope="col">Action</th>
      
      
    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
  	@foreach($subcategories as $subcategory)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$subcategory->name}}</td>
      <td>{{$subcategory->category_id}}</td>
      
      
      <td>	<a href="#" class="btn btn-primary">Detail</a>
      		<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-info">Edit</a>
  			
  	</td>
    <td>
      <form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
              @csrf
              @method('DELETE')
                  <input type="submit" class="btn btn-danger" value="Delete">
          </form>
    </td>

    </tr>
    @endforeach
    
  </tbody>
</table>

	</div>


	@endsection