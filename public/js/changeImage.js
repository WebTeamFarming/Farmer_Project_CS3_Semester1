
window.addEventListener('load',function(){
    var image = document.getElementById('user-img');
    var fileImg = document.getElementById('profile-img');

    image.addEventListener("click",function() {
        fileImg.click();
        readURL();
    });


});


// $(document).ready(function(){
//     $("#profile-img").change(function(){
//         $("#form-img").removeClass("image-upload");
//         readURL(this);
//     });


//     });


    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#user-img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
