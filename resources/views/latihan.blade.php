<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl flex flex-col w-full box-border rounded-2xl">
            <h1 class=" text-2xl md:text-4xl font-bold mb-2 md:mb-4">Pilih Ujian</h1>
            <div class="border-b-4 border-slate-600 w-24"></div>
            <div>
                {{-- bg-gradient-to-br from-[#86A1FF] to-[#826C93] --}}
                {{-- bg-gradient-to-br from-slate-200 to-blue-200 --}}
                <div class="mb-6 flex flex-col items-center">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-1">TKA</h2>
                    <div class="border-b-4 border-slate-600 w-24"></div>
                </div>
                <div class="flex flex-wrap justify-evenly mb-7">
                    <div name="card" data-to="matematika" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg transition-all hover:to-[#86A1FF] hover:from-[#826C93] ">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-divide fa-2xl"></i> 
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Matematika</h3>
                    </div>
                    <div name="card" data-to="Kimia" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between" >
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-flask-vial md:fa-2xl fa-lg"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Kimia</h3>
                    </div>
                    <div name="card" data-to="Fisika" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-atom md:fa-2xl fa-lg"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Fisika</h3>
                    </div>
                    <div name="card" data-to="Biologi" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-dna md:fa-2xl fa-lg"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Biologi</h3>
                    </div>
                    <div name="card" data-to="ekonomi" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg transition-all hover:to-[#86A1FF] hover:from-[#826C93] ">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-dollar-sign  md:fa-2xl fa-2xl"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Soshum</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Ekonomi</h3>
                    </div>
                    <div name="card" data-to="geografi" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between" >
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-mountain md:fa-2xl fa-lg""></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Soshum</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Geografi</h3>
                    </div>
                    <div name="card" data-to="sejarah" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-timeline fa-lg"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Soshum</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Sejarah</h3>
                    </div>
                    <div name="card" data-to="sosiologi" class="cursor-pointer w-40 h-40 md:w-60 md:h-60 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-people-group fa-lg"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold text-xs md:text-base">Soshum</h4>
                            </div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold text-center">Sosiologi</h3>
                    </div>
                </div>  
                <div>
                    <div class="mb-6 flex flex-col items-center">
                        <h2 class="text-3xl font-semibold mb-1">TPS</h2>
                        <div class="border-b-4 border-slate-600 w-24"></div>
                    </div>
                    <div class="flex flex-wrap justify-evenly">
                        <div name="card" data-to="pu" class="w-40 h-40 md:w-64 md:h-64 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-brain md:fa-2xl fa-lg"></i>
                            </div>
                            <h3 class="text-lg md:text-2xl font-bold text-center">Penalaran Umum</h3>
                        </div>
                        <div name="card" data-to="pk" class="w-40 h-40 md:w-64 md:h-64 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                            <i class="fa-solid fa-flask-vial fa-2xl"></i>
                            </div>
                            <h3 class="text-lg md:text-2xl font-bold text-center">Pengetahuan Kuantitatif</h3>
                        </div>
                        <div name="card" data-to="bacaan" class="w-48 h-48 md:w-64 md:h-64 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-book-open fa-2xl"></i>
                            </div>
                            <h3 class="text-md md:text-2xl font-bold text-center">Memahami Bacaan dan Menulis</h3>
                        </div>
                        <div name="card" data-to="ppu" class="w-48 h-48 md:w-64 md:h-64 rounded-[35px] md:mr-6 mb-4 p-5 md:p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg hover:to-[#86A1FF] hover:from-[#826C93]">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-question fa-2xl"></i>
                            </div>
                            <h3 class="text-md md:text-2xl font-bold text-center">Pengetahuan dan Pemahaman Umum</h3>
                        </div>
                    </div>
                </div>

        </div>
        <div id="alert" class="hidden">
            <div class="fixed top-0 bottom-0 left-0 right-0 bg-[#4e4e4e46] flex justify-center items-center">
                <div class="w-80 h-60 bg-white rounded-xl p-10 flex flex-col justify-center items-center shadow-2xl">
                    <h3 class="text-center text-xl font-bold mb-5">Target Waktu</h3>
                    <div class="flex justify-center items-center mb-3">
                        <label for="">Atur Durasi : </label> <input id="time" type="range" min="60" max="300">
                    </div>
                    <div class="mb-3">
                        <output></output><span> Detik / Soal</span>
                    </div>
                    <div>
                        <button type="button" id="submit" class="bg-blue-200 rounded-2xl py-2 px-6 hover:bg-blue-600 transition-all hover:text-white duration-700">Mulai</button>
                        <button type="button" id="cancel" class="bg-red-200 rounded-2xl py-2 px-6 hover:bg-red-500 transition-all hover:text-white duration-700">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("div[name = 'card']").on('click', function(){
            $('#alert').fadeIn();
            var time = $('#time').val();
            $('output').val(time);

            $('#time').on('input', function(){
                $('output').val(this.value);
                time = this.value;
            });
            $('#submit').on('click', ()=>{
                window.location.assign(`ujian/${this.dataset.to}/${time}`);
            });
        });

        $('#cancel').on('click', ()=>{
            $('#alert').fadeOut();
        });
    </script>
</x-app-layout>