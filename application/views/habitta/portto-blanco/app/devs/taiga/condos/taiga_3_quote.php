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

<body ng-controller="PBTaigaQuoteCtrl as taiga">

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


	<div class="modal-dialog" ng-class="taiga.dialogDisplay">
		<div class="backdrop-dialog" ng-click="taiga.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="taiga.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{taiga.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{taiga.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{taiga.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; $ {{taiga.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{taiga.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">25% para propiedades pagadas de contado al 100%</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{taiga.propertyData.totalPlan1}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">20% de descuento para propiedades con financiamiento hasta 60 Meses</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{taiga.propertyData.totalPlan2}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					
						<div class="p-20">
						<h6 class="deep-purple-text futura-light"> 5 años de financiamiento, con 24 meses sin intereses.</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{taiga.month}} y paga la primera mensualidad hasta {{taiga.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{taiga.month + ' ' + taiga.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

				<!-- <div class="header-dialog pb-10">
					<img class="logo-quote" src="media/assets/img/habitta/portto-blanco/logos/logo.svg">
					<img class="logo-habitta-quote right mt-20 mr-20" src="media/assets/img/logos/logo-habitta.svg">
				</div>

				<div class="divider"></div>

				<p>Condominio {{taiga.propertyData.condominium}}</p>
				<p>Numero {{taiga.propertyData.number}}</p>
				<p>Área de {{taiga.propertyData.area}} M&sup2;</p>
				<p>Lote tipo {{taiga.propertyData.type}}</p>
				<p>Precio por M&sup2; de ${{taiga.propertyData.cost_m2}} MN</p>
				<p style="text-decoration: line-through;">Precio del Lote: ${{taiga.propertyData.total}} MN</p>

				<div class="divider"></div>
				<p class="center-align">Promociones de Lanzamiento Digital</p>
				<div class="divider"></div>

				<p>{{taiga.propertyData.discountPlan1}}% de descuento pagando de contado</p>

				<p class="green-text">Precio de Lote: ${{taiga.propertyData.totalPlan1}} MN</p>

				<p>{{taiga.propertyData.discountPlan2}}% de descuento pagando con Financiamiento a 180 Meses</p>

				<p class="green-text">Precio de Lote: ${{taiga.propertyData.totalPlan2}} MN</p>

				<p>Paga la primera Mensualidad hasta Septiembre pagando el 100% de Enganche</p>

				<p class="mt-40"><a href="https://pay.billpocket.com/habitta">¡Apártalo con solo $10,000 MN! Comunícate con un Asesor con el botón de CONTACTO y realiza tu pago de forma Online dando click en el botón APÁRTAR AQUÍ o dando click a este texto, así de simple</a></p> -->

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
					<h1 class="center-align">TAIGA 3</h1>
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

		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1096" style="enable-background:new 0 0 1366 1096;" xml:space="preserve">

			<style type="text/css">
				.st4{fill:#F1CF00;}
				.st9{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.stx8{fill:#162B53;}
				.stx9{fill:#16284B;}
				.stx2{fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="1096" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/taiga/condos/taiga_3.png"></image>
			
			<g>
				<g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[187]" ng-click="taiga.showPropertyData(19, '1')">
						<polygon  class="property pb-sprite-1" points="373.8,381.6 567.5,342.1 581.1,410.6 387.7,449.9"/>
						<g id="C-20">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 459.5253 404.7192)" class="white__fill futura-book fs__6-8__px">408.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 469.8292 393.7034)" class="st4 futura-med fs__8-2__px">01</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 564.6539 370.2159)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 381.9343 409.438)" class="white__fill futura-book fs__6-8__px">12 .00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 470.575 430.6612)" class="white__fill futura-book fs__6-8__px">34.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 457.7943 373.1175)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[188]" ng-click="taiga.showPropertyData(19, '2')">
						<polygon class="property pb-sprite-2" points="401.6,518.2 595,478.7 581.1,410.6 387.7,449.9"/>
						<g id="C-20-2">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 472.8995 472.8881)" class="white__fill futura-book fs__6-8__px">408 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 483.2023 461.8766)" class="st4 futura-med fs__8-2__px">02</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 578.0283 438.3857)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 395.3086 472.1588)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 483.9489 498.8335)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[189]" ng-click="taiga.showPropertyData(19, '3')">
						<polygon class="property pb-sprite-1" points="415.5,586.6 609.1,547.2 595,478.7 401.6,518.2"/>
						<g id="C-20-3">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 486.9966 540.4667)" class="white__fill futura-book fs__6-8__px">408.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 497.3009 529.4548)" class="st4 futura-med fs__8-2__px">03</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 592.1332 503.9152)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 409.4134 543.1454)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 498.0543 566.4106)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[190]" ng-click="taiga.showPropertyData(19, '4')">
						<polygon class="property pb-sprite-2" points="429.3,655.1 623,615.3 609.1,547.2 415.5,586.6"/>
						<g id="C-20-4">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 501.4488 606.1904)" class="white__fill futura-book fs__6-8__px">408.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 511.7524 595.1777)" class="st4 futura-med fs__8-2__px">04</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 606.5858 571.6892)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 423.8662 610.9114)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 512.5061 632.1343)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[191]" ng-click="taiga.showPropertyData(19, '5')">
						<polygon class="property pb-sprite-1" points="443.2,723.2 636.9,683.8 623,615.3 429.3,655.1"/>
						<g id="C-20-5">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 516.2133 677.5849)" class="white__fill futura-book fs__6-8__px">408.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 526.5173 666.5721)" class="st4 futura-med fs__8-2__px">05</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 621.3499 643.0818)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 438.6298 682.3061)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 527.2701 703.5276)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[192]" ng-click="taiga.showPropertyData(19, '6')">
						<polygon class="property pb-sprite-2" points="457.4,791.3 650.7,752.2 636.9,683.8 443.2,723.2"/>
						<g id="C-20-6">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 529.876 745.4384)" class="white__fill futura-book fs__6-8__px">408.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 540.1866 734.4241)" class="st4 futura-med fs__8-2__px">06</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 634.3324 706.8454)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 451.6117 746.0668)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 540.9335 771.382)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[193]" ng-click="taiga.showPropertyData(19, '7')">
						<polygon class="property pb-sprite-1" points="474.8,876.5 668.1,837 650.7,752.2 457.4,791.3"/>
						<g id="C-20-7">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 545.6029 822.7039)" class="white__fill futura-book fs__6-8__px">508.18 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 555.906 811.6982)" class="st4 futura-med fs__8-2__px">07</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 649.3783 784.118)" class="white__fill futura-book fs__6-8__px">14.95</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 466.658 823.3394)" class="white__fill futura-book fs__6-8__px">14.95</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 557.5367 856.8012)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[194]" ng-click="taiga.showPropertyData(19, '8')">
						<polygon class="property pb-sprite-2" points="492.1,961.7 685.4,922.2 668.1,837 474.8,876.5"/>
						<g id="C-20-8">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 562.8144 906.6315)" class="white__fill futura-book fs__6-8__px">508.18 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 573.1174 895.6188)" class="st4 futura-med fs__8-2__px">08</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 666.5895 868.0377)" class="white__fill futura-book fs__6-8__px">14.95</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 483.8699 907.2598)" class="white__fill futura-book fs__6-8__px">14.95</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 574.7475 940.7209)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[195]" ng-click="taiga.showPropertyData(19, '9')">
						<polygon class="property pb-sprite-1" points="517.4,1086.5 702.8,1007.1 685.4,922.2 492.1,961.7"/>
						<g id="C-20-9">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 578.9401 996.091)" class="white__fill futura-book fs__6-8__px">627.24 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 589.243 985.0844)" class="st4 futura-med fs__8-2__px">09</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 684.0756 956.1341)" class="white__fill futura-book fs__6-8__px">14.95</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 504.5271 1005.1933)" class="white__fill futura-book fs__6-8__px">21.95</text>
							<text transform="matrix(0.9257 -0.3782 0.3782 0.9257 595.1593 1050.9701)" class="white__fill futura-book fs__6-8__px">34.71</text>
						</g>
					</g>
					<line class="st9" x1="581.1" y1="410.6" x2="387.7" y2="449.9"/>
					<line class="st9" x1="567.3" y1="342.1" x2="373.9" y2="381.5"/>
					<line class="st9" x1="595" y1="478.7" x2="401.6" y2="518.2"/>
					<line class="st9" x1="609.1" y1="547.2" x2="415.5" y2="586.6"/>
					<line class="st9" x1="623" y1="615.3" x2="429.3" y2="655.1"/>
					<line class="st9" x1="636.9" y1="683.8" x2="443.2" y2="723.2"/>
					<line class="st9" x1="650.7" y1="752.2" x2="457.4" y2="791.3"/>
					<line class="st9" x1="668.1" y1="837" x2="474.8" y2="876.5"/>
					<line class="st9" x1="685.4" y1="922.2" x2="492.1" y2="961.7"/>
					<g class="property__active" ng-class="taiga.inmovablesClassList[196]" ng-click="taiga.showPropertyData(19, '10')">
						<polygon class="property pb-sprite-2" points="781.6,752.5 717.6,779.7 717.6,781.2 759,983.4 861.5,939.2"/>
						<g id="C-20-10">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 769.9806 847.1791)" class="white__fill futura-book fs__6-8__px">546.17 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 783.0129 854.7736)" class="st4 futura-med fs__8-2__px">10</text>
							<text transform="matrix(0.9171 -0.3987 0.3987 0.9171 800.3331 959.0184)" class="white__fill futura-book fs__6-8__px">19.21</text>
							<text transform="matrix(0.9012 -0.4333 0.4333 0.9012 741.5361 779.7947)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.1704 0.9854 -0.9854 0.1704 738.2174 868.86)" class="white__fill futura-book fs__6-8__px">33.73</text>
							<text transform="matrix(0.4453 0.8954 -0.8954 0.4453 800.4784 838.4957)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[197]" ng-click="taiga.showPropertyData(19, '11')">
						<polygon class="property pb-sprite-1" points="845.8,725 781.6,752.5 861.5,939.2 925.6,911.8"/>
						<g id="C-20-11">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 841.0991 814.863)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 854.1245 822.451)" class="st4 futura-med fs__8-2__px">11</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 885.7229 920.476)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9022 -0.4313 0.4313 0.9022 806.7401 751.1556)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 872.0233 805.7601)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[198]" ng-click="taiga.showPropertyData(19, '12')">
						<polygon class="property pb-sprite-2" points="910,697.7 845.8,725 925.6,911.8 989.7,884.5"/>
						<g id="C-20-12">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 906.3892 790.695)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 919.4217 798.2894)" class="st4 futura-med fs__8-2__px">12</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 951.0208 896.3152)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9292 -0.3697 0.3697 0.9292 872.8854 722.4036)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 937.3137 781.5909)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[199]" ng-click="taiga.showPropertyData(19, '13')">
						<polygon class="property pb-sprite-1" points="974,670.2 910,697.7 989.7,884.5 1053.7,857.1"/>
						<g id="C-20-13">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 968.4561 763.4753)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 981.4897 771.0649)" class="st4 futura-med fs__8-2__px">13</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 1013.0882 869.0894)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9292 -0.3697 0.3697 0.9292 934.9524 695.1805)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 999.3791 754.3653)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[200]" ng-click="taiga.showPropertyData(19, '14')">
						<polygon class="property pb-sprite-2" points="1037.9,642.9 974,670.2 1053.7,857.1 1117.7,829.6"/>
						<g id="C-20-14">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1032.8918 736.2502)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1045.9163 743.8387)" class="st4 futura-med fs__8-2__px">14</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 1077.517 841.8643)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9292 -0.3697 0.3697 0.9292 999.3886 667.9554)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 1063.8097 727.1485)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[201]" ng-click="taiga.showPropertyData(19, '15')">
						<polygon class="property pb-sprite-1" points="1107.5,613.1 1037.9,642.9 1117.7,829.6 1187.4,800"/>
						<g id="C-20-15">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1102.8141 706.3743)" class="white__fill futura-book fs__6-8__px">455.00 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1115.8468 713.9633)" class="st4 futura-med fs__8-2__px">15</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 1147.4474 811.989)" class="white__fill futura-book fs__6-8__px">13.00</text>
							<text transform="matrix(0.9292 -0.3697 0.3697 0.9292 1069.3116 638.0861)" class="white__fill futura-book fs__6-8__px">13.00</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 1133.7396 697.2713)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[202]" ng-click="taiga.showPropertyData(19, '16')">
						<polygon class="property pb-sprite-2" points="1181.9,581.3 1107.5,613.1 1187.4,800 1261.8,768.1"/>
						<g id="C-20-16">
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1176.3075 676.4849)" class="white__fill futura-book fs__6-8__px">488.08 m2</text>
							<text transform="matrix(0.4188 0.9081 -0.9081 0.4188 1189.3424 684.0739)" class="st4 futura-med fs__8-2__px">16</text>
							<text transform="matrix(0.9023 -0.4311 0.4311 0.9023 1220.9413 782.0994)" class="white__fill futura-book fs__6-8__px">13.95</text>
							<text transform="matrix(0.9292 -0.3697 0.3697 0.9292 1142.8058 608.1896)" class="white__fill futura-book fs__6-8__px">13.95</text>
							<text transform="matrix(0.3987 0.9171 -0.9171 0.3987 1207.2333 667.3834)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<line class="st9" x1="1181.9" y1="581.3" x2="1261.8" y2="768.1"/>
					<line class="st9" x1="781.6" y1="752.5" x2="861.5" y2="939.2"/>
					<line class="st9" x1="845.8" y1="725" x2="925.6" y2="911.8"/>
					<line class="st9" x1="910" y1="697.7" x2="989.7" y2="884.5"/>
					<line class="st9" x1="974" y1="670.2" x2="1053.7" y2="857.1"/>
					<line class="st9" x1="1037.9" y1="642.9" x2="1117.7" y2="829.6"/>
					<line class="st9" x1="1107.5" y1="613.1" x2="1187.4" y2="800"/>
					<g class="property__active" ng-class="taiga.inmovablesClassList[203]" ng-click="taiga.showPropertyData(19, '17')">
						<polygon class="property pb-sprite-1" points="1108.1,430.8 1097.3,499.9 1298.3,530.8 1309,461.7"/>
						<g id="A-01-2">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1188.7837 485.9737)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1202.4596 477.9942)" class="st4 futura-med fs__8-2__px">17</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1200.8474 452.882)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1190.55 511.9319)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1298.0096 486.7621)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1106.9916 455.1061)" class="white__fill futura-book fs__6-8__px">12.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[204]" ng-click="taiga.showPropertyData(19, '18')">
						<polygon class="property pb-sprite-2" points="1118.8,362.1 1108.1,430.8 1309,461.7 1319.6,393"/>
						<g id="A-01-3">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1198.3917 417.2367)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1212.0756 409.2576)" class="st4 futura-med fs__8-2__px">18</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1210.4554 384.1396)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1308.2993 418.0251)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1118.6946 383.1474)" class="white__fill futura-book fs__6-8__px">12.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[205]" ng-click="taiga.showPropertyData(19, '19')">
						<polygon class="property pb-sprite-1" points="1129.4,293.2 1118.8,362.1 1319.6,393 1330.2,323.9"/>
						<g id="A-01-4">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1208.8177 348.247)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1222.4962 340.2754)" class="st4 futura-med fs__8-2__px">19</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1220.8739 315.1569)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1317.3591 346.9075)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1127.7521 316.6114)" class="white__fill futura-book fs__6-8__px">12.00</text>
						</g>
					</g>
					<g id="class="property__active" ng-class="taiga.inmovablesClassList[206]" ng-click="taiga.showPropertyData(19, '20')">
						<path class="property pb-sprite-2" d="M1139.9,224.2l-10.5,69.1l200.8,30.7c0,0,10.3-68.9,10.6-68.8S1139.9,224.2,1139.9,224.2z"/>
						<g id="A-01-5">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1219.7306 280.1766)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1233.4073 272.2043)" class="st4 futura-med fs__8-2__px">20</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1231.7858 247.0864)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(-0.1511 0.9885 -0.9885 -0.1511 1329.7528 277.2072)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(-0.1511 0.9885 -0.9885 -0.1511 1137.9883 249.4177)" class="white__fill futura-book fs__6-8__px">12.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[207]" ng-click="taiga.showPropertyData(19, '21')">
						<polygon class="property pb-sprite-1" points="1150.7,155.4 1139.9,224.2 1340.8,255.2 1351.5,186.4"/>
						<g id="A-01-6">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1229.9192 212.4031)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1243.5959 204.4243)" class="st4 futura-med fs__8-2__px">21</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1241.9739 179.3138)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(-0.1632 0.9866 -0.9866 -0.1632 1339.8828 209.2684)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(-0.1632 0.9866 -0.9866 -0.1632 1148.4681 179.1331)" class="white__fill futura-book fs__6-8__px">12.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[208]" ng-click="taiga.showPropertyData(19, '22')">
						<polygon class="property pb-sprite-2" points="1162.5,78 1150.7,155.4 1351.5,186.4 1362.4,115.3 1198.3,90.1 1185.1,86.8 1171.2,82 
			"/>
						<g id="A-01-7">
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1242.9797 139.3155)" class="white__fill futura-book fs__6-8__px">435.64 m2</text>
							<text transform="matrix(0.9857 0.1683 -0.1683 0.9857 1256.6566 131.3358)" class="st4 futura-med fs__8-2__px">22</text>
							<text transform="matrix(0.9872 0.1597 -0.1597 0.9872 1255.0364 106.2236)" class="white__fill futura-book fs__6-8__px">27.50</text>
							<text transform="matrix(0.9573 0.2892 -0.2892 0.9573 1172.9465 91.932)" class="white__fill futura-book fs__6-8__px">7.61</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1351.5193 140.0533)" class="white__fill futura-book fs__6-8__px">12.70</text>
							<text transform="matrix(-0.1757 0.9844 -0.9844 -0.1757 1160.5081 107.4924)" class="white__fill futura-book fs__6-8__px">13.46</text>
						</g>
					</g>
					<line class="st9" x1="1097.3" y1="499.9" x2="1298.3" y2="530.8"/>
					<line class="st9" x1="1108.1" y1="430.8" x2="1309" y2="461.7"/>
					<line class="st9" x1="1118.8" y1="362.1" x2="1319.6" y2="393"/>
					<line class="st9" x1="1129.4" y1="293.2" x2="1330.2" y2="323.9"/>
					<line class="st9" x1="1139.9" y1="224.2" x2="1340.8" y2="255.2"/>
					<line class="st9" x1="1150.7" y1="155.4" x2="1351.5" y2="186.4"/>
					<g class="property__active" ng-class="taiga.inmovablesClassList[209]" ng-click="taiga.showPropertyData(19, '23')">
						<path class="property pb-sprite-1" d="M1108.4,35.6l-28.6,185.8l-80.6,0.3l-1-209.1l71.6-0.3c0,0,7.9,1.2,8,1.2c0.1,0,7,2.2,7,2.2
							l5.6,2.7l4.9,3.2l5.4,4.7L1108.4,35.6z"/>
						<g id="E-59">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 1033.1007 219.4997)" class="white__fill futura-book fs__6-8__px">13.89</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 1035.6422 21.8054)" class="white__fill futura-book fs__6-8__px">11.75</text>
							<text transform="matrix(0.8705 0.4921 -0.4921 0.8705 1073.8595 21.8123)" class="white__fill futura-book fs__6-8__px">7.76</text>
							<text transform="matrix(1 1.047193e-03 -1.047193e-03 1 1025.9537 119.9772)" class="white__fill futura-book fs__6-8__px">592.65 m2</text>
							<text transform="matrix(1 1.047193e-03 -1.047193e-03 1 1038.104 109.8264)" class="st4 futura-med fs__8-2__px">23</text>
							<text transform="matrix(-2.792161e-02 -0.9996 0.9996 -2.792161e-02 1009.7116 121.7714)" class="white__fill futura-book fs__6-8__px">36.00</text>
							<text transform="matrix(0.1487 -0.9889 0.9889 0.1487 1092.0376 122.1244)" class="white__fill futura-book fs__6-8__px">32.88</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[210]" ng-click="taiga.showPropertyData(19, '24')">
						<polygon class="property pb-sprite-2" points="997.8,13.2 998.8,222.3 917.4,222.6 916.8,13.5"/>
						<g id="E-59-2">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 947.2684 219.4997)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 949.8089 21.8049)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 941.3615 119.4934)" class="white__fill futura-book fs__6-8__px">504.00 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 953.7374 109.61)" class="st4 futura-med fs__8-2__px">24</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 920.8625 101.3526)" class="white__fill futura-book fs__6-8__px">36.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[211]" ng-click="taiga.showPropertyData(19, '25')">
						<polygon class="property pb-sprite-1" points="916.6,13.2 917.6,222.3 836.2,222.6 835.5,13.5"/>
						<g id="E-59-3">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 868.9451 219.5001)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 871.4857 21.8063)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 861.6786 119.4938)" class="white__fill futura-book fs__6-8__px">504.00 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 874.0526 109.6094)" class="st4 futura-med fs__8-2__px">25</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 841.1778 101.3523)" class="white__fill futura-book fs__6-8__px">36.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[212]" ng-click="taiga.showPropertyData(19, '26')">
						<polygon class="property pb-sprite-2" points="835.4,13.2 836.4,222.3 755,222.6 754.3,13.5"/>
						<g id="E-59-4">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 789.1794 219.4998)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 791.7141 21.8057)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 781.9146 119.4931)" class="white__fill futura-book fs__6-8__px">504.00 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 794.2817 109.6095)" class="st4 futura-med fs__8-2__px">26</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 761.4119 101.3522)" class="white__fill futura-book fs__6-8__px">36.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[213]" ng-click="taiga.showPropertyData(19, '27')">
						<polygon class="property pb-sprite-1" points="631.4,14.2 673.7,222.9 755,222.6 754.3,13.5"/>
						<g id="E-59-5">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 702.5955 219.5001)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 690.3528 21.8054)" class="white__fill futura-book fs__6-8__px">21.87</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 695.3299 119.4932)" class="white__fill futura-book fs__6-8__px">633.36 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 707.7029 109.6088)" class="st4 futura-med fs__8-2__px">27</text>
							<text transform="matrix(0.1824 0.9832 -0.9832 0.1824 652.9998 102.0416)" class="white__fill futura-book fs__6-8__px">36.71</text>
						</g>
					</g>
					<line class="st9" x1="999.1" y1="221.7" x2="998.2" y2="12.6"/>
					<line class="st9" x1="917.6" y1="222.3" x2="916.6" y2="13.2"/>
					<line class="st9" x1="836.2" y1="222.6" x2="835.5" y2="13.5"/>
					<line class="st9" x1="755" y1="222.6" x2="754.3" y2="13.5"/>
					<g class="property__active" ng-class="taiga.inmovablesClassList[214]" ng-click="taiga.showPropertyData(19, '28')">
						<polygon class="property pb-sprite-2" points="378.4,91.2 392.3,159.3 591.4,118.8 577.5,50.7"/>
						<g id="C-20-18">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 467.3958 114.0166)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 477.6997 103.0008)" class="st4 futura-med fs__8-2__px">28</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 572.5256 79.514)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 389.8126 118.7367)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 465.6732 82.4104)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[215]" ng-click="taiga.showPropertyData(19, '29')">
						<polygon class="property pb-sprite-1" points="406.2,227.7 605.3,187.1 591.4,118.8 392.3,159.3"/>
						<g id="C-20-19">
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 482.8689 181.573)" class="white__fill futura-book fs__6-8__px">420.00 m2</text>
							<text transform="matrix(0.9778 -0.2095 0.2095 0.9778 493.1728 170.5662)" class="st4 futura-med fs__8-2__px">29</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 587.9996 147.0772)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 405.2784 186.2986)" class="white__fill futura-book fs__6-8__px">12.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 493.9264 207.5162)" class="white__fill futura-book fs__6-8__px">35.00</text>
							<text transform="matrix(0.9722 -0.2343 0.2343 0.9722 481.1468 149.9752)" class="white__fill futura-book fs__6-8__px">35.00</text>
						</g>
					</g>
					<line class="st9" x1="392.3" y1="159.3" x2="591.4" y2="118.8"/>
					<line class="st9" x1="577.5" y1="50.7" x2="378.4" y2="91.2"/>
					<g class="property__active" ng-class="taiga.inmovablesClassList[216]" ng-click="taiga.showPropertyData(19, '30')">
						<polygon class="property pb-sprite-2" points="621.3,307.2 656.3,480.3 714.6,480 714,288.3"/>
						<g id="E-59-6">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 673.7574 476.2693)" class="white__fill futura-book fs__6-8__px">10.05</text>
							<text transform="matrix(0.9851 -0.1721 0.1721 0.9851 662.4548 306.1957)" class="white__fill futura-book fs__6-8__px">16.32</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 658.3079 381.8474)" class="white__fill futura-book fs__6-8__px">414.06 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 670.6752 371.956)" class="st4 futura-med fs__8-2__px">30</text>
							<text transform="matrix(0.1656 0.9862 -0.9862 0.1656 636.7449 364.2941)" class="white__fill futura-book fs__6-8__px">30.41</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[217]" ng-click="taiga.showPropertyData(19, '31')">
						<polygon class="property pb-sprite-1" points="741.5,282.6 714,288.3 714.6,480 796,479.7 795.4,282.3"/>
						<g id="E-59-7">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 748.0543 476.2704)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 760.7169 289.7275)" class="white__fill futura-book fs__6-8__px">9.08</text>
							<text transform="matrix(0.9707 -0.2402 0.2402 0.9707 721.0259 296.3098)" class="white__fill futura-book fs__6-8__px">5.02</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 740.7864 381.8462)" class="white__fill futura-book fs__6-8__px">473.58 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 753.1614 371.9555)" class="st4 futura-med fs__8-2__px">31</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 720.2927 363.7055)" class="white__fill futura-book fs__6-8__px">33.02</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[218]" ng-click="taiga.showPropertyData(19, '32')">
						<polygon class="property pb-sprite-2" points="876.5,281.9 877.2,479.2 795.8,479.6 795.2,282.1"/>
						<g id="E-59-8">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 827.3972 476.2713)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 829.9393 289.7289)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 820.1303 381.8474)" class="white__fill futura-book fs__6-8__px">476.00 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 832.5044 371.9561)" class="st4 futura-med fs__8-2__px">32</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 799.6382 363.7069)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[219]" ng-click="taiga.showPropertyData(19, '33')">
						<polygon class="property pb-sprite-1" points="957.8,281.6 958.8,479.1 877.4,479.4 876.7,282"/>
						<g id="E-59-9">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 911.1953 476.2715)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 913.7276 289.7267)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 903.9274 381.8472)" class="white__fill futura-book fs__6-8__px">476.00 m2</text>
							<text transform="matrix(0.9998 1.999599e-02 -1.999599e-02 0.9998 916.3024 371.9564)" class="st4 futura-med fs__8-2__px">33</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 883.4263 363.6988)" class="white__fill futura-book fs__6-8__px">34.00</text>
						</g>
					</g>
					<g class="property__active" ng-class="taiga.inmovablesClassList[220]" ng-click="taiga.showPropertyData(19, '34')">
						<polygon class="property pb-sprite-2" points="1070.4,281.3 1040,478.8 958.8,479.1 957.8,281.6"/>
						<g id="E-59-10">
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 990.5234 476.2707)" class="white__fill futura-book fs__6-8__px">14.00</text>
							<text transform="matrix(1 -8.726538e-03 8.726538e-03 1 1003.2984 289.7278)" class="white__fill futura-book fs__6-8__px">19.38</text>
							<text transform="matrix(0.9999 1.134440e-02 -1.134440e-02 0.9999 993.4875 382.0417)" class="white__fill futura-book fs__6-8__px">567.39 m2</text>
							<text transform="matrix(0.9999 1.134440e-02 -1.134440e-02 0.9999 1005.7378 372.0121)" class="st4 futura-med fs__8-2__px">34</text>
							<text transform="matrix(-3.996804e-02 0.9992 -0.9992 -3.996804e-02 962.765 363.6989)" class="white__fill futura-book fs__6-8__px">34.00</text>
							<text transform="matrix(-0.1595 0.9872 -0.9872 -0.1595 1049.9491 363.5772)" class="white__fill futura-book fs__6-8__px">34.42</text>
						</g>
					</g>
					<line class="st9" x1="957.8" y1="281.6" x2="958.8" y2="479.1"/>
					<line class="st9" x1="876.7" y1="282" x2="877.2" y2="479.2"/>
					<line class="st9" x1="795.2" y1="282.1" x2="796" y2="479.7"/>
					<line class="st9" x1="714.3" y1="288.3" x2="714.9" y2="480"/>
					<polygon class="stx8" points="437.7,274.1 440.9,291.1 463.9,286.5 460.3,269.4"/>
					<g id="caseta_de_acceso">
						<path class="stx9" d="M464.9,311.5c0.6,2.4-0.5,4.7-2.6,5.2l1.7,6.4l2.8-6.3l2.8-6.3l-5.6-4.7l-5.6-4.7l1.7,6.4
							C462.1,307.4,464.2,309,464.9,311.5"/>
						<text transform="matrix(-0.2905 -1.122 0.9817 -0.1903 460.1345 319.7435)" class="stx9 futura-med fs__3-6__px">ACCESO</text>
						<path class="stx9" d="M443.3,247.9c0.6,2.3,2.6,3.8,4.6,3.5l1.6,6l-5.3-4.3l-5.3-4.3l2.5-5.9l2.5-5.9l1.6,6
							C443.8,243.4,442.7,245.6,443.3,247.9"/>
						<text transform="matrix(-0.2999 -1.1298 0.9798 -0.2 453.6313 254.2701)" class="stx9 futura-med fs__3-6__px">SALIDA</text>
					</g>
					<g id="caseta_de_acceso-2">
						<path class="st9" d="M447.4,281.1l-1.1-1c-0.2-0.2-0.2-0.5-0.1-0.7l0.5-0.5c0.9-0.6,1.6-1.5,1.9-2.5l0.1-0.4l2.5-0.7l0.4,0.4
							c0.7,0.7,1.7,1.1,2.7,1.2l0.8,0.2c0.2,0.1,0.4,0.3,0.3,0.5c0,0,0,0,0,0l-0.5,1.5L447.4,281.1z"/>
						<polygon class="st9" points="455.2,280.6 447.8,282.6 447.4,281.1 454.8,279.2"/>
						<path class="st9" d="M455.4,280.6c0.4,1.6-1,3.1-3.2,3.7c-2.2,0.6-4.2-0.1-4.6-1.6C451.5,281.6,451.5,281.6,455.4,280.6z"/>
						<path class="st9" d="M451.2,277.2c0,0.1,0,1.7-0.4,1.8c-0.5,0.1-1.3-1.2-1.3-1.3c0.1-0.5,0.5-0.9,1.1-0.8
							C450.9,276.9,451.1,277,451.2,277.2z"/>
					</g>
					<polyline class="stx2" points="1362.4,115.3 1198.3,90.1 1185.1,86.8 1171.2,82 1162.5,78 1155.5,74.8 1150.7,72.1 1143.3,67.5 
						1136.8,62.8 1129.8,57.5 1117.9,46.7 1108.4,35.6 1100.7,26.3 1095.2,21.6 1090.4,18.4 1084.8,15.7 1077.7,13.5 1069.7,12.3 
						361.6,14.2 361.6,1.8 304.1,2.5 295.9,4.4 517.4,1086.5 1261.8,768.1 1362.4,115.3"/>
					<line class="st9" x1="656.3" y1="480.3" x2="1040" y2="478.8"/>
				</g>
			</g>
		</svg>
	
	</div>

</body>
</html>