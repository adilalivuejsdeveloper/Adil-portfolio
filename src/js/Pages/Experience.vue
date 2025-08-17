<template>
  <nav-component />
  <hr class="m-0">

  <section class="min-h-screen bg-white py-12 px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 border-b-4 border-blue-600 inline-block pb-2">
        Professional Experience
      </h2>
      <p class="text-gray-600 mb-10 max-w-3xl">
        With 2.1 years of experience in web development, I have worked with various companies and collaborated on international projects, developing expertise in full-stack web development.
      </p>

      <div class="relative border-l-4 border-blue-600 pl-6 space-y-12">
        <div v-for="(exp, index) in experiences" :key="index" class="relative">
          <div class="absolute -left-3 top-1.5 bg-blue-600 w-6 h-6 rounded-full border-4 border-white shadow"></div>

          <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-gray-800">
              {{ exp.position }}
              <span class="text-blue-600 text-base font-medium"> — {{ exp.company }}</span>
            </h3>
            <p class="text-sm text-gray-500 mb-2">{{ exp.duration }}</p>
            <p v-if="exp.description" class="text-gray-600 mb-3 italic">{{ exp.description }}</p>
            <ul class="list-disc list-inside text-gray-700 text-base space-y-1">
              <li v-for="(task, i) in exp.tasks" :key="i">{{ task }}</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Education Section -->
      <div class="mt-16">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 border-b-4 border-green-600 inline-block pb-2">
          Education
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Software Engineering</h3>
            <p class="text-green-600 font-medium mb-2">Virtual University of Pakistan</p>
            <p class="text-sm text-gray-500">Currently Pursuing</p>
          </div>

          <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Intermediate F.SC (Pre-Medical)</h3>
            <p class="text-green-600 font-medium mb-2">Aspire Group of Colleges</p>
            <p class="text-sm text-gray-500">Completed: 2021</p>
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
