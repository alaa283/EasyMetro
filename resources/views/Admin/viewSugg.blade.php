       @extends('Admin.index')
@section('viewsugg')

<div class="quick_links text-center">
                            <h1 class="heading_title">الشكاوى والمقترحات </h1>
                             <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered">
                      <thead class=" text-primary">
                        <th>
                        الشكوى او المقترح
                        </th>
                       
                        <th>
                     البريد الابكترونى
                        </th>
                        <th>
                        رقم الموبايل
                        </th>
                        <th>
                        
                        </th>
                       
                        
                      </thead>
                      <tbody>
                       @foreach($item as $key=>$post)
                          <tr>
                          
                          <td>{{ $post->text}}</td>
                          
                         
                             <td>{{ $post->email}}</td>
                             <td>{{ $post->mobile}}</td>
                           
                             <td>   <img src="{{ asset('sugg/item/'. $post->image) }}" width="100px;" height="100px;" alt="image"></td>
                          
                          </tr>

                            
                        
                         @endforeach
                      </tbody>
                      </table>
                  
                </div> </div> 
              </div>
                           
                        
           
              
            
      
         <br>






@endsection