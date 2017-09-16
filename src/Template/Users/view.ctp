    
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
    
    
    
    <!--informacion de muro y post-->
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 ">
                
                <h4><?= __('Wall') ?></h4>
                <?php if (!empty($user->walls)): ?>
            
                <table class="table">
                     <tr>                        
                        <th scope="col"><?= __('User Id') ?></th>                        
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                
                <?php foreach ($user->walls as $walls): ?>
                    <tr>                       
                        <td><?= h($walls->user_id) ?></td>                        
                        <td class="actions">
                            <?= $this->Html->link(('View Wall'), ['controller' => 'Walls', 'action' => 'view', $walls->id], ['class' => 'btn btn-sm btn-info']) ?>
                            
                        </td>
                    </tr>
                
                <?php endforeach; ?>
                
                </table>
            
                <?php endif; ?>
            
            </div>
     
   
    
   
        
            <div class="col-md-4">
        <h4><?= __('Post') ?></h4>
        <?php if (!empty($user->posts)): ?>
        <table class="table">
            <tr>                
                <th scope="col"><?= __('Ispublic') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->posts as $posts): ?>
            <tr>
                
                <td><?= h($posts->ispublic) ?></td>
                <td class="actions">
                    <?= $this->Html->link(('View Post'), ['controller' => 'Posts', 'action' => 'view', $posts->id], ['class' => 'btn btn-sm btn-info']) ?>                  
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
     </div> 
        
      <div>
        <div class="btn-toolbar">
            <?= $this->Html->link('back', ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
                   
        </div>  
    </div>  
        
        
 
    </div>
    <!--informacion de muro y post-->

</body>
</html>

