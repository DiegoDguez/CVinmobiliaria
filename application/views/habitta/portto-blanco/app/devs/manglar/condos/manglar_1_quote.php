<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

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
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{manglar.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{manglar.month}} y paga la primera mensualidad hasta {{manglar.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{manglar.month + ' ' + manglar.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h1 class="center-align">Manglar 1</h1>
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

		<svg version="1.1" id="MANGLAR_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 2258.5" style="enable-background:new 0 0 1366 2258.5; margin:0 20px" xml:space="preserve">
	<style type="text/css">
		.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
		.st1{fill:#FFFFFF;}
		.st2{font-family:'CenturyGothic';}
		.st3{font-size:12.6367px;}
		.st4{font-size:12.6366px;}
		.st5{fill:#FCCF00;}
		.st6{font-family:'CenturyGothic-Bold';}
		.st7{font-size:13.3017px;}
		.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
		.st9{font-size:13.3018px;}
		.st10{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
		.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
		.st12{fill:none;stroke:#FFFFFF;stroke-width:2.4941;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
		.st13{font-size:12.6365px;}
		.st14{font-size:13.3016px;}
		.st15{fill:#03234B;}
		.st16{font-size:8.354px;}
		.st17{font-size:8.1047px;}
		.st18{fill:none;stroke:#002856;stroke-width:6.6508;stroke-miterlimit:10;}
	</style>
	<g id="MACHOTE">
	</g>
	<g id="MAPA_BASE_1_">
		<g>
			<defs>
				<path id="SVGID_1_" d="M1031.6,2174.3c0,0,220.8-31.5,333-38V256.9H889.3V5.6c0,0,0,0,0.1,0c2,2.8-245.9,192.6-462.3,338.6
					C325.7,412.7,182.9,504.2,3.4,603.6c192.3,550.4,384.5,1100.7,576.8,1651.1c81.7-16,163.5-31.9,245.2-47.9"/>
			</defs>
			<clipPath id="SVGID_2_">
				<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
			</clipPath>
			<g transform="matrix(1 0 0 1 0 0)" style="clip-path:url(#SVGID_2_);">
				
					<image style="overflow:visible;" width="6039" height="6321" xlink:href="381C692.png"  transform="matrix(0.4106 0 0 0.4106 -1077.0452 -38.3945)">
				</image>
			</g>
		</g>
		<image style="overflow:visible;" width="1366" height="2256" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/manglar/condos/manglar_1.jpg" >
		</image>
	</g>
	<g id="ISLA_A">
		<g id="A-01_1_" class="property__active" ng-class="manglar.inmovablesClassList[0]" ng-click="manglar.showPropertyData(46, '1')">
			<polyline id="A-L01_1_" class="property pb-sprite-1" points="1114.2,2161.8 1093.1,1995.9 1178.3,1985.7 1197.2,2151.8 1114.2,2161.8 		"/>
			<text transform="matrix(0.993 -0.1184 0.1184 0.993 1122.5868 2003.8599)"><tspan x="0" y="0" class="st1 st2 st3">10.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.993 -0.1184 0.1184 0.993 1140.9838 2156.6255)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1253 0.9921 -0.9921 0.1253 1104.1472 2064.1255)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1115 0.9938 -0.9938 0.1115 1132.0935 2049.2161)"><tspan x="0" y="0" class="st1 st2 st4">20</tspan><tspan x="14" y="0" class="st1 st2 st4">2.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1115 0.9938 -0.9938 0.1115 1150.5679 2064.2917)" class="st5 st6 st7">01</text>
			</g>
		</g>
		<g id="A-02_1_"  class="property__active" ng-class="manglar.inmovablesClassList[1]" ng-click="manglar.showPropertyData(46, '2')">
			<polyline id="A-L02_1_" class="property pb-sprite-2" points="1197.2,2151.8 1178.3,1985.7 1263.7,1976.6 1280.3,2142.9 1197.2,2151.8 		"/>
			<text transform="matrix(0.9945 -0.1045 0.1045 0.9945 1207.5938 1993.4481)"><tspan x="0" y="0" class="st1 st2 st4">10.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.9945 -0.1045 0.1045 0.9945 1223.9348 2146.459)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1115 0.9938 -0.9938 0.1115 1189.1846 2053.9548)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1115 0.9938 -0.9938 0.1115 1217.2062 2036.6414)"><tspan x="0" y="0" class="st1 st2 st4">20</tspan><tspan x="14" y="0" class="st1 st2 st4">2.69 m2</tspan></text>
			<g>
				<text transform="matrix(9.931954e-02 0.9951 -0.9951 9.931954e-02 1234.4017 2049.9561)" class="st5 st6 st9">02</text>
			</g>
		</g>
		<g id="A-03_1_"  class="property__active" ng-class="manglar.inmovablesClassList[2]" ng-click="manglar.showPropertyData(46, '3')">
			<polyline id="A-L03_1_" class="property pb-sprite-1" points="1280.3,2142.9 1263.7,1976.6 1363.6,1967.3 1363.6,2135.2 1280.3,2142.9 		"/>
			<text transform="matrix(0.9959 -9.063042e-02 9.063042e-02 0.9959 1299.7405 1984.0162)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.9957 -9.237043e-02 9.237043e-02 0.9957 1306.8767 2137.8135)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1361.9734 2065.8943)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(9.931954e-02 0.9951 -0.9951 9.931954e-02 1274.3884 2045.0836)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(9.931954e-02 0.9951 -0.9951 9.931954e-02 1306.3925 2021.3335)"><tspan x="0" y="0" class="st1 st2 st3">21</tspan><tspan x="14" y="0" class="st1 st2 st3">9.98 m2</tspan></text>
			<g>
				<text transform="matrix(9.931954e-02 0.9951 -0.9951 9.931954e-02 1324.594 2041.7831)" class="st5 st6 st9">03</text>
			</g>
			<g>
				<polyline class="st10" points="1316.9,1989.9 1325.8,1998.8 1316.9,2007.6 1316.9,1989.9 			"/>
				<polyline class="st11" points="1316.9,1989.9 1316.9,2007.6 1308,1998.8 1316.9,1989.9 			"/>
			</g>
		</g>
		<g id="DIVISIONES_13_">
			<line class="st12" x1="1263.7" y1="1976.6" x2="1280.3" y2="2142.9"/>
			<line class="st12" x1="1178.3" y1="1985.7" x2="1197.2" y2="2151.8"/>
			<line class="st12" x1="1093.1" y1="1995.9" x2="1098.4" y2="2037.4"/>
		</g>
	</g>
	<g id="ISLA_B">
		<g id="B-04"  class="property__active" ng-class="manglar.inmovablesClassList[3]" ng-click="manglar.showPropertyData(46, '4')">
			<polyline id="B-L04" class="property pb-sprite-2" points="1196.4,1799.4 1363.6,1799.4 1363.6,1889.3 1279.9,1896.8 1196.4,1905.4 1196.4,1799.4 
						"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1858.9813)"><tspan x="0" y="0" class="st1 st2 st4">10.7</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1867.0194)"><tspan x="0" y="0" class="st1 st2 st4">12.6</tspan><tspan x="24.4" y="0" class="st1 st2 st4">8</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1810.7997)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.9956 -9.411017e-02 9.411017e-02 0.9956 1264.9623 1894.4342)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1856.5721)"><tspan x="0" y="0" class="st1 st2 st4">23</tspan><tspan x="14" y="0" class="st1 st2 st4">3.57 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1838.8397)" class="st5 st6 st7">04</text>
			</g>
			<g>
				<polyline class="st10" points="1226.2,1843 1235.1,1851.9 1226.2,1860.7 1226.2,1843 			"/>
				<polyline class="st11" points="1226.2,1843 1226.2,1860.7 1217.3,1851.9 1226.2,1843 			"/>
			</g>
		</g>
		<g id="B-05"  class="property__active" ng-class="manglar.inmovablesClassList[4]" ng-click="manglar.showPropertyData(46, '5')">
			<polyline id="B-L05" class="property pb-sprite-1" points="1196.4,1799.4 1196.4,1707.4 1363.6,1707.4 1363.6,1799.4 1196.4,1799.4 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1768.0194)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1768.0194)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1718.8319)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1757.5663)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1741.5536)" class="st5 st6 st7">05</text>
			</g>
		</g>
		<g id="B-06"  class="property__active" ng-class="manglar.inmovablesClassList[5]" ng-click="manglar.showPropertyData(46, '6')">
			<polyline id="B-L06" class="property pb-sprite-2" points="1196.4,1707.4 1196.4,1615.4 1363.6,1615.4 1363.6,1707.4 1196.4,1707.4 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1676.0458)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1676.0575)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1626.8651)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1665.579)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1649.7538)" class="st5 st6 st7">06</text>
			</g>
		</g>
		<g id="B-07"  class="property__active" ng-class="manglar.inmovablesClassList[6]" ng-click="manglar.showPropertyData(46, '7')">
			<polyline id="B-L07" class="property pb-sprite-1" points="1196.4,1615.4 1196.4,1523.5 1363.6,1523.5 1363.6,1615.4 1196.4,1615.4 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1584.0721)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1584.0819)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1534.8964)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1573.618)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1555.9335)" class="st5 st6 st7">07</text>
			</g>
		</g>
		<g id="B-08"  class="property__active" ng-class="manglar.inmovablesClassList[7]" ng-click="manglar.showPropertyData(46, '8')">
			<polyline id="B-L08" class="property pb-sprite-2" points="1196.4,1523.5 1196.4,1431.5 1363.6,1431.5 1363.6,1523.5 1196.4,1523.5 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1492.1073)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1492.1073)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1442.9237)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1481.6464)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1467.2723)" class="st5 st6 st7">08</text>
			</g>
		</g>
		<g id="B-09"  class="property__active" ng-class="manglar.inmovablesClassList[8]" ng-click="manglar.showPropertyData(46, '9')">
			<polyline id="B-L09" class="property pb-sprite-1" points="1196.4,1431.5 1196.4,1339.5 1363.6,1339.5 1363.6,1431.5 1196.4,1431.5 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1400.1346)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1400.1346)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1350.9608)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1252.7249 1389.6757)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1373.8192)" class="st5 st6 st7">09</text>
			</g>
		</g>
		<g id="B-10"  class="property__active" ng-class="manglar.inmovablesClassList[9]" ng-click="manglar.showPropertyData(46, '10')">
			<polyline id="B-L10" class="property pb-sprite-2" points="1196.4,1339.5 1196.4,1255.9 1363.6,1255.9 1363.6,1339.5 1196.4,1339.5 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1312.3495)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1312.3495)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1267.3475)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.975 1304.0591)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1287.619)" class="st5 st6 st7">10</text>
			</g>
		</g>
		<g id="B-11"  class="property__active" ng-class="manglar.inmovablesClassList[10]" ng-click="manglar.showPropertyData(46, '11')">
			<polyline id="B-L11" class="property pb-sprite-1" points="1196.4,1255.9 1196.4,1172.3 1363.6,1172.3 1363.6,1255.9 1196.4,1255.9 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1228.7313)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1228.7313)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1183.7421)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9749 1220.4475)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1203.7938)" class="st5 st6 st7">11</text>
			</g>
		</g>
		<g id="B-12"  class="property__active" ng-class="manglar.inmovablesClassList[11]" ng-click="manglar.showPropertyData(46, '12')">
			<polyline id="B-L12" class="property pb-sprite-2" points="1196.4,1172.3 1196.4,1088.7 1363.6,1088.7 1363.6,1172.3 1196.4,1172.3 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1145.1317)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1145.1317)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1100.1317)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9795 1136.8291)" class="st1 st2 st3">200.00 m2</text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1120.7577)" class="st5 st6 st7">12</text>
			</g>
		</g>
		<g id="B-13"  class="property__active" ng-class="manglar.inmovablesClassList[12]" ng-click="manglar.showPropertyData(46, '13')">
			<polyline id="B-L13" class="property pb-sprite-1" points="1196.4,1088.7 1196.4,1005.1 1363.6,1005.1 1363.6,1088.7 1196.4,1088.7 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 1061.5155)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 1061.5155)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 1016.5214)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9794 1053.2156)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 1036.8358)" class="st5 st6 st7">13</text>
			</g>
		</g>
		<g id="B-14"  class="property__active" ng-class="manglar.inmovablesClassList[13]" ng-click="manglar.showPropertyData(46, '14')">
			<polyline id="B-L14" class="property pb-sprite-2" points="1196.4,1005.1 1196.4,921.5 1363.6,921.5 1363.6,1005.1 1196.4,1005.1 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 977.912)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 977.912)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 932.9052)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9812 969.6127)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 952.4891)" class="st5 st6 st7">14</text>
			</g>
		</g>
		<g id="B-15"  class="property__active" ng-class="manglar.inmovablesClassList[14]" ng-click="manglar.showPropertyData(46, '15')">
			<polyline id="B-L15" class="property pb-sprite-1" points="1196.4,921.5 1196.4,837.9 1363.6,837.9 1363.6,921.5 1196.4,921.5 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 894.3007)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 894.3007)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 849.2997)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.978 886.0002)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 869.7977)" class="st5 st6 st7">15</text>
			</g>
		</g>
		<g id="B-16"  class="property__active" ng-class="manglar.inmovablesClassList[15]" ng-click="manglar.showPropertyData(46, '16')">
			<polyline id="B-L16" class="property pb-sprite-2" points="1196.4,837.9 1196.4,754.2 1363.6,754.2 1363.6,837.9 1196.4,837.9 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 810.6835)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 810.6932)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 765.6893)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9833 802.3906)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 785.0048)" class="st5 st6 st7">16</text>
			</g>
		</g>
		<g id="B-17"  class="property__active" ng-class="manglar.inmovablesClassList[16]" ng-click="manglar.showPropertyData(46, '17')">
			<polyline id="B-L17" class="property pb-sprite-1" points="1196.4,754.2 1196.4,670.6 1363.6,670.6 1363.6,754.2 1196.4,754.2 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 727.0809)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 727.0809)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 682.0829)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9763 718.777)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 700.3319)" class="st5 st6 st7">17</text>
			</g>
		</g>
		<g id="B-18"  class="property__active" ng-class="manglar.inmovablesClassList[17]" ng-click="manglar.showPropertyData(46, '18')">
			<polyline id="B-L18" class="property pb-sprite-2" points="1196.4,670.6 1196.4,587 1363.6,587 1363.6,670.6 1196.4,670.6 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 643.4677)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 643.4774)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 598.4725)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9849 635.1683)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 618.9764)" class="st5 st6 st7">18</text>
			</g>
		</g>
		<g id="B-19"  class="property__active" ng-class="manglar.inmovablesClassList[18]" ng-click="manglar.showPropertyData(46, '19')">
			<polyline id="B-L19" class="property pb-sprite-1" points="1196.4,587 1196.4,503.4 1363.6,503.4 1363.6,587 1196.4,587 		"/>
			<text transform="matrix(0 -1 1 0 1359.9041 559.8583)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1209.719 559.8583)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1265.344 514.8612)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 1252.9803 551.5529)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1273.3748 535.2352)" class="st5 st6 st7">19</text>
			</g>
			<g>
				<polyline class="st10" points="1226.2,536.4 1235.1,545.2 1226.2,554.1 1226.2,536.4 			"/>
				<polyline class="st11" points="1226.2,536.4 1226.2,554.1 1217.3,545.2 1226.2,536.4 			"/>
			</g>
		</g>
		<g id="DIVISONES">
			<line class="st12" x1="1196.4" y1="1799.4" x2="1363.9" y2="1799.4"/>
			<line class="st12" x1="1196.4" y1="1707.4" x2="1363.9" y2="1707.4"/>
			<line class="st12" x1="1196.4" y1="1615.4" x2="1363.9" y2="1615.4"/>
			<line class="st12" x1="1196.4" y1="1523.5" x2="1363.9" y2="1523.5"/>
			<line class="st12" x1="1196.4" y1="1431.5" x2="1363.9" y2="1431.5"/>
			<line class="st12" x1="1196.4" y1="1339.5" x2="1363.9" y2="1339.5"/>
			<line class="st12" x1="1196.4" y1="1255.9" x2="1363.9" y2="1255.9"/>
			<line class="st12" x1="1196.4" y1="1172.3" x2="1363.9" y2="1172.3"/>
			<line class="st12" x1="1196.4" y1="1088.7" x2="1363.9" y2="1088.7"/>
			<line class="st12" x1="1196.4" y1="1005.1" x2="1363.9" y2="1005.1"/>
			<line class="st12" x1="1196.4" y1="921.5" x2="1363.9" y2="921.5"/>
			<line class="st12" x1="1196.4" y1="837.9" x2="1363.9" y2="837.9"/>
			<line class="st12" x1="1196.4" y1="754.2" x2="1363.9" y2="754.2"/>
			<line class="st12" x1="1196.4" y1="670.6" x2="1363.9" y2="670.6"/>
			<line class="st12" x1="1196.4" y1="587" x2="1363.9" y2="587"/>
		</g>
	</g>
	<g id="ISLA_C">
		<g id="C-20_1_"  class="property__active" ng-class="manglar.inmovablesClassList[19]" ng-click="manglar.showPropertyData(46, '20')">
			<polyline id="C-L20_1_" class="property pb-sprite-2" points="1363.6,425.7 1264.8,425.7 1264.8,258.4 1363.6,258.4 1363.6,425.7 		"/>
			<text transform="matrix(1 0 0 1 1299.5637 421.223)"><tspan x="0" y="0" class="st1 st2 st4">11.8</tspan><tspan x="24.4" y="0" class="st1 st2 st4">1</tspan></text>
			<text transform="matrix(1 0 0 1 1299.5637 273.1078)"><tspan x="0" y="0" class="st1 st2 st4">11.8</tspan><tspan x="24.4" y="0" class="st1 st2 st4">1</tspan></text>
			<text transform="matrix(0 -1 1 0 1360.1409 356.6917)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1277.2898 356.6917)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 1326.8384 369.0804)" class="st1 st2 st13">236.26 m2</text>
			<g>
				<text transform="matrix(0 -1 1 0 1305.6199 348.6664)" class="st5 st6 st7">20</text>
			</g>
			<g>
				<polyline class="st10" points="1314.2,381.6 1323.1,390.4 1314.2,399.3 1314.2,381.6 			"/>
				<polyline class="st11" points="1314.2,381.6 1314.2,399.3 1305.3,390.4 1314.2,381.6 			"/>
			</g>
		</g>
		<g id="C-21_1_"  class="property__active" ng-class="manglar.inmovablesClassList[20]" ng-click="manglar.showPropertyData(46, '21')">
			<polyline id="C-L21_1_" class="property pb-sprite-1" points="1264.8,425.7 1172.9,425.7 1172.9,258.4 1264.8,258.4 1264.8,425.7 		"/>
			<text transform="matrix(1 0 0 1 1204.1873 421.223)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1204.1873 273.1078)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1185.3074 356.6917)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 1228.0525 369.0785)" class="st1 st2 st13">220.00 m2</text>
			<g>
				<text transform="matrix(0 -1 1 0 1207.6824 348.6664)" class="st5 st6 st7">21</text>
			</g>
		</g>
		<g id="C-22_1_"  class="property__active" ng-class="manglar.inmovablesClassList[21]" ng-click="manglar.showPropertyData(46, '22')">
			<polyline id="C-L22_1_" class="property pb-sprite-2" points="1172.9,425.7 1080.9,425.7 1080.9,258.4 1172.9,258.4 1172.9,425.7 		"/>
			<text transform="matrix(1 0 0 1 1112.2151 421.223)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1112.2151 273.1078)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1093.303 356.6917)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 1136.0914 369.0801)" class="st1 st2 st13">220.00 m2</text>
			<g>
				<text transform="matrix(0 -1 1 0 1118.8723 350.2342)" class="st5 st6 st7">22</text>
			</g>
		</g>
		<g id="C-23_1_"  class="property__active" ng-class="manglar.inmovablesClassList[22]" ng-click="manglar.showPropertyData(46, '23')">
			<polyline id="C-L23_1_" class="property pb-sprite-1" points="1080.9,425.7 988.9,425.7 988.9,258.4 1080.9,258.4 1080.9,425.7 		"/>
			<text transform="matrix(1 0 0 1 1020.2492 421.223)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 1020.2492 273.1078)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 1044.1143 369.0803)" class="st1 st2 st13">220.00 m2</text>
			<g>
				<text transform="matrix(0 -1 1 0 1026.427 351.0702)" class="st5 st6 st7">23</text>
			</g>
		</g>
		<g id="C-24_1_"  class="property__active" ng-class="manglar.inmovablesClassList[23]" ng-click="manglar.showPropertyData(46, '24')">
			<polyline id="C-L24_1_" class="property pb-sprite-2" points="988.9,425.7 888.6,425.7 888.6,258.4 988.9,258.4 988.9,425.7 		"/>
			<text transform="matrix(1 0 0 1 924.1052 421.223)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 924.1052 273.1078)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 902.2829 356.6869)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 952.1483 369.0756)" class="st1 st2 st13">240.00 m2</text>
			<g>
				<text transform="matrix(0 -1 1 0 932.5876 348.6634)" class="st5 st6 st7">24</text>
			</g>
		</g>
		<g id="C-25_1_"  class="property__active" ng-class="manglar.inmovablesClassList[24]" ng-click="manglar.showPropertyData(46, '25')">
			<polyline id="C-L25_1_" class="property pb-sprite-1" points="721.4,425.7 721.4,325.3 888.6,325.3 888.6,425.7 721.4,425.7 		"/>
			<text transform="matrix(1 0 0 1 790.3322 421.223)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 733.1887 390.1351)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 881.9372 390.1351)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 777.7121 379.6742)" class="st1 st2 st4">240.00 m2</text>
			<g>
				<text transform="matrix(1 0 0 1 798.3537 365.4041)" class="st5 st6 st7">25</text>
			</g>
			<g>
				<polyline class="st10" points="755.6,366.6 764.5,375.5 755.6,384.4 755.6,366.6 			"/>
				<polyline class="st11" points="755.6,366.6 755.6,384.4 746.7,375.5 755.6,366.6 			"/>
			</g>
		</g>
		<g id="C-26_1_"  class="property__active" ng-class="manglar.inmovablesClassList[25]" ng-click="manglar.showPropertyData(46, '26')">
			<polyline id="C-L26_1_" class="property pb-sprite-2" points="721.4,325.3 721.4,225 888.6,225 888.6,325.3 721.4,325.3 		"/>
			<text transform="matrix(0 -1 1 0 733.1887 289.8006)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 881.9372 289.8006)"><tspan x="0" y="0" class="st1 st2 st4">12.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 790.3322 321.7762)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 777.7121 283.9388)"><tspan x="0" y="0" class="st1 st2 st4">24</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 798.3537 269.1742)" class="st5 st6 st7">26</text>
			</g>
		</g>
		<g id="C-27_1_"  class="property__active" ng-class="manglar.inmovablesClassList[26]" ng-click="manglar.showPropertyData(46, '27')">
			<polyline id="C-L27_1_" class="property pb-sprite-1" points="721.4,138.5 777.6,95.8 833.3,52.4 888.6,8.4 888.6,225 721.4,225 721.4,138.5 		"/>
			<text transform="matrix(0 -1 1 0 733.1887 196.4061)"><tspan x="0" y="0" class="st1 st2 st4">10.3</tspan><tspan x="24.4" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0 -1 1 0 881.9372 131.3353)"><tspan x="0" y="0" class="st1 st2 st4">25.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">1</tspan></text>
			<text transform="matrix(0.7902 -0.6129 0.6129 0.7902 803.6081 95.4799)"><tspan x="0" y="0" class="st1 st2 st3">25.3</tspan><tspan x="24.4" y="0" class="st1 st2 st3">4</tspan></text>
			<text transform="matrix(1 0 0 1 790.3322 219.6161)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 777.7121 168.8539)"><tspan x="0" y="0" class="st1 st2 st4">36</tspan><tspan x="14" y="0" class="st1 st2 st4">0.67 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 798.3537 148.5614)" class="st5 st6 st7">27</text>
			</g>
			<g>
				<polyline class="st10" points="755.6,172.9 764.5,181.8 755.6,190.6 755.6,172.9 			"/>
				<polyline class="st11" points="755.6,172.9 755.6,190.6 746.7,181.8 755.6,172.9 			"/>
			</g>
		</g>
		<g id="DIVISIONES_12_">
			<line class="st12" x1="1264.8" y1="425.7" x2="1264.8" y2="258.4"/>
			<line class="st12" x1="721.4" y1="325.3" x2="888.6" y2="325.3"/>
			<line class="st12" x1="721.4" y1="225" x2="888.6" y2="225"/>
			<line class="st12" x1="1172.9" y1="425.7" x2="1172.9" y2="258.4"/>
			<line class="st12" x1="1080.9" y1="425.7" x2="1080.9" y2="258.4"/>
			<line class="st12" x1="988.9" y1="425.7" x2="988.9" y2="258.4"/>
			<text transform="matrix(0 -1 1 0 1001.6017 356.6917)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<line class="st12" x1="888.6" y1="425.7" x2="888.6" y2="258.4"/>
		</g>
	</g>
	<g id="ISLA_D">
		<g id="D-28"  class="property__active" ng-class="manglar.inmovablesClassList[27]" ng-click="manglar.showPropertyData(46, '28')">
			<polyline id="D-L28" class="property pb-sprite-1" points="441.5,337.2 509.5,291 576.8,244 643.6,196.1 643.6,503.2 581,545.6 441.5,337.2 		"/>
			<text transform="matrix(0.8201 -0.5721 0.5721 0.8201 540.3273 288.6965)"><tspan x="0" y="0" class="st1 st2 st4">29.4</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.8281 -0.5606 0.5606 0.8281 598.403 524.1263)"><tspan x="0" y="0" class="st1 st2 st4">9.0</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0 -1 1 0 636.2936 364.2635)"><tspan x="0" y="0" class="st1 st2 st4">36.7</tspan><tspan x="24.4" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.5563 0.831 -0.831 0.5563 509.826 424.567)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.5563 0.831 -0.831 0.5563 534.9919 377.7312)"><tspan x="0" y="0" class="st1 st2 st4">57</tspan><tspan x="14" y="0" class="st1 st2 st4">7.03 m2</tspan></text>
			<g>
				<text transform="matrix(0.5563 0.831 -0.831 0.5563 563.7819 378.7404)" class="st5 st6 st7">28</text>
			</g>
			<g>
				<polyline class="st10" points="598.9,482.8 607.7,491.7 598.9,500.6 598.9,482.8 			"/>
				<polyline class="st11" points="598.9,482.8 598.9,500.6 590,491.7 598.9,482.8 			"/>
			</g>
		</g>
		<g id="D-29"  class="property__active" ng-class="manglar.inmovablesClassList[28]" ng-click="manglar.showPropertyData(46, '29')">
			<polyline id="D-L29" class="property pb-sprite-2" points="517.2,587.8 380.1,377.8 441.5,337.2 581,545.6 517.2,587.8 		"/>
			<text transform="matrix(0.8348 -0.5505 0.5505 0.8348 409.9625 377.0045)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8348 -0.5505 0.5505 0.8348 535.1716 566.4355)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.5461 0.8377 -0.8377 0.5461 444.9482 467.7471)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.5563 0.831 -0.831 0.5563 459.0699 443.3764)"><tspan x="0" y="0" class="st1 st2 st4">26</tspan><tspan x="14" y="0" class="st1 st2 st4">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.5563 0.831 -0.831 0.5563 485.095 448.2097)" class="st5 st6 st7">29</text>
			</g>
			<g>
				<polyline class="st10" points="532.5,527 541.3,535.9 532.5,544.7 532.5,527 			"/>
				<polyline class="st11" points="532.5,527 532.5,544.7 523.6,535.9 532.5,527 			"/>
			</g>
		</g>
		<g id="D-30"  class="property__active" ng-class="manglar.inmovablesClassList[29]" ng-click="manglar.showPropertyData(46, '30')">
			<polyline id="D-L30" class="property pb-sprite-1" points="517.2,587.8 452.9,629.3 318.2,417.6 380.1,377.8 517.2,587.8 		"/>
			<text transform="matrix(0.8415 -0.5402 0.5402 0.8415 348.0759 417.0077)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8415 -0.5402 0.5402 0.8415 471.0617 607.8934)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.5255 0.8508 -0.8508 0.5255 379.6736 504.2339)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.5461 0.8377 -0.8377 0.5461 394.223 487.1158)"><tspan x="0" y="0" class="st1 st2 st4">26</tspan><tspan x="14" y="0" class="st1 st2 st4">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.5461 0.8377 -0.8377 0.5461 422.2094 490.0765)" class="st5 st6 st7">30</text>
			</g>
			<g>
				<polyline class="st10" points="467.2,567.9 476.1,576.7 467.2,585.6 467.2,567.9 			"/>
				<polyline class="st11" points="467.2,567.9 467.2,585.6 458.3,576.7 467.2,567.9 			"/>
			</g>
		</g>
		<g id="D-31"  class="property__active" ng-class="manglar.inmovablesClassList[30]" ng-click="manglar.showPropertyData(46, '31')">
			<polyline id="D-L31" class="property pb-sprite-2" points="388.1,670 255.9,456.8 318.2,417.6 452.9,629.3 388.1,670 		"/>
			<text transform="matrix(0.8471 -0.5314 0.5314 0.8471 285.8035 456.4373)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8471 -0.5314 0.5314 0.8471 406.5465 648.7513)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.5255 0.8508 -0.8508 0.5255 318.111 548.386)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.5358 0.8443 -0.8443 0.5358 335.6196 525.4265)"><tspan x="0" y="0" class="st1 st2 st3">26</tspan><tspan x="14" y="0" class="st1 st2 st3">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.5255 0.8508 -0.8508 0.5255 360.6582 527.6202)" class="st5 st6 st7">31</text>
			</g>
			<g>
				<polyline class="st10" points="402.6,612.7 411.5,621.6 402.6,630.4 402.6,612.7 			"/>
				<polyline class="st11" points="402.6,612.7 402.6,630.4 393.7,621.6 402.6,612.7 			"/>
			</g>
		</g>
		<g id="D-32"  class="property__active" ng-class="manglar.inmovablesClassList[31]" ng-click="manglar.showPropertyData(46, '32')">
			<polyline id="D-L32" class="property pb-sprite-1" points="193.1,495.1 255.9,456.8 388.1,670 322.8,709.9 193.1,495.1 		"/>
			<text transform="matrix(0.8536 -0.521 0.521 0.8536 223.0235 495.25)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8536 -0.521 0.521 0.8536 341.5069 688.9588)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.5165 0.8563 -0.8563 0.5165 255.0969 587.2783)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.5165 0.8563 -0.8563 0.5165 270.7981 560.0734)"><tspan x="0" y="0" class="st1 st2 st4">26</tspan><tspan x="14" y="0" class="st1 st2 st4">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.5255 0.8508 -0.8508 0.5255 295.7805 568.0957)" class="st5 st6 st7">32</text>
			</g>
			<g>
				<polyline class="st10" points="337.6,650.2 346.5,659 337.6,667.9 337.6,650.2 			"/>
				<polyline class="st11" points="337.6,650.2 337.6,667.9 328.8,659 337.6,650.2 			"/>
			</g>
		</g>
		<g id="D-33"  class="property__active" ng-class="manglar.inmovablesClassList[32]" ng-click="manglar.showPropertyData(46, '33')">
			<polyline id="D-L33" class="property pb-sprite-2" points="322.8,709.9 257.1,749 129.9,532.8 193.1,495.1 322.8,709.9 		"/>
			<text transform="matrix(0.8599 -0.5105 0.5105 0.8599 159.5786 533.1404)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8599 -0.5105 0.5105 0.8599 275.7878 728.2267)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.506 0.8625 -0.8625 0.506 189.9751 625.5829)"><tspan x="0" y="0" class="st1 st2 st13">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.5165 0.8563 -0.8563 0.5165 206.1658 599.4506)"><tspan x="0" y="0" class="st1 st2 st4">26</tspan><tspan x="14" y="0" class="st1 st2 st4">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.5165 0.8563 -0.8563 0.5165 229.9123 605.9626)" class="st5 st6 st7">33</text>
			</g>
			<g>
				<polyline class="st10" points="271.7,688.1 280.6,697 271.7,705.9 271.7,688.1 			"/>
				<polyline class="st11" points="271.7,688.1 271.7,705.9 262.8,697 271.7,688.1 			"/>
			</g>
		</g>
		<g id="D-34"  class="property__active" ng-class="manglar.inmovablesClassList[33]" ng-click="manglar.showPropertyData(46, '34')">
			<polyline id="D-L34" class="property pb-sprite-1" points="257.1,749 190.9,787.4 66.3,569.7 129.9,532.8 257.1,749 		"/>
			<text transform="matrix(0.8652 -0.5015 0.5015 0.8652 96.0657 570.4777)"><tspan x="0" y="0" class="st1 st2 st4">8.8</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8652 -0.5015 0.5015 0.8652 210.0037 766.9113)"><tspan x="0" y="0" class="st1 st2 st4">9.1</tspan><tspan x="17.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.4955 0.8686 -0.8686 0.4955 126.3936 662.8831)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.506 0.8625 -0.8625 0.506 141.3888 638.2823)"><tspan x="0" y="0" class="st1 st2 st13">26</tspan><tspan x="14" y="0" class="st1 st2 st13">9.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.506 0.8625 -0.8625 0.506 168.7626 643.3519)" class="st5 st6 st14">34</text>
			</g>
			<g>
				<polyline class="st10" points="207,724.5 215.9,733.4 207,742.3 207,724.5 			"/>
				<polyline class="st11" points="207,724.5 207,742.3 198.1,733.4 207,724.5 			"/>
			</g>
		</g>
		<g id="D-35"  class="property__active" ng-class="manglar.inmovablesClassList[34]" ng-click="manglar.showPropertyData(46, '35')">
			<polyline id="D-L35" class="property pb-sprite-2" points="190.9,787.4 139.7,816.4 88.3,844.9 4.4,604.7 66.3,569.7 190.9,787.4 		"/>
			<text transform="matrix(0.8712 -0.4909 0.4909 0.8712 32.83 606.2006)"><tspan x="0" y="0" class="st1 st2 st13">8.5</tspan><tspan x="17.4" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 122.9037 816.3011)"><tspan x="0" y="0" class="st1 st2 st4">14.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 46.5127 709.5317)"><tspan x="0" y="0" class="st1 st2 st3">30.4</tspan><tspan x="24.4" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.4955 0.8686 -0.8686 0.4955 75.9622 682.395)"><tspan x="0" y="0" class="st1 st2 st4">33</tspan><tspan x="14" y="0" class="st1 st2 st4">8.40 m2</tspan></text>
			<g>
				<text transform="matrix(0.4955 0.8686 -0.8686 0.4955 97.5684 690.9113)" class="st5 st6 st7">35</text>
			</g>
			<g>
				<polyline class="st10" points="125.7,771.3 134.5,780.2 125.7,789 125.7,771.3 			"/>
				<polyline class="st11" points="125.7,771.3 125.7,789 116.8,780.2 125.7,771.3 			"/>
			</g>
		</g>
		<g id="DIVISIONES_2_">
			<line class="st12" x1="66.3" y1="569.7" x2="190.9" y2="787.4"/>
			<line class="st12" x1="129.9" y1="532.8" x2="257.1" y2="749"/>
			<line class="st12" x1="193.1" y1="495.1" x2="322.8" y2="709.9"/>
			<line class="st12" x1="255.9" y1="456.8" x2="388.1" y2="670"/>
			<line class="st12" x1="318.2" y1="417.6" x2="452.9" y2="629.3"/>
			<line class="st12" x1="380.1" y1="377.8" x2="517.2" y2="587.8"/>
			<line class="st12" x1="441.5" y1="337.2" x2="581" y2="545.6"/>
		</g>
	</g>
	<g id="ISLA_E" >
		<g id="E-36_1_" class="property__active" ng-class="manglar.inmovablesClassList[35]" ng-click="manglar.showPropertyData(46, '36')">
			<polyline id="E-L36_1_" class="property pb-sprite-1" points="114.3,919.3 188.6,878.1 262.3,836 299.8,943.1 141.9,998.2 114.3,919.3 		"/>
			<text transform="matrix(0.8721 -0.4894 0.4894 0.8721 180.9824 894.652)"><tspan x="0" y="0" class="st1 st2 st4">20.3</tspan><tspan x="24.4" y="0" class="st1 st2 st4">2</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 264.8592 880.0068)"><tspan x="0" y="0" class="st1 st2 st3">13.5</tspan><tspan x="24.4" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 127.962 943.618)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 187.9081 943.9236)"><tspan x="0" y="0" class="st1 st2 st3">23</tspan><tspan x="14" y="0" class="st1 st2 st3">4.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 196.8212 922.7108)" class="st5 st6 st9">36</text>
			</g>
			<g>
				<polyline class="st10" points="254.8,888.6 263.6,897.5 254.8,906.4 254.8,888.6 			"/>
				<polyline class="st11" points="254.8,888.6 254.8,906.4 245.9,897.5 254.8,888.6 			"/>
			</g>
		</g>
		<g id="E-37_1_"  class="property__active" ng-class="manglar.inmovablesClassList[36]" ng-click="manglar.showPropertyData(46, '37')">
			<polyline id="E-L37_1_" class="property pb-sprite-2" points="169.5,1077.2 141.9,998.2 299.8,943.1 327.3,1022 169.5,1077.2 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 297.3482 973.0214)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 155.5425 1022.562)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 211.5489 987.8594)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 210.9724 1024.7349)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 222.9791 1005.4385)" class="st5 st6 st9">37</text>
			</g>
			<g>
				<polyline class="st10" points="287.2,981.8 296.1,990.7 287.2,999.6 287.2,981.8 			"/>
				<polyline class="st11" points="287.2,981.8 287.2,999.6 278.4,990.7 287.2,981.8 			"/>
			</g>
		</g>
		<g id="E-38_1_"  class="property__active" ng-class="manglar.inmovablesClassList[37]" ng-click="manglar.showPropertyData(46, '38')">
			<polyline id="E-L38_1_" class="property pb-sprite-1" points="197,1156.1 169.5,1077.2 327.3,1022 354.9,1101 197,1156.1 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 324.9189 1051.948)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 183.1004 1101.4929)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 239.1311 1066.7975)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 238.5292 1103.6653)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 249.3582 1084.3799)" class="st5 st6 st9">38</text>
			</g>
			<g>
				<polyline class="st10" points="313.6,1060.6 322.5,1069.4 313.6,1078.3 313.6,1060.6 			"/>
				<polyline class="st11" points="313.6,1060.6 313.6,1078.3 304.8,1069.4 313.6,1060.6 			"/>
			</g>
		</g>
		<g id="E-39_1_"  class="property__active" ng-class="manglar.inmovablesClassList[38]" ng-click="manglar.showPropertyData(46, '39')">
			<polyline id="E-L39_1_" class="property pb-sprite-2" points="224.6,1235 197,1156.1 354.9,1101 382.5,1179.9 224.6,1235 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 352.4996 1130.8867)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 210.6803 1180.4319)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 266.7053 1145.7271)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 266.1056 1182.6055)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 277.4646 1163.6876)" class="st5 st6 st9">39</text>
			</g>
		</g>
		<g id="E-40_1_"  class="property__active" ng-class="manglar.inmovablesClassList[39]" ng-click="manglar.showPropertyData(46, '40')">
			<polyline id="E-L40_1_" class="property pb-sprite-1" points="252.2,1314 224.6,1235 382.5,1179.9 410,1258.8 252.2,1314 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 380.0579 1209.8207)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 238.2397 1259.3635)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 294.2652 1224.6605)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 293.6867 1261.5409)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 306.7888 1240.5518)" class="st5 st6 st9">40</text>
			</g>
		</g>
		<g id="E-41_1_"  class="property__active" ng-class="manglar.inmovablesClassList[40]" ng-click="manglar.showPropertyData(46, '41')">
			<polyline id="E-L41_1_" class="property pb-sprite-2" points="279.7,1392.9 252.2,1314 410,1258.8 437.6,1337.8 279.7,1392.9 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 407.6386 1288.7594)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 265.8158 1338.2944)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 321.8411 1303.5905)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 321.2473 1340.4709)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 336.6586 1322.5804)" class="st5 st6 st9">41</text>
			</g>
		</g>
		<g id="E-42_1_"  class="property__active" ng-class="manglar.inmovablesClassList[41]" ng-click="manglar.showPropertyData(46, '42')">
			<polyline id="E-L42_1_" class="property pb-sprite-1" points="307.3,1471.8 279.7,1392.9 437.6,1337.8 465.2,1416.7 307.3,1471.8 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 435.2129 1367.6888)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 293.3936 1417.2238)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 349.4184 1382.5303)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 348.8238 1419.4049)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 365.5732 1400.5654)" class="st5 st6 st9">42</text>
			</g>
		</g>
		<g id="E-43_1_"  class="property__active" ng-class="manglar.inmovablesClassList[42]" ng-click="manglar.showPropertyData(46, '43')">
			<polyline id="E-L43_1_" class="property pb-sprite-2" points="334.9,1550.8 307.3,1471.8 465.2,1416.7 492.7,1495.6 334.9,1550.8 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 462.7754 1446.6256)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 320.9536 1496.1561)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 376.981 1461.4597)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 376.3813 1498.334)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 388.4781 1478.1573)" class="st5 st6 st9">43</text>
			</g>
		</g>
		<g id="E-44_1_"  class="property__active" ng-class="manglar.inmovablesClassList[43]" ng-click="manglar.showPropertyData(46, '44')">
			<polyline id="E-L44_1_" class="property pb-sprite-1" points="362.4,1629.7 334.9,1550.8 492.7,1495.6 520.3,1574.6 362.4,1629.7 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 490.3548 1525.5492)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 348.5311 1575.0928)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 404.5571 1540.3906)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 403.958 1577.2668)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 417.9904 1560.1252)" class="st5 st6 st9">44</text>
			</g>
		</g>
		<g id="E-45_1_"  class="property__active" ng-class="manglar.inmovablesClassList[44]" ng-click="manglar.showPropertyData(46, '45')">
			<polyline id="E-L45_1_" class="property pb-sprite-2" points="390,1708.6 362.4,1629.7 520.3,1574.6 547.9,1653.5 390,1708.6 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 517.9156 1604.4802)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 376.11 1654.0248)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 432.1147 1619.3281)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 431.5364 1656.198)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 441.7681 1637.194)" class="st5 st6 st9">45</text>
			</g>
		</g>
		<g id="E-46_1_"  class="property__active" ng-class="manglar.inmovablesClassList[45]" ng-click="manglar.showPropertyData(46, '46')">
			<polyline id="E-L46_1_" class="property pb-sprite-1" points="417.6,1787.6 390,1708.6 547.9,1653.5 575.5,1732.4 417.6,1787.6 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 545.4883 1683.4135)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 403.6703 1732.9551)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 459.691 1698.26)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 459.0967 1735.1282)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 471.6725 1715.3927)" class="st5 st6 st9">46</text>
			</g>
		</g>
		<g id="E-47_1_"  class="property__active" ng-class="manglar.inmovablesClassList[46]" ng-click="manglar.showPropertyData(46, '47')">
			<polyline id="E-L47_1_" class="property pb-sprite-2" points="445.2,1866.5 417.6,1787.6 575.5,1732.4 603,1811.3 445.2,1866.5 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 573.069 1762.351)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 431.2458 1811.8925)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 487.2738 1777.2)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 486.6733 1814.0652)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 495.0425 1792.6996)" class="st5 st6 st9">47</text>
			</g>
		</g>
		<g id="E-48_1_"  class="property__active" ng-class="manglar.inmovablesClassList[47]" ng-click="manglar.showPropertyData(46, '48')">
			<polyline id="E-L48_1_" class="property pb-sprite-1" points="472.7,1945.4 445.2,1866.5 603,1811.3 630.6,1890.3 472.7,1945.4 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 600.6284 1841.2816)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 458.8253 1890.8232)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 514.8364 1856.1294)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 514.2523 1893.0045)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="14" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 520.3784 1873.391)" class="st5 st6 st9">48</text>
			</g>
		</g>
		<g id="E-49_1_"  class="property__active" ng-class="manglar.inmovablesClassList[48]" ng-click="manglar.showPropertyData(46, '49')">
			<polyline id="E-L49_1_" class="property pb-sprite-2" points="472.7,1945.4 630.6,1890.3 664.1,1986.2 581.4,2002.9 499,2020.6 472.7,1945.4 		"/>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 631.1657 1928.7207)"><tspan x="0" y="0" class="st1 st2 st3">12.1</tspan><tspan x="24.4" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 486.8087 1970.9535)"><tspan x="0" y="0" class="st1 st2 st3">9.5</tspan><tspan x="17.4" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 542.4115 1935.069)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9792 -0.2028 0.2028 0.9792 566.2149 2001.4781)"><tspan x="0" y="0" class="st1 st2 st4">20.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 547.4792 1977.0168)"><tspan x="0" y="0" class="st1 st2 st3">21</tspan><tspan x="14" y="0" class="st1 st2 st3">5.86 m2</tspan></text>
			<g>
				<text transform="matrix(0.9444 -0.3289 0.3289 0.9444 560.0853 1955.5284)" class="st5 st6 st9">49</text>
			</g>
			<g>
				<polyline class="st10" points="621.2,1938.9 630.1,1947.8 621.2,1956.6 621.2,1938.9 			"/>
				<polyline class="st11" points="621.2,1938.9 621.2,1956.6 612.4,1947.8 621.2,1938.9 			"/>
			</g>
		</g>
		<g id="DIVISIONES_9_">
			<line class="st12" x1="630.6" y1="1890.3" x2="472.7" y2="1945.4"/>
			<line class="st12" x1="603" y1="1811.3" x2="445.2" y2="1866.5"/>
			<line class="st12" x1="575.5" y1="1732.4" x2="417.6" y2="1787.6"/>
			<line class="st12" x1="547.9" y1="1653.5" x2="390" y2="1708.6"/>
			<line class="st12" x1="520.3" y1="1574.6" x2="362.4" y2="1629.7"/>
			<line class="st12" x1="492.7" y1="1495.6" x2="334.9" y2="1550.8"/>
			<line class="st12" x1="465.2" y1="1416.7" x2="307.3" y2="1471.8"/>
			<line class="st12" x1="437.6" y1="1337.8" x2="279.7" y2="1392.9"/>
			<line class="st12" x1="410" y1="1258.8" x2="252.2" y2="1314"/>
			<line class="st12" x1="382.5" y1="1179.9" x2="224.6" y2="1235"/>
			<line class="st12" x1="354.9" y1="1101" x2="197" y2="1156.1"/>
			<line class="st12" x1="327.3" y1="1022" x2="169.5" y2="1077.2"/>
			<line class="st12" x1="299.8" y1="943.1" x2="141.9" y2="998.2"/>
		</g>
	</g>
	<g id="ISLA_F">
		<g id="F-50"  class="property__active" ng-class="manglar.inmovablesClassList[49]" ng-click="manglar.showPropertyData(46, '50')">
			<polyline id="F-L50" class="property pb-sprite-1" points="524.8,2094.5 576.8,2083.3 628.9,2072.5 662.2,2236.3 580.4,2253.5 524.8,2094.5 		"/>
			<text transform="matrix(0.9785 -0.2062 0.2062 0.9785 565.7759 2099.2246)"><tspan x="0" y="0" class="st1 st2 st4">12.7</tspan><tspan x="24.4" y="0" class="st1 st2 st4">3</tspan></text>
			<text transform="matrix(0.1977 0.9803 -0.9803 0.1977 631.9703 2143.1462)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 553.0182 2159.8569)"><tspan x="0" y="0" class="st1 st2 st3">20.1</tspan><tspan x="24.4" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.9789 -0.2045 0.2045 0.9789 606.4695 2244.3218)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1977 0.9803 -0.9803 0.1977 581.7235 2131.3203)"><tspan x="0" y="0" class="st1 st2 st4">22</tspan><tspan x="14" y="0" class="st1 st2 st4">7.27 m2</tspan></text>
			<g>
				<text transform="matrix(0.1857 0.9826 -0.9826 0.1857 603.8345 2143.8403)" class="st5 st6 st7">50</text>
			</g>
			<g>
				<polyline class="st10" points="584.1,2104 593,2112.8 584.1,2121.7 584.1,2104 			"/>
				<polyline class="st11" points="584.1,2104 584.1,2121.7 575.2,2112.8 584.1,2104 			"/>
			</g>
		</g>
		<g id="F-51"  class="property__active" ng-class="manglar.inmovablesClassList[50]" ng-click="manglar.showPropertyData(46, '51')">
			<polyline id="F-L51" class="property pb-sprite-2" points="628.9,2072.5 713.2,2056 744.2,2220.3 662.2,2236.3 628.9,2072.5 		"/>
			<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 659.1656 2079.0017)"><tspan x="0" y="0" class="st1 st2 st4">10.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.1857 0.9826 -0.9826 0.1857 714.7608 2125.6052)"><tspan x="0" y="0" class="st1 st2 st4">20.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 688.278 2227.5254)"><tspan x="0" y="0" class="st1 st2 st4">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1857 0.9826 -0.9826 0.1857 670.6754 2119.7065)"><tspan x="0" y="0" class="st1 st2 st4">20</tspan><tspan x="14" y="0" class="st1 st2 st4">2.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1719 0.9851 -0.9851 0.1719 691.4949 2132.2)" class="st5 st6 st7">51</text>
			</g>
		</g>
		<g id="F-52"  class="property__active" ng-class="manglar.inmovablesClassList[51]" ng-click="manglar.showPropertyData(46, '52')">
			<polyline id="F-L52" class="property pb-sprite-1" points="797.6,2040.6 713.2,2056 744.2,2220.3 744.8,2220.2 826.5,2205.3 797.6,2040.6 		"/>
			<text transform="matrix(0.9839 -0.1788 0.1788 0.9839 743.3169 2063.0957)"><tspan x="0" y="0" class="st1 st2 st3">10.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.1719 0.9851 -0.9851 0.1719 797.9476 2111.2317)"><tspan x="0" y="0" class="st1 st2 st4">20.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.9839 -0.1788 0.1788 0.9839 770.4524 2212.0247)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1719 0.9851 -0.9851 0.1719 755.9563 2102.0906)"><tspan x="0" y="0" class="st1 st2 st4">20</tspan><tspan x="14" y="0" class="st1 st2 st4">2.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1719 0.9851 -0.9851 0.1719 775.1818 2117.3801)" class="st5 st6 st7">52</text>
			</g>
			<g>
				<polyline class="st10" points="758.7,2066.6 767.6,2075.5 758.7,2084.4 758.7,2066.6 			"/>
				<polyline class="st11" points="758.7,2066.6 758.7,2084.4 749.9,2075.5 758.7,2066.6 			"/>
			</g>
		</g>
		<g>
			<line class="st12" x1="713.2" y1="2056" x2="744.2" y2="2220.3"/>
			<line class="st12" x1="628.9" y1="2072.5" x2="662.2" y2="2236.3"/>
			<line class="st12" x1="797.6" y1="2040.6" x2="826.5" y2="2206.5"/>
		</g>
	</g>
	<g id="ISLA_G">
		<g id="G-53_1_"  class="property__active" ng-class="manglar.inmovablesClassList[52]" ng-click="manglar.showPropertyData(46, '53')">
			<polyline id="G-L53_1_" class="property pb-sprite-2" points="671.6,1772 726.2,1762 780.8,1752.5 815.8,1958.5 741.4,1971.6 671.6,1772 		"/>
			<text transform="matrix(0.9851 -0.1719 0.1719 0.9851 766.6514 1962.318)"><tspan x="0" y="0" class="st1 st2 st4">9.0</tspan><tspan x="17.4" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.9845 -0.1754 0.1754 0.9845 714.5801 1780.2429)"><tspan x="0" y="0" class="st1 st2 st4">13.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 707.4631 1856.2811)"><tspan x="0" y="0" class="st1 st2 st3">25.3</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1668 0.986 -0.986 0.1668 784.0438 1843.3549)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1668 0.986 -0.986 0.1668 739.1234 1832.4642)"><tspan x="0" y="0" class="st1 st2 st3">27</tspan><tspan x="14" y="0" class="st1 st2 st3">8.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.1547 0.988 -0.988 0.1547 758.8378 1848.1879)" class="st5 st6 st7">53</text>
			</g>
			<g>
				<polyline class="st10" points="771.9,1929 780.8,1937.9 771.9,1946.8 771.9,1929 			"/>
				<polyline class="st11" points="771.9,1929 771.9,1946.8 763.1,1937.9 771.9,1929 			"/>
			</g>
		</g>
		<g id="G-54_1_"  class="property__active" ng-class="manglar.inmovablesClassList[53]" ng-click="manglar.showPropertyData(46, '54')">
			<polyline id="G-L54_1_" class="property pb-sprite-1" points="780.8,1752.5 785.9,1751.6 849.8,1741.1 859.2,1739.6 891.7,1946.1 815.8,1958.5 
				780.8,1752.5 		"/>
			<text transform="matrix(0.9869 -0.1616 0.1616 0.9869 841.8375 1949.7327)"><tspan x="0" y="0" class="st1 st2 st3">9.2</tspan><tspan x="17.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9869 -0.1616 0.1616 0.9869 811.4217 1764.0798)"><tspan x="0" y="0" class="st1 st2 st3">9.5</tspan><tspan x="17.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 860.7444 1827.1555)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1547 0.988 -0.988 0.1547 819.8735 1820.0261)"><tspan x="0" y="0" class="st1 st2 st4">23</tspan><tspan x="14" y="0" class="st1 st2 st4">3.72 m2</tspan></text>
			<g>
				<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 838.4252 1836.1505)" class="st5 st6 st7">54</text>
			</g>
		</g>
		<g id="G-55_1_"  class="property__active" ng-class="manglar.inmovablesClassList[54]" ng-click="manglar.showPropertyData(46, '55')">
			<polyline id="G-L55_1_" class="property pb-sprite-2" points="859.2,1739.6 937.7,1727.7 967.8,1934.6 891.7,1946.1 859.2,1739.6 		"/>
			<text transform="matrix(0.9888 -0.1495 0.1495 0.9888 918.1823 1937.3638)"><tspan x="0" y="0" class="st1 st2 st3">9.2</tspan><tspan x="17.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9888 -0.1495 0.1495 0.9888 889.9536 1751.3678)"><tspan x="0" y="0" class="st1 st2 st3">9.5</tspan><tspan x="17.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 938.2017 1818.705)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 895.8069 1809.1235)"><tspan x="0" y="0" class="st1 st2 st3">23</tspan><tspan x="14" y="0" class="st1 st2 st3">3.72 m2</tspan></text>
			<g>
				<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 916.7088 1825.0887)" class="st5 st6 st9">55</text>
			</g>
		</g>
		<g id="G-56_1_"  class="property__active" ng-class="manglar.inmovablesClassList[55]" ng-click="manglar.showPropertyData(46, '56')">
			<polyline id="G-L56_1_" class="property pb-sprite-1" points="937.7,1727.7 939.3,1727.5 1016.3,1716.7 1044,1923.9 967.8,1934.6 937.7,1727.7 		
				"/>
			<text transform="matrix(0.9905 -0.1374 0.1374 0.9905 994.1685 1925.9495)"><tspan x="0" y="0" class="st1 st2 st4">9.2</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.9905 -0.1374 0.1374 0.9905 968.1639 1739.6313)"><tspan x="0" y="0" class="st1 st2 st4">9.5</tspan><tspan x="17.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 1012.3194 1808.1885)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 975.1445 1803.8867)"><tspan x="0" y="0" class="st1 st2 st3">23</tspan><tspan x="14" y="0" class="st1 st2 st3">3.72 m2</tspan></text>
			<g>
				<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 995.998 1815.9287)" class="st5 st6 st9">56</text>
			</g>
		</g>
		<g id="G-57_1_"  class="property__active" ng-class="manglar.inmovablesClassList[56]" ng-click="manglar.showPropertyData(46, '57')">
			<polyline id="G-L57_1_" class="property pb-sprite-2" points="1016.3,1716.7 1035.6,1714.2 1118.6,1703.9 1118.6,1914.4 1044,1923.9 1016.3,1716.7 
						"/>
			<text transform="matrix(0.9921 -0.1253 0.1253 0.9921 1069.264 1915.889)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="17.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9923 -0.1236 0.1236 0.9923 1054.7804 1727.8822)"><tspan x="0" y="0" class="st1 st2 st4">12.3</tspan><tspan x="24.4" y="0" class="st1 st2 st4">3</tspan></text>
			<text transform="matrix(0 -1 1 0 1110.2048 1823.7948)"><tspan x="0" y="0" class="st1 st2 st4">25.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">8</tspan></text>
			<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 1053.6597 1787.7955)"><tspan x="0" y="0" class="st1 st2 st3">26</tspan><tspan x="14" y="0" class="st1 st2 st3">6.65 m2</tspan></text>
			<g>
				<polyline class="st10" points="1078.8,1880 1087.7,1888.9 1078.8,1897.8 1078.8,1880 			"/>
				<polyline class="st11" points="1078.8,1880 1078.8,1897.8 1070,1888.9 1078.8,1880 			"/>
			</g>
			<g>
				<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 1072.9023 1802.6949)" class="st5 st6 st9">57</text>
			</g>
		</g>
		<g id="G-58_1_"  class="property__active" ng-class="manglar.inmovablesClassList[57]" ng-click="manglar.showPropertyData(46, '58')">
			<polyline id="G-L58_1_" class="property pb-sprite-1" points="1028.9,1715.1 1001.6,1507.8 1060.1,1500.4 1118.6,1493.5 1118.6,1703.9 
				1028.9,1715.1 		"/>
			<text transform="matrix(0.9923 -0.1236 0.1236 0.9923 1057.8524 1701.525)"><tspan x="0" y="0" class="st1 st2 st4">10.8</tspan><tspan x="24.4" y="0" class="st1 st2 st4">2</tspan></text>
			<text transform="matrix(0 -1 1 0 1110.2048 1613.3221)"><tspan x="0" y="0" class="st1 st2 st4">25.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.9925 -0.1219 0.1219 0.9925 1047.4832 1516.1892)"><tspan x="0" y="0" class="st1 st2 st3">14.1</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1288 0.9917 -0.9917 0.1288 1047.699 1580.2433)"><tspan x="0" y="0" class="st1 st2 st4">31</tspan><tspan x="14" y="0" class="st1 st2 st4">1.49 m2</tspan></text>
			<g>
				<text transform="matrix(0.1288 0.9917 -0.9917 0.1288 1068.0022 1591.7249)" class="st5 st6 st7">58</text>
			</g>
			<g>
				<polyline class="st10" points="1066.8,1525.4 1075.7,1534.2 1066.8,1543.1 1066.8,1525.4 			"/>
				<polyline class="st11" points="1066.8,1525.4 1066.8,1543.1 1058,1534.2 1066.8,1525.4 			"/>
			</g>
		</g>
		<g id="G-59_1_"  class="property__active" ng-class="manglar.inmovablesClassList[58]" ng-click="manglar.showPropertyData(46, '59')">
			<polyline id="G-L59_1_" class="property pb-sprite-2" points="909.2,1520.6 1001.6,1507.8 1028.9,1715.1 939.3,1727.5 909.2,1520.6 		"/>
			<text transform="matrix(0.9907 -0.1357 0.1357 0.9907 968.5094 1713.6783)"><tspan x="0" y="0" class="st1 st2 st4">10.8</tspan><tspan x="24.4" y="0" class="st1 st2 st4">2</tspan></text>
			<text transform="matrix(0.9907 -0.1357 0.1357 0.9907 943.0559 1529.9052)"><tspan x="0" y="0" class="st1 st2 st4">11.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1288 0.9917 -0.9917 0.1288 999.3046 1598.6444)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1288 0.9917 -0.9917 0.1288 953.9527 1593.3409)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">4.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 973.2171 1606.66)" class="st5 st6 st7">59</text>
			</g>
		</g>
		<g id="G-60_1_"  class="property__active" ng-class="manglar.inmovablesClassList[59]" ng-click="manglar.showPropertyData(46, '60')">
			<polyline id="G-L60_1_" class="property pb-sprite-1" points="849.8,1741.1 817,1534.7 909.2,1520.6 939.3,1727.5 849.8,1741.1 		"/>
			<text transform="matrix(0.9888 -0.1495 0.1495 0.9888 879.0059 1726.9708)"><tspan x="0" y="0" class="st1 st2 st3">10.8</tspan><tspan x="24.4" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.9888 -0.1495 0.1495 0.9888 851.0698 1543.5537)"><tspan x="0" y="0" class="st1 st2 st3">11.1</tspan><tspan x="24.4" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 908.0193 1611.86)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1426 0.9898 -0.9898 0.1426 860.9427 1609.6171)"><tspan x="0" y="0" class="st1 st2 st3">27</tspan><tspan x="14" y="0" class="st1 st2 st3">4.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 879.3455 1622.2375)" class="st5 st6 st7">60</text>
			</g>
		</g>
		<g id="G-61_1_"  class="property__active" ng-class="manglar.inmovablesClassList[60]" ng-click="manglar.showPropertyData(46, '61')">
			<polyline id="G-L61_1_" class="property pb-sprite-2" points="849.8,1741.1 785.9,1751.6 760.6,1755.9 725,1550 817,1534.7 849.8,1741.1 		"/>
			<text transform="matrix(0.9866 -0.1633 0.1633 0.9866 789.2332 1741.062)"><tspan x="0" y="0" class="st1 st2 st4">10.8</tspan><tspan x="24.4" y="0" class="st1 st2 st4">2</tspan></text>
			<text transform="matrix(0.9866 -0.1633 0.1633 0.9866 758.8151 1558.0413)"><tspan x="0" y="0" class="st1 st2 st4">11.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 817.25 1625.8214)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 768.6768 1619.509)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">4.69 m2</tspan></text>
			<g>
				<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 788.5544 1634.5139)" class="st5 st6 st7">61</text>
			</g>
		</g>
		<g id="G-62_1_"  class="property__active" ng-class="manglar.inmovablesClassList[61]" ng-click="manglar.showPropertyData(46, '62')">
			<polyline id="G-L62_1_" class="property pb-sprite-1" points="760.6,1755.9 671.6,1772 601.9,1572.4 663.4,1560.9 725,1550 760.6,1755.9 		"/>
			<text transform="matrix(0.9842 -0.1771 0.1771 0.9842 700.0313 1757.3265)"><tspan x="0" y="0" class="st1 st2 st3">10.8</tspan><tspan x="24.4" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 637.732 1656.6915)"><tspan x="0" y="0" class="st1 st2 st3">25.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0.9839 -0.1788 0.1788 0.9839 651.6707 1577.5653)"><tspan x="0" y="0" class="st1 st2 st3">14.9</tspan><tspan x="24.4" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.1702 0.9854 -0.9854 0.1702 726.4288 1641.0845)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1702 0.9854 -0.9854 0.1702 676.3557 1634.7841)"><tspan x="0" y="0" class="st1 st2 st4">32</tspan><tspan x="14" y="0" class="st1 st2 st4">2.15 m2</tspan></text>
			<g>
				<text transform="matrix(0.1702 0.9854 -0.9854 0.1702 698.8843 1647.9204)" class="st5 st6 st7">62</text>
			</g>
			<g>
				<polyline class="st10" points="670.5,1584 679.4,1592.9 670.5,1601.8 670.5,1584 			"/>
				<polyline class="st11" points="670.5,1584 670.5,1601.8 661.6,1592.9 670.5,1584 			"/>
			</g>
		</g>
		<g id="DIVISIONES_8_">
			<line class="st12" x1="1001.6" y1="1509" x2="1028.9" y2="1716.2"/>
			<line class="st12" x1="909.2" y1="1521.8" x2="939.3" y2="1728.6"/>
			<line class="st12" x1="817" y1="1534.7" x2="849.9" y2="1741.1"/>
			<line class="st12" x1="725" y1="1550" x2="760.6" y2="1755.9"/>
			<line class="st12" x1="1044" y1="1923.9" x2="1016.3" y2="1716.7"/>
			<line class="st12" x1="967.8" y1="1934.6" x2="937.7" y2="1727.7"/>
			<line class="st12" x1="891.7" y1="1946.1" x2="859.2" y2="1739.6"/>
			<line class="st12" x1="815.8" y1="1958.5" x2="780.8" y2="1752.5"/>
			<path class="st12" d="M671.6,1773.1c148.2-27.7,297.3-50.4,447-68.1"/>
		</g>
	</g>
	<g id="ISLA_H">
		<g id="H-63"  class="property__active" ng-class="manglar.inmovablesClassList[62]" ng-click="manglar.showPropertyData(46, '63')">
			<polyline id="H-L63" class="property pb-sprite-2" points="506.4,1298.9 567.6,1287 628.9,1275.7 666,1481.4 576,1498.2 506.4,1298.9 		"/>
			<text transform="matrix(0.9833 -0.1822 0.1822 0.9833 605.8112 1487.0431)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.9826 -0.1857 0.1857 0.9826 556.0717 1304.7354)"><tspan x="0" y="0" class="st1 st2 st4">14.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">1</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 540.5013 1382.1039)"><tspan x="0" y="0" class="st1 st2 st3">25.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.1771 0.9842 -0.9842 0.1771 631.3947 1366.9779)"><tspan x="0" y="0" class="st1 st2 st3">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1771 0.9842 -0.9842 0.1771 578.1255 1358.9866)"><tspan x="0" y="0" class="st1 st2 st3">32</tspan><tspan x="14" y="0" class="st1 st2 st3">3.23 m2</tspan></text>
			<g>
				<text transform="matrix(0.1771 0.9842 -0.9842 0.1771 598.6713 1371.2234)" class="st5 st6 st7">63</text>
			</g>
			<g>
				<polyline class="st10" points="614.5,1441.6 623.5,1450.6 614.5,1459.6 614.5,1441.6 			"/>
				<polyline class="st11" points="614.5,1441.6 614.5,1459.6 605.5,1450.6 614.5,1441.6 			"/>
			</g>
		</g>
		<g id="H-64"  class="property__active" ng-class="manglar.inmovablesClassList[63]" ng-click="manglar.showPropertyData(46, '64')">
			<polyline id="H-L64" class="property pb-sprite-1" points="756.1,1465.8 666,1481.4 628.9,1275.7 680.5,1266.6 721.8,1259.6 756.1,1465.8 		"/>
			<text transform="matrix(0.9854 -0.1702 0.1702 0.9854 695.8965 1471.175)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.9854 -0.1702 0.1702 0.9854 663.7094 1285.3998)"><tspan x="0" y="0" class="st1 st2 st4">11.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.1633 0.9866 -0.9866 0.1633 721.4556 1350.5651)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1633 0.9866 -0.9866 0.1633 674.6644 1341.191)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">7.73 m2</tspan></text>
			<g>
				<text transform="matrix(0.1633 0.9866 -0.9866 0.1633 695.123 1354.5415)" class="st5 st6 st7">64</text>
			</g>
		</g>
		<g id="H-65"  class="property__active" ng-class="manglar.inmovablesClassList[64]" ng-click="manglar.showPropertyData(46, '65')">
			<polyline id="H-L65" class="property pb-sprite-2" points="721.8,1259.6 814.9,1244.8 846.5,1451.4 756.1,1465.8 721.8,1259.6 		"/>
			<text transform="matrix(0.9877 -0.1564 0.1564 0.9877 785.9734 1456.0082)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.9877 -0.1564 0.1564 0.9877 756.2271 1269.8334)"><tspan x="0" y="0" class="st1 st2 st4">11.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.1513 0.9885 -0.9885 0.1513 812.7193 1335.7505)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1513 0.9885 -0.9885 0.1513 765.096 1328.299)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">7.73 m2</tspan></text>
			<g>
				<text transform="matrix(0.1513 0.9885 -0.9885 0.1513 787.5333 1342.5959)" class="st5 st6 st14">65</text>
			</g>
		</g>
		<g id="H-66"  class="property__active" ng-class="manglar.inmovablesClassList[65]" ng-click="manglar.showPropertyData(46, '66')">
			<polyline id="H-L66" class="property pb-sprite-1" points="814.9,1244.8 855.3,1238.7 908.1,1231.1 937,1438.1 846.5,1451.4 814.9,1244.8 		"/>
			<text transform="matrix(0.9895 -0.1444 0.1444 0.9895 876.9047 1441.9344)"><tspan x="0" y="0" class="st1 st2 st3">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.9895 -0.1444 0.1444 0.9895 849.6192 1255.3801)"><tspan x="0" y="0" class="st1 st2 st3">11.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.1374 0.9905 -0.9905 0.1374 906.3995 1322.0541)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1374 0.9905 -0.9905 0.1374 857.4911 1312.5101)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">7.73 m2</tspan></text>
			<g>
				<text transform="matrix(0.1374 0.9905 -0.9905 0.1374 876.4159 1326.478)" class="st5 st6 st7">66</text>
			</g>
		</g>
		<g id="H-67"  class="property__active" ng-class="manglar.inmovablesClassList[66]" ng-click="manglar.showPropertyData(46, '67')">
			<polyline id="H-L67" class="property pb-sprite-2" points="908.1,1231.1 1001.6,1218.7 1027.7,1426.1 937,1438.1 908.1,1231.1 		"/>
			<text transform="matrix(0.9914 -0.1305 0.1305 0.9914 967.0914 1428.5339)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.9914 -0.1305 0.1305 0.9914 942.2518 1241.6411)"><tspan x="0" y="0" class="st1 st2 st4">11.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.1236 0.9923 -0.9923 0.1236 997.7966 1309.6323)"><tspan x="0" y="0" class="st1 st2 st4">25.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1236 0.9923 -0.9923 0.1236 951.4717 1300.7913)"><tspan x="0" y="0" class="st1 st2 st4">27</tspan><tspan x="14" y="0" class="st1 st2 st4">7.73 m2</tspan></text>
			<g>
				<text transform="matrix(0.1236 0.9923 -0.9923 0.1236 972.6332 1314.7466)" class="st5 st6 st7">67</text>
			</g>
		</g>
		<g id="H-68"  class="property__active" ng-class="manglar.inmovablesClassList[67]" ng-click="manglar.showPropertyData(46, '68')">
			<polyline id="H-L68" class="property pb-sprite-1" points="1001.6,1218.7 1030.7,1215.1 1118.6,1204.9 1118.6,1415.2 1027.7,1426.1 1001.6,1218.7 
						"/>
			<text transform="matrix(0.993 -0.1184 0.1184 0.993 1058.1454 1417.6367)"><tspan x="0" y="0" class="st1 st2 st3">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.9932 -0.1167 0.1167 0.9932 1047.2803 1228.6382)"><tspan x="0" y="0" class="st1 st2 st4">14.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1111.6243 1324.6884)"><tspan x="0" y="0" class="st1 st2 st4">25.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">5</tspan></text>
			<text transform="matrix(0.1236 0.9923 -0.9923 0.1236 1040.4332 1291.0382)"><tspan x="0" y="0" class="st1 st2 st4">31</tspan><tspan x="14" y="0" class="st1 st2 st4">3.01 m2</tspan></text>
			<g>
				<text transform="matrix(0.1236 0.9923 -0.9923 0.1236 1062.1394 1306.0278)" class="st5 st6 st7">68</text>
			</g>
			<g>
				<polyline class="st10" points="1069.3,1372.2 1078.2,1381.1 1069.3,1389.9 1069.3,1372.2 			"/>
				<polyline class="st11" points="1069.3,1372.2 1069.3,1389.9 1060.4,1381.1 1069.3,1372.2 			"/>
			</g>
		</g>
		<g id="H-69"  class="property__active" ng-class="manglar.inmovablesClassList[68]" ng-click="manglar.showPropertyData(46, '69')">
			<polyline id="H-L69" class="property pb-sprite-1" points="1118.6,952.6 1118.6,1204.9 1030.7,1215.1 1000.3,966.1 1059.4,959.1 1118.6,952.6 		"/>
			<text transform="matrix(0.9934 -0.1149 0.1149 0.9934 1059.1569 1203.6218)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0 -1 1 0 1111.6243 1093.3856)"><tspan x="0" y="0" class="st1 st2 st4">30.1</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(0.9938 -0.1115 0.1115 0.9938 1046.6066 974.6175)"><tspan x="0" y="0" class="st1 st2 st4">14.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.1201 0.9928 -0.9928 0.1201 1043.6498 1059.0925)"><tspan x="0" y="0" class="st1 st2 st3">37</tspan><tspan x="14" y="0" class="st1 st2 st3">2.42 m2</tspan></text>
			<g>
				<text transform="matrix(0.1201 0.9928 -0.9928 0.1201 1066.2634 1071.7172)" class="st5 st6 st7">69</text>
			</g>
			<g>
				<polyline class="st10" points="1064.6,984.1 1073.4,993 1064.6,1001.9 1064.6,984.1 			"/>
				<polyline class="st11" points="1064.6,984.1 1064.6,1001.9 1055.7,993 1064.6,984.1 			"/>
			</g>
		</g>
		<g id="H-70"  class="property__active" ng-class="manglar.inmovablesClassList[69]" ng-click="manglar.showPropertyData(46, '70')">
			<polyline id="H-L70" class="property pb-sprite-2" points="909.4,977.8 1000.3,966.1 1030.7,1215.1 942.9,1226.3 909.4,977.8 		"/>
			<text transform="matrix(0.9919 -0.1271 0.1271 0.9919 971.2301 1214.3978)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.9919 -0.1271 0.1271 0.9919 942.0464 988.538)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1201 0.9928 -0.9928 0.1201 998.4377 1079.6183)"><tspan x="0" y="0" class="st1 st2 st3">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 950.3204 1071.2651)"><tspan x="0" y="0" class="st1 st2 st3">32</tspan><tspan x="14" y="0" class="st1 st2 st3">3.13 m2</tspan></text>
			<g>
				<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 971.1937 1085.1647)" class="st5 st6 st9">70</text>
			</g>
		</g>
		<g id="H-71"  class="property__active" ng-class="manglar.inmovablesClassList[70]" ng-click="manglar.showPropertyData(46, '71')">
			<polyline id="H-L71" class="property pb-sprite-1" points="818.7,990.5 909.4,977.8 942.9,1226.3 855.3,1238.7 818.7,990.5 		"/>
			<text transform="matrix(0.9903 -0.1392 0.1392 0.9903 883.4852 1226.9813)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.9903 -0.1392 0.1392 0.9903 851.4998 999.942)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1323 0.9912 -0.9912 0.1323 909.5214 1089.7563)"><tspan x="0" y="0" class="st1 st2 st3">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1444 0.9895 -0.9895 0.1444 861.9159 1082.7351)"><tspan x="0" y="0" class="st1 st2 st3">32</tspan><tspan x="14" y="0" class="st1 st2 st3">3.13 m2</tspan></text>
			<g>
				<text transform="matrix(0.1444 0.9895 -0.9895 0.1444 884.6143 1096.9559)" class="st5 st6 st9">71</text>
			</g>
			<g>
				<polyline class="st10" points="869.8,1011.7 878.7,1020.5 869.8,1029.4 869.8,1011.7 			"/>
				<polyline class="st11" points="869.8,1011.7 869.8,1029.4 860.9,1020.5 869.8,1011.7 			"/>
			</g>
		</g>
		<g id="H-72"  class="property__active" ng-class="manglar.inmovablesClassList[71]" ng-click="manglar.showPropertyData(46, '72')">
			<polyline id="H-L72" class="property pb-sprite-2" points="728.2,1004.4 818.7,990.5 855.3,1238.7 767.8,1252.1 728.2,1004.4 		"/>
			<text transform="matrix(0.9885 -0.1513 0.1513 0.9885 795.6294 1239.6587)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.9885 -0.1513 0.1513 0.9885 760.8334 1013.0272)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1444 0.9895 -0.9895 0.1444 819.8185 1102.5649)"><tspan x="0" y="0" class="st1 st2 st3">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 770.9073 1096.0271)"><tspan x="0" y="0" class="st1 st2 st4">32</tspan><tspan x="14" y="0" class="st1 st2 st4">3.13 m2</tspan></text>
			<g>
				<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 791.8751 1110.193)" class="st5 st6 st7">72</text>
			</g>
			<g>
				<polyline class="st10" points="778.9,1021.5 787.8,1030.4 778.9,1039.3 778.9,1021.5 			"/>
				<polyline class="st11" points="778.9,1021.5 778.9,1039.3 770,1030.4 778.9,1021.5 			"/>
			</g>
		</g>
		<g id="H-73"  class="property__active" ng-class="manglar.inmovablesClassList[72]" ng-click="manglar.showPropertyData(46, '73')">
			<polyline id="H-L73" class="property pb-sprite-1" points="728.2,1004.4 767.8,1252.1 721.8,1259.6 680.5,1266.6 637.8,1019.5 728.2,1004.4 		"/>
			<text transform="matrix(0.9866 -0.1633 0.1633 0.9866 708.435 1253.8026)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.9866 -0.1633 0.1633 0.9866 670.8463 1027.6234)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1564 0.9877 -0.9877 0.1564 730.7733 1116.38)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1685 0.9857 -0.9857 0.1685 681.0248 1108.4608)"><tspan x="0" y="0" class="st1 st2 st4">32</tspan><tspan x="14" y="0" class="st1 st2 st4">3.13 m2</tspan></text>
			<g>
				<text transform="matrix(0.1685 0.9857 -0.9857 0.1685 699.3629 1121.8129)" class="st5 st6 st7">73</text>
			</g>
			<g>
				<polyline class="st10" points="686.1,1035.2 695,1044 686.1,1052.9 686.1,1035.2 			"/>
				<polyline class="st11" points="686.1,1035.2 686.1,1052.9 677.3,1044 686.1,1035.2 			"/>
			</g>
		</g>
		<g id="H-74"  class="property__active" ng-class="manglar.inmovablesClassList[73]" ng-click="manglar.showPropertyData(46, '74')">
			<polyline id="H-L74" class="property pb-sprite-2" points="547.7,1035.6 637.8,1019.5 680.5,1266.6 628.9,1275.7 593.4,1282.2 547.7,1035.6 		"/>
			<text transform="matrix(0.9845 -0.1754 0.1754 0.9845 621.0825 1269.0266)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.9845 -0.1754 0.1754 0.9845 580.7136 1043.332)"><tspan x="0" y="0" class="st1 st2 st4">10.9</tspan><tspan x="24.4" y="0" class="st1 st2 st4">6</tspan></text>
			<text transform="matrix(0.1685 0.9857 -0.9857 0.1685 643.2163 1130.683)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 596.8115 1124.9001)"><tspan x="0" y="0" class="st1 st2 st4">32</tspan><tspan x="14" y="0" class="st1 st2 st4">3.13 m2</tspan></text>
			<g>
				<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 617.5759 1140.3608)" class="st5 st6 st7">74</text>
			</g>
			<g>
				<polyline class="st10" points="598.3,1050.8 607.1,1059.6 598.3,1068.5 598.3,1050.8 			"/>
				<polyline class="st11" points="598.3,1050.8 598.3,1068.5 589.4,1059.6 598.3,1050.8 			"/>
			</g>
		</g>
		<g id="H-75"  class="property__active" ng-class="manglar.inmovablesClassList[74]" ng-click="manglar.showPropertyData(46, '75')">
			<polyline id="H-L75" class="property pb-sprite-1" points="422.9,1059.8 485.2,1047.4 547.7,1035.6 593.4,1282.2 506.4,1298.9 422.9,1059.8 		"/>
			<text transform="matrix(0.9823 -0.1874 0.1874 0.9823 534.1165 1285.7662)"><tspan x="0" y="0" class="st1 st2 st4">10.5</tspan><tspan x="24.4" y="0" class="st1 st2 st4">9</tspan></text>
			<text transform="matrix(0.3289 0.9444 -0.9444 0.3289 464.4819 1164.2097)"><tspan x="0" y="0" class="st1 st2 st3">30.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(0.982 -0.1891 0.1891 0.982 473.3371 1063.9607)"><tspan x="0" y="0" class="st1 st2 st4">15.2</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 551.2528 1147.4579)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 498.6156 1145.0453)"><tspan x="0" y="0" class="st1 st2 st4">38</tspan><tspan x="14" y="0" class="st1 st2 st4">6.91 m2</tspan></text>
			<g>
				<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 522.0521 1158.6792)" class="st5 st6 st7">75</text>
			</g>
			<g>
				<polyline class="st10" points="491.6,1070.8 500.5,1079.7 491.6,1088.6 491.6,1070.8 			"/>
				<polyline class="st11" points="491.6,1070.8 491.6,1088.6 482.8,1079.7 491.6,1070.8 			"/>
			</g>
		</g>
		<g id="DIVISIONES_5_">
			<line class="st12" x1="1027.7" y1="1426.1" x2="1001.6" y2="1218.7"/>
			<line class="st12" x1="937" y1="1438.1" x2="908.1" y2="1231.1"/>
			<line class="st12" x1="846.5" y1="1451.4" x2="814.9" y2="1244.8"/>
			<line class="st12" x1="756.1" y1="1465.8" x2="721.8" y2="1259.6"/>
			<line class="st12" x1="666" y1="1481.4" x2="628.9" y2="1275.7"/>
			<line class="st12" x1="1030.7" y1="1215.1" x2="1000.3" y2="966.1"/>
			<line class="st12" x1="942.9" y1="1226.3" x2="909.4" y2="977.8"/>
			<line class="st12" x1="855.3" y1="1238.7" x2="818.7" y2="990.5"/>
			<line class="st12" x1="767.8" y1="1252.1" x2="728.2" y2="1004.4"/>
			<line class="st12" x1="680.5" y1="1266.6" x2="637.8" y2="1019.5"/>
			<line class="st12" x1="593.4" y1="1282.2" x2="547.7" y2="1035.6"/>
			<path class="st12" d="M506.4,1298.9c202.6-40.1,406.9-71.5,612.2-94"/>
		</g>
	</g>
	<g id="ISLA_I">
		<g id="I-76_1_"  class="property__active" ng-class="manglar.inmovablesClassList[75]" ng-click="manglar.showPropertyData(46, '76')">
			<polyline id="I-L76_1_" class="property pb-sprite-1" points="867.8,902.8 867.8,777.1 1118.6,777.1 1118.6,872.2 1034.9,881.5 951.3,891.7 
				867.8,902.8 		"/>
			<text transform="matrix(0 -1 1 0 882.3679 854.5878)"><tspan x="0" y="0" class="st1 st2 st4">15.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">3</tspan></text>
			<text transform="matrix(0 -1 1 0 1110.7502 839.3114)"><tspan x="0" y="0" class="st1 st2 st4">11.3</tspan><tspan x="24.4" y="0" class="st1 st2 st4">7</tspan></text>
			<text transform="matrix(1 0 0 1 978.5622 794.5975)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.9928 -0.1201 0.1201 0.9928 978.058 882.215)"><tspan x="0" y="0" class="st1 st2 st3">30.2</tspan><tspan x="24.4" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(1 0 0 1 965.9323 844.1249)"><tspan x="0" y="0" class="st1 st2 st4">39</tspan><tspan x="14" y="0" class="st1 st2 st4">3.47 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 985.4738 826.6942)" class="st5 st6 st7">76</text>
			</g>
			<g>
				<polyline class="st10" points="1080,820.7 1088.8,829.5 1080,838.4 1080,820.7 			"/>
				<polyline class="st11" points="1080,820.7 1080,838.4 1071.1,829.5 1080,820.7 			"/>
			</g>
		</g>
		<g id="I-77_1_"  class="property__active" ng-class="manglar.inmovablesClassList[76]" ng-click="manglar.showPropertyData(46, '77')">
			<polyline id="I-L77_1_" class="property pb-sprite-2" points="867.8,777.1 867.8,685.2 1118.6,685.2 1118.6,777.1 867.8,777.1 		"/>
			<text transform="matrix(0 -1 1 0 882.3679 745.7733)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1110.7502 745.7733)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 978.5622 701.8026)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 965.9323 739.9159)"><tspan x="0" y="0" class="st1 st2 st4">33</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 985.4738 722.2216)" class="st5 st6 st7">77</text>
			</g>
			<g>
				<polyline class="st10" points="1080,722.3 1088.8,731.1 1080,740 1080,722.3 			"/>
				<polyline class="st11" points="1080,722.3 1080,740 1071.1,731.1 1080,722.3 			"/>
			</g>
		</g>
		<g id="I-78_1_"  class="property__active" ng-class="manglar.inmovablesClassList[77]" ng-click="manglar.showPropertyData(46, '78')">
			<polyline id="I-L78_1_" class="property pb-sprite-1" points="867.8,685.2 867.8,593.2 1118.6,593.2 1118.6,685.2 867.8,685.2 		"/>
			<text transform="matrix(0 -1 1 0 882.3679 653.8055)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1110.7502 653.8104)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 978.5622 610.4471)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 0 0 1 965.9323 647.951)"><tspan x="0" y="0" class="st1 st2 st4">33</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 985.4738 632.3241)" class="st5 st6 st7">78</text>
			</g>
			<g>
				<polyline class="st10" points="1075.4,630.3 1084.2,639.2 1075.4,648 1075.4,630.3 			"/>
				<polyline class="st11" points="1075.4,630.3 1075.4,648 1066.5,639.2 1075.4,630.3 			"/>
			</g>
		</g>
		<g id="I-79_1_"  class="property__active" ng-class="manglar.inmovablesClassList[78]" ng-click="manglar.showPropertyData(46, '79')">
			<polyline id="I-L79_1_" class="property pb-sprite-2" points="867.5,594.6 868.1,502.6 1118.9,504.2 1118.3,596.2 867.5,594.6 		"/>
			<text transform="matrix(1 6.369998e-03 -6.369998e-03 1 978.6395 519.889)"><tspan x="0" y="0" class="st1 st2 st4">30.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(6.369998e-03 -1 1 6.369998e-03 882.1631 563.4688)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(6.369998e-03 -1 1 6.369998e-03 1110.5419 564.9235)"><tspan x="0" y="0" class="st1 st2 st4">11.0</tspan><tspan x="24.4" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(1 6.369998e-03 -6.369998e-03 1 965.7642 558.1437)"><tspan x="0" y="0" class="st1 st2 st4">33</tspan><tspan x="14" y="0" class="st1 st2 st4">0.00 m2</tspan></text>
			<g>
				<text transform="matrix(1 6.369998e-03 -6.369998e-03 1 985.4167 541.085)" class="st5 st6 st7">79</text>
			</g>
			<g>
				<polyline class="st10" points="1080,541.1 1088.8,550 1079.9,558.8 1080,541.1 			"/>
				<polyline class="st11" points="1080,541.1 1079.9,558.8 1071.1,549.9 1080,541.1 			"/>
			</g>
		</g>
		<g id="DIVISIONES_3_">
			<line class="st12" x1="867.8" y1="503.4" x2="867.8" y2="905"/>
			<line class="st12" x1="867.8" y1="595.4" x2="1118.6" y2="595.4"/>
			<line class="st12" x1="1118.6" y1="687.4" x2="867.8" y2="687.4"/>
			<line class="st12" x1="867.8" y1="779.3" x2="1118.6" y2="779.3"/>
		</g>
	</g>
	<g id="COMPLEMENTO">
		<g>
			<text transform="matrix(0.9927 -0.1208 0.1387 1.0984 954.5027 2156.1123)" class="st15 st6 st16">ACCESO</text>
			<path class="st15" d="M970.1,2138.2c-4.5,0.6-7.6,5-7.1,9.9l-11.8,1.6l8.7-11.1l8.7-11.1l11.5,8.4l11.5,8.4l-11.8,1.6
				C978.7,2141,974.5,2137.6,970.1,2138.2"/>
		</g>
		<g>
			<text transform="matrix(0.9892 -0.1455 0.1809 1.0884 860.6477 2151.8647)" class="st15 st6 st17">SALIDA</text>
			<path class="st15" d="M877.6,2161.9c-4.2,0.6-8.3-2.5-9.3-7l-11.2,1.7l11.1,7.8l11.1,7.8l8-10.6l8-10.6l-11.2,1.7
				C884.6,2157.1,881.8,2161.2,877.6,2161.9"/>
		</g>
		<path class="st18" d="M1031.6,2174.3c0,0,220.8-31.5,333-38V256.9H889.3V5.6c0,0,0,0,0.1,0c2,2.8-245.9,192.6-462.3,338.6
			C325.7,412.7,182.9,504.2,3.4,603.6c192.3,550.4,384.5,1100.7,576.8,1651.1c81.7-16,163.5-31.9,245.2-47.9"/>
	</g>
	</svg>


    </div>

</body>
</html>