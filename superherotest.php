<?php
   $lotteryArray = array("Mike", "John", "Mark", "Angela", "Roger", "Chrisina", "Suzanne", "Sue" , "Ines", "Ian");

   //Sort the array
   sort($lotteryArray);

   //Select the winner
   $winner = rand(0,count($lotteryArray));

   //Prints the winner
   echo "<p>The winner of all the specs is " . strtoupper($lotteryArray[$winner]) . "</p>";

   //Remove the person from the array
   unset($array[$winner]);

   //Do the same again for mugs
   $winner = rand(0,count($lotteryArray));
   echo "<p>The winner of all the mugs is " . strtoupper($lotteryArray[$winner]) . "</p>";
   unset($array[$winner]);

   //and the sausuage rolls
   $winner = rand(0,count($lotteryArray));
   echo "<p>The winner of all the sausage rolls is " . strtoupper($lotteryArray[$winner]) . "</p>";

?>

