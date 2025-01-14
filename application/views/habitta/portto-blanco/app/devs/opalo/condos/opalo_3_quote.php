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

<body ng-controller="PBBOpaloQuoteCtrl as opalo">

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


	<div class="modal-dialog" ng-class="opalo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="opalo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="opalo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{opalo.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{opalo.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{opalo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{opalo.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{opalo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{opalo.month}} y paga la primera mensualidad hasta {{opalo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{opalo.month + ' ' + opalo.year}}</p>
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
					<h1 class="center-align">Opalo 3</h1>
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
<svg version="1.1" id="ÓPALO_II" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 563" style="enable-background:new 0 0 1366 563;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:4.8954px;}
	.st4{font-size:4.896px;}
	.st5{font-size:4.9452px;}
	.st6{fill:#FFBF00;}
	.st7{font-family:'CenturyGothic-Bold';}
	.st8{font-size:4.8956px;}
	.st9{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st10{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st12{font-size:4.9457px;}
	.st13{font-size:4.9463px;}
	.st14{font-size:4.8919px;}
	.st15{font-size:4.9489px;}
	.st16{font-size:4.9265px;}
	.st17{font-size:4.8945px;}
	.st18{font-size:4.9094px;}
	.st19{font-size:4.9375px;}
	.st20{font-size:4.9315px;}
	.st21{font-size:4.9093px;}
	.st22{fill:none;stroke:#FFFFFF;stroke-width:1.3125;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st23{font-size:4.2131px;}
	.st24{font-size:4.9343px;}
	.st25{font-size:4.941px;}
	.st26{font-size:4.9461px;}
	.st27{font-size:4.9464px;}
	.st28{font-size:4.8944px;}
	.st29{font-size:4.8946px;}
	.st30{font-size:4.9467px;}
	.st31{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
	.st32{fill:#002856;}
	.st33{font-size:4.8088px;}
	.st34{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#002856;stroke-width:2.625;stroke-miterlimit:10;}
</style>
<g id="ÓPALO">
	<g id="ISLA_A_00000038396921426971530870000012823950349844465581_">
		<g>
			
				<image style="overflow:visible;" width="1366" height="563" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/opalo/condos/opalo_3.jpg">
			</image>
			<g id="A-01_00000146485822040155812590000007862400329698800013_"  ng-class="opalo.inmovablesClassList[225]" ng-click="opalo.showPropertyData(67, '1')">
				<polyline id="L-A01_00000128480597117507330420000011717326016700443289_" class="property pb-sprite-1" points="154.85,450.75 76.76,470.54 
					69.04,442.01 146.7,420.63 154.85,450.75 				"/>
				<text transform="matrix(0.9796 -0.2468 0.2497 0.9683 103.6838 453.8463)" class="st1 st2 st3">201.44 m2</text>
				<text transform="matrix(0.974 -0.267 0.2701 0.9628 103.4115 437.8549)"><tspan x="0" y="0" class="st1 st2 st4">23.0</tspan><tspan x="9.46" y="0" class="st1 st2 st4">0</tspan></text>
				<text transform="matrix(0.2573 0.956 -0.9671 0.2544 143.9037 432.6843)"><tspan x="0" y="0" class="st1 st2 st5">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st5">0</tspan></text>
				<text transform="matrix(0.2573 0.956 -0.9671 0.2544 72.7374 451.5007)"><tspan x="0" y="0" class="st1 st2 st5">8.5</tspan><tspan x="6.81" y="0" class="st1 st2 st5">2</tspan></text>
				<text transform="matrix(0.9774 -0.2553 0.2582 0.9661 108.9786 447.1731)" class="st6 st7 st8">01</text>
				<g>
					<polyline class="st9" points="136.9,439.36 144.08,437.46 141.45,441.96 136.9,439.36 					"/>
					<polyline class="st10" points="136.9,439.36 139.53,434.86 144.08,437.46 136.9,439.36 					"/>
				</g>
			</g>
			<g id="A-02_00000141433420742772221970000006401606457861795738_" ng-class="opalo.inmovablesClassList[226]" ng-click="opalo.showPropertyData(67, '2')">
				<polyline id="L-A02_00000008850141752413762310000018350048799719018641_" class="property pb-sprite-2" points="96.77,559.3 90.73,529.58 
					84.07,499.98 76.76,470.54 154.85,450.75 161.97,479.35 96.77,559.3 				"/>
				<text transform="matrix(0.9796 -0.2468 0.2497 0.9683 112.1132 491.705)" class="st1 st2 st3">398.23 m2</text>
				<text transform="matrix(0.9796 -0.2468 0.2497 0.9683 111.3559 467.9588)"><tspan x="0" y="0" class="st1 st2 st3">23.0</tspan><tspan x="9.46" y="0" class="st1 st2 st3">0</tspan></text>
				<text transform="matrix(0.2387 0.9606 -0.9718 0.2359 151.5513 461.8871)"><tspan x="0" y="0" class="st1 st2 st12">8.5</tspan><tspan x="6.81" y="0" class="st1 st2 st12">0</tspan></text>
				<text transform="matrix(0.2166 0.9656 -0.9768 0.2141 87.0861 508.634)"><tspan x="0" y="0" class="st1 st2 st13">26.2</tspan><tspan x="9.55" y="0" class="st1 st2 st13">5</tspan></text>
				<text transform="matrix(0.9796 -0.2468 0.2497 0.9683 116.9464 483.8033)" class="st6 st7 st3">02</text>
				<g>
					<polyline class="st9" points="144.45,468.44 151.67,466.69 148.95,471.13 144.45,468.44 					"/>
					<polyline class="st10" points="144.45,468.44 147.17,464 151.67,466.69 144.45,468.44 					"/>
				</g>
			</g>
			<g id="A-03_00000052790487837032886300000011169357995362484884_" ng-class="opalo.inmovablesClassList[227]" ng-click="opalo.showPropertyData(67, '3')">
				<polyline id="L-A03_00000139991356001245320560000016059766931024057506_" class="property pb-sprite-1" points="190.33,558.94 96.77,559.3 
					161.97,479.35 190.01,479.24 190.33,558.94 				"/>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 137.3481 557.4117)"><tspan x="0" y="0" class="st1 st2 st14">26.6</tspan><tspan x="9.45" y="0" class="st1 st2 st14">9</tspan></text>
				<text transform="matrix(-0.038 0.9878 -0.9993 -0.038 166.1103 503.9847)" class="st1 st2 st15">398.93 m2</text>
				<text transform="matrix(0.6308 -0.7728 0.7818 0.6236 129.7866 527.4684)"><tspan x="0" y="0" class="st1 st2 st16">29.6</tspan><tspan x="9.52" y="0" class="st1 st2 st16">4</tspan></text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 184.8333 513.0055)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 156.6661 516.3312)" class="st6 st7 st15">03</text>
				<g>
					<polyline class="st9" points="176.05,493.57 176.02,486.23 179.75,489.88 176.05,493.57 					"/>
					<polyline class="st10" points="176.05,493.57 172.31,489.92 176.02,486.23 176.05,493.57 					"/>
				</g>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 201.2715 557.1639)"><tspan x="0" y="0" class="st1 st2 st14">9.0</tspan><tspan x="6.73" y="0" class="st1 st2 st14">0</tspan></text>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 171.1877 484.5114)"><tspan x="0" y="0" class="st1 st2 st14">8.0</tspan><tspan x="6.73" y="0" class="st1 st2 st14">0</tspan></text>
			</g>
			<g id="A-04_00000013914845599839686540000003912993649641535118_" ng-class="opalo.inmovablesClassList[228]" ng-click="opalo.showPropertyData(67, '4')">
				<polyline id="L-A04_00000022528988814206019860000009463793726927763845_" class="property pb-sprite-2" points="190.01,479.24 221.56,479.12 
					221.88,558.82 190.33,558.94 190.01,479.24 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 216.3809 512.8849)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 201.2555 506.1461)" class="st1 st2 st15">207.00 m2</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 201.1046 556.3236)" class="st1 st2 st17">9.00</text>
				</g>
				<g>
					<text transform="matrix(1.0106 0 0 1 201.1046 483.7728)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 207.0844 516.333)" class="st6 st7 st15">04</text>
				<g>
					<polyline class="st9" points="207.59,493.57 207.57,486.23 211.3,489.88 207.59,493.57 					"/>
					<polyline class="st10" points="207.59,493.57 203.86,489.92 207.57,486.23 207.59,493.57 					"/>
				</g>
			</g>
			<g id="A-05_00000047050087504725858220000004105170047600537747_" ng-class="opalo.inmovablesClassList[229]" ng-click="opalo.showPropertyData(67, '5')">
				<polyline id="L-A05_00000121245765078728490540000014305431585043244182_" class="property pb-sprite-1" points="221.56,479.12 253.11,479 
					253.43,558.69 221.88,558.82 221.56,479.12 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 247.9315 512.7624)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 233.7498 506.1462)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 238.7655 516.1241)" class="st6 st7 st15">05</text>
				<g>
					<polyline class="st9" points="239.14,493.57 239.12,486.23 242.85,489.88 239.14,493.57 					"/>
					<polyline class="st10" points="239.14,493.57 235.41,489.92 239.12,486.23 239.14,493.57 					"/>
				</g>
				<g>
					<text transform="matrix(1.0106 0 0 1 232.4371 556.6429)" class="st1 st2 st17">9.00</text>
				</g>
				<g>
					<text transform="matrix(1.0106 0 0 1 232.4371 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
			</g>
			<g id="A-06_00000032641416785102982130000005253420863905856138_" ng-class="opalo.inmovablesClassList[230]" ng-click="opalo.showPropertyData(67, '6')">
				<polyline id="L-A06_00000052789578983610200130000016627295856096718471_" class="property pb-sprite-2" points="253.11,479 284.66,478.87 
					284.98,558.57 253.43,558.69 253.11,479 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 279.481 512.6399)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 264.0352 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 264.0352 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 264.0356 506.1463)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 270.3159 515.9664)" class="st6 st7 st15">06</text>
				<g>
					<polyline class="st9" points="270.69,493.57 270.67,486.23 274.4,489.88 270.69,493.57 					"/>
					<polyline class="st10" points="270.69,493.57 266.96,489.92 270.67,486.23 270.69,493.57 					"/>
				</g>
			</g>
			<g id="A-07_00000078764870889342839040000006923318995246629024_" ng-class="opalo.inmovablesClassList[231]" ng-click="opalo.showPropertyData(67, '7')">
				<polyline id="L-A07_00000136379146117002245920000014350628648295182497_" class="property pb-sprite-1" points="284.66,478.87 316.21,478.75 
					316.52,558.45 284.98,558.57 284.66,478.87 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 311.0296 512.5174)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 294.4547 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 294.4547 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 296.132 506.1469)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 301.8637 515.8791)" class="st6 st7 st15">07</text>
				<g>
					<polyline class="st9" points="302.24,493.57 302.22,486.23 305.94,489.88 302.24,493.57 					"/>
					<polyline class="st10" points="302.24,493.57 298.51,489.92 302.22,486.23 302.24,493.57 					"/>
				</g>
			</g>
			<g id="A-08_00000147202967547198875750000009335905727397820853_" ng-class="opalo.inmovablesClassList[232]" ng-click="opalo.showPropertyData(67, '8')">
				<polyline id="L-A08_00000138574886300998459810000015730670819217872302_" class="property pb-sprite-2" points="316.21,478.75 347.75,478.63 
					348.07,558.33 316.52,558.45 316.21,478.75 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 342.5782 512.3948)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 327.5807 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 327.5807 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 327.6322 506.1466)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 333.2736 515.7571)" class="st6 st7 st15">08</text>
				<g>
					<polyline class="st9" points="333.79,493.57 333.76,486.23 337.49,489.88 333.79,493.57 					"/>
					<polyline class="st10" points="333.79,493.57 330.06,489.92 333.76,486.23 333.79,493.57 					"/>
				</g>
			</g>
			<g id="A-09_00000104683583938630742280000015577708703822007444_" ng-class="opalo.inmovablesClassList[233]" ng-click="opalo.showPropertyData(67, '9')">
				<polyline id="L-A09_00000017497665590227681570000005416094410294117290_" class="property pb-sprite-1" points="347.75,478.63 379.3,478.51 
					379.62,558.21 348.07,558.33 347.75,478.63 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 374.1248 512.2743)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 358.1134 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 358.1134 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 359.7768 505.4097)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 364.9619 515.634)" class="st6 st7 st15">09</text>
				<g>
					<polyline class="st9" points="365.34,493.57 365.31,486.23 369.04,489.88 365.34,493.57 					"/>
					<polyline class="st10" points="365.34,493.57 361.61,489.92 365.31,486.23 365.34,493.57 					"/>
				</g>
			</g>
			<g id="A-10_00000164491794918604797570000004360150183194794892_" ng-class="opalo.inmovablesClassList[234]" ng-click="opalo.showPropertyData(67, '10')">
				<polyline id="L-A10_00000158030596826505012980000002681703376030252948_" class="property pb-sprite-2" points="379.3,478.51 410.85,478.38 
					411.17,558.08 379.62,558.21 379.3,478.51 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 405.6754 512.1498)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 389.7901 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 389.7901 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 389.6261 505.4102)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 396.3786 515.512)" class="st6 st7 st15">10</text>
				<g>
					<polyline class="st9" points="396.89,493.57 396.86,486.23 400.59,489.88 396.89,493.57 					"/>
					<polyline class="st10" points="396.89,493.57 393.16,489.92 396.86,486.23 396.89,493.57 					"/>
				</g>
			</g>
			<g id="A-11_00000158733028421525486610000003038309947369016228_" ng-class="opalo.inmovablesClassList[235]" ng-click="opalo.showPropertyData(67, '11')">
				<polyline id="L-A11_00000151545349037768991750000008947001053516599711_" class="property pb-sprite-1" points="410.85,478.38 442.4,478.26 
					442.72,557.96 411.17,558.08 410.85,478.38 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 437.224 512.0273)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 422.545 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 422.545 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 420.0462 505.4098)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 427.9272 515.3934)" class="st6 st7 st15">11</text>
			</g>
			<g id="A-12_00000085940091694275105110000010405960522592597680_" ng-class="opalo.inmovablesClassList[236]" ng-click="opalo.showPropertyData(67, '12')">
				<polyline id="L-A12_00000127754571474291664720000010117846436105301930_" class="property pb-sprite-2" points="442.4,478.26 473.95,478.14 
					474.27,557.84 442.72,557.96 442.4,478.26 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 468.7726 511.9067)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 453.6529 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 453.6529 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 452.9087 505.4097)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 459.4758 515.2689)" class="st6 st7 st15">12</text>
			</g>
			<g id="A-13_00000103962488398519530650000001552569198276105098_" ng-class="opalo.inmovablesClassList[237]" ng-click="opalo.showPropertyData(67, '13')">
				<polyline id="L-A13_00000112629821779816714390000018403636141570325940_" class="property pb-sprite-1" points="473.95,478.14 505.5,478.02 
					505.82,557.72 474.27,557.84 473.95,478.14 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 500.3212 511.7842)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 481.7204 505.4099)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 491.1572 515.144)" class="st6 st7 st15">13</text>
				<text transform="matrix(1.0106 0 0 1 484.9601 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 484.9601 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
			</g>
			<g id="A-14_00000081620844657295263550000000123518378317288086_" ng-class="opalo.inmovablesClassList[238]" ng-click="opalo.showPropertyData(67, '14')">
				<polyline id="L-A14_00000150808066776920962590000014952361761980751767_" class="property pb-sprite-2" points="505.5,478.02 537.05,477.89 
					537.37,557.59 505.82,557.72 505.5,478.02 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 531.8707 511.6617)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 515.1036 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 515.1036 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 514.6645 505.4095)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 522.7078 515.0234)" class="st6 st7 st15">14</text>
			</g>
			<g id="A-15_00000073689590494883914880000010457715892895635647_" ng-class="opalo.inmovablesClassList[239]" ng-click="opalo.showPropertyData(67, '15')">
				<polyline id="L-A15_00000130624884741534798400000003761716152057737116_" class="property pb-sprite-1" points="537.05,477.89 568.6,477.77 
					568.92,557.47 537.37,557.59 537.05,477.89 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 563.4203 511.5411)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 549.3277 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 549.3277 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 547.9034 505.4101)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 554.2563 514.9009)" class="st6 st7 st15">15</text>
			</g>
			<g id="A-16_00000100381746418117257100000010808899676030409891_" ng-class="opalo.inmovablesClassList[240]" ng-click="opalo.showPropertyData(67, '16')">
				<polyline id="L-A16_00000109739518335178763510000011781954534612894910_" class="property pb-sprite-2" points="568.6,477.77 600.15,477.65 
					600.46,557.35 568.92,557.47 568.6,477.77 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 594.9709 511.4186)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 579.1426 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 579.1426 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 578.4954 505.41)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 585.8069 514.7803)" class="st6 st7 st15">16</text>
			</g>
			<g id="A-17_00000089536296011468386280000000857515929441396613_" ng-class="opalo.inmovablesClassList[241]" ng-click="opalo.showPropertyData(67, '17')">
				<polyline id="L-A17_00000124855322373945664260000004542009035860493708_" class="property pb-sprite-1" points="600.15,477.65 631.7,477.53 
					632.01,557.23 600.46,557.35 600.15,477.65 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 626.5175 511.2961)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 610.8917 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 610.8917 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 609.3399 505.41)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 617.3525 514.6578)" class="st6 st7 st15">17</text>
			</g>
			<g id="A-18_00000158732655077143671520000005445534850049241997_" ng-class="opalo.inmovablesClassList[242]" ng-click="opalo.showPropertyData(67, '18')">
				<polyline id="L-A18_00000154408423682868207710000000041720039401143468_" class="property pb-sprite-2" points="631.7,477.53 663.25,477.41 
					663.56,557.1 632.01,557.23 631.7,477.53 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 658.0671 511.1736)" class="st1 st2 st15">23.00</text>
				<text transform="matrix(1.0106 0 0 1 642.044 556.6429)" class="st1 st2 st17">9.00</text>
				<g>
					<text transform="matrix(1.0106 0 0 1 642.044 484.0922)" class="st1 st2 st17">9.00</text>
				</g>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 641.1628 505.4096)" class="st1 st2 st15">207.00 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 648.9031 514.5372)" class="st6 st7 st15">18</text>
				<g>
					<polyline class="st9" points="647.51,491.63 647.48,484.28 651.21,487.94 647.51,491.63 					"/>
					<polyline class="st10" points="647.51,491.63 643.78,487.97 647.48,484.28 647.51,491.63 					"/>
				</g>
			</g>
			<g id="A-19_00000055703963908658953730000005690747621233012665_" ng-class="opalo.inmovablesClassList[243]" ng-click="opalo.showPropertyData(67, '19')">
				<polyline id="L-A19_00000083053661212915474660000000644924066144310681_" class="property pb-sprite-1" points="663.25,477.41 693.28,477.29 
					733.67,556.83 663.56,557.1 663.25,477.41 				"/>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 675.9482 505.4097)" class="st1 st2 st15">328.51 m2</text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 679.5689 514.4158)" class="st6 st7 st15">19</text>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 673.4594 482.5695)"><tspan x="0" y="0" class="st1 st2 st14">8.5</tspan><tspan x="6.73" y="0" class="st1 st2 st14">7</tspan></text>
				<g>
					<polyline class="st9" points="678.32,491.63 678.29,484.28 682.02,487.94 678.32,491.63 					"/>
					<polyline class="st10" points="678.32,491.63 674.58,487.97 678.29,484.28 678.32,491.63 					"/>
				</g>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 692.4172 555.2624)"><tspan x="0" y="0" class="st1 st2 st14">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st14">0</tspan></text>
			</g>
			<g id="A-20_00000081606542886347903100000006926971465701808267_" ng-class="opalo.inmovablesClassList[244]" ng-click="opalo.showPropertyData(67, '20')">
				<polyline id="L-A20_00000114059501035166514880000014867974723897419171_" class="property pb-sprite-2" points="795.87,507.18 796.07,556.59 
					733.67,556.83 693.28,477.29 710.72,451.31 795.87,507.18 				"/>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 722.6746 488.363)" class="st1 st2 st18">544.35 m2</text>
				<text transform="matrix(1.0116 -3.490205e-03 3.530014e-03 1 758.6707 555.0045)"><tspan x="0" y="0" class="st1 st2 st14">17.8</tspan><tspan x="9.45" y="0" class="st1 st2 st14">0</tspan></text>
				<text transform="matrix(0.4488 0.8859 -0.8962 0.4436 712.311 510.8662)"><tspan x="0" y="0" class="st1 st2 st19">25.6</tspan><tspan x="9.54" y="0" class="st1 st2 st19">9</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 745.3148 480.2996)"><tspan x="0" y="0" class="st1 st2 st18">29.1</tspan><tspan x="9.48" y="0" class="st1 st2 st18">5</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 703.7811 471.1814)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 790.6361 525.8003)" class="st1 st2 st15">14.26</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 733.8345 487.3914)" class="st6 st7 st18">20</text>
				<g>
					<polyline class="st9" points="714.04,472.2 707.84,468.13 712.99,467.1 714.04,472.2 					"/>
					<polyline class="st10" points="714.04,472.2 708.88,473.23 707.84,468.13 714.04,472.2 					"/>
				</g>
			</g>
			<g id="A-21_00000096738313345704678910000003019446033329858213_" ng-class="opalo.inmovablesClassList[245]" ng-click="opalo.showPropertyData(67, '21')">
				<polyline id="L-A21_00000020366318196560955200000008229401027265080742_" class="property pb-sprite-1" points="728.17,425.33 795.73,469.65 
					795.87,507.18 710.72,451.31 728.17,425.33 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 721.2274 445.1971)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 790.1514 483.6474)" class="st1 st2 st15">10.83</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 753.9639 448.5435)"><tspan x="0" y="0" class="st1 st2 st18">23.1</tspan><tspan x="9.48" y="0" class="st1 st2 st18">3</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 741.59 455.3495)" class="st1 st2 st21">235.28 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 751.1673 453.4867)" class="st6 st7 st18">21</text>
				<g>
					<polyline class="st9" points="731.49,446.21 725.29,442.15 730.44,441.12 731.49,446.21 					"/>
					<polyline class="st10" points="731.49,446.21 726.33,447.25 725.29,442.15 731.49,446.21 					"/>
				</g>
			</g>
			<g id="A-22_00000167365544203907094250000004816552355394726587_" ng-class="opalo.inmovablesClassList[246]" ng-click="opalo.showPropertyData(67, '22')">
				<polyline id="L-A22_00000067921344201262010000000001763689261523653820_" class="property pb-sprite-2" points="728.17,425.33 745.62,399.34 
					812.79,443.42 795.72,468.84 795.73,469.65 728.17,425.33 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 738.6758 419.2147)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 800.1985 459.1769)"><tspan x="0" y="0" class="st1 st2 st20">8.8</tspan><tspan x="6.79" y="0" class="st1 st2 st20">1</tspan></text>
				<g>
					<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 792.6588 465.252)" class="st1 st2 st15">3</text>
					<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 792.6492 462.5566)" class="st1 st2 st15">2</text>
					<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 792.6426 461.2207)" class="st1 st2 st15">.</text>
					<text transform="matrix(3.489349e-03 0.9885 -1 3.450014e-03 792.635 458.5235)" class="st1 st2 st15">0</text>
				</g>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 771.2202 422.4373)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 759.0375 429.3679)" class="st1 st2 st21">207.01 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 771.2015 428.9858)" class="st6 st7 st18">22</text>
				<g>
					<polyline class="st9" points="748.93,420.23 742.73,416.17 747.89,415.14 748.93,420.23 					"/>
					<polyline class="st10" points="748.93,420.23 743.78,421.26 742.73,416.17 748.93,420.23 					"/>
				</g>
			</g>
			<g id="A-23_00000108273273031334378640000008503256068905925780_" ng-class="opalo.inmovablesClassList[247]" ng-click="opalo.showPropertyData(67, '23')">
				<polyline id="L-A23_00000078013671512084631100000007434944189754962560_" class="property pb-sprite-1" points="745.62,399.34 763.07,373.36 
					830.24,417.43 812.79,443.42 745.62,399.34 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 756.122 393.232)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 817.4564 433.4727)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 788.6694 396.4537)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 776.4852 403.3843)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 788.6511 403.0035)" class="st6 st7 st18">23</text>
				<g>
					<polyline class="st9" points="766.38,394.25 760.19,390.18 765.34,389.15 766.38,394.25 					"/>
					<polyline class="st10" points="766.38,394.25 761.23,395.28 760.19,390.18 766.38,394.25 					"/>
				</g>
			</g>
			<g id="A-24_00000109710894958138923250000000144801764064932526_" ng-class="opalo.inmovablesClassList[248]" ng-click="opalo.showPropertyData(67, '24')">
				<polyline id="L-A24_00000109741014270696438020000013542347217737907860_" class="property pb-sprite-2" points="763.07,373.36 780.51,347.38 
					847.69,391.45 830.24,417.43 763.07,373.36 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 773.5699 367.2469)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 834.9036 407.4904)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 806.1184 370.4705)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 793.9335 377.4017)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 806.0974 377.0189)" class="st6 st7 st18">24</text>
				<g>
					<polyline class="st9" points="783.83,368.27 777.63,364.2 782.79,363.17 783.83,368.27 					"/>
					<polyline class="st10" points="783.83,368.27 778.67,369.3 777.63,364.2 783.83,368.27 					"/>
				</g>
			</g>
			<g id="A-25_00000136394273643942800530000002919663448571836846_" ng-class="opalo.inmovablesClassList[249]" ng-click="opalo.showPropertyData(67, '25')">
				<polyline id="L-A25_00000096018166464458153140000018266555080659362475_" class="property pb-sprite-1" points="780.51,347.38 797.96,321.39 
					865.14,365.47 847.69,391.45 780.51,347.38 				"/>
				<text transform="matrix(0.5524 -0.8282 0.8378 0.546 790.9841 341.3177)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 852.3504 381.5069)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 823.5637 344.4875)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 811.3798 351.4184)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 823.5468 351.0369)" class="st6 st7 st18">25</text>
				<g>
					<polyline class="st9" points="801.27,342.28 795.08,338.22 800.23,337.19 801.27,342.28 					"/>
					<polyline class="st10" points="801.27,342.28 796.12,343.31 795.08,338.22 801.27,342.28 					"/>
				</g>
			</g>
			<g id="A-26_00000038374898526861646220000000902671452679733950_" ng-class="opalo.inmovablesClassList[250]" ng-click="opalo.showPropertyData(67, '26')">
				<polyline id="L-A26_00000071549204837500805100000017101352366229960121_" class="property pb-sprite-2" points="797.96,321.39 815.41,295.41 
					882.58,339.49 865.14,365.47 797.96,321.39 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 808.4654 315.2807)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 869.7998 355.5231)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 841.0129 318.5039)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 828.8279 325.436)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 840.9944 325.054)" class="st6 st7 st18">26</text>
				<g>
					<polyline class="st9" points="818.72,316.3 812.53,312.24 817.68,311.21 818.72,316.3 					"/>
					<polyline class="st10" points="818.72,316.3 813.57,317.33 812.53,312.24 818.72,316.3 					"/>
				</g>
			</g>
			<g id="A-27_00000093135042153566389330000013692119679163613361_" ng-class="opalo.inmovablesClassList[251]" ng-click="opalo.showPropertyData(67, '27')">
				<polyline id="L-A27_00000177461182964061283010000004182308640732670898_" class="property pb-sprite-1" points="815.41,295.41 832.86,269.43 
					900.03,313.5 882.58,339.49 815.41,295.41 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 825.9108 289.1716)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 887.2447 329.5408)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 858.4581 293.0761)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 846.275 300.0078)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 858.4396 299.6261)" class="st6 st7 st18">27</text>
				<g>
					<polyline class="st9" points="836.17,290.19 829.97,286.12 835.13,285.1 836.17,290.19 					"/>
					<polyline class="st10" points="836.17,290.19 831.01,291.22 829.97,286.12 836.17,290.19 					"/>
				</g>
			</g>
			<g id="A-28_00000083057638238026360550000014883105732693284542_" ng-class="opalo.inmovablesClassList[252]" ng-click="opalo.showPropertyData(67, '28')">
				<polyline id="L-A28_00000044152535914955348220000007613965145517580714_" class="property pb-sprite-2" points="832.86,269.43 850.3,243.44 
					917.48,287.52 900.03,313.5 832.86,269.43 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 843.3589 263.5117)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 904.6924 303.5576)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 875.9072 266.7338)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 863.7218 273.6649)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 875.8887 273.2838)" class="st6 st7 st18">28</text>
				<g>
					<polyline class="st9" points="853.62,264.53 847.42,260.47 852.58,259.44 853.62,264.53 					"/>
					<polyline class="st10" points="853.62,264.53 848.46,265.56 847.42,260.47 853.62,264.53 					"/>
				</g>
			</g>
			<g id="A-29_00000070829866702422463140000005005857781513066929_" ng-class="opalo.inmovablesClassList[253]" ng-click="opalo.showPropertyData(67, '29')">
				<polyline id="L-A29_00000172431559737963252730000015529296606299642003_" class="property pb-sprite-1" points="850.3,243.44 867.75,217.46 
					934.93,261.53 917.48,287.52 850.3,243.44 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 860.8066 237.3326)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 922.1404 277.5759)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 893.3528 240.5561)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 881.1704 247.4864)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 893.3342 247.1044)" class="st6 st7 st18">29</text>
			</g>
			<g id="A-30_00000161598043324427746520000002553683457764236456_" ng-class="opalo.inmovablesClassList[254]" ng-click="opalo.showPropertyData(67, '30')">
				<polyline id="L-A30_00000104687399964948162200000004199629712742064542_" class="property pb-sprite-2" points="867.75,217.46 885.2,191.48 
					952.37,235.55 934.93,261.53 867.75,217.46 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 878.2532 211.3493)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 939.588 251.5914)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 910.8013 214.5718)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 898.619 221.5034)" class="st1 st2 st21">207.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 910.7831 221.1214)" class="st6 st7 st18">30</text>
			</g>
			<g id="A-31_00000103976991501897473580000004930789389787460505_" ng-class="opalo.inmovablesClassList[255]" ng-click="opalo.showPropertyData(67, '31')">
				<polyline id="L-A31_00000158018496463041893930000015495830393493626526_" class="property pb-sprite-1" points="885.2,191.48 904.7,162.45 
					971.87,206.52 952.37,235.55 885.2,191.48 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 895.9653 184.9677)"><tspan x="0" y="0" class="st1 st2 st20">10.0</tspan><tspan x="9.53" y="0" class="st1 st2 st20">6</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 957.3029 225.2107)"><tspan x="0" y="0" class="st1 st2 st20">10.0</tspan><tspan x="9.53" y="0" class="st1 st2 st20">6</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 930.2977 185.539)"><tspan x="0" y="0" class="st1 st2 st18">23.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8416 0.5485 -0.5549 0.8319 916.0652 195.5203)" class="st1 st2 st21">231.30 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 928.2316 195.1388)" class="st6 st7 st18">31</text>
				<g>
					<polyline class="st9" points="906.98,184.86 900.79,180.79 905.94,179.77 906.98,184.86 					"/>
					<polyline class="st10" points="906.98,184.86 901.83,185.89 900.79,180.79 906.98,184.86 					"/>
				</g>
			</g>
			<g id="A-32_00000024721469033359712250000014449533970711020931_" ng-class="opalo.inmovablesClassList[256]" ng-click="opalo.showPropertyData(67, '32')">
				<polyline id="L-A32_00000137822359999353816810000011569234555153417139_" class="property pb-sprite-2" points="989.17,180.76 1047.58,219.08 
					1030.36,244.74 971.94,206.41 989.17,180.76 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1034.9083 234.9556)"><tspan x="0" y="0" class="st1 st2 st20">8.8</tspan><tspan x="6.79" y="0" class="st1 st2 st20">9</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 982.3367 200.4625)"><tspan x="0" y="0" class="st1 st2 st20">8.8</tspan><tspan x="6.79" y="0" class="st1 st2 st20">9</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1010.3904 200.9731)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 997.0141 212.6066)" class="st1 st2 st18">177.73 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1008.2289 210.2073)" class="st6 st7 st18">32</text>
				<g>
					<polyline class="st9" points="1033.13,228.08 1026.93,224.01 1032.08,222.98 1033.13,228.08 					"/>
					<polyline class="st10" points="1033.13,228.08 1027.97,229.1 1026.93,224.01 1033.13,228.08 					"/>
				</g>
			</g>
			<g id="A-33_00000016783653262252300320000000035918036840089748_" ng-class="opalo.inmovablesClassList[257]" ng-click="opalo.showPropertyData(67, '33')">
				<polyline id="L-A33_00000143614337441736354110000003225258956371463824_" class="property pb-sprite-1" points="971.94,206.41 1030.36,244.74 
					1012.91,270.72 954.49,232.39 971.94,206.41 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1017.5708 260.7765)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 964.999 226.2819)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 993.1644 226.6299)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 979.567 238.5888)" class="st1 st2 st18">180.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 990.8941 236.0277)" class="st6 st7 st18">33</text>
			</g>
			<g id="A-34_00000126296074721300024800000009239920469989679775_" ng-class="opalo.inmovablesClassList[258]" ng-click="opalo.showPropertyData(67, '34')">
				<polyline id="L-A34_00000105414941038450561570000006245717708701737867_" class="property pb-sprite-2" points="954.49,232.39 1012.91,270.72 
					995.46,296.7 937.05,258.38 954.49,232.39 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1000.1219 286.7578)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 947.5519 252.2658)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 975.7126 252.6103)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 962.1185 264.5714)" class="st1 st2 st18">180.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 973.4451 262.0091)" class="st6 st7 st18">34</text>
			</g>
			<g id="A-35_00000072240502802292832750000006888678405741085362_" ng-class="opalo.inmovablesClassList[259]" ng-click="opalo.showPropertyData(67, '35')">
				<polyline id="L-A35_00000044168832801871135020000013932512322018125454_" class="property pb-sprite-1" points="937.05,258.38 995.46,296.7 
					978.01,322.69 919.6,284.36 937.05,258.38 				"/>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 982.6752 312.7412)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 930.1035 278.2482)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 958.2677 278.5944)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 944.6726 290.5569)" class="st1 st2 st18">180.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 955.9975 287.992)" class="st6 st7 st18">35</text>
			</g>
			<g id="A-36_00000147183994478806098350000011730242911742878901_" ng-class="opalo.inmovablesClassList[260]" ng-click="opalo.showPropertyData(67, '36')">
				<polyline id="L-A36_00000039822145387072402510000009621397242193527682_" class="property pb-sprite-2" points="919.6,284.36 978.01,322.69 
					960.57,348.67 902.15,310.34 919.6,284.36 				"/>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 940.8199 304.5793)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 965.228 338.7235)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 912.6556 304.2315)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 927.2495 324.7869)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 927.2241 316.5377)" class="st1 st2 st18">180.00 m2</text>
				<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 938.5521 313.977)" class="st6 st7 st18">36</text>
				<g>
					<polyline class="st9" points="963.45,331.84 957.25,327.78 962.41,326.75 963.45,331.84 					"/>
					<polyline class="st10" points="963.45,331.84 958.29,332.87 957.25,327.78 963.45,331.84 					"/>
				</g>
			</g>
			<g id="LINEAS_DIVISORIAS_00000142870612176851940590000001278429323006850489_">
				<line class="st22" x1="693.28" y1="477.29" x2="733.67" y2="556.83"/>
				<line class="st22" x1="710.72" y1="451.31" x2="795.87" y2="507.18"/>
				<line class="st22" x1="728.17" y1="425.33" x2="795.73" y2="469.65"/>
				<line class="st22" x1="745.62" y1="399.34" x2="812.79" y2="443.42"/>
				<line class="st22" x1="763.07" y1="373.36" x2="830.24" y2="417.43"/>
				<line class="st22" x1="780.51" y1="347.38" x2="847.69" y2="391.45"/>
				<line class="st22" x1="797.96" y1="321.39" x2="865.14" y2="365.47"/>
				<line class="st22" x1="815.41" y1="295.41" x2="882.58" y2="339.49"/>
				<line class="st22" x1="832.86" y1="269.43" x2="900.03" y2="313.5"/>
				<line class="st22" x1="850.3" y1="243.44" x2="917.48" y2="287.52"/>
				<line class="st22" x1="867.75" y1="217.46" x2="934.93" y2="261.53"/>
				<line class="st22" x1="885.2" y1="191.48" x2="952.37" y2="235.55"/>
				<line class="st22" x1="161.97" y1="479.35" x2="96.77" y2="559.3"/>
				<line class="st22" x1="190.01" y1="479.24" x2="190.33" y2="558.94"/>
				<line class="st22" x1="221.56" y1="479.12" x2="221.88" y2="558.82"/>
				<line class="st22" x1="253.11" y1="479" x2="253.43" y2="558.69"/>
				<line class="st22" x1="284.66" y1="478.87" x2="284.98" y2="558.57"/>
				<line class="st22" x1="316.21" y1="478.75" x2="316.52" y2="558.45"/>
				<line class="st22" x1="347.75" y1="478.63" x2="348.07" y2="558.33"/>
				<line class="st22" x1="379.3" y1="478.51" x2="379.62" y2="558.21"/>
				<line class="st22" x1="410.85" y1="478.38" x2="411.17" y2="558.08"/>
				<line class="st22" x1="442.4" y1="478.26" x2="442.72" y2="557.96"/>
				<line class="st22" x1="473.95" y1="478.14" x2="474.27" y2="557.84"/>
				<line class="st22" x1="505.5" y1="478.02" x2="505.82" y2="557.72"/>
				<line class="st22" x1="537.05" y1="477.89" x2="537.37" y2="557.59"/>
				<line class="st22" x1="568.6" y1="477.77" x2="568.92" y2="557.47"/>
				<line class="st22" x1="600.15" y1="477.65" x2="600.46" y2="557.35"/>
				<line class="st22" x1="631.7" y1="477.53" x2="632.01" y2="557.23"/>
				<line class="st22" x1="663.25" y1="477.41" x2="663.56" y2="557.1"/>
				<line class="st22" x1="76.76" y1="470.54" x2="154.85" y2="450.75"/>
				<line class="st22" x1="69.04" y1="442.01" x2="146.7" y2="420.63"/>
				<line class="st22" x1="1030.36" y1="244.74" x2="971.94" y2="206.41"/>
				<line class="st22" x1="1012.91" y1="270.72" x2="954.49" y2="232.39"/>
				<line class="st22" x1="995.46" y1="296.7" x2="937.05" y2="258.38"/>
				<line class="st22" x1="978.01" y1="322.69" x2="919.6" y2="284.36"/>
			</g>
		</g>
	</g>
	<g id="ISLA_B_00000005958653303001153130000000698406401577909915_">
		<g id="B-37" ng-class="opalo.inmovablesClassList[261]" ng-click="opalo.showPropertyData(67, '37')">
			<polyline id="L-B37" class="property pb-sprite-2" points="1003.23,343.39 1061.65,381.72 1046.14,404.82 987.73,366.49 1003.23,343.39 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 997.261 361.8226)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1012.8251 380.9345)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1049.835 396.314)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1024.4565 363.6136)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1012.7997 372.6854)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1024.1248 370.1221)" class="st6 st7 st18">37</text>
			<g>
				<polyline class="st9" points="1007.52,362.84 1001.32,358.78 1006.48,357.75 1007.52,362.84 				"/>
				<polyline class="st10" points="1007.52,362.84 1002.36,363.87 1001.32,358.78 1007.52,362.84 				"/>
			</g>
		</g>
		<g id="B-38" ng-class="opalo.inmovablesClassList[262]" ng-click="opalo.showPropertyData(67, '38')">
			<polyline id="LB-38" class="property pb-sprite-1" points="1018.75,320.3 1077.16,358.62 1061.65,381.72 1003.23,343.39 1018.75,320.3 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1012.7695 338.7264)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1065.3425 373.2192)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1039.9656 340.5166)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1028.3096 349.5889)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1038.6649 348.47)" class="st6 st7 st18">38</text>
		</g>
		<g id="B-39" ng-class="opalo.inmovablesClassList[263]" ng-click="opalo.showPropertyData(67, '39')">
			<polyline id="L-B39" class="property pb-sprite-2" points="1034.25,297.2 1092.67,335.53 1077.16,358.62 1018.75,320.3 1034.25,297.2 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1028.2794 315.6299)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1080.8519 350.1218)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1055.4753 317.4203)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1043.8173 326.4939)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1054.1736 325.3736)" class="st6 st7 st18">39</text>
		</g>
		<g id="B-40" ng-class="opalo.inmovablesClassList[264]" ng-click="opalo.showPropertyData(67, '40')">
			<polyline id="L-B40" class="property pb-sprite-1" points="1049.76,274.11 1108.17,312.43 1092.67,335.53 1034.25,297.2 1049.76,274.11 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1043.7871 292.5349)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1096.3595 327.0287)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1070.9856 294.325)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1059.3259 303.3975)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1069.6821 302.2774)" class="st6 st7 st18">40</text>
		</g>
		<g id="B-41" ng-class="opalo.inmovablesClassList[265]" ng-click="opalo.showPropertyData(67, '41')">
			<polyline id="L-B41" class="property pb-sprite-2" points="1065.27,251.01 1123.68,289.33 1108.17,312.43 1049.76,274.11 1065.27,251.01 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1059.297 269.4385)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1111.8679 303.9308)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1086.4933 271.2283)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1074.8348 280.3007)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1085.1915 279.1815)" class="st6 st7 st18">41</text>
		</g>
		<g id="B-42" ng-class="opalo.inmovablesClassList[266]" ng-click="opalo.showPropertyData(67, '42')">
			<polyline id="L-B42" class="property pb-sprite-1" points="1080.78,227.91 1139.19,266.24 1123.68,289.33 1065.27,251.01 1080.78,227.91 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1074.8047 246.3435)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1127.3761 280.8352)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1102.0017 248.1323)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1090.344 257.2052)" class="st1 st2 st18">160.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1101.3685 255.0909)" class="st6 st7 st18">42</text>
		</g>
		<g id="B-43" ng-class="opalo.inmovablesClassList[267]" ng-click="opalo.showPropertyData(67, '43')">
			<polyline id="L-B43" class="property pb-sprite-2" points="1096.79,204.08 1155.2,242.41 1139.19,266.24 1080.78,227.91 1096.79,204.08 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1090.562 222.8771)"><tspan x="0" y="0" class="st1 st2 st20">8.2</tspan><tspan x="6.79" y="0" class="st1 st2 st20">6</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1118.0056 224.2989)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1143.1331 257.3712)"><tspan x="0" y="0" class="st1 st2 st20">8.2</tspan><tspan x="6.79" y="0" class="st1 st2 st20">6</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1105.853 234.1084)" class="st1 st2 st18">165.11 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1117.1115 231.6442)" class="st6 st7 st18">43</text>
			<g>
				<polyline class="st9" points="1100.82,223.89 1094.62,219.83 1099.78,218.8 1100.82,223.89 				"/>
				<polyline class="st10" points="1100.82,223.89 1095.66,224.93 1094.62,219.83 1100.82,223.89 				"/>
			</g>
		</g>
		<g id="B-44" ng-class="opalo.inmovablesClassList[268]" ng-click="opalo.showPropertyData(67, '44')">
			<polyline id="L-B44" class="property pb-sprite-1" points="1170.24,220 1228.65,258.33 1209.24,287.24 1150.83,248.92 1170.24,220 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1214.1283 276.9594)"><tspan x="0" y="0" class="st1 st2 st20">10.0</tspan><tspan x="9.53" y="0" class="st1 st2 st20">2</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1161.5581 242.4676)"><tspan x="0" y="0" class="st1 st2 st20">10.0</tspan><tspan x="9.53" y="0" class="st1 st2 st20">2</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1191.4727 240.2097)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1175.9014 255.1107)" class="st1 st2 st18">200.31 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1188.751 251.4432)" class="st6 st7 st18">44</text>
			<g>
				<polyline class="st9" points="1213.1,268.95 1206.91,264.89 1212.06,263.86 1213.1,268.95 				"/>
				<polyline class="st10" points="1213.1,268.95 1207.95,269.98 1206.91,264.89 1213.1,268.95 				"/>
			</g>
		</g>
		<g id="B-45" ng-class="opalo.inmovablesClassList[269]" ng-click="opalo.showPropertyData(67, '45')">
			<polyline id="L-B45" class="property pb-sprite-2" points="1150.83,248.92 1209.24,287.24 1191.79,313.23 1133.38,274.9 1150.83,248.92 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1196.457 303.282)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1143.887 268.7885)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1173.8824 268.677)"><tspan x="0" y="0" class="st1 st2 st23">20.0</tspan><tspan x="8.14" y="0" class="st1 st2 st23">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1158.4536 281.0956)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1170.3264 278.8918)" class="st6 st7 st18">45</text>
		</g>
		<g id="B-46" ng-class="opalo.inmovablesClassList[270]" ng-click="opalo.showPropertyData(67, '46')">
			<polyline id="L-B46" class="property pb-sprite-1" points="1133.38,274.9 1191.79,313.23 1174.34,339.21 1115.93,300.88 1133.38,274.9 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1179.007 329.265)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1126.4327 294.7706)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1154.5963 295.1196)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1141.004 307.0778)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1152.8745 304.8742)" class="st6 st7 st18">46</text>
		</g>
		<g id="B-47" ng-class="opalo.inmovablesClassList[271]" ng-click="opalo.showPropertyData(67, '47')">
			<polyline id="L-B47" class="property pb-sprite-2" points="1115.93,300.88 1174.34,339.21 1156.89,365.19 1098.48,326.87 1115.93,300.88 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1161.5583 355.2479)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1108.9835 320.7542)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1137.1499 321.1007)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1123.554 333.0609)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1135.425 330.858)" class="st6 st7 st18">47</text>
		</g>
		<g id="B-48" ng-class="opalo.inmovablesClassList[272]" ng-click="opalo.showPropertyData(67, '48')">
			<polyline id="L-B48" class="property pb-sprite-1" points="1098.48,326.87 1156.89,365.19 1139.45,391.17 1081.03,352.85 1098.48,326.87 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1144.1093 381.2312)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1091.5375 346.7384)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1119.7036 347.0851)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1106.1084 359.046)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1117.9801 356.8405)" class="st6 st7 st18">48</text>
		</g>
		<g id="B-49" ng-class="opalo.inmovablesClassList[273]" ng-click="opalo.showPropertyData(67, '49')">
			<polyline id="L-B49" class="property pb-sprite-2" points="1081.03,352.85 1139.45,391.17 1122,417.16 1063.59,378.83 1081.03,352.85 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1126.6642 407.2138)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1074.0905 372.722)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1102.2559 373.0682)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1088.6575 385.027)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1100.5309 382.8242)" class="st6 st7 st18">49</text>
		</g>
		<g id="B-50" ng-class="opalo.inmovablesClassList[274]" ng-click="opalo.showPropertyData(67, '50')">
			<polyline id="L-B50" class="property pb-sprite-1" points="1063.59,378.83 1122,417.16 1104.55,443.14 1046.14,404.82 1063.59,378.83 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1109.2159 433.1978)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1056.6434 398.7042)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1084.8092 399.0515)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1071.2397 419.2612)"><tspan x="0" y="0" class="st1 st2 st18">20.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1071.2111 411.0099)" class="st1 st2 st18">180.00 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1083.0858 408.8067)" class="st6 st7 st18">50</text>
			<g>
				<polyline class="st9" points="1107.43,426.32 1101.24,422.25 1106.39,421.22 1107.43,426.32 				"/>
				<polyline class="st10" points="1107.43,426.32 1102.28,427.35 1101.24,422.25 1107.43,426.32 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000161624277818001676500000004360457510177396140_">
			<line class="st22" x1="1096.79" y1="204.08" x2="1155.2" y2="242.41"/>
			<line class="st22" x1="1170.24" y1="220" x2="1228.65" y2="258.33"/>
			<line class="st22" x1="1209.24" y1="287.24" x2="1150.83" y2="248.92"/>
			<line class="st22" x1="1170.24" y1="220" x2="1046.14" y2="404.82"/>
			<line class="st22" x1="1063.59" y1="378.83" x2="1122" y2="417.16"/>
			<line class="st22" x1="1081.03" y1="352.85" x2="1139.45" y2="391.17"/>
			<line class="st22" x1="1098.48" y1="326.87" x2="1156.89" y2="365.19"/>
			<line class="st22" x1="1115.93" y1="300.88" x2="1174.34" y2="339.21"/>
			<line class="st22" x1="1133.38" y1="274.9" x2="1191.79" y2="313.23"/>
			<line class="st22" x1="1003.23" y1="343.39" x2="1061.65" y2="381.72"/>
			<line class="st22" x1="1018.75" y1="320.3" x2="1077.16" y2="358.62"/>
			<line class="st22" x1="1034.25" y1="297.2" x2="1092.67" y2="335.53"/>
			<line class="st22" x1="1049.76" y1="274.11" x2="1108.17" y2="312.43"/>
			<line class="st22" x1="1065.27" y1="251.01" x2="1123.69" y2="289.33"/>
			<line class="st22" x1="1080.78" y1="227.91" x2="1139.19" y2="266.24"/>
		</g>
	</g>
	<g id="ISLA_C_00000020392165634434309460000001542865002657918336_">
		<g id="C-51_00000114773219074585568170000018389147279345478529_" ng-class="opalo.inmovablesClassList[275]" ng-click="opalo.showPropertyData(67, '51')">
			<polyline id="L-C51_00000129906422212891036440000004549167911037194399_" class="property pb-sprite-2" points="1147.22,437.87 1211.75,480.21 
				1197.5,504.13 1131.71,460.96 1147.22,437.87 			"/>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1170.2023 468.0464)" class="st6 st7 st18">51</text>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1141.2534 456.2936)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1200.6558 495.3899)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1171.5031 460.0946)"><tspan x="0" y="0" class="st1 st2 st18">22.0</tspan><tspan x="9.48" y="0" class="st1 st2 st18">9</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1160.5076 477.8279)"><tspan x="0" y="0" class="st1 st2 st18">22.5</tspan><tspan x="9.48" y="0" class="st1 st2 st18">3</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1158.1569 467.1303)" class="st1 st2 st18">178.49 m2</text>
			<g>
				<polyline class="st9" points="1151.51,457.31 1145.31,453.25 1150.46,452.22 1151.51,457.31 				"/>
				<polyline class="st10" points="1151.51,457.31 1146.35,458.34 1145.31,453.25 1151.51,457.31 				"/>
			</g>
		</g>
		<g id="C-52_00000113337001546642162120000000407596437580774556_" ng-class="opalo.inmovablesClassList[276]" ng-click="opalo.showPropertyData(67, '52')">
			<polyline id="L-C52_00000085243344196811921790000004977101619289541563_" class="property pb-sprite-1" points="1162.73,414.77 1226,456.28 
				1211.75,480.21 1147.22,437.87 1162.73,414.77 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1156.7605 433.1979)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1214.9011 471.4675)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1186.3777 436.5832)"><tspan x="0" y="0" class="st1 st2 st18">21.6</tspan><tspan x="9.48" y="0" class="st1 st2 st18">6</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1173.665 444.0345)" class="st1 st2 st18">175.03 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1185.2662 444.6542)" class="st6 st7 st18">52</text>
		</g>
		<g id="C-53_00000089570965896143921980000009979934228524502659_" ng-class="opalo.inmovablesClassList[277]" ng-click="opalo.showPropertyData(67, '53')"> 
			<polyline id="L-C53_00000067203235857189044190000012296271300234915728_" class="property pb-sprite-2" points="1178.24,391.67 1240.25,432.36 
				1226,456.28 1162.73,414.77 1178.24,391.67 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1172.2677 410.1018)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1229.1487 447.5434)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1201.2665 413.0733)"><tspan x="0" y="0" class="st1 st2 st18">21.2</tspan><tspan x="9.48" y="0" class="st1 st2 st18">3</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1189.1726 420.938)" class="st1 st2 st18">171.58 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1200.6001 420.0691)" class="st6 st7 st18">53</text>
		</g>
		<g id="C-54_00000017494692424681604140000000665642563731627660_" ng-class="opalo.inmovablesClassList[278]" ng-click="opalo.showPropertyData(67, '54')">
			<polyline id="L-C54_00000079474716028021571400000006465030541083176890_" class="property pb-sprite-1" points="1193.75,368.58 1254.5,408.44 
				1240.25,432.36 1178.24,391.67 1193.75,368.58 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1187.7743 387.0069)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1243.4072 423.6216)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1216.1438 389.5631)"><tspan x="0" y="0" class="st1 st2 st18">20.8</tspan><tspan x="9.48" y="0" class="st1 st2 st18">0</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1204.6816 397.8427)" class="st1 st2 st18">168.13 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1214.8318 397.5158)" class="st6 st7 st18">54</text>
		</g>
		<g id="C-55_00000028286918348942460240000002825645799916133284_" ng-class="opalo.inmovablesClassList[279]" ng-click="opalo.showPropertyData(67, '55')">
			<polyline id="L-C55_00000012434557421454137230000008034104638494055568_" class="property pb-sprite-2" points="1209.26,345.48 1268.75,384.51 
				1254.5,408.44 1193.75,368.58 1209.26,345.48 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1203.2848 363.9111)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1257.6533 399.6981)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1231.0211 366.0527)"><tspan x="0" y="0" class="st1 st2 st18">20.3</tspan><tspan x="9.48" y="0" class="st1 st2 st18">7</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1220.2006 374.7451)" class="st1 st2 st18">164.67 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1229.722 374.0074)" class="st6 st7 st18">55</text>
		</g>
		<g id="C-56_00000065055278250962840870000015534366453482413757_" ng-class="opalo.inmovablesClassList[280]" ng-click="opalo.showPropertyData(67, '56')">
			<polyline id="L-C56_00000094593332777075830460000015444466871554835099_" class="property pb-sprite-1" points="1224.77,322.39 1283,360.59 
				1268.75,384.51 1209.26,345.48 1224.77,322.39 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1218.791 340.8166)"><tspan x="0" y="0" class="st1 st2 st20">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1271.8993 375.7746)"><tspan x="0" y="0" class="st1 st2 st24">8.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1245.8973 342.5442)"><tspan x="0" y="0" class="st1 st2 st18">19.9</tspan><tspan x="9.48" y="0" class="st1 st2 st18">4</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1235.708 351.6488)" class="st1 st2 st18">161.22 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1244.5989 350.4978)" class="st6 st7 st18">56</text>
		</g>
		<g id="C-57_00000039102562245542787020000018392310737339648951_" ng-class="opalo.inmovablesClassList[281]" ng-click="opalo.showPropertyData(67, '57')">
			<polyline id="L-C57_00000150804491169769069270000004071450728063084949_" class="property pb-sprite-2" points="1242.21,296.4 1299.03,333.68 
				1283,360.59 1224.77,322.39 1242.21,296.4 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1235.275 316.2743)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1287.0355 350.3552)"><tspan x="0" y="0" class="st1 st2 st24">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1262.6304 316.0963)"><tspan x="0" y="0" class="st1 st2 st18">19.4</tspan><tspan x="9.48" y="0" class="st1 st2 st18">5</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1251.2177 328.5545)" class="st1 st2 st18">177.25 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1258.623 328.0836)" class="st6 st7 st18">57</text>
		</g>
		<g id="C-58_00000024714267910562917480000008723873961046280375_" ng-class="opalo.inmovablesClassList[282]" ng-click="opalo.showPropertyData(67, '58')">
			<polyline id="L-C58_00000127015376714218224100000003117381263909297306_" class="property pb-sprite-1" points="1259.66,270.42 1315.05,306.76 
				1299.03,333.68 1242.21,296.4 1259.66,270.42 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1252.7239 290.2913)"><tspan x="0" y="0" class="st1 st2 st20">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st20">0</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1303.0624 323.4414)"><tspan x="0" y="0" class="st1 st2 st24">9.0</tspan><tspan x="6.79" y="0" class="st1 st2 st24">1</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1279.3752 289.6481)"><tspan x="0" y="0" class="st1 st2 st18">18.9</tspan><tspan x="9.48" y="0" class="st1 st2 st18">7</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1268.6637 302.5685)" class="st1 st2 st18">172.88 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1275.6526 301.2014)" class="st6 st7 st18">58</text>
		</g>
		<g id="C-59_00000001661263696073600130000003523740876275486090_" ng-class="opalo.inmovablesClassList[283]" ng-click="opalo.showPropertyData(67, '59')">
			<polyline id="L-C59_00000099636073976873204850000014772070762362849710_" class="property pb-sprite-2" points="1259.66,270.42 1277.85,243.33 
				1329.46,277.18 1322.62,294.06 1315.05,306.76 1259.66,270.42 			"/>
			<text transform="matrix(0.5553 -0.8262 0.8359 0.5489 1270.5438 263.7527)"><tspan x="0" y="0" class="st1 st2 st20">9.3</tspan><tspan x="6.79" y="0" class="st1 st2 st20">8</tspan></text>
			<text transform="matrix(0.3736 -0.9186 0.9293 0.3693 1322.6694 289.3758)"><tspan x="0" y="0" class="st1 st2 st25">5.2</tspan><tspan x="6.8" y="0" class="st1 st2 st25">5</tspan></text>
			<text transform="matrix(0.509 -0.8542 0.8642 0.5032 1314.8597 303.6346)"><tspan x="0" y="0" class="st1 st2 st24">4.2</tspan><tspan x="6.79" y="0" class="st1 st2 st24">5</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1295.6737 261.312)"><tspan x="0" y="0" class="st1 st2 st18">17.6</tspan><tspan x="9.48" y="0" class="st1 st2 st18">7</tspan></text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1286.1021 276.5871)" class="st1 st2 st18">173.58 m2</text>
			<text transform="matrix(0.8396 0.5514 -0.5578 0.8299 1292.1718 272.5316)" class="st6 st7 st18">59</text>
			<g>
				<polyline class="st9" points="1280.79,264.77 1274.6,260.71 1279.75,259.68 1280.79,264.77 				"/>
				<polyline class="st10" points="1280.79,264.77 1275.64,265.8 1274.6,260.71 1280.79,264.77 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000090253634576280014890000011869711417580206260_">
			<line class="st22" x1="1147.22" y1="437.87" x2="1211.75" y2="480.21"/>
			<line class="st22" x1="1162.73" y1="414.77" x2="1226" y2="456.28"/>
			<line class="st22" x1="1178.24" y1="391.67" x2="1240.25" y2="432.36"/>
			<line class="st22" x1="1193.75" y1="368.58" x2="1254.5" y2="408.44"/>
			<line class="st22" x1="1268.75" y1="384.51" x2="1209.26" y2="345.48"/>
			<line class="st22" x1="1224.77" y1="322.39" x2="1283" y2="360.59"/>
			<line class="st22" x1="1299.03" y1="333.68" x2="1242.21" y2="296.4"/>
			<line class="st22" x1="1259.66" y1="270.42" x2="1315.05" y2="306.76"/>
			<line class="st22" x1="1329.46" y1="277.18" x2="1277.86" y2="243.33"/>
		</g>
	</g>
	<g id="ISLA_D_00000124121506048738165930000010351899472555793030_">
		<g id="D-60" ng-class="opalo.inmovablesClassList[284]" ng-click="opalo.showPropertyData(67, '60')">
			<polyline id="L-D60" class="property pb-sprite-1" points="1336.07,152 1364.11,158.08 1348.44,225.64 1321.05,219.7 1336.07,152 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1330.4879 219.8847)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1344.3253 159.0317)"><tspan x="0" y="0" class="st1 st2 st17">8.1</tspan><tspan x="6.74" y="0" class="st1 st2 st17">9</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1332.4044 192.8092)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2251 -0.9637 0.9749 0.2225 1353.2391 197.3874)"><tspan x="0" y="0" class="st1 st2 st26">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st26">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1344.6725 199.8035)" class="st1 st2 st13">161.91 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1340.354 191.225)" class="st6 st7 st13">60</text>
			<g>
				<polyline class="st9" points="1337.84,208.72 1336.24,215.9 1333.41,211.52 1337.84,208.72 				"/>
				<polyline class="st10" points="1337.84,208.72 1340.68,213.1 1336.24,215.9 1337.84,208.72 				"/>
			</g>
		</g>
		<g id="D-61" ng-class="opalo.inmovablesClassList[285]" ng-click="opalo.showPropertyData(67, '61')">
			<polyline id="L-D61" class="property pb-sprite-2" points="1308.67,146.07 1336.07,152 1321.05,219.7 1293.66,213.76 1308.67,146.07 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1303.095 213.9454)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1316.6099 153.0223)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1305.0114 186.8709)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1317.2792 193.8662)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1313.0876 184.7436)" class="st6 st7 st13">61</text>
		</g>
		<g id="D-62" ng-class="opalo.inmovablesClassList[286]" ng-click="opalo.showPropertyData(67, '62')">
			<polyline id="L-D62" class="property pb-sprite-1" points="1281.28,140.13 1308.67,146.07 1293.66,213.76 1266.26,207.82 1281.28,140.13 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1275.7014 208.0091)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1289.2203 147.0858)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1277.6198 180.9349)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1289.8878 187.9293)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1283.2711 177.6021)" class="st6 st7 st13">62</text>
		</g>
		<g id="D-63" ng-class="opalo.inmovablesClassList[287]" ng-click="opalo.showPropertyData(67, '63')">
			<polyline id="L-D63" class="property pb-sprite-2" points="1253.88,134.19 1281.28,140.13 1266.26,207.82 1238.87,201.89 1253.88,134.19 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1248.3119 202.0726)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1261.829 141.1489)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1250.2288 174.9961)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1262.4963 181.9924)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1256.9054 171.2725)" class="st6 st7 st13">63</text>
		</g>
		<g id="D-64" ng-class="opalo.inmovablesClassList[288]" ng-click="opalo.showPropertyData(67, '64')">
			<polyline id="L-D64" class="property pb-sprite-1" points="1226.49,128.26 1253.88,134.19 1238.87,201.89 1211.47,195.95 1226.49,128.26 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1220.9183 196.1362)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1234.4357 135.2116)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1222.8333 169.0593)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1235.103 176.055)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1230.0609 166.3759)" class="st6 st7 st13">64</text>
		</g>
		<g id="D-65" ng-class="opalo.inmovablesClassList[289]" ng-click="opalo.showPropertyData(67, '65')">
			<polyline id="L-D65" class="property pb-sprite-2" points="1199.1,122.32 1226.49,128.26 1211.47,195.95 1184.08,190.01 1199.1,122.32 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1193.5272 190.1983)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1207.0304 129.2737)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1195.4298 163.1228)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1207.7137 170.1176)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1203.4097 160.0891)" class="st6 st7 st13">65</text>
		</g>
		<g id="D-66" ng-class="opalo.inmovablesClassList[290]" ng-click="opalo.showPropertyData(67, '66')">
			<polyline id="L-D66" class="property pb-sprite-1" points="1171.7,116.38 1199.1,122.32 1184.08,190.01 1156.69,184.08 1171.7,116.38 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1166.1357 184.2614)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1179.6411 123.3363)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1168.0405 157.1853)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1180.3202 164.1812)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1174.8031 154.101)" class="st6 st7 st13">66</text>
		</g>
		<g id="D-67" ng-class="opalo.inmovablesClassList[291]" ng-click="opalo.showPropertyData(67, '67')">
			<polyline id="L-D67" class="property pb-sprite-2" points="1144.31,110.44 1171.7,116.38 1156.69,184.08 1129.29,178.14 1144.31,110.44 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1138.7324 178.3239)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1152.2477 117.3999)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1140.6473 151.2471)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1152.9269 158.2439)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1148.7103 149.1888)" class="st6 st7 st13">67</text>
		</g>
		<g id="D-68" ng-class="opalo.inmovablesClassList[292]" ng-click="opalo.showPropertyData(67, '68')">
			<polyline id="L-D68" class="property pb-sprite-1" points="1116.92,104.51 1144.31,110.44 1129.29,178.14 1101.9,172.2 1116.92,104.51 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1111.343 172.3874)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1124.8583 111.4624)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1113.2581 145.3096)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1125.5316 152.3062)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1121.3887 142.9203)" class="st6 st7 st13">68</text>
		</g>
		<g id="D-69" ng-class="opalo.inmovablesClassList[293]" ng-click="opalo.showPropertyData(67, '69')">
			<polyline id="L-D69" class="property pb-sprite-2" points="1089.53,98.57 1116.92,104.51 1101.9,172.2 1074.51,166.26 1089.53,98.57 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1083.9513 166.4515)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1097.4648 105.5261)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1085.8646 139.3732)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1098.1383 146.3688)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1093.9485 137.2027)" class="st6 st7 st13">69</text>
		</g>
		<g id="D-70" ng-class="opalo.inmovablesClassList[294]" ng-click="opalo.showPropertyData(67, '70')">
			<polyline id="L-D70" class="property pb-sprite-1" points="1062.13,92.63 1089.53,98.57 1074.51,166.26 1047.12,160.33 1062.13,92.63 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1056.5582 160.5132)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1070.0719 99.5868)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1058.4712 133.4359)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1070.7448 140.4324)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1066.4437 131.7578)" class="st6 st7 st13">70</text>
		</g>
		<g id="D-71" ng-class="opalo.inmovablesClassList[295]" ng-click="opalo.showPropertyData(67, '71')">
			<polyline id="L-D71" class="property pb-sprite-2" points="1034.74,86.69 1062.13,92.63 1047.12,160.33 1019.72,154.39 1034.74,86.69 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1029.1647 154.5768)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1042.6803 93.6509)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1031.0801 127.498)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1043.3517 134.4942)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1039.524 125.1389)" class="st6 st7 st13">71</text>
		</g>
		<g id="D-72" ng-class="opalo.inmovablesClassList[296]" ng-click="opalo.showPropertyData(67, '72')">
			<polyline id="L-D72" class="property pb-sprite-1" points="1007.35,80.76 1034.74,86.69 1019.72,154.39 992.33,148.45 1007.35,80.76 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1001.7716 148.6385)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 1015.2831 87.7127)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1003.6867 121.5607)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1015.9581 128.5578)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 1011.7902 119.2845)" class="st6 st7 st13">72</text>
		</g>
		<g id="D-73" ng-class="opalo.inmovablesClassList[297]" ng-click="opalo.showPropertyData(67, '73')">
			<polyline id="L-D73" class="property pb-sprite-2" points="979.95,74.82 1007.35,80.76 992.33,148.45 964.94,142.51 979.95,74.82 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 974.3785 142.7003)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 987.8932 81.7781)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 976.2951 115.6248)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 988.5667 122.6209)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 984.3721 113.4677)" class="st6 st7 st13">73</text>
		</g>
		<g id="D-74" ng-class="opalo.inmovablesClassList[298]" ng-click="opalo.showPropertyData(67, '74')">
			<polyline id="L-D74" class="property pb-sprite-1" points="952.56,68.88 979.95,74.82 964.94,142.51 937.55,136.58 952.56,68.88 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 946.9854 136.762)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 960.4963 75.839)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 948.8997 109.688)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 961.1736 116.6826)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 956.9433 107.6805)" class="st6 st7 st13">74</text>
		</g>
		<g id="D-75" ng-class="opalo.inmovablesClassList[299]" ng-click="opalo.showPropertyData(67, '75')">
			<polyline id="L-D75" class="property pb-sprite-2" points="925.17,62.95 952.56,68.88 937.55,136.58 910.15,130.64 925.17,62.95 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 919.5901 130.8242)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 933.105 69.9011)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 921.5087 103.7491)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 933.7781 110.7458)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 929.4832 102.0615)" class="st6 st7 st13">75</text>
		</g>
		<g id="D-76" ng-class="opalo.inmovablesClassList[300]" ng-click="opalo.showPropertyData(67, '76')">
			<polyline id="L-D76" class="property pb-sprite-1" points="894.35,56.27 925.17,62.95 910.15,130.64 879.33,123.96 894.35,56.27 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 890.4861 124.5181)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 904.001 63.595)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 890.6886 97.0711)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 906.387 104.808)" class="st1 st2 st13">180.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 900.4625 95.3627)" class="st6 st7 st13">76</text>
		</g>
		<g id="D-77" ng-class="opalo.inmovablesClassList[301]" ng-click="opalo.showPropertyData(67, '77')">
			<polyline id="L-D77" class="property pb-sprite-2" points="863.53,49.58 894.35,56.27 879.33,123.96 848.52,117.28 863.53,49.58 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 859.6682 117.8395)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 873.1835 56.9145)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 859.8708 90.3916)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 875.569 98.1294)" class="st1 st2 st13">180.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 869.73 88.291)" class="st6 st7 st13">77</text>
		</g>
		<g id="D-78" ng-class="opalo.inmovablesClassList[302]" ng-click="opalo.showPropertyData(67, '78')">
			<polyline id="L-D78" class="property pb-sprite-1" points="832.72,42.91 863.53,49.58 848.52,117.28 817.7,110.6 832.72,42.91 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 828.8508 111.1581)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 842.3677 50.2354)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 829.0549 83.7134)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 844.7515 91.4489)" class="st1 st2 st13">180.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 838.9142 81.6119)" class="st6 st7 st13">78</text>
		</g>
		<g id="D-79" ng-class="opalo.inmovablesClassList[303]" ng-click="opalo.showPropertyData(67, '79')">
			<polyline id="L-D79" class="property pb-sprite-2" points="801.9,36.23 832.72,42.91 817.7,110.6 786.88,103.92 801.9,36.23 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 798.0331 104.4785)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 811.55 43.5559)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 798.2352 77.0334)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 813.9355 84.7707)" class="st1 st2 st13">180.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 808.0967 74.9314)" class="st6 st7 st13">79</text>
		</g>
		<g id="D-80" ng-class="opalo.inmovablesClassList[304]" ng-click="opalo.showPropertyData(67, '80')">
			<polyline id="L-D80" class="property pb-sprite-1" points="771.08,29.55 801.9,36.23 786.88,103.92 756.07,97.24 771.08,29.55 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 767.2173 97.7994)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 780.7321 36.8773)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 767.4198 70.3524)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 783.1158 78.0907)" class="st1 st2 st13">180.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 777.2805 68.2541)" class="st6 st7 st13">80</text>
		</g>
		<g id="D-81" ng-class="opalo.inmovablesClassList[305]" ng-click="opalo.showPropertyData(67, '81')">
			<polyline id="L-D81" class="property pb-sprite-2" points="737.4,22.25 771.08,29.55 756.07,97.24 722.39,89.94 737.4,22.25 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 734.9713 90.8125)"><tspan x="0" y="0" class="st1 st2 st17">9.8</tspan><tspan x="6.74" y="0" class="st1 st2 st17">4</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 748.4846 29.888)"><tspan x="0" y="0" class="st1 st2 st17">9.8</tspan><tspan x="6.74" y="0" class="st1 st2 st17">4</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 733.7429 63.0524)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 752.3013 71.4149)" class="st1 st2 st13">196.71 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 745.0332 61.2639)" class="st6 st7 st13">81</text>
			<g>
				<polyline class="st9" points="742.32,79.64 740.73,86.82 737.89,82.44 742.32,79.64 				"/>
				<polyline class="st10" points="742.32,79.64 745.16,84.02 740.73,86.82 742.32,79.64 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000033326844550661458820000003253064721412736130_">
			<line class="st22" x1="902.15" y1="310.34" x2="989.17" y2="180.76"/>
			<line class="st22" x1="904.7" y1="162.45" x2="971.87" y2="206.52"/>
			<line class="st22" x1="1047.58" y1="219.08" x2="989.17" y2="180.76"/>
			<line class="st22" x1="1321.05" y1="219.7" x2="1336.07" y2="152"/>
			<line class="st22" x1="1293.66" y1="213.76" x2="1308.67" y2="146.07"/>
			<line class="st22" x1="1266.26" y1="207.82" x2="1281.28" y2="140.13"/>
			<line class="st22" x1="1238.87" y1="201.89" x2="1253.88" y2="134.19"/>
			<line class="st22" x1="1211.47" y1="195.95" x2="1226.49" y2="128.26"/>
			<line class="st22" x1="1184.08" y1="190.01" x2="1199.1" y2="122.32"/>
			<line class="st22" x1="1156.69" y1="184.08" x2="1171.7" y2="116.38"/>
			<line class="st22" x1="1129.29" y1="178.14" x2="1144.31" y2="110.44"/>
			<line class="st22" x1="1101.9" y1="172.2" x2="1116.92" y2="104.51"/>
			<line class="st22" x1="1074.51" y1="166.26" x2="1089.53" y2="98.57"/>
			<line class="st22" x1="1047.12" y1="160.33" x2="1062.13" y2="92.63"/>
			<line class="st22" x1="1019.72" y1="154.39" x2="1034.74" y2="86.69"/>
			<line class="st22" x1="992.33" y1="148.45" x2="1007.35" y2="80.76"/>
			<line class="st22" x1="964.94" y1="142.51" x2="979.95" y2="74.82"/>
			<line class="st22" x1="937.55" y1="136.58" x2="952.56" y2="68.88"/>
			<line class="st22" x1="910.15" y1="130.64" x2="925.17" y2="62.95"/>
			<line class="st22" x1="879.33" y1="123.96" x2="894.35" y2="56.27"/>
			<line class="st22" x1="848.52" y1="117.28" x2="863.53" y2="49.58"/>
			<line class="st22" x1="817.7" y1="110.6" x2="832.72" y2="42.91"/>
			<line class="st22" x1="786.88" y1="103.92" x2="801.9" y2="36.23"/>
			<line class="st22" x1="756.07" y1="97.24" x2="771.08" y2="29.55"/>
		</g>
	</g>
	<g id="ISLA_E_00000055695850572595426070000014651276353834243223_">
		<g id="E-82_00000160875403031850091290000016813521174743498891_" ng-class="opalo.inmovablesClassList[306]" ng-click="opalo.showPropertyData(67, '82')">
			<polyline id="L-E82_00000137108906011960584960000012321113401362411157_" class="property pb-sprite-1" points="822.71,226.27 790.59,219.31 
				807.86,141.46 839.98,148.42 822.71,226.27 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 818.159 148.9272)"><tspan x="0" y="0" class="st1 st2 st17">9.3</tspan><tspan x="6.74" y="0" class="st1 st2 st17">8</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 802.3934 220.0052)"><tspan x="0" y="0" class="st1 st2 st17">9.3</tspan><tspan x="6.74" y="0" class="st1 st2 st17">8</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 803.0665 187.339)"><tspan x="0" y="0" class="st1 st2 st13">23.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 828.3428 192.8182)"><tspan x="0" y="0" class="st1 st2 st13">23.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2114 -0.9666 0.9779 0.209 816.4308 196.5912)" class="st1 st2 st27">215.76 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 813.103 187.5355)" class="st6 st7 st13">82</text>
			<g>
				<polyline class="st9" points="822.41,151.71 820.82,158.89 817.99,154.51 822.41,151.71 				"/>
				<polyline class="st10" points="822.41,151.71 825.25,156.08 820.82,158.89 822.41,151.71 				"/>
			</g>
		</g>
		<g id="E-83_00000080166105512235977320000003842953560566483359_" ng-class="opalo.inmovablesClassList[307]" ng-click="opalo.showPropertyData(67, '83')">
			<polyline id="L-E83_00000003788865734330544420000001263169946399198852_" class="property pb-sprite-2" points="790.59,219.31 759.77,212.62 
				777.04,134.78 807.86,141.46 790.59,219.31 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 786.6905 142.1062)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 770.9212 213.1824)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 772.2528 180.6593)"><tspan x="0" y="0" class="st1 st2 st13">23.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2114 -0.9666 0.9779 0.209 784.9628 189.774)" class="st1 st2 st27">207.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 781.7756 180.7452)" class="st6 st7 st13">83</text>
			<g>
				<polyline class="st9" points="790.95,144.89 789.35,152.07 786.52,147.69 790.95,144.89 				"/>
				<polyline class="st10" points="790.95,144.89 793.78,149.27 789.35,152.07 790.95,144.89 				"/>
			</g>
		</g>
		<g id="E-84_00000008864393867106830070000005063847297306997158_" ng-class="opalo.inmovablesClassList[308]" ng-click="opalo.showPropertyData(67, '84')">
			<polyline id="L-E84_00000056393746202893619280000000936449830117629832_" class="property pb-sprite-1" points="759.77,212.62 728.95,205.95 
				746.22,128.1 777.04,134.78 759.77,212.62 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 755.8706 135.4272)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 740.1033 206.5039)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 741.4348 173.9807)"><tspan x="0" y="0" class="st1 st2 st13">23.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2114 -0.9666 0.9779 0.209 754.1451 183.1008)" class="st1 st2 st27">207.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 750.956 174.0652)" class="st6 st7 st13">84</text>
			<g>
				<polyline class="st9" points="760.13,138.21 758.54,145.39 755.7,141.01 760.13,138.21 				"/>
				<polyline class="st10" points="760.13,138.21 762.97,142.58 758.54,145.39 760.13,138.21 				"/>
			</g>
		</g>
		<g id="E-85_00000070828072555344070580000005629041301987672196_" ng-class="opalo.inmovablesClassList[309]" ng-click="opalo.showPropertyData(67, '85')">
			<polyline id="L-E85_00000005254092970736718670000013064854640435007398_" class="property pb-sprite-2" points="728.95,205.95 698.14,199.27 
				715.41,121.42 746.22,128.1 728.95,205.95 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 725.0567 128.7485)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 709.2913 199.8256)"><tspan x="0" y="0" class="st1 st2 st17">9.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 710.6169 167.3021)"><tspan x="0" y="0" class="st1 st2 st13">23.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2114 -0.9666 0.9779 0.209 723.327 176.4205)" class="st1 st2 st27">207.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 720.1404 167.3851)" class="st6 st7 st13">85</text>
			<g>
				<polyline class="st9" points="729.31,131.53 727.72,138.71 724.89,134.33 729.31,131.53 				"/>
				<polyline class="st10" points="729.31,131.53 732.15,135.9 727.72,138.71 729.31,131.53 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000096028182072625729750000005419547897493601953_">
			<line class="st22" x1="698.14" y1="199.27" x2="822.71" y2="226.27"/>
			<line class="st22" x1="728.95" y1="205.95" x2="746.22" y2="128.1"/>
			<line class="st22" x1="759.77" y1="212.62" x2="777.04" y2="134.78"/>
			<line class="st22" x1="790.59" y1="219.31" x2="807.86" y2="141.46"/>
			<line class="st22" x1="822.71" y1="226.27" x2="839.98" y2="148.42"/>
		</g>
	</g>
	<g id="ISLA_F">
		<g id="F-86" ng-class="opalo.inmovablesClassList[310]" ng-click="opalo.showPropertyData(67, '86')" >
			<polyline id="L-F86" class="property pb-sprite-2" points="635.58,7.27 637.08,0.5 705.56,15.35 704.06,22.12 698.05,49.19 629.57,34.35 
				635.58,7.27 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 698.8071 37.7445)"><tspan x="0" y="0" class="st1 st2 st13">10.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 637.1697 24.385)"><tspan x="0" y="0" class="st1 st2 st13">10.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 664.2228 11.6216)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 654.0357 25.8354)" class="st1 st2 st28">200.00 m2</text>
			<text transform="matrix(0.9871 0.2163 -0.2188 0.9758 665.6118 20.7256)" class="st6 st7 st29">86</text>
			<g>
				<polyline class="st9" points="694.96,30.79 687.7,29.21 692.12,26.41 694.96,30.79 				"/>
				<polyline class="st10" points="694.96,30.79 690.53,33.59 687.7,29.21 694.96,30.79 				"/>
			</g>
		</g>
		<g id="F-87" ng-class="opalo.inmovablesClassList[311]" ng-click="opalo.showPropertyData(67, '87')">
			<polyline id="L-F87" class="property pb-sprite-1" points="690.55,83.04 622.06,68.2 629.57,34.35 698.05,49.19 690.55,83.04 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 691.2986 71.5916)"><tspan x="0" y="0" class="st1 st2 st13">10.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 629.6613 58.232)"><tspan x="0" y="0" class="st1 st2 st13">10.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 656.716 45.47)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 647.8661 59.4872)" class="st1 st2 st28">200.00 m2</text>
			<text transform="matrix(0.9871 0.2163 -0.2188 0.9758 658.215 53.9516)" class="st6 st7 st29">87</text>
		</g>
		<g id="F-88" ng-class="opalo.inmovablesClassList[312]" ng-click="opalo.showPropertyData(67, '88')">
			<polyline id="L-F88" class="property pb-sprite-2" points="683.79,113.5 615.3,98.66 622.06,68.2 690.55,83.04 683.79,113.5 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 684.4587 102.4239)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 622.8211 89.0654)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 649.2054 79.3175)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 641.1097 89.9502)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.9871 0.2163 -0.2188 0.9758 650.8539 84.85)" class="st6 st7 st29">88</text>
		</g>
		<g id="F-89" ng-class="opalo.inmovablesClassList[313]" ng-click="opalo.showPropertyData(67, '89')">
			<polyline id="L-F89" class="property pb-sprite-1" points="677.03,143.96 608.55,129.12 615.3,98.66 683.79,113.5 677.03,143.96 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 677.6991 132.886)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 616.0637 119.5269)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 642.4496 109.7804)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 634.3496 120.4119)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 644.8302 116.6906)" class="st6 st7 st17">89</text>
		</g>
		<g id="F-90" ng-class="opalo.inmovablesClassList[314]" ng-click="opalo.showPropertyData(67, '90')">
			<polyline id="L-F90" class="property pb-sprite-2" points="670.27,174.43 601.79,159.58 608.55,129.12 677.03,143.96 670.27,174.43 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 670.9434 163.3489)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 609.306 149.9894)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 635.6923 140.241)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 627.5944 150.8742)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 637.7965 146.5884)" class="st6 st7 st28">90</text>
		</g>
		<g id="F-91" ng-class="opalo.inmovablesClassList[315]" ng-click="opalo.showPropertyData(67, '91')">
			<polyline id="LF-91" class="property pb-sprite-1" points="663.51,204.89 595.03,190.05 601.79,159.58 670.27,174.43 663.51,204.89 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 664.1844 193.8081)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 602.5485 180.4509)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 628.9327 170.7031)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 620.8371 181.3365)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 630.3448 178.25)" class="st6 st7 st28">91</text>
		</g>
		<g id="F-92" ng-class="opalo.inmovablesClassList[316]" ng-click="opalo.showPropertyData(67, '92')">
			<polyline id="L-F92" class="property pb-sprite-2" points="656.76,235.35 588.28,220.51 595.03,190.05 663.51,204.89 656.76,235.35 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 657.4265 224.2716)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 595.791 210.9125)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 622.1772 201.1651)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 614.0789 211.7986)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 623.5847 208.7117)" class="st6 st7 st28">92</text>
			<g>
				<polyline class="st9" points="653.29,218.64 646.03,217.06 650.45,214.26 653.29,218.64 				"/>
				<polyline class="st10" points="653.29,218.64 648.86,221.44 646.03,217.06 653.29,218.64 				"/>
			</g>
		</g>
		<g id="F-93" ng-class="opalo.inmovablesClassList[317]" ng-click="opalo.showPropertyData(67, '93')">
			<polyline id="L-F93" class="property pb-sprite-1" points="650,265.81 581.52,250.97 588.28,220.51 656.76,235.35 650,265.81 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 650.6705 254.7354)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 589.0353 241.3754)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 615.4193 231.6285)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 607.3226 242.2611)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 617.2267 239.668)" class="st6 st7 st28">93</text>
			<g>
				<polyline class="st9" points="646.53,249.1 639.27,247.52 643.69,244.72 646.53,249.1 				"/>
				<polyline class="st10" points="646.53,249.1 642.1,251.9 639.27,247.52 646.53,249.1 				"/>
			</g>
		</g>
		<g id="F-94" ng-class="opalo.inmovablesClassList[318]" ng-click="opalo.showPropertyData(67, '94')">
			<polyline id="L-F94" class="property pb-sprite-2" points="643.24,296.28 574.76,281.43 581.52,250.97 650,265.81 643.24,296.28 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 643.9133 285.196)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 582.2778 271.8369)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 608.662 262.0891)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 600.5643 272.7232)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 610.1922 269.1201)" class="st6 st7 st28">94</text>
			<g>
				<polyline class="st9" points="639.77,279.56 632.51,277.99 636.94,275.18 639.77,279.56 				"/>
				<polyline class="st10" points="639.77,279.56 635.34,282.36 632.51,277.99 639.77,279.56 				"/>
			</g>
		</g>
		<g id="F-95" ng-class="opalo.inmovablesClassList[319]" ng-click="opalo.showPropertyData(67, '95')">
			<polyline id="L-F95" class="property pb-sprite-1" points="636.49,326.74 568,311.89 574.76,281.43 643.24,296.28 636.49,326.74 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 637.1581 315.6561)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 575.5222 302.2989)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 601.9044 292.5516)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 593.808 303.1858)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 603.3074 298.2943)" class="st6 st7 st28">95</text>
			<g>
				<polyline class="st9" points="633.02,310.02 625.75,308.45 630.18,305.65 633.02,310.02 				"/>
				<polyline class="st10" points="633.02,310.02 628.59,312.82 625.75,308.45 633.02,310.02 				"/>
			</g>
		</g>
		<g id="F-96" ng-class="opalo.inmovablesClassList[320]" ng-click="opalo.showPropertyData(67, '96')">
			<polyline id="L-F96" class="property pb-sprite-2" points="629.73,357.2 561.25,342.36 568,311.89 636.49,326.74 629.73,357.2 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 630.4002 346.1195)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 568.7646 332.7614)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 587.0491 333.6467)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 596.1475 329.8206)" class="st6 st7 st28">96</text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 595.1469 323.0131)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<g>
				<polyline class="st9" points="626.26,340.48 618.99,338.91 623.42,336.11 626.26,340.48 				"/>
				<polyline class="st10" points="626.26,340.48 621.83,343.29 618.99,338.91 626.26,340.48 				"/>
			</g>
		</g>
		<g id="F-97" ng-class="opalo.inmovablesClassList[321]" ng-click="opalo.showPropertyData(67, '97')">
			<polyline id="L-F97" class="property pb-sprite-1" points="622.97,387.66 554.49,372.82 561.25,342.36 629.73,357.2 622.97,387.66 			"/>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 623.6402 376.5835)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 562.009 363.2234)"><tspan x="0" y="0" class="st1 st2 st13">9.0</tspan><tspan x="6.81" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 588.3914 353.4751)"><tspan x="0" y="0" class="st1 st2 st17">20.0</tspan><tspan x="9.45" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 580.2908 364.1089)" class="st1 st2 st28">180.00 m2</text>
			<text transform="matrix(0.989 0.2078 -0.2102 0.9777 588.4759 360.1687)" class="st6 st7 st28">97</text>
			<g>
				<polyline class="st9" points="619.5,370.94 612.24,369.37 616.67,366.57 619.5,370.94 				"/>
				<polyline class="st10" points="619.5,370.94 615.07,373.75 612.24,369.37 619.5,370.94 				"/>
			</g>
		</g>
		<g id="F-98" ng-class="opalo.inmovablesClassList[322]" ng-click="opalo.showPropertyData(67, '98')">
			<polyline id="L-F98" class="property pb-sprite-2" points="577.83,377.88 622.97,387.66 610.16,445.39 562.82,445.57 577.83,377.88 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 593.308 386.4677)"><tspan x="0" y="0" class="st1 st2 st17">13.1</tspan><tspan x="9.45" y="0" class="st1 st2 st17">8</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 574.1736 418.6825)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(1.0117 0 0 1 580.3546 443.6849)"><tspan x="0" y="0" class="st1 st2 st14">13.5</tspan><tspan x="9.45" y="0" class="st1 st2 st14">1</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 613.5646 421.9987)"><tspan x="0" y="0" class="st1 st2 st13">17.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">6</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 595.782 428.4273)" class="st1 st2 st13">244.24 m2</text>
			<text transform="matrix(0.1995 -0.9691 0.9804 0.1972 591.4797 419.0606)" class="st6 st7 st30">98</text>
			<g>
				<polyline class="st9" points="587.11,436.83 588.7,429.65 591.54,434.02 587.11,436.83 				"/>
				<polyline class="st10" points="587.11,436.83 584.28,432.45 588.7,429.65 587.11,436.83 				"/>
			</g>
		</g>
		<g id="F-99" ng-class="opalo.inmovablesClassList[323]" ng-click="opalo.showPropertyData(67, '99')">
			<polyline id="L-F99" class="property pb-sprite-1" points="550.44,371.94 577.83,377.88 562.82,445.57 535.42,439.63 550.44,371.94 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 544.8617 439.8203)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 558.3769 378.8962)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 546.7781 412.7457)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 558.0753 420.2546)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 552.9253 410.1972)" class="st6 st7 st13">99</text>
		</g>
		<g id="F-100" ng-class="opalo.inmovablesClassList[324]" ng-click="opalo.showPropertyData(67, '100')">
			<polyline id="L-F100" class="property pb-sprite-2" points="523.05,366 550.44,371.94 535.42,439.63 508.03,433.7 523.05,366 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 517.4724 433.8828)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 530.9855 372.9593)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 519.3867 406.8088)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 533.8774 415.0097)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 527.9634 406.6871)" class="st6 st7 st13">100</text>
		</g>
		<g id="F-101" ng-class="opalo.inmovablesClassList[325]" ng-click="opalo.showPropertyData(67, '101')">
			<polyline id="L-F101" class="property pb-sprite-1" points="495.65,360.07 523.05,366 508.03,433.7 480.64,427.76 495.65,360.07 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 490.0791 427.9455)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 503.59 367.0226)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 491.9915 400.8711)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 503.2885 408.3809)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 497.578 399.9346)" class="st6 st7 st13">101</text>
		</g>
		<g id="F-102" ng-class="opalo.inmovablesClassList[326]" ng-click="opalo.showPropertyData(67, '102')">
			<polyline id="L-F102" class="property pb-sprite-2" points="468.26,354.13 495.65,360.07 480.64,427.76 453.25,421.82 468.26,354.13 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 462.6837 422.0087)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 476.2003 361.087)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 464.6001 394.9342)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 479.0924 403.1365)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 470.2815 396.1349)" class="st6 st7 st13">102</text>
		</g>
		<g id="F-103" ng-class="opalo.inmovablesClassList[327]" ng-click="opalo.showPropertyData(67, '103')">
			<polyline id="L-F103" class="property pb-sprite-1" points="440.87,348.19 468.26,354.13 453.25,421.82 425.85,415.89 440.87,348.19 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 435.2922 416.0718)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 448.8053 355.1483)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 437.2046 388.9974)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 448.5014 396.5082)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 442.3974 388.7248)" class="st6 st7 st13">103</text>
		</g>
		<g id="F-104" ng-class="opalo.inmovablesClassList[328]" ng-click="opalo.showPropertyData(67, '104')">
			<polyline id="L-F104" class="property pb-sprite-2" points="413.48,342.26 440.87,348.19 425.85,415.89 398.46,409.95 413.48,342.26 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 407.8987 410.1354)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 421.4136 349.2123)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 409.8113 383.0601)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 424.3075 391.2632)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 416.5523 382.5554)" class="st6 st7 st13">104</text>
			<g>
				<polyline class="st9" points="413.66,406.15 415.25,398.97 418.09,403.34 413.66,406.15 				"/>
				<polyline class="st10" points="413.66,406.15 410.82,401.77 415.25,398.97 413.66,406.15 				"/>
			</g>
		</g>
		<g id="F-105" ng-class="opalo.inmovablesClassList[329]" ng-click="opalo.showPropertyData(67, '105')">
			<polyline id="L-F105" class="property pb-sprite-1" points="386.08,336.32 413.48,342.26 398.46,409.95 371.07,404.01 386.08,336.32 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 380.5033 404.1986)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 394.0203 343.275)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 382.4195 377.1251)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 393.7152 384.6316)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 388.5495 377.0552)" class="st6 st7 st13">105</text>
			<g>
				<polyline class="st9" points="386.27,400.21 387.86,393.03 390.69,397.41 386.27,400.21 				"/>
				<polyline class="st10" points="386.27,400.21 383.43,395.83 387.86,393.03 386.27,400.21 				"/>
			</g>
		</g>
		<g id="F-106" ng-class="opalo.inmovablesClassList[330]" ng-click="opalo.showPropertyData(67, '106')">
			<polyline id="L-F106" class="property pb-sprite-2" points="358.69,330.38 386.08,336.32 371.07,404.01 343.67,398.08 358.69,330.38 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 353.1121 398.2608)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 366.6251 337.3373)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 355.0261 371.1877)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 369.5206 379.3895)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 362.6879 370.8971)" class="st6 st7 st13">106</text>
			<g>
				<polyline class="st9" points="358.87,394.27 360.47,387.09 363.3,391.47 358.87,394.27 				"/>
				<polyline class="st10" points="358.87,394.27 356.03,389.9 360.47,387.09 358.87,394.27 				"/>
			</g>
		</g>
		<g id="F-107" ng-class="opalo.inmovablesClassList[331]" ng-click="opalo.showPropertyData(67, '107')">
			<polyline id="L-F107" class="property pb-sprite-1" points="331.3,324.44 358.69,330.38 343.67,398.08 316.28,392.14 331.3,324.44 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 325.7183 392.3253)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 339.2335 331.4013)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 327.6311 365.249)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 338.93 372.7593)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 335.1383 365.6714)" class="st6 st7 st13">107</text>
			<g>
				<polyline class="st9" points="331.48,388.34 333.07,381.16 335.91,385.53 331.48,388.34 				"/>
				<polyline class="st10" points="331.48,388.34 328.64,383.96 333.07,381.16 331.48,388.34 				"/>
			</g>
		</g>
		<g id="F-108" ng-class="opalo.inmovablesClassList[332]" ng-click="opalo.showPropertyData(67, '108')">
			<polyline id="L-F108" class="property pb-sprite-2" points="303.9,318.51 331.3,324.44 316.28,392.14 288.89,386.2 303.9,318.51 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 298.3269 386.3885)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 311.8399 325.4649)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 300.2395 359.3131)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 314.734 367.5148)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 307.9933 358.6177)" class="st6 st7 st13">108</text>
			<g>
				<polyline class="st9" points="304.08,382.4 305.68,375.22 308.51,379.6 304.08,382.4 				"/>
				<polyline class="st10" points="304.08,382.4 301.25,378.02 305.68,375.22 304.08,382.4 				"/>
			</g>
		</g>
		<g id="F-109" ng-class="opalo.inmovablesClassList[333]" ng-click="opalo.showPropertyData(67, '109')">
			<polyline id="L-F109" class="property pb-sprite-1" points="276.51,312.57 303.9,318.51 288.89,386.2 261.49,380.27 276.51,312.57 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 270.9336 380.4511)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 284.4468 319.5267)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 272.8459 353.3767)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 284.1432 360.8856)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 280.4494 353.3482)" class="st6 st7 st13">109</text>
			<g>
				<polyline class="st9" points="276.69,376.46 278.28,369.28 281.12,373.66 276.69,376.46 				"/>
				<polyline class="st10" points="276.69,376.46 273.86,372.08 278.28,369.28 276.69,376.46 				"/>
			</g>
		</g>
		<g id="F-110" ng-class="opalo.inmovablesClassList[334]" ng-click="opalo.showPropertyData(67, '110')">
			<polyline id="L-F110" class="property pb-sprite-2" points="249.12,306.63 276.51,312.57 261.49,380.27 234.1,374.33 249.12,306.63 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 243.5381 374.5143)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 257.0514 313.5899)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 245.4526 347.4394)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 259.945 355.6417)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 252.9734 347.7917)" class="st6 st7 st13">110</text>
			<g>
				<polyline class="st9" points="249.3,370.53 250.89,363.35 253.73,367.72 249.3,370.53 				"/>
				<polyline class="st10" points="249.3,370.53 246.46,366.15 250.89,363.35 249.3,370.53 				"/>
			</g>
		</g>
		<g id="F-111" ng-class="opalo.inmovablesClassList[335]" ng-click="opalo.showPropertyData(67, '111')">
			<polyline id="L-F111" class="property pb-sprite-1" points="221.72,300.7 249.12,306.63 234.1,374.33 206.71,368.39 221.72,300.7 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 216.1465 368.5784)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 229.6597 307.6539)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 218.0591 341.503)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 229.3544 349.0115)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 225.5799 341.8553)" class="st6 st7 st13">111</text>
			<g>
				<polyline class="st9" points="221.91,364.59 223.5,357.41 226.33,361.78 221.91,364.59 				"/>
				<polyline class="st10" points="221.91,364.59 219.07,360.21 223.5,357.41 221.91,364.59 				"/>
			</g>
		</g>
		<g id="F-112" ng-class="opalo.inmovablesClassList[336]" ng-click="opalo.showPropertyData(67, '112')">
			<polyline id="L-F112" class="property pb-sprite-2" points="194.33,294.76 221.72,300.7 206.71,368.39 179.31,362.45 194.33,294.76 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 188.7532 362.6411)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 202.2666 301.7156)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 190.6679 335.5652)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 205.1599 343.7693)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 198.1847 335.9176)" class="st6 st7 st13">112</text>
			<g>
				<polyline class="st9" points="194.51,358.65 196.11,351.47 198.94,355.85 194.51,358.65 				"/>
				<polyline class="st10" points="194.51,358.65 191.68,354.27 196.11,351.47 194.51,358.65 				"/>
			</g>
		</g>
		<g id="F-113" ng-class="opalo.inmovablesClassList[337]" ng-click="opalo.showPropertyData(67, '113')">
			<polyline id="L-F113" class="property pb-sprite-1" points="166.94,288.82 194.33,294.76 179.31,362.45 151.92,356.52 166.94,288.82 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 161.358 356.7033)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 174.8733 295.7783)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 163.2744 329.6288)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 174.5677 337.1368)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 170.7932 329.9807)" class="st6 st7 st13">113</text>
		</g>
		<g id="F-114" ng-class="opalo.inmovablesClassList[338]" ng-click="opalo.showPropertyData(67, '114')">
			<polyline id="L-F114" class="property pb-sprite-2" points="139.54,282.89 166.94,288.82 151.92,356.52 124.53,350.58 139.54,282.89 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 133.9684 350.7668)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 147.4796 289.8429)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 135.881 323.6914)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 150.3753 331.8941)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 143.4016 324.0447)" class="st6 st7 st13">114</text>
		</g>
		<g id="F-115" ng-class="opalo.inmovablesClassList[339]" ng-click="opalo.showPropertyData(67, '115')">
			<polyline id="L-F115" class="property pb-sprite-1" points="112.15,276.95 139.54,282.89 124.53,350.58 97.13,344.64 112.15,276.95 			"/>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 106.5734 344.8281)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.9875 0.2146 -0.2171 0.9761 120.0862 283.9056)"><tspan x="0" y="0" class="st1 st2 st17">8.0</tspan><tspan x="6.74" y="0" class="st1 st2 st17">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 108.4879 317.7532)"><tspan x="0" y="0" class="st1 st2 st13">20.0</tspan><tspan x="9.55" y="0" class="st1 st2 st13">0</tspan></text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 119.7826 325.2645)" class="st1 st2 st13">160.00 m2</text>
			<text transform="matrix(0.2148 -0.9659 0.9772 0.2124 116.0087 318.1055)" class="st6 st7 st13">115</text>
			<g>
				<polyline class="st9" points="112.33,340.84 113.93,333.66 116.76,338.03 112.33,340.84 				"/>
				<polyline class="st10" points="112.33,340.84 109.5,336.46 113.93,333.66 112.33,340.84 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000023255755887509483830000009662145395687934123_">
			<line class="st22" x1="629.57" y1="34.35" x2="698.05" y2="49.19"/>
			<line class="st22" x1="622.06" y1="68.2" x2="690.55" y2="83.04"/>
			<line class="st22" x1="615.3" y1="98.66" x2="683.79" y2="113.5"/>
			<line class="st22" x1="608.55" y1="129.12" x2="677.03" y2="143.96"/>
			<line class="st22" x1="601.79" y1="159.58" x2="670.27" y2="174.43"/>
			<line class="st22" x1="595.03" y1="190.05" x2="663.51" y2="204.89"/>
			<line class="st22" x1="588.28" y1="220.51" x2="656.76" y2="235.35"/>
			<line class="st22" x1="581.52" y1="250.97" x2="650" y2="265.81"/>
			<line class="st22" x1="574.76" y1="281.43" x2="643.24" y2="296.28"/>
			<line class="st22" x1="568" y1="311.89" x2="636.49" y2="326.74"/>
			<line class="st22" x1="561.25" y1="342.36" x2="629.73" y2="357.2"/>
			<line class="st22" x1="554.49" y1="372.82" x2="622.97" y2="387.66"/>
			<line class="st22" x1="562.82" y1="445.57" x2="577.83" y2="377.88"/>
			<line class="st22" x1="535.42" y1="439.63" x2="550.44" y2="371.94"/>
			<line class="st22" x1="508.03" y1="433.7" x2="523.05" y2="366"/>
			<line class="st22" x1="480.64" y1="427.76" x2="495.65" y2="360.07"/>
			<line class="st22" x1="453.25" y1="421.82" x2="468.26" y2="354.13"/>
			<line class="st22" x1="425.85" y1="415.89" x2="440.87" y2="348.19"/>
			<line class="st22" x1="398.46" y1="409.95" x2="413.48" y2="342.26"/>
			<line class="st22" x1="371.07" y1="404.01" x2="386.08" y2="336.32"/>
			<line class="st22" x1="343.67" y1="398.08" x2="358.69" y2="330.38"/>
			<line class="st22" x1="316.28" y1="392.14" x2="331.3" y2="324.44"/>
			<line class="st22" x1="288.89" y1="386.2" x2="303.9" y2="318.51"/>
			<line class="st22" x1="261.49" y1="380.27" x2="276.51" y2="312.57"/>
			<line class="st22" x1="234.1" y1="374.33" x2="249.12" y2="306.63"/>
			<line class="st22" x1="206.71" y1="368.39" x2="221.72" y2="300.7"/>
			<line class="st22" x1="179.31" y1="362.45" x2="194.33" y2="294.76"/>
			<line class="st22" x1="151.92" y1="356.52" x2="166.94" y2="288.82"/>
			<line class="st22" x1="124.53" y1="350.58" x2="139.54" y2="282.89"/>
			<line class="st22" x1="97.13" y1="344.64" x2="112.15" y2="276.95"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polyline class="st31" points="68.35,345.81 67.12,351.74 66.01,351.86 65.19,352.61 64.97,353.7 65.42,354.71 66.39,355.26 
		65.16,361.19 61.51,352.41 68.35,345.81 	"/>
	<polyline class="st31" points="56.81,385.87 57.92,385.77 58.76,385.04 59.01,383.95 58.57,382.93 57.62,382.36 58.97,376.46 
		62.44,385.31 55.46,391.77 56.81,385.87 	"/>
	<polyline class="st31" points="89.07,369.93 86.65,380.89 71.81,377.6 74.23,366.64 74.23,366.63 89.08,369.91 89.07,369.93 	"/>
	<text transform="matrix(-0.2295 0.9733 -0.9733 -0.2295 67.7013 377.5793)" class="st32 st7 st33">ENTRADA</text>
	<text transform="matrix(-0.2091 0.9779 -0.9779 -0.2091 73.8522 347.0024)" class="st32 st7 st33">SALIDA</text>
	<path class="st34" d="M31.85,330.83l-31.5-77.74l553.59,118.96L636.71,1.08l728.52,157.16l-17.76,78.41l-23.46,58.19
		l-125.66,209.89L902.79,311.39l-106.56,157.5l1.01,88.13L96.19,559.7c0,0-15.75-87.13-38.87-158.17"/>
</g>
</svg>

    </div>

</body>
</html>