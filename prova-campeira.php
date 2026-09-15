<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2a1c12">
  <meta name="description" content="Conteúdos para a prova campeira.">
  <title>Prova Campeira | CTG Sentinela da Serra</title>
  <link rel="stylesheet" href="assets/css/global.css?v=1">
  <script defer src="assets/js/visual.js?v=2"></script></head>
<body class="pagina-prova-campeira"><!--=========================================================
GUIA DE EDIÇÃO DESTA PÁGINA

Os comentários "EDITAR AQUI" indicam os pontos mais comuns
para alterar textos, links, botões e imagens.

HTML:
- h1 / h2 / h3 = títulos
- p = textos
- a href="..." = links e botões
- img src="..." = caminho da imagem
- section = blocos grandes da página

CSS:
- fica dentro das tags <style> no <head>
- no fim do CSS há comentários indicando os ajustes principais

JAVASCRIPT:
- fica dentro das tags <script> no fim da página
=========================================================-->
<!-- EDITAR AQUI: link/botão "Ir para o conteúdo" | href="#conteudo" --><a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
<div aria-hidden="true" class="topo-faixa"></div>
<!-- CABEÇALHO / MENU PRINCIPAL --><?php
$paginaAtual = 'prova-campeira';
$tipoMenu = 'guia';
require __DIR__ . '/includes/header.php';
?>
<!-- CONTEÚDO PRINCIPAL DA PÁGINA --><main id="conteudo">
<!-- SEÇÃO .prova-interna-hero.campeira.campeira-nova-hero --><section class="prova-interna-hero campeira campeira-nova-hero">
<div class="container campeira-hero-grid">
<div>
<!-- EDITAR AQUI: título "Prova Campeira" --><h1>Prova Campeira</h1>
<!-- EDITAR AQUI: texto "Escolha um tópico para estudar a explicação, revisar os pontos pr..." --><p>
          Escolha um tópico para estudar a explicação, revisar os pontos principais
          e observar uma ilustração didática.
        </p>
