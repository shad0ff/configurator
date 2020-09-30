<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Результат конфигуратора</title>


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="preload" href="style.css" as="style" onload="this.rel='stylesheet'">
	</head>
	<body>


<div class="container">
	<div class="row">
		<div class="col-md-2">
				<img class="config-logo" src="https://techhub.net.ua/wp-content/uploads/2017/10/logo-main3.png" alt="">
		</div>
		<div class="col-md-10 config-menu">
			<span><a href="https://techhub.net.ua/">Главная</a></span>
			<span><a href="https://techhub.net.ua/shop/">Купить собранный ПК</a></span>
			<span><a href="https://techhub.net.ua/pc-v-rassrochku/">Рассрочка</a></span>
			<span><a href="https://techhub.net.ua/adviser/">Помощник</a></span>
 			<span><a href="https://techhub.net.ua/trade-in/">Trade-in</a></span>

		</div>
	</div>
</div>



<?php
session_start();



$processor_val = $_SESSION['proc'];
$arr_proc = explode(':', $processor_val);

$mother_val = $_SESSION['mother'];
$arr_mother = explode(':', $mother_val);

$ram_val = $_SESSION['ram'];
$arr_ram = explode(':', $ram_val);

$hdd_val = $_SESSION['hdd'];
$arr_hdd = explode(':', $hdd_val);

$ssd_val = $_SESSION['ssd'];
$arr_ssd = explode(':', $ssd_val);

$video_val = $_SESSION['video'];
$arr_video = explode(':', $video_val);

$power_val = $_SESSION['power'];
$arr_power = explode(':', $power_val);

$body_val = $_SESSION['body'];
$arr_body = explode(':', $body_val);

$fan_val = $_SESSION['body_fan'];
$arr_fan = explode(':', $fan_val);


    ?>



<center>

</center>



<div class="container">
	<div class="row mt-5">
		<!-- <div class="reconfig"> -->
			<div class="col-md">
				<p class="thanks-text">Спасибо за Ваш выбор. Мы вскоре свяжемся с Вами.</p>
			</div>
			<div class="col-md">
    		<a class="reconfig-btn float-right" href="https://techhub.net.ua/config/processor.php">Пересобрать</a>
			</div>
		<!-- </div> -->
  </div>
<?php
  echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_proc[2]   . '"><span class="item-result-name">' . $arr_proc[1]   . '</span><div class="item-result-price">' . $arr_proc[0]   . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_mother[2] . '"><span class="item-result-name">' . $arr_mother[1] . '</span><div class="item-result-price">' . $arr_mother[0] . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_ram[2]    . '"><span class="item-result-name">' . $arr_ram[1]    . '</span><div class="item-result-price">' . $arr_ram[0]    . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_hdd[2]    . '"><span class="item-result-name">' . $arr_hdd[1]    . '</span><div class="item-result-price">' . $arr_hdd[0]    . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_ssd[2]    . '"><span class="item-result-name">' . $arr_ssd[1]    . '</span><div class="item-result-price">' . $arr_ssd[0]    . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_video[2]  . '"><span class="item-result-name">' . $arr_video[1]  . '</span><div class="item-result-price">' . $arr_video[0]  . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_power[2]  . '"><span class="item-result-name">' . $arr_power[1]  . '</span><div class="item-result-price">' . $arr_power[0]  . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' . $arr_body[2]   . '"><span class="item-result-name">' . $arr_body[1]  . '</span><div class="item-result-price">' . $arr_body[0]   . ' грн.</div></div></div> ';
	echo '<div class="item-result-box"><div class="item-result"><img src="' .$arr_fan[2]    . '"><span class="item-result-name">' . $arr_fan[1]    . '</span><div class="item-result-price">' . $arr_fan[0]    . ' грн.</div></div></div>';
?>
</div>


<?php
if (($_POST['submit_config'] == true) && ($_POST['form_action']=='contact_from')) {
$_POST['form_action']='1';

$config_sum = ($arr_proc[0] + $arr_mother[0] + $arr_ram[0] + $arr_hdd[0] + $arr_ssd[0] + $arr_video[0] + $arr_power[0] + $arr_body[0] + $arr_fan[0]);
$to = 'sh@gmail.com';
$subject = 'Заказ с конфигуратора Brain от ' . $_POST['userEmail'];
$message = 'От: '. $_POST['userEmail']
. "\r\n" . 'Номер телефона: ' . $_POST['userTel']
. "\r\n" . 'Общая сумма: ' . $config_sum
. "\r\n" . "\r\n" . $arr_proc[1] . ' - ' . $arr_proc[0]
. "\r\n" . $arr_mother[1] . ' - ' . $arr_mother[0]
. "\r\n" . $arr_ram[1] . ' - ' . $arr_ram[0]
. "\r\n" . $arr_hdd[1] . ' - ' . $arr_hdd[0]
. "\r\n" . $arr_ssd[1] . ' - ' . $arr_ssd[0]
. "\r\n" . $arr_video[1] . ' - ' . $arr_video[0]
. "\r\n" . $arr_power[1] . ' - ' . $arr_power[0]
. "\r\n" . $arr_body[1] . ' - ' . $arr_body[0]
. "\r\n" . $_POST['fan_name'] . ' - ' . $_POST['fan_price'];
$from = $_POST['userEmail'];

// Sending email
mail($to, $subject, $message);
}
?>





<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
