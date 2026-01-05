<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexis - Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <!-- Left Panel -->
        <div class="brand-panel">
            <div class="brand-header">
                <div class="logo-container">
                    <img src="assets/images/Nexis logo.png" alt="logo" height="65">
                </div>
                <h1 class="platform-name">Nexis</h1>
            </div>

            <div class="welcome-content">
                <h2 class="welcome-title">Welcome to Admin Portal</h2>
                <p class="welcome-text">
                    Access the comprehensive school management system. Manage student records, academic results, communication, and administrative operations securely.
                </p>

                <div class="highlight-box">
                    <div class="highlight-title">Unified Platform</div>
                    <p>Integrated solution for academic management, communication, and administrative tasks in one secure environment.</p>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="login-panel">
            <div class="login-header">
                <h3 class="login-title">Secure Access Portal</h3>
                <p class="login-subtitle">Enter your credentials to access the platform</p>
            </div>

            <div class="user-id-section">
                <div class="section-label">
                    <i class="fas fa-user-tag"></i>
                    <span>User Role Selection</span>
                </div>
                <select class="role-select" id="userId">
                    <option value="" disabled selected>Select your role</option>
                    <option value="admin">Administrator</option>
                    <option value="head">Head of School</option>
                    <option value="teacher">Subject Teacher</option>
                    <option value="classteacher">Class Teacher</option>
                </select>
            </div>

            <form id="loginForm">
                <div class="form-group">
                    <label class="form-label" for="username">
                        <i class="fas fa-user-circle"></i> Username or Email
                    </label>
                    <input type="text" id="username" class="form-input" placeholder="Enter username or email address"
                        required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">
                        <i class="fas fa-key"></i> Password
                    </label>
                    <div class="password-container">
                        <input type="password" id="password" class="form-input" placeholder="Enter your password"
                            required>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Keep me logged in</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="login-button">
                    <span>Access Platform</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

    <script>
        // Password toggle
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>

</html>