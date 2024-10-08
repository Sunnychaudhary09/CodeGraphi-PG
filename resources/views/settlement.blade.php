@extends('app')
@section('title', 'CodeGraphi-Settlement')
@section('settlement')
    

       <!-- Main Content (4/5 width) -->
    <div class="w-full md:w-4/5 bg-gray-100 p-4 md:p-8 md:ml-64">

<!-- Auto Settlement Section -->
<div class="bg-white p-4 md:p-6 rounded-lg shadow-lg mb-6">
    <h2 class="text-lg font-bold mb-4 border-b border-solid border-slate-300 flex items-center">
        <i class="fas fa-money-bill-wave mr-2"></i> Settlement
    </h2>
    <button class="button text-white py-2 px-4 rounded-lg mb-4" onclick="settleAllTransactions()">Settle All Transactions</button>


    <!-- Responsive Transaction Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 text-sm">
            <thead>
                <tr class="bg-gray-200 text-xs md:text-sm">
                    <th class="border px-2 py-2 md:px-4">Transaction ID</th>
                    <th class="border px-2 py-2 md:px-4">Amount</th>
                    <th class="border px-2 py-2 md:px-4">Settlement Date</th>
                    <th class="border px-2 py-2 md:px-4">UTR Number</th>
                    <th class="border px-2 py-2 md:px-4">Action</th>
                </tr>
            </thead>
            <tbody id="transactionTableBody">
                <!-- Transactions will be populated here -->
            </tbody>
        </table>
    </div>

    {{-- <div class="mt-4">
        <button class="bg-green-500 text-white py-2 px-4 rounded-lg" onclick="simulatePayment()">Simulate Payment</button>
    </div> --}}

    <!-- Settlement History Section -->
    <h4 class="font-bold mt-6 mb-2 border-b border-solid border-slate-300">Settlement History</h4>
    <ul id="settlementHistory" class="list-disc pl-5 text-sm">
        <!-- Settlement history will be populated here -->
    </ul>
</div>

</div>


    </div>

    <script>
        const transactions = [
            { id: 'TXN001', amount: 500, date: '2024-09-23', utr: 'UTR12345' },
            { id: 'TXN002', amount: 750, date: '2024-09-24', utr: 'UTR67890' },
            { id: 'TXN003', amount: 750, date: '2024-09-24', utr: 'UTR67890' },
            { id: 'TXN004', amount: 750, date: '2024-09-24', utr: 'UTR67890' },
            // Add more transactions as needed
        ];
    
        // Array to store the settled transaction IDs
        const settledTransactions = new Set();
        const settlementHistory = [];
    
        // Function to process individual settlement
        function processSettlement(transactionId, amount, date, utr) {
            
            // Check if the transaction ID is already settled
            if (settledTransactions.has(transactionId)) {
                alert("Transaction already settled!");
                return; // Exit the function if already settled
            }
           
            // If not settled, process the settlement
            const historyEntry = `Transaction ID: ${transactionId}, Amount: ${amount}, Date: ${date}, UTR: ${utr}`;
            settlementHistory.push(historyEntry);

            
    
            // Mark the transaction as settled by adding its ID to the set
            settledTransactions.add(transactionId);

    
            // Update the settlement history display
            updateSettlementHistory();
        }
        let anySettled = false;
        // Function to settle all transactions
        function settleAllTransactions() {

            if (settledTransactions.size === transactions.length) {
            alert("All transactions are already settled.");
            return; // Exit if all transactions are already settled
        }


            transactions.forEach(transaction => {
                if (!settledTransactions.has(transaction.id)) {
                    processSettlement(transaction.id, transaction.amount, transaction.date, transaction.utr);
                    anySettled =true;
                }
                
            });
            if (anySettled) {
            alert("All transactions have been settled!");
        }
            
        }
    
        // Update settlement history display
        function updateSettlementHistory() {
            const historyList = document.getElementById("settlementHistory");
            historyList.innerHTML = ""; // Clear previous history
    
            settlementHistory.forEach(entry => {
                const li = document.createElement("li");
                li.textContent = entry;
                historyList.appendChild(li);
            });
        }
    
        // Populate the transaction table on load
        function populateTransactionTable() {
            const tableBody = document.getElementById("transactionTableBody");
            transactions.forEach(transaction => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="border px-4 py-2">${transaction.id}</td>
                    <td class="border px-4 py-2">${transaction.amount}</td>
                    <td class="border px-4 py-2">${transaction.date}</td>
                    <td class="border px-4 py-2">${transaction.utr}</td>
                    <td class="border px-4 py-2">
                        <button class="button text-white py-1 px-2 rounded-lg" onclick="processSettlement('${transaction.id}', ${transaction.amount},'${transaction.date}', '${transaction.utr}')">Settle</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }
    
        // Populate the table when the page loads
        window.onload = populateTransactionTable;
    
    </script>
    
    @endsection



