@extends('app')
@section('title', 'Codegraphi-Default link')
@section('default-link')
    

<div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64">
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <p class="text-sm font-semibold">Hello! We're excited to welcome you aboard. Please activate your account to unlock all the features and functionalities.</p>
            <button class="mt-4 bg-purple-600 text-white py-2 px-2 rounded-lg" onclick="goToSubscriptionPage()">Activate Now</button>
        </div>

<!-- Default Link Section -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Default Link</h3>
    
    <div class="flex items-center">
        <input type="text" id="defaultLink" class="w-full p-2 border border-gray-300 rounded" value="https://codegraphi.com/pay/dD7TFHFU" readonly>
        <button class="ml-4 bg-purple-600 text-white py-2 px-4 rounded-lg" onclick="copyToClipboard()">Copy</button>
    </div>
    
    <!-- Social Share Buttons -->
    <div class="flex mt-4 space-x-8">
        <a href="https://wa.me/?text=https://zerotize.in/pay/dD7TFHFU" target="_blank" class="text-white bg-green-500 p-2 px-3 rounded-full">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://zerotize.in/pay/dD7TFHFU" target="_blank" class="text-white bg-blue-600 p-2 px-3 rounded-full">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=https://zerotize.in/pay/dD7TFHFU" target="_blank" class="text-white bg-blue-400 p-2 px-3 rounded-full">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://t.me/share/url?url=https://zerotize.in/pay/dD7TFHFU" target="_blank" class="text-white bg-blue-700 p-2 px-3 rounded-full">
            <i class="fab fa-telegram"></i>
        </a>
    </div>
</div>

<!-- Link QR Section -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h3 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Link QR</h3>
    
    <div class="flex justify-center">
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://example.com/pay/dD7TFHFU" alt="QR Code" class="w-40 h-40 mt-2">
    </div>
    
    <div class="text-center mt-4">
        <p>Scan QR code to pay</p>
        <button class="mt-2 text-purple-600 underline" onclick="downloadQRCode()">Download</button>
    </div>
    
    <div class="flex justify-center items-center mt-6 text-gray-500">Powered by <img src="img/codegraphi-logo.png" alt="logo" class ="w-18 h-6 ml-2"></div>
</div>
</div>

    <!-- Script to copy the link to clipboard -->
    <script>
       function copyToClipboard() {
    var copyText = document.getElementById("defaultLink");
    copyText.select();
    document.execCommand("copy");
    alert("Link copied to clipboard: " + copyText.value);
}

function downloadQRCode() {
    var link = document.createElement("a");
    link.href = "your-qr-code-image-url-here"; // Replace with actual URL
    link.download = "qr-code.png"; // Specify the download filename
    link.click();
}
</script>
@endsection
