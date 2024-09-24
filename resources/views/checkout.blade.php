
    
 @extends('app') 
 @section('checkout')
 @section('title', 'checkout-setting')  
 

<div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64">

<!-- Activation Section -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <p class="text-sm font-semibold">
        Hello! We're excited to welcome you aboard. Please activate your account to unlock all the features and functionalities.
    </p>
    <button class="mt-4 bg-purple-600 text-white py-2 px-4 rounded-lg" onclick="goToSubscriptionPage()">Activate Now</button>
</div>

<!-- User Input Section -->
 <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">User Input</h3>
    
    <!-- User Input Form -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Purpose -->
        <div>
            <label for="purpose" class="block mb-2">Purpose</label>
            <select id="purpose" class="w-full p-2 border border-gray-300 rounded" onchange="toggleFormFields()">
                <option value="select">Select</option>
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block mb-2">Name</label>
            <select id="name" class="w-full p-2 border border-gray-300 rounded" >
                <option>Select</option>
                <option>Enable</option>
                <option>Disable</option>
            </select>
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block mb-2">Phone</label>
            <select id="phone" class="w-full p-2 border border-gray-300 rounded" >
                <option>Select</option>
                <option>Enable</option>
                <option>Disable</option>
            </select>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block mb-2">Email</label>
            <select id="email" class="w-full p-2 border border-gray-300 rounded">
                <option>Select</option>
                <option>Enable</option>
                <option>Disable</option>
            </select>
        </div>
    </div>

    <!-- Update Button -->
    <div class="mt-6">
        <button class="bg-purple-600 text-white py-2 px-4 rounded-lg">Update</button>
    </div>

    <!-- Information Section -->
    <div class="mt-4 text-gray-500">
        You can customize the payment flow and capture customer details by enabling user inputs.
    </div>
      <!-- Checkout Message Section -->
   
</div>
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h3 class="text-lg font-bold mb-4">Checkout Message</h3>
        
        <!-- Message Form -->
        <label for="message" class="block mb-2">Message</label>
        <textarea class="w-full p-2 border border-gray-300 rounded" id="message" placeholder="Enter message"></textarea>
        <div class="mt-4">
            <button class="bg-purple-600 text-white py-2 px-4 rounded-lg">Update</button>
        </div>

        <!-- Information Text -->
        <p class="mt-2 text-gray-500">
            The message you set will be visible to your customers on the checkout page.
        </p>
    </div>

    <!-- Checkout Advertisement Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
        <h3 class="text-lg font-bold mb-4">Checkout Advertisement</h3>
        
        <!-- Advertisement Input Form -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Upload Image -->
            <div>
                <label for="advertisementImage" class="block mb-2">Advertisement Image</label>
                <input type="file" id="advertisementImage" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <!-- Advertisement Link -->
            <div>
                <label for="advertisementLink" class="block mb-2">Advertisement Link</label>
                <input type="url" id="advertisementLink" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter advertisement link">
            </div>
        </div>

        <!-- Update Button -->
        <div class="mt-4">
            <button class="bg-purple-600 text-white py-2 px-4 rounded-lg">Update</button>
        </div>
        <p class="mt-2 text-gray-500">
        The advertisement image you set will be visible to your customers on the checkout page</p>
        <p class="mt-2 text-gray-500">
        This feature is only available in the enterprise plan </p>
    </div>
</div>
@endsection