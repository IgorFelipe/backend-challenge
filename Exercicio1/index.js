function SendButtonClick() {
  var matrix = GetMatrixForString(document.getElementById("matriz").value);

  hasError = VerifyMatrixIsSquare(matrix);
  console.log(hasError);

  if (hasError) {
    alert("A matriz enviada é invalida");
    return;
  }
  var differenceBetweenDiagonals = CheckDifference(matrix)

  alert("A diferença entre as diagonais é : " + differenceBetweenDiagonals);
}

function GetMatrixForString(arrayDirty) {
  var cleanMatriz = new Array();

  arrayDirty = arrayDirty.split(";");

  arrayDirty.forEach(element => {
    cleanMatriz.push(element.split(","));
  });

  return cleanMatriz;
}

function VerifyMatrixIsSquare(matrix) {
  var error = false;

  if (matrix.length == "undefined" || matrix.length == 0) {
    error = true;
  }

  matrix.map(function (line, index) {
    if (line.length != matrix.length) {
      error = true;
    }
  });

  return error;
}

function CheckDifference(matrix){
  var diagonals1 = 0;
  var diagonals2 = 0;

  matrix.map(function (line, index) {
      diagonals1 += parseInt(line[index]);
      diagonals2 += parseInt(line[line.length-1-index]);
  });

  var result = diagonals1 - diagonals2;
  return result;
}