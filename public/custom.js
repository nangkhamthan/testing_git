$(document).ready(function  () {


          show_cart();


            update_cart_count();

            $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });

          $('.addtocartBtn').click(function(){
            //alert('ok');
            var id=$(this).data('id');
            var  name=$(this).data('name');
            var  price=$(this).data('price');
            var  photo=$(this).data('photo');
            var  discount=$(this).data('discount');
            
            //console.log(id,name,price,photo,discount);
            var product={
                    			id:id,
                   			  name:name,
                     			price:price,
                     			photo:photo,
                     			discount:discount,
                    			qty:1

            }
          //console.log(product);

          add_to_cart(product);

            update_cart_count();

          })

          function add_to_cart(product){
            var mycart=localStorage.getItem('mycart');
            if (!mycart) {
              mycart='{"product_list":[]}';//json string

            }
            var mycart_obj=JSON.parse(mycart);

            var has_id=false;
            $.each(mycart_obj.product_list,function(i,v){
              if (v.id==product.id) {

                has_id=true;
                v.qty+=1;
              }
            })
            if (!has_id) {
                          mycart_obj.product_list.push(product);

                }
            //console.log(mycart_obj);
            localStorage.setItem('mycart',JSON.stringify(mycart_obj));

          }


 
             $("#shoppingcart_table").on('click','.fa-plus-circle',function(){
               var id=$(this).data('id');
               alert(id);
               var mycart=localStorage.getItem('mycart');
                 var mycart_obj=JSON.parse(mycart);
              $.each(mycart_obj.product_list,function(i,v){

                if (v.id==id) {

                              v.qty++;

                            }
                      })

              localStorage.setItem('mycart',JSON.stringify(mycart_obj));
              show_cart();
              update_cart_count();
            })


            $("#shoppingcart_table").on('click','.fa-minus-circle',function(){
              var myid=$(this).data('id');
               //alert(myid);
              var mycart=localStorage.getItem('mycart');
              var mycart_obj=JSON.parse(mycart);
              $.each(mycart_obj.product_list,function(i,v){
                if(v){
                if (v.id==myid) {
                  if (v.qty==1){
                    var ans=confirm("Are you sure to delete?");

                    if (ans) {
                      mycart_obj.product_list.splice(i,1);
                    }
                  }
                  else{
                  v.qty--;
                }
                }
              }
              })
              localStorage.setItem('mycart',JSON.stringify(mycart_obj));
              show_cart();
              update_cart_count();
            })

            function update_cart_count(){
              var mycart=localStorage.getItem('mycart');
            
              if (mycart) {
                var mycart_obj=JSON.parse(mycart);
                if (mycart_obj.product_list.length) {
                 var total=0;
                  $.each(mycart_obj.product_list,function(i,v){
                    //console.log(i,v);
                    total+=v.qty;
                   //console.log(total);
                  })

                  $(".cart_item_count").html(total);

                }else{

                 $(".cart_item_count").html(0);
               }

             }else{

               $(".cart_item_count").html(0);
             }

           }


             $("#shoppingcart_table").on('click','.btn_trash',function(){
               var id=$(this).data('id');
               //alert(id);
               var mycart=localStorage.getItem('mycart');
               var mycart_obj=JSON.parse(mycart);
               $.each(mycart_obj.product_list,function(i,v){
            if(v){
                 if (v.id==id) {
                
                     var ans=confirm("Are you sure to delete?");

            if (ans) {
                       mycart_obj.product_list.splice(i,1);
                     }
            }
               }
               })
               localStorage.setItem('mycart',JSON.stringify(mycart_obj));
               show_cart();
               update_cart_count();
            })



          function show_cart(){

            var mycart=localStorage.getItem('mycart');

            if (mycart) {
              var mycart_obj=JSON.parse(mycart);
            if (mycart_obj.product_list.length) {
                var html='';
                var j=1; var total=0;
                $.each(mycart_obj.product_list,function(i,v){
                    console.log(v);
              if(v) {
                  var id=v.id;
                  var name=v.name;
                  var price=v.price;
                  
                  var photo=v.photo;
                  var qty=v.qty;
                  var subtotal=qty*price;
                  //console.log(subtotal);


                  total+=subtotal;
                  //console.log(total);

                  html+=`
		                  <tr>
		                  
  		                  <td>
                          <i class='btn fa fa-trash btn_trash fa-2x' style='color:red' data-id= '${v.id}'></i>
                        </td>
  		                  <td>
  		                  	<img src='${photo}' width=120 heght=100>
  		                  </td>

  		                  <td>	
  		                  		${name}
  		                  		
  		                  </td>

  		                  <td >
                							<i class='btn fa fa-plus-circle fa-2x' style='color:blue' data-id='${v.id}'></i>
                							<span class='badge badge-success' style='font-size:18px'>${qty}</span>
  		                  	<i class='btn fa fa-minus-circle fa-2x' style = 'color:red' data-id='${v.id}'></i>
  		                  </td>

  		                  <td>
  		                  	${price}
  		                  </td>
  		                  
  		                  <td >
                          ${subtotal} Ks
                        </td>
  		              
  		                </tr>`;
		                  j++;
                      
		                } 
                    

                })
                

       
                $("#shoppingcart_table").html(html);
                $("#total").html(total);
                $(".total").html(total);

              }else{
                $("#shoppingcart_table").html('');
              }
            }else{
              $("table").html('');
              
            }
          }

          $('.buy_now').on('click',function(){
            //alert('ok');
            var notes=$('.notes').val();
            
            var shopString=localStorage.getItem("mycart");
            if (shopString) {
              //alert(shopString);
              //alert(notes);
              $.post("/orders",{shop_data:shopString,notes:notes},function(response){
                if (response) {
                  alert(response);
                  localStorage.clear();
                  getData();
                  location.href="/";
                }
              })
            }
          })

          
        })
