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

<body ng-controller="PBBosqueQuoteCtrl as bosque">

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


	<div class="modal-dialog" ng-class="bosque.dialogDisplay">
		<div class="backdrop-dialog" ng-click="bosque.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="bosque.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{bosque.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{bosque.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{bosque.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{bosque.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{bosque.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{bosque.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{bosque.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{bosque.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{bosque.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{bosque.month}} y paga la primera mensualidad hasta {{bosque.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{bosque.month + ' ' + bosque.year}}</p>
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
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://wa.me/+524422912223?text=Me%20interesa%20informacion%20de%20PorttoBlanco"">APÁRTAR AQUÍ</a>
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
					<h1 class="center-align">Bosque 1</h1>
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

       

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1365.6 2471.5" style="enable-background:new 0 0 1365.6 2471.5;" xml:space="preserve">

			<style type="text/css">
				.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
				.st9{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
				.stx11{fill:none;stroke:#FFFFFF;stroke-width:2.8018;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
				.stx21{fill:none;stroke:#002856;stroke-width:7.4715;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="2482" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/bosque/condos/bosque_1.jpg" transform="matrix(1 0 0 1 0 -6.2648)"></image>

			<g id="ISLA_A">
				<g class="property__active" ng-class="bosque.inmovablesClassList[0]" ng-click="bosque.showPropertyData(36, '1')">
					<polyline id="AL01_2_" class="property pb-sprite-1" points="2.6,2143.5 2.6,2035.6 176.7,2035.6 176.7,2143.5 2.6,2143.5"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 2104.2253)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.40 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 2101.4246)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.9</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 2101.4246)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.9</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 2050.6228)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 2139.7195)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 2088.8865)" class="mustard__fill futura-book fs__16px">01</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,2101.1 134.6,2089.5 146.2,2078 146.2,2101.1"/>
						<polyline class="st9" points="146.2,2078 157.7,2089.5 146.2,2101.1 146.2,2078"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[1]" ng-click="bosque.showPropertyData(36, '2')">
					<polyline id="AL02_2_" class="property pb-sprite-2" points="2.6,2035.6 2.6,1937.6 176.7,1937.6 176.7,2035.6 2.6,2035.6"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 2003.11)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1998.4615)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1998.4615)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1953.3004)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1985.9401)" class="mustard__fill futura-book fs__16px">02</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[2]" ng-click="bosque.showPropertyData(36, '3')">
					<polyline id="AL03_2_" class="property pb-sprite-1" points="2.6,1937.6 2.6,1839.5 176.7,1839.5 176.7,1937.6 2.6,1937.6"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1907.7858)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1900.4479)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1900.4479)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1856.9479)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1891.985)" class="mustard__fill futura-book fs__16px">03</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[3]" ng-click="bosque.showPropertyData(36, '4')">
					<polyline id="AL04_2_" class="property pb-sprite-2" points="2.6,1839.5 2.6,1752.4 176.7,1752.4 176.7,1839.5 2.6,1839.5"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1816.2418)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1807.8346)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1807.8346)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1770.3063)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1799.3951)" class="mustard__fill futura-book fs__16px">04</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,1807.5 134.6,1796 146.2,1784.4 146.2,1807.5"/>
						<polyline class="st9" points="146.2,1784.4 157.7,1796 146.2,1807.5 146.2,1784.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[4]" ng-click="bosque.showPropertyData(36, '5')">
					<polyline id="AL05_2_" class="property pb-sprite-1" points="2.6,1752.4 2.6,1665.3 176.7,1665.3 176.7,1752.4 2.6,1752.4"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1723.1949)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1720.6617)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1720.6617)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1679.318)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1708.1852)" class="mustard__fill futura-book fs__16px">05</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,1720.4 134.6,1708.8 146.2,1697.3 146.2,1720.4"/>
						<polyline class="st9" points="146.2,1697.3 157.7,1708.8 146.2,1720.4 146.2,1697.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[5]" ng-click="bosque.showPropertyData(36, '6')">
					<polyline id="AL06_2_" class="property pb-sprite-2" points="2.6,1665.3 2.6,1578.1 176.7,1578.1 176.7,1665.3 2.6,1665.3"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1638.5612)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1633.5514)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1633.5514)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1595.8112)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1625.0797)" class="mustard__fill futura-book fs__16px">06</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[6]" ng-click="bosque.showPropertyData(36, '7')">
					<polyline id="AL07_2_" class="property pb-sprite-1" points="2.6,1578.1 2.6,1491 176.7,1491 176.7,1578.1 2.6,1578.1"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1552.6256)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1546.4069)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.8058 1546.4069)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1507.7545)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1537.9684)" class="mustard__fill futura-book fs__16px">07</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[7]" ng-click="bosque.showPropertyData(36, '8')">
					<polyline id="AL08_2_" class="property pb-sprite-2" points="2.6,1491 2.6,1403.8 176.7,1403.8 176.7,1491 2.6,1491"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1465.1637)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1459.2594)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1459.2594)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1421.3444)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1450.8219)" class="mustard__fill futura-book fs__16px">08</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[8]" ng-click="bosque.showPropertyData(36, '9')">
					<polyline id="AL09_2_" class="property pb-sprite-1" points="2.6,1403.8 2.6,1316.7 176.7,1316.7 176.7,1403.8 2.6,1403.8"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1377.3073)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1372.1276)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1372.1276)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1334.3551)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1363.6774)" class="mustard__fill futura-book fs__16px">09</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[9]" ng-click="bosque.showPropertyData(36, '10')">
					<polyline id="AL10_2_" class="property pb-sprite-2" points="2.6,1316.7 2.6,1229.5 176.7,1229.5 176.7,1316.7 2.6,1316.7"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1290.8815)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1284.9923)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1284.9923)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1246.8156)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1276.5177)" class="mustard__fill futura-book fs__16px">10</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,1284.7 134.6,1273.1 146.2,1261.6 146.2,1284.7"/>
						<polyline class="st9" points="146.2,1261.6 157.7,1273.1 146.2,1284.7 146.2,1261.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[10]" ng-click="bosque.showPropertyData(36, '11')">
					<polyline id="AL11_2_" class="property pb-sprite-1" points="2.6,1229.5 2.6,1142.4 176.7,1142.4 176.7,1229.5 2.6,1229.5"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1206.3986)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1197.8204)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1197.8204)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1158.735)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1189.4005)" class="mustard__fill futura-book fs__16px">11</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,1197.5 134.6,1186 146.2,1174.4 146.2,1197.5"/>
						<polyline class="st9" points="146.2,1174.4 157.7,1186 146.2,1197.5 146.2,1174.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[11]" ng-click="bosque.showPropertyData(36, '12')">
					<polyline id="AL12_2_" class="property pb-sprite-2" points="2.6,1142.4 2.6,1055.3 176.7,1055.3 176.7,1142.4 2.6,1142.4"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1117.2106)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1110.671)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1110.671)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 1071.4962)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1102.2384)" class="mustard__fill futura-book fs__16px">12</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[12]" ng-click="bosque.showPropertyData(36, '13')">
					<polyline id="AL13_2_" class="property pb-sprite-1" points="2.6,1055.3 2.6,968.1 176.7,968.1 176.7,1055.3 2.6,1055.3"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 1030.4459)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 1023.5627)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 1023.5627)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 983.7336)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 1015.0817)" class="mustard__fill futura-book fs__16px">13</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[13]" ng-click="bosque.showPropertyData(36, '14')">
					<polyline id="AL14_2_" class="property pb-sprite-2" points="2.6,968.1 2.6,881 176.7,881 176.7,968.1 2.6,968.1"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 943.6799)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 936.4006)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 936.4006)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 897.5778)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 927.968)" class="mustard__fill futura-book fs__16px">14</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[14]" ng-click="bosque.showPropertyData(36, '15')">
					<polyline id="AL15_2_" class="property pb-sprite-1" points="2.6,881 2.6,793.8 176.7,793.8 176.7,881 2.6,881"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 856.3547)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 849.2502)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 849.2502)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 811.1467)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 840.8185)" class="mustard__fill futura-book fs__16px">15</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[15]" ng-click="bosque.showPropertyData(36, '16')">
					<polyline id="AL16_2_" class="property pb-sprite-2" points="2.6,793.8 2.6,706.7 176.7,706.7 176.7,793.8 2.6,793.8"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 771.0383)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 762.1457)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 762.1457)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 723.0773)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 753.6677)" class="mustard__fill futura-book fs__16px">16</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,761.8 134.6,750.3 146.2,738.7 146.2,761.8"/>
						<polyline class="st9" points="146.2,738.7 157.7,750.3 146.2,761.8 146.2,738.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[16]" ng-click="bosque.showPropertyData(36, '17')">
					<polyline id="AL17_2_" class="property pb-sprite-1" points="2.6,706.7 2.6,619.5 176.7,619.5 176.7,706.7 2.6,706.7"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 683.6642)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 674.9807)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 674.9807)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 636.3181)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 666.5056)" class="mustard__fill futura-book fs__16px">17</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,674.7 134.6,663.1 146.2,651.6 146.2,674.7"/>
						<polyline class="st9" points="146.2,651.6 157.7,663.1 146.2,674.7 146.2,651.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[17]" ng-click="bosque.showPropertyData(36, '18')">
					<polyline id="AL18_2_" class="property pb-sprite-2" points="2.6,619.5 2.6,532.4 176.7,532.4 176.7,619.5 2.6,619.5"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 594.801)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 587.8332)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 587.8332)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 548.8493)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 579.3976)" class="mustard__fill futura-book fs__16px">18</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[18]" ng-click="bosque.showPropertyData(36, '19')">
					<polyline id="AL19_2_" class="property pb-sprite-1" points="2.6,532.4 2.6,445.3 176.7,445.3 176.7,532.4 2.6,532.4"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 508.697)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 500.6706)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 500.6706)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 460.9958)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 492.2599)" class="mustard__fill futura-book fs__16px">19</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[19]" ng-click="bosque.showPropertyData(36, '20')">
					<polyline id="AL20_2_" class="property pb-sprite-2" points="2.6,445.3 2.6,358.1 176.7,358.1 176.7,445.3 2.6,445.3"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 420.5998)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 413.5539)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 413.5539)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 374.8015)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 405.0856)" class="mustard__fill futura-book fs__16px">20</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[20]" ng-click="bosque.showPropertyData(36, '21')">
					<polyline id="AL21_2_" class="property pb-sprite-1" points="2.6,358.1 2.6,271 176.7,271 176.7,358.1 2.6,358.1"/>
					<text transform="matrix(0.9993 0 0 1 53.6471 333.4831)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(0.9993 0 0 1 74.4225 288.1452)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 171.6217 326.3884)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1.0007 1 0 19.4836 326.3884)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9993 0 0 1 81.1813 317.9772)" class="mustard__fill futura-book fs__16px">21</text>
					</g>
					<g>
						<polyline class="st8" points="146.2,326.1 134.6,314.5 146.2,303 146.2,326.1"/>
						<polyline class="st9" points="146.2,303 157.7,314.5 146.2,326.1 146.2,303"/>
					</g>
				</g>
				<g id="DIVISIONES_12_">
					<line class="stx11" x1="2.6" y1="358.1" x2="176.7" y2="358.1"/>
					<line class="stx11" x1="2.6" y1="445.3" x2="176.7" y2="445.3"/>
					<line class="stx11" x1="2.6" y1="532.4" x2="176.7" y2="532.4"/>
					<line class="stx11" x1="2.6" y1="619.5" x2="176.7" y2="619.5"/>
					<line class="stx11" x1="2.6" y1="706.7" x2="176.7" y2="706.7"/>
					<line class="stx11" x1="2.6" y1="793.8" x2="176.7" y2="793.8"/>
					<line class="stx11" x1="2.6" y1="881" x2="176.7" y2="881"/>
					<line class="stx11" x1="2.6" y1="968.1" x2="176.7" y2="968.1"/>
					<line class="stx11" x1="2.6" y1="1055.3" x2="176.7" y2="1055.3"/>
					<line class="stx11" x1="2.6" y1="1142.4" x2="176.7" y2="1142.4"/>
					<line class="stx11" x1="2.6" y1="1229.5" x2="176.7" y2="1229.5"/>
					<line class="stx11" x1="2.6" y1="1316.7" x2="176.7" y2="1316.7"/>
					<line class="stx11" x1="2.6" y1="1403.8" x2="176.7" y2="1403.8"/>
					<line class="stx11" x1="2.6" y1="1491" x2="176.7" y2="1491"/>
					<line class="stx11" x1="2.6" y1="1578.1" x2="176.7" y2="1578.1"/>
					<line class="stx11" x1="2.6" y1="1665.3" x2="176.7" y2="1665.3"/>
					<line class="stx11" x1="2.6" y1="1752.4" x2="176.7" y2="1752.4"/>
					<line class="stx11" x1="2.6" y1="1839.5" x2="176.7" y2="1839.5"/>
					<line class="stx11" x1="2.6" y1="1937.6" x2="176.7" y2="1937.6"/>
					<line class="stx11" x1="2.6" y1="2035.6" x2="176.7" y2="2035.6"/>
					<line class="stx11" x1="2.6" y1="2143.5" x2="176.7" y2="2143.5"/>
				</g>
			</g>
			<g id="ILSA_B">
				<g class="property__active" ng-class="bosque.inmovablesClassList[21]" ng-click="bosque.showPropertyData(36, '22')">
					<polyline id="BL22_2_" class="property pb-sprite-2" points="2.6,169.7 2.6,-4.4 89.7,-4.4 89.7,169.7 2.6,169.7"/>
					<text transform="matrix(0 -1 1 0 61.2907 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 34.278 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 34.278 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 20.5763 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 45.4728 82.6564)" class="mustard__fill futura-book fs__16px">22</text>
					</g>
					<g>
						<polyline class="st8" points="46.1,148 34.6,136.4 46.1,124.9 46.1,148"/>
						<polyline class="st9" points="46.1,124.9 57.7,136.4 46.1,148 46.1,124.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[22]" ng-click="bosque.showPropertyData(36, '23')">
					<polyline id="BL23_2_" class="property pb-sprite-1" points="89.7,-4.4 176.7,-4.4 176.7,169.7 89.7,169.7 89.7,-4.4"/>
					<text transform="matrix(0 -1 1 0 148.2594 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 121.3859 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 121.3859 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 106.6354 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 132.5661 82.6413)" class="mustard__fill futura-book fs__16px">23</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[23]" ng-click="bosque.showPropertyData(36, '24')">
					<polyline id="BL24_2_" class="property pb-sprite-2" points="176.7,169.7 176.7,-4.4 263.8,-4.4 263.8,169.7 176.7,169.7"/>
					<text transform="matrix(0 -1 1 0 236.7467 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 208.4426 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 208.4426 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 193.5407 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 219.6613 82.6413)" class="mustard__fill futura-book fs__16px">24</text>
					</g>
					<g>
						<polyline class="st8" points="220.3,148 208.7,136.4 220.3,124.9 220.3,148"/>
						<polyline class="st9" points="220.3,124.9 231.8,136.4 220.3,148 220.3,124.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[24]" ng-click="bosque.showPropertyData(36, '25')">
					<polyline id="BK25_2_" class="property pb-sprite-1" points="263.8,-4.4 350.9,-4.4 350.9,169.7 263.8,169.7 263.8,-4.4"/>
					<text transform="matrix(0 -1 1 0 321.3351 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 295.5348 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 295.5348 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 280.4084 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 306.7179 82.6564)" class="mustard__fill futura-book fs__16px">25</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[25]" ng-click="bosque.showPropertyData(36, '26')">
					<polyline id="BL26_2_" class="property pb-sprite-2" points="350.9,169.7 350.9,-4.4 438,-4.4 438,169.7 350.9,169.7"/>
					<text transform="matrix(0 -1 1 0 411.2716 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 382.6339 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 382.6339 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 367.3766 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 393.8258 82.8483)" class="mustard__fill futura-book fs__16px">26</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[26]" ng-click="bosque.showPropertyData(36, '27')">
					<polyline id="BL-27_2_" class="property pb-sprite-1" points="438,-4.4 525.1,-4.4 525.1,169.7 438,169.7 438,-4.4"/>
					<text transform="matrix(0 -1 1 0 496.5963 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 469.6906 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 469.6906 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 455.0851 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 480.8874 82.8483)" class="mustard__fill futura-book fs__16px">27</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[27]" ng-click="bosque.showPropertyData(36, '28')">
					<polyline id="BL28_2_" class="property pb-sprite-2" points="525.1,169.7 525.1,-4.4 612.2,-4.4 612.2,169.7 525.1,169.7"/>
					<text transform="matrix(0 -1 1 0 584.884 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 556.7766 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 556.7766 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 541.1706 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 568.0012 82.8659)" class="mustard__fill futura-book fs__16px">28</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[28]" ng-click="bosque.showPropertyData(36, '29')">
					<polyline id="BL29_2_" class="property pb-sprite-1" points="612.2,-4.4 699.2,-4.4 699.2,169.7 612.2,169.7 612.2,-4.4"/>
					<text transform="matrix(0 -1 1 0 668.8478 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 643.8762 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 628.6174 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 655.049 82.8659)" class="mustard__fill futura-book fs__16px">29</text>
					</g>
					<text transform="matrix(1 0 0 1 643.8762 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[29]" ng-click="bosque.showPropertyData(36, '30')">
					<polyline id="BL30_2_" class="property pb-sprite-2" points="699.2,169.7 699.2,-4.4 786.3,-4.4 786.3,169.7 699.2,169.7"/>
					<text transform="matrix(0 -1 1 0 756.3469 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 730.9709 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 730.9709 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 716.7834 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 742.1437 82.8483)" class="mustard__fill futura-book fs__16px">30</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[30]" ng-click="bosque.showPropertyData(36, '31')">
					<polyline id="BL31_2_" class="property pb-sprite-1" points="786.3,-4.4 873.4,-4.4 873.4,169.7 786.3,169.7 786.3,-4.4"/>
					<text transform="matrix(0 -1 1 0 842.9982 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 818.0119 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 818.0119 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 803.6887 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 829.2346 82.8659)" class="mustard__fill futura-book fs__16px">31</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[31]" ng-click="bosque.showPropertyData(36, '32')">
					<polyline id="BL32_2_" class="property pb-sprite-2" points="873.4,169.7 873.4,-4.4 960.5,-4.4 960.5,169.7 873.4,169.7"/>
					<text transform="matrix(0 -1 1 0 932.0383 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 905.1174 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 905.1174 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 890.5568 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 916.2902 82.8659)" class="mustard__fill futura-book fs__16px">32</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[32]" ng-click="bosque.showPropertyData(36, '33')">
					<polyline id="BL33_2_" class="property pb-sprite-1" points="960.5,-4.4 1058.5,-4.4 1058.5,169.7 960.5,169.7 960.5,-4.4"/>
					<text transform="matrix(0 -1 1 0 1017.6672 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">144</tspan><tspan x="24.9" y="0" class="white__fill futura-light fs__15px">.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 997.6183 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 997.6183 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 977.4553 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 1003.3859 82.8659)" class="mustard__fill futura-book fs__16px">33</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[33]" ng-click="bosque.showPropertyData(36, '34')">
					<polyline id="BL34_2_" class="property pb-sprite-2" points="1058.5,169.7 1058.5,-4.4 1156.4,-4.4 1156.4,169.7 1058.5,169.7"/>
					<text transform="matrix(0 -1 1 0 1116.5626 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">144</tspan><tspan x="24.9" y="0" class="white__fill futura-light fs__15px">.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 1095.6212 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 1095.6212 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 1074.7628 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 1101.3546 82.8659)" class="mustard__fill futura-book fs__16px">34</text>
					</g>
					<g>
						<polyline class="st8" points="1107.4,148 1095.9,136.4 1107.4,124.9 1107.4,148"/>
						<polyline class="st9" points="1107.4,124.9 1119,136.4 1107.4,148 1107.4,124.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[34]" ng-click="bosque.showPropertyData(36, '35')">
					<polyline id="BL35_2_" class="property pb-sprite-1" points="1156.4,-4.4 1254.4,-4.4 1254.4,169.7 1156.4,169.7 1156.4,-4.4"/>
					<text transform="matrix(0 -1 1 0 1216.0587 109.2477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">144</tspan><tspan x="24.9" y="0" class="white__fill futura-light fs__15px">.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 1193.5968 165.8351)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 1193.5968 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 1173.1827 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 1199.3165 82.8483)" class="mustard__fill futura-book fs__16px">35</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[35]" ng-click="bosque.showPropertyData(36, '36')">
					<polyline id="BL36_2_" class="property pb-sprite-2" points="1254.4,169.7 1254.4,-4.4 1364.9,-4.4 1344.5,169.7 1254.4,169.7"/>
					<text transform="matrix(0 -1 1 0 1312.422 113.1164)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">147.43</tspan><tspan x="45.7" y="0" class="white__fill futura-light fs__15px"> m2</tspan></text>
					<text transform="matrix(1 0 0 1 1285.3673 165.8351)" class="white__fill futura-light fs__15px">8.28</text>
					<text transform="matrix(1 0 0 1 1292.171 12.7072)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">0.16</tspan></text>
					<text transform="matrix(0 -1 1 0 1270.5773 97.8928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1341.9109 97.2638)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.1</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 1297.3136 82.8659)" class="mustard__fill futura-book fs__16px">36</text>
					</g>
					<g>
						<polyline class="st8" points="1299.4,148 1287.9,136.4 1299.4,124.9 1299.4,148"/>
						<polyline class="st9" points="1299.4,124.9 1311,136.4 1299.4,148 1299.4,124.9"/>
					</g>
				</g>
				<g id="DIVISIONES_13_">
					<line class="stx11" x1="89.7" y1="169.7" x2="89.7" y2="-4.4"/>
					<line class="stx11" x1="176.7" y1="169.7" x2="176.7" y2="-4.4"/>
					<line class="stx11" x1="263.8" y1="169.7" x2="263.8" y2="-4.4"/>
					<line class="stx11" x1="350.9" y1="169.7" x2="350.9" y2="-4.4"/>
					<line class="stx11" x1="438" y1="169.7" x2="438" y2="-4.4"/>
					<line class="stx11" x1="525.1" y1="169.7" x2="525.1" y2="-4.4"/>
					<line class="stx11" x1="612.2" y1="169.7" x2="612.2" y2="-4.4"/>
					<line class="stx11" x1="699.2" y1="169.7" x2="699.2" y2="-4.4"/>
					<line class="stx11" x1="786.3" y1="169.7" x2="786.3" y2="-4.4"/>
					<line class="stx11" x1="873.4" y1="169.7" x2="873.4" y2="-4.4"/>
					<line class="stx11" x1="960.5" y1="169.7" x2="960.5" y2="-4.4"/>
					<line class="stx11" x1="1058.5" y1="169.7" x2="1058.5" y2="-4.4"/>
					<line class="stx11" x1="1156.4" y1="169.7" x2="1156.4" y2="-4.4"/>
					<line class="stx11" x1="1254.4" y1="169.7" x2="1254.4" y2="-4.4"/>
				</g>
			</g>
			<g id="ISLA_C">
				<g class="property__active" ng-class="bosque.inmovablesClassList[36]" ng-click="bosque.showPropertyData(36, '37')">
					<polyline id="CL37_2_" class="property pb-sprite-2" points="1334,273.1 1321.3,381.8 1132.1,359.6 1142.2,273.1 1334,273.1"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1194.1776 340.0161)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">7.97 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1148.3728 329.4181)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 1222.8712 285.6979)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.6</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1316.4729 348.1096)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">0.06</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1223.2566 325.9671)" class="mustard__fill futura-book fs__16px">37</text>
					</g>
					<g>
						<polyline class="st8" points="1172.8,331.7 1161.3,320.2 1172.8,308.6 1172.8,331.7"/>
						<polyline class="st9" points="1172.8,308.6 1184.4,320.2 1172.8,331.7 1172.8,308.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[37]" ng-click="bosque.showPropertyData(36, '38')">
					<polyline id="CL38_2_" class="property pb-sprite-1" points="1132.1,359.6 1321.3,381.8 1311.1,468.3 1121.9,446.1 1132.1,359.6"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1184.3132 424.1557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1138.1962 415.8896)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1209.7473 383.2947)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1305.6768 440.0797)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1213.2654 411.169)" class="mustard__fill futura-book fs__16px">38</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[38]" ng-click="bosque.showPropertyData(36, '39')">
					<polyline id="CL39_2_" class="property pb-sprite-2" points="1311.1,468.3 1301,554.8 1111.8,532.6 1121.9,446.1 1311.1,468.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1174.5416 506.6601)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1128.0548 502.3781)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1199.6321 469.1599)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1295.5059 526.5947)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1203.1637 497.1607)" class="mustard__fill futura-book fs__16px">39</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[39]" ng-click="bosque.showPropertyData(36, '40')">
					<polyline id="CL40_2_" class="property pb-sprite-1" points="1111.8,532.6 1301,554.8 1290.8,641.3 1101.6,619.1 1111.8,532.6"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1162.6069 590.7119)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1117.9215 588.8907)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1189.4655 555.9478)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1285.3627 613.0732)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1195.0801 581.2833)" class="mustard__fill futura-book fs__16px">40</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[40]" ng-click="bosque.showPropertyData(36, '41')">
					<polyline id="CL41_2_" class="property pb-sprite-2" points="1290.8,641.3 1280.7,727.8 1091.5,705.6 1101.6,619.1 1290.8,641.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1156.7694 681.6194)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1107.743 675.3685)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1179.2432 642.9657)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1275.2192 699.5551)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1183.7448 671.5912)" class="mustard__fill futura-book fs__16px">41</text>
					</g>
					<g>
						<polyline class="st8" points="1131,681.5 1119.4,670 1131,658.4 1131,681.5"/>
						<polyline class="st9" points="1131,658.4 1142.5,670 1131,681.5 1131,658.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[41]" ng-click="bosque.showPropertyData(36, '42')">
					<polyline id="CL42_2_" class="property pb-sprite-1" points="1091.5,705.6 1280.7,727.8 1270.5,814.3 1081.3,792.1 1091.5,705.6"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1097.6035 761.8503)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1265.0441 786.0386)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1168.9918 730.3326)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1146.5243 768.8828)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1173.5153 758.856)" class="mustard__fill futura-book fs__16px">42</text>
					</g>
					<polyline class="st8" points="1120.7,766 1109.1,754.4 1120.7,742.9 1120.7,766"/>
					<polyline class="st9" points="1120.7,742.9 1132.2,754.4 1120.7,766 1120.7,742.9"/>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[42]" ng-click="bosque.showPropertyData(36, '43')">
					<polyline id="CL43_2_" class="property pb-sprite-2" points="1270.5,814.3 1259.1,911.6 1069.9,889.4 1081.3,792.1 1270.5,814.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1132.8103 862.9255)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">7.50 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1086.8197 853.7491)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1254.3053 877.9308)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1159.1179 814.6205)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1161.8103 849.6819)" class="mustard__fill futura-book fs__16px">43</text>
					</g>
					<g>
						<polyline class="st8" points="1111,858.6 1099.4,847 1111,835.5 1111,858.6"/>
						<polyline class="st9" points="1111,835.5 1122.5,847 1111,858.6 1111,835.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[43]" ng-click="bosque.showPropertyData(36, '44')">
					<polyline id="CL44_2_" class="property pb-sprite-1" points="1069.9,889.4 1259.1,911.6 1247.7,1008.9 1058.5,986.7 1069.9,889.4"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1121.7745 956.3084)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">7.50 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1075.411 951.0513)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1242.8419 975.2385)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1147.5585 912.9212)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1150.3711 947.0597)" class="mustard__fill futura-book fs__16px">44</text>
					</g>
					<g>
						<polyline class="st8" points="1095.5,954.5 1084,942.9 1095.5,931.4 1095.5,954.5"/>
						<polyline class="st9" points="1095.5,931.4 1107.1,942.9 1095.5,954.5 1095.5,931.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[44]" ng-click="bosque.showPropertyData(36, '45')">
					<polyline id="CL45_2_" class="property pb-sprite-2" points="1247.7,1008.9 1236.3,1106.2 1047.1,1084 1058.5,986.7 1247.7,1008.9"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1111.592 1059.0757)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">7.50 m2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1063.9712 1048.368)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1231.4485 1072.5537)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1136.2662 1009.3915)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1138.4235 1048.8658)" class="mustard__fill futura-book fs__16px">45</text>
					</g>
					<g>
						<polyline class="st8" points="1086.2,1052.4 1074.6,1040.8 1086.2,1029.3 1086.2,1052.4"/>
						<polyline class="st9" points="1086.2,1029.3 1097.7,1040.8 1086.2,1052.4 1086.2,1029.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[45]" ng-click="bosque.showPropertyData(36, '46')">
					<polyline id="CL46_2_" class="property pb-sprite-1" points="1047.1,1084 1236.3,1106.2 1226.1,1192.7 1036.9,1170.5 1047.1,1084"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1053.2037 1140.2529)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1220.6537 1164.4453)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1124.6005 1108.6477)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1096.8964 1146.8763)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1128.2462 1135.5016)" class="mustard__fill futura-book fs__16px">46</text>
					</g>
					<g>
						<polyline class="st8" points="1074,1146.5 1062.5,1135 1074,1123.4 1074,1146.5"/>
						<polyline class="st9" points="1074,1123.4 1085.6,1135 1074,1146.5 1074,1123.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[46]" ng-click="bosque.showPropertyData(36, '47')">
					<polyline id="CL47_2_" class="property pb-sprite-2" points="1226.1,1192.7 1216,1279.1 1026.8,1256.9 1036.9,1170.5 1226.1,1192.7"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1043.0255 1226.7377)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1212.9421 1251.6528)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1114.4601 1195.1693)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1084.0454 1234.6935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1118.0691 1222.1354)" class="mustard__fill futura-book fs__16px">47</text>
					</g>
					<g>
						<polyline class="st8" points="1065.8,1229.2 1054.3,1217.7 1065.8,1206.1 1065.8,1229.2"/>
						<polyline class="st9" points="1065.8,1206.1 1077.4,1217.7 1065.8,1229.2 1065.8,1206.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[47]" ng-click="bosque.showPropertyData(36, '48')">
					<polyline id="CL48_2_" class="property pb-sprite-1" points="1026.8,1256.9 1216,1279.1 1205.8,1365.6 1016.6,1343.4 1026.8,1256.9"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1032.8905 1313.223)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1201.7645 1340.5679)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1104.1705 1282.9619)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1081.0099 1318.088)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1108.2826 1305.5781)" class="mustard__fill futura-book fs__16px">48</text>
					</g>
					<g>
						<polyline class="st8" points="1056.8,1316.3 1045.3,1304.8 1056.8,1293.2 1056.8,1316.3"/>
						<polyline class="st9" points="1056.8,1293.2 1068.4,1304.8 1056.8,1316.3 1056.8,1293.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[48]" ng-click="bosque.showPropertyData(36, '49')">
					<polyline id="CL49_2_" class="property pb-sprite-2" points="1205.8,1365.6 1195.6,1452.1 1006.4,1429.9 1016.6,1343.4 1205.8,1365.6"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1022.7486 1399.7415)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1190.1903 1423.92)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1065.5114 1404.2024)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1098.153 1392.1014)" class="mustard__fill futura-book fs__16px">49</text>
					</g>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1093.9843 1369.5573)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[49]" ng-click="bosque.showPropertyData(36, '50')">
					<polyline id="CL50_2_" class="property pb-sprite-1" points="1006.4,1429.9 1195.6,1452.1 1185.5,1538.6 996.3,1516.4 1006.4,1429.9"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1012.585 1486.2106)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1180.0653 1510.3948)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1084.0781 1453.8837)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1057.3905 1492.5674)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1088.0095 1478.5828)" class="mustard__fill futura-book fs__16px">50</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[50]" ng-click="bosque.showPropertyData(36, '51')">
					<polyline id="CL51_2_" class="property pb-sprite-2" points="1185.5,1538.6 1175.3,1625.1 986.2,1602.9 996.3,1516.4 1185.5,1538.6"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1002.4418 1572.6896)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1169.8817 1596.8837)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1073.8336 1541.2091)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1047.4297 1576.2808)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1077.8188 1565.0557)" class="mustard__fill futura-book fs__16px">51</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[51]" ng-click="bosque.showPropertyData(36, '52')">
					<polyline id="CL52_2_" class="property pb-sprite-1" points="986.2,1602.9 1175.3,1625.1 1165.2,1711.6 976,1689.4 986.2,1602.9"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 992.2995 1659.178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1159.7505 1683.3945)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1063.5858 1628.7216)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1038.8071 1664.6472)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1067.6915 1651.5425)" class="mustard__fill futura-book fs__16px">52</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[52]" ng-click="bosque.showPropertyData(36, '53')">
					<polyline id="CL53_2_" class="property pb-sprite-2" points="1165.2,1711.6 1155.1,1798.1 965.9,1775.9 976,1689.4 1165.2,1711.6"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 982.1196 1745.6851)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1149.6143 1769.8738)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1053.5945 1713.8909)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1027.3348 1749.6932)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1057.5656 1738.0598)" class="mustard__fill futura-book fs__16px">53</text>
					</g>
					<g>
						<polyline class="st8" points="1004.5,1748.1 992.9,1736.5 1004.5,1725 1004.5,1748.1"/>
						<polyline class="st9" points="1004.5,1725 1016,1736.5 1004.5,1748.1 1004.5,1725"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[53]" ng-click="bosque.showPropertyData(36, '54')">
					<polyline id="CL54_2_" class="property pb-sprite-1" points="965.9,1775.9 1155.1,1798.1 1144.9,1884.6 955.7,1862.4 965.9,1775.9"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 971.9781 1832.1671)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1139.4323 1856.3571)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1017.9144 1835.3938)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1047.37 1824.5321)" class="mustard__fill futura-book fs__16px">54</text>
					</g>
					<g>
						<polyline class="st8" points="992.9,1834.8 981.4,1823.3 992.9,1811.7 992.9,1834.8"/>
						<polyline class="st9" points="992.9,1811.7 1004.5,1823.3 992.9,1834.8 992.9,1811.7"/>
					</g>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1043.028 1800.4504)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[54]" ng-click="bosque.showPropertyData(36, '55')">
					<polyline id="CL55_2_" class="property pb-sprite-2" points="1144.9,1884.6 1134.8,1971.1 945.6,1948.9 955.7,1862.4 1144.9,1884.6"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 961.8673 1918.6465)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1129.2955 1942.8392)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1033.4318 1885.4794)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1006.5748 1924.0636)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1036.8961 1913.8936)" class="mustard__fill futura-book fs__16px">55</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[55]" ng-click="bosque.showPropertyData(36, '56')">
					<polyline id="CL56_2_" class="property pb-sprite-1" points="945.6,1948.9 1134.8,1971.1 1124.6,2057.6 935.4,2035.4 945.6,1948.9"/>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 951.6813 2005.1392)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1119.1556 2029.3579)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1016.1968 1976.1464)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 994.9457 2009.6659)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1027.0989 1997.5282)" class="mustard__fill futura-book fs__16px">56</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[56]" ng-click="bosque.showPropertyData(36, '57')">
					<polyline id="CL57_2_" class="property pb-sprite-2" points="1124.6,2057.6 1114.4,2144.3 922.6,2144.3 935.4,2035.4 1124.6,2057.6"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 986.6531 2103.1753)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.42 m2</tspan></text>
					<text transform="matrix(1 0 0 1 1003.259 2139.1003)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.6</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">2</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 939.8514 2106.2439)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">10.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">8</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1108.2866 2115.3701)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.8" y="0" class="white__fill futura-light fs__15px">3</tspan></text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1013.1645 2058.4758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.5</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1016.1938 2090.4683)" class="mustard__fill futura-book fs__16px">57</text>
					</g>
					<g>
						<polyline class="st8" points="965.1,2102.2 953.5,2090.7 965.1,2079.1 965.1,2102.2"/>
						<polyline class="st9" points="965.1,2079.1 976.6,2090.7 965.1,2102.2 965.1,2079.1"/>
					</g>
				</g>
				<g id="DIVISIONES_9_">
					<line class="stx11" x1="1132.1" y1="359.6" x2="1321.3" y2="381.8"/>
					<line class="stx11" x1="1121.9" y1="446.1" x2="1311.1" y2="468.3"/>
					<line class="stx11" x1="1111.8" y1="532.6" x2="1301" y2="554.8"/>
					<line class="stx11" x1="1101.6" y1="619.1" x2="1290.8" y2="641.3"/>
					<line class="stx11" x1="1091.5" y1="705.6" x2="1280.7" y2="727.8"/>
					<line class="stx11" x1="1081.3" y1="792.1" x2="1270.5" y2="814.3"/>
					<line class="stx11" x1="1069.9" y1="889.4" x2="1259.1" y2="911.6"/>
					<line class="stx11" x1="1058.5" y1="986.7" x2="1247.7" y2="1008.9"/>
					<line class="stx11" x1="1047.1" y1="1084" x2="1236.3" y2="1106.2"/>
					<line class="stx11" x1="1036.9" y1="1170.5" x2="1226.1" y2="1192.7"/>
					<line class="stx11" x1="1026.8" y1="1256.9" x2="1216" y2="1279.1"/>
					<line class="stx11" x1="1016.6" y1="1343.4" x2="1205.8" y2="1365.6"/>
					<line class="stx11" x1="1006.4" y1="1429.9" x2="1195.6" y2="1452.1"/>
					<line class="stx11" x1="996.3" y1="1516.4" x2="1185.5" y2="1538.6"/>
					<line class="stx11" x1="986.2" y1="1602.9" x2="1175.3" y2="1625.1"/>
					<line class="stx11" x1="976" y1="1689.4" x2="1165.2" y2="1711.6"/>
					<line class="stx11" x1="965.9" y1="1775.9" x2="1155" y2="1798.1"/>
					<line class="stx11" x1="955.7" y1="1862.4" x2="1144.9" y2="1884.6"/>
					<line class="stx11" x1="945.6" y1="1948.9" x2="1134.8" y2="1971.1"/>
					<line class="stx11" x1="935.4" y1="2035.4" x2="1124.6" y2="2057.6"/>
				</g>
			</g>
			<g id="ISLA_D">
				<g class="property__active" ng-class="bosque.inmovablesClassList[57]" ng-click="bosque.showPropertyData(36, '58')">
					<polyline id="DL58_2_" class="property pb-sprite-1" points="994.8,2437.3 994.8,2247.6 1103.8,2247.6 1081.9,2433.8 994.8,2437.3"/>
					<text transform="matrix(0 -1 1 0 1055.4542 2376.1521)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">5.36 m2</tspan></text>
					<text transform="matrix(1 0 0 1 1034.0636 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">10.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<text transform="matrix(0 -1 1 0 1013.0119 2357.6804)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.4</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">3</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1079.2488 2355.2175)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">17.2</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">3</tspan></text>
					<text transform="matrix(0.9993 -3.839011e-02 3.839011e-02 0.9993 1023.6965 2422.292)" class="white__fill futura-light fs__15px">8.01</text>
					<g>
						<text transform="matrix(0 -1 1 0 1036.4767 2351.0535)" class="mustard__fill futura-book fs__16px">58</text>
					</g>
					<g>
						<polyline class="st8" points="1049.3,2292.4 1037.8,2280.9 1049.3,2269.3 1049.3,2292.4"/>
						<polyline class="st9" points="1049.3,2269.3 1060.9,2280.9 1049.3,2292.4 1049.3,2269.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[58]" ng-click="bosque.showPropertyData(36, '59')">
					<polyline id="DL59_2_" class="property pb-sprite-2" points="994.8,2247.6 994.8,2437.3 950.3,2439.1 929.8,2421.8 907.8,2406.5 907.8,2247.6 
						994.8,2247.6"/>
					<text transform="matrix(0 -1 1 0 965.1496 2370.3943)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">13</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.20 m2</tspan></text>
					<text transform="matrix(1 0 0 1 939.4455 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 925.4318 2342.2869)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14.6</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 -3.839011e-02 3.839011e-02 0.9993 957.8731 2424.8989)" class="white__fill futura-light fs__15px">4.10</text>
					<text transform="matrix(0.7934 0.6088 -0.6088 0.7934 922.0453 2406.6453)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">4.9</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">3</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 950.6633 2343.7068)" class="mustard__fill futura-book fs__16px">59</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[59]" ng-click="bosque.showPropertyData(36, '60')">
					<polyline id="DL60_2_" class="property pb-sprite-1" points="798.9,2247.6 907.8,2247.6 907.8,2406.5 882.2,2392.2 855.4,2380.6 827.5,2371.9 
						798.9,2365.9 798.9,2247.6"/>
					<text transform="matrix(0 -1 1 0 873.4435 2361.156)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">3.47 m2</tspan></text>
					<text transform="matrix(1 0 0 1 838.0754 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">10.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 815.7892 2325.0867)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">1.03</tspan></text>
					<text transform="matrix(0.9367 0.3502 -0.3502 0.9367 840.0515 2366.7278)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">0.73</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 856.9172 2330.241)" class="mustard__fill futura-book fs__16px">60</text>
					</g>
					<g>
						<polyline class="st8" points="853.3,2288.6 841.8,2277.1 853.3,2265.5 853.3,2288.6"/>
						<polyline class="st9" points="853.3,2265.5 864.9,2277.1 853.3,2288.6 853.3,2265.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[60]" ng-click="bosque.showPropertyData(36, '61')">
					<polyline id="DL61_2_" class="property pb-sprite-2" points="546.8,2447 546.8,2247.6 633.9,2247.6 633.9,2389.5 609.8,2402.2 587,2417.1 
						565.7,2434.2 556.6,2441.2 546.8,2447"/>
					<text transform="matrix(0 -1 1 0 604.4767 2354.4861)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.08 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 564.7238 2362.5447)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">18.3</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">2</tspan></text>
					<text transform="matrix(0.8281 -0.5606 0.5606 0.8281 558.9579 2428.052)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">2.1</tspan><tspan x="20.8" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<text transform="matrix(0.8368 -0.5476 0.5476 0.8368 598.727 2394.8508)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">7.5</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<text transform="matrix(1 0 0 1 578.4797 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 628.2121 2336.0378)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">3.05</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 589.6896 2327.1521)" class="mustard__fill futura-book fs__16px">61</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[61]" ng-click="bosque.showPropertyData(36, '62')">
					<polyline id="DL62_2_" class="property pb-sprite-1" points="459.7,2247.6 546.8,2247.6 546.8,2447 534.8,2452 522.2,2455.3 509.3,2456.8 
						459.7,2458.7 459.7,2247.6"/>
					<text transform="matrix(0 -1 1 0 517.3483 2389.4968)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">3.07 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 479.1261 2368.4265)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">19.4</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.9993 -3.839011e-02 3.839011e-02 0.9993 471.1566 2444.9875)" class="white__fill futura-light fs__15px">4.56</text>
					<text transform="matrix(0.9677 -0.2521 0.2521 0.9677 516.3449 2445.0159)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">3.5</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">9</tspan></text>
					<text transform="matrix(1 0 0 1 491.3966 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 502.5915 2361.7537)" class="mustard__fill futura-book fs__16px">62</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[62]" ng-click="bosque.showPropertyData(36, '63')">
					<polyline id="DL63_2_" class="property pb-sprite-2" points="372.6,2462.2 372.6,2247.6 459.7,2247.6 459.7,2458.7 372.6,2462.2"/>
					<text transform="matrix(0 -1 1 0 429.9523 2390.3396)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">6.48 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 391.6173 2370.1248)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">19.7</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">2</tspan></text>
					<text transform="matrix(0.9993 -3.839011e-02 3.839011e-02 0.9993 401.4831 2448.1394)" class="white__fill futura-light fs__15px">8.01</text>
					<text transform="matrix(1 0 0 1 404.3283 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 415.5011 2363.4792)" class="mustard__fill futura-book fs__16px">63</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[63]" ng-click="bosque.showPropertyData(36, '64')">
					<polyline id="DL64_2_" class="property pb-sprite-1" points="285.5,2247.6 372.6,2247.6 372.6,2462.2 285.5,2465.7 285.5,2247.6"/>
					<text transform="matrix(0 -1 1 0 343.6266 2391.7039)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">9.04 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 303.6637 2371.9021)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">4</tspan></text>
					<text transform="matrix(0.9993 -3.839011e-02 3.839011e-02 0.9993 314.4251 2451.5818)" class="white__fill futura-light fs__15px">8.01</text>
					<text transform="matrix(1 0 0 1 317.2419 2261.8142)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 328.4176 2365.2546)" class="mustard__fill futura-book fs__16px">64</text>
					</g>
					<g>
						<polyline class="st8" points="329.1,2292.4 317.5,2280.9 329.1,2269.3 329.1,2292.4"/>
						<polyline class="st9" points="329.1,2269.3 340.6,2280.9 329.1,2292.4 329.1,2269.3"/>
					</g>
				</g>
				<g id="DIVISIONES_7_">
					<line class="stx11" x1="372.6" y1="2247.6" x2="372.6" y2="2462.2"/>
					<line class="stx11" x1="459.7" y1="2458.7" x2="459.7" y2="2247.6"/>
					<line class="stx11" x1="546.8" y1="2247.6" x2="546.8" y2="2447"/>
					<line class="stx11" x1="633.9" y1="2247.6" x2="633.9" y2="2389.5"/>
					<line class="stx11" x1="798.9" y1="2247.6" x2="798.9" y2="2367.6"/>
					<line class="stx11" x1="907.8" y1="2247.6" x2="907.8" y2="2406.5"/>
					<line class="stx11" x1="994.8" y1="2247.6" x2="994.8" y2="2437.3"/>
					<line class="stx11" x1="285.5" y1="2247.6" x2="285.5" y2="2465.7"/>
				</g>
			</g>
			<g id="ISLA_E_1_">
				<g class="property__active" ng-class="bosque.inmovablesClassList[64]" ng-click="bosque.showPropertyData(36, '65')">
					<polyline id="EL65_2_" class="property pb-sprite-2" points="277.5,2145.3 277.5,1971.1 375.9,1971.1 375.9,2145.3 277.5,2145.3"/>
					<text transform="matrix(0 -0.9959 1 0 337.7531 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 314.8161 2141.0935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 292.3634 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 314.8161 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 320.5797 2058.2488)" class="mustard__fill futura-book fs__16px">65</text>
					</g>
					<g>
						<polyline class="st8" points="321.2,2122.1 309.6,2110.5 321.2,2099 321.2,2122.1"/>
						<polyline class="st9" points="321.2,2099 332.8,2110.5 321.2,2122.1 321.2,2099"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[65]" ng-click="bosque.showPropertyData(36, '66')">
					<polyline id="EL66_2_" class="property pb-sprite-1" points="375.9,1971.1 463.3,1971.1 463.3,2145.3 375.9,2145.3 375.9,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 434.3424 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 407.7331 2141.0935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 392.1544 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 407.7331 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 418.9543 2058.2634)" class="mustard__fill futura-book fs__16px">66</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[66]" ng-click="bosque.showPropertyData(36, '67')">
					<polyline id="EL67_2_" class="property pb-sprite-2" points="463.3,2145.3 463.3,1971.1 550.8,1971.1 550.8,2145.3 463.3,2145.3"/>
					<text transform="matrix(0 -0.9959 1 0 518.8156 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 495.1476 2141.0935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 477.4855 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 495.1476 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 506.4054 2058.2634)" class="mustard__fill futura-book fs__16px">67</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[67]" ng-click="bosque.showPropertyData(36, '68')">
					<polyline id="EL69_4_" class="property pb-sprite-1" points="550.8,1971.1 638.2,1971.1 638.2,2145.3 550.8,2145.3 550.8,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 609.134 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 582.592 2141.0935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 564.8176 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 582.592 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 593.8254 2058.2488)" class="mustard__fill futura-book fs__16px">68</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[68]" ng-click="bosque.showPropertyData(36, '69')">
					<polyline id="EL69_1_" class="property pb-sprite-2" points="638.2,2145.3 638.2,1971.1 725.6,1971.1 725.6,2145.3 638.2,2145.3"/>
					<text transform="matrix(0 -0.9959 1 0 698.6408 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 670.0363 2141.0935)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 652.6535 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 670.0363 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 681.2824 2058.4392)" class="mustard__fill futura-book fs__16px">69</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[69]" ng-click="bosque.showPropertyData(36, '70')">
					<polyline id="EL70_2_" class="property pb-sprite-1" points="725.6,1971.1 841.6,1971.1 821,2145.3 725.6,2145.3 725.6,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 795.8322 2085.7878)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">15</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">4.65 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 759.1867 2141.0935)" class="white__fill futura-light fs__15px">8.73</text>
					<text transform="matrix(0 -0.9959 1 0 739.7541 2073.4724)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9892 0.9932 0.1162 824.7933 2072.7573)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.1</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<text transform="matrix(1.0041 0 0 1 766.0558 1984.3239)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">0.61</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 767.2131 2058.4539)" class="mustard__fill futura-book fs__16px">70</text>
					</g>
					<g>
						<polyline class="st8" points="767.9,2122.1 756.3,2110.5 767.9,2099 767.9,2122.1"/>
						<polyline class="st9" points="767.9,2099 779.5,2110.5 767.9,2122.1 767.9,2099"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[70]" ng-click="bosque.showPropertyData(36, '71')">
					<polyline id="EL71_2_" class="property pb-sprite-2" points="736.6,1971.1 736.6,1797 862.1,1797 841.6,1971.1 736.6,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 803.8742 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.70 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 774.9269 1966.0856)" class="white__fill futura-light fs__15px">9.61</text>
					<text transform="matrix(1.0041 0 0 1 784.0383 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">11.4</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">8</tspan></text>
					<text transform="matrix(0.1167 -0.9892 0.9932 0.1162 845.3048 1898.5928)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.1</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 752.4953 1903.1188)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 777.4641 1901.0729)" class="mustard__fill futura-book fs__16px">71</text>
					</g>
					<g>
						<polyline class="st8" points="785.3,1841.8 773.7,1830.3 785.3,1818.7 785.3,1841.8"/>
						<polyline class="st9" points="785.3,1818.7 796.8,1830.3 785.3,1841.8 785.3,1818.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[71]" ng-click="bosque.showPropertyData(36, '72')">
					<polyline id="EL72_2_" class="property pb-sprite-1" points="638.2,1797 736.6,1797 736.6,1971.1 638.2,1971.1 638.2,1797"/>
					<text transform="matrix(0 -0.9959 1 0 697.2121 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 675.4933 1966.0856)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 675.4933 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 652.6535 1899.3141)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 681.2824 1901.0573)" class="mustard__fill futura-book fs__16px">72</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[72]" ng-click="bosque.showPropertyData(36, '73')">
					<polyline id="EL73_2_" class="property pb-sprite-2" points="550.8,1971.1 550.8,1797 638.2,1797 638.2,1971.1 550.8,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 606.8664 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 582.592 1966.0856)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 582.592 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 564.8176 1899.3141)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 591.4699 1901.0573)" class="mustard__fill futura-book fs__16px">73</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[73]" ng-click="bosque.showPropertyData(36, '74')">
					<polyline id="EL74_2_" class="property pb-sprite-1" points="463.3,1797 550.8,1797 550.8,1971.1 463.3,1971.1 463.3,1797"/>
					<text transform="matrix(0 -0.9959 1 0 523.1027 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 495.1476 1966.0856)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 495.1476 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 477.4855 1899.3141)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 506.4054 1901.0729)" class="mustard__fill futura-book fs__16px">74</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[74]" ng-click="bosque.showPropertyData(36, '75')">
					<polyline id="EL75_2_" class="property pb-sprite-2" points="375.9,1971.1 375.9,1797 463.3,1797 463.3,1971.1 375.9,1971.1"/>
					<text transform="matrix(0 -0.9959 1 0 436.1105 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 407.7331 1966.0856)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 407.7331 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 392.1544 1899.3141)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 418.9543 1901.0729)" class="mustard__fill futura-book fs__16px">75</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[75]" ng-click="bosque.showPropertyData(36, '76')">
					<polyline id="EL76_2_" class="property pb-sprite-1" points="277.5,1797 375.9,1797 375.9,1971.1 277.5,1971.1 277.5,1797"/>
					<text transform="matrix(0 -0.9959 1 0 335.9772 1928.527)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.7" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1.0041 0 0 1 314.8161 1966.0856)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1.0041 0 0 1 314.8161 1810.2565)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -0.9959 1 0 292.3634 1899.3141)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29.1" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -0.9959 1 0 320.5797 1901.0573)" class="mustard__fill futura-book fs__16px">76</text>
					</g>
					<g>
						<polyline class="st8" points="321.2,1841.8 309.6,1830.3 321.2,1818.7 321.2,1841.8"/>
						<polyline class="st9" points="321.2,1818.7 332.8,1830.3 321.2,1841.8 321.2,1818.7"/>
					</g>
				</g>
				<g id="DIVISIONES_4_">
					<line class="stx11" x1="841.6" y1="1971.1" x2="277.5" y2="1971.1"/>
					<line class="stx11" x1="725.6" y1="1971.1" x2="725.6" y2="2145.3"/>
					<line class="stx11" x1="638.2" y1="1797" x2="638.2" y2="2145.3"/>
					<line class="stx11" x1="550.8" y1="1797" x2="550.8" y2="2145.3"/>
					<line class="stx11" x1="463.3" y1="1797" x2="463.3" y2="2145.3"/>
					<line class="stx11" x1="375.9" y1="1797" x2="375.9" y2="2145.3"/>
					<line class="stx11" x1="736.6" y1="1797" x2="736.6" y2="1971.1"/>
				</g>
			</g>
			<g id="ISLA_F">
				<g class="property__active" ng-class="bosque.inmovablesClassList[76]" ng-click="bosque.showPropertyData(36, '77')">
					<polyline id="FL77_2_" class="property pb-sprite-1" points="375.8,1519.8 375.8,1694 277.9,1694 277.9,1519.8 375.8,1519.8"/>
					<text transform="matrix(0 -1 1 0 336.256 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 315.0348 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 291.4416 1622.0992)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 315.0348 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 320.7775 1615.399)" class="mustard__fill futura-book fs__16px">77</text>
					</g>
					<g>
						<polyline class="st8" points="326.9,1674.1 315.3,1662.5 326.9,1651 326.9,1674.1"/>
						<polyline class="st9" points="326.9,1651 338.4,1662.5 326.9,1674.1 326.9,1651"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[77]" ng-click="bosque.showPropertyData(36, '78')">
					<polyline id="FL78_2_" class="property pb-sprite-2" points="473.8,1519.8 473.8,1694 375.8,1694 375.8,1519.8 473.8,1519.8"/>
					<text transform="matrix(0 -1 1 0 433.6056 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 412.984 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 412.984 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 392.985 1625.9557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 418.7458 1615.399)" class="mustard__fill futura-book fs__16px">78</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[78]" ng-click="bosque.showPropertyData(36, '79')">
					<polyline id="FL79_2_" class="property pb-sprite-1" points="560.9,1519.8 560.9,1694 473.8,1694 473.8,1519.8 560.9,1519.8"/>
					<text transform="matrix(0 -1 1 0 532.7419 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 505.5382 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 505.5382 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 490.1286 1625.9557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 516.6965 1615.399)" class="mustard__fill futura-book fs__16px">79</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[79]" ng-click="bosque.showPropertyData(36, '80')">
					<polyline id="FL80_2_" class="property pb-sprite-2" points="648,1519.8 648,1694 560.9,1694 560.9,1519.8 648,1519.8"/>
					<text transform="matrix(0 -1 1 0 619.2707 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 592.6271 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 592.6271 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 577.5715 1625.9557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 603.801 1615.399)" class="mustard__fill futura-book fs__16px">80</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[80]" ng-click="bosque.showPropertyData(36, '81')">
					<polyline id="FL81_2_" class="property pb-sprite-1" points="745.9,1519.8 745.9,1694 648,1694 648,1519.8 745.9,1519.8"/>
					<text transform="matrix(0 -1 1 0 709.3976 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 685.132 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 685.132 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 663.4289 1625.9713)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 690.8869 1615.399)" class="mustard__fill futura-book fs__16px">81</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[81]" ng-click="bosque.showPropertyData(36, '82')">
					<polyline id="FL82_2_" class="property pb-sprite-2" points="843.9,1519.8 843.9,1694 745.9,1694 745.9,1519.8 843.9,1519.8"/>
					<text transform="matrix(0 -1 1 0 804.1926 1643.0846)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">14</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">4.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 783.1008 1533.5758)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 780.7971 1690.1178)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 761.1193 1625.9557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 840.3244 1625.9557)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 788.8566 1615.399)" class="mustard__fill futura-book fs__16px">82</text>
					</g>
					<g>
						<polyline class="st8" points="794.9,1674.1 783.4,1662.5 794.9,1651 794.9,1674.1"/>
						<polyline class="st9" points="794.9,1651 806.5,1662.5 794.9,1674.1 794.9,1651"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[82]" ng-click="bosque.showPropertyData(36, '83')">
					<polyline id="FL83_2_" class="property pb-sprite-2" points="800.4,1302.1 892.4,1302.1 892.4,1519.8 800.4,1519.8 800.4,1302.1"/>
					<text transform="matrix(0 -1 1 0 859.3244 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">9.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 834.549 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.4</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">5</tspan></text>
					<text transform="matrix(0 -1 1 0 886.549 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 834.549 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.4</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">5</tspan></text>
					<text transform="matrix(0 -1 1 0 819.1516 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 845.7316 1419.4615)" class="mustard__fill futura-book fs__16px">83</text>
					</g>
					<g>
						<polyline class="st8" points="846.4,1357.1 834.8,1345.6 846.4,1334 846.4,1357.1"/>
						<polyline class="st9" points="846.4,1334 857.9,1345.6 846.4,1357.1 846.4,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[83]" ng-click="bosque.showPropertyData(36, '84')">
					<polyline id="FL84_2_" class="property pb-sprite-1" points="800.4,1519.8 713.3,1519.8 713.3,1302.1 800.4,1302.1 800.4,1519.8"/>
					<text transform="matrix(0 -1 1 0 771.8488 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 745.007 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 730.508 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 745.007 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 756.1769 1419.4615)" class="mustard__fill futura-book fs__16px">84</text>
					</g>
					<g>
						<polyline class="st8" points="756.8,1357.1 745.3,1345.6 756.8,1334 756.8,1357.1"/>
						<polyline class="st9" points="756.8,1334 768.4,1345.6 756.8,1357.1 756.8,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[84]" ng-click="bosque.showPropertyData(36, '85')">
					<polyline id="FL85_2_" class="property pb-sprite-2" points="713.3,1519.8 626.2,1519.8 626.2,1302.1 713.3,1302.1 713.3,1519.8"/>
					<text transform="matrix(0 -1 1 0 680.8215 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 657.9084 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 642.9445 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 657.9084 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 666.6603 1419.4615)" class="mustard__fill futura-book fs__16px">85</text>
					</g>
					<g>
						<polyline class="st8" points="669.8,1357.1 658.2,1345.6 669.8,1334 669.8,1357.1"/>
						<polyline class="st9" points="669.8,1334 681.3,1345.6 669.8,1357.1 669.8,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[85]" ng-click="bosque.showPropertyData(36, '86')">
					<polyline id="FL86_2_" class="property pb-sprite-1" points="626.2,1519.8 539.1,1519.8 539.1,1302.1 626.2,1302.1 626.2,1519.8"/>
					<text transform="matrix(0 -1 1 0 595.0959 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 570.842 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 557.3566 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 570.842 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 579.5685 1419.4615)" class="mustard__fill futura-book fs__16px">86</text>
					</g>
					<g>
						<polyline class="st8" points="582.7,1357.1 571.1,1345.6 582.7,1334 582.7,1357.1"/>
						<polyline class="st9" points="582.7,1334 594.2,1345.6 582.7,1357.1 582.7,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[86]" ng-click="bosque.showPropertyData(36, '87')">
					<polyline id="FL87_2_" class="property pb-sprite-2" points="539.1,1519.8 452,1519.8 452,1302.1 539.1,1302.1 539.1,1519.8"/>
					<text transform="matrix(0 -1 1 0 508.2492 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 483.7648 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 469.5749 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 483.7648 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 492.4796 1419.4615)" class="mustard__fill futura-book fs__16px">87</text>
					</g>
					<g>
						<polyline class="st8" points="495.6,1357.1 484,1345.6 495.6,1334 495.6,1357.1"/>
						<polyline class="st9" points="495.6,1334 507.1,1345.6 495.6,1357.1 495.6,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[87]" ng-click="bosque.showPropertyData(36, '88')">
					<polyline id="FL88_2_" class="property pb-sprite-1" points="452,1519.8 365,1519.8 365,1302.1 452,1302.1 452,1519.8"/>
					<text transform="matrix(0 -1 1 0 420.9167 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 396.6657 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 381.9396 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 396.6657 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 405.4171 1419.4801)" class="mustard__fill futura-book fs__16px">88</text>
					</g>
					<g>
						<polyline class="st8" points="408.5,1357.1 397,1345.6 408.5,1334 408.5,1357.1"/>
						<polyline class="st9" points="408.5,1334 420,1345.6 408.5,1357.1 408.5,1334"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[88]" ng-click="bosque.showPropertyData(36, '89')">
					<polyline id="FL89_2_" class="property pb-sprite-2" points="365,1519.8 277.9,1519.8 277.9,1302.1 365,1302.1 365,1519.8"/>
					<text transform="matrix(0 -1 1 0 335.8732 1455.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 309.571 1515.5201)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.505 1426.1959)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 309.571 1319.1881)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 318.3268 1419.4801)" class="mustard__fill futura-book fs__16px">89</text>
					</g>
					<g>
						<polyline class="st8" points="321.4,1357.1 309.9,1345.6 321.4,1334 321.4,1357.1"/>
						<polyline class="st9" points="321.4,1334 333,1345.6 321.4,1357.1 321.4,1334"/>
					</g>
				</g>
				<g id="DIVISONES_2_">
					<line class="stx11" x1="277.9" y1="1519.8" x2="892.4" y2="1519.8"/>
					<line class="stx11" x1="365" y1="1302.1" x2="365" y2="1519.8"/>
					<line class="stx11" x1="452" y1="1302.1" x2="452" y2="1519.8"/>
					<line class="stx11" x1="539.1" y1="1302.1" x2="539.1" y2="1519.8"/>
					<line class="stx11" x1="626.2" y1="1302.1" x2="626.2" y2="1519.8"/>
					<line class="stx11" x1="713.3" y1="1302.1" x2="713.3" y2="1519.8"/>
					<line class="stx11" x1="800.4" y1="1302.1" x2="800.4" y2="1519.8"/>
					<line class="stx11" x1="892.4" y1="1302.1" x2="892.4" y2="1519.8"/>
					<line class="stx11" x1="375.8" y1="1519.8" x2="375.8" y2="1694"/>
					<line class="stx11" x1="473.8" y1="1519.8" x2="473.8" y2="1694"/>
					<line class="stx11" x1="560.9" y1="1519.8" x2="560.9" y2="1694"/>
					<line class="stx11" x1="648" y1="1519.8" x2="648" y2="1694"/>
					<line class="stx11" x1="745.9" y1="1519.8" x2="745.9" y2="1694"/>
					<line class="stx11" x1="843.9" y1="1519.8" x2="843.9" y2="1694"/>
				</g>
			</g>
			<g id="ISLA_G">
				<g class="property__active" ng-class="bosque.inmovablesClassList[89]" ng-click="bosque.showPropertyData(36, '90')">
					<polyline id="GL90_2_" class="property pb-sprite-2" points="279.6,1114.4 497.3,1114.4 497.3,1201.4 279.6,1201.4 279.6,1114.4"/>
					<text transform="matrix(1 0 0 1 352.7536 1171.1788)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 489.6105 1169.7535)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.7443 1169.7535)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 1132.0983)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 1197.3663)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(1 0 0 1 379.9748 1157.2189)" class="mustard__fill futura-book fs__16px">90</text>
					</g>
					<g>
						<polyline class="st8" points="318.4,1169.4 306.8,1157.9 318.4,1146.4 318.4,1169.4"/>
						<polyline class="st9" points="318.4,1146.4 329.9,1157.9 318.4,1169.4 318.4,1146.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[90]" ng-click="bosque.showPropertyData(36, '91')">
					<polyline id="GL91_2_" class="property pb-sprite-1" points="279.6,1027.3 497.3,1027.3 497.3,1114.4 279.6,1114.4 279.6,1027.3"/>
					<text transform="matrix(1 0 0 1 352.7536 1083.9611)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 489.6105 1082.6691)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.7565 1082.6691)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 1043.0162)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(1 0 0 1 379.9748 1070.1783)" class="mustard__fill futura-book fs__16px">91</text>
					</g>
					<g>
						<polyline class="st8" points="318.4,1082.4 306.8,1070.8 318.4,1059.3 318.4,1082.4"/>
						<polyline class="st9" points="318.4,1059.3 329.9,1070.8 318.4,1082.4 318.4,1059.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[91]" ng-click="bosque.showPropertyData(36, '92')">
					<polyline id="GL92_2_" class="property pb-sprite-2" points="279.6,940.2 497.3,940.2 497.3,1027.3 279.6,1027.3 279.6,940.2"/>
					<text transform="matrix(1 0 0 1 352.7536 996.5778)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 489.6105 995.5651)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.7565 995.5651)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 956.1911)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(1 0 0 1 379.9748 983.0881)" class="mustard__fill futura-book fs__16px">92</text>
					</g>
					<g>
						<polyline class="st8" points="318.4,995.3 306.8,983.7 318.4,972.2 318.4,995.3"/>
						<polyline class="st9" points="318.4,972.2 329.9,983.7 318.4,995.3 318.4,972.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[92]" ng-click="bosque.showPropertyData(36, '93')">
					<polyline id="GL93_2_" class="property pb-sprite-1" points="279.6,853.1 497.3,853.1 497.3,940.2 279.6,940.2 279.6,853.1"/>
					<text transform="matrix(1 0 0 1 352.7536 910.9743)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 489.6105 908.5148)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.7565 908.5148)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 870.405)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(1 0 0 1 379.9748 895.9929)" class="mustard__fill futura-book fs__16px">93</text>
					</g>
					<polyline class="st8" points="318.4,908.2 306.8,896.6 318.4,885.1 318.4,908.2"/>
					<polyline class="st9" points="318.4,885.1 329.9,896.6 318.4,908.2 318.4,885.1"/>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[93]" ng-click="bosque.showPropertyData(36, '94')">
					<polyline id="GL94_2_" class="property pb-sprite-2" points="279.6,766 497.3,766 497.3,853.1 279.6,853.1 279.6,766"/>
					<text transform="matrix(1 0 0 1 352.7536 823.1896)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(0 -1 1 0 489.6105 821.4284)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 373.2589 782.6091)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 295.7565 821.4284)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(1 0 0 1 379.9748 808.9274)" class="mustard__fill futura-book fs__16px">94</text>
					</g>
					<polyline class="st8" points="318.4,821.1 306.8,809.6 318.4,798 318.4,821.1"/>
					<polyline class="st9" points="318.4,798 329.9,809.6 318.4,821.1 318.4,798"/>
				</g>
				<g id="DIVISIONES_3_">
					<line class="stx11" x1="497.3" y1="766" x2="497.3" y2="1201.4"/>
					<line class="stx11" x1="497.3" y1="1114.4" x2="279.6" y2="1114.4"/>
					<line class="stx11" x1="497.3" y1="1027.3" x2="279.6" y2="1027.3"/>
					<line class="stx11" x1="497.3" y1="940.2" x2="279.6" y2="940.2"/>
					<line class="stx11" x1="497.3" y1="853.1" x2="279.6" y2="853.1"/>
				</g>
			</g>
			<g id="ISLA_H">
				<g class="property__active" ng-class="bosque.inmovablesClassList[94]" ng-click="bosque.showPropertyData(36, '95')">
					<polyline id="HL95_2_" class="property pb-sprite-2" points="375.4,447.4 375.4,665.1 277.5,665.1 277.5,447.4 375.4,447.4"/>
					<text transform="matrix(0 -1 1 0 336.9167 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">18</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 314.6193 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 294.547 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 314.6193 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 320.3678 564.7336)" class="mustard__fill futura-book fs__16px">95</text>
					</g>
					<g>
						<polyline class="st8" points="326.4,637.9 314.9,626.3 326.4,614.8 326.4,637.9"/>
						<polyline class="st9" points="326.4,614.8 338,626.3 326.4,637.9 326.4,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[95]" ng-click="bosque.showPropertyData(36, '96')">
					<polyline id="HL96_2_" class="property pb-sprite-1" points="462.5,447.4 462.5,665.1 375.4,665.1 375.4,447.4 462.5,447.4"/>
					<text transform="matrix(0 -1 1 0 433.2209 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 407.1544 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 407.1544 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 394.1647 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 418.3302 564.7175)" class="mustard__fill futura-book fs__16px">96</text>
					</g>
					<g>
						<polyline class="st8" points="419,637.9 407.4,626.3 419,614.8 419,637.9"/>
						<polyline class="st9" points="419,614.8 430.5,626.3 419,637.9 419,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[96]" ng-click="bosque.showPropertyData(36, '97')">
					<polyline id="HL97_2_" class="property pb-sprite-2" points="549.6,447.4 549.6,665.1 462.5,665.1 462.5,447.4 549.6,447.4"/>
					<text transform="matrix(0 -1 1 0 519.3488 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 494.2101 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 494.2101 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 480.9909 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 505.4254 564.7512)" class="mustard__fill futura-book fs__16px">97</text>
					</g>
					<g>
						<polyline class="st8" points="506.1,637.9 494.5,626.3 506.1,614.8 506.1,637.9"/>
						<polyline class="st9" points="506.1,614.8 517.6,626.3 506.1,637.9 506.1,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[97]" ng-click="bosque.showPropertyData(36, '98')">
					<polyline id="HL98_2_" class="property pb-sprite-1" points="636.7,447.4 636.7,665.1 549.6,665.1 549.6,447.4 636.7,447.4"/>
					<text transform="matrix(0 -1 1 0 607.509 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 581.3 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 581.3 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 568.0803 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 592.4885 564.7336)" class="mustard__fill futura-book fs__16px">98</text>
					</g>
					<g>
						<polyline class="st8" points="593.1,637.9 581.6,626.3 593.1,614.8 593.1,637.9"/>
						<polyline class="st9" points="593.1,614.8 604.7,626.3 593.1,637.9 593.1,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[98]" ng-click="bosque.showPropertyData(36, '99')">
					<polyline id="HL99_2_" class="property pb-sprite-2" points="723.8,447.4 723.8,665.1 636.7,665.1 636.7,447.4 723.8,447.4"/>
					<text transform="matrix(0 -1 1 0 696.0002 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 668.3869 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 668.3869 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 656.3635 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 679.5881 564.7336)" class="mustard__fill futura-book fs__16px">99</text>
					</g>
					<g>
						<polyline class="st8" points="680.2,637.9 668.7,626.3 680.2,614.8 680.2,637.9"/>
						<polyline class="st9" points="680.2,614.8 691.8,626.3 680.2,637.9 680.2,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[99]" ng-click="bosque.showPropertyData(36, '100')">
					<polyline id="HL100_2_" class="property pb-sprite-1" points="810.8,447.4 810.8,665.1 723.8,665.1 723.8,447.4 810.8,447.4"/>
					<text transform="matrix(0 -1 1 0 783.756 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 755.4426 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 755.4426 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 742.9621 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 766.6555 569.1452)" class="mustard__fill futura-book fs__16px">100</text>
					</g>
					<g>
						<polyline class="st8" points="767.3,637.9 755.8,626.3 767.3,614.8 767.3,637.9"/>
						<polyline class="st9" points="767.3,614.8 778.9,626.3 767.3,637.9 767.3,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[100]" ng-click="bosque.showPropertyData(36, '101')">
					<polyline id="HL101_2_" class="property pb-sprite-2" points="897.9,447.4 897.9,665.1 810.8,665.1 810.8,447.4 897.9,447.4"/>
					<text transform="matrix(0 -1 1 0 867.4631 593.2258)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">0.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 842.5383 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 842.5383 657.4055)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 830.131 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 853.7443 569.1452)" class="mustard__fill futura-book fs__16px">101</text>
					</g>
					<g>
						<polyline class="st8" points="854.4,637.9 842.8,626.3 854.4,614.8 854.4,637.9"/>
						<polyline class="st9" points="854.4,614.8 865.9,626.3 854.4,637.9 854.4,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[101]" ng-click="bosque.showPropertyData(36, '102')">
					<polyline id="HL102_2_" class="property pb-sprite-1" points="1017.9,447.4 992.4,665.1 897.9,665.1 897.9,447.4 1017.9,447.4"/>
					<text transform="matrix(0 -1 1 0 959.7404 595.6633)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">196.98</tspan><tspan x="45.7" y="0" class="white__fill futura-light fs__15px"> m2</tspan></text>
					<text transform="matrix(1 0 0 1 940.4377 463.1257)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">1.03</tspan></text>
					<text transform="matrix(1 0 0 1 931.0646 657.4055)" class="white__fill futura-light fs__15px">8.68</text>
					<text transform="matrix(0 -1 1 0 916.1955 571.4977)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">20.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 998.8806 572.8984)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">2</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">0.14</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 944.5021 569.1599)" class="mustard__fill futura-book fs__16px">102</text>
					</g>
					<g>
						<polyline class="st8" points="950.6,637.9 939,626.3 950.6,614.8 950.6,637.9"/>
						<polyline class="st9" points="950.6,614.8 962.1,626.3 950.6,637.9 950.6,614.8"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[102]" ng-click="bosque.showPropertyData(36, '103')">
					<polyline id="HL103_2_" class="property pb-sprite-2" points="897.9,447.4 897.9,273.2 1038.4,273.2 1017.9,447.4 897.9,447.4"/>
					<text transform="matrix(0 -1 1 0 973.9172 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">191</tspan><tspan x="24.9" y="0" class="white__fill futura-light fs__15px">.39 m2</tspan></text>
					<text transform="matrix(1 0 0 1 940.4377 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">1.03</tspan></text>
					<text transform="matrix(1 0 0 1 952.9103 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12.9</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 916.1955 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1022.1418 374.7502)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.1</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">1</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 957.2736 373.0739)" class="mustard__fill futura-book fs__16px">103</text>
					</g>
					<g>
						<polyline class="st8" points="968.1,314.8 956.6,303.3 968.1,291.7 968.1,314.8"/>
						<polyline class="st9" points="968.1,291.7 979.7,303.3 968.1,314.8 968.1,291.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[103]" ng-click="bosque.showPropertyData(36, '104')">
					<polyline id="HL104_2_" class="property pb-sprite-1" points="810.8,273.2 897.9,273.2 897.9,447.4 810.8,447.4 810.8,273.2"/>
					<text transform="matrix(0 -1 1 0 867.1467 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 842.5383 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 842.5383 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 830.131 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 853.7443 373.0954)" class="mustard__fill futura-book fs__16px">104</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[104]" ng-click="bosque.showPropertyData(36, '105')">
					<polyline id="HL105_2_" class="property pb-sprite-2" points="723.8,447.4 723.8,273.2 810.8,273.2 810.8,447.4 723.8,447.4"/>
					<text transform="matrix(0 -1 1 0 781.843 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 755.4426 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 755.4426 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 742.9621 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 766.6555 373.0954)" class="mustard__fill futura-book fs__16px">105</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[105]" ng-click="bosque.showPropertyData(36, '106')">
					<polyline id="HL106_2_" class="property pb-sprite-1" points="636.7,273.2 723.8,273.2 723.8,447.4 636.7,447.4 636.7,273.2"/>
					<text transform="matrix(0 -1 1 0 694.1447 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 668.3869 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 668.3869 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 656.3635 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 679.5881 373.0739)" class="mustard__fill futura-book fs__16px">106</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[106]" ng-click="bosque.showPropertyData(36, '107')">
					<polyline id="HL107_2_" class="property pb-sprite-2" points="549.6,447.4 549.6,273.2 636.7,273.2 636.7,447.4 549.6,447.4"/>
					<text transform="matrix(0 -1 1 0 607.5851 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 581.3 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 581.3 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 568.0803 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 592.4885 373.0739)" class="mustard__fill futura-book fs__16px">107</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[107]" ng-click="bosque.showPropertyData(36, '108')">
					<polyline id="HL108_2_" class="property pb-sprite-1" points="462.5,273.2 549.6,273.2 549.6,447.4 462.5,447.4 462.5,273.2"/>
					<text transform="matrix(0 -1 1 0 521.0685 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 494.2101 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 494.2101 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 480.9811 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 505.4254 373.0954)" class="mustard__fill futura-book fs__16px">108</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[108]" ng-click="bosque.showPropertyData(36, '109')">
					<polyline id="HL109_2_" class="property pb-sprite-2" points="375.4,447.4 375.4,273.2 462.5,273.2 462.5,447.4 375.4,447.4"/>
					<text transform="matrix(0 -1 1 0 434.3097 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">12</tspan><tspan x="16.6" y="0" class="white__fill futura-light fs__15px">8.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 407.1544 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 407.1544 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">8.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 394.1647 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 418.3302 373.0558)" class="mustard__fill futura-book fs__16px">109</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[109]" ng-click="bosque.showPropertyData(36, '110')">
					<polyline id="HL110_2_" class="property pb-sprite-1" points="277.5,273.2 375.4,273.2 375.4,447.4 277.5,447.4 277.5,273.2"/>
					<text transform="matrix(0 -1 1 0 337.963 396.3234)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">1</tspan><tspan x="8.3" y="0" class="white__fill futura-light fs__15px">44.00 m2</tspan></text>
					<text transform="matrix(1 0 0 1 314.6193 441.2863)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(1 0 0 1 314.6193 289.4348)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">9.0</tspan><tspan x="20.7" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<text transform="matrix(0 -1 1 0 294.547 375.5334)"><tspan x="0" y="0" class="white__fill futura-light fs__15px">16.0</tspan><tspan x="29" y="0" class="white__fill futura-light fs__15px">0</tspan></text>
					<g>
						<text transform="matrix(0 -1 1 0 320.362 373.0739)" class="mustard__fill futura-book fs__16px">110</text>
					</g>
					<g>
						<polyline class="st8" points="326.4,314.8 314.9,303.3 326.4,291.7 326.4,314.8"/>
						<polyline class="st9" points="326.4,291.7 338,303.3 326.4,314.8 326.4,291.7"/>
					</g>
				</g>
				<g id="DIVISIONES_2_">
					<line class="stx11" x1="375.4" y1="273.2" x2="375.4" y2="665.1"/>
					<line class="stx11" x1="462.5" y1="665.1" x2="462.5" y2="273.2"/>
					<line class="stx11" x1="549.6" y1="273.2" x2="549.6" y2="665.1"/>
					<line class="stx11" x1="636.7" y1="665.1" x2="636.7" y2="273.2"/>
					<line class="stx11" x1="723.8" y1="273.2" x2="723.8" y2="665.1"/>
					<line class="stx11" x1="810.8" y1="665.1" x2="810.8" y2="273.2"/>
					<line class="stx11" x1="897.9" y1="665.1" x2="897.9" y2="273.2"/>
					<line class="stx11" x1="277.5" y1="447.4" x2="1017.9" y2="447.4"/>
				</g>
			</g>
			<g id="COMPLEMENTO">
				<g>
					<text transform="matrix(0.9997 2.572983e-02 -2.355875e-02 1.1068 175.0012 2434.3323)" class="blue__fill futura-book fs__11px">ACCESO</text>
					<path class="blue__fill" d="M198.3,2414c-5.9-0.1-10.7,5-11,11.3l-15.5-0.2l13.3-12.7l13.3-12.7l13.1,13l13.2,13l-15.5-0.2
						C208.9,2419.2,204.1,2414.1,198.3,2414"/>
				</g>
				<g>
					<text transform="matrix(0.9998 8.698441e-04 1.969517e-02 1.1032 52.8773 2408.1672)" class="blue__fill futura-book fs__11px">SALIDA</text>
					<path class="blue__fill" d="M73.4,2424.6c-5.7,0-10.5-4.9-11-11.2l-15.2,0l13.3,12.5l13.3,12.5l12.7-12.6l12.7-12.6l-15.2,0
						C83.7,2419.6,79.1,2424.6,73.4,2424.6"/>
				</g>
				<path class="stx21" d="M249.7,2464.8c85.4-3.4,170.9-6.8,256.3-10.3c23.1-1.4,36.8-8.1,44.8-13.6c4.2-2.9,13.1-9.8,22-16.7
					c6-4.7,11-8.6,14.3-11.2c18.9-13.2,91.8-60.8,192.9-50.9c89.9,8.9,147.9,57.9,166.2,74.8c44.5-1.8,89.1-3.6,133.6-5.3
					c95.3-812,190.6-1624,285.9-2436c-455,0-910,0-1365.1,0v2482.8h26"/>
			</g>

		</svg>

    </div>

</body>
</html>
