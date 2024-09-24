@extends('app')
@section('custom-link')
    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64">

<!-- Activation Section -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <p class="text-sm font-semibold">
        Hello! We're excited to welcome you aboard. Please activate your account to unlock all the features and functionalities.
    </p>
    <button class="mt-4 bg-purple-600 text-white py-2 px-4 rounded-lg" onclick="goToSubscriptionPage()">Activate Now</button>
</div>

<!-- Create Link Section -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Create Link</h3>
    
    <!-- Link Form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Purpose Input -->
        <div>
            <label for="purpose" class="block mb-2">Purpose</label>
            <input type="text" id="purpose" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter purpose">
        </div>

        <!-- Amount Input -->
        <div>
            <label for="amount" class="block mb-2">Amount</label>
            <input type="number" id="amount" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter amount">
        </div>

        <!-- Redirect URL Input -->
        <div>
            <label for="redirectUrl" class="block mb-2">Redirect URL</label>
            <input type="url" id="redirectUrl" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter redirect URL">
        </div>
    </div>

    <!-- Create Button -->
    <div class="mt-6">
        <button class="bg-purple-600 text-white py-2 px-4 rounded-lg" onclick="createLink()">Create</button>
    </div>
</div>

 <!-- Search Bar -->
 <div class="w-full max-w-md mt-6 mb-6">
            <div class="relative">
                <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Search...">
                
                <!-- Search Icon -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.6-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>

<!-- No Payment Link Section -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6 text-center">
    <p class="text-gray-400 text-xl">No payment link found</p>
    <div class="flex justify-center items-center mt-6">
        <div class="animate-bounce text-gray-400 text-2xl">CG cg</div>
    </div>
</div>
</div>

</div>

    
    <script>

    function createLink() {
    // You can add your logic to create the link here
    var purpose = document.getElementById("purpose").value;
    var amount = document.getElementById("amount").value;
    var redirectUrl = document.getElementById("redirectUrl").value;
    
    alert("Link created with Purpose: " + purpose + ", Amount: " + amount + ", Redirect URL: " + redirectUrl);
}

    </script>
@endsection
