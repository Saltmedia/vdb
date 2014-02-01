<style>
    .wall_descripation
    {
        padding:0px 3px !important;
        margin:0px !important ;
        text-align: center !important;
        line-height: 140%  !important ;

    }
    .sponsorHeading
    {
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        font-size:18px;
        padding: 5px;
    }
    #category_cotainer
    {
        margin-left: <?php echo $this->config_data->category_gap . 'px !important' ?> ;
        margin-right: <?php echo $this->config_data->category_gap . 'px !important' ?> ;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
    }
    .sponsorc
    {
        float:left;
        margin-top :5px !important;
        margin-bottom :5px !important;
        text-align:center !important;
        -moz-background-clip:border;
        -moz-background-inline-policy:continuous;
        -moz-background-origin:padding;
        height: <?php echo $this->config_data->cat_section_height; ?>px;
        background:<?php echo $this->config_data->cat_section_box_background_color; ?> none repeat scroll 0 0; /* Giving the sponsor div a relative positioning: */
        position:relative;
        cursor:pointer;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
    }
    .category_cotainer
    {
        width:100%;
        background-color:<?php echo $this->config_data->cat_section_background_color; ?>;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        text-align:center !important;
        font-family:Calibri;
    }
    #category_title
    {
        width:100%;
        padding:10px;
        background-color:<?php echo $this->config_data->cat_section_title_background_color; ?> !important;
        color:<?php echo $this->config_data->cat_sec_title_font_color; ?> !important;
        font-size:<?php echo $this->config_data->cat_sec_title_font_size . 'px' ?> !important;
        font-weight: bold;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        text-align: center !important;


    }

    .eff
    {
        width:<?php echo $this->config_data->upper_block_width; ?>px;
        height:<?php echo $this->config_data->upper_block_height; ?>px;
        position:relative; /* important, it hides the moved image */
        overflow:hidden; /* with the clear class, make it into 3 x 3 layout */
        float:left; /* IE float bug fix */
        display:inline; /* styling */
        margin-right:<?php echo $this->config_data->wall_gap; ?>px;
        margin-bottom: <?php echo $this->config_data->wall_gap; ?>px;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        border-width: <?php echo $this->config_data->wall_border_size . "px"; ?> !important ;
        border-color:<?php echo $this->config_data->wall_border_color; ?> !important ;
        border-style: solid !important ;
    }
    .eff img {
        display:block;
        width:<?php echo $this->config_data->upper_block_width; ?>px !important;
        height:<?php echo $this->config_data->upper_block_height; ?>px !;
            font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        text-decoration:none;
        background:#ddd; /* important, it allows this obj to move by jquery */
        position:absolute; /* make sure it appears above the caption */ z-index:500; cursor:pointer; cursor:hand;
    }
    .eff .caption {
        /* should be the same size with the image */
        width:<?php echo $this->config_data->img_width; ?>px;
        height:<?php echo $this->config_data->img_height; ?>px;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        background-color:<?php echo $this->config_data->caption_background_color; ?> !important;
        color:#eee;
        position:absolute;
        top:0;
        left:0;
        z-index:0;
    }

    .eff .caption div.header
    {
        margin-top:5px !important;
        padding-top:0px !important;
        margin-bottom:<?php echo $this->config_data->margin_bet_title_desc; ?>px !important;
        padding-bottom:0px !important;
        color:<?php echo $this->config_data->wall_name_font_color ?> !important ;
        font-size:<?php echo $this->config_data->wall_name_font_size . "px" ?> !important ;
        font-weight:bold;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        text-align:center !important;
        width:<?php echo $this->config_data->upper_block_width; ?>px !important;
        line-height: 100% !important;

    }

    .eff .caption div
    {
        padding-top:0px !important;
        margin:0px !important ;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        color:<?php echo $this->config_data->caption_desc_color; ?>;
        font-size:<?php echo $this->config_data->desc_font_size; ?>px;
        text-align: center;
    }

    div.caption
    {
        padding: 0px !important;
        margin: 0px !important ;
    }
    .clear {clear:both}
    .sliderwall
    {
        padding:<?php echo $this->config_data->wall_gap; ?>px !important ;

    }

    /*PAGING STYLE*/
    #sponsor_paging
    {
        width:100%;
        height: auto;
        position:relative;
        border-color: silver;
        border-width: 1px 0px;
        border-style: solid;
        padding:0px !important;
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        background: White !important;
        font-size:12px;
        font-weight: 400 !important ;
        color:black !important ;
        line-height: 1.5em !important;
        display: table !important;
        text-align: center !important;


    }
    #sponsor_paging ul
    {
        margin: 0px !important;
        text-align: center !important;
    }
    #sponsor_paging li.disabled a,#sponsor_paging li.disabled a:hover
    {
        color:black !important;
        text-decoration: none !important;
    }
    #sponsor_paging a
    {
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        background: none !important;
        font-size:12px !important ;
        font-weight: 400 !important ;
        color:blue !important ;
        margin:5px !important;
        padding:0px !important;
        line-height: 1.5em !important;
        border:none !important;
        text-decoration: none !important ;
    }
    #sponsor_paging a:hover
    {
        font-family:<?php echo $this->config_data->general_font_family ?> !important ;
        background: none !important;
        font-size:12px !important;
        font-weight: 400 !important ;
        color:blue !important ;
        margin:5px !important;
        padding:0px !important;
        line-height: 1.5em !important;
        border:none !important;
        text-decoration: underline !important;
    }
    #sponsor_paging span
    {
        margin:5px 10px !important;
        padding:0px !important;
        font-size:12px !important;
        font-weight: 400 !important ;
        color:black !important ;
        line-height: 1.5em !important;
        border:none !important
    }
    #sponsor_paging .pagination
    {
        margin:0px !important;
        padding:0px !important;
        height:auto !important;
    }
    .list-footer ul li
    {
        display:inline !important;
        /*        float:left !important;*/
        margin:5px !important;
        padding:0px !important;
        font-size:12px !important;
        font-weight: 400 !important ;
        color:black !important ;
        line-height: 1.5em !important;
        border:none !important;
        float:left ;


    }
    .pagination ul
    {
        margin:5px !important;
        padding:0px !important;
        text-align: center !important;
    }
    .pagenav
    {
        color:#003366 !important;
        display: block !important;
        float: left !important;
        /*padding: 0.2em 0.5em !important;*/
        margin-right: 0.1em !important;
        border: solid 1px #ddd !important;
        background: #fff !important;
    }
    .limit
    {
        display:none !important;
    }
    .list-footer
    {
        padding: 0px !important;
        text-align: center !important;
        width: auto !important;
    }
    #main ul
    {
        display: inline-table !important;
        margin:0px !important;
        padding: 0px !important;
    }
    .counter
    {
        display:none;
    }
</style>
