<template>
  <nav-component />
  <hr class="m-0">
  <section class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-20 flex flex-col justify-center items-center text-center">
      <!-- Hero Section -->
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 px-2">
        👋 Hi, I'm Adil Ali
      </h1>
      <h2 class="text-xl sm:text-2xl md:text-3xl text-indigo-600 dark:text-indigo-400 font-semibold mb-6 px-2">
        Full Stack Web Developer
      </h2>
      <p class="max-w-4xl mb-8 text-sm sm:text-base lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed px-4">
        I am a Full Stack Web Developer with 2.1 years of experience in web design and development. I specialize in creating dynamic and user-friendly websites using modern technologies such as HTML, Vue.js, CSS, Tailwind CSS, Bootstrap, JavaScript, and Alpine.js as well as backend technologies like PHP, Laravel and Livewire.
      </p>

      <!-- Call to Action Buttons -->
      <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 justify-center mb-12 w-full max-w-lg sm:max-w-none px-4">
        <router-link
          to="/projects"
          class="w-full sm:w-auto px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-all duration-200 font-medium text-center">
          View Projects
        </router-link>
        <router-link
          to="/contact"
          class="w-full sm:w-auto px-6 py-3 border border-indigo-600 text-indigo-600 dark:text-indigo-400 dark:border-indigo-400 rounded-lg hover:bg-indigo-50 dark:hover:bg-indigo-900 transition-all duration-200 font-medium text-center">
          Hire Me
        </router-link>
        <a
          href="tel:03054365536"
          class="w-full sm:w-auto px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all duration-200 font-medium text-center">
          📞 03054365536
        </a>
      </div>

      <!-- Tech Stack Section -->
      <div class="mt-8 sm:mt-12 lg:mt-16 w-full max-w-5xl">
        <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold mb-6 sm:mb-8">My Technology Stack</h3>

        <!-- Frontend Technologies -->
        <div class="mb-8 sm:mb-12">
          <h4 class="text-base sm:text-lg font-medium mb-4 sm:mb-6 text-indigo-600 dark:text-indigo-400">Frontend Technologies</h4>
          <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-4 sm:gap-6 lg:gap-8 justify-items-center">
            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                  class="w-full h-full object-contain"
                  alt="HTML5"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">HTML5</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
                  class="w-full h-full object-contain"
                  alt="Vue.js"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">Vue.js</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                  class="w-full h-full object-contain"
                  alt="JavaScript"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">JavaScript</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200 flex items-center justify-center">
                <div class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-xs sm:text-sm lg:text-base">TW</span>
                </div>
              </div>
              <span class="text-xs sm:text-sm font-medium">Tailwind CSS</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                  class="w-full h-full object-contain"
                  alt="Bootstrap"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">Bootstrap</span>
            </div>
          </div>
        </div>

        <!-- Backend Technologies -->
        <div class="mb-8 sm:mb-12">
          <h4 class="text-base sm:text-lg font-medium mb-4 sm:mb-6 text-indigo-600 dark:text-indigo-400">Backend & Database</h4>
          <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-4 sm:gap-6 lg:gap-8 justify-items-center">
            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                  class="w-full h-full object-contain"
                  alt="PHP"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">PHP</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200 flex items-center justify-center">
                <div class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-red-500 to-orange-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-xs sm:text-sm lg:text-base">L</span>
                </div>
              </div>
              <span class="text-xs sm:text-sm font-medium">Laravel</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                  class="w-full h-full object-contain"
                  alt="MySQL"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">MySQL</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                  class="w-full h-full object-contain"
                  alt="MongoDB"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">MongoDB</span>
            </div>

            <div class="flex flex-col items-center group hover:transform hover:scale-110 transition-all duration-200">
              <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 mb-2 sm:mb-3 p-2 bg-white dark:bg-gray-800 rounded-lg shadow-md group-hover:shadow-lg transition-all duration-200">
                <img
                  src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
                  class="w-full h-full object-contain"
                  alt="Figma"
                />
              </div>
              <span class="text-xs sm:text-sm font-medium">Figma</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Info Section -->
      <div class="mt-8 sm:mt-12 w-full max-w-4xl">
        <div class="flex flex-col sm:flex-row flex-wrap gap-4 sm:gap-6 justify-center items-center text-sm sm:text-base px-4">
          <a
            href="mailto:adilalibhatti05@gmail.com"
            class="flex items-center gap-2 text-indigo-600 dark:text-indigo-400 hover:underline transition-colors duration-200 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm hover:shadow-md">
            <span class="text-lg">📧</span>
            <span class="break-all">adilalibhatti05@gmail.com</span>
          </a>
          <a
            href="https://www.linkedin.com/in/"
            target="_blank"
            class="flex items-center gap-2 text-indigo-600 dark:text-indigo-400 hover:underline transition-colors duration-200 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm hover:shadow-md">
            <span class="text-lg">💼</span>
            <span>LinkedIn</span>
          </a>
          <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
            <span class="text-lg">📍</span>
            <span>Lahore, Punjab, Pakistan</span>
          </div>
        </div>
      </div>

      <!-- Additional Stats Section -->
      <div class="mt-8 sm:mt-12 w-full max-w-4xl">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 px-4">
          <div class="bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow-sm text-center">
            <div class="text-2xl sm:text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">2.1+</div>
            <div class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Years Experience</div>
          </div>
          <div class="bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow-sm text-center">
            <div class="text-2xl sm:text-3xl font-bold text-green-600 mb-2">7+</div>
            <div class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Projects Completed</div>
          </div>
          <div class="bg-white dark:bg-gray-800 p-4 sm:p-6 rounded-lg shadow-sm text-center">
            <div class="text-2xl sm:text-3xl font-bold text-purple-600 mb-2">10+</div>
            <div class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Technologies</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer-component />
</template>

<script>
</script>
