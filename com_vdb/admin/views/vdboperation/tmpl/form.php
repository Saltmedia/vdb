<?php
defined('_JEXEC') or die('Restricted access');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');
?>
<script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
        var form = document.adminForm;
        if (pressbutton == 'cancel') {
            submitform(pressbutton);
            return;
        }

        // do field validation
        if (form.title.value == "") {
            alert("<?php echo JText::_('Wall must have a title', true); ?>");
        } else if (form.desc.value == "0") {
            alert("<?php echo JText::_('Please Enter Description', true); ?>");
        } else if (form.url.value == "") {
            alert("<?php echo JText::_('You must have a url.', true); ?>");
        }

        else {
            submitform(pressbutton);
        }
    }
</script>
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
    <div class="col100">
        <fieldset class="adminform">
            <legend><?php echo JText::_('Details'); ?></legend>
            <table class="admintable">
                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
<?php echo JText::_('Title'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="title" id="title" size="32" maxlength="250" value="<?php echo $this->wall->title; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
<?php echo JText::_('URL'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="url" id="url" size="32" maxlength="250" value="<?php echo $this->wall->url; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
<?php echo JText::_('Description'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="desc" id="desc" size="32" maxlength="250" value="<?php echo $this->wall->desc; ?>" />
                    </td>
                </tr>



                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
<?php echo JText::_('Category'); ?>:
                        </label>
                    </td>
                    <td>
                        <select id="catid" class="inputbox" size="1" name="catid">
                            <?php
                            foreach($this->categories as $curr_cat)
                            {
                                echo '<option ';
                                if(isset($this->wall->catid))
                                {
                                    if($curr_cat->id == $this->wall->catid)
                                    {
                                        echo 'selected="selected"';
                                    }
                                }
                                echo ' value="' . $curr_cat->id . '">' . $curr_cat->name . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>



                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
<?php echo JText::_('Image'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="file" name="image" id="image"  value="<?php echo $this->wall->image; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            &nbsp;
                        </label>
                    </td>
                    <td>
                        <img src="<?php echo JURI::root() . 'components/com_sponsorwall/images/' . $this->wall->image; ?>" width="135" height="120"/>
                    </td>
                </tr>

            </table>
        </fieldset>
    </div>

    <div class="clr"></div>

    <input type="hidden" name="option" value="com_sponsorwall" />
    <input type="hidden" name="id" value="<?php echo $this->wall->id; ?>" />
    <input type="hidden" name="task" value="" />
</form>
