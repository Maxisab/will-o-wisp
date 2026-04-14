/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html"],
  theme: {
    extend: {
      fontFamily: {
        custom: ['oldeEnglish', 'sans-serif'],
        spartan: ['League Spartan', 'sans-serif'],
      },
      colors: {
        'redMain':'#9C0208',
        'redBright':'#CF0000',
        'darkMain':'#101220',
        'lightMain':'#C8C7D4',
      }
    },
  },
  plugins: [],
}

