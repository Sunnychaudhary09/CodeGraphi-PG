@extends('app')
@section('title', 'CodeGraphi-Developer section')
@section('developer')
    

<!-- Developer Section -->
    <div class="w-full md:w-4/5 p-8 bg-gray-100 md:ml-64">
    <div class="p-8 rounded-lg shadow-lg w-full  bg-white">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Developer Section - API Key</h2>
        
        <!-- API Key Display -->
        <div class="bg-gray-100 p-4 rounded-lg mb-4">
            <p class="font-mono text-lg text-gray-800">
                Secret API Key:
                <span id="apiKey" class="font-bold text-gray-900">sk_live_4jf93jf930fj3f9fj3</span>
            </p>
        </div>

        <!-- Copy & Regenerate Button -->
        <div class="flex justify-between items-center">
            <button onclick="copyToClipboard()" class="bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-300">
                Copy API Key
            </button>
            <button onclick="regenerateKey()" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition duration-300">
                Regenerate API Key
            </button>
        </div>

        <!-- Integration Guide -->
        <div class="mt-6 bg-gray-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Integration Guide</h3>
            <p class="text-gray-600 mb-4">Use the API key above to integrate our payment gateway into your application. Follow the steps below to get started:</p>
            <ul class="list-disc list-inside text-gray-600">
                <li>Install the SDK for your preferred language (e.g., Node.js, Python).</li>
                <li>Set the secret key in your server-side environment.</li>
                <li>Start creating payment intents using the API key provided.</li>
            </ul>
        </div>
    </div>
</div>
    <script>
        function copyToClipboard() {
            var apiKeyElement = document.getElementById("apiKey");
            var textArea = document.createElement("textarea");
            textArea.value = apiKeyElement.textContent;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);
            alert("API Key copied to clipboard!");
        }

        function regenerateKey() {
            // Generate a new key (this would be handled server-side in a real scenario)
            var newKey = "sk_live_" + Math.random().toString(36).substr(2, 18); // Example random key
            document.getElementById("apiKey").textContent = newKey;
        }
    </script>

@endsection
