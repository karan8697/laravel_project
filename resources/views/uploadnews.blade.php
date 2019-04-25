@extends('dashheader')

  <div class="col-sm-10 col-sm-offset-2 container-fluid" >
    <h1 style="color: #000033;margin-left: 10px;">Enter News Details</h1>
  </div>


	<div class="col-sm-10 col-sm-offset-2 container-fluid">
		<form class="form-horizontal" method="get" enctype="multipart/form-data" style="margin-top:25px;  height:400px;" action="/inputnews" >
			{{ csrf_field() }}
      <div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Headline</h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<input type="text" class="form-control" name="headline">
   	 			</div>
  			</div>

  			<div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter News</h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<textarea  class="form-control" style="height: 125px;" name="news"></textarea>
   	 			</div>
  			</div>

  			<div class="form-group" style="margin-top: 20px;">
   	 			<div class="col-sm-3" style="background-color: #000033;border:1px solid #000033;color:#FFFFFF;border-radius: 4px ;margin-left: 25px;"><h4>Enter Headline</h4>
   	 			</div>
   	 			<div class="col-sm-7">
   	 				<input type="file" class="form-control" name="picture" id="picture">
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