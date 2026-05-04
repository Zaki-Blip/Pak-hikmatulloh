@extends('layouts.app')

@section('content')
<!-- FULLSCREEN OVERLAY -->
<div class="relative min-h-screen">
    <!-- Particles Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-r from-magenta-500/30 to-purple-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-r from-pink-500/30 to-magenta-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute top-40 left-1/2 w-80 h-80 bg-gradient-to-r from-purple-500/30 to-pink-500/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="relative z-10 flex flex-col items-center justify-center min-h-[70vh] pt-20">
        <div class="text-center max-w-4xl mx-auto">
            <!-- LOCK ICON -->
            <div class="relative mb-12">
                <div class="w-32 h-32 bg-gradient-to-br from-magenta-500 to-pink-500 rounded-3xl flex items-center justify-center mx-auto shadow-2xl glow-magenta mb-6 transform hover:rotate-180 transition-all duration-1000">
                    <span class="text-5xl">🔒</span>
                </div>
                <div class="w-24 h-24 bg-gradient-to-br from-purple-600 to-magenta-600 rounded-2xl flex items-center justify-center absolute -bottom-6 left-1/2 -translate-x-1/2 shadow-xl glow-magenta">
                    <span class="text-2xl">✨</span>
                </div>
            </div>

            <!-- TITLE -->
            <h1 class="text-6xl md:text-7xl font-black bg-gradient-to-r from-magenta-400 via-pink-400 to-purple-500 bg-clip-text text-transparent drop-shadow-2xl mb-8 animate-pulse">
                ULTRA SECRET VAULT
            </h1>

            <!-- TYPEWRITER TEXT -->
            <div class="bg-white/5 backdrop-blur-xl border border-white/20 rounded-3xl p-8 mb-12 max-w-2xl mx-auto">
                <p class="text-2xl font-mono text-white/90 mb-6 animate-pulse" style="
                    animation: typewriter 4s steps(40) infinite, blink-caret 0.75s step-end infinite;
                ">
                    ACCESS GRANTED: Super Admin Level Cleared... █
                </p>
                <div class="space-y-4 text-lg text-white/70">
                    <p>• Only visible to highest clearance admins</p>
                    <p>• Classified system operations & overrides</p>
                    <p>• Emergency master controls active</p>
                    <p>• <span class="font-mono bg-magenta-500/20 px-3 py-1 rounded-full glow-magenta">CLASSIFIED DATA REDACTED</span></p>
                </div>
            </div>

            <!-- WARNING BOX -->
            <div class="bg-gradient-to-r from-red-500/20 to-pink-500/20 backdrop-blur-xl border border-red-500/30 rounded-3xl p-8 max-w-2xl mx-auto glow-magenta">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-red-500/80 backdrop-blur rounded-2xl flex items-center justify-center text-white font-bold text-xl glow-magenta">
                        ⚠️
                    </div>
                    <h3 class="text-2xl font-bold text-transparent bg-gradient-to-r from-red-300 to-pink-300 bg-clip-text">
                        Security Notice
                    </h3>
                </div>
                <p class="text-white/90 text-lg">This area contains mission-critical operations. Disclosure prohibited under penalty of system lockdown.</p>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes typewriter {
  from { width: 0; }
  to { width: 100%; }
}
@keyframes blink-caret {
  from, to { border-color: transparent; }
  50% { border-color: #ec4899; }
}
@keyframes blob {
  0% { transform: translate(0px, 0px) scale(1); }
  33% { transform: translate(30px, -50px) scale(1.1); }
  66% { transform: translate(-20px, 20px) scale(0.9); }
  100% { transform: translate(0px, 0px) scale(1); }
}
.animate-blob {
  animation: blob 7s infinite;
}
.animation-delay-2000 { animation-delay: 2s; }
.animation-delay-4000 { animation-delay: 4s; }
</style>
@endsection
