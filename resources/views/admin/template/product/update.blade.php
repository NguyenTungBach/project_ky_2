@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Cập nhật sản phẩm</h3>
        </div>
    </div>
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

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Image *</label>
                            <div class="col-md-9 col-sm-9 ">
                                <label>
                                    <button type="button" id="upload_widget" class="cloudinary-button">Upload files</button>
                                </label>
                            </div>
                            <div id="preview-image" class="col-2">
                                <img class="img-thumbnail" style="margin-left: 400px"  src="{{$item->FirstImage}}" alt="">
                            </div>
                            <input type="hidden" name="thumbnail" id="thumbnail" value="{{$item->thumbnail}}">
                            @error('thumbnail')
                            <div class="text-danger col-12" style="margin-left: 400px">* {{ $message }}</div>
                            @enderror
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
        var form = document.forms['form']['thumbnail']
        var listImg = document.getElementById('preview-image')
        console.log(listImg)
        console.log(form);
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'hoangkien0601',
                uploadPreset: 'hwftk7ro'}, function (error, result) {
                if (!error && result && result.event === "success") {
                    form.value =  result.info.secure_url
                    listImg.innerHTML = `<img class="img-thumbnail" style="margin-left: 400px"  src="${result.info.secure_url}" alt="">`
                    // console.log('Done! Here is the image info: ', result.info.url);
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
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