</div>
</div>
</section>
<!-- SEÇÃO #saberes-campeiros --><section class="secao campeira-saberes" id="saberes-campeiros">
<div class="container">
<div class="secao-titulo campeira-cabecalho">
<div>
<!-- EDITAR AQUI: título "Escolha o assunto que deseja estudar." --><h2>Escolha o assunto que deseja estudar.</h2>
</div>
</div>
<div class="campeira-estudo">
<div aria-label="Tópicos da prova campeira" class="campeira-abas" role="tablist">
<!-- EDITAR AQUI: botão "01 Trança Couro, regularidade e acabamento" --><button aria-controls="painel-tranca" aria-selected="true" class="campeira-topico ativo" data-topico="tranca" id="aba-tranca" role="tab" type="button">
<span class="campeira-topico-numero">01</span>
<span>
<strong>Trança</strong>
<small>Couro, regularidade e acabamento</small>
</span>
</button>
<!-- EDITAR AQUI: botão "02 Chimarrão Avios, preparo e hospitalidade" --><button aria-controls="painel-chimarrao" aria-selected="false" class="campeira-topico" data-topico="chimarrao" id="aba-chimarrao" role="tab" type="button">
<span class="campeira-topico-numero">02</span>
<span>
<strong>Chimarrão</strong>
<small>Avios, preparo e hospitalidade</small>
</span>
</button>
<!-- EDITAR AQUI: botão "03 Charque Conservação, história e culinária" --><button aria-controls="painel-charque" aria-selected="false" class="campeira-topico" data-topico="charque" id="aba-charque" role="tab" type="button">
<span class="campeira-topico-numero">03</span>
<span>
<strong>Charque</strong>
<small>Conservação, história e culinária</small>
</span>
</button>
<!-- EDITAR AQUI: botão "04 Churrasco Fogo, brasa e ponto da carne" --><button aria-controls="painel-churrasco" aria-selected="false" class="campeira-topico" data-topico="churrasco" id="aba-churrasco" role="tab" type="button">
<span class="campeira-topico-numero">04</span>
<span>
<strong>Churrasco</strong>
<small>Fogo, brasa e ponto da carne</small>
</span>
</button>
<!-- EDITAR AQUI: botão "05 Poncho Proteção, dobra e emalamento" --><button aria-controls="painel-poncho" aria-selected="false" class="campeira-topico" data-topico="poncho" id="aba-poncho" role="tab" type="button">
<span class="campeira-topico-numero">05</span>
<span>
<strong>Poncho</strong>
<small>Proteção, dobra e emalamento</small>
</span>
</button>
<!-- EDITAR AQUI: botão "06 Encilha Peças, sequência e bem-estar animal" --><button aria-controls="painel-encilha" aria-selected="false" class="campeira-topico" data-topico="encilha" id="aba-encilha" role="tab" type="button">
<span class="campeira-topico-numero">06</span>
<span>
<strong>Encilha</strong>
<small>Peças, sequência e bem-estar animal</small>
</span>
</button>
</div>
<div class="campeira-paineis">
<article aria-hidden="false" aria-labelledby="aba-tranca" class="campeira-painel ativo" data-painel="tranca" id="painel-tranca" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Trança" --><h2>Trança</h2>
<div class="campeira-midia-tranca">
<figure class="campeira-ilustracao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/trança.jpeg" --><img alt="Trança campeira em couro" decoding="async" height="860" loading="lazy" src="img/prova-campeira/trança.jpeg" width="1520"/>
</figure>
<aside class="campeira-verso"><cite>Guasqueiro - Quarteto Coração de Potro</cite>É pedra é chaira é faca lambendo<br/>Tento desquinado parelho e sovado<br/>Botões cabeçada peiteira e rabicho<br/>Saliva e capricho no feitio trançado</aside>
</div>
<!-- EDITAR AQUI: texto da apresentação da prova --><p class="campeira-resumo">A prova da trança revive saberes antigos dos mestres da arte gaúcha e mantém viva a tradição dos guasqueiros.</p>
<div class="campeira-texto"><p>A prova da trança busca reviver saberes antigos dos mestres da arte gaúcha, que encontraram no couro, abundante na região do Pampa devido à grande quantidade de gado, uma importante matéria-prima para o seu ofício. Esse couro é transformado em tiras finas, chamadas tentos, que, quando trançadas, formam diferentes desenhos e padrões utilizados em diversas peças da encilha e da equitação gaúcha, além de adornos pessoais.</p><p>Além do couro bovino, também são utilizados couros de cavalo e de cabrito, conhecidos como loncas, bem como de outros animais, como veado, campeiro, capincho, porco, entre outros.</p><p>A prova consiste em 20 minutos, nos quais o candidato deve demonstrar sua habilidade no trabalho com o couro, unindo conhecimento histórico e teórico à precisão da execução prática. Mais do que realizar uma boa trança, a prova exige treino, estudo, dedicação e responsabilidade, pois cada tento trançado representa o compromisso de manter vivos os saberes e a história dos antigos guasqueiros.</p></div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist"><li>Preparo do couro, da rês até a peça final.</li><li>Utilidades das diferentes padronagens de trança.</li><li>Técnica de trançado e manutenção das faces do couro sempre na mesma direção.</li></ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-tranca">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-tranca">Continue praticando Trança</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <a class="campeira-recurso campeira-recurso-pdf" href="auth/download.php?arquivo=tranca.pdf" target="_blank" rel="noopener"><span class="campeira-recurso-tipo">PDF</span><strong>Material de apoio em PDF</strong><small>Baixar o material de Trança.</small></a>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
<article aria-hidden="true" aria-labelledby="aba-chimarrao" class="campeira-painel" data-painel="chimarrao" id="painel-chimarrao" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Chimarrão" --><h2>Chimarrão</h2>
<div class="campeira-midia-chimarrao">
<figure class="campeira-ilustracao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/chima.jpeg" --><img alt="Gaúcho tomando chimarrão" decoding="async" height="860" loading="lazy" src="img/prova-campeira/chima.jpeg" width="1520"/>
</figure>
<aside class="campeira-verso" aria-label="Versos sobre chimarrão"><cite>Chimarrão — Glaucus Saraiva</cite>Amargo doce que sorvo<br/>num beijo em lábios de prata!<br/>Tens o perfume da mata<br/>molhada pelo sereno.<br/>E a cuia, seio moreno<br/>Que passa de mão em mão<br/>traduz no meu chimarrão<br/>em sua simplicidade,<br/>a velha hospitalidade<br/>da gente do meu rincão.</aside>
</div>
<!-- EDITAR AQUI: texto "A cuia, a bomba, a erva-mate e a água formam um dos símbolos mais..." --><p class="campeira-resumo">A cuia, a bomba, a erva-mate e a água formam um dos símbolos mais reconhecidos da convivência gaúcha.</p>
<div class="campeira-texto"><!-- EDITAR AQUI: texto "O chimarrão é preparado com erva-mate em uma cuia e bebido por me..." --><p>O chimarrão é preparado com erva-mate em uma cuia e bebido por meio da bomba. Além do preparo, costuma-se estudar os avios do mate, a organização da erva e os cuidados para não entupir a bomba.</p><!-- EDITAR AQUI: texto "Na apresentação, é importante explicar cada elemento com clareza,..." --><p>Na apresentação, é importante explicar cada elemento com clareza, manter os utensílios limpos e lidar com a água quente de forma segura.</p></div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist"><li>Reconhecer cuia, bomba, erva-mate e recipiente de água.</li><li>Formar a parede de erva sem perder a estabilidade.</li><li>Priorizar higiene, cuidado e hospitalidade.</li></ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-chimarrao">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-chimarrao">Aprofunde o estudo do Chimarrão</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <div class="campeira-recurso campeira-recurso-pdf"><span class="campeira-recurso-tipo">PDF</span><strong>Adicionar material em PDF</strong><small>Inclua aqui o arquivo de apoio.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
<article aria-hidden="true" aria-labelledby="aba-charque" class="campeira-painel" data-painel="charque" id="painel-charque" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Charque" --><h2>Charque</h2>
<div class="campeira-midia-charque">
<figure class="campeira-ilustracao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/charque.jpeg" --><img alt="Charque em preparação tradicional" decoding="async" height="860" loading="lazy" src="img/prova-campeira/charque.jpeg" width="1520"/>
</figure>
<aside class="campeira-verso" aria-label="Versos sobre o charque"><cite>Escravo de Saladeiro — Bagre Fagundes</cite>Escravo de saladeiro me dói saber como foi,<br/>Trabalhando o dia inteiro sangrando o mesmo que o boi,<br/>A faca que mata a vaca o coice o laço que vem,<br/>O tronco a soga e a estaca tudo é teu negro também,<br/>A dor do charque é barata o sal te racha o garrão,<br/>O boi que morre te mata pouco a pouco meu irmão.</aside>
</div>
<!-- EDITAR AQUI: texto-resumo do Charque --><p class="campeira-resumo">Do aproveitamento da carne à conservação no varal, o charque reúne história, técnica de manta, salga paciente e cuidado com o tempo de secagem.</p>
<div class="campeira-texto"><p>O charque tem presença marcante na história do Rio Grande do Sul. Em 1780, vindo do Ceará, José Pinto Martins fundou em Pelotas a Charqueada São João, considerada a primeira charqueada com características industriais da região. As charqueadas movimentaram a economia gaúcha e ajudaram a financiar estâncias, mas essa história também precisa reconhecer o trabalho indígena e, principalmente, o trabalho escravizado de pessoas negras, submetidas à violência que sustentou parte dessa produção.</p><p>Além de seu peso econômico, o charque era uma resposta prática à falta de refrigeração. Após o abate de uma rês, a carne destinada ao fogo precisava ser consumida logo; o restante podia ser desidratado para não se perder. Assim, a manta salgada se tornava alimento para a estância e para tropeadas que duravam muitos meses, podendo conservar-se, quando bem preparada, por cerca de dois ou três meses. Os altos impostos cobrados sobre o charque gaúcho também aumentaram a insatisfação dos estancieiros no período que antecedeu a Revolução Farroupilha.</p><p>Para a prática, podem ser escolhidos cortes bovinos menos indicados para churrasco, como tatu, lagarto, coxão de fora ou paleta desossada. Antes de abrir a peça, cada participante deve retirar gorduras, pelancas e excessos que dificultem a cura. A carne é então transformada em manta com faca bem afiada; as formas mais usuais são a abertura por <em>tombo</em> ou por <em>desenrolar</em>. Em qualquer uma delas, é essencial acompanhar o sentido das fibras, evitando cortá-las e favorecendo o escoamento da água.</p><p>Com a manta pronta, inicia-se a desidratação. O sal grosso é aplicado por dentro e por fora, a carne é enrolada e repousa em uma gamela de um dia para o outro. No dia seguinte, limpa-se a gamela e se dá o tombo: a manta é desenrolada, virada para o outro lado, salgada outra vez, enrolada e deixada em descanso. Essa sequência é repetida até que a carne reduza ou interrompa a liberação de líquido, demonstrando que a cura avançou de forma adequada.</p><p>Depois da gamela, a manta segue para o varal, em local seco e ventilado. Ela deve ser pendurada com a ponta das fibras voltada para baixo, o que ajuda a água a escorrer. A secagem do charque acontece pela ação do sal, do vento e do tempo; por isso, diferencia-se da carne de sol, que é seca diretamente sob o sol. Conforme a espessura da manta, o processo pode levar de 20 a 25 dias mantas mais finas secam mais depressa.</p><p>O material também orienta atenção ao horário: colocar a carne no varal bem cedo permite aproveitar o vento e reduzir o brilho que atrai moscas. Ao entardecer, quando a umidade aumenta, a peça deve ser recolhida e guardada em galpão arejado, seco e protegido. Quando perde a umidade e deixa de pingar, o charque está pronto para ser armazenado e servir de base a pratos tradicionais, como arroz de carreteiro ou charque frito com pirão de farinha de mandioca.</p></div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist"><li>Relacionar José Pinto Martins, a Charqueada São João, Pelotas e o contexto social das charqueadas.</li><li>Explicar por que a salga e a secagem eram importantes antes da refrigeração e durante as tropeadas.</li><li>Reconhecer o contexto econômico ligado ao charque e sua relação com o período que antecedeu a Revolução Farroupilha.</li><li>Escolher cortes adequados, retirar gorduras e pelancas e preparar a peça antes da abertura.</li><li>Treinar a abertura da manta por tombo ou desenrolar, sempre acompanhando o sentido das fibras.</li><li>Descrever a cura na gamela: sal por dentro e por fora, descanso, limpeza, tombo e nova salga.</li><li>Diferenciar charque e carne de sol; revisar o varal, a posição das fibras e o tempo de secagem.</li><li>Revisar os cuidados com horário, umidade, armazenamento seco, higiene e usos tradicionais do charque.</li></ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-charque">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-charque">Reforce seus conhecimentos sobre Charque</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <a class="campeira-recurso campeira-recurso-pdf" href="auth/download.php?arquivo=charque.pdf" target="_blank" rel="noopener"><span class="campeira-recurso-tipo">PDF</span><strong>Material de apoio em PDF</strong><small>Baixar o material de Charque.</small></a>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
<article aria-hidden="true" aria-labelledby="aba-churrasco" class="campeira-painel" data-painel="churrasco" id="painel-churrasco" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Churrasco" --><h2>Churrasco</h2>
<figure class="campeira-ilustracao campeira-midia-padrao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/churras.jpeg" --><img alt="Churrasco campeiro assado no fogo" decoding="async" height="860" loading="lazy" src="img/prova-campeira/churras.jpeg" width="1520"/>
</figure>
<!-- EDITAR AQUI: texto "No churrasco campeiro, o controle do fogo e da distância do espet..." --><p class="campeira-resumo">No churrasco campeiro, o controle do fogo e da distância do espeto ajuda a assar a carne de maneira uniforme.</p>
<div class="campeira-texto"><!-- EDITAR AQUI: texto "O churrasco de fogo de chão utiliza o calor das brasas e não a ch..." --><p>O churrasco de fogo de chão utiliza o calor das brasas e não a chama direta como principal fonte de cocção. O participante precisa demonstrar domínio do fogo, posicionamento do espeto e atenção ao ponto da carne.</p><!-- EDITAR AQUI: texto "Organização, higiene e segurança ao redor do fogo são partes esse..." --><p>Organização, higiene e segurança ao redor do fogo são partes essenciais da apresentação.</p></div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist"><li>Preparar brasas estáveis antes de aproximar a carne.</li><li>Controlar distância e inclinação do espeto.</li><li>Evitar contaminação entre carne crua e alimentos prontos.</li></ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-churrasco">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-churrasco">Aprofunde a prática do Churrasco</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <div class="campeira-recurso campeira-recurso-pdf"><span class="campeira-recurso-tipo">PDF</span><strong>Adicionar material em PDF</strong><small>Inclua aqui o arquivo de apoio.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
<article aria-hidden="true" aria-labelledby="aba-poncho" class="campeira-painel" data-painel="poncho" id="painel-poncho" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Poncho" --><h2>Poncho</h2>
<div class="campeira-midia-poncho">
<figure class="campeira-ilustracao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/poncho.jpeg" --><img alt="Ponchos organizados em espaço campeiro" decoding="async" height="860" loading="lazy" src="img/prova-campeira/poncho.jpeg" width="1520"/>
</figure>
<aside class="campeira-verso" aria-label="Versos sobre o poncho"><cite>Sentinelas — Lisandro Amaral</cite>Meu galpão tem sentinelas<br/>que não dormem no seu posto<br/>e que escondem seu rosto<br/>de quem se achega pra dentro.<br/>Revelam por um momento<br/>quando a baeta goteia<br/>e a labareda clareia<br/>lágrimas de sentimento.</aside>
</div>
<!-- EDITAR AQUI: texto-resumo do Poncho --><p class="campeira-resumo">Proteção de chuva, frio e vento: o poncho e a capa unem história, identidade gaúcha e a técnica de emalar corretamente junto aos arreios.</p>
<div class="campeira-texto"><p>Depois de uma campereada, tempo fechado pede prevenção. Levar o poncho ou a capa bem emalados junto aos arreios evita que o cavaleiro, o cavalo e os aperos fiquem expostos à chuva. Como lembra o conselho campeiro, quem sai para uma andança longa deve ir preparado: a peça precisa estar compacta, protegida e fácil de retirar quando for necessária.</p><p>A origem do poncho remete aos povos originários, que usavam um pedaço de couro com abertura para passar a cabeça. Com o aproveitamento e a trama da lã de ovelha surgiu o bichará, cuja gordura natural ajudava a impedir a passagem da água. Essa peça acompanhou a vida campeira por muito tempo e também foi usada por soldados durante a Revolução Farroupilha.</p><p>O Poncho Pátria é uma referência desse período. Segundo o material de estudo, ele era feito de lã escura por fora e baeta vermelha por dentro; a lã, originalmente usada pelos soldados do Império, veio da Inglaterra, adaptou-se por aqui e passou a integrar essa peça tradicional. Atenção ao vocabulário: baeta é o tecido presente no poncho; carnal é a parte interna do pelego. São termos diferentes e não devem ser confundidos.</p><p>O poncho e a capa têm funções semelhantes, mas não são a mesma peça. A capa possui aberturas para os braços, corte vertical na frente e baeta concentrada na região superior dos ombros; o restante não leva baeta e sua lã costuma ser mais grossa. O poncho não possui essas aberturas e envolve o corpo como uma peça inteira. O texto também relaciona a Capa Ideal à história de um mascate que precisava manter as mãos livres para trabalhar e negociar mesmo em dias de chuva.</p><p>Para emalar, primeiro posicione a peça diante da mala que precisa ser compatível com seu tamanho com a parte interna voltada para cima. Junte as pontas no meio, como se a capa estivesse fechada no corpo. Nas pontas onde ficam os botões, faça uma pequena dobra para fora: essa fresta ajuda a puxar e vestir a peça depois.</p><p>Em seguida, leve as pontas novamente para dentro até que a capa fique na largura exata da mala. As laterais devem permanecer retas, quadradas e uniformes antes de enrolar. Comece pela parte de baixo e siga até a gola, pressionando cada volta para reduzir o volume e formar um rolo firme, sem torções. O material sugere usar o joelho para auxiliar nessa compactação.</p><p>Na finalização, a mala deve ser colocada de modo que a gola fique voltada para cima e para trás dos arreios. Esse posicionamento mantém a peça segura na viagem e permite retirá-la com mais facilidade quando a chuva chegar.</p></div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist"><li>Reconhecer a origem do poncho, o bichará e o uso da lã de ovelha como proteção contra a chuva.</li><li>Identificar o Poncho Pátria: parte externa escura, baeta vermelha no interior e relação com o período farroupilha.</li><li>Diferenciar baeta e carnal, usando corretamente os termos da indumentária e dos aperos.</li><li>Distinguir poncho e capa: aberturas para os braços, corte frontal, posição da baeta e espessura da lã.</li><li>Posicionar a peça com a parte interna para cima e conferir se a mala é adequada ao seu tamanho.</li><li>Juntar as pontas, manter a pequena fresta dos botões e deixar as laterais retas antes de enrolar.</li><li>Enrolar da base até a gola, compactando cada volta sem torções.</li><li>Fixar a mala com a gola voltada para cima e para trás dos arreios, facilitando a retirada da peça.</li></ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-poncho">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-poncho">Continue estudando o Poncho</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <a class="campeira-recurso campeira-recurso-pdf" href="auth/download.php?arquivo=poncho.pdf" target="_blank" rel="noopener"><span class="campeira-recurso-tipo">PDF</span><strong>Material de apoio em PDF</strong><small>Baixar o material de Poncho.</small></a>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
<article aria-hidden="true" aria-labelledby="aba-encilha" class="campeira-painel" data-painel="encilha" id="painel-encilha" role="tabpanel">
<div class="campeira-painel-conteudo">
<!-- EDITAR AQUI: título "Encilha" --><h2>Encilha</h2>
<div class="campeira-midia-encilha">
<figure class="campeira-ilustracao">
<!-- EDITAR AQUI: imagem | src="img/prova-campeira/encilha.jpeg" --><img alt="Cavalo com encilha tradicional" decoding="async" height="860" loading="lazy" src="img/prova-campeira/encilha.jpeg" width="1520"/>
</figure>
<aside class="campeira-verso" aria-label="Versos sobre a encilha"><cite>Encilha — Ita Cunha</cite>Agora sentemo o basto<br/>Esse é quatro cabeça<br/>Por mais feio que pareça<br/>Tem suas léguas de invernada<br/>E a barrigueira esta atada<br/>Com látego ao travessão<br/>Pode dar mais um tirão<br/>Pra firmar bem essas garras</aside>
</div>
<!-- EDITAR AQUI: texto-resumo da Encilha --><p class="campeira-resumo">A encilha reúne aperos e arreios em uma sequência que busca segurança, conforto e respeito ao cavalo, preservando técnicas transmitidas pela cultura campeira.</p>
<div class="campeira-texto">
<p>A encilha gaúcha é o conjunto de <strong>aperos</strong> e <strong>arreios</strong> preparados para a montaria. Os aperos abrangem as peças de corda como buçal, freio, rédeas, cabeçada, maneia e peiteira, enquanto os arreios são as peças colocadas sobre o cavalo para acomodar o campeiro. Em um Rio Grande do Sul marcado por distâncias e trabalho no campo, o cavalo foi meio de transporte para ir ao rancho, à missa, a passeios e às campereadas; por isso, encilhar bem sempre significou unir praticidade, tradição e cuidado.</p>
<p>O preparo começa pelo <strong>buçal</strong>, que deve permanecer por baixo do freio. Ele permite apeiar e amarrar o pingo com segurança, sem usar a rédea para isso. A <strong>peiteira</strong> ajuda a impedir que os arreios corram para trás, especialmente em terrenos acidentados, e o <strong>freio</strong> é colocado cedo para manter o controle e a atenção do cavalo durante a encilha.</p>
<p>Sobre o lombo, o <strong>baixeiro</strong>, xergão, enxergão ou xerga protege e acomoda os arreios; o material consultado valoriza o uso de lã natural, evitando materiais que provoquem atrito ou desconforto. A <strong>carona</strong> protege o basto do suor do cavalo, enquanto o <strong>pelego</strong> dá conforto ao cavaleiro com a parte do couro chamada carnal e a do pelo, flor. Em dias muito quentes, a <strong>badana</strong> também pode ajudar a amenizar o calor e evitar escoriações.</p>
<p>Entre os arreios, destacam-se o <strong>lombilho</strong>, estrutura antiga de madeira revestida em couro; o <strong>serigote</strong>, arreio de origem ligada à presença alemã no Estado e conhecido por seu conforto; e o <strong>basto</strong>, hoje muito comum na montaria. O basto pode ter duas ou quatro cabeças e reúne partes como basteiras, costura, espelho, estribeiras, alça, argolas, tentos, loros e estribos.</p>
<p>A <strong>cincha</strong>, formada por barrigueira, latego e sobre-látego, prende os arreios sem apertar demais. Seu posicionamento deve respeitar a anatomia do cavalo: nem sobre o peito, nem no meio da barriga, onde pode limitar os movimentos. A <strong>sobre-cincha</strong> organiza peças como travessão e cinchador, local onde o laço é apresilhado; já o <strong>rabicho</strong> evita que os arreios corram para a frente.</p>
<p>O <strong>laço</strong>, peça trançada de couro usada no campo, possui argola, corpo, ilhapa e presilha. Ao concluir, puxe o pingo alguns passos, confira se não houve aperto excessivo, observe o alinhamento do conjunto e só então coloque o pé no estribo. Montar bem é resultado de técnica, atenção aos detalhes e cuidado permanente com o animal.</p>
</div>
<!-- EDITAR AQUI: título "Pontos para revisar" --><h3>Pontos para revisar</h3>
<!-- EDITAR AQUI: itens desta lista ficam dentro das tags <li> --><ul class="campeira-checklist">
<li>Diferenciar <strong>aperos</strong> de <strong>arreios</strong> e explicar a finalidade de cada conjunto.</li>
<li>Reconhecer a ordem inicial da encilha: buçal, peiteira e freio; nunca amarrar o cavalo pela rédea.</li>
<li>Identificar baixeiro, xergão, carona, pelego e badana, relacionando cada peça ao conforto do cavalo e do cavaleiro.</li>
<li>Comparar lombilho, serigote e basto, distinguindo os bastos de duas e de quatro cabeças.</li>
<li>Nomear partes do basto: basteiras, costura, espelho, estribeiras, loros e estribos.</li>
<li>Explicar a função da cincha e ajustar suas peças de forma firme, gradual e sem prejudicar a respiração do cavalo.</li>
<li>Reconhecer os elementos da sobre-cincha: travessão, latego, sobre-látego, barrigueira e cinchador.</li>
<li>Identificar as partes do laço: argola, corpo, ilhapa e presilha e sua forma correta de apresilhamento.</li>
<li>Conferir rabicho, estribos, correias e o alinhamento geral antes de montar.</li>
</ul>
<!-- EDITAR AQUI: substitua os textos abaixo pelos seus materiais e links de estudo. -->
<section class="campeira-recursos" aria-labelledby="recursos-encilha">
  <div class="campeira-recursos-cabecalho"><span class="campeira-recursos-sobrelinha">MATERIAIS DE FIXAÇÃO</span><h3 id="recursos-encilha">Revise cada etapa da Encilha</h3><p>Separe aqui um PDF, um vídeo e uma referência para reforçar este conteúdo.</p></div>
  <div class="campeira-recursos-lista">
    <a class="campeira-recurso campeira-recurso-pdf" href="auth/download.php?arquivo=encilha.pdf" target="_blank" rel="noopener"><span class="campeira-recurso-tipo">PDF</span><strong>Material de apoio em PDF</strong><small>Baixar o material de Encilha.</small></a>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">VÍDEO</span><strong>Adicionar vídeo de fixação</strong><small>Cole aqui um link do YouTube.</small></div>
    <div class="campeira-recurso"><span class="campeira-recurso-tipo">LINK</span><strong>Adicionar leitura complementar</strong><small>Inclua um site confiável.</small></div>
  </div>
