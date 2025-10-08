@extends('layouts.app-new')

@section('title', 'Career | Indigi')
@push('styles')
  <style>
    /* Container */
    /* .container-job {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    } */

    .job-card {
    background: white;
    max-width: 900px;
    margin: 30px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    }

    .job-card h2 {
    color: #222;
    font-size: 1.6rem;
    margin-bottom: 10px;
    }

    .job-info {
    display: flex;
    justify-content: space-around;
    margin: 20px 0;
    }

    .job-info .label {
    font-weight: bold;
    color: #666;
    font-size: 0.85rem;
    }

    .job-card button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 20px;
    cursor: pointer;
    transition: background 0.3s ease;
    }

    .job-card button:hover {
    background-color: #0056b3;
    }

    .job-details {
    max-width: 900px;
    margin: 20px auto;
    padding: 0 20px;
    }

    .job-details h3 {
    margin: 20px 0 5px;
    font-size: 1.1rem;
    color: #0d47a1;
    }

    .job-details h3 span {
    color: #444;
    font-weight: normal;
    }

    .job-details h4 {
    margin-top: 25px;
    color: #003366;
    font-size: 1rem;
    border-bottom: 1px solid #ccc;
    padding-bottom: 4px;
    }

    .job-details ul {
    padding-left: 20px;
    margin: 10px 0 20px;
    }

    .job-details ul li {
    margin-bottom: 8px;
    }
  </style>
@endpush

@section('content')

  <!-- Hero -->
  <section id="career-hero">
    <div class="hero-content">
    <h1>Join Our Team</h1>
    <p>Your dream job awaits!</p>
    <!-- <a href="#job-listings" class="cta-button">View Job Openings</a> -->
    </div>
  </section>

  <section class="job-card">
    <h2>{{ $job->post_name }}</h2>
    <p>Experience: {{ $job->experience }}<br />Positions: {{ $job->position_type ?? '1' }}</p>
    <div class="job-info">
    <div>
      <p class="label">Location</p>
      <p>{{ $job->city }}, {{ $job->country }}</p>
    </div>
    <div>
      <p class="label">Department</p>
      <p>{{ $job->Department }}</p>
    </div>
    <div>
      <p class="label">Job Type</p>
      <p>{{ $job->position_type }}</p>
    </div>
    </div>
    <a href="{{ route('apply-now', $job->id) }}">
    <button>Apply Now →</button>
    </a>
  </section>

  <section class="job-details">
    @if($job->education)
    <h3>Qualification: <span>{{ $job->education }}</span></h3>
    @endif

    @if($job->experience)
    <h3>Experience: <span>{{ $job->experience }}</span></h3>
    @endif

    @if($job->vacancy)
    <h3>No. of Vacancy: <span>{{ $job->vacancy }}</span></h3>
    @endif

    @if($job->role)
    <h3>Job Description</h3>
    <h4>Role and Responsibilities</h4>
    
    @foreach(explode("\n", $job->role) as $role_line)
    {!! trim($role_line) !!}
    @endforeach
    
    @endif

    @if($job->skills)
    <h4>Mandatory Skills:</h4>
    
    @foreach(explode(',', $job->skills) as $skill)
      {!! trim($skill)  !!}
    @endforeach
    
    @endif

   
    @if($job->preferred_skill)
    <h4>Preferred Skills:</h4>
    
    @foreach(explode("\n", $job->preferred_skill) as $pskill)
    {!! trim($pskill) !!}
    @endforeach
    
    @endif

    @if($job->candidate_profile)
    <h4>Desired Candidate Profile</h4>
    
    @foreach(explode("\n", $job->candidate_profile) as $profile_line)
    {!! trim($profile_line)  !!}
    @endforeach
    
    @endif
  </section>

@endsection