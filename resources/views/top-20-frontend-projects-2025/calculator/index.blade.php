@extends('layouts.front')

@section('title', 'Isaac | Calculator')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@12/dist/handsontable.full.min.css">
<script src="https://cdn.jsdelivr.net/npm/handsontable@12/dist/handsontable.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@section('content')
<div class="container mx-auto p-4">
    <!-- Add Vite directive for CSS -->
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/calculator/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Calculator</h1>
    
    <div id="calculator" class="bg-gray-200 p-6 rounded-lg shadow-md max-w-md mx-auto">
        <div id="display" class="bg-white p-4 rounded text-right text-2xl font-mono mb-4 overflow-x-auto">0</div>
        
        <div class="grid grid-cols-4 gap-2">
            <!-- Row 1 -->
            <button class="btn function" data-value="MC">MC</button>
            <button class="btn function" data-value="MR">MR</button>
            <button class="btn function" data-value="M+">M+</button>
            <button class="btn function" data-value="C">C</button>
            
            <!-- Row 2 -->
            <button class="btn function" data-value="7">7</button>
            <button class="btn function" data-value="8">8</button>
            <button class="btn function" data-value="9">9</button>
            <button class="btn operator" data-value="/">&divide;</button>
            
            <!-- Row 3 -->
            <button class="btn function" data-value="4">4</button>
            <button class="btn function" data-value="5">5</button>
            <button class="btn function" data-value="6">6</button>
            <button class="btn operator" data-value="*">&times;</button>
            
            <!-- Row 4 -->
            <button class="btn function" data-value="1">1</button>
            <button class="btn function" data-value="2">2</button>
            <button class="btn function" data-value="3">3</button>
            <button class="btn operator" data-value="-">&minus;</button>
            
            <!-- Row 5 -->
            <button class="btn function" data-value="0">0</button>
            <button class="btn function" data-value=".">.</button>
            <button class="btn equals" data-value="=">=</button>
            <button class="btn operator" data-value="+">+</button>
        </div>
    </div>

    <h2 class="text-3xl font-bold mt-10 mb-4 text-gray-800">Personal Finance Table</h2>
    <div class="md:flex md:flex-row md:items-center md:justify-between">
        <div id="finance-table" class="bg-white p-6 rounded-lg shadow-md w-full md:w-1/2">
            <button id="add-row" class="btn bg-blue-500 text-white p-2 rounded w-full md:w-auto">Add Row</button>
            <button id="delete-row" class="btn bg-red-500 text-white p-2 rounded w-full md:w-auto mt-2 md:mt-0 md:ml-2">Delete Row</button>
            <div id="finance-sheet" class="mt-4"></div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center">
            <div class="relative w-full max-w-sm md:max-w-md">
                <canvas id="finance-chart"></canvas>
            </div>
        </div>
    </div>

    <div class="mt-8 bg-gray-200 p-4 rounded-lg">
        <h2 class="text-lg font-medium text-gray-800 mb-2">Source Code Snippets</h2>
        <div class="space-y-4">

            <!-- HTML Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    HTML 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="html-code">Copy</button>
                </h3>
                <pre id="html-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 300px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>

            <!-- CSS Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    CSS 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="css-code">Copy</button>
                </h3>
                <pre id="css-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 300px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>

            <!-- JavaScript Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    JavaScript 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="js-code">Copy</button>
                </h3>
                <pre id="js-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 80px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>
        </div>
    </div>

    <div class="flex justify-between items-center mt-12">
        <div>
            <a href="https://github.com/IsaacTalb/" target="_blank" rel="noopener noreferrer">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2048px-Octicons-mark-github.svg.png" alt="Github Logo" class="h-6 w-6">
            </a>
        </div>
        <div class="text-center">
            <p class="text-sm text-gray-600">This is part of the <a href="https://github.com/IsaacTalb/top-20-beginner-project-2025/tree/main/calculator" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline">Top 20 Frontend Projects 2025</a> repository.</p>
            <p class="text-sm text-gray-600">Contact me at <a href="mailto:isaac@duckcloud.info" class="text-blue-600 underline">isaac@duckcloud.info</a> if you want to contribute or have any questions.</p>
        </div>
    </div>
    
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const display = document.getElementById("display");
        let currentInput = "";
        let memory = 0;
        
        document.querySelectorAll(".btn").forEach(button => {
            button.addEventListener("click", () => {
                const value = button.getAttribute("data-value");
                
                if (value === "C") {
                    currentInput = "";
                } else if (value === "=") {
                    try {
                        currentInput = eval(currentInput).toString();
                    } catch {
                        currentInput = "Error";
                    }
                } else if (value === "M+") {
                    memory = parseFloat(currentInput) || 0;
                } else if (value === "MR") {
                    currentInput = memory.toString();
                } else if (value === "MC") {
                    memory = 0;
                } else {
                    currentInput += value;
                }
                
                display.textContent = currentInput || "0";
            });
        });

        const data = [
            ["Description", "Amount", "Category"],
            ["Salary", 3000, "Income"],
            ["Rent", -1200, "Expense"],
            ["Groceries", -250, "Expense"],
            ["Savings", 500, "Investment"]
        ];

        const container = document.getElementById('finance-sheet');
        const hot = new Handsontable(container, {
            data: data,
            rowHeaders: true,
            colHeaders: true,
            contextMenu: true,
            formulas: true, 
            minSpareRows: 1,
            licenseKey: "non-commercial-and-evaluation"
        });

        document.getElementById("add-row").addEventListener("click", () => hot.alter("insert_row"));
        document.getElementById("delete-row").addEventListener("click", () => hot.alter("remove_row", hot.countRows() - 1));

        // Update Chart on Data Change
        const ctx = document.getElementById('finance-chart').getContext('2d');
        let financeChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Salary", "Rent", "Groceries", "Savings"],
                datasets: [{
                    data: [3000, -1200, -250, 500],
                    backgroundColor: ['green', 'red', 'orange', 'blue']
                }]
            },
            options: {
                responsive: true,
            }
        });

        hot.addHook('afterChange', function() {
            const values = hot.getData().slice(1);
            const labels = values.map(row => row[0]);
            const amounts = values.map(row => row[1]);

            financeChart.data.labels = labels;
            financeChart.data.datasets[0].data = amounts;
            financeChart.update();
        });
    });
</script>

<!-- Add Vite directive for JS at the bottom -->
@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/calculator/script.js'])
@endsection
