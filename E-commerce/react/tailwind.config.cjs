// @type {import('tailwindcss').config}

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  content:["./src/**/*.{html,js,jsx,ts, tsx}"],
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
  ],
}
