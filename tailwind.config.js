/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/home/Cliente/**.{html,js,php}"],
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
      fontFamily: {
        outfit: ['Outfit','Arial'],
      }
    },
  },
  plugins: [],
};
