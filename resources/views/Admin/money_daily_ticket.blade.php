@extends('Admin.index')
@section('moneyD')
<!--/sidebar-->
<br><br><br>
                            <!-- from here -->    
                            <div class="Design">
                                <form action="" method="post" action="{{ url('/admin/money_daily_ticket')}}" name="money_daily_ticket" id="money_daily_tickets" novalidate="novalidate">
                                {{csrf_field()}}
                                    <br>
                                    <br>
                                    <h2>  اسعار التذاكر (الخط الاول والثانى)</h2>
                                    
                                    <label> 
                                           9 محطات
                                    </label>
                                    <br>

                                    <input type="text" name="step1_9" class="form-control" />
                                    <br>
                                    
                                    <label> 
                                           16 محطه
                                    </label>
                                    <br>
                
                                    <input type="text" name="step1_16" class="form-control" />
                                    <br>

                                    <label>
                                           37 محطه
                                    </label>
                                    <br> 
                                    <input type="text" name="step1_37" class="form-control" />

                                    <h2>  اسعار التذاكر (الخط الثالث)</h2>
                                    
                                    <label> 
                                           9 محطات
                                    </label>
                                    <br>

                                    <input type="text" name="step3_9" class="form-control" />
                                    <br>
                                    
                                    <label> 
                                           16 محطه
                                    </label>
                                    <br>
                
                                    <input type="text" name="step3_16" class="form-control" />
                                    <br>

                                    <label>
                                           37 محطه
                                    </label>
                                    <br> 
                                    <input type="text" name="step3_37" class="form-control" />
                                    <input type="submit" class="login_button" value="ارسال">
                                   
                                </form>
                            </div>
                         

                            <!-- to here -->
        

                        </div>
                       
                    

@endsection