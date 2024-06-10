<?php
  $title = "Contact Us";
require 'includes/header.php';
?>

<div class=" main-content--contact-page">
    <h1 class="visually-hidden">Contacts</h1>
    <div class="container">
      <!-- GET IN TOUCH -->
      <section class="two-column-section">
          <h2 class="two-column-section__heading">Get in Touch</h2>
          <div class="two-column-section__content">
            <p class="two-column-section__text">I’d love to hear about what you’re working on and how I could help. I’m currently looking for a new role and am open to a wide range of opportunities. My preference would be to find a position in a company in London. But I’m also happy to hear about opportunites that don’t fit that description. I’m a hard-working and positive person who will always approach each task with a sense of purpose and attention to detail. Please do feel free to check out my online profiles below and get in touch using the form.</p>
            <!-- SOCIALS -->
        <div class="socials socials--dark">
          <ul class="socials__list">
            <li class="socials__item">
              <a class="socials__link" href="#" target="_blank" aria-label="GitHub profile">
                <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none"><path fill="currentColor" d="M12.5 0C5.594 0 0 5.51 0 12.305c0 5.437 3.581 10.048 8.547 11.674.625.116.854-.265.854-.592 0-.292-.01-1.066-.016-2.092-3.477.742-4.21-1.65-4.21-1.65-.569-1.42-1.39-1.8-1.39-1.8-1.133-.764.087-.748.087-.748 1.255.086 1.914 1.268 1.914 1.268 1.115 1.881 2.927 1.338 3.641 1.024.113-.797.434-1.338.792-1.646-2.776-.308-5.694-1.366-5.694-6.08 0-1.343.484-2.44 1.286-3.302-.14-.31-.562-1.562.11-3.256 0 0 1.047-.33 3.437 1.261 1-.273 2.063-.409 3.125-.415 1.063.006 2.125.142 3.125.415 2.375-1.591 3.422-1.261 3.422-1.261.672 1.694.25 2.945.125 3.256.797.861 1.281 1.959 1.281 3.302 0 4.727-2.921 5.767-5.703 6.07.438.369.844 1.123.844 2.276 0 1.647-.015 2.97-.015 3.37 0 .322.218.707.859.584 5-1.615 8.579-6.23 8.579-11.659C25 5.51 19.403 0 12.5 0Z"/></svg>
              </a>
            </li>
            <li class="socials__item">
              <a class="socials__link" href="#" target="_blank" aria-label="Twitter profile">
                <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="none"><path fill="currentColor" d="M24 2.557a9.83 9.83 0 0 1-2.828.775A4.932 4.932 0 0 0 23.337.608a9.864 9.864 0 0 1-3.127 1.195A4.916 4.916 0 0 0 16.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 0 1 1.671 1.149a4.93 4.93 0 0 0 1.523 6.574 4.903 4.903 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 0 1-2.224.084 4.928 4.928 0 0 0 4.6 3.419A9.9 9.9 0 0 1 0 17.54a13.94 13.94 0 0 0 7.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0 0 24 2.557Z"/></svg>
            </a>
          </li>
            <li class="socials__item">
              <a class="socials__link" href="#" target="_blank" aria-label="Linkedin profile">
                <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="currentColor" fill-rule="evenodd" d="M2.4 0h19.2C22.92 0 24 1.08 24 2.4v19.2c0 1.32-1.08 2.4-2.4 2.4H2.4C1.08 24 0 22.92 0 21.6V2.4C0 1.08 1.08 0 2.4 0Zm1.2 20.4h3.6V9.6H3.6v10.8ZM5.4 7.56c-1.2 0-2.16-.96-2.16-2.16 0-1.2.96-2.16 2.16-2.16 1.2 0 2.16.96 2.16 2.16 0 1.2-.96 2.16-2.16 2.16ZM16.8 20.4h3.6v-6.84c0-2.28-1.92-4.2-4.2-4.2-1.08 0-2.4.72-3 1.68V9.6H9.6v10.8h3.6v-6.36c0-.96.84-1.8 1.8-1.8.96 0 1.8.84 1.8 1.8v6.36Z" clip-rule="evenodd"/></svg>
            </a>
          </li>
          </ul>
        </div>
          </div>
        </section>

        <!-- CONTACT-FORM -->
        <section class="two-column-section">
          <h2 class="two-column-section__heading">Contact Me</h2>
          <div class="two-column-section__content">
            <form action="process-contact.php" method="POST" class="contact-form">
              <div class="form__group">
                <label for="name-input" class="form__label">Name</label>
                <input type="text" class="form__field" name="name" id="name-input" placeholder="Jane Appleseed" required>
              </div>

              <div class="form__group">
                <label for="email-input" class="form__label">Email Address</label>
                <input type="email" class="form__field" name="email" id="email-input" placeholder="email@example.com" required>
                <div class="form__error-message">Please enter valid email</div>
              </div>

              <div class="form__group">
                <label for="email-input" class="form__label">Message</label>
                <textarea class="form__field form__field-textarea" name="message" id="message-field" placeholder="How can I help?" required></textarea>
              </div>

              <div class="from__group">
                <button class="solid-button js-contact-btn" type="submit">Send message</button>
              </div>

            </form>
          </div>
      </section>

    </div>
  </div>



<?php require 'includes/footer.php'; ?>