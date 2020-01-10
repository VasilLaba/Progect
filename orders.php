<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>��������� � ����</title>
  <link rel="stylesheet" type="text/css" href="style_ord.css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="/css/reset.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php
        include("include/header.php");
  ?>
  <div class="make_order">
  	<h2>������� ����������</h2>
  </div>
  <img class="bike_order" src="images/bike-order.jpg" alt=""/>
  <div class="description">
        <p text-align="justify">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�������� ��� ����� �� ������ ���� <br/> 
            ������� � ���� �����, ���� �� ������ <br/>
            ������� �� 2 ����. ���� ������������� <br/> 
		    ��������� �������� ���������� � ���  <br/>
            ������ ����������, ���� ���� ������  <br/>
            �������� ��� ������������ ���� ����� <br/>
            ����������.
        </p>
  </div>
	
  <form class="order_form" method="post" action="orders.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>���� ����</label>
  	  <input type="text" name="sity">
  	</div>
    <div class="input-group">
  	  <label>Բ�</label>
  	  <input type="text" name="FIO">
  	</div>
    <div class="input-group">
  	  <label>������</label>
  	  <input type="text" name="adress">
  	</div>
    <div class="input-group">
  	  <label>�������� ������</label>
  	  <input type="text" name="postindex">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
    <div class="input-group">
  	  <label>����� ��������</label>
  	  <input type="text" name="phone">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="order">��������</button>
  	</div>
  </form>
  <?php
    include("include/footer.php");
  ?>
</body>
</html>