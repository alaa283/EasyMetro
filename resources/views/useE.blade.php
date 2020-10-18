

@extends('layouts.layout')
@section('useE')



<br><br><br>
                            <!-- from here -->    
                            <div class="Design">
                                <form action="" method="post" action="{{ url('/users/useE')}}" >
                                {{csrf_field()}}
                                    <br>
                                    <br>
                                    <h2>التذاكر اليوميه</h2>

                                    <label> 
                                          محطه القيام
                                    </label>
                                    
                                    <select name="station_start" id="First" >

                                    <optgroup label=" المحطات">
                                        <optgroup label="الخط الاول">
                                        @foreach($lines1 as $line1)
                                        <option value="{{$line1->id_l1}}">{{$line1->station}}</option>
                                        </optgroup>
                                     </optgroup>

                                        <optgroup label="الخط ألثانى">
                                        @foreach($lines2 as $line2)
                                        <option value="{{$line2->id_l2}}">{{$line2->station}}</option>
                                        </optgroup>
                                       
                                        @endforeach
                                       

                            </select>
                                   
                                </form>
                            </div>
                         

                            <!-- to here -->
        

                        
                       
                    

@endsection