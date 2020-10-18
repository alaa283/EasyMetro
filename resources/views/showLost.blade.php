@extends('layouts.layout')
@section('showlost')
                    



              <div class="card">
                <div class="card-header card-header-primary">
                    
                <cebter> <h1 class="card-title ">متابعه المفقودات</h1></cebter> 
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered">
                      <thead class=" text-primary">
                        <th>
                        المفقود
                        </th>
                        <th>
                          الوصف
                        </th>
                        <th>
                       اسم المستخدم
                        </th>
                        <th>
                          رقم الموبايل للتواصل
                        </th>
                        <th>
                          ...تم الانشاء فى
                        </th>
                          <th>
                         صورة المفقود
                        </th>
                        
                      </thead>
                      <tbody>
                       @foreach($posts as $key=>$post)
                          <tr>
                          
                          <td>{{ $post->title}}</td>
                          
                                  <td>{{ $post->description}}</td>
                                     <td>{{ $post->name}}</td>
                              <td>{{ $post->mobile}}</td>
                             <td>{{ $post->created_at}}</td>
                           

                             <td>   <img src="{{ asset('Users/posts/'. $post->image) }}" width="100px;" height="100px;" alt="image"></td>
                          
                          </tr>
                         @endforeach
                      </tbody>
                      </table>
                  
                </div> </div> 
              </div>
            
      
         <br>

   
 
               
            
                            





         
@endsection