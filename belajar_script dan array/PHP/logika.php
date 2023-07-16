<!DOCTYPE html>
<html lang="en">
<head>
<title>Operator Logika</title>
</head>
<body>
<script>
var aku = 20;
var kamu = 19;
var benar = aku > kamu;
var salah = aku < kamu;

// operator && (and)
var hasilAnd = benar && salah;
document.write(`${benar} && ${salah} = ${hasilAnd}<br/>`);

var score = 0;
// pengisian dan pembagian dengan 4
score /= 4;
document.write("score = " + score + "<br/>");

// pengisian dan pemangkatan dengan 2
score **= 2;
document.write("score = " + score + "<br/>");

// pengisian dan modulo dengan 3;
score %= 3;
document.write("score = " + score + "<br/>");
</script>
</body>
</html>
