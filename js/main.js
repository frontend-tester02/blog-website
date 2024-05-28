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