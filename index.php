<?php
include_once("fonte/documentos/certificado.php");
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>
  	<?php
  	if(isset($_GET["title"])){
  		echo $_GET["title"];
  	}else if(isset($_POST["title"])){
  		echo $_POST["title"];
  	}else{
  		echo "Publicidades da $certificado->nome_do_site";
  	}
  	?>
  	</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=<?php echo $certificado->escala_do_site; ?>">
    <meta name="description" content="Aprenda a desenvolver web-sites sem saber programação aprnas com o soudev da fbsuper">
    <meta name="author" content="Lopes Carlos Joaquim">
    <meta name="generator" content="SouDev 1.1">
    <title>SouDev</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
	<link href="boots/css/bootstrap.min.css" rel="stylesheet">
    <link href="boots/css/cover.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<link href="carousel.css" rel="stylesheet">
	<script src="//code-sa1.jivosite.com/widget/hshgcy2WHq" async></script>
  </head>
  <body>
  	<?php
  	
  	if(strtolower($certificado->ler_apenas_construtor_txt) != "sim"){
  	if($certificado->erro_do_banco != "Sim"){
  	
    if($certificado->mostrar_cabecalho == "Sim"){
    	include_once("fonte/pacote/menucabecalho.php");
    }
    ?><br><br><br><br>
	<?php
	if($certificado->mostrar_slider_corpo == "Sim" and !isset($_GET["conteudo"])){
		include_once("fonte/pacote/sliders.php");
	}
	?>
	<?php
	if(is_file("fonte/pacote/conteudoindex.php")){
		include_once("fonte/pacote/conteudoindex.php");
	}
	?><br><br><br>
	<footer>
	<?php
	if($certificado->mostrar_rodape == "Sim"){
		include_once("fonte/pacote/menurodape.php");
	}
	}else{
		include_once("fonte/pacote/erros.php");
	}
	}else{
		echo "
		<iframe class='container-fluid' id='ifcsts' src='certificado/construtor.txt'></iframe>
		<script>
		var isct = document.getElementsByTagName('iframe')[0];
		isct.style.width = document.body.clientWidth;
		isct.style.height = document.body.clientHeight;
		isct.style.backgroundColor = '#f1f1f1';
		</script>
		";
	}
	?>
	</footer>
    <script src="boots/js/bootstrap.bundle.min.js"></script>
    <script src="fonte/js/fbsuper.custom.js"></script>
  </body>
</html>