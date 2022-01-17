<h1>Список новостей</h1>
<br>
<?php foreach($news as $newsItem): ?>
  
  <div>
	<strong>
    <? if ($category == $newsItem['category']):?>
      <a href="<?=route('news.show', [
        'description' => $newsItem['description'],
        'title' => $newsItem['title'],
        'author' => $newsItem['author']])?>">
        <?=$newsItem['title']?></a>
    </strong>
	  <h3>Категория новостей: <?=$newsItem['category']?></h3>
    <p><?=$newsItem['description']?></p>
	  <em>Автор: <?=$newsItem['author']?></em>
    <a href="index.php">Назад</a>
	  <hr>
      <?endif;?>

  </div>

<?php endforeach;?>