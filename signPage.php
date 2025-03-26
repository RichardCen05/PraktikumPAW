<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <!-- Cloud background image will be added via CSS -->
        </div>
        <div class="right-panel">
            <div class="form-container">
                <h1>Sign Up</h1>
                <p class="welcome-text">Selamat datang! Yuk, buat akunmu dan ciptakan perjalananmu yang menyenangkan!</p>
                
                <form>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" id="username" placeholder="Masukkan nama anda" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="Masukkan email anda" required>
                    </div>
                    
                    <div class="form-group password-group">
                        <label for="password">Kata sandi</label>
                        <div class="password-input-container">
                            <input type="password" id="password" placeholder="Masukkan kata sandi anda" required>
                            <button type="button" class="toggle-password">
                                <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Show password" width="16">
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="remember" checked>
                        <label for="remember">Ingat Password?</label>
                    </div>
                    
                    <button type="submit" class="signup-btn">Sign Up</button>
                    
                    <div class="divider">
                        <span class="divider-line"></span>
                        <span class="divider-text">Atau</span>
                        <span class="divider-line"></span>
                    </div>
                    
                    <button type="button" class="google-btn">
                        <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" alt="Google logo" width="18">
                        Continue with Google
                    </button>
                    
                    <p class="login-link">
                        Sudah memiliki akun? <a href="#">Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>