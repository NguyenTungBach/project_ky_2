$(document).ready(function () {

    let body = $('body');
    // thêm sản phẩm vào giỏ hàng bằng ajax
    $('.cart-add').on('click', function () {
        let id = $(this).data('id');
        let data = {
            id: id,
            quantity: 1
        };
        addToCart(data);
    });

    function addToCart(data) {
        $.ajax({
            url: `http://127.0.0.1:8000/cart/add`,
            method: 'POST',
            data: JSON.stringify(data),
            success: function (response) {
                let result = JSON.parse(response);
                let stringHtml = ``;
                let totalCart = 0;
                Object.entries(result).forEach(([key, value]) => {
                    stringHtml += cartHeader(value);
                    totalCart += value.unitPrice * value.quantity;
                });
                $('#cart-header').html(stringHtml);
                $('#total-cart').html(`
                    <p>${new Intl.NumberFormat().format(totalCart)} <small>VND</small></p>
                    `);
                $('.icon-header-item').attr('data-notify', Object.keys(result).length);
                messageSuccess();
            },
            error: function (request, error) {
                console.log("Request: " + JSON.parse(request));
                messageError();
            }

        });
    }

    // ========================== xoá sản phẩm ========================================

   body.on('click', '.remove-product', function () {
        let id = $(this).data('id');
        console.log(id);
        let data = {
            id: id,
        };
        $.ajax({
            url: 'http://127.0.0.1:8000/cart/remove',
            type: 'POST',
            data: JSON.stringify(data),

            success: function (data) {
                console.log('Data: ' + data);
                let result = JSON.parse(data);
                let stringHtmlHeader = ``;
                let stringHtmlTable = ``;
                let totalCart = 0;
                let arrayProduct = [];
                Object.entries(result).forEach(([key, value]) => {
                    stringHtmlHeader += cartHeader(value);
                    arrayProduct.push(value);
                    totalCart += value.unitPrice * value.quantity;
                });
                //handler giỏ hàng
                tableCart(arrayProduct);
                // handler html giỏ hàng header
                $('#cart-header').html(stringHtmlHeader);

                handlerSumCart(totalCart);


                $('.icon-header-item').attr('data-notify', Object.keys(result).length);
                document.getElementById('id01').style.display = 'none';
                $.toast({
                    icon: 'success',
                    heading: 'Thành công',
                    text: 'Xoá sản phẩm thành công.',
                    bgColor: '#81b03f',
                    textColor: 'white',

                });
            },
            error: function (request, error) {
                console.log("Request: " + JSON.parse(request));
                messageError();
            }
        });
    });
    //======================== xử lý nhập số lượng sản phảm trong giỏ hàng =======================
    // $('.update-cart').on('click',function () {
    //    alert($(this).val());
    // });


    //    ==================== add to cart in detail product ================================
    body.on('click', '.detail-up', function () {
        let value = parseInt($(this).prev().val()) + 1;
        $(this).prev().val(value);
        let quantity =  $(this).prev().val();

        $('.detail-add-cart').data('quantity',quantity);

    });
    body.on('click', '.detail-down', function () {
        let value = parseInt($(this).next().val()) - 1;
        if (value < 1) {
            $(this).next().val(1);
            $.toast({
                heading: 'Error',
                text: 'Cập nhật giỏ hàng thất bại, Số lượng sản phảm không được nhỏ hơn 1',
                icon: 'error',
            });
        } else {
            $(this).next().val(value);
            let quantity =  $(this).next().val();
            $('.detail-add-cart').data('quantity',quantity);
        }

    });

    $('.detail-add-cart').on('click', function () {
        let id = $(this).data('id');
        let quantity = $(this).data('quantity');
        let data = {
            id: id,
            quantity: quantity
        };
        addToCart(data);
    });


    //    ==================== quantity update product in cart ================================

    body.on('click', '.cart-up', function () {

        let value = parseInt($(this).prev().val()) + 1;
        $(this).prev().val(value);
        let id = $(this).prev().data('id');
        let quantity = $(this).prev().val();
        let data = {
            id: id,
            quantity: quantity
        };
        updateCart(data);
    });


    body.on('click', '.cart-down', function () {
        let value = parseInt($(this).next().val()) - 1;
        if (value < 1) {
            $(this).next().val(1);
            $.toast({
                heading: 'Error',
                text: 'Cập nhật giỏ hàng thất bại, Số lượng sản phảm không được nhỏ hơn 1',
                icon: 'error',
            });
        } else {
            $(this).next().val(value);
            let quantity = $(this).next().val();
            let id = $(this).next().data('id');
            let data = {
                id: id,
                quantity: quantity
            };
            updateCart(data);
        }
    });





    function handlerSumCart(totalCart) {
        $('#total-cart').html(`<p>${new Intl.NumberFormat().format(totalCart)} <small>VND</small></p>`);

        $('#tongPhu').html(`<p>${new Intl.NumberFormat().format(totalCart)} <small>VND</small></p>`);
        $('#tongTien').html(`${new Intl.NumberFormat().format(totalCart)} <small>VND</small>
                                ~ ${(Math.round((totalCart / 24000) * 100) / 100).toFixed(2)}`);

    }

    //cập nhật tăng giảm số lưởng sản phẩm trong giỏ hàng bằng ajax
    function updateCart(data) {
        $.ajax({
            url: 'http://127.0.0.1:8000/cart/update',
            type: 'POST',
            data: JSON.stringify(data),

            success: function (data) {
                console.log('Data: ' + data);
                let result = JSON.parse(data);
                let stringHtml = ``;
                let totalCart = 0;
                Object.entries(result).forEach(([key, value]) => {
                    stringHtml += cartHeader(value);
                    totalCart += value.unitPrice * value.quantity;
                });
                handlerSumCart(totalCart);
                $('#cart-header').html(stringHtml);

                $('.icon-header-item').attr('data-notify', Object.keys(result).length);
                messageSuccess();
            },
            error: function (request, error) {
                console.log("Request: " + JSON.parse(request));
                messageError();
            }
        });
    }

    function messageSuccess() {
        $.toast({
            icon: 'success',
            heading: 'Thành công',
            text: 'Cập nhật giỏ hàng thành công.',
            bgColor: '#81b03f',
            textColor: 'white',

        });
    }

    function messageError() {
        $.toast({
            heading: 'Error',
            text: 'Cập nhật giỏ hàng thất bại',
            icon: 'error',

        });
    }


    function tableCart(data) {
        let str = ``;
        data.forEach(ele => {
            console.log(ele);
            str += getHtmlProduct(ele);
        });

        if (data.length > 0) {
            $('#table-cart-ajax').html(`
                             <table class="table-shopping-cart">
                                <tr class="table_head bg12">
                                <th class="column-1 p-l-30">SẢN PHẨM</th>
                            <th class="column-2" style="width: 12%">GIÁ (VND)</th>
                            <th class="column-3" style="width: 18%">SỐ LƯỢNG</th>
                            <th class="column-4" style="width: 16%">TỔNG GIÁ (VND)</th>
                            <th class="column-4">Thay đổi</th>
                        </tr>
                            ${str}
                        </table>
                        `);
        } else if (data.length === 0) {
            $('#table-cart-ajax').html(`
                             <table class="table-shopping-cart">
                                <tr class="table_head bg12">
                                <th class="column-1 p-l-30">SẢN PHẨM</th>
                            <th class="column-2" style="width: 12%">GIÁ (VND)</th>
                            <th class="column-3" style="width: 18%">SỐ LƯỢNG</th>
                            <th class="column-4" style="width: 16%">TỔNG GIÁ (VND)</th>
                            <th class="column-4">Thay đổi</th>
                        </tr>
                           <div class="text-center alert alert-info">
                            <p>Giỏ hàng trống, xin vui lòng <a href="/products" class="text-primary">Nhấn vào đây</a> để
                                chọn vài sản phẩm bạn muốn </p>
                            </div>
                        </table>
                        `);
        }
    }

    function getHtmlProduct(data) {
        return `
              <!-- cart header item -->
                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="${data.thumbnail}" alt="IMG">
                            </div>
                            <span>${data.name}</span>

                        </div>
                    </td>
                    <td class="column-2">${new Intl.NumberFormat().format(data.unitPrice)}</td>
                    <td class="column-3">
                        <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                            <input type="hidden" name="id" value="${data.id}">
                            <div class="btn-num-product-down flex-c-m fs-29 cart-down"></div>
                            <input class="txt-m-102 cl6 txt-center num-product " type="number"
                                   name="quantity"
                                   data-id="${data.id}"
                                   value="${data.quantity}" min="1">
                            <div class="btn-num-product-up flex-c-m fs-16 cart-up"></div>
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            <span>${new Intl.NumberFormat().format(data.unitPrice * data.quantity)}</span>
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="dis-flex position-relative">
                            <button data-id="${data.id}" type="button"
                                    onclick="document.getElementById('id01').style.display='block'"
                                    class=" ml-2 pt-1 delete-product"
                                    style="border-radius: 2px; font-size: 14px; color: #a7a7a8">
                                Xóa
                            </button>
                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content" style="width: 650px;">
                                    <div class="w3-container p-3">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <p class="p-3">Bạn có chắc muốn xóa sản phẩm ${data.name} , khỏi giỏ hàng</p>
                                        <div class="float-right">
                                            <button data-id="${data.id}" type="button"
                                                    class="btn btn-secondary remove-product">Yes</button>
                                            <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="btn btn-success">No
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                    `;
    }

    // handler gio hang tren thanh header bang ajax tra ve
    function cartHeader(data) {
        return `
        <div class="flex-w flex-str m-b-25 " style="position: relative">
            <div class="size-w-15 flex-w flex-t">
                <a href="/product/${data.id}"
                   class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                    <img src="${data.thumbnail}" alt="PRODUCT">
                </a>

                <div class="size-w-17 flex-col-l">
                    <a href="/product/${data.id}" class="txt-s-108 cl3 hov-cl10 trans-04">${data.name}</a>
                    <span class="txt-s-101 cl9">${new Intl.NumberFormat().format(data.unitPrice)} <small>VND</small></span>
                    <span class="txt-s-109 cl12">x${data.quantity}</span>
                </div>
            </div>

            <div class="size-w-14 flex-b">
                <a href="/cart/delete/${data.id}"
                   style="position: absolute;top: 0;" class="lh-10">
                    <img src="/client/images/icons/icon-close.png" alt="CLOSE">
                </a>
            </div>
        </div>
        `;
    }

});
