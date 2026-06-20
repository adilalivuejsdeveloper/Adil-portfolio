<template>
  <nav-component />
  <hr class="m-0 dark:border-gray-800">

  <!-- Toast Notification -->
  <div
    v-if="showToast"
    :class="[
      'fixed top-20 right-4 z-50 max-w-sm p-4 rounded-xl shadow-xl transition-all duration-300 transform border',
      toastType === 'success'
        ? 'bg-green-50 dark:bg-green-900/40 border-green-400 dark:border-green-600 text-green-700 dark:text-green-300'
        : 'bg-red-50 dark:bg-red-900/40 border-red-400 dark:border-red-600 text-red-700 dark:text-red-300'
    ]"
  >
    <div class="flex items-start">
      <div class="flex-1">
        <p class="text-sm font-medium">{{ toastMessage }}</p>
      </div>
      <button @click="showToast = false" class="ml-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors">✕</button>
    </div>
  </div>

  <section class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300 py-12 px-4 sm:px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">

      <!-- Page Header -->
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
          <span>💬</span>
          <span>Let's Chat</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-4">Get In Touch</h1>
        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto text-lg">
          I'm a Full Stack Web Developer with 2.8 years of experience ready to help bring your web development projects to life.
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Contact Information -->
        <div>
          <div class="space-y-5 mb-8">
            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 dark:text-blue-400 text-xl">📞</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 dark:text-white text-sm">Phone</h3>
                <a href="tel:03054365536" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">03054365536</a>
              </div>
            </div>

            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 dark:text-blue-400 text-xl">📧</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 dark:text-white text-sm">Email</h3>
                <a href="mailto:adilalibhatti05@gmail.com" class="text-blue-600 dark:text-blue-400 hover:underline font-medium break-all">adilalibhatti05@gmail.com</a>
              </div>
            </div>

            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 dark:text-blue-400 text-xl">🌐</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 dark:text-white text-sm">Portfolio</h3>
                <a href="https://adilali.vercel.app/" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">https://adilali.vercel.app/</a>
              </div>
            </div>

            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 dark:text-blue-400 text-xl">💼</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 dark:text-white text-sm">LinkedIn</h3>
                <a href="https://www.linkedin.com/in/" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">Connect with me</a>
              </div>
            </div>

            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
              <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/40 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 dark:text-blue-400 text-xl">📍</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 dark:text-white text-sm">Location</h3>
                <p class="text-gray-600 dark:text-gray-300 font-medium">Lahore, Punjab, Pakistan</p>
              </div>
            </div>
          </div>

          <!-- Services I Offer -->
          <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Services I Offer</h3>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300">
              <li v-for="service in services" :key="service" class="flex items-center space-x-2">
                <span class="text-green-500 dark:text-green-400 font-bold">✓</span>
                <span>{{ service }}</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Contact Form -->
        <div>
          <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-100 dark:border-gray-700 shadow-sm">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Send Me a Message</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
              Ready to start your project? Fill out the form below and I'll get back to you within 24 hours.
            </p>

            <form @submit.prevent="handleSubmit" class="space-y-5">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Name *</label>
                  <input
                    v-model="form.name"
                    type="text"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200"
                    placeholder="Your full name"
                  />
                </div>
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email *</label>
                  <input
                    v-model="form.email"
                    type="email"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200"
                    placeholder="your.email@example.com"
                  />
                </div>
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                <input
                  v-model="form.phone"
                  type="tel"
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200"
                  placeholder="Your phone number"
                />
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Project Type</label>
                <select
                  v-model="form.projectType"
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200"
                >
                  <option value="">Select project type</option>
                  <option value="full-stack-web-app">Full-Stack Web Application</option>
                  <option value="frontend-development">Frontend Development</option>
                  <option value="backend-api">Backend API Development</option>
                  <option value="ecommerce">E-commerce Platform</option>
                  <option value="dashboard">Admin Dashboard</option>
                  <option value="mobile-app">Mobile App Development</option>
                  <option value="iot-solution">IoT Solution</option>
                  <option value="consulting">Consulting</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Budget Range</label>
                <select
                  v-model="form.budget"
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200"
                >
                  <option value="">Select budget range</option>
                  <option value="500-1000">$500 - $1,000</option>
                  <option value="1000-2500">$1,000 - $2,500</option>
                  <option value="2500-5000">$2,500 - $5,000</option>
                  <option value="5000-10000">$5,000 - $10,000</option>
                  <option value="10000+">$10,000+</option>
                </select>
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Project Details *</label>
                <textarea
                  v-model="form.message"
                  rows="5"
                  required
                  class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 outline-none transition-all duration-200 resize-none"
                  placeholder="Describe your project requirements, timeline, and any specific technologies you'd like to use..."
                ></textarea>
              </div>

              <div>
                <button
                  type="submit"
                  :disabled="isSubmitting"
                  :class="[
                    'w-full font-semibold py-3.5 px-6 rounded-xl transition-all duration-200 flex items-center justify-center space-x-2 shadow-lg',
                    isSubmitting
                      ? 'bg-gray-400 dark:bg-gray-600 cursor-not-allowed text-white'
                      : 'bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:from-blue-700 hover:to-purple-700 hover:shadow-xl transform hover:scale-[1.02]'
                  ]"
                >
                  <span v-if="isSubmitting">
                    <svg class="animate-spin h-5 w-5 mr-2 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                  </span>
                  <span v-else class="flex items-center gap-2">
                    <span>Send Message</span>
                    <span>🚀</span>
                  </span>
                </button>
              </div>
            </form>

            <div class="mt-6 text-center">
              <p class="text-sm text-gray-500 dark:text-gray-400">
                Prefer direct contact? Call me at
                <a href="tel:03054365536" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">03054365536</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer-component />
