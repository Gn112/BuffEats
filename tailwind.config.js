/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,php}", "./.{html,js,php}"],
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
        amarelo: "#EFB520",
        shadowcaixagrande: "0rem .3125rem .625rem .125rem rgba(0, 0, 0, 0.2)",
        shadowcaixainput: "0rem .25rem .625rem rgba(0, 0, 0, 0.15)",
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
      sans: [
        '"Outfit"',
        "system-ui",
        "-apple-system",
        "BlinkMacSystemFont",
        '"Segoe UI"',
        "Roboto",
        '"Helvetica Neue"',
        "Arial",
        '"Noto Sans"',
        "sans-serif",
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"',
      ],
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          utils: true,
          base: true,
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
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
