//  Home page
const siteHeaderToggle = document.querySelector('.js-toggle');
const  siteHeader = document.querySelector('.site-header')

siteHeaderToggle.addEventListener('click', () => {
  siteHeader.classList.toggle('site-header-active')
})



const userProfile = document.querySelector('.user-profile__btn')
const userProfileList = document.querySelector('.user-profile__menu');

userProfile.addEventListener('click', () => {
  userProfileList.classList.toggle('hidden')
})


const commentBtn = document.querySelectorAll('.blog__comment-btn');
const commentForm = document.querySelectorAll('.comment-form')
const commentInput = document.querySelectorAll('.comment-input')
const commentText = document.querySelectorAll('.comment-text')



commentBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    const postContainer = btn.closest('.blog__item');
    const commentForm = postContainer.querySelector('.comment-form');
    if (commentForm) {
      commentForm.classList.toggle('show');
    }
  });
});

commentInput.forEach((item) => {
  item.addEventListener('input', (e) => {
    const postConatiner = item.closest('.blog__item');
    const commentText = postConatiner.querySelector('.comment-text');
    if(commentText) {
      commentText.innerHTML = e.target.value
    }
  })
})


// Contact page
const contactBtn = document.querySelector('.js-contact-btn');

contactBtn.addEventListener('click', () => {
  alert("Message sent successfully!")
})
