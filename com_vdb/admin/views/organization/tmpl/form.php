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
            alert("<?php echo JText::_('Organization must have a name', true); ?>");
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
                            <?php echo JText::_('Organization name'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="name" id="name" size="53" maxlength="250" value="<?php echo $this->organization->name; ?>" />
                    </td>
                </tr>
				
                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Cause'); ?>:
                        </label>
                    </td>
                      <td>
                                  
            <select name="causeid" class="inputbox">
                <option value=""><?php echo JText::_('COM_VDB_FILTER_CAUSE'); ?></option>
                <?php
                foreach($this->cause as $cause)
                {
                    ?>
                    <option value="<?php echo $cause->id; ?>" <?php
                    if($this->organization->causeid == $cause->id)
                    {
                        ?> selected="selected" <?php } ?>> <?php echo $cause->name; ?></option>
                        <?php } ?>
            </select>
			
                    </td>
                </tr>
				
                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Location'); ?>:
                        </label>
                    </td>
                    <td>
                                  
            <select name="locationid" class="inputbox">
                <option value=""><?php echo JText::_('- Select Location -'); ?></option>
                <?php
                foreach($this->location as $location)
                {
                    ?>
                    <option value="<?php echo $location->id; ?>" <?php
                    if($this->organization->locationid == $location->id)
                    {
                        ?> selected="selected" <?php } ?>> <?php echo $location->name; ?></option>
                        <?php } ?>
            </select>
			
                    </td>
                </tr>
 <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Description'); ?>:
                        </label>
                    </td>
                    <td>
                        <textarea form="adminForm" name="desc" id="desc" cols="30" rows="5"><?php echo $this->organization->desc; ?></textarea>
                </tr>
				                </tr>
 <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Address'); ?>:
                        </label>
                    </td>
                    <td>
						<textarea form="adminForm" name="address" id="address" cols="30" rows="5"><?php echo $this->organization->address; ?></textarea>
                </tr>
				                <tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Contact name'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="contact" id="contact" size="53" maxlength="250" value="<?php echo $this->organization->contact; ?>" />
                    </td>
                </tr>
				<tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Phone Number'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="phone" id="phone" size="53" maxlength="250" value="<?php echo $this->organization->phone; ?>" />
                    </td>
                </tr>
				<tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Email Address'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="email" id="email" size="53" maxlength="250" value="<?php echo $this->organization->email; ?>" />
                    </td>
                </tr>				
								<tr>
                    <td width="100" align="right" class="key">
                        <label for="greeting">
                            <?php echo JText::_('Website'); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="text" name="website" id="website" size="53" maxlength="250" value="<?php echo $this->organization->website; ?>" />
                    </td>
                </tr><tr>				
</tr>
            </table>
        </fieldset>
    </div>

    <div class="clr"></div>

    <input type="hidden" name="option" value="com_vdb" />
    <input type="hidden" name="id" value="<?php echo $this->organization->id; ?>" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="controller" value="organization" />
</form>
