<?php
/**
  /**
 * Template for sponsorwall Component
 *
 * @package    Joomla
 * @subpackage Component
 * @link http://www.joomlatr.org
 * @license        GNU/GPL
 * com_sponsorwall is Commercial software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
if($this->config_data->jquery_load == 1)
{
    ?>
    <script type="text/javascript" src="<?php echo JURI::root(); ?>components/com_sponsorwall/scripts/jquery-1.4.min.js"></script>
    <?php
}

include ('sponsorwall_css.php');
?>
<script type="text/javascript" src="<?php echo JURI::root(); ?>components/com_sponsorwall/scripts/jquery.easing.1.3.js"></script>
<form action="<?php echo JRoute::_('index.php?option=com_sponsorwall'); ?>" method="post" name="adminForm">


    <?php
// Looping through the array:

    $i = 1;
    $total_margin = 0;
    $total_category = 0;
    ?>


    <div style="width:100%;<?php
    if($this->config_data->border_status)
    {
        ?> border:1px solid <?php
             echo $this->config_data->border_color;
         }
         ?>; height:auto; overflow:hidden;">

        <?php
        if($this->config_data->category_status != 2)
        {
            ?>
            <div class="category_cotainer" id="gallery">

                <div id="category_title">
                    <?php echo $this->config_data->cat_section_title; ?>
                </div>
                <div style="text-align:center;" id="category_cotainer">

                    <?php
                    $i = 1;
                    $total_margin = 0;
                    $total_category = count($this->categorylist);
                    $category_gap = $this->config_data->category_gap;
                    foreach($this->categorylist as $item)
                    {
                        ?>


                        <div class="sponsorc" style="
                        <?php
                        if($i != 1)
                        {
                            $total_margin = $total_margin + $this->config_data->category_gap;
                            echo 'margin-left:' . $this->config_data->category_gap . 'px';
                        }
                        ?>
                             ">
                            <div style="
                                 text-align:center !important;
                                 margin-top:10px;
                                 margin-bottom:10px;
                                 ">
                                <a href="index.php?option=com_sponsorwall&c=<?php echo $item->id . '-' . $item->name; ?>">
                                    <img src="<?php JURI::root(); ?>components/com_sponsorwall/images/category_images/<?php echo $item->image; ?>" alt="More about <?php echo $item->image; ?>"
                                         style="
                                         width:<?php echo $this->config_data->cat_img_width . 'px'; ?>;
                                         height:<?php echo $this->config_data->cat_img_height . 'px'; ?>;
                                         box-shadow: 0 1px 1px 1px #B5B3B4 !important ;
                                         "
                                         />
                                </a>
                            </div>
                            <div style="text-align:center;  line-height: 1.5em !important;">
                                <a style="
                                   background:none !important;

                                   color:<?php echo $this->config_data->cat_name_font_color ?> !important;
                                   font-size:<?php echo $this->config_data->cat_name_font_size . "px" ?> !important;
                                   font-weight: bold !important ;
                                   " href="index.php?option=com_sponsorwall&c=<?php echo $item->id . '-' . $item->name; ?>">
                                   <?php echo strtoupper($item->name); ?>
                                </a>
                            </div>
                            <?php
                            if($this->config_data->cat_desc_status == 1)
                            {
                                ?>
                                <div style="text-align:center; margin-left:8px; margin-top:5px;">
                                    <?php echo $item->desc; ?>
                                </div>
                            <?php }
                            ?>

                        </div>




                        <?php
                        $i++;
                    }
                    ?>	 </div>

            </div>
            <div class="clear"></div>
        <?php } ?>




        <?php
// Looping through the array:
        $i = 1;
        ?>

        <div style="
             font-weight:bold;
             text-align: center;
             width:100%;
             margin-top:<?php echo $this->config_data->dist_cat_sec . 'px !important' ?>;
             padding:10px;
             background-color:<?php echo $this->config_data->wall_sec_title_bg_color; ?> !important;
             font-size:<?php echo $this->config_data->wall_sec_title_font_size . 'px' ?> !important;
             height:auto;
             color:<?php echo $this->config_data->wall_sec_title_font_color; ?> !important;
             font-family:<?php echo $this->config_data->general_font_family ?> !important ;"
             id="gallery">
            <?php echo strtoupper($this->category_name->name); ?> Wall(s)
        </div>


        <div class="sliderwall">
            <?php
            $no_of_walls = count($this->wall);
            if($no_of_walls == 0)
            {
                ?><div class="sponsorHeading"> No Wall's contain in this Category</div> <?php
            }
            $j = 1;
            foreach($this->wall as $company)
            {
                ?>
                <div class="eff">
                    <img src="<?php JURI::root(); ?>components/com_sponsorwall/images/<?php echo $company->image; ?>" />
                    <div class="caption">
                        <div class="header" style="text-align: center !important;">
                            <?php echo strtoupper($company->title); ?>
                        </div>
                        <div class="wall_descripation">
                            <?php echo $company->desc; ?>
                        </div>
                        <div style="
                             text-align: center !important;
                             padding: 0px !important;
                             margin:0px !important;
                             line-height:100% !important;
                             margin-top: <?php echo $this->config_data->margin_bet_desc_link; ?>px !important;
                             ">
                            <a href="index.php?option=com_sponsorwall&task=click&wallid=<?php echo $company->id; ?>"
                            <?php
                            if($this->config_data->link_open_type == 0)
                            {
                                ?>
                                   target="_blank"
                                   <?php
                               }
                               ?>
                               style="color:<?php echo $this->config_data->caption_link_color . '! important'; ?>;
                               font-size:<?php echo $this->config_data->link_font_size; ?>px;
                               background: none !important;
                               font-weight: 300 !important;
                               ">
                               <?php
                               if($this->config_data->link_or_click == 1)
                               {
                                   echo $this->config_data->link_word;
                               } else
                               {
                                   echo $company->url;
                               }
                               ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            } $i++;
            ?>

        </div>



        <div class="clear"></div>

        <div  id="sponsor_paging" style="">

            <?php
            if(count($this->wall) != 0)
            {

                /* NIRAJ added params to url
                 */
                $app = & JFactory::getApplication();
                $router = & $app->getRouter();
                $router->setVar('position', 'gallery');

                echo $this->pagination->getListFooter();
            }
            ?>
        </div>
    </div>


    <input type="hidden" name="option" value="com_sponsorwall" />
    <input type="hidden" name="controller" value="sponsorwall" />
    <input type="hidden" name="catid" value="<?php echo $catid = JRequest::getVar('catid', 0); ?>" />
</form>

<?php
include ('sponsorwall_js.php');
?>