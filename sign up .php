
<div class="form-container">
    <div class="form">
        <h2>Sign Up</h2>
        <input type="text" name="name" placeholder="Enter Full Name" class="input-field" required>
        <input type="email" name="email" placeholder="Enter Email Here" class="input-field" required>
        <input type="password" name="password" placeholder="Create Password" class="input-field" required>
        <input type="password" name="confirm-password" placeholder="Confirm Password" class="input-field" required>

        <button class="btn-signup"><a href="#">Sign Up</a></button>

        <p class="signup-link">Already have an account? <a href="#">Login here</a></p>
        <p class="social-login">Or sign up with</p>

        <div class="social-icons">
            <a href="#" class="social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#" class="social-icon"><ion-icon name="logo-google"></ion-icon></a>
            <a href="#" class="social-icon"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="#" class="social-icon"><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
    </div>
</div>

<style>
    /* Body styling */
body {
    font-family: 'Arial', sans-serif;
    background: url('https://thumbs.dreamstime.com/z/tv-studio-news-room-blye-background-news-studio-studio-background-newsroom-bakground-perfect-backdrop-any-green-screen-220337740.jpg') no-repeat center center fixed; /* Add your background image URL here */
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: #fff;
}

/* Form container styling */
.form-container {
    width: 100%;
    max-width: 450px;
    background: rgba(255, 255, 255, 0.85); /* Semi-transparent white background */
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(8px); /* Optional: adds blur effect to the background */
}

/* Form title */
h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 25px;
    color: #333;
}

/* Input fields */
.input-field {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

.input-field:focus {
    border-color: #4e73df;
    background-color: #e6f0ff;
}

/* Button styling */
.btn-signup {
    width: 100%;
    padding: 15px;
    background-color: #4e73df;
    color: white;
    font-size: 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-signup a {
    color: white;
    text-decoration: none;
    display: block;
}

.btn-signup:hover {
    background-color: #2e59d9;
}

/* Links */
.signup-link {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #666;
}

.signup-link a {
    color: #4e73df;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}

/* Social login section */
.social-login {
    text-align: center;
    font-size: 16px;
    margin-top: 20px;
    color: #666;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 10px;
}

.social-icon {
    font-size: 24px;
    color: #4e73df;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #2e59d9;
}

.social-icon ion-icon {
    font-size: 30px;
}

/* Responsive design */
@media (max-width: 480px) {
    .form-container {
        padding: 20px;
    }
    
    h2 {
        font-size: 26px;
    }
    
    .input-field {
        font-size: 14px;
    }

    .btn-signup {
        font-size: 16px;
    }

    .social-icons {
        gap: 10px;
    }
}
</style>

<script>
document.querySelector('.btn-signup').addEventListener('click', function(event) {
    event.preventDefault();
    alert('Sign-up attempt!');
});
</script>
