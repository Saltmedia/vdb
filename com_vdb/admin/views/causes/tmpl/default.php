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
                    <?php echo JText::_('Name'); ?>
                </th>


                <th>
                    <?php echo JText::_('Category'); ?>
                </th>

            </tr>
        </thead>
        <?php
        $k = 0;
        for($i = 0, $n = count($this->items); $i < $n; $i++)
        {
            $row = &$this->items[$i];
            $checked = JHTML::_('grid.id', $i, $row->id);
            $link = JRoute::_('index.php?option=com_vdb&controller=cause&task=edit&cid[]=' . $row->id);
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
                    <a href="<?php echo $link; ?>"><?php echo $row->cause_category; ?></a>
                </td>

            </tr>
            <?php
            $k = 1 - $k;
        }
        ?>
    </table>
    <!--    </div>-->

    <input type="hidden" name="option" value="com_vdb" />
    <input type="hidden" name="task" value="search" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order_cat" value="<?php echo $this->lists_cat['order_cat']; ?>" />
    <input type="hidden" name="filter_order_Dir_cat" value="<?php echo $this->lists_cat['order_Dir_cat']; ?>" />
    <input type="hidden" name="controller" value="cause" />



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
