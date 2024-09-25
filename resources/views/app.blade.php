<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CodeGraphi Free Payment Gateway')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
    <style>
        /* Custom styles for dropdown visibility */
        .hidden { display: none; }
        .sidebar { transition: transform 0.3s ease; }
        .button { background-color: #020066; }
        .button:hover{background-color: #cc0000; transition: 0.3s ease}
       
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar for mobile -->
    <div class="md:hidden bg-white shadow-lg p-2  sticky w-full z-10 flex justify-between items-center">
        <div class=""><img src="img/codegraphi-logo.png" alt="logo" width="180px" height="40px"></div>
        <button id="mobile-menu-toggle" class="text-gray-700">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar fixed inset-y-0 left-0 w-64 bg-white shadow-lg p-3 transform -translate-x-full md:translate-x-0 md:block">
        <div class="mb-2 pb-2 border-b border-solid border-slate-300"><img src="img/codegraphi-logo.png" alt="logo" width="160px" height="50px"></div>
        <nav class="flex flex-col space-y-3">
            <a href="/dashboard" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-tachometer-alt mr-4"></i> Dashboard</a>
            <a href="/transaction" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-wallet mr-4"></i> Transactions</a>
            <a href="/reports" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-file-invoice mr-4"></i> Reports</a>
            <a href="/settlement" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-money-bill-wave mr-3"></i> Settlement</a>

            <!-- Payment Link with dropdown -->
            <div class="flex flex-col space-y-3">
                <a href="#" id="toggle-payment-link" class="flex items-center text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2">
                    <i class="fas fa-money-check-alt mr-4"></i> Payment Link <i class="fas fa-chevron-down ml-auto"></i>
                </a>
                <div id="payment-dropdown" class="hidden">
                    <ul class="space-y-3">
                        <li class="border-b border-solid border-slate-300 pb-2"><a href="/default-link" class="text-base font-medium text-gray-700 hover:text-purple-600"><i class="fas fa-link mr-4"></i>Default Link</a></li>
                        <li class="border-b border-solid border-slate-300 pb-2"><a href="/custom-link" class="text-base font-medium text-gray-700 hover:text-purple-600"><i class="fas fa-link mr-4"></i>Custom Link</a></li>
                    </ul>
                </div>
            </div>

            <!-- Smart Route with dropdown -->
            <a href="/smart-route" id="toggle-smart-route" class=" text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2">
                    <i class="fas fa-route mr-4"></i> Smart Route </a>
            <a href="/checkout" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-cog mr-3"></i> Checkout Settings</a>
            <a href="/developer" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-code mr-3"></i> Developer</a>
            <a href="/subscription" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-file-invoice mr-4"></i> Subscription</a>
            <a href="/profile" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-user mr-4"></i> Profile</a>
            <a href="/support" class="text-base font-medium text-gray-700 hover:text-purple-600 border-b border-solid border-slate-300 pb-2"><i class="fas fa-headset mr-3"></i> Support</a>
        </nav>
    </div>

    <!-- Main Content -->
   @yield('dashboard')
   @yield('checkout')
   @yield('custom-link')
   @yield('default-link')
   @yield('developer')
   @yield('profile')
   @yield('reports')
   @yield('settlement')
   @yield('smart-route')
   @yield('subscription')
   @yield('support')
   @yield('transaction')

    <!-- JavaScript to handle dropdown and mobile menu toggles -->
    <script>
        // Toggle Payment Link dropdown
        document.getElementById('toggle-payment-link').addEventListener('click', function() {
            document.getElementById('payment-dropdown').classList.toggle('hidden');
        });

        // Toggle Smart Route dropdown
        document.getElementById('toggle-smart-route').addEventListener('click', function() {
            document.getElementById('smart-route-dropdown').classList.toggle('hidden');
        });

        // Toggle mobile menu
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });

       

        
    function goToSubscriptionPage() {
        // Redirect to the subscription page
        window.location.href = "/subscription";
    }
    </script>

</body>
</html>


    

