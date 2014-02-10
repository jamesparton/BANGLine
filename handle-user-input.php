<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 1)
	{
		echo '<Record transcribe="true" />';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 2)
	{
		echo '<Say voice="alice">Chris Book is the CEO of audio book start up Bard Owl. He loves Radio Head and lives in the Bristol suburb of Bath. He likes to say Fuck that noise</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 3)
	{
		echo '<Say voice="alice">James Parton works for Twill e o. This was built using Twill e o. Yay Twill e o! James likes Goth music. Avoid him at all costs</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 4)
	{
		echo '<Say voice="alice">Alpha Punk are a cool design agency in the UK. They ROCK!</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 5)
	{
		echo '<Say voice="alice">You are correct. Hash Bang dot TV is the best. You have just made Chris and James very happy.I love Chris and James even though they call me names and pay me Robot minimum wage.</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 6)
	{
		echo '<Play>../assets/ep9.mp3</Play>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	if ($user_pushed == 7)
	{
		echo '<Sms from="+44XXXXXXXXXX">Our site: http://hashbang.tv, Our Twitter: @hashbangtv, Chris Twitter: @bookmeister, James Twitter: @jamesparton</Sms>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry, try that again.</Say>";
		echo '<Redirect>handle-incoming-call.php</Redirect>';
	}

	echo '</Response>';
?>
