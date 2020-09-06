@extends('backend.backendtemplate')
@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Product List</h1>

		<a href="{{route('items.create')}}" class="btn btn-success">ADD NEW</a>
	</div>
	<form method="get" action="{{route('orders.index')}}" class="my-5">
          <div class="form-row">
            <div class="col">
              <input type="date" class="form-control" placeholder="Start Date" name="sdate">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="End Date" name="edate">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-success" value="Search">
            </div>
          </div>
        </form>

	<div class="row">
		<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Voucher No</th>
      <th scope="col">User</th>
      
      <th scope="col">Total</th>
      
      <th scope="col">Action</th>
      
      
    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
  	@foreach($orders as $order)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$order->voucherno}}</td>
      <td>{{$order->user->name}}</td>
      <td>{{$order->total}}MMK</td>
      
      
      <td>	<a href="#" class="btn btn-primary">Detail</a>
      		<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
  			
  	</td>

    </tr>
    @endforeach
    
  </tbody>
</table>

	</div>


	@endsection