$(function() {
    $(document).on("change", "#imagem", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});


$('.preco').mask('#.##0,00', { reverse: true });