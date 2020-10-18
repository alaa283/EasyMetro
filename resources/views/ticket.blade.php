@extends('layouts.layout')
@section('ticket')
<br>
<br>
<br>

<center>
<div class="Design">
 <form action="" method="post" action="{{ url('/lineview')}}" name="dailytickets" id="dailytickets" >
 {{csrf_field()}}
	<span> رقم الخط  </span>
	<select style="width: 200px" class="linecategory" id="line_cat_id" name="sup_name1">
		
		<option value="0" disabled="true" selected="true">-Select-</option>
		@foreach($line as $cat)
			<option value="{{$cat->id}}">{{$cat->line_cat_name}}</option>
		@endforeach

	</select>

	<span>  محطة القيام </span>
	<select style="width: 200px" class="line_name" name="num_montaka1">

		<option value="0" disabled="true" selected="true">line_Name</option>
	</select>

	<br>


	<span>رقم الخط</span>
	<select style="width: 200px" class="linecategory1" id="line_cat_id" name="sup_name2">
		
		<option value="0" disabled="true" selected="true">-Select-</option>
		@foreach($line as $cat)
			<option value="{{$cat->id}}">{{$cat->line_cat_name}}</option>
		@endforeach

	</select>

	<span> محطة الوصول</span>
	<select style="width: 200px" class="line_name1" name="num_montaka2">

		<option value="0" disabled="true" selected="true">line_Name</option>
	</select>
<br>
	<span>السعر: </span>
	<input type="text" class="price" name="price"><br>
	<span>رقم الموبايل او الحساب: </span>
	<input type="text" name="_num_mobile">
     
	<br>
	<input type="submit" class="login_button" value="ارسال">
</form>



</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.linecategory',function(){
			// console.log("hmm its change");

			var cat_id=$(this).val();
			// console.log(cat_id);
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findlineName')!!}',
				data:{'id':cat_id},
				success:function(data){
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>chose liness</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].line_name+'</option>';
				   }

				   div.find('.line_name').html(" ");
				   div.find('.line_name').append(op);
				},
				error:function(){

				}
			});
		});

		$(document).on('change','.line_name',function () {
			var id=$(this).val();

			var a=$(this).parent();
			console.log(id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findPrice')!!}',
				data:{'id':id},
				dataType:'json',//return data will be json
				success:function(data){
					//console.log("price");
					//console.log(data.price);

					// here price is coloumn name in products table data.coln name

					//a.find('.price').val(data.price);

				},
				error:function(){

				}
			});


		});

	});

	$(document).ready(function(){

		$(document).on('change','.linecategory1',function(){
			// console.log("hmm its change");

			var cat_id=$(this).val();
			// console.log(cat_id);
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findlineName')!!}',
				data:{'id':cat_id},
				success:function(data){
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>chose liness</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].line_name+'</option>';
				   }

				   div.find('.line_name1').html(" ");
				   div.find('.line_name1').append(op);
				},
				error:function(){

				}
			});
		});

		$(document).on('change','.line_name1',function () {
			var id=$(this).val();

			var a=$(this).parent();
			console.log(id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findPrice2')!!}',
				data:{'id':id},
				dataType:'json',//return data will be json
				success:function(data){
					console.log("price");
					console.log(data.price);

					// here price is coloumn name in products table data.coln name

					a.find('.price').val(data.price);

				},
				error:function(){

				}
			});


		});

	});
</script>







































          @endsection