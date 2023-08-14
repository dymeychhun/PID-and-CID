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
            <button class="btn btn-danger" id="checkBtn"><span id="statusIcon">Check Key</span></button>
        </div>
        <div class="col-12">
            <textarea name="resKey" id="resKey" cols="30" rows="10" class="form-control" readonly></textarea>
        </div>
        <!-- <div class="pt-3">
            <span><i class="bi bi-clock-fill"></i> Speed: </span>
            <span id="speedTimer"></span>
        </div> -->
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

    });
</script>
<?php require_once 'template/foot.php'; ?>