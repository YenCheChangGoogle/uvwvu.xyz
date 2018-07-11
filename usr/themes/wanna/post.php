<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<style>
    #body {
        display: block !important;
    }
</style>
<div class="mdui-container pageBody shadow-2 borR5px" style="margin: 0 auto; margin-top: 20px">
    <div class="mdui-typo pageHead">
        <h3><?php $this->title() ?></h3>
        <div class="taptap">
            <div>
                <span><i class="mdui-icon material-icons">check</i>Comment: <a><?php $this->commentsNum('%d'); ?></a></span>
                <span><i class="mdui-icon material-icons">remove_red_eye</i>Views: <a><?php get_post_view($this) ?></a></span>
                <span><i class="mdui-icon material-icons">change_history</i>Tags：<?php $this->category(','); ?></span>
            </div>
            <div class="pageDataRight">
                <span>
                    Author : <a><?php $this->author() ?></a></span>
                <span>
                    <i class="mdui-icon material-icons">date_range</i>Date : <?php $this->date('Y / F j'); ?></span>
            </div>

        </div>
    </div>
    <div class="mdui-divider" style="margin: 10px 0"></div>
    <div class="mdui-typo pageContent">
        <h4></h4>
        <p><?php $this->content('Continue Reading...'); ?></p>
    </div>
    <div class="pay justCenter">
        <button class="mdui-ripple mdui-btn shadow-1 payBtn" mdui-dialog="{target: '#payImg'}">
            <i class="mdui-icon material-icons" style="font-size: 18px">favorite</i> FAVORITE
    </div>
    <div class="mdui-dialog justCenter" id="payImg">
        <img src='<?php echo $this->options->pay ?>' width="100%" />
    </div>
</div>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
