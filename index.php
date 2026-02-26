<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>機車智慧維修預約平台</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Noto Sans TC', sans-serif;
    }

  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- 🧭 Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex items-center">
          <span class="text-xl font-bold text-indigo-700">機車維修平台</span>
        </div>
        <!-- Nav Links -->
        <nav class="space-x-4 text-sm font-medium flex items-center">
          <a href="#features" class="text-gray-700 hover:text-indigo-700">我的車庫</a>
          <a href="#booking" class="text-gray-700 hover:text-indigo-700">預約保養</a>
          <a href="#contact" class="text-gray-700 hover:text-indigo-700">聯絡我們</a>

          <!-- 🔑 登入按鈕 -->
          <a href="login.html"
             class="ml-4 bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
            登入
          </a>
        </nav>
      </div>
    </div>
  </header>

  <!--  Hero 區塊 -->
  <section class="relative bg-gradient-to-r from-indigo-700 via-blue-600 to-indigo-600 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-24 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-10 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight drop-shadow-md">智慧維修．安心每一程</h1>
        <p class="text-lg md:text-xl mb-6">
          一站式機車保養平台，結合創新科技與貼心服務，提供最即時、便捷、透明的保養解決方案，讓您的每一次出發更安心。
        </p>
        <div class="flex gap-4">
          <a href="#booking"
            class="bg-white text-indigo-700 font-semibold py-3 px-6 rounded-full shadow hover:bg-gray-100 transition">立即預約</a>
          <a href="#features"
            class="bg-indigo-900 text-white font-semibold py-3 px-6 rounded-full shadow hover:bg-indigo-950 transition">了解更多</a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="./img/首頁.webp"
          alt="維修插圖" class="w-full max-w-md mx-auto rounded-xl shadow-2xl" />
      </div>
    </div>
    <div class="absolute -top-32 -right-32 w-[400px] h-[400px] bg-indigo-400 opacity-20 rounded-full blur-3xl z-0">
    </div>
  </section>








<!--  我的車庫 -->
<section id="features" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">「我的車庫」智慧管理系統</h2>
    <p class="text-gray-600 text-center text-lg max-w-3xl mx-auto mb-12">
      數位化流程結合顧客資料與維修紀錄，自動排程、即時查詢、再購分析，全方位提升服務品質與顧客黏著度。 </p>
    <div class="grid md:grid-cols-3 gap-8"> <!-- 功能卡片 -->
      <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition text-center"> <img
          src="https://img.icons8.com/fluency/48/calendar--v1.png" class="mx-auto mb-4" />
        <h3 class="text-xl font-semibold mb-2">線上預約排程</h3>
        <p class="text-gray-600">網站或手機即時預約，自動分配時段，有效降低等待。</p>
      </div>
      <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition text-center"> <img
          src="https://img.icons8.com/fluency/48/folder-invoices.png" class="mx-auto mb-4" />
        <h3 class="text-xl font-semibold mb-2">維修紀錄系統化</h3>
        <p class="text-gray-600">保養記錄數位化，提升服務一致性與查詢效率。</p>
      </div>
      <div class="bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition text-center"> <img
          src="https://img.icons8.com/fluency/48/purchase-order.png" class="mx-auto mb-4" />
        <h3 class="text-xl font-semibold mb-2">再購行為分析</h3>
        <p class="text-gray-600">分析習慣，推播提醒與優惠，提升顧客回流率。</p>
      </div>
    </div>
  </div>
