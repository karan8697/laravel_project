@extends('header')
	<div class="col-sm-10 col-sm-offset-1 matches-heading" style="box-shadow: 5px 10px 18px #000033;">
		<h2>Upvoted Players</h2>
	</div>
	<div class="col-sm-12" style="margin-top: 25px;"></div>
	<div class="col-sm-1  container-fluid"></div>
	@foreach($a as $p)
	<div class="col-sm-2 container-fluid profile-player-box">
		<div class="col-sm-12 container-fluid" style="background: url('{{ asset('images') }}/{{$p->image}}') no-repeat center center ; background-size: cover; height: 200px;border-radius: 16px 16px 0px 0px;border:";>
		</div>
		<div class="col-sm-12 container-fluid" style="height: 100px;">
			<h3 style="color: #FFFFFF;margin-left: 10px;">{{$p->name}}</h3>
		</div>

	</div>
	@endforeach

	<div class="col-sm-10 col-sm-offset-1 matches-heading " style="margin-top: 25px;box-shadow: 5px 10px 18px #000033;">
		<h2>Followed Matches</h2>
	</div>
	@foreach($b as $p)
	<div class="col-sm-10 col-sm-offset-1 profile-match">
		<div class="col-sm-3" style="height: 60px">
			<h3 style="margin-top: 15px;">{{$p->team_1}}</h3>
		</div>
		<div class="col-sm-1" style="height: 60px">
			<h3 style="margin-top: 15px;"><b>VS</b></h3>
		</div>
		<div class="col-sm-3" style="height: 60px">
			<h3 style="margin-top: 15px;">{{$p->team_2}}</h3>
		</div>
		<div class="col-sm-4" style="height: 60px">
			<h3 style="margin-top: 15px;">{{$p->dat}}</h3>
		</div>
	</div>
	@endforeach
@extends('footer')