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
 * @var \Cake\Collection\CollectionInterface|string[] $sites
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

    <div class="container text-center">

    </div>

    <main class="main">
<!--        <div class="col-xl-6 col-lg-7">-->
        <div class="container">
            <div class="content">
                <br>
                <h3 class="headings"><b>Find a Uniting service near you</h3></b>
<br>
                <!-- Content Row -->

                <div class="row">
                    <div class="col-8">

                        <div class="card" style="height: 500px;">
                            <div class="card-body" >
                                <h5 class="card-title"><i class="fas fa-fw  fa-map"></i> Map</h5>
                                <br>

                                <div class="map" style='width: 100%; height: 80%;' >

                                    <div id='printoutPanel'></div>

                                    <div id='myMap' style='width: 100%; height: 100%;'></div>

                            </div>
                                </div>

                        </div>



                    </div>
                    <div class="col-4">
                        <div class="card" style="height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-fw  fa-search"></i> Search Filters</h5>
                                <p class="card-text"><br>
                                    <input type="text" class="form-control" placeholder="Enter Keywords" aria-label="Text input with segmented dropdown button" id = "location">
<!--                                <div class="input-group mb-3">-->
<!---->
<!---->
<!--                                <div class="input-group">-->
<!--                                    <input type="text" class="form-control" placeholder="Select Service" aria-label="Text input with segmented dropdown button">-->
<!--                                    <div class="input-group-append" >-->
<!---->
<!--                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                            <span class="sr-only">Toggle Dropdown</span>-->
<!--                                        </button>-->
<!--                                        <div class="dropdown-menu">-->
<!--                                            <a class="dropdown-item" href="#">Select Service</a>-->
<!--                                            <a class="dropdown-item" href="#">Another action</a>-->
<!--                                            <a class="dropdown-item" href="#">Something else here</a>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div></div>-->
<!---->
<!---->
<!---->
<!--                                    <div class="input-group">-->
<!--                                        <input type="text" class="form-control" placeholder="Select Program" aria-label="Text input with segmented dropdown button" id="suburb">-->
<!--                                        <div class="input-group-append" >-->
<!---->
<!--                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                                <span class="sr-only">Toggle Dropdown</span>-->
<!--                                            </button>-->
<!--                                            <div class="dropdown-menu">-->
<!--                                                <a class="dropdown-item" href="#">Select Service</a>-->
<!--                                                <a class="dropdown-item" href="#">Another action</a>-->
<!--                                                <a class="dropdown-item" href="#">Something else here</a>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--<br>-->
<!--                                <input type="text" class="form-control" placeholder="Suburb or Postcode" aria-label="Text input with segmented dropdown button">-->
                             <br>
                                <input type= "button" value = "Search" onclick = "findLocation()" class="btn btn-primary">
</div>


</div>

                    </div>
<br>

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






<script type='text/javascript'>
    var number = "<?php echo count($sites);?>"
    var datas = new Array(0);
    var infoBox = new Array(0);
    <?php

    foreach ($sites as $site):
    $address = $site->site_address;
    $site_address = $site->site_contact;
    ?>
    datas.push(["<?php echo $address;?>","<?php echo $site_address;?>"])
    infoBox.push("<?php echo $site_address;?>")

    <?php endforeach; ?>
    function findLocation(){
        loadMapScenario();
    }
    function loadMapScenario() {
        var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
        var layer = new Microsoft.Maps.Layer();
        Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
            var searchManager = new Microsoft.Maps.Search.SearchManager(map);




            // var a = 0;
            // for (i = 0; i < datas.length; i++) {
            //
            //     var siteAdr = {
            //         bounds: map.getBounds(),
            //         where: datas[i],
            //
            //         callback: function (answer, userData) {
            //             var pushpin = new Microsoft.Maps.Pushpin(answer.results[0].location,{ color: 'red' });
            //             // pushpin.metadata = { title: infoBox[a], description: 'Address: '+ datas[a] }
            //             layer.add(pushpin);
            //             // var infobox = new Microsoft.Maps.Infobox(answer.results[0].location,  { visible: false, autoAlignment: true });
            //             var infobox = new Microsoft.Maps.Infobox(answer.results[0].location, { title: infoBox[a], description: 'address: '+ datas[a] });
            //             infobox.setMap(map);
            //             // Microsoft.Maps.Events.addHandler(pushpin, 'click', function (args) {
            //             //     infobox.setOptions({
            //             //         location: args.target.getLocation(),
            //             //         title: args.target.metadata.title,
            //             //         description: args.target.metadata.description,
            //             //         visible: true
            //             //     });
            //             // });
            //             a++;
            //         }
            //     };
            //     searchManager.geocode(siteAdr);
            // }



            datas.forEach( function (item) { var siteAdr = {
                bounds: map.getBounds(),
                where: item[0],

                callback: function (answer, userData) {
                    var pushpin = new Microsoft.Maps.Pushpin(answer.results[0].location,{ color: 'red' });
                    pushpin.metadata = { title: 'Site: '+item[1], description: 'Address: '+ item[0] }
                    layer.add(pushpin);
                    var infobox = new Microsoft.Maps.Infobox(answer.results[0].location,  { visible: false, autoAlignment: true });
                    // var infobox = new Microsoft.Maps.Infobox(answer.results[0].location, { title: 'site: ', description: 'address: '+ item });
                    infobox.setMap(map);
                    Microsoft.Maps.Events.addHandler(pushpin, 'click', function (args) {
                        infobox.setOptions({
                            location: args.target.getLocation(),
                            title: args.target.metadata.title,
                            description: args.target.metadata.description,
                            visible: true
                        });
                    });

                }
            };
            searchManager.geocode(siteAdr);})
            map.layers.insert(layer);


            // var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), {
            //     icon: 'https://bingmapsisdk.blob.core.windows.net/isdksamples/defaultPushpin.png',
            //     anchor: new Microsoft.Maps.Point(12, 39)
            // });
            // map.entities.push(pushpin);
            var requestOptions = {
                bounds: map.getBounds(),
                where: document.getElementById("location").value,
                callback: function (answer, userData) {
                    map.setView({ bounds: answer.results[0].bestView });
                    map.entities.push(new Microsoft.Maps.Pushpin(answer.results[0].location, {
                            icon: 'https://bingmapsisdk.blob.core.windows.net/isdksamples/defaultPushpin.png',
                            anchor: new Microsoft.Maps.Point(12, 39)
                        }));
                }
            };
            searchManager.geocode(requestOptions);
        });
        // var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), {
        //     icon: 'https://bingmapsisdk.blob.core.windows.net/isdksamples/defaultPushpin.png',
        //     anchor: new Microsoft.Maps.Point(12, 39)
        // });
        // map.entities.push(pushpin);



        // map.entities.push(pushpins);
    }



</script>
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?setmkt=en-us&key=AiF7rJipK3V6_DUqjwflPRpHqRcG8rp61tg6qb5NVxN0yfiPRvMQC8CKVA3Le1CW&callback=loadMapScenario' async defer></script>




</body>
</html>
