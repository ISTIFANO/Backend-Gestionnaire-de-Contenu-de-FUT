/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/**/*.{html,js,php}", // Include all subfolders inside 'views'
    "./public/**/*.{html,js,php}", // Include 'public' folder
    "./src/**/*.{html,js,php}" // Include 'src' folder for additional files
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
