<x-layout.layout-type1>
    <x-component.navbar-type1 />
    <div
        class="mainsect w-full h-screen flex justify-center items-center mask-image-linear-gradient-to-b mask-opacity-100 mask-color-black-700">
        <div class="frontsect fixed h-full w-full flex flex-col items-center top-44 text-white drop-shadow-lg">
            <h1 class="text-[125px] font-bold pb-0 mb-0">ZXSTTM</h1>
            <p class="text-4xl font-semibold">Help you bring your ideas to life</p>
        </div>
        <div class="flex h-full w-full justify-end">
            <img class="pointer-events-none w-full h-full object-cover"
                src="{{ asset('images/fotis-fotopoulos-6sAl6aQ4OWI-unsplash.jpg') }}" alt="Background Image">
        </div>
    </div>

    <x-component.page-section title="About Me" psid="about">
        <div class="flex flex-row h-full overflow-y-hidden">
            <img class="flex-1" src="{{ asset('images/NHT-removebg-preview.png') }}" alt="Profile Picture">
            <div class="items-center justify-center content-center align-middle">
                <h3 class="text-3xl text-white py-1 leading-9 m-0">Hello, I'm Thoriq. <br> A Mobile & Backend
                    Developer.</h3>
                <p class=" text-2xl text-white text-justify py-1 leading-9 m-0">
                    I'm a college student studying informatics, and I have a strong interest in UI/UX design and mobile
                    development. I enjoy learning new technologies and applying them to create engaging and functional
                    interfaces for different platforms. I use tools such as Figma and Adobe Illustrator for design, and
                    Dart, Flutter, Kotlin, Python, and C++ for development. I have worked on various projects that
                    showcase
                    my skills and creativity, and you can see some of them below. I’m always looking for new
                    opportunities
                    to grow and to work with other passionate people in the field. Thank you for your interest in my
                    work!
                </p>
            </div>
        </div>
    </x-component.page-section>

    <x-component.page-section title="PROJECTS" psid="project" x-data="scrollContainer">
        <div class="flex flex-row h-full w-full overflow-x-scroll hover:cursor-grab shadow-[inset_0_10px_10px_rgba(20,20,20,.6)]"
            x-ref="container">
            <x-component.card-type1 img="{{ asset('images/project-1.jpg') }}" title="Project 1" destination="/" />
            <x-component.card-type1 img="{{ asset('images/project-1.jpg') }}" title="Project 2" destination="/" />
            <x-component.card-type1 img="{{ asset('images/project-1.jpg') }}" title="Project 3" destination="/" />
            <x-component.card-type1 img="{{ asset('images/project-1.jpg') }}" title="Project 4" destination="/" />
            <x-component.card-type1 img="{{ asset('images/project-1.jpg') }}" title="Project 5" destination="/" />
        </div>
    </x-component.page-section>

    <x-component.page-section title="Contact Me" psid="contact">
        <div class="flex flex-col items-center justify-center">
            <h3 class="text-3xl text-white py-1 leading-9 m-0">Let's work together!</h3>
            <p class="text-2xl text-white text-justify py-1 leading-9 m-0">
                &#9; If you have a project in mind or just want to say hi, feel free to contact me. I'm always open to
                new
                opportunities and collaborations. You can reach me via email or social media, and I'll get back to you
                as soon as possible. Thank you for your interest in my work, and I look forward to hearing from you!
            </p>
            <div class="flex flex-row h-full w-full items-center justify-evenly">
                <a href="mailto:naufalhusainalt@gmail.com" target=”_blank”
                    class="items-center justify-center content py-1 m-0">
                    <div class="">
                        <svg class="h-20 w-20 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </div>
                    <h3 class="text-2xl text-white text-center leading-9 py-2">Email</h3>
                </a>
                <a href="https://www.linkedin.com/in/nhthaar/" target=”_blank” class="py-1 m-0">
                    <div>
                        <svg class="h-20 w-20 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl text-white text-center leading-9 py-2">LinkedIn</h3>
                </a>
            </div>
        </div>
    </x-component.page-section>

</x-layout.layout-type1>