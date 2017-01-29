
<div class="block full">

        <div class="block-title">
            <h2>Iraq Club</h2>
        </div>

        <?php $this->load->view('common/message');?>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width:100px;">Serial No</th>
                    <th>Description</th>
                    <th style="width: 125px;" class="text-center"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($query as $k=>$row)
                {?>
                <tr >
                    <td class="text-center"><?php echo $k+1;?></td>
                    <td><?php echo $row['description'];?></td>
                    <td class="text-center">
                        <a href="<?php echo base_url('admin/iraq_club/edit/'.$row['id']);?>" data-toggle="tooltip" title="edit" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="#" data-href="<?php echo base_url('admin/iraq_club/delete/'.$row['id']);?>" data-toggle="modal" data-name="Iraq Club" title="delete" data-target="#confirm-delete" class="btn btn-effect-ripple btn-xs btn-danger del-row"><i class="fa fa-times"></i>
                        </a>

                    </td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


<div id="confirm-delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><span id="del_title"></span></h4>
            </div>
            <div class="modal-body">
                Are you sure you want to delete???
            </div>
            <div class="modal-footer">

                <a class="btn btn-effect-ripple btn-danger">Delete</a>
                <button type="button"  data-dismiss="modal"class="btn btn-effect-ripple btn-default" data-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/admin/js/pages/uiTables.js');?>"></script>
<script>$(function(){ UiTables.init(); });</script>

<script type="text/javascript">

    $(function(){
        $('a.del-row').click(function(e) {
            var name = $(this).attr('data-name');
            $('span#del_title').html(name);
        });
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-danger').attr('href', $(e.relatedTarget).data('href'));
    });
</script>





