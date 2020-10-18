<!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{asset('backend/img/user.jpg')}}">

                <h1 class="h3">{{Auth::user()->name}}</h1>

                <p><a href="">بيانات المستخدم</a></p>

                <p><a href="">تغيير كلمة المرور</a></p>

                
            </div>
            <div class="who_is_online">
                <h3>العامليين حاليا علي النظام</h3>

                <div class="employee_online">
                    <img src="{{asset('backend/img/user.jpg')}}" class="img-circle bring_right">

                    <p>{{Auth::user()->name}}</p>

                    
                </div>
               
                
                
               
            </div>
        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">
                <form class="form-inline search_box text-center">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="كلمة البحث">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>

                <ul>
                    <li><span class="glyphicon glyphicon-home"></span><a href="{{url('/Admin')}}">الصفحة الرئيسية</a></li>
                    
                    <li><span class="glyphicon glyphicon-edit"></span><a href="">اسعار التذاكر اليومية</a>
                        <ul class="drop_main_menu">
                            <li><a href="{{url('/admin/money_daily_ticket')}}">اضافة سعر جديد</a></li>
                            <li><a href="{{url('/admin/viewDailyTicket')}}">عرض الاسعار</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-cog"></span><a href="{{url('/Asuggest')}}">عرض الشكاوى والمقترحات</a></li>
                    <li><span class="glyphicon glyphicon-user"></span><a href="{{url('/Acontact')}}">رسائل المستخدمين</a>
                       
                    </li>
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->