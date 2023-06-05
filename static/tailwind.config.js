/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        gray: '#242424',
        dark: '#000000',
        light: '#FFFFFF',
        yellow: '#FFBE42',
        lgray:'#3D3C3C',
      }
    },
    // container:{
    //   center: true,
    //   padding: '15px',
    // },
  },
  plugins: [],
}
