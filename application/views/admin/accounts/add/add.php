<div class="row">
    <div class="col-md-3"></div>
    <div class="row col-md-6">
        <div class="block" >
            <div class="block-title">
                <h2>Add Administrator</h2>
            </div>

            <?php $this->load->view('common/message');?>

            <form action="" method="post" class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Name</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter admin name">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter admin email">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="password">Password</label>
                    <div class="col-md-9">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter admin password">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="confirm_password">Confirm Password</label>
                    <div class="col-md-9">
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Retype password">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="status">Status</label>
                    <div class="col-md-9">
                        <select id="status" name="status" class="form-control" size="1">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button>
                        <button type="reset" href="<?php echo base_url('admin/accounts/add');?>" class="btn btn-effect-ripple btn-danger"><i class="fa fa-times"></i> Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
