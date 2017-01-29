<!-- Login Block -->
<div class="block animation-fadeInQuickInv">
    <!-- Login Title -->
    <div class="block-title">
        <h2><?= $this->lang->line('login_title'); ?></h2>
    </div>
    <!-- END Login Title -->

    <?php if (isset($message)) { ?>
        <div class="alert alert-danger alert-dismissable">
            <?php
            echo $message;
            ?>
        </div>
        <?php
    } ?>

    <?php if (validation_errors()) { ?>
        <div class="alert alert-danger alert-dismissable">
            <?php
            echo validation_errors();
            ?>
        </div>
    <?php } ?>

    <!-- Login Form -->
    <?php echo form_open("login/verify", 'class="form-horizontal"'); ?>

    <div class="form-group">
        <div class="col-xs-12">
            <label><?= $this->lang->line('username'); ?></label>
            <input type="text" id="email" name="email" class="form-control"
                   placeholder="<?= $this->lang->line('username'); ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <label><?= $this->lang->line('password'); ?></label>
            <input type="password" id="password" name="password" class="form-control"
                   placeholder="<?= $this->lang->line('password'); ?>">
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-12 text-right">
            <button type="submit"
                    class="btn btn-effect-ripple btn-sm btn-primary"> <?= $this->lang->line('cancel'); ?></button>
            <button type="submit"
                    class="btn btn-effect-ripple btn-sm btn-primary"> <?= $this->lang->line('authenticate'); ?></button>
        </div>

    </div>
    </form>
    <!-- END Login Form -->
</div>
<!-- END Login Block -->


