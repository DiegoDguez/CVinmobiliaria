<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco - </title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBParamoQuoteCtrl as paramo">

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


	<div class="modal-dialog" ng-class="paramo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="paramo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco STRIP CENTER A</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{paramo.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{paramo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; $ {{paramo.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio de ${{paramo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>
<!-- 
					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{paramo.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{paramo.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{paramo.month}} y paga la primera mensualidad hasta {{paramo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{paramo.month + ' ' + paramo.year}}</p>
					</div>
					
					<div class="divider"></div> -->

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://pay.billpocket.com/habitta">APÁRTAR AQUÍ</a>
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
					<h1 class="center-align">PÁRAMO STRIP CENTER Locales A</h1>
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

		<svg version="1.1" id="STRIP_CENTER_PÁRAMO_A" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 554.9" style="enable-background:new 0 0 1366 554.9;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st1{fill:#FFBF00;}
	.st2{font-family:'CenturyGothic-Bold';}
	.st3{font-size:15.9346px;}
	.st4{fill:#FFFFFF;}
	.st5{font-family:'CenturyGothic';}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st7{font-size:15.9347px;}
	.st8{fill:none;stroke:#FFFFFF;stroke-width:1.3276;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st9{fill:none;stroke:#002856;stroke-width:1.9914;stroke-miterlimit:10;}
	.st10{fill:#002856;}
	.st11{font-size:5.3116px;}
	.st12{font-size:5.3115px;}
</style>
<image style="overflow:visible;" width="1366" height="555" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/condos/paramo_4.jpg" >
</image>
<g id="MACHOTE">
</g>
<g id="BASE">
	<g>
		<g>
			<defs>
				<polyline id="SVGID_1_" points="2140.6,1725.8 2140.6,1491.3 2687.7,1493.8 3109.3,1212.7 3253.8,1413.8 2773.1,1739.8 				"/>
			</defs>
			<clipPath id="SVGID_2_">
				<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
			</clipPath>
		</g>
	</g>
</g>
<g id="A-1_1_" class="property__active" ng-class="paramo.inmovablesClassList[311]" ng-click="paramo.showPropertyData(47, '1A')">
	<polyline id="A-L1_1_" class="property pb-sprite-1"  points="53.8,450.7 53.8,294.7 129.9,296.5 126.1,452.5 53.8,450.7 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 87.1278 392.4859)" class="st1 st2 st3">LOTE 1</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 75.9164 446.0121)" class="st4 st5 st3">7.00</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 75.0355 310.791)" class="st4 st5 st3">7.32</text>
	<text transform="matrix(0 -1 1 0 69.3789 390.9199)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 104.6926 404.4762)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">6.96 m2</tspan></text>
</g>
<g id="A-2_1_"  class="property__active" ng-class="paramo.inmovablesClassList[312]" ng-click="paramo.showPropertyData(47, '2A')">
	<polyline id="A-L2_1_" class="property pb-sprite-2" points="198.9,454.2 126.1,452.5 129.9,296.5 202.6,298.3 198.9,454.2 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 159.9194 394.25)" class="st1 st2 st3">LOTE 2</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 148.4521 447.7749)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 149.4659 312.5904)" class="st4 st5 st3">7.00</text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 141.7136 393.0158)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 179.1263 406.2829)"><tspan x="0" y="0" class="st4 st5 st3">105.00</tspan><tspan x="48.5" y="0" class="st4 st5 st3"> m2</tspan></text>
</g>
<g id="A-3_1_"  class="property__active" ng-class="paramo.inmovablesClassList[313]" ng-click="paramo.showPropertyData(47, '3A')">
	<polyline id="A-L3_1_" class="property pb-sprite-1"  points="271.6,456 198.9,454.2 202.6,298.3 275.4,300.1 271.6,456 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 232.7101 396.0098)" class="st1 st2 st3">LOTE 3</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 221.244 449.546)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 224.5294 314.4057)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 214.4837 394.7819)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 251.9179 408.0476)"><tspan x="0" y="0" class="st4 st5 st3">105.00 m2</tspan><tspan x="76.6" y="0" class="st4 st5 st3"> </tspan></text>
</g>
<g id="A-4_1_" class="property__active" ng-class="paramo.inmovablesClassList[314]" ng-click="paramo.showPropertyData(47, '4A')">
	<polyline id="A-L4_1_" class="property pb-sprite-2" points="344.4,457.8 271.6,456 275.4,300.1 348.2,301.8 344.4,457.8 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 305.501 397.7657)" class="st1 st2 st3">LOTE 4</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 294.0341 451.3125)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 297.3206 316.1674)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 287.2513 396.549)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 324.7066 409.8087)"><tspan x="0" y="0" class="st4 st5 st3">105.00 m2</tspan><tspan x="76.6" y="0" class="st4 st5 st3"> </tspan></text>
</g>
<g id="A-5_1_" class="property__active" ng-class="paramo.inmovablesClassList[315]" ng-click="paramo.showPropertyData(47, '5A')">
	<polyline id="A-L5_1_" class="property pb-sprite-1"  points="417.2,459.5 344.4,457.8 348.2,301.8 421,303.6 417.2,459.5 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 378.2897 399.5278)" class="st1 st2 st3">LOTE 5</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 366.8242 453.0801)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 370.1095 317.9237)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 360.0209 398.3141)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 397.4981 411.5773)"><tspan x="0" y="0" class="st4 st5 st3">105.00 m2</tspan><tspan x="76.6" y="0" class="st4 st5 st3"> </tspan></text>
