/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      }
    },
    extend: {
      screens: {
        '2xl': '1320px',
      },
      colors: {
        primary: '#176BB9',
        secondary: '#55A9F7',
        terinary: '#090F4E',
        button: '#55A9F6',
        desc: '#0C1623',
        darkprimary: '#0C1623',
        darkdesc: '#B5B5B5'
      },
    },
  },
  plugins: [],
}
