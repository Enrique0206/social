
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
    <?= $this->Html->css('style')?>
    
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
                    
                    <li><?= $this->Html->link('Iniciar sesion', ['controller' => 'users', 'action' => 'login'])?></li>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'users', 'action' => 'add'])?></li>
                </ul>
            </div>
        </div>
    </nav>   
    <!--navegador-->   
    
    <!--espacio superior transparente -->  
    <div id="spaceladd" style="height: 100px"></div>
    <!--espacio superior transparente -->  
    
    <!--formulario registrar-->
    <div id="section" class="container-fluid"> 
        
        <div id="contenido" class="container">
            
            <!-- Tabla -->               
            <div class="row">                
                <div class="col-xs-6 col-xs-offset-3">                      
                      
                   <div class="panel panel-default">   
                    
                        <div class="panel-heading"><h4>Registrar Usuario</h4></div>       
        
                        <div class="panel-body">     		   
                        <!--Inicio Form-->  
                        <?=$this->Form->create($user)?>			
                            <div class="form-group">
                                <h5><?=$this->Form->control('username', ['class' => 'form-control', 'label' => 'Nombre'])?></h5>     					
                            </div>
                            <div class="form-group">
                                <h5><?=$this->Form->control('password',  ['class' => 'form-control', 'label' => 'Contraseña'])?></h5>      					
                            </div>  
                            <div class="form-group">
                                <h5><?=$this->Form->control('fullname', ['class' => 'form-control', 'label' => 'Nombre Completo'])?></h5>      					
                            </div>
                            <div class="form-group">
                                <h5><?=$this->Form->control('email', ['class' => 'form-control', 'label' => 'Correo'])?></h5>      					
                            </div>  
                        </div> 
                        
                        <div class="panel-footer">
                            <div class="btn-toolbar">
                              <?= $this->Form->button('Registrar', ['class' => 'btn btn-success']) ?>
                              <?= $this->Html->link('Cancelar', ['action' => 'add'], ['class' => 'btn btn-default'])?>
                            </div>
                        </div>       
                
                        <?= $this->Form->end() ?>
                        <!-- Fin Form-->                 
                       
                    </div> 
                    
                </div>
                            
            </div>  
            <!-- Table --> 
        </div>
    </div>
    <!--formulario registrar-->
    
</body>
</html>