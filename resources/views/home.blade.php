<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XDEFENSE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class=" bg-gradient-to-br from-gray-900 to-black text-white" style="background-color: #1E1E1E;">
    <!-- Navigation -->
    <nav class="flex justify-between items-center p-5">
        <div class="flex items-center space-x-4">
            <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
            <ul class="flex space-x-4">
                <li><a href="Home.html" class="hover:text-blue-300">Home</a></li>
                <li><a href="Trynow.html" class="hover:text-blue-300">Try now</a></li>
            </ul>
        </div>
        <div>
            
            <a href="signup.html"  <button class="bg-blue-900 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Sign Up</button></a>
            <a href="login.html"  <button onclick="login.html='default.asp'" class="text-white font-semibold hover:text-blue-300">Login</button></a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex justify-between items-center px-20 py-10">
        <div class="max-w-xl">
            <h1 class="font-bold text-4xl mb-4">Welcome to XDEFENSE</h1>
            <p class="font-semibold text-xl mb-6">Your First Line of Defense Against Cyber Threats with AI-Powered Early Detection</p>
            <p class="mb-6">"AT XDEFENSE, we leverage cutting-edge AI technology to detect and neutralize cyber threats before they can harm your digital assets. Explore our innovative solutions and fortify your defenses in the ever-evolving landscape of cybersecurity. Your security is our priority."</p>
            <a href="Trynow.html" <button class="bg-blue-900 hover:bg-blue-900 text-white font-bold py-2 px-8 rounded">Try Now</button></a>
        </div>
        <img src="..\images\shi.png" alt="AI-Powered cybersecurity shield illustration placeholder" class="h-96">
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-25 py-10">
        <div class="flex justify-between items-center p-5">
            <div>
                <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
            </div>
            
            <div>
                <p class="text-sm">info@xdefense.com</p>
                <p class="text-sm">+990 0171245342</p>
                <p class="text-sm">ABHA</p>
            </div>
        </div>
        <div class="text-center p-5">
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-blue-300"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="text-xs">XDEFENSE All Rights Reserved</p>
            <p class="text-xs"><a href="#" class="hover:text-blue-300">Privacy Policy</a> | <a href="#" class="hover:text-blue-300">Terms of Service</a></p>
        </div>
    </footer>
</body>

</html>







@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
