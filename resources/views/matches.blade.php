@extends('header')

<div class="container-fluid col-sm-10 col-sm-offset-1" style="height:560px;">
	<div class="col-sm-12 container-fluid matches-heading">
		<h1 style="margin-left: 20px;margin-top:13px;">Football</h1>
		<div class="col-sm-12 container-fluid matches-poster" style="background: url('{{ asset('images/1_display.jpg') }}') no-repeat center center ; background-size: cover;">
		</div>
	</div>
</div>
	@foreach($a as $p)
	<div class="container-fluid col-sm-5 col-sm-offset-1 matches-border">
		<div class="match-name container-fluid col-sm-12">
			<h2 style="margin-top: 16px;margin-left: 20px;">{{$p->league}}</h2>
		</div>
		<div class="match-content container-fluid col-sm-12">
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_1}}">
			</div>
			<div class="col-sm-2 col-sm-offset-1" style="height:200px;background-color: transparent;color: #000033;">
				<p style="margin-top: 100px;font-size: 24px;">VS<p>
			</div>
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_2}}">
			</div>

			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;" >{{$p->team_1}}</p>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;">{{$p->team_2}}</p>
			</div>

			<div class="col-sm-10">
				<h3 style="margin-top:35px;color: #000033;">
					{{$p->dat}}
				</h3>
			</div>
			<button class="btn-lg" style="background-color: #000033;border: 1px solid #000033;margin-top: 15px;">Follow
			</button>
		</div>
	</div>
	@endforeach
	
	



<div class="container-fluid col-sm-10 col-sm-offset-1" style="height:560px;">
	<div class="col-sm-12 container-fluid matches-heading" style="margin-top: 25px;">
		<h1 style="margin-left: 20px;margin-top:13px;">Cricket</h1>
		<div class="col-sm-12 container-fluid matches-poster" style="background: url('{{ asset('images/2_display.png') }}') no-repeat center center ; background-size: cover;">
		</div>
	</div>
</div>
	
	@foreach($b as $p)
	<div class="container-fluid col-sm-5 col-sm-offset-1 matches-border">
		<div class="match-name container-fluid col-sm-12">
			<h2 style="margin-top: 16px;margin-left: 20px;">{{$p->league}}</h2>
		</div>
		<div class="match-content container-fluid col-sm-12">
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_1}}">
			</div>
			<div class="col-sm-2 col-sm-offset-1" style="height:200px;background-color: transparent;color: #000033;">
				<p style="margin-top: 100px;font-size: 24px;">VS<p>
			</div>
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_2}}">
			</div>

			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;" >{{$p->team_1}}</p>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;">{{$p->team_2}}</p>
			</div>

			<div class="col-sm-10">
				<h3 style="margin-top:35px;color: #000033;">
					{{$p->dat}}
				</h3>
			</div>
			<button class="btn-lg" style="background-color: #000033;border: 1px solid #000033;margin-top: 15px;">Follow</button>
		</div>
	</div>
	@endforeach


<div class="container-fluid col-sm-10 col-sm-offset-1" style="height:560px;">
	<div class="col-sm-12 container-fluid matches-heading" style="margin-top: 25px;">
		<h1 style="margin-left: 20px;margin-top:13px;">Basketball</h1>
		<div class="col-sm-12 container-fluid matches-poster" style="background: url('{{ asset('images/3_display.jpg') }}') no-repeat center center ; background-size: cover;">
		</div>
	</div>
</div>
	
	@foreach($c as $p)
	<div class="container-fluid col-sm-5 col-sm-offset-1 matches-border">
		<div class="match-name container-fluid col-sm-12">
			<h2 style="margin-top: 16px;margin-left: 20px;">{{$p->league}}</h2>
		</div>
		<div class="match-content container-fluid col-sm-12">
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_1}}">
			</div>
			<div class="col-sm-2 col-sm-offset-1" style="height:200px;background-color: transparent;color: #000033;">
				<p style="margin-top: 100px;font-size: 24px;">VS<p>
			</div>
			<div class="col-sm-4" style="height:200px;">
				<img class="img-responsive" src="{{ asset('images')}}/{{$p->image_2}}">
			</div>

			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;" >{{$p->team_1}}</p>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5" style="height: 40px;background-color: ;">
				<p style="font-size: 18px;margin-top: 5px;color: #000033;margin-left: 20px;">{{$p->team_2}}</p>
			</div>

			<div class="col-sm-10">
				<h3 style="margin-top:35px;color: #000033;">
					{{$p->dat}}
				</h3>
			</div>
			<button class="btn-lg" style="background-color: #000033;border: 1px solid #000033;margin-top: 15px;">Follow</button>
		</div>
	</div>
	@endforeach

@extends('footer')
