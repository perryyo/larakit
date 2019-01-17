$( document ).ready(function() {
    // PrettyPrint
    $('pre').addClass('prettyprint');
    prettyPrint();
    
    document.querySelector('.sweetalert-basic').onclick = function(){
        swal("یک پیام ساده !");
    };
    document.querySelector('.sweetalert-text').onclick = function(){
        swal("یک پیام ساده !", "افزونه زیبایی است !")
    };
    document.querySelector('.sweetalert-success').onclick = function(){
        swal("عالی بود !", "شما روی دکمه کلیک کردید !", "success")
    };
    document.querySelector('.sweetalert-warning').onclick = function(){
        swal({
            title: "آیا مطمئن هستید؟",
            text: "پس از حذف، فایل قابل بازیابی نیست !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            swal("Deleted!", "فایل شما با موفقیت حذف شد !", "success");
        });
    };
    document.querySelector('.sweetalert-cancel').onclick = function(){
        swal({
            title: "آیا مطمئن هستید؟",
            text: "پس از حذف، فایل قابل بازیابی نیست !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm){
            if (isConfirm) {
                swal("Deleted!", "فایل شما با موفقیت حذف شد !", "success");
            } else {
                swal("Cancelled", "فایل شما امن است :)", "error");
            }
        });
    };
    document.querySelector('.sweetalert-icon').onclick = function(){
        swal({
            title: "زیبا !",
            text: "این هم یک عکس سفارشی",
            imageUrl: "assets/images/thumbs-up.jpg"
        });
    };
    document.querySelector('.sweetalert-html').onclick = function(){
        swal({
            title: "عنوان &lt;small&gt;html&lt;/small>&gt;!",
            text: "یک پیام سفارشی &lt;span style='color:#F8BB86'&gt;html&lt;span&gt; در اینجا.",
            html: true
        });
    };
    document.querySelector('.sweetalert-timer').onclick = function(){
        swal({
            title: "بسته شدن خودکار",
            text: "من 2 ثانیه بعد بسته می شوم !",
            timer: 2000,
            showConfirmButton: false
        });
    };
    document.querySelector('.sweetalert-input').onclick = function(){
        swal({
            title: "یک ورودی !",
            text: "یک چیزی بنویسید : ",
            type: "input",   showCancelButton: true,
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "چیزی بنویسید"
        }, function(inputValue){
            if (inputValue === false) return false;

            if (inputValue === "") {
                swal.showInputError("باید چیزی بنویسید !");
                return false
            }

            swal("عالیه!", "شما نوشتید :  " + inputValue, "success");
        });
    };
});