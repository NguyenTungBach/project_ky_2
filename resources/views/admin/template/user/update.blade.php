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
                    <h2>Cập nhật khách hàng có id = {{$item['id']}}</h2>
                    <div class="clearfix"></div>
                    @if ($errors->any())
                        <div class="alert " style="margin-top: 10px">
                            <h4 class="text-danger">Danh sách lỗi</h4>
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
                    <form method="post" name="form" action="/admin/user/update?id={{$item['id']}}">
                        @csrf
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Tên khách hàng *</label>
                            <div class="col-md-4 col-sm-4 ">
                                <input type="text" name="name" class="form-control " value="{{$item->name}}">
                            </div>
                            @error('name')
                                <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Địa chỉ *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="address" class="form-control" value="{{$item->address}}">
                            </div>
                            @error('address')
                                <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Số điện thoại *</label>
                            <div class="col-md-2 col-sm-2 ">
                                <input type="text" name="phone" class="form-control" value="{{$item->phone}}">
                            </div>
                            @error('phone')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>


                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Email *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label>{{$item->email}}</label>
                                <input type="hidden" name="email" class="form-control" value="{{$item->email}}">
                            </div>
                            @error('email')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>


                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Nhập mật khẩu mới *</label>
                            <div class="col-md-5 col-sm-5 ">
                                <input type="password" name="password" class="form-control">
                            </div>
                            @error('password')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Xác nhận mật khẩu mới *</label>
                            <div class="col-md-5 col-sm-5 ">
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            @error('confirmPassword')
                            <div class="text-danger col-md-12 col-sm-12 " style="margin: 5px 0 0 400px">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group item row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái *</label>
                            <div class="col-md-2 col-sm-2 col-form-label">
                                <select class="form-control" name="status">
                                    <option value="0" {{$item->status == \App\Enums\UserStatus::Deleted ? 'selected' : ''}}>Đã xóa</option>
                                    <option value="1" {{$item->status == \App\Enums\UserStatus::Existed ? 'selected' : ''}}>Tồn tại</option>
                                </select>
                            </div>
                        </div>

{{--                        <div class="item form-group">--}}
{{--                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Ảnh *</label>--}}
{{--                            <div class="col-md-6 col-sm-6 ">--}}
{{--                                <input type="hidden" class="form-control" name="thumbnail">--}}
{{--                                <button type="button" id="upload_widget" class="cloudinary-button mb-3">Upload files--}}
{{--                                </button>--}}
{{--                                <div id="preview-image">--}}
{{--                                    <div class="col-md-3 col-sm-3 position-relative" style="padding-left: 0 !important;">--}}
{{--                                        <a id="close_img" class="close-preview">&#10006;</a>--}}
{{--                                        <img src="{{$item->FirstImage}}"--}}
{{--                                             class="col-md-12 col-sm-12 img-thumbnail mr-2 mb-2 imagesChoice">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="/admin/users"><button class="btn btn-primary" type="button">Quay về danh sách khách hàng</button></a>
                                <button class="btn btn-info" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Cập nhật</button>
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
@endsection
