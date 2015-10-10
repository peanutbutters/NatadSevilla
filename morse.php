<!DOCTYPE html>
<html>
<title>Morse Code</title>

<head>
    <link href="css/menu.css" rel="stylesheet" type="text/css"/>

  <script language="JavaScript" src="js/util.js"></script>  
  <script language="JavaScript" src="js/button.js"></script>
<script language="JavaScript" src="js/morse.js"></script>
<script type="text/javascript">
   var balloon    = new Balloon;
   var tooltip  = new Balloon;
   BalloonConfig(tooltip,'GPlain');
   var fader = new Balloon;
   BalloonConfig(fader,'GFade');
   var box         = new Box;
   BalloonConfig(box,'GBox');
   var fadeBox     = new Box;
   BalloonConfig(fadeBox,'GBox');
   fadeBox.bgColor     = 'black';
   fadeBox.fontColor   = 'white';
   fadeBox.borderStyle = 'none';
   fadeBox.delayTime   = 200;
   fadeBox.allowFade   = true;
   fadeBox.fadeIn      = 750;
   fadeBox.fadeOut     = 200;

 </script> 
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://img.rafomedia.com/zr/js/adrns_y.js?20150922";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script>

</head>
<body>
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
<br><br><pre><br><br><br><br><br><br><br><br>
	
<div id="d"><font color= white size ="25">Instructions</font>
	<hr width= "20%" color ="#804B26">
         When encrypting, only letters and numbers will be encoded and  
	the rest will be dealt  like spaces. When decrypting, only 
	periods and hyphens will be decoded and the rest will be treated
	 like spaces. This web page uses International Morse Code with 
	 some additional enhancements, but without support for foreign 
	 characters. It also is geared to help you decode Morse Code 
	 snippets you find with the Reverse (flips the text) and Swap 
	 (exchanges periods and hyphens).</pre><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="d">
<table cellpadding=0 cellspacing=0 border=0 width=100%><tr><td valign=top width="100%"><div class="r_main">
<form name="encoder" method=post action="#" onsubmit="return false;">


<p><select name="encdec"><br><br>
   <option value="1">Encrypt
   <option value="-1">Decrypt
</select>
<br><br>	
<center><textarea name="text" rows="5" cols="80" placeholder="Write here..."></textarea></p><br></center>
<p>  <a href="#" class="action-button shadow animate red" onclick="Reverse(); return false">Reverse</a>  
    
<a href="#" class="action-button shadow animate yellow" onclick="SwapMorse(); return false">Invert</a><br><td>
</form>
<a class="hideDisplay">  <img src="images/bird.png" width="50" height="50" alt="symbol"><span class="showDisplayOnHover"><pre>Hint:
-Reverse Button 
 flips the text.
-Invert Button only 
works on Decryption. </pre>
    </span>
  </span>
</a><br>

<p><font color="white">Output:<br><br></font></p>
<table border=0 cellpadding=0 cellspacing=0 class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><font color="#75E0A7">.....d...o....n....t.........l....o....ok....a....t...m...e.  </font><tr><td class="r_box"><span id='output'></span>
</td></tr></table><p><br><br><br><br><br><br><br><br>


</table>
<br><br><br><br><br><br><br><br>
<font color="white"><h3>Morse Code translations</h3><br>
</p><font color="white"><center><table border=1 cellpadding=3 cellspacing=0>

<tr><td>A &nbsp; <b>.-</bb></td><td>B &nbsp; <b>-...</bb></td><td>C &nbsp; <b>-.-.</bb></td><td>D &nbsp; <b>-..</bb></td><td>E &nbsp; <b>.</bb></td><td>F &nbsp; <b>..-.</bb></td><td>G &nbsp; <b>--.</bb></td><td>H &nbsp; <b>....</bb></td><td>I &nbsp; <b>..</bb></td><td>J &nbsp; <b>.---</bb></td></tr>
<tr>
<td>K &nbsp; <b>-.-</bb></td><td>L &nbsp; <b>.-..</bb></td><td>M &nbsp; <b>--</bb></td><td>N &nbsp; <b>-.</bb></td><td>O &nbsp; <b>---</bb></td><td>P &nbsp; <b>.--.</bb></td><td>Q &nbsp; <b>--.-</bb></td><td>R &nbsp; <b>.-.</bb></td><td>S &nbsp; <b>...</bb></td><td>T &nbsp; <b>-</bb></td></tr>
<tr>
<td>U &nbsp; <b>..-</bb></td><td>V &nbsp; <b>...-</bb></td><td>W &nbsp; <b>.--</bb></td><td>X &nbsp; <b>-..-</bb></td><td>Y &nbsp; <b>-.--</bb></td><td>Z &nbsp; <b>--..</bb></td><td>0 &nbsp; <b>-----</bb></td><td>1 &nbsp; <b>.----</bb></td><td>2 &nbsp; <b>..---</bb></td><td>3 &nbsp; <b>...--</bb></td></tr>
<tr>
<td>4 &nbsp; <b>....-</bb></td><td>5 &nbsp; <b>.....</bb></td><td>6 &nbsp; <b>-....</bb></td><td>7 &nbsp; <b>--...</bb></td><td>8 &nbsp; <b>---..</bb></td><td>9 &nbsp; <b>----.</bb></td><td>. &nbsp; <b>.-.-.-</bb></td><td>, &nbsp; <b>--..--</bb></td><td>? &nbsp; <b>..--..</bb></td><td>- &nbsp; <b>-....-</bb></td></tr>
<tr>
<td>= &nbsp; <b>-...-</bb></td><td>: &nbsp; <b>---...</bb></td><td>; &nbsp; <b>-.-.-.</bb></td><td>( &nbsp; <b>-.--.</bb></td><td>) &nbsp; <b>-.--.-</bb></td><td>/ &nbsp; <b>-..-.</bb></td><td>" &nbsp; <b>.-..-.</bb></td><td>$ &nbsp; <b>...-..-</bb></td><td>' &nbsp; <b>.----.</bb></td><td>&para; &nbsp; <b>.-.-..</bb></td></tr>
<tr>
<td>_ &nbsp; <b>..--.-</bb></td><td>@ &nbsp; <b>.--.-.</bb></td><td>! &nbsp; <b>---.</bb></td><td>! &nbsp; <b>-.-.--</bb></td><td>+ &nbsp; <b>.-.-.</bb></td><td>~ &nbsp; <b>.-...</bb></td><td># &nbsp; <b>...-.-</bb></td><td>&amp; &nbsp; <b>. ...</bb></td><td>&frasl; &nbsp; <b>-..-.</bb></td><td>&nbsp;</td></tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</font>
 <div id="Footer1"></div>
 <div id="Footer">
<div class="m">Morse Code</div>
<div class="dev">This website is developed by  Joshua Natad  and Joemari Sevilla. 
 </div>
  </div>

</body>
</html>
