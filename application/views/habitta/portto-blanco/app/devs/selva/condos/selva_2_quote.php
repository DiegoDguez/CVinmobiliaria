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

<body ng-controller="PBSelvaQuoteCtrl as selva">

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


	<div class="modal-dialog" ng-class="selva.dialogDisplay">
		<div class="backdrop-dialog" ng-click="selva.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="selva.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{selva.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{selva.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{selva.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{selva.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{selva.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{selva.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{selva.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{selva.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{selva.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{selva.month}} y paga la primera mensualidad hasta {{selva.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{selva.month + ' ' + selva.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
						
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://wa.me/+524422912223?text=Me%20interesa%20informacion%20de%20PorttoBlanco">APÁRTAR AQUÍ</a>
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
					<h1 class="center-align">Selva 2</h1>
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
			y="0px" viewBox="0 0 1366 2067" style="enable-background:new 0 0 1366 2067;" xml:space="preserve">

			<style type="text/css">
				.st8{fill:#E2A63C;}
				.st9{opacity:0.6;fill:#E2A63C;}
				.stx11{fill:none;stroke:#FFFFFF;stroke-width:1.7614;stroke-miterlimit:10;}
				.stx16{fill:#2E2B50;}
				.stx17{fill:#2D2A4C;}
				.stx20{fill:none;stroke:#000000;stroke-width:3.5227;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="2067" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/selva/condos/selva-2.jpg" transform="matrix(0.9979 0 0 0.9979 3.1741 3.5711)"></image>

			<g>
				<g id="isla_A_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[114]" ng-click="selva.showPropertyData(28, '1')">
						<polygon class="property pb-sprite-1" points="3.5,1778 169.2,1777.8 169.2,1695.2 3.5,1695.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.927 1750.9746)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2205 1747.3674)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5453 1730.5042)" class="mustard__fill futura-book fs__16px">01</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9637 1773.6764)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3711 1751.399)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="131.1,1721.6 119.3,1734.3 131.1,1747.1"/>
							<polygon class="st9" points="131.3,1721.6 131.3,1747.1 143.1,1734.3"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[115]" ng-click="selva.showPropertyData(28, '2')">
						<polygon class="property pb-sprite-2" points="3.5,1695.7 169.2,1695.5 169.2,1612.9 3.5,1612.9"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9256 1666.1829)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2216 1662.5914)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5503 1645.7244)" class="mustard__fill futura-book fs__16px">02</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.966 1688.8901)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3682 1666.6229)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[116]" ng-click="selva.showPropertyData(28, '3')">
						<polygon class="property pb-sprite-1" points="3.5,1613.3 169.2,1613.1 169.2,1530.5 3.5,1530.5"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9253 1582.1949)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.221 1578.5968)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5502 1561.7316)" class="mustard__fill futura-book fs__16px">03</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9674 1604.8959)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3704 1582.636)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[117]" ng-click="selva.showPropertyData(28, '4')">
						<polygon class="property pb-sprite-2" points="3.5,1530.9 169.2,1530.7 169.2,1446.9 3.5,1446.9"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9228 1502.4625)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2189 1498.8862)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5471 1482.0211)" class="mustard__fill futura-book fs__16px">04</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9642 1525.1663)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.372 1502.9114)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[118]" ng-click="selva.showPropertyData(28, '5')">
						<polygon class="property pb-sprite-1" points="3.5,1447.3 169.2,1447.1 169.2,1364.3 3.5,1364.3"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9218 1418.8564)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2204 1415.2559)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5516 1398.3868)" class="mustard__fill futura-book fs__16px">05</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9652 1441.5714)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3714 1419.2955)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[119]" ng-click="selva.showPropertyData(28, '6')">
						<polygon class="property pb-sprite-2" points="3.5,1364.7 169.2,1364.5 169.2,1281.7 3.5,1281.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9226 1336.317)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2206 1332.7349)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5493 1315.8677)" class="mustard__fill futura-book fs__16px">06</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9648 1359.0137)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3726 1336.7659)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[120]" ng-click="selva.showPropertyData(28, '7')">
						<polygon class="property pb-sprite-1" points="3.5,1282.1 169.2,1281.9 169.2,1199.1 3.5,1199.1"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9268 1253.0236)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2215 1249.4315)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5488 1232.5664)" class="mustard__fill futura-book fs__16px">07</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9661 1275.7255)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3679 1253.4802)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[121]" ng-click="selva.showPropertyData(28, '8')">
						<polygon class="property pb-sprite-2" points="3.5,1199.5 169.2,1199.3 169.2,1116.5 3.5,1116.5"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9241 1170.7585)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2213 1167.1713)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5451 1150.3052)" class="mustard__fill futura-book fs__16px">08</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9717 1193.4578)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3732 1171.1965)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[122]" ng-click="selva.showPropertyData(28, '9')">
						<polygon class="property pb-sprite-1" points="3.5,1116.9 169.2,1116.7 169.2,1033.9 3.5,1033.9"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.924 1088.4594)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2237 1084.868)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5524 1068.0038)" class="mustard__fill futura-book fs__16px">09</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9714 1111.1638)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3689 1088.8896)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[123]" ng-click="selva.showPropertyData(28, '10')">
						<polygon class="property pb-sprite-2" points="3.5,1034.3 169.2,1034.1 169.2,951.3 3.5,951.3"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9248 1007.5842)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2222 1003.9769)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5464 987.1107)" class="mustard__fill futura-book fs__16px">10</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9635 1030.277)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3711 1008.0262)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[124]" ng-click="selva.showPropertyData(28, '11')">
						<polygon class="property pb-sprite-1" points="169.3,867.6 3.4,867.6 3.5,951.3 169.2,951.3"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9223 923.9166)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.218 920.3054)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5447 903.4402)" class="mustard__fill futura-book fs__16px">11</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9631 946.603)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3698 924.3518)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[125]" ng-click="selva.showPropertyData(28, '12')">
						<polygon class="property pb-sprite-2" points="169.1,785 3.4,785 3.4,867.6 169.3,867.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9234 839.1776)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2194 835.5724)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5442 818.7063)" class="mustard__fill futura-book fs__16px">12</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9658 861.8734)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3699 839.603)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[126]" ng-click="selva.showPropertyData(28, '13')">
						<polygon class="property pb-sprite-1" points="169.2,702.1 3.4,702.1 3.4,785 169.1,785"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9191 757.1059)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2224 753.5192)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5496 736.6521)" class="mustard__fill futura-book fs__16px">13</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9644 779.8098)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3698 757.548)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[127]" ng-click="selva.showPropertyData(28, '14')">
						<rect x="3.4" y="619.2" class="property pb-sprite-2" width="165.7" height="82.9"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9229 673.1356)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2208 669.5363)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.549 652.6701)" class="mustard__fill futura-book fs__16px">14</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9664 695.8351)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3681 673.563)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[128]" ng-click="selva.showPropertyData(28, '15')">
						<rect x="3.4" y="536.4" class="property pb-sprite-1" width="165.7" height="82.8"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9234 591.2213)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2228 587.6158)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5481 570.7516)" class="mustard__fill futura-book fs__16px">15</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9657 613.917)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3645 591.6389)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[129]" ng-click="selva.showPropertyData(28, '16')">
						<rect x="3.4" y="453.7" class="property pb-sprite-2" width="165.7" height="82.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9256 507.0497)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2194 503.4453)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5505 486.5802)" class="mustard__fill futura-book fs__16px">16</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9669 529.7499)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3702 507.476)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[130]" ng-click="selva.showPropertyData(28, '17')">
						<rect x="3.4" y="369.7" class="property pb-sprite-1" width="165.7" height="84"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9231 426.1061)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2209 422.5122)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5452 405.6461)" class="mustard__fill futura-book fs__16px">17</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9658 448.8035)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3679 426.5267)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[131]" ng-click="selva.showPropertyData(28, '18')">
						<rect x="3.4" y="287.4" class="property pb-sprite-2" width="165.7" height="82.3"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.9243 340.9697)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2218 337.3906)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.549 320.5225)" class="mustard__fill futura-book fs__16px">18</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9704 363.6794)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3678 341.4029)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[132]" ng-click="selva.showPropertyData(28, '19')">
						<rect x="3.4" y="204.2" class="property pb-sprite-1" width="165.7" height="83.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.922 258.2915)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2229 254.7231)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5467 237.8559)" class="mustard__fill futura-book fs__16px">19</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.971 280.9937)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3719 258.7422)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[133]" ng-click="selva.showPropertyData(28, '20')">
						<polygon class="property pb-sprite-2" points="169.2,107.4 3.4,121.9 3.4,204.2 169.2,204.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 161.926 176.1564)" class="white__fill futura-light fs__14px">9.35</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 49.2223 172.5721)" class="white__fill futura-light fs__14px">138.78 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 76.5466 155.707)" class="mustard__fill futura-book fs__16px">20</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 62.9702 198.8413)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9919 -7.963103e-02 8.031993e-02 0.9968 62.9819 129.4306)" class="white__fill futura-light fs__14px">16.06</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 20.3695 176.5915)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="131.1,144 119.3,156.7 131.1,169.5"/>
							<polygon class="st9" points="131.3,144 131.3,169.5 143.1,156.7"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="3.5" y1="1695.7" x2="169.2" y2="1695.5"/>
						<line class="stx11" x1="3.5" y1="1613.2" x2="169.2" y2="1613"/>
						<line class="stx11" x1="3.5" y1="1530.7" x2="169.2" y2="1530.5"/>
						<line class="stx11" x1="3.5" y1="1448.2" x2="169.2" y2="1448"/>
						<line class="stx11" x1="3.5" y1="1365.7" x2="169.2" y2="1365.5"/>
						<line class="stx11" x1="3.5" y1="1283.3" x2="169.2" y2="1283.1"/>
						<line class="stx11" x1="3.5" y1="1200.8" x2="169.2" y2="1200.6"/>
						<line class="stx11" x1="3.5" y1="1118.3" x2="169.2" y2="1118.1"/>
						<line class="stx11" x1="3.5" y1="1035.8" x2="169.2" y2="1035.6"/>
						<line class="stx11" x1="3.5" y1="953.4" x2="169.2" y2="953.2"/>
						<line class="stx11" x1="3.6" y1="868" x2="169.2" y2="867.8"/>
						<line class="stx11" x1="3.6" y1="785.6" x2="169.2" y2="785.4"/>
						<line class="stx11" x1="3.5" y1="702" x2="169.2" y2="701.8"/>
						<line class="stx11" x1="3.5" y1="619.5" x2="169.2" y2="619.3"/>
						<line class="stx11" x1="3.5" y1="536.4" x2="169.2" y2="536.2"/>
						<line class="stx11" x1="3.5" y1="453.9" x2="169.2" y2="453.7"/>
						<line class="stx11" x1="3.5" y1="370.6" x2="169.2" y2="370.4"/>
						<line class="stx11" x1="3.5" y1="287.5" x2="169.2" y2="287.3"/>
						<line class="stx11" x1="3.5" y1="204.3" x2="169.2" y2="204.1"/>
						<line class="stx11" x1="3.5" y1="1778" x2="169.2" y2="1777.8"/>
					</g>
				</g>
				<g id="isla_B_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[134]" ng-click="selva.showPropertyData(28, '21')">
						<polygon class="property pb-sprite-1" points="265.1,99.9 361.9,91.5 375.3,257.6 265.1,266"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 308.3996 258.3981)" class="white__fill futura-light fs__14px">10.62</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 304.011 136.8148)" class="white__fill futura-light fs__14px">159.08 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 322.89 162.7923)" class="mustard__fill futura-book fs__16px">21</text>
						<text transform="matrix(6.975956e-03 0.9951 -1 7.310025e-03 270.6778 152.0768)" class="white__fill futura-light fs__14px">16.06</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 341.755 147.1084)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 296.35 114.4286)" class="white__fill futura-light fs__14px">9.27</text>
						<g>
							<polygon class="st8" points="321.7,208.2 310.3,221.2 322.5,233.7"/>
							<polygon class="st9" points="321.8,208.2 322.6,233.7 334.1,220.6"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[135]" ng-click="selva.showPropertyData(28, '22')">
						<polygon class="property pb-sprite-2" points="443.7,84.9 457.9,249.9 375.3,257.6 361.9,91.5"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 401.6171 249.9137)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 397.2359 130.8817)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 416.1149 156.8523)" class="mustard__fill futura-book fs__16px">22</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 434.9785 141.1754)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 389.5736 106.9048)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[136]" ng-click="selva.showPropertyData(28, '23')">
						<polygon class="property pb-sprite-1" points="540,243.1 526.4,77.4 443.7,84.9 457.9,249.9"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 483.2404 244.7535)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 478.8555 125.7086)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 497.7345 151.685)" class="mustard__fill futura-book fs__16px">23</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 516.5928 136.0038)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 471.1969 101.7389)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[137]" ng-click="selva.showPropertyData(28, '24')">
						<path class="property pb-sprite-2" d="M622.9,235.8L609,70.4l-82.6,7.1c0,0,11.9,166.2,13.5,165.6
							C541.6,242.5,622.9,235.8,622.9,235.8z"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 565.5685 237.1575)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 561.1895 118.1153)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 580.0654 144.0891)" class="mustard__fill futura-book fs__16px">24</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 598.9243 128.4116)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 553.5212 94.1426)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[138]" ng-click="selva.showPropertyData(28, '25')">
						<polygon class="property pb-sprite-1" points="691.7,63.3 705.6,229.6 622.9,235.8 609,70.4"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 649.7517 230.3412)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 645.3674 111.2993)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 664.2425 137.276)" class="mustard__fill futura-book fs__16px">25</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 683.1 121.5932)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 637.7057 87.3306)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[139]" ng-click="selva.showPropertyData(28, '26')">
						<polygon class="property pb-sprite-2" points="773.3,56.3 787.4,222.1 705.6,229.6 691.7,63.3"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 730.6243 223.0863)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 726.2328 104.0453)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 745.1143 130.0157)" class="mustard__fill futura-book fs__16px">26</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 763.9778 114.3359)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 718.5831 80.0714)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[140]" ng-click="selva.showPropertyData(28, '27')">
						<polygon class="property pb-sprite-1" points="855.9,49.3 870,215.1 787.4,222.1 773.3,56.3"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 814.4559 217.5842)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 810.0718 98.5442)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 828.95 124.5148)" class="mustard__fill futura-book fs__16px">27</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 847.8127 108.8386)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 802.4151 74.5748)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[141]" ng-click="selva.showPropertyData(28, '28')">
						<polygon class="property pb-sprite-2" points="952.7,208.6 938.9,42.7 855.9,49.3 870,215.1"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 896.6422 209.2218)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 892.2583 90.1822)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 911.134 116.153)" class="mustard__fill futura-book fs__16px">28</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 929.9971 100.4798)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 884.6005 66.2089)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[142]" ng-click="selva.showPropertyData(28, '29')">
						<polygon class="property pb-sprite-1" points="1035.4,201.4 1021.4,35.7 938.9,42.7 952.7,208.6"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 978.1437 203.5074)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 973.7612 84.4634)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 992.6406 110.4378)" class="mustard__fill futura-book fs__16px">29</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1011.5014 94.766)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 966.1046 60.4922)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[143]" ng-click="selva.showPropertyData(28, '30')">
						<polygon class="property pb-sprite-2" points="1117.3,194.1 1103.2,28.5 1021.4,35.7 1035.4,201.4"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 1061.4546 195.1387)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1057.0769 76.0922)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1075.9561 102.0716)" class="mustard__fill futura-book fs__16px">30</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1094.8145 86.3904)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 1049.4115 52.1241)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[144]" ng-click="selva.showPropertyData(28, '31')">
						<polygon class="property pb-sprite-1" points="1199.8,187.7 1186,21.8 1103.2,28.5 1117.3,194.1"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 1142.3177 188.4752)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1137.9379 69.4348)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1156.8131 95.4076)" class="mustard__fill futura-book fs__16px">31</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1175.6831 79.7273)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 1130.2744 45.4647)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[145]" ng-click="selva.showPropertyData(28, '32')">
						<polygon class="property pb-sprite-2" points="1282.9,180.6 1268.6,14.6 1186,21.8 1199.8,187.7"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 1226.8737 181.4107)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1222.4933 62.376)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1241.3719 88.3486)" class="mustard__fill futura-book fs__16px">32</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1260.2361 72.6672)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 1214.8313 38.3996)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[146]" ng-click="selva.showPropertyData(28, '33')">
						<polygon class="property pb-sprite-1" points="1365.2,174.5 1365.6,6.3 1268.6,14.6 1282.9,180.6"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 1314.4052 174.6317)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1310.0248 55.5896)" class="white__fill futura-light fs__14px">138.78 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1328.9069 81.5678)" class="mustard__fill futura-book fs__16px">33</text>
						<text transform="matrix(4.975749e-05 0.9951 -1 3.500035e-04 1348.1923 65.5401)" class="white__fill futura-light fs__14px">16.06</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 1308.5602 31.6146)" class="white__fill futura-light fs__14px">9.35</text>
						<g>
							<polygon class="st8" points="1327.8,128.5 1316,141.2 1327.8,154"/>
							<polygon class="st9" points="1328,128.5 1328,154 1339.8,141.3"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="375.3" y1="257.6" x2="361.9" y2="91.5"/>
						<line class="stx11" x1="457.9" y1="249.9" x2="443.7" y2="84.9"/>
						<line class="stx11" x1="540" y1="243.1" x2="526.4" y2="77.4"/>
						<line class="stx11" x1="622.9" y1="235.8" x2="609" y2="70.4"/>
						<line class="stx11" x1="691.7" y1="63.3" x2="705.6" y2="229.6"/>
						<line class="stx11" x1="773.3" y1="56.3" x2="787.4" y2="222.1"/>
						<line class="stx11" x1="855.9" y1="49.3" x2="870" y2="215.1"/>
						<line class="stx11" x1="938.9" y1="42.7" x2="952.7" y2="208.6"/>
						<line class="stx11" x1="1021.4" y1="35.7" x2="1035.4" y2="201.4"/>
						<line class="stx11" x1="1103.2" y1="28.5" x2="1117.3" y2="194.1"/>
						<line class="stx11" x1="1186" y1="21.8" x2="1199.8" y2="187.7"/>
						<line class="stx11" x1="1268.6" y1="14.6" x2="1282.9" y2="180.6"/>
					</g>
				</g>
				<g id="isla_C_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[147]" ng-click="selva.showPropertyData(28, '34')">
						<polygon class="property pb-sprite-2" points="1158.2,287.3 1365.5,270.4 1365.6,389.7 1158.2,389.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.222 348.6575)" class="white__fill futura-light fs__14px">11.57</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7057 345.0582)" class="white__fill futura-light fs__14px">214.64 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0344 328.192)" class="mustard__fill futura-book fs__16px">34</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4596 379.8732)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(0.9934 -5.804651e-02 5.862998e-02 0.9983 1240.7617 294.4239)" class="white__fill futura-light fs__14px">20.07</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2548 349.1073)" class="white__fill futura-light fs__14px">9.89</text>
						<g>
							<polygon class="st8" points="1196.2,319.3 1184.4,332 1196.2,344.8"/>
							<polygon class="st9" points="1196.4,319.3 1196.4,344.8 1208.2,332"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[148]" ng-click="selva.showPropertyData(28, '35')">
						<polygon class="property pb-sprite-1" points="1158,492.6 1365.4,492.5 1365.6,389.7 1158.2,389.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2184 453.5016)" class="white__fill futura-light fs__14px">9.89</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7014 449.9192)" class="white__fill futura-light fs__14px">197.80 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0282 433.055)" class="mustard__fill futura-book fs__16px">35</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4573 484.7151)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2561 453.9572)" class="white__fill futura-light fs__14px">9.89</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[149]" ng-click="selva.showPropertyData(28, '36')">
						<polygon class="property pb-sprite-2" points="1158.2,575.5 1365.4,575.3 1365.4,492.5 1158,492.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2179 544.2268)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7058 540.6356)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0286 523.7724)" class="mustard__fill futura-book fs__16px">36</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4552 568.9184)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2511 544.6876)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[150]" ng-click="selva.showPropertyData(28, '37')">
						<polygon class="property pb-sprite-1" points="1158,658.6 1365.4,658.6 1365.4,575.3 1158.2,575.5"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2174 627.8651)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.6993 624.2562)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0281 607.3881)" class="mustard__fill futura-book fs__16px">37</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4613 652.5621)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2507 628.3308)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[151]" ng-click="selva.showPropertyData(28, '38')">
						<polygon class="property pb-sprite-2" points="1158.2,740.8 1365.5,740.8 1365.4,658.6 1158,658.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2147 710.8596)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7048 707.2656)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0316 690.3975)" class="mustard__fill futura-book fs__16px">38</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4613 735.5807)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2581 711.339)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[152]" ng-click="selva.showPropertyData(28, '39')">
						<polygon class="property pb-sprite-1" points="1158.1,823.7 1365.5,823.1 1365.5,740.8 1158.2,740.8"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2224 793.5037)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7008 789.9116)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0266 773.0435)" class="mustard__fill futura-book fs__16px">39</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4607 818.2263)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2526 793.9801)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,766.6 1184.4,779.3 1196.2,792.1"/>
							<polygon class="st9" points="1196.4,766.6 1196.4,792.1 1208.2,779.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[153]" ng-click="selva.showPropertyData(28, '40')">
						<polygon class="property pb-sprite-2" points="1158.1,905.8 1365.5,905.8 1365.5,823.1 1158.1,823.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2175 878.936)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7018 875.3467)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0295 858.4806)" class="mustard__fill futura-book fs__16px">40</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4583 903.6522)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2516 879.4088)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,848.6 1184.4,861.4 1196.2,874.1"/>
							<polygon class="st9" points="1196.4,848.6 1196.4,874.1 1208.2,861.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[154]" ng-click="selva.showPropertyData(28, '41')">
						<polygon class="property pb-sprite-1" points="1158,989.4 1365.5,989.4 1365.5,905.8 1158.1,905.8"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2175 960.1814)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7026 956.5797)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0304 939.7135)" class="mustard__fill futura-book fs__16px">41</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4591 984.8945)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2493 960.657)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,934.4 1184.4,947.1 1196.2,959.9"/>
							<polygon class="st9" points="1196.4,934.4 1196.4,959.9 1208.2,947.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[155]" ng-click="selva.showPropertyData(28, '42')">
						<rect x="1158" y="989.4" class="property pb-sprite-2" width="207.6" height="82.4"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2212 1041.085)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7046 1037.4943)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0333 1020.6262)" class="mustard__fill futura-book fs__16px">42</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4612 1065.8048)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.256 1041.5515)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,1013.2 1184.4,1025.9 1196.2,1038.7"/>
							<polygon class="st9" points="1196.4,1013.2 1196.4,1038.7 1208.2,1026"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[156]" ng-click="selva.showPropertyData(28, '43')">
						<rect x="1158" y="1071.8" class="property pb-sprite-1" width="207.6" height="82.8"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2217 1121.1476)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7026 1117.5563)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0333 1100.6863)" class="mustard__fill futura-book fs__16px">43</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4641 1145.8625)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.251 1121.618)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,1097.9 1184.4,1110.6 1196.2,1123.4"/>
							<polygon class="st9" points="1196.4,1097.9 1196.4,1123.4 1208.2,1110.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[157]" ng-click="selva.showPropertyData(28, '44')">
						<rect x="1158" y="1154.5" class="property pb-sprite-2" width="207.6" height="82.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2191 1206.496)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.6981 1202.8966)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0267 1186.0315)" class="mustard__fill futura-book fs__16px">44</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4618 1231.2064)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2555 1206.9744)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[158]" ng-click="selva.showPropertyData(28, '45')">
						<rect x="1158" y="1237.1" class="property pb-sprite-1" width="207.6" height="83.4"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2209 1288.7834)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7021 1285.1804)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0299 1268.3162)" class="mustard__fill futura-book fs__16px">45</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4625 1313.4886)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2539 1289.2482)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[159]" ng-click="selva.showPropertyData(28, '46')">
						<rect x="1158" y="1320.6" class="property pb-sprite-2" width="207.6" height="82.1"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2211 1371.6531)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7021 1368.0745)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0309 1351.2094)" class="mustard__fill futura-book fs__16px">46</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4617 1396.3696)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2539 1372.1276)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[160]" ng-click="selva.showPropertyData(28, '47')">
						<rect id="C-47_1_" x="1158" y="1402.6" class="property pb-sprite-1" width="207.6" height="82.3"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2245 1453.8419)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7008 1450.2322)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0284 1433.368)" class="mustard__fill futura-book fs__16px">47</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4625 1478.5475)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.256 1454.288)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[161]" ng-click="selva.showPropertyData(28, '48')">
						<rect x="1158" y="1485" class="property pb-sprite-2" width="207.6" height="83.5"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2186 1538.1785)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.6997 1534.5697)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0275 1517.7035)" class="mustard__fill futura-book fs__16px">48</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4612 1562.8748)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.254 1538.6266)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[162]" ng-click="selva.showPropertyData(28, '49')">
						<rect x="1158" y="1568.4" class="property pb-sprite-1" width="207.6" height="82.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2218 1621.1125)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7064 1617.495)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0313 1600.6309)" class="mustard__fill futura-book fs__16px">49</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4603 1645.8104)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2521 1621.5568)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[163]" ng-click="selva.showPropertyData(28, '50')">
						<rect x="1158" y="1651" class="property pb-sprite-2" width="207.6" height="82.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2186 1704.8572)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7024 1701.2729)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0302 1684.4009)" class="mustard__fill futura-book fs__16px">50</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4596 1729.5723)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2605 1705.3014)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[164]" ng-click="selva.showPropertyData(28, '51')">
						<rect x="1158" y="1733.6" class="property pb-sprite-1" width="207.6" height="83.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2178 1785.2509)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.6993 1781.667)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.027 1764.8027)" class="mustard__fill futura-book fs__16px">51</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4612 1809.962)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.249 1785.7001)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[165]" ng-click="selva.showPropertyData(28, '52')">
						<rect x="1158" y="1816.8" class="property pb-sprite-2" width="207.6" height="82.9"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2177 1869.8356)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7003 1866.2495)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0251 1849.3815)" class="mustard__fill futura-book fs__16px">52</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4596 1894.5471)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2567 1870.2905)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[166]" ng-click="selva.showPropertyData(28, '53')">
						<polygon class="property pb-sprite-1" points="1158.1,1982.6 1365.5,1982.6 1365.5,1899.7 1158,1899.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2216 1952.2949)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7039 1948.6984)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0295 1931.8341)" class="mustard__fill futura-book fs__16px">53</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4602 1976.9963)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2534 1952.7305)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[167]" ng-click="selva.showPropertyData(28, '54')">
						<polygon class="property pb-sprite-2" points="1158.5,2065.2 1365.5,2065.2 1365.5,1982.6 1158.1,1982.6"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 1358.2197 2037.6512)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1226.7062 2034.0397)" class="white__fill futura-light fs__14px">160.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 1254.0309 2017.1746)" class="mustard__fill futura-book fs__16px">54</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 1240.4569 2062.3374)" class="white__fill futura-light fs__14px">20.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 1172.2511 2038.0887)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1196.2,2010.2 1184.4,2022.9 1196.2,2035.7"/>
							<polygon class="st9" points="1196.4,2010.2 1196.4,2035.7 1208.2,2023"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="1365.6" y1="389.7" x2="1158.2" y2="389.7"/>
						<line class="stx11" x1="1365.4" y1="492.5" x2="1158" y2="492.6"/>
						<line class="stx11" x1="1365.4" y1="575.2" x2="1158" y2="575.3"/>
						<line class="stx11" x1="1365.4" y1="658.5" x2="1158.2" y2="658.7"/>
						<line class="stx11" x1="1365.4" y1="741.8" x2="1158.2" y2="742"/>
						<line class="stx11" x1="1365.4" y1="825" x2="1158.2" y2="825.2"/>
						<line class="stx11" x1="1365.4" y1="908.3" x2="1158.2" y2="908.5"/>
						<line class="stx11" x1="1365.4" y1="991.6" x2="1158.2" y2="991.8"/>
						<line class="stx11" x1="1365.4" y1="1071.7" x2="1158.2" y2="1071.9"/>
						<line class="stx11" x1="1365.4" y1="1151.8" x2="1158.2" y2="1152"/>
						<line class="stx11" x1="1365.4" y1="1318.8" x2="1158.2" y2="1319"/>
						<line class="stx11" x1="1365.4" y1="1402.5" x2="1158.2" y2="1402.7"/>
						<line class="stx11" x1="1365.4" y1="1484.9" x2="1158.2" y2="1485.1"/>
						<line class="stx11" x1="1365.4" y1="1567.9" x2="1158.2" y2="1568.1"/>
						<line class="stx11" x1="1365.4" y1="1650.9" x2="1158.2" y2="1651.1"/>
						<line class="stx11" x1="1365.4" y1="1733.9" x2="1158.2" y2="1734.1"/>
						<line class="stx11" x1="1365.4" y1="1816.8" x2="1158.2" y2="1817"/>
						<line class="stx11" x1="1365.4" y1="1899.8" x2="1158.2" y2="1900"/>
						<line class="stx11" x1="1365.4" y1="1982.8" x2="1158.2" y2="1983"/>
						<line class="stx11" x1="1365.4" y1="1237" x2="1158.2" y2="1237.2"/>
					</g>
				</g>
				<g id="isla_D_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[168]" ng-click="selva.showPropertyData(28, '55')">
						<polygon class="property pb-sprite-1" points="1061.8,2065.3 1061.7,1899.6 965.2,1899.5 965.2,2065.3"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 1000.9905 1913.4526)" class="white__fill futura-light fs__14px">9.38</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1024.3087 2020.7841)" class="white__fill futura-light fs__14px">150.08 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1007.4406 1993.4592)" class="mustard__fill futura-book fs__16px">55</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 1055.1394 1995.604)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 981.4041 1995.6074)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 1001.0385 2058.2192)" class="white__fill futura-light fs__14px">9.38</text>
						<g>
							<polygon class="st8" points="1013.4,1919.2 1001.6,1931.9 1013.4,1944.7"/>
							<polygon class="st9" points="1013.5,1919.2 1013.5,1944.7 1025.4,1932"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[169]" ng-click="selva.showPropertyData(28, '56')">
						<polygon class="property pb-sprite-2" points="882.5,2065.2 882.5,1899.5 965.2,1899.5 965.2,2065.3"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 911.0223 1913.4468)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 934.3472 2020.788)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 917.4791 1993.4594)" class="mustard__fill futura-book fs__16px">56</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 899.3718 1995.6074)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 911.0651 2058.2136)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[170]" ng-click="selva.showPropertyData(28, '57')">
						<rect x="798.7" y="1899.5" class="property pb-sprite-1" width="83.7" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 827.8118 1913.4542)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 851.1445 2020.7802)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 834.2745 1993.4553)" class="mustard__fill futura-book fs__16px">57</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 814.7574 1995.6058)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 827.8571 2058.2139)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[171]" ng-click="selva.showPropertyData(28, '58')">
						<rect x="716.1" y="1899.5" class="property pb-sprite-2" width="82.6" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 743.8532 1913.4496)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 767.1918 2020.7872)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 750.3198 1993.4556)" class="mustard__fill futura-book fs__16px">58</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 732.8374 1995.605)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 743.9014 2058.2195)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[172]" ng-click="selva.showPropertyData(28, '59')">
						<rect x="633.4" y="1899.5" class="property pb-sprite-1" width="82.7" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 659.8135 1913.4524)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 683.1552 2020.7882)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 666.2929 1993.4634)" class="mustard__fill futura-book fs__16px">59</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 650.725 1995.6068)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 659.8582 2058.2158)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[173]" ng-click="selva.showPropertyData(28, '60')">
						<rect x="550.5" y="1899.5" class="property pb-sprite-2" width="82.9" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 577.5436 1913.4515)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 600.8856 2020.7795)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 584.0155 1993.4548)" class="mustard__fill futura-book fs__16px">60</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 568.9183 1995.608)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 577.5962 2058.218)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[174]" ng-click="selva.showPropertyData(28, '61')">
						<rect x="467.8" y="1899.5" class="property pb-sprite-1" width="82.7" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 493.8497 1913.4521)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 517.1804 2020.7855)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 500.3104 1993.4559)" class="mustard__fill futura-book fs__16px">61</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 482.4647 1995.6046)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 493.8969 2058.2188)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[175]" ng-click="selva.showPropertyData(28, '62')">
						<rect x="384.9" y="1899.5" class="property pb-sprite-2" width="83" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 410.9708 1913.4513)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 434.2912 2020.7915)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 417.429 1993.4657)" class="mustard__fill futura-book fs__16px">62</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 402.3748 1995.6075)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 411.0171 2058.2227)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[176]" ng-click="selva.showPropertyData(28, '63')">
						<rect x="301.8" y="1899.5" class="property pb-sprite-1" width="83" height="165.6"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 330.0463 1913.4546)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 353.3737 2020.7963)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 336.5017 1993.4618)" class="mustard__fill futura-book fs__16px">63</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 316.2673 1995.6005)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 330.0989 2058.22)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="340.2,1921.8 328.4,1934.5 340.2,1947.3"/>
							<polygon class="st9" points="340.4,1921.8 340.4,1947.3 352.2,1934.6"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="965.2" y1="1899.5" x2="965.2" y2="2065.3"/>
						<line class="stx11" x1="882.5" y1="1899.5" x2="882.5" y2="2065.2"/>
						<line class="stx11" x1="798.7" y1="1899.5" x2="798.7" y2="2065.2"/>
						<line class="stx11" x1="716.1" y1="1899.5" x2="716.1" y2="2065.2"/>
						<line class="stx11" x1="633.4" y1="1899.5" x2="633.4" y2="2065.2"/>
						<line class="stx11" x1="550.5" y1="1899.5" x2="550.5" y2="2065.2"/>
						<line class="stx11" x1="467.8" y1="1899.5" x2="467.8" y2="2065.2"/>
						<line class="stx11" x1="384.9" y1="1899.5" x2="384.9" y2="2065.2"/>
						<line class="stx11" x1="301.8" y1="2065.2" x2="301.8" y2="1899.5"/>
					</g>
				</g>
				<g id="isla_E_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[177]" ng-click="selva.showPropertyData(28, '64')">
						<polygon class="property pb-sprite-2" points="291.9,1802.8 374.3,1802.8 374.5,1637 291.9,1637"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 343.8714 1751.9135)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 327.0028 1724.5886)" class="mustard__fill futura-book fs__16px">64</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 306.7549 1734.335)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 320.5904 1796.9423)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="330.7,1757 318.9,1769.7 330.7,1782.5"/>
							<polygon class="st9" points="330.9,1757 330.9,1782.5 342.7,1769.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[178]" ng-click="selva.showPropertyData(28, '65')">
						<polygon class="property pb-sprite-1" points="457.2,1802.8 457.2,1637 374.5,1637 374.3,1802.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 427.8846 1751.9133)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 411.0165 1724.5885)" class="mustard__fill futura-book fs__16px">65</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 390.7749 1734.3361)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 404.6222 1796.9382)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[179]" ng-click="selva.showPropertyData(28, '66')">
						<rect x="457.2" y="1637" class="property pb-sprite-2" width="82.7" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 510.4633 1751.9132)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 493.601 1724.5895)" class="mustard__fill futura-book fs__16px">66</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 473.36 1734.3356)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 487.2144 1796.9377)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[180]" ng-click="selva.showPropertyData(28, '67')">
						<rect x="539.8" y="1637" class="property pb-sprite-1" width="82.7" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 592.8017 1751.9114)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 575.9316 1724.5826)" class="mustard__fill futura-book fs__16px">67</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 555.6901 1734.3291)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 569.5429 1796.9393)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[181]" ng-click="selva.showPropertyData(28, '68')">
						<rect x="622.6" y="1637" class="property pb-sprite-2" width="82.9" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 676.6919 1751.9167)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 659.8237 1724.5919)" class="mustard__fill futura-book fs__16px">68</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 639.5706 1734.33)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 653.4279 1796.9401)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[182]" ng-click="selva.showPropertyData(28, '69')">
						<path class="property pb-sprite-1" d="M788.4,1802.8V1637c0,0-82.9-1.1-82.9,0c0,1.1,0,165.8,0,165.8H788.4z"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 756.4004 1751.9067)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 739.5313 1724.5829)" class="mustard__fill futura-book fs__16px">69</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 719.2913 1734.3286)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 733.1364 1796.9458)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[183]" ng-click="selva.showPropertyData(28, '70')">
						<rect x="788.4" y="1637" class="property pb-sprite-2" width="82.6" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 838.2281 1751.9148)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 821.36 1724.59)" class="mustard__fill futura-book fs__16px">70</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 801.1039 1734.3264)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 814.9491 1796.9424)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[184]" ng-click="selva.showPropertyData(28, '71')">
						<rect x="871" y="1637" class="property pb-sprite-1" width="83.2" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 924.1984 1751.9088)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 907.3371 1724.5811)" class="mustard__fill futura-book fs__16px">71</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 887.0795 1734.3293)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 900.9183 1796.941)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[185]" ng-click="selva.showPropertyData(28, '72')">
						<rect x="954.1" y="1637" class="property pb-sprite-2" width="82.1" height="165.8"/>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1005.8679 1751.9045)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 989.0056 1724.5808)" class="mustard__fill futura-book fs__16px">72</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 968.7466 1734.3281)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 1031.9323 1734.3307)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 982.5875 1796.9404)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="992.7,1757 980.9,1769.7 992.7,1782.5"/>
							<polygon class="st9" points="992.9,1757 992.9,1782.5 1004.7,1769.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[186]" ng-click="selva.showPropertyData(28, '73')">
						<path class="property pb-sprite-1" d="M291.9,1457.9V1637h82.6v-179.2C374.5,1457.9,291.9,1456.5,291.9,1457.9z"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 320.5508 1471.8699)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 343.8753 1585.2318)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 327.0072 1557.9031)" class="mustard__fill futura-book fs__16px">73</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 306.75 1560.0518)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 320.5973 1628.1234)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="330.7,1486.2 318.9,1498.9 330.7,1511.7"/>
							<polygon class="st9" points="330.9,1486.2 330.9,1511.7 342.7,1499"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[187]" ng-click="selva.showPropertyData(28, '74')">
						<rect x="374.5" y="1457.9" class="property pb-sprite-2" width="82.7" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 404.5832 1471.8669)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 427.8905 1585.2297)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 411.0209 1557.907)" class="mustard__fill futura-book fs__16px">74</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 390.7759 1560.0537)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 404.6283 1628.1282)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[188]" ng-click="selva.showPropertyData(28, '75')">
						<rect x="457.2" y="1457.9" class="property pb-sprite-1" width="82.7" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 487.1622 1471.8689)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 510.4623 1585.2316)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 493.5938 1557.9067)" class="mustard__fill futura-book fs__16px">75</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 473.3541 1560.0543)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 487.211 1628.118)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[189]" ng-click="selva.showPropertyData(28, '76')">
						<rect x="539.8" y="1457.9" class="property pb-sprite-2" width="82.7" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 569.5004 1471.8718)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 592.7998 1585.2268)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 575.9317 1557.901)" class="mustard__fill futura-book fs__16px">76</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 555.6911 1560.0526)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 569.5391 1628.1226)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[190]" ng-click="selva.showPropertyData(28, '77')">
						<rect x="622.6" y="1457.9" class="property pb-sprite-1" width="82.9" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 653.3799 1471.8673)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 676.6831 1585.233)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 659.8209 1557.9103)" class="mustard__fill futura-book fs__16px">77</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 639.5676 1560.0525)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 653.4284 1628.1222)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[191]" ng-click="selva.showPropertyData(28, '78')">
						<rect x="705.5" y="1457.9" class="property pb-sprite-2" width="82.9" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 733.0948 1471.8671)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 756.3917 1585.23)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 739.5294 1557.9071)" class="mustard__fill futura-book fs__16px">78</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 719.2855 1560.0502)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 733.1335 1628.1261)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[192]" ng-click="selva.showPropertyData(28, '79')">
						<rect x="788.4" y="1457.9" class="property pb-sprite-1" width="82.6" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 814.9047 1471.8663)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 838.2203 1585.2302)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 821.358 1557.9044)" class="mustard__fill futura-book fs__16px">79</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 801.1039 1560.0499)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 814.9556 1628.1274)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[193]" ng-click="selva.showPropertyData(28, '80')">
						<rect x="871" y="1457.9" class="property pb-sprite-2" width="83.2" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 900.8782 1471.8693)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 924.1984 1585.2389)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 907.3283 1557.9141)" class="mustard__fill futura-book fs__16px">80</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 887.0746 1560.053)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 900.9252 1628.1222)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[194]" ng-click="selva.showPropertyData(28, '81')">
						<rect x="954.1" y="1457.9" class="property pb-sprite-1" width="82.1" height="179.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 982.5475 1471.8663)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1005.8669 1585.2297)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 989.0046 1557.899)" class="mustard__fill futura-book fs__16px">81</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 968.7466 1560.0516)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 1031.9323 1560.0483)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 982.5955 1628.1244)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="992.7,1486.2 980.9,1498.9 992.7,1511.7"/>
							<polygon class="st9" points="992.9,1486.2 992.9,1511.7 1004.7,1499"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="291.9" y1="1637" x2="1036.2" y2="1637"/>
						<line class="stx11" x1="374.5" y1="1457.9" x2="374.3" y2="1802.8"/>
						<line class="stx11" x1="457.2" y1="1457.9" x2="457.1" y2="1802.8"/>
						<line class="stx11" x1="540" y1="1457.9" x2="539.8" y2="1802.8"/>
						<line class="stx11" x1="622.7" y1="1457.9" x2="622.6" y2="1802.8"/>
						<line class="stx11" x1="705.5" y1="1457.9" x2="705.3" y2="1802.8"/>
						<line class="stx11" x1="788.2" y1="1457.9" x2="788.1" y2="1802.8"/>
						<line class="stx11" x1="871" y1="1457.9" x2="870.8" y2="1802.8"/>
						<line class="stx11" x1="953.7" y1="1457.9" x2="953.6" y2="1802.8"/>
						<line class="stx11" x1="291.9" y1="1802.8" x2="291.9" y2="1457.9"/>
						<line class="stx11" x1="1036.2" y1="1802.8" x2="1036.2" y2="1457.9"/>
					</g>
				</g>
				<g id="isla_F_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[195]" ng-click="selva.showPropertyData(28, '82')">
						<rect x="265.6" y="1252.2" class="property pb-sprite-2" width="165.5" height="82.7"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4267 1302.7997)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7583 1285.9335)" class="mustard__fill futura-book fs__16px">82</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1743 1329.1012)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8541 1306.8267)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="300.9,1277 289.1,1289.7 300.9,1302.5"/>
							<polygon class="st9" points="301.1,1277 301.1,1302.5 312.9,1289.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[196]" ng-click="selva.showPropertyData(28, '83')">
						<rect x="265.6" y="1169" class="property pb-sprite-1" width="165.5" height="83.2"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4287 1219.762)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7564 1202.8969)" class="mustard__fill futura-book fs__16px">83</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1748 1246.067)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8482 1223.791)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[197]" ng-click="selva.showPropertyData(28, '84')">
						<rect x="265.6" y="1086.9" class="property pb-sprite-2" width="165.5" height="82.1"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4301 1136.4626)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7568 1119.5956)" class="mustard__fill futura-book fs__16px">84</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1755 1162.7681)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8542 1140.5033)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[198]" ng-click="selva.showPropertyData(28, '85')">
						<rect x="265.6" y="1003.8" class="property pb-sprite-1" width="165.5" height="83.2"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4258 1054.3782)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7526 1037.512)" class="mustard__fill futura-book fs__16px">85</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1732 1080.6703)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8459 1058.4036)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[199]" ng-click="selva.showPropertyData(28, '86')">
						<rect x="265.6" y="921.1" class="property pb-sprite-2" width="165.5" height="82.7"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4252 970.9469)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7569 954.0769)" class="mustard__fill futura-book fs__16px">86</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1746 997.2483)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8492 974.9674)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[200]" ng-click="selva.showPropertyData(28, '87')">
						<polygon class="property pb-sprite-1" points="265.6,838.2 431.1,838.3 431.1,921.1 265.6,921.1"/>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 316.4305 888.3712)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 343.7548 871.5041)" class="mustard__fill futura-book fs__16px">87</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1746 914.6818)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 330.1769 851.796)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 280.8484 892.4103)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="300.9,862.6 289.1,875.3 300.9,888.1"/>
							<polygon class="st9" points="301.1,862.6 301.1,888.1 312.9,875.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[201]" ng-click="selva.showPropertyData(28, '88')">
						<rect x="431.1" y="1252.2" class="property pb-sprite-1" width="181.1" height="82.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7201 1306.3862)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2241 1302.7981)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5523 1285.9291)" class="mustard__fill futura-book fs__16px">88</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9743 1329.0857)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.6539 1306.824)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,1277 556.3,1289.7 568.1,1302.5"/>
							<polygon class="st9" points="568.3,1277 568.3,1302.5 580.1,1289.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[202]" ng-click="selva.showPropertyData(28, '89')">
						<rect x="431.1" y="1169" class="property pb-sprite-2" width="181.1" height="83.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7185 1223.3584)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2261 1219.7556)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5543 1202.8885)" class="mustard__fill futura-book fs__16px">89</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9748 1246.0612)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.6511 1223.7942)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,1193.9 556.3,1206.7 568.1,1219.4"/>
							<polygon class="st9" points="568.3,1193.9 568.3,1219.4 580.1,1206.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[203]" ng-click="selva.showPropertyData(28, '90')">
						<rect x="431.1" y="1086.9" class="property pb-sprite-1" width="181.1" height="82.1"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7182 1140.0677)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2294 1136.4612)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5537 1119.5959)" class="mustard__fill futura-book fs__16px">90</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9756 1162.7603)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.657 1140.5026)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,1110.6 556.3,1123.4 568.1,1136.2"/>
							<polygon class="st9" points="568.3,1110.6 568.3,1136.2 580.1,1123.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[204]" ng-click="selva.showPropertyData(28, '91')">
						<rect x="431.1" y="1003.8" class="property pb-sprite-2" width="181.1" height="83.2"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7213 1057.962)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2262 1054.3737)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5505 1037.5095)" class="mustard__fill futura-book fs__16px">91</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9747 1080.6654)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.6497 1058.4027)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,1028.6 556.3,1041.3 568.1,1054.1"/>
							<polygon class="st9" points="568.3,1028.6 568.3,1054.1 580.1,1041.3"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[205]" ng-click="selva.showPropertyData(28, '92')">
						<rect x="431.1" y="921.1" class="property pb-sprite-1" width="181.1" height="82.7"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7184 974.5327)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2271 970.9396)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5504 954.0734)" class="mustard__fill futura-book fs__16px">92</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9761 997.2395)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.6451 974.9648)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,945.1 556.3,957.8 568.1,970.6"/>
							<polygon class="st9" points="568.3,945.1 568.3,970.6 580.1,957.9"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[206]" ng-click="selva.showPropertyData(28, '93')">
						<polygon class="property pb-sprite-2" points="612.2,838.2 431.1,838.3 431.1,921.1 612.2,921.1"/>
						<text transform="matrix(1.620895e-02 -1.0048 0.9999 1.644007e-02 606.7142 891.9708)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 486.2245 888.3648)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 513.5522 871.4977)" class="mustard__fill futura-book fs__16px">93</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9751 914.6769)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9951 1.293678e-03 -9.999969e-04 1 499.9785 851.7881)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(-1.886197e-02 -1.0047 0.9998 -1.846999e-02 447.6581 892.4114)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="568.1,862.6 556.3,875.3 568.1,888.1"/>
							<polygon class="st9" points="568.3,862.6 568.3,888.1 580.1,875.4"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="431.1" y1="838.3" x2="431.1" y2="1334.9"/>
						<line class="stx11" x1="265.6" y1="1252.2" x2="612.2" y2="1252.2"/>
						<line class="stx11" x1="265.6" y1="1169.6" x2="612.2" y2="1169.6"/>
						<line class="stx11" x1="265.6" y1="1086.9" x2="612.2" y2="1086.9"/>
						<line class="stx11" x1="265.6" y1="1004.3" x2="612.2" y2="1004.3"/>
						<line class="stx11" x1="265.6" y1="921.7" x2="612.2" y2="921.7"/>
						<line class="stx11" x1="265.6" y1="838.3" x2="612.2" y2="838.3"/>
						<line class="stx11" x1="265.6" y1="1334.9" x2="612.2" y2="1334.9"/>
					</g>
				</g>
				<g id="isla_G_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[207]" ng-click="selva.showPropertyData(28, '94')">
						<polygon class="property pb-sprite-2" points="708.8,1179.8 796.7,1179.9 796.6,1361 708.8,1361"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 738.7978 1197.1929)" class="white__fill futura-light fs__14px">8.54</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 762.1154 1302.8973)" class="white__fill futura-light fs__14px">149.45 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 745.2473 1275.5726)" class="mustard__fill futura-book fs__16px">94</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 725.0068 1285.3829)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 738.8448 1353.4442)" class="white__fill futura-light fs__14px">8.54</text>
						<g>
							<polygon class="st8" points="749,1314.3 737.2,1327 749,1339.8"/>
							<polygon class="st9" points="749.1,1314.3 749.1,1339.8 761,1327"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[208]" ng-click="selva.showPropertyData(28, '95')">
						<polygon class="property pb-sprite-1" points="885.7,1179.8 885.7,1361 796.6,1361 796.7,1179.9"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 828.2649 1197.1946)" class="white__fill futura-light fs__14px">8.54</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 851.5865 1302.9093)" class="white__fill futura-light fs__14px">149.45 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 834.7185 1275.5747)" class="mustard__fill futura-book fs__16px">95</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 814.4786 1285.3767)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 828.3079 1353.4465)" class="white__fill futura-light fs__14px">8.54</text>
						<g>
							<polygon class="st8" points="838.5,1314.3 826.6,1327 838.5,1339.8"/>
							<polygon class="st9" points="838.6,1314.3 838.6,1339.8 850.4,1327"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[209]" ng-click="selva.showPropertyData(28, '96')">
						<rect x="885.7" y="1179.8" class="property pb-sprite-2" width="87.4" height="181.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 915.4534 1197.1995)" class="white__fill futura-light fs__14px">8.54</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 938.7747 1302.9075)" class="white__fill futura-light fs__14px">149.45 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 921.9075 1275.5787)" class="mustard__fill futura-book fs__16px">96</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 901.6652 1285.373)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 915.4971 1353.4487)" class="white__fill futura-light fs__14px">8.54</text>
						<g>
							<polygon class="st8" points="925.7,1314.3 913.8,1327 925.7,1339.8"/>
							<polygon class="st9" points="925.8,1314.3 925.8,1339.8 937.6,1327"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[210]" ng-click="selva.showPropertyData(28, '97')">
						<rect x="973.1" y="1179.8" class="property pb-sprite-1" width="88.6" height="181.2"/>
						<text transform="matrix(1.0048 1.620895e-02 -1.644007e-02 0.9999 1007.8184 1197.1991)" class="white__fill futura-light fs__14px">8.54</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1031.1366 1302.8989)" class="white__fill futura-light fs__14px">149.45 m2</text>
						<text transform="matrix(3.562545e-03 -0.9951 1 3.440014e-03 1014.2744 1275.5752)" class="mustard__fill futura-book fs__16px">97</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 994.0266 1285.3834)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.293694e-03 -0.9951 1 1.000009e-03 1057.2122 1285.3715)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0047 -1.886197e-02 1.846999e-02 0.9998 1007.8663 1353.4454)" class="white__fill futura-light fs__14px">8.54</text>
						<g>
							<polygon class="st8" points="1018,1314.3 1006.2,1327 1018,1339.8"/>
							<polygon class="st9" points="1018.2,1314.3 1018.2,1339.8 1030,1327"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="796.6" y1="1361" x2="796.7" y2="1179.9"/>
						<line class="stx11" x1="885.7" y1="1361" x2="885.7" y2="1179.8"/>
						<line class="stx11" x1="973.1" y1="1361" x2="973.1" y2="1179.8"/>
						<line class="stx11" x1="708.8" y1="1179.8" x2="1061.8" y2="1179.8"/>
					</g>
				</g>
				<g id="isla_H_1_">
					<g class="property__active" ng-class="selva.inmovablesClassList[211]" ng-click="selva.showPropertyData(28, '98')">
						<polygon class="property pb-sprite-2" points="307.4,707.2 390.2,700.1 375.2,519.7 292.8,526.9"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 331.9416 699.9201)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 327.5558 576.1731)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 346.4345 602.1456)" class="mustard__fill futura-book fs__16px">98</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 302.5944 591.2143)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 365.2996 586.4646)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 319.4342 541.5903)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="345.2,647.5 333.8,660.6 346,673"/>
							<polygon class="st9" points="345.4,647.5 346.2,673 357.6,660"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[212]" ng-click="selva.showPropertyData(28, '99')">
						<polygon class="property pb-sprite-1" points="457.4,513.2 473,693.9 390.2,700.1 375.2,519.7"/>
						<text transform="matrix(1.002 -7.645168e-02 7.576965e-02 0.9971 417.55 694.8058)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 410.8665 571.4781)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 430.1735 597.1339)" class="mustard__fill futura-book fs__16px">99</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 448.9987 580.6996)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 402.9162 535.6009)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[213]" ng-click="selva.showPropertyData(28, '100')">
						<path class="property pb-sprite-2" d="M540.1,506l15,180.5l-82.2,7.3l-15.6-180.6C457.4,513.2,538.9,506.4,540.1,506z"/>
						<text transform="matrix(1.002 -7.645168e-02 7.576965e-02 0.9971 499.7856 685.4391)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 493.1092 562.1124)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 512.4145 587.7654)" class="mustard__fill futura-book fs__16px">100</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 531.244 571.3359)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 485.1665 526.233)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[214]" ng-click="selva.showPropertyData(28, '101')">
						<polygon class="property pb-sprite-1" points="622.9,498.8 637.6,679.2 555.1,686.6 540.1,506"/>
						<text transform="matrix(1.002 -7.645168e-02 7.576965e-02 0.9971 584.1288 679.4934)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 577.4529 556.1587)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 596.7573 581.8187)" class="mustard__fill futura-book fs__16px">101</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 615.5901 565.3779)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 569.5037 520.2839)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[215]" ng-click="selva.showPropertyData(28, '102')">
						<polygon class="property pb-sprite-2" points="705,492 720.1,672.8 637.6,679.2 622.9,498.8"/>
						<text transform="matrix(1.002 -7.645168e-02 7.576965e-02 0.9971 663.8812 672.3945)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 657.192 549.0562)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 676.5012 574.7158)" class="mustard__fill futura-book fs__16px">102</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 695.3273 558.2854)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 649.2504 513.183)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[216]" ng-click="selva.showPropertyData(28, '103')">
						<polygon class="property pb-sprite-1" points="787.2,485.3 803,665.4 720.1,672.8 705,492"/>
						<text transform="matrix(1.002 -7.645168e-02 7.576965e-02 0.9971 745.6578 664.197)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 738.978 540.8665)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 758.2863 566.5213)" class="mustard__fill futura-book fs__16px">103</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 777.121 550.0887)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 731.0333 504.9934)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="758,611.6 746.8,624.8 759.2,637"/>
							<polygon class="st9" points="758.2,611.6 759.4,637 770.6,623.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[217]" ng-click="selva.showPropertyData(28, '104')">
						<polygon class="property pb-sprite-2" points="870,478 885.3,658.6 803,665.4 787.2,485.3"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 824.9308 659.6548)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 820.5515 535.907)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 839.4269 561.8828)" class="mustard__fill futura-book fs__16px">104</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 858.2863 546.2049)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 812.4249 501.3275)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="838.2,607.3 826.8,620.3 839,632.8"/>
							<polygon class="st9" points="838.4,607.3 839.2,632.8 850.6,619.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[218]" ng-click="selva.showPropertyData(28, '105')">
						<polygon class="property pb-sprite-1" points="953,471.4 967.6,652.1 885.3,658.6 870,478"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 907.208 651.3154)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 902.8259 527.5641)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 921.7005 553.5399)" class="mustard__fill futura-book fs__16px">105</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 940.5671 537.8615)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 894.7033 492.9803)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="920.5,598.9 909.1,612 921.3,624.4"/>
							<polygon class="st9" points="920.7,598.9 921.4,624.4 932.9,611.3"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[219]" ng-click="selva.showPropertyData(28, '106')">
						<polygon class="property pb-sprite-2" points="1035,464.2 1050.1,644.2 967.6,652.1 953,471.4"/>
						<text transform="matrix(1.0031 -5.976131e-02 5.915992e-02 0.9982 994.3083 643.8049)" class="white__fill futura-light fs__14px">8.00</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 989.9323 520.0555)" class="white__fill futura-light fs__14px">140.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 1008.8076 546.0274)" class="mustard__fill futura-book fs__16px">106</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1027.6713 530.3501)" class="white__fill futura-light fs__14px">17.50</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 981.81 485.4775)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="1007.6,591.4 996.2,604.5 1008.4,616.9"/>
							<polygon class="st9" points="1007.8,591.4 1008.5,616.9 1020,603.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[220]" ng-click="selva.showPropertyData(28, '107')">
						<polygon class="property pb-sprite-1" points="279.1,361.7 360.8,355.1 375.2,519.7 292.8,526.9"/>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 313.4216 409.3351)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 332.2968 435.3069)" class="mustard__fill futura-book fs__16px">107</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 288.459 424.3791)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 351.1704 419.6279)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 305.9812 371.0168)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="325.7,377 314.2,390 326.5,402.5"/>
							<polygon class="st9" points="325.8,377 326.6,402.5 338.1,389.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[221]" ng-click="selva.showPropertyData(28, '108')">
						<polygon class="property pb-sprite-2" points="443.6,348 457.4,513.2 375.2,519.7 360.8,355.1"/>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 393.9586 404.8994)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 413.2677 430.557)" class="mustard__fill futura-book fs__16px">108</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 432.0944 414.1232)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 386.6262 365.2858)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[222]" ng-click="selva.showPropertyData(28, '109')">
						<polygon class="property pb-sprite-1" points="526.3,340.8 540.1,506 457.4,513.2 443.6,348"/>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 476.2002 395.5318)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 495.5064 421.1906)" class="mustard__fill futura-book fs__16px">109</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 514.3398 404.7556)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 468.8699 355.9118)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[223]" ng-click="selva.showPropertyData(28, '110')">
						<polygon class="property pb-sprite-2" points="609.2,334.3 622.9,498.8 540.1,506 526.3,340.8"/>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 560.5367 389.5797)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 579.8455 415.2403)" class="mustard__fill futura-book fs__16px">110</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 598.6806 398.8039)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 553.2098 349.9604)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[224]" ng-click="selva.showPropertyData(28, '111')">
						<polygon class="property pb-sprite-1" points="691,326.8 705,492 622.9,498.8 609.2,334.3"/>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 640.2867 382.4861)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 659.5951 408.1409)" class="mustard__fill futura-book fs__16px">111</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 678.4173 391.7065)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 632.9561 342.8596)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[225]" ng-click="selva.showPropertyData(28, '112')">
						<polygon class="property pb-sprite-2" points="773.3,320.6 787.2,485.3 705,492 691,326.8"/>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 722.069 374.2879)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(8.814745e-02 0.9912 -0.9961 8.871970e-02 741.3806 399.9453)" class="mustard__fill futura-book fs__16px">112</text>
						<text transform="matrix(9.041725e-02 0.991 -0.9958 9.114973e-02 760.2097 383.51)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(0.9987 -0.1114 0.1105 0.9939 714.739 334.6699)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[226]" ng-click="selva.showPropertyData(28, '113')">
						<polygon class="property pb-sprite-1" points="856.2,313.4 870,478 787.2,485.3 773.3,320.6"/>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 806.4141 369.0654)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 825.2928 395.0448)" class="mustard__fill futura-book fs__16px">113</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 844.1508 379.3697)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 798.9648 330.7567)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[227]" ng-click="selva.showPropertyData(28, '114')">
						<polygon class="property pb-sprite-2" points="938.5,306.2 953,471.4 870,478 856.2,313.4"/>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 888.6938 360.7271)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 907.5695 386.6988)" class="mustard__fill futura-book fs__16px">114</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 926.4318 371.0204)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 881.2485 322.4129)" class="white__fill futura-light fs__14px">8.00</text>
					</g>
					<g class="property__active" ng-class="selva.inmovablesClassList[228]" ng-click="selva.showPropertyData(28, '115')">
						<polygon class="property pb-sprite-1" points="1021,300.2 1035,464.2 953,471.4 938.5,306.2"/>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 975.795 353.2218)" class="white__fill futura-light fs__14px">128.00 m2</text>
						<text transform="matrix(7.163764e-02 0.9925 -0.9974 7.212966e-02 994.6734 379.1973)" class="mustard__fill futura-book fs__16px">115</text>
						<text transform="matrix(7.390873e-02 0.9924 -0.9972 7.456969e-02 1013.5364 363.5158)" class="white__fill futura-light fs__14px">16.00</text>
						<text transform="matrix(1.0004 -9.473050e-02 9.396955e-02 0.9956 968.3562 314.9061)" class="white__fill futura-light fs__14px">8.00</text>
						<g>
							<polygon class="st8" points="988.1,320.9 976.6,333.9 988.8,346.3"/>
							<polygon class="st9" points="988.2,320.9 989,346.3 1000.4,333.3"/>
						</g>
					</g>
					<g>
						<line class="stx11" x1="292.8" y1="526.9" x2="1035" y2="464.2"/>
						<line class="stx11" x1="390.2" y1="700.1" x2="360.8" y2="355.1"/>
						<line class="stx11" x1="473" y1="693.9" x2="443.6" y2="348"/>
						<line class="stx11" x1="555.1" y1="686.6" x2="526.3" y2="340.8"/>
						<line class="stx11" x1="637.6" y1="679.2" x2="609.2" y2="334.3"/>
						<line class="stx11" x1="720.1" y1="672.8" x2="691" y2="326.8"/>
						<line class="stx11" x1="803" y1="665.4" x2="773.3" y2="320.6"/>
						<line class="stx11" x1="885.3" y1="658.6" x2="856.2" y2="313.4"/>
						<line class="stx11" x1="967.6" y1="652.1" x2="938.5" y2="306.2"/>
						<line class="stx11" x1="307.4" y1="707.2" x2="279.1" y2="361.7"/>
						<line class="stx11" x1="1050.1" y1="644.2" x2="1021" y2="300.2"/>
					</g>
				</g>
				<g id="complemento_1_">
					<g>
						<polygon class="stx16" points="96,1969.8 126.4,1970.1 126.7,2010.6 96.3,2010.1"/>
						<g>
							<text transform="matrix(0.9031 1.301556e-02 -9.920008e-03 1 150.5439 1990.3306)" class="stx17 futura-book fs__10px">ACCESO</text>
							<path class="stx17" d="M169.2,1965.6c-5.5-0.1-10,4.6-10.4,10.6l-14.6-0.2l12.6-11.9l12.6-11.9l12.3,12.2l12.3,12.2l-14.6-0.2
								C179.1,1970.5,174.7,1965.7,169.2,1965.6"/>
							<text transform="matrix(0.9052 4.178322e-02 -2.739012e-02 0.9996 40.0812 1966.9371)" class="stx17 futura-book fs__10px">SALIDA</text>
							<path class="stx17" d="M54.2,1985.8c-5.4-0.2-9.7-5.1-9.8-11l-14.3-0.7l11.9,12.3l11.9,12.3l12.5-11.2l12.5-11.2l-14.3-0.7
								C64.1,1981.6,59.6,1986.1,54.2,1985.8"/>
							<path class="stx11" d="M105.2,1987.3c0.3,0,3.1,1.4,3.1,2.6c0,1.2-2.8,1.8-3.1,1.8c-0.3,0-1.2-1.2-1.2-2.4
								C104,1988.1,104.9,1987.3,105.2,1987.3z"/>
							<path class="stx11" d="M113.4,1980.7c3.1,0.5,5.3,5.3,5.3,10.8c0,5.5-2.1,9.6-5.2,9.2C113.4,1990.7,113.4,1990.7,113.4,1980.7z"
								/>
							<polygon class="stx11" points="113.4,1981.3 113.5,2000.3 110.6,1999.8 110.6,1980.8"/>
							<path class="stx11" d="M110.6,1999.8l-2.4,1.6c-0.4,0.3-1.1,0-1.3-0.5l-0.6-1.5c-0.6-2.5-1.9-4.9-3.8-6.7l-0.7-0.7l0-6.4l0.9-0.6
								c1.7-1.1,3-2.9,3.6-5l0.7-1.7c0.2-0.5,0.8-0.5,1.2-0.1l2.6,2.6L110.6,1999.8z"/>
						</g>
					</g>
					<polygon class="stx20" points="1365.5,5.5 3.4,120.8 3.2,2065.2 1365.5,2067.2"/>
				</g>
			</g>

		</svg>

    </div>

</body>
</html>