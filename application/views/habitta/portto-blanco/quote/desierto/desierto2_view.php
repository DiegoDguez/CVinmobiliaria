<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBDesierto1QuoteCtrl as desierto">

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/portto_blanco" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-ubicacion" ng-click="close()">
			<div class="link-sidenav">
				<span>Ubicación</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-sidenav">
				<span>Habitta</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/" ng-click="close()">
			<div class="link-sidenav">
				<span>Grupo CCIMA</span>
			</div>
		</a>
		<md-divider></md-divider>

	</md-sidenav>

	<div class="navbar-fixed" ng-controller="sideNavCtrl">
		<nav class="white no-shadows" role="navigation" ng-controller="ContactMenuCtrl as contactCtrl">

			<div class="nav-wrapper">

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
					</li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
						<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
					</md-button></li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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

		</nav>
	</div>


	<div class="modal-dialog" ng-class="desierto.dialogDisplay">
		<div class="backdrop-dialog" ng-click="desierto.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="desierto.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{desierto.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{desierto.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{desierto.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; $ {{desierto.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{desierto.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">25% para propiedades pagadas de contado al 100%</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{desierto.propertyData.totalPlan1}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">20% de descuento para propiedades con financiamiento hasta 60 Meses</h6>
						<!--<h6 class="green-text futura-light">Precio de ${{desierto.propertyData.totalPlan2}} MXN</h6>-->
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
						<div class="p-20">
						<h6 class="deep-purple-text futura-light"> 5 años de financiamiento, con 24 meses sin intereses.</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{desierto.month}} y paga la primera mensualidad hasta {{desierto.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{desierto.month + ' ' + desierto.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://pay.billpocket.com/habitta">APÁRTAR AQUÍ</a>
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h1 class="center-align">DESIERTO 2</h1>
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
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block pb__apart__bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1669" style="enable-background:new 0 0 1366 1669;" xml:space="preserve">

			<style type="text/css">
				.st2{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st3{fill:#FFFFFF;}
				.st5{font-size:9.0884px;}
				.st6{font-size:9.1182px;}
				.st7{fill:#CED435;}
				.st9{font-size:15.2055px;}
				.st10{font-size:9.0603px;}
				.st11{font-size:9.073px;}
				.st12{font-size:15.1301px;}
				.st13{font-size:9.0339px;}
				.st14{font-size:9.1096px;}
				.st15{font-size:9.0843px;}
				.st16{opacity:0.6;fill:#E6B54A;enable-background:new;}
			</style>

			<image style="overflow:visible;" width="1366" height="1669" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto2.jpg"></image>

			<g>
				<g>
					<polygon class="property pb-sprite-1" points="191,565.9 295.5,498.2 268.5,456.3 163.9,524" ng-class="desierto.inmovablesClassList[76]" ng-click="desierto.showPropertyData(10, '1')"/>
					<polygon class="property pb-sprite-2" points="136.7,482.1 241.2,414.3 268.5,456.3 163.9,524" ng-class="desierto.inmovablesClassList[77]" ng-click="desierto.showPropertyData(10, '2')"/>
					<polygon class="property pb-sprite-1" points="109.6,440.3 214,372.3 241.2,414.3 136.7,482.1" ng-class="desierto.inmovablesClassList[78]" ng-click="desierto.showPropertyData(10, '3')"/>
					<polygon class="property pb-sprite-2" points="82.4,398.5 187,330.6 214,372.3 109.6,440.3" ng-class="desierto.inmovablesClassList[79]" ng-click="desierto.showPropertyData(10, '4')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-1" points="210.5,260 278.4,365 320.1,337.6 252.3,232.9" ng-class="desierto.inmovablesClassList[80]" ng-click="desierto.showPropertyData(10, '5')"/>
					<polygon class="property pb-sprite-2" points="252.3,232.9 294.3,205.8 362,310.4 320.1,337.6" ng-class="desierto.inmovablesClassList[81]" ng-click="desierto.showPropertyData(10, '6')"/>
					<polygon class="property pb-sprite-1" points="294.3,205.8 336.2,178.9 403.9,283.3 362,310.4" ng-class="desierto.inmovablesClassList[82]" ng-click="desierto.showPropertyData(10, '7')"/>
					<polygon class="property pb-sprite-2" points="336.2,178.9 378,151.8 445.7,256.2 403.9,283.3" ng-class="desierto.inmovablesClassList[83]" ng-click="desierto.showPropertyData(10, '8')"/>
					<polygon class="property pb-sprite-1" points="378,151.8 419.9,124.5 487.7,229 445.7,256.2" ng-class="desierto.inmovablesClassList[84]" ng-click="desierto.showPropertyData(10, '9')"/>
					<polygon class="property pb-sprite-2" points="419.9,124.5 467.7,93.6 534.6,198.5 487.7,229" ng-class="desierto.inmovablesClassList[85]" ng-click="desierto.showPropertyData(10, '10')"/>
					<polygon class="property pb-sprite-1" points="467.7,93.6 514,63.6 581.9,168 534.6,198.5" ng-class="desierto.inmovablesClassList[86]" ng-click="desierto.showPropertyData(10, '11')"/>
					<polygon class="property pb-sprite-2" points="514,63.6 561.1,32.9 628.8,137.3 581.9,168" ng-class="desierto.inmovablesClassList[87]" ng-click="desierto.showPropertyData(10, '12')"/>
					<polygon class="property pb-sprite-1" points="608.8,2 676.8,106.5 628.8,137.3 561.1,32.9" ng-class="desierto.inmovablesClassList[88]" ng-click="desierto.showPropertyData(10, '13')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="603.6,223.2 708.1,155.4 735.3,197.1 630.7,265.1" ng-class="desierto.inmovablesClassList[89]" ng-click="desierto.showPropertyData(10, '14')"/>
					<polygon class="property pb-sprite-1" points="630.7,265.1 735.3,197.1 762.3,239.1 657.7,307" ng-class="desierto.inmovablesClassList[90]" ng-click="desierto.showPropertyData(10, '15')"/>
					<polygon class="property pb-sprite-2" points="657.7,307 762.3,239.1 789.5,280.8 684.9,348.7" ng-class="desierto.inmovablesClassList[91]" ng-click="desierto.showPropertyData(10, '16')"/>
					<polygon class="property pb-sprite-1" points="684.9,348.7 789.5,280.8 816.7,322.8 712.1,390.6" ng-class="desierto.inmovablesClassList[92]" ng-click="desierto.showPropertyData(10, '17')"/>
					<polygon class="property pb-sprite-2" points="712.1,390.6 816.7,322.8 843.7,364.6 739.3,432.4" ng-class="desierto.inmovablesClassList[93]" ng-click="desierto.showPropertyData(10, '18')"/>
					<polygon class="property pb-sprite-1" points="739.3,432.4 843.7,364.6 870.9,406.5 766.3,474.3" ng-class="desierto.inmovablesClassList[94]" ng-click="desierto.showPropertyData(10, '19')"/>
					<polygon class="property pb-sprite-2" points="766.3,474.3 870.9,406.5 898,448.4 793.6,516.2" ng-class="desierto.inmovablesClassList[95]" ng-click="desierto.showPropertyData(10, '20')"/>
					<polygon class="property pb-sprite-1" points="793.6,516.2 898,448.4 925.2,490.1 820.7,558.1" ng-class="desierto.inmovablesClassList[96]" ng-click="desierto.showPropertyData(10, '21')"/>
					<polygon class="property pb-sprite-2" points="820.7,558.1 925.2,490.1 952.3,532.1 847.7,599.8" ng-class="desierto.inmovablesClassList[97]" ng-click="desierto.showPropertyData(10, '22')"/>
					<polygon class="property pb-sprite-1" points="847.7,599.8 952.3,532.1 979.4,573.9 874.8,641.9" ng-class="desierto.inmovablesClassList[98]" ng-click="desierto.showPropertyData(10, '23')"/>
					<polygon class="property pb-sprite-2" points="874.8,641.9 979.4,573.9 1006.5,615.8 901.9,683.6" ng-class="desierto.inmovablesClassList[99]" ng-click="desierto.showPropertyData(10, '24')"/>
					<polygon class="property pb-sprite-1" points="901.9,683.6 1006.5,615.8 1033.9,657.7 929.3,725.7" ng-class="desierto.inmovablesClassList[100]" ng-click="desierto.showPropertyData(10, '25')"/>
					<polygon class="property pb-sprite-2" points="929.3,725.7 1033.9,657.7 1061,699.6 956.4,767.4" ng-class="desierto.inmovablesClassList[101]" ng-click="desierto.showPropertyData(10, '26')"/>
					<polygon class="property pb-sprite-1" points="956.4,767.4 1061,699.6 1087.8,741.2 983.2,809.2" ng-class="desierto.inmovablesClassList[102]" ng-click="desierto.showPropertyData(10, '27')"/>
					<polygon class="property pb-sprite-2" points="983.2,809.2 1087.8,741.2 1114.8,783.1 1010.3,850.9" ng-class="desierto.inmovablesClassList[103]" ng-click="desierto.showPropertyData(10, '28')"/>
					<polygon class="property pb-sprite-1" points="1010.3,850.9 1114.8,783.1 1142.5,825 1037.9,893" ng-class="desierto.inmovablesClassList[104]" ng-click="desierto.showPropertyData(10, '29')"/>
					<polygon class="property pb-sprite-2" points="1037.9,893 1142.5,825 1169.6,866.9 1065,934.7" ng-class="desierto.inmovablesClassList[105]" ng-click="desierto.showPropertyData(10, '30')"/>
					<polygon class="property pb-sprite-1" points="1065,934.7 1169.6,866.9 1196.1,908.8 1091.5,976.8" ng-class="desierto.inmovablesClassList[106]" ng-click="desierto.showPropertyData(10, '31')"/>
					<polygon class="property pb-sprite-2" points="1091.5,976.8 1196.1,908.8 1223.2,950.7 1118.6,1018.5" ng-class="desierto.inmovablesClassList[107]" ng-click="desierto.showPropertyData(10, '32')"/>
					<polygon class="property pb-sprite-1" points="1118.6,1018.5 1223.2,950.7 1250.3,992.6 1145.7,1060.6" ng-class="desierto.inmovablesClassList[108]" ng-click="desierto.showPropertyData(10, '33')"/>
					<polygon class="property pb-sprite-2" points="1145.7,1060.6 1250.3,992.6 1277.3,1034.5 1172.8,1102.3" ng-class="desierto.inmovablesClassList[109]" ng-click="desierto.showPropertyData(10, '34')"/>
					<polygon class="property pb-sprite-1" points="1172.8,1102.3 1277.3,1034.5 1308.3,1081.2 1203.7,1149.2" ng-class="desierto.inmovablesClassList[110]" ng-click="desierto.showPropertyData(10, '35')"/>
					<polygon class="property pb-sprite-2" points="1203.7,1149.2 1308.3,1081.2 1338.8,1128.8 1234.3,1196.6" ng-class="desierto.inmovablesClassList[111]" ng-click="desierto.showPropertyData(10, '36')"/>
					<polygon class="property pb-sprite-1" points="1271.2,1253.3 1363.9,1167.1 1338.8,1128.8 1234.3,1196.6" ng-class="desierto.inmovablesClassList[112]" ng-click="desierto.showPropertyData(10, '37')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="1091.5,1257.7 1138.5,1227.3 1199.1,1320.8 1157.2,1359.3" ng-class="desierto.inmovablesClassList[113]" ng-click="desierto.showPropertyData(10, '38')"/>
					<polygon class="property pb-sprite-1" points="1044.2,1288.1 1091.5,1257.7 1157.2,1359.3 1115.4,1398.2" ng-class="desierto.inmovablesClassList[114]" ng-click="desierto.showPropertyData(10, '39')"/>
					<polygon class="property pb-sprite-2" points="1044.2,1288.1 1115.4,1398.2 1073.7,1436.8 997.3,1318.7" ng-class="desierto.inmovablesClassList[115]" ng-click="desierto.showPropertyData(10, '40')"/>
					<polygon class="property pb-sprite-1" points="950,1349.4 997.3,1318.7 1073.7,1436.8 1031.9,1475.4" ng-class="desierto.inmovablesClassList[116]" ng-click="desierto.showPropertyData(10, '41')"/>
					<polygon class="property pb-sprite-2" points="903,1379.7 950,1349.4 1031.9,1475.4 990.1,1514.1" ng-class="desierto.inmovablesClassList[117]" ng-click="desierto.showPropertyData(10, '42')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="786.2,1607.1 890.8,1539.2 917.9,1581.1 825.2,1667.2" ng-class="desierto.inmovablesClassList[118]" ng-click="desierto.showPropertyData(10, '43')"/>
					<polygon class="property pb-sprite-1" points="759.3,1565.4 863.7,1497.5 890.8,1539.2 786.2,1607.1" ng-class="desierto.inmovablesClassList[119]" ng-click="desierto.showPropertyData(10, '44')"/>
					<polygon class="property pb-sprite-2" points="732.1,1523.4 836.6,1455.8 863.7,1497.5 759.3,1565.4" ng-class="desierto.inmovablesClassList[120]" ng-click="desierto.showPropertyData(10, '45')"/>
					<polygon class="property pb-sprite-1" points="705.1,1481.6 809.6,1413.7 836.6,1455.8 732.1,1523.4" ng-class="desierto.inmovablesClassList[121]" ng-click="desierto.showPropertyData(10, '46')"/>
					<polygon class="property pb-sprite-2" points="678,1439.6 782.5,1372 809.6,1413.7 705.1,1481.6" ng-class="desierto.inmovablesClassList[122]" ng-click="desierto.showPropertyData(10, '47')"/>
					<polygon class="property pb-sprite-1" points="650.3,1397.8 754.8,1329.9 782.5,1372 678,1439.6" ng-class="desierto.inmovablesClassList[123]" ng-click="desierto.showPropertyData(10, '48')"/>
					<polygon class="property pb-sprite-2" points="623.2,1355.8 727.7,1288.2 754.8,1329.9 650.3,1397.8" ng-class="desierto.inmovablesClassList[124]" ng-click="desierto.showPropertyData(10, '49')"/>
					<polygon class="property pb-sprite-1" points="596.5,1314.2 700.9,1246.3 727.7,1288.2 623.2,1355.8" ng-class="desierto.inmovablesClassList[125]" ng-click="desierto.showPropertyData(10, '50')"/>
					<polygon class="property pb-sprite-2" points="569.3,1272.2 673.8,1204.6 700.9,1246.3 596.5,1314.2" ng-class="desierto.inmovablesClassList[126]" ng-click="desierto.showPropertyData(10, '51')"/>
					<polygon class="property pb-sprite-1" points="542,1230.2 646.5,1162.3 673.8,1204.6 569.3,1272.2" ng-class="desierto.inmovablesClassList[127]" ng-click="desierto.showPropertyData(10, '52')"/>
					<polygon class="property pb-sprite-2" points="514.8,1188.2 619.4,1120.6 646.5,1162.3 542,1230.2" ng-class="desierto.inmovablesClassList[128]" ng-click="desierto.showPropertyData(10, '53')"/>
					<polygon class="property pb-sprite-1" points="592.9,1079 619.4,1120.6 514.8,1188.2 488.4,1146.8" ng-class="desierto.inmovablesClassList[129]" ng-click="desierto.showPropertyData(10, '54')"/>
					<polygon class="property pb-sprite-2" points="461.3,1104.8 565.8,1037.3 592.9,1079 488.4,1146.8" ng-class="desierto.inmovablesClassList[130]" ng-click="desierto.showPropertyData(10, '55')"/>
					<polygon class="property pb-sprite-1" points="538,995.2 565.8,1037.3 461.3,1104.8 433.5,1063" ng-class="desierto.inmovablesClassList[131]" ng-click="desierto.showPropertyData(10, '56')"/>
					<polygon class="property pb-sprite-2" points="406.3,1021 510.9,953.5 538,995.2 433.5,1063" ng-class="desierto.inmovablesClassList[132]" ng-click="desierto.showPropertyData(10, '57')"/>
					<polygon class="property pb-sprite-1" points="510.9,953.5 483.9,911.4 379.4,979.2 406.3,1021" ng-class="desierto.inmovablesClassList[133]" ng-click="desierto.showPropertyData(10, '58')"/>
					<polygon class="property pb-sprite-2" points="352.3,937.2 456.8,869.7 483.9,911.4 379.4,979.2" ng-class="desierto.inmovablesClassList[134]" ng-click="desierto.showPropertyData(10, '59')"/>
					<polygon class="property pb-sprite-1" points="324.8,895.2 429.2,827.4 456.8,869.7 352.3,937.2" ng-class="desierto.inmovablesClassList[135]" ng-click="desierto.showPropertyData(10, '60')"/>
					<polygon class="property pb-sprite-2" points="297.6,853.2 402.1,785.7 429.2,827.4 324.8,895.2" ng-class="desierto.inmovablesClassList[136]" ng-click="desierto.showPropertyData(10, '61')"/>
					<polygon class="property pb-sprite-1" points="270.8,811.6 375.3,743.8 402.1,785.7 297.6,853.2" ng-class="desierto.inmovablesClassList[137]" ng-click="desierto.showPropertyData(10, '62')"/>
					<polygon class="property pb-sprite-2" points="243.6,769.6 348.2,702.1 375.3,743.8 270.8,811.6" ng-class="desierto.inmovablesClassList[138]" ng-click="desierto.showPropertyData(10, '63')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="680.8,540.3 748.3,644.9 790.2,617.6 722.1,513" ng-class="desierto.inmovablesClassList[139]" ng-click="desierto.showPropertyData(10, '64')"/>
					<polygon class="property pb-sprite-1" points="748.3,644.9 680.8,540.3 638.6,567.4 706.4,672.1" ng-class="desierto.inmovablesClassList[140]" ng-click="desierto.showPropertyData(10, '65')"/>
					<polygon class="property pb-sprite-2" points="596.4,594.4 638.6,567.4 706.4,672.1 664.5,698.9" ng-class="desierto.inmovablesClassList[141]" ng-click="desierto.showPropertyData(10, '66')"/>
					<polygon class="property pb-sprite-1" points="664.5,698.9 622.8,726.3 554.7,621.8 596.4,594.4" ng-class="desierto.inmovablesClassList[142]" ng-click="desierto.showPropertyData(10, '67')"/>
					<polygon class="property pb-sprite-2" points="513.1,648.5 554.7,621.8 622.8,726.3 580.7,753.4" ng-class="desierto.inmovablesClassList[143]" ng-click="desierto.showPropertyData(10, '68')"/>
					<polygon class="property pb-sprite-1" points="580.7,753.4 539,780.6 471.2,675.8 513.1,648.5" ng-class="desierto.inmovablesClassList[144]" ng-click="desierto.showPropertyData(10, '69')"/>
					<polygon class="property pb-sprite-2" points="429.2,702.8 471.2,675.8 539,780.6 496.9,807.5" ng-class="desierto.inmovablesClassList[145]" ng-click="desierto.showPropertyData(10, '70')"/>
					<polygon class="property pb-sprite-1" points="556.5,898.8 598.1,871.6 539,780.6 496.9,807.5" ng-class="desierto.inmovablesClassList[146]" ng-click="desierto.showPropertyData(10, '71')"/>
					<polygon class="property pb-sprite-2" points="598.1,871.6 640.1,845.1 580.7,753.4 539,780.6" ng-class="desierto.inmovablesClassList[147]" ng-click="desierto.showPropertyData(10, '72')"/>
					<polygon class="property pb-sprite-1" points="622.8,726.3 580.7,753.4 640.1,845.1 681.7,817.4" ng-class="desierto.inmovablesClassList[148]" ng-click="desierto.showPropertyData(10, '73')"/>
					<polygon class="property pb-sprite-2" points="681.7,817.4 723.9,790.6 664.5,698.9 622.8,726.3" ng-class="desierto.inmovablesClassList[149]" ng-click="desierto.showPropertyData(10, '74')"/>
					<polygon class="property pb-sprite-1" points="706.4,672.1 664.5,698.9 723.9,790.6 765.2,763.4" ng-class="desierto.inmovablesClassList[150]" ng-click="desierto.showPropertyData(10, '75')"/>
					<polygon class="property pb-sprite-2" points="765.2,763.4 807.6,736 748.3,644.9 706.4,672.1" ng-class="desierto.inmovablesClassList[151]" ng-click="desierto.showPropertyData(10, '76')"/>
					<polygon class="property pb-sprite-1" points="790.2,617.6 849.5,709.5 807.6,736 748.3,644.9" ng-class="desierto.inmovablesClassList[152]" ng-click="desierto.showPropertyData(10, '77')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="839.1,785.1 880.9,758 940.4,849.4 898.5,876.7" ng-class="desierto.inmovablesClassList[153]" ng-click="desierto.showPropertyData(10, '78')"/>
					<polygon class="property pb-sprite-1" points="856.6,903.8 797.2,812 839.1,785.1 898.5,876.7" ng-class="desierto.inmovablesClassList[154]" ng-click="desierto.showPropertyData(10, '79')"/>
					<polygon class="property pb-sprite-2" points="755.8,839.4 797.2,812 856.6,903.8 814.6,931.1" ng-class="desierto.inmovablesClassList[155]" ng-click="desierto.showPropertyData(10, '80')"/>
					<polygon class="property pb-sprite-1" points="773.1,958.2 814.6,931.1 755.8,839.4 713.4,866.3" ng-class="desierto.inmovablesClassList[156]" ng-click="desierto.showPropertyData(10, '81')"/>
					<polygon class="property pb-sprite-2" points="671.7,893.9 713.4,866.3 773.1,958.2 730.9,985.2" ng-class="desierto.inmovablesClassList[157]" ng-click="desierto.showPropertyData(10, '82')"/>
					<polygon class="property pb-sprite-1" points="689.2,1012.4 730.9,985.2 671.7,893.9 629.9,920.4" ng-class="desierto.inmovablesClassList[158]" ng-click="desierto.showPropertyData(10, '83')"/>
					<polygon class="property pb-sprite-2" points="587.7,947.4 629.9,920.4 689.2,1012.4 647.3,1039.3" ng-class="desierto.inmovablesClassList[159]" ng-click="desierto.showPropertyData(10, '84')"/>
					<polygon class="property pb-sprite-1" points="647.3,1039.3 689.2,1012.4 743.2,1096 701.9,1124" ng-class="desierto.inmovablesClassList[160]" ng-click="desierto.showPropertyData(10, '85')"/>
					<polygon class="property pb-sprite-2" points="743.2,1096 785,1069.3 730.9,985.2 689.2,1012.4" ng-class="desierto.inmovablesClassList[161]" ng-click="desierto.showPropertyData(10, '86')"/>
					<polygon class="property pb-sprite-1" points="730.9,985.2 773.1,958.2 827.2,1041.7 785,1069.3" ng-class="desierto.inmovablesClassList[162]" ng-click="desierto.showPropertyData(10, '87')"/>
					<polygon class="property pb-sprite-2" points="827.2,1041.7 869.1,1014.8 814.6,931.1 773.1,958.2" ng-class="desierto.inmovablesClassList[163]" ng-click="desierto.showPropertyData(10, '88')"/>
					<polygon class="property pb-sprite-1" points="814.6,931.1 856.6,903.8 910.8,987.4 869.1,1014.8" ng-class="desierto.inmovablesClassList[164]" ng-click="desierto.showPropertyData(10, '89')"/>
					<polygon class="property pb-sprite-2" points="910.8,987.4 952.9,960.3 898.5,876.7 856.6,903.8" ng-class="desierto.inmovablesClassList[165]" ng-click="desierto.showPropertyData(10, '90')"/>
					<polygon class="property pb-sprite-1" points="995.1,933.8 940.4,849.4 898.5,876.7 952.9,960.3" ng-class="desierto.inmovablesClassList[166]" ng-click="desierto.showPropertyData(10, '91')"/>
				</g>
				<g>
					<polygon class="property pb-sprite-2" points="984.3,1008.8 1026.2,981.9 1085.6,1073.4 1043.2,1100.7" ng-class="desierto.inmovablesClassList[167]" ng-click="desierto.showPropertyData(10, '92')"/>
					<polygon class="property pb-sprite-1" points="1043.2,1100.7 1001.8,1127.9 942.5,1036.2 984.3,1008.8" ng-class="desierto.inmovablesClassList[168]" ng-click="desierto.showPropertyData(10, '93')"/>
					<polygon class="property pb-sprite-2" points="900.3,1063.3 942.5,1036.2 1001.8,1127.9 959.7,1154.7" ng-class="desierto.inmovablesClassList[169]" ng-click="desierto.showPropertyData(10, '94')"/>
					<polygon class="property pb-sprite-1" points="959.7,1154.7 900.3,1063.3 858.7,1090.4 917.8,1181.9" ng-class="desierto.inmovablesClassList[170]" ng-click="desierto.showPropertyData(10, '95')"/>
					<polygon class="property pb-sprite-2" points="816.8,1117.6 858.7,1090.4 917.8,1181.9 875.9,1209.3" ng-class="desierto.inmovablesClassList[171]" ng-click="desierto.showPropertyData(10, '96')"/>
					<polygon class="property pb-sprite-1" points="774.9,1145 816.8,1117.6 875.9,1209.3 834.2,1236" ng-class="desierto.inmovablesClassList[172]" ng-click="desierto.showPropertyData(10, '97')"/>
					<polygon class="property pb-sprite-2" points="733,1171.8 774.9,1145 834.2,1236 792.6,1263.6" ng-class="desierto.inmovablesClassList[173]" ng-click="desierto.showPropertyData(10, '98')"/>
					<polygon class="property pb-sprite-1" points="846.5,1346.7 888.5,1319.8 834.2,1236 792.6,1263.6" ng-class="desierto.inmovablesClassList[174]" ng-click="desierto.showPropertyData(10, '99')"/>
					<polygon class="property pb-sprite-2" points="888.5,1319.8 930.1,1293.1 875.9,1209.3 834.2,1236" ng-class="desierto.inmovablesClassList[175]" ng-click="desierto.showPropertyData(10, '100')"/>
					<polygon class="property pb-sprite-1" points="917.8,1181.9 875.9,1209.3 930.1,1293.1 972.3,1265.4" ng-class="desierto.inmovablesClassList[176]" ng-click="desierto.showPropertyData(10, '101')"/>
					<polygon class="property pb-sprite-2" points="972.3,1265.4 1014.1,1238.6 959.7,1154.7 917.8,1181.9" ng-class="desierto.inmovablesClassList[177]" ng-click="desierto.showPropertyData(10, '102')"/>
					<polygon class="property pb-sprite-1" points="1001.8,1127.9 959.7,1154.7 1014.1,1238.6 1055.7,1211.4" ng-class="desierto.inmovablesClassList[178]" ng-click="desierto.showPropertyData(10, '103')"/>
					<polygon class="property pb-sprite-2" points="1055.7,1211.4 1098,1184.2 1043.2,1100.7 1001.8,1127.9" ng-class="desierto.inmovablesClassList[179]" ng-click="desierto.showPropertyData(10, '104')"/>
					<polygon class="property pb-sprite-1" points="1085.6,1073.4 1043.2,1100.7 1098,1184.2 1139.8,1157.5" ng-class="desierto.inmovablesClassList[180]" ng-click="desierto.showPropertyData(10, '105')"/>
				</g>



				<g>
					<line class="st2" x1="82.4" y1="398.5" x2="187" y2="330.6"/>
					<line class="st2" x1="214" y1="372.3" x2="109.6" y2="440.3"/>
					<line class="st2" x1="136.7" y1="482.1" x2="241.2" y2="414.3"/>
					<line class="st2" x1="268.5" y1="456.3" x2="163.9" y2="524"/>
					<line class="st2" x1="243.6" y1="769.6" x2="348.2" y2="702.1"/>
					<line class="st2" x1="375.3" y1="743.8" x2="270.8" y2="811.6"/>
					<line class="st2" x1="297.6" y1="853.2" x2="402.1" y2="785.7"/>
					<line class="st2" x1="429.2" y1="827.4" x2="324.8" y2="895.2"/>
					<line class="st2" x1="352.3" y1="937.2" x2="456.8" y2="869.7"/>
					<line class="st2" x1="483.9" y1="911.4" x2="379.4" y2="979.2"/>
					<line class="st2" x1="406.3" y1="1021" x2="510.9" y2="953.5"/>
					<line class="st2" x1="538" y1="995.2" x2="433.5" y2="1063"/>
					<line class="st2" x1="461.3" y1="1104.8" x2="565.8" y2="1037.3"/>
					<line class="st2" x1="592.9" y1="1079" x2="488.4" y2="1146.8"/>
					<line class="st2" x1="514.8" y1="1188.2" x2="619.4" y2="1120.6"/>
					<line class="st2" x1="646.5" y1="1162.3" x2="542" y2="1230.2"/>
					<line class="st2" x1="569.3" y1="1272.2" x2="673.8" y2="1204.6"/>
					<line class="st2" x1="700.9" y1="1246.3" x2="596.5" y2="1314.2"/>
					<line class="st2" x1="623.2" y1="1355.8" x2="727.7" y2="1288.2"/>
					<line class="st2" x1="754.8" y1="1329.9" x2="650.3" y2="1397.8"/>
					<line class="st2" x1="678" y1="1439.6" x2="782.5" y2="1372"/>
					<line class="st2" x1="809.6" y1="1413.7" x2="705.1" y2="1481.6"/>
					<line class="st2" x1="732.1" y1="1523.4" x2="836.6" y2="1455.8"/>
					<line class="st2" x1="863.7" y1="1497.5" x2="759.3" y2="1565.4"/>
					<line class="st2" x1="786.2" y1="1607.1" x2="890.8" y2="1539.2"/>
					<line class="st2" x1="903" y1="1379.7" x2="990.1" y2="1514.1"/>
					<line class="st2" x1="950" y1="1349.4" x2="1031.9" y2="1475.4"/>
					<line class="st2" x1="997.3" y1="1318.7" x2="1073.7" y2="1436.8"/>
					<line class="st2" x1="1115.4" y1="1398.2" x2="1044.2" y2="1288.1"/>
					<line class="st2" x1="1091.5" y1="1257.7" x2="1157.2" y2="1359.3"/>
					<line class="st2" x1="1138.5" y1="1227.3" x2="1199.1" y2="1320.8"/>
					<line class="st2" x1="1234.3" y1="1196.6" x2="1338.8" y2="1128.8"/>
					<line class="st2" x1="1308.3" y1="1081.2" x2="1203.7" y2="1149.2"/>
					<line class="st2" x1="1172.8" y1="1102.3" x2="1277.3" y2="1034.5"/>
					<line class="st2" x1="1250.3" y1="992.6" x2="1145.7" y2="1060.6"/>
					<line class="st2" x1="1118.6" y1="1018.5" x2="1223.2" y2="950.7"/>
					<line class="st2" x1="1196.1" y1="908.8" x2="1091.5" y2="976.8"/>
					<line class="st2" x1="1065" y1="934.7" x2="1169.6" y2="866.9"/>
					<line class="st2" x1="1142.5" y1="825" x2="1037.9" y2="893"/>
					<line class="st2" x1="1010.3" y1="850.9" x2="1114.8" y2="783.1"/>
					<line class="st2" x1="1087.8" y1="741.2" x2="983.2" y2="809.2"/>
					<line class="st2" x1="956.4" y1="767.4" x2="1061" y2="699.6"/>
					<line class="st2" x1="1033.9" y1="657.7" x2="929.3" y2="725.7"/>
					<line class="st2" x1="901.9" y1="683.6" x2="1006.5" y2="615.8"/>
					<line class="st2" x1="979.4" y1="573.9" x2="874.8" y2="641.9"/>
					<line class="st2" x1="847.7" y1="599.8" x2="952.3" y2="532.1"/>
					<line class="st2" x1="925.2" y1="490.1" x2="820.6" y2="558.1"/>
					<line class="st2" x1="793.6" y1="516.2" x2="898" y2="448.4"/>
					<line class="st2" x1="870.9" y1="406.5" x2="766.3" y2="474.3"/>
					<line class="st2" x1="739.3" y1="432.4" x2="843.7" y2="364.6"/>
					<line class="st2" x1="816.7" y1="322.8" x2="712.1" y2="390.6"/>
					<line class="st2" x1="684.9" y1="348.7" x2="789.5" y2="280.8"/>
					<line class="st2" x1="630.7" y1="265.1" x2="735.3" y2="197.1"/>
					<line class="st2" x1="657.7" y1="307" x2="762.3" y2="239.1"/>
					<line class="st2" x1="628.8" y1="137.3" x2="561.1" y2="32.9"/>
					<line class="st2" x1="514" y1="63.6" x2="581.9" y2="168"/>
					<line class="st2" x1="534.6" y1="198.5" x2="467.7" y2="93.6"/>
					<line class="st2" x1="419.9" y1="124.5" x2="487.7" y2="229"/>
					<line class="st2" x1="445.7" y1="256.2" x2="378" y2="151.8"/>
					<line class="st2" x1="336.2" y1="178.9" x2="403.9" y2="283.3"/>
					<line class="st2" x1="362" y1="310.4" x2="294.3" y2="205.8"/>
					<line class="st2" x1="252.3" y1="232.9" x2="320.1" y2="337.6"/>
					<line class="st2" x1="471.2" y1="675.8" x2="598.1" y2="871.6"/>
					<line class="st2" x1="640.1" y1="845.1" x2="513.1" y2="648.5"/>
					<line class="st2" x1="429.2" y1="702.8" x2="556.5" y2="898.8"/>
					<line class="st2" x1="681.7" y1="817.4" x2="554.7" y2="621.8"/>
					<line class="st2" x1="596.4" y1="594.4" x2="723.9" y2="790.6"/>
					<line class="st2" x1="765.2" y1="763.4" x2="638.6" y2="567.4"/>
					<line class="st2" x1="680.8" y1="540.3" x2="807.6" y2="736"/>
					<line class="st2" x1="790.2" y1="617.6" x2="496.9" y2="807.5"/>
					<line class="st2" x1="587.7" y1="947.4" x2="701.9" y2="1124"/>
					<line class="st2" x1="743.2" y1="1096" x2="629.9" y2="920.4"/>
					<line class="st2" x1="671.7" y1="893.9" x2="785" y2="1069.3"/>
					<line class="st2" x1="827.2" y1="1041.7" x2="713.4" y2="866.3"/>
					<line class="st2" x1="755.8" y1="839.4" x2="869.1" y2="1014.8"/>
					<line class="st2" x1="910.8" y1="987.4" x2="797.2" y2="812"/>
					<line class="st2" x1="839.1" y1="785.1" x2="952.9" y2="960.3"/>
					<line class="st2" x1="940.4" y1="849.4" x2="647.3" y2="1039.3"/>
					<line class="st2" x1="733" y1="1171.8" x2="846.5" y2="1346.7"/>
					<line class="st2" x1="774.9" y1="1145" x2="888.5" y2="1319.8"/>
					<line class="st2" x1="816.8" y1="1117.6" x2="930.1" y2="1293.1"/>
					<line class="st2" x1="858.7" y1="1090.4" x2="972.3" y2="1265.4"/>
					<line class="st2" x1="900.3" y1="1063.3" x2="1014.1" y2="1238.6"/>
					<line class="st2" x1="942.5" y1="1036.2" x2="1055.7" y2="1211.4"/>
					<line class="st2" x1="984.3" y1="1008.8" x2="1098" y2="1184.2"/>
					<line class="st2" x1="1085.6" y1="1073.4" x2="792.6" y2="1263.6"/>
				</g>
				<g id="numerología">
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 922.0599 848.949)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 869.7401 770.4622)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 896.4758 797.2499)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 864.796 818.4867)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 871.1238 804.9564)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 886.275 810.2607)" class="st7 futura-med st9">78</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 976.2206 932.7477)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 950.6358 881.0491)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 918.9554 902.2736)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 925.2816 888.7538)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 940.4345 894.0593)" class="st7 futura-med st9">91</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 934.9222 960.8934)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 877.6592 930.4306)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 883.9846 916.8978)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 899.1364 922.2028)" class="st7 futura-med st9">90</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 894.1569 987.7078)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 836.8948 957.2455)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 843.2187 943.7118)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 858.3712 949.0175)" class="st7 futura-med st9">89</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 850.5688 1014.8506)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 793.3169 984.3739)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 799.6408 970.8418)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 814.7815 976.1489)" class="st7 futura-med st9">88</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 810.0561 1041.3693)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 752.7916 1010.9073)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 759.1161 997.373)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 774.2701 1002.6949)" class="st7 futura-med st9">87</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 768.4297 1069.1602)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 711.1786 1038.698)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 717.5023 1025.1642)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 732.6439 1030.4731)" class="st7 futura-med st9">86</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 881.0662 874.2048)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 828.7468 795.7154)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 823.8041 843.7437)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 834.5149 831.2756)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 849.6668 836.5818)" class="st7 futura-med st9">79</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 841.2805 900.0562)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 788.957 821.567)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 784.0143 869.593)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 794.7377 857.1277)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 809.8775 862.431)" class="st7 futura-med st9">80</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 798.9312 928.734)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 746.6075 850.2415)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 741.6654 898.2682)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 752.3867 885.8006)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 767.5283 891.1085)" class="st7 futura-med st9">81</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 756.1369 954.8605)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 703.8041 876.3736)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 698.8735 924.3967)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 709.5827 911.932)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 724.7372 917.2379)" class="st7 futura-med st9">82</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 714.1569 983.0192)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 661.8339 904.5285)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 656.8932 952.5429)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 667.6146 940.0869)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 682.7666 945.3931)" class="st7 futura-med st9">83</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 725.6367 1092.5135)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 668.3718 1062.038)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 674.6974 1048.5184)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 689.8528 1053.8281)" class="st7 futura-med st9">85</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 672.1859 1011.9594)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 619.8523 933.4684)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 614.9238 981.4972)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 625.6331 969.0305)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 640.7846 974.3347)" class="st7 futura-med st9">84</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1066.9879 1071.6682)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1014.6662 993.1779)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 1041.4036 1019.9819)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 1009.723 1041.2065)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 1016.0493 1027.6766)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 1031.2023 1032.9818)" class="st7 futura-med st9">92</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1121.1467 1155.4657)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 1095.5625 1103.7679)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 1063.8838 1124.9937)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 1070.2078 1111.4714)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 1083.233 1113.2438)" class="st7 futura-med st9">105</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1079.8611 1183.6093)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 1022.5992 1153.1492)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 1028.9236 1139.6145)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 1041.9476 1141.3864)" class="st7 futura-med st9">104</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1039.0845 1210.4226)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 981.8212 1179.9622)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 988.1454 1166.4303)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 1001.1714 1168.2009)" class="st7 futura-med st9">103</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 995.506 1237.5675)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 938.2422 1207.0924)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 944.5691 1193.5615)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 957.5916 1195.3322)" class="st7 futura-med st9">102</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 954.9813 1264.1029)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 897.7195 1233.6278)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 904.0437 1220.0944)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 917.0801 1221.8782)" class="st7 futura-med st9">101</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 913.3676 1291.8928)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 856.1045 1261.4161)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 862.4297 1247.8834)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 875.4538 1249.6552)" class="st7 futura-med st9">100</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 1025.995 1096.9235)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 973.6721 1018.4339)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 968.7322 1066.4617)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 979.454 1053.9934)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 994.6076 1059.3016)" class="st7 futura-med st9">93</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 986.2051 1122.774)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 933.8839 1044.2845)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 928.9407 1092.312)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 939.6641 1079.8453)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 954.8167 1085.1506)" class="st7 futura-med st9">94</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 943.868 1151.45)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 891.536 1072.9753)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 886.6055 1120.9879)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 897.3146 1108.5195)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 912.4685 1113.8287)" class="st7 futura-med st9">95</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 901.065 1177.5807)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 848.7416 1099.1019)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 843.8015 1147.1182)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 854.5243 1134.6506)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 869.6629 1139.9553)" class="st7 futura-med st9">96</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 859.0945 1205.7369)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 806.7625 1127.2485)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 801.8314 1175.2742)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 812.5391 1162.8043)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 827.6935 1168.1122)" class="st7 futura-med st9">97</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 870.5751 1315.2319)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 813.3124 1284.77)" class="st3 futura-book st5">16.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 819.6382 1271.2375)" class="st3 futura-book st6">128.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 834.7768 1276.5432)" class="st7 futura-med st9">99</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 817.1135 1234.6765)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 764.7906 1156.1904)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 759.8498 1204.2164)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 770.572 1191.7484)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 785.7255 1197.0555)" class="st7 futura-med st9">98</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 790.0742 734.9941)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 729.501 700.6649)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 735.8268 687.1472)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 750.9667 692.4529)" class="st7 futura-med st9">76</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 748.8003 763.8334)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 688.2166 729.5211)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 694.5438 715.9891)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 709.6945 721.294)" class="st7 futura-med st9">75</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 708.5294 790.862)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 647.9583 756.5372)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 654.2843 743.0173)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 669.4243 748.323)" class="st7 futura-med st9">74</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 664.5585 816.2836)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 603.9747 781.9679)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 610.3127 768.4487)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 625.4532 773.7564)" class="st7 futura-med st9">73</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 624.3132 845.4022)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 563.7291 811.0878)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 570.0665 797.5538)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 585.2078 802.8622)" class="st7 futura-med st9">72</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 772.207 616.8554)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 711.7593 524.5649)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 743.3005 561.3149)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 711.6206 582.5402)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 717.9475 569.009)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 733.1003 574.3277)" class="st7 futura-med st9">64</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 833.6008 709.7897)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 804.6958 654.2379)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 773.0164 675.4629)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 779.342 661.9438)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 794.481 667.2478)" class="st7 futura-med st9">77</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 582.1923 872.6716)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 521.6093 838.359)" class="st3 futura-book st5">17.50</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 527.946 824.8251)" class="st3 futura-book st6">140.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 543.0876 830.1322)" class="st7 futura-med st9">71</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 729.7689 643.1752)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 669.3339 550.8848)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 669.1963 608.8595)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 678.5227 592.6898)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 693.6782 597.9989)" class="st7 futura-med st9">65</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 689.8397 671.2037)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 629.4054 578.9129)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 629.2659 636.8887)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 638.5967 620.7226)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 653.7493 626.0266)" class="st7 futura-med st9">66</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 647.8048 698.408)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 587.3615 606.1205)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 587.223 664.0969)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 596.5507 647.926)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 611.7045 653.235)" class="st7 futura-med st9">67</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 605.6873 724.9826)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 545.2416 632.6954)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 545.103 690.6569)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 554.4304 674.4874)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 569.5841 679.8078)" class="st7 futura-med st9">68</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 563.7057 750.6323)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 503.2731 658.3415)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 503.133 716.3154)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 512.4615 700.1481)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 527.6025 705.4556)" class="st7 futura-med st9">69</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 521.9639 779.6747)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.8486 0.5291 -0.5291 -0.8486 461.5184 687.3851)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 461.3805 745.3611)" class="st3 futura-book st5">20.00</text>
					<text transform="matrix(0.5174 0.8557 -0.8557 0.5174 470.7075 729.1904)" class="st3 futura-book st6">160.00m2</text>
					<text transform="matrix(0.4975 0.8259 -0.8557 0.5174 485.8615 734.4991)" class="st7 futura-med st9">70</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 722.5729 184.5103)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 630.4993 245.2979)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 653.3082 201.4279)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 674.6588 233.0294)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 661.0343 226.9318)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 666.2935 211.7642)" class="st7 futura-med st12">14</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 748.954 226.2124)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 656.8942 287.0005)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 701.0422 274.7196)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 683.2346 267.1905)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 688.4951 252.0221)" class="st7 futura-med st12">15</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 775.5905 269.3374)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 683.5176 330.1095)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 727.6776 317.8418)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 709.8708 310.3104)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 715.1302 295.1426)" class="st7 futura-med st12">16</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 801.6701 310.7237)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 709.5966 371.4962)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 753.756 359.2277)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 735.9489 351.6971)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 741.2089 336.5175)" class="st7 futura-med st12">17</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 828.7357 353.0446)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 736.6624 413.832)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 780.8108 401.5648)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 763.0035 394.0221)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 768.2629 378.8532)" class="st7 futura-med st12">18</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 855.9293 392.9602)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 763.8566 453.7355)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 808.0056 441.4692)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 790.1967 433.9244)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 795.4573 418.7571)" class="st7 futura-med st12">19</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 883.0352 435.1588)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 790.9614 495.9314)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 835.1217 483.6647)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 817.3152 476.1217)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 822.574 460.9543)" class="st7 futura-med st12">20</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 910.2392 478.6225)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 818.1681 539.3957)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 862.3282 527.1291)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 844.5222 519.6002)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 849.7808 504.4306)" class="st7 futura-med st12">21</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 937.3446 520.3756)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 845.2728 581.1481)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 889.4318 568.8811)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 871.6132 561.3504)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 876.8729 546.1837)" class="st7 futura-med st12">22</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 964.4245 558.4266)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 872.3506 619.2144)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 916.5122 606.9492)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 898.6928 599.4055)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 903.9525 584.2376)" class="st7 futura-med st12">23</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 991.5055 601.2241)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 899.4434 662.0067)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 943.5935 649.743)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 925.7845 642.1968)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 931.0443 627.0287)" class="st7 futura-med st12">24</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1019.9775 644.9128)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 927.9044 705.7001)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 972.0654 693.433)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 954.2567 685.8882)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 959.5182 670.7214)" class="st7 futura-med st12">25</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1045.9796 687.7571)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 953.9077 748.5438)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 998.0676 736.2761)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 980.2601 728.7316)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 985.5068 713.5636)" class="st7 futura-med st12">26</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1072.9456 729.6626)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 980.8728 790.4358)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1025.0341 778.1696)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1007.2131 770.6385)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1012.4716 755.4691)" class="st7 futura-med st12">27</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1099.8488 770.6808)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1007.7747 831.4665)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1051.9349 819.1987)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1034.1273 811.6556)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1039.3882 796.4893)" class="st7 futura-med st12">28</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1129.7032 812.0785)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1037.63 872.8542)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1081.7886 860.584)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1063.9692 853.0403)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1069.2296 837.8742)" class="st7 futura-med st12">29</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1154.6278 853.5792)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1062.5558 914.3542)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1106.7026 902.0845)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1088.8953 894.5543)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1094.1545 879.3867)" class="st7 futura-med st12">30</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1183.7975 897.1317)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1091.7246 957.9039)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1135.8861 945.6398)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1118.0654 938.1071)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1123.3256 922.94)" class="st7 futura-med st12">31</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1208.1909 937.2244)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1116.1185 997.9985)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1160.2795 985.7452)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1142.4709 978.2007)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1147.7177 963.0327)" class="st7 futura-med st12">32</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1235.4862 978.3098)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1143.4252 1039.0801)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1187.5752 1026.8153)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1169.7661 1019.2826)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1175.026 1004.1146)" class="st7 futura-med st12">33</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1261.3735 1020.6556)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1169.3032 1081.4458)" class="st3 futura-book st10">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1213.4612 1069.1737)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1195.6552 1061.6323)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1200.9153 1046.4652)" class="st7 futura-med st12">34</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1294.219 1067.1367)" class="st3 futura-book st10">9.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1202.1465 1127.9214)" class="st3 futura-book st10">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1246.2937 1115.6537)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1228.4873 1108.1111)" class="st3 futura-book st11">180.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1233.7474 1092.9441)" class="st7 futura-med st12">35</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1325.0375 1113.9828)" class="st3 futura-book st10">9.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1232.9631 1174.7698)" class="st3 futura-book st10">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1277.1248 1162.5034)" class="st3 futura-book st10">20.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1259.3177 1154.9718)" class="st3 futura-book st11">180.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1264.5646 1139.8048)" class="st7 futura-med st12">36</text>
					<text transform="matrix(0.8226 -0.5686 0.5686 0.8226 1019.8077 1315.6886)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.8226 -0.5686 0.5686 0.8226 971.9222 1346.962)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.7922 -0.6103 0.6103 0.7922 1044.9677 1457.0571)" class="st3 futura-book st11">9.14</text>
					<text transform="matrix(0.7922 -0.6103 0.6103 0.7922 1086.8611 1417.6245)" class="st3 futura-book st11">9.14</text>
					<text transform="matrix(0.7922 -0.6103 0.6103 0.7922 1128.9049 1379.6085)" class="st3 futura-book st11">9.14</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1075.2633 1332.6459)" class="st3 futura-book st13">20.98</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1031.8632 1365.0343)" class="st3 futura-book st13">22.55</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 988.7668 1403.0509)" class="st3 futura-book st13">24.12</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1352.0782 1157.5121)" class="st3 futura-book st10">7.41</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 1266.5455 1228.1062)" class="st3 futura-book st10">10.90</text>
					<text transform="matrix(0.7363 -0.6766 0.6766 0.7363 1309.9088 1211.5176)" class="st3 futura-book st6">20.30</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 1290.4397 1202.6938)" class="st3 futura-book st11">183.05m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 1295.7001 1187.5266)" class="st7 futura-med st12">37</text>
					<text transform="matrix(0.8226 -0.5686 0.5686 0.8226 1112.743 1254.9412)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.7922 -0.6103 0.6103 0.7922 1170.5062 1338.9686)" class="st3 futura-book st11">9.14</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1157.1614 1274.7361)" class="st3 futura-book st13">17.84</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1121.249 1299.1157)" class="st3 futura-book st13">19.41</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1127.2806 1282.7688)" class="st3 futura-book st13">167.61m2</text>
					<text transform="matrix(0.5352 0.809 -0.834 0.5518 1142.6528 1287.4199)" class="st7 futura-med st12">38</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1085.0958 1315.4883)" class="st3 futura-book st13">181.74m2</text>
					<text transform="matrix(0.5352 0.809 -0.834 0.5518 1100.4688 1320.1395)" class="st7 futura-med st12">39</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 1042.1133 1348.1671)" class="st3 futura-book st13">195.87m2</text>
					<text transform="matrix(0.5352 0.809 -0.834 0.5518 1057.4854 1352.819)" class="st7 futura-med st12">40</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 998.447 1382.7375)" class="st3 futura-book st13">210.00m2</text>
					<text transform="matrix(0.5352 0.809 -0.834 0.5518 1013.8193 1387.389)" class="st7 futura-med st12">41</text>
					<text transform="matrix(0.8226 -0.5686 0.5686 0.8226 925.2012 1377.02)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.7922 -0.6103 0.6103 0.7922 1002.4165 1495.0609)" class="st3 futura-book st11">9.14</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 943.6418 1437.5664)" class="st3 futura-book st13">25.69</text>
					<text transform="matrix(0.5524 0.8336 -0.8336 0.5524 954.6157 1419.4464)" class="st3 futura-book st13">224.14m2</text>
					<text transform="matrix(0.5352 0.809 -0.834 0.5518 969.9879 1424.0967)" class="st7 futura-med st12">42</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 291.755 352.1031)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 228.4601 261.7537)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 273.0652 283.4734)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 242.0694 305.6745)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 247.661 291.8777)" class="st3 futura-book st10">160.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 262.9543 296.7179)" class="st7 futura-med st12">05</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 334.3823 324.2492)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 271.0748 233.8882)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 315.6803 255.6088)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 287.6898 265.951)" class="st3 futura-book st10">160.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 302.9957 270.7921)" class="st7 futura-med st12">06</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 376.1749 297.7033)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 312.8792 207.3414)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 357.483 229.0609)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 329.4947 239.405)" class="st3 futura-book st10">160.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 344.8012 244.243)" class="st7 futura-med st12">07</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 417.4596 271.4225)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 354.1637 181.0608)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 398.769 202.7803)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 370.7798 213.1234)" class="st3 futura-book st10">160.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 386.0852 217.9626)" class="st7 futura-med st12">08</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 458.3379 243.2917)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 395.0303 152.9296)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 439.6482 174.649)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 411.6457 184.9927)" class="st3 futura-book st10">160.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 426.9522 189.8318)" class="st7 futura-med st12">09</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 504.9322 215.1353)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 441.6244 124.7851)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 486.2403 146.4917)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 458.2398 156.8481)" class="st3 futura-book st10">180.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 473.5453 161.6879)" class="st7 futura-med st12">10</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 552.8687 183.8095)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 489.5618 93.4481)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 534.1774 115.1666)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 506.1756 125.5097)" class="st3 futura-book st10">180.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 521.4818 130.351)" class="st7 futura-med st12">11</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 596.3084 155.0843)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 533.0125 64.7203)" class="st3 futura-book st11">9.00</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 577.6182 86.4408)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 549.6281 96.7831)" class="st3 futura-book st10">180.00m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 564.9341 101.6241)" class="st7 futura-med st12">12</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 644.8908 121.6542)" class="st3 futura-book st11">9.12</text>
					<text transform="matrix(0.8288 -0.5595 0.5595 0.8288 581.584 31.2938)" class="st3 futura-book st11">9.12</text>
					<text transform="matrix(0.5595 0.8288 -0.8288 0.5595 626.1987 52.9989)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 598.2002 63.3558)" class="st3 futura-book st10">182.34m2</text>
					<text transform="matrix(0.5255 0.8153 -0.8406 0.5417 613.5035 68.1938)" class="st7 futura-med st12">13</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 268.7067 474.0449)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 177.4194 535.9991)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 213.4832 503.8508)" class="st3 futura-book st14">20.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 235.2279 535.1766)" class="st3 futura-book st14">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 221.8096 529.2552)" class="st3 futura-book st5">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 226.8783 514.0258)" class="st7 futura-med st12">01</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 241.0712 432.2946)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 149.7846 494.2461)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 185.8457 462.0972)" class="st3 futura-book st14">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 194.9199 488.8706)" class="st3 futura-book st5">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 199.988 473.6394)" class="st7 futura-med st12">02</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 214.8794 390.9975)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 123.5909 452.949)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 159.6532 420.7994)" class="st3 futura-book st14">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 168.7399 447.574)" class="st3 futura-book st5">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 173.7961 432.3295)" class="st7 futura-med st12">03</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 187.6844 348.7989)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 96.4099 410.7517)" class="st3 futura-book st14">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 132.4733 378.6037)" class="st3 futura-book st14">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 141.5462 405.3776)" class="st3 futura-book st5">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 146.6162 390.1349)" class="st7 futura-med st12">04</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 864.6827 1513.7216)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 772.509 1577.2692)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 807.8754 1545.0345)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 892.4226 1557.87)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 802.1739 1624.4467)" class="st3 futura-book st11">11.49</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 837.7049 1586.1039)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.769 -0.6392 0.6392 0.769 863.5052 1624.119)" class="st3 futura-book st15">20.30</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 844.0425 1613.6276)" class="st3 futura-book st11">194.90m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 849.6824 1598.5995)" class="st7 futura-med st12">43</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 816.835 1573.5449)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 822.4748 1558.517)" class="st7 futura-med st12">44</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 838.5414 1473.0068)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 746.3687 1536.5563)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 781.7467 1504.3214)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 790.6933 1532.843)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 796.3333 1517.8036)" class="st7 futura-med st12">45</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 812.4753 1431.3685)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 720.2885 1494.9149)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 755.6684 1462.6814)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 764.6157 1491.2062)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 770.2554 1476.1637)" class="st7 futura-med st12">46</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 785.4467 1390.2598)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 693.2612 1453.8112)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 728.6395 1421.5875)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 737.6008 1450.0995)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 743.227 1435.0703)" class="st7 futura-med st12">47</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 757.4059 1348.6598)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 665.2179 1412.2207)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 700.5964 1379.9856)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 709.5577 1408.4979)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 715.1841 1393.4686)" class="st7 futura-med st12">48</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 730.0321 1305.7657)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 637.858 1369.3148)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 673.2253 1337.0797)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 682.1865 1365.6034)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 687.8251 1350.5739)" class="st7 futura-med st12">49</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 703.7783 1264.6835)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 611.6039 1328.2339)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 646.9702 1295.9971)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 655.9297 1324.507)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 661.5682 1309.4786)" class="st7 futura-med st12">50</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 675.8994 1223.9446)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 583.7131 1287.4918)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 619.0921 1255.2576)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 628.0516 1283.781)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 633.6792 1268.7408)" class="st7 futura-med st12">51</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 649.6048 1183.3438)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 557.4313 1246.8936)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 592.798 1214.6565)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 601.7594 1243.1821)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 607.3975 1228.1393)" class="st7 futura-med st12">52</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 622.337 1139.12)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 530.1488 1202.6683)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 565.5286 1170.4326)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 574.4883 1198.9552)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 580.1155 1183.9287)" class="st7 futura-med st12">53</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 595.5874 1098.0896)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 503.411 1161.6366)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 538.7784 1129.4026)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 547.7382 1157.9253)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 553.3779 1142.8849)" class="st7 futura-med st12">54</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 567.3272 1056.7653)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 475.1557 1120.3162)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 510.5201 1088.0781)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 519.4818 1116.6045)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 525.1198 1101.5618)" class="st7 futura-med st12">55</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 541.3374 1014.7346)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 449.1654 1078.2823)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 484.5305 1046.0463)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 493.4919 1074.572)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 499.1309 1059.5299)" class="st7 futura-med st12">56</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 513.2832 973.1075)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 421.1081 1036.6548)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 456.4769 1004.4222)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 465.435 1032.9435)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 471.0754 1017.9151)" class="st7 futura-med st12">57</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 485.7848 929.73)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 393.6111 993.2811)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 428.9915 961.046)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 437.9514 989.5697)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 443.578 974.5291)" class="st7 futura-med st12">58</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 460.1142 888.5114)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 367.9258 952.0598)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 403.3054 919.8242)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 412.2654 948.3478)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 417.8914 933.3065)" class="st7 futura-med st12">59</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 432.3366 844.5268)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 340.1629 908.0768)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 375.5283 875.8394)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 384.4895 904.365)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 390.1288 889.3362)" class="st7 futura-med st12">60</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 405.37 804.4963)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 313.1967 868.0585)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 348.5627 835.823)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 357.5234 864.3467)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 363.1632 849.3064)" class="st7 futura-med st12">61</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 376.4913 762.1216)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 284.3173 825.6832)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 319.6847 793.4491)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 328.644 821.9727)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 334.2842 806.9321)" class="st7 futura-med st12">62</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 349.2597 718.8743)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 257.0732 782.4217)" class="st3 futura-book st11">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 292.4532 750.188)" class="st3 futura-book st11">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 301.4124 778.7112)" class="st3 futura-book st11">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 307.0392 763.6704)" class="st7 futura-med st12">63</text>
					<rect x="651.5" y="208.1" transform="matrix(0.2057 -0.9786 0.9786 0.2057 313.127 810.1)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="658.7,217 655.7,212.3 652.5,207.4 660.4,209"/>
					<rect x="673.5" y="247.1" transform="matrix(0.2057 -0.9786 0.9786 0.2057 292.4108 862.6157)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="680.7,256 677.7,251.3 674.5,246.4 682.4,248"/>
					<rect x="700.8" y="290.9" transform="matrix(0.2057 -0.9786 0.9786 0.2057 271.1973 924.1154)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="708,299.8 705,295.1 701.7,290.2 709.7,291.9"/>
					<rect x="726.7" y="331.6" transform="matrix(0.2057 -0.9786 0.9786 0.2057 251.9355 981.736)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="733.9,340.5 730.8,335.8 727.6,330.9 735.5,332.5"/>
					<rect x="753.3" y="373.6" transform="matrix(0.2057 -0.9786 0.9786 0.2057 232.0021 1041.0935)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="760.5,382.4 757.4,377.7 754.2,372.8 762.1,374.5"/>
					<rect x="779.8" y="415.4" transform="matrix(0.2057 -0.9786 0.9786 0.2057 212.1441 1100.2546)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="787,424.2 783.9,419.6 780.7,414.6 788.7,416.3"/>
					<rect x="516.4" y="116" transform="matrix(0.1903 -0.9817 0.9817 0.1903 303.5203 608.1137)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="516.5,124.5 521.1,121.4 526,118.1 524.4,126.1"/>
					<rect x="469.6" y="147.1" transform="matrix(0.1876 -0.9823 0.9823 0.1876 236.372 588.1157)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="469,154.4 473.6,151.2 478.4,147.9 476.9,155.9"/>
					<rect x="422.5" y="176.7" transform="matrix(0.1876 -0.9823 0.9823 0.1876 169.0325 565.8755)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="421.8,184 426.5,180.8 431.3,177.5 429.8,185.5"/>
					<rect x="382.3" y="203.3" transform="matrix(0.1876 -0.9823 0.9823 0.1876 110.2217 548.0097)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="381.6,210.6 386.2,207.4 391.1,204.1 389.6,212.1"/>
					<rect x="340.3" y="230.1" transform="matrix(0.1876 -0.9823 0.9823 0.1876 49.7766 528.4306)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="339.6,237.3 344.2,234.2 349.1,230.9 347.5,238.8"/>
					<rect x="298.4" y="256.9" transform="matrix(0.1876 -0.9823 0.9823 0.1876 -10.588 509.0712)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="297.7,264.1 302.3,261 307.2,257.7 305.6,265.7"/>
					<rect x="258.6" y="284" transform="matrix(0.1876 -0.9823 0.9823 0.1876 -69.5098 492.0513)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="257.9,291.3 262.6,288.1 267.4,284.8 265.9,292.8"/>
					<rect x="131.4" y="385.1" transform="matrix(0.1888 -0.982 0.982 0.1888 -272.3069 448.7243)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="138.7,393.9 135.5,389.3 132.2,384.4 140.2,386"/>
					<rect x="157.9" y="425.4" transform="matrix(0.1888 -0.982 0.982 0.1888 -290.2763 507.4517)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="165.2,434.2 162.1,429.5 158.8,424.7 166.7,426.2"/>
					<rect x="184.6" y="467.4" transform="matrix(0.1888 -0.982 0.982 0.1888 -309.9402 567.8143)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="191.9,476.2 188.8,471.6 185.5,466.8 193.4,468.3"/>
					<rect x="211.4" y="509.4" transform="matrix(0.1888 -0.982 0.982 0.1888 -329.4137 628.1071)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="218.7,518.2 215.5,513.5 212.2,508.7 220.2,510.2"/>
					<rect x="292.2" y="759.2" transform="matrix(0.1888 -0.982 0.982 0.1888 -509.1913 910.1334)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="299.5,768 296.3,763.4 293,758.5 301,760"/>
					<rect x="835" y="1594.4" transform="matrix(0.1888 -0.982 0.982 0.1888 -889.0587 2120.72)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="842.3,1603.2 839.1,1598.6 835.8,1593.7 843.8,1595.3"/>
					<rect x="1281.5" y="1183.8" transform="matrix(0.1888 -0.982 0.982 0.1888 -123.6089 2226.0159)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="1288.7,1192.6 1285.6,1187.9 1282.3,1183.1 1290.2,1184.6"/>
					<rect x="728.9" y="560.7" transform="matrix(0.2123 -0.9772 0.9772 0.2123 25.4032 1161.0662)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="728.1,567.9 732.8,564.9 737.8,561.7 736,569.6"/>
					<rect x="689.4" y="584.7" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -29.0938 1141.3718)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="688.6,591.8 693.3,588.8 698.3,585.6 696.6,593.6"/>
					<rect x="649.1" y="612.7" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -88.2285 1124.0865)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="648.4,619.9 653.1,616.8 658,613.7 656.3,621.6"/>
					<rect x="607.9" y="639.6" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -146.9605 1105.0277)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="607.2,646.8 611.9,643.7 616.8,640.6 615.1,648.5"/>
					<rect x="565.4" y="666.4" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -206.6331 1084.4851)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="564.6,673.5 569.3,670.5 574.2,667.3 572.5,675.2"/>
					<rect x="523.6" y="692.1" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -264.7065 1063.9661)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="522.8,699.3 527.5,696.3 532.5,693.1 530.7,701"/>
					<rect x="482.9" y="719.5" transform="matrix(0.2123 -0.9772 0.9772 0.2123 -323.4772 1045.7826)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="482.2,726.6 486.9,723.6 491.8,720.4 490.1,728.4"/>
					<rect x="795.9" y="651" transform="matrix(0.2614 -0.9652 0.9652 0.2614 -41.3992 1255.8984)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="790,659.7 794.8,656.9 799.9,654 797.8,661.9"/>
					<rect x="538.7" y="816.6" transform="matrix(0.2504 -0.9681 0.9681 0.2504 -387.6715 1140.6879)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="537.8,823.6 542.6,820.7 547.7,817.8 545.7,825.6"/>
					<rect x="882.6" y="796.9" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -118.9586 1446.2792)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="881.7,803.8 886.6,801.1 891.7,798.1 889.6,806"/>
					<rect x="635.7" y="960.2" transform="matrix(0.2504 -0.9681 0.9681 0.2504 -453.9296 1342.2383)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="634.8,967.1 639.7,964.3 644.7,961.3 642.7,969.2"/>
					<rect x="937.2" y="879.8" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -158.7236 1560.0425)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="936.3,886.7 941.1,883.9 946.2,881 944.1,888.8"/>
					<rect x="686.6" y="1039.7" transform="matrix(0.2504 -0.9681 0.9681 0.2504 -492.8147 1451.1115)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="685.7,1046.7 690.5,1043.8 695.6,1040.9 693.6,1048.7"/>
					<rect x="1027.4" y="1019.3" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -226.8257 1749.9603)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="1026.5,1026.2 1031.3,1023.5 1036.4,1020.6 1034.3,1028.4"/>
					<rect x="781.5" y="1182.6" transform="matrix(0.2504 -0.9681 0.9681 0.2504 -559.9894 1650.1108)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="780.6,1189.5 785.4,1186.7 790.5,1183.7 788.5,1191.6"/>
					<rect x="1080.6" y="1101.6" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -266.9479 1861.9485)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="1079.7,1108.5 1084.5,1105.7 1089.6,1102.8 1087.5,1110.6"/>
					<rect x="1138.6" y="1272.8" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -389.3904 2044.2356)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="1137.7,1279.7 1142.5,1277 1147.7,1274.1 1145.5,1281.9"/>
					<rect x="965.7" y="1408.8" transform="matrix(0.2625 -0.9649 0.9649 0.2625 -648.1089 1977.7122)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="964.8,1415.7 969.7,1413 974.8,1410 972.6,1417.9"/>
					<rect x="831.3" y="1262.2" transform="matrix(0.2504 -0.9681 0.9681 0.2504 -599.6514 1757.9719)" class="st16" width="8.1" height="8.1"/>
					<polygon class="st16" points="830.5,1269.1 835.3,1266.2 840.3,1263.3 838.3,1271.1"/>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>