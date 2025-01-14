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

<body ng-controller="PBArrecifeQuoteCtrl as arrecife ">

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
                        src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

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

	<div class="modal-dialog" ng-class="arrecife.dialogDisplay">
		<div class="backdrop-dialog" ng-click="arrecife.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="arrecife.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{arrecife.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{arrecife.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{arrecife.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{arrecife.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{arrecife.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{arrecife.propertyData.discountPlan3}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{arrecife.propertyData.totalPlan3}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{arrecife.propertyData.discountPlan1}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{arrecife.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{arrecife.month}} y paga la primera mensualidad hasta {{arrecife.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{arrecife.month + ' ' + arrecife.year}}</p>
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
                    <h1 class="center-align">Arrecife 1</h1>
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

        
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 1423.5" style="enable-background:new 0 0 1366 1423.5;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:8.5613px;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st5{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st6{fill:#FFBF00;}
	.st7{font-family:'CenturyGothic-Bold';}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st9{fill:none;stroke:#FFFFFF;stroke-width:1.5875;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st10{fill:none;stroke:#002856;stroke-width:4.2332;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
	.st12{fill:#002856;}
	.st13{font-size:6.849px;}
</style>
<g id="BASE">
	
		<image style="overflow:visible;" width="1366" height="1423" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/arrecife/condos/arrecife_2.jpg"  transform="matrix(1 0 0 1 -2.9508 0)">
	</image>
</g>
<g id="CLUSTER__x2F__ETAPA__x2F__CONDO">
	<g id="ARRECIFE_II">
		<g id="ISLA_A_2_">
			<g id="A-01_2_" class="property__active" ng-class="arrecife.inmovablesClassList[190]" ng-click="arrecife.showPropertyData(69, '1')">
				<polyline class="property pb-sprite-1" points="1183.6,670.8 1271.8,630.4 1295,681 1206.8,721.4 1183.6,670.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1224.249 690.4648)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">6.91 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1195.6399 686.6956)"><tspan x="0" y="0" class="st1 st2 st3">9.1</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1270.7207 653.4789)"><tspan x="0" y="0" class="st1 st2 st3">9.1</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1240.0234 702.9207)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="1217.9,685.7 1206.2,691 1209.4,682.5 1217.9,685.7 				"/>
				<polyline class="st5" points="1217.9,685.7 1214.7,694.2 1206.2,691 1217.9,685.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1234.2524 676.3347)" class="st6 st7 st3">01</text>
			</g>
			<g id="A-02_2_" class="property__active" ng-class="arrecife.inmovablesClassList[191]" ng-click="arrecife.showPropertyData(69, '2')">
				<polyline class="property pb-sprite-2" points="1160.9,621.1 1249.1,580.8 1271.8,630.4 1183.6,670.8 1160.9,621.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1201.078 639.8354)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1172.6969 636.5643)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1216.8516 652.2896)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1247.7819 603.3512)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1211.0814 625.7053)" class="st6 st7 st3">02</text>
			</g>
			<g id="A-03_2_" class="property__active" ng-class="arrecife.inmovablesClassList[192]" ng-click="arrecife.showPropertyData(69, '3')">
				<polyline class="property pb-sprite-1" points="1140.7,577 1228.9,536.6 1249.1,580.8 1160.9,621.1 1140.7,577 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1179.6263 592.9631)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1151.2456 589.6951)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1194.1378 602.6592)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1226.3281 556.4799)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1189.6299 578.8331)" class="st6 st7 st3">03</text>
			</g>
			<g id="A-04_2_" class="property__active" ng-class="arrecife.inmovablesClassList[193]" ng-click="arrecife.showPropertyData(69, '4')">
				<polyline class="property pb-sprite-2" points="1120.5,532.9 1208.7,492.5 1228.9,536.6 1140.7,577 1120.5,532.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1159.4371 548.8489)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1131.0544 545.5797)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1173.9489 558.5459)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1206.1423 512.3673)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1169.4393 534.7162)" class="st6 st7 st3">04</text>
			</g>
			<g id="A-05_2_" class="property__active" ng-class="arrecife.inmovablesClassList[194]" ng-click="arrecife.showPropertyData(69, '5')">
				<polyline class="property pb-sprite-1" points="1100.3,488.8 1188.5,448.4 1208.7,492.5 1120.5,532.9 1100.3,488.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1139.2487 504.7365)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1110.8667 501.4647)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1153.7604 514.4335)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1185.9482 468.2521)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1149.2512 490.6046)" class="st6 st7 st3">05</text>
			</g>
			<g id="A-06_2_" class="property__active" ng-class="arrecife.inmovablesClassList[195]" ng-click="arrecife.showPropertyData(69, '6')">
				<polyline class="property pb-sprite-2" points="1080.1,444.7 1168.4,404.3 1188.5,448.4 1100.3,488.8 1080.1,444.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1119.0585 460.6205)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1090.6747 457.3517)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1133.5719 470.321)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1165.7612 424.1336)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1129.0624 446.4913)" class="st6 st7 st3">06</text>
			</g>
			<g id="A-07_2_" class="property__active" ng-class="arrecife.inmovablesClassList[196]" ng-click="arrecife.showPropertyData(69, '7')">
				<polyline class="property pb-sprite-1" points="1059.9,400.6 1148.2,360.2 1168.4,404.3 1080.1,444.7 1059.9,400.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1098.87 416.5081)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1070.4907 413.2373)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1113.3815 426.2041)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1145.5708 380.0263)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1108.871 402.3727)" class="st6 st7 st3">07</text>
			</g>
			<g id="A-08_2_" class="property__active" ng-class="arrecife.inmovablesClassList[197]" ng-click="arrecife.showPropertyData(69, '8')">
				<polyline class="property pb-sprite-2" points="1039.8,356.5 1128,316.1 1148.2,360.2 1059.9,400.6 1039.8,356.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1078.6803 372.393)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1050.3004 369.1245)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1093.1921 382.0899)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1125.3864 335.911)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1088.6825 358.2602)" class="st6 st7 st3">08</text>
			</g>
			<g id="A-09_2_" class="property__active" ng-class="arrecife.inmovablesClassList[198]" ng-click="arrecife.showPropertyData(69, '9')">
				<polyline class="property pb-sprite-1" points="1019.6,312.3 1107.8,272 1128,316.1 1039.8,356.5 1019.6,312.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1058.4899 328.2761)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1030.1091 325.007)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1073.0037 337.9775)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1105.194 291.7939)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1068.494 314.1478)" class="st6 st7 st3">09</text>
			</g>
			<g id="A-10_2_" class="property__active" ng-class="arrecife.inmovablesClassList[199]" ng-click="arrecife.showPropertyData(69, '10')">
				<polyline class="property pb-sprite-2" points="999.4,268.2 1087.6,227.8 1107.8,272 1019.6,312.3 999.4,268.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1038.3018 284.1646)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1009.9145 280.9006)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1052.8143 293.8633)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1085.0055 247.6815)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1048.3043 270.0327)" class="st6 st7 st3">10</text>
			</g>
			<g id="A-11_2_" class="property__active" ng-class="arrecife.inmovablesClassList[200]" ng-click="arrecife.showPropertyData(69, '11')">
				<polyline class="property pb-sprite-1" points="979.2,224.1 1067.4,183.7 1087.6,227.8 999.4,268.2 979.2,224.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1018.1129 240.0513)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 989.7351 236.784)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1032.625 249.7491)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1064.8177 203.573)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1028.1155 225.9194)" class="st6 st7 st3">11</text>
			</g>
			<g id="A-12_2_" class="property__active" ng-class="arrecife.inmovablesClassList[201]" ng-click="arrecife.showPropertyData(69, '12')">
				<polyline class="property pb-sprite-2" points="959,180 1047.2,139.6 1067.4,183.7 979.2,224.1 959,180 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 997.9236 195.9371)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 969.5453 192.6711)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1012.4362 205.6358)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1044.6252 159.4571)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1007.927 181.8069)" class="st6 st7 st3">12</text>
			</g>
			<g id="A-13_2_" class="property__active" ng-class="arrecife.inmovablesClassList[202]" ng-click="arrecife.showPropertyData(69, '13')">
				<polyline class="property pb-sprite-1" points="938.8,135.9 1027,95.5 1047.2,139.6 959,180 938.8,135.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 977.7343 151.8228)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 949.3544 148.5555)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 992.2457 161.5189)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1024.4354 115.342)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 987.7373 137.6918)" class="st6 st7 st3">13</text>
			</g>
			<g id="A-14_2_" class="property__active" ng-class="arrecife.inmovablesClassList[203]" ng-click="arrecife.showPropertyData(69, '14')">
				<polyline class="property pb-sprite-2" points="918.6,91.8 1006.8,51.4 1027,95.5 938.8,135.9 918.6,91.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 957.5458 107.7104)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 929.1605 104.4455)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 972.0563 117.4047)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1004.2487 71.2331)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 967.548 93.5776)" class="st6 st7 st3">14</text>
			</g>
			<g id="A-15_2_" class="property__active" ng-class="arrecife.inmovablesClassList[204]" ng-click="arrecife.showPropertyData(69, '15')">
				<polyline class="property pb-sprite-1" points="898.4,47.7 986.7,7.3 1006.8,51.4 918.6,91.8 898.4,47.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 937.3553 63.5935)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 908.9732 60.3325)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 936.726 40.2068)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 951.8683 73.2931)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 984.061 27.1149)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="931.2,59.3 919.6,64.7 922.7,56.1 931.2,59.3 				"/>
				<polyline class="st5" points="931.2,59.3 928.1,67.8 919.6,64.7 931.2,59.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 947.3591 49.4643)" class="st6 st7 st3">15</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_A_1_">
				<line class="st9" x1="918.6" y1="91.8" x2="1006.8" y2="51.4"/>
				<line class="st9" x1="938.8" y1="135.9" x2="1027" y2="95.5"/>
				<line class="st9" x1="959" y1="180" x2="1047.2" y2="139.6"/>
				<line class="st9" x1="979.2" y1="224.1" x2="1067.4" y2="183.7"/>
				<line class="st9" x1="999.4" y1="268.2" x2="1087.6" y2="227.8"/>
				<line class="st9" x1="1019.6" y1="312.3" x2="1107.8" y2="272"/>
				<line class="st9" x1="1039.8" y1="356.5" x2="1128" y2="316.1"/>
				<line class="st9" x1="1059.9" y1="400.6" x2="1148.2" y2="360.2"/>
				<line class="st9" x1="1080.1" y1="444.7" x2="1168.4" y2="404.3"/>
				<line class="st9" x1="1100.3" y1="488.8" x2="1188.5" y2="448.4"/>
				<line class="st9" x1="1120.5" y1="532.9" x2="1208.7" y2="492.5"/>
				<line class="st9" x1="1140.7" y1="577" x2="1228.9" y2="536.6"/>
				<line class="st9" x1="1160.9" y1="621.1" x2="1249.1" y2="580.8"/>
				<line class="st9" x1="1183.6" y1="670.8" x2="1271.8" y2="630.4"/>
			</g>
		</g>
		<g id="ISLA_B_2_">
			<g id="B-16_2_" class="property__active" ng-class="arrecife.inmovablesClassList[205]" ng-click="arrecife.showPropertyData(69, '16')">
				<polyline class="property pb-sprite-2" points="887.5,159.4 843.4,179.5 803,91.3 847.1,71.1 887.5,159.4 				"/>
				<text transform="matrix(0.4494 0.8933 -0.8933 0.4494 831.1045 108.4812)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 821.42 92.9777)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 822.6804 123.8759)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 856.7504 170.1756)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 855.768 108.7352)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="860.4,158.4 855.1,146.7 863.6,149.9 860.4,158.4 				"/>
				<polyline class="st5" points="860.4,158.4 851.9,155.2 855.1,146.7 860.4,158.4 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 846.6955 119.3408)" class="st6 st7 st3">16</text>
			</g>
			<g id="B-17_2_" class="property__active" ng-class="arrecife.inmovablesClassList[206]" ng-click="arrecife.showPropertyData(69, '17')">
				<polyline class="property pb-sprite-1" points="843.4,179.5 799.3,199.7 758.9,111.5 803,91.3 843.4,179.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 787.6086 128.1292)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 777.3129 113.1637)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 778.5677 144.0666)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 812.6432 190.3616)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 802.5761 139.5293)" class="st6 st7 st3">17</text>
			</g>
			<g id="B-18_2_" class="property__active" ng-class="arrecife.inmovablesClassList[207]" ng-click="arrecife.showPropertyData(69, '18')">
				<polyline class="property pb-sprite-2" points="799.3,199.7 755.2,219.9 714.8,131.7 758.9,111.5 799.3,199.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 743.5025 148.3191)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 733.194 133.3552)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 734.4528 164.2562)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 768.5244 210.553)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 758.4664 159.7197)" class="st6 st7 st3">18</text>
			</g>
			<g id="B-19_2_" class="property__active" ng-class="arrecife.inmovablesClassList[208]" ng-click="arrecife.showPropertyData(69, '19')">
				<polyline class="property pb-sprite-1" points="755.2,219.9 711.1,240.1 670.7,151.9 714.8,131.7 755.2,219.9 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 699.3844 168.508)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 689.0829 153.543)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 690.3414 184.4421)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 724.4133 230.7409)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 714.3538 179.9083)" class="st6 st7 st3">19</text>
			</g>
			<g id="B-20_2_" class="property__active" ng-class="arrecife.inmovablesClassList[209]" ng-click="arrecife.showPropertyData(69, '20')">
				<polyline class="property pb-sprite-2" points="711.1,240.1 667,260.3 626.6,172.1 670.7,151.9 711.1,240.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 655.272 188.6965)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 644.9698 173.7318)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 646.2228 204.6355)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 680.3002 250.9297)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 670.2374 200.0986)" class="st6 st7 st3">20</text>
			</g>
			<g id="B-21_2_" class="property__active" ng-class="arrecife.inmovablesClassList[210]" ng-click="arrecife.showPropertyData(69, '21')">
				<polyline class="property pb-sprite-1" points="667,260.3 622.8,280.5 582.5,192.3 626.6,172.1 667,260.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 611.158 208.8835)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 600.8508 193.9234)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 602.1196 224.823)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 636.1811 271.1212)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 626.1293 220.2872)" class="st6 st7 st3">21</text>
			</g>
			<g id="B-22_2_" class="property__active" ng-class="arrecife.inmovablesClassList[211]" ng-click="arrecife.showPropertyData(69, '22')">
				<polyline class="property pb-sprite-2" points="622.8,280.5 578.7,300.7 538.3,212.5 582.5,192.3 622.8,280.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 567.0389 229.075)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 556.7446 214.109)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 558.0003 245.0147)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 592.0749 291.3069)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 582.0116 240.476)" class="st6 st7 st3">22</text>
			</g>
			<g id="B-23_2_" class="property__active" ng-class="arrecife.inmovablesClassList[212]" ng-click="arrecife.showPropertyData(69, '23')">
				<polyline class="property pb-sprite-1" points="578.7,300.7 534.6,320.9 494.2,232.6 538.3,212.5 578.7,300.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 522.9368 249.2631)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 512.6272 234.2997)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 513.8889 265.1973)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 547.9576 311.4976)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 537.896 260.668)" class="st6 st7 st3">23</text>
			</g>
			<g id="B-24_2_" class="property__active" ng-class="arrecife.inmovablesClassList[213]" ng-click="arrecife.showPropertyData(69, '24')">
				<polyline class="property pb-sprite-2" points="534.6,320.9 490.5,341.1 450.1,252.8 494.2,232.6 534.6,320.9 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 478.8182 269.4523)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 468.5126 254.4892)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 469.7734 285.3872)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 503.8429 331.6871)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 493.7854 280.8535)" class="st6 st7 st3">24</text>
			</g>
			<g id="B-25_2_" class="property__active" ng-class="arrecife.inmovablesClassList[214]" ng-click="arrecife.showPropertyData(69, '25')">
				<polyline class="property pb-sprite-1" points="490.5,341.1 446.4,361.2 406,273 450.1,252.8 490.5,341.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 434.7072 289.6379)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 424.4001 274.6777)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 425.6587 305.5789)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 459.7305 351.8755)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 449.6726 301.0465)" class="st6 st7 st3">25</text>
			</g>
			<g id="B-26_2_" class="property__active" ng-class="arrecife.inmovablesClassList[215]" ng-click="arrecife.showPropertyData(69, '26')">
				<polyline class="property pb-sprite-2" points="446.4,361.2 402.3,381.4 361.9,293.2 406,273 446.4,361.2 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 390.5918 309.8299)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 380.2846 294.8676)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 381.5445 325.7682)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 415.615 372.0655)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 405.5585 321.2336)" class="st6 st7 st3">26</text>
			</g>
			<g id="B-27_2_" class="property__active" ng-class="arrecife.inmovablesClassList[216]" ng-click="arrecife.showPropertyData(69, '27')">
				<polyline class="property pb-sprite-1" points="402.3,381.4 358.2,401.6 317.8,313.4 361.9,293.2 402.3,381.4 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 346.4787 330.0187)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 336.1733 315.0556)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 337.4338 345.9558)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 371.5036 392.2534)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 361.4454 341.4202)" class="st6 st7 st3">27</text>
			</g>
			<g id="B-28_2_" class="property__active" ng-class="arrecife.inmovablesClassList[217]" ng-click="arrecife.showPropertyData(69, '28')">
				<polyline class="property pb-sprite-2" points="358.2,401.6 314,421.8 273.7,333.6 317.8,313.4 358.2,401.6 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 302.365 350.2056)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 292.0591 335.2449)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 293.3178 366.1459)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 327.3894 412.4427)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 317.3313 361.6062)" class="st6 st7 st3">28</text>
			</g>
			<g id="B-29_2_" class="property__active" ng-class="arrecife.inmovablesClassList[218]" ng-click="arrecife.showPropertyData(69, '29')">
				<polyline class="property pb-sprite-1" points="314,421.8 269.9,442 229.6,353.8 273.7,333.6 314,421.8 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 258.2536 370.3958)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 247.9446 355.4343)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 249.2056 386.3343)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 283.275 432.6321)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 273.2217 381.7966)" class="st6 st7 st3">29</text>
			</g>
			<g id="B-30_2_" class="property__active" ng-class="arrecife.inmovablesClassList[219]" ng-click="arrecife.showPropertyData(69, '30')">
				<polyline class="property pb-sprite-2" points="269.9,442 225.8,462.2 185.4,374 229.6,353.8 269.9,442 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 214.1359 390.5845)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 203.8306 375.6234)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 205.0918 406.5234)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 239.161 452.8213)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 229.1037 401.9877)" class="st6 st7 st3">30</text>
			</g>
			<g id="B-31_2_" class="property__active" ng-class="arrecife.inmovablesClassList[220]" ng-click="arrecife.showPropertyData(69, '31')">
				<polyline class="property pb-sprite-1" points="185.4,374 225.8,462.2 181.7,482.4 141.3,394.2 185.4,374 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 170.3009 410.6482)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 159.7169 395.8125)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 195.0472 473.0104)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 160.981 426.7112)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="198.7,461.3 193.4,449.6 201.9,452.7 198.7,461.3 				"/>
				<polyline class="st5" points="198.7,461.3 190.2,458.1 193.4,449.6 198.7,461.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 184.993 422.1753)" class="st6 st7 st3">31</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_B_2_">
				<line class="st9" x1="185.4" y1="374" x2="225.8" y2="462.2"/>
				<line class="st9" x1="229.2" y1="353" x2="269.9" y2="442"/>
				<line class="st9" x1="273.3" y1="332.8" x2="314" y2="421.8"/>
				<line class="st9" x1="317.4" y1="312.6" x2="358.2" y2="401.6"/>
				<line class="st9" x1="361.5" y1="292.4" x2="402.3" y2="381.4"/>
				<line class="st9" x1="405.7" y1="272.3" x2="446.4" y2="361.2"/>
				<line class="st9" x1="449.8" y1="252.1" x2="490.5" y2="341.1"/>
				<line class="st9" x1="493.9" y1="231.9" x2="534.6" y2="320.9"/>
				<line class="st9" x1="538" y1="211.7" x2="578.7" y2="300.7"/>
				<line class="st9" x1="582.1" y1="191.5" x2="622.8" y2="280.5"/>
				<line class="st9" x1="626.2" y1="171.3" x2="667" y2="260.3"/>
				<line class="st9" x1="670.3" y1="151.1" x2="711.1" y2="240.1"/>
				<line class="st9" x1="714.5" y1="130.9" x2="755.2" y2="219.9"/>
				<line class="st9" x1="758.6" y1="110.7" x2="799.3" y2="199.7"/>
				<line class="st9" x1="802.7" y1="90.6" x2="843.4" y2="179.5"/>
			</g>
		</g>
		<g id="ISLA_C_2_">
			<g id="C-32_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[221]" ng-click="arrecife.showPropertyData(69, '32')">
				<polyline class="property pb-sprite-2" points="1.8,458 90,417.6 110.2,461.7 22,502.1 1.8,458 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 40.7441 473.9363)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 40.1108 450.5514)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 55.2531 483.6377)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 89.5674 435.3415)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 12.3679 470.6694)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="89.1,444.7 77.4,450.1 80.6,441.6 89.1,444.7 				"/>
				<polyline class="st5" points="89.1,444.7 85.9,453.3 77.4,450.1 89.1,444.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 50.7488 459.8067)" class="st6 st7 st3">32</text>
			</g>
			<g id="C-33_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[222]" ng-click="arrecife.showPropertyData(69, '33')">
				<polyline class="property pb-sprite-1" points="22,502.1 110.2,461.7 130.4,505.9 42.2,546.2 22,502.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 60.9346 518.0532)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 75.4412 527.7493)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 109.7551 479.4522)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 32.5567 514.7849)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 70.9377 503.92)" class="st6 st7 st3">33</text>
			</g>
			<g id="C-34_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[223]" ng-click="arrecife.showPropertyData(69, '34')">
				<polyline class="property pb-sprite-2" points="42.2,546.2 130.4,505.9 150.6,550 62.4,590.3 42.2,546.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 81.1231 562.1656)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 95.6305 571.8635)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 129.9458 523.5636)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 52.7453 558.8951)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 91.1278 548.0359)" class="st6 st7 st3">34</text>
			</g>
			<g id="C-35_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[224]" ng-click="arrecife.showPropertyData(69, '35')">
				<polyline class="property pb-sprite-1" points="62.4,590.3 150.6,550 170.8,594.1 82.6,634.5 62.4,590.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 101.3124 606.2798)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 115.821 615.9803)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 150.1317 567.6761)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 72.9352 603.009)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 111.3167 592.1493)" class="st6 st7 st3">35</text>
			</g>
			<g id="C-36_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[225]" ng-click="arrecife.showPropertyData(69, '36')">
				<polyline class="property pb-sprite-2" points="82.6,634.5 170.8,594.1 191,638.2 102.8,678.6 82.6,634.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 121.5017 650.394)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 136.0099 660.0937)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 170.3216 611.7965)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 93.1231 647.1218)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 131.5052 636.2617)" class="st6 st7 st3">36</text>
			</g>
			<g id="C-37_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[226]" ng-click="arrecife.showPropertyData(69, '37')">
				<polyline class="property pb-sprite-1" points="102.8,678.6 191,638.2 211.2,682.3 123,722.7 102.8,678.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 141.6906 694.5073)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 156.1992 704.2079)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 190.511 655.9085)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 113.3116 691.2396)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 151.6941 680.3751)" class="st6 st7 st3">37</text>
			</g>
			<g id="C-38_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[227]" ng-click="arrecife.showPropertyData(69, '38')">
				<polyline class="property pb-sprite-2" points="123,722.7 211.2,682.3 231.4,726.4 143.1,766.8 123,722.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 161.8787 738.6189)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 176.3885 748.3221)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 210.6991 700.0179)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 133.4996 735.3458)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 171.8838 724.4902)" class="st6 st7 st3">38</text>
			</g>
			<g id="C-39_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[228]" ng-click="arrecife.showPropertyData(69, '39')">
				<polyline class="property pb-sprite-1" points="143.1,766.8 231.4,726.4 251.6,770.5 163.3,810.9 143.1,766.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 182.0692 782.7358)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 196.577 792.4345)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 230.8888 744.133)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 153.6913 779.4611)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 192.0723 768.6026)" class="st6 st7 st3">39</text>
			</g>
			<g id="C-40_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[229]" ng-click="arrecife.showPropertyData(69, '40')">
				<polyline class="property pb-sprite-2" points="163.3,810.9 251.6,770.5 271.7,814.6 183.5,855 163.3,810.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 202.2589 826.8509)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 216.7663 836.5488)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 251.0761 788.2427)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 173.8806 823.5753)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 212.2608 812.715)" class="st6 st7 st3">40</text>
			</g>
			<g id="C-41_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[230]" ng-click="arrecife.showPropertyData(69, '41')">
				<polyline class="property pb-sprite-1" points="183.5,855 271.7,814.6 291.9,858.8 203.7,899.1 183.5,855 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 222.4474 870.9633)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 236.9568 880.6656)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 271.2673 832.3582)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 194.0686 867.6868)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 232.4513 856.8319)" class="st6 st7 st3">41</text>
			</g>
			<g id="C-42_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[231]" ng-click="arrecife.showPropertyData(69, '42')">
				<polyline class="property pb-sprite-2" points="203.7,899.1 291.9,858.8 312.1,902.9 223.9,943.3 203.7,899.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 242.6375 915.0793)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 257.1453 924.778)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 291.4562 876.4716)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 214.2583 911.8041)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 252.641 900.947)" class="st6 st7 st3">42</text>
			</g>
			<g id="C-43_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[232]" ng-click="arrecife.showPropertyData(69, '43')">
				<polyline class="property pb-sprite-1" points="223.9,943.3 312.1,902.9 332.3,947 244.1,987.4 223.9,943.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 262.8259 959.1917)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 277.3337 968.8905)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 311.6481 920.5856)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 234.4484 955.92)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 272.829 945.0585)" class="st6 st7 st3">43</text>
			</g>
			<g id="C-44_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[233]" ng-click="arrecife.showPropertyData(69, '44')">
				<polyline class="property pb-sprite-2" points="244.1,987.4 332.3,947 357.5,1002.1 269.3,1042.5 244.1,987.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 285.7901 1009.3691)"><tspan x="0" y="0" class="st1 st2 st3">16</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 302.5709 1024.0343)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 333.3666 968.0499)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 256.169 1003.3802)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 295.5429 994.6889)" class="st6 st7 st3">44</text>
			</g>
			<g id="C-45_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[234]" ng-click="arrecife.showPropertyData(69, '45')">
				<polyline class="property pb-sprite-1" points="269.3,1042.5 357.5,1002.1 380.3,1051.8 292,1092.1 269.3,1042.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 309.5122 1061.2025)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 325.2827 1073.6603)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 358.336 1022.6)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 281.135 1057.9318)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 319.5173 1047.0739)" class="st6 st7 st3">45</text>
			</g>
			<g id="C-46_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[235]" ng-click="arrecife.showPropertyData(69, '46')">
				<polyline class="property pb-sprite-2" points="292,1092.1 380.3,1051.8 403,1101.4 314.7,1141.8 292,1092.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 332.2289 1110.8391)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 347.9973 1123.2925)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 381.0467 1072.2264)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 303.8485 1107.5591)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 342.2307 1096.7032)" class="st6 st7 st3">46</text>
			</g>
			<g id="C-47_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[236]" ng-click="arrecife.showPropertyData(69, '47')">
				<polyline class="property pb-sprite-1" points="314.7,1141.8 403,1101.4 425.7,1151 337.5,1191.4 314.7,1141.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 354.939 1160.4615)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 370.7099 1172.9202)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 403.7621 1121.8604)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 326.5612 1157.1921)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 364.9429 1146.3301)" class="st6 st7 st3">47</text>
			</g>
			<g id="C-48_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[237]" ng-click="arrecife.showPropertyData(69, '48')">
				<polyline class="property pb-sprite-2" points="337.5,1191.4 425.7,1151 445.9,1195.1 357.6,1235.5 337.5,1191.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 376.3926 1207.3383)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 390.9008 1217.0378)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 425.2096 1168.7238)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 348.0075 1204.056)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 386.3945 1193.2024)" class="st6 st7 st3">48</text>
			</g>
			<g id="C-49_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[238]" ng-click="arrecife.showPropertyData(69, '49')">
				<polyline class="property pb-sprite-1" points="357.6,1235.5 445.9,1195.1 466.1,1239.2 377.8,1279.6 357.6,1235.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 396.5795 1251.4471)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 411.0864 1261.1442)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 445.3981 1212.8362)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 368.1999 1248.1688)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 406.5826 1237.314)" class="st6 st7 st3">49</text>
			</g>
			<g id="C-50_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[239]" ng-click="arrecife.showPropertyData(69, '50')">
				<polyline class="property pb-sprite-2" points="377.8,1279.6 466.1,1239.2 486.3,1283.4 398,1323.7 377.8,1279.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 416.7704 1295.5649)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 431.2769 1305.261)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 465.5843 1256.9465)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 388.3875 1292.2817)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 426.7727 1281.4299)" class="st6 st7 st3">50</text>
			</g>
			<g id="C-51_2_"  class="property__active" ng-class="arrecife.inmovablesClassList[240]" ng-click="arrecife.showPropertyData(69, '51')">
				<polyline class="property pb-sprite-1" points="486.3,1283.4 506.4,1327.5 508.1,1331.1 439.5,1414.3 418.2,1367.8 398,1323.7 486.3,1283.4 				
					"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 438.3475 1342.7115)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.72 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 486.613 1302.8921)"><tspan x="0" y="0" class="st1 st2 st3">8.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">6</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 418.219 1357.462)"><tspan x="0" y="0" class="st1 st2 st3">16.4</tspan><tspan x="16.5" y="0" class="st1 st2 st3">3</tspan></text>
				<text transform="matrix(0.6375 -0.7704 0.7704 0.6375 464.6965 1379.0521)"><tspan x="0" y="0" class="st1 st2 st3">17.7</tspan><tspan x="16.5" y="0" class="st1 st2 st3">8</tspan></text>
				<polyline class="st4" points="485.3,1310.5 473.6,1315.8 476.8,1307.3 485.3,1310.5 				"/>
				<polyline class="st5" points="485.3,1310.5 482.1,1319 473.6,1315.8 485.3,1310.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 448.095 1328.0199)" class="st6 st7 st3">51</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_C_1_">
				<line class="st9" x1="223.9" y1="943.3" x2="312.1" y2="902.9"/>
				<line class="st9" x1="269.3" y1="1042.5" x2="357.5" y2="1002.1"/>
				<line class="st9" x1="244.1" y1="987.4" x2="332.3" y2="947"/>
				<line class="st9" x1="292" y1="1092.1" x2="380.3" y2="1051.8"/>
				<line class="st9" x1="314.7" y1="1141.8" x2="403" y2="1101.4"/>
				<line class="st9" x1="337.5" y1="1191.4" x2="425.7" y2="1151"/>
				<line class="st9" x1="357.6" y1="1235.5" x2="445.9" y2="1195.1"/>
				<line class="st9" x1="377.8" y1="1279.6" x2="466.1" y2="1239.2"/>
				<line class="st9" x1="398" y1="1323.7" x2="486.3" y2="1283.4"/>
				<line class="st9" x1="42.2" y1="546.2" x2="130.4" y2="505.9"/>
				<line class="st9" x1="62.4" y1="590.3" x2="150.6" y2="550"/>
				<line class="st9" x1="82.6" y1="634.5" x2="170.8" y2="594.1"/>
				<line class="st9" x1="102.8" y1="678.6" x2="191" y2="638.2"/>
				<line class="st9" x1="123" y1="722.7" x2="211.2" y2="682.3"/>
				<line class="st9" x1="143.1" y1="766.8" x2="231.4" y2="726.4"/>
				<line class="st9" x1="163.3" y1="810.9" x2="251.6" y2="770.5"/>
				<line class="st9" x1="183.5" y1="855" x2="271.7" y2="814.6"/>
				<line class="st9" x1="203.7" y1="899.1" x2="291.9" y2="858.8"/>
				<line class="st9" x1="22" y1="502.1" x2="110.2" y2="461.7"/>
			</g>
		</g>
		<g id="ISLA_D_2_">
			<g id="D-52_2_" class="property__active" ng-class="arrecife.inmovablesClassList[241]" ng-click="arrecife.showPropertyData(69, '52')">
				<polyline class="property pb-sprite-2" points="634.3,1180 583.4,1068.7 627.5,1048.5 671.2,1143.9 661.5,1152.4 652.1,1161.3 643.1,1170.5 
					634.3,1180 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 616.9893 1098.9763)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">9.08 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 601.805 1070.3695)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.7146 -0.6996 0.6996 0.7146 644.7981 1165.5505)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="11.8" y="0" class="st1 st2 st3">1</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 637.7869 1089.7041)"><tspan x="0" y="0" class="st1 st2 st3">17.3</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 608.3428 1112.7926)"><tspan x="0" y="0" class="st1 st2 st3">20.1</tspan><tspan x="16.5" y="0" class="st1 st2 st3">8</tspan></text>
				<polyline class="st4" points="617.1,1084.1 611.8,1072.4 620.3,1075.6 617.1,1084.1 				"/>
				<polyline class="st5" points="617.1,1084.1 608.6,1080.9 611.8,1072.4 617.1,1084.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 632.3555 1108.2565)" class="st6 st7 st3">52</text>
			</g>
			<g id="D-53_2_" class="property__active" ng-class="arrecife.inmovablesClassList[242]" ng-click="arrecife.showPropertyData(69, '53')">
				<polyline class="property pb-sprite-1" points="826,957.7 866.4,1045.9 822.3,1066.1 781.9,977.9 826,957.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 810.2219 996.5917)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 800.3171 979.5185)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 835.6467 1056.7146)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 801.5773 1010.405)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="814.4,990.5 809,978.8 817.6,982 814.4,990.5 				"/>
				<polyline class="st5" points="814.4,990.5 805.9,987.3 809,978.8 814.4,990.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 825.589 1005.8725)" class="st6 st7 st3">53</text>
			</g>
			<g id="D-54_2_" class="property__active" ng-class="arrecife.inmovablesClassList[243]" ng-click="arrecife.showPropertyData(69, '54')">
				<polyline class="property pb-sprite-2" points="870.1,937.5 910.5,1025.7 866.4,1045.9 826,957.7 870.1,937.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 854.3359 976.4025)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 844.4294 959.3301)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 879.7589 1036.5262)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 845.6866 990.2179)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="858.5,970.3 853.1,958.6 861.7,961.8 858.5,970.3 				"/>
				<polyline class="st5" points="858.5,970.3 850,967.1 853.1,958.6 858.5,970.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 869.7041 985.6828)" class="st6 st7 st3">54</text>
			</g>
			<g id="D-55_2_" class="property__active" ng-class="arrecife.inmovablesClassList[244]" ng-click="arrecife.showPropertyData(69, '55')">
				<polyline class="property pb-sprite-1" points="914.3,917.3 954.6,1005.5 910.5,1025.7 870.1,937.5 914.3,917.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 898.4517 956.2125)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 888.5427 939.1412)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 923.8722 1016.3373)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 889.796 970.0308)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="902.6,950.1 897.3,938.4 905.8,941.6 902.6,950.1 				"/>
				<polyline class="st5" points="902.6,950.1 894.1,946.9 897.3,938.4 902.6,950.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 913.8137 965.4956)" class="st6 st7 st3">55</text>
			</g>
			<g id="D-56_2_" class="property__active" ng-class="arrecife.inmovablesClassList[245]" ng-click="arrecife.showPropertyData(69, '56')">
				<polyline class="property pb-sprite-2" points="958.4,897.1 998.8,985.3 954.6,1005.5 914.3,917.3 958.4,897.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 942.563 936.0245)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 932.662 918.9496)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 967.9915 996.1457)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 933.9172 949.8383)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="946.7,929.9 941.4,918.2 949.9,921.4 946.7,929.9 				"/>
				<polyline class="st5" points="946.7,929.9 938.2,926.7 941.4,918.2 946.7,929.9 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 957.9289 945.308)" class="st6 st7 st3">56</text>
			</g>
			<g id="D-57_2_" class="property__active" ng-class="arrecife.inmovablesClassList[246]" ng-click="arrecife.showPropertyData(69, '57')">
				<polyline class="property pb-sprite-1" points="1002.5,876.9 1042.9,965.1 998.8,985.3 958.4,897.1 1002.5,876.9 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 986.6792 915.8344)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 976.7713 898.7625)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1012.1008 975.9586)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 978.0241 929.6523)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1002.0362 925.1165)" class="st6 st7 st3">57</text>
			</g>
			<g id="D-58_2_" class="property__active" ng-class="arrecife.inmovablesClassList[247]" ng-click="arrecife.showPropertyData(69, '58')">
				<polyline class="property pb-sprite-2" points="1046.6,856.7 1087,944.9 1042.9,965.1 1002.5,876.9 1046.6,856.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1030.7897 895.6468)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1020.8882 878.572)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1056.2178 955.7681)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1022.1388 909.4628)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1046.1559 904.928)" class="st6 st7 st3">58</text>
			</g>
			<g id="D-59_2_" class="property__active" ng-class="arrecife.inmovablesClassList[248]" ng-click="arrecife.showPropertyData(69, '59')">
				<polyline class="property pb-sprite-1" points="1090.7,836.5 1131.1,924.8 1087,944.9 1046.6,856.7 1090.7,836.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1074.9062 875.4564)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1064.9971 858.3851)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1100.3267 935.5812)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1066.2516 889.2764)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1090.2661 884.7405)" class="st6 st7 st3">59</text>
			</g>
			<g id="D-60_2_" class="property__active" ng-class="arrecife.inmovablesClassList[249]" ng-click="arrecife.showPropertyData(69, '60')">
				<polyline class="property pb-sprite-2" points="1134.8,816.3 1175.2,904.6 1131.1,924.8 1090.7,836.5 1134.8,816.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1119.0209 855.2668)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1109.1115 838.1957)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1144.441 915.3918)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1143.4492 853.9461)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1110.37 869.0851)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="1123.2,849.2 1117.8,837.5 1126.3,840.6 1123.2,849.2 				"/>
				<polyline class="st5" points="1123.2,849.2 1114.6,846 1117.8,837.5 1123.2,849.2 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1134.3813 864.5529)" class="st6 st7 st3">60</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_D_1_">
				<line class="st9" x1="1090.7" y1="836.5" x2="1131.1" y2="924.8"/>
				<line class="st9" x1="1134.8" y1="816.3" x2="1175.2" y2="904.6"/>
				<line class="st9" x1="1046.6" y1="856.7" x2="1087" y2="944.9"/>
				<line class="st9" x1="1002.5" y1="876.9" x2="1042.9" y2="965.1"/>
				<line class="st9" x1="958.4" y1="897.1" x2="998.8" y2="985.3"/>
				<line class="st9" x1="914.3" y1="917.3" x2="954.6" y2="1005.5"/>
				<line class="st9" x1="870.1" y1="937.5" x2="910.5" y2="1025.7"/>
				<line class="st9" x1="826" y1="957.7" x2="866.4" y2="1045.9"/>
				<line class="st9" x1="781.9" y1="977.9" x2="822.3" y2="1066.1"/>
				<line class="st9" x1="627.5" y1="1048.5" x2="671.6" y2="1144.5"/>
			</g>
		</g>
		<g id="ISLA_E_2_">
			<g id="E-61_2_" class="property__active" ng-class="arrecife.inmovablesClassList[250]" ng-click="arrecife.showPropertyData(69, '61')">
				<polyline class="property pb-sprite-1" points="1132.6,694.8 1155.5,744.9 1067.3,785.2 1044.3,735.2 1132.6,694.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1084.7404 754.3123)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">5.31 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1056.2563 750.8112)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1100.3032 766.3195)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1133.4578 715.4846)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1094.7466 740.1808)" class="st6 st7 st3">61</text>
				<polyline class="st4" points="1133,724.9 1121.3,730.2 1124.5,721.7 1133,724.9 				"/>
				<polyline class="st5" points="1133,724.9 1129.8,733.4 1121.3,730.2 1133,724.9 				"/>
			</g>
			<g id="E-62_2_" class="property__active" ng-class="arrecife.inmovablesClassList[251]" ng-click="arrecife.showPropertyData(69, '62')">
				<polyline class="property pb-sprite-2" points="1021.6,685.5 1109.9,645.2 1132.6,694.8 1044.3,735.2 1021.6,685.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1061.8208 704.2326)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1033.4425 700.9645)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1077.589 716.6882)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1110.644 665.6357)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1071.8271 690.1012)" class="st6 st7 st3">62</text>
			</g>
			<g id="E-63_2_" class="property__active" ng-class="arrecife.inmovablesClassList[252]" ng-click="arrecife.showPropertyData(69, '63')">
				<polyline class="property pb-sprite-1" points="998.9,635.9 1087.1,595.5 1109.9,645.2 1021.6,685.5 998.9,635.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1039.1083 654.6049)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1010.7267 651.3329)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1054.8772 667.0623)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1087.9243 616.0059)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1049.1146 640.4734)" class="st6 st7 st3">63</text>
			</g>
			<g id="E-64_2_" class="property__active" ng-class="arrecife.inmovablesClassList[253]" ng-click="arrecife.showPropertyData(69, '64')">
				<polyline class="property pb-sprite-2" points="976.2,586.3 1064.4,545.9 1087.1,595.5 998.9,635.9 976.2,586.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1016.3948 604.9754)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 988.0126 601.7048)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1032.1633 617.4319)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1065.2125 566.3778)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1026.402 590.8458)" class="st6 st7 st3">64</text>
			</g>
			<g id="E-65_2_" class="property__active" ng-class="arrecife.inmovablesClassList[254]" ng-click="arrecife.showPropertyData(69, '65')">
				<polyline class="property pb-sprite-1" points="953.5,536.7 1041.7,496.3 1064.4,545.9 976.2,586.3 953.5,536.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 993.6823 555.3477)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 965.2996 552.0762)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1009.4524 567.8077)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1042.5011 516.7442)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1003.6873 541.2136)" class="st6 st7 st3">65</text>
			</g>
			<g id="E-66_2_" class="property__active" ng-class="arrecife.inmovablesClassList[255]" ng-click="arrecife.showPropertyData(69, '66')">
				<polyline class="property pb-sprite-2" points="930.8,487 1019,446.6 1041.7,496.3 953.5,536.7 930.8,487 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 970.97 505.7209)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 942.5909 502.451)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 986.7386 518.1774)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 969.0738 479.5793)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1019.7858 467.1188)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 980.9752 491.5868)" class="st6 st7 st3">66</text>
				<polyline class="st4" points="1019.3,476.5 1007.6,481.9 1010.8,473.3 1019.3,476.5 				"/>
				<polyline class="st5" points="1019.3,476.5 1016.2,485 1007.6,481.9 1019.3,476.5 				"/>
			</g>
			<g id="E-67_2_" class="property__active" ng-class="arrecife.inmovablesClassList[256]" ng-click="arrecife.showPropertyData(69, '67')">
				<polyline class="property pb-sprite-1" points="820.5,537.5 930.8,487 953.5,536.7 843.2,587.1 820.5,537.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 871.7162 551.1454)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 931.5581 507.5003)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 887.481 563.6036)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 832.2963 552.9284)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 869.8162 525.0055)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 881.7195 537.0121)" class="st6 st7 st3">67</text>
				<polyline class="st4" points="857.3,550.6 845.6,556 848.8,547.5 857.3,550.6 				"/>
				<polyline class="st5" points="857.3,550.6 854.2,559.2 845.6,556 857.3,550.6 				"/>
			</g>
			<g id="E-68_2_" class="property__active" ng-class="arrecife.inmovablesClassList[257]" ng-click="arrecife.showPropertyData(69, '68')">
				<polyline class="property pb-sprite-2" points="843.2,587.1 953.5,536.7 976.2,586.3 865.9,636.8 843.2,587.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 894.4283 600.7722)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 954.2711 557.1289)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 910.1948 613.2339)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 855.0123 602.5502)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 904.4317 586.6389)" class="st6 st7 st3">68</text>
			</g>
			<g id="E-69_2_" class="property__active" ng-class="arrecife.inmovablesClassList[258]" ng-click="arrecife.showPropertyData(69, '69')">
				<polyline class="property pb-sprite-1" points="865.9,636.8 976.2,586.3 998.9,635.9 888.6,686.4 865.9,636.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 917.141 650.3999)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 976.9838 606.7544)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 932.9057 662.8581)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 877.7253 652.181)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 927.1463 636.2711)" class="st6 st7 st3">69</text>
				<polyline class="st4" points="902.8,649.9 891.1,655.3 894.2,646.7 902.8,649.9 				"/>
				<polyline class="st5" points="902.8,649.9 899.6,658.4 891.1,655.3 902.8,649.9 				"/>
			</g>
			<g id="E-70_2_" class="property__active" ng-class="arrecife.inmovablesClassList[259]" ng-click="arrecife.showPropertyData(69, '70')">
				<polyline class="property pb-sprite-2" points="888.6,686.4 998.9,635.9 1021.6,685.5 911.3,736 888.6,686.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 939.8544 700.0294)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 999.6963 656.3843)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 955.6196 712.4885)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 900.4357 701.8065)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 949.8589 685.8987)" class="st6 st7 st3">70</text>
				<polyline class="st4" points="925.5,699.5 913.8,704.9 916.9,696.4 925.5,699.5 				"/>
				<polyline class="st5" points="925.5,699.5 922.3,708.1 913.8,704.9 925.5,699.5 				"/>
			</g>
			<g id="E-71_2_" class="property__active" ng-class="arrecife.inmovablesClassList[260]" ng-click="arrecife.showPropertyData(69, '71')">
				<polyline class="property pb-sprite-1" points="911.3,736 1021.6,685.5 1044.3,735.2 934.1,785.6 911.3,736 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 962.567 749.6571)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1022.4089 706.012)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 978.3314 762.1144)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 923.1525 751.4398)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 972.5715 735.5265)" class="st6 st7 st3">71</text>
				<polyline class="st4" points="948.2,749.2 936.5,754.5 939.7,746 948.2,749.2 				"/>
				<polyline class="st5" points="948.2,749.2 945,757.7 936.5,754.5 948.2,749.2 				"/>
			</g>
			<g id="E-72_2_" class="property__active" ng-class="arrecife.inmovablesClassList[261]" ng-click="arrecife.showPropertyData(69, '72')">
				<polyline class="property pb-sprite-2" points="1044.3,735.2 1067.3,785.2 957,835.7 934.1,785.6 1044.3,735.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 985.4865 799.7368)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">1.63 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 1045.2235 755.8626)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1001.0455 811.7457)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 945.9695 801.285)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 995.491 785.6061)" class="st6 st7 st3">72</text>
				<polyline class="st4" points="971,799 959.3,804.4 962.5,795.8 971,799 				"/>
				<polyline class="st5" points="971,799 967.8,807.5 959.3,804.4 971,799 				"/>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_E_2_">
				<line class="st9" x1="1041.7" y1="496.3" x2="843.2" y2="587.1"/>
				<line class="st9" x1="1064.4" y1="545.9" x2="865.9" y2="636.8"/>
				<line class="st9" x1="1087.1" y1="595.5" x2="888.6" y2="686.4"/>
				<line class="st9" x1="1109.9" y1="645.2" x2="911.3" y2="736"/>
				<line class="st9" x1="1132.6" y1="694.8" x2="934.1" y2="785.6"/>
				<line class="st9" x1="930.8" y1="487" x2="1067.3" y2="785.2"/>
			</g>
		</g>
		<g id="ISLA_F_2_">
			<g id="F-73_1_" class="property__active" ng-class="arrecife.inmovablesClassList[262]" ng-click="arrecife.showPropertyData(69, '73')">
				<polyline class="property pb-sprite-2" points="819.7,671.3 765.6,696 715.2,585.7 769.2,561 819.7,671.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 751.2747 614.2)"><tspan x="0" y="0" class="st1 st2 st3">19</tspan><tspan x="9.5" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 738.5267 585.0914)"><tspan x="0" y="0" class="st1 st2 st3">9.8</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 783.9519 684.3468)"><tspan x="0" y="0" class="st1 st2 st3">9.8</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 782.8824 609.6011)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 739.8681 629.2816)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="753.9,598.8 748.5,587.1 757,590.3 753.9,598.8 				"/>
				<polyline class="st5" points="753.9,598.8 745.3,595.6 748.5,587.1 753.9,598.8 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 766.637 623.4895)" class="st6 st7 st3">73</text>
			</g>
			<g id="F-74_2_" class="property__active" ng-class="arrecife.inmovablesClassList[263]" ng-click="arrecife.showPropertyData(69, '74')">
				<polyline class="property pb-sprite-1" points="715.2,585.7 765.6,696 716,718.7 665.5,608.4 715.2,585.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 701.6466 636.9128)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 686.6921 608.814)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 732.1173 708.0694)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 690.2374 651.9977)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="702,622.5 696.7,610.8 705.2,614 702,622.5 				"/>
				<polyline class="st5" points="702,622.5 693.5,619.4 696.7,610.8 702,622.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 717.0113 646.2012)" class="st6 st7 st3">74</text>
			</g>
			<g id="F-75_2_" class="property__active" ng-class="arrecife.inmovablesClassList[264]" ng-click="arrecife.showPropertyData(69, '75')">
				<polyline class="property pb-sprite-2" points="665.5,608.4 716,718.7 666.4,741.4 615.9,631.1 665.5,608.4 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 652.02 659.6249)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 637.0644 631.5266)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 682.4896 730.782)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 640.614 674.7084)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="652.4,645.2 647,633.6 655.6,636.7 652.4,645.2 				"/>
				<polyline class="st5" points="652.4,645.2 643.9,642.1 647,633.6 652.4,645.2 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 667.3811 668.9149)" class="st6 st7 st3">75</text>
			</g>
			<g id="F-76_2_" class="property__active" ng-class="arrecife.inmovablesClassList[265]" ng-click="arrecife.showPropertyData(69, '76')">
				<polyline class="property pb-sprite-1" points="615.9,631.1 666.4,741.4 613.5,765.6 563,655.4 615.9,631.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 602.3894 682.3388)"><tspan x="0" y="0" class="st1 st2 st3">19</tspan><tspan x="9.5" y="0" class="st1 st2 st3">2.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 585.783 654.996)"><tspan x="0" y="0" class="st1 st2 st3">9.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 631.2083 754.2514)"><tspan x="0" y="0" class="st1 st2 st3">9.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 587.6788 698.9325)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="601.1,668.7 595.8,657 604.3,660.2 601.1,668.7 				"/>
				<polyline class="st5" points="601.1,668.7 592.6,665.5 595.8,657 601.1,668.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 617.7558 691.6285)" class="st6 st7 st3">76</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_F_2_">
				<line class="st9" x1="715.2" y1="585.7" x2="765.6" y2="696"/>
				<line class="st9" x1="665.5" y1="608.4" x2="716" y2="718.7"/>
				<line class="st9" x1="615.9" y1="631.1" x2="666.4" y2="741.4"/>
				<line class="st9" x1="819.7" y1="671.3" x2="613.5" y2="765.6"/>
			</g>
		</g>
		<g id="ISLA_G_2_">
			<g id="G-77_2_" class="property__active" ng-class="arrecife.inmovablesClassList[266]" ng-click="arrecife.showPropertyData(69, '77')">
				<polyline class="property pb-sprite-2" points="401.4,729.3 511.7,678.8 534.4,728.4 424.1,778.9 401.4,729.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 452.6336 742.9426)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 413.2268 744.7143)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 512.4798 699.2955)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 450.7381 716.8007)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 468.4028 755.3987)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="512,708.7 500.3,714 503.5,705.5 512,708.7 				"/>
				<polyline class="st5" points="512,708.7 508.9,717.2 500.3,714 512,708.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 462.6356 728.8099)" class="st6 st7 st3">77</text>
			</g>
			<g id="G-78_2_" class="property__active" ng-class="arrecife.inmovablesClassList[267]" ng-click="arrecife.showPropertyData(69, '78')">
				<polyline class="property pb-sprite-1" points="424.1,778.9 534.4,728.4 557.1,778.1 446.8,828.5 424.1,778.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 475.3458 792.5694)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 435.939 794.3411)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 535.193 748.9187)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 491.1166 805.0291)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 485.3478 778.4367)" class="st6 st7 st3">78</text>
			</g>
			<g id="G-79_2_" class="property__active" ng-class="arrecife.inmovablesClassList[268]" ng-click="arrecife.showPropertyData(69, '79')">
				<polyline class="property pb-sprite-2" points="446.8,828.5 557.1,778.1 579.8,827.7 469.5,878.2 446.8,828.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 498.0584 842.1971)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 458.6516 843.9688)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 557.9028 798.5433)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 513.8276 854.6533)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="557.4,807.9 545.8,813.3 548.9,804.8 557.4,807.9 				"/>
				<polyline class="st5" points="557.4,807.9 554.3,816.5 545.8,813.3 557.4,807.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 508.0624 828.0688)" class="st6 st7 st3">79</text>
			</g>
			<g id="G-80_2_" class="property__active" ng-class="arrecife.inmovablesClassList[269]" ng-click="arrecife.showPropertyData(69, '80')">
				<polyline class="property pb-sprite-1" points="469.5,878.2 579.8,827.7 602.5,877.3 492.3,927.8 469.5,878.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 520.7719 891.8265)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 481.3639 893.5988)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 580.6163 848.1729)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 536.5414 904.2836)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="580.2,857.6 568.5,862.9 571.6,854.4 580.2,857.6 				"/>
				<polyline class="st5" points="580.2,857.6 577,866.1 568.5,862.9 580.2,857.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 530.775 877.6965)" class="st6 st7 st3">80</text>
			</g>
			<g id="G-81_2_" class="property__active" ng-class="arrecife.inmovablesClassList[270]" ng-click="arrecife.showPropertyData(69, '81')">
				<polyline class="property pb-sprite-2" points="492.3,927.8 602.5,877.3 625.3,927 515,977.4 492.3,927.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 543.4844 941.4543)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 504.0799 943.2281)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 603.3312 897.8069)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 559.2532 953.9095)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="602.9,907.2 591.2,912.5 594.4,904 602.9,907.2 				"/>
				<polyline class="st5" points="602.9,907.2 599.7,915.7 591.2,912.5 602.9,907.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 553.4877 927.3243)" class="st6 st7 st3">81</text>
			</g>
			<g id="G-82_2_" class="property__active" ng-class="arrecife.inmovablesClassList[271]" ng-click="arrecife.showPropertyData(69, '82')">
				<polyline class="property pb-sprite-1" points="625.3,927 648.2,977 537.9,1027.5 515,977.4 625.3,927 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 566.1967 991.0811)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.5" y="0" class="st1 st2 st3">1.63 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 526.8923 993.0798)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 626.1473 947.6526)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 582.1739 1003.9919)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="625.7,957 614,962.4 617.2,953.9 625.7,957 				"/>
				<polyline class="st5" points="625.7,957 622.5,965.6 614,962.4 625.7,957 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 576.2027 976.9573)" class="st6 st7 st3">82</text>
			</g>
			<g id="G-83_2_" class="property__active" ng-class="arrecife.inmovablesClassList[272]" ng-click="arrecife.showPropertyData(69, '83')">
				<polyline class="property pb-sprite-2" points="515,977.4 537.9,1027.5 449.7,1067.9 426.7,1017.8 515,977.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 466.9417 1036.5061)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">5.31 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 438.6626 1033.4568)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 515.8618 998.128)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 482.9183 1049.4172)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="460.9,1032.4 449.2,1037.8 452.4,1029.3 460.9,1032.4 				"/>
				<polyline class="st5" points="460.9,1032.4 457.8,1041 449.2,1037.8 460.9,1032.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 476.9468 1022.3827)" class="st6 st7 st3">83</text>
			</g>
			<g id="G-84_2_" class="property__active" ng-class="arrecife.inmovablesClassList[273]" ng-click="arrecife.showPropertyData(69, '84')">
				<polyline class="property pb-sprite-1" points="404,968.2 492.3,927.8 515,977.4 426.7,1017.8 404,968.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 444.2295 986.8793)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 415.8531 983.6103)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 493.0482 948.2769)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 459.9976 999.3348)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 454.2318 972.7497)" class="st6 st7 st3">84</text>
			</g>
			<g id="G-85_2_" class="property__active" ng-class="arrecife.inmovablesClassList[274]" ng-click="arrecife.showPropertyData(69, '85')">
				<polyline class="property pb-sprite-2" points="381.3,918.6 469.5,878.2 492.3,927.8 404,968.2 381.3,918.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 421.5168 937.2516)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 393.137 933.9767)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 470.3312 898.6459)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 437.2858 949.7089)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 431.5192 923.1219)" class="st6 st7 st3">85</text>
			</g>
			<g id="G-86_2_" class="property__active" ng-class="arrecife.inmovablesClassList[275]" ng-click="arrecife.showPropertyData(69, '86')">
				<polyline class="property pb-sprite-1" points="358.6,868.9 446.8,828.5 469.5,878.2 381.3,918.6 358.6,868.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 398.8034 887.6221)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 370.4227 884.3476)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 447.623 849.0161)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 414.572 900.0786)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 408.8066 873.4943)" class="st6 st7 st3">86</text>
			</g>
			<g id="G-87_2_" class="property__active" ng-class="arrecife.inmovablesClassList[276]" ng-click="arrecife.showPropertyData(69, '87')">
				<polyline class="property pb-sprite-2" points="335.9,819.3 424.1,778.9 446.8,828.5 358.6,868.9 335.9,819.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 376.0909 837.9944)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 347.7098 834.7222)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 424.9103 799.3906)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 391.861 850.4544)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 386.0919 823.8621)" class="st6 st7 st3">87</text>
			</g>
			<g id="G-88_2_" class="property__active" ng-class="arrecife.inmovablesClassList[277]" ng-click="arrecife.showPropertyData(69, '88')">
				<polyline class="property pb-sprite-1" points="313.2,769.7 401.4,729.3 424.1,778.9 335.9,819.3 313.2,769.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 353.3787 788.3676)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">4.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 324.9979 785.0931)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 402.197 749.7643)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 351.4824 762.226)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 369.1472 800.824)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="347.3,784.1 335.6,789.4 338.7,780.9 347.3,784.1 				"/>
				<polyline class="st5" points="347.3,784.1 344.1,792.6 335.6,789.4 347.3,784.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 363.3798 774.2353)" class="st6 st7 st3">88</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_G_2_">
				<line class="st9" x1="401.4" y1="729.3" x2="537.9" y2="1027.5"/>
				<line class="st9" x1="557.1" y1="778.1" x2="358.6" y2="868.9"/>
				<line class="st9" x1="579.8" y1="827.7" x2="381.3" y2="918.6"/>
				<line class="st9" x1="602.5" y1="877.3" x2="404" y2="968.2"/>
				<line class="st9" x1="625.3" y1="927" x2="426.7" y2="1017.8"/>
				<line class="st9" x1="534.4" y1="728.4" x2="335.9" y2="819.3"/>
			</g>
		</g>
		<g id="ISLA_H_2_">
			<g id="H-89_2_" class="property__active" ng-class="arrecife.inmovablesClassList[278]" ng-click="arrecife.showPropertyData(69, '89')">
				<polyline class="property pb-sprite-2" points="245.6,621.9 289.7,601.7 333.8,698.2 289.7,718.4 245.6,621.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 263.9442 623.5523)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 303.0597 709.0209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 267.0981 658.5833)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="305.5,694.5 300.1,682.8 308.6,686 305.5,694.5 				"/>
				<polyline class="st5" points="305.5,694.5 296.9,691.3 300.1,682.8 305.5,694.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 275.5067 640.4995)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 289.2198 649.9164)" class="st6 st7 st3">89</text>
			</g>
			<g id="H-90_2_" class="property__active" ng-class="arrecife.inmovablesClassList[279]" ng-click="arrecife.showPropertyData(69, '90')">
				<polyline class="property pb-sprite-1" points="289.7,601.7 333.8,581.5 377.9,678 333.8,698.2 289.7,601.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 308.0591 603.3627)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 347.1735 688.8318)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 311.2129 638.3969)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 319.3325 620.4421)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 333.3327 629.7224)" class="st6 st7 st3">90</text>
			</g>
			<g id="H-91_2_" class="property__active" ng-class="arrecife.inmovablesClassList[280]" ng-click="arrecife.showPropertyData(69, '91')">
				<polyline class="property pb-sprite-2" points="333.8,581.5 377.9,561.3 422.1,657.8 377.9,678 333.8,581.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 352.1719 583.174)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 391.2874 668.6426)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 355.327 618.2044)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 363.7348 600.1231)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 377.4434 609.5325)" class="st6 st7 st3">91</text>
			</g>
			<g id="H-92_2_" class="property__active" ng-class="arrecife.inmovablesClassList[281]" ng-click="arrecife.showPropertyData(69, '92')">
				<polyline class="property pb-sprite-1" points="377.9,561.3 422,541.1 466.2,637.6 422.1,657.8 377.9,561.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 396.2863 562.9846)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 435.4019 648.4532)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 399.4351 598.0212)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 407.5621 580.0673)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 421.5573 589.3455)" class="st6 st7 st3">92</text>
			</g>
			<g id="H-93_2_" class="property__active" ng-class="arrecife.inmovablesClassList[282]" ng-click="arrecife.showPropertyData(69, '93')">
				<polyline class="property pb-sprite-2" points="422,541.1 466.1,520.9 510.3,617.4 466.2,637.6 422,541.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 440.4006 542.7953)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 479.5161 628.2639)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 443.5512 577.8278)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 451.9627 559.7448)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 465.6723 569.1591)" class="st6 st7 st3">93</text>
			</g>
			<g id="H-94_2_" class="property__active" ng-class="arrecife.inmovablesClassList[283]" ng-click="arrecife.showPropertyData(69, '94')">
				<polyline class="property pb-sprite-1" points="466.1,520.9 510.2,500.8 554.4,597.3 510.3,617.4 466.1,520.9 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 484.5119 522.6074)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 523.6274 608.0759)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 487.6648 557.642)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 495.7884 539.6875)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 509.7842 548.9676)" class="st6 st7 st3">94</text>
			</g>
			<g id="H-95_2_" class="property__active" ng-class="arrecife.inmovablesClassList[284]" ng-click="arrecife.showPropertyData(69, '95')">
				<polyline class="property pb-sprite-2" points="510.2,500.8 554.3,480.6 598.5,577.1 554.4,597.3 510.2,500.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 528.6274 502.4174)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 567.7429 587.886)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 531.7781 537.4531)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 540.1909 519.3663)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 553.8939 528.7836)" class="st6 st7 st3">95</text>
			</g>
			<g id="H-96_2_" class="property__active" ng-class="arrecife.inmovablesClassList[285]" ng-click="arrecife.showPropertyData(69, '96')">
				<polyline class="property pb-sprite-1" points="554.3,480.6 598.5,460.4 642.6,556.9 598.5,577.1 554.3,480.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 572.7399 482.229)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 611.8554 567.6975)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 575.8937 517.2632)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 584.0173 499.3065)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(-0.4161 -0.9093 0.9093 -0.4161 606.43 515.455)" class="st6 st7 st3">96</text>
			</g>
			<g id="H-97_2_" class="property__active" ng-class="arrecife.inmovablesClassList[286]" ng-click="arrecife.showPropertyData(69, '97')">
				<polyline class="property pb-sprite-2" points="598.5,460.4 642.6,440.2 686.7,536.7 642.6,556.9 598.5,460.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 616.8545 462.0395)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 655.97 547.508)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 620.0059 497.0748)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 628.4156 478.9894)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 642.1208 488.4025)" class="st6 st7 st3">97</text>
			</g>
			<g id="H-98_2_" class="property__active" ng-class="arrecife.inmovablesClassList[287]" ng-click="arrecife.showPropertyData(69, '98')">
				<polyline class="property pb-sprite-1" points="642.6,440.2 686.7,420 730.9,516.5 686.7,536.7 642.6,440.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 660.9719 441.8488)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 700.0873 527.3173)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 664.1174 476.8867)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 672.2394 458.933)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 686.2374 468.2153)" class="st6 st7 st3">98</text>
			</g>
			<g id="H-99_2_" class="property__active" ng-class="arrecife.inmovablesClassList[288]" ng-click="arrecife.showPropertyData(69, '99')">
				<polyline class="property pb-sprite-2" points="686.7,420 730.8,399.8 775,496.3 730.9,516.5 686.7,420 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 705.0781 421.6631)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 744.1935 507.1317)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 708.2347 456.696)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 716.6402 438.6125)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 730.3553 448.0265)" class="st6 st7 st3">99</text>
			</g>
			<g id="H-100_2_" class="property__active" ng-class="arrecife.inmovablesClassList[289]" ng-click="arrecife.showPropertyData(69, '100')">
				<polyline class="property pb-sprite-1" points="730.8,399.8 774.9,379.6 819.1,476.1 775,496.3 730.8,399.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 749.1971 401.4716)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 788.3127 486.9401)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 752.3461 436.508)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 760.4634 418.5543)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 774.4619 427.8353)" class="st6 st7 st3">100</text>
			</g>
			<g id="H-101_2_" class="property__active" ng-class="arrecife.inmovablesClassList[290]" ng-click="arrecife.showPropertyData(69, '101')">
				<polyline class="property pb-sprite-2" points="774.9,379.6 819,359.4 863.2,455.9 819.1,476.1 774.9,379.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 793.3102 381.2828)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 832.4258 466.7513)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 796.4616 416.3181)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 804.8669 398.2348)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 818.5756 407.6441)" class="st6 st7 st3">101</text>
			</g>
			<g id="H-102_2_" class="property__active" ng-class="arrecife.inmovablesClassList[291]" ng-click="arrecife.showPropertyData(69, '102')">
				<polyline class="property pb-sprite-1" points="819,359.4 863.1,339.2 907.3,435.7 863.2,455.9 819,359.4 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 837.4213 361.0949)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 876.5369 446.5635)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 840.5703 396.126)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 848.6982 378.1749)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 862.6921 387.4559)" class="st6 st7 st3">102</text>
			</g>
			<g id="H-103_2_" class="property__active" ng-class="arrecife.inmovablesClassList[292]" ng-click="arrecife.showPropertyData(69, '103')">
				<polyline class="property pb-sprite-2" points="863.1,339.2 907.3,319.1 951.4,415.6 907.3,435.7 863.1,339.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 881.5402 340.9035)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 920.6558 426.372)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 884.688 375.9404)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 893.095 357.8563)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 906.805 367.2672)" class="st6 st7 st3">103</text>
			</g>
			<g id="H-104_2_" class="property__active" ng-class="arrecife.inmovablesClassList[293]" ng-click="arrecife.showPropertyData(69, '104')">
				<polyline class="property pb-sprite-1" points="907.3,319.1 951.4,298.9 995.5,395.4 951.4,415.6 907.3,319.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 936.6933 337.1503)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.5" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 925.6473 320.7174)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 964.7628 406.186)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 928.8026 355.7478)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 961.8875 340.6094)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="967.2,391.7 961.8,380 970.3,383.1 967.2,391.7 				"/>
				<polyline class="st5" points="967.2,391.7 958.6,388.5 961.8,380 967.2,391.7 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 950.9203 347.0774)" class="st6 st7 st3">104</text>
			</g>
			<g id="H-105_2_" class="property__active" ng-class="arrecife.inmovablesClassList[294]" ng-click="arrecife.showPropertyData(69, '105')">
				<polyline class="property pb-sprite-2" points="951.4,298.9 907.3,319.1 866.9,230.8 911,210.6 951.4,298.9 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 895.5731 247.4527)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 885.2671 232.4855)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 920.5987 309.686)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 886.5311 263.3863)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 919.6159 248.2447)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="899.3,243.5 894,231.8 902.5,234.9 899.3,243.5 				"/>
				<polyline class="st5" points="899.3,243.5 890.8,240.3 894,231.8 899.3,243.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 908.55 254.4894)" class="st6 st7 st3">105</text>
			</g>
			<g id="H-106_2_" class="property__active" ng-class="arrecife.inmovablesClassList[295]" ng-click="arrecife.showPropertyData(69, '106')">
				<polyline class="property pb-sprite-1" points="866.9,230.8 907.3,319.1 863.1,339.2 822.8,251 866.9,230.8 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 841.16 252.6715)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 876.4916 329.872)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 842.4179 283.573)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 851.7495 267.509)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 866.4261 279.0411)" class="st6 st7 st3">106</text>
			</g>
			<g id="H-107_2_" class="property__active" ng-class="arrecife.inmovablesClassList[296]" ng-click="arrecife.showPropertyData(69, '107')">
				<polyline class="property pb-sprite-2" points="863.1,339.2 819,359.4 778.7,271.2 822.8,251 863.1,339.2 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 807.3546 287.8289)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 797.0411 272.8629)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 832.3727 350.0635)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 798.3038 303.7644)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 820.3173 294.8679)" class="st6 st7 st3">107</text>
			</g>
			<g id="H-108_2_" class="property__active" ng-class="arrecife.inmovablesClassList[297]" ng-click="arrecife.showPropertyData(69, '108')">
				<polyline class="property pb-sprite-1" points="778.7,271.2 819,359.4 774.9,379.6 734.5,291.4 778.7,271.2 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 752.9301 293.0508)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 788.2616 370.2513)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 754.189 323.954)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 763.5179 307.889)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 778.204 319.42)" class="st6 st7 st3">108</text>
			</g>
			<g id="H-109_2_" class="property__active" ng-class="arrecife.inmovablesClassList[298]" ng-click="arrecife.showPropertyData(69, '109')">
				<polyline class="property pb-sprite-2" points="774.9,379.6 730.8,399.8 690.4,311.6 734.5,291.4 774.9,379.6 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 719.1207 328.2078)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 708.817 313.2396)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 744.1485 390.4402)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 710.0707 344.1451)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 732.088 335.2469)" class="st6 st7 st3">109</text>
			</g>
			<g id="H-110_2_" class="property__active" ng-class="arrecife.inmovablesClassList[299]" ng-click="arrecife.showPropertyData(69, '110')">
				<polyline class="property pb-sprite-1" points="690.4,311.6 730.8,399.8 686.7,420 646.3,331.8 690.4,311.6 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 664.6978 333.4312)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 700.0294 410.6317)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 665.9646 364.3286)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 675.2927 348.264)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 689.9725 359.7946)" class="st6 st7 st3">110</text>
			</g>
			<g id="H-111_2_" class="property__active" ng-class="arrecife.inmovablesClassList[300]" ng-click="arrecife.showPropertyData(69, '111')">
				<polyline class="property pb-sprite-2" points="686.7,420 642.6,440.2 602.2,352 646.3,331.8 686.7,420 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 630.8856 368.5841)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 620.5916 353.6168)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 655.9232 430.8173)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 621.8478 384.5211)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 643.8602 375.6252)" class="st6 st7 st3">111</text>
			</g>
			<g id="H-112_2_" class="property__active" ng-class="arrecife.inmovablesClassList[301]" ng-click="arrecife.showPropertyData(69, '112')">
				<polyline class="property pb-sprite-1" points="602.2,352 642.6,440.2 598.5,460.4 558.1,372.2 602.2,352 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 576.4743 373.8075)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 611.8058 451.008)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 577.7366 404.7091)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 587.0667 388.6436)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 601.7411 400.1767)" class="st6 st7 st3">112</text>
			</g>
			<g id="H-113_2_" class="property__active" ng-class="arrecife.inmovablesClassList[302]" ng-click="arrecife.showPropertyData(69, '113')">
				<polyline class="property pb-sprite-2" points="598.5,460.4 554.3,480.6 514,392.3 558.1,372.2 598.5,460.4 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 542.6661 408.9618)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 532.3597 393.997)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 567.6912 471.1975)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 533.6181 424.895)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 555.636 416.0018)" class="st6 st7 st3">113</text>
			</g>
			<g id="H-114_2_" class="property__active" ng-class="arrecife.inmovablesClassList[303]" ng-click="arrecife.showPropertyData(69, '114')">
				<polyline class="property pb-sprite-1" points="514,392.3 554.3,480.6 510.2,500.8 469.9,412.5 514,392.3 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 488.2472 414.1855)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 523.5788 491.386)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 489.5058 445.0866)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 498.8394 429.0195)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 513.518 440.5529)" class="st6 st7 st3">114</text>
			</g>
			<g id="H-115_2_" class="property__active" ng-class="arrecife.inmovablesClassList[304]" ng-click="arrecife.showPropertyData(69, '115')">
				<polyline class="property pb-sprite-2" points="510.2,500.8 466.1,520.9 425.7,432.7 469.9,412.5 510.2,500.8 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 454.4377 449.3351)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 444.1317 434.3754)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 479.4633 511.5759)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 445.3924 465.2755)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 467.4113 456.3787)" class="st6 st7 st3">115</text>
			</g>
			<g id="H-116_2_" class="property__active" ng-class="arrecife.inmovablesClassList[305]" ng-click="arrecife.showPropertyData(69, '116')">
				<polyline class="property pb-sprite-1" points="425.7,432.7 466.1,520.9 422,541.1 381.6,452.9 425.7,432.7 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 400.0204 454.5634)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 435.3519 531.7639)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 401.2817 485.4654)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 410.6152 469.3962)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 425.2925 480.928)" class="st6 st7 st3">116</text>
			</g>
			<g id="H-117_2_" class="property__active" ng-class="arrecife.inmovablesClassList[306]" ng-click="arrecife.showPropertyData(69, '117')">
				<polyline class="property pb-sprite-2" points="422,541.1 377.9,561.3 337.5,473.1 381.6,452.9 422,541.1 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 366.2117 489.7125)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 355.9062 474.7527)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 391.2377 551.9532)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 357.1657 505.6555)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 379.1842 496.7588)" class="st6 st7 st3">117</text>
			</g>
			<g id="H-118_2_" class="property__active" ng-class="arrecife.inmovablesClassList[307]" ng-click="arrecife.showPropertyData(69, '118')">
				<polyline class="property pb-sprite-1" points="337.5,473.1 377.9,561.3 333.8,581.5 293.4,493.3 337.5,473.1 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 311.7917 494.942)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 347.1233 572.1426)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 313.0538 525.8416)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 322.381 509.7721)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 337.0641 521.3066)" class="st6 st7 st3">118</text>
			</g>
			<g id="H-119_2_" class="property__active" ng-class="arrecife.inmovablesClassList[308]" ng-click="arrecife.showPropertyData(69, '119')">
				<polyline class="property pb-sprite-2" points="333.8,581.5 289.7,601.7 249.3,513.5 293.4,493.3 333.8,581.5 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 277.9826 530.0914)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 267.6777 515.1312)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 303.0104 592.3312)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 268.9416 546.03)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 290.9575 537.1312)" class="st6 st7 st3">119</text>
			</g>
			<g id="H-120_2_" class="property__active" ng-class="arrecife.inmovablesClassList[309]" ng-click="arrecife.showPropertyData(69, '120')">
				<polyline class="property pb-sprite-1" points="249.3,513.5 289.7,601.7 245.6,621.9 205.2,533.7 249.3,513.5 				"/>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 223.564 535.3203)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 258.8955 612.5209)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 224.828 566.2189)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="16.5" y="0" class="st1 st2 st3">0</tspan></text>
				<polyline class="st4" points="237.6,546.3 232.3,534.6 240.8,537.8 237.6,546.3 				"/>
				<polyline class="st5" points="237.6,546.3 229.1,543.1 232.3,534.6 237.6,546.3 				"/>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 234.1585 550.1555)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.5" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
				<text transform="matrix(0.4161 0.9093 -0.9093 0.4161 248.8369 561.6867)" class="st6 st7 st3">120</text>
			</g>
			<g id="LINEAS_DIVISORIAS_ISLA_H_2_">
				<line class="st9" x1="598.5" y1="577.1" x2="514" y2="392.3"/>
				<line class="st9" x1="554.4" y1="597.3" x2="469.9" y2="412.5"/>
				<line class="st9" x1="510.3" y1="617.4" x2="425.7" y2="432.7"/>
				<line class="st9" x1="466.2" y1="637.6" x2="381.6" y2="452.9"/>
				<line class="st9" x1="422.1" y1="657.8" x2="337.5" y2="473.1"/>
				<line class="st9" x1="377.9" y1="678" x2="293.4" y2="493.3"/>
				<line class="st9" x1="333.8" y1="698.2" x2="249.3" y2="513.5"/>
				<line class="st9" x1="245.6" y1="621.9" x2="951.4" y2="298.9"/>
				<line class="st9" x1="951.4" y1="415.6" x2="866.9" y2="230.8"/>
				<line class="st9" x1="907.3" y1="435.7" x2="822.8" y2="251"/>
				<line class="st9" x1="863.2" y1="455.9" x2="778.7" y2="271.2"/>
				<line class="st9" x1="819.1" y1="476.1" x2="734.5" y2="291.4"/>
				<line class="st9" x1="775" y1="496.3" x2="690.4" y2="311.6"/>
				<line class="st9" x1="730.9" y1="516.5" x2="646.3" y2="331.8"/>
				<line class="st9" x1="686.7" y1="536.7" x2="602.2" y2="352"/>
				<line class="st9" x1="642.6" y1="556.9" x2="558.1" y2="372.2"/>
			</g>
		</g>
		<g id="COMPLEMENTOS_2_">
			<g id="COLINDANCIA_2_">
				<line class="st10" x1="812.9" y1="1071.2" x2="1359.2" y2="821.2"/>
				<line class="st10" x1="1359.2" y1="821.2" x2="986.2" y2="6.3"/>
				<line class="st10" x1="986.2" y1="6.3" x2="0.5" y2="457.4"/>
				<line class="st10" x1="0.5" y1="457.4" x2="439.1" y2="1415.6"/>
				<line class="st10" x1="439.1" y1="1415.6" x2="548.6" y2="1282.9"/>
				<line class="st10" x1="548.6" y1="1282.9" x2="473.9" y2="1119.7"/>
				<line class="st10" x1="473.9" y1="1119.7" x2="582.5" y2="1070"/>
				<line class="st10" x1="582.5" y1="1070" x2="633.6" y2="1181.6"/>
				<line class="st10" x1="633.6" y1="1181.6" x2="643.9" y2="1170.4"/>
				<line class="st10" x1="643.9" y1="1170.4" x2="654.7" y2="1159.6"/>
				<line class="st10" x1="654.7" y1="1159.6" x2="665.9" y2="1149.3"/>
				<line class="st10" x1="665.9" y1="1149.3" x2="677.6" y2="1139.4"/>
				<line class="st10" x1="677.6" y1="1139.4" x2="689.7" y2="1130.1"/>
				<line class="st10" x1="689.7" y1="1130.1" x2="702.1" y2="1121.3"/>
				<line class="st10" x1="702.1" y1="1121.3" x2="715" y2="1113"/>
				<line class="st10" x1="715" y1="1113" x2="728.1" y2="1105.3"/>
				<line class="st10" x1="728.1" y1="1105.3" x2="741.6" y2="1098.1"/>
				<line class="st10" x1="741.6" y1="1098.1" x2="755.4" y2="1091.5"/>
				<line class="st10" x1="755.4" y1="1091.5" x2="769.4" y2="1085.5"/>
				<line class="st10" x1="769.4" y1="1085.5" x2="783.7" y2="1080.1"/>
				<line class="st10" x1="783.7" y1="1080.1" x2="798.2" y2="1075.4"/>
				<line class="st10" x1="798.2" y1="1075.4" x2="812.9" y2="1071.2"/>
			</g>
			<polyline class="st11" points="1253.8,792 1246,795.6 1245.3,794.7 1244.3,794.1 1243.1,794.1 1242.1,794.6 1241.4,795.5 
				1241.1,796.6 1241.3,797.7 1233.5,801.3 1240.5,789.7 1253.8,792 			"/>
			<polyline class="st11" points="1200.5,808 1193.5,819.6 1180.2,817.3 1188,813.7 1188.7,814.6 1189.7,815.1 1190.9,815.2 
				1191.9,814.7 1192.6,813.8 1192.9,812.7 1192.7,811.6 1200.5,808 			"/>
			<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1225.1787 792.7361)" class="st12 st7 st13">ENTRADA</text>
			<text transform="matrix(0.9093 -0.4161 0.4161 0.9093 1178.2047 814.2341)" class="st12 st7 st13">SALIDA</text>
			<polyline class="st11" points="1215.3,822.7 1231.8,815.1 1241.9,837.2 1225.4,844.8 1215.3,822.7 			"/>
		</g>
	</g>
</g>
</svg>

		</div>
     


</body>

</html>