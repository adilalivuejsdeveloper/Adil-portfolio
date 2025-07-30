<template>
                  <nav-component />

    <hr class="m-0">

   <section class="min-h-screen bg-white py-16 px-6 lg:px-16">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-6 border-b-4 border-blue-600 inline-block pb-2">
        Contact Me
      </h2>

      <p class="text-gray-600 mb-10">
        Have a question, project idea, or just want to say hello? Fill out the form below and I'll get back to you shortly.
      </p>

      <form @submit.prevent="handleSubmit" class="grid grid-cols-1 gap-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Name</label>
            <input
              v-model="form.name"
              type="text"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input
              v-model="form.email"
              type="email"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
            />
          </div>
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-gray-700">Subject</label>
          <input
            v-model="form.subject"
            type="text"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
          />
        </div>

        <div>
          <label class="block mb-2 text-sm font-medium text-gray-700">Message</label>
          <textarea
            v-model="form.message"
            rows="5"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
          ></textarea>
        </div>

        <div>
          <button
            type="submit"
            class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition"
          >
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const form = ref({
  name: '',
  email: '',
  subject: '',
  message: '',
});

const handleSubmit = () => {
  // You can replace this with an API call using Axios
  console.log('Form submitted:', form.value);

  // Clear form after submission (optional)
  form.value = {
    name: '',
    email: '',
    subject: '',
    message: '',
  };

  alert('Your message has been sent!');
};
</script>
