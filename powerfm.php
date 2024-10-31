<?php
/*
Plugin Name: PowerFM Radyo
Plugin URI: http://www.cihanoztunc.com/
Description: Türkiye'nin en çok dinlenen yabancı müzik radyosu PowerFm
Version: 2.0
Author: Cihan Oztunc
Author URI: http://www.cihanoztunc.com
*/

function widget_PowerFM($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>

<div>
<img src="http://radyo.gen.tr/gorsel/power-fm-dinle_400x400_17.jpg" width=300px alt="Powerfm">
</br>
<audio controls loop> <source src="http://powerfm.listenpowerapp.com/powerfm/mpeg/icecast.audio" />Lütfen Bekleyiniz.</audio>
            
</div>

        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('PowerFM Radyo', 'widget_PowerFM');
?>