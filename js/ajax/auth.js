$(function() {
    $('form#login').submit(function(event) {
        event.preventDefault()

        var $this = this

        //button(true, '<i class="fa fa-circle-notch fa-spin"></i>', $this);

        $.post('/auth/login', $($this).serialize(),
            function(data) {
                if (!data.success) {

                    swal('Oops!', data.message, 'warning')
                } else {

                    swal('Sucesso!', data.message, 'success')

                    setTimeout(function() {
                        location.reload()
                    }, 2000)
                }
            },
            'json'
        )
    })
})