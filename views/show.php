<?php require 'head.part.php'; ?>
<?php 
$C = new Counter();
$counter = $C->get($_GET['id']);
?>
<h1>Show time </h1>
<h2><?php echo $counter->name ?> : <?php echo $counter->count ?></h2>
<button>+</button>



<?php require 'foot.part.php'; ?>