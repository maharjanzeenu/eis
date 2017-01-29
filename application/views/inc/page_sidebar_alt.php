<?php @session_start(); ?>

<div id="sidebar-alt" tabindex="-1" aria-hidden="true">

    <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>


    <div id="sidebar-scroll-alt">

        <div class="sidebar-content">

            <div class="sidebar-section">
                <h2 class="text-light">Profile</h2>
                <?php if($this->session->userdata('admin_session')){?>
                <form action="<?php echo base_url('admin/accounts/edit/'.$admin['id']);?>" method="post" class="form-control-borderless">
                    <div class="form-group">
                        <label for="admin_name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $admin['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="admin_email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $admin['email'];?>">
                    </div>
                    <div class="form-group">
                        <label for="admin_password">New Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter new Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_admin_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Retype new Password">
                    </div>

                    <div class="form-group remove-margin">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                    </div>
                </form>
                <?php } ?>
            </div>

        </div>

    </div>

</div>


