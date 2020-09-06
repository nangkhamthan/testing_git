@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>

	</div>

	<div class="row">
		<div class="col-md-12">

			<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Subcategory Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" 
					value="{{$subcategory->name}}">
					<span class="text-danger">{{$errors->first('name')}}</span>
				</div>
			</div>
			
			
			<label>Category_id</label>
			<select id="inputCategory" name="category_id">
				<optgroup label="Choose category">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
					
				</optgroup>
			</select>
				{{--<select class="form-control form-control-md" id="inputsubcategory" name="subcategory">
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