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
                  <a class="nav-link text-white" href="index.php">Voltar <span class="sr-only">(página atual)</span></a>
                </li>
               
                
              </ul>
              
            </div>
          </nav>
      <!-- End Navbar-->
      
    <div class="container-fluid" id="home" style="margin-top: 7%; margin-left: 8%;">
        <?php 
            while($list_photos_index = mysqli_fetch_array($get_photos)){
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>



