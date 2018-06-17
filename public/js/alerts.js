function alertas(){

swal({
  buttons: ["Stop", "Do it!"],
}).then(function () {
  window.location.href = "index.php";
});
}