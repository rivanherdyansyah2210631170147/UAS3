<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Halaman Profil') }}
        </h2>
        <p class="text-sm text-gray-500 dark:text-gray-400 text-center mt-1">
            Atur informasi akun dan preferensi Anda di sini.
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <!-- Update Profile Information -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 shadow-md rounded-lg">
                <div class="p-6 sm:p-10">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                        {{ __('Perbarui Informasi Profil') }}
                    </h3>
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-700 dark:to-blue-800 shadow-md rounded-lg">
                <div class="p-6 sm:p-10">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                        {{ __('Ganti Kata Sandi') }}
                    </h3>
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete User Account -->
            <div class="bg-gradient-to-br from-red-100 to-red-200 dark:from-red-700 dark:to-red-800 shadow-md rounded-lg">
                <div class="p-6 sm:p-10">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                        {{ __('Hapus Akun') }}
                    </h3>
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                        Perhatian: Menghapus akun akan menghapus semua data Anda secara permanen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>