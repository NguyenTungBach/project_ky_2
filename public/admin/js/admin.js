$(document).ready(function () {
//======================================= Btn On Top ==================================================================
//Get the button
    var mybutton = document.getElementById("btnToTop");

// When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
// ======================================= Btn On Top ==================================================================
// ======================================= Order table page ==================================================================
    $('.delete-search').on('click', function () {
        $(this).siblings().val('');
    });
    // id form category admin
    $('#delete-cate').on('click', function () {
        $(this).siblings().val('');
    });
    $('.icon-search').on('click', function () {
        $('#form-search').submit();
    });
    $('.sortOrder').change(function () {
        this.form.submit();
    });
    $('.sortProduct').change(function () {
        this.form.submit();
    });
    $('#select-category').change(function () {
        this.form.submit();
    });
    //date picker flatpick}}

    $('#picker').daterangepicker({
            opens: 'left'
        }, function (startDate, endDate, label) {
            $('#startDate').val(startDate.format('YYYY-MM-DD'));
            $('#endDate').val(endDate.format('YYYY-MM-DD'));
        });
    //update status
    $('.status-update').change(function () {
        this.form.submit();
    });
    // $('.status-update').change(function () {
    //     let id = $(this).data('id');
    //     let status = $('select[name=status-update]').val();
    //     let data = {
    //         id: id,
    //         status: status
    //     }
    //     $.ajax({
    //         url: `http://127.0.0.1:8000/admin/order/update/status`,
    //         method: 'POST',
    //         data: JSON.stringify(data),
    //         success: function (response) {
    //             message();
    //             console.log(response)
    //         },
    //
    //     });
    //
    // })
    //
    // function message() {
    //     $.toast({
    //         icon: 'success',
    //         heading: 'Thành công',
    //         text: 'Cập nhật trạng thái thành công.',
    //         bgColor: '#81b03f',
    //         textColor: 'white',
    //         position: 'top-right',
    //     })
    // }




















});
