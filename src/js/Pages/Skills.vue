<template>
                  <nav-component />

    <hr class="m-0">
   <section class="min-h-screen bg-gray-50 py-12 px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-10 border-b-4 border-blue-600 inline-block pb-2">
        My Skills
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div v-for="(category, index) in skills" :key="index" class="bg-white shadow-lg rounded-2xl p-6 transition hover:shadow-blue-200">
          <h3 class="text-xl font-semibold text-blue-700 mb-4">{{ category.category }}</h3>
          <ul class="space-y-2 text-gray-700">
            <li v-for="(skill, i) in category.items" :key="i" class="flex justify-between items-center">
              <span>{{ skill.name }}</span>
              <span class="text-sm text-gray-500">{{ skill.level }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const skills = [
  {
    category: 'Frontend Development',
    items: [
      { name: 'Vue.js', level: 'Advanced' },
      { name: 'Bootstrap', level: 'Advanced' },
      { name: 'Tailwind CSS', level: 'Advanced' },
      { name: 'JavaScript (ES6+)', level: 'Advanced' },
      { name: 'HTML5 & CSS3', level: 'Expert' },
    ],
  },
  {
    category: 'Backend Development',
    items: [
      { name: 'Laravel 12', level: 'Advanced' },
      { name: 'RESTful APIs', level: 'Advanced' },
      { name: 'JWT Authentication', level: 'Intermediate' },
      { name: 'Queues & Events', level: 'Intermediate' },
    ],
  },
  {
    category: 'Dev Tools & Workflow',
    items: [
      { name: 'Git & GitHub', level: 'Advanced' },
      { name: 'Docker (Dev use)', level: 'Intermediate' },
      { name: 'VS Code', level: 'Expert' },
      { name: 'Postman', level: 'Advanced' },
    ],
  },
  {
    category: 'Database',
    items: [
      { name: 'MySQL', level: 'Advanced' },
      { name: 'Workbench', level: 'Intermediate' },
    ],
  },
  {
    category: 'Testing & Principles',
    items: [
      { name: 'PHPUnit (Learning)', level: 'Beginner' },
      { name: 'SOLID Principles', level: 'Learning' },
    ],
  },
];
</script>

