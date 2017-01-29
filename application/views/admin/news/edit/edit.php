<div class="row">

    <div class="block">

        <div class="block-title">

            <h2>Edit News</h2>

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

            <input type="hidden" name="news_id" id="news_id" value="<?php echo $query[0]->id; ?> "/>


            <div class="form-group">

                <label class="col-xs-2 control-label" for="title">News Title</label>

                <div class="col-xs-6">

                    <input type="text" id="title" name="title" class="form-control"
                           value="<?php echo $query[0]->title; ?>" required>

                </div>

            </div>


            <div class="form-group">

                <label class="col-xs-2 control-label" for="image">Image</label>

                <div class="col-xs-6">

                    <input type="file" id="userfile" name="userfile" required>

                    <img id="preview" src="<?php echo base_url('uploads/news/' . $query[0]->image); ?>" alt="your image"
                         height="150" width="150"/>

                </div>

            </div>


            <div class="form-group">

                <label class="col-xs-2 control-label" for="news_date">News Date</label>

                <div class="col-xs-6">

                    <input required type="text" id="news_date" name="news_date" class="form-control input-datepicker"
                           data-date-format="yyyy-mm-dd" value="<?php echo $query[0]->news_date; ?>">

                </div>

            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label" for="content">Short Description</label>
                <div class="col-xs-10">
                    <textarea id="short_description" name="short_description" class="form-control"><?php echo $query[0]->short_description;?></textarea>
                </div>
            </div>
            <div class="form-group">

                <label class="col-xs-2 control-label" for="news_content">Content</label>

                <div class="col-xs-10">

                    <textarea id="news_content" name="news_content" class="ckeditor"
                              required><?php echo $query[0]->content; ?></textarea>

                </div>

            </div>


            <div class="form-group ">

                <label class="col-xs-2 control-label" for="news_status">Status</label>

                <div class="col-md-4">

                    <select id="news_status" name="news_status" class="form-control" size="1">

                        <?php

                        if ($query[0]->status == 1) {
                            ?>

                            <option value="1" selected="selected">Enable</option>

                            <option value="0">Disable</option>

                        <?php } else { ?>

                            <option value="1">Enable</option>

                            <option value="0" selected="selected">Disable</option>

                        <?php } ?>

                    </select>

                </div>

            </div>


            <div class="form-group form-actions">

                <div class="col-xs-2"></div>

                <div class="col-xs-4">

                    <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Submit
                    </button>

                </div>

            </div>

        </form>

    </div>

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

            }


            reader.readAsDataURL(input.files[0]);

        }

    }


    $("#userfile").change(function () {

        readIMG(this);

    });

</script>