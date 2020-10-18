
       @extends('Admin.index')
@section('viewcontact')
<br>
<div class="quick_links text-center">
                            <h1 class="heading_title">رسائل المستخدمين</h1>
                             <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered">
                      <thead class=" text-primary">
                        <th>
                        الاسم
                        </th>
                        <th>
                          البريد الالكترونى
                        </th>
                        <th>
                       الموضوع
                        </th>
                        <th>
                          الرسالة
                        </th>
                       
                        
                      </thead>
                      <tbody>
                       @foreach($item as $key=>$post)
                          <tr>
                          
                          <td>{{ $post->name}}</td>
                          
                              <td>{{$post->email}}</td>
                             <td>{{ $post->subject}}</td>
                             <td>{{ $post->message}}</td>
                           

                            
                          </tr>
                         @endforeach
                      </tbody>
                      </table>
                  
                </div> </div> 
              </div>
                           
                        
           
              
            
      
         <br>















@endsection