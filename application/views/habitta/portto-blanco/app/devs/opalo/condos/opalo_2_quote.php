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

<body ng-controller="PBBOpaloQuoteCtrl as opalo">

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


	<div class="modal-dialog" ng-class="opalo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="opalo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="opalo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<div class="divider"></div>
				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{opalo.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{opalo.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{opalo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{opalo.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{opalo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					<div class="divider"></div>
					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					<div class="divider"></div>
					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					<div class="divider"></div>
					<div class="divider"></div>
					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{opalo.month}} y paga la primera mensualidad hasta {{opalo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{opalo.month + ' ' + opalo.year}}</p>
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
					<h1 class="center-align">Opalo 2</h1>
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
        <div class="">
        <svg version="1.1" id="CLUSTER__x2F__ETAPA__x2F__CONDO"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 535"
	 style="enable-background:new 0 0 1366 535;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:4.7748px;}
	.st4{fill:#FFBF00;}
	.st5{font-family:'CenturyGothic-Bold';}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#FFCF3F;}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#FFDF7F;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st9{fill:none;stroke:#F4F4F4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st10{font-size:4.7747px;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#3F4F7F;}
	.st12{fill:#001555;}
	.st13{font-size:3.8198px;}
	.st14{fill:#747474;}
	.st15{font-size:3.3423px;}
	.st16{fill:none;stroke:#3F4F7F;stroke-width:2;stroke-miterlimit:10;}
</style>
<image style="overflow:visible;enable-background:new    ;" width="1366" height="535" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/opalo/condos/opalo_2.jpg"  transform="matrix(1.0457 0 0 1.0457 -20.0565 933.7441)">
</image>
<g id="CLUSTER">
	<g id="ISLA_A_1_">
		<g id="A01" ng-class="opalo.inmovablesClassList[105]" ng-click="opalo.showPropertyData(65, '1')">
			<polyline class="property pb-sprite-1" points="88.3,340.1 152.4,318.5 152.4,318.5 161.7,347.1 97.2,367.4 88.3,340.1 88.3,340.1 			"/>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 115.9328 351.471)" class="st1 st2 st3">174.24 m</text>
			<text transform="matrix(0.5554 -0.1772 0.1772 0.5554 134.8027 343.78)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.309 0.9511 -0.9511 0.309 93.5933 348.6862)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.309 0.9511 -0.9511 0.309 149.936 330.3227)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.9478 -0.319 0.319 0.9478 116.2255 335.5848)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9542 -0.299 0.299 0.9542 123.5429 358.2745)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 122.412 344.3136)" class="st4 st5 st3">01</text>
			<g>
				<polyline class="st6" points="151,336 144.2,338.4 146.4,333.8 151,336 				"/>
				<polyline class="st7" points="151,336 148.8,340.6 144.2,338.4 151,336 				"/>
			</g>
		</g>
		<g id="A02" ng-class="opalo.inmovablesClassList[106]" ng-click="opalo.showPropertyData(65, '2')">
			<polyline class="property pb-sprite-2" points="105.5,394.9 97.2,367.4 161.7,347.1 170.5,376 105.5,394.9 			"/>
			<text transform="matrix(0.289 0.9573 -0.9573 0.289 102.2375 376.1255)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.289 0.9573 -0.9573 0.289 158.9455 358.928)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.9603 -0.279 0.279 0.9603 132.0735 386.3592)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 129.2555 369.5312)" class="st4 st5 st3">02</text>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 123.5108 376.3486)" class="st1 st2 st3">174.12 m</text>
			<text transform="matrix(0.5554 -0.1772 0.1772 0.5554 142.3807 368.6576)" class="st1 st2 st3">2</text>
			<line class="st9" x1="97.2" y1="367.4" x2="161.7" y2="347.1"/>
		</g>
		<g id="A03" ng-class="opalo.inmovablesClassList[107]" ng-click="opalo.showPropertyData(65, '3')">
			<polyline class="property pb-sprite-1" points="113.3,422.6 105.5,394.9 170.5,376 178.6,405 113.3,422.6 			"/>
			<text transform="matrix(0.2689 0.9632 -0.9632 0.2689 110.407 403.6789)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2689 0.9632 -0.9632 0.2689 167.471 387.655)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.9655 -0.2605 0.2605 0.9655 139.7627 413.8637)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 139.6027 398.9857)" class="st4 st5 st3">03</text>
			<text transform="matrix(0.9575 -0.2885 0.2885 0.9575 133.8172 406.0021)" class="st1 st2 st3">174.12 m</text>
			<text transform="matrix(0.5582 -0.1682 0.1682 0.5582 152.8098 398.6181)" class="st1 st2 st3">2</text>
			<line class="st9" x1="105.5" y1="394.9" x2="170.5" y2="376"/>
		</g>
		<g id="A04" ng-class="opalo.inmovablesClassList[108]" ng-click="opalo.showPropertyData(65, '4')">
			<polyline class="property pb-sprite-2" points="120.5,450.4 113.3,422.6 178.6,405 186.2,434.2 120.5,450.4 			"/>
			<text transform="matrix(0.2504 0.9681 -0.9681 0.2504 118.0396 431.5182)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2504 0.9681 -0.9681 0.2504 175.4103 416.6691)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.9707 -0.2402 0.2402 0.9707 147.2461 442.1634)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9527 -0.304 0.304 0.9527 147.0988 429.5859)" class="st4 st5 st3">04</text>
			<text transform="matrix(0.9575 -0.2885 0.2885 0.9575 142.1489 436.4263)" class="st1 st2 st3">174.12 m</text>
			<text transform="matrix(0.5582 -0.1682 0.1682 0.5582 161.1415 429.0423)" class="st1 st2 st3">2</text>
			<line class="st9" x1="113.3" y1="422.6" x2="178.6" y2="405"/>
		</g>
		<g id="A05" ng-class="opalo.inmovablesClassList[109]" ng-click="opalo.showPropertyData(65, '5')">
			<polyline class="property pb-sprite-1" points="127.1,478.4 120.5,450.4 186.2,434.2 193.1,463.5 127.1,478.4 			"/>
			<text transform="matrix(0.23 0.9732 -0.9732 0.23 125.0442 459.4223)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.23 0.9732 -0.9732 0.23 182.7135 445.7598)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.9755 -0.2199 0.2199 0.9755 154.1141 471.032)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 154.1771 457.5459)" class="st4 st5 st3">05</text>
			<text transform="matrix(0.9694 -0.2456 0.2456 0.9694 148.3807 464.2921)" class="st1 st2 st3">174.12 m</text>
			<text transform="matrix(0.5651 -0.1432 0.1432 0.5651 167.6832 457.7622)" class="st1 st2 st3">2</text>
			<line class="st9" x1="120.5" y1="450.4" x2="186.2" y2="434.2"/>
		</g>
		<g id="A06" ng-class="opalo.inmovablesClassList[110]" ng-click="opalo.showPropertyData(65, '6')">
			<polyline class="property pb-sprite-2" points="132.9,504.9 127.1,478.4 193.1,463.5 199.1,491.2 132.9,504.9 			"/>
			<text transform="matrix(0.2096 0.9778 -0.9778 0.2096 131.2861 486.6008)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(0.2096 0.9778 -0.9778 0.2096 189.2196 474.0959)"><tspan x="0" y="0" class="st1 st2 st10">8.3</tspan><tspan x="6.6" y="0" class="st1 st2 st10">9</tspan></text>
			<text transform="matrix(0.9796 -0.2011 0.2011 0.9796 159.8108 497.1873)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9796 -0.2011 0.2011 0.9796 159.2149 483.7694)" class="st4 st5 st3">06</text>
			<text transform="matrix(0.9749 -0.2229 0.2229 0.9749 154.5234 489.8235)" class="st1 st2 st3">163.87 m</text>
			<text transform="matrix(0.5683 -0.1299 0.1299 0.5683 173.9732 483.7465)" class="st1 st2 st3">2</text>
			<line class="st9" x1="127.1" y1="478.4" x2="193.1" y2="463.5"/>
		</g>
		<g id="A07" ng-class="opalo.inmovablesClassList[111]" ng-click="opalo.showPropertyData(65, '7')">
			<polyline class="property pb-sprite-1" points="206.8,531.4 138.1,531.4 132.9,504.9 199.1,491.2 203.1,511.3 206.8,531.4 			"/>
			<text transform="matrix(0.1908 0.9816 -0.9816 0.1908 136.8818 513.2016)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1874 0.9823 -0.9823 0.1874 195.9773 506.6601)"><tspan x="0" y="0" class="st1 st2 st3">12.1</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(1 1.749989e-03 -1.749989e-03 1 165.3186 529.7279)" class="st1 st2 st3">20.33</text>
			</g>
			<text transform="matrix(0.9796 -0.2011 0.2011 0.9796 165.3832 511.4878)" class="st4 st5 st3">07</text>
			<g>
				<polyline class="st6" points="196.2,511.1 189.2,512.5 192,508.3 196.2,511.1 				"/>
				<polyline class="st7" points="196.2,511.1 193.4,515.3 189.2,512.5 196.2,511.1 				"/>
			</g>
			<text transform="matrix(0.9749 -0.2229 0.2229 0.9749 160.0568 518.7335)" class="st1 st2 st3">201.00 m</text>
			<text transform="matrix(0.5683 -0.1299 0.1299 0.5683 179.5066 512.6564)" class="st1 st2 st3">2</text>
			<line class="st9" x1="132.9" y1="504.9" x2="199.1" y2="491.2"/>
		</g>
	</g>
	<g id="ISLA_B_1_">
		<g id="B-08" ng-class="opalo.inmovablesClassList[112]" ng-click="opalo.showPropertyData(65, '8')">
			<polyline class="property pb-sprite-2" points="313,357.3 231.8,357.3 231.8,323.5 313,323.5 313,357.3 			"/>
			<g>
				<polyline class="st6" points="245.8,340.9 238.6,340.9 242.2,337.3 245.8,340.9 				"/>
				<polyline class="st7" points="245.8,340.9 242.2,344.5 238.6,340.9 245.8,340.9 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 263.124 344.3916)" class="st1 st2 st3">240.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 283.4257 342.6354)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 267.3842 328.5075)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 268.1656 356.2433)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(-8.189972e-03 -1 1 -8.189972e-03 236.8593 346.4681)" class="st1 st2 st3">10.00</text>
			<text transform="matrix(-8.189972e-03 -1 1 -8.189972e-03 312.2481 346.4678)" class="st1 st2 st3">10.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 271.0916 338.2179)" class="st4 st5 st3">08</text>
		</g>
		<g id="B-09" ng-class="opalo.inmovablesClassList[113]" ng-click="opalo.showPropertyData(65, '9')">
			<polyline class="property pb-sprite-1" points="313,391.2 231.8,391.2 231.8,357.3 313,357.3 313,391.2 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 236.003 380.1299)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 311.9572 380.13)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 263.3879 377.9257)" class="st1 st2 st3">240.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 283.6896 376.1695)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 268.4294 389.7764)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 271.3162 371.7515)" class="st4 st5 st3">09</text>
			<line class="st9" x1="231.8" y1="357.3" x2="313" y2="357.3"/>
		</g>
		<g id="B10" ng-class="opalo.inmovablesClassList[114]" ng-click="opalo.showPropertyData(65, '10')">
			<polyline class="property pb-sprite-2" points="313,425 231.8,425 231.8,391.2 313,391.2 313,425 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 236.0038 413.9463)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 311.9561 413.9484)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 263.3488 412.1957)" class="st1 st2 st3">240.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 283.6505 410.4395)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 267.0333 424.0468)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 269.764 406.0208)" class="st4 st5 st3">10</text>
			<line class="st9" x1="231.8" y1="391.2" x2="313" y2="391.2"/>
		</g>
		<g id="B11" ng-class="opalo.inmovablesClassList[115]" ng-click="opalo.showPropertyData(65, '11')">
			<polyline class="property pb-sprite-1" points="313,458.8 231.8,458.8 231.8,425 313,425 313,458.8 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 236.0018 447.7676)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 311.9565 447.7668)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 261.9921 445.748)" class="st1 st2 st3">240.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 282.2939 443.9918)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 267.0347 457.5977)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 269.248 439.5721)" class="st4 st5 st3">11</text>
			<line class="st9" x1="231.8" y1="425" x2="313" y2="425"/>
		</g>
		<g id="B12" ng-class="opalo.inmovablesClassList[116]" ng-click="opalo.showPropertyData(65, '12')">
			<polyline class="property pb-sprite-2" points="231.8,458.8 313,458.8 313,491.9 313,493.3 313,494.4 231.8,494.4 231.8,493.3 231.8,491.9 
				231.8,458.8 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 236.004 482.4659)"><tspan x="0" y="0" class="st1 st2 st10">10.5</tspan><tspan x="9.2" y="0" class="st1 st2 st10">2</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 311.9568 482.4661)"><tspan x="0" y="0" class="st1 st2 st10">10.5</tspan><tspan x="9.2" y="0" class="st1 st2 st10">2</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 261.991 481.3781)" class="st1 st2 st3">252.48 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 282.2927 479.6219)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 267.0335 493.2288)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 269.2487 475.2032)" class="st4 st5 st3">12</text>
			<line class="st9" x1="231.8" y1="458.8" x2="313" y2="458.8"/>
		</g>
		<g id="B13" ng-class="opalo.inmovablesClassList[117]" ng-click="opalo.showPropertyData(65, '13')">
			<polyline class="property pb-sprite-1" points="238.7,531.4 231.8,494.4 313,494.4 313,531.4 238.7,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 311.9563 518.7669)"><tspan x="0" y="0" class="st1 st2 st10">10.9</tspan><tspan x="9.2" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(0.1822 0.9833 -0.9833 0.1822 235.0202 506.8307)"><tspan x="0" y="0" class="st1 st2 st3">11.1</tspan><tspan x="9.2" y="0" class="st1 st2 st3">4</tspan></text>
			<g>
				<polyline class="st6" points="249.8,513.4 242.6,513.4 246.2,509.8 249.8,513.4 				"/>
				<polyline class="st7" points="249.8,513.4 246.2,517 242.6,513.4 249.8,513.4 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 265.6309 518.7119)" class="st1 st2 st3">251.33 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 285.9326 516.9557)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 270.6729 529.666)" class="st1 st2 st3">21.96</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 272.887 512.5372)" class="st4 st5 st3">13</text>
			<line class="st9" x1="231.8" y1="494.4" x2="313" y2="494.4"/>
		</g>
		<g id="B14" ng-class="opalo.inmovablesClassList[118]" ng-click="opalo.showPropertyData(65, '14')">
			<polyline class="property pb-sprite-1" points="380.6,338.6 380.6,369.1 313,369.1 313,338.6 380.6,338.6 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.9645 358.4101)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.5885 358.4064)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<g>
				<polyline class="st6" points="373.4,353.8 366.2,353.8 369.8,350.3 373.4,353.8 				"/>
				<polyline class="st7" points="373.4,353.8 369.8,357.4 366.2,353.8 373.4,353.8 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 335.9051 357.4287)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.2068 355.6726)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 340.1667 342.7869)" class="st1 st2 st3">24.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 340.9479 366.9356)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 343.8724 351.4699)" class="st4 st5 st3">14</text>
		</g>
		<g id="B15" ng-class="opalo.inmovablesClassList[119]" ng-click="opalo.showPropertyData(65, '15')">
			<polyline class="property pb-sprite-2" points="380.6,369.1 380.6,399.5 313,399.5 313,369.1 380.6,369.1 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.9626 388.8427)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.5894 388.843)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 336.1708 387.9627)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.4725 386.2066)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 341.2137 397.4696)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 344.1384 382.0033)" class="st4 st5 st3">15</text>
			<line class="st9" x1="313" y1="369.1" x2="380.6" y2="369.1"/>
		</g>
		<g id="B16" ng-class="opalo.inmovablesClassList[120]" ng-click="opalo.showPropertyData(65, '16')">
			<polyline class="property pb-sprite-1" points="380.6,399.5 380.6,429.9 313,429.9 313,399.5 380.6,399.5 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.9615 419.2812)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.5884 419.2795)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 335.9055 418.8917)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.2072 417.1356)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 340.9474 428.3976)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 343.8737 412.9324)" class="st4 st5 st3">16</text>
			<line class="st9" x1="313" y1="399.5" x2="380.6" y2="399.5"/>
		</g>
		<g id="B17" ng-class="opalo.inmovablesClassList[121]" ng-click="opalo.showPropertyData(65, '17')">
			<polyline class="property pb-sprite-2" points="380.6,429.9 380.6,463.8 313,463.8 313,429.9 380.6,429.9 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.9621 452.7296)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.587 452.7278)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 336.1701 450.834)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.4718 449.0778)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 341.2124 462.1847)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 344.1381 444.8739)" class="st4 st5 st3">17</text>
			<line class="st9" x1="313" y1="429.9" x2="380.6" y2="429.9"/>
		</g>
		<g id="B18" ng-class="opalo.inmovablesClassList[122]" ng-click="opalo.showPropertyData(65, '18')">
			<polyline class="property pb-sprite-1" points="380.6,463.8 380.6,497.6 313,497.6 313,463.8 380.6,463.8 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.961 486.548)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.5864 487.3802)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 336.1702 484.9572)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.472 483.201)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 341.2136 496.3069)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 344.1381 478.9963)" class="st4 st5 st3">18</text>
			<line class="st9" x1="313" y1="463.8" x2="380.6" y2="463.8"/>
		</g>
		<g id="B19" ng-class="opalo.inmovablesClassList[123]" ng-click="opalo.showPropertyData(65, '19')">
			<polyline class="property pb-sprite-2" points="313,497.6 380.6,497.6 380.6,531.4 313,531.4 313,497.6 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 379.9609 520.3683)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 317.5858 520.3676)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<polyline class="st6" points="372.9,514.1 365.8,514.1 369.4,510.6 372.9,514.1 			"/>
			<polyline class="st7" points="372.9,514.1 369.4,517.7 365.8,514.1 372.9,514.1 			"/>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 336.1704 519.3207)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 356.4722 517.5645)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 341.2124 529.6664)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 344.138 513.3599)" class="st4 st5 st3">19</text>
			<line class="st9" x1="313" y1="497.6" x2="380.6" y2="497.6"/>
			<line class="st9" x1="313" y1="323.5" x2="313" y2="531.4"/>
		</g>
	</g>
	<g id="ISLA_C_1_">
		<g id="C20" ng-class="opalo.inmovablesClassList[124]" ng-click="opalo.showPropertyData(65, '20')">
			<polyline class="property pb-sprite-2" points="479.7,360.8 479.7,394.6 412.1,394.6 412.1,360.8 479.7,360.8 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 416.4006 383.553)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 478.6243 383.5544)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 435.4155 384.1039)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 455.7172 382.3477)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 440.4583 393.6118)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 440.4585 365.3725)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 443.3816 378.1422)" class="st4 st5 st3">20</text>
			<g>
				<polyline class="st6" points="427.1,378.1 419.9,378.1 423.5,374.5 427.1,378.1 				"/>
				<polyline class="st7" points="427.1,378.1 423.5,381.7 419.9,378.1 427.1,378.1 				"/>
			</g>
		</g>
		<g id="C21" ng-class="opalo.inmovablesClassList[125]" ng-click="opalo.showPropertyData(65, '21')">
			<polyline class="property pb-sprite-1" points="479.7,394.6 479.7,428.4 412.1,428.4 412.1,394.6 479.7,394.6 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 416.4014 417.3724)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 478.6232 417.3709)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 435.4153 417.5943)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 455.717 415.8381)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 440.4582 427.1012)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 443.3819 411.6337)" class="st4 st5 st3">21</text>
			<line class="st9" x1="412.1" y1="394.6" x2="479.7" y2="394.6"/>
		</g>
		<g id="C22" ng-class="opalo.inmovablesClassList[126]" ng-click="opalo.showPropertyData(65, '22')">
			<polyline class="property pb-sprite-2" points="479.7,428.4 479.7,462.2 412.1,462.2 412.1,428.4 479.7,428.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 416.3994 451.1917)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 478.6221 451.1893)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 435.4145 449.443)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 455.7162 447.6869)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 440.4567 461.1346)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 443.3822 443.4807)" class="st4 st5 st3">22</text>
			<line class="st9" x1="412.1" y1="428.4" x2="479.7" y2="428.4"/>
		</g>
		<g id="C23" ng-class="opalo.inmovablesClassList[127]" ng-click="opalo.showPropertyData(65, '23')">
			<polyline class="property pb-sprite-1" points="479.7,462.2 479.7,496 412.1,496 412.1,462.2 479.7,462.2 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 416.4003 485.0102)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 478.6225 485.0087)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 434.9106 483.3125)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 455.2123 481.5564)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 439.9528 495.0041)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 442.8773 477.3512)" class="st4 st5 st3">23</text>
			<line class="st9" x1="412.1" y1="462.2" x2="479.7" y2="462.2"/>
		</g>
		<g id="C24" ng-class="opalo.inmovablesClassList[128]" ng-click="opalo.showPropertyData(65, '24')">
			<polyline class="property pb-sprite-2" points="412.1,531.4 412.1,496 479.7,496 479.7,531.4 412.1,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 416.4008 519.6)"><tspan x="0" y="0" class="st1 st2 st10">10.4</tspan><tspan x="9.2" y="0" class="st1 st2 st10">6</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 478.622 519.5986)"><tspan x="0" y="0" class="st1 st2 st10">10.4</tspan><tspan x="9.2" y="0" class="st1 st2 st10">6</tspan></text>
			<g>
				<polyline class="st6" points="428.3,514.2 421.1,514.2 424.7,510.7 428.3,514.2 				"/>
				<polyline class="st7" points="428.3,514.2 424.7,517.8 421.1,514.2 428.3,514.2 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 434.9096 519.3196)" class="st1 st2 st3">209.20 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 455.2113 517.5634)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 439.9535 529.6653)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 442.8781 513.3593)" class="st4 st5 st3">24</text>
			<line class="st9" x1="412.1" y1="496" x2="479.7" y2="496"/>
		</g>
		<g id="C25" ng-class="opalo.inmovablesClassList[129]" ng-click="opalo.showPropertyData(65, '25')">
			<polyline class="property pb-sprite-1" points="479.7,531.4 479.7,497.6 547.4,497.6 547.4,531.4 479.7,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 546.4864 519.0699)"><tspan x="0" y="0" class="st1 st2 st10">9.9</tspan><tspan x="6.6" y="0" class="st1 st2 st10">9</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 484.0151 519.0719)"><tspan x="0" y="0" class="st1 st2 st10">9.9</tspan><tspan x="6.6" y="0" class="st1 st2 st10">9</tspan></text>
			<g>
				<polyline class="st6" points="539.4,514 532.2,514 535.8,510.4 539.4,514 				"/>
				<polyline class="st7" points="539.4,514 535.8,517.6 532.2,514 539.4,514 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 502.2296 519.1315)" class="st1 st2 st3">199.80 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 522.5314 517.3754)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2721 529.6658)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 510.1963 513.1708)" class="st4 st5 st3">25</text>
		</g>
		<g id="C26" ng-class="opalo.inmovablesClassList[130]" ng-click="opalo.showPropertyData(65, '26')">
			<polyline class="property pb-sprite-2" points="547.4,467.2 547.4,497.6 479.7,497.6 479.7,467.2 547.4,467.2 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 546.4874 486.9615)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 484.0151 486.9605)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 502.231 484.6021)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 522.5327 482.8459)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2722 496.2936)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 510.1976 478.6403)" class="st4 st5 st3">26</text>
			<line class="st9" x1="479.7" y1="497.6" x2="547.4" y2="497.6"/>
		</g>
		<g id="C27" ng-class="opalo.inmovablesClassList[131]" ng-click="opalo.showPropertyData(65, '27')">
			<polyline class="property pb-sprite-1" points="547.4,436.8 547.4,467.2 479.7,467.2 479.7,436.8 547.4,436.8 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 546.4865 456.5268)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 484.0137 456.522)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 502.2302 454.6909)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 522.5319 452.9347)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2724 466.3844)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 510.1964 448.7299)" class="st4 st5 st3">27</text>
			<line class="st9" x1="479.7" y1="467.2" x2="547.4" y2="467.2"/>
		</g>
		<g id="C28" ng-class="opalo.inmovablesClassList[132]" ng-click="opalo.showPropertyData(65, '28')">
			<polyline class="property pb-sprite-2" points="547.4,406.3 547.4,436.8 479.7,436.8 479.7,406.3 547.4,406.3 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 546.4885 426.0864)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 484.0137 426.0883)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 502.2299 424.1957)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 522.5317 422.4396)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2731 435.8872)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 510.1967 418.2345)" class="st4 st5 st3">28</text>
			<line class="st9" x1="479.7" y1="436.8" x2="547.4" y2="436.8"/>
		</g>
		<g id="C29" ng-class="opalo.inmovablesClassList[133]" ng-click="opalo.showPropertyData(65, '29')">
			<polyline class="property pb-sprite-1" points="479.7,375.9 547.4,375.9 547.4,406.3 479.7,406.3 479.7,375.9 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 546.4885 395.6518)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 484.0147 395.6518)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<g>
				<polyline class="st6" points="540.6,390.7 533.5,390.7 537,387.1 540.6,390.7 				"/>
				<polyline class="st7" points="540.6,390.7 537,394.2 533.5,390.7 540.6,390.7 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 502.2314 393.8441)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 522.5331 392.088)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2736 405.5356)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 507.2731 380.2574)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 510.1972 387.8827)" class="st4 st5 st3">29</text>
			<line class="st9" x1="479.7" y1="406.3" x2="547.4" y2="406.3"/>
			<line class="st9" x1="479.7" y1="360.8" x2="479.7" y2="531.4"/>
		</g>
	</g>
	<g id="ISLA_D_1_">
		<g id="D30" ng-class="opalo.inmovablesClassList[134]" ng-click="opalo.showPropertyData(65, '30')">
			<polyline class="property pb-sprite-2" points="653.2,433.3 578.8,433.3 578.8,399.5 653.2,399.5 653.2,433.3 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 583.4062 422.3072)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 650.5728 422.3085)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<g>
				<polyline class="st6" points="596.3,417.8 589.2,417.8 592.7,414.2 596.3,417.8 				"/>
				<polyline class="st7" points="596.3,417.8 592.7,421.4 589.2,417.8 596.3,417.8 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 606.3616 420.3564)" class="st1 st2 st3">220.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 626.6634 418.6003)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 610.1436 432.0475)" class="st1 st2 st3">22.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 609.64 404.249)" class="st1 st2 st3">22.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 613.1929 414.2456)" class="st4 st5 st3">30</text>
		</g>
		<g id="D31" ng-class="opalo.inmovablesClassList[135]" ng-click="opalo.showPropertyData(65, '31')">
			<polyline class="property pb-sprite-1" points="653.2,467.2 578.8,467.2 578.8,433.3 653.2,433.3 653.2,467.2 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 583.4052 456.1256)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 650.5698 456.1299)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 606.7162 453.8176)" class="st1 st2 st3">220.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 627.018 452.0614)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 610.4972 465.5096)" class="st1 st2 st3">22.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 613.5476 447.7074)" class="st4 st5 st3">31</text>
			<line class="st9" x1="578.8" y1="433.3" x2="653.2" y2="433.3"/>
		</g>
		<g id="D32" ng-class="opalo.inmovablesClassList[136]" ng-click="opalo.showPropertyData(65, '32')">
			<polyline class="property pb-sprite-2" points="653.2,501 578.8,501 578.8,467.2 653.2,467.2 653.2,501 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 583.4061 489.944)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 650.5717 489.9454)"><tspan x="0" y="0" class="st1 st2 st10">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 606.7159 486.3294)" class="st1 st2 st3">220.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 627.0176 484.5732)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 610.4973 500.213)" class="st1 st2 st3">22.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 613.5463 480.2184)" class="st4 st5 st3">32</text>
			<line class="st9" x1="578.8" y1="467.2" x2="653.2" y2="467.2"/>
		</g>
		<g id="D33" ng-class="opalo.inmovablesClassList[137]" ng-click="opalo.showPropertyData(65, '33')">
			<polyline class="property pb-sprite-1" points="653.2,531.4 578.8,531.4 578.8,501 653.2,501 653.2,467.2 653.2,433.3 653.2,399.5 653.2,399.5 
				653.2,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 583.4058 520.7507)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 650.571 520.7482)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<g>
				<polyline class="st6" points="596.2,515.4 589,515.4 592.6,511.8 596.2,515.4 				"/>
				<polyline class="st7" points="596.2,515.4 592.6,519 589,515.4 596.2,515.4 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 606.2116 518.7145)" class="st1 st2 st3">198.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 626.5134 516.9583)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 609.9929 530.4525)" class="st1 st2 st3">22.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 613.5476 512.536)" class="st4 st5 st3">33</text>
			<line class="st9" x1="578.8" y1="501" x2="653.2" y2="501"/>
		</g>
		<g id="D34" ng-class="opalo.inmovablesClassList[138]" ng-click="opalo.showPropertyData(65, '34')">
			<polyline class="property pb-sprite-2" points="720.8,531.4 653.2,531.4 653.2,502.6 720.8,502.6 720.8,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 719.6844 521.538)"><tspan x="0" y="0" class="st1 st2 st10">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st10">3</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 657.5848 521.5349)"><tspan x="0" y="0" class="st1 st2 st10">8.5</tspan><tspan x="6.6" y="0" class="st1 st2 st10">3</tspan></text>
			<g>
				<polyline class="st6" points="713.9,520.8 706.7,520.8 710.3,517.2 713.9,520.8 				"/>
				<polyline class="st7" points="713.9,520.8 710.3,524.4 706.7,520.8 713.9,520.8 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 677.3129 519.349)" class="st1 st2 st3">170.60 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 697.6147 517.5928)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 681.0948 529.6631)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 684.6484 513.1708)" class="st4 st5 st3">34</text>
		</g>
		<g id="D35" ng-class="opalo.inmovablesClassList[139]" ng-click="opalo.showPropertyData(65, '35')">
			<polyline class="property pb-sprite-1" points="720.8,475.5 720.8,502.6 653.2,502.6 653.2,475.5 720.8,475.5 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 719.686 493.5888)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 657.5858 493.5885)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 677.3144 493.2319)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 697.6161 491.4757)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 681.1987 501.1466)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 684.7519 486.2454)" class="st4 st5 st3">35</text>
			<line class="st9" x1="653.2" y1="502.6" x2="720.8" y2="502.6"/>
		</g>
		<g id="D36" ng-class="opalo.inmovablesClassList[140]" ng-click="opalo.showPropertyData(65, '36')">
			<polyline class="property pb-sprite-2" points="720.8,445.1 720.8,475.5 653.2,475.5 653.2,445.1 720.8,445.1 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 719.686 464.8436)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 657.5878 464.8443)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 677.3644 464.588)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 697.6662 462.8318)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 681.2502 474.6541)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 684.8014 457.6043)" class="st4 st5 st3">36</text>
			<line class="st9" x1="653.2" y1="475.5" x2="720.8" y2="475.5"/>
		</g>
		<g id="D37" ng-class="opalo.inmovablesClassList[141]" ng-click="opalo.showPropertyData(65, '37')">
			<polyline class="property pb-sprite-1" points="720.8,414.6 720.8,445.1 653.2,445.1 653.2,414.6 720.8,414.6 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 719.6836 434.4031)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 657.5859 434.4058)"><tspan x="0" y="0" class="st1 st2 st10">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<g>
				<polyline class="st6" points="714.8,431.8 707.6,431.8 711.2,428.2 714.8,431.8 				"/>
				<polyline class="st7" points="714.8,431.8 711.2,435.4 707.6,431.8 714.8,431.8 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 677.5178 435.3806)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 697.8196 433.6245)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 681.4041 443.2953)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 681.4033 419.4098)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 684.9554 428.3974)" class="st4 st5 st3">37</text>
			<line class="st9" x1="653.2" y1="445.1" x2="720.8" y2="445.1"/>
			<line class="st9" x1="653.2" y1="399.3" x2="653.2" y2="531.4"/>
		</g>
	</g>
	<g id="ISLA_E_1_">
		<g id="E38" ng-class="opalo.inmovablesClassList[142]" ng-click="opalo.showPropertyData(65, '38')">
			<polyline class="property pb-sprite-1" points="752.3,531.4 752.3,502.1 813.2,502.1 813.2,531.4 752.3,531.4 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 811.5712 521.3326)"><tspan x="0" y="0" class="st1 st2 st10">8.6</tspan><tspan x="6.6" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 757.1434 521.3292)"><tspan x="0" y="0" class="st1 st2 st10">8.6</tspan><tspan x="6.6" y="0" class="st1 st2 st10">5</tspan></text>
			<g>
				<polyline class="st6" points="766.7,517.2 759.6,517.2 763.1,513.6 766.7,517.2 				"/>
				<polyline class="st7" points="766.7,517.2 763.1,520.8 759.6,517.2 766.7,517.2 				"/>
			</g>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 773.7984 518.8459)" class="st1 st2 st3">155.70 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 794.1001 517.0897)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 777.58 529.6668)" class="st1 st2 st3">18.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 781.1311 512.6678)" class="st4 st5 st3">38</text>
		</g>
		<g id="E39" ng-class="opalo.inmovablesClassList[143]" ng-click="opalo.showPropertyData(65, '39')">
			<polyline class="property pb-sprite-2" points="752.3,502.1 752.3,472.9 813.2,472.9 813.2,502.1 752.3,502.1 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 811.6146 492.07)"><tspan x="0" y="0" class="st1 st2 st10">8.6</tspan><tspan x="6.6" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 757.1418 492.0664)"><tspan x="0" y="0" class="st1 st2 st10">8.6</tspan><tspan x="6.6" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 772.9572 489.4094)" class="st1 st2 st3">155.70 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 793.2589 487.6532)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 776.7395 501.1474)" class="st1 st2 st3">18.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 780.2906 483.2326)" class="st4 st5 st3">39</text>
			<line class="st9" x1="752.3" y1="502.1" x2="813.2" y2="502.1"/>
		</g>
		<g id="E46" ng-class="opalo.inmovablesClassList[150]" ng-click="opalo.showPropertyData(65, '46')">
			<polyline class="property pb-sprite-1" points="916.5,291.5 897.8,319.4 847.2,285.5 865.9,257.6 916.5,291.5 			"/>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 858.0201 278.2466)"><tspan x="0" y="0" class="st1 st2 st3">9.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 902.3671 307.8401)"><tspan x="0" y="0" class="st1 st2 st3">9.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 868.1032 298.3484)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 883.3113 275.6311)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="870.6,279.7 864.6,275.7 869.6,274.7 870.6,279.7 				"/>
				<polyline class="st7" points="870.6,279.7 865.6,280.7 864.6,275.7 870.6,279.7 				"/>
			</g>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 870.4237 285.5483)" class="st1 st2 st3">178.56 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 888.19 295.5285)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 880.0599 286.1703)" class="st4 st5 st3">46</text>
		</g>
		<g id="E40" ng-class="opalo.inmovablesClassList[144]" ng-click="opalo.showPropertyData(65, '40')">
			<polyline class="property pb-sprite-1" points="752.3,427.3 813.2,445.8 813.2,472.9 752.3,472.9 752.3,427.3 			"/>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 811.6561 463.9069)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 757.1464 455.9854)"><tspan x="0" y="0" class="st1 st2 st10">13.4</tspan><tspan x="9.2" y="0" class="st1 st2 st10">7</tspan></text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 773.0599 459.9134)" class="st1 st2 st3">193.22 m</text>
			<text transform="matrix(0.583 -4.774753e-03 4.774753e-03 0.583 793.3616 458.1573)" class="st1 st2 st3">2</text>
			<text transform="matrix(1 -8.189972e-03 8.189972e-03 1 776.8422 471.6514)" class="st1 st2 st3">18.00</text>
			<text transform="matrix(1 -4.120006e-03 4.120006e-03 1 780.3932 453.7358)" class="st4 st5 st3">40</text>
			<line class="st9" x1="752.3" y1="472.9" x2="813.2" y2="472.9"/>
		</g>
		<g id="E41" ng-class="opalo.inmovablesClassList[145]" ng-click="opalo.showPropertyData(65, '41')">
			<polyline class="property pb-sprite-2" points="752.3,427.3 764.3,409.4 777.6,389.5 828.2,423.3 814.9,443.2 813.2,445.8 752.3,427.3 			"/>
			<text transform="matrix(0.9568 0.2907 -0.2907 0.9568 777.5477 433.1108)"><tspan x="0" y="0" class="st1 st2 st3">18.8</tspan><tspan x="9.2" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 766.5591 416.6949)"><tspan x="0" y="0" class="st1 st2 st3">13.4</tspan><tspan x="9.2" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 815.8978 437.0083)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 781.1677 414.7012)" class="st1 st2 st3">193.21 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 798.934 424.6814)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 790.8046 415.3238)" class="st4 st5 st3">41</text>
			<line class="st9" x1="752.3" y1="427.3" x2="813.2" y2="445.8"/>
		</g>
		<g id="E42" ng-class="opalo.inmovablesClassList[146]" ng-click="opalo.showPropertyData(65, '42')">
			<polyline class="property pb-sprite-1" points="845.2,398.1 828.2,423.3 777.6,389.5 794.6,364.2 845.2,398.1 			"/>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 798.4943 402.3275)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 788.4263 384.0271)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 831.8894 413.1206)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 800.9624 390.1199)" class="st1 st2 st3">162.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 818.7287 400.1)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 810.5968 390.741)" class="st4 st5 st3">42</text>
			<line class="st9" x1="777.6" y1="389.5" x2="828.2" y2="423.3"/>
		</g>
		<g id="E43" ng-class="opalo.inmovablesClassList[147]" ng-click="opalo.showPropertyData(65, '43')">
			<polyline class="property pb-sprite-2" points="862.1,372.8 845.2,398.1 794.6,364.2 811.5,338.9 862.1,372.8 			"/>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 805.3575 358.7325)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 848.8187 387.8288)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 815.4255 377.0364)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 817.6027 363.9291)" class="st1 st2 st3">162.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 835.369 373.9093)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 827.2364 364.5495)" class="st4 st5 st3">43</text>
			<line class="st9" x1="794.6" y1="364.2" x2="845.2" y2="398.1"/>
		</g>
		<g id="E44" ng-class="opalo.inmovablesClassList[148]" ng-click="opalo.showPropertyData(65, '44')">
			<polyline class="property pb-sprite-1" points="879,347.5 862.1,372.8 811.5,338.9 828.4,313.6 879,347.5 			"/>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 822.29 333.4393)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 865.7511 362.5358)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 832.3575 351.744)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="833.3,335.4 827.3,331.4 832.3,330.4 833.3,335.4 				"/>
				<polyline class="st7" points="833.3,335.4 828.3,336.4 827.3,331.4 833.3,335.4 				"/>
			</g>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 832.9825 339.5982)" class="st1 st2 st3">162.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 850.7489 349.5783)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 842.6171 340.2191)" class="st4 st5 st3">44</text>
			<line class="st9" x1="811.5" y1="338.9" x2="862.1" y2="372.8"/>
		</g>
		<g id="E45" ng-class="opalo.inmovablesClassList[149]" ng-click="opalo.showPropertyData(65, '45')">
			<polyline class="property pb-sprite-2" points="897.8,319.4 879,347.5 828.4,313.6 847.2,285.5 897.8,319.4 			"/>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 839.4272 307.8403)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.5563 -0.831 0.831 0.5563 882.8874 336.9348)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 849.2894 326.4518)"><tspan x="0" y="0" class="st1 st2 st3">18.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="850.3,309.9 844.4,305.9 849.3,305 850.3,309.9 				"/>
				<polyline class="st7" points="850.3,309.9 845.4,310.9 844.4,305.9 850.3,309.9 				"/>
			</g>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 851.515 312.3681)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 869.2812 322.3483)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 861.1495 312.989)" class="st4 st5 st3">45</text>
			<line class="st9" x1="828.4" y1="313.6" x2="879" y2="347.5"/>
			<line class="st9" x1="847.2" y1="285.5" x2="897.8" y2="319.4"/>
		</g>
	</g>
	<g id="ISLA_F">
		<g id="F47" ng-class="opalo.inmovablesClassList[151]" ng-click="opalo.showPropertyData(65, '47')">
			<polyline class="property pb-sprite-2" points="994.4,343.6 1009.9,317.5 1079.7,358.9 1064.2,385.1 1061.9,388.8 994.4,343.6 			"/>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1025.2355 361.0748)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1005.0636 337.557)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1066.903 378.3741)"><tspan x="0" y="0" class="st1 st2 st3">10.3</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="1019.4,341.4 1013.3,337.8 1018.2,336.5 1019.4,341.4 				"/>
				<polyline class="st7" points="1019.4,341.4 1014.5,342.7 1013.3,337.8 1019.4,341.4 				"/>
			</g>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1026.7461 347.2061)" class="st1 st2 st3">231.55 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1044.5123 357.1862)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1036.3805 347.8272)" class="st4 st5 st3">47</text>
		</g>
		<g id="F48" ng-class="opalo.inmovablesClassList[152]" ng-click="opalo.showPropertyData(65, '48')">
			<polyline class="property pb-sprite-1" points="1009.9,317.5 1025.5,291.3 1095.3,332.7 1079.7,358.9 1009.9,317.5 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1020.6066 311.388)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1084.2412 349.1876)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1040.6498 333.6115)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1043.052 321.8254)" class="st1 st2 st3">216.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1060.8184 331.8056)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1052.6857 322.446)" class="st4 st5 st3">48</text>
			<line class="st9" x1="1009.9" y1="317.5" x2="1079.7" y2="358.9"/>
			<g>
				<polyline class="st6" points="1032.9,313.2 1026.7,309.6 1031.7,308.3 1032.9,313.2 				"/>
				<polyline class="st7" points="1032.9,313.2 1028,314.5 1026.7,309.6 1032.9,313.2 				"/>
			</g>
		</g>
		<g id="F49" ng-class="opalo.inmovablesClassList[153]" ng-click="opalo.showPropertyData(65, '49')">
			<polyline class="property pb-sprite-2" points="1025.5,291.3 1041,265.1 1110.8,306.6 1095.3,332.7 1025.5,291.3 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1036.1509 285.2224)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1099.7815 323.0192)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1056.1948 307.4446)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1057.1786 294.2583)" class="st1 st2 st3">216.00 m</text>
			<text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1074.9449 304.2385)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1066.8132 294.8792)" class="st4 st5 st3">49</text>
			<line class="st9" x1="1025.5" y1="291.3" x2="1095.3" y2="332.7"/>
			<g>
				<polyline class="st6" points="1047.2,286.2 1041,282.5 1045.9,281.3 1047.2,286.2 				"/>
				<polyline class="st7" points="1047.2,286.2 1042.3,287.4 1041,282.5 1047.2,286.2 				"/>
			</g>
		</g>
		<g id="F50" ng-class="opalo.inmovablesClassList[154]" ng-click="opalo.showPropertyData(65, '50')">
			<polyline class="property pb-sprite-1" points="1041,265.1 1056.6,239 1126.4,280.4 1110.8,306.6 1041,265.1 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1051.6963 259.0529)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1115.3262 296.851)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1071.7371 281.2749)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1082.5225 267.5)" class="st4 st5 st3">50</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1073.2343 268.755)" class="st1 st2 st3">216.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1091.4187 277.9513)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1041" y1="265.1" x2="1110.8" y2="306.6"/>
			<g>
				<polyline class="st6" points="1062.4,259.8 1056.2,256.1 1061.1,254.9 1062.4,259.8 				"/>
				<polyline class="st7" points="1062.4,259.8 1057.4,261 1056.2,256.1 1062.4,259.8 				"/>
			</g>
		</g>
		<g id="F51" ng-class="opalo.inmovablesClassList[155]" ng-click="opalo.showPropertyData(65, '51')">
			<polyline class="property pb-sprite-2" points="1056.6,239 1072.1,212.8 1141.9,254.2 1126.4,280.4 1056.6,239 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1067.238 232.8841)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1130.8716 270.6817)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1087.2823 255.1076)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1098.9415 240.7368)" class="st4 st5 st3">51</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1088.196 241.3579)" class="st1 st2 st3">216.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1106.3805 250.5541)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1056.6" y1="239" x2="1126.4" y2="280.4"/>
			<g>
				<polyline class="st6" points="1077.9,232.5 1071.7,228.8 1076.7,227.6 1077.9,232.5 				"/>
				<polyline class="st7" points="1077.9,232.5 1073,233.8 1071.7,228.8 1077.9,232.5 				"/>
			</g>
		</g>
		<g id="F52" ng-class="opalo.inmovablesClassList[156]" ng-click="opalo.showPropertyData(65, '52')">
			<polyline class="property pb-sprite-1" points="1072.1,212.8 1087.7,186.6 1157.4,228.1 1141.9,254.2 1072.1,212.8 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1082.7837 206.7161)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1102.8273 228.9392)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1115.2866 207.9639)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1113.5239 214.7314)" class="st4 st5 st3">52</text>
			<g>
				<polyline class="st6" points="1094.8,209 1088.6,205.3 1093.5,204.1 1094.8,209 				"/>
				<polyline class="st7" points="1094.8,209 1089.9,210.2 1088.6,205.3 1094.8,209 				"/>
			</g>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1103.3235 216.6488)" class="st1 st2 st3">216.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1121.5079 225.845)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1072.1" y1="212.8" x2="1141.9" y2="254.2"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1146.3015 243.3844)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
		</g>
		<g id="F53" ng-class="opalo.inmovablesClassList[157]" ng-click="opalo.showPropertyData(65, '53')">
			<polygon class="property pb-sprite-2" points="1208.6,273.9 1151.1,239.9 1164.7,215.4 1222.3,250 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1175.4446 252.5627)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1187.202 234.466)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1159.2573 234.9992)" class="st1 st2 st3">9.00</text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1185.114 241.2396)" class="st4 st5 st3">53</text>
			<g>
				<polyline class="st6" points="1208.6,261 1202.4,257.4 1207.3,256.1 1208.6,261 				"/>
				<polyline class="st7" points="1208.6,261 1203.6,262.3 1202.4,257.3 1208.6,261 				"/>
			</g>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1175.4642 242.5984)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1193.6487 251.7946)" class="st1 st2 st3">2 </text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1211.0126 266.5963)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
		</g>
		<g id="F54" ng-class="opalo.inmovablesClassList[158]" ng-click="opalo.showPropertyData(65, '54')">
			<polygon class="property pb-sprite-1" points="1193.6,299.2 1135.4,264.7 1149.3,239.7 1207.6,274.8 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1144.8337 259.5384)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1197.9912 289.712)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1161.8929 275.7136)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1172.5065 264.6034)" class="st4 st5 st3">54</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1162.8567 265.9621)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1181.0411 275.1584)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1150.5" y1="240.7" x2="1208" y2="274.3"/>
		</g>
		<g id="F55" ng-class="opalo.inmovablesClassList[159]" ng-click="opalo.showPropertyData(65, '55')">
			<polygon class="property pb-sprite-2" points="1179.5,323.2 1121.4,288.7 1135.3,263.7 1193.5,298.8 			"/>
			<line class="property pb-sprite-2" x1="1126.9" y1="279.6" x2="1140.7" y2="256.3"/>
			<path class="property pb-sprite-2" d="M1140.7,256.3"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1130.556 283.5545)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1183.5491 313.737)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1147.6154 299.7295)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1158.2279 288.619)" class="st4 st5 st3">55</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1148.5782 289.978)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1166.7627 299.1742)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1136.1" y1="264.9" x2="1193.3" y2="299.2"/>
		</g>
		<g id="F56" ng-class="opalo.inmovablesClassList[160]" ng-click="opalo.showPropertyData(65, '56')">
			<polygon class="property pb-sprite-1" points="1165.2,347 1107,312.6 1120.8,287.5 1179,322.6 			"/>
			<line class="property pb-sprite-1" x1="1117.2" y1="295.8" x2="1131" y2="272.5"/>
			<path class="property pb-sprite-1" d="M1131,272.5"/>
			<path class="st9" d="M1189.2,307.1"/>
			<path class="st9" d="M1131,272.5"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1116.5374 307.9465)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1169.4072 337.7616)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1133.5974 324.1222)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1144.209 313.0114)" class="st4 st5 st3">56</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1134.5608 314.3708)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1152.7452 323.5671)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1122.4" y1="288.4" x2="1179.5" y2="322.3"/>
			<line class="st9" x1="1107.6" y1="312.9" x2="1165.8" y2="347.4"/>
		</g>
		<g id="F57" ng-class="opalo.inmovablesClassList[161]" ng-click="opalo.showPropertyData(65, '57')">
			<line class="property pb-sprite-2" x1="1103.4" y1="319.1" x2="1117.2" y2="295.8"/>
			<path class="property pb-sprite-2" d="M1117.2,295.8"/>
			<path class="st9" d="M1117.2,295.8"/>
			<polygon class="property pb-sprite-2" points="1150.6,371.9 1092.5,337.4 1106.4,312.4 1164.7,347.5 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1101.9479 332.3082)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1154.6941 362.4223)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1119.007 348.4837)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1129.6196 337.373)" class="st4 st5 st3">57</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1119.9723 338.7331)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1138.1567 347.9293)" class="st1 st2 st3">2 </text>
		</g>
		<g id="F58" ng-class="opalo.inmovablesClassList[162]" ng-click="opalo.showPropertyData(65, '58')">
			<line class="property pb-sprite-1" x1="1089.6" y1="342.3" x2="1103.4" y2="319.1"/>
			<path class="property pb-sprite-1" d="M1147.7,376.9"/>
			<path class="property pb-sprite-1" d="M1103.4,319.1"/>
			<path class="st9" d="M1103.4,319.1"/>
			<polygon class="property pb-sprite-1" points="1136.7,395.9 1078.5,361.5 1092.4,336.4 1150.7,371.5 			"/>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1087.9308 356.7014)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1140.428 386.7183)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1104.9891 372.8762)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1115.6018 361.7655)" class="st4 st5 st3">58</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1105.9535 363.1245)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1124.1379 372.3208)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1093.5" y1="336.5" x2="1151.1" y2="370.7"/>
		</g>
		<g id="F59" ng-class="opalo.inmovablesClassList[163]" ng-click="opalo.showPropertyData(65, '59')">
			<path class="property pb-sprite-2" d="M1075.6,366.8"/>
			<path class="st9" d="M1147.7,376.9"/>
			<path class="st9" d="M1089.6,342.3"/>
			<polygon class="property pb-sprite-2" points="1119.6,425.7 1061.9,391.1 1078.8,360.7 1136.5,396.1 			"/>
			<g>
				<polyline class="st6" points="1120.8,407.9 1114.6,404.2 1119.5,402.9 1120.8,407.9 				"/>
				<polyline class="st7" points="1120.8,407.9 1115.8,409.1 1114.6,404.2 1120.8,407.9 				"/>
			</g>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1073.8116 381.575)" class="st1 st2 st3">9.00</text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1123.3761 415.3232)" class="st1 st2 st3">10.08</text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1098.9429 390.7393)" class="st4 st5 st3">59</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1088.194 391.5289)" class="st1 st2 st3">190.79 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1106.3784 400.7251)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1079.4" y1="362" x2="1137.1" y2="396.3"/>
			<text transform="matrix(0.831 0.5563 -0.5563 0.831 1085.3846 402.3292)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">3</tspan></text>
			<line class="st9" x1="1062" y1="389.4" x2="1165.5" y2="215.6"/>
		</g>
	</g>
	<g id="ISLA_G">
		<g id="G60" ng-class="opalo.inmovablesClassList[164]" ng-click="opalo.showPropertyData(65, '60')">
			<polyline class="property pb-sprite-2" points="1144.4,444 1146,441.4 1159.9,417.9 1218.1,452.4 1204.1,476 1200.7,481.7 1144.4,444 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1168.2314 457.9726)" class="st1 st2 st3">20.03</text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1154.2252 437.4808)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1205.4772 471.5835)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1180.7716 442.9838)" class="st4 st5 st3">60</text>
			<g>
				<polyline class="st6" points="1165.8,438.7 1159.6,435.1 1164.6,433.8 1165.8,438.7 				"/>
				<polyline class="st7" points="1165.8,438.7 1160.9,440 1159.6,435.1 1165.8,438.7 				"/>
			</g>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1171.0626 444.6967)" class="st1 st2 st3">190.72 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1189.2471 453.8929)" class="st1 st2 st3">2 </text>
		</g>
		<g id="G61" ng-class="opalo.inmovablesClassList[165]" ng-click="opalo.showPropertyData(65, '61')">
			<polyline class="property pb-sprite-1" points="1173.8,394.6 1231.9,429.2 1218.1,452.4 1159.9,417.9 1173.8,394.6 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1184.3678 431.3726)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1168.9039 412.7711)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1221.7623 444.1692)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1195.1438 419.7877)" class="st4 st5 st3">61</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1185.4357 421.5009)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1203.6201 430.6972)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1159.9" y1="417.9" x2="1218.1" y2="452.4"/>
		</g>
		<g id="G62" ng-class="opalo.inmovablesClassList[166]" ng-click="opalo.showPropertyData(65, '62')">
			<polyline class="property pb-sprite-2" points="1187.6,371.4 1245.7,405.9 1231.9,429.2 1173.8,394.6 1187.6,371.4 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1198.1848 408.1085)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1182.7196 389.5091)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1235.5778 420.9078)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1208.3804 396.5914)" class="st4 st5 st3">62</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1198.6719 398.3044)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1216.8563 407.5006)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1173.8" y1="394.6" x2="1231.9" y2="429.2"/>
		</g>
		<g id="G63" ng-class="opalo.inmovablesClassList[167]" ng-click="opalo.showPropertyData(65, '63')">
			<polyline class="property pb-sprite-1" points="1201.4,348.1 1259.5,382.6 1245.7,405.9 1187.6,371.4 1201.4,348.1 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1212.0011 384.8493)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1196.5371 366.2498)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1249.3929 397.6485)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1221.761 372.6382)" class="st4 st5 st3">63</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1212.0536 374.3518)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1230.238 383.548)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1187.6" y1="371.4" x2="1245.7" y2="405.9"/>
		</g>
		<g id="G64" ng-class="opalo.inmovablesClassList[168]" ng-click="opalo.showPropertyData(65, '64')">
			<polyline class="property pb-sprite-2" points="1215.2,324.8 1273.4,359.4 1259.5,382.6 1201.4,348.1 1215.2,324.8 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1225.8208 361.59)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1210.3552 342.9894)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1263.214 374.3871)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1235.5779 348.3349)" class="st4 st5 st3">64</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1225.8694 350.048)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1244.0538 359.2443)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1201.4" y1="348.1" x2="1259.5" y2="382.6"/>
		</g>
		<g id="G65" ng-class="opalo.inmovablesClassList[169]" ng-click="opalo.showPropertyData(65, '65')">
			<polyline class="property pb-sprite-1" points="1229,301.6 1287.2,336.1 1273.4,359.4 1215.2,324.8 1229,301.6 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1239.6359 338.3292)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1224.1699 319.7291)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1277.03 351.1284)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1248.5616 326.0202)" class="st4 st5 st3">65</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1238.8538 327.7337)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1257.0382 336.93)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1215.2" y1="324.8" x2="1273.4" y2="359.4"/>
		</g>
		<g id="G66" ng-class="opalo.inmovablesClassList[170]" ng-click="opalo.showPropertyData(65, '66')">
			<polyline class="property pb-sprite-2" points="1242.8,278.3 1301,312.9 1287.2,336.1 1229,301.6 1242.8,278.3 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1253.4547 315.0676)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1237.9861 296.4681)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1290.8435 327.8642)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1263.213 302.8572)" class="st4 st5 st3">66</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1253.5045 304.5698)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1271.689 313.766)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1229" y1="301.6" x2="1287.2" y2="336.1"/>
		</g>
		<g id="G67" ng-class="opalo.inmovablesClassList[171]" ng-click="opalo.showPropertyData(65, '67')">
			<polyline class="property pb-sprite-1" points="1256.7,255.1 1314.8,289.6 1301,312.9 1242.8,278.3 1256.7,255.1 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1267.2715 291.8076)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1251.8052 273.2081)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1304.6639 304.6057)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1277.0305 279.0334)" class="st4 st5 st3">67</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1267.751 279.9901)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1285.9354 289.1864)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1242.8" y1="278.3" x2="1301" y2="312.9"/>
		</g>
		<g id="G68" ng-class="opalo.inmovablesClassList[172]" ng-click="opalo.showPropertyData(65, '68')">
			<polyline class="property pb-sprite-2" points="1256.7,255.1 1273.8,226.3 1329,259.1 1329.4,259.3 1322.2,277.2 1320.6,279.8 1314.8,289.6 
				1256.7,255.1 			"/>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1281.0858 268.5458)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1294.4523 243.213)"><tspan x="0" y="0" class="st1 st2 st3">19.1</tspan><tspan x="9.2" y="0" class="st1 st2 st3">4</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1267.2626 247.1845)"><tspan x="0" y="0" class="st1 st2 st3">9.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.512 -0.859 0.859 0.512 1315.2616 286.7612)"><tspan x="0" y="0" class="st1 st2 st3">4.2</tspan><tspan x="6.6" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.3762 -0.9265 0.9265 0.3762 1323.1709 272.0858)"><tspan x="0" y="0" class="st1 st2 st3">5.6</tspan><tspan x="6.6" y="0" class="st1 st2 st3">9</tspan></text>
			<g>
				<polyline class="st6" points="1278,249.7 1271.8,246.1 1276.7,244.8 1278,249.7 				"/>
				<polyline class="st7" points="1278,249.7 1273.1,251 1271.8,246.1 1278,249.7 				"/>
			</g>
			<text transform="matrix(0.859 0.512 -0.512 0.859 1290.845 254.4004)" class="st4 st5 st3">68</text>
			<text transform="matrix(0.8544 0.5196 -0.5196 0.8544 1281.5648 255.3569)" class="st1 st2 st3">195.59 m</text>
			<text transform="matrix(0.4981 0.3029 -0.3029 0.4981 1299.7493 264.5531)" class="st1 st2 st3">2 </text>
			<line class="st9" x1="1256.7" y1="255.1" x2="1314.8" y2="289.6"/>
		</g>
	</g>
	<g id="ISLA_H">
		<g id="H69" ng-class="opalo.inmovablesClassList[173]" ng-click="opalo.showPropertyData(65, '69')">
			<polyline class="property pb-sprite-1" points="1321,204.6 1335.7,138.6 1362.1,144.5 1362.7,144.6 1347.4,210.5 1321,204.6 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1329.8781 205.9037)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1343.5 144.9303)" class="st1 st2 st3">8.19</text>
			<text transform="matrix(0.2283 -0.9736 0.9736 0.2283 1353.252 183.207)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1340.5687 184.2024)" class="st1 st2 st3">161.91 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1343.4487 164.0294)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1345.3357 162.8757)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1335.5736 175.0601)" class="st4 st5 st3">69</text>
			<g>
				<polyline class="st6" points="1334.8,198.8 1336.4,191.8 1339.1,196.1 1334.8,198.8 				"/>
				<polyline class="st7" points="1334.8,198.8 1332.1,194.5 1336.4,191.8 1334.8,198.8 				"/>
			</g>
		</g>
		<g id="H70" ng-class="opalo.inmovablesClassList[174]" ng-click="opalo.showPropertyData(65, '70')">
			<polyline class="property pb-sprite-2" points="1309.3,132.7 1335.7,138.6 1321,204.6 1294.6,198.7 1309.3,132.7 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1303.4741 200.0058)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1317.0941 139.032)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1325.5972 177.3066)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1315.3538 180.4205)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1318.2339 160.2475)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1320.1208 159.0938)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1310.3586 171.2782)" class="st4 st5 st3">70</text>
			<line class="st9" x1="1321" y1="204.6" x2="1335.7" y2="138.6"/>
		</g>
		<g id="H71" ng-class="opalo.inmovablesClassList[175]" ng-click="opalo.showPropertyData(65, '71')">
			<polyline class="property pb-sprite-1" points="1282.9,126.8 1309.3,132.7 1294.6,198.7 1268.2,192.8 1282.9,126.8 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1277.0675 194.1064)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1290.6886 133.1367)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1298.9368 171.2843)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1290.3937 173.7397)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1293.2737 153.5667)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1295.1606 152.4129)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1285.3976 164.5971)" class="st4 st5 st3">71</text>
			<line class="st9" x1="1294.6" y1="198.7" x2="1309.3" y2="132.7"/>
		</g>
		<g id="H72" ng-class="opalo.inmovablesClassList[176]" ng-click="opalo.showPropertyData(65, '72')">
			<polyline class="property pb-sprite-2" points="1256.5,120.9 1282.9,126.8 1268.2,192.8 1241.8,186.9 1256.5,120.9 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1250.6635 188.2085)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1264.2828 127.2374)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1273.5432 165.3877)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1264.6741 167.3093)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1267.5541 147.1363)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1269.441 145.9825)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1259.679 158.167)" class="st4 st5 st3">72</text>
			<line class="st9" x1="1268.2" y1="192.8" x2="1282.9" y2="126.8"/>
		</g>
		<g id="H73" ng-class="opalo.inmovablesClassList[177]" ng-click="opalo.showPropertyData(65, '73')">
			<polyline class="property pb-sprite-1" points="1230.1,115 1256.5,120.9 1241.8,186.9 1215.3,181 1230.1,115 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1224.2596 182.3096)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1237.8789 121.3396)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1247.1394 159.4888)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1234.6987 155.3902)" class="st4 st5 st3">73</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1237.8221 162.7262)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1240.7021 142.5532)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1242.5891 141.3995)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1241.8" y1="186.9" x2="1256.5" y2="120.9"/>
		</g>
		<g id="H74" ng-class="opalo.inmovablesClassList[178]" ng-click="opalo.showPropertyData(65, '74')">
			<polyline class="property pb-sprite-2" points="1203.7,109.1 1230.1,115 1215.3,181 1188.9,175.1 1203.7,109.1 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1197.8555 176.4127)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1211.4749 115.4417)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1219.3474 153.8776)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1206.8369 148.0547)" class="st4 st5 st3">74</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1209.9634 155.3904)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1212.8434 135.2174)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1214.7303 134.0637)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1215.3" y1="181" x2="1230.1" y2="115"/>
		</g>
		<g id="H75" ng-class="opalo.inmovablesClassList[179]" ng-click="opalo.showPropertyData(65, '75')">
			<polyline class="property pb-sprite-1" points="1177.3,103.2 1203.7,109.1 1188.9,175.1 1162.5,169.2 1177.3,103.2 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1171.4534 170.5153)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1185.0741 109.5425)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1194.3284 147.6934)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1181.121 142.5078)" class="st4 st5 st3">75</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1184.2445 149.8428)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1187.1245 129.6698)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1189.0116 128.5161)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1188.9" y1="175.1" x2="1203.7" y2="109.1"/>
		</g>
		<g id="H76" ng-class="opalo.inmovablesClassList[180]" ng-click="opalo.showPropertyData(65, '76')">
			<polyline class="property pb-sprite-2" points="1150.9,97.3 1177.3,103.2 1162.5,169.2 1136.1,163.3 1150.9,97.3 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1145.0485 164.6172)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1158.6681 103.6452)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1167.1715 141.7923)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1155.4849 137.6961)" class="st4 st5 st3">76</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1158.5262 146.0615)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1161.4062 125.8885)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1163.2932 124.7347)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1162.5" y1="169.2" x2="1177.3" y2="103.2"/>
		</g>
		<g id="H77" ng-class="opalo.inmovablesClassList[181]" ng-click="opalo.showPropertyData(65, '77')">
			<polyline class="property pb-sprite-1" points="1124.5,91.4 1150.9,97.3 1136.1,163.3 1109.7,157.4 1124.5,91.4 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1118.6464 158.7197)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1132.2661 97.7468)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1140.5165 135.7733)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1129.078 131.7976)" class="st4 st5 st3">77</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1131.5508 141.019)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1134.4308 120.846)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1136.3177 119.6923)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1136.1" y1="163.3" x2="1150.9" y2="97.3"/>
		</g>
		<g id="H78" ng-class="opalo.inmovablesClassList[182]" ng-click="opalo.showPropertyData(65, '78')">
			<polyline class="property pb-sprite-2" points="1098.1,85.5 1124.5,91.4 1109.7,157.4 1083.3,151.5 1098.1,85.5 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1092.2416 152.8206)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1105.8593 91.8482)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1114.6123 130.2848)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1102.674 125.8997)" class="st4 st5 st3">78</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1105.5787 134.7154)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1108.4587 114.5424)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1110.3457 113.3886)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1109.7" y1="157.4" x2="1124.5" y2="91.4"/>
		</g>
		<g id="H79" ng-class="opalo.inmovablesClassList[183]" ng-click="opalo.showPropertyData(65, '79')">
			<polyline class="property pb-sprite-1" points="1071.7,79.6 1098.1,85.5 1083.3,151.5 1056.9,145.6 1071.7,79.6 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1065.8367 146.9225)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1079.4541 85.9511)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1087.832 124.3869)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1076.2719 120.0022)" class="st4 st5 st3">79</text>
			<g>
				<polyline class="st6" points="1071.9,140.1 1073.5,133.1 1076.2,137.4 1071.9,140.1 				"/>
				<polyline class="st7" points="1071.9,140.1 1069.2,135.8 1073.5,133.1 1071.9,140.1 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1079.1046 129.5473)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1081.9846 109.3743)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1083.8716 108.2206)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1083.3" y1="151.5" x2="1098.1" y2="85.5"/>
		</g>
		<g id="H80" ng-class="opalo.inmovablesClassList[184]" ng-click="opalo.showPropertyData(65, '80')">
			<polyline class="property pb-sprite-2" points="1045.3,73.7 1071.7,79.6 1056.9,145.6 1030.5,139.7 1045.3,73.7 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1039.4326 141.0247)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1053.0522 80.0527)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1061.0524 118.4911)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1048.2529 113.6653)" class="st4 st5 st3">80</text>
			<g>
				<polyline class="st6" points="1045.5,134.2 1047.1,127.2 1049.8,131.5 1045.5,134.2 				"/>
				<polyline class="st7" points="1045.5,134.2 1042.8,129.9 1047.1,127.2 1045.5,134.2 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1051.4688 123.314)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1054.3488 103.141)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1056.2357 101.9873)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1056.9" y1="145.6" x2="1071.7" y2="79.6"/>
		</g>
		<g id="H81" ng-class="opalo.inmovablesClassList[185]" ng-click="opalo.showPropertyData(65, '81')">
			<polyline class="property pb-sprite-1" points="1018.9,67.8 1045.3,73.7 1030.5,139.7 1004.1,133.8 1018.9,67.8 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1013.0273 135.1285)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1026.6473 74.1546)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1035.1488 112.593)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="1019.1,128.3 1020.7,121.3 1023.4,125.6 1019.1,128.3 				"/>
				<polyline class="st7" points="1019.1,128.3 1016.4,124 1020.7,121.3 1019.1,128.3 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1022.1584 106.7319)" class="st4 st5 st3">81</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1025.3726 116.3792)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1028.2526 96.2062)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1030.1395 95.0525)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1030.5" y1="139.7" x2="1045.3" y2="73.7"/>
		</g>
		<g id="H82" ng-class="opalo.inmovablesClassList[186]" ng-click="opalo.showPropertyData(65, '82')">
			<polyline class="property pb-sprite-2" points="992.5,61.9 1018.9,67.8 1004.1,133.8 977.7,127.9 992.5,61.9 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 986.6218 129.2283)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1000.2433 68.2567)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1008.871 106.6943)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 996.6049 102.0518)" class="st4 st5 st3">82</text>
			<g>
				<polyline class="st6" points="992.7,122.4 994.3,115.4 997,119.7 992.7,122.4 				"/>
				<polyline class="st7" points="992.7,122.4 990,118.1 994.3,115.4 992.7,122.4 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 999.279 110.8339)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 1002.1591 90.6609)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 1004.046 89.5072)" class="st1 st2 st3"> </text>
			<line class="st9" x1="1004.1" y1="133.8" x2="1018.9" y2="67.8"/>
		</g>
		<g id="H83" ng-class="opalo.inmovablesClassList[187]" ng-click="opalo.showPropertyData(65, '83')">
			<polyline class="property pb-sprite-1" points="966,56 992.5,61.9 977.7,127.9 951.3,122 966,56 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 960.219 123.3296)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 973.8393 62.3588)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 983.098 100.5077)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 970.199 96.1535)" class="st4 st5 st3">83</text>
			<g>
				<polyline class="st6" points="966.3,116.5 967.9,109.5 970.6,113.8 966.3,116.5 				"/>
				<polyline class="st7" points="966.3,116.5 963.6,112.2 967.9,109.5 966.3,116.5 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 973.0548 104.6555)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 975.9348 84.4825)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 977.8218 83.3288)" class="st1 st2 st3"> </text>
			<line class="st9" x1="977.7" y1="127.9" x2="992.5" y2="61.9"/>
		</g>
		<g id="H84" ng-class="opalo.inmovablesClassList[188]" ng-click="opalo.showPropertyData(65, '84')">
			<polyline class="property pb-sprite-2" points="939.6,50.1 966,56 951.3,122 924.9,116.1 939.6,50.1 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 933.815 117.4317)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 947.4368 56.4633)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 956.063 94.8985)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 943.795 90.2556)" class="st4 st5 st3">84</text>
			<g>
				<polyline class="st6" points="939.9,110.6 941.5,103.6 944.2,107.9 939.9,110.6 				"/>
				<polyline class="st7" points="939.9,110.6 937.2,106.3 941.5,103.6 939.9,110.6 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 946.7078 99.4873)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 949.5879 79.3143)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 951.4749 78.1606)" class="st1 st2 st3"> </text>
			<line class="st9" x1="951.3" y1="122" x2="966" y2="56"/>
		</g>
		<g id="H85" ng-class="opalo.inmovablesClassList[189]" ng-click="opalo.showPropertyData(65, '85')">
			<polyline class="property pb-sprite-1" points="913.2,44.2 939.6,50.1 924.9,116.1 898.5,110.2 913.2,44.2 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 907.4108 111.5348)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 921.0306 50.5619)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 929.6605 88.7118)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 915.752 84.2325)" class="st4 st5 st3">85</text>
			<g>
				<polyline class="st6" points="913.5,104.7 915.1,97.7 917.8,102 913.5,104.7 				"/>
				<polyline class="st7" points="913.5,104.7 910.8,100.4 915.1,97.7 913.5,104.7 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 918.7228 93.5623)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 921.6029 73.3893)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 923.4899 72.2355)" class="st1 st2 st3"> </text>
			<line class="st9" x1="924.9" y1="116.1" x2="939.6" y2="50.1"/>
		</g>
		<g id="H86" ng-class="opalo.inmovablesClassList[190]" ng-click="opalo.showPropertyData(65, '86')">
			<polyline class="property pb-sprite-2" points="883.5,37.6 913.2,44.2 898.5,110.2 868.8,103.6 883.5,37.6 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 879.3556 105.2659)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 892.9766 44.2962)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 902.6233 83.0996)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 889.7311 78.1781)" class="st4 st5 st3">86</text>
			<g>
				<polyline class="st6" points="887.1,98.8 888.7,91.8 891.4,96.1 887.1,98.8 				"/>
				<polyline class="st7" points="887.1,98.8 884.4,94.5 888.7,91.8 887.1,98.8 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 893.0051 87.7638)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 895.8851 67.5908)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 897.7721 66.437)" class="st1 st2 st3"> </text>
			<line class="st9" x1="898.5" y1="110.2" x2="913.2" y2="44.2"/>
		</g>
		<g id="H87" ng-class="opalo.inmovablesClassList[191]" ng-click="opalo.showPropertyData(65, '87')">
			<polyline class="property pb-sprite-1" points="837.1,96.5 851.8,30.5 857.1,31.7 883.5,37.6 868.8,103.6 842.4,97.7 837.1,96.5 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 848.6425 98.4068)"><tspan x="0" y="0" class="st1 st2 st3">9.6</tspan><tspan x="6.6" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 861.6128 38.4144)"><tspan x="0" y="0" class="st1 st2 st3">9.6</tspan><tspan x="6.6" y="0" class="st1 st2 st3">4</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 874.1072 76.1618)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 848.3456 70.4075)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 858.3723 71.1727)" class="st4 st5 st3">87</text>
			<g>
				<polyline class="st6" points="856.3,91.9 857.8,84.9 860.6,89.2 856.3,91.9 				"/>
				<polyline class="st7" points="856.3,91.9 853.6,87.7 857.8,84.9 856.3,91.9 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 861.6118 80.1513)" class="st1 st2 st3">192.22 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 864.4919 59.9783)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 866.3788 58.8245)" class="st1 st2 st3"> </text>
			<line class="st9" x1="868.8" y1="103.6" x2="883.5" y2="37.6"/>
		</g>
	</g>
	<g id="ISLA_I">
		<g id="I88" ng-class="opalo.inmovablesClassList[192]" ng-click="opalo.showPropertyData(65, '88')">
			<polyline class="property pb-sprite-2" points="753.6,15.5 755.1,8.9 821.1,23.6 819.6,30.2 813.7,56.6 747.7,41.9 753.6,15.5 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 814.9653 45.6248)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 755.3012 34.3779)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 775.1615 46.3436)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 779.4711 19.9408)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 770.8872 34.3614)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 791.0798 37.1005)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 792.2472 38.9794)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 779.4721 31.5847)" class="st4 st5 st3">88</text>
			<g>
				<polyline class="st6" points="808.6,36.5 801.6,35 805.9,32.3 808.6,36.5 				"/>
				<polyline class="st7" points="808.6,36.5 804.3,39.3 801.6,35 808.6,36.5 				"/>
			</g>
		</g>
		<g id="I89" ng-class="opalo.inmovablesClassList[193]" ng-click="opalo.showPropertyData(65, '89')">
			<polyline class="property pb-sprite-1" points="806.4,89.6 740.4,74.9 747.7,41.9 813.7,56.6 806.4,89.6 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 807.59 78.6296)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 747.6538 65.2426)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 767.9164 79.8494)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 774.7633 61.2086)" class="st4 st5 st3">89</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 765.7039 64.7871)" class="st1 st2 st3">200.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 785.8965 67.5262)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 787.0638 69.4052)" class="st1 st2 st3"> </text>
			<line class="st9" x1="813.7" y1="56.6" x2="747.7" y2="41.9"/>
		</g>
		<g id="I90" ng-class="opalo.inmovablesClassList[194]" ng-click="opalo.showPropertyData(65, '90')">
			<polyline class="property pb-sprite-2" points="799.7,119.4 733.7,104.6 740.4,74.9 806.4,89.6 799.7,119.4 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 800.8748 108.695)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 740.9387 95.3069)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 761.155 110.0585)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 767.9459 93.9288)" class="st4 st5 st3">90</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 758.3931 98.1949)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 778.5858 100.934)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 779.7531 102.813)" class="st1 st2 st3"> </text>
			<line class="st9" x1="806.4" y1="89.6" x2="740.4" y2="74.9"/>
		</g>
		<g id="I91" ng-class="opalo.inmovablesClassList[195]" ng-click="opalo.showPropertyData(65, '91')">
			<polyline class="property pb-sprite-1" points="793.1,149.1 727.1,134.3 733.7,104.6 799.7,119.4 793.1,149.1 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 794.2388 138.4008)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 734.3028 125.0128)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 755.0258 139.1311)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 762.0242 123.426)" class="st4 st5 st3">91</text>
			<g>
				<polyline class="st6" points="790.4,132.5 783.4,131 787.7,128.2 790.4,132.5 				"/>
				<polyline class="st7" points="790.4,132.5 786.1,135.3 783.4,131 790.4,132.5 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 752.9717 126.5609)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 773.1643 129.3)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 774.3317 131.179)" class="st1 st2 st3"> </text>
			<line class="st9" x1="799.7" y1="119.4" x2="733.7" y2="104.6"/>
		</g>
		<g id="I92" ng-class="opalo.inmovablesClassList[196]" ng-click="opalo.showPropertyData(65, '92')">
			<polyline class="property pb-sprite-2" points="786.5,178.8 720.5,164 727.1,134.3 793.1,149.1 786.5,178.8 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 787.6043 168.1049)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 727.665 154.7182)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 747.8866 169.4679)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 755.3282 152.8718)" class="st4 st5 st3">92</text>
			<polyline class="st6" points="783.8,162.2 776.8,160.7 781.1,158 783.8,162.2 			"/>
			<polyline class="st7" points="783.8,162.2 779.5,165 776.8,160.7 783.8,162.2 			"/>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 745.9122 156.1864)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 766.1048 158.9255)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 767.2722 160.8045)" class="st1 st2 st3"> </text>
			<line class="st9" x1="793.1" y1="149.1" x2="727.1" y2="134.3"/>
		</g>
		<g id="I93" ng-class="opalo.inmovablesClassList[197]" ng-click="opalo.showPropertyData(65, '93')">
			<polyline class="property pb-sprite-1" points="779.8,208.5 713.8,193.7 720.5,164 786.5,178.8 779.8,208.5 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 780.9703 197.8112)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 721.0342 184.4231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 742.2585 198.4163)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 747.7191 182.5118)" class="st4 st5 st3">93</text>
			<g>
				<polyline class="st6" points="776,191.7 769,190.1 773.3,187.4 776,191.7 				"/>
				<polyline class="st7" points="776,191.7 771.7,194.4 769,190.1 776,191.7 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 738.9792 186.4422)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 759.1718 189.1813)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 760.3392 191.0602)" class="st1 st2 st3"> </text>
			<line class="st9" x1="786.5" y1="178.8" x2="720.5" y2="164"/>
		</g>
		<g id="I94" ng-class="opalo.inmovablesClassList[198]" ng-click="opalo.showPropertyData(65, '94')">
			<polyline class="property pb-sprite-2" points="773.2,238.2 707.2,223.4 713.8,193.7 779.8,208.5 773.2,238.2 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 774.334 227.5139)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 714.3945 214.1281)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 734.6161 228.8778)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 741.2718 212.984)" class="st4 st5 st3">94</text>
			<g>
				<polyline class="st6" points="769.4,221.4 762.4,219.8 766.7,217.1 769.4,221.4 				"/>
				<polyline class="st7" points="769.4,221.4 765.1,224.1 762.4,219.8 769.4,221.4 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 732.6755 216.6986)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 752.8681 219.4377)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 754.0355 221.3167)" class="st1 st2 st3"> </text>
			<line class="st9" x1="779.8" y1="208.5" x2="713.8" y2="193.7"/>
		</g>
		<g id="I95" ng-class="opalo.inmovablesClassList[199]" ng-click="opalo.showPropertyData(65, '95')">
			<polyline class="property pb-sprite-1" points="766.6,267.9 700.6,253.1 707.2,223.4 773.2,238.2 766.6,267.9 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 767.6998 257.2211)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 707.764 243.8321)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 728.8619 258.2073)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="762.8,251.1 755.8,249.5 760,246.8 762.8,251.1 				"/>
				<polyline class="st7" points="762.8,251.1 758.5,253.8 755.8,249.5 762.8,251.1 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 735.977 241.4759)" class="st4 st5 st3">95</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 726.1212 244.6853)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 746.3138 247.4245)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 747.4811 249.3034)" class="st1 st2 st3"> </text>
			<line class="st9" x1="773.2" y1="238.2" x2="707.2" y2="223.4"/>
		</g>
		<g id="I96" ng-class="opalo.inmovablesClassList[200]" ng-click="opalo.showPropertyData(65, '96')">
			<polyline class="property pb-sprite-2" points="759.9,297.6 693.9,282.8 700.6,253.1 766.6,267.9 759.9,297.6 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 761.0665 286.9245)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 701.1266 273.5356)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 721.3461 287.5294)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="756.1,280.8 749.1,279.2 753.4,276.5 756.1,280.8 				"/>
				<polyline class="st7" points="756.1,280.8 751.8,283.5 749.1,279.2 756.1,280.8 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 729.4213 271.4795)" class="st4 st5 st3">96</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 721.0629 274.6895)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 741.2556 277.4286)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 742.4229 279.3076)" class="st1 st2 st3"> </text>
			<line class="st9" x1="766.6" y1="267.9" x2="700.6" y2="253.1"/>
		</g>
		<g id="I97" ng-class="opalo.inmovablesClassList[201]" ng-click="opalo.showPropertyData(65, '97')">
			<polyline class="property pb-sprite-1" points="753.3,327.3 687.3,312.5 693.9,282.8 759.9,297.6 753.3,327.3 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 754.4268 316.6295)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 694.4919 303.2407)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 714.7106 316.6289)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="749.5,310.5 742.5,308.9 746.8,306.2 749.5,310.5 				"/>
				<polyline class="st7" points="749.5,310.5 745.2,313.2 742.5,308.9 749.5,310.5 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 721.3738 302.6244)" class="st4 st5 st3">97</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 713.1616 306.1987)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 733.3542 308.9378)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 734.5215 310.8167)" class="st1 st2 st3"> </text>
			<line class="st9" x1="759.9" y1="297.6" x2="693.9" y2="282.8"/>
		</g>
		<g id="I98" ng-class="opalo.inmovablesClassList[202]" ng-click="opalo.showPropertyData(65, '98')">
			<polyline class="property pb-sprite-2" points="746.7,357 680.6,342.2 687.3,312.5 753.3,327.3 746.7,357 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 747.791 346.3344)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 687.8538 332.947)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 708.4462 346.4678)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 714.4228 331.494)" class="st4 st5 st3">98</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 706.2105 335.0683)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 726.4031 337.8074)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 727.5705 339.6863)" class="st1 st2 st3"> </text>
			<line class="st9" x1="753.3" y1="327.3" x2="687.3" y2="312.5"/>
		</g>
		<g id="I99" ng-class="opalo.inmovablesClassList[203]" ng-click="opalo.showPropertyData(65, '99')">
			<polyline class="property pb-sprite-1" points="680.6,342.2 746.7,357 740,386.7 674,371.9 680.6,342.2 			"/>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 741.1563 376.0394)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 681.2491 362.5267)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="6.6" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 701.5392 376.9476)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 707.1251 360.3495)" class="st4 st5 st3">99</text>
			<g>
				<polyline class="st6" points="736.2,369.9 729.2,368.4 733.5,365.6 736.2,369.9 				"/>
				<polyline class="st7" points="736.2,369.9 731.9,372.6 729.2,368.4 736.2,369.9 				"/>
			</g>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 699.1508 365.7023)" class="st1 st2 st3">180.00 m</text>
			<text transform="matrix(0.5698 0.1232 -0.1232 0.5698 719.3434 368.4414)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9774 0.2113 -0.2113 0.9774 720.5107 370.3204)" class="st1 st2 st3"> </text>
			<line class="st9" x1="746.7" y1="357" x2="680.6" y2="342.2"/>
		</g>
		<g id="I100" ng-class="opalo.inmovablesClassList[204]" ng-click="opalo.showPropertyData(65, '100')">
			<polyline class="property pb-sprite-2" points="647.6,366 662.4,300 688.8,305.9 674,371.9 647.6,366 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 670.0102 306.9766)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 656.6196 366.915)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 679.1776 344.4906)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 665.4534 347.2133)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 668.3334 327.0403)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 670.2203 325.8865)" class="st1 st2 st3"> </text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 661.6575 338.279)" class="st4 st5 st3">100</text>
			<line class="st9" x1="674" y1="371.9" x2="688.8" y2="305.9"/>
		</g>
		<g id="I101" ng-class="opalo.inmovablesClassList[205]" ng-click="opalo.showPropertyData(65, '101')">
			<polyline class="property pb-sprite-1" points="621.2,360.2 635.9,294.1 662.4,300 647.6,366 621.2,360.2 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 643.6057 301.0766)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 630.2166 361.0174)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 652.6995 338.5751)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 637.632 332.9097)" class="st4 st5 st3">101</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 642.4259 342.2272)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 645.3059 322.0542)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 647.1929 320.9005)" class="st1 st2 st3"> </text>
			<line class="st9" x1="647.6" y1="366" x2="662.4" y2="300"/>
		</g>
		<g id="I102" ng-class="opalo.inmovablesClassList[206]" ng-click="opalo.showPropertyData(65, '102')">
			<polyline class="property pb-sprite-2" points="609.5,288.2 635.9,294.1 621.2,360.2 594.8,354.3 609.5,288.2 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 617.2015 295.1796)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 603.8126 355.1195)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 626.7698 332.7803)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 612.4471 327.0822)" class="st4 st5 st3">102</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 616.2034 335.083)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 619.0834 314.91)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 620.9704 313.7563)" class="st1 st2 st3"> </text>
			<line class="st9" x1="621.2" y1="360.2" x2="635.9" y2="294.1"/>
		</g>
		<g id="I103" ng-class="opalo.inmovablesClassList[207]" ng-click="opalo.showPropertyData(65, '103')">
			<polyline class="property pb-sprite-1" points="583.1,282.3 609.5,288.2 594.8,354.3 568.4,348.4 583.1,282.3 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 590.7968 289.2806)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 577.4058 349.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 599.5285 327.0825)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 587.5863 322.0386)" class="st4 st5 st3">103</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 590.8201 328.5267)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 593.7002 308.3537)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 595.5872 307.2)" class="st1 st2 st3"> </text>
			<line class="st9" x1="594.8" y1="354.3" x2="609.5" y2="288.2"/>
		</g>
		<g id="I104" ng-class="opalo.inmovablesClassList[208]" ng-click="opalo.showPropertyData(65, '104')">
			<polyline class="property pb-sprite-2" points="556.7,276.4 583.1,282.3 568.4,348.4 542,342.5 556.7,276.4 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 564.3914 283.3844)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 551.0017 343.3231)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 573.2914 321.2349)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 560.797 316.6289)" class="st4 st5 st3">104</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 564.0964 324.1844)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 566.9765 304.0115)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 568.8635 302.8577)" class="st1 st2 st3"> </text>
			<line class="st9" x1="568.4" y1="348.4" x2="583.1" y2="282.3"/>
		</g>
		<g id="I105" ng-class="opalo.inmovablesClassList[209]" ng-click="opalo.showPropertyData(65, '105')">
			<polyline class="property pb-sprite-1" points="530.3,270.5 556.7,276.4 542,342.5 515.6,336.6 530.3,270.5 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 537.9893 277.4869)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 524.5989 337.4244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 546.2171 315.3363)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 535.0029 310.0929)" class="st4 st5 st3">105</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 538.5452 318.286)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 541.4252 298.113)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 543.3121 296.9593)" class="st1 st2 st3"> </text>
			<line class="st9" x1="542" y1="342.5" x2="556.7" y2="276.4"/>
		</g>
		<g id="I106" ng-class="opalo.inmovablesClassList[210]" ng-click="opalo.showPropertyData(65, '106')">
			<polyline class="property pb-sprite-2" points="503.9,264.7 530.3,270.5 515.6,336.6 489.2,330.7 503.9,264.7 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 511.5838 271.5867)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 498.1949 331.5266)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 520.1417 309.4368)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 508.1974 303.2427)" class="st4 st5 st3">106</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 511.6507 312.3886)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 514.5308 292.2156)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 516.4177 291.0619)" class="st1 st2 st3"> </text>
			<line class="st9" x1="515.6" y1="336.6" x2="530.3" y2="270.5"/>
		</g>
		<g id="I107" ng-class="opalo.inmovablesClassList[211]" ng-click="opalo.showPropertyData(65, '107')">
			<polyline class="property pb-sprite-1" points="477.5,258.8 503.9,264.7 489.2,330.7 462.8,324.8 477.5,258.8 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 485.1813 265.6912)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 471.7928 325.6291)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 493.4059 303.2416)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 481.6056 298.1134)" class="st4 st5 st3">107</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 485.9331 306.9744)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 488.8132 286.8014)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 490.7002 285.6476)" class="st1 st2 st3"> </text>
			<line class="st9" x1="489.2" y1="330.7" x2="503.9" y2="264.7"/>
		</g>
		<g id="I108" ng-class="opalo.inmovablesClassList[212]" ng-click="opalo.showPropertyData(65, '108')">
			<polyline class="property pb-sprite-2" points="451.1,252.9 477.5,258.8 462.8,324.8 436.4,318.9 451.1,252.9 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 458.7775 259.7923)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 445.3888 319.7312)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 467.0011 297.6428)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 452.8625 293.2116)" class="st4 st5 st3">108</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 457.1901 302.0727)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 460.0701 281.8997)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 461.9571 280.7459)" class="st1 st2 st3"> </text>
			<line class="st9" x1="462.8" y1="324.8" x2="477.5" y2="258.8"/>
		</g>
		<g id="I109" ng-class="opalo.inmovablesClassList[213]" ng-click="opalo.showPropertyData(65, '109')">
			<polyline class="property pb-sprite-1" points="424.7,247 451.1,252.9 436.4,318.9 410,313 424.7,247 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 432.3687 253.8934)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 418.9818 313.8336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 439.9065 291.7456)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 426.976 285.8314)" class="st4 st5 st3">109</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 431.3043 294.6935)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 434.1844 274.5206)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 436.0713 273.3668)" class="st1 st2 st3"> </text>
			<line class="st9" x1="436.4" y1="318.9" x2="451.1" y2="252.9"/>
		</g>
		<g id="I110" ng-class="opalo.inmovablesClassList[214]" ng-click="opalo.showPropertyData(65, '110')">
			<polyline class="property pb-sprite-2" points="398.3,241.1 424.7,247 410,313 383.6,307.1 398.3,241.1 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 405.968 247.9942)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 392.5789 307.935)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 414.3605 285.8324)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 400.419 279.9333)" class="st4 st5 st3">110</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 404.7473 288.7955)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 407.6273 268.6225)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 409.5143 267.4687)" class="st1 st2 st3"> </text>
			<line class="st9" x1="410" y1="313" x2="424.7" y2="247"/>
		</g>
		<g id="I111" ng-class="opalo.inmovablesClassList[215]" ng-click="opalo.showPropertyData(65, '111')">
			<polyline class="property pb-sprite-1" points="371.9,235.2 398.3,241.1 383.6,307.1 357.2,301.2 371.9,235.2 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 379.564 242.0963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 366.1747 302.0381)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 388.296 279.9333)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 374.8686 274.7065)" class="st4 st5 st3">111</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 379.1969 283.5687)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 382.0769 263.3957)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 383.9639 262.242)" class="st1 st2 st3"> </text>
			<line class="st9" x1="383.6" y1="307.1" x2="398.3" y2="241.1"/>
		</g>
		<g id="I112" ng-class="opalo.inmovablesClassList[216]" ng-click="opalo.showPropertyData(65, '112')">
			<polyline class="property pb-sprite-2" points="345.5,229.3 371.9,235.2 357.2,301.2 330.8,295.3 345.5,229.3 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 353.1579 236.199)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 339.7709 296.1393)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 361.721 273.8021)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 349.7701 268.9043)" class="st4 st5 st3">112</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 352.808 278.1896)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 355.6881 258.0166)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 357.575 256.8628)" class="st1 st2 st3"> </text>
			<line class="st9" x1="357.2" y1="301.2" x2="371.9" y2="235.2"/>
		</g>
		<g id="I113" ng-class="opalo.inmovablesClassList[217]" ng-click="opalo.showPropertyData(65, '113')">
			<polyline class="property pb-sprite-1" points="319.1,223.4 345.5,229.3 330.8,295.3 304.4,289.4 319.1,223.4 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 326.756 230.3006)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 313.3669 290.2414)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 335.485 268.1509)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 323.0436 262.2109)" class="st4 st5 st3">113</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 326.0806 271.4959)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 328.9606 251.3229)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 330.8476 250.1691)" class="st1 st2 st3"> </text>
			<line class="st9" x1="330.8" y1="295.3" x2="345.5" y2="229.3"/>
		</g>
		<g id="I114" ng-class="opalo.inmovablesClassList[218]" ng-click="opalo.showPropertyData(65, '114')">
			<polyline class="property pb-sprite-2" points="292.7,217.5 319.1,223.4 304.4,289.4 277.9,283.5 292.7,217.5 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 300.3521 224.4027)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 286.9627 284.3444)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 308.5762 262.2102)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 296.3167 255.9176)" class="st4 st5 st3">114</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 299.3564 265.2042)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 302.2364 245.0312)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 304.1234 243.8775)" class="st1 st2 st3"> </text>
			<line class="st9" x1="304.4" y1="289.4" x2="319.1" y2="223.4"/>
		</g>
		<g id="I115" ng-class="opalo.inmovablesClassList[219]" ng-click="opalo.showPropertyData(65, '115')">
			<polyline class="property pb-sprite-1" points="266.3,211.6 292.7,217.5 277.9,283.5 251.5,277.6 266.3,211.6 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 273.949 218.505)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 260.5584 278.4435)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 282.3398 256.1086)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 270.5997 250.5055)" class="st4 st5 st3">115</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 273.6357 259.7903)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 276.5157 239.6173)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 278.4027 238.4635)" class="st1 st2 st3"> </text>
			<line class="st9" x1="277.9" y1="283.5" x2="292.7" y2="217.5"/>
		</g>
		<g id="I116" ng-class="opalo.inmovablesClassList[220]" ng-click="opalo.showPropertyData(65, '116')">
			<polyline class="property pb-sprite-2" points="239.9,205.7 266.3,211.6 251.5,277.6 225.1,271.7 239.9,205.7 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 247.5469 212.6076)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 234.1561 272.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 257.115 250.2092)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 244.0407 243.8325)" class="st4 st5 st3">116</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 247.0786 253.1177)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 249.9587 232.9447)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 251.8457 231.791)" class="st1 st2 st3"> </text>
			<line class="st9" x1="251.5" y1="277.6" x2="266.3" y2="211.6"/>
		</g>
		<g id="I117" ng-class="opalo.inmovablesClassList[221]" ng-click="opalo.showPropertyData(65, '117')">
			<polyline class="property pb-sprite-1" points="213.5,199.8 239.9,205.7 225.1,271.7 198.7,265.8 213.5,199.8 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 221.1429 206.7097)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 207.7511 266.6489)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 229.8721 243.8336)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 217.4822 239.1899)" class="st4 st5 st3">117</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 220.5211 248.4754)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 223.4011 228.3024)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 225.2881 227.1486)" class="st1 st2 st3"> </text>
			<line class="st9" x1="225.1" y1="271.7" x2="239.9" y2="205.7"/>
		</g>
		<g id="I118" ng-class="opalo.inmovablesClassList[222]" ng-click="opalo.showPropertyData(65, '118')">
			<polyline class="property pb-sprite-2" points="187.1,193.9 213.5,199.8 198.7,265.8 172.3,259.9 187.1,193.9 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 194.6855 200.7999)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 181.3491 260.7514)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 202.9554 238.6626)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 192.4379 232.3261)" class="st4 st5 st3">118</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 195.4739 241.6109)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 198.3539 221.4379)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 200.2409 220.2842)" class="st1 st2 st3"> </text>
			<line class="st9" x1="198.7" y1="265.8" x2="213.5" y2="199.8"/>
		</g>
		<g id="I119" ng-class="opalo.inmovablesClassList[223]" ng-click="opalo.showPropertyData(65, '119')">
			<polyline class="property pb-sprite-1" points="160.7,188 187.1,193.9 172.3,259.9 145.9,254 160.7,188 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 168.2239 194.8911)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 154.9342 254.8531)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 176.3833 232.514)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 165.2075 226.4276)" class="st4 st5 st3">119</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 168.2452 235.7138)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 171.1252 215.5408)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 173.0122 214.3871)" class="st1 st2 st3"> </text>
			<line class="st9" x1="172.3" y1="259.9" x2="187.1" y2="193.9"/>
		</g>
		<g id="I120" ng-class="opalo.inmovablesClassList[224]" ng-click="opalo.showPropertyData(65, '120')">
			<polyline class="property pb-sprite-2" points="134.3,182.1 160.7,188 145.9,254 119.5,248.1 134.3,182.1 			"/>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 141.8182 188.9918)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 128.5334 248.9539)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="6.6" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 151.4955 226.6198)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 130.4699 221.9222)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="9.2" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<polyline class="st6" points="134.5,241.7 136,234.7 138.8,239 134.5,241.7 				"/>
				<polyline class="st7" points="134.5,241.7 131.8,237.4 136,234.7 134.5,241.7 				"/>
			</g>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 138.4808 221.7855)" class="st4 st5 st3">120</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 141.5177 231.0705)" class="st1 st2 st3">160.00 m</text>
			<text transform="matrix(0.1272 -0.569 0.569 0.1272 144.3978 210.8975)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 146.2847 209.7437)" class="st1 st2 st3"> </text>
			<line class="st9" x1="145.9" y1="254" x2="160.7" y2="188"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polyline class="st11" points="99.3,280.9 86.1,278 88.3,268.1 101.6,271 99.3,280.9 	"/>
	<polyline class="st11" points="105.9,286.1 104.8,290.8 103.8,291 103.1,291.9 103.3,293 104.2,293.6 103.2,298.3 100.4,291.3 
		105.9,286.1 	"/>
	<polyline class="st11" points="107,263.5 108.1,263.3 108.7,262.4 108.5,261.4 107.6,260.7 108.8,256 111.5,263.1 105.9,268.2 
		107,263.5 	"/>
	<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 116.047 272.1221)" class="st12 st5 st13">ENTRADA</text>
	<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 109.5211 299.5945)" class="st12 st5 st13">SALIDA</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 969.97 154.718)" class="st14 st5 st15">14</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 986.223 158.1688)" class="st14 st5 st15">16</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 994.7234 160.2599)" class="st14 st5 st15">17</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1002.7256 162.1047)" class="st14 st5 st15">18</text>
	<g>
		<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 800.8939 240.1015)" class="st14 st5 st15">02</text>
	</g>
	<g>
		<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 802.7841 231.9809)" class="st14 st5 st15">03</text>
	</g>
	<g>
		<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 804.5457 223.7865)" class="st14 st5 st15">04</text>
	</g>
	<g>
		<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 806.1924 215.6759)" class="st14 st5 st15">05</text>
	</g>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 884.9439 221.8435)" class="st14 st5 st15">07</text>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 889.978 214.1868)" class="st14 st5 st15">08</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 978.2245 156.513)" class="st14 st5 st15">15</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1010.9798 163.7625)" class="st14 st5 st15">19</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1019.4763 165.6657)" class="st14 st5 st15">20</text>
	<g>
		<text transform="matrix(0.2181 -0.9759 0.9759 0.2181 799.3957 248.1292)" class="st14 st5 st15">01</text>
	</g>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 894.5974 207.1796)" class="st14 st5 st15">09</text>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 899.2192 200.8566)" class="st14 st5 st15">10</text>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 903.8384 193.7056)" class="st14 st5 st15">11</text>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 908.4601 186.9283)" class="st14 st5 st15">12</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 1027.7279 167.5721)" class="st14 st5 st15">21</text>
	<text transform="matrix(0.5563 -0.831 0.831 0.5563 880.4887 228.588)" class="st14 st5 st15">06</text>
	<text transform="matrix(0.9759 0.2181 -0.2181 0.9759 961.4083 152.8873)" class="st14 st5 st15">13</text>
	<polygon class="st16" points="10.1,153.9 688.4,305.2 755.6,8.3 1363.6,144.1 1348.1,210.5 1345.4,220.9 1336.9,243 1329.4,259.8 
		1323.1,278.5 1309.3,299.6 1285.7,339.6 1248.5,402.3 1233.2,427 1219.9,449.4 1201.4,482.5 1141.9,443 1118.5,426.1 1103.4,417.2 
		1061.9,389.6 1039.4,373.7 1007.8,353.1 973.8,330.3 916.5,291.9 813.7,445.8 813.2,531.9 137.5,531.9 128,482.5 121.8,456 
		115.1,429.6 108,403.7 100.7,379.1 92.5,353.8 84.1,327.8 75,303.3 62.9,271.5 50.7,241.3 40.2,217.8 31.1,196.6 	"/>
</g>
</svg>
        </div>
    </div>

</body>
</html>