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

<body ng-controller="NvtSLPCtrl as nvtSLP">
  
    <div ng-include="'application/views/app/nav/nav.html'"></div>


	<div class="modal__panel" ng-class="nvtSLP.nvtSLPListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>SAN LUIS POTOSÍ 2 - Naves</p>
				<span class="close__panel" ng-click="nvtSLP.closeNvtSLPListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    		</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtSLP.inmovablesData.inmovables">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Nave {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" class="property__active" ng-class="nvtSLP.inmovablesClassList[$index]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtSLP.advisersDialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtSLP.closeAdvisersDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtSLP.closeAdvisersDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtSLP.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtSLP.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtSLP.selectUser(lead.idLead, $index)" ng-class="nvtSLP.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtSLP.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtSLP.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtSLP.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtSLP.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtSLP.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtSLP.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- <div class="modal-dialog" ng-class="nvtSLP.optionsDialogDisplay">
        <div class="backdrop-dialog" ng-click="nvtSLP.closeOptionsDialogDisplay()"></div>
        <div class="container-s-dialog p-20">
            <div class="toolbar-dialog blue-txt">
                Opciones
                <span ng-click="nvtSLP.closeOptionsDialogDisplay()">
                    <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
                </span>
            </div>
            <div class="content-dialog" style="overflow: initial;">
				<ul>
					<li><div class="btn-flat" ng-class="nvtSLP.setLeadProperty()">Asignar cliente</div></li>
					<li class="pt-5"><div class="btn-flat">Cotización</div></li>
				</ul>
            </div>
            <div class="divider"></div>
        </div>
    </div> -->
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">SAN LUIS POTOSÍ 2</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtSLP.showInmovablesList()">list</i></button>
			</div>
		</div>

        <svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1366 1038.8" style="enable-background:new 0 0 1366 1038.8;" xml:space="preserve">

			<style type="text/css">
				.st23{fill:#F4E606;}
				.st24{fill:#E2A63C;}
				.st25{opacity:0.6;fill:#E2A63C;}
				.st27{fill:none;stroke:#FFFFFF;stroke-width:1.2123;stroke-miterlimit:10;}
			</style>
			
			<image style="overflow:visible;" width="1366" height="1038" xlink:href="media/assets/img/navetec/app/slp/slp2.jpg"  transform="matrix(1 0 0 1 0.2 0.8719)"></image>

			<g id="MODULO_A">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[8]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[8])">
					<polygon class="property nvt-sprite-1" points="1193.6,606.6 1362.7,411.8 1295.5,354 1126.9,549.1"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1150.7034 557.6432)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1302.3805 381.9106)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1221.2767 511.9658)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1211.621 497.3931)" class="st23 futura-book fs__14px">LOTE 9A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1259.1083 514.7208)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="1188.8,527.7 1174.8,541.6 1188.8,555.6"/>
						<polygon class="st25" points="1188.9,527.7 1188.9,555.6 1202.9,541.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[9]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[9])">
					<polygon class="property nvt-sprite-2" points="1059.3,491.3 1228.7,295.8 1295.5,354 1126.9,549.1"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1084.1096 501.5784)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1235.7815 325.8443)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1154.6716 455.9013)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1141.2925 445.4727)" class="st23 futura-book fs__14px">LOTE 10A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1192.5073 458.6576)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="1123.5,467.1 1109.5,481 1123.5,495"/>
						<polygon class="st25" points="1123.6,467.1 1123.6,495 1137.6,481.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[10]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[10])">
					<polygon class="property nvt-sprite-1" points="1059.3,491.3 1228.7,295.8 1160.8,237.2 992.5,433.1"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1018.252 441.9836)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1169.9186 266.2495)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1088.8099 396.3034)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1075.4263 385.8739)" class="st23 futura-book fs__14px">LOTE 11A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1126.6443 399.0584)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="1059.2,410.7 1045.2,424.7 1059.2,438.7"/>
						<polygon class="st25" points="1059.3,410.7 1059.3,438.7 1073.3,424.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[11]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[11])">
					<polygon class="property nvt-sprite-2" points="925,374.9 992.5,433.1 1160.8,237.2 1094,179.7"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 951.0893 381.8703)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1102.7615 206.1374)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1021.6591 336.1906)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1008.27 325.757)" class="st23 futura-book fs__14px">LOTE 12A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1059.4893 338.9449)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="990.3,348.6 976.4,362.5 990.3,376.5"/>
						<polygon class="st25" points="990.5,348.6 990.5,376.5 1004.5,362.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[12]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[12])">
					<polygon class="property nvt-sprite-1" points="925,374.9 1094,179.7 1026.9,121.5 857.8,317.8"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 881.6944 325.1987)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1033.3629 149.4625)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 952.2562 279.5191)" class="white__fill futura-light fs__14px">571.38 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 938.8747 269.0886)" class="st23 futura-book fs__14px">LOTE 13A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 990.0945 282.2755)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="926.1,293.3 912.2,307.2 926.1,321.2"/>
						<polygon class="st25" points="926.3,293.3 926.3,321.2 940.3,307.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[13]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[13])">
					<polygon class="property nvt-sprite-2" points="791.1,258.4 857.8,317.8 1026.9,121.5 959.7,63.7"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 816.2117 268.6703)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 967.8864 92.9389)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 886.7772 222.9908)" class="white__fill futura-light fs__14px">573.00 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 873.3939 212.5624)" class="st23 futura-book fs__14px">LOTE 14A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 924.6112 225.7472)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="859,235.6 845.1,249.5 859,263.5"/>
						<polygon class="st25" points="859.2,235.6 859.2,263.5 873.2,249.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[14]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[14])">
					<polygon class="property nvt-sprite-1" points="791.1,258.4 959.7,63.7 892.2,5.5 723.5,201"/>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 747.9386 210.4664)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.7519 0.6667 -0.6636 0.7481 899.6068 34.7335)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.6465 -0.7565 0.7603 0.6495 818.4948 164.7824)" class="white__fill futura-light fs__14px">574.61 m2</text>
					<g>
						<text transform="matrix(0.6496 -0.7602 0.7603 0.6495 804.2118 154.3563)" class="st23 futura-book fs__14px">LOTE 15A</text>
					</g>
					<text transform="matrix(0.6651 -0.7402 0.7441 0.6681 856.3364 167.5463)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="787.8,180.2 773.8,194.1 787.8,208.1"/>
						<polygon class="st25" points="787.9,180.2 788,208.1 801.9,194.2"/>
					</g>
				</g>
				<g>
					<line class="st27" x1="791.1" y1="258.4" x2="959.7" y2="63.7"/>
					<line class="st27" x1="1026.9" y1="121.5" x2="857.8" y2="317.8"/>
					<line class="st27" x1="1094" y1="179.7" x2="925" y2="374.9"/>
					<line class="st27" x1="992.5" y1="433.1" x2="1160.8" y2="237.2"/>
					<line class="st27" x1="1228.7" y1="295.8" x2="1059.3" y2="491.3"/>
					<path class="st27" d="M1126.9,549.1c2.5-2.9,168.6-195.1,168.6-195.1"/>
				</g>
			</g>
			<g id="MODULO_E">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[63]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[63])">
					<polygon class="property nvt-sprite-1" points="864.2,722.2 793.1,552.3 912.7,502.8 1069,637.9"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 940.4713 683.2756)" class="white__fill futura-light fs__14px">34.97</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 843.4588 549.0172)" class="white__fill futura-light fs__14px">20.42</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 879.772 584.2139)" class="white__fill futura-light fs__14px">805.34 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 897.132 582.1508)" class="st23 futura-book fs__14px">LOTE 1E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 829.5578 615.9839)" class="white__fill futura-light fs__14px">29.00</text>
					<text transform="matrix(0.7604 0.6419 -0.6448 0.7643 956.9911 563.5192)" class="white__fill futura-light fs__14px">32.45</text>
					<g>
						<polygon class="st24" points="934.3,639 920.4,652.9 934.4,666.9"/>
						<polygon class="st25" points="934.5,639 934.5,666.9 948.5,653"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[64]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[64])">
					<polygon class="property nvt-sprite-2" points="710.8,586.4 793.1,552.3 864.2,722.2 782.1,757.3"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 742.7378 590.9898)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 802.3546 740.9818)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 767.8161 629.8921)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 785.1688 627.8279)" class="st23 futura-book fs__14px">LOTE 2E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 745.4673 649.5685)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[65]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[65])">
					<polygon class="property nvt-sprite-1" points="699.3,789.7 629.1,619.6 710.8,586.4 782.1,757.3"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 659.3458 625.8158)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 718.9625 775.8077)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 684.4232 664.7154)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 701.7795 662.656)" class="st23 futura-book fs__14px">LOTE 3E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 662.0771 684.3916)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[66]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[66])">
					<polygon class="property nvt-sprite-2" points="547,653.6 629.1,619.6 699.3,789.7 617.9,824.1"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 580.827 658.2772)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 640.4412 808.2628)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 605.9026 697.1724)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 623.2653 695.1167)" class="st23 futura-book fs__14px">LOTE 4E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 583.5623 716.8533)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[67]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[67])">
					<polygon class="property nvt-sprite-1" points="535.5,857.7 465.7,688.3 547,653.6 617.9,824.1"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 496.8829 692.978)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 556.4971 842.9658)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 521.9568 731.8759)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 539.3181 729.8145)" class="st23 futura-book fs__14px">LOTE 5E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 499.6165 751.5504)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[68]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[68])">
					<polygon class="property nvt-sprite-2" points="465.7,688.3 535.5,857.7 453.8,891.6 383.3,722.2"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 417.9692 725.3304)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 477.5847 875.3207)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 443.0389 764.2304)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 460.3999 762.1691)" class="st23 futura-book fs__14px">LOTE 6E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 420.7018 783.9108)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[69]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[69])">
					<polygon class="property nvt-sprite-1" points="371.3,925.9 301.5,756.5 383.3,722.2 453.8,891.6"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 331.5958 759.4729)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 391.2108 909.4614)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 356.669 798.3681)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 374.0295 796.3091)" class="st23 futura-book fs__14px">LOTE 7E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 334.328 818.0496)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[70]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[70])">
					<polygon class="property nvt-sprite-2" points="218.7,790.1 290.3,959.5 371.3,925.9 301.5,756.5"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 252.679 793.6087)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 312.2963 943.6025)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 277.7545 832.5086)" class="white__fill futura-light fs__14px">406.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 295.1161 830.4492)" class="st23 futura-book fs__14px">LOTE 8E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 255.4108 852.1833)" class="white__fill futura-light fs__14px">29.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[71]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[71])">
					<polygon class="property nvt-sprite-1" points="123.6,829.7 195.9,999.8 290.3,961 218.7,790.1"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 163.1355 832.3296)" class="white__fill futura-light fs__14px">16.32</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 222.7504 982.3191)" class="white__fill futura-light fs__14px">16.09</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 188.2143 871.2303)" class="white__fill futura-light fs__14px">450.79 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 205.5712 869.1685)" class="st23 futura-book fs__14px">LOTE 9E</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 159.1553 894.9143)" class="white__fill futura-light fs__14px">29.00</text>
					<g>
						<polygon class="st24" points="226,933.2 212,947.1 226,961.1"/>
						<polygon class="st25" points="226.2,933.2 226.2,961.1 240.1,947.2"/>
					</g>
				</g>
				<g id="DIVISIONES_4_">
					<line class="st27" x1="864.2" y1="722.2" x2="793.1" y2="552.3"/>
					<path class="st27" d="M383.3,722.2c1.8,4.4,70.5,169.4,70.5,169.4"/>
					<line class="st27" x1="371.3" y1="925.9" x2="301.5" y2="756.5"/>
					<path class="st27" d="M218.7,790.1C216,793.9,290.3,961,290.3,961"/>
					<line class="st27" x1="465.7" y1="688.3" x2="535.5" y2="857.7"/>
					<line class="st27" x1="782.1" y1="757.3" x2="710.8" y2="586.4"/>
					<line class="st27" x1="547" y1="653.6" x2="617.9" y2="824.1"/>
					<path class="st27" d="M699.3,789.7c3.5-1.4-70.1-170.1-70.1-170.1"/>
				</g>
			</g>
			<g id="MODULO_F">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[72]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[72])">
					<polygon class="property nvt-sprite-1" points="612,346.9 694.8,314 912.7,502.8 710.8,586.4"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 783.2621 546.219)" class="white__fill futura-light fs__14px">34.42</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 643.4461 352.0129)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 706.6201 422.8385)" class="white__fill futura-light fs__14px">985.48 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 723.9827 420.7828)" class="st23 futura-book fs__14px">LOTE 1F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 665.08 457.0453)" class="white__fill futura-light fs__14px">40.70</text>
					<text transform="matrix(0.7604 0.6419 -0.6448 0.7643 772.8615 403.8262)" class="white__fill futura-light fs__14px">45.54</text>
					<g>
						<polygon class="st24" points="679.5,358.6 665.6,372.5 679.5,386.5"/>
						<polygon class="st25" points="679.7,358.6 679.7,386.5 693.7,372.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[73]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[73])">
                    <path class="property nvt-sprite-2" d="M530.3,381.2c0.8,1.9,98.9,238.4,98.9,238.4l81.7-33.2L612,346.9L530.3,381.2z"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 560.5012 383.359)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 649.4838 603.8655)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 599.7248 462.1005)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 617.0815 460.0473)" class="st23 futura-book fs__14px">LOTE 2F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 580.007 486.3361)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[74]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[74])">
					<polygon class="property nvt-sprite-1" points="448.5,415.1 530.3,381.2 629.1,619.6 547,653.6"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 481.4207 416.3794)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 570.4077 636.8829)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 520.6443 495.1204)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 538.0072 493.0647)" class="st23 futura-book fs__14px">LOTE 3F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 500.9281 519.3566)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[75]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[75])">
					<polygon class="property nvt-sprite-2" points="366.1,450.2 448.5,415.1 547,653.6 465.7,688.3"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 396.6225 451.4995)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 485.606 672.0087)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 435.8462 530.2427)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 453.2051 528.1801)" class="st23 futura-book fs__14px">LOTE 4F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 416.1266 554.4736)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[76]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[76])">
					<polygon class="property nvt-sprite-1" points="366.1,450.2 465.7,688.3 383.3,722.2 283.6,483.4"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 314.6071 486.309)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 403.5959 706.8181)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 353.836 565.0518)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 371.1946 562.9979)" class="st23 futura-book fs__14px">LOTE 5F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 334.1198 589.2869)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[77]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[77])">
					<polygon class="property nvt-sprite-2" points="201.9,517.4 283.6,483.4 383.3,722.2 301.5,756.5"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 234.0191 517.4117)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 323.0064 737.9172)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 273.2447 596.1489)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 290.606 594.0895)" class="st23 futura-book fs__14px">LOTE 6F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 253.5257 620.3796)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[78]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[78])">
					<polygon class="property nvt-sprite-1" points="201.9,517.4 301.5,756.5 218.7,790.1 119.8,551.3"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 151.7461 553.0827)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 240.7313 773.5848)" class="white__fill futura-light fs__14px">14.00</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 190.9741 631.8275)" class="white__fill futura-light fs__14px">569.80 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 208.3359 629.7679)" class="st23 futura-book fs__14px">LOTE 7F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 171.2572 656.0574)" class="white__fill futura-light fs__14px">40.70</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[79]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[79])">
					<polygon class="property nvt-sprite-2" points="23.2,591.6 123.6,829.7 218.7,790.1 119.8,551.3"/>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 60.7408 590.5844)" class="white__fill futura-light fs__14px">16.64</text>
					<text transform="matrix(0.9224 -0.3988 0.3966 0.918 149.7286 811.0886)" class="white__fill futura-light fs__14px">16.32</text>
					<text transform="matrix(0.3846 0.9178 -0.9223 0.3866 99.9665 669.3281)" class="white__fill futura-light fs__14px">644.94 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9223 -0.9223 0.3866 117.3285 667.2685)" class="st23 futura-book fs__14px">LOTE 8F</text>
					</g>
					<text transform="matrix(0.3653 0.9257 -0.9301 0.3674 75.4301 694.9832)" class="white__fill futura-light fs__14px">40.70</text>
					<g>
						<polygon class="st24" points="87.9,605.5 73.9,619.4 87.9,633.4"/>
						<polygon class="st25" points="88.1,605.5 88.1,633.4 102.1,619.5"/>
					</g>
				</g>
				<g id="DIVISIONES_2_">
					<line class="st27" x1="612" y1="346.9" x2="710.8" y2="586.4"/>
					<line class="st27" x1="366.1" y1="450.2" x2="465.7" y2="688.3"/>
					<line class="st27" x1="283.6" y1="483.4" x2="383.3" y2="722.2"/>
					<line class="st27" x1="201.9" y1="517.4" x2="301.5" y2="756.5"/>
					<line class="st27" x1="119.8" y1="551.3" x2="218.7" y2="790.1"/>
					<line class="st27" x1="530.3" y1="381.2" x2="629.1" y2="619.6"/>
					<line class="st27" x1="448.5" y1="415.1" x2="547" y2="653.6"/>
					<line class="st27" x1="123.6" y1="829.7" x2="912.7" y2="502.8"/>
				</g>
			</g>
		</svg>

    </div>

</body>
</html>