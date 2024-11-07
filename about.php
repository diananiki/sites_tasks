<?php
    $title = "Про нас";
    require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php";
?>
<div class="container mt-2">
    <h1 class="mt-5">Про нас</h1>
    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите почту" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>
<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php";

?>