<?php 
	$event= Event::$events;  
	$category = Category::$categories; 
?>
<h2 class="text-center pb-5">Sport Calendar</h2>

<div class="border row">
	<div class="col-8 ">
		<h2 class="text-center py-5">Events</h2>
		<?php if($event != false): ?>
			<?php foreach ($event as $ev ):?>
				<div class="border-top border-primary shadow p-4 m-2">
					<h2>
						<a href="/sportradar/show/<?= $ev['id']?>">
							<?= $ev['date'];?> 
							<?= $ev['team1'];?> - 
							<?= $ev['team2'];?>	
						</a> 
					</h2>
				</div>	
			<?php endforeach; ?>
		<?php else: ?>
			<h4 class="p-4 text-center">No events for the selected category</h4>
		<?php endif; ?>
	</div>
	
	<div class="col-4">
			<h2>Filter</h2>
			<div class="right-box">
					<h5 class="pt-3"><a href="/sportradar/events">Show All</a></h5>
				<?php foreach ($category as $key => $value): ?>
					<h5 >
						<a href="/sportradar/events/<?=$value['category_name']?>"/>
							<?=$value['category_name']?>	
						</a>	
					</h5>
				<?php endforeach ?>
					
			</div>
	</div>
</div>