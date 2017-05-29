<aside class="box wrap-column">
    <section class="td-conteudo wrap">
        <?php titulo(1,$definaMateria) ?>
          <h4 class="sub-titulo">História do HTML</h4>
          <P class="texto">
            O criador da HTML foi o inglês Tim Bernes-Lee, em 1991. Sua crição se concebeu no CERN (European Concil for Nuclear Research), na Suíça.
          A sua intenção era interligar computadores do  laboratório  a  outras  instituições  de  pesquisa  e  exibir  documentos científicos de forma simples e fácil de acessar.
          </P>
          <p class="texto">
            O
            HTML  desenvolve-se  de  modo que  todos  os  equipamentos  sejam  capazes  deusar a informação da WEB. O objetivo é que computadores  com  monitores  de  diversas resoluções
              e  vários  números  de  cores,  equipamentos  para  entrada  e  saída  de  voz, computadores com alta e baixa largura de freqüência entre outros, não sejam  empecilhos para que os documentos sejam exibidos.
          </p>
          <h4 class="sub-titulo">Evolução</h4>
          <p class="texto">
            A linguagem HTML tem passado por várias transformações ao longo desses anos, recebendo aperfeiçoamentos em seus comandos e recebendo diversas nomenclaturas diferentes a cada ciclo de mudanças.
               Você pode observar parte dessa evolução na linha do tempo a seguir:
          </p>
          <table class="tinfo">
            <thead>
              <tr>
                <th>Ano</th>
                <th>Versão</th>
                <th>Caracteristica</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1991</td>
                <td>Criação</td>
                <td>xxx</td>
              </tr>
              <tr>
                <td>1994</td>
                <td>HTML 2.0</td>
                <td>Padronização para as caracteristicas principais</td>
              </tr>
              <tr>
                <td>1995</td>
                <td>HTML 3.0</td>
                <td>Uma extensão do HTML mais entendido como um rascunho de padão</td>
              </tr>
              <tr>
                <td>1997</td>
                <td>HTML 3.2</td>
                <td>Netscape e Internet Explorer definem seus próprios padrões em implementações correntes</td>
              </tr>
              <tr>
                <td>1999</td>
                <td>HTML 4.0</td>
                <td>Combinações de CSS, JavaScript, VBSript e DOM que juntas o DHTML, o HTML dinâmico</td>
              </tr>
              <tr>
                <td>2000</td>
                <td>HTML 4.01</td>
                <td>Algumas modificações da versão anterior</td>
              </tr>
              <tr>
                <td>2010</td>
                <td>HTML5</td>
                <td>O HTML que conhecemos hoje</td>
              </tr>
            </tbody>
          </table>
          <h6>http://blogdoscursos.com.br/html-5-o-que-voce-precisa-saber-para-comecar/</h6>
        <?php titulo(2,$definaMateria) ?>
          <h4 class="sub-titulo">O que é um arquivo HTML?</h4>
            <ul class="texto">
              <li><strong>HTML</strong> significa <strong>H</strong>yper <strong>T</strong>ext <strong>M</strong>arkup <strong>L</strong>anguage (Linguagem de Marcação de Hipertexto)</li>
              <li>Um arquivo HTML é um arquivo de texto contendo pequenas etiquetas de marcação (markup tags)</li>
              <li>As marcações dizem para o navegador Web como mostrar a página </li>
              <li>Um arquivo HTML pode ser criado usando um simples editor de textos</li>
            </ul>

          <?php titulo(3,$definaMateria) ?>
            <p class="texto">
              HTML é baseado em tags (marcações). Com relação às tags devemos considerar que:
            </p>
            <ul class="texto">
              <li>Toda tag aberta deve ser fechada. Por Exemplo <br>
                <span> &lt;strong&gt; APS-SI &lt;/strong&gt;</span>
              </li>
              <li>Uma tag pode conter outra tag dentro dela: <br>
                <span>&lt;tag1&gt; <br>
                  &lt;tag2&gt; SI unesc &lt;/tag2&gt; <br>
                  &lt;/tag1&gt;
                </span>
              </li>
            </ul>
        <!-- <h3 class="titulo" id="tema-2"><?php echo $html[2] ?></h3> -->

        <?php titulo(4,$definaMateria) ?>
          <p class="texto">
            Os códigos do HTML são relativamente simples, e é importante que quem deseja aprender HTML os conheça bem.
             No entanto, imagine criar um WebSite inteiro digitando código dentro de código, sem dúvidas o tempo de
             desevolvimento seria muito alto e haveriam muitos erros  corrigidos.
            Aí entram os softwares editores de HTML.  Essas ferramentas facilitam muito o trabalho do WebDesigner e
            são essenciais para quem trabalha profissionalmente com programação HTML.
            Abaixo alguns dos softwares mais conhecidos:
          </p>
          <ul class="texto">
            <li>Atom</li>
            <li>SublimeText</li>
            <li>Notepad ++</li>
            <li>NetBeans</li>
            <li>DreamWorks</li>
          </ul>
        <?php titulo(5,$definaMateria) ?>
          <p class="texto">
            O Responsive Web Design se baseia em programar um site de forma que os elementos que o compõem se adaptem
            automaticamente à largura de tela do dispositivo no qual ele está sendo visualizado.
            Mas o design Web responsivo não é apenas resoluções de tela ajustáveis e imagens redimensionáveis automaticamente ,
            mas sim uma nova maneira de pensar no design.
            Um design responsivo inclui.
          </p>
          <ul class="texto">
            <li>Adaptar o layout da página de acordo com a resolução em que está sendo visualizada.</li>
            <li>Redimensionar as imagens automaticamente para que caibam na tela e para que não sobrecarreguem a transferência de dados em um celular, por exemplo.</li>
            <li>Ocultar elementos desnecessários nos dispositivos menores.</li>
            <li>Adaptar tamanho de botões e links para interfaces touch onde o ponteiro do mouse é substituído pelo dedo do usuário.</li>
            <li>Utilizar de forma inteligente recursos mobile como geolocalização e mudança na orientação do aparelho (horizontal ou vertical).</li>
          </ul>
        <?php titulo(6,$definaMateria) ?>
         <ul class="texto">
              <li>CSS é uma linguagem que descreve o estilo de um documento HTML.</li>
              <li>O CSS descreve como os elementos HTML devem ser exibidos.</li>

         </ul>
         <p class="texto">
           CSS (Cascading Style Sheet - Folha de Estilo em Cascata) é usado para estilizar e criar layout web - Por exemplo para alterar fonte, cor, tamanho e espaçamento do conteúdo, dividir o conteudo em múltiplas colunas, ou adicionar animações e outros componentes decorativos. Este módulo te coloca no caminho da maestrias em CSS com o basico de como ele funciona, incluindo seletores, propriedades, escrita dentro dos padrões CSS, aplicação de CSS para HTML, como especificar tamanho, cor, e outras propriedades CSS, cascata e herança, e  debugar CSS.
         </p>
         <h4 class="sub-titulo">Aplicando CSS a um documento HTML</h4>
           <p class="texto">
              Você pode aplicar CSS a um documento de três maneiras distintas. Os três métodos de aplicação estão exemplificados a seguir. Recomendamos que você foque no terceiro método, ou seja o método externo.
           </p>
           <strong class="texto">Método 1: In-line (o atributo style)</strong><br>
           <p class="texto">
             Uma maneira de aplicar CSS é pelo uso do atributo style do HTML. Tomando como base o exemplo mostrado anteriormente a cor vermelha para o fundo da página pode ser aplicada conforme mostrado a seguir:
           </p>
           <div class="window">
             <span><i>In-line.html</i><i class="fa fa-close"></i></span>
             <code>
               <pre>
                 &lt;html&gt;
                 &lt;head&gt;
                   &lt;title&gt;Exemplo&lt;/title&gt;
                 &lt;/head&gt;
                 &lt;body style="background-color: #FF0000;"&gt;

                   &lt;p&gt;Esta é uma página com fundo vermelho&lt;/p&gt;
                 &lt;/body&gt;
                 &lt;/html&gt;
               </pre>
             </code>
           </div>

           <strong class="texto">Método 2: Interno (a tag style)</strong>
           <p class="texto">
             Uma outra maneira de aplicar CSS e pelo uso da tag &gt;style&lt; do HTML. Como mostrado a seguir:
           </p>
           <div class="window">
             <span><i>Interno.html</i><i class="fa fa-close"></i></span>

             <code>
               <pre>
                 &lt;html&gt;
                   &lt;head&gt;
                     &lt;title&gt;Exemplo&lt;/title&gt;
                     &lt;style type="text/css"&gt;

                     body {background-color: #FF0000;}
                     &lt;/style&gt;
                   &lt;/head&gt;
                   &lt;body&gt;
                     &lt;p&gt;Esta é uma página com fundo vermelho&lt;/p&gt;

                   &lt;/body&gt;
                 &lt;/html>
               </pre>
             </code>
           </div>


           <strong class="texto">Método 3: Externo (link para uma folha de estilos)</strong>
           <p class="texto">
             O método recomendado é o de lincar para uma folha de estilos externa. Usaremos este método nos exemplos deste tutorial.

Uma folha de estilos externa é um simples arquivo de texto com a extensão .css. Tal como com qualquer outro tipo de arquivo você pode colocar uma folha de estilos tanto no servidor como no disco rígido.
           </p>
           <p class="texto">
             O "truque" é criar um link no documento HTML (default.htm) para a folha de estilos (style.css). O link é criado em uma simples linha de código HTML como mostrado a seguir:
           </p>
           <code><pre class="line">&lt;link rel="stylesheet" type="text/css" href="style/style.css" /&gt;</pre></code>

           <p class="texto">
             Notar que o caminho para a folha de estilos é indicado no atributo href.

Esta linha de código deve ser inserida na seção header do documento HTML, isto é, entre as tags &lt;head&gt; e &lt;/head&gt;. Conforme mostrado abaixo:
           </p>
           <div class="window">
             <code>
               <span><i>Externo.html</i><i class="fa fa-close"></i></span>

               <pre>
                 <html>
                   &lt;head&gt;
                     &lt;title&gt;Meu documento&lt;/title&gt;
                     &lt;link rel="stylesheet" type="text/css" href="style/style.css" /&gt;

                   &lt;/head&gt;
                 &lt;body&gt;
                   ...
               </pre>
             </code>
           </div>

           <p class="texto">
             Esta técnica pode economizar uma grande quantidade de trabalho. Se por exemplo, você quiser trocar a cor do fundo de um site com 100 páginas, a folha de estilos evita que você edite manualmente uma a uma as páginas para fazer a mudança nos 100 documentos HTML. Usando CSS a mudança se fará em uns poucos segundos trocando-se a cor em uma folha de estilos central.
           </p>
        <?php titulo(7,$definaMateria) ?>

        <p class="texto">
          As cores no CSS podem ser especificadas pelos seguintes métodos:
        </p>
        <ul class="texto" style="list-style-type: circle">
          <li>Cores hexadecimais</li>
          <li>Cores RGB</li>
          <li>Cores RGBA</li>
          <li>HSL cors</li>
          <li>HSLA cores</li>
          <li>Nomes de cores predefinidos / cruzados no navegador</li>
          <h6>https://www.w3schools.com/cssref/css_colors_legal.asp</h6>
        </ul>

        <h4 class="sub-titulo">Cores hexadecimais</h4 >
          <p class="texto">
            Valores de cor hexadecimais são suportados em todos os principais navegadores.
            <br><br>
            Uma cor hexadecimal é especificada com: #RRGGBB, onde os números inteiros hexadecimais RR (vermelho), GG (verde) e BB (azul) especificam os componentes da cor. Todos os valores devem estar entre 00 e FF.
          </p>
        <h4 class="sub-titulo">Cores RGB</h4 >
          <p class="texto">
            Os valores de cores RGB são suportados em todos os principais navegadores.
            <br><br>
            Um valor de cor RGB é especificado com: rgb (vermelho, verde, azul). Cada parâmetro (vermelho, verde e azul) define a intensidade da cor e pode ser um número inteiro entre 0 e 255 ou um valor percentual (de 0% a 100%).
            <br><br>
            Por exemplo, o valor rgb (0,0,255) é renderizado como azul, porque o parâmetro azul é definido como seu valor mais alto (255) e os outros são definidos como 0.
            <br><br>
            Além disso, os seguintes valores definem cores iguais: rgb (0,0,255) e rgb (0%, 0%, 100%).
          </p>
        <h4 class="sub-titulo">Cores RGBA</h4 >
          <p class="texto">
            Os valores de cores RGBA são suportados no IE9 +, Firefox 3+, Chrome, Safari e no Opera 10+.
            <br><br>
            Os valores de cor RGBA são uma extensão de valores de cores RGB com um canal alfa - que especifica a opacidade do objeto.
            <br><br>
            Um valor de cor RGBA é especificado com: rgba (vermelho, verde, azul, alfa). O parâmetro alfa é um número entre 0,0 (totalmente transparente) e 1,0 (totalmente opaco).
          </p>
        <h4 class="sub-titulo">HSL cors</h4 >
          <p class="texto">
            Valores de cores HSL são suportados no IE9 +, Firefox, Chrome, Safari e no Opera 10+.
            <br><br>
            HSL significa matiz, saturação e leveza - e representa uma representação coordenada cilíndrica de cores.
            <br><br>
            Um valor de cor HSL é especificado com: hsl (tonalidade, saturação, luminosidade).
            <br><br>
            Matiz é um grau na roda de cores (de 0 a 360) - 0 (ou 360) é vermelho, 120 é verde, 240 é azul. A saturação é um valor percentual; 0% significa um tom de cinza e 100% é a cor completa. A leveza é também uma porcentagem; 0% é preto, 100% é branco.
          </p>
        <h4 class="sub-titulo">HSLA cores</h4 >
          <p class="texto">
            Os valores de cores HSLA são suportados no IE9 +, Firefox 3+, Chrome, Safari e no Opera 10+.
            <br><br>
            Os valores de cor HSLA são uma extensão de valores de cor HSL com um canal alfa - que especifica a opacidade do objeto.
            <br><br>
            Um valor de cor HSLA é especificado com: hsla (matiz, saturação, luminosidade, alfa), onde o parâmetro alfa define a opacidade. O parâmetro alfa é um número entre 0,0 (totalmente transparente) e 1,0 (totalmente opaco).
          </p>
        <?php titulo(8,$definaMateria) ?>
    </section>
</aside>
