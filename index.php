<!DOCTYPE html>
<html style="scroll-behavior: smooth;">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mijn Portfolio - Home</title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">       
        <script src="https://cdn.tailwindcss.com"></script>        
        <script src="script.js" defer></script>
    </head>

    <body class="bg-gray-100 text-gray-900">
        <!-- Header -->
        <header id="navbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 bg-white shadow-md rounded-lg px-16 py-4 flex space-x-8 z-50 transition-all duration-300">
            <a href="#homepage" class="text-gray-600 hover:text-purple-500 transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <a href="#aboutme" class="text-gray-600 hover:text-purple-500 transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </a>
            <a href="#skills" class="text-gray-600 hover:text-purple-500 transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l1.09 3.36L16.5 6l-2.64 1.91L14.18 12l-2.18-1.59L9.82 12l.32-4.09L7.5 6l3.41-.64L12 2z"/>
                    <path d="M12 22v-6M6 22v-6M18 22v-6"/>
                </svg>
            </a>
            <a href="#projects" class="text-gray-600 hover:text-purple-500 transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 6h5l2 2h9a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/>
                </svg>
            </a>
            <a href="#contact" class="text-gray-600 hover:text-purple-500 transition">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2.08 2.08 0 0 1-2.29 2.08A19.91 19.91 0 0 1 2 4.29 2.08 2.08 0 0 1 4.08 2h3a2.08 2.08 0 0 1 2.08 1.72 13.44 13.44 0 0 0 .73 2.81 2.08 2.08 0 0 1-.47 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2.08 2.08 0 0 1 2.11-.47 13.44 13.44 0 0 0 2.81.73A2.08 2.08 0 0 1 22 16.92z"/>
                </svg>
            </a>
        </header>

        <!-- Main -->
        <main class="w-full">
            <!-- Homepage Section -->
            <section id="homepage" class="relative min-h-screen flex flex-col items-center justify-center bg-white">
                <div class="text-left px-8 absolute left-0 sm:left-10 md:left-20">
                    <h1 class="text-5xl font-bold text-gray-600 font-poppins">I'M <span id="rotating-text" class="text-5xl font-bold text-purple-600 font-poppins"></span></h1>
                    <p class="text-2xl text-gray-600 mt-2 font-poppins">FULL STACK DEVELOPER</p>
                </div>
  
                <!-- Arrow down  -->
                <div class="absolute bottom-4 w-full flex justify-center">
                    <a href="#aboutme" class="text-gray-600 hover:text-purple-500 transition animate-bounce">
                        <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                        </svg>
                    </a>
                </div>

                <!-- Image -->
                <div class="mt-6">
                    <!-- Voeg eventueel een afbeelding toe of gebruik deze sectie voor extra content -->
                </div>
            </section>

            <hr class="my-8 border-gray-300 w-3/4 mx-auto border-2">

            <!-- About Me Section -->
            <section id="aboutme" class="bg-gray-50 min-h-screen flex items-center justify-center text-center">
                <div>
                    <h2 class="text-5xl font-bold text-purple-600 mb-4 font-poppins">ABOUT ME</h2>
                    <p class="text-2xl text-gray-600 font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sequi, facilis rem ducimus mollitia perferendis distinctio quis voluptas iure magni?</p>
                </div>
            </section>

            <hr class="my-8 border-gray-300 w-3/4 mx-auto border-2">

            <!-- Skills Section -->
            <section id="skills" class="bg-white min-h-screen flex items-center justify-center text-center py-10">
                <div class="w-full max-w-6xl mx-auto">
                    <h2 class="text-5xl font-bold text-purple-600 font-poppins mb-4">SKILLS</h2> 
                    <p class="text-2xl text-gray-600 font-poppins mb-6">Here are some of my key skills and technologies that I use in my projects. The percentages indicate my proficiency level in each skill.</p>

                    <!-- Programming Languages -->
                    <div class="mb-10">
                        <h3 class="text-3xl font-bold text-gray-700 font-poppins mb-4">Programming Languages</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <!-- Skill Box 1 -->
                            <a href="https://www.lua.org/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#000080]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/Lua.svg" alt="Lua" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Lua</h3>
                                <p class="text-gray-600 mt-2">Lightweight, high-level, multi-paradigm programming language.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#000080] rounded-lg" style="width: 90%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">90%</span>
                                </div>
                            </a>
                            <!-- Skill Box 2 -->
                            <a href="https://www.w3schools.com/html/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#f16529]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/HTML5.svg" alt="HTML" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">HTML</h3>
                                <p class="text-gray-600 mt-2">Markup language for creating content on the web.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#f16529] rounded-lg" style="width: 75%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">75%</span>
                                </div>
                            </a>

                            <!-- Skill Box 3 -->
                            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#1572b6]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/CSS3.svg" alt="CSS" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">CSS</h3>
                                <p class="text-gray-600 mt-2">Style sheet language for designing web pages.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#1572b6] rounded-lg" style="width: 65%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">65%</span>
                                </div>
                            </a>

                            <!-- Skill Box 4 -->
                            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#f0db4f]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/JavaScript.svg" alt="JavaScript" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">JavaScript</h3>
                                <p class="text-gray-600 mt-2">Dynamic language for web interactivity.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#f0db4f] rounded-lg" style="width: 60%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">60%</span>
                                </div>
                            </a>

                            <!-- Skill Box PHP -->
                            <a href="https://www.php.net/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#777bb3]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/PHP.svg" alt="PHP" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">PHP</h3>
                                <p class="text-gray-600 mt-2">Popular general-purpose scripting language for web development.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#777bb3] rounded-lg" style="width: 10%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">10%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Frameworks -->
                    <div class="mb-10">
                        <h3 class="text-3xl font-bold text-gray-700 font-poppins mb-4">Frameworks</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <!-- Skill Box Tailwind CSS -->
                            <a href="https://tailwindcss.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#38bdf8]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/TailwindCSS.svg" alt="Tailwind CSS" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Tailwind CSS</h3>
                                <p class="text-gray-600 mt-2">Utility-first CSS framework for rapid UI development.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#38bdf8] rounded-lg" style="width: 40%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">40%</span>
                                </div>
                            </a>
                            <!-- Skill Box NodeJS -->
                            <a href="https://nodejs.org/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#83cd29]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/Node.js.svg" alt="Node.js" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Node.js</h3>
                                <p class="text-gray-600 mt-2">JavaScript runtime built on Chrome's V8 JavaScript engine.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#83cd29] rounded-lg" style="width: 40%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">40%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="mb-10">
                        <h3 class="text-3xl font-bold text-gray-700 font-poppins mb-4">Tools</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <!-- Skill Box VSCODE -->
                            <a href="https://code.visualstudio.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#007acc]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/VSCode.svg" alt="VS Code" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">VS Code</h3>
                                <p class="text-gray-600 mt-2">Source-code editor developed by Microsoft.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#007acc] rounded-lg" style="width: 95%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">95%</span>
                                </div>
                            </a>
                            <!-- Skill Box 2 -->
                            <a href="https://winscp.net/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#bdbec3]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/winscp.svg" alt="WinSCP" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">WinSCP</h3>
                                <p class="text-gray-600 mt-2">Free SFTP, SCP, S3, WebDAV, and FTP client for Windows.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#bdbec3] rounded-lg" style="width: 90%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">90%</span>
                                </div>
                            </a>
                            <!-- Skill Box 3 -->
                            <a href="https://www.canva.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#00c4cc]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/Canva.svg" alt="Canva" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Canva</h3>
                                <p class="text-gray-600 mt-2">Graphic design platform used to create social media graphics, presentations, posters, documents and other visual content.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#00c4cc] rounded-lg" style="width: 80%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">80%</span>
                                </div>
                            </a>
                            <!-- Skill Box 4 -->
                            <a href="https://github.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#000]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/GitHub.svg" alt="Github" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Github</h3>
                                <p class="text-gray-600 mt-2">Platform for version control and collaboration.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#000] rounded-lg" style="width: 70%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">70%</span>
                                </div>
                            </a>
                            <!-- Skill Box 5 -->
                            <a href="https://www.openai.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#000]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/openai.svg" alt="OpenAI" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">OpenAI</h3>
                                <p class="text-gray-600 mt-2">Artificial intelligence research and deployment company.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#000] rounded-lg" style="width: 70%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">70%</span>
                                </div>
                            </a>
                            <!-- Skill Box 6 -->
                            <a href="https://trello.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#23719f]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/Trello.svg" alt="Trello" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Trello</h3>
                                <p class="text-gray-600 mt-2">Collaboration tool that organizes your projects into boards.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#23719f] rounded-lg" style="width: 40%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">40%</span>
                                </div>
                            </a>
                            <!-- Skill Box 7 -->
                            <a href="https://www.gitbook.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#346ddb]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/GitBook.svg" alt="Gitbook" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Gitbook</h3>
                                <p class="text-gray-600 mt-2">Platform for documentation and knowledge management.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#346ddb] rounded-lg" style="width: 40%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">40%</span>
                                </div>
                            </a>
                            <!-- Skill Box 8 -->
                            <a href="https://vercel.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#000]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/Vercel.svg" alt="Vercel" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Vercel</h3>
                                <p class="text-gray-600 mt-2">Platform for frontend frameworks and static sites.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#000] rounded-lg" style="width: 40%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">40%</span>
                                </div>
                            </a>
                            <!-- Skill Box Formspree -->
                            <a href="https://formspree.io/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#c4001a]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/formspree.svg" alt="Formspree" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">Formspree</h3>
                                <p class="text-gray-600 mt-2">Service for handling form submissions.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#c4001a] rounded-lg" style="width: 30%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">30%</span>
                                </div>
                            </a>
                            <!-- Skill Box FileZilla -->
                            <a href="https://filezilla-project.org/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#b60000]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/FileZilla.svg" alt="FileZilla" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">FileZilla</h3>
                                <p class="text-gray-600 mt-2">Free software, cross-platform FTP application.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#b60000] rounded-lg" style="width: 15%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">15%</span>
                                </div>
                            </a>
                            <!-- Skill Box 10 -->
                            <a href="https://about.gitlab.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#fc6d26]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/GitLab.svg" alt="GitLab" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">GitLab</h3>
                                <p class="text-gray-600 mt-2">DevOps platform for software development and operations.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#fc6d26] rounded-lg" style="width: 10%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">10%</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Databases -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-700 font-poppins mb-4">Databases</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <!-- Skill Box 1 -->
                            <a href="https://www.mysql.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#00618a]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/MySQL.svg" alt="MySQL" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">MySQL</h3>
                                <p class="text-gray-600 mt-2">Open-source relational database management system.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#00618a] rounded-lg" style="width: 50%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">50%</span>
                                </div>
                            </a>
                            <!-- Skill Box 8 -->
                            <a href="https://www.mongodb.com/" target="_blank" class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300 hover:shadow-[#439934]">
                                <div class="w-20 h-20 mx-auto mb-4">
                                    <img src="images/MongoDB.svg" alt="MongoDB" class="w-full h-full object-contain">
                                </div>
                                <h3 class="text-xl font-semibold text-gray-700">MongoDB</h3>
                                <p class="text-gray-600 mt-2">NoSQL database for modern applications.</p>
                                <div class="mt-4 relative w-full h-6 bg-gray-200 rounded-lg">
                                    <div class="absolute top-0 left-0 h-full bg-[#439934] rounded-lg" style="width: 30%;"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-white font-bold">30%</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="my-8 border-gray-300 w-3/4 mx-auto border-2">

            <!-- Projects Section -->
            <section id="projects" class="bg-gray-50 min-h-screen flex items-center justify-center text-center py-10">
                <div class="w-full max-w-6xl mx-auto">
                    <h2 class="text-5xl font-bold text-purple-600 mb-4 font-poppins">PROJECTS</h2>
                    <p class="text-2xl text-gray-600 font-poppins mb-6">Here are some of the projects I have worked on.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- Project Eindhoven Combat -->
                        <div class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300">
                            <img src="images/ehc.svg" alt="Eindhoven Combat" class="w-full h-32 object-cover rounded-t-lg mb-4">
                            <h3 class="text-xl font-semibold text-gray-700">Eindhoven Combat</h3>
                            <p class="text-gray-600 mt-2">A FiveM server created with friends. Join the community on Discord or visit the website for more information.</p>
                            <a href="https://discord.gg/ehc" target="_blank" class="text-purple-600 mt-4 inline-block border border-purple-600 rounded-lg px-4 py-2 hover:bg-purple-600 hover:text-white transition">Join Discord</a>
                            <a href="https://eindhovencombat.nl" target="_blank" class="text-purple-600 mt-4 inline-block border border-purple-600 rounded-lg px-4 py-2 hover:bg-purple-600 hover:text-white transition">Visit Website</a>
                            <a href="https://cfx.re/join/6rakg4" target="_blank" class="text-purple-600 mt-4 inline-block border border-purple-600 rounded-lg px-4 py-2 hover:bg-purple-600 hover:text-white transition">Join Eindhoven</a>
                        </div>
                        <!-- Project Pixelcat -->
                        <div class="bg-white rounded-lg shadow-md p-6 hover:scale-105 transform transition duration-300">
                            <img src="images/pixelcat.svg" alt="Pixelcat" class="w-full h-32 object-cover rounded-t-lg mb-4">
                            <h3 class="text-xl font-semibold text-gray-700">Pixelcat</h3>
                            <p class="text-gray-600 mt-2">My first school project where I needed to make a game. Visit the website to play Pixelcat.</p>
                            <a href="https://pixelcat-rosy.vercel.app/" target="_blank" class="text-purple-600 mt-4 inline-block border border-purple-600 rounded-lg px-4 py-2 hover:bg-purple-600 hover:text-white transition">Play Pixelcat</a>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="my-8 border-gray-300 w-3/4 mx-auto border-2">

            <!-- Contact Section -->
            <section id="contact" class="bg-white min-h-screen flex items-center justify-center text-center">
                <div class="w-full max-w-lg mx-auto">
                    <h2 class="text-5xl font-bold text-purple-600 mb-4 font-poppins">CONTACT</h2>
                    <p class="text-2xl text-gray-600 font-poppins mb-6">Feel free to reach out to me by filling out the form below.</p>
                    <!-- <form action="https://formspree.io/f/xblgjapp" method="POST"> -->
                        <form action="contact.php" method="POST">
                        <div>
                            <label for="name" class="block text-left text-gray-700 font-poppins">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                        </div>
                        <div>
                            <label for="email" class="block text-left text-gray-700 font-poppins">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                        </div>
                        <div>
                            <label for="message" class="block text-left text-gray-700 font-poppins">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-purple-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-700 transition">Send Message</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <footer class="w-full bg-gray-50 shadow-md py-6 flex flex-col md:flex-row items-center justify-between px-4 md:px-8 text-gray-500 text-sm">
            <!-- Social Icons -->
            <div class="flex space-x-6 mb-4 md:mb-0">
                <!-- GitHub -->
                <a href="https://github.com/wesleymethorst" target="_blank" rel="noopener noreferrer" class="hover:text-purple-500 transition">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 19c-5 2-5-3-7-4m14 8v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 18.5 4a5.07 5.07 0 0 0-.09-3S17.09.65 15 2.48a13.38 13.38 0 0 0-6 0C7.09.65 5.59 1 5.59 1a5.07 5.07 0 0 0-.09 3A5.44 5.44 0 0 0 2.5 10c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 8 19.13V23"/>
                    </svg>
                </a>
        
                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/wesley-methorst-6b93651b9" target="_blank" rel="noopener noreferrer" class="hover:text-purple-500 transition">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v6h-4v-6a2 2 0 0 0-4 0v6h-4v-6a6 6 0 0 1 6-6z"/>
                        <rect x="2" y="9" width="4" height="12"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                </a>
        
                <!-- Instagram -->
                <a href="https://instagram.com/wesleymethorst" target="_blank" rel="noopener noreferrer" class="hover:text-purple-500 transition">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <path d="M16 11.37a4 4 0 1 1-4.63-4.63 4 4 0 0 1 4.63 4.63z"/>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                    </svg>
                </a>
            </div>
            
            <!-- Midden gecentreerde tekst -->
            <div class="text-center font-poppins">
                <p>Wesley Methorst - 2025</p>
                <p>&copy; All rights reserved</p>
            </div>
            
            <!-- Extra ruimte voor consistentie -->
            <div class="w-12"></div>
        </footer>
    </body>
</html>
