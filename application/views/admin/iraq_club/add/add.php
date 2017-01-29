
<div class="row col-md-10">
<div class="block">

    <div class="block-title">
        <h2>Iraq Club</h2>
    </div>

   <?php $this->load->view('common/message');?>

    <form action="" method="post" class="form-horizontal form-bordered">

        <div class="form-group">
            <label class="col-md-3 control-label" for="description">Description</label>
            <div class="col-md-9">
                <textarea id="description" name="description" class="form-control ckeditor"></textarea>
            </div>
        </div>

        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Submit</button>
                <button href="<?php echo base_url('admin/iraq_club/add');?>"type="reset" class="btn btn-effect-ripple btn-danger"><i class="fa fa-times"></i> Reset</button>
            </div>
        </div>
    </form>
</div>
</div>

<script src="<?php echo base_url('assets/admin/ckeditor/ckeditor.js');?>"></script>


