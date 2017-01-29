<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adddress Book Project</title>
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/styles.css" type="text/css" rel="stylesheet" />

        <script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">My Address book</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home"></i>Home</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:50px">    
             <br>
             
             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
             
            <h2>CI Addressbook Import</h2>
                <form method="post" action="<?php echo base_url() ?>csv/importcsv" enctype="multipart/form-data">
                    <select name="table_name">
                        <option value="electrode_type" selected="selected">Electrode Type</option>
                        <option value="electrode_potential">Electrode Potential</option>
                        <option value="lithium_salt">Lithium salt</option>
                        <option value="lithium_salt_concentration">Lithium salt Concentration</option>
                        <option value="solvent">Solvent</option>
                        <option value="solvent_density">Solvent Density</option>
                        <option value="user">User</option>
                    </select>
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>
            
            <br><br>
            <table class="table table-striped table-hover table-bordered">
                <caption>Address Book List</caption>
                <thead>
                    <tr>
                        <th>user Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
<!--                    --><?php //if ($user == FALSE): ?>
<!--                        <tr><td colspan="4">There are currently No Addresses</td></tr>-->
<!--                    --><?php //else: ?>
<!--                        --><?php //foreach ($user as $row): ?>
<!--                            <tr>-->
<!--                                <td>--><?php //echo $row['username']; ?><!--</td>-->
<!--                                <td>--><?php //echo $row['email']; ?><!--</td>-->
<!--                            </tr>-->
<!--                        --><?php //endforeach; ?>
<!--                    --><?php //endif; ?>
                </tbody>
            </table>


            <hr>
            <footer>
                <p>&copy;My Address Book</p>
            </footer>

        </div>



    </body>
</html>
