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
					<h1 class="center-align">Selva 4</h1>
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
			y="0px" viewBox="0 0 1366 1644" style="enable-background:new 0 0 1366 1644;" xml:space="preserve">

			<style type="text/css">
				.stx11{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-miterlimit:10;}
				.stx14{fill:#2E2B50;}
				.stx15{fill:#2D2A4C;}
				.stx18{fill:none;stroke:#FFFFFF;stroke-width:0.15;stroke-miterlimit:10;}
				.stx19{fill:none;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
				.stx21{font-size:40.5869px;}
				.stx22{fill:none;stroke:#000000;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="1644" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/selva/condos/selva-4.jpg"></image>

			<g id="isla_A_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[334]" ng-click="selva.showPropertyData(30, '1')">
					<path id="A_L01" class="property pb-sprite-1" d="M1118.6,288.93l193.87,0c0,0,16.67,17.99,16.94,18.08c0.27,0.09,19.09,14.79,19.09,14.79
						l8.04,5.94l5.3,6.21l3.56,8.04l1.46,5.48v38.08H1118.6V288.93z"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.47 374.4871)" class="white__fill futura-light fs__12px">4.83</text>
					<text transform="matrix(0.7719 0.6434 -0.6405 0.7679 1313.2609 307.1183)" class="white__fill futura-light fs__12px">7.54</text>
					<text transform="matrix(0.5812 0.8198 -0.8159 0.5781 1345.8651 331.0406)" class="white__fill futura-light fs__12px">4.94</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2625 342.7479)" class="white__fill futura-light fs__12px">474.60 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5063 331.487)" class="mustard__fill futura-book fs__14px">01</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4457 375.3786)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4471 299.7144)" class="white__fill futura-light fs__12px">28.13</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 1130.0018 342.7753)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[335]" ng-click="selva.showPropertyData(30, '2')">
					<path id="A_L02" class="property pb-sprite-2" d="M1118.6,482.27c1.31,0,248.25,0,248.25,0v-96.71H1118.6V482.27z"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4724 441.0591)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0558 441.0591)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.262 439.4106)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5059 428.1516)" class="mustard__fill futura-book fs__14px">02</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4486 472.0408)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[336]" ng-click="selva.showPropertyData(30, '3')">
					<rect id="A_L03" x="1118.6" y="482.27" class="property pb-sprite-1" width="248.25" height="96.87"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4728 541.5363)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0543 541.5362)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.262 539.8917)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5059 528.6328)" class="mustard__fill futura-book fs__14px">03</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4478 572.5273)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[337]" ng-click="selva.showPropertyData(30, '4')">
					<polygon id="A_L04" class="property pb-sprite-2" points="1118.6,676.32 1366.85,676.14 1366.85,579.14 1118.6,579.14"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4722 641.3454)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0557 641.3474)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2644 639.6932)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5083 628.4362)" class="mustard__fill futura-book fs__14px">04</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4476 672.3301)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[338]" ng-click="selva.showPropertyData(30, '5')">
					<polygon id="A_L05" class="property pb-sprite-1" points="1118.6,772.15 1366.85,772.15 1366.85,676.14 1118.6,676.32"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4706 735.7619)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0541 735.7618)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2618 734.1196)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5077 722.8567)" class="mustard__fill futura-book fs__14px">05</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4469 766.7502)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[339]" ng-click="selva.showPropertyData(30, '6')">
					<rect id="A_L06" x="1118.6" y="772.15" class="property pb-sprite-2" width="248.25" height="96.49"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4722 831.1354)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0537 831.1354)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2638 829.4991)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5057 818.242)" class="mustard__fill futura-book fs__14px">06</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4473 862.1331)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[340]" ng-click="selva.showPropertyData(30, '7')">
					<rect id="A_L07" x="1118.6" y="868.64" class="property pb-sprite-1" width="248.25" height="97.27"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.475 930.6086)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0585 930.6105)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2615 928.9724)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5073 917.7134)" class="mustard__fill futura-book fs__14px">07</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4454 961.6078)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[341]" ng-click="selva.showPropertyData(30, '8')">
					<rect id="A_L08" x="1118.6" y="965.92" class="property pb-sprite-2" width="248.25" height="97.53"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4729 1026.5349)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0563 1026.5348)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2615 1024.8988)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5054 1013.6398)" class="mustard__fill futura-book fs__14px">08</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4471 1057.528)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[342]" ng-click="selva.showPropertyData(30, '9')">
					<rect id="A_L09" x="1118.6" y="1063.45" class="property pb-sprite-1" width="248.25" height="96.23"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0574 1122.6232)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4739 1122.6232)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2629 1120.9854)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.507 1109.7263)" class="mustard__fill futura-book fs__14px">09</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4467 1155.6472)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[343]" ng-click="selva.showPropertyData(30, '10')">
					<path id="A_L10" class="property pb-sprite-2" d="M1118.6,1256.69c0,0,248.25,1.83,248.25,0c0-1.83,0-97.01,0-97.01H1118.6V1256.69z"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0581 1216.5728)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4747 1216.5768)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.264 1214.9371)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5079 1203.6781)" class="mustard__fill futura-book fs__14px">10</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4465 1249.6122)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[344]" ng-click="selva.showPropertyData(30, '11')">
					<path id="A_L11" class="property pb-sprite-1" d="M1118.6,1353.47c0,0,247.52,1.43,248.25,0s0-96.77,0-96.77H1118.6V1353.47z"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0524 1313.587)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4708 1313.587)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2643 1311.9592)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5082 1300.7002)" class="mustard__fill futura-book fs__14px">11</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4452 1346.6201)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[345]" ng-click="selva.showPropertyData(30, '12')">
					<rect id="A_L12" x="1118.6" y="1353.47" class="property pb-sprite-2" width="248.25" height="96.83"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0592 1408.8647)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4698 1408.8688)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2627 1407.2391)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5085 1395.9821)" class="mustard__fill futura-book fs__14px">12</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4475 1441.9054)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[346]" ng-click="selva.showPropertyData(30, '13')">
					<polygon id="A_L13" class="property pb-sprite-1" points="1118.6,1547.11 1367.17,1547.11 1366.85,1450.3 1118.6,1450.3"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0549 1508.1896)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4714 1508.1896)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2609 1506.5601)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5067 1495.301)" class="mustard__fill futura-book fs__14px">13</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4479 1541.2219)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[347]" ng-click="selva.showPropertyData(30, '14')">
					<polygon id="A_L14" class="property pb-sprite-2" points="1118.49,1644 1366.85,1644 1367.17,1547.11 1118.6,1547.11"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1131.0548 1604.9069)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1361.4713 1604.9031)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1215.2642 1603.2638)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 1233.5061 1592.0087)" class="mustard__fill futura-book fs__14px">14</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 1224.4487 1637.9388)" class="white__fill futura-light fs__12px">36.00</text>
				</g>
				<g>
					<line class="stx11" x1="1118.6" y1="385.55" x2="1366.85" y2="385.55"/>
					<line class="stx11" x1="1118.6" y1="482.27" x2="1366.85" y2="482.27"/>
					<line class="stx11" x1="1118.6" y1="579.14" x2="1366.85" y2="579.14"/>
					<line class="stx11" x1="1118.6" y1="676.32" x2="1366.85" y2="676.14"/>
					<line class="stx11" x1="1118.6" y1="772.15" x2="1366.85" y2="772.15"/>
					<line class="stx11" x1="1118.6" y1="868.64" x2="1366.85" y2="868.64"/>
					<line class="stx11" x1="1118.6" y1="965.92" x2="1366.85" y2="965.92"/>
					<line class="stx11" x1="1118.6" y1="1063.45" x2="1366.85" y2="1063.45"/>
					<line class="stx11" x1="1118.6" y1="1159.68" x2="1366.85" y2="1159.68"/>
					<line class="stx11" x1="1118.6" y1="1256.69" x2="1366.85" y2="1256.69"/>
					<line class="stx11" x1="1118.6" y1="1353.47" x2="1366.85" y2="1353.47"/>
					<line class="stx11" x1="1118.6" y1="1450.3" x2="1366.85" y2="1450.3"/>
					<line class="stx11" x1="1118.6" y1="1547.11" x2="1367.17" y2="1547.11"/>
					<line class="stx11" x1="1118.6" y1="288.93" x2="1312.47" y2="288.2"/>
				</g>
			</g>
			<g id="isla_B_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[348]" ng-click="selva.showPropertyData(30, '15')">
					<polygon id="B_L15" class="property pb-sprite-1" points="933.77,1395.07 1047.12,1395.07 1047.15,1644 933.77,1644"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 980.0204 1632.105)" class="white__fill futura-light fs__12px">16.43</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 987.3637 1485.8931)" class="white__fill futura-light fs__12px">591.48 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 998.6227 1504.1371)" class="mustard__fill futura-book fs__14px">15</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 941.6799 1494.7662)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 1032.639 1494.7654)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 981.8012 1409.9938)" class="white__fill futura-light fs__12px">16.43</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[349]" ng-click="selva.showPropertyData(30, '16')">
					<rect id="B_L16" x="829.59" y="1395.07" class="property pb-sprite-2" width="104.18" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 871.9063 1632.1036)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 879.2478 1485.8923)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 890.5087 1504.1362)" class="mustard__fill futura-book fs__14px">16</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 835.6389 1494.7656)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 873.6893 1409.99)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[350]" ng-click="selva.showPropertyData(30, '17')">
					<rect id="B_L17" x="726.15" y="1395.07" class="property pb-sprite-1" width="103.84" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 769.4077 1632.1074)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 776.751 1485.8932)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 788.01 1504.139)" class="mustard__fill futura-book fs__14px">17</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 733.1388 1494.7648)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 771.1868 1409.9915)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[351]" ng-click="selva.showPropertyData(30, '18')">
					<rect id="B_L18" x="622.37" y="1395.07" class="property pb-sprite-2" width="103.38" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 665.9519 1632.1066)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 673.2953 1485.8928)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 684.5543 1504.1367)" class="mustard__fill futura-book fs__14px">18</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 629.6855 1494.7648)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 667.733 1409.9916)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[352]" ng-click="selva.showPropertyData(30, '19')">
					<rect id="B_L19" x="518.63" y="1395.07" class="property pb-sprite-1" width="103.74" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 561.3555 1632.1063)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 568.7009 1485.8923)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 579.9598 1504.1362)" class="mustard__fill futura-book fs__14px">19</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 525.0878 1494.7656)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 563.1329 1409.9905)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[353]" ng-click="selva.showPropertyData(30, '20')">
					<rect id="B_L20" x="415.07" y="1395.07" class="property pb-sprite-2" width="103.56" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 457.9252 1632.1093)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 465.2705 1485.894)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 476.5295 1504.1379)" class="mustard__fill futura-book fs__14px">20</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 421.66 1494.7677)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 459.7006 1409.9924)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[354]" ng-click="selva.showPropertyData(30, '21')">
					<rect id="B_L21" x="311.87" y="1395.07" class="property pb-sprite-1" width="103.2" height="248.93"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 353.6783 1632.1045)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 361.0237 1485.8909)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 372.2827 1504.1367)" class="mustard__fill futura-book fs__14px">21</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 317.4138 1494.765)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 355.4539 1409.9926)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[355]" ng-click="selva.showPropertyData(30, '22')">
					<path id="B_L22" class="property pb-sprite-2" d="M207.4,1395.07c1.1-0.66,104.47,0,104.47,0V1644H207.4V1395.07z"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 249.0214 1632.1047)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 256.3668 1485.8903)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 267.6258 1504.1361)" class="mustard__fill futura-book fs__14px">22</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 212.7555 1494.7659)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 250.7952 1409.9917)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[356]" ng-click="selva.showPropertyData(30, '23')">
					<polygon id="B_L23" class="property pb-sprite-1" points="104.75,1394.77 207.4,1395.07 207.4,1644 104.75,1644"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 146.9719 1632.1051)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 154.3154 1485.8947)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 165.5744 1504.1385)" class="mustard__fill futura-book fs__14px">23</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 110.7086 1494.7654)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 148.7438 1409.9921)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[357]" ng-click="selva.showPropertyData(30, '24')">
					<rect id="B_L24" x="0.09" y="1394.77" class="property pb-sprite-2" width="104.66" height="249.23"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 44.5084 1632.1086)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 51.8538 1485.8937)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 63.1128 1504.1376)" class="mustard__fill futura-book fs__14px">24</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 8.2417 1494.7664)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 46.2784 1409.9955)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g>
					<line class="stx11" x1="933.77" y1="1395.07" x2="933.77" y2="1644"/>
					<line class="stx11" x1="829.59" y1="1395.07" x2="829.59" y2="1644"/>
					<line class="stx11" x1="725.75" y1="1395.07" x2="725.75" y2="1644"/>
					<line class="stx11" x1="622.37" y1="1395.07" x2="622.37" y2="1644"/>
					<line class="stx11" x1="518.63" y1="1395.07" x2="518.63" y2="1644"/>
					<line class="stx11" x1="415.07" y1="1395.07" x2="415.07" y2="1644"/>
					<line class="stx11" x1="311.87" y1="1395.07" x2="311.87" y2="1644"/>
					<line class="stx11" x1="207.4" y1="1395.07" x2="207.4" y2="1644"/>
					<line class="stx11" x1="104.75" y1="1394.77" x2="104.75" y2="1644"/>
				</g>
			</g>
			<g id="isla_C_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[358]" ng-click="selva.showPropertyData(30, '25')">
					<path id="C_L25" class="property pb-sprite-1" d="M0.09,1323.54c1.64,0,250.05,0,250.05,0l-0.41-97.01H0.09V1323.54z"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9288 1281.0471)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7232 1279.4054)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9691 1268.1426)" class="mustard__fill futura-book fs__14px">25</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8979 1318.179)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4637 1279.422)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[359]" ng-click="selva.showPropertyData(30, '26')">
					<polygon id="C_L26" class="property pb-sprite-2" points="0.09,1129.11 250.14,1129.11 249.73,1226.53 0.09,1226.53"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9329 1184.609)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7229 1182.9575)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9688 1171.7006)" class="mustard__fill futura-book fs__14px">26</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8967 1221.7335)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.458 1182.9785)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[360]" ng-click="selva.showPropertyData(30, '27')">
					<rect id="C_L27" x="0.09" y="1032.5" class="property pb-sprite-1" width="250.05" height="96.61"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9324 1086.2238)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7215 1084.58)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9674 1073.323)" class="mustard__fill futura-book fs__14px">27</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8975 1123.3525)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.465 1084.6033)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[361]" ng-click="selva.showPropertyData(30, '28')">
					<path id="C_L28" class="property pb-sprite-2" d="M0.09,935.26c4.02,2.16,250.05,0,250.05,0s2.74,97.24,0,97.24c-2.74,0-250.05,0-250.05,0V935.26z
		"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9301 991.5397)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.723 989.9036)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9688 978.6465)" class="mustard__fill futura-book fs__14px">28</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8984 1028.6825)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4618 989.9174)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[362]" ng-click="selva.showPropertyData(30, '29')">
					<rect id="C_L29" x="0.09" y="840.07" class="property pb-sprite-1" width="250.05" height="95.2"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9326 892.7794)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7209 891.1393)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9649 879.8784)" class="mustard__fill futura-book fs__14px">29</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8975 929.9128)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4619 891.1516)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[363]" ng-click="selva.showPropertyData(30, '30')">
					<polygon id="C_L30" class="property pb-sprite-2" points="0,743.26 250.14,743.26 250.14,840.07 0.09,840.07"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9307 799.4645)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7216 797.8379)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9655 786.5789)" class="mustard__fill futura-book fs__14px">30</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8971 836.6061)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4641 797.8408)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[364]" ng-click="selva.showPropertyData(30, '31')">
					<polygon id="C_L31" class="property pb-sprite-1" points="0.14,646.47 250.14,646.47 250.14,743.26 0,743.26"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9336 700.7628)" class="white__fill futura-light fs__12px">14.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7233 699.1244)" class="white__fill futura-light fs__12px">504.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9672 687.8674)" class="mustard__fill futura-book fs__14px">31</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.9001 737.897)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4624 699.1453)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[365]" ng-click="selva.showPropertyData(30, '32')">
					<rect id="C_L32" x="0.14" y="542.06" class="property pb-sprite-2" width="250" height="104.4"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9299 604.8405)" class="white__fill futura-light fs__12px">15.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7232 603.2039)" class="white__fill futura-light fs__12px">540.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9671 591.9449)" class="mustard__fill futura-book fs__14px">32</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8984 641.973)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4639 603.2192)" class="white__fill futura-light fs__12px">15.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[366]" ng-click="selva.showPropertyData(30, '33')">
					<polygon id="C_L33" class="property pb-sprite-1" points="0.14,440.29 250.14,406.65 250.14,542.06 0.14,542.06"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 243.9319 482.353)" class="white__fill futura-light fs__12px">19.65</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 97.7222 496.7285)" class="white__fill futura-light fs__12px">616.74 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 115.9661 485.4735)" class="mustard__fill futura-book fs__14px">33</text>
					<text transform="matrix(0.9882 -0.1174 0.1183 0.993 107.344 438.8633)" class="white__fill futura-light fs__12px">36.35</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 106.8994 535.5021)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 12.4601 496.7581)" class="white__fill futura-light fs__12px">14.61</text>
				</g>
				<g>
					<line class="stx11" x1="249.73" y1="1226.53" x2="0.09" y2="1226.53"/>
					<line class="stx11" x1="250.14" y1="1129.11" x2="0.09" y2="1129.11"/>
					<line class="stx11" x1="250.14" y1="1032.5" x2="0.09" y2="1032.5"/>
					<line class="stx11" x1="250.14" y1="935.26" x2="0.09" y2="935.26"/>
					<line class="stx11" x1="250.14" y1="840.07" x2="0.09" y2="840.07"/>
					<line class="stx11" x1="250.14" y1="743.26" x2="0" y2="743.26"/>
					<line class="stx11" x1="250.14" y1="646.47" x2="0.14" y2="646.47"/>
					<line class="stx11" x1="250.14" y1="540.22" x2="0.14" y2="540.22"/>
					<line class="stx11" x1="0.14" y1="440.29" x2="250.14" y2="406.65"/>
				</g>
			</g>
			<g id="isla_D_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[367]" ng-click="selva.showPropertyData(30, '34')">
					<polygon id="D_L34" class="property pb-sprite-2" points="271.37,142.08 368.63,133.73 403.93,385.46 307.12,398.61"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 331.2361 233.0345)" class="white__fill futura-light fs__12px">519.48 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 345.2529 249.2581)" class="mustard__fill futura-book fs__14px">34</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 289.5729 255.379)" class="white__fill futura-light fs__12px">37.49</text>
					<text transform="matrix(0.9993 -0.1059 0.1051 0.9945 316.8163 149.4262)" class="white__fill futura-light fs__12px">14.02</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 349.1893 387.8723)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[368]" ng-click="selva.showPropertyData(30, '35')">
					<polygon id="D_L35" class="property pb-sprite-1" points="465.02,125.19 499.31,372.22 403.93,385.46 368.63,133.73"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 427.6701 222.819)" class="white__fill futura-light fs__12px">508.71 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 441.6907 239.0421)" class="mustard__fill futura-book fs__14px">35</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 388.7531 244.1494)" class="white__fill futura-light fs__12px">36.72</text>
					<text transform="matrix(1.004 -0.0419 0.0414 0.9991 410.3083 140.4893)" class="white__fill futura-light fs__12px">14.03</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 445.6289 377.6597)" class="white__fill futura-light fs__12px">14.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[369]" ng-click="selva.showPropertyData(30, '36')">
					<polygon id="D_L36" class="property pb-sprite-2" points="574.25,109.75 608.86,356.6 499.31,372.22 465.02,125.19"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 527.0571 206.4302)" class="white__fill futura-light fs__12px">576.00 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 541.0756 222.6516)" class="mustard__fill futura-book fs__14px">36</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 485.3974 228.7752)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9929 -0.155 0.154 0.9881 513.2708 128.9683)" class="white__fill futura-light fs__12px">16.0</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 545.01 361.2701)" class="white__fill futura-light fs__12px">16.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[370]" ng-click="selva.showPropertyData(30, '37')">
					<polygon id="D_L37" class="property pb-sprite-1" points="683.74,94.32 719.18,341.64 608.86,356.6 574.25,109.75"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 639.5666 190.2797)" class="white__fill futura-light fs__12px">576.00 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 653.5831 206.5014)" class="mustard__fill futura-book fs__14px">37</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 597.9052 212.624)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9929 -0.155 0.154 0.9881 625.7821 112.8182)" class="white__fill futura-light fs__12px">16.00</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 657.5225 345.1212)" class="white__fill futura-light fs__12px">16.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[371]" ng-click="selva.showPropertyData(30, '38')">
					<polygon id="D_L38" class="property pb-sprite-2" points="794.06,78.98 828.04,325.49 719.18,341.64 683.74,94.32"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 746.9647 175.9982)" class="white__fill futura-light fs__12px">576.00 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 760.9811 192.2199)" class="mustard__fill futura-book fs__14px">38</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 705.3038 198.3435)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9929 -0.155 0.154 0.9881 733.1808 98.5399)" class="white__fill futura-light fs__12px">16.00</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 764.9174 330.8385)" class="white__fill futura-light fs__12px">16.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[372]" ng-click="selva.showPropertyData(30, '39')">
					<polygon id="D_L39" class="property pb-sprite-1" points="902.92,63.64 937.26,310.58 828.04,325.49 794.06,78.98"/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 855.092 160.3837)" class="white__fill futura-light fs__12px">576.00 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 869.1104 176.6051)" class="mustard__fill futura-book fs__14px">39</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 813.432 182.7293)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9929 -0.155 0.154 0.9881 841.306 82.9244)" class="white__fill futura-light fs__12px">16.00</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 873.0467 315.2279)" class="white__fill futura-light fs__12px">16.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[373]" ng-click="selva.showPropertyData(30, '40')">
					<path id="D_L40" class="property pb-sprite-2" d="M1012.15,48.29c-0.37,1.1,35.07,246.58,35.07,246.58l-109.95,15.71L902.92,63.64L1012.15,48.29z"
						/>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 964.0167 146.0535)" class="white__fill futura-light fs__12px">576.00 m2</text>
					<text transform="matrix(0.1547 0.983 -0.9878 0.1556 978.0334 162.2771)" class="mustard__fill futura-book fs__14px">40</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 1015.874 146.8495)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.1322 0.9863 -0.9911 0.1331 922.3537 168.4038)" class="white__fill futura-light fs__12px">36.00</text>
					<text transform="matrix(0.9929 -0.155 0.154 0.9881 950.2288 68.5959)" class="white__fill futura-light fs__12px">16.00</text>
					<text transform="matrix(0.9966 -0.1291 0.1282 0.9918 981.9716 300.8968)" class="white__fill futura-light fs__12px">16.00</text>
				</g>
				<g>
					<line class="stx11" x1="368.63" y1="133.73" x2="403.93" y2="385.46"/>
					<line class="stx11" x1="465.02" y1="125.19" x2="499.31" y2="372.22"/>
					<line class="stx11" x1="574.25" y1="109.75" x2="608.86" y2="356.6"/>
					<line class="stx11" x1="683.74" y1="94.32" x2="719.18" y2="341.64"/>
					<line class="stx11" x1="794.06" y1="78.98" x2="828.04" y2="325.49"/>
					<line class="stx11" x1="902.92" y1="63.64" x2="937.26" y2="310.58"/>
					<line class="stx11" x1="307.12" y1="398.61" x2="271.37" y2="142.08"/>
					<line class="stx11" x1="1047.21" y1="294.87" x2="1012.15" y2="48.29"/>
				</g>
			</g>
			<g id="isla_E_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[374]" ng-click="selva.showPropertyData(30, '41')">
					<polygon id="E_L41" class="property pb-sprite-1" points="570.19,775.66 812.26,775.71 812.19,693.24 570.14,692.49"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 808.9928 741.85)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 662.7786 740.212)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 681.0245 728.953)" class="mustard__fill futura-book fs__14px">41</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 671.9636 772.8484)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 577.5212 740.229)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[375]" ng-click="selva.showPropertyData(30, '42')">
					<polygon id="E_L42" class="property pb-sprite-2" points="570.14,692.49 812.19,693.24 812.05,610.21 570.41,610.03"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 808.9908 657.469)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 662.7817 655.8326)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 681.0257 644.5697)" class="mustard__fill futura-book fs__14px">42</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 671.962 688.4655)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 577.5226 655.846)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[376]" ng-click="selva.showPropertyData(30, '43')">
					<polygon id="E_L43" class="property pb-sprite-1" points="570.41,610.03 812.05,610.21 812.33,527.01 570.14,527.01"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 808.9912 576.295)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 662.7817 574.6523)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 681.0256 563.3914)" class="mustard__fill futura-book fs__14px">43</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 671.9631 607.2856)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 577.5165 574.6779)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[377]" ng-click="selva.showPropertyData(30, '44')">
					<polygon id="E_L44" class="property pb-sprite-2" points="570.14,433.86 812.19,433.86 812.33,527.01 570.14,527.01"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 808.9904 489.6952)" class="white__fill futura-light fs__12px">13.45</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 662.7808 488.0483)" class="white__fill futura-light fs__12px">470.75 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 681.0247 476.7874)" class="mustard__fill futura-book fs__14px">44</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 671.9598 520.684)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 671.9613 445.0198)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(-2.542416e-03 -1.0049 1 -2.230017e-03 577.5181 488.076)" class="white__fill futura-light fs__12px">13.45</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[378]" ng-click="selva.showPropertyData(30, '45')">
					<polygon id="E_L45" class="property pb-sprite-2" points="1047.12,775.78 1047.33,692.56 812.19,693.24 812.26,775.71"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1045.1536 741.8502)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 904.1042 740.2107)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 922.3481 728.9517)" class="mustard__fill futura-book fs__14px">45</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 913.2881 772.8496)" class="white__fill futura-light fs__12px">34.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[379]" ng-click="selva.showPropertyData(30, '46')">
					<polygon id="E_L46" class="property pb-sprite-1" points="1047.05,610.23 812.05,610.21 812.19,693.24 1047.33,692.56"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1045.1516 657.4711)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 904.1035 655.8273)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 922.3474 644.5703)" class="mustard__fill futura-book fs__14px">46</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 913.2865 688.4686)" class="white__fill futura-light fs__12px">34.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[380]" ng-click="selva.showPropertyData(30, '47')">
					<polygon id="E_L47" class="property pb-sprite-2" points="1047.33,527.01 812.33,527.01 812.05,610.21 1047.05,610.23"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1045.1521 576.2972)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 904.1035 574.6472)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 922.3474 563.3921)" class="mustard__fill futura-book fs__14px">47</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 913.2876 607.2869)" class="white__fill futura-light fs__12px">34.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[381]" ng-click="selva.showPropertyData(30, '48')">
					<polygon id="E_L48" class="property pb-sprite-1" points="1047.33,433.86 812.19,433.86 812.33,527.01 1047.33,527.01"/>
					<text transform="matrix(-7.466368e-03 -1.0049 1 -7.120034e-03 1045.157 489.6953)" class="white__fill futura-light fs__12px">13.45</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 904.1045 488.0509)" class="white__fill futura-light fs__12px">457.30 m2</text>
					<text transform="matrix(0.9951 3.562544e-03 -3.440014e-03 1 922.3503 476.788)" class="mustard__fill futura-book fs__14px">48</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 913.2883 520.6852)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(0.9951 1.293682e-03 -9.999996e-04 1 913.2878 445.0211)" class="white__fill futura-light fs__12px">34.00</text>
				</g>
				<g>
					<line class="stx11" x1="812.19" y1="433.86" x2="812.26" y2="775.71"/>
					<line class="stx11" x1="570.14" y1="692.49" x2="1047.33" y2="692.56"/>
					<line class="stx11" x1="1047.05" y1="610.23" x2="570.41" y2="610.03"/>
					<line class="stx11" x1="570.14" y1="527.01" x2="1047.33" y2="527.01"/>
					<line class="stx11" x1="570.14" y1="434.32" x2="1047.33" y2="434.32"/>
				</g>
			</g>
			<g id="isla_F_1_">
				<g class="property__active" ng-class="selva.inmovablesClassList[382]" ng-click="selva.showPropertyData(30, '49')">
					<polygon id="F_L49" class="property pb-sprite-2" points="352.51,846.47 435.07,846.62 435.16,1088.48 352.51,1088.48"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 385.7 941.33)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 396.959 959.5758)" class="mustard__fill futura-book fs__14px">49</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 354.8093 950.2065)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 421.6589 950.2069)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 385.9193 857.4944)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[383]" ng-click="selva.showPropertyData(30, '50')">
					<polygon id="F_L50" class="property pb-sprite-1" points="518.36,846.53 518.36,1088.48 435.16,1088.48 435.07,846.62"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 471.9681 941.3279)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 483.2271 959.5738)" class="mustard__fill futura-book fs__14px">50</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 507.9305 950.2072)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 472.1893 857.4949)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[384]" ng-click="selva.showPropertyData(30, '51')">
					<rect id="F_L51" x="518.36" y="846.53" class="property pb-sprite-2" width="81.92" height="241.94"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 549.7831 941.33)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 561.0421 959.5758)" class="mustard__fill futura-book fs__14px">51</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 585.743 950.205)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 550.0062 857.4933)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[385]" ng-click="selva.showPropertyData(30, '52')">
					<polygon id="F_L52" class="property pb-sprite-1" points="683.56,1088.48 683.56,846.47 600.27,846.53 600.27,1088.48"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 635.8598 941.3311)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 647.1188 959.5751)" class="mustard__fill futura-book fs__14px">52</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 671.8232 950.209)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 636.0887 857.4943)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[386]" ng-click="selva.showPropertyData(30, '53')">
					<rect id="F_L53" x="683.56" y="846.47" class="property pb-sprite-2" width="83.84" height="242.01"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 720.3525 941.3307)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 731.6115 959.5747)" class="mustard__fill futura-book fs__14px">53</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 756.3174 950.2076)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 720.5794 857.4934)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[387]" ng-click="selva.showPropertyData(30, '54')">
					<polygon id="F_L54" class="property pb-sprite-1" points="850.14,846.53 767.4,846.47 767.4,1088.48 850.14,1089.36"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 800.9019 941.3286)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 812.1609 959.5725)" class="mustard__fill futura-book fs__14px">54</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 836.8624 950.2081)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 801.1326 857.4947)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[388]" ng-click="selva.showPropertyData(30, '55')">
					<polygon id="F_L55" class="property pb-sprite-2" points="932.33,1088.48 932.33,846.47 850.14,846.53 850.14,1089.36"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 883.6407 941.33)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 894.9016 959.5759)" class="mustard__fill futura-book fs__14px">55</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 919.6008 950.2068)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 883.8694 857.4943)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[389]" ng-click="selva.showPropertyData(30, '56')">
					<polygon id="F_L56" class="property pb-sprite-1" points="1015.62,1088.48 1015.62,846.53 932.33,846.47 932.33,1088.48"/>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 969.6705 941.331)" class="white__fill futura-light fs__12px">420.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 980.9295 959.575)" class="mustard__fill futura-book fs__14px">56</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 1005.6262 950.2069)" class="white__fill futura-light fs__12px">35.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 969.8972 857.4935)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[390]" ng-click="selva.showPropertyData(30, '57')">
					<polygon id="F_L57" class="property pb-sprite-1" points="352.69,1323.54 435.25,1323.54 435.16,1088.48 352.51,1088.48"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 384.1452 1321.4789)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 385.6985 1175.2649)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 396.9574 1193.5088)" class="mustard__fill futura-book fs__14px">57</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 354.8138 1184.1382)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 421.6595 1184.1387)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 385.9216 1099.359)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[391]" ng-click="selva.showPropertyData(30, '58')">
					<polygon id="F_L58" class="property pb-sprite-2" points="518.36,1323.54 518.36,1088.48 435.16,1088.48 435.25,1323.54"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 470.4169 1321.4766)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 471.9685 1175.2628)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 483.2275 1193.5068)" class="mustard__fill futura-book fs__14px">58</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 507.9291 1184.1371)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 472.1896 1099.3595)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[392]" ng-click="selva.showPropertyData(30, '59')">
					<rect id="F_L59" x="518.36" y="1088.48" class="property pb-sprite-1" width="81.92" height="235.07"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 548.2274 1321.4766)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 549.7835 1175.2649)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 561.0425 1193.5088)" class="mustard__fill futura-book fs__14px">59</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 585.7397 1184.1367)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 550.0045 1099.3599)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[393]" ng-click="selva.showPropertyData(30, '60')">
					<rect id="F_L60" x="600.27" y="1088.48" class="property pb-sprite-2" width="83.29" height="235.07"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 634.3098 1321.4795)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 635.8602 1175.2642)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 647.1192 1193.51)" class="mustard__fill futura-book fs__14px">60</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 671.8218 1184.1407)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 636.0851 1099.3569)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[394]" ng-click="selva.showPropertyData(30, '61')">
					<rect id="F_L61" x="683.56" y="1088.48" class="property pb-sprite-1" width="83.84" height="235.07"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 718.8021 1321.4768)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 720.353 1175.2618)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 731.6139 1193.5057)" class="mustard__fill futura-book fs__14px">61</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 756.3141 1184.1393)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 720.5797 1099.36)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[395]" ng-click="selva.showPropertyData(30, '62')">
					<polygon id="F_L62" class="property pb-sprite-2" points="850.14,1323.54 850.14,1089.36 767.4,1088.48 767.4,1323.54"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 799.3491 1321.476)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 800.9023 1175.2616)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 812.1613 1193.5074)" class="mustard__fill futura-book fs__14px">62</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 836.8591 1184.1398)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 801.129 1099.3613)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[396]" ng-click="selva.showPropertyData(30, '63')">
					<polygon id="F_L63" class="property pb-sprite-1" points="932.33,1323.54 932.33,1088.48 850.14,1089.36 850.14,1323.54"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 882.0875 1321.4764)" class="white__fill futura-light fs__12px">12.00</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 883.6431 1175.265)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 894.902 1193.5089)" class="mustard__fill futura-book fs__14px">63</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 919.5974 1184.1385)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 883.8697 1099.359)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g class="property__active" ng-class="selva.inmovablesClassList[397]" ng-click="selva.showPropertyData(30, '64')">
					<rect id="F_L64" x="932.33" y="1088.48" class="property pb-sprite-2" width="83.29" height="235.07"/>
					<text transform="matrix(1.0049 -7.466368e-03 7.120034e-03 1 968.1131 1321.4779)" class="white__fill futura-light fs__12px">1200</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 969.671 1175.264)" class="white__fill futura-light fs__12px">408.00 m2</text>
					<text transform="matrix(-3.562544e-03 0.9951 -1 -3.440014e-03 980.9319 1193.5099)" class="mustard__fill futura-book fs__14px">64</text>
					<text transform="matrix(-1.293694e-03 0.9951 -1 -1.000010e-03 1005.6249 1184.1387)" class="white__fill futura-light fs__12px">34.00</text>
					<text transform="matrix(1.0049 -2.542365e-03 2.229994e-03 1 969.8975 1099.3601)" class="white__fill futura-light fs__12px">12.00</text>
				</g>
				<g>
					<line class="stx11" x1="1015.62" y1="1088.48" x2="352.51" y2="1088.48"/>
					<line class="stx11" x1="435.25" y1="1323.54" x2="435.07" y2="846.62"/>
					<line class="stx11" x1="518.36" y1="846.53" x2="518.36" y2="1323.54"/>
					<line class="stx11" x1="600.27" y1="1323.54" x2="600.27" y2="846.53"/>
					<line class="stx11" x1="683.56" y1="846.47" x2="683.56" y2="1323.54"/>
					<line class="stx11" x1="767.4" y1="1323.54" x2="767.4" y2="846.47"/>
					<line class="stx11" x1="850.14" y1="846.53" x2="850.14" y2="1323.54"/>
					<line class="stx11" x1="932.33" y1="1323.54" x2="932.33" y2="846.47"/>
					<line class="stx11" x1="1016.14" y1="1323.54" x2="1016.14" y2="846.47"/>
					<line class="stx11" x1="352.51" y1="1323.54" x2="352.51" y2="846.47"/>
				</g>
			</g>
			<g id="complemento_1_">
				<g>
					<polygon class="stx14" points="1172.56,108.54 1170.85,88.35 1197.74,85.62 1199.34,105.8"/>
					<g>
						<text transform="matrix(-0.0719 -0.9004 0.9965 -0.0841 1182.8066 71.4668)" class="stx15 futura-book fs__7px">ACCESO</text>
						<path class="stx15" d="M1165.18,60.17c0.29,3.66,3.7,6.38,7.72,6.24l0.77,9.71l-8.67-7.6l-8.67-7.6l7.36-8.95l7.36-8.95l0.77,9.71
							C1167.83,53.25,1164.89,56.51,1165.18,60.17"/>
						<text transform="matrix(-0.0434 -0.9051 0.9978 -0.0666 1174.2318 146.2327)" class="stx15 futura-book fs__7px">SALIDA</text>
						<path class="stx15" d="M1185.82,135.34c0.17,3.6-2.79,6.74-6.7,7.2l0.46,9.54l7.46-8.66l7.46-8.66l-8.24-7.61l-8.24-7.61
							l0.46,9.54C1182.39,129.01,1185.64,131.74,1185.82,135.34"/>
						<path class="stx18" d="M1187.56,94.13c-0.01,0.18-0.75,2.15-1.56,2.23c-0.81,0.08-1.39-1.76-1.38-1.94
							c0.01-0.18,0.7-0.86,1.52-0.94C1186.94,93.4,1187.57,93.95,1187.56,94.13z"/>
						<path class="stx18" d="M1192.45,99.2c-0.12,2.1-3.17,3.85-6.83,4.21c-3.66,0.36-6.55-0.81-6.43-2.91
							C1185.82,99.83,1185.82,99.83,1192.45,99.2z"/>
						<polygon class="stx18" points="1192.08,99.22 1179.46,100.46 1179.57,98.55 1192.18,97.31"/>
						<path class="stx18" d="M1179.57,98.55l-1.24-1.51c-0.22-0.27-0.09-0.72,0.27-0.92l0.95-0.51c1.63-0.53,3.11-1.57,4.2-2.94
							l0.43-0.54l4.24-0.42l0.46,0.59c0.85,1.09,2.09,1.81,3.55,2.05l1.15,0.35c0.32,0.1,0.4,0.48,0.16,0.76l-1.55,1.86L1179.57,98.55z
		"/>
					</g>
				</g>
				<line class="stx19" x1="1366.85" y1="1644" x2="0.09" y2="1644"/>
				<g>
					<g>
						<path class="white__fill" d="M115.46,291.79c-5.57-6.93-8.91-15.74-8.91-25.32c0-22.36,18.13-40.49,40.49-40.49s40.49,18.13,40.49,40.49
							c0,9.59-3.34,18.39-8.91,25.32h4.08c5.08-7.15,8.08-15.88,8.08-25.32c0-24.16-19.59-43.75-43.75-43.75s-43.75,19.59-43.75,43.75
							c0,9.44,3,18.17,8.08,25.32H115.46z"/>
						<path class="white__fill" d="M168.33,282.9c0.44,0.21,0.93,0.44,1.41,0.6c1.33,0.45,2.7,1.33,2.69,1.2c-0.02-0.14-0.29-1.2-1.49-1.63
							c-1.2-0.43-1.21-0.57-0.88-0.57c0.33,0,0.55-0.12,0.55-0.76s-0.09-1.73-0.23-2.03c-0.14-0.3-0.38-0.05-2.95-0.01
							c-0.91,0.01-1.45,0.02-1.78,0l-1.53-1.75c-0.11-0.11-0.19-0.24-0.28-0.38c-0.34-0.56-0.68-1.12-1.01-1.68
							c-0.16-0.28-0.31-0.57-0.46-0.85c-0.23-0.46-0.48-0.91-0.75-1.35c-0.27-0.45-0.57-0.87-0.88-1.29c-0.38-0.52-0.76-1.04-1.15-1.55
							c-0.21-0.27-0.44-0.53-0.67-0.79c-0.34-0.39-0.69-0.78-1.04-1.17c-0.14-0.16-0.3-0.31-0.45-0.46c-0.59-0.58-0.21-1.52-0.09-2.22
							c0.15-0.91,0.19-1.84,0.24-2.76c0.05-0.78,0.15-1.56,0.26-2.34c0.22-1.49,0.5-3.01,0.52-4.5c0.01-0.39-0.01-0.78-0.04-1.17
							c-0.02-0.25-0.07-0.51-0.1-0.76c-0.03-0.26-0.08-0.51-0.2-0.75c-0.16-0.32-0.34-0.62-0.57-0.88c-0.88-0.99-2.23-1.27-3.47-1.54
							c-0.75-0.16-1.53-0.34-2.23-0.65c-1.25-0.56-1.99-1.46-2.1-2.49c0.09-0.32,0.23-0.65,0.39-1c0.29-0.62,0.7-1.84,1.05-3.28
							c0.2-0.07,0.45-0.42,0.61-0.92c0.22-0.67,0.64-1.32,0.52-2.01c-0.04-0.23-0.19-0.49-0.49-0.54c0.08-0.67,0.13-1.33,0.13-1.95
							c0-2.82-1.82-4.94-4.12-5.37c0.04-0.09,0.07-0.18,0.07-0.29c0-0.42-0.42-0.75-0.93-0.75c-0.51,0-0.93,0.34-0.93,0.75
							c0,0.1,0.03,0.2,0.07,0.29c-2.3,0.43-4.12,2.55-4.12,5.37c0,0.62,0.05,1.28,0.12,1.95c-0.3,0.05-0.45,0.32-0.49,0.54
							c-0.12,0.69,0.31,1.35,0.52,2.01c0.16,0.5,0.41,0.84,0.61,0.92c0.36,1.44,0.76,2.66,1.05,3.28c0.29,0.61,0.36,0.84,0.33,1.38
							c-0.15,0.87-0.65,1.63-1.74,2.11c-0.71,0.31-1.48,0.49-2.23,0.65c-1.24,0.27-2.59,0.55-3.47,1.54c-0.23,0.26-0.41,0.56-0.57,0.88
							c-0.11,0.23-0.17,0.49-0.2,0.75c-0.03,0.25-0.09,0.5-0.1,0.76c-0.02,0.39-0.05,0.78-0.04,1.17c0.03,1.5,0.3,3.01,0.52,4.5
							c0.12,0.78,0.22,1.56,0.26,2.34c0.05,0.92,0.09,1.84,0.24,2.76c0.11,0.69,0.49,1.63-0.1,2.22c-0.15,0.15-0.31,0.3-0.45,0.46
							c-0.35,0.39-0.69,0.78-1.03,1.17c-0.23,0.26-0.46,0.51-0.67,0.79c-0.39,0.51-0.77,1.03-1.15,1.55c-0.31,0.42-0.61,0.84-0.88,1.29
							c-0.27,0.44-0.51,0.89-0.75,1.35c-0.15,0.29-0.3,0.58-0.46,0.85c-0.33,0.56-0.67,1.12-1.01,1.68c-0.08,0.13-0.17,0.27-0.28,0.38
							c-0.3,0.3-0.63,0.54-1.01,0.71c-0.08,0.04-0.16,0.09-0.24,0.13l-0.39,0.59c-0.05,0.04-0.09,0.09-0.11,0.1
							c-0.31,0.24,0.03,0.28-2.53,0.24c-2.56-0.03-2.81-0.29-2.95,0.01c-0.14,0.3-0.23,1.39-0.23,2.03c0,0.64,0.23,0.76,0.55,0.76
							c0.33,0,0.31,0.14-0.88,0.57c-1.2,0.43-1.47,1.49-1.49,1.63c-0.02,0.14,1.35-0.75,2.69-1.2c1.33-0.45,2.81-1.46,2.74-0.99
							c0,0,0,0.01,0,0.01l-0.04,0.05l-0.06,0.08c0,0-0.04,0.04-0.04,0.05c0,0-0.08,0.1-0.08,0.11c-0.05,0.09-0.1,0.17-0.1,0.17
							c-0.05,0.06-0.11,0.14-0.17,0.2c-0.01,0.01-0.02,0.02-0.03,0.03c-0.13,0.16-0.26,0.32-0.39,0.46c-0.79,0.87-1.21,2.42-1,3.56
							c0.23,1.24,1.13,2.08,2.25,2.56c0.6,0.26,1.24,0.42,1.87,0.61c1.44,0.44,2.95,0.42,4.44,0.35c0.07,0,0.14,0,0.2-0.01
							c0.87-0.12,1.67-0.33,2.53-0.54c0.62-0.15,1.21-0.33,1.83-0.53c1.2-0.38,2.4-0.8,3.58-1.24c1.62-0.61,3.31-1,4.9-1.71
							c0.38-0.17,0.74-0.35,1.1-0.56c0.06-0.02,0.12-0.05,0.17-0.07c0.39,0.24,0.8,0.44,1.22,0.63c1.59,0.7,3.28,1.1,4.9,1.71
							c1.18,0.44,2.38,0.86,3.58,1.24c0.62,0.2,1.21,0.38,1.83,0.53c0.85,0.21,1.66,0.42,2.53,0.54c0.07,0.01,0.14,0.01,0.2,0.01
							c1.48,0.08,3,0.09,4.44-0.35c0.63-0.19,1.26-0.35,1.87-0.61c1.12-0.48,2.02-1.33,2.25-2.56c0.21-1.14-0.21-2.69-1-3.56
							c-0.14-0.15-0.26-0.31-0.39-0.46c-0.01-0.01-0.02-0.02-0.03-0.03c-0.06-0.06-0.13-0.13-0.15-0.22c0-0.01,0-0.01,0-0.02
							c0,0,0,0,0-0.01c0,0,0,0,0,0C168.3,282.93,168.32,282.92,168.33,282.9z M123.62,282.02c-0.58,0-0.47-0.84-0.4-1.46
							c0,0,1.89-0.07,1.8,0.59S124.2,282.02,123.62,282.02z M141.13,270.82c-0.06,0.4-0.2,0.77-0.36,1.14
							c-0.08,0.18-0.16,0.37-0.24,0.55c-0.04,0.08-0.07,0.17-0.12,0.24c-0.14,0.23-0.24,0.48-0.4,0.69c-0.13,0.18-0.22,0.39-0.34,0.58
							c-0.16,0.28-0.33,0.55-0.5,0.83c-0.25,0.4-0.5,0.8-0.71,1.23c-0.1,0.22-0.23,0.43-0.34,0.64c-0.02,0.03-0.03,0.06-0.05,0.09
							c-0.1,0.2-0.2,0.4-0.29,0.6c-0.09,0.2-0.15,0.41-0.24,0.62c-0.04,0.11-0.1,0.22-0.15,0.32c-0.14,0.26-0.31,0.5-0.54,0.68
							c-0.12,0.09-0.26,0.14-0.39,0.19c-0.09,0.04-0.19,0.08-0.27,0.13c-0.15,0.09-0.29,0.2-0.43,0.29c-0.06,0.04-0.13,0.07-0.2,0.08
							c-0.42,0.06-0.83,0.16-1.25,0.27c-0.17,0.05-0.35,0.11-0.52,0.16c-0.18,0.05-0.35,0.11-0.53,0.15c-0.17,0.04-0.32,0.1-0.44,0.23
							c-0.05,0.06-0.12,0.09-0.19,0.09c-0.13,0.01-0.27,0.02-0.4,0.03c-0.13,0.02-0.27,0.04-0.4,0.06c-0.23,0.04-0.45,0.08-0.68,0.13
							c-0.12,0.03-0.23,0.07-0.35,0.1c-0.29,0.08-0.58,0.16-0.88,0.24c-0.01,0-0.02-0.01-0.04-0.01c0.04-0.05,0.07-0.1,0.11-0.15
							c0.18-0.22,0.38-0.43,0.54-0.67c0.17-0.25,0.38-0.46,0.57-0.69c0.11-0.13,0.25-0.21,0.38-0.32c0.13-0.11,0.27-0.23,0.42-0.32
							c0.17-0.1,0.3-0.25,0.44-0.37c0.23-0.2,0.45-0.4,0.68-0.6c0.17-0.15,0.34-0.3,0.52-0.45c0.17-0.14,0.35-0.26,0.52-0.4
							c0.2-0.16,0.41-0.31,0.6-0.47c0.21-0.19,0.41-0.39,0.62-0.59c0.18-0.17,0.34-0.36,0.52-0.53c0.3-0.28,0.62-0.55,0.92-0.83
							c0.34-0.31,0.62-0.68,0.92-1.03c0.06-0.07,0.12-0.14,0.19-0.21c0.16-0.18,0.29-0.38,0.42-0.58c0.08-0.12,0.16-0.24,0.26-0.36
							c0.19-0.23,0.33-0.51,0.48-0.77c0.21-0.35,0.4-0.7,0.62-1.04c0.13-0.21,0.24-0.44,0.32-0.67c0.13-0.35,0.25-0.71,0.36-1.07
							c0.06-0.22,0.1-0.44,0.15-0.66c0-0.01,0-0.02,0-0.03c0.12-0.3,0.08-0.62,0.11-0.93c0.01-0.15,0.04-0.3,0.05-0.45
							c0.01-0.16,0.01-0.33,0.02-0.49c0.02-0.19,0.04-0.38,0.08-0.57c0.02-0.13,0.05-0.25,0.01-0.37c-0.01-0.03,0.01-0.06,0.01-0.09
							c0.01,0,0.02,0,0.03,0c0.05,0.27,0.1,0.53,0.14,0.8c0.05,0.32,0.11,0.64,0.15,0.96c0.03,0.25,0.05,0.5,0.07,0.75
							c0.02,0.2,0.04,0.4,0.05,0.59c0.01,0.3,0.02,0.61,0.03,0.91c0.01,0.25-0.01,0.5,0,0.75
							C141.16,270.43,141.16,270.63,141.13,270.82z M169.9,280.55c0.07,0.61,0.17,1.46-0.4,1.46c-0.58,0-1.31-0.21-1.4-0.87
							C168.01,280.48,169.9,280.55,169.9,280.55z M164.17,281.2c-0.29-0.08-0.59-0.16-0.88-0.24c-0.12-0.03-0.23-0.08-0.35-0.1
							c-0.22-0.05-0.45-0.09-0.68-0.13c-0.13-0.02-0.27-0.05-0.4-0.06c-0.13-0.02-0.27-0.02-0.4-0.03c-0.08-0.01-0.14-0.04-0.19-0.09
							c-0.12-0.13-0.27-0.2-0.44-0.23c-0.18-0.04-0.36-0.1-0.53-0.15c-0.17-0.05-0.34-0.12-0.52-0.16c-0.41-0.11-0.83-0.21-1.25-0.27
							c-0.07-0.01-0.14-0.04-0.2-0.08c-0.15-0.09-0.29-0.2-0.43-0.29c-0.08-0.05-0.18-0.09-0.27-0.13c-0.14-0.05-0.27-0.1-0.39-0.19
							c-0.23-0.18-0.4-0.42-0.54-0.68c-0.06-0.1-0.11-0.21-0.15-0.32c-0.08-0.2-0.15-0.41-0.23-0.62c-0.09-0.21-0.19-0.4-0.29-0.6
							c-0.01-0.03-0.03-0.06-0.05-0.09c-0.11-0.21-0.24-0.42-0.34-0.64c-0.21-0.43-0.46-0.83-0.71-1.23c-0.17-0.28-0.34-0.55-0.5-0.83
							c-0.11-0.19-0.21-0.4-0.34-0.58c-0.16-0.22-0.26-0.47-0.4-0.69c-0.05-0.07-0.08-0.16-0.12-0.24c-0.08-0.18-0.16-0.37-0.24-0.55
							c-0.16-0.36-0.31-0.73-0.36-1.14c-0.03-0.19-0.03-0.38-0.02-0.58c0.01-0.25,0-0.5,0-0.75c0-0.3,0.01-0.61,0.03-0.91
							c0.01-0.2,0.03-0.4,0.05-0.59c0.02-0.25,0.03-0.5,0.07-0.75c0.04-0.32,0.09-0.64,0.15-0.96c0.04-0.27,0.1-0.53,0.14-0.8
							c0.01,0,0.02,0,0.03,0c0,0.03,0.02,0.06,0.01,0.09c-0.04,0.13-0.01,0.25,0.01,0.37c0.03,0.19,0.06,0.38,0.08,0.57
							c0.02,0.16,0.01,0.33,0.02,0.49c0.01,0.15,0.04,0.3,0.05,0.45c0.03,0.31-0.01,0.64,0.11,0.93c0,0.01,0,0.02,0.01,0.03
							c0.05,0.22,0.09,0.45,0.15,0.66c0.11,0.36,0.23,0.71,0.36,1.07c0.08,0.23,0.19,0.46,0.32,0.67c0.21,0.34,0.41,0.7,0.61,1.04
							c0.16,0.26,0.29,0.54,0.48,0.77c0.09,0.11,0.18,0.23,0.26,0.36c0.13,0.2,0.26,0.41,0.42,0.58c0.06,0.07,0.13,0.14,0.19,0.21
							c0.3,0.35,0.57,0.72,0.92,1.03c0.31,0.28,0.62,0.55,0.92,0.83c0.18,0.17,0.34,0.36,0.52,0.53c0.2,0.2,0.4,0.4,0.62,0.59
							c0.19,0.17,0.4,0.32,0.6,0.47c0.17,0.13,0.35,0.26,0.52,0.4c0.18,0.14,0.35,0.3,0.52,0.45c0.23,0.2,0.45,0.4,0.68,0.6
							c0.15,0.13,0.27,0.28,0.44,0.37c0.15,0.09,0.28,0.2,0.42,0.32c0.13,0.11,0.27,0.19,0.38,0.32c0.19,0.23,0.4,0.44,0.57,0.69
							c0.17,0.23,0.36,0.44,0.54,0.67c0.04,0.04,0.07,0.09,0.11,0.15C164.19,281.19,164.18,281.2,164.17,281.2z"/>
					</g>
					<text transform="matrix(0.9648 0 0 1 80.6572 334.7494)" class="white__fill futura-book stx21">Zen Park</text>
				</g>
				<polygon class="stx22" points="1366.74,1644 1366.85,346.74 1361.83,333.22 1356.53,327.01 1348.49,321.08 1329.41,306.28 
					1312.47,288.2 1297.67,268.11 1281.23,236.42 1271.23,193.95 1270.21,157.24 1279.18,114.33 1297.53,75.39 1324.11,41.9 
					1348.77,21.35 1366,12.44 1366,0 1344.38,1.86 465.42,124.46 0.07,163.84 0.09,1644"/>
			</g>

		</svg>

    </div>

</body>
</html>