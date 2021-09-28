@extends('admin_layout')
@section('admin_content')
<div class="mail-w3agile">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="{{URL::to('/compose_mail')}}"  class="btn btn-compose">
                            Soạn tin nhắn
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="{{URL::to('/inbox_mail')}}"> <i class="fa fa-inbox"></i> Hộp thư đến  <span class="label label-danger pull-right inbox-notification">2</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Gửi tin nhắn</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Quan trọng</a></li>
                            <li><a href="#"> <i class="fa fa-file-text-o"></i> Nháp <span class="label label-info pull-right inbox-notification">5</span></a></a></li>
                            <li><a href="#"> <i class="fa fa-trash-o"></i> Thùng rác</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Hộp thư đến (2)
                        <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox ">
                                    <input type="checkbox" class="">
                                </div>

                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all">
                                        Tất cả
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Không có</a></li>
                                        <li><a href="#"> Đọc</a></li>
                                        <li><a href="#"> Chưa đọc</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Hơn
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Đánh dấu đã đọc</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Xóa</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Chuyển tới
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Đánh dấu đã đọc</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Xóa</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                        <tbody>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message  dont-show"><a href="#">Trần Văn A</a></td>
                            <td class="view-message "><a href="#">Chế độ ăn uống hợp lý cho trẻ</a></td>
                            <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message  text-right">12.10 AM</td>
                        </tr>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show"><a href="#">Nguyễn Văn C</a></td>
                            <td class="view-message"><a href="#">Chương trình giảng dạy tuần</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">Sep 25</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="#">Nguyễn Văn C</a></td>
                            <td class="view-message"><a href="#">Danh sách lớp Họa mi </a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">Sep 5</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="#">Phòng Giáo Dục và Đào Tạo</a></td>
                            <td class="view-message"><a href="#">Kế hoạch triển khai năm học mới</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">Aug 25</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star "></i></td>
                            <td class="view-message dont-show"><a href="#">Trần Văn A</a></td>
                            <td class="view-message"><a href="#">Kế hoạch tổng kết năm học 2021-2022</a></td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">May 28</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Phạm Ngọc C</td>
                            <td class="view-message">Các hoạt động ngoại khóa của trẻ</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">December 19</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook </td>
                            <td class="view-message view-message">Đã thêm số điện thoại vào tài khoản facebook của bạn</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 04</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Phạm Ngọc C</td>
                            <td class="view-message view-message">Chế độ dinh dưỡng của trẻ</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">June 13</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                            <td class="view-message view-message">Xác thực 2 yếu tố đang bật</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 24</td>
                        </tr>
                        </tbody>
                        </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
        </div>
@endsection