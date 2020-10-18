@extends('layouts.layout')
@section('suggest')
<br><br>
<br>
                            <!--/Slider-->
                              <div class="Design">
<form action="{{ route('insertSuggest') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    
      <h1>تقديم شكوى او مقترح </h1>
 
   <div class="form-group">
    
    <textarea class="form-control" id="text" name="text" rows="3"></textarea>
  </div>
     <div class="form-group">
    
       <label for="exampleInputEmail1">صورة</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">


  </div>
   <div class="form-group">
           
    <label for="exampleInputPassword1">البريد الالكترونى</label>
    <input type="email" class="form-control" id="email" name="email">
       <label for="exampleInputPassword1">رقم الموبايل</label>
    <input type="number" class="form-control" id="mobile" name="mobile">
  </div>
  
  <button type="submit" class="btn btn-primary">ارسال</button>
</form>
                            </div>
                            <!-- from here -->    
                          
                            <!--Design-->

                            <!-- to here -->
        
@endsection