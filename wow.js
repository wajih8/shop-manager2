function isValueInDatalist(value, datalistId) {
  var datalist = document.getElementById(datalistId);
  var options = datalist.getElementsByTagName("option");

  for (var i = 0; i < options.length; i++) {
    if (options[i].value === value) {
      return true;
    }
  }

  return false;
}

function deletes() {
  var formData = new FormData(document.getElementById("forms1s"));
  prodss = document.getElementById("prodss").value;
  if (prodss == "") {
    document.getElementById("result").innerHTML = "invalid prod name";
    return;
  } else if (!isValueInDatalist(prodss, "prods")) {
    document.getElementById("result").innerHTML =
      "invalid prod name not difinded";
    return;
  }
  var confir = confirm("do you realy want to delete this shit !!!");
  if (confir) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process1.php", true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
        document.getElementById("result").innerHTML = xhr.responseText;
      }
    };

    // Send the form data
    xhr.send(formData);
  }
}

function update() {
  document.getElementById("result").innerHTML = "";
  var formData = new FormData(document.getElementById("forms1s"));

  prix = document.getElementById("prixs").value;
  con = document.getElementById("conti").value;
  prodss = document.getElementById("prodss").value;

  if (prodss == "") {
    document.getElementById("result").innerHTML = "invalid prod name";
  } else if (!isValueInDatalist(prodss, "prods")) {
    document.getElementById("result").innerHTML =
      "invalid prod name not difinded";
  } else if (prix == "" && con == "") {
    document.getElementById("result").innerHTML = "invalid misajour";
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process2.php", true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("result").innerHTML = xhr.responseText;
      }
    };

    // Send the form data
    xhr.send(formData);
  }
}
