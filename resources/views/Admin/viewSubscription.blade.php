@extends('Admin.index')
@section('viewS')
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>عرض انواع واسعار الاشتراكات</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>رقم الاشتراك</th>
                  <th>نوع الاشتراك</th>
                  <th>رقم الخط</th>
                  <th>سعر محطه واحده</th>
                  <th>سعر محطتين</th>
                  <th>سعر 3 او 4 محطات</th>
                  <th>سعر 5او 6 محطات</th>        
                </tr>
              </thead>
              <tbody>
                @foreach($types_subs as $Subscription)
                <tr class="gradeX">
                  <td>{{ $Subscription->id_s}}</td>
                  <td>{{ $Subscription->type_sub}}</td>
                  <td>{{ $Subscription->type_line}}</td>
                  <td>{{ $Subscription->station1}}</td>
                  <td>{{ $Subscription->station2}}</td>
                  <td>{{ $Subscription->station3_4}}</td>
                  <td>{{ $Subscription->station5_6}}</td>
                  <td class="center"><a href="{{url('/admin/editSubscription/'.$Subscription->id_s)}}" class="btn btn-primary btn-mini">Edit</a> <a id="delCat" href="{{url('/admin/deleteSubscription/'.$Subscription->id_s)}}" class="btn btn-danger btn-mini">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection