
  const signUpBtn = document.getElementById('signUpButton')
  const signInBtn = document.getElementById('signInButton')
  const signInForm = document.getElementById('signIn')
  const signUpFrom = document.getElementById('signUp')

  signUpBtn.addEventListener('click', () => {
    signInForm.classList.add('hidden')
    signUpFrom.classList.remove('hidden')
  })

  signInBtn.addEventListener('click', () => {
    signInForm.classList.remove('hidden')
    signUpFrom.classList.add('hidden')
  })


//  Home page
const siteHeaderToggle = document.querySelector('.js-toggle');
const  siteHeader = document.querySelector('.site-header')

siteHeaderToggle.addEventListener('click', () => {
  siteHeader.classList.toggle('site-header-active')
})

const siteHeaderSignIn = document.querySelector('#header-signin')
const siteHeaderSignUp = document.querySelector('#header-signup')

siteHeaderSignIn.addEventListener('click', (e) => {
  e.preventDefault()
  signInForm.classList.toggle('hidden')
})

siteHeaderSignUp.addEventListener('click', (e) => {
  e.preventDefault()
  signUpFrom.classList.toggle('hidden')
})
