<?php require_once 'template/head.php'; ?>
    <audio id="notify">
        <source src="assets/sound/Success.mp3" type="audio/mpeg">
    </audio>
<?php require_once 'template/menu.php'; ?>  
<div class="container bg-light p-3">
        <div class="row p-3 m-3 border rounded bg-white justify-content-center">
            <div class="col-12">
                <label for="" class="form-label">Please Enter Your Installation ID <span class="text-danger">*</span></label>
                <textarea name="iid" id="iid" cols="30" rows="5" placeholder="Ex: 987685-876567-987469..." class="form-control"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-center my-3">
                <button class="btn btn-outline-danger" onclick="getCID()" id="getCid">Get Confirmation ID</button>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">A</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputA" aria-describedby="btnA" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnA" onclick="copyTextA()"><i id="iconsA" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">B</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputB" aria-describedby="btnB" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnB" onclick="copyTextB()"><i id="iconsB" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">C</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputC" aria-describedby="btnC" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnC" onclick="copyTextC()"><i id="iconsC" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">D</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputD" aria-describedby="btnD" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnD" onclick="copyTextD()"><i id="iconsD" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">E</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputE" aria-describedby="btnE" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnE" onclick="copyTextE()"><i id="iconsE" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">F</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputF" aria-describedby="btnF" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnF" onclick="copyTextF()"><i id="iconsF" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">G</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputG" aria-describedby="btnG" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnG" onclick="copyTextG()"><i id="iconsG" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <label for="" class="form-label">H</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="inputH" aria-describedby="btnH" readonly>
                        <button class="btn btn-secondary disabled" type="button" id="btnH" onclick="copyTextH()"><i id="iconsH" class="bi bi-clipboard"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 my-3">
                <div class="position-relative">
                    <textarea name="cid" id="cid" cols="30" rows="5" class="form-control w-100" readonly></textarea>
                    <div class="position-absolute top-0 end-0">
                        <button class="btn btn-sm" id="copyCid" onclick="copycidText()"><i class="bi bi-clipboard" id="IconsCID"></i></button>
                    </div>
                </div>
            </div>
            <div>
                <span><i class="bi bi-clock-fill"></i> Speed: </span>
                <span id="speedTimer"></span>
            </div>
        </div>
     <?php require_once 'template/footer.php'; ?>
    </div>
    <?php require_once 'template/foot.php'; ?>