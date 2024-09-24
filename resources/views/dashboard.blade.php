
@extends('app')
@section('dashboard')
    
    <!-- Main Content -->
    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64 mt-2 md:mt-0">
        <!-- Activation Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <p class="text-sm font-semibold">Hello! We're excited to welcome you aboard. Please activate your account to unlock all the features and functionalities.</p>
            <button class="mt-4 bg-purple-600 text-white py-2 px-2 rounded-lg" onclick="goToSubscriptionPage()">Activate Now</button>
        </div>

        <!-- Statistics Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Today -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <p class="text-gray-700 text-lg">Today</p>
                    <a href="#" class="text-purple-600 ">View all</a>
                </div>
                <p id="today" class="text-2xl font-bold mt-4">₹ 0.00</p>
            </div>
            <!-- Pending -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <p class="text-gray-700 text-lg">Pending</p>
                    <a href="#" class="text-purple-600 ">View all</a>
                </div>
                <p id="pending" class="text-2xl font-bold mt-4">₹ 0.00</p>
            </div>
            <!-- Success -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <p class="text-gray-700 text-lg">Success</p>
                    <a href="#" class="text-purple-600 ">View all</a>
                </div>
                <p id="success" class="text-2xl font-bold mt-4">₹ 0.00</p>
            </div>
            <!-- Failed -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <p class="text-gray-700 text-lg">Failed</p>
                    <a href="#" class="text-purple-600 ">View all</a>
                </div>
                <p id="failed" class="text-2xl font-bold mt-4">₹ 0.00</p>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="w-full max-w-md mt-6">
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

        <!-- No Payment Found Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mt-6">
            <div class="flex justify-center items-center h-32">
                <p class="text-gray-400">No payment found</p>
            </div>
        </div>
    </div>
@endsection
    <!-- JavaScript to handle dropdown and mobile menu toggles -->
  