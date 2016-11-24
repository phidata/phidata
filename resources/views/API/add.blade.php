<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load( $url);
$mysql_hostname = "hostname"; // Example : localhost
$mysql_user = "username";
$mysql_password = "password";
$mysql_database = "database_name";

$dbh = new PDO("mysql:dbname={$mysql_database};host={$mysql_hostname};port=3306", $mysql_user, $mysql_password);

$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
    $title = $xmlObject->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $link = $xmlObject->item($i)->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue;
    $sql = $dbh->prepare("INSERT INTO `my_table_name` (`title`, `url`) VALUES (?, ?)");
    $sql->execute(array(
            $title,
            $link
    ));
    print "Finished Item $title n<br/>";
}
        ?>