<?php 

    // file system - part 2

    $file = 'readme.txt';

    //opening a file for reading
    // $handle = fopen($file, 'r'); //r means read only
    // $handle = fopen($file, 'r+');    //r+ allows you to write from first line
    $handle = fopen($file, 'a+');   //write at the end of line

    // read the file
    // echo fread($handle, filesize($file));   //read all
    // echo fread($handle, 112);   //read 112 of file

    // // read a single line
    // echo fgets($handle);
    
    // // read a single character
    // echo fgetc($handle);

    // writing to a file
    fwrite($handle, "\nEverything popular is wrong");
    
    //close the file
    fclose($handle);

    //delete a file
    unlink($file)
?>