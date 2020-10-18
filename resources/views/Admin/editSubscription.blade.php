@extends('Admin.index')
@section('editS')
<br><br><br>
                            <!-- from here -->    
                            <div class="Design">
                                <form action="" method="post" action="{{ url('/admin/editSubscription/'.$SubscriptionDetails->id_s)}}" name="types_subscription" id="types_subs" novalidate="novalidate">
                                {{csrf_field()}}
                                    <br>
                                    <br>
                                    <h2>  انواع الاشتراكات </h2>
                        
                                    <label> نوع الاشتراك 
                                    </label>

                                    <select name="type_sub" id="First" value="{{ $SubscriptionDetails->type_sub}}">
                                       
                                        <optgroup label=" الاشتراكات">

                                            <option>  شهرى</option>
                                            <option>3 شهور</option>
                                            <option> سنوى</option>
                                            <option> ذو اجتياجات خاصه</option>

                                    </select>

                                    
                                    <select name="type_line" id="First" value="{{ $SubscriptionDetails->type_line}}">
                                       
                                        <optgroup label=" اسعار الخطوط">

                                            <option>  الخط الاول و الثانى</option>
                                            <option> الخط الثالث</option>

                                    </select>

                                    <br><br><br>

                                    <label> 
                                         سعر منطقه واحده
                                    </label>
                                    <br>

                                    <input type="text" name="station1"  class="form-control" value="{{ $SubscriptionDetails->station1}}"/>
                                    <br>

                                    <label> 
                                          سعر منطقتين
                                    </label>
                                    <br>

                                    <input type="text" name="station2" class="form-control" value="{{ $SubscriptionDetails->station2}}"/>
                                    <br>

                                    <label> 
                                         سعر 3 او 4 مناطق 
                                    </label>
                                    <br>

                                    <input type="text" name="station3_4"  class="form-control" value="{{ $SubscriptionDetails->station3_4}}"/>
                                    <br>

                                    <label> 
                                    سعر 5 او 6 مناطق 
                                    </label>
                                    <br>

                                    <input type="text" name="station5_6" class="form-control" value="{{ $SubscriptionDetails->station5_6}}"/>
                                    <br>
                                    <input type="submit" class="login_button" value="ارسال">
                                </form>
                            </div>
                         

                            <!-- to here -->
        

                        </div>
                       
                    

@endsection