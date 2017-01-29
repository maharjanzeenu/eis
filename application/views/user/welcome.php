<?php
echo 'welcome ' . $username . "<br>"; ?>
<?php if ($this->session->userdata('user_session')) { ?>
    <a href="<?php echo base_url('user/logout'); ?>">
        Logout</a>
<?php } ?>

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-vcenter">
            <tbody>
            <tr>
                <th><?= $this->lang->line('electrode_type');?></th>
                <th><?= $this->lang->line('solvent');?></th>
                <th><?= $this->lang->line('lithium_salt');?></th>
                <th><?= $this->lang->line('solvent_density');?></th>
                <th><?= $this->lang->line('lithium_salt_concentration');?></th>
                <th><?= $this->lang->line('electrode_potential');?></th>
                <th><?= $this->lang->line('upload');?></th>
            </tr>
            <tr>
                <td><select class="selectpicker" data-width="fit">
                        <option value="1">Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
                <td><select class="selectpicker" data-width="fit">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
