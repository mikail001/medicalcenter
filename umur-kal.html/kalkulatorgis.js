function calculateDiff(){
    let date_1 = document.getElementById('bDate').value;
    let date_2 = document.getElementById('cDate').value;

let dob = new Date(date_1);
let cDate = new Date(date_2);

let diff = new Date(cDate.getTime() - dob.getTime());

let output = document.getElementById('showAge');
output.id="showAge";

if(diff == NaN || !date_1) {
    output.innerHTML = "Tolong Pilih Tanggal Terlebih Dahulu!"
    return;
}
if(date_1 > date_2){
    output.ineerHTML = "Invalid Input!";
    return;
    }

    output.innerHTML = "Umur anak anda yaitu " + " " + Number(diff.getUTCFullYear() - 1970) + " Tahun " + " " + diff.getUTCMonth() + " Bulan " + " " + Number(diff.getUTCDate() - 1) + " Hari";
}

