<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" href="css/account.css">
  <link rel="stylesheet" href="css/noti.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Base Account</title>
</head>

<body>
  <?php require __DIR__ . '/partials/noti.view.php'; ?>

  <div class="sidebar">
    <div class="options-container">
      <img style="object-fit: cover; border-radius: 100%; height: 30px; width: 30px;" class="avatar" src="<?= Session::getUser()['profile_image'] ? htmlspecialchars(Session::getUser()['profile_image']) : "images/logo.png" ?>" alt="logo">
      <button style="background-color: #1A1F24; color: white;">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path fill-rule="evenodd"
            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
            clip-rule="evenodd" />
        </svg>
        <p class="label">Cá nhân</p>
      </button>
      <button>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path fill-rule="evenodd"
            d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
            clip-rule="evenodd" />
        </svg>

        <p class="label">Thông báo</p>
      </button>
      <button>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path
            d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
        </svg>

        <p class="label">Thành viên</p>
      </button>
      <button>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
        </svg>
        <p class="label">Nhóm</p>
      </button>
      <button>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
        </svg>
        <p class="label">TK Khách</p>
      </button>
      <button>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
        </svg>


        <p class="label">Ứng dụng</p>
      </button>

    </div>
    <form style="width: 100%;" action="/logout" method="post">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
      <button type="submit">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
        </svg>
        <p class="label">Đăng xuất</p>
      </button>
    </form>
  </div>
  <div class="dashboard">
    <div class="dashboard-content">
      <div class="header" style="display: flex; justify-content: space-between;">
        <div class="section-info">
          <svg style="height: 15px; color: #616161; cursor: pointer;" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
              d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
              clip-rule="evenodd" />
          </svg>
          <div>
            <p style="color: #aaaaaa; font-size: 10px; margin-bottom: 5px;">TÀI KHOẢN</p>
            <p style="color: #616161; font-size: 14px;"><?= htmlspecialchars(Session::getUser()['firstname']) . ' ' . htmlspecialchars(Session::getUser()['lastname']) ?></p>
          </div>
        </div>
        <button id="edit-btn" class="edit-btn">
          <svg style="height: 12px; margin-right: 6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
              d="M11.47 2.47a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06l-6.22-6.22V21a.75.75 0 0 1-1.5 0V4.81l-6.22 6.22a.75.75 0 1 1-1.06-1.06l7.5-7.5Z"
              clip-rule="evenodd" />
          </svg>
          <p style="font-size: 11px;">
            Chỉnh sửa tài khoản
          </p>
        </button>
      </div>
      <hr style="margin-top: 16px; border: none; height: 1px; background-color: #ededed;">
      <div class="body">
        <div style="width: 480px;">
          <div class="info" style="display: flex; align-items: center; margin-top: 35px;">
            <img style="object-fit: cover; border-radius: 100%; width: 70px; height: 70px; cursor: pointer; margin-right: 10px;" src="<?= Session::getUser()['profile_image'] ? htmlspecialchars(Session::getUser()['profile_image']) : "images/logo.png" ?>" alt="">
            <div>
              <p style="font-size: 18px; color: #1A1F24;"><?= htmlspecialchars(Session::getUser()['firstname']) . ' ' . htmlspecialchars(Session::getUser()['lastname']) ?></p>
              <p style="font-size: 13px; color: #b0b0b0; margin: 8px 0;"><?= Session::getUser()['job_title'] ? htmlspecialchars(Session::getUser()['job_title']) : "Chưa nhập chức danh" ?></p>
              <table style="font-size: 12px; border-collapse: collapse; width: 100%; color: #282d32;">
                <tr>
                  <td style="padding-left: 0; padding-right: 20px; padding-bottom: 3px;">Địa chỉ email</td>
                  <td style="padding-left: 0; padding-right: 20px; padding-bottom: 3px;"><?= htmlspecialchars(Session::getUser()['email']) ?> </td>
                </tr>
                <tr>
                  <td style="padding-left: 0; padding-right: 20px; padding-bottom: 3px;">Số điện thoại</td>
                  <td style="padding-left: 0; padding-right: 20px; padding-bottom: 3px;"><?= Session::getUser()['phone'] ? htmlspecialchars(Session::getUser()['phone']) : "Chưa nhập số điện thoại" ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="section" style="margin-top: 60px;">
            <p class="label" style="font-size: 11px; color: #b6b6b6;">THÔNG TIN LIÊN HỆ</p>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1.5px; background-color: #ededed;">
          </div>
          <div class="section" style="margin-top: 60px;">
            <p class="label" style="font-size: 11px; color: #b6b6b6;">NHÓM (2)</p>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1.5px; background-color: #ededed;">
            <div
              style="margin-top: 12px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
              <div>
                <p style="margin-bottom: 6px; color: #3a84da; font-size: 14px;">Nhóm Fresher Challenge của Quang</p>
                <p style="color: #b0b0b0; font-size: 12px;">16 Thành viên · Tham gia ngày 25-7-2024</p>
              </div>
              <svg style="height: 20px;color: #b0b0b0; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </div>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1px; background-color: #ededed;">
            <div
              style="margin-top: 12px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
              <div>
                <p style="margin-bottom: 6px; color: #3a84da; font-size: 14px;">Nhóm Fresher Challenge của Quang</p>
                <p style="color: #b0b0b0; font-size: 12px;">16 Thành viên · Tham gia ngày 25-7-2024</p>
              </div>
              <svg style="height: 20px; color: #b0b0b0; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </div>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1px; background-color: #ededed;">
          </div>
          <div class="section" style="margin-top: 60px;">
            <p class="label" style="font-size: 11px; color: #b6b6b6;">NHÂN VIÊN TRỰC TIẾP (0)</p>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1.5px; background-color: #ededed;">
          </div>
          <div class="section" style="margin-top: 60px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <p class="label" style="font-size: 11px; color: #b6b6b6;">HỌC VẤN</p>
              <svg style="height: 15px; color: #b6b6b6; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>

            <hr class="divider" style="margin-top: 10px; border: none; height: 1.5px; background-color: #ededed;">
            <div
              style="margin-top: 15px; background-color: #f8f8f8; display: flex; justify-content: center; padding: 19px 0;">
              <p style="color: #757575; font-size: 13px;">Không có thông tin</p>
            </div>
          </div>
          <div class="section" style="margin-top: 60px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <p class="label" style="font-size: 11px; color: #b6b6b6;">KINH NGHIỆM LÀM VIỆC</p>
              <svg style="height: 15px; color: #b6b6b6; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
            <hr class="divider" style="margin-top: 10px; border: none; height: 1.5px; background-color: #ededed;">
            <div
              style="margin-top: 15px; background-color: #f8f8f8; display: flex; justify-content: center; padding: 19px 0;">
              <p style="color: #757575; font-size: 13px;">Không có thông tin</p>
            </div>
          </div>
        </div>
      </div>
      <button
        style="cursor: pointer; bottom: 30px; left: 15px; height: 45px; width: 45px; display: flex; justify-content: center; align-items: center; border-radius: 100%; position: absolute; background-color: #3a84da; border: none;">
        <svg style="color: white; height: 20px; width: 20px;" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
        </svg>
      </button>
    </div>
    <div class="dashboard-options">
      <div class="header">
        <p style="color: #616161; margin-bottom: 3px;"><?= htmlspecialchars(Session::getUser()['firstname']) . ' ' . htmlspecialchars(Session::getUser()['lastname']) ?></p>
        <p style="color: #949494; font-size: 12px;"><?= '@' . htmlspecialchars(Session::getUser()['username']) . ' · ' . htmlspecialchars(Session::getUser()['email']) ?></p>
      </div>
      <hr class="divider">
      <div class="section">
        <p class="label">THÔNG TIN TÀI KHOẢN</p>
        <div class="body">
          <button style="color: #3a84da;">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path fill-rule="evenodd"
                d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 0 0-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 0 0-2.282.819l-.922 1.597a1.875 1.875 0 0 0 .432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 0 0 0 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 0 0-.432 2.385l.922 1.597a1.875 1.875 0 0 0 2.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 0 0 2.28-.819l.923-1.597a1.875 1.875 0 0 0-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 0 0 0-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 0 0-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 0 0-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 0 0-1.85-1.567h-1.843ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
                clip-rule="evenodd" />
            </svg>
            Tài khoản
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path
                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
              <path
                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
            </svg>

            Chỉnh sửa
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path fill-rule="evenodd"
                d="M9 2.25a.75.75 0 0 1 .75.75v1.506a49.384 49.384 0 0 1 5.343.371.75.75 0 1 1-.186 1.489c-.66-.083-1.323-.151-1.99-.206a18.67 18.67 0 0 1-2.97 6.323c.318.384.65.753 1 1.107a.75.75 0 0 1-1.07 1.052A18.902 18.902 0 0 1 9 13.687a18.823 18.823 0 0 1-5.656 4.482.75.75 0 0 1-.688-1.333 17.323 17.323 0 0 0 5.396-4.353A18.72 18.72 0 0 1 5.89 8.598a.75.75 0 0 1 1.388-.568A17.21 17.21 0 0 0 9 11.224a17.168 17.168 0 0 0 2.391-5.165 48.04 48.04 0 0 0-8.298.307.75.75 0 0 1-.186-1.489 49.159 49.159 0 0 1 5.343-.371V3A.75.75 0 0 1 9 2.25ZM15.75 9a.75.75 0 0 1 .68.433l5.25 11.25a.75.75 0 1 1-1.36.634l-1.198-2.567h-6.744l-1.198 2.567a.75.75 0 0 1-1.36-.634l5.25-11.25A.75.75 0 0 1 15.75 9Zm-2.672 8.25h5.344l-2.672-5.726-2.672 5.726Z"
                clip-rule="evenodd" />
            </svg>

            Ngôn ngữ
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path fill-rule="evenodd"
                d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                clip-rule="evenodd" />
              <path
                d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
              <path fill-rule="evenodd"
                d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
            </svg>


            Đổi mật khẩu
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path fill-rule="evenodd"
                d="M20.599 1.5c-.376 0-.743.111-1.055.32l-5.08 3.385a18.747 18.747 0 0 0-3.471 2.987 10.04 10.04 0 0 1 4.815 4.815 18.748 18.748 0 0 0 2.987-3.472l3.386-5.079A1.902 1.902 0 0 0 20.599 1.5Zm-8.3 14.025a18.76 18.76 0 0 0 1.896-1.207 8.026 8.026 0 0 0-4.513-4.513A18.75 18.75 0 0 0 8.475 11.7l-.278.5a5.26 5.26 0 0 1 3.601 3.602l.502-.278ZM6.75 13.5A3.75 3.75 0 0 0 3 17.25a1.5 1.5 0 0 1-1.601 1.497.75.75 0 0 0-.7 1.123 5.25 5.25 0 0 0 9.8-2.62 3.75 3.75 0 0 0-3.75-3.75Z"
                clip-rule="evenodd" />
            </svg>

            Đổi màu hiển thị
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path
                d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
              <path fill-rule="evenodd"
                d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                clip-rule="evenodd" />
            </svg>

            Lịch làm việc
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path fill-rule="evenodd"
                d="M11.484 2.17a.75.75 0 0 1 1.032 0 11.209 11.209 0 0 0 7.877 3.08.75.75 0 0 1 .722.515 12.74 12.74 0 0 1 .635 3.985c0 5.942-4.064 10.933-9.563 12.348a.749.749 0 0 1-.374 0C6.314 20.683 2.25 15.692 2.25 9.75c0-1.39.223-2.73.635-3.985a.75.75 0 0 1 .722-.516l.143.001c2.996 0 5.718-1.17 7.734-3.08ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75ZM12 15a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75H12Z"
                clip-rule="evenodd" />
            </svg>
            Bảo mật hai lớp
          </button>
        </div>
      </div>
      <hr class="divider">
      <div class="section">
        <p class="label" style="margin-bottom: 5px;">ỨNG DỤNG - BẢO MẬT</p>
      </div>
      <hr class="divider">
      <div class="section">
        <p class="label">TUỲ CHỈNH NÂNG CAO</p>
        <div class="body">
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
            </svg>

            Lịch sử đăng nhập
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
            </svg>


            Quản lý thiết bị
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>

            Tuỳ chỉnh email thông báo
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            Chỉnh sửa múi giờ
          </button>
          <button>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
            </svg>


            Uỷ quyền tạm thời
          </button>
        </div>
      </div>
    </div>
  </div>
  <div id="edit-container" class="edit-container">
    <div class="edit-modal">
      <div class="edit-header">
        <p style="font-size: 13px; font-weight: 600;">EDIT PERSONAL PROFILE</p>
        <span id="close-btn" class="close-btn">&times;</span>
      </div>
      <form class="edit-form" action="/edit" method="post" style="background-color: white; padding-top: 20px;" enctype="multipart/form-data" >
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <div class="edit-body">
          <div class="label-field">
            <label for="firstname">Your first name</label>
            <p class="description">Your first name</p>
          </div>
          <div class="input-field">
            <input type="text" name="firstname" id="firstname" value="<?= htmlspecialchars(Session::getUser()['firstname']) ?>">
          </div>

          <div class="label-field">
            <label for="lastname">Your last name</label>
            <p class="description">Your last name</p>
          </div>
          <div class="input-field">
            <input type="text" name="lastname" id="lastname" value="<?= htmlspecialchars(Session::getUser()['lastname']) ?>">
          </div>

          <div class="label-field">
            <label for="email">Email</label>
            <p class="description">Your email address</p>
          </div>
          <div class="input-field">
            <input disabled type="email" name="email" id="email" value="<?= htmlspecialchars(Session::getUser()['email']) ?>">
          </div>

          <div class="label-field">
            <label for="username">Username</label>
            <p class="description">Your username</p>
          </div>
          <div class="input-field">
            <input disabled type="text" name="username" id="username" value="@<?= htmlspecialchars(Session::getUser()['username']) ?>">
          </div>

          <div class="label-field">
            <label for="job_title">Job Title</label>
            <p class="description">Job Title</p>
          </div>
          <div class="input-field">
            <input type="text" name="job_title" id="job_title" value="<?= Session::getUser()['job_title'] ? htmlspecialchars(Session::getUser()['job_title']) : '' ?>">
          </div>

          <div class="label-field">
            <label for="profile_image">Profile image</label>
            <p class="description">Profile image</p>
          </div>
          <div class="input-field">
            <input type="file" id="profile_image" name="profile_image" accept="image/*" >
          </div>


          <div class="label-field">
            <label for="profile_image">Your phone number</label>
            <p class="description">Your phone number</p>
          </div>
          <div class="input-field">
            <input type="text" name="phone" id="phone" value="<?= Session::getUser()['phone'] ? htmlspecialchars(Session::getUser()['phone']) : "" ?>">
          </div>

          <div class="label-field">
            <label for="address">Current address</label>
            <p class="description">Current address</p>
          </div>
          <div class="input-field">
            <textarea rows=5 name="address" id="address"><?= Session::getUser()['address'] ? htmlspecialchars(Session::getUser()['address']) : "" ?></textarea>
          </div>
        </div>
        <hr style="border: none;
        border-top: 1.5px dashed rgb(212, 212, 212);
        margin-top: 15px; margin-bottom: 15px;">
        <div class="footer">
          <button type="button" id="cancel-btn" class="cancel-btn">Cancel</button>
          <button class="update-btn" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
</body>

<script>
  $(document).ready(function () {
    $('#edit-btn').click(function (e) {
      $('#edit-container').css('display', 'flex');
    });

    $('#close-btn').click(function (e) {
      $('#edit-container').css('display', 'none');
    });

    $('#cancel-btn').click(function (e) {
      $('#edit-container').css('display', 'none');
    });

    $('#noti-close-btn').click(function (e) {
      $('#noti-container').hide();
    });

    $('#noti-ok-btn').click(function (e) {
      $('#noti-container').hide();
    });
  });
</script>

</html>