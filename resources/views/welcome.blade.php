<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqbal Fadillah: Creative Portofolio — Informatics Student</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0a0a0c; }
        .font-heading { font-family: 'Space Grotesk', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(12px); }
        .text-gradient { background: linear-gradient(to right, #60a5fa, #a855f7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .noise { opacity: 0.04; background-image: url('https://grainy-gradients.vercel.app/noise.svg'); pointer-events: none; }
        .project-card:hover .overlay { opacity: 1; transform: translateY(0); }
        .skill-progress { transition: width 1.5s ease-in-out; }
        .logo-box { border: 1px solid rgba(255,255,255,0.1); padding: 4px 8px; border-radius: 4px; transition: all 0.3s ease; }
        .logo-box:hover { border-color: #60a5fa; background: rgba(96, 165, 250, 0.1); }
    </style>
</head>
<body class="text-slate-200 selection:bg-blue-500/30 overflow-x-hidden">

    <div class="fixed top-0 left-0 w-full h-full noise -z-10"></div>
    <div class="fixed top-[-10%] left-[-10%] w-[50%] h-[50%] bg-blue-600/10 blur-[150px] rounded-full -z-20"></div>

    <nav class="fixed top-0 w-full z-50 px-6 py-6 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="logo-box group">
                <span class="font-heading font-bold text-xl tracking-tighter text-white group-hover:text-blue-400 transition">IF</span>
            </a>
            <div class="hidden md:flex gap-10 text-[10px] font-mono tracking-[0.3em] uppercase items-center">
                <a href="#about" class="hover:text-blue-400 transition opacity-60 hover:opacity-100">About</a>
                <a href="#work" class="hover:text-blue-400 transition opacity-60 hover:opacity-100">Works</a>
                <a href="#skills" class="hover:text-blue-400 transition opacity-60 hover:opacity-100">Skills</a>
                <a href="#certs" class="hover:text-blue-400 transition opacity-60 hover:opacity-100">Certificates</a>
                <a href="#footer" class="bg-white/5 px-4 py-2 rounded-full border border-white/10 hover:bg-white hover:text-black transition-all duration-500 uppercase tracking-widest text-[9px] font-bold">Connect</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center justify-center px-6 relative">
        <div class="max-w-5xl w-full text-center">
            <span class="text-blue-500 font-mono tracking-[0.5em] uppercase text-[10px] mb-8 block">Informatics Student / Freelance</span>
            <h1 class="font-heading text-6xl md:text-[120px] font-bold text-white leading-[0.9] tracking-tighter mb-10 uppercase">
                IQBAL <br> <span class="text-gradient">FADILLAH.</span>
            </h1>
            
            <p class="text-lg md:text-xl text-slate-400 font-light max-w-2xl mx-auto mb-12 leading-relaxed">
                I am an Informatics student with an <span class="text-white border-b border-blue-500/30">interest</span> in building practical and user-friendly digital solutions, and continuously developing my skills through real projects.
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="#work" class="bg-white text-black px-10 py-4 rounded-full font-bold hover:bg-blue-600 hover:text-white transition-all duration-500">Explore Projects</a>
                <a href="#about" class="glass px-10 py-4 rounded-full font-bold border border-white/10 hover:bg-white/5 transition-all">Read My Story</a>
            </div>
        </div>
    </section>

    <section class="py-32 border-y border-white/5 bg-white/[0.01]">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-heading text-3xl md:text-6xl font-bold text-white leading-tight">
                "I enjoy turning <span class="text-blue-500 italic">ideas</span> into simple and useful <span class="text-purple-500">digital solutions</span>."
            </h2>
            <p class="text-slate-500 mt-6 font-mono text-xs tracking-widest uppercase">— Statement of Intent</p>
        </div>
    </section>

    <section id="about" class="max-w-7xl mx-auto px-6 py-32">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">

        <!-- LEFT -->
        <div>
            <h3 class="font-heading text-4xl font-bold text-white mb-8">Background.</h3>

            <p class="text-slate-400 text-lg leading-relaxed mb-6 font-light">
                Halo, saya Iqbal Fadillah, mahasiswa S1 Teknik Informatika yang memiliki ketertarikan dalam mengembangkan solusi digital yang praktis dan relevan. Berawal dari rasa ingin tahu terhadap cara kerja teknologi, saya mulai mengerjakan berbagai proyek berbasis web yang membantu saya memahami bagaimana mengubah ide menjadi produk yang dapat digunakan. Melalui proses tersebut, saya juga belajar pentingnya menghadirkan solusi yang tidak hanya berfungsi dengan baik, tetapi juga mudah dipahami dan sesuai dengan kebutuhan pengguna.
            </p>

            <div class="space-y-8 mt-12">
                <div class="flex gap-4">
                    <div class="text-blue-500 font-bold font-mono">01/</div>
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-2">Fokus Minat</h4>
                        <p class="text-slate-500 text-sm italic">
                            Saya memiliki ketertarikan dalam pengembangan aplikasi berbasis web dengan pendekatan yang terstruktur, efisien, dan berorientasi pada kemudahan penggunaan.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="text-purple-500 font-bold font-mono">02/</div>
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-wider text-sm mb-2">Tujuan Karier</h4>
                        <p class="text-slate-500 text-sm italic">
                            Saya ingin berkembang sebagai profesional yang mampu berkontribusi dalam tim dan menghasilkan solusi yang bermanfaat bagi pengguna maupun bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT (SKILLS) -->
        <div id="skills" class="glass p-10 rounded-[40px] border border-white/5">
            <h3 class="font-heading text-2xl font-bold text-white mb-10 text-center uppercase tracking-tighter">Skills & Strengths.</h3>
            
            <div class="space-y-10">

                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-widest mb-2">Web Development</h4>
                    <p class="text-slate-500 text-sm font-light">
                        Experienced in building web applications using Laravel with a focus on clean and maintainable solutions.
                    </p>
                </div>

                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-widest mb-2">UI / UX Awareness</h4>
                    <p class="text-slate-500 text-sm font-light">
                        Able to design interfaces that are simple, clear, and user-friendly.
                    </p>
                </div>

                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-widest mb-2">Problem Solving</h4>
                    <p class="text-slate-500 text-sm font-light">
                        Comfortable analyzing problems and finding practical solutions.
                    </p>
                </div>

                <div class="pt-6 flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-white/5 rounded text-[9px] font-mono border border-white/10 uppercase tracking-widest text-slate-400">Laravel</span>
                    <span class="px-3 py-1 bg-white/5 rounded text-[9px] font-mono border border-white/10 uppercase tracking-widest text-slate-400">Tailwind</span>
                    <span class="px-3 py-1 bg-white/5 rounded text-[9px] font-mono border border-white/10 uppercase tracking-widest text-slate-400">MySQL</span>
                    <span class="px-3 py-1 bg-white/5 rounded text-[9px] font-mono border border-white/10 uppercase tracking-widest text-slate-400">Figma</span>
                </div>

            </div>

            <div class="mt-12 pt-8 border-t border-white/5">
                <a href="{{ asset('CV_Iqbal_Fadillah.pdf') }}" download
                   class="group flex items-center justify-center gap-3 bg-white text-black w-full py-4 rounded-xl font-bold hover:bg-blue-600 hover:text-white transition-all duration-500">
                    DOWNLOAD CV
                </a>
            </div>
        </div>

    </div>
</section>

    <section id="work" class="max-w-7xl mx-auto px-6 py-32 border-t border-white/5">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20">
            <h2 class="font-heading text-6xl font-bold text-white tracking-tighter italic uppercase underline decoration-blue-500 decoration-2 underline-offset-8">WORKS.</h2>
            <p class="text-slate-500 font-mono text-[10px] uppercase tracking-[0.4em]">Selection of Projects</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            @foreach($projects as $project)
            <div class="group project-card">
                <div class="relative aspect-[16/10] overflow-hidden rounded-[32px] bg-slate-900 border border-white/5">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($project->image) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                    <div class="overlay absolute inset-0 bg-black/80 flex flex-col items-center justify-center gap-4 opacity-0 translate-y-10 transition-all duration-500 px-6">
                        @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" class="w-full max-w-[180px] bg-white text-black px-8 py-3 rounded-full font-bold text-xs hover:bg-blue-500 hover:text-white transition uppercase tracking-widest text-center">Live Demo</a>
                        @endif
                        
                        @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="w-full max-w-[180px] text-white border border-white/20 px-8 py-3 rounded-full font-bold text-xs hover:bg-white/10 transition uppercase tracking-widest text-center">GitHub</a>
                        @endif
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-white font-heading uppercase tracking-tight">{{ $project->name }}</h3>
                    
                    @if($project->tech_stack)
                        <div class="flex flex-wrap gap-2 mt-3">
                            @foreach($project->tech_stack as $tech)
                                <span class="px-2 py-0.5 bg-blue-500/10 border border-blue-500/20 rounded text-[9px] font-mono uppercase tracking-widest text-blue-400">
                                    #{{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <p class="text-slate-500 text-sm mt-4 font-light line-clamp-2 leading-relaxed">{{ $project->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="certs" class="max-w-7xl mx-auto px-6 py-32 border-t border-white/5">
        <h3 class="font-heading text-3xl font-bold text-white mb-16 italic uppercase tracking-tighter">Verified Skills.</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($certificates ?? [] as $cert)
                <div class="glass p-8 rounded-[32px] border border-white/5 hover:border-blue-500/30 transition duration-500 group">
                    <div class="h-40 bg-slate-900 rounded-2xl mb-6 overflow-hidden">
                        <a href="{{ \Illuminate\Support\Facades\Storage::url($cert->image) }}" class="glightbox" data-glightbox="title: {{ $cert->name }}; description: Issued by {{ $cert->issuer }}">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($cert->image) }}" class="w-full h-full object-cover opacity-30 group-hover:opacity-100 transition duration-700 group-hover:scale-110 cursor-zoom-in">
                        </a>
                    </div>
                    <h4 class="text-white font-bold mb-1 uppercase text-sm tracking-widest">{{ $cert->name }}</h4>
                    <p class="text-slate-500 text-[10px] font-mono uppercase tracking-[0.2em]">Issued {{ $cert->issued_at }} • {{ $cert->issuer }}</p>
                </div>
            @empty
                <div class="col-span-full py-10 text-center border border-dashed border-white/10 rounded-[32px]">
                    <p class="text-slate-500 font-mono text-[10px] uppercase tracking-widest">Sertifikat belum ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </section>

    <footer id="footer" class="w-full">
        <div class="glass border-t border-white/5 p-12 md:p-24 flex flex-col items-center text-center overflow-hidden relative">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 blur-[120px] -z-10"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 blur-[120px] -z-10"></div>
            
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-white tracking-tighter mb-12 uppercase">
                Let's build the <span class="text-gradient italic">future.</span>
            </h2>

            <div class="flex gap-10 text-3xl mb-20">
                <a href="https://github.com/iqbaalfdllh12" target="_blank" class="text-slate-500 hover:text-white transition-all transform hover:-translate-y-2"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com/in/iqbaalfdllh" target="_blank" class="text-slate-500 hover:text-blue-400 transition-all transform hover:-translate-y-2"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://instagram.com/iqbaals.f" target="_blank" class="text-slate-500 hover:text-pink-500 transition-all transform hover:-translate-y-2"><i class="fa-brands fa-instagram"></i></a>
            </div>

            <div class="w-full max-w-7xl pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-slate-600 text-[10px] font-mono tracking-[0.5em] uppercase">
                    Iqbal Fadillah ©{{ date('Y') }} — Sumedang, Indonesia
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
    </script>
</body>
</html>