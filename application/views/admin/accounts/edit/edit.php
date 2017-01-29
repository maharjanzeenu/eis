<div class="col-md-3"></div>
<div class="row col-md-6">
           <div class="block" >
            <div class="block-title">
                <h2>Edit Administrator</h2>
            </div>

               <?php $this->load->view('common/message');?>


            <form action="" method="post" class="form-horizontal form-bordered">
                <input type="hidden" name="admin_id" id="admin_id" value="<?php echo $query['id'];?> "/>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Name</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $query['name'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $query['email'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="password">Password</label>
                    <div class="col-md-9">
                        <input type="password" id="password" name="password" class="form-control"  placeholder="Enter password to change" value="">
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
                            <option value="1" <?php echo ($query['status'] == '1' ? 'selected' : "");?> >Enabled</option>
                            <option value="0" <?php echo ($query['status'] == '0' ? 'selected' : "");?> >Disabled</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
                </div>
            </form>
           </div>
    </div>
