<?php require 'components/header.php';?>


<div class="site-section">
	<div class="container">
		<div class="row">
			<?php foreach ($books_list as $books_item):?>
				<div class="col-lg-4 mb-4">
					<div class="entry2">
						<div class="entry21">
							<span>Автор:
                        	<strong><?=$books_item['author']?></strong>
                    		</span>
							</p>
							<a href="books_list_category.php?cat_id=<?=$books_item['cat_id']?>"><span> Категория: <strong><?=$books_item['category']?></strong></span>
							</a>
							
						</div>
						
						<a href="views\books_read.php?books_id=<?=$books_item['book_id']?>"><img src="<?=$books_item['book_image']?>" 
															class="image_center"
                                                           alt="<?=$books_item['book_name']?>"></a>
						<p><?=$books_item['short_text']?>...</p>								   
					</div>
				</div>
			<?php endforeach;?>
		</div>

	</div>
</div>

<?php require 'components/footer.php';?>