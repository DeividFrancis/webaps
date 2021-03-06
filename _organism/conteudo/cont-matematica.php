<aside class="box wrap-column">
    <section class="td-conteudo wrap">
        <?php titulo(1,$definaMateria) ?>
          <p class="texto">
            É uma área de matemática em conjunto com a computação a qual soluciona
            problemas em várias outras matérias tanto da Ciência exatas, entre diversas
             áreas para o tratamento de problemas complexos, em busca de soluções exatas.
          </p>
          <p class="texto">
            No mundo atual o tratamento da matemática na humanidade tem sido grande
            devido aos grandes valores de: consumo, investimentos, divida bolsa de
            valores, PIB etc. a forma mais aceitável foi fazer a junção de matemática e
            computação como se fossem interface humana e computador. Tornando assim um
            mundo totalmente informatizado.
          </p>
        <?php titulo(3,$definaMateria) ?>
          <p class="texto">
            A/B  Sejam valores “A” e “B” que pertecem ao conjunto dos
            números inteiros e onde “B” é diferente de zero. Dizemos
            então que “A” sobre “B” é uma fração, ou numero racional .
          </p>
          <p class="texto">
            A adição e subtração de frações são divididas em dois casos.
             O primeiro envolve apenas frações com denominadores iguais e
             o segundo com denominadores diferentes. Os caulculos no primeiro
              caso são fáceis, bastando somar os numeradores e repetir o numerador
               no resultado.  Ex :
          </p>
          <ul class="texto" style="list-style-type: none">
            <li>A --> Numerador 3</li>
            <li>B --> Denominador 7</li>
          </ul>

          <p class="texto"> 3/7 + 2/7 = 5/7</p>

          <p class="texto">
            Entretanto, o caso em que os denominadores são diferentes é um pouco
             mais trabalhoso. Na realidade, antes de somar esse tipo de fração,
             é necessário encontrar frações equivalentes a elas que possuam o mesmo
             denominador. O exemplo abaixo é de uma soma de frações feita dessa maneira:
          </p>

          <p class="texto">
            3/4 + 7/9 = 27/36 + 20/36 = 47/36
          </p>

          <p class="texto">
            Para encontrar essas frações equivalentes, existe um método prático no
             qual o primeiro passo é encontrar o mínimo múltiplo comum entre os
             denominadores. Observe que 36 é o MMC de 4 e 9.
          </p>

        <?php titulo(4,$definaMateria) ?>
          <ul class="texto">
            <li>Principio do 3° excluído</li>
            <li>Principio da contradição</li>
            <li>Principio de Indentidade tiora complementares</li>
          </ul>

          <h4 class="sub-titulo">Reposição:</h4>
            <p class="texto">
              É todo conjunto de palavras ou símbolos que exprimem um único pensamento de sentino completo.
            </p>

          <h4 class="sub-titulo">Principio da contradição:</h4>
            <p class="texto">
              Uma proposição não pode ser verdadeira ou falsa ao mesmo tempo
            </p>
          <h4 class="sub-titulo">Principio do 3° excluído :</h4>
            <p class="texto">
              Toda proposição ou é verdadeira, ou é falsa, isto é verifica-se sempre um destes casos e nunca um terceiro caso.
            </p>
          <h4 class="sub-titulo">Principio da identidade:</h4>
            <P class="texto">Estabelece cada propriedade/ individuo e indentica a si mesmo.</P>
        <?php titulo(5,$definaMateria) ?>
        <p class="texto">
          São proposições simples que exprimem uma única ideia, isto é não
           contem nenhuma outra proposição como parte integrante da mesma.
            As proposições simples são denotadas por letras minúsculas do alfabeto
             latino (p,q,r,s,t)
        </p>


        <?php titulo(6,$definaMateria) ?>
          <p class="texto">
            São proposições que exprimem mais de uma ideia ( no mínimo duas diferentes e são formadas pela combinação de outras proposições simples.
          </p>
        <?php titulo(7,$definaMateria) ?>
          <p class="texto">
            As operações realizadas sobre proposição são chamadas de operações
             lógicas está técnica é chamada de cálculo proposicional que é
              analógico ao cálculo aritmético sobre números as operações
              lógicas fundamentais são
          </p>

          <p class="texto">
            1- <strong>Negação: </strong>: Chama-se negação de uma proposição “P” a
             proposição representada por “não P” cujo o valor lógico será verdadeiro (V), quando “P” for falso (F) terá valor lógico falso “F”, quando “P” for verdadeiro (v).
          </p>
          <ul class="texto" style="list-style-type: none">
            <li>Notação : Não = ~*</li>
            <li>E lê-se : Não P= ~P</li>
            <li><strong>Ex:</strong> Fazendo negação das seguintes proposições :</li>
            <li>P: 2+3 = 5   V (p) =V</li>
            <li>~P : 2+3 = ou diferente de 5 V(~P)=F</li>
            <li><strong>Ex 2 :</strong></li>
            <li>Roma é capital de França V(P)=F</li>
            <li>~S Roma não é capital de França V(~S)=V</li>

          </ul>
          <h4 class="sub-titulo">Conjunção conectivo ''<strong>E</strong>''</h4>
            <p class="texto">
              Chama-se conjunção de duas proposições ''<strong>P</strong>,<strong>Q</strong>'' cujo o valor lógico será verdadeiro (V) quando a proposição ''<strong>P</strong>,<strong>Q</strong>'' forem <strong>verdadeiras</strong>, e <strong>Falso</strong> (f) e nos demais casos
            </p>
            <script>
            function fracao(numerador, denominador, igual) {
                  document.write("<table class='fracao'><tr><td>"+numerador+"</td><td> = "+igual+"</td></tr><tr><td>"+denominador+"</td></tr></table>");
                  // document.write(numerador, denominador, igual);
            };
                fracao(10,2,5);
                document.write("mamao")
            </script>
            <table class="tabelas">
              <caption>
                Tabela verdade (E ^)
              </caption>
              <thead>
                <tr>
                  <th>P</th>
                  <th>Q</th>
                  <th>P ^ Q</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>V</td>
                    <td>V</td>
                    <td>V</td>
                  </tr>
                  <tr>
                    <td>V</td>
                    <td>F</td>
                    <td>F</td>
                  </tr>
                  <tr>
                    <td>F</td>
                    <td>V</td>
                    <td>F</td>
                  </tr>
                  <tr>
                    <td>F</td>
                    <td>F</td>
                    <td>F</td>
                  </tr>
              </tbody>
            </table>

          <p class="texto">Notação (e=^):</p>
          <p class="texto">P e Q <--> P ^ Q</p>
        <h4 class="sub-titulo">Disjunção ( conectivo ''<strong>OU</strong>'') </h4>
          <p class="texto">
            Chama-se de disjunção de duas proposições ''<strong>P</strong>,<strong>Q</strong>'' a proposição representado por ''<strong>P</strong>ou<strong>Q</strong>'' cujo o valor lógico e verdadeiro (v) quando ao menos umas das proposições é <strong>verdadeiras</strong>, e tem valor lógico <strong>Falso</strong> (F) quando duas proposições forem falsas notação : (ou=V)
          </p>
          <p class="texto">Ou P ou Q <--> P V Q</p>

          <table class="tabelas">
            <caption>
              Tabela verdade (OU)
            </caption>
            <thead>
              <tr>
                <th>P</th>
                <th>Q</th>
                <th>P v Q</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>V</td>
                  <td>V</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>V</td>
                  <td>F</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>F</td>
                  <td>V</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>F</td>
                  <td>F</td>
                  <td>V</td>
                </tr>
            </tbody>
          </table>

          <h4 class="sub-titulo">Disjunção exclusivas <br>
(conectivo ou,ou)
          </h4>
          <p class="texto">
            Chama-se de dinsjução exclusiva de duas proposições “P” “Q” a proposição representada por “ou P ou Q” isto é, ou P é verdadeiro; ou Q é verdadeiro, mas não ambas ao mesmo tempo.
Por tanto o valor lógico desta proposição composta será verdadeiro quando V (P) = V, ou V(q) = V alterna mente notação (ou, ou = V)

          </p>
          <p class="texto">Ou P ou Q <--> P <span style="text-decoration: underline;">V</span> Q</p>

          <table class="tabelas">
            <caption>
              Tabela verdade Disjunção
            </caption>
            <thead>
              <tr>
                <th>P</th>
                <th>Q</th>
                <th>P <span style="text-decoration: underline;">V</span> Q</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>V</td>
                  <td>V</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>V</td>
                  <td>F</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>F</td>
                  <td>V</td>
                  <td>V</td>
                </tr>
                <tr>
                  <td>F</td>
                  <td>F</td>
                  <td>V</td>
                </tr>
            </tbody>
          </table>

        <h4 class="sub-titulo">Condicional (Conectivo “ se então”...)</h4>
          <p class="texto">
            Chama-se de proposição condicional uma proposição representada por “ se P então Q” cujo o valor lógico é falsidade (F) no caso em que primeira proposição é verdadeira e segunda proposição é falsa e será verdadeira nos demais casos
          </p>
          <p class="texto">Notação (-->)</p>
          <p class="texto">(P --> ) e lê-se de duas formas possíveis </p>
          <p class="texto">(i)	P é condição suficiente para Q</p>
          <p class="texto">(ii)	Q é condição necessária para P</p>
          <p class="texto"></p>

          <h4 class="sub-titulo"> Onde :</h4>
            <p class="texto">P : É a preposição antecedente</p>
            <p class="texto">Q: É a preposição consequente</p>
            <p class="texto">Uma preposição condicional P --> Q não afirma que o consequente q se deduz ou é consequência do antecedente e do consequente conforme a tabela verdade.</p>

          <h4 class="sub-titulo">Bicondicional (..Se somente Se..)</h4>
            <p class="texto">
              Chama-se de proposição bicondicional ou apenas bicondicional uma proposição composta representada por “P” se somente “Q” cujo o valor lógico sera (voltado) verdadeiro (V) quando P,Q forem ambos verdadeiros, ou ambos falsos e falsidade (F) nos demais casos
            </p>
            <p class="texto">
              Notação P &lt;--&gt; Q  e se lê de uma das seguintes formas :
            </p>

            <p class="texto">
              (e) P é condição necessária e suficiente para Q
            </p>
            <p class="texto">
              (ii) Q é  condição necessária e suficiente para p.
            </p>

            <table class="tabelas">
              <caption>
                Tabela verdade Bi condicional
              </caption>
              <thead>
                <tr>
                  <th>P</th>
                  <th>Q</th>
                  <th>P &lt;-&gt;</span> Q</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>V</td>
                    <td>V</td>
                    <td>V</td>
                  </tr>
                  <tr>
                    <td>V</td>
                    <td>F</td>
                    <td>F</td>
                  </tr>
                  <tr>
                    <td>F</td>
                    <td>V</td>
                    <td>F</td>
                  </tr>
                  <tr>
                    <td>F</td>
                    <td>F</td>
                    <td>V</td>
                  </tr>
              </tbody>
            </table>

          <h4 class="sub-titulo">Resumindo:</h4>
            <ul class="texto">
              <li>(~) Negação</li>
              <li>(^) disjunção</li>
              <li>(v) conjunção</li>
              <li>(v) conjunção exclusiva </li>
              <li>(->) condicional </li>
              <li>(<-&gt;) bi condicional </li>
            </ul>

        <?php titulo(7,$definaMateria) ?>
          <p class="texto">
            O sistema binário (ou de base) é um sistema posicional em que todas quantidades são representadas com base em 2 números: <strong>Zero</strong> (0) e <strong>Um</strong> (1).
          </p>
          <h4 class="sub-titulo">Conversão de decimal em binários:</h4>
            <p class="texto">
              Para transformar um número decimal em binário, deve-se realizar uma série de divisões pelo valor de base, que é o número 2.
            </p>
            <p class="texto">
              <strong>Ex:    </strong>
            </p>
            <p class="texto">
              (5)¹º
            </p>
            <p class="texto">
              5/2 (RESTO: 1) -> 2/2 (RESTO: 0) -> (RESTO: 1)
            </p>
            <p class="texto">
              (101)²
            </p>
          <h4 class="sub-titulo">Conversão de binário para decimal</h4>
            <p class="texto">
              Para converter os números binários em números decimais deve-se somar o produto do dígito binário e dois elevado a posição do dígito, conforme abaixo:
            </p>
            <ul class="texto">
              <li>(101)² -> (x)¹º</li>
              <li>1.2²+0.2¹+1.2º</li>
              <li>4 + 0 + 1 = (5)¹º</li>
            </ul>
          <?php titulo(8,$definaMateria) ?>
            <h4 class="sub-titulo">Noções de Lógica Booleana</h4>
              <p class="texto">
                A lógica booleana é uma derivada da lógica matemática assim como o álgebra booleana é derivada do álgebra básica
              </p>
              <p class="texto">
                A lógica booleana difere em 3 aspectos básicos:
              </p>
              <ul class="texto">
                <li>Nos valores que as variáveis podem assumir (0 = falso) (1=verdadeiro)</li>
                <li>Na aplicação desses valores </li>
                <li>Nas propriedades demais operação, está é, nas leis que elas obedecem.</li>
              </ul>
              <table class="tinfo">
                <thead>
                  <tr>
                    <th>Álgebra variantes são números reais</th>
                  <!-- </tr>
                  <tr> -->
                    <th>Álgebra Booleana variáveis assumem <strong>0</strong> ou <strong>1</strong> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Os operadores são aplicados = REAIS</td>
                  <!-- </tr>
                  <tr> -->
                    <td>Operadores retornam apena 0 ou 1</td>
                  </tr>
                </tbody>
              </table>

              <h4 class="sub-titulo">Por ex:</h4>
                <ul class="texto" style="list-style-type: none">
                  <li><strong>X =  Estudante</strong></li>
                  <li><strong>y = Cursa Sistema de informação</strong></li>
                  <li>*(1 - x) = </li>
                  <li>* (x * y ) = </li>
                  <li>* (1 - x)  (1 - y)= </li>
                  <li>* (x + y) = </li>
                  <br>
                  <li>(1 - x ) = Representa tudo que não são estudantes num determinado conjunto; </li>
                  <li>(x * y)  = Ser estudante e cursar Sistemas de informação;</li>
                  <li>(1 - x) * (1 - y) = Representa todos que não são estudantes e não cursão Sistemas de informação em um determinado conjunto;</li>
                  <li>(x + y) = Todos os estudantes cursam Sistemas de informação num determinado conjunto;</li>
                </ul>

                <h4 class="sub-titulo">
                  Portas Lógicas
                </h4>

                <p class="texto">
                  Uma porta é um elemento do hardware que recebe um ou maior sinais de saída, cujo o valor da lógica está estabelecida para sua construção.
                </p>

                <p class="texto"><strong>Observe a tabela abaixo contendo um infografico com o tipo e seu respectivo simbulo;</strong></p>
          <div class="imagem">
            <img src="../_imagens/booleano.jpg" alt="tabela de estrutura">
          </div>

          <p class="texto">
            <strong>Porta And</strong> (E): Porta And é definida como sendo o elemento que produz um resultdo verdadeiro (1), se é somente se, todas as entradas forem verdade.
          </p>
          <table class="tabelas">
            <thead>
              <tr>
                <th>Enstrada A</th>
                <th>Enstrada B</th>
                <th>Saída <br>X = A * B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>0</td>
                <td>1</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>

          <p class="texto">
            <strong>Porta or (ou)</strong> : A porta OR é definida para produzir um resultado verdadeiro (1) se pelo menos umas das entradas forem verdadeiras (1), consute a tabela acima para ver seu simbulo gráfico;
          </p>

          <table class="tabelas">
            <thead>
              <tr>
                <th>Enstrada A</th>
                <th>Enstrada B</th>
                <th>Saída <br>X = A + B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>0</td>
                <td>1</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>

          <p class="texto">
            <strong>Porta NOT (Inversores, NÃO)</strong> A porta lógica not também chamada de inversor complemento inverte o sinal binário colocado em sua entrada o símbolo está no gráfico e a tabela verdade segue a baixo.
          </p>
          <table class="tabelas" style="th:last-child{min-width: inherit}">
            <thead>
              <tr>
                <th>A</th>
                <th style="min-width: inherit">~A</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>

          <p class="texto">
            <strong>Porta NAND (NOT AND)</strong> A porta lógica NAND é definida como o complemento da porta AND, isto é a saída de um circuito lógico nand equivale a sáida de um circuito and passando por uma porta not, consute o infografico para ver seu simbulo;
          </p>
          <table class="tabelas">
            <thead>
              <tr>
                <th>Enstrada A</th>
                <th>Enstrada B</th>
                <th>Saída <br>X = A * B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>0</td>
                <td>1</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>

          <p class="texto">
            <strong>Porta NOR (NOTOR)</strong> Assim como no NAND a porta lógica NOR é complemento e a inversão da porta lógica OR. A saída de um circulo lógico NOR é obtido ao efetuar a operação lógica da OR sobre as entradas invertídas resultando símbolo natual;
          </p>

          <table class="tabelas">
            <thead>
              <tr>
                <th>Enstrada A</th>
                <th>Enstrada B</th>
                <th>Saída <br>X = A + B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>0</td>
                <td>1</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>

          <p class="texto">
            <strong>Porta XOR (ENCLUSIVE OR)</strong> A operação lógica XOR pode ser considerada um caso particular de função OR, ou seja a saída será, se somente se, apenas uma das entradas for verdadeiras não podemos ambas serem verdadeiras símbolo no material.
          </p>

          <table class="tabelas">
            <thead>
              <tr>
                <th>Enstrada A</th>
                <th>Enstrada B</th>
                <th>Saída <br>X = A + B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>0</td>
                <td>1</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
                <td>1</td>
              </tr>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>
    </section>
</aside>
