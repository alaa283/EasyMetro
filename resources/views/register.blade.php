@extends('layouts.layout')
@section('register')
                            <!-- from here -->    
                            <div class="h2_msg">
                                <!--<p>هنا تكتب كلمة او ملحوظة عند تسجيل الدخول</p>
                                <p>هنا تكتب كلمة او ملحوظة عند تسجيل الدخول</p>-->
                                 @if(Session:: has ('flash_message_error'))

    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>   {!! session('flash_message_error') !!}</strong>
    </div>
  @endif
        @if(Session:: has ('flash_message_success'))

            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>   {!! session('flash_message_success') !!}</strong>
            </div>
        @endif
                            </div>
                            

                            <div class="Login_Form">
                                <div class="top">
                                    <h2>التسجيل فى الموقع</h2>
                                    <p>فضلا يرجى ملأ الحقول أدناه لتسجيل الدخول لحسابك ، في حالة
                                        فقدت كلمة المرور المرجو الإستعانة بطلب استعادة كلمة المرور</p>
                                </div>
                                <form action="{{url('/userRegister')}}" method="post">{{ csrf_field() }}
                                    <label>الاسم
                                        <input id="name" type="text" name="name" class="login_name" placeholder="" value="">
                                    </label>
                                    <label>البريد الالكتروني
                                        <input id="email" type="email" name="email" class="login_email" placeholder="" value="">
                                    </label>
                                    <label>كلمة المرور
                                        <input type="password" name="password" class="login_pass" placeholder="">
                                    </label>
                                    <label class="remmber">
                                        <input type="checkbox" class="" name="rememberme">
                                        تذكرنى  </label>
                                    <input type="submit" class="login_button" value="دخول">
                                </form>
                            </div>
                            <!--/Login_Form-->
                            <div class="Register_Info">
                                <div class="top">
                                    <h2>تسجيل عميل جديد</h2>
                                    <p>إن التسجيل في الموقع وفتح حساب جديد، يجعلك عضو في الموقع وبالتالي التمتع بكافة صلاحيات العضو، مكن امكانية تقديم طلبات و الإطلاع على تفاصيل طلبك، من فواتير و مستحقات ومتابعة حالة الطلبات التي تقوم بها.</p>
                                </div>
                                <a href="{{url('/register')}}">تسجيل عميل جديد</a> </div>
                            <!--/Register_Info-->
                            <div class="Lost_Pass">
                                <p>هل نسيت كلمة المرور؟ <a href="">طلب استعادة كلمة المرور</a></p>
                            </div>
                            <!--/Lost_Pass-->

                            <!-- to here -->
        

                 @endsection