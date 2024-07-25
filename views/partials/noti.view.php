<div id="noti-container" <?= Session::getFlashNoti() ? 'style="display:flex"' : 'style="display:none"' ?> class="noti-container">
  <div class="noti-modal">
    <svg id="noti-close-btn" class="noti-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
    </svg>
    <div class="noti-body">
      <img class="noti-icon" src="images/<?= Session::getFlashNoti()["type"] === "error" ? "warning" : "check" ?>.png" alt="">
      <p class="noti-content"><?= Session::getFlashNoti()["message"] ?></p>
    </div>
    <hr>
    <button id="noti-ok-btn" style="color: <?= Session::getFlashNoti()["type"] === "error" ? "#ee404c" : "#37BA00" ?>;" class="noti-btn">OK</button>
  </div>
</div>

<script defer>
  $(document).ready(function () {
    $("#noti-ok-btn").click(function () {
      $("#noti-container").css("display", "none");
    });
    <?php Session::unFlashNoti(); ?>
  });

  $(document).ready(function () {
    $("#noti-close-btn").click(function () {
      $("#noti-container").css("display", "none");
    });
    <?php Session::unFlashNoti(); ?>
  });
</script>