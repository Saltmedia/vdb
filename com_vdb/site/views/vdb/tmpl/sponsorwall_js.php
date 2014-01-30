<script>
<?php
if($this->config_data->jquery_conflict == 1)
{
    ?>

        var $jx = jQuery.noConflict();
        $jx(document).ready(function() {
    <?php
    if(JRequest::getVar('position'))
    {
        ?>


                $jx(window).scrollTop($jx('#gallery').offset().top);
    <?php } ?>
            //if mouse over and mouse out
            $jx('.eff').hover(
                    function() {
                        value = $jx(this).find('img').outerHeight() * -1;
                        $jx(this).find('img').stop().animate({<?php echo $this->config_data->wall_movement; ?>: value}, {duration: 500, easing: 'easeOutBounce'});
                    },
                    function() {
                        $jx(this).find('img').stop().animate({<?php echo $this->config_data->wall_movement; ?>: 0}, {duration: 500, easing: 'easeOutBounce'});
                    });
            $jx('.eff').click(function() {
            });
        });
    <?php
} else
{
    ?>


        $(document).ready(function()
        {
    <?php
    if(JRequest::getVar('position'))
    {
        ?>
                $(window).scrollTop($('#gallery').offset().top);
    <?php } ?>
            //if mouse over and mouse out
            $('.eff').hover(
                    function() {
                        value = $(this).find('img').outerHeight() * -1;
                        $(this).find('img').stop().animate({<?php echo $this->config_data->wall_movement; ?>: value}, {duration: 500, easing: 'easeOutBounce'});
                    },
                    function() {
                        $(this).find('img').stop().animate({<?php echo $this->config_data->wall_movement; ?>: 0}, {duration: 500, easing: 'easeOutBounce'});
                    });
            $('.eff').click(function() {
            });
        });
    <?php
}
?>

    var sponsorc_height = 0;
    var category_title_height = 0;
    var sponsorc_margin = 0;
    var total_height = 0;
    var category_title_height = jQuery("#category_title").height();


    var sponsorc_height = jQuery(".sponsorc").css("height");
    sponsorc_height = sponsorc_height.replace("px", "");

    var sponsorc_margin = jQuery(".sponsorc").css("margin-top");
    sponsorc_margin = sponsorc_margin.replace("px", "");
    sponsorc_margin = sponsorc_margin * 6;

    var total_height = parseInt(category_title_height) + parseInt(sponsorc_height) + parseInt(sponsorc_margin);
    jQuery(".category_cotainer").css("height", total_height);


    var category_cotainer_width = jQuery("#category_cotainer").css("width");
    category_cotainer_width = category_cotainer_width.replace('px', '');
    var total_margin = <?php echo $total_margin ?>;
    var sponsorc_width = jQuery(".sponsorc").css("width");
    var all_sponsorc_width = parseInt(sponsorc_width) * parseInt(<?php echo $total_category ?>);
    var margin = (parseInt(category_cotainer_width) - (parseInt(all_sponsorc_width) + parseInt(total_margin))) / 2;

    var main_div_width = jQuery("#gallery").css("width");
    main_div_width = main_div_width.replace("px", "");

    var main_div_width_in_percentage = main_div_width - (total_margin + parseInt(<?php echo $this->config_data->category_gap * 2; ?>));

    var sponsorc_width = parseInt(main_div_width_in_percentage) / parseInt(<?php echo$total_category ?>);
    sponsorc_width = sponsorc_width + "px";
    jQuery(".sponsorc").css("width", sponsorc_width);
</script>


