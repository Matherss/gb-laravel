<?php 
// Почему не отработало вот такое: include_once '../menu.php'; ???
include_once resource_path("/views/menu.php"); ?>

<div>
    Категории
</div>

<?php foreach ($data as $item): ?>
    <a href="/categories/<?php echo $item['id']?>">Категория <?php echo $item['name'] ?></a> <br/>
<?php endforeach; ?>

