<?php
    $numfile = fopen("text_files/num.txt", "r+");
    $num = fgets($numfile) + 1;
    fclose($numfile);

    $update_numfile = fopen("text_files/num.txt", "w");
    fwrite($update_numfile,$num);
    fclose($update_numfile);

    $myfile = fopen("text_files/".$num.".txt", "a+");
    $txt = "Name : ".$_POST['name']."\nEmail : ".$_POST['email']."\nComment : ".$_POST['comment'];
    fwrite($myfile, $txt);
    fclose($myfile);
    echo("Thanks, your message saved at ".$num.".txt");
?>