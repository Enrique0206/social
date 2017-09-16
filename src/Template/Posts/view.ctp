
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
            <div class="col-md-8 col-md-offset-2">
                
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h3><?= __('Post') ?></h3>
                    </div>
                
                    <div class="panel-body">
                        <p class="text-justify"><?= h($post->content) ?></p>
                    </div>
                                  
                </div>
            </div>      
        </div>
    
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <table class="table">
        
                    <tr>
                        <th><?= __('Usuario') ?></th>
                        <td><?= $post->has('user') ? $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                    </tr>
        
                    <tr>
                        <th><?= __('Es publico') ?></th>
                        <td><?= h($post->ispublic) ?></td>
                    </tr>
        
                    <tr>
                        <th><?= __('Creado') ?></th>
                        <td><?= h($post->date) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="btn-toolbar">
            <?= $this->Html->link('back', ['controller' => 'Users', 'action' => 'view', $post->user->id], ['class' => 'btn btn-primary']) ?>                   
        </div>  
        </div>
        </div>
    
    </div>
    
</body>
</html>
    