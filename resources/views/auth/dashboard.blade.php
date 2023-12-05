<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .image-container {
            position: relative;
            overflow: hidden;
        }

        .mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            mask-image: linear-gradient(to bottom, transparent, black);
        }
    </style>
</head>


<body class="bg-gray-100">
    <div class="max-w-screen-xl container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            <div class="md:col-span-3 bg-white p-12 rounded-lg">
                <!-- Baris pertama, digabung menjadi 1 div -->
                <div class="text-center pb-6">
                    <h1 class="text-4xl font-bold">Daffa Askar Fathin</h1>
                    <h2 class="text-xl text-indigo-200 pb-1">Software Engineering Student</h2>
                    <h3 class="text-md text-gray-500 pb-4">Yogyakarta, Indonesia.</h3>
                    <p class="text-md text-gray-400">
                        Hey there, I'm Askar D Fathin, but you can just call me Askar. I'm a Jakarta-born explorer with a passion for all things tech and an insatiable desire to try new things. As the older brother in my family, I've always felt a sense of responsibility to set a good example and lead the way in everything I do. 🧶🐱
                        <br><br>
                        I've recently made the exciting decision to switch gears from my former studies in building construction and sanitation to pursue a degree in Software Engineering Technology at Gadjah Mada University in Yogyakarta. It's a big change, but I'm ready to dive in and see where this new path takes me. 🤩🔥
                        <br><br>
                        My ultimate dream is to become a software engineer and use my skills to create innovative solutions that make a positive impact on the world. But hey, who says I can't also be a kickass teacher or a successful bakery owner on the side? 🧑🏻‍💻👨🏻‍🏫🧑🏻‍🍳
                        <br><br>
                        So that's a little bit about me, Askar: explorer, tech enthusiast, and lover of all things.
                        <br><br>
                        Nice to meet you! ✨⚡️💐
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-0  md:col-span-3">
                    <div id="satu" class="text-center">
                        <h1 class="font-semibold">Education</h1>
                        <h2>Gadjah Mada University</h2>
                    </div>
                    <div id="dua" class="text-center">
                        <h1 class="font-semibold">Pronouns</h1>
                        <h2>He/Him</h2>
                    </div>
                    <div id="tiga" class="text-center">
                        <h1 class="font-semibold">MBTI</h1>
                        <h2>ENFP</h2>
                    </div>
                </div>
            </div>
            {{-- EXPERIENCES --}}
            <h1 class="col-span-3 pt-8 text-3xl font-semibold">Experiences</h1>
            {{-- PROJECT --}}
            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Projects</h2>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">Broiler Monitoring</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Project Manager</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">JB Tower Interior</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">22</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Lead Interior Designer</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">Goldcoast Tower</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">22</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Lead Interior Designer</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">Around 20 Interior Projects</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">22</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Lead Interior Designer</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">Bendungan Ameroro</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">21</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">BIM and 3D Modeler</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">Kantor Pusat Partai</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">22</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Drafter & Estimator</p>
            </div>
            {{-- EVENT --}}
            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Events</h2>
            
            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">PPSMB PIONIR</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Event Coordinator</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">LPIK</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Design Creative Coordinator</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">SEASAC</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Design Creative</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">SERIES</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Event Coordinator</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">UGMSEC</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Design Creative</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">PPSMB PALAPA</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">08/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">Wreksodiningrat 10A DDD Coordinator</p>
            </div>


            {{-- COMPETITION --}}
            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Competitions</h2>
            
            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">POVVAF Essay Competition</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">09/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">3rd Winner</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">TGES Essay Competition</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">04/23</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">1st Winner</p>
            </div>

            <div class="image-container bg-white text-white hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 rounded-lg h-64 relative overflow-hidden">
                <div class="mask bg-cover" style="background-image: url('https://www.shutterstock.com/image-illustration/mediocrity-painful-human-condition-pictured-600nw-2036037419.jpg'); filter: grayscale(100%) brightness(70%); transition: filter 0.3s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%) brightness(70%)';"></div>
                <p class="absolute bottom-0 left-0 pl-4 pb-56">BIMWIKA AWARDS</p>
                <p class="absolute bottom-0 left-0 pl-4 pb-52">21</p>
                <p class="absolute bottom-0 right-0 pr-2 pb-2">1st Winner</p>
            </div>

            {{-- JOURNEY --}}
            <h1 class="col-span-3 pt-8 text-3xl font-semibold">Journey</h1>
            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Education</h2>
            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div class="flex justify-between">
                    <h2 class="text-xl font-medium text-gray-600 pb-8 ">University</h2>
                    <p class="text-md text-gray-400">2022—Present</p>
                </div>
                <h3>Gadjah Mada University</h3>
                <p>Software Engineering</p>

            </div>
            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-medium text-gray-600 pb-8 ">Vocational High School</h2>
                        <p class="text-md text-gray-400">2017—2021</p>
                    </div>
                    <h3>SMKN 26 Jakarta</h3>
                    <p>Building Construction, Sanitation, and Maintenance</p>
                </div>
            </div>
            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-medium text-gray-600 pb-8 ">Junior High School</h2>
                        <p class="text-md text-gray-400">2015—2017</p>
                    </div>
                    <h3>SMPN 117 Jakarta</h3>
                    <p>General Studies</p>
                </div>
            </div>

            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Work</h2>

            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-medium text-gray-600 pb-8 ">HOMY 8 Indonesia</h2>
                        <p class="text-md text-gray-400">Aug/21—Dec/21</p>
                    </div>
                    <h3>Lead Interior Designer</h3>
                    <p>Fulltime</p>
                </div>
            </div>

            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div class="flex justify-between">
                    <h2 class="text-xl font-medium text-gray-600 pb-8 ">BIMWIKA</h2>
                    <p class="text-md text-gray-400">Sep/20—May/21</p>
                </div>
                <h3>BIM and 3D Modeler</h3>
                <p>Internship</p>
            </div>

            <div class="p-3 bg-white text-md text-gray-500 rounded-lg">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-medium text-gray-600 pb-8 ">Self Employee</h2>
                        <p class="text-md text-gray-400">Aug/18—Jan/21</p>
                    </div>
                    <h3>Drafter</h3>
                    <p>Freelance</p>
                </div>
            </div>

            <h1 class="col-span-3 pt-8 text-3xl font-semibold">Skills</h1>
            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Architecture and Civil</h2>
            <div class="col-span-3 flex bg-white p-5 rounded-lg font-medium text-gray-400">
                <ul>
                    <li>AutoCAD</li>
                    <li>SketchUp</li>
                    <li>Revit</li>
                    <li>OpenRoad</li>
                    <li>OpenBridge</li>
                    <li>Vray</li>
                    <li>Lumion</li>
                    <li>Enscape</li>
                </ul>
            </div>

            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Programming Language</h2>
            <div class="col-span-3 flex bg-white p-5 rounded-lg font-medium text-gray-400">
                <ul>
                    <li>Python</li>
                    <li>Java</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                    <li>TailwindCSS</li>
                    <li>Kotlin</li>
                    <li>Swift</li>
                </ul>
            </div>

            <h2 class="col-span-3 pt-2 text-2xl font-medium text-gray-600">Design and Management</h2>
            <div class="col-span-3 flex bg-white p-5 rounded-lg font-medium text-gray-400">
                <ul>
                    <li>Figma</li>
                    <li>Canva</li>
                    <li>Trello</li>
                </ul>
            </div>
            <form action="{{ route('users') }}" method="GET">
                @csrf
                <button class="bg-white text-gray-500 hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 font-bold py-2 px-4 rounded-full" type="submit">Profile</button>
            </form>
            <form action="{{ route('kirim-email') }}" method="GET">
                @csrf
                <button class="bg-white text-gray-500 hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 font-bold py-2 px-4 rounded-full" type="submit">Send Email</button>
            </form>
                <form action="{{ route('logout') }}" method="GET">
                    @csrf
                    <button class="bg-white text-gray-500 hover:bg-indigo-100 hover:text-indigo-300 transition-all duration-200 font-bold py-2 px-4 rounded-full" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>


