
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        body{ 
        background:url("image/fundo_login2.jpg");
        
        background-position: center;
        }
        #botao{
          float:right;
        }
        #cadastrar{
          float: left;
        }
        #card{
            width: 400px;
            height: 180px;
        }
        #d{
          height: 250px;
        }
      </style>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
      

      <div id="d"></div>
      <div id="pri" class="row container">
          
          <form class="col s4 offset-s4"  method="post" action="index.php?&pgs=controle/val_login.php">
      
            <div class="row">
      
              <div id="card" class="card ">      
                <div class="card-content">
      
                  <div id="cabecalho">

                    <h5 class=""><i class="material-icons prefix ">account_circle</i>Login</h5>
                
                  </div>
      
                    <div class="input-field inline">
      
                        <input type="email" name="email" class="validate black-text">
      
                        <label for="email" data-error="incorreto" data-success="correto" class="black-text">Email</label>
      
                    </div>
      
                    <div class="input-field inline">
      
                        <input type="password" name="senha" class="
                        validate black-text" >
                        
                        <label for="email" data-error="incorreto" data-success="correto" class="black-text">Senha</label>
                   
                    </div>

                    

                    <div>
                    <input type="submit" value="Login" id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped">
                    <a id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped"  data-tooltip="enviar"><i class="material-icons">send</i></a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>

