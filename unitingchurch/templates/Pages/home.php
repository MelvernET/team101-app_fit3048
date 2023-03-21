<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>'
];

$this->Form->setTemplates($formTemplate);

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        GATech
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <style type='text/css'>body{margin:0;padding:0;overflow:hidden;font-family:'Segoe UI',Helvetica,Arial,Sans-Serif}</style>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<header>
    <div class="container text-center">
            <?=  $this->Html->image('uniting-logo.png', ['class' => 'uniting-logo']); ?>


    </div>

    <main class="main">
        <div class="container">
            <div class="content">
                <h5 class="headings"><b>Find a Uniting service near you</h5></b>
<br>
                <!-- Content Row -->

                <div class="row">
                    <div class="col-8">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Map</h5>
                                <div class="map">


                                    <div id='printoutPanel'></div>

                                    <div id='myMap' style='width: 50vw; height: 50vh;'></div>


                                <p class="card-text">Place map here.</p>

                            </div></div>
                        </div>



                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Search Filters</h5>
                                <p class="card-text">
                                    <input type="text" class="form-control" placeholder="Enter Keywords" aria-label="Text input with segmented dropdown button">
                                <div class="input-group mb-3">


                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Select Service" aria-label="Text input with segmented dropdown button">
                                    <div class="input-group-append" >

                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Select Service</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>

                                        </div>
                                    </div>
                                </div></div>



                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Select Program" aria-label="Text input with segmented dropdown button">
                                        <div class="input-group-append" >

                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Select Service</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>

                                            </div>
                                        </div>
                                    </div>

<br>
                                <input type="text" class="form-control" placeholder="Suburb or Postcode" aria-label="Text input with segmented dropdown button">
                             <br>
                                <a href="#" class="btn btn-primary">Search</a>
</div>



                        </div>


                    </div>
                </div>

<!-- end -->






    </div>
    </div>
    </main>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
</header>





<script type='text/javascript'>
    function loadMapScenario() {
        var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});

    }
</script>
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?setmkt=en-us&key=YourBingMapsKey&callback=loadMapScenario' async defer></script>





</body>
</html>
