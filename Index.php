<!DOCTYPE html>

<?php
 require_once "sessao.php"
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GNPetShop</title>

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="icon" href="/img/LOGOPET.png" />
  </head>
  <body>
    <header>
      <div class="header">
            <div class="col col-1">
          <a href="Index.html"><img src="img/LOGOPET (1).png" alt="Logo"></a>
            </div>
            <div class="col col-2">
				
                <ul>
                    <li>Contato</li>
                    <li>(31) 98763-7839</li>
                </ul>
            </div>
            <div class="col col-3">
              
                <form action="get" id="pesquisar">
                    <input type="text" name="pesquisar" placeholder="O que você esta procurando..">
                    <button class="btn-pesquisar" value="Enviar">&#128269</button>
                </form>
            </div>
			<div class="col col-5">
				<?php
				if(isset($_SESSION['cpf'])){
					echo $_SESSION['nome'].'<a href="logoff.php"><input type="submit" value="sair"> </a>';
				}else{
					 echo '<a href="entrar.php">Entrar<b> / </b>Cadastrar</a>';
					
					
				}
				?>
				
				
			</div>
            <div class="col col-4">
                <a href="#"><img src="img/bolsa-de-compras.png" alt="carrinho"></a>
            </div>
			
		 
          </div>
    
          <div class="navbar">
            <ul>
              <li><a href="index.html">Home</a></li>
			<li><a href="pag/Contato.html" disable>Quem somos</a></li>
              <li><a href="pag/curso.html">Seviços</a></li>
              <li><a href="pag/Matricula.html">Agendamento</a></li>
			<li><a href="#">Loja</a></li>
			<li><a href="#">Contato</a></li>
				
          
          
            </ul>
          </div>
        </header>

    <main class="mainin">
        <div class="banner">
        <img src="img/banner.jpg" alt="Banner">
        </div>
		<div class="marque">
			<marquee>Seu melhor amigo merece o melhor cuidado!</marquee>
		</div>
        <section class="section-par">
            <div class="container">
				<div><div><img src="img/1.jpg" alt="demo"></div><div><b><h2>PELOS SAUDÁVEIS</h2></b><p class="conttres">É importante que desde pequeno você acostume o seu pet à escovação, pelo menos uma vez a cada dois dias, isso vai retirar as células mortas e os pelos soltos.</p></div></div>
				<div><div><img src="img/2.jpg" alt="demo"></div><div><b><h2>IMPORTANCIA DO BANHO</h2></b><p class="conttres">Banhos regulares mantém os pelos e pele de seu cachorro limpa, renovada e saudável. O processo de ensaboar e escovar remove resíduos de pelos e peles que já estão mortas.</p></div></div>
				<div><div><img src="img/3.jpg" alt="demo"></div><div><b><h2>Vacinação em dia</h2></b><p class="conttres">Proteger o seu pet contra doenças infecciosas. Vaciná-lo irá permitir que ele permaneça saudável! Proteger as pessoas contra os agentes circulantes dessas doenças.</p></div></div>
            </div>
			<div class="container-button">
				<a href="pag/Matricula.html"><button class="bnt-matricula">Agendar</button></a>
			</div>
        </section>
       <!--" <section class="section">
			<div class="titulo">
				<h2>Conheça - Unimel</h2>
			</div>
            <div class="containerhome">
				<div class="conteudotxt">
					<p>Lorem Ipsum é simplesmente texto fictício da indústria de impressão e composição. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma cozinha do tipo e a embaralhou para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também ao salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de publicação de desktop como Aldus PageMaker, incluindo versões do Lorem Ipsum.
					</p>		
				</div>
				<div class="conteudoimg">
					<img src="img/Quem Somo.jpg" alt="quem somos">
				</div>

            </div>
        </section>-->
		<section id="produtos">
			<h2>Produtos recomendados</h2>
			<div class="loja_row1">
				<div class="loja_col loja_col1">
					<div class="img_produtos">
						<img src="img/1649968261177.webp" alt="produtos">
					</div>
					<b>Caixa de transporte</b>
					<p><b>R$57,99</b></p>
				</div>
				<div class="loja_col loja_col2">
					<div class="img_produtos">
						<img src="img/1658159516177.webp" alt="produtos">
					</div>
					<b>produto2</b>
				</div>
				<div class="loja_col loja_col3">
					<div class="img_produtos">
						<img src="img/1658429301983.webp" alt="produtos">
					</div>
					<b>produto3</b>
				</div>
				<div class="loja_col loja_col4">
					<div class="img_produtos">
						<img src="img/1683908673697.webp" alt="produtos">
					</div>
					<b>produto4</b>
				</div>
			</div>
			<h2>Produtos em Ofetas</h2>
			<div class="loja_row1">
				<div class="loja_col loja_col1">
					<div class="img_produtos">
						<img src="img/1649968261177.webp" alt="produtos">
					</div>
					<b>Caixa de transporte</b>
					<p><b>R$57,99</b></p>
				</div>
				<div class="loja_col loja_col2">
					<div class="img_produtos">
						<img src="img/1658159516177.webp" alt="produtos">
					</div>
					<b>produto2</b>
				</div>
				<div class="loja_col loja_col3">
					<div class="img_produtos">
						<img src="img/1658429301983.webp" alt="produtos">
					</div>
					<b>produto3</b>
				</div>
				<div class="loja_col loja_col4">
					<div class="img_produtos">
						<img src="img/1683908673697.webp" alt="produtos">
					</div>
					<b>produto4</b>
				</div>
			</div>
			

		</section>
		<div class="poppy">
			<a href="https://api.whatsapp.com/send?phone=5531998651764&text=Ol%C3%A1%2C%20vim%20atrav%C3%A9s%20do%20seu%20site%2C%20preciso%20de%20ajuda"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_6hrplbhl.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player></a>
		</div>
		
    </main>

    <footer>
      <div class="newsletter">
          <form action="">
              <label> Cadaste-se para ficar por dentro das novidades:</label><input type="email" id="email" name="email" placeholder="jhon@email.com" required><input type="submit" value="enviar">
          </form>
      </div>
      <h3 class="coppy">Unimel - todos os direitos reservado @copyright - 2022</h3>
    </footer>
   
   
  </body>
</html>
