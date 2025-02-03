let todos = JSON.parse(localStorage.getItem('todos')) || [];
let currentTaskId = null;
const alarmSound = new Audio('https://cdn.pixabay.com/audio/2024/03/05/audio_21f9aa3f4c.mp3');

// Initialize all event listeners
document.addEventListener('DOMContentLoaded', () => {
    // Task actions
    document.getElementById('todoList').addEventListener('click', handleTaskActions);
    
    // Form submission
    document.getElementById('todoForm').addEventListener('submit', addNewTask);
    
    // Initial setup
    if (Notification.permission !== 'granted') {
        Notification.requestPermission();
    }
    renderTodos();
    scheduleExistingAlarms();
});

function handleTaskActions(e) {
    const btn = e.target.closest('button');
    if (!btn) return;

    const listItem = btn.closest('li');
    const taskId = parseInt(listItem.dataset.id);

    if (btn.classList.contains('complete-btn')) {
        toggleComplete(taskId);
    } else if (btn.classList.contains('delete-btn')) {
        deleteTask(taskId);
    }
}


function addNewTask(e) {
    e.preventDefault();
    const titleInput = document.getElementById('taskTitle');
    const timeInput = document.getElementById('taskTime');
    
    if (!titleInput.value.trim() || !timeInput.value) {
        alert('Please fill in all required fields!');
        return;
    }

    const task = {
        id: Date.now(),
        title: titleInput.value.trim(),
        scheduled: timeInput.value,
        alarmOffset: parseInt(document.getElementById('alarmOffset').value),
        completed: false,
        created: new Date().toISOString()
    };
    
    todos.push(task);
    saveTodos();
    renderTodos();
    scheduleAlarm(task);
    e.target.reset();
}

function renderTodos() {
    const list = document.getElementById('todoList');
    list.innerHTML = todos.map(task => `
        <li data-id="${task.id}" class="flex items-center justify-between p-3 border rounded-md ${task.completed ? 'bg-green-50 opacity-75' : 'hover:bg-gray-50'} transition-all">
            <div class="flex-1">
                <h3 class="font-medium ${task.completed ? 'line-through text-gray-500' : 'text-gray-800'}">
                    ${task.title}
                </h3>
                <div class="text-sm text-gray-500">
                    <span>${new Date(task.scheduled).toLocaleString()}</span>
                    <span class="ml-2 px-2 py-1 bg-blue-100 rounded">⏰ ${task.alarmOffset}m before</span>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button class="complete-btn p-2 ${task.completed ? 'bg-gray-100 text-gray-600' : 'bg-green-100 text-green-600'} rounded-md hover:opacity-80">
                    ${task.completed ? 'Undo' : '✓ Complete'}
                </button>
                <button class="delete-btn p-2 bg-red-100 text-red-600 rounded-md hover:opacity-80">
                    ✕ Delete
                </button>
            </div>
        </li>
    `).join('');
    generateReports();
}

function toggleComplete(id) {
    todos = todos.map(task => 
        task.id === id ? {...task, completed: !task.completed} : task
    );
    saveTodos();
    const taskElement = document.querySelector(`li[data-id="${id}"]`);
    taskElement.classList.add('animate-pulse');
    setTimeout(() => renderTodos(), 300);
}

function deleteTask(id) {
    if (!confirm('Are you sure you want to delete this task?')) return;
    todos = todos.filter(task => task.id !== id);
    saveTodos();
    renderTodos();
}

function scheduleAlarm(task) {
    const alarmTime = new Date(task.scheduled);
    alarmTime.setMinutes(alarmTime.getMinutes() - task.alarmOffset);
    
    const timeout = alarmTime - Date.now();
    if (timeout > 0) {
        setTimeout(() => {
            alarmSound.play();
            showBrowserNotification(task.title, task.scheduled);
            const taskElement = document.querySelector(`li[data-id="${task.id}"]`);
            if (taskElement) {
                taskElement.classList.add('animate-pulse', 'ring-2', 'ring-red-500');
                setTimeout(() => {
                    taskElement.classList.remove('animate-pulse', 'ring-2', 'ring-red-500');
                }, 5000);
            }
        }, timeout);
    }
}

function scheduleExistingAlarms() {
    todos.forEach(task => scheduleAlarm(task));
    setInterval(() => todos.forEach(task => scheduleAlarm(task)), 60000);
}

