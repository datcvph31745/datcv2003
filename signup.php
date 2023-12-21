<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @use postcss-preset-env {
        stage: 0;
    }

    /* config.css */

    :root {
        --baseColor: #606468;
    }

    /* helpers/align.css */

    .align {
        display: grid;
        place-items: center;
    }

    .grid {
        inline-size: 90%;
        margin-inline: auto;
        max-inline-size: 20rem;
    }

    /* helpers/hidden.css */

    .hidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    /* helpers/icon.css */

    :root {
        --iconFill: var(--baseColor);
    }

    .icons {
        display: none;
    }

    .icon {
        block-size: 1em;
        display: inline-block;
        fill: var(--iconFill);
        inline-size: 1em;
        vertical-align: middle;
    }

    /* layout/base.css */

    :root {
        --htmlFontSize: 100%;

        --bodyBackgroundColor: #2c3338;
        --bodyColor: var(--baseColor);
        --bodyFontFamily: "Open Sans";
        --bodyFontFamilyFallback: sans-serif;
        --bodyFontSize: 0.875rem;
        --bodyFontWeight: 400;
        --bodyLineHeight: 1.5;
    }

    * {
        box-sizing: inherit;
    }

    html {
        box-sizing: border-box;
        font-size: var(--htmlFontSize);
    }

    body {
        background-color: var(--bodyBackgroundColor);
        color: var(--bodyColor);
        font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
        font-size: var(--bodyFontSize);
        font-weight: var(--bodyFontWeight);
        line-height: var(--bodyLineHeight);
        margin: 0;
        min-block-size: 100vh;
    }

    /* modules/anchor.css */

    :root {
        --anchorColor: #eee;
    }

    a {
        color: var(--anchorColor);
        outline: 0;
        text-decoration: none;
    }

    a:focus,
    a:hover {
        text-decoration: underline;
    }

    /* modules/form.css */

    :root {
        --formGap: 0.875rem;
    }

    input {
        background-image: none;
        border: 0;
        color: inherit;
        font: inherit;
        margin: 0;
        outline: 0;
        padding: 0;
        transition: background-color 0.3s;
    }

    input[type="submit"] {
        cursor: pointer;
    }

    .form {
        display: grid;
        gap: var(--formGap);
    }

    .form input[type="password"],
    .form input[type="text"],
    .form input[type="submit"] {
        inline-size: 100%;
    }

    .form__field {
        display: flex;
    }

    .form__input {
        flex: 1;
    }

    /* modules/login.css */

    :root {
        --loginBorderRadus: 0.25rem;
        --loginColor: #eee;

        --loginInputBackgroundColor: #3b4148;
        --loginInputHoverBackgroundColor: #434a52;

        --loginLabelBackgroundColor: #363b41;

        --loginSubmitBackgroundColor: #FA6117;
        --loginSubmitColor: #eee;
        --loginSubmitHoverBackgroundColor: #FA6117;
    }

    .login {
        color: var(--loginColor);
    }

    .login label,
    .login input[type="text"],
    .login input[type="password"],
    .login input[type="submit"] {
        border-radius: var(--loginBorderRadus);
        padding: 1rem;
    }

    .login label {
        background-color: var(--loginLabelBackgroundColor);
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        padding-inline: 1.25rem;
    }

    .login input[type="password"],
    .login input[type="text"] {
        background-color: var(--loginInputBackgroundColor);
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
    }

    .login input[type="password"]:focus,
    .login input[type="password"]:hover,
    .login input[type="text"]:focus,
    .login input[type="text"]:hover {
        background-color: var(--loginInputHoverBackgroundColor);
    }

    .login input[type="submit"] {
        background-color: var(--loginSubmitBackgroundColor);
        color: var(--loginSubmitColor);
        font-weight: 700;
        text-transform: uppercase;
    }

    .login input[type="submit"]:focus,
    .login input[type="submit"]:hover {
        background-color: var(--loginSubmitHoverBackgroundColor);
    }

    /* modules/text.css */

    p {
        margin-block: 1.5rem;
    }

    .text--center {
        text-align: center;
    }
</style>

<body class="align">

    <div class="grid">

        <form action="signup-action.php" method="POST" class="form login">

            <div class="form__field">
                <input autocomplete="username" id="login__username" type="text" name="fullname" class="form__input" placeholder="Full name" required>
            </div>
            
            <div class="form__field">
                
                <input autocomplete="username" id="login__username" type="text" name="email" class="form__input" placeholder="E-mail" required>
            </div>

            <div class="form__field">
                
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>
            <div class="form__field">
                <input type="hidden" value="2" name="id_role">
                <input id="login__password" type="password" name="password1" class="form__input" placeholder="Re-Password" required>
            </div>
            <div class="form__field">
                <input type="submit" name="btn" value="Sign Up">
            </div>

        </form>

        <p class="text--center">Not a member? <a href="login.php">Sign in now</a> <svg class="icon">
            </svg></p>

    </div>

</body>

</html>