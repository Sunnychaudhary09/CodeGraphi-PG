
   @extends('app')
   @section('profile')
       
  
    <!-- Admin Profile Section -->
    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64 mt-2 md:mt-0">
    <div class=" bg-white p-6 rounded-lg shadow-lg ">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Admin Profile</h2>

        <!-- Profile Picture -->
        <div class="mb-4 text-center">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-24 h-24 rounded-full mx-auto mb-4">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">Upload New Picture</button>
        </div>

        <!-- Personal Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- First Name -->
            <div>
                <label for="firstName" class="block mb-2">First Name</label>
                <input type="text" id="firstName" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter first name" value="John" disabled>
            </div>
            <!-- Last Name -->
            <div>
                <label for="lastName" class="block mb-2">Last Name</label>
                <input type="text" id="lastName" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter last name" value="Doe" disabled>
            </div>
        </div>

        <!-- Contact Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <!-- Email -->
            <div>
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter email address" value="johndoe@example.com" disabled>
            </div>
            <!-- Phone -->
            <div>
                <label for="phone" class="block mb-2">Phone</label>
                <input type="tel" id="phone" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter phone number" value="+1 123 456 7890" disabled>
            </div>
        </div>

        <!-- Account Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- Username -->
            <div>
                <label for="username" class="block mb-2">Username</label>
                <input type="text" id="username" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter username" value="admin_john" disabled>
            </div>
            <!-- Password -->
            <div>
                <label for="password" class="block mb-2">Password</label>
                <input type="password" id="password" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter password" value="*********" disabled>
            </div>
        </div>

        <!-- Address Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- Address -->
            <div class="col-span-2">
                <label for="address" class="block mb-2">Address</label>
                <input type="text" id="address" class="editable w-full p-2 border border-gray-300 rounded" placeholder="Enter address" value="123 Main Street, Cityville, USA" disabled>
            </div>
        </div>

        <!-- Account Settings Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- Role -->
            <div>
                <label for="role" class="block mb-2">Role</label>
                <select id="role" class="editable w-full p-2 border border-gray-300 rounded" disabled>
                    <option value="admin" selected>Admin</option>
                    <option value="viewer">Viewer</option>
                </select>
            </div>
            <!-- Status -->
            <div>
                <label for="status" class="block mb-2">Account Status</label>
                <select id="status" class="editable w-full p-2 border border-gray-300 rounded" disabled>
                    <option value="active" selected>Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>

        <!-- Edit & Save Buttons -->
        <div class="mt-6 text-center">
            <button id="editBtn" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" onclick="toggleEdit()">Edit Profile</button>
            <button id="saveBtn" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 hidden" onclick="toggleEdit()">Save Profile</button>
        </div>
    </div>
    </div>
    <script>
        function toggleEdit() {
            const inputs = document.querySelectorAll('.editable');
            const saveBtn = document.getElementById('saveBtn');
            const editBtn = document.getElementById('editBtn');

            inputs.forEach(input => {
                input.disabled = !input.disabled;
            });

            saveBtn.classList.toggle('hidden');
            editBtn.classList.toggle('hidden');
        }
    </script>
     @endsection