</g>
<g id="A-6_1_" class="property__active" ng-class="paramo.inmovablesClassList[316]" ng-click="paramo.showPropertyData(47, '6A')">
	<polyline id="A-L6_1_" class="property pb-sprite-2" points="490,461.3 417.2,459.5 421,303.6 493.8,305.3 490,461.3 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 451.0809 401.2886)" class="st1 st2 st3">LOTE 6</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 439.6117 454.8525)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 442.8987 319.6834)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 432.7883 400.0898)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 470.2879 413.3371)"><tspan x="0" y="0" class="st4 st5 st3">105.00</tspan><tspan x="48.5" y="0" class="st4 st5 st3"> m2</tspan></text>
</g>
<g id="A-7_1_" class="property__active" ng-class="paramo.inmovablesClassList[317]" ng-click="paramo.showPropertyData(47, '7A')">
	<polyline id="A-L7_1_" class="property pb-sprite-1"  points="562.8,463.1 490,461.3 493.8,305.3 566.6,307.1 562.8,463.1 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 523.8687 403.0497)" class="st1 st2 st3">LOTE 7</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 512.4042 456.6182)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 515.689 321.4456)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 505.5575 401.8549)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 543.077 415.1041)"><tspan x="0" y="0" class="st4 st5 st3">105.00</tspan><tspan x="48.5" y="0" class="st4 st5 st3"> m2</tspan></text>
</g>
<g id="A-8_1_" class="property__active" ng-class="paramo.inmovablesClassList[318]" ng-click="paramo.showPropertyData(47, '8A')">
	<polyline id="A-L8_1_" class="property pb-sprite-2" points="562.8,463.1 566.6,307.1 639.4,308.9 635.6,464.9 562.8,463.1 	"/>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 596.6609 404.8115)" class="st1 st2 st3">LOTE 8</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 585.1913 458.3866)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 588.4724 323.2072)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 578.326 403.623)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 615.8652 416.8707)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
</g>
<g id="A-9_1_" class="property__active" ng-class="paramo.inmovablesClassList[319]" ng-click="paramo.showPropertyData(47, '9A')">
	<polyline id="A-L9_1_" class="property pb-sprite-1"  points="635.6,464.9 639.4,308.9 653.6,309.2 665.8,309.2 678.1,308.8 690.3,307.8 702.4,306.2 
		714.5,304.2 726.5,301.7 738.3,298.6 780.4,448.9 766.2,452.6 751.9,455.8 737.5,458.6 723,460.9 708.4,462.7 693.8,464.1 
		679.2,464.9 664.5,465.3 649.8,465.2 635.6,464.9 	"/>
	<text transform="matrix(-2.443003e-02 0.9997 -0.9997 -2.443003e-02 703.2119 362.1308)" class="st1 st2 st3">LOTE 9</text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 639.3948 461.2756)"><tspan x="0" y="0" class="st4 st5 st3">1.3</tspan><tspan x="21.9" y="0" class="st4 st5 st3">7</tspan></text>
	<text transform="matrix(0.9997 2.443003e-02 -2.443003e-02 0.9997 641.6384 325.7724)"><tspan x="0" y="0" class="st4 st5 st3">1.3</tspan><tspan x="21.9" y="0" class="st4 st5 st3">6</tspan></text>
	<text transform="matrix(0.9923 -0.1236 0.1236 0.9923 684.2109 324.2916)"><tspan x="0" y="0" class="st4 st5 st3">8.2</tspan><tspan x="21.9" y="0" class="st4 st5 st3">4</tspan></text>
	<text transform="matrix(0.9923 -0.1236 0.1236 0.9923 696.9857 458.9759)"><tspan x="0" y="0" class="st4 st5 st3">12.7</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(2.443003e-02 -0.9997 0.9997 2.443003e-02 651.0907 405.3904)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.2689 0.9632 -0.9632 0.2689 739.4261 360.3801)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(-2.443003e-02 0.9997 -0.9997 -2.443003e-02 688.5944 350.3317)"><tspan x="0" y="0" class="st4 st5 st3">17</tspan><tspan x="17.6" y="0" class="st4 st5 st3">7.57 m2</tspan></text>
