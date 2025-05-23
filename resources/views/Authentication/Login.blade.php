@extends('authentication.layout')

@section('title')

التسجيل | تسجيل الدخول

@endsection
@section('contant')
<div class="container">
    <div class="form-container">
      <div class="form-header">
        <h2 class="title">تسجيل الدخول</h2>
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

        <button type="submit" class="submit-btn">
          <span>تسجيل الدخول</span>
          <div class="btn-loader"></div>
        </button>

        <div class="login-link">
          <p>ليس لديك حساب بالفعل؟  <a href="'http://127.0.0.1:8000/api/register'">إنشاء حساب جديد</a></pل>
        </div>
      </form>
    </div>
  </div>
@endsection
