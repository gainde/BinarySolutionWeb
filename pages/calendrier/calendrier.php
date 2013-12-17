

	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>-->

				<div class="calendrier" id="eventCalendarHumanDate"></div>
				<script>
					$(document).ready(function() {
						$("#eventCalendarHumanDate").eventCalendar({
							eventsjson: 'pages/calendrier/json/event.humanDate.json.php',
							jsonDateFormat: 'human',  // 'YYYY-MM-DD HH:MM:SS'
							eventsLimit: 2
						});
					});
				</script>

<!--script src="js/jquery.timeago.js" type="text/javascript"></script-->
<!--<script src="js/jquery.eventCalendar.min.js" type="text/javascript"></script>-->
<!--<script src="pages/calendrier/js/jquery.eventCalendar.js" type="text/javascript"></script>-->

