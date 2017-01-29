<div class="col-md-3"></div>
<div class="row col-md-6">
    <div class="block">

        <div class="block-title">
            <h2>Invite to the Event</h2>
        </div>

        <?php $this->load->view('common/message'); ?>

        <form action="" method="post" class="form-horizontal form-bordered">

            <input type="hidden" name="client_id" id="client_id" value="<?php echo ($this->uri->segment(4) =='' ? $id : $this->uri->segment(4)); ?>"/>

            <div class="form-group">
                <label class="col-md-3 control-label" for="events">Events</label>

                <div class="col-md-9">
                    <select name="event_id[]" id="event_id" class="form-control select-chosen"
                            multiple data-placeholder="Please select">
                        <?php
                        foreach ($query as $k => $s) {
                            echo sprintf('<option value="%d">%s</option>', $s['id'], $s['title']);
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Submit
                    </button>
                    <button href="<?php echo base_url('admin/crm/invite'); ?>" type="reset"
                            class="btn btn-effect-ripple btn-danger"><i class="fa fa-times"></i> Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>





