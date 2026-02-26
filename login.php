<?php
session_start();

// 帳號密碼設定（可改成資料庫驗證）
$ADMIN_USER = "admin";
$ADMIN_PASS = "1234";

// 登入處理
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $ADMIN_USER && $password === $ADMIN_PASS) {
        $_SESSION["admin_logged_in"] = true; // 設定登入 session
        header("Location: admin.php");       // 登入成功跳轉後台
        exit;
    } else {
        $error = "帳號或密碼錯誤";
    }
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>後台登入</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-bold text-center text-indigo-700 mb-4">管理後台登入</h1>

        <?php if(isset($error)): ?>
            <p class="text-red-500 mb-3"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-4">
                <label class="block mb-1">帳號</label>
                <input type="text" name="username" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1">密碼</label>
                <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
                登入
            </button>
        </form>
    </div>
</body>
</html>