</section>


























  <!-- Analysis Section -->
  <section id="analysis" class="py-16 px-6 max-w-5xl mx-auto">
    <h3 class="text-2xl font-bold text-indigo-700 mb-6">活動內容與成效</h3>
    <p class="text-gray-700 leading-relaxed mb-6">
      機車行肩負顧客維修服務的同時，也積極投入社會公益。近年來，隨著社會對企業社會責任的重視提升，許多機車行將公益活動納入年度計畫，建立與社區與顧客的長期連結。
    </p>
    <p class="text-gray-700 leading-relaxed mb-6">
      本機車行自 2022 年起，每年固定舉辦交通安全、弱勢關懷與環境永續等主題活動。例如 2022 年「長者安全健檢日」針對年長者提供免費車輛健檢，2023 年推動「寒冬巡檢行動」，深入偏鄉社區服務弱勢車主。
    </p>
    <p class="text-gray-700 leading-relaxed mb-6">
      2024 年主打「青春安全同行計畫」，與學校合作宣導交通安全，並發送 300 頂安全帽給青年學子，藉由活動提升年輕族群的交通意識並促進品牌好感度，透過社群推廣獲得超過 2000 次互動與轉發。
    </p>
    <p class="text-gray-700 leading-relaxed">
      本機車行未來將持續規劃參與型公益活動，並透過數據回饋機制優化內容，期望與民眾攜手共創更安全、更關懷的用路環境。
    </p>
  </section>
  <!-- Analysis Section -->
  <section id="analysis" class="py-16 px-6 max-w-5xl mx-auto">
    <h3 class="text-2xl font-bold text-indigo-700 mb-6">活動內容與成效</h3>
    <p class="text-gray-700 leading-relaxed mb-6">
      機車行肩負顧客維修服務的同時，也積極投入社會公益。近年來，隨著社會對企業社會責任的重視提升，許多機車行將公益活動納入年度計畫，建立與社區與顧客的長期連結。
    </p>
    <p class="text-gray-700 leading-relaxed mb-6">
      本機車行自 2022 年起，每年固定舉辦交通安全、弱勢關懷與環境永續等主題活動。例如 2022 年「長者安全健檢日」針對年長者提供免費車輛健檢，2023 年推動「寒冬巡檢行動」，深入偏鄉社區服務弱勢車主。
    </p>
    <p class="text-gray-700 leading-relaxed mb-6">
      2024 年主打「青春安全同行計畫」，與學校合作宣導交通安全，並發送 300 頂安全帽給青年學子，藉由活動提升年輕族群的交通意識並促進品牌好感度，透過社群推廣獲得超過 2000 次互動與轉發。
    </p>
    <p class="text-gray-700 leading-relaxed">
      本機車行未來將持續規劃參與型公益活動，並透過數據回饋機制優化內容，期望與民眾攜手共創更安全、更關懷的用路環境。
    </p>
  </section>















  <!-- 📅 預約表單 -->
  <section id="booking" class="bg-gray-50 py-20 px-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
      <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">立即預約您的機車保養</h2>
      <form action="booking.php" method="POST" class="space-y-6">

  <!-- 姓名 -->
  <label for="name" class="block text-gray-700 font-medium">姓名</label>
  <input type="text" id="name" name="name"
         class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500"
         placeholder="請輸入您的姓名" required>

  <!-- 聯絡電話 -->
  <label for="phone" class="block text-gray-700 font-medium">聯絡電話</label>
  <input type="tel" id="phone" name="phone"
         class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500"
         placeholder="請輸入您的電話" required>

  <!-- 預約日期 -->
  <label for="date" class="block text-gray-700 font-medium">預約日期</label>
  <input type="date" id="date" name="date"
         class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500" required>

  <!-- 維修內容（備註） -->
  <label for="message" class="block text-gray-700 font-medium">維修內容 / 備註</label>
  <textarea id="message" name="message" rows="4"
            class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500"
            placeholder="請輸入維修需求或其他備註"></textarea>

  <!-- 提交按鈕 -->
  <button type="submit"
          class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">
    提交預約
  </button>

</form>

    </div>
  </section>



