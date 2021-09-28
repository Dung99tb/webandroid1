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
            <th>Lý do xin nghỉ</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
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