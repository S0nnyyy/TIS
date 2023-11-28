<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/includes/config_session.inc.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/TIS/view/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FD.cz</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" type="image/x-icon" href="./img/logo/csfd.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
	<body style="background-color: #000000;">
		</div>
			<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
				<form action="includes/login.inc.php" method="post" class="shadow-lg p-4 rounded">
					<div class="header d-flex justify-content-center align-items-center">
						<img src="./img/profile/default_avatar.png" alt="login logo">
					</div>
					<div class="label">
						<h3 class="text-center p-4">PŘIHLÁSIT SE</h3>
					</div>
					<?php check_login_errors(); ?>
					<div class="mb-4">
						<label for="username" class="form-label">Uživatelské jméno</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Uživatelské jméno">
					</div>
					<div class="mb-4">
						<label for="password" class="form-label">Heslo</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Heslo">
					</div>
					<div class="mb-4 form-check">
						<label for="botCheckInput" class="form-check-label">Nejsem robot</label>
						<input type="checkbox" class="form-check-input" id="botCheckInput" name="botCheckInput">
					</div>
					<div class="mb-1 d-flex justify-content-center align-items-center">
						<button type="submit" class="btn btn-primary">Přihlásit</button>
					</div>
					<div class="links p-1">
						<a href="register.php">Zaregistrovat se</a>
						<a href="#">Zapomenuté heslo</a>
					</div>
				</form>
			</div>
	<div class="wrapper-images">
		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
		</div>
		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
		</div>
		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

		</div>

		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7B1BF88E4AD4A07C0DF489ACCA234032BB719C2757BC44FC58B6E782C188D77D/scale?width=500&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BF8D434B7B43E4815C725C6A5FF4BF27D64E98D0EADD6C2D820E81008A94B6B/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/52AB5D97F245DD6F0A007347504D736C914C474EB5EECFD1955789065662CC5F/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C47B65BB35697D58EFA4C776C4D93DA9F2DBCF24195413CE664F241441142721/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2BB63ED859DC9CCFEFE1A6A239F2A3DD26C34718F3046891AB97E16D620D7360/badging?width=400&aspectRatio=0.71&format=jpeg&label=disneyplusoriginal)"></div>
			</div>
		</div>
		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DB81FFA55537B7021F8656FF0BE79D5A5153EA25C2474A83BFAB6E714E81CB53/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7BD6265B65C2956ACCB44E13778A5A67DB2E7786DA88768654E1F53D1F44B907/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B44FE70953E3765853134FE4C632C4C25D51D1DDF5DCB4F4105B419D410FFE19/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/59CBA35AB929C8A53706D0412754BD7A338BB37813D104DBEAF69444D5ABF79D/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FE9AA3E685B55B382DDBF77DA3E679DA343A70FC1308837D6E2296459E03F417/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
		</div>
		<div class="images-line">
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>

			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9C5F8728CD265CD3C22B3F6356B2514F3C112D9B874D1553665C0855702B1BB3/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/D7FDD68992FA1EA5F6B0B09D7C4D170908EF457ECEBE1808A170CBE8EA36F5FD/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EEE09E81171ED8EBF20FF8052920838990F9626F58211628B6D8DECBCD1389AB/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FA6235F6977391952DBBCDADF2B4A76CF712FBA11719A17EA58C2171DAC4641E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
			<div class="line" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)">
				<div class="img" style="background-image:url(https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/3B909145E05EC6E0E3F3004B2BCECC74C39D0AE42DB64C81C5088160F636DA6E/scale?width=400&aspectRatio=0.71&format=jpeg)"></div>
			</div>
		</div>
	</div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	</body>
</html>

