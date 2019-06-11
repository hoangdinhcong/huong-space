<?php
    $valid = '';
    if ($_POST) {
        if ($_POST['password'] == '*r4Q4y') {
            $valid = 'Ok';
        } else {
            $valid = '';
        }
    }

    if($valid == 'Ok') { 
        $file_path = 'siamdata/#contact.csv';
        $filename = 'siam_data.csv';
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"".$filename."\""); 
        echo readfile($file_path);
    } else {
        echo '<form method="POST">
                <input type="password" name="password" id="password">
                <input type="submit" value="Confirm">
            </form>';
    }
?>