// variable to store the background image
let backgroundImg;
// variable to store the foreground image
let foregroundImg;

// function to preview the background image
function previewBackground() {
  let file = document.getElementById("background-file").files[0];
  let preview = document.getElementById("background-preview");

  let reader = new FileReader();
  reader.addEventListener("load", function() {
    backgroundImg = new Image();
    backgroundImg.src = reader.result;
    backgroundImg.onload = function() {
      preview.appendChild(backgroundImg);
      updatePreview();
    }
  }, false);
  if (file) {
    reader.readAsDataURL(file);
  }
}

// function to preview the foreground image
function previewForeground() {
  let file = document.getElementById("foreground-file").files[0];
  let preview = document.getElementById("foreground-preview");

  let reader = new FileReader();
  reader.addEventListener("load", function() {
    foregroundImg = new Image();
    foregroundImg.src = reader.result;
    foregroundImg.onload = function() {
      preview.appendChild(foregroundImg);
      updatePreview();
    }
  }, false);
  if (file) {
    reader.readAsDataURL(file);
  }
}

// function to update the composite preview
function updatePreview() {
  let canvas = document.getElementById("composite-canvas");
  let ctx = canvas.getContext("2d");
  let width = canvas.width;
  let height = canvas.height;

  ctx.clearRect(0, 0, width, height);

  if (backgroundImg && foregroundImg) {
    let bgScale = document.getElementById("background-scale").value / 100;
    let bgRotation = document.getElementById("background-rotation").value;
    let fgScale = document.getElementById("foreground-scale").value / 100;
    let fgRotation = document.getElementById("foreground-rotation").value;
    let bgWidth = backgroundImg.width * bgScale;
    let bgHeight = backgroundImg.height * bgScale;
    let fgWidth = foregroundImg.width * fgScale;
    let fgHeight = foregroundImg.height * fgScale;
    let x = (width - bgWidth) / 2;
    let y = (height - bgHeight) / 2;

    ctx.save();
    ctx.translate(x + bgWidth / 2, y + bgHeight / 2);
    ctx.rotate(bgRotation * Math.PI / 180);
    ctx.drawImage(backgroundImg, -bgWidth / 2, -bgHeight / 2, bgWidth, bgHeight);
    ctx.restore();

    x = (width - fgWidth) / 2;
    y = (height - fgHeight) / 2;

    ctx.save();
    ctx.translate(x + fgWidth / 2, y + fgHeight / 2);
   
ctx.rotate(fgRotation * Math.PI / 180);
ctx.drawImage(foregroundImg, -fgWidth / 2, -fgHeight / 2, fgWidth, fgHeight);
ctx.restore();
}
}

// function to update the canvas size
function updateCanvas() {
let canvas = document.getElementById("composite-canvas");
let width = document.getElementById("canvas-width").value;
let height = document.getElementById("canvas-height").value;
canvas.width = width;
canvas.height = height;
updatePreview();
}

// function to download the composite image
function downloadImage() {
let canvas = document.getElementById("composite-canvas");
let link = document.createElement("a");
link.href = canvas.toDataURL();
link.download = "ProductTile_createdbyPIG.png";
link.click();
}

