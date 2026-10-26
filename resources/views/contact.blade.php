<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Beryl Christopher Robert</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Tandai JS aktif lebih awal, supaya animasi scroll tidak "berkedip" --}}
    <script>document.documentElement.classList.add('js');</script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-white text-ink antialiased">

    {{-- ===== NAVBAR ===== --}}
    <nav class="sticky top-0 z-50 border-b border-navy/10 bg-white" aria-label="Main navigation">
        <div class="wrap flex min-h-[68px] items-center justify-end py-2 lg:justify-center">

            {{-- Menu desktop --}}
            <div class="hidden gap-0.5 rounded-full border border-navy/10 bg-soft p-1 lg:flex">
                <a href="/"
                   class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-[18px] py-1.5 text-[0.83rem] font-medium transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-house-fill"></i> Home
                </a>
                <a href="/blog"
                   class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-[18px] py-1.5 text-[0.83rem] font-medium transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-journal-text"></i> Blog
                </a>
                <a href="/about"
                   class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-[18px] py-1.5 text-[0.83rem] font-medium transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-person-fill"></i> About
                </a>
                <a href="/contact" aria-current="page"
                   class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-[18px] py-1.5 text-[0.83rem] font-medium transition duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand bg-brand text-white">
                    <i class="bi bi-envelope-fill"></i> Contact
                </a>
            </div>

            {{-- Tombol hamburger (HP) --}}
            <button type="button" id="menuToggle" aria-controls="mobileMenu" aria-expanded="false"
                    class="cursor-pointer rounded-lg border border-navy/10 bg-soft px-2.5 py-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand lg:hidden">
                <span class="sr-only">Toggle main menu</span>
                <i class="bi bi-list text-2xl" id="menuIcon" aria-hidden="true"></i>
            </button>
        </div>

        {{-- Menu HP --}}
        <div id="mobileMenu" class="hidden border-t border-navy/10 lg:hidden">
            <div class="wrap flex flex-col gap-1 py-2">
                <a href="/"
                   class="flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium transition duration-300 text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-house-fill"></i> Home
                </a>
                <a href="/blog"
                   class="flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium transition duration-300 text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-journal-text"></i> Blog
                </a>
                <a href="/about"
                   class="flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium transition duration-300 text-muted hover:bg-brand/10 hover:text-brand">
                    <i class="bi bi-person-fill"></i> About
                </a>
                <a href="/contact" aria-current="page"
                   class="flex items-center gap-2 rounded-lg px-4 py-2.5 text-sm font-medium transition duration-300 bg-brand text-white">
                    <i class="bi bi-envelope-fill"></i> Contact
                </a>
            </div>
        </div>
    </nav>

    {{-- ===== ISI HALAMAN ===== --}}
    <main class="flex-1">
        <section class="hero-grid relative overflow-hidden pb-14 pt-20 max-sm:pb-8 max-sm:pt-12">
            <div class="wrap">
                <div class="eyebrow eyebrow-light rise">Get in Touch</div>

                <h1 class="rise rise-1 text-[clamp(2.5rem,5vw,4rem)] text-white">Can't wait to hear<br><span class="text-lime">from You!</span></h1>

                <p class="rise rise-2 mt-6 max-w-xl leading-relaxed text-white/65">Fill out the form below and I'll get back to you as soon as possible. I'm always open to new opportunities and collaborations.</p>
            </div>
        </section>

        <section class="py-16">
            <div class="wrap">
                <div class="grid gap-12 lg:grid-cols-12">

                    {{-- Form --}}
                    <div class="reveal lg:col-span-7">

                        <div id="formSuccess" class="mb-6 hidden items-center gap-2.5 rounded-lg border-[1.5px] border-green-700/40 bg-lime/15 px-4 py-3.5 text-sm font-semibold text-green-800" role="status">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Message sent successfully! I'll get back to you within 24 hours.</span>
                        </div>
                        <div id="formError" class="mb-6 hidden items-center gap-2.5 rounded-lg border-[1.5px] border-red-400/40 bg-red-500/10 px-4 py-3.5 text-sm font-semibold text-red-700" role="alert">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <span>Please fill in all fields correctly before submitting.</span>
                        </div>

                        {{-- Catatan: form ini baru divalidasi di browser, belum mengirim email / menyimpan ke database. --}}
                        <form id="contactForm" novalidate class="flex flex-col gap-6">
                            <div>
                                <label for="contactName" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Full Name</label>
                                <input type="text" id="contactName" class="field" data-rule="name" placeholder="ex: Subianto" autocomplete="off">
                                <p data-error class="mt-1.5 hidden text-[0.8rem] text-red-500">Please enter a valid name (minimum 2 characters).</p>
                            </div>

                            <div>
                                <label for="contactEmail" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Email Address</label>
                                <input type="email" id="contactEmail" class="field" data-rule="email" placeholder="ex: subianto@example.com" autocomplete="off">
                                <p data-error class="mt-1.5 hidden text-[0.8rem] text-red-500">Please enter a valid email address.</p>
                            </div>

                            <div>
                                <label for="contactMessage" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Message</label>
                                <textarea id="contactMessage" rows="6" class="field" data-rule="message" placeholder="Tell me about your message"></textarea>
                                <p data-error class="mt-1.5 hidden text-[0.8rem] text-red-500">Message must be at least 10 characters.</p>
                            </div>

                            <button type="submit" class="btn btn-primary w-full p-4">
                                <i class="bi bi-send-fill"></i> Send Message
                            </button>
                        </form>
                    </div>

                    {{-- Kartu info --}}
                    <aside class="reveal lg:col-span-5" style="transition-delay: 100ms">
                        <div class="rounded-2xl bg-brand p-8 text-white">
                            <div class="mb-2 font-display text-[1.3rem] font-bold">Beryl Christopher Robert</div>
                            <p class="mb-6 text-[0.88rem] leading-[1.7] text-white/65">
                                My inbox is always open. Whether you have a project in mind, a question, or just want to say
                                hi, I'd love to hear from you.
                            </p>

                            <hr class="mb-6 border-white/15">

                            <ul class="flex flex-col gap-3.5 text-[0.88rem] text-white/70">
                                @foreach ([
                                    ['bi-envelope-fill', 'Email', 'berylchristoper8@gmail.com'],
                                    ['bi-geo-alt-fill', 'Location', 'Makassar, Indonesia'],
                                    ['bi-clock-fill', 'Response Time', 'Within 24 hours'],
                                ] as $item)
                                    <li class="flex items-center gap-3">
                                        <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-white/10 text-lime">
                                            <i class="bi {{ $item[0] }}"></i>
                                        </span>
                                        <span>
                                            <span class="mb-0.5 block text-[0.72rem] uppercase tracking-[0.08em] text-white/45">{{ $item[1] }}</span>
                                            {{ $item[2] }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>

                            <hr class="my-6 border-white/15">

                            <div class="mb-4 text-[0.72rem] uppercase tracking-[0.08em] text-white/50">Find me on</div>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://github.com/BerylRobert" target="_blank" rel="noopener" class="btn btn-ghost px-4 py-2 text-[0.82rem] font-semibold">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                                <a href="https://www.instagram.com/berylchristopher_/" target="_blank" rel="noopener" class="btn btn-ghost px-4 py-2 text-[0.82rem] font-semibold">
                                    <i class="bi bi-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </section>
    </main>

    <footer class="mt-24 bg-brand py-8 px-4 md:px-8">
   <div class="wrap flex justify-between items-center flex-col md:flex-row flex-wrap gap-x-6 gap-y-8 text-center">
      
      <div class="max-md:order-1 text-[0.82rem] text-white/55 md:text-left">
         <p>© {{ date('Y') }} Beryl Christopher Robert. All rights reserved.</p>
      </div>

      <ul class="flex flex-wrap justify-center gap-4">
         <li>
            <a href="https://www.instagram.com/berylchristopher_/" target="_blank" rel="noopener"
               class="flex items-center justify-center bg-white/10 w-9 h-9 p-2 rounded-full text-white transition-all duration-300 hover:bg-lime hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-lime"
               aria-label="Instagram">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-current" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
               </svg>
            </a>
         </li>

         <li>
            <a href="https://wa.me/082261137206" target="_blank" rel="noopener"
               class="flex items-center justify-center bg-white/10 w-9 h-9 p-2 rounded-full text-white transition-all duration-300 hover:bg-lime hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-lime"
               aria-label="WhatsApp">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-current" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.245 3.481 5.231 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
               </svg>
            </a>
         </li>

         <li>
            <a href="https://github.com/BerylRobert" target="_blank" rel="noopener"
               class="flex items-center justify-center bg-white/10 w-9 h-9 p-2 rounded-full text-white transition-all duration-300 hover:bg-lime hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-lime"
               aria-label="GitHub">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-current" viewBox="0 0 438.549 438.549" aria-hidden="true">
                  <path d="M409.132 114.573q-29.41-50.392-79.798-79.8C295.736 15.166 259.057 5.365 219.271 5.365c-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8Q0 164.966 0 224.63c0 47.78 13.94 90.745 41.827 128.906q41.827 57.245 108.063 79.227c5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562q0-.855-.144-15.417a2550 2550 0 0 1-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999q-10.28-1.848-19.13-8.559c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559q-6.139-7.995-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429q-1.712-1.996-2.568-3.997-.86-2.002 1.427-3.289c1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851q8.42 5.71 13.846 14.842c4.38 7.806 9.657 13.754 15.846 17.847q9.277 6.138 18.699 6.136 9.42-.001 16.274-1.423 6.848-1.43 12.847-4.285 2.57-19.135 13.988-29.41c-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979q-5.852-18.56-5.852-42.826c0-23.035 7.52-42.637 22.557-58.817q-10.566-25.977 1.997-58.24c5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994s9.089 5.618 12.135 7.708q26.556-7.42 54.818-7.421c28.262-.001 37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979q-9.286 11.282-23.131 18.986c-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146q14.841 12.845 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995q66.244-21.98 108.068-79.226c27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049" />
               </svg>
            </a>
         </li>
      </ul>
   </div>
</footer>

</body>
</html>