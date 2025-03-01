<div id="service-section" class="bg-gray-100 p-8 rounded-lg shadow-lg mx-auto max-w-5xl text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Discover Your Ideal Service!</h2>
    <p class="text-gray-600 mb-6">Answer the questions below to find the service that best suits your needs!</p>

    <div id="service-content">
        <!-- Question Containers -->
        <div class="hidden question-container bg-white p-6 rounded-lg shadow-md" id="question-2">
            <h3 class="text-lg font-medium text-gray-800 mb-4">What is your company's size?</h3>
            <div class="flex flex-col gap-3">
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="small">Small (1-50 employees)</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="medium">Medium (51-200 employees)</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="large">Large (201+ employees)</button>
            </div>
        </div>

        <div class="hidden question-container bg-white p-6 rounded-lg shadow-md" id="question-3">
            <h3 class="text-lg font-medium text-gray-800 mb-4">Which industry do you operate in?</h3>
            <div class="flex flex-col gap-3">
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="manufacturing">Manufacturing</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="retail">Retail</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="finance">Finance</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="technology">Technology</button>
            </div>
        </div>

        <div class="hidden question-container bg-white p-6 rounded-lg shadow-md" id="question-1">
            <h3 class="text-lg font-medium text-gray-800 mb-4">What type of service are you looking for?</h3>
            <div class="flex flex-col gap-3">
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="consulting">SAP Consulting</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="implementation">SAP Implementation</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="support">SAP Support</button>
                <button class="btn px-4 py-2 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100" data-value="custom">Custom ERP Software</button>
            </div>
        </div>

        <!-- Start and Skip Buttons -->
        <button id="start-button" class="btn bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">Start</button>
        <button id="skip-button" class="btn hidden bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600">Skip</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startButton = document.getElementById('start-button');
        const skipButton = document.getElementById('skip-button');
        const questions = document.querySelectorAll('.question-container');
        let currentQuestionIndex = 0;
        let score = { consulting: 0, implementation: 0, support: 0, custom: 0 };

        // Show the first question when the start button is clicked
        startButton.addEventListener('click', () => {
            startButton.classList.add('hidden');
            skipButton.classList.add('hidden');
            questions[currentQuestionIndex].classList.remove('hidden');
        });

        // Handle question answers and scoring
        questions.forEach(question => {
            const buttons = question.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const value = button.getAttribute('data-value');
                    if (value in score) {
                        score[value] += 1; // Increment score for the selected service
                    }
                    question.classList.add('hidden');
                    currentQuestionIndex++;
                    if (currentQuestionIndex < questions.length) {
                        questions[currentQuestionIndex].classList.remove('hidden');
                    } else {
                        showResults();
                    }
                });
            });
        });

        // Function to show the service results
        function showResults() {
            const recommendedService = Object.keys(score).reduce((a, b) => score[a] > score[b] ? a : b);

            // Redirect to the services section and highlight the recommended service
            window.location.href = '#services';
            const recommendedServiceElement = document.querySelector(`[data-service="${recommendedService}"]`);
            if (recommendedServiceElement) {
                recommendedServiceElement.classList.add('border-2', 'border-yellow-500', 'animate-pulse');
            }
        }

        // Skip button logic
        skipButton.addEventListener('click', () => {
            alert('Skipping the questionnaire. Redirecting to services...');
            window.location.href = '#services';
        });
    });
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Discovery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('images/game-bg.png') no-repeat center center/cover; /* Full Background */
            background-attachment: fixed; /* Parallax-like effect when scrolling */
            padding: 20px;
        }

        .gameoverlay {
            position: fixed; /* Covers the entire viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(179, 175, 175, 0.6); /* Dark overlay for contrast */
            z-index: 1;
        }

        .gamecontainer {
            text-align: center;
            max-width: 600px;
            padding: 40px 20px;
            position: relative;
            z-index: 2; /* Appears above the overlay */
        }

        h1 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .gamestart-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 32px;
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .gamestart-button:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .gamestart-button::after {
            content: "→";
            margin-left: 8px;
            font-size: 1.2rem;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="gameoverlay"></div> <!-- Full-screen Overlay -->
    
    <div class="gamecontainer">
        <h1>Discover Your Ideal Service!</h1>
        <p>Answer the questions below to find the service that best suits your needs!</p>
        <a href="#" class="gamestart-button" id="startBtn">Start</a>
    </div>

    <script>
        document.getElementById('gamestartBtn').addEventListener('click', function(e) {
            e.preventDefault();
            // Add animation when clicked
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'translateY(-2px)';
            }, 150);
            
            // Add your navigation logic here
            console.log('Starting service discovery...');
        });
    </script>
</body>
</html>
