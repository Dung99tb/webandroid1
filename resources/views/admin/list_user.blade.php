@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách user
    </div>
    <div class="card-header">
                                    <span class="pull-right">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
                                            <i  aria-hidden="true"></i> Thêm tài khoản</button>
                                    </span>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="#" method="post" enctype="multipart/form-data">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thêm tài khoản</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Họ và tên (bắt buộc):</label>
                                                                    <input class="form-control" name="name" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Số điện thoại (bắt buộc):</label>
                                                                    <input class="form-control" name="SDT" type="text" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Mật khẩu (bắt buộc):</label>
                                                                    <input class="form-control" name="password" type="text" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Xác nhận mật khẩu (bắt buộc):</label>
                                                                    <input class="form-control" name="password" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Quyền:</label>
                                                                    <select name="role_id" class="form-control" required>
                                                                        <option value="">- Chọn -</option>
                                                                        <optgroup label="Hệ thống">
                                                                            <option value="1">Admin</option>
                                                                            <option value="2">Giáo viên</option>
                                                                        </optgroup>

                                                                        <optgroup label="Người dùng">
                                                                            <option value="3">Phụ huynh</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Họ tên bé (tùy chọn):</label>
                                                                    <input class="form-control" name="name" type="text"  />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Lớp</label>
                                                                    <select name="class_name" class="form-control">
                                                                        <option value="1">Họa Mi</option>
                                                                        <option value="2">Sơn Ca</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Ảnh đại diện (tùy chọn):</label>
                                                            <br />
                                                            <input type="file" name="image">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Thêm tài khoản</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-header -->
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
            <th data-breakpoints="xs">STT</th>
            <th>Tên hiển thị</th>
            <th>Số di động</th>
            <th data-breakpoints="xs">Email</th>
            <th style="width:120px">Quyền</th>
            <th style="width: 120px;">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td>
             <a href="#" class="btn btn-primary btn-sm btn-block">Sửa</a>
             <a href="#" class="btn btn-danger btn-sm btn-block mt-2">Xóa</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection