<?php if(isset($message)){ ?>
    <div class="alert alert-info alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&chi;</button>
        <?php
        echo $message;
        ?>
    </div>
    <?php
}?>

<?php if(validation_errors()){?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&chi;</button>
        <?php
        echo validation_errors();
        ?>
    </div>
<?php }?>

<?php //if ($this->session->flashdata('message')) { ?>
<!--    <div class="alert alert-info alert-dismissable">-->
<!--        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&chi;</button>-->
<!--        --><?php
//        echo $this->session->flashdata('message');
//        ?>
<!--    </div>-->
<!--    --><?php
//} ?>
