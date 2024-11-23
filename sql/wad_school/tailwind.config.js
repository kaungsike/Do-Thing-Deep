/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "node_modules/preline/dist/*.js",
    "./*.php",
    "./template/*.php",
  ],
  darkMode: 'class',
  theme: {
    extend: {},
  },
  plugins: [require("preline/plugin")],
};
