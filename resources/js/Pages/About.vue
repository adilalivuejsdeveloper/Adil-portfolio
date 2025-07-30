<template>
                  <nav-component />

    <hr class="m-0">

  <section class="min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-white">
    <div class="max-w-6xl mx-auto px-6 py-20">
      <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- Image or Illustration -->
        <div class="flex justify-center">
          <img
            src="/images/your-photo.jpg"
            alt="Adil Ali Photo"
            class="w-64 h-64 rounded-full object-cover border-4 border-indigo-600 shadow-lg"
          />
        </div>

        <!-- About Text -->
        <div>
          <h1 class="text-4xl font-bold mb-4">About Me</h1>
          <p class="text-lg text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
            I'm <strong>Adil Ali</strong>, a passionate full-stack web developer from Pakistan with strong expertise in <strong>Laravel, Vue.js, Tailwind CSS, and MySQL</strong>. I build modern, responsive, and secure web applications that solve real-world problems.
          </p>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            With over 2+ years of experience, I've helped startups and clients from around the world build fast, scalable, and user-friendly products. I focus on clean code, efficient performance, and great UI/UX.
          </p>

          <!-- Highlights -->
          <ul class="space-y-2 text-gray-700 dark:text-gray-400 list-disc list-inside mb-6">
            <li>🧠 Strong understanding of Laravel backend architecture</li>
            <li>🎯 Vue 3 with composition API and reusable components</li>
            <li>💻 Custom dashboards, admin panels, APIs & integrations</li>
            <li>🌐 Deployment via shared/VPS hosting with Git & SSH</li>
          </ul>

          <!-- Buttons -->
          <div class="flex flex-wrap gap-4">
            <a
              href="/Adil-Ali-CV.pdf"
              download
              class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
            >
              Download CV
            </a>
            <router-link
              to="/contact"
              class="px-6 py-3 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition"
            >
            
              Contact Me
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>

</script>


