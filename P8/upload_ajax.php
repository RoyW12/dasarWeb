<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("jpg", "jpeg", "png");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah jpg, jpeg atau png";
    }

    // if ($file_size > 2097152) {
    //     $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    // }

    if (empty($errors)) {
        if (!is_dir("documents")) {
            mkdir("documents"); 
        }
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>