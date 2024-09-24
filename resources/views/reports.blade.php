
@extends('app')
@section('title', 'Reports')
@section('reports')
    


    <div class="w-full md:w-4/5 bg-gray-100 p-8 md:ml-64">

        <!-- Transaction Report Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Generate Transaction Report</h2>
            <button type="button" class="bg-green-500 text-white py-2 px-4 rounded-lg" onclick="generateTransactionReport()">Generate Transaction Report</button>
            <div id="transactionReportOutput" class="mt-4 hidden">
                <h4 class="font-bold">Transaction Report:</h4>
                <p id="transactionReportContent"></p>
            </div>
        </div>

        <!-- Refund Report Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h2 class="text-lg font-bold mb-4 border-b border-solid border-slate-300">Generate Refund Report</h2>
            <button type="button" class="bg-yellow-500 text-white py-2 px-4 rounded-lg" onclick="generateRefundReport()">Generate Refund Report</button>
            <div id="refundReportOutput" class="mt-4 hidden">
                <h4 class="font-bold ">Refund Report:</h4>
                <p id="refundReportContent"></p>
            </div>
        </div>

        <!-- Generated Report History Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
            <h4 class="font-bold mb-2 border-b border-solid border-slate-300">Generated Report History</h4>
            <ul id="reportHistory" class="list-disc pl-5">
                <!-- Report history will be populated here -->
            </ul>
        </div>

    </div>

    <script>
        const reportHistory = []; // Array to hold report history

        function generateTransactionReport() {
            // Sample transaction data (replace with real data as needed)
            const transaction = {
                date: new Date().toLocaleDateString(),
                time: new Date().toLocaleTimeString(),
                utr: "UTR123456",
                amount: "100.00"
            };

            const reportContent = `Date: ${transaction.date}\nTime: ${transaction.time}\nUTR: ${transaction.utr}\nAmount: ${transaction.amount}`;
            document.getElementById("transactionReportContent").innerText = reportContent;
            document.getElementById("transactionReportOutput").classList.remove("hidden");

            // Add to report history
            addToReportHistory("Transaction Report", reportContent);
        }

        function generateRefundReport() {
            // Sample refund data (replace with real data as needed)
            const refund = {
                date: new Date().toLocaleDateString(),
                utr: "UTR123456",
                amount: "50.00"
            };

            const reportContent = `Date: ${refund.date}\nUTR: ${refund.utr}\nAmount: ${refund.amount}`;
            document.getElementById("refundReportContent").innerText = reportContent;
            document.getElementById("refundReportOutput").classList.remove("hidden");

            // Add to report history
            addToReportHistory("Refund Report", reportContent);
        }

        function addToReportHistory(reportType, reportContent) {
            const reportDate = new Date().toLocaleString();
            const fullReport = `${reportDate}: ${reportType}\n${reportContent}`;
            reportHistory.push(fullReport);
            updateReportHistory();
        }

        function updateReportHistory() {
            const reportHistoryList = document.getElementById("reportHistory");
            reportHistoryList.innerHTML = ""; // Clear previous history

            reportHistory.forEach(report => {
                const li = document.createElement("li");
                li.textContent = report;
                reportHistoryList.appendChild(li);
            });
        }
          
    </script>
    @endsection
