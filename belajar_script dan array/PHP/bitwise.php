<!DOCTYPE html> 
<html lang="en">
<head>
<title>Operator Bitwise</title>
</head>
<body>
<script>
var x = 4;
var y = 3;

// operator bitwise and
var hasilAnd = x & y;
document.write(`${x} & ${y} = ${hasilAnd}<br/>`);

// operator bitwise or
var hasilOr = x | y;
document.write(`${x} | ${y} = ${hasilOr}<br/>`);

// operator bitwise xor
var hasilXor = x ^ y;
document.write(`${x} ^ ${y} = ${hasilXor}<br/>`);

// operator negasi
var hasilNegasi = ~x;
document.write(`~${x} = ${hasilNegasi}<br/>`);

// operator bitwise right shift >>
var hasilRightShift = x >> y;
document.write(`${x} >> ${y} = ${hasilRightShift}<br/>`);

// operator bitwise left shift <<
var hasilLeftShift = x << y;
document.write(`${x} << ${y} = ${hasilLeftShift}<br/>`);

// operator bitwise right shift (unsigned) >>>
var hasilUnsignedRightShift = x >>> y;
document.write(`${x} >>> ${y} = ${hasilUnsignedRightShift}<br/>`);
</script>
</body>
</html>