</g>
<g id="A-10_1_" class="property__active" ng-class="paramo.inmovablesClassList[320]" ng-click="paramo.showPropertyData(47, '10A')">
	<polyline id="A-L10_1_" class="property pb-sprite-2" points="913.6,386.2 901.3,394.4 888.7,402.3 875.9,409.6 862.9,416.6 849.6,423.1 
		836.1,429.2 822.5,434.8 808.6,439.9 794.6,444.6 780.4,448.9 738.3,298.6 749.3,295.3 760.1,291.6 770.7,287.4 781.2,282.8 
		791.5,277.9 801.5,272.5 811.4,266.7 821,260.5 913.6,386.2 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 812.3611 330.5974)" class="st1 st2 st3">LOTE 10</text>
	<text transform="matrix(0.9085 -0.4179 0.4179 0.9085 774.9245 302.9523)"><tspan x="0" y="0" class="st4 st5 st7">8.7</tspan><tspan x="21.9" y="0" class="st4 st5 st7">9</tspan></text>
	<text transform="matrix(0.9056 -0.4242 0.4242 0.9056 830.9492 426.1501)"><tspan x="0" y="0" class="st4 st5 st7">14.2</tspan><tspan x="30.8" y="0" class="st4 st5 st7">1</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 843.9454 318.0598)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">3</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 792.0029 331.1215)"><tspan x="0" y="0" class="st4 st5 st3">17</tspan><tspan x="17.6" y="0" class="st4 st5 st3">2.53 m2</tspan></text>
</g>
<g id="A-11_1_" class="property__active" ng-class="paramo.inmovablesClassList[321]" ng-click="paramo.showPropertyData(47, '11A')">
	<polyline id="A-L11_1_" class="property pb-sprite-1"  points="913.6,386.2 821,260.5 830.2,254.1 879.8,217.6 972.3,343.2 925.9,377.4 913.6,386.2 	
		"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 880.0191 281.2712)" class="st1 st2 st3">LOTE 11</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 858.6017 252.1847)"><tspan x="0" y="0" class="st4 st5 st3">5.9</tspan><tspan x="21.9" y="0" class="st4 st5 st3">3</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 944.0977 361.1423)"><tspan x="0" y="0" class="st4 st5 st3">5.5</tspan><tspan x="21.9" y="0" class="st4 st5 st3">4</tspan></text>
	<text transform="matrix(0.8201 -0.5721 0.5721 0.8201 833.0963 270.4107)"><tspan x="0" y="0" class="st4 st5 st7">1.0</tspan><tspan x="21.9" y="0" class="st4 st5 st7">7</tspan></text>
	<text transform="matrix(0.8121 -0.5835 0.5835 0.8121 913.5661 381.9082)"><tspan x="0" y="0" class="st4 st5 st3">1.4</tspan><tspan x="21.9" y="0" class="st4 st5 st3">6</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 902.6606 274.9998)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 863.9099 286.3298)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.01 m2</tspan></text>
</g>
<g id="A-12_1_" class="property__active" ng-class="paramo.inmovablesClassList[322]" ng-click="paramo.showPropertyData(47, '12A')">
	<polyline id="A-L12_1_" class="property pb-sprite-2" points="972.3,343.2 879.8,217.6 938.4,174.4 1031,300 972.3,343.2 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 940.0882 237.0483)" class="st1 st2 st3">LOTE 12</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 906.9389 216.9515)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 987.121 325.8442)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 961.2953 231.8256)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 922.6234 243.2262)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
