<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>إيزى مترو</title>
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style_whmcs-blue.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/slicebox.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/skins/blue.css')}}">
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    </head>
    <body>
        <div id="Wrapper">
            <div id="Wrapper_Content">
                <div id="Container">
                    <header>
                        <div id="Header">
                            <div class="Logo"></div>
                            <div class="Social_Icon">
                                <ul>
                                    <li class="facebook"><a href="#" target="_blank" title="facebook"></a></li>
                                    <li class="twitter"><a href="#" target="_blank" title="twitter"></a></li>
                                    <li class="youtube"><a href="#" target="_blank" title="youtube"></a></li>
                                    <li class="rss"><a href="#" target="_blank" title="rss"></a></li>
                                </ul>
                            </div>
                            <!--/Social_Icon-->
                            <div class="Live_Support"><a href="#"><img src="images/Live_Support.jpg" alt=""></a></div>
                            <nav>
                                <div class="Menu">
                                    <div class="Menu_right"><a href="{{url('/index')}}"></a></div>
                                    <ul>
                                        <li><a href="#">الخدمات</a>
                                            <ul>
                                                <li><a href="{{ url('/showpost') }}">متابعة المفقودات</a></li>
                                                <li><a href="{{ url('/addlost') }}">اضافة منشور</a></li>
                                                <li><a href="{{ url('/suggestPage') }}">الشكاوى والاقتراحات</a></li>
                                             
                                             
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/map') }}">خريطه المترو</a></li>
                                        <li><a href="{{ url('/lineview1')}}">الاشتراكات</a>
                                           
                                        </li>
                                        
                                      <li><a href="{{ url('/use') }}">كيفيه الاستخدام</a></li>
                                        
                                        <li><a href="{{url('/register')}}">التسجيل</a></li>
                                        <li><a href="{{url('/contact')}}">إتصل بنا</a></li>
                                    </ul>
                                    <div class="Menu_left"><a href="{{url('/lineview')}}">حجز تذكرة</a></div>
                                </div>
                            </nav>
                            <!--/Menu--> 
                        </div>
                    </header>
                    <!--/Header-->
                    <div id="Body">
                        <div id="Content">
                            <div id="Slider">
                                <div class="Slider">
                                    <ul id="sb-slider" class="sb-slider">
                                        <li><a href="#"><img src="images/slider/slider_1.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/slider/slider_2.png" alt=""></a></li>
                                        <li><a href="#"><img src="images/slider/slider_3.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <!--/slider-->
                                <div id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> <span></span></div>
                                <div class="slider_shadow"></div>
                            </div>
                            <!--/Slider-->