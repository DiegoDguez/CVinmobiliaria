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

<body ng-controller="NvtPedroEscobedoCtrl as nvtPedroEscobedo">
  
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

	<div class="modal__panel" ng-class="nvtPedroEscobedo.nvtPedroEscobedoListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
      <p>PEDRO ESCOBEDO - Naves</p>
      <span class="close__panel" ng-click="nvtPedroEscobedo.closeNvtPedroEscobedoListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    </div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtPedroEscobedo.inmovablesData.inmovables">
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
								<div class="p-20 pointer" ng-class="nvtPedroEscobedo.inmovablesClassList[$index]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtPedroEscobedo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtPedroEscobedo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtPedroEscobedo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtPedroEscobedo.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtPedroEscobedo.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.selectUser(lead.idLead, $index)" ng-class="nvtPedroEscobedo.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtPedroEscobedo.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtPedroEscobedo.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtPedroEscobedo.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtPedroEscobedo.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtPedroEscobedo.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtPedroEscobedo.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtPedroEscobedo.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">PEDRO ESCOBEDO</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtPedroEscobedo.showInmovablesList()">list</i></button>
			</div>
		</div>

    <svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	    y="0px" viewBox="0 0 1366 934" style="enable-background:new 0 0 1366 934;" xml:space="preserve">

      <style type="text/css">
        .st1{fill:#FFFFFF;}
        .st3{font-size:6.3px;}
        .st4{fill:#FFFF00;}
        .st6{font-size:12.59px;}
        .st7{opacity:0.6;fill:#DBAE4C;enable-background:new;}
        .st9{font-size:6.2905px;}
        .st10{font-size:6.2754px;}
        .st11{font-size:6.3179px;}
      </style>
      
      <image style="overflow:visible;" width="1366" height="934" xlink:href="media/assets/img/navetec/app/pedro-escobedo/pedro-escobedo.jpg"  transform="matrix(1 0 0 1 0 1)"></image>
      <g id="ships">
        <g id="isla-a">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[0]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[0])">
            <polygon id="A1" class="property nvt-sprite-1" points="265.1,115.1 363.4,128 363.5,183.5 265.1,183.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 180.93)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(0.9916 0.129 -0.129 0.9916 306.25 127.5699)" class="st1 futura-book st3">25.21</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 148.05)" class="st1 futura-book st3">14.14</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 139.39)" class="st1 futura-book st3">17.40</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 162.81)" class="st1 futura-book st3">394.35 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 159.3697)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 152.86)" class="st4 futura-light st6">NAVE 1A</text>
              
              <rect x="311.2" y="133" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -1.5233 268.5269)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="314.3,140.3 314.2,136.2 314.2,131.8 318.5,136"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[1]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[1])">
            <polygon id="A2" class="property nvt-sprite-2" points="265.1,230.6 363.4,230.6 363.5,183.4 265.1,183.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 228.81)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 197.11)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 197.11)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 216.5299)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 213.0898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 206.58)" class="st4 futura-light st6">NAVE 2A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[2]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[2])">
            <polygon id="A3" class="property nvt-sprite-1" points="265.1,277.8 363.4,277.8 363.4,230.6 265.1,230.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 275.7099)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 244.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 244.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 263.43)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 259.9898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 253.48)" class="st4 futura-light st6">NAVE 3A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[3]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[3])">
            <polygon id="A4" class="property nvt-sprite-2" points="265.1,325.1 265.1,277.8 363.4,277.8 363.4,325.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 322.5899)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 290.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 290.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 310.31)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 306.8697)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 300.36)" class="st4 futura-light st6">NAVE 4A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[4]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[4])">
            <rect id="A5" x="265.1" y="325.1" class="property nvt-sprite-1" width="98.3" height="47"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 369.68)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 337.98)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 337.98)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 357.41)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 353.9698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 347.4601)" class="st4 futura-light st6">NAVE 5A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[5]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[5])">
            <rect id="A6" x="265.1" y="372.1" class="property nvt-sprite-2" width="98.3" height="47.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 417.27)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 385.57)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 385.57)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 405.0001)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 401.5598)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 395.05)" class="st4 futura-light st6">NAVE 6A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[6]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[6])">
            <polygon id="A7" class="property nvt-sprite-1" points="265.1,466.8 265.1,419.6 363.4,419.6 363.4,466.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 464.6999)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 433.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 433.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 452.43)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 448.9898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 442.4801)" class="st4 futura-light st6">NAVE 7A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[7]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[7])">
            <rect id="A8" x="265.1" y="466.8" class="property nvt-sprite-2" width="98.4" height="47.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 511.31)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 479.61)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 479.6201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 499.04)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 495.5998)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 489.0901)" class="st4 futura-light st6">NAVE 8A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[8]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[8])">
            <polygon id="A9" class="property nvt-sprite-1" points="363.4,561.4 265.1,561.4 265.1,513.9 363.4,513.9"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 559.8199)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 528.1201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 528.1201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 547.55)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 544.1098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 290.68 537.6)" class="st4 futura-light st6">NAVE 9A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[9]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[9])">
            <rect id="A10" x="265.1" y="561.4" class="property nvt-sprite-2" width="98.3" height="47"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 606.4401)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 574.7401)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 574.7401)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 594.17)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 590.7298)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 287.19 584.2501)" class="st4 futura-light st6">NAVE 10A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[10]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[10])">
            <polygon id="A11" class="property nvt-sprite-1" points="363.5,655.5 265.1,655.5 265.1,608.4 363.4,608.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 653.1901)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 621.5001)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 621.5001)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 640.92)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 637.4798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 631.0001)" class="st4 futura-light st6">LOTE 11A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[11]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[11])">
            <polygon id="A12" class="property nvt-sprite-2" points="363.3,702.7 265.1,702.7 265.1,655.5 363.5,655.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 700.9401)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 669.24)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 669.24)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 688.67)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 685.2298)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 678.7401)" class="st4 futura-light st6">LOTE 12A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[12]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[12])">
            <polygon id="A13" class="property nvt-sprite-1" points="363.4,750 265.1,750 265.1,702.7 363.3,702.7"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 747.59)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 715.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 715.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 735.32)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 731.8798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 725.3901)" class="st4 futura-light st6">LOTE 13A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[13]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[13])">
            <rect id="A14" x="265.1" y="750" class="property nvt-sprite-2" width="98.4" height="47.3"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 795.47)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 763.77)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 763.77)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 783.19)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 779.7498)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 773.27)" class="st4 futura-light st6">LOTE 14A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[14]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[14])">
            <polygon id="A15" class="property nvt-sprite-1" points="363.5,844.5 265.1,844.5 265.1,797.3 363.4,797.3"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 306.39 842.73)" class="st1 futura-book st3">25.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 811.03)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 811.03)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 830.46)" class="st1 futura-book st3">300.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 827.0197)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 820.53)" class="st4 futura-light st6">LOTE 15A</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[15]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[15])">
            <polygon id="A16" class="property nvt-sprite-2" points="363.4,894.7 265.1,905.6 265.1,844.5 363.5,844.5"/>
            <g>
              <text transform="matrix(0.9948 -0.1018 0.1018 0.9948 306.67 898.1201)" class="st1 futura-book st3">25.15</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 356.7591 859.19)" class="st1 futura-book st3">12.78</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 267.4193 866.28)" class="st1 futura-book st3">15.55</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 299.33 878.6201)" class="st1 futura-book st3">354.10 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 326.1343 875.1798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 288.53 868.6901)" class="st4 futura-light st6">LOTE 16A</text>
            </g>
          </g>
        </g>
        <g id="isla-b">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[16]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[16])">
            <polygon id="B1" class="property nvt-sprite-2" points="473.6,183.4 473.7,142.2 363.4,127.9 363.5,183.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 180.9799)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(0.9915 0.1302 -0.1302 0.9915 412.729 140.6298)" class="st1 futura-book st9">28.23</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 153.22)" class="st1 futura-book st3">10.48</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7591 147.7101)" class="st1 futura-book st3">14.14</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 170.71)" class="st1 futura-book st3">344.51 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 436.0441 167.2321)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 161.7599)" class="st4 futura-light st6">NAVE 1B</text>
              
              <rect x="418.4" y="144" transform="matrix(0.6925 -0.7214 0.7214 0.6925 23.5542 349.2475)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="421.6,151.3 421.5,147.1 421.4,142.7 425.8,146.9"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[17]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[17])">
            <polygon id="B2" class="property nvt-sprite-1" points="473.7,230.6 473.6,183.4 363.5,183.4 363.4,230.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 228.81)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 197.11)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 197.11)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 216.5299)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 213.0898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 206.58)" class="st4 futura-light st6">NAVE 2B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[18]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[18])">
            <polygon id="B3" class="property nvt-sprite-2" points="473.7,277.8 473.7,230.6 363.4,230.6 363.4,277.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 275.7099)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 244.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 244.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 263.43)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 259.9898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 253.48)" class="st4 futura-light st6">NAVE 3B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[19]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[19])">
            <polygon id="B4" class="property nvt-sprite-1" points="363.4,325.1 473.7,325.1 473.7,277.8 363.4,277.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 322.5899)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 290.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7591 290.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 310.31)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 306.8697)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 300.36)" class="st4 futura-light st6">NAVE 4B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[20]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[20])">
            <rect id="B5" x="363.4" y="325.1" class="property nvt-sprite-2" width="110.3" height="47"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 369.68)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 337.98)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 337.98)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 357.41)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 353.9698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 347.4601)" class="st4 futura-light st6">NAVE 5B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[21]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[21])">
            <rect id="B6" x="363.4" y="372.1" class="property nvt-sprite-1" width="110.3" height="47.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 417.27)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 385.57)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 385.57)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 405.0001)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 401.5598)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 395.04)" class="st4 futura-light st6">NAVE 6B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[22]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[22])">
            <polygon id="B7" class="property nvt-sprite-2" points="363.4,466.8 473.7,466.8 473.7,419.6 363.4,419.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 464.7099)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 433.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 433.01)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 452.43)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 448.9898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 442.4801)" class="st4 futura-light st6">NAVE 7B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[23]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[23])">
            <rect id="B8" x="363.4" y="466.8" class="property nvt-sprite-1" width="110.2" height="47.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 511.31)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 479.6201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 479.61)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 499.04)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 495.5998)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 489.0901)" class="st4 futura-light st6">NAVE 8B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[24]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[24])">
            <polygon id="B9" class="property nvt-sprite-2" points="473.7,561.4 473.7,513.9 363.4,513.9 363.4,561.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 559.8199)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 528.1201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 528.1201)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 547.55)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 544.1098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 397.45 537.6)" class="st4 futura-light st6">NAVE 9B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[25]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[25])">
            <rect id="B10" x="363.4" y="561.4" class="property nvt-sprite-1" width="110.3" height="47"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 606.4401)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 574.7401)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 574.7401)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 594.17)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 590.7298)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 393.95 584.2501)" class="st4 futura-light st6">NAVE 10B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[26]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[26])">
            <polygon id="B11" class="property nvt-sprite-2" points="473.7,655.5 473.7,608.4 363.4,608.4 363.5,655.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 653.1901)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 621.4901)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 621.5001)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 640.92)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 637.4798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 630.9901)" class="st4 futura-light st6">LOTE 11B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[27]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[27])">
            <polygon id="B12" class="property nvt-sprite-1" points="473.7,702.7 473.7,655.5 363.5,655.5 363.3,702.7"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 700.9401)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 669.24)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 669.24)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 688.67)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 685.2298)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 678.7401)" class="st4 futura-light st6">LOTE 12B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[28]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[28])">
            <polygon id="B13" class="property nvt-sprite-2" points="473.7,750 473.7,702.7 363.3,702.7 363.4,750"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 747.59)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 715.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7591 715.89)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 735.32)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 731.8798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 725.3901)" class="st4 futura-light st6">LOTE 13B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[29]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[29])">
            <rect id="B14" x="363.4" y="750" class="property nvt-sprite-1" width="110.2" height="47.3"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 795.47)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 763.77)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 763.77)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 783.19)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 779.7498)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 773.2601)" class="st4 futura-light st6">LOTE 14B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[30]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[30])">
            <polygon id="B15" class="property nvt-sprite-2" points="473.7,844.5 473.7,797.3 363.4,797.3 363.5,844.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 412.83 842.73)" class="st1 futura-book st3">28.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 811.03)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 811.03)" class="st1 futura-book st3">12.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 830.46)" class="st1 futura-book st3">336.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 827.0197)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 820.53)" class="st4 futura-light st6">LOTE 15B</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[31]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[31])">
            <polygon id="B16" class="property nvt-sprite-1" points="473.7,882.6 473.7,844.5 363.5,844.5 363.4,894.7"/>
            <g>
              <text transform="matrix(0.9944 -0.1059 0.1059 0.9944 413.0399 886.34)" class="st1 futura-book st3">28.17</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 467.14 856.04)" class="st1 futura-book st3">09.68</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 366.7689 859.19)" class="st1 futura-book st3">12.78</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 405.76 877.04)" class="st1 futura-book st3">314.44 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 432.5643 873.5999)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 395.29 867.1101)" class="st4 futura-light st6">LOTE 16B</text>
            </g>
          </g>
        </g>
        <g id="isla-c">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[32]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[32])">
            <polygon id="C1" class="property nvt-sprite-2" points="520.8,148.6 627.1,162.5 627.1,231 520.8,231"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 228.81)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(0.9928 0.1201 -0.1201 0.9928 568.2199 162.72)" class="st1 futura-book st3">27.23</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 189.13)" class="st1 futura-book st3">17.44</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 180.93)" class="st1 futura-book st3">20.97</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 205.34)" class="st1 futura-book st3">518.48 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 201.8997)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 195.3899)" class="st4 futura-light st6">NAVE 1C</text>
              
              <rect x="572.2" y="173.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 49.2588 469.3694)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="575.3,181.2 575.2,177 575.2,172.6 579.5,176.8"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[33]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[33])">
            <rect id="C2" x="520.8" y="230.8" class="property nvt-sprite-1" width="106.2" height="55.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 282.92)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 248.52)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 248.52)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 267.95)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 264.5097)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 257.99)" class="st4 futura-light st6">NAVE 2C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[34]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[34])">
            <polygon id="C3" class="property nvt-sprite-2" points="627,341.1 520.8,341.1 520.8,286 627.1,286"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 339)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 304.6)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 304.6)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 324.03)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 320.5898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 314.07)" class="st4 futura-light st6">NAVE 3C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[35]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[35])">
            <polygon id="C4" class="property nvt-sprite-1" points="627,396.2 520.8,396.2 520.8,341.1 627,341.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 394.17)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 359.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 359.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 379.2)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 375.7597)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 369.25)" class="st4 futura-light st6">NAVE 4C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[36]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[36])">
            <polygon id="C5" class="property nvt-sprite-2" points="627.1,451.2 520.8,451.2 520.8,396.2 627,396.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 449.01)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 414.61)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 414.61)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 434.04)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 430.5998)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 424.08)" class="st4 futura-light st6">NAVE 5C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[37]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[37])">
            <polygon id="C6" class="property nvt-sprite-1" points="627,506.4 520.8,506.4 520.8,451.2 627.1,451.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 504.4499)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 470.05)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 470.05)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 489.4801)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 486.0398)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 479.53)" class="st4 futura-light st6">NAVE 6C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[38]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[38])">
            <rect id="C7" x="520.8" y="506.4" class="property nvt-sprite-2" width="106.2" height="55"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 559.6901)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 525.29)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 525.29)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 544.72)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 541.2797)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 552.96 534.77)" class="st4 futura-light st6">LOTE 7C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[39]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[39])">
            <polygon id="C8" class="property nvt-sprite-1" points="627.1,616.6 520.8,616.6 520.8,561.4 627,561.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 614.58)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 580.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 580.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 599.61)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 596.1697)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 554.3 589.64)" class="st4 futura-light st6">LOTE 8C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[40]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[40])">
            <rect id="C9" x="520.8" y="616.6" class="property nvt-sprite-2" width="106.2" height="55"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 669.61)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 635.21)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 635.21)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 654.6301)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 651.1898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 554.3 644.67)" class="st4 futura-light st6">LOTE 9C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[41]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[41])">
            <polygon id="C10" class="property nvt-sprite-1" points="627,726.6 520.8,726.6 520.8,671.6 627.1,671.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 724.3201)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 689.92)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 689.92)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 709.35)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 705.9097)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 550.81 699.42)" class="st4 futura-light st6">LOTE 10C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[42]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[42])">
            <polygon id="C11" class="property nvt-sprite-2" points="627.1,781.8 520.8,781.8 520.8,726.6 627,726.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 568.29 779.2001)" class="st1 futura-book st3">27.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 744.81)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 744.81)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 764.23)" class="st1 futura-book st3">378.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 760.7897)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 550.81 754.3)" class="st4 futura-light st6">LOTE 11C</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[43]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[43])">
            <polygon id="C12" class="property nvt-sprite-1" points="627.1,865.5 520.9,877.3 520.8,781.8 627.1,781.8"/>
            <g>
              <text transform="matrix(0.9961 -8.872046e-02 8.872046e-02 0.9961 568.49 868.47)" class="st1 futura-book st3">27.16</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 619.4485 813.54)" class="st1 futura-book st3">21.30</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 523.0091 819.84)" class="st1 futura-book st3">24.29</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 561.22 832.96)" class="st1 futura-book st3">615.38 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 588.0244 829.5197)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 550.81 823.03)" class="st4 futura-light st6">LOTE 12C</text>
            </g>
          </g>
        </g>
        <g id="isla-d">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[44]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[44])">
            <polygon id="D1" class="property nvt-sprite-1" points="745.2,230.8 745.2,177.7 627.1,162.3 627.1,230.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 228.81)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(0.9915 0.1302 -0.1302 0.9915 680.2993 176.9898)" class="st1 futura-book st9">30.25</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 194.41)" class="st1 futura-book st3">13.51</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 189.68)" class="st1 futura-book st3">17.44</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 213.83)" class="st1 futura-book st3">464.16 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 210.3897)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 203.8899)" class="st4 futura-light st6">NAVE 1D</text>
              
              <rect x="683.1" y="184.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 75.5712 552.6863)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="686.2,192 686.1,187.8 686.1,183.4 690.4,187.6"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[45]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[45])">
            <rect id="D2" x="627.1" y="230.8" class="property nvt-sprite-2" width="118.1" height="55.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 282.92)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 248.52)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 248.52)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 267.95)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 264.5097)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 257.9999)" class="st4 futura-light st6">NAVE 2D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[46]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[46])">
            <polygon id="D3" class="property nvt-sprite-1" points="745.2,340.8 745.2,286 627.1,286 627,341.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 339)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 304.6)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 304.6)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 324.03)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 320.5898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 314.08)" class="st4 futura-light st6">NAVE 3D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[47]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[47])">
            <polygon id="D4" class="property nvt-sprite-2" points="745.2,396.2 745.2,340.8 627,341.1 627,396.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 394.17)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 359.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 359.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 379.2)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 375.7597)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 369.25)" class="st4 futura-light st6">NAVE 4D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[48]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[48])">
            <polygon id="D5" class="property nvt-sprite-1" points="745.2,451.2 745.2,396.2 627,396.2 627.1,451.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 449.01)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 414.61)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 414.61)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 434.04)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 430.5998)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 424.0901)" class="st4 futura-light st6">NAVE 5D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[49]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[49])">
            <polygon id="D6" class="property nvt-sprite-2" points="745.2,506.4 745.2,451.2 627.1,451.2 627,506.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 504.4499)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 470.05)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 470.05)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 489.4801)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 486.0398)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 479.53)" class="st4 futura-light st6">NAVE 6D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[50]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[50])">
            <rect id="D7" x="627" y="506.4" class="property nvt-sprite-1" width="118.2" height="55"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 559.6901)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 525.29)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 525.29)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 544.72)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 541.2797)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 664.46 534.77)" class="st4 futura-light st6">LOTE 7D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[51]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[51])">
            <polygon id="D8" class="property nvt-sprite-2" points="745.1,616.5 745.2,561.4 627,561.4 627.1,616.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 614.58)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 580.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 580.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 599.61)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 596.1697)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 665.8 589.65)" class="st4 futura-light st6">LOTE 8D</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[52]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[52])">
            <polygon id="D9" class="property nvt-sprite-1" points="745.2,671.6 745.1,616.5 627.1,616.6 627.1,671.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 669.61)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 635.21)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 654.6301)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 651.1898)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 665.8 644.67)" class="st4 futura-light st6">LOTE 9D</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 635.21)" class="st1 futura-book st3">14.00</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[53]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[53])">
            <polygon id="D10" class="property nvt-sprite-2" points="745.2,726.4 745.2,671.6 627.1,671.6 627,726.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 724.3201)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 689.92)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 709.35)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 705.9097)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 662.31 699.42)" class="st4 futura-light st6">LOTE 10D</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 689.92)" class="st1 futura-book st3">14.00</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[54]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[54])">
            <polygon id="D11" class="property nvt-sprite-1" points="745.2,781.8 745.2,726.4 627,726.6 627.1,781.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 680.4299 779.2001)" class="st1 futura-book st3">30.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 744.81)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 764.23)" class="st1 futura-book st3">420.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 760.7897)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 662.31 754.31)" class="st4 futura-light st6">LOTE 11D</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 744.81)" class="st1 futura-book st3">14.00</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[55]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[55])">
            <polygon id="D12" class="property nvt-sprite-2" points="745.2,852.5 745.2,781.8 627.1,781.8 627.1,865.5"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 630.4193 813.54)" class="st1 futura-book st3">21.30</text>
              <text transform="matrix(0.9935 -0.1139 0.1139 0.9935 680.66 856.02)" class="st1 futura-book st3">30.18</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 738.6693 806.45)" class="st1 futura-book st3">17.98</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 673.36 825.8701)" class="st1 futura-book st3">589.09 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 700.1643 822.4297)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 662.31 815.95)" class="st4 futura-light st6">LOTE 12D</text>
            </g>
          </g>
        </g>
        <g id="isla-e">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[56]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[56])">
            <polygon id="E1" class="property nvt-sprite-2" points="941.9,202.7 800.3,184.2 800.3,288.3 941.8,288.3"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 285.15)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(0.9932 0.1167 -0.1167 0.9932 866.8799 200.54)" class="st1 futura-book st3">36.31</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 236.23)" class="st1 futura-book st3">21.77</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 226.3401)" class="st1 futura-book st3">26.48</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 251.7599)" class="st1 futura-book st3">868.40 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 248.3199)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 853.39 241.7899)" class="st4 futura-light st6">LOTE 1E</text>
              
              <rect x="870.3" y="220.8" transform="matrix(0.6925 -0.7214 0.7214 0.6925 107.0403 698.8115)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="873.4,228.1 873.3,223.9 873.2,219.5 877.6,223.7"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[57]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[57])">
            <polygon id="E2" class="property nvt-sprite-1" points="941.8,288.3 800.3,288.3 800.3,343.4 941.8,343.4"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 340.3499)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 305.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 305.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 325.38)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 321.9399)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 853.39 315.3999)" class="st4 futura-light st6">LOTE 2E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[58]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[58])">
            <polygon id="E3" class="property nvt-sprite-2" points="941.8,343.4 800.3,343.4 800.3,398.5 941.9,398.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 395.75)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 361.35)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 361.35)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 380.78)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 377.3399)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 370.82)" class="st4 futura-light st6">NAVE 3E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[59]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[59])">
            <polygon id="E4" class="property nvt-sprite-1" points="941.9,398.5 800.3,398.5 800.3,453.5 941.9,453.5"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 451.78)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 417.38)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 417.38)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 436.81)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 433.3698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 426.8501)" class="st4 futura-light st6">NAVE 4E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[60]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[60])">
            <polygon id="E5" class="property nvt-sprite-2" points="941.9,453.5 800.3,453.5 800.3,508.6 941.9,508.6"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 505.93)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 471.5301)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 471.5301)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 490.9601)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 487.5199)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 481.0001)" class="st4 futura-light st6">NAVE 5E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[61]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[61])">
            <rect id="E6" x="800.3" y="508.6" class="property nvt-sprite-1" width="141.6" height="55.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 561.92)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 527.5201)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 527.5201)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 546.95)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 543.5098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 536.9901)" class="st4 futura-light st6">NAVE 6E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[62]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[62])">
            <polygon id="E7" class="property nvt-sprite-2" points="941.9,563.8 800.3,563.8 800.3,618.8 941.9,618.8"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 616.15)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 581.7601)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 581.7601)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 601.18)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 597.7398)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 591.23)" class="st4 futura-light st6">NAVE 7E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[63]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[63])">
            <rect id="nave-8e" x="800.3" y="618.8" class="property nvt-sprite-1" width="141.6" height="55.2"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 671.97)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 637.5701)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 637.5701)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 657.0001)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 653.5599)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 852.0499 647.04)" class="st4 futura-light st6">NAVE 8E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[64]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[64])">
            <polygon id="nave-9e" class="property nvt-sprite-2" points="941.9,674 800.3,674 800.3,729.1 941.9,729.1"/>
            <g>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 866.9999 726.6801)" class="st1 futura-book st3">36.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 692.28)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 692.28)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 711.71)" class="st1 futura-book st3">504.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 708.2698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 853.39 701.7401)" class="st4 futura-light st6">NAVE 9E</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[65]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[65])">
            <polygon id="nave-10e" class="property nvt-sprite-1" points="800.3,846.4 941.9,830.7 941.9,729.1 800.3,729.1"/>
            <g>
              <text transform="matrix(0.9939 -0.1104 0.1104 0.9939 867.2702 835.8696)" class="st1 futura-book st10">36.22</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 934.6888 768.96)" class="st1 futura-book st3">25.85</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 803.5989 779.2)" class="st1 futura-book st3">29.84</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 859.9299 789.96)" class="st1 futura-book st3">1002.35 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 886.7242 786.5198)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 849.9 780.03)" class="st4 futura-light st6">LOTE 10E</text>
            </g>
          </g>
        </g>
        <g id="isla-f">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[66]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[66])">
            <polygon id="F1" class="property nvt-sprite-1" points="1111.2,224.8 941.9,202.7 941.8,288.3 1111.2,288.3"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 944.929 236.23)" class="st1 futura-book st3">21.77</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 245.76)" class="st1 futura-book st3">16.14</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 285.15)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9931 0.1175 -0.1175 0.9931 1022.8199 220.7501)" class="st1 futura-book st3">43.37</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 261.0099)" class="st1 futura-book st3">815.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 257.5699)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1009.4 251.0399)" class="st4 futura-light st6">LOTE 1F</text>
              
              <rect x="1026.2" y="230" transform="matrix(0.6925 -0.7214 0.7214 0.6925 148.3642 814.1486)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="1029.4,237.3 1029.3,233.1 1029.2,228.7 1033.6,232.9"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[67]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[67])">
            <polygon id="F2" class="property nvt-sprite-2" points="1111.2,288.3 1111.2,343.4 941.8,343.4 941.8,288.3"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 305.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 305.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 340.3499)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 325.3701)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 321.9299)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1009.39 315.3999)" class="st4 futura-light st6">LOTE 2F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[68]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[68])">
            <polygon id="F3" class="property nvt-sprite-1" points="1111.2,343.4 941.8,343.4 941.9,398.5 1111.2,398.5"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 361.35)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 361.35)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 395.75)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 380.78)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 377.3399)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0499 370.82)" class="st4 futura-light st6">NAVE 3F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[69]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[69])">
            <polygon id="F4" class="property nvt-sprite-2" points="1110,398.5 941.9,398.5 941.9,453.5 1111.2,453.5 1111.2,398.5"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 417.38)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 417.38)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 451.78)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 436.81)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 433.3698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0599 426.8501)" class="st4 futura-light st6">NAVE 4F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[70]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[70])">
            <polygon id="F5" class="property nvt-sprite-1" points="1111.2,453.5 941.9,453.5 941.9,508.6 1111.2,508.6"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 471.5301)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 471.5301)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 505.93)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 490.9601)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 487.5199)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0499 481.0001)" class="st4 futura-light st6">NAVE 5F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[71]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[71])">
            <polygon id="F6" class="property nvt-sprite-2" points="1111.2,508.6 941.9,508.6 941.9,563.8 1111.1,563.8"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 527.5201)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 527.5201)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 546.95)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 543.5098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0599 536.9901)" class="st4 futura-light st6">NAVE 6F</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 561.92)" class="st1 futura-book st3">43.00</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[72]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[72])">
            <polygon id="F7" class="property nvt-sprite-1" points="1111.1,563.8 941.9,563.8 941.9,618.8 1111.2,618.8"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 581.7601)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 581.7601)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 616.15)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 601.18)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 597.7398)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0499 591.22)" class="st4 futura-light st6">NAVE 7F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[73]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[73])">
            <rect id="F8" x="941.9" y="618.8" class="property nvt-sprite-2" width="169.3" height="55.2"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 637.5701)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 637.5701)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 671.97)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 657.0001)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 653.5599)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.0499 647.04)" class="st4 futura-light st6">NAVE 8F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[74]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[74])">
            <polygon id="F9" class="property nvt-sprite-1" points="1111.2,674 1111.2,729.1 941.9,729.1 941.9,674"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 692.28)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 692.28)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1022.9499 726.6801)" class="st1 futura-book st3">43.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 711.71)" class="st1 futura-book st3">602.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 708.2698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1009.39 701.7401)" class="st4 futura-light st6">NAVE 9F</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[75]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[75])">
            <polygon id="F10" class="property nvt-sprite-2" points="1111.2,812 1111.2,729.1 941.9,729.1 941.9,830.7"/>
            <g>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1103.9193 762.7)" class="st1 futura-book st3">21.09</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 945.2591 768.96)" class="st1 futura-book st3">25.85</text>
              <text transform="matrix(0.9927 -0.1207 0.1207 0.9927 1023.25 818.6401)" class="st1 futura-book st3">43.26</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1015.89 782.1301)" class="st1 futura-book st3">1009.19 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.6843 778.6899)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1005.9 772.19)" class="st4 futura-light st6">LOTE 10F</text>
            </g>
          </g>
        </g>
        <g id="isla-g">
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[76]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[76])">
            <polygon id="G1" class="property nvt-sprite-1" points="1166.3,154.4 1166.3,233.2 1363.1,233.2 1363.1,180.1"/>
            <g id="info-g1">
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 231.54)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 1262.9401 173.8906)" class="st1 futura-book st11">50.43</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 201.5301)" class="st1 futura-book st3">13.50</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 188.3)" class="st1 futura-book st3">20.04</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 208.44)" class="st1 futura-book st3">838.68 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 204.9998)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 198.4999)" class="st4 futura-light st6">NAVE 1G</text>
              
              <rect x="1266.4" y="179.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 258.5981 971.9084)" class="st7" width="6.1" height="6.1"/>
              <polygon class="st7" points="1269.5,186.9 1269.5,182.7 1269.4,178.3 1273.8,182.5"/>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[77]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[77])">
            <polygon id="G2" class="property nvt-sprite-2" points="1166.3,288.3 1363.1,288.3 1363.1,233.2 1166.3,233.2"/>
            <g id="info-g2">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 252.91)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 252.91)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 282.92)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 267.95)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 264.5098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 257.9999)" class="st4 futura-light st6">NAVE 2G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[78]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[78])">
            <rect id="G3" x="1166.3" y="288.3" class="property nvt-sprite-1" width="196.8" height="55.1"/>
            <g id="info-g3">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 310.37)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 310.37)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 340.38)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 325.41)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 321.9699)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 315.46)" class="st4 futura-light st6">NAVE 3G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[79]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[79])">
            <path id="G4" class="property nvt-sprite-2" d="M1166.3,398.5c0.2-0.1,196.8,0,196.8,0v-55.1h-196.8V398.5z"/>
            <g id="info-g4">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 365.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 365.77)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 395.78)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 380.81)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 377.3698)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 370.8601)" class="st4 futura-light st6">NAVE 4G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[80]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[80])">
            <rect id="G5" x="1166.3" y="398.5" class="property nvt-sprite-1" width="196.8" height="55"/>
            <g id="info-g5">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 421.8)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 421.8)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 451.81)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 436.8401)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 433.3999)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 426.89)" class="st4 futura-light st6">LOTE 5G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[81]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[81])">
            <rect id="G6" x="1166.3" y="453.5" class="property nvt-sprite-2" width="196.8" height="55.1"/>
            <g id="info-g6">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 475.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 475.95)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 505.9599)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 490.9901)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 487.5499)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1247.1799 481.04)" class="st4 futura-light st6">LOTE 6G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[82]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[82])">
            <rect id="G7" x="1166.3" y="508.6" class="property nvt-sprite-1" width="196.8" height="55.2"/>
            <g id="info-g7">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 531.16)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 531.16)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 561.16)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 546.19)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 542.7498)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1248.52 536.23)" class="st4 futura-light st6">LOTE 7G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[83]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[83])">
            <rect id="G8" x="1166.3" y="563.8" class="property nvt-sprite-2" width="196.8" height="55"/>
            <g id="info-g8">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 586.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 586.1801)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 616.1901)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 601.22)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 597.7798)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1248.52 591.2501)" class="st4 futura-light st6">LOTE 8G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[84]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[84])">
            <rect id="G9" x="1166.3" y="618.8" class="property nvt-sprite-1" width="196.8" height="55.2"/>
            <g id="info-g9">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 641.2001)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 641.2001)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 671.21)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 656.2401)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 652.7999)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1248.52 646.28)" class="st4 futura-light st6">LOTE 9G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[85]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[85])">
            <rect id="G10" x="1166.3" y="674" class="property nvt-sprite-2" width="196.8" height="55.1"/>
            <g id="info-g10">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 695.92)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 695.92)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1263.0599 725.9301)" class="st1 futura-book st3">50.00</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 710.95)" class="st1 futura-book st3">700.00 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 707.5098)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1245.0299 701.03)" class="st4 futura-light st6">LOTE 10G</text>
            </g>
          </g>
          <g class="property__active" ng-class="nvtPedroEscobedo.inmovablesClassList[86]" ng-click="nvtPedroEscobedo.setLeadProperty(nvtPedroEscobedo.inmovablesData.inmovables[86])">
            <polygon id="G11" class="property nvt-sprite-1" points="1166.3,805.9 1363.1,784.1 1363.1,729.1 1166.3,729.1"/>
            <g id="info-g11">
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1355.0502 749.23)" class="st1 futura-book st3">14.00</text>
              <text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1169.6088 759.47)" class="st1 futura-book st3">19.54</text>
              <text transform="matrix(0.9942 -0.108 0.108 0.9942 1263.35 791.2601)" class="st1 futura-book st3">50.31</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1255.99 764.27)" class="st1 futura-book st3">838.40 m</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1282.7843 760.8298)" class="st1 futura-book st3">2</text>
              <text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1245.0299 754.34)" class="st4 futura-light st6">LOTE 11G</text>
            </g>
          </g>
        </g>
      </g>
    </svg>

	</div>

</body>
</html>