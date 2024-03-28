<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo"><i class="fa-solid fa-laptop"></i> Laptop</a>

      <nav class="navbar">
         <a href="home.php">Trang chủ</a>
         <a href="about.php">Giới thiệu</a>
         <a href="product.php">Sản phẩm</a>
         <a href="orders.php">Đặt hàng</a>
         <a href="contact.php">Liên hệ</a>
      </nav>

      <div class="icons">
         <?php
         $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $count_cart_items->execute([$user_id]);
         $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$user_id]);
         if ($select_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
            <p class="name"><?= $fetch_profile['name']; ?></p>
            <div class="flex">
               <a href="profile.php" class="btn">Thông tin</a>
               <a href="components/user_logout.php" onclick="return confirm('Bạn có chắc muốn đăng xuất?');" class="delete-btn">Đăng xuất</a>
            </div>
            <p class="account">
               <a href="login.php">Đăng nhập</a> or
               <a href="register.php">Đăng ký</a>
            </p>
         <?php
         } else {
         ?>
            <p class="name">Vui lòng đăng nhập!</p>
            <a href="login.php" class="btn">Đăng nhập</a>
         <?php
         }
         ?>
      </div>

   </section>

   <!--  -->
   
</header>
<!--  -->
<header class="header    " data-sub="0">
    <div class="header__top">
        <div>
            <a href="/" class="header__logo">
                <i class="iconnewglobal-logo"></i>
            </a>
  <div class="header__listtop">
    <div class="divitem">
        <a href="home.php">Trang Chủ</a>
    </div>
    <div class="bordercol"></div>
    <div class="divitem">
        <a href="about.php">Giới Thiệu </a>
    </div>
    <div class="bordercol"></div>
    <div class="divitem">
        <a href="product.php">Sản phẩm</a>
    </div>
    <div class="bordercol"></div>
    <div class="divitem">
        <a href="orders.php">Đặt Hàng</a>
    </div>
    <div class="bordercol"></div>
    <div class="divitem">
        <a href="contact.php">Liên Hệ</a>
    </div>
</div>           
    
<form action="/tim-kiem" onsubmit="return suggestSearch(event);" class="header__search">
    <input id="skw" type="text" class="input-search" onkeyup="suggestSearch(event);" placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
    <button type="submit">
       
        <a href="search.php"><i class="icon-search"></i></a>
    </button>
    <div id="search-result"></div>
</form>
<a href="/lich-su-mua-hang" class="name-order">
    Tài khoản & Đơn hàng
</a>
<a href="/cart" class="header__cart menu-info">
    <div class="box-cart">
        <i class="iconnewglobal-cart"></i>
        <span class="cart-number"></span>
    </div>
    <span>Giỏ hàng</span>
</a>



  
        </div>
    </div>
   </header>