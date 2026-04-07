<template>
  <nav-component />
  <hr class="m-0 dark:border-gray-800">

  <section class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300 py-12 px-4 sm:px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">

      <!-- Page Header -->
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-indigo-100 dark:bg-indigo-900/40 text-indigo-700 dark:text-indigo-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
          <span>💼</span>
          <span>Career Journey</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-4">
          Professional Experience
        </h1>
        <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto text-lg leading-relaxed">
          With 2.2 years of experience in web development, I have worked with various companies and collaborated on international projects, developing expertise in full-stack web development.
        </p>
      </div>

      <!-- Timeline -->
      <div class="relative">
        <!-- Vertical line -->
        <div class="absolute left-6 sm:left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-600 via-purple-500 to-green-500 rounded-full"></div>

        <div class="space-y-8">
          <div v-for="(exp, index) in experiences" :key="index" class="relative pl-16 sm:pl-20">
            <!-- Timeline dot -->
            <div class="absolute left-4 sm:left-6 top-6 w-5 h-5 rounded-full bg-white dark:bg-gray-900 border-4 border-blue-600 dark:border-blue-400 shadow-lg z-10"></div>

            <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
              <!-- Header -->
              <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
                <div>
                  <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-200">
                    {{ exp.position }}
                  </h3>
                  <p class="text-blue-600 dark:text-blue-400 font-semibold">{{ exp.company }}</p>
                </div>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-50 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 border border-blue-100 dark:border-blue-800 whitespace-nowrap">
                  📅 {{ exp.duration }}
                </span>
              </div>

              <p v-if="exp.description" class="text-gray-500 dark:text-gray-400 mb-4 italic text-sm">{{ exp.description }}</p>

              <ul class="space-y-2">
                <li v-for="(task, i) in exp.tasks" :key="i" class="flex items-start gap-3 text-gray-700 dark:text-gray-300 text-sm">
                  <span class="text-green-500 dark:text-green-400 mt-0.5 flex-shrink-0">✓</span>
                  <span>{{ task }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Education Section -->
      <div class="mt-16">
        <div class="text-center mb-10">
          <div class="inline-flex items-center space-x-2 bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
            <span>🎓</span>
            <span>Academic Background</span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white">Education</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 border-l-4 border-l-blue-500">
            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center mb-4">
              <span class="text-blue-600 dark:text-blue-400 text-xl">🎓</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Software Engineering</h3>
            <p class="text-blue-600 dark:text-blue-400 font-semibold mb-1">Virtual University of Pakistan</p>
            <p class="text-sm text-gray-500 dark:text-gray-400 inline-flex items-center gap-1">
              <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
              Currently Pursuing
            </p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 border-l-4 border-l-green-500">
            <div class="w-12 h-12 bg-green-100 dark:bg-green-900/40 rounded-xl flex items-center justify-center mb-4">
              <span class="text-green-600 dark:text-green-400 text-xl">📚</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Intermediate F.SC (Pre-Medical)</h3>
            <p class="text-green-600 dark:text-green-400 font-semibold mb-1">Aspire Group of Colleges</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">Completed: 2021</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <footer-component />
</template>

<script setup>
const experiences = [
  {
    position: 'Full Stack Web Developer (Remote)',
    company: 'Freelance Collaboration',
    duration: '06/2025 — Present',
    description: 'Currently working on international freelance projects',
    tasks: [
      'Collaborated with international freelancers on full-stack web development projects',
      'Developed dynamic web applications using Vue.js and Laravel',
      'Integrated APIs and implemented real-time functionality',
      'Worked on various projects including e-commerce, IoT, and trading systems',
    ],
  },
  {
    position: 'Full Stack Web Developer',
    company: 'Chirp Technologies',
    duration: '04/2025 — 06/2025',
    description: 'Focused on developing robust web applications with scalable architecture',
    tasks: [
      'Developed robust web applications with a strong focus on back-end technologies',
      'Designed and implemented scalable RESTful APIs',
      'Built dynamic frontend solutions with Vue.js and modern CSS frameworks',
      'Handled database operations and server-side logic optimization',
      'Integrated third-party services and APIs for enhanced functionality',
    ],
  },
  {
    position: 'Full Stack Web Developer',
    company: 'Intelliage Solutions',
    duration: '08/2023 — 03/2025',
    description: 'A company focused on developing web solutions',
    tasks: [
      'Developed strong full-stack web applications focusing on both front-end and back-end technologies',
      'Built responsive and user-friendly interfaces using Vue.js and Tailwind CSS',
      'Implemented server-side logic and database management with Laravel and MySQL',
      'Collaborated with team members on various web development projects',
    ],
  },
  {
    position: 'Software Engineering Student & Self-Learning',
    company: 'Virtual University of Pakistan',
    duration: '01/2021 — Present',
    description: 'Academic pursuit combined with practical web development learning',
    tasks: [
      'Pursuing Software Engineering degree with focus on web technologies',
      'Self-taught modern web development technologies including Vue.js, Laravel, and Tailwind CSS',
      'Built personal projects to practice full-stack development skills',
      'Learned industry best practices for coding, version control, and deployment',
    ],
  },
];
</script>
