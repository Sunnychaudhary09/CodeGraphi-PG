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
                <div class="flex justify-between mt-6">
                    <button type="button" class="button text-white py-2 px-4 rounded-lg" id="searchButton" onclick="searchTransactions()">Search Transactions</button>
                </div>
               
            </form>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg mt-6 mb-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
        <div>
            <label for="startDate" class="block mb-2">Start Date</label>
            <input type="date" id="startDate" class="w-full md:p-2 p-1 border border-gray-300 rounded" required>
        </div>

        <!-- End Date Input -->
        <div>
            <label for="endDate" class="block mb-2">End Date</label>
            <input type="date" id="endDate" class="w-full md:p-2 p-1 border border-gray-300 rounded" required>
        </div>
    
        <div class=" mt-8">
            <button class="button text-white py-2 px-4 rounded-lg " id="excel-btn" onclick="downloadExcel()">Download Excel</button>
            <button class="button text-white py-2 px-4 rounded-lg" id="pdf-btn" onclick="downloadPDF()">Download PDF</button>
        </div>
    </div>
</div>
        <!-- Transaction History Section -->
        <div id="transactionHistory" class="bg-white p-6 rounded-lg shadow-lg mb-6 overflow-x-auto">
            <h3 class="text-lg font-bold mb-6 border-b border-solid border-slate-300">Transaction History</h3>
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">S.No</th>
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
            serial: (i).toString(),
            date: `${i < 10 ? '0' + i : i}-09-2024`,
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
            document.getElementById("excel-btn").classList.add("hidden");
            document.getElementById("pdf-btn").classList.add("hidden");
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
                <td class="border border-gray-300 p-2">${transaction.serial}</td>
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

    function filterTransactions() {
        const date = document.getElementById("date").value;
        const time = document.getElementById("time").value;
        const utr = document.getElementById("utr").value.toLowerCase();

        const filteredTransactions = transactions.filter(transaction => {
            const transactionDate = new Date(transaction.date.split('-').reverse().join('-')); // Convert to Date object
            const inputDate = new Date(date);

            // Check each field for a match, or if the field is empty, it passes the filter.
            const dateMatch = date === "" || transactionDate.getTime() === inputDate.getTime();
            const timeMatch = time === "" || transaction.time.includes(time);
            const utrMatch = utr === "" || transaction.utr.toLowerCase().includes(utr);

            return dateMatch && timeMatch && utrMatch;
        });


    currentIndex = 0; // Reset the current index
    updateTransactionDisplay(filteredTransactions);
}

 // Add event listeners to trigger search when inputs change
     document.getElementById("date").addEventListener("input", filterTransactions);
    document.getElementById("time").addEventListener("input", filterTransactions);
    document.getElementById("utr").addEventListener("input", filterTransactions);


    // Initial display
    updateTransactionDisplay();

    function filterTransactionsByDate(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        end.setHours(23, 59, 59, 999); // Include the entire end day

        return transactions.filter(transaction => {
            const [day, month, year] = transaction.date.split('-');
            const transactionDate = new Date(`${year}-${month}-${day}`);
            return transactionDate >= start && transactionDate <= end;
        });
    }

    function downloadExcel() {
        const startDate = document.getElementById("startDate").value;
        const endDate = document.getElementById("endDate").value;

        if (!startDate || !endDate) {
            alert("Please select both start and end dates.");
            return;
        }

        const filteredTransactions = filterTransactionsByDate(startDate, endDate);

        const worksheet = XLSX.utils.json_to_sheet(filteredTransactions);
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Transactions");

        XLSX.writeFile(workbook, `transaction_report_${startDate}_to_${endDate}.xlsx`);
    }

    function downloadPDF() {
        const startDate = document.getElementById("startDate").value;
        const endDate = document.getElementById("endDate").value;

        if (!startDate || !endDate) {
            alert("Please select both start and end dates.");
            return;
        }

        const filteredTransactions = filterTransactionsByDate(startDate, endDate);

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // Add a title
        doc.setFontSize(18);
        doc.text("Transaction Report", 14, 15);
        doc.text(`From: ${startDate} To: ${endDate}`, 14, 22);

        // Define starting coordinates for the table
        let startX = 14;
        let startY = 30;
        let rowHeight = 10;
        let colWidth = [15, 30, 30, 50, 30]; // Adjusted to add Serial No. column

        // Add table headers
        doc.setFontSize(12);
        doc.rect(startX, startY, colWidth[0], rowHeight); // Serial No header
        doc.text("S.No", startX + 5, startY + 7);

        doc.rect(startX + colWidth[0], startY, colWidth[1], rowHeight); // Date header
        doc.text("Date", startX + colWidth[0] + 5, startY + 7);

        doc.rect(startX + colWidth[0] + colWidth[1], startY, colWidth[2], rowHeight); // Time header
        doc.text("Time", startX + colWidth[0] + colWidth[1] + 5, startY + 7);

        doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2], startY, colWidth[3], rowHeight); // UTR header
        doc.text("UTR", startX + colWidth[0] + colWidth[1] + colWidth[2] + 5, startY + 7);

        doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3], startY, colWidth[4], rowHeight); // Amount header
        doc.text("Amount", startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3] + 5, startY + 7);

        startY += rowHeight;

        // Loop through filtered transactions and add them to the table
        filteredTransactions.forEach((transaction, index) => {
            if (startY > doc.internal.pageSize.height - 20) {
                doc.addPage();
                startY = 20;

                // Redraw headers on the new page
                doc.rect(startX, startY, colWidth[0], rowHeight); // Serial No header
                doc.text("S.No", startX + 5, startY + 7);

                doc.rect(startX + colWidth[0], startY, colWidth[1], rowHeight); // Date header
                doc.text("Date", startX + colWidth[0] + 5, startY + 7);

                doc.rect(startX + colWidth[0] + colWidth[1], startY, colWidth[2], rowHeight); // Time header
                doc.text("Time", startX + colWidth[0] + colWidth[1] + 5, startY + 7);

                doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2], startY, colWidth[3], rowHeight); // UTR header
                doc.text("UTR", startX + colWidth[0] + colWidth[1] + colWidth[2] + 5, startY + 7);

                doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3], startY, colWidth[4], rowHeight); // Amount header
                doc.text("Amount", startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3] + 5, startY + 7);

                startY += rowHeight;
            }

            // Add transaction data
            doc.rect(startX, startY, colWidth[0], rowHeight);
            doc.text(transaction.serial.toString(), startX + 5, startY + 7); // Serial No

            doc.rect(startX + colWidth[0], startY, colWidth[1], rowHeight);
            doc.text(transaction.date, startX + colWidth[0] + 5, startY + 7); // Date

            doc.rect(startX + colWidth[0] + colWidth[1], startY, colWidth[2], rowHeight);
            doc.text(transaction.time, startX + colWidth[0] + colWidth[1] + 5, startY + 7); // Time

            doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2], startY, colWidth[3], rowHeight);
            doc.text(transaction.utr, startX + colWidth[0] + colWidth[1] + colWidth[2] + 5, startY + 7); // UTR

            doc.rect(startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3], startY, colWidth[4], rowHeight);
            doc.text(transaction.amount.toString(), startX + colWidth[0] + colWidth[1] + colWidth[2] + colWidth[3] + 5, startY + 7); // Amount

            startY += rowHeight;
        });

        doc.save(`transaction_report_${startDate}_to_${endDate}.pdf`);
    }

</script>
@endsection