    <style>
        .active {
            display: block;
        }

        .active-image {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
        }

        .pagination-dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            border-radius: 50%;
            display: inline-block;
            background-color: #ccc;
        }

        .pagination-dot.active {
            background-color: #333;
        }
    </style>

    <div class="bg-gray-100 max-w-screen-xl m-auto mt-20 w-full">
        <div>
            <div class="container mx-auto text-center py-8">
                <div class="flex items-center justify-center text-4xl lg:text-6xl">
                    <p><span class="font-bold">Customer</span> Voices: <br><span class="font-bold"> Hear what </span>
                        they
                        says!</p>
                </div>
                <div class="flex mx-2 justify-between mt-28">
                    <button onclick="previousComment()"
                        class="px-2 py-2 bg-gray-300 active:bg-blue-500 rounded-full flex items-start justify-start"><i
                            class="fa-solid fa-arrow-left"></i></button>
                    <button onclick="nextComment()"
                        class="px-2 py-2 bg-gray-300 active:bg-blue-500 rounded-full flex items-end justify-end"><i
                            class="fa-solid fa-arrow-right items-end justify-end content-end"></i></button>
                </div>
                <div class="flex justify-center items-center flex-wrap gap-4 -mt-10">
                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                        alt="Person 1"
                        class="w-24 h-24 rounded-full cursor-pointer transform transition-transform duration-300 hover:scale-110 testimonial-image"
                        onclick="showComment(1)" id="img1">
                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                        alt="Person 2"
                        class="w-24 h-24 rounded-full cursor-pointer transform transition-transform duration-300 hover:scale-110 testimonial-image"
                        onclick="showComment(2)" id="img2">
                    <img src="https://img.freepik.com/premium-photo/silhouette-engineer-worker-building-site-construction-site-sunset-evening-time_29315-628.jpg?w=1380"
                        alt="Person 3"
                        class="w-24 h-24 rounded-full cursor-pointer transform transition-transform duration-300 hover:scale-110 testimonial-image"
                        onclick="showComment(3)" id="img3">
                </div>

                <div id="comment1" class="testimonial-content block mt-8 text-left">
                    <div class="flex items-center justify-center flex-col">
                        <h2 class="text-2xl font-bold">Robert A. Voltaire</h2>
                        <h2 class="text-xl font-semibold">Voltaire Gallery</h2>
                        <p class="mt-2 text-lg text-wrap text-center">Working
                            with Shaqui has
                            been changer for our brand. Their
                            expertise in delivering high-quality custom apparel has elevated out
                            brand identity and customer experience. The convenience of their
                            print-on-demand model has allowed us to focus on our core strengths,
                            knowing that our orders are being handled efficiently and with great
                            attention to detail.</p>
                    </div>
                </div>

                <div id="comment2" class="testimonial-content hidden mt-8 text-left">
                    <div class="flex items-center justify-center flex-col">
                        <h2 class="text-2xl font-bold">Robert A. Voltaire</h2>
                        <h2 class="text-xl font-semibold">Voltaire Gallery</h2>
                        <p class="mt-2 text-lg text-wrap text-center">Working
                            with Shaqui has
                            been changer for our brand. Their
                            expertise in delivering high-quality custom apparel has elevated out
                            brand identity and customer experience. The convenience of their
                            print-on-demand model has allowed us to focus on our core strengths,
                            knowing that our orders are being handled efficiently and with great
                            attention to detail.</p>
                    </div>
                </div>

                <div id="comment3" class="testimonial-content hidden mt-8 text-left">
                    <div class="flex items-center justify-center flex-col">
                        <h2 class="text-2xl font-bold">Robert A. Voltaire</h2>
                        <h2 class="text-xl font-semibold">Voltaire Gallery</h2>
                        <p class="mt-2 text-lg text-wrap text-center">Working
                            with Shaqui has
                            been changer for our brand. Their
                            expertise in delivering high-quality custom apparel has elevated out
                            brand identity and customer experience. The convenience of their
                            print-on-demand model has allowed us to focus on our core strengths,
                            knowing that our orders are being handled efficiently and with great
                            attention to detail.</p>
                    </div>
                </div>

                <div class="flex justify-center items-center mt-8">
                    <div id="pagination" class="flex justify-center items-center">
                        <div class="pagination-dot active" id="dot1"></div>
                        <div class="pagination-dot" id="dot2"></div>
                        <div class="pagination-dot" id="dot3"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let currentIndex = 1;
            const totalComments = 3;

            function showComment(id) {
                // Hide all comments
                const comments = document.querySelectorAll('.testimonial-content');
                comments.forEach(comment => comment.classList.add('hidden'));
                // Show the clicked comment
                document.getElementById('comment' + id).classList.remove('hidden');
                // Remove active class from all images
                const images = document.querySelectorAll('.testimonial-image.active-image');
                images.forEach(image => image.classList.remove('active-image'));
                // Add active class to the current image
                document.getElementById('img' + id).classList.add('active-image');
                // Update pagination
                const dots = document.querySelectorAll('.pagination-dot');
                dots.forEach(dot => dot.classList.remove('active'));
                document.getElementById('dot' + id).classList.add('active');
                currentIndex = id;
            }

            function autoSlide() {
                currentIndex++;
                if (currentIndex > totalComments) {
                    currentIndex = 1;
                }
                showComment(currentIndex);
            }

            function previousComment() {
                currentIndex--;
                if (currentIndex < 1) {
                    currentIndex = totalComments;
                }
                showComment(currentIndex);
            }

            function nextComment() {
                currentIndex++;
                if (currentIndex > totalComments) {
                    currentIndex = 1;
                }
                showComment(currentIndex);
            }
            // Auto slide every 5 seconds
            setInterval(autoSlide, 3000);
        </script>
    </div>
