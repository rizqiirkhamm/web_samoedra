@extends('users.layouts.app')

@section('title', 'Layanan')

@section('content')
<div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
    <div class="flex flex-col gap-6">
        <!-- Image Preview -->
        <div class="flex justify-center">
            <div class="relative h-[200px] w-[300px]">
                <img id="preview-image" 
                     src="{{ asset('images/avatar/samodra.png') }}" 
                     class="h-full w-full rounded-lg object-cover transition-opacity duration-300"
                     onerror="this.onerror=null; this.src='{{ asset('images/avatar/samodra.png') }}';">
            </div>
        </div>

        <!-- Form -->
        <form action="{{ route('layanan.submit') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
            @csrf
            
            <!-- Service Type Dropdown -->
            <div class="form-group">
                <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                    Pilih Layanan
                </label>
                <select id="service_type" name="service_type" required
                        class="w-full rounded-lg border border-bgray-300 p-2.5 text-bgray-900 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white">
                    <option value="">Pilih Layanan</option>
                    <option value="bermain">Bermain</option>
                    <option value="bimbel">Bimbel</option>
                </select>
            </div>

            <!-- Name -->
            <div class="form-group">
                <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                    Nama
                </label>
                <input type="text" name="name" required
                       class="w-full rounded-lg border border-bgray-300 p-2.5 text-bgray-900 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white">
            </div>

            <!-- Age -->
            <div class="form-group">
                <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                    Usia
                </label>
                <input type="number" name="age" required
                       class="w-full rounded-lg border border-bgray-300 p-2.5 text-bgray-900 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white">
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                    Nomor Telepon
                </label>
                <input type="tel" name="phone" required
                       class="w-full rounded-lg border border-bgray-300 p-2.5 text-bgray-900 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white">
            </div>

            <!-- Dynamic Fields Container -->
            <div id="dynamic-fields" class="hidden">
                <!-- Fields will be loaded here based on service type -->
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" 
                        class="rounded-lg bg-success-300 px-6 py-3 text-base font-medium text-white hover:bg-success-400">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceSelect = document.getElementById('service_type');
    const dynamicFields = document.getElementById('dynamic-fields');
    const previewImage = document.getElementById('preview-image');
    
    // Update path gambar dengan menambahkan 'images/'
    const images = {
        'bermain': '{{ asset("images/avatar/bermain.png") }}',
        'bimbel': '{{ asset("images/avatar/bimbel.png") }}',
        'default': '{{ asset("images/avatar/samodra.png") }}'
    };

    serviceSelect.addEventListener('change', function() {
        const selectedService = this.value;
        
        // Update gambar dengan efek fade
        previewImage.style.opacity = '0';
        setTimeout(() => {
            previewImage.src = selectedService ? images[selectedService] : images.default;
            previewImage.style.opacity = '1';
        }, 300);

        // Show/hide dynamic fields
        if (selectedService) {
            dynamicFields.classList.remove('hidden');
            loadServiceFields(selectedService);
        } else {
            dynamicFields.classList.add('hidden');
            dynamicFields.innerHTML = '';
        }
    });

    function loadServiceFields(service) {
        let fields = '';
        
        if (service === 'bermain') {
            fields = `
                <!-- Informasi Operasional -->
                <div class="form-group animate-fade-in mb-4">
                    <div class="p-4 bg-yellow-50 rounded-lg">
                        <p class="text-yellow-800">
                            <strong>Jam Operasional:</strong> 08:00 - 17:00 WIB
                        </p>
                    </div>
                </div>

                <!-- Tanggal Bermain -->
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Tanggal Bermain
                    </label>
                    <input type="date" name="date" required min="${new Date().toISOString().split('T')[0]}"
                           class="w-full rounded-lg border border-bgray-300 p-2.5">
                </div>

                <!-- Hari -->
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Hari
                    </label>
                    <input type="text" name="day" readonly required
                           class="w-full rounded-lg border border-bgray-300 p-2.5 bg-gray-100 text-bgray-900 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white">
                </div>

                <!-- Jam Mulai -->
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Jam Mulai
                    </label>
                    <input type="time" name="selected_time" required
                           class="w-full rounded-lg border border-bgray-300 p-2.5">
                </div>

                <!-- Durasi Bermain -->
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Durasi Bermain
                    </label>
                    <select name="duration" required 
                            class="w-full rounded-lg border border-bgray-300 p-2.5">
                        <option value="">Pilih Durasi</option>
                        <option value="1">1 Jam</option>
                        <option value="2">2 Jam</option>
                        <option value="3">3 Jam</option>
                    </select>
                </div>

                <!-- Bukti Pembayaran -->
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Bukti Pembayaran
                    </label>
                    <input type="file" name="payment_proof" required 
                           class="w-full rounded-lg border border-bgray-300 p-2.5"
                           accept="image/png,image/jpeg,image/jpg">
                </div>
            `;
        } else if (service === 'bimbel') {
            fields = `
                <div class="form-group animate-fade-in">
                    <label class="mb-2 block text-base font-medium text-bgray-600 dark:text-bgray-50">
                        Jenis Bimbel
                    </label>
                    <select name="bimbel_type" required 
                            class="w-full rounded-lg border border-bgray-300 p-2.5">
                        <option value="">Pilih Jenis Bimbel</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
            `;
        }

        dynamicFields.innerHTML = fields;

        // Initialize file input preview jika ada
        const fileInput = dynamicFields.querySelector('input[type="file"]');
        if (fileInput) {
            fileInput.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    const preview = this.parentElement.querySelector('img');
                    
                    reader.onload = function(e) {
                        if (!preview) {
                            const img = document.createElement('img');
                            img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-lg');
                            img.src = e.target.result;
                            fileInput.parentElement.appendChild(img);
                        } else {
                            preview.src = e.target.result;
                        }
                    }
                    
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        }

        // Tambahkan di dalam function loadServiceFields setelah field tanggal
        const dateInput = dynamicFields.querySelector('input[name="date"]');
        const dayInput = dynamicFields.querySelector('input[name="day"]');

        if (dateInput && dayInput) {
            dateInput.addEventListener('change', function() {
                const date = new Date(this.value);
                const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const selectedDay = days[date.getDay()];
                dayInput.value = selectedDay;
            });
        }
    }
});
</script>

<style>
#preview-image {
    transition: opacity 0.3s ease-in-out;
}

.animate-fade-in {
    animation: fadeIn 0.3s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endpush
