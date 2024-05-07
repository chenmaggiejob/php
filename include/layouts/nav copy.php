<nav>
    <a href="index.php" class="<?= ($file == 'index') ? 'active' : ''; ?>">首頁</a>
    <a href="news.php" class="<?= ($file == 'news') ? 'active' : ''; ?>">最新消息</a>
    <a href="products.php" class="<?= ($file == 'products') ? 'active' : ''; ?>">產品介紹</a>
    <a href="contact.php" class="<?= ($file == 'contact') ? 'active' : ''; ?>">聯絡我們</a>
</nav>
<style>
    .active {
        background-color: skyblue;
    }
</style>