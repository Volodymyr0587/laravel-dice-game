@props(['score'])

<div class="flex items-start mb-8">
    <!-- Images Section -->
    <div class="flex-1">
        <div class="flex justify-center mb-2">
            {{ $slot }}
        </div>
    </div>

    <!-- Description Section -->
    <div class="flex-1 pl-4">
        <p class="mt-2 text-lg font-bold">Score: {{ $score }} points</p>
    </div>
</div>
