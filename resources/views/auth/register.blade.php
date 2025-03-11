<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In - Samoedra</title>
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <section class="bg-white dark:bg-darkblack-500">
        <div class="flex flex-col lg:flex-row justify-between min-h-screen">
            <!-- Left -->
            <div class="lg:w-1/2 px-5 xl:pl-12 pt-10">
                <header>
                    <a href="index.html" class="">
                        <img src="assets/images/logo/logo-color.svg" class="block dark:hidden" alt="Logo" />
                        <img src="assets/images/logo/logo-white.svg" class="hidden dark:block" alt="Logo" />
                    </a>
                </header>

                <div class="max-w-[460px] m-auto pt-24 pb-16">
                    <header class="text-center mb-8">
                        <h2 class="text-bgray-900 dark:text-white text-4xl font-semibold font-poppins mb-2">
                            Sign up for an account
                        </h2>
                        <p class="font-urbanis text-base font-medium text-bgray-600 dark:text-darkblack-300">
                            Send, spend and save smarter
                        </p>
                    </header>


                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                class="text-bgray-800 dark:text-white dark:bg-darkblack-500 dark:border-darkblack-400 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                                placeholder="Name"
                            />
                            @error('name')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="username"
                                class="text-bgray-800 dark:text-white dark:bg-darkblack-500 dark:border-darkblack-400 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                                placeholder="Email"
                            />
                            @error('email')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-6 relative">
                            <input
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                class="text-bgray-800 dark:text-white dark:bg-darkblack-500 dark:border-darkblack-400 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                                placeholder="Password"
                            />
                            @error('password')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-6 relative">
                            <input
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                class="text-bgray-800 dark:text-white dark:bg-darkblack-500 dark:border-darkblack-400 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                                placeholder="Confirm Password"
                            />
                            @error('password_confirmation')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Submit -->
                        <button
                            type="submit"
                            class="py-3.5 flex items-center justify-center text-white font-bold bg-success-300 hover:bg-success-400 transition-all rounded-lg w-full"
                        >
                            Sign Up
                        </button>
                    </form>

                    <!-- Form Bottom -->
                    <p class="text-center text-bgray-900 dark:text-bgray-50 text-base font-medium pt-7">
                        Already have an account?
                        <a href="signin.html" class="font-semibold underline">Sign In</a>
                    </p>
                    <nav class="flex items-center justify-center flex-wrap gap-x-11 pt-24">
                        <a href="#" class="text-sm text-bgray-700 dark:text-bgray-50">Terms & Condition</a>
                        <a href="#" class="text-sm text-bgray-700 dark:text-bgray-50">Privacy Policy</a>
                        <a href="#" class="text-sm text-bgray-700 dark:text-bgray-50">Help</a>
                        <a href="#" class="text-sm text-bgray-700 dark:text-bgray-50">English</a>
                    </nav>
                    <!-- Copyright -->
                    <p class="text-bgray-600 dark:text-darkblack-300 text-center text-sm mt-6">
                        &copy; 2023 Bankco. All Right Reserved.
                    </p>
                </div>
            </div>
            <!-- Right -->
            <div class="lg:w-1/2 lg:block hidden bg-[#F6FAFF] dark:bg-darkblack-600 p-20 relative">
                <ul>
                    <li class="absolute top-10 left-8">
                        <img src="assets/images/shapes/square.svg" alt="" />
                    </li>
                    <li class="absolute right-12 top-14">
                        <img src="assets/images/shapes/vline.svg" alt="" />
                    </li>
                    <li class="absolute bottom-7 left-8">
                        <img src="assets/images/shapes/dotted.svg" alt="" />
                    </li>
                </ul>
                <div class="mb-10">
                    <img src="assets/images/illustration/signup.svg
            " alt="" />
                </div>
                <div>
                    <div class="text-center max-w-lg px-1.5 m-auto">
                        <h3 class="text-bgray-900 dark:text-white font-semibold font-popins text-4xl mb-4">
                            Speady, Easy and Fast
                        </h3>
                        <p class="text-bgray-600 dark:text-darkblack-300 text-sm font-medium">
                            BankCo. help you set saving goals, earn cash back offers, Go to
                            disclaimer for more details and get paychecks up to two days
                            early. Get a
                            <span class="text-success-300 font-bold">$20</span> bonus when
                            you receive qualifying direct deposits
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--scripts -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('/js/main.js') }}"></script>
</body>
