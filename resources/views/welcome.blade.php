<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Milestones</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #ffffff;
            padding: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
            position: relative;
        }

        .timeline {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: auto;
            opacity: 0;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 3px;
            background: #ccc;
            z-index: -1;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 1s ease-in-out;
        }

        .milestone {
            margin: 0 30px; /* Adds space between milestones */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 220px;
            position: relative;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.4s ease-in-out;
            gap: 20px;
        }

        .milestone:hover {
            transform: scale(1.1);
        }

        .milestone .year {
            position: absolute;
    background: #0a842e;
    color: white;
    font-weight: bold;
    padding: 10px;
    border-radius: 20px;
    font-size: 14px;
        }

        .milestone:hover .year {
            background: #0b6e2b;
            box-shadow: 0 0 15px rgba(10, 132, 46, 0.6);
        }
        .year.left {
            left: -2px;
        }

        .year.right {
            margin-top: 50px;
            right: -1px;
        }

        /* Create the curved dotted line */
        .milestone::after {
            content: "";
            position: absolute;
            top: 10px; /* Adjusts to align with the right year */
            left: 100%; /* Starts at the right side of the milestone */
            width: 60px; /* Adjust space between milestones */
            height: 50px; /* Controls arc height */
            border-top: 3px dashed #0a842e;
            border-right: 3px dashed #0a842e;
            border-radius: 10px; /* Makes the arc */
            transform: rotate(-70deg);
        }

        /* Hide the arc on the last milestone */
        .milestone:last-child::after {
            display: none;
        }

        .milestone .icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eef5ee;
            border-radius: 50%;
            padding: 10px;
            margin: 10px 0;
            transition: all 0.4s ease;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .milestone:hover .icon {
            background: #0a842e;
            transform: rotate(10deg) scale(1.2);
            box-shadow: 0px 4px 20px rgba(10, 132, 46, 0.5);
        }

        .milestone .icon img {
            width: 40px;
            transition: transform 0.3s;
        }

        .milestone:hover .icon img {
            transform: scale(1.1);
        }

        .milestone .desc {
            font-size: 14px;
            color: #333;
            max-width: 100px;
            transition: 0.3s ease;
        }

        .milestone:hover .desc {
            color: #0a842e;
            font-weight: bold;
        }

        

        @media (max-width: 768px) {
            .timeline {
                flex-direction: column;
                align-items: center;
            }

            .timeline::before {
                width: 2px;
                height: 100%;
                left: 50%;
                top: 0;
                transform-origin: top;
            }

            .milestone {
                flex-direction: row;
                align-items: center;
                width: 100%;
                justify-content: center;
                margin: 20px 0;
            }

            .milestone .icon {
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>

<h2>COMPANY MILESTONES</h2>


<div class="timeline">
    <div class="milestone">
        <span class="year left">2018</span>
        <div class="icon"><img src="chip.svg"></div>
        <span class="year right">2018</span>
        <div class="desc">Founded in Guwahati</div>
    </div>

    <div class="milestone">
        <span class="year left">2019</span>
        <div class="icon"><img src="growth.svg"></div>
        <span class="year right">2019</span>
        <div class="desc">Expanded our services</div>
    </div>

    <div class="milestone">
        <span class="year left">2020</span>
        <div class="icon"><img src="bar-chart.svg"></div>
        <span class="year right">2020</span>
        <div class="desc">Innovative IT startup in the region</div>
    </div>

    <div class="milestone">
        <span class="year left">2021</span>
        <div class="icon"><img src="bar-chart.svg"></div>
        <span class="year right">2021</span>
        <div class="desc">20+ satisfied clients</div>
    </div>

    <div class="milestone">
        <span class="year left">2022</span>
        <div class="icon"><img src="certificate.svg"></div>
        <span class="year right">2022</span>
        <div class="desc">40+ satisfied clients</div>
    </div>

    <div class="milestone">
        <span class="year left">2023</span>
        <div class="icon"><img src="insurance.svg"></div>
        <span class="year right">2023</span>
        <div class="desc">60+ satisfied clients</div>
    </div>

    <div class="milestone">
        <span class="year left">2024</span>
        <div class="icon"><img src="tech.svg"></div>
        <span class="year right">2024</span>
        <div class="desc">100+ satisfied clients</div>
    </div>
</div>



<script>
    gsap.registerPlugin(ScrollTrigger);

    // Fade in timeline when scrolled
    gsap.to(".timeline", {
        opacity: 1,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".timeline",
            start: "top 80%",
        }
    });

    // Animate milestones
    gsap.utils.toArray(".milestone").forEach((milestone, i) => {
        gsap.to(milestone, {
            opacity: 1,
            scale: 1,
            duration: 0.5,
            delay: i * 0.1,
            ease: "back.out(1.7)",
            scrollTrigger: {
                trigger: milestone,
                start: "top 90%",
            }
        });
    });

    // Animate timeline line draw
    gsap.to(".timeline::before", {
        transform: "scaleX(1)",
        duration: 1.5,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".timeline",
            start: "top 80%",
        }
    });
</script>

</body>
</html>
