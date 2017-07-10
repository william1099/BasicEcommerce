function tabbaru(event) {
  var link = event
  var new_window = window.open(event, "", "width=1100px,height=900px,left=100")
}
var hitung = 1;
function iklan() {
  window.setTimeout("iklan2()", 2000);
}
function iklan2() {
  hitung++;
  if (hitung > 3) hitung = 1;
  window.document.iklan.src = "img/banner" + hitung + ".jpg";
  window.setTimeout("iklan2()",2000);
}
function tampil(event) {
  var temp = document.getElementById("hargaa");
  temp.innerHTML = "Hargaaaa : " + event - 2;
}
function ubah(x) {
  var nilai = event.key;
    var temp = document.getElementById("hargaa");
    temp.innerHTML = "Harga : " +  x * nilai;
}
function kelogin() {
  window.location.href = "login.php";
}
function kedaftar() {
  window.location.href = "daftar.php";
}
function kelogout() {
  window.location.href = "logout.php";
}
