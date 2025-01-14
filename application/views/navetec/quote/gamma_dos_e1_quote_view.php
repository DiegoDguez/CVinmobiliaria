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

<body ng-controller="NvtGammaDosQuoteCtrl as nvtGammaDos">
	
	
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

	<div class="modal-dialog" ng-class="nvtGammaDos.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtGammaDos.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtGammaDos.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

                <div class="divider"></div>
                
                <div class="p-20 grey lighten-5">
                    <div class="p-5">
                        <h6 class="futura-med">Navetec Business Park {{nvtGammaDos.propertyData.condominium}}</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="futura-light">{{nvtGammaDos.propertyData.type}}</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="futura-light">{{nvtGammaDos.propertyData.propertyClass}}</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="futura-light">Número {{nvtGammaDos.propertyData.number}}</h6>
                    </div>
                    <!-- <div class="p-5">
                        <h6 class="futura-light">Dimenciones: {{nvtGammaDos.propertyData.dimensions}}</h6>
                    </div> -->
                    <div class="p-5">
                        <h6 class="futura-light">Área de {{nvtGammaDos.propertyData.area}} M&sup2;</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="futura-light">Precio por M&sup2; de ${{nvtGammaDos.propertyData.cost_m2}} MXN</h6>
                    </div>
                    <div class="p-5">
                        <h6 class="futura-light green-text">Precio de ${{nvtGammaDos.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
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
                    <h6 class="deep-purple-text futura-light">{{nvtGammaDos.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
                    <h6 class="green-text futura-light">Precio de ${{nvtGammaDos.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
                    <p class="promo__description grey-text">¡Oferta limitada!</p>
                </div>
                
                <div class="divider"></div>

                <div class="p-20">
                    <h6 class="deep-purple-text futura-light">{{nvtGammaDos.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 5 años</h6>
                    <h6 class="green-text futura-light">Precio de ${{nvtGammaDos.propertyData.totalPlan2}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
                    <p class="promo__description grey-text">Entrega a 9 meses</p>
                    <p class="promo__description grey-text">¡Oferta limitada!</p>
                </div> -->
                
                <div class="divider"></div>

                <div class="p-20">
                    <h6 class="deep-purple-text futura-light">Compra en {{nvtGammaDos.month}} y paga la primera mensualidad hasta {{nvtGammaDos.nextMonth}}</h6>
                    <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
                    <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{nvtGammaDos.month + ' ' + nvtGammaDos.year}}</p>
                </div>

                <div class="divider"></div>

                <div class="p-20">
                    <p class="blue-text futura-book">¡Apártalo ahora!</p>
                    <p class="green-text">Con tan solo {{nvtGammaDos.costToBlock}}</p>
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
					<h2 class="center-align futura-med blue-txt">GAMMA II</h2>
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

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1366 920" style="enable-background:new 0 0 1366 920;" xml:space="preserve">
        <style type="text/css">
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#3575B1;}
            .st1{fill:#FFFFFF;}
            .st2{font-family:'CenturyGothic-Bold';}
            .st3{font-size:37.1665px;}
            .st4{letter-spacing:1;}
            .st5{font-size:18.6246px;}
            .st6{font-size:37.1724px;}
            .st7{font-size:18.5862px;}
            
            .st8{fill-rule:evenodd;clip-rule:evenodd;fill:#E2A63C;}
            .st9{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E2A63C;}
            .st10{fill-rule:evenodd;clip-rule:evenodd;fill:#61758F;}
            .st11{fill:none;stroke:#FFFFFF;stroke-width:2.0768;stroke-miterlimit:10;}
            .st12{fill:none;stroke:#021D49;stroke-width:3.4566;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            .st44{fill:#476CA4;stroke:#3B2E4F;stroke-width:3.1984;stroke-miterlimit:10;}
            .st46{fill:#3B2E4F;}
            .st47{font-size:65.4463px;}
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}

        </style>
        
        
        <image style="overflow:visible;" width="1366" height="922" xlink:href="media/assets/img/navetec/app/gamma/gamma2.jpg"></image>
        
        
        <g id="ISLA_G_1_">
           
            <g ng-class="nvtGammaDos.inmovablesClassList[0]" ng-click="nvtGammaDos.showPropertyData(14, '1G', nvtGammaDos.inmovables[0].idProperty)">
                <polygon id="G_N01_1_" class="property pb-sprite-1" points="1083.6,656.7 1164.3,656.8 1157.2,845.5 1104.7,843.3 1083.6,843.3"/>
                <text transform="matrix(1.0008 0 0 1 1115.0277 665.1658)" class="white__fill futura-light fs__9px">16.96</text>
                <text transform="matrix(1.0008 0 0 1 1089.1254 837.8552)" class="white__fill futura-light fs__9px">3.93</text>
                <text transform="matrix(0.9986 6.612318e-02 -6.606966e-02 0.9978 1123.7842 840.024)" class="white__fill futura-light fs__9px">11.50</text>
                <text transform="matrix(2.713202e-02 -1.0004 0.9996 2.711006e-02 1155.7391 764.884)" class="white__fill futura-light fs__9px">39.73</text>
                <g>
                    <text transform="matrix(1 0 0 1 1107.2006 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">1G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 1105.0775 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">638.16</tspan><tspan x="22.3" y="0" class="st1 futura-light fs__9px"> m2</tspan></text>
                <g>
                    <polyline class="st8" points="1125.1,688.2 1117,680 1125.1,671.8 1125.1,688.2 			"/>
                    <polyline class="st9" points="1125.1,671.8 1133.3,680 1125.1,688.2 1125.1,671.8 			"/>
                </g>
            </g>

            <g ng-class="nvtGammaDos.inmovablesClassList[1]" ng-click="nvtGammaDos.showPropertyData(14, '2G', nvtGammaDos.inmovables[1].idProperty)">
                <polygon id="G_N02_1_" class="property pb-sprite-2" points="1016.9,656.7 1083.6,656.7 1083.6,843.3 1016.9,843.3 		"/>
                <text transform="matrix(1.0008 0 0 1 1040.7201 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 1040.7201 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 1077.7523 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 1032.1039 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">2G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 1029.9808 773.4382)"><tspan x="0" y="0" class="st1 futura-light fs__9px">549.22 &nbsp;&nbsp;</tspan><tspan x="22.3" y="0" class="st1 futura-book futura-light fs__9px"> m2</tspan></text>
                <g>
                    <polyline class="st8" points="1050.3,688.2 1042.1,680 1050.3,671.8 1050.3,688.2"/>
                    <polyline class="st9" points="1050.3,671.8 1058.5,680 1050.3,688.2 1050.3,671.8"/>
                </g>
            </g>
            
            <g ng-class="nvtGammaDos.inmovablesClassList[2]" ng-click="nvtGammaDos.showPropertyData(14, '3G', nvtGammaDos.inmovables[2].idProperty)">
                <rect id="G_N03_1_" x="950.5" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 976.1928 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 976.1928 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 1013.2241 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 967.5766 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">3G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 965.4536 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22 &nbsp;&nbsp; </tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px">     m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[3]" ng-click="nvtGammaDos.showPropertyData(14, '4G', nvtGammaDos.inmovables[3].idProperty)">
                <rect id="G_N04_1_" x="883.9" y="656.7" class="property pb-sprite-2" width="66.7" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 909.4721 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 909.4721 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 946.5034 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 900.8559 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">4G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 898.7328 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22  </tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px">    m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[4]" ng-click="nvtGammaDos.showPropertyData(14, '5G', nvtGammaDos.inmovables[4].idProperty)">
                <rect id="G_N05_1_" x="817.4" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 842.7495 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 842.7495 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 879.7827 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g> 
                    <text transform="matrix(1 0 0 1 834.1352 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">5G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 832.0121 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[5]" ng-click="nvtGammaDos.showPropertyData(14, '6G', nvtGammaDos.inmovables[5].idProperty)">
                <rect id="G_N06_1_" x="750.8" y="656.7" class="property pb-sprite-2" width="66.6" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 775.2436 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 775.2436 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 812.2768 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 766.6293 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">6G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 764.5063 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[6]" ng-click="nvtGammaDos.showPropertyData(14, '7G', nvtGammaDos.inmovables[6].idProperty)">
                <rect id="G_N07_1_" x="684.3" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 709.308 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 709.308 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 746.3412 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 700.6938 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">7G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 698.5707 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g >
                <rect id="G_N08_1_" x="617.6" y="656.7" class="property pb-sprite-2" width="66.8" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 642.8491 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 642.8491 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 679.8813 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 634.2338 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">8G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 632.1118 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N09_1_" x="551.1" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 576.6537 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 576.6537 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 613.684 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 568.0366 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="8" y="14.8" class="mustard__fill futura-book fs__13px">9G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 565.9135 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N10_1_" x="484.5" y="656.7" class="property pb-sprite-2" width="66.6" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 510.4545 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 510.4545 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 547.4858 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 501.8393 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">10G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 499.7162 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N11_1_" x="418" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 443.9955 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 443.9955 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 481.0268 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 435.3803 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">11G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 433.2563 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N12_1_" x="351.4" y="656.7" class="property pb-sprite-2" width="66.6" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 376.7514 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 376.7514 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 413.7827 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 368.1362 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">12G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 366.0131 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N13_1_" x="284.9" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 309.768 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 309.768 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 346.8002 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 301.1537 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">13G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 299.0297 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N14_1_" x="218.3" y="656.7" class="property pb-sprite-2" width="66.6" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 243.5707 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 243.5707 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 280.603 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 234.9565 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">14G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 232.8325 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N15_1_" x="151.9" y="656.7" class="property pb-sprite-1" width="66.4" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 177.1118 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 177.1118 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 214.144 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 168.4975 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">15G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 166.3735 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="G_N16_1_" x="85.3" y="656.7" class="property pb-sprite-2" width="66.6" height="186.5"/>
                <text transform="matrix(1.0008 0 0 1 110.391 665.1658)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 110.391 837.8552)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 147.4233 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <g>
                    <text transform="matrix(1 0 0 1 101.7768 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">16G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 99.6528 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">549.22</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="G_N17_1_" class="property pb-sprite-1" points="8.5,656.7 85.3,656.7 85.3,843.3 1.1,843.3"/>
                <text transform="matrix(1.0008 0 0 1 35.559 665.1658)" class="white__fill futura-light fs__9px">16.14</text>
                <text transform="matrix(1.0008 0 0 1 35.559 837.8552)" class="white__fill futura-light fs__9px">17.70</text>
                <text transform="matrix(0 -1.0008 1 0 80.4408 764.8494)" class="white__fill futura-light fs__9px">39.23</text>
                <text transform="matrix(5.355319e-02 -0.9994 0.9986 5.350985e-02 13.8169 758.959)" class="white__fill futura-light fs__9px">39.26</text>
                <g>
                    <text transform="matrix(1 0 0 1 29.8754 744.4773)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="4.6" y="14.8" class="mustard__fill futura-book fs__13px">17G</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 27.7514 773.4382)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">663.95</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g id="LINEAS_BLANCAS_MODULO_G_1_">
                <line class="st11" x1="85.3" y1="656.7" x2="85.3" y2="843.3"/>
                <line class="st11" x1="151.9" y1="656.7" x2="151.9" y2="843.3"/>
                <line class="st11" x1="218.3" y1="656.7" x2="218.3" y2="843.3"/>
                <line class="st11" x1="284.9" y1="656.7" x2="284.9" y2="843.3"/>
                <line class="st11" x1="351.4" y1="656.7" x2="351.4" y2="843.3"/>
                <line class="st11" x1="418" y1="656.7" x2="418" y2="843.3"/>
                <line class="st11" x1="484.5" y1="656.7" x2="484.5" y2="843.3"/>
                <line class="st11" x1="551.1" y1="656.7" x2="551.1" y2="843.3"/>
                <line class="st11" x1="617.6" y1="656.7" x2="617.6" y2="843.3"/>
                <line class="st11" x1="684.3" y1="656.7" x2="684.3" y2="843.3"/>
                <line class="st11" x1="750.8" y1="656.7" x2="750.8" y2="843.3"/>
                <line class="st11" x1="817.4" y1="656.7" x2="817.4" y2="843.3"/>
                <line class="st11" x1="883.9" y1="656.7" x2="883.9" y2="843.3"/>
                <line class="st11" x1="950.5" y1="656.7" x2="950.5" y2="843.3"/>
                <line class="st11" x1="1016.9" y1="656.7" x2="1016.9" y2="843.3"/>
                <line class="st11" x1="1083.6" y1="656.7" x2="1083.6" y2="843.3"/>
            </g>
        </g>
        <g id="ISLA_H_1_">
            <g ng-class="nvtGammaDos.inmovablesClassList[17]" ng-click="nvtGammaDos.showPropertyData(14, '1H', nvtGammaDos.inmovables[17].idProperty)">
                <polygon id="H_N01_1_" class="property pb-sprite-2" points="1032.7,382.5 1099.2,382.5 1099.2,576 1032.7,576"/>
                <text transform="matrix(1.0008 0 0 1 1059.347 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 1059.347 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 1095.0541 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 1050.1693 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">1H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 1048.6693 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
                <g>
                    <polyline class="st8" points="1068.6,563.1 1060.4,554.9 1068.6,546.7 1068.6,563.1 			"/>
                    <polyline class="st9" points="1068.6,546.7 1076.8,554.9 1068.6,563.1 1068.6,546.7 			"/>
                </g>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[18]" ng-click="nvtGammaDos.showPropertyData(14, '2H', nvtGammaDos.inmovables[18].idProperty)">
                <polygon id="H_N02_1_" class="property pb-sprite-1" points="966.2,382.5 1032.7,382.5 1032.7,576 966.2,576 		"/>
                <text transform="matrix(1.0008 0 0 1 992.101 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 992.101 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 1027.8109 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 982.9252 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">2H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 981.4252 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[19]" ng-click="nvtGammaDos.showPropertyData(14, '3H', nvtGammaDos.inmovables[19].idProperty)">
                <polygon id="H_N03_1_" class="property pb-sprite-2" points="899.5,382.5 966.2,382.5 966.2,576 899.5,576 		"/>
                <text transform="matrix(1.0008 0 0 1 926.4291 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 926.4291 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 962.1362 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 917.2504 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">3H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 915.7504 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[20]" ng-click="nvtGammaDos.showPropertyData(14, '4H', nvtGammaDos.inmovables[20].idProperty)">
                <polygon id="H_N04_1_" class="property pb-sprite-1" points="833,382.5 899.5,382.5 899.5,576 833,576 		"/>
                <text transform="matrix(1.0008 0 0 1 860.2299 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 860.2299 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 895.9389 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 851.0522 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">4H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 849.5532 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[21]" ng-click="nvtGammaDos.showPropertyData(14, '5H', nvtGammaDos.inmovables[21].idProperty)">
                <polygon id="H_N05_1_" class="property pb-sprite-2" points="766.5,382.5 833,382.5 833,576 766.4,576 		"/>
                <text transform="matrix(1.0008 0 0 1 793.5092 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 793.5092 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 829.2182 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 784.3315 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">5H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 782.8325 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g ng-class="nvtGammaDos.inmovablesClassList[22]" ng-click="nvtGammaDos.showPropertyData(14, '6H', nvtGammaDos.inmovables[22].idProperty)">
                <polygon id="H_N06_1_" class="property pb-sprite-1" points="700,382.5 766.5,382.5 766.4,576 700,576 		"/>
                <text transform="matrix(1.0008 0 0 1 726.7885 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 726.7885 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 762.4975 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 717.6108 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">6H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 716.1118 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N07_1_" class="property pb-sprite-2" points="633.2,382.5 700,382.5 700,576 633.2,576 		"/>
                <text transform="matrix(1.0008 0 0 1 660.3295 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 660.3295 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 696.0385 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 651.1518 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">7H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 649.6518 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N08_1_" class="property pb-sprite-1" points="566.8,382.5 633.2,382.5 633.2,576 566.8,576 		"/>
                <text transform="matrix(1.0008 0 0 1 593.8705 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 593.8705 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 629.5795 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 584.6928 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">8H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 583.1928 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N09_1_" class="property pb-sprite-2" points="500.2,382.5 500.2,576 566.8,576 566.8,382.5"/>
                <text transform="matrix(1.0008 0 0 1 526.1039 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 526.1039 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 561.812 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 516.9252 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="9" y="14.8" class="mustard__fill futura-book fs__13px">9H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 515.4262 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N10_1_" class="property pb-sprite-1" points="433.7,382.5 500.2,382.5 500.2,576 433.7,576 		"/>
                <text transform="matrix(1.0008 0 0 1 460.6909 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 460.6909 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 496.3998 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 451.5131 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">10H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 450.0131 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N11_1_" class="property pb-sprite-2" points="367.1,382.5 433.7,382.5 433.7,576 367.1,576"/>
                <text transform="matrix(1.0008 0 0 1 393.9692 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 393.9692 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 429.6782 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 384.7924 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">11H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 383.2924 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N12_1_" class="property pb-sprite-1" points="300.6,382.5 367.1,382.5 367.1,576 300.6,576"/>
                <text transform="matrix(1.0008 0 0 1 326.4633 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 326.4633 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 362.1733 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 317.2866 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">12H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 315.7866 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N13_1_" class="property pb-sprite-2" points="234,382.5 300.6,382.5 300.6,576 234,576 		"/>
                <text transform="matrix(1.0008 0 0 1 260.0043 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 260.0043 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 295.7143 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 250.8276 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">13H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 249.3276 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N14_1_" class="property pb-sprite-1" points="167.5,382.5 234,382.5 234,576 167.5,576 		"/>
                <text transform="matrix(1.0008 0 0 1 193.2836 391.4138)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(1.0008 0 0 1 193.2836 572.738)" class="white__fill futura-light fs__9px">14.00</text>
                <text transform="matrix(0 -1.0008 1 0 228.9926 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 184.1069 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">14H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 182.6069 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">569.80</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <rect id="H_N15_1_" x="91.5" y="382.5" class="property pb-sprite-2" width="76" height="193.5"/>
                <text transform="matrix(1.0008 0 0 1 119.7153 391.4138)" class="white__fill futura-light fs__9px">16.00</text>
                <text transform="matrix(1.0008 0 0 1 121.809 574.0457)" class="white__fill futura-light fs__9px">16.00</text>
                <text transform="matrix(0 -1.0008 1 0 163.0571 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <g>
                    <text transform="matrix(1 0 0 1 112.8393 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">15H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 111.9623 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">651.20</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g>
                <polygon id="H_N16_1_" class="property pb-sprite-1" points="19.3,382.5 91.5,382.5 91.5,576 11.7,576 		"/>
                <text transform="matrix(1.0008 0 0 1 45.4076 391.4138)" class="white__fill futura-light fs__9px">15.15</text>
                <text transform="matrix(1.0008 0 0 1 40.1752 574.0457)" class="white__fill futura-light fs__9px">16.76</text>
                <text transform="matrix(0 -1.0008 1 0 86.9164 477.5574)" class="white__fill futura-light fs__9px">40.70</text>
                <text transform="matrix(5.355319e-02 -0.9994 0.9986 5.350985e-02 25.5917 477.558)" class="white__fill futura-light fs__9px">40.73</text>
                <g>
                    <text transform="matrix(1 0 0 1 37.683 466.1707)"><tspan x="0" y="0" class="mustard__fill futura-book fs__13px">NAVE</tspan><tspan x="5.5" y="14.8" class="mustard__fill futura-book fs__13px">16H</tspan></text>
                </g>
                <text transform="matrix(0.9992 0 0 1 35.56 495.1316)"><tspan x="0" y="0" class="white__fill futura-light fs__9px">649.32</tspan><tspan x="22.3" y="0" class="white__fill futura-light fs__9px"> m2</tspan></text>
            </g>
            <g id="LINEAS_BLANCAS_MODULO_H_2_">
                <line class="st11" x1="91.5" y1="382.5" x2="91.5" y2="576"/>
                <line class="st11" x1="167.5" y1="382.5" x2="167.5" y2="576"/>
                <line class="st11" x1="234" y1="382.5" x2="234" y2="576"/>
                <line class="st11" x1="300.6" y1="382.5" x2="300.6" y2="576"/>
                <line class="st11" x1="367.1" y1="382.5" x2="367.1" y2="576"/>
                <line class="st11" x1="433.7" y1="382.5" x2="433.7" y2="576"/>
                <line class="st11" x1="500.2" y1="382.5" x2="500.2" y2="576"/>
                <line class="st11" x1="566.8" y1="382.5" x2="566.8" y2="576"/>
                <line class="st11" x1="633.2" y1="382.5" x2="633.2" y2="576"/>
                <line class="st11" x1="700" y1="382.5" x2="700" y2="576"/>
                <line class="st11" x1="766.5" y1="382.5" x2="766.4" y2="576"/>
                <line class="st11" x1="833" y1="382.5" x2="833" y2="576"/>
                <line class="st11" x1="899.5" y1="382.5" x2="899.5" y2="576"/>
                <line class="st11" x1="966.2" y1="382.5" x2="966.2" y2="576"/>
                <line class="st11" x1="1032.7" y1="382.5" x2="1032.7" y2="576"/>
                <line class="st11" x1="1099.2" y1="382.5" x2="1099.2" y2="576"/>
            </g>
        </g>
        <g id="ETAPAS">
            <polyline class="st12" points="1366,2.3 1187.4,0 1180.6,173.7 1114.1,170.7 1106.6,383.1 18.7,383.1 0.4,843.3 1102.5,843.3 
                1155,845.4 1152.5,912.8 1336.5,920 	"/>
        </g>
        
        <a href="#!/Navetec-Gamma_II_E2_Business_Park" class="pb__condo">
            <polygon class="st0" points="19,382.3 699.5,382.3 699.5,575.8 683.8,656.5 683.8,843 0.7,845.5 	"/>
            <g>
                <text transform="matrix(1 0 0 1 284.9824 615.1338)"><tspan x="0" y="0" class="st1 futura-book st3 st4">ETAPA II</tspan><tspan x="32.5" y="22.3" class="st1 futura-book st5">15 MESES</tspan></text>
            </g>
        </a>

        
    </svg>

	</div>

</body>
</html>