@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>

	</div>

	<div class="row">
		<div class="col-md-12">

			<form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" 
					value="{{$brand->name}}">
					@error('name')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" name="photo"><br><br>
					@error('photo')
						<div class="text-danger">{{($message)}}</div>
					@enderror
					<img src="{{asset($brand->photo)}}" width="120" height="100">

					<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
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
					<input type="submit" class="btn btn-primary" name="btnedit" value="update" >
				</div>
			</div>

		</div>
		</form>
	</div>

	</div>
</div>


	@endsection