@extends('app')
@section('title', 'Smart-Route')
@section('smart-route')
    


    <!-- Smart Route Section -->
    <div class="w-full md:w-4/5 p-8 bg-gray-100 md:ml-64">
            <!-- Smart Route Section -->
            <div class=" p-8 rounded-lg shadow-lg w-full  bg-white ">
                <!-- Icon or Image -->
                <div class="mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>

                <!-- Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-4"> Payout Dashboard</h2>

                <!-- Description -->
                <p class="text-gray-600 mb-6">
                    Seamlessly redirect to the payout dashboard with Smart Route. Manage your payouts and track your transactions efficiently.
                </p>

                <!-- Redirect Button -->
                <button 
                    class="bg-purple-600 text-white py-2 px-6 rounded-lg hover:bg-purple-700 transition duration-300"
                    onclick="redirectToPayout()">
                    Go to Payout Dashboard
                </button>
            </div>
        </div>


    <script>
        function redirectToPayout() {
            // Replace the URL with the actual payout dashboard link
            window.location.href = "https://www.codegraphi.com/";
        }
    </script>

@endsection
