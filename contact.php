<?php
    session_start();

    $title = "Контакты";
    require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php";
?>
    <div class="container mt-2">
        <h1 class="mt-5">Контакты</h1>
        <div class="text text-success"><?= isset($_SESSION['success_mail']) ? $_SESSION['success_mail'] : '' ?></div>
        <form action="check_contact.php" method="post">
            <input type="text" name="username" value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>" placeholder="Введите имя" class="form-control">
            <div class="text-danger"><?= isset($_SESSION['error_name']) ? $_SESSION['error_name'] : '' ?></div><br>
            <input type="email" name="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>" placeholder="Введите почту" class="form-control">
            <div class="text-danger"><?= isset($_SESSION['error_mail']) ? $_SESSION['error_mail'] : '' ?></div><br>
            <input type="text" name="subject" value="<?= isset($_SESSION['subject']) ? $_SESSION['subject'] : '' ?>" placeholder="Тема сообщения" class="form-control"><br>
            <textarea name="message" placeholder="Ваше сообщение" class="form-control"><?= isset($_SESSION['message']) ? $_SESSION['message'] : '' ?></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php";
?>