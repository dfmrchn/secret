<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
</x-layout>

{{-- <header class="bg-[crimson] w-full h-[600px] px-40">
    <div class="h-full flex items-center">
        <div class="text-white font-bold text-lg">
            <p>Jadikan belajarmu lebih cerdas</p>
            <p>Bersama BelajarCerdas.id</p>
        </div>
    </div>
</header> --}}

<header>
    <main>
        <section class="grid grid-cols-12 relative">
            <div class="col-span-12 md:col-span-7 px-4 md:pl-12">
                <div class="text-center md:text-left flex flex-col justify-center h-full">
                    <p class="text-4xl md:text-5xl lg:text-6xl">
                        <span>Belajar Mandiri<br> atau dengan <br> bantuan tutor</span>
                    </p>
                    <p class="mt-2">
                        <span>Solusi lengkap dan terjangkau – <br>
                            belajar jadi lebih mudah dan asyik!</span>
                    </p>
                    <div class="flex flex-col md:flex-row gap-2 mt-4">
                        <button
                            class="border-none outline-none bg-gray-700 w-full md:w-32 h-10 rounded-full text-white font-bold text-sm">Daftar</button>
                        <button
                            class="border-2 outline-none w-full md:w-32 h-10 rounded-full text-sm hover:bg-gray-700 hover:text-white font-bold">Masuk</button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 hidden md:block">
                <img src="image/doc_home.png" alt="">
            </div>
        </section>
    </main>
</header>

<div
    class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 lg:grid-cols-4 gap-2 mx-2 lg:w-[90%] xl:w-max lg:mx-auto mt-40">
    @foreach ($packets as $packet)
        <article class="xl:w-[225px] xl:h-max bg-white shadow-lg rounded-lg overflow-hidden relative ... border-[1px]">
            <section class="relative top-[-10px]">
                <header>
                    <img src="{{ $packet['Image'] }}" alt="" class="w-full h-[100px] object-cover">
                </header>
                <main>
                    <ul class="text-sm list-none px-4 h-[150px]">
                        <li class="flex gap-1 mt-4 mb-2">
                            <i class="fa-solid fa-circle text-[8px] text-[#824D74] relative ... top-[7px]"></i>
                            <span class="text-[12px]"><?= $packet['Desc1'] ?></span>
                        </li>
                        <li class="flex gap-1 mt-4 mb-2">
                            <i class="fa-solid fa-circle text-[8px] text-[#824D74] relative ... top-[7px]"></i>
                            <span class="text-[12px]"><?= $packet['Desc2'] ?></span>
                        </li>
                    </ul>
                </main>
                <footer class="text-center">
                    <div class="border-b-[1px] border-gray-300 w-full"></div>
                    <div class="priceList mt-10">
                        <div class="flex justify-center gap-2">
                            <a class="text-xs md:text-sm text-[#074173] font-medium">Mulai dari</a>
                            <span
                                class="line-through text-red-500 font-bold text-xs md:text-sm">{{ $packet['Discount'] }}</span>
                        </div>
                        <span class="font-bold text-xs md:text-base">{{ $packet['Price'] }}</span>
                    </div>
                    <button
                        class=" bg-gray-700 w-[90%] rounded-full h-[40px] text-white font-bold text-xs md:text-sm mt-4">{{ $packet['Button'] }}</button>
                </footer>
            </section>
        </article>
    @endforeach
</div>



{{-- <div
    class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 max-w-max w-[350px] md:w-full gap-8 mx-auto mt-40">
    @foreach ($packets as $packet)
        <article class="w-[225px] h-[467px] bg-white shadow-lg rounded-lg overflow-hidden relative ...">
            <section>
                <header>
                    <img src="{{ $packet['Image'] }}" alt="" class="w-full h-[100px] object-cover">
                </header>
                <main>
                    <ul class="text-sm list-none px-4 h-[150px]">
                        <li class="flex gap-1 mt-4 mb-2">
                            <i class="fa-solid fa-circle text-[8px] text-[#824D74] relative ... top-[7px]"></i>
                            <span class="text-[12px]"><?= $packet['Desc1'] ?></span>
                        </li>
                        <li class="flex gap-1 mt-4 mb-2">
                            <i class="fa-solid fa-circle text-[8px] text-[#824D74] relative ... top-[7px]"></i>
                            <span class="text-[12px]"><?= $packet['Desc2'] ?></span>
                        </li>
                    </ul>
                </main>
                <footer class="text-center">
                    <div class="border-b-[1px] border-gray-300 w-full"></div>
                    <div class="priceList mt-10">
                        <a class="text-sm text-[#074173] font-medium">Mulai dari</a>
                        <span class="line-through text-red-500 font-bold text-sm">{{ $packet['Discount'] }}</span> <br>
                        <span class="font-bold text-base">{{ $packet['Price'] }}</span>
                    </div>
                    <button
                        class="absolute bottom-10 left-3 right-0 bg-gray-700 w-[90%] rounded-full h-[40px] text-white font-bold text-sm">{{ $packet['Button'] }}</button>
                </footer>
            </section>
        </article>
    @endforeach
</div> --}}
{{-- <input type="password" name="password" id="password">
<div class="show-password">
    <div class="input">
        <span class="fas fa-lock" id="password-lock"></span>
    </div>
</div>


<script>
    $('.show-password').on('click', function() {
        if ($('#password').attr('type') == 'password') {
            $('#password').attr('type', 'text');
            $('#password-lock').attr('class', 'fas fa-unlock');
        } else {
            $('#password').attr('type', 'password');
            $('#password-lock').attr('class', 'fas fa-lock');
        }
    })
</script> --}}