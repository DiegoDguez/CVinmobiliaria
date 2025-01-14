<html lang="es_MX">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="grupoccima.com">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords"
        content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Portto Blanco</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBLomasQuoteCtrl as lomas">

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
                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
                        src="media/assets/img/habitta/portto-blanco/logos/lomas_pb_logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/portto_blanco">Inicio</a></li>
                    <li><a href="#!/portto_blanco-promociones">Promociones</a></li>
                    <li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
                    <li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
                    <li class="quote-item">
                        <md-menu>
                            <button class="btn blue-bg futura-demi lighter ml-10"
                                ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
                    <li>
                        <md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24">
                                <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
                            </svg>
                        </md-button>
                    </li>
                </ul>

                <div class="quote-item right hide-on-large-only">
                    <md-menu>
                        <button class="btn blue-bg futura-demi lighter ml-10"
                            ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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

	<div class="modal-dialog" ng-class="lomas.dialogDisplay">
		<div class="backdrop-dialog" ng-click="lomas.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="lomas.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{lomas.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{lomas.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{lomas.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{lomas.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{lomas.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lomas.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{lomas.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lomas.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{lomas.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{lomas.month}} y paga la primera mensualidad hasta {{lomas.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{lomas.month + ' ' + lomas.year}}</p>
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
                    <h1 class="center-align">Lomas de Portto Blanco 2 </h1>
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
			viewBox="0 0 1366 555.4" style="enable-background:new 0 0 1366 555.4;" xml:space="preserve">
		<style type="text/css">
			.property pb-sprite-1{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
			.st1{fill:#FFFFFF;}
			.st2{font-family:'CenturyGothic';}
			.st3{font-size:10.4942px;}
			.st4{font-size:10.4943px;}
			.st5{fill:#FFBF00;}
			.st6{font-family:'CenturyGothic-Bold';}
			.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
			.st8{fill:none;stroke:#FFFFFF;stroke-width:1.0204;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
			.st9{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
			.st10{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
			.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#001555;}
			.st12{fill:#001555;}
			.st13{font-size:11.9018px;}
			.st14{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#002856;stroke-width:4.0816;stroke-miterlimit:10;}
		</style>
		<g id="Capa_1">
			
				<image style="overflow:visible;" width="1366" height="554" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/lomas/condos/lomas_2.jpg"  transform="matrix(1 0 0 1 1.377084e-03 3.940081e-03)">
			</image>
		</g>
		<g id="PORTTO_BLANCO_CIMATARIO_II">
			<g id="MACHOTE">
			</g>
			<g id="BASE">
			</g>
			<g id="ETAPA_2">
				<g id="ISLA_E">
					<g id="E-88_2_" class="property__active" ng-class="lomas.inmovablesClassList[87]" ng-click="lomas.showPropertyData(43, '88')">
						<polyline id="EL-88_2_" class="property pb-sprite-1" points="1119.5,96.7 1119.5,152.7 1072,152.7 1059.4,153.4 1047.1,155.3 1034.9,158.4 
							1023.1,162.7 1023.1,96.7 1119.5,96.7 				"/>
						<text transform="matrix(0 -1 1 0 1032.7878 142.3595)"><tspan x="0" y="0" class="st1 st2 st3">10.9</tspan><tspan x="20.3" y="0" class="st1 st2 st3">5</tspan></text>
						<text transform="matrix(0 -1 1 0 1117.1375 134.5646)"><tspan x="0" y="0" class="st1 st2 st3">9.3</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 1058.6843 106.3596)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1051.5947 134.1392)"><tspan x="0" y="0" class="st1 st2 st4">15</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.18 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1066.0574 122.0258)" class="st5 st6 st4">88</text>
					</g>
					<g id="E-89_2_"  class="property__active" ng-class="lomas.inmovablesClassList[88]" ng-click="lomas.showPropertyData(43, '89')">
						<polyline id="EL-89_2_" class="property pb-sprite-2" points="1023.1,96.7 1023.1,48.5 1119.5,48.5 1119.5,96.7 1023.1,96.7 				"/>
						<text transform="matrix(0 -1 1 0 1032.7878 82.4513)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 1117.1375 82.4513)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 1058.6843 58.1652)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1051.5991 82.4789)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1066.0558 69.9133)" class="st5 st6 st4">89</text>
					</g>
					<g id="E-90_2_"  class="property__active" ng-class="lomas.inmovablesClassList[89]" ng-click="lomas.showPropertyData(43, '90')">
						<polyline id="EL-90_2_" class="property pb-sprite-1" points="1023.1,48.5 1023.1,0.3 1119.5,0.3 1119.5,48.5 1023.1,48.5 				"/>
						<text transform="matrix(1 0 0 1 1056.5847 10.4264)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 1032.7878 34.257)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 1117.1375 34.257)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1051.5995 34.2766)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 1066.0542 21.7149)" class="st5 st6 st4">90</text>
					</g>
					<g id="DIVISIONES_9_">
						<line class="st8" x1="1023.1" y1="48.5" x2="1119.5" y2="48.5"/>
						<line class="st8" x1="1023.1" y1="96.7" x2="1119.5" y2="96.7"/>
					</g>
				</g>
				<g id="ISLA_F">
					<g id="F-91_1_"  class="property__active" ng-class="lomas.inmovablesClassList[90]" ng-click="lomas.showPropertyData(43, '91')">
						<polyline id="FL-91_1_" class="property pb-sprite-1" points="870.7,54.4 870.7,0.3 967.1,0.3 967.1,54.4 870.7,54.4 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 904.1677 10.4264)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3847 36.7698)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1482 24.6594)" class="st5 st6 st4">91</text>
						<g>
							<polyline class="st9" points="948.7,33.8 942.3,27.4 948.7,21 948.7,33.8 					"/>
							<polyline class="st10" points="948.7,33.8 948.7,21 955.1,27.4 948.7,33.8 					"/>
						</g>
					</g>
					<g id="F-92_1_"  class="property__active" ng-class="lomas.inmovablesClassList[91]" ng-click="lomas.showPropertyData(43, '92')">
						<polyline id="FL-92_1_" class="property pb-sprite-2" points="870.7,102.6 870.7,54.4 967.1,54.4 967.1,102.6 870.7,102.6 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 88.3429)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3794 88.3637)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1475 75.7963)" class="st5 st6 st4">92</text>
					</g>
					<g id="F-93_1_"  class="property__active" ng-class="lomas.inmovablesClassList[92]" ng-click="lomas.showPropertyData(43, '93')">
						<polyline id="FL-93_1_" class="property pb-sprite-1" points="870.7,150.8 870.7,102.6 967.1,102.6 967.1,150.8 870.7,150.8 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 136.5383)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3839 136.5631)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1511 123.9986)" class="st5 st6 st4">93</text>
					</g>
					<g id="F-94_1_"  class="property__active" ng-class="lomas.inmovablesClassList[93]" ng-click="lomas.showPropertyData(43, '94')">
						<polyline id="FL-94_1_" class="property pb-sprite-2" points="870.7,199 870.7,150.8 967.1,150.8 967.1,199 870.7,199 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 184.7404)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3806 184.7615)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1487 172.198)" class="st5 st6 st4">94</text>
					</g>
					<g id="F-95_1_"  class="property__active" ng-class="lomas.inmovablesClassList[94]" ng-click="lomas.showPropertyData(43, '95')">
						<polyline id="FL-95_1_" class="property pb-sprite-1" points="870.7,247.2 870.7,199 967.1,199 967.1,247.2 870.7,247.2 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3861 232.9491)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1513 220.3925)" class="st5 st6 st4">95</text>
					</g>
					<g id="F-96_1_"  class="property__active" ng-class="lomas.inmovablesClassList[95]" ng-click="lomas.showPropertyData(43, '96')">
						<polyline id="FL-96_1_" class="property pb-sprite-2" points="870.7,295.4 870.7,247.2 967.1,247.2 967.1,295.4 870.7,295.4 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 281.1213)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3818 281.1534)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1451 268.585)" class="st5 st6 st4">96</text>
					</g>
					<g id="F-97_1_"  class="property__active" ng-class="lomas.inmovablesClassList[96]" ng-click="lomas.showPropertyData(43, '97')">
						<polyline id="FL-97_1_" class="property pb-sprite-1" points="870.7,343.6 870.7,295.4 967.1,295.4 967.1,343.6 870.7,343.6 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 329.3244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 880.364 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 906.2664 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 890.3796 329.3449)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 912.1448 316.7853)" class="st5 st6 st4">97</text>
					</g>
					<g id="F-98_1_"  class="property__active" ng-class="lomas.inmovablesClassList[97]" ng-click="lomas.showPropertyData(43, '98')">
						<polyline id="FL-98_1_" class="property pb-sprite-1" points="967.1,440 918.9,440 918.9,343.6 967.1,343.6 967.1,440 				"/>
						<text transform="matrix(0 -1 1 0 964.7058 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 933.198 353.2267)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 933.198 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 928.5671 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 952.3542 413.1291)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 939.8015 398.8107)" class="st5 st6 st3">98</text>
						<g>
							<polyline class="st9" points="943,427.9 936.6,421.5 943,415.1 943,427.9 					"/>
							<polyline class="st10" points="943,427.9 943,415.1 949.4,421.5 943,427.9 					"/>
						</g>
					</g>
					<g id="F-99_1_"  class="property__active" ng-class="lomas.inmovablesClassList[98]" ng-click="lomas.showPropertyData(43, '99')">
						<polyline id="FL-99_1_" class="property pb-sprite-2" points="918.9,440 870.7,440 870.7,343.6 918.9,343.6 918.9,440 				"/>
						<text transform="matrix(0 -1 1 0 880.364 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 884.9929 353.2267)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 884.9929 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 904.1707 413.132)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 891.6003 398.8107)" class="st5 st6 st3">99</text>
					</g>
					<g id="F-100_1_"  class="property__active" ng-class="lomas.inmovablesClassList[99]" ng-click="lomas.showPropertyData(43, '100')">
						<polyline id="FL-100_1_" class="property pb-sprite-1" points="870.7,440 822.5,440 822.5,343.6 870.7,343.6 870.7,440 				"/>
						<text transform="matrix(1 0 0 1 836.8093 353.2267)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 836.8093 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 832.1785 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 855.9714 413.1291)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 843.4167 401.7892)" class="st5 st6 st3">100</text>
					</g>
					<g id="F-101_1_"  class="property__active" ng-class="lomas.inmovablesClassList[100]" ng-click="lomas.showPropertyData(43, '101')">
						<polyline id="FL-101_1_" class="property pb-sprite-2" points="822.5,440 774.3,440 774.3,343.6 822.5,343.6 822.5,440 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 788.6082 353.2267)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 788.6082 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 807.7839 413.1291)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 795.2136 401.7892)" class="st5 st6 st3">101</text>
						<g>
							<polyline class="st9" points="798.4,427.9 792,421.5 798.4,415.1 798.4,427.9 					"/>
							<polyline class="st10" points="798.4,427.9 798.4,415.1 804.8,421.5 798.4,427.9 					"/>
						</g>
					</g>
					<g id="F-102_1_"  class="property__active" ng-class="lomas.inmovablesClassList[101]" ng-click="lomas.showPropertyData(43, '102')">
						<polyline id="FL-102_1_" class="property pb-sprite-2" points="774.3,343.6 774.3,295.4 870.7,295.4 870.7,343.6 774.3,343.6 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 329.3244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9711 329.3465)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 316.2629)" class="st5 st6 st3">102</text>
					</g>
					<g id="F-103_1_"  class="property__active" ng-class="lomas.inmovablesClassList[102]" ng-click="lomas.showPropertyData(43, '103')">
						<polyline id="FL-103_1_" class="property pb-sprite-1" points="774.3,295.4 774.3,247.2 870.7,247.2 870.7,295.4 774.3,295.4 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9626 281.1491)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 268.0676)" class="st5 st6 st3">103</text>
					</g>
					<g id="F-104_1_"  class="property__active" ng-class="lomas.inmovablesClassList[103]" ng-click="lomas.showPropertyData(43, '104')">
						<polyline id="FL-104_1_" class="property pb-sprite-2" points="774.3,247.2 774.3,199 870.7,199 870.7,247.2 774.3,247.2 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 232.9211)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9669 232.9556)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 219.8732)" class="st5 st6 st3">104</text>
					</g>
					<g id="F-105_1_"  class="property__active" ng-class="lomas.inmovablesClassList[104]" ng-click="lomas.showPropertyData(43, '105')">
						<polyline id="FL-105_1_" class="property pb-sprite-1" points="774.3,199 774.3,150.8 870.7,150.8 870.7,199 774.3,199 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9624 184.7552)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 171.6789)" class="st5 st6 st3">105</text>
					</g>
					<g id="F-106_1_"  class="property__active" ng-class="lomas.inmovablesClassList[105]" ng-click="lomas.showPropertyData(43, '106')">
						<polyline id="FL-106_1_" class="property pb-sprite-2" points="774.3,150.8 774.3,102.6 870.7,102.6 870.7,150.8 774.3,150.8 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 136.5383)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9637 136.5617)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 123.4787)" class="st5 st6 st3">106</text>
					</g>
					<g id="F-107_1_" class="property__active" ng-class="lomas.inmovablesClassList[106]" ng-click="lomas.showPropertyData(43, '107')">
						<polyline id="FL-107_1_" class="property pb-sprite-1" points="774.3,102.6 774.3,54.4 870.7,54.4 870.7,102.6 774.3,102.6 				"/>
						<text transform="matrix(0 -1 1 0 783.9812 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 88.3429)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 809.8835 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 796.9611 88.3643)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 75.2853)" class="st5 st6 st3">107</text>
					</g>
					<g id="F-108_1_" class="property__active" ng-class="lomas.inmovablesClassList[107]" ng-click="lomas.showPropertyData(43, '108')">
						<polyline id="FL-108_1_" class="property pb-sprite-2" points="774.3,54.4 774.3,0.3 870.7,0.3 870.7,54.4 774.3,54.4 				"/>
						<text transform="matrix(1 0 0 1 807.7839 10.4264)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 783.9812 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 868.3328 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 798.9634 40.1655)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 812.53 24.1408)" class="st5 st6 st3">108</text>
						<g>
							<polyline class="st9" points="792.8,33.8 786.4,27.4 792.8,21 792.8,33.8 					"/>
							<polyline class="st10" points="792.8,33.8 792.8,21 799.2,27.4 792.8,33.8 					"/>
						</g>
					</g>
					<g id="DIVISIONES_8_">
						<line class="st8" x1="870.7" y1="440" x2="870.7" y2="0.3"/>
						<line class="st8" x1="774.3" y1="54.4" x2="967.1" y2="54.4"/>
						<line class="st8" x1="774.3" y1="102.6" x2="967.1" y2="102.6"/>
						<line class="st8" x1="774.3" y1="150.8" x2="967.1" y2="150.8"/>
						<line class="st8" x1="774.3" y1="199" x2="967.1" y2="199"/>
						<line class="st8" x1="774.3" y1="247.2" x2="967.1" y2="247.2"/>
						<line class="st8" x1="774.3" y1="295.4" x2="967.1" y2="295.4"/>
						<line class="st8" x1="774.3" y1="343.6" x2="967.1" y2="343.6"/>
						<line class="st8" x1="918.9" y1="343.6" x2="918.9" y2="440"/>
						<line class="st8" x1="822.5" y1="440" x2="822.5" y2="343.6"/>
						<line class="st8" x1="870.7" y1="-0.6" x2="870.7" y2="-0.6"/>
					</g>
				</g>
				<g id="ISLA_G">
					<g id="G-109_2_" class="property__active" ng-class="lomas.inmovablesClassList[108]" ng-click="lomas.showPropertyData(43, '109')">
						<polyline id="GL-109_2_" class="property pb-sprite-1" points="621.9,54.4 621.9,0.3 718.3,0.3 718.3,54.4 621.9,54.4 				"/>
						<text transform="matrix(0 -1 1 0 631.5608 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 715.8972 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 655.3708 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.044 40.1651)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 24.1408)" class="st5 st6 st3">109</text>
						<g>
							<polyline class="st9" points="699.9,33.8 693.5,27.4 699.9,21 699.9,33.8 					"/>
							<polyline class="st10" points="699.9,33.8 699.9,21 706.3,27.4 699.9,33.8 					"/>
						</g>
					</g>
					<g id="G-110_2_" class="property__active" ng-class="lomas.inmovablesClassList[109]" ng-click="lomas.showPropertyData(43, '110')">
						<polyline id="GL-110_2_" class="property pb-sprite-2" points="621.9,102.6 621.9,54.4 718.3,54.4 718.3,102.6 621.9,102.6 				"/>
						<text transform="matrix(0 -1 1 0 631.5579 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.8972 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.0417 88.3596)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 75.2853)" class="st5 st6 st3">110</text>
					</g>
					<g id="G-111_2_" class="property__active" ng-class="lomas.inmovablesClassList[110]" ng-click="lomas.showPropertyData(43, '111')">
						<polyline id="GL-111_2_" class="property pb-sprite-1" points="621.9,150.8 621.9,102.6 718.3,102.6 718.3,150.8 621.9,150.8 				"/>
						<text transform="matrix(0 -1 1 0 631.5579 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.9031 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.0443 136.5609)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 123.4787)" class="st5 st6 st3">111</text>
					</g>
					<g id="G-112_2_" class="property__active" ng-class="lomas.inmovablesClassList[111]" ng-click="lomas.showPropertyData(43, '112')">
						<polyline id="GL-112_2_" class="property pb-sprite-2" points="621.9,199 621.9,150.8 718.3,150.8 718.3,199 621.9,199 				"/>
						<text transform="matrix(0 -1 1 0 631.5579 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.8972 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.041 184.7486)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 171.6789)" class="st5 st6 st3">112</text>
					</g>
					<g id="G-113_2_" class="property__active" ng-class="lomas.inmovablesClassList[112]" ng-click="lomas.showPropertyData(43, '113')">
						<polyline id="GL-113_2_" class="property pb-sprite-1" points="621.9,247.2 621.9,199 718.3,199 718.3,247.2 621.9,247.2 				"/>
						<text transform="matrix(0 -1 1 0 631.5608 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.9031 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.0377 232.9567)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 219.256)" class="st5 st6 st3">113</text>
					</g>
					<g id="G-114_2_" class="property__active" ng-class="lomas.inmovablesClassList[113]" ng-click="lomas.showPropertyData(43, '114')">
						<polyline id="GL-114_2_" class="property pb-sprite-2" points="621.9,295.4 621.9,247.2 718.3,247.2 718.3,295.4 621.9,295.4 				"/>
						<text transform="matrix(0 -1 1 0 631.5579 281.1213)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.8972 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.0393 281.1454)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 660.3484 268.5916)" class="st5 st6 st4">114</text>
					</g>
					<g id="G-115_2_" class="property__active" ng-class="lomas.inmovablesClassList[114]" ng-click="lomas.showPropertyData(43, '115')">
						<polyline id="GL-115_2_" class="property pb-sprite-1" points="621.9,343.6 621.9,295.4 718.3,295.4 718.3,343.6 621.9,343.6 				"/>
						<text transform="matrix(0 -1 1 0 631.5608 329.3244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 715.8972 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 657.47 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 643.0409 329.3438)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 660.1106 316.2629)" class="st5 st6 st3">115</text>
					</g>
					<g id="G-116_2_" class="property__active" ng-class="lomas.inmovablesClassList[115]" ng-click="lomas.showPropertyData(43, '116')">
						<polyline id="GL-116_2_" class="property pb-sprite-1" points="718.3,440 670.1,440 670.1,343.6 718.3,343.6 718.3,440 				"/>
						<text transform="matrix(0 -1 1 0 715.8972 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 684.3738 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 684.3738 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 679.7483 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 703.5535 411.6408)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.0  m2</tspan></text>
						<text transform="matrix(0 -1 1 0 690.9792 401.7892)" class="st5 st6 st3">116</text>
						<g>
							<polyline class="st9" points="694.2,427.9 687.8,421.5 694.2,415.1 694.2,427.9 					"/>
							<polyline class="st10" points="694.2,427.9 694.2,415.1 700.6,421.5 694.2,427.9 					"/>
						</g>
					</g>
					<g id="G-117_2_" class="property__active" ng-class="lomas.inmovablesClassList[116]" ng-click="lomas.showPropertyData(43, '117')">
						<polyline id="GL-117_2_" class="property pb-sprite-2" points="670.1,440 621.9,440 621.9,343.6 670.1,343.6 670.1,440 				"/>
						<text transform="matrix(0 -1 1 0 631.5608 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 636.1897 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 636.1897 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 655.3538 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 642.801 401.7892)" class="st5 st6 st3">117</text>
					</g>
					<g id="G-118_2_" class="property__active" ng-class="lomas.inmovablesClassList[117]" ng-click="lomas.showPropertyData(43, '118')">
						<polyline id="GL-118_2_" class="property pb-sprite-1" points="621.9,440 573.7,440 573.7,343.6 621.9,343.6 621.9,440 				"/>
						<text transform="matrix(1 0 0 1 587.9866 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 587.9866 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 583.3655 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 607.1624 423.5471)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 592.8235 401.7892)" class="st5 st6 st3">118</text>
					</g>
					<g id="G-119_2_" class="property__active" ng-class="lomas.inmovablesClassList[118]" ng-click="lomas.showPropertyData(43, '119')">
						<polyline id="GL-119_2_" class="property pb-sprite-2" points="573.7,440 525.5,440 525.5,343.6 573.7,343.6 573.7,440 				"/>
						<text transform="matrix(0 -1 1 0 535.1711 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 539.8 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 539.8 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 558.9631 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 545.2473 401.7892)" class="st5 st6 st3">119</text>
						<g>
							<polyline class="st9" points="549.6,427.9 543.2,421.5 549.6,415.1 549.6,427.9 					"/>
							<polyline class="st10" points="549.6,427.9 549.6,415.1 556,421.5 549.6,427.9 					"/>
						</g>
					</g>
					<g id="G-120_2_" class="property__active" ng-class="lomas.inmovablesClassList[119]" ng-click="lomas.showPropertyData(43, '120')">
						<polyline id="GL-120_2_" class="property pb-sprite-2" points="525.5,343.6 525.5,295.4 621.9,295.4 621.9,343.6 525.5,343.6 				"/>
						<text transform="matrix(0 -1 1 0 535.1711 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1402 329.3486)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 316.2629)" class="st5 st6 st3">120</text>
					</g>
					<g id="G-121_2_" class="property__active" ng-class="lomas.inmovablesClassList[120]" ng-click="lomas.showPropertyData(43, '121')">
						<polyline id="GL-121_2_" class="property pb-sprite-1" points="525.5,295.4 525.5,247.2 621.9,247.2 621.9,295.4 525.5,295.4 				"/>
						<text transform="matrix(0 -1 1 0 535.175 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1367 281.1492)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 268.0676)" class="st5 st6 st3">121</text>
					</g>
					<g id="G-122_2_" class="property__active" ng-class="lomas.inmovablesClassList[121]" ng-click="lomas.showPropertyData(43, '122')">
						<polyline id="GL-122_2_" class="property pb-sprite-2" points="525.5,247.2 525.5,199 621.9,199 621.9,247.2 525.5,247.2 				"/>
						<text transform="matrix(0 -1 1 0 535.175 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 232.9347)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1351 232.9527)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 219.8732)" class="st5 st6 st3">122</text>
					</g>
					<g id="G-123_2_" class="property__active" ng-class="lomas.inmovablesClassList[122]" ng-click="lomas.showPropertyData(43, '123')">
						<polyline id="GL-123_2_" class="property pb-sprite-1" points="525.5,199 525.5,150.8 621.9,150.8 621.9,199 525.5,199 				"/>
						<text transform="matrix(0 -1 1 0 535.175 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1345 184.7544)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 171.6789)" class="st5 st6 st3">123</text>
					</g>
					<g id="G-124_2_" class="property__active" ng-class="lomas.inmovablesClassList[123]" ng-click="lomas.showPropertyData(43, '124')">
						<polyline id="GL-124_2_" class="property pb-sprite-2" points="525.5,150.8 525.5,102.6 621.9,102.6 621.9,150.8 525.5,150.8 				"/>
						<text transform="matrix(0 -1 1 0 535.175 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 136.5383)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1387 136.5599)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 123.4787)" class="st5 st6 st3">124</text>
					</g>
					<g id="G-125_2_" class="property__active" ng-class="lomas.inmovablesClassList[124]" ng-click="lomas.showPropertyData(43, '125')">
						<polyline id="GL-125_2_" class="property pb-sprite-1" points="525.5,102.6 525.5,54.4 621.9,54.4 621.9,102.6 525.5,102.6 				"/>
						<text transform="matrix(0 -1 1 0 535.1711 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 561.0725 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1401 88.3605)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 75.2853)" class="st5 st6 st3">125</text>
					</g>
					<g id="G-126_2_" class="property__active" ng-class="lomas.inmovablesClassList[125]" ng-click="lomas.showPropertyData(43, '126')">
						<polyline id="GL-126_2_" class="property pb-sprite-2" points="525.5,54.4 525.5,0.3 621.9,0.3 621.9,54.4 525.5,54.4 				"/>
						<text transform="matrix(0 -1 1 0 535.1711 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 619.5159 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 558.9734 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 548.1404 40.1651)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 563.7278 24.1408)" class="st5 st6 st3">126</text>
						<g>
							<polyline class="st9" points="544,33.8 537.6,27.4 544,21 544,33.8 					"/>
							<polyline class="st10" points="544,33.8 544,21 550.4,27.4 544,33.8 					"/>
						</g>
					</g>
					<g id="DIVISIONES_5_">
						<line class="st8" x1="621.9" y1="440" x2="621.9" y2="0.3"/>
						<line class="st8" x1="525.5" y1="54.4" x2="718.3" y2="54.4"/>
						<line class="st8" x1="525.5" y1="102.6" x2="718.3" y2="102.6"/>
						<line class="st8" x1="525.5" y1="150.8" x2="718.3" y2="150.8"/>
						<line class="st8" x1="525.5" y1="199" x2="718.3" y2="199"/>
						<line class="st8" x1="525.5" y1="247.2" x2="718.3" y2="247.2"/>
						<line class="st8" x1="525.5" y1="295.4" x2="718.3" y2="295.4"/>
						<line class="st8" x1="525.5" y1="343.6" x2="718.3" y2="343.6"/>
						<line class="st8" x1="670.1" y1="343.6" x2="670.1" y2="440"/>
						<line class="st8" x1="573.7" y1="440" x2="573.7" y2="343.6"/>
					</g>
				</g>
				<g id="ISLA_H">
					<g id="H-127_1_" class="property__active" ng-class="lomas.inmovablesClassList[126]" ng-click="lomas.showPropertyData(43, '127')">
						<polyline id="HL-127_1_" class="property pb-sprite-1" points="373.1,54.4 373.1,0.3 469.5,0.3 469.5,54.4 373.1,54.4 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 37.2043)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 406.5408 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.7191 40.161)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 27.0851)" class="st5 st6 st3">127</text>
						<g>
							<polyline class="st9" points="451.1,33.8 444.7,27.4 451.1,21 451.1,33.8 					"/>
							<polyline class="st10" points="451.1,33.8 451.1,21 457.4,27.4 451.1,33.8 					"/>
						</g>
					</g>
					<g id="H-128_1_" class="property__active" ng-class="lomas.inmovablesClassList[127]" ng-click="lomas.showPropertyData(43, '128')">
						<polyline id="HL-128_1_" class="property pb-sprite-2" points="373.1,102.6 373.1,54.4 469.5,54.4 469.5,102.6 373.1,102.6 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 88.3429)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.7177 88.3614)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 75.2853)" class="st5 st6 st3">128</text>
					</g>
					<g id="H-129_1_" class="property__active" ng-class="lomas.inmovablesClassList[128]" ng-click="lomas.showPropertyData(43, '129')">
						<polyline id="HL-129_1_" class="property pb-sprite-1" points="373.1,150.8 373.1,102.6 469.5,102.6 469.5,150.8 373.1,150.8 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 136.5383)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.7144 136.5588)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 123.4787)" class="st5 st6 st3">129</text>
					</g>
					<g id="H-130_1_" class="property__active" ng-class="lomas.inmovablesClassList[129]" ng-click="lomas.showPropertyData(43, '130')">
						<polyline id="HL-130_1_" class="property pb-sprite-2" points="373.1,199 373.1,150.8 469.5,150.8 469.5,199 373.1,199 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.719 184.7562)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 171.6789)" class="st5 st6 st3">130</text>
					</g>
					<g id="H-131_1_" class="property__active" ng-class="lomas.inmovablesClassList[130]" ng-click="lomas.showPropertyData(43, '131')">
						<polyline id="HL-131_1_" class="property pb-sprite-1" points="373.1,247.2 373.1,199 469.5,199 469.5,247.2 373.1,247.2 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 232.9347)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.7166 232.9556)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 219.256)" class="st5 st6 st3">131</text>
					</g>
					<g id="H-132_1_" class="property__active" ng-class="lomas.inmovablesClassList[131]" ng-click="lomas.showPropertyData(43, '132')">
						<polyline id="HL-132_1_" class="property pb-sprite-2" points="373.1,295.4 373.1,247.2 469.5,247.2 469.5,295.4 373.1,295.4 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.7153 281.1549)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 268.0676)" class="st5 st6 st3">132</text>
					</g>
					<g id="H-133_1_" class="property__active" ng-class="lomas.inmovablesClassList[132]" ng-click="lomas.showPropertyData(43, '133')">
						<polyline id="HL-133_1_" class="property pb-sprite-1" points="373.1,343.6 373.1,295.4 469.5,295.4 469.5,343.6 373.1,343.6 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 467.0911 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 408.6399 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 395.714 329.3435)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 411.3049 316.2629)" class="st5 st6 st3">133</text>
					</g>
					<g id="H-134_1_" class="property__active" ng-class="lomas.inmovablesClassList[133]" ng-click="lomas.showPropertyData(43, '134')">
						<polyline id="HL-134_1_" class="property pb-sprite-1" points="469.5,440 421.3,440 421.3,343.6 469.5,343.6 469.5,440 				"/>
						<text transform="matrix(0 -1 1 0 467.0911 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 435.5657 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 435.5657 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 430.9426 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 454.7249 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 442.1741 401.7892)" class="st5 st6 st3">134</text>
						<g>
							<polyline class="st9" points="445.4,427.9 439,421.5 445.4,415.1 445.4,427.9 					"/>
							<polyline class="st10" points="445.4,427.9 445.4,415.1 451.8,421.5 445.4,427.9 					"/>
						</g>
					</g>
					<g id="H-135_1_" class="property__active" ng-class="lomas.inmovablesClassList[134]" ng-click="lomas.showPropertyData(43, '135')">
						<polyline id="HL-135_1_" class="property pb-sprite-2" points="421.3,440 373.1,440 373.1,343.6 421.3,343.6 421.3,440 				"/>
						<text transform="matrix(0 -1 1 0 382.7424 404.4426)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 387.3635 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 387.3635 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 406.5403 411.6408)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 393.9749 401.7902)" class="st5 st6 st3">135</text>
					</g>
					<g id="H-136_1_" class="property__active" ng-class="lomas.inmovablesClassList[135]" ng-click="lomas.showPropertyData(43, '136')">
						<polyline id="HL-136_1_" class="property pb-sprite-1" points="373.1,440 324.9,440 324.9,343.6 373.1,343.6 373.1,440 				"/>
						<text transform="matrix(1 0 0 1 339.179 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 339.179 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 334.552 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 358.3411 411.6535)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 345.7883 401.7892)" class="st5 st6 st3">136</text>
					</g>
					<g id="H-137_1_" class="property__active" ng-class="lomas.inmovablesClassList[136]" ng-click="lomas.showPropertyData(43, '137')">
						<polyline id="HL-137_1_" class="property pb-sprite-2" points="324.9,440 276.7,440 276.7,343.6 324.9,343.6 324.9,440 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 290.9778 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 290.9778 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 310.1584 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 298.2092 401.7892)" class="st5 st6 st3">137</text>
						<g>
							<polyline class="st9" points="300.8,427.9 294.4,421.5 300.8,415.1 300.8,427.9 					"/>
							<polyline class="st10" points="300.8,427.9 300.8,415.1 307.2,421.5 300.8,427.9 					"/>
						</g>
					</g>
					<g id="H-138_1_" class="property__active" ng-class="lomas.inmovablesClassList[137]" ng-click="lomas.showPropertyData(43, '138')">
						<polyline id="HL-138_1_" class="property pb-sprite-2" points="276.7,343.6 276.7,295.4 373.1,295.4 373.1,343.6 276.7,343.6 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 329.3244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6936 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.326 329.3428)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.9084 316.2629)" class="st5 st6 st3">138</text>
					</g>
					<g id="H-139_1_" class="property__active" ng-class="lomas.inmovablesClassList[138]" ng-click="lomas.showPropertyData(43, '139')">
						<polyline id="HL-139_1_" class="property pb-sprite-1" points="276.7,295.4 276.7,247.2 373.1,247.2 373.1,295.4 276.7,295.4 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6907 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3264 281.1483)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.9084 268.0676)" class="st5 st6 st3">139</text>
					</g>
					<g id="H-140_1_" class="property__active" ng-class="lomas.inmovablesClassList[139]" ng-click="lomas.showPropertyData(43, '140')">
						<polyline id="HL-140_1_" class="property pb-sprite-2" points="276.7,247.2 276.7,199 373.1,199 373.1,247.2 276.7,247.2 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6936 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3238 232.95)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.9084 219.8732)" class="st5 st6 st3">140</text>
					</g>
					<g id="H-141_1_" class="property__active" ng-class="lomas.inmovablesClassList[140]" ng-click="lomas.showPropertyData(43, '141')">
						<polyline id="HL-141_1_" class="property pb-sprite-1" points="276.7,199 276.7,150.8 373.1,150.8 373.1,199 276.7,199 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6907 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3271 184.7574)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.9084 171.6789)" class="st5 st6 st3">141</text>
					</g>
					<g id="H-142_1_" class="property__active" ng-class="lomas.inmovablesClassList[141]" ng-click="lomas.showPropertyData(43, '142')">
						<polyline id="HL-142_1_" class="property pb-sprite-2" points="276.7,150.8 276.7,102.6 373.1,102.6 373.1,150.8 276.7,150.8 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6907 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3245 136.5551)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.8938 123.4787)" class="st5 st6 st3">142</text>
					</g>
					<g id="H-143_1_" class="property__active" ng-class="lomas.inmovablesClassList[142]" ng-click="lomas.showPropertyData(43, '143')">
						<polyline id="HL-143_1_" class="property pb-sprite-1" points="276.7,102.6 276.7,54.4 373.1,54.4 373.1,102.6 276.7,102.6 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 88.3429)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6868 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3239 88.3587)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.8938 74.8996)" class="st5 st6 st3">143</text>
					</g>
					<g id="H-144_1_" class="property__active" ng-class="lomas.inmovablesClassList[143]" ng-click="lomas.showPropertyData(43, '144')">
						<polyline id="HL-144_1_" class="property pb-sprite-2" points="276.7,54.4 276.7,0.3 373.1,0.3 373.1,54.4 276.7,54.4 				"/>
						<text transform="matrix(0 -1 1 0 286.3499 37.2043)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 370.6868 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 312.2522 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 299.3232 40.1691)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 314.9084 24.1408)" class="st5 st6 st3">144</text>
						<g>
							<polyline class="st9" points="295.1,33.8 288.8,27.4 295.1,21 295.1,33.8 					"/>
							<polyline class="st10" points="295.1,33.8 295.1,21 301.5,27.4 295.1,33.8 					"/>
						</g>
					</g>
					<g id="DIVISIONES_4_">
						<line class="st8" x1="373.1" y1="440" x2="373.1" y2="0.3"/>
						<line class="st8" x1="276.7" y1="54.4" x2="469.5" y2="54.4"/>
						<line class="st8" x1="276.7" y1="102.6" x2="469.5" y2="102.6"/>
						<line class="st8" x1="276.7" y1="150.8" x2="469.5" y2="150.8"/>
						<line class="st8" x1="276.7" y1="199" x2="469.5" y2="199"/>
						<line class="st8" x1="276.7" y1="247.2" x2="469.5" y2="247.2"/>
						<line class="st8" x1="276.7" y1="295.4" x2="469.5" y2="295.4"/>
						<line class="st8" x1="276.7" y1="343.6" x2="469.5" y2="343.6"/>
						<line class="st8" x1="421.3" y1="343.6" x2="421.3" y2="440"/>
						<line class="st8" x1="324.9" y1="440" x2="324.9" y2="343.6"/>
					</g>
				</g>
				<g id="ISLA_I">
					<g id="I-145_2_" class="property__active" ng-class="lomas.inmovablesClassList[144]" ng-click="lomas.showPropertyData(43, '145')">
						<polyline id="IL-145_2_" class="property pb-sprite-1" points="124.3,54.4 124.3,0.3 220.7,0.3 220.7,54.4 124.3,54.4 				"/>
						<text transform="matrix(0 -1 1 0 133.927 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4165 40.1634)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 24.1408)" class="st5 st6 st3">145</text>
						<g>
							<polyline class="st9" points="202.2,33.8 195.9,27.4 202.2,21 202.2,33.8 					"/>
							<polyline class="st10" points="202.2,33.8 202.2,21 208.6,27.4 202.2,33.8 					"/>
						</g>
					</g>
					<g id="I-146_2_" class="property__active" ng-class="lomas.inmovablesClassList[145]" ng-click="lomas.showPropertyData(43, '146')">
						<polyline id="IL-146_2_" class="property pb-sprite-2" points="124.3,102.6 124.3,54.4 220.7,54.4 220.7,102.6 124.3,102.6 				"/>
						<text transform="matrix(0 -1 1 0 133.927 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4152 88.3569)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 75.2853)" class="st5 st6 st3">146</text>
					</g>
					<g id="I-147_2_" class="property__active" ng-class="lomas.inmovablesClassList[146]" ng-click="lomas.showPropertyData(43, '147')">
						<polyline id="IL-147_2_" class="property pb-sprite-1" points="124.3,150.8 124.3,102.6 220.7,102.6 220.7,150.8 124.3,150.8 				"/>
						<text transform="matrix(0 -1 1 0 133.928 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4158 136.5592)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 123.4787)" class="st5 st6 st3">147</text>
					</g>
					<g id="I-148_2_" class="property__active" ng-class="lomas.inmovablesClassList[147]" ng-click="lomas.showPropertyData(43, '148')">
						<polyline id="IL-148_2_" class="property pb-sprite-2" points="124.3,199 124.3,150.8 220.7,150.8 220.7,199 124.3,199 				"/>
						<text transform="matrix(0 -1 1 0 133.928 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4145 184.7566)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 171.6789)" class="st5 st6 st3">148</text>
					</g>
					<g id="I-149_2_" class="property__active" ng-class="lomas.inmovablesClassList[148]" ng-click="lomas.showPropertyData(43, '149')">
						<polyline id="IL-149_2_" class="property pb-sprite-1" points="124.3,247.2 124.3,199 220.7,199 220.7,247.2 124.3,247.2 				"/>
						<text transform="matrix(0 -1 1 0 133.9358 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4151 232.9501)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 219.256)" class="st5 st6 st3">149</text>
					</g>
					<g id="I-150_2_" class="property__active" ng-class="lomas.inmovablesClassList[149]" ng-click="lomas.showPropertyData(43, '150')">
						<polyline id="IL-150_2_" class="property pb-sprite-2" points="124.3,295.4 124.3,247.2 220.7,247.2 220.7,295.4 124.3,295.4 				"/>
						<text transform="matrix(0 -1 1 0 133.927 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 281.1213)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4138 281.1476)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 268.0676)" class="st5 st6 st3">150</text>
					</g>
					<g id="I-151_2_" class="property__active" ng-class="lomas.inmovablesClassList[150]" ng-click="lomas.showPropertyData(43, '151')">
						<polyline id="IL-151_2_" class="property pb-sprite-1" points="124.3,343.6 124.3,295.4 220.7,295.4 220.7,343.6 124.3,343.6 				"/>
						<text transform="matrix(0 -1 1 0 133.9358 329.3244)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 218.2698 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 159.8293 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 145.4163 329.342)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 162.4827 316.2629)" class="st5 st6 st3">151</text>
					</g>
					<g id="I-152_2_" class="property__active" ng-class="lomas.inmovablesClassList[151]" ng-click="lomas.showPropertyData(43, '152')">
						<polyline id="IL-152_2_" class="property pb-sprite-1" points="220.7,440 172.5,440 172.5,343.6 220.7,343.6 220.7,440 				"/>
						<text transform="matrix(0 -1 1 0 218.2698 404.4318)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 186.7629 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 186.7629 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 182.137 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 205.9241 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 193.3645 401.7892)" class="st5 st6 st3">152</text>
						<g>
							<polyline class="st9" points="196.6,427.9 190.2,421.5 196.6,415.1 196.6,427.9 					"/>
							<polyline class="st10" points="196.6,427.9 196.6,415.1 203,421.5 196.6,427.9 					"/>
						</g>
					</g>
					<g id="I-153_2_" class="property__active" ng-class="lomas.inmovablesClassList[152]" ng-click="lomas.showPropertyData(43, '153')">
						<polyline id="IL-153_2_" class="property pb-sprite-2" points="172.5,440 124.3,440 124.3,343.6 172.5,343.6 172.5,440 				"/>
						<text transform="matrix(0 -1 1 0 133.927 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 138.5608 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 138.5608 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 157.7209 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 145.1682 401.7892)" class="st5 st6 st3">153</text>
					</g>
					<g id="I-154_2_" class="property__active" ng-class="lomas.inmovablesClassList[153]" ng-click="lomas.showPropertyData(43, '154')">
						<polyline id="IL-154_2_" class="property pb-sprite-1" points="124.3,440 76.1,440 76.1,343.6 124.3,343.6 124.3,440 				"/>
						<text transform="matrix(1 0 0 1 90.3577 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 89.8831 354.3)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 85.7258 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 109.5354 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 96.9622 401.7892)" class="st5 st6 st3">154</text>
					</g>
					<g id="I-155_2_" class="property__active" ng-class="lomas.inmovablesClassList[154]" ng-click="lomas.showPropertyData(43, '155')">
						<polyline id="IL-155_2_" class="property pb-sprite-2" points="76.1,440 27.9,440 27.9,343.6 76.1,343.6 76.1,440 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 404.4387)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 42.175 437.5715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 42.175 353.2209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 61.3303 411.6447)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.6" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
						<text transform="matrix(0 -1 1 0 49.387 401.7902)" class="st5 st6 st3">155</text>
						<g>
							<polyline class="st9" points="52,427.9 45.6,421.5 52,415.1 52,427.9 					"/>
							<polyline class="st10" points="52,427.9 52,415.1 58.4,421.5 52,427.9 					"/>
						</g>
					</g>
					<g id="I-156_2_" class="property__active" ng-class="lomas.inmovablesClassList[155]" ng-click="lomas.showPropertyData(43, '156')">
						<polyline id="IL-156_2_" class="property pb-sprite-2" points="27.9,343.6 27.9,295.4 124.3,295.4 124.3,343.6 27.9,343.6 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 329.3176)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 305.0305)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9854 329.3426)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 316.2629)" class="st5 st6 st3">156</text>
					</g>
					<g id="I-157_2_" class="property__active" ng-class="lomas.inmovablesClassList[156]" ng-click="lomas.showPropertyData(43, '157')">
						<polyline id="IL-157_2_" class="property pb-sprite-1" points="27.9,295.4 27.9,247.2 124.3,247.2 124.3,295.4 27.9,295.4 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 281.1213)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 256.8361)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9838 281.1422)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 268.0676)" class="st5 st6 st3">157</text>
						<text transform="matrix(0 -1 1 0 121.884 281.1252)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
					</g>
					<g id="I-158_2_" class="property__active" ng-class="lomas.inmovablesClassList[157]" ng-click="lomas.showPropertyData(43, '158')">
						<polyline id="IL-158_2_" class="property pb-sprite-2" points="27.9,247.2 27.9,199 124.3,199 124.3,247.2 27.9,247.2 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 232.925)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 232.9211)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 208.6369)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.99 232.9527)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 219.8732)" class="st5 st6 st3">158</text>
					</g>
					<g id="I-159_2_" class="property__active" ng-class="lomas.inmovablesClassList[158]" ng-click="lomas.showPropertyData(43, '159')">
						<polyline id="IL-159_2_" class="property pb-sprite-1" points="27.9,199 27.9,150.8 124.3,150.8 124.3,199 27.9,199 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 184.7336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 160.4377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9855 184.7552)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 171.6789)" class="st5 st6 st3">159</text>
					</g>
					<g id="I-160_2_" class="property__active" ng-class="lomas.inmovablesClassList[159]" ng-click="lomas.showPropertyData(43, '160')">
						<polyline id="IL-160_2_" class="property pb-sprite-2" points="27.9,150.8 27.9,102.6 124.3,102.6 124.3,150.8 27.9,150.8 				"/>
						<text transform="matrix(0 -1 1 0 37.5481 136.5343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 136.5383)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 112.2482)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9858 136.5539)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 123.4787)" class="st5 st6 st3">160</text>
					</g>
					<g id="I-161_2_" class="property__active" ng-class="lomas.inmovablesClassList[160]" ng-click="lomas.showPropertyData(43, '161')">
						<polyline id="IL-161_2_" class="property pb-sprite-1" points="27.9,102.6 27.9,54.4 124.3,54.4 124.3,102.6 27.9,102.6 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 88.3351)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.4" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 64.049)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9842 88.3604)"><tspan x="0" y="0" class="st1 st2 st4">12</tspan><tspan x="11.6" y="0" class="st1 st2 st4">8.00 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 75.2853)" class="st5 st6 st3">161</text>
					</g>
					<g id="I-162_2_" class="property__active" ng-class="lomas.inmovablesClassList[161]" ng-click="lomas.showPropertyData(43, '162')">
						<polyline id="IL-162_2_" class="property pb-sprite-2" points="27.9,54.4 27.9,0.3 124.3,0.3 124.3,54.4 27.9,54.4 				"/>
						<text transform="matrix(0 -1 1 0 37.5432 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(0 -1 1 0 121.884 37.1974)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="14.4" y="0" class="st1 st2 st3">8</tspan></text>
						<text transform="matrix(1 0 0 1 63.4436 11.3053)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="20.3" y="0" class="st1 st2 st3">0</tspan></text>
						<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 51.9856 40.162)"><tspan x="0" y="0" class="st1 st2 st4">14</tspan><tspan x="11.6" y="0" class="st1 st2 st4">3.63 m2</tspan></text>
						<text transform="matrix(1 0 0 1 66.0901 24.1408)" class="st5 st6 st3">162</text>
						<g>
							<polyline class="st9" points="46.3,33.8 39.9,27.4 46.3,21 46.3,33.8 					"/>
							<polyline class="st10" points="46.3,33.8 46.3,21 52.7,27.4 46.3,33.8 					"/>
						</g>
					</g>
					<g id="DIVISIONES_3_">
						<line class="st8" x1="124.3" y1="440" x2="124.3" y2="0.3"/>
						<line class="st8" x1="27.9" y1="54.4" x2="220.7" y2="54.4"/>
						<line class="st8" x1="27.9" y1="102.6" x2="220.7" y2="102.6"/>
						<line class="st8" x1="27.9" y1="150.8" x2="220.7" y2="150.8"/>
						<line class="st8" x1="27.9" y1="199" x2="220.7" y2="199"/>
						<line class="st8" x1="27.9" y1="247.2" x2="220.7" y2="247.2"/>
						<line class="st8" x1="27.9" y1="295.4" x2="220.7" y2="295.4"/>
						<line class="st8" x1="27.9" y1="343.6" x2="220.7" y2="343.6"/>
						<line class="st8" x1="172.5" y1="343.6" x2="172.5" y2="440"/>
						<line class="st8" x1="76.1" y1="440" x2="76.1" y2="343.6"/>
					</g>
				</g>
			</g>
			<g id="COMPLEMENTO">
				<rect x="1171.7" y="230.5" class="st11" width="36.1" height="24.1"/>
				<polyline class="st11" points="1231.5,215.7 1227.5,191.6 1231.5,167.5 1215.4,191.6 1231.5,215.7 		"/>
				<text transform="matrix(0 -1 1 0 1241.4246 216.8215)" class="st12 st6 st13">ACCESO</text>
				<polyline class="st11" points="1223.9,317.5 1240,293.4 1223.9,269.3 1228,293.4 1223.9,317.5 		"/>
				<text transform="matrix(0 -1 1 0 1221.7 313.9142)" class="st12 st6 st13">SALIDA</text>
				<polygon class="st14" points="0,0.2 1363.9,0.2 1328.1,287.9 1174,553.4 0,553.4 		"/>
			</g>
		</g>
		</svg>


    </div>

</body>

</html>