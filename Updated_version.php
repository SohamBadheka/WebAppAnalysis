
<?php
$file = 'welcome.txt';
$contents = file($file);     
$contents[3] = $contents[3] . "\n"; // Gives a new line
$contents[4] = $contents[4] . "\n"; 
$contents[5] = $contents[5] . "\n"; 
file_put_contents($file, implode('',$contents));

$contents = file($file);
$contents[6] = "<url><loc>http://www.heri-azhar.net/iron-man</loc>"."\n"." <priority>0.5</priority>"."\n"." </url>\n";
     
file_put_contents($file, implode('',$contents));

?>
