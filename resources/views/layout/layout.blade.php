<!DOCTYPE html>
@section('lang') <html lang="en"> @show
    <head>  
          <?php echo view('layout.html.head') ?>
    </head>

    <body id="page-top" class="index"> 
      
       <div class="wrapper">
           <?php echo view('layout.html.navigation') ?>
        <header>
            <?php echo view('layout.html.header') ?>
        </header>
        
           @yield('content');
            
        <div class="wrapper-empty"></div>
        
        </div>    
        <footer> 
              <?php echo view('layout.html.footer') ?>
        </footer>        
    </body> 


</html>