<template>
  <nav-component />

  <!-- Toast -->
  <transition
    enter-active-class="transition duration-300 ease-out"
    enter-from-class="opacity-0 translate-y-2"
    enter-to-class="opacity-100 translate-y-0"
    leave-active-class="transition duration-200 ease-in"
    leave-from-class="opacity-100"
    leave-to-class="opacity-0"
  >
    <div v-if="showToast" class="fixed right-4 top-20 z-50 max-w-sm rounded-xl border p-4 shadow-xl"
         :style="toastType === 'success'
           ? 'background: var(--surface); border-color: var(--accent);'
           : 'background: var(--surface); border-color: #ef4444;'">
      <div class="flex items-start gap-3">
        <p class="flex-1 text-sm font-medium">{{ toastMessage }}</p>
        <button @click="showToast = false" class="text-muted transition-colors hover:text-accent">✕</button>
      </div>
    </div>
  </transition>

  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
    <div class="wrap relative py-16 sm:py-20">
      <div class="max-w-2xl">
        <p class="eyebrow">Contact</p>
        <h1 class="mt-5 text-4xl font-bold tracking-tight sm:text-5xl">Let's build something</h1>
        <p class="mt-5 text-base leading-relaxed text-muted">
          Tell me about your project and I'll reply within 24 hours with honest scope, timeline, and a quote.
          Prefer a quick chat? Call or email directly.
        </p>
      </div>
    </div>
  </section>

  <section class="band section">
    <div class="wrap">
      <div class="grid gap-8 lg:grid-cols-12">
        <!-- Left: contact details -->
        <div class="lg:col-span-5">
          <div class="space-y-3">
            <a v-for="c in channels" :key="c.label" :href="c.href" :target="c.external ? '_blank' : undefined"
               :rel="c.external ? 'noopener noreferrer' : undefined"
               class="card card-hover flex items-center gap-4 p-4">
              <span class="flex size-11 items-center justify-center rounded-xl" style="background: var(--surface-2); color: var(--accent-strong);">
                <i :class="c.icon"></i>
              </span>
              <span class="min-w-0">
                <span class="mono block text-xs uppercase tracking-wider text-muted">{{ c.label }}</span>
                <span class="block truncate font-medium">{{ c.value }}</span>
              </span>
            </a>
          </div>

          <div class="card mt-6 p-6">
            <div class="flex items-center gap-2.5">
              <span class="relative flex size-2.5">
                <span class="absolute inline-flex size-full animate-ping rounded-full" style="background: var(--accent); opacity:.55;"></span>
                <span class="relative inline-flex size-2.5 rounded-full" style="background: var(--accent);"></span>
              </span>
              <span class="mono text-xs uppercase tracking-[0.16em] text-accent">Available for work</span>
            </div>
            <h3 class="mt-4 text-sm font-semibold">What I can help with</h3>
            <ul class="mt-3 space-y-2">
              <li v-for="s in services" :key="s" class="flex gap-2.5 text-sm text-muted">
                <i class="fas fa-circle-check mt-1 text-xs text-accent"></i><span>{{ s }}</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Right: form -->
        <div class="lg:col-span-7">
          <div class="card p-6 sm:p-8">
            <h2 class="text-xl font-semibold">Send a message</h2>
            <p class="mt-1 text-sm text-muted">Fields marked * are required.</p>

            <form @submit.prevent="handleSubmit" class="mt-6 space-y-5">
              <div class="grid gap-5 sm:grid-cols-2">
                <div>
                  <label class="label">Name *</label>
                  <input v-model="form.name" type="text" required class="field" placeholder="Your full name" />
                </div>
                <div>
                  <label class="label">Email *</label>
                  <input v-model="form.email" type="email" required class="field" placeholder="you@example.com" />
                </div>
              </div>

              <div class="grid gap-5 sm:grid-cols-2">
                <div>
                  <label class="label">Phone</label>
                  <input v-model="form.phone" type="tel" class="field" placeholder="Optional" />
                </div>
                <div>
                  <label class="label">Project type</label>
                  <select v-model="form.projectType" class="field">
                    <option value="">Select project type</option>
                    <option value="full-stack-web-app">Full-Stack Web Application</option>
                    <option value="frontend-development">Frontend Development</option>
                    <option value="backend-api">Backend / API Development</option>
                    <option value="ecommerce">E-commerce Platform</option>
                    <option value="dashboard">Admin Dashboard / CRM</option>
                    <option value="devops">DevOps / Deployment</option>
                    <option value="maintenance">Maintenance & Support</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <div>
                <label class="label">Budget range</label>
                <select v-model="form.budget" class="field">
                  <option value="">Select budget range</option>
                  <option value="500-1000">$500 – $1,000</option>
                  <option value="1000-2500">$1,000 – $2,500</option>
                  <option value="2500-5000">$2,500 – $5,000</option>
                  <option value="5000-10000">$5,000 – $10,000</option>
                  <option value="10000+">$10,000+</option>
                </select>
              </div>

              <div>
                <label class="label">Project details *</label>
                <textarea v-model="form.message" rows="5" required class="field resize-none"
                          placeholder="Describe your project, timeline, and any specific technologies..."></textarea>
              </div>

              <button type="submit" :disabled="isSubmitting" class="btn btn-primary w-full"
                      :class="{ 'cursor-not-allowed opacity-60': isSubmitting }">
                <span v-if="isSubmitting" class="flex items-center gap-2">
                  <svg class="size-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                  </svg>
                  Sending…
                </span>
                <span v-else class="flex items-center gap-2"><i class="fas fa-paper-plane"></i> Send message</span>
              </button>
            </form>

            <p class="mt-5 text-center text-sm text-muted">
              Prefer direct contact? Call
              <a href="tel:03054365536" class="link-accent">0305 4365536</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
