<template>
  <nav-component />

  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
    <div class="wrap relative py-16 sm:py-20">
      <div class="max-w-2xl">
        <p class="eyebrow">Career</p>
        <h1 class="mt-5 text-4xl font-bold tracking-tight sm:text-5xl">Professional experience</h1>
        <p class="mt-5 text-base leading-relaxed text-muted">
          2 years 11 months building and shipping web applications — from on-site teams to international
          remote clients. Here's the path so far.
        </p>
      </div>
    </div>
  </section>

  <section class="band section">
    <div class="wrap">
      <ol class="relative">
        <!-- vertical line -->
        <span class="absolute left-[19px] top-2 bottom-2 w-px sm:left-[27px]" style="background: var(--border);"></span>

        <li v-for="(exp, i) in experiences" :key="i" class="relative pl-14 pb-10 last:pb-0 sm:pl-20">
          <!-- node -->
          <span class="absolute left-0 top-1 flex size-10 items-center justify-center rounded-xl sm:size-14"
                style="background: var(--surface); border: 1px solid var(--border);">
            <span class="mono text-sm font-semibold text-accent">0{{ i + 1 }}</span>
          </span>

          <div class="card p-6 sm:p-7">
            <div class="flex flex-wrap items-start justify-between gap-3">
              <div>
                <h2 class="text-xl font-semibold">{{ exp.position }}</h2>
                <p class="text-accent">{{ exp.company }}</p>
              </div>
              <div class="text-right">
                <span class="tag">{{ exp.period }}</span>
                <p class="mono mt-2 text-xs text-muted">{{ exp.meta }}</p>
              </div>
            </div>
            <ul class="mt-5 space-y-2.5">
              <li v-for="(task, t) in exp.tasks" :key="t" class="flex gap-3 text-sm leading-relaxed text-muted">
                <i class="fas fa-circle-check mt-1 text-xs text-accent"></i>
                <span>{{ task }}</span>
              </li>
            </ul>
            <div class="mt-5 flex flex-wrap gap-1.5">
              <span v-for="s in exp.stack" :key="s" class="tag">{{ s }}</span>
            </div>
          </div>
        </li>
      </ol>

      <!-- CTA -->
      <div class="card mt-12 flex flex-col items-center justify-between gap-6 p-8 text-center sm:flex-row sm:text-left">
        <div>
          <h2 class="text-2xl font-bold tracking-tight">Want the full résumé?</h2>
          <p class="mt-2 text-muted">Download my CV or reach out to discuss your project.</p>
        </div>
        <div class="flex shrink-0 gap-3">
          <a href="/Adil-Ali-CV.pdf" download class="btn btn-primary"><i class="fas fa-download text-xs"></i> Download CV</a>
          <router-link to="/contact" class="btn btn-ghost">Contact</router-link>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const experiences = [
  {
    position: 'Full-Stack Developer',
    company: '4XPORTAL',
    period: 'Feb 2026 — Present',
    meta: 'Full-time · On-site · Lahore',
    tasks: [
      'Building CRM-based financial applications using Laravel and Vue.js.',
      'Developing REST APIs and implementing core business logic.',
      'Building responsive, reusable UI components.',
      'Improving system performance, code quality, and delivering scalable solutions with the team.',
    ],
    stack: ['Laravel', 'Vue.js', 'MySQL', 'REST APIs'],
  },
  {
    position: 'Laravel & Vue JS Web Developer',
    company: 'Freelance Collaboration',
    period: 'Apr 2025 — Feb 2026',
    meta: 'Full-time · Remote · Lahore',
    tasks: [
      'Collaborated with international clients on full-stack web development projects.',
      'Developed dynamic web applications using Vue.js and Laravel.',
      'Integrated APIs and implemented real-time functionality.',
      'Worked across e-commerce, IoT, and trading-system domains.',
    ],
    stack: ['Vue.js', 'Laravel', 'API Integration', 'Real-time'],
  },
  {
    position: 'Laravel & Vue JS Web Developer',
    company: 'Intelliage Solutions',
    period: 'Aug 2023 — Mar 2025',
    meta: 'Full-time · On-site · Chunian',
    tasks: [
      'Developed full-stack web applications across front-end and back-end.',
      'Built responsive interfaces using Vue.js and Tailwind CSS.',
      'Implemented server-side logic and database management with Laravel and MySQL.',
      'Collaborated with the team on a range of web development projects.',
    ],
    stack: ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL'],
  },
];
</script>
