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
            <input placeholder="SEARCH IN TITLE"
                   type="text"
                   name="search_cat"
                   id="search_cat"
                   value="<?php echo $this->escape($this->lists_cat['search_cat']); ?>"
                   title="CATEGORY SEARCH"
                   />
        </div>

        <div class="btn-group pull-left">
            <button type="submit" class="btn hasTooltip" title="SEARCH">
                <i class="icon-search"></i>
            </button>
            <button type="button" class="btn hasTooltip" title="CLEAR" onclick="document.id('search_cat').value = '';
                    this.form.submit();"><i class="icon-remove"></i></button>
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
                    <?php echo JText::_('Category Name'); ?>
                </th>

                <th>
                    <?php echo JText::_('Category Desc'); ?>
                </th>

                <th>
                    <?php echo JText::_('Category Image'); ?>
                </th>
                <?php //To ordering NIRAJ ?>
                <th  style="width:100px" align="left">
                    <?php echo JHTML::_('grid.sort', 'Order', 'c.ordering', $this->lists_cat['order_Dir_cat'], $this->lists_cat['order_cat']); ?>
                    <?php echo JHTML::_('grid.order', $this->items); ?>
                </th>

<!--                <th width="" class="hidden-phone">
                <?php echo JHtml::_('grid.sort', '<i class="icon-menu-2"></i>', 'c.ordering', $this->lists_cat['order_Dir_cat'], $this->lists_cat['order_cat'], null, 'asc', 'JGRID_HEADING_ORDERING'); ?>
                </th>-->
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
            $link = JRoute::_('index.php?option=com_sponsorwall&controller=category&task=edit&cid[]=' . $row->id);
            $published = JHTML::_('grid.published', $row, $i);
            $ordering = ($this->lists_cat['order_cat'] == 'c.ordering');
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="vertical-align: middle">
                    <?php echo $checked; ?>
                </td>
                <td style="vertical-align: middle">
                    <?php echo $row->id; ?>
                </td>

                <td style="vertical-align: middle">
                    <a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
                </td>
                <td style="vertical-align: middle">
                    <?php echo $row->desc; ?>
                </td>
                <td style="vertical-align: middle">
                    <?php
                    $app = JFactory::getApplication();
                    $admin_path = JUri::base();
                    $front_path = str_replace('administrator/', '', $admin_path);
                    $img_link = $front_path . 'components/com_sponsorwall/images/category_images/' . $row->image;
                    ?>
                    <img src="<?php echo $img_link; ?>" style='height:50px;width: 50px;'/>
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
                <td style="vertical-align: middle;text-align: center">
                    <?php echo $published; ?>
                </td>
            </tr>
            <?php
            $k = 1 - $k;
        }
        ?>
    </table>
    <!--    </div>-->

    <input type="hidden" name="option" value="com_sponsorwall" />
    <input type="hidden" name="task" value="search" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order_cat" value="<?php echo $this->lists_cat['order_cat']; ?>" />
    <input type="hidden" name="filter_order_Dir_cat" value="<?php echo $this->lists_cat['order_Dir_cat']; ?>" />
    <input type="hidden" name="controller" value="category" />



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
