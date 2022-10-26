<?php 
// Почему не отработало вот такое: include_once '../menu.php'; ???
include_once resource_path("/views/menu.php"); ?>

<form action="/news-add" method="post" style="display:grid; gap: 10px; max-width:450px; justify-content:center; margin: 0 auto;">
    <label for="title">название новости</label>
    <input type="text" name="title" id="title">
    <label for="text">Полное описание новости</label>
    <textarea name="text" id="text"> </textarea>
    <label for="small-text">Краткое описание новости</label>
    <textarea name="small-text" id="small-text"> </textarea>
    <button type="submit">Сохранить новость</button>
</form>