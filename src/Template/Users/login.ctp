
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

  
    
    <?= $this->Html->css('bootstrap.min')?>
    <?= $this->Html->css('bootstrap-theme.min')?>
    <?= $this->Html->css('style') ?>
    
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('bootstrap.min')?>
    
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>
    
        <div id="spaceup"></div>
    
    <!--navegador-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!--desplegable para el responsive-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>   
                <!--desplegable para el responsive-->
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
                <ul class="nav navbar-nav navbar-right">
                    <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'home'])?></li> 
                    <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login'])?></li>
                    <li><?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'add'])?></li>
                </ul>
            </div>
        </div>
    </nav>   
    <!--navegador--> 
    
    <!--espacio superior transparente -->  
    <div id="spacelog" style="height: 100px"></div>
    <!--espacio superior transparente -->    
    
    <!--Formulario login-->  
    <div id="section" class="container-fluid">  
        
        <div id="contenido" class="container">
        
        <!--Tabla-->
        <div class="row">
            <div class="col-xs-6 col-md-offset-3">
	
                <div class="panel panel-default">
    
                    <div class="panel-heading"><h4>Login</h4></div>       
        
                        <div class="panel-body">     		   
                    <!--Inicio Form-->  
                    <?= $this->Form->create() ?>    			
                            <div class="form-group">
                                <h5><?=$this->Form->control('email', ['class' => 'form-control'])?></h5>     					
                            </div>
                            <div class="form-group">
      				<h5><?=$this->Form->control('password', ['class' => 'form-control'])?></h5>      					
                            </div>
    			</div>
                    
                    <div class="panel-footer">    				
                        <div>
                        <?= $this->Form->button('Sign In', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    
                    <?= $this->Form->end() ?>
                    <!--Fin Form-->      
                            
         		
        </div>	
   
  			
	</div>
<!--tabla-->
</div>
</div> 
        
        
        
        
    </div>
    <!--Formulario login-->  
    



</body>
</html>