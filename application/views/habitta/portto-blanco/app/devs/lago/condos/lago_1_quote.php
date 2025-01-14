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

<body ng-controller="PBLagoQuoteCtrl as lago">

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

	<div class="modal-dialog" ng-class="lago.dialogDisplay">
		<div class="backdrop-dialog" ng-click="lago.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="lago.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{lago.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{lago.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{lago.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{lago.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{lago.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lago.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{lago.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lago.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{lago.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{lago.month}} y paga la primera mensualidad hasta {{lago.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{lago.month + ' ' + lago.year}}</p>
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
                    <h1 class="center-align">Lago 1</h1>
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
        <svg version="1.1" id="CLUSTER_LAGO" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1399 1590.4"
            style="enable-background:new 0 0 1399 1590.4;" xml:space="preserve">
            <style type="text/css">
                .st0 {fill-rule: evenodd; clip-rule: evenodd; fill: #4076AE; }
                .st1 {fill-rule: evenodd; clip-rule: evenodd; fill: #E0A843; } 
                .st2 {opacity: 0.6; fill-rule: evenodd; clip-rule: evenodd; fill: #E0A843; }
                .st3 {fill: #FFFFFF; }
                .st4 {font-family: 'CenturyGothic'; }
                .st5 {font-size: 10.5298px;}
                .st6 {font-size: 10.53px;}
                .st7 {font-size: 10.5299px;}
                .st8 {fill: #FFBF00; }
                .st9 { font-family: 'CenturyGothic-Bold'; }
                .st10 {fill-rule: evenodd;clip-rule: evenodd; fill: #64768C;}
                .st11 {font-size: 10.5297px;}
                .st12 {fill: none; stroke: #FFFFFF;stroke-width: 0.75;stroke-linecap: round;stroke-linejoin: round;stroke-miterlimit: 10;}
                .st13 {fill: #03234B;}
                .st14 {font-size: 5.7922px;}
                .st15 {font-size: 5.7422px;}
                .st16 {fill: none;stroke: #002B53;stroke-width: 2;stroke-linecap: round;stroke-linejoin: round; stroke-miterlimit: 10;}
                .st17 {fill-rule: evenodd; clip-rule: evenodd; fill: #002B53;}
                .st18 {fill: none;stroke: #FFFFFF; stroke-width: 0.15; stroke-miterlimit: 10; }
                .st19 {fill: #002856;}
            </style>
            <g id="BASE">
                <image style="overflow:visible;" width="1366" height="1554" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/lago/condos/lago_1.jpg" transform="matrix(1.0249 0 0 1.0231 -0.508 0.4463)"> </image>
            </g>
            <g id="CONDO_LAGO_1">
                <g id="ISLA_A"> 
                    <g id="A-01_2_" class="property__active" ng-class="lago.inmovablesClassList[0]" ng-click="lago.showPropertyData(40, '1')">
                        <polyline id="AL-01_2_"  class="property pb-sprite-1" points="382.8,159.6 405.2,276.8 344.7,287.9 324.1,170.4 382.8,159.6" />
                        <g>
                            <polyline class="st1" points="370.3,250.5 370.3,266.3 362.4,258.4 370.3,250.5"/>
                            <polyline class="st2" points="370.3,250.5 378.2,258.4 370.3,266.3 370.3,250.5"/>
                        </g>
                        <text transform="matrix(0.1702 0.9854 -0.9854 0.1702 350.293 199.877)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9839 -0.1788 0.1788 0.9839 345.6651 177.9374)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">0</tspan>
                        </text>
                        <text transform="matrix(0.9839 -0.1788 0.1788 0.9839 364.4066 280.2071)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">4</tspan>
                        </text>
                        <text transform="matrix(0.1874 0.9823 -0.9823 0.1874 381.722 207.3883)">
                            <tspan x="0" y="0" class="st3 st4 st7">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.1994 0.9799 -0.9799 0.1994 365.7744 215.3982)"
                            class="st8 st9 st5">01</text>
                    </g>

                    <g id="A-02_2_" class="property__active" ng-class="lago.inmovablesClassList[1]" ng-click="lago.showPropertyData(40, '2')">
                        <polyline id="AL-02_2_" class="property pb-sprite-2"
                            points="265.3,180.2 324.1,170.4 344.7,287.9 284.1,298.1 265.3,180.2 			" />
                        <text transform="matrix(0.1616 0.9869 -0.9869 0.1616 287.1898 211.1076)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9863 -0.165 0.165 0.9863 286.7611 188.1012)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">0</tspan>
                        </text>
                        <text transform="matrix(0.9863 -0.165 0.165 0.9863 303.9612 290.6324)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">4</tspan>
                        </text>
                        <text transform="matrix(0.1719 0.9851 -0.9851 0.1719 322.135 218.0806)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.1994 0.9799 -0.9799 0.1994 304.2695 223.5847)"
                            class="st8 st9 st5">02</text>
                    </g>
                    <g id="A-03_2_" class="property__active" ng-class="lago.inmovablesClassList[2]" ng-click="lago.showPropertyData(40, '3')">
                        <polyline id="AL-03_2_" class="property pb-sprite-1"
                            points="206.3,189.2 265.3,180.2 284.1,298.1 223.4,307.3 206.3,189.2 			" />
                        <text transform="matrix(0.1409 0.99 -0.99 0.1409 230.5486 219.8237)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9888 -0.1495 0.1495 0.9888 227.653 197.3508)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.9888 -0.1495 0.1495 0.9888 243.3187 300.1355)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">4</tspan>
                        </text>
                        <text transform="matrix(0.1564 0.9877 -0.9877 0.1564 261.9373 227.973)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.1994 0.9799 -0.9799 0.1994 246.5259 235.3289)"
                            class="st8 st9 st5">03</text>
                    </g>
                    <g id="A-04_2_" class="property__active" ng-class="lago.inmovablesClassList[3]" ng-click="lago.showPropertyData(40, '4')">
                        <polyline id="AL-04_2_" class="property pb-sprite-2" points="206.3,189.2 223.4,307.3 162.5,315.7 147.1,197.3 206.3,189.2 			" />
                        <text transform="matrix(0.1201 0.9928 -0.9928 0.1201 171.1345 229.4332)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9907 -0.1357 0.1357 0.9907 168.3196 205.6819)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.9907 -0.1357 0.1357 0.9907 182.4451 308.6895)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">4</tspan>
                        </text>
                        <text transform="matrix(0.1426 0.9898 -0.9898 0.1426 203.0893 237.0083)">
                            <tspan x="0" y="0" class="st3 st4 st7">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.1994 0.9799 -0.9799 0.1994 184.8311 241.7641)"
                            class="st8 st9 st5">04</text>
                    </g>
                    <g id="A-05_2_" class="property__active" ng-class="lago.inmovablesClassList[4]" ng-click="lago.showPropertyData(40, '5')">
                        <polyline id="AL-05_2_" class="property pb-sprite-1"
                            points="147.1,197.3 162.5,315.7 101.8,323.1 87.9,204.5 147.1,197.3 			" />
                        <text transform="matrix(8.541960e-02 0.9963 -0.9963 8.541960e-02 109.6701 235.0966)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">9.53 m2</tspan>
                        </text>
                        <text transform="matrix(0.9928 -0.1201 0.1201 0.9928 108.9705 213.2423)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.9928 -0.1201 0.1201 0.9928 121.7318 316.4331)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.1</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">9</tspan>
                        </text>
                        <text transform="matrix(0.1271 0.9919 -0.9919 0.1271 142.5315 244.7852)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.1994 0.9799 -0.9799 0.1994 124.0217 251.2291)"
                            class="st8 st9 st5">05</text>
                    </g>
                    <g id="A-06_2_" class="property__active" ng-class="lago.inmovablesClassList[5]" ng-click="lago.showPropertyData(40, '6')">
                        <polyline id="AL-06_2_" class="property pb-sprite-2"
                            points="101.8,323.1 42.5,329.4 3.1,213.3 45.5,209.2 87.9,204.5 101.8,323.1 			" />
                        <g>
                            <polyline class="st1" points="66.6,294.9 66.6,310.7 58.7,302.8 66.6,294.9 				" />
                            <polyline class="st2" points="66.6,294.9 74.5,302.8 66.6,310.7 66.6,294.9 				" />
                        </g>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 21.888 257.7527)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.4</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">4</tspan>
                        </text>
                        <text transform="matrix(0.1132 0.9936 -0.9936 0.1132 49.1292 243.9253)">
                            <tspan x="0" y="0" class="st3 st4 st11">15</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st11">5.47 m2</tspan>
                        </text>
                        <text transform="matrix(0.9947 -0.1028 0.1028 0.9947 33.4409 221.2076)">
                            <tspan x="0" y="0" class="st3 st4 st11">11.4</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st11">3</tspan>
                        </text>
                        <text transform="matrix(0.9943 -0.1063 0.1063 0.9943 61.641 323.1331)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.1149 0.9934 -0.9934 0.1149 82.4116 251.9931)">
                            <tspan x="0" y="0" class="st3 st4 st11">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st11">0</tspan>
                        </text>
                        <text transform="matrix(9.584960e-02 0.9954 -0.9954 9.584960e-02 62.3355 257.1074)"
                            class="st8 st9 st7">06</text>
                    </g>
                    <g id="DIVISIONES_16_">
                        <line class="st12" x1="284.1" y1="298.1" x2="265.3" y2="180.2" />
                        <line class="st12" x1="87.9" y1="204.5" x2="101.8" y2="323.1" />
                        <line class="st12" x1="162.5" y1="315.7" x2="147.1" y2="197.3" />
                        <line class="st12" x1="223.4" y1="307.3" x2="206.3" y2="189.2" />
                        <line class="st12" x1="344.7" y1="287.9" x2="324.1" y2="170.4" />
                        <line class="st12" x1="404.8" y1="276.8" x2="384.1" y2="159.3" />
                    </g>
                </g>
                <g id="ISLA_B">
                    <g id="B-07_2_"  class="property__active" ng-class="lago.inmovablesClassList[6]" ng-click="lago.showPropertyData(40, '7')">
                        <polyline id="BL-07_2_" class="property pb-sprite-1"
                            points="65.4,396.8 126,390.1 186.5,382.5 207,442.7 94,481.1 73.2,419.8 65.4,396.8 			" />
                        <g>
                            <polyline class="st1" points="174.6,411.1 174.6,426.9 166.7,419 174.6,411.1 				" />
                            <polyline class="st2" points="174.6,411.1 182.5,419 174.6,426.9 174.6,411.1 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 111.8945 443.7896)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">3.02 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 182.234 406.6835)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.5</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">3</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 78.3405 425.4772)">
                            <tspan x="0" y="0" class="st3 st4 st5">11.9</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">3</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 137.0138 463.1765)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9932 -0.1167 0.1167 0.9932 114.1255 401.332)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.3</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">6</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 124.3946 425.8471)"
                            class="st8 st9 st5">07</text>
                    </g>
                    <g id="B-08_2_"  class="property__active" ng-class="lago.inmovablesClassList[7]" ng-click="lago.showPropertyData(40, '8')">
                        <polyline id="BL-08_2_" class="property pb-sprite-2"
                            points="228.6,506.3 115.5,544.6 94,481.1 207,442.7 228.6,506.3 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 138.5807 508.8117)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 203.244 468.5833)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 104.365 502.1476)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 159.0657 528.13)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 150.9883 491.2378)"
                            class="st8 st9 st5">08</text>
                    </g>
                    <g id="B-09_2_"  class="property__active" ng-class="lago.inmovablesClassList[8]" ng-click="lago.showPropertyData(40, '9')">
                        <polyline id="BL-09_2_" class="property pb-sprite-1"
                            points="250.1,569.9 137.1,608.2 115.5,544.6 228.6,506.3 250.1,569.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 159.1475 571.3759)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 224.8191 532.1558)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 125.9416 565.7155)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 180.3864 590.9556)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 172.0286 553.9744)"
                            class="st8 st9 st5">09</text>
                    </g>
                    <g id="B-10_2_"  class="property__active" ng-class="lago.inmovablesClassList[9]" ng-click="lago.showPropertyData(40, '10')">
                        <polyline id="BL-10_2_" class="property pb-sprite-2"
                            points="271.7,633.4 158.7,671.8 137.1,608.2 250.1,569.9 271.7,633.4 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 182.8093 636.1072)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 246.3918 595.7178)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 147.5115 629.2815)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 202.0743 654.8549)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 194.7429 617.7114)"
                            class="st8 st9 st5">10</text>
                    </g>
                    <g id="B-11_2_"  class="property__active" ng-class="lago.inmovablesClassList[10]" ng-click="lago.showPropertyData(40, '11')">
                        <polyline id="BL-11_2_" class="property pb-sprite-1"
                            points="293.3,697 180.3,735.3 158.7,671.8 271.7,633.4 293.3,697 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 203.3352 697.7677)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 267.9639 659.2831)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 169.0869 692.8518)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 223.4863 717.9423)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 215.0651 679.7532)"
                            class="st8 st9 st5">11</text>
                    </g>
                    <g id="B-12_2_"  class="property__active" ng-class="lago.inmovablesClassList[11]" ng-click="lago.showPropertyData(40, '12')">
                        <polyline id="BL-12_2_" class="property pb-sprite-2"
                            points="314.9,760.6 201.8,798.9 180.3,735.3 293.3,697 314.9,760.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 223.8033 761.9943)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 289.5452 722.8524)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 190.6646 756.4183)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 245.1424 781.7452)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 236.6517 744.5128)"
                            class="st8 st9 st5">12</text>
                    </g>
                    <g id="B-13_2_"  class="property__active" ng-class="lago.inmovablesClassList[12]" ng-click="lago.showPropertyData(40, '13')">
                        <polyline id="BL-13_2_" class="property pb-sprite-1"
                            points="334,817.1 221,855.4 201.8,798.9 314.9,760.6 334,817.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 247.2911 826.0731)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 309.9227 782.8837)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 211.0417 816.4466)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 264.0753 837.5115)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 258.6081 806.6144)"
                            class="st8 st9 st5">13</text>
                    </g>
                    <g id="B-14_2_"  class="property__active" ng-class="lago.inmovablesClassList[13]" ng-click="lago.showPropertyData(40, '14')">
                        <polyline id="BL-14_2_" class="property pb-sprite-2"
                            points="353.2,873.6 240.2,911.9 221,855.4 334,817.1 353.2,873.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 263.8352 879.9478)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 329.0995 839.3871)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 230.2125 872.9479)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 283.1837 893.8267)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 278.3068 862.2808)"
                            class="st8 st9 st5">14</text>
                    </g>
                    <g id="B-15_2_"  class="property__active" ng-class="lago.inmovablesClassList[14]" ng-click="lago.showPropertyData(40, '15')">
                        <polyline id="BL-15_2_" class="property pb-sprite-1"
                            points="372.4,930.1 259.4,968.4 240.2,911.9 353.2,873.6 372.4,930.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 282.3569 937.5544)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 348.277 895.8882)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 249.3962 929.4583)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 302.5684 950.9247)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 296.2061 920.7332)"
                            class="st8 st9 st5">15</text>
                    </g>
                    <g id="B-16_2_"  class="property__active" ng-class="lago.inmovablesClassList[15]" ng-click="lago.showPropertyData(40, '16')">
                        <polyline id="BL-16_2_" class="property pb-sprite-2"
                            points="391.6,986.6 278.6,1024.9 259.4,968.4 372.4,930.1 391.6,986.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 304.1209 993.5079)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 367.4559 952.3889)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 268.5703 985.9523)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 321.6659 1007.1787)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 315.3899 976.7261)"
                            class="st8 st9 st5">16</text>
                    </g>
                    <g id="B-17_2_"  class="property__active" ng-class="lago.inmovablesClassList[16]" ng-click="lago.showPropertyData(40, '17')">
                        <polyline id="BL-17_2_" class="property pb-sprite-1"
                            points="410.7,1043.1 297.7,1081.4 278.6,1024.9 391.6,986.6 410.7,1043.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 321.4153 1049.4958)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 386.6306 1008.8971)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 287.7491 1042.454)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 340.5799 1062.9257)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 333.6404 1032.7247)"
                            class="st8 st9 st5">17</text>
                    </g>
                    <g id="B-18_2_"  class="property__active" ng-class="lago.inmovablesClassList[17]" ng-click="lago.showPropertyData(40, '18')">
                        <polyline id="BL-18_2_" class="property pb-sprite-2"
                            points="429.9,1099.6 316.9,1137.9 297.7,1081.4 410.7,1043.1 429.9,1099.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 341.1226 1106.5311)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 405.8098 1065.3956)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 306.9286 1098.9719)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 360.1546 1120.5883)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 353.6307 1088.0206)"
                            class="st8 st9 st5">18</text>
                    </g>
                    <g id="B-19_2_"  class="property__active" ng-class="lago.inmovablesClassList[18]" ng-click="lago.showPropertyData(40, '19')">
                        <polyline id="BL-19_2_" class="property pb-sprite-1"
                            points="449.1,1156.1 336.1,1194.4 316.9,1137.9 429.9,1099.6 449.1,1156.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 359.3445 1162.0701)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 424.9888 1121.8951)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 326.1061 1155.47)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 379.4161 1177.3435)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 371.3951 1145.4006)"
                            class="st8 st9 st5">19</text>
                    </g>
                    <g id="B-20_2_"  class="property__active" ng-class="lago.inmovablesClassList[19]" ng-click="lago.showPropertyData(40, '20')">
                        <polyline id="BL-20_2_" class="property pb-sprite-2"
                            points="468.3,1212.6 355.3,1250.9 336.1,1194.4 449.1,1156.1 468.3,1212.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 382.523 1220.6036)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 444.1652 1178.4111)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 345.2833 1211.964)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 398.3252 1233.0487)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 393.7566 1203.1881)"
                            class="st8 st9 st5">20</text>
                    </g>
                    <g id="B-21_2_"  class="property__active" ng-class="lago.inmovablesClassList[20]" ng-click="lago.showPropertyData(40, '21')">
                        <polyline id="BL-21_2_" class="property pb-sprite-1"
                            points="487.5,1269.1 374.5,1307.4 355.3,1250.9 468.3,1212.6 487.5,1269.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 399.7992 1275.3926)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 463.3436 1234.9088)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 364.463 1268.4716)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 417.5371 1289.6455)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 412.3343 1258.2556)"
                            class="st8 st9 st5">21</text>
                    </g>
                    <g id="B-22_2_"  class="property__active" ng-class="lago.inmovablesClassList[21]" ng-click="lago.showPropertyData(40, '22')">
                        <polyline id="BL-22_2_" class="property pb-sprite-2"
                            points="506.6,1325.6 393.6,1363.9 374.5,1307.4 487.5,1269.1 506.6,1325.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 418.1513 1332.8514)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 482.5215 1291.4036)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 383.6465 1324.9738)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 436.2988 1344.9089)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 431.0044 1316.0885)"
                            class="st8 st9 st5">22</text>
                    </g>
                    <g id="B-23_2_"  class="property__active" ng-class="lago.inmovablesClassList[22]" ng-click="lago.showPropertyData(40, '23')">
                        <polyline id="BL-23_2_" class="property pb-sprite-1"
                            points="525.8,1382.1 412.8,1420.4 393.6,1363.9 506.6,1325.6 525.8,1382.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 437.7488 1389.7847)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 501.7003 1347.9238)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 402.8215 1381.4706)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 455.9287 1402.7528)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 450.3352 1372.9557)"
                            class="st8 st9 st5">23</text>
                    </g>
                    <g id="B-24_2_" class="property__active" ng-class="lago.inmovablesClassList[23]" ng-click="lago.showPropertyData(40, '24')">
                        <polyline id="BL-24_2_" class="property pb-sprite-2"
                            points="545,1438.6 432,1476.9 412.8,1420.4 525.8,1382.1 545,1438.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 456.2444 1445.5856)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 520.8799 1404.4191)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 421.9937 1437.9849)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 475.1531 1459.3999)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 467.158 1429.5859)"
                            class="st8 st9 st5">24</text>
                    </g>
                    <g id="B-25_2_"  class="property__active" ng-class="lago.inmovablesClassList[24]" ng-click="lago.showPropertyData(40, '25')">
                        <polyline id="BL-25_2_" class="property pb-sprite-1"
                            points="564.2,1495.1 451.2,1533.4 432,1476.9 545,1438.6 564.2,1495.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 475.6038 1499.6982)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 540.0556 1460.9177)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 441.1748 1494.4846)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 493.7526 1514.1965)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 489.2476 1482.6049)"
                            class="st8 st9 st5">25</text>
                    </g>
                    <g id="B-26_2_"  class="property__active" ng-class="lago.inmovablesClassList[25]" ng-click="lago.showPropertyData(40, '26')">
                        <polyline id="BL-26_2_" class="property pb-sprite-2"
                            points="583.3,1551.6 470.3,1589.9 451.2,1533.4 564.2,1495.1 583.3,1551.6 			" />
                        <g>
                            <polyline class="st1" points="552,1525.5 552,1541.4 544.1,1533.4 552,1525.5 				" />
                            <polyline class="st2" points="552,1525.5 559.9,1533.4 552,1541.4 552,1525.5 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 492.9922 1556.9935)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 559.233 1517.4261)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 460.3581 1550.986)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 513.3121 1571.8138)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 507.609 1539.8804)"
                            class="st8 st9 st5">26</text>
                    </g>
                    <g id="DIVISIONES_13_">
                        <line class="st12" x1="207" y1="442.7" x2="94" y2="481.1" />
                        <line class="st12" x1="228.6" y1="506.3" x2="115.5" y2="544.6" />
                        <line class="st12" x1="250.1" y1="569.9" x2="137.1" y2="608.2" />
                        <line class="st12" x1="271.7" y1="633.4" x2="158.7" y2="671.8" />
                        <line class="st12" x1="293.3" y1="697" x2="180.3" y2="735.3" />
                        <line class="st12" x1="314.9" y1="760.6" x2="201.8" y2="798.9" />
                        <line class="st12" x1="334" y1="817.1" x2="221" y2="855.4" />
                        <line class="st12" x1="353.2" y1="873.6" x2="240.2" y2="911.9" />
                        <line class="st12" x1="372.4" y1="930.1" x2="259.4" y2="968.4" />
                        <line class="st12" x1="391.6" y1="986.6" x2="278.6" y2="1024.9" />
                        <line class="st12" x1="410.7" y1="1043.1" x2="297.7" y2="1081.4" />
                        <line class="st12" x1="429.9" y1="1099.6" x2="316.9" y2="1137.9" />
                        <line class="st12" x1="449.1" y1="1156.1" x2="336.1" y2="1194.4" />
                        <line class="st12" x1="468.3" y1="1212.6" x2="355.3" y2="1250.9" />
                        <line class="st12" x1="487.5" y1="1269.1" x2="374.5" y2="1307.4" />
                        <line class="st12" x1="506.6" y1="1325.6" x2="393.6" y2="1363.9" />
                        <line class="st12" x1="525.8" y1="1382.1" x2="412.8" y2="1420.4" />
                        <line class="st12" x1="545" y1="1438.6" x2="432" y2="1476.9" />
                        <line class="st12" x1="564.2" y1="1495.1" x2="451.2" y2="1533.4" />
                    </g>
                </g>
                <g id="ISLA_C">
                    <g id="C-27_2_" class="property__active" ng-class="lago.inmovablesClassList[26]" ng-click="lago.showPropertyData(40, '27')">
                        <polyline id="CL-27_2_" class="property pb-sprite-2"
                            points="630.1,1473.4 743.1,1435.1 762.2,1491.6 649.2,1529.9 630.1,1473.4 			" />
                        <g>
                            <polyline class="st1" points="660.5,1487.2 660.5,1503 652.6,1495.1 660.5,1487.2 				" />
                            <polyline class="st2" points="660.5,1487.2 668.4,1495.1 660.5,1503 660.5,1487.2 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 676.8135 1497.9124)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 677.6237 1468.7911)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 639.4335 1490.8944)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 739.3362 1456.9888)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 689.0641 1480.8491)"
                            class="st8 st9 st5">27</text>
                    </g>
                    <g id="C-28_2_" class="property__active" ng-class="lago.inmovablesClassList[27]" ng-click="lago.showPropertyData(40, '28')">
                        <polyline id="CL-28_2_" class="property pb-sprite-1"
                            points="610.9,1416.9 723.9,1378.6 743.1,1435.1 630.1,1473.4 610.9,1416.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 654.5328 1441.2058)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 658.3372 1411.9877)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 620.2544 1434.3887)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 720.1578 1400.4757)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 668.0278 1423.7751)"
                            class="st8 st9 st5">28</text>
                    </g>
                    <g id="C-29_2_" class="property__active" ng-class="lago.inmovablesClassList[28]" ng-click="lago.showPropertyData(40, '29')">
                        <polyline id="CL-29_2_" class="property pb-sprite-2"
                            points="591.7,1360.4 704.7,1322.1 723.9,1378.6 610.9,1416.9 591.7,1360.4 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 638.7977 1383.1437)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 639.299 1355.8859)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 601.0752 1377.881)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 700.9789 1343.9812)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 650.5786 1367.6726)"
                            class="st8 st9 st5">29</text>
                    </g>
                    <g id="C-30_2_" class="property__active" ng-class="lago.inmovablesClassList[29]" ng-click="lago.showPropertyData(40, '30')"> 
                        <polyline id="CL-30_2_" class="property pb-sprite-1"
                            points="572.5,1303.9 685.5,1265.5 704.7,1322.1 591.7,1360.4 572.5,1303.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 617.1503 1326.5702)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 619.6908 1298.1262)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 581.9014 1321.3817)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 681.7999 1287.4816)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 629.3709 1310.4967)"
                            class="st8 st9 st5">30</text>
                    </g>
                    <g id="C-31_2_" class="property__active" ng-class="lago.inmovablesClassList[30]" ng-click="lago.showPropertyData(40, '31')">
                        <polyline id="CL-31_2_" class="property pb-sprite-2"
                            points="666.4,1209 685.5,1265.5 572.5,1303.9 553.3,1247.4 666.4,1209 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 598.2371 1274.9635)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 600.946 1242.8943)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 562.7238 1264.8909)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 662.6229 1230.97)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 608.9878 1258.1793)"
                            class="st8 st9 st5">31</text>
                    </g>
                    <g id="C-32_2_" class="property__active" ng-class="lago.inmovablesClassList[31]" ng-click="lago.showPropertyData(40, '32')">
                        <polyline id="CL-32_2_" class="property pb-sprite-1"
                            points="647.2,1152.5 666.4,1209 553.3,1247.4 534.2,1190.9 647.2,1152.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 574.6898 1216.4402)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 543.5438 1208.3762)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 643.4467 1174.4695)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 581.4667 1185.5076)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 589.2346 1200.2935)"
                            class="st8 st9 st5">32</text>
                    </g>
                    <g id="C-33_2_"  class="property__active" ng-class="lago.inmovablesClassList[32]" ng-click="lago.showPropertyData(40, '33')">
                        <polyline id="CL-33_2_" class="property pb-sprite-2"
                            points="628,1096 647.2,1152.5 534.2,1190.9 515,1134.4 628,1096 			" />
                        <g>
                            <polyline class="st1" points="548.4,1149 548.4,1164.8 540.5,1156.9 548.4,1149 				" />
                            <polyline class="st2" points="548.4,1149 556.3,1156.9 548.4,1164.8 548.4,1149 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 562.9078 1157.8472)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 524.3638 1151.8739)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 624.2679 1117.9708)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 562.3443 1129.1663)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 574.561 1140.4609)"
                            class="st8 st9 st5">33</text>
                    </g>
                    <g id="C-56_2_"  class="property__active" ng-class="lago.inmovablesClassList[55]" ng-click="lago.showPropertyData(40, '56')">
                        <polyline id="CL-56_2_" class="property pb-sprite-1"
                            points="751.6,1054.1 751.6,1054.1 770.8,1110.6 647.2,1152.5 628,1096 751.6,1054.1 			" />
                        <g>
                            <polyline class="st1" points="738.8,1082.4 738.8,1098.2 730.9,1090.3 738.8,1082.4 				" />
                            <polyline class="st2" points="738.8,1082.4 746.7,1090.3 738.8,1098.2 738.8,1082.4 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 675.8705 1121.547)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 637.4201 1113.4974)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 745.7508 1076.7289)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 680.6465 1089.0193)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 690.594 1102.6207)"
                            class="st8 st9 st5">56</text>
                    </g>
                    <g id="C-57_2_"  class="property__active" ng-class="lago.inmovablesClassList[56]" ng-click="lago.showPropertyData(40, '57')">
                        <polyline id="CL-57_2_" class="property pb-sprite-2"
                            points="647.2,1152.5 770.8,1110.6 790,1167.1 666.4,1209 647.2,1152.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 697.8539 1177.1499)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 656.5966 1170.0123)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 764.9302 1133.2283)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 699.7711 1145.3486)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 710.8934 1159.9008)"
                            class="st8 st9 st5">57</text>
                    </g>
                    <g id="C-58_2_"  class="property__active" ng-class="lago.inmovablesClassList[57]" ng-click="lago.showPropertyData(40, '58')">
                        <polyline id="CL-58_2_" class="property pb-sprite-1" points="666.4,1209 666.4,1209 790,1167.1 809.1,1223.6 685.5,1265.5 685.5,1265.5 
				666.4,1209 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 715.0281 1233.5961)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 719.2498 1202.7396)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 675.7736 1226.5044)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 784.1064 1189.7299)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 731.1008 1215.2351)"
                            class="st8 st9 st5">58</text>
                    </g>
                    <g id="C-59_2_"  class="property__active" ng-class="lago.inmovablesClassList[58]" ng-click="lago.showPropertyData(40, '59')">
                        <polyline id="CL-59_2_" class="property pb-sprite-2" points="685.5,1265.5 685.5,1265.5 809.1,1223.6 828.3,1280.1 704.7,1322.1 685.5,1265.5 
							" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 737.1149 1289.4187)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 737.993 1257.9733)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 694.9529 1283.0017)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 803.2839 1246.2433)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 747.5111 1272.0253)"
                            class="st8 st9 st5">59</text>
                    </g>
                    <g id="C-60_2_"  class="property__active" ng-class="lago.inmovablesClassList[59]" ng-click="lago.showPropertyData(40, '60')">
                        <polyline id="CL-60_2_" class="property pb-sprite-1" points="704.7,1322.1 704.7,1322.1 828.3,1280.1 847.5,1336.6 723.9,1378.6 723.9,1378.6 
				704.7,1322.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 756.452 1345.9163)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 757.5969 1315.725)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 714.132 1339.5137)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 822.465 1302.7382)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 767.9158 1328.2078)"
                            class="st8 st9 st5">60</text>
                    </g>
                    <g id="C-61_2_" class="property__active" ng-class="lago.inmovablesClassList[60]" ng-click="lago.showPropertyData(40, '61')">
                        <polyline id="CL-61_2_" class="property pb-sprite-2" points="723.9,1378.6 723.9,1378.6 847.5,1336.6 866.7,1393.1 743.1,1435.1 723.9,1378.6 
							" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 773.1615 1402.6342)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 776.6355 1371.8308)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 733.3087 1396.011)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 841.6387 1359.2435)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 789.2405 1386.231)"
                            class="st8 st9 st5">61</text>
                    </g>
                    <g id="C-62_2_"  class="property__active" ng-class="lago.inmovablesClassList[61]" ng-click="lago.showPropertyData(40, '62')">
                        <polyline id="CL-62_2_" class="property pb-sprite-1" points="743.1,1435.1 743.1,1435.1 866.7,1393.1 885.8,1449.6 762.2,1491.6 762.2,1491.6 
				743.1,1435.1 			" />
                        <g>
                            <polyline class="st1" points="852.9,1422.4 852.9,1438.2 845,1430.3 852.9,1422.4 				" />
                            <polyline class="st2" points="852.9,1422.4 860.8,1430.3 852.9,1438.2 852.9,1422.4 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 794.9931 1459.8978)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 795.9228 1428.635)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 752.4899 1452.5139)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 860.8178 1415.7493)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 806.9943 1442.5142)"
                            class="st8 st9 st5">62</text>
                    </g>
                    <g id="DIVISIONES_12_">
                        <line class="st12" x1="534.2" y1="1190.9" x2="770.8" y2="1110.6" />
                        <line class="st12" x1="553.3" y1="1247.4" x2="666.4" y2="1209" />
                        <line class="st12" x1="572.5" y1="1303.9" x2="685.5" y2="1265.5" />
                        <line class="st12" x1="591.7" y1="1360.4" x2="704.7" y2="1322.1" />
                        <line class="st12" x1="610.9" y1="1416.9" x2="723.9" y2="1378.6" />
                        <line class="st12" x1="630.1" y1="1473.4" x2="743.1" y2="1435.1" />
                        <line class="st12" x1="666.4" y1="1209" x2="790" y2="1167.1" />
                        <line class="st12" x1="685.5" y1="1265.5" x2="809.1" y2="1223.6" />
                        <line class="st12" x1="704.7" y1="1322.1" x2="828.3" y2="1280.1" />
                        <line class="st12" x1="723.9" y1="1378.6" x2="847.5" y2="1336.6" />
                        <line class="st12" x1="743.1" y1="1435.1" x2="866.7" y2="1393.1" />
                        <line class="st12" x1="762.2" y1="1491.6" x2="628" y2="1096" />
                    </g>
                </g>
                <g id="ISLA_D">
                    <g id="D-34_2_" class="property__active" ng-class="lago.inmovablesClassList[33]" ng-click="lago.showPropertyData(40, '34')">
                        <polyline id="DL-34_2_" class="property pb-sprite-2" points="574.2,937.6 593.4,994.2 595.8,1001.2 482.8,1039.6 480.4,1032.5 461.2,976 
				574.2,937.6 			" />
                        <g>
                            <polyline class="st1" points="494.9,992.7 494.9,1008.5 487,1000.6 494.9,992.7 				" />
                            <polyline class="st2" points="494.9,992.7 502.8,1000.6 494.9,1008.5 494.9,992.7 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 510.6053 1003.0323)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 570.1819 963.6132)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 472.325 996.8285)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 525.8376 1021.614)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 520.6901 983.4995)"
                            class="st8 st9 st5">34</text>
                    </g>
                    <g id="D-35_2_" class="property__active" ng-class="lago.inmovablesClassList[34]" ng-click="lago.showPropertyData(40, '35')">
                        <polyline id="DL-35_2_"class="property pb-sprite-1"
                            points="442.1,919.5 555.1,881.1 574.2,937.6 461.2,976 442.1,919.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 486.5421 940.7731)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 549.8051 903.59)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 451.9517 936.7989)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 504.4231 958.5222)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 499.0839 923.7111)"
                            class="st8 st9 st5">35</text>
                    </g>
                    <g id="D-36_2_"   class="property__active" ng-class="lago.inmovablesClassList[35]" ng-click="lago.showPropertyData(40, '36')">
                        <polyline id="DL-36_2_" class="property pb-sprite-2"
                            points="422.9,863 535.9,824.6 555.1,881.1 442.1,919.5 422.9,863 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 467.9965 885.251)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 530.626 847.0781)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 432.7726 880.2963)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 485.4156 902.511)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 478.9185 868.3998)"
                            class="st8 st9 st5">36</text>
                    </g>
                    <g id="D-37_2_"  class="property__active" ng-class="lago.inmovablesClassList[36]" ng-click="lago.showPropertyData(40, '37')">
                        <polyline id="DL-37_2_"class="property pb-sprite-1"
                            points="403.7,806.5 516.7,768.1 535.9,824.6 422.9,863 403.7,806.5 			" />
                        <text transform="matrix(0.9415 -0.3371 0.3371 0.9415 447.9113 831.3065)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 511.4463 790.5736)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 413.5981 823.79)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 466.0606 845.507)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 461.5857 814.2235)"
                            class="st8 st9 st5">37</text>
                    </g>
                    <g id="D-38_2_"  class="property__active" ng-class="lago.inmovablesClassList[37]" ng-click="lago.showPropertyData(40, '38')">
                        <polyline id="DL-38_2_" class="property pb-sprite-2" points="384.5,750 497.5,711.6 509.5,746.9 512,754.3 514.4,761.4 516.7,768.1 403.7,806.5 
				384.5,750 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 428.7935 772.8657)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 492.2707 734.0718)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 394.4184 767.2948)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 446.9332 789.1508)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 442.2622 755.9731)"
                            class="st8 st9 st5">38</text>
                    </g>
                    <g id="D-39_2_"  class="property__active" ng-class="lago.inmovablesClassList[38]" ng-click="lago.showPropertyData(40, '39')">
                        <polyline id="DL-39_2_"class="property pb-sprite-1"
                            points="365.3,693.5 478.3,655.1 497.5,711.6 384.5,750 365.3,693.5 			" />
                        <text transform="matrix(0.9494 -0.314 0.314 0.9494 411.381 717.1153)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 473.0932 677.58)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 375.2373 710.7815)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 428.0344 733.473)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 424.0879 700.5722)"
                            class="st8 st9 st5">39</text>
                    </g>
                    <g id="D-40_2_"  class="property__active" ng-class="lago.inmovablesClassList[39]" ng-click="lago.showPropertyData(40, '40')">
                        <polyline id="DL-40_2_" class="property pb-sprite-2" points="478.3,655.1 365.3,693.5 346.2,637 459.2,598.6 466.4,619.8 473.7,641.3 
				478.3,655.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 393.1057 660.2)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 453.9126 621.0665)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 356.0646 654.2839)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 408.7617 676.6844)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 405.0888 643.733)"
                            class="st8 st9 st5">40</text>
                    </g>
                    <g id="D-41_2_"  class="property__active" ng-class="lago.inmovablesClassList[40]" ng-click="lago.showPropertyData(40, '41')">
                        <polyline id="DL-41_2_"class="property pb-sprite-1" points="440,542.1 442.4,549.2 452.1,577.7 459.2,598.6 346.2,637 327,580.5 440,542.1 			
				" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 373.7045 601.7373)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 434.7414 564.5705)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 336.8826 597.7771)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 389.2279 619.143)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 385.5203 587.3009)"
                            class="st8 st9 st5">41</text>
                    </g>
                    <g id="D-42_2_" class="property__active" ng-class="lago.inmovablesClassList[41]" ng-click="lago.showPropertyData(40, '42')">
                        <polyline id="DL-42_2_" class="property pb-sprite-2"
                            points="307.8,524 420.8,485.6 430.5,514.2 440,542.1 327,580.5 307.8,524 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 352.7042 546.9357)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 415.5593 508.0648)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 317.7005 541.2745)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 370.3083 563.4083)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 366.007 531.7844)"
                            class="st8 st9 st5">42</text>
                    </g>
                    <g id="D-43_2_" class="property__active" ng-class="lago.inmovablesClassList[42]" ng-click="lago.showPropertyData(40, '43')">
                        <polyline id="DL-43_2_"class="property pb-sprite-1"
                            points="401.6,429.1 408.9,450.6 420.8,485.6 307.8,524 288.6,467.5 401.6,429.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 335.1607 489.5588)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 396.3824 451.5655)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 298.5291 484.7733)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 350.8727 506.1295)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 348.8033 471.3823)"
                            class="st8 st9 st5">43</text>
                    </g>
                    <g id="D-44_2_" class="property__active" ng-class="lago.inmovablesClassList[43]" ng-click="lago.showPropertyData(40, '44')">
                        <polyline id="DL-44_2_" class="property pb-sprite-2" points="382.5,372.6 401.5,428.6 401.6,429.1 288.6,467.5 288.5,467 269.4,411 382.5,372.6 
							" />
                        <g>
                            <polyline class="st1" points="301.3,422.5 301.3,438.3 293.3,430.4 301.3,422.5 				" />
                            <polyline class="st2" points="301.3,422.5 309.2,430.4 301.3,438.3 301.3,422.5 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 315.6124 435.2411)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 377.2063 395.0608)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 279.3475 428.2705)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 331.8108 449.979)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 327.7548 416.6811)"
                            class="st8 st9 st5">44</text>
                    </g>
                    <g id="D-45_2_" class="property__active" ng-class="lago.inmovablesClassList[44]" ng-click="lago.showPropertyData(40, '45')">
                        <polyline id="DL-45_2_" class="property pb-sprite-2"
                            points="527.9,395.1 404.3,437.1 375.7,352.8 440.5,340.6 505,327.4 527.9,395.1 			" />
                        <g>
                            <polyline class="st1" points="490.1,357.6 490.1,373.4 482.2,365.5 490.1,357.6 				" />
                            <polyline class="st2" points="490.1,357.6 498,365.5 490.1,373.4 490.1,357.6 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 430.5317 396.3939)">
                            <tspan x="0" y="0" class="st3 st4 st5">18</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">7.40 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 502.8177 355.0494)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.5</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">8</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 452.7607 417.6179)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 390.7181 380.8095)">
                            <tspan x="0" y="0" class="st3 st4 st5">11.9</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">3</tspan>
                        </text>
                        <text transform="matrix(0.9869 -0.1616 0.1616 0.9869 429.6103 354.5146)">
                            <tspan x="0" y="0" class="st3 st4 st7">17.6</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st7">5</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 441.9789 377.3021)"
                            class="st8 st9 st5">45</text>
                    </g>
                    <g id="D-46_2_" class="property__active" ng-class="lago.inmovablesClassList[45]" ng-click="lago.showPropertyData(40, '46')">
                        <polyline id="DL-46_2_"class="property pb-sprite-1" points="527.9,395.1 549.5,458.7 425.9,500.6 423.8,494.4 414.1,465.8 404.3,437.1 
				527.9,395.1 			" />
                        <text transform="matrix(0.9455 -0.3256 0.3256 0.9455 457.2855 462.2599)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">7.50 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 525.0953 420.6853)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 474.5071 481.6902)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 416.7328 457.4647)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 468.5957 445.054)"
                            class="st8 st9 st5">46</text>
                    </g>
                    <g id="D-47_2_" class="property__active" ng-class="lago.inmovablesClassList[46]" ng-click="lago.showPropertyData(40, '47')">
                        <polyline id="DL-47_2_" class="property pb-sprite-2"
                            points="425.9,500.6 549.5,458.7 571.1,522.3 447.5,564.2 425.9,500.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 478.3966 526.8588)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">7.50 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 546.6721 484.252)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 495.4116 543.2906)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 438.3051 521.0289)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 490.0158 509.2823)"
                            class="st8 st9 st5">47</text>
                    </g>
                    <g id="D-48_2_" class="property__active" ng-class="lago.inmovablesClassList[47]" ng-click="lago.showPropertyData(40, '48')">
                        <polyline id="DL-48_2_"class="property pb-sprite-1" points="452.5,578.9 447.5,564.2 571.1,522.3 592.7,585.8 469.1,627.8 466.9,621.5 
				459.6,600 452.5,578.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 499.6769 590.9796)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">7.50 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 568.2432 547.8156)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 516.8866 606.5444)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 459.8835 584.6002)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 511.4473 571.6199)"
                            class="st8 st9 st5">48</text>
                    </g>
                    <g id="D-49_2_" class="property__active" ng-class="lago.inmovablesClassList[48]" ng-click="lago.showPropertyData(40, '49')">
                        <polyline id="DL-49_2_" class="property pb-sprite-2"
                            points="469.1,627.8 592.7,585.8 614.2,649.4 490.6,691.3 469.1,627.8 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 521.4525 653.9853)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">7.50 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 589.82 611.3793)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 538.86 671.2873)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 481.457 648.1619)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 532.8716 635.6116)"
                            class="st8 st9 st5">49</text>
                    </g>
                    <g id="D-50_2_" class="property__active" ng-class="lago.inmovablesClassList[49]" ng-click="lago.showPropertyData(40, '50')">
                        <polyline id="DL-50_1_"class="property pb-sprite-1"
                            points="490.6,691.3 614.2,649.4 633.4,705.9 509.8,747.8 490.6,691.3 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 540.7855 714.8556)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 610.1986 671.4122)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 558.6559 729.605)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 501.8344 708.1943)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 552.8013 695.9721)"
                            class="st8 st9 st5">50</text>
                    </g>
                    <g id="D-51_2_" class="property__active" ng-class="lago.inmovablesClassList[50]" ng-click="lago.showPropertyData(40, '51')">
                        <polyline id="DL-51_2_" class="property pb-sprite-2"
                            points="509.8,747.8 633.4,705.9 652.6,762.4 529,804.3 509.8,747.8 			" />
                        <g>
                            <polyline class="st1" points="618.9,731.9 618.9,747.7 610.9,739.8 618.9,731.9 				" />
                            <polyline class="st2" points="618.9,731.9 626.8,739.8 618.9,747.7 618.9,731.9 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 561.3522 770.4123)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 629.3746 727.918)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 577.8107 786.0375)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 521.0088 764.6923)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 574.5031 752.5607)"
                            class="st8 st9 st5">51</text>
                    </g>
                    <g id="D-52_2_" class="property__active" ng-class="lago.inmovablesClassList[51]" ng-click="lago.showPropertyData(40, '52')">
                        <polyline id="DL-52_2_"class="property pb-sprite-1"
                            points="529,804.3 652.6,762.4 671.8,818.9 548.2,860.8 529,804.3 			" />
                        <g>
                            <polyline class="st1" points="637.7,786.6 637.7,802.4 629.8,794.5 637.7,786.6 				" />
                            <polyline class="st2" points="637.7,786.6 645.6,794.5 637.7,802.4 637.7,786.6 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 580.2401 826.4763)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 648.5507 784.4164)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 596.483 841.0673)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 540.1891 821.1987)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 591.7762 807.8231)"
                            class="st8 st9 st5">52</text>
                    </g>
                    <g id="D-53_2_" class="property__active" ng-class="lago.inmovablesClassList[52]" ng-click="lago.showPropertyData(40, '53')">
                        <polyline id="DL-53_2_" class="property pb-sprite-2"
                            points="548.2,860.8 671.8,818.9 690.9,875.4 567.3,917.4 548.2,860.8 			" />
                        <g>
                            <polyline class="st1" points="658,844.8 658,860.6 650.1,852.7 658,844.8 				" />
                            <polyline class="st2" points="658,844.8 665.9,852.7 658,860.6 658,844.8 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 600.6159 883.2389)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 667.7319 840.9256)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 615.4789 897.0226)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 559.3672 877.7016)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 613.2775 864.8693)"
                            class="st8 st9 st5">53</text>
                    </g>
                    <g id="D-54_2_" class="property__active" ng-class="lago.inmovablesClassList[53]" ng-click="lago.showPropertyData(40, '54')">
                        <polyline id="DL-54_2_"class="property pb-sprite-1"
                            points="567.3,917.4 690.9,875.4 710.1,931.9 586.5,973.9 567.5,917.9 567.3,917.4 			" />
                        <g>
                            <polyline class="st1" points="677.3,902.1 677.3,917.9 669.4,910 677.3,902.1 				" />
                            <polyline class="st2" points="677.3,902.1 685.2,910 677.3,917.9 677.3,902.1 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 618.7156 940.0708)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 686.9106 897.4243)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 634.7253 953.7334)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 578.5459 934.2003)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 630.8317 920.9774)"
                            class="st8 st9 st5">54</text>
                    </g>
                    <g id="D-55_2_" class="property__active" ng-class="lago.inmovablesClassList[54]" ng-click="lago.showPropertyData(40, '55')">
                        <polyline id="DL-55_2_" class="property pb-sprite-2"
                            points="586.5,973.9 710.1,931.9 729.3,988.4 605.7,1030.4 586.5,973.9 			" />
                        <g>
                            <polyline class="st1" points="695.8,958 695.8,973.9 687.9,966 695.8,958 				" />
                            <polyline class="st2" points="695.8,958 703.7,966 695.8,973.9 695.8,958 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 637.3141 992.3697)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 654.2632 1011.2858)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 706.0904 953.938)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 597.7231 990.7097)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 648.8616 974.9574)"
                            class="st8 st9 st5">55</text>
                    </g>
                    <g id="DIVISIONES_7_">
                        <line class="st12" x1="288.6" y1="467.5" x2="401.6" y2="429.1" />
                        <line class="st12" x1="307.8" y1="524" x2="420.8" y2="485.6" />
                        <line class="st12" x1="327" y1="580.5" x2="440" y2="542.1" />
                        <line class="st12" x1="346.2" y1="637" x2="459.2" y2="598.6" />
                        <line class="st12" x1="365.3" y1="693.5" x2="478.3" y2="655.1" />
                        <line class="st12" x1="384.5" y1="750" x2="497.5" y2="711.6" />
                        <line class="st12" x1="403.7" y1="806.5" x2="516.7" y2="768.1" />
                        <line class="st12" x1="422.9" y1="863" x2="535.9" y2="824.6" />
                        <line class="st12" x1="442.1" y1="919.5" x2="555.1" y2="881.1" />
                        <line class="st12" x1="461.2" y1="976" x2="574.2" y2="937.6" />
                        <line class="st12" x1="605.7" y1="1030.4" x2="375.7" y2="352.8" />
                        <line class="st12" x1="490.6" y1="691.3" x2="614.2" y2="649.4" />
                        <line class="st12" x1="447.5" y1="564.2" x2="571.1" y2="522.3" />
                        <line class="st12" x1="425.9" y1="500.6" x2="549.5" y2="458.7" />
                        <line class="st12" x1="404.3" y1="437.1" x2="527.9" y2="395.1" />
                        <line class="st12" x1="469.1" y1="627.8" x2="592.7" y2="585.8" />
                        <line class="st12" x1="509.8" y1="747.8" x2="633.4" y2="705.9" />
                        <line class="st12" x1="529" y1="804.3" x2="652.6" y2="762.4" />
                        <line class="st12" x1="548.2" y1="860.8" x2="671.8" y2="818.9" />
                        <line class="st12" x1="567.3" y1="917.4" x2="690.9" y2="875.4" />
                        <line class="st12" x1="586.5" y1="973.9" x2="710.1" y2="931.9" />
                        <line class="st12" x1="269.4" y1="411" x2="382.5" y2="372.6" />
                        <line class="st12" x1="482.4" y1="1039.6" x2="595.4" y2="1001.2" />
                    </g>
                </g>
                <g id="ISLA_E">
                    <g id="E-63_2_"  class="property__active" ng-class="lago.inmovablesClassList[62]" ng-click="lago.showPropertyData(40, '63')">
                        <polyline id="EL-63_2_" class="property pb-sprite-2" points="1045.7,1333.5 1056.3,1329.9 1075.5,1386.4 1064.9,1390 951.9,1428.4 932.7,1371.9 
				1045.7,1333.5 			" />
                        <g>
                            <polyline class="st1" points="966.4,1384.6 966.4,1400.4 958.4,1392.5 966.4,1384.6 				" />
                            <polyline class="st2" points="966.4,1384.6 974.3,1392.5 966.4,1400.4 966.4,1384.6 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 981.5042 1397.9215)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 944.1162 1388.6443)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1052.1792 1351.9561)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 985.1984 1364.3755)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 990.2669 1380.6825)"
                            class="st8 st9 st5">63</text>
                    </g>
                    <g id="E-64_2_"  class="property__active" ng-class="lago.inmovablesClassList[63]" ng-click="lago.showPropertyData(40, '64')">
                        <polyline id="EL-64_2_"class="property pb-sprite-1" points="1026.5,1277 1037.1,1273.4 1056.3,1329.9 1045.7,1333.5 932.7,1371.9 913.5,1315.4 
				1026.5,1277 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 960.5717 1341.0525)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 924.9381 1332.1383)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1033.0001 1295.4596)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 966.2469 1308.5391)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 971.3284 1325.129)"
                            class="st8 st9 st5">64</text>
                    </g>
                    <g id="E-65_2_" class="property__active" ng-class="lago.inmovablesClassList[64]" ng-click="lago.showPropertyData(40, '65')">
                        <polyline id="EL-65_2_" class="property pb-sprite-2" points="1007.4,1220.5 1018,1216.9 1037.1,1273.4 1026.5,1277 913.5,1315.4 894.4,1258.9 
				1007.4,1220.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 941.8364 1284.3379)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 905.765 1275.6409)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1013.8191 1238.9556)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 946.9861 1251.7888)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 952.7085 1269.902)"
                            class="st8 st9 st5">65</text>
                    </g>
                    <g id="E-66_2_" class="property__active" ng-class="lago.inmovablesClassList[65]" ng-click="lago.showPropertyData(40, '66')">
                        <polyline id="EL-66_2_"class="property pb-sprite-1" points="988.2,1164 998.8,1160.4 1018,1216.9 1007.4,1220.5 894.4,1258.9 875.2,1202.4 
				988.2,1164 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 921.5976 1229.4073)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 886.5794 1219.1404)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 994.6415 1182.4452)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 927.8704 1195.4823)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 933.2121 1210.514)"
                            class="st8 st9 st5">66</text>
                    </g>
                    <g id="E-67_2_" class="property__active" ng-class="lago.inmovablesClassList[66]" ng-click="lago.showPropertyData(40, '67')">
                        <polyline id="EL-67_2_" class="property pb-sprite-2" points="969,1107.5 979.6,1103.9 998.8,1160.4 988.2,1164 875.2,1202.4 856,1145.8 
				969,1107.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 904.7903 1175.2711)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 867.4058 1162.637)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 975.4678 1125.9583)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 908.6358 1138.7974)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 915.835 1155.1327)"
                            class="st8 st9 st5">67</text>
                    </g>
                    <g id="E-68_2_" class="property__active" ng-class="lago.inmovablesClassList[67]" ng-click="lago.showPropertyData(40, '68')">
                        <polyline id="EL-68_2_"class="property pb-sprite-1" points="949.8,1051 960.4,1047.4 979.6,1103.9 969,1107.5 856,1145.8 836.8,1089.3 
				949.8,1051 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 885.6144 1118.7705)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 848.231 1106.1349)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 956.286 1069.4534)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 889.8245 1083.3889)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 899.0872 1098.9895)"
                            class="st8 st9 st5">68</text>
                    </g>
                    <g id="E-69_2_" class="property__active" ng-class="lago.inmovablesClassList[68]" ng-click="lago.showPropertyData(40, '69')">
                        <polyline id="EL-69_2_" class="property pb-sprite-2" points="930.3,993.4 940.9,989.8 960.4,1047.4 949.8,1051 836.8,1089.3 817.3,1031.8 
				930.3,993.4 			" />
                        <g>
                            <polyline class="st1" points="851.2,1047.7 851.2,1063.5 843.3,1055.6 851.2,1047.7 				" />
                            <polyline class="st2" points="851.2,1047.7 859.1,1055.6 851.2,1063.5 851.2,1047.7 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 866.81 1056.6232)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">2.62 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 828.8695 1049.1022)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.1</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">5</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 936.9374 1012.4287)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.1</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">5</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 870.02 1025.0247)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 878.8708 1038.1252)"
                            class="st8 st9 st5">69</text>
                    </g>
                    <g id="E-82" class="property__active" ng-class="lago.inmovablesClassList[81]" ng-click="lago.showPropertyData(40, '82')">
                        <polyline id="EL-82_4_"class="property pb-sprite-1" points="940.9,989.8 949.4,987 1053.9,951.5 1082.1,941.9 1101.7,999.4 1073.4,1009 
				968.9,1044.5 960.4,1047.4 940.9,989.8 			" />
                        <g>
                            <polyline class="st1" points="1068.6,970.5 1068.6,986.3 1060.7,978.4 1068.6,970.5 				" />
                            <polyline class="st2" points="1068.6,970.5 1076.5,978.4 1068.6,986.3 1068.6,970.5 				" />
                        </g>
                        <text transform="matrix(0.9478 -0.319 0.319 0.9478 1003.681 1012.3726)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">3.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 950.8678 1007.7033)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.1</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">5</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1002.444 980.0721)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1076.5619 965.038)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.1</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">5</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1014.277 995.1331)"
                            class="st8 st9 st5">82</text>
                    </g>
                    <g id="E-83_2_" class="property__active" ng-class="lago.inmovablesClassList[82]" ng-click="lago.showPropertyData(40, '83')">
                        <polyline id="EL-83_2_" class="property pb-sprite-2" points="960.4,1047.4 1073.4,1009 1101.7,999.4 1120.9,1055.9 1092.6,1065.5 979.6,1103.9 
				960.4,1047.4 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1021.5731 1071.4009)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 970.2277 1064.7252)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1022.2527 1038.4349)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1095.9227 1022.0626)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1034.5588 1052.8796)"
                            class="st8 st9 st5">83</text>
                    </g>
                    <g id="E-84_2_" class="property__active" ng-class="lago.inmovablesClassList[83]" ng-click="lago.showPropertyData(40, '84')">
                        <polyline id="EL-84_2_"class="property pb-sprite-1" points="979.6,1103.9 1092.6,1065.5 1120.9,1055.9 1140,1112.5 1111.8,1122 998.8,1160.4 
				979.6,1103.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1040.3529 1127.8768)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 989.4067 1121.2217)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1041.0619 1093.8555)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1115.1033 1078.5605)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1052.5977 1108.9958)"
                            class="st8 st9 st5">84</text>
                    </g>
                    <g id="E-85_2_" class="property__active" ng-class="lago.inmovablesClassList[84]" ng-click="lago.showPropertyData(40, '85')">
                        <polyline id="EL-85_2_" class="property pb-sprite-2" points="998.8,1160.4 1111.8,1122 1140,1112.5 1159.2,1169 1131,1178.5 1018,1216.9 
				998.8,1160.4 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1058.7351 1183.0563)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1008.5804 1177.7344)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1060.3002 1150.5258)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1134.2725 1135.0553)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1070.4011 1165.1769)"
                            class="st8 st9 st5">85</text>
                    </g>
                    <g id="E-86_2_" class="property__active" ng-class="lago.inmovablesClassList[85]" ng-click="lago.showPropertyData(40, '86')">
                        <polyline id="EL-86_2_"class="property pb-sprite-1" points="1018,1216.9 1131,1178.5 1159.2,1169 1178.4,1225.5 1150.1,1235 1037.1,1273.4 
				1018,1216.9 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1078.2227 1239.1514)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1027.7604 1234.2305)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1079.4102 1206.8394)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1153.4532 1191.5676)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1090.3359 1221.912)"
                            class="st8 st9 st5">86</text>
                    </g>
                    <g id="E-87_2_" class="property__active" ng-class="lago.inmovablesClassList[86]" ng-click="lago.showPropertyData(40, '87')">
                        <polyline id="EL-87_2_" class="property pb-sprite-2" points="1037.1,1273.4 1150.1,1235 1178.4,1225.5 1197.6,1282 1169.3,1291.6 1056.3,1329.9 
				1037.1,1273.4 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1100.0397 1297.7655)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1046.9329 1290.7261)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1098.6746 1263.5884)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1172.6243 1248.0648)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1111.8574 1279.5215)"
                            class="st8 st9 st5">87</text>
                    </g>
                    <g id="E-88_2_" class="property__active" ng-class="lago.inmovablesClassList[87]" ng-click="lago.showPropertyData(40, '88')">
                        <polyline id="EL-88_2_"class="property pb-sprite-1" points="1056.3,1329.9 1169.3,1291.6 1197.6,1282 1216.7,1338.5 1188.5,1348.1 
				1075.5,1386.4 1056.3,1329.9 			" />
                        <g>
                            <polyline class="st1" points="1180.1,1312.2 1180.1,1328 1172.2,1320.1 1180.1,1312.2 				" />
                            <polyline class="st2" points="1180.1,1312.2 1188,1320.1 1180.1,1328 1180.1,1312.2 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1118.5859 1354.8308)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1066.1135 1347.2395)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1117.6246 1319.4159)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1191.8054 1304.5585)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1130.0978 1336.1149)"
                            class="st8 st9 st5">88</text>
                    </g>
                    <g id="DIVISIONES_9_">
                        <line class="st12" x1="1114.3" y1="1500.9" x2="940.9" y2="989.8" />
                        <line class="st12" x1="836.8" y1="1089.3" x2="949.8" y2="1051" />
                        <line class="st12" x1="856" y1="1145.8" x2="969" y2="1107.5" />
                        <line class="st12" x1="875.2" y1="1202.4" x2="988.2" y2="1164" />
                        <line class="st12" x1="894.4" y1="1258.9" x2="1007.4" y2="1220.5" />
                        <line class="st12" x1="913.5" y1="1315.4" x2="1026.5" y2="1277" />
                        <line class="st12" x1="932.7" y1="1371.9" x2="1045.7" y2="1333.5" />
                        <line class="st12" x1="949.8" y1="1051" x2="1101.7" y2="999.4" />
                        <line class="st12" x1="969" y1="1107.5" x2="1120.9" y2="1055.9" />
                        <line class="st12" x1="988.2" y1="1164" x2="1140" y2="1112.5" />
                        <line class="st12" x1="1007.4" y1="1220.5" x2="1159.2" y2="1169" />
                        <line class="st12" x1="1026.5" y1="1277" x2="1178.4" y2="1225.5" />
                        <line class="st12" x1="1045.7" y1="1333.5" x2="1197.6" y2="1282" />
                    </g>
                </g>
                <g id="ISLA_F">
                    <g id="F-70_2_" class="property__active" ng-class="lago.inmovablesClassList[69]" ng-click="lago.showPropertyData(40, '70')">
                        <polyline id="FL-70_2_"class="property pb-sprite-1" points="672.5,605.3 785.5,567 796.1,563.4 798.2,569.6 798.6,570.6 817.4,626.1 
				817.8,627.1 694.2,669.1 693.8,668 672.5,605.3 			" />
                        <g>
                            <polyline class="st1" points="709.3,620.2 709.3,636 701.4,628.1 709.3,620.2 				" />
                            <polyline class="st2" points="709.3,620.2 717.2,628.1 709.3,636 709.3,620.2 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 721.9133 628.035)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">7.85 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 686.4954 625.277)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 790.0439 590.1322)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 742.1224 648.2209)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 731.7878 610.4749)"
                            class="st8 st9 st5">70</text>
                    </g>
                    <g id="F-71_2_" class="property__active" ng-class="lago.inmovablesClassList[70]" ng-click="lago.showPropertyData(40, '71')">
                        <polyline id="FL-71_2_" class="property pb-sprite-2" points="766.4,510.5 777,506.9 796.1,563.4 785.5,567 672.5,605.3 672.2,604.5 653.4,548.8 
				766.4,510.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 699.6328 569.4191)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 666.0929 565.1645)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 769.6366 530.0162)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 721.0228 586.0535)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 712.5336 552.8262)"
                            class="st8 st9 st5">71</text>
                    </g>
                    <g id="F-72_2_" class="property__active" ng-class="lago.inmovablesClassList[71]" ng-click="lago.showPropertyData(40, '72')">
                        <polyline id="FL-72_2_"class="property pb-sprite-1" points="634.2,492.3 747.2,454 757.8,450.4 777,506.9 766.4,510.5 653.4,548.8 653.1,548 
				634.2,492.3 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 680.0173 513.2827)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 646.9144 508.6575)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 750.4609 473.5144)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 702.2023 530.61)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 692.6467 497.4753)"
                            class="st8 st9 st5">72</text>
                    </g>
                    <g id="F-73_2_" class="property__active" ng-class="lago.inmovablesClassList[72]" ng-click="lago.showPropertyData(40, '73')">
                        <polyline id="FL-73_2_" class="property pb-sprite-2" points="615,435.8 728,397.5 738.6,393.9 757.8,450.4 747.2,454 634.2,492.3 633.9,491.5 
				615,435.8 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 664.5706 459.3437)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 627.7388 452.1558)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 731.2849 417.0128)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 682.804 473.4671)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 674.2165 440.4025)"
                            class="st8 st9 st5">73</text>
                    </g>
                    <g id="F-74_2_" class="property__active" ng-class="lago.inmovablesClassList[73]" ng-click="lago.showPropertyData(40, '74')">
                        <polyline id="FL-74_2_"class="property pb-sprite-1" points="708.8,341 719.4,337.4 721.5,343.6 721.9,344.6 738.6,393.9 728,397.5 615,435.8 
				614.7,434.9 595.8,379.3 708.8,341 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 643.8386 403.9276)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 608.5594 395.6491)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 663.4987 416.5793)">
                            <tspan x="0" y="0" class="st3 st4 st5">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 655.8615 384.8851)"
                            class="st8 st9 st5">74</text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 715.0289 362.0766)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                    </g>
                    <g id="F-75_2_" class="property__active" ng-class="lago.inmovablesClassList[74]" ng-click="lago.showPropertyData(40, '75')">
                        <polyline id="FL-75_2_" class="property pb-sprite-2" points="689.4,283.7 700.2,280.9 719.4,337.4 708.8,341 595.8,379.3 595.5,378.4 
				573.1,312.3 631.3,298.4 689.4,283.7 			" />
                        <g>
                            <polyline class="st1" points="611.2,333.3 611.2,349.1 603.3,341.2 611.2,333.3 				" />
                            <polyline class="st2" points="611.2,333.3 619.1,341.2 611.2,349.1 611.2,333.3 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 629.1696 344.7962)">
                            <tspan x="0" y="0" class="st3 st4 st5">15</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">2.20 m2</tspan>
                        </text>
                        <text transform="matrix(0.9711 -0.2385 0.2385 0.9711 627.4125 312.9962)">
                            <tspan x="0" y="0" class="st3 st4 st6">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st6">6</tspan>
                        </text>
                        <text transform="matrix(0.9711 -0.2385 0.2385 0.9711 646.4752 354.563)">
                            <tspan x="0" y="0" class="st3 st4 st6">17.5</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st6">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 587.6003 333.8981)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.4</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">9</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 695.4285 300.6389)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 638.4874 327.4678)"
                            class="st8 st9 st5">75</text>
                    </g>
                    <g id="F-76_2_" class="property__active" ng-class="lago.inmovablesClassList[75]" ng-click="lago.showPropertyData(40, '76')">
                        <polyline id="FL-76_2_"class="property pb-sprite-1" points="700.2,280.9 757.9,265.2 815.4,248.7 844,240.2 862.8,295.6 863.1,296.7 
				721.9,344.6 721.5,343.6 700.2,280.9 			" />
                        <g>
                            <polyline class="st1" points="829.6,266 829.6,281.8 821.7,273.9 829.6,266 				" />
                            <polyline class="st2" points="829.6,266 837.5,273.9 829.6,281.8 829.6,266 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 759.9452 308.6073)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">9.04 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 837.5382 262.9849)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 712.0711 301.5371)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">2</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 778.8501 321.3187)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9622 -0.2723 0.2723 0.9622 762.4551 274.1556)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">3</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 769.9926 291.4021)"
                            class="st8 st9 st5">76</text>
                    </g>
                    <g id="F-77_2_" class="property__active" ng-class="lago.inmovablesClassList[76]" ng-click="lago.showPropertyData(40, '77')">
                        <polyline id="FL-77_2_" class="property pb-sprite-2" points="721.9,344.6 863.1,296.7 882,352.1 882.3,353.2 741.1,401.1 740.7,400.1 
				721.9,344.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 780.4142 365.4898)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 856.7157 319.4891)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 732.4737 361.6547)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 798.5786 379.4582)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 791.0015 348.6827)"
                            class="st8 st9 st5">77</text>
                    </g>
                    <g id="F-78_2_" class="property__active" ng-class="lago.inmovablesClassList[77]" ng-click="lago.showPropertyData(40, '78')">
                        <polyline id="FL-78_2_"class="property pb-sprite-1" points="741.1,401.1 882.3,353.2 901.1,408.6 901.5,409.7 760.2,457.6 759.9,456.6 
				741.1,401.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 799.6558 422.4301)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 875.8956 375.9925)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 751.6547 418.1494)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 817.7912 436.0433)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 812.5778 405.4388)"
                            class="st8 st9 st5">78</text>
                    </g>
                    <g id="F-79_2_" class="property__active" ng-class="lago.inmovablesClassList[78]" ng-click="lago.showPropertyData(40, '79')">
                        <polyline id="FL-79_2_" class="property pb-sprite-2" points="760.2,457.6 901.5,409.7 920.3,465.1 920.7,466.2 779.4,514.1 779.1,513.1 
				760.2,457.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 819.479 479.4941)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 895.0703 432.4976)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 770.8334 474.6708)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 836.7261 491.8492)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 831.6551 460.5304)"
                            class="st8 st9 st5">79</text>
                    </g>
                    <g id="F-80_2_" class="property__active" ng-class="lago.inmovablesClassList[79]" ng-click="lago.showPropertyData(40, '80')">
                        <polyline id="FL-80_2_"class="property pb-sprite-1" points="779.4,514.1 920.7,466.2 939.5,521.6 939.8,522.7 798.6,570.6 798.2,569.6 
				779.4,514.1 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 838.9501 536.4135)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 914.2464 488.9961)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 790.0079 531.1616)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 856.0397 548.7372)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 850.7044 518.5759)"
                            class="st8 st9 st5">80</text>
                    </g>
                    <g id="F-81_2_" class="property__active" ng-class="lago.inmovablesClassList[80]" ng-click="lago.showPropertyData(40, '81')">
                        <polyline id="FL-81_2_" class="property pb-sprite-2" points="939.8,522.7 958.7,578.1 959,579.2 817.8,627.1 817.4,626.1 798.6,570.6 
				939.8,522.7 			" />
                        <g>
                            <polyline class="st1" points="924.1,550.9 924.1,566.7 916.2,558.8 924.1,550.9 				" />
                            <polyline class="st2" points="924.1,550.9 932,558.8 924.1,566.7 924.1,550.9 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 852.7592 590.6799)">
                            <tspan x="0" y="0" class="st3 st4 st5">16</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">0.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 933.4279 545.5)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 809.187 587.6642)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 874.5496 603.2766)">
                            <tspan x="0" y="0" class="st3 st4 st5">20.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 866.4005 574.9166)"
                            class="st8 st9 st5">81</text>
                    </g>
                    <g id="DIVISIONES_5_">
                        <line class="st12" x1="817.8" y1="627.1" x2="700.2" y2="280.9" />
                        <line class="st12" x1="741.1" y1="401.1" x2="882.3" y2="353.2" />
                        <line class="st12" x1="760.2" y1="457.6" x2="901.5" y2="409.7" />
                        <line class="st12" x1="615" y1="435.8" x2="738.6" y2="393.9" />
                        <line class="st12" x1="634.2" y1="492.3" x2="757.8" y2="450.4" />
                        <line class="st12" x1="653.4" y1="548.8" x2="777" y2="506.9" />
                        <line class="st12" x1="672.5" y1="605.3" x2="796.1" y2="563.4" />
                        <line class="st12" x1="779.4" y1="514.1" x2="920.7" y2="466.2" />
                        <line class="st12" x1="798.6" y1="570.6" x2="939.8" y2="522.7" />
                        <line class="st12" x1="721.9" y1="344.6" x2="863.1" y2="296.7" />
                        <line class="st12" x1="595.8" y1="379.3" x2="719.4" y2="337.4" />
                        <line class="st12" x1="694.2" y1="669.1" x2="959" y2="579.2" />
                    </g>
                </g>
                <g id="ISLA_G">
                    <g id="G-89_2_" class="property__active" ng-class="lago.inmovablesClassList[88]" ng-click="lago.showPropertyData(40, '89')">
                        <polyline id="GL-89_2_" class="property pb-sprite-2"
                            points="1263.6,1260.7 1376.6,1222.4 1395.8,1278.9 1282.8,1317.2 1263.6,1260.7 			" />
                        <g>
                            <polyline class="st1"
                                points="1296.3,1272.4 1296.3,1288.3 1288.4,1280.3 1296.3,1272.4 				" />
                            <polyline class="st2"
                                points="1296.3,1272.4 1304.2,1280.3 1296.3,1288.3 1296.3,1272.4 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1313.0085 1280.2998)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1372.0461 1244.5592)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1325.6324 1298.7323)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1273.6525 1277.9479)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1322.9797 1263.0492)"
                            class="st8 st9 st5">89</text>
                    </g>
                    <g id="G-90_2_"  class="property__active" ng-class="lago.inmovablesClassList[89]" ng-click="lago.showPropertyData(40, '90')">
                        <polyline id="GL-90_2_"class="property pb-sprite-1"
                            points="1244.4,1204.2 1357.4,1165.9 1376.6,1222.4 1263.6,1260.7 1244.4,1204.2 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1293.4816 1223.4561)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1352.8787 1188.0619)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1306.5166 1242.4042)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1254.4724 1221.4528)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1303.3364 1207.7158)"
                            class="st8 st9 st5">90</text>
                    </g>
                    <g id="G-91_2_"  class="property__active" ng-class="lago.inmovablesClassList[90]" ng-click="lago.showPropertyData(40, '91')">
                        <polyline id="GL-91_2_" class="property pb-sprite-2"
                            points="1225.3,1147.7 1338.3,1109.4 1357.4,1165.9 1244.4,1204.2 1225.3,1147.7 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1273.3663 1168.6074)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1333.6932 1131.5449)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1287.4476 1186.2374)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1235.3054 1164.9553)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1285.0778 1152.0181)"
                            class="st8 st9 st5">91</text>
                    </g>
                    <g id="G-92_2_"  class="property__active" ng-class="lago.inmovablesClassList[91]" ng-click="lago.showPropertyData(40, '92')">
                        <polyline id="GL-92_2_"class="property pb-sprite-1"
                            points="1206.1,1091.2 1319.1,1052.8 1338.3,1109.4 1225.3,1147.7 1206.1,1091.2 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1254.0328 1112.2756)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1314.5127 1075.05)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1268.1133 1129.2728)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1216.1217 1108.4419)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1263.7213 1095.7051)"
                            class="st8 st9 st5">92</text>
                    </g>
                    <g id="G-93_2_"  class="property__active" ng-class="lago.inmovablesClassList[92]" ng-click="lago.showPropertyData(40, '93')">
                        <polyline id="GL-93_2_" class="property pb-sprite-2"
                            points="1299.9,996.3 1319.1,1052.8 1206.1,1091.2 1186.9,1034.7 1299.9,996.3 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1232.2908 1056.3704)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1295.3407 1018.547)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1248.843 1072.4918)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1196.9418 1051.9426)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1243.5791 1039.339)"
                            class="st8 st9 st5">93</text>
                    </g>
                    <g id="G-94_2_"  class="property__active" ng-class="lago.inmovablesClassList[93]" ng-click="lago.showPropertyData(40, '94')">
                        <polyline id="GL-94_2_"class="property pb-sprite-1"
                            points="1167.7,978.2 1280.7,939.8 1299.9,996.3 1186.9,1034.7 1167.7,978.2 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1213.0851 999.4355)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1276.1587 962.0402)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1229.7452 1016.2245)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1177.7703 995.4518)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1223.6683 982.8881)"
                            class="st8 st9 st5">94</text>
                    </g>
                    <g id="G-95_2_"  class="property__active" ng-class="lago.inmovablesClassList[94]" ng-click="lago.showPropertyData(40, '95')">
                        <polyline id="GL-95_2_" class="property pb-sprite-2"
                            points="1261.5,883.3 1280.7,939.8 1167.7,978.2 1148.5,921.7 1261.5,883.3 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1194.5789 943.3475)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1256.9783 905.5411)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1210.5753 959.761)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1158.5831 938.9313)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1206.7119 925.7708)"
                            class="st8 st9 st5">95</text>
                    </g>
                    <g id="G-96_2_"  class="property__active" ng-class="lago.inmovablesClassList[95]" ng-click="lago.showPropertyData(40, '96')">
                        <polyline id="GL-96_2_"class="property pb-sprite-1"
                            points="1129.4,865.2 1242.4,826.8 1261.5,883.3 1148.5,921.7 1129.4,865.2 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1175.485 887.2242)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1237.8102 849.0327)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1191.6243 903.9214)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1139.4072 882.4348)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1186.8983 869.235)"
                            class="st8 st9 st5">96</text>
                    </g>
                    <g id="G-97_2_"  class="property__active" ng-class="lago.inmovablesClassList[96]" ng-click="lago.showPropertyData(40, '97')">
                        <polyline id="GL-97_2_" class="property pb-sprite-2" points="1220.8,763.3 1223.2,770.3 1242.4,826.8 1129.4,865.2 1110.2,808.7 1107.8,801.6 
				1220.8,763.3 			" />
                        <g>
                            <polyline class="st1" points="1141.1,818.4 1141.1,834.2 1133.2,826.3 1141.1,818.4 				" />
                            <polyline class="st2" points="1141.1,818.4 1149,826.3 1141.1,834.2 1141.1,818.4 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1155.9241 827.1187)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1217.4264 789.0026)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1172.2703 846.9202)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1119.0337 822.4001)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1166.3502 810.6669)"
                            class="st8 st9 st5">97</text>
                    </g>
                    <g id="G-98_2_"  class="property__active" ng-class="lago.inmovablesClassList[97]" ng-click="lago.showPropertyData(40, '98')">
                        <polyline id="GL-98_2_"class="property pb-sprite-1" points="1199.2,699.7 1201.6,706.8 1204,713.8 1220.8,763.3 1107.8,801.6 1091,752.2 
				1088.6,745.1 1086.2,738.1 1199.2,699.7 			" />
                        <g>
                            <polyline class="st1" points="1119.7,754.7 1119.7,770.5 1111.8,762.6 1119.7,754.7 				" />
                            <polyline class="st2" points="1119.7,754.7 1127.6,762.6 1119.7,770.5 1119.7,754.7 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1131.7113 764.4286)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1195.8514 725.4382)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1150.5979 783.059)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1097.4564 758.8397)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1143.7007 746.4984)"
                            class="st8 st9 st5">98</text>
                    </g>
                    <g id="G-99_2_"  class="property__active" ng-class="lago.inmovablesClassList[98]" ng-click="lago.showPropertyData(40, '99')">
                        <polyline id="GL-99_2_" class="property pb-sprite-2" points="1064.6,674.5 1177.6,636.1 1180,643.2 1184.8,657.3 1199.2,699.7 1086.2,738.1 
				1071.8,695.7 1067,681.6 1064.6,674.5 			" />
                        <g>
                            <polyline class="st1" points="1097.8,690.7 1097.8,706.5 1089.9,698.6 1097.8,690.7 				" />
                            <polyline class="st2" points="1097.8,690.7 1105.7,698.6 1097.8,706.5 1097.8,690.7 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1111.4895 701.4383)">
                            <tspan x="0" y="0" class="st3 st4 st5">14</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">4.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1174.2819 661.8731)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1129.2773 720.2262)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1075.8828 695.2719)">
                            <tspan x="0" y="0" class="st3 st4 st5">9.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1122.4755 683.4661)"
                            class="st8 st9 st5">99</text>
                    </g>
                    <g id="G-100_2_"  class="property__active" ng-class="lago.inmovablesClassList[99]" ng-click="lago.showPropertyData(40, '100')">
                        <polyline id="GL-100_2_"class="property pb-sprite-1" points="1158.5,579.6 1160.9,586.7 1165.7,600.8 1177.6,636.1 1064.6,674.5 1052.6,639.2 
				1047.9,625.1 1045.5,618 1158.5,579.6 			" />
                        <g>
                            <polyline class="st1" points="1077.1,631.4 1077.1,647.3 1069.2,639.4 1077.1,631.4 				" />
                            <polyline class="st2" points="1077.1,631.4 1085,639.4 1077.1,647.3 1077.1,631.4 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1089.8594 639.2794)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1153.8984 601.8428)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1107.9542 657.4045)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1055.5029 635.2321)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1100.4595 622.3028)"
                            class="st8 st9 st5">100</text>
                    </g>
                    <g id="G-101_2_"  class="property__active" ng-class="lago.inmovablesClassList[100]" ng-click="lago.showPropertyData(40, '101')">
                        <polyline id="GL-101_2_" class="property pb-sprite-2" points="1139.3,523.1 1146.5,544.3 1158.5,579.6 1045.5,618 1033.5,582.7 1026.3,561.5 
				1139.3,523.1 			" />
                        <g>
                            <polyline class="st1" points="1058,573.2 1058,589 1050.1,581.1 1058,573.2 				" />
                            <polyline class="st2" points="1058,573.2 1065.9,581.1 1058,589 1058,573.2 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1070.1293 585.9263)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1134.726 545.338)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1088.3018 599.5135)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1036.3268 578.7347)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1081.3164 569.9684)"
                            class="st8 st9 st5">101</text>
                    </g>
                    <g id="G-102_2_" class="property__active" ng-class="lago.inmovablesClassList[101]" ng-click="lago.showPropertyData(40, '102')">
                        <polyline id="GL-102_2_"class="property pb-sprite-1" points="1007.1,505 1120.1,466.6 1127.3,487.8 1139.3,523.1 1026.3,561.5 1025.4,559 
				1022.4,550 1014.3,526.2 1007.1,505 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1051.4399 530.0847)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1115.5422 488.8338)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1069.4336 543.9294)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1017.1424 522.2287)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1061.0992 513.6622)"
                            class="st8 st9 st5">102</text>
                    </g>
                    <g id="G-103_2_" class="property__active" ng-class="lago.inmovablesClassList[102]" ng-click="lago.showPropertyData(40, '103')">
                        <polyline id="GL-103_2_" class="property pb-sprite-2" points="987.9,448.5 1100.9,410.1 1108.1,431.3 1120.1,466.6 1007.1,505 995.1,469.7 
				987.9,448.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1034.0244 473.9492)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1096.3651 432.3202)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1050.4238 487.9118)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 997.9708 465.7235)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1044.4177 456.3759)"
                            class="st8 st9 st5">103</text>
                    </g>
                    <g id="G-104_2_" class="property__active" ng-class="lago.inmovablesClassList[103]" ng-click="lago.showPropertyData(40, '104')">
                        <polyline id="GL-104_2_"class="property pb-sprite-1" points="1081.7,353.6 1086.5,367.7 1100.9,410.1 987.9,448.5 973.5,406.1 968.7,392 
				1081.7,353.6 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1010.9931 414.7357)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1077.1852 375.8271)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1030.8446 430.227)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 978.7965 409.2244)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1021.9175 397.6701)"
                            class="st8 st9 st5">104</text>
                    </g>
                    <g id="G-105_2_" class="property__active" ng-class="lago.inmovablesClassList[104]" ng-click="lago.showPropertyData(40, '105')">
                        <polyline id="GL-105_2_" class="property pb-sprite-2" points="949.6,335.5 1062.6,297.1 1065,304.2 1081.7,353.6 968.7,392 952,342.5 
				949.6,335.5 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 993.5798 358.887)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1058.0077 319.3198)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 1011.2811 372.5977)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 959.6138 352.7199)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 1003.0513 342.1218)"
                            class="st8 st9 st5">105</text>
                    </g>
                    <g id="G-106_2_" class="property__active" ng-class="lago.inmovablesClassList[105]" ng-click="lago.showPropertyData(40, '106')">
                        <polyline id="GL-106_2_"class="property pb-sprite-1"
                            points="930.4,279 1043.4,240.6 1062.6,297.1 949.6,335.5 930.4,279 			" />
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 968.2486 300.6397)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">8.00 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1038.8315 262.8182)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 992.887 318.4079)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 940.4326 296.22)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 980.9689 281.9152)"
                            class="st8 st9 st5">106</text>
                    </g>
                    <g id="G-107_2_" class="property__active" ng-class="lago.inmovablesClassList[106]" ng-click="lago.showPropertyData(40, '107')">
                        <polyline id="GL-107_2_" class="property pb-sprite-2"
                            points="910.2,219.5 966.9,200.8 1023.3,181.4 1043.4,240.6 930.4,279 910.2,219.5 			" />
                        <g>
                            <polyline class="st1" points="943.1,234.9 943.1,250.8 935.2,242.8 943.1,234.9 				" />
                            <polyline class="st2" points="943.1,234.9 951,242.8 943.1,250.8 943.1,234.9 				" />
                        </g>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 959.155 242.8771)">
                            <tspan x="0" y="0" class="st3 st4 st5">13</tspan>
                            <tspan x="11.6" y="0" class="st3 st4 st5">3.85 m2</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 1019.1896 204.9526)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.3</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">9</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 973.4856 261.2392)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9472 -0.3206 0.3206 0.9472 954.6211 215.4616)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 920.7513 238.2275)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.4</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">2</tspan>
                        </text>
                        <text transform="matrix(0.9588 -0.284 0.284 0.9588 970.3689 226.4635)"
                            class="st8 st9 st5">107</text>
                    </g>
                    <g id="DIVISIONES_4_">
                        <line class="st12" x1="930.4" y1="279" x2="1043.4" y2="240.6" />
                        <line class="st12" x1="949.6" y1="335.5" x2="1062.6" y2="297.1" />
                        <line class="st12" x1="968.7" y1="392" x2="1081.7" y2="353.6" />
                        <line class="st12" x1="987.9" y1="448.5" x2="1100.9" y2="410.1" />
                        <line class="st12" x1="1007.1" y1="505" x2="1120.1" y2="466.6" />
                        <line class="st12" x1="1026.3" y1="561.5" x2="1139.3" y2="523.1" />
                        <line class="st12" x1="1045.5" y1="618" x2="1158.5" y2="579.6" />
                        <line class="st12" x1="1064.6" y1="674.5" x2="1177.6" y2="636.1" />
                        <line class="st12" x1="1086.2" y1="738.1" x2="1199.2" y2="699.7" />
                        <line class="st12" x1="1107.8" y1="801.6" x2="1220.8" y2="763.3" />
                        <line class="st12" x1="1129.4" y1="865.2" x2="1242.4" y2="826.8" />
                        <line class="st12" x1="1148.5" y1="921.7" x2="1261.5" y2="883.3" />
                        <line class="st12" x1="1167.7" y1="978.2" x2="1280.7" y2="939.8" />
                        <line class="st12" x1="1186.9" y1="1034.7" x2="1299.9" y2="996.3" />
                        <line class="st12" x1="1206.1" y1="1091.2" x2="1319.1" y2="1052.8" />
                        <line class="st12" x1="1225.3" y1="1147.7" x2="1338.3" y2="1109.4" />
                        <line class="st12" x1="1244.4" y1="1204.2" x2="1357.4" y2="1165.9" />
                        <line class="st12" x1="1263.6" y1="1260.7" x2="1376.6" y2="1222.4" />
                    </g>
                </g>
                <g id="ISLA_H">
                    <g id="H-108_2_"class="property__active" ng-class="lago.inmovablesClassList[107]" ng-click="lago.showPropertyData(40, '108')">
                        <polyline id="HL-108_2_" class="property pb-sprite-2"
                            points="906.2,22.2 962.6,2.7 1001,115.7 944.3,135.3 906.2,22.2 			" />
                        <g>
                            <polyline class="st1" points="966.6,95.3 966.6,111.1 958.6,103.2 966.6,95.3 				" />
                            <polyline class="st2" points="966.6,95.3 974.5,103.2 966.6,111.1 966.6,95.3 				" />
                        </g>
                        <text transform="matrix(0.3239 0.9461 -0.9461 0.3239 938.8201 48.0682)">
                            <tspan x="0" y="0" class="st3 st4 st6">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st6">8.30 m2</tspan>
                        </text>
                        <text transform="matrix(0.9455 -0.3256 0.3256 0.9455 928.7807 26.9067)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9455 -0.3256 0.3256 0.9455 962.1019 125.7523)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">4</tspan>
                        </text>
                        <text transform="matrix(0.319 0.9478 -0.9478 0.319 924.6392 65.2507)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3206 0.9472 -0.9472 0.3206 967.2862 50.1944)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3923 0.9198 -0.9198 0.3923 952.9608 59.0803)"
                            class="st8 st9 st5">108</text>
                    </g>
                    <g id="H-109_2_" class="property__active" ng-class="lago.inmovablesClassList[108]" ng-click="lago.showPropertyData(40, '109')">
                        <polyline id="HL-109_2_"class="property pb-sprite-1"
                            points="906.2,22.2 944.3,135.3 885.9,154.4 849.5,40.8 906.2,22.2 			" />
                        <text transform="matrix(0.2874 0.9578 -0.9578 0.2874 883.3852 64.8358)">
                            <tspan x="0" y="0" class="st3 st4 st11">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st11">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9505 -0.3107 0.3107 0.9505 872.2298 46.0243)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">0</tspan>
                        </text>
                        <text transform="matrix(0.9505 -0.3107 0.3107 0.9505 904.7786 145.1339)">
                            <tspan x="0" y="0" class="st3 st4 st6">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st6">4</tspan>
                        </text>
                        <text transform="matrix(0.304 0.9527 -0.9527 0.304 867.1165 83.8634)">
                            <tspan x="0" y="0" class="st3 st4 st11">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st11">0</tspan>
                        </text>
                        <text transform="matrix(0.314 0.9494 -0.9494 0.314 898.0255 75.1631)"
                            class="st8 st9 st7">109</text>
                    </g>
                    <g id="H-110_2_" class="property__active" ng-class="lago.inmovablesClassList[109]" ng-click="lago.showPropertyData(40, '110')">
                        <polyline id="HL-110_2_" class="property pb-sprite-2"
                            points="849.5,40.8 885.9,154.4 827.3,172.7 792.6,58.5 849.5,40.8 			" />
                        <text transform="matrix(0.2957 0.9553 -0.9553 0.2957 823.4073 85.1217)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9548 -0.2974 0.2974 0.9548 814.9291 63.8532)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9548 -0.2974 0.2974 0.9548 845.9897 163.436)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">4</tspan>
                        </text>
                        <text transform="matrix(0.289 0.9573 -0.9573 0.289 809.5754 102.0507)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.3305 0.9438 -0.9438 0.3305 840.0248 93.0781)"
                            class="st8 st9 st11">110</text>
                    </g>
                    <g id="H-111_2_" class="property__active" ng-class="lago.inmovablesClassList[110]" ng-click="lago.showPropertyData(40, '111')">
                        <polyline id="HL-111_2_" class="property pb-sprite-1"
                            points="735.4,75.5 792.6,58.5 827.3,172.7 768.3,190.1 735.4,75.5 			" />
                        <text transform="matrix(0.2924 0.9563 -0.9563 0.2924 761.966 103.3368)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9593 -0.2823 0.2823 0.9593 757.4648 80.9189)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.9593 -0.2823 0.2823 0.9593 787.0266 180.9569)">
                            <tspan x="0" y="0" class="st3 st4 st5">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st5">4</tspan>
                        </text>
                        <text transform="matrix(0.2756 0.9613 -0.9613 0.2756 750.1282 119.6569)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.289 0.9573 -0.9573 0.289 778.9579 111.6455)"
                            class="st8 st9 st5">111</text>
                    </g>
                    <g id="H-112_2_" class="property__active" ng-class="lago.inmovablesClassList[111]" ng-click="lago.showPropertyData(40, '112')">
                        <polyline id="HL-112_2_" class="property pb-sprite-2"
                            points="735.4,75.5 768.3,190.1 709.1,206.7 677.9,91.5 735.4,75.5 			" />
                        <text transform="matrix(0.2807 0.9598 -0.9598 0.2807 706.8693 118.8559)">
                            <tspan x="0" y="0" class="st3 st4 st5">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st5">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9632 -0.2689 0.2689 0.9632 699.8533 97.3699)">
                            <tspan x="0" y="0" class="st3 st4 st11">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st11">0</tspan>
                        </text>
                        <text transform="matrix(0.9632 -0.2689 0.2689 0.9632 727.9174 197.8404)">
                            <tspan x="0" y="0" class="st3 st4 st11">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st11">4</tspan>
                        </text>
                        <text transform="matrix(0.2605 0.9655 -0.9655 0.2605 692.6686 135.7654)">
                            <tspan x="0" y="0" class="st3 st4 st5">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st5">0</tspan>
                        </text>
                        <text transform="matrix(0.279 0.9603 -0.9603 0.279 720.7384 125.3643)"
                            class="st8 st9 st5">112</text>
                    </g>
                    <g id="H-113_2_" class="property__active" ng-class="lago.inmovablesClassList[112]" ng-click="lago.showPropertyData(40, '113')">
                        <polyline id="HL-113_2_" class="property pb-sprite-1"
                            points="677.9,91.5 709.1,206.7 649.7,222.3 620.2,106.7 677.9,91.5 			" />
                        <g>
                            <polyline class="st1" points="674,185.2 674,201 666.1,193.1 674,185.2 				" />
                            <polyline class="st2" points="674,185.2 681.9,193.1 674,201 674,185.2 				" />
                        </g>
                        <text transform="matrix(0.2317 0.9728 -0.9728 0.2317 651.6748 134.1821)">
                            <tspan x="0" y="0" class="st3 st4 st7">12</tspan>
                            <tspan x="11.7" y="0" class="st3 st4 st7">9.92 m2</tspan>
                        </text>
                        <text transform="matrix(0.9673 -0.2538 0.2538 0.9673 642.3672 113.1565)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.0</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">0</tspan>
                        </text>
                        <text transform="matrix(0.9673 -0.2538 0.2538 0.9673 668.9142 214.0354)">
                            <tspan x="0" y="0" class="st3 st4 st7">8.2</tspan>
                            <tspan x="14.5" y="0" class="st3 st4 st7">4</tspan>
                        </text>
                        <text transform="matrix(0.247 0.969 -0.969 0.247 634.5967 151.4111)">
                            <tspan x="0" y="0" class="st3 st4 st6">16.0</tspan>
                            <tspan x="20.3" y="0" class="st3 st4 st6">0</tspan>
                        </text>
                        <text transform="matrix(0.2334 0.9724 -0.9724 0.2334 666.2771 142.221)"
                            class="st8 st9 st5">113</text>
                    </g>
                    <g id="DIVISIONES_1_">
                        <line class="st12" x1="944.3" y1="135.3" x2="906.2" y2="22.2" />
                        <line class="st12" x1="885.9" y1="154.4" x2="849.5" y2="40.8" />
                        <line class="st12" x1="827.3" y1="172.7" x2="792.6" y2="58.5" />
                        <line class="st12" x1="768.3" y1="190.1" x2="735.4" y2="75.5" />
                        <line class="st12" x1="709.1" y1="206.7" x2="677.9" y2="91.5" />
                        <line class="st12" x1="649.7" y1="222.3" x2="620.2" y2="106.7" />
                    </g>
                </g>
            </g>
            <g id="COMPLEMENTO">
                <g>
                    <text transform="matrix(-0.9552 0.2959 -0.3323 -1.056 511.7958 204.0683)"
                        class="st13 st9 st14">ACCESO</text>
                    <path class="st13" d="M503.6,218.3c3-1,4.5-4.3,3.6-7.6l7.9-2.6l-4.6,8.7l-4.6,8.7l-8.9-4.3l-8.9-4.3l7.9-2.6
			C497.3,217.5,500.6,219.3,503.6,218.3" />
                </g>
                <g>
                    <text transform="matrix(-0.9565 0.291 -0.3408 -1.0494 599.9392 197.6607)"
                        class="st13 st9 st15">SALIDA</text>
                    <path class="st13" d="M587.2,192.7c2.9-0.9,6.1,0.9,7.2,3.9l7.7-2.4l-8.6-4.3l-8.6-4.3l-4.5,8.3l-4.5,8.3l7.7-2.4
			C582.7,196.8,584.3,193.6,587.2,192.7" />
                </g>
                <path class="st16" d="M443.5,146.4c0,0-205.6,39.5-237.2,42.9c-31.6,3.3-179,23.9-204.7,23.1l468.8,1377.6l926.7-311L962.3,1.6
		c0,0-137.3,48.4-169.7,56.9c-32.4,8.5-189.8,55.9-197,53.2" />

                <rect x="520.5" y="149.6" transform="matrix(0.9464 -0.3229 0.3229 0.9464 -24.6709 180.5014)"
                    class="st17" width="22.3" height="29.9" />
                <g>
                    <path class="st18" d="M535.8,164.8c-0.2,0.1-2.2,0.1-2.5-0.7c-0.3-0.8,1.2-2.2,1.4-2.3c0.2-0.1,1,0.4,1.3,1.2
			C536.3,163.9,536,164.8,535.8,164.8z" />
                    <path class="st18"
                        d="M532.6,172.2c-1.9,0.8-4.4-1.7-5.8-5.4c-1.4-3.7-1.2-7.2,0.8-8C530.1,165.4,530.1,165.4,532.6,172.2z" />
                    <polygon class="st18" points="532.5,171.8 527.7,159 529.5,158.3 534.3,171.1 		" />
                    <path class="st18" d="M529.5,158.3l1-1.9c0.2-0.4,0.6-0.4,0.9-0.1l0.7,0.8c1,1.5,2.3,2.6,3.9,3.2l0.6,0.2l1.6,4.3l-0.4,0.7
			c-0.7,1.4-1,3-0.8,4.6l0,1.4c0,0.4-0.3,0.6-0.6,0.5l-2.1-0.8L529.5,158.3z" />
                </g>
            </g>
            <g id="MACHOTE">
                <path class="st19" d="M352.4,262.4" />
            </g>
        </svg>

    </div>

</body>

</html>