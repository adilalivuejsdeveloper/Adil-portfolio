<template>
  <nav-component />
  <hr class="m-0">
  <section class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
    <div class="max-w-6xl mx-auto px-6 py-20 flex flex-col justify-center items-center text-center">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">👋 Hi, I'm Adil Ali</h1>
      <h2 class="text-2xl md:text-3xl text-indigo-600 dark:text-indigo-400 font-semibold mb-6">Full Stack Web Developer</h2>
      <p class="max-w-3xl mb-8 text-gray-600 dark:text-gray-300">
        I am a Full Stack Web Developer with 2.1 years of experience in web design and development. I specialize in creating dynamic and user-friendly websites using modern technologies such as HTML, Vue.js, CSS, Tailwind CSS, Bootstrap, JavaScript, and Alpine.js as well as backend technologies like PHP, Laravel and Livewire.
      </p>

      <div class="flex flex-wrap gap-4 justify-center mb-8">
        <router-link to="/projects" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">View Projects</router-link>
        <router-link to="/contact" class="px-6 py-3 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition">Hire Me</router-link>
        <a href="tel:03054365536" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">📞 03054365536</a>
      </div>

      <!-- Tech Stack -->
      <div class="mt-16">
        <h3 class="text-xl font-semibold mb-6">My Technology Stack</h3>
        <div class="flex flex-wrap justify-center gap-6 mb-8">
          <!-- Frontend -->
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="h-10 mb-2" alt="HTML5" />
            <span class="text-sm">HTML5</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="h-10 mb-2" alt="Vue.js" />
            <span class="text-sm">Vue.js</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="h-10 mb-2" alt="JavaScript" />
            <span class="text-sm">JavaScript</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="h-10 mb-2" alt="Tailwind CSS" />
            <span class="text-sm">Tailwind CSS</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" class="h-10 mb-2" alt="Bootstrap" />
            <span class="text-sm">Bootstrap</span>
          </div>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <!-- Backend -->
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="h-10 mb-2" alt="PHP" />
            <span class="text-sm">PHP</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="h-10 mb-2" alt="Laravel" />
            <span class="text-sm">Laravel</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="h-10 mb-2" alt="MySQL" />
            <span class="text-sm">MySQL</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="h-10 mb-2" alt="MongoDB" />
            <span class="text-sm">MongoDB</span>
          </div>
          <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="h-10 mb-2" alt="Figma" />
            <span class="text-sm">Figma</span>
          </div>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="mt-12 flex flex-wrap gap-6 justify-center text-sm">
        <a href="mailto:adilalibhatti05@gmail.com" class="text-indigo-600 hover:underline">📧 adilalibhatti05@gmail.com</a>
        <a href="https://www.linkedin.com/in/" target="_blank" class="text-indigo-600 hover:underline">💼 LinkedIn</a>
        <span class="text-gray-500">📍 Lahore, Punjab, Pakistan</span>
      </div>
    </div>
  </section>
</template>

<script>
</script>
