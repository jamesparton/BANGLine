Simple IVR
==========

This repro demonstrates just how easy it is to get up and running with Twilio voice.
To create a simple, but feature rich, IVR application.

You can read the Twilio "HowTo" doc on IVR's here: https://www.twilio.com/docs/howto/ivrs-the-basics

Preparation
===========
<ul>
<li>Open an account on http://twilio.com</li>
<li>Buy a phone number in your country of choice http://www.twilio.com/docs/howto/search-and-buy</li>
</ul>

Creating the IVR App
====================
<ul>
<li>Use the XML document contained in this repo. You only need to make minor edits to the XML.</li>
<li>Line 3: Set the correct path for your welcome recording used in the <Play> verb
<li>Line 5 - 12: Edit the content in the <Say> verbs to meet your requirements
<li>Upload to your server</li>
</ul>

<ul>
<li>In the .php file just...</li>
<li>Line 43 Set the correct path for your recording if used in the <Play> verb
<li>Line 49 Add your Twilio number
<li>Upload to your server</li>
</ul>


Configuring your Twilio number
==============================
<ul>
<li>Once you have uploaded your XML document you just need to tell Twilio the URL of where to find it.</li>
<li>Sign into your account on http://twilio.com and click on 'Numbers' in the navigation at the top of the page.</li>
<li>Find the number you want your conference room to hang from and click on it.</li>
<li>In the 'Voice Request URL' field type in the URL where you stored your XML.</li>
<li>Click the 'Save Changes' button</li>
</ul>

That's it you're done!

Retrieving Call Recordings
=========================
<ul>
<li>You can retrive call recordings from your Twilio account.</li>
<li>Sign into your account on http://twilio.com and click on 'Logs' in the navigation at the top of the page.</li>
<li>Then click on 'Recordings'</li>
</ul>

Useful Links
============

All things Twilio - http://twilio.com<br>
Twilio technical docs - http://twilio.com/docs<br>
Need help? - http://forum.twilio.com/twilio/<br>
Need inspiration? - http://twilio.com/gallery/customers<br>
Need a Twilio coder? - http://twilio.com/doers<br>
Want to work for Twilio in Europe? - http://bitly.com/bundles/jamesparton/3