</section>
</div>
</article>
</div>
</div>
</div></section>
</main>
<!-- RODAPÉ DA PÁGINA --><footer class="site-footer rodape-social">
<div class="container">
<div class="rodape-social-grid">
<div class="rodape-identidade">
<!-- EDITAR AQUI: título "CTG Sentinela da Serra" --><h2>CTG Sentinela da Serra</h2>
<small class="rodape-cnpj">CNPJ: 00.000.000/0000-00</small>
</div>
<div class="rodape-redes">
<!-- EDITAR AQUI: título "Redes sociais" --><h3>Redes sociais</h3>
<div class="rodape-redes-links">
<!-- EDITAR AQUI: link/botão "Instagram @ctg_sentineladaserra" | href="https://www.instagram.com/ctg_sentineladaserra?igsh=MWh3dzB1bW16Mmw0aQ==" --><a aria-label="Instagram do CTG Sentinela da Serra" class="rodape-rede" href="https://www.instagram.com/ctg_sentineladaserra?igsh=MWh3dzB1bW16Mmw0aQ==" rel="noopener noreferrer" target="_blank">
<span aria-hidden="true" class="rodape-rede-icone">
<svg viewbox="0 0 24 24">
<rect height="18" rx="5" width="18" x="3" y="3"></rect>
<circle cx="12" cy="12" r="4.2"></circle>
<circle cx="17.5" cy="6.7" r="1"></circle>
</svg>
</span>
<span>
<strong>Instagram</strong>
<small>@ctg_sentineladaserra</small>
</span>
</a>
<!-- EDITAR AQUI: link/botão "Facebook CTG Sentinela da Serra" | href="https://www.facebook.com/share/1Co5ZCNmHT/?mibextid=wwXIfr" --><a aria-label="Facebook do CTG Sentinela da Serra" class="rodape-rede" href="https://www.facebook.com/share/1Co5ZCNmHT/?mibextid=wwXIfr" rel="noopener noreferrer" target="_blank">
<span aria-hidden="true" class="rodape-rede-icone">
<svg viewbox="0 0 24 24">
<path d="M14.2 8.2V6.7c0-.7.5-.9 1-.9h2.4V2.2L14.3 2c-3.3 0-5.3 2-5.3 5.5v.7H6v4h3V22h4.3v-9.8h3.4l.6-4h-4.1Z"></path>
</svg>
</span>
<span>
<strong>Facebook</strong>
<small>CTG Sentinela da Serra</small>
</span>
</a>
</div>
</div>
</div>
<div class="rodape-social-base">
<span class="rodape-criador"><span class="rodape-criador-label">Site criado por <strong>Mateus Selleri</strong></span><a aria-label="Instagram do criador" href="https://www.instagram.com/SEU_USUARIO" rel="noopener noreferrer" target="_blank"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5Zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5Zm5.5-3.25a1.25 1.25 0 1 1-1.25 1.25 1.25 0 0 1-1.25 1.25Z"/></svg></a><a aria-label="LinkedIn do criador" href="https://www.linkedin.com/in/SEU_USUARIO" rel="noopener noreferrer" target="_blank"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.2 3.5A2.2 2.2 0 1 1 5.2 7.9a2.2 2.2 0 0 1 0-4.4ZM3.3 9h3.8v11.7H3.3V9Zm6.1 0h3.6v1.6h.05c.5-.95 1.72-1.95 3.55-1.95 3.8 0 4.5 2.5 4.5 5.75v6.3h-3.8v-5.58c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.68H9.4V9Z"/></svg></a></span>
</div>
</div>
</footer>
<div aria-hidden="true" class="busca-overlay">
<div aria-labelledby="titulo-busca" aria-modal="true" class="busca-caixa" role="dialog">
<div class="busca-topo">
<!-- EDITAR AQUI: título "O que procuras?" --><h2 id="titulo-busca">O que procuras?</h2>
<!-- EDITAR AQUI: botão "×" --><button aria-label="Fechar pesquisa" class="icone-botao busca-fechar" type="button">×</button>
</div>
<!-- EDITAR AQUI: campo input name="" --><input aria-label="Termo de pesquisa" class="busca-campo" placeholder="Ex.: guia, prova, estudo..." type="search"/>
<div class="busca-resultados"></div>
</div>
</div>
<script data-origem="js/global.js">// =========================================================
// JAVASCRIPT BLOCO 1
// ALTERE AQUI somente se quiser mudar comportamento/interação.
// =========================================================

