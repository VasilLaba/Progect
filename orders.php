<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Занесення в базу</title>
  <link rel="stylesheet" type="text/css" href="style_ord.css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="/css/reset.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php
        include("include/header.php");
  ?>
  <div class="make_order">
  	<h2>Зробити замовлення</h2>
  </div>
  <img class="bike_order" src="images/bike-order.jpg" alt=""/>
  <div class="description">
        <p text-align="justify">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Купляючи наш товар ви можете бути <br/> 
            впевнені в його якості, адже ми надаємо <br/>
            гарантію на 2 роки. Наші електромопеди <br/> 
		    показують найкращі результати у всіх  <br/>
            сферах тестування, саме тому тисячі  <br/>
            українців вже користуються саме нашою <br/>
            продукцією.
        </p>
  </div>
	
  <form class="order_form" method="post" action="orders.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Ваше місто</label>
  	  <input type="text" name="sity">
  	</div>
    <div class="input-group">
  	  <label>ФІО</label>
  	  <input type="text" name="FIO">
  	</div>
    <div class="input-group">
  	  <label>Адреса</label>
  	  <input type="text" name="adress">
  	</div>
    <div class="input-group">
  	  <label>Поштовий індекс</label>
  	  <input type="text" name="postindex">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
    <div class="input-group">
  	  <label>Номер телефону</label>
  	  <input type="text" name="phone">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="order">Замовити</button>
  	</div>
  </form>
  <?php
    include("include/footer.php");
  ?>
</body>
</html>