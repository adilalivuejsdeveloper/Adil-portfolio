<template>
  <nav-component />
  <hr class="m-0">

  <section class="min-h-screen bg-gray-50 py-8 sm:py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Header Section -->
      <div class="text-center mb-8 sm:mb-12 lg:mb-16">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-3 sm:mb-4 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          My Skills
        </h1>
        <p class="text-sm sm:text-base lg:text-lg text-gray-600 mb-6 sm:mb-8 max-w-3xl mx-auto leading-relaxed">
          With 2.1 years of experience in web development, I've mastered a comprehensive set of technologies for building modern, scalable web applications.
        </p>

        <!-- Skills Overview Stats -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 lg:gap-6 max-w-2xl mx-auto mb-8 sm:mb-12">
          <div class="bg-white rounded-xl p-3 sm:p-4 shadow-md border border-gray-100">
            <div class="text-lg sm:text-xl lg:text-2xl font-bold text-blue-600">10+</div>
            <div class="text-xs sm:text-sm text-gray-500">Frontend Skills</div>
          </div>
          <div class="bg-white rounded-xl p-3 sm:p-4 shadow-md border border-gray-100">
            <div class="text-lg sm:text-xl lg:text-2xl font-bold text-green-600">8+</div>
            <div class="text-xs sm:text-sm text-gray-500">Backend Skills</div>
          </div>
          <div class="bg-white rounded-xl p-3 sm:p-4 shadow-md border border-gray-100">
            <div class="text-lg sm:text-xl lg:text-2xl font-bold text-purple-600">5+</div>
            <div class="text-xs sm:text-sm text-gray-500">Databases</div>
          </div>
          <div class="bg-white rounded-xl p-3 sm:p-4 shadow-md border border-gray-100">
            <div class="text-lg sm:text-xl lg:text-2xl font-bold text-orange-600">2.1+</div>
            <div class="text-xs sm:text-sm text-gray-500">Years Exp</div>
          </div>
        </div>
      </div>

      <!-- Skills Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mb-12 sm:mb-16 lg:mb-20">
        <div
          v-for="(category, index) in skills"
          :key="index"
          class="group bg-white shadow-md hover:shadow-xl rounded-xl sm:rounded-2xl p-4 sm:p-6 lg:p-8 transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 hover:border-blue-200"
        >
          <!-- Category Header -->
          <div class="flex items-center mb-4 sm:mb-6">
            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg sm:rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center mr-3 sm:mr-4 group-hover:scale-110 transition-transform duration-300">
              <i :class="category.icon" class="text-white text-sm sm:text-base lg:text-lg"></i>
            </div>
            <div>
              <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-200">
                {{ category.category }}
              </h3>
              <p class="text-xs sm:text-sm text-gray-500">{{ category.items.length }} Skills</p>
            </div>
          </div>

          <!-- Skills List -->
          <div class="space-y-2 sm:space-y-3">
            <div
              v-for="(skill, i) in category.items"
              :key="i"
              class="group\/skill flex items-center justify-between p-2 sm:p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200"
            >
              <div class="flex items-center">
                <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-gradient-to-r from-blue-100 to-purple-100 flex items-center justify-center mr-2 sm:mr-3 group-hover\/skill:scale-110 transition-transform duration-200">
                  <div class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-500"></div>
                </div>
                <span class="text-sm sm:text-base font-medium text-gray-800 group-hover\/skill:text-blue-600 transition-colors duration-200">
                  {{ skill.name }}
                </span>
              </div>

              <!-- Skill Level Indicator (Visual Only) -->
              <div class="flex items-center">
                <div class="flex space-x-1">
                  <div
                    v-for="level in 5"
                    :key="level"
                    class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full transition-colors duration-200"
                    :class="level <= getSkillLevel(skill.level)
                      ? 'bg-gradient-to-r from-blue-500 to-purple-500'
                      : 'bg-gray-200'"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Key Achievements Section -->
      <div class="bg-white rounded-xl sm:rounded-2xl lg:rounded-3xl shadow-lg p-6 sm:p-8 lg:p-12 border border-gray-100">
        <div class="text-center mb-8 sm:mb-10 lg:mb-12">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-3 sm:mb-4">
            Key Achievements
          </h2>
          <p class="text-sm sm:text-base lg:text-lg text-gray-600 max-w-2xl mx-auto">
            Highlights of my professional journey and technical accomplishments
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
          <div
            v-for="(achievement, index) in achievements"
            :key="index"
            class="group relative p-4 sm:p-6 lg:p-8 rounded-xl sm:rounded-2xl bg-gradient-to-br from-gray-50 to-white border-l-4 transition-all duration-300 hover:shadow-lg hover:scale-105"
            :class="achievement.borderColor"
          >
            <!-- Achievement Icon -->
            <div class="flex items-start">
              <div class="flex-shrink-0 mr-4">
                <div
                  class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg flex items-center justify-center text-white text-lg sm:text-xl group-hover:scale-110 transition-transform duration-300"
                  :class="achievement.iconBg"
                >
                  <i :class="achievement.icon"></i>
                </div>
              </div>

              <div class="flex-1 min-w-0">
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 sm:mb-3 group-hover:text-blue-600 transition-colors duration-200">
                  {{ achievement.title }}
                </h3>
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                  {{ achievement.description }}
                </p>
              </div>
            </div>

            <!-- Subtle Background Pattern -->
            <div class="absolute top-0 right-0 w-20 h-20 opacity-5 overflow-hidden">
              <i :class="achievement.icon" class="text-6xl transform rotate-12 translate-x-4 -translate-y-4"></i>
            </div>
          </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-8 sm:mt-12 lg:mt-16 text-center">
          <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl sm:rounded-2xl p-6 sm:p-8 lg:p-10 border border-blue-100">
            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800 mb-3 sm:mb-4">
              Ready to Work Together?
            </h3>
            <p class="text-sm sm:text-base lg:text-lg text-gray-600 mb-6 sm:mb-8 max-w-2xl mx-auto">
              Let's discuss how my skills can help bring your project to life with modern web technologies.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center max-w-md mx-auto">
              <router-link
                to="/contact"
                class="w-full sm:w-auto inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base"
              >
                <i class="fas fa-envelope mr-2"></i>
                Get In Touch
              </router-link>
              <router-link
                to="/projects"
                class="w-full sm:w-auto inline-flex items-center justify-center border-2 border-blue-600 text-blue-600 px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-blue-50 transition-all duration-200 transform hover:scale-105 font-semibold text-sm sm:text-base"
              >
                <i class="fas fa-code mr-2"></i>
                View My Work
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const skills = [
  {
    category: 'Frontend Development',
    icon: 'fas fa-laptop-code',
    items: [
      { name: 'HTML5', level: 'Expert' },
      { name: 'Vue.js', level: 'Advanced' },
      { name: 'JavaScript', level: 'Advanced' },
      { name: 'Alpine.js', level: 'Intermediate' },
      { name: 'CSS3', level: 'Advanced' },
      { name: 'Tailwind CSS', level: 'Advanced' },
      { name: 'Bootstrap', level: 'Advanced' },
      { name: 'Responsive Design', level: 'Expert' },
    ],
  },
  {
    category: 'Backend Development',
    icon: 'fas fa-server',
    items: [
      { name: 'PHP', level: 'Advanced' },
      { name: 'Laravel', level: 'Advanced' },
      { name: 'Livewire', level: 'Intermediate' },
      { name: 'RESTful APIs', level: 'Advanced' },
      { name: 'OOP', level: 'Advanced' },
      { name: 'MVC Architecture', level: 'Advanced' },
    ],
  },
  {
    category: 'Database & Storage',
    icon: 'fas fa-database',
    items: [
      { name: 'MySQL', level: 'Advanced' },
      { name: 'MongoDB', level: 'Intermediate' },
      { name: 'Database Design', level: 'Advanced' },
      { name: 'Query Optimization', level: 'Intermediate' },
    ],
  },
  {
    category: 'Design & Tools',
    icon: 'fas fa-paint-brush',
    items: [
      { name: 'Figma', level: 'Intermediate' },
      { name: 'UI/UX Design', level: 'Intermediate' },
      { name: 'SEO Optimization', level: 'Intermediate' },
      { name: 'Adobe Creative Suite', level: 'Beginner' },
    ],
  },
  {
    category: 'Development Tools',
    icon: 'fas fa-tools',
    items: [
      { name: 'Git & GitHub', level: 'Advanced' },
      { name: 'VS Code', level: 'Expert' },
      { name: 'API Integration', level: 'Advanced' },
      { name: 'Testing & Debugging', level: 'Advanced' },
      { name: 'Performance Optimization', level: 'Intermediate' },
    ],
  },
  {
    category: 'Specializations',
    icon: 'fas fa-star',
    items: [
      { name: 'Full-Stack Development', level: 'Advanced' },
      { name: 'Real-time Applications', level: 'Intermediate' },
      { name: 'Mobile-First Design', level: 'Advanced' },
      { name: 'E-commerce Solutions', level: 'Intermediate' },
      { name: 'IoT Applications', level: 'Intermediate' },
    ],
  },
];

