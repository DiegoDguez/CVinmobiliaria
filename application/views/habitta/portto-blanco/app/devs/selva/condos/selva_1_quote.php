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
					<h1 class="center-align">Selva 1</h1>
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
			y="0px" viewBox="0 0 1366 2626.6" style="enable-background:new 0 0 1366 2626.6;" xml:space="preserve">

			<style type="text/css">
				.st4{fill:#FFCC00;}
				.st8{fill:#E2A63C;}
				.st9{opacity:0.6;fill:#E2A63C;}
				.stx11{fill:none;stroke:#FFFFFF;stroke-width:2.2424;stroke-miterlimit:10;}
				.stx18{fill:#2E2B50;}
				.stx19{fill:#2D2A4C;}
				.stx22{fill:none;stroke:#000000;stroke-width:4.4849;stroke-miterlimit:10;}
			</style>

			<g>

				<image style="overflow:visible;" width="1366" height="2617" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/selva/condos/selva-1.jpg"  transform="matrix(1 0 0 1 -0.2567 9.765625e-04)"></image>

				<g>
					<g id="isla_A_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[0]" ng-click="selva.showPropertyData(27, '1')">
							<polygon class="property pb-sprite-1" points="482.7,0.8 583.8,0.8 583.9,165.3 482.7,165.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 519.0585 157.4057)" class="white__fill futura-light fs__14px">9.77</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 521.7009 45.19)" class="white__fill futura-light fs__14px">156.32 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 538.2546 72.5233)" class="st4 futura-book fs__16px">01</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 567.797 58.9371)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 488.445 58.9404)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 521.7076 15.868)" class="white__fill futura-light fs__14px">9.77</text>
							<g>
								<polygon class="st8" points="535.2,113 523.5,125.6 535.2,138.4"/>
								<polygon class="st9" points="535.4,113 535.4,138.4 547.2,125.7"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[1]" ng-click="selva.showPropertyData(27, '2')">
							<polygon class="property pb-sprite-2" points="684,0.8 684,165.3 584,165.3 583.9,0.8"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 620.2764 157.411)" class="white__fill futura-light fs__14px">9.77</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 622.9117 45.1944)" class="white__fill futura-light fs__14px">156.32 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 639.463 72.5262)" class="st4 futura-book fs__16px">02</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 669.0076 58.9442)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 622.921 15.8683)" class="white__fill futura-light fs__14px">9.77</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[2]" ng-click="selva.showPropertyData(27, '3')">
							<rect x="684" y="0.8" class="property pb-sprite-1" width="100.2" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 715.8434 157.41)" class="white__fill futura-light fs__14px">9.77</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 718.4762 45.1877)" class="white__fill futura-light fs__14px">156.32 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 735.0274 72.524)" class="st4 futura-book fs__16px">03</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 764.5785 58.9398)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 718.4896 15.8712)" class="white__fill futura-light fs__14px">9.77</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[3]" ng-click="selva.showPropertyData(27, '4')">
							<rect x="784.2" y="0.8" class="property pb-sprite-2" width="82.5" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 811.9646 157.4056)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 814.5992 45.1916)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 831.1465 72.5278)" class="st4 futura-book fs__16px">04</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 849.8044 58.9361)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 814.6116 15.8696)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[4]" ng-click="selva.showPropertyData(27, '5')">
							<rect x="866.7" y="0.8" class="property pb-sprite-1" width="83.3" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 895.0291 157.4085)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 897.6707 45.1906)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 914.2219 72.5229)" class="st4 futura-book fs__16px">05</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 932.8797 58.9437)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 897.6815 15.8692)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[5]" ng-click="selva.showPropertyData(27, '6')">
							<rect x="949.9" y="0.8" class="property pb-sprite-2" width="81.9" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 980.0107 157.4093)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 982.6562 45.1927)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 999.2036 72.5245)" class="st4 futura-book fs__16px">06</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1017.8536 58.9398)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 982.6587 15.8659)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[6]" ng-click="selva.showPropertyData(27, '7')">
							<rect x="1031.9" y="0.8" class="property pb-sprite-1" width="82.8" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1063.4209 157.4047)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1066.0616 45.1878)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1082.6128 72.5245)" class="st4 futura-book fs__16px">07</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1101.2689 58.9448)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1066.0685 15.8675)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[7]" ng-click="selva.showPropertyData(27, '8')">
							<rect x="1114.6" y="0.8" class="property pb-sprite-2" width="82.2" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1147.4445 157.4046)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1150.089 45.1952)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1166.6365 72.523)" class="st4 futura-book fs__16px">08</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1185.299 58.9436)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1150.0994 15.8703)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[8]" ng-click="selva.showPropertyData(27, '9')">
							<rect x="1196.8" y="0.8" class="property pb-sprite-1" width="82.5" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1226.6555 157.4077)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1229.2998 45.192)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1245.8431 72.5281)" class="st4 futura-book fs__16px">09</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1264.5096 58.9441)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1229.3059 15.8713)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[9]" ng-click="selva.showPropertyData(27, '10')">
							<rect x="1279.3" y="0.8" class="property pb-sprite-2" width="82.5" height="164.5"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1305.1224 157.4151)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1307.7683 45.1922)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1324.3137 72.524)" class="st4 futura-book fs__16px">10</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1347.1278 58.9467)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1307.7742 15.8694)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1320.5,114.1 1308.7,126.8 1320.5,139.5"/>
								<polygon class="st9" points="1320.6,114.1 1320.6,139.5 1332.4,126.8"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="583.9" y1="0.8" x2="584" y2="165.3"/>
							<line class="stx11" x1="684" y1="0.8" x2="684.1" y2="165.3"/>
							<line class="stx11" x1="784" y1="0.8" x2="784.1" y2="165.3"/>
							<line class="stx11" x1="867" y1="0.8" x2="867.1" y2="165.3"/>
							<line class="stx11" x1="950" y1="0.8" x2="950.1" y2="165.3"/>
							<line class="stx11" x1="1033.1" y1="0.8" x2="1033.2" y2="165.3"/>
							<line class="stx11" x1="1116.1" y1="0.8" x2="1116.2" y2="165.3"/>
							<line class="stx11" x1="1199.2" y1="0.8" x2="1199.3" y2="165.3"/>
							<line class="stx11" x1="1282.2" y1="0.8" x2="1282.3" y2="165.3"/>
						</g>
					</g>
					<g id="isla_B_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[10]" ng-click="selva.showPropertyData(27, '11')">
							<polygon class="property pb-sprite-1" points="1155.4,261.2 1361.8,261.4 1362.1,343.7 1155.4,343.7"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3594 313.0211)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6967 296.4631)" class="st4 futura-book fs__16px">11</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7548 273.8133)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.759 336.4028)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4061 312.5545)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5101 312.5498)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1201.7,287.6 1189.9,300.2 1201.7,312.9"/>
								<polygon class="st9" points="1201.8,287.6 1201.8,312.9 1213.6,300.3"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[11]" ng-click="selva.showPropertyData(27, '12')">
							<rect x="1155.4" y="343.7" class="property pb-sprite-2" width="206.7" height="82.2"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3617 393.0493)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6931 376.4912)" class="st4 futura-book fs__16px">12</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7568 420.9147)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4104 397.0608)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5115 397.061)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[12]" ng-click="selva.showPropertyData(27, '13')">
							<rect x="1155.4" y="425.9" class="property pb-sprite-1" width="206.7" height="82.2"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3602 474.5522)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6975 458.001)" class="st4 futura-book fs__16px">13</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7595 502.4501)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4094 478.6002)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5046 478.5956)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[13]" ng-click="selva.showPropertyData(27, '14')">
							<rect x="1155.4" y="508.1" class="property pb-sprite-2" width="206.7" height="82.8"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3606 555.4066)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6919 538.8563)" class="st4 futura-book fs__16px">14</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7552 583.2969)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4063 559.4404)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5101 559.4407)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[14]" ng-click="selva.showPropertyData(27, '15')">
							<rect x="1155.4" y="590.8" class="property pb-sprite-1" width="206.7" height="82.2"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3673 638.2876)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6918 621.7392)" class="st4 futura-book fs__16px">15</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7555 666.174)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4036 642.3149)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5037 642.322)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[15]" ng-click="selva.showPropertyData(27, '16')">
							<path class="property pb-sprite-2" d="M1155.4,755.5c0.9,0,206.7,0,206.7,0V673h-206.7V755.5z"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3632 720.353)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6925 703.7988)" class="st4 futura-book fs__16px">16</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7545 748.2513)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4077 724.3934)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.504 724.4024)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[16]" ng-click="selva.showPropertyData(27, '17')">
							<rect x="1155.4" y="755.5" class="property pb-sprite-1" width="206.7" height="82.1"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3613 801.3832)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6926 784.8348)" class="st4 futura-book fs__16px">17</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7567 829.2778)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4146 805.4327)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5098 805.4398)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[17]" ng-click="selva.showPropertyData(27, '18')">
							<rect x="1155.4" y="837.6" class="property pb-sprite-2" width="206.7" height="82.3"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3572 884.1117)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6945 867.5537)" class="st4 futura-book fs__16px">18</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7581 912.0026)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4089 888.147)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.504 888.1404)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[18]" ng-click="selva.showPropertyData(27, '19')">
							<rect x="1155.4" y="919.9" class="property pb-sprite-1" width="206.7" height="82.5"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3621 966.3139)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6925 949.7617)" class="st4 futura-book fs__16px">19</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7522 994.2166)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.41 970.3583)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.51 970.3498)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[19]" ng-click="selva.showPropertyData(27, '20')">
							<rect x="1155.4" y="1002.4" class="property pb-sprite-2" width="206.7" height="82.2"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3612 1047.7679)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6935 1031.2178)" class="st4 futura-book fs__16px">20</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7555 1075.6553)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4104 1051.8021)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5066 1051.8024)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[20]" ng-click="selva.showPropertyData(27, '21')">
							<rect x="1155.4" y="1084.6" class="property pb-sprite-1" width="206.7" height="82.4"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3625 1131.5094)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.694 1114.9601)" class="st4 futura-book fs__16px">21</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7509 1159.3849)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4091 1135.532)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.509 1135.5283)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1201.7,1114.2 1189.9,1126.9 1201.7,1139.6"/>
								<polygon class="st9" points="1201.8,1114.2 1201.8,1139.6 1213.6,1127"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[21]" ng-click="selva.showPropertyData(27, '22')">
							<path class="property pb-sprite-2" d="M1155.4,1249.4c0.6-0.7,206.7,0.1,206.7,0.1V1167h-206.7V1249.4z"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3645 1212.73)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6938 1196.1797)" class="st4 futura-book fs__16px">22</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7585 1240.6215)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4092 1216.7706)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5082 1216.764)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1201.7,1196.4 1189.9,1209 1201.7,1221.8"/>
								<polygon class="st9" points="1201.8,1196.4 1201.8,1221.8 1213.6,1209.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[22]" ng-click="selva.showPropertyData(27, '23')">
							<path class="property pb-sprite-1" d="M1155.3,1331.9h206.8v-82.4l-206.7-0.1C1155.4,1249.4,1153.5,1331.9,1155.3,1331.9z"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3594 1295.944)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6967 1279.3937)" class="st4 futura-book fs__16px">23</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7574 1323.8395)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4143 1299.9761)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5096 1299.9832)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[23]" ng-click="selva.showPropertyData(27, '24')">
							<polygon class="property pb-sprite-2" points="1155.3,1414.8 1362.5,1414.2 1362.1,1331.9 1155.3,1331.9"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3621 1375.6157)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6963 1359.0674)" class="st4 futura-book fs__16px">24</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7592 1403.532)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4081 1379.6698)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5043 1379.6759)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[24]" ng-click="selva.showPropertyData(27, '25')">
							<polygon class="property pb-sprite-1" points="1155.3,1496.6 1362.5,1496.6 1362.5,1414.2 1155.3,1414.8"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3564 1459.1245)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6975 1442.5724)" class="st4 futura-book fs__16px">25</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7601 1487.0106)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4011 1463.1381)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5092 1463.145)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[25]" ng-click="selva.showPropertyData(27, '26')">
							<polygon class="property pb-sprite-2" points="1155.3,1579.1 1362.1,1579.1 1362.5,1496.6 1155.3,1496.6"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3622 1541.9166)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6926 1525.3624)" class="st4 futura-book fs__16px">26</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7571 1569.8048)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4098 1545.947)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.506 1545.9443)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[26]" ng-click="selva.showPropertyData(27, '27')">
							<polygon class="property pb-sprite-1" points="1155.3,1662.6 1362.5,1662.6 1362.1,1579.1 1155.3,1579.1"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3595 1621.1234)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6927 1604.5751)" class="st4 futura-book fs__16px">27</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7601 1649.0139)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4094 1625.1553)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5045 1625.1469)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[27]" ng-click="selva.showPropertyData(27, '28')">
							<polygon class="property pb-sprite-2" points="1155.3,1744.6 1362.5,1744.6 1362.5,1662.6 1155.3,1662.6"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3585 1704.3286)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6957 1687.7734)" class="st4 futura-book fs__16px">28</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7554 1732.2064)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4087 1708.3491)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5126 1708.3434)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[28]" ng-click="selva.showPropertyData(27, '29')">
							<rect x="1155.3" y="1744.6" class="property pb-sprite-1" width="207.2" height="82.3"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3597 1788.4137)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6951 1771.8577)" class="st4 futura-book fs__16px">29</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.756 1816.3043)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4114 1792.4413)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5115 1792.4357)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[29]" ng-click="selva.showPropertyData(27, '30')">
							<rect x="1155.3" y="1826.9" class="property pb-sprite-2" width="207.2" height="82.5"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3616 1870.3844)" class="white__fill futura-light fs__14px">160.00 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6938 1853.8323)" class="st4 futura-book fs__16px">30</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7585 1898.281)" class="white__fill futura-light fs__14px">20.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4072 1874.4182)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.5072 1874.4136)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[30]" ng-click="selva.showPropertyData(27, '31')">
							<path class="property pb-sprite-1" d="M1155.3,1991.6c1,0,198.6,0,198.6,0l8.6-4.4v-77.8h-207.2V1991.6z"/>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1229.3646 1957.3673)" class="white__fill futura-light fs__14px">159.91 m2</text>
							<text transform="matrix(0.995 1.190152e-02 -1.182000e-02 0.9999 1256.6951 1940.8131)" class="st4 futura-book fs__16px">31</text>
							<text transform="matrix(0.9951 7.155031e-03 -6.889975e-03 1 1242.7551 1985.2363)" class="white__fill futura-light fs__14px">19.38</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1169.4059 1961.3748)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-6.089654e-03 -1.0049 1 -5.760019e-03 1354.506 1961.3799)" class="white__fill futura-light fs__14px">7.70</text>
							<g>
								<polygon class="st8" points="1201.7,1939.4 1189.9,1952 1201.7,1964.7"/>
								<polygon class="st9" points="1201.8,1939.4 1201.8,1964.7 1213.6,1952.1"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="1362.1" y1="343.7" x2="1155.4" y2="343.7"/>
							<line class="stx11" x1="1362.1" y1="425.9" x2="1155.4" y2="425.9"/>
							<line class="stx11" x1="1362.1" y1="508" x2="1155.4" y2="508"/>
							<line class="stx11" x1="1362.1" y1="590.2" x2="1155.4" y2="590.2"/>
							<line class="stx11" x1="1362.1" y1="672.4" x2="1155.4" y2="672.4"/>
							<line class="stx11" x1="1362.1" y1="754.5" x2="1155.4" y2="754.5"/>
							<line class="stx11" x1="1362.1" y1="836.7" x2="1155.4" y2="836.7"/>
							<line class="stx11" x1="1362.1" y1="918.9" x2="1155.4" y2="918.9"/>
							<line class="stx11" x1="1362.1" y1="1001.1" x2="1155.4" y2="1001.1"/>
							<line class="stx11" x1="1362.1" y1="1083.2" x2="1155.4" y2="1083.2"/>
							<line class="stx11" x1="1362.1" y1="1165.4" x2="1155.4" y2="1165.4"/>
							<line class="stx11" x1="1362.1" y1="1247.6" x2="1155.4" y2="1247.6"/>
							<line class="stx11" x1="1362.1" y1="1330.7" x2="1155.4" y2="1330.7"/>
							<line class="stx11" x1="1362.1" y1="1414.4" x2="1155.4" y2="1414.4"/>
							<line class="stx11" x1="1362.1" y1="1496.6" x2="1155.4" y2="1496.6"/>
							<line class="stx11" x1="1362.1" y1="1579.1" x2="1155.4" y2="1579.1"/>
							<line class="stx11" x1="1362.1" y1="1662.6" x2="1155.4" y2="1662.6"/>
							<line class="stx11" x1="1362.1" y1="1744.6" x2="1155.4" y2="1744.6"/>
							<line class="stx11" x1="1362.1" y1="1826.9" x2="1155.4" y2="1826.9"/>
							<line class="stx11" x1="1362.1" y1="1909.4" x2="1155.4" y2="1909.4"/>
							<line class="stx11" x1="1155.3" y1="1991.6" x2="1353.9" y2="1991.6"/>
						</g>
					</g>
					<g id="isla_C_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[31]" ng-click="selva.showPropertyData(27, '32')">
							<polygon class="property pb-sprite-2" points="1296.7,2125.5 1361.8,2277.1 1287.2,2310.9 1222.4,2159.3"/>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1269.1681 2190.0808)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1295.887 2207.6057)" class="st4 futura-book fs__16px">32</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 1308.1071 2189.2622)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 1250.8009 2157.843)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 1312.8298 2291.293)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1270.6,2152.8 1259.6,2166.1 1272.1,2178.1"/>
								<polygon class="st9" points="1270.7,2152.8 1272.2,2178.1 1283.2,2164.8"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[32]" ng-click="selva.showPropertyData(27, '33')">
							<path class="property pb-sprite-1" d="M1222.4,2159.3c0.3,1.1,64.8,151.6,64.8,151.6l-75.7,33.2l-64.5-150.6L1222.4,2159.3z"/>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1192.8146 2224.9839)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1219.5333 2242.5066)" class="st4 futura-book fs__16px">33</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 1231.7559 2224.1707)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 1174.4456 2192.7393)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 1236.4774 2326.1956)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[33]" ng-click="selva.showPropertyData(27, '34')">
							<polygon class="property pb-sprite-2" points="1147,2193.6 1211.5,2344.1 1135.6,2376.5 1071.6,2226"/>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1117.688 2257.1169)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1144.4098 2274.6416)" class="st4 futura-book fs__16px">34</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 1156.6267 2256.3003)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 1099.3174 2224.8743)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 1161.3512 2358.3215)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[34]" ng-click="selva.showPropertyData(27, '35')">
							<path class="property pb-sprite-1" d="M1071.6,2226c0,1,64,150.6,64,150.6l-75.9,32.6l-64.2-152.4L1071.6,2226z"/>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1041.3965 2290.0356)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.4183 0.9029 -0.9073 0.4205 1068.116 2307.5601)" class="st4 futura-book fs__16px">35</text>
							<text transform="matrix(0.4226 0.9009 -0.9052 0.425 1080.3389 2289.2209)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9233 -0.3967 0.3945 0.9189 1023.0292 2257.7925)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9123 -0.4212 0.4189 0.908 1085.0598 2391.2415)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[35]" ng-click="selva.showPropertyData(27, '36')">
							<polygon class="property pb-sprite-2" points="995.4,2256.7 1059.6,2409.1 982.9,2439.6 919.2,2288.6"/>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 966.2082 2320.2634)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 992.3879 2338.5903)" class="st4 futura-book fs__16px">36</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 1004.0793 2320.6704)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 947.9899 2287.5745)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 1005.7443 2422.4292)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[36]" ng-click="selva.showPropertyData(27, '37')">
							<polygon class="property pb-sprite-1" points="919.2,2288.6 982.9,2439.6 906.7,2470.7 842.4,2318.8"/>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 892.5882 2351.0911)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 918.7664 2369.4143)" class="st4 futura-book fs__16px">37</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 930.4617 2351.5005)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 874.3693 2318.3987)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 932.1207 2453.2559)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[37]" ng-click="selva.showPropertyData(27, '38')">
							<polygon class="property pb-sprite-2" points="842.4,2318.8 906.7,2470.7 829.6,2499.5 764.8,2347.9"/>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 815.2808 2380.6792)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 841.4587 2399.0066)" class="st4 futura-book fs__16px">38</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 853.1528 2381.0815)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 797.0665 2347.9854)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 854.8184 2482.8428)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[38]" ng-click="selva.showPropertyData(27, '39')">
							<polygon class="property pb-sprite-1" points="764.8,2347.9 829.6,2499.5 752.9,2527.8 688.1,2376.4"/>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 736.5213 2409.8755)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 762.7006 2428.2024)" class="st4 futura-book fs__16px">39</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 774.3962 2410.2776)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 718.3068 2377.1787)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 776.062 2512.0361)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[39]" ng-click="selva.showPropertyData(27, '40')">
							<path class="property pb-sprite-2" d="M688.1,2376.4c3.3,3.6,64.8,151.4,64.8,151.4l-78.1,27.5l-64.5-151.6L688.1,2376.4z"/>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 658.3796 2438.0486)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3909 0.9151 -0.9196 0.3929 684.5563 2456.3691)" class="st4 futura-book fs__16px">40</text>
							<text transform="matrix(0.3953 0.9133 -0.9176 0.3975 696.2531 2438.447)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9349 -0.3686 0.3665 0.9304 640.1643 2405.3518)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9246 -0.3935 0.3913 0.9203 697.9194 2540.207)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[40]" ng-click="selva.showPropertyData(27, '41')">
							<polygon class="property pb-sprite-1" points="610.2,2403.7 674.7,2555.3 596.5,2582.5 532,2431.1"/>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 581.4966 2465.0247)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 606.5819 2484.811)" class="st4 futura-book fs__16px">41</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 619.9619 2466.7009)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 565.8811 2431.4299)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 615.2561 2568.0908)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[41]" ng-click="selva.showPropertyData(27, '42')">
							<polygon class="property pb-sprite-2" points="532,2431.1 596.5,2582.5 517.5,2607.8 453.2,2456.2"/>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 501.5642 2490.7881)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 526.6491 2510.5818)" class="st4 futura-book fs__16px">42</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 540.025 2492.4663)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 485.9468 2457.1899)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 535.322 2593.8589)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[42]" ng-click="selva.showPropertyData(27, '43')">
							<polygon class="property pb-sprite-1" points="374.6,2481.1 453.2,2456.2 517.5,2607.8 477.9,2621.1 466.2,2623.6 444.4,2623.6 
								433.2,2620.5"/>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 423.1704 2515.5659)" class="white__fill futura-light fs__14px">126.71 m2</text>
							<text transform="matrix(0.3379 0.936 -0.9405 0.3397 448.2567 2535.3572)" class="st4 futura-book fs__16px">43</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 461.6302 2517.2437)" class="white__fill futura-light fs__14px">16.06</text>
							<text transform="matrix(0.3424 0.9344 -0.9389 0.3443 403.243 2534.9802)" class="white__fill futura-light fs__14px">14.76</text>
							<text transform="matrix(0.9544 -0.3145 0.3127 0.9498 407.5497 2481.9653)" class="white__fill futura-light fs__14px">8.04</text>
							<text transform="matrix(0.9457 -0.34 0.338 0.9411 483.2961 2610.8745)" class="white__fill futura-light fs__14px">3.59</text>
							<text transform="matrix(1.0046 2.335394e-02 -2.354007e-02 0.9997 439.6739 2613.9436)" class="white__fill futura-light fs__14px">4.82</text>
							<g>
								<polygon class="st8" points="422.8,2484.9 411.3,2497.8 423.4,2510.3"/>
								<polygon class="st9" points="423,2484.9 423.5,2510.3 435,2497.4"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="1287.2" y1="2310.9" x2="1222.4" y2="2159.3"/>
							<line class="stx11" x1="1211.5" y1="2344.1" x2="1147" y2="2193.6"/>
							<line class="stx11" x1="1135.6" y1="2376.5" x2="1071.6" y2="2226"/>
							<line class="stx11" x1="1059.6" y1="2409.1" x2="995.4" y2="2256.7"/>
							<line class="stx11" x1="982.9" y1="2439.6" x2="919.2" y2="2288.6"/>
							<line class="stx11" x1="906.7" y1="2470.7" x2="842.4" y2="2318.8"/>
							<line class="stx11" x1="829.6" y1="2499.5" x2="764.8" y2="2347.9"/>
							<line class="stx11" x1="752.9" y1="2527.8" x2="688.1" y2="2376.4"/>
							<line class="stx11" x1="674.7" y1="2555.3" x2="610.2" y2="2403.7"/>
							<line class="stx11" x1="596.5" y1="2582.5" x2="532" y2="2431.1"/>
							<line class="stx11" x1="517.5" y1="2607.8" x2="453.2" y2="2456.2"/>
							<line class="stx11" x1="374.6" y1="2481.1" x2="433.2" y2="2620.5"/>
							<line class="stx11" x1="1296.7" y1="2125.5" x2="1361.3" y2="2276"/>
						</g>
					</g>
					<g id="isla_D_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[43]" ng-click="selva.showPropertyData(27, '44')">
							<polygon class="property pb-sprite-2" points="338.6,2391.4 505.6,2337.4 507.1,2264.5 340.9,2286.5"/>
							<text transform="matrix(1.453086e-02 1.0048 -0.9999 1.415000e-02 492.5692 2291.0381)" class="white__fill futura-light fs__14px">7.07</text>
							<text transform="matrix(2.964475e-03 1.0049 -1 2.640018e-03 345.986 2321.5376)" class="white__fill futura-light fs__14px">10.25</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 388.9703 2331.6113)" class="white__fill futura-light fs__14px">139.07 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 413.7866 2311.4761)" class="st4 futura-book fs__16px">44</text>
							<text transform="matrix(0.9527 -0.2876 0.2893 0.9572 412.7535 2361.0366)" class="white__fill futura-light fs__14px">17.03</text>
							<g>
								<polygon class="st8" points="471.5,2295.3 460,2308.2 472,2320.7"/>
								<polygon class="st9" points="471.6,2295.3 472.2,2320.7 483.7,2307.8"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[44]" ng-click="selva.showPropertyData(27, '45')">
							<polygon class="property pb-sprite-1" points="340.9,2286.5 507.1,2264.5 505.8,2182 341.1,2203.4"/>
							<text transform="matrix(1.453086e-02 1.0048 -0.9999 1.415000e-02 491.7802 2208.0791)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(4.050751e-02 1.0041 -0.9992 3.999999e-02 346.0151 2230.5918)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 394.7931 2247.1707)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 419.6015 2227.0354)" class="st4 futura-book fs__16px">45</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 410.1984 2270.9075)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[45]" ng-click="selva.showPropertyData(27, '46')">
							<polygon class="property pb-sprite-2" points="341.1,2203.4 505.8,2182 502,2100.5 338.2,2120.9"/>
							<text transform="matrix(1.453086e-02 1.0048 -0.9999 1.415000e-02 489.5587 2124.9058)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(4.050751e-02 1.0041 -0.9992 3.999999e-02 343.7851 2147.418)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 392.566 2163.9919)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 417.3795 2143.8582)" class="st4 futura-book fs__16px">46</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 407.9738 2187.7273)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[46]" ng-click="selva.showPropertyData(27, '47')">
							<polygon class="property pb-sprite-1" points="338.2,2120.9 502,2100.5 496.5,2017.4 332.5,2038.1"/>
							<text transform="matrix(7.580996e-02 1.002 -0.9972 7.513030e-02 484.9872 2041.8129)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(9.786679e-02 1.0001 -0.9953 9.708957e-02 338.7602 2065.3298)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 388.9681 2081.4565)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 413.7855 2061.3298)" class="st4 futura-book fs__16px">47</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 404.3757 2105.1936)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[47]" ng-click="selva.showPropertyData(27, '48')">
							<polygon class="property pb-sprite-2" points="332.5,2038.1 496.5,2017.4 487.7,1935.2 324.6,1956.7"/>
							<text transform="matrix(7.580996e-02 1.002 -0.9972 7.513030e-02 478.7715 1959.0919)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(9.786679e-02 1.0001 -0.9953 9.708957e-02 332.5528 1982.6072)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 382.7748 1998.7072)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 407.5841 1978.5796)" class="st4 futura-book fs__16px">48</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 398.1818 2022.4583)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[48]" ng-click="selva.showPropertyData(27, '49')">
							<polygon class="property pb-sprite-1" points="324.6,1956.7 487.7,1935.2 477.5,1854.3 313.9,1874.5"/>
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 464.6573 1879.6012)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.1685 0.9907 -0.9859 0.1673 323.1258 1901.8817)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 369.9557 1918.4374)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 394.7718 1898.2971)" class="st4 futura-book fs__16px">49</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 385.364 1942.1746)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[49]" ng-click="selva.showPropertyData(27, '50')">
							<polygon class="property pb-sprite-2" points="313.9,1874.5 477.5,1854.3 464.6,1771.9 301.5,1792.9"/>
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 456.2757 1797.959)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.1685 0.9907 -0.9859 0.1673 310.6436 1820.9613)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 361.5689 1836.786)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 386.3819 1816.656)" class="st4 futura-book fs__16px">50</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 376.9789 1860.5342)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[50]" ng-click="selva.showPropertyData(27, '51')">
							<polygon class="property pb-sprite-1" points="301.5,1792.9 464.6,1771.9 449.9,1691.3 285.8,1712"/>
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 440.5233 1717.1575)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 298.1593 1738.8024)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 345.8214 1755.999)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 370.6385 1735.8705)" class="st4 futura-book fs__16px">51</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 361.2294 1779.7365)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[51]" ng-click="selva.showPropertyData(27, '52')">
							<polygon class="property pb-sprite-2" points="285.8,1712 449.9,1691.3 432.1,1610.4 267.6,1631.2"/>
							<text transform="matrix(0.187 0.9874 -0.9826 0.1857 424.613 1634.1488)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 278.1641 1656.5188)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 329.92 1673.007)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 354.7312 1652.8673)" class="st4 futura-book fs__16px">52</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 345.3256 1696.7412)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[52]" ng-click="selva.showPropertyData(27, '53')">
							<polygon class="property pb-sprite-1" points="267.6,1631.2 432.1,1610.4 411.7,1529.7 247.1,1551.1"/>
							<text transform="matrix(0.2936 0.9611 -0.9565 0.2919 405.0514 1556.6041)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.2409 0.9756 -0.9709 0.2394 258.8407 1578.1682)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 314.6751 1594.636)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 339.4921 1574.4987)" class="st4 futura-book fs__16px">53</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 330.0824 1618.3585)" class="white__fill futura-light fs__14px">16.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[53]" ng-click="selva.showPropertyData(27, '54')">
							<polygon class="property pb-sprite-2" points="227.1,1461.2 230.2,1483.4 235.7,1509.6 247.1,1551.1 411.7,1529.7 387.2,1441.5 				
			"/>
							<text transform="matrix(0.2936 0.9611 -0.9565 0.2919 383.8081 1473.4095)" class="white__fill futura-light fs__14px">8.94</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 287.0181 1513.3636)" class="white__fill futura-light fs__14px">141.93 m2</text>
							<text transform="matrix(0.9873 -0.1243 0.125 0.9922 311.8299 1493.2239)" class="st4 futura-book fs__16px">54</text>
							<text transform="matrix(0.9901 -9.971276e-02 0.1005 0.9949 294.1093 1467.9866)" class="white__fill futura-light fs__14px">15.69</text>
							<text transform="matrix(0.9871 -0.1265 0.1274 0.9918 302.4233 1536.5531)" class="white__fill futura-light fs__14px">16.14</text>
							<text transform="matrix(0.2907 0.9619 -0.9573 0.289 242.4803 1512.3219)" class="white__fill futura-light fs__14px">2.40</text>
							<text transform="matrix(0.1475 0.994 -0.9892 0.1465 232.8029 1467.3492)" class="white__fill futura-light fs__14px">6.49</text>
							<g>
								<polygon class="st8" points="364,1477.9 354,1491.9 367.3,1503"/>
								<polygon class="st9" points="364.2,1477.8 367.4,1503 377.5,1489"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[54]" ng-click="selva.showPropertyData(27, '55')">
							<rect x="222.1" y="1039.8" class="property pb-sprite-1" width="164.8" height="82.4"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3405 1099.6737)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5021 1091.0676)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.6986 1074.2909)" class="st4 futura-book fs__16px">55</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2055 1118.0535)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3639 1097.2455)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="348,1073.4 336.3,1086 348,1098.8"/>
								<polygon class="st9" points="348.2,1073.4 348.2,1098.8 360,1086.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[55]" ng-click="selva.showPropertyData(27, '56')">
							<rect x="222.1" y="956.5" class="property pb-sprite-2" width="164.8" height="83.4"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3457 1015.4069)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5039 1006.8025)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7004 990.0257)" class="st4 futura-book fs__16px">56</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2073 1033.7887)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3592 1012.9757)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[56]" ng-click="selva.showPropertyData(27, '57')">
							<rect x="222.1" y="873.8" class="property pb-sprite-1" width="164.8" height="82.7"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3446 932.3872)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5097 923.7844)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7057 907.0076)" class="st4 futura-book fs__16px">57</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2073 950.771)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3591 929.9599)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[57]" ng-click="selva.showPropertyData(27, '58')">
							<rect x="222.1" y="792.1" class="property pb-sprite-2" width="164.8" height="81.7"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3472 849.8646)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5055 841.2623)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.6976 824.4866)" class="st4 futura-book fs__16px">58</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2068 868.2504)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3593 847.4412)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[58]" ng-click="selva.showPropertyData(27, '59')">
							<rect x="222.1" y="709.6" class="property pb-sprite-1" width="164.8" height="82.5"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3505 766.9201)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5105 758.3234)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7032 741.5475)" class="st4 futura-book fs__16px">59</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2023 785.3108)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.358 764.5123)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[59]" ng-click="selva.showPropertyData(27, '60')">
							<rect x="222.1" y="626.9" class="property pb-sprite-2" width="164.8" height="82.7"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3444 683.3594)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.509 674.733)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7026 657.9474)" class="st4 futura-book fs__16px">60</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2039 701.7413)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3565 680.93)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[60]" ng-click="selva.showPropertyData(27, '61')">
							<rect x="222.1" y="544.9" class="property pb-sprite-1" width="164.8" height="82.1"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3456 599.6014)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5051 590.9961)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7026 574.2164)" class="st4 futura-book fs__16px">61</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2047 617.9805)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3653 597.17)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[61]" ng-click="selva.showPropertyData(27, '62')">
							<rect x="222.1" y="462.6" class="property pb-sprite-2" width="164.8" height="82.3"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3461 517.3894)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5081 508.7817)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7051 492.0059)" class="st4 futura-book fs__16px">62</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2039 535.7665)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3585 514.9736)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[62]" ng-click="selva.showPropertyData(27, '63')">
							<rect x="222.1" y="380.1" class="property pb-sprite-1" width="164.8" height="82.5"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.347 438.2497)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5001 429.6357)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.6966 412.8599)" class="st4 futura-book fs__16px">63</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.1995 456.6287)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3589 435.8259)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[63]" ng-click="selva.showPropertyData(27, '64')">
							<rect x="222.1" y="297.1" class="property pb-sprite-2" width="164.8" height="83"/>
							<text transform="matrix(-7.466367e-03 -1.0049 1 -7.120033e-03 379.3451 351.5161)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 266.5091 349.0844)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.9951 3.562545e-03 -3.440014e-03 1 293.7013 332.3037)" class="st4 futura-book fs__16px">64</text>
							<text transform="matrix(0.9947 2.827206e-02 -2.811013e-02 0.9996 280.2817 309.1577)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9951 1.293680e-03 -9.999987e-04 1 280.2042 369.9089)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.542417e-03 -1.0049 1 -2.230017e-03 236.3573 349.106)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="348,323.4 336.3,336.1 348,348.8"/>
								<polygon class="st9" points="348.2,323.4 348.2,348.8 360,336.1"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="340.9" y1="2286.5" x2="507.1" y2="2264.5"/>
							<line class="stx11" x1="341.1" y1="2203.4" x2="505.8" y2="2182"/>
							<path class="stx11" d="M338.2,2120.9c4.7-0.6,163.7-20.5,163.7-20.5"/>
							<line class="stx11" x1="332.5" y1="2038.1" x2="496.5" y2="2017.4"/>
							<line class="stx11" x1="324.6" y1="1956.7" x2="487.7" y2="1935.2"/>
							<line class="stx11" x1="313.9" y1="1874.5" x2="477.5" y2="1854.3"/>
							<line class="stx11" x1="301.5" y1="1792.9" x2="464.6" y2="1771.9"/>
							<line class="stx11" x1="285.8" y1="1712" x2="449.9" y2="1691.3"/>
							<line class="stx11" x1="267.6" y1="1631.2" x2="432.1" y2="1610.4"/>
							<line class="stx11" x1="247.1" y1="1551.1" x2="411.7" y2="1529.7"/>
							<line class="stx11" x1="222.1" y1="1039.8" x2="386.8" y2="1039.8"/>
							<line class="stx11" x1="222.1" y1="956.8" x2="386.8" y2="956.8"/>
							<line class="stx11" x1="222.1" y1="873.8" x2="386.8" y2="873.8"/>
							<line class="stx11" x1="222.1" y1="790.7" x2="386.8" y2="790.7"/>
							<line class="stx11" x1="222.1" y1="707.7" x2="386.8" y2="707.7"/>
							<line class="stx11" x1="222.1" y1="624.7" x2="386.8" y2="624.7"/>
							<line class="stx11" x1="222.1" y1="541.7" x2="386.8" y2="541.7"/>
							<line class="stx11" x1="222.1" y1="462.6" x2="386.8" y2="462.6"/>
							<line class="stx11" x1="222.1" y1="380.1" x2="386.8" y2="380.1"/>
							<line class="stx11" x1="222.1" y1="297.1" x2="386.8" y2="297.1"/>
							<line class="stx11" x1="222.1" y1="1122.2" x2="386.8" y2="1122.2"/>
							<line class="stx11" x1="227.1" y1="1461.2" x2="387.2" y2="1441.5"/>
						</g>
					</g>
					<g id="isla_E_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[64]" ng-click="selva.showPropertyData(27, '65')">
							<polygon class="property pb-sprite-1" points="483,261.3 565.3,261.2 565.3,426.1 483,426.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 510.2271 419.4006)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 512.8749 309.2242)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 529.4246 336.5614)" class="st4 futura-book fs__16px">65</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 488.4325 322.9794)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 553.3954 322.9745)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 512.874 275.4106)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="531.5,283.8 519.7,296.4 531.5,309.2"/>
								<polygon class="st9" points="531.6,283.8 531.6,309.2 543.4,296.5"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[65]" ng-click="selva.showPropertyData(27, '66')">
							<polygon class="property pb-sprite-2" points="647.7,261.2 647.7,426.1 565.3,426.1 565.3,261.2"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 593.2169 419.3995)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 595.8608 309.2315)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 612.4125 336.5628)" class="st4 futura-book fs__16px">66</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 636.3869 322.9744)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 595.8614 275.4078)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[66]" ng-click="selva.showPropertyData(27, '67')">
							<rect x="647.7" y="261.2" class="property pb-sprite-1" width="82.3" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 672.3054 419.3948)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 674.9519 309.2298)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 691.4982 336.563)" class="st4 futura-book fs__16px">67</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 715.4754 322.9759)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 674.9561 275.4076)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[67]" ng-click="selva.showPropertyData(27, '68')">
							<rect x="730" y="261.2" class="property pb-sprite-2" width="82.5" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 754.513 419.3969)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 757.1599 309.2279)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 773.7083 336.5592)" class="st4 futura-book fs__16px">68</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 797.6813 322.982)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 757.1618 275.4081)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[68]" ng-click="selva.showPropertyData(27, '69')">
							<rect x="812.5" y="261.2" class="property pb-sprite-1" width="82.1" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 838.353 419.3966)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 840.9911 309.2315)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 857.5413 336.5638)" class="st4 futura-book fs__16px">69</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 881.5187 322.9832)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 841.0023 275.4044)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[69]" ng-click="selva.showPropertyData(27, '70')">
							<rect x="894.6" y="261.2" class="property pb-sprite-2" width="82.1" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 917.2944 419.4034)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 919.9313 309.23)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 936.4846 336.5604)" class="st4 futura-book fs__16px">70</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 960.4648 322.9768)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 919.9373 275.4091)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[70]" ng-click="selva.showPropertyData(27, '71')">
							<polygon class="property pb-sprite-1" points="1059.4,261.2 1059.5,426.1 976.6,426.1 976.6,261.2"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1004.2457 419.4031)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1006.8945 309.2325)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1023.442 336.5589)" class="st4 futura-book fs__16px">71</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1047.4208 322.9778)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1006.8979 275.4081)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1025.5,283.8 1013.7,296.4 1025.5,309.2"/>
								<polygon class="st9" points="1025.6,283.8 1025.6,309.2 1037.4,296.5"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[71]" ng-click="selva.showPropertyData(27, '72')">
							<polygon class="property pb-sprite-2" points="483,606.2 483,426.1 565.3,426.1 565.3,606.2"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 510.228 600.6889)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 512.8712 478.5163)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 529.4249 505.8438)" class="st4 futura-book fs__16px">72</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 488.4355 492.2705)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 553.4042 492.2657)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="531.5,552.8 519.7,565.5 531.5,578.2"/>
								<polygon class="st9" points="531.6,552.8 531.6,578.2 543.4,565.6"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[72]" ng-click="selva.showPropertyData(27, '73')">
							<polygon class="property pb-sprite-1" points="565.3,606.2 565.3,426.1 647.7,426.1 647.7,606.2"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 596.9913 600.6865)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 599.6323 478.5145)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 616.1859 505.8517)" class="st4 futura-book fs__16px">73</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 636.3802 492.2622)" class="white__fill futura-light fs__14px">17.50</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[73]" ng-click="selva.showPropertyData(27, '74')">
							<rect x="647.7" y="426.1" class="property pb-sprite-2" width="82.3" height="180.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 676.0837 600.6857)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 678.7225 478.5069)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 695.2775 505.85)" class="st4 futura-book fs__16px">74</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 715.4764 492.2679)" class="white__fill futura-light fs__14px">17.50</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[74]" ng-click="selva.showPropertyData(27, '75')">
							<rect x="730" y="426.1" class="property pb-sprite-1" width="82.5" height="180.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 758.2874 600.6877)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 760.9276 478.5147)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 777.4778 505.848)" class="st4 futura-book fs__16px">75</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 797.6805 492.2661)" class="white__fill futura-light fs__14px">17.50</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[75]" ng-click="selva.showPropertyData(27, '76')">
							<path class="property pb-sprite-2" d="M812.5,606.2V426.1h82.1c0,0,1.5,181.7,0,180.1C893.1,604.7,812.5,606.2,812.5,606.2z"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 842.1263 600.6894)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 844.7695 478.5155)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 861.3168 505.8448)" class="st4 futura-book fs__16px">76</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 881.5161 492.2673)" class="white__fill futura-light fs__14px">17.50</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[76]" ng-click="selva.showPropertyData(27, '77')">
							<polygon class="property pb-sprite-1" points="894.6,606.2 894.6,426.1 976.6,426.1 977.2,606.2"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 921.0688 600.6845)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 923.7048 478.5149)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 940.2609 505.8492)" class="st4 futura-book fs__16px">77</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 960.4534 492.2597)" class="white__fill futura-light fs__14px">17.50</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[77]" ng-click="selva.showPropertyData(27, '78')">
							<polygon class="property pb-sprite-2" points="977.2,606.2 1059.5,606.2 1059.5,426.1 976.6,426.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1004.2486 600.6875)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1006.8925 478.506)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1023.4466 505.8432)" class="st4 futura-book fs__16px">78</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1047.4181 492.2619)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="1025.5,552.6 1013.7,565.2 1025.5,577.9"/>
								<polygon class="st9" points="1025.6,552.6 1025.6,577.9 1037.4,565.3"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="483" y1="426.1" x2="1059.5" y2="426.1"/>
							<line class="stx11" x1="976.6" y1="261.2" x2="977.2" y2="606.2"/>
							<line class="stx11" x1="894.9" y1="261.2" x2="895.5" y2="606.2"/>
							<line class="stx11" x1="813.2" y1="261.2" x2="813.8" y2="606.2"/>
							<line class="stx11" x1="731.5" y1="261.2" x2="732.1" y2="606.2"/>
							<line class="stx11" x1="649.8" y1="261.2" x2="650.4" y2="606.2"/>
							<line class="stx11" x1="568.1" y1="261.2" x2="568.7" y2="606.2"/>
						</g>
					</g>
					<g id="isla_F_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[78]" ng-click="selva.showPropertyData(27, '79')">
							<polygon class="property pb-sprite-1" points="483,701.4 565.3,701.3 565.3,866.1 483,866.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 510.2287 859.9285)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 512.8757 749.755)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 529.4274 777.0903)" class="st4 futura-book fs__16px">79</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 488.4355 763.5154)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 553.4062 763.5106)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 512.8766 715.9377)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="531.5,724.3 519.7,737 531.5,749.7"/>
								<polygon class="st9" points="531.6,724.3 531.6,749.7 543.4,737"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[79]" ng-click="selva.showPropertyData(27, '80')">
							<polygon class="property pb-sprite-2" points="647.7,701.3 647.7,866.1 565.3,866.1 565.3,701.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 593.2146 859.9274)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 595.8596 749.7603)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 612.4114 777.0926)" class="st4 futura-book fs__16px">80</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 636.3898 763.5113)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 595.864 715.9388)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[80]" ng-click="selva.showPropertyData(27, '81')">
							<rect x="647.7" y="701.3" class="property pb-sprite-1" width="82.3" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 672.307 859.9305)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 674.9449 749.7605)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 691.5049 777.0919)" class="st4 futura-book fs__16px">81</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 715.4764 763.5118)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 674.9529 715.9337)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[81]" ng-click="selva.showPropertyData(27, '82')">
							<rect x="730" y="701.3" class="property pb-sprite-2" width="82.5" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 754.5151 859.9286)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 757.1588 749.7567)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 773.7071 777.0929)" class="st4 futura-book fs__16px">82</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 797.6844 763.5101)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 757.1644 715.9341)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[82]" ng-click="selva.showPropertyData(27, '83')">
							<rect x="812.5" y="701.3" class="property pb-sprite-1" width="82.1" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 838.3541 859.9244)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 840.9919 749.7613)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 857.5441 777.0945)" class="st4 futura-book fs__16px">83</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 881.5182 763.5073)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 841.001 715.9393)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[83]" ng-click="selva.showPropertyData(27, '84')">
							<rect x="894.6" y="701.3" class="property pb-sprite-2" width="82.1" height="164.9"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 917.2926 859.9274)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 919.936 749.7598)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 936.4795 777.0911)" class="st4 futura-book fs__16px">84</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 960.4678 763.5137)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 919.938 715.9362)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[84]" ng-click="selva.showPropertyData(27, '85')">
							<polygon class="property pb-sprite-1" points="1059.4,701.3 1059.5,866.1 976.6,866.1 976.6,701.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1004.2478 859.928)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1006.8934 749.7564)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1023.4427 777.0897)" class="st4 futura-book fs__16px">85</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1047.4102 763.5143)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(1.0049 5.878670e-03 -6.150007e-03 1 1006.8967 715.94)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1025.5,724.3 1013.7,737 1025.5,749.7"/>
								<polygon class="st9" points="1025.6,724.3 1025.6,749.7 1037.4,737"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[85]" ng-click="selva.showPropertyData(27, '86')">
							<polygon class="property pb-sprite-2" points="483,1046.3 483,866.1 565.3,866.1 565.3,1046.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 510.2315 1041.2168)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 512.8837 919.0433)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 529.4277 946.3735)" class="st4 futura-book fs__16px">86</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 488.4445 932.7993)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 553.4034 932.7943)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="531.5,993.4 519.7,1006 531.5,1018.7"/>
								<polygon class="st9" points="531.6,993.4 531.6,1018.7 543.4,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[86]" ng-click="selva.showPropertyData(27, '87')">
							<polygon class="property pb-sprite-1" points="565.3,1046.3 565.3,866.1 647.7,866.1 647.7,1046.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 596.987 1041.2192)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 599.6331 919.0413)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 616.1848 946.3815)" class="st4 futura-book fs__16px">87</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 636.3831 932.7987)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="612.3,993.4 600.6,1006 612.3,1018.7"/>
								<polygon class="st9" points="612.5,993.4 612.5,1018.7 624.3,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[87]" ng-click="selva.showPropertyData(27, '88')">
							<rect x="647.7" y="866.1" class="property pb-sprite-2" width="82.3" height="180.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 676.0814 1041.2184)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 678.7291 919.0417)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 695.2726 946.3719)" class="st4 futura-book fs__16px">88</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 715.4796 932.7946)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="691.4,993.4 679.7,1006 691.4,1018.7"/>
								<polygon class="st9" points="691.6,993.4 691.6,1018.7 703.4,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[88]" ng-click="selva.showPropertyData(27, '89')">
							<rect x="730" y="866.1" class="property pb-sprite-1" width="82.5" height="180.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 758.2904 1041.2166)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 760.9303 919.0455)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 777.4767 946.3738)" class="st4 futura-book fs__16px">89</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 797.674 932.7935)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="773.6,993.4 761.9,1006 773.6,1018.7"/>
								<polygon class="st9" points="773.8,993.4 773.8,1018.7 785.6,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[89]" ng-click="selva.showPropertyData(27, '90')">
							<path class="property pb-sprite-2" d="M812.5,1046.3V866.1h82.1c0,0,1.5,181.7,0,180.1S812.5,1046.3,812.5,1046.3z"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 842.1284 1041.2183)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 844.7684 919.0385)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 861.3176 946.3756)" class="st4 futura-book fs__16px">90</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 881.519 932.8028)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="857.5,993.4 845.7,1006 857.5,1018.7"/>
								<polygon class="st9" points="857.6,993.4 857.6,1018.7 869.4,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[90]" ng-click="selva.showPropertyData(27, '91')">
							<polygon class="property pb-sprite-1" points="894.6,1046.3 894.6,866.1 976.6,866.1 977.2,1046.3"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 921.0621 1041.2173)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 923.7036 919.0447)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 940.2559 946.376)" class="st4 futura-book fs__16px">91</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 960.4564 932.7961)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="936.4,993.4 924.6,1006 936.4,1018.7"/>
								<polygon class="st9" points="936.6,993.4 936.6,1018.7 948.3,1006.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[91]" ng-click="selva.showPropertyData(27, '92')">
							<polygon class="property pb-sprite-2" points="977.2,1046.3 1059.5,1046.3 1059.5,866.1 976.6,866.1"/>
							<text transform="matrix(1.0049 9.446037e-04 -1.249997e-03 1 1004.2507 1041.2202)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1006.8972 919.0368)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(-1.190152e-02 0.995 -0.9999 -1.182000e-02 1023.4415 946.373)" class="st4 futura-book fs__16px">92</text>
							<text transform="matrix(-2.827206e-02 0.9947 -0.9996 -2.811013e-02 1047.4115 932.7903)" class="white__fill futura-light fs__14px">17.50</text>
							<g>
								<polygon class="st8" points="1025.5,993.1 1013.7,1005.7 1025.5,1018.5"/>
								<polygon class="st9" points="1025.6,993.1 1025.6,1018.5 1037.4,1005.8"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="483" y1="866.1" x2="1059.5" y2="866.1"/>
							<line class="stx11" x1="976.6" y1="701.3" x2="977.2" y2="1046.3"/>
							<line class="stx11" x1="894.9" y1="701.3" x2="895.5" y2="1046.3"/>
							<line class="stx11" x1="813.2" y1="701.3" x2="813.8" y2="1046.3"/>
							<line class="stx11" x1="731.5" y1="701.3" x2="732.1" y2="1046.3"/>
							<line class="stx11" x1="649.8" y1="701.3" x2="650.4" y2="1046.3"/>
							<line class="stx11" x1="568.1" y1="701.3" x2="568.7" y2="1046.3"/>
						</g>
					</g>
					<g id="isla_G_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[92]" ng-click="selva.showPropertyData(27, '93')">
							<path class="property pb-sprite-1" d="M504.7,1505.3l97.1-39.2l70.4,165.2l-97.4,38.7C574.7,1670,503.2,1503.2,504.7,1505.3z"/>
							<text transform="matrix(0.3696 0.9239 -0.9284 0.3716 570.8044 1539.95)" class="white__fill futura-light fs__14px">177.97 m2</text>
							<text transform="matrix(0.3696 0.9239 -0.9284 0.3716 596.5494 1558.877)" class="st4 futura-book fs__16px">93</text>
							<text transform="matrix(0.374 0.9222 -0.9266 0.3761 538.3962 1568.2028)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.374 0.9222 -0.9266 0.3761 613.2701 1536.416)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9261 -0.39 0.3878 0.9217 550.6215 1502.1803)" class="white__fill futura-light fs__14px">10.17</text>
							<text transform="matrix(0.9261 -0.39 0.3878 0.9217 610.9016 1649.7456)" class="white__fill futura-light fs__14px">10.17</text>
							<g>
								<polygon class="st8" points="571.4,1503.1 559.7,1515.8 571.5,1528.5"/>
								<polygon class="st9" points="571.6,1503.1 571.7,1528.5 583.4,1515.8"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[93]" ng-click="selva.showPropertyData(27, '94')">
							<polygon class="property pb-sprite-2" points="698.6,1426.1 769.3,1591.8 672.2,1631.3 601.8,1466.1"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 664.3362 1501.0189)" class="white__fill futura-light fs__14px">177.97 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 690.3939 1519.5099)" class="st4 futura-book fs__16px">94</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 710.02 1495.9601)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 643.7353 1464.3945)" class="white__fill futura-light fs__14px">10.17</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 706.4744 1610.9229)" class="white__fill futura-light fs__14px">10.17</text>
							<g>
								<polygon class="st8" points="664.3,1464.3 652.7,1477.2 664.8,1489.7"/>
								<polygon class="st9" points="664.4,1464.3 664.9,1489.7 676.4,1476.8"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[94]" ng-click="selva.showPropertyData(27, '95')">
							<polygon class="property pb-sprite-1" points="774.6,1393.5 844.9,1559.9 769.3,1591.8 698.6,1426.1"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 750.1874 1465.6434)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 776.2505 1484.1373)" class="st4 futura-book fs__16px">95</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 788.1231 1463.9564)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 732.0785 1427.6586)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 794.8136 1574.1886)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="752.6,1427.6 741.1,1440.5 753.1,1453"/>
								<polygon class="st9" points="752.7,1427.6 753.3,1453 764.8,1440.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[95]" ng-click="selva.showPropertyData(27, '96')">
							<polygon class="property pb-sprite-2" points="849.5,1361.4 920.3,1526.2 844.9,1559.9 774.6,1393.5"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 824.9828 1433.5908)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 851.0407 1452.0817)" class="st4 futura-book fs__16px">96</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 861.2758 1431.473)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 806.8768 1395.1805)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 869.6121 1541.7063)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="827.4,1395.1 815.9,1408 827.9,1420.5"/>
								<polygon class="st9" points="827.5,1395.1 828.1,1420.5 839.6,1407.6"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[96]" ng-click="selva.showPropertyData(27, '97')">
							<path class="property pb-sprite-1" d="M924.9,1326.2c0.8-0.2,70.2,165.6,70.2,165.6l-74.9,34.4l-70.8-164.9L924.9,1326.2z"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 901.1122 1399.1249)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 927.1733 1417.6133)" class="st4 futura-book fs__16px">97</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 938.3248 1398.0776)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 881.871 1361.7775)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 944.6078 1508.3066)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="902.4,1361.7 890.9,1374.6 902.9,1387.1"/>
								<polygon class="st9" points="902.5,1361.7 903.1,1387.1 914.6,1374.2"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[97]" ng-click="selva.showPropertyData(27, '98')">
							<polygon class="property pb-sprite-2" points="998.9,1290.7 1059.7,1432.3 1059.7,1462 995.1,1491.9 924.9,1326.2"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 979.37 1365.0969)" class="white__fill futura-light fs__14px">138.74 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 1005.4319 1383.5892)" class="st4 futura-book fs__16px">98</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 1015.3638 1364.7555)" class="white__fill futura-light fs__14px">15.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 958.7746 1328.4641)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9195 -0.4054 0.4032 0.9151 1010.8066 1481.0729)" class="white__fill futura-light fs__14px">6.92</text>
							<text transform="matrix(-2.185635e-02 -1.0047 0.9998 -2.145000e-02 1053.9689 1459.8348)" class="white__fill futura-light fs__14px">2.78</text>
							<g>
								<polygon class="st8" points="979.3,1328.4 967.8,1341.3 979.8,1353.8"/>
								<polygon class="st9" points="979.4,1328.4 980,1353.8 991.5,1340.9"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[98]" ng-click="selva.showPropertyData(27, '99')">
							<polygon class="property pb-sprite-1" points="604.1,1835 680.8,1805.5 616.2,1653.5 545.4,1681.1 552.7,1716.2"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 588.7317 1716.9125)" class="white__fill futura-light fs__14px">127.22 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 614.7869 1735.4001)" class="st4 futura-book fs__16px">99</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 568.6421 1740.269)" class="white__fill futura-light fs__14px">13.17</text>
							<text transform="matrix(0.1641 0.9815 -0.9863 0.1652 551.2991 1691.3424)" class="white__fill futura-light fs__14px">2.88</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 624.7179 1716.5687)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 568.8213 1687.9617)" class="white__fill futura-light fs__14px">7.65</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 626.4279 1821.3778)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="631.4,1775.7 619.9,1788.6 631.9,1801.1"/>
								<polygon class="st9" points="631.5,1775.7 632.1,1801.1 643.6,1788.2"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[99]" ng-click="selva.showPropertyData(27, '100')">
							<polygon class="property pb-sprite-2" points="693.2,1623.7 757.6,1774.9 680.8,1805.5 616.2,1653.5"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 667.1389 1687.4224)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 693.1982 1705.9148)" class="st4 futura-book fs__16px">100</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 703.1266 1687.0873)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 647.2311 1658.4786)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 704.8411 1791.8951)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[100]" ng-click="selva.showPropertyData(27, '101')">
							<polygon class="property pb-sprite-1" points="833.4,1743.5 769.3,1591.8 693.2,1623.7 757.6,1774.9"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 742.668 1655.476)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 768.7292 1673.9653)" class="st4 futura-book fs__16px">101</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 778.6593 1655.1373)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 722.7604 1626.5311)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 780.37 1759.9445)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[101]" ng-click="selva.showPropertyData(27, '102')">
							<polygon class="property pb-sprite-2" points="909.3,1710.9 844.9,1559.9 769.3,1591.8 833.4,1743.5"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 818.5262 1623.618)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 844.5869 1642.1086)" class="st4 futura-book fs__16px">102</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 854.5198 1623.275)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 856.2272 1728.0861)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[102]" ng-click="selva.showPropertyData(27, '103')">
							<polygon class="property pb-sprite-1" points="920.3,1526.2 984.5,1678.1 909.3,1710.9 844.9,1559.9"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 893.6921 1589.1943)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 919.7545 1607.6864)" class="st4 futura-book fs__16px">103</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 929.6853 1588.8525)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 931.3966 1693.6617)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[103]" ng-click="selva.showPropertyData(27, '104')">
							<polygon class="property pb-sprite-2" points="995.1,1491.9 1059.7,1643.6 984.5,1678.1 920.3,1526.2"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 968.9691 1556.5573)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 995.0298 1575.0479)" class="st4 futura-book fs__16px">104</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 1004.962 1556.2113)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 1006.6694 1661.0231)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="1008.8,1618.5 997.2,1631.4 1009.3,1643.9"/>
								<polygon class="st9" points="1008.9,1618.5 1009.4,1643.9 1020.9,1631"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="680.8" y1="1805.5" x2="616.2" y2="1653.5"/>
							<line class="stx11" x1="757.6" y1="1774.9" x2="693.2" y2="1623.7"/>
							<line class="stx11" x1="833.4" y1="1743.5" x2="698.6" y2="1426.1"/>
							<line class="stx11" x1="909.3" y1="1710.9" x2="774.6" y2="1393.5"/>
							<line class="stx11" x1="984.5" y1="1678.1" x2="849.5" y2="1361.4"/>
							<line class="stx11" x1="601.8" y1="1466.1" x2="672.2" y2="1631.3"/>
							<polyline class="stx11" points="1059.7,1462 995.1,1491.9 920.3,1526.2 844.9,1559.9 769.3,1591.8 693.2,1623.7 616.2,1653.5 
								545.4,1681.1"/>
							<line class="stx11" x1="604.1" y1="1835" x2="552.7" y2="1716.2"/>
							<line class="stx11" x1="504.7" y1="1505.3" x2="574.6" y2="1669.7"/>
							<line class="stx11" x1="998.9" y1="1290.7" x2="1059.7" y2="1432.3"/>
							<line class="stx11" x1="924.9" y1="1326.2" x2="1059.7" y2="1643.6"/>
						</g>
					</g>
					<g id="isla_H_1_">
						<g class="property__active" ng-class="selva.inmovablesClassList[104]" ng-click="selva.showPropertyData(27, '105')">
							<polygon class="property pb-sprite-2" points="585.6,1944.4 673.2,1911.7 743.5,2077.2 656.1,2110"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 643.8803 1981.854)" class="white__fill futura-light fs__14px">159.07 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 669.9419 2000.3444)" class="st4 futura-book fs__16px">105</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 619.9649 2005.7216)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 684.7726 1979.9794)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 622.746 1948.6219)" class="white__fill futura-light fs__14px">9.09</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 683.8312 2091.0229)" class="white__fill futura-light fs__14px">9.09</text>
							<g>
								<polygon class="st8" points="643.5,1948.7 632,1961.6 644.1,1974.1"/>
								<polygon class="st9" points="643.7,1948.7 644.2,1974.1 655.7,1961.2"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[105]" ng-click="selva.showPropertyData(27, '106')">
							<polygon class="property pb-sprite-1" points="760.4,1877.1 830.9,2043.4 743.5,2077.2 673.2,1911.7"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 731.5428 1944.871)" class="white__fill futura-light fs__14px">159.07 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 757.6042 1963.3656)" class="st4 futura-book fs__16px">106</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 767.5343 1944.5341)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 709.5927 1911.792)" class="white__fill futura-light fs__14px">9.09</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 772.4147 2055.9514)" class="white__fill futura-light fs__14px">9.09</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[106]" ng-click="selva.showPropertyData(27, '107')">
							<polygon class="property pb-sprite-2" points="836.8,1846.6 906.7,2012.4 830.9,2043.4 760.4,1877.1"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 813.549 1915.8392)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 839.6106 1934.3296)" class="st4 futura-book fs__16px">107</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 849.5381 1915.4948)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 791.6 1882.7517)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 854.4219 2026.912)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[107]" ng-click="selva.showPropertyData(27, '108')">
							<polygon class="property pb-sprite-1" points="912.4,1814.5 982.7,1980.3 906.7,2012.4 836.8,1846.6"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 888.2065 1885.0339)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 914.2693 1903.5269)" class="st4 futura-book fs__16px">108</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 924.1987 1884.6981)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 866.2582 1851.9475)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 929.08 1996.1147)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[108]" ng-click="selva.showPropertyData(27, '109')">
							<polygon class="property pb-sprite-2" points="988,1781.3 1058.2,1947.1 982.7,1980.3 912.4,1814.5"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 964.5076 1850.7109)" class="white__fill futura-light fs__14px">140.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 990.5646 1869.1978)" class="st4 futura-book fs__16px">109</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 1000.4965 1850.3743)" class="white__fill futura-light fs__14px">17.50</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 942.5554 1817.6276)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 1005.3793 1961.7938)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="964.2,1817.6 952.7,1830.5 964.7,1843"/>
								<polygon class="st9" points="964.3,1817.6 964.8,1843 976.4,1830.1"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[109]" ng-click="selva.showPropertyData(27, '110')">
							<polygon class="property pb-sprite-2" points="663.6,2283.1 741.2,2254 677.1,2102.1 599.7,2131"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 651.6185 2165.8152)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 677.6805 2184.3064)" class="st4 futura-book fs__16px">110</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 631.5293 2189.1814)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 687.6068 2165.4824)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 631.7101 2136.8701)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 689.3189 2270.29)" class="white__fill futura-light fs__14px">8.00</text>
							<g>
								<polygon class="st8" points="691.2,2229.8 679.7,2242.7 691.7,2255.2"/>
								<polygon class="st9" points="691.3,2229.8 691.8,2255.2 703.4,2242.3"/>
							</g>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[110]" ng-click="selva.showPropertyData(27, '111')">
							<polygon class="property pb-sprite-1" points="754,2073.5 818.1,2224.9 741.2,2254 677.1,2102.1"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 726.9338 2134.1936)" class="white__fill futura-light fs__14px">128.00 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 752.9949 2152.6819)" class="st4 futura-book fs__16px">111</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 762.9231 2133.8528)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 707.025 2105.2444)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 764.6317 2238.6594)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[111]" ng-click="selva.showPropertyData(27, '112')">
							<polygon class="property pb-sprite-2" points="895,2194.4 818.1,2224.9 754,2073.5 830.9,2043.4"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 804.1666 2106.3562)" class="white__fill futura-light fs__14px">128.05 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 830.2267 2124.845)" class="st4 futura-book fs__16px">112</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 840.157 2106.0151)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 784.2584 2077.407)" class="white__fill futura-light fs__14px">8.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 841.8685 2210.8286)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[112]" ng-click="selva.showPropertyData(27, '113')">
							<path class="property pb-sprite-1" d="M906.7,2012.4l64.7,151.2l-76.5,30.8l-64.1-151C830.9,2043.4,903.3,2012.7,906.7,2012.4z"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 881.0588 2075.8882)" class="white__fill futura-light fs__14px">128.01 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 907.1183 2094.3835)" class="st4 futura-book fs__16px">113</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 917.0438 2075.5522)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 918.7571 2180.3691)" class="white__fill futura-light fs__14px">8.00</text>
						</g>
						<g class="property__active" ng-class="selva.inmovablesClassList[113]" ng-click="selva.showPropertyData(27, '114')">
							<polygon class="property pb-sprite-2" points="994.4,1975.4 1059.5,2126.6 971.4,2163.6 906.7,2012.4"/>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 960.5811 2042.7114)" class="white__fill futura-light fs__14px">148.96 m2</text>
							<text transform="matrix(0.385 0.9176 -0.9221 0.387 986.639 2061.2056)" class="st4 futura-book fs__16px">114</text>
							<text transform="matrix(0.3894 0.9158 -0.9202 0.3915 1002.0686 2041.2942)" class="white__fill futura-light fs__14px">16.00</text>
							<text transform="matrix(0.9372 -0.3626 0.3605 0.9327 946.1702 2012.6815)" class="white__fill futura-light fs__14px">9.31</text>
							<text transform="matrix(0.9272 -0.3875 0.3854 0.9228 1003.7765 2146.1016)" class="white__fill futura-light fs__14px">9.31</text>
							<g>
								<polygon class="st8" points="1006.6,2105.2 995.1,2118.1 1007.1,2130.5"/>
								<polygon class="st9" points="1006.7,2105.2 1007.2,2130.5 1018.8,2117.6"/>
							</g>
						</g>
						<g>
							<line class="stx11" x1="741.2" y1="2254" x2="677.1" y2="2102.1"/>
							<line class="stx11" x1="818.1" y1="2224.9" x2="754" y2="2073.5"/>
							<line class="stx11" x1="895" y1="2194.4" x2="760.4" y2="1877.1"/>
							<line class="stx11" x1="971.4" y1="2163.6" x2="836.8" y2="1846.6"/>
							<line class="stx11" x1="673.2" y1="1911.7" x2="743.5" y2="2077.2"/>
							<line class="stx11" x1="912.4" y1="1814.5" x2="982.7" y2="1980.3"/>
							<line class="stx11" x1="585.6" y1="1944.4" x2="654.1" y2="2110.7"/>
							<line class="stx11" x1="988" y1="1781.3" x2="1058.2" y2="1947.1"/>
							<polyline class="stx11" points="1058.2,1947.1 994.4,1975.4 906.7,2012.4 830.9,2043.4 754,2073.5 677.1,2102.1 599.7,2131 
								663.6,2283.1"/>
							<line class="stx11" x1="1059.5" y1="2126.6" x2="994.4" y2="1975.4"/>
						</g>
					</g>
					<g id="complemento_1_">
						<path class="stx11" d="M924.9,1326.2"/>
						<g>
							<polygon class="stx18" points="328.6,92.5 328.3,122.7 288,123 288.4,92.8"/>
							<g>
								<text transform="matrix(-1.301556e-02 0.9031 -1 -9.920008e-03 308.0877 146.7274)" class="stx19 futura-book fs__10px">ACCESO</text>
								<path class="stx19" d="M332.7,165.3c0.1-5.5-4.6-10-10.6-10.3l0.2-14.5l11.8,12.5l11.8,12.5l-12.2,12.3l-12.2,12.3l0.2-14.5
									C327.8,175.2,332.7,170.7,332.7,165.3"/>
								<text transform="matrix(-4.178323e-02 0.9052 -0.9996 -2.739013e-02 331.0805 36.8285)" class="stx19 futura-book fs__10px">SALIDA</text>
								<path class="stx19" d="M312.6,50.9c0.2-5.4,5.1-9.6,10.9-9.7l0.7-14.2L312,38.7l-12.3,11.8L310.8,63L322,75.4l0.7-14.2
									C316.8,60.7,312.4,56.2,312.6,50.9"/>
								<path class="stx11" d="M311.2,101.6c0,0.3-1.4,3.1-2.6,3.1c-1.2,0-1.8-2.8-1.8-3.1c0-0.3,1.2-1.2,2.4-1.2
									C310.3,100.4,311.2,101.3,311.2,101.6z"/>
								<path class="stx11" d="M317.7,109.8c-0.5,3.1-5.2,5.3-10.7,5.3c-5.5,0-9.6-2.1-9.1-5.2C307.8,109.8,307.8,109.8,317.7,109.8z"/>
								<polygon class="stx11" points="317.1,109.8 298.3,109.8 298.7,107 317.6,106.9"/>
								<path class="stx11" d="M298.7,107l-1.6-2.4c-0.3-0.4,0-1.1,0.5-1.3l1.5-0.6c2.5-0.6,4.8-1.9,6.6-3.8l0.7-0.7l6.3,0l0.6,0.9
									c1.1,1.7,2.9,3,5,3.5l1.7,0.7c0.5,0.2,0.5,0.8,0.1,1.2l-2.6,2.5L298.7,107z"/>
							</g>
						</g>
						<polygon class="stx22" points="6.1,1393.7 222.1,1393.7 227.1,1460.1 235.7,1508.5 246.6,1548.1 267,1627.8 285.3,1708.9 
							301.1,1789.8 313.9,1871.4 324.3,1953.6 332.3,2034.8 338,2117.1 340.9,2200.2 340.9,2283.2 338.6,2390.4 331.3,2494.5 
							331.8,2524.3 342.9,2553.1 363.1,2576 383.5,2589.3 407.4,2608.1 433.2,2619.4 444.4,2622.5 466.2,2622.5 477.9,2620 593,2582.6 
							672,2555.2 750.9,2527.4 827.4,2499.2 904.7,2470.4 980.6,2439.5 1057.3,2409 1133.3,2376.4 1209.2,2344 1285.2,2310.7 
							1361.3,2276 1361.8,0.8 6.1,-1.2"/>
					</g>
				</g>
			</g>

		</svg>

    </div>

</body>
</html>