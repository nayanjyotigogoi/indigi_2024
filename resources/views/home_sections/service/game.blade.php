<style>
    /* General Styling */
    #service-section {
        padding: 30px;
        background-color: #f8f9fa; /* Light background for better contrast */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 100%; /* Limit width for better layout */
        margin: auto; /* Center the service section */
    }

    .question-container {
        margin-top: 20px;
        padding: 20px; /* Add padding to the question container */
        background-color: #ffffff; /* White background for nodes */
        border-radius: 10px; /* Rounded corners for nodes */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .question-text {
        font-size: 1.5rem; /* Larger font for questions */
        margin-bottom: 20px; /* Spacing below the question */
        color: #343a40; /* Dark color for text */
    }

    .answers-container {
        display: flex;
        flex-direction: column;
        gap: 10px; /* Space between answer buttons */
    }

    #start-button {
        width: 20%; /* Full-width buttons */
        padding: 10px;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        transform: translateY(-2px); /* Slight lift effect on hover */
    }

    /* Highlight Recommended Service */
    .highlighted {
        border: 2px solid gold;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
        animation: sparkle-animation 0.5s infinite alternate;
    }

    @keyframes sparkle-animation {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }
</style>

<div id="service-section" class="text-center">
    <h2>Discover Your Ideal Service!</h2>
    <p>Answer the questions below to find the service that best suits your needs!</p>

    <div id="service-content">
       
        <div class="question-container" id="question-2" style="display: none;">
            <h3 class="question-text">What is your company's size?</h3>
            <div class="answers-container">
                <button class="btn btn-light" data-value="small">Small (1-50 employees)</button>
                <button class="btn btn-light" data-value="medium">Medium (51-200 employees)</button>
                <button class="btn btn-light" data-value="large">Large (201+ employees)</button>
            </div>
        </div>
        <div class="question-container" id="question-3" style="display: none;">
            <h3 class="question-text">Which industry do you operate in?</h3>
            <div class="answers-container">
                <button class="btn btn-light" data-value="manufacturing">Manufacturing</button>
                <button class="btn btn-light" data-value="retail">Retail</button>
                <button class="btn btn-light" data-value="finance">Finance</button>
                <button class="btn btn-light" data-value="technology">Technology</button>
            </div>
        </div>

        <div class="question-container" id="question-1" style="display: none;">
            <h3 class="question-text">What type of service are you looking for?</h3>
            <div class="answers-container">
                <button class="btn btn-light" data-value="consulting">SAP Consulting</button>
                <button class="btn btn-light" data-value="implementation">SAP Implementation</button>
                <button class="btn btn-light" data-value="support">SAP Support</button>
                <button class="btn btn-light" data-value="custom">Custom ERP Software</button>
            </div>
        </div>

        <button id="start-button" class="btn btn-success">Start</button>
        <button id="skip-button" class="btn btn-secondary" style="display: none;">Skip</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const startButton = document.getElementById('start-button');
        const skipButton = document.getElementById('skip-button');

        const questions = document.querySelectorAll('.question-container');
        let currentQuestionIndex = 0;
        let score = { consulting: 0, implementation: 0, support: 0, custom: 0 };

        // Show the first question when the start button is clicked
        startButton.addEventListener('click', () => {
            startButton.style.display = 'none';
            skipButton.style.display = 'none';
            questions[currentQuestionIndex].style.display = 'block'; // Show the first question
        });

        // Handle question answers and scoring
        questions.forEach(question => {
            const buttons = question.querySelectorAll('.btn-light');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const value = button.getAttribute('data-value');
                    if (value in score) {
                        score[value] += 1; // Increment score for the selected service
                    }
                    question.style.display = 'none'; // Hide the current question
                    currentQuestionIndex++; // Move to the next question
                    if (currentQuestionIndex < questions.length) {
                        questions[currentQuestionIndex].style.display = 'block'; // Show next question
                    } else {
                        showResults(); // Show results if all questions answered
                    }
                });
            });
        });

        // Function to show the service results
        function showResults() {
            let recommendedService = Object.keys(score).reduce((a, b) => score[a] > score[b] ? a : b);
            
            // Redirect to the services section and highlight the recommended service
            window.location.href = '#services';
            const recommendedServiceElement = document.querySelector(`[data-service="${recommendedService}"]`);
            if (recommendedServiceElement) {
                recommendedServiceElement.classList.add('highlighted'); // Highlight the recommended service
            }
        }

        // Skip button logic
        skipButton.addEventListener('click', () => {
            alert('Skipping the questionnaire. Redirecting to services...');
            window.location.href = '#services';
        });
    });
</script>

<!-- Include the services section here -->
@include('home_sections.services')
