<?php $category = Category::$categories; ?>

<h2 class="text-center p-4">Select Category:</h2>

<div class="d-flex justify-content-around ">
	<?php foreach ($category as $key => $value): ?>
		<div class="my-5 border p-1 border-info rounded">
			<h3>
				<a href="event/<?= $value['category_name']; ?>" class="text-info">
					<?= $value['category_name']; ?>	
				</a>
			</h3>
		</div>
	<?php endforeach; ?>
</div>


