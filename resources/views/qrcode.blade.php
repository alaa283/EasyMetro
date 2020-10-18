@extends('layouts.layout')
@section('map')

<br>

<center>
<a href="#"><img src="{{asset('images/qrcode.jpeg')}}" alt="" width="700px" radius=10px ></a>



<a href={{url('/download')}}> <input type="submit" value="تنزيل التذكرة"> </a>
</center>
@endsection