@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Form Elements</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Product</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form method="post" action="">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" required="required" class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Price *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="price" required="required" class="form-control ">
                            </div>
                        </div>


                        <div class="form-group item">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Categories *</label>
                            <div class="col-md-6 col-sm-6 col-form-label">
                                <select class="form-control">
                                    <option>Choose option</option>
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group item">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Status *</label>
                            <div class="col-md-6 col-sm-6 col-form-label">
                                <select class="form-control">
                                    <option>Choose option</option>
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Description *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label>
                                    <textarea style="width: 100%" name="description" rows="4" cols="50"></textarea>
                                </label>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Image *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label>
                                    <button id="upload_widget" class="cloudinary-button">Upload files</button>
                                </label>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Detail content *</label>
                            <div class="col-md-6 col-sm-6">
                                <div class="x_content">
                                    <textarea name="detail"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
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
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'my_cloud_name',
                uploadPreset: 'my_preset'}, (error, result) => {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info);
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>
    <script>
        CKEDITOR.editorConfig = function( config ) {
            config.toolbar = [
                { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
                { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                '/',
                { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                '/',
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                { name: 'about', items: [ 'About' ] }
            ];
        };
        CKEDITOR.replace( 'detail' );
    </script>
@endsection
