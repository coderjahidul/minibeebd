@php
    $info = \App\Models\Information::first();
@endphp

@if($info && $info->live_chat_active == 1)
<div class="floating-chat-widget">
    <div class="chat-options">
        @if($info->phone_active == 1 && !empty($info->owner_phone))
        <a href="tel:{{ $info->owner_phone }}" class="chat-option phone" title="Call Us">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" style="width: 22px; height: 22px;"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
        </a>
        @endif
        
        @if($info->whats_active == 1 && !empty($info->whats_num))
        <a href="https://wa.me/88{{ $info->whats_num }}" class="chat-option whatsapp" target="_blank" title="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" style="width: 28px; height: 28px;"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157.1zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.7 57.4c2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
        </a>
        @endif
        
        @if($info->messenger_active == 1 && !empty($info->messenger_link))
        <a href="{{ $info->messenger_link }}" class="chat-option messenger" target="_blank" title="Messenger">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" style="width: 25px; height: 25px;"><path d="M256.55 8C116.52 8 2.74 116.49 2.74 250c0 74 33.72 141.52 89.28 186.61a12.08 12.08 0 0 0 7.82 2.83l.51 .02c7.17 .26 38.32 1.57 69.83-9.57a14.28 14.28 0 0 1 12.12 2.37l5.44 3.65c20.37 13.7 44.15 20.89 68.81 20.89 139.92 0 253.8-108.49 253.8-242S396.47 8 256.55 8zm78.69 220.2-57.92 90.71a17.65 17.65 0 0 1-24.58 4.77l-56.34-41.74a11.16 11.16 0 0 0-13.23 .02l-64.88 47.93c-7 5.17-15.65-3.32-10.6-10.46l57.92-90.71a17.65 17.65 0 0 1 24.58-4.77l56.34 41.74a11.16 11.16 0 0 0 13.23-.02l64.88-47.93c7-5.17 15.65 3.32 10.6 10.46z"/></svg>
        </a>
        @endif
    </div>
    
    <div class="chat-toggle-wrapper">
        <span class="chat-tooltip">Contact us</span>
        <button class="chat-toggle-btn" aria-label="Toggle Chat">
            <svg class="icon-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" style="width: 26px; height: 26px;"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"/></svg>
            <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor" style="width: 24px; height: 24px; display: none;"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </button>
    </div>
</div>

<style>
.floating-chat-widget {
    position: fixed;
    bottom: 80px; /* Above mobile nav */
    right: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
@media (min-width: 768px) {
    .floating-chat-widget {
        bottom: 30px;
        right: 30px;
    }
}
.chat-options {
    display: flex;
    flex-direction: column-reverse; /* Icons emerge upwards */
    gap: 12px;
    margin-bottom: 15px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
}
.floating-chat-widget.active .chat-options {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.chat-option {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: transform 0.2s, background-color 0.2s;
}
.chat-option:hover {
    transform: scale(1.1);
    color: white;
}
.chat-option.phone { background-color: #00d289; }
.chat-option.whatsapp { background-color: #25d366; }
.chat-option.messenger { background-color: #0084ff; }

.chat-toggle-wrapper {
    display: flex;
    align-items: center;
    gap: 12px;
}
.chat-tooltip {
    background: white;
    padding: 10px 18px;
    border-radius: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    font-size: 15px;
    font-weight: 600;
    color: #4a4a4a;
    position: relative;
    transition: opacity 0.3s, transform 0.3s;
    cursor: pointer;
    font-family: inherit;
}
.chat-tooltip::after {
    content: '';
    position: absolute;
    right: -7px;
    top: 50%;
    transform: translateY(-50%);
    border-width: 7px 0 7px 7px;
    border-style: solid;
    border-color: transparent transparent transparent white;
}
.floating-chat-widget.active .chat-tooltip {
    opacity: 0;
    transform: translateX(-10px);
    pointer-events: none;
}
.chat-toggle-btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #a87ffb; /* Matches image */
    color: white;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(168, 127, 251, 0.4);
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.chat-toggle-btn:hover {
    transform: scale(1.05);
}
.floating-chat-widget.active .chat-toggle-btn {
    background-color: #a87ffb;
    transform: rotate(90deg);
}
.floating-chat-widget.active .icon-open { display: none !important; }
.floating-chat-widget.active .icon-close { display: block !important; transform: rotate(-90deg); }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const widget = document.querySelector('.floating-chat-widget');
    const toggleBtn = document.querySelector('.chat-toggle-btn');
    const tooltip = document.querySelector('.chat-tooltip');
    
    if (toggleBtn && widget) {
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            widget.classList.toggle('active');
        });
        if(tooltip) {
            tooltip.addEventListener('click', function(e) {
                e.preventDefault();
                widget.classList.add('active');
            });
        }
    }
});
</script>
@endif
