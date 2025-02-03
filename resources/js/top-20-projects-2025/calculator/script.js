// HTML Code
document.getElementById("html-code").textContent = `
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
`;

// CSS Code
document.getElementById("css-code").textContent = `
    /* General Styles */
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f7fafc;
    margin: 0;
    padding: 0;
    }

    /* Heading Styles */
    h1, h2 {
    color: #2d3748;
    font-weight: bold;
    }

    h1 {
    font-size: 2.25rem;
    margin-bottom: 2rem;
    }

    h2 {
    font-size: 1.875rem;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    }

    /* Calculator Styles */
    #calculator {
    background-color: #edf2f7;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 28rem;
    margin: 0 auto;
    }

    #display {
    background-color: white;
    padding: 1rem;
    border-radius: 0.375rem;
    text-align: right;
    font-size: 1.5rem;
    font-family: 'Courier New', Courier, monospace;
    margin-bottom: 1rem;
    overflow-x: auto;
    }

    #calculator .grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.5rem;
    }

    #calculator button {
    padding: 1rem;
    font-size: 1.25rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.2s;
    border: 1px solid #cbd5e0;
    }

    #calculator button:hover {
    background-color: #e2e8f0;
    }

    #calculator .btn.function {
    background-color: #edf2f7;
    color: #2d3748;
    }

    #calculator .btn.operator {
    background-color: #f7fafc;
    color: #2d3748;
    }

    #calculator .btn.equals {
    background-color: #3182ce;
    color: white;
    }

    #calculator .btn.equals:hover {
    background-color: #2b6cb0;
    }

    /* Personal Finance Table */
    #finance-table {
    background-color: white;
    padding: 1.5rem;
    border-radius: 0.375rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    }

    #finance-table button {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.2s;
    }

    #finance-table button:hover {
    background-color: #edf2f7;
    }

    #finance-table .btn {
    width: 100%;
    max-width: 200px;
    }

    #finance-table .bg-blue-500 {
    background-color: #3182ce;
    color: white;
    }

    #finance-table .bg-blue-500:hover {
    background-color: #2b6cb0;
    }

    #finance-table .bg-red-500 {
    background-color: #e53e3e;
    color: white;
    }

    #finance-table .bg-red-500:hover {
    background-color: #c53030;
    }

    /* Flex and Responsive Styles */
    .md\:flex {
    display: flex;
    }

    .md\:flex-row {
    flex-direction: row;
    }

    .md\:items-center {
    align-items: center;
    }

    .md\:justify-between {
    justify-content: space-between;
    }

    .md\:w-1/2 {
    width: 50%;
    }

    .md\:w-auto {
    width: auto;
    }

    .md\:max-w-md {
    max-width: 28rem;
    }

    .md\:ml-2 {
    margin-left: 0.5rem;
    }

    .mt-4 {
    margin-top: 1rem;
    }

    .mt-2 {
    margin-top: 0.5rem;
    }

    .md\:mt-0 {
    margin-top: 0;
    }

    .max-w-sm {
    max-width: 24rem;
    }

    .relative {
    position: relative;
    }

    /* Canvas Styles */
    #finance-chart {
    width: 100%;
    height: 300px;
    }

`;

// JS Code
document.getElementById("js-code").textContent = `
    Please Click the Github Repo link to view the JS code ( As I cannot include every JS code in here :|)
`;
