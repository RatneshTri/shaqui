<div class="max-w-screen-2xl m-auto mt-20 w-full">
    <div class="flex items-stretch mb-5 bg-[#041426] text-white">
        <div class="mx-auto w-full py-0 md:py-10">
            <div class="flex items-center justify-center flex-row p-5">
                <div>
                    <img src="https://img.freepik.com/free-photo/cute-family-playing-summer-field_1157-36897.jpg?t=st=1716981291~exp=1716984891~hmac=d3dd1952743a780d9e45f7846f961939ce46229a8adabdda9710b9ebb593fd91&w=1380"
                        alt="img"
                        class="h-6 w-32 sm:h-16 sm:w-64 rounded-full mx-auto md:mx-10 object-cover bg-blend-overlay">
                </div>
                <div>
                    <h1 class="font-thin text-base mx-1 sm:text-2xl md:text-4xl lg:text-6xl">
                        <span class="font-bold text-xl sm:text-2xl md:text-4xl lg:text-6xl">Unique</span>
                        Ideas
                    </h1>
                </div>
            </div>
            <div class="flex items-center justify-center flex-row mx-5 py-3">
                <div class="font-thin text-2xl md:text-4xl lg:text-6xl">
                    <span class="font-bold text-xl sm:text-2xl md:text-4xl lg:text-6xl">For Your</span>
                    Business.
                </div>
                <div>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-normal text-sm text-nowrap sm:py-2 sm:h-10 md:h-12 md:px-4 h-6 px-4 rounded-full">
                        GET QUOTATION
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="relative mx-10">
        <div class="mySwiper-getQ h-12 md:h-auto mx-2 lg:mx-20 max-w-screen-lg">
            <div class="swiper-wrapper mx-10">
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-12 w-12 md:h-36 md:w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>



            <!-- If we need scrollbar -->
            {{-- <div class="swiper-scrollbar"></div> --}}
        </div>

        <button class="swiper-button-next getQNextBtn">
            <img src="{{ asset('images/icon/right-arrow.png') }}" alt="nexticon" class="hidden md:block">
        </button>
        <button class="swiper-button-prev getQPrevBtn">
            <img src="{{ asset('images/icon/back-arrow.png') }}" alt="backicon" class="hidden md:block">
        </button>
    </div>


    <div class="h-full">
        <div
            class="mt-5 md:mt-10 mb-10 p-10 md:p-20 bg-[url('https://img.freepik.com/free-photo/heavy-machinery-used-construction-industry-engineering_23-2151307721.jpg?t=st=1716871493~exp=1716875093~hmac=c1a6ff1fc68a1cbc501fcaedf1e6f1e3b14942d221996547329084b7b989ff92&w=1380')] bg-no-repeat bg-cover bg-blend-overlay">
            <div class="flex flex-col items-start justify-start">
                <h1 class="font-semibold text-xl sm:text-2xl md:text-4xl lg:text-7xl mb-5">
                    Ready to build together?
                </h1>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white md:font-bold font-medium text-nowrap py-1 h-10 px-2 md:py-2 md:h-14 md:px-4">
                    START YOUR PRINTING
                </button>
            </div>
        </div>
    </div>
</div>
<div class="bg-black w-full max-w-7xl m-auto">
    <hr>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


<script>
    const mySwiperQuo = new Swiper(".mySwiper-getQ", {
        slidesPerView: 5,
        spaceBetween: 30,
        cssMode: true,
        mousewheel: true,
        keyboard: true,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2000,
        },
    });
</script>
