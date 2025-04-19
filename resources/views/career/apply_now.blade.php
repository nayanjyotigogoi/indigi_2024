@extends('layouts.app-new')

@section('title', 'Apply Now | Indigi')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        /* Apply Now Page Styles */
        #apply-now {
            padding: 4rem 2rem;
            background-color: #f9f9f9;
            text-align: center;
        }

        h1 {
            color: #007BFF;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 2rem;
        }

        .application-form {
            max-width: 800px;
            /* Increased width */
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        .tabs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: 1rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .tab-btn.active {
            background-color: #007BFF;
            color: white;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .progress-bar {
            height: 10px;
            background-color: #e0e0e0;
            margin-bottom: 20px;
        }

        .progress {
            height: 100%;
            background-color: #007BFF;
            width: 25%;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
        }

        .prev-btn,
        .next-btn,
        .submit-btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .prev-btn,
        .next-btn {
            background-color: #007BFF;
            color: white;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
        }

        .prev-btn:hover,
        .next-btn:hover {
            background-color: #0056b3;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
@endpush

@section('content')
    <!-- Apply Now Section -->
    <section id="apply-now">
        <div class="container">
            <h1>Apply Now for {{ $job->post_name }}</h1>
            <p>We are excited to have you join our team. Please fill out the application form below.</p>

            <!-- Success Message -->
            @if(session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Application Submitted!',
                            text: "{{ session('success') }}",
                            showConfirmButton: true,
                        });
                    });
                </script>
            @endif

            <!-- Multi-step Form -->
            <form action="{{ route('submit-application') }}" method="POST" class="application-form" enctype="multipart/form-data">
                @csrf

                <!-- Progress Bar -->
                <div class="progress-bar">
                    <div class="progress" id="progress"></div>
                </div>

                <!-- Tab Buttons -->
                <div class="tabs">
                    <button type="button" class="tab-btn active" id="tab-1-btn">Personal Details</button>
                    <button type="button" class="tab-btn" id="tab-2-btn">Education & Skills</button>
                    <button type="button" class="tab-btn" id="tab-3-btn">Experience</button>
                    <button type="button" class="tab-btn" id="tab-4-btn">Documents</button>
                </div>

                <!-- Tab 1: Personal Details -->
                <div class="tab-content" id="tab-1">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                </div>

                <!-- Tab 2: Education & Skills -->
                <div class="tab-content" id="tab-2" style="display: none;">
                    <div class="form-group">
                        <label for="education">Education</label>
                        <input type="text" id="education" name="education" required>
                    </div>

                    <div class="form-group">
                        <label for="skills">Skills</label>
                        <input type="text" id="skills" name="skills" required>
                    </div>

                    <div class="form-group">
                        <label for="portfolio">Portfolio Link (if applicable)</label>
                        <input type="url" id="portfolio" name="portfolio">
                    </div>

                    <div class="form-group">
                        <label for="linkedIn">LinkedIn Profile (if applicable)</label>
                        <input type="url" id="linkedIn" name="linked_in">
                    </div>
                </div>

                <!-- Tab 3: Experience -->
                <div class="tab-content" id="tab-3" style="display: none;">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" id="role" name="role" value="{{ $job->post_name }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" id="experience" name="experience" required>
                    </div>

                    <div class="form-group">
                        <label for="current_ctc">Current CTC</label>
                        <input type="text" id="current_ctc" name="current_ctc" required>
                    </div>

                    <div class="form-group">
                        <label for="expected_ctc">Expected CTC</label>
                        <input type="text" id="expected_ctc" name="expected_ctc" required>
                    </div>
                </div>

                <!-- Tab 4: Documents -->
                <div class="tab-content" id="tab-4" style="display: none;">
                    <div class="form-group">
                        <label for="resume">Upload Resume</label>
                        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx" required>
                    </div>

                    <div class="form-group">
                        <label for="coverLetter">Cover Letter</label>
                        <textarea id="coverLetter" name="cover_letter" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="form-navigation">
                    <button type="button" class="prev-btn" id="prev-btn">Previous</button>
                    <button type="button" class="next-btn" id="next-btn">Next</button>
                    <button type="submit" class="submit-btn" id="submit-btn" style="display:none;">Submit
                        Application</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit-btn');
            const progress = document.getElementById('progress');
            let currentTab = 0;

            // Function to update visibility and styles based on the current tab
            function updateTabVisibility() {
                tabContents.forEach((content, index) => {
                    content.style.display = 'none'; // Hide all tabs initially
                    if (index === currentTab) {
                        content.style.display = 'block'; // Show only the current tab
                    }
                });

                tabs.forEach((tab, index) => {
                    tab.classList.remove('active'); // Remove active class from all tabs
                    if (index === currentTab) {
                        tab.classList.add('active'); // Add active class to the current tab
                    }
                });

                // Control the visibility of buttons
                if (currentTab === 3) {
                    nextBtn.style.display = 'none';
                    submitBtn.style.display = 'inline-block';
                } else {
                    nextBtn.style.display = 'inline-block';
                    submitBtn.style.display = 'none';
                }

                if (currentTab === 0) {
                    prevBtn.style.display = 'none';
                } else {
                    prevBtn.style.display = 'inline-block';
                }

                // Update progress bar
                progress.style.width = `${(currentTab + 1) * 25}%`;
            }

            // Next button click event
            nextBtn.addEventListener('click', () => {
                if (currentTab < 3) {
                    // Ensure all fields are filled on the current tab before moving to the next one
                    if (validateCurrentTab()) {
                        currentTab++;
                        updateTabVisibility();
                    }
                }
            });

            // Previous button click event
            prevBtn.addEventListener('click', () => {
                if (currentTab > 0) {
                    currentTab--;
                    updateTabVisibility();
                }
            });

            // Submit button click event (form submission)
            submitBtn.addEventListener('click', (e) => {
                // Ensure all tabs are valid before submitting
                if (validateForm()) {
                    // If form is valid, submit the form
                    document.querySelector('form').submit();
                } else {
                    e.preventDefault(); // Prevent form submission if validation fails
                    alert('Please fill out all required fields.');
                }
            });

            // Validate fields in the current tab
            function validateCurrentTab() {
                const currentTabContent = tabContents[currentTab];
                const inputs = currentTabContent.querySelectorAll('input, textarea');
                let valid = true;
                inputs.forEach(input => {
                    if (input.required && !input.value) {
                        valid = false;
                    }
                });
                return valid;
            }

            // Validate all form fields before submission
            function validateForm() {
                let valid = true;
                tabContents.forEach(content => {
                    const inputs = content.querySelectorAll('input, textarea');
                    inputs.forEach(input => {
                        if (input.required && !input.value) {
                            valid = false;
                        }
                    });
                });
                return valid;
            }

            // Initialize form visibility
            updateTabVisibility();
        });
    </script>
@endpush
