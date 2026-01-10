<!-- Contact Widget (WhatsApp + Call) -->
<div class="contact-widget" id="contactWidget">
    <!-- WhatsApp Button -->
    <div class="contact-btn whatsapp-btn" id="whatsappBtn">
        <i class="bi bi-whatsapp"></i>
        <span class="contact-tooltip">WhatsApp</span>
    </div>
    
    <!-- Call Button -->
    <div class="contact-btn call-btn" id="callBtn">
        <i class="bi bi-telephone-fill"></i>
        <span class="contact-tooltip">Call Now</span>
    </div>
    
    <!-- WhatsApp Chat Popup -->
    <div class="chat-popup" id="chatPopup">
        <div class="chat-header">
            <div class="d-flex align-items-center">
                <img src="./assets/logo/logo.jpeg" alt="Lawanya Clinic" class="chat-avatar">
                <div class="ms-3">
                    <h6 class="mb-0">Lawanya Derma Clinic</h6>
                    <small class="text-success">
                        <i class="bi bi-circle-fill me-1" style="font-size: 8px;"></i>
                        Online Now
                    </small>
                </div>
            </div>
            <button class="chat-close" id="chatClose">
                <i class="bi bi-x"></i>
            </button>
        </div>
        
        <div class="chat-body">
            <div class="chat-message">
                <p>👋 Hello! Welcome to Lawanya Derma & Aesthetic Clinic</p>
                <p>How can we help you today?</p>
                <small class="text-muted">Typically replies instantly</small>
            </div>
        </div>
        
        <div class="chat-footer">
            <a href="https://wa.me/917042179159?text=Hi%2C%20I%20would%20like%20to%20book%20a%20consultation%20at%20Lawanya%20Derma%20Clinic" 
               target="_blank" class="btn btn-success w-100">
                <i class="bi bi-whatsapp me-2"></i>Start Chat on WhatsApp
            </a>
        </div>
    </div>
</div>

<style>
.contact-widget {
    position: fixed;
    bottom: 30px;
    left: 30px;
    z-index: 1001;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-btn {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    position: relative;
}

.whatsapp-btn {
    background: #25D366;
    animation: pulse 2s infinite;
}

.whatsapp-btn:hover {
    background: #128C7E;
    transform: scale(1.1);
}

.call-btn {
    background: var(--primary-blue);
    border: 2px solid var(--accent-teal);
}

.call-btn:hover {
    background: var(--accent-teal);
    color: var(--white);
    transform: scale(1.1);
}

@keyframes pulse {
    0% {
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
    }
    50% {
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.8);
    }
    100% {
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
    }
}

.contact-tooltip {
    position: absolute;
    left: 70px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 8px 12px;
    border-radius: 20px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.contact-btn:hover .contact-tooltip {
    opacity: 1;
    left: 65px;
}

.chat-popup {
    position: absolute;
    bottom: 0;
    left: 80px;
    width: 320px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    display: none;
    overflow: hidden;
}

.chat-popup.show {
    display: block;
    animation: slideLeft 0.3s ease;
}

@keyframes slideLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.chat-header {
    background: var(--primary-blue);
    color: white;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.chat-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.chat-close {
    background: none;
    border: none;
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.chat-close:hover {
    background: rgba(255,255,255,0.2);
}

.chat-body {
    padding: 20px;
    background: #f8f9fa;
}

.chat-message {
    background: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 10px;
    position: relative;
}

.chat-message::before {
    content: '';
    position: absolute;
    top: 15px;
    left: -8px;
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 8px solid white;
}

.chat-footer {
    padding: 15px;
    background: white;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .contact-widget {
        bottom: 20px;
        left: 20px;
        gap: 12px;
    }
    
    .contact-btn {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
    }
    
    .chat-popup {
        width: 280px;
        left: 70px;
    }
    
    .contact-tooltip {
        display: none;
    }
}

@media (max-width: 480px) {
    .contact-widget {
        bottom: 15px;
        left: 15px;
        gap: 10px;
    }
    
    .contact-btn {
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
    }
    
    .chat-popup {
        width: 260px;
        left: 60px;
        bottom: -10px;
    }
}

/* Adjust back-to-top button position */
.back-to-top {
    right: 30px !important;
    left: auto !important;
}

@media (max-width: 768px) {
    .back-to-top {
        right: 20px !important;
        bottom: 20px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const whatsappBtn = document.getElementById('whatsappBtn');
    const callBtn = document.getElementById('callBtn');
    const chatPopup = document.getElementById('chatPopup');
    const chatClose = document.getElementById('chatClose');
    
    if (whatsappBtn && chatPopup && chatClose) {
        // WhatsApp button click
        whatsappBtn.addEventListener('click', function() {
            chatPopup.classList.toggle('show');
        });
        
        // Close chat
        chatClose.addEventListener('click', function() {
            chatPopup.classList.remove('show');
        });
        
        // Close chat when clicking outside
        document.addEventListener('click', function(e) {
            if (!whatsappBtn.contains(e.target) && !chatPopup.contains(e.target)) {
                chatPopup.classList.remove('show');
            }
        });
    }
    
    // Call button click
    if (callBtn) {
        callBtn.addEventListener('click', function() {
            window.location.href = 'tel:+917042179159';
        });
    }
});
</script>