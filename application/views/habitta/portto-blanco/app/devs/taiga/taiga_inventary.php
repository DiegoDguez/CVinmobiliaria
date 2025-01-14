
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
<body ng-controller="DashboardUsersCtrl as dashboard">

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

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">CLUSTER TAIGA</h1>
				</div>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 720" style="enable-background:new 0 0 1366 720;" xml:space="preserve">
		
			<style type="text/css">
				.st0{clip-path:url(#SVGID_2_);enable-background:new    ;}
				.st1{clip-path:url(#SVGID_4_);}
				.st2{clip-path:url(#SVGID_6_);}
				.st3{fill:none;stroke:#000000;stroke-width:5;stroke-miterlimit:10;}
				.st4{clip-path:url(#SVGID_8_);}
				.st5{clip-path:url(#SVGID_10_);}
				.st6{fill:#4B6690;}
				.st7{fill:#646F80;}
				.st8{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st9{fill:#F7EC45;}
				.st10{font-family:'CenturyGothic-Bold';}
				.st11{font-size:3.63px;}
				.st12{fill:#FFFFFF;}
				.st13{font-family:'CenturyGothic';}
				.st14{font-size:3.6302px;}
				.st15{font-size:3.6299px;}
				.st16{font-size:3.6301px;}
				.st17{fill:#D2A84D;}
				.st18{opacity:0.6;fill:#D2A84D;enable-background:new    ;}
				.st19{font-size:3.6298px;}
				.st20{fill:#162D5C;}
				.st21{fill:#001D7E;}
				.st22{font-family:'MyriadPro-Regular';}
				.st23{font-size:2.3547px;}
				.st24{font-size:2.3546px;}
				.st25{fill:#0A2449;}
				.st26{font-family:'FuturaPT-Demi';}
				.st27{font-size:32.6389px;}
			</style>

			<image style="overflow:visible;" width="2641" height="1392" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/taiga/taiga.jpg"  transform="matrix(0.5172 0 0 0.5172 0 0)"></image>
			<g>
				<g>
					<g>
						<defs>
							<path id="SVGID_1_" d="M832.9,44c0,0,26.7-2.2,27.2-2.2s11.9,0.6,11.9,0.6l15.3,0.6l21,94.7l11.6,49.5c0,0-15.9,17.1-26.5,17.8
								c-10.6,0.6-22.3,0.7-28.8-5.9s-13.2-53.9-13.2-53.9L832.9,44z"/>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st0">
							<g>
								<g>
									<defs>
										<rect id="SVGID_3_" x="-2.1" y="-0.2" width="1369.1" height="721.7"/>
									</defs>
									<clipPath id="SVGID_4_">
										<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
									</clipPath>
									<g class="st1">
										<g>
											<defs>
												<rect id="SVGID_5_" x="-2.1" y="-0.2" width="1369.1" height="721.7"/>
											</defs>
											<clipPath id="SVGID_6_">
												<use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
											</clipPath>
											<g class="st2">
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</g>
				</g>
				<path class="st3" d="M1247,74.6c-4.8-1-11.3-2.9-18.3-6.7c-8.9-4.9-14.9-10.8-18.5-15c-1-1.8-3.3-5-7.4-7.6
					c-4.2-2.6-8.2-3.3-10.2-3.5l-305.3,1.2l18.8,91c2.8,16.9,5.5,33.8,8.3,50.7c-1.9,2.6-5.3,6.6-10.7,9.9c-4.5,2.7-8.7,3.9-11.6,4.6
					c-2.6,0.7-7.1,1.5-12.5,0.7c-6.5-0.9-11-3.7-13.4-5.3l-12.7-49.9c-6.9-33.5-13.8-66.9-20.7-100.4c-50.8,1.7-106.1,5.8-165.1,13.2
					C606.1,65,549.2,75.4,497.7,87c-61.5,13.9-129.5,32.6-202,58.1c-78.6,27.6-148.1,58.2-208.3,88.2c-0.2,0.1-3.6,1.9-3.9,5.8
					c-0.2,3.7,2.7,5.9,2.9,6.1C139.6,283,196.3,327,254.7,377.9C314.4,430,366.7,481.4,412.2,530c1.3,1.2,3.9,3.2,7.7,4.4
					c3.7,1.2,7,1.1,8.8,0.9c3.2-0.3,6.8-0.4,10.8-0.2c3,0.2,5.7,0.5,8.1,0.8c-0.3,1.7-0.6,3.4-0.8,5.1c1,0.2,3.3,0.4,5.9-0.8
					c2.3-1,3.7-2.5,4.4-3.4l17.1,9.5l3.7,2.5c5.4,4.1,10.8,8.3,16.2,12.5c-0.6,0.9-1.8,3.1-1.8,6.3c0.1,3.6,1.8,6.1,2.4,6.9l2.7-8.6
					l37,85.4l72.4-22.9l84.9-31.5l262.5-97.3L1275.4,364l43.4-278.4C1294.9,82,1271,78.3,1247,74.6z"/>
				<path class="st3" d="M1247,74.6c-4.8-1-11.3-2.9-18.3-6.7c-8.9-4.9-14.9-10.8-18.5-15c-1-1.8-3.3-5-7.4-7.6
					c-4.2-2.6-8.2-3.3-10.2-3.5l-305.3,1.2l18.8,91c2.8,16.9,5.5,33.8,8.3,50.7c-1.9,2.6-5.3,6.6-10.7,9.9c-4.5,2.7-8.7,3.9-11.6,4.6
					c-2.6,0.7-7.1,1.5-12.5,0.7c-6.5-0.9-11-3.7-13.4-5.3l-12.7-49.9c-6.9-33.5-13.8-66.9-20.7-100.4c-50.8,1.7-106.1,5.8-165.1,13.2
					C606.1,65,549.2,75.4,497.7,87c-61.5,13.9-129.5,32.6-202,58.1c-78.6,27.6-148.1,58.2-208.3,88.2c-0.2,0.1-3.6,1.9-3.9,5.8
					c-0.2,3.7,2.7,5.9,2.9,6.1C139.6,283,196.3,327,254.7,377.9C314.4,430,366.7,481.4,412.2,530c1.3,1.2,3.9,3.2,7.7,4.4
					c3.7,1.2,7,1.1,8.8,0.9c3.2-0.3,6.8-0.4,10.8-0.2c3,0.2,5.7,0.5,8.1,0.8c-0.3,1.7-0.6,3.4-0.8,5.1c1,0.2,3.3,0.4,5.9-0.8
					c2.3-1,3.7-2.5,4.4-3.4l17.1,9.5l3.7,2.5c5.4,4.1,10.8,8.3,16.2,12.5c-0.6,0.9-1.8,3.1-1.8,6.3c0.1,3.6,1.8,6.1,2.4,6.9l2.7-8.6
					l37,85.4l72.4-22.9l84.9-31.5l262.5-97.3L1275.4,364l43.4-278.4C1294.9,82,1271,78.3,1247,74.6z"/>
				<g>
					<g>
						<g>
							<defs>
								<path id="SVGID_7_" d="M1247,74.6c-4.8-1-11.3-2.9-18.3-6.7c-8.9-4.9-14.9-10.8-18.5-15c-1-1.8-3.3-5-7.4-7.6
									c-4.2-2.6-8.2-3.3-10.2-3.5l-305.3,1.2l18.8,91c2.8,16.9,5.5,33.8,8.3,50.7c-1.9,2.6-5.3,6.6-10.7,9.9
									c-4.5,2.7-8.7,3.9-11.6,4.6c-2.6,0.7-7.1,1.5-12.5,0.7c-6.5-0.9-11-3.7-13.4-5.3l-12.7-49.9c-6.9-33.5-13.8-66.9-20.7-100.4
									c-50.8,1.7-106.1,5.8-165.1,13.2C606.1,65,549.2,75.4,497.7,87c-61.5,13.9-129.5,32.6-202,58.1
									c-78.6,27.6-148.1,58.2-208.3,88.2c-0.2,0.1-3.6,1.9-3.9,5.8c-0.2,3.7,2.7,5.9,2.9,6.1C139.6,283,196.3,327,254.7,377.9
									C314.4,430,366.7,481.4,412.2,530c1.3,1.2,3.9,3.2,7.7,4.4c3.7,1.2,7,1.1,8.8,0.9c3.2-0.3,6.8-0.4,10.8-0.2
									c3,0.2,5.7,0.5,8.1,0.8c-0.3,1.7-0.6,3.4-0.8,5.1c1,0.2,3.3,0.4,5.9-0.8c2.3-1,3.7-2.5,4.4-3.4l17.1,9.5l3.7,2.5
									c5.4,4.1,10.8,8.3,16.2,12.5c-0.6,0.9-1.8,3.1-1.8,6.3c0.1,3.6,1.8,6.1,2.4,6.9l2.7-8.6l37,85.4l72.4-22.9l84.9-31.5
									l262.5-97.3L1275.4,364l43.4-278.4C1294.9,82,1271,78.3,1247,74.6z"/>
							</defs>
							<clipPath id="SVGID_8_">
								<use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
							</clipPath>
							<g class="st4">
							</g>
						</g>
					</g>
					<g>
						<g>
							<defs>
								<polygon id="SVGID_9_" points="892.2,199 955.3,503.6 1275.2,366.1 1318.2,84 1211.9,24.7 884.1,41.7 914.5,184.6 					"/>
							</defs>
							<clipPath id="SVGID_10_">
								<use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
							</clipPath>
							<g transform="matrix(1 0 0 1 0 0)" class="st5">
							</g>
						</g>
					</g>
				</g>
				<g>
					<g>
						<path class="st6" d="M128.6,213.9l16,11.8l-31,38.8l-27.5-19.9c-0.3-0.3-2.4-2.2-2.3-5.3c0.1-2.4,1.6-4.7,3.9-5.8
							C101.3,227,115,220.4,128.6,213.9z"/>
						<polygon class="st6" points="160.6,237.4 176.5,249.5 145.5,288.4 129.6,276.3 			"/>
						<polygon class="st6" points="192.3,261.7 208,274 176.9,312.9 161.3,300.5 			"/>
						<polygon class="st6" points="192.4,325.3 223.5,286.5 238.9,299 208,337.8 			"/>
						<polygon class="st6" points="254.2,311.7 269.5,324.6 238.4,363.5 223.3,350.6 			"/>
						<polygon class="st6" points="284.6,337.6 299.6,350.7 268.5,389.6 253.5,376.4 			"/>
						<polygon class="st6" points="314.4,364 329.1,377.4 298,416.3 283.3,402.9 			"/>
						<polygon class="st6" points="343.7,390.9 358.2,404.5 327.1,443.5 312.6,429.8 			"/>
						<polygon class="st6" points="372.6,418.3 386.9,432.3 355.5,471.4 341.4,457.3 			"/>
						<polygon class="st6" points="401,446.2 415,460.4 383.6,499.6 369.6,485.3 			"/>
						<polygon class="st6" points="428.8,474.7 444.6,491.4 411.1,528.3 397.4,513.9 			"/>
						<polygon class="st7" points="144.6,225.6 160.6,237.4 129.6,276.3 113.6,264.4 			"/>
						<polygon class="st7" points="176.5,249.5 192.3,261.7 161.3,300.5 145.5,288.4 			"/>
						<polygon class="st7" points="208,274 223.5,286.5 192.4,325.3 176.9,312.9 			"/>
						<polygon class="st7" points="238.9,299 254.2,311.7 223.3,350.6 208,337.8 			"/>
						<polygon class="st7" points="269.5,324.6 284.6,337.6 253.5,376.4 238.4,363.5 			"/>
						<polygon class="st7" points="299.6,350.7 314.4,364 283.3,402.9 268.5,389.6 			"/>
						<polygon class="st7" points="329.1,377.4 343.7,390.9 312.6,429.8 298,416.3 			"/>
						<polygon class="st7" points="358.2,404.5 372.6,418.3 341.4,457.3 327.1,443.5 			"/>
						<polygon class="st7" points="386.9,432.3 401,446.2 369.6,485.3 355.5,471.4 			"/>
						<polygon class="st7" points="415,460.4 428.8,474.7 397.4,513.9 383.6,499.6 			"/>
						<line class="st8" x1="113.6" y1="264.4" x2="144.6" y2="225.6"/>
						<line class="st8" x1="160.6" y1="237.4" x2="129.6" y2="276.3"/>
						<line class="st8" x1="145.5" y1="288.4" x2="176.5" y2="249.5"/>
						<line class="st8" x1="192.3" y1="261.7" x2="161.3" y2="300.5"/>
						<line class="st8" x1="176.9" y1="312.9" x2="208" y2="274"/>
						<line class="st8" x1="223.5" y1="286.5" x2="192.4" y2="325.3"/>
						<line class="st8" x1="208" y1="337.8" x2="238.9" y2="299"/>
						<line class="st8" x1="254.2" y1="311.7" x2="223.3" y2="350.6"/>
						<line class="st8" x1="238.4" y1="363.5" x2="269.5" y2="324.6"/>
						<line class="st8" x1="284.6" y1="337.6" x2="253.5" y2="376.4"/>
						<line class="st8" x1="268.5" y1="389.6" x2="299.6" y2="350.7"/>
						<line class="st8" x1="314.4" y1="364" x2="283.3" y2="402.9"/>
						<line class="st8" x1="298" y1="416.3" x2="329.1" y2="377.4"/>
						<line class="st8" x1="343.7" y1="390.9" x2="312.6" y2="429.8"/>
						<line class="st8" x1="327.1" y1="443.5" x2="358.2" y2="404.5"/>
						<line class="st8" x1="372.6" y1="418.3" x2="341.4" y2="457.3"/>
						<line class="st8" x1="355.5" y1="471.4" x2="386.9" y2="432.3"/>
						<line class="st8" x1="401" y1="446.2" x2="369.6" y2="485.3"/>
						<line class="st8" x1="383.6" y1="499.6" x2="415" y2="460.4"/>
						<line class="st8" x1="428.8" y1="474.7" x2="397.4" y2="513.9"/>
						<line class="st8" x1="411.1" y1="528.3" x2="444.6" y2="491.4"/>
						<polygon class="st7" points="171.6,194.4 190,186.4 203.3,220.8 184,226.2 			"/>
						<polygon class="st7" points="208.4,178.7 226.9,171.3 241.8,209.8 222.5,215.3 			"/>
						<polygon class="st7" points="245.5,164 264.3,156.8 280.2,198.9 261.1,204.4 			"/>
						<polygon class="st7" points="283,150 301.9,143.3 318.7,188 299.4,193.4 			"/>
						<polygon class="st7" points="320.7,136.9 339.7,130.6 357.2,177 338,182.5 			"/>
						<polygon class="st7" points="358.8,124.6 378,118.7 395.7,166.1 376.4,171.6 			"/>
						<polygon class="st7" points="397.1,113.1 416.4,107.7 434.2,155.3 414.9,160.6 			"/>
						<polygon class="st6" points="208.4,178.7 222.5,215.3 203.3,220.8 190,186.4 			"/>
						<polygon class="st6" points="226.9,171.3 245.5,164 261.1,204.4 241.8,209.8 			"/>
						<polygon class="st6" points="264.3,156.8 283,150 299.4,193.4 280.2,198.9 			"/>
						<polygon class="st6" points="301.9,143.3 320.7,136.9 338,182.5 318.7,188 			"/>
						<polygon class="st6" points="339.7,130.6 358.8,124.6 376.4,171.6 357.2,177 			"/>
						<polygon class="st6" points="378,118.7 397.1,113.1 414.9,160.6 395.7,166.1 			"/>
						<polygon class="st6" points="416.4,107.7 434.2,155.3 453.8,149.6 435.9,102.5 			"/>
						<line class="st8" x1="171.6" y1="194.4" x2="184" y2="226.2"/>
						<line class="st8" x1="203.3" y1="220.8" x2="190" y2="186.4"/>
						<line class="st8" x1="208.4" y1="178.7" x2="222.5" y2="215.3"/>
						<line class="st8" x1="226.9" y1="171.3" x2="241.8" y2="209.8"/>
						<line class="st8" x1="261.1" y1="204.4" x2="245.5" y2="164"/>
						<line class="st8" x1="264.3" y1="156.8" x2="280.2" y2="198.9"/>
						<line class="st8" x1="299.4" y1="193.4" x2="283" y2="150"/>
						<line class="st8" x1="301.9" y1="143.3" x2="318.7" y2="188"/>
						<line class="st8" x1="338" y1="182.5" x2="320.7" y2="136.9"/>
						<line class="st8" x1="339.7" y1="130.6" x2="357.2" y2="177"/>
						<line class="st8" x1="376.4" y1="171.6" x2="358.8" y2="124.6"/>
						<line class="st8" x1="378" y1="118.7" x2="395.7" y2="166.1"/>
						<line class="st8" x1="414.9" y1="160.6" x2="397.1" y2="113.1"/>
						<line class="st8" x1="416.4" y1="107.7" x2="434.2" y2="155.3"/>
						<polygon class="st7" points="458.6,96.8 497.8,87.4 506.1,109.4 468.6,123.3 			"/>
						<polygon class="st7" points="478,147.9 515.4,134 522.5,152.5 485.1,166.4 			"/>
						<polygon class="st7" points="492.1,184.9 529.5,171.1 536.6,189.6 499.1,203.5 			"/>
						<polygon class="st7" points="506.2,221.9 543.6,208 550.6,226.6 513.2,240.5 			"/>
						<polygon class="st7" points="520.2,259 557.7,245.1 564.7,263.6 527.3,277.5 			"/>
						<polygon class="st7" points="534.3,296 571.7,282.2 578.8,300.6 541.4,314.5 			"/>
						<polygon class="st7" points="548.4,333 585.9,319.1 592.9,337.6 555.5,351.5 			"/>
						<polygon class="st7" points="562.5,370 599.9,356.2 606.9,374.6 569.5,388.6 			"/>
						<polygon class="st7" points="576.6,407 614,393.1 621.1,411.7 583.6,425.6 			"/>
						<polygon class="st7" points="590.6,444.2 628.1,430.2 635.1,448.7 597.7,462.6 			"/>
						<polygon class="st7" points="604.7,481.1 642.2,467.2 649.2,485.7 611.8,499.6 			"/>
						<polygon class="st7" points="618.8,518.1 656.3,504.2 663.3,522.8 625.8,536.6 			"/>
						<polygon class="st7" points="632.9,555.1 670.3,541.2 677.4,559.7 639.9,573.6 			"/>
						<polygon class="st7" points="646.9,592.2 684.4,578.3 691.4,596.8 653.9,610.7 			"/>
						<polygon class="st6" points="468.6,123.3 506.1,109.4 515.4,134 478,147.9 			"/>
						<polygon class="st6" points="485.1,166.4 522.5,152.5 529.5,171.1 492.1,184.9 			"/>
						<polygon class="st6" points="499.1,203.5 536.6,189.6 543.6,208 506.2,221.9 			"/>
						<polygon class="st6" points="513.2,240.5 550.6,226.6 557.7,245.1 520.2,259 			"/>
						<polygon class="st6" points="564.7,263.6 571.7,282.2 534.3,296 527.3,277.5 			"/>
						<polygon class="st6" points="541.4,314.5 578.8,300.6 585.9,319.1 548.4,333 			"/>
						<polygon class="st6" points="555.5,351.5 592.9,337.6 599.9,356.2 562.5,370 			"/>
						<polygon class="st6" points="569.5,388.6 606.9,374.6 614,393.1 576.6,407 			"/>
						<polygon class="st6" points="583.6,425.6 621.1,411.7 628.1,430.2 590.6,444.2 			"/>
						<polygon class="st6" points="597.7,462.6 635.1,448.7 642.2,467.2 604.7,481.1 			"/>
						<polygon class="st6" points="611.8,499.6 649.2,485.7 656.3,504.2 618.8,518.1 			"/>
						<polygon class="st6" points="625.8,536.6 663.3,522.8 670.3,541.2 632.9,555.1 			"/>
						<polygon class="st6" points="639.9,573.6 677.4,559.7 684.4,578.3 646.9,592.2 			"/>
						<polygon class="st6" points="231,236.8 250.3,231.3 261.4,269.3 244.9,274 240.9,270.7 			"/>
						<polygon class="st6" points="269.6,225.9 288.8,220.4 299.9,258.3 280.6,263.8 			"/>
						<polygon class="st6" points="308,214.9 327.3,209.4 338.4,247.5 319.1,252.9 			"/>
						<polygon class="st6" points="346.6,204 365.8,198.5 376.8,236.5 357.6,242 			"/>
						<polygon class="st6" points="385,193.1 404.3,187.6 415.3,225.6 396.1,231.1 			"/>
						<polygon class="st6" points="423.5,182.2 442.8,176.7 453.8,214.6 434.6,220.2 			"/>
						<polygon class="st6" points="456.8,213.9 476.1,208.4 491.6,249 469,255.4 			"/>
						<polygon class="st6" points="418.4,224.7 437.6,219.3 449.7,260.8 430.5,266.3 			"/>
						<polygon class="st6" points="379.9,235.7 399.2,230.2 411.2,271.7 392,277.2 			"/>
						<polygon class="st6" points="341.4,246.6 360.7,241.1 372.8,282.7 353.5,288.2 			"/>
						<polygon class="st6" points="298.1,258.9 319.8,252.7 331.8,294.2 310.3,300.5 			"/>
						<polygon class="st7" points="250.3,231.3 269.6,225.9 280.6,263.8 261.4,269.3 			"/>
						<polygon class="st7" points="288.8,220.4 308,214.9 319.1,252.9 299.9,258.3 			"/>
						<polygon class="st7" points="327.3,209.4 346.6,204 357.6,242 338.4,247.5 			"/>
						<polygon class="st7" points="365.8,198.5 385,193.1 396.1,231.1 376.8,236.5 			"/>
						<polygon class="st7" points="404.3,187.6 423.5,182.2 434.6,220.2 415.3,225.6 			"/>
						<polygon class="st7" points="462,171.2 476.1,208.4 453.8,214.6 442.8,176.7 			"/>
						<polygon class="st7" points="449.7,260.8 469,255.4 456.8,213.9 437.6,219.3 			"/>
						<polygon class="st7" points="399.2,230.2 418.4,224.7 430.5,266.3 411.2,271.7 			"/>
						<polygon class="st7" points="360.7,241.1 379.9,235.7 392,277.2 372.8,282.7 			"/>
						<polygon class="st7" points="319.8,252.7 341.4,246.6 353.5,288.2 331.8,294.2 			"/>
						<polygon class="st7" points="285.2,307.6 310.3,300.5 298.1,258.9 273.1,266 			"/>
						<line class="st8" x1="231" y1="236.8" x2="240.9" y2="270.7"/>
						<line class="st8" x1="261.4" y1="269.3" x2="250.3" y2="231.3"/>
						<line class="st8" x1="269.6" y1="225.9" x2="280.6" y2="263.8"/>
						<line class="st8" x1="299.9" y1="258.3" x2="288.8" y2="220.4"/>
						<line class="st8" x1="308" y1="214.9" x2="319.1" y2="252.9"/>
						<line class="st8" x1="327.3" y1="209.4" x2="338.4" y2="247.5"/>
						<line class="st8" x1="357.6" y1="242" x2="346.6" y2="204"/>
						<line class="st8" x1="365.8" y1="198.5" x2="376.8" y2="236.5"/>
						<line class="st8" x1="396.1" y1="231.1" x2="385" y2="193.1"/>
						<line class="st8" x1="404.3" y1="187.6" x2="415.3" y2="225.6"/>
						<line class="st8" x1="434.6" y1="220.2" x2="423.5" y2="182.2"/>
						<line class="st8" x1="442.8" y1="176.7" x2="453.8" y2="214.6"/>
						<line class="st8" x1="456.8" y1="213.9" x2="469" y2="255.4"/>
						<line class="st8" x1="449.7" y1="260.8" x2="437.6" y2="219.3"/>
						<line class="st8" x1="418.4" y1="224.7" x2="430.5" y2="266.3"/>
						<line class="st8" x1="411.2" y1="271.7" x2="399.2" y2="230.2"/>
						<line class="st8" x1="379.9" y1="235.7" x2="392" y2="277.2"/>
						<line class="st8" x1="372.8" y1="282.7" x2="360.7" y2="241.1"/>
						<line class="st8" x1="341.4" y1="246.6" x2="353.5" y2="288.2"/>
						<line class="st8" x1="331.8" y1="294.2" x2="319.8" y2="252.7"/>
						<line class="st8" x1="310.3" y1="300.5" x2="298.1" y2="258.9"/>
						<line class="st8" x1="273.1" y1="266" x2="285.2" y2="307.6"/>
						<line class="st8" x1="244.9" y1="274" x2="476.1" y2="208.4"/>
						<polygon class="st7" points="499.8,270.5 513.9,307.8 491.6,314 480.5,276 			"/>
						<polygon class="st7" points="461.3,281.5 442.1,287 453.1,324.9 472.4,319.5 			"/>
						<polygon class="st7" points="422.8,292.4 433.8,330.4 414.7,335.9 403.6,297.8 			"/>
						<polygon class="st7" points="384.3,303.3 395.4,341.3 376.1,346.8 365.1,308.8 			"/>
						<polygon class="st7" points="345.8,314.3 356.9,352.3 341,356.8 336,352.3 326.6,319.7 			"/>
						<polygon class="st7" points="476.6,318.3 495.8,312.9 507.9,354.4 488.7,359.9 			"/>
						<polygon class="st7" points="438.1,329.2 457.4,323.7 469.5,365.3 450.2,370.8 			"/>
						<polygon class="st7" points="399.6,340.1 418.9,334.7 431,376.2 411.8,381.7 			"/>
						<polygon class="st7" points="361.2,351.1 380.4,345.6 392.5,387.2 377.9,391.3 370.8,384.5 			"/>
						<polygon class="st6" points="345.8,314.3 365.1,308.8 376.1,346.8 356.9,352.3 			"/>
						<polygon class="st6" points="384.3,303.3 403.6,297.8 414.7,335.9 395.4,341.3 			"/>
						<polygon class="st6" points="422.8,292.4 442.1,287 453.1,324.9 433.8,330.4 			"/>
						<polygon class="st6" points="461.3,281.5 480.5,276 491.6,314 472.4,319.5 			"/>
						<polygon class="st6" points="392.5,387.2 411.8,381.7 399.6,340.1 380.4,345.6 			"/>
						<polygon class="st6" points="431,376.2 450.2,370.8 438.1,329.2 418.9,334.7 			"/>
						<polygon class="st6" points="469.5,365.3 488.7,359.9 476.6,318.3 457.4,323.7 			"/>
						<polygon class="st6" points="529.4,348.3 513.9,307.8 495.8,312.9 507.9,354.4 			"/>
						<line class="st8" x1="326.6" y1="319.7" x2="336" y2="352.3"/>
						<line class="st8" x1="356.9" y1="352.3" x2="345.8" y2="314.3"/>
						<line class="st8" x1="361.2" y1="351.1" x2="370.8" y2="384.5"/>
						<line class="st8" x1="392.5" y1="387.2" x2="380.4" y2="345.6"/>
						<line class="st8" x1="376.1" y1="346.8" x2="365.1" y2="308.8"/>
						<line class="st8" x1="384.3" y1="303.3" x2="395.4" y2="341.3"/>
						<line class="st8" x1="399.6" y1="340.1" x2="411.8" y2="381.7"/>
						<line class="st8" x1="431" y1="376.2" x2="418.9" y2="334.7"/>
						<line class="st8" x1="414.7" y1="335.9" x2="403.6" y2="297.8"/>
						<line class="st8" x1="422.8" y1="292.4" x2="433.8" y2="330.4"/>
						<line class="st8" x1="438.1" y1="329.2" x2="450.2" y2="370.8"/>
						<line class="st8" x1="469.5" y1="365.3" x2="457.4" y2="323.7"/>
						<path class="st8" d="M453.1,324.9c-0.3-0.9-11.1-38-11.1-38"/>
						<line class="st8" x1="461.3" y1="281.5" x2="472.4" y2="319.5"/>
						<line class="st8" x1="476.6" y1="318.3" x2="488.7" y2="359.9"/>
						<line class="st8" x1="507.9" y1="354.4" x2="495.8" y2="312.9"/>
						<line class="st8" x1="491.6" y1="314" x2="480.5" y2="276"/>
						<line class="st8" x1="513.9" y1="307.8" x2="341" y2="356.8"/>
						<polygon class="st7" points="514.3,376.5 537.5,369.9 551.7,407.1 525.4,414.5 			"/>
						<polygon class="st7" points="495.1,382 506.1,420 486.8,425.4 475.8,387.4 			"/>
						<polygon class="st7" points="456.6,392.9 437.3,398.4 448.4,436.4 467.7,430.9 			"/>
						<polygon class="st7" points="508.7,419.3 528,413.8 540.1,455.4 520.9,460.8 			"/>
						<polygon class="st7" points="470.2,430.2 489.4,424.7 501.6,466.2 482.4,471.7 			"/>
						<polygon class="st6" points="429.2,441.8 418.1,403.9 437.3,398.4 448.4,436.4 			"/>
						<polygon class="st6" points="456.6,392.9 475.8,387.4 486.8,425.4 467.7,430.9 			"/>
						<polygon class="st6" points="495.1,382 514.3,376.5 525.4,414.5 506.1,420 			"/>
						<polygon class="st6" points="567.2,447.7 551.7,407.1 528,413.8 540.1,455.4 			"/>
						<polygon class="st6" points="501.6,466.2 520.9,460.8 508.7,419.3 489.4,424.7 			"/>
						<polygon class="st6" points="463.1,477.2 482.4,471.7 470.2,430.2 451,435.6 			"/>
						<polyline class="st8" points="418.1,403.9 429.2,441.8 551.7,407.1 			"/>
						<line class="st8" x1="437.3" y1="398.4" x2="448.4" y2="436.4"/>
						<line class="st8" x1="456.6" y1="392.9" x2="467.7" y2="430.9"/>
						<line class="st8" x1="463.1" y1="477.2" x2="451" y2="435.6"/>
						<line class="st8" x1="482.4" y1="471.7" x2="470.2" y2="430.2"/>
						<line class="st8" x1="486.8" y1="425.4" x2="475.8" y2="387.4"/>
						<line class="st8" x1="501.6" y1="466.2" x2="489.4" y2="424.7"/>
						<line class="st8" x1="506.1" y1="420" x2="495.1" y2="382"/>
						<line class="st8" x1="508.7" y1="419.3" x2="520.9" y2="460.8"/>
						<line class="st8" x1="540.1" y1="455.4" x2="528" y2="413.8"/>
						<line class="st8" x1="525.4" y1="414.5" x2="514.3" y2="376.5"/>
						<line class="st8" x1="468.6" y1="123.3" x2="506.1" y2="109.4"/>
						<line class="st8" x1="515.4" y1="134" x2="478" y2="147.9"/>
						<line class="st8" x1="485.1" y1="166.4" x2="522.5" y2="152.5"/>
						<line class="st8" x1="529.5" y1="171.1" x2="492.1" y2="184.9"/>
						<line class="st8" x1="499.1" y1="203.5" x2="536.6" y2="189.6"/>
						<line class="st8" x1="543.6" y1="208" x2="506.2" y2="221.9"/>
						<line class="st8" x1="513.2" y1="240.5" x2="550.6" y2="226.6"/>
						<line class="st8" x1="557.7" y1="245.1" x2="520.2" y2="259"/>
						<line class="st8" x1="527.3" y1="277.5" x2="564.7" y2="263.6"/>
						<line class="st8" x1="571.7" y1="282.2" x2="534.3" y2="296"/>
						<line class="st8" x1="541.4" y1="314.5" x2="578.8" y2="300.6"/>
						<line class="st8" x1="585.9" y1="319.1" x2="548.4" y2="333"/>
						<line class="st8" x1="555.5" y1="351.5" x2="592.9" y2="337.6"/>
						<line class="st8" x1="599.9" y1="356.2" x2="562.5" y2="370"/>
						<line class="st8" x1="569.5" y1="388.6" x2="606.9" y2="374.6"/>
						<line class="st8" x1="614" y1="393.1" x2="576.6" y2="407"/>
						<line class="st8" x1="583.6" y1="425.6" x2="621.1" y2="411.7"/>
						<line class="st8" x1="628.1" y1="430.2" x2="590.6" y2="444.2"/>
						<line class="st8" x1="597.7" y1="462.6" x2="635.1" y2="448.7"/>
						<line class="st8" x1="642.2" y1="467.2" x2="604.7" y2="481.1"/>
						<line class="st8" x1="611.8" y1="499.6" x2="649.2" y2="485.7"/>
						<line class="st8" x1="656.3" y1="504.2" x2="618.8" y2="518.1"/>
						<line class="st8" x1="625.8" y1="536.6" x2="663.3" y2="522.8"/>
						<line class="st8" x1="670.3" y1="541.2" x2="632.9" y2="555.1"/>
						<line class="st8" x1="639.9" y1="573.6" x2="677.4" y2="559.7"/>
						<line class="st8" x1="684.4" y1="578.3" x2="646.9" y2="592.2"/>
						<path class="st6" d="M498.1,87.3c12.3-2.7,24.8-5.4,37.6-8c8.2-1.7,16.3-3.3,24.4-4.8c2.4,6.4,4.8,12.8,7.3,19.1l-58.5,21.7
							L498.1,87.3z"/>
						<polygon class="st6" points="515.8,133.8 574.4,112.2 581.4,130.7 522.9,152.4 			"/>
						<polygon class="st6" points="529.9,171 588.5,149.2 595.5,167.7 537,189.4 			"/>
						<polygon class="st6" points="544,207.9 602.6,186.2 609.6,204.7 551.1,226.5 			"/>
						<polygon class="st6" points="558.1,244.9 616.6,223.2 623.6,241.7 565.2,263.4 			"/>
						<polygon class="st6" points="572.2,281.9 630.7,260.3 637.7,278.7 579.2,300.5 			"/>
						<polygon class="st6" points="586.3,319 644.8,297.3 651.9,315.8 593.3,337.5 			"/>
						<polygon class="st6" points="600.3,356 658.9,334.3 665.9,352.8 607.4,374.5 			"/>
						<polygon class="st6" points="614.5,393 673,371.3 680,389.9 621.5,411.5 			"/>
						<polygon class="st6" points="628.5,430 687.1,408.3 694.1,426.8 635.5,448.6 			"/>
						<polygon class="st6" points="642.6,467.1 701.1,445.3 708.2,463.8 649.6,485.6 			"/>
						<polygon class="st6" points="656.7,504 715.2,482.4 722.2,500.9 663.6,522.6 			"/>
						<polygon class="st6" points="670.7,541.2 729.3,519.5 736.3,537.9 677.8,559.6 			"/>
						<polygon class="st6" points="684.8,578.1 743.4,556.4 750.4,574.9 691.8,596.6 			"/>
						<polygon class="st7" points="508.8,115.3 567.4,93.6 574.4,112.2 515.8,133.8 			"/>
						<polygon class="st7" points="522.9,152.4 581.4,130.7 588.5,149.2 529.9,171 			"/>
						<polygon class="st7" points="537,189.4 595.5,167.7 602.6,186.2 544,207.9 			"/>
						<polygon class="st7" points="551.1,226.5 609.6,204.7 616.6,223.2 558.1,244.9 			"/>
						<polygon class="st7" points="565.2,263.4 623.6,241.7 630.7,260.3 572.2,281.9 			"/>
						<polygon class="st7" points="579.2,300.5 637.7,278.7 644.8,297.3 586.3,319 			"/>
						<polygon class="st7" points="593.3,337.5 651.9,315.8 658.9,334.3 600.3,356 			"/>
						<polygon class="st7" points="665.9,352.8 673,371.3 614.5,393 607.4,374.5 			"/>
						<polygon class="st7" points="680,389.9 687.1,408.3 628.5,430 621.5,411.5 			"/>
						<polygon class="st7" points="694.1,426.8 701.1,445.3 642.6,467.1 635.5,448.6 			"/>
						<polygon class="st7" points="649.6,485.6 708.2,463.8 715.2,482.4 656.7,504 			"/>
						<polygon class="st7" points="722.2,500.9 729.3,519.5 670.7,541.2 663.6,522.6 			"/>
						<polygon class="st7" points="736.3,537.9 743.4,556.4 684.8,578.1 677.8,559.6 			"/>
						<line class="st8" x1="508.8" y1="115.3" x2="567.4" y2="93.6"/>
						<line class="st8" x1="515.8" y1="133.8" x2="574.4" y2="112.2"/>
						<line class="st8" x1="581.4" y1="130.7" x2="522.9" y2="152.4"/>
						<line class="st8" x1="529.9" y1="171" x2="588.5" y2="149.2"/>
						<line class="st8" x1="595.5" y1="167.7" x2="537" y2="189.4"/>
						<line class="st8" x1="544" y1="207.9" x2="602.6" y2="186.2"/>
						<line class="st8" x1="609.6" y1="204.7" x2="551.1" y2="226.5"/>
						<line class="st8" x1="558.1" y1="244.9" x2="616.6" y2="223.2"/>
						<line class="st8" x1="623.6" y1="241.7" x2="565.2" y2="263.4"/>
						<line class="st8" x1="572.2" y1="281.9" x2="630.7" y2="260.3"/>
						<line class="st8" x1="637.7" y1="278.7" x2="579.2" y2="300.5"/>
						<line class="st8" x1="586.3" y1="319" x2="644.8" y2="297.3"/>
						<line class="st8" x1="651.9" y1="315.8" x2="593.3" y2="337.5"/>
						<line class="st8" x1="600.3" y1="356" x2="658.9" y2="334.3"/>
						<line class="st8" x1="665.9" y1="352.8" x2="607.4" y2="374.5"/>
						<line class="st8" x1="614.5" y1="393" x2="673" y2="371.3"/>
						<line class="st8" x1="680" y1="389.9" x2="621.5" y2="411.5"/>
						<line class="st8" x1="628.5" y1="430" x2="687.1" y2="408.3"/>
						<line class="st8" x1="694.1" y1="426.8" x2="635.5" y2="448.6"/>
						<line class="st8" x1="642.6" y1="467.1" x2="701.1" y2="445.3"/>
						<line class="st8" x1="708.2" y1="463.8" x2="649.6" y2="485.6"/>
						<line class="st8" x1="656.7" y1="504" x2="715.2" y2="482.4"/>
						<line class="st8" x1="722.2" y1="500.9" x2="663.6" y2="522.6"/>
						<line class="st8" x1="670.7" y1="541.2" x2="729.3" y2="519.5"/>
						<line class="st8" x1="677.8" y1="559.6" x2="736.3" y2="537.9"/>
						<line class="st8" x1="743.4" y1="556.4" x2="684.8" y2="578.1"/>
						<path class="st3" d="M497.5,566.1l-2.7,8.6c-0.6-0.8-2.4-3.3-2.4-6.9c-0.1-3.1,1.2-5.4,1.8-6.3c-5.4-4.1-10.8-8.3-16.2-12.5
							l-3.7-2.5l-17.1-9.5c-0.6,0.8-2,2.3-4.4,3.4c-2.6,1.1-4.9,0.9-5.9,0.8c0.3-1.7,0.6-3.4,0.8-5.1c-2.5-0.4-5.2-0.7-8.1-0.8
							c-4-0.2-7.6-0.1-10.8,0.2c-1.8,0.2-5.1,0.3-8.8-0.9c-3.7-1.2-6.3-3.2-7.7-4.4c-45.5-48.6-97.8-100-157.5-152.1
							c-58.4-50.9-115.1-94.9-168.3-132.8c-0.2-0.2-3.1-2.3-2.9-6.1c0.3-3.9,3.7-5.8,3.9-5.8c60.2-30,129.7-60.6,208.3-88.2
							c72.5-25.5,140.6-44.2,202.1-58.1c64.7,170,129.3,340,194,510.1l-84.9,31.5l-72.4,22.9L497.5,566.1z"/>
						<polygon class="st6" points="750.3,509 773.7,500.3 795.6,558.1 772.2,566.8 			"/>
						<polygon class="st6" points="797.1,491.7 820.5,482.9 842.4,540.8 819,549.4 			"/>
						<polygon class="st6" points="843.9,474.3 867.3,465.6 889.3,523.4 865.9,532.1 			"/>
						<polygon class="st6" points="890.8,456.9 911.8,449.1 933.9,506.9 912.7,514.7 			"/>
						<polygon class="st6" points="870.7,405.5 932,393.2 936.6,415.4 877.4,437.3 			"/>
						<polygon class="st6" points="866.8,386.1 928.1,373.8 924.1,354.4 862.8,366.7 			"/>
						<polygon class="st6" points="858.8,347.3 920.1,335 916.1,315.7 854.8,327.9 			"/>
						<polygon class="st6" points="850.8,308.7 912.1,296.3 908,276.9 846.8,289.2 			"/>
						<polygon class="st6" points="842.8,269.9 904.1,257.5 900.1,238.1 838.9,250.5 			"/>
						<polygon class="st6" points="834.8,231.1 896.1,218.8 892.1,199.3 830.9,211.7 			"/>
						<polygon class="st6" points="793.1,131.4 848.2,120.3 843.3,96 788.1,107.2 			"/>
						<polygon class="st6" points="784.1,87.8 839.3,76.7 835.3,57.3 780.1,68.5 			"/>
						<polygon class="st6" points="698.3,91.2 723.2,81.9 743,133.9 718.1,143.2 			"/>
						<polygon class="st6" points="679.5,98.1 699.3,150.1 680.5,157.1 660.7,105 			"/>
						<polygon class="st6" points="623.3,118.9 641.9,112 661.8,164 643,171 			"/>
						<polygon class="st6" points="768,124.7 739.1,135.3 761.1,193.2 780.6,186 			"/>
						<polygon class="st6" points="718.1,143.2 694.6,151.8 716.6,209.7 740,201 			"/>
						<polygon class="st6" points="671.2,160.6 647.8,169.2 669.7,227.1 693.2,218.4 			"/>
						<polygon class="st6" points="772.4,213.6 748.2,222.5 768,274.6 792.2,265.6 			"/>
						<polygon class="st6" points="729.5,229.5 710.7,236.5 730.5,288.5 749.3,281.5 			"/>
						<polygon class="st6" points="691.9,243.4 673.2,250.4 693,302.4 711.8,295.4 			"/>
						<polygon class="st6" points="816.3,256.7 786.7,267.6 808.8,325.5 829,318 			"/>
						<polygon class="st6" points="765.7,275.5 744.5,283.3 766.6,341.1 787.6,333.3 			"/>
						<polygon class="st6" points="721.1,292 697.7,300.6 719.7,358.5 743.2,349.8 			"/>
						<polygon class="st7" points="795.6,558.1 819,549.4 797.1,491.7 773.7,500.3 			"/>
						<polygon class="st7" points="820.5,482.9 843.9,474.3 865.9,532.1 842.4,540.8 			"/>
						<polygon class="st7" points="867.3,465.6 890.8,456.9 912.7,514.7 889.3,523.4 			"/>
						<polygon class="st7" points="941.3,438.1 954,499.4 933.9,506.9 911.8,449.1 			"/>
						<polygon class="st7" points="866.8,386.1 870.7,405.5 932,393.2 928.1,373.8 			"/>
						<polygon class="st7" points="858.8,347.3 920.1,335 924.1,354.4 862.8,366.7 			"/>
						<polygon class="st7" points="850.8,308.7 912.1,296.3 916.1,315.7 854.8,327.9 			"/>
						<polygon class="st7" points="842.8,269.9 904.1,257.5 908,276.9 846.8,289.2 			"/>
						<polygon class="st7" points="834.8,231.1 896.1,218.8 900.1,238.1 838.9,250.5 			"/>
						<polygon class="st7" points="798.1,155.6 853.3,144.5 848.2,120.3 793.1,131.4 			"/>
						<polygon class="st7" points="784.1,87.8 839.3,76.7 843.3,96 788.1,107.2 			"/>
						<polygon class="st7" points="756.6,69.4 768,124.7 743,133.9 723.2,81.9 			"/>
						<polygon class="st7" points="718.1,143.2 739.1,135.3 761.1,193.2 740,201 			"/>
						<polygon class="st7" points="698.3,91.2 679.5,98.1 699.3,150.1 718.1,143.2 			"/>
						<polygon class="st7" points="660.7,105 641.9,112 661.8,164 680.5,157.1 			"/>
						<polygon class="st7" points="694.6,151.8 716.6,209.7 693.2,218.4 671.2,160.6 			"/>
						<polygon class="st7" points="624.3,177.9 646.3,235.7 669.7,227.1 647.8,169.2 			"/>
						<polygon class="st7" points="604.5,125.9 623.3,118.9 643,171 624.3,177.9 			"/>
						<polygon class="st7" points="805.9,206.2 785.4,208.7 772.4,213.6 792.2,265.6 816.3,256.7 			"/>
						<polygon class="st7" points="748.2,222.5 729.5,229.5 749.3,281.5 768,274.6 			"/>
						<polygon class="st7" points="787.6,333.3 808.8,325.5 786.7,267.6 765.7,275.5 			"/>
						<polygon class="st7" points="766.6,341.1 744.5,283.3 721.1,292 743.2,349.8 			"/>
						<polygon class="st7" points="710.7,236.5 691.9,243.4 711.8,295.4 730.5,288.5 			"/>
						<polygon class="st7" points="673.2,250.4 654.5,257.3 674.3,309.4 693,302.4 			"/>
						<polygon class="st7" points="696.3,367.2 719.7,358.5 697.7,300.6 674.3,309.4 			"/>
						<line class="st8" x1="773.7" y1="500.3" x2="795.6" y2="558.1"/>
						<line class="st8" x1="819" y1="549.4" x2="797.1" y2="491.7"/>
						<line class="st8" x1="820.5" y1="482.9" x2="842.4" y2="540.8"/>
						<line class="st8" x1="865.9" y1="532.1" x2="843.9" y2="474.3"/>
						<line class="st8" x1="867.3" y1="465.6" x2="889.3" y2="523.4"/>
						<line class="st8" x1="912.7" y1="514.7" x2="890.8" y2="456.9"/>
						<line class="st8" x1="911.8" y1="449.1" x2="933.9" y2="506.9"/>
						<line class="st8" x1="870.7" y1="405.5" x2="932" y2="393.2"/>
						<line class="st8" x1="928.1" y1="373.8" x2="866.8" y2="386.1"/>
						<line class="st8" x1="862.8" y1="366.7" x2="924.1" y2="354.4"/>
						<line class="st8" x1="920.1" y1="335" x2="858.8" y2="347.3"/>
						<line class="st8" x1="854.8" y1="327.9" x2="916.1" y2="315.7"/>
						<line class="st8" x1="912.1" y1="296.3" x2="850.8" y2="308.7"/>
						<line class="st8" x1="846.8" y1="289.2" x2="908" y2="276.9"/>
						<line class="st8" x1="904.1" y1="257.5" x2="842.8" y2="269.9"/>
						<line class="st8" x1="838.9" y1="250.5" x2="900.1" y2="238.1"/>
						<line class="st8" x1="896.1" y1="218.8" x2="834.8" y2="231.1"/>
						<line class="st8" x1="830.9" y1="211.7" x2="892.1" y2="199.3"/>
						<line class="st8" x1="793.1" y1="131.4" x2="848.2" y2="120.3"/>
						<line class="st8" x1="843.3" y1="96" x2="788.1" y2="107.2"/>
						<line class="st8" x1="784.1" y1="87.8" x2="839.3" y2="76.7"/>
						<line class="st8" x1="835.3" y1="57.3" x2="780.1" y2="68.5"/>
						<line class="st8" x1="623.3" y1="118.9" x2="643" y2="171"/>
						<line class="st8" x1="647.8" y1="169.2" x2="669.7" y2="227.1"/>
						<line class="st8" x1="693.2" y1="218.4" x2="671.2" y2="160.6"/>
						<line class="st8" x1="661.8" y1="164" x2="641.9" y2="112"/>
						<line class="st8" x1="660.7" y1="105" x2="680.5" y2="157.1"/>
						<line class="st8" x1="694.6" y1="151.8" x2="716.6" y2="209.7"/>
						<line class="st8" x1="740" y1="201" x2="698.3" y2="91.2"/>
						<line class="st8" x1="679.5" y1="98.1" x2="699.3" y2="150.1"/>
						<line class="st8" x1="723.2" y1="81.9" x2="743" y2="133.9"/>
						<line class="st8" x1="761.1" y1="193.2" x2="739.1" y2="135.3"/>
						<line class="st8" x1="768" y1="124.7" x2="624.3" y2="177.9"/>
						<line class="st8" x1="673.2" y1="250.4" x2="693" y2="302.4"/>
						<line class="st8" x1="697.7" y1="300.6" x2="719.7" y2="358.5"/>
						<line class="st8" x1="743.2" y1="349.8" x2="721.1" y2="292"/>
						<line class="st8" x1="711.8" y1="295.4" x2="691.9" y2="243.4"/>
						<line class="st8" x1="710.7" y1="236.5" x2="730.5" y2="288.5"/>
						<line class="st8" x1="744.5" y1="283.3" x2="766.6" y2="341.1"/>
						<line class="st8" x1="787.6" y1="333.3" x2="765.7" y2="275.5"/>
						<line class="st8" x1="749.3" y1="281.5" x2="729.5" y2="229.5"/>
						<line class="st8" x1="748.2" y1="222.5" x2="768" y2="274.6"/>
						<line class="st8" x1="786.7" y1="267.6" x2="808.8" y2="325.5"/>
						<line class="st8" x1="792.2" y1="265.6" x2="772.4" y2="213.6"/>
						<line class="st8" x1="816.3" y1="256.7" x2="674.3" y2="309.4"/>
						<polygon class="st7" points="892.4,199.3 975.8,182.6 981.8,211.6 898.4,228.4 			"/>
						<polygon class="st7" points="904.5,257.5 987.8,240.7 993.9,269.8 910.4,286.5 			"/>
						<polygon class="st7" points="916.5,315.5 999.8,298.8 1005.8,327.8 922.5,344.6 			"/>
						<polygon class="st7" points="928.5,373.7 1011.8,356.9 1019.3,393.1 936,409.9 			"/>
						<polygon class="st7" points="943.4,446.1 1026.7,429.3 1034.2,465.5 954.3,499.3 			"/>
						<polygon class="st6" points="898.4,228.4 981.8,211.6 987.8,240.7 904.5,257.5 			"/>
						<polygon class="st6" points="993.9,269.8 999.8,298.8 916.5,315.5 910.4,286.5 			"/>
						<polygon class="st6" points="1005.8,327.8 1011.8,356.9 928.5,373.7 922.5,344.6 			"/>
						<polygon class="st6" points="1019.3,393.1 1026.7,429.3 943.4,446.1 936,409.9 			"/>
						<line class="st8" x1="892.4" y1="199.3" x2="975.8" y2="182.6"/>
						<line class="st8" x1="981.8" y1="211.6" x2="898.4" y2="228.4"/>
						<line class="st8" x1="904.5" y1="257.5" x2="987.8" y2="240.7"/>
						<line class="st8" x1="993.9" y1="269.8" x2="910.4" y2="286.5"/>
						<line class="st8" x1="916.5" y1="315.5" x2="999.8" y2="298.8"/>
						<line class="st8" x1="1005.8" y1="327.8" x2="922.5" y2="344.6"/>
						<line class="st8" x1="928.5" y1="373.7" x2="1011.8" y2="356.9"/>
						<line class="st8" x1="1019.3" y1="393.1" x2="936" y2="409.9"/>
						<line class="st8" x1="943.4" y1="446.1" x2="1026.7" y2="429.3"/>
						<path class="st3" d="M853.6,144.5l12.7,49.9c2.3,1.6,6.9,4.4,13.4,5.3c5.4,0.8,9.9,0,12.5-0.7c20.7,100.2,41.4,200.5,62.1,300.7
							l-262.5,97.3L497.8,87c51.5-11.6,108.3-22,170-29.8c59-7.5,114.3-11.5,165.1-13.2C839.8,77.5,846.7,111,853.6,144.5z"/>
						<polygon class="st6" points="894.5,75.7 980.3,58.4 986.3,87.5 900.5,104.8 			"/>
						<polygon class="st6" points="1056.5,42.7 1091.5,42.5 1091.9,131.5 1056.9,131.7 			"/>
						<polygon class="st6" points="1126.6,42.4 1161.6,42.3 1161.9,131.2 1127,131.3 			"/>
						<path class="st6" d="M1232.3,70.1c2.1,1,4.6,2.1,7.4,3c2.6,0.9,5.1,1.5,7.3,1.9c23.9,3.7,47.7,7.4,71.5,11l-4.7,30.2l-86.5-13.1
							L1232.3,70.1z"/>
						<polygon class="st6" points="1222.7,132.3 1309.1,145.6 1304.6,174.9 1218,161.6 			"/>
						<polygon class="st6" points="1213.5,191 1300,204.2 1295.4,233.5 1208.9,220.3 			"/>
						<polygon class="st6" points="1240.6,284.3 1275,363.8 1243,377.4 1208.6,297.8 			"/>
						<polygon class="st6" points="1178.7,310.5 1213.1,390 1185.5,401.6 1151,322.1 			"/>
						<polygon class="st6" points="1123.4,333.8 1157.9,413.3 1130.3,425 1095.8,345.4 			"/>
						<polygon class="st6" points="1068.2,357.1 1102.7,436.6 1058.5,455.3 1040.6,368.8 			"/>
						<polygon class="st6" points="1192.7,156.6 1144.3,156.8 1144.6,240.8 1179.6,240.7 			"/>
						<polygon class="st6" points="1074.2,157.1 1109.2,156.9 1109.5,240.9 1074.5,241 			"/>
						<polygon class="st6" points="1039.1,159.6 1039.4,241.2 1014.3,241.2 999.1,167.6 			"/>
						<polygon class="st7" points="992.4,116.6 906.5,133.8 900.5,104.8 986.3,87.5 			"/>
						<polygon class="st7" points="1003.4,42.9 1056.5,42.7 1056.9,131.7 1021.8,131.8 			"/>
						<polygon class="st7" points="1091.5,42.5 1126.6,42.4 1127,131.3 1091.9,131.5 			"/>
						<path class="st7" d="M1161.6,42.3l0.4,89l34.7-0.2l12.4-79c-1-1.7-3.4-4.9-7.6-7.3c-3.8-2.1-7.4-2.6-9.2-2.7
							C1182,42.2,1171.8,42.2,1161.6,42.3z"/>
						<polygon class="st7" points="1227.2,103 1313.7,116.2 1309.1,145.6 1222.7,132.3 			"/>
						<polygon class="st7" points="1218,161.6 1304.6,174.9 1300,204.2 1213.5,191 			"/>
						<polygon class="st7" points="1204.3,249.6 1290.8,262.8 1295.4,233.5 1208.9,220.3 			"/>
						<polygon class="st7" points="1068.2,357.1 1095.8,345.4 1130.3,425 1102.7,436.6 			"/>
						<polygon class="st7" points="1123.4,333.8 1151,322.1 1185.5,401.6 1157.9,413.3 			"/>
						<polygon class="st7" points="1178.7,310.5 1208.6,297.8 1243,377.4 1213.1,390 			"/>
						<polygon class="st7" points="1109.2,156.9 1144.3,156.8 1144.6,240.8 1109.5,240.9 			"/>
						<polygon class="st7" points="1074.2,157.1 1074.5,241 1039.4,241.2 1039.1,159.6 1051,157.2 			"/>
						<line class="st8" x1="900.5" y1="104.8" x2="986.3" y2="87.5"/>
						<line class="st8" x1="980.3" y1="58.4" x2="894.5" y2="75.7"/>
						<line class="st8" x1="1056.5" y1="42.7" x2="1056.9" y2="131.7"/>
						<line class="st8" x1="1091.9" y1="131.5" x2="1091.5" y2="42.5"/>
						<line class="st8" x1="1126.6" y1="42.4" x2="1127" y2="131.3"/>
						<line class="st8" x1="1161.9" y1="131.2" x2="1161.6" y2="42.3"/>
						<line class="st8" x1="1227.2" y1="103" x2="1313.7" y2="116.2"/>
						<line class="st8" x1="1309.1" y1="145.6" x2="1222.7" y2="132.3"/>
						<line class="st8" x1="1218" y1="161.6" x2="1304.6" y2="174.9"/>
						<line class="st8" x1="1300" y1="204.2" x2="1213.5" y2="191"/>
						<line class="st8" x1="1208.9" y1="220.3" x2="1295.4" y2="233.5"/>
						<line class="st8" x1="1290.8" y1="262.8" x2="1204.3" y2="249.6"/>
						<line class="st8" x1="1240.6" y1="284.3" x2="1275" y2="363.8"/>
						<line class="st8" x1="1243" y1="377.4" x2="1208.6" y2="297.8"/>
						<line class="st8" x1="1178.7" y1="310.5" x2="1213.1" y2="390"/>
						<line class="st8" x1="1185.5" y1="401.6" x2="1151" y2="322.1"/>
						<line class="st8" x1="1123.4" y1="333.8" x2="1157.9" y2="413.3"/>
						<line class="st8" x1="1130.3" y1="425" x2="1095.8" y2="345.4"/>
						<line class="st8" x1="1068.2" y1="357.1" x2="1102.7" y2="436.6"/>
						<line class="st8" x1="1039.4" y1="241.2" x2="1039.1" y2="159.6"/>
						<line class="st8" x1="1074.2" y1="157.1" x2="1074.5" y2="241"/>
						<line class="st8" x1="1109.5" y1="240.9" x2="1109.2" y2="156.9"/>
						<line class="st8" x1="1144.3" y1="156.8" x2="1144.6" y2="240.8"/>
						<line class="st8" x1="1179.6" y1="240.7" x2="1014.3" y2="241.2"/>
						<path class="st3" d="M906.2,133.9l-18.8-91l305.3-1.2c2,0.2,6,0.8,10.2,3.5c4,2.6,6.3,5.9,7.4,7.6c3.6,4.1,9.6,10.2,18.5,15
							c7,3.8,13.5,5.7,18.3,6.7c24,3.7,47.9,7.4,71.9,11.1l-43.4,278.4L954.2,499.7L892.2,199c2.9-0.6,7.1-1.9,11.6-4.6
							c5.4-3.3,8.9-7.3,10.7-9.9C911.7,167.7,908.9,150.8,906.2,133.9z"/>
					</g>
					<g>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 935.0942 204.4201)" class="st9 st10 st11">01</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 929.8569 209.9254)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 941.6599 232.263)" class="st9 st10 st11">02</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 936.4225 237.7674)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 929.6821 195.9875)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 934.4719 218.7709)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 941.6961 247.7614)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 973.514 193.9642)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 979.6682 221.7067)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 897.5081 209.7969)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 903.6398 237.3129)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 947.6332 262.0857)" class="st9 st10 st11">03</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 942.3989 267.5855)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 947.67 277.5831)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 985.642 251.5275)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 909.6149 267.1344)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 954.3187 290.9107)" class="st9 st10 st11">04</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 949.0826 296.4118)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 954.3527 306.4083)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 992.3268 280.3537)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 916.297 295.9601)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 959.6812 320.3776)" class="st9 st10 st11">05</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 954.4445 325.8808)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 959.7177 335.8764)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 997.6889 309.8215)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 921.6616 325.4304)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 965.277 348.4075)" class="st9 st10 st11">06</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 960.041 353.9116)" class="st12 st13 st11">408.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 965.3139 363.9084)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 1003.2866 337.8511)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 927.2591 353.459)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 971.8346 382.3952)" class="st9 st10 st11">07</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 966.5973 387.8976)" class="st12 st13 st11">508.18m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 973.1883 400.3186)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 1011.0635 373.342)" class="st12 st13 st15">14.95</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 1050.4519 409.3161)" class="st12 st13 st15">33.73</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1082.0007 398.5566)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1108.2605 384.7371)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 934.6248 387.7352)" class="st12 st13 st15">14.95</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 979.8793 418.635)" class="st9 st10 st11">08</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 974.6418 424.1364)" class="st12 st13 st11">508.18m2</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1069.361 402.7623)" class="st9 st10 st15">10</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1062.8477 398.8553)" class="st12 st13 st15">546.17m2</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1101.0127 391.6815)" class="st9 st10 st15">11</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1094.4983 387.7686)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 988.4951 455.9679)" class="st9 st10 st11">09</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 983.2601 461.4698)" class="st12 st13 st11">627.24m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 980.0118 437.0007)" class="st12 st13 st14">34.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 993.5651 480.2119)" class="st12 st13 st11">34.71</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1074.8047 444.8412)" class="st12 st13 st11">19.21</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1050.5969 369.1237)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1079.473 356.3472)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1110.5193 429.7089)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1135.066 373.5685)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1127.8171 380.5134)" class="st9 st10 st15">12</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1121.3052 376.6048)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1106.2797 345.1875)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1137.325 418.5433)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1163.434 362.1757)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1156.1835 369.1183)" class="st9 st10 st15">13</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1149.6729 365.2101)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1134.6445 333.7882)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1165.6932 407.148)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1191.0576 349.8232)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1183.8058 356.7664)" class="st9 st10 st15">14</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1177.2969 352.8586)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1162.2706 321.4399)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1193.3164 394.7987)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1220.3984 337.7101)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1213.1486 344.657)" class="st9 st10 st15">15</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1206.637 340.7481)" class="st12 st13 st15">455.00m2</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1191.61 309.3275)" class="st12 st13 st11">13.00</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1222.6578 382.6877)" class="st12 st13 st11">13.00</text>
						<text transform="matrix(0.3927 0.9197 -0.9197 0.3927 1252.7086 323.158)" class="st12 st13 st16">35.00</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1248.7019 230.1752)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1253.4124 201.1467)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1244.4631 254.5049)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1208.391 230.1759)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1213.6251 199.2446)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1182.0283 197.3292)" class="st12 st13 st11">34.42</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1289.0841 243.3733)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1293.3929 212.8032)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1243.5454 330.8853)" class="st9 st10 st15">16</text>
						<text transform="matrix(0.4072 0.9133 -0.9133 0.4072 1237.0334 326.9755)" class="st12 st13 st15">488.08m2</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1248.8116 240.1139)" class="st9 st10 st11">17</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1241.9707 243.4144)" class="st12 st13 st11">420.00m2</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1253.4314 211.2597)" class="st9 st10 st11">18</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1246.5865 214.56)" class="st12 st13 st11">420.00m2</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1257.911 172.3183)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1218.1248 170.4168)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1297.8947 183.9747)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1257.932 182.4326)" class="st9 st10 st11">19</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1251.0922 185.7323)" class="st12 st13 st11">420.00m2</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1263.1183 143.4065)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1223.3281 141.5043)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1303.101 155.0623)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1263.1367 153.5227)" class="st9 st10 st11">20</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1256.2971 156.821)" class="st12 st13 st11">420.00m2</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1267.403 113.7812)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(0.9883 0.1524 -0.1524 0.9883 1272.016 84.1148)" class="st12 st13 st11">35.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1174.285 129.8266)" class="st12 st13 st11">13.89</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1139.1378 129.9028)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1138.0427 47.0813)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1171.826 47.0827)" class="st12 st13 st11">11.75</text>
						<text transform="matrix(0.884 0.4675 -0.4675 0.884 1195.5295 47.5279)" class="st12 st13 st11">7.76</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1227.6149 111.8779)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1231.8174 81.619)" class="st12 st13 st11">13.46</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1307.3849 125.4354)" class="st12 st13 st11">12.00</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1311.6891 95.4333)" class="st12 st13 st11">12.70</text>
						<text transform="matrix(-0.1524 0.9883 -0.9883 -0.1524 1199.9517 83.6719)" class="st12 st13 st11">32.88</text>
						<text transform="matrix(1.150000e-03 1 -1 1.150000e-03 1163.1255 78.3894)" class="st12 st13 st11">36.00</text>
						<text transform="matrix(1.150000e-03 1 -1 1.150000e-03 1128.6465 79.3465)" class="st12 st13 st11">36.00</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1267.4166 123.8939)" class="st9 st10 st11">21</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1260.5775 127.1952)" class="st12 st13 st11">420.00m2</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1272.9591 94.763)" class="st9 st10 st11">22</text>
						<text transform="matrix(0.987 0.1607 -0.1607 0.987 1266.1171 98.0638)" class="st12 st13 st11">435.64m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1182.3601 83.8557)" class="st9 st10 st11">23</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1178.0189 77.6205)" class="st12 st13 st11">592.65m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1146.5249 83.2186)" class="st9 st10 st11">24</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1142.1827 76.9848)" class="st12 st13 st11">504.00m2</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1103.3838 129.9046)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1102.2897 47.0836)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1.150000e-03 1 -1 1.150000e-03 1092.8948 79.3466)" class="st12 st13 st11">36.00</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1110.774 83.2189)" class="st9 st10 st11">25</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1106.4309 76.9837)" class="st12 st13 st11">504.00m2</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1068.6448 130.535)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1067.5507 47.7164)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1025.5935 47.7151)" class="st12 st13 st11">21.87</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1033.3929 129.7991)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1058.8768 160.5751)" class="st12 st13 st11">9.08</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1021.2211 239.4097)" class="st12 st13 st11">10.05</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1052.2689 239.6421)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1087.3053 239.41)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1086.624 160.5802)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(0.9793 -0.2022 0.2022 0.9793 1041.9983 162.5251)" class="st12 st13 st14">5.02</text>
						<text transform="matrix(0.9793 -0.2022 0.2022 0.9793 1014.3322 168.0105)" class="st12 st13 st14">16.32</text>
						<text transform="matrix(-0.2063 -0.9785 0.9785 -0.2063 1011.265 208.6132)" class="st12 st13 st16">30.41</text>
						<text transform="matrix(1.268000e-02 -0.9999 0.9999 1.268000e-02 1073.186 207.5775)" class="st12 st13 st11">34.00</text>
						<text transform="matrix(1.268000e-02 -0.9999 0.9999 1.268000e-02 1107.9242 207.5776)" class="st12 st13 st11">34.00</text>
						<text transform="matrix(1.268000e-02 -0.9999 0.9999 1.268000e-02 1037.1133 207.1616)" class="st12 st13 st11">33.02</text>
						<text transform="matrix(1.150000e-03 1 -1 1.150000e-03 1058.1586 79.9808)" class="st12 st13 st11">36.00</text>
						<text transform="matrix(0.252 0.9677 -0.9677 0.252 1011.772 79.5878)" class="st12 st13 st15">36.71</text>
						<text transform="matrix(0.1908 0.9816 -0.9816 0.1908 979.4407 69.9793)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1908 0.9816 -0.9816 0.1908 898.8185 84.6857)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1908 0.9816 -0.9816 0.1908 905.3103 115.5802)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.1908 0.9816 -0.9816 0.1908 985.4683 100.1542)" class="st12 st13 st15">12.00</text>
						<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 933.7623 71.8337)" class="st12 st13 st15">35.00</text>
						<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 939.814 95.1186)" class="st12 st13 st15">35.00</text>
						<text transform="matrix(0.9816 -0.1908 0.1908 0.9816 945.8668 124.9136)" class="st12 st13 st15">35.00</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1076.0323 83.8515)" class="st9 st10 st11">26</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1071.6942 77.6178)" class="st12 st13 st11">504.00m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1037.8881 81.8445)" class="st9 st10 st11">27</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1033.5439 75.6088)" class="st12 st13 st11">633.36m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1024.7557 198.4574)" class="st9 st10 st11">30</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1020.4126 192.2227)" class="st12 st13 st11">414.06m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1059.0852 200.2168)" class="st9 st10 st11">31</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1054.7432 193.9821)" class="st12 st13 st11">473.58m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1095.0559 200.9597)" class="st9 st10 st11">32</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1090.7137 194.7264)" class="st12 st13 st11">476.00m2</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1121.9666 239.4093)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1157.9332 239.6407)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1121.2823 160.5795)" class="st12 st13 st11">14.00</text>
						<text transform="matrix(1 -3.600000e-03 3.600000e-03 1 1161.9934 160.5809)" class="st12 st13 st11">19.38</text>
						<text transform="matrix(1.268000e-02 -0.9999 0.9999 1.268000e-02 1142.5823 207.5757)" class="st12 st13 st11">34.00</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1129.7101 200.9606)" class="st9 st10 st11">32</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1125.3699 194.7259)" class="st12 st13 st11">476.00m2</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1167.4738 199.7216)" class="st9 st10 st11">33</text>
						<text transform="matrix(-2.450000e-03 1 -1 -2.450000e-03 1163.1335 193.4898)" class="st12 st13 st11">567.39m2</text>
						<text transform="matrix(0.9829 -0.184 0.184 0.9829 939.481 82.0797)" class="st9 st10 st15">28</text>
						<text transform="matrix(0.9829 -0.184 0.184 0.9829 934.1641 87.5062)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9829 -0.184 0.184 0.9829 946.0443 110.188)" class="st9 st10 st15">29</text>
						<text transform="matrix(0.9829 -0.184 0.184 0.9829 940.7287 115.6113)" class="st12 st13 st15">420.00m2</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1222.0067 295.5545)" class="st12 st13 st11">13.95</text>
						<text transform="matrix(0.9448 -0.3276 0.3276 0.9448 1253.0525 368.9132)" class="st12 st13 st11">13.95</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 1017.8891 410.0263)" class="st12 st13 st15">14.95</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 1025.8859 443.2639)" class="st12 st13 st15">14.95</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 941.4492 424.4207)" class="st12 st13 st15">14.95</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 950.2031 465.3209)" class="st12 st13 st15">21.95</text>
					</g>
					<g>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 861.0582 214.6688)" class="st9 st10 st11">01</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 855.8202 220.1703)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 806.9377 72.0039)" class="st9 st10 st11">47</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 801.7006 77.5022)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 810.0662 89.5452)" class="st9 st10 st11">48</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 804.8286 95.0466)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 814.5112 111.7033)" class="st9 st10 st11">49</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 809.2742 117.2076)" class="st12 st13 st11">225.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 864.5456 232.8828)" class="st9 st10 st11">02</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 859.3091 238.387)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 857.0202 210.3018)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 802.918 67.7778)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 805.9439 82.445)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 810.4056 101.676)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 814.5771 125.6812)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 860.3026 225.0047)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 864.1306 244.4919)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 888.9131 206.442)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 893.5638 226.957)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 833.0441 217.9322)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 782.0961 73.8637)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 786.6077 94.5316)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 791.1834 115.0355)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 840.3887 104.594)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 819.9138 135.9973)" class="st9 st10 st11">50</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 814.6755 141.4979)" class="st12 st13 st11">225.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 819.9788 149.9742)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 796.5855 139.3291)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 845.7903 128.8827)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 832.4586 64.4807)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 836.7166 83.7135)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 837.0779 237.1974)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 868.0497 251.9981)" class="st9 st10 st11">03</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 862.8129 257.5004)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 867.6371 263.6057)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 897.0683 246.0719)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 840.5831 256.3131)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 872.0671 271.3434)" class="st9 st10 st11">04</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 866.8289 276.844)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 871.6516 282.9518)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 901.0845 265.4192)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 844.5974 275.6578)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 876.511 290.231)" class="st9 st10 st11">05</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 871.2748 295.7341)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 876.0976 301.8407)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 905.5284 284.3007)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 849.0441 294.5437)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 880.0543 309.9421)" class="st9 st10 st11">06</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 874.8154 315.4418)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 879.6387 321.5453)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 909.074 304.0137)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 852.5864 314.2554)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 884.0269 329.1649)" class="st9 st10 st11">07</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 878.7903 334.6661)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 883.6127 340.7754)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 913.0468 323.2392)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 856.5601 333.4826)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 888.3037 348.8992)" class="st9 st10 st11">08</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 883.0656 354.3978)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 887.8895 360.5076)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 917.3214 342.9674)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 860.8357 353.2107)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 892.0255 367.7583)" class="st9 st10 st11">09</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 886.7888 373.2585)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 891.6109 379.3665)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 921.0454 361.8329)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 864.5579 372.0745)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 896.2928 387.3769)" class="st9 st10 st11">10</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 891.0556 392.8773)" class="st12 st13 st11">200.00m2</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 901.6476 410.6823)" class="st9 st10 st11">11</text>
						<text transform="matrix(0.9802 -0.198 0.198 0.9802 896.4093 416.1849)" class="st12 st13 st11">278.66m2</text>
						<text transform="matrix(0.3868 0.9222 -0.9222 0.3868 935.2006 471.4645)" class="st9 st10 st14">12</text>
						<text transform="matrix(0.3868 0.9222 -0.9222 0.3868 928.7743 467.4099)" class="st12 st13 st14">264.61m2</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 912.9731 478.0746)" class="st9 st10 st14">13</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 906.7011 473.7885)" class="st12 st13 st14">225.00m2</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 891.022 486.4839)" class="st9 st10 st14">14</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 884.7514 482.2015)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9777 -0.2102 0.2102 0.9777 895.8779 398.988)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 902.0256 426.6555)" class="st12 st13 st14">25.32</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 939.5431 502.3792)" class="st12 st13 st14">8.59</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 923.1343 449.6324)" class="st12 st13 st14">12.58</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 898.4706 457.4832)" class="st12 st13 st14">9.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 875.4645 466.4227)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 896.0841 518.4261)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 918.3845 510.2569)" class="st12 st13 st14">9.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 925.3101 381.4496)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 929.6191 402.7149)" class="st12 st13 st15">9.15</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 942.0096 465.323)" class="st12 st13 st15">25.32</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 868.8245 391.6888)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.1938 0.981 -0.981 0.1938 874.5118 416.7861)" class="st12 st13 st15">13.14</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 922.4863 471.4452)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 900.8762 480.6082)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 878.1177 489.1211)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 868.339 495.1694)" class="st9 st10 st14">15</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 862.0681 490.886)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 852.7805 475.1049)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 873.399 527.1097)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 855.4336 497.8052)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 844.9011 503.9923)" class="st9 st10 st14">16</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 838.6288 499.7043)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 829.343 483.9285)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 849.9626 535.932)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 831.9959 506.6281)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 820.7548 512.8674)" class="st9 st10 st14">17</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 814.4819 508.5859)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 805.196 492.8018)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 825.8154 544.8063)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 807.8481 515.5052)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 797.3538 521.1724)" class="st9 st10 st14">18</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 791.082 516.8883)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 781.7958 501.1072)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 802.4163 553.1134)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 784.4484 523.8096)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 773.9333 530.6422)" class="st9 st10 st14">19</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 767.6617 526.3559)" class="st12 st13 st14">250.00m2</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 714.5441 576.3763)" class="st9 st10 st14">20</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 710.2613 582.6517)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 708.6385 558.7835)" class="st9 st10 st14">21</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 704.3557 565.0589)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 758.3749 510.5742)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 778.9938 562.58)" class="st12 st13 st14">10.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 715.6039 585.1473)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 710.0629 572.5298)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 702.8095 554.3437)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 761.0291 533.279)" class="st12 st13 st16">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 689.588 583.3545)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 682.4118 565.0919)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 742.1379 563.5076)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 735.09 545.426)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 701.5791 540.3214)" class="st9 st10 st14">22</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 697.2952 546.5952)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 695.7484 535.8787)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 675.3522 546.6311)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 728.0285 526.9616)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 694.1816 521.7876)" class="st9 st10 st14">23</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 689.8983 528.0632)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 688.3536 517.3476)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 667.9535 528.0971)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 720.6306 508.4294)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 687.1619 503.2594)" class="st9 st10 st14">24</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 682.8776 509.5333)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 681.3319 498.8159)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 660.9312 509.5655)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 713.6098 489.8994)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 681.0538 485.076)" class="st9 st10 st14">25</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 676.7711 491.3503)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 675.2261 480.633)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 654.8245 491.382)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 707.5021 471.7132)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 674.0115 466.4342)" class="st9 st10 st14">26</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 669.7271 472.705)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 668.1808 461.9897)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 647.7825 472.743)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 700.4611 453.0768)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 666.5439 448.4321)" class="st9 st10 st14">27</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 662.2606 454.7046)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 660.7136 443.9855)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 640.3138 454.7366)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 692.9915 435.0719)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 658.9959 429.2234)" class="st9 st10 st14">28</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 654.7118 435.4951)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 653.1645 424.7768)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 632.7662 435.5277)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 685.443 415.8581)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 652.313 410.4783)" class="st9 st10 st14">29</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 648.0279 416.7503)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 646.483 406.0341)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 626.0829 416.7838)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 678.7617 397.1166)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 645.2306 392.9037)" class="st9 st10 st14">30</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 640.9487 399.1799)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 639.4008 388.4611)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 619.0024 399.2113)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 671.6766 379.5417)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 638.5295 374.3304)" class="st9 st10 st14">31</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 634.2466 380.6028)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 632.6989 369.8859)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 612.3016 380.6362)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 664.9769 360.9682)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 631.8861 355.6237)" class="st9 st10 st14">32</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 627.601 361.8968)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 626.0546 351.1802)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 605.6572 361.9297)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 658.3342 342.2632)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 624.2952 337.1597)" class="st9 st10 st14">33</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 620.0118 343.4333)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 618.4645 332.7166)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 598.0665 343.465)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 650.7424 323.7957)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 617.2193 317.9336)" class="st9 st10 st14">34</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 612.9346 324.2065)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 611.3873 313.4897)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 590.9891 324.2414)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 643.6662 304.5727)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 610.4485 299.8656)" class="st9 st10 st14">35</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 606.1652 306.1381)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 604.6168 295.4196)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 584.2174 306.1712)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 636.8948 286.5003)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 603.6404 281.3557)" class="st9 st10 st14">36</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 599.3557 287.6287)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 597.8077 276.9092)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 577.4099 287.6599)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 630.0869 267.9923)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 596.4336 263.3355)" class="st9 st10 st14">37</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 592.1475 269.6048)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 590.6018 258.8905)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 570.2044 269.6407)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 622.8803 249.9714)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 589.5574 244.1435)" class="st9 st10 st14">38</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 585.2735 250.4173)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 583.7247 239.6984)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 563.3258 250.4518)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 616.0045 230.7815)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 581.5912 226.3568)" class="st9 st10 st14">39</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 577.3079 232.6334)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 575.7598 221.9148)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 555.3619 232.6663)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 608.0368 212.9932)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 575.121 208.1462)" class="st9 st10 st14">40</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 570.8387 214.4214)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 569.291 203.7033)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 548.8922 214.4534)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 601.5693 194.7889)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 568.4343 188.7939)" class="st9 st10 st14">41</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 564.1503 195.0688)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 562.6014 184.3484)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 542.2045 195.0995)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 594.8817 175.435)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 561.3968 170.6263)" class="st9 st10 st14">42</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 557.1138 176.8997)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 624.3094 145.3351)" class="st9 st10 st11">51</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 618.0219 141.0689)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 642.6362 138.9071)" class="st9 st10 st11">52</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 636.3507 134.6422)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 555.5656 166.1798)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 610.783 127.1302)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 630.2073 120.1599)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 629.3838 174.9532)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 648.5362 167.8421)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 535.1685 176.9328)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 587.8447 157.2656)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 613.2516 146.2638)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 627.8162 141.4078)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 646.1895 134.0881)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 661.1877 131.8084)" class="st9 st10 st11">53</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 654.9001 127.538)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 648.7566 113.0575)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 667.0872 160.7402)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 664.7411 126.9883)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 679.9421 125.0023)" class="st9 st10 st11">54</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 673.6549 120.7328)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 667.5092 106.2519)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 685.842 153.9338)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 683.495 120.1788)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 698.7266 117.9966)" class="st9 st10 st11">55</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 692.4412 113.7307)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 686.3002 99.2545)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 704.6282 146.9329)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 702.2807 113.1789)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 720.2012 109.911)" class="st9 st10 st11">56</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 713.9148 105.6476)" class="st12 st13 st11">239.71m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 748.1006 98.7663)" class="st9 st10 st11">57</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 741.8151 94.5025)" class="st12 st13 st11">280.13m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 761.9397 155.2409)" class="st9 st10 st11">58</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 755.6542 150.9771)" class="st12 st13 st11">257.82m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 741.1512 165.5125)" class="st9 st10 st11">59</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 734.8661 161.2485)" class="st12 st13 st11">225.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 719.1674 174.5057)" class="st9 st10 st11">60</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 712.884 170.2421)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 706.8244 91.506)" class="st12 st13 st15">10.65</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 735.7415 81.4552)" class="st12 st13 st15">14.25</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 750.6167 129.7894)" class="st12 st13 st15">10.65</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 751.1638 135.5075)" class="st12 st13 st15">12.31</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 766.8779 189.3397)" class="st12 st13 st15">8.32</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 746.7702 197.0272)" class="st12 st13 st15">9.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 726.6412 144.3872)" class="st12 st13 st15">9.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 722.9871 205.6018)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 702.7723 153.2074)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 725.1564 139.1913)" class="st12 st13 st15">10.65</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 727.1049 103.7054)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 751.176 163.2522)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 730.2534 169.5306)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 706.3958 177.8866)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 695.927 183.1217)" class="st9 st10 st11">61</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 689.6419 178.8577)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 699.7455 214.2152)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 679.5303 161.821)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 683.1544 186.5007)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 672.4932 191.6921)" class="st9 st10 st11">62</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 666.21 187.4264)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 676.3121 222.7834)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 656.0951 170.3898)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 659.7211 195.069)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 663.1711 278.3601)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 677.8965 273.4865)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 696.1311 266.5536)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 649.0319 200.7036)" class="st9 st10 st11">63</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 642.7479 196.4371)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 673.6211 277.9391)" class="st9 st10 st11">64</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 667.336 273.6751)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 693.3126 271.6591)" class="st9 st10 st11">65</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 687.0272 267.3943)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 652.8499 231.7969)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 661.6185 259.6251)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 680.8823 251.2118)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 678.7495 306.5136)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 699.2635 299.0558)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 714.5253 259.9686)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 711.7061 265.073)" class="st9 st10 st11">66</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 705.4209 260.806)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 699.2748 244.6244)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 717.6582 292.4697)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 733.235 252.2193)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 730.417 257.3253)" class="st9 st10 st11">67</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 724.132 253.0602)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 717.988 236.8817)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 736.3714 284.7301)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 751.4974 245.9559)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 748.6802 251.0625)" class="st9 st10 st11">68</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 742.3928 246.7964)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 736.2487 230.616)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 754.6321 278.4614)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 777.1575 236.2889)" class="st12 st13 st14">22.50</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 798.4941 294.9764)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 777.8192 303.3051)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 770.1 242.86)" class="st9 st10 st11">69</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 763.8143 238.5931)" class="st12 st13 st11">180.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 811.4305 290.0411)" class="st9 st10 st11">71</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 805.1434 285.7759)" class="st12 st13 st11">265.62m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 788.5551 299.6853)" class="st9 st10 st11">72</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 782.2694 295.4185)" class="st12 st13 st11">225.00m2</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 796.0505 233.7156)" class="st9 st10 st11">70</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 789.7655 229.4505)" class="st12 st13 st11">264.56m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 757.6692 222.4125)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 777.3636 215.5023)" class="st12 st13 st15">5.69</text>
						<text transform="matrix(0.9895 -0.1443 0.1443 0.9895 792.7449 211.0704)" class="st12 st13 st15">8.12</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 776.0522 270.26)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 799.1099 261.377)" class="st12 st13 st15">10.31</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 815.0315 321.8035)" class="st12 st13 st15">8.63</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 798.357 267.5565)" class="st12 st13 st15">12.62</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 773.3174 276.7482)" class="st12 st13 st15">9.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 794.4086 329.1815)" class="st12 st13 st15">9.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 632.6355 179.4034)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 636.2589 204.0788)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.2153 0.9765 -0.9765 0.2153 758.3788 93.4595)" class="st12 st13 st14">22.78</text>
						<text transform="matrix(0.2153 0.9765 -0.9765 0.2153 770.6891 154.5154)" class="st12 st13 st14">25.32</text>
						<text transform="matrix(0.2153 0.9765 -0.9765 0.2153 806.9144 229.7152)" class="st12 st13 st14">20.85</text>
						<text transform="matrix(0.2153 0.9765 -0.9765 0.2153 818.8132 287.5477)" class="st12 st13 st14">25.32</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 553.936 151.8241)" class="st9 st10 st14">43</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 549.6523 158.0968)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 548.1041 147.3795)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 527.7061 158.1295)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 580.3828 138.4609)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 547.2966 134.05)" class="st9 st10 st14">44</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 543.0126 140.3249)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 541.4636 129.6047)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 521.0669 140.3578)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 573.7432 120.6894)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 540.2512 114.6433)" class="st9 st10 st14">45</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 535.9678 120.9158)" class="st12 st13 st14">200.00m2</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 531.8405 93.8542)" class="st9 st10 st14">46</text>
						<text transform="matrix(0.9355 -0.3532 0.3532 0.9355 527.5565 100.128)" class="st12 st13 st14">257.08m2</text>
						<text transform="matrix(0.9481 -0.3181 0.3181 0.9481 534.4193 110.1978)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.9798 -0.2 0.2 0.9798 524.4074 86.2686)" class="st12 st13 st11">25.30</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 514.0214 120.9484)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 504.5236 98.0617)" class="st12 st13 st16">12.14</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 566.6976 101.2801)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3573 0.934 -0.934 0.3573 558.9531 81.447)" class="st12 st13 st16">8.28</text>
						<g>
							<polygon class="st17" points="844.2,216.4 847.7,219.9 844.2,223.3 844.2,223.3 				"/>
							<polygon class="st18" points="844.2,216.4 844.2,223.3 840.8,219.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="791.6,216.2 795,219.7 791.6,223.1 791.6,223.1 				"/>
							<polygon class="st18" points="791.6,216.2 791.6,223.1 788.1,219.7 				"/>
						</g>
						<g>
							<polygon class="st17" points="814.8,306.3 818.3,309.7 814.8,313.2 814.8,313.2 				"/>
							<polygon class="st18" points="814.8,306.3 814.8,313.2 811.4,309.7 				"/>
						</g>
						<g>
							<polygon class="st17" points="793.9,314.9 797.4,318.4 793.9,321.9 793.9,321.9 				"/>
							<polygon class="st18" points="793.9,314.9 793.9,321.9 790.5,318.4 				"/>
						</g>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 757.197 311.3137)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 765.9009 304.5366)" class="st9 st10 st11">73</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 759.6165 300.2744)" class="st12 st13 st11">225.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 752.6946 284.7543)" class="st12 st13 st15">9.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 773.785 337.1911)" class="st12 st13 st15">9.00</text>
						<g>
							<polygon class="st17" points="773.4,323 776.8,326.4 773.4,329.9 773.4,329.9 				"/>
							<polygon class="st18" points="773.4,323 773.4,329.9 769.9,326.4 				"/>
						</g>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 733.2357 319.8672)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 744.6165 313.5748)" class="st9 st10 st11">74</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 738.3311 309.3099)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 729.0408 293.0995)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 750.1328 345.5367)" class="st12 st13 st15">10.00</text>
						<g>
							<polygon class="st17" points="750.6,330.9 754.1,334.4 750.6,337.8 750.6,337.8 				"/>
							<polygon class="st18" points="750.6,330.9 750.6,337.8 747.2,334.4 				"/>
						</g>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 710.5262 328.5342)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 721.1862 322.1283)" class="st9 st10 st11">75</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 714.8982 317.8623)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 706.3308 301.769)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 727.4228 354.2031)" class="st12 st13 st15">10.00</text>
						<g>
							<polygon class="st17" points="727.9,339.6 731.4,343.1 727.9,346.5 727.9,346.5 				"/>
							<polygon class="st18" points="727.9,339.6 727.9,346.5 724.5,343.1 				"/>
						</g>
						<text transform="matrix(0.3511 0.9363 -0.9363 0.3511 687.0681 337.651)" class="st12 st13 st14">25.00</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 698.7272 330.7946)" class="st9 st10 st11">76</text>
						<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 692.4406 326.5291)" class="st12 st13 st11">250.00m2</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 682.8735 310.8825)" class="st12 st13 st15">10.00</text>
						<text transform="matrix(0.939 -0.3438 0.3438 0.939 703.9635 363.3184)" class="st12 st13 st15">10.00</text>
						<g>
							<polygon class="st17" points="704.4,348.7 707.9,352.2 704.4,355.6 704.4,355.6 				"/>
							<polygon class="st18" points="704.4,348.7 704.4,355.6 701,352.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="791.6,73.9 795,77.4 791.6,80.8 791.6,80.8 				"/>
							<polygon class="st18" points="791.6,73.9 791.6,80.8 788.1,77.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="806,139.1 809.4,142.6 806,146 806,146 				"/>
							<polygon class="st18" points="806,139.1 806,146 802.6,142.6 				"/>
						</g>
						<g>
							<polygon class="st17" points="741.6,83 745,86.5 741.6,89.9 741.6,89.9 				"/>
							<polygon class="st18" points="741.6,83 741.6,89.9 738.1,86.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="766.8,174.4 770.2,177.9 766.8,181.3 766.8,181.3 				"/>
							<polygon class="st18" points="766.8,174.4 766.8,181.3 763.3,177.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="653.2,217.1 656.6,220.5 653.2,224 653.2,224 				"/>
							<polygon class="st18" points="653.2,217.1 653.2,224 649.7,220.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="667.9,261.2 671.4,264.6 667.9,268.1 667.9,268.1 				"/>
							<polygon class="st18" points="667.9,261.2 667.9,268.1 664.4,264.6 				"/>
						</g>
						<g>
							<polygon class="st17" points="617.2,129.3 620.7,132.7 617.2,136.2 617.2,136.2 				"/>
							<polygon class="st18" points="617.2,129.3 617.2,136.2 613.8,132.7 				"/>
						</g>
						<g>
							<polygon class="st17" points="552.3,84.4 555.8,87.8 552.3,91.3 552.3,91.3 				"/>
							<polygon class="st18" points="552.3,84.4 552.3,91.3 548.9,87.8 				"/>
						</g>
						<g>
							<polygon class="st17" points="867.4,333 870.9,336.4 867.4,339.9 867.4,339.9 				"/>
							<polygon class="st18" points="867.4,333 867.4,339.9 864,336.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="870.9,351.5 874.3,354.9 870.9,358.4 870.9,358.4 				"/>
							<polygon class="st18" points="870.9,351.5 870.9,358.4 867.4,354.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="876.1,371.3 879.6,374.8 876.1,378.2 876.1,378.2 				"/>
							<polygon class="st18" points="876.1,371.3 876.1,378.2 872.7,374.8 				"/>
						</g>
						<g>
							<polygon class="st17" points="879.6,391.2 883,394.6 879.6,398.1 879.6,398.1 				"/>
							<polygon class="st18" points="879.6,391.2 879.6,398.1 876.1,394.6 				"/>
						</g>
						<g>
							<polygon class="st17" points="885.4,415.8 888.9,419.3 885.4,422.7 885.4,422.7 				"/>
							<polygon class="st18" points="885.4,415.8 885.4,422.7 882,419.3 				"/>
						</g>
						<g>
							<polygon class="st17" points="928.5,452.1 931.9,455.6 928.5,459 928.5,459 				"/>
							<polygon class="st18" points="928.5,452.1 928.5,459 925,455.6 				"/>
						</g>
						<g>
							<polygon class="st17" points="860.5,478.4 863.9,481.9 860.5,485.3 860.5,485.3 				"/>
							<polygon class="st18" points="860.5,478.4 860.5,485.3 857,481.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="837,485.8 840.5,489.2 837,492.7 837,492.7 				"/>
							<polygon class="st18" points="837,485.8 837,492.7 833.6,489.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="789.5,502.4 793,505.9 789.5,509.3 789.5,509.3 				"/>
							<polygon class="st18" points="789.5,502.4 789.5,509.3 786.1,505.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="766,512.5 769.5,515.9 766,519.3 766,519.3 				"/>
							<polygon class="st18" points="766,512.5 766,519.3 762.6,515.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="735.1,567.7 738.6,571.2 735.1,574.6 735.1,574.6 				"/>
							<polygon class="st18" points="735.1,567.7 735.1,574.6 731.7,571.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="707,493.6 710.5,497 707,500.5 707,500.5 				"/>
							<polygon class="st18" points="707,493.6 707,500.5 703.6,497 				"/>
						</g>
						<g>
							<polygon class="st17" points="700,474.7 703.5,478.1 700,481.6 700,481.6 				"/>
							<polygon class="st18" points="700,474.7 700,481.6 696.6,478.1 				"/>
						</g>
						<g>
							<polygon class="st17" points="694.1,455.7 697.5,459.1 694.1,462.6 694.1,462.6 				"/>
							<polygon class="st18" points="694.1,455.7 694.1,462.6 690.6,459.1 				"/>
						</g>
						<g>
							<polygon class="st17" points="685.6,438.6 689,442 685.6,445.5 685.6,445.5 				"/>
							<polygon class="st18" points="685.6,438.6 685.6,445.5 682.1,442 				"/>
						</g>
						<g>
							<polygon class="st17" points="677.8,419.9 681.2,423.4 677.8,426.8 677.8,426.8 				"/>
							<polygon class="st18" points="677.8,419.9 677.8,426.8 674.3,423.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="671.8,401.1 675.3,404.5 671.8,408 671.8,408 				"/>
							<polygon class="st18" points="671.8,401.1 671.8,408 668.4,404.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="812.9,495.4 816.3,498.8 812.9,502.3 812.9,502.3 				"/>
							<polygon class="st18" points="812.9,495.4 812.9,502.3 809.4,498.8 				"/>
						</g>
					</g>
					<g>
						<path class="st8" d="M352.6,517.9"/>
						<path class="st8" d="M320,554.3"/>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 418.2384 503.7387)" class="st9 st10 st14">01</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 417.5029 511.2983)" class="st12 st13 st14">172.55m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 404.4166 489.311)" class="st9 st10 st14">02</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 403.6783 496.8695)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 390.5332 474.4041)" class="st9 st10 st14">03</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 389.7945 481.9617)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 376.8237 461.4122)" class="st9 st10 st14">04</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 376.0878 468.9723)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 362.7961 446.3448)" class="st9 st10 st14">05</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 362.0604 453.9048)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 348.5213 432.4048)" class="st9 st10 st14">06</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 347.7847 439.9642)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 334.092 418.7128)" class="st9 st10 st14">07</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 333.3543 426.2705)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 320.6867 405.1173)" class="st9 st10 st14">08</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 319.951 412.6772)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 306.8742 391.11)" class="st9 st10 st14">09</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 306.1378 398.6692)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 291.1981 377.7053)" class="st9 st10 st14">10</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 290.4613 385.265)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 276.565 363.3457)" class="st9 st10 st14">11</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 275.8286 370.905)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 260.9747 350.6278)" class="st9 st10 st14">12</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 260.2372 358.1854)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 245.831 339.3257)" class="st9 st10 st14">13</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 245.0931 346.8838)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 230.5114 326.0902)" class="st9 st10 st14">14</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 229.7731 333.6486)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 215.3277 313.1794)" class="st9 st10 st14">15</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 214.5933 320.7408)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 201.045 299.3176)" class="st9 st10 st14">16</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 200.3114 306.8796)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 184.6328 287.9344)" class="st9 st10 st14">17</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 183.8967 295.4948)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 169.0428 275.4897)" class="st9 st10 st14">18</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 168.3071 283.0495)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 152.4935 263.1356)" class="st9 st10 st14">19</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 151.7577 270.6956)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 187.8034 205.3099)" class="st9 st10 st11">22</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 181.4253 201.1819)" class="st12 st13 st11">114.64m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 206.0626 198.6717)" class="st9 st10 st11">23</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 199.6827 194.5445)" class="st12 st13 st11">122.70m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 225.7517 192.4437)" class="st9 st10 st11">24</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 219.3748 188.3162)" class="st12 st13 st11">130.04m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 244.1394 187.6959)" class="st9 st10 st11">25</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 237.7634 183.5692)" class="st12 st13 st11">136.66m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 263.522 180.651)" class="st9 st10 st11">26</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 257.1448 176.528)" class="st12 st13 st11">142.56m2</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 282.2213 174.0882)" class="st9 st10 st11">27</text>
						<text transform="matrix(0.3763 0.9265 -0.9265 0.3763 275.8427 169.9615)" class="st12 st13 st11">147.74m2</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 301.7726 168.0979)" class="st9 st10 st16">28</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 295.698 163.5359)" class="st12 st13 st16">152.19m2</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 320.2248 162.2496)" class="st9 st10 st16">29</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 314.1523 157.6879)" class="st12 st13 st16">155.92m2</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 340.1228 157.019)" class="st9 st10 st16">30</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 334.0496 152.4565)" class="st12 st13 st16">158.92m2</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 359.0999 149.7366)" class="st9 st10 st16">31</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 353.0273 145.1729)" class="st12 st13 st16">161.20m2</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 378.4872 145.0181)" class="st9 st10 st16">32</text>
						<text transform="matrix(0.3105 0.9506 -0.9506 0.3105 372.4147 140.4564)" class="st12 st13 st16">162.75m2</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 397.773 139.9966)" class="st9 st10 st11">33</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 391.4487 135.7876)" class="st12 st13 st11">163.57m2</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 416.8526 133.7406)" class="st9 st10 st11">34</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 410.526 129.5336)" class="st12 st13 st11">163.66m2</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 435.624 127.8935)" class="st9 st10 st11">35</text>
						<text transform="matrix(0.3645 0.9312 -0.9312 0.3645 429.2991 123.6869)" class="st12 st13 st11">164.94m2</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 482.007 105.4819)" class="st9 st10 st16">36</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 477.8018 111.8095)" class="st12 st13 st16">168.42m2</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 489.1192 127.2299)" class="st9 st10 st16">37</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 484.9138 133.5555)" class="st12 st13 st16">170.51m2</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 496.777 148.0856)" class="st9 st10 st16">38</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 492.5737 154.4124)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 136.492 250.993)" class="st9 st10 st14">20</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 135.7581 258.5553)" class="st12 st13 st14">160.00m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 116.2491 236.1528)" class="st9 st10 st14">21</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 115.5146 243.7143)" class="st12 st13 st14">254.19m2</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 411.7229 501.2521)" class="st12 st13 st14">20.00</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 398.4565 486.6186)" class="st12 st13 st14">20.00</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 384.6826 473.1805)" class="st12 st13 st14">20.00</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 370.0497 458.9574)" class="st12 st13 st14">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 355.9082 444.8258)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 342.4716 430.3639)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 328.3168 416.7215)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 314.1591 402.4618)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 299.5954 388.5128)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 284.9243 374.8676)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 269.6403 361.766)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 254.5613 349.1713)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 238.973 336.8368)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 223.6878 324.1154)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 208.9172 310.4732)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 193.2244 298.8835)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 177.9407 285.7533)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 161.3237 274.3201)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 146.5506 261.0865)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.6213 -0.7836 0.7836 0.6213 129.9342 249.7014)" class="st12 st13 st16">20.00</text>
						<text transform="matrix(0.888 -0.4598 0.4598 0.888 108.0316 228.2918)" class="st12 st13 st11">18.26</text>
						<text transform="matrix(0.6501 -0.7599 0.7599 0.6501 423.5703 513.2165)" class="st12 st13 st14">20.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 403.3564 517.7158)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 389.4711 502.3947)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 416.8939 467.9985)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 375.7606 488.2259)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 403.1837 453.8308)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 361.1437 473.8659)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 388.5665 439.4697)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 347.4344 460.1085)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 374.856 425.7108)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 333.724 446.4392)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 361.1438 412.0405)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 318.5061 432.3846)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 345.9289 397.9884)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 303.8467 419.133)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 331.2687 384.7362)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 290.1373 405.9542)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 317.5607 371.5588)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 274.5444 392.0077)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 301.9679 357.6123)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 260.4615 378.629)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 287.8836 344.2322)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 244.7673 366.4702)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 272.1878 332.0722)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 230.2517 353.2365)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 257.6738 318.8395)" class="st12 st13 st19">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 214.858 341.2292)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 241.5267 305.3813)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 199.7209 328.9302)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 226.3911 293.0835)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 184.7444 316.1761)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 211.4137 280.329)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 168.6358 304.087)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 195.3062 268.2401)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 152.8987 292.0189)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 179.5682 256.1716)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 137.0529 279.7494)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 163.7216 243.9014)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 121.1024 267.542)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 98.5876 250.7562)" class="st12 st13 st15">13.39</text>
						<text transform="matrix(-3.000000e-04 1 -1 -3.000000e-04 87.7042 236.0425)" class="st12 st13 st11">5.43</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 147.7719 231.6947)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 188.9774 224.2533)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 178.4767 195.5551)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 196.943 187.6746)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 216.225 179.9982)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 271.2988 158.4081)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 289.8657 152.0291)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 308.8935 145.3075)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 327.8599 138.8491)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9502 -0.3116 0.3116 0.9502 346.7888 132.429)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9502 -0.3116 0.3116 0.9502 366.7401 126.426)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9502 -0.3116 0.3116 0.9502 384.7426 121.1443)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9502 -0.3116 0.3116 0.9502 404.1797 115.5524)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9502 -0.3116 0.3116 0.9502 423.3596 110.1713)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9689 -0.2475 0.2475 0.9689 473.6096 97.4011)" class="st12 st13 st16">16.28</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 481.2722 117.2999)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 491.3254 141.233)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 498.5044 159.4227)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 234.1141 172.9278)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.9333 -0.3591 0.3591 0.9333 252.8365 165.7974)" class="st12 st13 st11">8.00</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 178.0627 207.7655)" class="st12 st13 st15">13.83</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 191.7387 201.0627)" class="st12 st13 st15">14.88</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 210.8301 194.4481)" class="st12 st13 st15">15.84</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 229.4986 188.2917)" class="st12 st13 st15">16.71</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 248.5772 182.3263)" class="st12 st13 st15">17.50</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 267.451 175.6564)" class="st12 st13 st15">18.19</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 286.5809 169.6057)" class="st12 st13 st15">18.79</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 305.8146 164.2598)" class="st12 st13 st15">19.30</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 324.4839 157.4889)" class="st12 st13 st15">19.73</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 343.9716 152.205)" class="st12 st13 st15">20.06</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 363.1014 145.6929)" class="st12 st13 st15">20.30</text>
						<text transform="matrix(0.3902 0.9207 -0.9207 0.3902 382.3857 140.614)" class="st12 st13 st15">20.46</text>
						<text transform="matrix(0.3283 0.9446 -0.9446 0.3283 401.8114 134.4164)" class="st12 st13 st16">20.52</text>
						<text transform="matrix(0.3283 0.9446 -0.9446 0.3283 420.3264 128.5191)" class="st12 st13 st16">20.50</text>
						<text transform="matrix(0.3283 0.9446 -0.9446 0.3283 440.2792 123.1342)" class="st12 st13 st16">20.39</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 496.6249 96.644)" class="st12 st13 st14">9.50</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 505.0893 118.7784)" class="st12 st13 st14">10.66</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 473.2914 132.5954)" class="st12 st13 st14">10.66</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 481.1461 153.8963)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 513.1801 141.9283)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 504.2311 166.5595)" class="st9 st10 st16">39</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 500.028 172.8883)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 505.9619 177.9012)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 488.6002 172.3736)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 520.6354 160.4062)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 511.3432 184.9555)" class="st9 st10 st16">40</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 507.1382 191.2819)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 513.0723 196.292)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 495.7121 190.767)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 527.7483 178.8035)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 518.3184 203.7596)" class="st9 st10 st16">41</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 514.1151 210.0853)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 520.0458 215.0964)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 502.6878 209.5698)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 534.7222 197.6017)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 525.4999 222.7504)" class="st9 st10 st16">42</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 521.2946 229.0748)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 527.2246 234.0843)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 509.8687 228.5614)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 541.902 216.5916)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 532.3378 240.8038)" class="st9 st10 st16">43</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 528.1329 247.1281)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 534.0651 252.1406)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 516.7068 246.6145)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 548.7395 234.646)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 539.0001 259.4012)" class="st9 st10 st16">44</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 534.7949 265.7287)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 540.7281 270.7419)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 523.368 265.2145)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 555.4025 253.2453)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 546.7967 277.594)" class="st9 st10 st16">45</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 542.5923 283.9223)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 548.5238 288.9293)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 531.1645 283.403)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 563.1975 271.4364)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 553.7716 296.1927)" class="st9 st10 st16">46</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 549.5662 302.5182)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 555.4982 307.5315)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 538.1393 302.0057)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 570.1721 290.0372)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 560.4742 314.9746)" class="st9 st10 st16">47</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 556.2676 321.2985)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 562.2003 326.3099)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 544.84 320.7849)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 576.8755 308.8154)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 567.8588 333.9508)" class="st9 st10 st16">48</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 563.6542 340.276)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 569.5848 345.2867)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 552.227 339.7624)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 584.2612 327.7965)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 574.6296 352.3872)" class="st9 st10 st16">49</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 570.4232 358.7131)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 576.3546 363.7217)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 558.9987 358.1986)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 591.0311 346.2333)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 581.8091 370.7064)" class="st9 st10 st16">50</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 577.6049 377.0336)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 583.5359 382.0438)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 566.1765 376.5191)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 598.2101 364.5514)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 588.212 388.0178)" class="st9 st10 st16">51</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 584.0081 394.3459)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 589.938 399.356)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 572.5781 393.8289)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 604.614 381.8644)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 595.9396 407.4815)" class="st9 st10 st16">52</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 591.7354 413.8087)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 597.6671 418.8178)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 580.308 413.2949)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 612.3398 401.3237)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 467.0835 451.5309)" class="st9 st10 st14">63</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 461.097 446.8547)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 433.1283 419.3214)" class="st9 st10 st14">68</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 427.1432 414.6448)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 377.229 364.9406)" class="st9 st10 st14">74</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 371.2436 360.2661)" class="st12 st13 st14">136.78m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 342.4219 333.585)" class="st9 st10 st14">82</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 336.4359 328.9087)" class="st12 st13 st14">126.46m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 291.0997 278.6049)" class="st9 st10 st14">91</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 285.1145 273.9293)" class="st12 st13 st14">182.32m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 246.8137 250.3997)" class="st9 st10 st14">101</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 241.1322 246.7107)" class="st12 st13 st14">127.06m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 265.0041 244.548)" class="st9 st10 st14">102</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 259.322 240.8653)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 315.2052 274.6468)" class="st9 st10 st14">92</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 309.2196 269.9683)" class="st12 st13 st14">157.50m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 360.4309 327.9082)" class="st9 st10 st14">83</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 354.4453 323.2317)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 395.9665 361.7206)" class="st9 st10 st14">75</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 389.9816 357.0429)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 453.2339 413.6783)" class="st9 st10 st14">69</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 447.2508 409.0062)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 486.7785 447.0795)" class="st9 st10 st14">64</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 480.7925 442.4032)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 604.3683 437.0512)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 457.7148 437.329)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 424.7874 405.5441)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 333.0846 321.475)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 317.5587 297.0649)" class="st12 st13 st16">9.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 306.9128 260.6471)" class="st12 st13 st16">9.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 292.9352 304.1237)" class="st12 st13 st16">10.42</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 281.4453 267.5265)" class="st12 st13 st16">10.42</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 237.278 238.8673)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 257.0244 232.7827)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 266.7687 266.9214)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 249.1759 271.6847)" class="st12 st13 st16">6.86</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 353.0521 315.5942)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 362.6828 349.3072)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 387.6178 347.5367)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 398.0677 384.4629)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 381.3655 389.8688)" class="st12 st13 st16">6.07</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 344.9803 353.9344)" class="st12 st13 st16">6.63</text>
						<text transform="matrix(0.7121 0.702 -0.702 0.7121 372.345 384.8473)" class="st12 st13 st19">3.86</text>
						<text transform="matrix(0.7121 0.702 -0.702 0.7121 336.6481 351.9231)" class="st12 st13 st19">2.63</text>
						<text transform="matrix(0.7121 0.702 -0.702 0.7121 241.0829 268.8639)" class="st12 st13 st19">2.01</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 444.5851 399.8309)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 434.7721 438.2391)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 454.3622 433.5192)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 477.3058 432.1506)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 468.9981 474.6632)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 489.6161 468.9228)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 587.0092 431.526)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 619.0427 419.5583)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 610.1638 444.1288)" class="st9 st10 st16">54</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 605.9587 450.4542)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 611.8909 455.4662)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 594.5325 449.9407)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 457.4526 453.1744)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 424.1165 418.4891)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 366.4685 364.7047)" class="st12 st13 st14">14.16</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 331.6331 333.6688)" class="st12 st13 st14">13.75</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 279.3984 282.6282)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 236.1873 250.8276)" class="st12 st13 st14">14.35</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 250.8205 246.1968)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 269.7464 240.7609)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 284.5517 238.8784)" class="st9 st10 st14">103</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 278.8687 235.1909)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 276.5703 227.1072)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 286.3169 261.2503)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 289.2938 235.0861)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 303.5288 233.5887)" class="st9 st10 st14">104</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 297.8481 229.9056)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 295.5466 221.8208)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 305.2932 255.9619)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 308.2689 229.7965)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 322.8119 228.1277)" class="st9 st10 st14">105</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 317.132 224.4454)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 314.8322 216.3603)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 324.5777 250.5016)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 327.5542 224.3374)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 342.336 222.5196)" class="st9 st10 st14">106</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 336.6544 218.8387)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 334.3553 210.7543)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 344.1006 244.8947)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 347.0771 218.7318)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 361.5775 216.7323)" class="st9 st10 st14">107</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 355.8951 213.0486)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 353.5975 204.9659)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 363.3426 239.1073)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 366.3182 212.9427)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 380.2953 211.6066)" class="st9 st10 st14">108</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 374.6153 207.9223)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 372.317 199.8395)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 382.0608 233.9783)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 385.0364 207.8154)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 400.2234 206.1373)" class="st9 st10 st14">109</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 394.5408 202.4496)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 392.2414 194.3642)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 401.9861 228.5059)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 404.9625 202.3477)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 419.3293 200.8183)" class="st9 st10 st14">110</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 413.6481 197.1334)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 411.3507 189.0508)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 421.0953 223.1924)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 424.0716 197.0294)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 438.4152 195.2431)" class="st9 st10 st14">111</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 432.7332 191.5593)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 457.9673 191.7852)" class="st9 st10 st14">112</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 452.285 188.0985)" class="st12 st13 st14">138.18m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 430.4343 183.4745)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 449.9998 177.9702)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 440.1794 217.616)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 460.3882 211.4607)" class="st12 st13 st16">9.27</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 443.1561 191.4517)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 298.6778 276.6806)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 320.2186 269.148)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 336.0086 268.4737)" class="st9 st10 st14">93</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 330.0226 263.7974)" class="st12 st13 st14">157.50m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 357.0442 262.6922)" class="st9 st10 st14">94</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 351.0582 258.0159)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 338.3618 290.8864)" class="st12 st13 st16">9.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 327.7155 254.4778)" class="st12 st13 st16">9.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 341.0213 262.9726)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 361.023 257.5357)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 381.0338 360.3947)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 346.3632 328.9009)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 365.7159 323.4639)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 379.1772 322.9974)" class="st9 st10 st14">84</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 373.1904 318.3203)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 371.7975 310.6839)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 359.3877 285.1427)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 348.7623 248.5239)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 376.4558 257.6362)" class="st9 st10 st14">95</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 370.4706 252.9576)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 380.4324 252.4748)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 378.7964 280.0796)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 368.1725 243.4624)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 395.7518 252.1988)" class="st9 st10 st14">96</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 389.7666 247.5202)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 399.73 247.0405)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 398.0941 274.6471)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 387.4702 238.0228)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 414.3072 246.699)" class="st9 st10 st14">97</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 408.3188 242.0234)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 418.283 241.5413)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 416.6463 269.1451)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 406.0219 232.526)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 433.7255 241.2978)" class="st9 st10 st14">98</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 427.7378 236.621)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 437.7031 236.1385)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 436.0653 263.7427)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 425.441 227.1205)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 452.5567 236.0119)" class="st9 st10 st14">99</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 446.5725 231.335)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 472.9363 228.9574)" class="st9 st10 st14">100</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 467.2526 225.2711)" class="st12 st13 st14">152.17m2</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 456.5342 230.8502)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 454.8975 258.455)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 475.5167 252.3241)" class="st12 st13 st16">9.39</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 444.2748 221.8385)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 464.3129 215.9414)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 381.4283 344.3969)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 384.4602 318.5487)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 398.369 317.8207)" class="st9 st10 st14">85</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 392.3842 313.1451)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 390.9902 305.507)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 400.6205 339.2182)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 403.6518 313.3721)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 417.6742 311.2583)" class="st9 st10 st14">86</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 411.689 306.5827)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 410.2952 298.9426)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 419.9255 332.6578)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 422.9572 306.8116)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 437.7364 306.5731)" class="st9 st10 st14">87</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 431.7528 301.8981)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 430.3574 294.2589)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 439.9892 327.9686)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 443.0219 302.1275)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 456.1752 300.966)" class="st9 st10 st14">88</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 450.1875 296.2892)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 448.7945 288.6497)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 458.4274 322.3632)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 461.458 296.5168)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 476.0927 295.2334)" class="st9 st10 st14">89</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 470.1083 290.5576)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 496.9171 291.3792)" class="st9 st10 st14">90</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 490.932 286.7026)" class="st12 st13 st14">138.18m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 468.7145 282.9167)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 486.8188 277.8328)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 478.3439 316.6301)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 499.3564 310.684)" class="st12 st13 st16">9.27</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 481.3765 290.7818)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 400.7279 357.5088)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 414.822 356.5242)" class="st9 st10 st14">76</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 408.8361 351.8499)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 406.4723 342.3391)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 416.9233 379.2671)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 419.5836 352.314)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 434.5157 351.0551)" class="st9 st10 st14">77</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 428.531 346.3764)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 426.1678 336.8696)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 436.6156 373.7974)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 439.2771 346.8418)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 453.3926 345.5264)" class="st9 st10 st14">78</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 447.4067 340.8521)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 445.0432 331.3449)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 455.4935 368.269)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 458.1532 341.3136)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 471.8802 340.1188)" class="st9 st10 st14">79</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 465.8936 335.4438)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 463.5303 325.9327)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 473.9812 362.8607)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 476.6404 335.9047)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 492.4739 334.497)" class="st9 st10 st14">80</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 486.4871 329.8179)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 511.2437 329.7751)" class="st9 st10 st14">81</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 505.2602 325.1001)" class="st12 st13 st14">143.42m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 484.1255 320.3096)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 503.3021 314.9779)" class="st12 st13 st16">7.50</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 514.563 350.9612)" class="st12 st13 st16">8.89</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 494.5757 357.2368)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 497.2351 330.281)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 437.8612 414.9346)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 457.4529 408.2675)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 471.6766 408.3457)" class="st9 st10 st14">70</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 465.6893 403.6688)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 463.0261 394.4969)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 472.8067 428.1853)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 475.8942 402.933)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 491.2292 402.5522)" class="st9 st10 st14">71</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 485.2418 397.8763)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 482.5778 388.7019)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 492.3597 422.3929)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 495.4472 397.1375)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 510.3134 397.6729)" class="st9 st10 st14">72</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 504.3268 392.9978)" class="st12 st13 st14">128.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 532.446 390.939)" class="st9 st10 st14">73</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 526.4622 386.263)" class="st12 st13 st14">164.95m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 501.6617 383.8205)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 523.4834 377.8707)" class="st12 st13 st16">9.67</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 511.4437 417.5135)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 532.4258 411.504)" class="st12 st13 st16">10.95</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 514.5306 392.262)" class="st12 st13 st14">16.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 471.7122 448.0461)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 490.7888 442.6111)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 505.1498 441.4553)" class="st9 st10 st14">65</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 499.1636 436.7801)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 495.6775 426.5257)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 507.9875 463.2969)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 509.1616 436.9853)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 525.3552 435.9727)" class="st9 st10 st14">66</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 519.3708 431.2969)" class="st12 st13 st14">140.00m2</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 546.6929 429.2746)" class="st9 st10 st14">67</text>
						<text transform="matrix(0.2925 0.9563 -0.9563 0.2925 540.7051 424.5938)" class="st12 st13 st14">184.67m2</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 515.8845 421.0475)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 537.5022 414.7337)" class="st12 st13 st16">9.86</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 548.4078 452.1925)" class="st12 st13 st16">11.25</text>
						<text transform="matrix(0.9612 -0.2759 0.2759 0.9612 528.195 457.8187)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 529.3688 431.507)" class="st12 st13 st14">17.50</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 554.4559 424.0917)" class="st12 st13 st11">17.56</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 539.2606 384.3852)" class="st12 st13 st11">16.05</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 501.1148 285.6383)" class="st12 st13 st11">16.05</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 463.451 186.5506)" class="st12 st13 st11">16.05</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 515.6785 323.1442)" class="st12 st13 st11">17.56</text>
						<text transform="matrix(0.3406 0.9402 -0.9402 0.3406 478.2921 225.3083)" class="st12 st13 st11">17.56</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 626.5653 437.9711)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 617.2076 462.799)" class="st9 st10 st16">55</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 613.0015 469.1217)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 618.9354 474.1372)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 601.5754 468.6106)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 633.608 456.6401)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 623.8026 481.6703)" class="st9 st10 st16">56</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 619.597 487.998)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 625.5301 493.0083)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 608.1697 487.4842)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 640.2045 475.517)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 631.3929 500.0929)" class="st9 st10 st16">57</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 627.1885 506.4212)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 633.12 511.4307)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 615.7609 505.9057)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 647.7938 493.935)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 638.2328 518.7633)" class="st9 st10 st16">58</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 634.0273 525.09)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 639.9581 530.0966)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 622.5994 524.5745)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 654.6318 512.605)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 645.3422 537.0198)" class="st9 st10 st16">59</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 641.1386 543.3447)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 647.0704 548.3597)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 629.7095 542.8318)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 661.7447 530.8655)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 652.3861 555.8254)" class="st9 st10 st16">60</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 648.1815 562.1516)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 654.1158 567.1647)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 636.7548 561.6365)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 668.7867 549.6725)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 659.2935 574.0173)" class="st9 st10 st16">61</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 655.0893 580.3434)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 661.0209 585.3553)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 643.6608 579.8311)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 675.695 567.861)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 666.051 592.2072)" class="st9 st10 st16">62</text>
						<text transform="matrix(0.9311 -0.3648 0.3648 0.9311 661.8461 598.5314)" class="st12 st13 st16">128.00m2</text>
						<text transform="matrix(0.9384 -0.3455 0.3455 0.9384 667.7785 603.541)" class="st12 st13 st11">16.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 650.4178 598.0181)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 682.4529 586.0519)" class="st12 st13 st14">8.00</text>
						<text transform="matrix(0.3529 0.9357 -0.9357 0.3529 463.4787 107.088)" class="st12 st13 st14">11.49</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 209.1858 218.3035)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 228.4252 212.6666)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 247.5048 207.3315)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 285.9699 196.0425)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 305.3573 190.61)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 266.1478 201.5839)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 324.4113 185.2031)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 343.1737 179.4595)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 362.366 174.0243)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 381.6472 168.7919)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 400.8762 163.151)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 420.7765 157.5933)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.9579 -0.2872 0.2872 0.9579 439.8546 151.8315)" class="st12 st13 st16">8.00</text>
						<text transform="matrix(0.7653 0.6436 -0.6436 0.7653 130.883 220.0707)" class="st12 st13 st15">8.00</text>
						<text transform="matrix(0.6842 0.7292 -0.7292 0.6842 431.456 482.6524)" class="st12 st13 st19">10.08</text>
						<g>
							<polygon class="st17" points="431.8,487.1 435.2,490.6 431.8,494.1 431.8,494.1 				"/>
							<polygon class="st18" points="431.8,487.1 431.8,494.1 428.3,490.6 				"/>
						</g>
						<g>
							<polygon class="st17" points="130.7,222.7 134.2,226.2 130.7,229.6 130.7,229.6 				"/>
							<polygon class="st18" points="130.7,222.7 130.7,229.6 127.2,226.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="441.8,138.5 445.2,141.9 441.8,145.4 441.8,145.4 				"/>
							<polygon class="st18" points="441.8,138.5 441.8,145.4 438.3,141.9 				"/>
						</g>
						<g>
							<polygon class="st17" points="477.8,239.1 481.3,242.5 477.8,246 477.8,246 				"/>
							<polygon class="st18" points="477.8,239.1 477.8,246 474.4,242.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="616.1,484.3 619.5,487.8 616.1,491.3 616.1,491.3 				"/>
							<polygon class="st18" points="616.1,484.3 616.1,491.3 612.6,487.8 				"/>
						</g>
						<g>
							<polygon class="st17" points="549.9,440 553.4,443.4 549.9,446.9 549.9,446.9 				"/>
							<polygon class="st18" points="549.9,440 549.9,446.9 546.5,443.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="528.5,446.5 532,450 528.5,453.5 528.5,453.5 				"/>
							<polygon class="st18" points="528.5,446.5 528.5,453.5 525.1,450 				"/>
						</g>
						<g>
							<polygon class="st17" points="509.5,451.9 513,455.4 509.5,458.8 509.5,458.8 				"/>
							<polygon class="st18" points="509.5,451.9 509.5,458.8 506.1,455.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="490.9,458 494.4,461.5 490.9,464.9 490.9,464.9 				"/>
							<polygon class="st18" points="490.9,458 490.9,464.9 487.5,461.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="470.2,462.8 473.7,466.2 470.2,469.7 470.2,469.7 				"/>
							<polygon class="st18" points="470.2,462.8 470.2,469.7 466.8,466.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="430.2,405.7 433.7,409.2 430.2,412.6 430.2,412.6 				"/>
							<polygon class="st18" points="430.2,405.7 430.2,412.6 426.8,409.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="381.3,377 384.7,380.4 381.3,383.9 381.3,383.9 				"/>
							<polygon class="st18" points="381.3,377 381.3,383.9 377.8,380.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="339.9,320.6 343.3,324.1 339.9,327.5 339.9,327.5 				"/>
							<polygon class="st18" points="339.9,320.6 339.9,327.5 336.4,324.1 				"/>
						</g>
						<g>
							<polygon class="st17" points="295.1,291.1 298.5,294.5 295.1,298 295.1,298 				"/>
							<polygon class="st18" points="295.1,291.1 295.1,298 291.7,294.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="242.7,238.5 246.2,242 242.7,245.4 242.7,245.4 				"/>
							<polygon class="st18" points="242.7,238.5 242.7,245.4 239.3,242 				"/>
						</g>
						<g>
							<polygon class="st17" points="455.6,179.1 459,182.5 455.6,186 455.6,186 				"/>
							<polygon class="st18" points="455.6,179.1 455.6,186 452.2,182.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="528.5,377.8 532,381.2 528.5,384.7 528.5,384.7 				"/>
							<polygon class="st18" points="528.5,377.8 528.5,384.7 525.1,381.2 				"/>
						</g>
						<g>
							<polygon class="st17" points="517.9,338.4 521.3,341.8 517.9,345.3 517.9,345.3 				"/>
							<polygon class="st18" points="517.9,338.4 517.9,345.3 514.4,341.8 				"/>
						</g>
						<g>
							<polygon class="st17" points="623.1,502.9 626.5,506.4 623.1,509.8 623.1,509.8 				"/>
							<polygon class="st18" points="623.1,502.9 623.1,509.8 619.7,506.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="630.5,521.6 633.9,525.1 630.5,528.5 630.5,528.5 				"/>
							<polygon class="st18" points="630.5,521.6 630.5,528.5 627,525.1 				"/>
						</g>
						<g>
							<polygon class="st17" points="637.5,539.5 641,543 637.5,546.4 637.5,546.4 				"/>
							<polygon class="st18" points="637.5,539.5 637.5,546.4 634.1,543 				"/>
						</g>
						<g>
							<polygon class="st17" points="644.1,559.1 647.6,562.5 644.1,566 644.1,566 				"/>
							<polygon class="st18" points="644.1,559.1 644.1,566 640.7,562.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="651.2,576.5 654.7,580 651.2,583.4 651.2,583.4 				"/>
							<polygon class="st18" points="651.2,576.5 651.2,583.4 647.8,580 				"/>
						</g>
						<g>
							<polygon class="st17" points="658.1,595.1 661.6,598.5 658.1,602 658.1,602 				"/>
							<polygon class="st18" points="658.1,595.1 658.1,602 654.7,598.5 				"/>
						</g>
						<g>
							<polygon class="st17" points="472.1,105.9 475.5,109.4 472.1,112.8 472.1,112.8 				"/>
							<polygon class="st18" points="472.1,105.9 472.1,112.8 468.6,109.4 				"/>
						</g>
						<g>
							<polygon class="st17" points="193.5,212.7 197,216.1 193.5,219.6 193.5,219.6 				"/>
							<polygon class="st18" points="193.5,212.7 193.5,219.6 190.1,216.1 				"/>
						</g>
					</g>
					<g>
						<path class="st20" d="M473.1,534.7l-2-1.5c-0.4,0.4-1,0.6-1.6,0.4c-0.6-0.3-1-1.1-0.6-1.9c-0.6-0.4-1.2-0.9-1.8-1.3l1.2,5
							L473.1,534.7z"/>
						<text transform="matrix(-0.8058 -0.5923 0.5923 -0.8058 474.8299 532.1538)" class="st21 st22 st23">SALIDA</text>
					</g>
					<g>
						<path class="st20" d="M491.3,546.5l2.1,1.3c0.4-0.5,1-0.7,1.5-0.5c0.7,0.2,1.1,1,0.8,1.9c0.6,0.4,1.3,0.8,1.9,1.1l-1.6-4.9
							L491.3,546.5z"/>
						<text transform="matrix(0.8494 0.5278 -0.5278 0.8494 489.7677 549.2085)" class="st21 st22 st24">ACCESO</text>
					</g>
					<g>
						<path class="st12" d="M484.9,540.2c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.1,0.1-0.1c-0.1-0.3-0.1-0.5-0.1-0.8l0.5-0.6
							c0,0,0.1,0.1,0.2,0c0.1,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.2-0.3c0,0,0.1-0.1,0.1-0.1c0-0.1-0.1-0.2-0.1-0.2
							c-0.5-0.5-1-1-1.5-1.5c-0.1-0.1-0.1-0.1-0.2-0.2c-0.1-0.1-0.1-0.1-0.2-0.1c-0.6-0.3-1.2-0.6-1.8-0.9c0,0-0.1-0.1-0.2-0.1
							c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.2,0.2-0.2,0.3c0,0-0.1,0.1-0.1,0.2c0,0.1,0.1,0.1,0.1,0.1c-0.2,0.2-0.3,0.4-0.5,0.6l-0.8,0.2
							c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.1,0.1c0.4,1,0.7,2,1,3c0,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.1
							C482.7,540.1,483.8,540.2,484.9,540.2z"/>
						<path class="st20" d="M482.7,539.6l-0.2-0.1l-0.7-0.1l-0.2-0.6l-0.2-0.1l0.4-0.5c0-0.1,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.1
							c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.3,0,0.4,0.1c0.1,0.1,0.1,0.2,0.2,0.4c0.1,0.2,0.1,0.3,0.1,0.4c0,0.1,0,0.1,0,0.2
							c0,0.1-0.1,0.1-0.1,0.2C483,539.3,482.8,539.4,482.7,539.6z"/>
						
							<rect x="483.1" y="535.8" transform="matrix(0.5965 -0.8026 0.8026 0.5965 -236.5129 604.832)" class="st20" width="0.4" height="3.8"/>
					</g>
					<g>
						<path class="st20" d="M850.2,181.8l0.5,2.4c0.6-0.1,1.2,0.3,1.4,0.7c0.3,0.6,0,1.5-0.8,1.9c0.2,0.7,0.3,1.5,0.5,2.2l2.4-4.6
							L850.2,181.8z"/>
						<text transform="matrix(0.2039 0.979 -0.979 0.2039 847.1352 182.5701)" class="st21 st22 st24">SALIDA</text>
					</g>
					<g>
						<path class="st20" d="M844.5,161l-0.7-2.4c-0.6,0.1-1.2-0.2-1.5-0.6c-0.4-0.6-0.1-1.5,0.7-1.9c-0.2-0.7-0.4-1.4-0.7-2.1l-2.1,4.7
							L844.5,161z"/>
						<text transform="matrix(-0.2795 -0.9602 0.9602 -0.2795 847.4186 159.9098)" class="st21 st22 st23">ACCESO</text>
					</g>
					<g>
						<path class="st12" d="M845.1,169.8c0,0-0.1-0.1-0.2,0c-0.1,0-0.1,0.1-0.1,0.1c-0.2,0.2-0.3,0.4-0.5,0.7l-0.8,0.2
							c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.1-0.1-0.1-0.1c-0.1,0-0.3,0.1-0.4,0.1c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.1,0.2
							c0.1,0.7,0.1,1.4,0.1,2.1c0,0.1,0,0.2,0.1,0.3c0,0.1,0.1,0.1,0.1,0.2c0.2,0.6,0.5,1.2,0.7,1.9c0,0,0.1,0.1,0.1,0.1
							c0.1,0.1,0.2,0.1,0.2,0.1c0.1,0,0.3-0.1,0.4-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.1,0.1-0.2c0.3-0.1,0.5-0.1,0.7-0.2l0.7,0.4
							c0,0,0.1,0,0.1,0c0.1,0,0.1-0.1,0.1-0.1c0.4-1,0.8-1.9,1.2-2.9c0-0.1,0.1-0.1,0-0.2c0-0.1-0.1-0.2-0.1-0.2
							C846.6,171.3,845.8,170.6,845.1,169.8z"/>
						<path class="st20" d="M846.2,171.7l0.1,0.2l0.5,0.5l-0.3,0.6l0.1,0.2l-0.6,0.1c-0.1,0-0.1,0-0.2,0s-0.1-0.1-0.2-0.1
							c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.1-0.2-0.2-0.3-0.3c0-0.1,0.1-0.3,0.1-0.4c0.1-0.2,0.2-0.3,0.2-0.4c0-0.1,0.1-0.1,0.1-0.1
							c0.1-0.1,0.1-0.1,0.1-0.1C845.8,171.9,846,171.8,846.2,171.7z"/>
						
							<rect x="844.3" y="171" transform="matrix(0.98 -0.1988 0.1988 0.98 -17.5088 171.3327)" class="st20" width="0.4" height="3.8"/>
					</g>
					<g>
						<path class="st20" d="M920.3,147.1l-0.5-2.4c-0.6,0.1-1.2-0.3-1.4-0.7c-0.3-0.6,0-1.5,0.8-1.9c-0.2-0.7-0.3-1.5-0.5-2.2l-2.4,4.6
							L920.3,147.1z"/>
						<text transform="matrix(-0.2039 -0.979 0.979 -0.2039 923.3314 146.2182)" class="st21 st22 st24">SALIDA</text>
					</g>
					<g>
						<path class="st20" d="M926,167.9l0.7,2.4c0.6-0.1,1.2,0.2,1.5,0.6c0.4,0.6,0.1,1.5-0.7,1.9c0.2,0.7,0.4,1.4,0.7,2.1l2.1-4.7
							L926,167.9z"/>
						<text transform="matrix(0.2795 0.9602 -0.9602 0.2795 923.1424 168.8929)" class="st21 st22 st23">ACCESO</text>
					</g>
					<g>
						<path class="st12" d="M925.4,159c0,0,0.1,0.1,0.2,0c0.1,0,0.1-0.1,0.1-0.1c0.2-0.2,0.3-0.4,0.5-0.7l0.8-0.2c0,0,0.1,0.1,0.1,0.1
							c0.1,0.1,0.1,0.1,0.1,0.1c0.1,0,0.3-0.1,0.4-0.1c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.1-0.2c-0.1-0.7-0.1-1.4-0.1-2.1
							c0-0.1,0-0.2-0.1-0.3c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.6-0.5-1.2-0.7-1.9c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.2-0.1
							c-0.1,0-0.3,0.1-0.4,0.1c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.1,0.1-0.1,0.2c-0.3,0.1-0.5,0.1-0.7,0.2l-0.7-0.4c0,0-0.1,0-0.1,0
							c-0.1,0-0.1,0.1-0.1,0.1c-0.4,1-0.8,1.9-1.2,2.9c0,0.1-0.1,0.1,0,0.2c0,0.1,0.1,0.2,0.1,0.2C923.9,157.5,924.7,158.3,925.4,159z"
							/>
						<path class="st20" d="M924.3,157.1l-0.1-0.2l-0.5-0.5l0.3-0.6l-0.1-0.2l0.6-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0.1,0.2,0.1
							c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.1,0.2,0.2,0.3,0.3c0,0.1-0.1,0.3-0.1,0.4c-0.1,0.2-0.2,0.3-0.2,0.4c0,0.1-0.1,0.1-0.1,0.1
							c-0.1,0.1-0.1,0.1-0.1,0.1C924.7,157,924.5,157.1,924.3,157.1z"/>
						
							<rect x="925.8" y="154.1" transform="matrix(0.98 -0.1988 0.1988 0.98 -12.5299 187.2032)" class="st20" width="0.4" height="3.8"/>
					</g>
				</g>
				<a href="#!/Portto_Blanco-Taiga_1-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M496.7,566.3l-2.7,8.6c-0.6-0.8-2.4-3.3-2.4-6.9c-0.1-3.1,1.2-5.4,1.8-6.3c-5.4-4.1-10.8-8.3-16.2-12.5
						l-3.7-2.5l-17.1-9.5c-0.6,0.8-2,2.3-4.4,3.4c-2.6,1.1-4.9,0.9-5.9,0.8c0.3-1.7,0.6-3.4,0.8-5.1c-2.5-0.4-5.2-0.7-8.1-0.8
						c-4-0.2-7.6-0.1-10.8,0.2c-1.8,0.2-5.1,0.3-8.8-0.9c-3.7-1.2-6.3-3.2-7.7-4.4c-45.5-48.6-97.8-100-157.6-152.1
						c-58.4-50.9-115.2-94.9-168.4-132.8c-0.2-0.2-3.1-2.3-2.9-6.1c0.3-3.9,3.7-5.8,3.9-5.8c60.2-30,129.8-60.6,208.4-88.2
						c72.6-25.5,140.6-44.2,202.2-58.1c64.7,170.1,129.4,340.1,194.1,510.2l-84.9,31.5l-72.5,22.9L496.7,566.3z"/>
					<g>
						<rect x="336.9" y="278.6" class="blue__fill" width="142.1" height="38.6"/>
						<text transform="matrix(0.9924 0 0 1 356.7355 306.2219)" class="fs__30__px white__fill futura-med">Taiga 1</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Taiga_2-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M856.8,40.7L879.6,148l11,50.1c20.7,100.5,41.5,200.9,62.2,301.4l-263.1,97.6L495.3,85.8
						c51.6-11.6,108.6-22,170.4-29.8c59.2-7.5,114.6-11.5,165.5-13.3L856.8,40.7z"/>
					<g>
						<rect x="665.3" y="194.4" class="blue__fill" width="140.8" height="38.7"/>
						<text transform="matrix(0.9924 0 0 1 687.1891 222.7809)" class="fs__30__px white__fill futura-med">Taiga 2</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Taiga_3-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M857.8,42l28.9,1l305.4-1.2c2,0.2,6,0.8,10.2,3.5c4,2.6,6.3,5.9,7.4,7.6c3.6,4.1,9.6,10.2,18.5,15
						c7,3.8,13.5,5.7,18.3,6.7c24,3.7,47.9,7.4,71.9,11.2L1275,364.2L953.6,499.9l-62.1-300.7C891.5,199.1,860.6,58.9,857.8,42z"/>
					<g>
						<rect x="1027.1" y="177.3" class="blue__fill" width="139.8" height="38.6"/>
						<text transform="matrix(0.9924 0 0 1 1048.3492 204.7531)" class="fs__30__px white__fill futura-med">Taiga 3</text>
					</g>
				</a>
			</g>
		</svg>

	</div>

</body>
</html>