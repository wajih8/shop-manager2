const goal =
  "<tr><th>ID</th><th>Produit</th><th>Prix</th><th>Contité</th><th>Status</th></tr>";
function serch() {
  document.getElementById("sass").innerHTML = goal;
  cons = document.getElementById("mals").value;

  var xhr = new XMLHttpRequest();

  xhr.open("POST", "process3.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("sass").innerHTML = goal + xhr.responseText;
      console.log(xhr.responseText);
    }
  };
  var postData = "cons=" + cons;
  xhr.send(postData);
}
