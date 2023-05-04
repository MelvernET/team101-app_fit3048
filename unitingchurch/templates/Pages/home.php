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
 * @var \Cake\Collection\CollectionInterface|string[] $program_types
 * @var \Cake\Collection\CollectionInterface|string[] $bridges
 * @var \Cake\Collection\CollectionInterface|string[] $clusters
 * @var \Cake\Collection\CollectionInterface|string[] $services
 * @var \App\Model\Entity\Site $site
 * @var \App\Model\Entity\Program $program
 * @var \App\Model\Entity\Program $query
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\Locator\LocatorAwareTrait;


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

<div class="programs index content">

    <!--        <div class="col-xl-6 col-lg-7">-->
    <div class="container-fluid">
        <!-- Earnings (Monthly) Card Example -->

        <h3 class="headings"><b>Uniting Church Map Panel</h3></b>
<div class="card purple">

            <div class="row">
                <div class="col-sm">
                    <div id='searchBoxContainer'>
                        <input type="text" class="form-control" placeholder="Enter Address or Suburb" aria-label="Text input with segmented dropdown button" id = "searchBox">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by Program Type" aria-label="Text input with segmented dropdown button" id = "dropdownBox1" disabled="disabled">
                            <div class="input-group-append" >

                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <div class="dropdown-menu"  style="max-height: 400px; overflow-y: auto;">

                                    <?php foreach ($program_types as $program_type):

                                        ?>
                                        <a class="dropdown-item" href="#">
                                            <input id = filter type= "button" value = "<?php echo $program_type->program_type_name;?>" onclick = "fil(<?php echo $program_type->program_type_id;?>)" class="dropdown-item">
                                        </a>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by State " aria-label="Text input with segmented dropdown button" id = "dropdownBox3" disabled="disabled">
                            <div class="input-group-append" >

                                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <div class="dropdown-menu"  style="max-height: 400px; overflow-y: auto;">

                                    <?php
                                    $state = array('NT','WA','QLD','SA','NSW','ACT','VIC','TAS');

                                    foreach ($state as $letter):

                                        ?>
                                        <a class="dropdown-item" href="#">
                                            <input id = 'filter-<?php echo $letter; ?>' type= "button" value = "<?php echo $letter;?>" onclick = "proget('<?php echo $letter;?>')" class="dropdown-item">
                                        </a>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    <br></div>

        <input type= "button" value = "Nearest Site" onclick = "findLocation()" class="small btn btn-primary mr2">

        <input type= "button" value = "Clear" onclick = "clean()" class="small btn btn-primary">
        <!--                        <input type= "button" value = "Reset Sites" onclick = "cleanData()" class="btn btn-primary">-->
        <input type= "button" value = "Show All Sites" onclick = "resetData()" class="small btn btn-primary">




        </br>

        <br>
        <!-- Content Row -->

        <div class="row">

            <div class="col-8">

                <div class="card" style="height: 600px;">

                    <div class="card-body" >
                        <h5 class="card-title"><i class="fas fa-fw  fa-map"></i> Map</h5>
                        <br>
                        <div class="map" style='width: 100%; height: 80%;' >
                            <!--                                    <div id='printoutPanel'></div>-->
                            <div id='myMap' style='width: 100%; height: 100%;'></div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-4">

                <div  class="card" style="height: 600px;">

                    <div  class="card-body">
                        <h5 class="card-title"><i class="fas fa-fw  fa-search"></i> Results</h5>


<br><br>
















                            <div class="card border-left-primary ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id='printoutPanel'></div>
                                        </div>
                                        <div class="col mr-2">
                                            <div id='printoutPanel1'></div>
                                        </div>



                                        <div class="col-auto">
<!--                                            <i class="fas fa-map-pin fa-2x text-gray-300"></i>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br>

                        <br>



                        <br>



                    </div>


                </div>



            </div>
        </div>
    </div>
</div>


            <!-- end -->
<br>



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

    var datas = new Array(0);
    var infoBox = new Array(0);

    var min = new Array(0);
    var addr = new Array(0);
    var index = null;
    var manager;
    var map;
    var layer;
    var center;
    var sizee = 12;
    var searchedLocation;
    //    $connection = ConnectionManager::get('default');
    //    $results = $connection->execute('SELECT * FROM programs')->fetchAll('assoc');
    let searchbox = document.querySelector('#searchBox');
    let dropdown = document.querySelector('#dropdownBox1');
    let dropdown2 = document.querySelector('#dropdownBox2');
    let dropdown3 = document.querySelector('#dropdownBox3');




    //init the data about sites
<!--    --><?php
//    foreach ($sites as $site):
//    $siId = $site->site_id;
//    $address = $site->site_address;
//    $site_address = $site->site_contact;
//    $lati = $site->site_latitude;
//    $long = $site->site_longitude;
//    ?>
//    datas.push(["<?php //echo $address;?>//","<?php //echo $site_address;?>//","<?php //echo $lati;?>//","<?php //echo $long;?>//","<?php //echo $siId;?>//"])
//    infoBox.push("<?php //echo $site_address;?>//")
//
//    <?php //endforeach; ?>

//

//get random color

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }


//dropdown filter 3 function
    function proget(a){

        if(a == "VIC"){center = new Microsoft.Maps.Location(-37.81361, 144.96306);}
        if(a == "ACT"){center = new Microsoft.Maps.Location(-35.2984, 149.134);}
        if(a == "NT"){center = new Microsoft.Maps.Location(-12.4608, 130.844);}
        if(a == "WA"){center = new Microsoft.Maps.Location(-31.9518, 115.859);}
        if(a == "QLD"){center = new Microsoft.Maps.Location(-27.4678, 153.026);}
        if(a == "SA"){center = new Microsoft.Maps.Location(-34.9287, 138.601);}
        if(a == "NSW"){center = new Microsoft.Maps.Location(-33.8732, 151.21);}
        if(a == "TAS"){center = new Microsoft.Maps.Location(-42.88, 147.32);}

        dropdown.value = '';
        // dropdown2.value = '';
        dropdown3.value = a;
        searchbox.value = '';
        datas.length = 0;
        infoBox.length = 0;
        <?php
        foreach ($sites as $st):
        $siId = $st->site_id;
        $address = $st->site_address;
        $site_address = $st->site_contact;
        $lati = $st->site_latitude;
        $long = $st->site_longitude;
        ?>
        var ad = "<?php echo $address;?>"


        if(ad.includes(a)){
            datas.push(["<?php echo $address;?>","<?php echo $site_address;?>","<?php echo $lati;?>","<?php echo $long;?>","<?php echo $siId;?>"])
            infoBox.push("<?php echo $site_address;?>")
        }
        <?php endforeach; ?>
        loadMapScenario();
    }


// reset sites data function

    function resetData(){
        datas.length = 0;
        infoBox.length = 0;
        <?php
        foreach ($sites as $site):
        $id = $site->site_id;
        $address = $site->site_address;
        $site_address = $site->site_contact;
        $lati = $site->site_latitude;
        $long = $site->site_longitude;
        ?>
        datas.push(["<?php echo $address;?>","<?php echo $site_address;?>","<?php echo $lati;?>","<?php echo $long;?>","<?php echo $id;?>"])
        infoBox.push("<?php echo $site_address;?>")
        <?php endforeach; ?>
        searchbox.value = '';
        loadMapScenario();

    }
    // function cleanData(){
    //     datas.length = 0;
    //     infoBox.length = 0;
    //     searchbox.value = '';
    //     loadMapScenario();
    // }

    function clean(){
        datas.length = 0;
        infoBox.length = 0;
        searchbox.value = '';
        document.getElementById('printoutPanel').innerHTML = '';
        dropdown.value = '';
        // dropdown2.value = '';
        dropdown3.value = '';
        searchbox.value = '';
        loadMapScenario();

    }

//let array remove duplicate elements
    function unique(arr) {
        if (!Array.isArray(arr)) {
            console.log('type error!')
            return
        }
        var array = [];
        for (var i = 0; i < arr.length; i++) {
            if (array .indexOf(arr[i]) === -1) {
                array .push(arr[i])
            }
        }
        return array;
    }





    // filter function

    function fil(typeId){
        sizee = 8;
        // center = new Microsoft.Maps.Location(-34.9287, 138.601);
        center = new Microsoft.Maps.Location(-37.81361, 144.96306);
        var progId = Array(0);
        var siteId = Array(0);
        var allSites = Array(0);
        searchbox.value = '';
        datas.length = 0;
        infoBox.length = 0;

        <?php
        foreach ($sites as $site):
        $address = $site->site_address;
        $site_address = $site->site_contact;
        $lati = $site->site_latitude;
        $long = $site->site_longitude;
        $sitId = $site->site_id;
        ?>
        allSites.push(["<?php echo $address;?>","<?php echo $site_address;?>","<?php echo $lati;?>","<?php echo $long;?>","<?php echo $sitId;?>"])
        <?php endforeach; ?>
        <?php
        foreach ($query as $pro) :
        $proTypeId = $pro->program_type_id;
        $proId = $pro->program_id;
        $proname = $pro->program_name;
        ?>
        var name = "<?php echo $proname;?>";
        var data = "<?php echo $proTypeId;?>"
        if(parseInt(data) == parseInt(typeId)){
            progId.push("<?php echo $proId;?>");


            <?php
            foreach ($program_types as $proTy) :
            $proTypeName = $proTy->program_type_name;
            $proTyId = $proTy->program_type_id;

                ?>
            var ptId = "<?php echo $proTyId;?>";
            var ptyName = "<?php echo $proTypeName;?>"
            if(ptId === data){
                var name = ptyName;



                dropdown3.value = '';
                // dropdown2.value = '';
                dropdown.value = name;
            }

            <?php endforeach; ?>

        }
        <?php endforeach; ?>

        progId.forEach( function (item) {

            <?php
            foreach ($bridges as $bri) :
            $prId = $bri->program_id;


            $stId = $bri->site_id;

            ?>

            var prograId = "<?php echo $prId;?>";
            var siteeId = "<?php echo $stId;?>"
            if(item === prograId){
                siteId.push(siteeId);

            }

            <?php endforeach; ?>

        })
        var result = unique(siteId)

        document.getElementById('printoutPanel').innerHTML = '<b>site numbers' +
            ': </b><br> '+result;

        allSites.forEach( function (itemmm) {
            result.forEach( function (itemm){

                if(itemmm[4] === itemm){
                    document.getElementById('printoutPanel').innerHTML = '<b>site numbers' +
                        ': </b><br> '+(itemmm[4] == itemm);
                    datas.push(itemmm);
                }
            })
        })
        loadMapScenario();
    }




    // filter function 2
    function filByCluster(typeId){

        datas.length = 0;
        infoBox.length = 0;
        dropdown.value = '';
        dropdown2.value = 'Cluster ID: '+typeId;
        dropdown3.value = '';
        searchbox.value = '';

        var progId = Array(0);
        var siteId = Array(0);
        var allSites = Array(0);

        <?php
        foreach ($sites as $site):
        $address = $site->site_address;
        $site_address = $site->site_contact;
        $lati = $site->site_latitude;
        $long = $site->site_longitude;
        $sitId = $site->site_id;
        ?>
        allSites.push(["<?php echo $address;?>","<?php echo $site_address;?>","<?php echo $lati;?>","<?php echo $long;?>","<?php echo $sitId;?>"])
        <?php endforeach; ?>


        <?php
        foreach ($query as $pro) :
        $proTypeId = $pro->cluster_id;
        $proId = $pro->program_id;

        ?>

        var data = "<?php echo $proTypeId;?>"
        if(parseInt(data) == parseInt(typeId)){
            progId.push("<?php echo $proId;?>");


        }
        <?php endforeach; ?>

        progId.forEach( function (item) {

            <?php
            foreach ($bridges as $bri) :
            $prId = $bri->program_id;


            $stId = $bri->site_id;

            ?>

            var prograId = "<?php echo $prId;?>";
            var siteeId = "<?php echo $stId;?>"
            if(item === prograId){
                siteId.push(siteeId);

            }

            <?php endforeach; ?>

        })
        var result = unique(siteId)

        document.getElementById('printoutPanel').innerHTML = '<b>site numbers' +
            ': </b><br> '+result;

        allSites.forEach( function (itemmm) {
            result.forEach( function (itemm){

                if(itemmm[4] === itemm){
                    document.getElementById('printoutPanel').innerHTML = '<b>site numbers' +
                        ': </b><br> '+(itemmm[4] == itemm);
                    datas.push(itemmm);
                }
            })
        })
        loadMapScenario();
    }


//show the nearest site function
    function findLocation(){

        if(min.length === 0){
            window.confirm("Please search a location.");
        }

        var minn = Math.min.apply(null,min);
        index = min.indexOf(minn);
        // document.getElementById('printoutPanel').innerHTML = '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Closest Site: </div><br><div class="mb-0 text-gray-800">'+addr[index][0]+'<br>'+addr[index][1]+addr[index][2]+'</div>'+'<br>';
        document.getElementById('printoutPanel').innerHTML = '';
        document.getElementById('printoutPanel').innerHTML = '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Closest Site: </div><br><div class="mb-0 text-gray-800">'+addr[index][0]+'<br>'+addr[index][1]+addr[index][2]+'</div>'+'<br>';

        // min.forEach( function (item) {
        //
        //
        //     document.getElementById('printoutPanel').innerHTML += '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">data is : </div><br><div class="mb-0 text-gray-800">'+item+'</div>'+'<br>';
        //
        // })
        // addr.forEach( function (item) {
        //
        //
        //     document.getElementById('printoutPanel').innerHTML += '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">data is : </div><br><div class="mb-0 text-gray-800">'+item+'</div>'+'<br>';
        //
        // })
        // document.getElementById('printoutPanel').innerHTML += '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">index is : </div><br><div class="mb-0 text-gray-800">'+index+'</div>'+'<br>';
        //
        //



        // Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
        //     var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
        //     // Set Route Mode to transit
        //     directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.transit });
        //     var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: 'Redmond', location: new Microsoft.Maps.Location(47.67683029174805, -122.1099624633789) });
        //     var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Seattle', location: new Microsoft.Maps.Location(47.59977722167969, -122.33458709716797) });
        //     directionsManager.addWaypoint(waypoint1);
        //     directionsManager.addWaypoint(waypoint2);
        //     // Set the element in which the itinerary will be rendered
        //     directionsManager.setRenderOptions({ itineraryContainer: document.getElementById('printoutPanel1') });
        //     directionsManager.calculateDirections();
        // });

    }



//clear the text window function





//remove array duplicate element function
    function unique(arr) {
        if (!Array.isArray(arr)) {
            console.log('type error!')
            return
        }
        var array = [];
        for (var i = 0; i < arr.length; i++) {
            if (array .indexOf(arr[i]) === -1) {
                array .push(arr[i])
            }
        }
        return array;
    }

