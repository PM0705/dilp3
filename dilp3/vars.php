<?php
function getPostValue($key)
{
    $value = "";
    if (isset($_POST[$key])) {
        $value = $_POST[$key];
    }
    return $value;
}
?>


<!-- データベースに接続関数（サンプル） -->
<?php
// データベースに接続
function connectDB()
{
    $pdo = "";
    $dsn = 'mysql:dbname=pkstore;host=localhost';
    try {
        $pdo = new PDO($dsn, 'root', 'root');
        return $pdo;
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}
?>