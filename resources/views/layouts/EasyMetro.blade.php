@extends('layouts.layout')
@section('container')
<div id="Our_Services">
                                <div class="Our_Services">
                                                                        <ul>
                                        <li class="how_share"> <a href="#"></a>
                                            <div class="img"></div>
                                            <h2>وداعا للزحام</h2>
                                            <p>تساعد هذه الخدمة فى مساعدة الدولة فى تقليل الازدحام منعا للاصابة بفيروس كورونا وتقليل العدوى  </p>
                                        </li>
                                        <li class="how_win"> <a href="#"></a>
                                            <div class="img"></div>
                                            <h2>وداعا للوقت الضايع</h2>
                                            <p>تساعد هذه الخدمة فى الممساعدة على عدم الوقوف لشراء التذاكر فتساعدك فى الحفاظ على الوقت </p>
                                        </li>
                                        <li class="how_adv"> <a href="#"></a>
                                            <div class="img"></div>
                                            <h2>وداعا للتذكره الورقيه</h2>
                                            <p>تساعد هذه الخدمة على عدم شراء التذاكر الورقية لمساعدتك فى عدم ضياعها </p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!--/Services-->
                            <div id="Host_Table">
                                <div class="Table_top">
                                    <h2 class="right">الاشتراك <span>الشهرى</span></h2>
                                    <h2 class="left">الاشتراك <span>السنوى</span></h2>
                                </div>
                                <!--/top-->
                                <div class="Table_options">
                                    <div class="options_right">
                                        <img style="width: 240px; height: 100px;" src="images/kelo.jpeg">
                                    </div>
                                    <div class="options_left">
                                        <img style="width: 240px; height: 110px;" src="images/un.png">
                                    </div>
                                </div>
                                <!--/options-->
                                <div class="Table_details">
                                    <ul class="details_right">
                                        
                                        
                                        <li>يسهل عملية الدخول لمدة شهر وبسعر اقل</li>
                                        
                                        <!--<li class="false">تصميم خاص بموقعك</li>-->
                                    </ul>
                                    <ul class="details_left">
                                    
                                        <li>يسهل عملية الدخول لمدة سنة وبسعر اقل</li>
                                     
                                        <!--<li class="false">تصميم خاص بموقعك</li>-->
                                    </ul>
                                </div>
                                <!--/details-->
                                <div class="Table_bottom">
                                    <ul>
                                        <li><a href="{{url('/lineview1')}}" class="right">اطلب الان</a></li>
                                        <li><a href="{{url('/lineview1')}}" class="left">اطلب الان</a></li>
                                    </ul>
                                </div>
                                <!--/bottom-->
                                <div class="Host_Center">
                                    <h2>الاشتر
                                        اك <span>الطلابى</span></h2>
                                    <div class="options">
                                        <img style="width: 240px; height: 150px;" src="images/family.png">
                                    </div>
                                    <ul class="details">
                                        <li>   
        يسهل عملية الدخول لمدة شهر او سنة وبسعر اقل للطلاب</li>
                                    
                                       
                                    </ul>
                                    <div class="center_bottom"><a href="{{url('/lineview1')}}">اطلب الان</a></div>
                                </div>
                                <!--/Host_Center-->
                                <div class="Table_shadow"></div>
                            </div>
                            <!--/Host_Table
                            <div id="Domain_Search">
                                <h2>ملفات الاشتراكات</h2>
                                <nav> <!--<a href="#">بحث جماعى</a> <a href="#">بحث متقدم</a> <a href="#">نقل نطاق</a>--> 
                                <!--<form action="#" method="post">-->
                                    <!--<input type="search" name="domain" placeholder="ادخل اسم النطاق ..." class="domain_text">-->
                                    <!--<input type="submit" class="domain_go" value="تنزيل">
                                    <div class="domain_options">
                                        <p>
                                            <label for="com">العائلى</label>
                                            <input type="radio" class="checkbox" checked name="com" id="com" value="com">
                                        </p>
                                        <p>
                                            <label for="net">الكيلومترى</label>
                                            <input type="radio" class="checkbox" name="net" id="net" value="net">
                                        </p>
                                        <p>
                                            <label for="org">الطالبى</label>
                                            <input type="radio" class="checkbox" name="org" id="org" value="org">
                                        </p>
                                        <p>
                                            <label for="info">الاحتياجات الخاصه</label>
                                            <input type="radio" class="checkbox" name="info" id="info" value="info">
                                        </p>
                                    </div>
                                </form>
                            </div>-->
                            <!--/Domain_Search--> 
@endsection