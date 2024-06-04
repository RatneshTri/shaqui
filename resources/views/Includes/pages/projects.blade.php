<div class="w-full m-auto mt-20">
    <div class="mx-16 2xl:mx-auto">
        <div class="max-w-screen-2xl mx-auto">
            <div class="m-auto mb-10">
                <div class="text-[#FF961F]">RECENTS PROJECTS
                    <div class="inline-block border-b-2 border-black w-36"></div>
                </div>
                <div class="mx-auto py-4 font-thin text-left text-3xl md:text-4xl">Experience online <br> printing
                    tailored to you</div>
                <div class="mb-10">
                    <div class="flex items-center justify-center mx-auto py-2 bg-[#E7F5FF] w-auto rounded-xl">
                        <div class="w-full mx-auto items-center justify-center flex flex-wrap">
                            <button type="button" onclick="showImages('folder1')" id="tabs-primary-btn"
                                class="btn focus:active active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Banner Printing
                            </button>
                            <button type="button" onclick="showImages('folder2')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Poster Printing
                            </button>
                            <button type="button" onclick="showImages('folder3')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Flyer or Leaflets
                            </button>
                            <button type="button" onclick="showImages('folder4')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Personalized Gifts
                            </button>
                            <button type="button" onclick="showImages('folder5')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Sticker and Labels
                            </button>
                            <button type="button" onclick="showImages('folder6')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Business Stationery
                            </button>
                            <button type="button" onclick="showImages('folder7')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Visting cards
                            </button>
                            <button type="button" onclick="showImages('folder8')"
                                class="btn active:shadow-inner inline-block h-12 px-2 mx-auto hover:bg-white hover:text-blue-500 text-black active:text-blue-700 font-medium hover:border-gray-800 rounded-lg text-sm">
                                Custom Clothing, Caps & Bags
                            </button>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="max-w-full">
                            <div class="" id="tab-container-wrap">
                                <div class="block" id="folder1">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 py-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder1/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder1/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder1/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder1/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder1/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder1/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder2">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder2/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder2/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder2/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder2/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder2/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder2/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder3">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder3/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder3/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder3/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder3/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder3/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder3/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder4">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder4/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder4/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder4/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder4/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder4/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder4/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder5">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder5/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder5/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder5/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder5/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder5/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder5/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder6">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder6/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder6/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder6/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder6/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder6/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder6/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder7">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder7/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder7/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder7/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder7/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder7/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder7/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                                <div class="hidden" id="folder8">
                                    <div
                                        class="image w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4 mx-auto items-center justify-center">
                                        <img src="{{ url('/images/folder8/1.png') }}" alt="img"
                                            class="h-96 w-full object-contain">
                                        <img src="{{ url('/images/folder8/2.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder8/3.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder8/4.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder8/5.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                        <img src="{{ url('/images/folder8/6.png') }}" alt="img"
                                            class="h-96 w-full object-contain hidden md:block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-black w-full max-w-7xl m-auto">
    <hr>
</div>


<script>
    const tabPrimaryBtn = document.querySelector('#tabs-primary-btn');

    tabPrimaryBtn.click();

    function showImages(folderId) {
        const folderToShow = document.querySelector(`#${folderId}`);
        const tabContainer = document.querySelector('#tab-container-wrap');
        const imageContainerList = tabContainer.querySelectorAll('.block');
        if (folderToShow) {
            if (imageContainerList.length > 0) {
                imageContainerList.forEach(element => {
                    element.className = 'hidden';
                });
            }
            folderToShow.className = 'block';
        }
    }
</script>
