/** @type {import('tailwindcss').Config} */
export default {
  
  content: [
    
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./index.html",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/js/**/*.js"
  ],
  theme: {
    extend: {
      height:{
        '82' :'20.5rem',
        '100' :'25rem',
        '102' :'25.5rem',
        '112' :'28rem',
        '120' :'30rem',
        '128' :'32rem',
        '132' :'33rem',
        '140' :'35rem',
        '160' :'40rem',
        '168' :'42rem',
        'cs1' :'35rem',
        '256' :'65rem',
        'cmd' : '460.8px',
        'clg': '576px',
      },
      width: {
        'cmd' : '345.6px',
        'clg':'432px',
        'cxl':'576px',
        '8.5/12':'70%',
        '10.5/12':'86%',
        'c2xl':'936px'
      },
      fontFamily:{
        'sans-pro3': ['"Source Sans 3"', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
        'oswald': ['Oswald', 'sans-serif'],
      },
      fontSize: {
        '4.5xl': ['2.625rem', { lineHeight: '1.75' }],
        '5.5xl': ['3.375rem', { lineHeight: '1.20' }],
        '7.5xl' : ['5.25rem', { lineHeight: '1.0' }],
        '9.5xl' : ['8.5rem', { lineHeight: '1.0' }],
      },
      aspectRatio:{
        '3/4' : '3/4',
        '4/6' : '4/6'
      },
      colors:{
        'main-bg' : '#2596be',
        'main-bg-2' : '#1a6d8a',
        '2nd-bg' : '#00111A',
      },
      opacity:{
        '39' : '.39',
      },
      fontWeight:{
        'semisemibold':'645',
      },
      keyframes:{
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        },
      },
      animation:{
        wiggle: 'wiggle 1s ease-in-out infinite',
      },
    },
  },
  plugins: [
    require("tw-elements/plugin.cjs")  
  ],
  darkMode: "class",
}