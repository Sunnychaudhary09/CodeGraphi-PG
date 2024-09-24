@extends('app')
@section('subscription')
    


    <!-- Main content -->
    <div class="w-full md:w-4/5 ml-auto md:ml-64 bg-gray-100 p-8">
        <!-- Header -->
        <div class="mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Subscription Plans</h1>
            <p class="text-blue-500 bg-white rounded-lg shadow-lg p-4 mt-1">Get an amazon voucher worth ₹ 240 when you subscribe to the Enterprise Plus plan!</p>
        </div>

        <!-- Plans Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Individual Plan -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-red-500 text-lg font-semibold">Individual</h2>
                <p class="text-2xl font-bold mt-2">₹300 <span class="line-through text-gray-500">₹500</span></p>
                <ul class="mt-4 space-y-3 text-gray-600 text-sm">
                    <li>✔ 40% Discount</li>
                    <li>✔ 0% Transaction Fee</li>
                    <li>✔ Instant Settlement</li>
                    <li>✔ UPI Intent Support</li>
                    <li>✔ Unlimited UPI Payments</li>
                    <li>✔ Unlimited NEFT / IMPS</li>
                    <li>✔ 30 Days</li>
                </ul>
                <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg">Select Plan</button>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-red-500 text-lg font-semibold">Enterprise</h2>
                <p class="text-2xl font-bold mt-2">₹350 <span class="line-through text-gray-500">₹1000</span></p>
                <ul class="mt-4 space-y-3 text-gray-600 text-sm">
                    <li>✔ 65% Discount</li>
                    <li>✔ 0% Transaction Fee</li>
                    <li>✔ Instant Settlement</li>
                    <li>✔ UPI Intent Support</li>
                    <li>✔ Unlimited UPI Payments</li>
                    <li>✔ Unlimited NEFT / IMPS</li>
                    <li>✔ 30 Days</li>
                </ul>
                <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg">Select Plan</button>
            </div>

            <!-- Individual Plus Plan -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-red-500 text-lg font-semibold">Individual Plus</h2>
                <p class="text-2xl font-bold mt-2">₹1800 <span class="line-through text-gray-500">₹6000</span></p>
                <ul class="mt-4 space-y-3 text-gray-600 text-sm">
                    <li>✔ 70% Discount</li>
                    <li>✔ 0% Transaction Fee</li>
                    <li>✔ Instant Settlement</li>
                    <li>✔ UPI Intent Support</li>
                    <li>✔ Unlimited UPI Payments</li>
                    <li>✔ Unlimited NEFT / IMPS</li>
                    <li>✔ 365 Days</li>
                </ul>
                <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg">Select Plan</button>
            </div>

            <!-- Enterprise Plus Plan -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-red-500 text-lg font-semibold">Enterprise Plus</h2>
                <p class="text-2xl font-bold mt-2">₹2400 <span class="line-through text-gray-500">₹12000</span></p>
                <ul class="mt-4 space-y-3 text-gray-600 text-sm">
                    <li>✔ 80% Discount</li>
                    <li>✔ 0% Transaction Fee</li>
                    <li>✔ Instant Settlement</li>
                    <li>✔ UPI Intent Support</li>
                    <li>✔ Unlimited UPI Payments</li>
                    <li>✔ Unlimited NEFT / IMPS</li>
                    <li>✔ 365 Days</li>
                </ul>
                <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg">Select Plan</button>
            </div>
        </div>
    </div>

    @endsection