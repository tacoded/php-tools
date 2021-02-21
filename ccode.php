<!DOCTYPE html>
<html lang="en-US">
<head>
<title>ccode</title>
</head>
<body>
<p>input serial number</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="serial" pattern="[A-Za-z0-9]+" required>
<input type="submit" VALUE="execute">
</form>

<?php
$serial= $_POST['serial'];
$SERIAL=strtoupper($serial);

$c1='US-';$sha1=sha1($c1.$SERIAL);
$c2='RW-';$sha2=sha1($c2.$SERIAL);
$c3='JP-';$sha3=sha1($c3.$SERIAL);
$c4='IL-';$sha4=sha1($c4.$SERIAL);
$c5='EG-';$sha5=sha1($c5.$SERIAL);

if($_SERVER["REQUEST_METHOD"]=="POST") {
echo $SERIAL.'<br><br>';
echo'proginv system ccode CCODE-'.$c2.$sha1.'<br><br>';
echo'proginv system ccode CCODE-'.$c3.$sha2.'<br><br>';
echo'proginv system ccode CCODE-'.$c4.$sha3.'<br><br>';
echo'proginv system ccode CCODE-'.$c4.$sha4.'<br><br>';
echo'proginv system ccode CCODE-'.$c5.$sha5.'<br><br>'; } ?>

</body>
</html>
