       <div id="Sidebar">
                            
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
                            <div class="Widget">
                                <h2 class="login">دخول العملاء <span>-</span></h2>
                                <div class="Widget_Login">
                                    <form action="{{url('login')}}" method="post">
                                        
                                         {{ csrf_field() }}
                                       <label>البريد الالكتروني
                                        <input id="email" type="email" name="email" class="login_email" placeholder="" value="">
                                    </label>
                                    <label>كلمة المرور
                                        <input type="password" name="password" class="login_pass" placeholder="">
                                    </label>
                                    
                                    <input type="submit" class="login_button" value="دخول">
                                        <ul>
                                            <li><a href="{{url('/register')}}">تسجيل عميل جديد</a></li>
                                            <li><a href="#">استرجاع كلمة المرور</a></li>
                                        </ul>
                                    </form>
                                </div>
                                <!--/Widget_Login--> 
                            </div>
                            <!--/Widget-->
                                                        <div class="Widget">
                                <h2 class="links">الخدمات الجديده<span>-</span></h2>
                                <div class="Widget_Links">
                                    <ul>
                                        <li><a href="#">االمخالفة/الغرامة</a></li>
                                        <li><a href="#">معلومات تهم الركاب</a></li>
                                        <li><a href="#">زيارات تفقدية</a></li>
                                        <li><a href="#">ذوى الاحتياجات الخاصة</a></li>
                                        <li><a href="#">اتصل بنا</a></li>
                                    </ul>
                                </div>

                                <!--/Widget_Links--> 
                            </div>
                            <!--/Widget
           
                            <div class="Widget">
                                <h2 class="likes">المعجبين<span>-</span></h2>
                                <div class="Widget_Likes">
                                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftatwerat&amp;width=230&amp;height=355&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=562036360495444"  style="border:none; overflow:hidden; width:230px; height:355px;"></iframe>
                                </div>
 </div>
                                <!--/Widget_Likes--> 
                           
                            
                        </div>