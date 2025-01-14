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
						<h6 class="futura-med">Portto Blanco {{paramo.propertyData.condominium}}</h6>
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
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{paramo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">25% para propiedades pagadas de contado al 100%</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan1}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">20% de descuento para propiedades con financiamiento hasta 60 Meses</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan2}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					<div class="p-20">
						<h6 class="deep-purple-text futura-light"> 5 años de financiamiento, con 24 meses sin intereses.</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
				    </div>
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{paramo.month}} y paga la primera mensualidad hasta {{paramo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{paramo.month + ' ' + paramo.year}}</p>
					</div>
					
					<div class="divider"></div>

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
					<h1 class="center-align">PÁRAMO 2</h1>
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

        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1327.5 1512.7" style="enable-background:new 0 0 1327.5 1512.7;" xml:space="preserve">

			<style type="text/css">
				.st0{fill:#B17F4A;}
				.st1{fill:#002856;}
				.st2{fill:#FFFFFF;}
				.st3{fill:#302E5C;}
				.st4{fill:#312783;}
				.st6{font-size:8.7605px;}
				.st7{font-size:8.6393px;}
				.st9{font-size:39.676px;}
				.pb-sprite-1{fill:#5D6C7F;}
				.st11{fill:#FCEA10;}
				.st13{font-size:10.1013px;}
				.st15{font-size:9.0445px;}
				.st16{font-size:9.0443px;}
				.st17{fill:#E2A63C;}
				.st18{opacity:0.6;fill:#E2A63C;}
				.pb-sprite-2{fill:#3A5F8D;}
				.st20{font-size:9.0444px;}
				.st21{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st22{fill:#E2A63C;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st23{fill:none;stroke:#000000;stroke-width:3;stroke-miterlimit:10;}
            </style>

			<image style="overflow:visible;" width="1366" height="1560" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/condos/paramo_2.jpg"  transform="matrix(0.9718 0 0 0.9697 2.532060e-03 2.576227e-03)"></image>

			<g id="PARAMO_2">
				<g id="GENERAL">
					<polygon id="PLAZA_COMERCIAL_2_1_" class="st0" points="340.4,951.1 765.2,638 834.6,732.2 409.8,1045.3"/>
					<path id="PLAZA_COMERCIAL_1_1_" class="st0" d="M-0.7,1191.5c9.3-3.1,20.4-7.6,32.2-14.3c11.2-6.3,20.4-13.1,27.7-19.1
						c59.4-43.8,118.8-87.7,178.2-131.5l69.6,94.2l-190.8,140.7c-14.4,10.7-34.3,23.3-59.7,33.8c-21.5,8.8-41.2,13.7-57.1,16.5
						C-0.7,1271.6-0.7,1231.6-0.7,1191.5z"/>
					<g id="ACCESO_1_">
						<polygon class="st1" points="328.2,1056.6 342,1046.5 356.2,1065 342,1075.5"/>
						<path class="st2" d="M349.3,1057.7c0,0,0-0.2-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.2c-0.7-0.1-1.4-0.3-2.2-0.4l-1.3-1.7
							c0,0,0.1-0.2,0.2-0.3c0-0.2,0-0.3,0-0.3c-0.2-0.3-0.4-0.5-0.6-0.8c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.1-0.4,0-0.5,0
							c-1.7,0.9-3.3,1.8-5,2.8c-0.2,0.1-0.4,0.2-0.6,0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-1.3,1.3-2.6,2.6-3.9,3.9c0,0-0.2,0.2-0.2,0.4
							c0,0.2,0,0.4,0.1,0.4c0.2,0.3,0.4,0.5,0.6,0.8c0,0,0.1,0.2,0.3,0.2c0.2,0,0.3-0.1,0.4-0.1c0.4,0.6,0.8,1.1,1.3,1.7l-0.2,2.2
							c0,0.1,0,0.2,0.1,0.3c0.1,0.1,0.2,0.2,0.2,0.2c2.9-0.1,5.8-0.3,8.6-0.4c0.1,0,0.3,0,0.5-0.2c0.2-0.2,0.3-0.3,0.3-0.4
							C347.4,1063.1,348.4,1060.4,349.3,1057.7z"/>
						<path class="st3" d="M345.9,1062.7l-0.4,0.3l-0.6,1.8l-1.8,0.1l-0.4,0.3l-1-1.3c-0.1-0.1-0.1-0.2-0.2-0.4c0-0.2,0-0.3,0-0.4
							c0-0.2,0-0.6,0.1-0.9c0.1-0.5,0.3-0.8,0.5-1.1c0.3-0.1,0.6-0.2,1.1-0.2c0.5,0,0.9,0.1,1.1,0.1c0.1,0,0.2,0,0.3,0.1
							c0.1,0.1,0.2,0.2,0.3,0.2C345.3,1061.8,345.6,1062.3,345.9,1062.7z"/>
						
							<rect x="336" y="1059.3" transform="matrix(0.7977 -0.6031 0.6031 0.7977 -570.0997 420.1548)" class="st3" width="10.3" height="1"/>
						<g>
							<path class="st3" d="M324.6,1071l-7,5.9c1.2,1.9,1.1,4.3-0.1,5.8c-1.6,2-5,2.5-7.5,0.5c-2.1,1.8-4.2,3.5-6.3,5.3l19.1,0.3
								L324.6,1071z"/>
							<text transform="matrix(-0.7757 0.6311 -0.6311 -0.7757 316.8235 1062.6401)" class="st4 futura-book st6">SALIDA</text>
						</g>
						<g>
							<path class="st3" d="M359,1048.6l6.8-5.9c-1.2-1.9-1.2-4.2,0-5.7c1.5-2,4.9-2.5,7.4-0.6c2-1.8,4.1-3.5,6.1-5.3l-18.8,0
								L359,1048.6z"/>
							<text transform="matrix(0.764 -0.6452 0.6452 0.764 366.5583 1056.6951)" class="st4 futura-book st7">ACCESO</text>
						</g>
					</g>
					<text transform="matrix(0.8143 -0.5805 0.5805 0.8143 479.6086 937.0554)" class="st2 futura-book st9">ÁREA COMERCIAL</text>
					<text transform="matrix(0.8143 -0.5805 0.5805 0.8143 21.4132 1272.3817)" class="st2 futura-book st9">ÁREA COMERCIAL</text>
				</g>
				<g id="ISLA_A">
					<g class="property__active" ng-class="paramo.inmovablesClassList[107]" ng-click="paramo.showPropertyData(21, '1')">
						<polygon id="LOTE_A01_2_" class="property pb-sprite-1" points="-1.2,1054.8 92,1055 91.9,1101.2 -1,1101.2"/>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 37.5057 1075.7533)"><tspan x="0" y="0" class="st11 futura-book st13">01</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 34.0422 1063.6049)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.1814 1067.9518)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 34.0436 1099.5992)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.6719 1067.7333)" class="st2 futura-book st16">8.00</text>
						<g>
							<polygon class="st17" points="72.1,1067.4 79.7,1075.1 72.1,1082.7 72.1,1082.7"/>
							<polygon class="st18" points="72.1,1067.4 72.1,1082.7 64.5,1075.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[108]" ng-click="paramo.showPropertyData(21, '2')">
						<polygon id="LOTE_A02_2_" class="property pb-sprite-2" points="-1.1,1008 92,1008 92,1055 -1.2,1054.8"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.6159 1022.7299)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.3792 1022.6597)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.8758 1016.6309)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.4973 1031.6962)"><tspan x="0" y="0" class="st11 futura-book st13">02</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[109]" ng-click="paramo.showPropertyData(21, '3')">
						<polygon id="LOTE_A03_2_" class="property pb-sprite-1" points="-1.2,961.1 91.8,961.3 92,1008 -1.1,1008"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.7606 975.6122)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.5239 975.54)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 33.0205 969.511)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.6417 984.5798)"><tspan x="0" y="0" class="st11 futura-book st13">03</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[110]" ng-click="paramo.showPropertyData(21, '4')">
						<polygon id="LOTE_A04_2_" class="property pb-sprite-2" points="-1,915.1 91.8,915.1 91.8,961.3 -1.2,961.1"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.1799 929.3713)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 0.9451 929.2972)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.4398 923.27)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.0583 938.3371)"><tspan x="0" y="0" class="st11 futura-book st13">04</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[111]" ng-click="paramo.showPropertyData(21, '5')">
						<polygon id="LOTE_A05_2_" class="property pb-sprite-1" points="-1.2,868.1 91.8,868.1 91.8,915.1 -1,915.1"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.6147 882.6885)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.378 882.6163)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.8766 876.587)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.4965 891.6537)"><tspan x="0" y="0" class="st11 futura-book st13">05</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[112]" ng-click="paramo.showPropertyData(21, '6')">
						<polygon id="LOTE_A06_2_" class="property pb-sprite-2" points="-1.4,821.1 91.8,821.1 91.8,868.1 -1.2,868.1"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.1795 836.0097)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 0.9437 835.9356)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.4393 829.9062)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.0597 844.9761)"><tspan x="0" y="0" class="st11 futura-book st13">06</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[113]" ng-click="paramo.showPropertyData(21, '7')">
						<polygon id="LOTE_A07_2_" class="property pb-sprite-1" points="-1.1,775 91.8,775.2 91.8,821.1 -1.4,821.1"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 84.0531 789.4742)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.8184 789.4001)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 33.315 783.3687)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.9348 798.4412)"><tspan x="0" y="0" class="st11 futura-book st13">07</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[114]" ng-click="paramo.showPropertyData(21, '8')">
						<polygon id="LOTE_A08_2_" class="property pb-sprite-2" points="-1.4,728.2 91.8,728.2 91.8,775.2 -1.1,775"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.6154 743.376)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.3806 743.3058)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.8772 737.2733)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.4973 752.3437)"><tspan x="0" y="0" class="st11 futura-book st13">08</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[115]" ng-click="paramo.showPropertyData(21, '9')">
						<path id="LOTE_A09_2_" class="property pb-sprite-1" d="M-1.4,681.3h93.2v46.9H-1.4C-1.4,728.2-1.6,680.8-1.4,681.3"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.6133 696.1132)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.3785 696.0391)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.878 690.0093)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.4978 705.0792)"><tspan x="0" y="0" class="st11 futura-book st13">09</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[116]" ng-click="paramo.showPropertyData(21, '10')">
						<polygon id="LOTE_A10_2_" class="property pb-sprite-2" points="-1.1,634.5 91.8,634.5 91.8,681.3 -1.4,681.3"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.6165 649.8699)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.3788 649.7978)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.8764 643.7649)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.4975 658.8381)"><tspan x="0" y="0" class="st11 futura-book st13">10</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[117]" ng-click="paramo.showPropertyData(21, '11')">
						<polygon id="LOTE_A11_2_" class="property pb-sprite-1" points="-1.1,588.3 92,588.3 91.8,634.5 -1.1,634.5"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.1803 603.1892)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 0.9435 603.1171)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.4411 597.0811)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.0597 612.1547)"><tspan x="0" y="0" class="st11 futura-book st13">11</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[118]" ng-click="paramo.showPropertyData(21, '12')">
						<polygon id="LOTE_A12_2_" class="property pb-sprite-2" points="-1.1,541.5 91.8,541.5 92,588.3 -1.1,588.3"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.4693 556.3632)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.2315 556.2891)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.733 550.2549)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.3511 565.329)"><tspan x="0" y="0" class="st11 futura-book st13">12</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[119]" ng-click="paramo.showPropertyData(21, '13')">
						<polygon id="LOTE_A13_2_" class="property pb-sprite-1" points="-1.1,494.6 92,494.6 91.8,541.5 -1.1,541.5"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.326 509.6827)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.0951 509.6086)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 32.5858 503.5753)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.2044 518.6478)"><tspan x="0" y="0" class="st11 futura-book st13">13</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[120]" ng-click="paramo.showPropertyData(21, '14')">
						<rect id="LOTE_A14_2_" x="-1.1" y="448.1" class="property pb-sprite-2" width="93" height="46.5"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.7629 463.8749)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.5281 463.8047)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 33.0247 457.7674)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.6434 472.8434)"><tspan x="0" y="0" class="st11 futura-book st13">14</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[121]" ng-click="paramo.showPropertyData(21, '15')">
						<rect id="LOTE_A15_2_" x="-1.1" y="401.4" class="property pb-sprite-1" width="93" height="46.6"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.9076 416.7592)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.6729 416.687)" class="st2 futura-book st16">8.00</text>
						<text transform="matrix(1 -2.399993e-03 2.399993e-03 1 33.1704 410.6506)" class="st2 futura-book st15">16.00</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 40.7898 425.7261)"><tspan x="0" y="0" class="st11 futura-book st13">15</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[122]" ng-click="paramo.showPropertyData(21, '16')">
						<polygon id="LOTE_A16_2_" class="property pb-sprite-2" points="-1.7,314.5 16.2,323.5 39.6,332.5 62.4,340 79.7,344 91.9,346.7 92,401.4 
							-1.1,401.4"/>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 83.0373 360.5228)" class="st2 futura-book st16">9.39</text>
						<text transform="matrix(2.400017e-03 1 -1 2.400017e-03 1.6697 352.6932)" class="st2 futura-book st16">14.80</text>
						<text transform="matrix(0.9395 0.3426 -0.3426 0.9395 34.1394 340.77)" class="st2 futura-book st20">16.95</text>
						<text transform="matrix(1 -8.750015e-03 8.750015e-03 1 38.8185 372.7706)"><tspan x="0" y="0" class="st11 futura-book st13">16</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">186.20m2</tspan></text>
						<g>
							<polygon class="st17" points="73.3,362.7 81,370.4 73.3,378 73.3,378"/>
							<polygon class="st18" points="73.3,362.7 73.3,378 65.7,370.4"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_A">
						<line class="st21" x1="-1" y1="1101.2" x2="91.9" y2="1101.2"/>
						<line class="st21" x1="-1.2" y1="1054.8" x2="92" y2="1055"/>
						<line class="st21" x1="92" y1="1008" x2="-1.1" y2="1008"/>
						<line class="st21" x1="-1.2" y1="961.1" x2="91.8" y2="961.3"/>
						<line class="st21" x1="91.8" y1="915.1" x2="-1" y2="915.1"/>
						<line class="st21" x1="-1.2" y1="868.1" x2="91.8" y2="868.1"/>
						<line class="st21" x1="91.8" y1="821.1" x2="-1.4" y2="821.1"/>
						<line class="st21" x1="-1.1" y1="775" x2="92.2" y2="775.2"/>
						<line class="st21" x1="91.8" y1="728.2" x2="-1.4" y2="728.2"/>
						<line class="st21" x1="-1.4" y1="681.3" x2="91.8" y2="681.3"/>
						<line class="st21" x1="91.8" y1="634.5" x2="-1.1" y2="634.5"/>
						<line class="st21" x1="-1.1" y1="588.3" x2="92" y2="588.3"/>
						<line class="st21" x1="91.8" y1="541.5" x2="-1.1" y2="541.5"/>
						<line class="st21" x1="-1.1" y1="494.6" x2="92" y2="494.6"/>
						<line class="st21" x1="92" y1="448.1" x2="-1.1" y2="448.1"/>
						<line class="st21" x1="-1.1" y1="401.4" x2="92" y2="401.4"/>
					</g>
				</g>
				<g id="ISLA_B">
					<g class="property__active" ng-class="paramo.inmovablesClassList[123]" ng-click="paramo.showPropertyData(21, '17')">
						<polygon id="LOTE_B17_2_" class="property pb-sprite-1" points="284.9,875.1 340,951.8 377.6,924.3 322.4,848.1"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 350.7596 936.9819)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 302.6819 872.704)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 307.3764 901.3644)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 336.3829 880.0505)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 328.4351 890.1644)"><tspan x="0" y="0" class="st11 futura-book st13">17</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="324.5,869.3 322.8,880 312.2,878.4 312.2,878.4"/>
							<polygon class="st18" points="324.5,869.3 312.2,878.4 313.8,867.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[124]" ng-click="paramo.showPropertyData(21, '18')">
						<polygon id="LOTE_B18_2_" class="property pb-sprite-2" points="359.5,820.5 415.3,896.2 377.9,923.8 321.9,848.2"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 387.3015 912.255)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 338.7859 845.569)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 369.6411 852.2613)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 364.1008 868.7198)"><tspan x="0" y="0" class="st11 futura-book st13">18</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[125]" ng-click="paramo.showPropertyData(21, '19')">
						<polygon id="LOTE_B19_2_" class="property pb-sprite-1" points="396.9,792.6 452.8,868.8 415.3,896.2 359.5,820.5"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 424.9377 885.999)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 376.4223 819.3129)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 407.2779 826.0024)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 401.7386 842.4625)"><tspan x="0" y="0" class="st11 futura-book st13">19</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[126]" ng-click="paramo.showPropertyData(21, '20')">
						<polygon id="LOTE_B20_2_" class="property pb-sprite-2" points="434.5,765.2 490.4,840.8 452.8,868.8 396.9,792.6"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 462.5753 858.2805)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 414.059 791.5974)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 444.9147 798.2869)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 439.3737 814.746)"><tspan x="0" y="0" class="st11 futura-book st13">20</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[127]" ng-click="paramo.showPropertyData(21, '21')">
						<polygon id="LOTE_B21_2_" class="property pb-sprite-1" points="472.3,737.7 528,813.1 490.4,840.8 434.5,765.2"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 500.2105 829.6895)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 451.6945 763.0063)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 482.5519 769.6945)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 477.012 786.1539)"><tspan x="0" y="0" class="st11 futura-book st13">21</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[128]" ng-click="paramo.showPropertyData(21, '22')">
						<polygon id="LOTE_B22_2_" class="property pb-sprite-2" points="509.7,709.7 565.5,785.3 528,813.1 472.3,737.7"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 538.5756 802.2641)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 490.0611 735.5797)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 520.9167 742.2692)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 515.3776 758.7276)"><tspan x="0" y="0" class="st11 futura-book st13">22</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[129]" ng-click="paramo.showPropertyData(21, '23')">
						<path id="LOTE_B23_2_" class="property pb-sprite-1" d="M547.2,682.1L603,758l-37.5,27.4l-55.8-75.6C509.7,709.7,546.3,682.3,547.2,682.1"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 575.4821 773.5267)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 526.9676 706.8422)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 557.8261 713.532)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 552.2849 729.9921)"><tspan x="0" y="0" class="st11 futura-book st13">23</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[130]" ng-click="paramo.showPropertyData(21, '24')">
						<polygon id="LOTE_B24_2_" class="property pb-sprite-2" points="584.9,654.7 640.8,730.3 603,758 547.2,682.1"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 613.9947 746.2472)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 565.4786 679.5639)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 596.3372 686.2537)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 590.7946 702.7116)"><tspan x="0" y="0" class="st11 futura-book st13">24</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[131]" ng-click="paramo.showPropertyData(21, '25')">
						<polygon id="LOTE_B25_2_" class="property pb-sprite-1" points="622.4,626.8 678.3,702.4 640.8,730.3 584.9,654.7"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 650.1721 718.9683)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 601.6575 652.2838)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 632.5157 658.9763)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 626.9727 675.4341)"><tspan x="0" y="0" class="st11 futura-book st13">25</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[132]" ng-click="paramo.showPropertyData(21, '26')">
						<polygon id="LOTE_B26_2_" class="property pb-sprite-2" points="659.9,599.2 715.8,674.9 678.3,702.4 622.4,626.8"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 687.9536 691.3983)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 639.4405 624.7153)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 670.2963 631.4047)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 664.7546 647.8639)"><tspan x="0" y="0" class="st11 futura-book st13">26</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[133]" ng-click="paramo.showPropertyData(21, '27')">
						<polygon id="LOTE_B27_2_" class="property pb-sprite-1" points="709.9,562.4 765.6,638.4 715.8,674.9 659.9,599.2"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 680.8917 594.6905)" class="st2 futura-book st20">10.64</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 728.5961 659.4627)" class="st2 futura-book st20">10.64</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 723.2494 596.978)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 712.6028 615.1497)"><tspan x="0" y="0" class="st11 futura-book st13">27</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">170.22m2</tspan></text>
						<g>
							<polygon class="st17" points="707.8,590.6 706.2,601.2 695.5,599.6 695.5,599.6"/>
							<polygon class="st18" points="707.8,590.6 695.5,599.6 697.2,588.9"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_B">
						<line class="st21" x1="321.9" y1="848.2" x2="377.6" y2="924.3"/>
						<line class="st21" x1="359.5" y1="820.5" x2="415.3" y2="896.2"/>
						<line class="st21" x1="452.8" y1="868.8" x2="396.9" y2="792.6"/>
						<line class="st21" x1="434.5" y1="765.2" x2="490.4" y2="840.8"/>
						<line class="st21" x1="528" y1="813.1" x2="472.3" y2="737.7"/>
						<line class="st21" x1="509.7" y1="709.7" x2="565.5" y2="785.3"/>
						<line class="st21" x1="603" y1="758" x2="547.2" y2="682.1"/>
						<line class="st21" x1="584.9" y1="654.7" x2="640.8" y2="730.3"/>
						<line class="st21" x1="678.3" y1="702.4" x2="622.4" y2="626.8"/>
						<line class="st21" x1="659.9" y1="599.2" x2="715.8" y2="674.9"/>
						<line class="st21" x1="765.2" y1="638" x2="709.9" y2="562.4"/>
					</g>
				</g>
				<g id="ISLA_C">
					<g class="property__active" ng-class="paramo.inmovablesClassList[134]" ng-click="paramo.showPropertyData(21, '28')">
						<polygon id="LOTE_C28_2_" class="property pb-sprite-2" points="840.5,582.4 877.9,554.5 947.6,649.3 910,676.7"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 856.7959 582.1161)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 918.3561 664.1019)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 896.8436 598.438)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 869.1252 615.358)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 892.0291 611.0657)"><tspan x="0" y="0" class="st11 futura-book st13">28</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
						<g>
							<polygon class="st17" points="877.3,583.3 875.7,593.9 865,592.3 865,592.3"/>
							<polygon class="st18" points="877.3,583.3 865,592.3 866.7,581.6"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[135]" ng-click="paramo.showPropertyData(21, '29')">
						<polygon id="LOTE_C29_2_" class="property pb-sprite-1" points="915.3,527.1 985.1,621.6 947.6,649.3 877.9,554.5"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 955.7013 637.2596)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 895.5999 553.8178)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 933.6018 570.1378)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 928.4984 585.6827)"><tspan x="0" y="0" class="st11 futura-book st13">29</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
						<g>
							<polygon class="st17" points="916.1,556.4 914.5,567.1 903.8,565.5 903.8,565.5"/>
							<polygon class="st18" points="916.1,556.4 903.8,565.5 905.5,554.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[136]" ng-click="paramo.showPropertyData(21, '30')">
						<polygon id="LOTE_C30_2_" class="property pb-sprite-2" points="953.3,499.2 1022.6,593.8 985.1,621.6 915.3,527.1"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 933.2341 526.682)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 993.3351 610.1265)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 971.2387 543.0023)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 966.1351 558.5505)"><tspan x="0" y="0" class="st11 futura-book st13">30</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
						<g>
							<polygon class="st17" points="953.8,529.3 952.2,540 941.5,538.3 941.5,538.3"/>
							<polygon class="st18" points="953.8,529.3 941.5,538.3 943.1,527.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[137]" ng-click="paramo.showPropertyData(21, '31')">
						<polygon id="LOTE_C31_2_" class="property pb-sprite-1" points="990.5,471.7 1059.9,566 1022.6,593.8 953.3,499.2"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 969.9958 498.0927)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1030.097 581.5345)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1007.9993 514.4114)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1002.8967 529.9582)"><tspan x="0" y="0" class="st11 futura-book st13">31</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
						<g>
							<polygon class="st17" points="990.5,500.7 988.9,511.4 978.2,509.7 978.2,509.7"/>
							<polygon class="st18" points="990.5,500.7 978.2,509.7 979.9,499.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[138]" ng-click="paramo.showPropertyData(21, '32')">
						<polygon id="LOTE_C32_2_" class="property pb-sprite-2" points="1028.2,444 1097.8,538.4 1059.9,566 990.5,471.7"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1008.5079 471.5445)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1068.608 554.9846)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1046.512 487.8603)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1041.4075 503.4087)"><tspan x="0" y="0" class="st11 futura-book st13">32</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[139]" ng-click="paramo.showPropertyData(21, '33')">
						<polygon id="LOTE_C33_2_" class="property pb-sprite-1" points="1065.7,416.4 1135.2,510.9 1097.8,538.4 1028.2,444"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1046.1439 442.9505)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1106.2465 526.3938)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1084.1488 459.2706)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1079.043 474.8163)"><tspan x="0" y="0" class="st11 futura-book st13">33</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[140]" ng-click="paramo.showPropertyData(21, '34')">
						<polygon id="LOTE_C34_2_" class="property pb-sprite-2" points="1103.4,388.6 1173,483 1135.2,510.9 1065.7,416.4"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1084.0714 416.1104)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1144.1732 499.5494)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1122.0779 432.4294)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1116.9725 447.9748)"><tspan x="0" y="0" class="st11 futura-book st13">34</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[141]" ng-click="paramo.showPropertyData(21, '35')">
						<polygon id="LOTE_C35_2_" class="property pb-sprite-1" points="1140.7,360.9 1210.2,455.2 1173,483 1103.4,388.6"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1122.8762 387.8091)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1182.9772 471.2511)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1160.8815 404.1265)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1155.7755 419.6747)"><tspan x="0" y="0" class="st11 futura-book st13">35</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[142]" ng-click="paramo.showPropertyData(21, '36')">
						<polygon id="LOTE_C36_2_" class="property pb-sprite-2" points="1178.3,333.3 1247.9,427.8 1210.2,455.2 1140.7,360.9"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1158.7621 360.3861)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1218.8623 443.8263)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1196.7686 376.7051)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1191.6609 392.2503)"><tspan x="0" y="0" class="st11 futura-book st13">36</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[143]" ng-click="paramo.showPropertyData(21, '37')">
						<polygon id="LOTE_C37_2_" class="property pb-sprite-1" points="1216.1,305.8 1285.2,400 1247.9,427.8 1178.3,333.3"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1196.397 333.5411)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1256.4976 416.9858)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1234.4047 349.8616)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1229.2983 365.4102)"><tspan x="0" y="0" class="st11 futura-book st13">37</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[144]" ng-click="paramo.showPropertyData(21, '38')">
						<polygon id="LOTE_C38_2_" class="property pb-sprite-2" points="1258,274.6 1316.5,353.6 1316.5,381.1 1305.5,386.4 1298.4,390.9 1285.3,400 
							1216.1,305.8"/>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1237.5338 302.9085)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(0.8045 -0.594 0.594 0.8045 1291.0729 392.9147)" class="st2 futura-book st20">6.39</text>
						<text transform="matrix(-6.779980e-03 -1 1 -6.779980e-03 1314.7366 377.4211)" class="st2 futura-book st20">4.40</text>
						<text transform="matrix(0.594 0.8045 -0.8045 0.594 1275.9789 316.1649)" class="st2 futura-book st20">16.97</text>
						<text transform="matrix(0.5991 0.8007 -0.8007 0.5991 1268.4667 334.5585)"><tspan x="0" y="0" class="st11 futura-book st13">38</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">177.54m2</tspan></text>
						<g>
							<polygon class="st17" points="1258.8,307.3 1257.2,317.9 1246.5,316.3 1246.5,316.3"/>
							<polygon class="st18" points="1258.8,307.3 1246.5,316.3 1248.1,305.6"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_C">
						<line class="st22" x1="840.5" y1="582.4" x2="910" y2="676.7"/>
						<line class="st22" x1="877.9" y1="554.5" x2="947.6" y2="649.3"/>
						<line class="st22" x1="915.3" y1="527.1" x2="985.1" y2="621.6"/>
						<line class="st22" x1="1022.6" y1="593.8" x2="953.3" y2="499.2"/>
						<line class="st22" x1="990.5" y1="471.7" x2="1059.9" y2="566"/>
						<line class="st22" x1="1097.8" y1="538.4" x2="1028.2" y2="444"/>
						<line class="st22" x1="1065.7" y1="416.4" x2="1135.2" y2="510.9"/>
						<line class="st22" x1="1173" y1="483" x2="1103.4" y2="388.6"/>
						<line class="st22" x1="1150.2" y1="360.9" x2="1219.6" y2="455.2"/>
						<line class="st22" x1="1247.9" y1="427.8" x2="1178.3" y2="333.3"/>
						<line class="st22" x1="1216.1" y1="305.8" x2="1285.3" y2="400"/>
						<line class="st22" x1="1316.5" y1="353.6" x2="1258" y2="274.6"/>
					</g>
				</g>
				<g id="ISLA_D">
					<g class="property__active" ng-class="paramo.inmovablesClassList[145]" ng-click="paramo.showPropertyData(21, '39')">
						<polygon id="LOTE_D39_2_" class="property pb-sprite-1" points="146.3,426.2 239.9,424.9 239.9,478.1 146.3,478.1"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 236.7357 458.6485)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 156.4699 458.027)" class="st2 futura-book st20">8.94</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 182.2689 473.6804)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 182.7091 435.6486)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 187.5961 448.6172)"><tspan x="0" y="0" class="st11 futura-book st13">39</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">143.49m2</tspan></text>
						<g>
							<polygon class="st17" points="167,438.7 174.6,446.5 166.8,454 166.8,454"/>
							<polygon class="st18" points="167,438.7 166.8,454 159.3,446.2"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[146]" ng-click="paramo.showPropertyData(21, '40')">
						<polygon id="LOTE_D40_2_" class="property pb-sprite-2" points="146.3,478.1 239.9,478.1 239.9,530.6 146.3,530.6"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 237.0289 512.4791)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 155.0463 514.376)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 180.5188 527.8009)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 187.3063 496.9016)"><tspan x="0" y="0" class="st11 futura-book st13">40</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">144.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[147]" ng-click="paramo.showPropertyData(21, '41')">
						<polygon id="LOTE_D41_2_" class="property pb-sprite-1" points="146.3,530.6 239.9,530.6 239.9,580.8 146.5,580.8"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 236.7369 562.9545)" class="st2 futura-book st20">8.66</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 155.0464 562.9549)" class="st2 futura-book st20">8.66</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 179.2065 577.6918)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 187.0157 549.4185)"><tspan x="0" y="0" class="st11 futura-book st13">41</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">138.62m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[148]" ng-click="paramo.showPropertyData(21, '42')">
						<polygon id="LOTE_D42_2_" class="property pb-sprite-2" points="146.5,580.8 239.9,580.8 239.9,627.7 146.2,627.7"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 236.7365 612.5501)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 155.4827 614.1524)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 180.0798 624.3715)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 187.1595 595.3682)"><tspan x="0" y="0" class="st11 futura-book st13">42</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[149]" ng-click="paramo.showPropertyData(21, '43')">
						<polygon id="LOTE_D43_2_" class="property pb-sprite-1" points="146.2,627.7 239.9,627.7 239.9,674.7 146.2,674.6"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 235.2788 658.4991)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 156.9427 659.3715)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 181.102 671.78)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 188.6201 644.3835)"><tspan x="0" y="0" class="st11 futura-book st13">43</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[150]" ng-click="paramo.showPropertyData(21, '44')">
						<polygon id="LOTE_D44_2_" class="property pb-sprite-2" points="146.2,674.6 239.9,674.7 239.9,720.7 146.2,720.8"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 236.0081 705.9084)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 154.9001 706.9277)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 180.517 716.7127)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 188.1817 689.3141)"><tspan x="0" y="0" class="st11 futura-book st13">44</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[151]" ng-click="paramo.showPropertyData(21, '45')">
						<polygon id="LOTE_D45_2_" class="property pb-sprite-1" points="146.2,720.8 239.9,720.7 239.9,767.7 146.2,767.5"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 235.7155 752.149)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 155.3385 754.0448)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 181.2484 763.83)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 189.057 737.5994)"><tspan x="0" y="0" class="st11 futura-book st13">45</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[152]" ng-click="paramo.showPropertyData(21, '46')">
						<polygon id="LOTE_D46_2_" class="property pb-sprite-2" points="146.2,767.5 239.9,767.7 240,814.4 146.2,814.4"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 236.4455 799.8513)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 156.068 801.0195)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 181.1037 810.9468)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 191.8294 785.154)"><tspan x="0" y="0" class="st11 futura-book st13">46</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="165.9,785.3 173.4,793.1 165.6,800.6 165.6,800.6"/>
							<polygon class="st18" points="165.9,785.3 165.6,800.6 158.1,792.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[153]" ng-click="paramo.showPropertyData(21, '47')">
						<polygon id="LOTE_D47_2_" class="property pb-sprite-2" points="333,772.4 239.9,772.4 240,726.2 333.1,726.2"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 330.3162 756.308)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 250.0121 757.1833)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 274.0992 769.3721)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 275.4123 734.7991)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 278.2598 745.9869)"><tspan x="0" y="0" class="st11 futura-book st13">47</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="314.4,740.9 322,748.6 314.2,756.2 314.2,756.2"/>
							<polygon class="st18" points="314.4,740.9 314.2,756.2 306.7,748.4"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[154]" ng-click="paramo.showPropertyData(21, '48')">
						<polygon id="LOTE_D48_2_" class="property pb-sprite-1" points="333.1,726.2 240,726.2 239.9,679.3 333,679.3"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 329.4416 710.3588)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 250.8883 711.6735)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 275.4118 688.8494)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 283.512 702.4424)"><tspan x="0" y="0" class="st11 futura-book st13">48</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[155]" ng-click="paramo.showPropertyData(21, '49')">
						<polygon id="LOTE_D49_2_" class="property pb-sprite-2" points="333,679.3 239.9,679.3 239.9,632.4 333,632.4"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 329.6598 664.6241)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 251.1062 664.8448)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 276.9423 641.8046)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 283.2937 655.6161)"><tspan x="0" y="0" class="st11 futura-book st13">49</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[156]" ng-click="paramo.showPropertyData(21, '50')">
						<polygon id="LOTE_D50_2_" class="property pb-sprite-1" points="333,632.4 239.9,632.4 239.9,586.2 333,586.3"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 330.3159 619.9863)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 251.9813 618.0137)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 276.7266 596.7278)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 284.8254 609.4467)"><tspan x="0" y="0" class="st11 futura-book st13">50</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[157]" ng-click="paramo.showPropertyData(21, '51')">
						<polygon id="LOTE_D51_2_" class="property pb-sprite-2" points="333,586.3 239.9,586.2 239.9,530.6 333,530.6"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 329.6607 569.2203)" class="st2 futura-book st20">9.52</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 249.575 568.7859)" class="st2 futura-book st20">9.52</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 277.1617 541.3663)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 283.0728 558.2426)"><tspan x="0" y="0" class="st11 futura-book st13">51</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">152.31m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[158]" ng-click="paramo.showPropertyData(21, '52')">
						<polygon id="LOTE_D52_2_" class="property pb-sprite-1" points="333,530.6 239.9,530.6 239.9,478.1 333,478.1"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 329.4413 514.0811)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 274.537 487.7581)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 283.7292 503.9755)"><tspan x="0" y="0" class="st11 futura-book st13">52</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">144.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[159]" ng-click="paramo.showPropertyData(21, '53')">
						<polygon id="LOTE_D53_2_" class="property pb-sprite-2" points="333,425.4 333,478.1 239.9,478.1 239.9,424.9"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 330.3158 460.9094)" class="st2 futura-book st20">9.06</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 272.7865 434.1476)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 272.7895 449.7105)"><tspan x="0" y="0" class="st11 futura-book st13">53</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">144.51m2</tspan></text>
						<g>
							<polygon class="st17" points="311.5,442.9 319,450.6 311.2,458.1 311.2,458.1"/>
							<polygon class="st18" points="311.5,442.9 311.2,458.1 303.7,450.4"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_D">
						<line class="st21" x1="146.3" y1="478.1" x2="333" y2="478.1"/>
						<line class="st21" x1="146.3" y1="530.6" x2="333" y2="530.6"/>
						<line class="st21" x1="333" y1="586.3" x2="239.9" y2="586.2"/>
						<line class="st21" x1="239.9" y1="580.8" x2="146.5" y2="580.8"/>
						<line class="st21" x1="146.2" y1="627.7" x2="239.9" y2="627.7"/>
						<line class="st21" x1="239.9" y1="632.4" x2="333" y2="632.4"/>
						<line class="st21" x1="333" y1="679.3" x2="239.9" y2="679.3"/>
						<line class="st21" x1="239.9" y1="674.7" x2="146.2" y2="674.6"/>
						<line class="st21" x1="146.2" y1="720.8" x2="239.9" y2="720.7"/>
						<line class="st21" x1="240" y1="726.2" x2="333.1" y2="726.2"/>
						<line class="st21" x1="239.9" y1="767.7" x2="146.2" y2="767.5"/>
						<line class="st21" x1="333" y1="772.4" x2="239.9" y2="772.4"/>
						<line class="st21" x1="240" y1="814.4" x2="239.9" y2="424.9"/>
					</g>
				</g>
				<g id="ISLA_E">
					<g class="property__active" ng-class="paramo.inmovablesClassList[160]" ng-click="paramo.showPropertyData(21, '54')">
						<polygon id="LOTE_E54_2_" class="property pb-sprite-2" points="388.2,424.7 481.1,424.6 481,471.4 388,471.4"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 397.2747 456.5337)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 477.3608 456.0969)" class="st2 futura-book st20">8.06</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 424.3523 433.5634)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 424.3509 467.9905)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 431.9412 444.4585)"><tspan x="0" y="0" class="st11 futura-book st13">54</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.51m2</tspan></text>
						<g>
							<polygon class="st17" points="408.3,440.1 415.8,447.8 408.1,455.4 408.1,455.4"/>
							<polygon class="st18" points="408.3,440.1 408.1,455.4 400.6,447.6"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[161]" ng-click="paramo.showPropertyData(21, '55')">
						<path id="LOTE_E55_3_" class="property pb-sprite-1" d="M388,471.4h93l0.1,47l-93.1-0.1C388.1,518.2,387.2,471.4,388,471.4"/>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 422.8929 514.6711)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 397.566 501.172)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 477.3599 501.0299)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 430.0439 487.0548)"><tspan x="0" y="0" class="st11 futura-book st13">55</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[162]" ng-click="paramo.showPropertyData(21, '56')">
						<polygon id="LOTE_E56_2_" class="property pb-sprite-2" points="388.1,518.2 481.2,518.3 481.1,564.5 388.1,564.4"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 477.0689 549.6048)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 397.5654 551.0596)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 421.7267 559.748)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 429.3161 533.5897)"><tspan x="0" y="0" class="st11 futura-book st13">56</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[163]" ng-click="paramo.showPropertyData(21, '57')">
						<polygon id="LOTE_E57_2_" class="property pb-sprite-1" points="388.1,564.4 481.1,564.5 481.3,611.2 388.1,611.2"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 477.0677 595.1151)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 398.0041 597.455)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 422.8923 607.5951)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 429.025 579.9785)"><tspan x="0" y="0" class="st11 futura-book st13">57</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[164]" ng-click="paramo.showPropertyData(21, '58')">
						<polygon id="LOTE_E58_2_" class="property pb-sprite-2" points="388.1,658.3 481.3,658.2 481.3,611.2 388.1,611.2"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 476.7773 642.6722)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 398.5874 643.8416)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 422.0176 653.6929)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 435.733 627.5334)"><tspan x="0" y="0" class="st11 futura-book st13">58</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="409.6,626.5 417.1,634.3 409.3,641.8 409.3,641.8"/>
							<polygon class="st18" points="409.6,626.5 409.3,641.8 401.8,634"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[165]" ng-click="paramo.showPropertyData(21, '59')">
						<polygon id="LOTE_E59_2_" class="property pb-sprite-1" points="574.2,423.9 574.2,471.4 481,471.4 481.1,424.6"/>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 511.0016 432.834)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 513.0443 467.5533)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 569.5545 455.6654)" class="st2 futura-book st20">8.13</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 511.8821 444.3119)"><tspan x="0" y="0" class="st11 futura-book st13">59</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">129.52m2</tspan></text>
						<g>
							<polygon class="st17" points="550.5,441 558,448.7 550.2,456.2 550.2,456.2"/>
							<polygon class="st18" points="550.5,441 550.2,456.2 542.7,448.5"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[166]" ng-click="paramo.showPropertyData(21, '60')">
						<polygon id="LOTE_E60_2_" class="property pb-sprite-2" points="574.2,518.3 481.2,518.3 481,471.4 574.2,471.4"/>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 515.0867 513.9437)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 570.4285 502.6352)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 515.0909 487.4917)"><tspan x="0" y="0" class="st11 futura-book st13">60</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="553.1,483.6 560.6,491.3 552.9,498.8 552.9,498.8"/>
							<polygon class="st18" points="553.1,483.6 552.9,498.8 545.3,491.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[167]" ng-click="paramo.showPropertyData(21, '61')">
						<path id="LOTE_E61_2_" class="property pb-sprite-1" d="M574.2,564.4c-4-0.1-93.1,0.1-93.1,0.1l0-46.2l93,0V564.4z"/>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 515.9617 559.1633)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 570.429 550.4855)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 512.4669 533.5884)"><tspan x="0" y="0" class="st11 futura-book st13">61</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="552.5,530.8 560,538.6 552.3,546.1 552.3,546.1"/>
							<polygon class="st18" points="552.5,530.8 552.3,546.1 544.8,538.3"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[168]" ng-click="paramo.showPropertyData(21, '62')">
						<polygon id="LOTE_E62_2_" class="property pb-sprite-2" points="574.2,597.7 547,617.5 481,617.5 481.1,564.5 574.2,564.4"/>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 572.1809 590.1642)" class="st2 futura-book st20">5.60</text>
						<text transform="matrix(1.391005e-02 -0.9999 0.9999 1.391005e-02 492.5309 597.1633)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(0.9999 1.391005e-02 -1.391005e-02 0.9999 508.0191 613.4595)" class="st2 futura-book st20">11.38</text>
						<text transform="matrix(0.827 -0.5622 0.5622 0.827 552.4859 610.3041)" class="st2 futura-book st20">5.74</text>
						<text transform="matrix(1 7.560011e-03 -7.560011e-03 1 514.2163 582.895)"><tspan x="0" y="0" class="st11 futura-book st13">62</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">136.13m2</tspan></text>
						<g>
							<polygon class="st17" points="552.2,577.2 559.7,585 552,592.5 552,592.5"/>
							<polygon class="st18" points="552.2,577.2 552,592.5 544.5,584.7"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_E">
						<line class="st21" x1="574.2" y1="471.4" x2="388" y2="471.4"/>
						<line class="st21" x1="574.2" y1="518.3" x2="388.1" y2="518.2"/>
						<line class="st21" x1="574.2" y1="564.4" x2="388.1" y2="564.4"/>
						<line class="st21" x1="547" y1="617.5" x2="481" y2="617.5"/>
						<line class="st21" x1="388.1" y1="611.2" x2="481.3" y2="611.2"/>
						<polyline class="st21" points="388.1,658.3 481.3,658.2 481.1,424.6"/>
					</g>
				</g>
				<g id="ISLA_F">
					<g class="property__active" ng-class="paramo.inmovablesClassList[169]" ng-click="paramo.showPropertyData(21, '63')">
						<polygon id="LOTE_F63_2_" class="property pb-sprite-1" points="333,291.4 333.9,370.9 379.9,370.9 379.9,276.5 352.1,276.5 342,284.8"/>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 361.1788 318.8191)"><tspan x="0" y="0" class="st11 futura-book st13">63</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">123.68m2</tspan></text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 349.548 368.9014)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 356.6957 286.6266)" class="st2 futura-book st20">4.67</text>
						<text transform="matrix(0.7918 -0.6107 0.6107 0.7918 340.5111 297.5461)" class="st2 futura-book st20">4.18</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 371.4148 315.1649)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 336.2528 316.4774)" class="st2 futura-book st20">13.47</text>
						<g>
							<polygon class="st17" points="359.8,345.5 367.3,353.2 359.6,360.8 359.6,360.8"/>
							<polygon class="st18" points="359.8,345.5 359.6,360.8 352.1,353.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[170]" ng-click="paramo.showPropertyData(21, '64')">
						<polygon id="LOTE_F64_2_" class="property pb-sprite-2" points="426.8,370.2 426.1,276.2 379.9,276.5 379.9,370.9"/>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 417.3605 312.1006)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 396.5196 368.0264)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 395.0595 285.8982)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 405.235 317.3597)"><tspan x="0" y="0" class="st11 futura-book st13">64</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[171]" ng-click="paramo.showPropertyData(21, '65')">
						<polygon id="LOTE_F65_2_" class="property pb-sprite-1" points="473.7,370.3 473,276.2 426.1,276.2 426.8,370.2"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 440.5028 367.1528)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 440.0631 285.3144)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 462.4409 313.4139)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 451.1856 318.8905)"><tspan x="0" y="0" class="st11 futura-book st13">65</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[172]" ng-click="paramo.showPropertyData(21, '66')">
						<polygon id="LOTE_F66_2_" class="property pb-sprite-2" points="519.8,275.7 519.9,370.3 473.7,370.3 473,276.2"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 488.4227 366.9333)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 487.7657 286.6264)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 508.829 311.6645)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 497.3559 317.5797)"><tspan x="0" y="0" class="st11 futura-book st13">66</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[173]" ng-click="paramo.showPropertyData(21, '67')">
						<polygon id="LOTE_F67_2_" class="property pb-sprite-1" points="566,275.8 566.7,370.3 519.9,370.3 519.8,275.7"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 534.3744 366.4951)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 534.3721 286.4089)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 555.2154 311.8828)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 543.0881 317.7968)"><tspan x="0" y="0" class="st11 futura-book st13">67</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[174]" ng-click="paramo.showPropertyData(21, '68')">
						<polygon id="LOTE_F68_2_" class="property pb-sprite-2" points="612.9,275.7 613.6,369.5 566.7,370.3 566,275.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 581.2002 366.0565)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 581.6367 286.8476)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 602.2595 310.5708)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 592.5419 316.2637)"><tspan x="0" y="0" class="st11 futura-book st13">68</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[175]" ng-click="paramo.showPropertyData(21, '69')">
						<polygon id="LOTE_F69_2_" class="property pb-sprite-1" points="659.6,275.7 659.7,369.7 613.6,369.5 612.9,275.7"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 628.2441 365.8383)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 627.5881 286.1907)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 647.9941 309.257)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 635.6492 315.3913)"><tspan x="0" y="0" class="st11 futura-book st13">69</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="638.7,342.2 646.2,350 638.4,357.5 638.4,357.5"/>
							<polygon class="st18" points="638.7,342.2 638.4,357.5 630.9,349.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[176]" ng-click="paramo.showPropertyData(21, '70')">
						<path id="LOTE_F70_2_" class="property pb-sprite-2" d="M705.9,275c0,0,0.7,94.3,0.8,94.4c0.1,0.1-47,0.2-47,0.2l-0.2-94L705.9,275z"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 675.2916 366.0576)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 674.6359 285.3152)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 695.6975 309.2575)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 684.877 315.1714)"><tspan x="0" y="0" class="st11 futura-book st13">70</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="686.8,341.6 694.3,349.3 686.6,356.8 686.6,356.8"/>
							<polygon class="st18" points="686.8,341.6 686.6,356.8 679.1,349.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[177]" ng-click="paramo.showPropertyData(21, '71')">
						<polygon id="LOTE_F71_2_" class="property pb-sprite-1" points="752.8,275.8 753.6,368.8 706.7,369.5 705.9,275"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 721.899 366.4954)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 720.1472 285.533)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 743.8383 311.0084)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 733.2347 317.7965)"><tspan x="0" y="0" class="st11 futura-book st13">71</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="734.7,342.2 742.3,350 734.5,357.5 734.5,357.5"/>
							<polygon class="st18" points="734.7,342.2 734.5,357.5 727,349.7"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[178]" ng-click="paramo.showPropertyData(21, '72')">
						<polygon id="LOTE_F72_2_" class="property pb-sprite-2" points="799.7,275.7 799.8,368.9 753.6,368.8 752.8,275.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 767.4103 365.4006)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 768.2866 286.4088)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 789.1392 309.6953)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 779.408 314.514)"><tspan x="0" y="0" class="st11 futura-book st13">72</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="778.5,341.4 786,349.1 778.3,356.6 778.3,356.6"/>
							<polygon class="st18" points="778.5,341.4 778.3,356.6 770.8,348.9"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[179]" ng-click="paramo.showPropertyData(21, '73')">
						<polygon id="LOTE_F73_2_" class="property pb-sprite-1" points="846.5,275.6 847.2,368.5 799.8,368.9 799.7,275.7"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 815.1141 365.6189)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 814.8954 284.6591)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 837.2761 311.4451)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 824.9214 314.7328)"><tspan x="0" y="0" class="st11 futura-book st13">73</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="826.6,341.6 834.2,349.3 826.4,356.8 826.4,356.8"/>
							<polygon class="st18" points="826.6,341.6 826.4,356.8 818.9,349.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[180]" ng-click="paramo.showPropertyData(21, '74')">
						<polygon id="LOTE_F74_2_" class="property pb-sprite-2" points="892.6,275.2 893.5,368.9 846.5,368.8 845.8,275.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 861.5023 365.183)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 859.7502 285.3144)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 882.7884 311.6629)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 871.3087 315.1703)"><tspan x="0" y="0" class="st11 futura-book st13">74</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="871.5,340.5 879,348.2 871.3,355.7 871.3,355.7"/>
							<polygon class="st18" points="871.5,340.5 871.3,355.7 863.7,348"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[181]" ng-click="paramo.showPropertyData(21, '75')">
						<polygon id="LOTE_F75_2_" class="property pb-sprite-1" points="939.6,275.1 939.6,368.1 893.5,368.9 892.6,275.2"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 907.4544 364.9645)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 908.7662 284.6585)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 930.4932 311.8831)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 915.2901 314.2948)"><tspan x="0" y="0" class="st11 futura-book st13">75</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="918.3,339.6 925.8,347.4 918.1,354.9 918.1,354.9"/>
							<polygon class="st18" points="918.3,339.6 918.1,354.9 910.6,347.1"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[182]" ng-click="paramo.showPropertyData(21, '76')">
						<polygon id="LOTE_F76_2_" class="property pb-sprite-2" points="985.6,275.1 986.6,368.2 939.6,368.1 939.6,275.1"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 954.4983 364.7444)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 953.6229 284.6576)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 976.2278 311.2256)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 962.5474 313.8572)"><tspan x="0" y="0" class="st11 futura-book st13">76</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">128.00m2</tspan></text>
						<g>
							<polygon class="st17" points="964.9,338.9 972.5,346.7 964.7,354.2 964.7,354.2"/>
							<polygon class="st18" points="964.9,338.9 964.7,354.2 957.2,346.5"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[183]" ng-click="paramo.showPropertyData(21, '77')">
						<polygon id="LOTE_F77_2_" class="property pb-sprite-1" points="1039.5,274.5 1039.5,368 986.6,368.2 985.6,275.1"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1003.5143 365.402)" class="st2 futura-book st20">9.11</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1004.6074 285.0964)" class="st2 futura-book st20">9.11</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1030.0531 311.0075)" class="st2 futura-book st20">16.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1013.5348 314.7329)"><tspan x="0" y="0" class="st11 futura-book st13">77</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">145.74m2</tspan></text>
						<g>
							<polygon class="st17" points="1014.4,340.3 1021.9,348 1014.1,355.5 1014.1,355.5"/>
							<polygon class="st18" points="1014.4,340.3 1014.1,355.5 1006.6,347.8"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[184]" ng-click="paramo.showPropertyData(21, '78')">
						<polygon id="LOTE_F78_2_" class="property pb-sprite-1" points="1114.1,157.6 1166.4,157.6 1167.1,274.4 1114.1,274.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1133.9279 271.75)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1132.176 165.8436)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1158.2815 198.9756)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1118.241 198.7561)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1145.2598 206.2008)"><tspan x="0" y="0" class="st11 futura-book st13">78</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">180.00m2</tspan></text>
						<g>
							<polygon class="st17" points="1141.5,170.5 1149,178.2 1141.3,185.7 1141.3,185.7"/>
							<polygon class="st18" points="1141.5,170.5 1141.3,185.7 1133.8,178"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[185]" ng-click="paramo.showPropertyData(21, '79')">
						<polygon id="LOTE_F79_2_" class="property pb-sprite-2" points="1061.1,158.3 1061.9,274.4 1114.1,274.4 1114.1,157.6"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1078.3489 272.1856)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1078.7844 167.3745)" class="st2 futura-book st20">9.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1064.8484 199.6317)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1094.0562 208.6091)"><tspan x="0" y="0" class="st11 futura-book st13">79</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">180.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[186]" ng-click="paramo.showPropertyData(21, '80')">
						<polygon id="LOTE_F80_2_" class="property pb-sprite-1" points="1012.4,158.4 1013,275.1 1061.9,274.4 1061.1,158.3"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1028.4591 271.0928)" class="st2 futura-book st20">8.38</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1028.8958 168.2495)" class="st2 futura-book st20">8.38</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1016.7075 204.007)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1043.7279 210.5778)"><tspan x="0" y="0" class="st11 futura-book st13">80</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">167.64m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[187]" ng-click="paramo.showPropertyData(21, '81')">
						<path id="LOTE_F81_2_" class="property pb-sprite-2" d="M966,158.4c0,0,0.4,117,0.8,116.8c0.4-0.1,46.2-0.1,46.2-0.1l-0.5-116.7H966z"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 981.8518 271.9686)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 981.4133 167.8112)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 969.6622 208.3854)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 997.9952 214.7357)"><tspan x="0" y="0" class="st11 futura-book st13">81</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[188]" ng-click="paramo.showPropertyData(21, '82')">
						<polygon id="LOTE_F82_2_" class="property pb-sprite-1" points="919,158.4 919.9,275.2 966.8,275.2 966,158.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 935.2418 272.4058)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 934.5885 168.2507)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 924.1531 210.7888)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 951.1702 214.5165)"><tspan x="0" y="0" class="st11 futura-book st13">82</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[189]" ng-click="paramo.showPropertyData(21, '83')">
						<polygon id="LOTE_F83_2_" class="property pb-sprite-2" points="873,159 873.1,275.2 919.9,275.2 919,158.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 887.1051 271.9685)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 886.6673 168.2476)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 877.1071 210.3537)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 903.4728 216.4869)"><tspan x="0" y="0" class="st11 futura-book st13">83</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[190]" ng-click="paramo.showPropertyData(21, '84')">
						<polygon id="LOTE_F84_2_" class="property pb-sprite-1" points="873,159 873.1,275.2 826.8,275.8 826.1,159"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 841.5912 271.9685)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 840.4968 168.6881)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 829.8391 211.4463)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 856.6469 216.2658)"><tspan x="0" y="0" class="st11 futura-book st13">84</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[191]" ng-click="paramo.showPropertyData(21, '85')">
						<polygon id="LOTE_F85_2_" class="property pb-sprite-2" points="779.4,159 780.1,275.8 826.8,275.8 826.1,159"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 794.5446 271.7491)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 795.6407 167.8111)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 784.3277 211.2285)" class="st2 futura-book st20">20.00</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 810.4705 215.8285)"><tspan x="0" y="0" class="st11 futura-book st13">85</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">160.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[192]" ng-click="paramo.showPropertyData(21, '86')">
						<polygon id="LOTE_F86_2_" class="property pb-sprite-1" points="719.8,159.6 732.8,275.5 780.1,275.8 779.4,159"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 749.0307 271.7472)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 741.0549 168.4494)" class="st2 futura-book st20">10.18</text>
						<text transform="matrix(0.1557 0.9878 -0.9878 0.1557 729.6792 211.2766)" class="st2 futura-book st20">20.12</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 760.8052 218.0176)"><tspan x="0" y="0" class="st11 futura-book st13">86</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">181.76m2</tspan></text>
						<g>
							<polygon class="st17" points="755.5,175.5 763,183.2 755.3,190.8 755.3,190.8"/>
							<polygon class="st18" points="755.5,175.5 755.3,190.8 747.8,183"/>
						</g>
					</g>
					<g id="LINEAS_ISLA_F">
						<line class="st21" x1="333.9" y1="370.9" x2="333" y2="291.4"/>
						<path class="st21" d="M379.9,370.9c-1-1.1,0-94.4,0-94.4"/>
						<line class="st21" x1="426.8" y1="370.2" x2="426.1" y2="276.2"/>
						<line class="st21" x1="473.7" y1="370.3" x2="473" y2="276.2"/>
						<line class="st21" x1="519.9" y1="370.3" x2="519.8" y2="275.7"/>
						<line class="st21" x1="566.7" y1="370.3" x2="566" y2="275.8"/>
						<line class="st21" x1="613.6" y1="369.5" x2="612.9" y2="275.7"/>
						<line class="st21" x1="659.7" y1="369.7" x2="659.6" y2="275.7"/>
						<line class="st21" x1="706.7" y1="369.5" x2="705.9" y2="275"/>
						<path class="st21" d="M753.6,368.8c-0.1-1.7-0.8-93-0.8-93"/>
						<line class="st21" x1="799.8" y1="368.9" x2="799.7" y2="275.7"/>
						<line class="st21" x1="846.5" y1="368.8" x2="846.5" y2="275.6"/>
						<line class="st21" x1="893.5" y1="368.9" x2="892.6" y2="275.2"/>
						<line class="st21" x1="939.6" y1="368.1" x2="939.6" y2="275.1"/>
						<line class="st21" x1="986.6" y1="368.2" x2="985.6" y2="275.1"/>
						<line class="st21" x1="1039.5" y1="368" x2="1039.5" y2="274.5"/>
						<line class="st21" x1="780.1" y1="275.8" x2="779.4" y2="159"/>
						<line class="st21" x1="826.8" y1="275.8" x2="826.1" y2="159"/>
						<line class="st21" x1="873.1" y1="275.2" x2="873" y2="159"/>
						<line class="st21" x1="919.9" y1="275.2" x2="919" y2="158.4"/>
						<line class="st21" x1="966.8" y1="275.2" x2="966" y2="158.4"/>
						<line class="st21" x1="1013" y1="275.1" x2="1012.4" y2="158.4"/>
						<line class="st21" x1="1061.9" y1="274.4" x2="1061.1" y2="158.3"/>
						<line class="st21" x1="1114.1" y1="274.4" x2="1114.1" y2="157.6"/>
						<polyline class="st21" points="732.8,275.5 1167.1,274.4 1166.4,157.6"/>
					</g>
				</g>
				<g id="ISLA_G">
					<g class="property__active" ng-class="paramo.inmovablesClassList[193]" ng-click="paramo.showPropertyData(21, '87')">
						<path id="LOTE_G87_2_" class="property pb-sprite-2" d="M702.1,2.4c0,0,11.6,103.1,11.8,103.1h42.9V2.4H702.1z"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 727.5868 101.5095)" class="st2 futura-book st20">7.39</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 721.4608 11.795)" class="st2 futura-book st20">9.36</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 746.8691 43.5801)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(9.467980e-02 0.9955 -0.9955 9.467980e-02 709.3345 44.1228)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 735.1287 47.6342)"><tspan x="0" y="0" class="st11 futura-book st13">87</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">146.61m2</tspan></text>
						<g>
							<polygon class="st17" points="737.2,76.4 744.7,84.1 736.9,91.6 736.9,91.6"/>
							<polygon class="st18" points="737.2,76.4 736.9,91.6 729.4,83.9"/>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[194]" ng-click="paramo.showPropertyData(21, '88')">
						<polygon id="LOTE_G88_2_" class="property pb-sprite-1" points="803.7,2.4 803.8,104.6 756.8,105.5 756.8,2.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 770.7665 101.802)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 771.9335 12.2339)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 793.5491 42.1209)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 782.6873 47.6344)"><tspan x="0" y="0" class="st11 futura-book st13">88</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[195]" ng-click="paramo.showPropertyData(21, '89')">
						<polygon id="LOTE_G89_2_" class="property pb-sprite-2" points="850.5,2.4 850.6,104.5 803.8,104.6 803.7,2.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 818.3228 101.2184)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 819.1983 11.0671)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 839.938 42.1215)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 829.3674 48.2186)"><tspan x="0" y="0" class="st11 futura-book st13">89</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[196]" ng-click="paramo.showPropertyData(21, '90')">
						<polygon id="LOTE_G90_2_" class="property pb-sprite-1" points="896.8,1.8 896.8,104.5 850.6,104.5 850.5,2.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 865.8802 100.6358)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 865.5867 11.9437)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 886.037 40.6629)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 875.1679 48.509)"><tspan x="0" y="0" class="st11 futura-book st13">90</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[197]" ng-click="paramo.showPropertyData(21, '91')">
						<polygon id="LOTE_G91_2_" class="property pb-sprite-2" points="943.7,1.8 943.7,104 896.8,104.5 896.8,1.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 911.392 100.9268)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 910.8112 11.0666)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 933.005 40.6638)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 921.5556 48.51)"><tspan x="0" y="0" class="st11 futura-book st13">91</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[198]" ng-click="paramo.showPropertyData(21, '92')">
						<polygon id="LOTE_G92_2_" class="property pb-sprite-1" points="990.4,1.8 990.6,103.6 943.7,104 943.7,1.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 959.5306 100.0506)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 958.6577 11.6502)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 980.8514 41.5375)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 968.5283 48.5096)"><tspan x="0" y="0" class="st11 futura-book st13">92</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[199]" ng-click="paramo.showPropertyData(21, '93')">
						<polygon id="LOTE_G93_2_" class="property pb-sprite-2" points="1036.7,1.4 1036.7,103.9 990.6,103.6 990.4,1.8"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1005.9197 101.2182)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1005.3365 11.942)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1026.0737 43.8714)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1014.3285 49.0929)"><tspan x="0" y="0" class="st11 futura-book st13">93</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[200]" ng-click="paramo.showPropertyData(21, '94')">
						<polygon id="LOTE_G94_2_" class="property pb-sprite-1" points="1083.5,1 1083.5,104 1036.7,103.9 1036.7,1.4"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1052.0168 100.9276)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1051.4353 12.2344)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1073.6294 41.5387)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1061.8885 47.6351)"><tspan x="0" y="0" class="st11 futura-book st13">94</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[201]" ng-click="paramo.showPropertyData(21, '95')">
						<polygon id="LOTE_G95_2_" class="property pb-sprite-2" points="1130.4,1 1130.4,103.1 1083.5,104 1083.5,1"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1097.8232 100.3438)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1098.1174 10.4832)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1120.0173 41.5373)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1108.8599 47.0507)"><tspan x="0" y="0" class="st11 futura-book st13">95</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[202]" ng-click="paramo.showPropertyData(21, '96')">
						<polygon id="LOTE_G96_2_" class="property pb-sprite-1" points="1176.6,1 1176.6,103.2 1130.4,103.1 1130.4,1"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1144.5049 99.1776)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1144.7942 10.775)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1166.4047 39.4968)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1153.2048 45.8846)"><tspan x="0" y="0" class="st11 futura-book st13">96</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[203]" ng-click="paramo.showPropertyData(21, '97')">
						<polygon id="LOTE_G98_6_" class="property pb-sprite-2" points="1223.4,0.7 1223.6,103.6 1176.6,103.2 1176.6,1"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1192.0607 99.4681)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1191.1846 10.1916)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1212.2118 37.7461)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1201.0601 46.1751)"><tspan x="0" y="0" class="st11 futura-book st13">97</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[204]" ng-click="paramo.showPropertyData(21, '98')">
						<g>
							<polygon id="LOTE_G98_3_" class="property pb-sprite-1" points="1270.3,0.6 1270.4,103.3 1223.6,103.6 1223.4,0.7"/>
							<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1238.1556 99.4685)" class="st2 futura-book st20">8.00</text>
							<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1236.9885 10.1918)" class="st2 futura-book st20">8.00</text>
							<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1259.7688 39.2035)" class="st2 futura-book st20">17.50</text>
							<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1249.1954 45.5919)"><tspan x="0" y="0" class="st11 futura-book st13">98</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
						</g>
					</g>
					<g class="property__active" ng-class="paramo.inmovablesClassList[205]" ng-click="paramo.showPropertyData(21, '99')">
						<polygon id="LOTE_G99_2_" class="property pb-sprite-2" points="1317.8,0 1318,102.8 1270.4,103.3 1270.3,0.6"/>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1286.2975 99.7593)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(1 7.360022e-03 -7.360022e-03 1 1285.4213 10.4848)" class="st2 futura-book st20">8.00</text>
						<text transform="matrix(-7.360022e-03 1 -1 -7.360022e-03 1307.0308 40.6628)" class="st2 futura-book st20">17.50</text>
						<text transform="matrix(-1.010010e-03 1 -1 -1.010010e-03 1295.0013 48.2172)"><tspan x="0" y="0" class="st11 futura-book st13">99</tspan><tspan x="-17.3" y="12.1" class="st2 futura-book st13">140.00m2</tspan></text>
						<g>
							<polygon class="st17" points="1297.3,74.5 1304.8,82.2 1297.1,89.7 1297.1,89.7"/>
							<polygon class="st18" points="1297.3,74.5 1297.1,89.7 1289.6,82"/>
						</g>
					</g>
				</g>
				<g id="POLIGONO_GENERAL">
					<path class="st23" d="M-0.7,1191.5c7.9-2.4,17.2-5.9,27.2-11.1c11.5-6,20.6-12.6,27.5-18.4c61.1-45.1,122.2-90.3,183.4-135.4
						l69.6,94.2l102.6-76.1L340,951.8l425.6-313.4l69,93.8L1291.8,396c5.3-3.1,10.6-6.2,16-9.4c4.9-2.9,9.8-5.9,14.7-8.8
						c0.1-125.5,0.2-250.9,0.4-376.4l-4.9-1.4c-205.2,0.8-410.5,1.6-615.7,2.4c10.2,91,20.5,182,30.7,273.1
						c-126.9,0.3-253.8,0.7-380.8,1c-21.6,18.1-82.6,64.5-174.7,73.3c-87.8,8.4-153.9-22.1-179.1-35.3C-1.4,606.8-1,899.2-0.7,1191.5z"
						/>
				</g>
			</g>
		</svg>

    </div>

</body>
</html>