/* =========================================================
   JavaScript incorporado de: js/global.js
   ========================================================= */
const paginasBusca = [
  { titulo: "Página inicial", url: "index.php", palavras: "início tradição ctg galpão campeiro" },
  { titulo: "Modalidades", url: "escolha-modalidade.php", palavras: "estudos livros materiais provas questões concurso escrita campeira artística regulamento" },
  { titulo: "Prova Campeira", url: "prova-campeira.php", palavras: "campeira segurança equipamentos animais técnica" },
  { titulo: "Prova Artística", url: "prova-artistica.php", palavras: "artística dança declamação apresentação ensaio indumentária" },
  { titulo: "Prova Escrita", url: "prova-escrita.php", palavras: "escrita questões simulado revisão leitura estudo" },
  { titulo: "Calendário", url: "calendario.php", palavras: "eventos ensaios reuniões simulados datas" },
  { titulo: "História da Entidade", url: "historia.php", palavras: "fundação história ctg memória patronagem" }
];
const paginasBuscaEstudo = paginasBusca.filter((pagina) => !["index.php", "historia.php", "calendario.php"].includes(pagina.url));
paginasBuscaEstudo[0] = { ...paginasBuscaEstudo[0], titulo: "Guia do Concorrente" };
paginasBuscaEstudo.splice(1, 0,
  { titulo: "Guia do Pe\u00e3o", url: "guia-concorrente.php", palavras: "estudo peao prova campeira" },
  { titulo: "Guia da Prenda", url: "guia-prenda.php", palavras: "estudo prenda prova artistica escrita" }
);

