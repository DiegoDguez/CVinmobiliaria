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
						<h6 class="deep-purple-text futura-light">{{arrecife.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{arrecife.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{arrecife.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{arrecife.propertyData.totalPlan2}} MXN</h6>
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
		<svg version="1.1" id="CONDO_ARRECIFE_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1366 1460" style="enable-background:new 0 0 1366 1460;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#325BA7;stroke-miterlimit:10;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st2{fill:#FFFFFF;}
	.st3{font-family:'CenturyGothic';}
	.st4{font-size:11.6482px;}
	.st5{fill:#FFBF00;}
	.st6{font-family:'CenturyGothic-Bold';}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st8{opacity:0.7529;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st9{opacity:0.502;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st10{font-size:12.7165px;}
	.st11{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:0.75;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st12{font-size:11.9235px;}
	.st13{font-size:11.6483px;}
	.st14{fill:none;stroke:#FFFFFF;stroke-width:0.75;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st15{fill-rule:evenodd;clip-rule:evenodd;fill:#001555;}
	.st16{fill:#001555;}
	.st17{font-size:6.6612px;}
	.st18{fill:none;stroke:#002856;stroke-width:2;stroke-miterlimit:10;}
</style>
<g id="BASE">
	<g>
		<polygon class="st0" points="-0.9,601.9 697.5,-1 1370.2,779.8 1307.7,926.8 1133.6,1464.3 759.3,1461.2 132.2,731.9 		"/>
		
			<image style="overflow:visible;" width="6159" height="6740" xlink:href="C854598E.png"  transform="matrix(0.2244 0 0 0.2244 -14.5662 2.9677)">
		</image>
	</g>
	<image style="overflow:visible;" width="1366" height="1460" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/arrecife/condos/arrecife_1.jpg" >
	</image>
</g>
<g id="CLUSTER">
	<g id="ISLA_A">
		<g id="A-01_00000001625059418532254660000018418121689700867771_" class="property__active" ng-class="arrecife.inmovablesClassList[102]" ng-click="arrecife.showPropertyData(63, '1')">
			<polyline id="AL-01_00000097486663392253071190000006748466309909702789_" class="property pb-sprite-1" points="1149,1402.2 1008.8,1357 
				1025.1,1306.6 1165.3,1351.7 1149,1402.2 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1064.6785 1371.6364)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1061.2618 1354.3527)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1024.4941 1345.2743)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1150.069 1386.9341)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1085.6949 1347.1042)" class="st5 st6 st4">01</text>
		</g>
		<g id="A-02_00000084494487814357445460000017951288122453847976_" class="property__active" ng-class="arrecife.inmovablesClassList[103]" ng-click="arrecife.showPropertyData(63, '2')">
			<polyline id="AL-02_00000039116267867443735890000004723195002744887975_" class="property pb-sprite-2" points="1165.3,1351.7 1025.1,1306.6 
				1041.3,1256.1 1181.5,1301.2 1165.3,1351.7 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1080.7633 1317.691)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1078.3915 1301.224)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1041.5376 1292.4884)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1165.7554 1332.4784)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1099.8782 1296.9274)" class="st5 st6 st4">02</text>
		</g>
		<g id="A-03_00000100361115118792584250000006888321878242572211_" class="property__active" ng-class="arrecife.inmovablesClassList[104]" ng-click="arrecife.showPropertyData(63, '3')">
			<polyline id="AL-03_00000047033165639015619890000007153040020973682865_" class="property pb-sprite-1" points="1181.5,1301.2 1041.3,1256.1 
				1057.6,1205.6 1197.8,1250.8 1181.5,1301.2 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1100.6343 1271.1224)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1094.4258 1249.8977)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1057.7916 1242.0197)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1181.9983 1282.0184)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1119.5477 1244.6818)" class="st5 st6 st4">03</text>
		</g>
		<g id="A-04_00000128470265832297145530000002193614658309391283_" class="property__active" ng-class="arrecife.inmovablesClassList[105]" ng-click="arrecife.showPropertyData(63, '4')">
			<polyline id="AL-04_00000134937950927924719030000016253521459291701125_" class="property pb-sprite-2" points="1197.8,1250.8 1057.6,1205.6 
				1073.8,1155.2 1214,1200.3 1197.8,1250.8 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1119.5469 1221.6558)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1113.0155 1201.1985)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1074.0378 1191.5624)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1198.2504 1231.5491)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1135.7943 1196.3396)" class="st5 st6 st4">04</text>
			<polyline class="st8" points="1090,1190.8 1078,1187.1 1085.9,1183 1090,1190.8 			"/>
			<polyline class="st9" points="1090,1190.8 1082.2,1195 1078,1187.1 1090,1190.8 			"/>
		</g>
		<g id="A-05_00000042736109546467647090000004261227810633669548_" class="property__active" ng-class="arrecife.inmovablesClassList[106]" ng-click="arrecife.showPropertyData(63, '5')">
			<polyline id="AL-05_00000066507595505713008860000012552223327272273587_" class="property pb-sprite-1" points="1214,1200.3 1073.8,1155.2 
				1090.1,1104.7 1230.3,1149.8 1214,1200.3 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1133.8538 1171.2898)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1128.7382 1152.4957)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1090.2778 1141.0923)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1214.4954 1181.0863)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1150.0718 1145.6578)" class="st5 st6 st4">05</text>
			<polyline class="st8" points="1106.1,1139.1 1094.1,1135.4 1101.9,1131.3 1106.1,1139.1 			"/>
			<polyline class="st9" points="1106.1,1139.1 1098.2,1143.2 1094.1,1135.4 1106.1,1139.1 			"/>
		</g>
		<g id="A-06_00000155836847060705018330000013603517404379329927_" class="property__active" ng-class="arrecife.inmovablesClassList[107]" ng-click="arrecife.showPropertyData(63, '6')">
			<polyline id="AL-06_00000017512263291608205980000012066509585703374490_" class="property pb-sprite-2" points="1230.3,1149.8 1090.1,1104.7 
				1106.3,1054.2 1246.5,1099.4 1230.3,1149.8 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1150.0706 1118.1178)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1144.5656 1099.3636)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1106.5316 1090.6306)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1230.7468 1130.6188)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1167.4375 1095.4457)" class="st5 st6 st4">06</text>
			<polyline class="st8" points="1121.9,1088.2 1109.9,1084.5 1117.7,1080.4 1121.9,1088.2 			"/>
			<polyline class="st9" points="1121.9,1088.2 1114,1092.3 1109.9,1084.5 1121.9,1088.2 			"/>
		</g>
		<g id="A-07_00000080203571412649788450000016849140865682549378_" class="property__active" ng-class="arrecife.inmovablesClassList[108]" ng-click="arrecife.showPropertyData(63, '7')">
			<polyline id="AL-07_00000028309028060211433670000004699083650758637187_" class="property pb-sprite-1" points="1246.5,1099.4 1106.3,1054.2 
				1122.6,1003.8 1262.8,1048.9 1246.5,1099.4 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1164.4415 1069.0216)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9546 0.298 -0.298 0.9546 1158.5337 1049.238)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1122.7747 1040.161)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1246.9908 1080.1556)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1183.6577 1042.9238)" class="st5 st6 st4">07</text>
			<g>
				<polyline class="st8" points="1137.5,1037.8 1125.6,1034.1 1133.4,1030 1137.5,1037.8 				"/>
				<polyline class="st9" points="1137.5,1037.8 1129.7,1042 1125.6,1034.1 1137.5,1037.8 				"/>
			</g>
		</g>
		<g id="A-08_00000039096783655642209310000015003068124233527223_" class="property__active" ng-class="arrecife.inmovablesClassList[109]" ng-click="arrecife.showPropertyData(63, '8')">
			<polyline id="AL-08_00000046315309860063179230000009595739557166198144_" class="property pb-sprite-2" points="1122.6,1003.8 1124.4,998.2 
				1138.8,953.3 1279,998.4 1264.6,1043.3 1262.8,1048.9 1122.6,1003.8 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1178.6925 1017.6401)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1173.3809 998.4302)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1139.0291 989.7099)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1263.2303 1029.7064)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1196.3408 992.2444)" class="st5 st6 st4">08</text>
			<g>
				<polyline class="st8" points="1154,988.1 1142,984.4 1149.9,980.3 1154,988.1 				"/>
				<polyline class="st9" points="1154,988.1 1146.2,992.2 1142,984.4 1154,988.1 				"/>
			</g>
		</g>
		<g id="A-09_00000016036633526547333660000016129915457781729960_" class="property__active" ng-class="arrecife.inmovablesClassList[110]" ng-click="arrecife.showPropertyData(63, '9')">
			<polyline id="AL-09_00000060726901168903190300000003799405200811983532_" class="property pb-sprite-1" points="1138.8,953.3 1140.6,947.7 
				1155.1,902.8 1295.2,948 1280.8,992.8 1279,998.4 1138.8,953.3 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1200.7853 969.6418)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1192.6602 947.9678)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1155.2717 939.2509)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1279.4849 979.2363)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1213.7733 941.282)" class="st5 st6 st10">09</text>
		</g>
		<g id="A-10_00000180362950752154580400000017480986279850065342_" class="property__active" ng-class="arrecife.inmovablesClassList[111]" ng-click="arrecife.showPropertyData(63, '10')">
			<polyline id="AL-10_00000072968126463545038530000012212811490820836540_" class="property pb-sprite-2" points="1155.1,902.8 1156.9,897.2 
				1171.3,852.4 1313.5,898.2 1311.5,902.8 1305.2,918.6 1299.5,934.6 1297.1,942.4 1295.2,948 1155.1,902.8 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1213.2068 917.8214)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1207.9636 894.0842)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.81 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1171.5258 888.7694)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1294.2876 946.8718)"><tspan x="0" y="0" class="st2 st3 st4">2.3</tspan><tspan x="16" y="0" class="st2 st3 st4">8</tspan></text>
			<text transform="matrix(0.3535 -0.9354 0.9354 0.3535 1294.2859 921.8792)"><tspan x="0" y="0" class="st2 st3 st4">5.7</tspan><tspan x="16" y="0" class="st2 st3 st4">7</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1231.5625 886.9277)" class="st5 st6 st4">10</text>
		</g>
		<g id="A-11_00000001635393937230029660000001031377170491055750_" class="property__active" ng-class="arrecife.inmovablesClassList[112]" ng-click="arrecife.showPropertyData(63, '11')">
			<polyline id="AL-11_00000003087789379068540120000006933573360897880474_" class="property pb-sprite-1" points="1174.9,841.2 1187.6,801.9 
				1364.1,781.4 1313.5,898.2 1171.3,852.4 1174.9,841.2 			"/>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1231.5618 833.8349)"><tspan x="0" y="0" class="st2 st3 st4">39</tspan><tspan x="12.9" y="0" class="st2 st3 st4">6. 33 m2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1187.7726 838.3041)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.3987 -0.9171 0.9171 0.3987 1308.8186 907.0839)"><tspan x="0" y="0" class="st2 st3 st4">0.8</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.3987 -0.9171 0.9171 0.3987 1329.8655 847.1419)"><tspan x="0" y="0" class="st2 st3 st4">21.6</tspan><tspan x="22.5" y="0" class="st2 st3 st4">1</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1231.5657 866.9298)"><tspan x="0" y="0" class="st2 st3 st4">25.3</tspan><tspan x="22.5" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.9516 0.3074 -0.3074 0.9516 1256.5326 828.5439)" class="st5 st6 st4">11</text>
		</g>
		<g id="A-12_00000047753175570528668870000014564296621577548452_" class="property__active" ng-class="arrecife.inmovablesClassList[113]" ng-click="arrecife.showPropertyData(63, '12')">
			<polyline id="AL-12_00000120558224903209740170000009348183028973016457_" class="property pb-sprite-2" points="1187.6,801.9 1150.8,759.1 
				1262.4,663.1 1364.1,781.4 1187.6,801.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1226.4939 763.9827)"><tspan x="0" y="0" class="st2 st3 st4">45</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.75 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1295.8086 720.1937)"><tspan x="0" y="0" class="st2 st3 st4">26.4</tspan><tspan x="22.5" y="0" class="st2 st3 st4">8</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1168.0886 770.7425)"><tspan x="0" y="0" class="st2 st3 st4">9.5</tspan><tspan x="16" y="0" class="st2 st3 st4">8</tspan></text>
			<text transform="matrix(0.9934 -0.1149 0.1149 0.9934 1261.0393 790.5279)"><tspan x="0" y="0" class="st2 st3 st4">30.1</tspan><tspan x="22.5" y="0" class="st2 st3 st4">8</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1230.75 740.8838)" class="st5 st6 st4">12</text>
		</g>
		<g id="A-13_00000148643074053098657590000016823567687102848675_" class="property__active" ng-class="arrecife.inmovablesClassList[114]" ng-click="arrecife.showPropertyData(63, '13')">
			<polyline id="AL-13_00000112603954194780257980000010257191560996811698_" class="property pb-sprite-1" points="1150.8,759.1 1108.5,710 
				1220.2,614 1262.4,663.1 1150.8,759.1 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1167.4377 706.5939)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1225.2745 638.3955)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1126.4072 721.8099)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1196.3403 715.3986)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1170.0385 685.0206)" class="st5 st6 st4">13</text>
		</g>
		<g id="A-14_00000021837612443605292570000006122778291195618990_" class="property__active" ng-class="arrecife.inmovablesClassList[115]" ng-click="arrecife.showPropertyData(63, '14')">
			<polyline id="AL-14_00000152983253517654835390000013757421535321076108_" class="property pb-sprite-2" points="1108.5,710 1066.3,660.9 
				1177.9,564.8 1220.2,614 1108.5,710 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1125.4967 660.5308)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1179.6067 583.1625)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1081.7731 669.6343)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1153.864 666.2431)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1121.4742 639.0806)" class="st5 st6 st4">14</text>
		</g>
		<g id="A-15_00000101807039694128925960000006010463381528744099_" class="property__active" ng-class="arrecife.inmovablesClassList[116]" ng-click="arrecife.showPropertyData(63, '15')">
			<polyline id="AL-15_00000107583502209291494130000012326992082626414753_" class="property pb-sprite-1" points="1066.3,660.9 1024,611.7 
				1135.7,515.7 1177.9,564.8 1066.3,660.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1081.7737 609.865)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1137.3566 534.0344)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1039.5216 620.5035)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1113.0176 614.5896)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1087.1622 588.9673)" class="st5 st6 st4">15</text>
		</g>
		<g id="A-16_00000123431491779238058800000016142886445075215030_" class="property__active" ng-class="arrecife.inmovablesClassList[117]" ng-click="arrecife.showPropertyData(63, '16')">
			<polyline id="AL-16_00000140696305755941802390000010543719528959679405_" class="property pb-sprite-2" points="1024,611.7 981.8,562.6 
				1093.4,466.6 1135.7,515.7 1024,611.7 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1040.7665 564.2902)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1095.1086 484.9082)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 997.2764 571.3789)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1070.0088 564.4731)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1046.9114 540.0292)" class="st5 st6 st4">16</text>
		</g>
		<g id="A-17_00000142889183243510239970000005162243662474486424_" class="property__active" ng-class="arrecife.inmovablesClassList[118]" ng-click="arrecife.showPropertyData(63, '17')">
			<polyline id="AL-17_00000110466067330265231510000018136603395814696851_" class="property pb-sprite-1" points="981.8,562.6 939.5,513.5 
				1051.2,417.5 1093.4,466.6 981.8,562.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 995.688 510.1431)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1052.8577 435.7783)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 955.0271 522.2514)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1024.0308 520.7164)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1001.8933 489.4689)" class="st5 st6 st4">17</text>
		</g>
		<g id="A-18_00000057128899050409914040000012433409776313311160_" class="property__active" ng-class="arrecife.inmovablesClassList[119]" ng-click="arrecife.showPropertyData(63, '18')">
			<polyline id="AL-18_00000086659257534251835700000013109542918880458115_" class="property pb-sprite-2" points="939.5,513.5 897.3,464.3 
				1008.9,368.3 1051.2,417.5 939.5,513.5 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 953.5714 460.0003)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1010.6087 386.6505)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 912.7667 473.1217)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 981.4332 471.1852)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 958.7394 439.2955)" class="st5 st6 st4">18</text>
		</g>
		<g id="A-19_00000084496041061353568180000015875438505120699783_" class="property__active" ng-class="arrecife.inmovablesClassList[120]" ng-click="arrecife.showPropertyData(63, '19')">
			<polyline id="AL-19_00000016053658926830646140000009043208566119328175_" class="property pb-sprite-1" points="897.3,464.3 855,415.2 
				966.7,319.2 1008.9,368.3 897.3,464.3 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 912.7654 414.2029)"><tspan x="0" y="0" class="st2 st3 st4">27</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 968.3492 337.5149)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 870.5164 423.9873)"><tspan x="0" y="0" class="st2 st3 st4">11.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 939.3965 422.2997)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 917.0302 390.7944)" class="st5 st6 st4">19</text>
		</g>
		<g id="A-20_00000083047674353472715640000000751726572661452160_" class="property__active" ng-class="arrecife.inmovablesClassList[121]" ng-click="arrecife.showPropertyData(63, '20')">
			<polyline id="AL-20_00000160877003328592618060000013352571917084808879_" class="property pb-sprite-2" points="855,415.2 816.6,370.5 
				928.2,274.5 966.7,319.2 855,415.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 874.47 367.1964)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 928.0138 290.6119)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 830.1835 377.0861)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 896.8957 372.8887)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 877.5881 344.9341)" class="st5 st6 st4">20</text>
		</g>
		<g id="A-21_00000106142254829473306180000006933886110192149176_" class="property__active" ng-class="arrecife.inmovablesClassList[122]" ng-click="arrecife.showPropertyData(63, '21')">
			<polyline id="AL-21_00000096053567520814126900000009429523453295441814_" class="property pb-sprite-1" points="816.6,370.5 778.2,325.9 
				889.8,229.9 928.2,274.5 816.6,370.5 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 833.2515 320.1191)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 889.6011 245.9543)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 791.768 332.4243)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 858.8464 328.6385)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 842.1164 296.5467)" class="st5 st6 st4">21</text>
		</g>
		<g id="A-22_00000106861792325964732840000015942067435426333839_" class="property__active" ng-class="arrecife.inmovablesClassList[123]" ng-click="arrecife.showPropertyData(63, '22')">
			<polyline id="AL-22_00000039092392378345321020000006170071532176275348_" class="property pb-sprite-2" points="778.2,325.9 739.8,281.2 
				851.4,185.2 889.8,229.9 778.2,325.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 791.3973 277.5791)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 851.1948 201.2937)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 753.361 287.7618)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 820.0189 283.4979)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 799.0161 255.0978)" class="st5 st6 st4">22</text>
		</g>
		<g id="A-23_00000118375915185778637380000010194754959689660066_" class="property__active" ng-class="arrecife.inmovablesClassList[124]" ng-click="arrecife.showPropertyData(63, '23')">
			<polyline id="A-23_00000171720973561096718090000009211261348380399551_" class="property pb-sprite-1" points="739.8,281.2 701.4,236.6 
				813,140.5 851.4,185.2 739.8,281.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 755.5884 232.6936)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 812.7877 156.6287)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 714.9451 243.0992)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 782.3869 239.735)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 760.5997 210.4124)" class="st5 st6 st4">23</text>
		</g>
		<g id="A-24_00000028295963417223357890000009189609869041520054_" class="property__active" ng-class="arrecife.inmovablesClassList[125]" ng-click="arrecife.showPropertyData(63, '24')">
			<polyline id="AL-24_00000166677396064572373310000003060627715109147266_" class="property pb-sprite-2" points="701.4,236.6 663,191.9 
				774.6,95.9 813,140.5 701.4,236.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 717.1487 188.6327)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 774.373 112.4203)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 676.5388 198.4386)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 743.6355 195.1349)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 724.0757 166.4344)" class="st5 st6 st4">24</text>
		</g>
		<g id="A-25_00000090280030221132512780000008649817777818706820_" class="property__active" ng-class="arrecife.inmovablesClassList[126]" ng-click="arrecife.showPropertyData(63, '25')">
			<polyline id="AL-25_00000164516110022848299780000010638198635238181039_" class="property pb-sprite-1" points="663,191.9 624.5,147.2 
				736.2,51.2 774.6,95.9 663,191.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 679.3915 143.0672)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 735.965 67.3034)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 638.1328 153.7765)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 705.9118 150.8192)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 685.4598 121.5277)" class="st5 st6 st4">25</text>
		</g>
		<g id="A-26_00000162330487792324200910000008501122184152855725_"class="property__active" ng-class="arrecife.inmovablesClassList[127]" ng-click="arrecife.showPropertyData(63, '26')">
			<polyline id="AL-26_00000047777154022514898090000003543971436135157642_" class="property pb-sprite-2" points="624.5,147.2 586.1,102.6 
				697.8,6.6 736.2,51.2 624.5,147.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 646.7159 96.902)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 697.5502 22.6436)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 599.7177 109.1158)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 637.7911 71.0991)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 666.8792 106.9127)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 651.7393 74.6915)" class="st5 st6 st4">26</text>
			<g>
				<polyline class="st8" points="626.5,108.1 617,116.3 617.7,107.4 626.5,108.1 				"/>
				<polyline class="st9" points="626.5,108.1 625.8,116.9 617,116.3 626.5,108.1 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_A_00000010990662337557516620000006961065239560990615_">
			<line class="st11" x1="624.5" y1="147.2" x2="736.2" y2="51.2"/>
			<line class="st11" x1="663" y1="191.9" x2="774.6" y2="95.9"/>
			<line class="st11" x1="701.4" y1="236.6" x2="813" y2="140.5"/>
			<line class="st11" x1="739.8" y1="281.2" x2="851.4" y2="185.2"/>
			<line class="st11" x1="778.2" y1="325.9" x2="889.8" y2="229.9"/>
			<line class="st11" x1="816.6" y1="370.5" x2="928.2" y2="274.5"/>
			<line class="st11" x1="855" y1="415.2" x2="966.7" y2="319.2"/>
			<line class="st11" x1="897.3" y1="464.3" x2="1008.9" y2="368.3"/>
			<line class="st11" x1="939.5" y1="513.5" x2="1051.2" y2="417.5"/>
			<line class="st11" x1="981.8" y1="562.6" x2="1094.4" y2="465.7"/>
			<line class="st11" x1="1024" y1="611.7" x2="1135.7" y2="515.7"/>
			<line class="st11" x1="1066.3" y1="660.9" x2="1177.9" y2="564.8"/>
			<line class="st11" x1="1108.5" y1="710" x2="1220.2" y2="614"/>
			<line class="st11" x1="1171.3" y1="852.4" x2="1313.5" y2="898.2"/>
			<line class="st11" x1="1138.8" y1="953.3" x2="1279" y2="998.5"/>
			<line class="st11" x1="1073.8" y1="1155.2" x2="1214" y2="1200.3"/>
			<line class="st11" x1="1057.6" y1="1205.6" x2="1197.8" y2="1250.8"/>
			<line class="st11" x1="1155.1" y1="902.8" x2="1295.2" y2="948"/>
			<line class="st11" x1="1008.8" y1="1357" x2="1149" y2="1402.2"/>
			<line class="st11" x1="1187.6" y1="801.9" x2="1364.1" y2="781.4"/>
			<line class="st11" x1="1150.8" y1="759.1" x2="1262.4" y2="663.1"/>
			<line class="st11" x1="1122.6" y1="1003.8" x2="1262.8" y2="1048.9"/>
			<line class="st11" x1="1106.3" y1="1054.2" x2="1246.5" y2="1099.4"/>
			<line class="st11" x1="1041.3" y1="1256.1" x2="1181.5" y2="1301.2"/>
			<line class="st11" x1="1025.1" y1="1306.6" x2="1165.3" y2="1351.7"/>
			<line class="st11" x1="1090.1" y1="1104.7" x2="1230.3" y2="1149.8"/>
			<line class="st11" x1="1025.4" y1="610.6" x2="1137" y2="514.6"/>
			<line class="st11" x1="1187.6" y1="801.9" x2="1364.1" y2="781.4"/>
		</g>
	</g>
	<g id="ISLA_B">
		<g id="B-27"class="property__active" ng-class="arrecife.inmovablesClassList[128]" ng-click="arrecife.showPropertyData(63, '27')">
			<polyline id="AL-27" class="property pb-sprite-2" points="640.6,250 603.8,281.6 507.8,169.9 544.6,138.3 640.6,250 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 525.7659 168.1409)"><tspan x="0" y="0" class="st2 st3 st4">8.2</tspan><tspan x="16" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 614.5126 269.2078)"><tspan x="0" y="0" class="st2 st3 st4">8.2</tspan><tspan x="16" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 543.0795 198.4374)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.95 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 572.9255 188.6327)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 567.6799 206.1874)" class="st5 st6 st4">27</text>
			<g>
				<polyline class="st8" points="613.6,255.4 605.5,246 614.3,246.6 613.6,255.4 				"/>
				<polyline class="st9" points="613.6,255.4 604.8,254.8 605.5,246 613.6,255.4 				"/>
			</g>
		</g>
		<g id="B-28"class="property__active" ng-class="arrecife.inmovablesClassList[129]" ng-click="arrecife.showPropertyData(63, '28')">
			<polyline id="BL-28" class="property pb-sprite-1" points="603.8,281.6 567,313.2 471,201.6 507.8,169.9 603.8,281.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 488.975 199.7786)"><tspan x="0" y="0" class="st2 st3 st4">8.2</tspan><tspan x="16" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 577.7211 300.846)"><tspan x="0" y="0" class="st2 st3 st4">8.2</tspan><tspan x="16" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 508.4679 229.141)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.95 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 537.4208 222.3757)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 532.9484 236.0522)" class="st5 st6 st4">28</text>
		</g>
		<g id="B-29" class="property__active" ng-class="arrecife.inmovablesClassList[130]" ng-click="arrecife.showPropertyData(63, '29')">
			<polyline id="BL-29" class="property pb-sprite-2" points="471,201.6 567,313.2 529.1,345.9 433,234.2 471,201.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 451.5985 231.9272)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 540.3445 332.9933)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 470.3683 259.8154)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 501.4173 256.0742)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 494.8702 268.8086)" class="st5 st6 st4">29</text>
		</g>
		<g id="B-30" class="property__active" ng-class="arrecife.inmovablesClassList[131]" ng-click="arrecife.showPropertyData(63, '30')">
			<polyline id="BL-30" class="property pb-sprite-1" points="433,234.2 529.1,345.9 491.1,378.5 395.1,266.9 433,234.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 413.6385 264.5785)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 502.3788 365.643)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 436.1716 293.2476)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 463.4769 288.6971)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 457.9787 300.5325)" class="st5 st6 st4">30</text>
		</g>
		<g id="B-31" class="property__active" ng-class="arrecife.inmovablesClassList[132]" ng-click="arrecife.showPropertyData(63, '31')">
			<polyline id="BL-31" class="property pb-sprite-2" points="395.1,266.9 491.1,378.5 453.1,411.2 357.1,299.5 395.1,266.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 375.6736 297.2249)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 464.4214 398.2908)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 393.9112 325.1539)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 424.5653 322.164)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 419.1045 334.1512)" class="st5 st6 st4">31</text>
		</g>
		<g id="B-32" class="property__active" ng-class="arrecife.inmovablesClassList[133]" ng-click="arrecife.showPropertyData(63, '32')">
			<polyline id="BL-32" class="property pb-sprite-1" points="357.1,299.5 453.1,411.2 415.2,443.8 319.2,332.2 357.1,299.5 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 337.7075 329.8698)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 426.4554 430.9395)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 357.2334 360.8078)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 386.5718 354.8388)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 381.8012 366.0402)" class="st5 st6 st4">32</text>
		</g>
		<g id="B-33_1_" class="property__active" ng-class="arrecife.inmovablesClassList[134]" ng-click="arrecife.showPropertyData(63, '33')">
			<polyline id="B-33" class="property pb-sprite-2" points="319.2,332.2 415.2,443.8 377.2,476.5 281.2,364.8 319.2,332.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 299.7474 362.5224)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 388.4912 463.584)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 320.9391 391.3831)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 350.3274 386.008)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 344.2885 398.3004)" class="st5 st6 st4">33</text>
		</g>
		<g id="B-34" class="property__active" ng-class="arrecife.inmovablesClassList[135]" ng-click="arrecife.showPropertyData(63, '34')">
			<polyline id="BL-34" class="property pb-sprite-1" points="281.2,364.8 377.2,476.5 339.3,509.1 243.2,397.5 281.2,364.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 261.7828 395.166)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 350.529 496.2308)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 279.8984 423.3295)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 310.8558 419.4455)"><tspan x="0" y="0" class="st2 st3 st12">25.0</tspan><tspan x="23" y="0" class="st2 st3 st12">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 305.3508 431.4411)" class="st5 st6 st12">34</text>
		</g>
		<g id="B-35" class="property__active" ng-class="arrecife.inmovablesClassList[136]" ng-click="arrecife.showPropertyData(63, '35')">
			<polyline id="BL-35" class="property pb-sprite-2" points="243.2,397.5 339.3,509.1 301.3,541.8 205.3,430.1 243.2,397.5 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 223.8245 427.8197)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 312.5674 528.8821)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 243.739 456.0143)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 274.4519 451.2608)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 267.8553 464.039)" class="st5 st6 st4">35</text>
		</g>
		<g id="B-36" class="property__active" ng-class="arrecife.inmovablesClassList[137]" ng-click="arrecife.showPropertyData(63, '36')">
			<polyline id="B-36_1_" class="property pb-sprite-1" points="205.3,430.1 301.3,541.8 263.3,574.4 167.3,462.8 205.3,430.1 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 186.1766 460.4659)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 274.9211 561.5294)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 206.5376 489.0906)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 237.4157 483.3827)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 230.5481 496.1243)" class="st5 st6 st4">36</text>
		</g>
		<g id="B-37" class="property__active" ng-class="arrecife.inmovablesClassList[138]" ng-click="arrecife.showPropertyData(63, '37')">
			<polyline id="BL-37" class="property pb-sprite-2" points="167.3,462.8 263.3,574.4 225.4,607.1 129.3,495.4 167.3,462.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 147.8958 493.1117)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 236.6434 594.1804)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 168.7421 522.3494)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 198.7855 516.3318)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 191.8118 529.4306)" class="st5 st6 st4">37</text>
		</g>
		<g id="B-38" class="property__active" ng-class="arrecife.inmovablesClassList[139]" ng-click="arrecife.showPropertyData(63, '38')">
			<polyline id="BL-38" class="property pb-sprite-1" points="129.3,495.4 225.4,607.1 187.4,639.7 91.4,528.1 129.3,495.4 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 109.932 525.7598)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 198.6809 626.8273)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 130.9117 560.4845)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 159.8744 549.7957)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 154.2059 561.7758)" class="st5 st6 st4">38</text>
		</g>
		<g id="B-39" class="property__active" ng-class="arrecife.inmovablesClassList[140]" ng-click="arrecife.showPropertyData(63, '39')">
			<polyline id="BL-39" class="property pb-sprite-2" points="91.4,528.1 187.4,639.7 149.4,672.4 53.4,560.7 91.4,528.1 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 71.9724 558.4094)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 160.7167 659.4744)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 91.3814 587.4797)"><tspan x="0" y="0" class="st2 st3 st4">21</tspan><tspan x="12.9" y="0" class="st2 st3 st4">2.50 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 122.5978 581.8586)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 115.3779 595.1697)" class="st5 st6 st4">39</text>
		</g>
		<g id="B-40" class="property__active" ng-class="arrecife.inmovablesClassList[141]" ng-click="arrecife.showPropertyData(63, '40')">
			<polyline id="BL-40" class="property pb-sprite-1" points="53.4,560.7 149.4,672.4 111.5,705 5.6,601.9 53.4,560.7 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 27.531 596.6326)"><tspan x="0" y="0" class="st2 st3 st4">10.6</tspan><tspan x="22.5" y="0" class="st2 st3 st4">2</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 122.5973 692.2598)"><tspan x="0" y="0" class="st2 st3 st4">8.5</tspan><tspan x="16" y="0" class="st2 st3 st4">7</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 58.0433 620.5052)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.16 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 88.2049 614.1844)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7157 0.6984 -0.6984 0.7157 52.2176 645.195)"><tspan x="0" y="0" class="st2 st3 st4">25.1</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="120.2,683.3 112,673.8 120.8,674.5 120.2,683.3 				"/>
				<polyline class="st9" points="120.2,683.3 111.3,682.6 112,673.8 120.2,683.3 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 80.5428 628.2371)" class="st5 st6 st4">40</text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_B">
			<line class="st11" x1="149.4" y1="672.4" x2="53.4" y2="560.7"/>
			<line class="st11" x1="187.4" y1="639.7" x2="91.4" y2="528.1"/>
			<line class="st11" x1="225.4" y1="607.1" x2="129.3" y2="495.4"/>
			<line class="st11" x1="263.3" y1="574.4" x2="167.3" y2="462.8"/>
			<line class="st11" x1="301.3" y1="541.8" x2="205.3" y2="430.1"/>
			<line class="st11" x1="339.3" y1="509.1" x2="243.2" y2="397.5"/>
			<line class="st11" x1="377.2" y1="476.5" x2="281.2" y2="364.8"/>
			<line class="st11" x1="415.2" y1="443.8" x2="319.2" y2="332.2"/>
			<line class="st11" x1="453.1" y1="411.2" x2="357.1" y2="299.5"/>
			<line class="st11" x1="491.1" y1="378.5" x2="395.1" y2="266.9"/>
			<line class="st11" x1="529.1" y1="345.9" x2="433" y2="234.2"/>
			<line class="st11" x1="567" y1="313.2" x2="471" y2="201.6"/>
			<line class="st11" x1="603.8" y1="281.6" x2="507.8" y2="169.9"/>
		</g>
	</g>
	<g id="ISLA_C" >
		<g id="C-41_00000151535083059222668680000016676254328735607688_" class="property__active" ng-class="arrecife.inmovablesClassList[142]" ng-click="arrecife.showPropertyData(63, '41')">
			<polyline id="CL-41_00000089562266617074165710000002258501638335700869_" class="property pb-sprite-1" points="261.2,648.5 291.9,684.3 
				180.2,780.3 149.5,744.6 261.2,648.5 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 262.5734 667.7145)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 210.9766 735.1447)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 160.7702 755.2645)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 203.8781 712.8221)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="267.9,679.7 258.4,687.8 259.1,679 267.9,679.7 				"/>
				<polyline class="st9" points="267.9,679.7 267.2,688.5 258.4,687.8 267.9,679.7 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 215.8878 717.5256)" class="st5 st6 st4">41</text>
		</g>
		<g id="C-42_00000170977881088912762890000003159606802101930895_" class="property__active" ng-class="arrecife.inmovablesClassList[143]" ng-click="arrecife.showPropertyData(63, '42')">
			<polyline id="CL-42_00000140706443018426164840000001388804883924499876_" class="property pb-sprite-2" points="291.9,684.3 322.6,720 211,816 
				180.2,780.3 291.9,684.3 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 293.3014 703.4448)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 241.7048 774.9005)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 191.5004 790.9955)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 234.4454 748.4613)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 249.0258 753.5838)" class="st5 st6 st4">42</text>
		</g>
		<g id="C-43_00000098905738875136739660000001264797967720163206_" class="property__active" ng-class="arrecife.inmovablesClassList[144]" ng-click="arrecife.showPropertyData(63, '43')">
			<polyline id="CL-43_00000054987415657031563960000012076805642595582651_" class="property pb-sprite-1" points="322.6,720 353.4,755.7 
				241.7,851.8 211,816 322.6,720 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 324.0292 739.174)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 269.2044 810.9078)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 222.2288 826.7255)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 266.9338 783.7168)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 277.8508 788.3188)" class="st5 st6 st4">43</text>
		</g>
		<g id="C-44_00000034794071289561626700000003823522002992524440_" class="property__active" ng-class="arrecife.inmovablesClassList[145]" ng-click="arrecife.showPropertyData(63, '44')">
			<polyline id="CL-44_00000076570354785734735710000004916406243857427608_" class="property pb-sprite-2" points="353.4,755.7 384.1,791.5 
				272.4,887.5 241.7,851.8 353.4,755.7 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 354.7544 774.9015)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 303.3895 843.4615)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 252.955 862.4535)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 297.4965 819.2545)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 308.8752 824.3931)" class="st5 st6 st4">44</text>
		</g>
		<g id="C-45_00000095300484488902191050000008047387592990830218_" class="property__active" ng-class="arrecife.inmovablesClassList[146]" ng-click="arrecife.showPropertyData(63, '45')">
			<polyline id="CL-45_00000016050760246165556900000008194944187250466185_" class="property pb-sprite-1" points="384.1,791.5 414.8,827.2 
				303.2,923.2 272.4,887.5 384.1,791.5 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 385.4828 810.6302)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 331.3996 881.2872)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 283.68 898.1786)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 328.4917 855.2946)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 339.8324 860.3887)" class="st5 st6 st4">45</text>
		</g>
		<g id="C-46_00000129192207416875381020000014300717724114627725_" class="property__active" ng-class="arrecife.inmovablesClassList[147]" ng-click="arrecife.showPropertyData(63, '46')">
			<polyline id="CL-46_00000102530801274947314490000007794980750380966330_" class="property pb-sprite-2" points="414.8,827.2 445.5,862.9 
				333.9,958.9 303.2,923.2 414.8,827.2 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 416.2114 846.3625)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 362.8494 915.0665)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 314.411 933.9139)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 359.5151 891.3698)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 369.6404 895.0451)" class="st5 st6 st4">46</text>
		</g>
		<g id="C-47_00000029017223967453380810000012771004862193208736_" class="property__active" ng-class="arrecife.inmovablesClassList[148]" ng-click="arrecife.showPropertyData(63, '47')">
			<polyline id="C-47_00000118386747135288971840000016104763759738453902_" class="property pb-sprite-1" points="445.5,862.9 476.3,898.6 
				364.6,994.7 333.9,958.9 445.5,862.9 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 446.9419 882.0881)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 392.8881 949.9265)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 345.1382 969.645)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 389.6869 926.4475)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 400.6648 931.1246)" class="st5 st6 st4">47</text>
		</g>
		<g id="C-48_00000155139832727930707890000005509067511767486108_" class="property__active" ng-class="arrecife.inmovablesClassList[149]" ng-click="arrecife.showPropertyData(63, '48')">
			<polyline id="CL-48_00000042709429319799137640000002350623021187849138_" class="property pb-sprite-2" points="476.3,898.6 507,934.4 
				395.3,1030.4 364.6,994.7 476.3,898.6 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 477.6729 917.8223)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 425.2042 989.5135)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 375.8652 1005.3659)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 420.4434 962.0042)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 432.5567 969.5744)" class="st5 st6 st4">48</text>
		</g>
		<g id="C-49_00000155138184975503972050000000176787360083164294_" class="property__active" ng-class="arrecife.inmovablesClassList[150]" ng-click="arrecife.showPropertyData(63, '49')">
			<polyline id="CL-49_00000150795589187687195170000012076443191320014737_" class="property pb-sprite-1" points="507,934.4 537.7,970.1 
				426.1,1066.1 395.3,1030.4 507,934.4 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 508.3968 953.5484)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 455.8568 1024.6461)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 406.5937 1041.0996)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 451.5965 998.4299)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 463.3263 1003.6639)" class="st5 st6 st4">49</text>
		</g>
		<g id="C-50_00000086664270814951941630000014049955090300246713_" class="property__active" ng-class="arrecife.inmovablesClassList[151]" ng-click="arrecife.showPropertyData(63, '50')">
			<polyline id="CL-50_00000012445487259078387910000004469495755727927730_" class="property pb-sprite-2" points="537.7,970.1 568.5,1005.8 
				456.8,1101.9 426.1,1066.1 537.7,970.1 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 539.1212 989.2869)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 488.1851 1058.9353)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 437.3209 1076.8331)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 482.4401 1033.9518)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 494.019 1039.3306)" class="st5 st6 st4">50</text>
		</g>
		<g id="C-51_00000005949010667621494000000000199888183685501062_" class="property__active" ng-class="arrecife.inmovablesClassList[152]" ng-click="arrecife.showPropertyData(63, '51')">
			<polyline id="CL-51_00000146457149386812574180000002495805000915420558_" class="property pb-sprite-1" points="568.5,1005.8 599.2,1041.6 
				487.5,1137.6 456.8,1101.9 568.5,1005.8 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 569.8482 1025.0154)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 516.9172 1094.3108)"><tspan x="0" y="0" class="st2 st3 st4">20</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 468.0476 1112.5632)"><tspan x="0" y="0" class="st2 st3 st4">8.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 512.3178 1068.7131)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 523.884 1074.4487)" class="st5 st6 st4">51</text>
		</g>
		<g id="C-52_00000181805500110684875330000018425737512272042673_" class="property__active" ng-class="arrecife.inmovablesClassList[153]" ng-click="arrecife.showPropertyData(63, '52')">
			<polyline id="CL-52_00000155857854443042876470000008461778313210116799_" class="property pb-sprite-2" points="599.2,1041.6 633.8,1081.8 
				522.1,1177.8 487.5,1137.6 599.2,1041.6 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 602.5012 1062.9814)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 553.3625 1133.142)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 500.7025 1150.5302)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 543.8871 1105.4253)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 558.1608 1113.0679)" class="st5 st6 st4">52</text>
		</g>
		<g id="C-53_00000039815032902640269780000003440337744975277993_" class="property__active" ng-class="arrecife.inmovablesClassList[154]" ng-click="arrecife.showPropertyData(63, '53')">
			<polyline id="CL-53_00000038388940849812179950000013580655271424429186_" class="property pb-sprite-1" points="633.8,1081.8 668.3,1122 
				556.7,1218 522.1,1177.8 633.8,1081.8 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 637.0848 1103.1846)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 585.0627 1173.288)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 535.285 1190.733)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 576.5754 1145.6298)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 591.1401 1151.3536)" class="st5 st6 st4">53</text>
		</g>
		<g id="C-54_00000170264176946204278940000014247144926140553657_" class="property__active" ng-class="arrecife.inmovablesClassList[155]" ng-click="arrecife.showPropertyData(63, '54')">
			<polyline id="CL-54_00000052083770008213411960000004625367610039323834_" class="property pb-sprite-2" points="668.3,1122 702.9,1162.2 
				591.2,1258.2 556.7,1218 668.3,1122 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 671.6487 1143.3777)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 619.5235 1212.3282)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 569.8454 1230.9329)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 611.1122 1185.7971)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 623.5527 1190.6586)" class="st5 st6 st4">54</text>
		</g>
		<g id="C-55_00000048494547635198112300000006203009689707720110_" class="property__active" ng-class="arrecife.inmovablesClassList[156]" ng-click="arrecife.showPropertyData(63, '55')">
			<polyline id="CL-55_00000128444082757301876740000004273134300299191213_" class="property pb-sprite-1" points="702.9,1162.2 737.5,1202.4 
				625.8,1298.4 591.2,1258.2 702.9,1162.2 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 706.2178 1183.5765)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 651.0966 1249.9143)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 604.4203 1271.1268)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 646.5242 1226.9585)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 659.3209 1229.4478)" class="st5 st6 st4">55</text>
		</g>
		<g id="C-56_00000119115868533220083530000004781566468447555743_" class="property__active" ng-class="arrecife.inmovablesClassList[157]" ng-click="arrecife.showPropertyData(63, '56')">
			<polyline id="CL-56_00000022561298564895183480000013243200431183924407_" class="property pb-sprite-2" points="737.5,1202.4 772,1242.6 
				660.4,1338.6 625.8,1298.4 737.5,1202.4 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 740.7928 1223.7729)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 685.4525 1293.3197)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 638.9825 1311.3188)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 680.5234 1266.496)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 693.8185 1272.3627)" class="st5 st6 st4">56</text>
		</g>
		<g id="C-57_00000111187198514588716380000001356668607310646150_" class="property__active" ng-class="arrecife.inmovablesClassList[158]" ng-click="arrecife.showPropertyData(63, '57')">
			<polyline id="CL-57_00000143607089754664720390000002545376915552247965_" class="property pb-sprite-1" points="772,1242.6 806.6,1282.8 
				695,1378.8 660.4,1338.6 772,1242.6 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 775.356 1263.9653)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 722.2969 1334.9486)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 673.5545 1351.5204)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 715.7024 1307.3966)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 728.0452 1312.1527)" class="st5 st6 st4">57</text>
		</g>
		<g id="C-58_00000006675289251575093080000007673073090380004755_" class="property__active" ng-class="arrecife.inmovablesClassList[159]" ng-click="arrecife.showPropertyData(63, '58')">
			<polyline id="CL-58_00000015317324653906921420000002559649048361050016_" class="property pb-sprite-2" points="806.6,1282.8 841.2,1322.9 
				729.5,1419 695,1378.8 806.6,1282.8 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 809.9254 1304.1641)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 759.3054 1372.8792)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">5.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 708.1274 1391.7147)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 750.0167 1347.3136)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 763.4751 1353.3618)" class="st5 st6 st4">58</text>
		</g>
		<g id="C-59_00000038385791514465038620000003964956219664034720_"  class="property__active" ng-class="arrecife.inmovablesClassList[160]" ng-click="arrecife.showPropertyData(63, '59')">
			<polyline id="CL-59_00000032612930404877828800000016331770318651973530_" class="property pb-sprite-1" points="729.5,1419 841.2,1322.9 
				875.7,1363.1 769.6,1454.4 767.5,1456.2 761.5,1456.1 759.9,1454.3 729.5,1419 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 844.4882 1344.3478)"><tspan x="0" y="0" class="st2 st3 st4">9.0</tspan><tspan x="16" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 793.7003 1411.6493)"><tspan x="0" y="0" class="st2 st3 st4">22</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.67 m2</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 813.0098 1415.5416)"><tspan x="0" y="0" class="st2 st3 st4">24.2</tspan><tspan x="22.5" y="0" class="st2 st3 st4">2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 736.8225 1424.516)"><tspan x="0" y="0" class="st2 st3 st4">8.3</tspan><tspan x="16" y="0" class="st2 st3 st4">2</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 784.2059 1387.0574)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.9999 1.046995e-02 -1.046995e-02 0.9999 753.3101 1447.7435)"><tspan x="0" y="0" class="st2 st3 st13">1.0</tspan><tspan x="16" y="0" class="st2 st3 st13">3</tspan></text>
			<g>
				<polyline class="st8" points="846.1,1352.1 836.7,1360.2 837.3,1351.4 846.1,1352.1 				"/>
				<polyline class="st9" points="846.1,1352.1 845.5,1360.9 836.7,1360.2 846.1,1352.1 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 797.8636 1393.3438)" class="st5 st6 st4">59</text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_C_00000087413860892664482350000014455511303303060899_">
			<line class="st11" x1="660.4" y1="1338.6" x2="772" y2="1242.6"/>
			<line class="st11" x1="625.8" y1="1298.4" x2="737.5" y2="1202.4"/>
			<line class="st11" x1="591.2" y1="1258.2" x2="702.9" y2="1162.2"/>
			<line class="st11" x1="556.7" y1="1218" x2="668.3" y2="1122"/>
			<line class="st11" x1="522.1" y1="1177.8" x2="633.8" y2="1081.8"/>
			<line class="st11" x1="487.5" y1="1137.6" x2="599.2" y2="1041.6"/>
			<line class="st11" x1="456.8" y1="1101.9" x2="568.5" y2="1005.8"/>
			<line class="st11" x1="426.1" y1="1066.1" x2="537.7" y2="970.1"/>
			<line class="st11" x1="395.3" y1="1030.4" x2="507" y2="934.4"/>
			<line class="st11" x1="364.6" y1="994.7" x2="476.3" y2="898.6"/>
			<line class="st11" x1="333.9" y1="958.9" x2="445.5" y2="862.9"/>
			<line class="st11" x1="303.2" y1="923.2" x2="414.8" y2="827.2"/>
			<line class="st11" x1="272.4" y1="887.5" x2="384.1" y2="791.5"/>
			<line class="st11" x1="241.7" y1="851.8" x2="353.4" y2="755.7"/>
			<line class="st11" x1="211" y1="816" x2="322.6" y2="720"/>
			<line class="st11" x1="180.2" y1="780.3" x2="291.9" y2="684.3"/>
			<line class="st11" x1="695" y1="1378.8" x2="806.6" y2="1282.8"/>
			<line class="st11" x1="729.2" y1="1419.3" x2="840.8" y2="1323.2"/>
			<line class="st11" x1="767.5" y1="1456.2" x2="875.7" y2="1363.1"/>
			<line class="st11" x1="767.5" y1="1456.2" x2="875.7" y2="1363.1"/>
		</g>
	</g>
	<g id="ISLA_D">
		<g id="D-60" class="property__active" ng-class="arrecife.inmovablesClassList[161]" ng-click="arrecife.showPropertyData(63, '60')">
			<polyline id="DL-60" class="property pb-sprite-1" points="949.4,1138.9 993,1189.6 881.3,1285.6 837.8,1235 949.4,1138.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 903.3943 1235.9902)"><tspan x="0" y="0" class="st2 st3 st4">28</tspan><tspan x="12.9" y="0" class="st2 st3 st4">3.39 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 955.2595 1164.2129)"><tspan x="0" y="0" class="st2 st3 st4">11.3</tspan><tspan x="22.5" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 858.246 1247.6461)"><tspan x="0" y="0" class="st2 st3 st4">11.3</tspan><tspan x="22.5" y="0" class="st2 st3 st4">4</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 893.1445 1202.3571)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 925.8629 1240.3967)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 906.0402 1208.2676)" class="st5 st6 st4">60</text>
			<g>
				<polyline class="st8" points="877.3,1235.8 867.8,1244 868.4,1235.2 877.3,1235.8 				"/>
				<polyline class="st9" points="877.3,1235.8 876.6,1244.6 867.8,1244 877.3,1235.8 				"/>
			</g>
		</g>
		<g id="D-61" class="property__active" ng-class="arrecife.inmovablesClassList[162]" ng-click="arrecife.showPropertyData(63, '61')">
			<polyline id="DL-61" class="property pb-sprite-2" points="911,1094.3 949.4,1138.9 837.8,1235 799.4,1190.3 911,1094.3 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 861.5958 1188.2833)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 914.2794 1116.5673)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 817.2675 1199.9991)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 855.6457 1158.7515)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 868.9044 1165.0905)" class="st5 st6 st4">61</text>
			<g>
				<polyline class="st8" points="843.5,1194.5 834,1202.6 834.7,1193.8 843.5,1194.5 				"/>
				<polyline class="st9" points="843.5,1194.5 842.8,1203.3 834,1202.6 843.5,1194.5 				"/>
			</g>
		</g>
		<g id="D-62" class="property__active" ng-class="arrecife.inmovablesClassList[163]" ng-click="arrecife.showPropertyData(63, '62')">
			<polyline id="DL-62" class="property pb-sprite-1" points="872.6,1049.6 911,1094.3 799.4,1190.3 760.9,1145.6 872.6,1049.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 823.7648 1143.1296)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 875.8643 1071.9041)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 778.8628 1155.3385)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 815.0245 1111.5186)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 830.4995 1120.4287)" class="st5 st6 st4">62</text>
			<g>
				<polyline class="st8" points="808.5,1148.8 799,1156.9 799.7,1148.1 808.5,1148.8 				"/>
				<polyline class="st9" points="808.5,1148.8 807.8,1157.6 799,1156.9 808.5,1148.8 				"/>
			</g>
		</g>
		<g id="D-63" class="property__active" ng-class="arrecife.inmovablesClassList[164]" ng-click="arrecife.showPropertyData(63, '63')">
			<polyline id="DL-63" class="property pb-sprite-2" points="834.2,1004.9 872.6,1049.6 760.9,1145.6 722.5,1101 834.2,1004.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 787.1988 1100.9703)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 837.4567 1027.2394)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 740.4446 1110.6726)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 777.6897 1068.1055)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 792.0815 1075.7653)" class="st5 st6 st4">63</text>
			<g>
				<polyline class="st8" points="766.5,1105 757,1113.1 757.7,1104.3 766.5,1105 				"/>
				<polyline class="st9" points="766.5,1105 765.9,1113.8 757,1113.1 766.5,1105 				"/>
			</g>
		</g>
		<g id="D-64" class="property__active" ng-class="arrecife.inmovablesClassList[165]" ng-click="arrecife.showPropertyData(63, '64')">
			<polyline id="DL-64" class="property pb-sprite-1" points="795.8,960.3 834.2,1004.9 722.5,1101 684.1,1056.3 795.8,960.3 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 749.8593 1056.0745)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 799.0519 982.5801)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 702.0393 1066.0126)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 740.3242 1024.6519)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 753.6791 1031.1066)" class="st5 st6 st4">64</text>
			<g>
				<polyline class="st8" points="728.4,1060.7 719,1068.9 719.6,1060.1 728.4,1060.7 				"/>
				<polyline class="st9" points="728.4,1060.7 727.8,1069.5 719,1068.9 728.4,1060.7 				"/>
			</g>
		</g>
		<g id="D-65" class="property__active" ng-class="arrecife.inmovablesClassList[166]" ng-click="arrecife.showPropertyData(63, '65')">
			<polyline id="DL-65" class="property pb-sprite-2" points="757.4,915.6 795.8,960.3 684.1,1056.3 645.7,1011.6 757.4,915.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 705.8184 1011.4612)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 760.6358 937.9601)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 663.6324 1021.3499)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 703.6848 982.0551)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 715.2709 986.4411)" class="st5 st6 st4">65</text>
			<g>
				<polyline class="st8" points="690.5,1016.6 681,1024.7 681.7,1015.9 690.5,1016.6 				"/>
				<polyline class="st9" points="690.5,1016.6 689.8,1025.4 681,1024.7 690.5,1016.6 				"/>
			</g>
		</g>
		<g id="D-66" class="property__active" ng-class="arrecife.inmovablesClassList[167]" ng-click="arrecife.showPropertyData(63, '66')">
			<polyline id="DL-66" class="property pb-sprite-1" points="719,871 757.4,915.6 645.7,1011.6 607.3,967 719,871 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 673.5544 972.1034)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 722.2291 893.2626)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 625.2169 976.687)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 662.1952 933.8159)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 676.8546 941.7788)" class="st5 st6 st4">66</text>
			<g>
				<polyline class="st8" points="651.5,971.2 642,979.3 642.6,970.5 651.5,971.2 				"/>
				<polyline class="st9" points="651.5,971.2 650.8,980 642,979.3 651.5,971.2 				"/>
			</g>
		</g>
		<g id="D-67" class="property__active" ng-class="arrecife.inmovablesClassList[168]" ng-click="arrecife.showPropertyData(63, '67')">
			<polyline id="DL-67" class="property pb-sprite-2" points="680.5,826.3 719,871 607.3,967 568.9,922.3 680.5,826.3 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 633.7682 920.4955)"><tspan x="0" y="0" class="st2 st3 st4">25</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 683.8224 848.5971)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 586.8131 932.0268)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 624.4223 889.8871)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 638.4499 897.1182)" class="st5 st6 st4">67</text>
			<g>
				<polyline class="st8" points="612.1,925.4 602.6,933.6 603.3,924.8 612.1,925.4 				"/>
				<polyline class="st9" points="612.1,925.4 611.5,934.3 602.6,933.6 612.1,925.4 				"/>
			</g>
		</g>
		<g id="D-68" class="property__active" ng-class="arrecife.inmovablesClassList[169]" ng-click="arrecife.showPropertyData(63, '68')">
			<polyline id="DL-68" class="property pb-sprite-1" points="830.9,697 942.5,601 980,644.6 868.4,740.6 830.9,697 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 892.1319 695.0508)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 846.4744 710.8152)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 948.8076 622.811)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 882.2553 667.7152)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="951.2,637.7 941.8,645.8 942.4,637 951.2,637.7 				"/>
				<polyline class="st9" points="951.2,637.7 950.6,646.5 941.8,645.8 951.2,637.7 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 899.0944 673.1424)" class="st5 st6 st4">68</text>
		</g>
		<g id="D-69" class="property__active" ng-class="arrecife.inmovablesClassList[170]" ng-click="arrecife.showPropertyData(63, '69')">
			<polyline id="DL-69" class="property pb-sprite-2" points="868.4,740.6 980,644.6 1017.5,688.2 905.8,784.2 868.4,740.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 931.9767 733.465)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 883.9645 754.4064)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 986.2972 666.4012)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 921.4487 710.8149)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="988.7,681.3 979.3,689.4 979.9,680.6 988.7,681.3 				"/>
				<polyline class="st9" points="988.7,681.3 988.1,690.1 979.3,689.4 988.7,681.3 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 934.7238 715.3984)" class="st5 st6 st4">69</text>
		</g>
		<g id="D-70" class="property__active" ng-class="arrecife.inmovablesClassList[171]" ng-click="arrecife.showPropertyData(63, '70')">
			<polyline id="DL-70" class="property pb-sprite-1" points="905.8,784.2 1017.5,688.2 1055,731.8 943.3,827.8 905.8,784.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 969.5793 776.9931)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 921.449 797.9882)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1023.7736 709.9875)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 961.6717 753.5828)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="1026.2,724.9 1016.7,733 1017.4,724.2 1026.2,724.9 				"/>
				<polyline class="st9" points="1026.2,724.9 1025.6,733.7 1016.7,733 1026.2,724.9 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 974.7679 759.243)" class="st5 st6 st4">70</text>
		</g>
		<g id="D-71" class="property__active" ng-class="arrecife.inmovablesClassList[172]" ng-click="arrecife.showPropertyData(63, '71')">
			<polyline id="DL-71" class="property pb-sprite-2" points="943.3,827.8 1055,731.8 1092.5,775.4 980.8,871.4 943.3,827.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1006.6517 823.4851)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 958.94 841.5812)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1061.2676 753.583)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 997.1687 795.3298)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="1063.7,768.5 1054.2,776.6 1054.9,767.8 1063.7,768.5 				"/>
				<polyline class="st9" points="1063.7,768.5 1063,777.3 1054.2,776.6 1063.7,768.5 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1012.492 803.413)" class="st5 st6 st4">71</text>
		</g>
		<g id="D-72" class="property__active" ng-class="arrecife.inmovablesClassList[173]" ng-click="arrecife.showPropertyData(63, '72')">
			<polyline id="DL-72" class="property pb-sprite-1" points="1092.5,775.4 1126,814.4 1122.4,825.4 1018.3,915 980.8,871.4 1092.5,775.4 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1046.6073 865.3863)"><tspan x="0" y="0" class="st2 st3 st4">24</tspan><tspan x="12.9" y="0" class="st2 st3 st4">3.12 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 996.4201 885.2067)"><tspan x="0" y="0" class="st2 st3 st4">9.7</tspan><tspan x="16" y="0" class="st2 st3 st4">6</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 1090.6199 789.9484)"><tspan x="0" y="0" class="st2 st3 st4">8.7</tspan><tspan x="16" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1035.9335 838.5011)"><tspan x="0" y="0" class="st2 st3 st4">25.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1061.0403 875.2975)"><tspan x="0" y="0" class="st2 st3 st4">23.3</tspan><tspan x="22.5" y="0" class="st2 st3 st4">2</tspan></text>
			<text transform="matrix(0.3074 -0.9516 0.9516 0.3074 1115.8446 829.5118)"><tspan x="0" y="0" class="st2 st3 st4">1.9</tspan><tspan x="16" y="0" class="st2 st3 st4">7</tspan></text>
			<g>
				<polyline class="st8" points="1101.2,812.1 1091.7,820.2 1092.4,811.4 1101.2,812.1 				"/>
				<polyline class="st9" points="1101.2,812.1 1100.5,820.9 1091.7,820.2 1101.2,812.1 				"/>
			</g>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 1051.0251 846.397)" class="st5 st6 st4">72</text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_D">
			<line class="st11" x1="680.5" y1="826.3" x2="993" y2="1189.6"/>
			<line class="st11" x1="868.4" y1="740.6" x2="980" y2="644.6"/>
			<line class="st11" x1="905.8" y1="784.2" x2="1017.5" y2="688.2"/>
			<line class="st11" x1="943.3" y1="827.8" x2="1055" y2="731.8"/>
			<line class="st11" x1="980.8" y1="871.4" x2="1092.5" y2="775.4"/>
			<line class="st11" x1="881.3" y1="1285.6" x2="993" y2="1189.6"/>
			<line class="st11" x1="1018.3" y1="915" x2="1122.4" y2="825.4"/>
			<line class="st11" x1="837.8" y1="1235" x2="949.4" y2="1138.9"/>
			<line class="st11" x1="799.4" y1="1190.3" x2="911" y2="1094.3"/>
			<line class="st11" x1="760.9" y1="1145.6" x2="872.6" y2="1049.6"/>
			<line class="st11" x1="722.5" y1="1101" x2="834.2" y2="1004.9"/>
			<line class="st11" x1="684.1" y1="1056.3" x2="795.8" y2="960.3"/>
			<line class="st11" x1="645.7" y1="1011.6" x2="757.4" y2="915.6"/>
			<line class="st11" x1="607.3" y1="967" x2="719" y2="871"/>
			<line class="st11" x1="837.8" y1="1235" x2="949.4" y2="1138.9"/>
			<line class="st14" x1="830.9" y1="697" x2="1018.3" y2="915"/>
		</g>
	</g>
	<g id="ISLA_E">
		<g id="E-73_00000047739045831437601640000014130207887048164756_" class="property__active" ng-class="arrecife.inmovablesClassList[174]" ng-click="arrecife.showPropertyData(63, '73')">
			<polyline id="EL-73_00000119107528329443075800000009629130560768752552_" class="property pb-sprite-2" points="533.2,880.8 417.9,746.8 
				462.6,708.4 577.8,842.4 533.2,880.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 438.3827 743.0606)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 541.5845 863.0616)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 479.2233 784.8643)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 470.1613 803.4135)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 503.9464 774.3585)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="540.6,851 532.4,841.5 541.2,842.2 540.6,851 				"/>
				<polyline class="st9" points="540.6,851 531.8,850.3 532.4,841.5 540.6,851 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 496.3936 785.0134)" class="st5 st6 st4">73</text>
		</g>
		<g id="E-74_00000100361575626073946060000008057397400189171372_" class="property__active" ng-class="arrecife.inmovablesClassList[175]" ng-click="arrecife.showPropertyData(63, '74')">
			<polyline id="EL-74_00000106835206377517885510000012434190502553099665_" class="property pb-sprite-1" points="577.8,842.4 462.6,708.4 
				507.3,670 622.5,804 577.8,842.4 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 484.5443 704.6531)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 586.2496 824.6557)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 515.5021 740.8796)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 548.9586 736.9413)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 541.6443 747.3839)" class="st5 st6 st4">74</text>
		</g>
		<g id="E-75_00000178171461678452051940000009741564747736021687_" class="property__active" ng-class="arrecife.inmovablesClassList[176]" ng-click="arrecife.showPropertyData(63, '75')">
			<polyline id="EL-75_00000166668287345653721720000007547650239425814452_" class="property pb-sprite-2" points="622.5,804 507.3,670 551.9,631.6 
				667.2,765.6 622.5,804 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 529.2059 666.2425)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 632.409 786.2476)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 559.5161 702.8607)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 593.6916 698.4566)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 585.1978 709.9296)" class="st5 st6 st4">75</text>
		</g>
		<g id="E-76_00000171704603993821648770000007452008212168360576_" class="property__active" ng-class="arrecife.inmovablesClassList[177]" ng-click="arrecife.showPropertyData(63, '76')">
			<polyline id="EL-76_00000175291547583765337900000005048319437494878370_" class="property pb-sprite-1" points="667.2,765.6 551.9,631.6 
				596.6,593.2 711.8,727.1 667.2,765.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 573.8592 627.8338)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 677.0726 747.839)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 606.9985 663.8433)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 637.7929 660.5326)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="678.1,732.7 669.9,723.2 678.7,723.9 678.1,732.7 				"/>
				<polyline class="st9" points="678.1,732.7 669.3,732.1 669.9,723.2 678.1,732.7 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 630.7542 670.7495)" class="st5 st6 st4">76</text>
		</g>
		<g id="E-77_00000103955715768117370780000008138407922153818788_" class="property__active" ng-class="arrecife.inmovablesClassList[178]" ng-click="arrecife.showPropertyData(63, '77')">
			<polyline id="EL-77_00000076562950284624477690000000712812187897554847_" class="property pb-sprite-2" points="711.8,727.1 596.6,593.2 
				641.2,554.8 756.5,688.7 711.8,727.1 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 618.5207 589.422)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 721.7307 709.4237)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 650.4433 626.5233)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 682.9161 621.7314)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="721.9,695.1 713.7,685.6 722.5,686.2 721.9,695.1 				"/>
				<polyline class="st9" points="721.9,695.1 713.1,694.4 713.7,685.6 721.9,695.1 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 675.032 632.6677)" class="st5 st6 st4">77</text>
		</g>
		<g id="E-78_00000010275714553636923340000004173727604315710606_" class="property__active" ng-class="arrecife.inmovablesClassList[179]" ng-click="arrecife.showPropertyData(63, '78')">
			<polyline id="EL-78_00000106835100653804998440000015917491971257097637_" class="property pb-sprite-1" points="756.5,688.7 641.2,554.8 
				685.9,516.3 801.1,650.3 756.5,688.7 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 663.1835 551.0142)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 766.3867 671.0166)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 695.1932 590.437)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 728.936 582.1541)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="765.9,657.2 757.8,647.7 766.6,648.4 765.9,657.2 				"/> 	
				<polyline class="st9" points="765.9,657.2 757.1,656.5 757.8,647.7 765.9,657.2 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 720.0952 593.913)" class="st5 st6 st4">78</text>
		</g>
		<g id="E-79_00000099621019726439530560000003987772007007541156_" class="property__active" ng-class="arrecife.inmovablesClassList[180]" ng-click="arrecife.showPropertyData(63, '79')">
			<polyline id="EL-79_00000123419614365604240420000018227004313471018631_" class="property pb-sprite-2" points="685.9,516.3 738.7,470.9 
				854,604.9 801.1,650.3 685.9,516.3 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 711.9351 509.0942)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 815.1389 629.0986)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 755.3149 548.7164)"><tspan x="0" y="0" class="st2 st3 st4">35</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.86 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 779.4839 538.6854)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 771.7814 549.4583)" class="st5 st6 st4">79</text>
		</g>
		<g id="E-80_00000176736720471634743250000009160212327877598378_" class="property__active" ng-class="arrecife.inmovablesClassList[181]" ng-click="arrecife.showPropertyData(63, '80')">
			<polyline id="EL-80_00000165918068638511413390000016374037738592879016_" class="property pb-sprite-1" points="738.7,470.9 791.6,425.5 
				906.8,559.5 854,604.9 738.7,470.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 764.7615 463.661)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 867.9644 583.6624)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 800.8785 499.7756)"><tspan x="0" y="0" class="st2 st3 st4">35</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.86 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 832.4648 493.1186)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<g>
				<polyline class="st8" points="866.7,570.5 858.6,561 867.4,561.7 866.7,570.5 				"/>
				<polyline class="st9" points="866.7,570.5 857.9,569.8 858.6,561 866.7,570.5 				"/>
			</g>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 823.2905 505.1633)" class="st5 st6 st4">80</text>
		</g>
		<g id="E-81_00000139295837294082993110000004752305872292489642_" class="property__active" ng-class="arrecife.inmovablesClassList[182]" ng-click="arrecife.showPropertyData(63, '81')">
			<polyline id="EL-81_00000157280019404797358230000017589122034498472085_" class="property pb-sprite-2" points="623.5,336.9 676.3,291.5 
				791.6,425.5 738.7,470.9 623.5,336.9 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 650.2039 330.4566)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 753.3136 450.3488)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 685.8198 369.0625)"><tspan x="0" y="0" class="st2 st3 st4">35</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.86 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 717.2383 359.1331)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<polyline class="st8" points="665.1,336 657,326.6 665.8,327.2 665.1,336 			"/>
			<polyline class="st9" points="665.1,336 656.3,335.4 657,326.6 665.1,336 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 711.2618 371.543)" class="st5 st6 st4">81</text>
		</g>
		<g id="E-82_00000057116745864013500340000014059249618526852781_" class="property__active" ng-class="arrecife.inmovablesClassList[183]" ng-click="arrecife.showPropertyData(63, '182')">
			<polyline id="EL-82_00000014611916159190693210000006219781455485460375_" class="property pb-sprite-1" points="570.7,382.4 623.5,336.9 
				738.7,470.9 685.9,516.3 570.7,382.4 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 597.3795 375.8932)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 700.4871 495.7807)"><tspan x="0" y="0" class="st2 st3 st4">11.8</tspan><tspan x="22.5" y="0" class="st2 st3 st4">3</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 632.1331 409.6097)"><tspan x="0" y="0" class="st2 st3 st4">35</tspan><tspan x="12.9" y="0" class="st2 st3 st4">4.86 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 664.2544 404.7)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 658.1075 417.4347)" class="st5 st6 st4">82</text>
		</g>
		<g id="E-83_00000048491617241939745410000017441312044712770192_" class="property__active" ng-class="arrecife.inmovablesClassList[184]" ng-click="arrecife.showPropertyData(63, '83')">
			<polyline id="EL-83_00000111906722150388734970000018042044267212258186_" class="property pb-sprite-2" points="641.2,554.8 526,420.8 
				570.7,382.4 685.9,516.3 641.2,554.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 548.6295 417.813)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 651.7396 537.7062)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 587.0682 457.7346)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 613.7086 448.1681)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 608.5058 460.0937)" class="st5 st6 st4">83</text>
		</g>
		<g id="E-84_00000136408719340863755820000009877487231855673500_" class="property__active" ng-class="arrecife.inmovablesClassList[185]" ng-click="arrecife.showPropertyData(63, '84')">
			<polyline id="EL-84_00000136410511997837590800000001065752120449090480_" class="property pb-sprite-1" points="596.6,593.2 481.4,459.2 
				526,420.8 641.2,554.8 596.6,593.2 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 505.5688 456.2213)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 607.0739 576.1126)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 538.2824 493.7945)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 569.2729 487.7458)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 564.7965 499.9569)" class="st5 st6 st4">84</text>
		</g>
		<g id="E-85_00000086690127816547468110000002963851414891487639_" class="property__active" ng-class="arrecife.inmovablesClassList[186]" ng-click="arrecife.showPropertyData(63, '85')">
			<polyline id="EL-85_00000146481954364584986520000013438571310343528857_" class="property pb-sprite-2" points="551.9,631.6 436.7,497.6 
				481.4,459.2 596.6,593.2 551.9,631.6 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 459.3142 494.6327)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 562.4233 614.5241)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 495.0387 531.8233)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 522.5675 526.5513)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 519.0635 537.8968)" class="st5 st6 st4">85</text>
		</g>
		<g id="E-86_00000022520357245156287500000001939561658921546657_" class="property__active" ng-class="arrecife.inmovablesClassList[187]" ng-click="arrecife.showPropertyData(63, '86')">
			<polyline id="EL-86_00000061443527943466856440000001834352560156521138_" class="property pb-sprite-1" points="507.3,670 392,536 436.7,497.6 
				551.9,631.6 507.3,670 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 414.6526 533.0472)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 517.7598 652.9338)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 447.5612 569.522)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 478.4675 564.4742)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 473.2873 576.3932)" class="st5 st6 st4">86</text>
		</g>
		<g id="E-87_00000182496079901558050640000005480876035239137424_" class="property__active" ng-class="arrecife.inmovablesClassList[188]" ng-click="arrecife.showPropertyData(63, '87')">
			<polyline id="EL-87_00000068637673105746504850000017537759292940718734_" class="property pb-sprite-2" points="462.6,708.4 347.4,574.4 392,536 
				507.3,670 462.6,708.4 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 369.9863 571.4515)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 473.1006 691.3476)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 403.7367 607.7991)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 433.7181 602.9523)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 428.866 614.5915)" class="st5 st6 st4">87</text>
		</g>
		<g id="E-88_00000155137462270919825740000003466291440166068665_" class="property__active" ng-class="arrecife.inmovablesClassList[189]" ng-click="arrecife.showPropertyData(63, '88')">
			<polyline id="EL-88_00000156553083778287461030000017896047065791539640_" class="property pb-sprite-1" points="417.9,746.8 302.7,612.8 
				347.4,574.4 462.6,708.4 417.9,746.8 			"/>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 428.4364 729.754)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 358.5497 645.186)"><tspan x="0" y="0" class="st2 st3 st4">30</tspan><tspan x="12.9" y="0" class="st2 st3 st4">0.00 m2</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 356.4258 669.4271)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 390.2112 640.3733)"><tspan x="0" y="0" class="st2 st3 st4">30.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
			<polyline class="st8" points="343.8,619.8 335.6,610.4 344.4,611 343.8,619.8 			"/>
			<polyline class="st9" points="343.8,619.8 335,619.2 335.6,610.4 343.8,619.8 			"/>
			<text transform="matrix(0.6508 0.7593 -0.7593 0.6508 384.4754 653.7448)" class="st5 st6 st4">88</text>
			<text transform="matrix(0.7593 -0.6508 0.6508 0.7593 325.3269 609.8654)"><tspan x="0" y="0" class="st2 st3 st4">10.0</tspan><tspan x="22.5" y="0" class="st2 st3 st4">0</tspan></text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_E_00000024694888836487698440000008085841317483292329_">
			<line class="st11" x1="417.9" y1="746.8" x2="791.6" y2="425.5"/>
			<line class="st11" x1="347.4" y1="574.4" x2="577.8" y2="842.4"/>
			<line class="st11" x1="392" y1="536" x2="622.5" y2="804"/>
			<line class="st11" x1="436.7" y1="497.6" x2="667.2" y2="765.6"/>
			<line class="st11" x1="481.4" y1="459.2" x2="711.8" y2="727.1"/>
			<line class="st11" x1="526" y1="420.8" x2="756.5" y2="688.7"/>
			<line class="st11" x1="570.7" y1="382.4" x2="801.1" y2="650.3"/>
			<line class="st11" x1="685.9" y1="516.3" x2="791.6" y2="425.5"/>
			<line class="st11" x1="623.5" y1="336.9" x2="854" y2="604.9"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polyline class="st15" points="954.5,1434 936.8,1434 936.8,1410.4 954.5,1410.4 954.5,1434 	"/>
	<polyline class="st15" points="979.7,1413.9 990.6,1421.3 982.2,1421.3 981.8,1420.1 980.9,1419.2 979.7,1418.8 978.4,1419.2 
		977.5,1420.1 977.2,1421.3 968.8,1421.3 979.7,1413.9 	"/>
	<polyline class="st15" points="911.7,1431.9 900.8,1424.5 909.2,1424.5 909.5,1425.8 910.4,1426.7 911.7,1427 912.9,1426.7 
		913.8,1425.8 914.2,1424.5 922.5,1424.5 911.7,1431.9 	"/>
	<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 966 1428.3788)" class="st16 st6 st17">ACCESO</text>
	<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 900.5085 1423.1274)" class="st16 st6 st17">SALIDA</text>
	<g id="COLINDANCIA">
		<line class="st18" x1="1131.5" y1="1463.4" x2="1304.8" y2="925.7"/>
		<line class="st18" x1="1304.8" y1="925.9" x2="1314.8" y2="900.7"/>
		<line class="st18" x1="1314.8" y1="900.7" x2="1367.3" y2="779.7"/>
		<line class="st18" x1="1367.7" y1="782.1" x2="695.6" y2="0.5"/>
		<line class="st18" x1="699.5" y1="2.1" x2="2.4" y2="601.6"/>
		<line class="st18" x1="0.8" y1="600.3" x2="110.5" y2="707"/>
		<line class="st18" x1="110.5" y1="707" x2="134.4" y2="730.4"/>
		<line class="st18" x1="133.9" y1="729.9" x2="761.2" y2="1459.1"/>
		<line class="st18" x1="759.5" y1="1458.3" x2="891.4" y2="1459.6"/>
		<line class="st18" x1="999.8" y1="1460.7" x2="1133.6" y2="1461.8"/>
	</g>
</g>
</svg>

		</div>
     


</body>

</html>