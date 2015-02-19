<html>
<head>
	<title>Mesaha Booking System</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<meta charset='utf-8'>
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='lib/moment.min.js'></script>
	<script src='lib/jquery.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/gcal.js'></script>
</head>
<body>
	<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({

			// THIS KEY WON'T WORK IN PRODUCTION!!!
			// To make your own Google API key, follow the directions here:
			// http://fullcalendar.io/docs/google_calendar/
			googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
		
			// US Holidays
			events: 'usa__en@holiday.calendar.google.com',
			
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},
			
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
			
		});
		
	});

</script>
<script type="text/javascript" src="js/foundation.min.js"></script>
<div class="row">
   <div class="large-4 large-centered columns"><img src="img/logo.jpg"></div>
   <div class="large-4 large-centered columns">
   	<center>
   		<ul class="button-group round">
		  <li><a href="#" class="button small ">Login</a></li>
		  <li><a href="#" class="button small info">Registration</a></li>
		</ul>
   	</center>
   </div>
   <div id='loading'>loading...</div>

	<div id='calendar'></div>
</div>
</body>
</html>