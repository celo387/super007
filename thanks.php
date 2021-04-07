 

<?php

$telefon = $_POST["phone"];
$ime = $_POST["ime"];

if(isset($_POST["submit"])){

    $productList = [
0 => [
	"goodID" => 156484, //id товара в системе leadvertex
	"quantity" => 1, //количество товара
	"price" => 45 // цена товара из leadvertex
]
];
$data = [
"phone" => $_POST["phone"], //телефон
"fio" => $_POST["ime"], //имя
"goods" => $productList, //массив с товарами
"comment" => $_POST["comment"], //комментарий
"externalWebmaster" => $_POST["websiteFolder"], //комментарий
"address" => $_POST["address"], //комментарий
"email" => $_POST["email"], //комментарий
"city" => $_POST["city"]
];

$myCurl = curl_init();
curl_setopt_array($myCurl, [
CURLOPT_URL => "https://kossalin.leadvertex.ru/api/webmaster/v2/addOrder.html?webmasterID=5&token=api1233", //токен в системе
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_POSTFIELDS => http_build_query($data),
CURLOTP_FOLLOWLOCATION => true,
]);
$response = curl_exec($myCurl);
$arr = json_decode($response, true);



}

                      ?>


<html lang="en">
<head>
  <title>BURNCALL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <style>
  	.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    }
    .center h1{
    font-family: "Pacifico", cursive;
    color: #d4af37;
    font-size: 2.5rem;
    }
  </style>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172941624-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());

gtag("config", "UA-172941624-1");
</script>

	<!-- Mgid Sensor -->
<script type="text/javascript">
    (function() {
        var d = document, w = window;
        w.MgSensorData = w.MgSensorData || [];
        w.MgSensorData.push({
            cid:156931,
            lng:"us",
            nosafari:true,
            project: "a.mgid.com"
        });
        var l = "a.mgid.com";
        var n = d.getElementsByTagName("script")[0];
        var s = d.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var dt = !Date.now?new Date().valueOf():Date.now();
        s.src = "https://" + l + "/mgsensor.js?d=" + dt;
        n.parentNode.insertBefore(s, n);
    })();
</script>
<!-- /Mgid Sensor -->

	</head>
	<body>

	<div class="container">
		<div class="center">
				<div class="card">
					<div class="card-body">
						<h1>Hvala vam.<br>Vaša narudžba je zaprimljena!</h1>
						<br><p>Vaše informacije:<br><strong>Ime:</strong> <?php echo $ime; ?> <br><strong>Broj telefona:</strong> <?php echo $telefon; ?></p>
						<p>Ukoliko ste napravili grešku javite nam se na viber/was: +387(0)62534271</p>
							<p>Očekujte poziv prvog slobodnog operatera<br> oko detalja i uputa za najbolje rezultate.</p>
							<a href="index.php"><button class="btn btn-success btn-md">Povrat na početnu</button></a>
					</div>
				</div>
			 </div>
	</div>

		

		<script>
		         setTimeout(function(){
		            window.location.href = "index.php"
		         }, 15000);
		      </script>

		</body>
	</html>



 