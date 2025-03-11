@extends('users.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- write your code here-->
    <div class="2xl:flex 2xl:space-x-[48px]">
        <section class="mb-6 2xl:mb-0 2xl:flex-1">

            <div class="mb-[24px] w-full">
                <div class="grid grid-cols-1 gap-[24px] lg:grid-cols-3">
                    <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex items-center space-x-[7px]">
                                <div class="icon">
                                    <span>
                                        <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                    </span>
                                </div>
                                <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                    yang aktif bermain</span>
                            </div>
                           
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                   10
                                </p>
                                <div class="flex items-center space-x-1">
                                    <span>
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                fill="#22C55E" />
                                            <path opacity="0.4"
                                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-success-300">
                                        + 3.5%
                                    </span>
                                    <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                        from last week
                                    </span>
                                </div>
                            </div>
                            <div class="w-[106px]">
                                <canvas id="totalEarn" height="68"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex items-center space-x-[7px]">
                                <div class="icon">
                                    <span>
                                        <img src="{{asset('/images/icons/total-earn.svg') }}" alt="icon" />
                                    </span>
                                </div>
                                <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                    Hari ini</span>
                            </div>
                           
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                    15
                                </p>
                                <div class="flex items-center space-x-1">
                                    <span>
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                fill="#22C55E" />
                                            <path opacity="0.4"
                                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-success-300">
                                        + 3.5%
                                    </span>
                                    <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                        from last week
                                    </span>
                                </div>
                            </div>
                            <div class="w-[106px]">
                                <canvas id="totalSpending" height="68"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex items-center space-x-[7px]">
                                <div class="icon">
                                    <span>
                                        <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                    </span>
                                </div>
                                <span class="text-lg font-semibold text-bgray-900 dark:text-white">Seluruh total
                                    Bermain</span>
                            </div>
                           
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                    200
                                </p>
                                <div class="flex items-center space-x-1">
                                    <span>
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                fill="#22C55E" />
                                            <path opacity="0.4"
                                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                fill="#22C55E" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-success-300">
                                        + 3.5%
                                    </span>
                                    <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                        from last week
                                    </span>
                                </div>
                            </div>
                            <div class="w-[106px]">
                                <canvas id="totalGoal" height="68"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--list table-->
            <div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
                <div class="flex flex-col space-y-5">


                    <div class="table-content w-full overflow-x-auto">
                        <table class="w-full">
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="">
                                    <label class="text-center">
                                        <input type="checkbox"
                                            class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                    </label>
                                </td>
                                <td class="inline-block w-[250px] px-6 py-5 lg:w-auto xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                             Nama</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span
                                            class="text-base font-medium text-bgray-600 dark:text-bgray-50">Usia</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                            Jam Bermain</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span
                                            class="text-base font-medium text-bgray-600 dark:text-bgray-50">Hari</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span
                                            class="text-base font-medium text-bgray-600 dark:text-bgray-50">Tanggal</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                    stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0"></td>
                            </tr>
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="">
                                    <label class="text-center">
                                        <input type="checkbox"
                                            class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                    </label>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                            Amelia
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        5
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        11.00 - 12.00
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                        Sabtu
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                       27 Febuari 2025
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex justify-center">
                                        <button type="button">
                                            <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="">
                                    <label class="text-center">
                                        <input type="checkbox"
                                            class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                    </label>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">

                                        <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                            Aisyah
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        10 tahun
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        10.00 - 11.00
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                       Senin
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                       27 Febuari 2025
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex justify-center">
                                        <button type="button">
                                            <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="">
                                    <label class="text-center">
                                        <input type="checkbox"
                                            class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                    </label>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                            Dianne Russell
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                       12 tahun
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        08.00 - 09.00
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                        Minggu
                                    </p>
                                </td>
                                <td class="w-[165px] px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                       27 Febuari 2025
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex justify-center">
                                        <button type="button">
                                            <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                    stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination-content w-full">
                        <div class="flex w-full items-center justify-center lg:justify-between">
                            <div class="hidden items-center space-x-4 lg:flex">
                                <span class="text-sm font-semibold text-bgray-600 dark:text-bgray-50">Show
                                    result:</span>
                                <div class="relative">
                                    <button onclick="dateFilterAction('#result-filter')" type="button"
                                        class="flex items-center space-x-6 rounded-lg border border-bgray-300 px-2.5 py-[14px] dark:border-darkblack-400">
                                        <span class="text-sm font-semibold text-bgray-900 dark:text-bgray-50">3</span>
                                        <span>
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.03516 6.03271L8.03516 10.0327L12.0352 6.03271"
                                                    stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="result-filter"
                                        class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg">
                                        <ul>
                                            <li onclick="dateFilterAction('#result-filter')"
                                                class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-medium hover:bg-bgray-100">
                                                1
                                            </li>
                                            <li onclick="dateFilterAction('#result-filter')"
                                                class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100">
                                                2
                                            </li>

                                            <li onclick="dateFilterAction('#result-filter')"
                                                class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100">
                                                3
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-5 sm:space-x-[35px]">
                                <button type="button">
                                    <span>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.7217 5.03271L7.72168 10.0327L12.7217 15.0327" stroke="#A0AEC0"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="flex items-center">
                                    <button type="button"
                                        class="rounded-lg bg-success-50 px-4 py-1.5 text-xs font-bold text-success-300 dark:bg-darkblack-500 dark:text-bgray-50 lg:px-6 lg:py-2.5 lg:text-sm">
                                        1
                                    </button>
                                    <button type="button"
                                        class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">
                                        2
                                    </button>

                                    <span class="text-sm text-bgray-500">. . . .</span>
                                    <button type="button"
                                        class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">
                                        20
                                    </button>
                                </div>
                                <button type="button">
                                    <span>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.72168 5.03271L12.7217 10.0327L7.72168 15.0327" stroke="#A0AEC0"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




@endsection
