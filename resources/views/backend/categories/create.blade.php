@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>

	</div>

	<div class="row">
		<div class="col-md-12">

			<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
				@csrf
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Category Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" >
					@error('name')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" name="photo" >
					@error('photo')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			
			{{-- <select class="form-control form-control-md" id="inputBrand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
					
				</optgroup>
			</select>
				<select class="form-control form-control-md" id="inputsubcategory" name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
					
				</optgroup>
				
			</select> --}}


			<div class="form-group row">

				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" name="btnsave" value="Save" >
				</div>
			</div>

		</div>
		</form>

	</div>


	@endsection