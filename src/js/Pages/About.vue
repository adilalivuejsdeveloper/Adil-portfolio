<template>
  <nav-component />
  <hr class="m-0">

  <!-- Hero Section -->
  <section class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-20 lg:py-24">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Image Section with Enhanced Design -->
        <div class="relative flex justify-center lg:justify-end order-2 lg:order-1">
          <!-- Background Decorations -->
          <div class="absolute inset-0 bg-gradient-to-r from-indigo-200 to-purple-200 dark:from-indigo-800 dark:to-purple-800 rounded-full opacity-20 blur-3xl transform scale-110"></div>

          <!-- Main Image Container -->
          <div class="relative">
            <!-- Profile Image -->
            <div class="relative z-10">
              <img
                :src="'/images/my-logo.webp'"
                alt="Adil Ali - Full Stack Web Developer"
                class="w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 rounded-3xl object-cover shadow-2xl border-4 border-white dark:border-gray-700 transition-transform duration-500 hover:scale-105"
              />
              <!-- Status Badge -->
              <div class="absolute -bottom-4 -right-4 bg-green-500 text-white px-4 py-2 rounded-full shadow-lg flex items-center space-x-2">
                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                <span class="text-sm font-medium">Available for work</span>
              </div>
            </div>

            <!-- Floating Cards -->
            <div class="absolute -top-6 -left-6 bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 transform rotate-3 hover:rotate-0 transition-transform duration-300">
              <div class="text-2xl mb-2">🚀</div>
              <div class="text-sm font-semibold text-gray-800 dark:text-white">2.1+ Years</div>
              <div class="text-xs text-gray-500 dark:text-gray-400">Experience</div>
            </div>

            <div class="absolute -bottom-8 -left-8 bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
              <div class="text-2xl mb-2">💻</div>
              <div class="text-sm font-semibold text-gray-800 dark:text-white">7+ Projects</div>
              <div class="text-xs text-gray-500 dark:text-gray-400">Completed</div>
            </div>

            <div class="absolute top-1/2 -right-12 bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 transform rotate-6 hover:rotate-0 transition-transform duration-300">
              <div class="text-2xl mb-2">⚡</div>
              <div class="text-sm font-semibold text-gray-800 dark:text-white">Full Stack</div>
              <div class="text-xs text-gray-500 dark:text-gray-400">Developer</div>
            </div>
          </div>
        </div>

        <!-- Content Section -->
        <div class="order-1 lg:order-2 space-y-8">
          <!-- Header -->
          <div>
            <div class="inline-flex items-center space-x-2 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
              <span>👋</span>
              <span>Hello, I'm</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
              Adil Ali
            </h1>
            <h2 class="text-xl sm:text-2xl text-indigo-600 dark:text-indigo-400 font-semibold mb-6">
              Full Stack Web Developer
            </h2>
          </div>

          <!-- Description -->
          <div class="space-y-4">
            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
              Passionate Full Stack Web Developer from <strong class="text-indigo-600 dark:text-indigo-400">Lahore, Pakistan</strong> with <strong class="text-indigo-600 dark:text-indigo-400">2.1 years of experience</strong> in creating dynamic, user-friendly web applications using cutting-edge technologies.
            </p>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
              I specialize in building scalable web solutions with <strong>Vue.js, Laravel, Tailwind CSS</strong>, and modern development practices. My expertise spans both frontend and backend development, delivering complete digital solutions.
            </p>
          </div>

          <!-- Key Stats -->
          <div class="grid grid-cols-3 gap-4">
            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
              <div class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">2.1+</div>
              <div class="text-sm text-gray-500 dark:text-gray-400">Years Exp.</div>
            </div>
            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
              <div class="text-2xl font-bold text-green-600">7+</div>
              <div class="text-sm text-gray-500 dark:text-gray-400">Projects</div>
            </div>
            <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
              <div class="text-2xl font-bold text-purple-600">10+</div>
              <div class="text-sm text-gray-500 dark:text-gray-400">Technologies</div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-col sm:flex-row gap-4">
            <a
              href="/Adil-Ali-CV.pdf"
              download
              class="inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition-all duration-200 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1"
            >
              <span class="mr-2">📄</span>
              Download CV
            </a>
            <router-link
              to="/contact"
              class="inline-flex items-center justify-center px-8 py-4 border-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 dark:border-indigo-400 rounded-xl hover:bg-indigo-50 dark:hover:bg-indigo-900 transition-all duration-200 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1"
            >
              <span class="mr-2">💬</span>
              Let's Talk
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Professional Details Section -->
  <section class="bg-white dark:bg-gray-900 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
          Professional Background
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Combining technical expertise with creative problem-solving to deliver exceptional web solutions
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-8 mb-16">

        <!-- Education -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-700 p-8 rounded-2xl border border-blue-100 dark:border-gray-600">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mr-4">
              <span class="text-white text-xl">🎓</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Education</h3>
          </div>
          <div class="space-y-4">
            <div class="border-l-4 border-blue-500 pl-4">
              <h4 class="font-semibold text-gray-900 dark:text-white">Software Engineering</h4>
              <p class="text-sm text-gray-600 dark:text-gray-300">Virtual University of Pakistan</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Currently Pursuing</p>
            </div>
            <div class="border-l-4 border-green-500 pl-4">
              <h4 class="font-semibold text-gray-900 dark:text-white">Intermediate F.SC</h4>
              <p class="text-sm text-gray-600 dark:text-gray-300">Aspire Group of Colleges</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Completed 2021</p>
            </div>
          </div>
        </div>

        <!-- Experience -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-gray-800 dark:to-gray-700 p-8 rounded-2xl border border-green-100 dark:border-gray-600">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
              <span class="text-white text-xl">💼</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Experience</h3>
          </div>
          <div class="space-y-4">
            <div class="border-l-4 border-green-500 pl-4">
              <h4 class="font-semibold text-gray-900 dark:text-white">Freelance Developer</h4>
              <p class="text-sm text-gray-600 dark:text-gray-300">International Projects</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">2025 - Present</p>
            </div>
            <div class="border-l-4 border-blue-500 pl-4">
              <h4 class="font-semibold text-gray-900 dark:text-white">Chirp Technologies</h4>
              <p class="text-sm text-gray-600 dark:text-gray-300">Full Stack Developer</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Apr - Jun 2025</p>
            </div>
            <div class="border-l-4 border-purple-500 pl-4">
              <h4 class="font-semibold text-gray-900 dark:text-white">Intelliage Solutions</h4>
              <p class="text-sm text-gray-600 dark:text-gray-300">Full Stack Developer</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Aug 2023 - Mar 2025</p>
            </div>
          </div>
        </div>

        <!-- Languages & Contact -->
        <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-700 p-8 rounded-2xl border border-purple-100 dark:border-gray-600">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mr-4">
              <span class="text-white text-xl">🌐</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Contact & Languages</h3>
          </div>
          <div class="space-y-4">
            <div class="space-y-3">
              <div class="flex items-center text-gray-600 dark:text-gray-300">
                <span class="mr-3">🇬🇧</span>
                <span>English (Fluent)</span>
              </div>
              <div class="flex items-center text-gray-600 dark:text-gray-300">
                <span class="mr-3">🇵🇰</span>
                <span>Urdu (Native)</span>
              </div>
            </div>
            <div class="pt-4 border-t border-purple-200 dark:border-gray-600">
              <div class="space-y-2">
                <a href="tel:03054365536" class="flex items-center text-sm text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                  <span class="mr-2">📱</span>
                  03054365536
                </a>
                <a href="mailto:adilalibhatti05@gmail.com" class="flex items-center text-sm text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                  <span class="mr-2">📧</span>
                  adilalibhatti05@gmail.com
                </a>
                <div class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                  <span class="mr-2">📍</span>
                  Lahore, Punjab, Pakistan
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Key Highlights Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🚀</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Scalable Solutions</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Developed robust web applications with scalable RESTful APIs</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🌍</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Global Collaboration</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Collaborated with international freelancers on diverse projects</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">📱</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Mobile Development</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Mobile app development and SEO optimization expertise</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">🎨</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">UI/UX Design</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Proficient in Figma for creating intuitive user interfaces</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">💻</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Code Quality</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Strong understanding of OOP principles and best practices</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 group">
          <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-300">⚡</div>
          <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Performance</h4>
          <p class="text-sm text-gray-600 dark:text-gray-300">Optimized applications for speed and user experience</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Technology Stack Section -->
  <section class="bg-gray-50 dark:bg-gray-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
          Technology Stack
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Modern technologies and frameworks I use to build exceptional web applications
        </p>
      </div>

      <!-- Frontend Technologies -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-center text-indigo-600 dark:text-indigo-400 mb-8">
          Frontend Development
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 max-w-5xl mx-auto">
          <!-- HTML5 -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                class="w-full h-full object-contain"
                alt="HTML5"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">HTML5</span>
          </div>

          <!-- Vue.js -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
                class="w-full h-full object-contain"
                alt="Vue.js"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Vue.js</span>
          </div>

          <!-- JavaScript -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                class="w-full h-full object-contain"
                alt="JavaScript"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">JavaScript</span>
          </div>

          <!-- Tailwind CSS -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110 flex items-center justify-center">
              <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-lg">TW</span>
              </div>
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Tailwind CSS</span>
          </div>

          <!-- Bootstrap -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                class="w-full h-full object-contain"
                alt="Bootstrap"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Backend Technologies -->
      <div>
        <h3 class="text-2xl font-bold text-center text-indigo-600 dark:text-indigo-400 mb-8">
          Backend & Database
        </h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 max-w-5xl mx-auto">
          <!-- PHP -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                class="w-full h-full object-contain"
                alt="PHP"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">PHP</span>
          </div>

          <!-- Laravel -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110 flex items-center justify-center">
              <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-orange-600 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-lg">L</span>
              </div>
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Laravel</span>
          </div>

          <!-- MySQL -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                class="w-full h-full object-contain"
                alt="MySQL"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">MySQL</span>
          </div>

          <!-- MongoDB -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                class="w-full h-full object-contain"
                alt="MongoDB"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">MongoDB</span>
          </div>

          <!-- Figma -->
          <div class="flex flex-col items-center group">
            <div class="w-20 h-20 lg:w-24 lg:h-24 mb-4 p-4 bg-white dark:bg-gray-700 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
              <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
                class="w-full h-full object-contain"
                alt="Figma"
                loading="lazy"
              />
            </div>
            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Figma</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script>
</script>
