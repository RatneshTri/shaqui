<div class="mx-auto w-full">
    <div class="swiper mySwip">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-active">
                <div
                    class="md:pt-40 pt-14 pb-10 w-full items-center m-auto bg-[url('https://img.freepik.com/premium-photo/silhouette-two-people-standing-front-orange-light_893012-280499.jpg?w=1380')] bg-no-repeat bg-cover dark:bg-neutral-900">
                    <div class="max-w-screen-2xl mx-auto px-8 pt-10 lg:flex">
                        <div class="text-left w-full m-auto">
                            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none text-white">Turning your
                                ideas into Brands
                                &
                                Products.</h1>
                            <p class="text-xl text-left lg:text-2xl mt-6 font-light text-white">We're hear
                                to turn your ideas into
                                products that
                                make a
                                lasting, meaningful impression.</p>
                            <p class="mt-8 md:mt-12"><button type="button"
                                    class="py-2 px-6 md:py-4 md:px-12 bg-white font-semibold text-[#3552b2]">KNOW
                                    MORE</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">
                <div
                    class="md:pt-40 pt-14 pb-10 w-full items-center m-auto bg-[url('https://img.freepik.com/premium-photo/silhouette-two-people-standing-front-orange-light_893012-280499.jpg?w=1380')] bg-no-repeat bg-cover dark:bg-neutral-900">
                    <div class="max-w-screen-xl mx-auto px-8 pt-10 lg:flex">
                        <div class="text-left w-full m-auto">
                            <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none text-white">Turning your
                                ideas into Brands
                                &
                                Products.</h1>
                            <p class="text-xl text-left lg:text-2xl mt-6 font-light text-white">We're hear
                                to turn your ideas into
                                products that
                                make a
                                lasting, meaningful impression.</p>
                            <p class="mt-8 md:mt-12"><button type="button"
                                    class="py-2 px-6 md:py-4 md:px-12 bg-white font-semibold text-[#3552b2]">KNOW
                                    MORE</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
        </div>
        <button class="swiper-button-next swiper-button-disabled heroNextBtn active:text-white active:bg-blue-900">
            <i class="fa-solid fa-arrow-right" tabindex="0" area-disabled="false"></i>
        </button>
        <button class="swiper-button-prev swiper-button-disabled heroPrevBtn active:text-white active:bg-blue-900">
            <i class="fa-solid fa-arrow-left" tabindex="0" area-disabled="true"></i>
        </button>
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
</div>
<div class="bg-black w-full max-w-7xl m-auto">
    <hr>
</div>


<script>
    // const heroNextBtn = document.getElementsByClassName('heroNextBtn');

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

        // on: {
        //     slideChange: function() {
        //         if (this.activeIndex === this.slides.length - 1) {
        //             heroNextBtn.style.backgroundColor = 'blue';
        //         } else {
        //             heroNextBtn.style.backgroundColor = '';
        //         }
        //     }
        // }
    });
    // heroNextBtn.addEventListener('click', () => {
    //     swiper.slideNext();
    // });
</script>
