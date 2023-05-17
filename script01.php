<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="script01.php" method="post" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name= "txNIM" id="NIM">
        </div>
        <div>
            NAMA
            <input type="text" name= "txNAMA" id="NAMA">
        </div>
        <div>
            JENIS KELAMIN 
            <input type="radio" name= "txJKL" id="JKL" value="L">Laki-Laki
            <input type="radio" name= "txJKL" id="JKL" value="p">Perempuan

        </div>
        <div>
            JURUSAN 
           <select name="txJURUSAN" id="JURUSAN">
            <option value="teknik mesin">teknik mesin</option>
            <option value="teknik beladiri">teknik beladiri</option>
            <option value="teknik akutansi">teknik akutansi</option>
            <option value="teknik bertahan hidup">teknik  bertahan hidup</option>
            <option value="teknik informatika">teknik  informatika  </option>

           </select>
        </div>
        <div> 
            HOBI
            <input type="checkbox" name ="txHOBI_MANCING" value="MANCING">Mancing
            <input type="checkbox" name ="txHOBI_MAKAN" value="MAKAN">MAKAN
            <input type="checkbox" name ="txHOBI_MELALI" value="MELALI">MELALI
            <input type="checkbox" name ="txHOBI_MELAYANGAN" value="MELAYANGAN">MELAYANGAN

        </div>
        <div>
            <button type="submit">kirim data</button>
        </div>



    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem("txNIM").value;
            let name = F.namedItem("txNAMA").value;
            let jenis = F.namedItem("txJKL").value;
            let jrsn = F.namedItem("txJURUSAN").value;
            let hb = [
                F.namedItem("txHOBI_MANCING").checked,
                F.namedItem("txHOBI_MAKAN").checked,
                F.namedItem("txHOBI_MELALI").checked,
                F.namedItem("txHOBI_MELAYANGAN").checked,
            ]






            console.log("NIM:" + nim);
            console.log("NAMA:" + name);
            console.log("JENIS KELAMIN:" +jenis);
            console.log("JURUSAN" + jrsn);
            console.log("HOBI" + hb);


            return false;
        }
    </script>

</body>
</html>