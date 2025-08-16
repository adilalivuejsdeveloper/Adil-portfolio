<template>
  <nav-component />
  <hr class="m-0">
  <section class="min-h-screen bg-gray-50 py-12 px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 border-b-4 border-blue-600 inline-block pb-2">
        My Skills
      </h2>
      <p class="text-gray-600 mb-10 max-w-3xl">
        With 2.1 years of experience in web development, I've mastered a comprehensive set of technologies for building modern, scalable web applications.
      </p>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div v-for="(category, index) in skills" :key="index" class="bg-white shadow-lg rounded-2xl p-6 transition hover:shadow-blue-200">
          <h3 class="text-xl font-semibold text-blue-700 mb-4">{{ category.category }}</h3>
          <ul class="space-y-3 text-gray-700">
            <li v-for="(skill, i) in category.items" :key="i" class="flex justify-between items-center">
              <span class="font-medium">{{ skill.name }}</span>
              <span class="text-sm text-blue-600 bg-blue-50 px-2 py-1 rounded">{{ skill.level }}</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Key Achievements Section -->
      <div class="mt-16 bg-white rounded-2xl shadow-lg p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Key Achievements</h3>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="border-l-4 border-blue-600 pl-4">
            <h4 class="font-semibold text-gray-800 mb-2">Project Success</h4>
            <p class="text-gray-600">Successfully developed multiple projects that streamlined processes and enhanced user experiences</p>
          </div>
          <div class="border-l-4 border-green-600 pl-4">
            <h4 class="font-semibold text-gray-800 mb-2">International Collaboration</h4>
            <p class="text-gray-600">Collaborated with international freelancers on full-stack web development projects</p>
          </div>
          <div class="border-l-4 border-purple-600 pl-4">
            <h4 class="font-semibold text-gray-800 mb-2">API Development</h4>
            <p class="text-gray-600">Developed robust web applications with scalable RESTful APIs</p>
          </div>
          <div class="border-l-4 border-orange-600 pl-4">
            <h4 class="font-semibold text-gray-800 mb-2">Full-Stack Expertise</h4>
            <p class="text-gray-600">Strong expertise in both front-end and back-end technologies</p>
          </div>
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
      { name: 'HTML', level: 'Expert' },
      { name: 'Vue.js', level: 'Advanced' },
      { name: 'JavaScript', level: 'Advanced' },
      { name: 'Alpine.js', level: 'Intermediate' },
      { name: 'CSS', level: 'Advanced' },
      { name: 'Tailwind CSS', level: 'Advanced' },
      { name: 'Bootstrap', level: 'Advanced' },
    ],
  },
  {
    category: 'Backend Development',
    items: [
      { name: 'PHP', level: 'Advanced' },
      { name: 'Laravel', level: 'Advanced' },
      { name: 'Livewire', level: 'Intermediate' },
      { name: 'RESTful APIs', level: 'Advanced' },
      { name: 'OOP', level: 'Advanced' },
    ],
  },
  {
    category: 'Database & Storage',
    items: [
      { name: 'MySQL', level: 'Advanced' },
      { name: 'MongoDB', level: 'Intermediate' },
    ],
  },
  {
    category: 'Design & Tools',
    items: [
      { name: 'Figma', level: 'Intermediate' },
      { name: 'Microsoft Office', level: 'Advanced' },
      { name: 'SEO', level: 'Intermediate' },
    ],
  },
  {
    category: 'Mobile & Additional',
    items: [
      { name: 'Mobile App Development', level: 'Intermediate' },
      { name: 'Git & Version Control', level: 'Advanced' },
      { name: 'API Integration', level: 'Advanced' },
    ],
  },
  {
    category: 'Specializations',
    items: [
      { name: 'Full-Stack Development', level: 'Advanced' },
      { name: 'Dynamic Websites', level: 'Expert' },
      { name: 'User-Friendly Interfaces', level: 'Advanced' },
      { name: 'Real-time Applications', level: 'Intermediate' },
    ],
  },
];
</script>
