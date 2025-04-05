<div class="u-align-center u-container-style u-dialog u-radius u-shape-round u-white u-dialog-1">
  <div class="u-container-layout u-container-layout-1">
    <h4 class="u-align-center u-text u-text-default u-text-1">تفاصيل المستخدم</h4>
    <form id="userForm" class="rtl u-clearfix u-form-spacing-25 u-inner-form">
      <div class="u-form-group u-form-name u-label-top u-form-group-1">
        <label for="name-0b2c" class="u-label u-label-1">الاسم</label>
        <input type="text" placeholder="الاسم" id="name-0b2c" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle" required="">
      </div>
      <div class="u-form-group u-form-email u-label-top u-form-group-2">
        <label for="email-0b2c" class="u-label u-label-5">البريد الإلكتروني</label>
        <input type="email" placeholder="البريد الإلكتروني" id="email-0b2c" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle" required="">
      </div>
      <div class="u-form-group u-label-top u-form-group-3">
        <label for="role" class="u-label u-label-2">الدور</label>
        <select id="role" name="role" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle" required="">
          <option value="ادمن">ادمن</option>
          <option value="سكرتير">سكرتير</option>
          <option value="مودريتور">مودريتور</option>
          <option value="طبيب مشخص">طبيب مشخص</option>
        </select>
      </div>
      <div class="u-form-group u-label-top u-form-group-4">
        <label for="phone" class="u-label u-label-4">رقم الهاتف</label>
        <input type="text" placeholder="رقم الهاتف" id="phone" name="phone" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle">
      </div>
      <div class="u-form-group u-label-top u-form-group-5">
        <label for="password" class="u-label u-label-5">كلمة المرور</label>
        <input type="password" placeholder="كلمة المرور" id="password" name="password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle" required="">
      </div>
      <div class="u-form-group u-label-top u-form-group-6">
        <label for="working_hours" class="u-label u-label-6">ساعات العمل</label>
        <input type="number" placeholder="ساعات العمل" id="working_hours" name="working_hours" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle">
      </div>
      <div class="u-align-center u-form-group u-form-submit">
        <button type="button" id="submitButton" class="u-border-none u-btn-submit u-btn u-button-style u-palette-1-base u-btn-1">إرسال</button>
      </div>
    </form>
  </div>
  <button class="u-dialog-close-button u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1">
    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style="">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
      <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect>
      <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect>
    </svg>
  </button>
</div>

<script>
document.getElementById('submitButton').addEventListener('click', function () {
  const form = document.getElementById('userForm');
  const formData = new FormData(form);

  // Client-side validation
  if (!form.checkValidity()) {
    alert('يرجى ملء جميع الحقول المطلوبة.');
    return;
  }

  fetch('/System123/ajax/add_user.php', {
    method: 'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('User added successfully!');
        location.reload(); // Reload the current page
      } else {
        alert('Error: ' + data.error);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred: ' + error.message);
    });
});
</script>