<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="RECURSOSPAGINA/ESTILO_CSS/estilo0001.css">
	<meta charset="utf-8">
	 <link rel="icon" type="image/png" href="RECURSOSPAGINA/DIR_IMAGENES/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C0DING | Development & Technologies</title>
</head>
<body>
	<?php
		date_default_timezone_set('America/Bogota');
		$year = date('Y');
		$divs = "<div class='d1'></div><div class='d2'></div><div class='d3'></div><div class='d4'></div>";
	?>
	<div class="content" id="content">
		<div class="S_content">
			<div class="navBar">
				<span class="Ctitles" id="Inicio" onclick="ir(this)" title="Volver al inicio">{ <span style="color:#fff;">C 0 D I N G</span> }</span>
				<div class="contOps">
					<a class="opts" id="Productos" href="#Productos" onclick="ir(this)">Productos<?= $divs ?></a>
					<a class="opts" id="Nosotros" href="#Nosotros" onclick="ir(this)">Contacto<?= $divs ?></a>
					<a class="opts" id="Referencias" href="#Referencias" onclick="ir(this)">Referencias<?= $divs ?></a>
				</div>
			</div>
			<span class="desplegar">
				<img id="btnMn" src="RECURSOSPAGINA/DIR_IMAGENES/SVG/menu_desplegar.svg" onclick="menuMob(this,'.navBarMobile')">
			</span>
			<div class="navBarMobile">
				<div class="contOps">
					<a class="opts" id="InicioM" href="#" onclick="irM(this)">Inicio<?= $divs ?></a>
					<a class="opts" id="ProductosM" href="#Productos" onclick="irM(this)">Productos<?= $divs ?></a>
					<a class="opts" id="NosotrosM" href="#Nosotros" onclick="irM(this)">Contacto<?= $divs ?></a>
					<a class="opts" id="ReferenciasM" href="#Referencias" onclick="irM(this)">Referencias<?= $divs ?></a>
				</div>
			</div>
			<div class="structure" id="D_Inicio">
				<div class="Cont_left">
					<img src="RECURSOSPAGINA/DIR_IMAGENES/NEWLogoONLYH.png">
					<span class="titles"><b>{</b>C0DING<b>}</b></span>
					<span class="subTitles"><b><</b> DEVELOPMENT & TECHNOLOGIES <b>/></b></span>
					<div class="pests">
						<span class="writterT">La tecnología:</span><br>
						<span class="writter">Te ayuda a automatizar procesos, reduciendo el tiempo de operación y aumentando de manera considerable la productividad.</span>
						<span class="writterT2" style="display: none;margin-top: -25px;">¿Por qué usar software?</span><br>
						<span class="writter2" style="display: none;">Se trata de una de las claves para potenciar la productividad, calidad, competitividad y rentabilidad de la empresa.</span>
					</div>
				</div>
				<div class="Cont_right">
					<div class="tr1">
						<span class="tlSp">
							HÁGA PARTE DEL DESARROLLO TECNOLÓGICO
						</span>
						<span class="txSp">
							Le brindamos asesoría y soporte para la adecuación o desarrollo de cualquier proyecto, ya sea para uso personal, empresarial o institucional.<br>Nos caracterizamos por desarrollar y estructurar sistemas de producción basados en los requerimientos de nuestros clientes.
						</span>
						<span class="ftSp">
							Nuestras habilidades, a su servicio!
						</span>
					</div>
				</div>
			</div>
			<div class="structure2" id="D_Productos">
				<h2>Productos</h2>
				<div class="contenstruc">
					<span class="letr"></span>
					<div class="contStruc">
						<div class="Prods" onmouseout="ltreOut(this,'.letr','#sirvi','#srv','S . I . R . V . I')" onmouseover="letre(this,'S . I . R . V . I','.letr','#sirvi','#srv')">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/SIRVI.jpg">
							<div class="txto">
								<span class="ttlP" id="srv">S . I . R . V . I</span>
							</div>
						</div>
						<div class="Prods" onmouseout="ltreOut(this,'.letr','#smartBar','#smtb','SMART-BAR')" onmouseover="letre(this,'SMART-BAR','.letr','#smartBar','#smtb')">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/sbar.png">
							<div class="txto">
								<span class="ttlP" id="smtb">SMART - BAR</span>
							</div>
						</div>
						<div class="Prods" onmouseout="ltreOut(this,'.letr','#laventaApp','#lva','LA VENTA APP')" onmouseover="letre(this,'LA VENTA APP','.letr','#laventaApp','#lva')">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/lva.jpg">
							<div class="txto">
								<span class="ttlP" id="lva">La Venta App</span>
							</div>
						</div>
					</div>
					<div class="derStruc">
						<div id="sirvi">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/SIRVI.jpg" class="imgDr">
							<span class="titl">S.I.R.V.I</span>
							<span class="txtDs">El Sistema Inteligente para Registro de Ventas e Invetario S.I.R.V.I, es un conjunto de herramientas dedicadas a la optimización, supervisión, ordenamiento y almacenamiento de todo tipo de movimientos con respecto a la comercialización de sus productos y almacenamiento dentro de una estructura organizada para llevar un stock inventariado de sus productos o servicios.<br>Este sistema cuenta con gran variedad de características, entre las cuales se destacan, un sistema POS de ventas con registro automático, generación de facturas y almacenamiento del stock de manera dinámica frente a las ventas o movimientos realizados, cuenta con lectura de códigos de barras y códigos QR a través de hardware externo (Pistola lectora) o via webcam, es un sistema basado en tecnología web, por lo que es posible establecer S.I.R.V.I bajo un entorno de red privada o pública sobre internet para acceder al sistema desde cualquier lugar, es un sistema optimizado para usarse tanto en computadores, como en smartphones y tablets.</span>
						</div>
						<div id="smartBar">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/sbar.png" class="imgDr">
							<span class="titl">SMART-BAR</span>
							<span class="txtDs">Es un sistema de manejo dinámico e intuitivo de recursos inherentes a restaurantes, bares, restobares, PUBS, heladerías, etc...<br>Este sistema cuenta con multiples funciones entre las cuales destacan, el mecanismo de pedidos y comandas virtuales con distribución automática a su respectivo sector de ejecución, ordenamiento de pedidos por numeración de mesas, entrega dinámica de cuenta, almacenamiento de ingresos con respecto a movimiento de caja para control, manejo de personal, sistema de reservas, inventario con registro de ingresos y egresos, generación e impresión de facturas y tickets, inspección y modificación de ordenes y pedidos, entre otras características.<br>Con SMART-BAR es posible aumentar de manera significativa la productividad y el orden de su negocio.</span>
						</div>
						<div id="laventaApp">
							<img src="RECURSOSPAGINA/DIR_IMAGENES/lva.jpg" class="imgDr">
							<span class="titl">LA VENTA APP</span>
							<span class="txtDs">La Venta App es una plataforma virtual que ofrece la posibilidad de integrar su negocio al mundo de internet, esta plataforma le permite crear enlaces directos tanto con compradores como vendedores, permite realizar compras y ventas de manera directa, sin intermediarios mostrando los productos de manera sencilla y de fácil compresión, permitiendo ejecutar acciones de compra, venta y cotización desde cualquier parte de internet.<br>La Venta App le permite registrar una cantidad ilimitada de productos, aportando la grán ventaja de crear una tienda virtual para sus productos de manera automática, esto se consigue a pratir de su registro en la plataforma<br>Para los compradores, se ofrece la posibilidad de encontrar todo lo que necesita en un solo lugar y lo mejor, con vendedores confiable y con contactos directos.</span>
						</div>
					</div>
				</div>
			</div>
			<div class="structure4" id="D_Nosotros">
				<h1 style="color:#fff;">Nosotros</h1>
			</div>
			<div class="structure5" id="D_Referencias">
				<h1 style="color:#fff;">Referencias</h1>
			</div>
			<div class="Foot_cont">
				<span>© C0DING <?= $year ?></span>
			</div>
		</div>
	</div>
<script src="RECURSOSPAGINA/SCRIPTS/JS/particles.js"></script>
<script src="RECURSOSPAGINA/SCRIPTS/JS/app.js"></script>
<script src="RECURSOSPAGINA/SCRIPTS/JS/mainPage.js"></script>
</body>
</html>