<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes slideIn {
      from {
        transform: translateX(100%);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slideOut {
      from {
        transform: translateX(0);
        opacity: 1;
      }
      to {
        transform: translateX(-100%);
        opacity: 0;
      }
    }

    .slide-in {
      animation: slideIn 1s ease-in-out forwards;
    }

    .slide-out {
      animation: slideOut 1s ease-in-out forwards;
    }
  </style>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
  <div class="flex w-full max-w-5xl bg-white rounded-lg shadow-lg overflow-hidden">
    
    <!-- Left Form Section -->
    <div class="w-full md:w-1/2 flex justify-center items-center bg-gradient-to-br from-gray-100 to-blue-200 p-8">
      <div class="w-full max-w-md">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-2 text-center tracking-wide">
          ACCOUNT <br> REGISTRATION
        </h2>
        
        <form action="registration-inc.php" method="post" class="space-y-4 mt-6">
          <div>
            <label for="email" class="block text-gray-700 mb-1">Email*</label>
            <input type="email" id="email" name="email" required
                   class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"/>
          </div>
          <div>
            <label for="confirm_email" class="block text-gray-700 mb-1">Confirm email*</label>
            <input type="email" id="confirm_email" name="confirm_email" required
                   class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"/>
          </div>
          <div>
            <label for="password" class="block text-gray-700 mb-1">Valid password*</label>
            <div class="relative">
              <input type="password" id="password" name="password" required minlength="8"
                     class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 pr-10"/>
              <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 
                           9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 
                           0-8.268-2.943-9.542-7z"/>
                </svg>
              </span>
            </div>
            <p class="text-xs text-gray-500 mt-1">* Use 8 characters or more for your password</p>
          </div>
          <div class="flex items-center">
            <input type="checkbox" id="terms" name="terms" required class="mr-2"/>
            <label for="terms" class="text-sm text-gray-700">I agree to terms & conditions</label>
          </div>
          <button type="submit" id="submit" name="submit"
                  class="w-full bg-blue-900 text-white py-2 rounded font-semibold hover:bg-blue-800 transition">
            REGISTER ACCOUNT
          </button>
        </form>

        <!-- Social Icons -->
        <div class="flex justify-center space-x-4 mb-4 mt-5">
          <a href="https://github.com/your-username" target="_blank">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" 
                 alt="GitHub" class="w-8 h-8 hover:scale-110 transition"/>
          </a>
          <a href="https://facebook.com/your-profile" target="_blank">
            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" 
                 alt="Facebook" class="w-8 h-8 hover:scale-110 transition"/>
          </a>
        </div>

        <!-- Links -->
        <div class="text-center text-sm text-gray-600 mb-2">
          Have an account? <a href="login.php" class="text-blue-600 hover:underline">Log in</a>
        </div>
        <div class="text-center text-xs text-gray-400">
          Privacy Policy | Terms of Service | Help / Support
        </div>
      </div>
    </div>

    <!-- Right Image Slider -->
    <div class="hidden md:block w-1/2 relative overflow-hidden">
      <div class="slider relative w-full h-full">
        <img src="../assets/images/genshin.jpg" 
             class="slide object-cover w-full h-full absolute"/>
        <img src="../assets/images/gta.jpg" 
             class="slide object-cover w-full h-full absolute hidden"/>
        <img src="../assets/images/Arcane.jpg" 
             class="slide object-cover w-full h-full absolute hidden"/>
      </div>
    </div>

  </div>

  <script src="../assets/js/registration.js">
  </script>
</body>
</html>
