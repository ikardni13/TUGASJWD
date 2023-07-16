<!DOCTYPE html>
<html lang="en">
<head>
<title>Operator Perbandingan</title>
</head>
<body>
<script>
var aku = 20;
var kamu = 19;

// sama dengan
var hasilSamaDengan = aku == kamu;
document.write(`${aku} == ${kamu} = ${hasilSamaDengan}<br/>`);

// lebih besar
var hasilLebihBesar = aku > kamu;
document.write(`${aku} > ${kamu} = ${hasilLebihBesar}<br/>`);

// lebih besar samadengan
var hasilLebihBesarSamaDengan = aku >= kamu;
document.write(`${aku} >= ${kamu} = ${hasilLebihBesarSamaDengan}<br/>`);

// lebih kecil
var hasilLebihKecil = aku < kamu;
document.write(`${aku} < ${kamu} = ${hasilLebihKecil}<br/>`);

// lebih kecil samadengan
var hasilLebihKecilSamaDengan = aku <= kamu;
document.write(`${aku} <= ${kamu} = ${hasilLebihKecilSamaDengan} <br/>`);

// tidak samadengan
var hasilTidakSamaDengan = aku != kamu;
document.write(`${aku} != ${kamu} = ${hasilTidakSamaDengan} <br/>`);
</script>
</body>
</html>
