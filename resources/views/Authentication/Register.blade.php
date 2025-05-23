@extends('authentication.layout');

@section('title')

التسجيل | إنشاء حساب جديد

@endsection

@section('contant')
<div class="container">
    <div class="form-container">
      <div class="form-header">
        <h2 class="title">إنشاء حساب جديد</h2>
        <div class="wripper">
          <div class="border-inner">
            <img src="/Images/1747833142494.jpg" alt="صورة شعار المجمع">
          </div>
        </div>
      </div>

      <form id="signupForm" class="signup-form">
        <div class="input-group">
          <div class="input-field" id="usernameField">
            <label for="username">اسم المستخدم الثلاثي</label>
            <input type="text" id="username" required>
            <i class="icon fas fa-user"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="phoneField">
            <label for="username">رقم الموبايل</label>
            <input type="text" id="number" required>
            <i class="icon fas fa-phone"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="emailField">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" required>
            <i class="icon fas fa-envelope"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="passwordField">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" required>
            <i class="icon fas fa-lock"></i>
            <i class="toggle-password fas fa-eye-slash"></i>
            <span class="error-message"></span>
            <div class="password-strength">
              <div class="strength-bar"></div>
            </div>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="confirmPasswordField">
            <label for="confirmPassword">تأكيد كلمة المرور</label>
            <input type="password" id="confirmPassword" required>
            <i class="icon fas fa-lock"></i>
            <i class="toggle-password fas fa-eye-slash"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="usernameField">
            <label for="username">تاريخ الميلاد</label>
            <input type="date" id="date" required>
            <i class="icon fas fa-calendar"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="usernameField">
            <label for="username">صورة شخصية</label>
            <input type="file" hidden="hidden" id="image" required>
            <input type="text" id="text-image" required>
            <i class="icon fas fa-image"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>
        </div>

        <div class="input-group">
          <div class="input-field" id="usernameField">
            <label for="gender">الجنس</label>
            <select id="gender" name="gender" required>
              <option disabled selected value="">اختر الجنس</option>
              <option value="male">ذكر</option>
              <option value="female">أنثى</option>
            </select>
            <i class="icon fas fa-venus-double"></i>
            <span class="error-message"></span>
            <span class="success-icon"><i class="fas fa-check-circle"></i></span>
          </div>

          <div class="input-group">
            <div class="input-field" id="usernameField">
              <label for="role">الصلاحية</label>
              <select id="role" name="role" required>
                <option disabled selected value="">اختر صلاحيتك</option>
                <option value="">مالك شقة</option>
                <option value="">فرد من أفراد الأسرة القاطنة بالشقة</option>
              </select>
              <i class="icon fas fa-users"></i>
              <span class="error-message"></span>
              <span class="success-icon"><i class="fas fa-check-circle"></i></span>
            </div>

          </div>
          <button type="submit" class="submit-btn">
            <span>تسجيل الدخول</span>
            <div class="btn-loader"></div>
          </button>
          <div class="login-link">
            <p>لديك حساب بالفعل؟ <a href="http://127.0.0.1:8000/api/login">تسجيل الدخول</a></p>
          </div>
      </form>
    </div>
  </div>
@endsection
