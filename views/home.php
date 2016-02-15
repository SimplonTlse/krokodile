<?php include 'head.part.php' ?>

<h1>Krokodile</h1>

<ul>
<?php
$counters = new Counter();
foreach($counters->all() as $c) : ?>
	<li><a href="?id=<?php echo $c->id ?>&p=show"><?php echo $c->name ?></a></li>
<?php endforeach ?>
</ul>
<?php include 'foot.part.php' ?>