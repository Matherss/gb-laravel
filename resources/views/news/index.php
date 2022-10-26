<?php 
// Почему не отработало вот такое: include_once '../menu.php'; ???
include_once resource_path("/views/menu.php"); ?>

<div>
    Новости
</div>

<?php foreach ($news as $item): ?>
    <a href="/news/<?php echo $item['id']?>">Новость <?php echo $item['title'] ?></a> <br/>
<?php endforeach; ?>

<?php if(count($news) == 0) echo 'Нет данных' ?>
