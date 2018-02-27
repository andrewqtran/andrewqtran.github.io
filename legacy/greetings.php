<?php
 
 $b = time();

 $hour = date("g",$b);
 $m = date ("A", $b);

 if ($m == "AM")
 {
 if ($hour == 12)
 {
 echo "Good evening! You're up late.";
 }
 elseif ($hour < 4)
 {
 echo "Good evening! You're up late.";
 }
 elseif ($hour > 3)
 {
 echo "Good morning!";
 }
 }

 elseif ($m == "PM")
 {
 if ($hour == 12)
 {
 echo "Good afternoon!";
 }
 elseif ($hour < 7)
 {
 echo "Good afternoon!";
 }
 elseif ($hour > 6)
 {
 echo "Good evening!";
 }
 }

 ?> 