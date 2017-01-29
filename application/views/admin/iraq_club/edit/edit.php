
<div class="row col-md-10">
    <div class="row">
        <div class="block" >
            <div class="block-title">
                <h2>Iraq Club</h2>
            </div>

            <?php $this->load->view('common/message');?>

            <form action="" method="post" class="form-horizontal form-bordered">

                <div class="form-group">
                    <label class="col-md-3 control-label" for="description">Description</label>
                    <div class="col-md-9">
                        <textarea id="description" name="description" class="form-control ckeditor"><?php echo $query['description'];?></textarea>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>

<script src="<?php echo base_url('assets/admin/ckeditor/ckeditor.js');?>"></script>












