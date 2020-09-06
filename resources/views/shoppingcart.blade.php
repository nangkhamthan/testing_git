@extends('master')
@section('content')

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{route('mainpage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table text-center">
					<thead>
						<tr>
							
							<th > Product </th>
							<th >  </th>
							<th >  </th>
							<th >Qty</th>
							<th >Price</th>
							<th>Total</th>
							
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						

					</tbody>
					
					<tfoot id="shoppingcart_tfoot">
						<tr>
							<td colspan="5" class="text-right">
								<h3>Total:</h3>
							</td>
							<td>
								<h3 class="total">Ks</h3>
							</td>
						</tr>
						<tr> 
                <td colspan="5"> 
                  <textarea class="form-control notes" id="notes" placeholder="Any Request..."></textarea>
                </td>
                <td colspan="3">
                  @role('Customer')
                    <button class="btn btn-secondary btn-block mainfullbtncolor buy_now"> 
                      Check Out 
                    </button>
                  @else
                    <a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor"> 
                      Login To Check Out 
                    </a>
                  @endrole
                </td>
              </tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center" class="no-item-cart"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="{{route('mainpage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>

		</div>
		

	</div>
	


	


	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	

  	@endsection