function showBrowserNotification(title, scheduledTime) {
    if (Notification.permission === 'granted') {
        new Notification(`⏰ Task Reminder: ${title}`, {
            body: `Scheduled for ${new Date(scheduledTime).toLocaleTimeString()}\n${new Date(scheduledTime).toDateString()}`,
            icon: '/notification-icon.png'
        });
    }
}

function generateReports() {
    const reports = document.getElementById('reports');
    const totalTasks = todos.length;
    const completed = todos.filter(t => t.completed).length;
    
    const completedPercent = totalTasks > 0 ? Math.round((completed / totalTasks) * 100) : 0;

    reports.innerHTML = `
        <div class="bg-blue-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-blue-800">Total Tasks</h3>
            <p class="text-3xl font-bold text-blue-600">${totalTasks}</p>
        </div>
        <div class="bg-green-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-green-800">Completed</h3>
            <p class="text-3xl font-bold text-green-600">${completed} <span class="text-sm">(${completedPercent}%)</span></p>
        </div>
    `;
}

function saveTodos() {
    localStorage.setItem('todos', JSON.stringify(todos));
}

// scripts for copy button
document.querySelectorAll(".copy-btn").forEach(button => {
    button.addEventListener("click", () => {
        const targetId = button.getAttribute("data-target");
        const codeElement = document.getElementById(targetId);
        const textToCopy = codeElement.innerText;

        navigator.clipboard.writeText(textToCopy).then(() => {
            button.innerText = "Copied!";
            setTimeout(() => button.innerText = "Copy", 1500);
        }).catch(err => console.error("Copy failed:", err));
    });
});

// HTML Code
document.getElementById("html-code").textContent = `
    <h1 class="text-4xl font-bold mb-8 text-gray-800">Advanced Todo List</h1>

    <!-- Todo Form -->
    <form id="todoForm" class="mb-8 bg-white p-6 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Task Title</label>
                <input type="text" id="taskTitle" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Schedule Time</label>
                <input type="datetime-local" id="taskTime" class="w-full p-2 border rounded-md" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Alarm Before</label>
                <select id="alarmOffset" class="w-full p-2 border rounded-md">
                    <option value="5">5 minutes</option>
                    <option value="10">10 minutes</option>
                    <option value="15">15 minutes</option>
                </select>
            </div>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">Add Task</button>
        <button id="stopAlarm" class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors float-right" onclick="window.location.reload()">Stop Alarm</button>       
    </form>

    <!-- Todo List -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Your Tasks</h2>
        <ul id="todoList" class="space-y-3"></ul>
    </div>

    <!-- Reports Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Activity Reports</h2>
        <div id="reports" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
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
    font-size: 1.25rem;
    margin-bottom: 1rem;
    }

    /* Todo Form */
    form {
    margin-bottom: 2rem;
    background-color: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    form .grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    }

    form .md\:grid-cols-3 {
    grid-template-columns: repeat(3, 1fr);
    }

    form label {
    display: block;
    font-size: 0.875rem;
    font-weight: 500;
    color: #4a5568;
    margin-bottom: 0.5rem;
    }

    form input, form select {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #e2e8f0;
    border-radius: 0.375rem;
    }

    form input:focus, form select:focus {
    outline: none;
    border-color: #3182ce;
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
    }

    form button {
    padding: 0.5rem 1.5rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.2s;
    }

    form button[type="submit"] {
    background-color: #3182ce;
    color: white;
    }

    form button[type="submit"]:hover {
    background-color: #2b6cb0;
    }

    form button#stopAlarm {
    background-color: #e53e3e;
    color: white;
    float: right;
    }

    form button#stopAlarm:hover {
    background-color: #c53030;
    }

    /* Todo List */
    #todoList {
    list-style: none;
    padding: 0;
    }

    #todoList li {
    background-color: white;
    padding: 1rem;
    border-radius: 0.375rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 1rem;
    }

    /* Reports Section */
    #reports {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    }

    #reports .md\:grid-cols-3 {
    grid-template-columns: repeat(3, 1fr);
    }

    .bg-white {
    background-color: white;
    }

    .rounded-lg {
    border-radius: 0.5rem;
    }

    .shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .p-6 {
    padding: 1.5rem;
    }

    .mb-8 {
    margin-bottom: 2rem;
    }

    .space-y-3 {
    margin-bottom: 0.75rem;
    }

`;
// JS Code
document.getElementById("js-code").textContent = `
    Please Click the Github Repo link to view the code ( As I cannot include every JS code in here :|)
`;