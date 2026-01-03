<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Laravel වෙතින් CSRF Token එක ලබා ගැනීම (ආරක්ෂාව සඳහා අත්‍යවශ්‍යයි) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Maths Pissa AI Chatbot</title>
    <!-- Tailwind CSS CDN (ඔබ Laravel/Tailwind භාවිතා කරන්නේ නම් මෙය වෙනස් විය හැක) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* ඔබගේ වෙබ් අඩවියේ ප්‍රධාන වර්ණවලට ගැළපෙන පරිදි සකසන ලද වර්ණ */
        :root {
            --primary-purple: #5c0f99; /* තද දම් */
            --accent-green: #38a169; /* උද්දීපන කොළ */
            --accent-orange: #f6ad55; /* උද්දීපන තැඹිලි */
        }
        .chat-area {
            max-height: 70vh; /* Chat Window එකේ උස සීමා කිරීම */
            overflow-y: auto; /* Scroll කිරීමට හැකි කිරීම */
            /* Tailwind Scrollbar Style */
            scrollbar-width: thin;
            scrollbar-color: var(--accent-green) #4c2c77;
        }
        /* Custom Scrollbar */
        .chat-area::-webkit-scrollbar {
            width: 8px;
        }
        .chat-area::-webkit-scrollbar-thumb {
            background-color: var(--accent-green);
            border-radius: 10px;
        }
        .chat-area::-webkit-scrollbar-track {
            background: #4c2c77;
        }
        /* User Message Style */
        .user-message {
            background-color: #7c3aed; /* තද නිල්-දම් */
        }
        /* AI Message Style */
        .ai-message {
            background-color: #2d3748; /* තද අළු */
        }
        /* Loading Animation */
        .dot {
            animation: dot-pulse 1.5s infinite ease-in-out;
        }
        .dot:nth-child(1) { animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.2s; }
        .dot:nth-child(3) { animation-delay: 0.4s; }

        @keyframes dot-pulse {
            0%, 100% { opacity: 0.3; transform: scale(0.8); }
            50% { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4" style="background-color: var(--primary-purple);">

    <div class="w-full max-w-4xl bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col h-[90vh]">
        <!-- Header -->
        <header class="p-4 bg-gray-800 text-white flex items-center justify-between">
            <h1 class="text-2xl font-bold flex items-center">
                <span class="mr-2 text-yellow-400">🧠</span> Maths Pissa AI ChatBot 
            </h1>
            <span class="text-sm font-light text-gray-400">12-16 වයස් කාණ්ඩය සඳහා</span>
        </header>

        <!-- Chat Area -->
        <div id="chat-area" class="chat-area flex-grow p-4 space-y-4">
            <!-- Initial Welcome Message (ආරම්භක පණිවිඩය) -->
            <div class="flex justify-start">
                <div class="ai-message p-3 rounded-xl max-w-xs md:max-w-md shadow-md text-white">
                    <p class="font-semibold text-lg" style="color: var(--accent-green);">හලෝ යාළුවා! 👋</p>
                    <p class="text-sm">මම තමයි ඔයාගේ ගණිත AI ගුරුතුමා. ඔයාට ඕනම ගණිත ගැටලුවක්, පින්තූරයක් එක්ක වුනත් මට යවන්න.✨</p>
                </div>
            </div>
            <!-- Chat Messages will be appended here -->
        </div>

        <!-- Image Preview Area -->
        <div id="image-preview-area" class="p-2 border-t border-gray-200 hidden bg-gray-50 flex items-center justify-between">
            <img id="image-preview" class="max-h-20 max-w-40 rounded-lg object-cover border border-gray-300" src="" alt="Image Preview">
            <div class="flex items-center space-x-2">
                <span id="file-name" class="text-sm text-gray-600 truncate max-w-xs"></span>
                <button id="remove-image-btn" class="text-red-500 hover:text-red-700 font-bold text-lg leading-none">
                    &times; <!-- Close/Remove Icon -->
                </button>
            </div>
        </div>

        <!-- Input Area -->
        <div class="p-4 border-t border-gray-200">
            <form id="chat-form" class="flex items-end space-x-3">
                
                <!-- Image Upload Button -->
                <label for="image-upload" class="p-3 bg-gray-200 rounded-full cursor-pointer hover:bg-gray-300 transition duration-150">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 18m-4-1h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <input type="file" id="image-upload" name="image" accept="image/*" class="hidden">
                </label>

                <!-- Text Input -->
                <textarea id="prompt-input" rows="1" class="flex-grow p-3 border border-gray-300 rounded-xl resize-none focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-150" placeholder="ඔයාගේ ගණිත ප්‍රශ්නය මෙතනින් යවන්න..."></textarea>

                <!-- Send Button -->
                <button type="submit" id="send-btn" class="p-3 rounded-full text-white transition duration-150 flex items-center justify-center w-12 h-12 disabled:opacity-50" style="background-color: var(--accent-green);">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>
        </div>
    </div>

    <script>
        // Blade directive eke mūlyavannu (value) JavaScript niyatānka (constant) 
        // āgi ghōṣisuvudu (declare), brausar kōḍu ōḍuvāga idu sari-yaada URL āgi iruttade.
        const API_ENDPOINT = "{{ route('gemini.chat') }}";

        const chatForm = document.getElementById('chat-form');
        const promptInput = document.getElementById('prompt-input');
        const chatArea = document.getElementById('chat-area');
        const imageUpload = document.getElementById('image-upload');
        const imagePreviewArea = document.getElementById('image-preview-area');
        const imagePreview = document.getElementById('image-preview');
        const fileNameDisplay = document.getElementById('file-name');
        const removeImageBtn = document.getElementById('remove-image-btn');
        const sendBtn = document.getElementById('send-btn');
        let isProcessing = false;

        // Function to scroll chat area to the bottom
        const scrollToBottom = () => {
            chatArea.scrollTop = chatArea.scrollHeight;
        };

        // Function to create and append a message element
        const createMessage = (text, sender, imageUrl = null) => {
            const container = document.createElement('div');
            container.classList.add('flex', sender === 'user' ? 'justify-end' : 'justify-start');

            const message = document.createElement('div');
            message.classList.add('p-3', 'rounded-xl', 'max-w-xs', 'md:max-w-lg', 'shadow-md', 'whitespace-pre-wrap');
            message.classList.add(sender === 'user' ? 'user-message' : 'ai-message', sender === 'user' ? 'text-white' : 'text-gray-100');

            if (imageUrl) {
                const img = document.createElement('img');
                img.src = imageUrl;
                img.classList.add('w-full', 'max-h-48', 'object-contain', 'rounded-lg', 'mb-2', 'border', 'border-gray-500');
                message.appendChild(img);
            }
            
            message.innerHTML += text; // Use innerHTML to allow Markdown formatting from AI
            container.appendChild(message);
            chatArea.appendChild(container);
            scrollToBottom();
            return message;
        };

        // Function to display typing indicator
        const showTypingIndicator = () => {
            const container = document.createElement('div');
            container.id = 'typing-indicator';
            container.classList.add('flex', 'justify-start');
            container.innerHTML = `
                <div class="ai-message p-3 rounded-xl max-w-xs shadow-md text-white flex items-center space-x-1">
                    <span class="text-sm font-semibold">AI ගුරුතුමා ලියනවා...</span>
                    <span class="dot h-2 w-2 bg-gray-400 rounded-full"></span>
                    <span class="dot h-2 w-2 bg-gray-400 rounded-full"></span>
                    <span class="dot h-2 w-2 bg-gray-400 rounded-full"></span>
                </div>
            `;
            chatArea.appendChild(container);
            scrollToBottom();
        };

        // Function to remove typing indicator
        const removeTypingIndicator = () => {
            const indicator = document.getElementById('typing-indicator');
            if (indicator) {
                indicator.remove();
            }
        };

        // Image Preview Logic
        imageUpload.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    fileNameDisplay.textContent = file.name;
                    imagePreviewArea.classList.remove('hidden');
                    scrollToBottom();
                };
                reader.readAsDataURL(file);
            }
        });

        // Remove Image Logic
        removeImageBtn.addEventListener('click', () => {
            imageUpload.value = ''; // Clear file input
            imagePreviewArea.classList.add('hidden');
            imagePreview.src = '';
            fileNameDisplay.textContent = '';
        });

        // Main Form Submission Handler
        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (isProcessing) return;

            const prompt = promptInput.value.trim();
            const imageFile = imageUpload.files[0];

            if (!prompt && !imageFile) return;

            // 1. User Message Display
            let imageUrl = null;
            if (imageFile) {
                // Display the uploaded image in the chat
                imageUrl = imagePreview.src;
            }
            createMessage(prompt || 'පින්තූරයක් පමණි', 'user', imageUrl);
            
            // Clear inputs and set processing state
            promptInput.value = '';
            removeImageBtn.click(); // Clear image preview
            isProcessing = true;
            sendBtn.disabled = true;

            // 2. Show Loading
            showTypingIndicator();

            // 3. Prepare FormData for Multimodal Request
            const formData = new FormData();
            formData.append('prompt', prompt);
            if (imageFile) {
                formData.append('image', imageFile);
            }

            // 4. API Call
            try {
                // Use the pre-evaluated JavaScript constant API_ENDPOINT
                const response = await fetch(API_ENDPOINT, { 
                    method: 'POST',
                    body: formData,
                    // Laravel C-S-R-F Token for security
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });

                removeTypingIndicator();
                
                // --- NEW/IMPROVED ERROR CHECKING LOGIC ---
                if (!response.ok) {
                    const status = response.status;
                    let errorMsg = `සේවාදායකයේ දෝෂයක් සිදුවිය (HTTP ${status}).`;

                    if (status === 500) {
                        errorMsg += ' මෙය **API Key** හෝ **Backend Logic** ගැටලුවක් විය හැක. කරුණාකර **Laravel Log File** (storage/logs/laravel.log) පරීක්ෂා කරන්න.';
                    } else if (status === 419) {
                        errorMsg += ' (CSRF දෝෂය) - කරුණාකර පිටුව නැවත Load කරන්න.';
                    }

                    createMessage('**Error:** ' + errorMsg, 'ai');
                    console.error('Fetch failed with HTTP Status:', status);
                    
                    // Stop further execution on error
                    return; 
                }
                // --- END NEW LOGIC ---

                // Proceed to parse JSON only if response.ok is true (status 200)
                const result = await response.json();

                if (result.candidates && result.candidates[0].content.parts[0].text) {
                    // 5. AI Response Display
                    const aiText = result.candidates[0].content.parts[0].text;
                    createMessage(aiText, 'ai');
                } else {
                    // Handle case where JSON is okay but content is missing
                    const errorMsg = result.error || 'API Response හි අසම්පූර්ණ දත්ත. 😥';
                    createMessage('**Error:** ' + errorMsg, 'ai');
                }

            } catch (error) {
                removeTypingIndicator();
                console.error('Fetch Error:', error);
                createMessage('**Error:** ජාල දෝෂයක්. ඔබේ අන්තර්ජාල සම්බන්ධතාවය පරීක්ෂා කරන්න.', 'ai');
            } finally {
                isProcessing = false;
                sendBtn.disabled = false;
                scrollToBottom();
            }
        });

        // Auto-resize textarea
        promptInput.addEventListener('input', () => {
            promptInput.style.height = 'auto';
            promptInput.style.height = (promptInput.scrollHeight) + 'px';
        });

    </script>
    
</body>
</html>