document.addEventListener("DOMContentLoaded", () => {
  configurarMenu();
  marcarPaginaAtual();
  configurarBusca();
  preencherAno();
  atualizarResumoHome();
  configurarQuiz();
  atualizarProgressoLivros();
  configurarCalendario();
});

function configurarMenu() {
  const botao = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".menu-principal");
  if (!botao || !menu) return;

  botao.addEventListener("click", () => {
    const aberto = botao.getAttribute("aria-expanded") === "true";
    botao.setAttribute("aria-expanded", String(!aberto));
    menu.classList.toggle("aberto", !aberto);
    document.body.classList.toggle("menu-aberto", !aberto);
  });

  menu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      botao.setAttribute("aria-expanded", "false");
      menu.classList.remove("aberto");
      document.body.classList.remove("menu-aberto");
    });
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      botao.setAttribute("aria-expanded", "false");
      menu.classList.remove("aberto");
      document.body.classList.remove("menu-aberto");
    }
  });
}

function marcarPaginaAtual() {
  const atual = location.pathname.split("/").pop() || "index.php";
  document.querySelectorAll(".menu-lista a").forEach(link => {
    const href = link.getAttribute("href");
    if (href === atual) {
      link.classList.add("ativo");
      link.setAttribute("aria-current", "page");
    }
  });
}

