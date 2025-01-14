<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="grupoccima.com">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Grupo CCIMA</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="PBTaigaCtrl as taiga">

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

	<div class="modal__panel" ng-class="taiga.taigaListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>Taiga 2 - Lotes</p>
				<span class="close__panel" ng-click="taiga.closeDesiertoListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
			</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in taiga.inmovablesData.inmovables" ng-if="property.idCondominium === 18">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Lote {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" ng-class="taiga.inmovablesClassList[$index]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="taiga.dialogDisplay">
		<div class="backdrop-dialog" ng-click="taiga.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="taiga.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{taiga.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in taiga.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="taiga.selectUser(lead.idLead, $index)" ng-class="taiga.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="taiga.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="taiga.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="taiga.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="taiga.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="taiga.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{taiga.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
                    </li>
                    <li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>



	<div class="plano_container">

		<div class="container mt-64">
			<div class="row portto_blanco-quote-header">
				<div class="col s12">
					<h1 class="center-align">TAIGA 2</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="taiga.showInmovablesList()">list</i></button>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	        x="0px" y="0px" viewBox="0 0 1366 1175.9" style="enable-background:new 0 0 1366 1175.9;" xml:space="preserve">

            <style type="text/css">
                .sty{fill:none;stroke:#000000;stroke-width:3.6529;stroke-miterlimit:10;}
            </style>

            <image style="overflow:visible;" width="1366" height="1176" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/taiga/condos/taiga_2.jpg"></image>
            <g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[111]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[111])">
                        <polyline class="property pb-sprite-1" points="904.7,404.8 896.7,365.2 1022.3,338.9 1030.8,379.4 904.7,404.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="925.7,372.8 918.6,380.4 925.7,388.1"/>
                            <polygon class="mustard__dr__fill" points="925.8,372.8 925.8,388.1 932.9,380.4"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 947.5378 386.5159)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 958.2332 373.3462)" class="mustard__fill futura-med fs__8-8__px">01</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 949.5659 363.1454)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1015.9521 353.0076)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 902.1242 375.471)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[112]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[112])">
                        <polygon class="property pb-sprite-2" points="904.7,404.8 913,445.5 1039.2,419.8 1030.8,379.4"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 956.5105 428.1342)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 967.2062 414.9664)" class="mustard__fill futura-med fs__8-8__px">02</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 958.5389 404.011)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1024.928 391.2847)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 910.6553 416.5388)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[113]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[113])">
                        <polygon class="property pb-sprite-1" points="913,445.5 921.1,485.4 1047.1,459.9 1039.2,419.8"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 963.7344 470.0908)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 974.4308 456.9219)" class="mustard__fill futura-med fs__8-8__px">03</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 965.3674 444.8769)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1031.8279 431.797)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 920.0392 456.8528)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[114]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[114])">
                        <polygon class="property pb-sprite-2" points="921.1,485.4 929.4,526 1055.5,500.3 1047.1,459.9"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 970.7427 510.0241)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 981.438 496.8544)" class="mustard__fill futura-med fs__8-8__px">04</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 972.9717 484.9165)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1039.7296 472.5261)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 927.2654 496.6159)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[115]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[115])">
                        <polygon class="property pb-sprite-1" points="1055.5,500.3 1063.8,540.6 937.6,566.3 929.4,526"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 979.0151 550.8889)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 989.7106 537.7202)" class="mustard__fill futura-med fs__8-8__px">05</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 981.2441 525.782)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1049.3936 515.3249)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 935.5971 537.2053)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[116]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[116])">
                        <polygon class="property pb-sprite-2" points="937.6,566.3 945.7,606.6 1072,581.2 1063.8,540.6"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 987.0906 591.221)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 997.7869 578.0511)" class="mustard__fill futura-med fs__8-8__px">06</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 989.3195 566.1144)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1057.4716 555.6566)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 943.6721 577.5366)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[117]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[117])">
                        <polygon class="property pb-sprite-1" points="1072,581.2 1080.1,621.3 953.9,646.9 945.7,606.6"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="975.4,611.1 968.3,618.7 975.4,626.3"/>
                            <polygon class="mustard__dr__fill" points="975.5,611.1 975.5,626.3 982.6,618.7"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 993.9957 630.2681)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1004.6901 617.0986)" class="mustard__fill futura-med fs__8-8__px">07</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 996.2238 605.1613)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1064.3734 594.7023)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 950.5761 616.5829)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[118]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[118])">
                        <polygon class="property pb-sprite-2" points="953.9,646.9 962.1,687.4 1088.2,661.9 1080.1,621.3"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="985.7,653.6 978.6,661.2 985.7,668.9"/>
                            <polygon class="mustard__dr__fill" points="985.8,653.6 985.8,668.9 992.9,661.2"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1002.3766 671.4103)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1013.0719 658.2406)" class="mustard__fill futura-med fs__8-8__px">08</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 1004.6041 646.3027)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1072.7555 635.8446)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 958.9583 657.7261)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[119]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[119])">
                        <polygon class="property pb-sprite-1" points="1088.2,661.9 1096.5,701.9 970.4,727.6 962.1,687.4"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="994,695 986.8,702.6 994,710.3"/>
                            <polygon class="mustard__dr__fill" points="994,695 994,710.3 1001.2,702.6"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1011.4886 713.111)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1022.1849 699.9412)" class="mustard__fill futura-med fs__8-8__px">09</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 1013.7178 688.0027)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1081.8673 677.5453)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 968.0708 699.4257)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[120]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[120])">
                        <polygon class="property pb-sprite-2" points="970.4,727.6 978.6,768.2 1104.8,742.3 1096.5,701.9"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="1002.3,734.7 995.2,742.3 1002.3,750"/>
                            <polygon class="mustard__dr__fill" points="1002.4,734.7 1002.4,750 1009.5,742.3"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1019.7716 752.8716)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1030.469 739.7025)" class="mustard__fill futura-med fs__8-8__px">10</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 1022.0002 727.765)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1090.1504 717.3083)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 976.3538 739.1877)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[121]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[121])">
                        <polyline class="property pb-sprite-1" points="978.6,768.2 992,834.3 1114,788.5 1104.8,742.3 978.6,768.2"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="1012,787.9 1004.9,795.5 1012,803.1"/>
                            <polygon class="mustard__dr__fill" points="1012.1,787.9 1012.1,803.1 1019.2,795.5"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1028.1088 795.4498)" class="white__fill futura-book fs__6-8__px">278.66 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 1038.804 782.2792)" class="mustard__fill futura-med fs__8-8__px">11</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 1030.4685 766.6524)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.93 -0.3676 0.3676 0.93 1041.6713 813.0944)" class="white__fill futura-book fs__6-8__px">25.32</text>
                        <text transform="matrix(0.2015 0.9795 -0.9795 0.2015 986.2653 789.8245)" class="white__fill futura-book fs__6-8__px">13.14</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 1097.3983 758.2446)" class="white__fill futura-book fs__6-8__px">9.15</text>
                    </g>
                    <g>
                        <line class="white__stroke no__fill" x1="1104.8" y1="742.3" x2="978.6" y2="768.2"/>
                        <line class="white__stroke no__fill" x1="1096.5" y1="701.9" x2="970.4" y2="727.6"/>
                        <line class="white__stroke no__fill" x1="1088.2" y1="661.9" x2="962.1" y2="687.4"/>
                        <line class="white__stroke no__fill" x1="1080.1" y1="621.3" x2="953.9" y2="646.9"/>
                        <line class="white__stroke no__fill" x1="945.7" y1="606.6" x2="1072" y2="581.2"/>
                        <line class="white__stroke no__fill" x1="1063.8" y1="540.6" x2="937.6" y2="566.3"/>
                        <line class="white__stroke no__fill" x1="1055.5" y1="500.3" x2="929.4" y2="526"/>
                        <line class="white__stroke no__fill" x1="1047.1" y1="459.9" x2="921.1" y2="485.4"/>
                        <line class="white__stroke no__fill" x1="1039.2" y1="419.8" x2="913" y2="445.5"/>
                        <line class="white__stroke no__fill" x1="1030.8" y1="379.4" x2="904.7" y2="404.8"/>
                        <line class="white__stroke no__fill" x1="1022.3" y1="338.9" x2="896.7" y2="365.2"/>
                    </g>
                </g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[122]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[122])">
                        <polygon class="property pb-sprite-2" points="1062.9,858.6 1123.8,836 1149.8,963.5 1108.2,979.3"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="1099.7,861.4 1092.6,869 1099.7,876.7"/>
                            <polygon class="mustard__dr__fill" points="1099.8,861.4 1099.8,876.7 1106.9,869"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1093.3168 888.9131)" class="white__fill futura-book fs__6-8__px">264.61m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1108.2164 897.027)" class="mustard__fill futura-med fs__8-8__px">12</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 1085.3604 860.1705)" class="white__fill futura-book fs__6-8__px">12.58</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 1118.5585 969.7648)" class="white__fill futura-book fs__6-8__px">8.59</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 1083.6829 904.2413)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.1806 0.9836 -0.9836 0.1806 1124.7284 890.1198)" class="white__fill futura-book fs__6-8__px">25.32</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[123]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[123])">
                        <polygon class="property pb-sprite-1" points="1062.9,858.6 1019.7,875 1065.1,995.6 1108.2,979.3"/>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1052.6011 906.3375)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1067.5023 914.4518)" class="mustard__fill futura-med fs__8-8__px">13</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 1035.5647 878.5333)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 1077.5765 986.4291)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 1039.7294 920.809)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[124]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[124])">
                        <polygon class="property pb-sprite-2" points="971.5,893 1019.7,875 1065.1,995.6 1016.8,1013.6"/>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1006.2649 923.0154)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 1021.1646 931.1283)" class="mustard__fill futura-med fs__8-8__px">14</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 987.09 897.0267)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 1028.1061 1004.1624)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 993.2635 939.6908)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[125]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[125])">
                        <polygon class="property pb-sprite-1" points="971.5,893 923.5,911.3 968.8,1031.7 1016.8,1013.6"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="956.5,915.4 949.4,923 956.5,930.7"/>
                            <polygon class="mustard__dr__fill" points="956.6,915.4 956.6,930.7 963.7,923"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 959.0478 940.6878)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 973.9474 948.8007)" class="mustard__fill futura-med fs__8-8__px">15</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 939.8725 914.6977)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 980.8889 1021.8343)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 946.0473 957.3647)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[126]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[126])">
                        <polygon class="property pb-sprite-2" points="875.2,929.1 923.5,911.3 968.8,1031.7 920.5,1049.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="906.4,935.3 899.2,942.9 906.4,950.6"/>
                            <polygon class="mustard__dr__fill" points="906.4,935.3 906.4,950.6 913.6,942.9"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 910.8973 958.9124)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 925.7971 967.0242)" class="mustard__fill futura-med fs__8-8__px">16</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 891.7225 932.9227)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 932.7383 1040.0574)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 897.8956 975.5875)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[127]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[127])">
                        <polygon class="property pb-sprite-1" points="875.2,929.1 827.1,947.4 872.5,1068 920.5,1049.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="857.7,953.3 850.6,960.9 857.7,968.6"/>
                            <polygon class="mustard__dr__fill" points="857.8,953.3 857.8,968.6 864.9,960.9"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 862.3856 977.1365)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 877.2853 985.2495)" class="mustard__fill futura-med fs__8-8__px">17</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 843.2093 951.1467)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 884.2262 1058.2832)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 849.3848 993.8124)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[128]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[128])">
                        <polygon class="property pb-sprite-2" points="778.8,965.2 824.2,1086.1 872.5,1068 827.1,947.4"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="810.5,969.5 803.4,977.1 810.5,984.8"/>
                            <polygon class="mustard__dr__fill" points="810.6,969.5 810.6,984.8 817.7,977.1"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 814.7203 994.1174)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 829.6199 1002.2314)" class="mustard__fill futura-med fs__8-8__px">18</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 795.5457 968.1278)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 836.5609 1075.2638)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 801.7191 1010.7941)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[129]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[129])">
                        <polygon class="property pb-sprite-1" points="731.3,984 778.8,965.2 824.2,1086.1 776,1104.1"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="762.2,989.5 755.1,997.1 762.2,1004.8"/>
                            <polygon class="mustard__dr__fill" points="762.3,989.5 762.3,1004.8 769.4,997.1"/>
                        </g>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 766.7566 1012.1646)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3664 0.9305 -0.9305 0.3664 781.6567 1020.2773)" class="mustard__fill futura-med fs__8-8__px">19</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 747.5801 986.175)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9417 -0.3364 0.3364 0.9417 788.5958 1093.3097)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3208 0.9471 -0.9471 0.3208 753.7545 1028.8401)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g>
                        <line class="white__stroke no__fill" x1="778.8" y1="965.2" x2="824.2" y2="1086.1"/>
                        <line class="white__stroke no__fill" x1="872.5" y1="1068" x2="827.1" y2="947.4"/>
                        <line class="white__stroke no__fill" x1="875.2" y1="929.1" x2="920.5" y2="1049.8"/>
                        <line class="white__stroke no__fill" x1="968.8" y1="1031.7" x2="923.5" y2="911.3"/>
                        <line class="white__stroke no__fill" x1="971.5" y1="893" x2="1016.8" y2="1013.6"/>
                        <line class="white__stroke no__fill" x1="1065.1" y1="995.6" x2="1019.7" y2="875"/>
                        <line class="white__stroke no__fill" x1="1062.9" y1="858.6" x2="1108.2" y2="979.3"/>
                    </g>
                </g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[130]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[130])">
                        <polygon class="property pb-sprite-2" points="716.5,1082.3 731.3,1120.9 610.4,1166.3 596.1,1127.5"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="700.7,1102.8 693.6,1110.5 700.7,1118.1"/>
                            <polygon class="mustard__dr__fill" points="700.8,1102.8 700.8,1118.1 707.9,1110.5"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 645.5939 1133.6914)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 655.147 1120.6619)" class="mustard__fill futura-med fs__8-8__px">20</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 710.6553 1094.8517)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 606.2806 1135.0476)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 657.8551 1142.5292)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[131]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[131])">
                        <polygon class="property pb-sprite-1" points="581.8,1089 596.1,1127.5 716.5,1082.3 702.5,1044"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 629.2728 1095.8796)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 638.8264 1082.85)" class="mustard__fill futura-med fs__8-8__px">21</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 696.5311 1058.2852)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 590.6908 1099.4275)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 642.2653 1104.9012)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[132]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[132])">
                        <polygon class="property pb-sprite-2" points="687.7,1005.1 702.5,1044 581.8,1089 567.3,1050.5"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 615.4304 1056.8473)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 627.9065 1044.5491)" class="mustard__fill futura-med fs__8-8__px">22</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 682.0979 1020.2774)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 576.8482 1061.1261)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 629.2737 1066.5186)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[133]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[133])">
                        <polygon class="property pb-sprite-1" points="552.8,1012.1 567.3,1050.5 687.7,1005.1 673.3,966.7"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 601.0911 1018.3845)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 610.6447 1005.3537)" class="mustard__fill futura-med fs__8-8__px">23</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 668.5008 981.3813)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 561.48 1021.8363)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 615.4218 1027.7921)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[134]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[134])">
                        <polygon class="property pb-sprite-2" points="538.4,973.3 659,928.2 673.3,966.7 552.8,1012.1"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="643,948.5 635.9,956.2 643,963.8"/>
                            <polygon class="mustard__dr__fill" points="643.1,948.5 643.1,963.8 650.2,956.2"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 588.7407 979.9487)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 598.2947 966.9188)" class="mustard__fill futura-med fs__8-8__px">24</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 654.2986 942.6733)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 547.2759 983.592)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 602.9249 988.7493)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[135]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[135])">
                        <polygon class="property pb-sprite-1" points="524.1,934.9 538.4,973.3 659,928.2 644.5,889.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="630.4,911.1 623.3,918.7 630.4,926.4"/>
                            <polygon class="mustard__dr__fill" points="630.5,911.1 630.5,926.4 637.6,918.7"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 575.6536 941.0686)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 585.2066 928.0391)" class="mustard__fill futura-med fs__8-8__px">25</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 640.3868 904.2419)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 532.738 945.6134)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 587.9156 950.8347)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[136]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[136])">
                        <polygon class="property pb-sprite-2" points="509.4,896.1 629.8,851 644.5,889.8 524.1,934.9"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="615.4,871.4 608.3,879 615.4,886.7"/>
                            <polygon class="mustard__dr__fill" points="615.5,871.4 615.5,886.7 622.6,879"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 561.1569 902.8261)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 570.7101 889.7955)" class="mustard__fill futura-med fs__8-8__px">26</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 626.544 867.5034)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 517.7512 906.3402)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 573.419 912.5908)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[137]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[137])">
                        <polygon class="property pb-sprite-1" points="494.8,857.8 509.4,896.1 629.8,851 615.5,812.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="601.1,833.6 593.9,841.3 601.1,848.9"/>
                            <polygon class="mustard__dr__fill" points="601.1,833.6 601.1,848.9 608.3,841.3"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 545.9306 863.9442)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 555.4841 850.9146)" class="mustard__fill futura-med fs__8-8__px">27</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 611.8304 828.6885)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 503.2964 867.5027)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 558.1926 873.7097)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[138]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[138])">
                        <polygon class="property pb-sprite-2" points="480.6,819.1 601,774.1 615.5,812.8 494.8,857.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="586.4,796.1 579.3,803.7 586.4,811.3"/>
                            <polygon class="mustard__dr__fill" points="586.5,796.1 586.5,811.3 593.6,803.7"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 529.2999 827.6635)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 538.8541 814.6326)" class="mustard__fill futura-med fs__8-8__px">28</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 597.0778 789.332)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 489.1853 827.6624)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 541.5625 837.4293)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[139]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[139])">
                        <polygon class="property pb-sprite-1" points="465.7,780.9 480.6,819.1 601,774.1 586.6,735.4"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="572.5,756.3 565.4,763.9 572.5,771.6"/>
                            <polygon class="mustard__dr__fill" points="572.6,756.3 572.6,771.6 579.7,763.9"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 516.7244 787.4149)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 526.2783 774.3862)" class="mustard__fill futura-med fs__8-8__px">29</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 582.8525 750.3561)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 474.9859 789.3317)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 528.9868 797.1812)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[140]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[140])">
                        <polygon class="property pb-sprite-2" points="571.8,696.8 586.6,735.4 465.7,780.9 451.6,742.1"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 500.588 748.4826)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 510.1412 735.452)" class="mustard__fill futura-med fs__8-8__px">30</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 566.9775 711.6989)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 461.1852 752.1703)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 512.8502 758.2468)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[141]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[141])">
                        <polygon class="property pb-sprite-1" points="437.2,703.7 451.6,742.1 571.8,696.8 557.6,658.4"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 484.6657 710.4831)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 494.22 697.4542)" class="mustard__fill futura-med fs__8-8__px">31</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 551.9938 671.4107)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 446.5515 714.045)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 496.9276 720.2478)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[142]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[142])">
                        <polygon class="property pb-sprite-2" points="542.9,619.7 557.6,658.4 437.2,703.7 422.6,665.2"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 473.0096 672.7905)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 482.5635 659.7618)" class="mustard__fill futura-med fs__8-8__px">32</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 538.8532 634.6581)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 431.9283 674.5776)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 485.2722 682.557)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[143]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[143])">
                        <polygon class="property pb-sprite-1" points="528.6,581.6 542.9,619.7 422.6,665.2 408.2,626.8"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 458.3274 633.1075)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 467.881 620.0779)" class="mustard__fill futura-med fs__8-8__px">33</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 524.9413 597.5684)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 417.6952 637.3005)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 470.5897 642.8735)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[144]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[144])">
                        <polygon class="property pb-sprite-2" points="514,542.6 528.6,581.6 408.2,626.8 393.7,588"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 442.6239 594.6689)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 452.1785 581.6409)" class="mustard__fill futura-med fs__8-8__px">34</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 510.2814 558.7204)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 403.3383 597.5681)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 454.8868 604.4343)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[145]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[145])">
                        <polygon class="property pb-sprite-1" points="499.8,504.5 514,542.6 393.7,588 379.1,549.7"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 427.1541 557.2894)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 436.708 544.2595)" class="mustard__fill futura-med fs__8-8__px">35</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 495.3121 519.4143)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 388.7037 560.5667)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 439.4164 567.0558)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[146]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[146])">
                        <polygon class="property pb-sprite-2" points="364.7,510.7 485.1,465.8 499.8,504.5 379.1,549.7"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 412.4785 519.4148)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 422.0329 506.3848)" class="mustard__fill futura-med fs__8-8__px">36</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 480.5461 482.0326)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 374.3449 521.1223)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 424.7412 529.1805)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[147]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[147])">
                        <polygon class="property pb-sprite-1" points="470.9,427.4 485.1,465.8 364.7,510.7 350.3,472.6"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 399.3741 479.4693)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 408.9281 466.4395)" class="mustard__fill futura-med fs__8-8__px">37</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 467.0359 442.913)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 359.7786 483.7115)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 411.6368 489.2352)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[148]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[148])">
                        <polygon class="property pb-sprite-2" points="335.8,433.6 456.1,388.6 470.9,427.4 350.3,472.6"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 383.6896 441.8078)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 393.2434 428.7791)" class="mustard__fill futura-med fs__8-8__px">38</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 451.4855 404.0131)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 345.3504 444.8793)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 395.9517 451.575)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[149]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[149])">
                        <polygon class="property pb-sprite-1" points="441.8,350.1 456.1,388.6 335.8,433.6 321.3,395.4"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 368.6895 404.3144)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 378.2437 391.2866)" class="mustard__fill futura-med fs__8-8__px">39</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 437.4894 367.1334)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 330.9236 407.3149)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 380.9527 414.0816)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[150]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[150])">
                        <polygon class="property pb-sprite-2" points="306.9,356.7 321.3,395.4 441.8,350.1 427.2,311.6"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 356.4286 364.778)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 365.9833 351.7489)" class="mustard__fill futura-med fs__8-8__px">40</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 423.3274 326.1489)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 316.359 368.5527)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 368.692 374.5446)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[151]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[151])">
                        <polygon class="property pb-sprite-1" points="412.8,273.2 427.2,311.6 306.9,356.7 292.4,318.4"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 341.9321 325.0939)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 351.4864 312.065)" class="mustard__fill futura-med fs__8-8__px">41</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 409.5387 287.8257)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 302.0005 329.3149)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 354.195 334.8599)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[152]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[152])">
                        <polygon class="property pb-sprite-2" points="277.9,279.4 292.4,318.4 412.8,273.2 398.3,234.3"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 328.7058 287.8263)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 338.2593 274.7967)" class="mustard__fill futura-med fs__8-8__px">42</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 395.1782 250.2796)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 287.2156 289.9904)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 340.9679 297.5921)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[153]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[153])">
                        <polygon class="property pb-sprite-1" points="263.5,241.2 277.9,279.4 398.3,234.3 383.9,196.2"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 313.3537 248.9231)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 322.9072 235.8935)" class="mustard__fill futura-med fs__8-8__px">43</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 379.2998 210.5931)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 272.4433 250.279)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 325.616 258.689)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[154]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[154])">
                        <polygon class="property pb-sprite-2" points="248.8,202.5 263.5,241.2 383.9,196.2 369.4,157.4"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 299.1353 210.5935)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 308.6889 197.5639)" class="mustard__fill futura-med fs__8-8__px">44</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 364.5952 174.0831)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 258.223 212.3204)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 311.3967 220.3586)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[155]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[155])">
                        <polygon class="property pb-sprite-1" points="234.6,164.3 248.8,202.5 369.4,157.4 355.1,119.1"/>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 286.2039 169.1107)" class="white__fill futura-book fs__6-8__px">200.00 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 295.7577 156.082)" class="mustard__fill futura-med fs__8-8__px">45</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 351.2676 133.6196)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 244.1321 174.0824)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 299.8557 180.6237)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[156]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[156])">
                        <path class="property pb-sprite-2" d="M212.5,105.6l22.1,58.7l120.5-45.1l-15-39.9C340,79.2,228.5,100.5,212.5,105.6z"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="323.7,99.3 316.6,107 323.7,114.6"/>
                            <polygon class="mustard__dr__fill" points="323.8,99.3 323.8,114.6 330.9,107"/>
                        </g>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 265.9548 133.6192)" class="white__fill futura-book fs__6-8__px">257.08 m2</text>
                        <text transform="matrix(0.9471 -0.321 0.321 0.9471 274.7782 119.1305)" class="mustard__fill futura-med fs__8-8__px">46</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 334.8373 92.7664)" class="white__fill futura-book fs__6-8__px">8.28</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 225.9053 125.0747)" class="white__fill futura-book fs__6-8__px">12.14</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 283.7762 143.5207)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.9797 -0.2003 0.2003 0.9797 265.9553 102.9323)" class="white__fill futura-book fs__6-8__px">25.30</text>
                    </g>
                    <g>
                        <line class="white__stroke no__fill" x1="355.1" y1="119.1" x2="234.6" y2="164.3"/>
                        <line class="white__stroke no__fill" x1="369.4" y1="157.4" x2="248.8" y2="202.5"/>
                        <line class="white__stroke no__fill" x1="383.9" y1="196.2" x2="263.5" y2="241.2"/>
                        <line class="white__stroke no__fill" x1="398.3" y1="234.3" x2="277.9" y2="279.4"/>
                        <line class="white__stroke no__fill" x1="412.8" y1="273.2" x2="292.4" y2="318.4"/>
                        <line class="white__stroke no__fill" x1="427.2" y1="311.6" x2="306.9" y2="356.7"/>
                        <line class="white__stroke no__fill" x1="321.3" y1="395.4" x2="441.8" y2="350.1"/>
                        <line class="white__stroke no__fill" x1="456.1" y1="388.6" x2="335.8" y2="433.6"/>
                        <line class="white__stroke no__fill" x1="350.3" y1="472.6" x2="470.9" y2="427.4"/>
                        <line class="white__stroke no__fill" x1="485.1" y1="465.8" x2="364.7" y2="510.7"/>
                        <line class="white__stroke no__fill" x1="379.1" y1="549.7" x2="499.8" y2="504.5"/>
                        <line class="white__stroke no__fill" x1="514" y1="542.6" x2="393.7" y2="588"/>
                        <line class="white__stroke no__fill" x1="408.2" y1="626.8" x2="528.6" y2="581.6"/>
                        <line class="white__stroke no__fill" x1="542.9" y1="619.7" x2="422.6" y2="665.2"/>
                        <line class="white__stroke no__fill" x1="437.2" y1="703.7" x2="557.6" y2="658.4"/>
                        <line class="white__stroke no__fill" x1="571.8" y1="696.8" x2="451.6" y2="742.1"/>
                        <line class="white__stroke no__fill" x1="465.7" y1="780.9" x2="586.6" y2="735.4"/>
                        <line class="white__stroke no__fill" x1="601" y1="774.1" x2="480.6" y2="819.1"/>
                        <line class="white__stroke no__fill" x1="494.8" y1="857.8" x2="615.5" y2="812.8"/>
                        <line class="white__stroke no__fill" x1="629.8" y1="851" x2="509.4" y2="896.1"/>
                        <path class="white__stroke no__fill" d="M524.1,934.9c5.9-2.2,120.4-45.1,120.4-45.1"/>
                        <line class="white__stroke no__fill" x1="659" y1="928.2" x2="538.4" y2="973.3"/>
                        <line class="white__stroke no__fill" x1="552.8" y1="1012.1" x2="673.3" y2="966.7"/>
                        <line class="white__stroke no__fill" x1="687.7" y1="1005.1" x2="567.3" y2="1050.5"/>
                        <line class="white__stroke no__fill" x1="581.8" y1="1089" x2="702.5" y2="1044"/>
                        <line class="white__stroke no__fill" x1="716.5" y1="1082.3" x2="596.1" y2="1127.5"/>
                    </g>
                </g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[157]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[157])">
                        <polyline class="property pb-sprite-1" points="800.3,106.6 791.8,66.4 905.5,42.6 913.8,83.6 800.3,106.6"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="820.6,73.9 813.5,81.6 820.6,89.2"/>
                            <polygon class="mustard__dr__fill" points="820.7,73.9 820.7,89.2 827.8,81.6"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 836.2602 88.4619)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 846.9563 75.291)" class="mustard__fill futura-med fs__8-8__px">47</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 839.1265 64.7198)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 899.2375 56.3111)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 797.2634 77.5484)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[158]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[158])">
                        <polygon class="property pb-sprite-2" points="800.3,106.6 808.6,147.2 922.2,124.1 913.8,83.6"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 844.0939 130.6852)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 854.7882 117.5157)" class="mustard__fill futura-med fs__8-8__px">48</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 846.5825 106.9669)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 908.2379 96.7631)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 805.2742 117.0334)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[159]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[159])">
                        <polygon class="property pb-sprite-1" points="808.6,147.2 818.8,197.3 932.3,174.5 922.2,124.1"/>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 853.6872 175.7642)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 864.3827 162.5955)" class="mustard__fill futura-med fs__8-8__px">49</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 855.6943 147.0051)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 917.1353 139.2487)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 814.9879 160.6862)" class="white__fill futura-book fs__6-8__px">10.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[160]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[160])">
                        <polygon class="property pb-sprite-2" points="818.8,197.3 829.3,248.1 942.8,224.7 932.3,174.5"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="846.9,213.1 839.8,220.8 846.9,228.4"/>
                            <polygon class="mustard__dr__fill" points="847,213.1 847,228.4 854.1,220.8"/>
                        </g>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 863.2722 224.456)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.9817 -0.1905 0.1905 0.9817 873.9667 211.2874)" class="mustard__fill futura-med fs__8-8__px">50</text>
                        <text transform="matrix(0.98 -0.1991 0.1991 0.98 864.9428 198.6618)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 926.7966 189.6501)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.1831 0.9831 -0.9831 0.1831 825.603 212.3206)" class="white__fill futura-book fs__6-8__px">10.00</text>
                    </g>
                    <g>
                        <line class="white__stroke no__fill" x1="932.3" y1="174.5" x2="818.8" y2="197.3"/>
                        <line class="white__stroke no__fill" x1="808.6" y1="147.2" x2="922.2" y2="124.1"/>
                        <line class="white__stroke no__fill" x1="913.8" y1="83.6" x2="800.3" y2="106.6"/>
                    </g>
                </g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[161]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[161])">
                        <polygon class="property pb-sprite-2" points="431.2,186.1 470.9,172 510.7,279.7 470.9,294.2"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="458.4,191 451.3,198.7 458.4,206.3"/>
                            <polygon class="mustard__dr__fill" points="458.5,191 458.5,206.3 465.6,198.7"/>
                        </g>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 462.1165 214.9571)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 476.7992 223.4592)" class="mustard__fill futura-med fs__8-8__px">51</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 449.8132 229.2621)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9477 -0.3192 0.3192 0.9477 446.1418 189.8557)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9272 -0.3746 0.3746 0.9272 482.3718 285.116)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[162]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[162])">
                        <polygon class="property pb-sprite-1" points="470.9,172 510.7,279.7 548.8,265.6 508.2,157.1"/>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 501.9749 200.7224)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 516.6577 209.2234)" class="mustard__fill futura-med fs__8-8__px">52</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 489.6714 215.0265)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9477 -0.3192 0.3192 0.9477 486.0002 175.6185)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9272 -0.3746 0.3746 0.9272 522.2289 270.8793)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[163]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[163])">
                        <polygon class="property pb-sprite-2" points="546.3,142.2 587.7,251.5 548.8,265.6 508.2,157.1"/>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 539.402 186.043)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 554.0839 194.5443)" class="mustard__fill futura-med fs__8-8__px">53</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 527.0989 200.3479)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9477 -0.3192 0.3192 0.9477 523.4263 160.9391)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9272 -0.3746 0.3746 0.9272 559.6561 256.2004)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[164]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[164])">
                        <polygon class="property pb-sprite-1" points="546.3,142.2 585.6,128.1 626.2,237 587.7,251.5"/>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 577.799 171.8358)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 592.4813 180.337)" class="mustard__fill futura-med fs__8-8__px">54</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 565.4952 186.1396)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9477 -0.3192 0.3192 0.9477 561.8238 146.7333)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9272 -0.3746 0.3746 0.9272 598.0533 241.9933)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[165]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[165])">
                        <polygon class="property pb-sprite-2" points="623.8,113.2 664.8,222.5 626.2,237 585.6,128.1"/>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 617.213 157.1206)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 631.8961 165.6225)" class="mustard__fill futura-med fs__8-8__px">55</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 604.91 171.4242)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9477 -0.3192 0.3192 0.9477 601.2385 132.0169)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9272 -0.3746 0.3746 0.9272 637.4675 227.2784)" class="white__fill futura-book fs__6-8__px">8.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[166]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[166])">
                        <polygon class="property pb-sprite-1" points="623.8,113.2 674.7,94.1 715.7,203.1 664.8,222.5"/>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 663.7502 144.6777)" class="white__fill futura-book fs__6-8__px">239.71 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 678.432 153.1791)" class="mustard__fill futura-med fs__8-8__px">56</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 651.1902 161.9272)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 678.0323 213.0039)" class="white__fill futura-book fs__6-8__px">10.65</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 640.0475 119.1903)" class="white__fill futura-book fs__6-8__px">10.65</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[167]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[167])">
                        <polygon class="property pb-sprite-2" points="743.5,67.6 767.1,184 715.7,203.1 674.7,94.1"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="715.6,95.4 708.5,103 715.6,110.6"/>
                            <polygon class="mustard__dr__fill" points="715.7,95.4 715.7,110.6 722.8,103"/>
                        </g>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 714.5847 122.9124)" class="white__fill futura-book fs__6-8__px">280.13 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 729.2682 131.4152)" class="mustard__fill futura-med fs__8-8__px">57</text>
                        <text transform="matrix(0.1119 0.9937 -0.9937 0.1119 745.5836 116.9567)" class="white__fill futura-book fs__6-8__px">22.78</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 696.5317 139.2516)" class="white__fill futura-book fs__6-8__px">22.50</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 701.4987 92.7677)" class="white__fill futura-book fs__6-8__px">14.25</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 733.0206 192.3034)" class="white__fill futura-book fs__6-8__px">10.65</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[168]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[168])">
                        <polygon class="property pb-sprite-2" points="708.1,205.6 767.1,184 793.2,311.6 753.1,325.9"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="763.3,284 756.2,291.6 763.3,299.3"/>
                            <polygon class="mustard__dr__fill" points="763.4,284 763.4,299.3 770.5,291.6"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 730.0417 208.736)" class="white__fill futura-book fs__6-8__px">12.31</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 763.3148 319.7985)" class="white__fill futura-book fs__6-8__px">8.32</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 741.796 235.2694)" class="white__fill futura-book fs__6-8__px">257.82 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 756.479 243.7724)" class="mustard__fill futura-med fs__8-8__px">58</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 727.3546 250.8331)" class="white__fill futura-book fs__6-8__px">25.00</text>
                        <text transform="matrix(0.2142 0.9768 -0.9768 0.2142 769.693 235.2776)" class="white__fill futura-book fs__6-8__px">25.32</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[169]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[169])">
                        <polygon class="property pb-sprite-1" points="710,342.5 753.1,325.9 708.1,205.6 664.8,222.5"/>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 718.6841 333.0293)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 681.0575 229.0308)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 698.5815 250.5949)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 713.2646 259.0968)" class="mustard__fill futura-med fs__8-8__px">59</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 684.1411 266.1588)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[170]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[170])">
                        <polygon class="property pb-sprite-2" points="616.4,239.8 662,360.7 710,342.5 664.8,222.5"/>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 671.5923 349.9858)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 633.9652 245.9874)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 651.6615 269.2093)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 666.3437 277.7116)" class="mustard__fill futura-med fs__8-8__px">60</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 637.2217 284.7716)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[171]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[171])">
                        <polygon class="property pb-sprite-1" points="568.8,258.4 616.4,239.8 662,360.7 613.7,378.7"/>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 625.4128 368.602)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 587.7861 264.6046)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 603.7265 287.106)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 618.4092 295.6081)" class="mustard__fill futura-med fs__8-8__px">61</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 589.2859 302.6692)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[172]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[172])">
                        <polygon class="property pb-sprite-2" points="519.8,276.3 565.1,396.6 613.7,378.7 568.8,258.4"/>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 577.0046 386.8572)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 539.3774 282.8599)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 555.3185 305.3617)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 570.0012 313.8627)" class="mustard__fill futura-med fs__8-8__px">62</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 540.8776 320.924)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[173]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[173])">
                        <polygon class="property pb-sprite-1" points="517,414.6 470.9,294.2 519.8,276.3 565.1,396.6"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="530.7,369.9 523.6,377.5 530.7,385.2"/>
                            <polygon class="mustard__dr__fill" points="530.8,369.9 530.8,385.2 537.9,377.5"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 528.4919 406.247)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 490.8412 298.7366)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 506.7816 321.2379)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 521.4643 329.74)" class="mustard__fill futura-med fs__8-8__px">63</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 492.3384 336.8012)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g>
                        <line class="white__stroke no__fill" x1="510.7" y1="279.7" x2="470.9" y2="172"/>
                        <line class="white__stroke no__fill" x1="674.7" y1="94.1" x2="715.7" y2="203.1"/>
                        <line class="white__stroke no__fill" x1="767.1" y1="184" x2="470.9" y2="294.2"/>
                        <line class="white__stroke no__fill" x1="565.1" y1="396.6" x2="519.8" y2="276.3"/>
                        <line class="white__stroke no__fill" x1="508.2" y1="157.1" x2="548.8" y2="265.6"/>
                        <line class="white__stroke no__fill" x1="546.3" y1="142.2" x2="587.7" y2="251.5"/>
                        <line class="white__stroke no__fill" x1="585.6" y1="128.1" x2="626.2" y2="237"/>
                        <line class="white__stroke no__fill" x1="753.1" y1="325.9" x2="708.1" y2="205.6"/>
                        <polyline class="white__stroke no__fill" points="710,342.5 664.8,222.5 623.8,113.2"/>
                        <line class="white__stroke no__fill" x1="616.4" y1="239.8" x2="662" y2="360.7"/>
                        <line class="white__stroke no__fill" x1="568.8" y1="258.4" x2="613.7" y2="378.7"/>
                    </g>
                </g>
                <g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[174]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[174])">
                        <polygon class="property pb-sprite-2" points="534.2,459.3 574.5,568.1 613.7,553.5 572.3,445"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="561.8,466.1 554.7,473.8 561.8,481.4"/>
                            <polygon class="mustard__dr__fill" points="561.9,466.1 561.9,481.4 569,473.8"/>
                        </g>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 547.8797 464.2353)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 585.2082 560.5692)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 557.4852 493.6344)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 570.707 502.8684)" class="mustard__fill futura-med fs__8-8__px">64</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 580.1082 492.2649)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[175]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[175])">
                        <polygon class="property pb-sprite-1" points="572.3,445 613.7,553.5 651.8,539.1 610.9,430.6"/>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 586.2287 450.4878)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 623.5565 546.8209)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 595.8327 479.8869)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 609.0541 489.12)" class="mustard__fill futura-med fs__8-8__px">65</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 618.4572 478.5164)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[176]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[176])">
                        <polygon class="property pb-sprite-2" points="610.9,430.6 651.8,539.1 690.2,524.5 649.3,416.2"/>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 625.1625 435.137)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 662.4905 531.4711)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 634.7672 464.5376)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 647.9883 473.7698)" class="mustard__fill futura-med fs__8-8__px">66</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 657.3921 463.1653)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[177]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[177])">
                        <polygon class="property pb-sprite-1" points="649.3,416.2 690.2,524.5 729.1,510.1 688,401.3"/>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 664.6545 420.4695)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 701.9827 516.8035)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 674.2584 449.8691)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 687.4802 459.1031)" class="mustard__fill futura-med fs__8-8__px">67</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 696.8836 448.4997)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[178]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[178])">
                        <polygon class="property pb-sprite-2" points="688,401.3 729.1,510.1 767.5,495.8 726.6,387"/>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 702.2671 406.2488)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 739.5948 502.5819)" class="white__fill futura-book fs__6-8__px">8.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 711.8729 435.6494)" class="white__fill futura-book fs__6-8__px">180.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 725.0945 444.8814)" class="mustard__fill futura-med fs__8-8__px">68</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 734.4954 434.2793)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[179]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[179])">
                        <polygon class="property pb-sprite-1" points="726.6,387 776.3,368.5 817.1,476.5 767.5,495.8"/>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 745.066 389.6815)" class="white__fill futura-book fs__6-8__px">10.31</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 782.395 486.0163)" class="white__fill futura-book fs__6-8__px">10.31</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 756.7031 415.8519)" class="white__fill futura-book fs__6-8__px">231.97 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 769.925 425.0848)" class="mustard__fill futura-med fs__8-8__px">69</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 782.3926 414.0798)" class="white__fill futura-book fs__6-8__px">22.50</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[180]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[180])">
                        <polygon class="property pb-sprite-2" points="776.3,368.5 817.1,476.5 866.6,457.9 845.3,353 803.4,358.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="811.4,375 804.3,382.6 811.4,390.3"/>
                            <polygon class="mustard__dr__fill" points="811.5,375 811.5,390.3 818.6,382.6"/>
                        </g>
                        <text transform="matrix(0.9888 -0.1491 0.1491 0.9888 817.1883 365.237)" class="white__fill futura-book fs__6-8__px">8.12</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 788.0814 373.0711)" class="white__fill futura-book fs__6-8__px">5.69</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 814.12 399.7614)" class="white__fill futura-book fs__6-8__px">264.56 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 828.8025 408.2646)" class="mustard__fill futura-med fs__8-8__px">70</text>
                        <text transform="matrix(0.2104 0.9776 -0.9776 0.2104 844.5889 396.0192)" class="white__fill futura-book fs__6-8__px">20.85</text>
                        <text transform="matrix(0.9373 -0.3486 0.3486 0.9373 830.8476 467.3765)" class="white__fill futura-book fs__6-8__px">10.31</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[181]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[181])">
                        <polygon class="property pb-sprite-2" points="805.6,480.9 851.4,601 893.1,586.1 866.6,457.9"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="864.3,558.2 857.2,565.8 864.3,573.5"/>
                            <polygon class="mustard__dr__fill" points="864.4,558.2 864.4,573.5 871.5,565.8"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 862.3861 595.0903)" class="white__fill futura-book fs__6-8__px">8.63</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 828.5021 483.7116)" class="white__fill futura-book fs__6-8__px">12.62</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 835.9974 508.9105)" class="white__fill futura-book fs__6-8__px">265.62 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 850.6804 517.4135)" class="mustard__fill futura-med fs__8-8__px">71</text>
                        <text transform="matrix(0.2265 0.974 -0.974 0.2265 867.6575 505.8693)" class="white__fill futura-book fs__6-8__px">25.32</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[182]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[182])">
                        <polygon class="property pb-sprite-1" points="762.7,497.6 807.8,618.1 851.4,601 805.6,480.9"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="821.4,576.8 814.3,584.4 821.4,592.1"/>
                            <polygon class="mustard__dr__fill" points="821.5,576.8 821.5,592.1 828.6,584.4"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 779.2141 502.5817)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 819.0012 609.7917)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 789.9964 527.5544)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 804.6797 536.0583)" class="mustard__fill futura-med fs__8-8__px">72</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 814.905 528.6735)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[183]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[183])">
                        <polygon class="property pb-sprite-2" points="764.4,634.1 719.2,513.7 762.7,497.6 807.8,618.1"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="778.2,593.5 771.1,601.1 778.2,608.8"/>
                            <polygon class="mustard__dr__fill" points="778.3,593.5 778.3,608.8 785.4,601.1"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 736.0002 519.2868)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 775.7865 626.496)" class="white__fill futura-book fs__6-8__px">9.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 746.7839 544.2612)" class="white__fill futura-book fs__6-8__px">225.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 761.467 552.7631)" class="mustard__fill futura-med fs__8-8__px">73</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 771.6912 545.3801)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[184]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[184])">
                        <polygon class="property pb-sprite-1" points="719.2,513.7 764.4,634.1 716.7,652.3 671,531.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="730,610.5 722.9,618.1 730,625.7"/>
                            <polygon class="mustard__dr__fill" points="730.1,610.5 730.1,625.7 737.2,618.1"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 729.2667 642.4569)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 688.6995 536.0576)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 698.5815 562.8038)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 713.2638 571.305)" class="mustard__fill futura-med fs__8-8__px">74</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 727.3553 560.5679)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[185]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[185])">
                        <polygon class="property pb-sprite-2" points="622.8,549.7 668.1,670.3 716.7,652.3 671,531.8"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="682,628.1 674.9,635.8 682,643.4"/>
                            <polygon class="mustard__dr__fill" points="682.1,628.1 682.1,643.4 689.2,635.8"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 681.2813 660.1296)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 640.7137 553.7293)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 650.5961 580.4746)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 665.2783 588.9769)" class="mustard__fill futura-med fs__8-8__px">75</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 679.369 578.2391)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g class="property__active" ng-class="taiga.inmovablesClassList[186]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[186])">
                        <polygon class="property pb-sprite-1" points="620.3,688.5 574.5,568.1 622.8,549.7 668.1,670.3"/>
                        <g>
                            <polygon class="mustard__dl__fill" points="633.8,647.6 626.6,655.2 633.8,662.9"/>
                            <polygon class="mustard__dr__fill" points="633.8,647.6 633.8,662.9 641,655.2"/>
                        </g>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 633.0317 679.5961)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.9285 -0.3715 0.3715 0.9285 592.4637 573.1949)" class="white__fill futura-book fs__6-8__px">10.00</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 602.3459 599.9417)" class="white__fill futura-book fs__6-8__px">250.00 m2</text>
                        <text transform="matrix(0.3418 0.9398 -0.9398 0.3418 617.0291 608.4437)" class="mustard__fill futura-med fs__8-8__px">76</text>
                        <text transform="matrix(0.3276 0.9448 -0.9448 0.3276 631.1185 597.7062)" class="white__fill futura-book fs__6-8__px">25.00</text>
                    </g>
                    <g>
                        <polyline class="white__stroke no__fill" points="574.5,568.1 817.1,476.6 866.6,457.9"/>
                        <line class="white__stroke no__fill" x1="776.3" y1="368.5" x2="817.1" y2="476.6"/>
                        <line class="white__stroke no__fill" x1="726.6" y1="387" x2="767.5" y2="495.8"/>
                        <line class="white__stroke no__fill" x1="688" y1="401.3" x2="729.1" y2="510.1"/>
                        <line class="white__stroke no__fill" x1="572.3" y1="445" x2="613.7" y2="553.5"/>
                        <line class="white__stroke no__fill" x1="668.1" y1="670.3" x2="622.8" y2="549.7"/>
                        <line class="white__stroke no__fill" x1="610.9" y1="430.6" x2="651.8" y2="539.1"/>
                        <line class="white__stroke no__fill" x1="649.3" y1="416.2" x2="690.2" y2="524.5"/>
                        <line class="white__stroke no__fill" x1="671" y1="531.8" x2="716.7" y2="652.3"/>
                        <line class="white__stroke no__fill" x1="719.2" y1="513.7" x2="764.4" y2="634.1"/>
                        <line class="white__stroke no__fill" x1="807.8" y1="618.1" x2="762.7" y2="497.6"/>
                        <line class="white__stroke no__fill" x1="851.4" y1="601" x2="805.6" y2="480.9"/>
                    </g>
                </g>
                <g>
                    <path class="blue__fill" d="M937.1,310.8c0.7,2.6-0.6,5-2.8,5.6l1.8,6.9l3-6.7l3-6.7l-6-5l-6-5l1.8,6.9
                        C934.1,306.5,936.4,308.2,937.1,310.8"/>
                    <text transform="matrix(-0.2898 -1.1247 0.9817 -0.1903 932.027 319.7122)" class="blue__fill futura-med fs__4__px">SALIDA</text>
                    <path class="blue__fill" d="M918,254.9c0.7,2.4,2.8,4.1,4.9,3.8l1.7,6.4l-5.6-4.6l-5.6-4.6l2.7-6.3l2.7-6.3l1.7,6.4
                        C918.5,250.2,917.4,252.5,918,254.9"/>
                    <text transform="matrix(-0.3034 -1.1295 0.9804 -0.1971 929.0352 261.7926)" class="blue__fill futura-med fs__4__px">ACCESO</text>
                    <path class="white__stroke no__fill" d="M920.9,284.5l-1.1-1c-0.2-0.2-0.2-0.5-0.1-0.7l0.5-0.5c0.9-0.5,1.6-1.4,1.9-2.5l0.1-0.4l2.5-0.7l0.4,0.4
                        c0.8,0.7,1.7,1.2,2.7,1.2l0.8,0.2c0.2,0,0.4,0.3,0.3,0.6l-0.5,1.5L920.9,284.5z"/>
                    <polygon class="white__stroke no__fill" points="928.8,284 921.3,286 920.9,284.5 928.4,282.5"/>
                    <path class="white__stroke no__fill" d="M929,283.9c0.4,1.6-1.1,3.1-3.2,3.7c-2.2,0.6-4.2-0.1-4.7-1.6C925,285,925,285,929,283.9z"/>
                    <path class="white__stroke no__fill" d="M924.8,280.6c0,0.1,0,1.7-0.4,1.8c-0.5,0.1-1.3-1.2-1.3-1.3s0.2-0.7,0.7-0.8
                        C924.2,280.1,924.7,280.4,924.8,280.6z"/>
                </g>
                <path class="sty" d="M956.8,2.5l193,961l-539.4,202.8L212.5,105.6c0,0,227.2-67.6,701.4-91.6L956.8,2.5z"/>
            </g>
        </svg>

	</div>

</body>
</html>