<?php
    $title = "Главная страница";
    require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php";
?>
<div class="container mt-2">
    <h1 class="mt-5">Главная страница</h1>
</div>
<?php
/*    $file = fopen("text.txt", "a");
    fwrite($file, "Добро пожаловать\n[~'o']~");
    fclose($file);*/

    $file = fopen("text.txt", "r");
    $content = fread($file, filesize("text.txt"));
    fclose($file);
    echo "<pre>".$content."</pre>";


    echo date('d.m.y h:i:s');

/*    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";*/

/*    $message = "Прив кд чд";
    $to = "admin@mail.ru";
    $from = "home@mail.ru";
    $subject = "Знакомство";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers ="From^ $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);*/

    require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php";
?>