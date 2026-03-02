<!--/* +********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ******************************************************************************* */-->

<!DOCTYPE html>
<html>

<head>
  <title>Change Password</title>
  <link rel="icon" type="image/x-icon" href="layouts/v7/resources/Images/favicon.png">
  <link rel="stylesheet" type="text/css" href="layouts/v7/resources/commoncrm.css" />
  <link rel="stylesheet" type="text/css" href="layouts/v7/resources/root.css" />
  <link rel="stylesheet" type="text/css" href="layouts/v7/resources/customcrm.css" />

  <style>
    body {
      margin: 0;
    }

    #page {
      background: url(layouts/v7/resources/Images/login-body.jpg) center/cover no-repeat;
      position: relative;
      width: 100%;
    }

    #page::before {
      content: "";
      background-color: rgb(229 229 229 / 60%);
      width: 100%;
      position: absolute;
      top: 0;
      bottom: 0;
    }

    .main-dashboard-container {
      width: 70%;
      padding: 50px 1px;
      margin: auto;
      border-radius: 10px;
    }

    .login-container {
      display: flex;
      background: var(--white-color);
      border-radius: 10px;
      box-shadow: #7367f0 0px 5px 15px;
      overflow: hidden;
    }

    .login-form-container {
      flex: 1;
      padding: 30px;
      position: relative;
    }

    .login-hero {
      flex: 1;
      background: linear-gradient(135deg, var(--primary-color) 48%, #4e4e4e 45%);
      color: var(--white-color);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
      text-align: center;
    }

    .form-input {
      width: 93%;
      padding: 14px 40px 14px 15px;
      border: 1px solid var(--border-light-color);
      border-radius: 5px;
      font-size: 15px;
      transition: all 0.3s ease;
      background-color: var(--white-color) !important;
    }

    .form-input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
      outline: none;
    }

    .input-label {
      position: absolute;
      left: 12px;
      top: 13px;
      color: var(--text-dark-color);
      transition: all 0.2s ease;
      background: var(--white-color);
      padding: 2px 7px;
      border-radius: 3px;
      font-size: 13px;
      pointer-events: none;
    }

    .form-input:focus + .input-label,
    .form-input:not(:placeholder-shown) + .input-label {
      top: -16px;
      left: 2px;
      color: var(--primary-color);
      background: var(--white-color);
    }

    .group {
      position: relative;
      margin: 20px 0 30px;
    }

    .toggle-eye {
      position: absolute;
      right: 12px;
      top: 15px;
      cursor: pointer;
      font-size: 18px;
      color: #999;
    }

    .strength-meter {
      height: 6px;
      border-radius: 3px;
      background-color: #e0e0e0;
      margin-top: -18px;
      margin-bottom: 20px;
      overflow: hidden;
    }

    .strength-bar {
      height: 100%;
      width: 0%;
      transition: width 0.3s;
    }

    .error-message {
      color: var(--red-text-color);
      font-size: 13px;
      text-align: left;
      margin-top: -10px;
      margin-bottom: 15px;
    }

    .btn {
      padding: 12px 9px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 5px;
      transition: transform 0.2s;
    }

    .btn:hover {
      transform: translateY(-2px);
      background-color: var(--primary-dark);
    }

    @media (max-width: 768px) {
      .login-container {
        flex-direction: column;
      }

      .login-hero {
        display: none;
      }

      .main-dashboard-container {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <div id="page">
    <div class="main-dashboard-container">
      <div class="login-container">
        <div class="login-hero hidden-xs hidden-sm hidden-md">
          <h3 class="hero-title">CRM Doctor</h3>
          <p class="hero-subtitle">
            Streamline your customer relationships and boost your business productivity.
          </p>
          <img src="layouts/v7/resources/Images/change-password.svg" alt="change password" class="hero-image" />
        </div>

        <div class="login-form-container">
          <img class="img-responsive user-logo" src="{$LOGOURL}" alt="{$TITLE}" />

          {if $LINK_EXPIRED neq 'true'}
            <h4 class="form-title">{vtranslate('LBL_CHANGE_PASSWORD',$MODULE)}</h4>

            <form id="changePassword" action="{$TRACKURL}" method="post" onsubmit="return validateForm();">
              <input type="hidden" name="username" value="{$USERNAME}" />
              <input type="hidden" name="shorturl_id" value="{$SHORTURL_ID}" />
              <input type="hidden" name="secret_hash" value="{$SECRET_HASH}" />

              <div class="group">
                <input class="form-input" type="password" id="password" name="password" placeholder="" />
                <label class="input-label" for="password">{vtranslate('LBL_NEW_PASSWORD',$MODULE)}</label>
                <span class="toggle-eye" onclick="togglePassword('password', this)">👁</span>
                <div class="strength-meter"><div id="strength-bar" class="strength-bar"></div></div>
                <div id="passwordError" class="error-message"></div>
              </div>

              <div class="group">
                <input class="form-input" type="password" id="confirmPassword" name="confirmPassword" placeholder="" />
                <label class="input-label" for="confirmPassword">{vtranslate('LBL_CONFIRM_PASSWORD',$MODULE)}</label>
                <span class="toggle-eye" onclick="togglePassword('confirmPassword', this)">👁</span>
                <div id="confirmError" class="error-message"></div>
              </div>

              <button class="btn" type="submit" id="btn">Change Password</button>
            </form>

          {else}
            <p>{vtranslate('LBL_PASSWORD_LINK_EXPIRED_OR_INVALID_PASSWORD', $MODULE)}</p>
          {/if}
        </div>
      </div>
    </div>
  </div>
{literal}
  <script>
    const strengthBar = document.getElementById("strength-bar");
    const passwordField = document.getElementById("password");
    const passwordError = document.getElementById("passwordError");
    const confirmError = document.getElementById("confirmError");

    passwordField?.addEventListener("input", updateStrength);

    function togglePassword(id, el) {
      const field = document.getElementById(id);
      if (field.type === "password") {
        field.type = "text";
        el.textContent = "🙈";
      } else {
        field.type = "password";
        el.textContent = "👁";
      }
    }

    function updateStrength() {
      const val = passwordField.value;
      let strength = 0;

      if (val.length >= 8) strength += 25;
      if (/[A-Z]/.test(val)) strength += 25;
      if (/[0-9]/.test(val)) strength += 25;
      if (/[@$!%*?&#]/.test(val)) strength += 25;

      strengthBar.style.width = strength + "%";
      strengthBar.style.backgroundColor =
        strength < 50 ? "#ff4d4d" :
        strength < 75 ? "#ffcc00" : "#28a745";
    }

    function validateForm() {
      passwordError.textContent = "";
      confirmError.textContent = "";

      const password = document.getElementById("password").value.trim();
      const confirmPassword = document.getElementById("confirmPassword").value.trim();

      const regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&#]).{8,}$/;

      if (!password) {
        passwordError.textContent = "Please enter new password.";
        return false;
      }
      if (!regex.test(password)) {
        passwordError.textContent = "Password must have uppercase, lowercase, number, and special character.";
        return false;
      }
      if (password !== confirmPassword) {
        confirmError.textContent = "Passwords do not match.";
        return false;
      }

      document.getElementById("btn").disabled = true;
      return true;
    }
  </script>
  {/literal}
</body>
</html>
