@extends('admin.layout.master-layout')

@section('title')
    <title>Form</title>
@endsection

@section('breadcrumb')
    <header class="page-header">
        <h2>Form Create</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Form Create</span></li>
            </ol>

            <div class="sidebar-right-toggle" ></div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-md-12">
        <form name="register-form" action="#" method="post">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                    <h2 class="panel-title">Create</h2>
                </header>
                <div class="panel-body">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="name" placeholder="Name Product">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Description</label>
                            <textarea rows="4" cols="80" class="form-control" name="description" placeholder="Here can be your description"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label>Trademark</label>
                            <select class="form-control" name="trademark">
                                <option value="Coca" selected="">Coca</option>
                                <option value="Pepsi">Pepsi</option>
                                <option value="DC">DC</option>
                                <option value="Mavel">Mavel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label>Date</label>
                            <div class="input-group">
							<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
							</span>
                                <input name="date" type="text" data-plugin-datepicker="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Thumbnail</label>
                            <div id="preview-img" >
                            </div>
                            <input type="hidden" class="form-control" name="thumbnail" placeholder="Link Thumbnail">
                            <button type="button" id="upload_widget" class="cloudinary-button btn btn-info btn-fill">Upload files</button>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Detail content</label>
                            <textarea class="form-control" name="detail" id="editor" ></textarea>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button type="submit" class="btn btn-info btn-fill">Creat</button>
                    <a href="#"><button type="button" class="btn btn-danger pull-right">Cancel</button></a>
                </footer>
            </section>
        </form>
    </div>
@endsection

@section('script')
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dark-faith',
                uploadPreset: 'nqbsybdh'}, (error, result) => {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['register-form']['thumbnail'].value += result.info.secure_url + ',';

                    document.getElementById('preview-img').innerHTML += `<img src="${result.info.secure_url}" class="img-thumbnail img-200px">`;
                }
            }
        )

        $('#upload_widget').click(function () {
            myWidget.open();
        });
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
