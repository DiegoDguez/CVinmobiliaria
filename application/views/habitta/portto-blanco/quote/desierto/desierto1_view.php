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
						<h6 class="green-text futura-light">Precio de ${{desierto.propertyData.totalPlan2}} MXN</h6>
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
					<h1 class="center-align">DESIERTO 1</h1>
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
				viewBox="0 0 1366 1415" style="enable-background:new 0 0 1366 1415;" xml:space="preserve">
				
			<style type="text/css">
				.st2{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st3{opacity:0.6;fill:none;stroke:#FFFFFF;stroke-miterlimit:10;enable-background:new;}
				.st4{fill:#FFFFFF;}
				.st6{font-size:9.8459px;}
				.st7{font-size:9.8336px;}
				.st8{fill:#CED435;}
				.st10{font-size:16.3893px;}
				.st11{font-size:9.8332px;}
				.st12{font-size:9.834px;}
				.st13{font-size:16.39px;}
				.st14{font-size:9.8341px;}
				.st15{font-size:16.3253px;}
				.st16{font-size:9.8581px;}
				.st17{font-size:9.8333px;}
				.st18{font-size:9.8733px;}
				.st19{font-size:9.8506px;}
				.st20{font-size:9.8339px;}
				.st21{font-size:16.3899px;}
				.st22{opacity:0.6;fill:#E6B54A;enable-background:new;}
			</style>

			<image style="overflow:visible;" width="1366" height="1415" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto1.jpg"></image>

			<title>Desierto - Portto Blanco</title>

			<g>

				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="439.3,341.7 553.2,268.3 523.4,222.9 410.6,296.4" ng-class="desierto.inmovablesClassList[0]" ng-click="desierto.showPropertyData(9, '1')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="380.6,251 493.8,178 523.4,222.9 410.6,296.4" ng-class="desierto.inmovablesClassList[1]" ng-click="desierto.showPropertyData(9, '2')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="380.6,251 493.8,178 464.8,132.2 351.4,205.6" ng-class="desierto.inmovablesClassList[2]" ng-click="desierto.showPropertyData(9, '3')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="322.1,160.5 435.3,87.1 464.8,132.2 351.4,205.6" ng-class="desierto.inmovablesClassList[3]" ng-click="desierto.showPropertyData(9, '4')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="190.9,185.1 242.2,152.4 315.3,265.5 264.3,299" ng-class="desierto.inmovablesClassList[4]" ng-click="desierto.showPropertyData(9, '5')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="144,215.8 190.9,185.1 264.3,299 213.2,331.7" ng-class="desierto.inmovablesClassList[5]" ng-click="desierto.showPropertyData(9, '6')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="101.2,238.7 117.4,230.6 137.4,219.5 144,215.8 213.2,331.7 191.3,344.2 178.2,351.1 159.7,360.4" ng-class="desierto.inmovablesClassList[6]" ng-click="desierto.showPropertyData(9, '7')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="101.2,238.7 78.5,248.8 56.5,257.8 103.8,384.1 130.6,373.5 159.7,360.4" ng-class="desierto.inmovablesClassList[7]" ng-click="desierto.showPropertyData(9, '8')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="56.5,257.8 103.8,384.1 90.7,389 77.7,393.6 66.2,397 56.9,400 39.1,404.8 3.4,288.1 16.5,285.1 12.6,272" ng-class="desierto.inmovablesClassList[8]" ng-click="desierto.showPropertyData(9, '9')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<path class="property pb-sprite-2" d="M57.5,465c18.6-4.9,38.5-11,59.3-18.5c22.9-8.2,45.3-17.6,67.3-28c6.1,19.5,12.2,39,18.4,58.5 L73.3,516.6L57.5,465z" ng-class="desierto.inmovablesClassList[9]" ng-click="desierto.showPropertyData(9, '10')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="73.3,516.6 202.4,477 218.1,528.6 89.1,568.2" ng-class="desierto.inmovablesClassList[10]" ng-click="desierto.showPropertyData(9, '11')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="104.9,619.8 89.1,568.2 218.1,528.6 234.1,580.4" ng-class="desierto.inmovablesClassList[11]" ng-click="desierto.showPropertyData(9, '12')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="104.9,619.8 234.1,580.4 249.8,631.9 120.7,671.4" ng-class="desierto.inmovablesClassList[12]" ng-click="desierto.showPropertyData(9, '13')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="120.7,671.4 249.8,631.9 265.7,683.5 136.6,723.1" ng-class="desierto.inmovablesClassList[13]" ng-click="desierto.showPropertyData(9, '14')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="136.6,723.1 265.7,683.5 281.5,735.3 152.5,774.8" ng-class="desierto.inmovablesClassList[14]" ng-click="desierto.showPropertyData(9, '15')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="152.5,774.8 281.5,735.3 297.3,786.9 168.2,826.5" ng-class="desierto.inmovablesClassList[15]" ng-click="desierto.showPropertyData(9, '16')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="168.2,826.5 297.3,786.9 313.2,838.7 184.1,878.2" ng-class="desierto.inmovablesClassList[16]" ng-click="desierto.showPropertyData(9, '17')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="184.1,878.2 313.2,838.7 329,890.2 199.9,929.7" ng-class="desierto.inmovablesClassList[17]" ng-click="desierto.showPropertyData(9, '18')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="199.9,929.7 329,890.2 344.8,942 215.7,981.4" ng-class="desierto.inmovablesClassList[18]" ng-click="desierto.showPropertyData(9, '19')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="215.7,981.4 344.8,942 360.5,993.5 231.4,1033" ng-class="desierto.inmovablesClassList[19]" ng-click="desierto.showPropertyData(9, '20')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="231.4,1033 360.5,993.5 376.3,1045 247.3,1084.9" ng-class="desierto.inmovablesClassList[20]" ng-click="desierto.showPropertyData(9, '21')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="247.3,1084.9 376.3,1045 392.4,1096.8 263.1,1136.4" ng-class="desierto.inmovablesClassList[21]" ng-click="desierto.showPropertyData(9, '22')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="263.1,1136.4 392.4,1096.8 410.1,1154.9 281,1194.5" ng-class="desierto.inmovablesClassList[22]" ng-click="desierto.showPropertyData(9, '23')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="281,1194.5 410.1,1154.9 427.8,1212.9 298.8,1252.6" ng-class="desierto.inmovablesClassList[23]" ng-click="desierto.showPropertyData(9, '24')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="298.8,1252.6 427.8,1212.9 456.2,1305.5 309.6,1288" ng-class="desierto.inmovablesClassList[24]" ng-click="desierto.showPropertyData(9, '25')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="540.5,1179.7 524.5,1313.9 578.1,1320.2 594.2,1186.3" ng-class="desierto.inmovablesClassList[25]" ng-click="desierto.showPropertyData(9, '26')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="594.2,1186.3 647.8,1192.6 631.7,1326.7 578.1,1320.2" ng-class="desierto.inmovablesClassList[26]" ng-click="desierto.showPropertyData(9, '27')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="647.8,1192.6 701.4,1198.9 685.3,1333.1 631.7,1326.7" ng-class="desierto.inmovablesClassList[27]" ng-click="desierto.showPropertyData(9, '28')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="701.4,1198.9 755,1205.6 739.2,1339.4 685.3,1333.1" ng-class="desierto.inmovablesClassList[28]" ng-click="desierto.showPropertyData(9, '29')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="755,1205.6 808.6,1211.9 792.8,1346 739.2,1339.4" ng-class="desierto.inmovablesClassList[29]" ng-click="desierto.showPropertyData(9, '30')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="808.6,1211.9 862.2,1218.2 846.5,1352.4 792.8,1346" ng-class="desierto.inmovablesClassList[30]" ng-click="desierto.showPropertyData(9, '31')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="862.2,1218.2 915.8,1224.9 900,1358.7 846.5,1352.4" ng-class="desierto.inmovablesClassList[31]" ng-click="desierto.showPropertyData(9, '32')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="915.8,1224.9 969.6,1231.2 953.6,1365.3 900,1358.7" ng-class="desierto.inmovablesClassList[32]" ng-click="desierto.showPropertyData(9, '33')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1032.1,1238.5 1016,1372.7 953.6,1365.3 969.6,1231.2" ng-class="desierto.inmovablesClassList[33]" ng-click="desierto.showPropertyData(9, '34')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="1194.1,1373.4 1307.3,1299.8 1277.9,1254.4 1164.7,1327.9" ng-class="desierto.inmovablesClassList[34]" ng-click="desierto.showPropertyData(9, '35')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1248.6,1209.2 1277.9,1254.4 1164.7,1327.9 1135.3,1282.6" ng-class="desierto.inmovablesClassList[35]" ng-click="desierto.showPropertyData(9, '36')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="1135.3,1282.6 1248.6,1209.2 1219.1,1163.8 1106,1237.2" ng-class="desierto.inmovablesClassList[36]" ng-click="desierto.showPropertyData(9, '37')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1106,1237.2 1076.6,1191.9 1189.9,1118.5 1219.1,1163.8" ng-class="desierto.inmovablesClassList[37]" ng-click="desierto.showPropertyData(9, '38')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="1076.6,1191.9 1189.9,1118.5 1160.3,1073.1 1047.2,1146.5" ng-class="desierto.inmovablesClassList[38]" ng-click="desierto.showPropertyData(9, '39')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1131.1,1027.7 1160.3,1073.1 1047.2,1146.5 1017.9,1101.3" ng-class="desierto.inmovablesClassList[39]" ng-click="desierto.showPropertyData(9, '40')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="1017.9,1101.3 1131.1,1027.7 1101.6,982.6 988.5,1055.9" ng-class="desierto.inmovablesClassList[40]" ng-click="desierto.showPropertyData(9, '41')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1072.1,937.1 1101.6,982.6 988.5,1055.9 959,1010.7" ng-class="desierto.inmovablesClassList[41]" ng-click="desierto.showPropertyData(9, '42')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="929.6,965.1 1042.8,891.9 1072.1,937.1 959,1010.7" ng-class="desierto.inmovablesClassList[42]" ng-click="desierto.showPropertyData(9, '43')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="1013.5,846.5 1042.8,891.9 929.6,965.1 900.3,919.8" ng-class="desierto.inmovablesClassList[43]" ng-click="desierto.showPropertyData(9, '44')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="900.3,919.8 1013.5,846.5 984.2,801.2 871,874.6" ng-class="desierto.inmovablesClassList[44]" ng-click="desierto.showPropertyData(9, '45')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="954.8,755.9 984.2,801.2 871,874.6 841.6,829.3" ng-class="desierto.inmovablesClassList[45]" ng-click="desierto.showPropertyData(9, '46')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="812.3,784 841.6,829.3 954.8,755.9 925.4,710.4" ng-class="desierto.inmovablesClassList[46]" ng-click="desierto.showPropertyData(9, '47')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="896.1,665.1 925.4,710.4 812.3,784 782.8,738.4" ng-class="desierto.inmovablesClassList[47]" ng-click="desierto.showPropertyData(9, '48')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="782.8,738.4 896.1,665.1 866.6,619.8 753.4,693.2" ng-class="desierto.inmovablesClassList[48]" ng-click="desierto.showPropertyData(9, '49')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="837.2,574.4 866.6,619.8 753.4,693.2 724.2,647.9" ng-class="desierto.inmovablesClassList[49]" ng-click="desierto.showPropertyData(9, '50')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="724.2,647.9 837.2,574.4 807.9,529.2 694.6,602.5" ng-class="desierto.inmovablesClassList[50]" ng-click="desierto.showPropertyData(9, '51')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="694.6,602.5 665.3,557.2 778.4,483.7 807.9,529.2" ng-class="desierto.inmovablesClassList[51]" ng-click="desierto.showPropertyData(9, '52')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="665.3,557.2 778.4,483.7 749.1,438.5 636,511.8" ng-class="desierto.inmovablesClassList[52]" ng-click="desierto.showPropertyData(9, '53')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="719.8,393.1 606.6,466.6 636,511.8 749.1,438.5" ng-class="desierto.inmovablesClassList[53]" ng-click="desierto.showPropertyData(9, '54')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="578.8,638.7 624,609.3 688.5,708.7 643,737.8" ng-class="desierto.inmovablesClassList[54]" ng-click="desierto.showPropertyData(9, '55')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="533.7,668 578.8,638.7 643,737.8 597.6,767.6" ng-class="desierto.inmovablesClassList[55]" ng-click="desierto.showPropertyData(9, '56')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="533.7,668 488.1,697.3 552.6,796.8 597.6,767.6" ng-class="desierto.inmovablesClassList[56]" ng-click="desierto.showPropertyData(9, '57')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="488.1,697.3 442.8,726.8 507.2,826 552.6,796.8" ng-class="desierto.inmovablesClassList[57]" ng-click="desierto.showPropertyData(9, '58')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="397.3,756.1 442.8,726.8 507.2,826 461.5,855.5" ng-class="desierto.inmovablesClassList[58]" ng-click="desierto.showPropertyData(9, '59')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="360.9,779.8 396.9,897.3 461.5,855.5 397.3,756.1" ng-class="desierto.inmovablesClassList[59]" ng-click="desierto.showPropertyData(9, '60')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="475.1,975.4 520.6,946.2 461.5,855.5 416.3,884.5" ng-class="desierto.inmovablesClassList[60]" ng-click="desierto.showPropertyData(9, '61')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="520.6,946.2 461.5,855.5 507.2,826 565.8,916.7" ng-class="desierto.inmovablesClassList[61]" ng-click="desierto.showPropertyData(9, '62')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="611.2,887.2 565.8,916.7 507.2,826 552.6,796.8" ng-class="desierto.inmovablesClassList[62]" ng-click="desierto.showPropertyData(9, '63')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="611.2,887.2 656.4,858.1 597.6,767.6 552.6,796.8" ng-class="desierto.inmovablesClassList[63]" ng-click="desierto.showPropertyData(9, '64')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="701.8,828.2 656.4,858.1 597.6,767.6 643,737.8" ng-class="desierto.inmovablesClassList[64]" ng-click="desierto.showPropertyData(9, '65')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="747.2,799.2 688.5,708.7 643,737.8 701.8,828.2" ng-class="desierto.inmovablesClassList[65]" ng-click="desierto.showPropertyData(9, '66')"/>
					</g>
				</g>
				<g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="736,880.8 781.1,851.6 845.7,951.3 800.2,980.4" ng-class="desierto.inmovablesClassList[66]" ng-click="desierto.showPropertyData(9, '67')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="800.2,980.4 754.9,1009.9 690.6,910.4 736,880.8" ng-class="desierto.inmovablesClassList[67]" ng-click="desierto.showPropertyData(9, '68')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="709.7,1039.2 754.9,1009.9 690.6,910.4 645.4,939.9" ng-class="desierto.inmovablesClassList[68]" ng-click="desierto.showPropertyData(9, '69')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="600,969.4 645.4,939.9 709.7,1039.2 664.2,1068.4" ng-class="desierto.inmovablesClassList[69]" ng-click="desierto.showPropertyData(9, '70')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="600,969.4 664.2,1068.4 618.9,1097.9 554.7,998.7" ng-class="desierto.inmovablesClassList[70]" ng-click="desierto.showPropertyData(9, '71')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="509.3,1028.2 568.6,1119.8 582.8,1121.5 618.9,1097.9 554.7,998.7" ng-class="desierto.inmovablesClassList[71]" ng-click="desierto.showPropertyData(9, '72')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="700.8,1135.8 659.2,1071.6 709.7,1039.2 768.2,1129.8 750.4,1141.5" ng-class="desierto.inmovablesClassList[72]" ng-click="desierto.showPropertyData(9, '73')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="709.7,1039.2 754.9,1009.9 813.7,1100.4 768.2,1129.8" ng-class="desierto.inmovablesClassList[73]" ng-click="desierto.showPropertyData(9, '74')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-1" points="813.7,1100.4 858.9,1070.9 800.2,980.4 754.9,1009.9" ng-class="desierto.inmovablesClassList[74]" ng-click="desierto.showPropertyData(9, '75')"/>
					</g>
					<g class="property__wrap">
						<polygon class="property pb-sprite-2" points="904.4,1041.6 845.7,951.3 800.2,980.4 858.9,1070.9" ng-class="desierto.inmovablesClassList[75]" ng-click="desierto.showPropertyData(9, '76')"/>
					</g>
				</g>
				<g id="NUMEROLOGIA">
					<line class="st2" x1="56.5" y1="257.8" x2="103.8" y2="384.1"/>
					<line class="st2" x1="101.2" y1="238.7" x2="159.7" y2="360.4"/>
					<line class="st2" x1="190.9" y1="185.1" x2="264.3" y2="299"/>
					<line class="st2" x1="143.7" y1="216.3" x2="213.2" y2="331.7"/>
					<line class="st2" x1="73.3" y1="516.6" x2="202.4" y2="477"/>
					<line class="st2" x1="218.1" y1="528.6" x2="89.1" y2="568.2"/>
					<line class="st2" x1="104.9" y1="619.8" x2="234.1" y2="580.4"/>
					<line class="st2" x1="249.8" y1="631.9" x2="120.7" y2="671.4"/>
					<line class="st2" x1="281.5" y1="735.3" x2="152.5" y2="774.8"/>
					<line class="st2" x1="168.2" y1="826.5" x2="297.3" y2="786.9"/>
					<line class="st2" x1="313.2" y1="838.7" x2="184.1" y2="878.2"/>
					<line class="st2" x1="199.9" y1="929.7" x2="329" y2="890.2"/>
					<line class="st2" x1="344.8" y1="942" x2="215.7" y2="981.4"/>
					<line class="st2" x1="231.4" y1="1033" x2="360.5" y2="993.5"/>
					<line class="st2" x1="376.3" y1="1045" x2="247.3" y2="1084.9"/>
					<line class="st2" x1="263.1" y1="1136.4" x2="392.4" y2="1096.8"/>
					<line class="st2" x1="410.1" y1="1154.9" x2="281" y2="1194.5"/>
					<line class="st2" x1="298.8" y1="1252.6" x2="427.8" y2="1212.9"/>
					<line class="st2" x1="540.5" y1="1179.7" x2="524.5" y2="1313.9"/>
					<line class="st2" x1="578.1" y1="1320.2" x2="594.2" y2="1186.3"/>
					<line class="st2" x1="647.8" y1="1192.6" x2="631.7" y2="1326.7"/>
					<line class="st2" x1="685.3" y1="1333.1" x2="701.4" y2="1198.9"/>
					<line class="st2" x1="755" y1="1205.6" x2="739.2" y2="1339.4"/>
					<line class="st2" x1="808.6" y1="1211.9" x2="792.8" y2="1346"/>
					<line class="st2" x1="846.5" y1="1352.4" x2="862.2" y2="1218.2"/>
					<line class="st2" x1="915.8" y1="1224.9" x2="900" y2="1358.7"/>
					<line class="st2" x1="953.6" y1="1365.3" x2="969.6" y2="1231.2"/>
					<line class="st2" x1="1032.1" y1="1238.5" x2="1016" y2="1372.7"/>
					<line class="st2" x1="1194.1" y1="1373.4" x2="1307.3" y2="1299.8"/>
					<line class="st2" x1="1277.9" y1="1254.4" x2="1164.7" y2="1327.9"/>
					<line class="st2" x1="1135.3" y1="1282.6" x2="1248.6" y2="1209.2"/>
					<line class="st2" x1="1106" y1="1237.2" x2="1219.1" y2="1163.8"/>
					<line class="st2" x1="1189.9" y1="1118.5" x2="1076.5" y2="1191.9"/>
					<line class="st2" x1="1047.2" y1="1146.5" x2="1160.3" y2="1073.1"/>
					<line class="st2" x1="1131.1" y1="1027.7" x2="1017.9" y2="1101.3"/>
					<line class="st2" x1="988.5" y1="1055.9" x2="1101.6" y2="982.6"/>
					<line class="st2" x1="1072.1" y1="937.1" x2="959" y2="1010.7"/>
					<line class="st2" x1="929.6" y1="965.1" x2="1042.8" y2="891.9"/>
					<line class="st2" x1="1013.5" y1="846.5" x2="900.3" y2="919.8"/>
					<line class="st2" x1="871" y1="874.6" x2="984.2" y2="801.2"/>
					<line class="st2" x1="954.8" y1="755.9" x2="841.6" y2="829.3"/>
					<line class="st2" x1="812.3" y1="784" x2="925.4" y2="710.4"/>
					<line class="st2" x1="896.1" y1="665.1" x2="782.8" y2="738.4"/>
					<line class="st2" x1="753.4" y1="693.2" x2="866.6" y2="619.8"/>
					<line class="st2" x1="837.2" y1="574.4" x2="724.2" y2="647.9"/>
					<line class="st2" x1="694.6" y1="602.5" x2="807.9" y2="529.2"/>
					<line class="st2" x1="778.4" y1="483.7" x2="665.3" y2="557.2"/>
					<line class="st2" x1="636" y1="511.8" x2="749.1" y2="438.5"/>
					<line class="st2" x1="719.8" y1="393.1" x2="606.6" y2="466.6"/>
					<line class="st2" x1="410.6" y1="296.4" x2="523.4" y2="222.9"/>
					<line class="st2" x1="493.8" y1="178" x2="380.6" y2="251"/>
					<line class="st2" x1="351.4" y1="205.6" x2="464.8" y2="132.2"/>
					<line class="st3" x1="435.3" y1="87.1" x2="322.1" y2="160.5"/>
					<line class="st2" x1="688.5" y1="708.7" x2="396.9" y2="897.3"/>
					<line class="st2" x1="397.3" y1="756.1" x2="520.6" y2="946.2"/>
					<line class="st2" x1="475.1" y1="975.4" x2="416.3" y2="884.5"/>
					<line class="st2" x1="442.8" y1="726.8" x2="565.8" y2="916.7"/>
					<line class="st2" x1="611.2" y1="887.2" x2="488.1" y2="697.3"/>
					<line class="st2" x1="533.7" y1="668" x2="656.4" y2="858.1"/>
					<line class="st2" x1="701.8" y1="828.2" x2="578.8" y2="638.7"/>
					<line class="st2" x1="509.3" y1="1028.2" x2="568.6" y2="1119.8"/>
					<line class="st2" x1="582.8" y1="1121.5" x2="845.7" y2="951.3"/>
					<line class="st2" x1="554.7" y1="998.7" x2="618.9" y2="1097.9"/>
					<line class="st2" x1="600" y1="969.4" x2="664.2" y2="1068.4"/>
					<line class="st2" x1="736" y1="880.8" x2="858.9" y2="1070.9"/>
					<line class="st2" x1="813.7" y1="1100.4" x2="690.6" y2="910.4"/>
					<polyline class="st2" points="768.2,1129.8 709.7,1039.2 645.4,939.9"/>
					<line class="st2" x1="659.2" y1="1071.6" x2="700.8" y2="1135.8"/>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 772.5656 995.759)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 711.7595 907.6457)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 719.6336 946.6025)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 728.2162 931.0328)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 744.7938 936.282)" class="st8 futura-med st10">68</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 724.3503 1024.9279)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 663.5334 936.8146)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 671.4188 975.7604)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 680.0004 960.2008)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 696.5776 965.4496)" class="st8 futura-med st10">69</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 680.2211 1054.9279)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 619.4147 966.8137)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 627.2879 1005.7592)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 635.8705 990.2008)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 652.449 995.4487)" class="st8 futura-med st10">70</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 634.8735 1084.361)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 574.0671 996.2585)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 581.9412 1035.2041)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 590.5219 1019.6344)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 607.1014 1024.8843)" class="st8 futura-med st10">71</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 590.7997 1113.0431)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 529.9924 1024.9283)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 537.866 1063.8743)" class="st4 futur-book st6">16.20</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 546.4487 1048.3168)" class="st4 futur-book st7">138.98m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 563.0266 1053.5527)" class="st8 futura-med st10">72</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 534.7433 933.7565)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 491.7547 892.3732)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 502.0873 874.9982)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 518.6647 880.2475)" class="st8 futura-med st10">62</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 579.9579 904.8654)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 536.9695 863.4819)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 547.3012 846.118)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 563.8796 851.3561)" class="st8 futura-med st10">63</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 623.6225 875.154)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 580.6326 833.7702)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 590.9662 816.4071)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 607.5431 821.6449)" class="st8 futura-med st10">64</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 668.9697 847.4919)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 625.9813 806.1083)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 636.3139 788.7443)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 652.8909 793.9827)" class="st8 futura-med st10">65</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 827.1713 1086.9425)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 784.1834 1045.5591)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 789.643 1027.9508)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 806.2206 1033.2004)" class="st8 futura-med st10">75</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 782.3776 1116.2106)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 739.3895 1074.8259)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 744.8598 1057.2191)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 761.4373 1062.4679)" class="st8 futura-med st10">74</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 749.0341 1139.5109)" class="st4 futur-book st6">3.22</text>
					<text transform="matrix(0.9962 8.663759e-02 -8.663759e-02 0.9962 714.196 1136.3756)" class="st4 futur-book st11">7.37</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 679.1258 1096.8303)" class="st4 futur-book st6">11.28</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 693.642 1083.3539)" class="st4 futur-book st7">128.81m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 710.2208 1088.6019)" class="st8 futura-med st10">73</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 657.5197 724.5056)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 596.7023 636.402)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 604.5858 675.3469)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 641.7401 655.0168)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 613.1577 659.7887)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 629.7362 665.0275)" class="st8 futura-med st10">55</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 614.2766 753.8957)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 553.4702 665.7814)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 561.3426 704.7265)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 571.6752 687.3636)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 588.2523 692.6129)" class="st8 futura-med st10">56</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 570.956 781.946)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 510.1374 693.8307)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 518.0223 732.777)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 528.3549 715.4139)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 544.92 720.6613)" class="st8 futura-med st10">57</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 523.7922 812.7204)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 462.9741 724.6057)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 470.8582 763.5507)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 481.1899 746.1869)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 497.7678 751.425)" class="st8 futura-med st10">58</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 477.9455 840.6818)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 417.1393 752.5778)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 425.0125 791.5236)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 435.3432 774.1595)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 451.9222 779.3984)" class="st8 futura-med st10">59</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 487.7128 963.6349)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 436.8398 883.2946)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 444.7244 922.2409)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 455.0561 904.8763)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 471.6357 910.1258)" class="st8 futura-med st10">61</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 415.9543 881.9099)" class="st4 futur-book st6">11.45</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 372.954 783.197)" class="st4 futur-book st6">6.46</text>
					<text transform="matrix(0.2949 0.9555 -0.9555 0.2949 377.2186 826.0206)" class="st4 futur-book st7">18.20</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 391.1713 804.7789)" class="st4 futur-book st7">156.66m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 407.7389 810.0286)" class="st8 futura-med st10">60</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 181.1553 443.1952)" class="st4 futur-book st7">9.10</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 67.6816 480.5704)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 115.0004 457.6586)" class="st4 futur-book st7">20.06</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 128.3334 496.7394)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 115.7321 486.3403)" class="st4 futur-book st12">164.79m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 125.5211 471.9883)" class="st8 futura-med st13">10</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 196.5928 495.5418)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 83.1172 532.9054)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 143.7701 549.0852)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 131.158 536.4165)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 140.9585 522.0531)" class="st8 futura-med st13">11</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 211.4306 545.7731)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 97.957 583.1359)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 158.6095 599.316)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 146.0078 586.6479)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 155.7966 572.2849)" class="st8 futura-med st13">12</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 227.9756 597.9423)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 114.501 635.3175)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 175.1544 651.4849)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 162.5518 638.8274)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 172.3414 624.4651)" class="st8 futura-med st13">13</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 243.9101 648.0394)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 130.4375 685.4154)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 191.089 701.5835)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 178.4761 688.925)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 188.2769 674.5626)" class="st8 futura-med st13">14</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 260.5645 699.6666)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 147.1025 737.0309)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 207.7442 753.21)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 195.1423 740.541)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 204.9435 726.1907)" class="st8 futura-med st13">15</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 275.1494 754.118)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 161.6758 791.4808)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 222.3285 807.6598)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 209.7266 794.9911)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 219.5162 780.6288)" class="st8 futura-med st13">16</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 291.0625 805.5433)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 177.5996 842.9067)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 238.2416 859.087)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 225.6399 846.4178)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 235.429 832.0557)" class="st8 futura-med st13">17</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 307.8838 854.9774)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 194.4219 892.353)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 255.0736 908.5321)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 242.4614 895.8627)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 252.2612 881.5005)" class="st8 futura-med st13">18</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 323.167 906.3384)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 209.6914 943.7015)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 270.3446 959.8815)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 257.7322 947.2118)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 267.5329 932.8494)" class="st8 futura-med st13">19</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 340.3525 957.9763)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 226.8896 995.3386)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 287.5426 1011.5187)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 274.93 998.8499)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 284.7299 984.4989)" class="st8 futura-med st13">20</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1277.1351 1276.4038)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1175.8304 1339.7134)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1238.4109 1340.9772)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1216.2185 1307.1134)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1224.7781 1334.509)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1230.8812 1318.2311)" class="st8 futura-med st13">35</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1246.9926 1231.2117)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1145.6888 1294.5215)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1186.075 1261.9196)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1196.4185 1291.6101)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1202.5204 1275.3306)" class="st8 futura-med st13">36</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1219.2523 1185.7427)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1117.9496 1249.0625)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1158.3352 1216.4625)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1168.6781 1246.1405)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1174.7811 1229.8628)" class="st8 futura-med st13">37</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1189.8402 1142.0784)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1088.5365 1205.3877)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1128.9226 1172.7863)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1139.2661 1202.4768)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1145.3688 1186.1971)" class="st8 futura-med st13">38</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1160.9144 1095.0024)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1059.6117 1158.3123)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1099.9978 1125.7111)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1110.3414 1155.401)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1116.444 1139.1227)" class="st8 futura-med st13">39</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1131.5023 1049.7219)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1030.1996 1113.0305)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1070.5857 1080.4415)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1080.929 1110.1205)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1087.0315 1093.8423)" class="st8 futura-med st13">40</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1101.9359 1004.6508)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1000.6322 1067.9602)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1041.0186 1035.3712)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1051.3617 1065.049)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1057.4647 1048.7719)" class="st8 futura-med st13">41</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1072.5238 959.1935)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 971.2201 1022.5126)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 1011.6061 989.9127)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 1021.9493 1019.5906)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 1028.0519 1003.3127)" class="st8 futura-med st13">42</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1043.9203 913.7346)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 942.6263 977.0441)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 983.0021 944.444)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 993.3464 974.1221)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 999.4484 957.8435)" class="st8 futura-med st13">43</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 1014.5072 868.2316)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 913.2025 931.5527)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 953.5903 898.9518)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 963.9338 928.63)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 970.0361 912.3525)" class="st8 futura-med st13">44</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 984.851 822.7741)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 883.5472 886.0825)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 923.9233 853.4825)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 934.2668 883.1722)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 940.3689 866.8939)" class="st8 futura-med st13">45</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 958.7836 777.9804)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 857.4808 841.289)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 897.8552 808.6891)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 908.2103 838.3779)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 914.3005 822.0997)" class="st8 futura-med st13">46</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 925.9047 736.1762)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 824.601 799.496)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 864.9772 766.8854)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 875.3314 796.5738)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 881.4229 780.2963)" class="st8 futura-med st13">47</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 896.4926 687.2966)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 795.1888 750.6057)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 835.5759 718.0055)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 845.9193 747.694)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 852.0215 731.4161)" class="st8 futura-med st13">48</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 867.7455 643.0783)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 766.4418 706.3884)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 806.8276 673.7858)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 817.1715 703.4767)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 823.2736 687.1979)" class="st8 futura-med st13">49</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 837.2924 597.1664)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 735.9877 660.486)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 776.3752 627.8854)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 786.7186 657.5642)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 792.8209 641.2854)" class="st8 futura-med st13">50</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 808.2572 552.4055)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 706.9525 615.715)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 747.3393 583.1134)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 757.6829 612.8039)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 763.7855 596.5262)" class="st8 futura-med st13">51</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 778.8451 504.0691)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 677.5414 567.3886)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 717.9272 534.7877)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 728.2706 564.4779)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 734.3729 548.1881)" class="st8 futura-med st13">52</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 750.7826 460.0717)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 649.4808 523.381)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 689.8659 490.7801)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 700.2092 520.4695)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 706.3115 504.1799)" class="st8 futura-med st13">53</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 719.5541 418.1687)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.5152 0.8571 -0.8571 0.5152 618.2513 481.4885)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.8571 -0.5152 0.5152 0.8571 658.6381 448.8878)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.8678 -0.497 0.497 0.8678 668.9811 478.5662)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.8417 -0.4821 0.497 0.8678 675.0836 462.288)" class="st8 futura-med st13">54</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 353.043 1009.624)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 239.581 1046.9883)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 300.233 1063.1672)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 287.62 1050.498)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 297.4206 1036.1367)" class="st8 futura-med st13">21</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 370.5518 1061.1842)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 257.0771 1098.5482)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 317.7296 1114.7273)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 305.1282 1102.0582)" class="st4 futur-book st12">160.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 314.9171 1087.6952)" class="st8 futura-med st13">22</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 545.0312 1311.4639)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 554.8526 1191.2012)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 576.783 1241.8766)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 536.3846 1237.7018)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 552.6411 1230.6154)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 562.2297 1245.1091)" class="st8 futura-med st15">26</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 598.6169 1318.4069)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 608.4395 1198.1448)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 630.367 1248.8195)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 600.8326 1236.9501)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 610.4218 1251.4551)" class="st8 futura-med st15">27</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 651.4396 1324.9075)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 661.262 1204.6454)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 683.1912 1255.3202)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 653.6551 1243.4613)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 663.245 1257.9553)" class="st8 futura-med st15">28</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 705.0594 1330.09)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 714.8818 1209.8386)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 736.8221 1260.5031)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 707.2742 1248.644)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 716.8644 1263.1375)" class="st8 futura-med st15">29</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 758.7996 1338.1737)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 768.634 1217.9117)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 790.5506 1268.5865)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 761.0164 1256.7275)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 770.6168 1271.2212)" class="st8 futura-med st15">30</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 812.42 1344.5302)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 822.2425 1224.2681)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 844.1717 1274.9432)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 814.6349 1263.0732)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 824.2269 1277.5779)" class="st8 futura-med st15">31</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 866.0287 1351.0085)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 875.8514 1230.746)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 897.7908 1281.4213)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 868.2437 1269.5623)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 877.8448 1284.0564)" class="st8 futura-med st15">32</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 919.7037 1354.3196)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 929.5262 1234.0575)" class="st4 futur-book st7">8.00</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 951.4549 1284.7321)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 921.918 1272.8625)" class="st4 futur-book st14">160.00m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 931.4994 1287.3672)" class="st8 futura-med st15">33</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 979.9789 1364.8177)" class="st4 futur-book st7">9.31</text>
					<text transform="matrix(0.9962 8.680800e-02 -8.680800e-02 0.9962 989.8016 1244.5664)" class="st4 futur-book st7">9.31</text>
					<text transform="matrix(-0.1129 0.9936 -0.9936 -0.1129 1011.7303 1295.2413)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(-0.108 0.9942 -0.9942 -0.108 982.1962 1283.3712)" class="st4 futur-book st14">186.10m2</text>
					<text transform="matrix(-0.1104 0.9738 -0.9939 -0.1104 991.787 1297.8663)" class="st8 futura-med st15">34</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 387.0732 1119.3885)" class="st4 futur-book st7">9.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 273.6113 1156.7622)" class="st4 futur-book st7">9.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 334.2633 1172.9436)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 321.6508 1160.2739)" class="st4 futur-book st12">180.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 331.4503 1145.9108)" class="st8 futura-med st13">23</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 406.5977 1178.7008)" class="st4 futur-book st7">9.00</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 293.1338 1216.0634)" class="st4 futur-book st7">9.00</text>
					<text transform="matrix(0.9551 -0.2962 0.2962 0.9551 353.7755 1232.2439)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 341.174 1219.5736)" class="st4 futur-book st12">180.00m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 350.9741 1205.2124)" class="st8 futura-med st13">24</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 427.3604 1247.9789)" class="st4 futur-book st7">14.34</text>
					<text transform="matrix(0.9976 6.982627e-02 -6.982627e-02 0.9976 373.6096 1291.146)" class="st4 futur-book st16">21.87</text>
					<text transform="matrix(0.2962 0.9551 -0.9551 0.2962 309.7881 1264.035)" class="st4 futur-book st7">5.49</text>
					<text transform="matrix(0.9612 -0.276 0.276 0.9612 359.3561 1278.2098)" class="st4 futur-book st12">198.38m2</text>
					<text transform="matrix(0.9323 -0.2677 0.276 0.9612 369.1576 1263.8483)" class="st8 futura-med st13">25</text>
					<text transform="matrix(0.4343 0.9008 -0.9008 0.4343 80.648 315.4035)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.2847 0.9586 -0.9586 0.2847 21.0482 334.2283)" class="st4 futur-book st7">20.02</text>
					<text transform="matrix(0.9116 -0.411 0.411 0.9116 74.9675 261.7281)" class="st4 futur-book st17">7.18</text>
					<text transform="matrix(0.9547 -0.2977 0.2977 0.9547 28.2468 278.361)" class="st4 futur-book st12">8.86</text>
					<text transform="matrix(0.9547 -0.2977 0.2977 0.9547 59.9955 396.8183)" class="st4 futur-book st12">10.07</text>
					<text transform="matrix(0.9207 -0.3902 0.3902 0.9207 121.4455 374.2617)" class="st4 futur-book st7">9.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 521.4446 243.8887)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 422.5989 310.9746)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 461.6455 276.1707)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 485.1882 310.0886)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 470.638 303.6769)" class="st4 futur-book st19">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 476.1202 287.1776)" class="st8 futura-med st10">01</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 491.302 197.5452)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 392.4563 264.6303)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 431.5022 229.8259)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 440.4936 257.3313)" class="st4 futur-book st19">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 445.9769 240.8324)" class="st8 futura-med st10">02</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 462.9407 152.396)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 364.0959 219.4819)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 403.1418 184.6658)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 412.1445 212.1726)" class="st4 futur-book st19">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 417.6277 195.6736)" class="st8 futura-med st10">03</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 433.2864 108.6433)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 334.4407 175.7297)" class="st4 futur-book st18">8.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 373.4863 140.9138)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8486 -0.5291 0.5291 0.8486 382.4894 168.4198)" class="st4 futur-book st19">160.00m2</text>
					<text transform="matrix(0.8231 -0.5133 0.5292 0.8485 387.9717 151.9202)" class="st8 futura-med st10">04</text>
					<text transform="matrix(0.4343 0.9008 -0.9008 0.4343 128.3111 289.4457)" class="st4 futur-book st7">20.00</text>
					<text transform="matrix(0.871 -0.4912 0.4912 0.871 119.263 241.9833)" class="st4 futur-book st11">7.18</text>
					<text transform="matrix(0.871 -0.4912 0.4912 0.871 175.009 352.3901)" class="st4 futur-book st11">9.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 223.3244 229.592)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 175.5735 262.216)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.5478 0.8366 -0.8366 0.5478 262.8694 202.3618)" class="st4 futur-book st18">20.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 216.2366 182.8274)" class="st4 futur-book st18">9.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 166.3271 215.0193)" class="st4 futur-book st18">8.31</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 229.415 319.8005)" class="st4 futur-book st18">9.00</text>
					<text transform="matrix(0.8366 -0.5478 0.5478 0.8366 277.8078 288.8269)" class="st4 futur-book st18">9.00</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 230.4547 211.3865)" class="st4 futur-book st19">180.00m2</text>
					<text transform="matrix(0.5133 0.8231 -0.8485 0.5292 246.9571 216.8683)" class="st8 futura-med st10">05</text>
					<text transform="matrix(0.5291 0.8486 -0.8486 0.5291 185.7383 243.7323)" class="st4 futur-book st19">173.14m2</text>
					<text transform="matrix(0.5133 0.8231 -0.8485 0.5292 202.229 249.2153)" class="st8 futura-med st10">06</text>
					<text transform="matrix(0.4713 0.882 -0.882 0.4713 137.2257 274.0869)" class="st4 futur-book st7">161.79m2</text>
					<text transform="matrix(0.4572 0.8555 -0.882 0.4713 153.317 280.6655)" class="st8 futura-med st10">07</text>
					<text transform="matrix(0.3978 0.9175 -0.9175 0.3978 91.9449 297.8958)" class="st4 futur-book st7">161.79m2</text>
					<text transform="matrix(0.3859 0.89 -0.9175 0.3978 107.4479 305.7583)" class="st8 futura-med st10">08</text>
					<text transform="matrix(0.3034 0.9529 -0.9529 0.3034 35.6009 317.3166)" class="st4 futur-book st20">185.32m2</text>
					<text transform="matrix(0.2943 0.9243 -0.9529 0.3034 50.2386 326.6954)" class="st8 futura-med st21">09</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 715.9125 816.8727)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 672.9236 775.4894)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 704.8387 749.7199)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 678.394 757.8817)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 694.9606 763.1188)" class="st8 futura-med st10">66</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 871.0681 1060.3644)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 828.0799 1018.9814)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 859.9949 993.2119)" class="st4 futur-book st6">16.00</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 833.5493 1001.3737)" class="st4 futur-book st7">128.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 850.1182 1006.6232)" class="st8 futura-med st10">76</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 816.5182 968.4958)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.829 -0.5593 0.5593 0.829 755.7014 880.3825)" class="st4 futur-book st6">8.00</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 763.5848 919.3264)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5593 0.829 -0.829 0.5593 800.7508 899.0073)" class="st4 futur-book st6">17.50</text>
					<text transform="matrix(0.5414 0.8408 -0.8408 0.5414 772.1567 903.7689)" class="st4 futur-book st7">140.00m2</text>
					<text transform="matrix(0.5252 0.8155 -0.8408 0.5414 788.7343 909.0173)" class="st8 futura-med st10">67</text>
					
						<rect x="374.1" y="147.8" transform="matrix(0.2057 -0.9786 0.9786 0.2057 151.8646 489.861)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="380.5,155.6 377.8,151.5 375,147.2 381.9,148.7"/>
					
						<rect x="403.9" y="191.6" transform="matrix(0.2057 -0.9786 0.9786 0.2057 132.654 553.7466)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="410.2,199.3 407.5,195.3 404.7,190.9 411.6,192.4"/>
					
						<rect x="431.8" y="236.8" transform="matrix(0.2057 -0.9786 0.9786 0.2057 110.5652 616.9051)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="438,244.5 435.3,240.4 432.5,236.1 439.5,237.6"/>
					
						<rect x="243.4" y="204.9" transform="matrix(0.2057 -0.9786 0.9786 0.2057 -7.862 407.2135)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="242.7,211.1 246.8,208.5 251.1,205.7 249.6,212.6"/>
					
						<rect x="199.6" y="234.6" transform="matrix(0.2057 -0.9786 0.9786 0.2057 -71.6477 387.9469)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="198.9,240.9 203,238.2 207.3,235.4 205.9,242.3"/>
					
						<rect x="154.4" y="262.4" transform="matrix(0.2057 -0.9786 0.9786 0.2057 -134.7996 365.8426)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="153.8,268.7 157.9,266 162.2,263.2 160.7,270.1"/>
					
						<rect x="110.6" y="466" transform="matrix(0.4769 -0.879 0.879 0.4769 -353.066 345.9478)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="115.5,474.3 114.1,469.6 112.6,464.7 118.9,468.1"/>
					
						<rect x="127.4" y="516.1" transform="matrix(0.4769 -0.879 0.879 0.4769 -388.2848 386.9301)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="132.3,524.4 130.9,519.7 129.4,514.8 135.7,518.2"/>
					
						<rect x="144.1" y="565.7" transform="matrix(0.4769 -0.879 0.879 0.4769 -423.1372 427.6189)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="149.1,574 147.7,569.4 146.2,564.4 152.4,567.8"/>
					
						<rect x="159.5" y="617.5" transform="matrix(0.4769 -0.879 0.879 0.4769 -460.6375 468.2004)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="164.4,625.9 163,621.2 161.6,616.3 167.8,619.7"/>
					
						<rect x="175.7" y="667.5" transform="matrix(0.4769 -0.879 0.879 0.4769 -496.0861 508.6011)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="180.6,675.9 179.2,671.2 177.8,666.3 184,669.6"/>
					
						<rect x="192.2" y="719.1" transform="matrix(0.4769 -0.879 0.879 0.4769 -532.8271 550.0844)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="197.1,727.4 195.7,722.7 194.2,717.8 200.4,721.2"/>
					
						<rect x="207.5" y="773.8" transform="matrix(0.4769 -0.879 0.879 0.4769 -572.8765 592.1241)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="212.3,782.1 210.9,777.4 209.5,772.5 215.7,775.9"/>
					
						<rect x="356.2" y="1257.5" transform="matrix(0.4769 -0.879 0.879 0.4769 -920.2686 975.864)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="361,1265.8 359.6,1261.1 358.1,1256.2 364.4,1259.6"/>
					
						<rect x="706.2" y="1073.2" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -496.1991 1533.8689)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="705.5,1079.4 709.6,1076.8 714,1074.1 712.4,1081"/>
					
						<rect x="559.2" y="1039.1" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -577.7408 1363.8335)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="558.5,1045.3 562.7,1042.7 567,1039.9 565.5,1046.9"/>
					
						<rect x="846.4" y="993.4" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -308.8073 1608.2866)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="845.6,999.6 849.8,997 854.1,994.2 852.5,1001.2"/>
					
						<rect x="785.5" y="894.5" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -259.8268 1471.5618)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="784.7,900.7 788.8,898.1 793.2,895.3 791.6,902.2"/>
					
						<rect x="690.5" y="749.3" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -192.3682 1265.3934)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="689.7,755.5 693.8,752.9 698.2,750.1 696.6,757"/>
					
						<rect x="467.4" y="896.1" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -509.918 1162.3684)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="466.7,902.2 470.8,899.6 475.1,896.9 473.6,903.8"/>
					
						<rect x="403.9" y="797.1" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -462.9161 1023.1285)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="403.3,803.3 407.4,800.6 411.7,797.9 410.2,804.8"/>
					
						<rect x="448.7" y="765.6" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -397.243 1042.2653)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="448,771.9 452.1,769.2 456.5,766.5 454.9,773.4"/>
					
						<rect x="495.1" y="737.3" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -333.2922 1065.4064)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="494.4,743.5 498.5,740.9 502.8,738.2 501.3,745.1"/>
					
						<rect x="540.3" y="707.1" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -268.4649 1085.9355)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="539.6,713.3 543.7,710.7 548.1,707.9 546.5,714.8"/>
					
						<rect x="584.8" y="677.8" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -205.1417 1106.413)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="584.1,684 588.3,681.4 592.6,678.6 591,685.5"/>
					
						<rect x="626" y="651.1" transform="matrix(0.2187 -0.9758 0.9758 0.2187 -146.984 1125.7817)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="625.2,657.3 629.4,654.7 633.7,651.9 632.2,658.8"/>
					
						<rect x="565.8" y="1233.1" transform="matrix(0.788 -0.6157 0.6157 0.788 -640.6855 612.6961)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="574.3,1237.2 569.4,1236.6 564.4,1235.9 569.9,1231.6"/>
					
						<rect x="995.8" y="1285.1" transform="matrix(0.788 -0.6157 0.6157 0.788 -581.5142 888.4749)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="1004.3,1289.1 999.4,1288.5 994.3,1287.9 999.9,1283.5"/>
					
						<rect x="1217.2" y="1313.4" transform="matrix(0.2141 -0.9768 0.9768 0.2141 -327.0435 2227.3926)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="1223.5,1321.1 1220.8,1317 1218.1,1312.6 1225,1314.2"/>
					
						<rect x="462.9" y="283" transform="matrix(0.2057 -0.9786 0.9786 0.2057 90.122 684.057)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="469.2,290.7 466.5,286.6 463.7,282.3 470.6,283.8"/>
					
						<rect x="659.7" y="457.3" transform="matrix(0.2141 -0.9768 0.9768 0.2141 71.0929 1009.9826)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="665.9,464.9 663.3,460.8 660.5,456.5 667.4,458"/>
					
						<rect x="691.1" y="500.1" transform="matrix(0.2141 -0.9768 0.9768 0.2141 53.9906 1074.3553)" class="st22" width="7.1" height="7.1"/>
					<polygon class="st22" points="697.4,507.8 694.8,503.6 692,499.3 698.9,500.8"/>
				</g>

			</g>
		</svg>

	</div>

</body>
</html>