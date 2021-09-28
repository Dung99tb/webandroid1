@extends('admin_layout')
@section('admin_content')
<div class="gallery">
	<h2 class="w3ls_head">Album</h2>
	<div class="col-lg-12">
        <button type="button" class="btn btn-info btn-block mt-3" style="width:150px">Thêm ảnh</button>
    </div>
	<div class="gallery-grids">
		<div class="gallery-top-grids">
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/anh2.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/anh2.jpg')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/anhmamnon1.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/anhmamnon1.jpg')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/images1.png')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/images1.png')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="gallery-top-grids">
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/mamnon.png')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/mamnon.png')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/unnamed1.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/unnamed1.jpg')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/thieunhi1.jpg')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/thieunhi1.jpg')}}" alt="" />
					</a>
				</div>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<div class="gallery-top-grids">
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/taixuong.png')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/taixuong.png')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/taixuong2.png')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/taixuong2.png')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="col-sm-4 gallery-grids-left">
				<div class="gallery-grid">
					<a class="example-image-link" href="{{('public/frontend/images/taixuong3.png')}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="{{('public/frontend/images/taixuong3.png')}}" alt="" />
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
@endsection