import { ref } from 'vue';

const channels = [
  { label: 'Email', value: 'adilalibhatti05@gmail.com', icon: 'fas fa-envelope', href: 'mailto:adilalibhatti05@gmail.com', external: false },
  { label: 'Phone', value: '0305 4365536', icon: 'fas fa-phone', href: 'tel:03054365536', external: false },
  { label: 'Upwork', value: 'Hire me on Upwork', icon: 'fas fa-briefcase', href: 'https://www.upwork.com/freelancers/~01a835a809bc540c87?viewMode=1', external: true },
  { label: 'GitHub', value: 'adilalivuejsdeveloper', icon: 'fab fa-github', href: 'https://github.com/adilalivuejsdeveloper', external: true },
  { label: 'Location', value: 'Lahore, Punjab, Pakistan', icon: 'fas fa-location-dot', href: '#', external: false },
];

const services = [
  'Full-Stack Web Apps (Vue.js + Laravel)',
  'REST API development & integration',
  'Admin dashboards & CRM platforms',
  'DevOps: Docker, CI/CD & VPS hosting',
  'Performance optimisation & maintenance',
];

const form = ref({ name: '', email: '', phone: '', projectType: '', budget: '', message: '' });

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
        _replyto: form.value.email,
      }),
    });

    if (response.ok) {
      showToastMessage('✅ Message sent! I\'ll get back to you within 24 hours.', 'success');
      form.value = { name: '', email: '', phone: '', projectType: '', budget: '', message: '' };
    } else {
      throw new Error('Form submission failed');
    }
  } catch (error) {
    console.error('Error:', error);
    showToastMessage('❌ Couldn\'t send. Opening your email client…', 'error');
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

<style scoped>
.label {
  display: block;
  margin-bottom: 0.5rem;
  font-size: 0.8rem;
  font-weight: 500;
  color: var(--text-muted);
}
.field {
  width: 100%;
  padding: 0.7rem 0.9rem;
  border-radius: 0.75rem;
  border: 1px solid var(--border-strong);
  background: var(--ground);
  color: var(--text);
  font-size: 0.9rem;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}
.field::placeholder { color: var(--text-muted); opacity: 0.7; }
.field:focus {
  outline: none;
  border-color: var(--accent);
  box-shadow: 0 0 0 3px var(--glow);
}
</style>
