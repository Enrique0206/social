
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
        <div class="col-md-8 col-md-offset-2">
            
    <div class="page-header">
    <h3><?= __('Posts') ?></h3>
    </div>
    
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ispublic') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>                
                <td><?= $post->has('user') ? $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>               
                <td><?= h($post->date) ?></td>
                <td><?= h($post->ispublic) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $post->id], ['class' => 'btn btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-sm btn-warning']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    
    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    
        </div>
    </div>
</div>

    
</body>
</html>