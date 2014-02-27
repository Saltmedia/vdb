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
            <input placeholder="SEARCH IN TITLE" type="text" name="search" id="search" value="<?php echo $this->escape($this->lists['search']); ?>" title="<?php echo JText::_('COM_VDB_SEARCH_WALL'); ?>" />
        </div>

        <div class="btn-group pull-left">
            <button type="submit" class="btn hasTooltip" title="SEARCH"><i class="icon-search"></i></button>
            <button type="button" class="btn hasTooltip" title="CLEAR" onclick="document.id('search').value = '';
                    this.form.submit();"><i class="icon-remove"></i></button>
        </div>

        <div class="btn-group pull-right">
            <?php
            global $option;
            $app = JFactory::getApplication('administrator');
            $filter_catid = $app->getUserStateFromRequest($option . 'filter_category_id', 'filter_category_id', 0, 'int');
            ?>
            <select name="filter_category_id" class="inputbox" onchange="this.form.submit()">
                <option value=""><?php echo JText::_('JOPTION_SELECT_CATEGORY'); ?></option>
                <?php
                foreach($this->category as $cat)
                {
                    ?>
                    <option value="<?php echo $cat->id; ?>" <?php
                    if($filter_catid == $cat->id)
                    {
                        ?> selected="selected" <?php } ?>> <?php echo $cat->name; ?></option>
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
                <th width="5">
                    <?php echo JText::_('ID'); ?>
                </th>
                <th>
                    <?php echo JText::_('Title'); ?>
                </th>

                <th>
                    <?php echo JText::_('Link'); ?>
                </th>

                <th>
                    <?php echo JText::_('Click Counter'); ?>
                </th>

                <th style="width:100px" align="left">
                    <?php
                    echo JHTML::_('grid.sort', 'Order', 'a.ordering', $this->lists['order_Dir'], $this->lists['order']);
                    echo JHTML::_('grid.order', $this->items);
                    ?>
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
            $link = JRoute::_('index.php?option=com_vdb&task=edit&cid[]=' . $row->id);
            $published = JHTML::_('grid.published', $row, $i);
            $ordering = ($this->lists['order'] == 'a.ordering');
            ?>
            <tr class="<?php echo "row$k"; ?>">

                <td>
                    <?php echo $checked; ?>
                </td>
                <td>
                    <?php echo $row->id; ?>
                </td>
                <td align="center">
                    <a href="<?php echo $link; ?>"><?php echo $row->title; ?></a>
                </td>
                <td align="center">
                    <a href="<?php echo $row->url; ?>">
                        <?php echo $row->url; ?>
                    </a>
                </td>
                <td align="center">
                    <?php echo $row->click; ?>
                </td>
                <td class="order">
                    <div style="width:60px !important;float: left !important;margin-right:6px !important ;">

                        <div style="float:left !important;width:30px !important;height:15px !important;">
                            <?php
                            if($i != 0)
                            {
                                echo $this->pagination->orderUpIcon($i, ($row->id), 'orderup', 'Move Up', $ordering);
                            }
                            ?>
                        </div>
                        <div style="float:left !important;width:30px !important;height:15px !important;">
                            <?php
                            if($i != ($n - 1))
                            {
                                echo $this->pagination->orderDownIcon($i, 4, ($row->id), 'orderdown', 'Move Down', $ordering);
                            }
                            ?>
                        </div>
                    </div>
                    <div style="height:15px !important;float: left !important;">
                        <?php $disabled = $ordering ? '' : 'disabled="disabled"'; ?>
                        <input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" <?php echo $disabled ?> class="text_area" style="text-align:center !important;height:14px;width:20px !important;" />
                    </div>


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
