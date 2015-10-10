<!DOCTYPE html>
<html>
<title>Cryptanoia : Miscellany of Cryptography </title>
<head>
    <link href="css/master.css" rel="stylesheet" type="text/css"/>
<style type="text/css"> 
#Headerr{
    height: 655px;
    background-color: #E61037;
}
#Headerr2{
    height: 655px;
    background-color: #DEDEDE;
}
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
#fss{
font-family: monospace;
font-size: 30px;
color: #FFFFFF;
text-align: center;
}

.animate
{
  transition: all 0.1s;
  -webkit-transition: all 0.1s;
}

.action-button
{
  position: relative;
  padding: 10px 40px;
  margin: 0px 10px 10px 0px;
 
  border-radius: 10px;
  font-family: 'Pacifico', cursive;
  font-size: 25px;
  color: #FFF;
  text-decoration: none;  
}


.blue
{
  background-color: #3498DB;
  border-bottom: 5px solid #2980B9;
  text-shadow: 0px -2px #2980B9;
}
action-button:active
  {
    transform: translate(0px,5px);
    -webkit-transform: translate(0px,5px);
    border-bottom: 1px solid;
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
</div>
<div id="Header3">  <center><div id="titles"> One Time Pad</div></font></center><br><br>
</div>
<div id="Headerr">
<pre>



  <div id= "tit">What is OTP?</div>
  <hr width="50%">
  <div id="fss">
   In cryptography, the one-time pad (OTP) is an encryption technique that 
   cannot be cracked if used correctly. In this technique, a plaintext is
   paired with a random secret key (also referred to as a one-time pad).
   Then, each bit or character of the plaintext is encrypted by combining
  it with the corresponding bit or character from the pad using modular
  addition. If the key is truly random, is at least as long as the plaintext,
  is never reused in whole or in part, and is kept completely secret, then 
  the resulting ciphertext will be impossible to decrypt or to break.
</div></div>
<div id="Headerr2"><div id="fss"><pre>

First described by Frank Miller in 1882, the one-time pad was re-invented
in 1917. On July 22, 1919, U.S. Patent 1,310,719 was issued to Gilbert S.
Vernam for the XOR operation used for the encryption of a one-time pad. 
It is derived from the Vernam cipher, named after Gilbert Vernam, one of
its inventors. Vernam's system was a cipher that combined a message with 
a key read from a punched tape. In its original form, Vernam's system was
vulnerable because the key tape was a loop, which was reused whenever 
the loop made a full cycle. One-time use came later, when Joseph Mauborgne
recognized that if the key tape were totally random, then cryptanalysis 
would be impossible.</pre>
<br><br>
Would you like to learn more about OTP?
<a href="onetimepad.php" class="action-button shadow animate blue">TRY!</a></center>
</div>
</div>





<div id="Footer"><div class="devs"><br>This website is developed by Joshua Natad  and Joemari Sevilla. <br>
  Published (2015, October)


</div>
  </div>
  </div>
</div>
</body>
</html>
