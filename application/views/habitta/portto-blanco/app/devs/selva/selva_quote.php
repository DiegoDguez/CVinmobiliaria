<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Selva - Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body>

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/portto_blanco" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-ubicacion" ng-click="close()">
			<div class="link-sidenav">
				<span>Ubicación</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-sidenav">
				<span>Habitta</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/" ng-click="close()">
			<div class="link-sidenav">
				<span>Grupo CCIMA</span>
			</div>
		</a>
		<md-divider></md-divider>

	</md-sidenav>

	<div class="navbar-fixed" ng-controller="sideNavCtrl">
		<nav class="white no-shadows" role="navigation" ng-controller="ContactMenuCtrl as contactCtrl">

			<div class="nav-wrapper">

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
							<md-menu-content width="4">
								<md-menu-item>
									<md-button disabled="disabled">
										+52 1 442 291 2223
									</md-button>
								</md-menu-item>
								<md-menu-divider></md-menu-divider>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toWhatsapp()">
										Whatsapp
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toCall()">
										Llamada
									</md-button>
								</md-menu-item>
							</md-menu-content>
						</md-menu>
					</li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
						<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
					</md-button></li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
						<md-menu-content width="4">
							<md-menu-item>
								<md-button disabled="disabled">
									+52 1 442 291 2223
								</md-button>
							</md-menu-item>
							<md-menu-divider></md-menu-divider>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toWhatsapp()">
									Whatsapp
								</md-button>
							</md-menu-item>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toCall()">
									Llamada
								</md-button>
							</md-menu-item>
						</md-menu-content>
					</md-menu>
				</div>

			</div>

		</nav>
	</div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">SELVA</h1>
				</div>
			</div>
		</div>
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1990" style="enable-background:new 0 0 1366 1990;" xml:space="preserve">

			<style type="text/css">
				.st0{clip-path:url(#SVGID_2_);}
				.st1{fill:#5E6E7F;}
				.st2{fill:#36628C;}
				.st3{fill:#00254F;}
				.st4{fill:#03234B;}
				.st8{fill:none;stroke:#FFFFFF;stroke-width:0.15;stroke-miterlimit:10;}
				.st9{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-miterlimit:10;}
				.st10{fill:none;stroke:#1F140F;stroke-width:0.5;stroke-miterlimit:10;}
				.st15{fill:#FCCF00;}
				.st17{fill:#E0A843;}
				.st18{opacity:0.6;fill:#E0A843;}
				.st21{fill:none;stroke:#1F140F;stroke-miterlimit:10;}
				.st22{fill:#4C6EA3;stroke:#2C2A4E;stroke-width:3.1984;stroke-miterlimit:10;}
				.st23{fill:#2C2A4E;}
				.st24{font-size:65.4463px;}
			</style>

			<image style="overflow:visible;enable-background:new;" width="1366" height="1980" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/selva/selva.jpg" transform="matrix(1.0029 0 0 1.0029 -1.6878 1.8048)"></image>

			<g>
				<g>

					<defs>
						<polygon id="SVGID_1_" points="1365.97,5.78 825.1,81.91 0.77,151.67 0.65,1491.33 87.55,1491.33 89.56,1518.05 93.03,1537.5 
							97.41,1553.45 105.63,1585.5 112.99,1618.14 119.34,1650.67 124.51,1683.52 128.68,1716.58 131.9,1749.28 134.21,1782.36 
							135.35,1815.81 135.35,1849.21 134.45,1892.31 131.5,1934.2 131.69,1946.19 136.16,1957.8 144.28,1967 152.49,1972.36 
							162.13,1979.92 172.48,1984.46 177,1985.7 185.79,1985.7 190.47,1984.71 236.77,1969.64 268.59,1958.61 300.29,1947.46 
							331.09,1936.12 362.18,1924.5 392.73,1912.06 423.59,1899.8 454.16,1886.71 484.68,1873.67 515.28,1860.24 558.97,1840.35 
							648.8,1796.13 721.75,1757.74 779.29,1724.82 836.86,1691.4 892.79,1656.19 948.38,1619.95 1003.83,1582.39 1057.63,1543.86 
							1110.2,1504.17 1162.9,1463.38 1213.8,1421 1258.27,1383.06 1275.9,1366.46 1292.88,1347.52 1321.9,1306.84 1333.26,1285.86 
							1343.91,1261.5 1357.71,1218.02 1362.42,1192 1365.51,1160.09 1365.59,215.19 1362.58,207.09 1359.41,203.36 1354.59,199.8 
							1343.14,190.93 1332.99,180.09 1324.12,168.05 1314.26,149.04 1308.26,123.58 1307.65,101.57 1313.03,75.84 1324.03,52.49 
							1339.97,32.41 1354.75,20.09 1366,14.27"/>
					</defs>

					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
					</clipPath>

					<g class="st0">
						<g>
							<rect x="87.55" y="1049.7" class="st1" width="66.28" height="33.4"/>
							<rect x="87.55" y="1083.1" class="st2" width="66.28" height="33.18"/>
							<rect x="87.55" y="1116.28" class="st1" width="66.28" height="33.1"/>
							<rect x="87.55" y="1149.38" class="st2" width="66.28" height="33.02"/>
							<rect x="87.55" y="1182.4" class="st1" width="66.28" height="33.27"/>
							<rect x="87.55" y="1215.67" class="st2" width="66.28" height="33.18"/>
							<rect x="87.55" y="1248.85" class="st1" width="66.28" height="32.85"/>
							<rect x="87.55" y="1281.7" class="st2" width="66.28" height="33.27"/>
							<rect x="87.55" y="1314.97" class="st1" width="66.28" height="33.54"/>
							<rect x="87.55" y="1348.51" class="st2" width="66.28" height="33.16"/>
							<polygon class="st1" points="89.56,1518.05 90.84,1526.96 93.03,1537.5 97.63,1554.23 163.86,1545.62 154,1510.13"/>
							<polygon class="st2" points="105.87,1586.43 172.07,1578.08 163.86,1545.62 97.63,1554.23"/>
							<polygon class="st1" points="113.18,1618.96 179.21,1610.61 172.07,1578.08 105.87,1586.43"/>
							<polygon class="st2" points="119.5,1651.48 185.13,1643.03 179.21,1610.61 113.18,1618.96"/>
							<polygon class="st1" points="124.51,1684.34 190.3,1676.19 185.13,1643.03 119.5,1651.48"/>
							<polygon class="st2" points="128.78,1717.39 194.41,1708.73 190.3,1676.19 124.51,1684.34"/>
							<polygon class="st1" points="131.99,1750.14 197.94,1741.83 194.41,1708.73 128.78,1717.39"/>
							<polygon class="st2" points="134.29,1783.48 200.16,1775.24 197.94,1741.83 131.99,1750.14"/>
							<polygon class="st1" points="135.44,1816.66 201.72,1808.04 200.16,1775.24 134.29,1783.48"/>
							<polygon class="st2" points="135.35,1850.09 202.21,1841.22 201.72,1808.04 135.44,1816.66"/>
							<polygon class="st1" points="134.45,1892.31 201.64,1870.57 202.21,1841.22 135.35,1850.09"/>
							<polygon class="st2" points="148.91,1928.37 180.53,1918.34 206.4,1979.37 190.47,1984.71 185.79,1985.7 177,1985.7 
								172.48,1984.46"/>
							<polygon class="st1" points="212.23,1908.25 238.19,1969.19 206.4,1979.37 180.53,1918.34"/>
							<polygon class="st2" points="243.72,1897.25 269.67,1958.24 238.19,1969.19 212.23,1908.25"/>
							<path class="st1" d="M275.04,1886.27c1.31,1.44,26.06,60.9,26.06,60.9l-31.43,11.06l-25.96-60.98L275.04,1886.27z"/>
							<polygon class="st2" points="305.92,1874.79 331.99,1935.79 301.11,1947.17 275.04,1886.27"/>
							<polygon class="st1" points="337.14,1863.07 362.98,1924.2 331.99,1935.79 305.92,1874.79"/>
							<polygon class="st2" points="368.02,1850.91 393.65,1911.69 362.98,1924.2 337.14,1863.07"/>
							<polygon class="st1" points="398.68,1838.1 424.53,1899.43 393.65,1911.69 368.02,1850.91"/>
							<path class="st2" d="M429.35,1825.74c0,0.42,25.74,60.58,25.74,60.58l-30.55,13.11l-25.85-61.33L429.35,1825.74z"/>
							<polygon class="st1" points="459.68,1812.69 485.64,1873.26 455.08,1886.31 429.35,1825.74"/>
							<path class="st2" d="M490.02,1798.9c0.11,0.42,26.06,60.99,26.06,60.99l-30.45,13.37l-25.96-60.57L490.02,1798.9z"/>
							<polygon class="st1" points="519.92,1785.31 546.09,1846.31 516.08,1859.89 490.02,1798.9"/>
							<polygon class="st2" points="192.43,930.49 233.1,930.49 233.14,996.65 192.43,996.65"/>
							<polygon class="st1" points="273.4,930.49 273.4,996.65 233.18,996.65 233.14,930.49"/>
							<rect x="273.4" y="930.49" class="st2" width="40.3" height="66.17"/>
							<rect x="313.7" y="930.49" class="st1" width="33.18" height="66.17"/>
							<rect x="346.88" y="930.49" class="st2" width="33.51" height="66.17"/>
							<rect x="380.39" y="930.49" class="st1" width="32.96" height="66.17"/>
							<rect x="413.36" y="930.49" class="st2" width="33.29" height="66.17"/>
							<rect x="446.65" y="930.49" class="st1" width="33.07" height="66.17"/>
							<rect x="479.72" y="930.49" class="st2" width="33.18" height="66.17"/>
							<rect x="512.91" y="930.49" class="st1" width="33.18" height="66.17"/>
							<polygon class="st2" points="463.04,1035.25 546.11,1035.33 546.2,1068.44 463.04,1068.44"/>
							<rect x="463.04" y="1068.44" class="st1" width="83.16" height="33.06"/>
							<rect x="463.04" y="1101.5" class="st2" width="83.16" height="33.07"/>
							<rect x="463.04" y="1134.57" class="st1" width="83.16" height="33.29"/>
							<rect x="463.04" y="1167.86" class="st2" width="83.16" height="33.07"/>
							<path class="st1" d="M463.04,1234.12c0.37,0,83.16,0,83.16,0v-33.18h-83.16V1234.12z"/>
							<rect x="463.04" y="1234.12" class="st2" width="83.16" height="33.03"/>
							<rect x="463.04" y="1267.15" class="st1" width="83.16" height="33.12"/>
							<rect x="463.04" y="1300.27" class="st2" width="83.16" height="33.18"/>
							<rect x="463.04" y="1333.45" class="st1" width="83.16" height="33.07"/>
							<rect x="463.04" y="1366.52" class="st2" width="83.16" height="33.16"/>
							<path class="st1" d="M463.04,1432.83c0.26-0.27,83.16,0.06,83.16,0.06v-33.2h-83.16V1432.83z"/>
							<path class="st2" d="M463.01,1466.04h83.19v-33.15l-83.16-0.06C463.04,1432.83,462.28,1466.04,463.01,1466.04z"/>
							<polygon class="st1" points="463.02,1499.39 546.36,1499.15 546.2,1466.04 463.01,1466.04"/>
							<polygon class="st2" points="463.02,1532.31 546.36,1532.31 546.36,1499.15 463.02,1499.39"/>
							<polygon class="st1" points="463.02,1565.47 546.2,1565.47 546.36,1532.31 463.02,1532.31"/>
							<polygon class="st2" points="463.02,1599.08 546.36,1599.08 546.2,1565.47 463.02,1565.47"/>
							<rect x="463.02" y="1599.08" class="st1" width="83.34" height="33"/>
							<rect x="463.02" y="1632.08" class="st2" width="83.34" height="33.1"/>
							<rect x="463.02" y="1665.17" class="st1" width="83.34" height="33.18"/>
							<path class="st2" d="M463.02,1731.43c0.39,0,79.89,0,79.89,0l3.45-1.75v-31.32h-83.34V1731.43z"/>
							<polygon class="st2" points="192.52,1035.3 225.62,1035.25 225.63,1101.59 192.52,1101.59"/>
							<polygon class="st1" points="258.78,1035.25 258.78,1101.59 225.63,1101.59 225.62,1035.25"/>
							<rect x="258.78" y="1035.25" class="st2" width="33.13" height="66.34"/>
							<rect x="291.91" y="1035.25" class="st1" width="33.18" height="66.34"/>
							<rect x="325.09" y="1035.25" class="st2" width="33.02" height="66.34"/>
							<rect x="358.11" y="1035.25" class="st1" width="33.02" height="66.34"/>
							<polygon class="st2" points="424.43,1035.25 424.47,1101.59 391.13,1101.59 391.13,1035.25"/>
							<polygon class="st1" points="391.37,1174.07 424.47,1174.07 424.47,1101.59 391.13,1101.59"/>
							<polygon class="st2" points="358.11,1174.07 358.11,1101.59 391.13,1101.59 391.37,1174.07"/>
							<path class="st1" d="M325.09,1174.07v-72.47h33.02c0,0,0.6,73.09,0,72.47C357.51,1173.45,325.09,1174.07,325.09,1174.07z"/>
							<rect x="291.91" y="1101.59" class="st2" width="33.18" height="72.47"/>
							<rect x="258.78" y="1101.59" class="st1" width="33.13" height="72.47"/>
							<polygon class="st2" points="225.62,1174.07 225.63,1101.59 258.78,1101.59 258.78,1174.07"/>
							<polygon class="st1" points="192.52,1174.07 192.52,1101.59 225.63,1101.59 225.62,1174.07"/>
							<polygon class="st2" points="192.52,1212.34 225.62,1212.3 225.63,1278.64 192.52,1278.64"/>
							<polygon class="st1" points="258.78,1212.3 258.78,1278.64 225.63,1278.64 225.62,1212.3"/>
							<rect x="258.78" y="1212.3" class="st2" width="33.13" height="66.34"/>
							<rect x="291.91" y="1212.3" class="st1" width="33.18" height="66.34"/>
							<rect x="325.09" y="1212.3" class="st2" width="33.02" height="66.34"/>
							<rect x="358.11" y="1212.3" class="st1" width="33.02" height="66.34"/>
							<polygon class="st2" points="424.43,1212.3 424.47,1278.64 391.13,1278.64 391.13,1212.3"/>
							<polygon class="st1" points="391.37,1351.11 424.47,1351.11 424.47,1278.64 391.13,1278.64"/>
							<polygon class="st2" points="358.11,1351.11 358.11,1278.64 391.13,1278.64 391.37,1351.11"/>
							<path class="st1" d="M325.09,1351.11v-72.47h33.02c0,0,0.6,73.09,0,72.47C357.51,1350.49,325.09,1351.11,325.09,1351.11z"/>
							<rect x="291.91" y="1278.64" class="st2" width="33.18" height="72.47"/>
							<rect x="258.78" y="1278.64" class="st1" width="33.13" height="72.47"/>
							<polygon class="st2" points="225.62,1351.11 225.63,1278.64 258.78,1278.64 258.78,1351.11"/>
							<polygon class="st1" points="192.52,1351.11 192.52,1278.64 225.63,1278.64 225.62,1351.11"/>
							<path class="st2" d="M201.27,1535.79l39.06-15.78l28.31,66.48l-39.21,15.55C229.43,1602.04,200.65,1534.93,201.27,1535.79z"/>
							<polygon class="st2" points="241.27,1668.44 272.11,1656.55 246.14,1595.41 217.65,1606.53 220.56,1620.65"/>
							<polygon class="st1" points="277.08,1583.43 302.99,1644.25 272.11,1656.55 246.14,1595.41"/>
							<polygon class="st1" points="279.26,1503.91 307.72,1570.58 268.63,1586.49 240.32,1520.01"/>
							<polygon class="st2" points="333.52,1631.61 307.72,1570.58 277.08,1583.43 302.99,1644.25"/>
							<polygon class="st1" points="364.02,1618.52 338.15,1557.74 307.72,1570.58 333.52,1631.61"/>
							<polygon class="st2" points="368.46,1544.21 394.3,1605.32 364.02,1618.52 338.15,1557.74"/>
							<polygon class="st1" points="398.58,1530.39 424.56,1591.44 394.3,1605.32 368.46,1544.21"/>
							<polygon class="st2" points="309.85,1490.82 338.15,1557.74 307.72,1570.58 279.26,1503.91"/>
							<polygon class="st1" points="339.98,1477.89 368.46,1544.21 338.15,1557.74 309.85,1490.82"/>
							<path class="st2" d="M370.32,1463.75c0.33-0.08,28.26,66.64,28.26,66.64l-30.12,13.82l-28.47-66.33L370.32,1463.75z"/>
							<polygon class="st1" points="400.11,1449.43 424.56,1506.41 424.56,1518.38 398.58,1530.39 370.32,1463.75"/>
							<polygon class="st1" points="233.81,1712.45 269.07,1699.29 297.33,1765.87 262.17,1779.07"/>
							<polygon class="st1" points="265.18,1848.72 296.4,1837.01 270.6,1775.9 239.46,1787.54"/>
							<polygon class="st2" points="301.56,1764.38 327.33,1825.28 296.4,1837.01 270.6,1775.9"/>
							<polygon class="st2" points="304.12,1685.38 332.48,1752.29 297.33,1765.87 269.07,1699.29"/>
							<polygon class="st1" points="358.27,1813.05 327.33,1825.28 301.56,1764.38 332.48,1752.29"/>
							<path class="st2" d="M363,1739.82l26.04,60.84l-30.76,12.39l-25.79-60.75C332.48,1752.29,361.64,1739.94,363,1739.82z"/>
							<polygon class="st1" points="398.27,1724.91 424.47,1785.74 389.03,1800.66 363,1739.82"/>
							<polygon class="st1" points="334.86,1673.09 363,1739.82 332.48,1752.29 304.12,1685.38"/>
							<polygon class="st2" points="365.28,1660.17 393.58,1726.9 363,1739.82 334.86,1673.09"/>
							<polygon class="st1" points="395.7,1646.84 423.94,1713.54 393.58,1726.9 365.28,1660.17"/>
							<polygon class="st2" points="0.81,814.72 67.13,814.64 67.14,781.58 0.81,781.58"/>
							<polygon class="st1" points="0.81,781.74 67.13,781.66 67.14,748.6 0.81,748.6"/>
							<polygon class="st2" points="0.81,748.76 67.13,748.68 67.14,715.62 0.81,715.62"/>
							<polygon class="st1" points="0.81,715.79 67.13,715.7 67.14,682.16 0.81,682.16"/>
							<polygon class="st2" points="0.81,682.33 67.13,682.25 67.14,649.09 0.81,649.09"/>
							<polygon class="st1" points="0.81,649.25 67.13,649.17 67.14,616.02 0.81,616.02"/>
							<polygon class="st2" points="0.81,616.18 67.13,616.1 67.14,582.94 0.81,582.94"/>
							<polygon class="st1" points="0.81,583.11 67.13,583.03 67.14,549.87 0.81,549.87"/>
							<polygon class="st2" points="0.81,550.03 67.13,549.95 67.14,516.8 0.81,516.8"/>
							<polygon class="st1" points="0.81,516.96 67.13,516.88 67.14,483.72 0.81,483.72"/>
							<polygon class="st2" points="67.18,450.24 0.77,450.24 0.81,483.72 67.14,483.72"/>
							<polygon class="st1" points="67.1,417.14 0.77,417.14 0.77,450.24 67.18,450.24"/>
							<polygon class="st2" points="67.13,383.97 0.77,383.97 0.77,417.14 67.1,417.14"/>
							<rect x="0.77" y="350.77" class="st1" width="66.35" height="33.2"/>
							<rect x="0.77" y="317.62" class="st2" width="66.35" height="33.15"/>
							<rect x="0.77" y="284.51" class="st1" width="66.35" height="33.1"/>
							<rect x="0.77" y="250.89" class="st2" width="66.35" height="33.62"/>
							<rect x="0.77" y="217.93" class="st1" width="66.35" height="32.96"/>
							<rect x="0.77" y="184.64" class="st2" width="66.35" height="33.29"/>
							<polygon class="st1" points="67.13,145.87 0.77,151.67 0.77,184.64 67.13,184.64"/>
							<polygon class="st2" points="105.51,142.86 144.27,139.51 149.65,205.99 105.51,209.39"/>
							<polygon class="st1" points="177.02,136.89 182.72,202.92 149.65,205.99 144.27,139.51"/>
							<polygon class="st2" points="215.57,200.19 210.15,133.87 177.02,136.89 182.72,202.92"/>
							<path class="st1" d="M248.79,197.3l-5.57-66.25l-33.07,2.83c0,0,4.76,66.53,5.42,66.31C216.23,199.97,248.79,197.3,248.79,197.3
								z"/>
							<polygon class="st2" points="276.31,128.23 281.89,194.79 248.79,197.3 243.23,131.05"/>
							<polygon class="st1" points="308.99,125.43 314.62,191.79 281.89,194.79 276.31,128.23"/>
							<polygon class="st2" points="342.05,122.64 347.71,188.99 314.62,191.79 308.99,125.43"/>
							<polygon class="st1" points="380.83,186.4 375.29,119.99 342.05,122.64 347.71,188.99"/>
							<polygon class="st2" points="413.92,183.52 408.32,117.17 375.29,119.99 380.83,186.4"/>
							<polygon class="st1" points="446.7,180.57 441.07,114.3 408.32,117.17 413.92,183.52"/>
							<polygon class="st2" points="479.75,178.02 474.21,111.59 441.07,114.3 446.7,180.57"/>
							<polygon class="st1" points="512.99,175.17 507.27,108.71 474.21,111.59 479.75,178.02"/>
							<polygon class="st2" points="545.95,172.72 546.11,105.41 507.27,108.71 512.99,175.17"/>
							<polygon class="st1" points="463.08,217.91 546.08,211.14 546.12,258.9 463.08,258.9"/>
							<polygon class="st2" points="463.02,300.1 546.04,300.05 546.12,258.9 463.08,258.9"/>
							<polygon class="st1" points="463.08,333.27 546.04,333.19 546.04,300.05 463.02,300.1"/>
							<polygon class="st2" points="463,366.57 546.04,366.57 546.04,333.19 463.08,333.27"/>
							<polygon class="st1" points="463.08,399.45 546.09,399.45 546.04,366.57 463,366.57"/>
							<polygon class="st2" points="463.02,432.63 546.09,432.41 546.09,399.45 463.08,399.45"/>
							<polygon class="st1" points="463.02,465.51 546.09,465.51 546.09,432.41 463.02,432.63"/>
							<polygon class="st2" points="463,498.99 546.09,498.99 546.09,465.51 463.02,465.51"/>
							<rect x="463" y="498.99" class="st1" width="83.09" height="32.98"/>
							<rect x="463" y="531.96" class="st2" width="83.09" height="33.13"/>
							<rect x="463" y="565.09" class="st1" width="83.09" height="33.07"/>
							<rect x="463" y="598.17" class="st2" width="83.09" height="33.4"/>
							<rect x="463" y="631.57" class="st1" width="83.09" height="32.85"/>
							<rect x="463" y="664.42" class="st2" width="83.09" height="32.96"/>
							<rect x="463" y="697.39" class="st1" width="83.09" height="33.41"/>
							<rect x="463" y="730.8" class="st2" width="83.09" height="33.06"/>
							<rect x="463" y="763.86" class="st1" width="83.09" height="33.07"/>
							<rect x="463" y="796.94" class="st2" width="83.09" height="33.29"/>
							<rect x="463" y="830.23" class="st1" width="83.09" height="33.18"/>
							<polygon class="st2" points="463.02,896.63 546.09,896.63 546.09,863.41 463,863.41"/>
							<polygon class="st1" points="463.19,929.67 546.09,929.67 546.09,896.63 463.02,896.63"/>
							<polygon class="st2" points="424.47,929.71 424.44,863.39 385.81,863.35 385.81,929.71"/>
							<polygon class="st1" points="352.69,929.67 352.69,863.35 385.81,863.35 385.81,929.71"/>
							<rect x="319.18" y="863.35" class="st2" width="33.51" height="66.32"/>
							<rect x="286.1" y="863.35" class="st1" width="33.07" height="66.32"/>
							<rect x="252.97" y="863.35" class="st2" width="33.13" height="66.32"/>
							<rect x="219.79" y="863.35" class="st1" width="33.18" height="66.32"/>
							<rect x="186.69" y="863.35" class="st2" width="33.1" height="66.32"/>
							<rect x="153.48" y="863.35" class="st1" width="33.21" height="66.32"/>
							<rect x="120.24" y="863.35" class="st2" width="33.24" height="66.32"/>
							<polygon class="st1" points="116.24,824.64 149.26,824.64 149.32,758.27 116.24,758.27"/>
							<polygon class="st2" points="182.42,824.64 182.42,758.27 149.32,758.27 149.26,824.64"/>
							<rect x="182.42" y="758.27" class="st1" width="33.1" height="66.37"/>
							<rect x="215.52" y="758.27" class="st2" width="33.13" height="66.37"/>
							<rect x="248.65" y="758.27" class="st1" width="33.18" height="66.37"/>
							<path class="st2" d="M315.01,824.64v-66.37c0,0-33.18-0.44-33.18,0s0,66.37,0,66.37H315.01z"/>
							<rect x="315.01" y="758.27" class="st1" width="33.07" height="66.37"/>
							<rect x="348.09" y="758.27" class="st2" width="33.29" height="66.37"/>
							<rect x="381.38" y="758.27" class="st1" width="32.85" height="66.37"/>
							<rect x="381.38" y="686.54" class="st2" width="32.85" height="71.73"/>
							<rect x="348.09" y="686.54" class="st1" width="33.29" height="71.73"/>
							<rect x="315.01" y="686.54" class="st2" width="33.07" height="71.73"/>
							<rect x="281.83" y="686.54" class="st1" width="33.18" height="71.73"/>
							<rect x="248.65" y="686.54" class="st2" width="33.18" height="71.73"/>
							<rect x="215.52" y="686.54" class="st1" width="33.13" height="71.73"/>
							<rect x="182.42" y="686.54" class="st2" width="33.1" height="71.73"/>
							<rect x="149.32" y="686.54" class="st1" width="33.1" height="71.73"/>
							<path class="st2" d="M116.24,686.54v71.73h33.07v-71.73C149.32,686.54,116.24,685.99,116.24,686.54z"/>
							<polygon class="st2" points="105.74,438.45 171.99,438.49 171.99,471.63 105.74,471.63"/>
							<rect x="105.74" y="471.63" class="st1" width="66.24" height="33.11"/>
							<rect x="105.74" y="504.75" class="st2" width="66.24" height="33.29"/>
							<rect x="105.74" y="538.04" class="st1" width="66.24" height="32.85"/>
							<rect x="105.74" y="570.89" class="st2" width="66.24" height="33.3"/>
							<rect x="105.74" y="604.19" class="st1" width="66.24" height="33.11"/>
							<rect x="171.99" y="604.19" class="st2" width="72.5" height="33.11"/>
							<rect x="171.99" y="570.89" class="st1" width="72.5" height="33.3"/>
							<rect x="171.99" y="538.04" class="st2" width="72.5" height="32.85"/>
							<rect x="171.99" y="504.75" class="st1" width="72.5" height="33.29"/>
							<rect x="171.99" y="471.63" class="st2" width="72.5" height="33.11"/>
							<polygon class="st1" points="244.49,438.45 171.99,438.49 171.99,471.63 244.49,471.63"/>
							<polygon class="st1" points="283.15,575.22 318.35,575.24 318.32,647.77 283.15,647.77"/>
							<polygon class="st2" points="354,575.22 354,647.77 318.32,647.77 318.35,575.24"/>
							<rect x="354" y="575.22" class="st1" width="34.99" height="72.55"/>
							<rect x="388.99" y="575.22" class="st2" width="35.48" height="72.55"/>
							<polygon class="st1" points="122.46,386.01 155.6,383.17 149.6,310.93 116.6,313.83"/>
							<polygon class="st2" points="182.5,308.35 188.74,380.67 155.6,383.17 149.6,310.93"/>
							<path class="st1" d="M215.64,305.47l6,72.28l-32.9,2.92l-6.24-72.32C182.5,308.35,215.16,305.62,215.64,305.47z"/>
							<polygon class="st2" points="248.76,302.58 254.67,374.81 221.64,377.75 215.64,305.47"/>
							<polygon class="st1" points="281.64,299.85 287.69,372.23 254.67,374.81 248.76,302.58"/>
							<polygon class="st2" points="314.53,297.18 320.87,369.27 287.69,372.23 281.64,299.85"/>
							<polygon class="st1" points="347.72,294.26 353.84,366.57 320.87,369.27 314.53,297.18"/>
							<polygon class="st2" points="380.94,291.59 386.77,363.95 353.84,366.57 347.72,294.26"/>
							<polygon class="st1" points="413.76,288.72 419.82,360.8 386.77,363.95 380.94,291.59"/>
							<polygon class="st2" points="111.12,247.69 143.85,245.06 149.6,310.93 116.6,313.83"/>
							<polygon class="st1" points="177,242.19 182.5,308.35 149.6,310.93 143.85,245.06"/>
							<polygon class="st2" points="210.1,239.34 215.64,305.47 182.5,308.35 177,242.19"/>
							<polygon class="st1" points="243.28,236.72 248.76,302.58 215.64,305.47 210.1,239.34"/>
							<polygon class="st2" points="276.03,233.7 281.64,299.85 248.76,302.58 243.28,236.72"/>
							<polygon class="st1" points="308.99,231.24 314.53,297.18 281.64,299.85 276.03,233.7"/>
							<polygon class="st2" points="342.17,228.33 347.72,294.26 314.53,297.18 308.99,231.24"/>
							<polygon class="st1" points="375.14,225.48 380.94,291.59 347.72,294.26 342.17,228.33"/>
							<polygon class="st2" points="408.16,223.07 413.76,288.72 380.94,291.59 375.14,225.48"/>
							<polygon class="st2" points="546.36,1640.89 629.65,1640.89 629.32,1599.08 546.36,1599.08"/>
							<polygon class="st1" points="629.65,1565.47 546.2,1565.47 546.36,1599.08 629.32,1599.08"/>
							<polygon class="st2" points="629.65,1532.31 546.36,1532.31 546.2,1565.47 629.65,1565.47"/>
							<polygon class="st1" points="629.65,1499.56 546.36,1499.15 546.36,1532.31 629.65,1532.31"/>
							<polygon class="st2" points="629.65,1466.04 546.2,1466.04 546.36,1499.15 629.65,1499.56"/>
							<polygon class="st1" points="629.65,1432.83 546.2,1432.89 546.2,1466.04 629.65,1466.04"/>
							<polygon class="st2" points="629.65,1399.69 546.2,1399.69 546.2,1432.89 629.65,1432.83"/>
							<rect x="546.2" y="1366.52" class="st1" width="83.45" height="33.16"/>
							<rect x="546.2" y="1333.45" class="st2" width="83.45" height="33.07"/>
							<rect x="546.2" y="1300.27" class="st1" width="83.45" height="33.18"/>
							<rect x="546.2" y="1267.15" class="st2" width="83.45" height="33.12"/>
							<rect x="546.2" y="1234.12" class="st1" width="83.45" height="33.03"/>
							<rect x="546.2" y="1200.94" class="st2" width="83.45" height="33.18"/>
							<rect x="546.2" y="1167.86" class="st1" width="83.45" height="33.07"/>
							<rect x="546.2" y="1134.57" class="st2" width="83.45" height="33.29"/>
							<polygon class="st1" points="579.63,1096.52 546.2,1096.49 546.09,992.58 579.63,992.58"/>
							<rect x="579.63" y="992.58" class="st2" width="32.94" height="103.94"/>
							<rect x="612.57" y="992.58" class="st1" width="33.02" height="103.94"/>
							<rect x="645.59" y="992.58" class="st2" width="33.18" height="103.94"/>
							<rect x="678.77" y="992.58" class="st1" width="33.35" height="103.94"/>
							<rect x="712.12" y="992.58" class="st2" width="33.18" height="103.94"/>
							<rect x="745.3" y="992.58" class="st1" width="33.02" height="103.94"/>
							<rect x="778.32" y="992.58" class="st2" width="33.18" height="103.94"/>
							<rect x="811.5" y="992.58" class="st1" width="33.02" height="103.94"/>
							<rect x="844.52" y="992.58" class="st2" width="33.02" height="103.94"/>
							<rect x="877.54" y="992.58" class="st1" width="33.35" height="103.94"/>
							<rect x="910.89" y="992.58" class="st2" width="33.18" height="103.94"/>
							<rect x="944.07" y="992.58" class="st1" width="33.18" height="103.94"/>
							<rect x="977.25" y="992.58" class="st2" width="33.02" height="103.94"/>
							<rect x="1010.27" y="992.58" class="st1" width="33.18" height="103.94"/>
							<rect x="1043.45" y="992.58" class="st2" width="33.18" height="103.94"/>
							<rect x="1076.64" y="992.58" class="st1" width="33.02" height="103.94"/>
							<rect x="1109.66" y="992.58" class="st2" width="33.68" height="103.94"/>
							<rect x="1143.33" y="992.58" class="st1" width="32.85" height="103.94"/>
							<path class="st2" d="M1213.15,992.58c0,0.82,0,103.94,0,103.94h-36.96V992.58H1213.15z"/>
							<rect x="1213.15" y="992.58" class="st1" width="37.45" height="103.94"/>
							<path class="st2" d="M1288.06,992.58c0,0,0.16,104.06,0,103.94c-0.16-0.12-37.45,0-37.45,0V992.58H1288.06z"/>
							<rect x="1288.06" y="992.58" class="st1" width="37.13" height="103.94"/>
							<rect x="1325.18" y="992.58" class="st2" width="40.41" height="103.94"/>
							<polygon class="st1" points="1261.94,1135.09 1365.51,1135.01 1365.51,1160.09 1363.95,1178.27 1362.42,1190.97 
								1260.13,1175.31 1261.99,1158.34"/>
							<polygon class="st2" points="1253.23,1207.62 1351.69,1239.05 1357.71,1218.02 1362.42,1190.97 1260.13,1175.31 1257.61,1192"/>
							<polygon class="st1" points="1241.2,1238.62 1247.48,1223.63 1253.23,1207.62 1351.69,1239.05 1343.91,1261.5 1333.4,1284.83"/>
							<polygon class="st2" points="1224.48,1267.15 1232.7,1254.02 1241.2,1238.62 1333.4,1284.83 1321.9,1306.84 1307.82,1327.54"/>
							<polygon class="st1" points="1203.29,1292.55 1224.48,1267.15 1307.82,1327.54 1292.88,1347.52 1276.56,1365.84"/>
							<polygon class="st2" points="1178.98,1315.05 1203.29,1292.55 1276.56,1365.84 1258.27,1383.06 1239.98,1398.4"/>
							<polygon class="st1" points="1153.85,1336.24 1178.98,1315.05 1239.98,1398.4 1214.79,1420.17"/>
							<polygon class="st2" points="1128.06,1357.28 1153.85,1336.24 1214.79,1420.17 1189.17,1441.43"/>
							<polygon class="st1" points="1102.32,1378.79 1128.06,1357.28 1189.17,1441.43 1163.65,1462.81"/>
							<polygon class="st2" points="1076.58,1399.25 1102.32,1378.79 1163.65,1462.81 1137.91,1482.6"/>
							<polygon class="st1" points="1050.52,1420.17 1076.58,1399.25 1137.91,1482.6 1111.19,1503.42"/>
							<polygon class="st2" points="1024.02,1440.01 1050.52,1420.17 1111.19,1503.42 1084.69,1523.46"/>
							<polygon class="st1" points="997.18,1459.62 1024.02,1440.01 1084.69,1523.46 1058.51,1543.22"/>
							<polygon class="st2" points="970.46,1479 997.18,1459.62 1058.51,1543.22 1031.24,1562.91"/>
							<polygon class="st1" points="943.52,1498.45 970.46,1479 1031.24,1562.91 1004.63,1581.83"/>
							<polygon class="st2" points="916.03,1516.97 943.52,1498.45 1004.63,1581.83 977.47,1600.78"/>
							<polygon class="st1" points="888.65,1535.43 916.03,1516.97 977.47,1600.78 949.55,1619.18"/>
							<polygon class="st2" points="860.95,1554.01 888.65,1535.43 949.55,1619.18 922.06,1637.37"/>
							<polygon class="st1" points="832.8,1571.55 860.95,1554.01 922.06,1637.37 894.02,1655.43"/>
							<polygon class="st2" points="804.99,1589.44 832.8,1571.55 894.02,1655.43 865.66,1673.06"/>
							<polygon class="st1" points="776.51,1606.58 804.99,1589.44 865.66,1673.06 837.73,1690.89"/>
							<polygon class="st2" points="747.82,1623.45 776.51,1606.58 837.73,1690.89 809.26,1707.72"/>
							<polygon class="st1" points="718.91,1640.16 747.82,1623.45 809.26,1707.72 780.34,1724.22"/>
							<polygon class="st2" points="689.67,1656.55 718.91,1640.16 780.34,1724.22 750.88,1741.18"/>
							<polygon class="st1" points="660.64,1672.62 689.67,1656.55 750.88,1741.18 721.75,1757.74"/>
							<polygon class="st2" points="668.13,1135.13 750.72,1135.17 750.72,1168.23 668.13,1168.23"/>
							<polygon class="st1" points="668.17,1201.46 750.72,1201.46 750.72,1168.23 668.13,1168.23"/>
							<polygon class="st2" points="668.13,1234.48 750.72,1234.48 750.72,1201.46 668.17,1201.46"/>
							<rect x="668.13" y="1234.48" class="st1" width="82.59" height="33.1"/>
							<rect x="668.13" y="1267.58" class="st2" width="82.59" height="33.27"/>
							<rect x="668.13" y="1300.84" class="st1" width="82.59" height="32.85"/>
							<rect x="668.13" y="1333.7" class="st2" width="82.59" height="33.43"/>
							<rect x="668.13" y="1367.13" class="st1" width="82.59" height="33.02"/>
							<rect x="668.13" y="1400.15" class="st2" width="82.59" height="32.93"/>
							<polygon class="st1" points="668.13,1466.56 750.72,1466.38 750.72,1433.08 668.13,1433.08"/>
							<polygon class="st2" points="668.13,1499.56 750.72,1499.56 750.72,1466.38 668.13,1466.56"/>
							<rect x="668.13" y="1499.56" class="st1" width="82.59" height="38.5"/>
							<rect x="668.13" y="1538.05" class="st2" width="82.59" height="38.99"/>
							<polygon class="st2" points="750.72,1532.63 822.43,1532.63 843.95,1518.8 843.95,1499.56 750.72,1499.56"/>
							<path class="st1" d="M750.72,1466.38c0.82,0.05,93.22,0,93.22,0v33.18h-93.22V1466.38z"/>
							<polygon class="st2" points="750.72,1433.08 843.95,1432.89 843.95,1466.38 750.72,1466.38"/>
							<path class="st1" d="M750.72,1400.15c0.41-0.08,93.22,0,93.22,0v32.74l-93.22,0.19V1400.15z"/>
							<rect x="750.72" y="1367.13" class="st2" width="93.22" height="33.02"/>
							<rect x="750.72" y="1333.7" class="st1" width="93.22" height="33.43"/>
							<rect x="750.72" y="1300.84" class="st2" width="93.22" height="32.85"/>
							<rect x="750.72" y="1267.58" class="st1" width="93.22" height="33.27"/>
							<rect x="750.72" y="1234.48" class="st2" width="93.22" height="33.1"/>
							<polygon class="st1" points="750.72,1201.46 843.95,1201.13 843.95,1234.48 750.72,1234.48"/>
							<polygon class="st2" points="750.72,1168.23 843.95,1168.23 843.95,1201.13 750.72,1201.46"/>
							<polygon class="st1" points="750.72,1135.17 843.95,1135.13 843.95,1168.23 750.72,1168.23"/>
							<polygon class="st2" points="882.46,1135.07 965.47,1135.11 965.45,1168.24 882.46,1168.24"/>
							<polygon class="st1" points="882.46,1201.29 965.47,1201.29 965.45,1168.24 882.46,1168.24"/>
							<rect x="882.46" y="1201.29" class="st2" width="83.02" height="33.18"/>
							<rect x="882.46" y="1234.48" class="st1" width="83.02" height="33.1"/>
							<rect x="882.46" y="1267.58" class="st2" width="83.02" height="33.18"/>
							<rect x="882.46" y="1300.76" class="st1" width="83.02" height="33.1"/>
							<rect x="882.46" y="1333.86" class="st2" width="83.02" height="33.18"/>
							<rect x="882.46" y="1367.04" class="st1" width="83.02" height="33.02"/>
							<path class="st2" d="M882.46,1433.08c0.34,0.25,83.02,0,83.02,0v-33.02h-83.02V1433.08z"/>
							<path class="st1" d="M965.47,1367.04c0.61,0.08,89.73,0,89.73,0l3.37-2.86v-30.32h-93.1V1367.04z"/>
							<rect x="965.47" y="1300.76" class="st2" width="93.1" height="33.1"/>
							<rect x="965.47" y="1267.58" class="st1" width="93.1" height="33.18"/>
							<rect x="965.47" y="1234.48" class="st2" width="93.1" height="33.1"/>
							<rect x="965.47" y="1201.29" class="st1" width="93.1" height="33.18"/>
							<polygon class="st2" points="965.45,1168.24 1058.57,1168.24 1058.57,1201.29 965.47,1201.29"/>
							<polygon class="st1" points="965.47,1135.11 1058.57,1135.07 1058.57,1168.24 965.45,1168.24"/>
							<path class="st2" d="M1216.74,180.09l116.24,0c0,0,9.99,10.79,10.16,10.84c0.16,0.05,11.44,8.87,11.44,8.87l4.82,3.56l3.18,3.72
								l2.14,4.82l0.88,3.28v22.83h-148.85V180.09z"/>
							<path class="st1" d="M1216.74,296.01c0.79,0,148.85,0,148.85,0v-57.99h-148.85V296.01z"/>
							<rect x="1216.74" y="296.01" class="st2" width="148.85" height="58.08"/>
							<polygon class="st1" points="1216.74,412.37 1365.59,412.26 1365.59,354.1 1216.74,354.1"/>
							<polygon class="st2" points="1216.74,469.83 1365.59,469.83 1365.59,412.26 1216.74,412.37"/>
							<rect x="1216.74" y="469.83" class="st1" width="148.85" height="57.86"/>
							<rect x="1216.74" y="527.68" class="st2" width="148.85" height="58.32"/>
							<rect x="1216.74" y="586.01" class="st1" width="148.85" height="58.48"/>
							<rect x="1216.74" y="644.49" class="st2" width="148.85" height="57.7"/>
							<path class="st1" d="M1216.74,760.36c0,0,148.85,1.1,148.85,0s0-58.17,0-58.17h-148.85V760.36z"/>
							<path class="st2" d="M1216.74,818.38c0,0,148.41,0.86,148.85,0c0.44-0.86,0-58.02,0-58.02h-148.85V818.38z"/>
							<rect x="1216.74" y="818.38" class="st1" width="148.85" height="58.06"/>
							<polygon class="st2" points="1216.74,934.49 1365.79,934.49 1365.59,876.44 1216.74,876.44"/>
							<polygon class="st1" points="1216.68,992.58 1365.59,992.58 1365.79,934.49 1216.74,934.49"/>
							<polygon class="st2" points="1105.92,843.32 1173.89,843.32 1173.91,992.58 1105.92,992.58"/>
							<rect x="1043.45" y="843.32" class="st1" width="62.46" height="149.26"/>
							<rect x="981.2" y="843.32" class="st2" width="62.26" height="149.26"/>
							<rect x="919.21" y="843.32" class="st1" width="61.99" height="149.26"/>
							<rect x="857.01" y="843.32" class="st2" width="62.2" height="149.26"/>
							<rect x="794.91" y="843.32" class="st1" width="62.1" height="149.26"/>
							<rect x="733.03" y="843.32" class="st2" width="61.88" height="149.26"/>
							<path class="st1" d="M670.39,843.32c0.66-0.39,62.64,0,62.64,0v149.26h-62.64V843.32z"/>
							<polygon class="st2" points="608.84,843.15 670.39,843.32 670.39,992.58 608.84,992.58"/>
							<rect x="546.09" y="843.15" class="st1" width="62.75" height="149.43"/>
							<path class="st2" d="M546.09,800.44c0.99,0,149.93,0,149.93,0l-0.25-58.17H546.09V800.44z"/>
							<polygon class="st1" points="546.09,683.86 696.02,683.86 695.77,742.27 546.09,742.27"/>
							<rect x="546.09" y="625.93" class="st2" width="149.93" height="57.93"/>
							<path class="st1" d="M546.09,567.63c2.41,1.3,149.93,0,149.93,0s1.64,58.3,0,58.3c-1.64,0-149.93,0-149.93,0V567.63z"/>
							<rect x="546.09" y="510.55" class="st2" width="149.93" height="57.08"/>
							<polygon class="st1" points="546.04,452.51 696.02,452.51 696.02,510.55 546.09,510.55"/>
							<polygon class="st2" points="546.12,394.47 696.02,394.47 696.02,452.51 546.04,452.51"/>
							<rect x="546.12" y="331.87" class="st1" width="149.9" height="62.6"/>
							<polygon class="st2" points="546.12,270.84 696.02,250.67 696.02,331.87 546.12,331.87"/>
							<polygon class="st1" points="708.75,92.04 767.07,87.03 788.23,237.97 730.19,245.85"/>
							<polygon class="st2" points="824.86,81.91 845.42,230.03 788.23,237.97 767.07,87.03"/>
							<polygon class="st1" points="890.35,72.66 911.11,220.67 845.42,230.03 824.86,81.91"/>
							<polygon class="st2" points="956.01,63.4 977.25,211.69 911.11,220.67 890.35,72.66"/>
							<polygon class="st1" points="1022.15,54.2 1042.52,202.01 977.25,211.69 956.01,63.4"/>
							<polygon class="st2" points="1087.43,45 1108.01,193.07 1042.52,202.01 1022.15,54.2"/>
							<path class="st1" d="M1152.92,35.8c-0.22,0.66,21.03,147.85,21.03,147.85l-65.93,9.42L1087.43,45L1152.92,35.8z"/>
							<polygon class="st1" points="887.89,266.99 1033.02,266.99 1033.11,322.84 887.89,322.84"/>
							<polygon class="st2" points="888.05,372.62 1032.94,372.73 1033.11,322.84 887.89,322.84"/>
							<polygon class="st1" points="887.89,422.06 1033.02,422.51 1032.94,372.73 888.05,372.62"/>
							<polygon class="st2" points="887.92,471.93 1033.06,471.96 1033.02,422.51 887.89,422.06"/>
							<polygon class="st1" points="1173.89,472 1174.01,422.11 1033.02,422.51 1033.06,471.96"/>
							<polygon class="st2" points="1173.85,372.74 1032.94,372.73 1033.02,422.51 1174.01,422.11"/>
							<polygon class="st1" points="1174.01,322.84 1033.11,322.84 1032.94,372.73 1173.85,372.74"/>
							<polygon class="st2" points="1174.01,266.99 1033.02,266.99 1033.11,322.84 1174.01,322.84"/>
							<polygon class="st1" points="757.4,514.39 806.9,514.48 806.96,659.49 757.4,659.49"/>
							<polygon class="st2" points="757.51,800.44 807.01,800.44 806.96,659.49 757.4,659.49"/>
							<polygon class="st2" points="856.84,514.43 856.84,659.49 806.96,659.49 806.9,514.48"/>
							<polygon class="st1" points="856.84,800.44 856.84,659.49 806.96,659.49 807.01,800.44"/>
							<rect x="856.84" y="514.43" class="st1" width="49.12" height="145.07"/>
							<polygon class="st2" points="955.9,659.49 955.9,514.39 905.96,514.43 905.96,659.49"/>
							<rect x="955.9" y="514.39" class="st1" width="50.27" height="145.11"/>
							<polygon class="st2" points="1055.78,514.43 1006.16,514.39 1006.16,659.49 1055.78,660.03"/>
							<polygon class="st1" points="1105.06,659.49 1105.06,514.39 1055.78,514.43 1055.78,660.03"/>
							<polygon class="st2" points="1155,659.49 1155,514.43 1105.06,514.39 1105.06,659.49"/>
							<rect x="856.84" y="659.49" class="st2" width="49.12" height="140.95"/>
							<rect x="905.96" y="659.49" class="st1" width="49.94" height="140.95"/>
							<rect x="955.9" y="659.49" class="st2" width="50.27" height="140.95"/>
							<polygon class="st1" points="1055.78,800.44 1055.78,660.03 1006.16,659.49 1006.16,800.44"/>
							<polygon class="st2" points="1105.06,800.44 1105.06,659.49 1055.78,660.03 1055.78,800.44"/>
							<rect x="1105.06" y="659.49" class="st1" width="49.94" height="140.95"/>
							<g>
								<polygon class="st3" points="130.39,967.37 130.27,979.52 114.07,979.63 114.25,967.49"/>
								<g>
									<text transform="matrix(-0.013 0.9031 -1 -9.920008e-03 122.1754 989.1383)" class="st4 futura-book fs__4px">ACCESO</text>
									<path class="st4" d="M132.07,996.66c0.03-2.2-1.85-4.02-4.25-4.16l0.09-5.84l4.75,5.03l4.75,5.03l-4.9,4.93l-4.9,4.93
										l0.09-5.84C130.1,1000.64,132.04,998.86,132.07,996.66"/>
									<text transform="matrix(-0.0418 0.9052 -0.9996 -0.0274 131.4964 944.9241)" class="st4 futura-book fs__4px">SALIDA</text>
									<path class="st4" d="M123.99,950.63c0.1-2.16,2.05-3.87,4.4-3.92l0.26-5.72l-4.94,4.75l-4.94,4.75l4.49,5.01l4.49,5.01
										l0.26-5.72C125.67,954.6,123.89,952.78,123.99,950.63"/>
									<path class="st8" d="M123.39,971.03c-0.02,0.11-0.57,1.24-1.06,1.24c-0.49,0-0.73-1.13-0.72-1.24
										c0.02-0.11,0.47-0.47,0.96-0.48C123.07,970.56,123.41,970.92,123.39,971.03z"/>
									<path class="st8" d="M126.03,974.33c-0.19,1.25-2.11,2.12-4.32,2.13c-2.21,0.01-3.86-0.85-3.67-2.1
										C122.03,974.33,122.03,974.33,126.03,974.33z"/>
									<polygon class="st8" points="125.8,974.32 118.2,974.35 118.38,973.21 125.97,973.18"/>
									<path class="st8" d="M118.38,973.21l-0.65-0.97c-0.12-0.18-0.01-0.44,0.21-0.53l0.59-0.25c1-0.23,1.95-0.76,2.67-1.52
										l0.29-0.3l2.55-0.01l0.24,0.38c0.44,0.7,1.15,1.2,2,1.42l0.67,0.27c0.18,0.07,0.21,0.31,0.05,0.46l-1.03,1.02L118.38,973.21z"
										/>
								</g>
							</g>
							<g>
								<polygon class="st3" points="1249.1,71.93 1248.08,59.82 1264.19,58.19 1265.16,70.29"/>
								<g>
									<text transform="matrix(-0.0719 -0.9004 0.9965 -0.0841 1255.2513 49.6517)" class="st4 futura-book fs__4px">ACCESO</text>
									<path class="st4" d="M1244.68,42.93c0.17,2.19,2.22,3.83,4.63,3.74l0.46,5.82l-5.2-4.56l-5.2-4.56l4.41-5.37l4.41-5.37
										l0.46,5.82C1246.26,38.78,1244.5,40.73,1244.68,42.93"/>
									<text transform="matrix(-0.0434 -0.9051 0.9978 -0.0666 1250.0538 94.5314)" class="st4 futura-book fs__4px">SALIDA</text>
									<path class="st4" d="M1257.05,88c0.1,2.16-1.68,4.04-4.02,4.32l0.27,5.72l4.47-5.19l4.47-5.19l-4.94-4.57l-4.94-4.56
										l0.27,5.72C1255,84.2,1256.94,85.84,1257.05,88"/>
									<path class="st8" d="M1258.09,63.29c-0.01,0.11-0.45,1.29-0.94,1.34c-0.49,0.05-0.84-1.05-0.83-1.16
										c0.01-0.11,0.42-0.52,0.91-0.56C1257.72,62.85,1258.1,63.18,1258.09,63.29z"/>
									<path class="st8" d="M1261.03,66.33c-0.07,1.26-1.9,2.31-4.1,2.53c-2.2,0.22-3.93-0.48-3.85-1.75
										C1257.05,66.71,1257.05,66.71,1261.03,66.33z"/>
									<polygon class="st8" points="1260.8,66.34 1253.24,67.08 1253.3,65.94 1260.87,65.19"/>
									<path class="st8" d="M1253.3,65.94l-0.74-0.91c-0.13-0.16-0.06-0.43,0.16-0.55l0.57-0.31c0.98-0.32,1.87-0.94,2.52-1.76
										l0.26-0.32l2.54-0.25l0.27,0.35c0.51,0.65,1.26,1.09,2.13,1.23l0.69,0.21c0.19,0.06,0.24,0.29,0.1,0.46l-0.93,1.11
										L1253.3,65.94z"/>
								</g>
							</g>
							<g>
								<polygon class="st3" points="37.85,891.5 49.99,891.62 50.1,907.82 37.97,907.64"/>
								<g>
									<text transform="matrix(0.9031 0.013 -9.920008e-03 1 59.6139 899.7245)" class="st4 futura-book fs__4px">ACCESO</text>
									<path class="st4" d="M67.13,889.82c-2.2-0.03-4.02,1.85-4.16,4.25l-5.84-0.09l5.03-4.75l5.03-4.75l4.93,4.9l4.93,4.9
										l-5.84-0.09C71.11,891.79,69.33,889.85,67.13,889.82"/>
									<text transform="matrix(0.9052 0.0418 -0.0274 0.9996 15.3998 890.4036)" class="st4 futura-book fs__4px">SALIDA</text>
									<path class="st4" d="M21.1,897.9c-2.16-0.1-3.87-2.05-3.92-4.4l-5.72-0.26l4.75,4.94l4.75,4.94l5.01-4.49l5.01-4.49
										l-5.72-0.26C25.07,896.22,23.26,898,21.1,897.9"/>
									<path class="st8" d="M41.5,898.5c0.11,0.02,1.24,0.57,1.24,1.06c0,0.49-1.13,0.73-1.24,0.72c-0.11-0.02-0.47-0.47-0.48-0.96
										C41.03,898.83,41.39,898.48,41.5,898.5z"/>
									<path class="st8" d="M44.8,895.87c1.25,0.19,2.12,2.11,2.13,4.32c0.01,2.21-0.85,3.86-2.1,3.67
										C44.81,899.86,44.81,899.86,44.8,895.87z"/>
									<polygon class="st8" points="44.79,896.09 44.82,903.69 43.69,903.52 43.66,895.92"/>
									<path class="st8" d="M43.69,903.52l-0.97,0.65c-0.18,0.12-0.44,0.01-0.53-0.21l-0.25-0.59c-0.23-1-0.76-1.95-1.52-2.67
										l-0.3-0.29l-0.01-2.55l0.38-0.24c0.7-0.44,1.2-1.15,1.42-2l0.27-0.67c0.07-0.18,0.31-0.21,0.46-0.05l1.02,1.03L43.69,903.52z"
										/>
								</g>
							</g>
							<g>
								<polygon class="st3" points="583.53,1715.52 595.68,1715.64 595.79,1731.84 583.66,1731.67"/>
								<g>
									<text transform="matrix(0.9031 0.013 -9.920008e-03 1 605.3007 1723.7491)" class="st4 futura-book fs__4px">ACCESO</text>
									<path class="st4" d="M612.82,1713.85c-2.2-0.03-4.02,1.85-4.16,4.25l-5.84-0.09l5.03-4.75l5.03-4.75l4.93,4.9l4.93,4.9
										l-5.84-0.09C616.8,1715.81,615.02,1713.88,612.82,1713.85"/>
									<text transform="matrix(0.9052 0.0418 -0.0274 0.9996 561.0872 1714.4286)" class="st4 futura-book fs__4px">SALIDA</text>
									<path class="st4" d="M566.79,1721.93c-2.16-0.1-3.87-2.05-3.92-4.4l-5.72-0.26l4.75,4.94l4.75,4.94l5.01-4.49l5.01-4.49
										l-5.72-0.26C570.76,1720.24,568.95,1722.03,566.79,1721.93"/>
									<path class="st8" d="M587.19,1722.53c0.11,0.02,1.24,0.57,1.24,1.06c0,0.49-1.13,0.73-1.24,0.72
										c-0.11-0.02-0.47-0.47-0.48-0.96C586.72,1722.85,587.08,1722.51,587.19,1722.53z"/>
									<path class="st8" d="M590.49,1719.89c1.25,0.19,2.12,2.11,2.13,4.32c0.01,2.21-0.85,3.86-2.1,3.67
										C590.49,1723.88,590.49,1723.88,590.49,1719.89z"/>
									<polygon class="st8" points="590.48,1720.12 590.51,1727.71 589.37,1727.54 589.34,1719.94"/>
									<path class="st8" d="M589.37,1727.54l-0.97,0.65c-0.18,0.12-0.44,0.01-0.53-0.21l-0.25-0.59c-0.23-1-0.76-1.95-1.52-2.67
										l-0.3-0.29l-0.01-2.55l0.38-0.24c0.7-0.44,1.2-1.15,1.42-2l0.27-0.67c0.07-0.18,0.31-0.21,0.46-0.05l1.02,1.03L589.37,1727.54
										z"/>
								</g>
							</g>
							<line class="st9" x1="233.14" y1="930.49" x2="233.18" y2="996.65"/>
							<line class="st9" x1="273.38" y1="930.49" x2="273.42" y2="996.65"/>
							<line class="st9" x1="313.62" y1="930.49" x2="313.66" y2="996.65"/>
							<line class="st9" x1="347.03" y1="930.49" x2="347.07" y2="996.65"/>
							<line class="st9" x1="380.44" y1="930.49" x2="380.48" y2="996.65"/>
							<line class="st9" x1="413.84" y1="930.49" x2="413.89" y2="996.65"/>
							<line class="st9" x1="447.25" y1="930.49" x2="447.29" y2="996.65"/>
							<line class="st9" x1="480.66" y1="930.49" x2="480.7" y2="996.65"/>
							<line class="st9" x1="514.07" y1="930.49" x2="514.11" y2="996.65"/>
							<line class="st9" x1="546.2" y1="1068.44" x2="463.04" y2="1068.44"/>
							<line class="st9" x1="546.2" y1="1101.5" x2="463.04" y2="1101.5"/>
							<line class="st9" x1="546.2" y1="1134.56" x2="463.04" y2="1134.56"/>
							<line class="st9" x1="546.2" y1="1167.62" x2="463.04" y2="1167.62"/>
							<line class="st9" x1="546.2" y1="1200.68" x2="463.04" y2="1200.68"/>
							<line class="st9" x1="546.2" y1="1233.74" x2="463.04" y2="1233.74"/>
							<line class="st9" x1="546.2" y1="1266.8" x2="463.04" y2="1266.8"/>
							<line class="st9" x1="546.2" y1="1299.86" x2="463.04" y2="1299.86"/>
							<line class="st9" x1="546.2" y1="1332.92" x2="463.04" y2="1332.92"/>
							<line class="st9" x1="546.2" y1="1365.98" x2="463.04" y2="1365.98"/>
							<line class="st9" x1="546.2" y1="1399.04" x2="463.04" y2="1399.04"/>
							<line class="st9" x1="546.2" y1="1432.1" x2="463.04" y2="1432.1"/>
							<line class="st9" x1="546.2" y1="1465.53" x2="463.04" y2="1465.53"/>
							<line class="st9" x1="546.2" y1="1498.92" x2="463.04" y2="1498.92"/>
							<line class="st9" x1="546.2" y1="1532.31" x2="463.04" y2="1532.31"/>
							<line class="st9" x1="546.2" y1="1565.47" x2="463.04" y2="1565.47"/>
							<line class="st9" x1="546.2" y1="1599.08" x2="463.04" y2="1599.08"/>
							<line class="st9" x1="546.2" y1="1632.08" x2="463.04" y2="1632.08"/>
							<line class="st9" x1="546.2" y1="1665.17" x2="463.04" y2="1665.17"/>
							<line class="st9" x1="546.2" y1="1698.36" x2="463.04" y2="1698.36"/>
							<line class="st9" x1="516.08" y1="1859.89" x2="490.02" y2="1798.9"/>
							<line class="st9" x1="485.64" y1="1873.26" x2="459.68" y2="1812.69"/>
							<line class="st9" x1="455.08" y1="1886.31" x2="429.35" y2="1825.74"/>
							<line class="st9" x1="424.53" y1="1899.43" x2="398.68" y2="1838.1"/>
							<line class="st9" x1="393.65" y1="1911.69" x2="368.02" y2="1850.91"/>
							<line class="st9" x1="362.98" y1="1924.2" x2="337.14" y2="1863.07"/>
							<line class="st9" x1="331.99" y1="1935.79" x2="305.92" y2="1874.79"/>
							<line class="st9" x1="301.11" y1="1947.17" x2="275.04" y2="1886.27"/>
							<line class="st9" x1="269.67" y1="1958.24" x2="243.72" y2="1897.25"/>
							<line class="st9" x1="238.19" y1="1969.19" x2="212.23" y2="1908.25"/>
							<line class="st9" x1="206.4" y1="1979.37" x2="180.53" y2="1918.34"/>
							<line class="st9" x1="135.35" y1="1850.09" x2="202.21" y2="1841.22"/>
							<line class="st9" x1="135.44" y1="1816.66" x2="201.72" y2="1808.04"/>
							<path class="st9" d="M134.29,1783.48c1.89-0.24,65.87-8.24,65.87-8.24"/>
							<line class="st9" x1="131.99" y1="1750.14" x2="197.94" y2="1741.83"/>
							<line class="st9" x1="128.78" y1="1717.39" x2="194.41" y2="1708.73"/>
							<line class="st9" x1="124.51" y1="1684.34" x2="190.3" y2="1676.19"/>
							<line class="st9" x1="119.5" y1="1651.48" x2="185.13" y2="1643.03"/>
							<line class="st9" x1="113.18" y1="1618.96" x2="179.21" y2="1610.61"/>
							<line class="st9" x1="105.87" y1="1586.43" x2="172.07" y2="1578.08"/>
							<line class="st9" x1="97.63" y1="1554.23" x2="163.86" y2="1545.62"/>
							<line class="st9" x1="87.55" y1="1348.51" x2="153.83" y2="1348.51"/>
							<line class="st9" x1="87.55" y1="1315.11" x2="153.83" y2="1315.11"/>
							<line class="st9" x1="87.55" y1="1281.7" x2="153.83" y2="1281.7"/>
							<line class="st9" x1="87.55" y1="1248.3" x2="153.83" y2="1248.3"/>
							<line class="st9" x1="87.55" y1="1214.9" x2="153.83" y2="1214.9"/>
							<line class="st9" x1="87.55" y1="1181.5" x2="153.83" y2="1181.5"/>
							<line class="st9" x1="87.55" y1="1148.1" x2="153.83" y2="1148.1"/>
							<line class="st9" x1="87.55" y1="1116.28" x2="153.83" y2="1116.28"/>
							<line class="st9" x1="87.55" y1="1083.1" x2="153.83" y2="1083.1"/>
							<line class="st9" x1="192.52" y1="1101.59" x2="424.47" y2="1101.59"/>
							<line class="st9" x1="391.13" y1="1035.25" x2="391.37" y2="1174.07"/>
							<line class="st9" x1="358.25" y1="1035.25" x2="358.5" y2="1174.07"/>
							<line class="st9" x1="325.38" y1="1035.25" x2="325.62" y2="1174.07"/>
							<line class="st9" x1="292.5" y1="1035.25" x2="292.75" y2="1174.07"/>
							<line class="st9" x1="259.63" y1="1035.25" x2="259.88" y2="1174.07"/>
							<line class="st9" x1="226.76" y1="1035.25" x2="227" y2="1174.07"/>
							<line class="st9" x1="192.52" y1="1278.64" x2="424.47" y2="1278.64"/>
							<line class="st9" x1="391.13" y1="1212.3" x2="391.37" y2="1351.11"/>
							<line class="st9" x1="358.25" y1="1212.3" x2="358.5" y2="1351.11"/>
							<line class="st9" x1="325.38" y1="1212.3" x2="325.62" y2="1351.11"/>
							<line class="st9" x1="292.5" y1="1212.3" x2="292.75" y2="1351.11"/>
							<line class="st9" x1="259.63" y1="1212.3" x2="259.88" y2="1351.11"/>
							<line class="st9" x1="226.76" y1="1212.3" x2="227" y2="1351.11"/>
							<line class="st9" x1="272.11" y1="1656.55" x2="246.14" y2="1595.41"/>
							<line class="st9" x1="302.99" y1="1644.25" x2="277.08" y2="1583.43"/>
							<line class="st9" x1="333.52" y1="1631.61" x2="279.26" y2="1503.91"/>
							<line class="st9" x1="364.02" y1="1618.52" x2="309.85" y2="1490.82"/>
							<line class="st9" x1="394.3" y1="1605.32" x2="339.98" y2="1477.89"/>
							<path class="st9" d="M370.32,1463.75"/>
							<line class="st9" x1="240.32" y1="1520.01" x2="268.63" y2="1586.49"/>
							<polyline class="st9" points="424.56,1518.38 398.58,1530.39 368.46,1544.21 338.15,1557.74 307.72,1570.58 277.08,1583.43 
								246.14,1595.41 217.65,1606.53"/>
							<line class="st9" x1="296.4" y1="1837.01" x2="270.6" y2="1775.9"/>
							<line class="st9" x1="327.33" y1="1825.28" x2="301.56" y2="1764.38"/>
							<line class="st9" x1="358.27" y1="1813.05" x2="304.12" y2="1685.38"/>
							<line class="st9" x1="389.03" y1="1800.66" x2="334.86" y2="1673.09"/>
							<line class="st9" x1="269.07" y1="1699.29" x2="297.33" y2="1765.87"/>
							<line class="st9" x1="365.28" y1="1660.17" x2="393.58" y2="1726.9"/>
							<line class="st9" x1="0.81" y1="781.74" x2="67.13" y2="781.66"/>
							<line class="st9" x1="0.81" y1="748.72" x2="67.13" y2="748.64"/>
							<line class="st9" x1="0.81" y1="715.7" x2="67.13" y2="715.62"/>
							<line class="st9" x1="0.81" y1="682.68" x2="67.13" y2="682.6"/>
							<line class="st9" x1="0.81" y1="649.66" x2="67.13" y2="649.58"/>
							<line class="st9" x1="0.81" y1="616.64" x2="67.13" y2="616.56"/>
							<line class="st9" x1="0.81" y1="583.62" x2="67.13" y2="583.54"/>
							<line class="st9" x1="0.81" y1="550.6" x2="67.13" y2="550.52"/>
							<line class="st9" x1="0.81" y1="517.58" x2="67.13" y2="517.5"/>
							<line class="st9" x1="0.81" y1="484.56" x2="67.13" y2="484.48"/>
							<line class="st9" x1="0.82" y1="450.4" x2="67.13" y2="450.32"/>
							<line class="st9" x1="0.82" y1="417.38" x2="67.13" y2="417.3"/>
							<line class="st9" x1="0.81" y1="383.92" x2="67.13" y2="383.84"/>
							<line class="st9" x1="0.81" y1="350.9" x2="67.13" y2="350.82"/>
							<line class="st9" x1="0.81" y1="317.61" x2="67.13" y2="317.53"/>
							<line class="st9" x1="0.81" y1="284.59" x2="67.13" y2="284.51"/>
							<line class="st9" x1="0.81" y1="251.26" x2="67.13" y2="251.18"/>
							<line class="st9" x1="0.81" y1="217.97" x2="67.13" y2="217.89"/>
							<line class="st9" x1="0.81" y1="184.68" x2="67.13" y2="184.6"/>
							<line class="st9" x1="149.65" y1="205.99" x2="144.27" y2="139.51"/>
							<line class="st9" x1="182.72" y1="202.92" x2="177.02" y2="136.89"/>
							<line class="st9" x1="215.57" y1="200.19" x2="210.15" y2="133.87"/>
							<line class="st9" x1="248.79" y1="197.3" x2="243.23" y2="131.05"/>
							<line class="st9" x1="276.31" y1="128.23" x2="281.89" y2="194.79"/>
							<line class="st9" x1="308.99" y1="125.43" x2="314.62" y2="191.79"/>
							<line class="st9" x1="342.05" y1="122.64" x2="347.71" y2="188.99"/>
							<line class="st9" x1="375.29" y1="119.99" x2="380.83" y2="186.4"/>
							<line class="st9" x1="408.32" y1="117.17" x2="413.92" y2="183.52"/>
							<line class="st9" x1="441.07" y1="114.3" x2="446.7" y2="180.57"/>
							<line class="st9" x1="474.21" y1="111.59" x2="479.75" y2="178.02"/>
							<line class="st9" x1="507.27" y1="108.71" x2="512.99" y2="175.17"/>
							<line class="st9" x1="546.12" y1="258.9" x2="463.08" y2="258.9"/>
							<line class="st9" x1="546.04" y1="300.05" x2="463.02" y2="300.1"/>
							<line class="st9" x1="546.04" y1="366.52" x2="463.08" y2="366.61"/>
							<line class="st9" x1="546.04" y1="399.86" x2="463.08" y2="399.94"/>
							<line class="st9" x1="546.04" y1="433.19" x2="463.08" y2="433.27"/>
							<line class="st9" x1="546.04" y1="466.52" x2="463.08" y2="466.6"/>
							<line class="st9" x1="546.04" y1="499.85" x2="463.08" y2="499.93"/>
							<line class="st9" x1="546.04" y1="531.92" x2="463.08" y2="532"/>
							<line class="st9" x1="546.04" y1="563.99" x2="463.08" y2="564.07"/>
							<line class="st9" x1="546.04" y1="598.29" x2="463.08" y2="598.37"/>
							<line class="st9" x1="546.04" y1="630.85" x2="463.08" y2="630.93"/>
							<line class="st9" x1="546.04" y1="664.38" x2="463.08" y2="664.46"/>
							<line class="st9" x1="546.04" y1="697.34" x2="463.08" y2="697.43"/>
							<line class="st9" x1="546.04" y1="730.6" x2="463.08" y2="730.69"/>
							<line class="st9" x1="546.04" y1="763.82" x2="463.08" y2="763.9"/>
							<line class="st9" x1="546.04" y1="797.04" x2="463.08" y2="797.12"/>
							<line class="st9" x1="546.04" y1="830.26" x2="463.08" y2="830.34"/>
							<line class="st9" x1="546.04" y1="863.47" x2="463.08" y2="863.55"/>
							<line class="st9" x1="546.04" y1="896.69" x2="463.08" y2="896.77"/>
							<line class="st9" x1="385.81" y1="863.35" x2="385.81" y2="929.71"/>
							<line class="st9" x1="352.69" y1="863.35" x2="352.69" y2="929.67"/>
							<line class="st9" x1="319.18" y1="863.35" x2="319.18" y2="929.67"/>
							<line class="st9" x1="286.1" y1="863.35" x2="286.1" y2="929.67"/>
							<line class="st9" x1="252.97" y1="863.35" x2="252.97" y2="929.67"/>
							<line class="st9" x1="219.79" y1="863.35" x2="219.79" y2="929.67"/>
							<line class="st9" x1="186.69" y1="863.35" x2="186.69" y2="929.67"/>
							<line class="st9" x1="153.48" y1="863.35" x2="153.48" y2="929.67"/>
							<line class="st9" x1="116.24" y1="758.27" x2="414.23" y2="758.27"/>
							<line class="st9" x1="149.32" y1="686.54" x2="149.26" y2="824.64"/>
							<line class="st9" x1="182.45" y1="686.54" x2="182.39" y2="824.64"/>
							<line class="st9" x1="215.57" y1="686.54" x2="215.52" y2="824.64"/>
							<line class="st9" x1="248.7" y1="686.54" x2="248.65" y2="824.64"/>
							<line class="st9" x1="281.83" y1="686.54" x2="281.78" y2="824.64"/>
							<line class="st9" x1="314.96" y1="686.54" x2="314.9" y2="824.64"/>
							<line class="st9" x1="348.09" y1="686.54" x2="348.03" y2="824.64"/>
							<line class="st9" x1="381.22" y1="686.54" x2="381.16" y2="824.64"/>
							<line class="st9" x1="171.99" y1="438.49" x2="171.99" y2="637.3"/>
							<line class="st9" x1="105.74" y1="604.19" x2="244.49" y2="604.19"/>
							<line class="st9" x1="105.74" y1="571.11" x2="244.49" y2="571.11"/>
							<line class="st9" x1="105.74" y1="538.04" x2="244.49" y2="538.04"/>
							<line class="st9" x1="105.74" y1="504.97" x2="244.49" y2="504.97"/>
							<line class="st9" x1="105.74" y1="471.89" x2="244.49" y2="471.89"/>
							<line class="st9" x1="318.32" y1="647.77" x2="318.35" y2="575.24"/>
							<line class="st9" x1="354" y1="647.77" x2="354" y2="575.22"/>
							<line class="st9" x1="388.99" y1="647.77" x2="388.99" y2="575.22"/>
							<line class="st9" x1="116.6" y1="313.83" x2="413.76" y2="288.72"/>
							<line class="st9" x1="155.6" y1="383.17" x2="143.85" y2="245.06"/>
							<line class="st9" x1="188.74" y1="380.67" x2="177" y2="242.19"/>
							<line class="st9" x1="221.64" y1="377.75" x2="210.1" y2="239.34"/>
							<line class="st9" x1="254.67" y1="374.81" x2="243.28" y2="236.72"/>
							<line class="st9" x1="287.69" y1="372.23" x2="276.03" y2="233.7"/>
							<line class="st9" x1="320.87" y1="369.27" x2="308.99" y2="231.24"/>
							<line class="st9" x1="353.84" y1="366.57" x2="342.17" y2="228.33"/>
							<line class="st9" x1="386.77" y1="363.95" x2="375.14" y2="225.48"/>
							<line class="st9" x1="546.36" y1="1599.08" x2="629.32" y2="1599.08"/>
							<line class="st9" x1="546.36" y1="1565.69" x2="629.32" y2="1565.69"/>
							<line class="st9" x1="546.36" y1="1532.31" x2="629.32" y2="1532.31"/>
							<line class="st9" x1="546.36" y1="1498.92" x2="629.32" y2="1498.92"/>
							<line class="st9" x1="546.36" y1="1465.53" x2="629.32" y2="1465.53"/>
							<line class="st9" x1="546.36" y1="1432.15" x2="629.32" y2="1432.15"/>
							<line class="st9" x1="546.36" y1="1398.76" x2="629.32" y2="1398.76"/>
							<line class="st9" x1="546.36" y1="1366.52" x2="629.32" y2="1366.52"/>
							<line class="st9" x1="546.36" y1="1333.4" x2="629.32" y2="1333.4"/>
							<line class="st9" x1="546.36" y1="1300.27" x2="629.32" y2="1300.27"/>
							<line class="st9" x1="546.36" y1="1267.14" x2="629.32" y2="1267.14"/>
							<line class="st9" x1="546.36" y1="1234.01" x2="629.32" y2="1234.01"/>
							<line class="st9" x1="546.36" y1="1200.88" x2="629.32" y2="1200.88"/>
							<line class="st9" x1="546.36" y1="1167.75" x2="629.32" y2="1167.75"/>
							<line class="st9" x1="579.63" y1="992.58" x2="579.63" y2="1096.52"/>
							<line class="st9" x1="612.57" y1="992.58" x2="612.57" y2="1096.52"/>
							<line class="st9" x1="645.51" y1="992.58" x2="645.51" y2="1096.52"/>
							<line class="st9" x1="678.45" y1="992.58" x2="678.45" y2="1096.52"/>
							<line class="st9" x1="711.39" y1="992.58" x2="711.39" y2="1096.52"/>
							<line class="st9" x1="744.33" y1="992.58" x2="744.33" y2="1096.52"/>
							<line class="st9" x1="778.32" y1="992.58" x2="778.32" y2="1096.52"/>
							<line class="st9" x1="812.31" y1="992.58" x2="812.31" y2="1096.52"/>
							<line class="st9" x1="844.52" y1="992.58" x2="844.52" y2="1096.52"/>
							<line class="st9" x1="876.73" y1="992.58" x2="876.73" y2="1096.52"/>
							<line class="st9" x1="910.8" y1="992.58" x2="910.8" y2="1096.52"/>
							<line class="st9" x1="944.88" y1="992.58" x2="944.88" y2="1096.52"/>
							<line class="st9" x1="977.25" y1="992.58" x2="977.25" y2="1096.52"/>
							<line class="st9" x1="1009.63" y1="992.58" x2="1009.63" y2="1096.52"/>
							<line class="st9" x1="1077.28" y1="992.58" x2="1077.28" y2="1096.52"/>
							<line class="st9" x1="1109.66" y1="992.58" x2="1109.66" y2="1096.52"/>
							<line class="st9" x1="1142.92" y1="992.58" x2="1142.92" y2="1096.52"/>
							<line class="st9" x1="1176.19" y1="992.58" x2="1176.19" y2="1096.52"/>
							<line class="st9" x1="1213.15" y1="992.58" x2="1213.15" y2="1096.52"/>
							<line class="st9" x1="1250.6" y1="992.58" x2="1250.6" y2="1096.52"/>
							<line class="st9" x1="1287.89" y1="992.58" x2="1287.89" y2="1096.52"/>
							<line class="st9" x1="1325.18" y1="992.58" x2="1325.18" y2="1096.52"/>
							<line class="st9" x1="668.13" y1="1168.23" x2="843.95" y2="1168.23"/>
							<path class="st9" d="M668.17,1201.46c3.53,0,175.77-0.33,175.77-0.33"/>
							<line class="st9" x1="668.13" y1="1234.48" x2="843.95" y2="1234.48"/>
							<line class="st9" x1="668.13" y1="1267.58" x2="843.95" y2="1267.58"/>
							<path class="st9" d="M668.13,1300.84c3.57,0,175.81,0,175.81,0"/>
							<line class="st9" x1="668.13" y1="1333.7" x2="843.95" y2="1333.7"/>
							<line class="st9" x1="668.13" y1="1367.13" x2="843.95" y2="1367.13"/>
							<line class="st9" x1="668.13" y1="1400.15" x2="843.95" y2="1400.15"/>
							<path class="st9" d="M668.13,1433.08c3.57,0,175.81-0.19,175.81-0.19"/>
							<line class="st9" x1="668.13" y1="1466.56" x2="843.95" y2="1466.38"/>
							<line class="st9" x1="668.13" y1="1499.56" x2="843.95" y2="1499.56"/>
							<line class="st9" x1="668.13" y1="1538.05" x2="750.72" y2="1538.05"/>
							<line class="st9" x1="882.46" y1="1400.06" x2="965.47" y2="1400.06"/>
							<path class="st9" d="M882.46,1367.04c3.46,0,172.74,0,172.74,0"/>
							<line class="st9" x1="882.46" y1="1333.86" x2="1058.57" y2="1333.86"/>
							<line class="st9" x1="882.46" y1="1300.76" x2="1058.57" y2="1300.76"/>
							<line class="st9" x1="882.46" y1="1267.58" x2="1058.57" y2="1267.58"/>
							<line class="st9" x1="882.46" y1="1234.48" x2="1058.57" y2="1234.48"/>
							<line class="st9" x1="882.46" y1="1201.29" x2="1058.57" y2="1201.29"/>
							<path class="st9" d="M882.46,1168.24c4.77,0,176.11,0,176.11,0"/>
							<line class="st9" x1="1362.42" y1="1190.97" x2="1260.13" y2="1175.31"/>
							<line class="st9" x1="1351.69" y1="1239.05" x2="1253.23" y2="1207.62"/>
							<line class="st9" x1="1333.4" y1="1284.83" x2="1241.2" y2="1238.62"/>
							<line class="st9" x1="1307.82" y1="1327.54" x2="1224.48" y2="1267.15"/>
							<line class="st9" x1="1276.56" y1="1365.84" x2="1203.29" y2="1292.55"/>
							<line class="st9" x1="1239.98" y1="1398.4" x2="1178.98" y2="1315.05"/>
							<line class="st9" x1="1214.79" y1="1420.17" x2="1153.85" y2="1336.24"/>
							<line class="st9" x1="1189.17" y1="1441.43" x2="1128.06" y2="1357.28"/>
							<line class="st9" x1="1163.65" y1="1462.81" x2="1102.32" y2="1378.79"/>
							<line class="st9" x1="1137.91" y1="1482.6" x2="1076.58" y2="1399.25"/>
							<line class="st9" x1="1111.19" y1="1503.42" x2="1050.52" y2="1420.17"/>
							<line class="st9" x1="1084.69" y1="1523.46" x2="1024.02" y2="1440.01"/>
							<line class="st9" x1="1058.51" y1="1543.22" x2="997.18" y2="1459.62"/>
							<line class="st9" x1="1031.24" y1="1562.91" x2="970.46" y2="1479"/>
							<line class="st9" x1="1004.63" y1="1581.83" x2="943.52" y2="1498.45"/>
							<line class="st9" x1="977.47" y1="1600.78" x2="916.03" y2="1516.97"/>
							<line class="st9" x1="949.55" y1="1619.18" x2="888.65" y2="1535.43"/>
							<line class="st9" x1="922.06" y1="1637.37" x2="860.95" y2="1554.01"/>
							<line class="st9" x1="894.02" y1="1655.43" x2="832.8" y2="1571.55"/>
							<line class="st9" x1="865.66" y1="1673.06" x2="804.99" y2="1589.44"/>
							<line class="st9" x1="837.73" y1="1690.89" x2="776.51" y2="1606.58"/>
							<line class="st9" x1="809.26" y1="1707.72" x2="747.82" y2="1623.45"/>
							<line class="st9" x1="780.34" y1="1724.22" x2="718.91" y2="1640.16"/>
							<line class="st9" x1="750.88" y1="1741.18" x2="689.67" y2="1656.55"/>
							<line class="st9" x1="1216.74" y1="238.02" x2="1365.59" y2="238.02"/>
							<line class="st9" x1="1216.74" y1="296.01" x2="1365.59" y2="296.01"/>
							<line class="st9" x1="1216.74" y1="354.1" x2="1365.59" y2="354.1"/>
							<line class="st9" x1="1216.74" y1="412.37" x2="1365.59" y2="412.26"/>
							<line class="st9" x1="1216.74" y1="469.83" x2="1365.59" y2="469.83"/>
							<line class="st9" x1="1216.74" y1="527.68" x2="1365.59" y2="527.68"/>
							<line class="st9" x1="1216.74" y1="586.01" x2="1365.59" y2="586.01"/>
							<line class="st9" x1="1216.74" y1="644.49" x2="1365.59" y2="644.49"/>
							<line class="st9" x1="1216.74" y1="702.19" x2="1365.59" y2="702.19"/>
							<line class="st9" x1="1216.74" y1="760.36" x2="1365.59" y2="760.36"/>
							<line class="st9" x1="1216.74" y1="818.38" x2="1365.59" y2="818.38"/>
							<line class="st9" x1="1216.74" y1="876.44" x2="1365.59" y2="876.44"/>
							<line class="st9" x1="1216.74" y1="934.49" x2="1365.79" y2="934.49"/>
							<line class="st9" x1="1105.92" y1="843.32" x2="1105.92" y2="992.58"/>
							<polyline class="st9" points="1043.45,843.32 1043.45,992.58 1043.45,1096.52"/>
							<line class="st9" x1="981.2" y1="843.32" x2="981.2" y2="992.58"/>
							<line class="st9" x1="919.21" y1="843.32" x2="919.21" y2="992.58"/>
							<line class="st9" x1="857.01" y1="843.32" x2="857.01" y2="992.58"/>
							<line class="st9" x1="794.91" y1="843.32" x2="794.91" y2="992.58"/>
							<line class="st9" x1="733.03" y1="843.32" x2="733.03" y2="992.58"/>
							<line class="st9" x1="670.39" y1="843.32" x2="670.39" y2="992.58"/>
							<line class="st9" x1="608.84" y1="843.15" x2="608.84" y2="992.58"/>
							<line class="st9" x1="695.77" y1="742.27" x2="546.09" y2="742.27"/>
							<line class="st9" x1="696.02" y1="683.86" x2="546.09" y2="683.86"/>
							<line class="st9" x1="696.02" y1="625.93" x2="546.09" y2="625.93"/>
							<line class="st9" x1="696.02" y1="567.63" x2="546.09" y2="567.63"/>
							<line class="st9" x1="696.02" y1="510.55" x2="546.09" y2="510.55"/>
							<line class="st9" x1="696.02" y1="452.51" x2="546.04" y2="452.51"/>
							<line class="st9" x1="696.02" y1="394.47" x2="546.12" y2="394.47"/>
							<polyline class="st9" points="696.02,331.87 546.04,333.19 463.08,333.27"/>
							<line class="st9" x1="767.07" y1="87.03" x2="788.23" y2="237.97"/>
							<line class="st9" x1="824.86" y1="81.91" x2="845.42" y2="230.03"/>
							<line class="st9" x1="890.35" y1="72.66" x2="911.11" y2="220.67"/>
							<line class="st9" x1="956.01" y1="63.4" x2="977.25" y2="211.69"/>
							<line class="st9" x1="1022.15" y1="54.2" x2="1042.52" y2="202.01"/>
							<line class="st9" x1="1087.43" y1="45" x2="1108.01" y2="193.07"/>
							<line class="st9" x1="1033.02" y1="266.99" x2="1033.06" y2="471.96"/>
							<line class="st9" x1="887.89" y1="422.06" x2="1174.01" y2="422.11"/>
							<line class="st9" x1="1173.85" y1="372.74" x2="888.05" y2="372.62"/>
							<line class="st9" x1="887.89" y1="322.84" x2="1174.01" y2="322.84"/>
							<line class="st9" x1="1155" y1="659.49" x2="757.4" y2="659.49"/>
							<line class="st9" x1="807.01" y1="800.44" x2="806.9" y2="514.48"/>
							<line class="st9" x1="856.84" y1="514.43" x2="856.84" y2="800.44"/>
							<line class="st9" x1="905.96" y1="800.44" x2="905.96" y2="514.43"/>
							<line class="st9" x1="955.9" y1="514.39" x2="955.9" y2="800.44"/>
							<line class="st9" x1="1006.16" y1="800.44" x2="1006.16" y2="514.39"/>
							<line class="st9" x1="1055.78" y1="514.43" x2="1055.78" y2="800.44"/>
							<line class="st9" x1="1105.06" y1="800.44" x2="1105.06" y2="514.39"/>
							<line class="st9" x1="0.81" y1="814.72" x2="67.13" y2="814.64"/>
							<line class="st9" x1="116.24" y1="824.64" x2="116.24" y2="686.54"/>
							<line class="st9" x1="414.23" y1="824.64" x2="414.23" y2="686.54"/>
							<line class="st9" x1="120.24" y1="863.35" x2="120.24" y2="929.67"/>
							<line class="st9" x1="283.15" y1="575.22" x2="424.47" y2="575.22"/>
							<line class="st9" x1="105.74" y1="637.3" x2="244.49" y2="637.3"/>
							<line class="st9" x1="105.74" y1="438.45" x2="244.49" y2="438.45"/>
							<line class="st9" x1="122.46" y1="386.01" x2="111.12" y2="247.69"/>
							<line class="st9" x1="408.16" y1="223.07" x2="419.82" y2="360.8"/>
							<line class="st9" x1="87.55" y1="1049.7" x2="153.83" y2="1049.7"/>
							<line class="st9" x1="89.56" y1="1518.05" x2="154" y2="1510.13"/>
							<line class="st9" x1="400.11" y1="1449.43" x2="424.56" y2="1506.41"/>
							<line class="st9" x1="201.27" y1="1535.79" x2="229.43" y2="1602.04"/>
							<line class="st9" x1="241.27" y1="1668.44" x2="220.56" y2="1620.65"/>
							<line class="st9" x1="424.56" y1="1591.44" x2="370.32" y2="1463.75"/>
							<line class="st9" x1="233.81" y1="1712.45" x2="262.17" y2="1779.07"/>
							<line class="st9" x1="423.94" y1="1713.54" x2="395.7" y2="1646.84"/>
							<polyline class="st9" points="423.94,1713.54 398.27,1724.91 363,1739.82 332.48,1752.29 301.56,1764.38 270.6,1775.9 
								239.46,1787.54 265.18,1848.72"/>
							<line class="st9" x1="172.48" y1="1984.46" x2="148.91" y2="1928.37"/>
							<line class="st9" x1="519.92" y1="1785.31" x2="546.09" y2="1846.31"/>
							<line class="st9" x1="542.92" y1="1731.43" x2="463.02" y2="1731.43"/>
							<line class="st9" x1="546.36" y1="1640.89" x2="629.65" y2="1640.89"/>
							<line class="st9" x1="660.64" y1="1672.62" x2="721.75" y2="1757.74"/>
							<polyline class="st9" points="668.13,1577.04 750.72,1577.04 750.72,1135.17"/>
							<line class="st9" x1="822.43" y1="1532.63" x2="750.72" y2="1532.63"/>
							<path class="st9" d="M882.46,1433.08h83.02c0,0-0.01-289.2,0-297.97"/>
							<line class="st9" x1="1155" y1="800.44" x2="1155" y2="514.43"/>
							<line class="st9" x1="757.51" y1="800.44" x2="757.4" y2="514.39"/>
							<line class="st9" x1="1174.01" y1="266.99" x2="887.89" y2="266.99"/>
							<line class="st9" x1="730.19" y1="245.85" x2="708.75" y2="92.04"/>
							<line class="st9" x1="696.02" y1="250.67" x2="546.12" y2="270.84"/>
							<line class="st9" x1="1152.92" y1="35.8" x2="1173.94" y2="183.65"/>
							<line class="st9" x1="1332.99" y1="180.09" x2="1216.74" y2="180.09"/>
							<line class="st9" x1="87.55" y1="1381.67" x2="153.83" y2="1381.67"/>
							<line class="st9" x1="424.47" y1="1785.74" x2="398.27" y2="1724.91"/>
						</g>
						<line class="st10" x1="546.09" y1="1846.31" x2="546.11" y2="105.41"/>
						<line class="st10" x1="1365.59" y1="992.58" x2="546.09" y2="992.58"/>
						<line class="st10" x1="546.09" y1="930.49" x2="120.24" y2="929.67"/>
						<g id="C-62_2699_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 203.4606 1098.8654)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 204.5522 1054.5535)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 211.2103 1065.549)" class="st15 futura-book fs__6px">65</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 194.7957 1060.0486)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 220.9332 1060.049)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 204.5997 1040.9863)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="212.03,1044.34 207.29,1049.43 212.03,1054.55"/>
								<polygon class="st18" points="212.09,1044.34 212.09,1054.55 216.83,1049.46"/>
							</g>
						</g>
						<g id="C-62_2698_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 557.2686 1093.4011)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 558.9724 1028.8914)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 565.6304 1039.8868)" class="st15 futura-book fs__6px">16</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 549.2184 1034.39)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 558.4071 999.7097)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="562.67,1066.34 557.93,1071.43 562.67,1076.55"/>
								<polygon class="st18" points="562.72,1066.34 562.72,1076.55 567.46,1071.46"/>
							</g>
						</g>
						<g id="C-62_2697_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.633 1155.3427)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.6285 1148.6846)" class="st15 futura-book fs__6px">77</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.1308 1140.3717)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.8623 1156.1019)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="685.28,1145.89 680.54,1150.98 685.28,1156.1"/>
								<polygon class="st18" points="685.34,1145.89 685.34,1156.1 690.08,1151.01"/>
							</g>
						</g>
						<g id="C-62_2696_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.9441 1156.4208)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 784.0707 1155.3413)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 795.0662 1148.6832)" class="st15 futura-book fs__6px">89</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.5692 1140.3743)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.2524 1156.1013)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="825.16,1145.89 820.42,1150.98 825.16,1156.1"/>
								<polygon class="st18" points="825.22,1145.89 825.22,1156.1 829.96,1151.01"/>
							</g>
						</g>
						<g id="C-62_2695_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.6329 1189.3959)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.6284 1182.7378)" class="st15 futura-book fs__6px">76</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.1307 1174.4205)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.8624 1190.1494)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2694_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.9453 1190.4716)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 784.0706 1189.3945)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 795.066 1182.7365)" class="st15 futura-book fs__6px">88</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.5692 1174.4192)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.2525 1190.1488)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2693_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.8185 1221.6113)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.814 1214.9532)" class="st15 futura-book fs__6px">75</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.317 1206.6381)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 674.0489 1222.3699)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2692_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 841.1299 1222.6906)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 784.2561 1221.6139)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 795.2516 1214.9558)" class="st15 futura-book fs__6px">87</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.7535 1206.6367)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.437 1222.3694)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2691_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.8181 1254.8597)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.8135 1248.2018)" class="st15 futura-book fs__6px">74</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.316 1239.8859)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 674.0497 1255.6127)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2690_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 841.1299 1255.9366)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 784.2557 1254.8584)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 795.2512 1248.2004)" class="st15 futura-book fs__6px">86</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.7545 1239.8845)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.4379 1255.6161)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2689_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.818 1288.577)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.8135 1281.9189)" class="st15 futura-book fs__6px">73</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.3174 1273.6027)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 674.0497 1289.3322)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2688_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 841.1313 1289.6554)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 784.2557 1288.5757)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 795.2512 1281.9176)" class="st15 futura-book fs__6px">85</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.7539 1273.6012)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.4379 1289.3315)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2687_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5551 1321.0605)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5505 1314.4026)" class="st15 futura-book fs__6px">72</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0506 1306.0886)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7835 1321.8193)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2686_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8645 1322.1395)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9908 1321.0631)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9863 1314.405)" class="st15 futura-book fs__6px">84</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4891 1306.0873)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1736 1321.8188)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2685_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5553 1354.4224)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5508 1347.7643)" class="st15 futura-book fs__6px">71</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0504 1339.4458)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7837 1355.1754)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2684_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8644 1355.4989)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9891 1354.4209)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9846 1347.7629)" class="st15 futura-book fs__6px">83</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4888 1339.4484)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1738 1355.1788)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2683_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5537 1387.6005)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5492 1380.9425)" class="st15 futura-book fs__6px">70</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0513 1372.6272)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7829 1388.3557)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2682_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8644 1388.6786)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9895 1387.5991)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.985 1380.941)" class="st15 futura-book fs__6px">82</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4878 1372.6259)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.175 1388.3552)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2681_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5551 1420.3645)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5506 1413.7065)" class="st15 futura-book fs__6px">69</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0522 1405.3905)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7846 1421.1221)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2680_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8649 1421.4442)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9909 1420.3632)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9864 1413.7052)" class="st15 futura-book fs__6px">81</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4886 1405.3929)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1747 1421.1215)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2679_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5544 1453.1404)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5499 1446.4823)" class="st15 futura-book fs__6px">68</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0508 1438.1654)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7843 1453.8961)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2678_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8654 1454.2178)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9902 1453.1389)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9857 1446.481)" class="st15 futura-book fs__6px">80</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4893 1438.1641)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1744 1453.8955)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2677_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5537 1487.2405)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5492 1480.5824)" class="st15 futura-book fs__6px">67</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0511 1472.2689)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.784 1488.0022)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2676_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8646 1488.3193)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9894 1487.2429)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9849 1480.585)" class="st15 futura-book fs__6px">79</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4895 1472.2716)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1741 1488.0017)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2675_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5535 1522.1296)" class="white__fill futura-light fs__6px">186.60 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.549 1515.4716)" class="st15 futura-book fs__6px">66</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.051 1507.1542)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.783 1522.8856)" class="white__fill futura-light fs__6px">9.33</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 747.7452 1522.8835)" class="white__fill futura-light fs__6px">9.33</text>
						</g>
						<g id="C-62_2674_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 697.5551 1561.9762)" class="white__fill futura-light fs__6px">186.60 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 708.5506 1555.3182)" class="st15 futura-book fs__6px">65</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0519 1545.6111)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 703.0521 1574.6501)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 673.7843 1562.7341)" class="white__fill futura-light fs__6px">9.33</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 747.7445 1562.7358)" class="white__fill futura-light fs__6px">9.33</text>
							<g>
								<polygon class="st17" points="685.96,1553.77 681.22,1558.86 685.96,1563.98"/>
								<polygon class="st18" points="686.02,1553.77 686.02,1563.98 690.76,1558.89"/>
							</g>
						</g>
						<g id="C-62_2673_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 697.4218 1698.5667)" class="white__fill futura-light fs__6px">201.60 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 709.2833 1703.5223)" class="st15 futura-book fs__6px">64</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 690.3132 1710.6475)" class="white__fill futura-light fs__6px">25.08</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 675.5909 1673.0808)" class="white__fill futura-light fs__6px">8.04</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 728.813 1748.7786)" class="white__fill futura-light fs__6px">8.04</text>
							<g>
								<polygon class="st17" points="693.2,1680.84 688.46,1685.93 693.2,1691.05"/>
								<polygon class="st18" points="693.26,1680.84 693.26,1691.05 698,1685.97"/>
							</g>
						</g>
						<g id="C-62_2672_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 725.873 1681.2137)" class="white__fill futura-light fs__6px">201.32 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 737.7346 1686.1694)" class="st15 futura-book fs__6px">63</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 718.7651 1693.2939)" class="white__fill futura-light fs__6px">25.04</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 704.0426 1655.7271)" class="white__fill futura-light fs__6px">8.04</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 757.2639 1731.4254)" class="white__fill futura-light fs__6px">8.04</text>
						</g>
						<g id="C-62_2671_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 755.2244 1664.4115)" class="white__fill futura-light fs__6px">201.08 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 767.086 1669.3672)" class="st15 futura-book fs__6px">62</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 748.1149 1676.4918)" class="white__fill futura-light fs__6px">25.04</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 733.3922 1638.9252)" class="white__fill futura-light fs__6px">8.03</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 786.6149 1714.623)" class="white__fill futura-light fs__6px">8.03</text>
						</g>
						<g id="C-62_2670_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 783.9515 1646.6309)" class="white__fill futura-light fs__6px">200.85 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 795.813 1651.5865)" class="st15 futura-book fs__6px">61</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 776.8403 1658.712)" class="white__fill futura-light fs__6px">25.01</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 762.119 1621.1439)" class="white__fill futura-light fs__6px">8.03</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 815.3411 1696.8435)" class="white__fill futura-light fs__6px">8.03</text>
						</g>
						<g id="C-62_2669_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 812.3534 1629.8452)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 824.215 1634.8009)" class="st15 futura-book fs__6px">60</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 805.2456 1641.9252)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 790.5229 1604.3586)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 843.7461 1680.0573)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2668_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 839.9528 1613.0266)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 851.8144 1617.9823)" class="st15 futura-book fs__6px">59</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 832.8422 1625.1064)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 818.121 1587.5398)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 871.3437 1663.2374)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2667_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 869.2545 1594.2411)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 881.1161 1599.1968)" class="st15 futura-book fs__6px">58</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 862.145 1606.3218)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 846.8994 1569.6885)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 900.6465 1644.4526)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2666_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 897.5021 1576.5717)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 909.3637 1581.5273)" class="st15 futura-book fs__6px">57</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 890.3916 1588.652)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 875.146 1552.0195)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 928.892 1626.7841)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2665_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 924.537 1558.4072)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 936.3986 1563.3629)" class="st15 futura-book fs__6px">56</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 917.428 1570.4869)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 902.1818 1533.854)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 955.9271 1608.6185)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2664_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 952.066 1539.3204)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 963.9276 1544.2761)" class="st15 futura-book fs__6px">55</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 944.9586 1551.3992)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 929.7107 1514.7675)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 983.4587 1589.5311)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2663_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 979.1016 1520.7157)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 990.9631 1525.6714)" class="st15 futura-book fs__6px">54</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 971.9926 1532.7961)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 956.7458 1496.1626)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1010.9679 1571.3726)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2662_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1006.3901 1501.1864)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1018.2516 1506.1421)" class="st15 futura-book fs__6px">53</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 999.2828 1513.2655)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 984.035 1476.6342)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1038.2573 1551.8431)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2661_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1033.3085 1481.9421)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1045.17 1486.8978)" class="st15 futura-book fs__6px">52</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1026.2012 1494.0215)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 1010.9534 1457.3896)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1065.1724 1532.5989)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2660_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1059.061 1461.8748)" class="white__fill futura-light fs__6px">200.00  m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1070.9226 1466.8304)" class="st15 futura-book fs__6px">51</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1051.9525 1473.9551)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 1036.7075 1437.3231)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1090.9257 1512.5334)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2659_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1086.3518 1442.4565)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1098.2134 1447.4122)" class="st15 futura-book fs__6px">50</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1079.2438 1454.5364)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 1063.9956 1417.9044)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1118.218 1493.1146)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2658_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1112.7098 1420.8853)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1124.5714 1425.8409)" class="st15 futura-book fs__6px">49</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1105.6011 1432.9653)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 1090.3528 1396.333)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1144.572 1471.543)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2657_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1138.384 1400.6975)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1150.2456 1405.6532)" class="st15 futura-book fs__6px">48</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1131.2716 1412.7778)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.7675 -0.6486 0.6452 0.764 1116.1348 1376.4222)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1170.2473 1451.3552)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1129.01,1382.5 1124.27,1387.59 1129.01,1392.71"/>
								<polygon class="st18" points="1129.07,1382.5 1129.07,1392.71 1133.81,1387.62"/>
							</g>
						</g>
						<g id="C-62_2656_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1161.8186 1378.5857)" class="white__fill futura-light fs__6px">200.00m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1173.6802 1383.5414)" class="st15 futura-book fs__6px">47</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1154.7097 1390.6658)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.7675 -0.6486 0.6452 0.764 1141.5016 1356.8815)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1193.6844 1429.2432)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1153.47,1359.08 1148.73,1364.17 1153.47,1369.29"/>
								<polygon class="st18" points="1153.53,1359.08 1153.53,1369.29 1158.27,1364.2"/>
							</g>
						</g>
						<g id="C-62_2655_">
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1187.6823 1356.0334)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1199.5438 1360.9891)" class="st15 futura-book fs__6px">46</text>
							<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1180.5732 1368.114)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.7675 -0.6486 0.6452 0.764 1165.4354 1331.7572)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1219.5481 1406.6915)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1180.63,1340.37 1175.89,1345.46 1180.63,1350.58"/>
								<polygon class="st18" points="1180.69,1340.37 1180.69,1350.58 1185.42,1345.49"/>
							</g>
						</g>
						<g id="C-62_2654_">
							<text transform="matrix(0.6666 0.7389 -0.7424 0.6699 1211.8419 1336.3363)" class="white__fill futura-light fs__6px">249.22 m2</text>
							<text transform="matrix(0.6666 0.7389 -0.7424 0.6699 1224.1969 1339.8934)" class="st15 futura-book fs__6px">45</text>
							<text transform="matrix(0.6543 0.7498 -0.7532 0.6578 1206.3324 1348.6981)" class="white__fill futura-light fs__6px">25.08</text>
							<text transform="matrix(0.7301 -0.6905 0.6869 0.7267 1191.1226 1312.244)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.7253 -0.6955 0.6919 0.722 1251.2446 1382.3976)" class="white__fill futura-light fs__6px">11.94</text>
							<g>
								<polygon class="st17" points="1206.31,1316.71 1201.57,1321.8 1206.31,1326.92"/>
								<polygon class="st18" points="1206.37,1316.71 1206.37,1326.92 1211.11,1321.83"/>
							</g>
						</g>
						<g id="C-62_2653_">
							<text transform="matrix(0.7528 0.6508 -0.6539 0.7566 1241.2341 1307.8357)" class="white__fill futura-light fs__6px">248.98 m2</text>
							<text transform="matrix(0.7528 0.6508 -0.6539 0.7566 1253.933 1309.8394)" class="st15 futura-book fs__6px">44</text>
							<text transform="matrix(0.742 0.6631 -0.6661 0.7458 1236.0792 1323.0682)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.6391 -0.7755 0.7715 0.6362 1216.5936 1288.8425)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.6337 -0.7799 0.7759 0.6309 1285.8458 1350.2816)" class="white__fill futura-light fs__6px">11.93</text>
							<g>
								<polygon class="st17" points="1231.85,1293.96 1227.11,1299.05 1231.85,1304.17"/>
								<polygon class="st18" points="1231.9,1293.96 1231.9,1304.17 1236.64,1299.08"/>
							</g>
						</g>
						<g id="C-62_2652_">
							<text transform="matrix(0.8529 0.5127 -0.5151 0.8571 1264.094 1275.4604)" class="white__fill futura-light fs__6px">248.98 m2</text>
							<text transform="matrix(0.8529 0.5127 -0.5151 0.8571 1276.9484 1275.2667)" class="st15 futura-book fs__6px">43</text>
							<text transform="matrix(0.8124 0.5748 -0.5774 0.8165 1262.0232 1290.891)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.4973 -0.8732 0.8688 0.4952 1236.5065 1260.7928)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.4913 -0.8766 0.8722 0.4892 1315.0494 1309.2767)" class="white__fill futura-light fs__6px">11.93</text>
							<g>
								<polygon class="st17" points="1253.2,1260.89 1248.46,1265.98 1253.2,1271.1"/>
								<polygon class="st18" points="1253.26,1260.89 1253.26,1271.1 1258,1266.02"/>
							</g>
						</g>
						<g id="C-62_2651_">
							<text transform="matrix(0.9287 0.3574 -0.359 0.9333 1282.0583 1240.6545)" class="white__fill futura-light fs__6px">248.98 m2</text>
							<text transform="matrix(0.9287 0.3574 -0.359 0.9333 1294.6852 1238.2389)" class="st15 futura-book fs__6px">42</text>
							<text transform="matrix(0.8996 0.4255 -0.4273 0.9041 1282.7057 1256.4055)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.3387 -0.9461 0.9414 0.3373 1252.4042 1230.824)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.3322 -0.9484 0.9437 0.3308 1338.6859 1265.3893)" class="white__fill futura-light fs__6px">11.93</text>
							<g>
								<polygon class="st17" points="1271.63,1229.37 1266.9,1234.46 1271.63,1239.58"/>
								<polygon class="st18" points="1271.69,1229.37 1271.69,1239.58 1276.43,1234.49"/>
							</g>
						</g>
						<g id="C-62_2650_">
							<text transform="matrix(0.977 0.1887 -0.1895 0.9819 1293.3549 1202.8041)" class="white__fill futura-light fs__6px">248.98 m2</text>
							<text transform="matrix(0.977 0.1887 -0.1895 0.9819 1305.3612 1198.2087)" class="st15 futura-book fs__6px">41</text>
							<text transform="matrix(0.9603 0.2609 -0.2619 0.9651 1296.6895 1217.8915)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.1673 -0.9909 0.986 0.1668 1262.5525 1198.4105)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.1604 -0.992 0.9871 0.16 1353.2897 1217.1986)" class="white__fill futura-light fs__6px">11.93</text>
							<g>
								<polygon class="st17" points="1280.12,1190.96 1275.38,1196.05 1280.12,1201.17"/>
								<polygon class="st18" points="1280.18,1190.96 1280.18,1201.17 1284.92,1196.08"/>
							</g>
						</g>
						<g id="C-62_2649_">
							<text transform="matrix(0.9951 3.383374e-04 -2.000000e-04 1 1299.9962 1162.0311)" class="white__fill futura-light fs__6px">290.41 m2</text>
							<text transform="matrix(0.9951 3.383374e-04 -2.000000e-04 1 1310.9155 1155.2457)" class="st15 futura-book fs__6px">40</text>
							<text transform="matrix(0.9835 0.1518 -0.1523 0.9883 1306.0916 1178.1439)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.9951 -4.488075e-03 4.810041e-03 1 1306.246 1141.6221)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(0.0821 -1.0015 0.9966 0.082 1269.4855 1158.2188)" class="white__fill futura-light fs__6px">9.70</text>
							<text transform="matrix(0.0752 -1.0021 0.9972 0.0751 1361.7949 1167.8719)" class="white__fill futura-light fs__6px">13.53</text>
							<g>
								<polygon class="st17" points="1287.27,1148.51 1282.53,1153.6 1287.27,1158.72"/>
								<polygon class="st18" points="1287.33,1148.51 1287.33,1158.72 1292.07,1153.64"/>
							</g>
						</g>
						<g id="C-62_2648_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 840.8655 1514.2725)" class="white__fill futura-light fs__6px">4.59</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 783.9897 1520.0968)" class="white__fill futura-light fs__6px">171.05 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 794.9852 1513.4388)" class="st15 futura-book fs__6px">78</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 789.4879 1505.1246)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 780.9175 1530.575)" class="white__fill futura-light fs__6px">17.22</text>
							<text transform="matrix(0.8354 -0.5407 0.5436 0.8394 826.864 1528.3231)" class="white__fill futura-light fs__6px">6.28</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 758.1752 1520.8578)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="821.56,1508.74 816.82,1513.83 821.56,1518.95"/>
								<polygon class="st18" points="821.62,1508.74 821.62,1518.95 826.36,1513.87"/>
							</g>
						</g>
						<g id="C-62_2647_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4694 1156.4196)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3997 1155.3448)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3951 1148.6868)" class="st15 futura-book fs__6px">15</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8997 1140.3724)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8251 1156.1036)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="613.49,1145.89 608.75,1150.98 613.49,1156.1"/>
								<polygon class="st18" points="613.55,1145.89 613.55,1156.1 618.29,1151.01"/>
							</g>
						</g>
						<g id="C-62_2646_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4676 1189.5602)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4005 1188.4839)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.396 1181.8259)" class="st15 futura-book fs__6px">14</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8997 1173.5148)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8246 1189.2449)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2645_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4694 1222.9352)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4006 1221.8574)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3961 1215.1993)" class="st15 futura-book fs__6px">13</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8992 1206.8837)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8247 1222.6127)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2644_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4677 1255.9313)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3992 1254.8597)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3947 1248.2018)" class="st15 futura-book fs__6px">12</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8992 1239.8853)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.825 1255.6094)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2643_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4685 1288.3258)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.401 1287.2566)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3965 1280.5986)" class="st15 futura-book fs__6px">11</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8987 1272.2811)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.825 1288.0084)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2642_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4685 1321.5564)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4009 1320.4778)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3964 1313.8197)" class="st15 futura-book fs__6px">10</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8984 1305.5055)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8239 1321.2356)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2641_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4678 1355.4978)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4001 1354.4216)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3956 1347.7635)" class="st15 futura-book fs__6px">09</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8994 1339.4449)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8246 1355.1776)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2640_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4688 1387.7439)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3999 1386.6583)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3954 1380.0002)" class="st15 futura-book fs__6px">08</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8994 1371.6846)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8254 1387.4243)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2639_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4675 1420.2087)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4009 1419.1255)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3964 1412.4674)" class="st15 futura-book fs__6px">07</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8989 1404.1508)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8249 1419.8898)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2638_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4676 1453.408)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3991 1452.3231)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3946 1445.665)" class="st15 futura-book fs__6px">06</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8992 1437.3517)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.824 1453.0857)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2637_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.469 1487.2518)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3995 1486.1693)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3949 1479.5112)" class="st15 futura-book fs__6px">05</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.899 1471.1974)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8253 1486.9302)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2636_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4691 1520.4471)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3997 1519.363)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3951 1512.7051)" class="st15 futura-book fs__6px">04</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8996 1504.3866)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8245 1520.1261)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2635_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4683 1554.5292)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3992 1553.4436)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3947 1546.7856)" class="st15 futura-book fs__6px">03</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8985 1538.4706)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8243 1554.2087)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2634_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4687 1587.326)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.4001 1586.2428)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3956 1579.5848)" class="st15 futura-book fs__6px">02</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8986 1571.2651)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8239 1587.0062)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2633_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 627.4679 1625.5721)" class="white__fill futura-light fs__6px">10.03</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 572.3993 1624.4878)" class="white__fill futura-light fs__6px">200.60 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 583.3948 1617.8297)" class="st15 futura-book fs__6px">01</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8989 1605.7869)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 577.8998 1638.9644)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 552.8247 1625.2531)" class="white__fill futura-light fs__6px">10.03</text>
							<g>
								<polygon class="st17" points="609.53,1613.04 604.79,1618.13 609.53,1623.25"/>
								<polygon class="st18" points="609.59,1613.04 609.59,1623.25 614.32,1618.16"/>
							</g>
						</g>
						<g id="C-62_2632_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 913.3512 1155.3445)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 924.3467 1148.6865)" class="st15 futura-book fs__6px">98</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 918.8489 1140.3713)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5808 1156.1044)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="901,1145.89 896.26,1150.98 901,1156.1"/>
								<polygon class="st18" points="901.06,1145.89 901.06,1156.1 905.8,1151.01"/>
							</g>
						</g>
						<g id="C-62_2631_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6324 1421.9862)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5936 1415.4739)" class="st15 futura-book fs__6px">90</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0519 1406.9795)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.1111 1430.8757)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.581 1422.8359)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 962.0256 1422.8362)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="901,1412.63 896.26,1417.72 901,1422.84"/>
								<polygon class="st18" points="901.06,1412.63 901.06,1422.84 905.8,1417.75"/>
							</g>
						</g>
						<g id="C-62_2630_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6324 1387.7308)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5922 1381.2214)" class="st15 futura-book fs__6px">91</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0511 1372.7296)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5802 1388.5853)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 962.0268 1388.5815)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2629_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6312 1355.4833)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5925 1348.973)" class="st15 futura-book fs__6px">92</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0518 1340.4844)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5814 1356.3386)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2628_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.632 1322.3959)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.593 1315.8887)" class="st15 futura-book fs__6px">93</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0524 1307.399)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5796 1323.252)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2627_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6311 1288.6521)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5934 1282.144)" class="st15 futura-book fs__6px">94</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0525 1273.6494)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5798 1289.5013)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2626_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6319 1255.9788)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5929 1249.4659)" class="st15 futura-book fs__6px">95</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0507 1240.9666)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5815 1256.821)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2625_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6325 1222.907)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.5931 1216.401)" class="st15 futura-book fs__6px">96</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.0508 1207.9008)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5796 1223.754)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2624_">
							<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 912.6321 1190.3625)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 923.593 1183.8557)" class="st15 futura-book fs__6px">97</text>
							<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 918.051 1175.3663)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 889.5805 1191.2144)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2623_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.661 1156.4208)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.7869 1155.3431)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7824 1148.6851)" class="st15 futura-book fs__6px">105</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2853 1140.3738)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9709 1156.1038)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1145.89 1036.14,1150.98 1040.88,1156.1"/>
								<polygon class="st18" points="1040.94,1145.89 1040.94,1156.1 1045.68,1151.01"/>
							</g>
						</g>
						<g id="C-62_2622_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.6616 1191.1201)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.787 1190.0409)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7824 1183.3828)" class="st15 futura-book fs__6px">104</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2847 1175.0675)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9711 1190.7998)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1180.59 1036.14,1185.68 1040.88,1190.8"/>
								<polygon class="st18" points="1040.94,1180.59 1040.94,1190.8 1045.68,1185.71"/>
							</g>
						</g>
						<g id="C-62_2621_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.6622 1223.667)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.787 1222.5862)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7825 1215.9282)" class="st15 futura-book fs__6px">103</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2858 1207.6158)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9721 1223.3434)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1213.13 1036.14,1218.22 1040.88,1223.34"/>
								<polygon class="st18" points="1040.94,1213.13 1040.94,1223.34 1045.68,1218.25"/>
							</g>
						</g>
						<g id="C-62_2620_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.6624 1256.7334)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.7868 1255.655)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7823 1248.9969)" class="st15 futura-book fs__6px">102</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.286 1240.6799)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.972 1256.4104)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1246.2 1036.14,1251.29 1040.88,1256.41"/>
								<polygon class="st18" points="1040.94,1246.2 1040.94,1256.41 1045.68,1251.32"/>
							</g>
						</g>
						<g id="C-62_2619_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.661 1289.4092)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.7872 1288.3331)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7827 1281.675)" class="st15 futura-book fs__6px">101</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2854 1273.3572)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9703 1289.0868)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1278.88 1036.14,1283.96 1040.88,1289.09"/>
								<polygon class="st18" points="1040.94,1278.88 1040.94,1289.09 1045.68,1284"/>
							</g>
						</g>
						<g id="C-62_2618_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.6625 1323.1592)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.7869 1322.0737)" class="white__fill futura-light fs__6px">180.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.7823 1315.4158)" class="st15 futura-book fs__6px">100</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2861 1307.1013)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9721 1322.8413)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1312.62 1036.14,1317.71 1040.88,1322.83"/>
								<polygon class="st18" points="1040.94,1312.62 1040.94,1322.83 1045.68,1317.75"/>
							</g>
						</g>
						<g id="C-62_2617_">
							<text transform="matrix(9.446052e-04 -1.0049 1 1.249999e-03 1056.6614 1355.4991)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 999.7875 1354.412)" class="white__fill futura-light fs__6px">179.71 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 1010.783 1347.754)" class="st15 futura-book fs__6px">99</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2853 1339.4385)" class="white__fill futura-light fs__6px">22.50</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 1005.2854 1365.8359)" class="white__fill futura-light fs__6px">21.65</text>
							<text transform="matrix(5.878671e-03 -1.0049 1 6.150007e-03 973.9704 1355.1779)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1040.88,1344.96 1036.14,1350.05 1040.88,1355.17"/>
								<polygon class="st18" points="1040.94,1344.96 1040.94,1355.17 1045.68,1350.08"/>
							</g>
						</g>
						<g id="C-62_2616_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1088.4841 1093.4004)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1090.1862 1028.891)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1096.8442 1039.8865)" class="st15 futura-book fs__6px">32</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1080.4329 1034.3889)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1089.6202 999.7099)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1093.88,1066.34 1089.14,1071.43 1093.88,1076.55"/>
								<polygon class="st18" points="1093.94,1066.34 1093.94,1076.55 1098.68,1071.46"/>
							</g>
						</g>
						<g id="C-62_2615_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1120.6814 1093.4014)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1122.3838 1028.8906)" class="white__fill futura-light fs__6px">200 .00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1129.0419 1039.8861)" class="st15 futura-book fs__6px">33</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1112.6295 1034.3898)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1121.8201 999.7089)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1126.08,1066.34 1121.34,1071.43 1126.08,1076.55"/>
								<polygon class="st18" points="1126.14,1066.34 1126.14,1076.55 1130.87,1071.46"/>
							</g>
						</g>
						<g id="C-62_2614_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1153.5818 1093.401)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1155.2845 1028.8909)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1161.9426 1039.8864)" class="st15 futura-book fs__6px">34</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1145.5276 1034.3887)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1154.7172 999.7099)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="1158.98,1066.34 1154.24,1071.43 1158.98,1076.55"/>
								<polygon class="st18" points="1159.04,1066.34 1159.04,1076.55 1163.77,1071.46"/>
							</g>
						</g>
						<g id="C-62_2613_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1187.4218 1093.4016)" class="white__fill futura-light fs__6px">9.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1189.1249 1028.8905)" class="white__fill futura-light fs__6px">225.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1195.783 1039.886)" class="st15 futura-book fs__6px">35</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1179.3693 1034.3888)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1188.5576 999.7106)" class="white__fill futura-light fs__6px">9.00</text>
							<g>
								<polygon class="st17" points="1192.82,1066.34 1188.08,1071.43 1192.82,1076.55"/>
								<polygon class="st18" points="1192.88,1066.34 1192.88,1076.55 1197.61,1071.46"/>
							</g>
						</g>
						<g id="C-62_2612_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1224.7323 1093.4015)" class="white__fill futura-light fs__6px">9.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1226.4323 1028.89)" class="white__fill futura-light fs__6px">225.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1233.0903 1039.8855)" class="st15 futura-book fs__6px">36</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1216.6793 1034.3888)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1225.8689 999.7101)" class="white__fill futura-light fs__6px">9.00</text>
							<g>
								<polygon class="st17" points="1230.13,1066.34 1225.39,1071.43 1230.13,1076.55"/>
								<polygon class="st18" points="1230.19,1066.34 1230.19,1076.55 1234.92,1071.46"/>
							</g>
						</g>
						<g id="C-62_2611_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 590.2296 1093.4008)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 591.9318 1028.8903)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 598.5898 1039.8857)" class="st15 futura-book fs__6px">17</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 582.1791 1034.3888)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 591.3667 999.7092)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2610_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 623.7824 1093.4011)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 625.485 1028.8904)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 632.143 1039.8859)" class="st15 futura-book fs__6px">18</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 615.7317 1034.3887)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 624.9181 999.7101)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2609_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 656.8547 1093.4009)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 658.5576 1028.8906)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 665.2157 1039.8861)" class="st15 futura-book fs__6px">19</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 648.8036 1034.3887)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 657.9929 999.7103)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2608_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 689.2727 1093.4021)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 690.976 1028.891)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 697.634 1039.8865)" class="st15 futura-book fs__6px">20</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 681.219 1034.3896)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 690.4095 999.7104)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2607_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 723.1125 1093.4008)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 724.8163 1028.8906)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 731.4743 1039.8861)" class="st15 futura-book fs__6px">21</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 715.0608 1034.3898)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 724.2481 999.7092)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2606_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 755.9056 1093.4003)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 757.6057 1028.8915)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 764.2638 1039.887)" class="st15 futura-book fs__6px">22</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 747.8514 1034.3896)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 757.0417 999.7097)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2605_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 788.972 1093.4021)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 790.6745 1028.8898)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 797.3326 1039.8853)" class="st15 futura-book fs__6px">23</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 780.9194 1034.3895)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 790.1087 999.7097)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2604_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 823.4896 1093.4014)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 825.1926 1028.8916)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 831.8506 1039.8871)" class="st15 futura-book fs__6px">24</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 815.4373 1034.3892)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 824.627 999.7105)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2603_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 855.6264 1093.4003)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 857.3297 1028.8905)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 863.9877 1039.886)" class="st15 futura-book fs__6px">25</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 847.5752 1034.3901)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 856.7623 999.709)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2602_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 887.9546 1093.4014)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 889.6562 1028.8899)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 896.3143 1039.8854)" class="st15 futura-book fs__6px">26</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 879.9008 1034.3887)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 889.0911 999.7106)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2601_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 922.4526 1093.4006)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 924.1528 1028.8914)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 930.8109 1039.8868)" class="st15 futura-book fs__6px">27</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 914.399 1034.3896)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 923.5898 999.7094)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2600_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 956.4293 1093.4012)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 958.1298 1028.8906)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 964.7879 1039.8861)" class="st15 futura-book fs__6px">28</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 948.3757 1034.3896)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 957.565 999.7089)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2599_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 989.2477 1093.4009)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 990.9506 1028.8899)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 997.6086 1039.8854)" class="st15 futura-book fs__6px">29</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 981.1937 1034.3884)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 990.384 999.7095)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2598_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1020.0602 1093.4005)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1021.7633 1028.8907)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1028.4214 1039.8862)" class="st15 futura-book fs__6px">30</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1012.0088 1034.3894)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1021.199 999.71)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2597_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1055.4703 1093.4006)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1057.1721 1028.8914)" class="white__fill futura-light fs__6px">200.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1063.8301 1039.8868)" class="st15 futura-book fs__6px">31</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1047.4176 1034.3887)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1056.606 999.7101)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2596_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1263.3026 1093.4006)" class="white__fill futura-light fs__6px">9.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1265.0052 1028.8909)" class="white__fill futura-light fs__6px">225.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1271.6633 1039.8864)" class="st15 futura-book fs__6px">37</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1255.2515 1034.389)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1264.4399 999.7092)" class="white__fill futura-light fs__6px">9.00</text>
						</g>
						<g id="C-62_2595_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1299.2871 1093.4012)" class="white__fill futura-light fs__6px">9.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1300.9884 1028.8905)" class="white__fill futura-light fs__6px">225.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1307.6464 1039.886)" class="st15 futura-book fs__6px">38</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1291.2347 1034.3888)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1300.4249 999.7107)" class="white__fill futura-light fs__6px">9.00</text>
						</g>
						<g id="C-62_2594_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 1341.3125 1093.4017)" class="white__fill futura-light fs__6px">9.73</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1343.0148 1028.8911)" class="white__fill futura-light fs__6px">243.25 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1349.6729 1039.8866)" class="st15 futura-book fs__6px">39</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1333.2615 1034.3885)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(5.105044e-03 0.9951 -1 5.430029e-03 1357.4225 1034.5052)" class="white__fill futura-light fs__6px">25.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 1342.4492 999.7104)" class="white__fill futura-light fs__6px">9.73</text>
							<g>
								<polygon class="st17" points="1346.71,1066.34 1341.97,1071.43 1346.71,1076.55"/>
								<polygon class="st18" points="1346.77,1066.34 1346.77,1076.55 1351.51,1071.46"/>
							</g>
						</g>
						<g id="C-62_2593_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 236.8493 1098.8655)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 237.9374 1054.5536)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 244.5955 1065.5491)" class="st15 futura-book fs__6px">66</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 254.3216 1060.05)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 237.987 1040.9863)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2592_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 402.2187 1098.8667)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 403.3067 1054.5531)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 409.9647 1065.5486)" class="st15 futura-book fs__6px">71</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 419.6911 1060.0502)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 403.3573 1040.9869)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="410.79,1044.34 406.05,1049.43 410.79,1054.55"/>
								<polygon class="st18" points="410.85,1044.34 410.85,1054.55 415.59,1049.46"/>
							</g>
						</g>
						<g id="C-62_2591_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 203.4632 1171.803)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 204.5521 1122.6598)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 211.2102 1133.6553)" class="st15 futura-book fs__6px">72</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 194.7982 1128.1595)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 220.9338 1128.158)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="212.03,1152.58 207.29,1157.67 212.03,1162.79"/>
								<polygon class="st18" points="212.09,1152.58 212.09,1162.79 216.83,1157.71"/>
							</g>
						</g>
						<g id="C-62_2590_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 238.3675 1171.8026)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 239.455 1122.6603)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 246.1131 1133.6558)" class="st15 futura-book fs__6px">73</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 254.3183 1128.1589)" class="white__fill futura-light fs__6px">17.50</text>
						</g>
						<g id="C-62_2589_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 268.6697 1098.8661)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 269.7581 1054.5527)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 276.4161 1065.5482)" class="st15 futura-book fs__6px">67</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 286.1411 1060.0499)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 269.808 1040.9869)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2588_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 270.1879 1171.8032)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 271.2776 1122.6594)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 277.9356 1133.6549)" class="st15 futura-book fs__6px">74</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 286.1397 1128.1588)" class="white__fill futura-light fs__6px">17.50</text>
						</g>
						<g id="C-62_2587_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 301.7439 1098.866)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 302.8327 1054.553)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 309.4907 1065.5485)" class="st15 futura-book fs__6px">68</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 319.213 1060.0499)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 302.8828 1040.9871)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2586_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 303.2621 1171.803)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 304.3503 1122.6597)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 311.0083 1133.6552)" class="st15 futura-book fs__6px">75</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 319.2136 1128.1589)" class="white__fill futura-light fs__6px">17.50</text>
						</g>
						<g id="C-62_2585_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 335.4744 1098.8665)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 336.5636 1054.5533)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 343.2216 1065.5488)" class="st15 futura-book fs__6px">69</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 352.9454 1060.049)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 336.6119 1040.9872)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2584_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 336.9926 1171.8035)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 338.0812 1122.66)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 344.7393 1133.6555)" class="st15 futura-book fs__6px">76</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 352.944 1128.1598)" class="white__fill futura-light fs__6px">17.50</text>
						</g>
						<g id="C-62_2583_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 367.2342 1098.865)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 368.3237 1054.5537)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 374.9818 1065.5492)" class="st15 futura-book fs__6px">70</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 384.7043 1060.0491)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 368.3723 1040.9874)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2582_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 368.7524 1171.8041)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 369.8413 1122.6604)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 376.4993 1133.6559)" class="st15 futura-book fs__6px">77</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 384.703 1128.158)" class="white__fill futura-light fs__6px">17.50</text>
						</g>
						<g id="C-62_2581_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 402.2212 1171.8042)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 403.3086 1122.6575)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 409.9666 1133.653)" class="st15 futura-book fs__6px">78</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 419.6898 1128.1571)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="410.79,1152.47 406.05,1157.56 410.79,1162.68"/>
								<polygon class="st18" points="410.85,1152.47 410.85,1162.68 415.59,1157.6"/>
							</g>
						</g>
						<g id="C-62_2580_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 203.4617 1276.1019)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 204.5517 1231.7885)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 211.2097 1242.7839)" class="st15 futura-book fs__6px">79</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 194.7955 1237.2886)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 220.933 1237.287)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 204.6015 1218.2238)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="212.03,1221.58 207.29,1226.66 212.03,1231.79"/>
								<polygon class="st18" points="212.09,1221.58 212.09,1231.79 216.83,1226.7"/>
							</g>
						</g>
						<g id="C-62_2579_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 236.8504 1276.1021)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 237.9388 1231.7886)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 244.5968 1242.7841)" class="st15 futura-book fs__6px">80</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 254.3215 1237.2881)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 237.9869 1218.2238)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2578_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 402.2198 1276.1031)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 403.308 1231.7882)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 409.9661 1242.7837)" class="st15 futura-book fs__6px">85</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 419.6909 1237.2882)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 403.3572 1218.2244)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="410.79,1221.58 406.05,1226.66 410.79,1231.79"/>
								<polygon class="st18" points="410.85,1221.58 410.85,1231.79 415.59,1226.7"/>
							</g>
						</g>
						<g id="C-62_2577_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 203.4643 1349.0396)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 204.5515 1299.8967)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 211.2096 1310.8922)" class="st15 futura-book fs__6px">86</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 194.7981 1305.3956)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 220.9336 1305.396)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="212.03,1329.82 207.29,1334.91 212.03,1340.03"/>
								<polygon class="st18" points="212.09,1329.82 212.09,1340.03 216.83,1334.94"/>
							</g>
						</g>
						<g id="C-62_2576_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 238.3686 1349.0391)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 239.4564 1299.8972)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 246.1144 1310.8927)" class="st15 futura-book fs__6px">87</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 254.3182 1305.3949)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="244.57,1329.82 239.83,1334.91 244.57,1340.03"/>
								<polygon class="st18" points="244.63,1329.82 244.63,1340.03 249.36,1334.94"/>
							</g>
						</g>
						<g id="C-62_2575_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 268.6708 1276.1027)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 269.7594 1231.7897)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 276.4174 1242.7852)" class="st15 futura-book fs__6px">81</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 286.141 1237.288)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 269.8078 1218.2244)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2574_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 270.189 1349.0397)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 271.279 1299.8965)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 277.937 1310.892)" class="st15 futura-book fs__6px">88</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 286.1396 1305.3949)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="276.39,1329.82 271.65,1334.91 276.39,1340.03"/>
								<polygon class="st18" points="276.45,1329.82 276.45,1340.03 281.19,1334.94"/>
							</g>
						</g>
						<g id="C-62_2573_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 301.745 1276.1025)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 302.8321 1231.79)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 309.4901 1242.7855)" class="st15 futura-book fs__6px">82</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 319.2129 1237.288)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 302.8826 1218.2225)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2572_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 303.2632 1349.0396)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 304.3497 1299.8967)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 311.0077 1310.8922)" class="st15 futura-book fs__6px">89</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 319.2135 1305.3949)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="309.46,1329.82 304.72,1334.91 309.46,1340.03"/>
								<polygon class="st18" points="309.52,1329.82 309.52,1340.03 314.26,1334.94"/>
							</g>
						</g>
						<g id="C-62_2571_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 335.4756 1276.1029)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 336.563 1231.7883)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 343.2211 1242.7838)" class="st15 futura-book fs__6px">83</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 352.9453 1237.287)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 336.6118 1218.2227)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2570_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 336.9937 1349.04)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 338.0806 1299.897)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 344.7386 1310.8925)" class="st15 futura-book fs__6px">90</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 352.9439 1305.3959)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="343.19,1329.82 338.45,1334.91 343.19,1340.03"/>
								<polygon class="st18" points="343.25,1329.82 343.25,1340.03 347.99,1334.94"/>
							</g>
						</g>
						<g id="C-62_2569_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 367.2354 1276.1016)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 368.3231 1231.7887)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 374.9811 1242.7842)" class="st15 futura-book fs__6px">84</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 384.7042 1237.2871)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 368.3721 1218.2229)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2568_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 368.7516 1349.0405)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 369.8407 1299.8973)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 376.4987 1310.8928)" class="st15 futura-book fs__6px">91</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 384.7048 1305.3961)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="374.95,1329.82 370.21,1334.91 374.95,1340.03"/>
								<polygon class="st18" points="375.01,1329.82 375.01,1340.03 379.75,1334.94"/>
							</g>
						</g>
						<g id="C-62_2567_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 402.2204 1349.0427)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 403.3099 1299.8965)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 409.9679 1310.892)" class="st15 futura-book fs__6px">92</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 419.6897 1305.3932)" class="white__fill futura-light fs__6px">17.50</text>
							<g>
								<polygon class="st17" points="410.79,1329.71 406.05,1334.8 410.79,1339.92"/>
								<polygon class="st18" points="410.85,1329.71 410.85,1339.92 415.59,1334.83"/>
							</g>
						</g>
						<g id="C-62_2566_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 247.735 993.4596)" class="white__fill futura-light fs__6px">9.77</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 248.824 948.3232)" class="white__fill futura-light fs__6px">156.32 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 255.482 959.3187)" class="st15 futura-book fs__6px">02</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 267.4465 953.8204)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 248.8716 936.5678)" class="white__fill futura-light fs__6px">9.77</text>
						</g>
						<g id="C-62_2565_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 207.0142 993.4604)" class="white__fill futura-light fs__6px">9.77</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 208.1023 948.3224)" class="white__fill futura-light fs__6px">156.32 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 214.7603 959.3179)" class="st15 futura-book fs__6px">01</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 226.7249 953.8202)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 194.798 953.8212)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 208.1521 936.5679)" class="white__fill futura-light fs__6px">9.77</text>
							<g>
								<polygon class="st17" points="213.55,975.63 208.81,980.72 213.55,985.84"/>
								<polygon class="st18" points="213.61,975.63 213.61,985.84 218.35,980.75"/>
							</g>
						</g>
						<g id="C-62_2564_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 286.1843 993.4606)" class="white__fill futura-light fs__6px">9.77</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 287.272 948.3226)" class="white__fill futura-light fs__6px">156.32 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 293.9301 959.3181)" class="st15 futura-book fs__6px">03</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 305.8955 953.8211)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 287.3235 936.5681)" class="white__fill futura-light fs__6px">9.77</text>
						</g>
						<g id="C-62_2563_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 324.8562 993.4598)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 325.9447 948.3227)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 332.6028 959.3182)" class="st15 futura-book fs__6px">04</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 340.1887 953.8203)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 325.9961 936.5678)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2562_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 358.2801 993.46)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 359.367 948.3232)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 366.0251 959.3187)" class="st15 futura-book fs__6px">05</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 373.6104 953.8203)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 359.4167 936.568)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2561_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 392.4695 993.4589)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 393.555 948.3231)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 400.213 959.3185)" class="st15 futura-book fs__6px">06</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 407.8 953.8204)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 393.6068 936.5668)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2560_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 426.0282 993.4592)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 427.114 948.3232)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 433.7721 959.3187)" class="st15 futura-book fs__6px">07</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 441.3585 953.8204)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 427.166 936.5679)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2559_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 459.8329 993.4597)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 460.9192 948.3224)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 467.5772 959.3179)" class="st15 futura-book fs__6px">08</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 475.1631 953.8214)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 460.9694 936.5664)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2558_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 491.7021 993.4604)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 492.7887 948.3221)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 499.4467 959.3176)" class="st15 futura-book fs__6px">09</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 507.0314 953.8207)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 492.8391 936.5673)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2557_">
							<text transform="matrix(1.0049 9.446052e-04 -1.249999e-03 1 523.2724 993.4589)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 524.3574 948.3223)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 531.0154 959.3177)" class="st15 futura-book fs__6px">10</text>
							<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 540.2714 953.8215)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0049 5.878671e-03 -6.150007e-03 1 524.41 936.5664)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="529.47,976.07 524.73,981.16 529.47,986.28"/>
								<polygon class="st18" points="529.53,976.07 529.53,986.28 534.27,981.19"/>
							</g>
						</g>
						<g id="C-62_2556_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9028 1071.6252)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4868 1070.6614)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4281 1063.9095)" class="st15 futura-book fs__6px">64</text>
							<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 110.9034 1054.6057)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9011 1078.9581)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.423 1070.7214)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="138.23,1060.28 133.49,1065.37 138.23,1070.49"/>
								<polygon class="st18" points="138.29,1060.28 138.29,1070.49 143.03,1065.41"/>
							</g>
						</g>
						<g id="C-62_2555_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3797 774.9891)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6918 774.0248)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6331 767.2729)" class="st15 futura-book fs__6px">25</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1074 797.1965)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6388 774.085)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2554_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 776.4111 799.2744)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 777.3757 711.5878)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 784.1276 722.5291)" class="st15 futura-book fs__6px">57</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 758.9505 716.9967)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 799.0325 716.9977)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 777.3461 665.95)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2553_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1133.6975 985.5292)" class="white__fill futura-light fs__6px">16.43</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1138.1332 897.8397)" class="white__fill futura-light fs__6px">591.48m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1144.885 908.781)" class="st15 futura-book fs__6px">15</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1110.8375 903.2491)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1165.3748 903.2489)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1134.6326 852.2033)" class="white__fill futura-light fs__6px">16.43</text>
						</g>
						<g id="C-62_2552_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1068.8735 985.5284)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1073.3085 897.8394)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1080.0604 908.7806)" class="st15 futura-book fs__6px">16</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1047.2535 903.2499)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1069.808 852.2032)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2551_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1007.415 985.53)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1011.8491 897.8409)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1018.601 908.7821)" class="st15 futura-book fs__6px">17</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 985.7964 903.249)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1008.3486 852.2025)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2550_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 945.3842 985.5299)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 949.8194 897.8404)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 956.5713 908.7816)" class="st15 futura-book fs__6px">18</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 923.7651 903.2495)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 946.317 852.2032)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2549_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 882.6677 985.5291)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 887.1042 897.8395)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 893.8561 908.7807)" class="st15 futura-book fs__6px">19</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 861.0483 903.2493)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 883.5999 852.2037)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2548_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 820.6505 985.5289)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 825.0881 897.8391)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 831.84 908.7803)" class="st15 futura-book fs__6px">20</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 799.0326 903.2498)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 821.5839 852.2043)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2547_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 758.145 985.5285)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 762.5819 897.8408)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 769.3338 908.782)" class="st15 futura-book fs__6px">21</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 736.5267 903.2498)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 759.0777 852.2043)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2546_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 695.3934 985.5299)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 699.8295 897.8398)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 706.5814 908.781)" class="st15 futura-book fs__6px">22</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 673.7747 903.2495)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 696.3254 852.2029)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2545_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 634.2043 985.5295)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 638.6397 897.8402)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 645.3916 908.7815)" class="st15 futura-book fs__6px">23</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 612.5852 903.2488)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 635.1356 852.2034)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2544_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 572.7653 985.5289)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 577.2018 897.8398)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 583.9537 908.7811)" class="st15 futura-book fs__6px">24</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 551.1476 903.2499)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 573.6958 852.2026)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2543_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 777.3759 571.3195)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 784.1278 582.2607)" class="st15 futura-book fs__6px">49</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 758.9512 576.7291)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 799.0333 576.73)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 777.3449 520.9316)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2542_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 828.139 799.2748)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 829.1046 711.5881)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 835.8564 722.5294)" class="st15 futura-book fs__6px">58</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 850.7592 716.9967)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 829.0729 665.9519)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2541_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 829.1048 571.3196)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 835.8566 582.2609)" class="st15 futura-book fs__6px">50</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 850.7599 576.7291)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 829.0718 520.9316)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2540_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 874.7964 799.2758)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 875.7592 711.5884)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 882.511 722.5297)" class="st15 futura-book fs__6px">59</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 897.4174 716.9965)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 875.7294 665.951)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2539_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 875.7593 571.32)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 882.5112 582.2613)" class="st15 futura-book fs__6px">51</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 897.4181 576.7308)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 875.7283 520.9307)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2538_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 926.4091 799.2751)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 927.3727 711.5882)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 934.1246 722.5295)" class="st15 futura-book fs__6px">60</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 949.0287 716.9973)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 927.343 665.9514)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2537_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 927.373 571.3198)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 934.1249 582.2611)" class="st15 futura-book fs__6px">52</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 949.0295 576.7297)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 927.3419 520.931)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2536_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 977.0705 799.2757)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 978.0352 711.5887)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 984.7871 722.5299)" class="st15 futura-book fs__6px">61</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 999.6909 716.9972)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 978.0054 665.9501)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2535_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 978.0354 571.3203)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 984.7873 582.2615)" class="st15 futura-book fs__6px">53</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 999.6917 576.7296)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 978.0043 520.9317)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2534_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1025.3687 799.2762)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1026.3324 711.5888)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1033.0842 722.5301)" class="st15 futura-book fs__6px">62</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1047.9878 716.9966)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1026.3025 665.951)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2533_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1026.3326 571.3204)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1033.0845 582.2617)" class="st15 futura-book fs__6px">54</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1047.9885 576.729)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1026.3014 520.9306)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2532_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1074.9792 799.2748)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1075.9421 711.5876)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1082.694 722.5289)" class="st15 futura-book fs__6px">63</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1097.5992 716.9974)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1075.9103 665.9504)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2531_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1075.9423 571.3212)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1082.6942 582.2624)" class="st15 futura-book fs__6px">55</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1097.5999 576.7298)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1075.911 520.9301)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2530_">
							<text transform="matrix(1.0049 -7.466367e-03 7.119962e-03 1 1126.5587 799.2763)" class="white__fill futura-light fs__6px">1200</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1127.5244 711.5873)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1134.2764 722.5286)" class="st15 futura-book fs__6px">64</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1149.1793 716.9982)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1127.4926 665.9508)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2529_">
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1127.5247 571.3209)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(-3.562509e-03 0.9951 -1 -3.440014e-03 1134.2765 582.2621)" class="st15 futura-book fs__6px">56</text>
							<text transform="matrix(-1.293681e-03 0.9951 -1 -1.000009e-03 1149.1801 576.7306)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(1.0049 -2.542391e-03 2.229994e-03 1 1127.4934 520.9305)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2528_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3809 369.5335)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6921 368.5768)" class="white__fill futura-light fs__6px">540.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6333 361.825)" class="st15 futura-book fs__6px">32</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1066 391.7546)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6404 368.6309)" class="white__fill futura-light fs__6px">15.00</text>
						</g>
						<g id="C-62_2527_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3805 427.0506)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6915 426.1006)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6327 419.3488)" class="st15 futura-book fs__6px">31</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1076 449.2742)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6394 426.1467)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2526_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1031.1901 451.6819)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 943.4993 450.7278)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 954.4406 443.9759)" class="st15 futura-book fs__6px">41</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 948.9172 470.2225)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 892.4489 450.7779)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2525_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1172.7936 451.6814)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1088.1975 450.7263)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1099.1388 443.9744)" class="st15 futura-book fs__6px">45</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1093.6146 470.2231)" class="white__fill futura-light fs__6px">34.00</text>
						</g>
						<g id="C-62_2524_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1031.1891 401.0907)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 943.4996 400.1337)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 954.4409 393.3818)" class="st15 futura-book fs__6px">42</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 948.917 419.6287)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 892.4478 400.184)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2523_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1172.7926 401.0903)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1088.1976 400.1322)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1099.1389 393.3803)" class="st15 futura-book fs__6px">46</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1093.6145 419.6293)" class="white__fill futura-light fs__6px">34.00</text>
						</g>
						<g id="C-62_2522_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1031.1888 352.4215)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 943.499 351.4655)" class="white__fill futura-light fs__6px">420.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 954.4403 344.7136)" class="st15 futura-book fs__6px">43</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 948.9169 370.9567)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 892.4477 351.512)" class="white__fill futura-light fs__6px">12.00</text>
						</g>
						<g id="C-62_2521_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1172.7924 352.4211)" class="white__fill futura-light fs__6px">12.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1088.1971 351.4639)" class="white__fill futura-light fs__6px">408.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1099.1384 344.712)" class="st15 futura-book fs__6px">47</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1093.6143 370.9573)" class="white__fill futura-light fs__6px">34.00</text>
						</g>
						<g id="C-62_2520_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1031.1897 300.4944)" class="white__fill futura-light fs__6px">13.45</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 943.4999 299.5393)" class="white__fill futura-light fs__6px">470.75 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 954.4412 292.7874)" class="st15 futura-book fs__6px">44</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 948.9161 319.0309)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 948.9165 273.6636)" class="white__fill futura-light fs__6px">35.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 892.4472 299.5861)" class="white__fill futura-light fs__6px">13.45</text>
						</g>
						<g id="C-62_2519_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.459 231.4153)" class="white__fill futura-light fs__6px">4.83</text>
							<text transform="matrix(0.7719 0.6434 -0.6405 0.7679 1333.4581 190.992)" class="white__fill futura-light fs__6px">7.54</text>
							<text transform="matrix(0.5812 0.8198 -0.8159 0.5781 1352.9736 205.3169)" class="white__fill futura-light fs__6px">4.94</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7665 212.4122)" class="white__fill futura-light fs__6px">474.60 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7076 205.6603)" class="st15 futura-book fs__6px">01</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1853 231.9028)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1857 186.5356)" class="white__fill futura-light fs__6px">28.13</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 1223.7161 212.4644)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2518_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4568 271.3304)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2987 271.3336)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7682 270.3735)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7095 263.6216)" class="st15 futura-book fs__6px">02</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1859 289.8717)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2517_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4572 331.5819)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2991 331.5812)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7679 330.62)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7092 323.8681)" class="st15 futura-book fs__6px">03</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1862 350.1178)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2516_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4565 391.4272)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2985 391.4265)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7672 390.4602)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7085 383.7083)" class="st15 futura-book fs__6px">04</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1869 409.9539)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2515_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4573 448.038)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2991 448.0373)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7678 447.0778)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.709 440.3259)" class="st15 futura-book fs__6px">05</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1869 466.575)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2514_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4563 505.223)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2982 505.2223)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7664 504.2656)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7076 497.5137)" class="st15 futura-book fs__6px">06</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1864 523.7587)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2513_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4561 564.8652)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.298 564.8683)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7682 563.9067)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7095 557.1548)" class="st15 futura-book fs__6px">07</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1853 583.4033)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2512_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4557 622.3823)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2976 622.3815)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7676 621.4305)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7089 614.6786)" class="st15 futura-book fs__6px">08</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1864 640.9268)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2511_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.298 679.9963)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4561 679.997)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7667 679.0402)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7079 672.2883)" class="st15 futura-book fs__6px">09</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1862 699.7511)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2510_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2986 736.3298)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4567 736.3304)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7682 735.3804)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7095 728.6285)" class="st15 futura-book fs__6px">10</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1864 756.0871)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2509_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2991 794.4953)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4572 794.496)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7673 793.5488)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7086 786.7969)" class="st15 futura-book fs__6px">11</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1869 814.2512)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2508_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2979 851.6295)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4559 851.6302)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7681 850.6741)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7094 843.9222)" class="st15 futura-book fs__6px">12</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1864 871.3842)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2507_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2988 911.1779)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4569 911.1786)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7683 910.2292)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7095 903.4773)" class="st15 futura-book fs__6px">13</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.1854 930.935)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2506_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1224.2981 969.1716)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1362.4562 969.1722)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1274.7679 968.2217)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1285.7092 961.4698)" class="st15 futura-book fs__6px">14</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1280.186 988.9272)" class="white__fill futura-light fs__6px">36.00</text>
						</g>
						<g id="C-62_2505_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 1172.7932 300.494)" class="white__fill futura-light fs__6px">13.45</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1088.196 299.5378)" class="white__fill futura-light fs__6px">457.30 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 1099.1373 292.7859)" class="st15 futura-book fs__6px">48</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1093.6135 319.0315)" class="white__fill futura-light fs__6px">34.00</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 1093.6139 273.6642)" class="white__fill futura-light fs__6px">34.00</text>
						</g>
						<g id="C-62_2504_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3807 486.2318)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.691 485.2807)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6323 478.5288)" class="st15 futura-book fs__6px">30</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1071 508.454)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6387 485.3265)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2503_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3804 542.1824)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6919 541.2303)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6332 534.4784)" class="st15 futura-book fs__6px">29</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1077 564.4072)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6396 541.2758)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2502_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.381 601.4026)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6913 600.4455)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6326 593.6937)" class="st15 futura-book fs__6px">28</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1071 623.6182)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6391 600.4948)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2501_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3809 658.1736)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6913 657.2154)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6326 650.4636)" class="st15 futura-book fs__6px">27</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.107 680.3917)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.6401 657.2683)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2500_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3798 717.1634)" class="white__fill futura-light fs__6px">14.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.6915 716.2002)" class="white__fill futura-light fs__6px">504.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6328 709.4483)" class="st15 futura-book fs__6px">26</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1066 739.3683)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.639 716.2567)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2499_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 692.3801 296.0941)" class="white__fill futura-light fs__6px">19.65</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 604.691 304.7366)" class="white__fill futura-light fs__6px">616.74 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 615.6323 297.9847)" class="st15 futura-book fs__6px">33</text>
							<text transform="matrix(0.9882 -0.1174 0.1183 0.993 610.3807 270.0288)" class="white__fill futura-light fs__6px">36.35</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 610.1079 327.9108)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 553.639 304.7948)" class="white__fill futura-light fs__6px">14.61</text>
						</g>
						<g id="C-62_2498_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2839 803.8735)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1491 802.4912)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0903 795.7393)" class="st15 futura-book fs__6px">01</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5635 812.9393)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5444 804.0999)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="51.89,792.11 47.15,797.2 51.89,802.32"/>
								<polygon class="st18" points="51.95,792.11 51.95,802.32 56.69,797.23"/>
							</g>
						</g>
						<g id="C-62_2497_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.3596 625.8903)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1062 624.4992)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.0474 617.7473)" class="st15 futura-book fs__6px">88</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.521 634.9555)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6086 626.1091)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,614.12 222.11,619.21 226.85,624.33"/>
								<polygon class="st18" points="226.91,614.12 226.91,624.33 231.65,619.24"/>
							</g>
						</g>
						<g id="C-62_2496_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1253 624.502)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.0665 617.7501)" class="st15 futura-book fs__6px">82</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5405 634.957)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8312 626.1082)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="119.88,614.12 115.14,619.21 119.88,624.33"/>
								<polygon class="st18" points="119.94,614.12 119.94,624.33 124.68,619.24"/>
							</g>
						</g>
						<g id="C-62_2495_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.36 459.9773)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1046 458.5919)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.0459 451.84)" class="st15 futura-book fs__6px">93</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5209 469.0413)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5207 443.8615)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6097 460.198)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,448.21 222.11,453.3 226.85,458.42"/>
								<polygon class="st18" points="226.91,448.21 226.91,458.42 231.65,453.33"/>
							</g>
						</g>
						<g id="C-62_2494_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 132.2885 383.072)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 130.4671 333.4926)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 138.0264 343.8925)" class="st15 futura-book fs__6px">98</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 120.4864 339.5434)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 145.5902 337.6407)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 127.2393 319.6287)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="137.62,362.12 133.03,367.35 137.93,372.33"/>
								<polygon class="st18" points="137.67,362.12 137.98,372.32 142.57,367.09"/>
							</g>
						</g>
						<g id="C-62_2493_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 122.8634 206.308)" class="white__fill futura-light fs__6px">10.62</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 121.0396 157.5953)" class="white__fill futura-light fs__6px">159.08 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 128.5989 167.9951)" class="st15 futura-book fs__6px">21</text>
							<text transform="matrix(6.975885e-03 0.9951 -1 7.310024e-03 107.8012 163.7043)" class="white__fill futura-light fs__6px">16.06</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 136.1644 161.7445)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 117.8951 150.7733)" class="white__fill futura-light fs__6px">9.27</text>
							<g>
								<polygon class="st17" points="128.19,186.22 123.61,191.45 128.5,196.43"/>
								<polygon class="st18" points="128.25,186.22 128.56,196.43 133.14,191.2"/>
							</g>
						</g>
						<g id="C-62_2492_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 160.183 202.9126)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 158.3618 155.2194)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 165.9212 165.6192)" class="st15 futura-book fs__6px">22</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 173.4855 159.3669)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 155.2166 146.119)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2491_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 192.8601 200.8446)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 191.0379 153.15)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 198.5972 163.5499)" class="st15 futura-book fs__6px">23</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 206.1643 157.2993)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 187.8954 144.0506)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2490_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 225.822 197.8047)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 223.9985 150.1124)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 231.5578 160.5122)" class="st15 futura-book fs__6px">24</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 239.1252 154.2587)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 220.8553 141.012)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2489_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 259.5222 195.075)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 257.6999 147.3814)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 265.2592 157.7812)" class="st15 futura-book fs__6px">25</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 272.8261 151.5291)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 254.5564 138.2818)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2488_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 291.9012 192.1697)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 290.0786 144.4759)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 297.6379 154.8757)" class="st15 futura-book fs__6px">26</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 305.2016 148.6223)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 286.9345 135.3767)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2487_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 325.4644 189.9667)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 323.6419 142.2738)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 331.2013 152.6736)" class="st15 futura-book fs__6px">27</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 338.7657 146.4219)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 320.4971 133.1736)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2486_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 358.367 186.6193)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 356.5448 138.925)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 364.1041 149.3248)" class="st15 futura-book fs__6px">28</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 371.6704 143.0741)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 353.4004 129.8264)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2485_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 390.9977 184.3309)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 389.1758 136.6377)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 396.7351 147.0375)" class="st15 futura-book fs__6px">29</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 404.2975 140.7851)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 386.0291 127.5391)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2484_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 424.3501 180.9802)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 422.529 133.2877)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 430.0883 143.6875)" class="st15 futura-book fs__6px">30</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 437.6545 137.4348)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 419.3853 124.1883)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2483_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 456.7258 178.3157)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 454.9034 130.6213)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 462.4627 141.0211)" class="st15 futura-book fs__6px">31</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 470.0264 134.7693)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 451.7583 121.5211)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2482_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 490.5767 175.4871)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 488.7525 127.7935)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 496.3118 138.1933)" class="st15 futura-book fs__6px">32</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 503.8766 131.9403)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 485.6093 118.6943)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2481_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 525.62 172.7713)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 523.7984 125.0789)" class="white__fill futura-light fs__6px">138.78 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 531.3577 135.4787)" class="st15 futura-book fs__6px">33</text>
							<text transform="matrix(4.975699e-05 0.9951 -1 3.500035e-04 539.2816 129.1152)" class="white__fill futura-light fs__6px">16.06</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 523.1334 115.9787)" class="white__fill futura-light fs__6px">9.35</text>
							<g>
								<polygon class="st17" points="530.99,154.31 526.25,159.4 530.99,164.52"/>
								<polygon class="st18" points="531.05,154.31 531.05,164.52 535.78,159.43"/>
							</g>
						</g>
						<g id="C-62_2480_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 1124.0433 94.4639)" class="white__fill futura-light fs__6px">576.00m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 1132.447 104.1928)" class="st15 futura-book fs__6px">40</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 1155.1239 94.864)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 1099.0525 107.7857)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9929 -0.155 0.154 0.9881 1115.7595 48.0534)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 1134.8793 187.2724)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2479_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 1058.7313 103.0553)" class="white__fill futura-light fs__6px">576.00 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 1067.135 112.7842)" class="st15 futura-book fs__6px">39</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 1033.74 116.3776)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9929 -0.155 0.154 0.9881 1050.4501 56.6456)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 1069.569 195.8649)" class="white__fill futura-light fs__6px">16.001</text>
						</g>
						<g id="C-62_2478_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 993.8986 112.4175)" class="white__fill futura-light fs__6px">576.00 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 1002.3022 122.1463)" class="st15 futura-book fs__6px">38</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 968.907 125.7387)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9929 -0.155 0.154 0.9881 985.6162 66.0057)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 1004.736 205.2267)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2477_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 929.5033 120.9791)" class="white__fill futura-light fs__6px">576.00 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 937.907 130.708)" class="st15 futura-book fs__6px">37</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 904.5109 134.3021)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9929 -0.155 0.154 0.9881 921.2213 74.5677)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 940.3414 213.7892)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2476_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 862.0423 130.6644)" class="white__fill futura-light fs__6px">576.00 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 870.446 140.3932)" class="st15 futura-book fs__6px">36</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 837.0511 143.9865)" class="white__fill futura-light fs__6px">36.00</text>
							<text transform="matrix(0.9929 -0.155 0.154 0.9881 853.7574 84.2515)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 872.8796 223.4718)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2475_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 802.4527 140.4898)" class="white__fill futura-light fs__6px">508.71 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 810.8564 150.2186)" class="st15 futura-book fs__6px">35</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 779.102 153.2053)" class="white__fill futura-light fs__6px">36.72</text>
							<text transform="matrix(1.004 -0.0419 0.0414 0.9991 792.085 91.1498)" class="white__fill futura-light fs__6px">14.03</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 813.2902 233.2986)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2474_">
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 744.6299 146.6163)" class="white__fill futura-light fs__6px">519.48 m2</text>
							<text transform="matrix(0.1547 0.983 -0.9878 0.1556 753.0336 156.3452)" class="st15 futura-book fs__6px">34</text>
							<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 719.6376 159.9396)" class="white__fill futura-light fs__6px">37.49</text>
							<text transform="matrix(0.9993 -0.1059 0.1051 0.9945 736.0007 96.4695)" class="white__fill futura-light fs__6px">14.02</text>
							<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 755.4676 239.4243)" class="white__fill futura-light fs__6px">14.00</text>
						</g>
						<g id="C-62_2473_">
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 124.808 266.6995)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 132.3673 277.0993)" class="st15 futura-book fs__6px">107</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 114.8264 272.7502)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 139.9302 270.8475)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 121.8493 251.3425)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="129.79,253.8 125.2,259.03 130.1,264"/>
								<polygon class="st18" points="129.84,253.8 130.15,264 134.74,258.77"/>
							</g>
						</g>
						<g id="C-62_2472_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 397.4688 360.6057)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 395.6472 311.0275)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 403.2065 321.4273)" class="st15 futura-book fs__6px">106</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 410.7733 315.1764)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 392.4189 297.1648)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="402.8,339.66 398.22,344.89 403.11,349.86"/>
								<polygon class="st18" points="402.85,339.65 403.17,349.86 407.75,344.63"/>
							</g>
						</g>
						<g id="C-62_2471_">
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 389.9901 244.2342)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 397.5494 254.634)" class="st15 futura-book fs__6px">115</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 405.1133 248.3832)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 387.0308 228.8764)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="394.97,231.33 390.39,236.56 395.28,241.54"/>
								<polygon class="st18" points="395.02,231.33 395.34,241.54 399.92,236.31"/>
							</g>
						</g>
						<g id="C-62_2470_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 362.5973 363.6126)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 360.7751 314.0331)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 368.3344 324.4329)" class="st15 futura-book fs__6px">105</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 375.9002 318.1818)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 357.5471 300.1707)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="367.92,342.66 363.34,347.89 368.24,352.87"/>
								<polygon class="st18" points="367.98,342.66 368.29,352.86 372.88,347.63"/>
							</g>
						</g>
						<g id="C-62_2469_">
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 355.116 247.2399)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 362.6753 257.6397)" class="st15 futura-book fs__6px">114</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 370.242 251.3865)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 352.1589 231.8823)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2468_">
							<text transform="matrix(1.0031 -0.0598 0.0592 0.9982 329.6571 366.9525)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 327.8343 317.3728)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 335.3936 327.7726)" class="st15 futura-book fs__6px">104</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 342.9576 321.5207)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 324.6057 303.5097)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="334.98,346 330.4,351.23 335.3,356.21"/>
								<polygon class="st18" points="335.04,346 335.35,356.21 339.93,350.97"/>
							</g>
						</g>
						<g id="C-62_2467_">
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 322.1772 250.5795)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0716 0.9925 -0.9974 0.0721 329.7365 260.9794)" class="st15 futura-book fs__6px">113</text>
							<text transform="matrix(0.0739 0.9924 -0.9972 0.0746 337.2997 254.7293)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0004 -0.0947 0.094 0.9956 319.2197 235.2231)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2466_">
							<text transform="matrix(1.002 -0.0765 0.0758 0.9971 297.9374 368.7274)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 295.1946 319.4072)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 302.9239 329.678)" class="st15 futura-book fs__6px">103</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 310.4847 323.1511)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 292.0615 305.0898)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="302.87,347.72 298.38,353.03 303.35,357.92"/>
								<polygon class="st18" points="302.93,347.72 303.41,357.92 307.9,352.61"/>
							</g>
						</g>
						<g id="C-62_2465_">
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 288.4246 252.7156)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 296.1538 262.9864)" class="st15 futura-book fs__6px">112</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 303.7155 256.4592)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 285.5392 236.9004)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2464_">
							<text transform="matrix(1.002 -0.0765 0.0758 0.9971 265.1933 372.0073)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 262.4523 322.6884)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 270.1815 332.9591)" class="st15 futura-book fs__6px">102</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 277.7431 326.4323)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 259.3193 308.3717)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2463_">
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 255.6822 255.9967)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 263.4114 266.2675)" class="st15 futura-book fs__6px">111</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 270.9719 259.7407)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 252.7971 240.1823)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2462_">
							<text transform="matrix(1.002 -0.0765 0.0758 0.9971 233.268 374.8488)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 230.5256 325.5282)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 238.2548 335.799)" class="st15 futura-book fs__6px">101</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 245.8164 329.2723)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 227.3928 311.2128)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2461_">
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 223.7538 258.8386)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 231.483 269.1094)" class="st15 futura-book fs__6px">110</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 239.0453 262.5826)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 220.8686 243.0236)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2460_">
							<text transform="matrix(1.002 -0.0765 0.0758 0.9971 199.502 377.2332)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 196.7603 327.9121)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 204.4895 338.1829)" class="st15 futura-book fs__6px">100</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 212.0514 331.6548)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 193.6269 313.5947)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2459_">
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 189.9885 261.2226)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 197.7177 271.4934)" class="st15 futura-book fs__6px">109</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 205.2784 264.9652)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 187.1029 245.4075)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2458_">
							<text transform="matrix(1.002 -0.0765 0.0758 0.9971 166.5761 380.9815)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 163.832 331.6608)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 171.5612 341.9316)" class="st15 futura-book fs__6px">99</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 179.1232 335.4062)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 160.701 317.3451)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2457_">
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 157.0641 264.9709)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.0881 0.9912 -0.9961 0.0887 164.7933 275.2417)" class="st15 futura-book fs__6px">108</text>
							<text transform="matrix(0.0904 0.991 -0.9958 0.0912 172.3541 268.7163)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 154.177 249.1579)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2456_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1257 458.5907)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.067 451.8388)" class="st15 futura-book fs__6px">87</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5404 469.0427)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5401 443.863)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8303 460.1971)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="119.88,448.21 115.14,453.3 119.88,458.42"/>
								<polygon class="st18" points="119.94,448.21 119.94,458.42 124.68,453.33"/>
							</g>
						</g>
						<g id="C-62_2455_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.3607 592.6436)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1053 591.2607)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.0465 584.5089)" class="st15 futura-book fs__6px">89</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5211 601.7094)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6096 592.8652)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,580.88 222.11,585.97 226.85,591.09"/>
								<polygon class="st18" points="226.91,580.88 226.91,591.09 231.65,586"/>
							</g>
						</g>
						<g id="C-62_2454_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1244 591.2635)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.0656 584.5116)" class="st15 futura-book fs__6px">83</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5405 601.7109)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8303 592.8642)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2453_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.3615 559.2954)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1048 557.9128)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.046 551.1609)" class="st15 futura-book fs__6px">90</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5212 568.3617)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6087 559.5197)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,547.53 222.11,552.62 226.85,557.74"/>
								<polygon class="st18" points="226.91,547.53 226.91,557.74 231.65,552.65"/>
							</g>
						</g>
						<g id="C-62_2452_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1239 557.9156)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.0651 551.1637)" class="st15 futura-book fs__6px">84</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5406 568.3632)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8294 559.5226)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2451_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.3603 526.4355)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1045 525.0416)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.0458 518.2897)" class="st15 futura-book fs__6px">91</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5209 535.4984)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6089 526.6508)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,514.66 222.11,519.75 226.85,524.87"/>
								<polygon class="st18" points="226.91,514.66 226.91,524.87 231.65,519.79"/>
							</g>
						</g>
						<g id="C-62_2450_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1256 525.0443)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.0669 518.2924)" class="st15 futura-book fs__6px">85</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5403 535.4998)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8296 526.6498)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2449_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 242.36 493.0325)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 194.1062 491.6429)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 205.0474 484.891)" class="st15 futura-book fs__6px">92</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 199.5211 502.096)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 178.6088 493.2427)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="226.85,481.26 222.11,486.35 226.85,491.47"/>
								<polygon class="st18" points="226.91,481.26 226.91,491.47 231.65,486.38"/>
							</g>
						</g>
						<g id="C-62_2448_">
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 126.1253 491.6456)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 137.0665 484.8937)" class="st15 futura-book fs__6px">86</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 131.5405 502.0974)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 111.8295 493.2457)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2447_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 131.5298 868.9949)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 140.9356 911.9465)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 134.1837 901.0053)" class="st15 futura-book fs__6px">63</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 126.1549 901.9382)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 131.5975 926.8856)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="135.61,872.28 130.87,877.36 135.61,882.49"/>
								<polygon class="st18" points="135.67,872.28 135.67,882.49 140.41,877.4"/>
							</g>
						</g>
						<g id="C-62_2446_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 137.1295 804.3039)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 130.3776 793.3627)" class="st15 futura-book fs__6px">64</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 122.3455 797.3328)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 127.7956 822.2822)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="131.81,806.31 127.07,811.4 131.81,816.52"/>
								<polygon class="st18" points="131.87,806.31 131.87,816.52 136.61,811.44"/>
							</g>
						</g>
						<g id="C-62_2445_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 127.7267 692.2075)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 137.1302 737.5692)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 130.3783 726.6279)" class="st15 futura-book fs__6px">73</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 122.3464 727.5554)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 127.7954 754.6962)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="131.81,697.9 127.07,702.98 131.81,708.11"/>
								<polygon class="st18" points="131.87,697.9 131.87,708.11 136.61,703.02"/>
							</g>
						</g>
						<g id="C-62_2444_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 402.1664 804.3016)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 395.4145 793.3604)" class="st15 futura-book fs__6px">72</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 387.3731 797.3322)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 412.67 797.334)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 392.8311 822.2821)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="396.84,806.31 392.1,811.4 396.84,816.52"/>
								<polygon class="st18" points="396.9,806.31 396.9,816.52 401.64,811.44"/>
							</g>
						</g>
						<g id="C-62_2443_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 392.7605 692.2071)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 402.167 737.5668)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 395.4151 726.6255)" class="st15 futura-book fs__6px">81</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 387.3701 727.5548)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 412.6669 727.5566)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 392.8308 754.696)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="396.84,697.9 392.1,702.98 396.84,708.11"/>
								<polygon class="st18" points="396.9,697.9 396.9,708.11 401.64,703.02"/>
							</g>
						</g>
						<g id="C-62_2442_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 402.8823 582.2389)" class="white__fill futura-light fs__6px">8.54</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 412.2826 624.5502)" class="white__fill futura-light fs__6px">149.45 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 405.5307 613.6089)" class="st15 futura-book fs__6px">97</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 397.4935 617.5922)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 422.7865 617.5901)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 402.9499 644.7289)" class="white__fill futura-light fs__6px">8.54</text>
							<g>
								<polygon class="st17" points="406.96,629.04 402.22,634.13 406.96,639.25"/>
								<polygon class="st18" points="407.02,629.04 407.02,639.25 411.76,634.17"/>
							</g>
						</g>
						<g id="C-62_2441_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 365.8987 582.24)" class="white__fill futura-light fs__6px">8.54</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 375.3019 624.548)" class="white__fill futura-light fs__6px">149.45 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 368.55 613.6067)" class="st15 futura-book fs__6px">96</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 360.513 617.5904)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 365.967 644.7297)" class="white__fill futura-light fs__6px">8.54</text>
							<g>
								<polygon class="st17" points="369.98,629.04 365.24,634.13 369.98,639.25"/>
								<polygon class="st18" points="370.04,629.04 370.04,639.25 374.78,634.17"/>
							</g>
						</g>
						<g id="C-62_2440_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 330.9937 582.2394)" class="white__fill futura-light fs__6px">8.54</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 340.3954 624.549)" class="white__fill futura-light fs__6px">149.45 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 333.6436 613.6077)" class="st15 futura-book fs__6px">95</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 325.6067 617.5906)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 331.0607 644.7286)" class="white__fill futura-light fs__6px">8.54</text>
							<g>
								<polygon class="st17" points="335.07,629.04 330.34,634.13 335.07,639.25"/>
								<polygon class="st18" points="335.13,629.04 335.13,639.25 339.87,634.17"/>
							</g>
						</g>
						<g id="C-62_2439_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 295.1743 582.2398)" class="white__fill futura-light fs__6px">8.54</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 304.5788 624.5508)" class="white__fill futura-light fs__6px">149.45 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 297.8269 613.6095)" class="st15 futura-book fs__6px">94</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 289.7863 617.59)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 295.2421 644.7291)" class="white__fill futura-light fs__6px">8.54</text>
							<g>
								<polygon class="st17" points="299.26,629.04 294.52,634.13 299.26,639.25"/>
								<polygon class="st18" points="299.31,629.04 299.31,639.25 304.05,634.17"/>
							</g>
						</g>
						<g id="C-62_2438_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 369.467 804.3024)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 362.7151 793.3611)" class="st15 futura-book fs__6px">71</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 354.6777 797.3347)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 360.1302 822.2827)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2437_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 360.0627 692.207)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 369.4676 737.5676)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 362.7157 726.6263)" class="st15 futura-book fs__6px">80</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 354.6747 727.5573)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 360.1319 754.6965)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2436_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 335.0488 804.3011)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 328.2969 793.3599)" class="st15 futura-book fs__6px">70</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 320.2558 797.3354)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 325.7122 822.2822)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2435_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 325.644 692.2065)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 335.0494 737.5703)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 328.2975 726.629)" class="st15 futura-book fs__6px">79</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 320.2567 727.558)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 325.7139 754.696)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2434_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 302.2907 804.3018)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 295.5389 793.3605)" class="st15 futura-book fs__6px">69</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 287.5019 797.3339)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 292.9586 822.2817)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2433_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 292.8896 692.2075)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 302.2914 737.567)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 295.5395 726.6257)" class="st15 futura-book fs__6px">78</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 287.5028 727.5565)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 292.9583 754.6956)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2432_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 270.3765 804.3013)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 263.6246 793.3601)" class="st15 futura-book fs__6px">68</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 255.5878 797.3332)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 261.0449 822.2812)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2431_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 260.9771 692.2064)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 270.3771 737.5666)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 263.6252 726.6253)" class="st15 futura-book fs__6px">77</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 255.5887 727.5558)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 261.0446 754.6951)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2430_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 236.7903 804.303)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 230.0384 793.3618)" class="st15 futura-book fs__6px">67</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 222.0018 797.3348)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 227.463 822.2826)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2429_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 227.3945 692.2057)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 236.791 737.5682)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 230.0391 726.627)" class="st15 futura-book fs__6px">76</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 222.0027 727.5574)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 227.4628 754.6965)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2428_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 203.8292 804.3029)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 197.0773 793.3616)" class="st15 futura-book fs__6px">66</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 189.0409 797.3331)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 194.5004 822.2822)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2427_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 194.433 692.2073)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 203.8298 737.5681)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 197.0779 726.6269)" class="st15 futura-book fs__6px">75</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 189.0418 727.5557)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 194.5001 754.696)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2426_">
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 170.7665 804.3024)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 164.0146 793.3612)" class="st15 futura-book fs__6px">65</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 155.9784 797.3351)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 161.4381 822.2816)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2425_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 161.3699 692.2072)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 170.7671 737.5677)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 164.0152 726.6264)" class="st15 futura-book fs__6px">74</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 155.9792 727.5578)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 161.4378 754.6956)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2424_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 163.9287 868.9961)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 173.3342 911.9486)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 166.5824 901.0074)" class="st15 futura-book fs__6px">62</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 160.6197 901.9375)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 163.9955 926.8849)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2423_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 197.1089 868.9961)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 206.5142 911.9456)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 199.7623 901.0043)" class="st15 futura-book fs__6px">61</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 192.6862 901.9383)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 197.1789 926.8851)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2422_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 230.6174 868.9956)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 240.03 911.9476)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 233.2781 901.0063)" class="st15 futura-book fs__6px">60</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 227.2995 901.9378)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 230.6866 926.885)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2421_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 263.5515 868.9955)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 272.9638 911.9476)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 266.2119 901.0063)" class="st15 futura-book fs__6px">59</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 260.0495 901.9393)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 263.6219 926.886)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2420_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 297.1987 868.9953)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 306.6086 911.9462)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 299.8567 901.0049)" class="st15 futura-book fs__6px">58</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 292.9245 901.937)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 297.2683 926.8853)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2419_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 330.8106 868.9965)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 340.222 911.9485)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 333.4702 901.0073)" class="st15 futura-book fs__6px">57</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 325.7214 901.9385)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 330.8795 926.8853)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2418_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 364.1237 868.9948)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 373.5348 911.9459)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 366.7829 901.0046)" class="st15 futura-book fs__6px">56</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 359.5965 901.9373)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 364.1938 926.8849)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2417_">
							<text transform="matrix(1.0048 0.0162 -0.0164 0.9999 400.1442 868.9957)" class="white__fill futura-light fs__6px">9.38</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 409.5545 911.9487)" class="white__fill futura-light fs__6px">150.08 m2</text>
							<text transform="matrix(3.562509e-03 -0.9951 1 3.440014e-03 402.8026 901.0074)" class="st15 futura-book fs__6px">55</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 421.9598 901.9371)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.293681e-03 -0.9951 1 1.000009e-03 392.4402 901.9388)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(1.0047 -0.0189 0.0185 0.9998 400.2136 926.8846)" class="white__fill futura-light fs__6px">9.38</text>
							<g>
								<polygon class="st17" points="405.11,871.23 400.37,876.32 405.11,881.44"/>
								<polygon class="st18" points="405.17,871.23 405.17,881.44 409.91,876.35"/>
							</g>
						</g>
						<g id="C-62_2416_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2267 284.4349)" class="white__fill futura-light fs__6px">9.89</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5579 283.0466)" class="white__fill futura-light fs__6px">197.80 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4991 276.2947)" class="st15 futura-book fs__6px">35</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9747 296.9108)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7057 284.6577)" class="white__fill futura-light fs__6px">9.89</text>
						</g>
						<g id="C-62_2415_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2249 320.7523)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.558 319.3633)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4992 312.6114)" class="st15 futura-book fs__6px">36</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9742 330.6218)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7058 320.9803)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2414_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2259 354.2334)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.558 352.8478)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4993 346.0959)" class="st15 futura-book fs__6px">37</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9739 364.1023)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7055 354.4704)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2413_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.225 387.4684)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5589 386.0824)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5002 379.3305)" class="st15 futura-book fs__6px">38</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9739 397.3367)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7043 387.7026)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2412_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2264 420.5549)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5584 419.1725)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4996 412.4206)" class="st15 futura-book fs__6px">39</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.974 430.4227)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7043 420.7903)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,409.78 473.56,414.87 478.3,419.99"/>
								<polygon class="st18" points="478.36,409.78 478.36,419.99 483.1,414.9"/>
							</g>
						</g>
						<g id="C-62_2411_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2255 454.7587)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5579 453.3719)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4992 446.62)" class="st15 futura-book fs__6px">40</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9749 464.6259)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7057 454.9953)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,442.63 473.56,447.72 478.3,452.84"/>
								<polygon class="st18" points="478.36,442.63 478.36,452.84 483.1,447.76"/>
							</g>
						</g>
						<g id="C-62_2410_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2263 487.2787)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5593 485.8995)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5005 479.1476)" class="st15 futura-book fs__6px">41</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9737 497.1493)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7048 487.5165)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,476.95 473.56,482.04 478.3,487.16"/>
								<polygon class="st18" points="478.36,476.95 478.36,487.16 483.1,482.07"/>
							</g>
						</g>
						<g id="C-62_2409_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2253 519.6698)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5592 518.2903)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5005 511.5384)" class="st15 futura-book fs__6px">42</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9745 529.54)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7054 519.9088)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,508.53 473.56,513.62 478.3,518.74"/>
								<polygon class="st18" points="478.36,508.53 478.36,518.74 483.1,513.65"/>
							</g>
						</g>
						<g id="C-62_2408_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2259 551.7249)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5583 550.3413)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4996 543.5894)" class="st15 futura-book fs__6px">43</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9737 561.5947)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7054 551.9611)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,542.44 473.56,547.53 478.3,552.65"/>
								<polygon class="st18" points="478.36,542.44 478.36,552.65 483.1,547.56"/>
							</g>
						</g>
						<g id="C-62_2407_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2255 585.8936)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.558 584.5134)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4992 577.7615)" class="st15 futura-book fs__6px">44</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9747 595.7628)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7062 586.131)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2406_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2254 618.8356)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5579 617.455)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4992 610.7031)" class="st15 futura-book fs__6px">45</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9749 628.7003)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7053 619.0702)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2405_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2252 652.0236)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.559 650.6349)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5003 643.883)" class="st15 futura-book fs__6px">46</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9749 661.8878)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7051 652.2516)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2404_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2259 684.9187)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5591 683.5336)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5004 676.7817)" class="st15 futura-book fs__6px">47</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9753 694.7824)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7054 685.1478)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2403_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2263 718.6811)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5582 717.2955)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4995 710.5436)" class="st15 futura-book fs__6px">48</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9747 728.5481)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7043 718.9114)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2402_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2259 751.8809)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5592 750.4988)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5005 743.7469)" class="st15 futura-book fs__6px">49</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9747 761.7473)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7045 752.1124)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2401_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2259 785.4205)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5591 784.0303)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.5004 777.2784)" class="st15 futura-book fs__6px">50</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9744 795.2825)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7049 785.6415)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2400_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2263 817.6085)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5578 816.218)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.499 809.4661)" class="st15 futura-book fs__6px">51</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9754 827.4662)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7056 817.8306)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2399_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2249 851.4724)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5584 850.0815)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4997 843.3296)" class="st15 futura-book fs__6px">52</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9747 861.3295)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7044 851.6919)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2398_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2257 884.4808)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5582 883.0895)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4995 876.3376)" class="st15 futura-book fs__6px">53</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9749 894.3373)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7049 884.7014)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2397_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2253 918.6495)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5578 917.2577)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.4991 910.5058)" class="st15 futura-book fs__6px">54</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9739 928.5093)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7056 918.8674)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="478.3,907.68 473.56,912.77 478.3,917.89"/>
								<polygon class="st18" points="478.36,907.68 478.36,917.89 483.1,912.8"/>
							</g>
						</g>
						<g id="C-62_2396_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 543.2261 242.4566)" class="white__fill futura-light fs__6px">11.57</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 490.5577 241.0737)" class="white__fill futura-light fs__6px">214.64 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 501.499 234.3218)" class="st15 futura-book fs__6px">34</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 495.9737 254.9342)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(0.9934 -0.058 0.0586 0.9983 496.1071 220.7418)" class="white__fill futura-light fs__6px">20.07</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 468.7049 242.6818)" class="white__fill futura-light fs__6px">9.89</text>
							<g>
								<polygon class="st17" points="478.3,230.69 473.56,235.78 478.3,240.9"/>
								<polygon class="st18" points="478.36,230.69 478.36,240.9 483.1,235.81"/>
							</g>
						</g>
						<g id="C-62_2395_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2845 769.9315)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1487 768.5457)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0899 761.7938)" class="st15 futura-book fs__6px">02</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5643 778.9978)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5458 770.1526)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2394_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2839 736.3097)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1491 734.9205)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0904 728.1686)" class="st15 futura-book fs__6px">03</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5647 745.3727)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5456 736.5297)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2393_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.285 704.3953)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1476 703.0023)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0888 696.2504)" class="st15 futura-book fs__6px">04</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5634 713.4587)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5442 704.6141)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2392_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.284 670.9141)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1475 669.5333)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0887 662.7814)" class="st15 futura-book fs__6px">05</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5637 679.9781)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5448 671.1396)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2391_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2838 637.8745)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1479 636.4824)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0891 629.7305)" class="st15 futura-book fs__6px">06</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5635 646.9351)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5456 638.095)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2390_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2846 604.5262)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1474 603.1384)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0886 596.3865)" class="st15 futura-book fs__6px">07</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5636 613.5913)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5447 604.7495)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2389_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2846 571.5883)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1474 570.2007)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0886 563.4488)" class="st15 futura-book fs__6px">08</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5634 580.6538)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5455 571.8063)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2388_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2848 538.6424)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1474 537.2551)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0887 530.5032)" class="st15 futura-book fs__6px">09</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5631 547.7084)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5442 538.8554)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2387_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2837 506.2591)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1475 504.876)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0888 498.1241)" class="st15 futura-book fs__6px">10</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5643 515.3217)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5459 506.4788)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2386_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.285 472.7585)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1475 471.3758)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0888 464.6239)" class="st15 futura-book fs__6px">11</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5646 481.8216)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5441 472.9809)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2385_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2853 438.8359)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.149 437.4537)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0902 430.7018)" class="st15 futura-book fs__6px">12</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5633 447.8997)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.546 439.0571)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2384_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2839 405.9877)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1487 404.5981)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.09 397.8462)" class="st15 futura-book fs__6px">13</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5649 415.052)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5445 406.2)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2383_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2852 372.3621)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1491 370.9767)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0904 364.2249)" class="st15 futura-book fs__6px">14</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5634 381.427)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5443 372.577)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2382_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2849 339.5647)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1487 338.1836)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0899 331.4317)" class="st15 futura-book fs__6px">15</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5649 348.6301)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5459 339.7823)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2381_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2836 305.8648)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1474 304.4841)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0886 297.7322)" class="st15 futura-book fs__6px">16</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5635 314.9308)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5443 306.0852)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2380_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2847 273.4659)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1475 272.0777)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0888 265.3258)" class="st15 futura-book fs__6px">17</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5646 282.5284)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5453 273.6773)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2379_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2837 239.3832)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1476 237.9954)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0889 231.2435)" class="st15 futura-book fs__6px">18</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5636 248.4463)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5443 239.5973)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2378_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2844 206.285)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.1482 204.8936)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0894 198.1417)" class="st15 futura-book fs__6px">19</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5635 215.3486)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5442 206.5018)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2377_">
							<text transform="matrix(0.0162 -1.0048 0.9999 0.0164 64.2836 173.3977)" class="white__fill futura-light fs__6px">9.35</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 19.148 172.0067)" class="white__fill futura-light fs__6px">138.78 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 30.0893 165.2548)" class="st15 futura-book fs__6px">20</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 24.5631 182.4619)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9919 -0.0796 0.0803 0.9968 24.8783 155.8757)" class="white__fill futura-light fs__6px">16.06</text>
							<text transform="matrix(-0.0189 -1.0047 0.9998 -0.0185 7.5441 173.6134)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="51.89,160.51 47.15,165.6 51.89,170.72"/>
								<polygon class="st18" points="51.95,160.51 51.95,170.72 56.69,165.63"/>
							</g>
						</g>
						<g id="C-62_2376_">
							<text transform="matrix(0.2936 0.9611 -0.9565 0.2919 152.638 1522.9429)" class="white__fill futura-light fs__6px">8.94</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 113.7358 1538.9482)" class="white__fill futura-light fs__6px">141.93 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 123.7194 1530.8472)" class="st15 futura-book fs__6px">54</text>
							<text transform="matrix(0.9901 -0.0997 0.1005 0.9949 116.507 1520.715)" class="white__fill futura-light fs__6px">15.69</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 119.9578 1548.2874)" class="white__fill futura-light fs__6px">16.14</text>
							<text transform="matrix(0.2907 0.9619 -0.9573 0.289 97.5259 1538.3473)" class="white__fill futura-light fs__6px">2.40</text>
							<text transform="matrix(0.1475 0.994 -0.9892 0.1465 93.5391 1520.2104)" class="white__fill futura-light fs__6px">6.49</text>
							<g>
								<polygon class="st17" points="144.67,1524.75 140.62,1530.4 145.98,1534.87"/>
								<polygon class="st18" points="144.73,1524.74 146.04,1534.87 150.08,1529.21"/>
							</g>
						</g>
						<g id="C-62_2375_">
							<text transform="matrix(0.2936 0.9611 -0.9565 0.2919 161.1768 1556.4159)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 104.0791 1564.8618)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 124.8639 1571.6466)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 134.8475 1563.5455)" class="st15 futura-book fs__6px">53</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 131.0875 1581.2058)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2374_">
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 169.0065 1587.6039)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 111.8532 1596.3882)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 130.9959 1603.1746)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 140.9795 1595.0735)" class="st15 futura-book fs__6px">52</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 137.2217 1612.7325)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2373_">
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 175.4062 1621.0002)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 118.2522 1629.7844)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 137.3967 1636.5702)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 147.3803 1628.4692)" class="st15 futura-book fs__6px">51</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 143.6196 1646.1277)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2372_">
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 181.7407 1653.5065)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.1685 0.9907 -0.9859 0.1673 124.8764 1662.4027)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 143.7303 1669.0729)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 153.7139 1660.9718)" class="st15 futura-book fs__6px">50</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 149.9524 1678.6332)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2371_">
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 185.1143 1686.3538)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.1685 0.9907 -0.9859 0.1673 128.251 1695.2484)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 147.1072 1701.9199)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 157.0907 1693.819)" class="st15 futura-book fs__6px">49</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 153.3298 1711.4781)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2370_">
							<text transform="matrix(0.0758 1.002 -0.9972 0.0751 190.893 1718.3571)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0979 1.0001 -0.9953 0.0971 133.6649 1727.4287)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 152.2617 1734.2206)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 162.2453 1726.1195)" class="st15 futura-book fs__6px">48</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 158.4846 1743.7802)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2369_">
							<text transform="matrix(0.0758 1.002 -0.9972 0.0751 193.3952 1751.6382)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0979 1.0001 -0.9953 0.0971 136.1603 1760.7108)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 154.7552 1767.5095)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 164.7388 1759.4086)" class="st15 futura-book fs__6px">47</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 160.9792 1777.0652)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2368_">
							<text transform="matrix(0.0145 1.0048 -0.9999 0.0141 195.1765 1784.9977)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0405 1.0041 -0.9992 0.04 138.2436 1793.7551)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 156.2007 1800.714)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 166.1842 1792.6129)" class="st15 futura-book fs__6px">46</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 162.424 1810.2721)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2367_">
							<text transform="matrix(0.0145 1.0048 -0.9999 0.0141 196.0746 1818.4629)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.0405 1.0041 -0.9992 0.04 139.1439 1827.2167)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 157.0945 1834.1807)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 167.0781 1826.0796)" class="st15 futura-book fs__6px">45</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 163.3213 1843.7382)" class="white__fill futura-light fs__6px">16.00</text>
						</g>
						<g id="C-62_2366_">
							<text transform="matrix(0.0145 1.0048 -0.9999 0.0141 196.3893 1851.8368)" class="white__fill futura-light fs__6px">7.07</text>
							<text transform="matrix(2.964474e-03 1.0049 -1 2.640018e-03 139.2461 1863.9497)" class="white__fill futura-light fs__6px">10.25</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 154.7037 1868.545)" class="white__fill futura-light fs__6px">139.07 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 164.6873 1860.444)" class="st15 futura-book fs__6px">44</text>
							<text transform="matrix(0.9527 -0.2876 0.2893 0.9572 164.2547 1880.1199)" class="white__fill futura-light fs__6px">17.03</text>
							<g>
								<polygon class="st17" points="188.48,1853.64 183.85,1858.83 188.7,1863.85"/>
								<polygon class="st18" points="188.54,1853.64 188.75,1863.85 193.38,1858.66"/>
							</g>
						</g>
						<g id="C-62_2365_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9023 1106.5168)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4867 1103.0757)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4279 1096.3237)" class="st15 futura-book fs__6px">63</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9014 1113.8488)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4234 1105.6121)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2364_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9025 1138.3574)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4865 1134.9236)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4277 1128.1716)" class="st15 futura-book fs__6px">62</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9027 1145.6886)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4219 1137.452)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2363_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9022 1171.4325)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.486 1167.9979)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4273 1161.2461)" class="st15 futura-book fs__6px">61</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9029 1178.7629)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4236 1170.5264)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2362_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9025 1205.1287)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4853 1201.6935)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4266 1194.9417)" class="st15 futura-book fs__6px">60</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9024 1212.4622)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4229 1204.2256)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2361_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9024 1238.7545)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4868 1235.3148)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4281 1228.5629)" class="st15 futura-book fs__6px">59</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.902 1246.0872)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.422 1237.8507)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2360_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9023 1272.1226)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4853 1268.6823)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4266 1261.9303)" class="st15 futura-book fs__6px">58</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9018 1279.4545)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4225 1271.2141)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2359_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9028 1305.3187)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4864 1301.8816)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4276 1295.1298)" class="st15 futura-book fs__6px">57</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9018 1312.6537)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4225 1304.4133)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2358_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.903 1338.7219)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4867 1335.2842)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.428 1328.5323)" class="st15 futura-book fs__6px">56</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9016 1346.0521)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.423 1337.8119)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2357_">
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.119962e-03 150.9029 1372.6251)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 105.4853 1369.1868)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562509e-03 -3.440014e-03 1 116.4266 1362.4348)" class="st15 futura-book fs__6px">55</text>
							<text transform="matrix(0.9951 1.293681e-03 -1.000009e-03 1 110.9029 1379.9546)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 93.4228 1371.7144)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="138.23,1362.02 133.49,1367.11 138.23,1372.23"/>
								<polygon class="st18" points="138.29,1362.02 138.29,1372.23 143.03,1367.14"/>
							</g>
						</g>
						<g id="C-62_2356_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7859 1056.1005)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7814 1049.4424)" class="st15 futura-book fs__6px">11</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2676 1040.2604)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.266 1065.4407)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7463 1055.9352)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2164 1055.936)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="481.68,1045.86 476.95,1050.94 481.68,1056.07"/>
								<polygon class="st18" points="481.74,1045.86 481.74,1056.07 486.48,1050.98"/>
							</g>
						</g>
						<g id="C-62_2355_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7862 1088.2941)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7817 1081.6361)" class="st15 futura-book fs__6px">12</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2661 1099.4417)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7473 1089.9397)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2174 1089.9365)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2354_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7873 1121.0895)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7827 1114.4314)" class="st15 futura-book fs__6px">13</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2667 1132.2433)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7469 1122.7411)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.217 1122.7418)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2353_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7876 1153.6113)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7831 1146.9532)" class="st15 futura-book fs__6px">14</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2672 1164.7676)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7467 1155.265)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2168 1155.2657)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2352_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.786 1186.9613)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7815 1180.3033)" class="st15 futura-book fs__6px">15</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2659 1198.1161)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7476 1188.6093)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2177 1188.61)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2351_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7863 1219.9794)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7818 1213.3213)" class="st15 futura-book fs__6px">16</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2669 1231.1365)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7465 1221.6333)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2167 1221.634)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2350_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7877 1252.5793)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7832 1245.9213)" class="st15 futura-book fs__6px">17</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2669 1263.7427)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7469 1254.2393)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.217 1254.24)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2349_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.787 1285.859)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7824 1279.201)" class="st15 futura-book fs__6px">18</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2661 1297.017)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7473 1287.5172)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2175 1287.5179)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2348_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7866 1318.9357)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7821 1312.2776)" class="st15 futura-book fs__6px">19</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2668 1330.092)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7466 1320.5919)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2167 1320.5887)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2347_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7859 1351.7075)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7814 1345.0494)" class="st15 futura-book fs__6px">20</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2675 1362.8624)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7459 1353.3582)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.218 1353.3589)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2346_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7862 1385.3936)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7817 1378.7355)" class="st15 futura-book fs__6px">21</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2659 1396.5508)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7469 1387.0422)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2171 1387.043)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="481.68,1378.45 476.95,1383.54 481.68,1388.66"/>
								<polygon class="st18" points="481.74,1378.45 481.74,1388.66 486.48,1383.57"/>
							</g>
						</g>
						<g id="C-62_2345_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7866 1418.0795)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7821 1411.4214)" class="st15 futura-book fs__6px">22</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2673 1429.2352)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7458 1419.7264)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2179 1419.7272)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="481.68,1411.51 476.95,1416.6 481.68,1421.72"/>
								<polygon class="st18" points="481.74,1411.51 481.74,1421.72 486.48,1416.63"/>
							</g>
						</g>
						<g id="C-62_2344_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7874 1451.5544)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7829 1444.8965)" class="st15 futura-book fs__6px">23</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2671 1462.7089)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7475 1453.2074)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2177 1453.2081)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2343_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7874 1483.6154)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7828 1476.9574)" class="st15 futura-book fs__6px">24</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2669 1494.7721)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7465 1485.2666)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2166 1485.2673)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2342_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7869 1517.1998)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7823 1510.5417)" class="st15 futura-book fs__6px">25</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.266 1528.355)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7469 1518.853)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.217 1518.8538)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2341_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7876 1550.5146)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7831 1543.8567)" class="st15 futura-book fs__6px">26</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2669 1561.6683)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7476 1552.1661)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2177 1552.163)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2340_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7859 1582.3842)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7814 1575.7261)" class="st15 futura-book fs__6px">27</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2661 1593.5364)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7473 1584.0299)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2175 1584.0306)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2339_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7868 1615.8553)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7823 1609.1973)" class="st15 futura-book fs__6px">28</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2659 1627.0099)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7471 1617.5032)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2172 1617.5039)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2338_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7873 1649.6819)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7828 1643.0239)" class="st15 futura-book fs__6px">29</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2672 1660.8389)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.747 1651.3357)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2171 1651.3364)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2337_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7862 1682.6648)" class="white__fill futura-light fs__6px">160.00 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7816 1676.0067)" class="st15 futura-book fs__6px">30</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2665 1693.8202)" class="white__fill futura-light fs__6px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7457 1684.3168)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2178 1684.3175)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2336_">
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 492.7866 1717.6555)" class="white__fill futura-light fs__6px">159.91 m2</text>
							<text transform="matrix(0.995 0.0119 -0.0118 0.9999 503.7821 1710.9976)" class="st15 futura-book fs__6px">31</text>
							<text transform="matrix(0.9951 7.155030e-03 -6.890044e-03 1 498.2676 1728.8134)" class="white__fill futura-light fs__6px">19.38</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 468.7468 1719.3094)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.759961e-03 543.2169 1719.3102)" class="white__fill futura-light fs__6px">7.70</text>
							<g>
								<polygon class="st17" points="481.68,1710.42 476.95,1715.51 481.68,1720.63"/>
								<polygon class="st18" points="481.74,1710.42 481.74,1720.63 486.48,1715.54"/>
							</g>
						</g>
						<g id="C-62_2335_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 360.7291 1492.9945)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 371.2132 1500.4347)" class="st15 futura-book fs__6px">97</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 375.6955 1492.6603)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 352.9262 1477.9402)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 378.1682 1536.8921)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="361.26,1478.02 356.63,1483.21 361.48,1488.23"/>
								<polygon class="st18" points="361.32,1478.02 361.54,1488.23 366.17,1483.04"/>
							</g>
						</g>
						<g id="C-62_2334_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 392.2139 1479.3027)" class="white__fill futura-light fs__6px">138.74 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 402.6979 1486.743)" class="st15 futura-book fs__6px">98</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 406.6905 1479.2587)" class="white__fill futura-light fs__6px">15.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 383.8694 1464.5369)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 405.056 1525.2417)" class="white__fill futura-light fs__6px">6.92</text>
							<text transform="matrix(6.431345e-03 -1.0049 1 6.699983e-03 422.4243 1517.766)" class="white__fill futura-light fs__6px">2.78</text>
							<g>
								<polygon class="st17" points="392.2,1464.62 387.57,1469.81 392.42,1474.82"/>
								<polygon class="st18" points="392.26,1464.62 392.48,1474.82 397.11,1469.64"/>
							</g>
						</g>
						<g id="C-62_2333_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 235.0466 1620.8456)" class="white__fill futura-light fs__6px">127.22 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 245.5306 1628.2858)" class="st15 futura-book fs__6px">99</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 226.9615 1630.3374)" class="white__fill futura-light fs__6px">13.17</text>
							<text transform="matrix(0.1392 0.9854 -0.9901 0.1402 220.3425 1609.2054)" class="white__fill futura-light fs__6px">2.88</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 249.5228 1620.8005)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 227.0691 1609.2716)" class="white__fill futura-light fs__6px">7.65</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 250.223 1662.9183)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="251.42,1645.65 246.79,1650.84 251.63,1655.86"/>
								<polygon class="st18" points="251.47,1645.65 251.69,1655.86 256.32,1650.67"/>
							</g>
						</g>
						<g id="C-62_2332_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 260.3492 1801.4537)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 270.8333 1808.8939)" class="st15 futura-book fs__6px">110</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 252.2647 1810.946)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 274.8261 1801.4093)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 252.3697 1789.8801)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 275.5283 1843.5262)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="275.39,1827.09 270.76,1832.28 275.61,1837.3"/>
								<polygon class="st18" points="275.45,1827.09 275.67,1837.3 280.3,1832.11"/>
							</g>
						</g>
						<g id="C-62_2331_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 290.651 1788.7288)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 301.1351 1796.1691)" class="st15 futura-book fs__6px">111</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 305.1262 1788.6844)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 282.6736 1777.1556)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 305.8304 1830.8019)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2330_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 321.7224 1777.53)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 332.2064 1784.9703)" class="st15 futura-book fs__6px">112</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 336.2003 1777.4855)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 313.7451 1765.9562)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 336.9024 1819.6017)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2329_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 352.6581 1765.2761)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 363.1422 1772.7164)" class="st15 futura-book fs__6px">113</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 367.1337 1765.2319)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 367.8372 1807.3484)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2328_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 384.6524 1751.9255)" class="white__fill futura-light fs__6px">148.96 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 395.1365 1759.3658)" class="st15 futura-book fs__6px">114</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 401.3418 1751.4459)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 378.8886 1739.9169)" class="white__fill futura-light fs__6px">9.31</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 402.0439 1793.5635)" class="white__fill futura-light fs__6px">9.31</text>
							<g>
								<polygon class="st17" points="401.91,1777.13 397.28,1782.32 402.12,1787.34"/>
								<polygon class="st18" points="401.96,1777.13 402.18,1787.34 406.81,1782.15"/>
							</g>
						</g>
						<g id="C-62_2327_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 257.2378 1727.4409)" class="white__fill futura-light fs__6px">159.07 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 267.7219 1734.8811)" class="st15 futura-book fs__6px">105</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 247.6104 1737.1349)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 273.6842 1726.7794)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 248.7648 1714.1409)" class="white__fill futura-light fs__6px">9.09</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 273.3185 1771.4026)" class="white__fill futura-light fs__6px">9.09</text>
							<g>
								<polygon class="st17" points="257.1,1714.14 252.47,1719.33 257.32,1724.35"/>
								<polygon class="st18" points="257.16,1714.14 257.37,1724.35 262,1719.16"/>
							</g>
						</g>
						<g id="C-62_2326_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 386.2308 1674.6777)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 396.7148 1682.1179)" class="st15 futura-book fs__6px">109</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 400.7086 1674.6331)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 377.4327 1661.4385)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 402.686 1719.4094)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="386.09,1661.44 381.46,1666.63 386.31,1671.65"/>
								<polygon class="st18" points="386.15,1661.44 386.37,1671.65 391,1666.46"/>
							</g>
						</g>
						<g id="C-62_2325_">
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 508.8787 1811.3545)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 519.6299 1818.405)" class="st15 futura-book fs__6px">32</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 524.5073 1810.9532)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 501.4844 1798.3751)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 526.6655 1852.7061)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="509.43,1797.09 504.99,1802.45 510.02,1807.29"/>
								<polygon class="st18" points="509.49,1797.09 510.08,1807.28 514.52,1801.93"/>
							</g>
						</g>
						<g id="C-62_2324_">
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 478.1606 1825.3973)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 488.9117 1832.448)" class="st15 futura-book fs__6px">33</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 493.7895 1824.9951)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 470.7653 1812.418)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 495.9457 1866.7496)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2323_">
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 447.9344 1838.3231)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 458.6856 1845.3738)" class="st15 futura-book fs__6px">34</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 463.5626 1837.9219)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 440.5384 1825.3448)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 465.7194 1879.6759)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2322_">
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 417.2409 1851.5688)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 427.9921 1858.6195)" class="st15 futura-book fs__6px">35</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 432.8703 1851.1675)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 409.8469 1838.5905)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 435.0291 1892.9207)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2321_">
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 386.8906 1863.6847)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 397.424 1871.0566)" class="st15 futura-book fs__6px">36</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 402.1267 1863.7417)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 379.6413 1850.5574)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 403.1411 1905.4875)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2320_">
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 357.2719 1876.0862)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 367.8053 1883.4581)" class="st15 futura-book fs__6px">37</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 372.508 1876.142)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 350.0219 1862.9587)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 373.5185 1917.889)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2319_">
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 326.1676 1887.9882)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 336.7011 1895.3601)" class="st15 futura-book fs__6px">38</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 341.4058 1888.0452)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 318.9171 1874.8615)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 342.4164 1929.7909)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2318_">
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 294.482 1899.7373)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 305.0154 1907.1091)" class="st15 futura-book fs__6px">39</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 309.7183 1899.791)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 287.2322 1886.6075)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 310.7324 1941.5371)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2317_">
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 263.0435 1911.0706)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 273.577 1918.4425)" class="st15 futura-book fs__6px">40</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 278.2809 1911.1263)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 255.7946 1897.9424)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 279.292 1952.873)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2316_">
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 232.1558 1921.8683)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 242.2477 1929.8296)" class="st15 futura-book fs__6px">41</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 247.5784 1922.545)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 225.8259 1908.3507)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 246.0161 1964.1741)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2315_">
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 199.9956 1932.235)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 210.0875 1940.1964)" class="st15 futura-book fs__6px">42</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 215.4183 1932.9122)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 193.6656 1918.7168)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 214.1315 1974.3839)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2314_">
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 168.4538 1942.204)" class="white__fill futura-light fs__6px">126.71 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 178.5457 1950.1654)" class="st15 futura-book fs__6px">43</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 183.8793 1942.88)" class="white__fill futura-light fs__6px">16.06</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 160.3889 1950.0167)" class="white__fill futura-light fs__6px">14.76</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 162.1264 1928.6837)" class="white__fill futura-light fs__6px">8.04</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 192.9243 1981.3872)" class="white__fill futura-light fs__6px">3.59</text>
							<text transform="matrix(1.0046 0.0234 -0.0235 0.9997 175.3666 1982.6112)" class="white__fill futura-light fs__6px">4.82</text>
							<g>
								<polygon class="st17" points="168.32,1929.65 163.69,1934.84 168.53,1939.85"/>
								<polygon class="st18" points="168.37,1929.65 168.59,1939.85 173.22,1934.67"/>
							</g>
						</g>
						<g id="C-62_2313_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 355.5373 1688.4884)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 366.0214 1695.9287)" class="st15 futura-book fs__6px">108</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 370.0104 1688.4431)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 346.7379 1675.2482)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 371.9909 1733.22)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2312_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 325.4976 1700.8788)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 335.9816 1708.3191)" class="st15 futura-book fs__6px">107</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 339.9741 1700.835)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 316.7015 1687.6409)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 341.9536 1745.6104)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2311_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 292.5058 1712.5637)" class="white__fill futura-light fs__6px">159.07 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 302.9899 1720.004)" class="st15 futura-book fs__6px">106</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 306.9815 1712.5182)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 283.7066 1699.3247)" class="white__fill futura-light fs__6px">9.09</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 308.9605 1757.2939)" class="white__fill futura-light fs__6px">9.09</text>
						</g>
						<g id="C-62_2310_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 266.5935 1608.9833)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 277.0776 1616.4236)" class="st15 futura-book fs__6px">100</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 281.0705 1608.9384)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 258.6172 1597.4093)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 281.7721 1651.0562)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2309_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 296.9817 1596.1311)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 307.4658 1603.5713)" class="st15 futura-book fs__6px">101</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 311.4559 1596.085)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3606 0.9327 289.0032 1584.5558)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 312.1592 1638.2009)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2308_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 327.4999 1583.311)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 337.984 1590.7513)" class="st15 futura-book fs__6px">102</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 341.9767 1583.2651)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 342.6783 1625.3827)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2307_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 357.7434 1569.4626)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 368.2274 1576.9028)" class="st15 futura-book fs__6px">103</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 372.2174 1569.4172)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 372.9213 1611.5336)" class="white__fill futura-light fs__6px">8.00</text>
						</g>
						<g id="C-62_2306_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 386.9343 1554.5795)" class="white__fill futura-light fs__6px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 397.4183 1562.0198)" class="st15 futura-book fs__6px">104</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 402.5054 1556.2848)" class="white__fill futura-light fs__6px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 403.2056 1598.4017)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="405.22,1579.92 400.59,1585.11 405.43,1590.13"/>
								<polygon class="st18" points="405.27,1579.92 405.49,1590.13 410.12,1584.94"/>
							</g>
						</g>
						<g id="C-62_2305_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 330.0975 1506.8618)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 340.5816 1514.3021)" class="st15 futura-book fs__6px">96</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 344.6965 1506.0974)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 322.7535 1491.3773)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 347.9937 1550.33)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="331.09,1491.46 326.46,1496.64 331.31,1501.66"/>
								<polygon class="st18" points="331.15,1491.46 331.36,1501.66 335.99,1496.48"/>
							</g>
						</g>
						<g id="C-62_2304_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 300.0086 1519.7559)" class="white__fill futura-light fs__6px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 310.4926 1527.196)" class="st15 futura-book fs__6px">95</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 315.2646 1519.167)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 292.6616 1504.4458)" class="white__fill futura-light fs__6px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 317.9022 1563.3994)" class="white__fill futura-light fs__6px">8.00</text>
							<g>
								<polygon class="st17" points="301,1504.53 296.37,1509.71 301.21,1514.73"/>
								<polygon class="st18" points="301.05,1504.52 301.27,1514.73 305.9,1509.54"/>
							</g>
						</g>
						<g id="C-62_2303_">
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 265.4654 1533.9878)" class="white__fill futura-light fs__6px">177.97 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 275.9494 1541.428)" class="st15 futura-book fs__6px">94</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3916 283.8434 1532.0452)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 257.1191 1519.2249)" class="white__fill futura-light fs__6px">10.17</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 282.3614 1578.1777)" class="white__fill futura-light fs__6px">10.17</text>
							<g>
								<polygon class="st17" points="265.45,1519.3 260.82,1524.49 265.67,1529.51"/>
								<polygon class="st18" points="265.51,1519.3 265.73,1529.51 270.36,1524.32"/>
							</g>
						</g>
						<g id="C-62_2302_">
							<text transform="matrix(0.3696 0.9239 -0.9284 0.3716 227.8387 1549.6254)" class="white__fill futura-light fs__6px">177.97 m2</text>
							<text transform="matrix(0.3696 0.9239 -0.9284 0.3716 238.1987 1557.2391)" class="st15 futura-book fs__6px">93</text>
							<text transform="matrix(0.374 0.9222 -0.9266 0.3761 214.7863 1560.9924)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.374 0.9222 -0.9266 0.3761 244.9091 1548.2041)" class="white__fill futura-light fs__6px">17.50</text>
							<text transform="matrix(0.9261 -0.39 0.3878 0.9217 219.741 1534.5245)" class="white__fill futura-light fs__6px">10.17</text>
							<text transform="matrix(0.9261 -0.39 0.3878 0.9217 243.9941 1593.8911)" class="white__fill futura-light fs__6px">10.17</text>
							<g>
								<polygon class="st17" points="228.1,1534.9 223.39,1540.01 228.15,1545.11"/>
								<polygon class="st18" points="228.16,1534.9 228.21,1545.11 232.92,1540"/>
							</g>
						</g>
					</g>
				</g>
				<polygon class="st21" points="1365.97,5.78 825.1,81.91 0.77,151.67 0.65,1491.33 87.55,1491.33 89.56,1518.05 93.03,1537.5 
					97.41,1553.45 105.63,1585.5 112.99,1618.14 119.34,1650.67 124.51,1683.52 128.68,1716.58 131.9,1749.28 134.21,1782.36 
					135.35,1815.81 135.35,1849.21 134.45,1892.31 131.5,1934.2 131.69,1946.19 136.16,1957.8 144.28,1967 152.49,1972.36 
					162.13,1979.92 172.48,1984.46 177,1985.7 185.79,1985.7 190.47,1984.71 236.77,1969.64 268.59,1958.61 300.29,1947.46 
					331.09,1936.12 362.18,1924.5 392.73,1912.06 423.59,1899.8 454.16,1886.71 484.68,1873.67 515.28,1860.24 558.97,1840.35 
					648.8,1796.13 721.75,1757.74 779.29,1724.82 836.86,1691.4 892.79,1656.19 948.38,1619.95 1003.83,1582.39 1057.63,1543.86 
					1110.2,1504.17 1162.9,1463.38 1213.8,1421 1258.27,1383.06 1275.9,1366.46 1292.88,1347.52 1321.9,1306.84 1333.26,1285.86 
					1343.91,1261.5 1357.71,1218.02 1362.42,1192 1365.51,1160.09 1365.59,215.19 1362.58,207.09 1359.41,203.36 1354.59,199.8 
					1343.14,190.93 1332.99,180.09 1324.12,168.05 1314.26,149.04 1308.26,123.58 1307.65,101.57 1313.03,75.84 1324.03,52.49 
					1339.97,32.41 1354.75,20.09 1366,14.27"/>
			</g>

			<g>

				<a href="#!/Portto_Blanco-Selva_1" class="pb__condo">
					<polygon class="pb__condo-bg" points="546.24,932.82 546.24,1849.87 515.52,1864.01 484.91,1877.4 454.3,1890.58 423.79,1903.55 
						392.76,1915.77 362.15,1928.42 331,1940.01 300.18,1951.38 268.61,1962.54 236.62,1973.59 190.28,1988.58 185.6,1989.64 
						176.78,1989.64 172.21,1988.37 161.9,1983.8 152.23,1976.25 143.94,1970.94 135.86,1961.69 131.4,1950.1 131.18,1938.09 
						134.16,1896.11 135.01,1852.96 135.01,1819.48 133.95,1786 131.61,1752.94 128.42,1720.2 124.17,1687.04 119.07,1654.2 
						112.69,1621.57 105.25,1588.94 97.06,1556.84 92.6,1540.79 89.2,1521.34 87.18,1494.55 0.13,1494.55 0.24,932.08"/>
					<g>
						<rect x="130.01" y="1185.58" class="st23" width="310.68" height="77.38"/>
						<text transform="matrix(1 0 0 1 157.8579 1251.8352)" class="white__fill futura-book st24">SELVA 1 </text>
					</g>
				</a>

				<a href="#!/Portto_Blanco-Selva_2" class="pb__condo">
					<polygon class="pb__condo-bg" points="546.24,106.97 546.24,932.82 0.24,932.08 0.24,153.1"/>
					<g>
						<rect x="130.01" y="664.77" class="st23" width="310.68" height="77.38"/>
						<text transform="matrix(1 0 0 1 157.8579 730.9568)" class="white__fill futura-book st24">SELVA 2 </text>
					</g>
				</a>

				<a href="#!/Portto_Blanco-Selva_3" class="pb__condo">
					<polygon class="pb__condo-bg" points="1366.88,995.11 1366.88,1162.94 1363.91,1194.93 1359.12,1220.97 1345.31,1264.44 1334.68,1288.89 
						1323.31,1309.83 1294.08,1350.64 1277.07,1369.45 1259.53,1386.14 1214.89,1424.19 1164.09,1466.6 1111.26,1507.52 
						1058.54,1547.27 1004.66,1585.75 949.17,1623.38 893.58,1659.62 837.46,1695.01 779.86,1728.39 722.25,1761.44 649.34,1799.81 
						559.31,1844.03 546.24,1849.87 546.24,995.22"/>
					<g>
						<rect x="766.36" y="1185.58" class="st23" width="310.68" height="77.38"/>
						<text transform="matrix(1 0 0 1 794.25 1251.8352)" class="white__fill futura-book st24">SELVA 3 </text>
					</g>
				</a>

				<a href="#!/Portto_Blanco-Selva_4" class="pb__condo">
					<polygon class="pb__condo-bg" points="1360.83,204.97 1356.04,201.35 1344.56,192.42 1334.25,181.58 1325.43,169.57 1315.65,150.55 
						1309.7,125.04 1308.96,103.04 1314.27,77.21 1325.43,53.82 1341.37,33.74 1356.04,21.41 1366.4,16.06 1366.4,7.19 825.77,83.27 
						546.24,106.97 546.24,995.22 1366.88,995.11 1366.88,216.76 1364.01,208.69"/>
					<g>
						<rect x="766.36" y="664.66" class="st23" width="310.68" height="77.38"/>
						<text transform="matrix(1 0 0 1 794.25 730.9588)" class="white__fill futura-book st24">SELVA 4 </text>
					</g>
				</a>

			</g>

		</svg>

	</div>

</body>
</html>
