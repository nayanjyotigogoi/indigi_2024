@extends('layouts')

@section('content')
    <!-- Apply Now Section -->
    <section id="apply-now">
        <div class="container">
            <h1>Apply Now</h1>
            <p>We are excited to have you join our team. Please fill out the application form below.</p>
            <form action="{{ route('submit-application') }}" method="POST" class="application-form">
                @csrf
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="full_name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="position">Position Applying For</label>
                    <select id="position" name="position" required>
                        <option value="web-developer">ABAP Consultant</option>
                        <option value="inside-sales-executive">Inside Sales Executive</option>
                        <option value="web-developer">Marketing Specialist</option>
                        <option value="web-developer">Web Developer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="resume">Upload Resume</label>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                </div>

                <div class="form-group">
                    <label for="coverLetter">Cover Letter</label>
                    <textarea id="coverLetter" name="cover_letter" rows="4" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Submit Application</button>
            </form>
        </div>
    </section>
@endsection

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
        max-width: 600px;
        margin: 0 auto;
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .application-form:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        margin-bottom: 1.5rem;
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select,
    textarea {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    select:focus,
    textarea:focus {
        border-color: #007BFF;
        outline: none;
    }

    .submit-btn {
        background-color: #007BFF;
        color: white;
        padding: 0.7rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // GSAP Animation for form elements
        gsap.from("#apply-now h1", { opacity: 0, y: -50, duration: 1.5, ease: "power4.out" });
        gsap.from("#apply-now p", { opacity: 0, y: 30, duration: 1.5, ease: "power4.out", delay: 0.3 });
        gsap.from(".application-form", { opacity: 0, scale: 0.9, duration: 1, delay: 0.5 });
    });
</script>
