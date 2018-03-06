@extends('pagelayout')
@section('content')
<!--banner-->
	<div class="banner1">
		<div class="container">
			<h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Liên Hệ</span></h3>
		</div>
	</div>
<!--banner-->
<!--content-->
	<div class="content">
		<!--contact-->
			<div class="mail-w3ls">
				<div class="container">
					<h2 class="tittle">Liên hệ với chúng tôi</h2>
					<div class="mail-grids">
						<div class="mail-top">
							<div class="col-md-4 mail-grid">
								<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
								<h5>Địa chỉ</h5>
								<p>22 Nguyễn Thông - P5 - Q3 - USA</p>
							</div>
							<div class="col-md-4 mail-grid">
								<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
								<h5>Điện thoại</h5>
								<p>Telephone:  +84 977 970 263</p>
							</div>
							<div class="col-md-4 mail-grid">
								<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
								<h5>E-mail</h5>
								<p>E-mail:<a href="mailto:example@mail.com"> nbthong2201@gmail.com</a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="map-w3">
							<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62720.14136555793!2d106.66854109167511!3d10.733801572226684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x31752f976be1bb7d%3A0xb2ba2101eee89fa4!2zVW5uYW1lZCBSb2FkLCBUw6JuIFBob25nLCBRdeG6rW4gNywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!3m2!1d10.7337192!2d106.7035607!4m0!5e0!3m2!1svi!2s!4v1517388396293" allowfullscreen></iframe>
						</div>
						<div class="mail-bottom">
							<h4>Gửi liên hệ</h4>
							<form action="" id="customer-form" class="js-customer-form" method="post">
								<section>
				                    <input type="hidden" name="_token" value="{{csrf_token()}}">
				                    <div class="form-group no-gutters">
										<input type="text" class="form-control" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									</div>
									<div class="form-group no-gutters">
										<input type="email" class="form-control" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									</div>
									<div class="form-group no-gutters">
										<input type="text" class="form-control" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
									</div>
									<div class="form-group no-gutters">
										<textarea class="form-control"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									</div>
									<div class="form-group no-gutters">
										<input class="form-control" type="submit" value="Submit" >
									</div>
									<div class="form-group no-gutters">
										<input class="form-control" type="reset" value="Clear" >
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!--contact-->
	</div>
<!--content-->
@endsection