function configurarBusca() {
  const overlay = document.querySelector(".busca-overlay");
  const abrir = document.querySelectorAll(".busca-abrir");
  const fechar = document.querySelector(".busca-fechar");
  const campo = document.querySelector(".busca-campo");
  const resultados = document.querySelector(".busca-resultados");
  if (!overlay || !campo || !resultados) return;

  const renderizar = (termo = "") => {
    const busca = termo.trim().toLowerCase();
    const filtradas = paginasBuscaEstudo.filter(item =>
      !busca ||
      item.titulo.toLowerCase().includes(busca) ||
      item.palavras.includes(busca)
    );

    resultados.innerHTML = filtradas.length
      ? filtradas.map(item => `<a href="${item.url}"><strong>${item.titulo}</strong><br><small>${item.palavras}</small></a>`).join("")
      : "<p>Nenhum conteúdo encontrado.</p>";
  };

  const abrirBusca = () => {
    overlay.classList.add("aberta");
    overlay.setAttribute("aria-hidden", "false");
    renderizar("");
    setTimeout(() => campo.focus(), 60);
  };

  const fecharBusca = () => {
    overlay.classList.remove("aberta");
    overlay.setAttribute("aria-hidden", "true");
  };

  abrir.forEach(botao => botao.addEventListener("click", abrirBusca));
  fechar?.addEventListener("click", fecharBusca);
  overlay.addEventListener("click", event => {
    if (event.target === overlay) fecharBusca();
  });
  campo.addEventListener("input", () => renderizar(campo.value));
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") fecharBusca();
  });
}

