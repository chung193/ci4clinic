<header id="header">

   <div id="main-header-wrapper" class="main-header-wrapper show">

      <div class="container">


         <div class="main-header">

            <div id="logo">
               <a href="<?= base_url()?>" title="<?= $base['info']->name?>">
                  <img class="normal_logo" src="<?= base_url() . '/public/uploads/logo/' . $base['info']->logo ?>" alt="<?= $base['info']->name ?>" title="<?= $base['info']->name ?>">
                  <img class="darkbg_logo" src="<?= base_url() . '/public/uploads/logo/' . $base['info']->logo ?>" alt="<?= $base['info']->name ?>" title="<?= $base['info']->name ?>">
               </a>
            </div>

            <?php echo view('frontend/component/menu', $test); ?>

         </div>
      </div>
   </div>

   <?php 
      $router = service('router');
      $controller  = class_basename($router->controllerName());
      $method = $router->methodName();
      if($controller == 'Home' && $method == 'index'){
         echo view('frontend/component/slider', $test);
      }
       
   ?>
</header>