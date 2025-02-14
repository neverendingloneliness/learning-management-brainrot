/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      transformStyle : {
        '3d' : 'preserve-3d'
      }
    },
  },
  plugins: [],
}

