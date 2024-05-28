<div class="max-w-screen-xl m-auto mt-20 w-full">
    <div>
        <div class="flex flex-row items-center justify-center font-semibold text-4xl lg:text-6xl m-auto p-4">
            Our Work Gallery
        </div>
        <div class="grid sm:flex sm:flex-row">
            <div class="w-full sm:w-1/2">
                <div class="grid grid-cols-2 gap-2 h-full max-w-screen-xl w-full m-auto">
                    <div>
                        <img class="h-full max-w-full "
                            src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="img">
                    </div>
                    <div>
                        <img class="h-full max-w-full "
                            src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="img">
                    </div>
                    <div>
                        <img class="h-full max-w-full "
                            src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="img">
                    </div>
                    <div>
                        <img class="h-full max-w-full "
                            src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                            alt="img">
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 sm:ml-2 h-full">
                <div class="">
                    <div class="swiper mySwiper  mySwi">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                                        alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                                        alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script>
    const swiperGall = new Swiper(".mySwi", {
        slidesPerView: 1,
        spaceBetween: 30,
        cssMode: true,
        mousewheel: true,
        keyboard: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
        },
    });
</script>
