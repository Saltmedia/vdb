<?php defined('_JEXEC') or die('Restricted access'); ?>
<script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
        var form = document.adminForm;
        if (pressbutton == 'cancel') {
            submitform(pressbutton);
            return;
        }

        // do field validation
        if (form.name.value == "") {
            alert("<?php echo JText::_('Category must have a name', true); ?>");
        } else if (form.desc.value == "0") {
            alert("<?php echo JText::_('Please enter Description', true); ?>");
        } else {
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
                            <?php echo JText::_('Category name'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="name" id="name" size="53" maxlength="250" value="<?php echo $this->category->name; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Category Description'); ?>:
                        </label>
                    </td>
                    <td>
                        <textarea name="desc" id="desc" cols="30" rows="5"><?php echo $this->category->desc; ?></textarea>
                    </td>
                </tr>


                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Image'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="file" name="image" id="image"  value="<?php echo $this->category->image; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            &nbsp;
                        </label>
                    </td>
                    <td>
                        <img src="<?php echo JURI::root() . 'components/com_sponsorwall/images/category_images/' . $this->category->image; ?>" width="135" height="120"/>
                    </td>
                </tr>

            </table>
        </fieldset>
    </div>

    <div class="clr"></div>

    <input type="hidden" name="option" value="com_sponsorwall" />
    <input type="hidden" name="id" value="<?php echo $this->category->id; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="controller" value="category" />
</form>
