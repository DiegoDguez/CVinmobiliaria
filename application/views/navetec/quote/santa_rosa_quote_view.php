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

<body ng-controller="NvtSantaRosaCtrl as nvtSantaRosa">
  

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

	<div class="modal-dialog" ng-class="nvtSantaRosa.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtSantaRosa.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtSantaRosa.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>
				
				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Navetec Business Park {{nvtSantaRosa.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSantaRosa.propertyData.propertyClass}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSantaRosa.propertyData.type}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{nvtSantaRosa.propertyData.number}}</h6>
					</div>
					<!-- <div class="p-5">
						<h6 class="futura-light">Dimenciones: {{nvtSantaRosa.propertyData.dimensions}}</h6>
					</div> -->
					<div class="p-5">
						<h6 class="futura-light">Área de {{nvtSantaRosa.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; de ${{nvtSantaRosa.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text">Precio de ${{nvtSantaRosa.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
					</div>
				</div>

				<div class="divider"></div>
				
				<div class="p-20">
					<p class="blue-text futura-book">¡Apártalo ahora!</p>
					<p class="green-text">Con tan solo {{nvtSantaRosa.costToBlock}}</p>
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
					<h2 class="center-align futura-med">SANTA ROSA</h2>
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

		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1142" style="enable-background:new 0 0 1366 1142;" xml:space="preserve">

			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:8.9504px;}
				.st4{fill:#FFFF00;}
				.st6{font-size:14.6407px;}
				.st7{opacity:0.6;fill:#DBAE4C;enable-background:new;}
				.st9{font-size:8.95px;}
				.st10{font-size:9.0089px;}
				.st11{fill:none;stroke:#000000;stroke-width:0.91;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="1142" xlink:href="media/assets/img/navetec/app/santa-rosa/santa-rosa.jpg"></image>

			<g id="islas_santa_rosa">
				<g id="isla_a">
					<g ng-class="nvtSantaRosa.inmovablesClassList[0]" ng-click="nvtSantaRosa.showPropertyData(7, '1A', nvtSantaRosa.inmovables[0].idProperty)">
						<polygon class="property nvt-sprite-1" points="394,985.2 562.2,985.2 562.2,936.8 394,936.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9745 945.8994)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9747 984.4995)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0951 950.6998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1946 950.6995)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6447 974.5494)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7396 969.6877)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9947 962.0894)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0948 961.9883)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8346 961.9009)" class="st4 futura-light st6">VE 1A</text>
						
							<rect x="443.2" y="953.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -552.8665 616.6091)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,962.1 446.9,957 446.8,951.7 452.1,956.8"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[1]" ng-click="nvtSantaRosa.showPropertyData(7, '2A', nvtSantaRosa.inmovables[1].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,889.6 394.1,889.6 394.1,937.7 562.1,937.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9745 898.3892)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0957 903.1794)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1953 903.1795)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6447 927.0392)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7396 922.178)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9946 914.5694)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0947 914.4684)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8345 914.381)" class="st4 futura-light st6">VE 2A</text>
						
							<rect x="443.2" y="905.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -518.5509 601.9857)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,914.5 446.9,909.5 446.8,904.1 452.1,909.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[2]" ng-click="nvtSantaRosa.showPropertyData(7, '3A', nvtSantaRosa.inmovables[2].idProperty)">
						<polygon class="property nvt-sprite-1" points="562.1,841.2 394.1,841.2 394.1,889.6 562.1,889.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9747 850.1592)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0954 854.9597)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1949 854.9598)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6444 878.8093)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7398 873.9481)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9948 866.3492)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0945 866.2487)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8347 866.1613)" class="st4 futura-light st6">VE 3A</text>
						
							<rect x="443.2" y="857.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -483.8018 587.1735)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,866.3 446.9,861.3 446.8,856 452.1,861"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[3]" ng-click="nvtSantaRosa.showPropertyData(7, '4A', nvtSantaRosa.inmovables[3].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,792.7 394.1,792.8 394.1,841.2 562.1,841.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9745 801.6993)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0956 806.4998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1952 806.4994)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6447 830.3493)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7401 825.4882)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9947 817.8893)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0947 817.7883)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8345 817.7009)" class="st4 futura-light st6">VE 4A</text>
						
							<rect x="443.2" y="809.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -449.4861 572.55)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,818.8 446.9,813.7 446.8,808.4 452.1,813.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[4]" ng-click="nvtSantaRosa.showPropertyData(7, '5A', nvtSantaRosa.inmovables[4].idProperty)">
						<polygon class="property nvt-sprite-1" points="394.1,744.6 562.1,744.6 562.1,792.7 394.1,792.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9748 753.4391)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0958 758.2396)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1953 758.2397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6445 782.0895)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7399 777.2279)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9944 769.6193)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0945 769.5182)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8347 769.4308)" class="st4 futura-light st6">VE 5A</text>
						
							<rect x="443.2" y="760.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -414.0326 557.4366)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,769.6 446.9,764.5 446.8,759.2 452.1,764.3"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[5]" ng-click="nvtSantaRosa.showPropertyData(7, '6A', nvtSantaRosa.inmovables[5].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,696.1 562.1,744.6 394.1,744.6 394.1,696.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9747 705.1393)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0944 709.9398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1939 709.9399)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6445 733.7893)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7398 728.9282)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9944 721.3292)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0945 721.2283)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8348 721.1409)" class="st4 futura-light st6">VE 6A</text>
						
							<rect x="443.2" y="713.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -379.7169 542.8131)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="447,722 446.9,717 446.8,711.7 452.1,716.8"/>
					</g>
				</g>
				<g id="isla_b">
					<g ng-class="nvtSantaRosa.inmovablesClassList[6]" ng-click="nvtSantaRosa.showPropertyData(7, '1B', nvtSantaRosa.inmovables[6].idProperty)">
						<polygon class="property nvt-sprite-1" points="217.4,889.6 217.4,917.4 281.9,938.1 394.1,938.1 394.1,889.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6744 898.3895)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 323.1744 937.0693)" class="st1 futura-book st3">26.74</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2167 893.1197)" class="st1 futura-book st3">07.85</text>
						<text transform="matrix(0.9507 0.3102 -0.3102 0.9507 241.1349 923.4201)" class="st1 futura-book st9">17.12</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5462 903.1796)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3348 927.0396)" class="st1 futura-book st3">551.03 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.4297 922.1779)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 914.5692)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7946 914.4681)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5349 914.3807)" class="st4 futura-light st6">VE 1B</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[7]" ng-click="nvtSantaRosa.showPropertyData(7, '2B', nvtSantaRosa.inmovables[7].idProperty)">
						<polygon class="property nvt-sprite-2" points="217.5,841.1 394.1,841.2 394.1,889.6 217.4,889.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6745 851.0795)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2162 855.8698)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5466 855.8697)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3348 879.7193)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.4297 874.8582)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 867.2592)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7946 867.1581)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5344 867.0707)" class="st4 futura-light st6">VE 2B</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[8]" ng-click="nvtSantaRosa.showPropertyData(7, '3B', nvtSantaRosa.inmovables[8].idProperty)">
						<polygon class="property nvt-sprite-1" points="217.4,792.7 394.1,792.8 394.1,841.2 217.5,841.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6747 802.5594)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2169 807.3595)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5473 807.3594)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3346 831.2095)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.43 826.3479)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6948 818.7494)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7944 818.6484)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5347 818.561)" class="st4 futura-light st6">VE 3B</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[9]" ng-click="nvtSantaRosa.showPropertyData(7, '4B', nvtSantaRosa.inmovables[9].idProperty)">
						<polygon class="property nvt-sprite-2" points="217.4,744.2 394.1,744.6 394.1,792.8 217.4,792.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6748 754.1791)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2163 758.9797)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5467 758.9796)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3347 782.8292)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.4296 777.9681)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 770.3696)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7945 770.2686)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5348 770.1812)" class="st4 futura-light st6">VE 4B</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[10]" ng-click="nvtSantaRosa.showPropertyData(7, '5B', nvtSantaRosa.inmovables[10].idProperty)">
						<polygon class="property nvt-sprite-1" points="217.4,696.1 394.1,696.2 394.1,744.6 217.4,744.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6746 705.1396)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2164 709.9396)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5468 709.9395)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3346 733.7897)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.43 728.928)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6948 721.3295)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7949 721.2285)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5347 721.1411)" class="st4 futura-light st6">VE 5B</text>
						
							<rect x="271.3" y="713.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -432.5645 418.809)" class="st7" width="7.3" height="7.3"/>
						<polygon class="st7" points="275.1,722 275,717 274.9,711.7 280.2,716.8"/>
					</g>
				</g>
				<g id="isla_c">
					<g ng-class="nvtSantaRosa.inmovablesClassList[11]" ng-click="nvtSantaRosa.showPropertyData(7, '1C', nvtSantaRosa.inmovables[11].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,986.2 829.5,986.1 829.6,937.7 661.3,937.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8546 945.8992)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8548 984.4993)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9756 950.6996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0654 950.6996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 974.5493)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 969.6881)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8747 962.0891)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9748 961.9881)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7146 961.9007)" class="st4 futura-light st6">VE 1C</text>
						
							<rect x="710.4" y="953.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -470.7201 809.3757)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,962.1 714.1,957 714,951.7 719.3,956.8"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[12]" ng-click="nvtSantaRosa.showPropertyData(7, '2C', nvtSantaRosa.inmovables[12].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,889.6 661.3,937.7 829.6,937.7 829.6,889.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8549 899.2992)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9767 904.0996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0665 904.0996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5148 927.9493)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6097 923.0881)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8746 915.4891)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9747 915.3881)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7144 915.3007)" class="st4 futura-light st6">VE 2C</text>
						
							<rect x="710.4" y="905.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -436.4075 794.7449)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,914.5 714.1,909.5 714,904.1 719.3,909.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[13]" ng-click="nvtSantaRosa.showPropertyData(7, '3C', nvtSantaRosa.inmovables[13].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,841.1 829.5,841.1 829.6,889.6 661.3,889.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8544 851.0097)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9753 855.7998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0651 855.7998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5148 879.6592)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6097 874.7981)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8745 867.1893)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9746 867.0884)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7148 867.001)" class="st4 futura-light st6">VE 3C</text>
						
							<rect x="710.4" y="857.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -401.6553 779.9401)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,866.3 714.1,861.3 714,856 719.3,861"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[14]" ng-click="nvtSantaRosa.showPropertyData(7, '4C', nvtSantaRosa.inmovables[14].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,792.8 661.3,841.1 829.5,841.1 829.6,792.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8545 801.6996)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9761 806.4995)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0659 806.4995)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 830.3492)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 825.488)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8747 817.8895)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9748 817.7885)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7145 817.7011)" class="st4 futura-light st6">VE 4C</text>
						
							<rect x="710.4" y="809.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -367.3355 765.3063)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,818.8 714.1,813.7 714,808.4 719.3,813.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[15]" ng-click="nvtSantaRosa.showPropertyData(7, '5C', nvtSantaRosa.inmovables[15].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,744.6 829.5,744.6 829.6,792.7 661.3,792.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8544 754.1791)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9767 758.9796)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0665 758.9796)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5144 782.8292)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6097 777.9681)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8746 770.3696)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9747 770.2686)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7145 770.1812)" class="st4 futura-light st6">VE 5C</text>
						
							<rect x="710.4" y="760.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -331.8789 750.2001)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,769.6 714.1,764.5 714,759.2 719.3,764.3"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[16]" ng-click="nvtSantaRosa.showPropertyData(7, '6C', nvtSantaRosa.inmovables[16].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,696.1 661.3,744.6 829.5,744.6 829.6,696.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8548 705.1391)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9769 709.9395)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0667 709.9395)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5147 733.7897)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6096 728.928)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8745 721.329)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9745 721.2285)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7148 721.1411)" class="st4 futura-light st6">VE 6C</text>
						
							<rect x="710.4" y="713.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -297.5633 735.5766)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="714.2,722 714.1,717 714,711.7 719.3,716.8"/>
					</g>
				</g>
				<g id="isla_d">
					<g ng-class="nvtSantaRosa.inmovablesClassList[17]" ng-click="nvtSantaRosa.showPropertyData(7, '1D', nvtSantaRosa.inmovables[17].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,937.7 997.9,986.2 829.5,986.1 829.6,937.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4045 945.8993)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4047 984.4994)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5251 950.6994)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6246 950.6996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0747 974.5493)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1696 969.6882)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4251 962.0892)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5242 961.9883)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.265 961.9009)" class="st4 futura-light st6">V E 1D</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[18]" ng-click="nvtSantaRosa.showPropertyData(7, '2D', nvtSantaRosa.inmovables[18].idProperty)">
						<polygon class="property nvt-sprite-2" points="997.9,889.6 829.6,889.6 829.6,937.7 997.9,937.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4043 899.2993)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5242 904.0994)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6238 904.0995)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0745 927.9493)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1694 923.0881)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.425 915.4893)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5251 915.3882)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2648 915.3008)" class="st4 futura-light st6">VE 2D</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[19]" ng-click="nvtSantaRosa.showPropertyData(7, '3D', nvtSantaRosa.inmovables[19].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,841.1 997.9,889.6 829.6,889.6 829.5,841.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4048 851.0093)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5248 855.7997)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6243 855.7998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0751 879.6593)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1699 874.7977)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4244 867.1895)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5245 867.0885)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2643 867.0011)" class="st4 futura-light st6">VE 3D</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[20]" ng-click="nvtSantaRosa.showPropertyData(7, '4D', nvtSantaRosa.inmovables[20].idProperty)">
						<polygon class="property nvt-sprite-2" points="997.8,793.7 829.6,793.7 829.5,842 997.9,842.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4049 801.6992)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6251 806.4995)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5256 806.4998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0742 830.3492)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.17 825.488)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4246 817.8896)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5247 817.7881)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2645 817.7007)" class="st4 futura-light st6">VE 4D</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[21]" ng-click="nvtSantaRosa.showPropertyData(7, '5D', nvtSantaRosa.inmovables[21].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,745.5 829.5,745.5 829.6,793.6 997.8,793.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4044 754.1793)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5242 758.9799)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6238 758.9795)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0746 782.8293)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1694 777.9681)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.425 770.3692)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5251 770.2682)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2649 770.1808)" class="st4 futura-light st6">VE 5D</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[22]" ng-click="nvtSantaRosa.showPropertyData(7, '6D', nvtSantaRosa.inmovables[22].idProperty)">
						<polygon class="property nvt-sprite-2" points="997.9,697.1 829.6,697.1 829.5,745.5 997.9,745.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4042 705.1392)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5244 709.9398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6239 709.9395)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0744 733.7897)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1703 728.928)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4249 721.3292)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.525 721.2281)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2648 721.1407)" class="st4 futura-light st6">VE 6D</text>
						
							<rect x="879.7" y="713.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -245.5213 857.682)" class="st7" width="7.3" height="7.3"/>
						<polygon class="st7" points="883.5,722 883.4,717 883.3,711.7 888.6,716.8"/>
					</g>
				</g>
				<g id="isla_e">
					<g ng-class="nvtSantaRosa.inmovablesClassList[23]" ng-click="nvtSantaRosa.showPropertyData(7, '1E', nvtSantaRosa.inmovables[23].idProperty)">
						<polygon class="property nvt-sprite-2" points="217.4,647.6 217.4,599.5 394.1,599.5 394.1,647.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6748 608.3295)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6745 646.7294)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2157 613.1296)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5461 613.1295)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3348 636.9791)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.4297 632.118)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 624.5195)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7946 624.4185)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5344 624.3311)" class="st4 futura-light st6">VE 1E</text>
						
							<rect x="271.4" y="615.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -362.2045 388.8296)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="275.1,624.5 275,619.5 274.9,614.1 280.2,619.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[24]" ng-click="nvtSantaRosa.showPropertyData(7, '2E', nvtSantaRosa.inmovables[24].idProperty)">
						<polygon class="property nvt-sprite-1" points="217.4,551.1 394.1,551.1 394.1,599.5 217.4,599.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6749 560.0396)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2162 564.8396)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5466 564.8395)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3348 588.6891)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.4297 583.828)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 576.2192)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7945 576.1182)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5348 576.0308)" class="st4 futura-light st6">VE 2E</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[25]" ng-click="nvtSantaRosa.showPropertyData(7, '3E', nvtSantaRosa.inmovables[25].idProperty)">
						<polygon class="property nvt-sprite-2" points="217.4,502.7 217.4,551.1 394.1,551.1 394.1,502.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 294.6747 511.6294)" class="st1 futura-book st3">42.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2159 516.4294)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5463 516.4299)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3346 540.2795)" class="st1 futura-book st3">597.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 331.43 535.4178)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6949 527.8193)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7945 527.7183)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5347 527.6309)" class="st4 futura-light st6">VE 3E</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[26]" ng-click="nvtSantaRosa.showPropertyData(7, '4E', nvtSantaRosa.inmovables[26].idProperty)">
						<polygon class="property nvt-sprite-1" points="217.5,454.2 267.8,454.1 267.9,404.8 297.9,404.8 297.9,405.7 394.1,405.7 394.1,502.7 
							217.4,502.7"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 221.2161 467.7698)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 321.1146 414.8094)" class="st1 futura-book st3">30.55</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5845 462.4392)" class="st1 futura-book st3">12.15</text>
						<text transform="matrix(0 1 -1 0 270.9949 414.91)" class="st1 futura-book st9">14.28</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 384.5457 446.7599)" class="st1 futura-book st3">28.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 293.3347 470.6095)" class="st1 futura-book st3">1030.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 336.3898 465.6983)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.6945 458.1494)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 292.7946 458.0484)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 301.5349 457.961)" class="st4 futura-light st6">VE 4E</text>
						
							<rect x="305.5" y="433.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -220.3499 357.4933)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="309.3,442.4 309.2,437.4 309.1,432.1 314.4,437.1"/>
					</g>
				</g>
				<g id="isla_f">
					<g ng-class="nvtSantaRosa.inmovablesClassList[27]" ng-click="nvtSantaRosa.showPropertyData(7, '1F', nvtSantaRosa.inmovables[27].idProperty)">
						<polygon class="property nvt-sprite-1" points="562.1,647.6 394.1,647.6 394.1,599.5 562.1,599.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9745 608.3293)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9746 646.7297)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0956 613.1298)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1952 613.1299)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6447 636.9793)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7401 632.1181)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9946 624.5192)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0947 624.4182)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8345 624.3308)" class="st4 futura-light st6">VE 1F</text>
						
							<rect x="443.2" y="615.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -309.3486 512.819)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="447,624.5 446.9,619.4 446.8,614.1 452.1,619.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[28]" ng-click="nvtSantaRosa.showPropertyData(7, '2F', nvtSantaRosa.inmovables[28].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,551.1 562.1,599.5 394.1,599.5 394.1,551.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9745 560.0393)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0961 564.8397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1956 564.8398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6447 588.6893)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7396 583.8281)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9946 576.2195)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0947 576.1185)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8344 576.0311)" class="st4 futura-light st6">VE 2F</text>
						
							<rect x="443.2" y="568.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -275.033 498.1955)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="447,576.9 446.9,571.9 446.8,566.5 452.1,571.6"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[29]" ng-click="nvtSantaRosa.showPropertyData(7, '3F', nvtSantaRosa.inmovables[29].idProperty)">
						<polygon class="property nvt-sprite-1" points="562,502.7 394.1,502.7 394.1,551.1 562.1,551.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9746 511.6594)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0955 516.4598)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1951 516.4595)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6448 540.3094)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7397 535.4482)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9948 527.8494)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0949 527.7484)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8347 527.6609)" class="st4 futura-light st6">VE 3F</text>
						
							<rect x="443.2" y="519.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -240.2838 483.3834)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="447,528.8 446.9,523.7 446.8,518.4 452.1,523.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[30]" ng-click="nvtSantaRosa.showPropertyData(7, '4F', nvtSantaRosa.inmovables[30].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,454.1 394.1,454.1 394.1,502.7 562,502.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9746 462.4392)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0955 467.2396)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.195 467.2398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6448 491.0892)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7397 486.228)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9948 478.6291)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0949 478.5281)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8347 478.4407)" class="st4 futura-light st6">VE 4F</text>
						
							<rect x="443.2" y="472.3" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -205.9682 468.7599)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="447,481.2 446.9,476.1 446.8,470.8 452.1,475.9"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[31]" ng-click="nvtSantaRosa.showPropertyData(7, '5F', nvtSantaRosa.inmovables[31].idProperty)">
						<polygon class="property nvt-sprite-1" points="562.1,405.7 394.1,405.7 394.1,454.1 562.1,454.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9746 414.8792)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 398.0945 419.6796)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.194 419.6798)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.6444 443.5394)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 503.7398 438.6778)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 454.9948 431.0691)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 465.0949 430.9681)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 473.8347 430.8807)" class="st4 futura-light st6">VE 5F</text>
						
							<rect x="443.2" y="423.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -170.5073 453.6492)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="447,432.1 446.9,427 446.8,421.7 452.1,426.7"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[32]" ng-click="nvtSantaRosa.showPropertyData(7, '6F', nvtSantaRosa.inmovables[32].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.4,357.6 339.5,357.5 339.5,356.3 297.6,356.3 297.6,404.8 298.2,404.8 298.2,405.7 
							562.4,405.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 418.9144 366.5693)" class="st1 futura-book st3">63.95</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 418.9148 404.6395)" class="st1 futura-book st3">63.95</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 301.3748 370.4595)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.194 370.4595)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 417.5847 395.2193)" class="st1 futura-book st3">900.92 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 455.68 390.3581)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 406.9346 382.7592)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 417.0347 382.6582)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 425.7745 382.5708)" class="st4 futura-light st6">VE 6F</text>
						
							<rect x="395.3" y="374" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -149.7764 403.9084)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="399.1,382.9 398.9,377.8 398.8,372.5 404.1,377.6"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[33]" ng-click="nvtSantaRosa.showPropertyData(7, '7F', nvtSantaRosa.inmovables[33].idProperty)">
						<polygon class="property nvt-sprite-1" points="561.9,309.1 380.5,309.1 380.5,308.1 338.5,308.2 338.5,356.3 339.1,356.3 339.1,357.5 
							562,357.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 439.4449 317.3093)" class="st1 futura-book st3">54.11</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 439.4447 355.3795)" class="st1 futura-book st3">54.11</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 342.6156 321.1898)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1945 321.1895)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 438.1146 345.9593)" class="st1 futura-book st3">761.03 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 476.21 341.0981)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 427.4644 333.4894)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 437.5645 333.3885)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 446.3048 333.3011)" class="st4 futura-light st6">VE 7F</text>
						
							<rect x="416.4" y="324.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -107.8454 404.0633)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="420.2,333.7 420.1,328.7 420,323.4 425.3,328.4"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[34]" ng-click="nvtSantaRosa.showPropertyData(7, '8F', nvtSantaRosa.inmovables[34].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,261 420.9,261 420.9,259.7 379.9,259.7 379.9,308.1 380.6,308.1 380.6,309.1 
							562,309.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 460.1148 269.1593)" class="st1 futura-book st3">44.12</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 460.1146 307.2295)" class="st1 futura-book st3">44.12</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 383.7045 273.0499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1954 273.0499)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 458.7748 297.8094)" class="st1 futura-book st3">621.20 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 496.8697 292.9482)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 448.1345 285.3492)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 458.2346 285.2482)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 466.9749 285.1608)" class="st4 futura-light st6">VE 8F</text>
						
							<rect x="437.1" y="276.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -66.7299 404.1921)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="440.9,285.6 440.8,280.5 440.7,275.2 446,280.3"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[35]" ng-click="nvtSantaRosa.showPropertyData(7, '9F', nvtSantaRosa.inmovables[35].idProperty)">
						<polygon class="property nvt-sprite-1" points="562.1,212.5 420.3,212.5 420.3,259.7 420.9,259.7 420.9,261 562.1,261"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 480.4649 258.7995)" class="st1 futura-book st3">34.34</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 480.4645 220.7195)" class="st1 futura-book st3">34.34</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 423.8062 224.6096)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1954 224.6095)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 479.1348 249.3792)" class="st1 futura-book st3">480.61 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 517.2297 244.5181)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 468.4846 236.9094)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 478.5847 236.8084)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 487.3245 236.721)" class="st4 futura-light st6">VE 9F</text>
						
							<rect x="458.1" y="228" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -25.149 404.3482)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="461.9,236.9 461.8,231.8 461.7,226.5 467,231.6"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[36]" ng-click="nvtSantaRosa.showPropertyData(7, '10F', nvtSantaRosa.inmovables[36].idProperty)">
						<polygon class="property nvt-sprite-2" points="562.1,164.1 460.7,164.1 420.3,211.3 420.3,212.5 562.1,212.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 480.4648 172.7996)" class="st1 futura-book st3">24.41</text>
						<text transform="matrix(0.6557 -0.755 0.755 0.6557 442.7749 197.9304)" class="st1 futura-book st10">17.10</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 553.1942 176.6896)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 479.1345 201.4491)" class="st1 futura-book st3">412.85 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 517.2299 196.5879)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 468.4845 188.9895)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 478.5846 188.8885)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 487.3248 188.8011)" class="st4 futura-light st6">VE 10F</text>
						
							<rect x="458.1" y="180.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 9.2974 389.6495)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="461.9,189.1 461.8,184 461.6,178.7 467,183.8"/>
					</g>
				</g>
				<g id="isla_g">
					<g ng-class="nvtSantaRosa.inmovablesClassList[37]" ng-click="nvtSantaRosa.showPropertyData(7, '1G', nvtSantaRosa.inmovables[37].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,647.6 829.5,647.6 829.6,599.5 661.2,599.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8546 608.3394)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9761 613.1397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0659 613.1398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 636.9894)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 632.1278)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8748 624.5293)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9749 624.4283)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7147 624.3409)" class="st4 futura-light st6">VE 1G</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8547 646.7294)" class="st1 futura-book st3">40.70</text>
						
							<rect x="710.4" y="615.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -227.2021 705.5855)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,624.5 714.1,619.4 714,614.1 719.3,619.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[38]" ng-click="nvtSantaRosa.showPropertyData(7, '2G', nvtSantaRosa.inmovables[38].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.2,599.5 829.6,599.5 829.5,551.1 661.3,551.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8544 560.959)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9752 565.7594)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.065 565.7595)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5144 589.6096)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6098 584.748)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8746 577.1495)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9747 577.0485)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7145 576.9611)" class="st4 futura-light st6">VE 2G</text>
						
							<rect x="710.4" y="568.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -192.8865 690.962)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,576.9 714.1,571.9 714,566.5 719.3,571.6"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[39]" ng-click="nvtSantaRosa.showPropertyData(7, '3G', nvtSantaRosa.inmovables[39].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,551.1 829.5,551.1 829.5,502.6 661.3,502.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8549 511.6294)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9763 516.4298)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0661 516.4299)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5148 540.2795)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6097 535.4178)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8745 527.8194)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9746 527.7184)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7149 527.631)" class="st4 futura-light st6">VE 3G</text>
						
							<rect x="710.4" y="519.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -158.1374 676.1499)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,528.8 714.1,523.7 714,518.4 719.3,523.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[40]" ng-click="nvtSantaRosa.showPropertyData(7, '4G', nvtSantaRosa.inmovables[40].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,502.6 661.2,454.2 829.5,454.2 829.5,502.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8547 462.4395)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.976 467.2398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0658 467.2399)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5146 491.0891)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.61 486.2279)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8748 478.6294)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9744 478.5284)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7147 478.441)" class="st4 futura-light st6">VE 4G</text>
						
							<rect x="710.4" y="472.3" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -123.8217 661.5264)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,481.2 714.1,476.1 714,470.8 719.3,475.9"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[41]" ng-click="nvtSantaRosa.showPropertyData(7, '5G', nvtSantaRosa.inmovables[41].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.2,454.2 829.5,454.2 829.6,406 661.3,406"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8545 414.6695)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9752 419.4699)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0669 419.4695)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 443.3191)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 438.4579)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8747 430.8594)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9748 430.7585)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7146 430.6711)" class="st4 futura-light st6">VE 5G</text>
						
							<rect x="710.4" y="423.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -88.3537 646.4127)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,432.1 714.1,427 714,421.7 719.3,426.7"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[42]" ng-click="nvtSantaRosa.showPropertyData(7, '6G', nvtSantaRosa.inmovables[42].idProperty)">
						<rect id="g-l6" x="661.3" y="357.6" class="property nvt-sprite-1" width="168.3" height="48.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8546 366.6696)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9766 371.4695)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0664 371.4695)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 395.3192)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 390.458)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8746 382.8492)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9747 382.7482)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7145 382.6608)" class="st4 futura-light st6">VE 6G</text>
						
							<rect x="710.4" y="375.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -54.0381 631.7892)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.2,384.5 714.1,379.4 714,374.1 719.3,379.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[43]" ng-click="nvtSantaRosa.showPropertyData(7, '7G', nvtSantaRosa.inmovables[43].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,357.6 829.6,357.6 829.6,309.1 661.3,309.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 733.8546 317.3092)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9761 322.1096)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 820.0659 322.1096)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 732.5145 345.9593)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 770.6099 341.0981)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 721.8747 333.4893)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 731.9747 333.3883)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 740.7145 333.3009)" class="st4 futura-light st6">VE 7G</text>
						
							<rect x="710.5" y="324.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -17.1978 616.1315)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="714.3,333.4 714.2,328.4 714.1,323 719.4,328.1"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[44]" ng-click="nvtSantaRosa.showPropertyData(7, '8G', nvtSantaRosa.inmovables[44].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,309.1 940.4,309.1 940.4,259.7 878,259.7 878,261 661.3,261"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 789.3349 269.1592)" class="st1 futura-book st3">67.48</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 789.3345 307.5996)" class="st1 futura-book st3">67.48</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 932.355 273.0498)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9764 273.0495)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 780.1146 297.8095)" class="st1 futura-book st3">949.99 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 818.21 292.9478)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 769.4748 285.3493)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 779.5749 285.2483)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 788.3146 285.1609)" class="st4 futura-light st6">VE 8G</text>
						
							<rect x="759.1" y="276.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 32.4371 636.4202)" class="st7" width="7.3" height="7.3"/>
						<polygon class="st7" points="762.9,285.3 762.8,280.3 762.7,275 768,280"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[45]" ng-click="nvtSantaRosa.showPropertyData(7, '9G', nvtSantaRosa.inmovables[45].idProperty)">
						<polygon class="property nvt-sprite-2" points="661.3,261 878,261 878,259.7 878.7,259.7 878.6,211.2 818,211.2 818,212.5 661.3,212.5 
