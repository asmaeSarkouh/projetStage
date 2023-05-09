$(document).ready(function() {
        $('#etat').change(function() {
            if($(this).is(':checked')) {
                $('#myInputDiv').show();
            } else {
                $('#myInputDiv').hide();
            }
        });
});

// const checkbox = document.getElementById('showInput');
// const inputWrapper = document.getElementById('inputWrapper');

// checkbox.addEventListener('change', function() {
//   if(this.checked) {
//     inputWrapper.style.display = 'block';
//   } else {
//     inputWrapper.style.display = 'none';
//   }
// });
