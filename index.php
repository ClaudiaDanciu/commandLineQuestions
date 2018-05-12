<?php
echo 'What is your favourite colour? ';


//Add code here to create an array called $favourites
$favourites=[0,1,2,3];
$favourites [0]=stream_get_line(STDIN, 100, "\n");
echo $favourites[0];
echo "\n";
//Add code to read the response and store your favourite colour in the first position of the favourites array
echo 'What is your favourite food? ';

// Add code to read the response and store your favourite food in the second position of the favourites array
$favourites [1]=stream_get_line(STDIN, 100, "\n");
echo $favourites[1];
echo "\n";  

echo 'What is your favourite place? ';
// Add code to read the response and store your favourite place in the third position of the favourites array
$favourites[2]=stream_get_line(STDIN, 100, "\n");
echo $favourites[2];
echo "\n";

//Add code to echo each element of the array individually
//
echo $favourites[0].  "\n" . $favourites[1]."\n" . $favourites[2];

  
    
        
  