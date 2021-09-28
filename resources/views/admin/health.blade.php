@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Thông tin của bé
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th >STT</th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Lớp học</th>
            <th>Chiều cao</th>
            <th>Cân nặng</th>
            <th>Ghi chú của giáo viên</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection