<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard<small>- <?= Configure::read('APP_NAME'); ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<?php
  // Override any of the following default options to customize your map

  $home = $this->Url->image('home.png');


  $map_options = array(
    'id' => 'map_canvas',
    'width' => '500px',
    'height' => '500px',
    'style' => '',
    'zoom' => 7,
    'type' => 'HYBRID',
    'custom' => null,
    'localize' => true,
    'latitude' => 40.69847032728747,
    'longitude' => -1.9514422416687,
    'address' => '1 Infinite Loop, Cupertino',
    'marker' => true,
    'markerTitle' => 'This is my position',
    'markerIcon' => $home,
    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
    'infoWindow' => true,
    'windowText' => 'My Position',
    'draggableMarker' => false
  );
?>

<?php echo $this->GoogleMap->map($map_options); ?>

    </section><!-- /.content -->
</div><!-- /containier -->
