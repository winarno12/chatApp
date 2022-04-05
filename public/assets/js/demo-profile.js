function priviewImg() {
  const sampul = document.querySelector("#sampul");
  const sampul_label = document.querySelector(".form-control");
  const imgPreview = document.querySelector(".imgPreview");

  sampul_label.textContent = sampul.files[0].name;
  const file_sampul = new FileReader();
  file_sampul.readAsDataURL(sampul.files[0]);
  file_sampul.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
