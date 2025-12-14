<?php
if (isset($_FILES['myfile'])) {

    $tmp  = $_FILES['myfile']['tmp_name'];   
    $name = $_FILES['myfile']['name'];       

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }
    move_uploaded_file($tmp, "uploads/" . $name);

    echo "تم رفع الملف بنجاح";
} else {
    echo "لم يتم رفع أي ملف";
}
?>