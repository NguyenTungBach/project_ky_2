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
                    <form method="post" name="form" action="/admin/category/update?id={{$items['id']}}">
                        @csrf
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" class="form-control " value="{{$items->name}}">
                            </div>
                            @error('name')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Price *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="description" class="form-control" value="{{$items->description}}">
                            </div>
                            @error('description')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
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
