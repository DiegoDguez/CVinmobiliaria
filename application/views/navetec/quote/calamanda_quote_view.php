<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria"/>

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtCalamandaQuoteCtrl as nvtCalamanda">
  
	
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

	<div class="modal-dialog" ng-class="nvtCalamanda.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtCalamanda.closeDialog()"></div>
			<div class="container-dialog p-20">
				<div class="toolbar-dialog blue-txt">
					Cotización
					<span ng-click="nvtCalamanda.closeDialog()">
						<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
					</span>
				</div>
                <div class="content-dialog">

<div class="divider"></div>

<div class="p-20 grey lighten-5">
  <div class="p-5">
    <h6 class="futura-med">Navetec Business Park {{nvtCalamanda.propertyData.condominium}}</h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light">{{nvtCalamanda.propertyData.propertyClass}}</h6>
            </div>
  <div class="p-5">
    <h6 class="futura-light">{{nvtCalamanda.propertyData.type}}</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Número {{nvtCalamanda.propertyData.number}}</h6>
  </div>
  <!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCalamanda.propertyData.dimensions}}</h6>
  </div> -->
  <div class="p-5">
    <h6 class="futura-light">Área de {{nvtCalamanda.propertyData.area}} M&sup2;</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Precio por M&sup2; de ${{nvtCalamanda.propertyData.cost_m2}} MXN</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light green-text">Precio de ${{nvtCalamanda.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;"></span></h6>
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
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Valido hasta {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">Compra en Enero y paga la primera mensualidad hasta Febrero</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

        <div class="p-20">
            <p class="blue-text futura-book">¡Apártalo ahora!</p>
            <p class="green-text">Con tan solo {{nvtCalamanda.costToBlock}}</p>
            <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
        </div>

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
					<h2 class="center-align futura-med">CALAMANDA</h2>
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
            
        <svg version="1.1" id="N.B.P._CALAMANDA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1366 498" style="enable-background:new 0 0 1366 498;" xml:space="preserve">
        <style type="text/css">
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
            .st1{fill:#FFFFFF;}
            .st2{font-family:'CenturyGothic';}
            .st3{font-size:8.3px;}
            .st4{fill:#F3E721;}
            .st5{font-family:'CenturyGothic-Bold';}
            .st6{font-size:9.6833px;}
            .st7{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            .st8{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            .st9{fill-rule:evenodd;clip-rule:evenodd;fill:#0047BA;}
            .st10{fill:none;stroke:#FFFFFF;stroke-width:1.3833;stroke-miterlimit:10;}
            .st11{fill:none;stroke:#FFFFFF;stroke-width:1.3833;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            .st12{fill:#5B3F0D;}
            .st13{fill:#1C2044;}
            .st14{font-size:5.2639px;}
            .st15{font-size:5.3274px;}
            .st16{fill:none;stroke:#1C2044;stroke-width:4.15;stroke-miterlimit:10;}
            .st17{fill:#002856}
            .st18{fill:none}
        </style>
            <g id="MACHOTE">
            </g>
            <g id="BASE">
                <image style="overflow:visible;" width="1366" height="498" xlink:href="media/assets/img/navetec/app/calamanda/calamanda_1.jpg" >
                </image>
            </g>
            <g id="MÓDULOS">
                <g id="ISLA_A">
                    <g id="A-1_1_" ng-class="nvtCalamanda.inmovablesClassList[0]" ng-click="nvtCalamanda.showPropertyData(55, '1A', nvtCalamanda.inmovables[0].idProperty)">
                        <polyline id="A-N1_1_" class="property pb-sprite-1" points="128.2,4.9 194.2,4.6 194.9,196.4 128.9,196.6 128.2,4.9 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 151.2417 14.6107)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 151.8694 192.2404)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 132.6675 90.7653)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 143.1019 103.4697)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 149.3001 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">1A</tspan></text>
                        </g>
                        <g>
                            <polyline class="st7" points="162.4,167.9 162.4,179.7 156.5,173.8 162.4,167.9 				"/>
                            <polyline class="st8" points="162.4,167.9 168.3,173.8 162.4,179.7 162.4,167.9 				"/>
                        </g>
                    </g>
                    <g id="A-2_1_" ng-class="nvtCalamanda.inmovablesClassList[1]" ng-click="nvtCalamanda.showPropertyData(55, '2A', nvtCalamanda.inmovables[1].idProperty)">
                        <polyline id="A-N2_1_" class="property pb-sprite-2" points="260.1,4.4 260.8,196.2 194.9,196.4 194.2,4.6 260.1,4.4 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 217.2076 14.3775)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 217.8343 192.0073)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 198.6334 90.5317)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 209.0672 103.2363)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 213.8909 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">2A</tspan></text>
                        </g>
                    </g>
                    <g id="A-3_1_" ng-class="nvtCalamanda.inmovablesClassList[2]" ng-click="nvtCalamanda.showPropertyData(55, '3A', nvtCalamanda.inmovables[2].idProperty)">
                        <polyline id="A-N3_1_" class="property pb-sprite-1" points="326.1,4.2 326.8,195.9 260.8,196.2 260.1,4.4 273.1,4.4 326.1,4.2 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 283.1744 14.1454)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 283.8002 191.7761)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 264.5969 90.2986)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 275.0345 103.0044)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 279.8587 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">3A</tspan></text>
                        </g>
                    </g>
                    <g id="A-4_1_" ng-class="nvtCalamanda.inmovablesClassList[3]" ng-click="nvtCalamanda.showPropertyData(55, '4A', nvtCalamanda.inmovables[3].idProperty)">
                        <polyline id="A-N4_1_" class="property pb-sprite-2" points="392.1,3.9 392.8,195.7 326.8,195.9 326.1,4.2 392.1,3.9 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 349.1413 13.9117)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 349.7671 191.543)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 330.5623 90.0664)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 341.0008 102.7695)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 345.8255 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">4A</tspan></text>
                        </g>
                    </g>
                    <g id="A-5_1_" ng-class="nvtCalamanda.inmovablesClassList[4]" ng-click="nvtCalamanda.showPropertyData(55, '5A', nvtCalamanda.inmovables[4].idProperty)">
                        <polyline id="A-N5_1_" class="property pb-sprite-1" points="392.1,3.9 458,3.7 458.7,195.5 392.8,195.7 392.1,3.9 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 415.1053 13.6786)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 415.732 191.3098)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 396.5277 89.8332)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 406.9666 102.5376)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 411.7918 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">5A</tspan></text>
                        </g>
                    </g>
                    <g id="A-6_1_" ng-class="nvtCalamanda.inmovablesClassList[5]" ng-click="nvtCalamanda.showPropertyData(55, '6A', nvtCalamanda.inmovables[5].idProperty)">
                        <polyline id="A-N6_1_" class="property pb-sprite-2" points="458,3.7 499.8,3.6 524,3.5 524.7,195.2 458.7,195.5 458,3.7 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 481.0721 13.4464)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 481.6979 191.0766)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 462.4955 89.6001)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 472.9354 102.3052)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 477.7596 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">6A</tspan></text>
                        </g>
                    </g>
                    <g id="A-7_1_" ng-class="nvtCalamanda.inmovablesClassList[6]" ng-click="nvtCalamanda.showPropertyData(55, '7A', nvtCalamanda.inmovables[6].idProperty)">
                        <polyline id="A-N7_1_" class="property pb-sprite-1" points="590.7,195 524.7,195.2 524,3.5 590,3.2 590.7,195 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 547.0375 13.2123)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 547.6653 190.8445)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 528.4609 89.3689)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 538.9007 102.0718)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 543.7254 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">7A</tspan></text>
                        </g>
                    </g>
                    <g id="A-8_1_" ng-class="nvtCalamanda.inmovablesClassList[7]" ng-click="nvtCalamanda.showPropertyData(55, '8A', nvtCalamanda.inmovables[7].idProperty)">
                        <polyline id="A-N8_1_" class="property pb-sprite-2" points="590,3.2 617.9,3.1 655.9,3 656.6,194.8 590.7,195 590,3.2 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 613.0049 12.9801)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 613.6312 190.6113)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 594.4234 89.1357)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 604.8665 101.8398)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 609.6927 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">8A</tspan></text>
                        </g>
                    </g>
                    <g id="A-9_1_" ng-class="nvtCalamanda.inmovablesClassList[8]" ng-click="nvtCalamanda.showPropertyData(55, '9A', nvtCalamanda.inmovables[8].idProperty)">
                        <polyline id="A-N9_1_" class="property pb-sprite-1" points="655.9,3 721.9,2.8 722.6,194.5 656.6,194.8 655.9,3 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 678.9684 12.7465)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 679.5961 190.3782)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 660.3922 88.9026)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 670.8343 101.6089)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 675.6575 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">9A</tspan></text>
                        </g>
                    </g>
                    <g id="A-10_1_" ng-class="nvtCalamanda.inmovablesClassList[9]" ng-click="nvtCalamanda.showPropertyData(55, '10A', nvtCalamanda.inmovables[9].idProperty)">
                        <polyline id="A-N10_1_" class="property pb-sprite-2" points="721.9,2.8 736.1,2.7 787.9,2.5 788.6,194.3 722.6,194.5 721.9,2.8 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 744.9357 12.5143)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 745.5635 190.147)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 726.3577 88.6704)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 736.8011 101.3726)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 741.6263 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">10A</tspan></text>
                        </g>
                    </g>
                    <g id="A-11_1_" ng-class="nvtCalamanda.inmovablesClassList[10]" ng-click="nvtCalamanda.showPropertyData(55, '11A', nvtCalamanda.inmovables[10].idProperty)">
                        <polyline id="A-N11_1_" class="property pb-sprite-1" points="854.5,194.1 788.6,194.3 787.9,2.5 853.8,2.3 854.5,194.1 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 810.9021 12.2821)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 811.5289 189.9128)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 792.324 88.4382)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 802.7669 101.1421)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 807.5911 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">11A</tspan></text>
                        </g>
                    </g>
                    <g id="A-12_1_" ng-class="nvtCalamanda.inmovablesClassList[11]" ng-click="nvtCalamanda.showPropertyData(55, '12A', nvtCalamanda.inmovables[11].idProperty)">
                        <polyline id="A-N12_1_" class="property pb-sprite-2" points="853.8,2.3 919.8,2.1 920.5,193.9 854.5,194.1 853.8,2.3 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 876.8685 12.0489)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 877.4953 189.6797)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 858.2894 88.2041)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 868.7327 100.9087)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 873.5599 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">12A</tspan></text>
                        </g>
                    </g>
                    <g id="A-13_1_" ng-class="nvtCalamanda.inmovablesClassList[12]" ng-click="nvtCalamanda.showPropertyData(55, '13A', nvtCalamanda.inmovables[12].idProperty)">
                        <polyline id="A-N13_1_" class="property pb-sprite-1" points="986.5,193.6 920.5,193.9 919.8,2.1 985.8,1.8 986.5,193.6 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 942.832 11.8158)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 943.4597 189.4475)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 924.2549 87.9719)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 934.6995 100.6763)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 939.5257 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">13A</tspan></text>
                        </g>
                    </g>
                    <g id="A-14_1_" ng-class="nvtCalamanda.inmovablesClassList[13]" ng-click="nvtCalamanda.showPropertyData(55, '14A', nvtCalamanda.inmovables[13].idProperty)">
                        <polyline id="A-N14_1_" class="property pb-sprite-2" points="1051.7,1.6 1052.4,193.4 986.5,193.6 985.8,1.8 1051.7,1.6 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1008.8003 11.5807)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1009.428 189.2143)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 990.2203 87.7388)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 1000.6663 100.4443)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 1005.4925 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">14A</tspan></text>
                        </g>
                    </g>
                    <g id="A-15_1_" ng-class="nvtCalamanda.inmovablesClassList[14]" ng-click="nvtCalamanda.showPropertyData(55, '15A', nvtCalamanda.inmovables[14].idProperty)">
                        <polyline id="A-N15_1_" class="property pb-sprite-1" points="1051.7,1.6 1117.7,1.4 1118.4,193.2 1052.4,193.4 1051.7,1.6 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1074.7667 11.3485)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1075.3944 188.9831)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1056.1866 87.5066)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 1066.6332 100.2114)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 1071.4594 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">15A</tspan></text>
                        </g>
                    </g>
                    <g id="A-16_1_" ng-class="nvtCalamanda.inmovablesClassList[15]" ng-click="nvtCalamanda.showPropertyData(55, '16A', nvtCalamanda.inmovables[15].idProperty)">
                        <polyline id="A-N16_1_" class="property pb-sprite-2" points="1183.7,1.1 1184.4,192.9 1118.4,193.2 1117.7,1.4 1183.7,1.1 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1140.7311 11.1154)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1141.3589 188.749)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1122.1462 87.2739)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 1132.6058 99.9785)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 1137.431 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">16A</tspan></text>
                        </g>
                    </g>
                    <g id="A-17_1_" ng-class="nvtCalamanda.inmovablesClassList[16]" ng-click="nvtCalamanda.showPropertyData(55, '17A', nvtCalamanda.inmovables[16].idProperty)">
                        <polyline id="A-N17_1_" class="property pb-sprite-1" points="1250.3,192.7 1184.4,192.9 1183.7,1.1 1249.6,0.9 1250.3,192.7 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1206.6917 10.8812)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1207.3224 188.5159)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1188.1116 87.0408)" class="st1 st2 st3">40.70</text>
                        </g>
                        <text transform="matrix(1 0 0 1 1198.5687 99.7461)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 1203.3969 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">17A</tspan></text>
                        </g>
                    </g>
                    <g id="A-18_1_" ng-class="nvtCalamanda.inmovablesClassList[17]" ng-click="nvtCalamanda.showPropertyData(55, '18A', nvtCalamanda.inmovables[17].idProperty)">
                        <polyline id="A-N18_1_" class="property pb-sprite-2" points="1249.6,0.9 1343.9,0.6 1351.6,192.3 1250.3,192.7 1249.6,0.9 			"/>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1286.7947 10.5988)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1290.936 188.2202)"><tspan x="0" y="0" class="st1 st2 st3">21.4</tspan><tspan x="16" y="0" class="st1 st2 st3">9</tspan></text>
                        <g>
                            <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1254.0858 86.8076)" class="st1 st2 st3">40.70</text>
                        </g>
                        <g>
                            <text transform="matrix(3.839011e-02 0.9993 -0.9993 3.839011e-02 1337.4078 86.8711)" class="st1 st2 st3">40.73</text>
                        </g>
                        <text transform="matrix(1 0 0 1 1282.1703 99.4639)"><tspan x="0" y="0" class="st1 st2 st3">84</tspan><tspan x="9.2" y="0" class="st1 st2 st3">4.27 m2</tspan></text>
                        <g>
                            <text transform="matrix(1 0 0 1 1285.6263 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">18A</tspan></text>
                        </g>
                    </g>
                    <g id="DIVISIONES_3_">
                        <line class="st10" x1="194.9" y1="196.4" x2="194.2" y2="4.6"/>
                        <line class="st10" x1="260.1" y1="4.4" x2="260.8" y2="196.2"/>
                        <line class="st10" x1="326.1" y1="4.2" x2="326.8" y2="195.9"/>
                        <line class="st10" x1="392.1" y1="3.9" x2="392.8" y2="195.7"/>
                        <line class="st10" x1="458" y1="3.7" x2="458.7" y2="195.5"/>
                        <line class="st10" x1="524" y1="3.5" x2="524.7" y2="195.2"/>
                        <line class="st10" x1="590" y1="3.2" x2="590.7" y2="195"/>
                        <line class="st10" x1="655.9" y1="3" x2="656.6" y2="194.8"/>
                        <line class="st10" x1="721.9" y1="2.8" x2="722.6" y2="194.5"/>
                        <line class="st10" x1="787.9" y1="2.5" x2="788.6" y2="194.3"/>
                        <line class="st10" x1="853.8" y1="2.3" x2="854.5" y2="194.1"/>
                        <line class="st10" x1="919.8" y1="2.1" x2="920.5" y2="193.9"/>
                        <line class="st10" x1="985.8" y1="1.8" x2="986.5" y2="193.6"/>
                        <line class="st10" x1="1051.7" y1="1.6" x2="1052.4" y2="193.4"/>
                        <line class="st10" x1="1117.7" y1="1.4" x2="1118.4" y2="193.2"/>
                        <line class="st10" x1="1183.7" y1="1.1" x2="1184.4" y2="192.9"/>
                        <line class="st10" x1="1249.6" y1="0.9" x2="1250.3" y2="192.7"/>
                    </g>
                </g>
                <g id="ISLA_B">
                    <g id="B-1_2_" ng-class="nvtCalamanda.inmovablesClassList[18]" ng-click="nvtCalamanda.showPropertyData(55, '1B', nvtCalamanda.inmovables[18].idProperty)">
                        <polyline id="B-N1_2_" class="property pb-sprite-2" points="194.9,495.1 128.9,495.1 128.9,302.9 194.9,302.9 194.9,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 151.9613 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 151.9613 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 138.7689 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 143.4246 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 148.6873 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">1B</tspan></text>
                        </g>
                        <g>
                            <polyline class="st7" points="162.4,319.9 162.4,331.7 156.5,325.8 162.4,319.9 				"/>
                            <polyline class="st8" points="162.4,319.9 168.3,325.8 162.4,331.7 162.4,319.9 				"/>
                        </g>
                    </g>
                    <g id="B-2_2_" ng-class="nvtCalamanda.inmovablesClassList[19]" ng-click="nvtCalamanda.showPropertyData(55, '2B', nvtCalamanda.inmovables[19].idProperty)">
                        <polyline id="B-N2_2_" class="property pb-sprite-1" points="260.8,495.1 194.9,495.1 194.9,302.9 260.8,302.9 260.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 217.9495 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 217.9495 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 204.7557 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 209.4119 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 214.6741 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">2B</tspan></text>
                        </g>
                    </g>
                    <g id="B-3_2_" ng-class="nvtCalamanda.inmovablesClassList[20]" ng-click="nvtCalamanda.showPropertyData(55, '3B', nvtCalamanda.inmovables[20].idProperty)">
                        <polyline id="B-N3_2_" class="property pb-sprite-2" points="326.8,495.1 260.8,495.1 260.8,302.9 326.8,302.9 326.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 283.9373 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 283.9373 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 270.7435 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 275.3997 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 280.662 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">3B</tspan></text>
                        </g>
                    </g>
                    <g id="B-4_2_" ng-class="nvtCalamanda.inmovablesClassList[21]" ng-click="nvtCalamanda.showPropertyData(55, '4B', nvtCalamanda.inmovables[21].idProperty)">
                        <polyline id="B-N4_2_" class="property pb-sprite-1" points="326.8,495.1 326.8,302.9 392.8,302.9 392.8,495.1 326.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 349.9242 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 349.9242 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 336.7313 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 341.3871 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 346.6497 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">4B</tspan></text>
                        </g>
                    </g>
                    <g id="B-5_2_" ng-class="nvtCalamanda.inmovablesClassList[22]" ng-click="nvtCalamanda.showPropertyData(55, '5B', nvtCalamanda.inmovables[22].idProperty)">
                        <polyline id="B-N5_2_" class="property pb-sprite-2" points="458.8,495.1 392.8,495.1 392.8,302.9 458.8,302.9 458.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 415.9144 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 415.9144 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 402.7191 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 407.3739 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 412.6371 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">5B</tspan></text>
                        </g>
                    </g>
                    <g id="B-6_2_" ng-class="nvtCalamanda.inmovablesClassList[23]" ng-click="nvtCalamanda.showPropertyData(55, '6B', nvtCalamanda.inmovables[23].idProperty)">
                        <polyline id="B-N6_2_" class="property pb-sprite-1" points="458.8,495.1 458.8,302.9 524.8,302.9 524.8,495.1 458.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 481.9012 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 481.9012 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 468.7054 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 473.3631 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 478.6258 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">6B</tspan></text>
                        </g>
                    </g>
                    <g id="B-7_2_" ng-class="nvtCalamanda.inmovablesClassList[24]" ng-click="nvtCalamanda.showPropertyData(55, '7B', nvtCalamanda.inmovables[24].idProperty)">
                        <polyline id="B-N7_2_" class="property pb-sprite-2" points="590.8,495.1 524.8,495.1 524.8,302.9 590.8,302.9 590.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 547.886 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 547.886 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 534.6927 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 539.3504 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 544.6146 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">7B</tspan></text>
                        </g>
                    </g>
                    <g id="B-8_2_" ng-class="nvtCalamanda.inmovablesClassList[25]" ng-click="nvtCalamanda.showPropertyData(55, '8B', nvtCalamanda.inmovables[25].idProperty)">
                        <polyline id="B-N8_2_" class="property pb-sprite-1" points="590.8,495.1 590.8,302.9 656.8,302.9 656.8,495.1 590.8,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 613.8753 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 613.8753 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 600.6819 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 605.3382 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 610.6009 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">8B</tspan></text>
                        </g>
                    </g>
                    <g id="B-9_2_" ng-class="nvtCalamanda.inmovablesClassList[26]" ng-click="nvtCalamanda.showPropertyData(55, '9B', nvtCalamanda.inmovables[26].idProperty)">
                        <polyline id="B-N9_2_" class="property pb-sprite-2" points="656.8,302.9 722.8,302.9 722.8,495.1 656.8,495.1 656.8,302.9 			"/>
                        <text transform="matrix(0.9984 0 0 1 679.8636 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 679.8636 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 666.6722 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 671.3275 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 676.5901 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">9B</tspan></text>
                        </g>
                    </g>
                    <g id="B-10_2_" ng-class="nvtCalamanda.inmovablesClassList[27]" ng-click="nvtCalamanda.showPropertyData(55, '10B', nvtCalamanda.inmovables[27].idProperty)">
                        <polyline id="B-N10_2_" class="property pb-sprite-1" points="788.7,495.1 722.8,495.1 722.8,302.9 788.7,302.9 788.7,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 745.8519 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 745.8519 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 732.6575 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 737.3138 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 742.5794 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">10B</tspan></text>
                        </g>
                    </g>
                    <g id="B-11_2_" ng-class="nvtCalamanda.inmovablesClassList[28]" ng-click="nvtCalamanda.showPropertyData(55, '11B', nvtCalamanda.inmovables[28].idProperty)">
                        <polyline id="B-N11_2_" class="property pb-sprite-2" points="854.7,495.1 788.7,495.1 788.7,302.9 854.7,302.9 854.7,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 811.8382 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 811.8382 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 798.6448 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 803.2991 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 808.5657 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">11B</tspan></text>
                        </g>
                    </g>
                    <g id="B-12_2_" ng-class="nvtCalamanda.inmovablesClassList[29]" ng-click="nvtCalamanda.showPropertyData(55, '12B', nvtCalamanda.inmovables[29].idProperty)">
                        <polyline id="B-N12_2_" class="property pb-sprite-1" points="920.7,495.1 854.7,495.1 854.7,302.9 920.7,302.9 920.7,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 877.8275 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 877.8275 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 864.6312 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 869.2894 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 874.554 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">12B</tspan></text>
                        </g>
                    </g>
                    <g id="B-13_2_" ng-class="nvtCalamanda.inmovablesClassList[30]" ng-click="nvtCalamanda.showPropertyData(55, '13B', nvtCalamanda.inmovables[30].idProperty)">
                        <polyline id="B-N13_2_" class="property pb-sprite-2" points="920.7,302.9 986.7,302.9 986.7,495.1 920.7,495.1 920.7,302.9 			"/>
                        <text transform="matrix(0.9984 0 0 1 943.8138 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 943.8138 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 930.6185 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 935.2737 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 940.5384 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">13B</tspan></text>
                        </g>
                    </g>
                    <g id="B-14_2_" ng-class="nvtCalamanda.inmovablesClassList[31]" ng-click="nvtCalamanda.showPropertyData(55, '14B', nvtCalamanda.inmovables[31].idProperty)">
                        <polyline id="B-N14_2_" class="property pb-sprite-1" points="1052.7,495.1 986.7,495.1 986.7,302.9 1052.7,302.9 1052.7,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 1009.803 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1009.803 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 996.6068 408.8545)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1001.263 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 1006.5257 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">14B</tspan></text>
                        </g>
                    </g>
                    <g id="B-15_2_" ng-class="nvtCalamanda.inmovablesClassList[32]" ng-click="nvtCalamanda.showPropertyData(55, '15B', nvtCalamanda.inmovables[32].idProperty)">
                        <polyline id="B-N15_2_" class="property pb-sprite-2" points="1052.7,302.9 1118.7,302.9 1118.7,495.1 1052.7,495.1 1052.7,302.9 			"/>
                        <text transform="matrix(0.9984 0 0 1 1075.7904 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1075.7904 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 1062.5961 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1067.2513 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 1072.514 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">15B</tspan></text>
                        </g>
                    </g>
                    <g id="B-16_2_" ng-class="nvtCalamanda.inmovablesClassList[33]" ng-click="nvtCalamanda.showPropertyData(55, '16B', nvtCalamanda.inmovables[33].idProperty)">
                        <polyline id="B-N16_2_" class="property pb-sprite-1" points="1118.7,495.1 1118.7,302.9 1184.7,302.9 1184.7,495.1 1118.7,495.1 			"/>
                        <text transform="matrix(0.9984 0 0 1 1141.7806 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1141.7806 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 1128.5785 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1133.2357 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 1138.5033 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">16B</tspan></text>
                        </g>
                    </g>
                    <g id="B-17_2_" ng-class="nvtCalamanda.inmovablesClassList[34]" ng-click="nvtCalamanda.showPropertyData(55, '17B', nvtCalamanda.inmovables[34].idProperty)">
                        <polyline id="B-N17_2_" class="property pb-sprite-2" points="1184.7,302.9 1250.7,302.9 1250.7,495.1 1184.7,495.1 1184.7,302.9 			"/>
                        <text transform="matrix(0.9984 0 0 1 1207.7631 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1207.7631 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0 -1.0016 1 0 1194.5756 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1199.2299 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 1204.4867 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">17B</tspan></text>
                        </g>
                    </g>
                    <g id="B-18_2_" ng-class="nvtCalamanda.inmovablesClassList[35]" ng-click="nvtCalamanda.showPropertyData(55, '18B', nvtCalamanda.inmovables[35].idProperty)">
                        <polyline id="B-N18_2_" class="property pb-sprite-1" points="1250.7,302.9 1356.4,302.9 1364.1,495.1 1250.7,495.1 1250.7,302.9 			"/>
                        <text transform="matrix(0.9984 0 0 1 1293.6166 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">22.4</tspan><tspan x="16" y="0" class="st1 st2 st3">3</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1297.4584 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="16" y="0" class="st1 st2 st3">6</tspan></text>
                        <g>
                            <text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.6637 404.9079)" class="st1 st2 st3">3</text>
                            <text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.4945 400.4971)" class="st1 st2 st3">7</text>
                            <text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.4108 398.3122)" class="st1 st2 st3">.</text>
                            <text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.2416 393.9023)" class="st1 st2 st3">0</text>
                            <text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.0715 389.4964)" class="st1 st2 st3">4</text>
                        </g>
                        <text transform="matrix(0 -1.0016 1 0 1260.558 408.8545)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9984 0 0 1 1288.9271 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">94</tspan><tspan x="9.2" y="0" class="st1 st2 st3">6.06 m2</tspan></text>
                        <g>
                            <text transform="matrix(0.9984 0 0 1 1290.3392 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">18B</tspan></text>
                        </g>
                    </g>
                    <g id="DIVISIONES_1_">
                        <line class="st11" x1="194.9" y1="302.9" x2="194.9" y2="495.1"/>
                        <line class="st11" x1="260.8" y1="302.9" x2="260.8" y2="495.1"/>
                        <line class="st11" x1="326.8" y1="302.9" x2="326.8" y2="495.1"/>
                        <line class="st11" x1="392.8" y1="302.9" x2="392.8" y2="495.1"/>
                        <line class="st11" x1="458.8" y1="302.9" x2="458.8" y2="495.1"/>
                        <line class="st11" x1="524.8" y1="302.9" x2="524.8" y2="495.1"/>
                        <line class="st11" x1="590.8" y1="302.9" x2="590.8" y2="495.1"/>
                        <line class="st11" x1="656.8" y1="302.9" x2="656.8" y2="495.1"/>
                        <line class="st11" x1="722.8" y1="302.9" x2="722.8" y2="495.1"/>
                        <line class="st11" x1="788.7" y1="302.9" x2="788.7" y2="495.1"/>
                        <line class="st11" x1="854.7" y1="302.9" x2="854.7" y2="495.1"/>
                        <line class="st11" x1="920.7" y1="302.9" x2="920.7" y2="495.1"/>
                        <line class="st11" x1="986.7" y1="302.9" x2="986.7" y2="495.1"/>
                        <line class="st11" x1="1052.7" y1="302.9" x2="1052.7" y2="495.1"/>
                        <line class="st11" x1="1118.7" y1="302.9" x2="1118.7" y2="495.1"/>
                        <line class="st11" x1="1184.7" y1="302.9" x2="1184.7" y2="495.1"/>
                        <line class="st11" x1="1250.7" y1="302.9" x2="1250.7" y2="495.1"/>
                    </g>
                </g>
            </g>
            <g id="COMPLEMENTO">
                <polygon class="st12" points="78.5,319.3 101.3,319.3 101.3,311.2 128.9,311.2 128.9,495.1 78.5,495.1 	"/>
                <line class="st11" x1="128.9" y1="302.9" x2="128.9" y2="495.1"/>
                <path class="st12" d="M77.9,180.7c7.8,0,15.6-0.1,23.3-0.1c0,2.6,0,5.1,0,7.7h27.7L128.2,3.9c-16.9,0.1-33.7,0.3-50.6,0.4
                    C77.7,63.1,77.8,121.9,77.9,180.7z"/>
                <line class="st10" x1="128.9" y1="196.4" x2="128.2" y2="4.6"/>
                <g>
                    <text transform="matrix(-7.229941e-03 -1 1.107 -1.293072e-02 29.5032 287.9663)" class="st13 st5 st14">ACCESO</text>
                    <path class="st13" d="M37.2,277.3c-0.1-2.8-2.6-5.1-5.7-5.2l-0.2-7.5l6.3,6.3l6.3,6.2l-6.1,6.6l-6.1,6.6l-0.2-7.5
                        C34.8,282.5,37.2,280.1,37.2,277.3"/>
                </g>
                <g>
                    <text transform="matrix(-3.208421e-02 -0.9993 1.1019 -5.604011e-02 36.9674 232.4192)" class="st13 st5 st15">SALIDA</text>
                    <path class="st13" d="M25.9,224.5c-0.1-2.8,2.2-5.2,5.3-5.5l-0.3-7.4l-5.9,6.7l-5.9,6.7l6.3,6l6.3,6l-0.3-7.4
                        C28.5,229.5,26,227.3,25.9,224.5"/>
                </g>
                <path class="st16" d="M10.8,201.5C7.9,135.9,4.9,70.3,2,4.7C449.7,3,896.7,3,1344.5,1.3c6.8,165.5,14.3,329.2,21.1,494.7
                    c-446.8,0-893.5,0-1340.3,0c-3.5-66.5-7-133-10.4-199.5"/>
                    <g>
                        <polygon class="st17" points="1344.6,1.3 1364.6,495.8 920.7,495.7 919.7,4.4 "/>
                        <g>
                            <rect x="1035.8" y="215.6" class="st18" width="185.7" height="46.2"/>
                            <text transform="matrix(1 0 0 1 1052.491 255.187)" class="st1 st5 st23">ETAPA III </text>
                        </g>
                        <g>
                            <rect x="552.1" y="215.6" class="st18" width="185.7" height="46.2"/>
                            <text transform="matrix(1 0 0 1 569.5344 255.187)" class="st1 st5 st23">ETAPA II </text>
                        </g>
                        <g>
                            <rect x="141.3" y="215.6" class="st18" width="185.7" height="46.2"/>
                            <text transform="matrix(1 0 0 1 161.5502 255.187)" class="st1 st5 st23">ETAPA I </text>
                        </g>
                    </g>
                </g>
            </text>
            </g>
            </svg>
        
        </div>
        
        <div class="container">
            <div class="row quote-header">
                <div class="col s12">
                    <h2 class="pt-32 fs__26px">Locales Industriales</h2>
                </div>
            </div>
        </div>
        <div style="margin:0 16px">
            <svg version="1.1" id="N.B.P._CALAMANDA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 1366 821" style="enable-background:new 0 0 1366 821;" xml:space="preserve">
            <style type="text/css">
            	.stc0{display:none;}
            	.stc1{display:inline;}
            	.stc2{fill:#212A4A;}
            	.stc3{display:inline;fill:#002856;}
            	.stc4{display:inline;fill:#FFFFFF;}
            	.stc5{display:inline;fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
            	.stc6{fill:#021D49;}
            	.stc7{fill:#1C2044;}
            	.stc8{fill:#A0A0A1;}
            	.stc9{fill:#CD262E;}
            	.stc10{fill:#002856;}
            	.stc11{fill:#0047BA;}
            	.stc12{fill-rule:evenodd;clip-rule:evenodd;fill:#0047BA;}
            	.stc13{fill:#FFFFFF;}
            	.stc14{font-family:'CenturyGothic';}
            	.stc15{font-size:11.7509px;}
            	.stc16{font-size:11.7549px;}
            	.stc17{font-size:11.755px;}
            	.stc18{fill:#FFBF00;}
            	.stc19{font-family:'CenturyGothic-Bold';}
            	.stc20{font-size:13.7142px;}
            	.stc21{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
            	.stc22{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            	.stc23{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            	.stc24{fill:none;stroke:#FFFFFF;stroke-width:3.4345;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            	.stc25{opacity:0.7529;fill-rule:evenodd;clip-rule:evenodd;fill:#555555;}
            	.stc26{fill-rule:evenodd;clip-rule:evenodd;fill:#A0A0A1;}
            	.stc27{font-size:10.3034px;}
            	.stc28{font-size:11.162px;}
            	.stc29{opacity:0.75;fill:#777777;}
            	.stc30{fill:none;stroke:#000000;stroke-width:1.7172;stroke-miterlimit:10;}
            	.stc31{fill:none;stroke:#000000;stroke-width:1.7172;stroke-miterlimit:10;stroke-dasharray:21.0778,21.0778;}
            	.stc32{fill:none;stroke:#000000;stroke-width:1.7172;stroke-miterlimit:10;stroke-dasharray:21.0838,21.0838;}
            	.stc33{fill:none;stroke:#000000;stroke-width:1.7172;stroke-miterlimit:10;stroke-dasharray:20.8478,20.8478;}
            	.stc34{fill:none;stroke:#000000;stroke-width:1.7172;stroke-miterlimit:10;stroke-dasharray:20.7314,20.7314;}
            	.stc35{fill:none;stroke:#1C2044;stroke-width:5.1517;stroke-miterlimit:10;}
            	.stc36{font-size:14.7737px;}
            	.stc37{font-size:14.5976px;}
            	.stc38{font-size:36.0618px;}
            </style>
            <g id="MACHOTE" class="stc0">
            	<g class="stc1">
            		<g>
            			<g>
            				<g>
            					<path class="stc2" d="M2556.9,377.9c5.1,0.2,10.1,1.3,14.9,3.3l-1.6,3.8c-3.8-1.6-7.7-2.5-11.8-2.8L2556.9,377.9 M2556.5,377.6
            						l1.7,4.8c4.3,0.3,8.4,1.3,12.2,2.9l1.8-4.3C2567.4,379,2562.1,377.8,2556.5,377.6L2556.5,377.6z"/>
            				</g>
            				<path class="stc2" d="M2585.8,390.2l-3.3,3.3c-3.4-3.4-7.5-6.2-12.1-8.2l1.8-4.3C2577.3,383.2,2581.9,386.3,2585.8,390.2z"/>
            				<g>
            					<path class="stc2" d="M2585.8,390.6c3.9,4,7,8.6,9.1,13.7l-3.8,1.5c-1.9-4.6-4.7-8.8-8.2-12.4L2585.8,390.6 M2585.8,390.2
            						l-3.3,3.3c3.6,3.6,6.5,8,8.5,12.8l4.4-1.8C2593.1,399.1,2589.8,394.3,2585.8,390.2L2585.8,390.2z"/>
            				</g>
            				<path class="stc2" d="M2598.4,419.5l-4.8-1.7c-0.3-4-1.2-7.9-2.7-11.5l4.4-1.8C2597.1,409.2,2598.2,414.2,2598.4,419.5z"/>
            				<path class="stc2" d="M2528.2,393.5c-3.4,3.4-6.2,7.5-8.2,12.1l-4.3-1.8c2.2-5.1,5.3-9.7,9.2-13.6L2528.2,393.5z"/>
            				<g>
            					<path class="stc2" d="M2515.9,404.2l3.8,1.6c-1.6,3.7-2.5,7.7-2.8,11.8l-4.2,1.5C2512.8,413.9,2513.9,408.9,2515.9,404.2
            						 M2515.7,403.8c-2.1,4.8-3.3,10.1-3.4,15.7l4.8-1.7c0.3-4.3,1.3-8.4,3-12.2L2515.7,403.8L2515.7,403.8z"/>
            				</g>
            				<g>
            					<path class="stc2" d="M2539.1,381.1l1.5,3.8c-4.6,1.9-8.8,4.7-12.4,8.2l-2.9-2.9C2529.3,386.3,2533.9,383.2,2539.1,381.1
            						 M2539.2,380.7c-5.4,2.2-10.3,5.4-14.3,9.5l3.3,3.3c3.6-3.6,8-6.5,12.8-8.5L2539.2,380.7L2539.2,380.7z"/>
            				</g>
            				<path class="stc2" d="M2554.2,377.6l-1.7,4.8c-4,0.3-7.9,1.2-11.5,2.7l-1.8-4.4C2543.9,378.8,2548.9,377.7,2554.2,377.6z"/>
            				<g>
            					<path class="stc2" d="M2598.1,422.2c-0.2,5.1-1.3,10.1-3.3,14.9l-3.8-1.6c1.6-3.8,2.5-7.7,2.8-11.8L2598.1,422.2 M2598.4,421.8
            						l-4.8,1.7c-0.3,4.3-1.3,8.4-3,12.2l4.3,1.8C2597,432.7,2598.2,427.4,2598.4,421.8L2598.4,421.8z"/>
            				</g>
            				<path class="stc2" d="M2595,437.5c-2.2,5.1-5.3,9.7-9.2,13.6l-3.3-3.3c3.4-3.4,6.2-7.5,8.2-12.1L2595,437.5z"/>
            				<g>
            					<path class="stc2" d="M2582.5,448.2l2.9,2.9c-4,3.9-8.6,7-13.7,9.1l-1.5-3.8C2574.7,454.5,2578.9,451.7,2582.5,448.2
            						 M2582.5,447.8c-3.6,3.6-8,6.5-12.8,8.5l1.8,4.4c5.4-2.2,10.3-5.4,14.3-9.5L2582.5,447.8L2582.5,447.8z"/>
            				</g>
            				<path class="stc2" d="M2571.4,460.6c-4.6,1.9-9.7,3-14.9,3.1l1.7-4.8c4-0.3,7.9-1.2,11.5-2.7L2571.4,460.6z"/>
            				<g>
            					<path class="stc2" d="M2540.5,456.3c3.8,1.6,7.7,2.5,11.8,2.8l1.5,4.2c-5.1-0.2-10.1-1.3-14.9-3.3L2540.5,456.3 M2540.3,455.9
            						l-1.8,4.3c4.8,2.1,10.1,3.3,15.7,3.4l-1.7-4.8C2548.2,458.6,2544.1,457.6,2540.3,455.9L2540.3,455.9z"/>
            				</g>
            				<path class="stc2" d="M2540.3,455.9l-1.8,4.3c-5.1-2.2-9.7-5.3-13.6-9.2l3.3-3.3C2531.7,451.2,2535.8,454,2540.3,455.9z"/>
            				<g>
            					<path class="stc2" d="M2519.6,435.4c1.9,4.6,4.7,8.8,8.2,12.4l-2.9,2.9c-3.9-4-7-8.6-9.1-13.7L2519.6,435.4 M2519.8,435
            						l-4.3,1.8c2.2,5.4,5.4,10.3,9.5,14.3l3.3-3.3C2524.6,444.2,2521.7,439.8,2519.8,435L2519.8,435z"/>
            				</g>
            				<path class="stc2" d="M2519.8,435l-4.3,1.8c-1.9-4.6-3-9.7-3.1-14.9l4.8,1.7C2517.4,427.5,2518.3,431.4,2519.8,435z"/>
            			</g>
            			<g>
            				<g>
            					<path class="stc2" d="M2555.6,422.2l5.2,12.9l1.9,4.8l1,2.4l-5.8,16.5l-1.7,4.8l-0.6,1.6V422.2 M2555.3,420.6v46.3l1.2-3.3
            						l1.7-4.8l5.9-16.6l-1-2.5l-1.9-4.8L2555.3,420.6L2555.3,420.6z"/>
            				</g>
            				<g>
            					<polygon class="stc2" points="2555.3,420.6 2555.3,420.6 2543.2,408.5 2543.2,408.5 2543.2,408.5 2529.9,395.2 2529.9,395.2 
            						2545.9,400.9 2547.6,401.5 2549.6,406.3 					"/>
            					<polygon class="stc2" points="2555.3,420.6 2555.3,420.6 2509.1,420.6 2509,420.6 2512.3,419.5 2517.1,417.8 2534.3,411.7 
            						2534.3,411.7 2536,412.4 2541.1,414.6 2541.1,414.6 					"/>
            					<g>
            						<path class="stc2" d="M2554.4,422l-5.4,12.8l-2.1,4.9l-1.1,0.4l-14.7,5.2l12.3-12.3L2554.4,422 M2555.3,420.6l-12.1,12.1
            							l-13.3,13.3l16-5.7l1.2-0.4l2.2-5.1L2555.3,420.6L2555.3,420.6z"/>
            					</g>
            					<g>
            						<polygon class="stc2" points="2564.3,399.6 2563.6,401.3 2561.4,406.4 2555.3,420.6 2555.3,420.6 2555.3,374.4 2556.5,377.6 
            							2558.2,382.4 						"/>
            					</g>
            					<g>
            						<path class="stc2" d="M2577,412.2l16.5,5.8l4.6,1.6v0l0.2,0.1l1.6,0.6h-42.9l12.9-5.2l0.2-0.1l4.6-1.9L2577,412.2 M2577,411.9
            							l-2.5,1l-4.8,1.9v0l-14.4,5.8v0h46.3l0,0l-3.3-1.2v0l-4.8-1.7L2577,411.9L2577,411.9z"/>
            					</g>
            					<polygon class="stc2" points="2580.7,446.1 2564.7,440.4 2563,439.8 2561.1,435 2555.3,420.6 2567.4,432.8 2567.5,432.8 					
            						"/>
            					<polygon class="stc2" points="2555.3,420.6 2555.3,466.9 2554.2,463.7 2552.5,458.9 2546.4,441.7 2546.4,441.7 2547.1,440 
            						2549.3,434.9 					"/>
            					<polygon class="stc2" points="2555.3,420.6 2543.2,432.8 2543.2,432.8 2543.2,432.8 2529.9,446.1 2529.9,446.1 2535.6,430.1 
            						2536.2,428.4 2541,426.4 2555.3,420.6 					"/>
            					<g>
            						<path class="stc2" d="M2553.8,421l-12.9,5.2l-4.8,1.9l-2.4,1l-16.5-5.8l-4.8-1.7l-1.6-0.6H2553.8 M2555.3,420.6h-46.3l3.2,1.2
            							l4.8,1.7l16.6,5.9l2.5-1l4.8-1.9L2555.3,420.6L2555.3,420.6z"/>
            					</g>
            					<g>
            						<path class="stc2" d="M2555,376.1v42.9l-5.2-12.9l-1.9-4.8l-1-2.4l5.8-16.5l1.7-4.8L2555,376.1 M2555.3,374.4l-1.2,3.3
            							l-1.7,4.8l-5.9,16.6l1,2.5l1.9,4.8l5.8,14.4V374.4L2555.3,374.4z"/>
            					</g>
            					<g>
            						<path class="stc2" d="M2579.6,396l-12.3,12.3l-0.2,0v0.2l-10.9,10.9l5.4-12.8l2.1-4.9l1.1-0.4L2579.6,396 M2580.8,395.2
            							l-16,5.7l-1.2,0.4l-2.2,5.1l-6.1,14.3l12.1-12.1v0h0L2580.8,395.2L2580.8,395.2L2580.8,395.2z"/>
            					</g>
            					<polygon class="stc2" points="2580.8,395.2 2575.1,411.2 2574.5,412.9 2569.7,414.9 2569.7,414.9 2555.3,420.6 2567.5,408.5 
            											"/>
            					<polygon class="stc2" points="2601.6,420.6 2598.4,421.8 2593.6,423.5 2576.4,429.6 2574.7,428.9 2569.6,426.7 2555.3,420.6 
            											"/>
            					<g>
            						<path class="stc2" d="M2556.7,421.5l12.8,5.4l4.9,2.1l0.4,1.1l5.2,14.7l-12.3-12.3l0-0.2h-0.2L2556.7,421.5 M2555.3,420.6
            							L2555.3,420.6l12.1,12.1h0v0l13.3,13.3l0,0l-5.7-16l-0.4-1.2l-5.1-2.2L2555.3,420.6L2555.3,420.6z"/>
            					</g>
            					<g>
            						<path class="stc2" d="M2530.7,396.4l23.3,23.3l-12.6-5.4v0l-0.2-0.1l-4.9-2.1l-0.4-1.1L2530.7,396.4 M2529.9,395.2l5.7,16
            							l0.4,1.2l5.1,2.2v0l14.3,6.1L2529.9,395.2L2529.9,395.2z"/>
            					</g>
            				</g>
            			</g>
            		</g>
            		<g>
            			<path class="stc2" d="M2551.7,371.9v-8.4l6.3,6.6v-6.2h0.9v8.4l-6.3-6.6v6.2H2551.7z"/>
            		</g>
            		<g>
            			<path class="stc2" d="M2555.3,470.3c-0.1-0.2-0.3-0.5-0.5-0.6c-0.2-0.1-0.4-0.3-0.9-0.3c-0.8,0-1.3,0.5-1.3,1.2
            				c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.4,0.8,0.5l0.8,0.3c0.5,0.2,0.9,0.4,1.2,0.8c0.4,0.4,0.6,0.9,0.6,1.5c0,1.5-1.1,2.5-2.5,2.5
            				c-0.5,0-1.2-0.1-1.7-0.6c-0.4-0.4-0.6-0.9-0.7-1.4l0.9-0.2c0.1,0.4,0.3,0.8,0.5,1c0.3,0.3,0.7,0.4,1.2,0.4c1.1,0,1.6-0.8,1.6-1.6
            				c0-0.4-0.1-0.7-0.4-0.9c-0.2-0.2-0.5-0.4-1-0.6l-0.7-0.3c-0.3-0.1-0.7-0.3-1.1-0.7c-0.3-0.3-0.6-0.7-0.6-1.3c0-1.2,1-2.1,2.2-2.1
            				c0.5,0,0.9,0.1,1.3,0.4c0.3,0.2,0.6,0.5,0.8,0.9L2555.3,470.3z"/>
            		</g>
            		<g>
            			<path class="stc2" d="M2608.1,416.4h-3.3v2.4h3.2v0.8h-3.2v3.1h3.3v0.8h-4.2v-8h4.2V416.4z"/>
            		</g>
            		<g>
            			<path class="stc2" d="M2499.1,419.6c0-2.4,1.9-4.2,4.2-4.2s4.2,1.8,4.2,4.2c0,2.4-1.9,4.2-4.2,4.2
            				C2500.9,423.7,2499.1,421.9,2499.1,419.6z M2500,419.6c0,1.8,1.5,3.3,3.3,3.3c1.8,0,3.3-1.5,3.3-3.3c0-1.8-1.5-3.3-3.3-3.3
            				C2501.4,416.2,2500,417.7,2500,419.6z"/>
            		</g>
            	</g>
            	<rect x="1428.2" y="24.3" class="stc3" width="1218.9" height="51.7"/>
            	<rect x="1428.2" y="766.4" class="stc3" width="1218.9" height="51.6"/>
            	<path class="stc4" d="M2339.9,800.8l-3.2-7.3c-0.2-0.6-0.4-1.1-0.6-1.5c-0.2-0.4-0.3-0.9-0.4-1.3c-0.2,0.6-0.4,1.2-0.6,1.6
            		c-0.2,0.5-0.3,0.8-0.4,1l-3.3,7.4l-7.2-14.8h3.4l3.1,6.7c0.1,0.3,0.3,0.7,0.4,1.2c0.1,0.5,0.2,1,0.3,1.6c0-0.4,0.1-0.7,0.2-1.1
            		c0.1-0.4,0.3-0.9,0.5-1.4l3.4-7.6h0.3l3.5,7.6c0.2,0.5,0.4,0.9,0.5,1.3c0.1,0.4,0.2,0.8,0.2,1.2c0.1-0.5,0.2-1,0.3-1.5
            		c0.1-0.5,0.3-0.9,0.5-1.3l3.1-6.8h3.4L2339.9,800.8z"/>
            	<path class="stc4" d="M2362.6,800.8l-3.2-7.3c-0.2-0.6-0.4-1.1-0.6-1.5c-0.2-0.4-0.3-0.9-0.4-1.3c-0.2,0.6-0.4,1.2-0.6,1.6
            		c-0.2,0.5-0.3,0.8-0.4,1l-3.3,7.4l-7.2-14.8h3.4l3.1,6.7c0.1,0.3,0.3,0.7,0.4,1.2c0.1,0.5,0.2,1,0.3,1.6c0-0.4,0.1-0.7,0.2-1.1
            		c0.1-0.4,0.3-0.9,0.5-1.4l3.4-7.6h0.3l3.5,7.6c0.2,0.5,0.4,0.9,0.5,1.3c0.1,0.4,0.2,0.8,0.2,1.2c0.1-0.5,0.2-1,0.3-1.5
            		c0.1-0.5,0.3-0.9,0.5-1.3l3.1-6.8h3.4L2362.6,800.8z"/>
            	<path class="stc4" d="M2385.3,800.8l-3.2-7.3c-0.2-0.6-0.4-1.1-0.6-1.5c-0.2-0.4-0.3-0.9-0.4-1.3c-0.2,0.6-0.4,1.2-0.6,1.6
            		c-0.2,0.5-0.3,0.8-0.4,1l-3.3,7.4l-7.2-14.8h3.4l3.1,6.7c0.1,0.3,0.3,0.7,0.4,1.2c0.1,0.5,0.2,1,0.3,1.6c0-0.4,0.1-0.7,0.2-1.1
            		c0.1-0.4,0.3-0.9,0.5-1.4l3.4-7.6h0.3l3.5,7.6c0.2,0.5,0.4,0.9,0.5,1.3c0.1,0.4,0.2,0.8,0.2,1.2c0.1-0.5,0.2-1,0.3-1.5
            		c0.1-0.5,0.3-0.9,0.5-1.3l3.1-6.8h3.4L2385.3,800.8z"/>
            	<path class="stc4" d="M2414.6,799.1c0,2.7-0.5,4.7-1.6,5.8c-1.1,1.1-2.9,1.7-5.5,1.7c-1.9,0-3.5-0.4-4.6-1.2
            		c-1.2-0.8-1.7-1.9-1.8-3.2l3.4,0c0,0.6,0.3,1.1,0.8,1.4c0.5,0.3,1.2,0.5,2.2,0.5c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3l0-1.9
            		c-0.6,0.8-1.2,1.4-2,1.8c-0.8,0.4-1.6,0.6-2.6,0.6c-2,0-3.5-0.7-4.7-2c-1.1-1.4-1.7-3.2-1.7-5.6c0-2.2,0.6-4,1.7-5.4
            		c1.2-1.4,2.7-2.1,4.5-2.1c1.1,0,2.1,0.2,2.9,0.7c0.8,0.5,1.4,1.2,1.8,2.1v-2.3h3.2V799.1z M2411.5,792.9c0-1.4-0.3-2.6-1-3.4
            		c-0.7-0.8-1.6-1.2-2.8-1.2c-1.2,0-2.2,0.4-2.9,1.2c-0.7,0.8-1,2-1,3.5c0,1.5,0.3,2.6,1,3.4c0.7,0.8,1.6,1.2,2.8,1.2
            		c1.2,0,2.1-0.4,2.8-1.3C2411.2,795.5,2411.5,794.3,2411.5,792.9"/>
            	<path class="stc4" d="M2422.3,788.2c0.3-0.9,0.8-1.6,1.4-2.1c0.6-0.4,1.3-0.7,2.1-0.7c0.5,0,0.9,0.1,1.3,0.2
            		c0.4,0.1,0.9,0.3,1.3,0.5l-1.2,2.7c-0.3-0.2-0.6-0.3-0.9-0.4c-0.3-0.1-0.7-0.1-1.1-0.1c-1.1,0-1.8,0.4-2.3,1.3
            		c-0.5,0.9-0.7,2.3-0.7,4.3v6.1h-3.2v-14h3.2V788.2z"/>
            	<path class="stc4" d="M2433.3,785.9v7.9c0,1.4,0.3,2.3,0.8,2.9c0.6,0.6,1.5,0.9,2.7,0.9c1.3,0,2.2-0.3,2.7-0.9
            		c0.6-0.6,0.8-1.6,0.8-2.9v-7.9h3.2v6.9c0,2.7-0.5,4.6-1.6,5.8c-1.1,1.2-2.8,1.8-5.1,1.8c-2.4,0-4.1-0.6-5.2-1.8
            		c-1.1-1.2-1.6-3.2-1.6-5.8v-6.9H2433.3z"/>
            	<path class="stc4" d="M2447.9,806.5v-20.6h3.2v2.3c0.4-0.9,1-1.6,1.8-2.1c0.8-0.5,1.8-0.7,2.9-0.7c1.9,0,3.4,0.7,4.5,2.1
            		c1.2,1.4,1.7,3.2,1.7,5.4c0,2.4-0.6,4.2-1.7,5.6c-1.1,1.4-2.7,2-4.7,2c-1,0-1.9-0.2-2.6-0.6c-0.8-0.4-1.4-1-2-1.8v8.4H2447.9z
            		 M2451.1,792.9c0,1.4,0.4,2.6,1.1,3.5c0.7,0.9,1.7,1.3,2.9,1.3c1.2,0,2.1-0.4,2.8-1.2c0.7-0.8,1-2,1-3.4c0-1.5-0.3-2.6-1-3.5
            		c-0.7-0.8-1.6-1.2-2.9-1.2c-1.2,0-2.2,0.4-2.8,1.2C2451.4,790.3,2451.1,791.4,2451.1,792.9"/>
            	<path class="stc4" d="M2464.5,792.9c0-1,0.2-2,0.6-2.9c0.4-0.9,0.9-1.7,1.7-2.4c0.7-0.7,1.5-1.2,2.5-1.6c0.9-0.4,1.9-0.6,2.9-0.6
            		c1.1,0,2,0.2,3,0.6c0.9,0.4,1.8,0.9,2.5,1.7c0.7,0.7,1.3,1.5,1.7,2.4c0.4,0.9,0.6,1.9,0.6,2.8c0,1-0.2,2-0.6,2.9
            		c-0.4,0.9-0.9,1.7-1.7,2.4c-0.8,0.7-1.6,1.3-2.5,1.7c-0.9,0.4-1.9,0.6-3,0.6c-1,0-2-0.2-2.9-0.6c-0.9-0.4-1.8-0.9-2.5-1.6
            		c-0.7-0.7-1.3-1.5-1.7-2.5C2464.7,794.9,2464.5,794,2464.5,792.9 M2476.5,793c0-1.3-0.4-2.4-1.3-3.3c-0.8-0.9-1.9-1.3-3.1-1.3
            		c-1.2,0-2.2,0.4-3.1,1.3c-0.8,0.9-1.3,2-1.3,3.3s0.4,2.4,1.3,3.3c0.8,0.9,1.9,1.3,3.1,1.3c1.2,0,2.2-0.5,3.1-1.3
            		C2476.1,795.4,2476.5,794.3,2476.5,793"/>
            	<path class="stc4" d="M2493.8,789.9c-0.5-0.5-1.1-1-1.7-1.2c-0.7-0.3-1.4-0.4-2.1-0.4c-1.3,0-2.4,0.4-3.1,1.3
            		c-0.8,0.8-1.2,2-1.2,3.4c0,1.5,0.4,2.6,1.2,3.4c0.8,0.8,1.9,1.2,3.3,1.2c0.8,0,1.5-0.1,2.1-0.4c0.6-0.3,1.1-0.7,1.6-1.3v3.7
            		c-0.6,0.3-1.2,0.6-1.9,0.8c-0.7,0.2-1.4,0.3-2.1,0.3c-2.2,0-4-0.7-5.4-2.1c-1.4-1.4-2.1-3.2-2.1-5.4c0-2.3,0.7-4.1,2.1-5.5
            		c1.4-1.4,3.3-2.1,5.6-2.1c0.7,0,1.4,0.1,2,0.2c0.6,0.1,1.2,0.4,1.7,0.7V789.9z"/>
            	<path class="stc4" d="M2507.5,789.9c-0.5-0.5-1.1-1-1.7-1.2c-0.7-0.3-1.4-0.4-2.1-0.4c-1.3,0-2.4,0.4-3.1,1.3
            		c-0.8,0.8-1.2,2-1.2,3.4c0,1.5,0.4,2.6,1.2,3.4c0.8,0.8,1.9,1.2,3.3,1.2c0.8,0,1.5-0.1,2.1-0.4c0.6-0.3,1.1-0.7,1.6-1.3v3.7
            		c-0.6,0.3-1.2,0.6-1.9,0.8c-0.7,0.2-1.4,0.3-2.1,0.3c-2.2,0-4-0.7-5.4-2.1c-1.4-1.4-2.1-3.2-2.1-5.4c0-2.3,0.7-4.1,2.1-5.5
            		c1.4-1.4,3.3-2.1,5.6-2.1c0.7,0,1.4,0.1,2,0.2c0.6,0.1,1.2,0.4,1.7,0.7V789.9z"/>
            	<path class="stc4" d="M2510.5,779.9c0-0.5,0.2-1,0.6-1.4c0.4-0.4,0.9-0.6,1.4-0.6c0.6,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.9,0.6,1.4
            		c0,0.6-0.2,1-0.6,1.4c-0.4,0.4-0.9,0.6-1.4,0.6c-0.6,0-1-0.2-1.4-0.6C2510.7,780.9,2510.5,780.4,2510.5,779.9 M2510.9,785.9h3.2v14
            		h-3.2V785.9z"/>
            	<path class="stc4" d="M2521.9,799.9h-3.2v-14h3v2.3c0.6-1,1.4-1.7,2.2-2.1c0.8-0.4,1.8-0.7,2.9-0.7c1.1,0,2,0.2,2.7,0.7
            		c0.7,0.5,1.3,1.2,1.6,2.1c0.7-1,1.5-1.7,2.4-2.1c0.8-0.4,1.8-0.7,2.8-0.7c0.9,0,1.7,0.2,2.4,0.5c0.7,0.3,1.2,0.8,1.6,1.5
            		c0.2,0.3,0.3,0.7,0.4,1.1c0.1,0.4,0.1,1,0.1,1.8v1.1v8.5h-3.2v-7.2c0-1.9-0.2-3.1-0.6-3.7c-0.4-0.6-1.1-0.9-2.1-0.9
            		c-1.3,0-2.2,0.4-2.7,1.2c-0.5,0.8-0.8,2.2-0.8,4.2v6.4h-3.2v-7.2c0-1.7-0.2-2.9-0.6-3.6c-0.4-0.7-1.1-1-2.2-1
            		c-0.6,0-1.2,0.1-1.7,0.4c-0.5,0.3-0.9,0.7-1.2,1.2c-0.2,0.3-0.3,0.7-0.4,1.2c-0.1,0.5-0.1,1.3-0.1,2.6V799.9z"/>
            	<path class="stc4" d="M2558.3,799.9h-3.2v-1.8c-0.6,0.8-1.2,1.4-2,1.8c-0.8,0.4-1.6,0.6-2.6,0.6c-2,0-3.5-0.7-4.7-2
            		c-1.1-1.4-1.7-3.2-1.7-5.6c0-2.2,0.6-4,1.7-5.4c1.2-1.4,2.7-2.1,4.5-2.1c1.1,0,2.1,0.2,2.9,0.7c0.8,0.5,1.4,1.2,1.8,2.1v-2.3h3.2
            		V799.9z M2555.2,792.9c0-1.4-0.3-2.6-1-3.4c-0.7-0.8-1.6-1.2-2.8-1.2c-1.2,0-2.2,0.4-2.9,1.2c-0.7,0.8-1,2-1,3.5
            		c0,1.5,0.3,2.6,1,3.4c0.7,0.8,1.6,1.2,2.8,1.2c1.2,0,2.1-0.4,2.8-1.3C2554.8,795.5,2555.2,794.3,2555.2,792.9"/>
            	<path class="stc4" d="M2582.3,789.9c-0.5-0.5-1.1-1-1.7-1.2c-0.7-0.3-1.4-0.4-2.1-0.4c-1.3,0-2.4,0.4-3.1,1.3
            		c-0.8,0.8-1.2,2-1.2,3.4c0,1.5,0.4,2.6,1.2,3.4c0.8,0.8,1.9,1.2,3.3,1.2c0.8,0,1.5-0.1,2.1-0.4c0.6-0.3,1.1-0.7,1.6-1.3v3.7
            		c-0.6,0.3-1.2,0.6-1.9,0.8c-0.7,0.2-1.4,0.3-2.1,0.3c-2.2,0-4-0.7-5.4-2.1c-1.4-1.4-2.1-3.2-2.1-5.4c0-2.3,0.7-4.1,2.1-5.5
            		c1.4-1.4,3.3-2.1,5.6-2.1c0.7,0,1.4,0.1,2,0.2c0.6,0.1,1.2,0.4,1.7,0.7V789.9z"/>
            	<path class="stc4" d="M2584.5,792.9c0-1,0.2-2,0.6-2.9c0.4-0.9,0.9-1.7,1.7-2.4c0.7-0.7,1.5-1.2,2.5-1.6c0.9-0.4,1.9-0.6,2.9-0.6
            		c1.1,0,2,0.2,3,0.6c0.9,0.4,1.8,0.9,2.5,1.7c0.7,0.7,1.3,1.5,1.7,2.4c0.4,0.9,0.6,1.9,0.6,2.8c0,1-0.2,2-0.6,2.9
            		c-0.4,0.9-0.9,1.7-1.7,2.4c-0.8,0.7-1.6,1.3-2.6,1.7c-0.9,0.4-1.9,0.6-3,0.6c-1,0-2-0.2-2.9-0.6c-0.9-0.4-1.8-0.9-2.5-1.6
            		c-0.7-0.7-1.3-1.5-1.7-2.5C2584.7,794.9,2584.5,794,2584.5,792.9 M2596.6,793c0-1.3-0.4-2.4-1.3-3.3c-0.8-0.9-1.9-1.3-3.1-1.3
            		c-1.2,0-2.2,0.4-3.1,1.3c-0.8,0.9-1.3,2-1.3,3.3s0.4,2.4,1.3,3.3c0.8,0.9,1.9,1.3,3.1,1.3c1.2,0,2.2-0.5,3.1-1.3
            		C2596.1,795.4,2596.6,794.3,2596.6,793"/>
            	<path class="stc4" d="M2606.5,799.9h-3.2v-14h3v2.3c0.6-1,1.4-1.7,2.2-2.1c0.8-0.4,1.8-0.7,2.9-0.7c1.1,0,2,0.2,2.7,0.7
            		c0.7,0.5,1.3,1.2,1.6,2.1c0.7-1,1.5-1.7,2.4-2.1c0.8-0.4,1.8-0.7,2.8-0.7c0.9,0,1.7,0.2,2.4,0.5c0.7,0.3,1.2,0.8,1.6,1.5
            		c0.2,0.3,0.3,0.7,0.4,1.1c0.1,0.4,0.1,1,0.1,1.8v1.1v8.5h-3.2v-7.2c0-1.9-0.2-3.1-0.6-3.7c-0.4-0.6-1.1-0.9-2.1-0.9
            		c-1.3,0-2.2,0.4-2.7,1.2c-0.5,0.8-0.8,2.2-0.8,4.2v6.4h-3.2v-7.2c0-1.7-0.2-2.9-0.6-3.6c-0.4-0.7-1.1-1-2.2-1
            		c-0.6,0-1.2,0.1-1.7,0.4c-0.5,0.3-0.9,0.7-1.2,1.2c-0.2,0.3-0.3,0.7-0.4,1.2c-0.1,0.5-0.1,1.3-0.1,2.6V799.9z"/>
            	<path class="stc5" d="M2315,793.2c-0.2-6.9-5.8-12.4-12.8-12.4c-6.9,0-12.5,5.4-12.8,12.2c0,0.2,0,0.4,0,0.6c0,2.4,0.7,4.7,1.8,6.6
            		l-2.3,6.8l7.1-2.3c1.8,1,4,1.6,6.2,1.6c7.1,0,12.8-5.7,12.8-12.7C2315,793.4,2315,793.3,2315,793.2 M2302.2,804.2
            		c-2.2,0-4.2-0.6-5.9-1.8l-4.1,1.3l1.3-4c-1.3-1.8-2.1-3.9-2.1-6.3c0-0.3,0-0.7,0.1-1c0.5-5.4,5.1-9.7,10.7-9.7
            		c5.7,0,10.3,4.4,10.8,9.9c0,0.3,0,0.6,0,0.8C2313,799.4,2308.1,804.2,2302.2,804.2"/>
            	<path class="stc5" d="M2308.1,796.1c-0.3-0.2-1.9-0.9-2.1-1c-0.3-0.1-0.5-0.2-0.7,0.2c-0.2,0.3-0.8,1-1,1.2
            		c-0.2,0.2-0.4,0.2-0.7,0.1c-0.3-0.2-1.3-0.5-2.5-1.5c-0.9-0.8-1.6-1.8-1.7-2.2c-0.2-0.3,0-0.5,0.1-0.6c0.1-0.1,0.3-0.4,0.5-0.5
            		c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.4c0.1-0.2,0.1-0.4,0-0.5c-0.1-0.2-0.7-1.7-1-2.3c-0.3-0.6-0.5-0.5-0.7-0.5
            		c-0.2,0-0.4,0-0.6,0s-0.6,0.1-0.8,0.4c-0.3,0.3-1.1,1.1-1.1,2.6c0,0.4,0.1,0.7,0.2,1.1c0.3,1.1,1,2,1.1,2.2
            		c0.2,0.2,2.2,3.5,5.4,4.7c3.2,1.2,3.2,0.8,3.8,0.8c0.6,0,1.9-0.8,2.1-1.5c0.3-0.7,0.3-1.4,0.2-1.5
            		C2308.6,796.3,2308.4,796.2,2308.1,796.1"/>
            	<path class="stc4" d="M2219.3,803.9c2.5,1.6,5.4,2.5,8.6,2.5c10.4,0,16.3-8.8,16-16.7c1.1-0.8,2-1.8,2.8-2.9c-1,0.4-2.1,0.7-3.2,0.9
            		c1.2-0.7,2-1.8,2.5-3.1c-1.1,0.6-2.3,1.1-3.6,1.4c-1-1.1-2.5-1.8-4.1-1.8c-3.6,0-6.3,3.4-5.5,6.9c-4.7-0.2-8.8-2.5-11.6-5.9
            		c-1.5,2.5-0.8,5.8,1.7,7.5c-0.9,0-1.8-0.3-2.5-0.7c-0.1,2.6,1.8,5,4.5,5.6c-0.8,0.2-1.7,0.3-2.5,0.1c0.7,2.2,2.8,3.9,5.2,3.9
            		C2225.2,803.4,2222.2,804.2,2219.3,803.9"/>
            	<path class="stc4" d="M2161.3,806.4h6.3v-15.7h4.4l0.5-5.2h-4.8v-3c0-1.2,0.2-1.7,1.4-1.7h3.4v-5.4h-4.3c-4.7,0-6.8,2-6.8,6v4.2
            		h-3.3v5.3h3.3V806.4z"/>
            	<path class="stc4" d="M2195.2,780.8c3.8,0,4.2,0,5.7,0.1c1.4,0.1,2.1,0.3,2.6,0.5c0.7,0.3,1.1,0.6,1.6,1.1c0.5,0.5,0.8,1,1.1,1.6
            		c0.2,0.5,0.4,1.2,0.5,2.6c0.1,1.5,0.1,1.9,0.1,5.7c0,3.8,0,4.2-0.1,5.7c-0.1,1.4-0.3,2.1-0.5,2.6c-0.3,0.7-0.6,1.1-1.1,1.6
            		c-0.5,0.5-1,0.8-1.6,1.1c-0.5,0.2-1.2,0.4-2.6,0.5c-1.5,0.1-1.9,0.1-5.7,0.1c-3.8,0-4.2,0-5.7-0.1c-1.4-0.1-2.1-0.3-2.6-0.5
            		c-0.7-0.3-1.1-0.6-1.6-1.1c-0.5-0.5-0.8-1-1.1-1.6c-0.2-0.5-0.4-1.2-0.5-2.6c-0.1-1.5-0.1-1.9-0.1-5.7c0-3.8,0-4.2,0.1-5.7
            		c0.1-1.4,0.3-2.1,0.5-2.6c0.3-0.7,0.6-1.1,1.1-1.6s1-0.8,1.6-1.1c0.5-0.2,1.2-0.4,2.6-0.5C2191,780.8,2191.4,780.8,2195.2,780.8
            		 M2195.2,778.2c-3.8,0-4.3,0-5.8,0.1c-1.5,0.1-2.5,0.3-3.4,0.7c-0.9,0.4-1.7,0.8-2.5,1.6c-0.8,0.8-1.3,1.6-1.6,2.5
            		c-0.3,0.9-0.6,1.9-0.7,3.4c-0.1,1.5-0.1,2-0.1,5.8c0,3.8,0,4.3,0.1,5.8c0.1,1.5,0.3,2.5,0.7,3.4c0.4,0.9,0.8,1.7,1.6,2.5
            		c0.8,0.8,1.6,1.3,2.5,1.6c0.9,0.3,1.9,0.6,3.4,0.7c1.5,0.1,2,0.1,5.8,0.1c3.8,0,4.3,0,5.8-0.1c1.5-0.1,2.5-0.3,3.4-0.7
            		c0.9-0.4,1.7-0.8,2.5-1.6s1.3-1.6,1.6-2.5c0.3-0.9,0.6-1.9,0.7-3.4c0.1-1.5,0.1-2,0.1-5.8c0-3.8,0-4.3-0.1-5.8
            		c-0.1-1.5-0.3-2.5-0.7-3.4c-0.4-0.9-0.8-1.7-1.6-2.5c-0.8-0.8-1.6-1.3-2.5-1.6c-0.9-0.3-1.9-0.6-3.4-0.7
            		C2199.5,778.3,2199,778.2,2195.2,778.2"/>
            	<path class="stc4" d="M2195.2,785.1c-4,0-7.2,3.2-7.2,7.2c0,4,3.2,7.2,7.2,7.2c4,0,7.2-3.2,7.2-7.2
            		C2202.4,788.3,2199.2,785.1,2195.2,785.1 M2195.2,797c-2.6,0-4.7-2.1-4.7-4.7c0-2.6,2.1-4.7,4.7-4.7c2.6,0,4.7,2.1,4.7,4.7
            		C2199.9,794.9,2197.8,797,2195.2,797"/>
            	<path class="stc4" d="M2204.4,784.8c0,0.9-0.8,1.7-1.7,1.7c-0.9,0-1.7-0.8-1.7-1.7c0-0.9,0.8-1.7,1.7-1.7
            		C2203.6,783.1,2204.4,783.9,2204.4,784.8"/>
            	<rect x="2255.5" y="789.2" class="stc4" width="5.3" height="17.2"/>
            	<path class="stc4" d="M2258.2,787c1.7,0,3.1-1.4,3.1-3.2c0-1.8-1.4-3.2-3.1-3.2c-1.7,0-3.1,1.4-3.1,3.2
            		C2255,785.6,2256.4,787,2258.2,787"/>
            	<path class="stc4" d="M2269.4,797.4c0-2.4,1.1-3.9,3.2-3.9c2,0,2.9,1.4,2.9,3.9v9h5.3v-10.9c0-4.6-2.6-6.8-6.2-6.8
            		c-3.6,0-5.2,2.8-5.2,2.8v-2.3h-5.1v17.2h5.1V797.4z"/>
            	<path class="stc4" d="M2392.8,798.3c0-0.5,0.2-1,0.6-1.4c0.4-0.4,0.8-0.6,1.4-0.6c0.5,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.8,0.6,1.4
            		c0,0.5-0.2,1-0.6,1.4c-0.4,0.4-0.8,0.6-1.4,0.6c-0.5,0-1-0.2-1.4-0.6C2392.9,799.3,2392.8,798.8,2392.8,798.3"/>
            	<path class="stc4" d="M2563.1,798.3c0-0.5,0.2-1,0.6-1.4c0.4-0.4,0.8-0.6,1.4-0.6c0.5,0,1,0.2,1.4,0.6c0.4,0.4,0.6,0.8,0.6,1.4
            		c0,0.5-0.2,1-0.6,1.4c-0.4,0.4-0.8,0.6-1.4,0.6c-0.5,0-1-0.2-1.4-0.6C2563.3,799.3,2563.1,798.8,2563.1,798.3"/>
            	<g id="Capa_1_1_" class="stc1">
            		<g>
            			<g>
            				<g>
            					<g>
            						<path class="stc6" d="M2567.6,711.6l3.8-10h2.4l3.9,10h-2.4l-0.8-2.1h-3.9l-0.7,2.1H2567.6z M2574,707.8l-1.1-3.2
            							c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.2-0.1-0.5-0.2-0.9c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.1,0.4-0.1,0.5l-1.1,3.2L2574,707.8
            							L2574,707.8z"/>
            					</g>
            					<g>
            						<path class="stc6" d="M2578.7,711.6v-10h2.1v8.2h3.4v1.8H2578.7z"/>
            					</g>
            					<g>
            						<path class="stc6" d="M2585.8,711.6v-10h2.1v10H2585.8z"/>
            					</g>
            					<g>
            						<path class="stc6" d="M2588.6,711.6l3.8-10h2.4l3.9,10h-2.4l-0.8-2.1h-3.9l-0.7,2.1H2588.6z M2595,707.8l-1.1-3.2
            							c0-0.1-0.1-0.3-0.1-0.5c-0.1-0.2-0.1-0.5-0.2-0.9c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.1,0.4-0.1,0.5l-1.1,3.2L2595,707.8
            							L2595,707.8z"/>
            					</g>
            					<g>
            						<path class="stc6" d="M2599.5,711.6v-10h2.7c1.1,0,1.9,0.1,2.5,0.2c0.6,0.1,1.2,0.4,1.6,0.8c0.6,0.5,1.1,1,1.4,1.7
            							s0.5,1.5,0.5,2.3c0,0.9-0.2,1.7-0.5,2.4c-0.3,0.7-0.8,1.2-1.4,1.7c-0.5,0.3-1,0.6-1.5,0.7c-0.6,0.1-1.4,0.2-2.4,0.2h-0.8
            							H2599.5z M2601.6,709.8h1.2c1.1,0,1.9-0.3,2.4-0.8c0.5-0.5,0.8-1.3,0.8-2.4c0-1.1-0.3-1.9-0.8-2.4c-0.5-0.5-1.3-0.8-2.4-0.8
            							h-1.2V709.8z"/>
            					</g>
            					<g>
            						<path class="stc6" d="M2620.2,706.6c0,0.7-0.1,1.4-0.4,2c-0.3,0.6-0.6,1.2-1.1,1.7c-0.5,0.5-1.1,0.9-1.8,1.1
            							c-0.7,0.3-1.3,0.4-2,0.4c-0.6,0-1.2-0.1-1.8-0.3c-0.6-0.2-1.1-0.5-1.6-0.9c-0.6-0.5-1.1-1.1-1.4-1.8s-0.5-1.4-0.5-2.2
            							c0-0.7,0.1-1.4,0.4-2c0.3-0.6,0.6-1.2,1.2-1.7c0.5-0.5,1.1-0.9,1.7-1.1c0.7-0.3,1.3-0.4,2-0.4c0.7,0,1.4,0.1,2,0.4
            							c0.7,0.3,1.2,0.6,1.7,1.1c0.5,0.5,0.9,1.1,1.2,1.7C2620.1,705.2,2620.2,705.9,2620.2,706.6z M2614.9,710c0.9,0,1.6-0.3,2.2-1
            							c0.6-0.6,0.9-1.4,0.9-2.4c0-0.9-0.3-1.7-0.9-2.4s-1.3-1-2.2-1c-0.9,0-1.7,0.3-2.2,1s-0.9,1.4-0.9,2.4c0,1,0.3,1.8,0.9,2.4
            							C2613.2,709.7,2614,710,2614.9,710z"/>
            					</g>
            				</g>
            			</g>
            			<g>
            				<g>
            					<path class="stc6" d="M2598.8,738.8c-0.2-0.1-0.6-0.1-1.2,0l-0.2,0l0.3,1.9l0.2,0c0.6-0.1,1-0.2,1.2-0.4
            						c0.2-0.2,0.2-0.4,0.2-0.7C2599.2,739.2,2599.1,738.9,2598.8,738.8z"/>
            				</g>
            				<g>
            					<path class="stc6" d="M2606.8,735.9c-0.2-0.1-0.6,0-0.9,0.2l-0.2,0.1l1,1.9l0.2-0.1c0.4-0.2,0.6-0.4,0.7-0.7s0-0.5-0.1-0.9
            						C2607.3,736.2,2607.1,736,2606.8,735.9z"/>
            				</g>
            				<g>
            					<path class="stc6" d="M2613.5,732.4l1,1.9l1.2-1.2l-1.9-0.9c-0.1,0-0.1-0.1-0.3-0.2c-0.1-0.1-0.3-0.2-0.4-0.3
            						c0.1,0.2,0.2,0.3,0.3,0.5C2613.4,732.2,2613.5,732.3,2613.5,732.4z"/>
            				</g>
            				<g>
            					<path class="stc6" d="M2628.7,693.2V687l-12.7-6.7c0,0-0.5-0.3-1.5-0.3c-0.6,0-1.2,0.3-1.2,0.3l-2.1,1.1c0,0-0.3,0.2-0.7,0.2
            						c-0.4,0-0.8-0.4-0.8-0.4l-6.3-4.6c0,0-0.6-0.5-1.5-0.5c-0.9,0-1.8,0.6-1.8,0.6l-4.3,3.3c0,0-0.3,0.2-0.7,0.3
            						c-0.4,0-0.7-0.1-0.7-0.1l-1.8-0.8c0,0-0.6-0.3-1.4-0.2c-0.7,0.1-1.3,0.5-1.3,0.5l-5.3,4.1c0,0-0.3,0.3-0.6,0.3
            						c-0.4,0.1-0.8-0.1-0.8-0.1l-6.6-2.2c0,0-0.4-0.2-1-0.1c-0.6,0-1,0.2-1,0.2l-11.1,5h0l-4.2,1.9v4.5l0,0v19.1
            						c0,7.2,2.2,13.9,6,19.5c0.8,1.1,1.6,2.2,2.5,3.2c2,2.3,4.2,4.3,6.7,6c5.6,3.8,12.3,6,19.5,6s13.9-2.2,19.5-6
            						c2.5-1.7,4.8-3.7,6.7-6c0.9-1,1.7-2.1,2.5-3.2c3.8-5.6,6-12.3,6-19.5L2628.7,693.2L2628.7,693.2z M2576.3,733l-1-0.1
            						c0.1-0.2,0.1-0.4,0-0.5c0-0.2-0.1-0.3-0.3-0.5c-0.2-0.2-0.4-0.3-0.6-0.3c-0.2,0-0.4,0-0.5,0.2c-0.2,0.2-0.2,0.6,0,1.3
            						c0,0.1,0.1,0.2,0.1,0.3c0.2,0.5,0.2,1,0.2,1.4c0,0.4-0.2,0.7-0.5,1c-0.4,0.4-0.9,0.6-1.4,0.5c-0.5-0.1-1-0.3-1.4-0.8
            						c-0.3-0.3-0.5-0.7-0.6-1c-0.1-0.3-0.1-0.7,0-1l1.1,0c-0.1,0.2-0.1,0.4-0.1,0.7c0,0.2,0.2,0.4,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.4
            						c0.2,0,0.4,0,0.6-0.2c0.2-0.2,0.2-0.6,0-1.2c-0.1-0.2-0.1-0.4-0.1-0.5c-0.2-0.6-0.2-1-0.2-1.3c0.1-0.3,0.2-0.6,0.5-0.9
            						c0.4-0.3,0.8-0.5,1.3-0.4c0.5,0.1,1,0.3,1.4,0.8c0.2,0.3,0.4,0.5,0.5,0.8C2576.3,732.4,2576.3,732.7,2576.3,733z M2582.1,742.7
            						l-1.4-0.7l1.4-2.7l-2.8-1.4l-1.4,2.7l-1.4-0.7l3.2-6.4l1.4,0.7l-1.3,2.6l2.8,1.4l1.3-2.6l1.4,0.7L2582.1,742.7z M2592.3,739.3
            						l-2.7-0.3l-0.2,1.5l2.7,0.3l-0.1,1.3l-2.7-0.3l-0.2,1.8l2.7,0.3l-0.1,1.3l-4.2-0.5l0.8-7.1l4.2,0.5L2592.3,739.3z
            						 M2600.2,744.4l-2.4-3l0.6,3.3l-1.5,0.3l-1.2-7.1l2.2-0.4c0.9-0.1,1.5-0.1,2,0.2c0.5,0.3,0.8,0.7,0.9,1.4
            						c0.1,0.5,0,0.9-0.2,1.3c-0.2,0.4-0.6,0.7-1,0.8l2.5,2.9L2600.2,744.4z M2609,737.5c-0.2,0.6-0.7,1-1.4,1.4l-0.4,0.2l1.3,2.4
            						l-1.4,0.7l-3.4-6.3l1.6-0.8c0.8-0.4,1.5-0.6,2.1-0.5c0.6,0.1,1,0.5,1.4,1.2C2609.2,736.4,2609.2,737,2609,737.5z M2617.9,734.1
            						l-1.3-0.6l-1.7,1.7l0.6,1.2l-1,1l-2.8-6l1.1-1.1l6.1,2.6L2617.9,734.1z M2622.7,706.3c0,15.9-12.9,28.7-28.7,28.7
            						s-28.7-12.9-28.7-28.7v-8.8l0,0V694l9.3-4.1c0,0,0.4-0.2,1-0.2c0.6,0,1,0.1,1,0.1l6.5,2.2c0,0,0.3,0.1,0.8,0.1
            						c0.3-0.1,0.6-0.3,0.6-0.3l5.3-4.1c0,0,0.7-0.4,1.4-0.5c0.8-0.1,1.4,0.2,1.4,0.2l1.9,0.8c0,0,0.2,0.1,0.6,0.1
            						c0.4,0,0.7-0.3,0.7-0.3l4.3-3.3c0,0,0.9-0.6,1.8-0.6c1,0,1.5,0.5,1.5,0.5l6.5,4.7c0,0,0.3,0.3,0.7,0.3c0.4,0,0.7-0.2,0.7-0.2
            						l2.1-1.1c0,0,0.5-0.3,1.3-0.3c0.8,0,1.3,0.3,1.3,0.3l6.7,3.5v5.7l0,0L2622.7,706.3L2622.7,706.3z"/>
            				</g>
            			</g>
            			<g>
            				<g>
            					<polygon class="stc6" points="2582.7,717.3 2582.7,717.6 2582.2,717.3 2582.2,717.3 2581.2,716.8 2580.2,717.3 2580.2,717.3 
            						2579.7,717.6 2579.8,717.3 2580,715.9 2578.8,714.7 2580.5,714.5 2580.9,713.7 2581.2,713 2581.6,713.7 2582,714.5 
            						2583.7,714.7 2582.4,715.9 					"/>
            				</g>
            				<g>
            					<polygon class="stc6" points="2589.1,717.3 2589.1,717.6 2588.6,717.3 2588.6,717.3 2587.6,716.8 2586.6,717.3 2586.6,717.3 
            						2586.1,717.6 2586.1,717.3 2586.4,715.9 2585.2,714.7 2586.8,714.5 2587.2,713.7 2587.6,713 2588,713.7 2588.4,714.5 
            						2590,714.7 2588.8,715.9 					"/>
            				</g>
            				<g>
            					<polygon class="stc6" points="2595.4,717.3 2595.5,717.6 2595,717.3 2595,717.3 2594,716.8 2593,717.3 2593,717.3 2592.5,717.6 
            						2592.5,717.3 2592.7,715.9 2591.5,714.7 2593.2,714.5 2593.6,713.7 2594,713 2594.3,713.7 2594.7,714.5 2596.4,714.7 
            						2595.2,715.9 					"/>
            				</g>
            				<g>
            					<polygon class="stc6" points="2601.8,717.3 2601.9,717.6 2601.3,717.3 2601.3,717.3 2600.3,716.8 2599.3,717.3 2599.3,717.3 
            						2598.8,717.6 2598.9,717.3 2599.1,715.9 2597.9,714.7 2599.6,714.5 2600,713.7 2600.3,713 2600.7,713.7 2601.1,714.5 
            						2602.8,714.7 2601.6,715.9 					"/>
            				</g>
            				<g>
            					<polygon class="stc6" points="2608.2,717.3 2608.2,717.6 2607.7,717.3 2607.7,717.3 2606.7,716.8 2605.7,717.3 2605.7,717.3 
            						2605.2,717.6 2605.3,717.3 2605.5,715.9 2604.3,714.7 2606,714.5 2606.3,713.7 2606.7,713 2607.1,713.7 2607.5,714.5 
            						2609.2,714.7 2607.9,715.9 					"/>
            				</g>
            			</g>
            		</g>
            	</g>
            	<g id="Capa_1_2_" class="stc1">
            		<g>
            			<g>
            				<g>
            					<g>
            						<path class="stc7" d="M1448.8,745.2h1.7c0,0.4-0.1,0.9-0.4,1.3c-0.4,0.4-0.9,0.7-1.5,0.7c-1.2,0-2.1-0.9-2.1-2
            							c0-1.2,0.9-2.1,2.1-2.1c0.6,0,0.9,0.2,1.2,0.4c0.2,0.1,0.3,0.3,0.5,0.5l-0.2,0.2c-0.1-0.2-0.3-0.4-0.4-0.4
            							c-0.3-0.2-0.6-0.4-1.1-0.4c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8c0.7,0,1.2-0.3,1.4-0.7c0.2-0.2,0.3-0.6,0.3-0.8h-1.4
            							V745.2z"/>
            						<path class="stc7" d="M1455.1,743.4h-1.6v1.4h1.6v0.2h-1.6v1.8h1.6v0.2h-1.9v-4h1.9V743.4z"/>
            						<path class="stc7" d="M1457.8,747.1v-4l3.3,3.5v-3.5h0.3v4.1l-3.3-3.5v3.4H1457.8L1457.8,747.1z"/>
            						<path class="stc7" d="M1466.2,743.4h-1.6v1.4h1.6v0.2h-1.6v1.8h1.6v0.2h-1.9v-4h1.9V743.4z"/>
            						<path class="stc7" d="M1470.5,747.1l-1.3-1.9h-0.1v1.9h-0.3v-4h0.6c0.3,0,0.6,0,0.8,0.2c0.3,0.2,0.4,0.5,0.4,0.9
            							c0,0.4-0.2,0.8-0.7,1c-0.2,0.1-0.4,0.1-0.5,0.1l1.3,1.9L1470.5,747.1L1470.5,747.1z M1469.1,745h0.4c0.6,0,0.9-0.3,0.9-0.8
            							c0-0.4-0.2-0.6-0.4-0.7c-0.2-0.1-0.5-0.1-0.6-0.1h-0.3L1469.1,745L1469.1,745z"/>
            						<path class="stc7" d="M1475.3,745.8h-1.7l-0.5,1.3h-0.3l1.7-4.1l1.7,4.1h-0.3L1475.3,745.8z M1475.2,745.6l-0.7-1.9l-0.8,1.9
            							H1475.2z"/>
            						<path class="stc7" d="M1478.5,747.1v-4l3.3,3.5v-3.5h0.3v4.1l-3.3-3.5v3.4H1478.5L1478.5,747.1z"/>
            						<path class="stc7" d="M1485,747.1v-4h0.8c0.4,0,1,0.1,1.5,0.6c0.4,0.4,0.6,1,0.6,1.4c0,0.4-0.1,1-0.6,1.4
            							c-0.5,0.5-1.1,0.6-1.5,0.6L1485,747.1L1485,747.1z M1485.3,746.9h0.5c1.1,0,1.8-0.7,1.8-1.7c0-1-0.7-1.8-1.8-1.8h-0.5V746.9z"
            							/>
            						<path class="stc7" d="M1494.4,745.1c0,1.1-0.9,2-2.1,2c-1.2,0-2.1-0.9-2.1-2c0-1.1,0.9-2.1,2.1-2.1
            							C1493.5,743.1,1494.4,744,1494.4,745.1z M1494.2,745.1c0-1-0.8-1.8-1.8-1.8c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8
            							C1493.4,747,1494.2,746.2,1494.2,745.1z"/>
            						<path class="stc7" d="M1500.6,745.2v1.9h-0.3v-4h0.8c0.7,0,1.2,0.4,1.2,1c0,0.7-0.5,1.1-1.2,1.1H1500.6z M1500.6,745h0.5
            							c0.5,0,0.9-0.3,0.9-0.8c0-0.5-0.3-0.8-0.9-0.8h-0.5V745L1500.6,745z"/>
            						<path class="stc7" d="M1506.5,747.1l-1.3-1.9h-0.1v1.9h-0.3v-4h0.6c0.3,0,0.6,0,0.8,0.2c0.3,0.2,0.4,0.5,0.4,0.9
            							c0,0.4-0.2,0.8-0.7,1c-0.2,0.1-0.4,0.1-0.5,0.1l1.3,1.9L1506.5,747.1L1506.5,747.1z M1505,745h0.4c0.6,0,0.9-0.3,0.9-0.8
            							c0-0.4-0.2-0.6-0.4-0.7c-0.2-0.1-0.5-0.1-0.6-0.1h-0.3L1505,745L1505,745z"/>
            						<path class="stc7" d="M1513.2,745.1c0,1.1-0.9,2-2.1,2c-1.2,0-2.1-0.9-2.1-2c0-1.1,0.9-2.1,2.1-2.1S1513.2,744,1513.2,745.1z
            							 M1513,745.1c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8C1512.2,747,1513,746.2,1513,745.1z"/>
            						<path class="stc7" d="M1518,745.2h1.7c0,0.4-0.1,0.9-0.4,1.3c-0.4,0.4-0.9,0.7-1.5,0.7c-1.2,0-2.1-0.9-2.1-2
            							c0-1.2,0.9-2.1,2.1-2.1c0.6,0,0.9,0.2,1.2,0.4c0.2,0.1,0.3,0.3,0.5,0.5l-0.2,0.2c-0.1-0.2-0.3-0.4-0.4-0.4
            							c-0.3-0.2-0.6-0.4-1.1-0.4c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8c0.7,0,1.2-0.3,1.4-0.7c0.2-0.2,0.3-0.6,0.3-0.8h-1.4
            							L1518,745.2L1518,745.2z"/>
            						<path class="stc7" d="M1524,747.1l-1.3-1.9h-0.1v1.9h-0.3v-4h0.6c0.3,0,0.6,0,0.8,0.2c0.3,0.2,0.4,0.5,0.4,0.9
            							c0,0.4-0.2,0.8-0.7,1c-0.2,0.1-0.4,0.1-0.5,0.1l1.3,1.9L1524,747.1L1524,747.1z M1522.6,745h0.4c0.6,0,0.9-0.3,0.9-0.8
            							c0-0.4-0.2-0.6-0.4-0.7c-0.2-0.1-0.5-0.1-0.6-0.1h-0.3L1522.6,745L1522.6,745z"/>
            						<path class="stc7" d="M1528.8,743.4h-1.6v1.4h1.6v0.2h-1.6v1.8h1.6v0.2h-1.9v-4h1.9V743.4z"/>
            						<path class="stc7" d="M1533.3,743.8c-0.2-0.5-0.7-0.5-0.8-0.5c-0.5,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.6,0.7,0.8
            							c0.4,0.2,0.6,0.3,0.8,0.4c0.2,0.1,0.4,0.3,0.4,0.8c0,0.7-0.6,1.2-1.2,1.2c-0.5,0-0.8-0.2-0.9-0.4c-0.2-0.2-0.2-0.3-0.3-0.4
            							l0.2-0.1c0.1,0.2,0.2,0.3,0.2,0.4c0.2,0.2,0.5,0.3,0.7,0.3c0.5,0,1-0.4,1-0.9c0-0.2-0.1-0.4-0.4-0.6c-0.1-0.1-0.3-0.2-0.7-0.3
            							c-0.4-0.2-0.6-0.3-0.7-0.5c-0.1-0.1-0.1-0.3-0.1-0.5c0-0.5,0.3-1,1-1c0.4,0,0.8,0.2,1,0.6L1533.3,743.8z"/>
            						<path class="stc7" d="M1540.2,745.1c0,1.1-0.9,2-2.1,2c-1.2,0-2.1-0.9-2.1-2c0-1.1,0.9-2.1,2.1-2.1
            							C1539.3,743.1,1540.2,744,1540.2,745.1z M1540,745.1c0-1-0.8-1.8-1.8-1.8c-1,0-1.8,0.8-1.8,1.8c0,1,0.8,1.8,1.8,1.8
            							C1539.2,747,1540,746.2,1540,745.1z"/>
            					</g>
            				</g>
            			</g>
            			<g>
            				<g>
            					<g>
            						<path class="stc8" d="M1518.8,715.8c-0.7,0.1-1.3-0.2-1.3-0.2l-12.2-6.4c0,0-0.5-0.3-1.1-0.3c-0.4,0-0.9,0.2-1.1,0.3l-2.2,1.2
            							c-0.1,0-0.5,0.2-0.9,0.2c-0.6,0-1.1-0.3-1.2-0.4l-6.8-4.9c0,0-0.5-0.4-1.4-0.4h0c-0.8,0-1.4,0.5-1.4,0.5l-4.5,3.4
            							c0,0-0.4,0.3-1,0.4c-0.5,0.1-0.9-0.1-1-0.1l-2.1-0.9c0,0-0.5-0.2-1.2-0.2c-0.6,0.1-1.1,0.5-1.1,0.5l-5.6,4.3
            							c0,0-0.4,0.3-0.8,0.4c-0.6,0.1-1-0.1-1-0.1l-6.9-2.3c0,0-0.4-0.1-0.9-0.1c-0.5,0-0.9,0.2-0.9,0.2l-15.8,7.1v-1l15.4-6.9
            							c0,0,0.5-0.3,1.2-0.3c0.7,0,1.2,0.2,1.2,0.2l6.9,2.3c0,0,0.3,0.1,0.6,0.1c0.2,0,0.4-0.2,0.4-0.2l5.5-4.2c0,0,0.7-0.6,1.6-0.6
            							c1-0.1,1.7,0.2,1.7,0.2l2,0.8c0,0,0.2,0.1,0.4,0.1c0,0,0.1,0,0.1,0c0.3,0,0.5-0.2,0.5-0.2l4.5-3.4c0,0,0.9-0.7,2-0.7
            							c1.1,0,1.9,0.6,1.9,0.6l6.8,4.9c0,0,0.3,0.2,0.6,0.2c0.2,0,0.4-0.1,0.5-0.1l2.2-1.2c0.1,0,0.8-0.4,1.5-0.4
            							c0.9,0,1.5,0.4,1.5,0.4l12.2,6.4c0,0,0.3,0.1,0.6,0.1c0.1,0.2,0.1,0.4,0.2,0.6C1518.8,715.6,1518.8,715.7,1518.8,715.8z"/>
            					</g>
            				</g>
            				<g>
            					<path class="stc7" d="M1524.7,714.1l-5.9,1.8c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.1-0.4-0.2-0.6c-0.3-0.8-0.5-1.5-0.8-2.2
            						c-6.4-15.9-22-27.1-40.2-27.1c-12,0-22.8,4.9-30.7,12.7l0,0c0,0,0,0-0.1,0c-0.1,0-0.1-0.1-0.1-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0,0
            						c8.4-9.7,20.8-15.8,34.6-15.8C1501.5,682.4,1518.8,695.7,1524.7,714.1z"/>
            				</g>
            				<path class="stc9" d="M1540.2,719v0.5l-10.4-7l-4.3,1.3c-6.1-18.8-23.8-32.3-44.6-32.3c-12.2,0-23.3,4.7-31.7,12.3
            					c0,0-0.1,0-0.1,0c-0.1,0-0.1-0.1-0.1-0.1c0,0,0-0.1,0-0.1c9.7-10.6,23.6-17.3,39.2-17.3c22.5,0,41.8,14.1,49.5,33.9
            					C1538.8,713.1,1539.6,716,1540.2,719z"/>
            			</g>
            			<g>
            				<g>
            					<path class="stc7" d="M1458.5,736.3v1.7c-3.3,0-6.1-0.7-8.5-2c-2.3-1.4-3.5-3-3.5-4.9s1.2-3.6,3.5-4.9c2.3-1.4,5.2-2,8.5-2v1.7
            						c-2.4,0-4.4,0.5-6,1.5c-1.7,1-2.5,2.3-2.5,3.7c0,1.4,0.8,2.7,2.5,3.7C1454.2,735.8,1456.2,736.3,1458.5,736.3z"/>
            				</g>
            				<g>
            					<path class="stc7" d="M1479.8,736.3v1.7c-3.3,0-6.1-0.7-8.5-2c-2.3-1.4-3.5-3-3.5-4.9s1.2-3.6,3.5-4.9s5.2-2,8.5-2v1.7
            						c-2.4,0-4.4,0.5-6,1.5c-1.7,1-2.5,2.3-2.5,3.7c0,1.4,0.8,2.7,2.5,3.7C1475.4,735.8,1477.5,736.3,1479.8,736.3z"/>
            				</g>
            				<g>
            					<path class="stc7" d="M1489.1,724.1h3.4V738h-3.4V724.1z"/>
            				</g>
            				<g>
            					<path class="stc7" d="M1510.4,727.6l5.1-3.5h3.4V738h-3.4v-11.3l-5.1,3.5l-5.1-3.5V738h-3.4v-13.9h3.4L1510.4,727.6z"/>
            				</g>
            				<g>
            					<path class="stc7" d="M1538.5,726.7v6.1h1.7v1.7h-1.7v3.5h-3.4v-3.5h-3.4v3.5h-3.4v-3.5h-1.7v-1.7h1.7v-6.1
            						c0-0.7,0.5-1.3,1.5-1.8c1-0.5,2.2-0.8,3.6-0.8c1.4,0,2.6,0.3,3.6,0.8C1538,725.4,1538.5,726,1538.5,726.7z M1531.7,726.7v6.1
            						h3.4v-6.1c0-0.2-0.2-0.4-0.5-0.6c-0.3-0.2-0.7-0.3-1.2-0.3s-0.9,0.1-1.2,0.3C1531.8,726.3,1531.7,726.5,1531.7,726.7z"/>
            				</g>
            			</g>
            		</g>
            	</g>
            	<g class="stc1">
            		<g id="Capa_1_3_">
            			<g>
            				<polygon class="stc10" points="2462.6,121.9 2448.9,156.8 2439.2,181.7 2426.5,181.7 2419,156.8 2408.5,121.9 2406.6,115.4 
            					2404,121.9 2390.5,156.8 2377.9,156.8 2391.4,121.9 2401,97.1 2401.1,97 2413.7,97 2421.2,121.9 2431.7,156.8 2433.7,163.5 
            					2436.3,156.8 2450,121.9 				"/>
            				<g>
            					<g>
            						<path class="stc11" d="M2523,121.9h21v5.5h-13.8v8.9h10.6v5.5h-10.6v9.3h15.3v5.7H2523V121.9L2523,121.9z"/>
            						<path class="stc11" d="M2557.8,127.5h-9.9v-5.5h27v5.5h-9.8v29.3h-7.3V127.5z"/>
            						<path class="stc11" d="M2579.8,121.9h21v5.5H2587v8.9h10.6v5.5H2587v9.3h15.3v5.7h-22.5V121.9z"/>
            						<path class="stc11" d="M2606.2,139.3c0-2.7,0.4-5.2,1.3-7.3c0.9-2.2,2.1-4,3.6-5.5c3.1-3,7.1-4.5,12-4.5c2.7,0,5.3,0.3,7.7,1
            							c0.6,0.2,1.1,0.3,1.7,0.4l-1,6.4c-1.1-0.6-2-1-2.6-1.2c-1.5-0.5-3.1-0.7-4.8-0.7c-1.7,0-3.2,0.3-4.4,0.8
            							c-1.2,0.5-2.3,1.3-3.1,2.2c-1.9,2.1-2.9,4.9-2.9,8.4c0,3.6,0.9,6.5,2.8,8.8c1.9,2.3,4.5,3.5,7.7,3.5c2.2,0,4.4-0.5,6.7-1.4
            							c0.6-0.3,1-0.5,1.3-0.7l0,5.9c-2.2,0.9-3.9,1.4-5.2,1.6c-1.3,0.2-2.4,0.2-3.5,0.2c-5.3,0-9.5-1.6-12.6-4.8
            							C2607.8,148.9,2606.2,144.7,2606.2,139.3z"/>
            						<path class="stc11" d="M2485.9,122h7.7l6.4,19l1.8,6.6l1.9-6.6l6.1-19h7.7l-12.7,34.9h-6.1L2485.9,122z"/>
            						<path class="stc11" d="M2490,156.8h-7.7l-6.4-19l-1.8-6.6l-1.9,6.6l-6.1,19h-7.7L2471,122h6.1L2490,156.8z"/>
            					</g>
            				</g>
            				<g>
            					<g>
            						<path class="stc10" d="M2535.4,172.2h2.1c1.7,0,2.6,1,2.6,2.4c0,1-0.5,1.7-1.1,2.1c1.2,0.2,2,1.2,2,2.4c0,1.7-1.2,2.7-3,2.7
            							h-2.6V172.2L2535.4,172.2z M2536,176.5h1.5c0.5,0,0.9-0.1,1.3-0.4c0.4-0.3,0.6-0.8,0.6-1.5c0-0.8-0.3-1.2-0.6-1.5
            							c-0.5-0.4-1.1-0.4-1.6-0.4h-1.2V176.5z M2536,181.1h1.6c0.6,0,1.4,0,2.1-0.6c0.5-0.5,0.6-1,0.6-1.5c0-0.9-0.3-1.4-1-1.8
            							c-0.3-0.1-0.7-0.3-1.8-0.3h-1.5L2536,181.1L2536,181.1z"/>
            						<path class="stc10" d="M2549.9,177.6l-3.1-5.5h0.7l2.7,4.8l2.8-4.8h0.7l-3.2,5.5v4.1h-0.6L2549.9,177.6L2549.9,177.6z"/>
            						<path class="stc10" d="M2576.9,174.1c-0.8-1-2-1.5-3.2-1.5c-2.4,0-4.3,2-4.3,4.4c0,2.8,2.4,4.3,4.3,4.3c1,0,2.2-0.4,3.2-1.4
            							v0.8c-1,0.9-2.1,1.2-3.2,1.2c-2.9,0-5-2.2-5-4.9c0-2.7,2.2-4.9,4.9-4.9c1.8,0,2.9,1,3.2,1.2L2576.9,174.1L2576.9,174.1z"/>
            						<path class="stc10" d="M2591.6,174.1c-0.8-1-2-1.5-3.2-1.5c-2.4,0-4.3,2-4.3,4.4c0,2.8,2.4,4.3,4.3,4.3c1,0,2.2-0.4,3.2-1.4
            							v0.8c-1,0.9-2.1,1.2-3.2,1.2c-2.9,0-5-2.2-5-4.9c0-2.7,2.2-4.9,4.9-4.9c1.8,0,2.9,1,3.2,1.2L2591.6,174.1L2591.6,174.1z"/>
            						<path class="stc10" d="M2599.7,172.2v9.5h-0.6v-9.5H2599.7z"/>
            						<path class="stc10" d="M2607.5,181.7l1.1-9.9l4.1,8.8l4.1-8.8l1.1,9.9h-0.6l-0.8-7.7c0,0-3.7,8-3.7,8l-3.7-8l-0.8,7.7H2607.5z"
            							/>
            						<path class="stc10" d="M2630.6,178.6h-4.1l-1.3,3.1h-0.7l4-9.8l4,9.8h-0.7L2630.6,178.6z M2630.4,178l-1.8-4.5l-1.8,4.5H2630.4
            							z"/>
            					</g>
            				</g>
            			</g>
            		</g>
            	</g>
            	<g id="Capa_2_1_" class="stc1">
            		<g>
            			<g id="Capa_1-2_8_">
            				<g id="Capa_1-2-2_8_">
            					<path class="stc6" d="M1755,96.4h7.6c2.4-0.1,4.8,0.3,7,1.1c1.6,0.7,3,1.9,3.9,3.3c0.9,1.5,1.4,3.2,1.4,5c0,1.6-0.4,3.3-1.2,4.7
            						c-0.9,1.5-2.2,2.7-3.7,3.5c1.7,0.5,3.2,1.3,4.6,2.4c1.1,0.9,1.9,2,2.5,3.3c0.6,1.3,0.9,2.8,0.9,4.2c0,3-1.2,5.8-3.4,7.8
            						c-2.5,2.2-5.7,3.3-9,3.2H1755L1755,96.4z M1758.7,100.3v12.1h2.2c2,0.1,4-0.2,5.9-0.7c2.5-0.9,4.1-3.3,4.1-5.9
            						c0-1.6-0.7-3.1-1.9-4.1c-1.7-1.1-3.8-1.6-5.9-1.4H1758.7z M1758.7,116.4v14.7h4.7c2.1,0.1,4.2-0.2,6.2-0.8
            						c1.3-0.5,2.4-1.4,3.1-2.6c1.8-2.5,1.6-5.9-0.5-8.2c-1.2-1.3-2.8-2.2-4.6-2.6c-2.3-0.4-4.5-0.5-6.8-0.5H1758.7z"/>
            					<path class="stc6" d="M1785.7,96.4h3.8v23.2c-0.1,1.7,0,3.5,0.2,5.2c0.1,1.4,0.6,2.7,1.3,3.8c0.8,1.1,1.9,2,3.2,2.5
            						c1.4,0.7,2.8,1,4.3,1c1.3,0,2.5-0.3,3.7-0.8c1.1-0.5,2.1-1.3,2.9-2.2c0.8-1,1.4-2.2,1.7-3.5c0.3-2,0.5-4,0.4-6V96.4h3.8v23.2
            						c0.1,2.8-0.3,5.6-1,8.3c-0.7,2.2-2.1,4.1-4,5.5c-2.1,1.6-4.7,2.4-7.3,2.4c-2.8,0.1-5.6-0.7-8-2.2c-2.1-1.4-3.7-3.4-4.5-5.9
            						c-0.6-2.7-0.8-5.4-0.7-8.1L1785.7,96.4z"/>
            					<path class="stc6" d="M1816.6,127.6l3.3-2c2.3,4.2,5,6.3,8,6.3c1.3,0,2.5-0.3,3.6-0.9c2.1-1.1,3.5-3.2,3.5-5.6
            						c0-1.4-0.5-2.7-1.3-3.8c-1.9-2.4-4.1-4.4-6.6-6.2c-2.2-1.5-4.2-3.2-6-5.2c-1.3-1.7-2-3.7-2-5.9c0-1.6,0.4-3.2,1.2-4.6
            						c0.8-1.4,2-2.5,3.5-3.3c1.5-0.8,3.1-1.2,4.7-1.2c1.8,0,3.5,0.5,5.1,1.4c2,1.3,3.7,3,5,4.9l-3.1,2.4c-1-1.5-2.3-2.8-3.8-3.8
            						c-1-0.6-2.2-0.9-3.3-0.9c-1.4-0.1-2.8,0.4-3.8,1.4c-1,0.9-1.5,2.2-1.5,3.5c0,0.8,0.2,1.7,0.5,2.4c0.5,1,1.1,1.8,1.9,2.5
            						c0.5,0.5,2.2,1.7,5,3.8c2.7,1.8,5,4,6.9,6.5c1.2,1.7,1.8,3.7,1.9,5.8c0,2.8-1.1,5.4-3.2,7.3c-2,2-4.8,3.1-7.7,3.1
            						c-2.3,0-4.5-0.6-6.3-1.9C1819.7,132.2,1817.8,130.1,1816.6,127.6z"/>
            					<path class="stc6" d="M1846.6,96.4h3.8v38.4h-3.8V96.4z"/>
            					<path class="stc6" d="M1859.3,134.8V96.4h0.8l25.6,29.5V96.4h3.8v38.4h-0.9l-25.3-29.1v29.1H1859.3z"/>
            					<path class="stc6" d="M1898.8,96.4h22v3.8h-18.2v11.9h18v3.8h-18V131h18v3.8h-21.8V96.4z"/>
            					<path class="stc6" d="M1923.5,127.6l3.3-2c2.3,4.2,5,6.3,8,6.3c1.3,0,2.5-0.3,3.6-0.9c2.1-1.1,3.4-3.2,3.5-5.6
            						c0-1.4-0.5-2.7-1.3-3.8c-1.9-2.4-4.1-4.4-6.6-6.2c-2.2-1.5-4.2-3.2-6-5.2c-1.3-1.7-2-3.7-2-5.9c0-1.6,0.4-3.2,1.2-4.6
            						c0.8-1.4,2-2.5,3.5-3.2c1.5-0.8,3.1-1.2,4.8-1.2c1.8,0,3.5,0.5,5.1,1.4c2,1.3,3.7,3,5,4.9l-3.2,2.4c-1-1.5-2.3-2.8-3.8-3.8
            						c-1-0.6-2.2-0.9-3.3-0.9c-1.4-0.1-2.8,0.4-3.8,1.4c-1,0.9-1.5,2.2-1.5,3.5c0,0.8,0.2,1.7,0.5,2.4c0.5,1,1.1,1.8,1.9,2.5
            						c0.5,0.5,2.2,1.7,5,3.8c2.6,1.8,5,4,6.8,6.5c1.2,1.7,1.8,3.7,1.9,5.8c0,2.8-1.1,5.4-3.2,7.3c-2,2-4.8,3.1-7.7,3.1
            						c-2.3,0-4.5-0.6-6.3-1.9C1926.5,132.2,1924.7,130.1,1923.5,127.6z"/>
            					<path class="stc6" d="M1950.1,127.6l3.3-2c2.3,4.2,5,6.3,8,6.3c1.3,0,2.5-0.3,3.6-0.9c1.1-0.5,2-1.4,2.6-2.4
            						c0.6-1,0.9-2.1,0.9-3.2c0-1.4-0.5-2.7-1.3-3.8c-1.9-2.4-4.1-4.4-6.6-6.2c-2.2-1.5-4.2-3.2-6-5.2c-1.3-1.7-2-3.7-2-5.9
            						c0-1.6,0.4-3.2,1.2-4.6c0.8-1.4,2-2.5,3.4-3.3c1.5-0.8,3.1-1.2,4.7-1.2c1.8,0,3.5,0.5,5.1,1.4c2,1.3,3.7,3,5,4.9l-3.1,2.4
            						c-1-1.5-2.2-2.8-3.7-3.8c-1-0.6-2.2-0.9-3.3-0.9c-1.4-0.1-2.8,0.4-3.8,1.4c-1,0.9-1.5,2.2-1.5,3.5c0,0.8,0.2,1.7,0.5,2.4
            						c0.5,1,1.1,1.8,1.9,2.5c0.5,0.5,2.1,1.7,5,3.8c2.6,1.8,5,4,6.8,6.5c1.2,1.7,1.8,3.7,1.9,5.8c0,2.8-1.1,5.4-3.2,7.3
            						c-2,2-4.8,3.1-7.7,3.1c-2.3,0-4.5-0.6-6.3-1.9C1953.2,132.2,1951.4,130.1,1950.1,127.6z"/>
            					<path class="stc6" d="M1754.8,141.2h7.7c3-0.1,5.9,0.1,8.9,0.6c2.1,0.5,4,1.7,5.4,3.3c1.4,1.8,2.2,4,2.1,6.3
            						c0.1,2.3-0.6,4.5-2,6.3c-1.4,1.7-3.4,2.9-5.6,3.3c-3.2,0.6-6.5,0.8-9.8,0.6h-2.8v17.8h-3.8L1754.8,141.2z M1758.6,144.9v13h6.5
            						c1.9,0.1,3.9-0.2,5.8-0.7c1.2-0.5,2.2-1.3,2.9-2.3c0.7-1.1,1.1-2.3,1-3.6c0-1.2-0.4-2.4-1-3.5c-0.7-1-1.6-1.8-2.8-2.3
            						c-1.8-0.5-3.7-0.8-5.6-0.7L1758.6,144.9z"/>
            					<path class="stc6" d="M1798.9,141.2l17.9,38.4h-4.2l-6-12.6h-16.5l-6,12.6h-4.3l18.1-38.4H1798.9z M1798.5,149.3l-6.6,13.9h13.1
            						L1798.5,149.3z"/>
            					<path class="stc6" d="M1823,141.2h7.6c2.9-0.1,5.8,0.1,8.7,0.5c2.2,0.5,4.1,1.6,5.6,3.4c1.4,1.8,2.2,4,2.1,6.3
            						c0,1.9-0.5,3.8-1.5,5.5c-1,1.6-2.5,2.9-4.2,3.6c-2.4,0.9-5,1.3-7.6,1.2l13.9,17.8h-4.7l-13.9-17.8h-2.2v17.8h-3.8L1823,141.2z
            						 M1826.8,144.9v13h6.6c1.9,0.1,3.9-0.2,5.7-0.7c1.2-0.4,2.2-1.3,2.9-2.3c0.7-1.1,1-2.3,1-3.6c0-1.2-0.4-2.4-1-3.5
            						c-0.7-1-1.6-1.8-2.8-2.3c-1.8-0.5-3.7-0.8-5.6-0.7H1826.8z"/>
            					<path class="stc6" d="M1855.2,141.2h3.9v14.4l15.3-14.4h5.2l-18.4,17.2l19.9,21.2h-5.2l-16.8-17.9v17.9h-3.9L1855.2,141.2z"/>
            					<rect x="1740" y="96.3" class="stc6" width="1.5" height="83.4"/>
            					<path class="stc6" d="M1454.5,96.3h8.7l20.3,31.2V96.3h9v47.3h-8.7l-20.3-31v31h-9V96.3z"/>
            					<path class="stc6" d="M1513.4,96.3h9.1l18.2,47.3h-9.4l-3.7-9.7h-19.3l-3.8,9.7h-9.4L1513.4,96.3z M1518,108.8l-6.4,16.3h12.7
            						L1518,108.8z"/>
            					<path class="stc6" d="M1536.2,96.3h9.3l11.9,33.6l12.1-33.6h9.3l-17.1,47.3h-8.7L1536.2,96.3z"/>
            					<path class="stc6" d="M1584.3,96.3h25.8v8.8h-16.9v8.6h16.9v8.7h-16.9v12.5h16.9v8.8h-25.8V96.3z"/>
            					<path class="stc6" d="M1615.2,96.3h26.2v8.9h-8.7v38.4h-9.1v-38.4h-8.4V96.3z"/>
            					<path class="stc6" d="M1646,96.3h25.9v8.8H1655v8.6h16.9v8.7H1655v12.5h16.9v8.8H1646V96.3z"/>
            					<path class="stc6" d="M1722.1,104.6l-6.3,6.1c-3.6-4.3-8.9-6.8-14.5-6.9c-8.7-0.1-15.9,6.8-16.1,15.6v0.5
            						c-0.1,2.9,0.7,5.8,2.1,8.4c1.4,2.4,3.4,4.4,5.8,5.8c2.5,1.4,5.4,2.2,8.4,2.2c2.5,0,4.9-0.5,7.2-1.5c2.7-1.3,5.1-3.2,7.1-5.3
            						l6.1,6.4c-2.8,2.9-6.2,5.4-9.9,7.1c-3.4,1.4-7,2-10.7,2c-6.7,0.3-13.3-2.2-18.1-6.9c-4.7-4.8-7.3-11.3-7-17.9
            						c-0.1-4.5,1-8.9,3.2-12.7c2.2-3.7,5.4-6.8,9.2-8.9c3.9-2.2,8.4-3.3,12.9-3.3C1709.4,95.1,1716.9,98.6,1722.1,104.6z"/>
            					<rect x="1448.5" y="149.6" class="stc6" width="279.6" height="2.9"/>
            					<path class="stc6" d="M1545,162.2l-2.8,2.7c-1.6-1.9-4-3-6.4-3c-3.9-0.1-7.1,3-7.1,6.9c0,0,0,0,0,0v0.2c0,1.3,0.3,2.6,0.9,3.7
            						c0.6,1.1,1.5,2,2.6,2.6c2.2,1.1,4.7,1.2,6.9,0.3c1.2-0.6,2.3-1.4,3.2-2.4l2.7,2.8c-1.3,1.3-2.8,2.4-4.4,3.2
            						c-1.5,0.6-3.1,0.9-4.7,0.9c-3,0.1-5.9-1-8-3.1c-2.1-2.1-3.2-5-3.1-8c0-2,0.5-3.9,1.4-5.6c1-1.7,2.4-3,4.1-3.9
            						c1.7-1,3.7-1.5,5.7-1.5C1539.4,158,1542.7,159.5,1545,162.2L1545,162.2z"/>
            					<path class="stc6" d="M1555.9,158.5h4.1l8.1,21.1h-4.2l-1.7-4.3h-8.7l-1.7,4.3h-3.9L1555.9,158.5z M1558,164.1l-2.8,7.2h5.6
            						L1558,164.1z"/>
            					<path class="stc6" d="M1572.3,158.5h4v17.3h5.8v3.8h-9.9V158.5z"/>
            					<path class="stc6" d="M1592.7,158.5h4.1l8.1,21.1h-4.2l-1.7-4.3h-8.7l-1.7,4.3h-4.2L1592.7,158.5z M1594.7,164.1l-2.8,7.2h5.6
            						L1594.7,164.1z"/>
            					<path class="stc6" d="M1611.1,158.5h3.9l4.9,14.7l4.9-14.7h3.9l3.5,21.1h-3.9l-2.3-13.3l-4.4,13.3h-3.5l-4.5-13.3l-2.3,13.3h-4
            						L1611.1,158.5z"/>
            					<path class="stc6" d="M1642.9,158.5h4.1l8.1,21.1h-4.2l-1.7-4.3h-8.7l-1.7,4.3h-4.2L1642.9,158.5z M1644.9,164.1l-2.8,7.2h5.6
            						L1644.9,164.1z"/>
            					<path class="stc6" d="M1659.2,158.5h3.8l9,13.9v-13.9h4v21.1h-3.9l-9-13.9v13.9h-4V158.5z"/>
            					<path class="stc6" d="M1681.9,158.5h4.7c2.3-0.1,4.7,0.2,6.8,1.1c1.6,0.8,2.9,2.1,3.7,3.7c1,1.8,1.5,3.9,1.5,6
            						c0,1.5-0.3,3.1-0.8,4.5c-0.5,1.3-1.2,2.4-2.2,3.4c-0.9,0.9-1.9,1.5-3.1,1.9c-1.9,0.4-3.8,0.6-5.7,0.5h-4.8V158.5z
            						 M1685.9,162.4v13.3h1.9c1.4,0.1,2.7-0.1,4-0.6c0.9-0.5,1.6-1.2,2-2.1c0.6-1.1,0.8-2.4,0.8-3.7c0.1-1.9-0.6-3.8-1.9-5.2
            						c-1.5-1.3-3.5-1.9-5.4-1.7L1685.9,162.4z"/>
            					<path class="stc6" d="M1709.9,158.5h4.1l8.1,21.1h-4.2l-1.7-4.3h-8.7l-1.7,4.3h-4.2L1709.9,158.5z M1712,164.1l-2.8,7.2h5.6
            						L1712,164.1z"/>
            				</g>
            			</g>
            		</g>
            	</g>
            </g>
            <g id="BASE">
            	<image style="overflow:visible;" width="1366" height="821" xlink:href="media/assets/img/navetec/app/calamanda/calamanda_locales.jpg" >
            	</image>
            </g>
            <g id="LOCALES_PLANTA_BAJA">
            	<g id="ISLA_A_1_">
            		<g id="A-01_2_">
            			<polyline id="A-L01_2_" class="stc12" points="81.3,2.7 81.8,148.7 3.1,149 2.6,3 			"/>
            			<text transform="matrix(0 -1.0026 1 0 16.5749 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 29.8503 142.4412)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 29.8503 18.4417)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 21.8586 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 22.2355 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">01</tspan></text>
            		</g>
            		<g id="A-02_2_">
            			<polyline id="A-L02_2_" class="stc21" points="160,2.4 160.5,148.4 81.8,148.7 81.3,2.7 			"/>
            			<text transform="matrix(0 -1.0026 1 0 95.28 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 110.9313 142.4412)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 110.9313 18.4417)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 97.6667 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 100.9494 56.0261)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">02</tspan></text>
            		</g>
            		<g id="A-03_2_">
            			<polyline id="A-L03_2_" class="stc12" points="238.7,2.1 239.2,148.1 160.5,148.4 160,2.4 			"/>
            			<text transform="matrix(0 -1.0026 1 0 173.9924 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 187.7204 142.4412)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 187.7204 18.4417)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 178.9099 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 179.6608 56.0261)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">03</tspan></text>
            		</g>
            		<g id="A-04_2_">
            			<polyline id="A-L04_2_" class="stc21" points="317.4,1.9 317.9,147.9 239.2,148.1 238.7,2.1 			"/>
            			<text transform="matrix(0 -1.0026 1 0 252.7053 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 268.383 142.4412)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 268.383 18.4417)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 255.423 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 258.363 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">04</tspan></text>
            		</g>
            		<g id="A-05_2_">
            			<polyline id="A-L05_2_" class="stc12" points="396.1,1.6 396.6,147.6 317.9,147.9 317.4,1.9 			"/>
            			<text transform="matrix(0 -1.0026 1 0 331.4138 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 344.5114 142.4412)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 344.5114 18.4417)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 335.798 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 337.0754 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">05</tspan></text>
            			<g>
            				<polyline class="stc22" points="357,110.5 364.3,117.8 357,125.1 357,110.5 				"/>
            				<polyline class="stc23" points="357,110.5 357,125.1 349.7,117.8 357,110.5 				"/>
            			</g>
            		</g>
            		<g id="A-06_2_">
            			<polyline id="A-L06_2_" class="stc21" points="512.2,1.2 512.6,84 491.5,84.1 491.7,147.2 396.6,147.6 396.1,1.6 			"/>
            			<text transform="matrix(0 -1.0026 1 0 412.0832 93.8401)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 437.4714 17.1301)" class="stc13 stc14 stc16">8.85</text>
            			<text transform="matrix(-3.486438e-03 -1.0018 1 -3.500000e-03 507.1482 55.3553)"><tspan x="0" y="0" class="stc13 stc14 stc15">6.3</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 486.3483 78.6267)"><tspan x="0" y="0" class="stc13 stc14 stc16">1.6</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -1.0026 1 0 486.3483 130.5388)"><tspan x="0" y="0" class="stc13 stc14 stc15">4.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc15">9</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 429.8796 142.4412)"><tspan x="0" y="0" class="stc13 stc14 stc16">7.2</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 424.465 86.9915)"><tspan x="0" y="0" class="stc13 stc14 stc17">90.55</tspan><tspan x="29.3" y="0" class="stc13 stc14 stc17"> m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 424.048 56.0261)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">06</tspan></text>
            			<g>
            				<polyline class="stc22" points="440.6,110.5 447.9,117.8 440.6,125.1 440.6,110.5 				"/>
            				<polyline class="stc23" points="440.6,110.5 440.6,125.1 433.3,117.8 440.6,110.5 				"/>
            			</g>
            		</g>
            		<g id="DIVISIONES_7_">
            			<line class="stc24" x1="81.8" y1="148.7" x2="81.3" y2="2.7"/>
            			<line class="stc24" x1="160.5" y1="148.4" x2="160" y2="2.4"/>
            			<line class="stc24" x1="239.2" y1="148.1" x2="238.7" y2="2.1"/>
            			<line class="stc24" x1="317.9" y1="147.9" x2="317.4" y2="1.9"/>
            			<line class="stc24" x1="396.6" y1="147.6" x2="396.1" y2="1.6"/>
            			<polyline class="stc24" points="512.2,1.2 512.6,84 491.6,84.1 491.7,147.2 			"/>
            		</g>
            	</g>
            	<g id="ISLA_B_1_">
            		<g id="B-07_1_">
            			<polyline id="B-L07_1_" class="stc12" points="854.5,1.2 854.5,83.1 875.5,83.1 875.5,145.6 970.6,145.6 970.6,1.2 			"/>
            			<text transform="matrix(1.0089 0 0 1 908.7985 140.0222)"><tspan x="0" y="0" class="stc13 stc14 stc16">7.2</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 898.3078 14.4807)"><tspan x="0" y="0" class="stc13 stc14 stc16">8.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 888.0778 128.4954)"><tspan x="0" y="0" class="stc13 stc14 stc17">4.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 868.3825 52.3787)"><tspan x="0" y="0" class="stc13 stc14 stc17">6.3</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 855.1594 78.6267)"><tspan x="0" y="0" class="stc13 stc14 stc16">1.6</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 902.2521 86.3069)"><tspan x="0" y="0" class="stc13 stc14 stc17">90.55</tspan><tspan x="29.3" y="0" class="stc13 stc14 stc17"> m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 901.0158 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">07</tspan></text>
            			<g>
            				<polyline class="stc22" points="923,110.5 930.3,117.8 923,125.1 923,110.5 				"/>
            				<polyline class="stc23" points="923,110.5 923,125.1 915.7,117.8 923,110.5 				"/>
            			</g>
            		</g>
            		<g id="B-08_1_">
            			<polyline id="B-L08_1_" class="stc21" points="1049.4,1.2 1049.4,145.6 970.6,145.6 970.6,1.2 			"/>
            			<text transform="matrix(1.0089 0 0 1 995.7521 140.0222)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 995.7521 14.4807)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 984.5241 91.5862)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 990.7311 86.3069)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 989.9304 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">08</tspan></text>
            			<g>
            				<polyline class="stc22" points="1006.6,110.5 1013.9,117.8 1006.6,125.1 1006.6,110.5 				"/>
            				<polyline class="stc23" points="1006.6,110.5 1006.6,125.1 999.3,117.8 1006.6,110.5 				"/>
            			</g>
            		</g>
            		<g id="B-09_1_">
            			<polyline id="B-L09_1_" class="stc12" points="1128.1,1.2 1128.1,145.6 1049.4,145.6 1049.4,1.2 			"/>
            			<text transform="matrix(1.0089 0 0 1 1074.4899 140.0212)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1074.4899 14.4807)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1062.3868 91.5862)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1067.0729 86.3069)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1068.673 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">09</tspan></text>
            		</g>
            		<g id="B-10_2_">
            			<polyline id="B-L10_1_" class="stc21" points="1206.9,1.2 1206.9,145.6 1128.1,145.6 1128.1,1.2 			"/>
            			<text transform="matrix(1.0089 0 0 1 1153.2374 140.0222)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1153.2335 14.4807)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1142.0265 91.5862)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1148.4747 86.3069)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1147.4244 56.0261)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">10</tspan></text>
            		</g>
            		<g id="B-11_1_">
            			<polyline id="B-L11_1_" class="stc12" points="1284.3,1.2 1284.3,145.6 1205.5,145.6 1205.5,1.2 			"/>
            			<text transform="matrix(1.0089 0 0 1 1230.6666 140.0212)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1230.6666 14.4807)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1218.5641 91.5862)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1223.2496 86.3069)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1224.8502 56.0242)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">11</tspan></text>
            		</g>
            		<g id="ESPECTACULAR_PB_1_">
            			<polyline id="L-ESPECTACULAR_4_" class="stc25" points="1284.9,1.2 1362,1.2 1362,145.6 1350.3,145.6 1350.3,65.6 1284.9,65.6 
            				1284.9,1.2 			"/>
            			<polyline id="L-BAÑOS_3_" class="stc26" points="1284.9,65.6 1350.3,65.6 1350.3,145.6 1284.9,145.6 1284.9,65.6 			"/>
            			<text transform="matrix(0.9912 0 0 1 1287.3112 41.468)" class="stc18 stc19 stc27">ESPECTACULAR</text>
            			<text transform="matrix(0.9912 0 0 1 1294.3917 115.9714)" class="stc18 stc19 stc20">BAÑOS</text>
            		</g>
            		<g id="DIVISIONES_6_">
            			<path class="stc24" d="M854.5,1.2c0,27.3,0,54.6,0,82h21v62.4"/>
            			<line class="stc24" x1="970.6" y1="145.6" x2="970.6" y2="1.2"/>
            			<line class="stc24" x1="1049.4" y1="145.6" x2="1049.4" y2="1.2"/>
            			<line class="stc24" x1="1128.1" y1="145.6" x2="1128.1" y2="1.2"/>
            			<line class="stc24" x1="1206.9" y1="145.6" x2="1206.9" y2="1.2"/>
            			<line class="stc24" x1="1285.6" y1="145.6" x2="1285.6" y2="1.2"/>
            		</g>
            	</g>
            </g>
            <g id="LOCALES_PLANTA_ALTA">
            	<g id="ISLA_C">
            		<g id="C-12_2_">
            			<polyline id="C-L12_2_" class="stc12" points="81.3,461 81.8,607 3.1,607.3 2.6,461.3 			"/>
            			<text transform="matrix(0 -1.0026 1 0 16.5749 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 29.8503 600.7542)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 29.8503 476.7493)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 21.8586 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 22.2355 514.3313)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">12</tspan></text>
            		</g>
            		<g id="C-13_2_">
            			<polyline id="C-L13_2_" class="stc21" points="160,460.7 160.5,606.7 81.8,607 81.3,461 			"/>
            			<text transform="matrix(0 -1.0026 1 0 95.28 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 110.9313 600.7542)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 110.9313 476.7493)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 97.6667 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 100.9494 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">13</tspan></text>
            		</g>
            		<g id="C-14_2_">
            			<polyline id="C-L14_2_" class="stc12" points="238.7,460.4 239.2,606.4 160.5,606.7 160,460.7 			"/>
            			<text transform="matrix(0 -1.0026 1 0 173.9924 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 187.7204 600.7542)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 187.7204 476.7493)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 178.9099 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 179.6608 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">14</tspan></text>
            		</g>
            		<g id="C-15_2_">
            			<polyline id="C-L15_2_" class="stc21" points="317.4,460.2 317.9,606.2 239.2,606.4 238.7,460.4 			"/>
            			<text transform="matrix(0 -1.0026 1 0 252.7053 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 268.383 600.7542)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 268.383 476.7493)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 255.423 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 258.363 514.3313)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">15</tspan></text>
            		</g>
            		<g id="C-16_2_">
            			<polyline id="C-L16_2_" class="stc12" points="396.1,459.9 396.6,605.9 317.9,606.2 317.4,460.2 			"/>
            			<text transform="matrix(0 -1.0026 1 0 331.4138 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 344.5114 600.7542)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(1.0089 0 0 1 344.5114 476.7493)" class="stc13 stc14 stc16">6.00</text>
            			<text transform="matrix(0.9912 0 0 1 335.798 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 337.0754 514.3313)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">16</tspan></text>
            			<g>
            				<polyline class="stc22" points="357,570.4 364.3,577.7 357,585 357,570.4 				"/>
            				<polyline class="stc23" points="357,570.4 357,585 349.7,577.7 357,570.4 				"/>
            			</g>
            		</g>
            		<g id="C-17_1_">
            			<polyline id="C-L17_1_" class="stc21" points="512.2,459.5 512.6,542.3 491.5,542.4 491.7,605.5 396.6,605.9 396.1,459.9 			"/>
            			<text transform="matrix(0 -1.0026 1 0 412.0832 552.1467)"><tspan x="0" y="0" class="stc13 stc14 stc15">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 437.4714 475.4368)" class="stc13 stc14 stc16">8.85</text>
            			<text transform="matrix(-3.486438e-03 -1.0018 1 -3.500000e-03 507.1469 513.6625)"><tspan x="0" y="0" class="stc13 stc14 stc15">6.3</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc15">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 486.3483 536.9319)"><tspan x="0" y="0" class="stc13 stc14 stc16">1.6</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -1.0026 1 0 486.3483 588.8489)"><tspan x="0" y="0" class="stc13 stc14 stc15">4.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc15">9</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 429.8796 600.7542)"><tspan x="0" y="0" class="stc13 stc14 stc16">7.2</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 424.465 545.301)"><tspan x="0" y="0" class="stc13 stc14 stc17">90.55</tspan><tspan x="29.3" y="0" class="stc13 stc14 stc17"> m2</tspan></text>
            			<text transform="matrix(1.0026 0 0 1 424.048 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">17</tspan></text>
            			<g>
            				<polyline class="stc22" points="440.6,570.4 447.9,577.7 440.6,585 440.6,570.4 				"/>
            				<polyline class="stc23" points="440.6,570.4 440.6,585 433.3,577.7 440.6,570.4 				"/>
            			</g>
            		</g>
            		<g id="DIVISIONES_4_">
            			<line class="stc24" x1="81.8" y1="607" x2="81.3" y2="461"/>
            			<line class="stc24" x1="160.5" y1="606.7" x2="160" y2="460.7"/>
            			<line class="stc24" x1="239.2" y1="606.4" x2="238.7" y2="460.4"/>
            			<line class="stc24" x1="317.9" y1="606.2" x2="317.4" y2="460.2"/>
            			<line class="stc24" x1="396.6" y1="605.9" x2="396.1" y2="459.9"/>
            			<polyline class="stc24" points="512.2,459.5 512.6,542.3 491.6,542.4 491.7,605.5 			"/>
            		</g>
            	</g>
            	<g id="ISLA_D">
            		<g id="D-18_1_">
            			<polyline id="D-L18_1_" class="stc12" points="854.5,459.5 854.5,541.4 875.5,541.4 875.5,603.9 970.6,603.9 970.6,459.5 			"/>
            			<text transform="matrix(1.0089 0 0 1 908.7985 598.3303)"><tspan x="0" y="0" class="stc13 stc14 stc16">7.2</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 898.3078 472.7854)"><tspan x="0" y="0" class="stc13 stc14 stc16">8.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">5</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 888.0778 586.802)"><tspan x="0" y="0" class="stc13 stc14 stc17">4.8</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 868.3825 510.6848)"><tspan x="0" y="0" class="stc13 stc14 stc17">6.3</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 855.1594 536.9319)"><tspan x="0" y="0" class="stc13 stc14 stc16">1.6</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 902.2521 544.6135)"><tspan x="0" y="0" class="stc13 stc14 stc17">90.55</tspan><tspan x="29.3" y="0" class="stc13 stc14 stc17"> m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 901.0158 514.3313)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">18</tspan></text>
            			<g>
            				<polyline class="stc22" points="923,570.4 930.3,577.7 923,585 923,570.4 				"/>
            				<polyline class="stc23" points="923,570.4 923,585 915.7,577.7 923,570.4 				"/>
            			</g>
            		</g>
            		<g id="D-19_1_">
            			<polyline id="D-L19_1_" class="stc21" points="1049.4,459.5 1049.4,603.9 970.6,603.9 970.6,459.5 			"/>
            			<text transform="matrix(1.0089 0 0 1 995.7521 598.3303)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 995.7521 472.7854)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 984.5241 549.8938)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 990.7311 544.6135)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 989.9304 514.3313)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">19</tspan></text>
            			<g>
            				<polyline class="stc22" points="1006.6,570.4 1013.9,577.7 1006.6,585 1006.6,570.4 				"/>
            				<polyline class="stc23" points="1006.6,570.4 1006.6,585 999.3,577.7 1006.6,570.4 				"/>
            			</g>
            		</g>
            		<g id="D-20_1_">
            			<polyline id="D-L20_1_" class="stc12" points="1128.1,459.5 1128.1,603.9 1049.4,603.9 1049.4,459.5 			"/>
            			<text transform="matrix(1.0089 0 0 1 1074.4899 598.3284)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1074.4899 472.7854)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1062.3868 549.8938)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1067.0729 544.6135)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text id="LOCAL_20_1_" transform="matrix(0.9912 0 0 1 1068.673 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">20</tspan></text>
            		</g>
            		<g id="D-21_1_">
            			<polyline id="D-L21_1_" class="stc21" points="1206.9,459.5 1206.9,603.9 1128.1,603.9 1128.1,459.5 			"/>
            			<text transform="matrix(1.0089 0 0 1 1153.2374 598.3303)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1153.2335 472.7854)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1142.0265 549.8938)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1148.4747 544.6135)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1147.4244 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">21</tspan></text>
            		</g>
            		<g id="D-22_1_">
            			<polyline id="D-L22_1_" class="stc12" points="1284.9,459.5 1284.9,603.9 1206.2,603.9 1206.2,459.5 			"/>
            			<text transform="matrix(1.0089 0 0 1 1231.318 598.3284)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(1.0089 0 0 1 1231.318 472.7854)"><tspan x="0" y="0" class="stc13 stc14 stc16">6.0</tspan><tspan x="16.2" y="0" class="stc13 stc14 stc16">0</tspan></text>
            			<text transform="matrix(0 -0.9912 1 0 1219.2155 549.8938)"><tspan x="0" y="0" class="stc13 stc14 stc17">11.1</tspan><tspan x="22.7" y="0" class="stc13 stc14 stc17">0</tspan></text>
            			<text transform="matrix(0.9912 0 0 1 1223.901 544.6135)"><tspan x="0" y="0" class="stc13 stc14 stc17">6</tspan><tspan x="6.5" y="0" class="stc13 stc14 stc17">6.60 m2</tspan></text>
            			<text id="LOCAL_22_1_" transform="matrix(0.9912 0 0 1 1225.5016 514.3333)"><tspan x="0" y="0" class="stc18 stc19 stc20">LOCAL</tspan><tspan x="14.5" y="16.5" class="stc18 stc19 stc20">22</tspan></text>
            		</g>
            		<g id="ESPECTACULAR_PA_1_">
            			<polyline id="L-ESPECTACULAR_3_" class="stc25" points="1284.9,459.4 1362,459.4 1362,603.8 1350.3,603.8 1350.3,523.8 
            				1284.9,523.8 1284.9,459.4 			"/>
            			<polyline id="L-BAÑOS_2_" class="stc26" points="1284.9,523.8 1350.3,523.8 1350.3,603.8 1284.9,603.8 1284.9,523.8 			"/>
            			<text transform="matrix(0.9912 0 0 1 1287.3112 499.7151)" class="stc18 stc19 stc27">ESPECTACULAR</text>
            			<text transform="matrix(0.9912 0 0 1 1297.2252 553.6116)"><tspan x="0" y="0" class="stc18 stc19 stc28">CUARTO</tspan><tspan x="15.5" y="13.4" class="stc18 stc19 stc28">DE</tspan><tspan x="-7.8" y="26.8" class="stc18 stc19 stc28">MÁQUINAS</tspan></text>
            		</g>
            		<g id="DIVISIONES_1_">
            			<path class="stc24" d="M854.5,459.5c0,27.3,0,54.6,0,82h21v62.4"/>
            			<line class="stc24" x1="970.6" y1="603.9" x2="970.6" y2="459.5"/>
            			<line class="stc24" x1="1049.4" y1="603.9" x2="1049.4" y2="459.5"/>
            			<line class="stc24" x1="1128.1" y1="603.9" x2="1128.1" y2="459.5"/>
            			<line class="stc24" x1="1206.9" y1="603.9" x2="1206.9" y2="459.5"/>
            			<line class="stc24" x1="1285.6" y1="603.9" x2="1285.6" y2="459.5"/>
            		</g>
            	</g>
            </g>
            <g id="COMPLEMENTO">
            	<g>
            		<rect x="17.7" y="759.6" class="stc9" width="12.2" height="43.8"/>
            		<g>
            			<g>
            				<path class="stc13" d="M19.4,799.6v-4.7h1.6v1.6h6.9v1.6h-6.9v1.5H19.4z"/>
            				<path class="stc13" d="M19.1,789.8c0-1.2,0.4-2.2,1.3-3.1c0.9-0.9,1.9-1.3,3.2-1.3c1.2,0,2.3,0.4,3.1,1.3
            					c0.9,0.9,1.3,1.9,1.3,3.1c0,1.3-0.4,2.3-1.3,3.2c-0.9,0.8-1.9,1.3-3.1,1.3c-0.8,0-1.5-0.2-2.2-0.6s-1.2-0.9-1.6-1.6
            					C19.3,791.3,19.1,790.6,19.1,789.8z M20.7,789.8c0,0.8,0.3,1.5,0.8,2c0.5,0.5,1.2,0.8,2.1,0.8c0.9,0,1.7-0.3,2.2-1
            					c0.4-0.5,0.6-1.1,0.6-1.8c0-0.8-0.3-1.4-0.8-2c-0.6-0.5-1.2-0.8-2-0.8c-0.8,0-1.5,0.3-2,0.8S20.7,789,20.7,789.8z"/>
            				<path class="stc13" d="M19.4,784.7V780h1.6v1.6h6.9v1.6h-6.9v1.5H19.4z"/>
            				<path class="stc13" d="M19.4,778.9v-4.7h1.6v3h1.5v-3H24v3h2.2v-3h1.6v4.7H19.4z"/>
            				<path class="stc13" d="M19.4,772v-1.6l5.9-2l-5.9-2v-1.6l8.4-1.4v1.6l-5.3,0.9l5.3,1.8v1.4l-5.3,1.8l5.3,0.9v1.6L19.4,772z"/>
            			</g>
            		</g>
            	</g>
            	<path class="stc29" d="M3.1,628.1c178.2-0.5,356.4-1,534.7-1.5c-0.8-55.8-1.5-111.5-2.3-167.3c98.1-0.2,196.2-0.5,294.3-0.7
            		c-0.5,55.7-1,111.5-1.5,167.2c178.9,0,357.8,0,536.7,0c0.2,42.4,0.4,84.7,0.7,127.1L2.6,817.5C2.7,754.4,2.9,691.3,3.1,628.1z"/>
            	<g>
            		<g>
            			<g>
            				<line class="stc30" x1="535.5" y1="459.4" x2="544.4" y2="464.4"/>
            				<line class="stc31" x1="562.7" y1="474.9" x2="810.1" y2="615.5"/>
            				<line class="stc30" x1="819.2" y1="620.8" x2="828.2" y2="625.8"/>
            			</g>
            		</g>
            		<g>
            			<g>
            				<line class="stc30" x1="829.7" y1="458.6" x2="820.8" y2="463.7"/>
            				<line class="stc32" x1="802.5" y1="474.3" x2="555.8" y2="616.2"/>
            				<line class="stc30" x1="546.7" y1="621.5" x2="537.7" y2="626.6"/>
            			</g>
            		</g>
            	</g>
            	<g>
            		<g>
            			<g>
            				<line class="stc30" x1="2.6" y1="817.5" x2="12.8" y2="816.1"/>
            				<line class="stc33" x1="33.4" y1="813.2" x2="1344.3" y2="628.7"/>
            				<line class="stc30" x1="1354.6" y1="627.3" x2="1364.9" y2="625.8"/>
            			</g>
            		</g>
            		<g>
            			<g>
            				<line class="stc30" x1="3.1" y1="628.1" x2="13.3" y2="629.1"/>
            				<line class="stc34" x1="34" y1="631" x2="1344.9" y2="751"/>
            				<line class="stc30" x1="1355.3" y1="752" x2="1365.5" y2="752.9"/>
            			</g>
            		</g>
            	</g>
            	<path class="stc35" d="M548.5,793c-182,8.2-364,16.3-545.9,24.5c0.1-118.9,0.1-237.9,0.2-356.8c453.7-1.2,907.5-2.3,1361.2-3.5
            		c0.5,98.6,1,197.1,1.6,295.7c-184.5,9.7-368.9,19.3-553.4,29"/>
            	<g>
            		<text transform="matrix(0.9993 -3.208422e-02 5.604016e-02 1.1019 584.6485 272.6408)" class="stc7 stc19 stc36">SALIDA</text>
            		<path class="stc7" d="M612.5,292.8c-7.8,0.3-14.5-6.2-15.4-14.7l-20.6,0.7l18.5,16.4l18.5,16.4l16.7-17.6l16.7-17.6l-20.6,0.7
            			C626.3,285.6,620.3,292.6,612.5,292.8"/>
            	</g>
            	<g>
            		<text transform="matrix(1 -7.229928e-03 1.293069e-02 1.107 727.3293 292.1205)" class="stc7 stc19 stc37">ACCESO</text>
            		<path class="stc7" d="M758.8,261.6c-7.9,0.2-14.1,7.1-14.3,15.7l-20.9,0.4l17.3-17.6l17.3-17.6l18.2,16.9l18.2,16.8l-20.9,0.4
            			C773.3,268.1,766.7,261.4,758.8,261.6"/>
            	</g>
            	<path class="stc35" d="M548.5,334.7c-182,8.2-364,16.3-545.9,24.5C2.6,240.3,2.7,121.3,2.7,2.4C456.5,1.2,910.2,0.1,1364-1.1
            		c0.5,98.6,1,197.1,1.6,295.7c-184.5,9.7-368.9,19.3-553.4,29"/>
            	<rect x="553.3" y="49.7" class="stc10" width="253.6" height="39"/>
            	<text transform="matrix(1 0 0 1 566.7883 82.3904)" class="stc13 stc19 stc38">PLANTA BAJA</text>
            	<rect x="554.2" y="522.9" class="stc10" width="253.6" height="39"/>
            	<text transform="matrix(1 0 0 1 567.6818 555.5403)" class="stc13 stc19 stc38">PLANTA ALTA</text>
            	<g>
            		<rect x="17.7" y="298.8" class="stc9" width="12.2" height="43.8"/>
            		<g>
            			<g>
            				<path class="stc13" d="M19.4,338.8v-4.7h1.6v1.6h6.9v1.6h-6.9v1.5H19.4z"/>
            				<path class="stc13" d="M19.1,329c0-1.2,0.4-2.2,1.3-3.1c0.9-0.9,1.9-1.3,3.2-1.3c1.2,0,2.3,0.4,3.1,1.3c0.9,0.9,1.3,1.9,1.3,3.1
            					c0,1.3-0.4,2.3-1.3,3.2s-1.9,1.3-3.1,1.3c-0.8,0-1.5-0.2-2.2-0.6c-0.7-0.4-1.2-0.9-1.6-1.6C19.3,330.5,19.1,329.8,19.1,329z
            					 M20.7,329c0,0.8,0.3,1.5,0.8,2c0.5,0.5,1.2,0.8,2.1,0.8c0.9,0,1.7-0.3,2.2-1c0.4-0.5,0.6-1.1,0.6-1.8c0-0.8-0.3-1.4-0.8-2
            					c-0.6-0.5-1.2-0.8-2-0.8c-0.8,0-1.5,0.3-2,0.8S20.7,328.2,20.7,329z"/>
            				<path class="stc13" d="M19.4,323.9v-4.7h1.6v1.6h6.9v1.6h-6.9v1.5H19.4z"/>
            				<path class="stc13" d="M19.4,318.1v-4.7h1.6v3h1.5v-3H24v3h2.2v-3h1.6v4.7H19.4z"/>
            				<path class="stc13" d="M19.4,311.2v-1.6l5.9-2l-5.9-2V304l8.4-1.4v1.6l-5.3,0.9l5.3,1.8v1.4l-5.3,1.8l5.3,0.9v1.6L19.4,311.2z"/>
            			</g>
            		</g>
            	</g>
            </g>
            <g>
                <a href="#!/Navetec-Calamanda_ModuloA_Business_Park" class="pb__condo">
                    <polyline class="stc10" points="-0.1,2.3 512.2,1.2 512.6,794.9 2.4,819.8 2.6,4.7 	"/>
                    <text transform="matrix(1 0 0 1 141.056 402.6244)" class="stc13 stc19 stc38">MODULO A</text>
                </a>
            </g>
            <g>
                <a href="#!/Navetec-Calamanda_ModuloB_Business_Park" class="pb__condo">
                    <polygon class="stc10" points="852.8,1.2 1285.2,1.2 1285.6,757.1 852.8,776.6 	"/>
                    <text transform="matrix(1 0 0 1 970.6205 402.6244)" class="stc13 stc19 stc38">MODULO B</text>
                </a>
            </g>
            </svg>
        </div>
        
        
        
	</div>

   


    
</body>
</html>
