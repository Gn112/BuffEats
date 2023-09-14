/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./src/home/Cliente/**.{html,js,php}",
    "./src/Perfil/**.{html,js,php}",
    "./src/Perfil/**/**.{html,js,php}",
    "./src/globalAssets/**.js"
  ],
  theme: {
    extend: {
      colors: {
        vermelho: "#BD2323",
        hoververmelho: "#be4d4d",
        branco: "#ffffff",
        fontecinza: "#463B3B",
        hoverfontecinza: "#000000",
        cinzaclaro: "#F8F8F8",
        cinzafundo: "#EEEEEE",
        shadowcaixagrande: "0rem .3125rem .625rem .125rem rgba(0, 0, 0, 0.2)",
        shadowcaixainput: "0rem .25rem .625rem rgba(0, 0, 0, 0.15)",
      },
      screens: {
        'widescreen': { 'raw': '(min-aspect-ratio: 3/2)' },
        'tallscreen': { 'raw': '(max-aspect-ratio: 13/20)' },
      },
      keyframes: {
        'open-menu': {
          '0%': { transform: 'scaleY(0)'},
          '80%': { transform: 'scaleY(1.2)'},
          '100%': { transform: 'scaleY(1)'},
        },
      },
      animation: {
        'open-menu': 'open-menu 0.5s ease-in-out forwards',
      }
    },
    fontFamily: {
      'main': ['Outfit', 'sans'],
    },
  },
  plugins: [],
};