const achievements = [
  {
    title: 'Project Success',
    description: 'Successfully developed 7+ projects that streamlined processes and enhanced user experiences across various industries.',
    icon: 'fas fa-rocket',
    iconBg: 'bg-gradient-to-r from-blue-500 to-blue-600',
    borderColor: 'border-blue-500',
  },
  {
    title: 'International Collaboration',
    description: 'Collaborated with international teams and freelancers on complex full-stack web development projects.',
    icon: 'fas fa-globe',
    iconBg: 'bg-gradient-to-r from-green-500 to-green-600',
    borderColor: 'border-green-500',
  },
  {
    title: 'API Development',
    description: 'Developed robust and scalable RESTful APIs that handle high traffic and complex business logic efficiently.',
    icon: 'fas fa-cogs',
    iconBg: 'bg-gradient-to-r from-purple-500 to-purple-600',
    borderColor: 'border-purple-500',
  },
  {
    title: 'Full-Stack Expertise',
    description: 'Demonstrated strong expertise in both frontend and backend technologies with modern development practices.',
    icon: 'fas fa-code',
    iconBg: 'bg-gradient-to-r from-orange-500 to-orange-600',
    borderColor: 'border-orange-500',
  },
];

// Helper function to convert skill level to numeric value
const getSkillLevel = (level) => {
  const levels = {
    'Beginner': 2,
    'Intermediate': 3,
    'Advanced': 4,
    'Expert': 5
  };
  return levels[level] || 0;
};
</script>

