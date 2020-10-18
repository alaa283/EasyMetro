@extends('layouts.layout')
@section('contact')
                            <!--/Slider-->
                              <div class="Design">
<form action="{{ url('/insertContact') }}" method="POST">
        {{ csrf_field() }}
    
      <h1>للتواصل معنا </h1>
 
  
     <div class="form-group">
    
       <label for="exampleInputEmail1">الاسم</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">


  </div>
   <div class="form-group">
           
    <label for="exampleInputPassword1">البريد الالكترونى</label>
    <input type="email" class="form-control" id="email" name="email">
       <label for="exampleInputPassword1">الموضوع</label>
    <input type="text" class="form-control" id="subject" name="subject">
  </div>
   <div class="form-group">
     <label for="exampleInputPassword1">اترك رسالتك</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">ارسال</button>
</form>
                            </div>
                            <!-- from here -->    
                          
                            <!--Design-->

                            <!-- to here -->
        
@endsection