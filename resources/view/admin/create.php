<?php
require_once(__DIR__ . '/header.php');
?>
<div class="content-page">
    <div class="content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Bài Viết Blog</h4>
                    <form action="#" method="POST" id="form-create-post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Chủ đề:</label>
                            <input type="text" id="title" name="title" class="form-control">
                            <input type="text" id="title" name="action" value="createPost" hidden class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags:</label>
                            <select name="tags" class="form-control" id="tags"></select>
                            <!-- <input type="text" id="tags" name="tags" class="form-control" placeholder="Các thẻ..."> -->
                        </div>
                        <div class="mb-3">
                            <label for="customRadiocolor1" class="form-label">Công khai</label>
                            <input type="radio" id="customRadiocolor1" name="status" value="1" class="" checked>
                            <label for="customRadiocolor2" class="form-label">Nháp</label>
                            <input type="radio" id="customRadiocolor2" name="status" value="2" class="">
                        </div>


                        <div class="mb-3">
                            <label for="example-textarea" class="form-label">Text area</label>
                            <textarea class="form-control" name="content" id="create" rows="10"></textarea>
                        </div>
                        <button class="btn btn-info">Tạo Bài Viết</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

</div> <!-- End Content -->


<?php
require_once(__DIR__ . '/footer.php');
?>
<script>
    $(document).ready(function() {
        $('#tags').select2({
            tags: true,
            multiple: true,
            ajax: {
                url: "<?= $helper->base_url('ajax/getTags.php') ?>",
                data: function(params) {
                    var queryParam = {
                        q: params.term
                    }

                    return queryParam;
                },
                dataType: "json",
                processResults: function(data) {
                    console.log(data);
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.title,
                                id: item.id
                            }
                        })
                    }
                }

            }
        });
    });
</script>
<script>
    tinymce.init({
        selector: 'textarea#create',
        height: 500,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script src="plugin/ckfinder/ckfinder.js"></script> -->
<!-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: 'plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            }
        })
        .then(editor => {
            console.log(editor);
        })
        .catch(editor => {
            console.log(editor);
        });
</script> -->
<script>
    $("#form-create-post").submit(function(e) {
        e.preventDefault();
        var tags = $('#tags').select2('data');
        let a = '';
        tags.forEach(tag => {
            a += tag.text + ",";
        });
        // console.log(a);
        // return;
        $.ajax({
            type: "POST",
            url: "<?= $helper->base_url('ajax/process.php') ?>",
            data: $(this).serialize() + "&action=createPost&tags=" + a,
            dataType: "json",
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    alert("Tạo thành công !!!");
                } else {
                    alert("Đã xảy ra lỗi !!!");
                }
                window.location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    })
</script>

</html>