<style scoped>
/* Custom scrollbar for mobile */
::-webkit-scrollbar {
  width: 4px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
  border-radius: 2px;
}

/* Smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* Enhanced hover effects */
.group:hover .group-hover\:scale-110 {
  transform: scale(1.1);
}

.group\/skill:hover .group-hover\/skill\:scale-110 {
  transform: scale(1.1);
}

/* Loading animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.group {
  animation: fadeInUp 0.6s ease-out forwards;
}

.group:nth-child(1) { animation-delay: 0.1s; }
.group:nth-child(2) { animation-delay: 0.2s; }
.group:nth-child(3) { animation-delay: 0.3s; }
.group:nth-child(4) { animation-delay: 0.4s; }
.group:nth-child(5) { animation-delay: 0.5s; }
.group:nth-child(6) { animation-delay: 0.6s; }

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}

/* Focus styles for better accessibility */
a:focus-visible,
button:focus-visible {
  outline: 2px solid #3b82f6;
  outline-offset: 2px;
}

/* Ensure proper touch targets on mobile */
@media (max-width: 768px) {
  a, button {
    min-height: 44px;
    min-width: 44px;
  }

  /* Optimize spacing for small screens */
  .group\/skill {
    padding: 0.5rem;
  }
}

/* Tablet optimizations */
@media (min-width: 640px) and (max-width: 1024px) {
  .sm\:grid-cols-2 {
    gap: 1.5rem;
  }
}

/* High DPI displays */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  .border {
    border-width: 0.5px;
  }
}

/* Print styles */
@media print {
  .shadow-lg,
  .shadow-xl,
  .shadow-md {
    box-shadow: none !important;
    border: 1px solid #e5e7eb;
  }

  .bg-gradient-to-r {
    background: #3b82f6 !important;
    color: white !important;
  }
}
</style>
