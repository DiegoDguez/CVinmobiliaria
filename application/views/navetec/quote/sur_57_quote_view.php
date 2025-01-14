<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Navete Business Park</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtSurQuoteCtrl as nvtSur">
	<!--Menu actualizado 19-DIC-2022 -->
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">BUSINESS PARK</h1>
        </md-toolbar>
        <a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Aeropuerto Business Park
            </div>
        </a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Beta Business Park
            </div>
        </a>
		<md-divider></md-divider>
        <a href="#!/Navetec-Calamanda_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Calamanda Business Park
            </div>
        </a>
        <md-divider></md-divider>
		<a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
		<a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma I Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma II Business Park
            </div>
        </a>
        <md-divider></md-divider>
		<a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Pedro Escobedo Business Park
            </div>
        </a>
        <md-divider></md-divider>
		<a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Santa Rosa Business Park
            </div>
        </a>
		<md-divider></md-divider>
		    <a href="#!/Navetec-Sur_57_Business_Park" ng-click="close()">
                <div class="link-body link-nav">
                    Sur 57 Business Park
                </div>
            </a>
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVIGATION</h1>
        </md-toolbar>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-nav">
                Navetec
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="link-body link-nav">
                Grupo CCIMA
            </div>
        </a>
        <md-divider></md-divider>
    </md-sidenav>
	<!--Menu Fin 19-DIC-2022 -->
	
    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="modal-dialog" ng-class="nvtSur.dialogDisplay">

		<div class="backdrop-dialog" ng-click="nvtSur.closeDialog()"></div>

		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtSur.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>

			<div class="content-dialog">

				<div class="divider"></div>
				
				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Navetec Business Park {{nvtSur.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSur.propertyData.propertyClass}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSur.propertyData.type}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{nvtSur.propertyData.number}}</h6>
					</div>
					<!-- <div class="p-5">
						<h6 class="futura-light">Dimenciones: {{nvtSur.propertyData.dimensions}}</h6>
					</div> -->
					<div class="p-5">
						<h6 class="futura-light">Área de {{nvtSur.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; de ${{nvtSur.property.sample.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text">Precio de ${{nvtSur.property.sample.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">{{ (nvtSur.propertyData.propertyClass !== 'Lote industrial') ? '+ I.V.A.' : '' }}</span></h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
					</div>
				</div>

				<div class="divider"></div>

				<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
				</div>
				
				<!-- <div class="divider"></div>

				<div class="p-20">
					<h6 class="deep-purple-text futura-light">{{nvtSur.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
					<h6 class="green-text futura-light">Precio de ${{ nvtSur.property.sample.discount1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
					<p class="promo__description grey-text">¡Oferta limitada!</p>
				</div>
				
				<div class="divider"></div>

				<div class="p-20">
					<h6 class="deep-purple-text futura-light">{{nvtSur.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
					<h6 class="green-text futura-light">Precio de ${{ nvtSur.property.sample.discount2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
					<p class="promo__description grey-text">¡Oferta limitada!</p>
				</div> -->
				
				<div class="divider"></div>


				<div class="p-20">
					<h6 class="deep-purple-text futura-light">Compra en Marzo y paga la primera mensualidad hasta Mayo 2023</h6>
					<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
					<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en Marzo 2023</p>
				</div>

				<div class="divider"></div>

				<div class="p-20">
					<p class="blue-text futura-book">¡Apártalo ahora!</p>
					<p class="green-text">Con tan solo $20,000</p>
					<button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
				</div>

			</div>

			<div class="divider"></div>

			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 127 5214
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
					<h2 class="center-align futura-med">SUR 57 </h2>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block ae-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
        </div>

        <div class="">
        <svg version="1.1" id="CLUSTER__x2F__ETAPA__x2F__CONDO"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 1014"
	 style="enable-background:new 0 0 1366 1014;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st1{fill:#FFBF00;}
	.st2{font-family:'CenturyGothic-Bold';}
	.st3{font-size:10.6345px;}
	.st4{fill:#FFFFFF;}
	.st5{font-family:'CenturyGothic';}
	.st6{font-size:9.1855px;}
	.st7{font-size:9.1153px;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st9{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;enable-background:new    ;}
	.st10{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st11{font-size:9.1279px;}
	.st12{fill:none;stroke:#FFFFFF;stroke-width:1.3812;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st13{font-size:10.7136px;}
	.st14{font-size:9.1172px;}
	.st15{font-size:9.183px;}
	.st16{font-size:9.1831px;}
	.st17{fill:none;stroke:#002856;stroke-width:3.6833;stroke-miterlimit:10;}
</style>
<g id="CLUSTER">
	<image style="overflow:visible;enable-background:new;" width="1366" height="1013" xlink:href="media/assets/img/navetec/app/sur57/sur_57.jpg" >
	</image>
	<g id="MODULO_A">
		<g id="A-13_1_" ng-class="nvtSur.inmovablesClassList[0]" ng-click="nvtSur.showPropertyData(59, '13A', nvtSur.inmovables[0].idProperty)">
			<polyline id="AN-13_1_" class="property nvt-sprite-1" points="284,86.7 14.6,116.5 6.2,41.6 275.6,11.8 284,86.7 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 122.015 65.2438)" class="st1 st2 st3">NAVE 13A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 122.0242 79.2518)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 133.8442 77.9574)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 268.1643 38.7847)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 270.105 56.2426)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 12.7156 67.0305)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 14.6572 84.4873)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 130.664 38.8358)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 148.2939 36.9051)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="265.5,50.8 254.1,52.1 259.1,45.8 265.5,50.8 				"/>
				<polyline class="st9" points="265.5,50.8 260.4,57.1 254.1,52.1 265.5,50.8 				"/>
			</g>
		</g>
		<g id="A-14_1_"ng-class="nvtSur.inmovablesClassList[1]" ng-click="nvtSur.showPropertyData(59, '14A', nvtSur.inmovables[1].idProperty)">
			<polyline id="AN-14_1_" class="property nvt-sprite-2" points="292.4,161.5 23,191.3 14.6,116.5 284,86.7 292.4,161.5 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 130.4209 140.0505)" class="st1 st2 st3">NAVE 14A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 129.5358 155.1163)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 141.3562 153.8218)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 276.5676 113.6399)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 278.5083 131.0977)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 21.1235 141.8832)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 23.0652 159.3409)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 139.0741 113.6931)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 156.704 111.7624)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="273.9,125.7 262.5,127 267.6,120.7 273.9,125.7 				"/>
				<polyline class="st9" points="273.9,125.7 268.8,132 262.5,127 273.9,125.7 				"/>
			</g>
		</g>
		<g id="A-15_1_" ng-class="nvtSur.inmovablesClassList[2]" ng-click="nvtSur.showPropertyData(59, '15A', nvtSur.inmovables[2].idProperty)">
			<polyline id="AN-15_1_" class="property nvt-sprite-1" points="300.8,236.4 31.4,266.2 23,191.3 292.4,161.5 300.8,236.4 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 135.7419 216.1235)" class="st1 st2 st3">NAVE 15A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 137.1395 232.9473)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 148.9594 231.6528)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 284.974 188.4966)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 286.9167 205.9543)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 29.5319 216.7397)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 31.4735 234.1965)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 147.4802 188.5411)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 165.1102 186.6104)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="282.3,200.6 270.9,201.8 276,195.5 282.3,200.6 				"/>
				<polyline class="st9" points="282.3,200.6 277.2,206.9 270.9,201.8 282.3,200.6 				"/>
			</g>
		</g>
		<g id="A-16_1_" ng-class="nvtSur.inmovablesClassList[3]" ng-click="nvtSur.showPropertyData(59, '16A', nvtSur.inmovables[3].idProperty)">
			<polyline id="AN-16_1_" class="property nvt-sprite-2" points="309.3,311.2 39.8,341 31.4,266.2 300.8,236.4 309.3,311.2 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 144.1437 290.8619)" class="st1 st2 st3">NAVE 16A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 146.138 307.2244)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 157.9579 305.93)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 293.3889 263.3417)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 295.3307 280.7995)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 37.9469 291.5946)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 39.8885 309.0514)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 155.8866 263.3998)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 173.5165 261.4691)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="290.7,275.4 279.3,276.7 284.4,270.4 290.7,275.4 				"/>
				<polyline class="st9" points="290.7,275.4 285.6,281.7 279.3,276.7 290.7,275.4 				"/>
			</g>
		</g>
		<g id="A-17_1_" ng-class="nvtSur.inmovablesClassList[4]" ng-click="nvtSur.showPropertyData(59, '17A', nvtSur.inmovables[4].idProperty)">
			<polyline id="AN-17_1_" class="property nvt-sprite-1" points="317.7,386.1 48.2,415.9 39.8,341 309.3,311.2 317.7,386.1 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 155.8069 366.0919)" class="st1 st2 st3">NAVE 17A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 156.913 381.0998)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 168.7329 379.8053)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 301.7899 338.202)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 303.7325 355.6597)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 46.3458 366.4453)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 48.2874 383.9021)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 164.2919 338.2499)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 181.9219 336.3192)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="299.1,350.3 287.7,351.5 292.8,345.2 299.1,350.3 				"/>
				<polyline class="st9" points="299.1,350.3 294,356.6 287.7,351.5 299.1,350.3 				"/>
			</g>
		</g>
		<g id="A-18_1_" ng-class="nvtSur.inmovablesClassList[5]" ng-click="nvtSur.showPropertyData(59, '18A', nvtSur.inmovables[5].idProperty)">
			<polyline id="AN-18_1_" class="property nvt-sprite-2" points="326.1,461 56.6,490.8 48.2,415.9 317.7,386.1 326.1,461 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 163.8609 437.8633)" class="st1 st2 st3">NAVE 18A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 163.6062 451.8127)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 175.4261 450.5183)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 310.2019 413.0562)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 312.1436 430.514)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 54.7544 441.3127)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 56.696 458.7695)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 172.7034 413.1149)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 190.3333 411.1842)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="307.5,425.1 296.1,426.4 301.2,420.1 307.5,425.1 				"/>
				<polyline class="st9" points="307.5,425.1 302.5,431.4 296.1,426.4 307.5,425.1 				"/>
			</g>
		</g>
		<g id="A-19_1_" ng-class="nvtSur.inmovablesClassList[6]" ng-click="nvtSur.showPropertyData(59, '19A', nvtSur.inmovables[6].idProperty)">
			<polyline id="AN-19_1_" class="property nvt-sprite-1" points="334.5,535.8 65,565.6 56.6,490.8 326.1,461 334.5,535.8 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 172.4769 514.549)" class="st1 st2 st3">NAVE 19A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 172.5511 528.929)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 184.3711 527.6346)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 318.6136 487.9164)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 320.5553 505.3741)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 63.1615 516.1576)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 65.1032 533.6154)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 181.1142 487.9742)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 198.7442 486.0435)" class="st4 st5 st7">0</text>
			<g>
				<polyline class="st8" points="315.9,500 304.5,501.2 309.6,494.9 315.9,500 				"/>
				<polyline class="st9" points="315.9,500 310.9,506.3 304.5,501.2 315.9,500 				"/>
			</g>
		</g>
		<g id="A-20_1_" ng-class="nvtSur.inmovablesClassList[7]" ng-click="nvtSur.showPropertyData(59, '20A', nvtSur.inmovables[7].idProperty)">
			<polyline id="AN-20_1_" class="property nvt-sprite-2" points="342.9,610.7 73.4,640.5 65,565.6 334.5,535.8 342.9,610.7 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 181.267 592.7411)" class="st1 st2 st3">NAVE 20A </text>
			<g>
				<polyline class="st8" points="324.4,574.8 312.9,576.1 318,569.8 324.4,574.8 				"/>
				<polyline class="st9" points="324.4,574.8 319.3,581.1 312.9,576.1 324.4,574.8 				"/>
			</g>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 181.2542 607.2399)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 193.0741 605.9454)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 327.0135 562.7679)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 328.9553 580.2257)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 71.5753 591.0195)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 73.516 608.4764)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 189.5235 562.8238)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 207.1534 560.8931)" class="st4 st5 st7">0</text>
		</g>
		<g id="A-21_1_" ng-class="nvtSur.inmovablesClassList[8]" ng-click="nvtSur.showPropertyData(59, '21A', nvtSur.inmovables[8].idProperty)">
			<polyline id="AN-21_1_" class="property nvt-sprite-1" points="351.3,685.5 81.9,715.3 73.4,640.5 342.9,610.7 351.3,685.5 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 189.2852 664.1392)" class="st1 st2 st3">NAVE 21A </text>
			<g>
				<polyline class="st8" points="332.8,649.7 321.3,650.9 326.4,644.6 332.8,649.7 				"/>
				<polyline class="st9" points="332.8,649.7 327.7,656 321.3,650.9 332.8,649.7 				"/>
			</g>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 188.9206 677.9307)" class="st4 st5 st3">70</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 200.7406 676.6363)" class="st4 st5 st3">0.00 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 335.4192 637.6268)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 337.3619 655.0845)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 79.9728 665.8664)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 81.9134 683.3233)" class="st4 st5 st6">0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 197.9269 637.6829)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 215.5569 635.7521)" class="st4 st5 st7">0</text>
		</g>
		<g id="A-22_1_" ng-class="nvtSur.inmovablesClassList[9]" ng-click="nvtSur.showPropertyData(59, '22A', nvtSur.inmovables[9].idProperty)">
			<polyline id="AN-22_1_" class="property nvt-sprite-2" points="351.3,685.5 359.7,760.4 369.4,846.6 90.3,790.2 81.9,715.3 351.3,685.5 			"/>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 198.8983 749.7714)" class="st1 st2 st3">NAVE 22A </text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 192.3935 765.7571)" class="st4 st5 st3">1,103.13 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 348.6725 755.5929)" class="st4 st5 st6">30.1</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 350.6152 773.0506)" class="st4 st5 st6">3</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 206.3346 712.5228)" class="st4 st5 st7">50.0</text>
			<text transform="matrix(1.0017 -0.1097 0.1106 0.9939 223.9645 710.592)" class="st4 st5 st7">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 88.4956 739.172)" class="st4 st5 st6">14.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 90.4373 756.6298)" class="st4 st5 st6">0</text>
			<text transform="matrix(0.9955 0.1606 -7.640079e-02 0.9971 209.4972 809.9896)" class="st4 st5 st11">52.54</text>
			<g>
				<polyline class="st8" points="346,767.6 334.6,768.9 339.7,762.6 346,767.6 				"/>
				<polyline class="st9" points="346,767.6 340.9,773.9 334.6,768.9 346,767.6 				"/>
			</g>
		</g>
		<g id="DIVISIONES_A_1_">
			<line class="st12" x1="351.3" y1="685.5" x2="81.9" y2="715.3"/>
			<line class="st12" x1="342.9" y1="610.7" x2="73.4" y2="640.5"/>
			<line class="st12" x1="334.5" y1="535.8" x2="65" y2="565.6"/>
			<line class="st12" x1="326.1" y1="461" x2="56.6" y2="490.8"/>
			<line class="st12" x1="317.7" y1="386.1" x2="48.2" y2="415.9"/>
			<line class="st12" x1="309.3" y1="311.2" x2="39.8" y2="341"/>
			<line class="st12" x1="300.8" y1="236.4" x2="31.4" y2="266.2"/>
			<line class="st12" x1="292.4" y1="161.5" x2="23" y2="191.3"/>
			<line class="st12" x1="284" y1="86.7" x2="14.6" y2="116.5"/>
			<line class="st12" x1="275.6" y1="11.8" x2="6.2" y2="41.6"/>
		</g>
	</g>
	<g id="MODULO_G">
		<g id="G-01_2_" ng-class="nvtSur.inmovablesClassList[10]" ng-click="nvtSur.showPropertyData(59, '1G', nvtSur.inmovables[10].idProperty)">
			<polyline id="GN-01_2_" class="property nvt-sprite-1" points="543,77.7 504.6,259.8 418.8,242.2 397,47.7 460.7,60.8 535,76.1 543,77.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 467.1417 180.7442)" class="st1 st2 st13">NAVE 1G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 483.566 188.088)" class="st4 st5 st13">75</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 486.0008 176.5272)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 487.8217 167.8809)" class="st4 st5 st13">91 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 412.6013 132.6956)" class="st4 st5 st6">36.3</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 414.544 150.1533)" class="st4 st5 st6">7</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 456.371 73.6096)" class="st4 st5 st14">27.5</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 473.7349 77.1771)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 452.4715 240.8943)" class="st4 st5 st14">16.1</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 469.8354 244.4617)" class="st4 st5 st14">6</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 515.6014 178.8848)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 519.2529 161.6951)" class="st4 st5 st15">8</text>
			<g>
				<polyline class="st8" points="465.4,217.3 463.1,228.5 458.6,221.7 465.4,217.3 				"/>
				<polyline class="st9" points="465.4,217.3 469.9,224.1 463.1,228.5 465.4,217.3 				"/>
			</g>
		</g>
		<g id="G-02_2_" ng-class="nvtSur.inmovablesClassList[11]" ng-click="nvtSur.showPropertyData(59, '2G', nvtSur.inmovables[11].idProperty)">
			<polyline id="GN-02_2_" class="property nvt-sprite-2" points="578.9,275.1 504.6,259.8 543,77.7 617.3,93 578.9,275.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 552.5771 198.2933)" class="st1 st2 st13">NAVE 2G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 564.8482 207.3084)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 567.2829 195.7476)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 569.1029 187.1011)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 566.5581 96.2369)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 583.9219 99.8044)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 532.5404 257.3297)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 549.9042 260.8972)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 592.2018 194.6242)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 595.8532 177.4345)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-03_2_" ng-class="nvtSur.inmovablesClassList[12]" ng-click="nvtSur.showPropertyData(59, '3G', nvtSur.inmovables[12].idProperty)">
			<polyline id="GN-03_2_" class="property nvt-sprite-1" points="691.7,108.3 653.3,290.4 578.9,275.1 617.3,93 683.7,106.6 691.7,108.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 619.5522 212.0536)" class="st1 st2 st13">NAVE 3G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 634.842 218.5298)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 637.2767 206.969)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 639.0976 198.3227)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 640.902 111.5047)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 658.2659 115.0721)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 606.8644 272.6068)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 624.2283 276.1743)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 666.4346 209.8674)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 670.0862 192.6768)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-04_2_" ng-class="nvtSur.inmovablesClassList[13]" ng-click="nvtSur.showPropertyData(59, '4G', nvtSur.inmovables[13].idProperty)">
			<polyline id="GN-04_2_" class="property nvt-sprite-2" points="727.6,305.6 653.3,290.4 691.7,108.3 766,123.5 727.6,305.6 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 700.6728 228.2563)" class="st1 st2 st13">NAVE 4G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 715.0554 234.3093)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 717.4901 222.7485)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 719.311 214.1022)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 715.2288 126.7738)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 732.5927 130.3413)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 681.2122 287.8708)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 698.5761 291.4383)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 741.183 225.2265)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 744.8346 208.0358)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-05_2_" ng-class="nvtSur.inmovablesClassList[14]" ng-click="nvtSur.showPropertyData(59, '5G', nvtSur.inmovables[14].idProperty)">
			<polyline id="GN-05_2_" class="property nvt-sprite-1" points="840.3,138.8 801.9,320.9 727.6,305.6 766,123.5 832.4,137.2 840.3,138.8 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 768.5937 242.5609)" class="st1 st2 st13">NAVE 5G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 782.755 250.3489)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 785.1897 238.788)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 787.0106 230.1418)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 789.5652 142.044)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 806.9291 145.6114)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 755.5445 303.1371)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 772.9084 306.7046)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 813.5001 240.075)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 817.1517 222.8844)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-06_2_" ng-class="nvtSur.inmovablesClassList[15]" ng-click="nvtSur.showPropertyData(59, '6G', nvtSur.inmovables[15].idProperty)">
			<polyline id="GN-06_2_" class="property nvt-sprite-2" points="840.3,138.8 914.7,154.1 876.3,336.2 801.9,320.9 840.3,138.8 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 839.7421 259.3113)" class="st1 st2 st13">NAVE 6G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 854.4001 267.6043)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 856.8347 256.0444)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 858.6556 247.3982)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 863.9095 157.3103)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 881.2744 160.8779)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 829.8843 318.3965)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 847.248 321.9644)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 888.6403 255.507)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 892.2919 238.3164)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-07_2_" ng-class="nvtSur.inmovablesClassList[16]" ng-click="nvtSur.showPropertyData(59, '7G', nvtSur.inmovables[16].idProperty)">
			<polyline id="GN-07_2_" class="property nvt-sprite-1" points="989,169.3 950.6,351.4 876.3,336.2 914.7,154.1 981,167.7 989,169.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 911.8945 274.0848)" class="st1 st2 st13">NAVE 7G </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 927.8233 282.2693)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 930.2581 270.7085)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 932.079 262.0622)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 938.2443 172.5841)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 955.6082 176.1515)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 904.2298 333.6805)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 921.5937 337.248)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 962.2111 270.6148)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 965.8627 253.4241)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-08_2_" ng-class="nvtSur.inmovablesClassList[17]" ng-click="nvtSur.showPropertyData(59, '8G', nvtSur.inmovables[17].idProperty)">
			<polyline id="GN-08_2_" class="property nvt-sprite-2" points="1024.9,366.7 950.6,351.4 989,169.3 1063.4,184.6 1024.9,366.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 989.5253 289.9502)" class="st1 st2 st13">NAVE 8G</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1003.9144 299.9518)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1006.3491 288.391)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1008.17 279.7447)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1012.5856 187.8457)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1029.9503 191.4134)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 978.5506 348.94)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 995.9145 352.5074)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1038.3451 286.2556)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1041.9967 269.065)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-09_2_" ng-class="nvtSur.inmovablesClassList[18]" ng-click="nvtSur.showPropertyData(59, '9G', nvtSur.inmovables[18].idProperty)">
			<polyline id="GN-09_2_" class="property nvt-sprite-1" points="1137.7,199.9 1099.3,382 1024.9,366.7 1063.4,184.6 1137.7,199.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1069.9702 306.4747)" class="st1 st2 st13">NAVE 9G</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1084.132 314.5175)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1086.5665 302.9576)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1088.3875 294.3113)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1086.9172 203.1149)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1104.2811 206.6824)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1052.8818 364.2066)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1070.2457 367.774)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1111.5171 301.281)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1115.1687 284.0904)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-10_2_" ng-class="nvtSur.inmovablesClassList[19]" ng-click="nvtSur.showPropertyData(59, '10G', nvtSur.inmovables[19].idProperty)">
			<polyline id="GN-10_2_" class="property nvt-sprite-2" points="1212,215.1 1173.6,397.2 1099.3,382 1137.7,199.9 1212,215.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1138.2131 325.9051)" class="st1 st2 st13">NAVE 10G</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1153.4524 331.5044)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1155.8873 319.9426)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1157.7083 311.2963)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1161.2528 218.3849)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1178.6176 221.9526)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1127.2286 379.4704)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1144.5925 383.0378)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1182.8584 315.9245)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1186.5099 298.7348)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-11_2_" ng-class="nvtSur.inmovablesClassList[20]" ng-click="nvtSur.showPropertyData(59, '11G', nvtSur.inmovables[20].idProperty)">
			<polyline id="GN-11_2_" class="property nvt-sprite-1" points="1248,412.5 1173.6,397.2 1212,215.1 1278.4,228.8 1286.4,230.4 1248,412.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1217.1549 342.0319)" class="st1 st2 st13">NAVE 11G</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1231.4863 349.9606)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1233.921 338.3998)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1235.7419 329.7535)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1235.6 233.6513)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1252.9648 237.2189)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1201.5625 394.748)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1218.9264 398.3155)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1260.4409 331.8573)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1264.0925 314.6667)" class="st4 st5 st15">8</text>
		</g>
		<g id="G-12_2_" ng-class="nvtSur.inmovablesClassList[21]" ng-click="nvtSur.showPropertyData(59, '1G', nvtSur.inmovables[21].idProperty)">
			<polyline id="GN-12_2_" class="property nvt-sprite-2" points="1360.7,245.7 1322.3,427.8 1248,412.5 1286.4,230.4 1360.7,245.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1290.9082 355.1095)" class="st1 st2 st13">NAVE 12G</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1303.5753 361.1945)" class="st4 st5 st13">48</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1306.01 349.6337)" class="st4 st5 st13">4.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1307.8309 340.9874)" class="st4 st5 st13">12 m2</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1334.8619 347.1549)" class="st4 st5 st15">34.5</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1338.5135 329.9642)" class="st4 st5 st15">8</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1309.9275 248.9171)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1327.2922 252.4848)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1275.9083 410.0121)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1293.2722 413.5796)" class="st4 st5 st14">0</text>
			<g>
				<polyline class="st8" points="1291.5,388.9 1289.1,400 1284.7,393.3 1291.5,388.9 				"/>
				<polyline class="st9" points="1291.5,388.9 1295.9,395.6 1289.1,400 1291.5,388.9 				"/>
			</g>
		</g>
		<g id="DIVISIONES_G_2_">
			<line class="st12" x1="1248" y1="412.5" x2="1286.4" y2="230.4"/>
			<line class="st12" x1="1173.6" y1="397.2" x2="1212" y2="215.1"/>
			<line class="st12" x1="1099.3" y1="382" x2="1137.7" y2="199.9"/>
			<line class="st12" x1="1024.9" y1="366.7" x2="1063.4" y2="184.6"/>
			<line class="st12" x1="950.6" y1="351.4" x2="989" y2="169.3"/>
			<line class="st12" x1="876.3" y1="336.2" x2="914.7" y2="154.1"/>
			<line class="st12" x1="801.9" y1="320.9" x2="840.3" y2="138.8"/>
			<line class="st12" x1="727.6" y1="305.6" x2="766" y2="123.5"/>
			<line class="st12" x1="653.3" y1="290.4" x2="691.7" y2="108.3"/>
			<line class="st12" x1="578.9" y1="275.1" x2="617.3" y2="93"/>
			<line class="st12" x1="504.6" y1="259.8" x2="543" y2="77.7"/>
			<g id="DIVISIONES_F_2_">
				<line class="st12" x1="396.8" y1="48.7" x2="1360.5" y2="246.6"/>
			</g>
		</g>
	</g>
	<g id="MODULO_H">
		<g id="H-01_1_" ng-class="nvtSur.inmovablesClassList[22]" ng-click="nvtSur.showPropertyData(59, '1H', nvtSur.inmovables[22].idProperty)">
			<polyline id="HN-01_1_" class="property nvt-sprite-2" points="443.4,461.5 427.6,320.9 542.1,344.5 514.6,476.2 443.4,461.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 478.7653 423.0981)" class="st1 st2 st13">NAVE 1H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 490.6396 432.194)" class="st4 st5 st13">43</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 493.0743 420.6331)" class="st4 st5 st13">6.54</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 497.3097 400.5226)" class="st4 st5 st13"> m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 469.1354 461.9635)" class="st4 st5 st14">13.36</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 470.6367 346.5892)" class="st4 st5 st14">21.5</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 488.0016 350.1568)" class="st4 st5 st14">6</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 522.2522 420.7166)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 525.841 403.5128)" class="st4 st5 st16">0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 438.1714 379.2019)" class="st4 st5 st6">26.2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 440.1131 396.6597)" class="st4 st5 st6">9</text>
			<g>
				<polyline class="st8" points="479.7,356.2 477.4,367.3 472.9,360.6 479.7,356.2 				"/>
				<polyline class="st9" points="479.7,356.2 484.2,362.9 477.4,367.3 479.7,356.2 				"/>
			</g>
		</g>
		<g id="H-02_1_" ng-class="nvtSur.inmovablesClassList[23]" ng-click="nvtSur.showPropertyData(59, '2H', nvtSur.inmovables[23].idProperty)">
			<polyline class="property nvt-sprite-1" points="578.4,489.2 514.6,476.2 542.1,344.5 605.8,357.5 578.4,489.2 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 549.6114 437.6878)" class="st1 st2 st13">NAVE 2H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 559.3925 443.2798)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 569.9294 393.2474)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 536.5981 475.8199)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 553.962 479.3874)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 559.7414 364.901)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 577.1053 368.4684)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 586.8319 433.9806)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 590.4205 416.7777)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-03_1_" ng-class="nvtSur.inmovablesClassList[24]" ng-click="nvtSur.showPropertyData(59, '3H', nvtSur.inmovables[24].idProperty)">
			<polyline id="HN-03_1_" class="property nvt-sprite-2" points="642.1,502.3 578.4,489.2 605.8,357.5 669.6,370.6 642.1,502.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 613.0432 450.7019)" class="st1 st2 st13">NAVE 3H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 622.8167 456.3008)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 633.3536 406.2684)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 600.3143 488.9146)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 617.6782 492.4821)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 623.4502 377.9782)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 640.8141 381.5457)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 649.5288 446.8497)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 653.1182 429.6479)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-04_1_" ng-class="nvtSur.inmovablesClassList[25]" ng-click="nvtSur.showPropertyData(59, '4H', nvtSur.inmovables[25].idProperty)">
			<polyline id="HN-04_1_" class="property nvt-sprite-1" points="705.8,515.4 694.9,513.2 642.1,502.3 669.6,370.6 733.3,383.7 705.8,515.4 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 674.2938 461.553)" class="st1 st2 st13">NAVE 4H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 688.1072 469.4443)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 698.6439 419.4129)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 664.0245 501.9901)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 681.3884 505.5576)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 687.1758 391.0708)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 704.5397 394.6383)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 713.0803 459.9024)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 716.6697 442.7006)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-05_1_" ng-class="nvtSur.inmovablesClassList[26]" ng-click="nvtSur.showPropertyData(59, '5H', nvtSur.inmovables[26].idProperty)">
			<polyline id="HN-05_1_" class="property nvt-sprite-2" points="769.5,528.5 705.8,515.4 733.3,383.7 797,396.8 769.5,528.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 738.4105 476.7636)" class="st1 st2 st13">NAVE 5H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 750.1463 482.237)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 760.6832 432.2046)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 727.7501 515.0782)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 745.114 518.6457)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 750.8915 404.1629)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 768.2554 407.7303)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 775.7452 472.7908)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 779.3348 455.5881)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-06_1_" ng-class="nvtSur.inmovablesClassList[27]" ng-click="nvtSur.showPropertyData(59, '6H', nvtSur.inmovables[27].idProperty)">
			<polyline id="HN-06_1_" class="property nvt-sprite-1" points="833.2,541.6 769.5,528.5 797,396.8 860.7,409.9 833.2,541.6 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 799.6002 488.9152)" class="st1 st2 st13">NAVE 6H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 814.88 495.3568)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 825.4169 445.3245)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 791.46 528.1691)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 808.8239 531.7366)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 814.604 417.2419)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 831.9679 420.8093)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 841.1053 486.2062)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 844.6949 469.0035)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-07_1_" ng-class="nvtSur.inmovablesClassList[28]" ng-click="nvtSur.showPropertyData(59, '7H', nvtSur.inmovables[28].idProperty)">
			<polyline id="HN-07_1_" class="property nvt-sprite-2" points="896.9,554.7 854.2,545.9 833.2,541.6 860.7,409.9 924.4,423 896.9,554.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 864.3613 502.5525)" class="st1 st2 st13">NAVE 7H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 877.6945 510.8654)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 888.2314 460.833)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 855.1773 541.2491)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 872.5412 544.8165)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 878.3282 430.3317)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 895.692 433.8991)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 904.6107 499.2455)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 908.2003 482.0427)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-08_1_" ng-class="nvtSur.inmovablesClassList[29]" ng-click="nvtSur.showPropertyData(59, '8H', nvtSur.inmovables[29].idProperty)">
			<polyline id="HN-08_1_" class="property nvt-sprite-1" points="960.7,567.8 960.4,567.7 907.3,556.8 896.9,554.7 924.4,423 988.1,436.1 
				960.7,567.8 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 928.6613 514.1409)" class="st1 st2 st13">NAVE 8H </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 943.2761 521.8263)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 953.813 471.7939)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 942.0384 443.4167)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 959.4033 446.9839)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 970.501 512.7878)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 974.0906 495.5851)" class="st4 st5 st16">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 915.853 553.1094)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 933.217 556.6765)" class="st4 st5 st14">0</text>
		</g>
		<g id="H-09_1_" ng-class="nvtSur.inmovablesClassList[30]" ng-click="nvtSur.showPropertyData(59, '9H', nvtSur.inmovables[30].idProperty)">
			<polyline id="HN-09_1_" class="property nvt-sprite-2" points="1024.4,580.9 960.7,567.8 988.1,436.1 1051.9,449.1 1024.4,580.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 991.6979 525.7837)" class="st1 st2 st13">NAVE 9H</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1004.8307 536.3935)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1015.3674 486.3621)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1005.7539 456.5047)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1023.1188 460.0724)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1032.9014 525.5869)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1036.491 508.3842)" class="st4 st5 st16">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 980.2339 567.9807)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 997.5979 571.5477)" class="st4 st5 st14">0</text>
		</g>
		<g id="H-10_1_" ng-class="nvtSur.inmovablesClassList[31]" ng-click="nvtSur.showPropertyData(59, '10H', nvtSur.inmovables[31].idProperty)">
			<polyline id="HN-10_1_" class="property nvt-sprite-1" points="1088.1,593.9 1066.6,589.5 1024.4,580.9 1051.9,449.1 1115.6,462.2 1088.1,593.9 			
				"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1055.6642 541.5477)" class="st1 st2 st13">NAVE 10H</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1068.2192 547.2708)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1078.7562 497.2384)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1046.3319 580.5084)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1063.6958 584.0759)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1069.4821 469.5949)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1086.8459 473.1623)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1092.569 537.8474)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1096.1586 520.6447)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-11_1_" ng-class="nvtSur.inmovablesClassList[32]" ng-click="nvtSur.showPropertyData(59, '11H', nvtSur.inmovables[32].idProperty)">
			<polyline id="HN-11_1_" class="property nvt-sprite-2" points="1151.8,607 1088.1,593.9 1115.6,462.2 1179.3,475.3 1151.8,607 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1121.1866 556.4271)" class="st1 st2 st13">NAVE 11H</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1134.6219 562.455)" class="st4 st5 st13">300.00 m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1145.1587 512.4236)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1110.0542 593.5979)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1127.4181 597.1653)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1133.194 482.6857)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1150.5579 486.2531)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1158.1775 551.3248)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1161.7671 534.1221)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-12_1_" ng-class="nvtSur.inmovablesClassList[33]" ng-click="nvtSur.showPropertyData(59, '12H', nvtSur.inmovables[33].idProperty)">
			<polyline id="HN-12_1_" class="property nvt-sprite-1" points="1215.5,620.1 1172.8,611.3 1151.8,607 1179.3,475.3 1243,488.4 1215.5,620.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1183.474 568.4722)" class="st1 st2 st13">NAVE 12H</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1194.3379 575.0762)" class="st4 st5 st13">300.00m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1204.2814 527.8619)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1173.7682 606.6936)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1191.1321 610.261)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1196.9071 495.7618)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1214.272 499.3294)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1224.3842 564.9291)" class="st4 st5 st16">25.0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1227.9736 547.7264)" class="st4 st5 st16">0</text>
		</g>
		<g id="H-13_1_" ng-class="nvtSur.inmovablesClassList[34]" ng-click="nvtSur.showPropertyData(59, '13H', nvtSur.inmovables[34].idProperty)">
			<polyline id="HN-13_1_" class="property nvt-sprite-2" points="1215.5,620.1 1243,488.4 1306.7,501.5 1279,633.1 1215.5,620.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1247.8865 581.4716)" class="st1 st2 st13">NAVE 13H</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1259.9664 586.2693)" class="st4 st5 st13">300.00m2</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1269.91 539.054)" class="st4 st5 st13"> </text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1237.3583 619.7424)" class="st4 st5 st14">12.00</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1260.6351 508.8519)" class="st4 st5 st14">12.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1277.999 512.4194)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1287.2979 577.9719)" class="st4 st5 st15">25.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1290.9495 560.7812)" class="st4 st5 st15">0</text>
			<g>
				<polyline class="st8" points="1271.3,516.6 1269,527.8 1264.5,521 1271.3,516.6 				"/>
				<polyline class="st9" points="1271.3,516.6 1275.8,523.3 1269,527.8 1271.3,516.6 				"/>
			</g>
		</g>
	</g>
	<g id="MODULO_I">
		<g id="I-01_2_" ng-class="nvtSur.inmovablesClassList[35]" ng-click="nvtSur.showPropertyData(59, '1I', nvtSur.inmovables[35].idProperty)">
			<polyline id="IN-01_2_" class="property nvt-sprite-1" points="456.1,574 443.4,461.5 535.6,480.5 513.4,585.8 456.1,574 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 483.2771 545.7052)" class="st1 st2 st13">NAVE 1I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 495.7489 555.8122)" class="st4 st5 st13">28</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 498.1837 544.2513)" class="st4 st5 st13">1.</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 500.0046 535.605)" class="st4 st5 st13">58 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 452.6765 505.6938)" class="st4 st5 st6">21.0</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 454.6192 523.1514)" class="st4 st5 st6">4</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 474.5097 574.5353)" class="st4 st5 st14">10.8</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 491.8746 578.103)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 475.8429 482.2133)" class="st4 st5 st14">17.3</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 493.2068 485.7807)" class="st4 st5 st14">6</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 518.2542 543.6265)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 521.9058 526.4359)" class="st4 st5 st15">0</text>
			<g>
				<polyline class="st8" points="488.3,555.6 485.9,566.8 481.4,560 488.3,555.6 				"/>
				<polyline class="st9" points="488.3,555.6 492.7,562.3 485.9,566.8 488.3,555.6 				"/>
			</g>
		</g>
		<g id="I-02_2_" ng-class="nvtSur.inmovablesClassList[36]" ng-click="nvtSur.showPropertyData(59, '2I', nvtSur.inmovables[36].idProperty)">
			<polyline id="IN-02_2_" class="property nvt-sprite-2" points="535.6,480.5 588.7,491.4 566.5,596.7 513.4,585.8 535.6,480.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 540.4821 557.4576)" class="st1 st2 st13">NAVE 2I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 551.8451 568.0071)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 554.2798 556.4462)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 529.7281 585.8627)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 547.093 589.4304)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 548.4864 497.1396)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 565.8502 500.7071)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 572.0712 554.6879)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 575.7228 537.4973)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-03_2_" ng-class="nvtSur.inmovablesClassList[37]" ng-click="nvtSur.showPropertyData(59, '3I', nvtSur.inmovables[37].idProperty)">
			<polyline id="IN-03_2_" class="property nvt-sprite-1" points="641.8,502.3 619.6,607.6 566.5,596.7 588.7,491.4 641.8,502.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 591.6749 567.9754)" class="st1 st2 st13">NAVE 3I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 604.0965 579.4747)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 606.5312 567.9138)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 582.8207 596.7832)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 600.1855 600.3508)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 601.5823 508.0439)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 618.9462 511.6113)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 624.9869 565.5648)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 628.6385 548.3741)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-04_2_" ng-class="nvtSur.inmovablesClassList[38]" ng-click="nvtSur.showPropertyData(59, '4I', nvtSur.inmovables[38].idProperty)">
			<polyline id="IN-04_2_" class="property nvt-sprite-2" points="672.7,618.5 619.6,607.6 641.8,502.3 694.9,513.2 672.7,618.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 649.298 579.7988)" class="st1 st2 st13">NAVE 4I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 658.6121 590.5072)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 661.0469 578.9464)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 635.9307 607.6923)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 653.2945 611.2598)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 654.6735 518.9476)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 672.0383 522.5153)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 678.3032 576.5065)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 681.9548 559.3159)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-05_2_" ng-class="nvtSur.inmovablesClassList[39]" ng-click="nvtSur.showPropertyData(59, '5I', nvtSur.inmovables[39].idProperty)">
			<polyline id="IN-05_2_" class="property nvt-sprite-1" points="748,524.1 725.8,629.4 672.7,618.5 694.9,513.2 748,524.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 699.3148 589.4368)" class="st1 st2 st13">NAVE 5I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 711.2335 599.3318)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 713.6682 587.7709)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 689.0175 618.5927)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 706.3823 622.1603)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 707.7759 529.8542)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 725.1398 533.4216)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 728.8075 586.8781)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 732.4589 569.6884)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-06_2_" ng-class="nvtSur.inmovablesClassList[40]" ng-click="nvtSur.showPropertyData(59, '6I', nvtSur.inmovables[40].idProperty)">
			<polyline id="IN-06_2_" class="property nvt-sprite-2" points="778.9,640.3 725.8,629.4 748,524.1 801.1,535 778.9,640.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 750.0748 602.0291)" class="st1 st2 st13">NAVE 6I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 761.9744 611.5645)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 764.4089 600.0045)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 742.1208 629.4999)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 759.4847 633.0674)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 760.8851 540.7576)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 778.2489 544.3251)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 780.8783 597.5594)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 784.5299 580.3687)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-07_2_" ng-class="nvtSur.inmovablesClassList[41]" ng-click="nvtSur.showPropertyData(59, '7I', nvtSur.inmovables[41].idProperty)">
			<polyline id="IN-07_2_" class="property nvt-sprite-1" points="854.2,545.9 832,651.2 778.9,640.3 801.1,535 854.2,545.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 808.5036 611.2674)" class="st1 st2 st13">NAVE 7I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 819.7036 622.2229)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 822.1392 610.6622)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 795.2201 640.4073)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 812.585 643.975)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 813.9763 551.6604)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 831.3402 555.2279)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 837.1226 609.1264)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 840.7742 591.9357)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-08_2_" ng-class="nvtSur.inmovablesClassList[42]" ng-click="nvtSur.showPropertyData(59, '8I', nvtSur.inmovables[42].idProperty)">
			<polyline id="IN-08_2_" class="property nvt-sprite-2" points="885.1,662.1 832,651.2 854.2,545.9 907.3,556.8 885.1,662.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 862.0563 622.5902)" class="st1 st2 st13">NAVE 8I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 874.08 633.3901)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 876.5148 621.8292)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 848.318 651.3025)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 865.6828 654.8702)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 867.0665 562.569)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 884.4303 566.1364)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 890.175 620.0179)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 893.8266 602.8273)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-09_1_" ng-class="nvtSur.inmovablesClassList[43]" ng-click="nvtSur.showPropertyData(59, '9I', nvtSur.inmovables[43].idProperty)">
			<polyline id="I-09_4_" class="property nvt-sprite-1" points="960.4,567.7 938.2,673 885.1,662.1 907.3,556.8 960.4,567.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 915.8491 632.9584)" class="st1 st2 st13">NAVE 9I </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 927.1343 644.4856)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 929.5692 632.9238)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 901.4099 662.2119)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 918.7747 665.7795)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 920.1696 573.4722)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 937.5335 577.0396)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 944.0847 631.0987)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 947.7361 613.909)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-10_2_" ng-class="nvtSur.inmovablesClassList[44]" ng-click="nvtSur.showPropertyData(59, '10I', nvtSur.inmovables[44].idProperty)">
			<polyline id="IN-10_2_" class="property nvt-sprite-2" points="1013.5,578.6 991.3,683.9 938.2,673 960.4,567.7 1013.5,578.6 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 965.8045 642.7424)" class="st1 st2 st13">NAVE 10I</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 980.1818 654.367)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 982.6165 642.8062)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 954.5166 673.1174)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 971.8805 676.6848)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 973.2704 584.3774)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 990.6353 587.9446)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 996.518 641.8637)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1000.1696 624.673)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-11_2_" ng-class="nvtSur.inmovablesClassList[45]" ng-click="nvtSur.showPropertyData(59, '11I', nvtSur.inmovables[45].idProperty)">
			<polyline id="IN-11_2_" class="property nvt-sprite-1" points="1066.6,589.5 1044.4,694.8 991.3,683.9 1013.5,578.6 1066.6,589.5 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1019.3481 657.1589)" class="st1 st2 st13">NAVE 11I</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1032.1327 666.1523)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1034.5675 654.5915)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1007.6149 684.0246)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1024.9797 687.5922)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1026.358 595.2784)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1043.7219 598.8459)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1050.8022 653.0189)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1054.4539 635.8282)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-12_2_" ng-class="nvtSur.inmovablesClassList[46]" ng-click="nvtSur.showPropertyData(59, '12I', nvtSur.inmovables[46].idProperty)">
			<polyline id="IN-12_2_" class="property nvt-sprite-2" points="1119.7,600.4 1097.5,705.7 1044.4,694.8 1066.6,589.5 1119.7,600.4 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1071.2949 668.9113)" class="st1 st2 st13">NAVE 12I</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1076.1 645.8021)" class="st1 st2 st13"> </text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1084.6188 678.7278)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1087.0536 667.1669)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1060.7106 694.9258)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1078.0754 698.4934)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1079.4686 606.1892)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1096.8325 609.7567)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1103.1057 663.7517)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1106.7573 646.561)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-13_2_" ng-class="nvtSur.inmovablesClassList[47]" ng-click="nvtSur.showPropertyData(59, '13I', nvtSur.inmovables[47].idProperty)">
			<polyline id="IN-13_2_" class="property nvt-sprite-1" points="1172.8,611.3 1150.6,716.6 1097.5,705.7 1119.7,600.4 1172.8,611.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1124.3658 681.7303)" class="st1 st2 st13">NAVE 13I</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1136.1809 690.0276)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1138.6157 678.4667)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1113.7938 705.8289)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1131.1577 709.3964)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1132.5721 617.0959)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1149.9359 620.6635)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1154.9867 674.4053)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1158.6381 657.2155)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-14_2_" ng-class="nvtSur.inmovablesClassList[48]" ng-click="nvtSur.showPropertyData(59, '14I', nvtSur.inmovables[48].idProperty)">
			<polyline id="IN-14_2_" class="property nvt-sprite-2" points="1225.9,622.2 1203.7,727.6 1150.6,716.6 1172.8,611.3 1225.9,622.2 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1175.5739 692.0987)" class="st1 st2 st13">NAVE 14I</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1187.605 701.9879)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1190.0398 690.4271)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1166.9053 716.7403)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1184.2692 720.3077)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1185.6602 628.0001)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1203.024 631.5675)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1206.9263 685.079)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1210.5779 667.8883)" class="st4 st5 st15">0</text>
		</g>
		<g id="I-15_2_" ng-class="nvtSur.inmovablesClassList[49]" ng-click="nvtSur.showPropertyData(59, '15I', nvtSur.inmovables[49].idProperty)">
			<polyline id="IN-15_2_" class="property nvt-sprite-1" points="1279,633.1 1256.8,738.5 1203.7,727.6 1225.9,622.2 1279,633.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1229.3293 701.4842)" class="st1 st2 st13">NAVE 15I</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1241.6195 709.77)" class="st4 st5 st13">20</text>
			<text transform="matrix(0.2046 -0.9715 0.9792 0.203 1244.0546 698.2081)" class="st4 st5 st13">0.00 m2</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1261.3174 696.2385)" class="st4 st5 st15">20.0</text>
			<text transform="matrix(0.2063 -0.9712 0.9788 0.2047 1264.9689 679.0488)" class="st4 st5 st15">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1220.011 727.6411)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1237.3759 731.2087)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1238.7629 638.9052)" class="st4 st5 st14">10.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1256.1268 642.4727)" class="st4 st5 st14">0</text>
			<g>
				<polyline class="st8" points="1234.3,710.1 1232,721.3 1227.5,714.6 1234.3,710.1 				"/>
				<polyline class="st9" points="1234.3,710.1 1238.8,716.9 1232,721.3 1234.3,710.1 				"/>
			</g>
		</g>
		<g id="DIVISIONES_I_2_" >
			<line class="st12" x1="1203.7" y1="727.6" x2="1225.9" y2="622.2"/>
			<line class="st12" x1="1150.6" y1="716.6" x2="1172.8" y2="611.3"/>
			<line class="st12" x1="1097.5" y1="705.7" x2="1119.7" y2="600.4"/>
			<line class="st12" x1="1044.4" y1="694.8" x2="1066.6" y2="589.5"/>
			<line class="st12" x1="991.3" y1="683.9" x2="1013.5" y2="578.6"/>
			<line class="st12" x1="938.2" y1="673" x2="960.4" y2="567.7"/>
			<line class="st12" x1="885.1" y1="662.1" x2="907.3" y2="556.8"/>
			<line class="st12" x1="832" y1="651.2" x2="854.2" y2="545.9"/>
			<line class="st12" x1="778.9" y1="640.3" x2="801.1" y2="535"/>
			<line class="st12" x1="725.8" y1="629.4" x2="748" y2="524.1"/>
			<line class="st12" x1="672.7" y1="618.5" x2="694.9" y2="513.2"/>
			<line class="st12" x1="619.6" y1="607.6" x2="641.8" y2="502.3"/>
			<line class="st12" x1="566.5" y1="596.7" x2="588.7" y2="491.4"/>
			<line class="st12" x1="513.4" y1="585.8" x2="535.6" y2="480.5"/>
			<g id="DIVISIONES_H_2_">
				<line class="st12" x1="542.1" y1="344.5" x2="514.6" y2="476.2"/>
				<line class="st12" x1="605.8" y1="357.5" x2="578.4" y2="489.2"/>
				<line class="st12" x1="669.6" y1="370.6" x2="642.1" y2="502.3"/>
				<line class="st12" x1="733.3" y1="383.7" x2="705.8" y2="515.4"/>
				<line class="st12" x1="797" y1="396.8" x2="769.5" y2="528.5"/>
				<line class="st12" x1="860.7" y1="409.9" x2="833.2" y2="541.6"/>
				<line class="st12" x1="924.4" y1="423" x2="896.9" y2="554.7"/>
				<line class="st12" x1="988.1" y1="436.1" x2="960.7" y2="567.8"/>
				<line class="st12" x1="1051.9" y1="449.1" x2="1024.4" y2="580.9"/>
				<line class="st12" x1="443.4" y1="461.5" x2="1279" y2="633.1"/>
				<line class="st12" x1="1115.6" y1="462.2" x2="1088.1" y2="593.9"/>
				<line class="st12" x1="1179.3" y1="475.3" x2="1151.8" y2="607"/>
				<line class="st12" x1="1243" y1="488.4" x2="1215.5" y2="620.1"/>
			</g>
		</g>
	</g>
	<g id="MODULO_J">
		<g id="J-01_1_" ng-class="nvtSur.inmovablesClassList[50]" ng-click="nvtSur.showPropertyData(59, '1J', nvtSur.inmovables[50].idProperty)">
			<polyline id="JN-01_1_" class="property nvt-sprite-1" points="489.4,870.9 464.9,652.7 617.4,684.1 574.8,888.1 489.4,870.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 541.1919 797.452)" class="st1 st2 st13">NAVE 1J </text>
			<g>
				<polyline class="st8" points="543.6,692.2 541.2,703.3 536.8,696.6 543.6,692.2 				"/>
				<polyline class="st9" points="543.6,692.2 548,698.9 541.2,703.3 543.6,692.2 				"/>
			</g>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 556.5972 805.8949)" class="st4 st5 st13">86</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 559.0105 794.3295)" class="st4 st5 st13">7.</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 560.8156 785.679)" class="st4 st5 st13">99 m2</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 483.1975 749.3785)" class="st4 st5 st6">40.7</text>
			<text transform="matrix(0.1097 0.9863 -0.9941 0.1089 485.1392 766.8363)" class="st4 st5 st6">9</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 527.0639 681.5178)" class="st4 st5 st14">28.7</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 544.4278 685.0852)" class="st4 st5 st14">1</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 522.6566 870.4126)" class="st4 st5 st14">16.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 540.0214 873.9802)" class="st4 st5 st14">7</text>
		</g>
		<g id="J-02_1_" ng-class="nvtSur.inmovablesClassList[51]" ng-click="nvtSur.showPropertyData(59, '2J', nvtSur.inmovables[51].idProperty)">
			<polyline id="JN-02_1_" class="property nvt-sprite-2" points="649.2,903.2 634.6,900.2 574.8,888.1 617.4,684.1 691.7,699.3 649.2,903.2 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 628.0579 815.4695)" class="st1 st2 st13">NAVE 2J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 641.6041 826.1913)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 644.0173 814.6259)" class="st4 st5 st13">2.00 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 640.4489 704.8066)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 657.8129 708.3735)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 602.478 886.8102)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 619.843 890.3773)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 605.1722 799.6241)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 608.7616 782.4224)" class="st4 st5 st16">4</text>
		</g>
		<g id="J-03_1_" ng-class="nvtSur.inmovablesClassList[52]" ng-click="nvtSur.showPropertyData(59, '3J', nvtSur.inmovables[52].idProperty)">
			<polyline id="JN-03_1_" class="property nvt-sprite-1" points="691.7,699.3 766,714.6 723.5,918.5 649.2,903.2 691.7,699.3 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 706.0573 830.0986)" class="st1 st2 st13">NAVE 3J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 719.4149 839.7159)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 721.8282 828.1506)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 714.7936 720.0704)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 732.1575 723.6379)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 676.8201 902.073)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 694.1849 905.6406)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 679.5231 814.7955)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 683.1127 797.5928)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-04_1_" ng-class="nvtSur.inmovablesClassList[53]" ng-click="nvtSur.showPropertyData(59, '4J', nvtSur.inmovables[53].idProperty)">
			<polyline id="JN-04_1_" class="property nvt-sprite-2" points="766,714.6 840.4,729.9 797.8,933.7 723.5,918.5 766,714.6 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 779.6104 849.1508)" class="st1 st2 st13">NAVE 4J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 791.1866 857.4379)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 793.5999 845.8726)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 789.1254 735.3397)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 806.4893 738.9071)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 751.1599 917.3369)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 768.5237 920.9043)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 753.8665 830.0601)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 757.4561 812.8574)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-05_1_" ng-class="nvtSur.inmovablesClassList[54]" ng-click="nvtSur.showPropertyData(59, '5J', nvtSur.inmovables[54].idProperty)">
			<polyline id="JN-05_1_" class="property nvt-sprite-1" points="840.4,729.9 914.7,745.1 872.2,949 797.8,933.7 840.4,729.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 853.8997 864.6316)" class="st1 st2 st13">NAVE 5J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 865.8864 872.362)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 868.2996 860.7966)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 863.4514 750.6122)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 880.8152 754.1796)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 825.4812 932.6029)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 842.8451 936.1704)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 828.1902 845.3376)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 831.78 828.1339)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-06_1_" ng-class="nvtSur.inmovablesClassList[55]" ng-click="nvtSur.showPropertyData(59, '6J', nvtSur.inmovables[55].idProperty)">
			<polyline id="JN-06_1_" class="property nvt-sprite-2" points="914.7,745.1 989,760.4 946.5,964.3 872.2,949 914.7,745.1 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 928.1804 880.1006)" class="st1 st2 st13">NAVE 6J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 940.0383 888.4387)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 942.4516 876.8733)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 937.8038 765.8776)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 955.1686 769.4453)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 899.8321 947.8806)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 917.197 951.4482)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 902.53 860.6054)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 906.1196 843.4026)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-07_1_" ng-class="nvtSur.inmovablesClassList[56]" ng-click="nvtSur.showPropertyData(59, '7J', nvtSur.inmovables[56].idProperty)">
			<polyline id="JN-07_1_" class="property nvt-sprite-1" points="989,760.4 1063.4,775.7 1020.8,979.5 946.5,964.3 989,760.4 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1002.4844 895.5874)" class="st1 st2 st13">NAVE 7J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1018.0278 902.7188)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1020.441 891.1534)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1012.1354 781.1378)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1029.4993 784.7053)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 974.1631 963.1481)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 991.527 966.7156)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 976.878 875.8669)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 980.4678 858.6633)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-08_1_" ng-class="nvtSur.inmovablesClassList[57]" ng-click="nvtSur.showPropertyData(59, '8J', nvtSur.inmovables[57].idProperty)">
			<polyline id="JN-08_1_" class="property nvt-sprite-2" points="1063.4,775.7 1137.7,790.9 1095.2,994.8 1020.8,979.5 1063.4,775.7 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1076.7811 911.0518)" class="st1 st2 st13">NAVE 8J </text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1088.808 918.571)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1091.2214 907.0048)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1086.483 796.4218)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1103.8469 799.9892)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1048.5054 978.41)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1065.8693 981.9774)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1051.2122 891.1326)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1054.8018 873.9299)" class="st4 st5 st16">0</text>
		</g>
		<g id="J-09_1_" ng-class="nvtSur.inmovablesClassList[58]" ng-click="nvtSur.showPropertyData(59, '9J', nvtSur.inmovables[58].idProperty)">
			<polyline id="JN-09_1_" class="property nvt-sprite-1" points="1137.7,790.9 1212,806.2 1169.5,1010.1 1095.2,994.8 1137.7,790.9 			"/>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1152.2839 920.7074)" class="st1 st2 st13">NAVE 9J</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1166.8701 933.4922)" class="st4 st5 st13">54</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1169.2833 921.9269)" class="st4 st5 st13">1.80 m2</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1160.8004 811.683)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1178.1653 815.2507)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1122.8446 993.6767)" class="st4 st5 st14">14.0</text>
			<text transform="matrix(0.9866 0.2027 -0.2043 0.9789 1140.2085 997.2441)" class="st4 st5 st14">0</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1125.5509 906.4102)" class="st4 st5 st16">38.7</text>
			<text transform="matrix(0.2028 -0.9719 0.9795 0.2013 1129.1403 889.2084)" class="st4 st5 st16">0</text>
		</g>
		<g id="DIVISIONES_J_1_">
			<line class="st12" x1="617.4" y1="684.1" x2="574.8" y2="888.1"/>
			<line class="st12" x1="691.7" y1="699.3" x2="649.2" y2="903.2"/>
			<line class="st12" x1="766" y1="714.6" x2="723.5" y2="918.5"/>
			<line class="st12" x1="840.4" y1="729.9" x2="797.8" y2="933.7"/>
			<line class="st12" x1="914.7" y1="745.1" x2="872.2" y2="949"/>
			<line class="st12" x1="989" y1="760.4" x2="946.5" y2="964.3"/>
			<line class="st12" x1="1063.4" y1="775.7" x2="1020.8" y2="979.5"/>
			<line class="st12" x1="1137.7" y1="790.9" x2="1095.2" y2="994.8"/>
			<line class="st12" x1="1212" y1="806.2" x2="1169.5" y2="1010.1"/>
		</g>
	</g>
</g>
            <polygon class="st17" points="2.3,41.8 86.8,790.6 633.6,900.7 1058.8,987.6 1171.1,1010.6 1213.8,806.6 1243.3,812.6 1258.7,738.9 
            1309,501.8 1324.6,428.1 1363.2,245.9 397,47.7 397,38.8 273.6,4 275.1,11.9 "/>
            </svg>

        </div>

	</div>

</body>
</html>