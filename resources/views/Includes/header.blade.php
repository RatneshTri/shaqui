<nav class="max-w-screen-xl m-auto bg-white border-gray-200 dark:bg-gray-900">
    <div>
        <div class="flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://st2.depositphotos.com/4035913/6124/i/450/depositphotos_61243831-stock-photo-letter-s-logo.jpg"
                    class="w-32 h-20" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>

            <button id="hamburger-button" class="relative h-8 w-8 cursor-pointer text-3xl md:hidden">
                <div
                    class="absolute top-4 -mt-0.5 h-1 w-8 rounded bg-white transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-3 before:rounded before:bg-white before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-3 after:rounded after:bg-white after:transition-all after:duration-500 after:content-['']">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="#" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </div>
            </button>
            <section id="mobile-menu"
                class="justify-center hidden w-full origin-top animate-open-menu flex-col bg-transparent text-2xl">
                {{-- <button class="text-3xl self-end px-6">
                    &times;
                </button> --}}
                <nav class="flex min-h-screen flex-col items-center py-8 font-sans" aria-label="mobile">
                    <a href="#home"
                        class="w-full py-6 text-center hover:opacity-10 border rounded-lg bg-gray-400">Home</a>
                    <a href="#aboutus"
                        class="w-full py-6 text-center hover:opacity-10 border rounded-lg bg-gray-400">ABOUT
                        US</a>
                    <a href="#services"
                        class="w-full py-6 text-center hover:opacity-10 border rounded-lg bg-gray-400">SERVICES</a>
                    <a href="#projects"
                        class="w-full py-6 text-center hover:opacity-10 border rounded-lg bg-gray-400">PROJECTS</a>
                    <a href="#gallery"
                        class="w-full py-6 text-center hover:opacity-10 border rounded-lg bg-gray-400">GALLERY</a>
                </nav>
            </section>
            <div class="items-end justify-end hidden md:grid animate-open-menu">
                <div class="hidden md:flex justify-end w-full mb-2">
                    <div class="mr-4">
                        <i class="fa-solid fa-phone-volume"></i>
                        <a class="px-2 text-[#8ABCDE] font-bold" href="tel:+971502022045">(+97)1502022045</a>
                    </div>
                    <div>
                        <i class="fa-regular fa-envelope"></i>
                        <a class="pl-2 text-[#8ABCDE] font-bold" href="mailto:sales@shaqui.com"
                            target="_blank">sales@shaqui.com</a>
                    </div>
                </div>
                <div class="hidden w-full md:block md:w-auto font-sans" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                                aria-current="page"><i class="fa-solid fa-house"></i></a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">ABOUT
                                US</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">SERVICES</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">PROJECTS</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">GALLERY</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fixed top-[750px] left-0 mx-auto z-20">
            <button onclick="toTop()"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                <p class="-rotate-90 mt-7">Back to top</p>
            </button>
        </div>
        <div class="fixed top-[780px] right-10 mx-auto z-20">
            <div><a href="https://wa.me/+971502022045" target="_blank"><img
                        src="{{ asset('images/icon/whatsapp.png') }}" alt="whatsapp-icon" class="w-[50px] h-[50px]"></a>
            </div>
        </div>
</nav>


<script>
    function toggleMenu() {
        var menu = document.getElementById('navbar-default');
        var isExpanded = menu.style.display === 'block';
        menu.style.display = isExpanded ? 'none' : 'block';
        document.querySelector('[aria-controls="navbar-default"]').setAttribute('aria-expanded', !isExpanded);
    }

    const initApp = () => {
        const hamburgerBtn = document.getElementById('hamburger-button')
        const mobileMenu = document.getElementById('mobile-menu')

        const toggleMenu = () => {
            mobileMenu.classList.toggle('hidden')
            mobileMenu.classList.toggle('flex')
            hamburgerBtn.classList.toggle('toggle-btn')
        }

        hamburgerBtn.addEventListener('click', toggleMenu)
        mobileMenu.addEventListener('click', toggleMenu)
    }

    document.addEventListener('DOMContentLoaded', initApp)

    function toTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>
