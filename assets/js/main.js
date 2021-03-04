 //lert('test');

 $(document).on("submit",
     "form.js-register",
     function(event) {
         event.preventDefault();
         //var $form = $(this);
         var _error = $(".js-error", _form);
         var _form = $(this);
         var data = {
             email: $("input[type='email']", _form).val(),
             password: $("input[type='password']", _form).val()
         };
         if (data.email.length < 16) {
             _error.text("Please enter email address").show();
             return false;
         } else if (password.length < 28) {
             _error.text("Please enter a passphrase that is less 28 chac long").show();
             return false;
         }
         _error.hide();
         $.ajax({
             type: 'POST',
             url: '/ajax/register.php',
             data: dataObj,
             dataType: 'json',
             async: true,



         }).done(function ajaxDone(data) {
             console.log(data);
             if (data.redirect !== undefined) {
                 window.location = data.redirect;
             }
         }).fail(function ajaxFailed(e) {
             console.log(data);
         }).always(function ajaxAlwaysDoThis(data) {
             console.log('Always');
         });
         console.log(data);
         alert('form submitted');
         return false;

     });