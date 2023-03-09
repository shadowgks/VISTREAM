/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        'color-primary': '#111620',
        'color-primary-75': '#171c26',
        'color-secondary': '#88188f',
        'color-three': '#bd5ad4',
        'color-links': '#E9AAF8'
      },
      width: {
        'container': '95%'
      }
    },
  },
  plugins: [],
}
