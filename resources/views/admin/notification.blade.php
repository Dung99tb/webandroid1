@extends('admin_layout')
@section('admin_content')
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					

				</div>
			</div>
		</div>
		<div class="agil-info-calendar">
		
		<div class="col-md-6 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
						Thông Báo 
					</header>
					<div class="notify-w3ls">
						<div class="alert alert-info clearfix">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Chế độ ăn uống hợp lý cho trẻ</a></span></li>
									<li class="pull-right notification-time">10.22AM</li>
								</ul>
							</div>
						</div>
						<div class="alert alert-info clearfix">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender"><span><a href="#">Cách học cùng con</a></span></li>
									<li class="pull-right notification-time">08.30AM</li>
								</ul>
								
							</div>
						</div>
						<div class="alert alert-success ">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender">Các hoạt động ngoài trời cho trẻ</li>
									<li class="pull-right notification-time">Sep 25</li>
								</ul>
							</div>
						</div>
						<div class="alert alert-warning ">
							<span class="alert-icon"></span>
							<div class="notification-info">
								<ul class="clearfix notification-meta">
									<li class="pull-left notification-sender">Thời gian triển khai năm học mới</li>
									<li class="pull-right notification-time"> Aug 27</li>
								</ul>
							</div>
						</div>
					</div>
				
				<!--notification end-->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
			
@endsection