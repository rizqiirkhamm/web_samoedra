@extends('users.layouts.app')

@section('title', 'Bermain Dashboard')

@section('content')
<div class="2xl:flex 2xl:space-x-[48px]">
    <section class="mb-6 2xl:mb-0 2xl:flex-1">
        <div class="mb-[24px] w-full">
            <div class="grid grid-cols-1 gap-[24px] lg:grid-cols-3">
                <!-- Card Total Active -->
                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                    <div class="mb-5 flex items-center justify-between">
                        <div class="flex items-center space-x-[7px]">
                            <div class="icon">
                                <span><img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" /></span>
                            </div>
                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total yang aktif bermain</span>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="flex-1">
                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                {{ $total_active }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card Total Today -->
                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                    <div class="mb-5 flex items-center justify-between">
                        <div class="flex items-center space-x-[7px]">
                            <div class="icon">
                                <span><img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" /></span>
                            </div>
                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Hari ini</span>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="flex-1">
                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                {{ $total_today }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card Total All -->
                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                    <div class="mb-5 flex items-center justify-between">
                        <div class="flex items-center space-x-[7px]">
                            <div class="icon">
                                <span><img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" /></span>
                            </div>
                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Semua</span>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="flex-1">
                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                {{ $total_all }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
            <div class="flex flex-col space-y-5">
                <div class="table-content w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Nama</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex w-full items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Usia</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Tanggal</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Waktu</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Status</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="text-base font-medium text-bgray-600 dark:text-bgray-50">Sisa Waktu</span>
                                        <span>
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.332 1.31567V13.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.66602 13.3157V1.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="dark:bg-darkblack-600">
                            @foreach($bermain as $item)
                            <tr class="border-b border-bgray-300 dark:border-darkblack-400" data-id="{{ $item->id }}">
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">{{ $item->name }}</p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">{{ $item->age }} Tahun</p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        {{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}
                                    </p>
                                </td>
                                <td class="px-6 py-5 xl:px-0">
                                    <p class="text-base font-medium text-bgray-900 dark:text-white">
                                        {{ \Carbon\Carbon::parse($item->selected_time)->format('H:i') }}
                                    </p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="status-badge {{ $item->status }}" data-status="{{ $item->status }}">
                                        @if($item->status === 'waiting')
                                            Menunggu
                                        @elseif($item->status === 'playing')
                                            Bermain
                                        @else
                                            Selesai
                                        @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="timer font-mono text-sm" 
                                          data-remaining="{{ $item->remaining_time }}"
                                          data-duration="{{ $item->duration }}">
                                        @if($item->status === 'playing')
                                            {{ gmdate('H:i:s', $item->remaining_time) }}
                                        @elseif($item->status === 'waiting')
                                            Belum Mulai
                                        @else
                                            Selesai
                                        @endif
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination-content w-full dark:bg-darkblack-600">
                    <div class="flex w-full items-center justify-center lg:justify-between">
                        <div class="hidden items-center space-x-4 lg:flex">
                            <span class="text-sm font-semibold text-bgray-600 dark:text-white">Show result:</span>
                            <div class="relative">
                                <button onclick="dateFilterAction('#result-filter')" type="button"
                                    class="flex items-center space-x-6 rounded-lg border border-bgray-300 px-2.5 py-[14px] dark:border-darkblack-400 dark:text-white">
                                    <span class="text-sm font-semibold text-bgray-900 dark:text-white">3</span>
                                    <span>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.03516 6.03271L8.03516 10.0327L12.0352 6.03271" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <div id="result-filter" class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white dark:bg-darkblack-500 shadow-lg">
                                    <ul>
                                        <li onclick="dateFilterAction('#result-filter')" class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100 dark:text-white dark:hover:bg-darkblack-400">1</li>
                                        <li onclick="dateFilterAction('#result-filter')" class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100 dark:text-white dark:hover:bg-darkblack-400">2</li>
                                        <li onclick="dateFilterAction('#result-filter')" class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100 dark:text-white dark:hover:bg-darkblack-400">3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-5 sm:space-x-[35px]">
                            <button type="button">
                                <span>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.7217 5.03271L7.72168 10.0327L12.7217 15.0327" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="flex items-center">
                                <button type="button" class="rounded-lg bg-success-50 px-4 py-1.5 text-xs font-bold text-success-300 dark:bg-darkblack-500 dark:text-bgray-50 lg:px-6 lg:py-2.5 lg:text-sm">1</button>
                                <button type="button" class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">2</button>
                                <span class="text-sm text-bgray-500">. . . .</span>
                                <button type="button" class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">20</button>
                            </div>
                            <button type="button">
                                <span>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.72168 5.03271L12.7217 10.0327L7.72168 15.0327" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

@push('styles')
<style>
.status-badge {
    @apply px-3 py-1 text-sm font-medium rounded-full transition-colors duration-300;
}
.status-badge.waiting {
    @apply bg-yellow-100 text-yellow-800 dark:bg-yellow-500 dark:bg-opacity-20 dark:text-yellow-100;
}
.status-badge.playing {
    @apply bg-green-100 text-green-800 dark:bg-green-500 dark:bg-opacity-20 dark:text-green-100;
}
.status-badge.finished {
    @apply bg-gray-100 text-gray-800 dark:bg-gray-500 dark:bg-opacity-20 dark:text-gray-100;
}
</style>
@endpush

@push('scripts')
<script>
const timers = {};

function saveTimerState(id, remaining, status) {
    localStorage.setItem(`timer_${id}`, JSON.stringify({
        remaining: remaining,
        status: status,
        lastUpdate: new Date().getTime()
    }));
}

function getTimerState(id) {
    const saved = localStorage.getItem(`timer_${id}`);
    if (saved) {
        const state = JSON.parse(saved);
        const now = new Date().getTime();
        const elapsed = Math.floor((now - state.lastUpdate) / 1000);
        state.remaining = Math.max(0, state.remaining - elapsed);
        return state;
    }
    return null;
}

function initializeTimer(id, selectedTime, remaining, status) {
    if (timers[id]) {
        clearInterval(timers[id]);
    }

    const row = document.querySelector(`tr[data-id="${id}"]`);
    const timerElement = row.querySelector('.timer');
    const statusElement = row.querySelector('.status-badge');
    
    // Cek state yang tersimpan
    const savedState = getTimerState(id);
    if (savedState) {
        remaining = savedState.remaining;
        status = savedState.status;
        
        // Update UI sesuai state yang tersimpan
        if (status === 'playing') {
            statusElement.textContent = 'Bermain';
            statusElement.classList.remove('waiting');
            statusElement.classList.add('playing');
        } else if (status === 'finished') {
            statusElement.textContent = 'Selesai';
            statusElement.classList.remove('playing', 'waiting');
            statusElement.classList.add('finished');
            timerElement.textContent = 'Selesai';
            return;
        }
    }
    
    timers[id] = setInterval(() => {
        const now = new Date();
        const selectedDateTime = new Date(selectedTime);
        
        if (now >= selectedDateTime && status === 'waiting') {
            status = 'playing';
            statusElement.textContent = 'Bermain';
            statusElement.classList.remove('waiting');
            statusElement.classList.add('playing');
            
            remaining = row.querySelector('.timer').getAttribute('data-duration') * 3600;
            saveTimerState(id, remaining, status);
            updateServerTimer(id);
        }
        
        if (status === 'waiting') {
            timerElement.textContent = 'Belum Mulai';
            return;
        }
        
        if (status === 'playing') {
            if (remaining <= 0) {
                clearInterval(timers[id]);
                timerElement.textContent = 'Selesai';
                statusElement.textContent = 'Selesai';
                statusElement.classList.remove('playing');
                statusElement.classList.add('finished');
                status = 'finished';
                saveTimerState(id, 0, status);
                updateServerTimer(id);
                return;
            }
            
            remaining--;
            timerElement.textContent = new Date(remaining * 1000).toISOString().substr(11, 8);
            saveTimerState(id, remaining, status);
            updateServerTimer(id);
        }
    }, 1000);
}

function updateServerTimer(id) {
    fetch(`/bermain/${id}/timer`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        }
    });
}

// Initialize existing timers
document.querySelectorAll('tr[data-id]').forEach(row => {
    const id = row.dataset.id;
    const selectedTime = row.querySelector('td:nth-child(3)').textContent + ' ' + 
                        row.querySelector('td:nth-child(4)').textContent;
    const status = row.querySelector('.status-badge').classList.contains('waiting') ? 'waiting' : 
                  row.querySelector('.status-badge').classList.contains('playing') ? 'playing' : 'finished';
    const duration = parseInt(row.querySelector('td:nth-child(5)').textContent);
    const remaining = parseInt(row.querySelector('.timer').dataset.remaining);
    
    // Tambahkan data duration ke timer element
    row.querySelector('.timer').setAttribute('data-duration', duration);
    
    initializeTimer(id, selectedTime, remaining, status);
});
</script>
@endpush