function preencherAno() {
  document.querySelectorAll("[data-ano]").forEach(el => {
    el.textContent = new Date().getFullYear();
  });
}


function atualizarProgressoLivros() {
  document.querySelectorAll("[data-progresso-livro]").forEach(barra => {
    const livro = barra.dataset.progressoLivro;
    const valor = Number(localStorage.getItem(`progresso-${livro}`) || 0);
    barra.style.setProperty("--progresso", `${valor}%`);
    const texto = document.querySelector(`[data-progresso-texto="${livro}"]`);
    if (texto) texto.textContent = `${valor}% concluído`;
  });
}

function atualizarResumoHome() {
  const agora = new Date();
  const dia = document.querySelector("[data-proximo-dia]");
  const mes = document.querySelector("[data-proximo-mes]");
  if (!dia || !mes) return;

  const proximo = new Date(agora.getFullYear(), agora.getMonth(), agora.getDate() + 5);
  dia.textContent = String(proximo.getDate()).padStart(2, "0");
  mes.textContent = proximo.toLocaleDateString("pt-BR", { month: "long" });
}

function configurarQuiz() {
  const form = document.querySelector("[data-quiz]");
  const retorno = document.querySelector(".quiz-retorno");
  if (!form || !retorno) return;

  form.addEventListener("submit", event => {
    event.preventDefault();
    const resposta = new FormData(form).get("resposta");
    if (!resposta) {
      retorno.textContent = "Selecione uma alternativa.";
      retorno.style.color = "#9e2f2f";
      return;
    }

    if (resposta === "correta") {
      retorno.textContent = "Correto. O respeito é a base da convivência e da tradição.";
      retorno.style.color = "#1f5b3a";
      localStorage.setItem("quizConcluido", "1");
    } else {
      retorno.textContent = "Ainda não. Revise o conteúdo e tente novamente.";
      retorno.style.color = "#9e2f2f";
    }
  });
}

const eventosBase = [
  { deslocamento: 3, titulo: "Ensaio da invernada", tipo: "verde", horario: "19h30" },
  { deslocamento: 8, titulo: "Reunião de patrões", tipo: "vermelho", horario: "20h" },
  { deslocamento: 14, titulo: "Simulado do concurso", tipo: "amarelo", horario: "14h" },
  { deslocamento: 20, titulo: "Jantar campeiro", tipo: "verde", horario: "20h30" },
  { deslocamento: 27, titulo: "Roda de chimarrão", tipo: "vermelho", horario: "16h" }
];

function criarEventosDoMes(ano, mes) {
  const ultimoDia = new Date(ano, mes + 1, 0).getDate();
  return eventosBase.map((evento, indice) => ({
    ...evento,
    dia: Math.min(ultimoDia, 2 + evento.deslocamento + (indice % 2))
  }));
}

