<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="left-side">
        <img src="jellyfish.jpeg" alt="Jellyfish in deep blue ocean">
        <div class="watermark"></div>
    </div>
    <div class="right-side">
        <div class="login-form">
            <h1>Login</h1>
            <p class="welcome-text">Selamat datang kembali! Yuk, masuk ke akunmu dan lanjutkan perjalananmu!</p>
            
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Masukkan email anda">
            </div>
            
            <div class="form-group">
                <label for="password">Kata sandi</label>
                <div class="password-container">
                    <input type="password" id="password" placeholder="Masukkan kata sandi anda">
                    <span class="toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                            <line x1="17" y1="18" x2="7" y2="6"></line>
                        </svg>
                    </span>
                </div>
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" checked>
                <label for="remember">Ingat Password?</label>
            </div>
            
            <button class="login-btn">Log-in</button>
            
            <div class="divider">
                <span>Atau</span>
            </div>
            
            <button class="google-btn">
                <span class="google-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#fff">
                        <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032 s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2 C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                    </svg>
                </span>
                Continue with Google
            </button>
            
            <p class="signup-link">Belum memiliki akun? <a href="signPage.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>