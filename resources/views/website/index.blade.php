<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>نظام إدارة العيادة الطبية الشاملة - حل متكامل لإدارة العيادات</title>
    <meta name="description" content="نظام إدارة شامل للعيادات الطبية يوفر إدارة المرضى، الأطباء، المواعيد، الفواتير، الوصفات الطبية، خدمة ردود ذكية وحجز إلكتروني. حل متكامل وحديث لإدارة عيادتك بكفاءة.">
    <meta name="keywords" content="نظام إدارة عيادة, برنامج عيادة طبية, إدارة مواعيد طبية, نظام حجز مواعيد, برنامج إدارة مرضى, نظام فواتير طبية, إدارة عيادة, برنامج عيادة">
    <meta name="author" content="نظام إدارة العيادة الطبية">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Arabic">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="نظام إدارة العيادة الطبية الشاملة">
    <meta property="og:description" content="حل متكامل لإدارة العيادات الطبية بكفاءة واحترافية عالية">
    <meta property="og:image" content="{{ asset('main.PNG') }}">
    <meta property="og:locale" content="ar_AR">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="نظام إدارة العيادة الطبية الشاملة">
    <meta property="twitter:description" content="حل متكامل لإدارة العيادات الطبية بكفاءة واحترافية عالية">
    <meta property="twitter:image" content="{{ asset('main.PNG') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    @php
        echo json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'نظام إدارة العيادة الطبية الشاملة',
            'description' => 'نظام إدارة شامل للعيادات الطبية يوفر إدارة المرضى، الأطباء، المواعيد، الفواتير، الوصفات الطبية، خدمة ردود ذكية وحجز إلكتروني',
            'applicationCategory' => 'MedicalSoftware',
            'operatingSystem' => 'Web',
            'offers' => [
                '@type' => 'Offer',
                'priceCurrency' => 'ILS',
                'availability' => 'https://schema.org/InStock'
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '5',
                'ratingCount' => '100'
            ],
            'provider' => [
                '@type' => 'Organization',
                'name' => 'نظام إدارة العيادة الطبية',
                'telephone' => '+972 56-934-1477',
                'email' => 'info@clinic.com'
            ]
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    @endphp
    </script>
    
    <!-- Google Fonts - Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }
        
        :root {
            --primary-color: rgb(30, 64, 175);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, rgb(30, 64, 175) 0%, rgb(37, 99, 235) 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, rgb(30, 64, 175) 0%, rgb(37, 99, 235) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.15);
        }
        
        .whatsapp-float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            animation: pulse 2s infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        
        @media (min-width: 640px) {
            .whatsapp-float {
                width: 60px;
                height: 60px;
                bottom: 30px;
                left: 30px;
            }
        }
        
        .whatsapp-float:hover {
            background-color: #20ba5a;
            transform: scale(1.1);
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }
        
        .scroll-smooth {
            scroll-behavior: smooth;
        }
        
        /* SVG Icons Styles */
        .icon {
            width: 24px;
            height: 24px;
        }
        
        .icon-lg {
            width: 48px;
            height: 48px;
        }
        
        /* Responsive Images */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Mobile Optimizations */
        @media (max-width: 640px) {
            .mobile-menu-button {
                font-size: 0.875rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50 scroll-smooth" dir="rtl" 
      x-data="{ 
          mobileMenuOpen: false,
          scrolled: false,
          init() {
              window.addEventListener('scroll', () => {
                  this.scrolled = window.scrollY > 50;
              });
          }
      }"
      :class="{ 'scroll-smooth': true }">
    
    <!-- Navigation Header -->
    <nav class="bg-white fixed w-full top-0 z-50 transition-all duration-300"
         :class="scrolled ? 'shadow-md' : 'shadow-sm'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="w-8 h-8 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="mr-2 text-base sm:text-xl font-bold text-[rgb(30,64,175)]">نظام إدارة العيادة</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4 space-x-reverse">
                        <a href="#features" @click.prevent="document.querySelector('#features').scrollIntoView({ behavior: 'smooth' })" class="text-gray-700 hover:text-[rgb(30,64,175)] px-3 py-2 rounded-md text-sm font-medium transition">الميزات</a>
                        <a href="#about" @click.prevent="document.querySelector('#about').scrollIntoView({ behavior: 'smooth' })" class="text-gray-700 hover:text-[rgb(30,64,175)] px-3 py-2 rounded-md text-sm font-medium transition">عن النظام</a>
                        <a href="#contact" @click.prevent="document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' })" class="text-gray-700 hover:text-[rgb(30,64,175)] px-3 py-2 rounded-md text-sm font-medium transition">اتصل بنا</a>
                    </div>
                </div>
                <div class="flex items-center gap-2 sm:gap-3">
                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-md text-gray-700 hover:text-[rgb(30,64,175)] hover:bg-gray-100">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <a href="#order-form" @click.prevent="document.querySelector('#order-form').scrollIntoView({ behavior: 'smooth' })" class="hidden sm:inline-block bg-[rgb(30,64,175)] text-white px-4 sm:px-6 py-2 rounded-lg text-sm sm:text-base font-medium hover:bg-[rgb(25,55,150)] transition">
                        اطلب النظام
                    </a>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-1"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-1"
                 class="md:hidden border-t border-gray-200">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#features" @click.prevent="mobileMenuOpen = false; document.querySelector('#features').scrollIntoView({ behavior: 'smooth' })" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[rgb(30,64,175)] hover:bg-gray-50">الميزات</a>
                    <a href="#about" @click.prevent="mobileMenuOpen = false; document.querySelector('#about').scrollIntoView({ behavior: 'smooth' })" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[rgb(30,64,175)] hover:bg-gray-50">عن النظام</a>
                    <a href="#contact" @click.prevent="mobileMenuOpen = false; document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' })" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[rgb(30,64,175)] hover:bg-gray-50">اتصل بنا</a>
                    <a href="#order-form" @click.prevent="mobileMenuOpen = false; document.querySelector('#order-form').scrollIntoView({ behavior: 'smooth' })" class="block px-3 py-2 rounded-md text-base font-medium bg-[rgb(30,64,175)] text-white hover:bg-[rgb(25,55,150)] text-center">اطلب النظام</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white pt-20 sm:pt-24 md:pt-28 lg:pt-32 pb-12 sm:pb-16 md:pb-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-12 items-center">
                <div class="text-center lg:text-right" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
                        نظام إدارة شامل
                        <br>
                        <span class="text-blue-200 mt-2 sm:mt-4 block">للعيادات الطبية</span>
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 text-blue-100 leading-relaxed px-2 sm:px-0">
                        حل متكامل لإدارة المرضى، الأطباء، المواعيد، الفواتير والتقارير مع خدمة ردود ذكية على المرضى وحجز الكتروني للنظام
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start">
                        <a href="#order-form" @click.prevent="document.querySelector('#order-form').scrollIntoView({ behavior: 'smooth' })" class="bg-white text-[rgb(30,64,175)] px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-blue-50 transition shadow-lg hover:shadow-xl text-center">
                            اطلب النظام
                        </a>
                        <a href="#features" @click.prevent="document.querySelector('#features').scrollIntoView({ behavior: 'smooth' })" class="bg-transparent border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-white hover:text-[rgb(30,64,175)] transition text-center">
                            اكتشف المزيد
                        </a>
                        <a href="https://wa.me/972569341477?text=أريد طلب نظام إدارة العيادة" target="_blank" class="bg-green-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-green-600 transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            تواصل عبر واتساب
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('main.PNG') }}" alt="نظام إدارة العيادة" class="w-full h-auto rounded-xl object-cover max-w-full">
                </div>
                <div class="lg:hidden mt-6 sm:mt-8" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('main.PNG') }}" alt="نظام إدارة العيادة" class="w-full h-auto rounded-xl object-cover max-w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-12 sm:py-16 md:py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10 sm:mb-12 md:mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">الميزات الرئيسية</h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-2 sm:px-0">
                    نظام متكامل يوفر جميع الأدوات التي تحتاجها لإدارة عيادتك بكفاءة
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Feature 1: إدارة المرضى -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">إدارة المرضى</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        إدارة شاملة لبيانات المرضى مع التاريخ الطبي، الحساسيات، والملفات الطبية الكاملة
                    </p>
                </div>
                
                <!-- Feature 2: إدارة الأطباء -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">إدارة الأطباء</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        ملفات الأطباء مع التخصصات، الجداول الزمنية، وإحصائيات الأداء
                    </p>
                </div>
                
                <!-- Feature 3: إدارة المواعيد -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">إدارة المواعيد</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        حجز المواعيد مع التحقق من التوفر، تذكيرات تلقائية، وإدارة الجداول
                    </p>
                </div>
                
                <!-- Feature 4: الفواتير والدفعات -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">الفواتير والدفعات</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        إنشاء الفواتير، تسجيل الدفعات، ومتابعة الحسابات المالية بسهولة
                    </p>
                </div>
                
                <!-- Feature 5: التقارير والإحصائيات -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">التقارير والإحصائيات</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        تقارير شاملة وإحصائيات مفصلة عن المرضى، الأطباء، والمواعيد
                    </p>
                </div>
                
                <!-- Feature 6: الوصفات الطبية -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">الوصفات الطبية</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        إدارة الوصفات الطبية مع أدوية متعددة وطباعة احترافية
                    </p>
                </div>
                
                <!-- Feature 7: خدمة ردود ذكية على المرضى -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">خدمة ردود ذكية على المرضى</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        نظام ذكي للرد التلقائي على استفسارات المرضى مع دعم واتساب والردود الفورية
                    </p>
                </div>
                
                <!-- Feature 8: حجز الكتروني للنظام -->
                <div class="feature-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-lg flex items-center justify-center mb-4 sm:mb-6">
                        <svg class="w-6 h-6 sm:w-12 sm:h-12 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">حجز الكتروني للنظام</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        نظام حجز مواعيد إلكتروني متقدم يمكن المرضى من حجز مواعيدهم بسهولة وأمان
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-12 sm:py-16 md:py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-12 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 sm:mb-6">عن النظام</h2>
                    <p class="text-base sm:text-lg text-gray-600 mb-4 sm:mb-6 leading-relaxed">
                        نظام إدارة شامل للعيادات الطبية مصمم خصيصاً لتبسيط العمليات اليومية وتحسين جودة الخدمة المقدمة للمرضى. يوفر النظام حلولاً متكاملة تغطي جميع جوانب إدارة العيادة من إدارة المرضى والأطباء إلى المواعيد والفواتير.
                    </p>
                    <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">
                        تم تطوير النظام باستخدام أحدث التقنيات لضمان الأداء العالي والأمان الكامل لبياناتك. واجهة مستخدم عربية سهلة الاستخدام تجعل التعامل مع النظام سلساً ومريحاً.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
                        <div class="text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-[rgb(30,64,175)] mb-2">100%</div>
                            <div class="text-sm sm:text-base text-gray-600">آمن</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-[rgb(30,64,175)] mb-2">24/7</div>
                            <div class="text-sm sm:text-base text-gray-600">متاح</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-[rgb(30,64,175)] mb-2">سهل</div>
                            <div class="text-sm sm:text-base text-gray-600">الاستخدام</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="space-y-4 sm:space-y-6">
                        <div class="flex items-start gap-3 sm:gap-4">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg mb-1 sm:mb-2">تصميم عربي متكامل</h3>
                                <p class="text-sm sm:text-base text-gray-600">واجهة مستخدم عربية بالكامل مع دعم RTL كامل</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 sm:gap-4">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg mb-1 sm:mb-2">أمان عالي</h3>
                                <p class="text-sm sm:text-base text-gray-600">حماية كاملة للبيانات مع نظام صلاحيات متقدم</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 sm:gap-4">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-lg flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-[rgb(30,64,175)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg mb-1 sm:mb-2">أداء سريع</h3>
                                <p class="text-sm sm:text-base text-gray-600">تقنيات حديثة لضمان سرعة الاستجابة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section id="order-form" class="py-12 sm:py-16 md:py-20 px-4 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-8 sm:mb-10 md:mb-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 sm:mb-4">اطلب نظام إدارة العيادة</h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 px-2 sm:px-0">
                    املأ النموذج وسنتواصل معك عبر واتساب لتأكيد طلبك
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 border border-gray-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <form 
                    x-data="{ 
                        formData: {
                            name: '',
                            phone: '',
                            email: '',
                            clinicName: '',
                            message: ''
                        },
                        submitForm() {
                            const message = `مرحباً، أريد طلب نظام إدارة العيادة%0A%0A` +
                                `الاسم: ${this.formData.name}%0A` +
                                `رقم الجوال: ${this.formData.phone}%0A` +
                                `البريد الإلكتروني: ${this.formData.email}%0A` +
                                `اسم العيادة: ${this.formData.clinicName}%0A` +
                                `رسالة: ${this.formData.message}`;
                            
                            const whatsappUrl = `https://wa.me/972569341477?text=${message}`;
                            window.open(whatsappUrl, '_blank');
                        }
                    }"
                    @submit.prevent="submitForm()"
                    class="space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                الاسم الكامل <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                x-model="formData.name"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[rgb(30,64,175)] focus:border-transparent transition"
                                placeholder="أدخل اسمك الكامل">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                رقم الجوال <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                x-model="formData.phone"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[rgb(30,64,175)] focus:border-transparent transition"
                                placeholder="مثال: +972 56-934-1477">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                البريد الإلكتروني
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                x-model="formData.email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[rgb(30,64,175)] focus:border-transparent transition"
                                placeholder="example@email.com">
                        </div>
                        
                        <div>
                            <label for="clinicName" class="block text-sm font-medium text-gray-700 mb-2">
                                اسم العيادة <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="clinicName" 
                                x-model="formData.clinicName"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[rgb(30,64,175)] focus:border-transparent transition"
                                placeholder="اسم العيادة أو المركز الطبي">
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            رسالة إضافية (اختياري)
                        </label>
                        <textarea 
                            id="message" 
                            x-model="formData.message"
                            rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[rgb(30,64,175)] focus:border-transparent transition resize-none"
                            placeholder="أخبرنا عن احتياجاتك أو أي معلومات إضافية..."></textarea>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <button 
                            type="submit"
                            class="flex-1 bg-[rgb(30,64,175)] text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-[rgb(25,55,150)] transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            إرسال عبر واتساب
                        </button>
                        
                        <a 
                            href="https://wa.me/972569341477?text=مرحباً، أريد الاستفسار عن نظام إدارة العيادة" 
                            target="_blank"
                            class="flex-1 bg-green-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-green-600 transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            تواصل مباشر
                        </a>
                    </div>
                    
                    <p class="text-xs sm:text-sm text-gray-500 text-center mt-4">
                        عند الضغط على "إرسال عبر واتساب"، سيتم فتح تطبيق واتساب مع جميع بياناتك جاهزة للإرسال
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg text-white py-12 sm:py-16 md:py-20 px-4">
        <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in" data-aos-duration="1000">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6">جاهز للبدء؟</h2>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 sm:mb-10 text-blue-100 px-2 sm:px-0">
                ابدأ في إدارة عيادتك بكفاءة واحترافية اليوم
            </p>
            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                <a href="#order-form" @click.prevent="document.querySelector('#order-form').scrollIntoView({ behavior: 'smooth' })" class="bg-white text-[rgb(30,64,175)] px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-blue-50 transition shadow-lg hover:shadow-xl">
                    اطلب النظام
                </a>
                <a href="#contact" @click.prevent="document.querySelector('#contact').scrollIntoView({ behavior: 'smooth' })" class="bg-transparent border-2 border-white text-white px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-white hover:text-[rgb(30,64,175)] transition">
                    تواصل معنا
                </a>
                <a href="https://wa.me/972569341477?text=أريد طلب نظام إدارة العيادة" target="_blank" class="bg-green-500 text-white px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg font-bold text-base sm:text-lg hover:bg-green-600 transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    تواصل عبر واتساب
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-8 sm:py-10 md:py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-6 sm:mb-8">
                <div>
                    <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">نظام إدارة العيادة</h3>
                    <p class="text-sm sm:text-base text-gray-400 leading-relaxed">
                        حل متكامل لإدارة العيادات الطبية بكفاءة واحترافية عالية
                    </p>
                </div>
                <div>
                    <h4 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4">روابط سريعة</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" @click.prevent="document.querySelector('#features').scrollIntoView({ behavior: 'smooth' })" class="text-gray-400 hover:text-white transition">الميزات</a></li>
                        <li><a href="#about" @click.prevent="document.querySelector('#about').scrollIntoView({ behavior: 'smooth' })" class="text-gray-400 hover:text-white transition">عن النظام</a></li>
                        <li><a href="#order-form" @click.prevent="document.querySelector('#order-form').scrollIntoView({ behavior: 'smooth' })" class="text-gray-400 hover:text-white transition">اطلب النظام</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4">اتصل بنا</h4>
                    <ul class="space-y-2 text-sm sm:text-base text-gray-400">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="break-all">info@clinic.com</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+972 56-934-1477</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 sm:pt-8 text-center text-xs sm:text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} نظام إدارة العيادة الطبية. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/972569341477?text=مرحباً، أريد الاستفسار عن نظام إدارة العيادة" 
       target="_blank" 
       class="whatsapp-float" 
       title="تواصل معنا عبر واتساب">
        <svg class="w-6 h-6 sm:w-8 sm:h-8" viewBox="0 0 32 32" fill="currentColor">
            <path d="M16 0C7.164 0 0 7.164 0 16c0 2.825.744 5.48 2.044 7.784L0 32l8.447-2.044C10.68 31.31 13.27 32 16 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm0 29.12c-2.488 0-4.827-.652-6.844-1.792l-.48-.288-4.96 1.2 1.2-4.832-.304-.512C3.872 21.456 3.2 18.8 3.2 16 3.2 8.878 8.878 3.2 16 3.2S28.8 8.878 28.8 16 23.122 28.8 16 28.8z"/>
            <path d="M23.36 19.488c-.304-.152-1.808-.892-2.088-.992-.28-.1-.484-.152-.688.152-.204.304-.792.992-.972 1.2-.18.2-.36.224-.668.08-.304-.152-1.28-.472-2.44-1.504-.9-.8-1.512-1.792-1.688-2.096-.18-.304-.016-.468.136-.616.14-.14.304-.36.456-.544.152-.184.204-.304.304-.504.1-.2.052-.376-.024-.528-.08-.152-.688-1.656-.944-2.272-.248-.6-.5-.52-.688-.528-.18-.008-.384-.008-.588-.008s-.528.08-.808.4c-.28.32-1.088 1.064-1.088 2.592s1.12 3.008 1.28 3.216c.16.208 2.256 3.44 5.472 4.816.768.32 1.368.512 1.832.656.784.24 1.496.208 2.056.128.624-.088 1.92-.784 2.192-1.544.272-.768.272-1.424.192-1.56-.08-.136-.304-.224-.608-.376z"/>
        </svg>
    </a>

    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 50,
                delay: 0,
                disable: window.innerWidth < 640 ? 'mobile' : false
            });
        });
    </script>
</body>
</html>

