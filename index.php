<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Bank Management System</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'rgb(139, 195, 74)',
                        secondary: 'rgb(17, 17, 17)',
                    },
                    backgroundImage: {
                        banner: "url('image/bankimage.jpg')",
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-gray-100">
    <header class="bg-yellow-500 p-4 fixed w-full shadow z-10">
        <div class="max-w-[1100px] container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">
                <img src="image/logo.png" alt="Logo" class="h-14 w-14 rounded-full" />
            </div>
            <nav class="relative">
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-white font-bold hover:bg-purple-700 px-4 py-3 rounded-full">Home</a></li>
                    <li class="relative">
                        <a href="#" class="text-white font-bold hover:bg-purple-700 px-4 py-3 rounded-full service-link" id="service-link">About</a>
                        <ul class="absolute left-0 hidden mt-8 p-2 w-40 bg-purple-700 shadow-lg rounded-2xl service-dropdown">
                            <li><a href="search.php" class="block px-4 py-2 text-white hover:bg-yellow-500 rounded-2xl font-bold">Search</a></li>
                            <li><a href="#" class="block px-4 py-2 text-white hover:bg-yellow-500 rounded-2xl font-bold">SEO</a></li>
                            <li><a href="#" class="block px-4 py-2 text-white hover:bg-yellow-500 rounded-2xl font-bold">Digital</a></li>
                        </ul>
                    </li>
                    <li><a class="text-white font-bold hover:bg-purple-700 px-4 py-3 rounded-full">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
            <div class="hero bg-banner min-h-[570px] z-20">
            <div class="flex-col lg:flex-row">
                <h1 class="text-4xl font-bold text-white py-6 mt-4">Management System</h1>
                <div class="px-12 flex gap-6">
                        <button class="btn bg-yellow-500 hover:bg-purple-700 font-bold text-white rounded-full"><a href="create.php">Create Account</a></button>
                         <button class="btn bg-yellow-500 hover:bg-purple-700  font-bold text-white rounded-full"><a href="view.php">View Accounts</a></button>
                </div>
                  
                </div>
            </div>
            </div>
    </main>
    <footer class="bg-base-200 py-6">
      <div class="footer text-base-content p-10 z-20 text-white">
            <aside>
                <img class="w-14 h-14 rounded-full" src="image/logo.png" alt="">
                <p>
                    A Bank Management System streamlines <br> banking operations, enhances customer service, <br> and ensures secure transaction management.
                </p>
            </aside>
            <nav>
                <h6 class="footer-title text-white">Services</h6>
                <a class="link link-hover">Branding</a>
                <a class="link link-hover">Design</a>
                <a class="link link-hover">Marketing</a>
                <a class="link link-hover">Advertisement</a>
            </nav>
            <nav>
                <h6 class="footer-title text-white">Contact</h6>
                <a class="link link-hover">Email: payel@gmail.com</a>
                <a class="link link-hover">Phone: 01753753367</a>
                <a class="link link-hover">Address: 123 Uttara, Azimpur,Dhaka</a>
            </nav>
            <nav>
                <h6 class="footer-title text-white font-bold">Follow Us</h6>
                <a href="https://www.facebook.com" target="_blank" class="link link-hover">
                    <i class="fab fa-facebook-square"></i> Facebook
                </a>
                <a href="https://www.twitter.com" target="_blank" class="link link-hover">
                    <i class="fab fa-twitter-square"></i> Twitter
                </a>
                <a href="https://www.instagram.com" target="_blank" class="link link-hover">
                    <i class="fab fa-instagram-square"></i> Instagram
                </a>
            </nav>
        </div>
         <div class="copyright text-center text-xl font-bold">
        <p>&copy; 2023 Bank Management System. All rights reserved.</p>
 </div>
</footer>
    <script src="bank.js"></script>
</body>
</html>