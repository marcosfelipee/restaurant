<!DOCTYPE html>
<html lang="en" xml:lang="en"><head>
    <meta charset="utf-8">

    <head>
        <title>PHP Store Hours</title>


    </head>

    <body>

    <?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('America/Sao_Paulo');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

    // REQUIRED
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array('12:00-20:00'),
        'tue' => array('12:00-20:00'),
        'wed' => array('12:00-20:00'),
        'thu' => array('12:00-20:00'), // Open late
        'fri' => array('12:00-20:00'),
        'sat' => array('12:00-20:00'),
        'sun' => array('12:00-20:00')
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array(
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'g:ia',
        'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
    );

    // Instantiate class
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
    // Display open / closed message
	if($store_hours->is_open()) {
		echo "<b style='color: #67b512'>Estamos abertos!</b> <br>" . "Todos os dias: " .$store_hours->hours_today() . ".";
	} else {
		echo "<b style='color: red' >Estamos fechados!</b> <br>". "Todos os dias: " . $store_hours->hours_today() . ".";
	}


    ?>

    </body>

</html>
