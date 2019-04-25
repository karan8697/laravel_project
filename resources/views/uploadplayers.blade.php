@extends('dashheader')

  <div class="col-sm-10 col-sm-offset-2 container-fluid" >
    <h1 style="color: #000033;margin-left: 10px;">Enter Player Details</h1>
  </div>

	<div class="col-sm-10 col-sm-offset-2 container-fluid">
		<form class="form-horizontal" method="get" enctype="multipart/form-data" style="margin-top:25px;  height:400px;" action="/inputplayers">
        {{ csrf_field() }}
			  <div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Name</h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<input type="text" class="form-control" name="name">
   	 			</div>
  			</div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Height</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="height">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Weight</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="weight">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Matches</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="matches">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Limelight</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="acheivements">
          </div>
        </div>
  			

  			<div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Team</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="team">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Rank</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="ranking">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Upload Image</h4>
          </div>
          <div class="col-sm-7">
            <input type="file" class="form-control" name="image">
          </div>
        </div>

  			<div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-2" style="margin-left: 345px;">
   	 				<button  name="submit" class=" btn-lg btn-block" style="background-color: #000033;border:1px solid #000033; color:#FFFFFF;" >Upload
   	 				</button>
   	 			</div>
  			</div>



		</form>

	</div>
@extends('footer')