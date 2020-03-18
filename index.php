<?php include('functions.class.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3096611efb.js"></script>
    <title>Syll Lek</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">
              <img src="imgs/logo-menu.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#home">Início <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#bio">Biografia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#photo">Fotos</a>
                </li>
                
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fotos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Item 1</a>
                    <a class="dropdown-item" href="#">Item 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">item 3</a>
                  </div>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="#music">Música</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#video">Vídeo</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contato</a>
                    </li>

                
              </ul>
              
            </div>
          </nav>
      <!-- End Navbar-->
      <!-- Slider -->
      <div class="container-fluid" id="home">
            <div class="row">
                <div class="container-slider col-12">
                    <div class="row container-icons">
                      <a href="https://www.facebook.com/OficialSyllLek/" target="_blank"><div class="social-icons-slider fb-icon mr-2"></div></a>
                      <a href="https://www.instagram.com/syll_lek/" target="_blank"><div class="social-icons-slider insta-icon mr-2"></div></a>
                      <a href="https://www.youtube.com/channel/UC-QXiUGmUmoj_2pNiUBPw5g?app=desktop" target="_blank"><div class="social-icons-slider ytb-icon"></div></a>
                      <a href="https://twitter.com/OficialSyllLek" target="_blank"><div class="social-icons-slider twt-icon"></div></a>
                    </div>
                </div>
            </div>
        </div>
      <!-- End Slider -->
      <!-- Biography -->
      <div class="container-fluid" id="bio">
            <div class="row">
                    <div class="container-biography col-12 text-center">
                        <h1 class="display-4 mt-3 text-right mb-3">Biografia</h1>
                        <div class="col-5 float-right mr-3 text-justify d-none d-md-block">
                          <p>Syll Lek ou Sylvia Letícia Camargo nasceu em Brasília, Distrito Federal, no dia 07 de abril de 1996. Mudou-se para o Rio de Janeiro ainda na infância juntamente com sua mãe, onde foram morar no bairro de Campo Grande. <br>Hoje com 23 anos, essa brasiliense filha única de mãe solteira, corre atrás de seu maior sonho: ser cantora! Desde pequena sempre gostou e foi ligada a área artística, querendo cantar, dançar e tocar instrumentos. Quando criança quis aprender a tocar teclado e estudava ballet, enquanto cantava em casa. Ao se mudar para o Rio de Janeiro com sua mãe, encontrou além de continuar os estudos de ballet, uma nova paixão, o canto por meio de aulas de coral infantil. Praticava ambas aulas em sua escola, até o ensino fundamental, onde se separou de seu lado artístico por motivos de saúde.<br> Primeiro deixou o ballet após um trauma que quase à levou para cirurgia devido grave entorse na região de seu tornozelo, deixando-a fora das práticas por vários meses e várias apresentações, que após muitas sessões de fisioterapia decidiu não retornar ao ballet, dando prosseguimento apenas ao canto coral. Por volta de seus 14 anos ficou um ano sem realizar movimentos e sentir seus membros inferiores, um momento de grande impacto em sua vida, consequentemente, Syll Lek, deixou de lado várias atividades, dentre elas o canto coral, adiando assim seus sonhos de estar na vida artística para focar em sua recuperação e sonhos mais concretos e mais plausíveis dentro da realidade de sua família, que era os estudos, graduação e futuramente uma carreira longe da vida pública. <br> Hoje, completamente recuperada, Syll Lek volta ao começo de tudo, retorna aos seus sonhos e objetivos artísticos.</p>
                          <div class="text-center"><!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#ModalLongoExemplo">
                              Leia a Biografia Completa
                            </button>
                          </div>
                        </div>
                        <div class="col-10 text-justify d-block d-md-none">
                          <p><strong>Syll Lek ou Sylvia Letícia Camargo nasceu em Brasília, Distrito Federal, no dia 07 de abril de 1996. Mudou-se para o Rio de Janeiro ainda na infância juntamente com sua mãe, onde foram morar no bairro de Campo Grande. <br>Hoje com 23 anos, essa brasiliense filha única de mãe solteira, corre atrás de seu maior sonho: ser cantora! Desde pequena sempre gostou e foi ligada a área artística, querendo cantar, dançar e tocar instrumentos. </strong></p>
                          <div class="text-center"><!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">
                              Leia a Biografia Completa
                            </button><br><br><br>
                          </div>
                        </div>
                      
                    </div>
                </div>

      </div>
      <!-- End Biography -->
      <!-- Photos -->
      <div class="container-fluid" id="photo">
          <div class="row">
              <div class="container-photos col-12">
                  <h1 class="display-4 text-center mt-4 mb-4">Fotos</h1>

                  <div class="row">
                    <div class="text-center">

                    <?php
                        while($list_photos_index = mysqli_fetch_array($get_photo)){
                            echo 
                            "
                            <a href='#' data-toggle='modal' data-target='#ExemploModalCentralizado$list_photos_index[id_photos]'>
                            <img src='$list_photos_index[name_photos]' class='img-thumbnail galery-img mb-4'>
                        </a>
                           
                            
                            
                            
                            <div class='modal fade' id='ExemploModalCentralizado$list_photos_index[id_photos]' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
                              <div class='modal-dialog modal-dialog-centered' role='document'>
                                <div class='modal-content'>
                                  <div class='modal-header'>
                                    
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>
                                  <div class='modal-body'>
                                  
                                    <img src='$list_photos_index[name_photos]' class='img-fluid'>
                                  </div>
                                  <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            ";
                        }
                            
                    ?>
                        
                    </div>
                    
                  </div>
                    <div class="text-center">
                      <a href="photos.php" class="btn btn-primary mx-auto mb-4">Ver mais fotos</a>
                    </div>
              </div>
          </div>
      </div>
      <!-- End Photos -->

      <!-- Music -->
      <div class="container-fluid" id="music">
        <div class="row">
          <div class="container-music col-12">
            <h1 class="text-center my-4">Música</h1>
            <div class="row d-none d-md-block">
              <div class="col-8 mx-auto mb-5">
                <div class="row">
                  <div class="col-6 text-center">
                      <iframe src="https://open.spotify.com/embed/track/76mTHnzoheyVr6Jf3VRz3o" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                  </div>
                  <div class="col-6 text-center my-auto">
                    <h3 class="">Escute também no</h3>
                    <div class="">
                      <a href="https://open.spotify.com/track/76mTHnzoheyVr6Jf3VRz3o" target="_blank">
                        <img src="imgs/Spotify-logo.png" class="mr-2 mb-4">
                      </a> <br>
                      <a href="https://www.deezer.com/br/album/113034982" target="_blank">
                        <img src="imgs/Deezer-Logo.png" class="mr-2 mb-4">
                      </a> <br> 
                     <!-- <img src="imgs/apple-music-logo.png" class="mr-2 mb-4"> <br>
                      <img src="imgs/Youtube-Music.png" class=""> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center d-block d-md-none">
              <iframe src="https://open.spotify.com/embed/track/76mTHnzoheyVr6Jf3VRz3o" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-12 text-center my-auto d-block d-md-none">
                    <h3 class="">Escute também no</h3>
                    <div class="row offset-2">
                      <a href="https://open.spotify.com/track/76mTHnzoheyVr6Jf3VRz3o" target="_blank">
                        <img src="imgs/Spotify-logo.png" class="mr-2 mb-4">
                      </a> <br>
                      <a href="https://www.deezer.com/br/album/113034982" target="_blank">
                        <img src="imgs/Deezer-Logo.png" class="mr-2 mb-4">
                      </a> <br> 
                    </div>
                    <div class="row offset-2">
                     <!-- <img src="imgs/apple-music-logo.png" class="mr-2 mb-4"> <br>
                      <img src="imgs/Youtube-Music.png" class="mr-2 mb-4">  -->
                    </div>
                  </div>
          </div>
        </div>
      </div>
      <!-- End Music -->

      <!-- Vídeos -->
      <div class="container-fluid" id="video">
            <div class="row">
                <div class="container-videos col-12">
                    <h1 class="text-center my-4">Vídeo</h1>

                    <div class="embed-responsive embed-responsive-16by9 col-8 mx-auto">
                    
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/litCzco632A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
      <!-- End Vídeos -->
      <!-- Contact -->
      <div class="container-fluid" id="contact" style="overflow-y: hidden !important;">
            <div class="row">
                <div class="container-contact col-12">

                    <div class="row">
                      <div class="mx-auto col-12 col-md-4">
                    <h2 class="text-center my-4 ">Contato para Show</h2>

                        <form action="enviar_contato.php">
                          <div class="form-group">
                            <label class="">Nome Completo</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="">Email</label>
                            <input type="email" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="">Telefone</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="">Mensagem</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class=" btn btn-primary float-right">
                          Enviar
                        </button>
                        </form>
                      </div>
                    <div class="mx-auto col-12 col-md-4">
                        <h2 class="text-center my-4 ">Central de Fãs</h2>
                        <form action="enviar_central.php">
                          <div class="form-group">
                            <label class="">Nome Completo</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                          <div class="form-group">
                            <label class="">E-mail</label>
                            <input type="email" class="form-control" name="school">
                          </div> 
                          <div class="form-group">
                            <label class="">Whatsapp</label>
                            <input type="tel" class="form-control" name="email">
                          </div>
                          <button type="submit" class="btn btn-primary float-right">Participar</button>
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="mx-auto col-12 col-md-8 mt-5">
                        <div class="row">
                          <div class="col-12 col-md-6 mb-4 text-center">
                            <h4 class="">Graziele Chaves</h4>
                            <h5 class="text-primary font-weigh-normal">Assessora</h5>
                            <h5 class="font-weight-normal ">
                                <i class="fas fa-mobile-alt "></i>
                                (11) 93130 - 6645
                            </h5>
                            <h5 class="font-weight-normal ">
                                <i class="far fa-envelope "></i>
                                assessoria@ktmdivulgacao.com.br
                            </h5>
                          </div>
                          <div class="col-12 col-md-6 mb-4 text-center">
                              <h4 class="">Marcelo Corrêa</h4>
                              <h5 class="text-primary font-weigh-normal">Comercial</h5>
                              <h5 class="font-weight-normal ">
                                  <i class="fas fa-mobile-alt "></i>
                                  (11) 97237 - 0380
                              </h5>
                              <h5 class="font-weight-normal ">
                                  <i class="far fa-envelope "></i>
                                  comercial@ktmdivulgacao.com.br
                              </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- End Contact -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- Modal -->
<div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalLongoExemplo">Biografia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Syll Lek ou Sylvia Letícia Camargo nasceu em Brasília, Distrito Federal, no dia 07 de abril de 1996. Mudou-se para o Rio de Janeiro ainda na infância juntamente com sua mãe, onde foram morar no bairro de Campo Grande. Hoje com 23 anos, essa brasiliense filha única de mãe solteira, corre atrás de seu maior sonho: ser cantora! <br><br> Desde pequena sempre gostou e foi ligada a área artística, querendo cantar, dançar e tocar instrumentos. Quando criança quis aprender a tocar teclado e estudava ballet, enquanto cantava em casa. <br><br> Ao se mudar para o Rio de Janeiro com sua mãe, encontrou além de continuar os estudos de ballet, uma nova paixão, o canto por meio de aulas de coral infantil. Praticava ambas aulas em sua escola, até o ensino fundamental, onde se separou de seu lado artístico por motivos de saúde. <br><br> Primeiro deixou o ballet após um trauma que quase à levou para cirurgia devido grave entorse na região de seu tornozelo, deixando-a fora das práticas por vários meses e várias apresentações, que após muitas sessões de fisioterapia decidiu não retornar ao ballet, dando prosseguimento apenas ao canto coral. <br><br> Por volta de seus 14 anos ficou um ano sem realizar movimentos e sentir seus membros inferiores, um momento de grande impacto em sua vida, consequentemente, Syll Lek, deixou de lado várias atividades, dentre elas o canto coral, adiando assim seus sonhos de estar na vida artística para focar em sua recuperação e sonhos mais concretos e mais plausíveis dentro da realidade de sua família, que era os estudos, graduação e futuramente uma carreira longe da vida pública. Hoje, completamente recuperada, Syll Lek volta ao começo de tudo, retorna aos seus sonhos e objetivos artísticos. <br><br> Prestes a se formar na graduação de Terapia Ocupacional em Instituto Federal ela retorna com sua paixão e sonho, com uma forte vontade de ser uma influência para jovens que como ela lutam pelos seus sonhos mesmo quando tudo parece improvável. Tendo como suas principais influências internacional as cantoras Beyoncé, Rihanna, Christina Aguilera, The Pussycat Dolls, onde desde os seus 10 anos esteve cantando e dançando sucessos como “Irreplaceable” e “Candyman”. <br><br> Hoje no cenário nacional tem a influência de Ludmilla como fonte inspiradora. Com suas influências, Syll Lek, quis vir com sua personalidade própria e de maneira única, juntando suas influências no mundo do funk 150 bpm.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
        </div>
    </div>
  </div>
</div>

<!-- Modal -->

  </body>
</html>


