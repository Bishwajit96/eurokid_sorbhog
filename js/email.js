$("#contactForm").submit(function (event) {
    submitForm();
    return false;
});
function submitForm() {
    $.ajax({
        type: "POST",
        url: "email.php",
        cache: false,
        data: $('form#contactForm').serialize(),
        success: function (response) {
            if(response=='success'){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your enquiry has send',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  $(':input','#contactForm').not(':button, :submit, :reset, :hidden').val('');
                  
            }else{
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'No able to send the enquiry ',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
           
        },
        error: function () {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'No able to send the enquiry ',
                showConfirmButton: false,
                timer: 1500
              })
        }
    });
}
