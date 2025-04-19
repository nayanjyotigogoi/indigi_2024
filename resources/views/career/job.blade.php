@extends('layouts.app-new')

@section('title', 'Career | Indigi')
@push('styles')
  <style>
        /* Container */
        .container-job {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header-job {
            margin-bottom: 30px;
        }

        .back-link-job {
            display: inline-flex;
            align-items: center;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .back-link-job:hover {
            text-decoration: underline;
        }

        .back-link-job svg {
            margin-right: 5px;
        }
        .apply-button {
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: auto;
            display: inline-block;
            /* Ensure the button is treated as an inline block element */
        }

        .apply-button:hover {
            background-color: #0056b3;
        }


        .page-title-job {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .page-subtitle-job {
            color: #6b7280;
            font-size: 16px;
        }

        /* Job Card */
        .job-card-job {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: box-shadow 0.3s ease;
            margin-bottom: 30px;
        }

        .job-card-job:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        /* Job Header */
        .job-header-job {
            padding: 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        .job-title-container-job {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        @media (min-width: 768px) {
            .job-title-container-job {
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
            }
        }

        .job-title-job {
            font-size: 24px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 8px;
        }

        .job-location-job {
            display: flex;
            align-items: center;
            color: #6b7280;
            font-size: 14px;
        }

        .job-location-job svg {
            margin-right: 5px;
        }

        /* Job Content */
        .job-content-job {
            padding: 24px;
        }

        .section-job {
            margin-bottom: 24px;
        }

        .section-title-job {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 16px;
        }

        .responsibilities-list-job {
            list-style-type: disc;
            padding-left: 20px;
            color: #4b5563;
        }

        .responsibilities-list-job li {
            margin-bottom: 8px;
        }

        /* Skills */
        .skills-container-job {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .skill-badge-job {
            background-color: #f3f4f6;
            color: #374151;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 13px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .skill-badge-job:hover {
            background-color: #e5e7eb;
        }

        /* Job Footer */
        .job-footer-job {
            padding: 20px 24px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .job-type-job {
            color: #6b7280;
            font-size: 14px;
        }

        /* Buttons */
        .btn-job {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            font-size: 14px;
        }

        .btn-primary-job {
            background-color: #3b82f6;
            color: white;
        }

        .btn-primary-job:hover {
            background-color: #2563eb;
        }

        /* Job Counter */
        .job-counter-job {
            text-align: center;
            margin-top: 10px;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
<div class="container-job">
    <div class="header-job">
      <a href="{{ route('career') }}" class="back-link-job">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
        Back to Jobs
      </a>
      <h1 class="page-title-job">Job Opening</h1>
      <p class="page-subtitle-job">Learn more about this opportunity and apply today</p>
    </div>

    <div id="job-card" class="job-card-job">
      <div class="job-header-job">
        <div class="job-title-container-job">
          <div>
            <h2 class="job-title-job">{{ $job->post_name }}</h2>
            <div class="job-location-job">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              {{ $job->city }}, {{ $job->country }}
            </div>
          </div>
          <div>
            <a href="{{ route('apply-now', $job->id) }}" class="apply-button">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="job-content-job">
        <div class="section-job">
          <h3 class="section-title-job">Department</h3>
          <p>{{ $job->Department }}</p>
        </div>

        @if($job->introduction)
        <div class="section-job">
          <h3 class="section-title-job">Introduction</h3>
          <p>{{ $job->introduction }}</p>
        </div>
        @endif

        @if($job->role)
        <div class="section-job">
          <h3 class="section-title-job">Role & Responsibilities</h3>
          <p>{!! nl2br(e($job->role)) !!}</p>
        </div>
        @endif

        @if($job->skills)
        <div class="section-job">
          <h3 class="section-title-job">Required Skills</h3>
          <div class="skills-container-job">
            @foreach(explode(',', $job->skills) as $skill)
              <span class="skill-badge-job">{{ trim($skill) }}</span>
            @endforeach
          </div>
        </div>
        @endif

        @if($job->education)
        <div class="section-job">
          <h3 class="section-title-job">Education</h3>
          <p>{{ $job->education }}</p>
        </div>
        @endif

        @if($job->experience)
        <div class="section-job">
          <h3 class="section-title-job">Experience</h3>
          <p>{{ $job->experience }}</p>
        </div>
        @endif
      </div>

      <div class="job-footer-job">
        <div class="job-type-job">Job Type: {{ $job->position_type }}</div>
        <a href="{{ route('apply-now', $job->id) }}" class="apply-button">Apply Now</a>
    
      </div>
    </div>
  </div>
@endsection
