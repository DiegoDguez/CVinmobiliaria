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
                    <h1 class="center-align">Lomas de Portto Blanco 1 </h1>
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
<svg version="1.1" id="PORTTO_BLANCO_CIMATARIO_II" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 1062.1" style="enable-background:new 0 0 1366 1062.1;" xml:space="preserve">
<style type="text/css">
	.property pb-sprite-1{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:10.2932px;}
	.st4{font-size:10.2933px;}
	.st5{fill:#FFBF00;}
	.st6{font-family:'CenturyGothic-Bold';}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st8{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st9{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st10{fill:none;stroke:#FFFFFF;stroke-width:1.3102;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#002B53;stroke-width:5.2409;stroke-miterlimit:10;}
</style>
<g id="Capa_1">
	
		<image style="overflow:visible;" width="1366" height="1063" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/lomas/condos/lomas_1.jpg"  transform="matrix(1 0 0 1 4.470191e-03 -3.577198e-02)">
	</image>
</g>
<g id="MACHOTE">
</g>
<g id="BASE">
</g>
<g id="ETAPA_1">
	<g id="ISLA_A">
		<g id="A-01_1_" class="property__active" ng-class="lomas.inmovablesClassList[0]" ng-click="lomas.showPropertyData(42, '1')">
			<polyline id="AL-01_1_" class="property pb-sprite-1" points="1208,98.8 1307,98.8 1260.6,178.8 1186.6,135.8 1208,98.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1276.0302 147.3578)"><tspan x="0" y="0" class="st1 st2 st3">17.2</tspan><tspan x="19.9" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1200.0554 129.0755)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1246.2795 107.3857)"><tspan x="0" y="0" class="st1 st2 st4">18.5</tspan><tspan x="19.9" y="0" class="st1 st2 st4">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1217.1765 127.2575)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="11.4" y="0" class="st1 st2 st3">2.31 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1235.3759 125.9516)" class="st5 st6 st3">01</text>
			<polyline class="st7" points="1211.1,129.3 1205.5,123.6 1211.1,117.9 1211.1,129.3 			"/>
			<polyline class="st8" points="1211.1,129.3 1211.1,117.9 1216.8,123.6 1211.1,129.3 			"/>
		</g>
		<g id="A-02_1_"  class="property__active" ng-class="lomas.inmovablesClassList[1]" ng-click="lomas.showPropertyData(42, '2')">
			<polyline id="AL-02_1_" class="property pb-sprite-2" points="1163.7,175.1 1186.6,135.8 1260.6,178.8 1237.7,218.1 1163.7,175.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1242.6658 204.8231)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1177.9105 167.2367)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1209.2944 158.9755)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1187.353 173.1098)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1208.2051 171.4277)" class="st5 st6 st3">02</text>
		</g>
		<g id="A-03_1_"  class="property__active" ng-class="lomas.inmovablesClassList[2]" ng-click="lomas.showPropertyData(42, '3')">
			<polyline id="AL-03_2_" class="property pb-sprite-1" points="1140.9,214.5 1163.7,175.1 1237.7,218.1 1214.9,257.4 1140.9,214.5 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1219.8403 244.1379)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1155.0974 206.5497)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1186.4706 198.2838)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1164.5322 212.4205)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1185.3882 210.7435)" class="st5 st6 st3">03</text>
		</g>
		<g id="A-04_1_"  class="property__active" ng-class="lomas.inmovablesClassList[3]" ng-click="lomas.showPropertyData(42, '4')">
			<polyline id="AL-04_1_" class="property pb-sprite-2" points="1118.1,253.8 1140.9,214.5 1214.9,257.4 1192.1,296.7 1118.1,253.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1197.0096 283.4542)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1132.2706 245.8592)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1163.6473 237.5988)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1141.6962 251.7343)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1162.5706 250.0566)" class="st5 st6 st3">04</text>
		</g>
		<g id="A-05_1_"  class="property__active" ng-class="lomas.inmovablesClassList[4]" ng-click="lomas.showPropertyData(42, '5')">
			<polyline id="AL-05_1_" class="property pb-sprite-1" points="1095.3,293.1 1118.1,253.8 1192.1,296.7 1169.3,336.1 1095.3,293.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1174.1869 322.7683)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1109.4333 285.175)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1140.8315 276.9164)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1118.8771 291.046)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1139.7517 289.3719)" class="st5 st6 st3">05</text>
		</g>
		<g id="A-06_1_"  class="property__active" ng-class="lomas.inmovablesClassList[5]" ng-click="lomas.showPropertyData(42, '6')">
			<polyline id="AL-06_1_" class="property pb-sprite-2" points="1072.4,332.4 1095.3,293.1 1169.3,336.1 1146.4,375.4 1072.4,332.4 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1151.3676 362.0804)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1086.6128 324.4853)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1117.9929 316.223)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1096.0548 330.3593)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1116.9156 328.6856)" class="st5 st6 st3">06</text>
		</g>
		<g id="A-07_1_"  class="property__active" ng-class="lomas.inmovablesClassList[6]" ng-click="lomas.showPropertyData(42, '7')">
			<polyline id="AL-07_1_" class="property pb-sprite-1" points="1049.6,371.7 1072.4,332.4 1146.4,375.4 1123.6,414.7 1049.6,371.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1128.5453 401.3937)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1063.7935 363.8014)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1095.1738 355.5386)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1073.2327 369.6725)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1094.0917 367.9939)" class="st5 st6 st3">07</text>
		</g>
		<g id="A-08_1_"  class="property__active" ng-class="lomas.inmovablesClassList[7]" ng-click="lomas.showPropertyData(42, '8')">
			<polyline id="AL-08_1_" class="property pb-sprite-2" points="1026.8,411 1049.6,371.7 1123.6,414.7 1100.8,454 1026.8,411 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1105.7225 440.7039)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1040.9727 403.1121)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1072.3525 394.8502)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1050.3954 408.9844)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1071.2716 407.3073)" class="st5 st6 st3">08</text>
		</g>
		<g id="A-09_1_"  class="property__active" ng-class="lomas.inmovablesClassList[8]" ng-click="lomas.showPropertyData(42, '9')">
			<polyline id="AL-09_1_" class="property pb-sprite-1" points="1004,450.3 1026.8,411 1100.8,454 1078,493.3 1004,450.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1082.8928 480.0184)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1018.1385 442.4264)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1049.5281 434.1634)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1027.578 448.2971)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1048.4496 446.6202)" class="st5 st6 st3">09</text>
		</g>
		<g id="A-10_1_"  class="property__active" ng-class="lomas.inmovablesClassList[9]" ng-click="lomas.showPropertyData(42, '10')">
			<polyline id="AL-10_1_" class="property pb-sprite-2" points="981.1,489.7 1004,450.3 1078,493.3 1055.1,532.6 981.1,489.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1060.0713 519.3344)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 995.3187 481.7394)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1026.6937 473.4781)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1004.7576 487.611)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1025.6257 485.9325)" class="st5 st6 st3">10</text>
		</g>
		<g id="A-11_1_"  class="property__active" ng-class="lomas.inmovablesClassList[10]" ng-click="lomas.showPropertyData(42, '11')">
			<polyline id="AL-11_1_" class="property pb-sprite-1" points="958.3,529 981.1,489.7 1055.1,532.6 1032.3,571.9 958.3,529 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1037.2451 558.6465)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 972.4911 521.0502)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1003.8746 512.7898)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 981.9337 526.9233)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1002.7911 525.2476)" class="st5 st6 st3">11</text>
		</g>
		<g id="A-12_1_"  class="property__active" ng-class="lomas.inmovablesClassList[11]" ng-click="lomas.showPropertyData(42, '12')">
			<polyline id="AL-12_1_" class="property pb-sprite-2" points="935.5,568.3 958.3,529 1032.3,571.9 1009.5,611.2 935.5,568.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1014.4274 597.9636)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 949.6721 560.3619)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 981.0516 552.1083)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 959.1105 566.2343)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 979.9778 564.561)" class="st5 st6 st3">12</text>
		</g>
		<g id="A-13_1_"  class="property__active" ng-class="lomas.inmovablesClassList[12]" ng-click="lomas.showPropertyData(42, '13')">
			<polyline id="AL-13_1_" class="property pb-sprite-1" points="912.7,607.6 935.5,568.3 1009.5,611.2 986.7,650.6 912.7,607.6 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 991.5886 637.2667)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 926.8367 599.6782)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 958.2314 591.4103)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 936.2792 605.5514)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 957.1466 603.8702)" class="st5 st6 st3">13</text>
		</g>
		<g id="A-14_1_"  class="property__active" ng-class="lomas.inmovablesClassList[13]" ng-click="lomas.showPropertyData(42, '14')">
			<polyline id="AL-14_1_" class="property pb-sprite-2" points="889.8,646.9 912.7,607.6 986.7,650.6 963.8,689.9 889.8,646.9 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 968.7682 676.5844)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 904.0168 638.9991)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 935.3992 630.7291)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 913.4579 644.8669)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 934.3255 643.1893)" class="st5 st6 st3">14</text>
		</g>
		<g id="A-15_1_"  class="property__active" ng-class="lomas.inmovablesClassList[14]" ng-click="lomas.showPropertyData(42, '15')">
			<polyline id="AL-15_1_" class="property pb-sprite-1" points="867,686.2 889.8,646.9 963.8,689.9 941,729.2 867,686.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 945.9435 715.894)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 881.1962 678.298)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 912.5774 670.0415)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 890.6362 684.1832)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 911.4897 682.5026)" class="st5 st6 st3">15</text>
		</g>
		<g id="A-16_1_"  class="property__active" ng-class="lomas.inmovablesClassList[15]" ng-click="lomas.showPropertyData(42, '16')">
			<polyline id="AL-16_1_" class="property pb-sprite-2" points="845.5,723.2 867,686.2 941,729.2 919.5,766.2 845.5,723.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 923.7906 754.0534)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 859.0483 716.4643)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 889.7558 709.3614)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 869.1476 721.174)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 889.3477 720.6587)" class="st5 st6 st3">16</text>
		</g>
		<g id="A-17_1_"  class="property__active" ng-class="lomas.inmovablesClassList[16]" ng-click="lomas.showPropertyData(42, '17')">
			<polyline id="AL-17_1_" class="property pb-sprite-1" points="824,760.2 845.5,723.2 919.5,766.2 898,803.2 824,760.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 902.309 791.0555)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 837.5619 753.459)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 868.269 746.353)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 847.6713 758.1786)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 867.8601 757.6516)" class="st5 st6 st3">17</text>
		</g>
		<g id="A-18_1_"  class="property__active" ng-class="lomas.inmovablesClassList[17]" ng-click="lomas.showPropertyData(42, '18')">
			<polyline id="AL-18_1_" class="property pb-sprite-2" points="802.6,797.2 824,760.2 898,803.2 876.6,840.2 802.6,797.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 880.8282 828.0484)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 816.0684 790.4582)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 846.7905 783.3536)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 826.189 795.174)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 846.385 794.658)" class="st5 st6 st3">18</text>
		</g>
		<g id="A-19_1_"  class="property__active" ng-class="lomas.inmovablesClassList[18]" ng-click="lomas.showPropertyData(42, '19')">
			<polyline id="AL-19_1_" class="property pb-sprite-1" points="781.1,834.2 802.6,797.2 876.6,840.2 855.1,877.2 781.1,834.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 859.3531 865.0549)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 794.5998 827.469)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 825.3055 820.3616)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 804.7118 832.1764)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 824.8947 831.6595)" class="st5 st6 st3">19</text>
		</g>
		<g id="A-20_1_"  class="property__active" ng-class="lomas.inmovablesClassList[19]" ng-click="lomas.showPropertyData(42, '20')">
			<polyline id="AL-20_1_" class="property pb-sprite-2" points="759,872.3 781.1,834.2 855.1,877.2 819.9,937.7 759,872.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 829.7666 915.9902)"><tspan x="0" y="0" class="st1 st2 st3">13.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 772.7961 865.0012)"><tspan x="0" y="0" class="st1 st2 st3">8.2</tspan><tspan x="14.2" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 783.2836 895.1957)"><tspan x="0" y="0" class="st1 st2 st3">16.7</tspan><tspan x="19.9" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 803.8334 857.355)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 781.1848 872.4676)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.61 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 801.3782 871.9366)" class="st5 st6 st3">20</text>
			<g>
				<polyline class="st7" points="783.4,868.5 777.7,862.9 783.4,857.2 783.4,868.5 				"/>
				<polyline class="st8" points="783.4,868.5 783.4,857.2 789,862.9 783.4,868.5 				"/>
			</g>
		</g>
		<g id="DIVISONES_1_">
			<line class="st10" x1="1186.6" y1="135.8" x2="1260.6" y2="178.8"/>
			<line class="st10" x1="1163.7" y1="175.1" x2="1237.7" y2="218.1"/>
			<line class="st10" x1="1140.9" y1="214.5" x2="1214.9" y2="257.4"/>
			<line class="st10" x1="1118.1" y1="253.8" x2="1192.1" y2="296.7"/>
			<line class="st10" x1="1095.3" y1="293.1" x2="1169.3" y2="336.1"/>
			<line class="st10" x1="1072.4" y1="332.4" x2="1146.4" y2="375.4"/>
			<line class="st10" x1="1049.6" y1="371.7" x2="1123.6" y2="414.7"/>
			<line class="st10" x1="1026.8" y1="411" x2="1100.8" y2="454"/>
			<line class="st10" x1="1004" y1="450.3" x2="1078" y2="493.3"/>
			<line class="st10" x1="981.1" y1="489.7" x2="1055.1" y2="532.6"/>
			<line class="st10" x1="958.3" y1="529" x2="1032.3" y2="571.9"/>
			<line class="st10" x1="935.5" y1="568.3" x2="1009.5" y2="611.2"/>
			<line class="st10" x1="912.7" y1="607.6" x2="986.7" y2="650.6"/>
			<line class="st10" x1="889.8" y1="646.9" x2="963.8" y2="689.9"/>
			<line class="st10" x1="867" y1="686.2" x2="941" y2="729.2"/>
			<line class="st10" x1="845.5" y1="723.2" x2="919.5" y2="766.2"/>
			<line class="st10" x1="824" y1="758.4" x2="898" y2="801.3"/>
			<line class="st10" x1="802.6" y1="795.4" x2="876.6" y2="838.3"/>
			<line class="st10" x1="781.1" y1="832.4" x2="855.1" y2="875.3"/>
		</g>
	</g>
	<g id="ISLA_B">
		<g id="B-21_1_"  class="property__active" ng-class="lomas.inmovablesClassList[20]" ng-click="lomas.showPropertyData(42, '21')">
			<polyline id="BL-21_1_" class="property pb-sprite-2" points="656.9,762.7 679.8,723.2 760.7,770.2 723.5,834.3 656.9,762.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 671.1074 754.6994)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">4</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 734.4008 810.7713)"><tspan x="0" y="0" class="st1 st2 st3">13.8</tspan><tspan x="19.9" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 706.0078 748.3679)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 684.035 788.6667)"><tspan x="0" y="0" class="st1 st2 st3">18.2</tspan><tspan x="19.9" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 682.0396 764.7886)"><tspan x="0" y="0" class="st1 st2 st3">19</tspan><tspan x="11.4" y="0" class="st1 st2 st3">5.90 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 702.313 759.4336)" class="st5 st6 st3">21</text>
			<g>
				<polyline class="st7" points="727.3,796.9 721.6,791.2 727.3,785.6 727.3,796.9 				"/>
				<polyline class="st8" points="727.3,796.9 727.3,785.6 733,791.2 727.3,796.9 				"/>
			</g>
		</g>
		<g id="B-22_1_"  class="property__active" ng-class="lomas.inmovablesClassList[21]" ng-click="lomas.showPropertyData(42, '22')">
			<polyline id="BL-22_1_" class="property pb-sprite-1" points="679.8,723.2 701.3,686.2 782.2,733.2 760.7,770.2 679.8,723.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 693.3031 716.4626)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 765.0059 758.0819)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 727.4998 711.3673)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 706.1829 723.2132)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 723.8002 722.4297)" class="st5 st6 st3">22</text>
		</g>
		<g id="B-23_1_"  class="property__active" ng-class="lomas.inmovablesClassList[22]" ng-click="lomas.showPropertyData(42, '23')">
			<polyline id="BL-23_1_" class="property pb-sprite-2" points="701.3,686.2 722.8,649.2 803.7,696.2 782.2,733.2 701.3,686.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 714.7908 679.4619)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 786.4781 721.0727)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 748.9697 674.3737)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 727.6573 686.208)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 745.2903 685.4246)" class="st5 st6 st3">23</text>
		</g>
		<g id="B-24_1_"  class="property__active" ng-class="lomas.inmovablesClassList[23]" ng-click="lomas.showPropertyData(42, '24')">
			<polyline id="BL-24_1_" class="property pb-sprite-1" points="722.8,649.2 744.2,612.2 825.2,659.2 803.7,696.2 722.8,649.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 736.2804 642.4576)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 807.9633 684.08)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 770.4559 637.3675)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 749.1462 649.2051)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 766.7593 648.4287)" class="st5 st6 st3">24</text>
		</g>
		<g id="B-25_1_"  class="property__active" ng-class="lomas.inmovablesClassList[24]" ng-click="lomas.showPropertyData(42, '25')">
			<polyline id="BL-25_1_" class="property pb-sprite-2" points="744.2,612.2 765.7,575.2 846.7,622.2 825.2,659.2 744.2,612.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 757.7527 605.4637)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 829.4415 647.0799)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 791.9344 600.363)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 770.6204 612.2117)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 788.252 611.4269)" class="st5 st6 st3">25</text>
		</g>
		<g id="B-26_1_"  class="property__active" ng-class="lomas.inmovablesClassList[25]" ng-click="lomas.showPropertyData(42, '26')">
			<polyline id="BL-26_1_" class="property pb-sprite-1" points="765.7,575.2 787.2,538.2 868.1,585.2 846.7,622.2 765.7,575.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 779.2419 568.4564)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 850.9311 610.0757)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 813.4188 563.3716)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 792.1035 575.2071)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 809.7211 574.4193)" class="st5 st6 st3">26</text>
		</g>
		<g id="B-27_1_"  class="property__active" ng-class="lomas.inmovablesClassList[26]" ng-click="lomas.showPropertyData(42, '27')">
			<polyline id="BL-27_1_" class="property pb-sprite-2" points="787.2,538.2 808.7,501.2 889.6,548.2 868.1,585.2 787.2,538.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 800.7177 531.4606)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 872.4136 573.0837)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 834.8973 526.3672)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 813.5807 538.2048)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 831.2097 537.4246)" class="st5 st6 st3">27</text>
		</g>
		<g id="B-28_1_"  class="property__active" ng-class="lomas.inmovablesClassList[27]" ng-click="lomas.showPropertyData(42, '28')">
			<polyline id="BL-28_1_" class="property pb-sprite-1" points="808.7,501.2 830.2,464.2 911.1,511.2 889.6,548.2 808.7,501.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 822.1967 494.4513)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 893.887 536.0764)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 856.3876 489.3696)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 835.0699 501.2054)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 852.6816 500.4236)" class="st5 st6 st3">28</text>
		</g>
		<g id="B-29_1_"  class="property__active" ng-class="lomas.inmovablesClassList[28]" ng-click="lomas.showPropertyData(42, '29')">
			<polyline id="BL-29_1_" class="property pb-sprite-2" points="830.2,464.2 851.6,427.2 932.6,474.2 911.1,511.2 830.2,464.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 843.6791 457.4594)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 915.3762 499.0769)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 877.8647 452.3637)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 856.552 464.2024)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 874.1774 463.4282)" class="st5 st6 st3">29</text>
		</g>
		<g id="B-30_1_"  class="property__active" ng-class="lomas.inmovablesClassList[29]" ng-click="lomas.showPropertyData(42, '30')">
			<polyline id="BL-30_1_" class="property pb-sprite-1" points="851.6,427.2 875.8,385.6 956.8,432.6 932.6,474.2 851.6,427.2 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 866.5135 418.1447)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 938.1917 459.7597)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 902.0237 410.7381)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 879.3749 424.8918)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 897.725 422.8687)" class="st5 st6 st3">30</text>
		</g>
		<g id="B-31_1_"  class="property__active" ng-class="lomas.inmovablesClassList[30]" ng-click="lomas.showPropertyData(42, '31')">
			<polyline id="BL-31_1_" class="property pb-sprite-2" points="875.8,385.6 900,344 980.9,391 956.8,432.6 875.8,385.6 			"/>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 926.1945 369.1154)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 890.6805 376.5209)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 962.3603 418.1369)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 903.5466 383.2679)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 921.8831 381.2369)" class="st5 st6 st3">31</text>
		</g>
		<g id="B-32_1_"  class="property__active" ng-class="lomas.inmovablesClassList[31]" ng-click="lomas.showPropertyData(42, '32')">
			<polyline id="BL-32_1_" class="property pb-sprite-1" points="900,344 924.1,302.3 1005.1,349.3 980.9,391 900,344 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 914.8488 334.8911)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 986.5324 376.5122)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 950.3613 327.4882)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 927.7106 341.6413)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 946.0552 339.6161)" class="st5 st6 st3">32</text>
		</g>
		<g id="B-33_1_"  class="property__active" ng-class="lomas.inmovablesClassList[32]" ng-click="lomas.showPropertyData(42, '33')">
			<polyline id="BL-33_1_" class="property pb-sprite-2" points="924.1,302.3 948.3,260.7 1029.3,307.7 1005.1,349.3 924.1,302.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 939.0042 293.2679)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1010.7028 334.8864)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 974.5271 285.8626)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 951.8675 300.0156)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 970.2258 297.9899)" class="st5 st6 st3">33</text>
		</g>
		<g id="B-34_1_"  class="property__active" ng-class="lomas.inmovablesClassList[33]" ng-click="lomas.showPropertyData(42, '34')">
			<polyline id="BL-34_1_" class="property pb-sprite-1" points="948.3,260.7 972.5,219.1 1053.4,266.1 1029.3,307.7 948.3,260.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 963.1699 251.6423)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1034.8694 293.2635)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 998.7004 244.2396)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 976.0362 258.3889)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 994.3921 256.3635)" class="st5 st6 st3">34</text>
		</g>
		<g id="B-35_1_"  class="property__active" ng-class="lomas.inmovablesClassList[34]" ng-click="lomas.showPropertyData(42, '35')">
			<polyline id="BL-35_1_" class="property pb-sprite-2" points="972.5,219.1 996.7,177.5 1077.6,224.4 1053.4,266.1 972.5,219.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 987.3386 210.0155)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1059.0255 251.6351)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1022.861 202.6076)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1000.2064 216.7635)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1018.5518 214.7406)" class="st5 st6 st3">35</text>
		</g>
		<g id="B-36_1_"  class="property__active" ng-class="lomas.inmovablesClassList[35]" ng-click="lomas.showPropertyData(42, '36')">
			<polyline id="BL-36_1_" class="property pb-sprite-1" points="996.7,177.5 1020.8,135.8 1101.8,182.8 1077.6,224.4 996.7,177.5 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1011.5059 168.3874)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1083.1898 210.0081)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1047.0306 160.987)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1024.3759 175.1395)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.50 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1042.7194 173.116)" class="st5 st6 st3">36</text>
		</g>
		<g id="B-37_1_"  class="property__active" ng-class="lomas.inmovablesClassList[36]" ng-click="lomas.showPropertyData(42, '37')">
			<polyline id="BL-37_1_" class="property pb-sprite-2" points="1020.8,135.8 1042.3,98.8 1150.5,98.8 1101.8,182.8 1020.8,135.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1034.3264 129.0771)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1085.1819 107.3857)"><tspan x="0" y="0" class="st1 st2 st4">20.2</tspan><tspan x="19.9" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1118.4042 149.3721)"><tspan x="0" y="0" class="st1 st2 st3">18.1</tspan><tspan x="19.9" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1052.3776 130.6273)"><tspan x="0" y="0" class="st1 st2 st3">22</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.90 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 1070.7421 128.6104)" class="st5 st6 st3">37</text>
			<g>
				<polyline class="st7" points="1106,139.6 1100.3,133.9 1106,128.2 1106,139.6 				"/>
				<polyline class="st8" points="1106,139.6 1106,128.2 1111.6,133.9 1106,139.6 				"/>
			</g>
		</g>
		<g id="B-38_1_"  class="property__active" ng-class="lomas.inmovablesClassList[37]" ng-click="lomas.showPropertyData(42, '38')">
			<polyline id="BL-38_1_" class="property pb-sprite-1" points="912.6,135.8 934.1,98.8 1042.3,98.8 993.5,182.8 912.6,135.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 1010.1851 149.3676)"><tspan x="0" y="0" class="st1 st2 st3">18.1</tspan><tspan x="19.9" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 926.1115 129.0771)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 976.9514 107.3857)"><tspan x="0" y="0" class="st1 st2 st4">20.2</tspan><tspan x="19.9" y="0" class="st1 st2 st4">4</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 946.5784 126.9929)"><tspan x="0" y="0" class="st1 st2 st3">22</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.90 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 967.5678 126.294)" class="st5 st6 st3">38</text>
			<g>
				<polyline class="st7" points="939.8,128.9 934.1,123.2 939.8,117.5 939.8,128.9 				"/>
				<polyline class="st8" points="939.8,128.9 939.8,117.5 945.5,123.2 939.8,128.9 				"/>
			</g>
		</g>
		<g id="B-39_1_"  class="property__active" ng-class="lomas.inmovablesClassList[38]" ng-click="lomas.showPropertyData(42, '39')">
			<polyline id="BL-39_1_" class="property pb-sprite-2" points="891.1,172.8 912.6,135.8 993.5,182.8 972.1,219.8 891.1,172.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 976.3234 207.6988)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 904.6287 166.0774)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 938.8016 160.984)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 917.4941 174.1494)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 935.8479 170.7997)" class="st5 st6 st3">39</text>
		</g>
		<g id="B-40_1_"  class="property__active" ng-class="lomas.inmovablesClassList[39]" ng-click="lomas.showPropertyData(42, '40')">
			<polyline id="BL-40_1_" class="property pb-sprite-1" points="869.6,209.8 891.1,172.8 972.1,219.8 950.6,256.8 869.6,209.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 954.8399 244.7003)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 883.1531 203.0807)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 917.3284 197.987)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 896.0128 211.1432)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 914.3568 207.8025)" class="st5 st6 st3">40</text>
		</g>
		<g id="B-41_1_"  class="property__active" ng-class="lomas.inmovablesClassList[40]" ng-click="lomas.showPropertyData(42, '41')">
			<polyline id="BL-41_1_" class="property pb-sprite-2" points="848.2,246.8 869.6,209.8 950.6,256.8 929.1,293.8 848.2,246.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 933.3498 281.7014)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 861.6674 240.0781)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 895.8451 234.9881)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 874.5256 248.1432)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 892.8716 244.7991)" class="st5 st6 st3">41</text>
		</g>
		<g id="B-42_1_"  class="property__active" ng-class="lomas.inmovablesClassList[41]" ng-click="lomas.showPropertyData(42, '42')">
			<polyline id="BL-42_1_" class="property pb-sprite-1" points="826.7,283.8 848.2,246.8 929.1,293.8 907.6,330.8 826.7,283.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 911.8755 318.6987)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 840.1923 277.0806)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 874.3638 271.9859)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 853.0541 285.1472)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 871.3987 281.8018)" class="st5 st6 st3">42</text>
		</g>
		<g id="B-43_1_"  class="property__active" ng-class="lomas.inmovablesClassList[42]" ng-click="lomas.showPropertyData(42, '43')">
			<polyline id="BL-43_1_" class="property pb-sprite-2" points="805.2,320.8 826.7,283.8 907.6,330.8 886.1,367.8 805.2,320.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 890.3876 355.6999)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 818.7071 314.0812)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 852.8834 308.9898)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 831.566 322.145)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 849.9084 318.8033)" class="st5 st6 st3">43</text>
		</g>
		<g id="B-44_1_"  class="property__active" ng-class="lomas.inmovablesClassList[43]" ng-click="lomas.showPropertyData(42, '44')">
			<polyline id="BL-44_1_" class="property pb-sprite-1" points="783.7,357.8 805.2,320.8 886.1,367.8 864.6,404.8 783.7,357.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 868.9171 392.7023)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 797.2289 351.0813)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 831.4117 345.9864)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 810.0903 359.1448)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 828.4379 355.8056)" class="st5 st6 st3">44</text>
		</g>
		<g id="B-45_1_"  class="property__active" ng-class="lomas.inmovablesClassList[44]" ng-click="lomas.showPropertyData(42, '45')">
			<polyline id="BL-45_1_" class="property pb-sprite-2" points="762.2,394.8 783.7,357.8 864.6,404.8 843.2,441.8 762.2,394.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 847.4241 429.7006)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 809.9197 382.9908)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 775.7434 388.0822)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 788.6055 396.1484)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 806.9481 392.8024)" class="st5 st6 st3">45</text>
		</g>
		<g id="B-46_1_"  class="property__active" ng-class="lomas.inmovablesClassList[45]" ng-click="lomas.showPropertyData(42, '46')">
			<polyline id="BL-46_1_" class="property pb-sprite-1" points="740.7,431.8 762.2,394.8 843.2,441.8 821.7,478.8 740.7,431.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 825.957 466.7049)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 788.4335 419.9891)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 754.2512 425.0793)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 767.12 433.1494)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 785.4682 429.8015)" class="st5 st6 st3">46</text>
		</g>
		<g id="B-47_1_"  class="property__active" ng-class="lomas.inmovablesClassList[46]" ng-click="lomas.showPropertyData(42, '47')">
			<polyline id="BL-47_1_" class="property pb-sprite-2" points="719.3,468.8 740.7,431.8 821.7,478.8 800.2,515.8 719.3,468.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 804.4631 503.7009)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 766.9608 456.9913)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 732.7843 462.0832)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 745.6418 470.1495)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 763.9929 466.8083)" class="st5 st6 st3">47</text>
		</g>
		<g id="B-48_1_"  class="property__active" ng-class="lomas.inmovablesClassList[47]" ng-click="lomas.showPropertyData(42, '48')">
			<polyline id="BL-48_1_" class="property pb-sprite-1" points="697.8,505.8 719.3,468.8 800.2,515.8 778.7,552.8 697.8,505.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 782.9792 540.6954)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 745.4705 493.9889)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 711.2947 499.0834)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 724.157 507.1492)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 742.5038 503.8078)" class="st5 st6 st3">48</text>
		</g>
		<g id="B-49_1_"  class="property__active" ng-class="lomas.inmovablesClassList[48]" ng-click="lomas.showPropertyData(42, '49')">
			<polyline id="BL-49_1_" class="property pb-sprite-2" points="676.3,542.8 697.8,505.8 778.7,552.8 757.2,589.8 676.3,542.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 761.505 577.7041)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 723.9979 530.9911)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 689.817 536.0827)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 702.6843 544.1592)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 721.0262 540.8105)" class="st5 st6 st3">49</text>
		</g>
		<g id="B-50_1_"  class="property__active" ng-class="lomas.inmovablesClassList[49]" ng-click="lomas.showPropertyData(42, '50')">
			<polyline id="BL-50_1_" class="property pb-sprite-1" points="654.8,579.8 676.3,542.8 757.2,589.8 735.8,626.8 654.8,579.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 740.011 614.7041)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 703.2841 569.2599)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 668.3272 573.0755)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 681.1948 581.1517)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 699.537 577.8025)" class="st5 st6 st3">50</text>
		</g>
		<g id="B-51_1_"  class="property__active" ng-class="lomas.inmovablesClassList[50]" ng-click="lomas.showPropertyData(42, '51')">
			<polyline id="BL-51_1_" class="property pb-sprite-2" points="633.3,616.8 654.8,579.8 735.8,626.8 714.3,663.8 633.3,616.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 718.5366 651.6939)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 681.0335 604.9856)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 646.845 610.0863)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 659.7202 618.1533)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 678.0658 614.8062)" class="st5 st6 st3">51</text>
		</g>
		<g id="B-52_1_"  class="property__active" ng-class="lomas.inmovablesClassList[51]" ng-click="lomas.showPropertyData(42, '52')">
			<polyline id="BL-52_1_" class="property pb-sprite-1" points="611.8,653.8 633.3,616.8 714.3,663.8 692.8,700.8 611.8,653.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 697.0549 688.7039)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 659.5545 641.9949)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 625.3729 647.0916)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 638.2354 655.1609)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 656.575 651.8085)" class="st5 st6 st3">52</text>
		</g>
		<g id="B-53_1_"  class="property__active" ng-class="lomas.inmovablesClassList[52]" ng-click="lomas.showPropertyData(42, '53')">
			<polyline id="BL-53_1_" class="property pb-sprite-2" points="611.8,653.8 692.8,700.8 656.9,762.7 590.2,691.1 611.8,653.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 667.0934 740.3029)"><tspan x="0" y="0" class="st1 st2 st3">13.3</tspan><tspan x="19.9" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 638.0615 678.9971)"><tspan x="0" y="0" class="st1 st2 st3">17.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 603.801 684.2372)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 617.3705 717.1039)"><tspan x="0" y="0" class="st1 st2 st3">18.2</tspan><tspan x="19.9" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 614.6384 697.704)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="11.4" y="0" class="st1 st2 st3">7.63 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 632.9072 694.5121)" class="st5 st6 st3">53</text>
			<g>
				<polyline class="st7" points="613.3,687.3 607.7,681.7 613.3,676 613.3,687.3 				"/>
				<polyline class="st8" points="613.3,687.3 613.3,676 619,681.7 613.3,687.3 				"/>
			</g>
		</g>
		<g id="DIVISIONES_5_">
			<line class="st10" x1="656.9" y1="762.7" x2="1042.3" y2="98.8"/>
			<line class="st10" x1="900" y1="344" x2="980.9" y2="391"/>
			<line class="st10" x1="956.8" y1="432.6" x2="875.8" y2="385.6"/>
			<line class="st10" x1="932.6" y1="474.2" x2="851.6" y2="427.2"/>
			<line class="st10" x1="911.1" y1="511.2" x2="830.2" y2="464.2"/>
			<line class="st10" x1="889.6" y1="548.2" x2="808.7" y2="501.2"/>
			<line class="st10" x1="868.1" y1="585.2" x2="787.2" y2="538.2"/>
			<line class="st10" x1="846.7" y1="622.2" x2="765.7" y2="575.2"/>
			<line class="st10" x1="825.2" y1="659.2" x2="744.2" y2="612.2"/>
			<line class="st10" x1="803.7" y1="696.2" x2="722.8" y2="649.2"/>
			<line class="st10" x1="782.2" y1="733.2" x2="701.3" y2="686.2"/>
			<line class="st10" x1="760.7" y1="770.2" x2="679.8" y2="723.2"/>
			<line class="st10" x1="783.7" y1="357.8" x2="864.6" y2="404.8"/>
			<line class="st10" x1="843.2" y1="441.8" x2="762.2" y2="394.8"/>
			<line class="st10" x1="821.7" y1="478.8" x2="740.7" y2="431.8"/>
			<line class="st10" x1="800.2" y1="515.8" x2="719.3" y2="468.8"/>
			<line class="st10" x1="778.7" y1="552.8" x2="697.8" y2="505.8"/>
			<line class="st10" x1="757.2" y1="589.8" x2="676.3" y2="542.8"/>
			<line class="st10" x1="735.8" y1="626.8" x2="654.8" y2="579.8"/>
			<line class="st10" x1="714.3" y1="663.8" x2="633.3" y2="616.8"/>
			<line class="st10" x1="692.8" y1="700.8" x2="611.8" y2="653.8"/>
			<line class="st10" x1="924.1" y1="302.3" x2="1005.1" y2="349.3"/>
			<line class="st10" x1="948.3" y1="260.7" x2="1029.3" y2="307.7"/>
			<line class="st10" x1="972.5" y1="219.1" x2="1053.4" y2="266.1"/>
			<line class="st10" x1="996.7" y1="177.5" x2="1077.6" y2="224.4"/>
			<line class="st10" x1="1020.8" y1="135.8" x2="1101.8" y2="182.8"/>
			<line class="st10" x1="805.2" y1="320.8" x2="886.1" y2="367.8"/>
			<line class="st10" x1="826.7" y1="283.8" x2="907.6" y2="330.8"/>
			<line class="st10" x1="848.2" y1="246.8" x2="929.1" y2="293.8"/>
			<line class="st10" x1="912.6" y1="135.8" x2="993.5" y2="182.8"/>
			<line class="st10" x1="891.1" y1="172.8" x2="972.1" y2="219.8"/>
			<line class="st10" x1="869.6" y1="209.8" x2="950.6" y2="256.8"/>
		</g>
	</g>
	<g id="ISLA_C">
		<g id="C-54_1_"  class="property__active" ng-class="lomas.inmovablesClassList[53]" ng-click="lomas.showPropertyData(42, '54')">
			<polyline id="CL-54_1_" class="property pb-sprite-1" points="478.6,571.3 500.5,533.6 593,587.3 554.8,653.1 478.6,571.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 492.2987 564.2035)"><tspan x="0" y="0" class="st1 st2 st3">8.1</tspan><tspan x="14.2" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 566.139 628.7473)"><tspan x="0" y="0" class="st1 st2 st3">14.2</tspan><tspan x="19.9" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 532.4745 562.1063)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 506.179 597.7648)"><tspan x="0" y="0" class="st1 st2 st3">23.2</tspan><tspan x="19.9" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 510.9128 574.2836)"><tspan x="0" y="0" class="st1 st2 st3">22</tspan><tspan x="11.4" y="0" class="st1 st2 st3">3.89 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 529.2975 572.2824)" class="st5 st6 st3">54</text>
			<g>
				<polyline class="st7" points="558.1,615 552.5,609.4 558.1,603.7 558.1,615 				"/>
				<polyline class="st8" points="558.1,615 558.1,603.7 563.8,609.4 558.1,615 				"/>
			</g>
		</g>
		<g id="C-55_1_"  class="property__active" ng-class="lomas.inmovablesClassList[54]" ng-click="lomas.showPropertyData(42, '55')">
			<polyline id="CL-55_1_" class="property pb-sprite-2" points="500.5,533.6 523.3,494.3 615.8,548 593,587.3 500.5,533.6 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 514.6537 525.6697)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 597.9112 574.0021)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 555.2944 522.7853)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 533.2632 535.7538)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 551.6545 533.757)" class="st5 st6 st3">55</text>
		</g>
		<g id="C-56_1_"  class="property__active" ng-class="lomas.inmovablesClassList[55]" ng-click="lomas.showPropertyData(42, '56')">
			<polyline id="CL-56_1_" class="property pb-sprite-1" points="523.3,494.3 546.1,455 638.6,508.7 615.8,548 523.3,494.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 537.4946 486.3633)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 620.739 534.6989)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 578.1136 483.4697)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 556.0886 496.443)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 574.4843 494.4424)" class="st5 st6 st3">56</text>
		</g>
		<g id="C-57_1_"  class="property__active" ng-class="lomas.inmovablesClassList[56]" ng-click="lomas.showPropertyData(42, '57')">
			<polyline id="CL-57_1_" class="property pb-sprite-2" points="546.1,455 568.9,415.7 661.4,469.4 638.6,508.7 546.1,455 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 560.3159 447.0517)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 643.5673 495.3829)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 600.954 444.1602)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 578.9234 457.1314)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 597.3149 455.1341)" class="st5 st6 st3">57</text>
		</g>
		<g id="C-58_1_"  class="property__active" ng-class="lomas.inmovablesClassList[57]" ng-click="lomas.showPropertyData(42, '58')">
			<polyline id="CL-58_1_" class="property pb-sprite-1" points="568.9,415.7 591.8,376.3 684.3,430 661.4,469.4 568.9,415.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 583.134 407.7377)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 666.3902 456.0723)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 623.77 404.8422)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 601.7452 417.8189)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 620.1246 415.8152)" class="st5 st6 st3">58</text>
		</g>
		<g id="C-59_1_"  class="property__active" ng-class="lomas.inmovablesClassList[58]" ng-click="lomas.showPropertyData(42, '59')">
			<polyline id="CL-59_1_" class="property pb-sprite-2" points="591.8,376.3 614.6,337 707.1,390.7 684.3,430 591.8,376.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 605.9589 368.4237)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 689.2132 416.7578)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 646.5891 365.5304)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 624.5665 378.5034)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 642.9505 376.5035)" class="st5 st6 st3">59</text>
		</g>
		<g id="C-60_1_"  class="property__active" ng-class="lomas.inmovablesClassList[59]" ng-click="lomas.showPropertyData(42, '60')">
			<polyline id="CL-60_1_" class="property pb-sprite-1" points="614.6,337 637.4,297.7 729.9,351.4 707.1,390.7 614.6,337 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 628.787 329.1082)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 712.0355 377.4484)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 669.4144 326.2195)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 647.3851 339.1925)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 665.7892 337.193)" class="st5 st6 st3">60</text>
		</g>
		<g id="C-61_1_"  class="property__active" ng-class="lomas.inmovablesClassList[60]" ng-click="lomas.showPropertyData(42, '61')">
			<polyline id="CL-61_1_" class="property pb-sprite-2" points="637.4,297.7 660.2,258.4 752.7,312.1 729.9,351.4 637.4,297.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 651.6094 289.7945)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 734.8705 338.1324)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 692.2383 286.9073)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 670.2224 299.8806)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 687.9302 299.0346)" class="st5 st6 st3">61</text>
		</g>
		<g id="C-62_1_"  class="property__active" ng-class="lomas.inmovablesClassList[61]" ng-click="lomas.showPropertyData(42, '62')">
			<polyline id="CL-62_1_" class="property pb-sprite-1" points="660.2,258.4 683.1,219.1 775.6,272.8 752.7,312.1 660.2,258.4 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 674.4333 250.4862)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 757.6891 298.8176)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 715.0669 247.5909)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 693.0392 260.5648)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 710.7532 259.7201)" class="st5 st6 st3">62</text>
		</g>
		<g id="C-63_1_"  class="property__active" ng-class="lomas.inmovablesClassList[62]" ng-click="lomas.showPropertyData(42, '63')">
			<polyline id="CL-63_1_" class="property pb-sprite-2" points="683.1,219.1 707.2,177.5 799.7,231.2 775.6,272.8 683.1,219.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 697.9265 210.0164)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 781.188 258.3496)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 739.2373 205.9691)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 716.5391 220.0991)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 734.9282 218.0981)" class="st5 st6 st3">63</text>
		</g>
		<g id="C-64_1_"  class="property__active" ng-class="lomas.inmovablesClassList[63]" ng-click="lomas.showPropertyData(42, '64')">
			<polyline id="CL-64_1_" class="property pb-sprite-1" points="707.2,177.5 731.4,135.8 823.9,189.5 799.7,231.2 707.2,177.5 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 722.0947 168.3906)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 805.3456 216.7187)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 763.4094 164.3404)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 740.7073 178.4692)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 759.0936 176.4694)" class="st5 st6 st3">64</text>
		</g>
		<g id="C-65_1_"  class="property__active" ng-class="lomas.inmovablesClassList[64]" ng-click="lomas.showPropertyData(42, '65')">
			<polyline id="CL-65_1_" class="property pb-sprite-2" points="731.4,135.8 752.9,98.8 876.6,98.8 823.9,189.5 731.4,135.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 744.9191 129.0774)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 842.5054 152.7286)"><tspan x="0" y="0" class="st1 st2 st3">19.6</tspan><tspan x="19.9" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(1 0 0 1 803.4943 107.3857)"><tspan x="0" y="0" class="st1 st2 st4">23.1</tspan><tspan x="19.9" y="0" class="st1 st2 st4">3</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 767.0646 131.5175)"><tspan x="0" y="0" class="st1 st2 st3">27</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.12 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 785.4501 129.515)" class="st5 st6 st3">65</text>
			<g>
				<polyline class="st7" points="830.5,141.6 824.8,136 830.5,130.3 830.5,141.6 				"/>
				<polyline class="st8" points="830.5,141.6 830.5,130.3 836.2,136 830.5,141.6 				"/>
			</g>
		</g>
		<g id="C-66_1_"  class="property__active" ng-class="lomas.inmovablesClassList[65]" ng-click="lomas.showPropertyData(42, '66')">
			<polyline id="CL-66_1_" class="property pb-sprite-1" points="607.7,135.8 629.2,98.8 752.9,98.8 700.2,189.5 607.7,135.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 621.2322 129.0752)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 718.8214 152.7292)"><tspan x="0" y="0" class="st1 st2 st3">19.6</tspan><tspan x="19.9" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(1 0 0 1 679.8088 107.3857)"><tspan x="0" y="0" class="st1 st2 st4">23.1</tspan><tspan x="19.9" y="0" class="st1 st2 st4">3</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 645.1949 132.4312)"><tspan x="0" y="0" class="st1 st2 st3">27</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.12 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 662.2587 129.1041)" class="st5 st6 st3">66</text>
			<g>
				<polyline class="st7" points="632.1,130.9 626.4,125.2 632.1,119.5 632.1,130.9 				"/>
				<polyline class="st8" points="632.1,130.9 632.1,119.5 637.8,125.2 632.1,130.9 				"/>
			</g>
		</g>
		<g id="C-67_1_"  class="property__active" ng-class="lomas.inmovablesClassList[66]" ng-click="lomas.showPropertyData(42, '67')">
			<polyline id="CL-67_1_" class="property pb-sprite-2" points="584.9,175.1 607.7,135.8 700.2,189.5 677.4,228.9 584.9,175.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 599.0878 167.2316)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 682.3431 215.5679)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 639.7296 164.3417)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 619.019 178.6365)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 636.0828 175.3133)" class="st5 st6 st3">67</text>
			<g>
				<polyline class="st7" points="608.6,169.3 602.9,163.6 608.6,157.9 608.6,169.3 				"/>
				<polyline class="st8" points="608.6,169.3 608.6,157.9 614.3,163.6 608.6,169.3 				"/>
			</g>
		</g>
		<g id="C-68_1_"  class="property__active" ng-class="lomas.inmovablesClassList[67]" ng-click="lomas.showPropertyData(42, '68')">
			<polyline id="CL-68_1_" class="property pb-sprite-1" points="562.1,214.5 584.9,175.1 677.4,228.9 654.6,268.2 562.1,214.5 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 576.2679 206.5486)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 659.508 254.8799)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 616.8961 203.6586)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 596.1791 217.9451)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 613.2683 214.6288)" class="st5 st6 st3">68</text>
			<g>
				<polyline class="st7" points="585.3,208.9 579.6,203.2 585.3,197.5 585.3,208.9 				"/>
				<polyline class="st8" points="585.3,208.9 585.3,197.5 591,203.2 585.3,208.9 				"/>
			</g>
		</g>
		<g id="C-69_1_"  class="property__active" ng-class="lomas.inmovablesClassList[68]" ng-click="lomas.showPropertyData(42, '69')">
			<polyline id="CL-69_1_" class="property pb-sprite-2" points="539.2,253.8 562.1,214.5 654.6,268.2 631.7,307.5 539.2,253.8 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 553.4322 245.854)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 636.6838 294.1926)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 594.0674 242.9636)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 573.3653 257.2633)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 590.425 253.9395)" class="st5 st6 st3">69</text>
			<g>
				<polyline class="st7" points="562.8,249.1 557.1,243.4 562.8,237.8 562.8,249.1 				"/>
				<polyline class="st8" points="562.8,249.1 562.8,237.8 568.5,243.4 562.8,249.1 				"/>
			</g>
		</g>
		<g id="C-70_1_"  class="property__active" ng-class="lomas.inmovablesClassList[69]" ng-click="lomas.showPropertyData(42, '70')">
			<polyline id="CL-70_1_" class="property pb-sprite-1" points="516.4,293.1 539.2,253.8 631.7,307.5 608.9,346.8 516.4,293.1 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 530.6109 285.1695)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 613.8633 333.5069)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 571.2524 282.2839)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 550.537 296.5714)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 567.6042 293.2542)" class="st5 st6 st3">70</text>
			<g>
				<polyline class="st7" points="540.1,288.9 534.4,283.2 540.1,277.5 540.1,288.9 				"/>
				<polyline class="st8" points="540.1,288.9 540.1,277.5 545.8,283.2 540.1,288.9 				"/>
			</g>
		</g>
		<g id="C-71_1_"  class="property__active" ng-class="lomas.inmovablesClassList[70]" ng-click="lomas.showPropertyData(42, '71')">
			<polyline id="CL-71_1_" class="property pb-sprite-2" points="493.6,332.4 516.4,293.1 608.9,346.8 586.1,386.1 493.6,332.4 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 507.7906 324.4873)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 591.0449 372.8173)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 548.4302 321.5933)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 527.7184 335.8862)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 544.7849 332.5663)" class="st5 st6 st3">71</text>
			<g>
				<polyline class="st7" points="517.8,327.5 512.1,321.8 517.8,316.1 517.8,327.5 				"/>
				<polyline class="st8" points="517.8,327.5 517.8,316.1 523.5,321.8 517.8,327.5 				"/>
			</g>
		</g>
		<g id="C-72_1_"  class="property__active" ng-class="lomas.inmovablesClassList[71]" ng-click="lomas.showPropertyData(42, '72')">
			<polyline id="CL-72_1_" class="property pb-sprite-1" points="470.8,371.7 493.6,332.4 586.1,386.1 563.3,425.4 470.8,371.7 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 484.9768 363.8015)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 568.2086 412.1315)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 525.5931 360.9087)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 504.8831 375.1986)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 521.9631 371.8787)" class="st5 st6 st3">72</text>
			<g>
				<polyline class="st7" points="496,366.3 490.3,360.7 496,355 496,366.3 				"/>
				<polyline class="st8" points="496,366.3 496,355 501.7,360.7 496,366.3 				"/>
			</g>
		</g>
		<g id="C-73_1_"  class="property__active" ng-class="lomas.inmovablesClassList[72]" ng-click="lomas.showPropertyData(42, '73')">
			<polyline id="CL-73_1_" class="property pb-sprite-2" points="448,411 470.8,371.7 563.3,425.4 540.5,464.7 448,411 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 462.1345 403.1105)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 545.3883 451.4414)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 502.7779 400.2215)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 482.063 414.5121)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 499.1273 411.192)" class="st5 st6 st3">73</text>
			<g>
				<polyline class="st7" points="471.7,406.6 466,400.9 471.7,395.2 471.7,406.6 				"/>
				<polyline class="st8" points="471.7,406.6 471.7,395.2 477.4,400.9 471.7,406.6 				"/>
			</g>
		</g>
		<g id="C-74_1_"  class="property__active" ng-class="lomas.inmovablesClassList[73]" ng-click="lomas.showPropertyData(42, '74')">
			<polyline id="CL-74_1_" class="property pb-sprite-1" points="425.1,450.3 448,411 540.5,464.7 517.6,504 425.1,450.3 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 439.3117 442.4246)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 522.5658 490.7551)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 479.9482 439.5321)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 459.2444 453.8269)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.00 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 476.3077 450.5046)" class="st5 st6 st3">74</text>
			<g>
				<polyline class="st7" points="450.4,446 444.7,440.4 450.4,434.7 450.4,446 				"/>
				<polyline class="st8" points="450.4,446 450.4,434.7 456,440.4 450.4,446 				"/>
			</g>
		</g>
		<g id="C-75_1_"  class="property__active" ng-class="lomas.inmovablesClassList[74]" ng-click="lomas.showPropertyData(42, '75')">
			<polyline id="CL-75_1_" class="property pb-sprite-2" points="402.4,489.5 425.1,450.3 517.6,504 478.6,571.3 402.4,489.5 			"/>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 416.5182 481.6806)"><tspan x="0" y="0" class="st1 st2 st3">8.4</tspan><tspan x="14.2" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 490.3758 546.218)"><tspan x="0" y="0" class="st1 st2 st3">14.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 457.1247 478.8436)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 429.9843 515.9706)"><tspan x="0" y="0" class="st1 st2 st3">18.5</tspan><tspan x="19.9" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 436.4534 493.0826)"><tspan x="0" y="0" class="st1 st2 st3">23</tspan><tspan x="11.4" y="0" class="st1 st2 st3">0.22 m2</tspan></text>
			<text transform="matrix(0.8643 0.503 -0.503 0.8643 453.508 489.7558)" class="st5 st6 st3">75</text>
			<g>
				<polyline class="st7" points="426.7,485.4 421,479.7 426.7,474.1 426.7,485.4 				"/>
				<polyline class="st8" points="426.7,485.4 426.7,474.1 432.4,479.7 426.7,485.4 				"/>
			</g>
		</g>
		<g id="DIVISIONES_2_">
			<line class="st10" x1="478.6" y1="571.3" x2="752.9" y2="98.8"/>
			<line class="st10" x1="614.6" y1="337" x2="707.1" y2="390.7"/>
			<line class="st10" x1="523.3" y1="494.3" x2="615.8" y2="548"/>
			<line class="st10" x1="593" y1="587.3" x2="500.5" y2="533.6"/>
			<line class="st10" x1="546.1" y1="455" x2="638.6" y2="508.7"/>
			<line class="st10" x1="568.9" y1="415.7" x2="661.4" y2="469.4"/>
			<line class="st10" x1="591.8" y1="376.3" x2="684.3" y2="430"/>
			<line class="st10" x1="425.1" y1="450.3" x2="517.6" y2="504"/>
			<line class="st10" x1="448" y1="411" x2="540.5" y2="464.7"/>
			<line class="st10" x1="470.8" y1="371.7" x2="563.3" y2="425.4"/>
			<line class="st10" x1="637.4" y1="297.7" x2="729.9" y2="351.4"/>
			<line class="st10" x1="493.6" y1="332.4" x2="586.1" y2="386.1"/>
			<line class="st10" x1="516.4" y1="293.1" x2="608.9" y2="346.8"/>
			<line class="st10" x1="539.2" y1="253.8" x2="631.7" y2="307.5"/>
			<line class="st10" x1="562.1" y1="214.5" x2="654.6" y2="268.2"/>
			<line class="st10" x1="607.7" y1="135.8" x2="700.2" y2="189.5"/>
			<line class="st10" x1="584.9" y1="175.1" x2="677.4" y2="228.9"/>
			<line class="st10" x1="660.2" y1="258.4" x2="752.7" y2="312.1"/>
			<line class="st10" x1="683.1" y1="219.1" x2="775.6" y2="272.8"/>
			<line class="st10" x1="731.4" y1="135.8" x2="823.9" y2="189.5"/>
			<line class="st10" x1="707.2" y1="177.5" x2="799.7" y2="231.2"/>
		</g>
	</g>
	<g id="ISLA_D">
		<g id="D-76_1_"  class="property__active" ng-class="lomas.inmovablesClassList[75]" ng-click="lomas.showPropertyData(42, '76')">
			<polyline id="DL-76_1_" class="property pb-sprite-1" points="749,1060 793.9,982.6 764.7,951.3 702.1,1009.7 749,1060 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 767.0033 966.2885)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 719.36 1024.9857)"><tspan x="0" y="0" class="st1 st2 st3">12.8</tspan><tspan x="19.9" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 730.9322 994.2728)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.503 -0.8643 0.8643 0.503 763.6799 1029.8329)"><tspan x="0" y="0" class="st1 st2 st3">16.7</tspan><tspan x="19.9" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 739.1363 1021.39)"><tspan x="0" y="0" class="st1 st2 st3">16</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.86 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 746.2108 1002.3701)" class="st5 st6 st3">76</text>
			<g>
				<polyline class="st7" points="767.8,984.4 762.1,978.7 767.8,973 767.8,984.4 				"/>
				<polyline class="st8" points="767.8,984.4 767.8,973 773.5,978.7 767.8,984.4 				"/>
			</g>
		</g>
		<g id="D-77_1_"  class="property__active" ng-class="lomas.inmovablesClassList[76]" ng-click="lomas.showPropertyData(42, '77')">
			<polyline id="DL-77_1_" class="property pb-sprite-2" points="702.1,1009.7 672.9,978.4 735.5,920 764.7,951.3 702.1,1009.7 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 737.8407 934.987)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 683.0576 986.0175)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 701.769 962.9719)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 705.3766 985.6606)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 712.4559 966.6441)" class="st5 st6 st3">77</text>
		</g>
		<g id="D-78_1_"  class="property__active" ng-class="lomas.inmovablesClassList[77]" ng-click="lomas.showPropertyData(42, '78')">
			<polyline id="DL-78_1_" class="property pb-sprite-1" points="672.9,978.4 643.8,947.1 706.4,888.7 735.5,920 672.9,978.4 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 708.6796 903.6761)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 653.8967 954.717)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 672.6079 931.6557)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 676.2158 954.3494)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 683.2908 935.3237)" class="st5 st6 st3">78</text>
		</g>
		<g id="D-79_1_"  class="property__active" ng-class="lomas.inmovablesClassList[78]" ng-click="lomas.showPropertyData(42, '79')">
			<polyline id="DL-79_1_" class="property pb-sprite-2" points="643.8,947.1 614.6,915.7 677.2,857.4 706.4,888.7 643.8,947.1 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 679.5034 872.3741)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 624.7219 923.403)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 643.4521 900.3613)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 647.0513 923.0471)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="11.4" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 654.1342 904.03)" class="st5 st6 st3">79</text>
		</g>
		<g id="D-80_1_"  class="property__active" ng-class="lomas.inmovablesClassList[79]" ng-click="lomas.showPropertyData(42, '80')">
			<polyline id="DL-80_1_" class="property pb-sprite-1" points="614.6,915.7 583.6,882.5 646.2,824.2 677.2,857.4 614.6,915.7 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 649.4332 840.0949)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 594.6458 891.1213)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 612.4548 867.0934)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 617.8785 891.7444)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 624.0651 871.7525)" class="st5 st6 st3">80</text>
		</g>
		<g id="D-81_1_"  class="property__active" ng-class="lomas.inmovablesClassList[80]" ng-click="lomas.showPropertyData(42, '81')">
			<polyline id="DL-81_1_" class="property pb-sprite-2" points="583.6,882.5 552.6,849.2 615.2,790.9 646.2,824.2 583.6,882.5 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 618.4487 806.8257)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 563.6669 857.8709)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 581.4684 833.8339)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 586.8988 858.4788)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 593.0661 838.4861)" class="st5 st6 st3">81</text>
		</g>
		<g id="D-82_1_" class="property__active" ng-class="lomas.inmovablesClassList[81]" ng-click="lomas.showPropertyData(42, '82')">
			<polyline id="DL-82_1_" class="property pb-sprite-1" points="552.6,849.2 521.6,816 584.2,757.6 615.2,790.9 552.6,849.2 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 587.4562 773.5773)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 532.6708 824.6019)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 550.4846 800.5641)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 555.9153 825.2274)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 562.0829 805.2318)" class="st5 st6 st3">82</text>
		</g>
		<g id="D-83_1_" class="property__active" ng-class="lomas.inmovablesClassList[82]" ng-click="lomas.showPropertyData(42, '83')">
			<polyline id="DL-83_1_" class="property pb-sprite-2" points="521.6,816 490.6,782.7 553.3,724.4 584.2,757.6 521.6,816 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 556.4679 740.3038)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 501.6852 791.347)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 517.1896 769.41)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 524.9187 791.9588)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 531.101 771.9655)" class="st5 st6 st3">83</text>
		</g>
		<g id="D-84_1_"  class="property__active" ng-class="lomas.inmovablesClassList[83]" ng-click="lomas.showPropertyData(42, '84')">
			<polyline id="DL-84_1_" class="property pb-sprite-1" points="490.6,782.7 459.7,749.4 522.3,691.1 553.3,724.4 490.6,782.7 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 525.4897 707.0527)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 470.704 758.0828)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 485.4335 737.1859)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 493.9363 758.7036)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 500.1023 738.7042)" class="st5 st6 st3">84</text>
		</g>
		<g id="D-85_1_"  class="property__active" ng-class="lomas.inmovablesClassList[84]" ng-click="lomas.showPropertyData(42, '85')">
			<polyline id="DL-85_1_" class="property pb-sprite-2" points="459.7,749.4 428.7,716.2 491.3,657.9 522.3,691.1 459.7,749.4 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 494.4884 673.7805)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 439.7077 724.8246)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 457.5276 700.7946)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 462.95 725.4308)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 469.1189 705.4366)" class="st5 st6 st3">85</text>
		</g>
		<g id="D-86_1_"  class="property__active" ng-class="lomas.inmovablesClassList[85]" ng-click="lomas.showPropertyData(42, '86')">
			<polyline id="DL-86_1_" class="property pb-sprite-1" points="428.7,716.2 397.7,682.9 460.3,624.6 491.3,657.9 428.7,716.2 			"/>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 463.5101 640.5322)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 408.7239 691.5574)"><tspan x="0" y="0" class="st1 st2 st3">8.5</tspan><tspan x="14.2" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 426.5266 667.5354)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="19.9" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 431.9542 692.1776)"><tspan x="0" y="0" class="st1 st2 st3">13</tspan><tspan x="11.4" y="0" class="st1 st2 st3">6.00 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 438.138 672.1882)" class="st5 st6 st3">86</text>
		</g>
		<g id="D-87_1_"  class="property__active" ng-class="lomas.inmovablesClassList[86]" ng-click="lomas.showPropertyData(42, '87')">
			<polyline id="DL-87_1_" class="property pb-sprite-2" points="397.7,682.9 354.6,636.7 430.5,592.6 460.3,624.6 397.7,682.9 			"/>
			<text transform="matrix(0.8652 -0.5015 0.5015 0.8652 387.6229 628.5732)"><tspan x="0" y="0" class="st1 st2 st4">16.4</tspan><tspan x="19.9" y="0" class="st1 st2 st4">1</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 433.1174 607.9076)"><tspan x="0" y="0" class="st1 st2 st3">8.1</tspan><tspan x="14.2" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(0.6807 0.7325 -0.7325 0.6807 369.9915 649.9839)"><tspan x="0" y="0" class="st1 st2 st3">11.8</tspan><tspan x="19.9" y="0" class="st1 st2 st3">1</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 402.7957 660.8802)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="11.4" y="0" class="st1 st2 st3">9.87 m2</tspan></text>
			<text transform="matrix(0.7325 -0.6807 0.6807 0.7325 408.0513 639.8951)" class="st5 st6 st3">87</text>
			<g>
				<polyline class="st7" points="433.2,625.4 427.5,619.8 433.2,614.1 433.2,625.4 				"/>
				<polyline class="st8" points="433.2,625.4 433.2,614.1 438.8,619.8 433.2,625.4 				"/>
			</g>
		</g>
		<g id="DIVISIONES_1_">
			<line class="st10" x1="764.7" y1="951.3" x2="702.1" y2="1009.7"/>
			<line class="st10" x1="735.5" y1="920" x2="672.9" y2="978.4"/>
			<line class="st10" x1="706.4" y1="888.7" x2="643.8" y2="947.1"/>
			<line class="st10" x1="677.2" y1="857.4" x2="614.6" y2="915.7"/>
			<line class="st10" x1="646.2" y1="824.2" x2="583.6" y2="882.5"/>
			<line class="st10" x1="460.3" y1="624.6" x2="397.7" y2="682.9"/>
			<line class="st10" x1="491.3" y1="657.8" x2="428.7" y2="716.2"/>
			<line class="st10" x1="522.3" y1="691.1" x2="459.7" y2="749.4"/>
			<line class="st10" x1="553.3" y1="724.4" x2="490.6" y2="782.7"/>
			<line class="st10" x1="615.2" y1="790.9" x2="552.6" y2="849.2"/>
			<line class="st10" x1="584.2" y1="757.6" x2="521.6" y2="816"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polygon class="st11" points="0.7,1.6 130.3,667.6 370,529.3 430.5,592.6 354.6,639.4 749.2,1063 1365.5,1.6 	"/>
</g>
</svg>


    </div>

</body>

</html>