<!DOCTYPE html>
<html>
<title>Cryptanoia : Miscellany of Cryptography </title>
<head>
    <link href="css/master.css" rel="stylesheet" type="text/css"/>

    <script language="JavaScript" src="js/otp.js"></script>
<script language="JavaScript" src="js/util.js"></script>
<script language="JavaScript"><!--
// This code was written by Tyler Akins and placed in the public domain.
// It would be nice if you left this header intact.  http://rumkin.com


function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.OneTimePad_Loaded) || (! document.Util_Loaded) ||
       (! document.getElementById('output')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}


function upd()
{
   if (IsUnchanged(document.encoder.text) *
       IsUnchanged(document.encoder.pad) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }
   
   ResizeTextArea(document.encoder.text);
   ResizeTextArea(document.encoder.pad);

   var e = document.getElementById('output');
   
   if (document.encoder.text.value != '' && document.encoder.pad.value != '')
   {
      e.innerHTML = SwapSpaces(HTMLEscape(OneTimePad(document.encoder.encdec.value * 1, 
         document.encoder.text.value, document.encoder.pad.value)));
   }
   else
   {
      e.innerHTML = 'Type in a message and a pad to see the results.';
   }
   
   window.setTimeout('upd()', 100);
}

window.setTimeout('start_update()', 100);

// --></script>
<style type="text/css"> 

#boody{
    background-color:   #CCCCCC ;
    height: 320px;
    width: 80%;
    position: static;  
    clear:both;
    margin-bottom: 80px;
   
}
.dev {
  position: relative;
  float: left;
  bottom: -35px;
  left: 30px;
  font-family: 'monospace', Arial;
  color: #FFFFFF;
  font-size: 17px;
  opacity: 0.8;
}
.devs {
  position: relative;
  float: left;
  bottom: -35px;
  left: 30px;
  font-family: 'monospace', Arial;
  color: #CCCCCC;
  font-size: 13px;
  opacity: 0.8;
}
</style>
</head>
<body>
<div class="container">
<div id="main-nav">
  <ul>
    <li><a href="index.php">Home</a></li>
   
    <li><a>Cryptography<span class="drop-down"></span></a>
      <ul>
        <li><a href="about+morse.php">Morse Code</a></li>
        <li><a href="about+otp.php">One Pad Time</a></li>
        <li><a href="about+atbash.php">Atbash</a></li>
        <li><a href="about+bacon.php">Baconian Cipher</a></li>
    
      </ul>
    </li>
     <li><a href ="about.php">About<span class="drop-down"></span></a>
      
    <li><a href="contact.php">Contact<span class="drop-down"></span></a>
     
    </li>
   
  </ul>
</div>
<div id="Heading">
  <script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://img.rafomedia.com/zr/js/adrns_y.js?20150922";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>
<body>



</div>
<div id="f">
<pre><center>
<h1>Note:</h1>
<hr width = 30%>

It is said that the one-time pad is the best cipher anywhere.  It is
uncrackable as long as you keep the messages short, use shorthand and
abbreviations, remove unnecessary letters, never reuse a pad, and have a
good enough random source for data.











This implementation will take the letters (and letters only) from the pad
and encrypt the letters from your message.  It leaves spaces, newlines
(enters / returns), punctuation, numbers, and all of the things that aren't
A-Z alone.  Make sure that your pad is at least as long as the number
of characters in your message, otherwise your message will not be encoded.


</pre></div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>  <form name="encoder" method=post action="#" onsubmit="return false;">
<p><select name="encdec">
   <option value="1">Encrypt
   <option value="-1">Decrypt
</select>
<p><h2>Your Message:<br><textarea name="text" rows="5" cols="80"></textarea></p><br>
<p><h2>The Pad:<br><textarea name="pad" rows="5" cols="80"></textarea></p>
</form><br>
<table border=0 cellpadding=0 cellspacing=0 class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tr><td class="r_box"><span id='output'></span>
</td></tr></table><div style="clear: both"></div><br><br><br><br>
</div>
</td>
</div>

     <div id="Footer">

<div class="devs"><br>This website is developed by Joshua Natad  and Joemari Sevilla. <br>
  Published (2015, October)


</div>
  </div>
  </div>

</body>
</html>
