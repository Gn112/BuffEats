/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./src/Views/**/*.{html,js,php,phtml}",
    "./Public/**/*.{html,js,php,phtml}",
  ],
  theme: {
    extend: {
      colors: {
        vermelho: "#BD2323",
        hoververmelho: "#be4d4d",
        branco: "#ffffff",
        fontecinza: "#463B3B",
        fontemarrom: "#3D1E1E",
        hoverfontecinza: "#000000",
        cinzaclaro: "#F8F8F8",
        cinzafundo: "#EEEEEE",
        caixagrande: "0rem .3125rem .625rem .125rem rgba(0, 0, 0, 0.2)",
        caixainput: "0rem .25rem .625rem rgba(0, 0, 0, 0.15)",
      },
      screens: {
        widescreen: { raw: "(min-aspect-ratio: 3/2)" },
        tallscreen: { raw: "(max-aspect-ratio: 13/20)" },
      },
      keyframes: {
        "open-menu": {
          "0%": { transform: "scaleY(0)" },
          "80%": { transform: "scaleY(1.2)" },
          "100%": { transform: "scaleY(1)" },
        },
      },
      animation: {
        "open-menu": "open-menu 0.5s ease-in-out forwards",
      },
    },
    fontFamily: {
      sans: ['Outfit', 'sans'],
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          fontFamily: "Outfit",
          primary: "#BD2323",
          secondary: "#fecdd3",
          accent: "#FFFFFF",
          neutral: "#F7F7F7",
          "base-100": "#EEEEEE",
          info: "#24BD4F",
          success: "#15c17c",
          warning: "#faa742",
          error: "#7D3737",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
};
