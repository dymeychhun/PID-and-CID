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
        <div class="pt-3">

        </div>
    </div>
    <?php require_once 'template/footer.php'; ?>
</div>
<script>
    $(document).ready(function() {

        $('#checkBtn').on('click', function(event) {
            event.preventDefault();
            $('#resKey').text('');
            $('#checkBtn').addClass('disabled');
            var productKey = $('#prodKey').val().trim();
            if (productKey != '') {

                $.ajax({
                    type: "POST",
                    url: "fetch.php",
                    data: {
                        'submit': true,
                        'key': productKey
                    },
                    success: function(response) {
                        var jdata = JSON.parse(response);
                        // console.log(jdata);
                        var res = '';
                        for (var i = 0; i < jdata.data.length; i++) {
                            var result = jdata.data[i].response_message;
                            $('#resKey').text(res += result);
                        }
                        $('#checkBtn').removeClass('disabled');
                        var sound = $('#notify')[0];
                        sound.play();
                    }
                });

            } else {
                toastr.error("Please enter key...");
            }

        });

    });
</script>
<?php require_once 'template/foot.php'; ?>