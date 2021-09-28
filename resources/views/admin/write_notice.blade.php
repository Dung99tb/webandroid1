@extends('admin_layout')
@section('admin_content')
<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"> Viết thông báo
                           <form action="#" class="pull-right mail-src-position">
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body">
                        <div class="compose-mail">
                            <form role="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="to" class="">Tiêu đề:</label>
                                    <input type="text" tabindex="1" id="to" class="form-control">

                                </div>
                                
                                <div class="compose-editor">
                                    <label for="subject" class="">Nội dung thông báo:</label>
                                    <textarea style="resize: none" rows="8" class="wysihtml5 form-control" rows="9"></textarea>
                                    <input type="file" class="default">
                                </div>
                                <div class="compose-btn">
                                    <button class="btn btn-primary btn-sm">Đăng bài</button>
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