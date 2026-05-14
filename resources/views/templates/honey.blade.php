<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MiniBee Honey</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            honey: '#FFC107',
            honeyDark: '#E0A800',
            olive: '#6D8C3C',
            creamWarm: '#FFF3CD',
            earth: '#5D4037'
          },
          fontFamily: {
            'bengali': ['Noto Sans Bengali', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Noto Sans Bengali', sans-serif;
    }

    .honeycomb-pattern {
      background-image:
        radial-gradient(circle at 25% 25%, #FFC107 2px, transparent 2px),
        radial-gradient(circle at 75% 75%, #FFC107 2px, transparent 2px);
      background-size: 50px 50px;
      background-position: 0 0, 25px 25px;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.6s ease-out forwards;
    }

    .delay-100 {
      animation-delay: 0.1s;
    }

    .delay-200 {
      animation-delay: 0.2s;
    }

    .delay-300 {
      animation-delay: 0.3s;
    }

    .delay-400 {
      animation-delay: 0.4s;
    }

    .delay-500 {
      animation-delay: 0.5s;
    }

    .delay-600 {
      animation-delay: 0.6s;
    }

    .delay-700 {
      animation-delay: 0.7s;
    }

    @keyframes pulse-slow {

      0%,
      100% {
        opacity: 0.3;
      }

      50% {
        opacity: 0.6;
      }
    }

    .animate-pulse-slow {
      animation: pulse-slow 3s ease-in-out infinite;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeIn {
      animation: fadeIn 0.6s ease-out forwards;
    }

    .ornate-border {
      border: 3px solid #8B6914;
      border-radius: 20px;
      position: relative;
      background: linear-gradient(135deg, #D4A574 0%, #C9A36B 50%, #D4A574 100%);
      padding: 3px;
    }

    @keyframes cross-through {
      0% {
        width: 0;
      }

      100% {
        width: 100%;
      }
    }

    .price-cross {
      position: relative;
      display: inline-block;
      color: #9ca3af;
      /* muted gray */
      font-size: 2.5rem;
      margin-right: 1.5rem;
    }

    .price-cross::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      height: 3px;
      background-color: #ef4444;
      /* red */
      transform: translateY(-50%) rotate(-15deg);
      transform-origin: center;
      animation: strikeAnimation 2s ease-in-out infinite;
    }

    @keyframes strikeAnimation {

      0%,
      100% {
        transform: translateY(-50%) rotate(-15deg) scaleX(1);
        opacity: 0.8;
      }

      50% {
        transform: translateY(-50%) rotate(-15deg) scaleX(1.1);
        opacity: 1;
      }
    }

    /* Honey landing — product picker list (matches dashboard-style rows) */
    .honey-picker-row {
      display: flex;
      align-items: center;
      gap: 0.875rem;
    }

    .honey-row-radio {
      flex-shrink: 0;
      appearance: none;
      width: 1.375rem;
      height: 1.375rem;
      border: 2px solid #1e3a5f;
      border-radius: 50%;
      background: #fff;
      cursor: pointer;
      transition: border-color 0.15s, box-shadow 0.15s, background 0.15s;
    }

    .honey-row-radio:checked {
      background: #22c55e;
      border-color: #1e3a5f;
      box-shadow: inset 0 0 0 3px #fff;
    }

    .honey-row-radio:focus-visible {
      outline: 2px solid #ffc107;
      outline-offset: 2px;
    }

    .honey-picker-card {
      flex: 1;
      min-width: 0;
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.875rem 1rem;
      background: #fff9e1;
      border: 1px solid #d4b896;
      border-radius: 10px;
      cursor: pointer;
      transition: border-color 0.15s, box-shadow 0.15s;
    }

    .honey-picker-row input[type="radio"]:checked + .honey-picker-card {
      border-color: #c9a227;
      box-shadow: 0 0 0 2px rgba(255, 193, 7, 0.45);
    }

    .honey-picker-thumb {
      width: 4.5rem;
      height: 4.5rem;
      border-radius: 8px;
      object-fit: cover;
      flex-shrink: 0;
    }

    @media (min-width: 768px) {
      .honey-picker-thumb {
        width: 5.5rem;
        height: 5.5rem;
      }
    }

    .honey-picker-title {
      font-family: Georgia, 'Times New Roman', serif;
      font-weight: 700;
      color: #4a3428;
      font-size: 1.05rem;
      line-height: 1.35;
    }

    @media (min-width: 768px) {
      .honey-picker-title {
        font-size: 1.15rem;
      }
    }

    .honey-picker-sub {
      font-size: 0.95rem;
      color: #1a1a1a;
      font-weight: 500;
    }

    .honey-picker-price-old {
      font-size: 0.95rem;
      color: #b45309;
      text-decoration: line-through;
      text-decoration-color: #dc2626;
    }

    .honey-picker-price-new {
      font-size: 1.35rem;
      font-weight: 700;
      color: #111827;
      line-height: 1.2;
    }

    .honey-picker-row input[type="radio"]:checked + .honey-picker-card .honey-picker-price-new {
      color: #e6a000;
    }

    .honey-picker-price-accent {
      margin-top: 0.35rem;
      width: 2rem;
      height: 3px;
      border-radius: 2px;
      background: #6d8c3c;
    }

    @keyframes underline-grow {

      0%,
      100% {
        width: 100%;
        opacity: 1;
      }

      50% {
        width: 80%;
        opacity: 0.7;
      }
    }

    @keyframes text-pulse {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }
    }

    .price-offer {
      position: relative;
      display: inline-block;
      font-size: 3.5rem;
      font-weight: bold;
      animation: text-pulse 2s ease-in-out infinite;
    }

    .price-offer::after {
      content: '';
      position: absolute;
      bottom: 5px;
      left: 0;
      width: 100%;
      height: 3px;
      background-color: #22c55e;
      /* green */
      animation: underline-grow 2s ease-in-out infinite;
    }

    position: absolute;
    width: 40px;
    height: 40px;
    border: 3px solid #8B6914;
    }

    .ornate-corner.top-left {
      top: -3px;
      left: -3px;
      border-right: none;
      border-bottom: none;
      border-top-left-radius: 20px;
    }

    .ornate-corner.top-right {
      top: -3px;
      right: -3px;
      border-left: none;
      border-bottom: none;
      border-top-right-radius: 20px;
    }

    .ornate-corner.bottom-left {
      bottom: -3px;
      left: -3px;
      border-right: none;
      border-top: none;
      border-bottom-left-radius: 20px;
    }

    .ornate-corner.bottom-right {
      bottom: -3px;
      right: -3px;
      border-left: none;
      border-top: none;
      border-bottom-right-radius: 20px;
    }

    .question-icon {
      width: 40px;
      height: 40px;
      background: linear-gradient(135deg, #8B6914, #6B5310);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      color: #D4A574;
      border: 2px solid #D4A574;
      position: relative;
      z-index: 12;
    }

    /* Toast Notification Styles */
    .toast-notification {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 10000;
      min-width: 320px;
      max-width: 400px;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      gap: 16px;
      animation: slideInRight 0.4s ease-out;
      font-family: 'Noto Sans Bengali', sans-serif;
    }

    .toast-success {
      background: linear-gradient(135deg, #10b981, #059669);
      color: white;
    }

    .toast-error {
      background: linear-gradient(135deg, #ef4444, #dc2626);
      color: white;
    }

    .toast-icon {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      flex-shrink: 0;
    }

    .toast-content {
      flex: 1;
    }

    .toast-title {
      font-weight: 700;
      font-size: 18px;
      margin-bottom: 4px;
    }

    .toast-message {
      font-size: 14px;
      opacity: 0.95;
      line-height: 1.5;
    }

    .toast-close {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      transition: background 0.2s;
      flex-shrink: 0;
    }

    .toast-close:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    @keyframes slideInRight {
      from {
        transform: translateX(100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slideOutRight {
      from {
        transform: translateX(0);
        opacity: 1;
      }

      to {
        transform: translateX(100%);
        opacity: 0;
      }
    }

    .toast-notification.hiding {
      animation: slideOutRight 0.3s ease-in forwards;
    }
  </style>

{{-- 1. FIRST: Normalize product lines; default selection = first line (checkout is one product at a time) --}}
@php
    $honeyProductLines = [];
    if (isset($honeyPage) && isset($honeyPage->content['product'])) {
        $pc = $honeyPage->content['product'];
        if (
            ($pc['type'] ?? '') === 'existing' &&
            !empty($pc['items']) &&
            is_array($pc['items'])
        ) {
            foreach ($pc['items'] as $line) {
                if (!empty($line['title']) || !empty($line['image'])) {
                    $honeyProductLines[] = $line;
                }
            }
        }
        if (count($honeyProductLines) === 0) {
            $hasLegacy = !empty($pc['title']) || !empty($pc['image']) || !empty($pc['offer_price']) || !empty($pc['regular_price']);
            if ($hasLegacy) {
                $honeyProductLines[] = [
                    'product_id' => $pc['product_id'] ?? null,
                    'title' => $pc['title'] ?? '',
                    'image' => $pc['image'] ?? '',
                    'quantity' => $pc['quantity'] ?? '',
                    'regular_price' => $pc['regular_price'] ?? null,
                    'offer_price' => $pc['offer_price'] ?? null,
                    'short_description' => $pc['short_description'] ?? '',
                ];
            }
        }
    }
    $honeyLineUnitPrice = function (array $line): float {
        $lineOffer = isset($line['offer_price']) ? (float) $line['offer_price'] : 0;
        $lineReg = isset($line['regular_price']) ? (float) $line['regular_price'] : 0;
        if ($lineOffer > 0) {
            return $lineOffer;
        }
        if ($lineReg > 0) {
            return $lineReg;
        }
        return 0;
    };
    $honeyShowProductPicker = count($honeyProductLines) > 1;
    $firstLine = $honeyProductLines[0] ?? [];
    $honeySelectedUnitPrice = $firstLine ? $honeyLineUnitPrice($firstLine) : 0;
    $productPrice = $honeySelectedUnitPrice;
    $honeyLinesJson = [];
    foreach ($honeyProductLines as $idx => $line) {
        $honeyLinesJson[] = [
            'index' => $idx,
            'title' => $line['title'] ?? '',
            'image' => !empty($line['image']) ? asset($line['image']) : '',
            'quantity' => $line['quantity'] ?? '',
            'unitPrice' => $honeyLineUnitPrice($line),
        ];
    }
@endphp

{{-- 2. SECOND: The Meta Pixel Code (now safely using the $productPrice variable) --}}
@if (setting('fb_pixel_id'))
    <!-- Meta Pixel Code -->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue =[];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '{{ setting('fb_pixel_id') }}');
      fbq('track', 'PageView');
      
    //   fbq('track', 'Purchase', {
    //       value: {{ number_format($productPrice, 2, '.', '') }},
    //       currency: 'BDT'
    //   });
    </script>

    <noscript>
      <img height="1" width="1" style="display:none"
           src="https://www.facebook.com/tr?id={{ setting('fb_pixel_id') }}&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
@endif
</head>

<body class="bg-creamWarm text-earth">

  <!-- Hero Section -->
  <section class="flex items-center justify-center bg-gradient-to-b from-yellow-100 to-amber-50 px-6 pb-10 md:pt-20">
    <div class="max-w-5xl text-center">
      @if ($honeyPage && isset($honeyPage->content['hero']['heading']))
        <h1
            class="relative mb-12 mt-10 rounded-2xl bg-white px-8 py-4 text-xl font-bold leading-relaxed md:mt-0 md:text-2xl">
          {!! $honeyPage->content['hero']['heading'] !!}
        </h1>
      @else
        <h1
            class="relative mb-12 mt-10 rounded-2xl bg-white px-8 py-4 text-xl font-bold leading-relaxed md:mt-0 md:text-2xl">
          "তাদের উদর থেকে বের হয় বিভিন্ন রঙের পানীয় এতে মানুষের জন্য রয়েছে আরোগ্য।" <br>
          <span class="">- সূরা নাহল</span>
        </h1>
      @endif

      <ul class="mb-12 space-y-4 text-left text-xl">
        @if ($honeyPage && isset($honeyPage->content['hero']['questions']) && is_array($honeyPage->content['hero']['questions']))
          @foreach ($honeyPage->content['hero']['questions'] as $question)
            @if (!empty($question))
              <li class="flex items-start gap-3">
                <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
                <span>{{ $question }}</span>
              </li>
            @endif
          @endforeach
        @else
          <li class="flex items-start gap-3">
            <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
            <span>আপনি কি আপনার পরিবারকে 'সাদা বিষ' খ্যাত চিনি থেকে মুক্ত রাখার সমাধান খুঁজছেন?</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
            <span>আপনি কি সুন্দরবনের ১০০% বিশুদ্ধ নির্ভেজাল চিনিমুক্ত মধু খুঁজছেন?</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
            <span>আপনি কি সহজে বহনযোগ্য, ঝামেলাহীন প্যাকেটে মধু খুঁজছেন?</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
            <span>আপনি কি স্বাস্থ্যসম্মত ফুড গ্রেড প্যাকেটে মধু খুঁজছেন যা আপনি নির্দ্বিধায় গ্রহণ করতে
              পারবেন?</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="/icons/arrow-right.png" alt="arrow" class="mt-1 h-6 w-6 flex-shrink-0">
            <span>আপনি কি মধুকে ঔষধ হিসেবে গ্রহণ করতে চান?</span>
          </li>
        @endif
      </ul>

      {{-- Welcome section --}}
      <div>
        @if ($honeyPage && isset($honeyPage->content['welcome']['message']))
          <p class="mb-8 rounded-2xl bg-white px-8 py-4 text-xl font-bold md:text-3xl">
            {{ $honeyPage->content['welcome']['message'] }}</p>
        @else
          <p class="mb-8 rounded-2xl bg-white px-8 py-4 text-xl font-bold md:text-3xl">"উপরের প্রশ্নগুলোর
            উত্তর যদি
            'হ্যা' হয়ে থাকে তবে আপনি সঠিক স্থানেই এসেছেন"</p>
        @endif

        @if ($honeyPage && isset($honeyPage->content['welcome']['heading']))
          <h2 class="mb-6 text-5xl font-bold md:text-6xl">{{ $honeyPage->content['welcome']['heading'] }}</h2>
        @else
          <h2 class="mb-6 text-5xl font-bold md:text-6xl">Welcome to Mini Bee</h2>
        @endif

        <div class="mb-10 flex justify-center">
          @if ($honeyPage && isset($honeyPage->content['welcome']['logo']) && $honeyPage->content['welcome']['logo'])
            <img src="{{ asset($honeyPage->content['welcome']['logo']) }}" alt="Logo"
                 class="h-40 w-40 rounded-full object-contain">
          @else
            <img src="https://minibeebd.com/images/bee-logo.jpeg" alt="MiniBee Logo"
                 class="h-40 w-40 rounded-full object-contain">
          @endif
        </div>
      </div>

      {{-- Description --}}
      <div class="mx-auto max-w-4xl text-center">
        @if ($honeyPage && isset($honeyPage->content['description']) && $honeyPage->content['description'])
          <p class="mb-4 text-xl leading-relaxed md:text-2xl">
            {{ $honeyPage->content['description'] }}
          </p>
        @else
          <p class="mb-4 text-xl leading-relaxed md:text-2xl">
            আপনার সব সমস্যার সমাধান দিতেই MiniBee নিয়ে এসেছে ৪ গ্রাম এর ৫০টি ছোট স্যাচেট এর সমন্বয়ে এক
            প্রিমিয়াম
            বক্স। এতে পাবেন সুন্দরবনের খাঁটি, নির্ভেজাল, প্রাকৃতিক চাকের মধু। এটি সহজেই আপনার পকেটে রাখতে
            পারবেন
            আর
            যেখানে ইচ্ছা সেখানেই চিনির পরিবর্তে গ্রহণ করতে পারবেন। নিশ্চিন্তে আপনার সোনামণির হাতে তুলে দিতে
            পারবেন
            চকলেট বা ক্ষতিকর খাদ্যের বিকল্প হিসেবে।
          </p>
        @endif
      </div>

      {{-- Order now --}}
      {{-- <div class="text-center mb-6 mt-12">
                <a href="#checkout"
                class="bg-honey hover:bg-honeyDark text-white px-10 py-5 rounded-2xl shadow-lg text-xl font-semibold">অর্ডার
                করুন</a>
            </div> --}}

    </div>
  </section>

  <!-- Why Buy Section -->
  <section class="bg-white px-6 py-20">
    <h2 class="mb-16 text-center text-4xl font-bold md:text-5xl">কেন আমাদের মধু কিনবেন?</h2>

    <!-- Main Content Grid -->
    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-8">
      <!-- Left Column - Top Cards -->
      <div class="space-y-6">
        @if ($honeyPage && isset($honeyPage->content['why_buy']['cards']) && is_array($honeyPage->content['why_buy']['cards']))
          @foreach (array_slice($honeyPage->content['why_buy']['cards'], 0, 2) as $card)
            <div class="rounded-2xl bg-white p-8 shadow">
              <div class="flex items-start gap-4">
                @if (isset($card['icon']) && $card['icon'])
                  <div class="flex-shrink-0">
                    <img src="{{ asset($card['icon']) }}" alt="Icon" class="h-12 w-12">
                  </div>
                @endif
                <div class="flex-1">
                  @if (isset($card['heading']))
                    <h3 class="mb-2 text-xl font-bold">{{ $card['heading'] }}</h3>
                  @endif
                  @if (isset($card['description']))
                    <p class="text-lg">{{ $card['description'] }}</p>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        @else
          <!-- Default cards if no data -->
          <div class="rounded-2xl bg-white p-8 shadow">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <img src="/icons/natural.png" alt="Natural Icon" class="h-12 w-12">
              </div>
              <div class="flex-1">
                <h3 class="mb-2 text-xl font-bold">শুদ্ধতা ও প্রাকৃতিকতাঃ</h3>
                <p class="text-lg">আমাকদের মধু ১০০% প্রাকৃতিক সুন্দরবনের মধু যা সংগ্রহ করা হয়েছে
                  সুন্দরবনের মৌয়ালদের থেকে।</p>
              </div>
            </div>
          </div>
          <div class="rounded-2xl bg-white p-8 shadow">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <img src="/icons/credit-card.png" alt="Card Icon" class="h-12 w-12">
              </div>
              <div class="flex-1">
                <h3 class="mb-2 text-xl font-bold">সহজে বহনযোগ্যঃ</h3>
                <p class="text-lg">আমাদের একটি বক্সে ৪৪ এর ৫০ টি প্যাকেট রয়েছে যা সহজে আপনি আপনার
                  প্রয়োজনমত যেখানে ইচ্ছা বহন ও খেতে পারেন।</p>
              </div>
            </div>
          </div>
        @endif
      </div>

      <!-- Middle Column - Product Image -->
      <div class="flex items-center justify-center lg:col-span-1">
        <div class="relative">
          @if (
              $honeyPage &&
                  isset($honeyPage->content['why_buy']['center_image']) &&
                  $honeyPage->content['why_buy']['center_image']
          )
            <img src="{{ asset($honeyPage->content['why_buy']['center_image']) }}" alt="Product Box"
                 class="h-auto max-w-full rounded-2xl shadow-lg" style="max-height: 500px;">
          @else
            <img src="https://assets.mediamodifier.com/mockups/6141d9209041e3ae08e25255/open-cardboard-product-box-mockup_thumb.jpg"
                 alt="Mini Bee Love Honey Box" class="h-auto max-w-full rounded-2xl shadow-lg"
                 style="max-height: 500px;">
          @endif
        </div>
      </div>

      <!-- Right Column - Top Cards -->
      <div class="space-y-6">
        @if ($honeyPage && isset($honeyPage->content['why_buy']['cards']) && is_array($honeyPage->content['why_buy']['cards']))
          @foreach (array_slice($honeyPage->content['why_buy']['cards'], 2, 2) as $card)
            <div class="rounded-2xl bg-white p-8 shadow">
              <div class="flex items-start gap-4">
                @if (isset($card['icon']) && $card['icon'])
                  <div class="flex-shrink-0">
                    <img src="{{ asset($card['icon']) }}" alt="Icon" class="h-12 w-12">
                  </div>
                @endif
                <div class="flex-1">
                  @if (isset($card['heading']))
                    <h3 class="mb-2 text-xl font-bold">{{ $card['heading'] }}</h3>
                  @endif
                  @if (isset($card['description']))
                    <p class="text-lg">{{ $card['description'] }}</p>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        @else
          <!-- Default cards -->
          <div class="rounded-2xl bg-white p-8 shadow">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <img src="/icons/package.png" alt="Card Icon" class="h-12 w-12">
              </div>
              <div class="flex-1">
                <h3 class="mb-2 text-xl font-bold">স্বাস্থ্যসম্মত প্যাকেজিংঃ</h3>
                <p class="text-lg">তিন স্তরের ফুড অ্যালুমিনিয়াম ফয়েল ব্যবহার করা হয়েছে যা দীর্ঘদিন
                  মধুকে রাখে সতেজ, তাজা এবং স্বাস্থ্যসম্মত।</p>
              </div>
            </div>
          </div>
          <div class="rounded-2xl bg-white p-8 shadow">
            <div class="flex items-start gap-4">
              <div class="flex-shrink-0">
                <img src="/icons/weighing-machine.png" alt="Weight Icon" class="h-12 w-12">
              </div>
              <div class="flex-1">
                <h3 class="mb-2 text-xl font-bold">পরিমিত গ্রহণ ও অপচয় রোধঃ</h3>
                <p class="text-lg">আমাদের মধু ৪৭ এর ছোট প্যাকেট এ থাকায় মধু বেশি পড়ে গিয়ে অপচয়
                  হওয়ার সুযোগ নেই, অপরদিকে পরিমিত গ্রহণ নিশ্চিত করবে।</p>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>

    <!-- Bottom Card -->
    <div class="mt-8 flex justify-center">
      @if ($honeyPage && isset($honeyPage->content['why_buy']['cards']) && count($honeyPage->content['why_buy']['cards']) > 4)
        <div class="max-w-lg rounded-2xl bg-white p-8 shadow">
          <div class="flex items-start gap-4">
            @if (isset($honeyPage->content['why_buy']['cards'][4]['icon']) && $honeyPage->content['why_buy']['cards'][4]['icon'])
              <div class="flex-shrink-0">
                <img src="{{ asset($honeyPage->content['why_buy']['cards'][4]['icon']) }}" alt="Icon"
                     class="h-12 w-12">
              </div>
            @endif
            <div class="flex-1">
              @if (isset($honeyPage->content['why_buy']['cards'][4]['heading']))
                <h3 class="mb-2 text-xl font-bold">
                  {{ $honeyPage->content['why_buy']['cards'][4]['heading'] }}</h3>
              @endif
              @if (isset($honeyPage->content['why_buy']['cards'][4]['description']))
                <p class="text-lg">{{ $honeyPage->content['why_buy']['cards'][4]['description'] }}</p>
              @endif
            </div>
          </div>
        </div>
      @else
        <div class="max-w-lg rounded-2xl bg-white p-8 shadow">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <img src="/icons/no-chocolate.png" alt="No Chocolate Icon" class="h-12 w-12">
            </div>
            <div class="flex-1">
              <h3 class="mb-2 text-xl font-bold">চকলেট ও ক্ষতিকর খাদ্যের বিকল্পঃ</h3>
              <p class="text-lg">আপনার সোনামণির স্কুলব্যাগে দিয়ে দিতে পারবেন খুব সহজেই যা আপনার
                সোনামনিকে চকলেটের মত ক্ষতিকর জিনিস থেকে দুরে রাখবে।</p>
            </div>
          </div>
        </div>
      @endif
    </div>

    {{-- <div class="text-center mt-16">
            <a href="#checkout"
                class="bg-honey hover:bg-honeyDark text-white px-10 py-5 rounded-2xl shadow-lg text-xl font-semibold">অর্ডার
                করুন</a>
        </div> --}}
  </section>

  <!-- Why Eat Honey -->
  <section class="relative overflow-hidden bg-amber-50 px-6 py-20">
    <h2 class="relative z-10 mb-12 text-center text-4xl font-bold md:text-5xl">মধু কেন খাবেন</h2>

    <div class="honeycomb-pattern pointer-events-none absolute right-0 top-0 -mr-24 -mt-24 h-96 w-96 opacity-30">
    </div>
    <div class="honeycomb-pattern pointer-events-none absolute bottom-0 left-0 -mb-24 -ml-24 h-96 w-96 opacity-30">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl">
      @if (
          $honeyPage &&
              isset($honeyPage->content['why_eat_honey']['cards']) &&
              is_array($honeyPage->content['why_eat_honey']['cards']) &&
              count($honeyPage->content['why_eat_honey']['cards']) > 0)
        @php
          $cards = $honeyPage->content['why_eat_honey']['cards'];
          $firstRow = array_slice($cards, 0, 4);
          $secondRow = array_slice($cards, 4);
        @endphp

        <!-- Benefits Grid - First Row (4 columns) -->
        @if (count($firstRow) > 0)
          <div class="mb-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:mb-6 md:gap-6 lg:grid-cols-4">
            @foreach ($firstRow as $index => $card)
              <div
                   class="animate-fadeInUp delay-{{ ($index + 1) * 100 }} group relative rounded-3xl border-4 border-yellow-400 bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 opacity-0 shadow-xl transition-all duration-500 hover:-translate-y-3 hover:scale-105 hover:shadow-2xl">
                <div
                     class="absolute inset-0 rounded-3xl bg-gradient-to-br from-yellow-200/20 to-yellow-300/20 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                </div>

                <div
                     class="relative mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border-4 border-yellow-400 bg-gradient-to-br from-white to-yellow-50 shadow-lg transition-all duration-500 group-hover:rotate-12 group-hover:scale-110 group-hover:shadow-xl md:h-24 md:w-24">
                  <div
                       class="animate-pulse-slow absolute inset-0 rounded-full bg-gradient-to-br from-yellow-200/30 to-yellow-300/30">
                  </div>
                  @if (isset($card['icon']) && $card['icon'])
                    <img src="{{ asset($card['icon']) }}" alt="Icon"
                         class="relative z-10 h-12 w-12 md:h-14 md:w-14">
                  @endif
                </div>

                @if (isset($card['title']))
                  <h3 class="relative mb-3 text-center text-lg font-bold leading-tight text-gray-900 md:text-xl">
                    {{ $card['title'] }}</h3>
                @endif
                @if (isset($card['description']))
                  <p class="relative text-center text-sm leading-relaxed text-gray-700 md:text-base">
                    {{ $card['description'] }}</p>
                @endif
              </div>
            @endforeach
          </div>
        @endif

        <!-- Second Row -->
        @if (count($secondRow) > 0)
          <div class="grid grid-cols-1 justify-center gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-4">
            @foreach ($secondRow as $index => $card)
              <div
                   class="animate-fadeInUp delay-{{ ($index + 5) * 100 }} group relative rounded-3xl border-4 border-yellow-400 bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 opacity-0 shadow-xl transition-all duration-500 hover:-translate-y-3 hover:scale-105 hover:shadow-2xl">
                <div
                     class="absolute inset-0 rounded-3xl bg-gradient-to-br from-yellow-200/20 to-yellow-300/20 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                </div>

                <div
                     class="relative mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border-4 border-yellow-400 bg-gradient-to-br from-white to-yellow-50 shadow-lg transition-all duration-500 group-hover:rotate-12 group-hover:scale-110 group-hover:shadow-xl md:h-24 md:w-24">
                  <div
                       class="animate-pulse-slow absolute inset-0 rounded-full bg-gradient-to-br from-yellow-200/30 to-yellow-300/30">
                  </div>
                  @if (isset($card['icon']) && $card['icon'])
                    <img src="{{ asset($card['icon']) }}" alt="Icon"
                         class="relative z-10 h-12 w-12 md:h-14 md:w-14">
                  @endif
                </div>

                @if (isset($card['title']))
                  <h3 class="relative mb-3 text-center text-lg font-bold leading-tight text-gray-900 md:text-xl">
                    {{ $card['title'] }}</h3>
                @endif
                @if (isset($card['description']))
                  <p class="relative text-center text-sm leading-relaxed text-gray-700 md:text-base">
                    {{ $card['description'] }}</p>
                @endif
              </div>
            @endforeach
          </div>
        @endif
      @else
        <!-- Default static cards if no data -->
        <div class="mb-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:mb-6 md:gap-6 lg:grid-cols-4">
          <div
               class="animate-fadeInUp group relative rounded-3xl border-4 border-yellow-400 bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 opacity-0 shadow-xl transition-all delay-100 duration-500 hover:-translate-y-3 hover:scale-105 hover:shadow-2xl">
            <div
                 class="absolute inset-0 rounded-3xl bg-gradient-to-br from-yellow-200/20 to-yellow-300/20 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            </div>
            <div
                 class="relative mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border-4 border-yellow-400 bg-gradient-to-br from-white to-yellow-50 shadow-lg transition-all duration-500 group-hover:rotate-12 group-hover:scale-110 group-hover:shadow-xl md:h-24 md:w-24">
              <div
                   class="animate-pulse-slow absolute inset-0 rounded-full bg-gradient-to-br from-yellow-200/30 to-yellow-300/30">
              </div>
              <img src="/icons/natural-power-source.png" alt="Natural Power Source"
                   class="relative z-10 h-12 w-12 md:h-14 md:w-14">
            </div>
            <h3 class="relative mb-3 text-center text-lg font-bold leading-tight text-gray-900 md:text-xl">
              প্রাকৃতিক শক্তির উৎসঃ</h3>
            <p class="relative text-center text-sm leading-relaxed text-gray-700 md:text-base">মধু শরীরে
              শক্তি যোগায় এবং ক্লান্তি দূর করে।</p>
          </div>
          <!-- More default cards... -->
        </div>
      @endif
    </div>
  </section>
  
  <!-- Video Section -->
  @php
    $videoHeading = $honeyPage->content['video']['heading'] ?? null;
    $videoUrl = $honeyPage->content['video']['video_url'] ?? null;
    $videoFile = $honeyPage->content['video']['video_file'] ?? null;
  @endphp
  @if ($honeyPage && ($videoUrl || $videoFile || $videoHeading))
  <section class="relative overflow-hidden bg-gradient-to-b from-yellow-100 to-amber-50 px-6 py-20">
    <div class="honeycomb-pattern pointer-events-none absolute left-0 top-0 -ml-24 -mt-24 h-96 w-96 opacity-20"></div>
    <div class="honeycomb-pattern pointer-events-none absolute bottom-0 right-0 -mb-24 -mr-24 h-96 w-96 opacity-20"></div>

    <div class="relative z-10 mx-auto max-w-5xl">
      @if ($videoHeading)
        <div class="mb-12 text-center">
          <h2 class="text-4xl font-bold text-gray-900 md:text-5xl">{{ $videoHeading }}</h2>
          <div class="mx-auto mt-4 h-1 w-24 rounded-full bg-gradient-to-r from-yellow-400 to-amber-500"></div>
        </div>
      @endif

      <div class="group relative mx-auto max-w-4xl">
        {{-- Decorative glow ring --}}
        <div class="absolute -inset-2 rounded-3xl bg-gradient-to-br from-yellow-300 via-amber-400 to-yellow-500 opacity-40 blur-lg transition-opacity duration-500 group-hover:opacity-60"></div>

        <div class="relative overflow-hidden rounded-3xl border-4 border-yellow-400 bg-earth shadow-2xl">
          @if ($videoUrl)
            @php
              $embedUrl = $videoUrl;
              if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&\s]+)/', $videoUrl, $matches)) {
                $embedUrl = 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1';
              }
            @endphp
            <div class="aspect-video w-full">
              <iframe
                src="{{ $embedUrl }}"
                class="h-full w-full"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                loading="lazy"
              ></iframe>
            </div>
          @elseif ($videoFile)
            <div class="aspect-video w-full bg-black">
              <video
                class="h-full w-full"
                controls
                preload="metadata"
                playsinline
              >
                <source src="{{ asset($videoFile) }}" type="video/mp4">
              </video>
            </div>
          @endif
        </div>

        {{-- Bottom ornament --}}
        <div class="mt-6 flex items-center justify-center gap-3">
          <div class="h-px w-16 bg-gradient-to-r from-transparent to-yellow-400"></div>
          <svg class="h-6 w-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
          </svg>
          <div class="h-px w-16 bg-gradient-to-l from-transparent to-yellow-400"></div>
        </div>
      </div>
    </div>
  </section>
  @endif

  <!-- Customer Reviews -->
  <section class="bg-white px-6 py-20">
    <h2 class="mb-12 text-center text-4xl font-bold md:text-5xl">গ্রাহকদের মতামত</h2>
    <div class="mx-auto max-w-6xl">
      @if ($honeyPage && isset($honeyPage->content['reviews']['type']))
        @if (
            $honeyPage->content['reviews']['type'] == 'screenshot' &&
                isset($honeyPage->content['reviews']['screenshot']) &&
                $honeyPage->content['reviews']['screenshot']
        )
          <!-- Screenshot Display -->
          <div class="flex justify-center">
            <img src="{{ asset($honeyPage->content['reviews']['screenshot']) }}" alt="Reviews Screenshot"
                 class="max-w-full rounded-2xl shadow-lg">
          </div>
        @elseif(
            $honeyPage->content['reviews']['type'] == 'review' &&
                isset($honeyPage->content['reviews']['review_cards']) &&
                is_array($honeyPage->content['reviews']['review_cards']) &&
                count($honeyPage->content['reviews']['review_cards']) > 0)
          <!-- Review Cards -->
          <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8 lg:grid-cols-3">
            @foreach ($honeyPage->content['reviews']['review_cards'] as $review)
              <div
                   class="rounded-2xl border-2 border-yellow-200 bg-gradient-to-br from-yellow-50 to-amber-50 p-6 shadow-lg transition-all duration-300 hover:shadow-xl">
                <div class="mb-4 flex items-center">
                  @if (isset($review['avatar']) && $review['avatar'])
                    <div
                         class="mr-4 flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-xl font-bold text-white">
                      <img src="{{ asset($review['avatar']) }}" alt="Avatar" class="h-full w-full object-cover">
                    </div>
                  @else
                    <div
                         class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-xl font-bold text-white">
                      {{ mb_substr($review['name'] ?? 'U', 0, 1) }}
                    </div>
                  @endif
                  <div>
                    @if (isset($review['name']))
                      <h4 class="text-lg font-bold text-gray-900">{{ $review['name'] }}</h4>
                    @endif
                    @if (isset($review['rating']))
                      <div class="flex text-yellow-400">
                        @for ($i = 0; $i < min(5, (int) $review['rating']); $i++)
                          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                          </svg>
                        @endfor
                      </div>
                    @endif
                  </div>
                </div>
                @if (isset($review['details']))
                  <p class="text-base leading-relaxed text-gray-700">{{ $review['details'] }}</p>
                @endif
              </div>
            @endforeach
          </div>
        @endif
      @else
        <!-- Default Reviews -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8 lg:grid-cols-3">
          <!-- Review Card 1 -->
          <div
               class="rounded-2xl border-2 border-yellow-200 bg-gradient-to-br from-yellow-50 to-amber-50 p-6 shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="mb-4 flex items-center">
              <div
                   class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-xl font-bold text-white">
                র
              </div>
              <div>
                <h4 class="text-lg font-bold text-gray-900">রহিম উদ্দিন</h4>
                <div class="flex text-yellow-400">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                </div>
              </div>
            </div>
            <p class="text-base leading-relaxed text-gray-700">খুবই ভালো মধু পেয়েছি। সুন্দরবনের খাঁটি মধু।
              প্যাকেজিংও খুব সুন্দর। প্রতিদিন সকালে খাচ্ছি, শরীরে শক্তি পাচ্ছি।</p>
          </div>

          <!-- Review Card 2 -->
          <div
               class="rounded-2xl border-2 border-yellow-200 bg-gradient-to-br from-yellow-50 to-amber-50 p-6 shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="mb-4 flex items-center">
              <div
                   class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-xl font-bold text-white">
                ফ
              </div>
              <div>
                <h4 class="text-lg font-bold text-gray-900">ফাতেমা খাতুন</h4>
                <div class="flex text-yellow-400">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                </div>
              </div>
            </div>
            <p class="text-base leading-relaxed text-gray-700">ছোট প্যাকেটে থাকায় খুবই সুবিধা হয়েছে।
              বাচ্চাদের স্কুলে দিতে পারছি। মধুও খুবই ভালো মানের।</p>
          </div>

          <!-- Review Card 3 -->
          <div
               class="rounded-2xl border-2 border-yellow-200 bg-gradient-to-br from-yellow-50 to-amber-50 p-6 shadow-lg transition-all duration-300 hover:shadow-xl">
            <div class="mb-4 flex items-center">
              <div
                   class="mr-4 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-amber-500 text-xl font-bold text-white">
                ক
              </div>
              <div>
                <h4 class="text-lg font-bold text-gray-900">কামাল হোসেন</h4>
                <div class="flex text-yellow-400">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                  </svg>
                </div>
              </div>
            </div>
            <p class="text-base leading-relaxed text-gray-700">মধুর মান খুবই ভালো। প্যাকেজিং দেখে বুঝতে
              পারছি যে ফুড গ্রেড ব্যবহার করা হয়েছে। নির্ভেজাল মধু পেয়েছি।</p>
          </div>
        </div>
      @endif
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-amber-50 px-6 py-20">
    <h2 class="mb-12 text-center text-4xl font-bold md:text-5xl">সাধারণ জিজ্ঞাসা</h2>
    <div class="mx-auto max-w-6xl">
      <!-- FAQ Grid - 2x2 Layout -->
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
        @if (
            $honeyPage &&
                isset($honeyPage->content['faq']['items']) &&
                is_array($honeyPage->content['faq']['items']) &&
                count($honeyPage->content['faq']['items']) > 0)
          @foreach ($honeyPage->content['faq']['items'] as $index => $item)
            <div class="animate-fadeIn delay-{{ ($index + 1) * 100 }} opacity-0">
              <div class="ornate-border">
                <div class="ornate-corner top-left"></div>
                <div class="ornate-corner top-right"></div>
                <div class="ornate-corner bottom-left"></div>
                <div class="ornate-corner bottom-right"></div>

                <div class="question-icon absolute -right-3 -top-5 md:-right-5">?</div>

                <div class="relative rounded-2xl bg-gradient-to-br from-yellow-100 to-yellow-50 p-6 md:p-8">
                  @if (isset($item['question']))
                    <h3 class="mb-4 text-xl font-bold leading-tight text-gray-900 md:text-2xl">
                      Q. {{ $item['question'] }}
                    </h3>
                  @endif
                  @if (isset($item['answer']))
                    <div class="text-base leading-relaxed text-gray-800 md:text-lg">
                      <span class="font-semibold text-gray-900">A→</span> {{ $item['answer'] }}
                    </div>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        @else
          <!-- Default FAQ items -->
          <div class="animate-fadeIn opacity-0 delay-100">
            <div class="ornate-border">
              <div class="ornate-corner top-left"></div>
              <div class="ornate-corner top-right"></div>
              <div class="ornate-corner bottom-left"></div>
              <div class="ornate-corner bottom-right"></div>
              <div class="question-icon absolute -right-3 -top-5 md:-right-5">?</div>
              <div class="relative rounded-2xl bg-gradient-to-br from-yellow-100 to-yellow-50 p-6 md:p-8">
                <h3 class="mb-4 text-xl font-bold leading-tight text-gray-900 md:text-2xl">
                  Q. মধু কিভাবে সেবন করব?
                </h3>
                <div class="text-base leading-relaxed text-gray-800 md:text-lg">
                  <span class="font-semibold text-gray-900">A→</span> মধু খাওয়ার সঠিক নিয়ম নাই তবে
                  ১০ গ্রাম - ২০ গ্রাম একজন পুর্নবয়স্ক লোকের জন্য সেবন করতে অনেকে পরামর্শ দেন। তবে মধু
                  বেশি গ্রহণ করার ফলে কোন দুর্ঘটনা এখনো প্রমাণিত নয়। তবে মাত্রা-অতিরিক্ত সেবন না করাই
                  উত্তম।
                </div>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section class="bg-white px-6 py-20">
    <h2 class="mb-12 text-center text-4xl font-bold md:text-5xl">প্রাইস</h2>
    @if ($honeyShowProductPicker)
      <p class="mx-auto mb-10 max-w-2xl text-center text-base text-gray-700 md:text-lg">
        অর্ডার করার জন্য নিচে থেকে একটি পণ্য নির্বাচন করুন। চেকআউটে শুধু নির্বাচিত পণ্যটিই যাবে।
      </p>
    @endif
    <div class="mx-auto max-w-6xl {{ $honeyShowProductPicker ? 'space-y-4' : 'space-y-10' }}">
      @forelse ($honeyProductLines as $idx => $line)
        @php
          $regularPrice = (float) ($line['regular_price'] ?? 0);
          $offerPrice = (float) ($line['offer_price'] ?? 0);
          if ($offerPrice == 0 && $regularPrice > 0) {
              $offerPrice = $regularPrice;
          }
          $pickerTitle = $line['title'] ?? '';
          $pickerParen = trim((string) ($line['quantity'] ?? ''));
        @endphp
        @if ($honeyShowProductPicker)
          <div class="honey-picker-row">
            <input type="radio" name="honey_selected_line" id="honey_sel_line_{{ $idx }}" value="{{ $idx }}"
                   class="honey-row-radio"
                   {{ $loop->first ? 'checked' : '' }}
                   onchange="onHoneyProductLineChange(); updateTotal(); saveIncompleteOrder();">
            <label for="honey_sel_line_{{ $idx }}" class="honey-picker-card">
              @if (!empty($line['image']))
                <img src="{{ asset($line['image']) }}" alt="{{ $pickerTitle }}" class="honey-picker-thumb">
              @else
                <div class="honey-picker-thumb flex-shrink-0 bg-amber-100/80"></div>
              @endif
              <div class="min-w-0 flex-1">
                <div class="honey-picker-title">
                  {{ $pickerTitle }}
                  @if ($pickerParen !== '')
                    <span class="honey-picker-sub font-normal">({{ $pickerParen }})</span>
                  @endif
                </div>
                @if (!empty($line['short_description']))
                  <p class="mt-1 line-clamp-2 text-sm text-gray-600">{{ $line['short_description'] }}</p>
                @endif
                <div class="mt-2 flex flex-col gap-0.5">
                  @if ($regularPrice > 0 && $regularPrice > $offerPrice)
                    <span class="honey-picker-price-old">৳ {{ number_format($regularPrice, 0) }}</span>
                  @endif
                  @if ($offerPrice > 0)
                    <span class="honey-picker-price-new">৳ {{ number_format($offerPrice, 0) }}</span>
                    <span class="honey-picker-price-accent" aria-hidden="true"></span>
                  @endif
                </div>
              </div>
            </label>
          </div>
        @else
          <div class="border-honey rounded-2xl border-2 bg-gradient-to-r from-yellow-50 to-amber-50 p-10 shadow-lg">
            <div class="grid items-center gap-8 md:grid-cols-2">
              <div class="text-center md:text-left">
                <div class="mb-6">
                  @if (!empty($line['image']))
                    <img src="{{ asset($line['image']) }}" alt="{{ $line['title'] ?? 'Product' }}"
                         class="mx-auto mb-6 h-64 w-64 rounded-xl object-cover md:mx-0">
                  @endif
                </div>
              </div>
              <div>
                @if (!empty($line['title']))
                  <h3 class="mb-3 text-3xl font-bold">{{ $line['title'] }}</h3>
                @endif
                @if (!empty($line['quantity']))
                  <p class="mb-6 text-xl">{{ $line['quantity'] }}</p>
                @endif
                <div class="mb-6 flex items-center justify-start">
                  <div class="flex flex-col items-center md:items-start">
                    @if ($regularPrice > 0 && $regularPrice > $offerPrice)
                      <span class="price-cross">৳ {{ number_format($regularPrice, 0) }}</span>
                    @endif
                    @if ($offerPrice > 0)
                      <span class="text-honey price-offer font-bold">৳
                        {{ number_format($offerPrice, 0) }}</span>
                    @endif
                  </div>
                </div>
                @if (!empty($line['short_description']))
                  <p class="mb-8 text-lg">{{ $line['short_description'] }}</p>
                @endif
              </div>
            </div>
          </div>
        @endif
      @empty
        <div class="border-honey rounded-2xl border-2 bg-gradient-to-r from-yellow-50 to-amber-50 p-10 text-center text-gray-600 shadow-lg">
          Product details will appear here once configured in the admin.
        </div>
      @endforelse
    </div>
  </section>

  <!-- Checkout -->
  <section id="checkout" class="bg-amber-50 px-6 py-20">
    <h2 class="mb-12 text-center text-4xl font-bold md:text-5xl">চেকআউট</h2>
    <div class="mx-auto grid max-w-6xl gap-8 md:grid-cols-2">
      <!-- Order Form -->
      <div class="rounded-2xl bg-white p-8 shadow-lg">
        <h3 class="mb-6 text-2xl font-bold">আপনার তথ্য</h3>
        <form class="space-y-5">
          <input type="text" id="checkoutName" placeholder="নাম"
                 class="focus:border-honey w-full rounded-xl border-2 p-4 text-lg focus:outline-none">
          <input type="text" id="checkoutPhone" placeholder="ফোন"
                 class="focus:border-honey w-full rounded-xl border-2 p-4 text-lg focus:outline-none">
          <textarea id="checkoutAddress" placeholder="ঠিকানা" rows="4"
                    class="focus:border-honey w-full rounded-xl border-2 p-4 text-lg focus:outline-none"></textarea>

          <!-- Shipping Charge -->
          <div>
            <p class="mb-3 text-xl font-semibold">শিপিং চার্জ</p>
            <div class="space-y-3">
              @foreach ($delivery_charges as $charge)
                <label
                       class="hover:border-honey flex cursor-pointer items-center gap-3 rounded-xl border-2 p-4 transition-colors">
                  <input type="radio" name="shipping" value="{{ $charge->id }}"
                         data-amount="{{ $charge->amount }}" data-delivery-charge-id="{{ $charge->id }}"
                         class="accent-honey" onchange="updateTotal(); saveIncompleteOrder();"
                         {{ $loop->first ? 'checked' : '' }}>
                  <span class="text-lg">{{ $charge->title }} – ৳ {{ $charge->amount }}</span>
                </label>
              @endforeach
            </div>
          </div>

          <!-- Payment Method -->
          <div>
            <p class="mb-3 text-xl font-semibold">পেমেন্ট পদ্ধতি</p>
            <div class="mb-4 space-y-3">
              <label
                     class="hover:border-honey flex cursor-pointer items-center gap-3 rounded-xl border-2 p-4 transition-colors">
                <input type="radio" name="payment" value="cod" class="accent-honey" checked
                       onchange="togglePaymentDetails(); saveIncompleteOrder();">
                <span class="text-lg">ক্যাশ অন ডেলিভারি</span>
              </label>

              @foreach ($payment_methods as $method)
                <label
                       class="hover:border-honey flex cursor-pointer items-center gap-3 rounded-xl border-2 p-4 transition-colors">
                  <input type="radio" name="payment" value="{{ $method->id }}" class="accent-honey"
                         data-number="{{ $method->number }}" data-instruction="{{ $method->instruction }}"
                         data-type="{{ $method->type }}" onchange="togglePaymentDetails(); saveIncompleteOrder();">
                  <span class="text-lg">{{ $method->name }}</span>
                </label>
              @endforeach
            </div>

            <!-- Payment Details (Expandable) -->
            <div id="paymentDetails" class="mt-0 hidden space-y-4 rounded-xl bg-gray-100 p-6">
              <!-- Mobile Number Display -->
              <div>
                <p class="text-lg">
                  <span class="text-honey font-semibold">মোবাইল নাম্বার: </span>
                  <span id="agentNumber" class="text-honey font-semibold"></span>
                </p>
              </div>

              <!-- Instruction Display -->
              <div>
                <p class="text-lg">
                  <span class="font-semibold">নির্দেশনা: </span>
                  <span id="paymentInstruction"></span>
                </p>
              </div>

              <!-- Your Mobile Number Input -->
              <div>
                <input type="text" id="fromNumber" placeholder="আপনার মোবাইল নাম্বার *"
                       class="focus:border-honey w-full rounded-xl border-2 border-gray-300 bg-white p-3 text-lg focus:outline-none">
              </div>

              <!-- Transaction ID Input -->
              <div>
                <input type="text" id="transactionId" placeholder="ট্রানজেকশন আইডি লিখুন *"
                       class="focus:border-honey w-full rounded-xl border-2 border-gray-300 bg-white p-3 text-lg focus:outline-none">
              </div>

              <!-- Screenshot Upload -->
              <div>
                <input type="file" id="screenshot" accept="image/*"
                       class="focus:border-honey w-full rounded-xl border-2 border-gray-300 bg-white p-3 text-lg focus:outline-none">
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- Order Summary -->
      <div class="rounded-2xl bg-white p-8 shadow-lg md:h-[70%]">
        <h3 class="mb-6 text-2xl font-bold">অর্ডার সারাংশ</h3>

        <!-- Product Info (নির্বাচিত পণ্য — একাধিক থাকলে প্রাইস সেকশন থেকে বেছে নিন) -->
        <div class="mb-6 border-b-2 pb-6">
          <div id="honeyOrderSummaryRow" class="flex gap-4">
            <img id="honeySummaryImg" src="{{ !empty($firstLine['image']) ? asset($firstLine['image']) : '' }}" alt=""
                 class="{{ empty($firstLine['image']) ? 'hidden' : '' }} h-24 w-24 flex-shrink-0 rounded-lg object-cover">
            <div class="min-w-0 flex-1">
              <h4 id="honeySummaryTitle" class="mb-1 text-xl font-semibold">{{ $firstLine['title'] ?? '' }}</h4>
              <p id="honeySummaryQty" class="text-lg text-gray-600">{{ $firstLine['quantity'] ?? '' }}</p>
              <p id="honeySummaryUnit" class="text-honey mt-2 text-xl font-bold">
                @if ($honeySelectedUnitPrice > 0)
                  ৳ {{ number_format($honeySelectedUnitPrice, 0) }}
                @endif
              </p>
            </div>
          </div>
        </div>

        <!-- Price Breakdown -->
        <div class="mb-6 space-y-4">
          <div class="flex justify-between text-lg">
            <span>পণ্যের মূল্য:</span>
            <span class="font-semibold" id="productPrice">৳ {{ number_format($honeySelectedUnitPrice, 0) }}</span>
          </div>
          <div class="flex justify-between text-lg">
            <span>শিপিং চার্জ:</span>
            <span class="font-semibold" id="shippingCharge">৳ 0</span>
          </div>
          <div class="flex justify-between border-t-2 pt-4 text-lg">
            <span>সাবটোটাল:</span>
            <span class="font-semibold" id="subtotal">৳ {{ number_format($honeySelectedUnitPrice, 0) }}</span>
          </div>
          <div class="flex justify-between border-t-2 pt-4 text-2xl font-bold">
            <span>মোট:</span>
            <span class="text-honey" id="total">৳ {{ number_format($honeySelectedUnitPrice, 0) }}</span>
          </div>
        </div>

        <button onclick="trackCheckout(); placeOrder()"
                class="bg-honey hover:bg-honeyDark w-full rounded-xl py-4 text-xl font-semibold text-white transition-colors">অর্ডার
          করুন</button>
      </div>
    </div>
  </section>

  

  <footer class="bg-yellow-100 py-8 text-center text-lg">© 2026 MiniBee Honey. Developed by <a
       href="https://nixsoftware.net" target="_blank" class="text-blue-500 hover:text-blue-700">Nix Software</a>
  </footer>
<script>
    window.HONEY_LINES = @json($honeyLinesJson);
    window.HONEY_MULTI = @json($honeyShowProductPicker);

    function getHoneySelectedLineIndex() {
      const el = document.querySelector('input[name="honey_selected_line"]:checked');
      if (el) {
        return parseInt(el.value, 10);
      }
      return 0;
    }

    function getHoneySelectedUnitPrice() {
      const lines = window.HONEY_LINES || [];
      const i = getHoneySelectedLineIndex();
      if (!lines[i]) {
        return 0;
      }
      const p = lines[i].unitPrice;
      return p != null ? Number(p) : 0;
    }

    function onHoneyProductLineChange() {
      const lines = window.HONEY_LINES || [];
      const i = getHoneySelectedLineIndex();
      const row = lines[i];
      if (!row) {
        return;
      }
      const img = document.getElementById('honeySummaryImg');
      if (img) {
        if (row.image) {
          img.src = row.image;
          img.classList.remove('hidden');
        } else {
          img.removeAttribute('src');
          img.classList.add('hidden');
        }
      }
      const t = document.getElementById('honeySummaryTitle');
      if (t) {
        t.textContent = row.title || '';
      }
      const q = document.getElementById('honeySummaryQty');
      if (q) {
        q.textContent = row.quantity || '';
      }
      const u = document.getElementById('honeySummaryUnit');
      if (u) {
        u.textContent = row.unitPrice > 0 ? ('৳ ' + Math.round(Number(row.unitPrice))) : '';
      }
    }

    // Debounce utility function (1.5 second delay)
    function debounce(func, wait) {
      let timeout;
      return function executedFunction(...args) {
        const later = () => {
          clearTimeout(timeout);
          func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
      };
    }
    
    function trackCheckout() {
        fbq('track', 'InitiateCheckout');
    }

    // Function to save incomplete order via AJAX
    const saveIncompleteOrder = debounce(function() {
      const name = document.getElementById('checkoutName')?.value || '';
      const phone = document.getElementById('checkoutPhone')?.value || '';
      const address = document.getElementById('checkoutAddress')?.value || '';
      const shipping = document.querySelector('input[name="shipping"]:checked');
      const payment = document.querySelector('input[name="payment"]:checked');
      const fromNumber = document.getElementById('fromNumber')?.value || '';
      const transactionId = document.getElementById('transactionId')?.value || '';
      const screenshot = document.getElementById('screenshot')?.files[0];

      // Only save if at least name or phone is filled
      if (!name && !phone) {
        return;
      }

      const formData = new FormData();
      formData.append('name', name);
      formData.append('phone', phone);
      formData.append('address', address);

      if (shipping) {
        formData.append('delivery_charge_id', shipping.getAttribute('data-delivery-charge-id'));
      }

      if (payment) {
        formData.append('payment_method', payment.value);
      }

      if (fromNumber) {
        formData.append('fromNumber', fromNumber);
      }

      if (transactionId) {
        formData.append('transactionId', transactionId);
      }

      if (screenshot) {
        formData.append('screenshot', screenshot);
      }

      formData.append('_token', '{{ csrf_token() }}');

      // Send AJAX request (fail silently)
      fetch('{{ route('front.honey.incomplete-order') }}', {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      }).catch(error => {
        // Fail silently - don't interrupt user experience
        console.log('Failed to save incomplete order:', error);
      });
    }, 1500);

    // Add event listeners for form fields
    document.addEventListener('DOMContentLoaded', function() {
      const nameInput = document.getElementById('checkoutName');
      const phoneInput = document.getElementById('checkoutPhone');
      const addressInput = document.getElementById('checkoutAddress');
      const fromNumberInput = document.getElementById('fromNumber');
      const transactionIdInput = document.getElementById('transactionId');
      const screenshotInput = document.getElementById('screenshot');

      if (nameInput) {
        nameInput.addEventListener('keyup', saveIncompleteOrder);
      }
      if (phoneInput) {
        phoneInput.addEventListener('keyup', saveIncompleteOrder);
      }
      if (addressInput) {
        addressInput.addEventListener('keyup', saveIncompleteOrder);
      }
      if (fromNumberInput) {
        fromNumberInput.addEventListener('change', saveIncompleteOrder);
        fromNumberInput.addEventListener('keyup', saveIncompleteOrder);
      }
      if (transactionIdInput) {
        transactionIdInput.addEventListener('change', saveIncompleteOrder);
        transactionIdInput.addEventListener('keyup', saveIncompleteOrder);
      }
      if (screenshotInput) {
        screenshotInput.addEventListener('change', saveIncompleteOrder);
      }
      onHoneyProductLineChange();
      updateTotal();
    });

    function updateTotal() {
      const productPrice = Math.round(getHoneySelectedUnitPrice());
      const shippingRadio = document.querySelector('input[name="shipping"]:checked');
      const shippingCharge = shippingRadio ? parseInt(shippingRadio.getAttribute('data-amount')) : 0;
      const subtotal = productPrice;
      const total = productPrice + shippingCharge;

      document.getElementById('shippingCharge').textContent = '৳ ' + shippingCharge;
      const productPriceEl = document.getElementById('productPrice');
      if (productPriceEl) {
        productPriceEl.textContent = '৳ ' + productPrice;
      }
      document.getElementById('subtotal').textContent = '৳ ' + subtotal;
      document.getElementById('total').textContent = '৳ ' + total;
    }

    function togglePaymentDetails() {
      const paymentMethod = document.querySelector('input[name="payment"]:checked');
      const paymentDetails = document.getElementById('paymentDetails');
      const agentNumber = document.getElementById('agentNumber');
      const paymentInstruction = document.getElementById('paymentInstruction');

      if (paymentMethod && paymentMethod.value !== 'cod') {
        paymentDetails.classList.remove('hidden');

        const number = paymentMethod.getAttribute('data-number');
        const instruction = paymentMethod.getAttribute('data-instruction');
        const type = paymentMethod.getAttribute('data-type');

        agentNumber.textContent = number + (type ? ' (' + type + ')' : '');
        paymentInstruction.textContent = instruction;

      } else {
        paymentDetails.classList.add('hidden');
      }
    }

    function placeOrder() {
      const name = document.getElementById('checkoutName')?.value || '';
      const phone = document.getElementById('checkoutPhone')?.value || '';
      const address = document.getElementById('checkoutAddress')?.value || '';
      const shipping = document.querySelector('input[name="shipping"]:checked');
      const payment = document.querySelector('input[name="payment"]:checked');

      if (!name || !phone || !address || !shipping || !payment) {
        alert('অনুগ্রহ করে সব তথ্য পূরণ করুন');
        return;
      }

      if (window.HONEY_MULTI) {
        const linePick = document.querySelector('input[name="honey_selected_line"]:checked');
        if (!linePick) {
          alert('অনুগ্রহ করে প্রাইস সেকশন থেকে একটি পণ্য নির্বাচন করুন');
          return;
        }
      }

      // Validate payment details if online payment
      if (payment.value !== 'cod') {
        const fromNumber = document.getElementById('fromNumber').value;
        const transactionId = document.getElementById('transactionId').value;
        const screenshot = document.getElementById('screenshot').files[0];

        if (!fromNumber || !transactionId || !screenshot) {
          alert('অনুগ্রহ করে পেমেন্টের সব তথ্য পূরণ করুন');
          return;
        }
      }

      // Disable button to prevent double submission
      const submitButton = document.querySelector('button[onclick="placeOrder()"]');
      if (submitButton) {
        submitButton.disabled = true;
        submitButton.textContent = 'অর্ডার করা হচ্ছে...';
      }

      // Prepare form data
      const formData = new FormData();
      formData.append('name', name);
      formData.append('phone', phone);
      formData.append('address', address);
      formData.append('delivery_charge_id', shipping.value);
      formData.append('payment_method', payment.value);

      // Add payment details if not COD
      if (payment.value !== 'cod') {
        formData.append('fromNumber', document.getElementById('fromNumber').value);
        formData.append('transactionId', document.getElementById('transactionId').value);
        formData.append('screenshot', document.getElementById('screenshot').files[0]);
      }

      // Add CSRF token
      formData.append('_token', '{{ csrf_token() }}');
      formData.append('selected_line_index', String(getHoneySelectedLineIndex()));

      // Submit to backend
      fetch('{{ route('front.honey.checkout') }}', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Delete incomplete order on successful order placement
            // This is handled on the backend, but we can also call it here as a backup
            const deleteFormData = new FormData();
            deleteFormData.append('_token', '{{ csrf_token() }}');
            fetch('{{ route('front.honey.incomplete-order') }}', {
              method: 'POST',
              body: deleteFormData,
              headers: {
                'X-Requested-With': 'XMLHttpRequest'
              }
            }).catch(() => {
              // Ignore errors - backend should handle deletion
            });

            showToast('success', 'সফল!', data.msg || 'অর্ডার সফলভাবে সম্পন্ন হয়েছে!');
            setTimeout(() => {
              window.location.href = data.url;
            }, 2000);
          } else {
            showToast('error', 'ত্রুটি!', data.msg ||
              'অর্ডার সম্পন্ন করতে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
            if (submitButton) {
              submitButton.disabled = false;
              submitButton.textContent = 'অর্ডার করুন';
            }
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('error', 'ত্রুটি!', 'একটি ত্রুটি হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
          if (submitButton) {
            submitButton.disabled = false;
            submitButton.textContent = 'অর্ডার করুন';
          }
        });
    }

    // Toast Notification Function
    function showToast(type, title, message) {
      // Remove existing toast if any
      const existingToast = document.querySelector('.toast-notification');
      if (existingToast) {
        existingToast.remove();
      }

      const toast = document.createElement('div');
      toast.className = `toast-notification toast-${type}`;

      const icon = type === 'success' ? '✓' : '✕';
      const iconBg = type === 'success' ? 'rgba(255, 255, 255, 0.3)' : 'rgba(255, 255, 255, 0.3)';

      toast.innerHTML = `
                <div class="toast-icon" style="background: ${iconBg};">${icon}</div>
                <div class="toast-content">
                    <div class="toast-title">${title}</div>
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">×</button>
            `;

      document.body.appendChild(toast);

      // Auto remove after 5 seconds
      setTimeout(() => {
        toast.classList.add('hiding');
        setTimeout(() => {
          if (toast.parentElement) {
            toast.remove();
          }
        }, 300);
      }, 5000);
    }
  </script>
</body>

</html>
