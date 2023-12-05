<script src="{{BASE_URL . "public"}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{BASE_URL . "public"}}/assets/js/bootstrap.min.js"></script>
<script src="{{BASE_URL . "public"}}/assets/js/plugins.js"></script>
<script src="{{BASE_URL . "public"}}/assets/js/ajax-mail.js"></script>
<script src="{{BASE_URL . "public"}}/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        console.log($(".old-pass").value)
        $(".old-pass").change(function (){
            console.log(123)
        })
        // if(!$(".old-pass").val() && !$(".new-pass").val()){
        //     $("#btn-changepassword").disabled()
        // }
    })
</script>