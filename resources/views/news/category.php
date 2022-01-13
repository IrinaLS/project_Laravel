<h1>Список категорий (новостных блоков):</h1>
<br>
<?php foreach($category as $categoryItem): ?>
  <div>
	<strong>

  <a href="<?=route('news.oneCategoryNews', ['category' => $categoryItem])?>">
           <?=$categoryItem?>
  </a>
  <hr>  
  </strong>
  </div>
<?php endforeach;?>