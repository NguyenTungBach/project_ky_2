@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Cập nhật sản phẩm</h3>
        </div>
    </div>
@endsection

@section('page-css')
    <style>
        .close-preview {
            font-size: 15px;
            position: absolute;
            right: 5px;
            top: -9px;
            z-index: 1000;
            cursor: pointer;
        }
    </style>
@endsection

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cập nhật sản phẩm</h2>
                    <div class="clearfix"></div>
                    @if ($errors->any())
                        <div class="alert " style="margin-top: 10px">
                            <h4 class="text-danger">List Errors</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="x_content">
                    <br/>
                    <form method="post" name="form" action="/admin/product/update?id={{$item['id']}}">
                        @csrf
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" class="form-control " value="{{$item->name}}">
                            </div>
                            @error('name')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Price *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="price" class="form-control" value="{{$item->price}}">
                            </div>
                            @error('price')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group item row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Categories *</label>
                            <div class="col-md-6 col-sm-6 col-form-label">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id==$item->category_id ?'selected':""}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Description *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label>
                                    <textarea style="width: 100%" name="description" rows="4" cols="50">{{$item->description}}</textarea>
                                </label>
                                @error('description')
                                <div class="text-danger col-12">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Image *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="hidden" class="form-control" name="thumbnail">
                                <button type="button" id="upload_widget" class="cloudinary-button mb-3">Upload files
                                </button>
                                <div id="preview-image">
                                    <div class="col-md-3 col-sm-3 position-relative" style="padding-left: 0 !important;">
                                        <a id="close_img" class="close-preview">&#10006;</a>
                                        <img src="{{$item->FirstImage}}"
                                             class="col-md-12 col-sm-12 img-thumbnail mr-2 mb-2 imagesChoice">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Detail content *</label>
                            <div class="col-md-6 col-sm-6">
                                <div class="x_content">
                                    <textarea name="detail">{{$item->detail}}</textarea>
                                </div>
                                @error('detail')
                                <div class="text-danger col-12">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="/admin/products"><button class="btn btn-primary" type="button">Back to list</button></a>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var form = document.forms['form']['thumbnail']
            var listImg = document.getElementById('preview-image')
            console.log(listImg)
            console.log(form);
            var myWidget = cloudinary.createUploadWidget({
                    // cloudName: 'hoangkien0601',
                    // uploadPreset: 'hwftk7ro'}, function (error, result) {
                    cloudName: 'dark-faith',
                    uploadPreset: 'nqbsybdh'}, (error, result) => {
                    if (!error && result && result.event === "success") {
                        console.log('Done! Here is the image info: ', result.info);
                        form.value =  result.info.secure_url + ',';
                        listImg.innerHTML = `
                    <div class="col-md-3 col-sm-3 position-relative" style="padding-left: 0 !important;">
                                        <a id="close_img" class="close-preview" onclick="deleteImage('${result.info.delete_token}','${result.info.secure_url}')">&#10006;</a>
                                        <img src="${result.info.secure_url}"
                                             class="col-md-12 col-sm-12 img-thumbnail mr-2 mb-2 imagesChoice">
                                    </div>
                       `
                        // console.log('Done! Here is the image info: ', result.info.url);
                        console.log('Done! Here is the image info: ', result.info.secure_url);
                    }
                }
            )

            document.getElementById("upload_widget").addEventListener("click", function(){
                myWidget.open();
            }, false);
        });

        $(document).on("click",'#close_img',function () {
            $(this).parent().hide();
        });

        function deleteImage(delete_token,secure_url){
            var src = secure_url;
            const url = "https://api.cloudinary.com/v1_1/dark-faith/delete_by_token"; // Nếu đổi tài khoản thì nhớ chú ý đổi cái api này
            $.ajax({
                url : url, // gửi ajax đến file result.php
                type : "POST", // chọn phương thức gửi là post
                data : { // Danh sách các thuộc tính sẽ gửi đi
                    token: delete_token
                },
                error: function (){
                    alert("Có lỗi xảy ra!");
                }
            });
            var array_thubmail_before = document.forms['form']['thumbnail'].value.split(',');
            array_thubmail_before.pop();
            // const obj = JSON.parse(src);
            // tìm đến những phần tử khác obj.secure_url
            const array_thubmail_after = array_thubmail_before.filter(thumbnail => {return thumbnail !== src});
            if (array_thubmail_after.length>0){
                document.forms['form']['thumbnail'].value = array_thubmail_after.join(',') + ',';
            } else{
                document.forms['form']['thumbnail'].value = "";
            }

            // console.log("Phần tử hiện tại là:", this );
            console.log("Giá trị trong thumbnail là:", document.forms['form']['thumbnail'].value);
        }

    </script>

    <script>
        CKEDITOR.editorConfig = function (config) {
            config.toolbar = [
                {
                    name: 'document',
                    items: ['Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates']
                },
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']},
                {
                    name: 'forms',
                    items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField']
                },
                '/',
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language']
                },
                {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {
                    name: 'insert',
                    items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']
                },
                '/',
                {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
                {name: 'colors', items: ['TextColor', 'BGColor']},
                {name: 'tools', items: ['Maximize', 'ShowBlocks']},
                {name: 'about', items: ['About']}
            ];
        };
        CKEDITOR.replace('detail');
    </script>
@endsection
