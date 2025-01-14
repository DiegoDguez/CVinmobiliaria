<!DOCTYPE html>
<html lang="es_MX">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords"
		content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBManglarQuoteCtrl as manglar">

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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
						src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10"
								ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
					<li>
						<md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
							<svg viewBox="0 0 24 24" width="24">
								<path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
							</svg>
						</md-button>
					</li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10"
							ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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


	<div class="modal-dialog" ng-class="manglar.dialogDisplay">
		<div class="backdrop-dialog" ng-click="manglar.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="manglar.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{manglar.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{manglar.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{manglar.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{manglar.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de
							${{manglar.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<!--<div class="py-20 ">-->
					<!--	<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>-->
					<!--</div>-->

					<!--<div class="divider"></div>-->

					<!--<div class="p-20">-->
					<!--	<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan1}}% para-->
					<!--		propiedades pagadas de contado al 100%</h6>-->
					<!--	<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan1}} MXN</h6>-->
					<!--	<p class="promo__description grey-text">¡Oferta limitada!</p>-->
					<!--</div>-->
<!-- 
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan2}}% de descuento
							para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{manglar.month}} y paga la primera
							mensualidad hasta {{manglar.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas
							en {{manglar.month + ' ' + manglar.year}}</p>
					</div>

					<div class="divider"></div> -->

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10" md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt"
						ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
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
	</div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">Strip Center Manglar</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block pb-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block pb__apart__bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

        <svg version="1.1" id="STRIP_CENTER_MANGLAR" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 2094.9" style="enable-background:new 0 0 1366 2094.9;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st1{fill:#FFBF00;}
	.st2{font-family:'CenturyGothic-Bold';}
	.st3{font-size:24.6983px;}
	.st4{fill:#FFFFFF;}
	.st5{font-family:'CenturyGothic';}
	.st6{font-size:21.6109px;}
	.st7{font-size:21.611px;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st9{font-size:24.6984px;}
	.st10{font-size:21.6111px;}
	.st11{font-size:24.6982px;}
	.st12{fill:none;stroke:#FFFFFF;stroke-width:3.0873;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st13{font-size:11.7317px;}
	.st14{fill:none;stroke:#002856;stroke-width:4.6309;stroke-miterlimit:10;}
</style>
<g id="BASE">
	<image style="overflow:visible;" width="1366" height="2095" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/manglar/condos/manlgar_3.jpg" >
	</image>
</g>
<g id="ISLA_A">
	<g id="A-1_1_" class="property__active" ng-class="manglar.inmovablesClassList[168]" ng-click="manglar.showPropertyData(50, '1')">
		<polyline id="A-L1_1_" class="property pb-sprite-1" points="1145.6,2066.9 1148.1,2029.2 1149.9,1991.4 1151,1953.6 1364.6,1957.5 1362.9,2012.3 
			1359.8,2067.1 1145.6,2066.9 		"/>
		<text transform="matrix(1.0056 0 0 1 1228.2793 2009.4847)" class="st1 st2 st3">LOTE 1</text>
		<text transform="matrix(1.0054 1.919640e-02 -1.930007e-02 0.9998 1232.702 1973.4093)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(4.361738e-02 -0.9935 0.9991 4.337994e-02 1356.4333 2031.4547)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(4.710861e-02 -0.9934 0.9989 4.685009e-02 1168.839 2030.7654)"><tspan x="0" y="0" class="st4 st5 st7">8.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">3</tspan></text>
		<text transform="matrix(1.0056 0 0 1 1227.8037 2062.2395)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">4</tspan></text>
		<text transform="matrix(1.0056 0 0 1 1208.7002 2032.9779)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">8.18 m2</tspan></text>
	</g>
	<g id="A-2_1_" class="property__active" ng-class="manglar.inmovablesClassList[169]" ng-click="manglar.showPropertyData(50, '2')">
		<polyline id="A-L2_1_" class="property pb-sprite-2" points="1364.6,1957.5 1151,1953.6 1151.3,1904 1150.4,1854.4 1363.9,1847.8 1365,1902.7 
			1364.6,1957.5 		"/>
		<text transform="matrix(1.0056 -5.239051e-03 5.269980e-03 1 1227.8064 1901.802)" class="st1 st2 st9">LOTE 2</text>
		<text transform="matrix(1.0051 -2.966446e-02 2.983014e-02 0.9996 1232.6429 1869.9976)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(1.0056 0 0 1 1211.2607 1925.3099)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(5.240733e-03 0.9944 -1 5.209981e-03 1157.8989 1884.7031)" class="st4 st5 st10">7.00</text>
		<text transform="matrix(5.240733e-03 0.9944 -1 5.209981e-03 1345.0876 1883.5287)" class="st4 st5 st10">7.75</text>
	</g>
	<g id="A-3_1_" class="property__active" ng-class="manglar.inmovablesClassList[170]" ng-click="manglar.showPropertyData(50, '3')">
		<polyline id="A-L3_1_" class="property pb-sprite-1" points="1150.4,1854.4 1148.2,1804.9 1144.8,1755.4 1357.8,1738.3 1361.5,1793 1363.9,1847.8 
			1150.4,1854.4 		"/>
		<text transform="matrix(1.0023 -8.019974e-02 8.064028e-02 0.9967 1224.2367 1799.1943)" class="st1 st2 st11">LOTE 3</text>
		<text transform="matrix(1.0023 -8.019974e-02 8.064028e-02 0.9967 1227.6918 1766.5325)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(5.582063e-02 0.9929 -0.9985 5.550990e-02 1340.5016 1774.86)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(5.582063e-02 0.9929 -0.9985 5.550990e-02 1153.6066 1785.2662)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(1.0023 -8.019974e-02 8.064028e-02 0.9967 1213.8416 1825.1403)"><tspan x="0" y="0" class="st4 st5 st6">11</tspan><tspan x="23.9" y="0" class="st4 st5 st6">0.59 m2</tspan></text>
	</g>
	<g id="A-4_1_" class="property__active" ng-class="manglar.inmovablesClassList[171]" ng-click="manglar.showPropertyData(50, '4')">
		<polyline id="A-L4_1_" class="property pb-sprite-2" points="1144.8,1755.4 1140.2,1706.1 1134.3,1656.8 1346.1,1629.2 1352.6,1683.7 
			1357.8,1738.3 1144.8,1755.4 		"/>
		<text transform="matrix(0.9971 -0.1288 0.1295 0.9916 1219.9398 1699.1576)" class="st1 st2 st3">LOTE 4</text>
		<text transform="matrix(0.9971 -0.1288 0.1295 0.9916 1218.0385 1666.4659)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.1045 0.9891 -0.9946 0.104 1330.5435 1666.6698)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.1045 0.9891 -0.9946 0.104 1144.4036 1686.2924)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.9971 -0.1288 0.1295 0.9916 1209.462 1724.1528)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
	</g>
	<g id="A-5_1_" class="property__active" ng-class="manglar.inmovablesClassList[172]" ng-click="manglar.showPropertyData(50, '5')">
		<polyline id="A-L5_1_" class="property pb-sprite-1" points="1134.3,1656.8 1127.2,1607.8 1118.9,1558.9 1329.1,1520.8 1338.3,1574.9 
			1346.1,1629.2 1134.3,1656.8 		"/>
		<text transform="matrix(0.9892 -0.1788 0.1798 0.9837 1206.2781 1594.4766)" class="st1 st2 st3">LOTE 5</text>
		<text transform="matrix(0.9892 -0.1788 0.1798 0.9837 1203.2772 1564.7196)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.153 0.9829 -0.9884 0.1522 1315.683 1558.9127)"><tspan x="0" y="0" class="st4 st5 st10">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st10">5</tspan></text>
		<text transform="matrix(0.153 0.9829 -0.9884 0.1522 1130.7412 1587.715)"><tspan x="0" y="0" class="st4 st5 st10">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.9892 -0.1788 0.1798 0.9837 1195.5558 1622.1309)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
	</g>
	<g id="A-6_1_" class="property__active" ng-class="manglar.inmovablesClassList[173]" ng-click="manglar.showPropertyData(50, '6')">
		<polyline id="A-L6_1_" class="property pb-sprite-2" points="1118.9,1558.9 1109.3,1510.2 1098.6,1461.8 1306.6,1413.4 1318.5,1467 1329.1,1520.8 
			1118.9,1558.9 		"/>
		<text transform="matrix(0.9791 -0.2266 0.2278 0.9737 1185.9846 1491.7813)" class="st1 st2 st9">LOTE 6</text>
		<text transform="matrix(0.9791 -0.2266 0.2278 0.9737 1182.8962 1462.9221)"><tspan x="0" y="0" class="st4 st5 st10">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.2028 0.974 -0.9794 0.2017 1295.0837 1452.1843)"><tspan x="0" y="0" class="st4 st5 st10">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st10">5</tspan></text>
		<text transform="matrix(0.2028 0.974 -0.9794 0.2017 1111.8035 1490.077)"><tspan x="0" y="0" class="st4 st5 st10">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.9791 -0.2266 0.2278 0.9737 1177.137 1517.3634)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
	</g>
	<g id="A-7_1_" class="property__active" ng-class="manglar.inmovablesClassList[174]" ng-click="manglar.showPropertyData(50, '7')">
		<polyline id="A-L7_1_" class="property pb-sprite-1" points="1098.6,1461.8 1086.6,1413.7 1073.5,1365.9 1278.8,1307.2 1293.4,1360.2 
			1306.6,1413.4 1098.6,1461.8 		"/>
		<text transform="matrix(0.9662 -0.2755 0.2771 0.9609 1161.8655 1393.4497)" class="st1 st2 st11">LOTE 7</text>
		<text transform="matrix(0.9662 -0.2755 0.2771 0.9609 1157.8112 1362.2118)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.2505 0.9631 -0.9685 0.2491 1269.171 1346.5233)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.2505 0.9631 -0.9685 0.2491 1088.0316 1393.4124)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.9662 -0.2755 0.2771 0.9609 1154.1185 1421.3413)"><tspan x="0" y="0" class="st4 st5 st6">11</tspan><tspan x="23.9" y="0" class="st4 st5 st6">0.59 m2</tspan></text>
	</g>
	<g id="A-8_1_" class="property__active" ng-class="manglar.inmovablesClassList[175]" ng-click="manglar.showPropertyData(50, '8')">
		<polyline id="A-L8_1_" class="property pb-sprite-2" points="1073.5,1365.9 1059.1,1318.4 1043.6,1271.3 1245.8,1202.6 1263,1254.7 1278.8,1307.2 
			1073.5,1365.9 		"/>
		<text transform="matrix(0.9514 -0.3221 0.3239 0.9461 1131.7773 1296.3542)" class="st1 st2 st3">LOTE 8</text>
		<text transform="matrix(0.9514 -0.3221 0.3239 0.9461 1127.5848 1263.6268)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.2992 0.9494 -0.9547 0.2975 1238.1033 1242.1907)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.2992 0.9494 -0.9547 0.2975 1059.5135 1297.9729)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.9514 -0.3221 0.3239 0.9461 1125.2946 1325.3467)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
	</g>
	<g id="A-9_1_" class="property__active" ng-class="manglar.inmovablesClassList[176]" ng-click="manglar.showPropertyData(50, '9')">
		<polyline id="A-L9_1_" class="property pb-sprite-1" points="1043.6,1271.3 1026.9,1224.6 1009,1178.3 1207.5,1099.7 1227.3,1150.9 1245.8,1202.6 
			1043.6,1271.3 		"/>
		<text transform="matrix(0.9548 -0.3122 0.3139 0.9495 1098.2823 1195.7635)" class="st1 st2 st11">LOTE 9</text>
		<text transform="matrix(0.9548 -0.3122 0.3139 0.9495 1091.3484 1223.4308)"><tspan x="0" y="0" class="st4 st5 st6">11</tspan><tspan x="23.9" y="0" class="st4 st5 st6">0.59 m2</tspan></text>
		<text transform="matrix(0.9336 -0.3695 0.3715 0.9284 1093.0428 1167.3607)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.3455 0.9339 -0.9391 0.3436 1201.7209 1139.7916)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.3455 0.9339 -0.9391 0.3436 1026.1461 1204.3228)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-10_1_" class="property__active" ng-class="manglar.inmovablesClassList[177]" ng-click="manglar.showPropertyData(50, '10')">
		<polyline id="A-L10_1_" class="property pb-sprite-2" points="1009,1178.3 990,1132.5 969.9,1087.1 1164.2,998.8 1186.5,1049 1207.5,1099.7 
			1009,1178.3 		"/>
		<text transform="matrix(0.9381 -0.3581 0.3601 0.9329 1053.8938 1106.6161)" class="st1 st2 st3">LOTE 10</text>
		<text transform="matrix(0.9381 -0.3581 0.3601 0.9329 1051.8428 1129.1421)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(0.9142 -0.4143 0.4166 0.9091 1052.4269 1070.5002)"><tspan x="0" y="0" class="st4 st5 st10">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.3927 0.9155 -0.9206 0.3905 1160.71 1039.0994)"><tspan x="0" y="0" class="st4 st5 st10">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st10">5</tspan></text>
		<text transform="matrix(0.3927 0.9155 -0.9206 0.3905 988.5734 1112.225)"><tspan x="0" y="0" class="st4 st5 st10">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st10">0</tspan></text>
	</g>
	<g id="A-11_1_" class="property__active" ng-class="manglar.inmovablesClassList[178]" ng-click="manglar.showPropertyData(50, '11')">
		<polyline id="A-L11_1_" class="property pb-sprite-1" points="969.9,1087.1 948.6,1042.3 926.2,998 1115.9,900.2 1140.7,949.2 1164.2,998.8 
			969.9,1087.1 		"/>
		<text transform="matrix(0.9192 -0.4032 0.4054 0.9141 1013.3136 1010.945)" class="st1 st2 st9">LOTE 11</text>
		<text transform="matrix(0.9192 -0.4032 0.4054 0.9141 1014.4732 1033.9431)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
		<text transform="matrix(0.8917 -0.4596 0.4622 0.8868 1008.7595 979.5242)"><tspan x="0" y="0" class="st4 st5 st10">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.4373 0.8955 -0.9005 0.4348 1114.2396 940.602)"><tspan x="0" y="0" class="st4 st5 st10">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st10">5</tspan></text>
		<text transform="matrix(0.4373 0.8955 -0.9005 0.4348 945.9561 1022.1407)"><tspan x="0" y="0" class="st4 st5 st10">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st10">0</tspan></text>
	</g>
	<g id="A-12_1_" class="property__active" ng-class="manglar.inmovablesClassList[179]" ng-click="manglar.showPropertyData(50, '12')">
		<polyline id="A-L12_1_" class="property pb-sprite-2" points="926.2,998 902.7,954.3 878.1,911.1 1062.7,804.1 1089.9,851.8 1115.9,900.2 
			926.2,998 		"/>
		<text transform="matrix(0.8989 -0.4457 0.4482 0.8939 966.0423 923.2963)" class="st1 st2 st3">LOTE 12</text>
		<text transform="matrix(0.8989 -0.4457 0.4482 0.8939 970.187 945.4818)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(0.8679 -0.5023 0.5051 0.8631 959.1481 887.512)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.4824 0.8726 -0.8774 0.4797 1062.9073 844.4437)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.4824 0.8726 -0.8774 0.4797 898.9103 934.196)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-13_1_" class="property__active" ng-class="manglar.inmovablesClassList[180]" ng-click="manglar.showPropertyData(50, '13')">
		<polyline id="A-L13_1_" class="property pb-sprite-1" points="878.1,911.1 852.5,868.6 825.8,826.7 1004.8,710.7 1034.3,757.1 1062.7,804.1 
			878.1,911.1 		"/>
		<text transform="matrix(0.8758 -0.4887 0.4915 0.8709 909.5026 830.1396)" class="st1 st2 st11">LOTE 13</text>
		<text transform="matrix(0.8758 -0.4887 0.4915 0.8709 914.5421 854.7262)"><tspan x="0" y="0" class="st4 st5 st6">11</tspan><tspan x="23.9" y="0" class="st4 st5 st6">0.59 m2</tspan></text>
		<text transform="matrix(0.842 -0.5437 0.5468 0.8373 904.957 798.2823)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.5248 0.8483 -0.853 0.5219 1007.0734 751.0544)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.5248 0.8483 -0.853 0.5219 847.7646 848.786)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
	</g>
	<g id="A-14_1_" class="property__active" ng-class="manglar.inmovablesClassList[181]" ng-click="manglar.showPropertyData(50, '14')">
		<polyline id="A-L14_1_" class="property pb-sprite-2" points="825.8,826.7 798.1,785.6 769.3,745.1 942.3,620.3 974.1,665.1 1004.8,710.7 
			825.8,826.7 		"/>
		<text transform="matrix(0.8505 -0.5306 0.5335 0.8458 859.1606 747.9413)" class="st1 st2 st3">LOTE 14</text>
		<text transform="matrix(0.8505 -0.5306 0.5335 0.8458 864.5587 769.5089)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
		<text transform="matrix(0.813 -0.5852 0.5885 0.8085 848.4485 715.0169)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.5674 0.821 -0.8256 0.5643 946.7753 660.4738)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.5674 0.821 -0.8256 0.5643 792.5419 765.9522)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-15_1_" class="property__active" ng-class="manglar.inmovablesClassList[182]" ng-click="manglar.showPropertyData(50, '15')">
		<polyline id="A-L15_1_" class="property pb-sprite-1" points="769.3,745.1 739.5,705.3 708.8,666.3 875.3,533.2 909.3,576.3 942.3,620.3 
			769.3,745.1 		"/>
		<text transform="matrix(0.8232 -0.5711 0.5743 0.8187 800.2352 663.1628)" class="st1 st2 st11">LOTE 15</text>
		<text transform="matrix(0.8232 -0.5711 0.5743 0.8187 803.6851 685.5114)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(0.7831 -0.6239 0.6274 0.7787 787.6023 633.8524)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.6072 0.7927 -0.7971 0.6039 881.6674 572.9467)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.6072 0.7927 -0.7971 0.6039 732.8927 685.9147)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
	</g>
	<g id="A-16_1_" class="property__active" ng-class="manglar.inmovablesClassList[183]" ng-click="manglar.showPropertyData(50, '16')">
		<polyline id="A-L16_1_" class="property pb-sprite-2" points="804.1,449.4 840.2,490.8 875.3,533.2 708.8,666.3 677.1,628 644.4,590.5 804.1,449.4 
					"/>
		<text transform="matrix(0.7951 -0.6089 0.6123 0.7906 736.5388 585.0687)" class="st1 st2 st3">LOTE 16</text>
		<text transform="matrix(0.7951 -0.6089 0.6123 0.7906 741.0623 607.2308)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(0.6469 0.7613 -0.7656 0.6434 812.4368 488.8805)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.6469 0.7613 -0.7656 0.6434 669.4935 609.0555)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.7501 -0.6623 0.666 0.746 717.8258 550.0076)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-17_1_" class="property__active" ng-class="manglar.inmovablesClassList[184]" ng-click="manglar.showPropertyData(50, '17')">
		<polyline id="A-L17_1_" class="property pb-sprite-1" points="728.8,369.2 767,408.8 804.1,449.4 644.4,590.5 610.8,553.9 576.4,518.1 728.8,369.2 
					"/>
		<text transform="matrix(0.764 -0.6466 0.6502 0.7598 662.5574 506.5924)" class="st1 st2 st9">LOTE 17</text>
		<text transform="matrix(0.764 -0.6466 0.6502 0.7598 674.1766 524.4948)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
		<text transform="matrix(0.6838 0.7292 -0.7332 0.68 738.9599 408.3801)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.6838 0.7292 -0.7332 0.68 602.1863 535.4727)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.7165 -0.6978 0.7017 0.7125 649.3376 475.5017)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-18_1_" class="property__active" ng-class="manglar.inmovablesClassList[185]" ng-click="manglar.showPropertyData(50, '18')">
		<polyline id="A-L18_1_" class="property pb-sprite-2" points="576.4,518.1 541,483.2 504.8,449.1 649.6,292.9 689.7,330.6 728.8,369.2 576.4,518.1 
					"/>
		<text transform="matrix(0.7311 -0.6828 0.6866 0.7271 592.4586 437.0711)" class="st1 st2 st9">LOTE 18</text>
		<text transform="matrix(0.7311 -0.6828 0.6866 0.7271 603.9589 457.0108)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
		<text transform="matrix(0.7202 0.694 -0.6979 0.7162 661.9342 331.2913)"><tspan x="0" y="0" class="st4 st5 st10">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st10">5</tspan></text>
		<text transform="matrix(0.7202 0.694 -0.6979 0.7162 531.6668 464.9763)"><tspan x="0" y="0" class="st4 st5 st10">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.6799 -0.7327 0.7368 0.6761 575.5413 403.2879)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-19_1_" class="property__active" ng-class="manglar.inmovablesClassList[186]" ng-click="manglar.showPropertyData(50, '19')">
		<polyline id="A-L19_1_" class="property pb-sprite-1" points="649.6,292.9 504.8,449.1 467.7,416 429.8,383.8 566.6,220.6 608.5,256.2 649.6,292.9 
					"/>
		<text transform="matrix(0.6965 -0.7173 0.7213 0.6927 516.8619 364.0584)" class="st1 st2 st9">LOTE 19</text>
		<text transform="matrix(0.6965 -0.7173 0.7213 0.6927 525.8117 388.9862)"><tspan x="0" y="0" class="st4 st5 st10">11</tspan><tspan x="23.9" y="0" class="st4 st5 st10">0.59 m2</tspan></text>
		<text transform="matrix(0.7536 0.6584 -0.6621 0.7494 580.8021 258.526)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.7536 0.6584 -0.6621 0.7494 457.3841 398.4832)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.6429 -0.7647 0.7689 0.6393 499.5552 335.5338)"><tspan x="0" y="0" class="st4 st5 st10">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st10">0</tspan></text>
	</g>
	<g id="A-20_1_" class="property__active" ng-class="manglar.inmovablesClassList[187]" ng-click="manglar.showPropertyData(50, '20')">
		<polyline id="A-L20_1_" class="property pb-sprite-2" points="480.2,152.4 523.8,186 566.6,220.6 429.8,383.8 391.1,352.5 351.7,322.2 480.2,152.4 
					"/>
		<text transform="matrix(0.6616 -0.7489 0.7531 0.6579 434.77 298.3991)" class="st1 st2 st3">LOTE 20</text>
		<text transform="matrix(0.6616 -0.7489 0.7531 0.6579 448.0329 321.1236)"><tspan x="0" y="0" class="st4 st5 st7">11</tspan><tspan x="23.9" y="0" class="st4 st5 st7">0.59 m2</tspan></text>
		<text transform="matrix(0.7853 0.6212 -0.6246 0.7809 496.2158 189.4738)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
		<text transform="matrix(0.7853 0.6212 -0.6246 0.7809 379.9482 335.3551)"><tspan x="0" y="0" class="st4 st5 st7">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.603 -0.7958 0.8002 0.5997 418.3748 270.1845)"><tspan x="0" y="0" class="st4 st5 st7">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st7">0</tspan></text>
	</g>
	<g id="A-21_1_" class="property__active" ng-class="manglar.inmovablesClassList[188]" ng-click="manglar.showPropertyData(50, '21')">
		<polyline id="A-L21_1_" class="property pb-sprite-1" points="390.4,88.6 435.7,120 480.2,152.4 351.7,322.2 311.5,292.8 270.6,264.5 390.4,88.6 		
			"/>
		<text transform="matrix(0.6239 -0.7799 0.7843 0.6204 356.6718 235.7626)" class="st1 st2 st11">LOTE 21</text>
		<text transform="matrix(0.6239 -0.7799 0.7843 0.6204 371.1506 256.6256)"><tspan x="0" y="0" class="st4 st5 st6">11</tspan><tspan x="23.9" y="0" class="st4 st5 st6">0.59 m2</tspan></text>
		<text transform="matrix(0.8161 0.581 -0.5843 0.8116 408.3546 124.8501)"><tspan x="0" y="0" class="st4 st5 st6">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.8161 0.581 -0.5843 0.8116 299.5184 276.292)"><tspan x="0" y="0" class="st4 st5 st6">7.0</tspan><tspan x="29.7" y="0" class="st4 st5 st6">0</tspan></text>
		<text transform="matrix(0.5631 -0.8239 0.8285 0.5599 337.0056 210.7464)"><tspan x="0" y="0" class="st4 st5 st6">15.0</tspan><tspan x="41.7" y="0" class="st4 st5 st6">0</tspan></text>
	</g>
	<g id="A-22_1_" class="property__active" ng-class="manglar.inmovablesClassList[189]" ng-click="manglar.showPropertyData(50, '22')">
		<polyline id="A-L22_1_" class="property pb-sprite-2" points="215.2,77.1 319.4,42.7 355.1,65.3 390.4,88.6 270.6,264.5 230.9,238.5 190.7,213.4 
			149.9,189.3 215.2,77.1 		"/>
		<text transform="matrix(0.5846 -0.8091 0.8136 0.5814 244.4305 174.5011)" class="st1 st2 st3">LOTE 22</text>
		<text transform="matrix(0.5946 -0.802 0.8065 0.5913 257.7631 197.4247)"><tspan x="0" y="0" class="st4 st5 st10">14</tspan><tspan x="23.9" y="0" class="st4 st5 st10">2.92 m2</tspan></text>
		<text transform="matrix(0.9542 -0.3138 0.3156 0.9489 253.6991 88.58)"><tspan x="0" y="0" class="st4 st5 st7">7.7</tspan><tspan x="29.7" y="0" class="st4 st5 st7">0</tspan></text>
		<text transform="matrix(0.841 0.5452 -0.5482 0.8363 327.8702 71.4229)"><tspan x="0" y="0" class="st4 st5 st6">5.9</tspan><tspan x="29.7" y="0" class="st4 st5 st6">5</tspan></text>
		<text transform="matrix(0.8505 0.5306 -0.5335 0.8458 193.2959 207.257)"><tspan x="0" y="0" class="st4 st5 st10">10.0</tspan><tspan x="41.7" y="0" class="st4 st5 st10">0</tspan></text>
		<text transform="matrix(0.5022 -0.8616 0.8664 0.4994 198.7811 152.3036)"><tspan x="0" y="0" class="st4 st5 st7">9.1</tspan><tspan x="29.7" y="0" class="st4 st5 st7">5</tspan></text>
	</g>
	<g id="DIVISIONES_1_">
		<g>
			<defs>
				<polyline id="SVGID_1_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_2_">
				<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_3_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_4_">
				<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_5_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_6_">
				<use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_7_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_8_">
				<use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_9_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_10_">
				<use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_11_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_12_">
				<use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_13_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_14_">
				<use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_15_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_16_">
				<use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_17_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_18_">
				<use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_19_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_20_">
				<use xlink:href="#SVGID_19_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_21_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_22_">
				<use xlink:href="#SVGID_21_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_23_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_24_">
				<use xlink:href="#SVGID_23_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_25_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_26_">
				<use xlink:href="#SVGID_25_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_27_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_28_">
				<use xlink:href="#SVGID_27_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<line class="st12" x1="1098.6" y1="1461.8" x2="1306.6" y2="1413.4"/>
		<line class="st12" x1="1073.5" y1="1365.9" x2="1278.8" y2="1307.2"/>
		<line class="st12" x1="1043.6" y1="1271.3" x2="1245.8" y2="1202.6"/>
		<line class="st12" x1="1009" y1="1178.3" x2="1207.5" y2="1099.7"/>
		<line class="st12" x1="969.9" y1="1087.1" x2="1164.2" y2="998.8"/>
		<line class="st12" x1="926.2" y1="998" x2="1115.9" y2="900.2"/>
		<line class="st12" x1="878.1" y1="911.1" x2="1062.7" y2="804.1"/>
		<line class="st12" x1="825.8" y1="826.7" x2="1004.8" y2="710.7"/>
		<line class="st12" x1="769.3" y1="745.1" x2="942.3" y2="620.3"/>
		<line class="st12" x1="708.8" y1="666.3" x2="875.3" y2="533.2"/>
		<line class="st12" x1="644.4" y1="590.5" x2="804.1" y2="449.4"/>
		<line class="st12" x1="576.4" y1="518.1" x2="728.8" y2="369.2"/>
		<line class="st12" x1="504.8" y1="449.1" x2="649.6" y2="292.9"/>
		<line class="st12" x1="429.8" y1="383.8" x2="566.6" y2="220.6"/>
		<line class="st12" x1="351.7" y1="322.2" x2="480.2" y2="152.4"/>
		<line class="st12" x1="1151" y1="1953.6" x2="1364.6" y2="1957.5"/>
		<line class="st12" x1="1150.4" y1="1854.4" x2="1363.9" y2="1847.8"/>
		<line class="st12" x1="1144.8" y1="1755.4" x2="1357.8" y2="1738.3"/>
		<line class="st12" x1="1134.3" y1="1656.8" x2="1346.1" y2="1629.2"/>
		<line class="st12" x1="1118.9" y1="1558.9" x2="1329.1" y2="1520.8"/>
		<path class="st12" d="M215.2,77.1"/>
		<path class="st12" d="M149.9,189.3"/>
		<line class="st12" x1="270.6" y1="264.5" x2="390.4" y2="88.6"/>
		<g>
			<defs>
				<polyline id="SVGID_29_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_30_">
				<use xlink:href="#SVGID_29_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_31_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_32_">
				<use xlink:href="#SVGID_31_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_33_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_34_">
				<use xlink:href="#SVGID_33_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_35_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_36_">
				<use xlink:href="#SVGID_35_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_37_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_38_">
				<use xlink:href="#SVGID_37_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_39_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_40_">
				<use xlink:href="#SVGID_39_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_41_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_42_">
				<use xlink:href="#SVGID_41_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_43_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_44_">
				<use xlink:href="#SVGID_43_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_45_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_46_">
				<use xlink:href="#SVGID_45_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_47_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_48_">
				<use xlink:href="#SVGID_47_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_49_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_50_">
				<use xlink:href="#SVGID_49_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_51_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_52_">
				<use xlink:href="#SVGID_51_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_53_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_54_">
				<use xlink:href="#SVGID_53_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_55_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_56_">
				<use xlink:href="#SVGID_55_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_57_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_58_">
				<use xlink:href="#SVGID_57_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_59_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_60_">
				<use xlink:href="#SVGID_59_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_61_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_62_">
				<use xlink:href="#SVGID_61_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_63_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_64_">
				<use xlink:href="#SVGID_63_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_65_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_66_">
				<use xlink:href="#SVGID_65_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_67_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_68_">
				<use xlink:href="#SVGID_67_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_69_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_70_">
				<use xlink:href="#SVGID_69_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_71_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_72_">
				<use xlink:href="#SVGID_71_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_73_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_74_">
				<use xlink:href="#SVGID_73_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_75_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_76_">
				<use xlink:href="#SVGID_75_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_77_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_78_">
				<use xlink:href="#SVGID_77_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_79_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_80_">
				<use xlink:href="#SVGID_79_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_81_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_82_">
				<use xlink:href="#SVGID_81_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_83_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_84_">
				<use xlink:href="#SVGID_83_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_85_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_86_">
				<use xlink:href="#SVGID_85_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_87_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_88_">
				<use xlink:href="#SVGID_87_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_89_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_90_">
				<use xlink:href="#SVGID_89_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_91_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_92_">
				<use xlink:href="#SVGID_91_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_93_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_94_">
				<use xlink:href="#SVGID_93_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_95_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_96_">
				<use xlink:href="#SVGID_95_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_97_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_98_">
				<use xlink:href="#SVGID_97_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_99_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_100_">
				<use xlink:href="#SVGID_99_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_101_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_102_">
				<use xlink:href="#SVGID_101_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_103_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_104_">
				<use xlink:href="#SVGID_103_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_105_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_106_">
				<use xlink:href="#SVGID_105_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_107_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_108_">
				<use xlink:href="#SVGID_107_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_109_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_110_">
				<use xlink:href="#SVGID_109_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_111_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_112_">
				<use xlink:href="#SVGID_111_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_113_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_114_">
				<use xlink:href="#SVGID_113_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_115_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_116_">
				<use xlink:href="#SVGID_115_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_117_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_118_">
				<use xlink:href="#SVGID_117_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_119_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_120_">
				<use xlink:href="#SVGID_119_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_121_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_122_">
				<use xlink:href="#SVGID_121_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_123_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_124_">
				<use xlink:href="#SVGID_123_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_125_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_126_">
				<use xlink:href="#SVGID_125_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_127_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_128_">
				<use xlink:href="#SVGID_127_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_129_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_130_">
				<use xlink:href="#SVGID_129_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_131_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_132_">
				<use xlink:href="#SVGID_131_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_133_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_134_">
				<use xlink:href="#SVGID_133_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_135_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_136_">
				<use xlink:href="#SVGID_135_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_137_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_138_">
				<use xlink:href="#SVGID_137_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_139_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_140_">
				<use xlink:href="#SVGID_139_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_141_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_142_">
				<use xlink:href="#SVGID_141_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_143_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_144_">
				<use xlink:href="#SVGID_143_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_145_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_146_">
				<use xlink:href="#SVGID_145_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_147_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_148_">
				<use xlink:href="#SVGID_147_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_149_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_150_">
				<use xlink:href="#SVGID_149_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_151_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_152_">
				<use xlink:href="#SVGID_151_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_153_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_154_">
				<use xlink:href="#SVGID_153_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_155_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_156_">
				<use xlink:href="#SVGID_155_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_157_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_158_">
				<use xlink:href="#SVGID_157_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_159_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_160_">
				<use xlink:href="#SVGID_159_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_161_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_162_">
				<use xlink:href="#SVGID_161_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_163_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_164_">
				<use xlink:href="#SVGID_163_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_165_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_166_">
				<use xlink:href="#SVGID_165_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_167_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_168_">
				<use xlink:href="#SVGID_167_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_169_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_170_">
				<use xlink:href="#SVGID_169_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_171_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_172_">
				<use xlink:href="#SVGID_171_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_173_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_174_">
				<use xlink:href="#SVGID_173_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_175_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_176_">
				<use xlink:href="#SVGID_175_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_177_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_178_">
				<use xlink:href="#SVGID_177_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_179_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_180_">
				<use xlink:href="#SVGID_179_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_181_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_182_">
				<use xlink:href="#SVGID_181_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_183_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_184_">
				<use xlink:href="#SVGID_183_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_185_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_186_">
				<use xlink:href="#SVGID_185_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_187_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_188_">
				<use xlink:href="#SVGID_187_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_189_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_190_">
				<use xlink:href="#SVGID_189_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_191_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_192_">
				<use xlink:href="#SVGID_191_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_193_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_194_">
				<use xlink:href="#SVGID_193_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_195_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_196_">
				<use xlink:href="#SVGID_195_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_197_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_198_">
				<use xlink:href="#SVGID_197_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_199_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_200_">
				<use xlink:href="#SVGID_199_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_201_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_202_">
				<use xlink:href="#SVGID_201_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_203_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_204_">
				<use xlink:href="#SVGID_203_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_205_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_206_">
				<use xlink:href="#SVGID_205_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_207_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_208_">
				<use xlink:href="#SVGID_207_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_209_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_210_">
				<use xlink:href="#SVGID_209_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_211_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_212_">
				<use xlink:href="#SVGID_211_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_213_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_214_">
				<use xlink:href="#SVGID_213_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_215_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_216_">
				<use xlink:href="#SVGID_215_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_217_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_218_">
				<use xlink:href="#SVGID_217_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_219_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_220_">
				<use xlink:href="#SVGID_219_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_221_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_222_">
				<use xlink:href="#SVGID_221_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_223_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_224_">
				<use xlink:href="#SVGID_223_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_225_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_226_">
				<use xlink:href="#SVGID_225_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_227_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_228_">
				<use xlink:href="#SVGID_227_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_229_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_230_">
				<use xlink:href="#SVGID_229_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_231_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_232_">
				<use xlink:href="#SVGID_231_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_233_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_234_">
				<use xlink:href="#SVGID_233_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_235_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_236_">
				<use xlink:href="#SVGID_235_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_237_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_238_">
				<use xlink:href="#SVGID_237_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_239_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_240_">
				<use xlink:href="#SVGID_239_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_241_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_242_">
				<use xlink:href="#SVGID_241_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_243_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_244_">
				<use xlink:href="#SVGID_243_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_245_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_246_">
				<use xlink:href="#SVGID_245_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_247_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_248_">
				<use xlink:href="#SVGID_247_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_249_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_250_">
				<use xlink:href="#SVGID_249_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_251_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_252_">
				<use xlink:href="#SVGID_251_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_253_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_254_">
				<use xlink:href="#SVGID_253_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_255_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_256_">
				<use xlink:href="#SVGID_255_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_257_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_258_">
				<use xlink:href="#SVGID_257_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_259_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_260_">
				<use xlink:href="#SVGID_259_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_261_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_262_">
				<use xlink:href="#SVGID_261_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_263_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_264_">
				<use xlink:href="#SVGID_263_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_265_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_266_">
				<use xlink:href="#SVGID_265_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_267_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_268_">
				<use xlink:href="#SVGID_267_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_269_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_270_">
				<use xlink:href="#SVGID_269_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_271_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_272_">
				<use xlink:href="#SVGID_271_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_273_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_274_">
				<use xlink:href="#SVGID_273_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_275_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_276_">
				<use xlink:href="#SVGID_275_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_277_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_278_">
				<use xlink:href="#SVGID_277_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_279_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_280_">
				<use xlink:href="#SVGID_279_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_281_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_282_">
				<use xlink:href="#SVGID_281_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_283_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_284_">
				<use xlink:href="#SVGID_283_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_285_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_286_">
				<use xlink:href="#SVGID_285_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_287_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_288_">
				<use xlink:href="#SVGID_287_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_289_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_290_">
				<use xlink:href="#SVGID_289_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_291_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_292_">
				<use xlink:href="#SVGID_291_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_293_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_294_">
				<use xlink:href="#SVGID_293_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_295_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_296_">
				<use xlink:href="#SVGID_295_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_297_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_298_">
				<use xlink:href="#SVGID_297_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_299_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_300_">
				<use xlink:href="#SVGID_299_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_301_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_302_">
				<use xlink:href="#SVGID_301_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_303_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_304_">
				<use xlink:href="#SVGID_303_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_305_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_306_">
				<use xlink:href="#SVGID_305_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_307_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_308_">
				<use xlink:href="#SVGID_307_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_309_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_310_">
				<use xlink:href="#SVGID_309_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_311_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_312_">
				<use xlink:href="#SVGID_311_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_313_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_314_">
				<use xlink:href="#SVGID_313_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_315_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_316_">
				<use xlink:href="#SVGID_315_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_317_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_318_">
				<use xlink:href="#SVGID_317_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_319_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_320_">
				<use xlink:href="#SVGID_319_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_321_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_322_">
				<use xlink:href="#SVGID_321_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_323_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_324_">
				<use xlink:href="#SVGID_323_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_325_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_326_">
				<use xlink:href="#SVGID_325_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_327_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_328_">
				<use xlink:href="#SVGID_327_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_329_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_330_">
				<use xlink:href="#SVGID_329_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_331_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_332_">
				<use xlink:href="#SVGID_331_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_333_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_334_">
				<use xlink:href="#SVGID_333_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_335_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_336_">
				<use xlink:href="#SVGID_335_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_337_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_338_">
				<use xlink:href="#SVGID_337_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_339_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_340_">
				<use xlink:href="#SVGID_339_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_341_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_342_">
				<use xlink:href="#SVGID_341_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_343_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_344_">
				<use xlink:href="#SVGID_343_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_345_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_346_">
				<use xlink:href="#SVGID_345_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_347_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_348_">
				<use xlink:href="#SVGID_347_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_349_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_350_">
				<use xlink:href="#SVGID_349_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_351_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_352_">
				<use xlink:href="#SVGID_351_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_353_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_354_">
				<use xlink:href="#SVGID_353_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_355_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_356_">
				<use xlink:href="#SVGID_355_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_357_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_358_">
				<use xlink:href="#SVGID_357_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_359_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_360_">
				<use xlink:href="#SVGID_359_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_361_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_362_">
				<use xlink:href="#SVGID_361_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_363_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_364_">
				<use xlink:href="#SVGID_363_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_365_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_366_">
				<use xlink:href="#SVGID_365_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_367_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_368_">
				<use xlink:href="#SVGID_367_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_369_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_370_">
				<use xlink:href="#SVGID_369_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_371_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_372_">
				<use xlink:href="#SVGID_371_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_373_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_374_">
				<use xlink:href="#SVGID_373_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_375_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_376_">
				<use xlink:href="#SVGID_375_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_377_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_378_">
				<use xlink:href="#SVGID_377_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_379_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_380_">
				<use xlink:href="#SVGID_379_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_381_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_382_">
				<use xlink:href="#SVGID_381_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_383_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_384_">
				<use xlink:href="#SVGID_383_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_385_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_386_">
				<use xlink:href="#SVGID_385_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_387_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_388_">
				<use xlink:href="#SVGID_387_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_389_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_390_">
				<use xlink:href="#SVGID_389_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_391_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_392_">
				<use xlink:href="#SVGID_391_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_393_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_394_">
				<use xlink:href="#SVGID_393_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_395_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_396_">
				<use xlink:href="#SVGID_395_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_397_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_398_">
				<use xlink:href="#SVGID_397_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_399_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_400_">
				<use xlink:href="#SVGID_399_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_401_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_402_">
				<use xlink:href="#SVGID_401_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_403_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_404_">
				<use xlink:href="#SVGID_403_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_405_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_406_">
				<use xlink:href="#SVGID_405_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_407_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_408_">
				<use xlink:href="#SVGID_407_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_409_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_410_">
				<use xlink:href="#SVGID_409_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_411_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_412_">
				<use xlink:href="#SVGID_411_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_413_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_414_">
				<use xlink:href="#SVGID_413_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_415_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_416_">
				<use xlink:href="#SVGID_415_"  style="overflow:visible;"/>
			</clipPath>
		</g>
		<g>
			<defs>
				<polyline id="SVGID_417_" points="-21.4,2231.8 -21.4,-15.3 1381.9,-15.3 1381.9,2231.8 -21.4,2231.8 				"/>
			</defs>
			<clipPath id="SVGID_418_">
				<use xlink:href="#SVGID_417_"  style="overflow:visible;"/>
			</clipPath>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<text transform="matrix(1 0 0 1 85.5434 139.8651)"><tspan x="0" y="0" class="st4 st2 st13">CONTENEDORES</tspan><tspan x="7.4" y="14.1" class="st4 st2 st13">Y MEDIDORES</tspan></text>
	<path class="st14" d="M213.6,79.9l108.8-37.2c168.4,104.9,538.6,366.8,793.5,857.5c261.6,503.5,257.1,969.2,243.9,1166.9
		l-214.2-0.2c13.1-179,20.1-605.1-218.4-1065.5c-248.8-480.2-622.5-723-777.3-812.1L213.6,79.9z"/>
</g>
</svg>


	</div>

</body>

</html>