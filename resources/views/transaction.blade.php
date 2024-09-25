@extends('app')
@section('title', 'CodeGraphi-Transactions')
@section('transaction')
    


    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64">

        <!-- Transaction Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Transaction Details</h2>

            <form id="transactionForm">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Date Input -->
                    <div>
                        <label for="date" class="block mb-2">Date</label>
                        <input type="date" id="date" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>

                    <!-- Time Input -->
                    <div>
                        <label for="time" class="block mb-2">Time</label>
                        <input type="time" id="time" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>

                    <!-- UTR Input -->
                    <div>
                        <label for="utr" class="block mb-2">UTR</label>
                        <input type="text" id="utr" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter UTR" required>
                    </div>

                    <!-- Amount Input -->
                    <div>
                        <label for="amount" class="block mb-2">Transaction Amount</label>
                        <input type="number" id="amount" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter amount" required>
                    </div>
                </div>

               
            </form>
        </div>

        <!-- Transaction History Section -->
        <div id="transactionHistory" class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h3 class="text-lg font-bold mb-6 border-b border-solid border-slate-300">Transaction History</h3>
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">Date</th>
                        <th class="border border-gray-300 p-2">Time</th>
                        <th class="border border-gray-300 p-2">UTR</th>
                        <th class="border border-gray-300 p-2">Amount</th>
                    </tr>
                </thead>
                <tbody id="transactionList">
                    <!-- Transaction history will be populated here -->
                </tbody>
                 <!-- Navigation Buttons -->
                
            </table>
            <div class="flex justify-between mt-6">
                    <button type="button" class="button text-white py-2 px-4 rounded-lg" onclick="previousTransaction()" disabled id="prevButton">Previous</button>
                    <button type="button" class="button text-white py-2 px-4 rounded-lg" onclick="nextTransaction()" disabled id="nextButton">Next</button>
                </div>
            <div id="noTransactions" class="text-center hidden mt-4">
                <p class="text-gray-400 text-xl">No transactions found</p>
                <div class="flex justify-center items-center mt-6">
                    <div class="animate-bounce text-gray-400 text-2xl">CG cg</div>
                </div>
            </div>
        </div>

    </div>

    <script>
    const transactions = []; // Array to hold transaction data
    const entriesPerPage = 10; // Number of entries to display per page
    let currentIndex = 0; // Current index for navigation

    // Sample data for demonstration (you can replace this with real data)
    for (let i = 1; i <= 100; i++) {
        transactions.push({
            date: `2024-09-${i < 10 ? '0' + i : i}`,
            time: '12:00',
            utr: `UTR${i}`,
            amount: (i * 100).toString()
        });
    }

    function updateTransactionDisplay() {
        const transactionList = document.getElementById("transactionList");
        transactionList.innerHTML = ""; // Clear previous entries

        if (transactions.length === 0) {
            document.getElementById("noTransactions").classList.remove("hidden");
            document.getElementById("prevButton").disabled = true;
            document.getElementById("nextButton").disabled = true;
            document.getElementById("prevButton").classList.add("hidden");
            document.getElementById("nextButton").classList.add("hidden");
        } else {
            document.getElementById("noTransactions").classList.add("hidden");
           

            // Calculate the start and end index for the current page
            const startIndex = currentIndex * entriesPerPage;
            const endIndex = Math.min(startIndex + entriesPerPage, transactions.length);

            // Display current transactions for the page
            for (let i = startIndex; i < endIndex; i++) {
                const transaction = transactions[i];
                const tr = document.createElement("tr");
                tr.innerHTML = `
                    <td class="border border-gray-300 p-2">${transaction.date}</td>
                    <td class="border border-gray-300 p-2">${transaction.time}</td>
                    <td class="border border-gray-300 p-2">${transaction.utr}</td>
                    <td class="border border-gray-300 p-2">${transaction.amount}</td>
                `;
                transactionList.appendChild(tr);
            }

            // Enable or disable navigation buttons
            document.getElementById("prevButton").disabled = currentIndex === 0;
            document.getElementById("nextButton").disabled = endIndex >= transactions.length;
        }
    }

    function previousTransaction() {
        if (currentIndex > 0) {
            currentIndex--;
            updateTransactionDisplay();
        }
    }

    function nextTransaction() {
        if ((currentIndex + 1) * entriesPerPage < transactions.length) {
            currentIndex++;
            updateTransactionDisplay();
        }
    }

    // Initial display
    updateTransactionDisplay();
</script>
@endsection