@extends('admin_layout')
@section('admin_content')
 <header class="panel-heading">
                Thêm tài khoản
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="get">
                     <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess"></label>
                        <div class="col-lg-6">
                            <select class="form-control input-lg m-bot15">
                                <option>Phụ huynh</option>
                                <option>Giáo viên</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tên hiển thị:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Số di động:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Email:</label>
                        <div class="col-lg-6">
                            <input type="Email" class="form-control" id="inputSuccess">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mật khẩu:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nhập lại mật khẩu:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Lớp:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">( Tên của bé ):</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </div>
                    </div>
                </form>
            </div>
@endsection