<?php 
// Почему не отработало вот такое: include_once '../menu.php'; ???
include_once resource_path("/views/menu.php"); ?>

<div>
    Новости
</div>

<?php foreach ($news as $item => $key): ?>
    <a href="<?=route('news.show', $key['id'])?>">Новость <?php echo $key['title'] ?></a> <br/>
<?php endforeach; ?>

<?php if(count($news) == 0) echo 'Нет данных' ?>
