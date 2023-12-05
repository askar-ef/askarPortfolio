/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'askar-100': '#D8DEFF',
        'askar-200': '#6981FF',
        'askar-300': '#3D51BF',
    },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

