<?php
@session_start();
?>

<header class="navbar<?php if ($template['header_navbar']) { echo ' ' . $template['header_navbar']; } ?><?php if ($template['header']) { echo ' '. $template['header']; } ?>">

    <ul class="nav navbar-nav-custom">

        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
            </a>
        </li>


        <?php if ($template['header_link']) { ?>
            <?php if($this->session->userdata('user_session')){ ?>
                <li class="hidden-xs animation-fadeInQuick">
                    <a href=""><strong><?php echo $template['header_link'].' '.strtoupper($user['username']); ?></strong></a>
                </li>
            <?php }
        } ?>
    </ul>

    <ul class="nav navbar-nav-custom pull-right">

        <li>
            <a href="<?php echo base_url();?>">
                <i class="fa fa-globe"> </i> Visit Site
            </a>
        </li>


        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                <i class="fa fa-users"> </i> My Account
            </a>
        </li>

        <li>
            <?php if($this->session->userdata('user_session')){ ?>
                <a href="<?php echo base_url('user/logout');?>">
                    <i class="fa fa-power-off"></i> Log out
                </a>
            <?php } ?>
        </li>
    </ul>

</header>