</template>

<script setup>
import { ref } from 'vue';

const services = [
  'Full-Stack Web Development (Vue.js + Laravel)',
  'RESTful API Development & Integration',
  'Dynamic Frontend Solutions with Vue.js',
  'Responsive Web Design (Tailwind CSS, Bootstrap)',
  'Database Design & Management (MySQL, MongoDB)',
  'Real-time Applications & Chatbots',
  'IoT Web Solutions & Sensor Integration',
  'Mobile App Development',
  'SEO Optimization & Website Analytics',
];

const form = ref({
  name: '',
  email: '',
  phone: '',
  projectType: '',
  budget: '',
  message: '',
});

const isSubmitting = ref(false);
const showToast = ref(false);
const toastMessage = ref('');
const toastType = ref('success');

const showToastMessage = (message, type = 'success') => {
  toastMessage.value = message;
  toastType.value = type;
  showToast.value = true;
  setTimeout(() => { showToast.value = false; }, 4000);
};

const handleSubmit = async () => {
  if (isSubmitting.value) return;
  isSubmitting.value = true;
  try {
    const response = await fetch('https://formspree.io/f/mldlkddb', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        name: form.value.name,
        email: form.value.email,
        phone: form.value.phone,
        projectType: form.value.projectType,
        budget: form.value.budget,
        message: form.value.message,
        _replyto: form.value.email
      })
    });

    if (response.ok) {
      showToastMessage('✅ Message sent successfully! I\'ll get back to you within 24 hours.', 'success');
      form.value = { name: '', email: '', phone: '', projectType: '', budget: '', message: '' };
    } else {
      throw new Error('Form submission failed');
    }
  } catch (error) {
    console.error('Error:', error);
    showToastMessage('❌ Failed to send message. Redirecting to email client...', 'error');
    setTimeout(() => {
      const subject = encodeURIComponent(`New Project Inquiry - ${form.value.projectType || 'General'}`);
      const body = encodeURIComponent(`Name: ${form.value.name}\nEmail: ${form.value.email}\nPhone: ${form.value.phone}\nProject Type: ${form.value.projectType}\nBudget: ${form.value.budget}\n\nMessage:\n${form.value.message}`);
      window.location.href = `mailto:adilalibhatti05@gmail.com?subject=${subject}&body=${body}`;
    }, 2000);
  } finally {
    isSubmitting.value = false;
  }
};
</script>
