<?php
  session_start();
  if(isset($_COOKIE['already_survey'])){
    header('location: result.php');
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/survey_style.css">
    <title>Survey</title>
</head>
<body>

<div class="container">
<form action="validation.php" method='post'>
  <h2>Are You satisfied with the level of cleanliness ?</h2>
  <ul>
  <li>
    <input type="radio" id="f-option" name="q1" value='10'>
    <label for="f-option">Excellent</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="q1" value='5'>
    <label for="s-option">Good</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t-option" name="q1" value='3'>
    <label for="t-option">Bad</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
 <!-- ! -->
 <!-- ! -->
 <h2>Are you satisfied with the service price ?</h2>
  <ul>
  <li>
    <input type="radio" id="f2-option" name="q2" value='10'>
    <label for="f2-option">Excellent</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s1-option" name="q2" value='5'>
    <label for="s1-option">Good</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t2-option" name="q2" value='3'>
    <label for="t2-option">Bad</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
<!-- !!!!!! -->
  <h2>Are you satisfied with the nursing service ?</h2>
  <ul>
  <li>
    <input type="radio" id="f3-option" name="q3" value='10'>
    <label for="f3-option">Excellent</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s3-option" name="q3" value='5'>
    <label for="s3-option">Good</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t3-option" name="q3" value='3'>
    <label for="t3-option">Bad</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
<!-- ! -->
  <h2>Are you satisfied with the level of the doctor ?</h2>
  <ul>
  <li>
    <input type="radio" id="f4-option" name="q4" value='10'>
    <label for="f4-option">Excellent</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s4-option" name="q4" value='5'>
    <label for="s4-option">Good</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t4-option" name="q4" value='3'>
    <label for="t4-option">Bad</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
<!--!!!!!-->
  <h2>Are you satisfied with the calmness in the hospital</h2>
  <ul>
  <li>
    <input type="radio" id="f5-option" name="q5" value='10'>
    <label for="f5-option">Excellent</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s5-option" name="q5" value='5'>
    <label for="s5-option">Good</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t5-option" name="q5" value='3'>
    <label for="t5-option">Bad</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>

<button type='submit'>Result</button>
</div>
</form>

<!-- copyrights -->
<div class="signature">
	<p>Made with <i class="much-heart"></i> by <a href="https://codepen.io/AngelaVelasquez">Adham Elganzoury</a></p>
</div>
</body>
</html>
