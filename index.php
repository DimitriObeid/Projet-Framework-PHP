<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>horizontal list html</title>
        <meta name="description" content="display data horizontally in html" />
        <meta name="author" content="Codeconvey" />
        
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        
        <!--Only for demo purpose - no need to add.-->
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        
    </head>

    <body>
        <?php
            $configFile = file_get_contents("Config/config.json");
            $config = json_decode($configFile);

            spl_autoload_register(function($class) use($config)
            {
                foreach($config->autoloadFolder as $folder)
                {
                    if(file_exists($folder . '/' . $class . '.php'))
                    {
                        require_once($folder . '/' . $class . '.php');
                        break;
                    }
                }
            });
            try
            {
                $httpRequest = new HttpRequest();
                $router = new Router();
                $httpRequest->setRoute($router->findRoute($httpRequest));
                $httpRequest->run($config);
            }
            catch(Exception $e)
            {
                $httpRequest = new HttpRequest("/Error","GET");
                $router = new Router();
                $httpRequest->setRoute($router->findRoute($httpRequest));
                $httpRequest->addParam($e);
                $httpRequest->run($config);
                
                ?>
                <div class="error">
                    <h1>Une erreur s'est produite</h1>
                    <div class="error-message">Message : <?= $exception->getMessage(); ?></div>
                    <div class="error-stack">Pile d'execution : <?= $exception->getTraceAsString(); ?></div>
                    <?php if(method_exists($exception,"getMoreDetail")){ ?>
                        <div class="error-detail"><?= $exception->getMoreDetail(); ?></div>
                    <?php } ?>
                </div>
            <?php
            }
        ?>

        <div class="ScriptTop">
            <div class="rt-container">
                <div class="col-rt-4" id="float-right">
                    
                </div>
                <div class="col-rt-2">
                    <ul>
                        <li><a href="https://codeconvey.com/horizontal-list-html">Back To Tutorial</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="ScriptHeader">
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="rt-heading">
                        <h1>horizontal list html</h1>
                        <p>A simple CSS style to list horizontally.</p>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                        <ul class="nav">
                            <li class="active"><a href="/home">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
