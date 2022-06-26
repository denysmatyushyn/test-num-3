<?php

echo "Hello, please type a string to do coding:\n";
$stringCoding = fread(STDIN, 100);


echo "Choose a point in the menu to code the string: " , $pointMenu , "\n";
echo "1. md5 \n";
echo "2. sha256 \n";
echo "3. ripemd256 \n";
echo "4. tiger192,4 \n";
echo "5. haval256,4 \n";
echo "6. Exit \n";
$pointMenu = fread(STDIN, 1);

switch ($pointMenu) {
    case 1:
        echo hash("md5",$stringCoding);
        break;
    case 2:
        echo hash("sha256",$stringCoding);
        break;
    case 3:
        echo hash("ripemd256",$stringCoding);
        break;
    case 4:
        echo hash("tiger192,4",$stringCoding);
        break;
    case 5:
        echo hash("haval256,4",$stringCoding);
        break;
	case 6:
        break;
}
?>
