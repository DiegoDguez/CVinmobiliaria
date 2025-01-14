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

<body ng-controller="NvtCeltaQuoteCtrl as nvtCelta">
  

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

	<div class="modal-dialog" ng-class="nvtCelta.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtCelta.closeDialog()"></div>
			<div class="container-dialog p-20">
				<div class="toolbar-dialog blue-txt">
					Cotización
					<span ng-click="nvtCelta.closeDialog()">
						<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
					</span>
				</div>
                <div class="content-dialog">

<div class="divider"></div>

<div class="p-20 grey lighten-5">
  <div class="p-5">
    <h6 class="futura-med">Navetec Business Park {{nvtCelta.propertyData.condominium}}</h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light">{{nvtCelta.propertyData.propertyClass}}</h6>
            </div>
  <div class="p-5">
    <h6 class="futura-light">{{nvtCelta.propertyData.type}}</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Número {{nvtCelta.propertyData.number}}</h6>
  </div>
  <!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCelta.propertyData.dimensions}}</h6>
  </div> -->
  <div class="p-5">
    <h6 class="futura-light">Área de {{nvtCelta.propertyData.area}} M&sup2;</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Precio por M&sup2; de ${{nvtCelta.propertyData.cost_m2}} MXN</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light green-text">Precio de ${{nvtCelta.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;"></span></h6>
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
  <h6 class="deep-purple-text futura-light">{{nvtCelta.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCelta.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCelta.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCelta.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Valido hasta {{nvtCelta.month + ' ' + nvtCelta.year}}</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">Compra en Enero y paga la primera mensualidad hasta Febrero</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en Enero 2023</p>
</div>

<div class="divider"></div>

        <div class="p-20">
            <p class="blue-text futura-book">¡Apártalo ahora!</p>
            <p class="green-text">Con tan solo {{nvtCelta.costToBlock}}</p>
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
					<h2 class="center-align futura-med">CELTA</h2>
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

        <svg version="1.1" id="NBP_CELTA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	    viewBox="0 0 1366 446.4" style="enable-background:new 0 0 1366 446.4;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#29235C;}
            .st1{fill:none;stroke:#FFFFFF;stroke-width:0.195;stroke-miterlimit:10;}
            .st2{font-family:'CenturyGothic';}
            .st3{font-size:8.3929px;}
            .st4{fill:#3575B1;}
            .st5{fill:#F4E606;}
            .st6{font-family:'CenturyGothic-Bold';}
            .st7{font-size:8.6727px;}
            .st8{fill:#FFFFFF;}
            .st9{font-size:8.6726px;}
            .st10{fill:#61758F;}
            .st11{fill:none;stroke:#FFFFFF;stroke-width:1.2998;stroke-miterlimit:10;}
            .st12{font-size:6.4298px;}
            .st13{fill:none;stroke:#000000;stroke-width:3.8994;stroke-miterlimit:10;}
        </style>
        <g id="BASE">
            <g id="CASETA_ACCESO">
                <rect x="88.3" y="30" class="st0" width="20.5" height="15.5"/>
                <path class="st1" d="M97.4,32.1l1.3-1.3c0.2-0.2,0.6-0.2,0.8,0.2l0.4,0.8c0.4,1.4,1.1,2.7,2.2,3.6l0.4,0.3l0.1,3.8l-0.5,0.5
                    c-1,0.9-1.6,2.1-1.9,3.4l-0.4,1.1c-0.1,0.3-0.4,0.4-0.6,0.2l-1.5-1.2L97.4,32.1z"/>
                <polygon class="st1" points="96.1,43.6 95.8,32.1 97.4,32.1 97.7,43.5 		"/>
                <path class="st1" d="M96.1,43.9c-1.8,0.1-3.1-2.5-3.2-5.9c-0.1-3.3,1-6.1,2.8-6.2C96,37.9,96,37.9,96.1,43.9z"/>
                <path class="st1" d="M100.6,39c-0.2,0-1.8-0.5-1.8-1.2c0-0.7,1.5-1.4,1.7-1.4c0.2,0,0.7,0.6,0.7,1.3C101.3,38.3,100.8,39,100.6,39
                    z"/>
            </g>
            <text transform="matrix(0.6793 0.7272 -0.7307 0.6827 63.6886 82.9195)"><tspan x="0" y="0" class="st2 st3">Contenedores</tspan><tspan x="27.1" y="10.1" class="st2 st3">y</tspan><tspan x="11.7" y="20.1" class="st2 st3">cisternas</tspan></text>
            
                <image style="overflow:visible;" width="1366" height="446" xlink:href="media/assets/img/navetec/app/celta/BASE-CELTA_WEB.jpg"  transform="matrix(1 0 0 1 0 0.3852)">
            </image>
        </g>
        <g id="MACHOTE">
        </g>
        <g id="ISLA_A-B">
            <g id="MODULO_A_1_">
                <g id="LOTE_1A" ng-class="nvtCelta.inmovablesClassList[0]" ng-click="nvtCelta.showPropertyData(41, '1A', nvtCelta.inmovables[0].idProperty)">
                    <rect id="A1" x="172.3" y="74.4" width="118" height="71.9" class="property pb-sprite-2" />
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 212.8036 107.8169)" class="st5 st6 st7">LOTE 1A</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 209.0249 120.1623)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 218.7016 84.7244)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 218.7017 142.2029)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 175.4084 96.0852)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 281.3996 96.0859)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2A" ng-class="nvtCelta.inmovablesClassList[1]" ng-click="nvtCelta.showPropertyData(41, '2A', nvtCelta.inmovables[1].idProperty)">
                    <polygon id="A2" class="property pb-sprite-1" points="172.3,242.4 290.4,370 290.4,146.3 172.3,146.3" />
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 212.8044 222.3154)" class="st5 st6 st7">LOTE 2A</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 209.0253 234.3829)" class="st8 st2 st9">716.395 m2</text>
                    <text transform="matrix(0.6809 0.7391 -0.7357 0.6773 212.6334 279.5125)" class="st8 st2 st9">34.20</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 175.4067 182.2639)" class="st8 st2 st9">18.71</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 281.3991 243.1328)" class="st8 st2 st9">43.59</text>
                </g>
            </g>
            <g id="MODULO_B_1_">
                <g id="LOTE_1B_2_" ng-class="nvtCelta.inmovablesClassList[2]" ng-click="nvtCelta.showPropertyData(41, '1B', nvtCelta.inmovables[2].idProperty)">
                    <rect id="B1" x="290.4" y="74.4" class="property nvt-sprite-1" width="118.2" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 333.2888 107.8178)" class="st5 st6 st7">LOTE 1B</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 327.4814 120.1622)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 338.2641 84.7232)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 340.2906 142.2034)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 398.9347 96.0862)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2B_2_" ng-class="nvtCelta.inmovablesClassList[3]" ng-click="nvtCelta.showPropertyData(41, '2B', nvtCelta.inmovables[3].idProperty)">
                    <polyline id="B2" class="property pb-sprite-2" points="290.4,146.3 408.5,146.3 408.5,218.1 290.4,218.1 290.4,146.3 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 333.288 174.1373)" class="st5 st6 st7">LOTE 2B</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 327.4813 186.8512)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 340.2911 214.0501)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 294.2953 171.617)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 398.9344 171.6184)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_3B_2_" ng-class="nvtCelta.inmovablesClassList[4]" ng-click="nvtCelta.showPropertyData(41, '3B', nvtCelta.inmovables[4].idProperty)">
                    <rect id="3B" x="290.4" y="218.1" class="property nvt-sprite-1" width="118.2" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 333.2883 251.8808)" class="st5 st6 st7">LOTE 3B</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 327.4813 264.2258)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 340.2903 285.7122)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 294.2946 243.1326)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 398.9333 243.1321)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_4B_2_" ng-class="nvtCelta.inmovablesClassList[5]" ng-click="nvtCelta.showPropertyData(41, '4B', nvtCelta.inmovables[5].idProperty)">
                    <polygon id="L-4B_2_" class="property pb-sprite-2" points="290.4,290 408.5,290 408.5,444.6 359.3,444.6 290.4,370 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 333.2879 348.9065)" class="st5 st6 st7">LOTE 4B</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 327.4821 361.832)" class="st8 st2 st9">595.255 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 371.977 440.6456)" class="st8 st2 st9">9.55</text>
                    <text transform="matrix(0.6809 0.7391 -0.7357 0.6773 323.5371 398.337)" class="st8 st2 st9">19.82</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 294.2944 319.031)" class="st8 st2 st9">15.59</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 398.9353 351.0862)" class="st8 st2 st9">30.14</text>
                </g>
            </g>
            <g id="LINEAS_BLANCAS">
                <line class="st11" x1="172.3" y1="146.3" x2="408.5" y2="146.3"/>
                <line class="st11" x1="290.4" y1="218.1" x2="408.5" y2="218.1"/>
                <line class="st11" x1="290.4" y1="290" x2="408.5" y2="290"/>
                <line class="st11" x1="290.4" y1="370" x2="290.4" y2="74.4"/>
            </g>
        </g>
        <g id="ISLA_C-D">
            <g id="MODULO_C_1_">
                <g id="LOTE_1C_2_" ng-class="nvtCelta.inmovablesClassList[6]" ng-click="nvtCelta.showPropertyData(41, '1C', nvtCelta.inmovables[6].idProperty)">
                    <rect id="L-1C_2_" x="470" y="74.3" class="property pb-sprite-2" width="118" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 512.3569 107.8178)" class="st5 st6 st7">LOTE 1C</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 507.7764 120.1619)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.3129 84.7237)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.3126 142.2032)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 473.9762 96.0854)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 577.7545 96.0847)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2C_2_" ng-class="nvtCelta.inmovablesClassList[7]" ng-click="nvtCelta.showPropertyData(41, '2C', nvtCelta.inmovables[7].idProperty)">
                    <rect id="L-2C_2_" x="470" y="146.3" class="property nvt-sprite-1" width="118" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 512.3566 176.8395)" class="st5 st6 st7">LOTE 2C</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 507.7762 190.6596)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.3126 214.0499)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 473.9756 168.5473)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 577.754 168.5466)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_3C_2_" ng-class="nvtCelta.inmovablesClassList[8]" ng-click="nvtCelta.showPropertyData(41, '3C', nvtCelta.inmovables[8].idProperty)">
                    <rect id="L-3C_2_" x="470" y="218.1" class="property pb-sprite-2" width="118" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 512.3566 247.83)" class="st5 st6 st7">LOTE 3C</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 507.7759 260.9111)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.3127 285.713)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 473.9751 241.0092)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 577.7534 241.0095)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_4C_2_" ng-class="nvtCelta.inmovablesClassList[9]" ng-click="nvtCelta.showPropertyData(41, '4C', nvtCelta.inmovables[9].idProperty)">
                    <rect id="L-4C_2_" x="470" y="290" class="property nvt-sprite-1" width="118" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 512.3568 319.0861)" class="st5 st6 st7">LOTE 4C</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 507.7758 332.3882)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.312 356.4551)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 473.9764 312.9789)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 577.7548 312.9782)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_5C_2_" ng-class="nvtCelta.inmovablesClassList[10]" ng-click="nvtCelta.showPropertyData(41, '5C', nvtCelta.inmovables[10].idProperty)">
                    <rect id="L-5C_2_" x="470" y="361.8" class="property pb-sprite-2" width="118" height="82.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 512.357 398.4995)" class="st5 st6 st7">LOTE 5C</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 507.776 410.9923)" class="st8 st2 st9">371.105 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 518.3126 439.4786)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 473.9771 392.81)" class="st8 st2 st9">16.135</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 577.7554 392.8103)" class="st8 st2 st9">16.135</text>
                </g>
            </g>
            <g id="MODULO_D_1_">
                <g id="LOTE_1D"ng-class="nvtCelta.inmovablesClassList[11]" ng-click="nvtCelta.showPropertyData(41, '1D', nvtCelta.inmovables[11].idProperty)">
                    <rect id="L-1D" x="588" y="74.3" class="property nvt-sprite-1" width="118.2" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 629.2791 107.8177)" class="st5 st6 st7">LOTE 1D</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 624.6983 120.163)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.5854 84.7226)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.585 142.2021)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 695.2926 96.085)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2D" ng-class="nvtCelta.inmovablesClassList[12]" ng-click="nvtCelta.showPropertyData(41, '2D', nvtCelta.inmovables[12].idProperty)">
                    <rect id="L-2D" x="588" y="146.3" class="property pb-sprite-2" width="118.2" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 629.2788 176.8404)" class="st5 st6 st7">LOTE 2D</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 624.6976 190.6597)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.5841 214.0498)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 695.2921 168.5459)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_3D" ng-class="nvtCelta.inmovablesClassList[13]" ng-click="nvtCelta.showPropertyData(41, '3D', nvtCelta.inmovables[13].idProperty)">
                    <rect id="L-3D" x="588" y="218.1" class="property nvt-sprite-1" width="118.2" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 629.2799 247.8299)" class="st5 st6 st7">LOTE 3D</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 624.6978 260.9112)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.5837 285.7129)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 695.2915 241.0088)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_4D" ng-class="nvtCelta.inmovablesClassList[14]" ng-click="nvtCelta.showPropertyData(41, '4D', nvtCelta.inmovables[14].idProperty)">
                    <rect id="L-4D" x="588" y="290" class="property pb-sprite-2" width="118.2" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 629.2795 319.085)" class="st5 st6 st7">LOTE 4D</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 624.6976 332.3903)" class="st8 st2 st9">322.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.5845 356.457)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 695.2928 312.9785)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_5D" ng-class="nvtCelta.inmovablesClassList[15]" ng-click="nvtCelta.showPropertyData(41, '5D', nvtCelta.inmovables[15].idProperty)">
                    <rect id="L-5D" x="588" y="361.8" class="property nvt-sprite-1" width="118.2" height="82.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 629.2793 398.4994)" class="st5 st6 st7">LOTE 5D</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 624.6978 410.9924)" class="st8 st2 st9">371.105 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 636.5851 439.4795)" class="st8 st2 st9">23.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 695.293 392.8096)" class="st8 st2 st9">16.135</text>
                </g>
            </g>
            <g id="LINEAS_BLANCAS_1_">
                <line class="st11" x1="470" y1="146.3" x2="706.2" y2="146.3"/>
                <line class="st11" x1="470" y1="218.1" x2="706.2" y2="218.1"/>
                <line class="st11" x1="470" y1="290" x2="706.2" y2="290"/>
                <line class="st11" x1="470" y1="361.8" x2="706.2" y2="361.8"/>
                <line class="st11" x1="588" y1="74.3" x2="588" y2="444.6"/>
            </g>
        </g>
        <g id="ISLA_E-F">
            <g id="MODULO_E">
                <g id="LOTE_1E" ng-class="nvtCelta.inmovablesClassList[16]" ng-click="nvtCelta.showPropertyData(41, '1E', nvtCelta.inmovables[16].idProperty)">
                    <rect id="L-1E" x="767.7" y="74.3" class="property pb-sprite-2" width="148.8" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 826.5259 107.8175)" class="st5 st6 st7">LOTE 1E</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 821.9402 120.1622)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.1264 84.7237)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.126 142.2022)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 770.9479 96.0862)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 907.0299 96.0855)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2E"  ng-class="nvtCelta.inmovablesClassList[17]" ng-click="nvtCelta.showPropertyData(41, '2E', nvtCelta.inmovables[17].idProperty)">
                    <rect id="L-2E" x="767.7" y="146.3" class="property nvt-sprite-1" width="148.8" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 826.5274 176.0922)" class="st5 st6 st7">LOTE 2E</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 821.9401 188.4372)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.1266 214.0508)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 770.9473 168.5462)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 907.0294 168.5464)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_3E"  ng-class="nvtCelta.inmovablesClassList[18]" ng-click="nvtCelta.showPropertyData(41, '3E', nvtCelta.inmovables[18].idProperty)">
                    <rect id="L-3E" x="767.7" y="218.1" class="property pb-sprite-2" width="148.8" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 826.5273 251.8815)" class="st5 st6 st7">LOTE 3E</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 821.9395 264.2249)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.1262 285.7129)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 770.9468 241.009)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 907.028 243.1324)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_4E"  ng-class="nvtCelta.inmovablesClassList[19]" ng-click="nvtCelta.showPropertyData(41, '4E', nvtCelta.inmovables[19].idProperty)">
                    <rect id="L-4E" x="767.7" y="290" class="property nvt-sprite-1" width="148.8" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 826.5261 320.0448)" class="st5 st6 st7">LOTE 4E</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 821.941 332.3895)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.1279 356.458)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 770.9481 312.9798)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 907.0292 312.9781)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_5E"  ng-class="nvtCelta.inmovablesClassList[20]" ng-click="nvtCelta.showPropertyData(41, '5E', nvtCelta.inmovables[20].idProperty)">
                    <rect id="L-5E" x="767.7" y="361.8" class="property pb-sprite-2" width="148.8" height="82.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 826.526 401.8419)" class="st5 st6 st7">LOTE 5E</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 821.9406 414.185)" class="st8 st2 st9">467.915 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 831.1281 439.4785)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 770.9482 392.8108)" class="st8 st2 st9">16.135</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 907.0293 392.8101)" class="st8 st2 st9">16.135</text>
                </g>
            </g>
            <g id="MODULO_F" >
                <g id="LOTE_1F_2_" ng-class="nvtCelta.inmovablesClassList[21]" ng-click="nvtCelta.showPropertyData(41, '1F', nvtCelta.inmovables[21].idProperty)">
                    <rect id="L-1F_2_" x="916.5" y="74.3" class="property nvt-sprite-1" width="148.8" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 973.1719 107.8178)" class="st5 st6 st7">LOTE 1F</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 968.584 120.164)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.8745 84.7245)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.8741 142.2021)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1055.5143 96.0854)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_2F_2_" ng-class="nvtCelta.inmovablesClassList[22]" ng-click="nvtCelta.showPropertyData(41, '2F', nvtCelta.inmovables[22].idProperty)">
                    <rect id="L-2F_2_" x="916.5" y="146.3" class="property pb-sprite-2" width="148.8" height="71.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 973.1714 176.0934)" class="st5 st6 st7">LOTE 2F</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 968.582 188.439)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.8756 214.0497)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1055.5137 168.5464)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_3F_2_" ng-class="nvtCelta.inmovablesClassList[23]" ng-click="nvtCelta.showPropertyData(41, '3F', nvtCelta.inmovables[23].idProperty)">
                    <rect id="L-3F_2_" x="916.5" y="218.1" class="property nvt-sprite-1" width="148.8" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 973.1713 251.8828)" class="st5 st6 st7">LOTE 3F</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 968.5834 264.2267)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.8742 285.7128)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1055.5125 243.1313)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_4F_2_" ng-class="nvtCelta.inmovablesClassList[24]" ng-click="nvtCelta.showPropertyData(41, '4F', nvtCelta.inmovables[24].idProperty)">
                    <rect id="L-4F_2_" x="916.5" y="290" class="property pb-sprite-2" width="148.8" height="71.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 973.1721 320.0461)" class="st5 st6 st7">LOTE 4F</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 968.5838 332.3893)" class="st8 st2 st9">406.00 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.875 356.456)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1055.5135 312.979)" class="st8 st2 st9">14.00</text>
                </g>
                <g id="LOTE_5F_2_" ng-class="nvtCelta.inmovablesClassList[25]" ng-click="nvtCelta.showPropertyData(41, '5F', nvtCelta.inmovables[25].idProperty)">
                    <rect id="L-5F_2_" x="916.5" y="361.8" class="property nvt-sprite-1" width="148.8" height="82.8"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 973.172 401.8413)" class="st5 st6 st7">LOTE 5F</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 968.5844 414.1859)" class="st8 st2 st9">467.915 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 978.8751 439.4784)" class="st8 st2 st9">29.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1055.5146 392.81)" class="st8 st2 st9">16.135</text>
                </g>
            </g>
            <g id="LINEAS_BLANCAS_2_" >
                <line class="st11" x1="767.7" y1="361.8" x2="1065.3" y2="361.8"/>
                <line class="st11" x1="767.7" y1="290" x2="1065.3" y2="290"/>
                <line class="st11" x1="767.7" y1="218.1" x2="1065.3" y2="218.1"/>
                <line class="st11" x1="767.7" y1="146.3" x2="1065.3" y2="146.3"/>
                <line class="st11" x1="916.5" y1="74.3" x2="916.5" y2="444.6"/>
            </g>
        </g>
        <g id="ISLA_G">
            <g id="MODULO_G">
                <g id="LOTE_1G" ng-class="nvtCelta.inmovablesClassList[26]" ng-click="nvtCelta.showPropertyData(41, '1G', nvtCelta.inmovables[26].idProperty)">
                    <polygon id="L-1G" class="property nvt-sprite-1" points="1126.8,1.6 1363,1.5 1357.8,85.3 1126.8,85.5 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3684 37.3558)" class="st5 st6 st7">LOTE 1G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.7773 49.7019)" class="st8 st2 st9">742.964 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5769 13.6349)" class="st8 st2 st9">46.00</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5774 80.6925)" class="st8 st2 st9">45.00</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4163 33.448)" class="st8 st2 st9">16.33</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1349.0925 33.4329)" class="st8 st2 st9">16.36</text>
                </g>
                <g id="LOTE_2G" ng-class="nvtCelta.inmovablesClassList[27]" ng-click="nvtCelta.showPropertyData(41, '2G', nvtCelta.inmovables[27].idProperty)">
                    <polygon id="L-2G" class="property pb-sprite-2" points="1126.8,85.5 1126.8,157.3 1353.4,157.2 1357.8,85.3 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3677 114.0416)" class="st5 st6 st7">LOTE 2G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.7765 126.3871)" class="st8 st2 st9">623.996 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5773 151.4367)" class="st8 st2 st9">44.14</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4159 107.7664)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1345.2256 111.3295)" class="st8 st2 st9">14.03</text>
                </g>
                <g id="LOTE_3G" ng-class="nvtCelta.inmovablesClassList[28]" ng-click="nvtCelta.showPropertyData(41, '3G', nvtCelta.inmovables[28].idProperty)">
                    <polygon id="L-3G" class="property nvt-sprite-1" points="1126.8,157.3 1353.4,157.2 1349,229 1126.8,229.2 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3696 187.6005)" class="st5 st6 st7">LOTE 3G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.7766 199.9463)" class="st8 st2 st9">611.954 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5774 225.3058)" class="st8 st2 st9">43.28</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4172 179.9842)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1341.1732 180.9665)" class="st8 st2 st9">14.03</text>
                </g>
                <g id="LOTE_4G" ng-class="nvtCelta.inmovablesClassList[29]" ng-click="nvtCelta.showPropertyData(41, '4G', nvtCelta.inmovables[29].idProperty)">
                    <polygon id="L-4G" class="property pb-sprite-2" points="1126.8,301 1344.7,300.9 1349,229 1126.8,229.2 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3688 261.0158)" class="st5 st6 st7">LOTE 4G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.777 273.36)" class="st8 st2 st9">599.913 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5779 297.1535)" class="st8 st2 st9">42.42</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4169 254.1199)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1336.5659 254.1036)" class="st8 st2 st9">14.03</text>
                </g>
                <g id="LOTE_5G" ng-class="nvtCelta.inmovablesClassList[30]" ng-click="nvtCelta.showPropertyData(41, '5G', nvtCelta.inmovables[30].idProperty)">
                    <polygon id="L-5G" class="property nvt-sprite-1" points="1126.8,301 1344.7,300.9 1340.2,372.7 1126.8,372.9 			"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3678 333.4164)" class="st5 st6 st7">LOTE 5G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.7772 345.7609)" class="st8 st2 st9">587.871 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5776 368.2648)" class="st8 st2 st9">41.56</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4161 325.9646)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1331.592 327.0074)" class="st8 st2 st9">14.03</text>
                </g>
                <g id="LOTE_6G" ng-class="nvtCelta.inmovablesClassList[31]" ng-click="nvtCelta.showPropertyData(41, '6G', nvtCelta.inmovables[31].idProperty)">
                    <polygon id="L-6G" class="property pb-sprite-2" points="1126.8,444.7 1335.8,444.7 1340.2,372.7 1126.8,372.9"/>
                    <g>
                        <text transform="matrix(1 1.919963e-03 -1.779983e-03 1 1215.3679 405.82)" class="st5 st6 st7">LOTE 6G</text>
                    </g>
                    <text transform="matrix(0.9951 -3.930729e-03 4.090007e-03 1 1210.7775 418.1619)" class="st8 st2 st9">575.806 m2</text>
                    <text transform="matrix(1.0049 -1.004890e-04 -2.100000e-04 1 1220.5773 439.4806)" class="st8 st2 st9">40.70</text>
                    <text transform="matrix(1.004890e-04 1.0049 -1 -2.100000e-04 1131.4158 400.0242)" class="st8 st2 st9">14.00</text>
                    <text transform="matrix(-6.981988e-02 1.0025 -0.9976 -6.979011e-02 1327.3571 399.408)" class="st8 st2 st9">14.03</text>
                </g>
                <g id="LINEAS_BLANCAS_3_">
                    <line class="st11" x1="1126.8" y1="372.9" x2="1340.2" y2="372.7"/>
                    <line class="st11" x1="1126.8" y1="301" x2="1344.7" y2="300.9"/>
                    <line class="st11" x1="1126.8" y1="229.2" x2="1349" y2="229"/>
                    <line class="st11" x1="1126.8" y1="157.3" x2="1353.4" y2="157.2"/>
                    <line class="st11" x1="1357.8" y1="85.3" x2="1126.8" y2="85.5"/>
                </g>
            </g>
        </g>
        <g id="COMPLEMENTO">
            <g>
                <path d="M144.3,36.3v-9.2c-2.6,0.1-4.7-2-4.8-4.4c-0.1-2.6,2.1-4.8,4.8-4.8c0-3,0-6,0-9l-12.5,13.7L144.3,36.3z"/>
                <text transform="matrix(0 -1 1 0 151.1504 32.9816)" class="st2 st12">SALIDA</text>
            </g>
            <g>
                <path d="M61.3,43.9v9.2c2.6-0.1,4.7,2,4.8,4.4c0.1,2.6-2.1,4.8-4.8,4.8c0,3,0,6,0,9l12.5-13.7L61.3,43.9z"/>
                <text transform="matrix(0 1 -1 0 54.4326 43.9191)" class="st2 st12">ACCESO</text>
            </g>
            <polygon class="st13" points="62.5,1.8 1363,1.5 1335.8,444.7 359.3,444.6 1.8,57.6 	"/>
        </g>
        </svg>
	

	</div>

</body>
</html>
