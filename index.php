<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class='container'>
        <h1>Upload file Nilai PAS </h1>
        <form action="aksi.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" style='margin-top: 30px'>
            <br><input type="submit" style='margin-top: 30px; margin-bottom: 50px;' name="upload" value="Upload" class='btn btn-success'>
        </form>

        <?php

        function daftar_file($dir)
        {
            if (is_dir($dir)) {
                if ($handle = opendir($dir)) {

                    //tampilkan semua file dalam folder kecuali jenis Direktory (Folder)

                    while (($file = readdir($handle)) !== false) {

                        echo '<a target="_blank" href="' . $dir . $file . '">' . $file . '</a><br>' . "\n";
                    }
                    closedir($handle);
                }
            }
        }
        //cara menampilkan 

        echo daftar_file("file/");
        ?>
    </div>




    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

</body>

</html>