@extends('admin_layout')
@section('admin_content')
<div id="main">

    <div class="content-page">

        <div class="content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-user"></i>Chi tiết hồ sơ</h3>
                            </div>

                             <div class="card-body">

                                <form action="#" method="post" enctype="multipart/form-data">

                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h3><i class="far fa-file-image"></i> Ảnh đại diện</h3>
                                            </div>

                                        <div class="card-body text-center">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img alt="avatar" class="img-fluid" src="{{('public/frontend/images/avatar.jpg')}}">
                                        </div>
                                    </div>

                                    <div class="row">
     
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-info btn-block mt-3">Thay đổi ảnh đại diện</button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-danger btn-block mt-3">Xóa ảnh đại diện</button>
                                        </div>

                                    </div>

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
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Email:</label>
                                <div class="col-lg-6">
                                    <input type="Email" class="form-control" id="inputSuccess">
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <hr>
                                    <button type="button" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>             
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection