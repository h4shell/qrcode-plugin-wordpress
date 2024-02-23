const myPluginBannerContainer = document.querySelector(
  ".myplugin-banner-container"
);
const myPluginBannerContainerButton = document.querySelector(
  ".myplugin-banner-button"
);

function qr(link) {
  var qrcode = new QRCode(document.querySelector("#qrcode"), {
    text: link,
    width: 250,
    height: 250,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H,
  });
}

myPluginBannerContainerButton.addEventListener("click", () => {
  myPluginBannerContainer.classList.toggle("myplugin-hidden");
});

document.addEventListener("click", (event) => {
  const isClickInsideBanner = myPluginBannerContainer.contains(event.target);
  if (!isClickInsideBanner) {
    myPluginBannerContainer.classList.add("myplugin-hidden");
  }
});

qr(window.location.href);
