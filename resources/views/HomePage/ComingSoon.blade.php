<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Something Great Is Coming Soon</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Arial", sans-serif;
      }

      body {
        background-color: #111;
        color: #fff;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        position: relative;
      }

      .stars {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 0;
      }

      .container {
        text-align: center;
        z-index: 1;
        padding: 2rem;
        max-width: 800px;
        position: relative;
      }

      h1 {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #556270);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 1.5s ease forwards;
      }

      p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        color: #ccc;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 1.5s ease forwards 0.5s;
      }

      .countdown {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 1.5s ease forwards 1s;
      }

      .countdown-item {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .countdown-value {
        font-size: 2.5rem;
        font-weight: bold;
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
      }

      .countdown-label {
        font-size: 0.9rem;
        color: #999;
      }

      .email-form {
        max-width: 500px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 1.5s ease forwards 1.5s;
      }

      input {
        padding: 0.8rem 1.2rem;
        border: none;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 1rem;
      }

      button {
        padding: 0.8rem 1.2rem;
        border: none;
        border-radius: 30px;
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        color: #fff;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(78, 205, 196, 0.3);
      }

      @keyframes fadeIn {
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes twinkle {
        0%,
        100% {
          opacity: 0.3;
        }
        50% {
          opacity: 1;
        }
      }

      .pulse {
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(
          circle,
          rgba(78, 205, 196, 0.2) 0%,
          rgba(78, 205, 196, 0) 70%
        );
        border-radius: 50%;
        animation: pulse 4s infinite;
        z-index: 0;
      }

      @keyframes pulse {
        0% {
          transform: scale(0.8);
          opacity: 1;
        }
        70% {
          transform: scale(1.5);
          opacity: 0;
        }
        100% {
          transform: scale(0.8);
          opacity: 0;
        }
      }

      @media (max-width: 768px) {
        h1 {
          font-size: 2.5rem;
        }
        p {
          font-size: 1.2rem;
        }
        .countdown {
          gap: 1rem;
        }
        .countdown-value {
          font-size: 1.8rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="stars" id="stars"></div>
    <div class="pulse"></div>

    <div class="container">
      <h1>Something Great Is Coming Soon</h1>
      <p>We're working on something amazing. Stay tuned for the big reveal!</p>

      <!-- <div class="countdown">
        <div class="countdown-item">
          <div class="countdown-value" id="days">00</div>
          <div class="countdown-label">Days</div>
        </div>
        <div class="countdown-item">
          <div class="countdown-value" id="hours">00</div>
          <div class="countdown-label">Hours</div>
        </div>
        <div class="countdown-item">
          <div class="countdown-value" id="minutes">00</div>
          <div class="countdown-label">Minutes</div>
        </div>
        <div class="countdown-item">
          <div class="countdown-value" id="seconds">00</div>
          <div class="countdown-label">Seconds</div>
        </div>
      </div> -->

      <!-- <div class="email-form">
        <input type="email" placeholder="Enter your email for updates" />
        <button id="notify-btn">Notify Me</button>
      </div>
    </div> -->

    <script>
      // Create stars background
      function createStars() {
        const starsContainer = document.getElementById("stars");
        const starCount = 200;

        for (let i = 0; i < starCount; i++) {
          const star = document.createElement("div");
          const size = Math.random() * 3 + 1;

          star.style.position = "absolute";
          star.style.width = `${size}px`;
          star.style.height = `${size}px`;
          star.style.backgroundColor = "#fff";
          star.style.borderRadius = "50%";
          star.style.left = `${Math.random() * 100}%`;
          star.style.top = `${Math.random() * 100}%`;
          star.style.opacity = Math.random() * 0.7 + 0.3;
          star.style.animation = `twinkle ${Math.random() * 5 + 3}s infinite`;
          star.style.animationDelay = `${Math.random() * 5}s`;

          starsContainer.appendChild(star);
        }
      }

      // Set countdown to a date 30 days from now
      function startCountdown() {
        const countdownDate = new Date();
        countdownDate.setDate(countdownDate.getDate() + 30);

        function updateCountdown() {
          const now = new Date();
          const distance = countdownDate - now;

          const days = Math.floor(distance / (1000 * 60 * 60 * 24));
          const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          );
          const minutes = Math.floor(
            (distance % (1000 * 60 * 60)) / (1000 * 60)
          );
          const seconds = Math.floor((distance % (1000 * 60)) / 1000);

          document.getElementById("days").innerHTML = days
            .toString()
            .padStart(2, "0");
          document.getElementById("hours").innerHTML = hours
            .toString()
            .padStart(2, "0");
          document.getElementById("minutes").innerHTML = minutes
            .toString()
            .padStart(2, "0");
          document.getElementById("seconds").innerHTML = seconds
            .toString()
            .padStart(2, "0");
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
      }

      // Notify button effect
      function setupNotifyButton() {
        const notifyBtn = document.getElementById("notify-btn");

        notifyBtn.addEventListener("click", () => {
          const emailInput = document.querySelector('input[type="email"]');
          const email = emailInput.value.trim();

          if (email && /^\S+@\S+\.\S+$/.test(email)) {
            notifyBtn.textContent = "Thank You!";
            emailInput.value = "";

            setTimeout(() => {
              notifyBtn.textContent = "Notify Me";
            }, 3000);
          } else {
            emailInput.style.border = "1px solid #ff6b6b";
            emailInput.style.animation = "shake 0.5s ease";

            setTimeout(() => {
              emailInput.style.border = "none";
              emailInput.style.animation = "none";
            }, 1000);
          }
        });
      }

      // Initialize
      document.addEventListener("DOMContentLoaded", () => {
        createStars();
        startCountdown();
        setupNotifyButton();
      });
    </script>
  </body>
</html>


