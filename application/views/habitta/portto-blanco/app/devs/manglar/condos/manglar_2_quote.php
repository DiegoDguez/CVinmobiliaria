<!DOCTYPE html>
<html lang="es_MX">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="grupoccima.com">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords"
		content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBManglarQuoteCtrl as manglar">

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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
						src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10"
								ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
					<li>
						<md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
							<svg viewBox="0 0 24 24" width="24">
								<path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
							</svg>
						</md-button>
					</li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10"
							ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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


	<div class="modal-dialog" ng-class="manglar.dialogDisplay">
		<div class="backdrop-dialog" ng-click="manglar.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="manglar.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{manglar.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{manglar.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{manglar.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{manglar.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de
							${{manglar.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
						<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan3}}% para
							propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan3}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{manglar.propertyData.discountPlan1}}% de descuento
							para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{manglar.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
<!-- 
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{manglar.month}} y paga la primera
							mensualidad hasta {{manglar.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas
							en {{manglar.month + ' ' + manglar.year}}</p>
					</div>

					<div class="divider"></div> -->

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10" md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt"
						ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h1 class="center-align">Manglar 2</h1>
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
		<svg id="CLUSTER_MANGLAR" data-name="CLUSTER MANGLAR" xmlns="http://www.w3.org/2000/svg"
			xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 1595.38">
			<defs>
				<style>
					.cls-1 {
						fill: #4076ae;
					}

					.cls-1,
					.cls-46,
					.cls-47,
					.cls-9 {
						fill-rule: evenodd;
					}

					.cls-2 {
						font-size: 10.11px;
					}

					.cls-10,
					.cls-102,
					.cls-104,
					.cls-105,
					.cls-108,
					.cls-111,
					.cls-114,
					.cls-116,
					.cls-118,
					.cls-12,
					.cls-121,
					.cls-123,
					.cls-125,
					.cls-128,
					.cls-131,
					.cls-134,
					.cls-136,
					.cls-138,
					.cls-141,
					.cls-142,
					.cls-143,
					.cls-145,
					.cls-148,
					.cls-152,
					.cls-154,
					.cls-156,
					.cls-158,
					.cls-16,
					.cls-160,
					.cls-162,
					.cls-165,
					.cls-167,
					.cls-169,
					.cls-171,
					.cls-175,
					.cls-177,
					.cls-179,
					.cls-18,
					.cls-182,
					.cls-184,
					.cls-187,
					.cls-189,
					.cls-193,
					.cls-195,
					.cls-198,
					.cls-2,
					.cls-20,
					.cls-200,
					.cls-202,
					.cls-205,
					.cls-207,
					.cls-210,
					.cls-212,
					.cls-214,
					.cls-217,
					.cls-219,
					.cls-22,
					.cls-223,
					.cls-225,
					.cls-227,
					.cls-231,
					.cls-234,
					.cls-238,
					.cls-24,
					.cls-240,
					.cls-242,
					.cls-244,
					.cls-248,
					.cls-250,
					.cls-251,
					.cls-254,
					.cls-256,
					.cls-259,
					.cls-26,
					.cls-261,
					.cls-264,
					.cls-266,
					.cls-268,
					.cls-271,
					.cls-274,
					.cls-277,
					.cls-279,
					.cls-280,
					.cls-283,
					.cls-286,
					.cls-289,
					.cls-29,
					.cls-292,
					.cls-295,
					.cls-297,
					.cls-298,
					.cls-300,
					.cls-302,
					.cls-304,
					.cls-306,
					.cls-308,
					.cls-31,
					.cls-310,
					.cls-315,
					.cls-317,
					.cls-319,
					.cls-321,
					.cls-323,
					.cls-326,
					.cls-328,
					.cls-33,
					.cls-331,
					.cls-333,
					.cls-337,
					.cls-339,
					.cls-341,
					.cls-344,
					.cls-346,
					.cls-350,
					.cls-353,
					.cls-355,
					.cls-358,
					.cls-36,
					.cls-361,
					.cls-364,
					.cls-366,
					.cls-368,
					.cls-370,
					.cls-374,
					.cls-376,
					.cls-378,
					.cls-38,
					.cls-381,
					.cls-383,
					.cls-385,
					.cls-387,
					.cls-391,
					.cls-392,
					.cls-394,
					.cls-396,
					.cls-4,
					.cls-40,
					.cls-400,
					.cls-404,
					.cls-407,
					.cls-408,
					.cls-411,
					.cls-42,
					.cls-44,
					.cls-49,
					.cls-51,
					.cls-53,
					.cls-55,
					.cls-58,
					.cls-6,
					.cls-60,
					.cls-62,
					.cls-65,
					.cls-68,
					.cls-71,
					.cls-73,
					.cls-75,
					.cls-78,
					.cls-81,
					.cls-84,
					.cls-87,
					.cls-90,
					.cls-93,
					.cls-96,
					.cls-97,
					.cls-99 {
						fill: #fff;
						font-family: CenturyGothic, Century Gothic;
					}

					.cls-3 {
						letter-spacing: 0em;
					}

					.cls-4,
					.cls-6,
					.cls-8 {
						font-size: 10.03px;
					}

					.cls-5 {
						letter-spacing: 0em;
					}

					.cls-6 {
						letter-spacing: 0em;
					}

					.cls-7 {
						letter-spacing: 0em;
					}

					.cls-101,
					.cls-107,
					.cls-113,
					.cls-120,
					.cls-127,
					.cls-133,
					.cls-140,
					.cls-147,
					.cls-15,
					.cls-164,
					.cls-174,
					.cls-181,
					.cls-186,
					.cls-192,
					.cls-197,
					.cls-204,
					.cls-21,
					.cls-216,
					.cls-222,
					.cls-230,
					.cls-237,
					.cls-247,
					.cls-270,
					.cls-276,
					.cls-28,
					.cls-282,
					.cls-288,
					.cls-294,
					.cls-303,
					.cls-313,
					.cls-325,
					.cls-330,
					.cls-336,
					.cls-343,
					.cls-35,
					.cls-357,
					.cls-363,
					.cls-373,
					.cls-380,
					.cls-398,
					.cls-403,
					.cls-406,
					.cls-45,
					.cls-57,
					.cls-64,
					.cls-70,
					.cls-77,
					.cls-8,
					.cls-83,
					.cls-89,
					.cls-95 {
						fill: #fccf00;
					}

					.cls-101,
					.cls-107,
					.cls-113,
					.cls-120,
					.cls-127,
					.cls-133,
					.cls-140,
					.cls-147,
					.cls-15,
					.cls-164,
					.cls-174,
					.cls-181,
					.cls-186,
					.cls-192,
					.cls-197,
					.cls-204,
					.cls-21,
					.cls-216,
					.cls-222,
					.cls-230,
					.cls-237,
					.cls-247,
					.cls-270,
					.cls-276,
					.cls-28,
					.cls-282,
					.cls-288,
					.cls-294,
					.cls-303,
					.cls-313,
					.cls-325,
					.cls-330,
					.cls-336,
					.cls-343,
					.cls-35,
					.cls-357,
					.cls-363,
					.cls-373,
					.cls-380,
					.cls-398,
					.cls-403,
					.cls-406,
					.cls-413,
					.cls-415,
					.cls-45,
					.cls-57,
					.cls-64,
					.cls-70,
					.cls-77,
					.cls-8,
					.cls-83,
					.cls-89,
					.cls-95 {
						font-family: CenturyGothic-Bold, Century Gothic;
						font-weight: 700;
					}

					.cls-9 {
						fill: #64768c;
					}

					.cls-10 {
						font-size: 10.11px;
					}

					.cls-11 {
						letter-spacing: 0em;
					}

					.cls-12,
					.cls-15 {
						font-size: 10.03px;
					}

					.cls-13 {
						letter-spacing: 0em;
					}

					.cls-14 {
						letter-spacing: 0em;
					}

					.cls-16 {
						font-size: 10.11px;
					}

					.cls-17 {
						letter-spacing: 0em;
					}

					.cls-18,
					.cls-20,
					.cls-21,
					.cls-96 {
						font-size: 10.03px;
					}

					.cls-18 {
						letter-spacing: 0em;
					}

					.cls-19 {
						letter-spacing: 0em;
					}

					.cls-20 {
						letter-spacing: 0em;
					}

					.cls-22 {
						font-size: 10.11px;
					}

					.cls-23 {
						letter-spacing: 0em;
					}

					.cls-24,
					.cls-26,
					.cls-28 {
						font-size: 10.03px;
					}

					.cls-24 {
						letter-spacing: 0em;
					}

					.cls-25 {
						letter-spacing: 0em;
					}

					.cls-27 {
						letter-spacing: 0em;
					}

					.cls-29 {
						font-size: 10.11px;
						letter-spacing: 0em;
					}

					.cls-30 {
						letter-spacing: 0em;
					}

					.cls-31,
					.cls-33,
					.cls-35 {
						font-size: 10.03px;
					}

					.cls-31 {
						letter-spacing: 0em;
					}

					.cls-32 {
						letter-spacing: 0em;
					}

					.cls-34 {
						letter-spacing: 0em;
					}

					.cls-36 {
						font-size: 10.09px;
					}

					.cls-37 {
						letter-spacing: 0em;
					}

					.cls-38 {
						font-size: 10.11px;
					}

					.cls-39 {
						letter-spacing: 0em;
					}

					.cls-40 {
						font-size: 10.11px;
					}

					.cls-41 {
						letter-spacing: 0em;
					}

					.cls-42,
					.cls-44,
					.cls-45 {
						font-size: 10.03px;
					}

					.cls-42 {
						letter-spacing: 0em;
					}

					.cls-43 {
						letter-spacing: 0em;
					}

					.cls-44 {
						letter-spacing: 0em;
					}

					.cls-46,
					.cls-47 {
						fill: #e0a843;
					}

					.cls-46 {
						opacity: 0.6;
					}

					.cls-352,
					.cls-416,
					.cls-48 {
						fill: none;
					}

					.cls-48 {
						stroke: #fff;
						stroke-width: 1.76px;
					}

					.cls-352,
					.cls-48 {
						stroke-linecap: round;
						stroke-linejoin: round;
					}

					.cls-49 {
						font-size: 10.07px;
					}

					.cls-50 {
						letter-spacing: 0em;
					}

					.cls-51 {
						font-size: 10.07px;
					}

					.cls-52 {
						letter-spacing: 0em;
					}

					.cls-53 {
						font-size: 10.11px;
					}

					.cls-54 {
						letter-spacing: 0em;
					}

					.cls-55,
					.cls-57,
					.cls-60 {
						font-size: 10.08px;
					}

					.cls-55 {
						letter-spacing: 0em;
					}

					.cls-56 {
						letter-spacing: 0em;
					}

					.cls-58 {
						font-size: 10.06px;
					}

					.cls-59 {
						letter-spacing: 0em;
					}

					.cls-61 {
						letter-spacing: 0em;
					}

					.cls-62,
					.cls-64 {
						font-size: 10.09px;
					}

					.cls-63 {
						letter-spacing: 0em;
					}

					.cls-65 {
						font-size: 10.06px;
					}

					.cls-66 {
						letter-spacing: 0em;
					}

					.cls-67 {
						letter-spacing: 0em;
					}

					.cls-68,
					.cls-70,
					.cls-73 {
						font-size: 10.09px;
					}

					.cls-69 {
						letter-spacing: 0em;
					}

					.cls-71 {
						font-size: 10.05px;
					}

					.cls-72 {
						letter-spacing: 0em;
					}

					.cls-73 {
						letter-spacing: 0em;
					}

					.cls-74 {
						letter-spacing: 0em;
					}

					.cls-75,
					.cls-77 {
						font-size: 10.1px;
					}

					.cls-76 {
						letter-spacing: 0em;
					}

					.cls-78 {
						font-size: 10.05px;
					}

					.cls-79 {
						letter-spacing: 0em;
					}

					.cls-80 {
						letter-spacing: 0em;
					}

					.cls-81,
					.cls-83 {
						font-size: 10.1px;
					}

					.cls-82 {
						letter-spacing: 0em;
					}

					.cls-84 {
						font-size: 10.04px;
					}

					.cls-85 {
						letter-spacing: 0em;
					}

					.cls-86 {
						letter-spacing: 0em;
					}

					.cls-87,
					.cls-89 {
						font-size: 10.11px;
					}

					.cls-88 {
						letter-spacing: 0em;
					}

					.cls-286,
					.cls-288,
					.cls-90 {
						font-size: 10.04px;
					}

					.cls-90 {
						letter-spacing: 0em;
					}

					.cls-91 {
						letter-spacing: 0em;
					}

					.cls-92 {
						letter-spacing: 0em;
					}

					.cls-93,
					.cls-95,
					.cls-97 {
						font-size: 10.11px;
					}

					.cls-93 {
						letter-spacing: 0em;
					}

					.cls-94 {
						letter-spacing: 0em;
					}

					.cls-96 {
						letter-spacing: 0em;
					}

					.cls-98 {
						letter-spacing: 0em;
					}

					.cls-101,
					.cls-104,
					.cls-99 {
						font-size: 10.11px;
					}

					.cls-99 {
						letter-spacing: 0em;
					}

					.cls-100 {
						letter-spacing: 0em;
					}

					.cls-102 {
						font-size: 10.03px;
						letter-spacing: 0em;
					}

					.cls-103 {
						letter-spacing: 0em;
					}

					.cls-104 {
						letter-spacing: 0em;
					}

					.cls-105,
					.cls-107 {
						font-size: 10.12px;
					}

					.cls-106 {
						letter-spacing: 0em;
					}

					.cls-108 {
						font-size: 10.03px;
					}

					.cls-109 {
						letter-spacing: 0em;
					}

					.cls-110 {
						letter-spacing: 0em;
					}

					.cls-111,
					.cls-113,
					.cls-116 {
						font-size: 10.12px;
					}

					.cls-112 {
						letter-spacing: 0em;
					}

					.cls-114 {
						font-size: 10.02px;
					}

					.cls-115 {
						letter-spacing: 0em;
					}

					.cls-116 {
						letter-spacing: 0em;
					}

					.cls-117 {
						letter-spacing: 0em;
					}

					.cls-118,
					.cls-120,
					.cls-123 {
						font-size: 10.12px;
					}

					.cls-119 {
						letter-spacing: 0em;
					}

					.cls-121 {
						font-size: 10.02px;
					}

					.cls-122 {
						letter-spacing: 0em;
					}

					.cls-123 {
						letter-spacing: 0em;
					}

					.cls-124 {
						letter-spacing: 0em;
					}

					.cls-125,
					.cls-127 {
						font-size: 10.12px;
					}

					.cls-126 {
						letter-spacing: 0em;
					}

					.cls-128 {
						font-size: 10.02px;
					}

					.cls-129 {
						letter-spacing: 0em;
					}

					.cls-130 {
						letter-spacing: 0em;
					}

					.cls-131,
					.cls-133,
					.cls-136 {
						font-size: 10.13px;
					}

					.cls-132 {
						letter-spacing: 0em;
					}

					.cls-134 {
						font-size: 10.02px;
						letter-spacing: 0em;
					}

					.cls-135 {
						letter-spacing: 0em;
					}

					.cls-136 {
						letter-spacing: 0em;
					}

					.cls-137 {
						letter-spacing: 0em;
					}

					.cls-138,
					.cls-140,
					.cls-143 {
						font-size: 10.13px;
					}

					.cls-138 {
						letter-spacing: 0em;
					}

					.cls-139 {
						letter-spacing: 0em;
					}

					.cls-141 {
						font-size: 10.02px;
					}

					.cls-142 {
						font-size: 10.02px;
					}

					.cls-144 {
						letter-spacing: 0em;
					}

					.cls-145,
					.cls-147 {
						font-size: 10.13px;
					}

					.cls-146 {
						letter-spacing: 0em;
					}

					.cls-148 {
						font-size: 10.02px;
					}

					.cls-149 {
						letter-spacing: 0em;
					}

					.cls-150 {
						letter-spacing: 0em;
					}

					.cls-151 {
						letter-spacing: 0em;
					}

					.cls-152,
					.cls-394 {
						font-size: 10.07px;
					}

					.cls-152 {
						letter-spacing: 0em;
					}

					.cls-153 {
						letter-spacing: 0em;
					}

					.cls-154 {
						font-size: 10.11px;
					}

					.cls-155 {
						letter-spacing: 0em;
					}

					.cls-156 {
						font-size: 10.11px;
					}

					.cls-157 {
						letter-spacing: 0em;
					}

					.cls-158 {
						font-size: 10.02px;
					}

					.cls-159 {
						letter-spacing: 0em;
					}

					.cls-160 {
						font-size: 10.03px;
						letter-spacing: 0em;
					}

					.cls-161 {
						letter-spacing: 0em;
					}

					.cls-162,
					.cls-164 {
						font-size: 10.03px;
					}

					.cls-163 {
						letter-spacing: 0em;
					}

					.cls-165 {
						font-size: 10.12px;
					}

					.cls-166 {
						letter-spacing: 0em;
					}

					.cls-167,
					.cls-391 {
						font-size: 10.12px;
					}

					.cls-167 {
						letter-spacing: 0em;
					}

					.cls-168 {
						letter-spacing: 0em;
					}

					.cls-169 {
						font-size: 10.13px;
					}

					.cls-170 {
						letter-spacing: 0em;
					}

					.cls-171 {
						font-size: 10.03px;
					}

					.cls-172 {
						letter-spacing: 0em;
					}

					.cls-173 {
						letter-spacing: 0em;
					}

					.cls-174 {
						font-size: 10.03px;
					}

					.cls-175 {
						font-size: 10.12px;
					}

					.cls-176 {
						letter-spacing: 0em;
					}

					.cls-177,
					.cls-179,
					.cls-181 {
						font-size: 10.03px;
					}

					.cls-177 {
						letter-spacing: 0em;
					}

					.cls-178 {
						letter-spacing: 0em;
					}

					.cls-180 {
						letter-spacing: 0em;
					}

					.cls-182 {
						font-size: 10.12px;
					}

					.cls-183 {
						letter-spacing: 0em;
					}

					.cls-184,
					.cls-186 {
						font-size: 10.03px;
					}

					.cls-185 {
						letter-spacing: 0em;
					}

					.cls-187 {
						font-size: 10.12px;
					}

					.cls-188 {
						letter-spacing: 0em;
					}

					.cls-189,
					.cls-192 {
						font-size: 10.03px;
					}

					.cls-190 {
						letter-spacing: 0em;
					}

					.cls-191 {
						letter-spacing: 0em;
					}

					.cls-193 {
						font-size: 10.12px;
					}

					.cls-194 {
						letter-spacing: 0em;
					}

					.cls-195,
					.cls-202 {
						font-size: 10.03px;
					}

					.cls-195 {
						letter-spacing: 0em;
					}

					.cls-196 {
						letter-spacing: 0em;
					}

					.cls-197 {
						font-size: 10.03px;
					}

					.cls-198 {
						font-size: 10.12px;
						letter-spacing: 0em;
					}

					.cls-199 {
						letter-spacing: 0em;
					}

					.cls-200 {
						font-size: 10.02px;
					}

					.cls-201 {
						letter-spacing: 0em;
					}

					.cls-203 {
						letter-spacing: 0em;
					}

					.cls-204,
					.cls-408 {
						font-size: 10.03px;
					}

					.cls-205 {
						font-size: 10.12px;
						letter-spacing: 0em;
					}

					.cls-206 {
						letter-spacing: 0em;
					}

					.cls-207 {
						font-size: 10.02px;
					}

					.cls-208 {
						letter-spacing: 0em;
					}

					.cls-209 {
						letter-spacing: 0em;
					}

					.cls-210 {
						font-size: 10.12px;
					}

					.cls-211 {
						letter-spacing: 0em;
					}

					.cls-212,
					.cls-222 {
						font-size: 10.02px;
					}

					.cls-213 {
						letter-spacing: 0em;
					}

					.cls-214,
					.cls-216 {
						font-size: 10.02px;
					}

					.cls-215 {
						letter-spacing: 0em;
					}

					.cls-217 {
						font-size: 10.12px;
					}

					.cls-218 {
						letter-spacing: 0em;
					}

					.cls-219,
					.cls-230 {
						font-size: 10.02px;
					}

					.cls-220 {
						letter-spacing: 0em;
					}

					.cls-221 {
						letter-spacing: 0em;
					}

					.cls-223 {
						font-size: 10.12px;
					}

					.cls-224 {
						letter-spacing: 0em;
					}

					.cls-225 {
						font-size: 10.12px;
					}

					.cls-226 {
						letter-spacing: 0em;
					}

					.cls-227 {
						font-size: 10.03px;
					}

					.cls-228 {
						letter-spacing: 0em;
					}

					.cls-229 {
						letter-spacing: 0em;
					}

					.cls-231 {
						font-size: 10.12px;
						letter-spacing: 0em;
					}

					.cls-232 {
						letter-spacing: 0em;
					}

					.cls-233 {
						letter-spacing: 0em;
					}

					.cls-234,
					.cls-237 {
						font-size: 10.12px;
					}

					.cls-235 {
						letter-spacing: 0em;
					}

					.cls-236 {
						letter-spacing: 0em;
					}

					.cls-238 {
						font-size: 10.1px;
					}

					.cls-239 {
						letter-spacing: 0em;
					}

					.cls-240 {
						font-size: 10.1px;
					}

					.cls-241 {
						letter-spacing: 0em;
					}

					.cls-242 {
						font-size: 10.1px;
						letter-spacing: 0em;
					}

					.cls-243 {
						letter-spacing: 0em;
					}

					.cls-244 {
						font-size: 10.04px;
					}

					.cls-245 {
						letter-spacing: 0em;
					}

					.cls-246 {
						letter-spacing: 0em;
					}

					.cls-247 {
						font-size: 10.04px;
					}

					.cls-248,
					.cls-250 {
						font-size: 10.1px;
					}

					.cls-248 {
						letter-spacing: 0em;
					}

					.cls-249 {
						letter-spacing: 0em;
					}

					.cls-250 {
						letter-spacing: 0em;
					}

					.cls-251 {
						font-size: 10.04px;
					}

					.cls-252 {
						letter-spacing: 0em;
					}

					.cls-253 {
						letter-spacing: 0em;
					}

					.cls-254 {
						font-size: 10.1px;
					}

					.cls-255 {
						letter-spacing: 0em;
					}

					.cls-256 {
						font-size: 10.04px;
					}

					.cls-257 {
						letter-spacing: 0em;
					}

					.cls-258 {
						letter-spacing: 0em;
					}

					.cls-259 {
						font-size: 10.1px;
						letter-spacing: 0em;
					}

					.cls-260 {
						letter-spacing: 0em;
					}

					.cls-261 {
						font-size: 10.04px;
					}

					.cls-262 {
						letter-spacing: 0em;
					}

					.cls-263 {
						letter-spacing: 0em;
					}

					.cls-264 {
						font-size: 10.11px;
					}

					.cls-265 {
						letter-spacing: 0em;
					}

					.cls-266,
					.cls-268 {
						font-size: 10.04px;
					}

					.cls-267 {
						letter-spacing: 0em;
					}

					.cls-268 {
						letter-spacing: 0em;
					}

					.cls-269 {
						letter-spacing: 0em;
					}

					.cls-270 {
						font-size: 10.04px;
					}

					.cls-271 {
						font-size: 10.11px;
					}

					.cls-272 {
						letter-spacing: 0em;
					}

					.cls-273 {
						letter-spacing: 0em;
					}

					.cls-274,
					.cls-276,
					.cls-279 {
						font-size: 10.04px;
					}

					.cls-274 {
						letter-spacing: 0em;
					}

					.cls-275 {
						letter-spacing: 0em;
					}

					.cls-277 {
						font-size: 10.11px;
					}

					.cls-278 {
						letter-spacing: 0em;
					}

					.cls-279 {
						letter-spacing: 0em;
					}

					.cls-280,
					.cls-282 {
						font-size: 10.04px;
					}

					.cls-281 {
						letter-spacing: 0em;
					}

					.cls-283 {
						font-size: 10.11px;
					}

					.cls-284 {
						letter-spacing: 0em;
					}

					.cls-285 {
						letter-spacing: 0em;
					}

					.cls-287 {
						letter-spacing: 0em;
					}

					.cls-289 {
						font-size: 10.11px;
						letter-spacing: 0em;
					}

					.cls-290 {
						letter-spacing: 0em;
					}

					.cls-291 {
						letter-spacing: 0em;
					}

					.cls-292,
					.cls-294,
					.cls-297 {
						font-size: 10.04px;
					}

					.cls-292 {
						letter-spacing: 0em;
					}

					.cls-293 {
						letter-spacing: 0em;
					}

					.cls-295 {
						font-size: 10.11px;
						letter-spacing: 0em;
					}

					.cls-296 {
						letter-spacing: 0em;
					}

					.cls-297 {
						letter-spacing: 0em;
					}

					.cls-298 {
						font-size: 10.11px;
					}

					.cls-299 {
						letter-spacing: 0em;
					}

					.cls-300,
					.cls-302,
					.cls-303 {
						font-size: 10.04px;
					}

					.cls-300 {
						letter-spacing: 0em;
					}

					.cls-301 {
						letter-spacing: 0em;
					}

					.cls-302 {
						letter-spacing: 0em;
					}

					.cls-304 {
						font-size: 10.11px;
						letter-spacing: 0em;
					}

					.cls-305 {
						letter-spacing: 0em;
					}

					.cls-306 {
						font-size: 10.11px;
					}

					.cls-307 {
						letter-spacing: 0em;
					}

					.cls-308 {
						font-size: 10.06px;
						letter-spacing: 0em;
					}

					.cls-309 {
						letter-spacing: 0em;
					}

					.cls-310,
					.cls-313 {
						font-size: 10.03px;
					}

					.cls-311 {
						letter-spacing: 0em;
					}

					.cls-312 {
						letter-spacing: 0em;
					}

					.cls-314 {
						letter-spacing: 0em;
					}

					.cls-315 {
						font-size: 10.11px;
					}

					.cls-316 {
						letter-spacing: 0em;
					}

					.cls-317 {
						font-size: 10.05px;
					}

					.cls-318 {
						letter-spacing: 0em;
					}

					.cls-319 {
						font-size: 10.11px;
						letter-spacing: 0em;
					}

					.cls-320 {
						letter-spacing: 0em;
					}

					.cls-321,
					.cls-323,
					.cls-325 {
						font-size: 10.04px;
					}

					.cls-321 {
						letter-spacing: 0em;
					}

					.cls-322 {
						letter-spacing: 0em;
					}

					.cls-324 {
						letter-spacing: 0em;
					}

					.cls-326 {
						font-size: 10.11px;
					}

					.cls-327 {
						letter-spacing: 0em;
					}

					.cls-328,
					.cls-330 {
						font-size: 10.04px;
					}

					.cls-329 {
						letter-spacing: 0em;
					}

					.cls-331 {
						font-size: 10.11px;
					}

					.cls-332 {
						letter-spacing: 0em;
					}

					.cls-333,
					.cls-336,
					.cls-341 {
						font-size: 10.04px;
					}

					.cls-333 {
						letter-spacing: 0em;
					}

					.cls-334 {
						letter-spacing: 0em;
					}

					.cls-335 {
						letter-spacing: 0em;
					}

					.cls-337 {
						font-size: 10.11px;
					}

					.cls-338 {
						letter-spacing: 0em;
					}

					.cls-339,
					.cls-343 {
						font-size: 10.04px;
					}

					.cls-340 {
						letter-spacing: 0em;
					}

					.cls-342 {
						letter-spacing: 0em;
					}

					.cls-344,
					.cls-346 {
						font-size: 10.11px;
					}

					.cls-345 {
						letter-spacing: 0em;
					}

					.cls-346 {
						letter-spacing: 0em;
					}

					.cls-347 {
						letter-spacing: 0em;
					}

					.cls-348 {
						letter-spacing: 0em;
					}

					.cls-349 {
						letter-spacing: 0em;
					}

					.cls-350 {
						font-size: 10.12px;
					}

					.cls-351 {
						letter-spacing: 0em;
					}

					.cls-352 {
						stroke: #d5fff4;
						stroke-width: 1.17px;
					}

					.cls-353 {
						font-size: 10.12px;
					}

					.cls-354 {
						letter-spacing: 0em;
					}

					.cls-355,
					.cls-357 {
						font-size: 10.03px;
					}

					.cls-356 {
						letter-spacing: 0em;
					}

					.cls-358,
					.cls-407 {
						font-size: 10.12px;
					}

					.cls-359,
					.cls-407 {
						letter-spacing: 0em;
					}

					.cls-360 {
						letter-spacing: 0em;
					}

					.cls-361,
					.cls-363,
					.cls-366 {
						font-size: 10.03px;
					}

					.cls-361 {
						letter-spacing: 0em;
					}

					.cls-362 {
						letter-spacing: 0em;
					}

					.cls-364 {
						font-size: 10.12px;
					}

					.cls-365 {
						letter-spacing: 0em;
					}

					.cls-367 {
						letter-spacing: 0em;
					}

					.cls-368 {
						font-size: 10.12px;
						letter-spacing: 0em;
					}

					.cls-369 {
						letter-spacing: 0em;
					}

					.cls-370,
					.cls-403 {
						font-size: 10.03px;
					}

					.cls-371 {
						letter-spacing: 0em;
					}

					.cls-372 {
						letter-spacing: 0em;
					}

					.cls-373,
					.cls-376,
					.cls-378 {
						font-size: 10.03px;
					}

					.cls-374 {
						font-size: 10.12px;
					}

					.cls-375 {
						letter-spacing: 0em;
					}

					.cls-377 {
						letter-spacing: 0em;
					}

					.cls-378 {
						letter-spacing: 0em;
					}

					.cls-379 {
						letter-spacing: 0em;
					}

					.cls-380,
					.cls-385 {
						font-size: 10.03px;
					}

					.cls-381 {
						font-size: 10.12px;
					}

					.cls-382 {
						letter-spacing: 0em;
					}

					.cls-383 {
						font-size: 10.12px;
					}

					.cls-384 {
						letter-spacing: 0em;
					}

					.cls-386 {
						letter-spacing: 0em;
					}

					.cls-387 {
						font-size: 10.02px;
						letter-spacing: 0em;
					}

					.cls-388 {
						letter-spacing: 0em;
					}

					.cls-389 {
						letter-spacing: 0em;
					}

					.cls-390 {
						letter-spacing: 0em;
					}

					.cls-391 {
						letter-spacing: 0em;
					}

					.cls-392,
					.cls-398 {
						font-size: 10.03px;
					}

					.cls-393 {
						letter-spacing: 0em;
					}

					.cls-395 {
						letter-spacing: 0em;
					}

					.cls-396 {
						font-size: 10.02px;
					}

					.cls-397 {
						letter-spacing: 0em;
					}

					.cls-399 {
						letter-spacing: 0em;
					}

					.cls-400 {
						font-size: 10.03px;
					}

					.cls-401 {
						letter-spacing: 0em;
					}

					.cls-402 {
						letter-spacing: 0em;
					}

					.cls-404,
					.cls-406 {
						font-size: 10.03px;
					}

					.cls-404 {
						letter-spacing: 0em;
					}

					.cls-405 {
						letter-spacing: 0em;
					}

					.cls-409 {
						letter-spacing: 0em;
					}

					.cls-410 {
						letter-spacing: 0em;
					}

					.cls-411 {
						font-size: 10.12px;
					}

					.cls-412 {
						letter-spacing: 0em;
					}

					.cls-413 {
						font-size: 6.26px;
					}

					.cls-413,
					.cls-414,
					.cls-415 {
						fill: #03234b;
					}

					.cls-415 {
						font-size: 6.69px;
					}

					.cls-416 {
						stroke: #002856;
						stroke-miterlimit: 10;
						stroke-width: 4.68px;
					}
				</style>
			</defs>
			<g id="MAPA_BASE" data-name="MAPA BASE">
				<image width="1366" height="1585" transform="translate(0 6.02)" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/manglar/condos/manglar_2.jpg" />
			</g>
			<g id="ISLA_A" data-name="ISLA A">
				<g id="A-01" class="property__active" ng-class="manglar.inmovablesClassList[79]" ng-click="manglar.showPropertyData(49, '1')" >
					<polyline id="A-L01" class="property pb-sprite-1"
						points="338.82 270.95 390.17 249.03 434.09 352.62 381.64 375.01 338.82 270.95" /><text
						class="cls-2" transform="matrix(0.91, -0.39, 0.38, 0.92, 398.1, 364.72)">
						<tspan class="cls-3">8.1</tspan>
						<tspan x="13.91" y="0">7</tspan>
					</text><text class="cls-2" transform="matrix(0.91, -0.39, 0.38, 0.92, 359.8, 273.05)">
						<tspan class="cls-3">8.0</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-4" transform="matrix(0.39, 0.93, -0.92, 0.4, 398.52, 293.59)">
						<tspan class="cls-5">16.0</tspan>
						<tspan x="19.38" y="0">0</tspan>
					</text><text class="cls-6" transform="matrix(0.39, 0.93, -0.92, 0.4, 366.26, 291.24)">12<tspan
							class="cls-7" x="11.1" y="0">9.36 m2</tspan></text><text class="cls-8"
						transform="matrix(0.39, 0.93, -0.92, 0.4, 384.91, 302.68)">01</text></g>
				<g id="A-02" class="property__active" ng-class="manglar.inmovablesClassList[80]" ng-click="manglar.showPropertyData(49, '2')">
					<polyline id="A-L02" class="property pb-sprite-2"
						points="287.24 292.32 338.82 270.95 381.64 375.01 328.97 396.83 287.24 292.32" /><text
						class="cls-10" transform="matrix(0.92, -0.38, 0.37, 0.93, 345.41, 386.88)">
						<tspan class="cls-11">8.1</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-10" transform="matrix(0.92, -0.38, 0.37, 0.93, 308.08, 294.8)">
						<tspan class="cls-11">8.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-12" transform="matrix(0.38, 0.93, -0.92, 0.39, 346.41, 315.42)">
						<tspan class="cls-13">16.0</tspan>
						<tspan x="19.38" y="0">0</tspan>
					</text><text class="cls-12" transform="matrix(0.38, 0.93, -0.92, 0.39, 316.44, 317.5)">
						<tspan class="cls-14">12</tspan>
						<tspan x="11.1" y="0">9.36 m2</tspan>
					</text><text class="cls-15" transform="matrix(0.38, 0.93, -0.92, 0.39, 335.47, 327.83)">02</text>
				</g>
				<g id="A-03" class="property__active" ng-class="manglar.inmovablesClassList[81]" ng-click="manglar.showPropertyData(49, '3')">
					<polyline id="A-L03" class="property pb-sprite-1"
						points="235.43 313.14 287.24 292.32 328.97 396.83 276.06 418.09 235.43 313.14" /><text
						class="cls-16" transform="matrix(0.92, -0.37, 0.36, 0.93, 292.97, 408.49)">
						<tspan class="cls-17">8.1</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-16" transform="matrix(0.92, -0.37, 0.36, 0.93, 256.61, 316.02)">
						<tspan class="cls-17">8.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-18" transform="matrix(0.37, 0.94, -0.93, 0.38, 293.79, 337.38)">16.0<tspan
							class="cls-19" x="19.38" y="0">0</tspan></text><text class="cls-20"
						transform="matrix(0.37, 0.94, -0.93, 0.38, 262.62, 337.15)">12<tspan class="cls-19" x="11.1"
							y="0">9.36 m2</tspan></text><text class="cls-21"
						transform="matrix(0.37, 0.94, -0.93, 0.38, 283.4, 348.91)">03</text></g>

				<g id="A-04" class="property__active" ng-class="manglar.inmovablesClassList[82]" ng-click="manglar.showPropertyData(49, '4')">
					<polyline id="A-L04" class="property pb-sprite-2"
						points="183.41 333.4 235.43 313.14 276.06 418.09 222.94 438.78 183.41 333.4" /><text
						class="cls-22" transform="matrix(0.92, -0.36, 0.36, 0.93, 239.7, 429.17)">
						<tspan class="cls-23">8.1</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-22" transform="matrix(0.92, -0.36, 0.36, 0.93, 204.31, 336.31)">
						<tspan class="cls-23">8.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-24" transform="matrix(0.36, 0.94, -0.93, 0.37, 242.05, 357.71)">16.0<tspan
							class="cls-25" x="19.38" y="0">0</tspan></text><text class="cls-26"
						transform="matrix(0.36, 0.94, -0.93, 0.37, 212.17, 357.44)">
						<tspan class="cls-27">12</tspan>
						<tspan x="11.1" y="0">9.36 m2</tspan>
					</text><text class="cls-28" transform="matrix(0.36, 0.94, -0.93, 0.37, 230.73, 370.71)">04</text>
				</g>
				<g id="A-05" class="property__active" ng-class="manglar.inmovablesClassList[83]" ng-click="manglar.showPropertyData(49, '5')">
					<polyline id="A-L05" class="property pb-sprite-1"
						points="131.19 353.1 183.41 333.4 222.94 438.78 169.6 458.89 131.19 353.1" /><text
						class="cls-29" transform="matrix(0.93, -0.35, 0.35, 0.94, 186.26, 449.41)">8.1<tspan
							class="cls-30" x="13.92" y="0">7</tspan></text><text class="cls-29"
						transform="matrix(0.93, -0.35, 0.35, 0.94, 151.85, 356.18)">8.0<tspan class="cls-30" x="13.92"
							y="0">0</tspan></text><text class="cls-31"
						transform="matrix(0.35, 0.94, -0.93, 0.36, 187.54, 378.9)">16.0<tspan class="cls-32" x="19.38"
							y="0">0</tspan></text><text class="cls-33"
						transform="matrix(0.35, 0.94, -0.93, 0.36, 157.09, 378.17)">
						<tspan class="cls-34">12</tspan>
						<tspan x="11.1" y="0">9.36 m2</tspan>
					</text><text class="cls-35" transform="matrix(0.35, 0.94, -0.93, 0.36, 178.13, 389.74)">05</text>
				</g>
				
				<g id="A-06" class="property__active" ng-class="manglar.inmovablesClassList[84]" ng-click="manglar.showPropertyData(49, '6')">
					<polyline id="A-L06" class="property pb-sprite-2"
						points="116.05 478.44 89.28 457.02 61.86 436.46 33.81 416.79 5.17 398.01 68.32 375.96 131.19 353.1 169.6 458.89 116.05 478.44" />
					<text class="cls-36" transform="matrix(0.81, 0.59, -0.58, 0.82, 53.69, 426.43)">
						<tspan class="cls-37">19.6</tspan>
						<tspan x="19.49" y="0">0</tspan>
					</text><text class="cls-38" transform="matrix(0.93, -0.34, 0.34, 0.94, 133, 469.16)">
						<tspan class="cls-39">8.1</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-40" transform="matrix(0.93, -0.33, 0.33, 0.94, 60.06, 389.59)">
						<tspan class="cls-41">19.1</tspan>
						<tspan x="19.54" y="0">8</tspan>
					</text><text class="cls-42" transform="matrix(0.34, 0.95, -0.94, 0.35, 136.07, 397.91)">16.0<tspan
							class="cls-43" x="19.37" y="0">0</tspan></text><text class="cls-44"
						transform="matrix(0.34, 0.95, -0.94, 0.35, 97.49, 399.93)">21<tspan class="cls-43" x="11.1"
							y="0">4.61 m2</tspan></text><text class="cls-45"
						transform="matrix(0.34, 0.95, -0.94, 0.35, 114.29, 413.21)">06</text>
					<polyline class="cls-46" points="134.28 441.36 141.68 448.83 134.28 456.3 134.28 441.36" />
					<polyline class="cls-47" points="134.28 441.36 134.28 456.3 126.9 448.83 134.28 441.36" />
				</g>
				<g id="DIVISIONES">
					<line class="cls-48" x1="169.6" y1="458.89" x2="131.19" y2="353.09" />
					<line class="cls-48" x1="222.94" y1="438.78" x2="183.42" y2="333.4" />
					<line class="cls-48" x1="276.06" y1="418.09" x2="235.43" y2="313.14" />
					<line class="cls-48" x1="328.97" y1="396.83" x2="287.24" y2="292.32" />
					<line class="cls-48" x1="381.64" y1="375.01" x2="338.82" y2="270.95" />
					<line class="cls-48" x1="434.09" y1="352.62" x2="390.17" y2="249.03" />
				</g>
			</g>
			<g id="ISLA_B" data-name="ISLA B">

				<g id="B-07" class="property__active" ng-class="manglar.inmovablesClassList[85]" ng-click="manglar.showPropertyData(49, '7')">
					<polyline id="B-L07" class="property pb-sprite-1"
						points="247.51 607.13 223.16 579.84 197.92 553.39 171.82 527.8 234.8 504.27 297.49 479.96 318.74 502.77 339.41 526.12 247.51 607.13" />
					<text class="cls-49" transform="matrix(0.67, 0.74, -0.73, 0.68, 303.8, 503.78)">
						<tspan class="cls-50">8.9</tspan>
						<tspan x="13.86" y="0">0</tspan>
					</text><text class="cls-51" transform="matrix(0.69, 0.72, -0.72, 0.7, 204.47, 555.23)">
						<tspan class="cls-52">15.6</tspan>
						<tspan x="19.45" y="0">5</tspan>
					</text><text class="cls-53" transform="matrix(0.93, -0.35, 0.35, 0.94, 227.12, 518.84)">
						<tspan class="cls-54">19.2</tspan>
						<tspan x="19.53" y="0">7</tspan>
					</text><text class="cls-55" transform="matrix(0.75, -0.66, 0.65, 0.76, 256.94, 564.11)">21<tspan
							class="cls-56" x="11.15" y="0">3.78 m2</tspan></text><text class="cls-57"
						transform="matrix(0.75, -0.66, 0.65, 0.76, 259.9, 542.72)">07</text>
					<polyline class="cls-46" points="300.68 512.73 308.06 520.2 300.68 527.67 300.68 512.73" />
					<polyline class="cls-47" points="300.68 512.73 300.68 527.67 293.29 520.2 300.68 512.73" />
				</g>

				<g id="B-08" class="property__active" ng-class="manglar.inmovablesClassList[86]" ng-click="manglar.showPropertyData(49, '8')">
					<polyline id="B-L08" class="property pb-sprite-2"
						points="247.51 607.13 339.41 526.12 359.48 550 378.94 574.39 283.05 650.53 265.56 628.6 247.51 607.13" />
					<text class="cls-58" transform="matrix(0.63, 0.78, -0.77, 0.64, 344.24, 549.91)">
						<tspan class="cls-59">8.9</tspan>
						<tspan x="13.85" y="0">0</tspan>
					</text><text class="cls-58" transform="matrix(0.63, 0.78, -0.77, 0.64, 261.82, 618.89)">
						<tspan class="cls-59">8.0</tspan>
						<tspan x="13.85" y="0">0</tspan>
					</text><text class="cls-60" transform="matrix(0.75, -0.66, 0.65, 0.76, 291.3, 582.84)">
						<tspan class="cls-61">17.5</tspan>
						<tspan x="19.47" y="0">0</tspan>
					</text><text class="cls-62" transform="matrix(0.78, -0.62, 0.61, 0.79, 304.07, 613.6)">
						<tspan class="cls-63">14</tspan>
						<tspan x="11.16" y="0">7.85 m2</tspan>
					</text><text class="cls-64" transform="matrix(0.78, -0.62, 0.61, 0.79, 307.59, 593.84)">08</text>
				</g>
				<g id="B-09" class="property__active" ng-class="manglar.inmovablesClassList[87]" ng-click="manglar.showPropertyData(49, '9')">
					<polyline id="B-L09" class="property pb-sprite-1"
						points="283.05 650.53 378.94 574.39 397.78 599.27 415.98 624.64 316.35 695.72 299.99 672.91 283.05 650.53" />
					<text class="cls-65" transform="matrix(0.59, 0.81, -0.8, 0.6, 383.08, 598.78)">
						<tspan class="cls-66">8.9</tspan>
						<tspan x="13.84" y="0">0</tspan>
					</text><text class="cls-65" transform="matrix(0.59, 0.81, -0.8, 0.6, 297.26, 663.4)">
						<tspan class="cls-66">8.0</tspan>
						<tspan x="13.84" y="0">0</tspan>
					</text><text class="cls-62" transform="matrix(0.78, -0.62, 0.61, 0.79, 329.09, 629.66)">
						<tspan class="cls-67">17.5</tspan>
						<tspan x="19.48" y="0">0</tspan>
					</text><text class="cls-68" transform="matrix(0.81, -0.58, 0.57, 0.82, 338.51, 662.54)">
						<tspan class="cls-69">14</tspan>
						<tspan x="11.16" y="0">7.85 m2</tspan>
					</text><text class="cls-70" transform="matrix(0.81, -0.58, 0.57, 0.82, 343.92, 641.63)">09</text>
				</g>
				<g id="B-10" class="property__active" ng-class="manglar.inmovablesClassList[88]" ng-click="manglar.showPropertyData(49, '10')">
					<polyline id="B-L10" class="property pb-sprite-2"
						points="347.31 742.57 332.13 718.94 316.35 695.72 415.98 624.64 433.52 650.47 450.41 676.74 347.31 742.57" />
					<text class="cls-71" transform="matrix(0.55, 0.84, -0.83, 0.56, 418.31, 648.79)">
						<tspan class="cls-72">8.9</tspan>
						<tspan x="13.83" y="0">0</tspan>
					</text><text class="cls-71" transform="matrix(0.55, 0.84, -0.83, 0.56, 329.34, 708.88)">
						<tspan class="cls-72">8.0</tspan>
						<tspan x="13.83" y="0">0</tspan>
					</text><text class="cls-73" transform="matrix(0.81, -0.58, 0.57, 0.82, 362.62, 676.72)">17.5<tspan
							class="cls-74" x="19.49" y="0">0</tspan></text><text class="cls-75"
						transform="matrix(0.84, -0.53, 0.53, 0.85, 371.69, 707.72)">
						<tspan class="cls-76">14</tspan>
						<tspan x="11.17" y="0">7.85 m2</tspan>
					</text><text class="cls-77" transform="matrix(0.84, -0.53, 0.53, 0.85, 377.96, 688.34)">10</text>
				</g>
				<g id="B-11" class="property__active" ng-class="manglar.inmovablesClassList[89]" ng-click="manglar.showPropertyData(49, '11')">
					<polyline id="B-L11" class="property pb-sprite-1"
						points="375.86 790.96 361.89 766.58 347.31 742.57 450.41 676.74 466.63 703.45 482.16 730.57 375.86 790.96" />
					<text class="cls-78" transform="matrix(0.51, 0.87, -0.86, 0.52, 451.67, 701.25)">
						<tspan class="cls-79">8.9</tspan>
						<tspan x="13.83" y="0">0</tspan>
					</text><text class="cls-78" transform="matrix(0.51, 0.87, -0.86, 0.52, 359.77, 756.65)">
						<tspan class="cls-79">8.0</tspan>
						<tspan x="13.83" y="0">0</tspan>
					</text><text class="cls-75" transform="matrix(0.84, -0.53, 0.53, 0.85, 394.6, 725.62)">
						<tspan class="cls-80">17.5</tspan>
						<tspan x="19.5" y="0">0</tspan>
					</text><text class="cls-81" transform="matrix(0.86, -0.49, 0.49, 0.87, 402.2, 757.92)">
						<tspan class="cls-82">14</tspan>
						<tspan x="11.18" y="0">7.85 m2</tspan>
					</text><text class="cls-83" transform="matrix(0.86, -0.49, 0.49, 0.87, 409.76, 737.55)">11</text>
					<polyline class="cls-46" points="447.62 706.53 455.01 714.01 447.62 721.48 447.62 706.53" />
					<polyline class="cls-47" points="447.62 706.53 447.62 721.48 440.23 714.01 447.62 706.53" />
				</g>
				<g id="B-12" class="property__active" ng-class="manglar.inmovablesClassList[90]" ng-click="manglar.showPropertyData(49, '12')">
					<polyline id="B-L12" class="property pb-sprite-2"
						points="482.16 730.57 497 758.08 511.13 785.96 401.92 840.77 389.2 815.7 375.86 790.96 482.16 730.57" />
					<text class="cls-84" transform="matrix(0.47, 0.89, -0.88, 0.47, 482.41, 755.06)">
						<tspan class="cls-85">8.9</tspan>
						<tspan x="13.82" y="0">0</tspan>
					</text><text class="cls-84" transform="matrix(0.47, 0.89, -0.88, 0.47, 387.83, 805.62)">
						<tspan class="cls-85">8.0</tspan>
						<tspan x="13.82" y="0">0</tspan>
					</text><text class="cls-81" transform="matrix(0.86, -0.49, 0.49, 0.87, 423.55, 776.29)">
						<tspan class="cls-86">17.5</tspan>
						<tspan x="19.51" y="0">0</tspan>
					</text><text class="cls-87" transform="matrix(0.89, -0.45, 0.44, 0.9, 427.95, 808.46)">
						<tspan class="cls-88">14</tspan>
						<tspan x="11.18" y="0">7.85 m2</tspan>
					</text><text class="cls-89" transform="matrix(0.89, -0.45, 0.44, 0.9, 437.8, 788.37)">12</text>
					<polyline class="cls-46" points="474.48 759.65 481.87 767.12 474.48 774.59 474.48 759.65" />
					<polyline class="cls-47" points="474.48 759.65 474.48 774.59 467.09 767.12 474.48 759.65" />
				</g>
				<g id="B-13" class="property__active" ng-class="manglar.inmovablesClassList[91]" ng-click="manglar.showPropertyData(49, '13')">
					<polyline id="B-L13" class="property pb-sprite-1"
						points="401.92 840.77 511.13 785.96 524.56 814.21 537.27 842.79 425.41 891.86 413.99 866.17 401.92 840.77" />
					<text class="cls-90" transform="matrix(0.42, 0.92, -0.91, 0.42, 510.08, 810.24)">8.9<tspan
							class="cls-91" x="13.81" y="0">0</tspan></text><text class="cls-90"
						transform="matrix(0.42, 0.92, -0.91, 0.42, 413.05, 855.84)">8.0<tspan class="cls-91" x="13.81"
							y="0">0</tspan></text><text class="cls-87"
						transform="matrix(0.89, -0.45, 0.44, 0.9, 450.48, 829.22)">
						<tspan class="cls-92">17.5</tspan>
						<tspan x="19.52" y="0">0</tspan>
					</text><text class="cls-93" transform="matrix(0.91, -0.4, 0.39, 0.92, 454.08, 859.99)">14<tspan
							class="cls-94" x="11.19" y="0">7.85 m2</tspan></text><text class="cls-95"
						transform="matrix(0.91, -0.4, 0.39, 0.92, 463.15, 841.55)">13</text>
					<polyline class="cls-46" points="503.02 816.32 510.41 823.79 503.02 831.26 503.02 816.32" />
					<polyline class="cls-47" points="503.02 816.32 503.02 831.26 495.63 823.79 503.02 816.32" />
				</g>
				<g id="B-14" class="property__active" ng-class="manglar.inmovablesClassList[92]" ng-click="manglar.showPropertyData(49, '14')">
					<polyline id="B-L14" class="property pb-sprite-2"
						points="446.29 944.11 436.18 917.85 425.41 891.86 537.27 842.79 549.25 871.69 560.48 900.89 446.29 944.11" />
					<text class="cls-96" transform="matrix(0.37, 0.94, -0.93, 0.38, 535.11, 867.39)">8.9<tspan
							class="cls-19" x="13.81" y="0">0</tspan></text><text class="cls-96"
						transform="matrix(0.37, 0.94, -0.93, 0.38, 435.9, 907.9)">8.0<tspan class="cls-19" x="13.81"
							y="0">0</tspan></text><text class="cls-97"
						transform="matrix(0.91, -0.4, 0.39, 0.92, 474.04, 881.16)">
						<tspan class="cls-98">17.5</tspan>
						<tspan x="19.53" y="0">0</tspan>
					</text><text class="cls-99" transform="matrix(0.93, -0.35, 0.35, 0.94, 476.54, 916.59)">14<tspan
							class="cls-100" x="11.19" y="0">7.85 m2</tspan></text><text class="cls-101"
						transform="matrix(0.93, -0.35, 0.35, 0.94, 487.41, 897.83)">14</text>
					<polyline class="cls-46" points="529.34 872.38 536.73 879.85 529.34 887.32 529.34 872.38" />
					<polyline class="cls-47" points="529.34 872.38 529.34 887.32 521.95 879.85 529.34 872.38" />
				</g>
				<g id="B-15" class="property__active" ng-class="manglar.inmovablesClassList[93]" ng-click="manglar.showPropertyData(49, '15')">
					<polyline id="B-L15" class="property pb-sprite-1"
						points="446.29 944.11 560.48 900.89 570.98 930.37 580.72 960.12 464.48 997.37 455.72 970.62 446.29 944.11" />
					<text class="cls-102" transform="matrix(0.33, 0.95, -0.94, 0.33, 557.03, 925.2)">8.9<tspan
							class="cls-103" x="13.8" y="0">0</tspan></text><text class="cls-102"
						transform="matrix(0.33, 0.95, -0.94, 0.33, 455.89, 960.51)">8.0<tspan class="cls-103" x="13.8"
							y="0">0</tspan></text><text class="cls-104"
						transform="matrix(0.93, -0.35, 0.35, 0.94, 496.14, 937.84)">17.5<tspan class="cls-100" x="19.53"
							y="0">0</tspan></text><text class="cls-105"
						transform="matrix(0.94, -0.3, 0.3, 0.95, 497.67, 969.43)">
						<tspan class="cls-106">14</tspan>
						<tspan x="11.19" y="0">7.85 m2</tspan>
					</text><text class="cls-107" transform="matrix(0.94, -0.3, 0.3, 0.95, 510.48, 952.11)">15</text>
					<polyline class="cls-46" points="549.34 930.08 556.73 937.55 549.34 945.02 549.34 930.08" />
					<polyline class="cls-47" points="549.34 930.08 549.34 945.02 541.95 937.55 549.34 930.08" />
				</g>
				<g id="B-16" class="property__active" ng-class="manglar.inmovablesClassList[94]" ng-click="manglar.showPropertyData(49, '16')">
					<polyline id="B-L16" class="property pb-sprite-2"
						points="479.96 1051.49 472.56 1024.33 464.48 997.37 580.72 960.12 589.71 990.11 597.94 1020.32 479.96 1051.49" />
					<text class="cls-108" transform="matrix(0.28, 0.97, -0.96, 0.28, 576.14, 984.16)">
						<tspan class="cls-109">8.9</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-108" transform="matrix(0.28, 0.97, -0.96, 0.28, 473.34, 1014.2)">
						<tspan class="cls-109">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-105" transform="matrix(0.94, -0.3, 0.3, 0.95, 514.08, 991.66)">
						<tspan class="cls-110">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-111" transform="matrix(0.96, -0.25, 0.25, 0.97, 513.6, 1027.38)">
						<tspan class="cls-112">14</tspan>
						<tspan x="11.2" y="0">7.85 m2</tspan>
					</text><text class="cls-113" transform="matrix(0.96, -0.25, 0.25, 0.97, 526.61, 1010.4)">16</text>
					<polyline class="cls-46" points="567 988.82 574.39 996.3 567 1003.77 567 988.82" />
					<polyline class="cls-47" points="567 988.82 567 1003.77 559.61 996.3 567 988.82" />
				</g>
				<g id="B-17" class="property__active" ng-class="manglar.inmovablesClassList[95]" ng-click="manglar.showPropertyData(49, '17')">
					<polyline id="B-L17" class="property pb-sprite-1"
						points="492.67 1106.35 486.66 1078.84 479.96 1051.49 597.94 1020.32 605.39 1050.73 612.07 1081.33 492.67 1106.35" />
					<text class="cls-114" transform="matrix(0.23, 0.98, -0.97, 0.23, 592.02, 1044.3)">
						<tspan class="cls-115">8.9</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-114" transform="matrix(0.23, 0.98, -0.97, 0.23, 487.84, 1068.96)">
						<tspan class="cls-115">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-116" transform="matrix(0.96, -0.25, 0.25, 0.97, 529.98, 1049.76)">17.5<tspan
							class="cls-117" x="19.55" y="0">0</tspan></text><text class="cls-118"
						transform="matrix(0.97, -0.2, 0.2, 0.98, 527.27, 1083)">
						<tspan class="cls-119">14</tspan>
						<tspan x="11.2" y="0">7.85 m2</tspan>
					</text><text class="cls-120" transform="matrix(0.97, -0.2, 0.2, 0.98, 540.26, 1066.32)">17</text>
					<polyline class="cls-46" points="583.21 1047.81 590.6 1055.28 583.21 1062.75 583.21 1047.81" />
					<polyline class="cls-47" points="583.21 1047.81 583.21 1062.75 575.82 1055.28 583.21 1047.81" />
				</g>
				<g id="B-18" class="property__active" ng-class="manglar.inmovablesClassList[96]" ng-click="manglar.showPropertyData(49, '18')">
					<polyline id="B-L18" class="property pb-sprite-2"
						points="502.58 1161.8 497.98 1134.01 492.67 1106.35 612.07 1081.33 617.97 1112.09 623.09 1142.99 502.58 1161.8" />
					<text class="cls-121" transform="matrix(0.18, 0.99, -0.98, 0.18, 604.86, 1105.05)">
						<tspan class="cls-122">8.9</tspan>
						<tspan x="13.79" y="0">0</tspan>
					</text><text class="cls-121" transform="matrix(0.18, 0.99, -0.98, 0.18, 499.56, 1124.29)">
						<tspan class="cls-122">8.0</tspan>
						<tspan x="13.79" y="0">0</tspan>
					</text><text class="cls-123" transform="matrix(0.97, -0.2, 0.2, 0.98, 542.59, 1106.72)">17.5<tspan
							class="cls-124" x="19.55" y="0">0</tspan></text><text class="cls-125"
						transform="matrix(0.98, -0.15, 0.15, 0.99, 540.13, 1140.05)">
						<tspan class="cls-126">14</tspan>
						<tspan x="11.2" y="0">7.85 m2</tspan>
					</text><text class="cls-127" transform="matrix(0.98, -0.15, 0.15, 0.99, 553.86, 1124.77)">18</text>
					<polyline class="cls-46" points="596.27 1108.6 603.66 1116.07 596.27 1123.54 596.27 1108.6" />
					<polyline class="cls-47" points="596.27 1108.6 596.27 1123.54 588.88 1116.07 596.27 1108.6" />
				</g>
				<g id="B-19" class="property__active" ng-class="manglar.inmovablesClassList[97]" ng-click="manglar.showPropertyData(49, '19')">
					<polyline id="B-L19" class="property pb-sprite-1"
						points="509.67 1217.69 506.48 1189.7 502.58 1161.8 623.09 1142.99 627.43 1174.02 630.98 1205.15 509.67 1217.69" />
					<text class="cls-128" transform="matrix(0.13, 1, -0.99, 0.13, 614.67, 1165.71)">
						<tspan class="cls-129">8.9</tspan>
						<tspan x="13.79" y="0">0</tspan>
					</text><text class="cls-128" transform="matrix(0.13, 1, -0.99, 0.13, 508.55, 1179.46)">
						<tspan class="cls-129">8.0</tspan>
						<tspan x="13.79" y="0">0</tspan>
					</text><text class="cls-125" transform="matrix(0.98, -0.15, 0.15, 0.99, 552.32, 1165.34)">
						<tspan class="cls-130">17.5</tspan>
						<tspan x="19.55" y="0">0</tspan>
					</text><text class="cls-131" transform="matrix(0.98, -0.1, 0.1, 0.99, 547.11, 1197.52)">
						<tspan class="cls-132">14</tspan>
						<tspan x="11.2" y="0">7.85 m2</tspan>
					</text><text class="cls-133" transform="matrix(0.98, -0.1, 0.1, 0.99, 562.28, 1182.34)">19</text>
				</g>
				<g id="B-20" class="property__active" ng-class="manglar.inmovablesClassList[98]" ng-click="manglar.showPropertyData(49, '20')">
					<polyline id="B-L20" class="property pb-sprite-2"
						points="513.92 1273.87 512.15 1245.75 509.67 1217.69 630.98 1205.15 633.74 1236.36 635.7 1267.63 513.92 1273.87" />
					<text class="cls-134" transform="matrix(0.07, 1.01, -1, 0.08, 621.67, 1227.91)">8.9<tspan
							class="cls-135" x="13.79" y="0">0</tspan></text><text class="cls-134"
						transform="matrix(0.07, 1.01, -1, 0.08, 514.98, 1236.16)">8.0<tspan class="cls-135" x="13.79"
							y="0">0</tspan></text><text class="cls-136"
						transform="matrix(0.98, -0.1, 0.1, 0.99, 559.39, 1223.46)">17.5<tspan class="cls-137" x="19.56"
							y="0">0</tspan></text><text class="cls-138"
						transform="matrix(0.99, -0.05, 0.05, 1, 551.65, 1256.1)">14<tspan class="cls-139" x="11.2"
							y="0">7.85 m2</tspan></text><text class="cls-140"
						transform="matrix(0.99, -0.05, 0.05, 1, 567.44, 1241.55)">20</text></g>
				<g id="B-21" class="property__active" ng-class="manglar.inmovablesClassList[99]" ng-click="manglar.showPropertyData(49, '21')">
					<polyline id="B-L21" class="property pb-sprite-1"
						points="513.92 1273.87 635.7 1267.63 636.79 1295.85 637.24 1324.09 637.61 1330.27 515.31 1330.19 514.97 1302.02 513.92 1273.87" />
					<text class="cls-141" transform="matrix(0.03, 1.01, -1, 0.03, 625.12, 1286.66)">8.02</text><text
						class="cls-142" transform="matrix(0.02, 1.01, -1, 0.02, 517.94, 1292.35)">8.00</text><text
						class="cls-143" transform="matrix(0.99, -0.05, 0.05, 1, 563.09, 1281.72)">
						<tspan class="cls-144">17.5</tspan>
						<tspan x="19.56" y="0">0</tspan>
					</text><text class="cls-145" transform="translate(551.5 1312.21) scale(0.99 1)">
						<tspan class="cls-146">14</tspan>
						<tspan x="11.2" y="0">7.87 m2</tspan>
					</text><text class="cls-147" transform="translate(569.72 1297.99) scale(0.99 1)">21</text></g>
				<g id="B-22" class="property__active" ng-class="manglar.inmovablesClassList[100]" ng-click="manglar.showPropertyData(49, '22')">
					<polyline id="B-L22" class="property pb-sprite-2"
						points="512.85 1403.36 514.68 1366.8 515.31 1330.19 637.61 1330.27 638.92 1338.06 641.15 1345.62 644.26 1352.86 648.21 1359.67 652.94 1365.95 686.6 1403.36 512.85 1403.36" />
					<text class="cls-148" transform="matrix(0.03, -1.01, 1, 0.04, 524.5, 1379.46)">
						<tspan class="cls-149">10.4</tspan>
						<tspan x="19.35" y="0">0</tspan>
					</text><text class="cls-145" transform="translate(564.27 1339.25) scale(0.99 1)">
						<tspan class="cls-150">17.5</tspan>
						<tspan x="19.56" y="0">5</tspan>
					</text><text class="cls-33" transform="matrix(0.35, 0.94, -0.93, 0.36, 627.01, 1341.73)">
						<tspan class="cls-151">6.4</tspan>
						<tspan x="13.81" y="0">9</tspan>
					</text><text class="cls-152" transform="matrix(0.67, 0.75, -0.74, 0.68, 654.81, 1385.13)">7.1<tspan
							class="cls-153" x="13.85" y="0">8</tspan></text><text class="cls-145"
						transform="translate(587.53 1400.59) scale(0.99 1)">
						<tspan class="cls-150">24.9</tspan>
						<tspan x="19.56" y="0">4</tspan>
					</text><text class="cls-145" transform="translate(552.25 1376.09) scale(0.99 1)">
						<tspan class="cls-146">21</tspan>
						<tspan x="11.2" y="0">2.00 m2</tspan>
					</text><text class="cls-147" transform="translate(569.98 1365.14) scale(0.99 1)">22</text>
					<polyline class="cls-46" points="620.45 1364.78 627.84 1372.25 620.45 1379.73 620.45 1364.78" />
					<polyline class="cls-47" points="620.45 1364.78 620.45 1379.73 613.06 1372.25 620.45 1364.78" />
				</g>
				<g id="DIVISIONES-2" data-name="DIVISIONES">
					<line class="cls-48" x1="637.61" y1="1330.27" x2="515.31" y2="1330.19" />
					<line class="cls-48" x1="635.7" y1="1267.63" x2="513.92" y2="1273.87" />
					<line class="cls-48" x1="630.98" y1="1205.15" x2="509.67" y2="1217.69" />
					<line class="cls-48" x1="623.09" y1="1142.99" x2="502.58" y2="1161.8" />
					<line class="cls-48" x1="612.07" y1="1081.33" x2="492.67" y2="1106.35" />
					<line class="cls-48" x1="597.94" y1="1020.32" x2="479.96" y2="1051.49" />
					<line class="cls-48" x1="580.72" y1="960.12" x2="464.48" y2="997.37" />
					<line class="cls-48" x1="560.48" y1="900.89" x2="446.29" y2="944.11" />
					<line class="cls-48" x1="537.27" y1="842.79" x2="425.41" y2="891.86" />
					<line class="cls-48" x1="511.13" y1="785.96" x2="401.91" y2="840.77" />
					<line class="cls-48" x1="482.16" y1="730.56" x2="375.86" y2="790.96" />
					<line class="cls-48" x1="450.41" y1="676.74" x2="347.31" y2="742.57" />
					<line class="cls-48" x1="415.97" y1="624.64" x2="316.35" y2="695.72" />
					<line class="cls-48" x1="378.94" y1="574.39" x2="283.05" y2="650.53" />
					<line class="cls-48" x1="339.41" y1="526.12" x2="247.51" y2="607.13" />
				</g>
			</g>
			<g id="ISLA_C" data-name="ISLA C">
				<g id="C-23" class="property__active" ng-class="manglar.inmovablesClassList[101]" ng-click="manglar.showPropertyData(49, '23')">
					<polyline id="C-L23" class="property pb-sprite-1"
						points="686.6 1592.05 686.6 1403.36 706.21 1425.16 712.19 1430.73 718.82 1435.51 725.99 1439.41 733.59 1442.37 741.5 1444.34 749.34 1445.28 786.75 1556.46 780.15 1558.74 733.3 1575.17 686.6 1592.05" />
					<text class="cls-154" transform="matrix(0.93, -0.33, 0.33, 0.94, 724.18, 1576.08)">
						<tspan class="cls-155">15.2</tspan>
						<tspan x="19.54" y="0">3</tspan>
					</text><text class="cls-156" transform="matrix(0.9, 0.42, -0.42, 0.91, 713.41, 1444.12)">
						<tspan class="cls-157">6.9</tspan>
						<tspan x="13.91" y="0">8</tspan>
					</text><text class="cls-152" transform="matrix(0.67, 0.75, -0.74, 0.68, 685.93, 1416.6)">4.1<tspan
							class="cls-153" x="13.85" y="0">8</tspan></text><text class="cls-158"
						transform="translate(696.1 1510.05) rotate(-90) scale(1.01 1)">
						<tspan class="cls-159">26.7</tspan>
						<tspan x="19.35" y="0">9</tspan>
					</text><text class="cls-160" transform="matrix(0.32, 0.96, -0.95, 0.32, 754.84, 1492.35)">16.6<tspan
							class="cls-161" x="19.37" y="0">7</tspan></text><text class="cls-162"
						transform="matrix(0.32, 0.96, -0.95, 0.33, 712.17, 1486.05)">
						<tspan class="cls-163">23</tspan>
						<tspan x="11.1" y="0">8.68 m2</tspan>
					</text><text class="cls-164" transform="matrix(0.32, 0.96, -0.95, 0.33, 728.76, 1498.49)">23</text>
					<polyline class="cls-46" points="718.35 1455.39 725.74 1462.86 718.35 1470.33 718.35 1455.39" />
					<polyline class="cls-47" points="718.35 1455.39 718.35 1470.33 710.96 1462.86 718.35 1455.39" />
				</g>
				<g id="C-24" class="property__active" ng-class="manglar.inmovablesClassList[102]" ng-click="manglar.showPropertyData(49, '24')">
					<polyline id="C-L24" class="property pb-sprite-2"
						points="749.34 1445.28 757.55 1445.23 765.69 1444.12 773.63 1441.99 811.62 1429.29 846.24 1536.41 829.61 1541.94 786.75 1556.46 749.34 1445.28" />
					<text class="cls-165" transform="matrix(0.94, -0.32, 0.31, 0.95, 806.99, 1547.58)">
						<tspan class="cls-166">9.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-167" transform="matrix(0.94, -0.31, 0.31, 0.95, 786.69, 1448.06)">5.7<tspan
							class="cls-168" x="13.92" y="0">4</tspan></text><text class="cls-169"
						transform="matrix(0.98, -0.13, 0.13, 0.99, 756.93, 1455.82)">
						<tspan class="cls-170">3.5</tspan>
						<tspan x="13.93" y="0">4</tspan>
					</text><text class="cls-171" transform="matrix(0.31, 0.96, -0.95, 0.31, 815.92, 1474.4)">
						<tspan class="cls-172">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-171" transform="matrix(0.31, 0.96, -0.95, 0.31, 780.86, 1469.13)">
						<tspan class="cls-173">14</tspan>
						<tspan x="11.1" y="0">6.31 m2</tspan>
					</text><text class="cls-174" transform="matrix(0.31, 0.96, -0.95, 0.32, 796.42, 1480.17)">24</text>
				</g>
				<g id="C-25" class="property__active" ng-class="manglar.inmovablesClassList[103]" ng-click="manglar.showPropertyData(49, '25')">
					<polyline id="C-L25" class="property pb-sprite-1"
						points="811.62 1429.29 818.39 1427.06 872.64 1409.55 905.97 1517.09 852.87 1534.23 846.24 1536.41 811.62 1429.29" />
					<text class="cls-175" transform="matrix(0.94, -0.3, 0.3, 0.95, 866.24, 1527.52)">
						<tspan class="cls-176">9.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-175" transform="matrix(0.94, -0.3, 0.3, 0.95, 835.82, 1431.42)">
						<tspan class="cls-176">9.1</tspan>
						<tspan x="13.92" y="0">9</tspan>
					</text><text class="cls-177" transform="matrix(0.3, 0.96, -0.95, 0.3, 876.16, 1454.51)">16.0<tspan
							class="cls-178" x="19.37" y="0">0</tspan></text><text class="cls-179"
						transform="matrix(0.3, 0.96, -0.95, 0.3, 844.35, 1449.51)">
						<tspan class="cls-180">14</tspan>
						<tspan x="11.09" y="0">5.55 m2</tspan>
					</text><text class="cls-181" transform="matrix(0.3, 0.96, -0.95, 0.3, 861.81, 1463.03)">25</text>
				</g>
				<g id="C-26" class="property__active" ng-class="manglar.inmovablesClassList[104]" ng-click="manglar.showPropertyData(49, '26')">
					<polyline id="C-L26" class="property pb-sprite-2"
						points="879.43 1407.4 933.88 1390.57 965.92 1498.51 912.62 1514.99 905.97 1517.09 872.64 1409.55 879.43 1407.4" />
					<text class="cls-182" transform="matrix(0.95, -0.29, 0.29, 0.96, 926, 1508.27)">
						<tspan class="cls-183">9.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-182" transform="matrix(0.95, -0.29, 0.29, 0.96, 896.73, 1411.79)">
						<tspan class="cls-183">9.1</tspan>
						<tspan x="13.92" y="0">9</tspan>
					</text><text class="cls-184" transform="matrix(0.29, 0.97, -0.96, 0.29, 937.98, 1435.14)">
						<tspan class="cls-185">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-179" transform="matrix(0.3, 0.96, -0.95, 0.3, 903.15, 1431.07)">
						<tspan class="cls-180">14</tspan>
						<tspan x="11.09" y="0">5.55 m2</tspan>
					</text><text class="cls-186" transform="matrix(0.29, 0.97, -0.96, 0.29, 922.11, 1443.6)">26</text>
				</g>
				<g id="C-27" class="property__active" ng-class="manglar.inmovablesClassList[105]" ng-click="manglar.showPropertyData(49, '27')">
					<polyline id="C-L27" class="property pb-sprite-1"
						points="965.92 1498.51 933.88 1390.57 988.51 1374.31 1019.4 1482.6 965.92 1498.51" /><text
						class="cls-187" transform="matrix(0.95, -0.28, 0.28, 0.96, 983.11, 1491.12)">
						<tspan class="cls-188">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-187" transform="matrix(0.95, -0.28, 0.28, 0.96, 954.94, 1394.32)">
						<tspan class="cls-188">8.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-189" transform="matrix(0.28, 0.97, -0.96, 0.28, 991.03, 1419.28)">
						<tspan class="cls-190">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-189" transform="matrix(0.28, 0.97, -0.96, 0.28, 959.32, 1416.21)">
						<tspan class="cls-191">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-192" transform="matrix(0.28, 0.97, -0.96, 0.28, 976.28, 1430.82)">27</text>
				</g>
				<g id="C-28" class="property__active" ng-class="manglar.inmovablesClassList[106]" ng-click="manglar.showPropertyData(49, '28')">
					<polyline id="C-L28" class="property pb-sprite-2"
						points="1073.04 1467.28 1019.4 1482.6 988.51 1374.31 1043.3 1358.66 1073.04 1467.28" /><text
						class="cls-193" transform="matrix(0.95, -0.27, 0.27, 0.96, 1036.45, 1475.34)">
						<tspan class="cls-194">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-193" transform="matrix(0.95, -0.27, 0.27, 0.96, 1009.3, 1378.24)">
						<tspan class="cls-194">8.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-195" transform="matrix(0.27, 0.97, -0.96, 0.27, 1045.97, 1403.58)">16.0
						<tspan class="cls-196" x="19.36" y="0">0</tspan></text><text class="cls-189"
						transform="matrix(0.28, 0.97, -0.96, 0.28, 1014.59, 1401.85)">
						<tspan class="cls-191">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-197" transform="matrix(0.28, 0.97, -0.96, 0.28, 1031.03, 1413.49)">28</text>
				</g>
				<g id="C-29" class="property__active" ng-class="manglar.inmovablesClassList[107]" ng-click="manglar.showPropertyData(49, '29')">
					<polyline id="C-L29" class="property pb-sprite-1"
						points="1043.3 1358.66 1098.26 1343.61 1126.85 1452.54 1073.04 1467.28 1043.3 1358.66" /><text
						class="cls-198" transform="matrix(0.96, -0.26, 0.26, 0.97, 1089.95, 1460.22)">8.0<tspan
							class="cls-199" x="13.93" y="0">0</tspan></text><text class="cls-198"
						transform="matrix(0.96, -0.26, 0.26, 0.97, 1063.85, 1362.83)">8.1<tspan class="cls-199"
							x="13.93" y="0">7</tspan></text><text class="cls-200"
						transform="matrix(0.25, 0.98, -0.97, 0.26, 1100.11, 1388.76)">
						<tspan class="cls-201">16.0</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-202" transform="matrix(0.27, 0.97, -0.96, 0.27, 1070.9, 1386.26)">
						<tspan class="cls-203">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-204" transform="matrix(0.26, 0.98, -0.97, 0.26, 1086.81, 1399.45)">29</text>
				</g>
				<g id="C-30" class="property__active" ng-class="manglar.inmovablesClassList[108]" ng-click="manglar.showPropertyData(49, '30')">
					<polyline id="C-L30" class="property pb-sprite-2"
						points="1098.26 1343.61 1153.38 1329.15 1180.8 1438.38 1126.85 1452.54 1098.26 1343.61" /><text
						class="cls-205" transform="matrix(0.96, -0.25, 0.25, 0.97, 1144.19, 1445.86)">8.0<tspan
							class="cls-206" x="13.93" y="0">0</tspan></text><text class="cls-205"
						transform="matrix(0.96, -0.25, 0.25, 0.97, 1119.12, 1348.18)">8.1<tspan class="cls-206"
							x="13.93" y="0">7</tspan></text><text class="cls-207"
						transform="matrix(0.25, 0.98, -0.97, 0.25, 1154.95, 1374.43)">
						<tspan class="cls-208">16.0</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-207" transform="matrix(0.25, 0.98, -0.97, 0.25, 1126.48, 1367.23)">
						<tspan class="cls-209">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-204" transform="matrix(0.26, 0.98, -0.97, 0.26, 1140.49, 1382.21)">30</text>
				</g>
				<g id="C-31" class="property__active" ng-class="manglar.inmovablesClassList[109]" ng-click="manglar.showPropertyData(49, '31')">
					<polyline id="C-L31" class="property pb-sprite-1"
						points="1153.38 1329.15 1208.65 1315.29 1234.91 1424.82 1180.8 1438.38 1153.38 1329.15" /><text
						class="cls-210" transform="matrix(0.96, -0.24, 0.24, 0.97, 1198.32, 1431.94)">
						<tspan class="cls-211">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-210" transform="matrix(0.96, -0.24, 0.24, 0.97, 1174.3, 1334)">
						<tspan class="cls-211">8.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-212" transform="matrix(0.23, 0.98, -0.97, 0.24, 1209.14, 1360.41)">
						<tspan class="cls-213">16.0</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-214" transform="matrix(0.25, 0.98, -0.97, 0.25, 1179.23, 1354.45)">
						<tspan class="cls-215">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-216" transform="matrix(0.25, 0.98, -0.97, 0.25, 1194.2, 1367.61)">31</text>
				</g>
				<g id="C-32" class="property__active" ng-class="manglar.inmovablesClassList[110]" ng-click="manglar.showPropertyData(49, '32')">
					<polyline id="C-L32" class="property pb-sprite-2"
						points="1208.65 1315.29 1264.06 1302.03 1289.15 1411.84 1234.91 1424.82 1208.65 1315.29" /><text
						class="cls-217" transform="matrix(0.96, -0.23, 0.23, 0.97, 1252.35, 1418.45)">
						<tspan class="cls-218">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-217" transform="matrix(0.96, -0.23, 0.23, 0.97, 1229.37, 1320.28)">
						<tspan class="cls-218">8.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-219" transform="matrix(0.22, 0.98, -0.97, 0.23, 1264.04, 1347.22)">
						<tspan class="cls-220">16.0</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-212" transform="matrix(0.23, 0.98, -0.97, 0.24, 1229.96, 1342.53)">
						<tspan class="cls-221">12</tspan>
						<tspan x="11.09" y="0">9.38 m2</tspan>
					</text><text class="cls-222" transform="matrix(0.23, 0.98, -0.97, 0.24, 1245.46, 1355.74)">32</text>
				</g>
				<g id="C-33" class="property__active" ng-class="manglar.inmovablesClassList[111]" ng-click="manglar.showPropertyData(49, '33')">
					<polyline id="C-L33" class="property pb-sprite-1"
						points="1289.15 1411.84 1264.06 1302.03 1318.44 1289.64 1355.47 1396.82 1289.15 1411.84" /><text
						class="cls-223" transform="matrix(0.97, -0.22, 0.22, 0.98, 1312.6, 1404.45)">
						<tspan class="cls-224">9.7</tspan>
						<tspan x="13.93" y="0">5</tspan>
					</text><text class="cls-225" transform="matrix(0.97, -0.22, 0.22, 0.98, 1284.06, 1307.02)">
						<tspan class="cls-226">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1325.05, 1334.63)">
						<tspan class="cls-228">16.1</tspan>
						<tspan x="19.37" y="0">2</tspan>
					</text><text class="cls-219" transform="matrix(0.22, 0.98, -0.97, 0.23, 1289.76, 1327.94)">
						<tspan class="cls-229">14</tspan>
						<tspan x="11.09" y="0">2.03 m2</tspan>
					</text><text class="cls-230" transform="matrix(0.22, 0.98, -0.97, 0.23, 1306.81, 1340.55)">33</text>
					<polyline class="cls-46" points="1295.47 1307.93 1302.86 1315.41 1295.47 1322.88 1295.47 1307.93" />
					<polyline class="cls-47" points="1295.47 1307.93 1295.47 1322.88 1288.07 1315.41 1295.47 1307.93" />
				</g>
				<g id="DIVISIONES-3" data-name="DIVISIONES">
					<line class="cls-48" x1="1043.3" y1="1358.66" x2="1073.04" y2="1467.28" />
					<line class="cls-48" x1="988.51" y1="1374.32" x2="1019.4" y2="1482.6" />
					<line class="cls-48" x1="933.88" y1="1390.56" x2="965.92" y2="1498.51" />
					<line class="cls-48" x1="872.64" y1="1409.55" x2="905.97" y2="1517.1" />
					<line class="cls-48" x1="811.62" y1="1429.29" x2="846.24" y2="1536.41" />
					<line class="cls-48" x1="1098.26" y1="1343.61" x2="1126.85" y2="1452.54" />
					<line class="cls-48" x1="1153.38" y1="1329.15" x2="1180.8" y2="1438.38" />
					<line class="cls-48" x1="1208.65" y1="1315.29" x2="1234.91" y2="1424.82" />
					<line class="cls-48" x1="1264.06" y1="1302.03" x2="1289.15" y2="1411.84" />
					<line class="cls-48" x1="749.34" y1="1445.28" x2="786.75" y2="1556.46" />
				</g>
			</g>
			<g id="ISLA_D" data-name="ISLA D">
				<g id="D-34" class="property__active" ng-class="manglar.inmovablesClassList[112]" ng-click="manglar.showPropertyData(49, '34')">
					<polyline id="D-L34" class="property pb-sprite-1"
						points="1168.26 1196.8 1273.52 1159.63 1296.92 1227.36 1242.24 1239.9 1187.69 1253.02 1168.26 1196.8" />
					<text class="cls-231" transform="matrix(0.96, -0.23, 0.22, 0.97, 1229.48, 1239.08)">16.0<tspan
							class="cls-232" x="19.55" y="0">9</tspan></text><text class="cls-227"
						transform="matrix(0.33, 0.95, -0.94, 0.33, 1177.79, 1215.08)">
						<tspan class="cls-233">8.4</tspan>
						<tspan x="13.8" y="0">6</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1271.98, 1185.37)">
						<tspan class="cls-228">10.1</tspan>
						<tspan x="19.37" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1213.23, 1192.91)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1214.01, 1224.61)">
						<tspan class="cls-236">14</tspan>
						<tspan x="11.19" y="0">8.67 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1226.49, 1206.35)">34</text>
					<polyline class="cls-46" points="1197.87 1212.18 1205.41 1219.5 1198.16 1227.12 1197.87 1212.18" />
					<polyline class="cls-47" points="1197.87 1212.18 1198.16 1227.12 1190.63 1219.79 1197.87 1212.18" />
				</g>
				<g id="D-35" class="property__active" ng-class="manglar.inmovablesClassList[113]" ng-click="manglar.showPropertyData(49, '35')">
					<polyline id="D-L35" class="property pb-sprite-2"
						points="1168.26 1196.8 1148.73 1140.27 1253.98 1103.11 1273.52 1159.63 1168.26 1196.8" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1158.31, 1158.7)">
						<tspan class="cls-233">8.5</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1251.41, 1125.83)">
						<tspan class="cls-233">8.5</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1193.64, 1136.21)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1194.95, 1167.15)">
						<tspan class="cls-236">13</tspan>
						<tspan x="11.19" y="0">6.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1203.99, 1151.66)">35</text>
				</g>
				<g id="D-36" class="property__active" ng-class="manglar.inmovablesClassList[114]" ng-click="manglar.showPropertyData(49, '36')">
					<polyline id="D-L36" class="property pb-sprite-1"
						points="1148.73 1140.27 1129.2 1083.75 1234.45 1046.59 1253.98 1103.11 1148.73 1140.27" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1138.77, 1102.17)">
						<tspan class="cls-233">8.5</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1231.88, 1069.31)">
						<tspan class="cls-233">8.5</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1174.06, 1079.57)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1172.77, 1107.67)">
						<tspan class="cls-236">13</tspan>
						<tspan x="11.19" y="0">6.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1184.6, 1090.71)">36</text>
				</g>
				<g id="D-37" class="property__active" ng-class="manglar.inmovablesClassList[115]" ng-click="manglar.showPropertyData(49, '37')">
					<polyline id="D-L37" class="property pb-sprite-2"
						points="1129.2 1083.75 1110.82 1030.55 1216.07 993.39 1234.45 1046.59 1129.2 1083.75" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1119.83, 1047.32)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1212.91, 1014.45)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1155.56, 1026.01)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1155.22, 1056.88)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1165.88, 1039.19)">37</text>
				</g>
				<g id="D-38" class="property__active" ng-class="manglar.inmovablesClassList[116]" ng-click="manglar.showPropertyData(49, '38')">
					<polyline id="D-L38" class="property pb-sprite-1"
						points="1110.82 1030.55 1092.44 977.36 1197.69 940.19 1216.07 993.39 1110.82 1030.55" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1101.44, 994.13)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1194.54, 961.25)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1137.02, 972.37)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1136, 1001.28)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1148.96, 986.02)">38</text>
				</g>
				<g id="D-39" class="property__active" ng-class="manglar.inmovablesClassList[117]" ng-click="manglar.showPropertyData(49, '39')">
					<polyline id="D-L39" class="property pb-sprite-2"
						points="1092.44 977.36 1074.06 924.15 1179.31 886.99 1197.69 940.19 1092.44 977.36" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1083.06, 940.93)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1176.16, 908.06)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1118.7, 919.33)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1118.46, 950.49)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1128.81, 933.09)">39</text>
				</g>
				<g id="D-40" class="property__active" ng-class="manglar.inmovablesClassList[118]" ng-click="manglar.showPropertyData(49, '40')">
					<polyline id="D-L40" class="property pb-sprite-1"
						points="1074.06 924.15 1055.68 870.96 1160.93 833.79 1179.31 886.99 1074.06 924.15" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1064.68, 887.72)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1157.78, 854.86)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1100.38, 866.31)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1099.24, 894.87)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1112.39, 877.37)">40</text>
				</g>
				<g id="D-41" class="property__active" ng-class="manglar.inmovablesClassList[119]" ng-click="manglar.showPropertyData(49, '41')">
					<polyline id="D-L41" class="property pb-sprite-2"
						points="1055.68 870.96 1037.29 817.76 1142.54 780.6 1160.93 833.79 1055.68 870.96" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1046.29, 834.53)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1139.39, 801.65)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1081.9, 812.84)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1081.69, 844.09)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1091.93, 826.03)">41</text>
				</g>
				<g id="D-42" class="property__active" ng-class="manglar.inmovablesClassList[120]" ng-click="manglar.showPropertyData(49, '42')">
					<polyline id="D-L42" class="property pb-sprite-1"
						points="1037.29 817.76 1018.91 764.56 1124.16 727.39 1142.54 780.6 1037.29 817.76" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1027.91, 781.33)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1121.01, 748.46)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1063.53, 759.64)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1062.47, 788.48)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1072.1, 771.93)">42</text>
				</g>
				<g id="D-43" class="property__active" ng-class="manglar.inmovablesClassList[121]" ng-click="manglar.showPropertyData(49, '43')">
					<polyline id="D-L43" class="property pb-sprite-2"
						points="1018.91 764.56 1000.53 711.36 1105.78 674.2 1124.16 727.39 1018.91 764.56" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1009.53, 728.13)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1102.64, 695.25)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1045.21, 706.61)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1044.92, 737.69)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1056.37, 719.27)">43</text>
				</g>
				<g id="D-44" class="property__active" ng-class="manglar.inmovablesClassList[122]" ng-click="manglar.showPropertyData(49, '44')">
					<polyline id="D-L44" class="property pb-sprite-1"
						points="1000.53 711.36 982.15 658.16 1087.4 621 1105.78 674.2 1000.53 711.36" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 991.14, 674.93)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1084.24, 642.06)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1026.93, 653.72)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1025.72, 682.08)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1035.87, 665.78)">44</text>
				</g>
				<g id="D-45" class="property__active" ng-class="manglar.inmovablesClassList[123]" ng-click="manglar.showPropertyData(49, '45')">
					<polyline id="D-L45" class="property pb-sprite-2"
						points="982.15 658.16 963.77 604.96 1069.02 567.8 1087.4 621 982.15 658.16" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 972.77, 621.73)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1065.86, 588.86)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1008.25, 599.68)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 1008.16, 631.3)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1019.07, 614.1)">45</text>
				</g>
				<g id="D-46" class="property__active" ng-class="manglar.inmovablesClassList[124]" ng-click="manglar.showPropertyData(49, '46')">
					<polyline id="D-L46" class="property pb-sprite-1"
						points="963.77 604.96 945.38 551.77 1050.64 514.6 1069.02 567.8 963.77 604.96" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 954.38, 568.53)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1047.49, 535.66)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 990.09, 547.1)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 988.95, 575.68)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 1000.81, 559.53)">46</text>
				</g>
				<g id="D-47" class="property__active" ng-class="manglar.inmovablesClassList[125]" ng-click="manglar.showPropertyData(49, '47')">
					<polyline id="D-L47" class="property pb-sprite-2"
						points="945.38 551.77 927 498.57 1032.25 461.4 1050.64 514.6 945.38 551.77" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 934.77, 515.55)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1029.1, 482.46)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 971.81, 494.21)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 971.4, 524.9)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 981.13, 508.65)">47</text>
				</g>
				<g id="D-48" class="property__active" ng-class="manglar.inmovablesClassList[126]" ng-click="manglar.showPropertyData(49, '48')">
					<polyline id="D-L48" class="property pb-sprite-1"
						points="927 498.57 908.62 445.37 1013.87 408.21 1032.25 461.4 927 498.57" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 917.61, 462.13)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1010.71, 429.26)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 953.63, 441.6)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 952.17, 469.28)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 962.46, 453.43)">48</text>
				</g>
				<g id="D-49" class="property__active" ng-class="manglar.inmovablesClassList[127]" ng-click="manglar.showPropertyData(49, '49')">
					<polyline id="D-L49" class="property pb-sprite-2"
						points="908.62 445.37 890.24 392.17 995.49 355.01 1013.87 408.21 908.62 445.37" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 899.24, 408.94)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 992.34, 376.06)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 934.77, 387)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 934.64, 418.5)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 944.49, 400.57)">49</text>
				</g>
				<g id="D-50" class="property__active" ng-class="manglar.inmovablesClassList[128]" ng-click="manglar.showPropertyData(49, '50')">
					<polyline id="D-L50" class="property pb-sprite-1"
						points="890.24 392.17 871.86 338.97 977.11 301.81 995.49 355.01 890.24 392.17" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 880.86, 355.74)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 973.96, 322.87)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 916.38, 333.8)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 915.42, 362.89)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 925.8, 346.89)">50</text>
				</g>
				<g id="D-51" class="property__active" ng-class="manglar.inmovablesClassList[129]" ng-click="manglar.showPropertyData(49, '51')">
					<polyline id="D-L51" class="property pb-sprite-2"
						points="871.86 338.97 853.48 285.78 958.73 248.61 977.11 301.81 871.86 338.97" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 862.47, 302.53)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 955.57, 269.67)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 898.35, 281.62)">
						<tspan class="cls-235">16.0</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 897.87, 312.11)">
						<tspan class="cls-236">12</tspan>
						<tspan x="11.19" y="0">8.00 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 910.83, 296.84)">51</text>
				</g>
				<g id="D-52" class="property__active" ng-class="manglar.inmovablesClassList[130]" ng-click="manglar.showPropertyData(49, '52')">
					<polyline id="D-L52" class="property pb-sprite-1"
						points="835.1 232.59 884.97 205.9 934.56 178.68 958.73 248.61 853.48 285.78 835.1 232.59" />
					<text class="cls-238" transform="matrix(0.87, -0.47, 0.47, 0.88, 879.94, 222.67)">
						<tspan class="cls-239">16.2</tspan>
						<tspan x="19.51" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 844.09, 249.34)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 933.4, 205.51)">
						<tspan class="cls-228">10.5</tspan>
						<tspan x="19.37" y="0">2</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 881.17, 255.43)">
						<tspan class="cls-236">14</tspan>
						<tspan x="11.19" y="0">7.66 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 893.08, 237.78)">52</text>
					<polyline class="cls-46" points="865.66 246.6 873.2 253.93 865.96 261.55 865.66 246.6" />
					<polyline class="cls-47" points="865.66 246.6 865.96 261.55 858.42 254.22 865.66 246.6" />
				</g>
				<g id="DIVISIONES-4" data-name="DIVISIONES">
					<line class="cls-48" x1="853.48" y1="285.78" x2="958.73" y2="248.61" />
					<line class="cls-48" x1="871.86" y1="338.97" x2="977.11" y2="301.81" />
					<line class="cls-48" x1="890.24" y1="392.17" x2="995.49" y2="355.01" />
					<line class="cls-48" x1="908.62" y1="445.37" x2="1013.87" y2="408.21" />
					<line class="cls-48" x1="927" y1="498.57" x2="1032.25" y2="461.4" />
					<line class="cls-48" x1="945.38" y1="551.77" x2="1050.64" y2="514.6" />
					<line class="cls-48" x1="963.77" y1="604.96" x2="1069.02" y2="567.8" />
					<line class="cls-48" x1="982.15" y1="658.16" x2="1087.4" y2="621" />
					<line class="cls-48" x1="1000.53" y1="711.36" x2="1105.78" y2="674.2" />
					<line class="cls-48" x1="1018.91" y1="764.56" x2="1124.16" y2="727.39" />
					<line class="cls-48" x1="1037.29" y1="817.76" x2="1142.54" y2="780.59" />
					<line class="cls-48" x1="1055.68" y1="870.96" x2="1160.93" y2="833.79" />
					<line class="cls-48" x1="1074.06" y1="924.16" x2="1179.31" y2="886.99" />
					<line class="cls-48" x1="1092.44" y1="977.35" x2="1197.69" y2="940.19" />
					<line class="cls-48" x1="1110.82" y1="1030.55" x2="1216.07" y2="993.39" />
					<line class="cls-48" x1="1129.2" y1="1083.75" x2="1234.45" y2="1046.59" />
					<line class="cls-48" x1="1148.73" y1="1140.27" x2="1253.99" y2="1103.11" />
					<line class="cls-48" x1="1168.26" y1="1196.8" x2="1273.52" y2="1159.63" />
				</g>
			</g>
			<g id="ISLA_E" data-name="ISLA E">
				<g id="E-53" class="property__active" ng-class="manglar.inmovablesClassList[131]" ng-click="manglar.showPropertyData(49, '53')">
					<polyline id="E-L53" class="property pb-sprite-2"
						points="810.05 44.28 875.59 8 912.89 115.96 862.91 143.51 810.05 44.28" /><text class="cls-240"
						transform="matrix(0.87, -0.48, 0.48, 0.88, 837, 41.39)">
						<tspan class="cls-241">10.7</tspan>
						<tspan x="19.51" y="0">2</tspan>
					</text><text class="cls-242" transform="matrix(0.87, -0.48, 0.47, 0.88, 878.07, 131.67)">8.1<tspan
							class="cls-243" x="13.9" y="0">7</tspan></text><text class="cls-244"
						transform="matrix(0.47, 0.89, -0.88, 0.48, 834, 81.46)">
						<tspan class="cls-245">16.0</tspan>
						<tspan x="19.4" y="0">0</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 881.06, 53.81)">
						<tspan class="cls-228">16.2</tspan>
						<tspan x="19.37" y="0">3</tspan>
					</text><text class="cls-244" transform="matrix(0.47, 0.89, -0.88, 0.48, 847.53, 59.29)">
						<tspan class="cls-246">15</tspan>
						<tspan x="11.11" y="0">1.15 m2</tspan>
					</text><text class="cls-247" transform="matrix(0.42, 0.91, -0.9, 0.43, 866.48, 66.46)">53</text>
					<polyline class="cls-46" points="879.87 101.35 887.29 108.8 879.91 116.29 879.87 101.35" />
					<polyline class="cls-47" points="879.87 101.35 879.91 116.29 872.5 108.84 879.87 101.35" />
				</g>
				<g id="E-54" class="property__active" ng-class="manglar.inmovablesClassList[132]" ng-click="manglar.showPropertyData(49, '54')">
					<polyline id="E-L54" class="property pb-sprite-1"
						points="760.83 70.74 810.05 44.28 862.91 143.51 812.64 170.53 760.83 70.74" /><text
						class="cls-248" transform="matrix(0.88, -0.47, 0.46, 0.89, 781.99, 71.33)">8.0<tspan
							class="cls-249" x="13.9" y="0">0</tspan></text><text class="cls-250"
						transform="matrix(0.88, -0.47, 0.46, 0.89, 828.21, 159.2)">8.1<tspan class="cls-249" x="13.9"
							y="0">7</tspan></text><text class="cls-251"
						transform="matrix(0.46, 0.89, -0.88, 0.47, 784.4, 107.79)">
						<tspan class="cls-252">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-251" transform="matrix(0.46, 0.89, -0.88, 0.47, 795.87, 90.23)">
						<tspan class="cls-253">12</tspan>
						<tspan x="11.11" y="0">9.36 m2</tspan>
					</text><text class="cls-247" transform="matrix(0.42, 0.91, -0.9, 0.43, 815.85, 99.19)">54</text></g>
				<g id="E-55" class="property__active" ng-class="manglar.inmovablesClassList[133]" ng-click="manglar.showPropertyData(49, '55')">
					<polyline id="E-L55" class="property pb-sprite-2"
						points="711.33 96.66 760.83 70.74 812.64 170.53 762.09 197 711.33 96.66" /><text class="cls-254"
						transform="matrix(0.88, -0.46, 0.45, 0.89, 732.44, 97.42)">
						<tspan class="cls-255">8.0</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-254" transform="matrix(0.88, -0.46, 0.45, 0.89, 777.74, 185.78)">
						<tspan class="cls-255">8.1</tspan>
						<tspan x="13.91" y="0">7</tspan>
					</text><text class="cls-256" transform="matrix(0.45, 0.9, -0.89, 0.46, 734.84, 134.16)">
						<tspan class="cls-257">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-256" transform="matrix(0.45, 0.9, -0.89, 0.46, 744.68, 118.41)">
						<tspan class="cls-258">12</tspan>
						<tspan x="11.11" y="0">9.36 m2</tspan>
					</text><text class="cls-247" transform="matrix(0.42, 0.91, -0.9, 0.43, 765.44, 126.11)">55</text>
				</g>
				<g id="E-56" class="property__active" ng-class="manglar.inmovablesClassList[134]" ng-click="manglar.showPropertyData(49, '56')">
					<polyline id="E-L56" class="property pb-sprite-1"
						points="661.57 122.05 711.33 96.66 762.09 197 711.27 222.93 661.57 122.05" /><text
						class="cls-259" transform="matrix(0.89, -0.45, 0.45, 0.9, 682.59, 122.81)">8.0<tspan
							class="cls-260" x="13.91" y="0">0</tspan></text><text class="cls-259"
						transform="matrix(0.89, -0.45, 0.45, 0.9, 726.94, 211.65)">8.1<tspan class="cls-260" x="13.91"
							y="0">7</tspan></text><text class="cls-261"
						transform="matrix(0.44, 0.9, -0.89, 0.45, 683.66, 159.89)">
						<tspan class="cls-262">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-261" transform="matrix(0.44, 0.9, -0.89, 0.45, 694.83, 143.39)">
						<tspan class="cls-263">12</tspan>
						<tspan x="11.11" y="0">9.36 m2</tspan>
					</text><text class="cls-247" transform="matrix(0.42, 0.91, -0.9, 0.43, 714.51, 151.75)">56</text>
				</g>
				<g id="E-57" class="property__active" ng-class="manglar.inmovablesClassList[135]" ng-click="manglar.showPropertyData(49, '57')">
					<polyline id="E-L57" class="property pb-sprite-2"
						points="605.27 149.96 661.57 122.05 711.27 222.93 653.77 251.44 605.27 149.96" /><text
						class="cls-264" transform="matrix(0.89, -0.44, 0.44, 0.9, 629.52, 149.61)">
						<tspan class="cls-265">9.0</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-264" transform="matrix(0.89, -0.44, 0.44, 0.9, 672.88, 238.96)">
						<tspan class="cls-265">9.1</tspan>
						<tspan x="13.91" y="0">9</tspan>
					</text><text class="cls-266" transform="matrix(0.43, 0.91, -0.9, 0.44, 628.43, 187.74)">
						<tspan class="cls-267">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-268" transform="matrix(0.43, 0.91, -0.9, 0.44, 640.78, 167.07)">14<tspan
							class="cls-269" x="11.11" y="0">5.53 m2</tspan></text><text class="cls-270"
						transform="matrix(0.42, 0.91, -0.9, 0.43, 662.17, 175.8)">57</text>
					<polyline class="cls-46" points="674.62 209.17 682.01 216.64 674.62 224.11 674.62 209.17" />
					<polyline class="cls-47" points="674.62 209.17 674.62 224.11 667.23 216.64 674.62 209.17" />
				</g>
				<g id="DIVISIONES-5" data-name="DIVISIONES">
					<line class="cls-48" x1="711.27" y1="222.93" x2="661.57" y2="122.05" />
					<line class="cls-48" x1="762.09" y1="197" x2="711.33" y2="96.66" />
					<line class="cls-48" x1="812.64" y1="170.53" x2="760.83" y2="70.74" />
					<line class="cls-48" x1="862.91" y1="143.51" x2="810.05" y2="44.28" />
					<line class="cls-48" x1="604.79" y1="149.43" x2="652.9" y2="251.92" />
				</g>
			</g>
			<g id="ISLA_F" data-name="ISLA F">
				<g id="F-58" class="property__active" ng-class="manglar.inmovablesClassList[136]" ng-click="manglar.showPropertyData(49, '58')">
					<polyline id="F-L58" class="property pb-sprite-2"
						points="764.05 395.35 714.87 294.21 776.92 262.88 814.01 370.22 764.05 395.35" /><text
						class="cls-271" transform="matrix(0.89, -0.45, 0.44, 0.9, 741.84, 291.63)">
						<tspan class="cls-272">9.9</tspan>
						<tspan x="13.91" y="0">5</tspan>
					</text><text class="cls-87" transform="matrix(0.89, -0.45, 0.44, 0.9, 778.86, 384.08)">
						<tspan class="cls-273">8.0</tspan>
						<tspan x="13.91" y="0">1</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 782.37, 308.36)">
						<tspan class="cls-228">16.1</tspan>
						<tspan x="19.37" y="0">4</tspan>
					</text><text class="cls-274" transform="matrix(0.44, 0.91, -0.9, 0.44, 743.63, 315.64)">14<tspan
							class="cls-275" x="11.11" y="0">3.71 m2</tspan></text><text class="cls-276"
						transform="matrix(0.44, 0.91, -0.9, 0.44, 763.6, 322.94)">58</text>
					<polyline class="cls-46" points="752.49 292.67 759.88 300.14 752.49 307.61 752.49 292.67" />
					<polyline class="cls-47" points="752.49 292.67 752.49 307.61 745.1 300.14 752.49 292.67" />
				</g>
				<g id="F-59" class="property__active" ng-class="manglar.inmovablesClassList[137]" ng-click="manglar.showPropertyData(49, '59')">
					<polyline id="F-L59" class="property pb-sprite-1"
						points="764.05 395.35 709.65 422.01 661.57 320.33 714.87 294.21 764.05 395.35" /><text
						class="cls-277" transform="matrix(0.89, -0.44, 0.43, 0.9, 684.03, 320.56)">
						<tspan class="cls-278">8.5</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-277" transform="matrix(0.89, -0.44, 0.43, 0.9, 726.92, 410.02)">
						<tspan class="cls-278">8.6</tspan>
						<tspan x="13.91" y="0">7</tspan>
					</text><text class="cls-279" transform="matrix(0.44, 0.91, -0.9, 0.44, 724.71, 338.53)">16.0<tspan
							class="cls-275" x="19.39" y="0">0</tspan></text><text class="cls-280"
						transform="matrix(0.43, 0.91, -0.9, 0.43, 692.51, 341.77)">
						<tspan class="cls-281">13</tspan>
						<tspan x="11.11" y="0">7.40 m2</tspan>
					</text><text class="cls-282" transform="matrix(0.43, 0.91, -0.9, 0.43, 710.01, 348.15)">59</text>
				</g>
				<g id="F-60" class="property__active" ng-class="manglar.inmovablesClassList[138]" ng-click="manglar.showPropertyData(49, '60')">
					<polyline id="F-L60" class="property pb-sprite-2"
						points="654.98 448.06 608 345.85 661.57 320.33 709.65 422.01 654.98 448.06" /><text
						class="cls-283" transform="matrix(0.9, -0.43, 0.42, 0.91, 630.58, 346.42)">
						<tspan class="cls-284">8.5</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-283" transform="matrix(0.9, -0.43, 0.42, 0.91, 672.51, 436.35)">
						<tspan class="cls-284">8.6</tspan>
						<tspan x="13.91" y="0">7</tspan>
					</text><text class="cls-280" transform="matrix(0.43, 0.91, -0.9, 0.43, 670.82, 364.93)">
						<tspan class="cls-285">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-286" transform="matrix(0.42, 0.92, -0.91, 0.42, 638.35, 368.47)">
						<tspan class="cls-287">13</tspan>
						<tspan x="11.1" y="0">7.40 m2</tspan>
					</text><text class="cls-288" transform="matrix(0.42, 0.92, -0.91, 0.42, 655.4, 375.06)">60</text>
				</g>
				<g id="F-61" class="property__active" ng-class="manglar.inmovablesClassList[139]" ng-click="manglar.showPropertyData(49, '61')">
					<polyline id="F-L61" class="property pb-sprite-1"
						points="654.98 448.06 600.02 473.5 554.15 370.79 608 345.85 654.98 448.06" /><text
						class="cls-289" transform="matrix(0.9, -0.42, 0.41, 0.91, 576.69, 371.66)">8.5<tspan
							class="cls-290" x="13.91" y="0">0</tspan></text><text class="cls-289"
						transform="matrix(0.9, -0.42, 0.41, 0.91, 617.65, 462.04)">8.6<tspan class="cls-290" x="13.91"
							y="0">7</tspan></text><text class="cls-286"
						transform="matrix(0.42, 0.92, -0.91, 0.42, 616.35, 390.27)">
						<tspan class="cls-291">16.0</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-292" transform="matrix(0.41, 0.92, -0.91, 0.41, 584.4, 392.68)">13<tspan
							class="cls-293" x="11.1" y="0">7.40 m2</tspan></text><text class="cls-294"
						transform="matrix(0.41, 0.92, -0.91, 0.41, 598.59, 401.71)">61</text></g>
				<g id="F-62" class="property__active" ng-class="manglar.inmovablesClassList[140]" ng-click="manglar.showPropertyData(49, '62')">
					<polyline id="F-L62" class="property pb-sprite-2"
						points="544.82 498.33 500.06 395.11 554.18 370.77 600.05 473.49 544.82 498.33" /><text
						class="cls-295" transform="matrix(0.91, -0.41, 0.4, 0.92, 522.31, 395.84)">8.5<tspan
							class="cls-296" x="13.91" y="0">0</tspan></text><text class="cls-295"
						transform="matrix(0.91, -0.41, 0.4, 0.92, 562.29, 486.67)">8.6<tspan class="cls-296" x="13.91"
							y="0">7</tspan></text><text class="cls-297"
						transform="matrix(0.41, 0.92, -0.91, 0.41, 562.89, 415.05)">16.0<tspan class="cls-293" x="19.38"
							y="0">0</tspan></text><text class="cls-292"
						transform="matrix(0.41, 0.92, -0.91, 0.41, 532.38, 419.62)">13<tspan class="cls-293" x="11.1"
							y="0">7.40 m2</tspan></text><text class="cls-294"
						transform="matrix(0.41, 0.92, -0.91, 0.41, 550.65, 426.28)">62</text></g>
				<g id="F-63" class="property__active" ng-class="manglar.inmovablesClassList[141]" ng-click="manglar.showPropertyData(49, '63')">
					<polyline id="F-L63" class="property pb-sprite-1"
						points="489.32 522.55 445.69 418.84 500.06 395.11 544.82 498.33 489.32 522.55" /><text
						class="cls-298" transform="matrix(0.91, -0.4, 0.39, 0.92, 468.39, 420.17)">
						<tspan class="cls-299">8.5</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-298" transform="matrix(0.91, -0.4, 0.39, 0.92, 507.38, 511.45)">
						<tspan class="cls-299">8.6</tspan>
						<tspan x="13.91" y="0">7</tspan>
					</text><text class="cls-300" transform="matrix(0.4, 0.92, -0.91, 0.4, 506.95, 439.95)">16.0<tspan
							class="cls-301" x="19.38" y="0">0</tspan></text><text class="cls-302"
						transform="matrix(0.4, 0.92, -0.91, 0.4, 476.41, 442.87)">13<tspan class="cls-301" x="11.1"
							y="0">7.40 m2</tspan></text><text class="cls-303"
						transform="matrix(0.4, 0.92, -0.91, 0.4, 494.4, 451.04)">63</text></g>
				<g id="F-64" class="property__active" ng-class="manglar.inmovablesClassList[142]" ng-click="manglar.showPropertyData(49, '64')">
					<polyline id="F-L64" class="property pb-sprite-2"
						points="489.32 522.55 437.92 544.34 413.63 513.41 388.41 483.24 362.29 453.87 404.06 436.53 445.69 418.84 489.32 522.55" />
					<text class="cls-304" transform="matrix(0.92, -0.38, 0.38, 0.93, 396.47, 450.51)">12.9<tspan
							class="cls-305" x="19.53" y="0">6</tspan></text><text class="cls-306"
						transform="matrix(0.91, -0.39, 0.38, 0.92, 453.87, 534.24)">
						<tspan class="cls-307">8.0</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-308" transform="matrix(0.64, 0.77, -0.76, 0.65, 396.05, 486.81)">16.8<tspan
							class="cls-309" x="19.44" y="0">2</tspan></text><text class="cls-310"
						transform="matrix(0.39, 0.93, -0.92, 0.39, 451.89, 462.37)">
						<tspan class="cls-311">15.6</tspan>
						<tspan x="19.38" y="0">6</tspan>
					</text><text class="cls-310" transform="matrix(0.39, 0.93, -0.92, 0.39, 417.67, 465.98)">
						<tspan class="cls-312">16</tspan>
						<tspan x="11.1" y="0">5.51 m2</tspan>
					</text><text class="cls-313" transform="matrix(0.39, 0.93, -0.92, 0.39, 437.17, 476.44)">64</text>
					<polyline class="cls-46" points="414.47 449.21 421.86 456.68 414.47 464.15 414.47 449.21" />
					<polyline class="cls-47" points="414.47 449.21 414.47 464.15 407.08 456.68 414.47 449.21" />
				</g>
				<g id="F-65" class="property__active" ng-class="manglar.inmovablesClassList[143]" ng-click="manglar.showPropertyData(49, '65')">
					<polyline id="F-L65" class="property pb-sprite-2"
						points="509.03 647.94 486.44 612.63 462.73 578.09 437.92 544.34 512.11 512.69 560.34 625.9 509.03 647.94" />
					<text class="cls-2" transform="matrix(0.91, -0.39, 0.38, 0.92, 468.6, 544.54)">
						<tspan class="cls-314">11.5</tspan>
						<tspan x="19.53" y="0">6</tspan>
					</text><text class="cls-315" transform="matrix(0.91, -0.39, 0.39, 0.92, 524.55, 637.52)">
						<tspan class="cls-316">8.0</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-317" transform="matrix(0.57, 0.83, -0.82, 0.57, 470.51, 582.96)">
						<tspan class="cls-318">17.9</tspan>
						<tspan x="19.42" y="0">1</tspan>
					</text><text class="cls-4" transform="matrix(0.39, 0.93, -0.92, 0.4, 521.76, 562.45)">
						<tspan class="cls-5">17.5</tspan>
						<tspan x="19.38" y="0">0</tspan>
					</text><text class="cls-6" transform="matrix(0.39, 0.93, -0.92, 0.4, 489.12, 564.09)">16<tspan
							class="cls-7" x="11.1" y="0">8.50 m2</tspan></text><text class="cls-8"
						transform="matrix(0.39, 0.93, -0.92, 0.4, 504.73, 573.45)">65</text>
					<polyline class="cls-46" points="527.58 608.2 534.97 615.67 527.58 623.15 527.58 608.2" />
					<polyline class="cls-47" points="527.58 608.2 527.58 623.15 520.19 615.67 527.58 608.2" />
				</g>

				<g id="F-66" class="property__active" ng-class="manglar.inmovablesClassList[144]" ng-click="manglar.showPropertyData(49, '66')">
					<polyline id="F-L66" class="property pb-sprite-1"
						points="621.66 598.77 560.34 625.9 512.11 512.69 572.11 486.14 621.66 598.77" /><text
						class="cls-319" transform="matrix(0.91, -0.4, 0.4, 0.92, 538.28, 514.4)">9.4<tspan
							class="cls-320" x="13.91" y="0">0</tspan></text><text class="cls-319"
						transform="matrix(0.91, -0.4, 0.4, 0.92, 581.04, 613.18)">9.6<tspan class="cls-320" x="13.91"
							y="0">1</tspan></text><text class="cls-321"
						transform="matrix(0.4, 0.92, -0.91, 0.41, 581.84, 535.45)">17.5<tspan class="cls-322" x="19.38"
							y="0">0</tspan></text><text class="cls-323"
						transform="matrix(0.4, 0.92, -0.91, 0.41, 547.55, 535.79)">
						<tspan class="cls-324">16</tspan>
						<tspan x="11.1" y="0">6.31 m2</tspan>
					</text><text class="cls-325" transform="matrix(0.4, 0.92, -0.91, 0.41, 564.93, 541.83)">66</text>
					<polyline class="cls-46" points="582.57 584.83 589.96 592.3 582.57 599.77 582.57 584.83" />
					<polyline class="cls-47" points="582.57 584.83 582.57 599.77 575.18 592.3 582.57 584.83" />
				</g>
				<g id="F-67" class="property__active" ng-class="manglar.inmovablesClassList[145]" ng-click="manglar.showPropertyData(49, '67')">
					<polyline id="F-L67" class="property pb-sprite-2"
						points="572.11 486.14 631.8 458.88 682.67 570.91 621.66 598.77 572.11 486.14" /><text
						class="cls-326" transform="matrix(0.9, -0.41, 0.41, 0.91, 598.07, 487.54)">
						<tspan class="cls-327">9.4</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-326" transform="matrix(0.9, -0.41, 0.41, 0.91, 641.99, 585.78)">
						<tspan class="cls-327">9.6</tspan>
						<tspan x="13.91" y="0">1</tspan>
					</text><text class="cls-328" transform="matrix(0.42, 0.92, -0.91, 0.42, 642.88, 508.23)">
						<tspan class="cls-329">17.5</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-323" transform="matrix(0.4, 0.92, -0.91, 0.41, 605.41, 510.84)">
						<tspan class="cls-324">16</tspan>
						<tspan x="11.1" y="0">6.31 m2</tspan>
					</text><text class="cls-330" transform="matrix(0.42, 0.92, -0.91, 0.42, 623.07, 515.52)">67</text>
					<polyline class="cls-46" points="642 556.5 649.39 563.97 642 571.44 642 556.5" />
					<polyline class="cls-47" points="642 556.5 642 571.44 634.61 563.97 642 556.5" />
				</g>
				<g id="F-68" class="property__active" ng-class="manglar.inmovablesClassList[146]" ng-click="manglar.showPropertyData(49, '68')">
					<polyline id="F-L68" class="property pb-sprite-1"
						points="682.67 570.91 631.8 458.88 654.98 448.06 691.16 430.9 743.34 542.31 682.67 570.91" />
					<text class="cls-331" transform="matrix(0.9, -0.42, 0.42, 0.91, 658.1, 459.9)">
						<tspan class="cls-332">9.4</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-331" transform="matrix(0.9, -0.42, 0.42, 0.91, 703.17, 557.61)">
						<tspan class="cls-332">9.6</tspan>
						<tspan x="13.91" y="0">1</tspan>
					</text><text class="cls-333" transform="matrix(0.43, 0.91, -0.9, 0.43, 701.57, 480.34)">17.5<tspan
							class="cls-334" x="19.39" y="0">0</tspan></text><text class="cls-328"
						transform="matrix(0.42, 0.92, -0.91, 0.42, 667.3, 482.67)">
						<tspan class="cls-335">16</tspan>
						<tspan x="11.1" y="0">6.31 m2</tspan>
					</text><text class="cls-336" transform="matrix(0.43, 0.91, -0.9, 0.43, 685, 489.46)">68</text>
					<polyline class="cls-46" points="704.64 526.36 712.03 533.83 704.64 541.3 704.64 526.36" />
					<polyline class="cls-47" points="704.64 526.36 704.64 541.3 697.25 533.83 704.64 526.36" />
				</g>
				<g id="F-69" class="property__active" ng-class="manglar.inmovablesClassList[147]" ng-click="manglar.showPropertyData(49, '69')">
					<polyline id="F-L69" class="property pb-sprite-2"
						points="691.16 430.9 709.65 422.01 750.19 402.21 803.68 512.99 743.34 542.31 691.16 430.9" />
					<text class="cls-337" transform="matrix(0.89, -0.43, 0.43, 0.9, 717.52, 431.67)">
						<tspan class="cls-338">9.4</tspan>
						<tspan x="13.91" y="0">0</tspan>
					</text><text class="cls-337" transform="matrix(0.89, -0.43, 0.43, 0.9, 763.73, 528.85)">
						<tspan class="cls-338">9.6</tspan>
						<tspan x="13.91" y="0">1</tspan>
					</text><text class="cls-339" transform="matrix(0.44, 0.91, -0.9, 0.44, 761.25, 451.34)">
						<tspan class="cls-340">17.5</tspan>
						<tspan x="19.39" y="0">0</tspan>
					</text><text class="cls-341" transform="matrix(0.43, 0.91, -0.9, 0.43, 726.63, 456.05)">
						<tspan class="cls-342">16</tspan>
						<tspan x="11.11" y="0">6.31 m2</tspan>
					</text><text class="cls-343" transform="matrix(0.44, 0.91, -0.9, 0.44, 744.71, 464.1)">69</text>
					<polyline class="cls-46" points="764.82 498.93 772.22 506.4 764.82 513.87 764.82 498.93" />
					<polyline class="cls-47" points="764.82 498.93 764.82 513.87 757.43 506.4 764.82 498.93" />
				</g>
				<g id="F-70" class="property__active" ng-class="manglar.inmovablesClassList[148]" ng-click="manglar.showPropertyData(49, '70')">
					<polyline id="F-L70" class="property pb-sprite-1"
						points="803.68 512.99 750.19 402.21 814.01 370.22 854.56 487.57 803.68 512.99" /><text
						class="cls-344" transform="matrix(0.89, -0.44, 0.44, 0.9, 776.65, 402.94)">
						<tspan class="cls-345">10.2</tspan>
						<tspan x="19.52" y="0">2</tspan>
					</text><text class="cls-346" transform="matrix(0.89, -0.44, 0.44, 0.9, 819.3, 501.89)">8.1<tspan
							class="cls-347" x="13.91" y="0">5</tspan></text><text class="cls-227"
						transform="matrix(0.33, 0.95, -0.94, 0.33, 821.18, 420.7)">
						<tspan class="cls-228">17.6</tspan>
						<tspan x="19.37" y="0">5</tspan>
					</text><text class="cls-339" transform="matrix(0.44, 0.91, -0.9, 0.44, 788.35, 428.44)">
						<tspan class="cls-348">16</tspan>
						<tspan x="11.11" y="0">0.73 m2</tspan>
					</text><text class="cls-343" transform="matrix(0.44, 0.91, -0.9, 0.44, 806.41, 435.82)">70</text>
					<polyline class="cls-46" points="820.6 471.16 827.99 478.63 820.6 486.1 820.6 471.16" />
					<polyline class="cls-47" points="820.6 471.16 820.6 486.1 813.21 478.63 820.6 471.16" />
				</g>
				<g id="DIVISIONES-6" data-name="DIVISIONES">
					<line class="cls-48" x1="445.69" y1="418.84" x2="489.32" y2="522.55" />
					<line class="cls-48" x1="512.11" y1="512.69" x2="560.34" y2="625.91" />
					<line class="cls-48" x1="500.06" y1="395.1" x2="544.82" y2="498.33" />
					<line class="cls-48" x1="554.18" y1="370.77" x2="600.05" y2="473.49" />
					<line class="cls-48" x1="608" y1="345.85" x2="654.98" y2="448.06" />
					<line class="cls-48" x1="661.57" y1="320.33" x2="709.65" y2="422.01" />
					<line class="cls-48" x1="714.87" y1="294.21" x2="764.05" y2="395.35" />
					<line class="cls-48" x1="572.11" y1="486.14" x2="621.66" y2="598.77" />
					<line class="cls-48" x1="631.8" y1="458.88" x2="682.67" y2="570.91" />
					<line class="cls-48" x1="691.16" y1="430.9" x2="743.34" y2="542.31" />
					<line class="cls-48" x1="750.2" y1="402.21" x2="803.68" y2="512.99" />
					<path class="cls-48" d="M814.89,367.18Q630.14,461.32,438.8,541.31"
						transform="translate(-0.88 3.04)" />
				</g>
			</g>
			<g id="ISLA_G" data-name="ISLA G">
				<g id="G-71" class="property__active" ng-class="manglar.inmovablesClassList[149]" ng-click="manglar.showPropertyData(49, '71')">
					<polyline id="G-L71" class="property pb-sprite-1"
						points="765.66 604.11 821.04 577.35 876.13 549.99 899.16 616.66 784.04 657.3 765.66 604.11" />
					<text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 875.31, 574.82)">
						<tspan class="cls-228">10.0</tspan>
						<tspan x="19.37" y="0">4</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 774.85, 620.8)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">0</tspan>
					</text><text class="cls-277" transform="matrix(0.89, -0.44, 0.43, 0.9, 814.26, 591.51)">
						<tspan class="cls-349">17.6</tspan>
						<tspan x="19.52" y="0">2</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 815.43, 623.26)">
						<tspan class="cls-236">15</tspan>
						<tspan x="11.19" y="0">7.15 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 826.4, 606.32)">71</text>
					<polyline class="cls-46" points="869.34 583.69 876.73 591.16 869.34 598.63 869.34 583.69" />
					<polyline class="cls-47" points="869.34 583.69 869.34 598.63 861.95 591.16 869.34 583.69" />
				</g>
				<g id="G-72" class="property__active" ng-class="manglar.inmovablesClassList[150]" ng-click="manglar.showPropertyData(49, '72')">
					<polyline id="G-L72" class="property pb-sprite-2"
						points="805.14 718.35 784.04 657.3 899.16 616.66 920.26 677.7 805.14 718.35" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 898.3, 641.31)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 794.59, 677.93)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 833.92, 651.63)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 833.47, 682.16)">
						<tspan class="cls-236">16</tspan>
						<tspan x="11.19" y="0">0.65 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 844.68, 666.04)">72</text>
					<polyline class="cls-46" points="887.84 643.97 895.22 651.44 887.84 658.91 887.84 643.97" />
					<polyline class="cls-47" points="887.84 643.97 887.84 658.91 880.44 651.44 887.84 643.97" />
				</g>
				<g id="G-73" class="property__active" ng-class="manglar.inmovablesClassList[151]" ng-click="manglar.showPropertyData(49, '73')">
					<polyline id="G-L73" class="property pb-sprite-1"
						points="826.23 779.39 805.14 718.35 920.26 677.7 941.35 738.74 826.23 779.39" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 919.38, 702.36)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 815.68, 738.97)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 854.56, 711.34)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 854.55, 743.2)">
						<tspan class="cls-236">16</tspan>
						<tspan x="11.19" y="0">0.65 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 866.51, 725.13)">73</text>
					<polyline class="cls-46" points="911.34 707.33 918.74 714.8 911.34 722.28 911.34 707.33" />
					<polyline class="cls-47" points="911.34 707.33 911.34 722.28 903.96 714.8 911.34 707.33" />
				</g>
				<g id="G-74" class="property__active" ng-class="manglar.inmovablesClassList[152]" ng-click="manglar.showPropertyData(49, '74')">
					<polyline id="G-L74" class="property pb-sprite-2"
						points="847.33 840.44 826.23 779.39 941.35 738.74 962.45 799.79 847.33 840.44" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 940.48, 763.4)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 836.78, 800.02)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 876.07, 773.57)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 875.65, 804.24)">
						<tspan class="cls-236">16</tspan>
						<tspan x="11.19" y="0">0.65 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 888.29, 787.58)">74</text>
					<polyline class="cls-46" points="932.91 765.93 940.31 773.4 932.91 780.88 932.91 765.93" />
					<polyline class="cls-47" points="932.91 765.93 932.91 780.88 925.53 773.4 932.91 765.93" />
				</g>
				<g id="G-75" class="property__active" ng-class="manglar.inmovablesClassList[153]" ng-click="manglar.showPropertyData(49, '75')">
					<polyline id="G-L75" class="property pb-sprite-1"
						points="868.42 901.48 847.33 840.44 962.45 799.79 983.54 860.84 868.42 901.48" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 961.57, 824.45)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 857.86, 861.06)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 896.7, 833.32)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 896.74, 865.29)">
						<tspan class="cls-236">16</tspan>
						<tspan x="11.19" y="0">0.65 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 909.7, 850.03)">75</text>
					<polyline class="cls-46" points="953.39 826.89 960.78 834.36 953.39 841.84 953.39 826.89" />
					<polyline class="cls-47" points="953.39 826.89 953.39 841.84 946 834.36 953.39 826.89" />
				</g>
				<g id="G-76" class="property__active" ng-class="manglar.inmovablesClassList[154]" ng-click="manglar.showPropertyData(49, '76')">
					<polyline id="G-L76" class="property pb-sprite-2"
						points="889.51 962.53 868.42 901.48 983.54 860.84 1004.63 921.88 889.51 962.53" /><text
						class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 982.66, 885.49)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 878.96, 922.11)">
						<tspan class="cls-233">9.1</tspan>
						<tspan x="13.8" y="0">8</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 917.65, 893.89)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 917.85, 926.35)">
						<tspan class="cls-236">16</tspan>
						<tspan x="11.19" y="0">0.65 m2</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 927.95, 909.82)">76</text>
					<polyline class="cls-46" points="974.53 887.24 981.92 894.7 974.53 902.18 974.53 887.24" />
					<polyline class="cls-47" points="974.53 887.24 974.53 902.18 967.14 894.7 974.53 887.24" />
				</g>
				<g id="G-77" class="property__active" ng-class="manglar.inmovablesClassList[155]" ng-click="manglar.showPropertyData(49, '77')">
					<polyline id="G-L77" class="property pb-sprite-1"
						points="889.51 962.53 1004.63 921.88 1025.88 983.39 966.83 999.32 907.95 1015.9 889.51 962.53" />
					<text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 937.25, 984.04)">
						<tspan class="cls-236">15</tspan>
						<tspan x="11.19" y="0">0.61 m2</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1003.84, 946.77)">
						<tspan class="cls-233">9.2</tspan>
						<tspan x="13.8" y="0">5</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 898.72, 979.32)">
						<tspan class="cls-233">8.0</tspan>
						<tspan x="13.8" y="0">3</tspan>
					</text><text class="cls-350" transform="matrix(0.96, -0.26, 0.26, 0.97, 954.12, 998.66)">
						<tspan class="cls-351">17.5</tspan>
						<tspan x="19.55" y="0">4</tspan>
					</text><text class="cls-234" transform="matrix(0.94, -0.33, 0.33, 0.95, 938.98, 955.64)">
						<tspan class="cls-235">17.5</tspan>
						<tspan x="19.54" y="0">0</tspan>
					</text><text class="cls-237" transform="matrix(0.94, -0.33, 0.33, 0.95, 950.2, 968.78)">77</text>
					<polyline class="cls-46" points="994.98 948 1002.37 955.47 994.98 962.94 994.98 948" />
					<polyline class="cls-47" points="994.98 948 994.98 962.94 987.59 955.47 994.98 948" />
				</g>
				<g id="DIVISIONES-7" data-name="DIVISIONES">
					<line class="cls-48" x1="784.04" y1="657.3" x2="899.16" y2="616.66" />
					<line class="cls-48" x1="805.14" y1="718.35" x2="920.26" y2="677.7" />
					<line class="cls-48" x1="826.23" y1="779.39" x2="941.35" y2="738.74" />
					<line class="cls-48" x1="847.32" y1="840.44" x2="962.44" y2="799.79" />
					<line class="cls-48" x1="983.54" y1="860.84" x2="868.42" y2="901.48" />
					<line class="cls-48" x1="1004.63" y1="921.88" x2="889.51" y2="962.53" />
					<line class="cls-352" x1="907.95" y1="1015.9" x2="765.66" y2="604.11" />
				</g>
			</g>
			<g id="ISLA_H" data-name="ISLA H">
				<g id="H-78" class="property__active" ng-class="manglar.inmovablesClassList[156]" ng-click="manglar.showPropertyData(49, '78')">
					<polyline id="H-L78" class="property pb-sprite-1"
						points="993.44 1059.89 1047.32 1045.43 1087.67 1162.2 1031.2 1177.27 1025.33 1178.87 993.44 1059.89" />
					<text class="cls-353" transform="matrix(0.96, -0.26, 0.25, 0.97, 1013.89, 1065)">
						<tspan class="cls-354">8.0</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-353" transform="matrix(0.96, -0.26, 0.25, 0.97, 1046.66, 1170.09)">
						<tspan class="cls-354">9.2</tspan>
						<tspan x="13.93" y="0">5</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1053.74, 1095.85)">
						<tspan class="cls-228">17.5</tspan>
						<tspan x="19.37" y="0">6</tspan>
					</text><text class="cls-355" transform="matrix(0.26, 0.98, -0.96, 0.26, 1018.36, 1091.19)">
						<tspan class="cls-356">15</tspan>
						<tspan x="11.09" y="0">0.98 m2</tspan>
					</text><text class="cls-357" transform="matrix(0.26, 0.98, -0.96, 0.26, 1035.25, 1106.33)">78</text>
					<polyline class="cls-46" points="1023.88 1067.38 1031.27 1074.85 1023.88 1082.32 1023.88 1067.38" />
					<polyline class="cls-47" points="1023.88 1067.38 1023.88 1082.32 1016.49 1074.85 1023.88 1067.38" />
				</g>
				<g id="H-79" class="property__active" ng-class="manglar.inmovablesClassList[157]" ng-click="manglar.showPropertyData(49, '79')">
					<polyline id="H-L79" class="property pb-sprite-2"
						points="993.44 1059.89 1025.33 1178.87 966.09 1195.45 963.75 1196.12 930.49 1077.53 993.44 1059.89" />
					<text class="cls-358" transform="matrix(0.95, -0.27, 0.26, 0.96, 955.76, 1081.26)">
						<tspan class="cls-359">9.3</tspan>
						<tspan x="13.93" y="0">8</tspan>
					</text><text class="cls-358" transform="matrix(0.95, -0.27, 0.26, 0.96, 984.85, 1187.33)">
						<tspan class="cls-359">9.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-355" transform="matrix(0.26, 0.98, -0.96, 0.26, 994.7, 1110.48)">
						<tspan class="cls-360">17.5</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-361" transform="matrix(0.27, 0.97, -0.96, 0.28, 959.08, 1111.78)">16<tspan
							class="cls-362" x="11.09" y="0">2.27 m2</tspan></text><text class="cls-363"
						transform="matrix(0.27, 0.97, -0.96, 0.28, 974.6, 1120.84)">79</text>
					<polyline class="cls-46" points="966.26 1083.64 973.65 1091.11 966.26 1098.58 966.26 1083.64" />
					<polyline class="cls-47" points="966.26 1083.64 966.26 1098.58 958.87 1091.11 966.26 1083.64" />
				</g>
				<g id="H-80" class="property__active" ng-class="manglar.inmovablesClassList[158]" ng-click="manglar.showPropertyData(49, '80')">
					<polyline id="H-L80" class="property pb-sprite-1"
						points="867.75 1095.91 930.49 1077.53 963.75 1196.12 902.37 1214.1 867.75 1095.91" /><text
						class="cls-364" transform="matrix(0.95, -0.28, 0.27, 0.96, 893.11, 1099.39)">
						<tspan class="cls-365">9.3</tspan>
						<tspan x="13.93" y="0">8</tspan>
					</text><text class="cls-364" transform="matrix(0.95, -0.28, 0.27, 0.96, 923.42, 1205.11)">
						<tspan class="cls-365">9.1</tspan>
						<tspan x="13.93" y="0">7</tspan>
					</text><text class="cls-366" transform="matrix(0.27, 0.97, -0.96, 0.28, 933.58, 1128.01)">
						<tspan class="cls-367">17.5</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-361" transform="matrix(0.27, 0.97, -0.96, 0.28, 899.8, 1125.16)">16<tspan
							class="cls-362" x="11.09" y="0">2.27 m2</tspan></text><text class="cls-363"
						transform="matrix(0.27, 0.97, -0.96, 0.28, 916.64, 1135.86)">80</text>
					<polyline class="cls-46" points="905.39 1100.6 912.78 1108.07 905.39 1115.54 905.39 1100.6" />
					<polyline class="cls-47" points="905.39 1100.6 905.39 1115.54 898 1108.07 905.39 1100.6" />
				</g>
				<g id="H-81" class="property__active" ng-class="manglar.inmovablesClassList[159]" ng-click="manglar.showPropertyData(49, '81')">
					<polyline id="H-L81" class="property pb-sprite-2"
						points="805.22 1115.03 867.75 1095.91 902.37 1214.1 841.21 1232.8 805.22 1115.03" /><text
						class="cls-368" transform="matrix(0.95, -0.29, 0.29, 0.96, 830.34, 1118.27)">9.3<tspan
							class="cls-369" x="13.92" y="0">8</tspan></text><text class="cls-368"
						transform="matrix(0.95, -0.29, 0.29, 0.96, 861.87, 1223.64)">9.1<tspan class="cls-369" x="13.92"
							y="0">7</tspan></text><text class="cls-370"
						transform="matrix(0.28, 0.97, -0.96, 0.29, 871.45, 1145.96)">
						<tspan class="cls-371">17.5</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-370" transform="matrix(0.28, 0.97, -0.96, 0.29, 838.03, 1147.13)">
						<tspan class="cls-372">16</tspan>
						<tspan x="11.09" y="0">2.27 m2</tspan>
					</text><text class="cls-373" transform="matrix(0.29, 0.97, -0.95, 0.3, 853.8, 1155.43)">81</text>
					<polyline class="cls-46" points="841.74 1120.3 849.13 1127.77 841.74 1135.24 841.74 1120.3" />
					<polyline class="cls-47" points="841.74 1120.3 841.74 1135.24 834.35 1127.77 841.74 1120.3" />
				</g>
				<g id="H-82" class="property__active" ng-class="manglar.inmovablesClassList[160]" ng-click="manglar.showPropertyData(49, '82')">
					<polyline id="H-L82" class="property pb-sprite-1"
						points="742.93 1134.88 805.22 1115.03 841.21 1232.8 836.46 1234.29 780.27 1252.22 742.93 1134.88" />
					<text class="cls-374" transform="matrix(0.94, -0.3, 0.3, 0.96, 768.1, 1137.77)">
						<tspan class="cls-375">9.3</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-374" transform="matrix(0.94, -0.3, 0.3, 0.96, 800.84, 1242.75)">
						<tspan class="cls-375">9.1</tspan>
						<tspan x="13.92" y="0">7</tspan>
					</text><text class="cls-376" transform="matrix(0.29, 0.97, -0.95, 0.3, 808.62, 1165.36)">
						<tspan class="cls-377">17.5</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-378" transform="matrix(0.29, 0.97, -0.95, 0.3, 775.09, 1165.83)">16<tspan
							class="cls-379" x="11.09" y="0">2.25 m2</tspan></text><text class="cls-380"
						transform="matrix(0.31, 0.96, -0.95, 0.31, 792.92, 1176.79)">82</text>
					<polyline class="cls-46" points="779.68 1139.23 787.07 1146.71 779.68 1154.18 779.68 1139.23" />
					<polyline class="cls-47" points="779.68 1139.23 779.68 1154.18 772.29 1146.71 779.68 1139.23" />
				</g>
				<g id="H-83" class="property__active" ng-class="manglar.inmovablesClassList[161]" ng-click="manglar.showPropertyData(49, '83')">
					<polyline id="H-L83" class="property pb-sprite-2"
						points="701.06 1278.66 699.44 1247 697.04 1215.39 693.88 1183.85 689.95 1152.4 742.93 1134.88 780.27 1252.22 772.04 1254.9 701.06 1278.66" />
					<text class="cls-381" transform="matrix(0.94, -0.31, 0.31, 0.95, 710.95, 1156.73)">
						<tspan class="cls-382">8.0</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-383" transform="matrix(0.94, -0.31, 0.31, 0.95, 727.95, 1266.57)">
						<tspan class="cls-384">11.9</tspan>
						<tspan x="19.54" y="0">7</tspan>
					</text><text class="cls-385" transform="matrix(0.31, 0.96, -0.95, 0.31, 746.2, 1185.64)">
						<tspan class="cls-386">17.5</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-387" transform="matrix(0.09, 1.01, -1, 0.09, 699.74, 1202.44)">18.0<tspan
							class="cls-388" x="19.35" y="0">0</tspan></text><text class="cls-385"
						transform="matrix(0.31, 0.96, -0.95, 0.31, 714.6, 1187.78)">
						<tspan class="cls-389">17</tspan>
						<tspan x="11.1" y="0">2.09 m2</tspan>
					</text><text class="cls-380" transform="matrix(0.31, 0.96, -0.95, 0.31, 731.21, 1196.7)">83</text>
					<polyline class="cls-46" points="721.77 1158.93 729.16 1166.41 721.77 1173.88 721.77 1158.93" />
					<polyline class="cls-47" points="721.77 1158.93 721.77 1173.88 714.38 1166.41 721.77 1158.93" />
				</g>
				<g id="H-84" class="property__active" ng-class="manglar.inmovablesClassList[162]" ng-click="manglar.showPropertyData(49, '84')">
					<polyline id="H-L84" class="property pb-sprite-1"
						points="702.03 1323.18 701.74 1300.91 701.06 1278.66 772.04 1254.9 806.35 1362.14 753.04 1379.88 702.03 1323.18" />
					<text class="cls-383" transform="matrix(0.94, -0.31, 0.31, 0.95, 769.63, 1371.53)">
						<tspan class="cls-390">8.0</tspan>
						<tspan x="13.92" y="0">5</tspan>
					</text><text class="cls-391" transform="matrix(0.94, -0.31, 0.31, 0.95, 728.39, 1281.14)">10.7<tspan
							class="cls-168" x="19.54" y="0">3</tspan></text><text class="cls-392"
						transform="matrix(0.31, 0.96, -0.95, 0.31, 776.73, 1299.38)">
						<tspan class="cls-393">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-394" transform="matrix(0.67, 0.75, -0.74, 0.68, 723.23, 1338.83)">
						<tspan class="cls-395">10.9</tspan>
						<tspan x="19.44" y="0">5</tspan>
					</text><text class="cls-396" transform="matrix(0.02, 1.01, -1, 0.02, 705.58, 1304.94)">2</text><text
						class="cls-396" transform="matrix(0.02, 1.01, -1, 0.02, 705.46, 1299.47)">3</text><text
						class="cls-396" transform="matrix(0.02, 1.01, -1, 0.02, 705.41, 1296.75)">.</text><text
						class="cls-396" transform="matrix(0.02, 1.01, -1, 0.02, 705.3, 1291.27)">6</text><text
						class="cls-392" transform="matrix(0.31, 0.96, -0.95, 0.31, 739.45, 1298.46)">
						<tspan class="cls-397">17</tspan>
						<tspan x="11.1" y="0">2.74 m2</tspan>
					</text><text class="cls-398" transform="matrix(0.31, 0.96, -0.95, 0.31, 757.49, 1306.45)">84</text>
					<polyline class="cls-46" points="773.74 1342.72 781.13 1350.2 773.74 1357.66 773.74 1342.72" />
					<polyline class="cls-47" points="773.74 1342.72 773.74 1357.66 766.35 1350.2 773.74 1342.72" />
				</g>
				<g id="H-85" class="property__active" ng-class="manglar.inmovablesClassList[163]" ng-click="manglar.showPropertyData(49, '85')">
					<polyline id="H-L85" class="property pb-sprite-2"
						points="806.29 1362.16 772 1254.92 836.46 1234.29 869.39 1341.96 806.29 1362.16" /><text
						class="cls-105" transform="matrix(0.94, -0.3, 0.3, 0.95, 828.36, 1352.6)">
						<tspan class="cls-399">9.5</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-105" transform="matrix(0.94, -0.3, 0.3, 0.95, 798.71, 1257.9)">
						<tspan class="cls-399">9.7</tspan>
						<tspan x="13.92" y="0">0</tspan>
					</text><text class="cls-400" transform="matrix(0.3, 0.96, -0.95, 0.3, 839.49, 1279.52)">
						<tspan class="cls-401">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-392" transform="matrix(0.31, 0.96, -0.95, 0.31, 801.36, 1274.51)">
						<tspan class="cls-397">15</tspan>
						<tspan x="11.1" y="0">3.61 m2</tspan>
					</text><text class="cls-204" transform="matrix(0.26, 0.98, -0.97, 0.26, 820.16, 1287.88)">85</text>
				</g>
				<g id="H-86" class="property__active" ng-class="manglar.inmovablesClassList[164]" ng-click="manglar.showPropertyData(49, '86')">
					<polyline id="H-L86" class="property pb-sprite-1"
						points="869.46 1341.94 836.46 1234.29 901.15 1214.47 932.8 1322.53 869.46 1341.94" /><text
						class="cls-368" transform="matrix(0.95, -0.29, 0.29, 0.96, 891.27, 1332.59)">9.5<tspan
							class="cls-369" x="13.92" y="0">0</tspan></text><text class="cls-368"
						transform="matrix(0.95, -0.29, 0.29, 0.96, 862.77, 1237.55)">9.7<tspan class="cls-369" x="13.92"
							y="0">0</tspan></text><text class="cls-370"
						transform="matrix(0.28, 0.97, -0.96, 0.29, 903.13, 1259.52)">
						<tspan class="cls-371">16.0</tspan>
						<tspan x="19.37" y="0">0</tspan>
					</text><text class="cls-400" transform="matrix(0.3, 0.96, -0.95, 0.3, 867.11, 1256.55)">
						<tspan class="cls-402">15</tspan>
						<tspan x="11.09" y="0">3.61 m2</tspan>
					</text><text class="cls-403" transform="matrix(0.28, 0.97, -0.96, 0.29, 882.74, 1266.01)">86</text>
				</g>
				<g id="H-87" class="property__active" ng-class="manglar.inmovablesClassList[165]" ng-click="manglar.showPropertyData(49, '87')">
					<polyline id="H-L87" class="property pb-sprite-2"
						points="932.8 1322.53 901.15 1214.47 966.09 1195.45 996.39 1303.91 932.8 1322.53" /><text
						class="cls-364" transform="matrix(0.95, -0.28, 0.27, 0.96, 955.01, 1313.41)">
						<tspan class="cls-365">9.5</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-364" transform="matrix(0.95, -0.28, 0.27, 0.96, 927.71, 1217.98)">
						<tspan class="cls-365">9.7</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-404" transform="matrix(0.27, 0.97, -0.96, 0.27, 967.97, 1240.53)">16.0<tspan
							class="cls-405" x="19.36" y="0">0</tspan></text><text class="cls-370"
						transform="matrix(0.28, 0.97, -0.96, 0.29, 929.86, 1234.82)">
						<tspan class="cls-372">15</tspan>
						<tspan x="11.09" y="0">3.61 m2</tspan>
					</text><text class="cls-406" transform="matrix(0.27, 0.97, -0.96, 0.27, 946.8, 1245.46)">87</text>
				</g>
				<g id="H-88" class="property__active" ng-class="manglar.inmovablesClassList[166]" ng-click="manglar.showPropertyData(49, '88')">
					<polyline id="H-L88" class="property pb-sprite-1"
						points="996.39 1303.91 966.09 1195.45 1031.2 1177.27 1060.19 1286.09 996.39 1303.91" /><text
						class="cls-358" transform="matrix(0.95, -0.27, 0.26, 0.96, 1018.65, 1295.01)">
						<tspan class="cls-359">9.5</tspan>
						<tspan x="13.93" y="0">0</tspan>
					</text><text class="cls-407"
						transform="matrix(0.95, -0.27, 0.26, 0.96, 992.53, 1199.25)">9.70</text><text class="cls-408"
						transform="matrix(0.26, 0.98, -0.97, 0.26, 1031.89, 1222.92)">
						<tspan class="cls-409">16.0</tspan>
						<tspan x="19.36" y="0">0</tspan>
					</text><text class="cls-408" transform="matrix(0.26, 0.98, -0.97, 0.26, 995.39, 1216.36)">
						<tspan class="cls-410">15</tspan>
						<tspan x="11.09" y="0">3.61 m2</tspan>
					</text><text class="cls-204" transform="matrix(0.26, 0.98, -0.97, 0.26, 1011.86, 1228.64)">88</text>
				</g>
				<g id="H-89" class="property__active" ng-class="manglar.inmovablesClassList[167]" ng-click="manglar.showPropertyData(49, '89')">
					<polyline id="H-L89" class="property pb-sprite-2"
						points="1060.19 1286.09 1031.2 1177.27 1087.67 1162.2 1124.56 1268.97 1060.19 1286.09" /><text
						class="cls-411" transform="matrix(0.96, -0.25, 0.25, 0.97, 1082.71, 1277.56)">
						<tspan class="cls-412">9.5</tspan>
						<tspan x="13.93" y="0">5</tspan>
					</text><text class="cls-411" transform="matrix(0.96, -0.25, 0.25, 0.97, 1053.16, 1182.74)">
						<tspan class="cls-412">8.3</tspan>
						<tspan x="13.93" y="0">8</tspan>
					</text><text class="cls-227" transform="matrix(0.33, 0.95, -0.94, 0.33, 1092.39, 1207.68)">
						<tspan class="cls-228">16.0</tspan>
						<tspan x="19.37" y="0">7</tspan>
					</text><text class="cls-408" transform="matrix(0.26, 0.98, -0.97, 0.26, 1054.21, 1203.45)">
						<tspan class="cls-410">14</tspan>
						<tspan x="11.09" y="0">3.47 m2</tspan>
					</text><text class="cls-204" transform="matrix(0.26, 0.98, -0.97, 0.26, 1071.78, 1213.97)">89</text>
					<polyline class="cls-46" points="1088.29 1249.39 1095.68 1256.86 1088.29 1264.33 1088.29 1249.39" />
					<polyline class="cls-47" points="1088.29 1249.39 1088.29 1264.33 1080.9 1256.86 1088.29 1249.39" />
				</g>
				<g id="DIVISIONES-8" data-name="DIVISIONES">
					<line class="cls-48" x1="772.04" y1="1254.91" x2="806.35" y2="1362.14" />
					<line class="cls-48" x1="1025.33" y1="1178.87" x2="993.44" y2="1059.89" />
					<line class="cls-48" x1="963.75" y1="1196.12" x2="930.49" y2="1077.53" />
					<line class="cls-48" x1="841.21" y1="1232.8" x2="805.22" y2="1115.03" />
					<line class="cls-48" x1="902.37" y1="1214.1" x2="867.75" y2="1095.91" />
					<line class="cls-48" x1="780.27" y1="1252.22" x2="742.93" y2="1134.88" />
					<line class="cls-48" x1="836.46" y1="1234.29" x2="869.46" y2="1341.94" />
					<line class="cls-48" x1="901.15" y1="1214.47" x2="932.8" y2="1322.53" />
					<line class="cls-48" x1="1031.21" y1="1177.27" x2="1060.19" y2="1286.09" />
					<line class="cls-48" x1="966.09" y1="1195.45" x2="996.39" y2="1303.91" />
					<path class="cls-48" d="M701.94,1275.62q191.12-65.41,386.61-116.46"
						transform="translate(-0.88 3.04)" />
				</g>
			</g>
			<g id="COMPLEMENTO"><text class="cls-413"
					transform="matrix(0.92, -0.38, 0.42, 1.03, 489, 240.71)">ACCESO</text>
				<path class="cls-414"
					d="M504.7,241.52c3.07-1.31,4.44-5.08,3.17-8.54l8.16-3.49L512,239.27,507.88,249l-9.83-3.82-9.84-3.82,8.16-3.49c1.6,3.31,5.25,4.93,8.33,3.61"
					transform="translate(-0.88 3.04)" /><text class="cls-415"
					transform="matrix(0.91, -0.4, 0.46, 1, 568.86, 218.77)">SALIDA</text>
				<path class="cls-414"
					d="M573.87,199c3.19-1.42,7.07.19,8.84,3.6l8.48-3.77-10.43-3.78-10.43-3.79-4,10.21-4,10.22,8.48-3.78c-1.42-3.56-.08-7.49,3.12-8.91"
					transform="translate(-0.88 3.04)" />
				<path class="cls-416"
					d="M440.82,223.56q-98.73,43.65-205.91,86.27Q117.58,356.3,6.49,394.71c84.74,54.87,277.94,196.28,402,460.21,109.24,232.45,110.26,443.83,104.2,545.33l173.22,1.19L687.06,1589c102.09-36.88,211.64-72.85,328.35-106.48,120.65-34.75,236.15-63.31,345.36-86.83Q1119.63,698,878.48.37,815.14,35.62,749.3,70.81q-72,38.46-142.49,74.39"
					transform="translate(-0.88 3.04)" />
			</g>
		</svg>

	</div>

</body>

</html>