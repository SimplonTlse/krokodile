<?php include 'head.part.php' ?>

<h1>Krokodile</h1>


<?php
$foo = new Bidule();
if($foo->getTruc()) {
	echo 'le truc est vrai';
} else {
	echo 'le truc est faux';
} ?>

<?php include 'foot.part.php' ?>