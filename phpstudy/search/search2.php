<?php 
// ^ : start(outside of () or []), not (inside of () or [])
// i : doesn't care upper/lower character
// (?: )? : doesn't input () into $matches
preg_match('~^(?:http://)?([^/]+)~i','http://www.php.net/indaex.html', $matches);
print_r($matches);
$host = $matches[1];
echo '<br />';
#preg_match('~^(?:www.)?(\w+\.\w+)~', $host, $domain);
preg_match('~[^.]+\.[^.]+$~', $host, $matches); // $ : end. from the end to the front.
echo "domain name is {$matches[0]}\n";
?>