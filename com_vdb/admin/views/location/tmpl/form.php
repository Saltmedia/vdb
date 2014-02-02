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
            alert("<?php echo JText::_('Location must have a name', true); ?>");
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
                            <?php echo JText::_('Location name'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="name" id="name" size="53" maxlength="250" value="<?php echo $this->location->name; ?>" />
                    </td>
                </tr>

                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            &nbsp;
                        </label>
                    </td>

                </tr>

            </table>
        </fieldset>
    </div>

    <div class="clr"></div>

    <input type="hidden" name="option" value="com_vdb" />
    <input type="hidden" name="id" value="<?php echo $this->location->id; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="controller" value="location" />
</form>
