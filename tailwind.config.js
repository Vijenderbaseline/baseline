/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*"],
  theme: {
    extend: {},
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#bb372a",
          "secondary": "#FFE7E4",        
          "accent": "#FFACA3",        
          "neutral": "#bb372a",
          "base-100": "#ffffff",
          "info": "#5194db",
          "success": "#63deb7",
          "warning": "#f2a218",
          "error": "#f55c73",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}

