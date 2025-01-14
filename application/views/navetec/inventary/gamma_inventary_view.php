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

<body ng-controller="NvtGammaCtrl as nvtGamma">
  
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

	<div class="modal__panel" ng-class="nvtGamma.nvtGammaListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
      <p>GAMMA - Naves</p>
      <span class="close__panel" ng-click="nvtGamma.closeNvtGammaListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    </div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtGamma.inmovablesData.inmovables">
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
								<div class="p-20 pointer" ng-class="nvtGamma.inmovablesClassList[$index]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtGamma.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtGamma.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtGamma.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtGamma.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtGamma.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtGamma.selectUser(lead.idLead, $index)" ng-class="nvtGamma.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtGamma.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtGamma.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtGamma.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtGamma.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtGamma.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtGamma.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGamma.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">GAMMA</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtGamma.showInmovablesList()">list</i></button>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 907" style="enable-background:new 0 0 1366 907;" xml:space="preserve">

			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:7.1704px;}
				.st4{fill:#E8E237;}
				.st6{font-size:11.7306px;}
				.st7{opacity:0.6;fill:#DBAD4B;enable-background:new;}
			</style>

			<image style="overflow:visible;" width="1366" height="907" xlink:href="media/assets/img/navetec/app/gamma/gamma.jpg"  transform="matrix(1 0 0 1 -0.1455 0)"></image>

			<g id="ships">
				<g id="isla_a">
					<g ng-class="nvtGamma.inmovablesClassList[0]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[0])">
						<polygon class="property nvt-sprite-1" points="965.6,32.4 905.1,32.9 906.8,208.6 967.3,207.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 928.5638 39.7196)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 928.5645 205.41)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 906.765 111.6703)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 960.2735 111.6702)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 921.6442 129.9197)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 952.1878 126.0238)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 922.6138 105.88)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 930.714 105.799)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 937.7146 105.729)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 931.2552 119.8749)" class="st4 futura-med st6">1A</text>
						
						<rect x="933.6" y="87" transform="matrix(0.7034 -0.7108 0.7108 0.7034 213.6889 692.8642)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="937.1,95.2 937,90.5 937,85.6 941.9,90.4"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[1]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[1])">
						<polygon class="property nvt-sprite-2" points="844.5,33.4 846.2,209.1 906.7,208.6 904.9,32.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.0345 41.1896)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.034 206.8698)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 847.7043 113.1399)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.1139 131.3898)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 891.6584 127.4939)" class="st1 futura-book st3">2</text>
						<text y="-8" transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 864.8138 114.7397)" class="st4 futura-med st6">NAVE</text>
						<text y="-8" transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.4551 128.735)" class="st4 futura-med st6">2A</text>
						
						<rect x="872.9" y="87.4" transform="matrix(0.7034 -0.7108 0.7108 0.7034 195.3477 649.8771)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="876.4,95.7 876.4,91 876.3,86 881.2,90.9"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[2]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[2])">
						<polygon class="property nvt-sprite-1" points="784.1,33.9 785.8,209.7 846.2,209.1 844.5,33.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 808.5838 41.9199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 808.5844 207.6098)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 788.2546 113.8702)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 801.6641 132.1201)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 832.2087 128.2241)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 802.6337 108.0799)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 810.7339 107.9989)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 817.7346 107.9289)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 811.2751 122.0747)" class="st4 futura-med st6">3A</text>
						
						<rect x="813.7" y="88.2" transform="matrix(0.7034 -0.7108 0.7108 0.7034 177.235 607.985)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="817.1,96.5 817.1,91.8 817.1,86.8 821.9,91.6"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[3]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[3])">
						<polygon class="property nvt-sprite-2" points="723.7,34.5 725.5,210.3 785.8,209.7 784.1,33.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 748.0046 41.9197)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 748.0042 207.6096)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 727.6754 113.8704)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 741.0839 132.1199)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 771.6285 128.2239)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 742.0545 108.0797)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 750.1537 107.9992)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 757.1544 107.9287)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 750.6949 122.0745)" class="st4 futura-med st6">4A</text>
						
						<rect x="753" y="88.8" transform="matrix(0.7034 -0.7108 0.7108 0.7034 158.7952 565.0461)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="756.5,97.1 756.4,92.4 756.4,87.4 761.3,92.2"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[4]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[4])">
						<polygon class="property nvt-sprite-1" points="663.3,35.1 665,210.9 725.5,210.3 723.7,34.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 687.1944 42.6499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 687.194 208.3398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 666.8643 114.6002)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 680.2738 132.8598)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 710.8184 128.9639)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 681.2443 108.8098)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 689.3445 108.7288)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 696.3442 108.6589)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 689.8847 122.8047)" class="st4 futura-med st6">5A</text>
						
						<rect x="693" y="89.4" transform="matrix(0.7034 -0.7108 0.7108 0.7034 140.5803 522.5501)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="696.4,97.7 696.4,93 696.4,88 701.2,92.8"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[5]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[5])">
						<polygon class="property nvt-sprite-2" points="602.9,35.7 604.6,211.4 665,210.9 663.3,35.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 626.8945 42.6498)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 626.8941 208.3397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 606.5663 114.6003)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 619.9739 132.8598)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 650.5186 128.9643)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 620.9445 108.8098)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 629.0446 108.7288)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 636.0443 108.6588)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 629.5848 122.8047)" class="st4 futura-med st6">6A</text>
						
						<rect x="632.3" y="90" transform="matrix(0.7034 -0.7108 0.7108 0.7034 122.1291 479.6126)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="635.8,98.3 635.7,93.6 635.7,88.6 640.6,93.5"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[6]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[6])">
						<polygon class="property nvt-sprite-1" points="542.5,36.4 544.2,212 604.6,211.4 602.9,35.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 566.7543 43.3899)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 566.7543 209.0696)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 546.425 115.3402)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 559.8342 133.5901)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 590.3783 129.6941)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 560.8042 109.5401)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 568.9044 109.4591)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 575.9041 109.3891)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 569.4451 123.535)" class="st4 futura-med st6">7A</text>
						
						<rect x="571.9" y="90.7" transform="matrix(0.7034 -0.7108 0.7108 0.7034 103.729 436.8274)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="575.3,99 575.3,94.3 575.2,89.3 580.1,94.1"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[7]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[7])">
						<polygon class="property nvt-sprite-2" points="482.1,36.8 483.8,212.5 544.2,212 542.5,36.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.3544 43.3899)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.3543 209.07)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 486.0236 115.3403)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 499.4342 133.5895)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 529.9783 129.6941)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 500.4042 109.5396)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 508.5039 109.4586)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 515.504 109.3886)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 509.0451 123.5349)" class="st4 futura-med st6">8A</text>
						
						<rect x="511.5" y="91" transform="matrix(0.7034 -0.7108 0.7108 0.7034 85.5672 394.0053)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="514.9,99.3 514.9,94.6 514.9,89.6 519.7,94.5"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[8]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[8])">
						<polygon class="property nvt-sprite-1" points="421.7,37.3 423.4,213.1 483.8,212.5 482.1,36.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 445.9441 44.85)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 445.9442 210.5399)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 425.6134 116.8002)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 439.0343 135.0598)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 469.5784 131.1638)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 440.0043 111.0098)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 448.104 110.9288)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 455.1041 110.8588)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 448.6451 125.0047)" class="st4 futura-med st6">9A</text>
						
						<rect x="451.1" y="91.8" transform="matrix(0.7034 -0.7108 0.7108 0.7034 67.1234 351.3403)" class="st7" width="6.9" height="6.9"/>
						<polygon class="st7" points="454.6,100.1 454.5,95.4 454.5,90.4 459.4,95.2"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[9]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[9])">
						<polygon  class="property nvt-sprite-2" points="361.3,38 363,213.6 423.4,213.1 421.7,37.3"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 385.5441 44.8499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 385.5442 210.5399)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 365.2159 116.8003)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 378.624 135.0599)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 409.1681 131.1639)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 379.594 111.0099)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.6942 110.9289)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 394.6943 110.8589)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 384.9748 125.0374)" class="st4 futura-med st6">10A</text>
						
						<rect x="390.4" y="92.3" transform="matrix(0.7034 -0.7108 0.7108 0.7034 48.7681 308.3209)" class="st7" width="6.8" height="6.9"/>
						<polygon class="st7" points="393.8,100.6 393.8,95.9 393.8,90.9 398.7,95.7"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[10]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[10])">
						<polygon  class="property nvt-sprite-1" points="300.8,38.5 302.6,214.3 363,213.6 361.3,38"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 324.964 45.5895)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 324.964 211.2697)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 304.6234 117.5401)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.0443 135.7897)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 348.5884 131.8937)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 319.0143 111.7397)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.114 111.6587)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 334.1141 111.5887)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 324.3951 125.7672)" class="st4 futura-med st6">11A</text>
						
						<rect x="330.5" y="93" transform="matrix(0.7034 -0.7108 0.7108 0.7034 30.5293 265.9688)" class="st7" width="6.8" height="6.9"/>
						<polygon class="st7" points="334,101.3 333.9,96.5 333.9,91.6 338.8,96.4"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[11]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[11])">
						<polygon  class="property nvt-sprite-2" points="240.4,39.1 242.2,214.8 302.6,214.3 300.8,38.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 264.7539 45.59)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 264.7539 211.2697)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 244.4251 117.5402)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 257.8343 135.7897)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 288.3784 131.8943)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 258.8043 111.7397)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 266.904 111.6588)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 273.9041 111.5888)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 264.1851 125.7677)" class="st4 futura-med st6">12A</text>
						
						<rect x="270" y="93.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 12.0924 223.123)" class="st7" width="6.9" height="6.9"/>
						<polygon class="st7" points="273.4,101.9 273.4,97.2 273.4,92.2 278.2,97.1"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[12]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[12])">
						<polygon  class="property nvt-sprite-1" points="180.1,39.7 181.8,215.4 242.2,214.8 240.4,39.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 204.3144 46.3199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 204.314 212.0099)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 183.9851 118.2699)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 197.3942 136.5201)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 227.9383 132.6241)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 198.3643 112.4799)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 206.464 112.3989)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 213.4641 112.3289)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 203.7451 126.5074)" class="st4 futura-med st6">13A</text>
						
						<rect x="209.3" y="94.1" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -6.2276 180.0993)" class="st7" width="6.8" height="6.9"/>
						<polygon class="st7" points="212.7,102.4 212.7,97.6 212.7,92.7 217.5,97.5"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[13]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[13])">
						<polygon  class="property nvt-sprite-2" points="119.7,40.3 121.4,215.9 181.8,215.4 180.1,39.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 143.9041 46.32)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 143.9042 212.0099)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 123.5758 118.2703)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 136.9839 136.5197)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 167.5281 132.6242)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 137.9643 112.4799)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 146.064 112.3989)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 153.0641 112.3289)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 143.3451 126.5073)" class="st4 futura-med st6">14A</text>
						
						<rect x="148.9" y="94.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -24.5023 137.3281)" class="st7" width="6.8" height="6.9"/>
						<polygon class="st7" points="152.3,102.9 152.3,98.1 152.3,93.2 157.1,98"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[14]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[14])">
						<polygon  class="property nvt-sprite-1" points="59.3,40.8 61,216.5 121.4,215.9 119.7,40.3"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 83.5442 47.7898)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 83.5442 213.47)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 63.2163 119.7401)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 76.6343 137.9899)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 107.1784 134.094)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 77.6043 113.9399)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 85.704 113.859)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.7042 113.789)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 82.9851 127.9674)" class="st4 futura-med st6">15A</text>
						
						<rect x="88.7" y="95.3" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -42.8202 94.7701)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="92.2,103.5 92.1,98.8 92.1,93.9 97,98.7"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[15]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[15])">
						<polygon  class="property nvt-sprite-2" points="-1.1,41.4 -0.6,217.1 61,216.5 59.3,40.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 22.4943 48.52)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 22.4944 214.2099)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 2.1649 120.4699)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 15.5741 138.7197)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 46.1182 134.8242)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 16.5442 114.68)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 24.6444 114.599)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 31.644 114.529)" class="st4 futura-med st6">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 21.925 128.7074)" class="st4 futura-med st6">16A</text>
						
						<rect x="27.7" y="95.9" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -61.3734 51.5816)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="31.1,104.2 31.1,99.5 31.1,94.5 36,99.3"/>
					</g>
				</g>
				<g id="isla_b">
					<g ng-class="nvtGamma.inmovablesClassList[16]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[16])">
						<polygon id="b-l1" class="property nvt-sprite-2" points="947,292.1 946.9,352.6 797.5,352.6 797.6,292.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3842 298.6499)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.826 314.2202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.835 314.2201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3141 333.3498)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8587 329.4543)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7841 323.3599)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8843 323.2789)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8839 323.2089)" class="st4 futura-med st6">VE 1B</text>
						
						<rect x="872.2" y="304.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 40.7549 713.7405)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="875.6,312.9 875.6,308.2 875.6,303.2 880.4,308"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[17]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[17])">
						<polygon id="b-l2" class="property nvt-sprite-1" points="947,413 946.9,352.6 797.5,352.6 797.5,413"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3845 359.92)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8246 375.5002)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.8354 375.5)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3145 394.62)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8581 390.724)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7844 384.6301)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8837 384.5491)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8843 384.4791)" class="st4 futura-med st6">VE 2B</text>
						
						<rect x="872.2" y="365.2" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -2.3202 731.7078)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="875.6,373.5 875.6,368.8 875.6,363.8 880.4,368.6"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[18]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[18])">
						<polygon id="b-l3" class="property nvt-sprite-2" points="947,473.3 947,413 797.5,413 797.5,473.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.384 420.6101)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8253 436.1799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.8342 436.1803)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3139 455.31)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8585 451.4141)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7839 445.3196)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8841 445.2386)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8837 445.1686)" class="st4 futura-med st6">VE 3B</text>
						
						<rect x="872.2" y="425.8" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -45.3781 749.6822)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="875.6,434.1 875.6,429.3 875.6,424.4 880.4,429.2"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[19]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[19])">
						<polygon id="b-l4" class="property nvt-sprite-1" points="947,533.8 947,473.3 797.5,473.5 797.5,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3841 480.7801)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8251 496.3499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.834 496.3503)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.314 515.48)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8586 511.584)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.784 505.4896)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8842 505.4086)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8839 505.3386)" class="st4 futura-med st6">VE 4B</text>
						
						<rect x="872.2" y="486.4" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -88.439 767.6494)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="875.6,494.6 875.6,489.9 875.6,485 880.4,489.8"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[20]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[20])">
						<polygon id="b-l5" class="property nvt-sprite-2" points="947,594.2 947,533.8 797.5,533.8 797.5,594.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.384 540.4398)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8261 556.0199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.835 556.0203)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3139 575.1397)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8585 571.2438)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7839 565.1498)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8841 565.0688)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8837 564.9988)" class="st4 futura-med st6">VE 5B</text>
						
						<rect x="872.2" y="546.9" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -131.4969 785.6238)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,555.2 875.6,550.5 875.6,545.5 880.4,550.4"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[21]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[21])">
						<polygon id="b-l6" class="property nvt-sprite-1" points="947,654.6 947,594.2 797.5,594.2 797.5,654.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.384 601.48)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8251 617.0601)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.834 617.0599)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3139 636.1799)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8585 632.2839)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7839 626.19)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8841 626.109)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8837 626.039)" class="st4 futura-med st6">VE 6B</text>
						
						<rect x="872.2" y="607.5" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -174.5578 803.591)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,615.8 875.6,611.1 875.6,606.1 880.4,610.9"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[22]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[22])">
						<polygon id="b-l7" class="property nvt-sprite-2" points="947,715.1 947,654.6 797.5,654.6 797.5,715.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3838 662.4)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8253 677.9801)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.8342 677.98)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3137 697.0999)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8583 693.204)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7837 687.11)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8839 687.0291)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8845 686.959)" class="st4 futura-med st6">VE 7B</text>
						
						<rect x="872.2" y="668.1" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -217.6187 821.5583)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,676.4 875.6,671.7 875.6,666.7 880.4,671.5"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[23]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[23])">
						<polygon id="b-l8" class="property nvt-sprite-1" points="947,775.4 947,715.1 797.5,715.1 797.5,775.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3838 722.5598)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8253 738.1403)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.8342 738.1402)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3138 757.27)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8584 753.374)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7837 747.2698)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8839 747.1888)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8845 747.1188)" class="st4 futura-med st6">VE 8B</text>
						
						<rect x="872.2" y="728.7" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -260.6837 839.5297)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,737 875.6,732.2 875.6,727.3 880.4,732.1"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[24]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[24])">
						<polygon id="b-l9" class="property nvt-sprite-2" points="947,835.9 947,775.4 797.5,775.4 797.5,835.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3841 782.7498)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8251 798.3201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.834 798.32)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.314 817.4497)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8586 813.5538)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.784 807.4598)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8842 807.3788)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8839 807.3088)" class="st4 futura-med st6">VE 9B</text>
						
						<rect x="872.2" y="789.3" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -303.7447 857.4969)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,797.6 875.6,792.8 875.6,787.9 880.4,792.7"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[25]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[25])">
						<polygon id="b-l10" class="property nvt-sprite-1" points="946.9,906.1 947,835.9 797.5,835.9 797.5,903.3"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3843 842.93)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 863.3843 901.8197)" class="st1 futura-book st3">34.65</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.825 858.4999)" class="st1 futura-book st3">15.65</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 939.8358 858.5002)" class="st1 futura-book st3">16.26</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 862.3143 877.6299)" class="st1 futura-book st3">553.42 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.8578 873.734)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 853.7842 867.64)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 861.8844 867.559)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 868.8841 867.489)" class="st4 futura-med st6">VE 10B</text>
						
						<rect x="872.2" y="849.3" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -346.4077 875.3015)" class="st7" width="6.8" height="6.8"/>
						<polygon class="st7" points="875.6,857.6 875.6,852.9 875.6,847.9 880.4,852.7"/>
					</g>
				</g>
				<g id="isla_c">
					<g ng-class="nvtGamma.inmovablesClassList[26]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[26])">
						<polygon id="c-l1" class="property nvt-sprite-1" points="648.5,292.3 797.5,292.1 797.5,352.6 648.5,352.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0037 298.65)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4534 314.2202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4544 314.22)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9443 333.3498)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.488 329.4538)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4045 323.36)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5038 323.279)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5044 323.209)" class="st4 futura-med st6">VE 1C</text>
						
						<rect x="722" y="304.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -3.7831 607.018)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="725.5,312.9 725.4,308.2 725.4,303.2 730.3,308"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[27]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[27])">
						<rect id="c-l2" x="648.5" y="352.6" class="property nvt-sprite-2" width="149" height="60.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.004 359.9201)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4539 375.5002)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.455 375.5)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9437 394.6199)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4883 390.724)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4039 384.6296)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5041 384.5486)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5038 384.4786)" class="st4 futura-med st6">VE 2C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[28]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[28])">
						<rect id="c-l3" x="648.5" y="413" class="property nvt-sprite-1" width="149" height="60.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0045 420.6096)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4545 436.18)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4536 436.1802)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9442 455.3095)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4887 451.414)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4044 445.3197)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5045 445.2387)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5042 445.1687)" class="st4 futura-med st6">VE 3C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[29]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[29])">
						<polygon id="c-l4" class="property nvt-sprite-2" points="797.5,533.8 648.5,533.8 648.5,473.5 797.5,473.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0045 480.7797)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4544 496.3499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4536 496.3502)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9443 515.48)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4879 511.584)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4045 505.4897)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5046 505.4087)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5043 505.3387)" class="st4 futura-med st6">VE4C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[30]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[30])">
						<polygon id="c-l5" class="property nvt-sprite-1" points="797.5,594.2 648.5,594.2 648.5,533.8 797.5,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0045 540.4399)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4534 556.0199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4545 556.0202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9442 575.1397)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4887 571.2443)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4044 565.1499)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5045 565.0689)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5042 564.9989)" class="st4 futura-med st6">VE 5C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[31]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[31])">
						<polygon id="c-l6" class="property nvt-sprite-2" points="797.5,654.6 648.5,654.6 648.5,594.2 797.5,594.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0045 601.48)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4544 617.0601)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4536 617.0599)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9442 636.1799)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4878 632.2839)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4044 626.1896)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5046 626.1086)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5042 626.0386)" class="st4 futura-med st6">VE 6C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[32]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[32])">
						<polygon id="c-l7" class="property nvt-sprite-1" points="797.5,715.1 648.5,715.1 648.5,654.6 797.5,654.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0043 662.4001)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4546 677.9801)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4537 677.9799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.944 697.0999)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4885 693.204)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4042 687.1096)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5043 687.0286)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.504 686.9586)" class="st4 futura-med st6">VE 7C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[33]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[33])">
						<polygon id="c-l8" class="property nvt-sprite-2" points="797.5,775.4 648.5,775.4 648.5,715.1 797.5,715.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0141 722.5699)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4546 738.1404)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4537 738.1401)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9343 757.27)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4779 753.3741)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4042 747.2698)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5043 747.1888)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.504 747.1188)" class="st4 futura-med st6">VE 8C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[34]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[34])">
						<polygon id="c-l9" class="property nvt-sprite-1" points="797.5,835.9 648.5,835.9 648.5,775.4 797.5,775.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0046 782.7498)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4544 798.3201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4535 798.3199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9443 817.4496)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4879 813.5542)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4045 807.4598)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5046 807.3788)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5043 807.3088)" class="st4 futura-med st6">VE 9C</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[35]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[35])">
						<polygon id="c-l10" class="property nvt-sprite-2" points="797.5,903.3 648.4,900.4 648.5,835.9 797.5,835.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0038 842.9296)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 714.0043 898.74)" class="st1 futura-book st3">34.65</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 651.4542 858.4999)" class="st1 futura-book st3">15.07</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 790.4533 858.5002)" class="st1 futura-book st3">15.65</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.9337 877.63)" class="st1 futura-book st3">531.22 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 743.4783 873.7341)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 704.4037 867.6401)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 712.5039 867.5591)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5045 867.4886)" class="st4 futura-med st6">VE 10C</text>
					</g>
				</g>
				<g id="isla_d">
					<g ng-class="nvtGamma.inmovablesClassList[36]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[36])">
						<polygon id="d-l1" class="property nvt-sprite-2" points="561.1,352.6 561.2,292 411.6,292 411.6,352.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.444 298.6497)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8947 314.22)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8958 314.2203)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3739 333.3496)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.918 329.4542)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8439 323.3597)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9441 323.2787)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9442 323.2087)" class="st4 futura-med st6">VE 1D</text>
						
						<rect x="487.8" y="304.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -73.25 440.5621)" class="st7" width="6.9" height="6.9"/>
						<polygon class="st7" points="491.3,312.9 491.2,308.2 491.2,303.2 496.1,308"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[37]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[37])">
						<polygon id="d-l2" class="property nvt-sprite-1" points="561.2,413 561.1,352.6 411.6,352.6 411.7,413.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4443 359.9199)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8962 375.5002)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8951 375.4999)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3743 394.6198)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9184 390.7238)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8443 384.6299)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.944 384.5489)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9441 384.4789)" class="st4 futura-med st6">VE 2D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[38]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[38])">
						<polygon id="d-l3" class="property nvt-sprite-2" points="561.2,473.4 561.2,413 411.7,413.1 411.5,473.3"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4443 420.6099)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.886 436.1801)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.895 436.18)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3742 455.3098)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9183 451.4139)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8442 445.3199)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9444 445.2389)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.944 445.1689)" class="st4 futura-med st6">VE 3D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[39]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[39])">
						<polygon id="d-l4" class="property nvt-sprite-1" points="561.2,533.8 561.2,473.4 411.5,473.3 411.5,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4444 480.7799)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8957 496.3502)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8948 496.35)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3743 515.4799)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9184 511.5839)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8443 505.4899)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.944 505.4089)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9441 505.3389)" class="st4 futura-med st6">VE 4D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[40]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[40])">
						<polygon id="d-l5" class="property nvt-sprite-2" points="561.2,594.2 411.5,594.2 411.5,533.8 561.2,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4443 540.4396)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8947 556.0202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8958 556.02)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3743 575.1498)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9184 571.2538)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8442 565.1497)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9444 565.0687)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.944 564.9987)" class="st4 futura-med st6">VE 5D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[41]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[41])">
						<polygon id="d-l6" class="property nvt-sprite-1" points="411.5,654.6 561.2,654.6 561.2,594.2 411.5,594.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4443 601.4798)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8957 617.0599)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8948 617.0601)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3742 636.1797)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9183 632.2838)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8442 626.1898)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9439 626.1088)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.944 626.0388)" class="st4 futura-med st6">VE 6D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[42]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[42])">
						<polygon id="d-l7" class="property nvt-sprite-2" points="561.2,715.1 411.5,715.1 411.5,654.6 561.2,654.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4441 662.3998)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8959 677.9799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.895 677.9802)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.374 697.0998)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9181 693.2038)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.844 687.1099)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9442 687.0289)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9443 686.9589)" class="st4 futura-med st6">VE 7D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[43]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[43])">
						<polygon id="d-l8" class="property nvt-sprite-1" points="561.2,775.4 561.2,715.1 411.5,715.1 411.5,775.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4441 722.5596)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8959 738.1401)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.895 738.1399)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3741 757.2698)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9182 753.3738)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.844 747.2701)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9442 747.1891)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9443 747.1191)" class="st4 futura-med st6">VE 8D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[44]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[44])">
						<polygon id="d-l9" class="property nvt-sprite-2" points="561.2,835.9 561.2,775.4 411.5,775.4 411.5,835.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4439 782.7501)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8859 798.3203)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8948 798.3202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3743 817.45)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9185 813.5541)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8443 807.4596)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.944 807.3786)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9442 807.3086)" class="st4 futura-med st6">VE 9D</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[45]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[45])">
						<polygon id="d-l10" class="property nvt-sprite-1" points="561.2,898.7 561.2,835.9 411.5,835.9 411.6,895.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4441 842.9299)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 414.8955 858.5001)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.8946 858.4999)" class="st1 futura-book st3">14.55</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.3741 877.6298)" class="st1 futura-book st3">494.08 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 506.9182 873.7338)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.8441 867.6399)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.9442 867.5589)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 482.9444 867.4889)" class="st4 futura-med st6">VE 10D</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 477.4441 893.4197)" class="st1 futura-book st3">34.65</text>
					</g>
				</g>
				<g id="isla_e">
					<g ng-class="nvtGamma.inmovablesClassList[46]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[46])">
						<polygon id="e-l1" class="property nvt-sprite-1" points="262.7,292.1 411.6,292 411.6,352.6 262.7,352.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0742 298.6497)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5141 314.2199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5152 314.2202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0042 333.3501)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5482 329.4542)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4644 323.3598)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5641 323.2788)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5642 323.2088)" class="st4 futura-med st6">VE 1E</text>
						
						<rect x="336" y="304.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -118.2707 332.6617)" class="st7" width="6.9" height="6.9"/>
						<polygon class="st7" points="339.5,312.9 339.5,308.2 339.4,303.2 344.3,308"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[47]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[47])">
						<polygon id="e-l2" class="property nvt-sprite-2" points="262.8,413 411.7,413.1 411.6,352.6 262.7,352.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0741 359.9198)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5146 375.5003)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5138 375.5001)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.004 394.6198)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5481 390.7238)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4642 384.63)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5639 384.549)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5641 384.479)" class="st4 futura-med st6">VE 2E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[48]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[48])">
						<polygon id="e-l3" class="property nvt-sprite-1" points="411.5,473.3 262.7,473.5 262.8,413 411.7,413.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.074 420.6099)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5153 436.1801)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5144 436.1799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0039 455.3098)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5481 451.4139)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4642 445.32)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5644 445.239)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.564 445.169)" class="st4 futura-med st6">VE 3E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[49]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[49])">
						<polygon id="e-l4" class="property nvt-sprite-2" points="262.7,533.8 411.5,533.8 411.5,473.3 262.7,473.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0741 480.7799)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5152 496.3501)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5143 496.3499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0041 515.4798)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5482 511.5839)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4643 505.49)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.564 505.409)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5641 505.339)" class="st4 futura-med st6">VE 4E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[50]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[50])">
						<polygon id="e-l5" class="property nvt-sprite-1" points="262.7,594.2 411.5,594.2 411.5,533.8 262.7,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.074 540.4396)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5142 556.0201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5153 556.0199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0041 575.1498)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5482 571.2538)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4642 565.1497)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5644 565.0687)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.564 564.9987)" class="st4 futura-med st6">VE 5E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[51]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[51])">
						<polygon id="e-l6" class="property nvt-sprite-2" points="262.7,654.6 411.5,654.6 411.5,594.2 262.7,594.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.074 601.4798)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5152 617.0602)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5143 617.0601)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.004 636.1797)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5481 632.2842)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4642 626.1899)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5644 626.1089)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.564 626.0389)" class="st4 futura-med st6">VE 6E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[52]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[52])">
						<polygon id="e-l7" class="property nvt-sprite-1" points="262.7,715.1 411.5,715.1 411.5,654.6 262.7,654.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0743 662.3998)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5154 677.9803)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5145 677.9801)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0042 697.0997)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5484 693.2038)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.464 687.1099)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5642 687.0289)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5643 686.9589)" class="st4 futura-med st6">VE 7E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[53]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[53])">
						<polygon id="e-l8" class="property nvt-sprite-2" points="262.7,775.4 411.5,775.4 411.5,715.1 262.7,715.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0739 722.5698)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5154 738.1401)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5145 738.1403)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0044 757.2697)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5485 753.3743)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.464 747.2697)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5642 747.1887)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5643 747.1187)" class="st4 futura-med st6">VE 8E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[54]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[54])">
						<polygon id="e-l9" class="property nvt-sprite-1" points="262.7,835.9 411.5,835.9 411.5,775.4 262.7,775.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0741 782.7496)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.5152 798.3203)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5143 798.3201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0041 817.4495)" class="st1 futura-book st3">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5482 813.554)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.4643 807.4597)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.564 807.3787)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5641 807.3087)" class="st4 futura-med st6">VE 9E</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[55]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[55])">
						<polygon id="e-l10" class="property nvt-sprite-2" points="262.7,892.9 411.6,895.8 411.5,835.9 262.7,835.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0743 842.9298)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 328.0743 891.2198)" class="st1 futura-book st3">34.65</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 265.515 858.5001)" class="st1 futura-book st3">13.23</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 404.5141 858.5004)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 327.0043 877.6298)" class="st1 futura-book st3">471.74 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 357.5484 873.7338)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.464 867.64)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.5642 867.559)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 333.5643 867.489)" class="st4 futura-med st6">VE 10E</text>
					</g>
				</g>
				<g id="isla_f">
					<g ng-class="nvtGamma.inmovablesClassList[56]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[56])">
						<polygon id="f-l1" class="property nvt-sprite-2" points="-0.5,292.1 175.2,292.1 175.3,352.7 -0.5,352.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0542 298.65)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4249 314.22)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6362 314.2202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9842 333.3499)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5381 329.4738)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4444 323.3596)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5441 323.2786)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5442 323.2086)" class="st4 futura-med st6">VE 1F</text>
						
						<rect x="80.9" y="304.6" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -193.9547 151.3005)" class="st7" width="6.9" height="6.8"/>
						<polygon class="st7" points="84.3,312.9 84.3,308.2 84.3,303.2 89.2,308"/>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[57]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[57])">
						<polygon id="f-l2" class="property nvt-sprite-1" points="175.3,413 -0.2,413 -0.5,352.7 175.3,352.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0541 359.9196)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4254 375.4999)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6367 375.5001)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.984 394.6196)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.538 390.744)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4443 384.6298)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.544 384.5488)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5441 384.4788)" class="st4 futura-med st6">VE 2F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[58]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[58])">
						<polygon id="f-l3" class="property nvt-sprite-2" points="175.3,473.5 -0.2,473.4 -0.2,413 175.3,413"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.054 420.6097)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4241 436.1802)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6354 436.1799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.984 455.3096)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5384 451.4341)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4442 445.3198)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5444 445.2388)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.544 445.1688)" class="st4 futura-med st6">VE 3F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[59]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[59])">
						<polygon id="f-l4" class="property nvt-sprite-1" points="175.3,533.8 0.1,533.8 -0.2,473.4 175.3,473.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0541 480.7797)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.424 496.3502)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6353 496.3499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9841 515.4801)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5381 511.6041)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4443 505.4898)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.544 505.4088)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5441 505.3388)" class="st4 futura-med st6">VE 4F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[60]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[60])">
						<polygon id="f-l5" class="property nvt-sprite-2" points="175.3,594.2 0.1,594.2 0.1,533.8 175.3,533.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.054 540.4399)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.425 556.0202)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6363 556.0204)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9841 575.1501)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5381 571.274)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4442 565.15)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5444 565.069)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.544 564.999)" class="st4 futura-med st6">VE 5F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[61]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[61])">
						<polygon id="f-l6" class="property nvt-sprite-1" points="175.3,654.6 0.4,654.6 0.1,594.2 175.3,594.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0541 601.4796)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.424 617.0598)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6353 617.0601)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.984 636.1795)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5385 632.304)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4442 626.1897)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5439 626.1087)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.544 626.0387)" class="st4 futura-med st6">VE 6F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[62]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[62])">
						<polygon id="f-l7" class="property nvt-sprite-2" points="175.3,715.1 0.5,715.1 0.4,654.6 175.3,654.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0543 662.3996)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4242 677.9799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6355 677.98)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9843 697.0995)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5383 693.224)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.444 687.1097)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5442 687.0287)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5443 686.9587)" class="st4 futura-med st6">VE 7F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[63]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[63])">
						<polygon id="f-l8" class="property nvt-sprite-1" points="175.3,775.4 0.7,775.4 0.5,715.1 175.3,715.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.054 722.5696)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4242 738.1401)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6355 738.1403)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9844 757.27)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5384 753.394)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4441 747.2797)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5443 747.1987)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5439 747.1287)" class="st4 futura-med st6">VE 8F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[64]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[64])">
						<polygon id="f-l9" class="property nvt-sprite-2" points="175.3,835.9 0.9,835.9 0.7,775.4 175.3,775.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0542 782.7499)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.424 798.3199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6353 798.3201)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9841 817.4498)" class="st1 futura-book st3">569.80m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5381 813.5737)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.4443 807.46)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.544 807.379)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5442 807.309)" class="st4 futura-med st6">VE 9F</text>
					</g>
					<g ng-class="nvtGamma.inmovablesClassList[65]" ng-click="nvtGamma.setLeadProperty(nvtGamma.inmovablesData.inmovables[65])">
						<polygon id="f-l10" class="property nvt-sprite-1" points="175.3,891.2 0.9,887.9 0.9,835.9 175.3,835.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 75.0544 842.9296)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 4.4248 854.1)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 167.6361 854.1002)" class="st1 futura-book st3">12.77</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.9843 873.2299)" class="st1 futura-book st3">504.50m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 102.5382 869.3539)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 65.444 863.2396)" class="st4 futura-med st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 73.5442 863.1586)" class="st4 futura-med st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 80.5443 863.0886)" class="st4 futura-med st6">VE 10F</text>
					</g>
				</g>
			</g>
		</svg>

  </div>

</body>
</html>