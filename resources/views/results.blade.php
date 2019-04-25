@extends('header')
	<div class="col-sm-10 col-sm-offset-1 container-fluid result-header">
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h3 style="margin-left:20px;">League</h3>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h3 style="margin-left:20px;">Team 1</h3>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h3 style="margin-left:20px;">Team 2</h3>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h3 style="margin-left:20px;">Winner</h3>
		</div>
		<div class="col-sm-4 container-fluid" style="height: 60px;">
			<h3 style="margin-left:20px;">Result</h3>
		</div>
	</div>
	@foreach($a as $p)
	<div class="col-sm-10 col-sm-offset-1 container-fluid result">
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h4 style="margin-left:20px;margin-top: 20px;">{{$p->league}}</h4>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h4 style="margin-left:20px;margin-top: 20px;">{{$p->team_1}}</h4>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h4 style="margin-left:20px;margin-top: 20px;">{{$p->team_2}}</h4>
		</div>
		<div class="col-sm-2 container-fluid" style="height: 60px;">
			<h4 style="margin-left:20px;margin-top: 20px;">{{$p->winner}}</h4>
		</div>
		<div class="col-sm-4 container-fluid" style="height: 60px;">
			<h4 style="margin-left:20px;margin-top: 20px;">{{$p->result}}</h4>
		</div>
	</div>
	@endforeach
@extends('footer')