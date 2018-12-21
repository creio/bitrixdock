<?php
ini_set( 'display_errors', 'off' );
$error = false;
$message = '';
if ( isset( $_GET[ 'action' ] ) ) {
    switch ( $_GET[ 'action' ] ) {
        case 'phpinfo': {
            phpinfo();
            exit();
            break;
        }
        case 'restore': {
            $path = $_SERVER[ 'DOCUMENT_ROOT' ] . DIRECTORY_SEPARATOR . 'restore.php';
            $url = 'http://www.1c-bitrix.ru/download/scripts/restore.php';
            if ( !file_exists( $path ) ) {
                $data = file_get_contents( $url );
                if ( $data === false || file_put_contents( $path, $data ) === false ) {
                    $error = true;
                }
            }
            if ( !$error ) {
                header( 'Location: http://' . $_SERVER[ 'HTTP_HOST' ] . '/restore.php' );
                exit();
            } else {
                $message = 'Не удалось получить файл restore.php';
            }
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Docker Bitrix Dev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    body {
        height: 100%;
        width: 100%;
        background: #957bbe;
    }
    h1 {
        color: #fff;
        text-align: center;
        width: 400px;
        height: 50px;
    }
    .wrap {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    a {
        color: #0f17a4;
    }
</style>
</head>
<body>
    <div class="container wrap">
        <h1>Bxdocker Online!</h1>

        <div>
            <?= $message ?>
        </div>

        <div class="row">
            <div class="col">
                <ul>
                    <li><a href="/?action=phpinfo" target="_blank">PHP info</a></li>
                    <li><a href="/?action=restore">Восстановить 1С-Битрикс</a></li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li><a href="http://www.1c-bitrix.ru/download/scripts/bitrixsetup.php">bitrixsetup.php</a></li>
                    <li><a href="http://www.1c-bitrix.ru/download/scripts/restore.php">restore.php</a></li>
                    <li><a href="http://dev.1c-bitrix.ru/download/scripts/bitrix_server_test.php">bitrix_server_test.php</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>