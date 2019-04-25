@extends('header')
	@foreach($a as $p)
	<div class="col-sm-8 col-sm-offset-2 player-outer container-fluid">
		<div class="player-name col-sm-12 container-fluid">
			<h2 style="margin-left: 25px;margin-top: 17px;color:#FFFFFF">{{$p->name}}</h2>
		</div>
		<div class="col-sm-12 container-fluid player-info">
			<div class="col-sm-3 container-fluid" style="height: 340px; border-radius: 0px 0px 0px 8px;  background: url('{{ asset('images') }}/{{$p->image}}') no-repeat center center ; background-size: cover;" >
			</div>
			<div class="col-sm-9" style="height: 320px;">
				<div class="col-sm-3">
					<h3>{{$p->height}} M</h3>
				</div>
				<div class="col-sm-3">
					<h3>{{$p->weight}} Kg</h3>
				</div>
				<div class="col-sm-12">
					<h3>Matches : {{$p->matches}}</h3>
				</div>
				<div class="col-sm-12">
					<h3>Limelight : {{$p->acheivements}}</h3>
				</div>
				<div class="col-sm-12">
					<h3>Current Team : {{$p->team}}</h3>
				</div>
				<div class="col-sm-12">
					<h3>Ranking : {{$p->ranking}}</h3>
				</div>
				<div class="col-sm-12">
					<button class="btn-lg col-sm-3" style="background-color: #000033;border:1px solid #000033;color: #FFFFFF">Upvote
					</button>
				</div>
				
			</div>
		</div>
	</div>
	@endforeach
@extends('footer')