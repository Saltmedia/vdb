<?php
defined('_JEXEC') or die('Restricted access');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">

    <div id="filter-bar" class="btn-toolbar">
        <div class="filter-search btn-group pull-left">
            <label for="filter_search" class="element-invisible"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
            <input placeholder="SEARCH IN TITLE" type="text" name="search_cat" id="search_cat" value="<?php echo $this->escape($this->lists['search_cat']); ?>" title="<?php echo JText::_('COM_VDB_SEARCH_WALL'); ?>" />
        </div>

        <div class="btn-group pull-left">
            <button type="submit" class="btn hasTooltip" title="SEARCH"><i class="icon-search"></i></button>
            <button type="button" class="btn hasTooltip" title="CLEAR" onclick="document.id('search_cat').value = ''; document.id('filter_location_id').value = ''; document.id('filter_cause_id').value = ''; document.id('filter_state').value = '';
                    this.form.submit();"><i class="icon-remove"></i></button>
        </div>

        <div class="btn-group pull-right">
            <?php
            global $option;
            $app = JFactory::getApplication('administrator');
            $filter_causeid = $app->getUserStateFromRequest($option . 'filter_cause_id', 'filter_cause_id', 0, 'int');
			$filter_locationid = $app->getUserStateFromRequest($option . 'filter_location_id', 'filter_location_id', 0, 'int');
            ?>
            <select name="filter_cause_id" id="filter_cause_id" class="inputbox" onchange="this.form.submit()">
                <option value=""><?php echo JText::_('COM_VDB_FILTER_CAUSE'); ?></option>
                <?php
                foreach($this->cause as $cause)
                {
                    ?>
                    <option value="<?php echo $cause->id; ?>" <?php
                    if($filter_causeid == $cause->id)
                    {
                        ?> selected="selected" <?php } ?>> <?php echo $cause->name; ?></option>
                        <?php } ?>
            </select>
		<select name="filter_location_id" id="filter_location_id" class="inputbox" onchange="this.form.submit()">
                <option value=""><?php echo JText::_('- Select Location -'); ?></option>
                <?php
                foreach($this->location as $location)
                {
                    ?>
                    <option value="<?php echo $location->id; ?>" <?php
                    if($filter_locationid == $location->id)
                    {
                        ?> selected="selected" <?php } ?>> <?php echo $location->name; ?></option>
                        <?php } ?>
            </select>
            <?php
            echo $this->lists['state'];
            ?>
        </div>
    </div>
    <div class="clearfix"> </div>



    <table class="table table-striped" id="articleList">
        <thead>
            <tr>

                <th width="1%" class="hidden-phone">
                    <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
                </th>

                <th>
                    <?php echo JText::_('Name'); ?>
                </th>

                <th>
                    <?php echo JText::_('Cause'); ?>
                </th>
				<th>
                    <?php echo JText::_('Location'); ?>
                </th>


                <th style="text-align: center">
                    <?php echo JText::_('Published'); ?>
                </th>


            </tr>
        </thead>
        <?php
        $k = 0;
        for($i = 0, $n = count($this->items); $i < $n; $i++)
        {
            $row = &$this->items[$i];
            $checked = JHTML::_('grid.id', $i, $row->id);
            $link = JRoute::_('index.php?option=com_vdb&controller=organization&task=edit&cid[]=' . $row->id);
            $published = JHTML::_('grid.published', $row, $i);

            ?>
            <tr class="<?php echo "row$k"; ?>">

                <td>
                    <?php echo $checked; ?>
                </td>

                <td align="center">
                    <a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
                </td>

                <td align="center">
                    <?php echo $row->cause; ?>
                </td>
                <td align="center">
                    <?php echo $row->location; ?>
                </td>
                <td style="text-align: center">
                    <?php echo $published; ?>
                </td>
            </tr>
            <?php
            $k = 1 - $k;
        }
        ?>
        <tr><td colspan="7"><?php echo $this->pagination->getListFooter(); ?></td></tr>
    </table>


    <input type="hidden" name="option" value="com_vdb" />
    <input type="hidden" name="controller" value="organization" />
				<input type="hidden" name="view" value="organizations" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />

			
    <?php echo JHTML::_('form.token'); ?>
</form>
<style>
    .btn-micro
    {
        font-size: 12px !important;
        line-height: 10px !important;
        padding: 4px !important;
    }
</style>
