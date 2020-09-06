@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>

	</div>

	<div class="row">
		<div class="col-md-12">

			<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
				@csrf
			<div class="form-group row">
				<label for="code_no" class="col-sm-2 col-form-label">Code No</label>
				<div class="col-sm-10">
					<input type="text" name="codeno">
					@error('codeno')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
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
			<div class="form-group row">
				<label for="price" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" >
					@error('price')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" name="discount" value="0" >
					@error('discount')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea name="description"></textarea> 
					@error('description')
						<div class="text-danger">{{($message)}}</div>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Category</label>
			<select  id="inputBrand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
					
				</optgroup>
			</select>
			</div>

			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Sub Category</label>
				<select  id="inputsubcategory" name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
					
				</optgroup>
				
			</select>
		</div>


			<div class="form-group row">

				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" name="btnsave" value="Save" >
				</div>
			</div>

		</div>
		</form>

	</div>


	@endsection