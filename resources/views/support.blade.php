@extends('app')
@section('support')
    

 
    <!-- Support Form Section -->
    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64 mt-2 md:mt-0">
    <div class=" bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Support Form</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Issue Description -->
            <div>
                <label for="issue" class="block mb-2">Issue Description</label>
                <textarea id="issue" class="w-full p-2 border border-gray-300 rounded" rows="4" placeholder="Describe your issue..."></textarea>
            </div>
            <!-- Email -->
            <div>
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter your email address">
            </div>
        </div>

        <div class="mt-4">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" onclick="submitTicket()">Submit Ticket</button>
        </div>
    </div>

    <!-- Raised Tickets Section -->
    <div class=" bg-white p-6 rounded-lg shadow-lg mt-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Raised Tickets</h2>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Ticket ID</th>
                    <th class="border px-4 py-2">Issue Description</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody id="ticketTableBody">
                <!-- Tickets will be populated here -->
            </tbody>
        </table>
    </div>
</div>
    <script>
        function submitTicket() {
            const ticketTableBody = document.getElementById('ticketTableBody');
            const ticketId = Math.floor(Math.random() * 1000); // Generate a random ticket ID
            const issue = document.getElementById('issue').value;
            const email = document.getElementById('email').value;
            const status = "Pending"; // Default status

            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="border px-4 py-2">${ticketId}</td>
                <td class="border px-4 py-2">${issue}</td>
                <td class="border px-4 py-2">${email}</td>
                <td class="border px-4 py-2">${status}</td>
            `;
            ticketTableBody.appendChild(row);

            // Clear form fields
            document.getElementById('issue').value = '';
            document.getElementById('email').value = '';
        }
    </script>

@endsection