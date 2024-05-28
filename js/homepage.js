import { register } from "./main";

// Home page
const siteHeaderToggle = document.querySelector('.js-toggle');
const  siteHeader = document.querySelector('.site-header')

siteHeaderToggle.addEventListener('click', () => {
  siteHeader.classList.toggle('site-header-active')
})

register()