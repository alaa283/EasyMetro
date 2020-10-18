@extends('layouts.layout')
@section('addlost')
<br>
<br>
<br>
                            <!--/Slider-->
                              <div class="Design">
<form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
      <h1>اضافة منشور</h1>
  <div class="form-group">
        {{ csrf_field() }}
    <label for="exampleInputEmail1">اسم المفقود</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
       <label for="exampleInputEmail1">صورة</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">


  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الوصف</label>
    <input type="text" class="form-control" id="discription" name="description">
  </div>
   <div class="form-group">
             <h3>للتواصل </h3>
    <label for="exampleInputPassword1">الاسم</label>
    <input type="text" class="form-control" id="name" name="name">
       <label for="exampleInputPassword1"> رقم الموبايل </label>
    <input type="text" class="form-control" id="mobile" name="mobile">
  </div>
  
  <button type="submit" class="btn btn-primary">نشر</button>
</form>
                            </div>
                            <!-- from here -->    
                          
                            <!--Design-->

                            <!-- to here -->
        @endsection