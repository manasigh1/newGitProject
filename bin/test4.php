<?
$html="hello \"this is not Bold\"";
$a = htmlentities($html);
$txt=html_entity_decode($html);
echo $a;
echo '<br/>';
echo $txt;
?>