<template>
                  <nav-component />

    <hr class="m-0">

   <section class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
    <div class="max-w-6xl mx-auto px-6 py-20 flex flex-col justify-center items-center text-center">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">👋 Hi, I'm Adil Ali</h1>
      <h2 class="text-2xl md:text-3xl text-indigo-600 dark:text-indigo-400 font-semibold mb-6">Full-Stack Web Developer</h2>
      <p class="max-w-2xl mb-8 text-gray-600 dark:text-gray-300">
        I build modern web applications using Laravel, Vue.js, Tailwind CSS and love crafting interactive UI with real-time functionality and secure APIs.
      </p>

      <div class="flex flex-wrap gap-4 justify-center">
        <router-link to="/projects" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">View Projects</router-link>
        <router-link to="/contact" class="px-6 py-3 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition">Hire Me</router-link>
      </div>

      <!-- Tech Stack -->
      <div class="mt-16">
        <h3 class="text-xl font-semibold mb-4">Tech Stack</h3>
        <div class="flex flex-wrap justify-center gap-6">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="h-10" alt="Laravel" />
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="h-10" alt="Vue.js" />
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="h-10" alt="Tailwind CSS" />
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="h-10" alt="MySQL" />
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-plain.svg" class="h-10" alt="Docker" />
        </div>
      </div>
    </div>
  </section>
</template>

<script>

</script>


