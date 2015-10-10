<!DOCTYPE html>
<html>
<title>Cryptanoia : Miscellany of Cryptography </title>
<head>
    <link href="css/master.css" rel="stylesheet" type="text/css"/>
<style type="text/css"> 
#Headerr{
    height: 735px;
    background-color: #E61037;
}
#Headerr2{
    height: 735px;
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
     <li><a>About<span class="drop-down"></span></a>
      <ul>
        <li><a>Island Info</a></li>
        <li><a>Native Culture</a></li>
        <li><a>Wildlife</a></li>
      </ul>
    </li>
    <li><a href="contact.php">Contact<span class="drop-down"></span></a>
     
    </li>
   
  </ul>
</div>
<div id="Heading">
</div>
<div id="Header3">  <center><div id="titles"> Atbash</div></font></center><br><br>
</div>
<div id="Headerr">
<pre>



  <div id= "tit">What is Atbash?</div>
  <hr width="50%">
  <div id="fss">
   Atbash is a simple substitution cipher or the Hebrew 
   alphabet. It consists in substituting aleph (the first
   letter) for tav (the last), beth (the second) for shin 
   (one before last), and so on, reversing the alphabet. 
   Hence the name, Aleph-Tav-Beth-Shin (. In the Book 
   of Jeremiah, Lev Kamai (51:1) is Atbash for  Kasdim
   (Chaldeans), and Sheshakh (25:26; 51:41) is Atbash
   for Bavel(Babylon). 
</div></div>
<div id="Headerr2"><div id="fss"><pre>


It is considered a weak cipher because it only has one 
possible key, and it is a simple monoalphabetic 
substitution cipher. However, this may not have been an
issue at the time when the cipher was first devised.
Atbash can also be used to mean the same thing in any
other alphabet as well. This is a very simple 
substitution cipher.</pre>
<br><br>
Would you like to learn more about Atbash?
<a href="atbash.php" class="action-button shadow animate blue">TRY!</a></center>
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
