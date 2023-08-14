<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>

    const currentYear = new Date();

    const year = currentYear.getFullYear();

    document.getElementById('currentYear').innerHTML = year;



    toastr.options = {

        "closeButton": true,

        "debug": false,

        "newestOnTop": false,

        "progressBar": true,

        "positionClass": "toast-top-right",

        "preventDuplicates": false,

        "onclick": null,

        "showDuration": "300",

        "hideDuration": "1000",

        "timeOut": "5000",

        "extendedTimeOut": "1000",

        "showEasing": "swing",

        "hideEasing": "linear",

        "showMethod": "fadeIn",

        "hideMethod": "fadeOut"

    }



    function formatNumeric(event) {

        const input = event.target.value.replace(/-/g, ''); // Remove existing hyphens

        const regex = /^[0-9]*$/;

        const maxLength = 63; // The maximum length of the formatted string



        if (!regex.test(input)) {

            // If the input doesn't match the regex, remove non-numeric characters

            const cleanInput = input.replace(/[^0-9]/g, '');

            event.target.value = formatAsNumeric(cleanInput.substr(0, maxLength));

        } else {

            event.target.value = formatAsNumeric(input.substr(0, maxLength));

        }

    }



    function formatAsNumeric(input) {

        // Add hyphens after every 7 characters

        const formattedInput = input.replace(/(\d{7})(?=\d)/g, '$1-');

        return formattedInput;

    }



    const textarea = document.getElementById('iid');

    textarea.addEventListener('input', formatNumeric);

    </script>

</body>



</html>