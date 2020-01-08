<?php $event = Event::$oneEvent;?>

<div class="container border shadow p-0">
	<div class="bg-danger ">
	<h3 class="text-white p-2"><?= $event->category;?> match</h3>
	</div>
	<div class="text-center">
		<h1 class="p-4">
			<?= $event->team1;?> - <?= $event->team2;?>
		</h1>
	</div>
	<div class="p-1">
		<h3><?= $event->date;?></h3>
	</div>
</div>



 