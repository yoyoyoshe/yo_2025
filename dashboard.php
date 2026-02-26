<?php
session_start();

// 沒登入就跳回 login.html
if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員後台 - 機車維修平台</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

  <!-- Navbar -->
  <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-indigo-700">機車維修平台後台</h1>
    <div>
      歡迎，<?php echo $_SESSION['user']; ?> 
      <a href="logout.php" class="text-red-500 ml-4 hover:underline">登出</a>
    </div>
  </header>

  <!-- Dashboard 數據 -->
  <section class="max-w-5xl mx-auto p-6">
    <h2 class="text-2xl font-bold text-indigo-700 mb-6">儀表板數據</h2>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="font-semibold mb-2">今日預約數</h3>
        <p class="text-3xl text-indigo-600">12</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="font-semibold mb-2">總會員數</h3>
        <p class="text-3xl text-indigo-600">120</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
        <h3 class="font-semibold mb-2">今日收入</h3>
        <p class="text-3xl text-indigo-600">NT$ 8,500</p>
      </div>
    </div>

    <!-- 活動成效 -->
    <div class="mt-10 bg-white p-6 rounded-xl shadow">
      <h3 class="text-xl font-bold mb-4">活動內容與成效</h3>
      <ul class="list-disc pl-5 text-gray-700">
        <li>2024 青春安全同行計畫：送出 300 頂安全帽，社群互動 2000 次</li>
        <li>2023 寒冬巡檢行動：偏鄉弱勢車主受惠 50 位</li>
        <li>2022 長者安全健檢日：年長車主免費健檢 100 台車</li>
      </ul>
    </div>
  </section>
</body>
</html>
