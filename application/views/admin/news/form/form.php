<div class="block">
    <div class="block-title">
        <h2>Add News</h2>
    </div>
    <?php if (isset($message)) { ?>
        <div class="alert alert-success alert-dismissable">
            <?php
            echo $message;
            ?>
        </div>
        <?php
    } ?>
    <form action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-xs-2 control-label" for="title">News Title</label>

            <div class="col-xs-6">
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="image">Image</label>

            <div class="col-xs-6">
                <input type="file" id="userfile" name="userfile" required>
                <img id="preview" src="#" alt="your image" height="150" width="150" style="display:none;"/>
            </div>
        </div>
        <input type="hidden" id="url" name="url" class="form-control">

        <div class="form-group">
            <label class="col-xs-2 control-label" for="news_date">News Date</label>

            <div class="col-xs-6">
                <input type="text" id="news_date" name="news_date" class="form-control input-datepicker"
                       data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-2 control-label" for="content">Short Description</label>
            <div class="col-xs-10">
                <textarea id="short_description" name="short_description" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="news_content">Content</label>

            <div class="col-xs-10">
                <textarea id="news_content" name="news_content" class="ckeditor" required></textarea>
            </div>
        </div>
        <div class="form-group ">
            <label class="col-xs-2 control-label" for="news_status">Status</label>

            <div class="col-md-4">
                <select id="news_status" name="news_status" class="form-control" size="1">
                    <option value="1">Enable</option>
                    <option value="0">Disable</option>
                </select>
            </div>
        </div>
        <div class="form-group form-actions">

            <div class="col-xs-2"></div>

            <div class="col-xs-4">

                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Submit
                </button>

                <button href="<?php echo base_url('admin/news/form'); ?>" type="reset"
                        class="btn btn-effect-ripple btn-danger">
                    <i class="fa fa-times"></i> Reset
                </button>

            </div>

        </div>

    </form>

</div>


<script src="<?php echo base_url('assets/admin/js/plugins/ckeditor/ckeditor.js'); ?>"></script>


<script type="text/javascript">

    $(function () {

        $('#title').keyup(function () {

            var title = $(this).val();

            if (title === '') {

                return;

            }


            title = title.toLowerCase();

            title = title.replace(/[^a-z0-9 ]+/g, '');

            title = title.replace('  ', ' ');


            var url = '/news-' + title.replace(/\s/g, '-') + '.html';

            $('#url').val(url);

        });

    });


    function readIMG(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();


            reader.onload = function (e) {

                $('#preview').attr('src', e.target.result);

                $('#preview').show();

            }


            reader.readAsDataURL(input.files[0]);

        }

    }


    $("#userfile").change(function () {

        readIMG(this);

    });

</script>









