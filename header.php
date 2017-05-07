<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>APS</title>
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" > <!-- FONT- AWESOME -->
  <link href="css/css-geral.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Pacifico|Geo" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <style media="screen">
  .cabecario{background-image:<?php echo $imagem ?>;} /* filter: brightness(25%);}*/
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery.js"></script>
</head>
<body>
  <main>
    <!-- CABECARIO -->
    <header class="cabecario">
      <div id="menuHeader" class="flex">
        <aside class="logosi" style="color: #ddd">
          &lt;/Sistemas&gt;
        </aside>
        <nav  class="menuh">
          <ul class="mtop">
            <li><a href="index.php"><i class="fa fa-bars"></i>Home</a></li>
            <li><a href="java.php"><i class="fa fa-"></i>Linguagem Algoritimica<i class="fa fa-caret-down"></i></a>
              <ul class="sub-menu">
                <li><a href="java.php#tema-01">Conceito de Algoritmo</a></li>
                <li><a href="java.php#tema-02">Introdução à Linguagem Java</a></li>
                <li><a href="java.php#tema-03">Operadores</a></li>
                <li><a href="java.php#tema-04">Criando um Programa</a></li>
                <li><a href="java.php#tema-05">Exemplo 01</a></li>
                <li><a href="java.php#tema-06">Exemplo 02</a></li>

              </ul>
            </li>
            <li><a href="matematica.php"><i class="fa fa-"></i>Matemática<i id="flip" class="fa fa-caret-down"></i></a>
              <ul class="sub-menu">
                <li><a href="matematica.php#tema-01">tituloDaMateria</a></li>
                <li><a href="matematica.php#tema-02">tituloDaMateria</a></li>
                <li><a href="matematica.php#tema-03">tituloDaMateria</a></li>
                <li><a href="matematica.php#tema-04">tituloDaMateria</a></li>
                <li><a href="matematica.php#tema-05">tituloDaMateria</a></li>
              </ul>
            </li>
            <li><a href="turma.php"><i class="fa fa-"></i>Gerência de Projetos<i class="fa fa-caret-down"></i></a>
              <ul class="sub-menu">
                <li><a href="turma.php#tema-01">tituloDaMateria</a></li>
                <li><a href="turma.php#tema-02">tituloDaMateria</a></li>
                <li><a href="turma.php#tema-03">tituloDaMateria</a></li>
                <li><a href="turma.php#tema-04">tituloDaMateria</a></li>
                <li><a href="turma.php#tema-05">tituloDaMateria</a></li>
              </ul>
            </li>
            <li><a href="html-css.php"><i class="fa fa-"></i>Hip e Estilos<i class="fa fa-caret-down"></i></a>
              <ul class="sub-menu">
                <li><a href="html-css.php#tema-01"> <?php $html = 'A linguagem HTML'; echo $html; ?> </a></li>
                <li><a href="html-css.php#tema-02">Ambientes de progamação HTML</a></li>
                <li><a href="html-css.php#tema-03">Ferramenta de edição HTML</a></li>
                <li><a href="html-css.php#tema-04">Conceitos básicos de Web-Designer</a></li>
                <li><a href="html-css.php#tema-05">introção ao CSS</a></li>
                <li><a href="html-css.php#tema-06">Cores e unidades</a></li>
                <li><a href="html-css.php#tema-07">Propriedades CSS</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <form class="busca" action="index.html" method="post">
          <button type="button" name="button"><i class="fa fa-search"></i></button>
          <input type="text" name="busca" value="" placeholder="pesquisar">
        </form>
      </div>
      <section class="inicio wrap-column">
        <h2 class="materia"><?php echo $materia ?></h2>
        <p class="intro"><?php echo $intro ?></p>
        <div class="continue">
          <a href="#titulo">Continuar Lendo</a>
        </div>
      </section>

    </header>
