<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>APS</title>
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" > <!-- FONT- AWESOME -->
  <link href="../css/css-geral.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Pacifico|Geo" rel="stylesheet">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <style media="screen">
  .cabecario{background-image:<?php echo $imagem ?>;} /* filter: brightness(25%);}*/
  </style>
  <script src="../javabyDvd.js" charset="utf-8"></script>
</head>
<body>
  <main>
    <!-- CABECARIO -->
    <div class="#">
    <header class="cabecario">
      <div id="menuHeader" class="flex">
        <!-- MENU MOBILE -->
        <!-- ============================================ -->
        <?php include ('../_moleculas/menu-mobile.php'); ?>
        <!-- ====================================================== -->
        <aside class="logosi" style="color: #ddd">
          <a href="../index.php">&lt;/Sistemas&gt;</a>
        </aside>
        <!-- =============================================== -->
        <!-- MENU normal -->
        <!-- ============================================================ -->
        <nav class="menuh">
          <ul class="mtop">
            <li>
              <a href="../_layouts/materia.php">Home</a>
              <ul class="sub-menu">
                <script>temas('index.php', n[0])</script>
              </ul>
            </li>
            <li>
              <a href="../_layouts/java.php">Linguagem Algoritmica</a>
              <ul class="sub-menu">
                <script>temas('java.php', 5)</script>
              </ul>
            </li>
            <li>
              <a href="../_layouts/matematica.php">Matemática</a>
              <ul class="sub-menu">
                <script>temas('matematica.php', n[2])</script>
              </ul>
            </li>
            <li>
              <a href="../_layouts/turma.php">Ger. de Projetos</a>
              <ul class="sub-menu">
                <script>temas('tuma.php', n[3])</script>
              </ul>
            </li>
            <li>
              <a href="../_layouts/html-css.php">Hip e Estilos</a>
              <ul class="sub-menu">
                <script>temas('html-css.php', n[4])</script>
              </ul>
            </li>
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
          <a href="#titulo">Continuar Lendo
             <?php
          function temas($numero)
          {
            for ($i=0; $i < $numero; $i++) {
              echo "N: $i... ";
            }
          }

          temas(4);
          ?></a>
        </div>


      </section>

    </header>
