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
						<p class="green-text">Con tan solo $5,000 MXN</p>
						
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
					<h1 class="center-align">Selva 3</h1>
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

        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1366 1417.85" style="enable-background:new 0 0 1366 1417.85;" xml:space="preserve">

			<style type="text/css">
				.st9{fill:#E2A63C;}
				.stx10{opacity:0.6;fill:#E2A63C;}
				.stx12{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="1419" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/selva/condos/selva-3.jpg" transform="matrix(1 0 0 1 0 -1.1516)"></image>

			<g id="isla_A_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[229]" ng-click="selva.showPropertyData(29, '1')">
					<polygon id="A_L01" class="property pb-sprite-1" points="0.81,1077.27 139.21,1077.27 138.66,1007.8 0.81,1007.8"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3578 1051.6134)" class="white__fill futura-light fs__11px">10.03</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1078 1050.0298)" class="white__fill futura-light fs__11px">200.60 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3834 1038.9653)" class="mustard__fill futura-book fs__14px">01</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3064 1018.8565)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.304 1073.9871)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5207 1051.2357)" class="white__fill futura-light fs__11px">10.03</text>
					<g>
						<polygon class="st9" points="105.77,1030.99 97.89,1039.44 105.77,1047.95"/>
						<polygon class="stx10" points="105.86,1030.99 105.86,1047.95 113.74,1039.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[230]" ng-click="selva.showPropertyData(29, '2')">
					<polygon id="A_L02" class="property pb-sprite-2" points="139.21,951.95 0.54,951.95 0.81,1007.8 138.66,1007.8"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3575 988.0606)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1081 986.4716)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3817 975.4071)" class="mustard__fill futura-book fs__14px">02</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3062 961.4896)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5189 987.6857)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[231]" ng-click="selva.showPropertyData(29, '3')">
					<polygon id="A_L03" class="property pb-sprite-1" points="139.21,896.84 0.81,896.84 0.54,951.95 139.21,951.95"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3579 933.5615)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1081 931.9843)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3837 920.9178)" class="mustard__fill futura-book fs__14px">03</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3042 907.0017)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5208 933.1915)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[232]" ng-click="selva.showPropertyData(29, '4')">
					<polygon id="A_L04" class="property pb-sprite-2" points="139.21,842.42 0.81,841.74 0.81,896.84 139.21,896.84"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3589 876.9277)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1101 875.3455)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3837 864.2791)" class="mustard__fill futura-book fs__14px">04</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3006 850.3635)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5211 876.5567)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[233]" ng-click="selva.showPropertyData(29, '5')">
					<polygon id="A_L05" class="property pb-sprite-1" points="139.21,786.73 0.54,786.73 0.81,841.74 139.21,842.42"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.36 821.7753)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1082 820.1931)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3819 809.1257)" class="mustard__fill futura-book fs__14px">05</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3042 795.2056)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5171 821.3994)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[234]" ng-click="selva.showPropertyData(29, '6')">
					<polygon id="A_L06" class="property pb-sprite-2" points="139.21,731.54 0.54,731.64 0.54,786.73 139.21,786.73"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3582 765.5389)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1074 763.9537)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3811 752.8873)" class="mustard__fill futura-book fs__14px">06</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.305 738.9681)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5209 765.1581)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[235]" ng-click="selva.showPropertyData(29, '7')">
					<polygon id="A_L07" class="property pb-sprite-1" points="139.21,676.47 0.54,676.47 0.54,731.64 139.21,731.54"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3578 710.371)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1116 708.7818)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3853 697.7134)" class="mustard__fill futura-book fs__14px">07</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.305 683.7993)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5209 709.9891)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[236]" ng-click="selva.showPropertyData(29, '8')">
					<rect id="A_L08" x="0.54" y="621.37" class="property pb-sprite-2" width="138.67" height="55.11"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3558 656.4246)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1085 654.8414)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3846 643.775)" class="mustard__fill futura-book fs__14px">08</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3056 629.8606)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5191 656.0457)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[237]" ng-click="selva.showPropertyData(29, '9')">
					<rect id="A_L09" x="0.54" y="566.41" class="property pb-sprite-1" width="138.67" height="54.96"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3578 602.8425)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1096 601.2575)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3832 590.1911)" class="mustard__fill futura-book fs__14px">09</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3074 576.2775)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.521 602.4705)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[238]" ng-click="selva.showPropertyData(29, '10')">
					<rect id="A_L10" x="0.54" y="511.27" class="property pb-sprite-2" width="138.67" height="55.14"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3581 546.446)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1086 544.8668)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3823 533.7983)" class="mustard__fill futura-book fs__14px">10</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3027 519.8884)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5204 546.0612)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[239]" ng-click="selva.showPropertyData(29, '11')">
					<rect id="A_L11" x="0.54" y="456.23" class="property pb-sprite-1" width="138.67" height="55.04"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3572 491.2311)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1094 489.6479)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3831 478.5835)" class="mustard__fill futura-book fs__14px">11</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.304 464.6728)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5201 490.8551)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[240]" ng-click="selva.showPropertyData(29, '12')">
					<rect id="A_L12" x="0.54" y="401.35" class="property pb-sprite-2" width="138.67" height="54.88"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3595 437.3942)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1094 435.8209)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3851 424.7564)" class="mustard__fill futura-book fs__14px">12</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3013 410.8326)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5182 437.0171)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[241]" ng-click="selva.showPropertyData(29, '13')">
					<rect id="A_L13" x="0.54" y="346.21" class="property pb-sprite-1" width="138.67" height="55.14"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3583 382.568)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1095 380.9966)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3832 369.9322)" class="mustard__fill futura-book fs__14px">13</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3053 356.0108)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5176 382.1899)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[242]" ng-click="selva.showPropertyData(29, '14')">
					<rect id="A_L14" x="0.54" y="291.26" class="property pb-sprite-2" width="138.67" height="54.96"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3582 327.1119)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1095 325.5229)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3831 314.4565)" class="mustard__fill futura-book fs__14px">14</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3039 300.545)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5212 326.7328)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[243]" ng-click="selva.showPropertyData(29, '15')">
					<rect id="A_L15" x="0.54" y="235.94" class="property pb-sprite-1" width="138.67" height="55.32"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 135.3572 272.0483)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 44.1122 270.4702)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 62.3859 259.4057)" class="mustard__fill futura-book fs__14px">15</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 53.3047 245.4877)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 11.5201 271.6703)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="112.36,254.74 104.48,263.2 112.36,271.71"/>
						<polygon class="stx10" points="112.45,254.74 112.45,271.71 120.33,263.25"/>
					</g>
				</g>
				<g>
					<line class="stx12" x1="0.81" y1="1007.8" x2="138.66" y2="1007.8"/>
					<line class="stx12" x1="0.81" y1="952.32" x2="138.66" y2="952.32"/>
					<line class="stx12" x1="0.81" y1="896.84" x2="138.66" y2="896.84"/>
					<line class="stx12" x1="0.81" y1="841.36" x2="138.66" y2="841.36"/>
					<line class="stx12" x1="0.81" y1="785.88" x2="138.66" y2="785.88"/>
					<line class="stx12" x1="0.81" y1="730.41" x2="138.66" y2="730.41"/>
					<line class="stx12" x1="0.81" y1="674.93" x2="138.66" y2="674.93"/>
					<line class="stx12" x1="0.81" y1="621.37" x2="138.66" y2="621.37"/>
					<line class="stx12" x1="0.81" y1="566.32" x2="138.66" y2="566.32"/>
					<line class="stx12" x1="0.81" y1="511.27" x2="138.66" y2="511.27"/>
					<line class="stx12" x1="0.81" y1="456.22" x2="138.66" y2="456.22"/>
					<line class="stx12" x1="0.81" y1="401.17" x2="138.66" y2="401.17"/>
					<line class="stx12" x1="0.81" y1="346.12" x2="138.66" y2="346.12"/>
					<line class="stx12" x1="0.81" y1="291.07" x2="138.66" y2="291.07"/>
					<line class="stx12" x1="0.81" y1="236.03" x2="138.66" y2="236.03"/>
					<line class="stx12" x1="0.81" y1="1077.27" x2="139.21" y2="1077.27"/>
				</g>
			</g>
			<g id="isla_B_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[244]" ng-click="selva.showPropertyData(29, '16')">
					<polygon id="B_L16" class="property pb-sprite-2" points="56.08,172.71 0.54,172.66 0.36,0 56.08,0"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 18.9597 167.5718)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 21.7516 60.3646)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 32.8161 78.6383)" class="mustard__fill futura-book fs__14px">16</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 5.4309 69.5468)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 20.746 11.8194)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="27.9,122.56 20.02,131.02 27.9,139.53"/>
						<polygon class="stx10" points="27.99,122.56 27.99,139.53 35.87,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[245]" ng-click="selva.showPropertyData(29, '17')">
					<rect id="B_L17" x="56.08" class="property pb-sprite-1" width="54.73" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 73.7273 167.5705)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 76.5192 60.3635)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 87.5856 78.6372)" class="mustard__fill futura-book fs__14px">17</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 60.1987 69.5433)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 75.5147 11.8166)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[246]" ng-click="selva.showPropertyData(29, '18')">
					<rect id="B_L18" x="110.82" class="property pb-sprite-2" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 129.4813 167.5712)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 132.2732 60.3624)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 143.3416 78.638)" class="mustard__fill futura-book fs__14px">18</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 115.9555 69.5443)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 131.2696 11.8146)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[247]" ng-click="selva.showPropertyData(29, '19')">
					<rect id="B_L19" x="165.68" class="property pb-sprite-1" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 184.4394 167.5701)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 187.2293 60.3645)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 198.2937 78.6382)" class="mustard__fill futura-book fs__14px">19</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 170.9089 69.5421)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 186.2247 11.8168)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[248]" ng-click="selva.showPropertyData(29, '20')">
					<rect id="B_L20" x="220.82" class="property pb-sprite-2" width="55.41" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 238.3076 167.57)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 241.0974 60.3606)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 252.1619 78.6343)" class="mustard__fill futura-book fs__14px">20</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 224.7773 69.5417)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 240.092 11.8184)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[249]" ng-click="selva.showPropertyData(29, '21')">
					<rect id="B_L21" x="276.24" class="property pb-sprite-1" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 294.5347 167.5701)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 297.328 60.3641)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 308.391 78.6378)" class="mustard__fill futura-book fs__14px">21</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 281.0094 69.5463)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 296.3259 11.8183)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[250]" ng-click="selva.showPropertyData(29, '22')">
					<rect id="B_L22" x="331.37" class="property pb-sprite-2" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 349.0255 167.5686)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 351.8173 60.3617)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 362.8817 78.6354)" class="mustard__fill futura-book fs__14px">22</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 335.4969 69.5408)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 350.8118 11.8197)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[251]" ng-click="selva.showPropertyData(29, '23')">
					<rect id="B_L23" x="386.24" class="property pb-sprite-1" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 403.9743 167.5733)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 406.7655 60.3637)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 417.83 78.6374)" class="mustard__fill futura-book fs__14px">23</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 390.4404 69.5423)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 405.7577 11.8169)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[252]" ng-click="selva.showPropertyData(29, '24')">
					<rect id="B_L24" x="441.38" class="property pb-sprite-2" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 461.3294 167.5716)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 464.1231 60.362)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 475.1856 78.6356)" class="mustard__fill futura-book fs__14px">24</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 447.7994 69.5453)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 463.1157 11.8155)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[253]" ng-click="selva.showPropertyData(29, '25')">
					<rect id="B_L25" x="496.25" class="property pb-sprite-1" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 514.7327 167.573)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 517.5204 60.3652)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 528.5869 78.6409)" class="mustard__fill futura-book fs__14px">25</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 501.1989 69.5425)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 516.5181 11.8183)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[254]" ng-click="selva.showPropertyData(29, '26')">
					<rect id="B_L26" x="551.11" class="property pb-sprite-2" width="55.41" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 568.4535 167.5707)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 571.2407 60.3635)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 582.3055 78.6391)" class="mustard__fill futura-book fs__14px">26</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 554.9218 69.5429)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 570.2339 11.8172)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[255]" ng-click="selva.showPropertyData(29, '27')">
					<rect id="B_L27" x="606.53" class="property pb-sprite-1" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 625.7759 167.568)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 628.5631 60.3643)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 639.6276 78.6379)" class="mustard__fill futura-book fs__14px">27</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 612.2399 69.5408)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 627.5612 11.8185)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[256]" ng-click="selva.showPropertyData(29, '28')">
					<rect id="B_L28" x="661.67" class="property pb-sprite-2" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 682.2344 167.5703)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 685.0222 60.3656)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 696.0867 78.6393)" class="mustard__fill futura-book fs__14px">28</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 668.7001 69.5439)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 684.0173 11.8197)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[257]" ng-click="selva.showPropertyData(29, '29')">
					<rect id="B_L29" x="716.81" class="property pb-sprite-1" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 736.7667 167.5698)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 739.5535 60.3608)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 750.6199 78.6364)" class="mustard__fill futura-book fs__14px">29</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 723.2358 69.5437)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 738.5516 11.8155)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[258]" ng-click="selva.showPropertyData(29, '30')">
					<rect id="B_L30" x="771.67" class="property pb-sprite-2" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 787.9689 167.5749)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 790.7603 60.3625)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 801.8228 78.6381)" class="mustard__fill futura-book fs__14px">30</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 774.4342 69.5425)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 789.7557 11.8172)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[259]" ng-click="selva.showPropertyData(29, '31')">
					<rect id="B_L31" x="826.81" class="property pb-sprite-1" width="55.14" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 846.8098 167.5677)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 849.5945 60.3655)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 860.6629 78.6393)" class="mustard__fill futura-book fs__14px">31</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 833.2725 69.5412)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 848.5908 11.8176)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[260]" ng-click="selva.showPropertyData(29, '32')">
					<rect id="B_L32" x="881.95" class="property pb-sprite-2" width="54.87" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 901.6663 167.5685)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 904.4549 60.3616)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 915.5213 78.6373)" class="mustard__fill futura-book fs__14px">32</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 888.1324 69.5452)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 903.4482 11.8192)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="910.6,122.56 902.73,131.02 910.6,139.53"/>
						<polygon class="stx10" points="910.7,122.56 910.7,139.53 918.57,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[261]" ng-click="selva.showPropertyData(29, '33')">
					<rect id="B_L33" x="936.82" class="property pb-sprite-1" width="55.96" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 955.1713 167.57)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 957.9558 60.3641)" class="white__fill futura-light fs__11px">200 .00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 969.0222 78.6378)" class="mustard__fill futura-book fs__14px">33</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 941.6364 69.5453)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 956.9521 11.8187)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="964.1,122.56 956.23,131.02 964.1,139.53"/>
						<polygon class="stx10" points="964.2,122.56 964.2,139.53 972.07,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[262]" ng-click="selva.showPropertyData(29, '34')">
					<rect id="B_L34" x="992.78" class="property pb-sprite-2" width="54.59" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1009.8373 167.5696)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1012.6277 60.3639)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1023.6921 78.6395)" class="mustard__fill futura-book fs__14px">34</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 996.3049 69.5449)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1011.6212 11.8172)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="1018.77,122.56 1010.9,131.02 1018.77,139.53"/>
						<polygon class="stx10" points="1018.87,122.56 1018.87,139.53 1026.74,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[263]" ng-click="selva.showPropertyData(29, '35')">
					<path id="B_L35" class="property pb-sprite-1" d="M1108.79,0c0,1.36,0,172.71,0,172.71h-61.42V0H1108.79z"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1066.0698 167.5717)" class="white__fill futura-light fs__11px">9.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1068.8583 60.3635)" class="white__fill futura-light fs__11px">225.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1079.9208 78.6371)" class="mustard__fill futura-book fs__14px">35</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1052.5356 69.5435)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1067.8527 11.8191)" class="white__fill futura-light fs__11px">9.00</text>
					<g>
						<polygon class="st9" points="1075,122.56 1067.13,131.02 1075,139.53"/>
						<polygon class="stx10" points="1075.1,122.56 1075.1,139.53 1082.97,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[264]" ng-click="selva.showPropertyData(29, '36')">
					<rect id="B_L36" x="1108.79" class="property pb-sprite-2" width="62.24" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1128.066 167.5733)" class="white__fill futura-light fs__11px">9.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1130.8529 60.3638)" class="white__fill futura-light fs__11px">225.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1141.9222 78.6395)" class="mustard__fill futura-book fs__14px">36</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1114.5313 69.547)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1129.8461 11.8184)" class="white__fill futura-light fs__11px">9.00</text>
					<g>
						<polygon class="st9" points="1137,122.56 1129.13,131.02 1137,139.53"/>
						<polygon class="stx10" points="1137.1,122.56 1137.1,139.53 1144.97,131.07"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[265]" ng-click="selva.showPropertyData(29, '37')">
					<path id="B_L37" class="property pb-sprite-1" d="M1233.26,0c0,0,0.27,172.91,0,172.71s-62.24,0-62.24,0V0H1233.26z"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1192.1588 167.5711)" class="white__fill futura-light fs__11px">9.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1194.9484 60.3627)" class="white__fill futura-light fs__11px">225.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1206.0128 78.6363)" class="mustard__fill futura-book fs__14px">37</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1178.6256 69.544)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1193.9401 11.8194)" class="white__fill futura-light fs__11px">9.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[266]" ng-click="selva.showPropertyData(29, '38')">
					<rect id="B_L38" x="1233.26" class="property pb-sprite-2" width="61.69" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1251.9539 167.5716)" class="white__fill futura-light fs__11px">9.00</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1254.7397 60.3614)" class="white__fill futura-light fs__11px">225.00 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1265.8042 78.635)" class="mustard__fill futura-book fs__14px">38</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1238.4165 69.5402)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1253.7361 11.8196)" class="white__fill futura-light fs__11px">9.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[267]" ng-click="selva.showPropertyData(29, '39')">
					<rect id="B_L39" x="1294.95" class="property pb-sprite-1" width="67.15" height="172.71"/>
					<text transform="matrix(1.0049 9.446045e-04 -1.249998e-03 1 1321.7849 167.5708)" class="white__fill futura-light fs__11px">9.73</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1324.5739 60.3616)" class="white__fill futura-light fs__11px">243.25 m2</text>
					<text transform="matrix(-0.0119 0.995 -0.9999 -0.0118 1335.6364 78.6353)" class="mustard__fill futura-book fs__14px">39</text>
					<text transform="matrix(-0.0283 0.9947 -0.9996 -0.0281 1308.2462 69.5451)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(5.105044e-03 0.9951 -1 5.429974e-03 1348.6412 69.7299)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(1.0049 5.878672e-03 -6.150006e-03 1 1323.5665 11.8169)" class="white__fill futura-light fs__11px">9.73</text>
					<g>
						<polygon class="st9" points="1330.72,122.56 1322.84,131.02 1330.72,139.53"/>
						<polygon class="stx10" points="1330.82,122.56 1330.82,139.53 1338.69,131.07"/>
					</g>
				</g>
				<g>
					<line class="stx12" x1="56.08" y1="0" x2="56.08" y2="172.71"/>
					<line class="stx12" x1="110.82" y1="0" x2="110.82" y2="172.71"/>
					<line class="stx12" x1="165.55" y1="0" x2="165.55" y2="172.71"/>
					<line class="stx12" x1="220.29" y1="0" x2="220.29" y2="172.71"/>
					<line class="stx12" x1="275.02" y1="0" x2="275.02" y2="172.71"/>
					<line class="stx12" x1="329.76" y1="0" x2="329.76" y2="172.71"/>
					<line class="stx12" x1="386.24" y1="0" x2="386.24" y2="172.71"/>
					<line class="stx12" x1="442.73" y1="0" x2="442.73" y2="172.71"/>
					<line class="stx12" x1="496.25" y1="0" x2="496.25" y2="172.71"/>
					<line class="stx12" x1="549.77" y1="0" x2="549.77" y2="172.71"/>
					<line class="stx12" x1="606.39" y1="0" x2="606.39" y2="172.71"/>
					<line class="stx12" x1="663.01" y1="0" x2="663.01" y2="172.71"/>
					<line class="stx12" x1="716.81" y1="0" x2="716.81" y2="172.71"/>
					<line class="stx12" x1="770.6" y1="0" x2="770.6" y2="172.71"/>
					<line class="stx12" x1="883.02" y1="0" x2="883.02" y2="172.71"/>
					<line class="stx12" x1="826.81" y1="0" x2="826.81" y2="172.71"/>
					<line class="stx12" x1="936.82" y1="0" x2="936.82" y2="172.71"/>
					<line class="stx12" x1="992.09" y1="0" x2="992.09" y2="172.71"/>
					<line class="stx12" x1="1047.37" y1="0" x2="1047.37" y2="172.71"/>
					<line class="stx12" x1="1108.79" y1="0" x2="1108.79" y2="172.71"/>
					<line class="stx12" x1="1171.02" y1="0" x2="1171.02" y2="172.71"/>
					<line class="stx12" x1="1232.99" y1="0" x2="1232.99" y2="172.71"/>
					<line class="stx12" x1="1294.95" y1="0" x2="1294.95" y2="172.71"/>
				</g>
			</g>
			<g id="isla_C_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[268]" ng-click="selva.showPropertyData(29, '40')">
					<polygon id="C_L40" class="property pb-sprite-2" points="1189.86,236.8 1361.96,236.66 1361.96,278.34 1359.37,308.54 1356.82,329.65 
						1186.86,303.63 1189.95,275.42"/>
					<text transform="matrix(0.9951 3.383375e-04 -2.000000e-04 1 1253.104 281.5768)" class="white__fill futura-light fs__11px">290.41 m2</text>
					<text transform="matrix(0.9951 3.383375e-04 -2.000000e-04 1 1271.2479 270.3007)" class="mustard__fill futura-book fs__14px">40</text>
					<text transform="matrix(0.9835 0.1518 -0.1523 0.9883 1263.2495 308.4224)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.9951 -4.488075e-03 4.809993e-03 1 1263.4818 247.6941)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.0821 -1.0015 0.9966 0.082 1202.3329 275.2832)" class="white__fill futura-light fs__11px">9.70</text>
					<text transform="matrix(0.0752 -1.0021 0.9972 0.0751 1355.9274 291.3409)" class="white__fill futura-light fs__11px">13.53</text>
					<g>
						<polygon class="st9" points="1231.95,259.1 1224.08,267.56 1231.95,276.07"/>
						<polygon class="stx10" points="1232.05,259.11 1232.05,276.07 1239.92,267.62"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[269]" ng-click="selva.showPropertyData(29, '41')">
					<polygon id="C_L41" class="property pb-sprite-1" points="1175.39,357.32 1338.99,409.54 1349,374.6 1356.82,329.65 1186.86,303.63 1182.67,331.36 
			"/>
					<text transform="matrix(0.977 0.1887 -0.1895 0.9819 1242.0101 349.3368)" class="white__fill futura-light fs__11px">248.98 m2</text>
					<text transform="matrix(0.977 0.1887 -0.1895 0.9819 1261.9586 341.6992)" class="mustard__fill futura-book fs__14px">41</text>
					<text transform="matrix(0.9603 0.2609 -0.2619 0.9651 1247.7268 374.3568)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.1673 -0.9909 0.986 0.1668 1190.9574 342.0973)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.1604 -0.992 0.9871 0.16 1341.5551 373.2467)" class="white__fill futura-light fs__11px">11.93</text>
					<g>
						<polygon class="st9" points="1220.07,329.64 1212.19,338.1 1220.07,346.61"/>
						<polygon class="stx10" points="1220.17,329.64 1220.17,346.61 1228.04,338.15"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[270]" ng-click="selva.showPropertyData(29, '42')">
					<polygon id="C_L42" class="property pb-sprite-2" points="1155.4,408.84 1165.84,383.93 1175.39,357.32 1338.99,409.54 1326.07,446.85 
						1308.6,485.61"/>
					<text transform="matrix(0.9287 0.3574 -0.359 0.9333 1223.2639 412.2005)" class="white__fill futura-light fs__11px">248.98 m2</text>
					<text transform="matrix(0.9287 0.3574 -0.359 0.9333 1244.2402 408.1828)" class="mustard__fill futura-book fs__14px">42</text>
					<text transform="matrix(0.8996 0.4255 -0.4273 0.9041 1224.2626 438.4517)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.3387 -0.9461 0.9414 0.3373 1174.0133 395.8772)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.3322 -0.9484 0.9437 0.3308 1317.2543 453.3559)" class="white__fill futura-light fs__11px">11.93</text>
					<g>
						<polygon class="st9" points="1205.97,393.46 1198.1,401.92 1205.97,410.43"/>
						<polygon class="stx10" points="1206.07,393.46 1206.07,410.43 1213.94,401.97"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[271]" ng-click="selva.showPropertyData(29, '43')">
					<polygon id="C_L43" class="property pb-sprite-1" points="1127.62,456.23 1141.27,434.43 1155.4,408.84 1308.6,485.61 1289.49,522.19 
						1266.11,556.58"/>
					<text transform="matrix(0.8529 0.5127 -0.5151 0.8571 1193.5305 470.1221)" class="white__fill futura-light fs__11px">248.98 m2</text>
					<text transform="matrix(0.8529 0.5127 -0.5151 0.8571 1214.8928 469.7989)" class="mustard__fill futura-book fs__14px">43</text>
					<text transform="matrix(0.8124 0.5748 -0.5774 0.8165 1190.0848 495.7308)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.4973 -0.8732 0.8688 0.4952 1147.7097 445.7168)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.4913 -0.8766 0.8722 0.4892 1278.0072 526.1946)" class="white__fill futura-light fs__11px">11.93</text>
					<g>
						<polygon class="st9" points="1175.34,445.84 1167.47,454.3 1175.34,462.81"/>
						<polygon class="stx10" points="1175.44,445.84 1175.44,462.81 1183.31,454.35"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[272]" ng-click="selva.showPropertyData(29, '44')">
					<polygon id="C_L44" class="property pb-sprite-2" points="1092.41,498.44 1127.62,456.23 1266.11,556.58 1241.27,589.78 1214.15,620.23"/>
					<text transform="matrix(0.7528 0.6508 -0.6539 0.7566 1155.3922 523.8008)" class="white__fill futura-light fs__11px">248.98 m2</text>
					<text transform="matrix(0.7528 0.6508 -0.6539 0.7566 1176.4957 527.1298)" class="mustard__fill futura-book fs__14px">44</text>
					<text transform="matrix(0.742 0.6631 -0.6661 0.7458 1146.9058 549.1796)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.6391 -0.7755 0.7715 0.6362 1114.3878 492.1261)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.6337 -0.7799 0.7759 0.6309 1229.7422 594.5041)" class="white__fill futura-light fs__11px">11.93</text>
					<g>
						<polygon class="st9" points="1139.86,500.79 1131.98,509.25 1139.86,517.76"/>
						<polygon class="stx10" points="1139.95,500.79 1139.95,517.76 1147.83,509.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[273]" ng-click="selva.showPropertyData(29, '45')">
					<polygon id="C_L45" class="property pb-sprite-1" points="1052.01,535.84 1092.41,498.44 1214.15,620.23 1183.76,648.84 1153.37,674.33"/>
					<text transform="matrix(0.6666 0.7389 -0.7424 0.6699 1106.6799 571.2916)" class="white__fill futura-light fs__11px">249.22 m2</text>
					<text transform="matrix(0.6666 0.7389 -0.7424 0.6699 1127.2048 577.2036)" class="mustard__fill futura-book fs__14px">45</text>
					<text transform="matrix(0.6543 0.7498 -0.7532 0.6578 1097.2769 591.6264)" class="white__fill futura-light fs__11px">25.08</text>
					<text transform="matrix(0.7301 -0.6905 0.6869 0.7267 1072.2865 531.2954)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.7253 -0.6955 0.6919 0.722 1172.1696 647.84)" class="white__fill futura-light fs__11px">11.94</text>
					<g>
						<polygon class="st9" points="1097.43,538.59 1089.55,547.05 1097.43,555.56"/>
						<polygon class="stx10" points="1097.52,538.59 1097.52,555.56 1105.4,547.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[274]" ng-click="selva.showPropertyData(29, '46')">
					<polygon id="C_L46" class="property pb-sprite-2" points="1010.25,571.05 1052.01,535.84 1153.37,674.33 1111.52,710.51"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1066.5254 603.9305)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1086.2379 612.1717)" class="mustard__fill futura-book fs__14px">46</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1054.7549 624.141)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.7675 -0.6486 0.6452 0.764 1031.9873 571.0496)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1119.4153 688.1562)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="1054.75,577.91 1046.87,586.36 1054.75,594.87"/>
						<polygon class="stx10" points="1054.84,577.91 1054.84,594.87 1062.72,586.42"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[275]" ng-click="selva.showPropertyData(29, '47')">
					<polygon id="C_L47" class="property pb-sprite-1" points="967.39,606 1010.25,571.05 1111.52,710.51 1068.93,745.84"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1023.554 641.4083)" class="white__fill futura-light fs__11px">200.00m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1043.2642 649.6462)" class="mustard__fill futura-book fs__14px">47</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 1011.7795 661.6138)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.7675 -0.6486 0.6452 0.764 988.3725 603.9271)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1076.4344 725.6271)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="1009.62,609 1001.74,617.45 1009.62,625.96"/>
						<polygon class="stx10" points="1009.71,609 1009.71,625.96 1017.59,617.51"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[276]" ng-click="selva.showPropertyData(29, '48')">
					<polygon id="C_L48" class="property pb-sprite-2" points="924.62,641.75 967.39,606 1068.93,745.84 1026.53,781.35"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 984.6055 678.1475)" class="white__fill futura-light fs__11px">200.00m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 1004.3167 686.3849)" class="mustard__fill futura-book fs__14px">48</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 972.8297 698.3574)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.7675 -0.6486 0.6452 0.764 947.5931 637.8594)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 1037.4948 762.3691)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="968.98,647.91 961.11,656.37 968.98,664.88"/>
						<polygon class="stx10" points="969.08,647.91 969.08,664.88 976.95,656.42"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[277]" ng-click="selva.showPropertyData(29, '49')">
					<polygon id="C_L49" class="property pb-sprite-1" points="881.86,675.74 924.62,641.75 1026.53,781.35 983.77,814.25"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 941.9445 711.6918)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 961.6571 719.9329)" class="mustard__fill futura-book fs__14px">49</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 930.1702 731.9036)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 904.7385 670.8888)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 994.8333 795.9158)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[278]" ng-click="selva.showPropertyData(29, '50')">
					<polygon id="C_L50" class="property pb-sprite-2" points="838.55,710.51 881.86,675.74 983.77,814.25 939.37,848.84"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 898.1516 747.5403)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 917.8619 755.7783)" class="mustard__fill futura-book fs__14px">50</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 886.3732 767.7453)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 860.9449 706.7325)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 951.0335 831.7576)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[279]" ng-click="selva.showPropertyData(29, '51')">
					<polygon id="C_L51" class="property pb-sprite-1" points="794.51,743.47 838.55,710.51 939.37,848.84 895.33,882.14"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 852.7988 779.8073)" class="white__fill futura-light fs__11px">200.00  m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 872.5114 788.0484)" class="mustard__fill futura-book fs__14px">51</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 841.0263 800.0142)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 815.597 738.9998)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 905.6899 864.0282)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[280]" ng-click="selva.showPropertyData(29, '52')">
					<polygon id="C_L52" class="property pb-sprite-2" points="749.93,776.05 794.51,743.47 895.33,882.14 851.83,914.98"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 810.0059 813.1494)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 829.7184 821.3906)" class="mustard__fill futura-book fs__14px">52</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 798.23 833.357)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 772.8 772.3444)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 862.8931 897.3699)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[281]" ng-click="selva.showPropertyData(29, '53')">
					<polygon id="C_L53" class="property pb-sprite-1" points="705.52,808.26 749.93,776.05 851.83,914.98 806.52,947.7"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 765.28 845.1321)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 784.9911 853.3694)" class="mustard__fill futura-book fs__14px">53</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 753.5056 865.3353)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 728.0747 804.3221)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 818.1675 929.3493)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[282]" ng-click="selva.showPropertyData(29, '54')">
					<polygon id="C_L54" class="property pb-sprite-2" points="660.76,840.59 705.52,808.26 806.52,947.7 762.3,979.14"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 719.9324 877.58)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 739.6427 885.818)" class="mustard__fill futura-book fs__14px">54</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 708.1579 897.7896)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 682.7297 836.773)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8006 -0.6073 0.6041 0.7969 772.8246 961.7995)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[283]" ng-click="selva.showPropertyData(29, '55')">
					<polygon id="C_L55" class="property pb-sprite-1" points="615.08,871.35 660.76,840.59 762.3,979.14 717.17,1010.62"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 675.0045 908.4933)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 694.7148 916.7313)" class="mustard__fill futura-book fs__14px">55</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 663.2344 928.7007)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 637.8011 867.6839)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 727.1077 991.9996)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[284]" ng-click="selva.showPropertyData(29, '56')">
					<polygon id="C_L56" class="property pb-sprite-2" points="569.58,902.04 615.08,871.35 717.17,1010.62 670.76,1041.19"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 629.2643 940.2102)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 648.9751 948.4479)" class="mustard__fill futura-book fs__14px">56</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 617.487 960.4118)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 592.0593 899.4033)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 681.3644 1023.7154)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[285]" ng-click="selva.showPropertyData(29, '57')">
					<polygon id="C_L57" class="property pb-sprite-1" points="523.54,932.91 569.58,902.04 670.76,1041.19 625.09,1071.42"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 584.3373 970.3965)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 604.0489 978.6336)" class="mustard__fill futura-book fs__14px">57</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 572.5656 990.5974)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 547.1335 929.5883)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 636.4391 1053.9041)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[286]" ng-click="selva.showPropertyData(29, '58')">
					<polygon id="C_L58" class="property pb-sprite-2" points="476.78,962.04 523.54,932.91 625.09,1071.42 578.5,1101.43"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 537.4024 999.7537)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 557.1149 1007.9949)" class="mustard__fill futura-book fs__14px">58</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 525.6266 1019.9611)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8189 -0.5824 0.5793 0.8151 500.1991 958.9489)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 589.5053 1083.2635)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[287]" ng-click="selva.showPropertyData(29, '59')">
					<polygon id="C_L59" class="property pb-sprite-1" points="430.55,991.78 476.78,962.04 578.5,1101.43 531.37,1130.72"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 488.7096 1030.9712)" class="white__fill futura-light fs__11px">200.0 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 508.4199 1039.2091)" class="mustard__fill futura-book fs__14px">59</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 476.937 1051.1732)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 452.3991 988.6127)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 540.8126 1114.4768)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[288]" ng-click="selva.showPropertyData(29, '60')">
					<polygon id="C_L60" class="property pb-sprite-2" points="383.24,1020.26 430.55,991.78 531.37,1130.72 484.96,1160.35"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 442.8532 1058.9193)" class="white__fill futura-light fs__11px">200.00 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 462.5636 1067.1572)" class="mustard__fill futura-book fs__14px">60</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 431.0782 1079.1211)" class="white__fill futura-light fs__11px">25.00</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 406.5393 1016.559)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 494.9581 1142.4242)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[289]" ng-click="selva.showPropertyData(29, '61')">
					<polygon id="C_L61" class="property pb-sprite-1" points="335.56,1048.3 383.24,1020.26 484.96,1160.35 437.65,1188.32"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 395.6535 1086.8096)" class="white__fill futura-light fs__11px">200.85 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 415.3672 1095.0499)" class="mustard__fill futura-book fs__14px">61</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 383.8796 1107.0125)" class="white__fill futura-light fs__11px">25.01</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 359.3413 1044.4531)" class="white__fill futura-light fs__11px">8.03</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 447.7604 1170.3182)" class="white__fill futura-light fs__11px">8.03</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[290]" ng-click="selva.showPropertyData(29, '62')">
					<polygon id="C_L62" class="property pb-sprite-2" points="287.52,1076.06 335.56,1048.3 437.65,1188.32 389.61,1215.74"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 347.9191 1116.3558)" class="white__fill futura-light fs__11px">201.08 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 367.6295 1124.5939)" class="mustard__fill futura-book fs__14px">62</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 336.1428 1136.5574)" class="white__fill futura-light fs__11px">25.04</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 311.6054 1073.9984)" class="white__fill futura-light fs__11px">8.03</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 400.0236 1199.8646)" class="white__fill futura-light fs__11px">8.03</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[291]" ng-click="selva.showPropertyData(29, '63')">
					<polygon id="C_L63" class="property pb-sprite-1" points="238.93,1103.3 287.52,1076.06 389.61,1215.74 340.66,1243.91"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 299.1484 1144.2772)" class="white__fill futura-light fs__11px">201.32 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 318.8591 1152.5149)" class="mustard__fill futura-book fs__14px">63</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 287.3708 1164.4792)" class="white__fill futura-light fs__11px">25.04</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 262.8347 1101.9176)" class="white__fill futura-light fs__11px">8.04</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 351.2562 1227.7875)" class="white__fill futura-light fs__11px">8.04</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[292]" ng-click="selva.showPropertyData(29, '64')">
					<polygon id="C_L64" class="property pb-sprite-2" points="190.71,1130 238.93,1103.3 340.66,1243.91 292.25,1271.43"/>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 251.8716 1173.1155)" class="white__fill futura-light fs__11px">201.60 m2</text>
					<text transform="matrix(0.577 0.8108 -0.8147 0.5799 271.5818 1181.3534)" class="mustard__fill futura-book fs__14px">64</text>
					<text transform="matrix(0.5636 0.8202 -0.824 0.5666 240.0971 1193.3135)" class="white__fill futura-light fs__11px">25.08</text>
					<text transform="matrix(0.8797 -0.4857 0.4831 0.8756 215.558 1130.7487)" class="white__fill futura-light fs__11px">8.04</text>
					<text transform="matrix(0.8668 -0.5085 0.5057 0.8627 303.9772 1256.618)" class="white__fill futura-light fs__11px">8.04</text>
					<g>
						<polygon class="st9" points="244.8,1143.66 236.93,1152.12 244.8,1160.63"/>
						<polygon class="stx10" points="244.9,1143.66 244.9,1160.63 252.77,1152.17"/>
					</g>
				</g>
				<g>
					<line class="stx12" x1="1356.82" y1="329.65" x2="1186.86" y2="303.63"/>
					<line class="stx12" x1="1338.99" y1="409.54" x2="1175.39" y2="357.32"/>
					<line class="stx12" x1="1308.6" y1="485.61" x2="1155.4" y2="408.84"/>
					<line class="stx12" x1="1266.11" y1="556.58" x2="1127.62" y2="456.23"/>
					<line class="stx12" x1="1214.15" y1="620.23" x2="1092.41" y2="498.44"/>
					<line class="stx12" x1="1153.37" y1="674.33" x2="1052.01" y2="535.84"/>
					<line class="stx12" x1="1111.52" y1="710.51" x2="1010.25" y2="571.05"/>
					<line class="stx12" x1="1068.93" y1="745.84" x2="967.39" y2="606"/>
					<line class="stx12" x1="1026.53" y1="781.35" x2="924.62" y2="641.75"/>
					<line class="stx12" x1="983.77" y1="814.25" x2="881.86" y2="675.74"/>
					<line class="stx12" x1="939.37" y1="848.84" x2="838.55" y2="710.51"/>
					<line class="stx12" x1="895.33" y1="882.14" x2="794.51" y2="743.47"/>
					<line class="stx12" x1="851.83" y1="914.98" x2="749.93" y2="776.05"/>
					<line class="stx12" x1="806.52" y1="947.7" x2="705.52" y2="808.26"/>
					<line class="stx12" x1="762.3" y1="979.14" x2="660.76" y2="840.59"/>
					<line class="stx12" x1="717.17" y1="1010.62" x2="615.08" y2="871.35"/>
					<line class="stx12" x1="670.76" y1="1041.19" x2="569.58" y2="902.04"/>
					<line class="stx12" x1="625.09" y1="1071.42" x2="523.54" y2="932.91"/>
					<line class="stx12" x1="578.5" y1="1101.43" x2="476.78" y2="962.04"/>
					<line class="stx12" x1="531.37" y1="1130.72" x2="430.55" y2="991.78"/>
					<line class="stx12" x1="484.96" y1="1160.35" x2="383.24" y2="1020.26"/>
					<line class="stx12" x1="437.65" y1="1188.32" x2="335.56" y2="1048.3"/>
					<line class="stx12" x1="389.61" y1="1215.74" x2="287.52" y2="1076.06"/>
					<line class="stx12" x1="340.66" y1="1243.91" x2="238.93" y2="1103.3"/>
					<line class="stx12" x1="190.71" y1="1130" x2="292.25" y2="1270.71"/>
				</g>
			</g>
			<g id="isla_D_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[293]" ng-click="selva.showPropertyData(29, '65')">
					<rect id="D_L65" x="203.15" y="906.39" class="property pb-sprite-1" width="137.23" height="64.79"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0727 946.1581)" class="white__fill futura-light fs__11px">186.60 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3464 935.0936)" class="mustard__fill futura-book fs__14px">65</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2642 918.8677)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2664 967.1119)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5131 947.3605)" class="white__fill futura-light fs__11px">9.33</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 335.4083 947.3634)" class="white__fill futura-light fs__11px">9.33</text>
					<g>
						<polygon class="st9" points="232.77,932.5 224.9,940.96 232.77,949.47"/>
						<polygon class="stx10" points="232.87,932.5 232.87,949.47 240.74,941.01"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[294]" ng-click="selva.showPropertyData(29, '66')">
					<rect id="D_L66" x="203.15" y="842.42" class="property pb-sprite-2" width="137.23" height="63.97"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0732 879.9424)" class="white__fill futura-light fs__11px">186.60 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3468 868.8779)" class="mustard__fill futura-book fs__14px">66</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2681 854.9622)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5133 881.1366)" class="white__fill futura-light fs__11px">9.33</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 335.4085 881.1376)" class="white__fill futura-light fs__11px">9.33</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[295]" ng-click="selva.showPropertyData(29, '67')">
					<polygon id="D_L67" class="property pb-sprite-1" points="203.15,842.42 340.38,842.42 340.38,787.29 203.15,787.59"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0754 821.9598)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3492 810.8914)" class="mustard__fill futura-book fs__14px">67</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2696 796.9799)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5116 823.1687)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[296]" ng-click="selva.showPropertyData(29, '68')">
					<polygon id="D_L68" class="property pb-sprite-2" points="203.15,787.59 340.38,787.29 340.38,731.96 203.15,731.96"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0737 765.3053)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3474 754.2408)" class="mustard__fill futura-book fs__14px">68</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2684 740.3271)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5106 766.5056)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[297]" ng-click="selva.showPropertyData(29, '69')">
					<rect id="D_L69" x="203.15" y="677.23" class="property pb-sprite-1" width="137.23" height="54.72"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0735 710.8356)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3471 699.7711)" class="mustard__fill futura-book fs__14px">69</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2703 685.853)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5118 712.0446)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[298]" ng-click="selva.showPropertyData(29, '70')">
					<rect id="D_L70" x="203.15" y="622.37" class="property pb-sprite-2" width="137.23" height="54.87"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0749 656.3913)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3486 645.3268)" class="mustard__fill futura-book fs__14px">70</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.269 631.412)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.509 657.605)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[299]" ng-click="selva.showPropertyData(29, '71')">
					<rect id="D_L71" x="203.15" y="566.82" class="property pb-sprite-1" width="137.23" height="55.55"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0728 601.2594)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3464 590.1949)" class="mustard__fill futura-book fs__14px">71</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2698 576.2823)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5146 602.4683)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[300]" ng-click="selva.showPropertyData(29, '72')">
					<rect id="D_L72" x="203.15" y="512.22" class="property pb-sprite-2" width="137.23" height="54.59"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.0741 545.8326)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.3478 534.7681)" class="mustard__fill futura-book fs__14px">72</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.2674 520.8537)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.5118 547.0307)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[301]" ng-click="selva.showPropertyData(29, '73')">
					<rect id="D_L73" x="203.15" y="456.95" class="property pb-sprite-1" width="137.23" height="55.28"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.5154 491.8584)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.789 480.7939)" class="mustard__fill futura-book fs__14px">73</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.7108 466.8719)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.9521 493.0568)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[302]" ng-click="selva.showPropertyData(29, '74')">
					<rect id="D_L74" x="203.15" y="401.95" class="property pb-sprite-2" width="137.23" height="55"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.5141 435.8222)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.7878 424.7557)" class="mustard__fill futura-book fs__14px">74</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.7097 410.8365)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.9532 437.0235)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[303]" ng-click="selva.showPropertyData(29, '75')">
					<polygon id="D_L75" class="property pb-sprite-1" points="203.15,401.95 340.38,401.95 340.38,347.08 203.22,347.08"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.5134 380.5731)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.787 369.5077)" class="mustard__fill futura-book fs__14px">75</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.7062 355.5876)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.9531 381.7842)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[304]" ng-click="selva.showPropertyData(29, '76')">
					<polygon id="D_L76" class="property pb-sprite-2" points="203.22,347.08 340.38,347.08 340.38,291.87 203.15,291.87"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.2043 327.0294)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.4804 315.965)" class="mustard__fill futura-book fs__14px">76</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.3994 302.0523)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.6477 328.2462)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[305]" ng-click="selva.showPropertyData(29, '77')">
					<polygon id="D_L77" class="property pb-sprite-1" points="203.15,236.87 340.38,236.94 340.38,291.87 203.15,291.87"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 252.2059 270.4678)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 270.4796 259.4014)" class="mustard__fill futura-book fs__14px">77</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 261.3996 245.4875)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 212.6481 271.6679)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="231.64,254.74 223.77,263.2 231.64,271.71"/>
						<polygon class="stx10" points="231.74,254.74 231.74,271.71 239.61,263.25"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[306]" ng-click="selva.showPropertyData(29, '78')">
					<polygon id="D_L78" class="property pb-sprite-1" points="340.38,897.38 459.53,897.38 495.29,874.41 495.29,842.42 340.38,842.42"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9503 866.6766)" class="white__fill futura-light fs__11px">4.59</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7051 876.5731)" class="white__fill futura-light fs__11px">171.05 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9787 865.5086)" class="mustard__fill futura-book fs__14px">78</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.9008 851.5824)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 390.6577 893.8706)" class="white__fill futura-light fs__11px">17.22</text>
					<text transform="matrix(0.8354 -0.5407 0.5436 0.8394 466.8374 890.1179)" class="white__fill futura-light fs__11px">6.28</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.741 877.7704)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="458.1,857.69 450.23,866.14 458.1,874.65"/>
						<polygon class="stx10" points="458.2,857.69 458.2,874.65 466.07,866.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[307]" ng-click="selva.showPropertyData(29, '79')">
					<path id="D_L79" class="property pb-sprite-2" d="M340.38,787.29c1.36,0.08,154.91,0,154.91,0v55.13H340.38V787.29z"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9517 823.5574)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7007 821.9598)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9763 810.8953)" class="mustard__fill futura-book fs__14px">79</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.8987 796.9773)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.7435 823.1727)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[308]" ng-click="selva.showPropertyData(29, '80')">
					<polygon id="D_L80" class="property pb-sprite-1" points="340.38,731.96 495.29,731.64 495.29,787.29 340.38,787.29"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9489 766.8845)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7029 765.3083)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9765 754.2399)" class="mustard__fill futura-book fs__14px">80</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.8955 740.3254)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.744 766.5018)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[309]" ng-click="selva.showPropertyData(29, '81')">
					<path id="D_L81" class="property pb-sprite-2" d="M340.38,677.23c0.68-0.14,154.91,0,154.91,0v54.4l-154.91,0.32V677.23z"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9512 712.4236)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7028 710.8288)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9803 699.7643)" class="mustard__fill futura-book fs__14px">81</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.8994 685.8495)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.7398 712.0427)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[310]" ng-click="selva.showPropertyData(29, '82')">
					<rect id="D_L82" x="340.38" y="622.37" class="property pb-sprite-1" width="154.91" height="54.87"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9501 657.9811)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7041 656.3903)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9778 645.3259)" class="mustard__fill futura-book fs__14px">82</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.8959 631.4163)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.7429 657.6013)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[311]" ng-click="selva.showPropertyData(29, '83')">
					<rect id="D_L83" x="340.38" y="566.82" class="property pb-sprite-2" width="154.91" height="55.55"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9492 602.8453)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.702 601.2594)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.9756 590.1949)" class="mustard__fill futura-book fs__14px">83</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.899 576.2779)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.7422 602.4655)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[312]" ng-click="selva.showPropertyData(29, '84')">
					<rect id="D_L84" x="340.38" y="512.22" class="property pb-sprite-1" width="154.91" height="54.59"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 489.9506 547.4186)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.7013 545.8326)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 413.975 534.7681)" class="mustard__fill futura-book fs__14px">84</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 404.9001 520.86)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.7398 547.0347)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[313]" ng-click="selva.showPropertyData(29, '85')">
					<rect id="D_L85" x="340.38" y="456.95" class="property pb-sprite-2" width="154.91" height="55.28"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 490.3924 493.4357)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 396.1425 491.8604)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 414.4162 480.7939)" class="mustard__fill futura-book fs__14px">85</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 405.3436 466.8753)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 353.1801 493.054)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[314]" ng-click="selva.showPropertyData(29, '86')">
					<rect id="D_L86" x="340.38" y="401.95" class="property pb-sprite-1" width="154.91" height="55"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 490.3889 437.4112)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 396.1433 435.8222)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 414.417 424.7577)" class="mustard__fill futura-book fs__14px">86</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 405.3388 410.834)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 353.1812 437.0266)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[315]" ng-click="selva.showPropertyData(29, '87')">
					<polygon id="D_L87" class="property pb-sprite-2" points="340.38,347.08 495.29,346.53 495.29,401.95 340.38,401.95"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 490.394 382.1631)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 396.1425 380.5721)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 414.4201 369.5077)" class="mustard__fill futura-book fs__14px">87</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 405.339 355.591)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 353.1811 381.7872)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[316]" ng-click="selva.showPropertyData(29, '88')">
					<polygon id="D_L88" class="property pb-sprite-1" points="340.38,291.87 495.29,291.87 495.29,346.53 340.38,347.08"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 490.0825 328.6295)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.8374 327.0295)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 414.1111 315.9651)" class="mustard__fill futura-book fs__14px">88</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 405.0265 302.0508)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.8757 328.2423)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[317]" ng-click="selva.showPropertyData(29, '89')">
					<polygon id="D_L89" class="property pb-sprite-2" points="340.38,236.94 495.29,236.87 495.29,291.87 340.38,291.87"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 490.0829 272.0523)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 395.8365 270.4698)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 414.1102 259.4034)" class="mustard__fill futura-book fs__14px">89</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 405.0325 245.49)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 352.8756 271.6641)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="464.08,254.74 456.21,263.2 464.08,271.71"/>
						<polygon class="stx10" points="464.18,254.74 464.18,271.71 472.05,263.25"/>
					</g>
				</g>
				<g>
					<line class="stx12" x1="203.15" y1="291.87" x2="495.29" y2="291.87"/>
					<path class="stx12" d="M203.22,347.08c5.87,0,292.08-0.55,292.08-0.55"/>
					<line class="stx12" x1="203.15" y1="401.95" x2="495.29" y2="401.95"/>
					<line class="stx12" x1="203.15" y1="456.95" x2="495.29" y2="456.95"/>
					<path class="stx12" d="M203.15,512.22c5.94,0,292.14,0,292.14,0"/>
					<line class="stx12" x1="203.15" y1="566.82" x2="495.29" y2="566.82"/>
					<line class="stx12" x1="203.15" y1="622.37" x2="495.29" y2="622.37"/>
					<line class="stx12" x1="203.15" y1="677.23" x2="495.29" y2="677.23"/>
					<path class="stx12" d="M203.15,731.96c5.94,0,292.14-0.32,292.14-0.32"/>
					<line class="stx12" x1="203.15" y1="787.59" x2="495.29" y2="787.29"/>
					<line class="stx12" x1="203.15" y1="842.42" x2="495.29" y2="842.42"/>
					<line class="stx12" x1="203.15" y1="906.39" x2="340.38" y2="906.39"/>
					<polyline class="stx12" points="203.15,971.18 340.38,971.18 340.38,236.94"/>
					<line class="stx12" x1="340.66" y1="897.37" x2="459.53" y2="897.38"/>
				</g>
			</g>
			<g id="isla_E_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[318]" ng-click="selva.showPropertyData(29, '90')">
					<path id="E_L90" class="property pb-sprite-1" d="M559.28,731.96c0.56,0.42,137.94,0,137.94,0V677.1H559.28V731.96z"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5482 713.6038)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6787 702.7062)" class="mustard__fill futura-book fs__14px">90</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3439 688.5709)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.4441 728.2734)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0975 714.8935)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 691.475 714.8926)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="590.1,697.98 582.22,706.43 590.1,714.94"/>
						<polygon class="stx10" points="590.19,697.98 590.19,714.94 598.07,706.49"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[319]" ng-click="selva.showPropertyData(29, '91')">
					<rect id="E_L91" x="559.28" y="622.23" class="property pb-sprite-2" width="137.94" height="54.87"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.547 656.7047)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6805 645.7978)" class="mustard__fill futura-book fs__14px">91</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3452 631.6543)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0994 657.9734)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 691.4769 657.9736)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[320]" ng-click="selva.showPropertyData(29, '92')">
					<rect id="E_L92" x="559.28" y="567.09" class="property pb-sprite-1" width="137.94" height="55.14"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5499 603.1203)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6771 592.2197)" class="mustard__fill futura-book fs__14px">92</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.343 578.0747)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0959 604.3972)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[321]" ng-click="selva.showPropertyData(29, '93')">
					<rect id="E_L93" x="559.28" y="512.09" class="property pb-sprite-2" width="137.94" height="55"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5485 548.1344)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6795 537.2383)" class="mustard__fill futura-book fs__14px">93</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3406 523.0923)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0963 549.4128)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[322]" ng-click="selva.showPropertyData(29, '94')">
					<rect id="E_L94" x="559.28" y="456.95" class="property pb-sprite-1" width="137.94" height="55.14"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5474 492.0508)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6783 481.1571)" class="mustard__fill futura-book fs__14px">94</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3457 467.0218)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0977 493.3356)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[323]" ng-click="selva.showPropertyData(29, '95')">
					<rect id="E_L95" x="559.28" y="401.95" class="property pb-sprite-2" width="137.94" height="55"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5483 437.7534)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6805 426.8554)" class="mustard__fill futura-book fs__14px">95</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3425 412.7212)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.098 439.0299)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[324]" ng-click="selva.showPropertyData(29, '96')">
					<rect id="E_L96" x="559.28" y="346.81" class="property pb-sprite-1" width="137.94" height="55.14"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.5464 382.8047)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6796 371.9071)" class="mustard__fill futura-book fs__14px">96</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3432 357.7701)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0986 384.0826)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[325]" ng-click="selva.showPropertyData(29, '97')">
					<polygon id="E_L97" class="property pb-sprite-2" points="559.28,346.81 697.23,346.81 697.19,291.88 559.28,291.88"/>
					<text transform="matrix(0.9951 9.443560e-03 -9.349965e-03 1 609.548 328.7417)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 627.6771 317.8417)" class="mustard__fill futura-book fs__14px">97</text>
					<text transform="matrix(0.9948 0.0258 -0.0256 0.9997 618.3419 303.6982)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0975 330.0171)" class="white__fill futura-light fs__11px">8.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[326]" ng-click="selva.showPropertyData(29, '98')">
					<polygon id="E_L98" class="property pb-sprite-1" points="559.28,236.77 697.23,236.84 697.19,291.88 559.28,291.88"/>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 610.6557 270.4697)" class="white__fill futura-light fs__11px">160.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 628.9294 259.4013)" class="mustard__fill futura-book fs__14px">98</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 619.8551 245.4925)" class="white__fill futura-light fs__11px">20.00</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 571.0985 271.6703)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="590.1,254.74 582.22,263.2 590.1,271.71"/>
						<polygon class="stx10" points="590.19,254.74 590.19,271.71 598.07,263.25"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[327]" ng-click="selva.showPropertyData(29, '99')">
					<path id="E_L99" class="property pb-sprite-2" d="M697.23,622.23c1.01,0.14,149.1,0,149.1,0l5.6-4.75v-50.39h-154.7V622.23z"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5319 602.8444)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2881 601.2551)" class="white__fill futura-light fs__11px">179.71 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5618 590.1887)" class="mustard__fill futura-book fs__14px">99</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4874 576.2808)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4839 620.1392)" class="white__fill futura-light fs__11px">21.65</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3215 602.4676)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,585.54 814.66,593.99 822.53,602.5"/>
						<polygon class="stx10" points="822.63,585.54 822.63,602.5 830.5,594.05"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[328]" ng-click="selva.showPropertyData(29, '100')">
					<rect id="E_L100" x="697.23" y="512.09" class="property pb-sprite-1" width="154.7" height="55"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5316 549.1119)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2875 547.5198)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5612 536.4544)" class="mustard__fill futura-book fs__14px">100</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4844 522.5383)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3224 548.7283)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,531.8 814.66,540.26 822.53,548.77"/>
						<polygon class="stx10" points="822.63,531.8 822.63,548.77 830.5,540.31"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[329]" ng-click="selva.showPropertyData(29, '101')">
					<rect id="E_L101" x="697.23" y="456.95" class="property pb-sprite-2" width="154.7" height="55.14"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5297 493.0279)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2883 491.4367)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.562 480.3723)" class="mustard__fill futura-book fs__14px">101</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4846 466.459)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3243 492.6491)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,475.72 814.66,484.18 822.53,492.69"/>
						<polygon class="stx10" points="822.63,475.72 822.63,492.69 830.5,484.23"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[330]" ng-click="selva.showPropertyData(29, '102')">
					<rect id="E_L102" x="697.23" y="401.95" class="property pb-sprite-1" width="154.7" height="55"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5328 438.731)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2885 437.136)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5622 426.0715)" class="mustard__fill futura-book fs__14px">102</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4875 412.1599)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3265 438.3454)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,421.43 814.66,429.88 822.53,438.39"/>
						<polygon class="stx10" points="822.63,421.43 822.63,438.39 830.5,429.94"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[331]" ng-click="selva.showPropertyData(29, '103')">
					<rect id="E_L103" x="697.23" y="346.81" class="property pb-sprite-2" width="154.7" height="55.14"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5298 383.7807)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2875 382.1936)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5632 371.1291)" class="mustard__fill futura-book fs__14px">103</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4852 357.2128)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3247 383.4059)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,366.48 814.66,374.93 822.53,383.44"/>
						<polygon class="stx10" points="822.63,366.48 822.63,383.44 830.5,374.99"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[332]" ng-click="selva.showPropertyData(29, '104')">
					<polygon id="E_L104" class="property pb-sprite-1" points="697.19,291.88 851.92,291.88 851.92,346.81 697.23,346.81"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5298 329.7065)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2889 328.1252)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5646 317.0608)" class="mustard__fill futura-book fs__14px">104</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4844 303.1509)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.3237 329.3267)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,312.4 814.66,320.86 822.53,329.37"/>
						<polygon class="stx10" points="822.63,312.4 822.63,329.37 830.5,320.91"/>
					</g>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[333]" ng-click="selva.showPropertyData(29, '105')">
					<polygon id="E_L105" class="property pb-sprite-2" points="697.23,236.84 851.92,236.77 851.92,291.88 697.19,291.88"/>
					<text transform="matrix(9.446146e-04 -1.0049 1 1.250012e-03 848.5313 272.0511)" class="white__fill futura-light fs__11px">8.00</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 754.2869 270.4697)" class="white__fill futura-light fs__11px">180.00 m2</text>
					<text transform="matrix(0.995 0.0119 -0.0118 0.9999 772.5605 259.4053)" class="mustard__fill futura-book fs__14px">105</text>
					<text transform="matrix(0.9947 0.0283 -0.0281 0.9996 763.4822 245.488)" class="white__fill futura-light fs__11px">22.50</text>
					<text transform="matrix(5.878672e-03 -1.0049 1 6.150006e-03 711.327 271.6665)" class="white__fill futura-light fs__11px">8.00</text>
					<g>
						<polygon class="st9" points="822.53,254.74 814.66,263.2 822.53,271.71"/>
						<polygon class="stx10" points="822.63,254.74 822.63,271.71 830.5,263.25"/>
					</g>
				</g>
				<g>
					<line class="stx12" x1="559.28" y1="677.1" x2="697.23" y2="677.1"/>
					<path class="stx12" d="M559.28,622.23c5.75,0,287.04,0,287.04,0"/>
					<line class="stx12" x1="559.28" y1="567.09" x2="851.92" y2="567.09"/>
					<line class="stx12" x1="559.28" y1="512.09" x2="851.92" y2="512.09"/>
					<line class="stx12" x1="559.28" y1="456.95" x2="851.92" y2="456.95"/>
					<line class="stx12" x1="559.28" y1="401.95" x2="851.92" y2="401.95"/>
					<line class="stx12" x1="559.28" y1="346.81" x2="851.92" y2="346.81"/>
					<path class="stx12" d="M559.28,291.88c7.93,0,292.64,0,292.64,0"/>
					<path class="stx12" d="M559.28,731.96h137.94c0,0-0.01-480.56,0-495.12"/>
				</g>
			</g>

		</svg>

    </div>

</body>
</html>