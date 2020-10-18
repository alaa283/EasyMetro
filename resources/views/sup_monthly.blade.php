@extends('layouts.layout')
@section('ticket')
<br>
<br>
<br>

<center>
<div class="Design">
 <form action="" method="post" action="{{ url('/lineview1')}}" name="sups" id="sups" >
 {{csrf_field()}}
    <span> نوع الاشتراك :</span>
    <select style="width: 200px" class="subscat" id="sub_cat_id" name="sup_name">
        
        <option value="0" disabled="true" selected="true">-Select-</option>
        @foreach($sub as $subs)
            <option value="{{$subs->id}}">{{$subs->sup_cat_name}}</option>
        @endforeach

    </select>

    <span>اختيار عدد المناطق :</span>
    <select style="width: 200px" class="sup_name" name="num_montaka">

        <option value="0" disabled="true" selected="true">line_Name</option>
    </select>
     <br>
    <span>السعر: </span>
    <input type="text" class="price" name="price">

    <br>
    <span>الاسم: </span>
    <input type="text" name="name">

    <br>
    <span>رقم الموبايل: </span>
    <input type="text" name="_num_mobile">
     
    <br>
    <input type="submit" class="login_button" value="ارسال">
</form>


</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.subscat',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findlineName1')!!}',
                data:{'id':cat_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose liness</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].sup_name+'</option>';
                   }

                   div.find('.sup_name').html(" ");
                   div.find('.sup_name').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.sup_name',function () {
            var id=$(this).val();

            var a=$(this).parent();
            console.log(id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPrice1')!!}',
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