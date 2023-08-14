async function getCID() {

    // 487291001690926375451587539312499540288770262360039716426005683

    try {

        const iid = document.getElementById("iid").value;

        const valueLength = document.getElementById("iid");

        if (iid != "") {

            var btnStatus = document.getElementById('getCid');

            btnStatus.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Getting...';

            btnStatus.classList.add('disabled');

            var MilliTime = 0;

            var intervel = setInterval(function() {

                document.getElementById('speedTimer').innerHTML = MilliTime++;

            }, 10);

            const username = "pcservicecambodia";

            const password = "pcservicecambodia";

            const url = `https://khoatoantin.com/ajax/cidms_api?iids=${iid}&username=${username}&password=${password}`;

            const res = await fetch(url);

            const data = await res.json();

            console.log(data);



            let txt = data.confirmationid;

            let txtA = txt.slice(0, 6);

            let txtB = txt.slice(7, 13);

            let txtC = txt.slice(14, 20);

            let txtD = txt.slice(21, 27);

            let txtE = txt.slice(28, 34);

            let txtF = txt.slice(35, 41);

            let txtG = txt.slice(42, 48);

            let txtH = txt.slice(49, 55);



            document.getElementById("inputA").value = txtA;

            document.getElementById("inputB").value = txtB;

            document.getElementById("inputC").value = txtC;

            document.getElementById("inputD").value = txtD;

            document.getElementById("inputE").value = txtE;

            document.getElementById("inputF").value = txtF;

            document.getElementById("inputG").value = txtG;

            document.getElementById("inputH").value = txtH;



            document.getElementById("btnA").classList.remove('disabled');

            document.getElementById("btnB").classList.remove('disabled');

            document.getElementById("btnC").classList.remove('disabled');

            document.getElementById("btnD").classList.remove('disabled');

            document.getElementById("btnE").classList.remove('disabled');

            document.getElementById("btnF").classList.remove('disabled');

            document.getElementById("btnG").classList.remove('disabled');

            document.getElementById("btnH").classList.remove('disabled');

            

            document.getElementById("cid").innerText = data.short_result;



            if (data.result === "Successfully") {



                btnStatus.classList.remove('disabled');

                var notify = document.getElementById("notify");

                // Play sound alert

                notify.play();

                btnStatus.innerHTML = "Get Confirmation ID";

                clearInterval(intervel);

                // Display an success toast with no title

                toastr.success(data.result);



            }else if(data.short_result === "IID is not correct!!"){



                btnStatus.innerHTML = "Get Confirmation ID";

                btnStatus.classList.remove('disabled');

                clearInterval(intervel);

                toastr.error(data.short_result, 'Error');

            }



        }else {



            clearInterval(intervel);

            toastr.info('Please Enter Your Installation ID.', 'Required');



        }

    } catch (error) {



        btnStatus.innerHTML = "Get Confirmation ID";

        btnStatus.classList.remove('disabled');

        clearInterval(intervel);

        toastr.error('IID is not correct!!','Error');



    }

}

async function getPID() {

    var keys = document.getElementById('prodKey').value.trim();

    var splitKeys = keys.split('\n');

    if (keys != '') {

        let btnStatus = document.getElementById('checkBtn');

        btnStatus.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

        var time = 0;

        var interval = setInterval(function() {

            document.getElementById('speedTimer').innerHTML = time++;

        }, 100);



        const resultArray = []; // Array to store fetched data



        for (var i = 0; i < splitKeys.length; i++) {

            const jgetDes = document.getElementById('switch');

            const getVal = jgetDes.checked ? 1 : 0;

            // const username = 'trogiup24h';

            // const password = 'PHO';

            const username = "pcservicecambodia";

            const password = "pcservicecambodia";

            const url = `https://pidkey.com/ajax/pidms_api?keys=${splitKeys[i]}&justgetdescription=${getVal}&username=${username}&password=${password}`;

            const res = await fetch(url);

            const data = await res.json();

            resultArray.push(data); // Push fetched data to the array

        }



        console.log(resultArray);// Output the array of objects

        var output = '';

        for (let i = 0; i < resultArray.length; i++) {

            console.log(resultArray[i][0].keyname);

            if (resultArray[i][0].errorcode != null) {

                output += `Key: ${resultArray[i][0].keyname_with_dash}\nDescription: ${resultArray[i][0].prd}\nSub type: ${resultArray[i][0].sub}\nError code: ${resultArray[i][0].errorcode}\nTime: ${resultArray[i][0].datetime_checked_done}\n\n`;

            }else{

                output += `Key: ${resultArray[i][0].keyname_with_dash}\nDescription: ${resultArray[i][0].prd}\nSub type: ${resultArray[i][0].sub}\nTime: ${resultArray[i][0].datetime_checked_done}\n\n`;

            }    

        }

        document.getElementById('resKey').innerHTML = output.trim();

        btnStatus.innerHTML = 'Check Data';

        clearInterval(interval);

    } else {

        toastr.info('Enter Product Keys.', 'Required');

    }

}


function copyTextA() {

    // Get the text field

    var copyText = document.getElementById("inputA");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsA');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextB() {

    // Get the text field

    var copyText = document.getElementById("inputB");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsB');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextC() {

    // Get the text field

    var copyText = document.getElementById("inputC");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsC');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextD() {

    // Get the text field

    var copyText = document.getElementById("inputD");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsD');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextE() {

    // Get the text field

    var copyText = document.getElementById("inputE");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsE');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextF() {

    // Get the text field

    var copyText = document.getElementById("inputF");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsF');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextG() {

    // Get the text field

    var copyText = document.getElementById("inputG");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsG');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}



function copyTextH() {

    // Get the text field

    var copyText = document.getElementById("inputH");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconsA = document.getElementById('iconsH');

        iconsA.classList.remove('bi-clipboard');

        iconsA.classList.add('bi-check');

        toastr.success('Copied!');



    }



}

function copycidText() {

    // Get the text field

    var copyText = document.getElementById("cid");

    if (copyText.value != '') {

        // Select the text field

        copyText.select();

        copyText.setSelectionRange(0, 99999); // For mobile devices



        // Copy the text inside the text field

        navigator.clipboard.writeText(copyText.value);



        var iconscid = document.getElementById('IconsCID');

        iconscid.classList.remove('bi-clipboard');

        iconscid.classList.add('bi-check');

        toastr.success('Copied!');



    }



}