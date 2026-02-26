<?php
session_start();

// 未登入不能進入
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: login.php");
    exit;
}

// 登出功能
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// 資料庫連線設定
$host = "127.0.0.1";
$db   = "booking_form";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("資料庫連線失敗：" . $e->getMessage());
}

// 刪除資料
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $pdo->prepare("DELETE FROM apple WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: admin.php");
    exit;
}

// 搜尋功能
$keyword = $_GET['search'] ?? "";
if ($keyword) {
    $stmt = $pdo->prepare("SELECT * FROM apple
                           WHERE name LIKE ? OR phone LIKE ?
                           ORDER BY date DESC");
    $stmt->execute(["%$keyword%", "%$keyword%"]);
} else {
    $stmt = $pdo->query("SELECT * FROM apple ORDER BY date DESC");
}
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>管理後台主頁</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">

    <!-- 首頁標題與登出 -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-indigo-700">👋 歡迎來到後台管理主頁</h1>
        <a href="admin.php?logout=1" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">登出</a>
    </div>

    <!-- 搜尋區 -->
    <form method="GET" class="flex items-center mb-4">
      <input type="text" name="search" value="<?php echo htmlspecialchars($keyword); ?>"
             placeholder="輸入姓名或電話搜尋"
             class="border rounded-l px-3 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-indigo-400">
      <button type="submit"
              class="bg-indigo-600 text-white px-4 py-2 rounded-r hover:bg-indigo-700">
        搜尋
      </button>
      <?php if ($keyword): ?>
        <a href="admin.php" class="ml-3 text-red-500 hover:underline">清除搜尋</a>
      <?php endif; ?>
    </form>

    <!-- 資料表 -->
    <?php if (count($records) > 0): ?>
      <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
          <thead class="bg-indigo-100">
            <tr>
              <th class="py-2 px-4 border">ID</th>
              <th class="py-2 px-4 border">姓名</th>
              <th class="py-2 px-4 border">電話</th>
              <th class="py-2 px-4 border">日期</th>
              <th class="py-2 px-4 border">備註</th>
              <th class="py-2 px-4 border">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($records as $row): ?>
              <tr class="hover:bg-gray-50">
                <td class="py-2 px-4 border"><?php echo $row['id']; ?></td>
                <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['name']); ?></td>
                <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['phone']); ?></td>
                <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['date']); ?></td>
                <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['what']); ?></td>
                <td class="py-2 px-4 border text-center">
                  <a href="admin.php?delete=<?php echo $row['id']; ?>"
                     onclick="return confirm('確定要刪除這筆紀錄嗎？')"
                     class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                     刪除
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p class="text-gray-600">目前沒有任何符合的預約紀錄。</p>
    <?php endif; ?>
  </div>
</body>
</html>
