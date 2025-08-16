<template>
  <nav-component />
  <hr class="m-0">
  <section class="min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-white">
    <div class="max-w-6xl mx-auto px-6 py-20">
      <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- Image or Illustration -->
        <div class="flex justify-center">
          <img
            :src="'src/images/my-logo.jpeg'"
            alt="Adil Ali Photo"
            class="w-64 h-64 rounded-full object-cover border-4 border-indigo-600 shadow-lg"
          />
        </div>

        <!-- About Text -->
        <div>
          <h1 class="text-4xl font-bold mb-4">About Me</h1>
          <p class="text-lg text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
            I'm <strong>Adil Ali</strong>, a passionate Full Stack Web Developer from Lahore, Pakistan with <strong>2.1 years of experience</strong> in web design and development. I specialize in creating dynamic and user-friendly websites using modern technologies.
          </p>
          <p class="text-gray-600 dark:text-gray-300 mb-4">
            I have developed strong full-stack web applications focusing on both front-end and back-end technologies. My expertise includes <strong>HTML, Vue.js, CSS, Tailwind CSS, Bootstrap, JavaScript, Alpine.js, PHP, Laravel, Livewire, MySQL, and MongoDB</strong>.
          </p>

          <!-- Education -->
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">Education</h3>
            <div class="text-gray-600 dark:text-gray-300">
              <p><strong>Software Engineering</strong> - Virtual University of Pakistan</p>
              <p><strong>Intermediate F.SC (Pre-Medical)</strong> - Aspire Group of Colleges</p>
            </div>
          </div>

          <!-- Key Highlights -->
          <ul class="space-y-2 text-gray-700 dark:text-gray-400 list-disc list-inside mb-6">
            <li>🚀 Developed robust web applications with scalable RESTful APIs</li>
            <li>🌍 Collaborated with international freelancers on full-stack projects</li>
            <li>💼 Experience with companies like Intelliage Solutions and Chirp Technologies</li>
            <li>📱 Mobile app development and SEO optimization</li>
            <li>🎨 Proficient in Figma for UI/UX design</li>
            <li>💻 Strong understanding of OOP principles</li>
          </ul>

          <!-- Languages -->
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">Languages</h3>
            <div class="flex gap-4 text-gray-600 dark:text-gray-300">
              <span>🇬🇧 English</span>
              <span>🇵🇰 Urdu</span>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">Contact Information</h3>
            <div class="space-y-1 text-gray-600 dark:text-gray-300">
              <p>📞 03054365536</p>
              <p>📧 adilalibhatti05@gmail.com</p>
              <p>🌐 https://adilali.vercel.app/</p>
              <p>📍 Lahore, Punjab, Pakistan</p>
            </div>
          </div>

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
