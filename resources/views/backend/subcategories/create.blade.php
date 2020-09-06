@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1>

	</div>

	<div class="row">
		<div class="col-md-12">

			<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
				@csrf
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Subcategory Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" >
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>
			{{-- <div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Subcategory ID</label>
				<div class="col-sm-10">
					<input type="number" >
				</div>
			</div> --}}
			<label>Category Id</label>
			<select id="inputCategory" name="category_id">

				<optgroup label="Choose Category">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
					
				</optgroup>
			</select>
				{{-- <select class="form-control form-control-md" id="inputsubcategory" name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
					
				</optgroup> --}}
				
			</select>


			<div class="form-group row">

				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" name="btnsave" value="Save" >
				</div>
			</div>

		</div>
		</form>

	</div>


	@endsection