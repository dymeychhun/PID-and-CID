<?php require_once 'template/head.php'; ?>

<audio id="notify">
    <source src="./assets/sound/Success.mp3" type="audio/mpeg">
</audio>
<?php require_once 'template/menu.php'; ?>
<div class="container bg-light p-3">
    <div class="row p-3 m-3 border rounded bg-white justify-content-center">
        <div class="col-12">
            <label for="" class="form-label">Enter product key(s) separated by line breaks(maximum 100 product keys) <span class="text-danger">*</span></label>
            <textarea name="prodKey" id="prodKey" cols="30" rows="10" placeholder="93MGM-NTFKD-6BK63-R6FY.." class="form-control" maxlength></textarea>
            <span id="error" class="text-danger"></span>
            <!-- <div class="mt-2 d-flex justify-content-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switch">
                        <label class="form-check-label" for="flexSwitchCheckChecked">
                        	Just Get Description
                        </label>
                    </div>
                </div> -->
        </div>
        <div class="col-12 d-flex justify-content-center my-3">
            <button class="btn btn-danger" id="checkBtn"><span id="statusIcon">Check Data</span></button>
        </div>
        <div class="col-12">
            <textarea name="resKey" id="resKey" cols="30" rows="10" class="form-control" readonly></textarea>
        </div>
        <div class="pt-3">
            <span><i class="bi bi-clock-fill"></i> Speed: </span>
            <span id="speedTimer"></span>
        </div>
    </div>
    <?php require_once 'template/footer.php'; ?>
</div>
<script>
    $(document).ready(function() {

        $('#checkBtn').on('click', function(event) {
            event.preventDefault();
            var productKey = $('#prodKey').val().trim();
            if (productKey != '') {
                $('#checkBtn').addClass('disabled');
                $('#resKey').text('');
                var url = 'https://kichhoat24h.com/user-api/check-key?keys=' + productKey + '&token=VLbuvBpvUW1XZUJaay8vbDBiMGc3Yzg3Q1AvSWlCeGkrQmF3MGZsMUdkRVNieTFKaz0&mode=0';
                $.get(url, function(data) {
                    console.log(data.data);
                    var res = '';
                    for (var i = 0; i < data.data.length; i++) {
                        var result = data.data[i].response_message;
                        $('#resKey').text(res += result);
                    }
                    $('#checkBtn').removeClass('disabled');
                    var sound = $('#notify')[0];
                    sound.play();
                });

            } else {
                toastr.error("Please enter key...");
            }

        });

        // Prevent user input invalid format
        $("#prodKey").on("input", function() {
            var inputText = $(this).val().toUpperCase();
            var cleanedInput = inputText.replace(/[^A-Z0-9-]/g, "");

            if (cleanedInput.length > 0 && !isValidFormat(cleanedInput)) {
                $("#error").text("Invalid format. Format should be XXXXX-XXXXX-XXXXX-XXXXX-XXXXX.");
            } else {
                $("#error").text("");
            }

            var formattedInput = formatInput(cleanedInput);
            $(this).val(formattedInput);
        });

        function isValidFormat(input) {
            var regex = /^[A-Z0-9]{5}(-[A-Z0-9]{5}){4}$/;
            return regex.test(input);
        }

        function formatInput(input) {
            var formatted = input.replace(/-/g, "");
            formatted = formatted.replace(/(.{5})/g, "$1-");
            return formatted.slice(0, -1);
        }


    });
</script>
<?php require_once 'template/foot.php'; ?>