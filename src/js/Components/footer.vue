<template>
  <footer class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-12">

        <!-- About Section -->
        <div class="lg:col-span-2">
          <div class="flex items-center mb-4">
            <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center mr-3">
              <span class="text-white font-bold text-lg">AA</span>
            </div>
            <h3 class="text-2xl font-bold">Adil Ali</h3>
          </div>
          <p class="text-gray-300 mb-6 leading-relaxed">
            Full Stack Web Developer with 2.1+ years of experience creating dynamic and user-friendly web applications.
            Specializing in Vue.js, Laravel, and modern web technologies to deliver scalable solutions.
          </p>

          <!-- Tech Stack Icons -->
          <div class="mb-6">
            <h4 class="text-lg font-semibold mb-3">Technology Stack</h4>
            <div class="flex flex-wrap gap-4">
              <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                <span class="w-4 h-4 bg-green-500 rounded"></span>
                <span class="text-sm">Vue.js</span>
              </div>
              <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                <span class="w-4 h-4 bg-red-500 rounded"></span>
                <span class="text-sm">Laravel</span>
              </div>
              <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                <span class="w-4 h-4 bg-cyan-500 rounded"></span>
                <span class="text-sm">Tailwind</span>
              </div>
              <div class="flex items-center space-x-2 bg-gray-800 px-3 py-2 rounded-lg">
                <span class="w-4 h-4 bg-blue-500 rounded"></span>
                <span class="text-sm">MySQL</span>
              </div>
            </div>
          </div>

          <!-- Social Links -->
          <div class="flex space-x-4">
            <a href="https://www.linkedin.com/in/" target="_blank"
               class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition">
              <span class="text-sm">💼</span>
            </a>
            <a href="mailto:adilalibhatti05@gmail.com"
               class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition">
              <span class="text-sm">📧</span>
            </a>
            <a href="tel:03054365536"
               class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-green-600 transition">
              <span class="text-sm">📞</span>
            </a>
            <a href="https://adilali.vercel.app/" target="_blank"
               class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-indigo-600 transition">
              <span class="text-sm">🌐</span>
            </a>
          </div>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-xl font-semibold mb-6">Services</h3>
          <ul class="space-y-3 text-gray-300">
            <li class="hover:text-indigo-400 transition cursor-pointer">Full-Stack Development</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">Vue.js Frontend</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">Laravel Backend</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">RESTful APIs</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">Database Design</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">Real-time Applications</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">IoT Solutions</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">Mobile App Development</li>
            <li class="hover:text-indigo-400 transition cursor-pointer">SEO Optimization</li>
          </ul>
        </div>

        <!-- Featured Projects -->
        <div>
          <h3 class="text-xl font-semibold mb-6">Featured Projects</h3>
          <div class="space-y-4">
            <div class="border-l-4 border-indigo-600 pl-4">
              <h4 class="font-medium text-white">Gulf Cars4u</h4>
              <p class="text-sm text-gray-400">Car trading platform with Vue.js & Laravel</p>
            </div>
            <div class="border-l-4 border-green-600 pl-4">
              <h4 class="font-medium text-white">HOLOIN</h4>
              <p class="text-sm text-gray-400">IoT platform for sensor solutions</p>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
              <h4 class="font-medium text-white">Weqayah</h4>
              <p class="text-sm text-gray-400">Fire safety monitoring system</p>
            </div>
            <div class="border-l-4 border-purple-600 pl-4">
              <h4 class="font-medium text-white">FXBOT</h4>
              <p class="text-sm text-gray-400">AI-powered trading systems</p>
            </div>
          </div>

          <router-link to="/projects"
                       class="inline-block mt-4 text-indigo-400 hover:text-indigo-300 transition">
            View All Projects →
          </router-link>
        </div>
      </div>

      <!-- Quick Navigation -->
      <div class="border-t border-gray-800 mt-12 pt-8">
        <div class="grid md:grid-cols-4 gap-8">
          <div>
            <h4 class="font-semibold mb-4">Navigation</h4>
            <ul class="space-y-2 text-gray-300">
              <li><router-link to="/" class="hover:text-indigo-400 transition">Home</router-link></li>
              <li><router-link to="/about" class="hover:text-indigo-400 transition">About</router-link></li>
              <li><router-link to="/projects" class="hover:text-indigo-400 transition">Projects</router-link></li>
              <li><router-link to="/experience" class="hover:text-indigo-400 transition">Experience</router-link></li>
              <li><router-link to="/skills" class="hover:text-indigo-400 transition">Skills</router-link></li>
              <li><router-link to="/blog" class="hover:text-indigo-400 transition">Blog</router-link></li>
              <li><router-link to="/contact" class="hover:text-indigo-400 transition">Contact</router-link></li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold mb-4">Experience</h4>
            <ul class="space-y-2 text-gray-300 text-sm">
              <li>📍 Freelance Collaboration (2025 - Present)</li>
              <li>📍 Chirp Technologies (Apr 2025 - Jun 2025)</li>
              <li>📍 Intelliage Solutions (Aug 2023 - Mar 2025)</li>
              <li class="text-indigo-400">2.1+ Years Experience</li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold mb-4">Contact Info</h4>
            <ul class="space-y-2 text-gray-300 text-sm">
              <li class="flex items-center">
                <span class="w-4 text-center mr-2">📞</span>
                <a href="tel:03054365536" class="hover:text-indigo-400 transition">03054365536</a>
              </li>
              <li class="flex items-center">
                <span class="w-4 text-center mr-2">📧</span>
                <a href="mailto:adilalibhatti05@gmail.com" class="hover:text-indigo-400 transition">adilalibhatti05@gmail.com</a>
              </li>
              <li class="flex items-center">
                <span class="w-4 text-center mr-2">📍</span>
                <span>Lahore, Punjab, Pakistan</span>
              </li>
              <li class="flex items-center">
                <span class="w-4 text-center mr-2">🌐</span>
                <a href="https://adilali.vercel.app/" target="_blank" class="hover:text-indigo-400 transition">Portfolio</a>
              </li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold mb-4">Let's Work Together</h4>
            <p class="text-gray-300 text-sm mb-4">Ready to start your project?</p>
            <div class="space-y-3">
              <router-link to="/contact"
                           class="block w-full text-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Hire Me
              </router-link>
              <a href="tel:03054365536"
                 class="block w-full text-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                Call Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-gray-950 py-6">
      <div class="max-w-7xl mx-auto px-6">
        <div class="md:flex md:items-center md:justify-between">
          <div class="text-center md:text-left">
            <p class="text-gray-400 text-sm">
              © {{ new Date().getFullYear() }} Adil Ali. All rights reserved.
            </p>
            <p class="text-gray-500 text-xs mt-1">
              Full Stack Web Developer | Vue.js • Laravel • Tailwind CSS
            </p>
          </div>

          <div class="mt-4 md:mt-0 flex justify-center md:justify-end space-x-6 text-xs text-gray-400">
            <span class="flex items-center">
              <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
              Available for projects
            </span>
            <span>Based in Pakistan</span>
            <span>Remote work preferred</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
// Component logic can be added here if needed
</script>
