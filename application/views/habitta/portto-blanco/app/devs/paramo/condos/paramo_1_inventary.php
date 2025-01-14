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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBParamoCtrl as paramo">
  
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
		</md-toolbar>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Desarrollo Habitacional</span><img class="" src="media/assets/img/logos/logo-habitta.svg" height="18">
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
			</div>
		</a>
		<!-- <md-divider></md-divider>
		<a href="" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Construcción</span><img class="" src="media/assets/img/logos/logo-construye.svg" height="34">
			</div>
		</a>
		<md-divider></md-divider>
		<a href="" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Renta de Maquinaria</span><img class="" src="media/assets/img/logos/logo-rent.svg" height="28">
			</div>
		</a> -->
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!" ng-click="close()">
			<div class="link-body link-nav">
				Inicio
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/dashboard" ng-click="close()">
			<div class="link-body link-nav">
				Dashboard
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/quote_tool" ng-click="close()">
			<div class="link-body link-nav">
				Cotizador
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Dashboard-Desarrollos" ng-click="close()">
			<div class="link-body link-nav">
				Desarrollos
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/users" ng-click="close()">
			<div class="link-body link-nav">
				Usuarios
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Cambiar_Contraseña" ng-click="close()">
			<div class="link-body link-nav">
				Cambiar contraseña
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/login" ng-click="close()">
			<div class="link-body link-nav">
				Cerrar sesión
			</div>
		</a>
		<md-divider></md-divider>
	</md-sidenav>

	<div ng-controller="sideNavCtrl" class="navbar-fixed">
		<nav class="cc-nav white" role="navigation">
			<div class="nav-wrapper">
				<div class="container">
					<ul>
						<li><a href="#!" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
						<li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
							<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
						</md-button></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div ng-class="is_scrollin">
    	<div class="plano_container">

			<div class="container mt-64">
				<div class="row quote-header">
					<div class="col s12">
						<h1 class="center-align futura-med blue-txt">PÁRAMO 1</h1>
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
					<p class="pl-40 py-2">Disponible</p>
                </div>
                <div class="color-table">
                    <div class="color-block darkgray__bg left"></div>
                    <p class="pl-40 py-2">Estratégico</p>
                </div>
				<div>
					<div class="color-block pb_lightred-bg left"></div>
					<p class="pl-40 py-2">En espera</p>
				</div>
				<div>
					<div class="color-block brown left"></div>
					<p class="pl-40 py-2">Apartado</p>
				</div>
				<div>
					<div class="color-block mustard-bg left"></div>
					<p class="pl-40 py-2">Enganchado</p>
				</div>
				<div>
					<div class="color-block pb_teal-bg left"></div>
					<p class="pl-40 py-2">Vendido</p>
				</div>
				<div>
					<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="paramo.openList()">list</i></button>
				</div>
            </div>
            
            <svg class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 988">

                <defs>
                    <style>

                        .cls-2,
                        .cls-5 {
                            font-size:8.8px;
                        }

                        .cls-10,
                        .cls-12,
                        .cls-2,
                        .cls-22,
                        .cls-3,
                        .cls-4,
                        .cls-9 {
                            fill:#fff;font-family:CenturyGothic, Century Gothic;
                        }

                        .cls-3 {
                            font-size:8.8px;
                        }

                        .cls-4 {
                            font-size:9.01px;
                        }

                        .cls-13,
                        .cls-5 {
                            fill:#fc0;
                        }

                        .cls-13,
                        .cls-18,
                        .cls-20,
                        .cls-5 {
                            font-family:CenturyGothic-Bold, Century Gothic;font-weight:700;
                        }

                        .cls-6,
                        .cls-7 {
                            fill:#e2a63c;
                        }

                        .cls-7 {
                            opacity:0.6;
                        }

                        .cls-9 {
                            font-size:9.01px;
                        }

                        .cls-10 {
                            font-size:8.8px;
                        }

                        .cls-11,
                        .cls-14,
                        .cls-16,
                        .cls-21 {
                            fill:none;
                        }

                        .cls-11,
                        .cls-14,
                        .cls-21 {
                            stroke:#fff;stroke-miterlimit:10;
                        }

                        .cls-11,
                        .cls-14 {
                            stroke-width:1.5px;
                        }

                        .cls-12,
                        .cls-13 {
                            font-size:9.01px;
                        }

                        .cls-14,
                        .cls-16 {
                            stroke-linecap:round;
                        }

                        .cls-15 {
                            fill:#b17f4a;
                        }

                        .cls-16 {
                            stroke:#1b1514;stroke-linejoin:round;stroke-width:3px;
                        }

                        .cls-17 {
                            fill:#2e2b50;
                        }

                        .cls-18 {
                            font-size:6.63px;
                        }

                        .cls-18,
                        .cls-19,
                        .cls-20 {
                            fill:#2d2a4c;
                        }

                        .cls-20 {
                            font-size:6.48px;
                        }

                        .cls-21 {
                            stroke-width:0.25px;
                        }

                        .cls-22 {
                            font-size:16.44px;
                        }

                    </style>
                </defs>
                
                
                <g id="Capa_2" data-name="Capa 2">
                    <g id="COMPLEMENTO">
                
                        <image width="1366" height="988" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/condos/paramo_1.jpg"/>
                        
                        <g class="property__active" ng-class="paramo.inmovablesClassList[0]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[0])">
                            <polygon class="property pb-sprite-1" points="1040.79 598.33 1039.28 664.89 1155.56 666.94 1156.8 598.33 1040.79 598.33"/>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1080.88, 639.3)">185.58 m2</text>
                            <text class="cls-3 futura-book" transform="translate(1086.38 605.42) scale(1.02 1)">17.51</text>
                            <text class="cls-4 futura-book" transform="translate(1049.65 642.55) rotate(-90) scale(0.98 1)">10.39</text>
                            <text class="cls-4 futura-book" transform="translate(1148.6 642.55) rotate(-90) scale(0.98 1)">10.82</text>
                            <text class="cls-3 futura-book" transform="translate(1085.57 660.8) scale(1.02 1)">17.50</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1098.36, 628.51)">01</text>
                            <polygon class="cls-6" points="1066.04 623.03 1058.35 631.1 1066.04 639.16 1066.04 623.03"/>
                            <polygon class="cls-7" points="1066.13 623.03 1066.13 639.16 1073.83 631.1 1066.13 623.03"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[1]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[1])">
                            <polygon class="property pb-sprite-2" points="1038.69 715.34 1154.12 718.51 1155.56 666.94 1039.28 664.89 1038.69 715.34"/>
                            <text class="cls-9 futura-book" transform="translate(1048.76 698.75) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1148.75 701.07) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(1084.2 712.33) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1075.81, 693.89)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1093.29, 683.1)">02</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[2]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[2])">
                            <polygon class="property pb-sprite-1" points="1037.04 766.92 1152.5 769.89 1154.12 718.51 1038.69 715.34 1037.04 766.92"/>
                            <text class="cls-9 futura-book" transform="translate(1047.05 749.4) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1147.05 751.73) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(1082.34 764.19) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1073.79, 745.42)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1091.26, 734.63)">03</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[3]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[3])">
                            <polygon class="property pb-sprite-2" points="1035.63 818.43 1151.9 820.76 1152.5 769.89 1037.04 766.92 1035.63 818.43"/>
                            <text class="cls-9 futura-book" transform="translate(1044.9 801.26) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1144.9 803.59) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(1080.91 815.39) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1070.31, 797.57)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1087.79, 786.78)">04</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[4]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[4])">
                            <polygon class="property pb-sprite-1" points="1034.82 869.32 1150.35 872.34 1151.9 820.76 1035.63 818.43 1034.82 869.32"/>
                            <text class="cls-9 futura-book" transform="translate(1044.1 852.45) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1144.1 854.78) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(1078.87 866.69) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1069.62, 848.19)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1087.1, 837.41)">05</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[5]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[5])">
                            <polygon class="property pb-sprite-2" points="1148.8 923.87 1150.35 872.34 1034.82 869.32 1033.22 920.85 1148.8 923.87"/>
                            <text class="cls-9 futura-book" transform="translate(1043.31 903.98) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1143.31 906.31) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(1078.87 917.78) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1073.86, 898.74)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 1091.34, 887.96)">06</text>
                            <polygon class="cls-6" points="1057.61 886.33 1049.92 894.39 1057.61 902.46 1057.61 886.33"/>
                            <polygon class="cls-7" points="1057.7 886.33 1057.7 902.46 1065.4 894.39 1057.7 886.33"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[6]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[6])">
                            <polygon class="property pb-sprite-1" points="970.45 974.53 973.54 872.14 918.41 872.45 918.41 974.53 970.45 974.53"/>
                            <text class="cls-10 futura-book" transform="translate(937.33 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(937.33 881.25) scale(1.02 1)">8.39</text>
                            <text class="cls-9 futura-book" transform="translate(970 934.59) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 951.61, 949.38)">131.11 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 940.57, 932.31)">07</text>
                            <polygon class="cls-6" points="945.93 885.69 938.24 893.75 945.93 901.82 945.93 885.69"/>
                            <polygon class="cls-7" points="946.02 885.69 946.02 901.82 953.72 893.75 946.02 885.69"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[7]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[7])">
                            <polygon class="property pb-sprite-2" points="865.69 872.21 865.69 974.66 918.41 974.53 918.41 872.45 865.69 872.21"/>
                            <text class="cls-10 futura-book" transform="translate(883.95 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(883.95 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(914.95 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 898.74, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 887.7, 927.74)">08</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[8]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[8])">
                            <polygon class="property pb-sprite-1" points="812.96 974.59 813.03 872.41 865.69 872.21 865.69 974.66 812.96 974.59"/>
                            <text class="cls-10 futura-book" transform="translate(830.3 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(830.3 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(861.3 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 845.1, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 834.06, 927.74)">09</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[9]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[9])">
                            <polygon class="property pb-sprite-2" points="761.14 974.49 761.14 872.29 813.03 872.41 812.96 974.59 761.14 974.49"/>
                            <text class="cls-10 futura-book" transform="translate(779.25 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(779.25 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(810.24 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 794.04, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 783, 927.74)">10</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[10]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[10])">
                            <polygon class="property pb-sprite-1" points="708.26 974.59 708.2 872.34 761.14 872.29 761.14 974.49 708.26 974.59"/>
                            <text class="cls-10 futura-book" transform="translate(725.59 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(725.59 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(756.59 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 740.39, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 729.35, 927.74)">11</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[11]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[11])">
                            <polygon class="property pb-sprite-2" points="655.39 974.54 655.48 872.48 708.2 872.34 708.26 974.59 655.39 974.54"/>
                            <text class="cls-10 futura-book" transform="translate(674.51 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(674.51 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(703.85 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 687.65, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 676.61, 927.74)">12</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[12]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[12])">
                            <polygon class="property pb-sprite-1" points="603.51 974.54 603.24 872.28 655.48 872.48 655.39 974.54 603.51 974.54"/>
                            <text class="cls-10 futura-book" transform="translate(620.86 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(620.86 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(651.85 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 635.65, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 624.61, 927.74)">13</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[13]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[13])">
                            <polygon class="property pb-sprite-2" points="550.55 974.7 550.72 872.34 603.24 872.28 603.51 974.54 550.55 974.7"/>
                            <text class="cls-10 futura-book" transform="translate(569.8 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(569.8 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(599.14 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 582.94, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 571.9, 927.74)">14</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[14]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[14])">
                            <polygon class="property pb-sprite-1" points="497.89 974.7 497.86 872.34 550.72 872.34 550.55 974.7 497.89 974.7"/>
                            <text class="cls-10 futura-book" transform="translate(516.15 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(516.15 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(547.14 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 530.94, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 519.9, 927.74)">15</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[15]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[15])">
                            <polygon class="property pb-sprite-2" points="445.86 974.7 445.86 872.34 497.86 872.34 497.89 974.7 445.86 974.7"/>
                            <text class="cls-10 futura-book" transform="translate(463.89 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(463.89 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(493.23 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 477.03, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 465.99, 927.74)">16</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[16]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[16])">
                            <polygon class="property pb-sprite-1" points="393.07 974.73 393.15 872.34 445.86 872.34 445.86 974.7 393.07 974.73"/>
                            <text class="cls-10 futura-book" transform="translate(410.24 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(410.24 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(441.24 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 425.03, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 414, 927.74)">17</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[17]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[17])">
                            <polygon class="property pb-sprite-2" points="340.24 974.73 340.34 872.34 393.15 872.34 393.07 974.73 340.24 974.73"/>
                            <text class="cls-10 futura-book" transform="translate(359.18 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(359.18 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(388.53 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 372.32, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 361.28, 927.74)">18</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[18]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[18])">
                            <polygon class="property pb-sprite-1" points="288.31 974.59 288.41 872.41 340.34 872.34 340.24 974.73 288.31 974.59"/>
                            <text class="cls-10 futura-book" transform="translate(305.54 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(305.54 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(336.53 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 320.33, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 309.29, 927.74)">19</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[19]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[19])">
                            <polygon class="property pb-sprite-2" points="235.58 974.56 235.58 872.34 288.41 872.41 288.31 974.59 235.58 974.56"/>
                            <text class="cls-10 futura-book" transform="translate(253.98 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(253.98 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(283.32 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 267.12, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 256.08, 927.74)">20</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[20]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[20])">
                            <polygon class="property pb-sprite-1" points="182.69 974.73 182.76 872.28 235.58 872.34 235.58 974.56 182.69 974.73"/>
                            <text class="cls-10 futura-book" transform="translate(200.33 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(200.33 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(231.32 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 215.12, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 204.08, 927.74)">21</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[21]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[21])">
                            <path class="property pb-sprite-2" d="M130.79,974.46l-.14-102.18s52.18-1.48,52.11,0-.07,102.45-.07,102.45Z"/>
                            <text class="cls-10 futura-book" transform="translate(149.27 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(149.27 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(178.61 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 162.41, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 151.37, 927.74)">22</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[22]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[22])">
                            <polygon class="property pb-sprite-1" points="78 974.66 78.07 872.34 130.65 872.28 130.79 974.46 78 974.66"/>
                            <text class="cls-10 futura-book" transform="translate(95.62 970.72) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(95.62 881.25) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(126.62 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 110.41, 944.81)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 99.38, 927.74)">23</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[23]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[23])">
                            <polygon class="property pb-sprite-2" points="6.83 974.53 6.28 872.34 78.07 872.34 78 974.66 6.83 974.53"/>
                            <text class="cls-10 futura-book" transform="translate(31.42 970.72) scale(1.02 1)">10.85</text>
                            <text class="cls-10 futura-book" transform="translate(30.94 881.25) scale(1.02 1)">10.92</text>
                            <text class="cls-9 futura-book" transform="translate(74.03 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-9 futura-book" transform="translate(17.8 936.24) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 50.44, 949.65)">174.14 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 39.4, 932.58)">24</text>
                            <polygon class="cls-6" points="43.18 885.69 35.49 893.75 43.18 901.82 43.18 885.69"/>
                            <polygon class="cls-7" points="43.28 885.69 43.28 901.82 50.97 893.75 43.28 885.69"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[24]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[24])">
                            <polygon class="property pb-sprite-1" points="137.67 812.45 136.78 754.9 6.14 755.17 6.14 812.45 137.67 812.45"/>
                            <text class="cls-9 futura-book" transform="translate(16.99 792.23) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-9 futura-book" transform="translate(133.51 792.95) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-10 futura-book" transform="translate(60.81 809.26) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 49.18, 788.61)">179.81 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 66.66, 777.83)">25</text>
                            <polygon class="cls-6" points="111.96 775.61 104.26 783.67 111.96 791.74 111.96 775.61"/>
                            <polygon class="cls-7" points="112.05 775.61 112.05 791.74 119.75 783.67 112.05 775.61"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[25]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[25])">
                            <polygon class="property pb-sprite-2" points="5.35 703.44 136.78 703.41 136.78 754.9 6.14 755.17 5.35 703.44"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 735.74) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 736.45) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 751.14) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 733.73)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 722.95)">26</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[26]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[26])">
                            <polygon class="property pb-sprite-1" points="5.38 652.78 137 652.87 136.78 703.41 5.35 703.44 5.38 652.78"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 684.42) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 685.13) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 699.83) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 682.41)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 671.63)">27</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[27]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[27])">
                            <polygon class="property pb-sprite-2" points="5.07 601.22 135.89 601.29 137 652.87 5.38 652.78 5.07 601.22"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 634.75) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 635.47) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 648.55) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 631.13)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 620.35)">28</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[28]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[28])">
                            <polygon class="property pb-sprite-1" points="4.64 549.76 136.13 549.61 135.89 601.29 5.07 601.22 4.64 549.76"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 583.43) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 584.15) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 597.23) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 581.43)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 570.64)">29</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[29]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[29])">
                            <polygon class="property pb-sprite-2" points="4.7 498.84 135.89 498.91 136.13 549.61 4.64 549.76 4.7 498.84"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 530.87) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 531.58) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 546.28) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 528.86)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 518.08)">30</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[30]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[30])">
                            <polygon class="property pb-sprite-1" points="4.63 447.34 136.13 447.21 135.89 498.91 4.7 498.84 4.63 447.34"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 479.55) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 480.26) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 494.96) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 477.54)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 466.76)">31</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[31]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[31])">
                            <polygon class="property pb-sprite-2" points="4.63 395.85 135.4 395.78 136.13 447.21 4.63 447.34 4.63 395.85"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 428.05) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 428.77) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 443.46) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 426.04)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 415.26)">32</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[32]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[32])">
                            <polygon class="property pb-sprite-1" points="3.83 344.93 135.4 344.99 135.4 395.78 4.63 395.85 3.83 344.93"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 376.74) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 377.45) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 392.14) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 374.73)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 363.95)">33</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[33]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[33])">
                            <polygon class="property pb-sprite-2" points="3.8 293.33 135.4 293.46 135.4 344.99 3.83 344.93 3.8 293.33"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 326.76) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 327.48) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 342.17) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 324.75)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 313.97)">34</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[34]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[34])">
                            <polygon class="property pb-sprite-1" points="3.87 241.87 134.44 241.97 135.4 293.46 3.8 293.33 3.87 241.87"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 275.45) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 276.16) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 289.24) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 273.44)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 262.66)">35</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[35]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[35])">
                            <polygon class="property pb-sprite-2" points="3.92 191.18 134.53 191.18 134.44 241.97 3.87 241.87 3.92 191.18"/>
                            <text class="cls-9 futura-book" transform="translate(15.82 221.36) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(132.35 222.07) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(59.65 236.76) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 48.02, 219.35)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 65.5, 208.57)">36</text>
                            <polygon class="cls-6" points="111.96 206.44 104.26 214.51 111.96 222.58 111.96 206.44"/>
                            <polygon class="cls-7" points="112.05 206.44 112.05 222.58 119.75 214.51 112.05 206.44"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[36]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[36])">
                            <polygon class="property pb-sprite-1" points="42.83 131.45 42.76 2.78 95.62 2.78 95.62 131.45 42.83 131.45"/>
                            <text class="cls-10 futura-book" transform="translate(61.54 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(60.81 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(54.55 76.45) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 80.09, 86.26)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 69.06, 69.19)">37</text>
                            <polygon class="cls-6" points="68.51 96.54 60.81 104.61 68.51 112.67 68.51 96.54"/>
                            <polygon class="cls-7" points="68.6 96.54 68.6 112.67 76.3 104.61 68.6 96.54"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[37]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[37])">
                            <polygon class="property pb-sprite-2" points="148.41 131.38 148.36 2.66 95.62 2.78 95.62 131.45 148.41 131.38"/>
                            <text class="cls-10 futura-book" transform="translate(115.43 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(114.7 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(107.19 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 133.98, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 122.95, 72.42)">38</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[38]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[38])">
                            <polygon class="property pb-sprite-1" points="200.38 131.28 200.41 2.58 148.36 2.66 148.41 131.38 200.38 131.28"/>
                            <text class="cls-10 futura-book" transform="translate(166.66 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(165.93 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(158.42 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 185.21, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 174.17, 72.42)">39</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[39]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[39])">
                            <polygon class="property pb-sprite-2" points="253.15 131.28 253.15 2.66 200.41 2.58 200.38 131.28 253.15 131.28"/>
                            <text class="cls-10 futura-book" transform="translate(219.76 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(219.03 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(211.52 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 238.31, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 227.28, 72.42)">40</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[40]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[40])">
                            <polygon class="property pb-sprite-1" points="306 131.32 305.96 2.76 253.15 2.66 253.15 131.28 306 131.32"/>
                            <text class="cls-10 futura-book" transform="translate(272.87 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(272.13 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(264.62 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 291.42, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 280.38, 72.42)">41</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[41]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[41])">
                            <polygon class="property pb-sprite-2" points="357.89 131.38 357.93 2.58 305.96 2.76 306 131.32 357.89 131.38"/>
                            <text class="cls-10 futura-book" transform="translate(325.34 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(324.61 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(317.1 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 343.89, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 332.85, 72.42)">42</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[42]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[42])">
                            <polygon class="property pb-sprite-1" points="410.6 131.43 410.7 2.61 357.93 2.58 357.89 131.38 410.6 131.43"/>
                            <text class="cls-10 futura-book" transform="translate(378.13 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(377.4 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(369.89 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 396.69, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 385.65, 72.42)">43</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[43]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[43])">
                            <polygon class="property pb-sprite-2" points="463.36 131.28 463.46 2.71 410.7 2.61 410.6 131.43 463.36 131.28"/>
                            <text class="cls-10 futura-book" transform="translate(429.68 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(428.95 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(421.43 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 448.23, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 437.19, 72.42)">44</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[44]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[44])">
                            <polygon class="property pb-sprite-1" points="515.51 131.28 515.39 2.61 463.46 2.71 463.36 131.28 515.51 131.28"/>
                            <polygon class="cls-6" points="490.59 97.47 482.9 105.54 490.59 113.61 490.59 97.47"/>
                            <polygon class="cls-7" points="490.69 97.47 490.69 113.61 498.38 105.54 490.69 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(482.47 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(481.74 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(474.22 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 501.02, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 489.98, 72.42)">45</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[45]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[45])">
                            <polygon class="property pb-sprite-2" points="568.26 131.38 568.2 2.44 515.39 2.61 515.51 131.28 568.26 131.38"/>
                            <polygon class="cls-6" points="541.29 97.47 533.59 105.54 541.29 113.61 541.29 97.47"/>
                            <polygon class="cls-7" points="541.38 97.47 541.38 113.61 549.08 105.54 541.38 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(534.05 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(533.31 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(525.8 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 552.6, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 541.55, 72.42)">46</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[46]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[46])">
                            <polygon class="property pb-sprite-1" points="621.07 131.38 621.07 2.58 568.2 2.44 568.26 131.38 621.07 131.38"/>
                            <polygon class="cls-6" points="595.66 97.47 587.97 105.54 595.66 113.61 595.66 97.47"/>
                            <polygon class="cls-7" points="595.75 97.47 595.75 113.61 603.45 105.54 595.75 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(586.74 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(586.01 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(578.5 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 605.29, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 594.25, 72.42)">47</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[47]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[47])">
                            <polygon class="property pb-sprite-2" points="673 131.48 673 2.51 621.07 2.58 621.07 131.38 673 131.48"/>
                            <polygon class="cls-6" points="648.84 97.47 641.14 105.54 648.84 113.61 648.84 97.47"/>
                            <polygon class="cls-7" points="648.93 97.47 648.93 113.61 656.63 105.54 648.93 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(640.47 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(639.74 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(632.22 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 659.02, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 647.98, 72.42)">48</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[48]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[48])">
                            <polygon class="property pb-sprite-1" points="725.69 131.32 725.81 2.92 673 2.51 673 131.48 725.69 131.32"/>
                            <polygon class="cls-6" points="701.53 97.47 693.84 105.54 701.53 113.61 701.53 97.47"/>
                            <polygon class="cls-7" points="701.63 97.47 701.63 113.61 709.32 105.54 701.63 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(692.63 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(691.9 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(684.39 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 711.18, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 700.15, 72.42)">49</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[49]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[49])">
                            <polygon class="property pb-sprite-2" points="778.57 131.28 778.57 2.56 725.81 2.92 725.69 131.32 778.57 131.28"/>
                            <text class="cls-10 futura-book" transform="translate(745.51 15.51) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(744.79 127.71) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(737.27 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 764.07, 89.49)">160.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 753.03, 72.42)">50</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[50]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[50])">
                            <polygon class="property pb-sprite-1" points="844.28 131.43 847.43 2.66 778.57 2.56 778.57 131.28 844.28 131.43"/>
                            <polygon class="cls-6" points="813.61 97.47 805.92 105.54 813.61 113.61 813.61 97.47"/>
                            <polygon class="cls-7" points="813.7 97.47 813.7 113.61 821.4 105.54 813.7 97.47"/>
                            <text class="cls-10 futura-book" transform="translate(802.27 15.51) scale(1.02 1)">10.48</text>
                            <text class="cls-10 futura-book" transform="translate(801.54 127.71) scale(1.02 1)">10.00</text>
                            <text class="cls-9 futura-book" transform="translate(789.07 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-9 futura-book" transform="translate(842.88 79.68) rotate(-90) scale(0.98 1)">20.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 822.48, 89.49)">204.84 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 811.44, 72.42)">51</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[51]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[51])">
                            <polygon class="property pb-sprite-2" points="906.85 40.83 1038.74 44.01 1037.9 106.11 905.54 102.07 906.85 40.83"/>
                            <text class="cls-9 futura-book" transform="translate(916.45 81.48) rotate(-90) scale(0.98 1)">9.65</text>
                            <text class="cls-9 futura-book" transform="translate(1032.98 98.34) rotate(-90) scale(0.98 1)">7.16</text>
                            <text class="cls-9 futura-book" transform="translate(1032.98 65.67) rotate(-90) scale(0.98 1)">2.48</text>
                            <text class="cls-10 futura-book" transform="translate(963.36 52.72) scale(1.02 1)">19.89</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 951.96, 82.7)">192.82 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 969.44, 71.92)">52</text>
                            <polygon class="cls-6" points="937.36 65.44 929.67 73.51 937.36 81.58 937.36 65.44"/>
                            <polygon class="cls-7" points="937.46 65.44 937.46 81.58 945.15 73.51 937.46 65.44"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[52]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[52])">
                            <polygon class="property pb-sprite-1" points="905.54 102.07 1037.9 106.11 1036.52 156.79 904.88 153.63 905.54 102.07"/>
                            <text class="cls-9 futura-book" transform="translate(916.45 135.35) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1031.33 139.3) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(960.05 114.66) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 948.65, 139.8)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 966.13, 129.02)">53</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[53]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[53])">
                            <polygon class="property pb-sprite-2" points="904.88 153.63 1036.52 156.79 1035.42 208.29 903.18 205.25 904.88 153.63"/>
                            <text class="cls-9 futura-book" transform="translate(914.8 186.61) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1029.67 190.55) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(958.4 165.92) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 947, 191.06)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 964.47, 180.28)">54</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[54]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[54])">
                            <polygon class="property pb-sprite-1" points="903.18 205.25 1035.42 208.29 1033.63 259.11 901.68 255.95 903.18 205.25"/>
                            <text class="cls-9 futura-book" transform="translate(913.14 237.83) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1028.02 241.77) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(956.74 217.14) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 945.35, 242.28)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 962.83, 231.5)">55</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[55]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[55])">
                            <polygon class="property pb-sprite-2" points="901.68 255.95 1033.63 259.11 1032.32 310.74 900.93 307.72 901.68 255.95"/>
                            <text class="cls-9 futura-book" transform="translate(911.49 289.54) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1026.37 293.49) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(955.09 268.85) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 943.69, 293.99)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 961.17, 283.21)">56</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[56]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[56])">
                            <polygon class="property pb-sprite-1" points="900.93 307.72 1032.32 310.74 1031.43 362.1 899.35 359.14 900.93 307.72"/>
                            <text class="cls-9 futura-book" transform="translate(909.84 340.8) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1024.72 344.74) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(953.44 320.1) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 942.04, 345.25)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 959.52, 334.47)">57</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[57]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[57])">
                            <polygon class="property pb-sprite-2" points="899.35 359.14 1031.43 362.1 1030.07 412.97 897.87 409.9 899.35 359.14"/>
                            <text class="cls-9 futura-book" transform="translate(908.19 392.43) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1023.06 396.38) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(951.78 371.74) scale(1.02 1)">20.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 940.39, 396.88)">160.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 957.86, 386.1)">58</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[58]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[58])">
                            <polygon class="property pb-sprite-1" points="897.14 464.4 1027.9 464.35 1030.07 412.97 897.87 409.9 897.14 464.4"/>
                            <text class="cls-9 futura-book" transform="translate(908.19 444.14) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(1023.06 448.09) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(951.78 423.45) scale(1.02 1)">20.00</text>
                            <text class="cls-10 futura-book" transform="translate(951.78 460.65) scale(1.02 1)">20.01</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 940.39, 446.98)">164.84 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 957.86, 436.2)">59</text>
                            <polygon class="cls-6" points="925.82 430.7 918.13 438.76 925.82 446.83 925.82 430.7"/>
                            <polygon class="cls-7" points="925.91 430.7 925.91 446.83 933.61 438.76 925.91 430.7"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[59]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[59])">
                            <path class="property pb-sprite-2" d="M980.62,598.11l-3.36,112-54.93.11s-1-111.32-.07-112.06S980.62,598.11,980.62,598.11Z"/>
                            <polygon class="cls-6" points="952.27 612.32 944.57 620.38 952.27 628.45 952.27 612.32"/>
                            <polygon class="cls-7" points="952.36 612.32 952.36 628.45 960.06 620.38 952.36 612.32"/>
                            <text class="cls-10 futura-book" transform="translate(943.19 606.54) scale(1.02 1)">8.61</text>
                            <text class="cls-10 futura-book" transform="translate(940.8 705.82) scale(1.02 1)">8.39</text>
                            <text class="cls-9 futura-book" transform="translate(974.27 664.25) rotate(-90) scale(0.98 1)">17.51</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 956.78, 675.68)">150.52 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 945.74, 658.6)">60</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[60]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[60])">
                            <polygon class="property pb-sprite-1" points="922.26 598.2 922.33 710.26 869.54 710.2 869.68 598.11 922.26 598.2"/>
                            <text class="cls-10 futura-book" transform="translate(888.06 606.54) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(887.33 705.82) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(917.49 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 903.3, 675.67)">140.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 892.27, 658.6)">61</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[61]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[61])">
                            <polygon class="property pb-sprite-2" points="869.68 598.11 869.54 710.2 817.58 710.26 817.51 598.13 869.68 598.11"/>
                            <text class="cls-10 futura-book" transform="translate(835.58 606.54) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(834.85 705.82) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(865.01 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 850.83, 675.67)">140.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 839.79, 658.6)">62</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[62]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[62])">
                            <polygon class="property pb-sprite-1" points="817.51 598.13 817.58 710.26 764.78 710.26 764.85 598.06 817.51 598.13"/>
                            <text class="cls-10 futura-book" transform="translate(782.41 606.54) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(781.68 705.82) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(813.5 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 797.65, 675.67)">140.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 786.61, 658.61)">63</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[63]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[63])">
                            <polygon class="property pb-sprite-2" points="764.85 598.06 764.78 710.26 712.06 710.33 711.99 598.33 764.85 598.06"/>
                            <text class="cls-10 futura-book" transform="translate(730.4 606.54) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(729.67 705.82) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(761.49 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 745.65, 675.67)">140.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 734.61, 658.61)">64</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[64]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[64])">
                            <polygon class="property pb-sprite-1" points="711.99 598.33 712.06 710.33 655.55 710.26 655.41 598.13 711.99 598.33"/>
                            <polygon class="cls-6" points="685.11 612.32 677.42 620.38 685.11 628.45 685.11 612.32"/>
                            <polygon class="cls-7" points="685.2 612.32 685.2 628.45 692.9 620.38 685.2 612.32"/>
                            <text class="cls-10 futura-book" transform="translate(675.33 606.54) scale(1.02 1)">8.60</text>
                            <text class="cls-10 futura-book" transform="translate(674.6 705.82) scale(1.02 1)">8.60</text>
                            <text class="cls-9 futura-book" transform="translate(706.42 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 690.57, 675.67)">150.50 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 679.54, 658.6)">65</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[65]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[65])">
                            <polygon class="property pb-sprite-2" points="655.41 598.13 655.55 710.26 596.7 710.13 596.42 598.06 655.41 598.13"/>
                            <polygon class="cls-6" points="628.5 612.32 620.81 620.38 628.5 628.45 628.5 612.32"/>
                            <polygon class="cls-7" points="628.6 612.32 628.6 628.45 636.29 620.38 628.6 612.32"/>
                            <text class="cls-10 futura-book" transform="translate(618.71 606.54) scale(1.02 1)">9.00</text>
                            <text class="cls-10 futura-book" transform="translate(617.98 705.82) scale(1.02 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(649.8 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 632.3, 675.67)">157.50 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 621.26, 658.6)">66</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[66]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[66])">
                            <polygon class="property pb-sprite-1" points="596.42 598.06 596.7 710.13 537.64 710.2 537.71 598.2 596.42 598.06"/>
                            <polygon class="cls-6" points="567.78 612.32 560.08 620.38 567.78 628.45 567.78 612.32"/>
                            <polygon class="cls-7" points="567.87 612.32 567.87 628.45 575.57 620.38 567.87 612.32"/>
                            <text class="cls-10 futura-book" transform="translate(558.52 606.54) scale(1.02 1)">9.00</text>
                            <text class="cls-10 futura-book" transform="translate(557.78 705.82) scale(1.02 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(591.26 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 573.76, 675.67)">157.50 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 562.72, 658.6)">67</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[67]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[67])">
                            <polygon class="property pb-sprite-2" points="478.64 598.01 537.71 598.2 537.64 710.2 478.85 710.14 478.64 598.01"/>
                            <polygon class="cls-6" points="508.15 612.32 500.46 620.38 508.15 628.45 508.15 612.32"/>
                            <polygon class="cls-7" points="508.25 612.32 508.25 628.45 515.94 620.38 508.25 612.32"/>
                            <text class="cls-10 futura-book" transform="translate(500.41 606.54) scale(1.02 1)">9.00</text>
                            <text class="cls-10 futura-book" transform="translate(499.68 705.82) scale(1.02 1)">8.93</text>
                            <text class="cls-9 futura-book" transform="translate(533.15 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-9 futura-book" transform="translate(487.26 664.25) rotate(-90) scale(0.98 1)">17.50</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 515.66, 675.67)">156.89 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 504.62, 658.61)">68</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[68]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[68])">
                            <polygon class="property pb-sprite-1" points="479.35 812.51 478.85 710.14 537.64 710.2 537.64 812.65 479.35 812.51"/>
                            <polygon class="cls-6" points="508.15 783.63 500.46 791.7 508.15 799.77 508.15 783.63"/>
                            <polygon class="cls-7" points="508.25 783.63 508.25 799.77 515.94 791.7 508.25 783.63"/>
                            <text class="cls-10 futura-book" transform="translate(500.41 720.52) scale(1.02 1)">8.93</text>
                            <text class="cls-10 futura-book" transform="translate(499.68 810.12) scale(1.02 1)">8.87</text>
                            <text class="cls-9 futura-book" transform="translate(533.15 766.93) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-9 futura-book" transform="translate(488.91 766.93) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 515.66, 778.36)">142.38 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 504.62, 761.29)">69</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[69]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[69])">
                            <polygon class="property pb-sprite-2" points="537.64 812.65 537.64 710.2 596.7 710.13 596.54 812.55 537.64 812.65"/>
                            <text class="cls-10 futura-book" transform="translate(559.2 720.52) scale(1.02 1)">9.00</text>
                            <text class="cls-10 futura-book" transform="translate(558.47 810.12) scale(1.02 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(591.94 770.16) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 574.45, 781.58)">144.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 563.41, 764.52)">70</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[70]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[70])">
                            <polygon class="property pb-sprite-1" points="596.54 812.55 596.7 710.13 655.55 710.26 655.48 812.51 596.54 812.55"/>
                            <text class="cls-10 futura-book" transform="translate(619.18 720.52) scale(1.02 1)">9.00</text>
                            <text class="cls-10 futura-book" transform="translate(618.45 810.12) scale(1.02 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(650.26 770.16) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 632.77, 781.59)">144.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 621.73, 764.51)">71</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[71]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[71])">
                            <polygon class="property pb-sprite-2" points="655.48 812.51 655.55 710.26 712.06 710.33 711.85 812.45 655.48 812.51"/>
                            <text class="cls-10 futura-book" transform="translate(676.26 720.52) scale(1.02 1)">8.60</text>
                            <text class="cls-10 futura-book" transform="translate(675.52 810.12) scale(1.02 1)">8.60</text>
                            <text class="cls-9 futura-book" transform="translate(707.34 770.16) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 691.5, 781.58)">137.60 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 680.47, 764.52)">72</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[72]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[72])">
                            <polygon class="property pb-sprite-1" points="711.85 812.45 712.06 710.33 764.78 710.26 764.71 812.38 711.85 812.45"/>
                            <text class="cls-10 futura-book" transform="translate(729.38 720.52) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(728.65 810.12) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(760.46 771.77) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 744.62, 783.2)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 733.58, 766.13)">73</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[73]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[73])">
                            <polygon class="property pb-sprite-2" points="764.71 812.38 764.78 710.26 817.58 710.26 817.44 812.51 764.71 812.38"/>
                            <text class="cls-10 futura-book" transform="translate(782.97 720.52) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(782.24 810.12) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(814.05 771.77) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 798.21, 783.2)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 787.17, 766.13)">74</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[74]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[74])">
                            <polygon class="property pb-sprite-1" points="817.44 812.51 817.58 710.26 869.54 710.2 869.52 812.55 817.44 812.51"/>
                            <text class="cls-10 futura-book" transform="translate(835.14 720.52) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(834.4 810.12) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(864.57 771.77) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 850.38, 783.2)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 839.34, 766.13)">75</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[75]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[75])">
                            <polygon class="property pb-sprite-2" points="869.52 812.55 869.54 710.2 922.33 710.26 922.33 812.51 869.52 812.55"/>
                            <text class="cls-10 futura-book" transform="translate(887.31 720.52) scale(1.02 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(886.58 810.12) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(918.4 771.77) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 902.56, 783.2)">128.00 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 891.52, 766.13)">76</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[76]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[76])">
                            <polygon class="property pb-sprite-1" points="922.33 812.51 922.33 710.26 977.26 710.14 975.06 812.51 922.33 812.51"/>
                            <polygon class="cls-6" points="950.62 783.63 942.92 791.7 950.62 799.77 950.62 783.63"/>
                            <polygon class="cls-7" points="950.71 783.63 950.71 799.77 958.4 791.7 950.71 783.63"/>
                            <text class="cls-10 futura-book" transform="translate(942.69 720.52) scale(1.02 1)">8.39</text>
                            <text class="cls-10 futura-book" transform="translate(941.96 810.12) scale(1.02 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(972.13 768.55) rotate(-90) scale(0.98 1)">16.00</text>
                            <text class="cls-12 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 956.28, 779.97)">131.11 m2</text>
                            <text class="cls-13 futura-book" transform="matrix(-0.01, -0.98, 1, -0.01, 945.24, 762.9)">77</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[77]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[77])">
                            <polygon class="property pb-sprite-2" points="718.94 538.42 720.52 484.59 835.3 486.89 833.65 538.42 718.94 538.42"/>
                            <text class="cls-9 futura-book" transform="translate(730.86 519.97) rotate(-90) scale(0.98 1)">8.42</text>
                            <text class="cls-9 futura-book" transform="translate(830.86 522.3) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(766.43 535.38) scale(1.02 1)">17.51</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 751.49, 516.35)">143.70 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 768.97, 505.57)">78</text>
                            <polygon class="cls-6" points="809.71 503.44 802.01 511.5 809.71 519.57 809.71 503.44"/>
                            <polygon class="cls-7" points="809.8 503.44 809.8 519.57 817.5 511.5 809.8 503.44"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[78]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[78])">
                            <polygon class="property pb-sprite-1" points="721.88 426.44 836.74 429.36 835.3 486.89 720.52 484.59 721.88 426.44"/>
                            <text class="cls-10 futura-book" transform="translate(766.43 481.31) scale(1.02 1)">17.50</text>
                            <text class="cls-9 futura-book" transform="translate(733.93 463.82) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(833.93 466.15) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 756.21, 460.2)">157.50 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 773.69, 449.42)">79</text>
                            <polygon class="cls-6" points="812.77 447.28 805.08 455.35 812.77 463.42 812.77 447.28"/>
                            <polygon class="cls-7" points="812.87 447.28 812.87 463.42 820.56 455.35 812.87 447.28"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[79]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[79])">
                            <polygon class="property pb-sprite-2" points="723.55 368.82 838.17 371.92 836.74 429.36 721.88 426.44 723.55 368.82"/>
                            <text class="cls-10 futura-book" transform="translate(766.68 422.84) scale(1.02 1)">17.50</text>
                            <text class="cls-9 futura-book" transform="translate(734.18 405.34) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(834.18 407.67) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 756.47, 401.72)">157.50 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 773.95, 390.94)">80</text>
                            <polygon class="cls-6" points="813.03 388.8 805.33 396.87 813.03 404.94 813.03 388.8"/>
                            <polygon class="cls-7" points="813.12 388.8 813.12 404.94 820.82 396.87 813.12 388.8"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[80]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[80])">
                            <polygon class="property pb-sprite-1" points="724.46 311.28 839.74 313.7 838.17 371.92 723.55 368.82 724.46 311.28"/>
                            <text class="cls-10 futura-book" transform="translate(767.78 366.24) scale(1.02 1)">17.50</text>
                            <text class="cls-9 futura-book" transform="translate(735.28 348.75) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-9 futura-book" transform="translate(835.28 351.07) rotate(-90) scale(0.98 1)">9.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 757.57, 345.12)">157.50 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 775.05, 334.34)">81</text>
                            <polygon class="cls-6" points="814.13 332.21 806.43 340.27 814.13 348.34 814.13 332.21"/>
                            <polygon class="cls-7" points="814.22 332.21 814.22 348.34 821.91 340.27 814.22 332.21"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[81]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[81])">
                            <polygon class="property pb-sprite-2" points="726.93 247.04 841.44 250.02 839.74 313.7 724.46 311.28 726.93 247.04"/>
                            <text class="cls-10 futura-book" transform="translate(769.7 304.92) scale(1.02 1)">17.50</text>
                            <text class="cls-9 futura-book" transform="translate(737.19 289.04) rotate(-90) scale(0.98 1)">10.00</text>
                            <text class="cls-9 futura-book" transform="translate(837.2 291.37) rotate(-90) scale(0.98 1)">10.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 761.14, 283.8)">175.00m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 778.61, 273.02)">82</text>
                            <polygon class="cls-6" points="816.04 270.88 808.35 278.95 816.04 287.02 816.04 270.88"/>
                            <polygon class="cls-7" points="816.13 270.88 816.13 287.02 823.83 278.95 816.13 270.88"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[82]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[82])">
                            <polygon class="property pb-sprite-1" points="727.41 191.13 842.94 191.13 841.44 250.02 726.93 247.04 727.41 191.13"/>
                            <text class="cls-10 futura-book" transform="translate(772.08 243.26) scale(1.02 1)">17.50</text>
                            <text class="cls-10 futura-book" transform="translate(775.77 201.16) scale(1.02 1)">17.51</text>
                            <text class="cls-9 futura-book" transform="translate(739.58 225.76) rotate(-90) scale(0.98 1)">8.78</text>
                            <text class="cls-9 futura-book" transform="translate(839.58 228.09) rotate(-90) scale(0.98 1)">9.21</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 761.87, 225.37)">157.41 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 779.34, 214.59)">83</text>
                            <polygon class="cls-6" points="818.42 209.23 810.73 217.29 818.42 225.36 818.42 209.23"/>
                            <polygon class="cls-7" points="818.52 209.23 818.52 225.36 826.21 217.29 818.52 209.23"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[83]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[83])">
                            <polygon class="property pb-sprite-2" points="310.61 191.08 416.07 191.18 416.13 248.56 311.41 248.56 310.61 191.08"/>
                            <text class="cls-9 futura-book" transform="translate(320.67 226.43) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-9 futura-book" transform="translate(414.06 228.76) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-10 futura-book" transform="translate(351.28 243.46) scale(1.02 1)">16.00</text>
                            <text class="cls-10 futura-book" transform="translate(349.8 200.9) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 339.65, 222.81)">143.84 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 357.13, 212.03)">84</text>
                            <polygon class="cls-6" points="395.14 210.4 387.44 218.47 395.14 226.53 395.14 210.4"/>
                            <polygon class="cls-7" points="395.23 210.4 395.23 226.53 402.93 218.47 395.23 210.4"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[84]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[84])">
                            <polygon class="property pb-sprite-1" points="311.41 248.56 416.13 248.56 415.99 299.38 311.41 299.45 311.41 248.56"/>
                            <text class="cls-9 futura-book" transform="translate(320.67 282.24) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(414.06 282.96) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(351.28 296.04) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 339.65, 278.62)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 357.13, 267.84)">85</text>
                            <polygon class="cls-6" points="395.14 264.59 387.44 272.66 395.14 280.73 395.14 264.59"/>
                            <polygon class="cls-7" points="395.23 264.59 395.23 280.73 402.93 272.66 395.23 264.59"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[85]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[85])">
                            <polygon class="property pb-sprite-2" points="311.41 299.45 415.99 299.38 415.92 350.86 311.41 351.01 311.41 299.45"/>
                            <text class="cls-9 futura-book" transform="translate(320.67 332.79) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(414.06 333.5) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(351.28 346.59) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 339.65, 329.17)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 357.13, 318.39)">86</text>
                            <polygon class="cls-6" points="395.14 315.14 387.44 323.21 395.14 331.27 395.14 315.14"/>
                            <polygon class="cls-7" points="395.23 315.14 395.23 331.27 402.93 323.21 395.23 315.14"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[86]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[86])">
                            <polygon class="property pb-sprite-1" points="311.41 351.01 415.92 350.86 416.82 402.41 311.23 402.44 311.41 351.01"/>
                            <text class="cls-9 futura-book" transform="translate(322.33 384.8) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.72 385.52) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(352.93 398.59) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 341.3, 381.18)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 358.78, 370.4)">87</text>
                            <polygon class="cls-6" points="396.79 367.15 389.1 375.22 396.79 383.28 396.79 367.15"/>
                            <polygon class="cls-7" points="396.88 367.15 396.88 383.28 404.58 375.22 396.88 367.15"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[87]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[87])">
                            <polygon class="property pb-sprite-2" points="311.23 402.44 416.82 402.41 416.88 453.29 312 453.21 311.23 402.44"/>
                            <text class="cls-9 futura-book" transform="translate(322.33 434.34) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.72 435.05) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(352.93 448.13) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 341.3, 430.71)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 358.78, 419.93)">88</text>
                            <polygon class="cls-6" points="396.79 416.69 389.1 424.75 396.79 432.82 396.79 416.69"/>
                            <polygon class="cls-7" points="396.88 416.69 396.88 432.82 404.58 424.75 396.88 416.69"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[88]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[88])">
                            <polygon class="property pb-sprite-1" points="312 453.21 416.88 453.29 416.85 504.79 312.05 504.84 312 453.21"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 486.51) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 487.22) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(353.1 500.3) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 341.48, 482.88)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 358.95, 472.1)">89</text>
                            <polygon class="cls-6" points="396.96 468.86 389.27 476.92 396.96 484.99 396.96 468.86"/>
                            <polygon class="cls-7" points="397.06 468.86 397.06 484.99 404.75 476.92 397.06 468.86"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[89]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[89])">
                            <polygon class="property pb-sprite-2" points="312.05 504.84 416.85 504.79 417.57 556.32 312.02 556.38 312.05 504.84"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 537.56) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 538.28) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(353.1 551.36) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 341.48, 533.94)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 358.95, 523.16)">90</text>
                            <polygon class="cls-6" points="396.96 519.91 389.27 527.98 396.96 536.05 396.96 519.91"/>
                            <polygon class="cls-7" points="397.06 519.91 397.06 536.05 404.75 527.98 397.06 519.91"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[90]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[90])">
                            <polygon class="property pb-sprite-1" points="312.02 556.38 417.57 556.32 417.4 607.34 312.57 607.14 312.02 556.38"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 589.21) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 589.92) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(356.41 603) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 344.78, 585.58)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 362.26, 574.8)">91</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[91]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[91])">
                            <polygon class="property pb-sprite-2" points="312.57 607.14 417.4 607.34 417.47 658.57 312.92 658.7 312.57 607.14"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 641.37) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 642.08) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(356.41 653.55) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 344.78, 637.75)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 362.26, 626.97)">92</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[92]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[92])">
                            <polygon class="property pb-sprite-1" points="312.92 658.7 417.47 658.57 417.73 710.2 312.78 710.26 312.92 658.7"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 693.32) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 694.03) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(356.41 705.5) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 344.78, 689.7)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 362.26, 678.92)">93</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[93]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[93])">
                            <polygon class="property pb-sprite-2" points="312.78 710.26 417.73 710.2 418.19 760.92 312.88 761.02 312.78 710.26"/>
                            <text class="cls-9 futura-book" transform="translate(322.5 743.2) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 743.92) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(356.41 757) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 344.78, 739.58)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 362.26, 728.8)">94</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[94]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[94])">
                            <polygon class="property pb-sprite-1" points="313.67 812.38 312.88 761.02 418.19 760.92 418.19 812.38 313.67 812.38"/>
                            <text class="cls-9 futura-book" transform="translate(324.15 796.22) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(415.89 796.94) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(353.1 810.02) scale(1.02 1)">16.00</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 341.48, 792.61)">128.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 358.95, 781.83)">95</text>
                            <polygon class="cls-6" points="396.96 778.57 389.27 786.64 396.96 794.71 396.96 778.57"/>
                            <polygon class="cls-7" points="397.06 778.57 397.06 794.71 404.75 786.64 397.06 778.57"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[95]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[95])">
                            <polygon class="property pb-sprite-2" points="198.07 812.6 198.12 761.02 312.88 761.02 313.67 812.38 198.07 812.6"/>
                            <text class="cls-9 futura-book" transform="translate(208.42 794.09) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(310.07 794.81) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(245.64 809.5) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 235.66, 792.08)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 253.14, 781.3)">96</text>
                            <polygon class="cls-6" points="222.82 779.1 215.13 787.17 222.82 795.24 222.82 779.1"/>
                            <polygon class="cls-7" points="222.91 779.1 222.91 795.24 230.61 787.17 222.91 779.1"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[96]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[96])">
                            <polygon class="property pb-sprite-1" points="198.12 761.02 198.02 710.2 312.78 710.26 312.88 761.02 198.12 761.02"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 741.09) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 741.8) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 756.5) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 739.08)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 251.49, 728.3)">97</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[97]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[97])">
                            <polygon class="property pb-sprite-2" points="198.02 710.2 197.92 658.67 312.92 658.7 312.78 710.26 198.02 710.2"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 690.69) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 691.41) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 706.1) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 688.68)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 251.49, 677.9)">98</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[98]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[98])">
                            <polygon class="property pb-sprite-1" points="197.92 658.67 197.38 607.24 312.57 607.14 312.92 658.7 197.92 658.67"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 638.79) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 639.51) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 654.2) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 636.78)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 251.49, 626)">99</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[99]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[99])">
                            <polygon class="property pb-sprite-2" points="197.38 607.24 197.38 556.37 312.02 556.38 312.57 607.14 197.38 607.24"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 588) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 588.71) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 603.4) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 585.99)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 249.84, 575.2)">100</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[100]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[100])">
                            <polygon class="property pb-sprite-1" points="197.38 556.37 197.38 504.74 312.05 504.84 312.02 556.38 197.38 556.37"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 536.35) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 537.06) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 551.75) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 534.34)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 249.83, 523.56)">101</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[101]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[101])">
                            <polygon class="property pb-sprite-2" points="197.38 504.74 196.52 453.26 312 453.21 312.05 504.84 197.38 504.74"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 486.42) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 487.14) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 501.83) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 484.41)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 249.83, 473.63)">102</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[102]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[102])">
                            <polygon class="property pb-sprite-1" points="196.52 453.26 196.52 402.49 311.23 402.44 312 453.21 196.52 453.26"/>
                            <text class="cls-9 futura-book" transform="translate(206.77 434.63) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(308.42 435.34) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(243.99 450.04) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.01, 432.62)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 249.84, 421.84)">103</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[103]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[103])">
                            <polygon class="property pb-sprite-2" points="196.52 402.49 196.56 350.98 311.41 351.01 311.23 402.44 196.52 402.49"/>
                            <text class="cls-9 futura-book" transform="translate(205.12 382.74) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(306.77 383.46) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(242.33 398.15) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 232.36, 380.74)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 248.18, 369.95)">104</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[104]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[104])">
                            <polygon class="property pb-sprite-1" points="196.56 350.98 196.59 299.31 311.41 299.45 311.41 351.01 196.56 350.98"/>
                            <text class="cls-9 futura-book" transform="translate(205.12 331.79) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(306.77 332.5) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(242.33 347.19) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 232.36, 329.78)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 248.18, 319)">105</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[105]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[105])">
                            <polygon class="property pb-sprite-2" points="196.59 299.31 195.7 248.61 311.41 248.56 311.41 299.45 196.59 299.31"/>
                            <text class="cls-9 futura-book" transform="translate(205.12 280.68) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-9 futura-book" transform="translate(306.77 281.39) rotate(-90) scale(0.98 1)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(242.33 296.09) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 232.36, 278.68)">140.00 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 248.18, 267.89)">106</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[106]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[106])">
                            <polygon class="property pb-sprite-1" points="195.7 248.61 195.7 190.98 310.61 191.08 311.41 248.56 195.7 248.61"/>
                            <text class="cls-9 futura-book" transform="translate(205.21 226.43) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-9 futura-book" transform="translate(306.87 227.15) rotate(-90) scale(0.98 1)">8.99</text>
                            <text class="cls-10 futura-book" transform="translate(242.43 243.46) scale(1.02 1)">17.50</text>
                            <text class="cls-10 futura-book" transform="translate(242.43 200.9) scale(1.02 1)">17.50</text>
                            <text class="cls-2 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 234.11, 224.43)">157.33 m2</text>
                            <text class="cls-5 futura-book" transform="matrix(1.02, -0.01, 0.01, 1, 249.93, 213.65)">107</text>
                            <polygon class="cls-6" points="219.51 208.78 211.82 216.85 219.51 224.92 219.51 208.78"/>
                            <polygon class="cls-7" points="219.61 208.78 219.61 224.92 227.3 216.85 219.61 208.78"/>
                        </g>

                        <g id="DIVISIONES-7" data-name="DIVISIONES">
                            <line class="cls-11" x1="310.61" y1="191.08" x2="313.67" y2="812.38"/>
                            <line class="cls-11" x1="198.12" y1="761.02" x2="418.19" y2="760.92"/>
                            <line class="cls-11" x1="417.73" y1="710.2" x2="198.02" y2="710.2"/>
                            <line class="cls-11" x1="197.92" y1="658.67" x2="417.47" y2="658.57"/>
                            <line class="cls-11" x1="417.4" y1="607.34" x2="197.38" y2="607.24"/>
                            <line class="cls-11" x1="197.38" y1="556.37" x2="417.57" y2="556.32"/>
                            <line class="cls-11" x1="416.85" y1="504.79" x2="197.38" y2="504.74"/>
                            <line class="cls-11" x1="196.52" y1="453.26" x2="416.88" y2="453.29"/>
                            <line class="cls-11" x1="416.82" y1="402.41" x2="196.52" y2="402.49"/>
                            <line class="cls-11" x1="196.56" y1="350.98" x2="415.92" y2="350.86"/>
                            <line class="cls-11" x1="415.99" y1="299.38" x2="196.59" y2="299.31"/>
                            <line class="cls-11" x1="195.7" y1="248.61" x2="416.12" y2="248.56"/>
                        </g>

                        
                        <g id="DIVISIONES-2" data-name="DIVISIONES">
                            <line class="cls-11" x1="78" y1="974.66" x2="78.07" y2="872.34"/>
                            <line class="cls-11" x1="130.79" y1="974.46" x2="130.65" y2="872.28"/>
                            <line class="cls-11" x1="182.69" y1="974.73" x2="182.76" y2="872.28"/>
                            <line class="cls-11" x1="235.58" y1="974.56" x2="235.58" y2="872.34"/>
                            <line class="cls-11" x1="288.31" y1="974.59" x2="288.41" y2="872.41"/>
                            <line class="cls-11" x1="340.24" y1="974.73" x2="340.34" y2="872.34"/>
                            <line class="cls-11" x1="393.07" y1="974.73" x2="393.15" y2="872.34"/>
                            <line class="cls-11" x1="445.86" y1="872.34" x2="445.86" y2="974.7"/>
                            <line class="cls-11" x1="497.86" y1="872.34" x2="497.89" y2="974.7"/>
                            <line class="cls-11" x1="550.72" y1="872.34" x2="550.55" y2="974.7"/>
                            <line class="cls-11" x1="603.24" y1="872.28" x2="603.51" y2="974.54"/>
                            <line class="cls-11" x1="655.48" y1="872.48" x2="655.39" y2="974.54"/>
                            <line class="cls-11" x1="708.2" y1="872.34" x2="708.26" y2="974.59"/>
                            <line class="cls-11" x1="761.14" y1="872.29" x2="761.14" y2="974.49"/>
                            <line class="cls-11" x1="813.03" y1="872.41" x2="812.96" y2="974.59"/>
                            <line class="cls-11" x1="865.69" y1="872.21" x2="865.69" y2="974.66"/>
                            <line class="cls-11" x1="918.41" y1="872.45" x2="918.41" y2="974.53"/>
                        </g>

                        <g id="DIVISIONES">
                            <line class="cls-11" x1="1039.28" y1="664.89" x2="1155.56" y2="666.94"/>
                            <line class="cls-11" x1="1037.04" y1="766.92" x2="1152.5" y2="769.89"/>
                            <line class="cls-11" x1="1038.69" y1="715.34" x2="1154.12" y2="718.52"/>
                            <line class="cls-11" x1="1033.22" y1="920.85" x2="1148.8" y2="923.87"/>
                            <line class="cls-11" x1="1034.82" y1="869.32" x2="1150.35" y2="872.34"/>
                            <line class="cls-11" x1="1035.63" y1="818.43" x2="1151.9" y2="820.77"/>
                        </g>

                        <g id="DIVISIONES-3" data-name="DIVISIONES">
                            <line class="cls-11" x1="6.14" y1="755.17" x2="136.78" y2="754.9"/>
                            <line class="cls-11" x1="5.35" y1="703.44" x2="136.78" y2="703.41"/>
                            <line class="cls-11" x1="5.38" y1="652.79" x2="137" y2="652.87"/>
                            <line class="cls-11" x1="5.07" y1="601.22" x2="135.89" y2="601.29"/>
                            <line class="cls-11" x1="134.44" y1="241.97" x2="3.87" y2="241.87"/>
                            <line class="cls-11" x1="135.4" y1="293.46" x2="3.8" y2="293.33"/>
                            <line class="cls-11" x1="135.4" y1="344.99" x2="3.83" y2="344.93"/>
                            <line class="cls-11" x1="135.4" y1="395.78" x2="4.63" y2="395.85"/>
                            <line class="cls-11" x1="136.13" y1="447.21" x2="4.63" y2="447.34"/>
                            <line class="cls-11" x1="135.89" y1="498.91" x2="4.69" y2="498.84"/>
                            <line class="cls-11" x1="136.13" y1="549.61" x2="4.64" y2="549.76"/>
                        </g>

                        <g id="DIVISIONES-4" data-name="DIVISIONES">
                            <line class="cls-11" x1="410.7" y1="2.61" x2="410.6" y2="131.43"/>
                            <path class="cls-11" d="M778.57,131.28c0-7,0-128.72,0-128.72"/>
                            <line class="cls-11" x1="725.81" y1="2.91" x2="725.69" y2="131.32"/>
                            <line class="cls-11" x1="673" y1="131.48" x2="673" y2="2.51"/>
                            <line class="cls-11" x1="621.07" y1="2.58" x2="621.07" y2="131.38"/>
                            <line class="cls-11" x1="568.26" y1="131.38" x2="568.2" y2="2.44"/>
                            <line class="cls-11" x1="515.39" y1="2.61" x2="515.52" y2="131.28"/>
                            <line class="cls-11" x1="463.36" y1="131.28" x2="463.46" y2="2.71"/>
                            <line class="cls-11" x1="357.89" y1="131.38" x2="357.93" y2="2.58"/>
                            <line class="cls-14" x1="42.76" y1="2.78" x2="42.83" y2="131.45"/>
                            <line class="cls-11" x1="95.62" y1="131.45" x2="95.62" y2="2.78"/>
                            <line class="cls-11" x1="200.41" y1="2.58" x2="200.38" y2="131.28"/>
                            <path class="cls-11" d="M253.15,131.28c.2-5.16,0-128.62,0-128.62"/>
                            <line class="cls-11" x1="305.96" y1="2.76" x2="306" y2="131.32"/>
                            <line class="cls-11" x1="148.36" y1="2.66" x2="148.41" y2="131.38"/>
                        </g>

                        <g id="DIVISIONES-5" data-name="DIVISIONES">
                            <line class="cls-11" x1="897.86" y1="409.9" x2="1029.28" y2="414.88"/>
                            <line class="cls-11" x1="899.34" y1="359.14" x2="1031.43" y2="362.1"/>
                            <line class="cls-11" x1="900.93" y1="307.72" x2="1032.32" y2="310.74"/>
                            <line class="cls-11" x1="901.68" y1="255.95" x2="1033.63" y2="259.11"/>
                            <line class="cls-11" x1="903.18" y1="205.25" x2="1035.42" y2="208.29"/>
                            <line class="cls-11" x1="904.89" y1="153.63" x2="1036.52" y2="156.79"/>
                            <line class="cls-11" x1="905.54" y1="102.07" x2="1037.9" y2="106.11"/>
                            <line class="cls-11" x1="906.85" y1="40.83" x2="1038.74" y2="44.01"/>
                        </g>

                        <g id="DIVISIONES-6" data-name="DIVISIONES">
                            <line class="cls-11" x1="727.41" y1="191.13" x2="718.94" y2="538.42"/>
                            <line class="cls-11" x1="839.74" y1="313.7" x2="724.46" y2="311.28"/>
                            <line class="cls-11" x1="838.17" y1="371.92" x2="723.55" y2="368.82"/>
                            <line class="cls-11" x1="836.74" y1="429.36" x2="721.88" y2="426.44"/>
                            <line class="cls-11" x1="835.3" y1="486.89" x2="720.52" y2="484.59"/>
                            <line class="cls-11" x1="726.32" y1="247.04" x2="841.44" y2="250.02"/>
                        </g>

                        <g id="DIVISIONES-7" data-name="DIVISIONES">
                            <line class="cls-11" x1="977.26" y1="710.15" x2="478.85" y2="710.15"/>
                            <line class="cls-11" x1="537.64" y1="812.65" x2="537.71" y2="598.2"/>
                            <line class="cls-11" x1="596.55" y1="812.55" x2="596.42" y2="598.06"/>
                            <line class="cls-11" x1="655.48" y1="812.51" x2="655.41" y2="598.13"/>
                            <line class="cls-11" x1="711.85" y1="812.45" x2="711.99" y2="598.33"/>
                            <line class="cls-11" x1="764.71" y1="812.38" x2="764.85" y2="598.06"/>
                            <line class="cls-11" x1="922.33" y1="812.51" x2="922.26" y2="598.2"/>
                            <line class="cls-11" x1="817.44" y1="812.51" x2="817.51" y2="598.13"/>
                            <line class="cls-11" x1="869.52" y1="812.55" x2="869.68" y2="598.11"/>
                        </g>

                        <path class="cls-15" d="M1031.43.92s7.54,6.21,8.15,41.42S1031,427.72,1031,427.72h132.6l9-363.7s.64-33.77-5.72-63.22l-131.55.47"/>
                        <path class="cls-16" d="M1159.07,474.83l2.81-45.47h-132.6s8.1-304.19,9.46-359.53-9-67.27-9-67.27l-990,0L3.8,62.05,6.14,976.4l1141.27-1.5,9.39-389.32"/>
                        <polygon class="cls-17" points="1115.37 540.74 1115.39 521.64 1141.48 521.24 1141.36 540.34 1115.37 540.74"/>
                        <text class="cls-18" transform="matrix(0.01, -0.88, 1, 0, 1128.27, 507.03)">ACCESO</text>
                        <path class="cls-19" d="M1112.27,494.7c0,3.46,3,6.29,6.9,6.49l-.06,9.18-7.71-7.84-7.72-7.85,7.82-7.82,7.82-7.81-.06,9.18c-3.87.18-7,3-7,6.47"/>
                        <text class="cls-20" transform="matrix(0.03, -0.88, 1, 0.02, 1113.71, 576.5)">SALIDA</text>
                        <path class="cls-19" d="M1125.91,567c-.13,3.39-3.25,6.11-7,6.22l-.35,9,7.89-7.54,7.89-7.54-7.3-7.82-7.29-7.82-.35,9c3.78.25,6.68,3.08,6.55,6.48"/>
                        <path class="cls-21" d="M1130.75,527.6c0,.19-.61,2.09-1.52,2.1s-1.77-1.88-1.78-2.06a1.83,1.83,0,0,1,1.61-.81A2,2,0,0,1,1130.75,527.6Z"/>
                        <path class="cls-21" d="M1136.83,533.11c.1,2.1-3.15,3.59-7.24,3.63s-7.48-1.38-7.58-3.48C1129.42,533.17,1129.42,533.17,1136.83,533.11Z"/>
                        <polygon class="cls-21" points="1136.41 533.1 1122.31 533.25 1122.22 531.34 1136.32 531.19 1136.41 533.1"/>
                        <path class="cls-21" d="M1122.22,531.34l-1.56-1.63a.54.54,0,0,1,.2-.9l1-.43a8.11,8.11,0,0,0,4.42-2.58l.42-.51,4.74,0,.58.63a8.17,8.17,0,0,0,4.23,2.37l1.34.44a.48.48,0,0,1,.26.78l-1.54,1.73Z"/>
                        <text class="cls-22" transform="translate(1084.15 201.16) scale(1.02 1)">ÁREA<tspan x="-27.64" y="19.73">COMERCIAL</tspan></text>
                    </g>
                </g>
            </svg>

        </div>
	</div>

	<div class="modal-dialog" ng-class="paramo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="paramo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{paramo.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in paramo.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="paramo.selectUser(lead.idLead, $index)" ng-class="paramo.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="paramo.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="paramo.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="paramo.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="paramo.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{paramo.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
                    </li>
                    <li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.options.modal_display">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Páramo</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="paramo.closeList()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>
				<div class="border-box--blue border-r4 overflow-h">
					<div layout="row" class="bluegray-light2-bg border-box--blue-b px-16 py-10">
	
						<div layout="row" layout-align="start center" flex="50">
							Espacio para filtros
						</div>
						
						<div class="dark__text fs__10px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
							{{paramo.inmovablesData.inmovables.length}} propiedades
						</div>

					</div>

					<div class="overflow-x-s overflow-y-s">
						<div class="h100v-140" style="width: 5120px;">

							<div class="border-box--blue-b px-24 py-10">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-semibold">

									<div class="overflow-h pr-5" style="width:1.92%">#</div>
									<div class="overflow-h px-5" style="width:1.92%">Modulo</div>
									<div class="overflow-h px-5" style="width:1.92%">Estado</div>
									<div class="overflow-h px-5" style="width:1.92%">Área</div>
									<div class="overflow-h px-5" style="width:1.92%">Tipo</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad</div>
									<div class="overflow-h px-5" style="width:1.92%">% de enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento</div>

									<div class="overflow-h px-5" style="width:1.92%">% aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio aumentado</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio aumentado</div>

									<div class="overflow-h px-5" style="width:1.92%">% descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio descuento</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; final</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad final</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento final</div>

									<div class="overflow-h px-5" style="width:1.92%">% desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Importe</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">&#8942;</div>

								</div>
							</div>

							<div class="trow border-box--blue-b px-24 py-10" ng-repeat="property in paramo.inmovablesData.inmovables">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-regular">

									<div class="overflow-h pr-5" style="width:1.92%">{{property.number}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.idModule}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{paramo.propertyStatus[property.idPropertyStatus]}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.area}} M&sup2;</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.type}}</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.hook.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.base.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{(property.cost_m2_increase.value*100).toFixed(2)}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.total_increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.cost_m2_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.total_discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.hook_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.import.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">
										<md-menu md-offset="-50 0" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
											<button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</button>
	
											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="paramo.openEditPropertyWindow(property)">
														Editar
													</md-button>
												</md-menu-item>

												<md-menu-divider></md-menu-divider>

												<md-menu-item>
													<md-button>
														Cerrar menu
													</md-button>
												</md-menu-item>

											</md-menu-content>

										</md-menu>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.edit.view">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Aumento estratégico</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="paramo.hideEditPropertyWindow()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<div layout="row" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Aumento a precio</label>

                            <md-select name="updateIncrease" ng-model="rootInmovables.edit.models.idPromoIncrease" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoIncrease, rootInmovables.selected.idPromoIncrease, rootInmovables.selected.valuePromoIncrease, 3)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="6">5% Aumento estratégico</md-option>
                                <md-option ng-value="7">7% Aumento estratégico</md-option>
								<md-option ng-value="8">10% Aumento estratégico</md-option>

							</md-select>

						</md-input-container>

					</div>

					<form layout="row" name="updateDiscountForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a precio</label>

                            <md-select name="updateDiscount" ng-model="rootInmovables.edit.models.idPromoDiscount" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoDiscount, rootInmovables.selected.idPromoDiscount, rootInmovables.selected.valuePromoDiscount, 1)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="9">20% Descuento por lanzamiento</md-option>
                                <md-option ng-value="1">25% Descuento por lanzamiento</md-option>
								<md-option ng-value="2">30% Descuento por pago de contado</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">
                        <md-input-container class="w100">

							<label>Enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHook" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHook, rootInmovables.selected.idPromoHook, rootInmovables.selected.valuePromoHook, 4)" required>

                                <md-option ng-value="5">10% Enganche para terrenos</md-option>
								<md-option ng-value="4">30% Enganche para Naves</md-option>

							</md-select>

						</md-input-container>

					</form>

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHookDiscount" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHookDiscount, rootInmovables.selected.idPromoHookDiscount, rootInmovables.selected.valuePromoHookDiscount, 2)" required>

								<md-option ng-value="0">Ninguno</md-option>

								<md-option ng-value="3">10% Descuento sobre monto de enganche</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

			</div>
		</div>
	</div>

</body>
</html>