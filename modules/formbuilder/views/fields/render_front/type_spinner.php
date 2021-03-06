<?php
/**
 * Intranet
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2015 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://wordpress-cost-estimator.zigaform.com
 */
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
ob_start();
?>
 <div class="rockfm-input4-wrap">
    <input class="rockfm-input4-spinner"
           name="uiform_fields[<?php echo $id;?>]"
           
           data-uifm-tabnum="<?php echo $tab_num;?>"
                data-rockfm-min="<?php echo floatval($input4['set_min']);?>" 
                data-rockfm-max="<?php echo floatval($input4['set_max']);?>"
                data-rockfm-step="<?php echo floatval($input4['set_step']);?>"
                data-rockfm-value="<?php echo floatval($input4['set_default']);?>"
            type="text"
            >
</div>
 
<?php
$cntACmp = ob_get_contents();
$cntACmp = Uiform_Form_Helper::sanitize_output($cntACmp);
ob_end_clean();

echo $cntACmp;
?>