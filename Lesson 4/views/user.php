<?php
/** @var \App\models\User $user */
?>
<h1>Пользователь</h1>
<?php
$user = json_decode($user, true);
?>
<p>Имя: <span style="color: #0591ba; font-weight: bold"><?=$user['name'] ?></span></p>
<p>Логин: <span style="color: #0591ba; font-weight: bold"><?=$user['login'] ?></span></p>

<a style="text-decoration: none; color: #000000" onmouseover="this.style.Color='#0591ba';" onmouseout="this.style.Color='#0591ba';" href="?c=user&a=all">Назад</a>
