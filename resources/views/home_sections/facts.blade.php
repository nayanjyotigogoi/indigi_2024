<!-- Facts Section -->
<div class="relative bg-gradient-to-b from-[#0A629A] to-[#37AFFB] py-16">
    <!-- Background Image -->
    <div 
        class="absolute inset-0 bg-cover bg-center opacity-20"
        style="background-image: url('{{ asset('images/gallery/image14.jpeg') }}');"></div>

    <div class="relative container mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center text-white">
            <!-- Fact Box -->
            @foreach ([
                ['icon' => 'fa-users', 'title' => 'Happy Clients', 'count' => 50],
                ['icon' => 'fa-check', 'title' => 'Completed Projects', 'count' => 50],
                ['icon' => 'fa-award', 'title' => 'Industry Verticals', 'count' => 15],
                ['icon' => 'fa-clock', 'title' => 'Years of Experience', 'count' => 6]
            ] as $fact)
            <div class="space-y-4 flex items-center group relative">
                <!-- Icon on the left -->
                <div class="flex items-center justify-center w-16 h-16 bg-white bg-opacity-30 rounded-full mr-4">
                    <i class="fa {{ $fact['icon'] }} text-3xl text-[#FFD700]"></i>
                </div>
                <!-- Text Section -->
                <div class="flex flex-col items-start">
                    <h5 class="text-xl font-semibold transition-all duration-500 ease-in-out group-hover:text-[#FFD700]">
                        {{ $fact['title'] }}
                    </h5>
                    <h1 class="text-5xl font-bold counter" data-count="{{ $fact['count'] }}">0+</h1>
                </div>
                <!-- Underline under the text, appears only on hover, centered -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-1 bg-[#FFD700] transition-all duration-300 ease-in-out group-hover:w-1/2"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Script Section -->
<script>
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    const maxTarget = Math.max(...Array.from(counters).map(counter => +counter.getAttribute('data-count'))); // Get the highest count

    counters.forEach(counter => {
        counter.innerText = '0+'; // Reset to 0+ initially

        const target = +counter.getAttribute('data-count');
        const count = 0; // Start from 0
        const increment = Math.ceil(target / maxTarget); // Calculate increment based on the highest target

        const updateCount = () => {
            const currentCount = +counter.innerText.slice(0, -1); // Remove "+" for counting

            if (currentCount < target) {
                counter.innerText = currentCount + increment > target ? target + '+' : currentCount + increment + '+';
                setTimeout(updateCount, 30); // Slower speed to make them end together
            } else {
                counter.innerText = target + '+'; // Ensure it ends at target
            }
        };

        updateCount();
    });
}

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function checkCountersInView() {
    const factsSection = document.querySelector('.relative.bg-gradient-to-b');
    if (isElementInViewport(factsSection)) {
        animateCounters(); // Trigger counting animation
    }
}

window.addEventListener('scroll', checkCountersInView);

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true, // Only animate once
});

</script>