//load map function
    function loadMapScenario() {
        min.length = 0
        addr.length = 0;
        map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
            center: center,
            zoom: sizee});
        layer = new Microsoft.Maps.Layer();
        layer.clear();

        var loca = new Array(0);
        // var addr = new Array(0);
        // var index;
        // document.getElementById('printoutPanel').innerHTML = '<b>program data' +
        //     ': </b><br> '+filt[0][0]+filt[0][1];
        document.getElementById('printoutPanel').innerHTML = '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of Sites' +
            ': </div><br><div class="h5 mb-0 font-weight-bold text-gray-800"> '+datas.length+'<br></div><br>';
        loca.length = 0;


        Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
            var searchManager = new Microsoft.Maps.Search.SearchManager(map);
            datas.forEach( function (item) { var siteAdr = {
                bounds: map.getBounds(),
                where: item[0],


                callback: function (answer, userData) {

                    var pushpin = new Microsoft.Maps.Pushpin(answer.results[0].location,{ color: 'red' });
                    pushpin.metadata = { title: item[1]+'['+'ID: '+item[4]+']', description: '<b>Address: </b>'+ item[0]+'<br> <b>Lat:</b> ' + answer.results[0].location.latitude +
                            '<br> <b>Lon:</b> ' + answer.results[0].location.longitude + '<br>' };
                    pushpin.setOptions({ enableHoverStyle: true});
                    addr.push(['<br><b>Site ID:</b> '+ item[4],'<b>Name:</b> '+item[1],'<br><b>Address:</b> '+ item[0]]);

                    layer.add(pushpin);


                    var infobox = new Microsoft.Maps.Infobox(answer.results[0].location,  { visible: false, autoAlignment: true });
                    // var infobox = new Microsoft.Maps.Infobox(answer.results[0].location, { title: 'site: ', description: 'address: '+ item });
                    infobox.setMap(map);
                    Microsoft.Maps.Events.addHandler(pushpin, 'click', function (args) {
                        infobox.setOptions({
                            location: args.target.getLocation(),
                            title: args.target.metadata.title,
                            description: args.target.metadata.description,
                            // actions: [
                            //     { label: 'Handler1', eventHandler: function () { alert('Handler1'); } },
                            //     { label: 'Handler2', eventHandler: function () { alert('Handler2'); } },
                            //     { label: 'Handler3', eventHandler: function () { alert('Handler3'); } }
                            // ],
                            visible: true
                        });
                        document.getElementById('printoutPanel').innerHTML =
                            '';
                        document.getElementById('printoutPanel').innerHTML +=
                            '<b><div class="h5 mb-0 font-weight-bold text-gray-800">Site:</div></b> <br>' + infobox.getTitle() + '<br>';
                        document.getElementById('printoutPanel').innerHTML +=
                            '<b></b> <br>' + infobox.getDescription() + '<br>';

                        document.getElementById('printoutPanel').innerHTML +=
                            '<div class="h5 mb-0 font-weight-bold text-gray-800">Related Services:</div>';

                        <?php
                        foreach ($bridges as $bri) :
                        $prId = $bri->program_id;
                        $stId = $bri->site_id;
                        ?>
                        <?php


                        ?>
                        <?php foreach ($query as $p) :
                        $prName = $p->program_name;
                        $pId = $p->program_id;
                        if($pId===$prId){
                            $pName = $prName;
                            if($pName == null){
                                $linkHtml = $this->Html->link(__('N/A'), ['controller' => 'Programs', 'action' => 'view', $prId]);
                            }else{
                                $linkHtml = $this->Html->link(__(strval($pName)), ['controller' => 'Programs', 'action' => 'view', $prId]);

                            }
                        }
                        ?>
                        <?php endforeach;?>


                        var linkHtml = '<?php echo addslashes($linkHtml); ?>';
                        if(item[4]==="<?php echo $stId;?>") {
                            document.getElementById('printoutPanel').innerHTML += '<b></b> <br>' +  linkHtml + '<br>';
                        }


                        <?php endforeach;?>



                    });
                    loca.push(pushpin);
                }
            };
                searchManager.geocode(siteAdr);})
            map.layers.insert(layer);

        });


        Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
            var options = {
                maxResults: 4,
                map: map
            };
            manager = new Microsoft.Maps.AutosuggestManager(options);
            manager.attachAutosuggest('#searchBox', '#searchBoxContainer', selectedSuggestion);
        });


        function selectedSuggestion(suggestionResult) {
            min.length = 0
            index = null;
            // document.getElementById('printoutPanel').innerHTML = '';
            map.entities.clear();
            var pushpinNow = new Microsoft.Maps.Pushpin(suggestionResult.location, {
                icon: 'https://bingmapsisdk.blob.core.windows.net/isdksamples/defaultPushpin.png',
                anchor: new Microsoft.Maps.Point(12, 39)
            });
            map.setView({ bounds: suggestionResult.bestView });
            map.entities.push(pushpinNow);
            var infobox = new Microsoft.Maps.Infobox(suggestionResult.location,  { visible: false, autoAlignment: true });
            infobox.setMap(map);
            Microsoft.Maps.Events.addHandler(pushpinNow, 'click', function (args) {
                infobox.setOptions({
                    location: args.target.getLocation(),
                    title: document.getElementById("searchBox").value,
                    description: '<b>Location:</b>  <br>' + suggestionResult.formattedSuggestion+ '<br> <b>Lat:</b> ' + suggestionResult.location.latitude +
                        '<br> <b>Lon:</b> ' + suggestionResult.location.longitude + '<br>',
                    visible: true
                });
            });
            loca.forEach( function (item) {
                Microsoft.Maps.loadModule('Microsoft.Maps.SpatialMath', function () {
                    min.push(Microsoft.Maps.SpatialMath.getDistanceTo(pushpinNow.getLocation(), item.getLocation(), Microsoft.Maps.SpatialMath.DistanceUnits.Miles));

                    // document.getElementById('printoutPanel').innerHTML = '<b>Distance between two pushpins in miles</b><br> '
                    //     + Microsoft.Maps.SpatialMath.getDistanceTo(pushpinNow.getLocation(), item.getLocation(), Microsoft.Maps.SpatialMath.DistanceUnits.Miles);
                })

            })


            // min.forEach( function (item) {
            //
            //
            //     document.getElementById('printoutPanel').innerHTML += '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">data is : </div><br><div class="mb-0 text-gray-800">'+item+'</div>'+'<br>';
            //
            // })


            // document.getElementById('printoutPanel').innerHTML =
            //     'Suggestion: ' + suggestionResult.formattedSuggestion +
            //     '<br> Lat: ' + suggestionResult.location.latitude +
            //     '<br> Lon: ' + suggestionResult.location.longitude;
        }





        // Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
        //     var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
        //     // Set Route Mode to driving
        //     directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.driving });
        //     var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: 'Redmond', location: new Microsoft.Maps.Location(47.67683029174805, -122.1099624633789) });
        //     var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Seattle', location: new Microsoft.Maps.Location(47.59977722167969, -122.33458709716797) });
        //     directionsManager.addWaypoint(waypoint1);
        //     directionsManager.addWaypoint(waypoint2);
        //     // Set the element in which the itinerary will be rendered
        //     directionsManager.setRenderOptions({ itineraryContainer: document.getElementById('printoutPanel') });
        //     directionsManager.calculateDirections();
        // });









        // Microsoft.Maps.loadModule('Microsoft.Maps.Traffic', function () {
        //     var manager = new Microsoft.Maps.Traffic.TrafficManager(map);
        //     manager.show();
        // });





        // Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
        //     var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
        //     // Set Route Mode to transit
        //     directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.transit });
        //     var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: 'Redmond', location: new Microsoft.Maps.Location(47.67683029174805, -122.1099624633789) });
        //     var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Seattle', location: new Microsoft.Maps.Location(47.59977722167969, -122.33458709716797) });
        //     directionsManager.addWaypoint(waypoint1);
        //     directionsManager.addWaypoint(waypoint2);
        //     // Set the element in which the itinerary will be rendered
        //     directionsManager.setRenderOptions({ itineraryContainer: document.getElementById('printoutPanel') });
        //     directionsManager.calculateDirections();
        // });
    }



    // function selecte(loca) {
    //     min.length = 0
    //     index = null;
    //     // document.getElementById('printoutPanel').innerHTML = '';
    //     map.entities.clear();
    //     var pushpinM = new Microsoft.Maps.Pushpin(map.getCenter(), null);
    //
    //
    //     map.entities.push(pushpinM);
    //     map.entities.clear();
    //     loca.forEach( function (item) {
    //         Microsoft.Maps.loadModule('Microsoft.Maps.SpatialMath', function () {
    //             min.push(Microsoft.Maps.SpatialMath.getDistanceTo(pushpinM.getLocation(), item.getLocation(), Microsoft.Maps.SpatialMath.DistanceUnits.Miles));
    //
    //         })
    //
    //     })
    //
    // }





</script>
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?setmkt=en-us&key=AiF7rJipK3V6_DUqjwflPRpHqRcG8rp61tg6qb5NVxN0yfiPRvMQC8CKVA3Le1CW&callback=loadMapScenario' async defer></script>




</body>
</html>