function configurarCalendario() {
  const grade = document.querySelector(".calendario-grade");
  const titulo = document.querySelector("[data-calendario-titulo]");
  const agenda = document.querySelector(".agenda-lateral-lista");
  const anterior = document.querySelector("[data-mes-anterior]");
  const proximo = document.querySelector("[data-mes-proximo]");
  const hojeBotao = document.querySelector("[data-mes-hoje]");
  if (!grade || !titulo) return;

  const hoje = new Date();
  let referencia = new Date(hoje.getFullYear(), hoje.getMonth(), 1);

  const renderizar = () => {
    const ano = referencia.getFullYear();
    const mes = referencia.getMonth();
    const eventos = criarEventosDoMes(ano, mes);
    titulo.textContent = referencia.toLocaleDateString("pt-BR", { month: "long", year: "numeric" });

    const nomesSemana = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
    const inicio = new Date(ano, mes, 1).getDay();
    const ultimo = new Date(ano, mes + 1, 0).getDate();
    const anteriorUltimo = new Date(ano, mes, 0).getDate();

    grade.innerHTML = nomesSemana.map(nome => `<div class="calendario-semana">${nome}</div>`).join("");

    for (let i = inicio - 1; i >= 0; i--) {
      grade.insertAdjacentHTML("beforeend", `<div class="calendario-dia fora"><span class="dia-numero">${anteriorUltimo - i}</span></div>`);
    }

    for (let dia = 1; dia <= ultimo; dia++) {
      const eventosDia = eventos.filter(evento => evento.dia === dia);
      const ehHoje = hoje.getFullYear() === ano && hoje.getMonth() === mes && hoje.getDate() === dia;
      grade.insertAdjacentHTML("beforeend", `
        <div class="calendario-dia ${ehHoje ? "hoje" : ""}">
          <span class="dia-numero">${dia}</span>
          ${eventosDia.map(evento => `<span class="evento-ponto ${evento.tipo}">${evento.titulo}</span>`).join("")}
        </div>
      `);
    }

    const total = inicio + ultimo;
    const faltantes = (7 - (total % 7)) % 7;
    for (let dia = 1; dia <= faltantes; dia++) {
      grade.insertAdjacentHTML("beforeend", `<div class="calendario-dia fora"><span class="dia-numero">${dia}</span></div>`);
    }

    if (agenda) {
      agenda.innerHTML = eventos.map(evento => `
        <article class="agenda-mini ${evento.tipo}">
          <b>${String(evento.dia).padStart(2, "0")} — ${evento.titulo}</b>
          <small>${evento.horario} • Sede do CTG</small>
        </article>
      `).join("");
    }
  };

  anterior?.addEventListener("click", () => {
    referencia = new Date(referencia.getFullYear(), referencia.getMonth() - 1, 1);
    renderizar();
  });

  proximo?.addEventListener("click", () => {
    referencia = new Date(referencia.getFullYear(), referencia.getMonth() + 1, 1);
    renderizar();
  });

  hojeBotao?.addEventListener("click", () => {
    referencia = new Date(hoje.getFullYear(), hoje.getMonth(), 1);
    renderizar();
  });

  renderizar();
}


</script><script data-origem="js/prova-campeira.js">// =========================================================
// JAVASCRIPT BLOCO 2
// ALTERE AQUI somente se quiser mudar comportamento/interação.
// =========================================================

/* =========================================================
   JavaScript incorporado de: js/prova-campeira.js
   ========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const abas = [...document.querySelectorAll("[data-topico]")];
  const paineis = [...document.querySelectorAll("[data-painel]")];

  if (!abas.length || !paineis.length) return;

  const ativar = (id, atualizarHash = true) => {
    abas.forEach((aba) => {
      const ativo = aba.dataset.topico === id;
      aba.classList.toggle("ativo", ativo);
      aba.setAttribute("aria-selected", String(ativo));
      aba.tabIndex = ativo ? 0 : -1;
    });

    paineis.forEach((painel) => {
      const ativo = painel.dataset.painel === id;
      painel.classList.toggle("ativo", ativo);
      painel.setAttribute("aria-hidden", String(!ativo));
    });

    if (atualizarHash && history.replaceState) {
      history.replaceState(null, "", `#${id}`);
    }
  };

  abas.forEach((aba, indice) => {
    aba.addEventListener("click", () => ativar(aba.dataset.topico));

    aba.addEventListener("keydown", (event) => {
      if (!["ArrowDown", "ArrowUp", "ArrowRight", "ArrowLeft", "Home", "End"].includes(event.key)) {
        return;
      }

      event.preventDefault();
      let proximoIndice = indice;

      if (event.key === "Home") proximoIndice = 0;
      else if (event.key === "End") proximoIndice = abas.length - 1;
      else if (["ArrowDown", "ArrowRight"].includes(event.key)) {
        proximoIndice = (indice + 1) % abas.length;
      } else {
        proximoIndice = (indice - 1 + abas.length) % abas.length;
      }

      abas[proximoIndice].focus();
      ativar(abas[proximoIndice].dataset.topico);
    });
  });

  const inicial = location.hash.replace("#", "");
  const existe = abas.some((aba) => aba.dataset.topico === inicial);
  ativar(existe ? inicial : abas[0].dataset.topico, false);
});
</script><script>
/* =========================================================
   MENU MOBILE — FECHAR PELO X OU PELO FUNDO ESCURO
   ========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector(".menu-principal");
  const botaoMenu = document.querySelector(".menu-toggle");
  const botaoFechar = document.querySelector(".menu-mobile-fechar");

  const fecharMenuMobile = () => {
    if (!menu || !botaoMenu) return;
    botaoMenu.setAttribute("aria-expanded", "false");
    menu.classList.remove("aberto");
    document.body.classList.remove("menu-aberto");
  };

  if (botaoFechar) {
    botaoFechar.addEventListener("click", fecharMenuMobile);
  }

  if (menu) {
    menu.addEventListener("click", (event) => {
      if (event.target === menu) fecharMenuMobile();
    });
  }
});
</script><script>
/* =========================================================
   CORREÇÃO MENU — NÃO TRAVAR ROLAGEM NO NOTEBOOK
   ========================================================= */
window.addEventListener("resize", () => {
  if (window.innerWidth > 1080) {
    const menu = document.querySelector(".menu-principal");
    const botao = document.querySelector(".menu-toggle");

    document.body.classList.remove("menu-aberto");

    if (menu) {
      menu.classList.remove("aberto");
    }

    if (botao) {
      botao.setAttribute("aria-expanded", "false");
    }
  }
});
</script><button class="botao-voltar-pagina" type="button" onclick="history.length > 1 ? history.back() : location.href='index.php'">Voltar</button></body>
</html>
