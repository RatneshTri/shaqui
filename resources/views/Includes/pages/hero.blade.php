<div class="max-w-screen-xl mx-auto">
    <div class="swiper mySwip">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div
                    class="md:pt-40 pt-20 pb-10 w-full items-center m-auto bg-[url('https://www.kayak.com/news/wp-content/uploads/sites/19/2023/06/DEST_UAE_DUBAI_Dubai-Marina_shutterstock-portfolio_410869147.jpg')] bg-no-repeat bg-covers">
                    <div class="container mx-auto px-8 pt-10 lg:flex">

                        <div class="text-center lg:text-left max-w-screen-xl w-full m-auto">
                            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none text-white">Turning your
                                ideas into Brands
                                &
                                Products.</h1>
                            <p class="text-xl lg:text-2xl mt-6 font-light text-white">We're hear to turn your ideas into
                                products that
                                make a
                                lasting, meaningful impression.</p>
                            <p class="mt-8 md:mt-12"><button type="button"
                                    class="py-4 px-12 bg-white font-semibold text-[#3552b2]">KNOW
                                    MORE</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">
                <div
                    class="md:pt-40 pt-20 pb-10 w-full items-center m-auto bg-[url('https://www.kayak.com/news/wp-content/uploads/sites/19/2023/06/DEST_UAE_DUBAI_Dubai-Marina_shutterstock-portfolio_410869147.jpg')] bg-no-repeat bg-covers">
                    <div class="container mx-auto px-8 pt-10 lg:flex">

                        <div class="text-center lg:text-left max-w-screen-xl w-full m-auto">
                            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none text-white">Turning your
                                ideas into Brands
                                &
                                Products.</h1>
                            <p class="text-xl lg:text-2xl mt-6 font-light text-white">We're hear to turn your ideas into
                                products that
                                make a
                                lasting, meaningful impression.</p>
                            <p class="mt-8 md:mt-12"><button type="button"
                                    class="py-4 px-12 bg-white font-semibold text-[#3552b2]">KNOW
                                    MORE</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
        </div>
        <button class="swiper-button-next heroNextBtn">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
        <button class="swiper-button-prev heroPrevBtn">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
</div>
<div class="bg-black w-full max-w-7xl m-auto">
    <hr>
</div>


<script>
    var mySwiper = new Swiper(".mySwip", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
