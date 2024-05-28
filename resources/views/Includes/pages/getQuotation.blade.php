<div class="max-w-screen-xl m-auto mt-10 w-full p-10">
    <div class="flex items-stretch mb-5 bg-[#041426] text-white">
        <div class="mx-auto w-full py-10">
            <div class="flex items-center justify-center flex-row p-5">
                <div>
                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                        alt="img" class="h-6 w-32 sm:h-16 sm:w-64 rounded-full mx-auto md:mx-20">
                </div>
                <div>
                    <h1 class="font-thin text-base mx-5 sm:text-2xl md:text-4xl lg:text-6xl">
                        <span class="font-bold text-2xl md:text-4xl lg:text-6xl">Unique</span>
                        Ideas
                    </h1>
                </div>
            </div>
            <div class="flex items-center justify-center flex-row p-5">
                <div class="font-thin text-2xl md:text-4xl lg:text-6xl">
                    <span class="font-bold text-2xl md:text-4xl lg:text-6xl">For Your</span>
                    Business.
                </div>
                <div>
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-normal sm:font-bold sm:py-2 md:h-12 md:px-4 h-6 px-4 rounded-full">
                        GET QUOTATION
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="relative">
        <div class="mySwiper-getQ">
            <div class="swiper-wrapper mx-auto flex items-center justify-center">
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-36 w-36">
                        <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="logo" class="block object-cover rounded-full">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>



            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>

        <button class="swiper-button-next getQNextBtn">
            <img src="{{ asset('images/icon/right.png') }}" alt="nexticon">
        </button>
        <button class="swiper-button-prev getQPrevBtn">
            <img src="{{ asset('images/icon/back-button.png') }}" alt="backicon">
        </button>
    </div>


    <div class="h-full">
        <div
            class="mt-10 mb-10 p-20 bg-[url('https://img.freepik.com/free-photo/heavy-machinery-used-construction-industry-engineering_23-2151307721.jpg?t=st=1716871493~exp=1716875093~hmac=c1a6ff1fc68a1cbc501fcaedf1e6f1e3b14942d221996547329084b7b989ff92&w=1380')] bg-no-repeat bg-cover">
            <div class="flex flex-col items-start justify-start">
                <h1 class="font-normal text-base sm:text-2xl md:text-4xl lg:text-7xl mb-5">
                    Ready to build together?
                </h1>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white md:font-bold font-medium py-1 h-10 px-2 md:py-2 md:h-14 md:px-4">
                    START YOUR PRINTING
                </button>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


<script>
    const mySwiperQuo = new Swiper(".mySwiper-getQ", {
        slidesPerView: 4,
        spaceBetween: 30,
        cssMode: true,
        mousewheel: true,
        keyboard: true,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        autoplay: {
            delay: 2000,
        },
    });
</script>
