import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
import Toastify from "toastify-js";

(function (cash) {
    "use strict";

    cash("#remove-image").on("click", function () {
        cash("#preview-image").attr("src", '/dist/images/Blank-avatar.png');
        cash("#remove-image").hide();
        cash("#image").val(null);
    });

    cash("#image").on("change", function () {
        var file = cash(this).get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                cash("#preview-image").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }

        cash("#remove-image").show();
    });

    cash(".delete-form").on("submit", function (e) {
        
        var form = this;
        e.preventDefault();

        Swal.fire({
            title: 'Сонгосон мэдээллийг устгах хүсч байна уу?',
            text: "Баазаас бүр мөсөн устгагдах болохыг анхаарна уу!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Цуцлах',
            confirmButtonText: 'Тийм устгана!'  

        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }else{
                Toastify({
                    text: "Устгах үйлдлийг цуцаллаа!",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "bottom",
                    position: "right",
                    backgroundColor: "#D32929",
                    stopOnFocus: true,
                }).showToast();
            }
        })
    });


})(cash);

