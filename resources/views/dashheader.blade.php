<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <header>
    	<div class="container-fluid col-sm-12 dash-navigbar navbar-fixed-top">
        	<div class="col-sm-8 col-sm-offset-3">
        		<button class="col-sm-2 dash-navbtn parallelogram"style="margin-left:40px;border-left-color: #000033;" onclick="location.href = 'uploadnews';">
        			<p class="nonitalic">News</p>
        		</button>
        		<button class="col-sm-2 dash-navbtn parallelogram" onclick="location.href = 'uploadmatches';">
		        	<p class="nonitalic">Matches</p>
        		</button>
        		<button class="col-sm-2 dash-navbtn parallelogram" onclick="location.href = 'uploadplayers';">
        			<p class="nonitalic">Player</p>
        		</button>
        		<button class="col-sm-2 dash-navbtn parallelogram" onclick="location.href = 'uploadresults';">
        			<p class="nonitalic">Results</p>
        		</button>
        		
        	</div>
            <button class="btn-primary btn-lg" style="margin-top: 6px;background-color: #000031;color: #FFFFFF;border: 1px solid lightgrey;float: right;margin-right: 11px;" onclick="location.href = 'login';">Logout
            </button>
    	</div>
    </header>
</head>
<body>
    <div style="margin-top: 60px;"></div>
    


