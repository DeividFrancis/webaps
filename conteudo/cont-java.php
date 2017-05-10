<aside class="box wrap-column">
  <!-- <nav class="menuv">
    <ul class="menu-ul">
      <li class="mtitulo">TOPICOS</li>
      <li><a href=""><i class="fa fa-"></i>Linguagem Algoritmica</a></li>
      <li><a href=""><i class="fa fa-"></i>Matematica</a></li>
      <li><a href=""><i class="fa fa-"></i>Gerencia de projetos</a></li>
      <li><a href=""><i class="fa fa-"></i>hip e estilos</a></li>
      <li><a href=""><i class="fa fa-"></i>compenentes</a></li>
    </ul>
   </nav> -->
  <section class="td-conteudo wrap">
    <header class="apresentacao" id="titulo">
      <h2 class="materia"><?php echo $materia; ?></h2>
      <div class="autor">prof:<a href="#"><?php echo $tutor ?></a></div>

    </header>
    <h3 class="titulo" id="tema-0"><?php echo $java[0] ?></h3>

    <p class="texto">Um algoritmo é uma sequência de passos que resolve algum problema ou alcança algum objetivo, como a sequência de passos
     para resolver o problema de descobrir a máxima altura. É importante salientar que um algoritmo simplesmente diz o que
     deve ser feito. Para resolver de fato um problema, devemos definir como executar os passos do algoritmo. Por exemplo,
     para o problema anterior de achar a máxima altura, deveríamos definir como “pegar” as informações sobre as alturas da
     pessoas (perguntar para a própria pessoa, medir a altura usando uma fita métrica ou obter a altura de algum cadastro que
      a pessoa tenha feito) e como manter as informações sobre as alturas (anotar em um papel ou guardar em uma varável no computador).</p>
    <p class="texto">
      A definição de como os passos de um algoritmo serão executados é uma implementação do algoritmo. Resumindo, algoritmo é o que deve
       ser feito e implementação é o como deve ser feito. Estamos interessados em desenvolver algoritmos computacionais. Para isso, utilizaremos
        um modelo de programação. Um modelo de programação fornece ideias e conceitos para nos ajudar a criar algoritmos. Os nossos algoritmos serão
        executados por um computador. Então, devemos implementá-lo através de programas de computador. Um programa é a definição de como os passos
        de um algoritmo serão executados no computador. Os programas são escritos em alguma linguagem de programação. Uma linguagem de programação
        é a maneira de “conversarmos” com um computador. A linguagem que utilizaremos aqui é a Java. O Java é uma linguagem de programação orientada a
         objetos que atualmente faz parte do núcleo da Plataforma Java.
    </p>
    <h3 class="titulo" id="tema-1">
      <?php echo $java[1] ?>
    </h3>
    <p class="texto">
      Queremos introduzir a linguagem Java básica (sem uso de orientação a objeto) através de alguns exemplos simples
    </p>
    <p class="texto">O aluno deve entender, neste momento, que Java é apenas uma outra linguagem de programação, mas possuindo de sintaxe diferente da linguagem vista em Programação I (Python, Pascal, ...)</p>
    <h4 class="sub-titulo">Por que Java?</h4>
    <ul class="texto">
      <li>Linguagem muito poderosa embora simples</li>
      <li>Permite portabilidade</li>
      <li>Muito usada em programação em rede</li>
    </ul>

    <h3 class="titulo" id="tema-2"><?php echo $java[2] ?></h3>
    <h4 class="sub-titulo">nao sei</h4>
    <ul class="texto">
      <li>+ (soma)</li>
      <li>- (subtração)</li>
      <li>* (multiplicação)</li>
      <li>/ (divisão)</li>
      <li>% (módulo)</li>
      <li>Há operadores unários - e +</li>
      <li>Operador de String</li>
    </ul>

    <h4 class="sub-titulo">Operadores Relacionais</h4>

    <ul class="texto">
      <li> &lt; (menor)</li>
      <li> &lt;= (menor ou igual)</li>
      <li>&gt; (maior)</li>
      <li>&gt; (maior ou igual)</li>
      <li>== (igual)</li>
      <li>!= (não igual)</li>
    </ul>

    <h4 class="sub-titulo">
      Operadores Lógicos
    </h4>

    <ul class="texto">
      <li>&& (AND)</li>
      <li>|| (OR)</li>
      <li>! (NOT)</li>
    </ul>

    <h3 class="titulo" id="tema-3"><?php echo $java[3] ?></h3>
      <p class="texto">Veja o Exemplo  a seguir:</p>
      <div class="window">
        <span><i>Hello.java</i><i class="fa fa-close"></i></span>
        <code>
          <pre>
            package p2.exemplos;
              public class Hello {
                public static void main(String[] args) {
                  System.out.println("Hello, world!");
                }
            }
          </pre>
        </code>
      </div>

    <h4 class="sub-titulo">Observações</h4>
    <p class="texto">A linha</p>
      <code><pre class="line">package p2.exemplos;</pre></code>
      <p class="texto">é usada para indicar que este programa faz parte de um "pacote" que pode conter vários programas</p>
      <p class="texto">
        É uma forma de organizar vários programas, da mesma forma que "pastas" ou "diretórios"
        são usados para organizar arquivos num sistema de arquivos
      </p>
</aside>
