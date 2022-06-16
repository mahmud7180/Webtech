<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Webtech</to>
<from>3305</from>
<heading>Grade F</heading>
<body>Kazi Sadia</body>
<body>My Grade Is F</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>