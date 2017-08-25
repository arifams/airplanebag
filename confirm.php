<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart luggage to Airport</title>

    <meta name="description" content="">
    <meta name="author" content="smart luggage!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript">
	var getQueryString = function ( field, url ) {
	    var href = url ? url : window.location.href;
	    var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
	    var string = reg.exec(href);
	    return string ? string[1] : null;
	};

	var username2 = getQueryString('username');
	var destination = getQueryString('to_address');
	var pickupDate = getQueryString('pickupDate');

	var pickupTime = getQueryString('pickupTime'); 
	var mobile = getQueryString('mobile');
	var email = getQueryString('email');

	var address = getQueryString('inputAddress'); 
	var additionalAddress = getQueryString('additionalAddress');
	var postcode = getQueryString('postcode');

	var city = getQueryString('selectCity'); 
	var quantitySmallBag = getQueryString('quantitySmallBag');
	var quantityMediumBag = getQueryString('quantityMediumBag');
	var quantityBigBag = getQueryString('quantityBigBag');
	</script>
    

  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="0">

<h1><script type="text/javascript">
                        document.write(username2)
                    </script></h1>

  <!-- header -->
  <header id="header" role="banner">
        <div class="">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- form -->
    <div class="container">
	  <div class="box">
        <div class="row">
          <!-- test -->
          <div class="container-fluid">
	<div class="row">
		<div class="col-md-4 text-center">
			<h3>
			</h3>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						① Pickup & Delivery Information
					</h3>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 text-center">
			<h3>
			</h3>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						② Payment and confirmation
					</h3>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 text-center">
			<h3>
			</h3>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Confirmation Pickup
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form">

			<div class="form-group">
                <label for="pickupDate" class="col-md-2 control-label">Pickup date</label>
                <div class=" col-sm-10">
	                <h4>07 September 2017</h4>
                </div>
            </div>

			<div class="form-group">
                <label for="pickupTime" class="col-md-2 control-label">Pickup time</label>
                <div class=" col-sm-10">
	                <h4>11:30</h4>
                </div>
            </div>


				<div class="form-group">		 
					<label for="inputMobile" class="col-sm-2 control-label">
						Mobile Number
					</label>
					<div class="col-sm-10">
						<h4>+31612345678</h4>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail" class="col-sm-2 control-label">
						Email
					</label>
					<div class="col-sm-10">
						<h4>info@parcelinternational.com</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="inputAddress" class="col-sm-2 control-label">
						Adress
					</label>
					<div class="col-sm-10">
						<h4>Straatweg 199</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="inputAdditionalAddress" class="col-sm-2 control-label">
						Additional address information
					</label>
					<div class="col-sm-10">
						<h4>Parcel International</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="inputZipcode" class="col-sm-2 control-label">
						Postal / Zip code
					</label>
					<div class="col-sm-10">
						<h4>3054AE</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="selectCity" class="col-sm-2 control-label">
						City
					</label>
					<div class="col-sm-10">
						<h4>Rotterdam</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="selectCity" class="col-sm-2 control-label">
						Cabin Luggage
					</label>
					<div class="col-sm-10">
						<h4>3</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="selectCity" class="col-sm-2 control-label">
						Medium Luggage
					</label>
					<div class="col-sm-10">
						<h4>5</h4>
					</div>
				</div>

				<div class="form-group">	 
					<label for="selectCity" class="col-sm-2 control-label">
						Large Luggage
					</label>
					<div class="col-sm-10">
						<h4>1</h4>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-success" style="margin-top: 20px;">
							&nbsp; &nbsp; Continue  &nbsp; &nbsp; &nbsp;
						</button>
					</div>
				</div>
			</form>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Luggage delivery
					</h3>
				</div>
				<div class="panel-body">
					<img src="images/airport.png" class="airport">
					<h4>Amsterdam Schiphol Airport</h4>
					Baggage depot between Departures hall 1 and hall 2 
					  <!-- Trigger the modal with a button -->
					  <a href="#" type="text" data-toggle="modal" data-target="#myModal">Click here for a map</a>

					  <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Amsterdam Schiphol Airport</h4>
					        </div>
					        <div class="modal-body">
					          <p>Baggage depot between Departures hall 1 and hall 2. </p>
					          <img class="auto" src="images/schiphol_map.png">
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					  </div>
				</div>
			</div> 
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Pickup details
					</h3>
				</div>
				<!-- Pickup Time -->
				<div class="panel-body"> 
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
							<h1 class="display-1" style="font-size: 4em;">11:00</h1>
							</div>
							<div class="col-md-6">
							<span class="text-muted">This is the earliest time that our drivers will pick up your luggage at your pickup address. Please make sure that your luggage has printed label.</span>

							<!-- Trigger the modal with a video -->
							 <a href="https://www.youtube.com/watch?v=gWCNmFwmhMk">Check video how to preparing your luggage for Travel. </a> 
							<!-- Video / Generic Modal -->
							<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
								  <div class="modal-content"><h1>Preparing Your Luggage for Travel by SendMyBag  - Latest Version.</h1>
								    <div class="modal-body">
								      <!-- content dynamically inserted -->
								    </div>
								  </div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- <p class="text-left text-muted lead">
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p> -->
		</div>
	</div>
          <!-- test -->
        </div>
      </div>
    </div>

</div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>  
    <script type="text/javascript" src="js/bootstrap-datetimepicker.nl.js"></script>
    <script type="text/javascript" src="js/jquery-queryParser.min.js" ></script>
    <script type="text/javascript" src="js/scripts.js"></script>



    
  </body>
</html>