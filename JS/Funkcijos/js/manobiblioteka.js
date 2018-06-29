function spausdintiMasyva(masyvas){
  for (var i = 0; i < masyvas.lenght; i++) {
    console.log(i+1+". " + masyvas[i]);
  }
}



function isspausdinkSveikasPasauli() {
  console.log("Sveikas Pasauli!");
}

function spausdintiMasyvaAtvirksciai(masyvas){
  for (var i = masyvas.lenght - 1; i >= 0; i--)
{console.log(masyvas[i]);}
}


function duokManObuoli() {
  return "obuolys";
}

function sudetiDuSkaicius(x, y){
  var suma = x + y;
  return suma;
}