<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>未來發展行動頁面</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 leading-relaxed font-sans">
  <div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-blue-700 mb-4">機車品牌未來發展行動</h1>

    <p class="mb-4">
      「未來發展行動頁面」是整個網站中最具前瞻性的核心功能，主要用於展示各大機車品牌面對產業轉型所規劃的技術升級、永續行動與國際佈局等策略。
    </p>

    <p class="mb-4">
      此頁面首先會以圖表與摘要文字呈現各品牌在智慧機車技術、電動化轉型、永續能源與AI應用上的投入程度，幫助使用者快速掌握趨勢。接著透過表格詳列品牌的具體行動，如Gogoro預計在2026年前擴展亞洲電池交換網絡、<span
        class="font-semibold text-blue-700">YAMAHA</span> 推動語音控制與智慧駕駛系統等，讓使用者了解「誰在做什麼、什麼時候做」。
    </p>

    <p class="mb-4">
      此外，頁面也會展示未來概念車與新技術，搭配3D視覺或影吸引關注；另設有永續發展專區，說明品牌在碳中和、生產轉型與回收技術的承諾。
    </p>

    <p class="mb-4">
      使用者還可透過投票與問卷參與，表達對各品牌未來規劃的期待。整體設計不僅強化資訊透明度，也提升互動性與研究價值，是連接產業與使用者的重要橋梁。
    </p>

    <!-- 可選擇性加入圖表或互動元件 -->
    <div class="mt-8 bg-white shadow-md rounded-xl p-4">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">📊 品牌發展示意表（範例）</h2>
      <table class="w-full text-sm table-auto border-collapse">
        <thead>
          <tr class="bg-gray-100 text-left">
            <th class="p-2 border">品牌</th>
            <th class="p-2 border">發展重點</th>
            <th class="p-2 border">預計完成時間</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-2 border">Gogoro</td>
            <td class="p-2 border">亞洲電池交換網路拓展</td>
            <td class="p-2 border">2026年</td>
          </tr>
          <tr>
            <td class="p-2 border">YAMAHA</td>
            <td class="p-2 border">智慧駕駛與語音控制</td>
            <td class="p-2 border">2025年</td>
          </tr>
          <tr>
            <td class="p-2 border">KYMCO</td>
            <td class="p-2 border">碳中和與再生材料技術</td>
            <td class="p-2 border">2026年</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>






<html lang="zh-Hant">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>機車預約APP多管道下載</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
  <section class="max-w-6xl mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-6">機車預約APP多管道下載</h2>
    <p class="text-center text-lg mb-8">
      提供多平台下載方式，讓您輕鬆預約愛車保養，享受數位化維修服務。
    </p>

    <!-- App Store & Google Play -->
    <div class="flex flex-col md:flex-row justify-center gap-6 mb-8">
      <a href="https://play.google.com" target="_blank"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 flex items-center gap-2">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Google_Play_Arrow_logo.svg/512px-Google_Play_Arrow_logo.svg.png"
          alt="Google Play" class="w-6 h-6" />
        Google Play 下載
      </a>
      <a href="https://www.apple.com/app-store/" target="_blank"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 flex items-center gap-2">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="App Store"
          class="w-6 h-6" />
        App Store 下載
      </a>
    </div>

    <!-- QR Code 區塊 -->
    <div class="flex flex-col items-center mb-12">
      <img src="https://api.qrserver.com/v1/create-qr-code/?data=https://example.com&size=150x150" alt="APP下載QR Code"
        class="mb-4 rounded shadow-md" />
      <span class="text-gray-600 text-sm">掃描 QR Code 立即下載</span>
    </div>

    <!-- 社群平台與異業合作 -->
    <div class="grid md:grid-cols-2 gap-8">
      <!-- 社群平台 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">社群平台同步推廣</h3>
        <p class="mb-4">您可透過LINE、Facebook與Instagram上的官方連結，快速獲取最新下載資訊與優惠活動。</p>
        <div class="flex gap-4">
          <img src="https://cdn.jsdelivr.net/npm/simple-icons@v10/icons/facebook.svg" alt="Facebook"
            class="w-8 h-8" />
          <img src="https://cdn.jsdelivr.net/npm/simple-icons@v10/icons/instagram.svg" alt="Instagram"
            class="w-8 h-8" />
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/LINE_logo.svg" alt="LINE" class="w-8 h-8" />
        </div>
      </div>

      <!-- 異業優惠 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">異業合作優惠下載</h3>
        <p class="mb-2">與合作車險、油品與輪胎品牌合作，提供下載後註冊即可獲得折扣碼。</p>
        <ul class="list-disc pl-5 text-gray-700">
          <li>首次保養享9折優惠</li>
          <li>指定輪胎更換再送禮券</li>
          <li>加入會員積點可兌換免費檢查</li>
        </ul>
      </div>
    </div>
  </section>
</body>
</html>





































































































































































































































































































































































































































































































































































  </html>









































