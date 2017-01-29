<div class="block full">
    <div class="block-title">
        <h2>Admin Accounts Table</h2>
    </div>

    <?php $this->load->view('common/message');?>

    <div class="table-responsive">
        <table id="example-datatable" class="table table-bordered table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">Serial No</th>
                <th>Admin Name</th>
                <th>Email</th>
                <th>Status</th>
                <th class="text-center" style="width: 135px;"><i class="fa fa-flash"></i></th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $k=>$row)
            {?>
                <div class="sortable">
                <tr>
                    <td class="text-center"><?php echo $k+1;?></td>
                    <td><strong><?php echo $row['name'];?></strong></td>
                    <td><?php echo $row['email'];?></td>
                    <?php if ($row['status']==1){?>
                        <td class="hidden-sm hidden-xs text-center"><a href="javascript:void(0)" class="label label-success">Enabled</a></td><?php } else {?>
                        <td class="hidden-sm hidden-xs text-center"><a href="javascript:void(0)" class="label label-danger">Disabled</a></td><?php } ?>

                    <td class="text-center">
                        <a href="#modal-fade" title="view" class="btn btn-effect-ripple btn-xs btn-info view-modal" data-toggle="modal" data-name="<?php echo $row['name'];?>" data-status="<?php echo $row['status'];?>" data-email="<?php echo $row['email'];?>" data-id="<?php echo $row['id'];?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="<?php echo base_url('admin/accounts/edit/'.$row['id']);?>" data-toggle="tooltip" title="edit" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>

                        <a href="#" data-href="<?php echo base_url('admin/accounts/delete/'.$row['id']);?>" data-toggle="modal" data-name="<?php echo $row['name'];?>" title="delete_accounts" data-target="#confirm-delete" class="btn btn-effect-ripple btn-xs btn-danger del-row"><i class="fa fa-times"></i>
                        </a>

                    </td>
                </tr>
                </div>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<div id="modal-fade" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title"><strong>Admin Details</strong></h3>
            </div>
            <div class="modal-body">
                <div class="box span3">
                    <div class="box-content">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td id="admin_id"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td id="admin_name"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td id="admin_email"></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td id="admin_status"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="confirm-delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><span id="del_name"></span></h4>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">

                <a class="btn btn-effect-ripple btn-danger">Delete</a>
                <button type="button" data-dismiss="modal"class="btn btn-effect-ripple btn-default" data-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('a.view-modal').click(function(e){
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var email = $(this).attr('data-email');
            var status = $(this).attr('data-status');
            $('td#admin_id').html(id);
            $('td#admin_name').html(name);
            $('td#admin_email').html(email);

            if(status==1)
            {
                $('td#admin_status').text("Enabled");
            }else
            {
                $('td#admin_status').text("Disabled");
            }

        })
    });

    $(function(){
        $('a.del-row').click(function(e) {
            var name = $(this).attr('data-name');
            $('span#del_name').html(name);
        });
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-danger').attr('href', $(e.relatedTarget).data('href'));
    });

</script>

<script src="<?php echo base_url('assets/admin/js/pages/uiTables.js');?>"></script>
<script>$(function(){ UiTables.init(); });</script>

