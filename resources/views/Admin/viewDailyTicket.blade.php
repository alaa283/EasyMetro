@extends('Admin.index')
@section('viewD')
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>عرض اسعار التذاكر اليوميه</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>الخط الاول او الثانى 9 محطات</th>
                  <th>الخط الاول او الثانى 16 محطه </th>
                  <th>الخط الاول او الثانى 37 محطه</th>
                  <th>الخط الثالث 9 محطات</th>
                  <th>>الخط الثالث 16 محطات</th>
                  <th>>الخط الثالث 37 محطات</th>
                         
                </tr>
              </thead>
              <tbody>
                @foreach($DailyTickets as $DailyTicket)
                <tr class="gradeX">
                  <td>{{ $DailyTicket->step1_9}}</td>
                  <td>{{ $DailyTicket->step1_16}}</td>
                  <td>{{ $DailyTicket->step1_37}}</td>
                  <td>{{ $DailyTicket->step3_9}}</td>
                  <td>{{ $DailyTicket->step3_16}}</td>
                  <td>{{ $DailyTicket->step3_37}}</td>
                  <td class="center"><a href="{{url('/admin/editDailyTicket/'.$DailyTicket->id)}}" class="btn btn-primary btn-mini">تعديل</a> <a id="delCat" href="{{url('/admin/deleteDailyTicket/'.$DailyTicket->id)}}" class="btn btn-danger btn-mini">مسح</a></td>
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