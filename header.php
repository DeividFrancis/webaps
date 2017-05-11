<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>APS</title>
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" > <!-- FONT- AWESOME -->
  <link href="css/css-geral.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Pacifico|Geo" rel="stylesheet">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <style media="screen">
  .cabecario{background-image:<?php echo $imagem ?>;} /* filter: brightness(25%);}*/
  </style>

</head>
<body>
  <main>
    <!-- CABECARIO -->

    <div class="#">
    <header class="cabecario">
      <div id="menuHeader" class="flex">
        <nav class="mobile">
          <a href="javascript:;" class="toggle"><i class="fa fa-bars"></i></a>
          <div class="menu-mobile">
            <ul class="temas">
              <li><a href="#tema-1"><?php echo $temas[1] ?></a></li>
              <li><a href="#tema-2"><?php echo $temas[2] ?></a></li>
              <li><a href="#tema-3"><?php echo $temas[3] ?></a></li>
              <li><a href="#tema-4"><?php echo $temas[4] ?></a></li>
              <li><a href="#tema-5"><?php echo $temas[5] ?></a></li>
              <li><a href="#tema-6"><?php echo $temas[6] ?></a></li>
              <li><a href="#tema-7"><?php echo $temas[7] ?></a></li>
              <li><a href="#tema-8"><?php echo $temas[8] ?></a></li>
              <li><a href="#tema-9"><?php echo $temas[9] ?></a></li>
              <li><a href="#tema-10"><?php echo $temas[10] ?></a></li>
            </ul>
            <ul class="disciplinas">
              <li><a href="index.php"><i class="fa fa-home"></i>Inicio</a></li>
              <li><a href="java.php"><i class="fa fa-code"></i>Linguagem Algoritimica</a></li>
              <li><a href="matematica.php"><i class="fa fa-calculator"></i>Matemática</a></li>
              <li><a href="turma.php"><i class="fa fa-book"></i>Gerência de Projetos</a></li>
              <li><a href="html-css.php"><i class="fa fa-html5"></i>Hip e Estilos</a></li>
            </ul>
          </div>
        </nav>
        <aside class="logosi" style="color: #ddd">
          &lt;/Sistemas&gt;
        </aside>
        <!-- MENU normal -->
        <!-- ============================================================ -->
        <nav class="menuh">
          <ul class="mtop">
            <?php include ('menu-list.php'); ?>
          </ul>
        </nav>
        <!-- =============================================================== -->
        <a href="javascript:;" class="btnToggle"><i class="fa fa-search"></i></a>
        <form class="busca" action="index.html" method="post">
          <button type="button" name="button"><i class="fa fa-search"></i></button>
          <input type="text" name="busca" value="" placeholder="pesquisar">
        </form>
      </div>
      <form class="busca-mobile" action="index.html" method="post">
        <button type="button" name="button"><i class="fa fa-search"></i></button>
        <input type="text" name="busca" value="" placeholder="pesquisar">
      </form>

      <section class="inicio wrap-column">
        <h2 class="materia"><?php echo $materia ?></h2>
        <p class="intro"><?php echo $intro ?></p>
        <div class="continue">
          <a href="#titulo">Continuar Lendo</a>
        </div>
      </section>

    </header>
