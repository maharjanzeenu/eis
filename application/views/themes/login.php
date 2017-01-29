<?php
$template = $this->config->item('template');
$this->load->view('inc/template_start.php', array('template' => $template));//load css files
?>

    <!-- Page content -->
    <div id="login-container">
        <?php $this->load->view('user/login/form', $this->data); ?>
    </div>
    <!-- load js files -->
<?php $this->load->view('inc/template_scripts.php', array('template' => $template)); ?>

    <!-- Load and execute javascript code used only in this page -->
    <script src="<?php echo base_url('assets/admin/js/pages/readyLogin.js'); ?>"></script>
    <script src="<?php echo base_url('assets/user/js/jquery_validation.js'); ?>"></script>

    <script type="text/javascript">
        $('.form-horizontal').validate({
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages : {
                email : {
                    required : 'Email is required',
                    email : 'Email must be a valid email format'
                },

                password : {
                    required : 'Password is required',
                    minlength: 'Password must be at least 5 digits'
                }
            },
            submitHandler : function(form){
                return form.submit();
            }
        });
    </script>

<?php $this->load->view('inc/template_end.php', array('template' => $template)); ?>