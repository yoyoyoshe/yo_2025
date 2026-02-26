<?php
// 資料庫連線設定
$host = "localhost";
$db   = "預約表單處理";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ 資料庫連線失敗：" . $e->getMessage());
}

// 表單提交處理
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = $_POST["name"] ?? "";
    $phone   = $_POST["phone"] ?? "";
    $date    = $_POST["date"] ?? "";
    $message = $_POST["message"] ?? "";

    if ($name && $phone && $date) {
        $stmt = $pdo->prepare("INSERT INTO apple (name, phone, date, what) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $date, $message]);

        echo "<h2 style='color:green;'>✅ 預約成功！我們將盡快與您聯繫。</h2>";
        echo "<p>3秒後自動回到首頁...</p>";
        echo "<script>
        setTimeout(function(){
            window.location.href = 'index.php';
        }, 3000); // 3000毫秒 = 3秒
      </script>";

    } else {
        echo "<h2 style='color:red;'>❌ 請填寫完整資料。</h2>";
        echo "<a href='index.php'>返回表單</a>";
    }
}
?>
