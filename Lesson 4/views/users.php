<?php
/**@var \App\models\User[] $users*/
?>

<h1>Все пользователи</h1>
<?php foreach ($users as $user) : ?>
    <?php $user = json_decode($user, true); ?>
    <div style="display: flex; justify-content: space-around; align-items: baseline">
        <p>Имя: <span style="color: #0591ba; font-weight: bold"><?=$user['name']?></span></p>
        <p>Логин: <span style="color: #0591ba; font-weight: bold"><?=$user['login']?></span></p>
        <a style="text-decoration: none; color: #000000" href="?c=user&a=one&id=<?=$user['id']?>">Подробнее</a>
        <br>
    </div>
<?php endforeach; ?>
