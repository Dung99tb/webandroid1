@extends('admin_layout')
@section('admin_content')
<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="{{URL::to('/compose_mail')}}"  class="btn btn-compose">
                            Soạn tin nhắn
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="{{URL::to('/inbox_mail')}}"> <i class="fa fa-inbox"></i> Hộp thư đến <span class="label label-danger pull-right inbox-notification">2</span></a></li>
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
                       <h4 class="gen-case"> Soạn tin nhắn
                           <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body">
                        <div class="compose-mail">
                            <form role="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="to" class="">Đến:</label>
                                    <input type="text" tabindex="1" id="to" class="form-control">

                                    <div class="compose-options">
                                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                    </div>
                                </div>

                                <div class="form-group hidden">
                                    <label for="cc" class="">Cc:</label>
                                    <input type="text" tabindex="2" id="cc" class="form-control">
                                </div>

                                <div class="form-group hidden">
                                    <label for="bcc" class="">Bcc:</label>
                                    <input type="text" tabindex="2" id="bcc" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="">Chủ đề:</label>
                                    <input type="text" tabindex="1" id="subject" class="form-control">
                                </div>

                                <div class="compose-editor">
                                    <textarea style="resize: none" rows="8" class="wysihtml5 form-control" rows="9"></textarea>
                                    <input type="file" class="default">
                                </div>
                                <div class="compose-btn">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Gửi</button>
                                    <button class="btn btn-sm"><i class="fa fa-times"></i> Xóa</button>
                                    <button class="btn btn-sm">Bản nháp</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
		 </div>
@endsection