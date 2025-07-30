<template>
                  <nav-component />

    <hr class="m-0">

    <section class="min-h-screen bg-white py-12 px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-10 border-b-4 border-blue-600 inline-block pb-2">
        Experience
      </h2>

      <div class="relative border-l-4 border-blue-600 pl-6 space-y-12">
        <div v-for="(exp, index) in experiences" :key="index" class="relative">
          <div class="absolute -left-3 top-1.5 bg-blue-600 w-6 h-6 rounded-full border-4 border-white shadow"></div>

          <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-gray-800">
              {{ exp.position }}
              <span class="text-blue-600 text-base font-medium"> — {{ exp.company }}</span>
            </h3>
            <p class="text-sm text-gray-500 mb-2">{{ exp.duration }}</p>
            <ul class="list-disc list-inside text-gray-700 text-base space-y-1">
              <li v-for="(task, i) in exp.tasks" :key="i">{{ task }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const experiences = [
  {
    position: 'Frontend Developer',
    company: 'Freelancer (Fiverr)',
    duration: '2023 — Present',
    tasks: [
      'Developed responsive websites using Vue.js and Bootstrap/Tailwind CSS',
      'Worked on UI/UX enhancements for client dashboards',
      'Integrated Stripe and PayPal payment gateways',
      'Fixed bugs and improved performance for various client projects',
    ],
  },
  {
    position: 'Intern Frontend Developer',
    company: 'Tech Bridge Solutions',
    duration: 'July 2022 — Dec 2022',
    tasks: [
      'Built reusable Vue.js components with dynamic data binding',
      'Collaborated with backend team on API integration',
      'Maintained project documentation and Git workflows',
    ],
  },
  {
    position: 'Personal Projects & Practice',
    company: 'Self-Learning',
    duration: '2021 — 2022',
    tasks: [
      'Built full-stack Laravel + Vue.js applications',
      'Learned real-world debugging and state management',
      'Practiced deploying apps on shared hosting and testing with Postman',
    ],
  },
];
</script>
