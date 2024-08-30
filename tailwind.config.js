import preset from './vendor/filament/support/tailwind.config.preset'
/** @type {import('tailwindcss').Config} */
export default {
  presets: [preset],
  
  content: [
    './app/Filament/**/*.php',
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
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
        '10.5/12':'86%',
        'c2xl':'936px'
      },
      fontFamily:{
        'sans-pro3': ['"Source Sans 3"', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
      },
      fontSize: {
        '4.5xl': ['2.625rem', { lineHeight: '1.75' }], // 42px dengan line-height 46px
      },
      aspectRatio:{
        '3/4' : '3/4',
        '4/6' : '4/6'
      },

    },
  },
  plugins: [
      require('flowbite/plugin'),
      require("tw-elements/plugin.cjs"),
      
  ],
}