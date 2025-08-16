<template>
  <nav-component />
  <hr class="m-0">

  <!-- Toast Notification -->
  <div
    v-if="showToast"
    :class="[
      'fixed top-4 right-4 z-50 max-w-sm p-4 rounded-lg shadow-lg transition-all duration-300 transform',
      toastType === 'success' ? 'bg-green-100 border border-green-400 text-green-700' : 'bg-red-100 border border-red-400 text-red-700'
    ]"
  >
    <div class="flex items-start">
      <div class="flex-1">
        <p class="text-sm font-medium">{{ toastMessage }}</p>
      </div>
      <button
        @click="showToast = false"
        class="ml-2 text-gray-400 hover:text-gray-600"
      >
        ✕
      </button>
    </div>
  </div>

  <section class="min-h-screen bg-white py-16 px-6 lg:px-16">
    <div class="max-w-6xl mx-auto">
      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Contact Information -->
        <div>
          <h2 class="text-4xl font-bold text-gray-800 mb-4 border-b-4 border-blue-600 inline-block pb-2">
            Get In Touch
          </h2>
          <p class="text-gray-600 mb-8">
            I'm a Full Stack Web Developer with 2.1 years of experience ready to help bring your web development projects to life. Let's discuss how I can help you build amazing web applications using modern technologies like Vue.js, Laravel, and Tailwind CSS.
          </p>

          <!-- Contact Details -->
          <div class="space-y-6 mb-8">
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <span class="text-blue-600 text-xl">📞</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800">Phone</h3>
                <a href="tel:03054365536" class="text-blue-600 hover:underline">03054365536</a>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <span class="text-blue-600 text-xl">📧</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800">Email</h3>
                <a href="mailto:adilalibhatti05@gmail.com" class="text-blue-600 hover:underline">adilalibhatti05@gmail.com</a>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <span class="text-blue-600 text-xl">🌐</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800">Portfolio</h3>
                <a href="https://adilali.vercel.app/" target="_blank" class="text-blue-600 hover:underline">https://adilali.vercel.app/</a>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <span class="text-blue-600 text-xl">💼</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800">LinkedIn</h3>
                <a href="https://www.linkedin.com/in/" target="_blank" class="text-blue-600 hover:underline">Connect with me</a>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <span class="text-blue-600 text-xl">📍</span>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800">Location</h3>
                <p class="text-gray-600">Lahore, Punjab, Pakistan</p>
              </div>
            </div>
          </div>

          <!-- Services I Offer -->
          <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Services I Offer</h3>
            <ul class="space-y-2 text-gray-600">
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Full-Stack Web Development (Vue.js + Laravel)</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>RESTful API Development & Integration</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Dynamic Frontend Solutions with Vue.js</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Responsive Web Design (Tailwind CSS, Bootstrap)</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Database Design & Management (MySQL, MongoDB)</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Real-time Applications & Chatbots</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>IoT Web Solutions & Sensor Integration</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>Mobile App Development</span>
              </li>
              <li class="flex items-center space-x-2">
                <span class="text-green-600">✓</span>
                <span>SEO Optimization & Website Analytics</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Contact Form -->
        <div>
          <div class="bg-gray-50 rounded-2xl p-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Send Me a Message</h3>
            <p class="text-gray-600 mb-6">
              Ready to start your project? Fill out the form below and I'll get back to you within 24 hours.
            </p>

            <form @submit.prevent="handleSubmit" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-700">Name *</label>
                  <input
                    v-model="form.name"
                    type="text"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="Your full name"
                  />
                </div>

                <div>
                  <label class="block mb-2 text-sm font-medium text-gray-700">Email *</label>
                  <input
                    v-model="form.email"
                    type="email"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="your.email@example.com"
                  />
                </div>
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Phone</label>
                <input
                  v-model="form.phone"
                  type="tel"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                  placeholder="Your phone number"
                />
              </div>

              <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Project Type</label>
                <select
                  v-model="form.projectType"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
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
                <label class="block mb-2 text-sm font-medium text-gray-700">Budget Range</label>
                <select
                  v-model="form.budget"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
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
                <label class="block mb-2 text-sm font-medium text-gray-700">Project Details *</label>
                <textarea
                  v-model="form.message"
                  rows="5"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition"
                  placeholder="Describe your project requirements, timeline, and any specific technologies you'd like to use..."
                ></textarea>
              </div>

              <div>
                <button
                  type="submit"
                  :disabled="isSubmitting"
                  :class="[
                    'w-full font-semibold py-3 px-6 rounded-lg transition flex items-center justify-center space-x-2',
                    isSubmitting
                      ? 'bg-gray-400 cursor-not-allowed text-white'
                      : 'bg-blue-600 text-white hover:bg-blue-700'
                  ]"
                >
                  <span v-if="isSubmitting">
                    <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                  </span>
                  <span v-else>
                    <span>Send Message</span>
                    <span>🚀</span>
                  </span>
                </button>
              </div>
            </form>

            <div class="mt-6 text-center">
              <p class="text-sm text-gray-500">
                Prefer direct contact? Call me at
                <a href="tel:03054365536" class="text-blue-600 hover:underline font-medium">03054365536</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

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
const toastType = ref('success'); // 'success' or 'error'

const showToastMessage = (message, type = 'success') => {
  toastMessage.value = message;
  toastType.value = type;
  showToast.value = true;

  // Hide toast after 4 seconds
  setTimeout(() => {
    showToast.value = false;
  }, 4000);
};

const handleSubmit = async () => {
  if (isSubmitting.value) return; // Prevent double submission

  isSubmitting.value = true;

  try {
    // Using your Formspree endpoint
    const response = await fetch('https://formspree.io/f/mldlkddb', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
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

      // Reset form
      form.value = {
        name: '',
        email: '',
        phone: '',
        projectType: '',
        budget: '',
        message: '',
      };
    } else {
      throw new Error('Form submission failed');
    }
  } catch (error) {
    console.error('Error:', error);

    showToastMessage('❌ Failed to send message. Redirecting to email client...', 'error');

    // Wait a moment then open email client
    setTimeout(() => {
      const subject = encodeURIComponent(`New Project Inquiry - ${form.value.projectType || 'General'}`);
      const body = encodeURIComponent(`
Name: ${form.value.name}
Email: ${form.value.email}
Phone: ${form.value.phone}
Project Type: ${form.value.projectType}
Budget: ${form.value.budget}

Message:
${form.value.message}
      `);

      const mailtoLink = `mailto:adilalibhatti05@gmail.com?subject=${subject}&body=${body}`;
      window.location.href = mailtoLink;
    }, 2000);
  } finally {
    isSubmitting.value = false;
  }
};
</script>
