<?php
session_start();

// إذا تم إرسال الاسم لأول مرة
if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Session Test</title>
</head>
<body>

<?php

if (!isset($_SESSION['name'])) {

    ?>

    <form method="post" action="">
        <input type="text" name="name" placeholder="اكتب اسمك">
        <button type="submit">إرسال</button>
    </form>

    <?php
} else {

    $name = $_SESSION['name'];
    echo "مرحبا يا $name. هذه ليست زيارتك الأولى.";
}
?>

</body>
</html>