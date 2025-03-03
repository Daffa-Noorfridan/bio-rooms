<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('BioRoom', 'Login') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Login Page</title>
        <style>
            .required::after {
            content: ' *';
            color: red;
            }
            .logo-text-typography{
                font-family: "Reem Kufi";
                font-size: 65px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
            }
            .description-app{
                color: #38AECA;
                font-family: Roboto;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f4f4f4;
                background-image: url('./login.png');
                margin: 0;
            }
            .container {
                display: flex;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 800px;
            }
            .info-container {
                width: 50%;
                align-items:center;
                justify-content: center;
                text-align: center;
            }
            .info-container img {
                width: 100px;
                margin-bottom: 10px;
            }
            .login-container {
                width: 50%;
                padding: 20px;
                text-align: center;
            }
            .login-container h2 {
                margin-bottom: 20px;
                text-align: left;
            }
            .input-group {
                margin-bottom: 15px;
                text-align: left;
            }
            .input-group label {
                display: block;
                margin-bottom: 5px;
            }
            .input-group input {
                width: 94%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .login-button {
                background-color: #F58732;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }
            .login-button:hover {
                background-color: #0056b3;
            }
            .error-message {
                color: red;
                font-size: 12px;
                display: none;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container">
        <div class="login-container">
            <h2>Selamat Datang</h2>
            {{ $slot }}
        </div>
        <div class="info-container">
            <div><center>
            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 250 250" fill="none">
                <path d="M193.821 125.852H187.429C182.156 125.852 177.841 130.167 177.841 135.44V155.288C177.841 158.1 175.553 160.389 172.74 160.389H172.695C169.749 155.693 165.659 151.821 160.81 149.135C155.961 146.449 150.51 145.036 144.967 145.028H133.097V125.852H152.854C157.787 125.851 162.516 123.89 166.003 120.402C169.49 116.914 171.449 112.184 171.449 107.251L163.312 44.3282C162.991 42.1161 161.884 40.0936 160.193 38.631C158.503 37.1684 156.343 36.3635 154.107 36.3637H99.3018C94.6804 36.3637 90.7621 39.7579 90.0973 44.3282L81.9602 107.251C81.9602 112.184 83.9191 116.914 87.406 120.402C90.893 123.89 95.6225 125.851 100.555 125.852H120.312V145.028H108.442C97.8892 145.028 88.608 150.085 82.593 157.813H80.669C79.3172 157.809 78.0218 157.271 77.0659 156.315C76.1101 155.359 75.5716 154.063 75.5682 152.712V134.156C75.5682 128.166 70.6719 123.276 64.6953 123.276H60.8729C54.8963 123.276 50 128.166 50 134.156C50 140.132 54.8963 145.028 60.8729 145.028H62.7841V152.712C62.7947 156.741 64.1649 160.65 66.6729 163.804C69.1809 166.958 72.6799 169.173 76.6037 170.092C75.9377 172.643 75.5898 175.266 75.5682 177.903C75.5682 180.926 78.0227 183.381 81.0462 183.381H119.501L91.6825 215.833C90.599 215.523 89.4792 215.357 88.3523 215.341C85.8238 215.341 83.3521 216.091 81.2498 217.495C79.1475 218.9 77.5089 220.897 76.5413 223.233C75.5737 225.569 75.3205 228.139 75.8138 230.619C76.3071 233.099 77.5247 235.377 79.3126 237.165C81.1004 238.953 83.3783 240.17 85.8582 240.663C88.3381 241.157 90.9085 240.904 93.2445 239.936C95.5805 238.968 97.5771 237.33 98.9819 235.228C100.387 233.125 101.136 230.654 101.136 228.125C101.136 226.271 100.727 224.52 100.011 222.935L120.312 199.246V217.112C116.503 219.33 113.92 223.408 113.92 228.125C113.92 231.516 115.267 234.767 117.665 237.165C120.062 239.562 123.314 240.909 126.705 240.909C130.095 240.909 133.347 239.562 135.744 237.165C138.142 234.767 139.489 231.516 139.489 228.125C139.489 223.408 136.906 219.33 133.097 217.112V199.246L153.398 222.935C152.664 224.567 152.28 226.335 152.273 228.125C152.273 230.654 153.022 233.125 154.427 235.228C155.832 237.33 157.829 238.968 160.165 239.936C162.501 240.904 165.071 241.157 167.551 240.663C170.031 240.17 172.309 238.953 174.097 237.165C175.884 235.377 177.102 233.099 177.595 230.619C178.089 228.139 177.835 225.569 176.868 223.233C175.9 220.897 174.262 218.9 172.159 217.495C170.057 216.091 167.585 215.341 165.057 215.341C163.893 215.341 162.794 215.546 161.727 215.833L133.908 183.381H172.363C173.816 183.381 175.209 182.804 176.236 181.776C177.264 180.749 177.841 179.356 177.841 177.903C177.841 176.055 177.592 174.272 177.298 172.514C181.107 171.513 184.478 169.281 186.889 166.166C189.299 163.05 190.612 159.226 190.625 155.288V145.028H193.821C199.094 145.028 203.409 140.714 203.409 135.44C203.409 130.167 199.094 125.852 193.821 125.852Z" fill="#38AECA"/>
                <circle cx="125" cy="125" r="120" stroke="#38AECA" stroke-width="10"/>
            </svg></center></div>
            <label class="logo-text-typography"><font color="#F58732">Bio</font><font color="#38AECA">Room</font></label> <br> 
            <label class="description-app">Aplikasi Booking Ruang Rapat</label>
        </div>
    </div>
    </body>
</html>
