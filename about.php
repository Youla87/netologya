<?php
$userName = 'Юлия';
$userAge = '29 лет';
$userEmail ='ynasnasnas@gmail.com';
$userSity = 'Уфа';
$userInfo = 'Я контент-менеджер';
?>
<div>
<h1>Страница пользователя Юлия Насырова<h1>
  <table>
    <tr>
    <td>Имя</td>
    <td>  <?= $userName ?>  </td>
    </tr>
    <tr>
      <td>Возраст</td>
      <td>  <?= $userAge ?>  </td>
    </tr>
    <tr>
    <td>Адрес электронной почты</td>
    <td><a href='mailto:ynasnasnas@gmail.com'</a><?= $userEmail ?></td>
    </tr>
    <tr>
    <td>Город</td>
    <td>  <?= $userSity ?>  </td>
    </tr>
    <tr>
    <td>О себе</td>
    <td>  <?= $userInfo ?>  </td>
    </tr>
  </table>
