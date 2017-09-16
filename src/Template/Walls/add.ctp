
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
    <?= $this->Html->css('style2') ?>
    
    <?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('bootstrap.min')?>
    
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>
    
    <div id="spaceup"></div> 
    
    
    <div>   
    <!--navegador-->
    <nav id="navegador" class="navbar navbar-default">
        <div class="container">
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
     
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>

            <!-- Collect the nav links, forms, and other content for toggling -->             
                        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
                <ul class="nav navbar-nav navbar-right">
                    <li><?= $this->Html->link('Users', ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link('List Posts', ['controller' => 'Posts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link('New Post', ['controller' => 'Posts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link('List Walls', ['controller' => 'Walls', 'action' => 'index'])?></li>
                    <li><?= $this->Html->link('New Wall', ['controller' => 'Walls', 'action' => 'add']) ?></li>                                        
                    <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout'])?></li>
                                      
                </ul>
            </div>
        </div>
    </nav>   
    <!--navegador-->
    </div>


<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <?= $this->Form->create($wall) ?>
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h2 class="panel-title">New Wall</h2>
                </div>
                
                <div class="panel-body">        
                    <div class="form-group">
                       <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-control', 'empty' => true])?>
                    </div>
        
                    <div class="form-group">
                        <?=$this->Form->control('address',['class' => 'form-control'])?>
                    </div>
        
                    <div class="form-group">                        
                        <?=$this->Form->control('phone', ['class' => 'form-control'])?>                       
                    </div>
        
                    <div class="form-group">
                        <?=$this->Form->control('birthdate', ['empty' => true])?>
                    </div>
        
                    <div class="form-group">
                        <?=$this->Form->control('aboutme', ['class' => 'form-control'])?>
                    </div>
                </div>
                
                 <div class="panel-footer">
                    <div class="btn-toolbar">
                    <?= $this->Form->button('Submit', ['class' => 'btn btn-primary']) ?>
            
                    </div>
                </div>
                
                
            </div>           
        <?= $this->Form->end() ?>
</div>
</div>
    </div>
    
    </body>
</html>


