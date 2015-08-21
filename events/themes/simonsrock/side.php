<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */

    
	if(!defined('isHC')){exit(-1);}
    $cur_uri = $_SERVER[REQUEST_URI];

?>
	<aside>
        <div class="row-fluid">
        <div class="sr-mini-cal-filters">
            <a href="/events/index.php?b=2" class="<?php echo ( strpos($cur_uri,'index.php?b=2') != false ) ? 'cal-active' : ''; ?>">Today</a>
            <a href="/events/index.php?b=0" class="<?php echo ( strpos($cur_uri,'index.php?b=0') != false) ? 'cal-active' : ''; ?>">Week</a>
            <a href="/events/index.php?b=1" class="<?php echo ( strpos($cur_uri,'index.php?b=1') != false || $cur_uri == '/events/' ) ? 'cal-active' : ''; ?>">Month</a>
        </div>
		<?php mini_cal_month();?>
		<br />
        <p>Subscribe to this calendar <?php global $hc_cfg; if($hc_cfg[54] == 1){ echo '<a class="red" href="/events/index.php?com=newsletter">Email</a> | '; };?> <a class="red" href="/events/rss/">RSS</a> | <a class="red" href="/events/link/ical.php">iCal</a></p>
            </div>
	<div id="filter">
        <?php sr_theme_cal_filter(1,2); ?>
		<?php sr_theme_mini_search('Search Events by Keyword',0);?>
	</div>
			
		<div class="setting"><?php select_language(0);?></div>

		<!-- <p>Theme: <?php select_theme();?></p> -->
		
		<?php theme_links();?>
		
	</aside>