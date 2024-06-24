@extends('layouts.homelayouts')
@section('content')
    <section class="lg:mx-24 mx-16 bg-white flex flex-col">
        <div class="flex  mt-10 items-center ">
            <button class="lg:text-lg text-md">Beranda</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="18" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>

            <button class="lg:text-lg text-md">Inventaris</button>
            <svg class="w-4 h-4 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="18" height="18" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 5 7 7-7 7" />
            </svg>
            <a href="{{ Route('inventaris.login') }}" class="lg:text-lg text-md text-blue-500 ">Inventaris Laboratorium
                Teknologi Rekayasa Perangkat
                Lunak</a>
        </div>
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-4"></div>
        <div class="py-4">
            <div class=" lg:text-4xl text-2xl font-bold text-[#628F8E] lg:mb-6 mb-4">Inventaris</div>
            <div class="flex flex-row items-center gap-4">
                <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                        fill="#F5CD51" />
                </svg>

                <div class=" text-sm lg:text-xl font-semibold text-black">Oleh : trpl.sv</div>
            </div>
        </div>
        <div class="bg-[#F8F7FC] mt-8 relative">
            <div class="absolute top-0 left-0 border-l-8 border-yellow-500 h-full"></div>
            <div class="flex text-justify lg:px-20 px-10 lg:py-12 py-8 text-sm lg:text-xl"> SiLaboe (Sistem Informasi
                Laboratorium) adalah
                platform
                website
                yang menyediakan informasi terkait laboratorium di Program Studi Teknologi Rekayasa Perangkat Lunak UGM.
                Sistem Informasi ini mencakup deskripsi fasilitas laboratorium, keanggotaan staf dan mahasiswa, publikasi
                riset, perangkat lunak yang terpasang, jadwal penggunaan laboratorium, prosedur peminjaman, dan inventaris
                peralatan. Dengan fokus pada efisiensi operasional dan kolaborasi yang lebih baik, SiLaboe memungkinkan
                pengguna untuk mengakses, mengelola, dan berinteraksi dengan informasi laboratorium secara praktis dan
                efektif, memfasilitasi pengembangan riset, pembelajaran, dan manajemen sumber daya yang lebih baik.</div>
        </div>



        <body class="bg-gray-50">
            <div class="container mx-auto w-full my-12 p-4">
                <<div
                    class="flex flex-col lg:flex-row md:flex-row justify-between items-center mb-4 space-y-2 lg:space-y-2 lg:space-x-4 md:space-y-2">
                    <div class="flex items-center space-x-2">
                        <select class="border border-gray-300 rounded px-4 py-2">
                            <option>Meja PC Server</option>
                        </select>
                        <span>entri per kategori</span>
                    </div>
                    <div class="flex items-center ">
                        <label for="search" class="mr-2">Pencarian:</label>
                        <input id="search" type="text" placeholder="Cari inventaris disini..."
                            class="px-4 py-2 rounded border border-gray-300">
                    </div>
            </div>

            <div class="overflow-x-auto overflow-y-auto rounded-lg shadow">
                <table class="min-w-full bg-[#F8F7FC]">
                    <thead class="bg-gray-50">
                        <tr>
                            <th rowspan="2"
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E] uppercase tracking-wider">
                                Jenis
                                Inventaris</th>
                            <th rowspan="2"
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E]  uppercase tracking-wider">
                                No Id
                            </th>
                            <th colspan="2"
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E]  uppercase tracking-wider text-center">
                                Kondisi</th>
                            <th rowspan="2"
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E]  uppercase tracking-wider">
                                Informasi
                            </th>
                            <th rowspan="2"
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E] uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                        <tr>
                            <th
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E]  uppercase tracking-wider text-center">
                                Baik</th>
                            <th
                                class="py-3 px-6 lg:text-lg md:text-md text-sm font-bold text-[#628F8E]  uppercase tracking-wider text-center">
                                Tidak Baik</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap  text-md text-gray-500">MPC009</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓ </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Kursi PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC006</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC003</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC004</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC005</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC006</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC007</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">Meja PC Server
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">MPC008</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">✓</td>
                            <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500 text-center"></td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500">Laboratorium HU105</td>
                            <td class="py-4 px-6 whitespace-nowrap text-md text-gray-500 text-center">
                                <input type="checkbox" class="form-checkbox">
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-between items-center">


                <div class="lg:flex-col space-y-6 items-center">
                    <div class="lg:text-lg md:text-md text-sm text-gray-700 ">
                        Menampilkan 1 sampai 10 dari 50 entri
                    </div>

                </div>




                <div class="flex
                        space-x-4 items-center flex-col space-y-4">

                    <div class="flex items-center space-x-4">
                        <button class="text-gray-600 hover:text-gray-800">«</button>
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">1</button>
                        <button class="text-gray-600 hover:text-gray-800">2</button>
                        <button class="text-gray-600 hover:text-gray-800">3</button>
                        <button class="text-gray-600 hover:text-gray-800">4</button>
                        <button class="text-gray-600 hover:text-gray-800">5</button>
                        <button class="text-gray-600 hover:text-gray-800">»</button>
                    </div>

                </div>
            </div>
            </div>
        </body>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById("search");
                const rows = document.querySelectorAll("tbody tr");

                searchInput.addEventListener("input", function() {
                    const searchQuery = this.value.trim().toLowerCase();

                    rows.forEach(row => {
                        const textContent = row.textContent.trim().toLowerCase();
                        if (textContent.includes(searchQuery)) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            });
            "{{ route('profil.admin') }}"
        </script>




    </section>
@endsection
