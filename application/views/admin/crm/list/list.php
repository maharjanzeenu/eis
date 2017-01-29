
<div class="block full">

        <div class="block-title">
            <h2>Clients Table</h2>
        </div>

        <?php $this->load->view('common/message');?>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width:75px;">Serial No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Date of Incorporation</th>
                    <th style="width: 125px;" class="text-center"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($query as $k=>$row)
                {?>
                <tr >
                    <td class="text-center"><?php echo $k+1;?></td>
                    <td><strong><?php echo $row['first_name'];?></strong></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['company'];?></td>
                    <td><?php echo date('d/m/Y',strtotime($row['inc_date']));?></td>
                    <?php $events = $this->admin_model->table_fetch_rows('crm_invite',array('client_id'=>$row['id']));
                    foreach($events as $key=>$event){
                        $event_details = $this->admin_model->table_fetch_row('events',array('id'=>$event['event_id']));
                        $event_name[] = $event_details['title'];
                        }
                       $names = implode("<br/>",$event_name);?>

                    <td class="text-center">

                    <a href="<?php echo base_url('admin/crm/invite/'.$row['id']);?>" data-toggle="tooltip" title="invite" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-external-link-square"></i></a>

                      <a href="#modal-fade" title="view events assigned" class="btn btn-effect-ripple btn-xs btn-info view-modal" data-toggle="modal" data-name="<?php echo $row['first_name'].' '.$row['last_name'];?>" data-events ="<?php echo $names;?>">
                            <i class="fa fa-eye"></i>
                        </a>

                   
					<a href="<?php echo base_url('admin/crm/edit/'.$row['id']);?>" data-toggle="tooltip" title="edit" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>

                        <a href="#" data-href="<?php echo base_url('admin/crm/delete/'.$row['id']);?>" data-toggle="modal" data-name="<?php echo $row['first_name'];?>" title="delete" data-target="#confirm-delete" class="btn btn-effect-ripple btn-xs btn-danger del-row"><i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
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
                <h3 class="modal-title"><strong>Event Details</strong></h3>
            </div>
            <div class="modal-body">
                <div class="box span3">
                    <div class="box-content">
                        <table class="table table-bordered">
                            <tbody>
                           <tr>
                                <td>Client Name</td>
                                <td id="name"></td>
                            </tr>
                            <tr>
                                <td>Events</td>
                                <td id="events"></td>
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
        $('a.view-modal').click(function(e){
            var name = $(this).attr('data-name');
            var events = $(this).attr('data-events');
            $('td#name').html(name);
            $('td#events').html(events);
        })
    });
 
    $(function(){
        $('a.del-row').click(function(e) {
            var title = $(this).attr('data-name');
            $('span#del_title').html(title);
        });
    });

    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-danger').attr('href', $(e.relatedTarget).data('href'));
    });
</script>





