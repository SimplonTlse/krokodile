<?php require 'head.part.php'; ?>
<?php 
$C = new Counter();
$counter = $C->get($_GET['id']);
?>
<h1>Show time </h1>
<h2><?php echo $counter->name ?> : <span id="herecomethenumber"><?php echo $counter->count ?></span></h2>
<button counter-id="<?php echo $counter->id ?>">+</button>



<?php require 'foot.part.php'; ?>