@extends('header')
	@foreach($a as $p)
	<div class="col-sm-10 col-sm-offset-1 container-fluid news-box" style="margin-top: 25px;box-shadow: 5px 10px 18px #000033;">
		<div class="col-sm-12 container-fluid news-box-heading" >
			<h3 style="margin-left:20px; ">{{$p->headline}}</h3>
		</div>
		<div class="col-sm-6 container-fluid news-content" style="background: url('{{ asset('images') }}/{{$p->picture}}') no-repeat center center ; background-size: cover;">
		</div>
		<div class="col-sm-6 container-fluid news-content">
			<h4 style="margin-left: 10px;margin-right: 10px;">
				{{$p->news}}
			</h4>
		</div>
	</div>
	@endforeach
@extends('footer')
