<?php
// mensagem de status de cadastro
session_start();
if (isset($_SESSION['mensagem'])) :
?>
    <script>
        onload = () => {


            var option = {
                animation: true,
                delay: 2000
            };

            function showToast() {
                var toastElList = [].slice.call(document.querySelectorAll('.toast'))
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl, option)
                })
                toastElList.show();
            }
            showToast();
        }
    </script>
<?php
endif;
session_unset(); ?>