<!DOCTYPE html>
<html>
<head>
    <title>Dice Game</title>
    @vite(['resources/css/app.css'])
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold my-4">Dice Game</h1>

        <!-- Dice Game Section -->
        <div class="mb-16">
            @if (isset($diceRolls))
                <div class="grid grid-rows-1 grid-flow-col gap-10 mt-20">
                    @foreach ($diceImages as $image)
                        <img class="h-24 w-24" src="{{ asset($image) }}" alt="Dice">
                    @endforeach
                </div>
                <p class="mt-16 text-2xl font-bold">Your roll score: {{ $score }}</p>

                @if ($message)
                    <p class="mt-4 text-2xl font-bold {{ Str::contains($message, 'won') ? 'text-green-500' : 'text-red-500' }}">{{ $message }}</p>
                @else
                    <p class="mt-4 text-2xl font-bold">Total points: {{ $currentPoints }}</p>
                @endif
            @else
                <p>Roll the dice!</p>
            @endif

            <form method="POST" action="{{ route('roll') }}" class="mt-4">
                @csrf
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Roll Dice</button>
            </form>
        </div>

        <!-- Game Rules Section -->
        <div class="mt-16">
            <h2 class="text-xl font-bold mb-4">Game Rules</h2>
            <p class="text-lg mb-4">Your goal is to score <span class="font-bold">1000</span> points</p>
            <p class="text-lg mb-4">Here are the rules for the Dice Game with examples:</p>

            <!-- Rule Examples -->

            <!-- 10 points -->
            <x-dice-rule score="10">
                <img class="h-12 w-12 mx-2 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
            </x-dice-rule>
            <!-- 5 points -->
            <x-dice-rule score="5">
                <img class="h-12 w-12 mx-2 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
            </x-dice-rule>

            <!-- 0 points -->
            <x-dice-rule score="0">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
            </x-dice-rule>

            <!-- 15 points -->
            <x-dice-rule score="15">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
            </x-dice-rule>

            <!-- 20 points -->
            <x-dice-rule score="20">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <!-- 25 points -->
            <x-dice-rule score="25">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <!-- 30 points -->
            <x-dice-rule score="30">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <p class="m-4 text-md font-bold">Three of a kind</p>
            <!-- Three of a kind -->
            <x-dice-rule score="20">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="30">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="40">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="50">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="100">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>


            <p class="m-4 text-md font-bold">Four of a kind</p>
            <!-- Four of a kind -->
            <x-dice-rule score="40">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="60">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="80">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="100">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="120">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
            </x-dice-rule>

            <x-dice-rule score="200">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-10 w-10 mx-2" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
            </x-dice-rule>

            <p class="m-4 text-md font-bold">Five of a kind</p>
            <!-- Five of a kind -->
            <x-dice-rule score="200">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
            </x-dice-rule>

            <x-dice-rule score="300">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
            </x-dice-rule>

            <x-dice-rule score="400">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
            </x-dice-rule>

            <x-dice-rule score="500">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
            </x-dice-rule>

            <x-dice-rule score="600">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

            <x-dice-rule score="1000">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
            </x-dice-rule>


            <p class="m-4 text-md font-bold">Straight 1</p>
            <!-- 150 points -->
            <x-dice-rule score="150">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-1.png') }}" alt="Dice 1">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
            </x-dice-rule>

            <p class="m-4 text-md font-bold">Straight 2</p>
            <!-- 250 points -->
            <x-dice-rule score="250">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-2.png') }}" alt="Dice 2">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-3.png') }}" alt="Dice 3">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-4.png') }}" alt="Dice 4">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-5.png') }}" alt="Dice 5">
                <img class="h-12 w-12 mx-2 -my-1 border-4 border-solid border-green-400" src="{{ asset('storage/dice/dice-six-faces-6.png') }}" alt="Dice 6">
            </x-dice-rule>

        </div>
    </div>
</body>
</html>
