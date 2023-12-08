<?php

?>

<label class="picture" for="picture__input" tabIndex="0">
  <span class="picture__image"></span>
</label>
<form method="POST" action="../../../controller/processaUploadPhoto.php" enctype="multipart/form-data">
  <input type="file" name="picture__input" id="picture__input">
  <button type="submit" name="btn">Enviar</button>
</form>

<script>
  const inputFile = document.querySelector("#picture__input");
  const pictureImage = document.querySelector(".picture__image");
  const pictureImageTxt = "Choose an image";
  pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});

</script>