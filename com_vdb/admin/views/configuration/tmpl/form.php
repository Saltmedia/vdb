<?php defined('_JEXEC') or die('Restricted access'); ?>
<style>
    table.admintable td.key, table.admintable td.paramlist_key {
        width: 300px;
        text-align:left;
        background-color:#CCFFCC;
        font-family:Calibri;

    }
    .admin_sponsor_config_heading
    {
        background-color:#000000;
        font-family:Calibri;
        color:#FFFFFF;
        font-weight:500;

    }
</style>
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
    <div class="col200">
        <fieldset class="adminform">
            <legend><?php echo JText::_('Details'); ?></legend>
            <table class="admintable">
                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">JQUERY SETTINGS</td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Jquery Load
                        </label>
                    </td>
                    <td>
                        <select name="jquery_load" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->jquery_load == 1)
                            {
                                ?> selected="selected" <?php } ?>>Enable</option>
                            <option value="0" <?php
                            if($this->configuration->jquery_load == 0)
                            {
                                ?> selected="selected" <?php } ?>>Disable</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Jquery Conflict Code
                        </label>
                    </td>
                    <td>
                        <select name="jquery_conflict" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->jquery_conflict == 1)
                            {
                                ?> selected="selected" <?php } ?>>Yes</option>
                            <option value="0" <?php
                            if($this->configuration->jquery_conflict == 0)
                            {
                                ?> selected="selected" <?php } ?>>No</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">CATEGORY SECTION SETTINGS</td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Enable or Disable'); ?>:
                        </label>
                    </td>
                    <td>
                        <select name="category_status" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->category_status == '1')
                            {
                                ?> selected="selected" <?php } ?>>Enable</option>
                            <option value="2" <?php
                            if($this->configuration->category_status == '2')
                            {
                                ?> selected="selected" <?php } ?>>Disable</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Display Category Description
                        </label>
                    </td>
                    <td>
                        <select name="cat_desc_status" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->cat_desc_status == 1)
                            {
                                ?> selected="selected" <?php } ?>>Yes</option>
                            <option value="0" <?php
                            if($this->configuration->cat_desc_status == 0)
                            {
                                ?> selected="selected" <?php } ?>>No</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td width="275" align="right" class="key">
                        <label for="greeting" style="width:260px; font-family:Calibri;" style="width:260px; font-family:Calibri;">
                            <?php echo JText::_('Default Category'); ?>:
                        </label>
                    </td>
                    <td>
                        <select id="default_category" class="inputbox" size="1" name="default_category" style="font-family:Calibri;">
                            <?php
                            foreach($this->Categories as $curr_cat)
                            {
                                echo '<option ';
                                if($curr_cat->id == $this->configuration->default_category)
                                {
                                    echo 'selected="selected"';
                                }
                                echo ' value="' . $curr_cat->id . '">' . $curr_cat->name . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Height'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_section_height" id="cat_section_height" size="50" maxlength="250" value="<?php echo $this->configuration->cat_section_height; ?>" />
                    </td>
                </tr>



                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Image Width'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_img_width" id="cat_img_width" size="50" maxlength="250" value="<?php echo $this->configuration->cat_img_width; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Image Height'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_img_height" id="cat_img_height" size="50" maxlength="250" value="<?php echo $this->configuration->cat_img_height; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Caption Font Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_name_font_color" id="cat_name_font_color" size="50" maxlength="250" value="<?php echo $this->configuration->cat_name_font_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Caption Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_name_font_size" id="cat_name_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->cat_name_font_size; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Margins Between Categories
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="category_gap" id="category_gap" size="50" maxlength="250" value="<?php echo $this->configuration->category_gap; ?>" />
                    </td>
                </tr>




                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Section Background Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_section_background_color" id="cat_section_background_color" size="50" maxlength="250" value="<?php echo $this->configuration->cat_section_background_color; ?>" />
                    </td>
                </tr>




                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Title Text'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_section_title" id="cat_section_title" size="50" maxlength="250" value="<?php echo $this->configuration->cat_section_title; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Box background Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_section_box_background_color" id="cat_section_box_background_color" size="50" maxlength="250" value="<?php echo $this->configuration->cat_section_box_background_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Distance Between Categories And Walls
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="dist_cat_sec" id="dist_cat_sec" size="50" maxlength="250" value="<?php echo $this->configuration->dist_cat_sec; ?>" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">WALL FRONT SECTION SETTINGS</td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Upper Block Width'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="upper_block_width" id="upper_block_width" size="50" maxlength="250" value="<?php echo $this->configuration->upper_block_width; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Upper Block Height'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="upper_block_height" id="upper_block_height" size="50" maxlength="250" value="<?php echo $this->configuration->upper_block_height; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Back Box Width'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="img_width" id="img_width" size="50" maxlength="250" value="<?php echo $this->configuration->img_width; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Back Box Height'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="img_height" id="img_height" size="50" maxlength="250" value="<?php echo $this->configuration->img_height; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Wall Border Size
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_border_size" id="wall_border_size" size="50" maxlength="250" value="<?php echo $this->configuration->wall_border_size; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            Wall Border Color
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_border_color" id="wall_border_size" size="50" maxlength="250" value="<?php echo $this->configuration->wall_border_color; ?>" />
                    </td>
                </tr>
                <tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Margin Between Wall'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_gap" id="wall_gap" size="50" maxlength="250" value="<?php echo $this->configuration->wall_gap; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('When Move on wall then Which Direction you want for Swipping'); ?>:
                        </label>
                    </td>
                    <td>
                        <select name="wall_movement" style="width:100px;">
                            <option value="left" <?php
                            if($this->configuration->wall_movement == 'left')
                            {
                                ?> selected="selected" <?php } ?>>Left</option>
                            <option value="right" <?php
                            if($this->configuration->wall_movement == 'right')
                            {
                                ?> selected="selected" <?php } ?>>Right</option>
                            <option value="top" <?php
                            if($this->configuration->wall_movement == 'top')
                            {
                                ?> selected="selected" <?php } ?>>Top</option>
                            <option value="bottom" <?php
                            if($this->configuration->wall_movement == 'bottom')
                            {
                                ?> selected="selected" <?php } ?>>Bottom</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">WALL BACK SIDE SETTINGS</td>
                </tr>





                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Back Box Background Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="caption_background_color" id="caption_background_color" size="50" maxlength="250" value="<?php echo $this->configuration->caption_background_color; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Wall Caption Font Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_name_font_color" id="wall_name_font_color" size="50" maxlength="250" value="<?php echo $this->configuration->wall_name_font_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Wall Caption Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_name_font_size" id="wall_name_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->wall_name_font_size; ?>" />
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Margin Between Title and Description'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="margin_bet_title_desc" id="margin_bet_title_desc" size="50" maxlength="250" value="<?php echo $this->configuration->margin_bet_title_desc; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Description Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="caption_desc_color" id="caption_desc_color" size="50" maxlength="250" value="<?php echo $this->configuration->caption_desc_color; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Description Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="desc_font_size" id="desc_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->desc_font_size; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Margin Between Description and Link'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="margin_bet_desc_link" id="margin_bet_desc_link" size="50" maxlength="250" value="<?php echo $this->configuration->margin_bet_desc_link; ?>" />
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Link Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="caption_link_color" id="caption_link_color" size="50" maxlength="250" value="<?php echo $this->configuration->caption_link_color; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Link Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="link_font_size" id="link_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->link_font_size; ?>" />
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Link Open Type'); ?>:
                        </label>
                    </td>
                    <td>
                        <select name="link_open_type" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->link_open_type == 1)
                            {
                                ?> selected="selected" <?php } ?>>Same Window</option>
                            <option value="0" <?php
                            if($this->configuration->link_open_type == 0)
                            {
                                ?> selected="selected" <?php } ?>>Blank Window</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('You want to Display Original Link or Replace with Word'); ?>:
                        </label>
                    </td>
                    <td>
                        <select name="link_or_click" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->link_or_click == 1)
                            {
                                ?> selected="selected" <?php } ?>>Yes</option>
                            <option value="0" <?php
                            if($this->configuration->link_or_click == 0)
                            {
                                ?> selected="selected" <?php } ?>>No</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Enter Word that display Replace Of link'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="link_word" id="link_word"  value="<?php echo $this->configuration->link_word; ?>" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">OTHER SETTINGS</td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Title Background Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_section_title_background_color" id="cat_section_title_background_color" size="50" maxlength="250" value="<?php echo $this->configuration->cat_section_title_background_color; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Title Font Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_sec_title_font_color" id="cat_section_title_font_color" size="50" maxlength="250" value="<?php echo $this->configuration->cat_sec_title_font_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Section Title Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="cat_sec_title_font_size" id="cat_sec_title_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->cat_sec_title_font_size; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Wall Section Title Background Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_sec_title_bg_color" id="wall_sec_title_bg_color" size="50" maxlength="250" value="<?php echo $this->configuration->wall_sec_title_bg_color; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Wall Section Title Font Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_sec_title_font_color" id="wall_sec_title_font_color" size="50" maxlength="250" value="<?php echo $this->configuration->wall_sec_title_font_color; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Wall Section Title Font Size'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_sec_title_font_size" id="cat_sec_title_font_size" size="50" maxlength="250" value="<?php echo $this->configuration->cat_sec_title_font_size; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            General Font Family
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="general_font_family" id="general_font_family" size="50" maxlength="250" value="<?php echo $this->configuration->general_font_family; ?> " />
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Enable border to whole section? '); ?>:
                        </label>
                    </td>
                    <td>
                        <select name="border_status" style="width:100px;">
                            <option value="1" <?php
                            if($this->configuration->border_status == 1)
                            {
                                ?> selected="selected" <?php } ?>>Yes</option>
                            <option value="0" <?php
                            if($this->configuration->border_status == 0)
                            {
                                ?> selected="selected" <?php } ?>>No</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Boder Color'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="border_color" id="border_color"  value="<?php echo $this->configuration->border_color; ?>" />
                    </td>
                </tr>


                <tr>
                    <td width="200" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Number of sponsorwall per page'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="wall_per_page" id="wall_per_page"  value="<?php echo $this->configuration->wall_per_page; ?>" />
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="admin_sponsor_config_heading">MODULE PURPOSE ONLY</td>
                </tr>
                <tr>
                    <td width="275" align="right" class="key">
                        <label for="greeting" style="width:260px; font-family:Calibri;" style="width:260px; font-family:Calibri;">
                            <?php echo JText::_('Module Category'); ?>:
                        </label>
                    </td>
                    <td>
                        <select id="default_category_module" class="inputbox" size="1" name="default_category_module" style="font-family:Calibri;">
                            <option value="0">All Categories</option>
                            <?php
                            foreach($this->Categories as $curr_cat)
                            {
                                echo '<option ';
                                if($curr_cat->id == $this->configuration->default_category_module)
                                {
                                    echo 'selected="selected"';
                                }
                                echo ' value="' . $curr_cat->id . '">' . $curr_cat->name . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>

            </table>
        </fieldset>
    </div>

    <div class="clr"></div>

    <input type="hidden" name="option" value="com_sponsorwall" />
    <input type="hidden" name="id" value="<?php echo $this->configuration->id; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="controller" value="configuration" />
</form>