"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 758.7148 221.2697)" class="st1 futura-book st3">52.59</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 758.7144 259.7091)" class="st1 futura-book st3">52.59</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 870.6238 225.1596)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9767 225.1599)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 749.4945 249.9194)" class="st1 futura-book st3">741.43 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 787.5899 245.0583)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 738.8445 237.4594)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 748.9446 237.3584)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 757.6848 237.271)" class="st4 futura-light st6">VE 9G</text>
						
							<rect x="727" y="228.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 56.8788 598.6232)" class="st7" width="7.3" height="7.4"/>
						<polygon class="st7" points="730.8,237.8 730.7,232.7 730.6,227.4 735.9,232.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[46]" ng-click="nvtSantaRosa.showPropertyData(7, '10G', nvtSantaRosa.inmovables[46].idProperty)">
						<polygon class="property nvt-sprite-1" points="661.3,164.1 818.5,164.1 818.6,211.2 818,211.2 818,212.5 661.3,212.5"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 728.8048 172.7997)" class="st1 futura-book st3">38.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 728.8044 211.2391)" class="st1 futura-book st3">38.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 810.3359 176.6896)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 664.9771 176.6897)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.5845 201.4495)" class="st1 futura-book st3">532.05 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 757.6799 196.5878)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 708.9447 188.9893)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 719.0448 188.8883)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 727.7846 188.8009)" class="st4 futura-light st6">VE 10G</text>
						
							<rect x="698.1" y="180.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 83.1789 562.7887)" class="st7" width="7.4" height="7.4"/>
						<polygon class="st7" points="701.9,189 701.8,183.9 701.7,178.6 707,183.7"/>
					</g>
				</g>
				<g id="isla_h">
					<g ng-class="nvtSantaRosa.inmovablesClassList[47]" ng-click="nvtSantaRosa.showPropertyData(7, '1H', nvtSantaRosa.inmovables[47].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,647.6 997.9,599.5 829.6,599.5 829.5,647.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.405 608.3395)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4048 646.7994)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5255 613.1396)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6251 613.1397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0742 636.9894)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1701 632.1278)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4247 624.5294)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5248 624.4284)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2646 624.341)" class="st4 futura-light st6">VE 1H</text>
						
							<rect x="878.6" y="615.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -175.5059 826.8668)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="882.4,624.5 882.3,619.4 882.2,614.1 887.5,619.2"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[48]" ng-click="nvtSantaRosa.showPropertyData(7, '2H', nvtSantaRosa.inmovables[48].idProperty)">
						<polygon class="property nvt-sprite-2" points="829.6,599.5 997.9,599.5 997.9,551 829.5,551.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4048 560.9592)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5247 565.7598)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6242 565.7594)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0741 589.6097)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.17 584.748)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4246 577.1491)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5247 577.0481)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2645 576.9607)" class="st4 futura-light st6">VE 2H</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[49]" ng-click="nvtSantaRosa.showPropertyData(7, '3H', nvtSantaRosa.inmovables[49].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,551 997.9,502.6 829.5,502.6 829.5,551.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4048 511.6295)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5258 516.4297)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6253 516.4298)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.075 540.2795)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1699 535.4179)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4244 527.8195)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5245 527.7185)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2643 527.6311)" class="st4 futura-light st6">VE 3H</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[50]" ng-click="nvtSantaRosa.showPropertyData(7, '4H', nvtSantaRosa.inmovables[50].idProperty)">
						<polygon class="property nvt-sprite-2" points="997.9,502.6 829.5,502.6 829.5,454.2 997.9,454.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4041 462.4396)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5255 467.2397)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.625 467.2398)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0743 491.0891)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1702 486.2279)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4247 478.6295)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5248 478.5285)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2646 478.4411)" class="st4 futura-light st6">VE 4H</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[51]" ng-click="nvtSantaRosa.showPropertyData(7, '5H', nvtSantaRosa.inmovables[51].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,454.1 997.9,406 829.6,406 829.5,454.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.405 414.6696)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5246 419.4697)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6241 419.4699)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0743 443.3294)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1702 438.4682)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4246 430.8596)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5247 430.7586)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2645 430.6712)" class="st4 futura-light st6">VE 5H</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[52]" ng-click="nvtSantaRosa.showPropertyData(7, '6H', nvtSantaRosa.inmovables[52].idProperty)">
						<polygon class="property nvt-sprite-2" points="829.6,406 997.9,406 997.9,357.6 829.6,357.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.4045 366.6692)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5241 371.4698)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6237 371.4694)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0746 395.3192)" class="st1 futura-book st3">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1696 390.458)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.425 382.8494)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5251 382.7484)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2649 382.6609)" class="st4 futura-light st6">VE 6H</text>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[53]" ng-click="nvtSantaRosa.showPropertyData(7, '7H', nvtSantaRosa.inmovables[53].idProperty)">
						<polygon class="property nvt-sprite-1" points="997.9,357.6 997.8,309.1 829.6,309.1 829.6,357.6"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 902.405 317.3093)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 833.5255 322.1099)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 988.6251 322.1096)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 901.0742 345.9593)" class="st1 futura-book st3">576.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 939.1701 341.0981)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.4246 333.4895)" class="st4 futura-light st6">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 900.5247 333.3885)" class="st4 futura-light st6">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 909.2645 333.3011)" class="st4 futura-light st6">VE 7H</text>
						
							<rect x="877.7" y="324.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 34.1634 736.7731)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="881.5,333.5 881.4,328.4 881.3,323.1 886.6,328.2"/>
					</g>
				</g>
				<g id="isla_i">
					<g ng-class="nvtSantaRosa.inmovablesClassList[54]" ng-click="nvtSantaRosa.showPropertyData(7, '1I', nvtSantaRosa.inmovables[54].idProperty)">
						<polygon class="property nvt-sprite-2" points="1076.4,796.8 1193.3,796.8 1193.3,749.7 1192.6,749.7 1192.6,748.8 1076.4,748.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1126.1949 756.9197)" class="st1 futura-book st3">28.31</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1126.1951 795.8992)" class="st1 futura-book st3">28.31</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1079.7045 761.7195)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1184.8738 761.7199)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1124.8544 785.5693)" class="st1 futura-book st3">396.35 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1162.9502 780.7081)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1115.2,773.1l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.8-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.7-1.1-1.2-2.3-1.8-3.5h0c0.1,1.3,0.1,2.7,0.2,4.3v3L1115.2,773.1z"/>
						<path class="st4" d="M1127.6,770.5l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1127.6,770.5z M1130,768.8l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.2,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1130,768.8z"/>
						<path class="st4" d="M1136.3,772.9l-3.2-9.8h2.4l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1136.3,772.9z"/>
						<path class="st4" d="M1149.2,768.6h-3.6v2.3h4v1.8l-6.3,0.1l-0.1-9.9l6.1-0.1v1.8h-3.8v2h3.6L1149.2,768.6z"/>
						<path class="st4" d="M1156.5,765.2L1156.5,765.2l-1.8,0.9l-0.4-1.7l2.5-1.2h1.8l0.1,9.5h-2.2L1156.5,765.2z"/>
						<path class="st4" d="M1162.3,770.9h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2l0,5.9h2.2v1.8l-6.6,0.1V770.9z"/>
						
							<rect x="1102.1" y="764.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -213.9832 1033.7885)" class="st7" width="7.3" height="7.3"/>
						<polygon class="st7" points="1105.9,773.1 1105.8,768 1105.7,762.7 1111,767.8"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[55]" ng-click="nvtSantaRosa.showPropertyData(7, '2I', nvtSantaRosa.inmovables[55].idProperty)">
						<polygon class="property nvt-sprite-1" points="1076.4,748.8 1192.7,748.8 1192.7,749.7 1235.3,749.7 1235.3,701.5 1234.7,701.5 
							1234.7,700.3 1076.4,700.3"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1147.3444 709.0593)" class="st1 futura-book st3">38.48</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1147.3446 748.0495)" class="st1 futura-book st3">38.48</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1079.9154 713.8599)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1226.7743 713.8596)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1146.0145 737.7093)" class="st1 futura-book st3">542.36 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1184.1094 732.8481)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1136.3,725.2l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.8-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.2-3.8c-0.6-1.1-1.2-2.3-1.7-3.5h-0.1c0.1,1.3,0.1,2.7,0.1,4.3v3L1136.3,725.2z"/>
						<path class="st4" d="M1148.7,722.6l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1148.7,722.6z M1151.2,721l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1151.2,721z"/>
						<path class="st4" d="M1157.5,725l-3.3-9.8h2.5l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1157.5,725z"/>
						<path class="st4" d="M1170.3,720.8h-3.6v2.3h4v1.8l-6.3,0.1l-0.1-9.9l6.1-0.1v1.8h-3.8v2h3.6L1170.3,720.8z"/>
						<path class="st4" d="M1174.9,724.9v-1.3l1.2-1.1c2.1-1.9,3.1-3,3.1-4.1c0-0.8-0.5-1.4-1.6-1.4c-0.7,0.1-1.4,0.3-2,0.8l-0.6-1.6
							c0.9-0.7,2-1,3.1-1c2.2,0,3.3,1.2,3.4,2.9s-1.1,2.9-2.5,4.1l-0.9,0.7l0,0h3.6v1.8L1174.9,724.9z"/>
						<path class="st4" d="M1183.5,723h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2l0.1,5.9h2.2v1.8l-6.6,0.1L1183.5,723z"/>
						
							<rect x="1122.5" y="716.4" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -173.1879 1033.8058)" class="st7" width="7.3" height="7.3"/>
						<polygon class="st7" points="1126.3,725.3 1126.2,720.2 1126.1,714.9 1131.4,720"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[56]" ng-click="nvtSantaRosa.showPropertyData(7, '3I', nvtSantaRosa.inmovables[56].idProperty)">
						<polygon class="property nvt-sprite-2" points="1076.4,700.3 1234.7,700.3 1234.7,701.5 1275.4,701.6 1275.4,653.1 1274.7,653.1 
							1274.7,651.9 1076.4,651.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1167.4843 659.9595)" class="st1 futura-book st3">48.14</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1167.4844 698.9395)" class="st1 futura-book st3">48.14</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1080.006 664.7597)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1266.5056 664.7598)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1166.1447 688.6096)" class="st1 futura-book st3">677.45 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1204.2396 683.7479)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1156.5,676.1l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.7-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.7-1.1-1.2-2.3-1.8-3.5h-0.1c0.1,1.3,0.1,2.7,0.2,4.3v3L1156.5,676.1z"/>
						<path class="st4" d="M1168.8,673.5l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1168.8,673.5z M1171.3,671.8l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1171.3,671.8z"/>
						<path class="st4" d="M1177.6,676l-3.3-9.8h2.4l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1177.6,676z"/>
						<path class="st4" d="M1190.4,671.6h-3.6v2.3h4v1.8l-6.3,0.1l-0.1-9.9l6.1-0.1v1.8h-3.8v2h3.6L1190.4,671.6z"/>
						<path class="st4" d="M1195.4,673.6c0.7,0.4,1.4,0.5,2.2,0.6c1.2,0,1.7-0.6,1.7-1.3c0-1-1-1.4-1.9-1.4h-0.9V670h0.9
							c0.7,0,1.7-0.3,1.7-1.1c0-0.6-0.5-1-1.4-1c-0.7,0-1.4,0.2-2,0.6l-0.5-1.6c0.9-0.5,1.9-0.8,2.9-0.8c2,0,3.2,1,3.2,2.3
							c0,1.1-0.7,2-1.7,2.2l0,0c1.2,0.1,2.1,1.1,2.1,2.3c0,1.7-1.4,2.9-3.9,2.9c-1,0-1.9-0.2-2.8-0.6L1195.4,673.6z"/>
						<path class="st4" d="M1203.6,673.9h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2v5.9h2.2v1.8l-6.6,0L1203.6,673.9z"/>
						
							<rect x="1142.3" y="667.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -132.0828 1033.1781)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="1146.1,676.7 1146,671.7 1145.9,666.3 1151.2,671.4"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[57]" ng-click="nvtSantaRosa.showPropertyData(7, '4I', nvtSantaRosa.inmovables[57].idProperty)">
						<polygon class="property nvt-sprite-1" points="1076.3,651.9 1274.7,651.9 1274.7,653.1 1314.7,653.1 1314.7,603.7 1076.3,603.7"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1187.3446 612.0095)" class="st1 futura-book st3">57.72</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1187.3447 650.9894)" class="st1 futura-book st3">57.72</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1080.005 616.8095)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1306.405 616.8098)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1186.0149 640.6594)" class="st1 futura-book st3">811.50 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1224.1097 635.7978)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1176.3,628.2l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.7-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.6-1.1-1.2-2.3-1.7-3.5h-0.1c0.1,1.3,0.1,2.7,0.1,4.3v3L1176.3,628.2z"/>
						<path class="st4" d="M1188.7,625.5l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1188.7,625.5z M1191.2,623.9l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1191.2,623.9z"/>
						<path class="st4" d="M1197.5,628l-3.3-9.8h2.5l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.8L1197.5,628z"/>
						<path class="st4" d="M1210.3,623.7h-3.6v2.3h4v1.8l-6.3,0l-0.1-9.9l6.1,0v1.8h-3.8v2h3.6L1210.3,623.7z"/>
						<path class="st4" d="M1218.8,627.8v-2.3h-4.2v-1.5l3.5-5.8h2.7v5.6h1.1v1.7h-1.1v2.3L1218.8,627.8z M1218.8,623.9v-2.1
							c0-0.6,0-1.1,0-1.8l0,0c-0.3,0.6-0.6,1.2-0.9,1.8l-1.2,2.1l0,0L1218.8,623.9z"/>
						<path class="st4" d="M1223.5,626h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2l0.1,5.9h2.2v1.8l-6.6,0.1V626z"/>
						
							<rect x="1162.3" y="619.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -91.0604 1032.7756)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="1166.1,628.4 1166,623.3 1165.9,618 1171.2,623.1"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[58]" ng-click="nvtSantaRosa.showPropertyData(7, '5I', nvtSantaRosa.inmovables[58].idProperty)">
						<polygon class="property nvt-sprite-2" points="1076.4,603.7 1314.7,603.7 1314.8,554 1252.7,554 1252.7,555.3 1076.4,555.2"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1187.345 563.5993)" class="st1 futura-book st3">57.72</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1080.0048 568.3998)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1306.4066 568.3996)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1186.0142 592.2493)" class="st1 futura-book st3">813.36 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1224.11 587.3881)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1176.3,579.8l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.7-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.6-1.1-1.2-2.3-1.7-3.5h-0.1c0.1,1.3,0.1,2.7,0.1,4.3v3L1176.3,579.8z"/>
						<path class="st4" d="M1188.7,577.1l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1188.7,577.1z M1191.2,575.5l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1191.2,575.5z"/>
						<path class="st4" d="M1197.5,579.6l-3.3-9.8h2.5l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1197.5,579.6z"/>
						<path class="st4" d="M1210.3,575.3h-3.6v2.3h4v1.8l-6.3,0.1v-9.9h6.1v1.8h-3.8v2h3.6L1210.3,575.3z"/>
						<path class="st4" d="M1221.2,571.7h-3.7l-0.2,1.5c0.2,0,0.4,0,0.6,0c0.9,0,1.8,0.2,2.5,0.7c0.8,0.5,1.2,1.4,1.2,2.4
							c0,1.8-1.5,3.3-4,3.4c-0.9,0-1.8-0.2-2.7-0.5l0.4-1.7c0.7,0.3,1.4,0.5,2.1,0.5c0.9,0,1.9-0.5,1.9-1.5s-0.8-1.6-2.7-1.5
							c-0.4,0-0.9,0-1.3,0.1l0.6-5h5.2L1221.2,571.7z"/>
						<path class="st4" d="M1223.5,577.5h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2l0.1,5.9h2.2v1.8h-6.6V577.5z"/>
						
							<rect x="1162.4" y="570.9" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -55.9651 1017.9133)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="1166.3,579.8 1166.1,574.7 1166,569.4 1171.3,574.5"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[59]" ng-click="nvtSantaRosa.showPropertyData(7, '6I', nvtSantaRosa.inmovables[59].idProperty)">
						<polygon class="property nvt-sprite-1" points="1076.4,555.2 1252.7,555.3 1252.7,554 1253.4,554 1253.4,505.9 1192.6,505.8 
							1192.6,506.8 1076.4,506.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1156.6049 515.1294)" class="st1 futura-book st3">42.83</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1156.6044 553.9594)" class="st1 futura-book st3">42.83</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1080.3351 519.9296)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1244.4957 519.9295)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1155.275 543.7794)" class="st1 futura-book st3">604.75 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1193.3699 538.9177)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1145.6,531.3l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.8-0.2-4.1v-2.9h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.7-1.1-1.2-2.3-1.7-3.5h-0.1c0.1,1.3,0.1,2.7,0.1,4.3v3L1145.6,531.3z"/>
						<path class="st4" d="M1158,528.6l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1158,528.6z M1160.5,527l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1160.5,527z"/>
						<path class="st4" d="M1166.8,531.1l-3.3-9.8h2.4l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1166.8,531.1z"/>
						<path class="st4" d="M1179.6,526.8h-3.6v2.3h4.1v1.8l-6.3,0.1l-0.1-9.9l6.1-0.1v1.8h-3.8v2h3.6L1179.6,526.8z"/>
						<path class="st4" d="M1190.2,523c-0.3,0-0.6,0-0.9,0c-2,0.2-2.8,1.2-3.1,2.3l0,0c0.5-0.5,1.3-0.8,2-0.8c1.6-0.1,2.9,1.2,3,2.8
							c0,0.1,0,0.2,0,0.3c0,1.9-1.5,3.4-3.3,3.5c0,0-0.1,0-0.1,0c-2.5,0-3.8-1.8-3.8-4.1c-0.1-1.6,0.5-3.1,1.7-4.3
							c1-0.9,2.3-1.4,3.7-1.4c0.3,0,0.6,0,0.9,0L1190.2,523z M1189,527.8c0.1-0.8-0.5-1.5-1.3-1.6c0,0-0.1,0-0.2,0
							c-0.6,0-1.1,0.3-1.3,0.8c-0.1,0.2-0.1,0.4-0.1,0.6c0.1,1,0.6,1.9,1.6,1.9C1188.5,529.5,1189,528.7,1189,527.8z"/>
						<path class="st4" d="M1192.7,529.1h2.2l0-5.9h-2.2v-1.8l6.6-0.1v1.8h-2.2v5.9h2.2v1.8l-6.6,0.1L1192.7,529.1z"/>
						
							<rect x="1131.1" y="522.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -30.6271 980.4169)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="1135,531.3 1134.8,526.3 1134.7,520.9 1140,526"/>
					</g>
					<g ng-class="nvtSantaRosa.inmovablesClassList[60]" ng-click="nvtSantaRosa.showPropertyData(7, '7I', nvtSantaRosa.inmovables[60].idProperty)">
						<polygon class="property nvt-sprite-2" points="1076.4,458.7 1193.3,458.7 1193.3,505.8 1192.6,505.8 1192.6,506.8 1076.4,506.8"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1126.1947 466.7494)" class="st1 futura-book st3">28.31</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1126.1948 505.7294)" class="st1 futura-book st3">28.31</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1079.7036 471.5497)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1184.8749 471.5496)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1124.8541 495.3995)" class="st1 futura-book st3">396.36 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1162.9501 490.5378)" class="st1 futura-book st3">2</text>
						<path class="st4" d="M1115.2,482.9l-0.1-9.9h2.6l2.1,3.6c0.6,1.1,1.2,2.2,1.6,3.4l0,0c-0.1-1.4-0.2-2.7-0.2-4.1V473h2l0.1,9.9
							h-2.3l-2.1-3.8c-0.6-1.1-1.2-2.3-1.7-3.5l0,0c0.1,1.3,0.1,2.7,0.1,4.3v3L1115.2,482.9z"/>
						<path class="st4" d="M1127.6,480.3l-0.7,2.5h-2.3l2.9-9.9h2.9l3.2,9.8h-2.4l-0.8-2.5L1127.6,480.3z M1130,478.6l-0.6-2.1
							c-0.2-0.6-0.4-1.3-0.5-1.9l0,0c-0.1,0.6-0.3,1.3-0.4,1.9l-0.6,2.1L1130,478.6z"/>
						<path class="st4" d="M1136.3,482.7l-3.2-9.8h2.4l1.2,4.2c0.3,1.2,0.7,2.3,0.9,3.5l0,0c0.2-1.2,0.5-2.4,0.9-3.5l1.2-4.2h2.4
							l-3.2,9.9L1136.3,482.7z"/>
						<path class="st4" d="M1149.2,478.5h-3.6v2.4h4v1.8h-6.3l-0.1-9.9l6.1,0v1.9h-3.8v2h3.6L1149.2,478.5z"/>
						<path class="st4" d="M1160.5,473v1.4l-3.8,8.1h-2.4l3.8-7.7l0,0h-4.4V473L1160.5,473z"/>
						<path class="st4" d="M1162.3,480.7h2.2l0-5.9h-2.2V473l6.6-0.1v1.8h-2.2l0,5.9h2.2v1.8l-6.6,0.1L1162.3,480.7z"/>
						
							<rect x="1102.3" y="474.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -4.9561 944.9462)" class="st7" width="7.4" height="7.3"/>
						<polygon class="st7" points="1106.2,483.5 1106.1,478.4 1106,473.1 1111.3,478.2"/>
					</g>
				</g>
				<g id="PERIMETRO">
					<polygon class="st11" points="217.6,696.1 562.3,696.1 562.3,986.1 394.1,986.1 394.3,937.7 282.1,938.1 217.6,917.4"/>
					<polygon class="st11" points="217.6,647.7 562.3,647.6 562.3,164.1 460.9,164.1 420.5,211.4 420.5,259.7 380.1,259.7 380.1,308.1 
						338.8,308.2 338.8,356.3 297.4,356.3 297.5,404.8 268.1,404.8 268,454.1 217.7,454.2"/>
					<polygon class="st11" points="661.4,696.2 998.1,696.2 998.1,986.2 661.5,986.2"/>
					<polygon class="st11" points="661.4,647.6 998,647.7 998,309.1 940.5,309.1 940.6,259.7 878.9,259.7 878.8,211.3 818.8,211.3 
						818.7,164.1 661.4,164.1"/>
					<polygon class="st11" points="1076.6,796.9 1193.5,796.9 1193.5,749.7 1235.5,749.7 1235.5,701.5 1275.5,701.6 1275.5,653.1 
						1314.9,653.1 1315,554 1253.6,554 1253.6,505.9 1193.5,505.8 1193.5,458.7 1076.6,458.7"/>
				</g>
			</g>
		</svg>

  </div>

</body>
</html>
