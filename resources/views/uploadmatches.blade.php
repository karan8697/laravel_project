@extends('dashheader')

  <div class="col-sm-10 col-sm-offset-2 container-fluid" >
    <h1 style="color: #000033;margin-left: 10px;">Enter Match Details</h1>
  </div>

	<div class="col-sm-10 col-sm-offset-2 container-fluid">
		<form class="form-horizontal" method="get" enctype="multipart/form-data" style="margin-top:25px;  height:400px;" action="/inputmatches">
        {{ csrf_field() }}
			  <div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter League</h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<input type="text" class="form-control" name="league">
   	 			</div>
  			</div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Sport</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="sport">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Team 1</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="team_1">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Team 2</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="team_2">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Upload Team 1 Image</h4>
          </div>
          <div class="col-sm-7">
            <input type="file" class="form-control" name="image_1">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Upload Team 2 Image</h4>
          </div>
          <div class="col-sm-7">
            <input type="file" class="form-control" name="image_2">
          </div>
        </div>

        <div class="form-group" style="margin-top: 20px;">
          <div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Date & Time</h4>
          </div>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="dat">
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