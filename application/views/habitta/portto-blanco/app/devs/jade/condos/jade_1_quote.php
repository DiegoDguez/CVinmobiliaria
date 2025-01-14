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

<body ng-controller="PBBJadeQuoteCtrl as jade">

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
										+52 1 442 291 2223
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
									+52 1 442 291 2223
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


	<div class="modal-dialog" ng-class="jade.dialogDisplay">
		<div class="backdrop-dialog" ng-click="jade.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="jade.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{jade.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{jade.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{jade.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{jade.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{jade.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{jade.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{jade.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{jade.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{jade.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{jade.month}} y paga la primera mensualidad hasta {{jade.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{jade.month + ' ' + jade.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 291 2223
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
					<h1 class="center-align">Jade 1</h1>
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

        <div class="">
            
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1359 1594.2" style="enable-background:new 0 0 1359 1594.2;" xml:space="preserve"><metadata><c2pa:manifest xmlns:c2pa="http://c2pa.org/manifest">AAAsaGp1bWIAAAAeanVtZGMycGEAEQAQgAAAqgA4m3EDYzJwYQAAACxCanVtYgAAAEdqdW1kYzJtYQARABCAAACqADibcQN1cm46dXVpZDpiNDNlZWI4Mi0zNzY5LTRlMDUtYWMzZS04MDRjY2IxYzFhOTkAAAABqGp1bWIAAAApanVtZGMyYXMAEQAQgAAAqgA4m3EDYzJwYS5hc3NlcnRpb25zAAAAAMpqdW1iAAAAJmp1bWRjYm9yABEAEIAAAKoAOJtxA2MycGEuYWN0aW9ucwAAAACcY2JvcqFnYWN0aW9uc4GjZmFjdGlvbmtjMnBhLmVkaXRlZG1zb2Z0d2FyZUFnZW50bUFkb2JlIEZpcmVmbHlxZGlnaXRhbFNvdXJjZVR5cGV4Rmh0dHA6Ly9jdi5pcHRjLm9yZy9uZXdzY29kZXMvZGlnaXRhbHNvdXJjZXR5cGUvdHJhaW5lZEFsZ29yaXRobWljTWVkaWEAAACtanVtYgAAAChqdW1kY2JvcgARABCAAACqADibcQNjMnBhLmhhc2guZGF0YQAAAAB9Y2JvcqVqZXhjbHVzaW9uc4GiZXN0YXJ0GQGlZmxlbmd0aBk7OGRuYW1lbmp1bWJmIG1hbmlmZXN0Y2FsZ2ZzaGEyNTZkaGFzaFgguEkpcAwZUPJyv+TNEFRzFk0BvF9cpEPImazzNEJ1FbFjcGFkSQAAAAAAAAAAAAAAAgtqdW1iAAAAJGp1bWRjMmNsABEAEIAAAKoAOJtxA2MycGEuY2xhaW0AAAAB32Nib3KoaGRjOnRpdGxlb0dlbmVyYXRlZCBJbWFnZWlkYzpmb3JtYXRtaW1hZ2Uvc3ZnK3htbGppbnN0YW5jZUlEeCx4bXA6aWlkOjExYmFlMzI3LWEyNTctNDNlMS1hYzExLTFhMTA5ZTQyYzZlMm9jbGFpbV9nZW5lcmF0b3J4NkFkb2JlX0lsbHVzdHJhdG9yLzI4LjEgYWRvYmVfYzJwYS8wLjcuNiBjMnBhLXJzLzAuMjUuMnRjbGFpbV9nZW5lcmF0b3JfaW5mb4G/ZG5hbWVxQWRvYmUgSWxsdXN0cmF0b3JndmVyc2lvbmQyOC4x/2lzaWduYXR1cmV4GXNlbGYjanVtYmY9YzJwYS5zaWduYXR1cmVqYXNzZXJ0aW9uc4KiY3VybHgnc2VsZiNqdW1iZj1j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AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD2WQEAmn9h8ZjF8TG89cocVnx2u2gLuV4jh2QSYE7qRcyV2ZvyA/8oCi0vnuYI12a1V66pe0DZYPzFrwqxhFI5fuur/IG5qMCdQ/e1WN0vVK+NKpP22gYw8OLBddtp4LQ1e3Zyue28qPhlOsNZ90+hOJs6c5OkKlkl1xzII5oh6122QQcoNOshTj55akEM4MSyLZo1y6EHz777JAYYgrBLbJ6vfXAs4TxWnvfIGxwOwXELtAWI/v6kRjKA60GKU58gwKooSSSGmEh6QCiCG7k+5cRxLdiYRpgyF0ok89IQcfhSdx/AX7yGepEMiw7kAB/jxrdl6D2b8mYiIa4muSre2zMILQ==</c2pa:manifest></metadata>
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:9.37px;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st5{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;enable-background:new    ;}
	.st6{fill:#FFBF00;}
	.st7{font-family:'CenturyGothic-Bold';}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st9{fill:none;stroke:#FFFFFF;stroke-width:1.89;stroke-linecap:round;stroke-linejoin:round;}
	.st10{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
	.st11{fill:#002856;}
	.st12{font-size:7.5px;}
	.st13{fill:none;stroke:#002856;stroke-width:5.03;stroke-linecap:round;stroke-linejoin:round;}
</style>
<g id="BASE">
	
		<image style="overflow:visible;enable-background:new;" width="920" height="1080" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/jade/jade_1.jpg"  transform="matrix(1.48 0 0 1.48 1.68 0.8)">
	</image>
</g>
<g id="CLUSTER_ETAPA_CONDO">
	<g id="ISLA_A">
		<g id="A-01" class="property__active" ng-class="jade.inmovablesClassList[0]" ng-click="jade.showPropertyData(70, '1')">
			<polyline class="property pb-sprite-1" points="930.4,1122.4 1062,1139.9 1055.3,1192.6 923.5,1176.4 930.4,1122.4 			"/>
			<text transform="matrix(0.1271 -0.9919 0.9919 0.1271 1053.92 1174.7699)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1271 -0.9919 0.9919 0.1271 1055.5592 1161.975)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9923 0.1236 -0.1236 0.9923 969.86 1162.24)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9923 0.1236 -0.1236 0.9923 980.1506 1163.5217)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1271 -0.9919 0.9919 0.1271 935.36 1159.6097)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1271 -0.9919 0.9919 0.1271 936.9991 1146.8148)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9912 0.1323 -0.1323 0.9912 983.5201 1138.9301)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9912 0.1323 -0.1323 0.9912 1001.461 1141.3239)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9923 0.1236 -0.1236 0.9923 978.1799 1179.6899)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9923 0.1236 -0.1236 0.9923 996.1413 1181.9271)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="957.3,1153.3 943.3,1151.5 951.2,1145.4 957.3,1153.3 			"/>
			<polyline class="st5" points="957.3,1153.3 949.4,1159.4 943.3,1151.5 957.3,1153.3 			"/>
			<text transform="matrix(0.9923 0.1236 -0.1236 0.9923 987.9799 1151.5601)" class="st6 st7 st3">01</text>
		</g>
		<g id="A-02" class="property__active" ng-class="jade.inmovablesClassList[1]" ng-click="jade.showPropertyData(70, '2')">
			<polyline class="property pb-sprite-2" points="937.8,1068.5 1069.3,1087.3 1062,1139.9 930.4,1122.4 937.8,1068.5 			"/>
			<text transform="matrix(0.9912 0.1323 -0.1323 0.9912 977.5499 1111.13)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9912 0.1323 -0.1323 0.9912 987.8289 1112.5015)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1374 -0.9905 0.9905 0.1374 942.5901 1105.8799)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1374 -0.9905 0.9905 0.1374 944.363 1093.1025)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9898 0.1426 -0.1426 0.9898 990.67 1086.61)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9898 0.1426 -0.1426 0.9898 1008.5848 1089.1915)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.1374 -0.9905 0.9905 0.1374 1061 1122.2197)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1374 -0.9905 0.9905 0.1374 1062.7731 1109.4424)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9912 0.1323 -0.1323 0.9912 995.23 1098.5099)" class="st6 st7 st3">02</text>
		</g>
		<g id="A-03"  class="property__active" ng-class="jade.inmovablesClassList[2]" ng-click="jade.showPropertyData(70, '3')">
			<polyline class="property pb-sprite-1" points="945.8,1014.6 1077.1,1034.7 1069.3,1087.3 937.8,1068.5 945.8,1014.6 			"/>
			<text transform="matrix(0.9898 0.1426 -0.1426 0.9898 985.83 1057.58)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9898 0.1426 -0.1426 0.9898 996.0941 1059.059)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1478 -0.989 0.989 0.1478 950.3799 1052.0704)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1478 -0.989 0.989 0.1478 952.2867 1039.3116)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9882 0.153 -0.153 0.9882 998.5299 1032.14)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9882 0.153 -0.153 0.9882 1016.4169 1034.9091)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.1478 -0.989 0.989 0.1478 1068.6099 1069.5802)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1478 -0.989 0.989 0.1478 1070.5166 1056.8214)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="972.1,1045.9 958.2,1043.9 966.1,1037.9 972.1,1045.9 			"/>
			<polyline class="st5" points="972.1,1045.9 964.1,1051.9 958.2,1043.9 972.1,1045.9 			"/>
			<text transform="matrix(0.9898 0.1426 -0.1426 0.9898 1002.9501 1045.15)" class="st6 st7 st3">03</text>
		</g>
		<g id="A-04"  class="property__active" ng-class="jade.inmovablesClassList[3]" ng-click="jade.showPropertyData(70, '4')">
			<polyline class="property pb-sprite-2" points="954.3,960.9 1085.3,982.3 1077.1,1034.7 945.8,1014.6 954.3,960.9 			"/>
			<text transform="matrix(0.9882 0.153 -0.153 0.9882 995.2999 1002.67)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9882 0.153 -0.153 0.9882 1005.548 1004.2565)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1564 -0.9877 0.9877 0.1564 958.52 998.17)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1564 -0.9877 0.9877 0.1564 960.538 985.4288)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9869 0.1616 -0.1616 0.9869 1007.0101 979.1199)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9869 0.1616 -0.1616 0.9869 1024.8722 982.045)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.1564 -0.9877 0.9877 0.1564 1076.5601 1016.84)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1564 -0.9877 0.9877 0.1564 1078.578 1004.0988)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="980.3,992.2 966.4,990.1 974.4,984.2 980.3,992.2 			"/>
			<polyline class="st5" points="980.3,992.2 972.3,998.1 966.4,990.1 980.3,992.2 			"/>
			<text transform="matrix(0.9882 0.153 -0.153 0.9882 1011.0399 991.97)" class="st6 st7 st3">04</text>
		</g>
		<g id="A-05"  class="property__active" ng-class="jade.inmovablesClassList[4]" ng-click="jade.showPropertyData(70, '5')">           
			<polyline class="property pb-sprite-1" points="963.3,907.2 1094.2,929.9 1085.3,982.3 954.3,960.9 963.3,907.2 			"/>
			<text transform="matrix(0.9869 0.1616 -0.1616 0.9869 1003.7 947.4)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9869 0.1616 -0.1616 0.9869 1013.9337 949.0757)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1668 -0.986 0.986 0.1668 967.1799 944.7198)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1668 -0.986 0.986 0.1668 969.3313 932.0001)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9851 0.1719 -0.1719 0.9851 1015.6301 926.21)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9851 0.1719 -0.1719 0.9851 1033.4604 929.3219)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="989.1,938.6 975.2,936.3 983.3,930.5 989.1,938.6 			"/>
			<polyline class="st5" points="989.1,938.6 981,944.4 975.2,936.3 989.1,938.6 			"/>
			<text transform="matrix(0.1668 -0.986 0.986 0.1668 1085.04 964.5597)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1668 -0.986 0.986 0.1668 1087.1914 951.8409)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9869 0.1616 -0.1616 0.9869 1019.96 938.7199)" class="st6 st7 st3">05</text>
		</g>
		<g id="A-06"  class="property__active" ng-class="jade.inmovablesClassList[5]" ng-click="jade.showPropertyData(70, '6')">
			<polyline class="property pb-sprite-2" points="972.9,853.6 1103.5,877.6 1094.2,929.9 963.3,907.2 972.9,853.6 			"/>
			<text transform="matrix(0.9851 0.1719 -0.1719 0.9851 1012.9299 896)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9851 0.1719 -0.1719 0.9851 1023.1455 897.783)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1771 -0.9842 0.9842 0.1771 976.4699 891.0304)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1771 -0.9842 0.9842 0.1771 978.7543 878.3341)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9833 0.1822 -0.1822 0.9833 1024.8301 872.88)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9833 0.1822 -0.1822 0.9833 1042.627 876.1785)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="998.4,885.1 984.5,882.7 992.6,877 998.4,885.1 			"/>
			<polyline class="st5" points="998.4,885.1 990.2,890.9 984.5,882.7 998.4,885.1 			"/>
			<text transform="matrix(0.1771 -0.9842 0.9842 0.1771 1094.13 912.0304)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1771 -0.9842 0.9842 0.1771 1096.4144 899.3341)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9851 0.1719 -0.1719 0.9851 1029.03 885.74)" class="st6 st7 st3">06</text>
		</g>
		<g id="A-07"  class="property__active" ng-class="jade.inmovablesClassList[6]" ng-click="jade.showPropertyData(70, '7')">
			<polyline class="property pb-sprite-1" points="983,800.2 1113.3,825.4 1103.5,877.6 972.9,853.6 983,800.2 			"/>
			<text transform="matrix(0.9833 0.1822 -0.1822 0.9833 1022.4899 844.5601)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9833 0.1822 -0.1822 0.9833 1032.6863 846.4498)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1857 -0.9826 0.9826 0.1857 985.84 837.6096)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1857 -0.9826 0.9826 0.1857 988.2352 824.9338)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9816 0.1908 -0.1908 0.9816 1035.0601 819.76)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9816 0.1908 -0.1908 0.9816 1052.8274 823.2136)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1008.2,831.7 994.3,829.2 1002.5,823.5 1008.2,831.7 			"/>
			<polyline class="st5" points="1008.2,831.7 1000,837.4 994.3,829.2 1008.2,831.7 			"/>
			<text transform="matrix(0.1857 -0.9826 0.9826 0.1857 1103.29 859.7698)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1857 -0.9826 0.9826 0.1857 1105.6851 847.094)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9833 0.1822 -0.1822 0.9833 1038.5801 832.76)" class="st6 st7 st3">07</text>
		</g>
		<g id="A-08"  class="property__active" ng-class="jade.inmovablesClassList[7]" ng-click="jade.showPropertyData(70, '8')">
			<polyline class="property pb-sprite-2" points="993.6,746.8 1123.7,773.3 1113.3,825.4 983,800.2 993.6,746.8 			"/>
			<text transform="matrix(0.9816 0.1908 -0.1908 0.9816 1032.77 791.03)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9816 0.1908 -0.1908 0.9816 1042.9495 793.0087)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.1959 -0.9806 0.9806 0.1959 996.02 784.2402)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.1959 -0.9806 0.9806 0.1959 998.5477 771.5898)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9796 0.2011 -0.2011 0.9796 1045.3599 767.85)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9796 0.2011 -0.2011 0.9796 1063.0903 771.4895)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1018.5,778.4 1004.7,775.7 1013,770.2 1018.5,778.4 			"/>
			<polyline class="st5" points="1018.5,778.4 1010.3,784 1004.7,775.7 1018.5,778.4 			"/>
			<text transform="matrix(0.1959 -0.9806 0.9806 0.1959 1113.24 807.5596)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.1959 -0.9806 0.9806 0.1959 1115.7677 794.9102)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9816 0.1908 -0.1908 0.9816 1049.1599 780.03)" class="st6 st7 st3">08</text>
		</g>
		<g id="A-09"  class="property__active" ng-class="jade.inmovablesClassList[8]" ng-click="jade.showPropertyData(70, '9')">
			<polyline class="property pb-sprite-1" points="1004.7,693.5 1134.6,721.3 1123.7,773.3 993.6,746.8 1004.7,693.5 			"/>
			<text transform="matrix(0.9796 0.2011 -0.2011 0.9796 1044.2 737.9099)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9796 0.2011 -0.2011 0.9796 1054.3582 739.9951)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2062 -0.9785 0.9785 0.2062 1007.0901 730.9199)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2062 -0.9785 0.9785 0.2062 1009.7501 718.2968)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 1055.8002 716.09)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 1073.4979 719.8841)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2062 -0.9785 0.9785 0.2062 1124.08 755.3896)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2062 -0.9785 0.9785 0.2062 1126.74 742.7675)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1029.4,725.2 1015.6,722.4 1023.9,716.9 1029.4,725.2 			"/>
			<polyline class="st5" points="1029.4,725.2 1021.1,730.7 1015.6,722.4 1029.4,725.2 			"/>
			<text transform="matrix(0.9796 0.2011 -0.2011 0.9796 1060.03 727.38)" class="st6 st7 st3">09</text>
		</g>
		<g id="A-10"  class="property__active" ng-class="jade.inmovablesClassList[9]" ng-click="jade.showPropertyData(70, '10')"> 
			<polyline class="property pb-sprite-2" points="1016.4,640.3 1146,669.5 1134.6,721.3 1004.7,693.5 1016.4,640.3 			"/>
			<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 1055.4801 685.5099)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 1065.6198 687.6838)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2147 -0.9767 0.9767 0.2147 1018.16 677.9304)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2147 -0.9767 0.9767 0.2147 1020.9301 665.3307)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9755 0.2198 -0.2198 0.9755 1067.4598 662.1099)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9755 0.2198 -0.2198 0.9755 1085.1171 666.0891)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2147 -0.9767 0.9767 0.2147 1134.9 703.5602)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2147 -0.9767 0.9767 0.2147 1137.6702 690.9606)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1040.8,672.1 1027,669.2 1035.4,663.7 1040.8,672.1 			"/>
			<polyline class="st5" points="1040.8,672.1 1032.4,677.5 1027,669.2 1040.8,672.1 			"/>
			<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 1071.12 674.55)" class="st6 st7 st3">10</text>
		</g>
		<g id="A-11"  class="property__active" ng-class="jade.inmovablesClassList[10]" ng-click="jade.showPropertyData(70, '11')"> 
			<polyline class="property pb-sprite-1" points="1028.6,587.3 1157.9,617.7 1146,669.5 1016.4,640.3 1028.6,587.3 			"/>
			<text transform="matrix(0.9755 0.2198 -0.2198 0.9755 1065.2198 630.5898)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9755 0.2198 -0.2198 0.9755 1075.3363 632.8696)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.225 -0.9744 0.9744 0.225 1030.14 624.8)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.225 -0.9744 0.9744 0.225 1033.0419 612.2307)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9732 0.23 -0.23 0.9732 1079.8599 608.8101)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9732 0.23 -0.23 0.9732 1097.4744 612.9739)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1052.7,619.1 1039,616 1047.4,610.7 1052.7,619.1 			"/>
			<polyline class="st5" points="1052.7,619.1 1044.3,624.5 1039,616 1052.7,619.1 			"/>
			<text transform="matrix(0.225 -0.9744 0.9744 0.225 1146.62 651.5803)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.225 -0.9744 0.9744 0.225 1149.5219 639.0109)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9755 0.2198 -0.2198 0.9755 1082.89 622.1001)" class="st6 st7 st3">11</text>
		</g>
		<g id="A-12"  class="property__active" ng-class="jade.inmovablesClassList[11]" ng-click="jade.showPropertyData(70, '12')"> 
			<polyline class="property pb-sprite-2" points="1170.3,566 1157.9,617.7 1028.6,587.3 1041.3,534.4 1170.3,566 			"/>
			<text transform="matrix(0.9732 0.23 -0.23 0.9732 1077.8 578.4299)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9732 0.23 -0.23 0.9732 1087.8918 580.8154)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2351 -0.972 0.972 0.2351 1042.47 571.8499)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2351 -0.972 0.972 0.2351 1045.5033 559.3118)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9711 0.2385 -0.2385 0.9711 1092.1799 556.3598)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9711 0.2385 -0.2385 0.9711 1109.7576 560.6774)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2351 -0.972 0.972 0.2351 1158.6801 599.7698)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2351 -0.972 0.972 0.2351 1161.7134 587.2317)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9732 0.23 -0.23 0.9732 1095.5 569.74)" class="st6 st7 st3">12</text>
		</g>
		<g id="A-13"  class="property__active" ng-class="jade.inmovablesClassList[12]" ng-click="jade.showPropertyData(70, '13')"> 
			<polyline class="property pb-sprite-1" points="1054.6,481.6 1183.2,514.5 1170.3,566 1041.3,534.4 1054.6,481.6 			"/>
			<text transform="matrix(0.9711 0.2385 -0.2385 0.9711 1089.96 527.3701)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9711 0.2385 -0.2385 0.9711 1100.0305 529.8437)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2436 -0.9699 0.9699 0.2436 1055.22 519.2397)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2436 -0.9699 0.9699 0.2436 1058.3625 506.729)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9686 0.2487 -0.2487 0.9686 1105.28 503.8501)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9686 0.2487 -0.2487 0.9686 1122.8113 508.3513)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2436 -0.9699 0.9699 0.2436 1171.14 548.3101)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2436 -0.9699 0.9699 0.2436 1174.2826 535.7983)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9711 0.2385 -0.2385 0.9711 1108.25 517.28)" class="st6 st7 st3">13</text>
		</g>
		<g id="A-14"  class="property__active" ng-class="jade.inmovablesClassList[13]" ng-click="jade.showPropertyData(70, '14')"> 
			<polyline class="property pb-sprite-2" points="1068.3,428.9 1196.6,463.1 1183.2,514.5 1054.6,481.6 1068.3,428.9 			"/>
			<text transform="matrix(0.9686 0.2487 -0.2487 0.9686 1103.95 474.1799)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9686 0.2487 -0.2487 0.9686 1113.9941 476.7588)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2538 -0.9673 0.9673 0.2538 1068.78 466.5898)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2538 -0.9673 0.9673 0.2538 1072.0535 454.1123)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9659 0.2588 -0.2588 0.9659 1118.7799 452.8399)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9659 0.2588 -0.2588 0.9659 1136.2633 457.5247)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2538 -0.9673 0.9673 0.2538 1184.42 496.8096)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2538 -0.9673 0.9673 0.2538 1187.6935 484.332)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9686 0.2487 -0.2487 0.9686 1121.6501 465.26)" class="st6 st7 st3">14</text>
		</g>
		<g id="A-15"  class="property__active" ng-class="jade.inmovablesClassList[14]" ng-click="jade.showPropertyData(70, '15')"> 
			<polyline class="property pb-sprite-1" points="1082.6,376.4 1210.6,411.9 1196.6,463.1 1068.3,428.9 1082.6,376.4 			"/>
			<text transform="matrix(0.9659 0.2588 -0.2588 0.9659 1117.9899 421.25)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9659 0.2588 -0.2588 0.9659 1128.0067 423.9339)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2639 -0.9646 0.9646 0.2639 1082.77 413.9402)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2639 -0.9646 0.9646 0.2639 1086.174 401.4969)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9636 0.2672 -0.2672 0.9636 1132.95 399.7199)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9636 0.2672 -0.2672 0.9636 1150.3916 404.5571)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2639 -0.9646 0.9646 0.2639 1198.1 445.2996)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2639 -0.9646 0.9646 0.2639 1201.5039 432.8572)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9659 0.2588 -0.2588 0.9659 1135.7999 413.45)" class="st6 st7 st3">15</text>
		</g>
		<g id="A-16"  class="property__active" ng-class="jade.inmovablesClassList[15]" ng-click="jade.showPropertyData(70, '16')"> 
			<polyline class="property pb-sprite-2" points="1225,360.8 1210.6,411.9 1082.6,376.4 1097.4,324 1225,360.8 			"/>
			<text transform="matrix(0.9636 0.2672 -0.2672 0.9636 1131.28 369.4299)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9636 0.2672 -0.2672 0.9636 1141.2729 372.2011)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2723 -0.9622 0.9622 0.2723 1097.13 361.6304)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2723 -0.9622 0.9622 0.2723 1100.6423 349.2173)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9608 0.2773 -0.2773 0.9608 1147.26 348.9199)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9608 0.2773 -0.2773 0.9608 1164.6501 353.9394)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2723 -0.9622 0.9622 0.2723 1212.15 394.1304)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2723 -0.9622 0.9622 0.2723 1215.6624 381.7173)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9636 0.2672 -0.2672 0.9636 1150.0701 361.52)" class="st6 st7 st3">16</text>
		</g>
		<g id="A-17"  class="property__active" ng-class="jade.inmovablesClassList[16]" ng-click="jade.showPropertyData(70, '17')"> 
			<polyline class="property pb-sprite-1" points="1240,309.8 1225,360.8 1097.4,324 1112.7,271.8 1240,309.8 			"/>
			<text transform="matrix(0.9608 0.2773 -0.2773 0.9608 1146.3899 319.3901)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9608 0.2773 -0.2773 0.9608 1156.3533 322.2658)" class="st1 st2 st3">1.97 m2</text>
			<text transform="matrix(0.2823 -0.9593 0.9593 0.2823 1111.9 309.2502)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.2823 -0.9593 0.9593 0.2823 1115.5422 296.8752)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9578 0.2874 -0.2874 0.9578 1162.4399 296.4099)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9578 0.2874 -0.2874 0.9578 1179.7766 301.6111)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.2823 -0.9593 0.9593 0.2823 1226.58 342.88)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2823 -0.9593 0.9593 0.2823 1230.2222 330.505)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9608 0.2773 -0.2773 0.9608 1165.02 309.9399)" class="st6 st7 st3">17</text>
		</g>
		<g id="A-18"  class="property__active" ng-class="jade.inmovablesClassList[17]" ng-click="jade.showPropertyData(70, '18')"> 
			<polyline class="property pb-sprite-2" points="1112.7,271.8 1128.1,221.2 1128.2,221 1266,225.2 1255,260.4 1240,309.8 1112.7,271.8 			"/>
			<text transform="matrix(0.9578 0.2874 -0.2874 0.9578 1161.7 268.8599)" class="st1 st2 st3">21</text>
			<text transform="matrix(0.9578 0.2874 -0.2874 0.9578 1171.6326 271.8399)" class="st1 st2 st3">3.28 m2</text>
			<text transform="matrix(0.2924 -0.9563 0.9563 0.2924 1127.15 257.7603)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.2924 -0.9563 0.9563 0.2924 1130.9216 245.4234)" class="st1 st2 st3">0</text>
			<polyline class="st4" points="1149.5,256.1 1136,252 1144.8,247.3 1149.5,256.1 			"/>
			<polyline class="st5" points="1149.5,256.1 1140.7,260.8 1136,252 1149.5,256.1 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1185.26 232.77)" class="st1 st2 st3">20.7</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1203.3511 233.3385)" class="st1 st2 st3">7</text>
			<text transform="matrix(0.294 -0.9558 0.9558 0.294 1246.11 277.5197)" class="st1 st2 st3">13.3</text>
			<text transform="matrix(0.294 -0.9558 0.9558 0.294 1251.4321 260.2199)" class="st1 st2 st3">3</text>
			<text transform="matrix(0.9578 0.2874 -0.2874 0.9578 1179.99 259.5701)" class="st6 st7 st3">18</text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_A">
			<line class="st9" x1="1123.7" y1="773.3" x2="993.6" y2="746.8"/>
			<line class="st9" x1="1113.3" y1="825.4" x2="983" y2="800.2"/>
			<line class="st9" x1="1103.5" y1="877.6" x2="972.9" y2="853.6"/>
			<line class="st9" x1="1094.2" y1="929.9" x2="963.3" y2="907.2"/>
			<line class="st9" x1="1085.3" y1="982.3" x2="954.3" y2="960.9"/>
			<line class="st9" x1="1077.1" y1="1034.7" x2="945.8" y2="1014.6"/>
			<line class="st9" x1="1069.3" y1="1087.3" x2="937.8" y2="1068.5"/>
			<line class="st9" x1="1062" y1="1139.9" x2="930.4" y2="1122.4"/>
			<line class="st9" x1="1170.3" y1="566" x2="1041.3" y2="534.4"/>
			<line class="st9" x1="1157.9" y1="617.7" x2="1028.6" y2="587.3"/>
			<line class="st9" x1="1146" y1="669.5" x2="1016.4" y2="640.3"/>
			<line class="st9" x1="1134.6" y1="721.3" x2="1004.7" y2="693.5"/>
			<line class="st9" x1="1240" y1="309.8" x2="1112.7" y2="271.8"/>
			<line class="st9" x1="1225" y1="360.8" x2="1097.4" y2="324"/>
			<line class="st9" x1="1210.6" y1="411.9" x2="1082.6" y2="376.4"/>
			<line class="st9" x1="1196.6" y1="463.1" x2="1068.3" y2="428.9"/>
			<line class="st9" x1="1183.2" y1="514.5" x2="1054.6" y2="481.6"/>
		</g>
	</g>
	<g id="ISLA_B">
		<g id="B-19" class="property__active" ng-class="jade.inmovablesClassList[18]" ng-click="jade.showPropertyData(70, '19')">
			<polyline class="property pb-sprite-1" points="1230.1,29.5 1331,32.6 1307.9,98.2 1285.7,164 1226,162.2 1230.1,29.5 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1268.74 40.7)" class="st1 st2 st3">15.2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1286.8311 41.2685)" class="st1 st2 st3">1</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1238.09 107.8498)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(0.3256 -0.9455 0.9455 0.3256 1301.14 108.1801)" class="st1 st2 st3">20.9</text>
			<text transform="matrix(0.3256 -0.9455 0.9455 0.3256 1307.0328 91.0658)" class="st1 st2 st3">4</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1268.1801 117.8303)" class="st1 st2 st3">24</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1268.5057 107.465)" class="st1 st2 st3">1.11 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1247.08 159.5999)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1259.9735 160.0052)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1257.6899 101.0598)" class="st6 st7 st3">19</text>
			<polyline class="st4" points="1259.7,146.6 1260.1,132.5 1267,139.8 1259.7,146.6 			"/>
			<polyline class="st5" points="1259.7,146.6 1252.9,139.4 1260.1,132.5 1259.7,146.6 			"/>
		</g>
		<g id="B-20"  class="property__active" ng-class="jade.inmovablesClassList[19]" ng-click="jade.showPropertyData(70, '20')">
			<polyline class="property pb-sprite-2" points="1177,27.8 1230.1,29.5 1226,162.2 1172.9,160.6 1177,27.8 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1194.33 38.41)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1207.2235 38.8153)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1184.6801 106.2102)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1209.58 115.9904)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1209.9056 105.6252)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1190.67 157.8699)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1203.5636 158.2752)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1197.96 99.2297)" class="st6 st7 st3">20</text>
		</g>
		<g id="B-21"  class="property__active" ng-class="jade.inmovablesClassList[20]" ng-click="jade.showPropertyData(70, '21')">
			<polyline class="property pb-sprite-1" points="1123.9,26.2 1177,27.8 1172.9,160.6 1119.8,158.9 1123.9,26.2 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1141.23 36.79)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1154.1235 37.1951)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1131.59 104.5803)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1155.36 114.3703)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1155.6857 104.0051)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1137.5699 156.2401)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1150.4635 156.6451)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1144.87 97.5998)" class="st6 st7 st3">21</text>
		</g>
		<g id="B-22"  class="property__active" ng-class="jade.inmovablesClassList[21]" ng-click="jade.showPropertyData(70, '22')">
			<polyline class="property pb-sprite-2" points="1070.8,24.6 1123.9,26.2 1119.8,158.9 1066.7,157.3 1070.8,24.6 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1088.14 35.16)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1101.0336 35.5653)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1078.5 102.9504)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1103.4 112.7297)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1103.7257 102.3654)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1084.48 154.6099)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1097.3735 155.0152)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1091.78 95.9699)" class="st6 st7 st3">22</text>
		</g>
		<g id="B-23"  class="property__active" ng-class="jade.inmovablesClassList[22]" ng-click="jade.showPropertyData(70, '23')">
			<polyline class="property pb-sprite-1" points="1017.7,23 1070.8,24.6 1066.7,157.3 1013.7,155.7 1017.7,23 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1031.39 152.9901)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1044.2836 153.3951)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1035.05 33.53)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1047.9436 33.9351)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1025.41 101.3195)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1049.1801 111.1203)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1049.5057 100.7551)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1038.6801 94.3498)" class="st6 st7 st3">23</text>
		</g>
		<g id="B-24"  class="property__active" ng-class="jade.inmovablesClassList[23]" ng-click="jade.showPropertyData(70, '24')">
			<polyline class="property pb-sprite-2" points="964.6,21.3 1017.7,23 1013.7,155.7 960.6,154.1 964.6,21.3 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 978.3099 151.3599)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 991.2036 151.7652)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 981.96 31.9)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 994.8536 32.3053)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 972.32 99.7004)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 997.21 109.4797)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 997.5358 99.1154)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 985.6 92.7199)" class="st6 st7 st3">24</text>
		</g>
		<g id="B-25"  class="property__active" ng-class="jade.inmovablesClassList[24]" ng-click="jade.showPropertyData(70, '25')">
			<polyline class="property pb-sprite-1" points="911.5,19.7 964.6,21.3 960.6,154.1 907.5,152.4 911.5,19.7 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 925.21 149.7301)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 938.1036 150.1351)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 928.87 30.28)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 941.7635 30.6851)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 919.23 98.0695)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 942.99 107.8703)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 943.3157 97.5051)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 932.51 91.09)" class="st6 st7 st3">25</text>
		</g>
		<g id="B-26"  class="property__active" ng-class="jade.inmovablesClassList[25]" ng-click="jade.showPropertyData(70, '26')">
			<polyline class="property pb-sprite-2" points="858.5,18.1 911.5,19.7 907.5,152.4 854.4,150.8 858.5,18.1 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 872.12 148.1099)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 885.0135 148.5152)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 875.78 28.65)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 888.6736 29.0553)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 866.13 96.4396)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 891.03 106.2297)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 891.3558 95.8654)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 879.42 89.4602)" class="st6 st7 st3">26</text>
		</g>
		<g id="B-27"  class="property__active" ng-class="jade.inmovablesClassList[26]" ng-click="jade.showPropertyData(70, '27')">
			<polyline class="property pb-sprite-1" points="805.4,16.5 858.5,18.1 854.4,150.8 801.3,149.2 805.4,16.5 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 819.03 146.4801)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 831.9236 146.8851)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 822.6899 27.02)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 835.5836 27.4251)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 813.04 94.8098)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 836.81 104.5998)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 837.1357 94.2355)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 826.33 87.84)" class="st6 st7 st3">27</text>
		</g>
		<g id="B-28"  class="property__active" ng-class="jade.inmovablesClassList[27]" ng-click="jade.showPropertyData(70, '28')">
			<polyline class="property pb-sprite-2" points="752.3,14.8 805.4,16.5 801.3,149.2 748.2,147.6 752.3,14.8 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 765.9399 144.8499)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 778.8336 145.2552)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 769.6 25.4)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 782.4935 25.8053)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 759.95 93.1896)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 784.85 102.9699)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 785.1757 92.6047)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 773.23 86.2102)" class="st6 st7 st3">28</text>
		</g>
		<g id="B-29"  class="property__active" ng-class="jade.inmovablesClassList[28]" ng-click="jade.showPropertyData(70, '29')">
			<polyline class="property pb-sprite-1" points="699.2,13.2 752.3,14.8 748.2,147.6 695.1,145.9 699.2,13.2 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 712.85 143.22)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 725.7436 143.6252)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 716.51 23.77)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 729.4036 24.1751)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 706.86 91.5598)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 707.4285 73.4689)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 730.63 101.3596)" class="st1 st2 st3">16</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 730.9557 90.9953)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 719.63 84.4299)" class="st6 st7 st3">29</text>
		</g>
		<g id="B-30"  class="property__active" ng-class="jade.inmovablesClassList[29]" ng-click="jade.showPropertyData(70, '30')">
			<polyline class="property pb-sprite-2" points="635.4,144.1 639.5,8.8 679.6,12.6 699.2,13.2 695.1,145.9 635.4,144.1 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 656.44 141.4901)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 669.3336 141.8951)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 680.18 22.65)" class="st1 st2 st3">2.9</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 693.0736 23.0553)" class="st1 st2 st3">5</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 647.16 88.6398)" class="st1 st2 st3">20.3</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 647.7285 70.549)" class="st1 st2 st3">3</text>
			<text transform="matrix(0.9954 9.584575e-02 -9.584575e-02 0.9954 649.69 19.9299)" class="st1 st2 st3">6.0</text>
			<text transform="matrix(0.9954 9.584575e-02 -9.584575e-02 0.9954 662.5306 21.1664)" class="st1 st2 st3">6</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 678.67 99.7199)" class="st1 st2 st3">18</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 678.9957 89.3547)" class="st1 st2 st3">1.19 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 668.83 82.7199)" class="st6 st7 st3">30</text>
		</g>
		<g id="B-31"  class="property__active" ng-class="jade.inmovablesClassList[30]" ng-click="jade.showPropertyData(70, '31')">
			<polyline class="property pb-sprite-1" points="535.8,141 585.4,3.6 639.5,8.8 635.4,144.1 535.8,141 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 574.19 138.97)" class="st1 st2 st3">15.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 592.2811 139.5385)" class="st1 st2 st3">1</text>
			<text transform="matrix(0.9954 9.584575e-02 -9.584575e-02 0.9954 602.57 15.4199)" class="st1 st2 st3">8.2</text>
			<text transform="matrix(0.9954 9.584575e-02 -9.584575e-02 0.9954 615.4106 16.6564)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 566.0801 86.6601)" class="st1 st2 st3">22.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 572.241 69.6405)" class="st1 st2 st3">1</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 602 97.84)" class="st1 st2 st3">24</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 602.3257 87.4748)" class="st1 st2 st3">0.36 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 592.48 81.6799)" class="st6 st7 st3">31</text>
			<polyline class="st4" points="588.7,126.1 589.1,112 595.9,119.2 588.7,126.1 			"/>
			<polyline class="st5" points="588.7,126.1 581.8,118.8 589.1,112 588.7,126.1 			"/>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_B">
			<line class="st9" x1="1226" y1="162.2" x2="1230.1" y2="29.5"/>
			<line class="st9" x1="1172.9" y1="160.6" x2="1177" y2="27.8"/>
			<line class="st9" x1="1119.8" y1="158.9" x2="1123.9" y2="26.2"/>
			<line class="st9" x1="1066.7" y1="157.3" x2="1070.8" y2="24.6"/>
			<line class="st9" x1="1013.7" y1="155.7" x2="1017.7" y2="23"/>
			<line class="st9" x1="960.6" y1="154.1" x2="964.6" y2="21.3"/>
			<line class="st9" x1="907.5" y1="152.4" x2="911.5" y2="19.7"/>
			<line class="st9" x1="854.4" y1="150.8" x2="858.5" y2="18.1"/>
			<line class="st9" x1="801.3" y1="149.2" x2="805.4" y2="16.5"/>
			<line class="st9" x1="748.2" y1="147.6" x2="752.3" y2="14.8"/>
			<line class="st9" x1="695.1" y1="145.9" x2="699.2" y2="13.2"/>
			<line class="st9" x1="635.4" y1="144.1" x2="639.5" y2="9.2"/>
		</g>
	</g>
	<g id="ISLA_C">
		<g id="C-32"  class="property__active" ng-class="jade.inmovablesClassList[31]" ng-click="jade.showPropertyData(70, '32')">
			<polyline class="property pb-sprite-2" points="495.7,252.1 513.8,202.1 653.4,206.4 620.6,297.2 495.7,252.1 			"/>
			<polyline class="st4" points="614,266.6 600.8,261.8 609.8,257.5 614,266.6 			"/>
			<polyline class="st5" points="614,266.6 605,270.8 600.8,261.8 614,266.6 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 630 261.6396)" class="st1 st2 st3">14.5</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 636.1609 244.621)" class="st1 st2 st3">3</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 511.1001 239.04)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 515.491 226.9101)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 571.75 213.96)" class="st1 st2 st3">21.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 589.8411 214.5285)" class="st1 st2 st3">4</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 543.79 248.12)" class="st1 st2 st3">22</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 553.5407 251.6498)" class="st1 st2 st3">5.30 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 564.33 242.3199)" class="st6 st7 st3">32</text>
		</g>
		<g id="C-33"  class="property__active" ng-class="jade.inmovablesClassList[32]" ng-click="jade.showPropertyData(70, '33')">
			<polyline class="property pb-sprite-1" points="477.7,302.1 495.7,252.1 620.6,297.2 602.6,347.1 477.7,302.1 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 605.5 329.5595)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 609.8909 317.4306)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 493.0801 288.9999)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 497.4709 276.87)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 543.9199 280.1)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 560.9391 286.2609)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 526.1 296.9999)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 535.8508 300.5297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 546.31 292.2899)" class="st6 st7 st3">33</text>
		</g>
		<g id="C-34"  class="property__active" ng-class="jade.inmovablesClassList[33]" ng-click="jade.showPropertyData(70, '34')">
			<polyline class="property pb-sprite-2" points="459.7,352 477.7,302.1 602.6,347.1 584.6,397.1 459.7,352 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 587.47 379.5204)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 591.8608 367.3905)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 475.05 338.9696)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 479.4409 326.8407)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 525.9001 330.0599)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 542.9191 336.2208)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 507.7399 348.0499)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 517.4907 351.5797)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 528.28 342.2499)" class="st6 st7 st3">34</text>
		</g>
		<g id="C-35"  class="property__active" ng-class="jade.inmovablesClassList[34]" ng-click="jade.showPropertyData(70, '35')">
			<polyline class="property pb-sprite-1" points="441.6,402 459.7,352 584.6,397.1 566.6,447.1 441.6,402 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 569.45 429.4901)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 573.8408 417.3603)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 457.02 388.9296)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 461.4109 376.8007)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 507.8801 380.0299)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 524.8991 386.1908)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 490.05 396.9301)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 499.8007 400.4598)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 510.2599 392.2101)" class="st6 st7 st3">35</text>
		</g>
		<g id="C-36"  class="property__active" ng-class="jade.inmovablesClassList[35]" ng-click="jade.showPropertyData(70, '36')">
			<polyline class="property pb-sprite-2" points="423.6,452 441.6,402 566.6,447.1 548.5,497 423.6,452 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 551.4199 479.4501)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 555.8108 467.3202)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 439 438.8896)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 443.3909 426.7607)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 489.85 429.9899)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 506.8693 436.1508)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 471.6899 447.9701)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 481.4409 451.4996)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 492.2399 442.1801)" class="st6 st7 st3">36</text>
		</g>
		<g id="C-37"  class="property__active" ng-class="jade.inmovablesClassList[36]" ng-click="jade.showPropertyData(70, '37')">
			<polyline class="property pb-sprite-1" points="405.6,501.9 423.6,452 548.5,497 530.5,547 405.6,501.9 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 533.3999 529.4101)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 537.791 517.2802)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 420.98 488.8603)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 425.3708 476.7304)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 471.83 479.9501)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 488.8493 486.111)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 453.9999 496.86)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 463.7507 500.3898)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 474.1999 492.14)" class="st6 st7 st3">37</text>
		</g>
		<g id="C-38"  class="property__active" ng-class="jade.inmovablesClassList[37]" ng-click="jade.showPropertyData(70, '38')">
			<polyline class="property pb-sprite-2" points="387.6,551.9 405.6,501.9 530.5,547 512.5,597 387.6,551.9 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 515.3699 579.3798)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 519.761 567.2499)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 402.95 538.8203)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 407.3408 526.6904)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 453.8 529.92)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 470.8193 536.0809)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 435.6401 547.9)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 445.3908 551.4298)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 456.1799 542.1)" class="st6 st7 st3">38</text>
		</g>
		<g id="C-39"  class="property__active" ng-class="jade.inmovablesClassList[38]" ng-click="jade.showPropertyData(70, '39')">
			<polyline class="property pb-sprite-1" points="369.8,601.9 387.8,551.9 512.5,597 494.5,646.9 369.5,601.9 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 497.3501 629.3398)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 501.741 617.2099)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 385.1599 588.79)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 389.5508 576.6601)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 436.0099 579.88)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 453.0292 586.0409)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 417.9499 596.7799)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 427.7009 600.3097)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 438.3901 592.0699)" class="st6 st7 st3">39</text>
		</g>
		<g id="C-40"  class="property__active" ng-class="jade.inmovablesClassList[39]" ng-click="jade.showPropertyData(70, '40')">
			<polyline class="property pb-sprite-2" points="351.5,651.8 369.5,601.9 494.5,646.9 476.4,696.9 351.5,651.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 366.8999 638.7499)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 371.2908 626.6201)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 417.7499 629.85)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 434.7692 636.0109)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 479.3201 679.2997)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 483.7109 667.1699)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 399.59 647.83)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 409.3408 651.3597)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 420.1301 642.0299)" class="st6 st7 st3">40</text>
		</g>
		<g id="C-41"  class="property__active" ng-class="jade.inmovablesClassList[40]" ng-click="jade.showPropertyData(70, '41')">
			<polyline class="property pb-sprite-1" points="333.5,701.8 351.5,651.8 476.4,696.9 458.4,746.8 333.5,701.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 461.3 729.2704)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 465.6909 717.1406)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 348.8699 688.7099)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 353.261 676.58)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 399.7299 679.8099)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 416.7492 685.9708)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 381.9001 696.7101)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 391.6508 700.2399)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 402.11 691.9999)" class="st6 st7 st3">41</text>
		</g>
		<g id="C-42"  class="property__active" ng-class="jade.inmovablesClassList[41]" ng-click="jade.showPropertyData(70, '42')">
			<polyline class="property pb-sprite-2" points="315.5,751.8 333.5,701.8 458.4,746.8 440.4,796.8 315.5,751.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 443.27 779.2304)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 447.6609 767.1005)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 330.8501 738.6796)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 335.241 726.5507)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 381.6999 729.7799)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 398.7192 735.9408)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 363.54 747.7599)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 373.2907 751.2897)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 384.08 741.9601)" class="st6 st7 st3">42</text>
		</g>
		<g id="C-43"  class="property__active" ng-class="jade.inmovablesClassList[42]" ng-click="jade.showPropertyData(70, '43')">
			<polyline class="property pb-sprite-1" points="297.5,801.7 315.5,751.8 440.4,796.8 422.4,846.8 297.5,801.7 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 312.8201 788.6396)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 317.2109 776.5107)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 363.6799 779.7399)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 380.6992 785.9008)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 425.24 829.2001)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 429.6309 817.0703)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 345.85 796.64)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 355.6008 800.1698)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 366.06 791.92)" class="st6 st7 st3">43</text>
		</g>
		<g id="C-44"  class="property__active" ng-class="jade.inmovablesClassList[43]" ng-click="jade.showPropertyData(70, '44')">
			<polyline class="property pb-sprite-2" points="279.4,851.7 297.5,801.7 422.4,846.8 404.3,896.7 279.4,851.7 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 407.22 879.1601)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 411.6108 867.0302)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 294.8101 838.6103)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 299.2009 826.4804)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 345.6501 829.7001)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 362.6691 835.861)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 327.4799 847.6801)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 337.2309 851.2098)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 348.03 841.89)" class="st6 st7 st3">44</text>
		</g>
		<g id="C-45"  class="property__active" ng-class="jade.inmovablesClassList[44]" ng-click="jade.showPropertyData(70, '45')">
			<polyline class="property pb-sprite-1" points="261.4,901.6 279.4,851.7 404.3,896.7 386.3,946.7 261.4,901.6 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 389.2 929.1298)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 393.5908 916.9999)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 276.78 888.5703)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 281.1709 876.4404)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 327.6301 879.67)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 344.6491 885.8309)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 309.8 896.5699)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 319.5507 900.0997)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 330.0099 891.85)" class="st6 st7 st3">45</text>
		</g>
		<g id="C-46"  class="property__active" ng-class="jade.inmovablesClassList[45]" ng-click="jade.showPropertyData(70, '46')">
			<polyline class="property pb-sprite-2" points="243.4,951.6 261.4,901.6 386.3,946.7 368.3,996.7 243.4,951.6 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 371.1699 979.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 375.5608 966.9501)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 258.75 938.5302)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 263.1409 926.4003)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 309.6 929.63)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 326.6193 935.7909)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 291.4399 947.61)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 301.1909 951.1398)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 311.9799 941.8199)" class="st6 st7 st3">46</text>
		</g>
		<g id="C-47"  class="property__active" ng-class="jade.inmovablesClassList[46]" ng-click="jade.showPropertyData(70, '47')">
			<polyline class="property pb-sprite-1" points="225.4,1001.6 243.4,951.6 368.3,996.7 350.3,1046.6 225.4,1001.6 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 353.1499 1029.0604)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 357.5408 1016.9306)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 240.73 988.4999)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 245.1208 976.3701)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 291.58 979.6)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 308.5993 985.7609)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 273.7499 996.4999)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 283.5007 1000.0297)" class="st1 st2 st3">0.00 m2   </text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 293.9599 991.7802)" class="st6 st7 st3">47</text>
		</g>
		<g id="C-48"  class="property__active" ng-class="jade.inmovablesClassList[47]" ng-click="jade.showPropertyData(70, '48')">
			<polyline class="property pb-sprite-2" points="207.3,1051.5 225.4,1001.6 350.3,1046.6 332.2,1096.6 207.3,1051.5 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 335.1199 1079.0096)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 339.511 1066.8798)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 273.55 1029.5599)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 290.5693 1035.7211)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 255.3901 1047.5399)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 265.1408 1051.0697)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 222.7 1038.4598)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 227.0908 1026.33)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 275.9299 1041.7401)" class="st6 st7 st3">48</text>
		</g>
		<g id="C-49"  class="property__active" ng-class="jade.inmovablesClassList[48]" ng-click="jade.showPropertyData(70, '49')">
			<polyline class="property pb-sprite-1" points="189.3,1101.5 207.3,1051.5 332.2,1096.6 314.2,1146.6 189.3,1101.5 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 317.0901 1128.9803)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 321.481 1116.8505)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 204.6799 1088.4296)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 209.0708 1076.3007)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 255.53 1079.5199)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 272.5493 1085.681)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 237.6999 1096.4301)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 247.4509 1099.9598)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 257.9101 1091.7098)" class="st6 st7 st3">49</text>
		</g>
		<g id="C-50"  class="property__active" ng-class="jade.inmovablesClassList[49]" ng-click="jade.showPropertyData(70, '50')">
			<polyline class="property pb-sprite-2" points="171.3,1151.5 189.3,1101.5 314.2,1146.6 296.2,1196.5 171.3,1151.5 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 299.0701 1178.9501)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 303.4609 1166.8202)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 186.6499 1138.3895)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 191.0408 1126.2606)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 237.5 1129.4901)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 254.5192 1135.6508)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 219.34 1147.4701)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 229.0908 1150.9999)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 239.8801 1141.6801)" class="st6 st7 st3">50</text>
		</g>
		<g id="C-51"  class="property__active" ng-class="jade.inmovablesClassList[50]" ng-click="jade.showPropertyData(70, '51')">
			<polyline class="property pb-sprite-1" points="153.2,1201.4 171.3,1151.5 296.2,1196.5 278.2,1246.5 153.2,1201.4 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 281.05 1228.91)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 285.4409 1216.7802)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 168.6199 1188.3495)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 173.011 1176.2206)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 219.4799 1179.4501)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 236.4992 1185.6107)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 201.6501 1196.35)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 211.4008 1199.8798)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 221.8601 1191.64)" class="st6 st7 st3">51</text>
		</g>
		<g id="C-52"  class="property__active" ng-class="jade.inmovablesClassList[51]" ng-click="jade.showPropertyData(70, '52')">
			<polyline class="property pb-sprite-2" points="135.2,1251.4 153.2,1201.4 278.2,1246.5 260.1,1296.4 135.2,1251.4 			"/>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 201.4499 1229.41)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 218.4692 1235.5709)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 263.02 1278.87)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 267.4109 1266.7401)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 150.6001 1238.3202)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 154.991 1226.1903)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 183.29 1247.4)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 193.0407 1250.9298)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 203.83 1241.6)" class="st6 st7 st3">52</text>
		</g>
		<g id="C-53"  class="property__active" ng-class="jade.inmovablesClassList[52]" ng-click="jade.showPropertyData(70, '53')">
			<polyline class="property pb-sprite-1" points="117.2,1301.3 135.2,1251.4 260.1,1296.4 242.1,1346.4 117.2,1301.3 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 244.99 1328.8397)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 249.3809 1316.7098)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 132.5801 1288.2802)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 136.9709 1276.1503)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 183.4299 1279.37)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 200.4492 1285.5309)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 165.6001 1296.2802)" class="st1 st2 st3">16</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 175.3508 1299.8099)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 185.81 1291.5699)" class="st6 st7 st3">53</text>
		</g>
		<g id="C-54"  class="property__active" ng-class="jade.inmovablesClassList[53]" ng-click="jade.showPropertyData(70, '54')">
			<polyline class="property pb-sprite-2" points="82.9,1396.4 99.2,1351.3 117.2,1301.3 242.1,1346.4 224.1,1396.4 82.9,1396.4 			"/>
			<polyline class="st4" points="217.5,1365.8 204.2,1361 213.2,1356.8 217.5,1365.8 			"/>
			<polyline class="st5" points="217.5,1365.8 208.5,1370 204.2,1361 217.5,1365.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 226.97 1378.7997)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 231.3608 1366.6698)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 105.54 1363.2098)" class="st1 st2 st3">15.2</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 111.7009 1346.1903)" class="st1 st2 st3">2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 165.4001 1329.35)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 182.4191 1335.5109)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 141.88 1393.0601)" class="st1 st2 st3">21.2</text>
			<text transform="matrix(1 0 0 1 159.98 1393.0601)" class="st1 st2 st3">6</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 142.53 1360.39)" class="st1 st2 st3">23</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 152.2807 1363.9198)" class="st1 st2 st3">2.15 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 163.7399 1352.73)" class="st6 st7 st3">54</text>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_C">
			<line class="st9" x1="495.7" y1="252.1" x2="620.6" y2="297.2"/>
			<line class="st9" x1="477.7" y1="302.1" x2="602.6" y2="347.1"/>
			<line class="st9" x1="459.7" y1="352" x2="584.6" y2="397.1"/>
			<line class="st9" x1="441.6" y1="402" x2="566.6" y2="447.1"/>
			<line class="st9" x1="423.6" y1="452" x2="548.5" y2="497"/>
			<line class="st9" x1="405.6" y1="501.9" x2="530.5" y2="547"/>
			<line class="st9" x1="387.6" y1="551.9" x2="512.5" y2="597"/>
			<line class="st9" x1="369.5" y1="601.9" x2="494.5" y2="646.9"/>
			<line class="st9" x1="351.5" y1="651.8" x2="476.4" y2="696.9"/>
			<line class="st9" x1="333.5" y1="701.8" x2="458.4" y2="746.8"/>
			<line class="st9" x1="315.5" y1="751.8" x2="440.4" y2="796.8"/>
			<line class="st9" x1="297.5" y1="801.7" x2="422.4" y2="846.8"/>
			<line class="st9" x1="279.4" y1="851.7" x2="404.3" y2="896.7"/>
			<line class="st9" x1="261.4" y1="901.6" x2="386.3" y2="946.7"/>
			<line class="st9" x1="243.4" y1="951.6" x2="368.3" y2="996.7"/>
			<line class="st9" x1="225.4" y1="1001.6" x2="350.3" y2="1046.6"/>
			<line class="st9" x1="207.3" y1="1051.5" x2="332.2" y2="1096.6"/>
			<line class="st9" x1="189.3" y1="1101.5" x2="314.2" y2="1146.6"/>
			<line class="st9" x1="171.3" y1="1151.5" x2="296.2" y2="1196.5"/>
			<line class="st9" x1="153.2" y1="1201.4" x2="278.2" y2="1246.5"/>
			<line class="st9" x1="135.2" y1="1251.4" x2="260.1" y2="1296.4"/>
			<line class="st9" x1="117.2" y1="1301.3" x2="242.1" y2="1346.4"/>
		</g>
	</g>
	<g id="ISLA_D">
		<g id="D-55"  class="property__active" ng-class="jade.inmovablesClassList[54]" ng-click="jade.showPropertyData(70, '55')">
			<polyline class="property pb-sprite-1" points="3.8,1590.9 59.4,1458.1 115,1458.1 115,1590.9 3.8,1590.9 			"/>
			<text transform="matrix(1 0 0 1 78.17 1468.08)" class="st1 st2 st3">8.3</text>
			<text transform="matrix(1 0 0 1 91.07 1468.08)" class="st1 st2 st3">6</text>
			<text transform="matrix(0.3875 -0.9219 0.9219 0.3875 36.17 1539.1497)" class="st1 st2 st3">21.6</text>
			<text transform="matrix(0.3875 -0.9219 0.9219 0.3875 43.1841 1522.4641)" class="st1 st2 st3">8</text>
			<text transform="matrix(1 0 0 1 47.77 1587.6)" class="st1 st2 st3">16.7</text>
			<text transform="matrix(1 0 0 1 65.87 1587.6)" class="st1 st2 st3">4</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 92.01 1545.1598)" class="st1 st2 st3">25</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 92.01 1534.7906)" class="st1 st2 st3">1.08 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 78.93 1529.7692)" class="st6 st7 st3">55</text>
			<polyline class="st4" points="88.4,1474.7 88.4,1488.8 81.3,1481.8 88.4,1474.7 			"/>
			<polyline class="st5" points="88.4,1474.7 95.4,1481.8 88.4,1488.8 88.4,1474.7 			"/>
		</g>
		<g id="D-56"  class="property__active" ng-class="jade.inmovablesClassList[55]" ng-click="jade.showPropertyData(70, '56')">
			<polyline class="property pb-sprite-2" points="115,1458.1 168.1,1458.1 168.1,1590.9 115,1590.9 115,1458.1 			"/>
			<text transform="matrix(1 0 0 1 132.5 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 145.4 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 124.93 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 124.93 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 132.5 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 145.4 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 148.99 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 148.99 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 138.31 1529.7692)" class="st6 st7 st3">56</text>
		</g>
		<g id="D-57"  class="property__active" ng-class="jade.inmovablesClassList[56]" ng-click="jade.showPropertyData(70, '57')">
			<polyline class="property pb-sprite-1" points="168.1,1458.1 221.2,1458.1 221.2,1590.9 168.1,1590.9 168.1,1458.1 			"/>
			<text transform="matrix(1 0 0 1 185.62 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 198.52 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 178.05 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 178.05 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 185.62 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 198.52 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 203.24 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 203.24 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 191.42 1529.7692)" class="st6 st7 st3">57</text>
		</g>
		<g id="D-58"  class="property__active" ng-class="jade.inmovablesClassList[57]" ng-click="jade.showPropertyData(70, '58')">
			<polyline class="property pb-sprite-2" points="221.2,1458.1 274.3,1458.1 274.3,1590.9 221.2,1590.9 221.2,1458.1 			"/>
			<text transform="matrix(1 0 0 1 238.73 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 251.63 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 231.16 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 231.16 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 238.73 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 251.63 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 255.23 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 255.23 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 244.54 1529.7692)" class="st6 st7 st3">58</text>
		</g>
		<g id="D-59"  class="property__active" ng-class="jade.inmovablesClassList[58]" ng-click="jade.showPropertyData(70, '59')">
			<polyline class="property pb-sprite-1" points="274.3,1458.1 327.4,1458.1 327.4,1590.9 274.3,1590.9 274.3,1458.1 			"/>
			<text transform="matrix(1 0 0 1 291.85 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 304.75 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 284.28 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 284.28 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 291.85 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 304.75 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 309.47 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 309.47 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 297.65 1529.7692)" class="st6 st7 st3">59</text>
		</g>
		<g id="D-60" class="property__active" ng-class="jade.inmovablesClassList[59]" ng-click="jade.showPropertyData(70, '60')">
			<polyline class="property pb-sprite-2" points="327.4,1458.1 380.5,1458.1 380.5,1590.9 327.4,1590.9 327.4,1458.1 			"/>
			<text transform="matrix(1 0 0 1 344.96 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 357.86 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 337.4 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 337.4 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 344.96 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 357.86 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 361.45 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 361.45 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 350.77 1529.7692)" class="st6 st7 st3">60</text>
		</g>
		<g id="D-61" class="property__active" ng-class="jade.inmovablesClassList[60]" ng-click="jade.showPropertyData(70, '61')">
			<polyline class="property pb-sprite-1" points="380.5,1458.1 433.7,1458.1 433.7,1590.9 380.5,1590.9 380.5,1458.1 			"/>
			<text transform="matrix(1 0 0 1 398.08 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 410.98 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 390.51 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 390.51 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 398.08 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 410.98 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 415.7 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 415.7 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 403.89 1529.7692)" class="st6 st7 st3">61</text>
		</g>
		<g id="D-62" class="property__active" ng-class="jade.inmovablesClassList[61]" ng-click="jade.showPropertyData(70, '62')">
			<polyline class="property pb-sprite-2" points="433.7,1458.1 486.8,1458.1 486.8,1590.9 433.7,1590.9 433.7,1458.1 			"/>
			<text transform="matrix(1 0 0 1 451.2 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 464.1 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 443.62 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 443.62 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 451.2 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 464.1 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 467.69 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 467.69 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 457 1529.7692)" class="st6 st7 st3">62</text>
		</g>
		<g id="D-63" class="property__active" ng-class="jade.inmovablesClassList[62]" ng-click="jade.showPropertyData(70, '63')">
			<polyline class="property pb-sprite-1" points="486.8,1458.1 539.9,1458.1 539.9,1590.9 486.8,1590.9 486.8,1458.1 			"/>
			<text transform="matrix(1 0 0 1 504.31 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 517.21 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 496.74 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 496.74 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 504.31 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 517.21 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 521.93 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 521.93 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 510.12 1529.7692)" class="st6 st7 st3">63</text>
		</g>
		<g id="D-64" class="property__active" ng-class="jade.inmovablesClassList[63]" ng-click="jade.showPropertyData(70, '64')">
			<polyline class="property pb-sprite-2" points="539.9,1458.1 593,1458.1 593,1590.9 539.9,1590.9 539.9,1458.1 			"/>
			<text transform="matrix(1 0 0 1 557.43 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 570.33 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 549.86 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 549.86 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 557.43 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 570.33 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 573.91 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 573.91 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 563.23 1529.7692)" class="st6 st7 st3">64</text>
		</g>
		<g id="D-65" class="property__active" ng-class="jade.inmovablesClassList[64]" ng-click="jade.showPropertyData(70, '65')">
			<polyline class="property pb-sprite-1" points="593,1458.1 646.1,1458.1 646.1,1590.9 593,1590.9 593,1458.1 			"/>
			<text transform="matrix(1 0 0 1 610.54 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 623.44 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 602.97 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 602.97 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 610.54 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 623.44 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 628.16 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 628.16 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 616.35 1529.7692)" class="st6 st7 st3">65</text>
		</g>
		<g id="D-66" class="property__active" ng-class="jade.inmovablesClassList[65]" ng-click="jade.showPropertyData(70, '66')">
			<polyline class="property pb-sprite-2" points="646.1,1458.1 699.2,1458.1 699.2,1590.9 646.1,1590.9 646.1,1458.1 			"/>
			<text transform="matrix(1 0 0 1 663.66 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 676.56 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 656.09 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 656.09 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 663.66 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 676.56 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 680.15 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 680.15 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 669.46 1529.7692)" class="st6 st7 st3">66</text>
		</g>
		<g id="D-67" class="property__active" ng-class="jade.inmovablesClassList[66]" ng-click="jade.showPropertyData(70, '67')">
			<polyline class="property pb-sprite-1" points="699.2,1458.1 752.4,1458.1 752.4,1590.9 699.2,1590.9 699.2,1458.1 			"/>
			<text transform="matrix(1 0 0 1 716.77 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 729.67 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 709.2 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 709.2 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 716.77 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 729.67 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 734.39 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 734.39 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 722.58 1529.7692)" class="st6 st7 st3">67</text>
		</g>
		<g id="D-68" class="property__active" ng-class="jade.inmovablesClassList[67]" ng-click="jade.showPropertyData(70, '68')">
			<polyline class="property pb-sprite-2" points="752.4,1458.1 805.5,1458.1 805.5,1590.9 752.4,1590.9 752.4,1458.1 			"/>
			<text transform="matrix(1 0 0 1 769.9 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 782.8 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 762.32 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 762.32 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 769.9 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 782.8 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 786.38 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 786.38 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 775.7 1529.7692)" class="st6 st7 st3">68</text>
		</g>
		<g id="D-69" class="property__active" ng-class="jade.inmovablesClassList[68]" ng-click="jade.showPropertyData(70, '69')">
			<polyline class="property pb-sprite-1" points="805.5,1458.1 858.6,1458.1 858.6,1590.9 805.5,1590.9 805.5,1458.1 			"/>
			<text transform="matrix(1 0 0 1 823 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 835.9 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 815.44 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 815.44 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 823 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 835.9 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 840.63 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 840.63 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 828.81 1529.7692)" class="st6 st7 st3">69</text>
		</g>
		<g id="D-70" class="property__active" ng-class="jade.inmovablesClassList[69]" ng-click="jade.showPropertyData(70, '70')">
			<polyline class="property pb-sprite-2" points="858.6,1458.1 911.7,1458.1 911.7,1590.9 858.6,1590.9 858.6,1458.1 			"/>
			<text transform="matrix(1 0 0 1 876.12 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 889.02 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 868.55 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 868.55 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 876.12 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 889.02 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 892.61 1545.2008)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 892.61 1534.8297)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 881.92 1529.7692)" class="st6 st7 st3">70</text>
		</g>
		<g id="D-71" class="property__active" ng-class="jade.inmovablesClassList[70]" ng-click="jade.showPropertyData(70, '71')">
			<polyline class="property pb-sprite-1" points="911.7,1458.1 964.8,1458.1 964.8,1590.9 911.7,1590.9 911.7,1458.1 			"/>
			<text transform="matrix(1 0 0 1 929.24 1468.08)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 942.14 1468.08)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 921.67 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 921.67 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 929.24 1587.6)" class="st1 st2 st3">8.0</text>
			<text transform="matrix(1 0 0 1 942.14 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 946.86 1545.1598)" class="st1 st2 st3">16</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 946.86 1534.7906)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 935.05 1529.7692)" class="st6 st7 st3">71</text>
		</g>
		<g id="D-72" class="property__active" ng-class="jade.inmovablesClassList[71]" ng-click="jade.showPropertyData(70, '72')">
			<polyline class="property pb-sprite-2" points="964.8,1590.9 964.8,1458.1 1029.3,1458.1 1029,1462.2 1024.7,1526.6 1021.3,1590.9 964.8,1590.9 
							"/>
			<text transform="matrix(1 0 0 1 988.02 1468.08)" class="st1 st2 st3">9.7</text>
			<text transform="matrix(1 0 0 1 1000.92 1468.08)" class="st1 st2 st3">1</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 974.78 1536.1403)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 974.78 1518.0406)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 984.02 1587.6)" class="st1 st2 st3">8.5</text>
			<text transform="matrix(1 0 0 1 996.92 1587.6)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.104854e-02 -0.9981 0.9981 6.104854e-02 1021.52 1535.8391)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.104854e-02 -0.9981 0.9981 6.104854e-02 1022.625 1517.7747)" class="st1 st2 st3">4</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1001.16 1545.2008)" class="st1 st2 st3">18</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1001.16 1534.8297)" class="st1 st2 st3">1.26 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 990.47 1529.7692)" class="st6 st7 st3">72</text>
			<polyline class="st4" points="998.2,1474.7 998.2,1488.8 991.2,1481.8 998.2,1474.7 			"/>
			<polyline class="st5" points="998.2,1474.7 1005.2,1481.8 998.2,1488.8 998.2,1474.7 			"/>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_D">
			<line class="st9" x1="115" y1="1458.1" x2="115" y2="1590.9"/>
			<line class="st9" x1="168.1" y1="1458.1" x2="168.1" y2="1590.9"/>
			<line class="st9" x1="221.2" y1="1458.1" x2="221.2" y2="1590.9"/>
			<line class="st9" x1="274.3" y1="1458.1" x2="274.3" y2="1590.9"/>
			<line class="st9" x1="327.4" y1="1458.1" x2="327.4" y2="1590.9"/>
			<line class="st9" x1="380.5" y1="1458.1" x2="380.5" y2="1590.9"/>
			<line class="st9" x1="433.7" y1="1458.1" x2="433.7" y2="1590.9"/>
			<line class="st9" x1="486.8" y1="1458.1" x2="486.8" y2="1590.9"/>
			<line class="st9" x1="539.9" y1="1458.1" x2="539.9" y2="1590.9"/>
			<line class="st9" x1="593" y1="1458.1" x2="593" y2="1590.9"/>
			<line class="st9" x1="646.1" y1="1458.1" x2="646.1" y2="1590.9"/>
			<line class="st9" x1="699.2" y1="1458.1" x2="699.2" y2="1590.9"/>
			<line class="st9" x1="752.4" y1="1458.1" x2="752.4" y2="1590.9"/>
			<line class="st9" x1="805.5" y1="1458.1" x2="805.5" y2="1590.9"/>
			<line class="st9" x1="858.6" y1="1458.1" x2="858.6" y2="1590.9"/>
			<line class="st9" x1="911.7" y1="1458.1" x2="911.7" y2="1590.9"/>
			<line class="st9" x1="964.8" y1="1458.1" x2="964.8" y2="1590.9"/>
		</g>
	</g>
	<g id="ISLA_E">
		<g id="E-73 class="property__active" ng-class="jade.inmovablesClassList[72]" ng-click="jade.showPropertyData(70, '73')"">
			<polyline class="property pb-sprite-1" points="851.3,1263.6 844.8,1329.9 838.9,1396.4 769.2,1396.4 769.2,1263.6 851.3,1263.6 			"/>
			<text transform="matrix(1 0 0 1 798.66 1273.55)" class="st1 st2 st3">12.3</text>
			<text transform="matrix(1 0 0 1 816.7599 1273.55)" class="st1 st2 st3">7</text>
			<text transform="matrix(1 0 0 1 792.44 1393.0601)" class="st1 st2 st3">10.5</text>
			<text transform="matrix(1 0 0 1 810.54 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(9.410834e-02 -0.9956 0.9956 9.410834e-02 840.31 1341.1903)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(9.410834e-02 -0.9956 0.9956 9.410834e-02 842.0134 1323.1708)" class="st1 st2 st3">9</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 779.16 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 779.16 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 815.69 1350.5005)" class="st1 st2 st3">227.98 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 802.84 1335.2301)" class="st6 st7 st3">73</text>
			<polyline class="st4" points="809.1,1365.7 809.1,1379.8 802,1372.7 809.1,1365.7 			"/>
			<polyline class="st5" points="809.1,1365.7 816.1,1372.7 809.1,1379.8 809.1,1365.7 			"/>
		</g>
		<g id="E-74" class="property__active" ng-class="jade.inmovablesClassList[73]" ng-click="jade.showPropertyData(70, '74')">
			<polyline class="property pb-sprite-2" points="769.2,1263.6 769.2,1396.4 709.4,1396.4 709.4,1263.6 769.2,1263.6 			"/>
			<text transform="matrix(1 0 0 1 730.29 1273.55)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 743.19 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 730.29 1393.0601)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 743.19 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 719.4 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 719.4 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 745.96 1350.4907)" class="st1 st2 st3">180.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 736.68 1335.2301)" class="st6 st7 st3">74</text>
		</g>
		<g id="E-75"  class="property__active" ng-class="jade.inmovablesClassList[74]" ng-click="jade.showPropertyData(70, '75')">
			<polyline class="property pb-sprite-1" points="709.4,1263.6 709.4,1396.4 649.7,1396.4 649.7,1263.6 709.4,1263.6 			"/>
			<text transform="matrix(1 0 0 1 670.53 1273.55)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 683.4301 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 670.53 1393.0601)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 683.4301 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 659.64 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 659.64 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 686.2 1350.4907)" class="st1 st2 st3">180.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 676.93 1335.2301)" class="st6 st7 st3">75</text>
		</g>
		<g id="E-76"  class="property__active" ng-class="jade.inmovablesClassList[75]" ng-click="jade.showPropertyData(70, '76')">
			<polyline class="property pb-sprite-2" points="649.7,1263.6 649.7,1396.4 589.9,1396.4 589.9,1263.6 649.7,1263.6 			"/>
			<text transform="matrix(1 0 0 1 610.78 1273.55)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 623.6801 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 610.78 1393.0601)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 623.6801 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 599.89 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 599.89 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 626.44 1350.4907)" class="st1 st2 st3">180.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 617.17 1335.2301)" class="st6 st7 st3">76</text>
		</g>
		<g id="E-77"  class="property__active" ng-class="jade.inmovablesClassList[76]" ng-click="jade.showPropertyData(70, '77')">
			<polyline class="property pb-sprite-1" points="589.9,1263.6 589.9,1396.4 530.2,1396.4 530.2,1263.6 589.9,1263.6 			"/>
			<text transform="matrix(1 0 0 1 551.02 1273.55)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 563.92 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 551.02 1393.0601)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 563.92 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 540.13 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 540.13 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 566.69 1350.4907)" class="st1 st2 st3">180.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 557.42 1335.2301)" class="st6 st7 st3">77</text>
		</g>
		<g id="E-78"  class="property__active" ng-class="jade.inmovablesClassList[77]" ng-click="jade.showPropertyData(70, '78')">
			<polyline class="property pb-sprite-2" points="530.2,1263.6 530.2,1396.4 470.4,1396.4 470.4,1263.6 530.2,1263.6 			"/>
			<text transform="matrix(1 0 0 1 491.27 1273.55)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 504.17 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 491.27 1393.0601)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 504.17 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 480.38 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 480.38 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 506.94 1350.4907)" class="st1 st2 st3">180.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 497.66 1335.2301)" class="st6 st7 st3">78</text>
		</g>
		<g id="E-79"  class="property__active" ng-class="jade.inmovablesClassList[78]" ng-click="jade.showPropertyData(70, '79')">
			<polyline class="property pb-sprite-1" points="470.4,1263.6 470.4,1396.4 404,1396.4 404,1263.6 470.4,1263.6 			"/>
			<text transform="matrix(1 0 0 1 425.6 1273.55)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 443.7 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 425.6 1393.0601)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 443.7 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 413.98 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 413.98 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 440.54 1350.4907)" class="st1 st2 st3">200.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 431.27 1335.2301)" class="st6 st7 st3">79</text>
		</g>
		<g id="E-80" class="property__active" ng-class="jade.inmovablesClassList[79]" ng-click="jade.showPropertyData(70, '80')">
			<polyline class="property pb-sprite-2" points="404,1263.6 404,1396.4 337.6,1396.4 337.6,1263.6 404,1263.6 			"/>
			<text transform="matrix(1 0 0 1 359.21 1273.55)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 377.31 1273.55)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 359.21 1393.0601)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 377.31 1393.0601)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 347.59 1341.611)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 347.59 1323.5094)" class="st1 st2 st3">0</text>
			<text transform="matrix(1.745302e-03 -1 1 1.745302e-03 374.15 1350.4907)" class="st1 st2 st3">200.00 m2</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 364.87 1335.2301)" class="st6 st7 st3">80</text>
			<polyline class="st4" points="367.5,1365.7 367.5,1379.8 360.5,1372.7 367.5,1365.7 			"/>
			<polyline class="st5" points="367.5,1365.7 374.5,1372.7 367.5,1379.8 367.5,1365.7 			"/>
		</g>
		<g id="E-81" class="property__active" ng-class="jade.inmovablesClassList[80]" ng-click="jade.showPropertyData(70, '81')">
			<polyline class="property pb-sprite-2" points="459.1,1263.6 392.7,1263.6 392.7,1110.9 459.1,1110.9 459.1,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 435.67 1208.6099)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 414.3 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 432.4 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 414.3 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 432.4 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 402.68 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 402.68 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 425.92 1192.4801)" class="st6 st7 st3">81</text>
			<polyline class="st4" points="426.2,1127.5 426.2,1141.6 419.2,1134.6 426.2,1127.5 			"/>
			<polyline class="st5" points="426.2,1127.5 433.2,1134.5 426.2,1141.6 426.2,1127.5 			"/>
		</g>
		<g id="E-82" class="property__active" ng-class="jade.inmovablesClassList[81]" ng-click="jade.showPropertyData(70, '82')">
			<polyline class="property pb-sprite-1" points="525.5,1263.6 459.1,1263.6 459.1,1110.9 525.5,1110.9 525.5,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 500.16 1211.4595)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 480.69 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 498.79 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 480.69 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 498.79 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 469.59 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 469.59 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 488.56 1192.4801)" class="st6 st7 st3">82</text>
		</g>
		<g id="E-83" class="property__active" ng-class="jade.inmovablesClassList[82]" ng-click="jade.showPropertyData(70, '83')">
			<polyline class="property pb-sprite-2" points="591.9,1263.6 525.5,1263.6 525.5,1110.9 591.9,1110.9 591.9,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 568.46 1208.6099)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 547.09 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 565.19 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 547.09 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 565.19 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 535.98 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 535.98 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 554.95 1192.4801)" class="st6 st7 st3">83</text>
		</g>
		<g id="E-84" class="property__active" ng-class="jade.inmovablesClassList[83]" ng-click="jade.showPropertyData(70, '84')">
			<polyline class="property pb-sprite-1" points="658.3,1263.6 591.9,1263.6 591.9,1110.9 658.3,1110.9 658.3,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 632.95 1211.4595)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 613.48 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 631.58 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 613.48 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 631.58 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 602.37 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 602.37 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 621.35 1192.4801)" class="st6 st7 st3">84</text>
			<polyline class="st4" points="625.1,1127.5 625.2,1141.6 618.1,1134.6 625.1,1127.5 			"/>
			<polyline class="st5" points="625.1,1127.5 632.2,1134.5 625.2,1141.6 625.1,1127.5 			"/>
		</g>
		<g id="E-85" class="property__active" ng-class="jade.inmovablesClassList[84]" ng-click="jade.showPropertyData(70, '85')">
			<polyline class="property pb-sprite-2" points="724.7,1263.6 658.3,1263.6 658.3,1110.9 724.7,1110.9 724.7,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 701.24 1208.6099)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 679.88 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 697.98 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 679.88 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 697.98 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 668.77 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 668.77 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 687.75 1192.4801)" class="st6 st7 st3">85</text>
			<polyline class="st4" points="691.5,1127.5 691.5,1141.6 684.5,1134.6 691.5,1127.5 			"/>
			<polyline class="st5" points="691.5,1127.5 698.6,1134.5 691.5,1141.6 691.5,1127.5 			"/>
		</g>
		<g id="E-86" class="property__active" ng-class="jade.inmovablesClassList[85]" ng-click="jade.showPropertyData(70, '86')">
			<polyline class="property pb-sprite-1" points="791.1,1263.6 724.7,1263.6 724.7,1110.9 791.1,1110.9 791.1,1263.6 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 765.74 1211.4595)" class="st1 st2 st3">230.00 m2</text>
			<text transform="matrix(1 0 0 1 746.28 1120.83)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 764.38 1120.83)" class="st1 st2 st3">0</text>
			<text transform="matrix(1 0 0 1 746.28 1260.27)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(1 0 0 1 764.38 1260.27)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 735.17 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 735.17 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 754.13 1192.4801)" class="st6 st7 st3">86</text>
			<polyline class="st4" points="757.9,1127.5 757.9,1141.6 750.9,1134.6 757.9,1127.5 			"/>
			<polyline class="st5" points="757.9,1127.5 765,1134.5 757.9,1141.6 757.9,1127.5 			"/>
		</g>
		<g id="E-87" class="property__active" ng-class="jade.inmovablesClassList[86]" ng-click="jade.showPropertyData(70, '87')">
			<polyline class="property pb-sprite-2" points="791.1,1110.9 869.6,1110.9 863.1,1161.7 857,1212.6 851.3,1263.6 791.1,1263.6 791.1,1110.9 			"/>
			<text transform="matrix(5.236017e-03 -1 1 5.236017e-03 834.55 1207.9692)" class="st1 st2 st3">239.17 m2</text>
			<text transform="matrix(1 0 0 1 818.72 1120.83)" class="st1 st2 st3">11.8</text>
			<text transform="matrix(1 0 0 1 836.8199 1120.83)" class="st1 st2 st3">3</text>
			<text transform="matrix(1 0 0 1 812.19 1260.27)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(1 0 0 1 825.09 1260.27)" class="st1 st2 st3">8</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 801.55 1198.8492)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 801.55 1180.7496)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.1201 -0.9928 0.9928 0.1201 855.35 1198.4801)" class="st1 st2 st3">23.1</text>
			<text transform="matrix(0.1201 -0.9928 0.9928 0.1201 857.5244 1180.5114)" class="st1 st2 st3">6</text>
			<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 821.04 1192.4801)" class="st6 st7 st3">87</text>
			<polyline class="st4" points="830.6,1127.5 830.7,1141.6 823.6,1134.6 830.6,1127.5 			"/>
			<polyline class="st5" points="830.6,1127.5 837.7,1134.5 830.7,1141.6 830.6,1127.5 			"/>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_E">
			<line class="st9" x1="791.1" y1="1110.9" x2="791.1" y2="1263.6"/>
			<line class="st9" x1="724.7" y1="1110.9" x2="724.7" y2="1263.6"/>
			<line class="st9" x1="658.3" y1="1110.9" x2="658.3" y2="1263.6"/>
			<line class="st9" x1="591.9" y1="1110.9" x2="591.9" y2="1263.6"/>
			<line class="st9" x1="525.5" y1="1110.9" x2="525.5" y2="1263.6"/>
			<line class="st9" x1="459.1" y1="1110.9" x2="459.1" y2="1263.6"/>
			<line class="st9" x1="769.2" y1="1263.6" x2="769.2" y2="1396.4"/>
			<line class="st9" x1="709.4" y1="1263.6" x2="709.4" y2="1396.4"/>
			<line class="st9" x1="649.7" y1="1263.6" x2="649.7" y2="1396.4"/>
			<line class="st9" x1="589.9" y1="1263.6" x2="589.9" y2="1396.4"/>
			<line class="st9" x1="530.2" y1="1263.6" x2="530.2" y2="1396.4"/>
			<line class="st9" x1="470.4" y1="1263.6" x2="470.4" y2="1396.4"/>
			<line class="st9" x1="404" y1="1263.6" x2="404" y2="1396.4"/>
			<line class="st9" x1="337.6" y1="1263.6" x2="851.3" y2="1263.6"/>
			<line class="st9" x1="337.6" y1="1263.6" x2="337.6" y2="1396.4"/>
			<line class="st9" x1="392.7" y1="1110.9" x2="392.7" y2="1263.6"/>
		</g>
	</g>
	<g id="ISLA_F">
		<g id="F-88" class="property__active" ng-class="jade.inmovablesClassList[87]" ng-click="jade.showPropertyData(70, '88')">
			<polyline class="property pb-sprite-2" points="459.1,926.8 609,980.8 584.4,1049.1 434.5,995.1 459.1,926.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 451.4199 974.9296)" class="st1 st2 st3">10.9</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 457.5808 957.9111)" class="st1 st2 st3">4</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 589.71 1024.83)" class="st1 st2 st3">10.9</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 595.8708 1007.8105)" class="st1 st2 st3">4</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 519.84 959.2499)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 536.8593 965.411)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 499.7099 1015.0699)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 516.7292 1021.2308)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 498.85 987.91)" class="st1 st2 st3">26</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 508.6008 991.4398)" class="st1 st2 st3">2.48 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 516.52 982.2401)" class="st6 st7 st3">88</text>
			<polyline class="st4" points="476.7,968.4 463.5,963.6 472.5,959.4 476.7,968.4 			"/>
			<polyline class="st5" points="476.7,968.4 467.7,972.6 463.5,963.6 476.7,968.4 			"/>
		</g>
		<g id="F-89" class="property__active" ng-class="jade.inmovablesClassList[88]" ng-click="jade.showPropertyData(70, '89')">
			<polyline class="property pb-sprite-1" points="481.7,864.3 631.6,918.4 609,980.8 459.1,926.8 481.7,864.3 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 475.01 909.5497)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 481.1709 892.5312)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 613.3 959.4404)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 619.4609 942.4208)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 542.3701 896.7899)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 559.3891 902.9508)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 521.4499 925.2401)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 531.2009 928.7699)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 539.06 919.7999)" class="st6 st7 st3">89</text>
			<polyline class="st4" points="499.3,905.9 486,901.2 495,896.9 499.3,905.9 			"/>
			<polyline class="st5" points="499.3,905.9 490.3,910.2 486,901.2 499.3,905.9 			"/>
		</g>
		<g id="F-90" class="property__active" ng-class="jade.inmovablesClassList[89]" ng-click="jade.showPropertyData(70, '90')">
			<polyline class="property pb-sprite-2" points="504.2,801.8 654.1,855.9 631.6,918.4 481.7,864.3 504.2,801.8 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 497.54 847.0995)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 503.7009 830.081)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 635.8301 896.9902)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 641.991 879.9706)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 564.9099 834.34)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 581.9291 840.5009)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 543.9899 862.7899)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 553.7407 866.3197)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 561.59 857.34)" class="st6 st7 st3">90</text>
			<polyline class="st4" points="521.8,843.5 508.6,838.7 517.6,834.5 521.8,843.5 			"/>
			<polyline class="st5" points="521.8,843.5 512.8,847.7 508.6,838.7 521.8,843.5 			"/>
		</g>
		<g id="F-91" class="property__active" ng-class="jade.inmovablesClassList[90]" ng-click="jade.showPropertyData(70, '91')">
			<polyline class="property pb-sprite-1" points="526.7,739.4 676.6,793.5 654.1,855.9 504.2,801.8 526.7,739.4 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 520.0701 784.6396)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 526.231 767.621)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 658.3599 834.5302)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 664.5208 817.5107)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 587.4399 771.88)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 604.4592 778.0409)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 566.52 800.33)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 576.2707 803.8597)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 584.1301 794.89)" class="st6 st7 st3">91</text>
			<polyline class="st4" points="544.3,781 531.1,776.2 540.1,772 544.3,781 			"/>
			<polyline class="st5" points="544.3,781 535.3,785.3 531.1,776.2 544.3,781 			"/>
		</g>
		<g id="F-92" class="property__active" ng-class="jade.inmovablesClassList[91]" ng-click="jade.showPropertyData(70, '92')">
			<polyline class="property pb-sprite-2" points="549.3,676.9 699.2,731 676.6,793.5 526.7,739.4 549.3,676.9 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 542.5999 722.1904)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 548.7607 705.1708)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 680.8899 772.08)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 687.0508 755.0605)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 609.9699 709.4301)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 626.9892 715.5909)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 589.05 737.88)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 598.8007 741.4098)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 606.6501 732.4301)" class="st6 st7 st3">92</text>
			<polyline class="st4" points="566.9,718.6 553.6,713.8 562.6,709.6 566.9,718.6 			"/>
			<polyline class="st5" points="566.9,718.6 557.8,722.8 553.6,713.8 566.9,718.6 			"/>
		</g>
		<g id="F-93" class="property__active" ng-class="jade.inmovablesClassList[92]" ng-click="jade.showPropertyData(70, '93')">
			<polyline class="property pb-sprite-1" points="571.8,614.5 721.7,668.5 699.2,731 549.3,676.9 571.8,614.5 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 565.1299 659.7304)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 571.2908 642.7109)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 703.4299 709.6201)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 709.5908 692.6005)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 632.4999 646.9698)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 649.5192 653.1307)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 611.58 675.4301)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 621.3307 678.9598)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 629.1899 669.9799)" class="st6 st7 st3">93</text>
			<polyline class="st4" points="589.4,656.1 576.2,651.3 585.2,647.1 589.4,656.1 			"/>
			<polyline class="st5" points="589.4,656.1 580.4,660.3 576.2,651.3 589.4,656.1 			"/>
		</g>
		<g id="F-94" class="property__active" ng-class="jade.inmovablesClassList[93]" ng-click="jade.showPropertyData(70, '94')">
			<polyline class="property pb-sprite-2" points="594.3,552 744.2,606.1 721.7,668.5 571.8,614.5 594.3,552 			"/>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 587.6599 597.2802)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 593.8208 580.2607)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 725.96 647.1699)" class="st1 st2 st3">10.0</text>
			<text transform="matrix(0.3404 -0.9403 0.9403 0.3404 732.1208 630.1503)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 655.03 584.5199)" class="st1 st2 st3">24.0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 672.0493 590.6808)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 634.11 612.9698)" class="st1 st2 st3">24</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 643.8608 616.4996)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(0.9403 0.3404 -0.3404 0.9403 651.7199 607.5199)" class="st6 st7 st3">94</text>
			<polyline class="st4" points="611.9,593.7 598.7,588.9 607.7,584.7 611.9,593.7 			"/>
			<polyline class="st5" points="611.9,593.7 602.9,597.9 598.7,588.9 611.9,593.7 			"/>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_F">
			<line class="st9" x1="571.8" y1="614.5" x2="721.7" y2="668.5"/>
			<line class="st9" x1="549.3" y1="676.9" x2="699.2" y2="731"/>
			<line class="st9" x1="526.7" y1="739.4" x2="676.6" y2="793.5"/>
			<line class="st9" x1="504.5" y1="801.2" x2="654.3" y2="855.3"/>
			<line class="st9" x1="481.7" y1="864.3" x2="631.6" y2="918.4"/>
			<line class="st9" x1="459.1" y1="926.8" x2="609" y2="980.8"/>
			<polyline class="st9" points="594.3,552 744.2,606.1 584.4,1049.1 			"/>
			<line class="st9" x1="434.5" y1="995.1" x2="584.4" y2="1049.1"/>
		</g>
	</g>
	<g id="ISLA_G">
		<g id="G-95" class="property__active" ng-class="jade.inmovablesClassList[94]" ng-click="jade.showPropertyData(70, '95')">
			<polyline class="property pb-sprite-1" points="670.9,339.8 738.2,341.9 733.5,494.5 666.2,492.4 670.9,339.8 			"/>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 711.69 438.6401)" class="st1 st2 st3">23</text>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 712.0519 428.2768)" class="st1 st2 st3">3.15 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 688.45 489.8799)" class="st1 st2 st3">10.1</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 706.5411 490.4485)" class="st1 st2 st3">4</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 692.72 350.52)" class="st1 st2 st3">10.1</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 710.811 351.0884)" class="st1 st2 st3">4</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 678.26 428.1301)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 678.8286 410.0392)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 699.7 421.6096)" class="st6 st7 st3">95</text>
			<polyline class="st4" points="700.4,476.9 700.8,462.8 707.6,470.1 700.4,476.9 			"/>
			<polyline class="st5" points="700.4,476.9 693.5,469.6 700.8,462.8 700.4,476.9 			"/>
		</g>
		<g id="G-96" class="property__active" ng-class="jade.inmovablesClassList[95]" ng-click="jade.showPropertyData(70, '96')">
			<polyline class="property pb-sprite-2" points="796.5,496.4 733.5,494.5 738.2,341.9 801.2,343.8 796.5,496.4 			"/>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 776.08 443.1401)" class="st1 st2 st3">21</text>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 776.442 432.7768)" class="st1 st2 st3">8.50 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 756.2 491.96)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 769.0936 492.3652)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 760.47 352.5999)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 773.3635 353.0052)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 746.95 430.2404)" class="st1 st2 st3">23.0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 747.5186 412.1486)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 766.4 425.4797)" class="st6 st7 st3">96</text>
			<polyline class="st4" points="767.2,478.9 767.6,464.9 774.4,472.1 767.2,478.9 			"/>
			<polyline class="st5" points="767.2,478.9 760.3,471.7 767.6,464.9 767.2,478.9 			"/>
		</g>
		<g id="G-97" class="property__active" ng-class="jade.inmovablesClassList[96]" ng-click="jade.showPropertyData(70, '97')">
			<polyline class="property pb-sprite-1" points="859.6,498.4 796.5,496.4 801.2,343.8 864.2,345.7 859.6,498.4 			"/>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 841.1 442.2905)" class="st1 st2 st3">21</text>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 841.4619 431.9262)" class="st1 st2 st3">8.50 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 819.24 493.89)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 832.1335 494.2952)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 823.52 354.53)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 836.4136 354.9351)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 808.58 432.1203)" class="st1 st2 st3">23.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 833.73 428.05)" class="st6 st7 st3">97</text>
			<polyline class="st4" points="834,481 834.4,466.9 841.2,474.2 834,481 			"/>
			<polyline class="st5" points="834,481 827.2,473.7 834.4,466.9 834,481 			"/>
		</g>
		<g id="G-98" class="property__active" ng-class="jade.inmovablesClassList[97]" ng-click="jade.showPropertyData(70, '98')">
			<polyline class="property pb-sprite-2" points="922.6,500.3 859.6,498.4 864.2,345.7 927.3,347.7 922.6,500.3 			"/>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 902.16 447.0004)" class="st1 st2 st3">21</text>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 902.5219 436.6362)" class="st1 st2 st3">8.50 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 882.2899 495.83)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 895.1836 496.2352)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 886.5599 356.46)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 899.4536 356.8652)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 871.63 434.0598)" class="st1 st2 st3">23.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 893.65 430.5402)" class="st6 st7 st3">98</text>
			<polyline class="st4" points="896.6,482.9 897,468.8 903.8,476.1 896.6,482.9 			"/>
			<polyline class="st5" points="896.6,482.9 889.8,475.6 897,468.8 896.6,482.9 			"/>
		</g>
		<g id="G-99" class="property__active" ng-class="jade.inmovablesClassList[98]" ng-click="jade.showPropertyData(70, '99')">
			<polyline class="property pb-sprite-1" points="927.3,347.7 990.3,349.6 985.7,502.2 922.6,500.3 927.3,347.7 			"/>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 967.19 446.1596)" class="st1 st2 st3">21</text>
			<text transform="matrix(3.489950e-02 -0.9994 0.9994 3.489950e-02 967.5519 435.7963)" class="st1 st2 st3">8.50 m2</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 945.34 497.7599)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 958.2336 498.1652)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 949.61 358.39)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 962.5035 358.7952)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 934.68 435.9904)" class="st1 st2 st3">23.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 984.45 437.5197)" class="st1 st2 st3">23.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 955.08 432.5695)" class="st6 st7 st3">99</text>
			<polyline class="st4" points="956.3,484.7 956.7,470.7 963.6,477.9 956.3,484.7 			"/>
			<polyline class="st5" points="956.3,484.7 949.5,477.5 956.7,470.7 956.3,484.7 			"/>
		</g>
		<g id="G-100" class="property__active" ng-class="jade.inmovablesClassList[99]" ng-click="jade.showPropertyData(70, '100')">
			<polyline class="property pb-sprite-1" points="970,216.1 1029.7,218 1025.7,350.7 965.9,348.9 970,216.1 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 990.6599 226.8)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 1003.5536 227.2052)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 987 346.2499)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 999.8936 346.6551)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 977.69 294.4904)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1024.14 295.9201)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1004.3 304.3498)" class="st1 st2 st3">18</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 1004.6257 293.9855)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 992.7 295.6603)" class="st6 st7 st3">100</text>
			<polyline class="st4" points="998.9,247.7 999.4,233.6 1006.2,240.9 998.9,247.7 			"/>
			<polyline class="st5" points="998.9,247.7 992.1,240.5 999.4,233.6 998.9,247.7 			"/>
		</g>
		<g id="G-101" class="property__active" ng-class="jade.inmovablesClassList[100]" ng-click="jade.showPropertyData(70, '101')">
			<polyline class="property pb-sprite-2" points="970,216.1 965.9,348.9 906.2,347 910.3,214.3 970,216.1 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 930.9399 224.97)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 943.8336 225.3752)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 927.27 344.43)" class="st1 st2 st3">9.0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 940.1636 344.8351)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 917.96 292.6603)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 944.56 302.5197)" class="st1 st2 st3">18</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 944.8857 292.1555)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 933.01 292.0002)" class="st6 st7 st3">101</text>
		</g>
		<g id="G-102" class="property__active" ng-class="jade.inmovablesClassList[101]" ng-click="jade.showPropertyData(70, '102')">
			<polyline class="property pb-sprite-1" points="910.3,214.3 906.2,347 843.2,345.1 847.2,212.4 910.3,214.3 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 869.5499 223.0899)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 882.4436 223.4952)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 865.88 342.54)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 878.7736 342.9451)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 854.92 290.7297)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 884.83 300.6896)" class="st1 st2 st3">19</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 885.1558 290.3254)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 873.25 292.0002)" class="st6 st7 st3">102</text>
		</g>
		<g id="G-103" class="property__active" ng-class="jade.inmovablesClassList[102]" ng-click="jade.showPropertyData(70, '103')">
			<polyline class="property pb-sprite-2" points="847.2,212.4 843.2,345.1 780.1,343.2 784.2,210.4 847.2,212.4 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 806.5 221.16)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 819.3936 221.5653)" class="st1 st2 st3">0</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 802.84 340.6099)" class="st1 st2 st3">9.5</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 815.7336 341.0152)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 791.88 288.8)" class="st1 st2 st3">20.00</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 825.11 298.8596)" class="st1 st2 st3">19</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 825.4357 288.4953)" class="st1 st2 st3">0.00 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 811.67 286.6398)" class="st6 st7 st3">103</text>
		</g>
		<g id="G-104" class="property__active" ng-class="jade.inmovablesClassList[103]" ng-click="jade.showPropertyData(70, '104')">
			<polyline class="property pb-sprite-1" points="718.3,208.4 784.2,210.4 780.1,343.2 714.2,341.1 718.3,208.4 			"/>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 742.02 219.18)" class="st1 st2 st3">9.9</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 754.9136 219.5852)" class="st1 st2 st3">3</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 738.37 338.6299)" class="st1 st2 st3">9.9</text>
			<text transform="matrix(0.9995 3.141076e-02 -3.141076e-02 0.9995 751.2635 339.0352)" class="st1 st2 st3">3</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 725.97 286.7805)" class="st1 st2 st3">20.0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 726.5385 268.6887)" class="st1 st2 st3">0</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 758.75 296.8195)" class="st1 st2 st3">19</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 759.0757 286.4553)" class="st1 st2 st3">8.60 m2</text>
			<text transform="matrix(3.141081e-02 -0.9995 0.9995 3.141081e-02 744.23 283.1301)" class="st6 st7 st3">104</text>
			<polyline class="st4" points="750.3,240.1 750.7,226 757.6,233.3 750.3,240.1 			"/>
			<polyline class="st5" points="750.3,240.1 743.5,232.8 750.7,226 750.3,240.1 			"/>
		</g>
		<g id="LINEAS_DIVISORIAS_ISLA_G">
			<line class="st9" x1="780.1" y1="343.2" x2="784.2" y2="210.4"/>
			<line class="st9" x1="843.2" y1="345.1" x2="847.2" y2="212.4"/>
			<line class="st9" x1="906.2" y1="347" x2="910.3" y2="214.3"/>
			<line class="st9" x1="965.9" y1="348.9" x2="970" y2="216.1"/>
			<line class="st9" x1="738.2" y1="341.9" x2="733.5" y2="494.5"/>
			<line class="st9" x1="801.2" y1="343.8" x2="796.5" y2="496.4"/>
			<line class="st9" x1="864.2" y1="345.7" x2="859.6" y2="498.4"/>
			<line class="st9" x1="927.3" y1="347.7" x2="922.6" y2="500.3"/>
			<polyline class="st9" points="666.2,492.4 670.9,339.8 990.3,349.6 985.7,502.2 			"/>
			<line class="st9" x1="714.2" y1="341.1" x2="718.3" y2="208.4"/>
			<polyline class="st9" points="1029.7,218 1025.7,350.7 990.3,349.6 			"/>
		</g>
	</g>
	<g id="COMPLEMENTO">
		<polyline class="st10" points="978.7,1255.8 976.6,1275.6 950.2,1272.8 952.3,1252.9 978.7,1255.8 		"/>
		<polyline class="st10" points="993.8,1224.7 992.8,1234.1 991.4,1234.3 990.2,1235.3 989.7,1236.6 990,1238.1 990.9,1239.2 
			992.2,1239.7 991.2,1249.1 984.2,1236 993.8,1224.7 		"/>
		<polyline class="st10" points="988.5,1284.9 995.5,1298 985.9,1309.3 986.9,1299.9 988.3,1299.7 989.5,1298.8 990,1297.4 
			989.8,1296 988.9,1294.8 987.5,1294.3 988.5,1284.9 		"/>
		<text transform="matrix(0.108 -0.9942 0.9942 0.108 998.15 1254.2703)" class="st11 st7 st12">ENTRADA</text>
		<text transform="matrix(0.108 -0.9942 0.9942 0.108 983.78 1309.6404)" class="st11 st7 st12">SALIDA</text>
		<g id="COLINDANCIA">
			<line class="st13" x1="1332.4" y1="31.6" x2="1331.3" y2="31.6"/>
			<line class="st13" x1="1331.3" y1="31.6" x2="679.7" y2="11.6"/>
			<line class="st13" x1="679.7" y1="11.6" x2="584.7" y2="2.5"/>
			<line class="st13" x1="584.7" y1="2.5" x2="70.5" y2="1427.8"/>
			<line class="st13" x1="70.5" y1="1427.8" x2="67.2" y2="1437"/>
			<line class="st13" x1="67.2" y1="1437" x2="2.5" y2="1591.4"/>
			<line class="st13" x1="1022.2" y1="1591.4" x2="2.5" y2="1591.4"/>
			<path class="st13" d="M1255.9,260.7c23.8-76.9,49.3-153.3,76.5-229.1"/>
			<path class="st13" d="M1022.2,1591.4c2.1-43.1,4.7-86.1,7.8-129.1"/>
			<path class="st13" d="M1030,1462.3c29.4-407.8,105.2-811,225.9-1201.6"/>
		</g>
	</g>
</g>
</svg>

        </div>

    </div>

</body>
</html>