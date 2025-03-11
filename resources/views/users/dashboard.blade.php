@extends('users.layouts.app')

@section('title', 'Dashboard')

@section('content')


    <!-- write your code here-->
    <div class="2xl:flex 2xl:space-x-[48px]">
        <section class="mb-6 2xl:mb-0 2xl:flex-1">
            <!-- total widget-->
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
                                    Daycare</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                   150
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
                                    Bimbel</span>
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
                                <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                    Bermain</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                    139
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
                    <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex items-center space-x-[7px]">
                                <div class="icon">
                                    <span>
                                        <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                    </span>
                                </div>
                                <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                    Event
                                </span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div class="flex-1">
                                <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                    40
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
            <!-- revenue, flow -->
            <div class="mb-[24px] w-full xl:flex xl:space-x-[24px]">
                <div
                    class="flex w-full flex-col justify-between rounded-lg bg-white px-[24px] py-3 dark:bg-darkblack-600 xl:w-66">
                    <div
                        class="mb-2 flex items-center justify-between border-b border-bgray-300 pb-2 dark:border-darkblack-400">
                        <h3 class="text-xl font-bold text-bgray-900 dark:text-white sm:text-2xl">
                            Sirkulasi Pendapatan
                        </h3>
                        <div class="hidden items-center space-x-[28px] sm:flex">
                            <div class="flex items-center space-x-2">
                                <div class="h-3 w-3 rounded-full bg-warning-300"></div>
                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Dalam Proses
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-3 w-3 rounded-full bg-success-300"></div>
                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Pemasukan
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-3 w-3 rounded-full bg-orange"></div>
                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Pengeluaran
                                </span>
                            </div>
                        </div>
                        <div class="date-filter relative">
                            <button onclick="dateFilterAction('#date-filter-body')" type="button"
                                class="flex items-center space-x-1 overflow-hidden rounded-lg bg-bgray-100 px-3 py-2 dark:bg-darkblack-500 dark:text-white">
                                <span class="text-sm font-medium text-bgray-900 dark:text-white">Jan 10
                                    -
                                    Jan 16</span>
                                <span>
                                    <svg class="stroke-bgray-900 dark:stroke-gray-50" width="16" height="17"
                                        viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div id="date-filter-body"
                                class="absolute right-0 top-[44px] z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                <ul>
                                    <li onclick="dateFilterAction('#date-filter-body')"
                                        class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                    <li onclick="dateFilterAction('#date-filter-body')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                    <li onclick="dateFilterAction('#date-filter-body')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <canvas id="revenueFlow" height="255"></canvas>
                    </div>
                </div>
                <div class="hidden flex-1 xl:block">
                    <div class="rounded-lg bg-white dark:bg-darkblack-600">
                        <div
                            class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
                            <h3 class="text-xl font-bold text-bgray-900 dark:text-white">
                                Efisiensi
                            </h3>
                            <div class="date-filter relative">
                                <button onclick="dateFilterAction('#month-filter')" type="button"
                                    class="flex items-center space-x-1">
                                    <span class="text-base font-semibold text-bgray-900 dark:text-white">Bulanan</span>
                                    <span>
                                        <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="16" height="17"
                                            viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="month-filter"
                                    class="absolute right-0 top-5 z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                    <ul>
                                        <li onclick="dateFilterAction('#month-filter')"
                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                            Januari
                                        </li>
                                        <li onclick="dateFilterAction('#month-filter')"
                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                            Febuari
                                        </li>

                                        <li onclick="dateFilterAction('#month-filter')"
                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                            Maret
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-[20px] py-[12px]">
                            <div class="mb-4 flex items-center space-x-8">
                                <div class="relative w-[180px]">
                                    <canvas id="pie_chart" height="168"></canvas>
                                    <div class="absolute z-0 h-[34px] w-[34px] rounded-full bg-[#EDF2F7]" style="
                                left: calc(50% - 17px);
                                top: calc(50% - 17px);
                              "></div>
                                </div>
                                <div class="counting">
                                    <div class="mb-6">
                                        <div class="flex items-center space-x-[2px]">
                                            <p class="text-lg font-bold text-success-300">
                                              15.500.000
                                            </p>
                                            <span><svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z"
                                                        fill="#22C55E" />
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z"
                                                        fill="#22C55E" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-base font-medium text-bgray-600">
                                            Arrival
                                        </p>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-[2px]">
                                            <p class="text-lg font-bold text-bgray-900 dark:text-white">
                                                16.042.124
                                            </p>
                                            <span>
                                                <svg class="fill-bgray-900 dark:fill-bgray-50" width="14" height="12"
                                                    viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z" />
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                            Bimbel
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
                                <div class="mb-1.5 flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-2.5 w-2.5 rounded-full bg-success-300"></div>
                                        <span class="text-sm font-medium text-bgray-600 dark:text-bgray-50">Daycare</span>
                                    </div>
                                    <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                        13%
                                    </p>
                                </div>
                                <div class="mb-1.5 flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-2.5 w-2.5 rounded-full bg-warning-300"></div>
                                        <span class="text-sm font-medium text-bgray-600 dark:text-white">Bermain</span>
                                    </div>
                                    <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                        28%
                                    </p>
                                </div>
                                <div class="mb-1.5 flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-2.5 w-2.5 rounded-full bg-bgray-200"></div>
                                        <span class="text-sm font-medium text-bgray-600 dark:text-white">Others</span>
                                    </div>
                                    <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                        59%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--list table-->
            <div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
                <div class="flex flex-col space-y-5">
                    <div class="flex h-[56px] w-full space-x-4">
                        <div
                            class="hidden h-full rounded-lg border border-transparent bg-bgray-100 px-[18px] focus-within:border-success-300 dark:bg-darkblack-500 sm:block sm:w-70 lg:w-88">
                            <div class="flex h-full w-full items-center space-x-[15px]">
                                <span>
                                    <svg class="stroke-bgray-900 dark:stroke-white" width="21" height="22"
                                        viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.80204" cy="10.6761" r="8.98856" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.0537 17.3945L19.5777 20.9094" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <label for="listSearch" class="w-full">
                                    <input type="text" id="listSearch" placeholder="Search by name, email, or others..."
                                        class="search-input w-full border-none bg-bgray-100 px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-medium placeholder:text-bgray-500 focus:outline-none focus:ring-0 dark:bg-darkblack-500" />
                                </label>
                            </div>
                        </div>
                        <div class="relative h-full flex-1">
                            <button onclick="dateFilterAction('#table-filter')" type="button"
                                class="flex h-full w-full items-center justify-center rounded-lg border border-bgray-300 bg-bgray-100 dark:border-darkblack-500 dark:bg-darkblack-500">
                                <div class="flex items-center space-x-3">
                                    <span>
                                        <svg class="stroke-bgray-900 dark:stroke-success-400" width="18" height="17"
                                            viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.55169 13.5022H1.25098" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.3623 3.80984H16.663" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.94797 3.75568C5.94797 2.46002 4.88981 1.40942 3.58482 1.40942C2.27984 1.40942 1.22168 2.46002 1.22168 3.75568C1.22168 5.05133 2.27984 6.10193 3.58482 6.10193C4.88981 6.10193 5.94797 5.05133 5.94797 3.75568Z"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.2214 13.4632C17.2214 12.1675 16.1641 11.1169 14.8591 11.1169C13.5533 11.1169 12.4951 12.1675 12.4951 13.4632C12.4951 14.7589 13.5533 15.8095 14.8591 15.8095C16.1641 15.8095 17.2214 14.7589 17.2214 13.4632Z"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-base font-medium text-success-300">Filters</span>
                                </div>
                            </button>
                            <div id="table-filter"
                                class="absolute right-0 top-[60px] z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                <ul>
                                    <li onclick="dateFilterAction('#table-filter')"
                                        class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        January
                                    </li>
                                    <li onclick="dateFilterAction('#table-filter')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        February
                                    </li>

                                    <li onclick="dateFilterAction('#table-filter')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                        March
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="table-content w-full overflow-x-auto">
                        <table class="w-full">
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="inline-block w-[250px] px-6 py-5 lg:w-auto ">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                            Name</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 ">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Email</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 ">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Role</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 ">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Created</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($getRecord as $value)
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="px-6 py-5 ">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                            {{ $value->name }}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-5 ">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        {{ $value->email }}
                                    </p>
                                </td>
                                <td class="px-6 py-5 ">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        {{ $value->role_name }}
                                    </p>
                                </td>
                                <td class="px-6 py-5 ">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        {{ $value->created_at }}
                                    </p>
                                </td>
                                <td class="px-6 py-5  flex justify-end space-x-2.5">
                                 @if (!empty($PermissionEdit))
                                  <a href="{{  url('/user/edit/' . $value->id) }}"> <button class="h-12 w-32 rounded-md border border-bgray-600 bg-white text-base text-bgray-600 transition duration-300 ease-in-out hover:bg-bgray-600 hover:text-white dark:bg-darkblack-600 dark:text-bgray-300">
                                        Edit
                                      </button>
                                    </a>
                                    @endif
                                 @if (!empty($PermissionDelete))
                                    <a href="{{ url('/user/delete/' . $value->id) }}"><button class="h-12 w-32 rounded-md border border-bgray-600 bg-white text-base text-bgray-600 transition duration-300 ease-in-out hover:bg-bgray-600 hover:text-white dark:bg-darkblack-600 dark:text-bgray-300">
                                        Delete
                                      </button>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
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