</g>
<g id="A-13_1_" class="property__active" ng-class="paramo.inmovablesClassList[323]" ng-click="paramo.showPropertyData(47, '13A')">
	<polyline id="A-L13_1_" class="property pb-sprite-1"  points="1031,300 938.4,174.4 997.1,131.2 1089.6,256.9 1031,300 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 998.2379 192.9048)" class="st1 st2 st3">LOTE 13</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 965.5715 173.7814)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1045.7516 282.6731)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1019.926 188.6532)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 981.2585 200.0542)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
</g>
<g id="A-14_1_" class="property__active" ng-class="paramo.inmovablesClassList[324]" ng-click="paramo.showPropertyData(47, '14A')">
	<polyline id="A-L14_1_" class="property pb-sprite-2" points="1089.6,256.9 997.1,131.2 1055.7,88 1148.2,213.7 1089.6,256.9 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1056.8755 149.7322)" class="st1 st2 st3">LOTE 14</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1024.2076 130.611)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1104.3827 239.5016)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1078.5585 145.4843)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1039.8884 156.8824)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
</g>
<g id="A-15_1_" class="property__active" ng-class="paramo.inmovablesClassList[325]" ng-click="paramo.showPropertyData(47, '15A')">
	<polyline id="A-L15_1_" class="property pb-sprite-1"  points="1206.9,170.5 1148.2,213.7 1055.7,88 1114.3,44.9 1206.9,170.5 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1115.507 106.5616)" class="st1 st2 st3">LOTE 15</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1082.8408 87.4404)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1163.0137 196.3313)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1137.1932 102.3113)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1098.5216 113.713)" class="st4 st5 st3">105.00 m2</text>
</g>
<g class="property__active" ng-class="paramo.inmovablesClassList[326]" ng-click="paramo.showPropertyData(47, '16A')">
	<polyline id="A-L16_1_" class="property pb-sprite-2" points="1206.9,170.5 1114.3,44.9 1173,1.7 1265.5,127.3 1206.9,170.5 	"/>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1174.1389 63.3919)" class="st1 st2 st3">LOTE 16</text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1141.4708 44.2686)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.8059 -0.592 0.592 0.8059 1221.6506 153.158)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="21.9" y="0" class="st4 st5 st3">0</tspan></text>
	<text transform="matrix(0.592 0.8059 -0.8059 0.592 1195.8246 59.1397)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="30.8" y="0" class="st4 st5 st3">0</tspan></text>
	<text id="A-16_1_" transform="matrix(0.592 0.8059 -0.8059 0.592 1157.1508 70.5392)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="17.6" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
</g>
<g id="DIVISIONES_1_">
	<line class="st8" x1="738.3" y1="298.6" x2="780.4" y2="448.9"/>
	<line class="st8" x1="1114.3" y1="44.9" x2="1206.9" y2="170.5"/>
	<line class="st8" x1="1055.7" y1="88" x2="1148.2" y2="213.7"/>
	<line class="st8" x1="997.1" y1="131.2" x2="1089.6" y2="256.9"/>
	<line class="st8" x1="938.4" y1="174.4" x2="1031" y2="300"/>
	<line class="st8" x1="879.8" y1="217.6" x2="972.3" y2="343.2"/>
	<line class="st8" x1="821" y1="260.5" x2="913.7" y2="386.4"/>
	<line class="st8" x1="129.9" y1="296.5" x2="126.1" y2="452.5"/>
	<line class="st8" x1="202.6" y1="298.3" x2="198.9" y2="454.2"/>
	<line class="st8" x1="275.4" y1="300.1" x2="271.6" y2="456"/>
	<line class="st8" x1="348.2" y1="301.8" x2="344.4" y2="457.8"/>
	<line class="st8" x1="421" y1="303.6" x2="417.2" y2="459.5"/>
	<line class="st8" x1="493.8" y1="305.3" x2="490" y2="461.3"/>
	<line class="st8" x1="566.6" y1="307.1" x2="562.8" y2="463.1"/>
	<line class="st8" x1="639.4" y1="308.9" x2="635.6" y2="464.9"/>
</g>
<path class="st9" d="M53.8,450.7v-156l612,14.5c0,0,77.1,9.1,180.3-66.9L1173,1.7l92.5,125.6L940.1,366.9c0,0-138.1,108.9-268.6,98
	L53.8,450.7z"/>
<text transform="matrix(0.6113 0.7914 -0.7914 0.6113 1259.8077 133.0998)" class="st10 st5 st11">CONTENEDORES</text>
<text transform="matrix(-1.936004e-02 -0.9998 0.9998 -1.936004e-02 59.2922 486.4416)" class="st10 st5 st12">MEDIDORES</text>
</svg>

    </div>


</body>
</html>